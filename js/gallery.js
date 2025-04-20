// Gallery JavaScript for CPCS403 Final Project
// This file implements the gallery functionality with navigation and thumbnail selection

document.addEventListener('DOMContentLoaded', function() {
    // Gallery configuration
    const galleryConfig = {
        totalImages: 10,
        currentIndex: 0,
        imageBasePath: '/images/gallery/gallery_image',
        imageExtension: '.jpg'
    };
    
    // DOM elements
    const mainImage = document.getElementById('mainImage');
    const prevButton = document.getElementById('prevButton');
    const nextButton = document.getElementById('nextButton');
    const thumbnailsContainer = document.getElementById('thumbnailsContainer');
    
    // Initialize gallery
    function initGallery() {
        // Generate thumbnails
        generateThumbnails();
        
        // Set initial image
        updateMainImage(galleryConfig.currentIndex);
        
        // Add event listeners
        prevButton.addEventListener('click', showPreviousImage);
        nextButton.addEventListener('click', showNextImage);
    }
    
    // Generate thumbnails
    function generateThumbnails() {
        for (let i = 1; i <= galleryConfig.totalImages; i++) {
            const index = i - 1;
            const thumbnailElement = document.createElement('img');
            
            thumbnailElement.src = `${galleryConfig.imageBasePath}${i}${galleryConfig.imageExtension}`;
            thumbnailElement.alt = `Thumbnail ${i}`;
            thumbnailElement.className = 'thumbnail';
            thumbnailElement.dataset.index = index;
            
            // Add active class to first thumbnail
            if (index === galleryConfig.currentIndex) {
                thumbnailElement.classList.add('active');
            }
            
            // Add click event
            thumbnailElement.addEventListener('click', function() {
                updateMainImage(parseInt(this.dataset.index));
            });
            
            thumbnailsContainer.appendChild(thumbnailElement);
        }
    }
    
    // Update main image
    function updateMainImage(index) {
        // Update current index
        galleryConfig.currentIndex = index;
        
        // Update main image
        const imageNumber = index + 1;
        mainImage.src = `${galleryConfig.imageBasePath}${imageNumber}${galleryConfig.imageExtension}`;
        mainImage.alt = `Gallery Image ${imageNumber}`;
        
        // Update thumbnails active state
        const thumbnails = thumbnailsContainer.querySelectorAll('.thumbnail');
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
        if (galleryConfig.currentIndex > 0) {
            updateMainImage(galleryConfig.currentIndex - 1);
        }
    }
    
    // Show next image
    function showNextImage() {
        if (galleryConfig.currentIndex < galleryConfig.totalImages - 1) {
            updateMainImage(galleryConfig.currentIndex + 1);
        }
    }
    
    // Update button states (disable/enable based on current position)
    function updateButtonStates() {
        prevButton.disabled = galleryConfig.currentIndex === 0;
        nextButton.disabled = galleryConfig.currentIndex === galleryConfig.totalImages - 1;
        
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
    
    // Initialize the gallery
    initGallery();
});
