<x-layout>
<div class="ilContenitoreDelLogin">
    <div class="container-form" id="container">
        <div class="form-container sign-up-container">
            <form class="form-login" action="#">
                <h1 class="form-h1">Create Account</h1>
                <div class="social-container">
                    <a href="#" class="social form-a"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social form-a"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social form-a"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>or use your email for registration</span>
                <input class="form-input" type="text" placeholder="Name" />
                <input class="form-input" type="email" placeholder="Email" />
                <input class="form-input" type="password" placeholder="Password" />
                <button class="button-form">Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form class="form-login" action="#">
                <h1 class="form-h1">Sign in</h1>
                <div class="social-container">
                    <a href="#" class="social form-a"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social form-a"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social form-a"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>or use your account</span>
                <input class="form-input" type="email" placeholder="Email" />
                <input class="form-input" type="password" placeholder="Password" />
                <a href="#" class="form-a">Forgot your password?</a>
                <button class="button-form">Sign In</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1 class="form-h1">Welcome Back!</h1>
                    <p class="form-p">To keep connected with us please login with your personal info</p>
                    <button class="ghost" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1 class="form-h1">Hello, Friend!</h1>
                    <p class="form-p">Enter your personal details and start journey with us</p>
                    <button class="ghost button-form" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>
</div>


</x-layout>