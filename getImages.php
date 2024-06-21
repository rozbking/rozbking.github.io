fetch('getImages.php') // Adjust this URL to match the path on your server
  .then(response => response.json())
  .then(images => {
    const slideshowContainer = document.getElementById('slideshow-container');
    images.forEach((image, index) => {
      const slideDiv = document.createElement('div');
      slideDiv.className = 'mySlides w3-display-container';
      slideDiv.innerHTML = `
        <img src="${image}" style="width:100%">
        <div class="w3-display-topmiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
          <h3>Image ${index + 1}</h3>
        </div>
      `;
      slideshowContainer.appendChild(slideDiv);
    });
    showSlides();
  })
  .catch(error => console.error('Error loading images:', error));
