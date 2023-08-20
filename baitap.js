document.addEventListener("DOMContentLoaded", function() {
    const fileInput = document.getElementById("fileInput");
    const uploadButton = document.getElementById("uploadButton");
    const imagePreview = document.getElementById("imagePreview");

    fileInput.addEventListener("change", function(event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                const imageUrl = e.target.result;
                imagePreview.innerHTML = `<img src="${imageUrl}" alt="Uploaded Image">`;
            }
            reader.readAsDataURL(file);
        }
    });
    uploadButton.addEventListener("click", function() {
        // Handle the upload process here, you can use AJAX to send the file to the server.
        alert("Tải ảnh lên server!");
    });
});
