var fname = document.forms['signup']['fname'];
var lname = document.forms['signup']['lname'];
var email = document.forms['signup']['email'];
var password = document.forms['signup']['password'];
var confirm_password = document.forms['signup']['confirm_password'];

// SELECTING ALL ERROR DISPLAY ELEMENTS
var name_error = document.getElementById('name_error');
var email_error = document.getElementById('email_error');
var password_error = document.getElementById('password_error');
var job_error = document.getElementById('job_error');
var password_error = document.getElementById('phone_error');

// SETTING ALL EVENT LISTENERS
fname.addEventListener('blur', nameVerify, true);
email.addEventListener('blur', emailVerify, true);
password.addEventListener('blur', passwordVerify, true);

// validation function
function Validate() {
  // validate username
  if (fname.value == "") {
    fname.style.border = "1px solid red";
    document.getElementById('nsmr').style.color = "red";
    name_error.textContent = "Kolom Nama Harus Diisi!";
    fname.focus();
    return false;
  }
  // validate email
  if (email.value == "") {
    email.style.border = "1px solid red";
    document.getElementById('email_div').style.color = "red";
    email_error.textContent = "Kolom Email Harus Diisi!";
    email.focus();
    return false;
  }
  // validate password
  if (password.value == "") {
    password.style.border = "1px solid red";
    document.getElementById('password').style.color = "red";
    confirm_password.style.border = "1px solid red";
    password_error.textContent = "Kolom Sandi Harus Diisi";
    password.focus();
    return false;
  }
  // check if the two passwords match
  if (password.value != confirm_password.value) {
    password.style.border = "1px solid red";
    document.getElementById('password_confirm').style.color = "red";
    confirm_password.style.border = "1px solid red";
    password_error.innerHTML = "Sandi Yang Dimasukkan Tidak Sesuai!";
    return false;
  }
}
// event handler functions
function nameVerify() {
  if (fname.value != "") {
   fname.style.border = "1px solid #5e6e66";
   document.getElementById('fname').style.color = "#5e6e66";
   name_error.innerHTML = "";
   return true;
  }
}
function emailVerify() {
  if (email.value != "") {
  	email.style.border = "1px solid #5e6e66";
  	document.getElementById('email').style.color = "#5e6e66";
  	email_error.innerHTML = "";
  	return true;
  }
}
function passwordVerify() {
  if (password.value != "") {
  	password.style.border = "1px solid #5e6e66";
  	document.getElementById('password_confirm').style.color = "#5e6e66";
  	document.getElementById('password').style.color = "#5e6e66";
  	password_error.innerHTML = "";
  	return true;
  }
  if (password.value === confirm_password.value) {
  	password.style.border = "1px solid #5e6e66";
  	document.getElementById('password_confirm').style.color = "#5e6e66";
  	password_error.innerHTML = "";
  	return true;
  }
}