import $ from 'jquery';

$(document).ready(function () {
    const video = document.getElementById('camera-preview');
    const canvas = document.getElementById('captured-image');
    const captureButton = document.getElementById('capture-btn');

    // Check for camera support
    if (navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
        navigator.mediaDevices.getUserMedia({ video: true })
            .then(function (stream) {
                video.srcObject = stream;
            })
            .catch(function (error) {
                console.error('Error accessing camera:', error);
            });
    } else {
        console.error('getUserMedia is not supported on your browser');
    }

    // Capture button click event
    captureButton.addEventListener('click', function () {
        const context = canvas.getContext('2d');
    
        // Draw the current frame from the camera onto the canvas
        context.drawImage(video, 0, 0, canvas.width, canvas.height);
    
        // You can now use the data URL or send the captured image to the server
        const imageDataURL = canvas.toDataURL('image/png');
        console.log('Captured Image Data URL:', imageDataURL);
    
        // Set the captured image data in the hidden input field
        $('#capturedImageData').val(imageDataURL);
    });
    
    $('#camera-preview, #capture-btn').hide();

    $('#toogleInput').click(function() {
        // Alterna la visibilidad de la imagen y la cámara
        $('#imgInput img, #camera-preview').toggle();

        // Alterna la visibilidad del input de archivo y el botón de captura
        $('#imagen, #capture-btn').toggle();
    });

});
