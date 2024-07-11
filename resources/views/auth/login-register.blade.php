<x-layout>
    <div class="container d-flex justify-content-center align-items-center mt-5 mb-5">
        <div class="auth-container {{ request()->is('register') ? 'right-panel-active' : '' }}" id="auth-container">
            <div class="form-container sign-up-container">
                <form class="form-auth" method="POST" action="/register" novalidate>
                    @csrf
                    <h1 class="auth-h1">{{__('ui.createaccount')}}</h1>
                    <div class="social-container">
                        {{-- <a href="#" class="social auth-a bi bi-facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social auth-a bi bi-google"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#" class="social auth-a bi bi-linkedin"><i class="fab fa-linkedin-in"></i></a> --}}
                    </div>
                    <input class="auth-input" type="text" name="name" id="name" placeholder="{{__('ui.name')}}" value="{{ old('name') }}" />
                        @error('name')
                            <div class="messaggioDiErroreLogin_Register" role="alert">
                                {{$message}}
                            </div>
                        @enderror
                    <input class="auth-input" type="text" name="surname" id="surname" placeholder="{{__('ui.surname')}}" value="{{ old('surname') }}" />
                        @error('surname')
                            <div class="messaggioDiErroreLogin_Register" role="alert">
                                {{$message}}
                            </div>
                        @enderror    
                    <input class="auth-input" type="number" name="age" id="age" placeholder="{{__('ui.age')}}" value="{{ old('age') }}" />
                        @error('age')
                            <div class="messaggioDiErroreLogin_Register" role="alert">
                                {{$message}}
                            </div>
                        @enderror                    
                    <input class="auth-input" type="email" name="email" id="email" placeholder="{{__('ui.emailno')}}" value="{{ old('email') }}" />
                        @error('email')
                            <div class="messaggioDiErroreLogin_Register" role="alert">
                                {{$message}}
                            </div>
                        @enderror    
                    <input class="auth-input" type="password" name="password" id="{{__('ui.pass')}}" placeholder="Password" />
                        @error('password')
                            <div class="messaggioDiErroreLogin_Register" role="alert">
                                {{$message}}
                            </div>
                        @enderror    
                    <input class="auth-input" type="password" name="password_confirmation" id="password_confirmation" placeholder="{{__('ui.confirmpass')}}" />
                    <button class="auth-button">{{__('ui.register')}}</button>
                </form>
            </div>
            <div class="form-container sign-in-container">
                <form class="form-auth" action="{{route('login')}}" method="POST">
                    @csrf
                    <h1 class="auth-h1">{{__('ui.login')}}</h1>
                    <div class="social-container">
                        {{-- <a href="#" class="social auth-a bi bi-facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social auth-a bi bi-google"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#" class="social auth-a bi bi-linkedin"><i class="fab fa-linkedin-in"></i></a> --}}
                    </div>    
                    <input class="auth-input" type="email" name="email" value="{{ old('email') }}" placeholder="{{__('ui.emailno')}}" />
                        @error('email')
                                <div class="messaggioDiErroreLogin_Register" role="alert">
                                    {{$message}}
                                </div>
                        @enderror    
                    <input class="auth-input" type="password" name="password" placeholder="{{__('ui.pass')}}" />
                        @error('password')
                                <div class="messaggioDiErroreLogin_Register" role="alert">
                                    {{$message}}
                                </div>
                        @enderror
                    <button class="auth-button">{{__('ui.login')}}</button>
                </form>
            </div>
            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-left">
                        <h1 class="auth-h1">{{__('ui.welcome')}}</h1>
                        <p class="auth-p">{{__('ui.continue')}}</p>
                        <button class="ghost auth-button" id="signIn">{{__('ui.login')}}</button>
                    </div>
                    <div class="overlay-panel overlay-right">
                        <h1 class="auth-h1">{{__('ui.hi')}}</h1>
                        <p class="auth-p">{{__('ui.insert')}}</p>
                        <button class="ghost auth-button" id="signUp">{{__('ui.register')}}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layout>


    