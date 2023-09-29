window.addEventListener('DOMContentLoaded', () => {
    const backgroundSection = document.querySelector('.background-section');
    const imageUrls = [
        '/images/Clothing.jpg',
        '/images/bran.jpg',
        '/images/Clothing.jpg',
        '/images/corn.jpg',
        '/images/david.jpg',
        '/images/job.jpg',
        '/images/kub.jpg',
        '/images/suit.jpg',
        'images/pak.jpg',
        '/images/ug.jpg'
        
    ];

    let currentImageIndex = 0;

    function loadNextImage() {
        const backgroundImage = document.createElement('div');
        backgroundImage.classList.add('background-image');
        backgroundImage.style.backgroundImage = `url('${imageUrls[currentImageIndex]}')`;
        backgroundSection.appendChild(backgroundImage);

        currentImageIndex = (currentImageIndex + 1) % imageUrls.length;
    }

    function startImageRotation() {
        loadNextImage();
        setInterval(loadNextImage, 7000); // Change image every 5 seconds
    }

    startImageRotation();
});
