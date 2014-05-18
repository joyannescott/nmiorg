//Validate the Registration Form before allowing for submit
var $fullname = $("#fullname");
var $username = $("#username");
var $email = $("#email");
var $password = $("#password");
var $confirmPassword = $("#confirm_password");

//Hide hints
$("form span").hide();

function isPasswordEmpty() {
      return $password.val().length == 0
}
function isFulllNameEmpty() {
      return $fullname.val().length == 0
}
function isUsernameEmpty() {
      return $username.val().length == 0
}
function isEmailEmpty() {
      return $email.val().length == 0
}

function isPasswordValid() {
    if(edit && isPasswordEmpty()) {
      return true;
    }
    return $password.val().length > 6;
}

function arePasswordsMatching() {
  return $password.val() === $confirmPassword.val();
}

function canSubmit() {
  console.log(isPasswordValid()  + arePasswordsMatching() +
         !isUsernameEmpty()+ !isFulllNameEmpty()    +         !isEmailEmpty());

  return isPasswordValid()  && arePasswordsMatching() &&
         !isUsernameEmpty() && !isFulllNameEmpty()    &&
         !isEmailEmpty();
}

function passwordEvent(){
    //Find out if password is valid  
    if(isPasswordValid()) {
      //Hide hint if valid
      $password.next().hide();
    } else {
      //else show hint
      $password.next().show();
    }
}

function confirmPasswordEvent() {
  //Find out if password and confirmation match
  if(arePasswordsMatching()) {
    //Hide hint if match
    $confirmPassword.next().hide();
  } else {
    //else show hint 
    $confirmPassword.next().show();
  }
}

function enableSubmitEvent() {
  $("#submit").prop("disabled", !canSubmit());
}

//When event happens on password input
$password.focus(passwordEvent).keyup(passwordEvent).keyup(confirmPasswordEvent).keyup(enableSubmitEvent);

//When event happens on confirmation input
$confirmPassword.focus(confirmPasswordEvent).keyup(confirmPasswordEvent).keyup(enableSubmitEvent);

$password.blur(function(){ if(isPasswordEmpty()) $password.next().hide();});

$email.focus(function(){$email.next().show()});
$email.blur(function(){$email.next().hide()});
$email.keyup(enableSubmitEvent).blur(enableSubmitEvent);
$username.keyup(enableSubmitEvent).blur(enableSubmitEvent);
$fullname.keyup(enableSubmitEvent).blur(enableSubmitEvent);

enableSubmitEvent();

