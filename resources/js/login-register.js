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
  let breadcrumb = document.querySelector('.breadcrumb');

    if (signUpButton && signInButton && authContainer && breadcrumb) {
        signUpButton.addEventListener('click', function(event) {
            event.preventDefault();
            authContainer.classList.add('right-panel-active');
            history.pushState(null, '', '/register');
            updateBreadcrumb('register');
        });

        signInButton.addEventListener('click', function(event) {
            event.preventDefault(); 
            authContainer.classList.remove('right-panel-active');
            history.pushState(null, '', '/login');
            updateBreadcrumb('login');
        });
    }

    function updateBreadcrumb(page) {
        let breadcrumbHTML = `
            <li class="breadcrumb-item mt-5 pt-4"><a href="/">${window.translations.home}</a></li>
        `;
        if (page === 'login') {
            breadcrumbHTML += `
                <li class="breadcrumb-item mt-5 pt-4"><span>${window.translations.login}</span></li>
            `;
        } else if (page === 'register') {
            breadcrumbHTML += `
                <li class="breadcrumb-item mt-5 pt-4"><span>${window.translations.register}</span></li>
            `;
        }
        breadcrumb.innerHTML = breadcrumbHTML;
    }
});