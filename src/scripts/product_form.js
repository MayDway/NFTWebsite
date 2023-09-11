document.addEventListener("DOMContentLoaded", function() {
    // Get references to the form and input element
    const imageForm = document.getElementById("productForm");
    const imageInput = document.getElementById("p_image");
    const previewImage = document.getElementById("preview");

    // Set a default image URL (replace 'default-image.jpg' with your actual default image URL)
    const defaultImageUrl = "src/images/products/product-default.png";

    // Show the default image initially
    previewImage.src = defaultImageUrl;
    previewImage.style.display = "block";

    // Listen for changes to the input element
    imageInput.addEventListener("change", function() {
      const file = imageInput.files[0];
      if (file) {
        // If a file is selected, read it as a data URL and display the image
        const reader = new FileReader();
        reader.onload = function(event) {
          previewImage.src = event.target.result;
          previewImage.style.display = "block";
        };
        reader.readAsDataURL(file);
      } else {
        // If no file is selected, show the default image
        previewImage.src = defaultImageUrl;
        previewImage.style.display = "block";
      }
    });
  });

