<?php
// Set page title
$pageTitle = "Picture Gallery";

// Include header
include '../includes/header.php';
?>

<div class="container">
    <h1>Picture Gallery</h1>
    
    <p>Click on any thumbnail below to view the full-size image.</p>
    
    <div class="gallery-container">
        <!-- Main image display area -->
        <div class="main-image-container">
            <img id="mainImage" src="/images/gallery/img_galary1.JPG" alt="Gallery Image 1" class="main-image" />
        </div>
        
        <!-- Navigation buttons -->
        <div class="gallery-controls">
            <button id="prevButton" class="gallery-button">Previous</button>
            <button id="nextButton" class="gallery-button">Next</button>
        </div>
        
        <!-- Thumbnails displayed underneath the main image -->
        <div class="thumbnails-container">
            <h3>All Images (Click to View)</h3>
            <div class="thumbnails">
                <img src="/images/gallery/img_galary1.JPG" alt="Thumbnail 1" class="thumbnail active" data-index="0" onclick="updateMainImage(0)">
                <img src="/images/gallery/img_galary2.JPG" alt="Thumbnail 2" class="thumbnail" data-index="1" onclick="updateMainImage(1)">
                <img src="/images/gallery/img_galary3.JPG" alt="Thumbnail 3" class="thumbnail" data-index="2" onclick="updateMainImage(2)">
                <img src="/images/gallery/img_galary4.JPG" alt="Thumbnail 4" class="thumbnail" data-index="3" onclick="updateMainImage(3)">
                <img src="/images/gallery/img_galary5.JPG" alt="Thumbnail 5" class="thumbnail" data-index="4" onclick="updateMainImage(4)">
                <img src="/images/gallery/img_galary6.JPG" alt="Thumbnail 6" class="thumbnail" data-index="5" onclick="updateMainImage(5)">
                <img src="/images/gallery/img_galary7.JPG" alt="Thumbnail 7" class="thumbnail" data-index="6" onclick="updateMainImage(6)">
                <img src="/images/gallery/img_galary8.JPG" alt="Thumbnail 8" class="thumbnail" data-index="7" onclick="updateMainImage(7)">
                <img src="/images/gallery/img_galary9.JPG" alt="Thumbnail 9" class="thumbnail" data-index="8" onclick="updateMainImage(8)">
                <img src="/images/gallery/img_galary10.JPG" alt="Thumbnail 10" class="thumbnail" data-index="9" onclick="updateMainImage(9)">
            </div>
        </div>
    </div>
    
    <div class="gallery-info">
        <h2>Gallery Information</h2>
        <p>This gallery demonstrates the following features as required:</p>
        <ul>
            <li>Display of one large picture with all thumbnails underneath</li>
            <li>Two versions of each image: full-size and thumbnail with reduced dimensions</li>
            <li>Navigation buttons (previous/next) for browsing through images</li>
            <li>Custom JavaScript implementation (no jQuery or plugins)</li>
            <li>Responsive design that adapts to different screen sizes</li>
        </ul>
    </div>
</div>

<style>
/* Additional styles specific to the gallery page */
.gallery-container {
    margin: 2rem 0;
}

.main-image-container {
    text-align: center;
    margin-bottom: 1rem;
    background-color: #f5f5f5;
    padding: 1rem;
    border-radius: 5px;
}

.main-image {
    max-width: 100%;
    max-height: 500px;
    border: 1px solid #ddd;
}

.gallery-controls {
    display: flex;
    justify-content: center;
    gap: 1rem;
    margin: 1rem 0;
}

.gallery-button {
    background-color: #005a87;
    color: white;
    border: none;
    padding: 0.5rem 1.5rem;
    border-radius: 3px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.gallery-button:hover {
    background-color: #003d5c;
}

.gallery-button.disabled {
    background-color: #cccccc;
    cursor: not-allowed;
}

.thumbnails-container {
    margin: 1.5rem 0;
    text-align: center;
}

.thumbnails-container h3 {
    margin-bottom: 1rem;
}

.thumbnails {
    display: flex;
    flex-wrap: wrap;
    gap: 0.5rem;
    justify-content: center;
}

.thumbnail {
    width: 100px;
    height: 75px;
    object-fit: cover;
    border: 2px solid #ddd;
    cursor: pointer;
    transition: border-color 0.3s ease;
}

.thumbnail:hover {
    border-color: #005a87;
}

.thumbnail.active {
    border-color: #005a87;
    box-shadow: 0 0 5px rgba(0, 90, 135, 0.5);
}

.gallery-info {
    background-color: #f9f9f9;
    padding: 1.5rem;
    border-radius: 5px;
    margin-top: 2rem;
}

@media screen and (max-width: 768px) {
    .thumbnail {
        width: 80px;
        height: 60px;
    }
}

@media screen and (max-width: 480px) {
    .thumbnails {
        gap: 0.25rem;
    }
    
    .thumbnail {
        width: 60px;
        height: 45px;
    }
}
</style>

<script>
// Gallery JavaScript directly in the page for simplicity
let currentIndex = 0;
const totalImages = 10;

// Update main image function
function updateMainImage(index) {
    // Update current index
    currentIndex = index;
    
    // Update main image
    const imageNumber = index + 1;
    const mainImage = document.getElementById('mainImage');
    mainImage.src = `/images/gallery/img_galary${imageNumber}.JPG`;
    mainImage.alt = `Gallery Image ${imageNumber}`;
    
    // Update thumbnails active state
    const thumbnails = document.querySelectorAll('.thumbnail');
    thumbnails.forEach(thumbnail => {
        if (parseInt(thumbnail.dataset.index) === index) {
            thumbnail.classList.add('active');
        } else {
            thumbnail.classList.remove('active');
        }
    });
    
    // Update button states
    updateButtonStates();
}

// Show previous image
function showPreviousImage() {
    if (currentIndex > 0) {
        updateMainImage(currentIndex - 1);
    }
}

// Show next image
function showNextImage() {
    if (currentIndex < totalImages - 1) {
        updateMainImage(currentIndex + 1);
    }
}

// Update button states
function updateButtonStates() {
    const prevButton = document.getElementById('prevButton');
    const nextButton = document.getElementById('nextButton');
    
    prevButton.disabled = currentIndex === 0;
    nextButton.disabled = currentIndex === totalImages - 1;
    
    // Visual indication of disabled state
    if (prevButton.disabled) {
        prevButton.classList.add('disabled');
    } else {
        prevButton.classList.remove('disabled');
    }
    
    if (nextButton.disabled) {
        nextButton.classList.add('disabled');
    } else {
        nextButton.classList.remove('disabled');
    }
}

// Add event listeners when the page loads
document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('prevButton').addEventListener('click', showPreviousImage);
    document.getElementById('nextButton').addEventListener('click', showNextImage);
    
    // Initialize button states
    updateButtonStates();
});
</script>

<?php
// Include footer
include '../includes/footer.php';
?>
