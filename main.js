const emailInput = document.getElementById('emailid');
emailInput.addEventListener('input', function(validate){
    if(emailInput.validity.typeMismatch){
        emailInput.setCustomValidity('Please enter a valid email address');
    } else{
        emailInput.setCustomValidity('');
    }
});

const phoneInput = document.getElementById('phone');
phoneInput.addEventListener('input',function(validate){
    if(phoneInput.validity.patternMismatch){
        phoneInput.setCustomValidity('Please enter a 10-digit phone number');
    }else{
        phoneInput.setCustomValidity('');
    }
})

const passwordInput = document.getElementById('password');
passwordInput.addEventListener('input', function() {
  const password = passwordInput.value;
  if (password.length < 8) {
    passwordInput.setCustomValidity('Password must be at least 8 characters long');
  } else {
    passwordInput.setCustomValidity('');
  }
});