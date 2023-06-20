document.getElementById('imagen').addEventListener('change', function() {
    var file = this.files[0];
    var fileType = file.type.toLowerCase();
    var allowedExtensions = ['jpeg', 'jpg', 'png'];

    if (allowedExtensions.indexOf(fileType) === -1) {
        alert('Formato de archivo no válido. Por favor, elige una imagen en formato JPEG o PNG.');
        this.value = '';
    }
});