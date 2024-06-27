document.addEventListener('DOMContentLoaded', function() {
    let textarea = document.getElementById('autoResizeTextarea');

    if (textarea) {
        textarea.addEventListener('input', autoResize);
        autoResize.call(textarea);

        function autoResize() {
            this.style.height = 'auto';
            this.style.height = this.scrollHeight + 'px';
        }
  }

  let signUpButton = document.getElementById('signUp');
  let signInButton = document.getElementById('signIn');
  let authContainer = document.getElementById('auth-container');

    if (signUpButton && signInButton && authContainer) {
        signUpButton.addEventListener('click', function(event) {
            event.preventDefault();
            authContainer.classList.add('right-panel-active');
            history.pushState(null, '', '/register');
        });

        signInButton.addEventListener('click', function(event) {
            event.preventDefault(); 
            authContainer.classList.remove('right-panel-active');
            history.pushState(null, '', '/login');
        });
    }
});