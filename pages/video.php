<?php
// Set page title
$pageTitle = "Video";

// Include header
include '../includes/header.php';
?>

<div class="container">
    <h1>Video Page</h1>
    
    <p>This page demonstrates embedding a video using the object tag as required by the assignment.</p>
    
    <div class="video-container">
        <object data="https://www.youtube.com/embed/dQw4w9WgXcQ" type="text/html" width="640" height="360">
            <param name="movie" value="https://www.youtube.com/embed/dQw4w9WgXcQ" />
            <param name="allowFullScreen" value="true" />
            <param name="allowscriptaccess" value="always" />
            <p>Your browser does not support embedded objects. Please visit <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank">this link</a> to view the video.</p>
        </object>
    </div>
    
    <div class="video-description">
        <h2>About This Video</h2>
        <p>This is a sample video embedded using the HTML object tag as specified in the CPCS403 assignment requirements. The video demonstrates the proper way to embed external content in an XHTML-compliant page.</p>
        <p>In a real-world scenario, this could be a tutorial video, an introduction to the website, or any other relevant content that enhances the user experience.</p>
    </div>
    
    <div class="video-info">
        <h2>Implementation Details</h2>
        <p>This video page demonstrates the following features:</p>
        <ul>
            <li>Proper embedding using the object tag</li>
            <li>Fallback content for browsers that don't support embedded objects</li>
            <li>Responsive design that adapts to different screen sizes</li>
            <li>Semantic HTML structure with appropriate headings and sections</li>
        </ul>
    </div>
</div>

<style>
/* Additional styles specific to the video page */
.video-container {
    margin: 2rem 0;
    text-align: center;
    background-color: #f5f5f5;
    padding: 1.5rem;
    border-radius: 5px;
}

.video-description {
    margin: 2rem 0;
}

.video-info {
    background-color: #f9f9f9;
    padding: 1.5rem;
    border-radius: 5px;
    margin-top: 2rem;
}

@media screen and (max-width: 768px) {
    .video-container object {
        width: 100%;
        height: auto;
        min-height: 240px;
    }
}
</style>

<?php
// Include footer
include '../includes/footer.php';
?>
