document.addEventListener('DOMContentLoaded', function() {
    let textarea = document.getElementById('autoResizeTextarea');

    if (textarea) {
      textarea.addEventListener('input', autoResize);
      autoResize.call(textarea); // Inizializza l'altezza del textarea

      function autoResize() {
          this.style.height = 'auto'; // Resetta l'altezza
          this.style.height = this.scrollHeight + 'px'; // Imposta l'altezza basata sul contenuto
      }
  }

  let signUpButton = document.getElementById('signUp');
  let signInButton = document.getElementById('signIn');
  let authContainer = document.getElementById('auth-container');

  if (signUpButton && signInButton && authContainer) {
    signUpButton.addEventListener('click', () => {
        authContainer.classList.add("right-panel-active");
        window.location.pathname = `/register`
    });

    signInButton.addEventListener('click', () => {
        authContainer.classList.remove("right-panel-active");
        window.location.pathname = `/login`
    });
            // // Check the current URL
            // if (window.location.pathname === '/register') {
            //     authContainer.classList.add("right-panel-active");
            // } else {
            //     authContainer.classList.remove("right-panel-active");
            // }


  }
});