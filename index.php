<?php
// Set page title
$pageTitle = "Home";

// Include header
include 'includes/header.php';
?>

<div class="container">
    <section class="welcome-section">
        <h1>Welcome to CPCS403 Final Project</h1>
        
        <div class="intro-content">
            <p>This website demonstrates the implementation of various web technologies learned in the CPCS403 Internet Application Programming course. The site features PHP, MySQL, JavaScript, and responsive design techniques.</p>
            
            <p>Explore the different sections using the navigation menu above to see implementations of:</p>
            
            <ul>
                <li>PHP includes and dynamic content generation</li>
                <li>Responsive design with CSS</li>
                <li>Interactive elements with JavaScript</li>
                <li>Database integration with MySQL</li>
                <li>Form validation and processing</li>
                <li>Media embedding (images, video)</li>
            </ul>
        </div>
    </section>
    
    <section class="featured-content">
        <h2>Featured Sections</h2>
        
        <div class="feature-grid">
            <div class="feature-item">
                <h3>Picture Gallery</h3>
                <p>View a collection of images with custom JavaScript navigation.</p>
                <a href="pages/gallery.php" class="feature-link">Explore Gallery</a>
            </div>
            
            <div class="feature-item">
                <h3>Interactive Table</h3>
                <p>See data presented in a well-structured table with print functionality.</p>
                <a href="pages/table.php" class="feature-link">View Table</a>
            </div>
            
            <div class="feature-item">
                <h3>Feedback Form</h3>
                <p>Try our form with client and server-side validation.</p>
                <a href="pages/feedback.php" class="feature-link">Submit Feedback</a>
            </div>
        </div>
    </section>
    
    <section class="about-section">
        <h2>About This Project</h2>
        <p>This website was created as the final project for the CPCS403 Internet Application Programming course. It demonstrates proficiency in various web technologies and best practices in web development.</p>
        <p>The site is built using PHP with a focus on modular design through includes, responsive layout with CSS, and interactive elements with JavaScript. All pages are XHTML compliant and pass W3C validation.</p>
    </section>
</div>

<style>
/* Additional styles specific to the home page */
.welcome-section {
    margin-bottom: 2rem;
    text-align: center;
}

.intro-content {
    max-width: 800px;
    margin: 0 auto;
    text-align: left;
}

.feature-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 2rem;
    margin: 2rem 0;
}

.feature-item {
    background-color: #f5f5f5;
    padding: 1.5rem;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    transition: transform 0.3s ease;
}

.feature-item:hover {
    transform: translateY(-5px);
}

.feature-link {
    display: inline-block;
    margin-top: 1rem;
    padding: 0.5rem 1rem;
    background-color: #005a87;
    color: white;
    text-decoration: none;
    border-radius: 3px;
    transition: background-color 0.3s ease;
}

.feature-link:hover {
    background-color: #003d5c;
    text-decoration: none;
}

.about-section {
    background-color: #f9f9f9;
    padding: 2rem;
    border-radius: 5px;
    margin-top: 2rem;
}

@media screen and (max-width: 768px) {
    .feature-grid {
        grid-template-columns: 1fr;
    }
}
</style>

<?php
// Include footer
include 'includes/footer.php';
?>
