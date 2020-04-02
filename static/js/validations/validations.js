function validateEmail(email) {
  if (email.indexOf(".com") == -1 || email.indexOf("@") == -1) {
    alert("Invalid email!\n");
    return false;
  }
  return true;
}
function validatePasswordsMatch(pass, confirm_pass) {
  if(pass != confirm_pass) {
    alert("Passwords do not match!");
    return false;
  }
  return true;
}
