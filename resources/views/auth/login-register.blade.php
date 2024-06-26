<x-layout>
    <div class="container d-flex justify-content-center align-items-center mt-5 mb-5">
        <div class="auth-container {{ request()->is('register') ? 'right-panel-active' : '' }}" id="auth-container">
            <div class="form-container sign-up-container">
                <form class="form-auth" method="POST" action="/register" novalidate>
                    @csrf
                    <h1 class="auth-h1">Crea un account</h1>
                    <div class="social-container">
                        <a href="#" class="social auth-a bi bi-facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social auth-a bi bi-google"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#" class="social auth-a bi bi-linkedin"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <input class="auth-input" type="text" name="name" id="name" placeholder="Nome" value="{{ old('name') }}" required/>
                        @error('name')
                            <div class="messaggioDiErroreLogin_Register" role="alert">
                                {{$message}}
                            </div>
                        @enderror
                    <input class="auth-input" type="text" name="surname" id="surname" placeholder="Cognome" value="{{ old('surname') }}" required/>
                        @error('surname')
                            <div class="messaggioDiErroreLogin_Register" role="alert">
                                {{$message}}
                            </div>
                        @enderror    
                    <input class="auth-input" type="number" name="age" id="age" placeholder="Età" value="{{ old('age') }}" required/>
                        @error('age')
                            <div class="messaggioDiErroreLogin_Register" role="alert">
                                {{$message}}
                            </div>
                        @enderror                    
                    <input class="auth-input" type="email" name="email" id="email" placeholder="Email" value="{{ old('email') }}" required/>
                        @error('email')
                            <div class="messaggioDiErroreLogin_Register" role="alert">
                                {{$message}}
                            </div>
                        @enderror    
                    <input class="auth-input" type="password" name="password" id="password" placeholder="Password" required/>
                        @error('password')
                            <div class="messaggioDiErroreLogin_Register" role="alert">
                                {{$message}}
                            </div>
                        @enderror    
                    <input class="auth-input" type="password" name="password_confirmation" id="password_confirmation" placeholder="Conferma Password" required/>
                    <button class="auth-button">Registrati</button>
                </form>
            </div>
            <div class="form-container sign-in-container">
                <form class="form-auth" action="{{route('login')}}" method="POST">
                    @csrf
                    <h1 class="auth-h1">Login</h1>
                    <div class="social-container">
                        <a href="#" class="social auth-a bi bi-facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social auth-a bi bi-google"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#" class="social auth-a bi bi-linkedin"><i class="fab fa-linkedin-in"></i></a>
                    </div>    
                    <input class="auth-input" type="email" name="email" value="{{ old('email') }}" placeholder="Email" />
                        @error('email')
                                <div class="messaggioDiErroreLogin_Register" role="alert">
                                    {{$message}}
                                </div>
                        @enderror    
                    <input class="auth-input" type="password" name="password" placeholder="Password" />
                        @error('password')
                                <div class="messaggioDiErroreLogin_Register" role="alert">
                                    {{$message}}
                                </div>
                        @enderror
                    <button class="auth-button">Login</button>
                </form>
            </div>
            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-left">
                        <h1 class="auth-h1">Bentornato!</h1>
                        <p class="auth-p">Per continuare ad essere connessi con noi perfavore esegui il login con i tuoi dati personali</p>
                        <button class="ghost auth-button" id="signIn">Login</button>
                    </div>
                    <div class="overlay-panel overlay-right">
                        <h1 class="auth-h1">Ciao!</h1>
                        <p class="auth-p">Inserisci i tuoi dati personali ed inizia l'avventura insieme a noi</p>
                        <button class="ghost auth-button" id="signUp">Registrati</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
    
    </x-layout>