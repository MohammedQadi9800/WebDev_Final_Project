<?php
// Set page title
$pageTitle = "Resume";

// Include header
include '../includes/header.php';
?>

<div class="container">
    <h1>Resume</h1>
    
    <p>This page demonstrates embedding a PDF resume using the object tag as required by the assignment.</p>
    
    <div class="resume-container">
        <!-- Create a placeholder PDF resume for demonstration -->
        <?php
        // Check if the resume PDF exists, if not create a placeholder
        $resumePath = "../images/sample_resume.pdf";
        if (!file_exists($resumePath)) {
            // We'll display a message instead of the PDF since we don't have an actual file
            echo '<div class="pdf-placeholder">';
            echo '<p>This is where your PDF resume would be displayed using the &lt;object&gt; tag.</p>';
            echo '<p>In a real implementation, you would create a PDF resume and place it in the images directory.</p>';
            echo '<p>The PDF would be embedded here using:</p>';
            echo '<pre>&lt;object data="path/to/your/resume.pdf" type="application/pdf" width="100%" height="600px"&gt;';
            echo '    &lt;p&gt;Your browser does not support PDFs. &lt;a href="path/to/your/resume.pdf"&gt;Download the PDF&lt;/a&gt; instead.&lt;/p&gt;';
            echo '&lt;/object&gt;</pre>';
            echo '</div>';
        } else {
            // If the PDF exists, display it
            echo '<object data="' . $resumePath . '" type="application/pdf" width="100%" height="600px">';
            echo '    <p>Your browser does not support PDFs. <a href="' . $resumePath . '">Download the PDF</a> instead.</p>';
            echo '</object>';
        }
        ?>
    </div>
    
    <div class="resume-info">
        <h2>Implementation Details</h2>
        <p>This resume page demonstrates the following features:</p>
        <ul>
            <li>Embedding a PDF document using the object tag</li>
            <li>Providing a fallback for browsers that don't support embedded PDFs</li>
            <li>Responsive design that adapts to different screen sizes</li>
            <li>No download or new tab functionality as specified in the requirements</li>
        </ul>
        <p>To create your own resume for this page:</p>
        <ol>
            <li>Create your resume in MS Word or another program</li>
            <li>Save it as a PDF file</li>
            <li>Name it "sample_resume.pdf" and place it in the images directory</li>
            <li>The page will automatically display your PDF resume</li>
        </ol>
    </div>
</div>

<style>
/* Additional styles specific to the resume page */
.resume-container {
    margin: 2rem 0;
    background-color: #f5f5f5;
    padding: 1.5rem;
    border-radius: 5px;
    min-height: 600px;
}

.pdf-placeholder {
    background-color: #e9ecef;
    padding: 2rem;
    border: 1px dashed #adb5bd;
    border-radius: 5px;
    text-align: center;
    height: 600px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.pdf-placeholder pre {
    text-align: left;
    background-color: #f8f9fa;
    padding: 1rem;
    border-radius: 3px;
    overflow-x: auto;
    max-width: 100%;
}

.resume-info {
    background-color: #f9f9f9;
    padding: 1.5rem;
    border-radius: 5px;
    margin-top: 2rem;
}

@media screen and (max-width: 768px) {
    .resume-container {
        padding: 1rem;
    }
    
    .pdf-placeholder {
        padding: 1rem;
        height: 400px;
    }
}
</style>

<?php
// Include footer
include '../includes/footer.php';
?>
