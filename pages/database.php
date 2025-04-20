<?php
// Set page title
$pageTitle = "Database";

// Include header
include '../includes/header.php';
?>

<div class="container">
    <h1>Database Integration</h1>
    
    <p>This page demonstrates database integration with PHP, displaying data from related tables.</p>
    
    <div class="database-info">
        <h2>Database Structure</h2>
        <p>The database for this project consists of two related tables:</p>
        <ul>
            <li><strong>courses</strong> - Contains information about available courses</li>
            <li><strong>students</strong> - Contains student information with a foreign key relationship to courses</li>
        </ul>
        <p>The relationship between these tables is established using the course_id as a primary key in the courses table and a foreign key in the students table.</p>
    </div>
    
    <?php
    // Include database connection
    include '../includes/db_connection.php';
    
    // Connect to database
    $conn = connectDB();
    
    // Check connection
    if (!$conn) {
        echo '<div class="error-message">';
        echo '<h2>Database Connection Error</h2>';
        echo '<p>Unable to connect to the database. Please make sure the database server is running and the connection parameters are correct.</p>';
        echo '</div>';
    } else {
        // Query to get courses
        $coursesQuery = "SELECT * FROM courses ORDER BY course_code";
        $coursesResult = $conn->query($coursesQuery);
        
        if ($coursesResult && $coursesResult->num_rows > 0) {
            echo '<div class="data-section">';
            echo '<h2>Available Courses</h2>';
            echo '<div class="table-container">';
            echo '<table class="data-table">';
            echo '<thead>';
            echo '<tr>';
            echo '<th>Course Code</th>';
            echo '<th>Course Name</th>';
            echo '<th>Credit Hours</th>';
            echo '<th>Department</th>';
            echo '<th>Description</th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';
            
            while ($course = $coursesResult->fetch_assoc()) {
                echo '<tr>';
                echo '<td>' . htmlspecialchars($course['course_code']) . '</td>';
                echo '<td>' . htmlspecialchars($course['course_name']) . '</td>';
                echo '<td>' . htmlspecialchars($course['credit_hours']) . '</td>';
                echo '<td>' . htmlspecialchars($course['department']) . '</td>';
                echo '<td>' . htmlspecialchars($course['description']) . '</td>';
                echo '</tr>';
            }
            
            echo '</tbody>';
            echo '</table>';
            echo '</div>';
            echo '</div>';
            
            // Query to get students with course information
            $studentsQuery = "SELECT s.student_id, s.first_name, s.last_name, s.email, s.enrollment_date, s.grade, c.course_code, c.course_name 
                             FROM students s
                             JOIN courses c ON s.course_id = c.course_id
                             ORDER BY c.course_code, s.last_name";
            $studentsResult = $conn->query($studentsQuery);
            
            if ($studentsResult && $studentsResult->num_rows > 0) {
                echo '<div class="data-section">';
                echo '<h2>Enrolled Students</h2>';
                echo '<div class="table-container">';
                echo '<table class="data-table">';
                echo '<thead>';
                echo '<tr>';
                echo '<th>Student Name</th>';
                echo '<th>Email</th>';
                echo '<th>Enrollment Date</th>';
                echo '<th>Course</th>';
                echo '<th>Grade</th>';
                echo '</tr>';
                echo '</thead>';
                echo '<tbody>';
                
                while ($student = $studentsResult->fetch_assoc()) {
                    echo '<tr>';
                    echo '<td>' . htmlspecialchars($student['first_name'] . ' ' . $student['last_name']) . '</td>';
                    echo '<td>' . htmlspecialchars($student['email']) . '</td>';
                    echo '<td>' . htmlspecialchars($student['enrollment_date']) . '</td>';
                    echo '<td>' . htmlspecialchars($student['course_code'] . ' - ' . $student['course_name']) . '</td>';
                    echo '<td>' . htmlspecialchars($student['grade']) . '</td>';
                    echo '</tr>';
                }
                
                echo '</tbody>';
                echo '</table>';
                echo '</div>';
                echo '</div>';
            } else {
                echo '<div class="error-message">';
                echo '<h2>No Student Data</h2>';
                echo '<p>No student records were found in the database.</p>';
                echo '</div>';
            }
        } else {
            echo '<div class="error-message">';
            echo '<h2>No Course Data</h2>';
            echo '<p>No course records were found in the database.</p>';
            echo '</div>';
        }
        
        // Close database connection
        closeDB($conn);
    }
    ?>
    
    <div class="implementation-info">
        <h2>Implementation Details</h2>
        <p>This database page demonstrates the following features:</p>
        <ul>
            <li>Connection to MySQL database using PHP</li>
            <li>Displaying data from multiple related tables</li>
            <li>Joining tables to show relationships between data</li>
            <li>Proper error handling for database connections</li>
            <li>Data sanitization to prevent XSS attacks</li>
        </ul>
        <p>The database schema includes:</p>
        <pre>
CREATE TABLE courses (
    course_id INT AUTO_INCREMENT PRIMARY KEY,
    course_code VARCHAR(10) NOT NULL,
    course_name VARCHAR(100) NOT NULL,
    credit_hours INT NOT NULL,
    department VARCHAR(50) NOT NULL,
    description TEXT
);

CREATE TABLE students (
    student_id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    enrollment_date DATE NOT NULL,
    course_id INT NOT NULL,
    grade VARCHAR(2),
    FOREIGN KEY (course_id) REFERENCES courses(course_id)
);
        </pre>
    </div>
</div>

<style>
/* Additional styles specific to the database page */
.database-info,
.implementation-info,
.data-section,
.error-message {
    margin: 2rem 0;
    padding: 1.5rem;
    border-radius: 5px;
}

.database-info {
    background-color: #e3f2fd;
    border: 1px solid #bbdefb;
}

.implementation-info {
    background-color: #f9f9f9;
    border: 1px solid #eee;
}

.data-section {
    background-color: #f5f5f5;
}

.error-message {
    background-color: #ffebee;
    border: 1px solid #ffcdd2;
}

.table-container {
    overflow-x: auto;
    margin-top: 1rem;
}

.data-table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 1rem;
}

.data-table th,
.data-table td {
    padding: 0.75rem;
    text-align: left;
    border: 1px solid #ddd;
}

.data-table th {
    background-color: #005a87;
    color: white;
    font-weight: bold;
}

.data-table tr:nth-child(even) {
    background-color: #f2f2f2;
}

.data-table tr:hover {
    background-color: #e9ecef;
}

pre {
    background-color: #f8f9fa;
    padding: 1rem;
    border-radius: 3px;
    overflow-x: auto;
    font-size: 0.9rem;
    border: 1px solid #eee;
}

@media screen and (max-width: 768px) {
    .data-table {
        font-size: 0.9rem;
    }
    
    .data-table th,
    .data-table td {
        padding: 0.5rem;
    }
    
    pre {
        font-size: 0.8rem;
    }
}
</style>

<?php
// Include footer
include '../includes/footer.php';
?>
