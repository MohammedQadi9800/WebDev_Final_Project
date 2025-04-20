// Email protection JavaScript for CPCS403 Final Project
// This file implements email address scrambling to protect from spam bots

document.addEventListener('DOMContentLoaded', function() {
    // Get the email display element
    const emailDisplay = document.getElementById('emailDisplay');
    
    if (emailDisplay) {
        // The email parts are scrambled to prevent scraping
        const emailUser = 'cpcs403';
        const emailDomain = 'example';
        const emailTld = 'com';
        
        // Function to unscramble and display the email
        function displayEmail() {
            // Construct the email address
            const emailAddress = emailUser + '@' + emailDomain + '.' + emailTld;
            
            // Create a mailto link
            const emailLink = document.createElement('a');
            emailLink.href = 'mailto:' + emailAddress;
            emailLink.textContent = emailAddress;
            
            // Clear the current content and append the link
            emailDisplay.innerHTML = '';
            emailDisplay.appendChild(emailLink);
        }
        
        // Call the function to display the email
        displayEmail();
    }
});
