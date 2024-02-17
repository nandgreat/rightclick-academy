<footer class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="single-footer-widget">
                    <a class="logo" href="#"> <img src="{{asset('store/1/register/circle_logo.png')}}" width="100" alt="ValuedSeed-Academy"> </a>
                    <p style="margin-top: 20px;">Valued Seed Academy is a Learning Management System (LMS) committed to unleashing the complete potential of every learner.</p>
                </div>
            </div>
            <div class="single-footer-widget col-lg-4 col-md-4 widget_nav_menu">
                <h3>Resources</h3>
                <div class="menu-footer-resources-container">
                    <ul id="menu-footer-resources" class="menu">
                        <li id="menu-item-40" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-40"><a href="{{route('becomeInstructor')}}">Become an Instructor</a></li>
                        <li id="menu-item-41" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-41"><a href="{{auth()->check() ? '/users/auth()->user()->id/profile' : '#'}}">Instructor/Student Profile</a></li>
                        <li id="menu-item-42" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-42"><a href="{{route('classes')}}">Courses</a></li>
                        <li id="menu-item-43" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-43"><a href="#">LP Checkout</a></li>
                        <li id="menu-item-44" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-44"><a href="#">Terms &#038; Conditions</a></li>
                    </ul>
                </div>
            </div>
            <div class="single-footer-widget col-lg-4 col-md-4 widget_ecademy_contact_info">
                <h3>Contact Information</h3>
                <ul class="footer-contact-info">
                    <li> <i class="bx bx-map"></i> <a href="#" target="_blank">20 Fatai Idowu Arobieke Street, Lekki Phase 1, Lagos State</a> </li>
                    <li> <i class="bx bx-phone-call"></i> <a href="#">+1-485-456-0102</a> </li>
                    <li> <i class="bx bx-envelope"></i> <a href="mailto:hello@valuedseed-academy.com" >hello@valuedseed-academy.com</a> </li>
                    <li> <i class="bx bxs-inbox"></i> <a href="tel:+1%20587%20785%2045789">+1 587 785 45789</a> </li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom-area">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <p><i class="bx bx-copyright"></i>@php echo date('Y') @endphp Valued Seed Academy | All rights Reserved.</p>
                </div>
                <div class="col-lg-6 col-md-6">
                    <ul id="menu-footer-menu" class="menu">
                        <li id="menu-item-26" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-privacy-policy menu-item-26"><a rel="privacy-policy" href="https://hub.rightclick-academy.com/privacy-policy/">Privacy Policy</a></li>
                        <li id="menu-item-25" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-25"><a href="https://hub.rightclick-academy.com/terms-conditions/">Terms &#038; Conditions</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="lines">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>
</footer>