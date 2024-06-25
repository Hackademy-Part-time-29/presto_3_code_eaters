document.addEventListener('DOMContentLoaded', function() {
    const textarea = document.getElementById('autoResizeTextarea');

    textarea.addEventListener('input', autoResize);

    function autoResize() {
      this.style.height = 'auto'; // Resetta l'altezza
      this.style.height = this.scrollHeight + 'px'; // Imposta l'altezza basata sul contenuto
    }

    // Inizializza l'altezza del textarea
    autoResize.call(textarea);
});

let signUpButton = document.getElementById('signUp');
let signInButton = document.getElementById('signIn');
let authContainer = document.getElementById('auth-container');

signUpButton.addEventListener('click', () => {
	authContainer.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	authContainer.classList.remove("right-panel-active");
});