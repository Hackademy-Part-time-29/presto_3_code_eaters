<footer class="new_footer_area bg_color">
    <div class="new_footer_top">
        <div class="container">
            <div class="row">
                @auth
                    
                <div class="col-lg-4 col-md-12 mb-5">
                    <div class="f_widget company_widget wow fadeInLeft" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft;">
                        <h3 class="f-title f_600 t_color f_size_18">Vuoi diventare Revisore?</h3>
                        <p>Cliccando il bottone sottostante farai richiesta al nostro admin</p>
                            <a href="{{route('become.revisor')}}" class="btn btn_get btn_get_two button_form" type="submit">Diventa Revisore</a>
                            <p class="mchimp-errmessage" style="display: none;"></p>
                            <p class="mchimp-sucmessage" style="display: none;"></p>
                        </form>
                    </div>
                </div>

                @endauth
                
                <div class="col-lg-4 col-md-12 mb-5">
                    <img class="img_footer" src="{{asset('storage/img/footer.png')}}">
                </div>

                {{-- <div class="col-lg-3 col-md-6">
                    <div class="f_widget about-widget pl_70 wow fadeInLeft" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;">
                        <h3 class="f-title f_600 t_color f_size_18">Download</h3>
                        <ul class="list-unstyled f_list">
                            <li><a class="a_form" href="#">Company</a></li>
                            <li><a class="a_form" href="#">Android App</a></li>
                            <li><a class="a_form" href="#">ios App</a></li>
                            <li><a class="a_form" href="#">Desktop</a></li>
                            <li><a class="a_form" href="#">Projects</a></li>
                            <li><a class="a_form" href="#">My tasks</a></li>
                        </ul>
                    </div>
                </div> --}}
                <div class="col-lg-4 col-md-12 mb-5">
                    <div class="f_widget about-widget pl_70 wow fadeInLeft" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInLeft;">
                        <h3 class="f-title f_600 t_color f_size_18">About us</h3>
                        <ul class="list-unstyled f_list">
                            <p><a class="a_form" href="#">FAQ</a></p>
                            <li><a class="a_form" href="#">Term &amp; conditions</a></li>
                            <li><a class="a_form" href="#">Reporting</a></li>
                            <li><a class="a_form" href="#">Documentation</a></li>
                            <li><a class="a_form" href="#">Support Policy</a></li>
                            <li><a class="a_form" href="#">Privacy</a></li>
                        </ul>
                    </div>
                </div>
                {{-- <div class="col-lg-3 col-md-6">
                    <div class="f_widget social-widget pl_70 wow fadeInLeft" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInLeft;">
                        <h3 class="f-title f_600 t_color f_size_18">Team Solutions</h3>
                        <div class="f_social_icon">
                            <a href="#" class="fab fa-facebook a_form"></a>
                            <a href="#" class="fab fa-twitter a_form"></a>
                            <a href="#" class="fab fa-linkedin a_form"></a>
                            <a href="#" class="fab fa-pinterest a_form"></a>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
        <div class="footer_bg">
            <div class="footer_bg_one">{{-- <img src="{{asset('storage/img/marzio.png')}}" alt=""> --}}</div>
            <div class="footer_bg_two"></div>
            
        </div>
    </div>
    <div class="footer_bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <p class="mb-0 f_400">© {{env('APP_NAME')}}.it 2019 All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>