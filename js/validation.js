// Validation JavaScript for CPCS403 Final Project
// This file implements form validation for the feedback form

document.addEventListener('DOMContentLoaded', function() {
    // Get form element
    const feedbackForm = document.getElementById('feedbackForm');
    
    // Get form fields
    const firstName = document.getElementById('firstName');
    const lastName = document.getElementById('lastName');
    const email = document.getElementById('email');
    const phone = document.getElementById('phone');
    const genderRadios = document.getElementsByName('gender');
    const city = document.getElementById('city');
    const interestCheckboxes = document.getElementsByName('interests[]');
    const feedback = document.getElementById('feedback');
    const rating = document.getElementById('rating');
    
    // Get error elements
    const firstNameError = document.getElementById('firstNameError');
    const lastNameError = document.getElementById('lastNameError');
    const emailError = document.getElementById('emailError');
    const phoneError = document.getElementById('phoneError');
    const genderError = document.getElementById('genderError');
    const cityError = document.getElementById('cityError');
    const interestsError = document.getElementById('interestsError');
    const feedbackError = document.getElementById('feedbackError');
    const ratingError = document.getElementById('ratingError');
    
    // Add form submit event listener
    feedbackForm.addEventListener('submit', function(event) {
        // Prevent form submission
        event.preventDefault();
        
        // Reset error messages
        resetErrors();
        
        // Validate form
        if (validateForm()) {
            // If validation passes, submit the form
            this.submit();
        }
    });
    
    // Reset errors
    function resetErrors() {
        const errorElements = document.querySelectorAll('.error');
        errorElements.forEach(element => {
            element.textContent = '';
        });
    }
    
    // Validate form
    function validateForm() {
        let isValid = true;
        let firstErrorField = null;
        
        // Validate first name
        if (!validateRequired(firstName.value)) {
            firstNameError.textContent = 'First name is required';
            isValid = false;
            firstErrorField = firstErrorField || firstName;
        }
        
        // Validate last name
        if (!validateRequired(lastName.value)) {
            lastNameError.textContent = 'Last name is required';
            isValid = false;
            firstErrorField = firstErrorField || lastName;
        }
        
        // Validate email
        if (!validateRequired(email.value)) {
            emailError.textContent = 'Email is required';
            isValid = false;
            firstErrorField = firstErrorField || email;
        } else if (!validateEmail(email.value)) {
            emailError.textContent = 'Please enter a valid email address';
            isValid = false;
            firstErrorField = firstErrorField || email;
        }
        
        // Validate phone (optional)
        if (phone.value && !validatePhone(phone.value)) {
            phoneError.textContent = 'Please enter a valid phone number';
            isValid = false;
            firstErrorField = firstErrorField || phone;
        }
        
        // Validate gender
        if (!validateRadio(genderRadios)) {
            genderError.textContent = 'Please select your gender';
            isValid = false;
            firstErrorField = firstErrorField || genderRadios[0];
        }
        
        // Validate city
        if (!validateRequired(city.value)) {
            cityError.textContent = 'Please select your city';
            isValid = false;
            firstErrorField = firstErrorField || city;
        }
        
        // Validate interests
        if (!validateCheckbox(interestCheckboxes)) {
            interestsError.textContent = 'Please select at least one interest';
            isValid = false;
            firstErrorField = firstErrorField || interestCheckboxes[0];
        }
        
        // Validate feedback
        if (!validateRequired(feedback.value)) {
            feedbackError.textContent = 'Feedback is required';
            isValid = false;
            firstErrorField = firstErrorField || feedback;
        }
        
        // Validate rating
        if (!validateRequired(rating.value)) {
            ratingError.textContent = 'Rating is required';
            isValid = false;
            firstErrorField = firstErrorField || rating;
        } else if (!validateRating(rating.value)) {
            ratingError.textContent = 'Rating must be a number between 1 and 5';
            isValid = false;
            firstErrorField = firstErrorField || rating;
        }
        
        // Focus on first error field
        if (firstErrorField) {
            firstErrorField.focus();
        }
        
        return isValid;
    }
    
    // Validate required field
    function validateRequired(value) {
        return value.trim() !== '';
    }
    
    // Validate email format
    function validateEmail(email) {
        const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return re.test(email);
    }
    
    // Validate phone format
    function validatePhone(phone) {
        const re = /^[0-9]{10}$/;
        return re.test(phone);
    }
    
    // Validate radio button selection
    function validateRadio(radios) {
        for (let i = 0; i < radios.length; i++) {
            if (radios[i].checked) {
                return true;
            }
        }
        return false;
    }
    
    // Validate checkbox selection
    function validateCheckbox(checkboxes) {
        for (let i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].checked) {
                return true;
            }
        }
        return false;
    }
    
    // Validate rating (1-5)
    function validateRating(rating) {
        const num = parseInt(rating);
        return !isNaN(num) && num >= 1 && num <= 5;
    }
});
