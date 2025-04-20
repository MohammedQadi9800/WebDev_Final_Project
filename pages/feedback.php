<?php
// Set page title
$pageTitle = "Feedback Form";

// Add JavaScript for validation
$additionalScripts = '<script src="/js/validation.js" defer></script>';

// Include header
include '../includes/header.php';
?>

<div class="container">
    <h1>Feedback Form</h1>
    
    <p>Please fill out the form below to provide your feedback. All fields marked with an asterisk (*) are required.</p>
    
    <form id="feedbackForm" action="/pages/process_feedback.php" method="post">
        <fieldset>
            <legend>Personal Information</legend>
            
            <div class="form-group">
                <label for="firstName">First Name *</label>
                <input type="text" id="firstName" name="firstName" />
                <div class="error" id="firstNameError"></div>
            </div>
            
            <div class="form-group">
                <label for="lastName">Last Name *</label>
                <input type="text" id="lastName" name="lastName" />
                <div class="error" id="lastNameError"></div>
            </div>
            
            <div class="form-group">
                <label for="email">Email Address *</label>
                <input type="text" id="email" name="email" />
                <div class="error" id="emailError"></div>
            </div>
            
            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="text" id="phone" name="phone" />
                <div class="error" id="phoneError"></div>
            </div>
            
            <div class="form-group">
                <label>Gender *</label>
                <div class="radio-group">
                    <label>
                        <input type="radio" name="gender" value="male" /> Male
                    </label>
                    <label>
                        <input type="radio" name="gender" value="female" /> Female
                    </label>
                </div>
                <div class="error" id="genderError"></div>
            </div>
            
            <div class="form-group">
                <label for="city">City *</label>
                <select id="city" name="city">
                    <option value="">-- Select City --</option>
                    <option value="jeddah">Jeddah</option>
                    <option value="riyadh">Riyadh</option>
                    <option value="mecca">Mecca</option>
                    <option value="medina">Medina</option>
                    <option value="dammam">Dammam</option>
                    <option value="other">Other</option>
                </select>
                <div class="error" id="cityError"></div>
            </div>
        </fieldset>
        
        <fieldset>
            <legend>Feedback Information</legend>
            
            <div class="form-group">
                <label>Interests (select at least one) *</label>
                <div class="checkbox-group">
                    <label>
                        <input type="checkbox" name="interests[]" value="web_development" /> Web Development
                    </label>
                    <label>
                        <input type="checkbox" name="interests[]" value="database" /> Database Systems
                    </label>
                </div>
                <div class="error" id="interestsError"></div>
            </div>
            
            <div class="form-group">
                <label for="feedback">Your Feedback *</label>
                <textarea id="feedback" name="feedback" rows="5"></textarea>
                <div class="error" id="feedbackError"></div>
            </div>
            
            <div class="form-group">
                <label for="rating">Rate Your Experience (1-5) *</label>
                <input type="text" id="rating" name="rating" />
                <div class="error" id="ratingError"></div>
            </div>
        </fieldset>
        
        <div class="form-actions">
            <button type="submit" id="submitButton">Submit Feedback</button>
            <button type="reset" id="resetButton">Reset Form</button>
        </div>
    </form>
    
    <div class="form-info">
        <h2>Form Information</h2>
        <p>This feedback form demonstrates the following features:</p>
        <ul>
            <li>Divided into sections using fieldsets</li>
            <li>Various form elements (text inputs, radio buttons, checkboxes, dropdown, textarea)</li>
            <li>Client-side validation with JavaScript</li>
            <li>Server-side validation and database storage</li>
            <li>Error message display within the page</li>
            <li>Focus shifting to first error element</li>
        </ul>
    </div>
</div>

<style>
/* Additional styles specific to the feedback form */
form {
    max-width: 800px;
    margin: 2rem auto;
}

fieldset {
    margin-bottom: 2rem;
    padding: 1.5rem;
    border: 1px solid #ddd;
    border-radius: 5px;
}

legend {
    padding: 0 0.5rem;
    font-weight: bold;
    color: #005a87;
}

.form-group {
    margin-bottom: 1.5rem;
}

label {
    display: block;
    margin-bottom: 0.5rem;
    font-weight: bold;
}

input[type="text"],
select,
textarea {
    width: 100%;
    padding: 0.75rem;
    border: 1px solid #ddd;
    border-radius: 3px;
    font-size: 1rem;
}

.radio-group,
.checkbox-group {
    display: flex;
    gap: 1.5rem;
    margin-top: 0.5rem;
}

.radio-group label,
.checkbox-group label {
    font-weight: normal;
    display: flex;
    align-items: center;
    gap: 0.5rem;
    margin-bottom: 0;
}

.error {
    color: #d9534f;
    font-size: 0.9rem;
    margin-top: 0.5rem;
    min-height: 1.2rem;
}

.form-actions {
    display: flex;
    gap: 1rem;
    margin-top: 2rem;
}

button {
    padding: 0.75rem 1.5rem;
    border: none;
    border-radius: 3px;
    font-size: 1rem;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

#submitButton {
    background-color: #005a87;
    color: white;
}

#submitButton:hover {
    background-color: #003d5c;
}

#resetButton {
    background-color: #f8f9fa;
    color: #333;
    border: 1px solid #ddd;
}

#resetButton:hover {
    background-color: #e9ecef;
}

.form-info {
    background-color: #f9f9f9;
    padding: 1.5rem;
    border-radius: 5px;
    margin-top: 2rem;
}

@media screen and (max-width: 768px) {
    .radio-group,
    .checkbox-group {
        flex-direction: column;
        gap: 0.5rem;
    }
    
    .form-actions {
        flex-direction: column;
    }
    
    button {
        width: 100%;
    }
}
</style>

<?php
// Include footer
include '../includes/footer.php';
?>
