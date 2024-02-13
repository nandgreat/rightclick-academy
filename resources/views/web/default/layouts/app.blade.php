<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

@php
    $rtlLanguages = !empty($generalSettings['rtl_languages']) ? $generalSettings['rtl_languages'] : [];

    $isRtl = ((in_array(mb_strtoupper(app()->getLocale()), $rtlLanguages)) or (!empty($generalSettings['rtl_layout']) and $generalSettings['rtl_layout'] == 1));
@endphp

<head>
    @include('web.default.includes.metas')
    <title>{{ $pageTitle ?? '' }}{{ !empty($generalSettings['site_name']) ? (' | '.$generalSettings['site_name']) : '' }}</title>

    <!-- General CSS File -->
    <link rel="stylesheet" href="/assets/default/vendors/sweetalert2/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="/assets/default/vendors/toast/jquery.toast.min.css">
    <link rel="stylesheet" href="/assets/default/vendors/simplebar/simplebar.css">
    <link rel="stylesheet" href="/assets/default/css/app.css">

    @if($isRtl)
        <link rel="stylesheet" href="/assets/default/css/rtl-app.css">
    @endif

    @stack('styles_top')
    @stack('scripts_top')

    <style>
        {!! !empty(getCustomCssAndJs('css')) ? getCustomCssAndJs('css') : '' !!}

        {!! getThemeFontsSettings() !!}

        {!! getThemeColorsSettings() !!}
    </style>


    @if(!empty($generalSettings['preloading']) and $generalSettings['preloading'] == '1')
        @include('admin.includes.preloading')
    @endif
</head>

<body class="@if($isRtl) rtl @endif">

<div id="app" class="{{ (!empty($floatingBar) and $floatingBar->position == 'top' and $floatingBar->fixed) ? 'has-fixed-top-floating-bar' : '' }}">
    @if(!empty($floatingBar) and $floatingBar->position == 'top')
        @include('web.default.includes.floating_bar')
    @endif

    @if(!isset($appHeader))
        @include('web.default.includes.navbar')
    @endif

    @if(!empty($justMobileApp))
        @include('web.default.includes.mobile_app_top_nav')
    @endif

    @yield('content')

    @if(!isset($appFooter))
        @include('web.default.includes.footer')
    @endif

    @include('web.default.includes.advertise_modal.index')

    @if(!empty($floatingBar) and $floatingBar->position == 'bottom')
        @include('web.default.includes.floating_bar')
    @endif
</div>



<script>
         jQuery(document).ready(function($){
         $(document).on('click', '.plus', function(e) { // replace '.quantity' with document (without single quote)
             $input = $(this).prev('input.qty');
             var val = parseInt($input.val());
             var step = $input.attr('step');
             step = 'undefined' !== typeof(step) ? parseInt(step) : 1;
             $input.val( val + step ).change();
         });
         $(document).on('click', '.minus',  // replace '.quantity' with document (without single quote)
             function(e) {
             $input = $(this).next('input.qty');
             var val = parseInt($input.val());
             var step = $input.attr('step');
             step = 'undefined' !== typeof(step) ? parseInt(step) : 1;
             if (val > 0) {
                 $input.val( val - step ).change();
             }
         });
         });
      </script> 	<script type="text/javascript">
         (function () {
         	var c = document.body.className;
         	c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
         	document.body.className = c;
         })();
      </script> 	
      <link rel='stylesheet' id='elementor-post-4364-css' href='https://assets.rightclick-academy.com/css/elementor-css-post-4364.css' type='text/css' media='all' />
      <link rel='stylesheet' id='elementor-icons-shared-0-css' href='https://assets.rightclick-academy.com/css/elementor-assets-lib-font-awesome-css-fontawesome.min.css' type='text/css' media='all' />
      <link rel='stylesheet' id='elementor-icons-fa-solid-css' href='https://assets.rightclick-academy.com/css/elementor-assets-lib-font-awesome-css-solid.min.css' type='text/css' media='all' />
      <script type='text/javascript' src='https://assets.rightclick-academy.com/js/contact-form-7-includes-swv-js-index.js' id='swv-js'></script> <script type='text/javascript' id='contact-form-7-js-extra'>
         /* <![CDATA[ */
         var wpcf7 = {"api":{"root":"https:\/\/hub.rightclick-academy.com\/wp-json\/","namespace":"contact-form-7\/v1"},"cached":"1"};
         /* ]]> */
      </script> <script type='text/javascript' src='https://assets.rightclick-academy.com/js/contact-form-7-includes-js-index.js' id='contact-form-7-js'></script> <script type='text/javascript' src='https://assets.rightclick-academy.com/js/woocommerce-assets-js-jquery-blockui-jquery.blockUI.min.js' id='jquery-blockui-js'></script> <script type='text/javascript' id='wc-add-to-cart-js-extra'>
         /* <![CDATA[ */
         var wc_add_to_cart_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","i18n_view_cart":"View cart","cart_url":"https:\/\/hub.rightclick-academy.com\/cart\/","is_cart":"","cart_redirect_after_add":"no"};
         /* ]]> */
      </script> <script type='text/javascript' src='https://assets.rightclick-academy.com/js/woocommerce-assets-js-frontend-add-to-cart.min.js' id='wc-add-to-cart-js'></script> <script type='text/javascript' src='https://assets.rightclick-academy.com/js/woocommerce-assets-js-js-cookie-js.cookie.min.js' id='js-cookie-js'></script> <script type='text/javascript' id='woocommerce-js-extra'>
         /* <![CDATA[ */
         var woocommerce_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%"};
         /* ]]> */
      </script> <script type='text/javascript' src='https://assets.rightclick-academy.com/js/woocommerce-assets-js-frontend-woocommerce.min.js' id='woocommerce-js'></script> <script type='text/javascript' src='https://assets.rightclick-academy.com/js/jquery-ui-core.min.js' id='jquery-ui-core-js'></script> <script type='text/javascript' src='https://assets.rightclick-academy.com/js/x98-underscore.min.js' id='underscore-js'></script> <script type='text/javascript' id='wp-util-js-extra'>
         /* <![CDATA[ */
         var _wpUtilSettings = {"ajax":{"url":"\/wp-admin\/admin-ajax.php"}};
         /* ]]> */
      </script> <script type='text/javascript' src='https://assets.rightclick-academy.com/js/8az-wp-util.min.js' id='wp-util-js'></script> <script type='text/javascript' src='https://assets.rightclick-academy.com/js/og3-backbone.min.js' id='backbone-js'></script> <script type='text/javascript' src='https://assets.rightclick-academy.com/js/wp-events-manager-inc-libraries-countdown-js-jquery.plugin.min.js' id='wpems-countdown-plugin-js-js'></script> <script type='text/javascript' id='wpems-countdown-js-js-extra'>
         /* <![CDATA[ */
         var WPEMS = {"gmt_offset":"0","current_time":"Aug 25, 2023 16:10:00 +0000","l18n":{"labels":["Years","Months","Weeks","Days","Hours","Minutes","Seconds"],"labels1":["Year","Month","Week","Day","Hour","Minute","Second"]},"ajaxurl":"https:\/\/hub.rightclick-academy.com\/wp-admin\/admin-ajax.php","something_wrong":"Something went wrong","register_button":"ec5a6b9fbd"};
         /* ]]> */
      </script> <script type='text/javascript' src='https://assets.rightclick-academy.com/js/wp-events-manager-inc-libraries-countdown-js-jquery.countdown.min.js' id='wpems-countdown-js-js'></script> <script type='text/javascript' src='https://assets.rightclick-academy.com/js/wp-events-manager-inc-libraries-magnific-popup-js-jquery.magnific-popup.min.js' id='wpems-magnific-popup-js-js'></script> <script type='text/javascript' src='https://assets.rightclick-academy.com/js/wp-events-manager-assets-js-frontend-events.min.js' id='wpems-frontend-js-js'></script> <script type='text/javascript' src='https://assets.rightclick-academy.com/js/woocommerce-assets-js-jquery-cookie-jquery.cookie.min.js' id='jquery-cookie-js'></script> <script type='text/javascript' src='https://assets.rightclick-academy.com/js/elementor-pro-assets-lib-smartmenus-jquery.smartmenus.min.js' id='smartmenus-js'></script> <script type='text/javascript' src='https://assets.rightclick-academy.com/js/elementor-pro-assets-js-webpack-pro.runtime.min.js' id='elementor-pro-webpack-runtime-js'></script> <script type='text/javascript' src='https://assets.rightclick-academy.com/js/elementor-assets-js-webpack.runtime.min.js' id='elementor-webpack-runtime-js'></script> <script type='text/javascript' src='https://assets.rightclick-academy.com/js/elementor-assets-js-frontend-modules.min.js' id='elementor-frontend-modules-js'></script> <script type='text/javascript' src='https://assets.rightclick-academy.com/js/dist-vendor-wp-polyfill-inert.min.js' id='wp-polyfill-inert-js'></script> <script type='text/javascript' src='https://assets.rightclick-academy.com/js/dist-vendor-regenerator-runtime.min.js' id='regenerator-runtime-js'></script> <script type='text/javascript' src='https://assets.rightclick-academy.com/js/dist-vendor-wp-polyfill.min.js' id='wp-polyfill-js'></script> <script type='text/javascript' src='https://assets.rightclick-academy.com/js/dist-hooks.min.js' id='wp-hooks-js'></script> <script type='text/javascript' src='https://assets.rightclick-academy.com/js/dist-i18n.min.js' id='wp-i18n-js'></script> <script id="wp-i18n-js-after" type="text/javascript">
         wp.i18n.setLocaleData( { 'text direction\u0004ltr': [ 'ltr' ] } );
      </script> <script id="elementor-pro-frontend-js-before" type="text/javascript">
         var ElementorProFrontendConfig = {"ajaxurl":"https:\/\/hub.rightclick-academy.com\/wp-admin\/admin-ajax.php","nonce":"c835ee4757","urls":{"assets":"https:\/\/hub.rightclick-academy.com\/wp-content\/plugins\/elementor-pro\/assets\/","rest":"https:\/\/hub.rightclick-academy.com\/wp-json\/"},"shareButtonsNetworks":{"facebook":{"title":"Facebook","has_counter":true},"twitter":{"title":"Twitter"},"linkedin":{"title":"LinkedIn","has_counter":true},"pinterest":{"title":"Pinterest","has_counter":true},"reddit":{"title":"Reddit","has_counter":true},"vk":{"title":"VK","has_counter":true},"odnoklassniki":{"title":"OK","has_counter":true},"tumblr":{"title":"Tumblr"},"digg":{"title":"Digg"},"skype":{"title":"Skype"},"stumbleupon":{"title":"StumbleUpon","has_counter":true},"mix":{"title":"Mix"},"telegram":{"title":"Telegram"},"pocket":{"title":"Pocket","has_counter":true},"xing":{"title":"XING","has_counter":true},"whatsapp":{"title":"WhatsApp"},"email":{"title":"Email"},"print":{"title":"Print"}},"woocommerce":{"menu_cart":{"cart_page_url":"https:\/\/hub.rightclick-academy.com\/cart\/","checkout_page_url":"https:\/\/hub.rightclick-academy.com\/checkout\/","fragments_nonce":"7467e98d5f"}},"facebook_sdk":{"lang":"en_US","app_id":""},"lottie":{"defaultAnimationUrl":"https:\/\/hub.rightclick-academy.com\/wp-content\/plugins\/elementor-pro\/modules\/lottie\/assets\/animations\/default.json"}};
      </script> <script type='text/javascript' src='https://assets.rightclick-academy.com/js/elementor-pro-assets-js-frontend.min.js' id='elementor-pro-frontend-js'></script> <script type='text/javascript' src='https://assets.rightclick-academy.com/js/elementor-assets-lib-waypoints-waypoints.min.js' id='elementor-waypoints-js'></script> <script id="elementor-frontend-js-before" type="text/javascript">
         var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false,"isScriptDebug":false},"i18n":{"shareOnFacebook":"Share on Facebook","shareOnTwitter":"Share on Twitter","pinIt":"Pin it","download":"Download","downloadImage":"Download image","fullscreen":"Fullscreen","zoom":"Zoom","share":"Share","playVideo":"Play Video","previous":"Previous","next":"Next","close":"Close","a11yCarouselWrapperAriaLabel":"Carousel | Horizontal scrolling: Arrow Left & Right","a11yCarouselPrevSlideMessage":"Previous slide","a11yCarouselNextSlideMessage":"Next slide","a11yCarouselFirstSlideMessage":"This is the first slide","a11yCarouselLastSlideMessage":"This is the last slide","a11yCarouselPaginationBulletMessage":"Go to slide"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"responsive":{"breakpoints":{"mobile":{"label":"Mobile Portrait","value":767,"default_value":767,"direction":"max","is_enabled":true},"mobile_extra":{"label":"Mobile Landscape","value":880,"default_value":880,"direction":"max","is_enabled":false},"tablet":{"label":"Tablet Portrait","value":1024,"default_value":1024,"direction":"max","is_enabled":true},"tablet_extra":{"label":"Tablet Landscape","value":1200,"default_value":1200,"direction":"max","is_enabled":false},"laptop":{"label":"Laptop","value":1366,"default_value":1366,"direction":"max","is_enabled":false},"widescreen":{"label":"Widescreen","value":2400,"default_value":2400,"direction":"min","is_enabled":false}}},"version":"3.15.2","is_static":false,"experimentalFeatures":{"e_dom_optimization":true,"e_optimized_assets_loading":true,"additional_custom_breakpoints":true,"theme_builder_v2":true,"landing-pages":true,"page-transitions":true,"notes":true,"loop":true,"form-submissions":true,"e_scroll_snap":true},"urls":{"assets":"https:\/\/hub.rightclick-academy.com\/wp-content\/plugins\/elementor\/assets\/"},"swiperClass":"swiper-container","settings":{"page":[],"editorPreferences":[]},"kit":{"global_image_lightbox":"yes","active_breakpoints":["viewport_mobile","viewport_tablet"],"lightbox_enable_counter":"yes","lightbox_enable_fullscreen":"yes","lightbox_enable_zoom":"yes","lightbox_enable_share":"yes","lightbox_title_src":"title","lightbox_description_src":"description","woocommerce_notices_elements":[]},"post":{"id":30,"title":"Q-Hub","excerpt":"","featuredImage":false}};
      </script> <script type='text/javascript' src='https://assets.rightclick-academy.com/js/elementor-assets-js-frontend.min.js' id='elementor-frontend-js'></script> <script type='text/javascript' src='https://assets.rightclick-academy.com/js/elementor-pro-assets-js-elements-handlers.min.js' id='pro-elements-handlers-js'></script>  


</body>
</html>
