const fotoInput = document.getElementById('foto');
fotoInput.addEventListener('change', function() {
  const foto = fotoInput.files[0];
  const allowedExtensions = /(\.jpg|\.jpeg|\.png)$/i;
  const maxSize = 5 * 1024 * 1024; // 5MB

  if (!allowedExtensions.test(foto.name)) {
    alert('Solo se permiten archivos JPG, JPEG y PNG.');
    fotoInput.value = '';
    return;
  }

  if (foto.size > maxSize) {
    alert('El tamaño máximo permitido es de 5MB.');
    fotoInput.value = '';
    return;
  }
});