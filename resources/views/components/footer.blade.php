<footer class="new_footer_area bg_color">
    <div class="new_footer_top">
        <div class="container">
            <div class="row">
                @auth                    
                    <div class="col-lg-4 col-md-12 mb-5">
                        @if (auth()->user()->is_revisor == false)
                            <div class="f_widget company_widget wow fadeInLeft" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft;">
                                <h3 class="f-title f_600 t_color f_size_18">{{__('ui.revisor1')}}</h3>
                                <p>{{__('ui.revisorp')}}</p>
                                    <a href="{{route('become.revisor')}}" class="btn btn_get btn_get_two button_form" type="submit">{{__('ui.revisorbtn')}}</a>
                                    <p class="mchimp-errmessage" style="display: none;"></p>
                                    <p class="mchimp-sucmessage" style="display: none;"></p>
                                </form>
                            </div>
                        @endif                            
                    </div>
                    <div class="col-lg-4 col-md-12 mb-5">
                        <img class="img_footer" src="{{ asset('/storage/img/errore404250px.png')}}">
                    </div>
                    <div class="col-lg-4 col-md-12 mb-5">
                        <div class="f_widget about-widget pl_70 wow fadeInLeft" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInLeft;">
                            <h3 class="f-title f_600 t_color f_size_18">{{__('ui.About us')}}</h3>
                            <ul class="list-unstyled f_list">
                                <li><a class="a_form" href="#">{{__('ui.FAQ')}}</a></li>
                                <li><a class="a_form" href="#">{{__('ui.Term & conditions')}}</a></li>
                                <li><a class="a_form" href="#">{{__('ui.Reporting')}}</a></li>
                                <li><a class="a_form" href="#">{{__('ui.Documentation')}}</a></li>
                                <li><a class="a_form" href="#">{{__('ui.Support Policy')}}</a></li>
                                <li><a class="a_form" href="#">{{__('ui.Privacy')}}</a></li>
                            </ul>
                        </div>
                    </div>
                @else
                    <div class="col-lg-6 col-md-12 mb-5">
                        <img class="img_footer" src="{{ asset('/storage/img/errore404250px.png')}}">
                    </div>
                    <div class="col-lg-6 col-md-12 mb-5">
                        <div class="f_widget about-widget pl_70 wow fadeInLeft" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInLeft;">
                            <h3 class="f-title f_600 t_color f_size_18">{{__('ui.About us')}}</h3>
                            <ul class="list-unstyled f_list">
                                <li><a class="a_form" href="#">{{__('ui.FAQ')}}</a></li>
                                <li><a class="a_form" href="#">{{__('ui.Term & conditions')}}</a></li>
                                <li><a class="a_form" href="#">{{__('ui.Reporting')}}</a></li>
                                <li><a class="a_form" href="#">{{__('ui.Documentation')}}</a></li>
                                <li><a class="a_form" href="#">{{__('ui.Support Policy')}}</a></li>
                                <li><a class="a_form" href="#">{{__('ui.Privacy')}}</a></li>
                            </ul>
                        </div>
                    </div>
                @endauth
            </div>
        </div>
        <div class="footer_bg">
            <div class="footer_bg_one"></div>
            <div class="footer_bg_two"></div>            
        </div>
    </div>
       @guest
            <a href="{{ route('workwithus') }}" class="buttonWorkWithUs">{{__('ui.workwithus')}}</a>
        @endguest
    <div class="footer_bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <p class="mb-0 f_400">© {{env('APP_NAME')}} All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>