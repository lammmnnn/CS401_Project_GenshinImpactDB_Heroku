var email = document.forms['signupform']['email'];
var username = document.forms['signupform']['username'];
var password = document.forms['signupform']['password'];
var emailError = document.getElementById('emailError');
var usernameError = document.getElementById('usernameError');
var passwordError = document.getElementById('passwordError');

function validated() {
  return (validateEmail() && validateUsername() && validatePassword());
}

function validateEmail() {
  var mailformat = /(?:[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])/;
  if (email.value.length > 0 && !email.value.match(mailformat)) {
    email.style.borderColor = "red";
    emailError.style.display = "block";
    return false;
  } else {
    email.style.borderColor = "#C5CED9";
    emailError.style.display = "none";
    return true;
  }
}

function validateUsername() {
  var usernameformat = /^[a-zA-Z0-9]+$/;

  if (username.value.length > 0 && (username.value.length < 4 || !username.value.match(usernameformat))) {
    username.style.borderColor = "red";
    usernameError.style.display = "block";
    return false;
  } else {
    username.style.borderColor = "#C5CED9";
    usernameError.style.display = "none";
    return true;
  }
}

function hide_errmsg() {
  if (document.getElementById("emailTakenError") !== null)
    document.getElementById("emailTakenError").style.display = "none";
  if (document.getElementById("idTakenError") !== null)
    document.getElementById("idTakenError").style.display = "none";
}

function validatePassword() {
  if (password.value.length > 0 && password.value.length < 6) {
    password.style.border.color = "red";
    passwordError.style.display = "block";
    return false;
  } else {
    password.style.borderColor = "#C5CED9";
    passwordError.style.display = "none";
    return true;
  }
}
