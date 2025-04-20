<?php
// Process feedback form submission
// This file handles server-side validation and database storage

// Include database connection and functions
include '../includes/db_connection.php';
include '../includes/functions.php';

// Set page title
$pageTitle = "Feedback Submission";

// Initialize variables
$formSubmitted = false;
$formValid = false;
$errorMessages = [];

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $formSubmitted = true;
    
    // Get form data and sanitize
    $firstName = isset($_POST['firstName']) ? sanitizeInput($_POST['firstName']) : '';
    $lastName = isset($_POST['lastName']) ? sanitizeInput($_POST['lastName']) : '';
    $email = isset($_POST['email']) ? sanitizeInput($_POST['email']) : '';
    $phone = isset($_POST['phone']) ? sanitizeInput($_POST['phone']) : '';
    $gender = isset($_POST['gender']) ? sanitizeInput($_POST['gender']) : '';
    $city = isset($_POST['city']) ? sanitizeInput($_POST['city']) : '';
    $interests = isset($_POST['interests']) ? $_POST['interests'] : [];
    $feedbackText = isset($_POST['feedback']) ? sanitizeInput($_POST['feedback']) : '';
    $rating = isset($_POST['rating']) ? sanitizeInput($_POST['rating']) : '';
    
    // Server-side validation
    if (empty($firstName)) {
        $errorMessages[] = "First name is required";
    }
    
    if (empty($lastName)) {
        $errorMessages[] = "Last name is required";
    }
    
    if (empty($email)) {
        $errorMessages[] = "Email is required";
    } elseif (!isValidEmail($email)) {
        $errorMessages[] = "Please enter a valid email address";
    }
    
    if (!empty($phone) && !preg_match("/^[0-9]{10}$/", $phone)) {
        $errorMessages[] = "Please enter a valid phone number";
    }
    
    if (empty($gender)) {
        $errorMessages[] = "Gender selection is required";
    }
    
    if (empty($city)) {
        $errorMessages[] = "City selection is required";
    }
    
    if (empty($interests)) {
        $errorMessages[] = "Please select at least one interest";
    }
    
    if (empty($feedbackText)) {
        $errorMessages[] = "Feedback text is required";
    }
    
    if (empty($rating)) {
        $errorMessages[] = "Rating is required";
    } elseif (!is_numeric($rating) || $rating < 1 || $rating > 5) {
        $errorMessages[] = "Rating must be a number between 1 and 5";
    }
    
    // If no errors, process the form
    if (empty($errorMessages)) {
        $formValid = true;
        
        // Convert interests array to string for storage
        $interestsString = implode(", ", $interests);
        
        // Connect to database
        $conn = connectDB();
        
        // Check if email already exists
        $stmt = $conn->prepare("SELECT email FROM feedback WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result->num_rows > 0) {
            // Email already exists
            $formValid = false;
            $errorMessages[] = "This email address has already submitted feedback. Only one submission per email is allowed.";
        } else {
            // Insert data into database
            $stmt = $conn->prepare("INSERT INTO feedback (first_name, last_name, email, phone, gender, city, interests, feedback_text, rating, submission_date) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())");
            $stmt->bind_param("ssssssssi", $firstName, $lastName, $email, $phone, $gender, $city, $interestsString, $feedbackText, $rating);
            
            if ($stmt->execute()) {
                // Success
                $formValid = true;
            } else {
                // Error
                $formValid = false;
                $errorMessages[] = "Database error: " . $conn->error;
            }
        }
        
        // Close database connection
        closeDB($conn);
    }
}

// Include header
include '../includes/header.php';
?>

<div class="container">
    <h1>Feedback Submission</h1>
    
    <?php if ($formSubmitted): ?>
        <?php if ($formValid): ?>
            <div class="success-message">
                <h2>Thank You for Your Feedback!</h2>
                <p>Your feedback has been successfully submitted and stored in our database.</p>
                <p>Here's a summary of what you submitted:</p>
                <ul>
                    <li><strong>Name:</strong> <?php echo htmlspecialchars($firstName . ' ' . $lastName); ?></li>
                    <li><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></li>
                    <li><strong>City:</strong> <?php echo htmlspecialchars($city); ?></li>
                    <li><strong>Rating:</strong> <?php echo htmlspecialchars($rating); ?> out of 5</li>
                </ul>
                <p><a href="/pages/feedback.php" class="button">Submit Another Feedback</a></p>
                <p><a href="/index.php" class="button">Return to Home Page</a></p>
            </div>
        <?php else: ?>
            <div class="error-summary">
                <h2>Form Submission Error</h2>
                <p>Please correct the following errors and try again:</p>
                <ul>
                    <?php foreach ($errorMessages as $error): ?>
                        <li><?php echo htmlspecialchars($error); ?></li>
                    <?php endforeach; ?>
                </ul>
                <p><a href="javascript:history.back()" class="button">Go Back and Fix Errors</a></p>
            </div>
        <?php endif; ?>
    <?php else: ?>
        <div class="error-summary">
            <h2>Invalid Form Submission</h2>
            <p>The form was not submitted properly. Please go back to the feedback form and try again.</p>
            <p><a href="/pages/feedback.php" class="button">Go to Feedback Form</a></p>
        </div>
    <?php endif; ?>
</div>

<style>
/* Additional styles for process_feedback.php */
.success-message,
.error-summary {
    max-width: 800px;
    margin: 2rem auto;
    padding: 2rem;
    border-radius: 5px;
}

.success-message {
    background-color: #e8f5e9;
    border: 1px solid #a5d6a7;
}

.error-summary {
    background-color: #ffebee;
    border: 1px solid #ef9a9a;
}

.button {
    display: inline-block;
    margin-top: 1rem;
    padding: 0.75rem 1.5rem;
    background-color: #005a87;
    color: white;
    text-decoration: none;
    border-radius: 3px;
    transition: background-color 0.3s ease;
}

.button:hover {
    background-color: #003d5c;
    text-decoration: none;
}
</style>

<?php
// Include footer
include '../includes/footer.php';
?>
