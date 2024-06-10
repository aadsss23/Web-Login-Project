// script.js

document.addEventListener('DOMContentLoaded', function() {
  const usernameInput = document.getElementById('username');
  const passwordInput = document.getElementById('password');
  const loginButton = document.querySelector('button[type="submit"]');

  // Function to check if inputs are empty
  function checkInputs() {
    const usernameValue = usernameInput.value.trim();
    const passwordValue = passwordInput.value.trim();

    if (usernameValue !== '' && passwordValue !== '') {
      loginButton.removeAttribute('disabled');
    } else {
      loginButton.setAttribute('disabled', 'disabled');
    }
  }

  // Add event listeners to inputs
  usernameInput.addEventListener('input', checkInputs);
  passwordInput.addEventListener('input', checkInputs);

  // Initial check on page load
  checkInputs();
});

