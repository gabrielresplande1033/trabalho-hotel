
@extends('layouts.user_app')

@section('content')
    <!-- Home -->
    <div class="home">

        <!-- Home Slider -->

        <div class="home_slider_container">

            <div class="owl-carousel owl-theme home_slider">

                <div class="owl-item">
                    <div class="home_slider_background" style="background-image:url(images/home_slider.jpg)"></div>

                    <div class="home_slider_content text-center">
                        <div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
                            <h1>Descubra</h1>
                            <h1>o Mundo</h1>
                            <div class="button"><div class="button_bcg"></div><a href="#pesquisar">Experimente Agora!<span></span><span></span><span></span></a></div>
                            <div id = 'pesquisar'></div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Search -->

    <div class="search">


        <!-- Search Contents -->

        <div class="container fill_height">
            <div class="row fill_height">
                <div class="col fill_height">

                    <!-- Search Tabs -->

                    <div class="search_tabs_container">
                        <div class="search_tabs d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
                            <div class="search_tab active d-flex flex-row align-items-center justify-content-lg-center justify-content-center"><img src="images/suitcase.png" alt=""><span>hotéis</span></div>
                        </div>
                    </div>

                    <!-- Search Panel -->

                    <div class="search_panel active">
                        <form action="{{ route('lista') }}" method="post" role="form" id="search_form_1" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
                            {{ csrf_field() }}
                            <div class="search_item">
                                <div>destination</div>
                                <input type="text" name="cidade" class="destination search_input" required="required">
                            </div>
                            <div class="search_item">
                                <div>check in</div>
                                <input type="text" class="check_in search_input" placeholder="YYYY-MM-DD">
                            </div>
                            <div class="search_item">
                                <div>check out</div>
                                <input type="text" class="check_out search_input" placeholder="YYYY-MM-DD">
                            </div>
                            {{--<div class="search_item">--}}
                                {{--<div>adults</div>--}}
                                {{--<select name="adults" id="adults_1" class="dropdown_item_select search_input">--}}
                                    {{--<option>01</option>--}}
                                    {{--<option>02</option>--}}
                                    {{--<option>03</option>--}}
                                {{--</select>--}}
                            {{--</div>--}}
                            {{--<div class="search_item">--}}
                                {{--<div>children</div>--}}
                                {{--<select name="children" id="children_1" class="dropdown_item_select search_input">--}}
                                    {{--<option>0</option>--}}
                                    {{--<option>02</option>--}}
                                    {{--<option>03</option>--}}
                                {{--</select>--}}
                            {{--</div>--}}
                            <button type="submit" class="button search_button">search<span></span><span></span><span></span></button>
                        </form>
                    </div>

                    <!-- Search Panel -->

                    <div class="search_panel">
                        <form action="#" id="search_form_2" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
                            <div class="search_item">
                                <div>destination</div>
                                <input type="text" class="destination search_input" required="required">
                            </div>
                            <div class="search_item">
                                <div>check in</div>
                                <input type="text" class="check_in search_input" placeholder="YYYY-MM-DD">
                            </div>
                            <div class="search_item">
                                <div>check out</div>
                                <input type="text" class="check_out search_input" placeholder="YYYY-MM-DD">
                            </div>
                            <div class="search_item">
                                <div>adults</div>
                                <select name="adults" id="adults_2" class="dropdown_item_select search_input">
                                    <option>01</option>
                                    <option>02</option>
                                    <option>03</option>
                                </select>
                            </div>
                            <div class="search_item">
                                <div>children</div>
                                <select name="children" id="children_2" class="dropdown_item_select search_input">
                                    <option>0</option>
                                    <option>02</option>
                                    <option>03</option>
                                </select>
                            </div>
                            <button class="button search_button">search<span></span><span></span><span></span></button>
                        </form>
                    </div>

                    <!-- Search Panel -->

                    <div class="search_panel">
                        <form action="#" id="search_form_3" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
                            <div class="search_item">
                                <div>destination</div>
                                <input type="text" class="destination search_input" required="required">
                            </div>
                            <div class="search_item">
                                <div>check in</div>
                                <input type="text" class="check_in search_input" placeholder="YYYY-MM-DD">
                            </div>
                            <div class="search_item">
                                <div>check out</div>
                                <input type="text" class="check_out search_input" placeholder="YYYY-MM-DD">
                            </div>
                            <div class="search_item">
                                <div>adults</div>
                                <select name="adults" id="adults_3" class="dropdown_item_select search_input">
                                    <option>01</option>
                                    <option>02</option>
                                    <option>03</option>
                                </select>
                            </div>
                            <div class="search_item">
                                <div>children</div>
                                <select name="children" id="children_3" class="dropdown_item_select search_input">
                                    <option>0</option>
                                    <option>02</option>
                                    <option>03</option>
                                </select>
                            </div>
                            <button class="button search_button">search<span></span><span></span><span></span></button>
                        </form>
                    </div>

                    <!-- Search Panel -->

                    <div class="search_panel">
                        <form action="#" id="search_form_4" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
                            <div class="search_item">
                                <div>destination</div>
                                <input type="text" class="destination search_input" required="required">
                            </div>
                            <div class="search_item">
                                <div>check in</div>
                                <input type="text" class="check_in search_input" placeholder="YYYY-MM-DD">
                            </div>
                            <div class="search_item">
                                <div>check out</div>
                                <input type="text" class="check_out search_input" placeholder="YYYY-MM-DD">
                            </div>
                            <div class="search_item">
                                <div>adults</div>
                                <select name="adults" id="adults_4" class="dropdown_item_select search_input">
                                    <option>01</option>
                                    <option>02</option>
                                    <option>03</option>
                                </select>
                            </div>
                            <div class="search_item">
                                <div>children</div>
                                <select name="children" id="children_4" class="dropdown_item_select search_input">
                                    <option>0</option>
                                    <option>02</option>
                                    <option>03</option>
                                </select>
                            </div>
                            <button class="button search_button">search<span></span><span></span><span></span></button>
                        </form>
                    </div>

                    <!-- Search Panel -->

                    <div class="search_panel">
                        <form action="#" id="search_form_5" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
                            <div class="search_item">
                                <div>destination</div>
                                <input type="text" class="destination search_input" required="required">
                            </div>
                            <div class="search_item">
                                <div>check in</div>
                                <input type="text" class="check_in search_input" placeholder="YYYY-MM-DD">
                            </div>
                            <div class="search_item">
                                <div>check out</div>
                                <input type="text" class="check_out search_input" placeholder="YYYY-MM-DD">
                            </div>
                            <div class="search_item">
                                <div>adults</div>
                                <select name="adults" id="adults_5" class="dropdown_item_select search_input">
                                    <option>01</option>
                                    <option>02</option>
                                    <option>03</option>
                                </select>
                            </div>
                            <div class="search_item">
                                <div>children</div>
                                <select name="children" id="children_5" class="dropdown_item_select search_input">
                                    <option>0</option>
                                    <option>02</option>
                                    <option>03</option>
                                </select>
                            </div>
                            <button class="button search_button">search<span></span><span></span><span></span></button>
                        </form>
                    </div>

                    <!-- Search Panel -->

                    <div class="search_panel">
                        <form action="#" id="search_form_6" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
                            <div class="search_item">
                                <div>destination</div>
                                <input type="text" class="destination search_input" required="required">
                            </div>
                            <div class="search_item">
                                <div>check in</div>
                                <input type="text" class="check_in search_input" placeholder="YYYY-MM-DD">
                            </div>
                            <div class="search_item">
                                <div>check out</div>
                                <input type="text" class="check_out search_input" placeholder="YYYY-MM-DD">
                            </div>
                            <div class="search_item">
                                <div>adults</div>
                                <select name="adults" id="adults_6" class="dropdown_item_select search_input">
                                    <option>01</option>
                                    <option>02</option>
                                    <option>03</option>
                                </select>
                            </div>
                            <div class="search_item">
                                <div>children</div>
                                <select name="children" id="children_6" class="dropdown_item_select search_input">
                                    <option>0</option>
                                    <option>02</option>
                                    <option>03</option>
                                </select>
                            </div>
                            <button class="button search_button">search<span></span><span></span><span></span></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA -->

    <div class="cta">
        <!-- Image by https://unsplash.com/@thanni -->
        <div class="cta_background" style="background-image:url(images/cta.jpg)"></div>

        <div class="container">
            <div class="row">
                <div class="col">

                    <!-- CTA Slider -->

                    <div class="cta_slider_container">
                        <div class="owl-carousel owl-theme cta_slider">

                            <!-- CTA Slider Item -->
                            <div class="owl-item cta_item text-center">
                                <div class="cta_title">maldives deluxe package</div>
                                <div class="rating_r rating_r_4">
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                </div>
                                <p class="cta_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec. Proin bibendum, augue faucibus tincidunt ultrices, tortor augue gravida lectus, et efficitur enim justo vel ligula.</p>
                                <div class="button cta_button"><div class="button_bcg"></div><a href="#">book now<span></span><span></span><span></span></a></div>
                            </div>

                            <!-- CTA Slider Item -->
                            <div class="owl-item cta_item text-center">
                                <div class="cta_title">maldives deluxe package</div>
                                <div class="rating_r rating_r_4">
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                </div>
                                <p class="cta_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec. Proin bibendum, augue faucibus tincidunt ultrices, tortor augue gravida lectus, et efficitur enim justo vel ligula.</p>
                                <div class="button cta_button"><div class="button_bcg"></div><a href="#">book now<span></span><span></span><span></span></a></div>
                            </div>

                            <!-- CTA Slider Item -->
                            <div class="owl-item cta_item text-center">
                                <div class="cta_title">maldives deluxe package</div>
                                <div class="rating_r rating_r_4">
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                </div>
                                <p class="cta_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec. Proin bibendum, augue faucibus tincidunt ultrices, tortor augue gravida lectus, et efficitur enim justo vel ligula.</p>
                                <div class="button cta_button"><div class="button_bcg"></div><a href="#">book now<span></span><span></span><span></span></a></div>
                            </div>

                        </div>

                        <!-- CTA Slider Nav - Prev -->
                        <div class="cta_slider_nav cta_slider_prev">
                            <svg version="1.1" id="Layer_4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
								<defs>
                                    <linearGradient id='cta_grad_prev'>
                                        <stop offset='0%' stop-color='#fa9e1b'/>
                                        <stop offset='100%' stop-color='#8d4fff'/>
                                    </linearGradient>
                                </defs>
                                <path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
								M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
								C22.545,2,26,5.541,26,9.909V23.091z"/>
                                <polygon class="nav_arrow" fill="#F3F6F9" points="15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219
								11.042,18.219 "/>
							</svg>
                        </div>

                        <!-- CTA Slider Nav - Next -->
                        <div class="cta_slider_nav cta_slider_next">
                            <svg version="1.1" id="Layer_5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
								<defs>
                                    <linearGradient id='cta_grad_next'>
                                        <stop offset='0%' stop-color='#fa9e1b'/>
                                        <stop offset='100%' stop-color='#8d4fff'/>
                                    </linearGradient>
                                </defs>
                                <path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
							M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
							C22.545,2,26,5.541,26,9.909V23.091z"/>
                                <polygon class="nav_arrow" fill="#F3F6F9" points="13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554
							17.046,15.554 "/>
							</svg>
                        </div>

                    </div>

                </div>
            </div>
        </div>

    </div>

    {{--<!-- Testimonials -->--}}

    {{--<div class="testimonials">--}}
        {{--<div class="test_border"></div>--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col text-center">--}}
                    {{--<h2 class="section_title">what our clients say about us</h2>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="row">--}}
                {{--<div class="col">--}}

                    {{--<!-- Testimonials Slider -->--}}

                    {{--<div class="test_slider_container">--}}
                        {{--<div class="owl-carousel owl-theme test_slider">--}}

                            {{--<!-- Testimonial Item -->--}}
                            {{--<div class="owl-item">--}}
                                {{--<div class="test_item">--}}
                                    {{--<div class="test_image"><img src="images/test_1.jpg" alt="https://unsplash.com/@anniegray"></div>--}}
                                    {{--<div class="test_icon"><img src="images/backpack.png" alt=""></div>--}}
                                    {{--<div class="test_content_container">--}}
                                        {{--<div class="test_content">--}}
                                            {{--<div class="test_item_info">--}}
                                                {{--<div class="test_name">carla smith</div>--}}
                                                {{--<div class="test_date">May 24, 2017</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="test_quote_title">" Best holliday ever "</div>--}}
                                            {{--<p class="test_quote_text">Nullam eu convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec.</p>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<!-- Testimonial Item -->--}}
                            {{--<div class="owl-item">--}}
                                {{--<div class="test_item">--}}
                                    {{--<div class="test_image"><img src="images/test_2.jpg" alt="https://unsplash.com/@tschax"></div>--}}
                                    {{--<div class="test_icon"><img src="images/island_t.png" alt=""></div>--}}
                                    {{--<div class="test_content_container">--}}
                                        {{--<div class="test_content">--}}
                                            {{--<div class="test_item_info">--}}
                                                {{--<div class="test_name">carla smith</div>--}}
                                                {{--<div class="test_date">May 24, 2017</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="test_quote_title">" Best holliday ever "</div>--}}
                                            {{--<p class="test_quote_text">Nullam eu convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec.</p>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<!-- Testimonial Item -->--}}
                            {{--<div class="owl-item">--}}
                                {{--<div class="test_item">--}}
                                    {{--<div class="test_image"><img src="images/test_3.jpg" alt="https://unsplash.com/@seefromthesky"></div>--}}
                                    {{--<div class="test_icon"><img src="images/kayak.png" alt=""></div>--}}
                                    {{--<div class="test_content_container">--}}
                                        {{--<div class="test_content">--}}
                                            {{--<div class="test_item_info">--}}
                                                {{--<div class="test_name">carla smith</div>--}}
                                                {{--<div class="test_date">May 24, 2017</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="test_quote_title">" Best holliday ever "</div>--}}
                                            {{--<p class="test_quote_text">Nullam eu convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec.</p>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<!-- Testimonial Item -->--}}
                            {{--<div class="owl-item">--}}
                                {{--<div class="test_item">--}}
                                    {{--<div class="test_image"><img src="images/test_2.jpg" alt=""></div>--}}
                                    {{--<div class="test_icon"><img src="images/island_t.png" alt=""></div>--}}
                                    {{--<div class="test_content_container">--}}
                                        {{--<div class="test_content">--}}
                                            {{--<div class="test_item_info">--}}
                                                {{--<div class="test_name">carla smith</div>--}}
                                                {{--<div class="test_date">May 24, 2017</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="test_quote_title">" Best holliday ever "</div>--}}
                                            {{--<p class="test_quote_text">Nullam eu convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec.</p>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<!-- Testimonial Item -->--}}
                            {{--<div class="owl-item">--}}
                                {{--<div class="test_item">--}}
                                    {{--<div class="test_image"><img src="images/test_1.jpg" alt=""></div>--}}
                                    {{--<div class="test_icon"><img src="images/backpack.png" alt=""></div>--}}
                                    {{--<div class="test_content_container">--}}
                                        {{--<div class="test_content">--}}
                                            {{--<div class="test_item_info">--}}
                                                {{--<div class="test_name">carla smith</div>--}}
                                                {{--<div class="test_date">May 24, 2017</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="test_quote_title">" Best holliday ever "</div>--}}
                                            {{--<p class="test_quote_text">Nullam eu convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec.</p>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<!-- Testimonial Item -->--}}
                            {{--<div class="owl-item">--}}
                                {{--<div class="test_item">--}}
                                    {{--<div class="test_image"><img src="images/test_3.jpg" alt=""></div>--}}
                                    {{--<div class="test_icon"><img src="images/kayak.png" alt=""></div>--}}
                                    {{--<div class="test_content_container">--}}
                                        {{--<div class="test_content">--}}
                                            {{--<div class="test_item_info">--}}
                                                {{--<div class="test_name">carla smith</div>--}}
                                                {{--<div class="test_date">May 24, 2017</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="test_quote_title">" Best holliday ever "</div>--}}
                                            {{--<p class="test_quote_text">Nullam eu convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec.</p>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                        {{--</div>--}}

                        {{--<!-- Testimonials Slider Nav - Prev -->--}}
                        {{--<div class="test_slider_nav test_slider_prev">--}}
                            {{--<svg version="1.1" id="Layer_6" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"--}}
                                 {{--width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">--}}
								{{--<defs>--}}
                                    {{--<linearGradient id='test_grad_prev'>--}}
                                        {{--<stop offset='0%' stop-color='#fa9e1b'/>--}}
                                        {{--<stop offset='100%' stop-color='#8d4fff'/>--}}
                                    {{--</linearGradient>--}}
                                {{--</defs>--}}
                                {{--<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z--}}
								{{--M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571--}}
								{{--C22.545,2,26,5.541,26,9.909V23.091z"/>--}}
                                {{--<polygon class="nav_arrow" fill="#F3F6F9" points="15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219--}}
								{{--11.042,18.219 "/>--}}
							{{--</svg>--}}
                        {{--</div>--}}

                        {{--<!-- Testimonials Slider Nav - Next -->--}}
                        {{--<div class="test_slider_nav test_slider_next">--}}
                            {{--<svg version="1.1" id="Layer_7" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"--}}
                                 {{--width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">--}}
								{{--<defs>--}}
                                    {{--<linearGradient id='test_grad_next'>--}}
                                        {{--<stop offset='0%' stop-color='#fa9e1b'/>--}}
                                        {{--<stop offset='100%' stop-color='#8d4fff'/>--}}
                                    {{--</linearGradient>--}}
                                {{--</defs>--}}
                                {{--<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z--}}
							{{--M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571--}}
							{{--C22.545,2,26,5.541,26,9.909V23.091z"/>--}}
                                {{--<polygon class="nav_arrow" fill="#F3F6F9" points="13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554--}}
							{{--17.046,15.554 "/>--}}
							{{--</svg>--}}
                        {{--</div>--}}

                    {{--</div>--}}

                {{--</div>--}}
            {{--</div>--}}

        {{--</div>--}}
    {{--</div>--}}


    <div class="contact">
        <div class="contact_background" style="background-image:url(images/contact.png)"></div>

        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="contact_image">

                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="contact_form_container">
                        <div class="contact_title">Fale Conosco</div>
                        <form action="{{ route('enviar') }}" method="post" id="contact_form" class="contact_form">
                            {{ csrf_field() }}
                            <input type="text" name="nome" id="contanct_form_name" class="contact_form_name input_field" placeholder="Nome" required="required" data-error="Nome é necessário.">
                            <input type="text" name="email" id="contact_form_email" class="contact_form_email input_field" placeholder="E-mail" required="required" data-error="Email é necessário.">
                            <input type="text" name="assunto" id="contact_form_subject" class="contact_form_subject input_field" placeholder="Assunto" required="required" data-error="Assunto é necessário.">
                            <textarea id="contact_form_message" class="text_field contact_form_message" name="mensagem" rows="4" placeholder="Message" required="required" data-error="Por favor, escreva sua mensagem."></textarea>
                            <button type="submit" id="form_submit_button" class="form_submit_button button">Enviar<span></span><span></span><span></span></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection