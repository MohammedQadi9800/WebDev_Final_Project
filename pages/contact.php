<?php
// Set page title
$pageTitle = "Contact Us";

// Add JavaScript for email protection
$additionalScripts = '<script src="/js/email.js" defer></script>';

// Include header
include '../includes/header.php';
?>

<div class="container">
    <h1>Contact Us</h1>
    
    <p>This page demonstrates how to protect email addresses from spam bots using JavaScript.</p>
    
    <div class="contact-info">
        <div class="contact-section">
            <h2>Get in Touch</h2>
            <p>If you have any questions or feedback about this website, please feel free to contact us using the information below:</p>
            
            <div class="contact-details">
                <div class="contact-item">
                    <h3>Email</h3>
                    <p id="emailDisplay">JavaScript is required to view this email address</p>
                </div>
                
                <div class="contact-item">
                    <h3>Phone</h3>
                    <p>+966 12 345 6789</p>
                </div>
                
                <div class="contact-item">
                    <h3>Address</h3>
                    <p>King Abdulaziz University<br>
                    Faculty of Computing and Information Technology<br>
                    Jeddah, Saudi Arabia</p>
                </div>
            </div>
        </div>
        
        <div class="contact-section">
            <h2>Office Hours</h2>
            <p>Our office is open during the following hours:</p>
            <ul>
                <li><strong>Sunday - Thursday:</strong> 8:00 AM - 4:00 PM</li>
                <li><strong>Friday - Saturday:</strong> Closed</li>
            </ul>
        </div>
    </div>
    
    <div class="contact-info">
        <h2>Implementation Details</h2>
        <p>This contact page demonstrates the following features:</p>
        <ul>
            <li>Email address protection using JavaScript scrambling</li>
            <li>External JavaScript file (email.js) as required by the assignment</li>
            <li>Fallback content for users without JavaScript enabled</li>
            <li>Responsive design that adapts to different screen sizes</li>
        </ul>
    </div>
</div>

<style>
/* Additional styles specific to the contact page */
.contact-info {
    margin: 2rem 0;
    background-color: #f5f5f5;
    padding: 1.5rem;
    border-radius: 5px;
}

.contact-section {
    margin-bottom: 2rem;
}

.contact-details {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 1.5rem;
    margin-top: 1.5rem;
}

.contact-item {
    background-color: white;
    padding: 1.5rem;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.contact-item h3 {
    color: #005a87;
    margin-bottom: 0.5rem;
    border-bottom: 1px solid #eee;
    padding-bottom: 0.5rem;
}

@media screen and (max-width: 768px) {
    .contact-details {
        grid-template-columns: 1fr;
    }
}
</style>

<?php
// Include footer
include '../includes/footer.php';
?>
