// validation.js

function validatePassword() {
  const password = document.getElementById('password').value;
  const confirmPassword = document.getElementById('confirmPassword').value;

  if (password !== confirmPassword) {
    alert("Password dan konfirmasi password tidak sesuai.");
    return false;
  }

  alert("Registrasi berhasil!");
  return true;
}