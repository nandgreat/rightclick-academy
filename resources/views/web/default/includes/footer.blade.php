<head>
   <script type="text/javascript">
      window._wpemojiSettings = {
         "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/",
         "ext": ".png",
         "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/",
         "svgExt": ".svg",
         "source": {
            "concatemoji": "https:\/\/hub.rightclick-academy.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.3"
         }
      };
      /*! This file is auto-generated */
      ! function(i, n) {
         var o, s, e;

         function c(e) {
            try {
               var t = {
                  supportTests: e,
                  timestamp: (new Date).valueOf()
               };
               sessionStorage.setItem(o, JSON.stringify(t))
            } catch (e) {}
         }

         function p(e, t, n) {
            e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0);
            var t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data),
               r = (e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0), new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data));
            return t.every(function(e, t) {
               return e === r[t]
            })
         }

         function u(e, t, n) {
            switch (t) {
               case "flag":
                  return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !n(e, "\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") && !n(e, "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f", "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f");
               case "emoji":
                  return !n(e, "\ud83e\udef1\ud83c\udffb\u200d\ud83e\udef2\ud83c\udfff", "\ud83e\udef1\ud83c\udffb\u200b\ud83e\udef2\ud83c\udfff")
            }
            return !1
         }

         function f(e, t, n) {
            var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(300, 150) : i.createElement("canvas"),
               a = r.getContext("2d", {
                  willReadFrequently: !0
               }),
               o = (a.textBaseline = "top", a.font = "600 32px Arial", {});
            return e.forEach(function(e) {
               o[e] = t(a, e, n)
            }), o
         }

         function t(e) {
            var t = i.createElement("script");
            t.src = e, t.defer = !0, i.head.appendChild(t)
         }
         "undefined" != typeof Promise && (o = "wpEmojiSettingsSupports", s = ["flag", "emoji"], n.supports = {
            everything: !0,
            everythingExceptFlag: !0
         }, e = new Promise(function(e) {
            i.addEventListener("DOMContentLoaded", e, {
               once: !0
            })
         }), new Promise(function(t) {
            var n = function() {
               try {
                  var e = JSON.parse(sessionStorage.getItem(o));
                  if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() < e.timestamp + 604800 && "object" == typeof e.supportTests) return e.supportTests
               } catch (e) {}
               return null
            }();
            if (!n) {
               if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" != typeof URL && URL.createObjectURL && "undefined" != typeof Blob) try {
                  var e = "postMessage(" + f.toString() + "(" + [JSON.stringify(s), u.toString(), p.toString()].join(",") + "));",
                     r = new Blob([e], {
                        type: "text/javascript"
                     }),
                     a = new Worker(URL.createObjectURL(r), {
                        name: "wpTestEmojiSupports"
                     });
                  return void(a.onmessage = function(e) {
                     c(n = e.data), a.terminate(), t(n)
                  })
               } catch (e) {}
               c(n = f(s, u, p))
            }
            t(n)
         }).then(function(e) {
            for (var t in e) n.supports[t] = e[t], n.supports.everything = n.supports.everything && n.supports[t], "flag" !== t && (n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && n.supports[t]);
            n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag, n.DOMReady = !1, n.readyCallback = function() {
               n.DOMReady = !0
            }
         }).then(function() {
            return e
         }).then(function() {
            var e;
            n.supports.everything || (n.readyCallback(), (e = n.source || {}).concatemoji ? t(e.concatemoji) : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)))
         }))
      }((window, document), window._wpemojiSettings);
   </script>
   <style type="text/css">
      img.wp-smiley,
      img.emoji {
         display: inline !important;
         border: none !important;
         box-shadow: none !important;
         height: 1em !important;
         width: 1em !important;
         margin: 0 0.07em !important;
         vertical-align: -0.1em !important;
         background: none !important;
         padding: 0 !important;
      }
   </style>
   <link rel='stylesheet' id='wp-block-library-css' href='http://harmani.com.ng/qhub/css/dist-block-library-style.min.css' type='text/css' media='all' />
   <link rel='stylesheet' id='wc-blocks-vendors-style-css' href='http://harmani.com.ng/qhub/css/woocommerce-packages-woocommerce-blocks-build-wc-blocks-vendors-style.css' type='text/css' media='all' />
   <link rel='stylesheet' id='wc-blocks-style-css' href='http://harmani.com.ng/qhub/css/woocommerce-packages-woocommerce-blocks-build-wc-blocks-style.css' type='text/css' media='all' />
   <style id='classic-theme-styles-inline-css' type='text/css'>
      /*! This file is auto-generated */
      .wp-block-button__link {
         color: #fff;
         background-color: #32373c;
         border-radius: 9999px;
         box-shadow: none;
         text-decoration: none;
         padding: calc(.667em + 2px) calc(1.333em + 2px);
         font-size: 1.125em
      }

      .wp-block-file__button {
         background: #32373c;
         color: #fff;
         text-decoration: none
      }
   </style>
   <style id='global-styles-inline-css' type='text/css'>
      body {
         --wp--preset--color--black: #71BF45;
         --wp--preset--color--cyan-bluish-gray: #abb8c3;
         --wp--preset--color--white: #ffffff;
         --wp--preset--color--pale-pink: #f78da7;
         --wp--preset--color--vivid-red: #cf2e2e;
         --wp--preset--color--luminous-vivid-orange: #ff6900;
         --wp--preset--color--luminous-vivid-amber: #fcb900;
         --wp--preset--color--light-green-cyan: #7bdcb5;
         --wp--preset--color--vivid-green-cyan: #00d084;
         --wp--preset--color--pale-cyan-blue: #8ed1fc;
         --wp--preset--color--vivid-cyan-blue: #0693e3;
         --wp--preset--color--vivid-purple: #9b51e0;
         --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
         --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
         --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
         --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
         --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
         --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
         --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
         --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
         --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
         --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
         --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
         --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
         --wp--preset--font-size--small: 13px;
         --wp--preset--font-size--medium: 20px;
         --wp--preset--font-size--large: 36px;
         --wp--preset--font-size--x-large: 42px;
         --wp--preset--spacing--20: 0.44rem;
         --wp--preset--spacing--30: 0.67rem;
         --wp--preset--spacing--40: 1rem;
         --wp--preset--spacing--50: 1.5rem;
         --wp--preset--spacing--60: 2.25rem;
         --wp--preset--spacing--70: 3.38rem;
         --wp--preset--spacing--80: 5.06rem;
         --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
         --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
         --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
         --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
         --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
      }

      :where(.is-layout-flex) {
         gap: 0.5em;
      }

      :where(.is-layout-grid) {
         gap: 0.5em;
      }

      body .is-layout-flow>.alignleft {
         float: left;
         margin-inline-start: 0;
         margin-inline-end: 2em;
      }

      body .is-layout-flow>.alignright {
         float: right;
         margin-inline-start: 2em;
         margin-inline-end: 0;
      }

      body .is-layout-flow>.aligncenter {
         margin-left: auto !important;
         margin-right: auto !important;
      }

      body .is-layout-constrained>.alignleft {
         float: left;
         margin-inline-start: 0;
         margin-inline-end: 2em;
      }

      body .is-layout-constrained>.alignright {
         float: right;
         margin-inline-start: 2em;
         margin-inline-end: 0;
      }

      body .is-layout-constrained>.aligncenter {
         margin-left: auto !important;
         margin-right: auto !important;
      }

      body .is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
         max-width: var(--wp--style--global--content-size);
         margin-left: auto !important;
         margin-right: auto !important;
      }

      body .is-layout-constrained>.alignwide {
         max-width: var(--wp--style--global--wide-size);
      }

      body .is-layout-flex {
         display: flex;
      }

      body .is-layout-flex {
         flex-wrap: wrap;
         align-items: center;
      }

      body .is-layout-flex>* {
         margin: 0;
      }

      body .is-layout-grid {
         display: grid;
      }

      body .is-layout-grid>* {
         margin: 0;
      }

      :where(.wp-block-columns.is-layout-flex) {
         gap: 2em;
      }

      :where(.wp-block-columns.is-layout-grid) {
         gap: 2em;
      }

      :where(.wp-block-post-template.is-layout-flex) {
         gap: 1.25em;
      }

      :where(.wp-block-post-template.is-layout-grid) {
         gap: 1.25em;
      }

      .has-black-color {
         color: var(--wp--preset--color--black) !important;
      }

      .has-cyan-bluish-gray-color {
         color: var(--wp--preset--color--cyan-bluish-gray) !important;
      }

      .has-white-color {
         color: var(--wp--preset--color--white) !important;
      }

      .has-pale-pink-color {
         color: var(--wp--preset--color--pale-pink) !important;
      }

      .has-vivid-red-color {
         color: var(--wp--preset--color--vivid-red) !important;
      }

      .has-luminous-vivid-orange-color {
         color: var(--wp--preset--color--luminous-vivid-orange) !important;
      }

      .has-luminous-vivid-amber-color {
         color: var(--wp--preset--color--luminous-vivid-amber) !important;
      }

      .has-light-green-cyan-color {
         color: var(--wp--preset--color--light-green-cyan) !important;
      }

      .has-vivid-green-cyan-color {
         color: var(--wp--preset--color--vivid-green-cyan) !important;
      }

      .has-pale-cyan-blue-color {
         color: var(--wp--preset--color--pale-cyan-blue) !important;
      }

      .has-vivid-cyan-blue-color {
         color: var(--wp--preset--color--vivid-cyan-blue) !important;
      }

      .has-vivid-purple-color {
         color: var(--wp--preset--color--vivid-purple) !important;
      }

      .has-black-background-color {
         background-color: var(--wp--preset--color--black) !important;
      }

      .has-cyan-bluish-gray-background-color {
         background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
      }

      .has-white-background-color {
         background-color: var(--wp--preset--color--white) !important;
      }

      .has-pale-pink-background-color {
         background-color: var(--wp--preset--color--pale-pink) !important;
      }

      .has-vivid-red-background-color {
         background-color: var(--wp--preset--color--vivid-red) !important;
      }

      .has-luminous-vivid-orange-background-color {
         background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
      }

      .has-luminous-vivid-amber-background-color {
         background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
      }

      .has-light-green-cyan-background-color {
         background-color: var(--wp--preset--color--light-green-cyan) !important;
      }

      .has-vivid-green-cyan-background-color {
         background-color: var(--wp--preset--color--vivid-green-cyan) !important;
      }

      .has-pale-cyan-blue-background-color {
         background-color: var(--wp--preset--color--pale-cyan-blue) !important;
      }

      .has-vivid-cyan-blue-background-color {
         background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
      }

      .has-vivid-purple-background-color {
         background-color: var(--wp--preset--color--vivid-purple) !important;
      }

      .has-black-border-color {
         border-color: var(--wp--preset--color--black) !important;
      }

      .has-cyan-bluish-gray-border-color {
         border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
      }

      .has-white-border-color {
         border-color: var(--wp--preset--color--white) !important;
      }

      .has-pale-pink-border-color {
         border-color: var(--wp--preset--color--pale-pink) !important;
      }

      .has-vivid-red-border-color {
         border-color: var(--wp--preset--color--vivid-red) !important;
      }

      .has-luminous-vivid-orange-border-color {
         border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
      }

      .has-luminous-vivid-amber-border-color {
         border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
      }

      .has-light-green-cyan-border-color {
         border-color: var(--wp--preset--color--light-green-cyan) !important;
      }

      .has-vivid-green-cyan-border-color {
         border-color: var(--wp--preset--color--vivid-green-cyan) !important;
      }

      .has-pale-cyan-blue-border-color {
         border-color: var(--wp--preset--color--pale-cyan-blue) !important;
      }

      .has-vivid-cyan-blue-border-color {
         border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
      }

      .has-vivid-purple-border-color {
         border-color: var(--wp--preset--color--vivid-purple) !important;
      }

      .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
         background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
      }

      .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
         background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
      }

      .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
         background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
      }

      .has-luminous-vivid-orange-to-vivid-red-gradient-background {
         background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
      }

      .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
         background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
      }

      .has-cool-to-warm-spectrum-gradient-background {
         background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
      }

      .has-blush-light-purple-gradient-background {
         background: var(--wp--preset--gradient--blush-light-purple) !important;
      }

      .has-blush-bordeaux-gradient-background {
         background: var(--wp--preset--gradient--blush-bordeaux) !important;
      }

      .has-luminous-dusk-gradient-background {
         background: var(--wp--preset--gradient--luminous-dusk) !important;
      }

      .has-pale-ocean-gradient-background {
         background: var(--wp--preset--gradient--pale-ocean) !important;
      }

      .has-electric-grass-gradient-background {
         background: var(--wp--preset--gradient--electric-grass) !important;
      }

      .has-midnight-gradient-background {
         background: var(--wp--preset--gradient--midnight) !important;
      }

      .has-small-font-size {
         font-size: var(--wp--preset--font-size--small) !important;
      }

      .has-medium-font-size {
         font-size: var(--wp--preset--font-size--medium) !important;
      }

      .has-large-font-size {
         font-size: var(--wp--preset--font-size--large) !important;
      }

      .has-x-large-font-size {
         font-size: var(--wp--preset--font-size--x-large) !important;
      }

      .wp-block-navigation a:where(:not(.wp-element-button)) {
         color: inherit;
      }

      :where(.wp-block-post-template.is-layout-flex) {
         gap: 1.25em;
      }

      :where(.wp-block-post-template.is-layout-grid) {
         gap: 1.25em;
      }

      :where(.wp-block-columns.is-layout-flex) {
         gap: 2em;
      }

      :where(.wp-block-columns.is-layout-grid) {
         gap: 2em;
      }

      .wp-block-pullquote {
         font-size: 1.5em;
         line-height: 1.6;
      }
   </style>
   <link rel='stylesheet' id='contact-form-7-css' href='http://harmani.com.ng/qhub/css/contact-form-7-includes-css-styles.css' type='text/css' media='all' />
   <link rel='stylesheet' id='font-awesome-4.7-css' href='http://harmani.com.ng/qhub/css/ecademy-toolkit-assets-css-font-awesome.min.css' type='text/css' media='all' />
   <link rel='stylesheet' id='woocommerce-layout-css' href='http://harmani.com.ng/qhub/css/woocommerce-assets-css-woocommerce-layout.css' type='text/css' media='all' />
   <link rel='stylesheet' id='woocommerce-smallscreen-css' href='http://harmani.com.ng/qhub/css/woocommerce-assets-css-woocommerce-smallscreen.css' type='text/css' media='only screen and (max-width: 768px)' />
   <link rel='stylesheet' id='woocommerce-general-css' href='http://harmani.com.ng/qhub/css/woocommerce-assets-css-woocommerce.css' type='text/css' media='all' />
   <style id='woocommerce-inline-inline-css' type='text/css'>
      .woocommerce form .form-row .required {
         visibility: visible;
      }
   </style>
   <link rel='stylesheet' id='wpems-countdown-css-css' href='http://harmani.com.ng/qhub/css/wp-events-manager-inc-libraries-countdown-css-jquery.countdown.css' type='text/css' media='all' />
   <link rel='stylesheet' id='wpems-magnific-popup-css-css' href='http://harmani.com.ng/qhub/css/wp-events-manager-inc-libraries-magnific-popup-css-magnific-popup.css' type='text/css' media='all' />
   <link rel='stylesheet' id='ecademy-style-css' href='http://harmani.com.ng/qhub/css/ecademy-style.css' type='text/css' media='all' />
   <link rel='stylesheet' id='vendor-css' href='http://harmani.com.ng/qhub/css/ecademy-assets-css-vendor.min.css' type='text/css' media='all' />
   <link rel='stylesheet' id='ecademy-woocommerce-css' href='http://harmani.com.ng/qhub/css/ecademy-assets-css-woocommerce.css' type='text/css' media='all' />
   <link rel='stylesheet' id='ecademy-main-style-css' href="{{asset('assets/admin/css/css/ecademy-assets-css-style.css')}}" type='text/css' media='all' />
   <style id='ecademy-main-style-inline-css' type='text/css'>
      .default-btn,
      .ecademy-nav .navbar .navbar-nav .nav-item.megamenu .dropdown-menu .single-category-widget:hover .icon,
      .ecademy-nav .navbar .others-option .cart-btn a span,
      .others-option-for-responsive .dot-menu:hover .inner .circle,
      .others-option-for-responsive .option-inner .others-option .cart-btn a span,
      .ecademy-responsive-nav .ecademy-responsive-menu.mean-container .navbar-nav .nav-item.megamenu .dropdown-menu .single-category-widget:hover .icon,
      .ecademy-responsive-nav .ecademy-responsive-menu.mean-container .others-option .cart-btn a span,
      .banner-wrapper-content form button,
      .home-banner-area,
      .about-video-box .video-btn,
      .single-courses-box .courses-image .price,
      .single-courses-item-box .courses-image .price,
      .courses-slides.owl-theme .owl-dots .owl-dot:hover span::before,
      .courses-slides.owl-theme .owl-dots .owl-dot.active span::before,
      .courses-slides.owl-theme .owl-nav [class*=owl-]:hover,
      .shorting-menu.shorting-menu-style-two .filter::before,
      .load-more-btn .load-more:hover,
      .courses-details-desc .nav .nav-item .nav-link::before,
      .courses-details-info .image .content i,
      .courses-details-info .courses-share .share-info .social-link li a:hover,
      .courses-details-desc-style-two .courses-author .author-profile-header,
      .courses-sidebar-information .courses-share .share-info .social-link li a:hover,
      .single-advisor-box .advisor-content .social-link li a:hover,
      .advisor-slides.owl-theme .owl-dots .owl-dot:hover span::before,
      .advisor-slides.owl-theme .owl-dots .owl-dot.active span::before,
      .single-advisor-item .advisor-image .social-link li a:hover,
      .advisor-slides-two.owl-theme .owl-dots .owl-dot:hover span::before,
      .advisor-slides-two.owl-theme .owl-dots .owl-dot.active span::before,
      .start-with-success-box .content .link-btn:hover,
      .single-feedback-item::after,
      .feedback-slides.owl-theme .owl-dots .owl-dot:hover span::before,
      .feedback-slides.owl-theme .owl-dots .owl-dot.active span::before,
      .testimonials-slides.owl-theme .owl-dots .owl-dot:hover span::before,
      .testimonials-slides.owl-theme .owl-dots .owl-dot.active span::before,
      .feedback-slides-two.owl-theme .owl-dots .owl-dot:hover span::before,
      .feedback-slides-two.owl-theme .owl-dots .owl-dot.active span::before,
      .profile-box .content .social-link li a:hover,
      .profile-courses-quizzes .nav .nav-item .nav-link::before,
      .profile-courses-quizzes .tab-content .nav .nav-item .nav-link:hover,
      .profile-courses-quizzes .tab-content .nav .nav-item .nav-link.active,
      .video-box .video-btn,
      .events-details-image #timer .countdown-section::before,
      .events-details-info .events-share .share-info .social-link li a:hover,
      .blog-slides.owl-theme .owl-dots .owl-dot:hover span::before,
      .blog-slides.owl-theme .owl-dots .owl-dot.active span::before,
      .blog-slides.owl-theme .owl-nav [class*=owl-]:hover,
      .blog-details .article-image-slides.owl-theme .owl-nav [class*=owl-]:hover,
      .blog-details .article-footer .article-share .social li a,
      .blog-details .article-author .author-profile-header,
      blockquote::after,
      .blockquote::after,
      .prev-link-wrapper .image-prev::after,
      .next-link-wrapper .image-next::after,
      .become-instructor-partner-content.bg-color,
      .teacher-register-box,
      .apply-instructor-content .nav .nav-item .nav-link::before,
      .single-products-box .products-image .products-button ul li a .tooltip-label,
      .single-products-box .products-image .products-button ul li a .tooltip-label::before,
      .single-products-box .products-image .products-button ul li a:hover,
      .membership-levels-table .table thead th,
      .membership-levels-table .table tbody tr td .select-btn:hover,
      .pagination-area .page-numbers:hover,
      .pagination-area .page-numbers.current,
      .faq-accordion-tab .tabs li a:hover,
      .faq-accordion-tab .tabs li.current a,
      .login-form form .lost-your-password-wrap a::after,
      .login-form form button,
      .register-form form button,
      .contact-info ul li:hover .icon,
      .contact-form,
      .single-footer-widget .social-link li a:hover,
      .go-top:hover,
      .wp-block-search .wp-block-search__button,
      .wp-block-tag-cloud a:hover,
      .wp-block-tag-cloud a:focus,
      .page-links .post-page-numbers:hover,
      .post-password-form input[type="submit"],
      .comment-navigation .nav-links .nav-previous a:hover,
      .comment-navigation .nav-links .nav-next a:hover,
      .footer-area .single-footer-widget ul li::before,
      .footer-area .tagcloud a:hover,
      .sidebar .widget .widget-title::before,
      .sidebar .widget_search form button:hover,
      .sidebar .widget_search form button:focus,
      .sidebar .tagcloud a:hover,
      .comments-area .comment-body .reply a:hover,
      #comments .comment-list .comment-body .reply a:hover,
      lp-profile-content button,
      #course-item-content-header .form-button.lp-button-back button,
      .login-content .login-form form button,
      .sidebar .tagcloud a:hover,
      .footer-area .widget_search form button,
      body.single-lp_course.course-item-popup .course-item-nav a:hover,
      .learnpress .become-teacher-form button,
      .learnpress #learn-press-checkout-login button,
      .learnpress #learn-press-user-profile button,
      .no-results form button,
      .single-course-sidebar .widget ul li::before,
      .single-course-sidebar .widget_lp-widget-popular-courses .widget-footer a:hover::before,
      .single-course-sidebar .widget_lp-widget-featured-courses .widget-footer a:hover::before,
      .single-course-sidebar .widget_lp-widget-recent-courses .widget-footer a:hover::before,
      .sidebar .widget_lp-widget-popular-courses .widget-footer a:hover::before,
      .sidebar .widget_lp-widget-featured-courses .widget-footer a:hover::before,
      .sidebar .widget_lp-widget-recent-courses .widget-footer a:hover::before,
      .wp-block-button__link,
      .single-language-courses-box:hover .default-btn,
      .single-language-courses-box .default-btn span,
      .feedback-slides-style-two.feedback-slides.owl-theme::before,
      .information-content .apply-details li .icon,
      .products_details div.product .woocommerce-tabs ul#tabs .nav-item .nav-link::before,
      .newsletter-modal .newsletter-modal-content .modal-inner-content form button,
      .free-trial-form form button,
      button#bbp_reply_submit,
      .bg-fe4a55,
      .experience-content .features-list li:hover i,
      .single-pricing-box .default-btn span,
      .experience-image .title,
      .experience-image .video-btn:hover,
      .experience-image::before,
      #fep-menu .fep-button,
      .fep-button,
      .fep-button-active,
      #event-lightbox .event_auth_button,
      .event-auth-form input#wp-submit,
      .about-content .about-list li span:hover i,
      .feedback-slides-three.owl-theme .owl-nav [class*=owl-]:hover::before,
      .courses-slides-two.owl-theme .owl-nav [class*=owl-]:hover::before,
      .owl-item:nth-child(2) .single-kindergarten-courses-box,
      .services-slides.owl-theme .owl-nav [class*=owl-]:hover::before,
      .about-content .about-list li span:hover i,
      .default-btn-style-two::before,
      .experience-img::before,
      .single-pricing-box .default-btn span,
      .tutor-form-group.tutor-reg-form-btn-wrap .tutor-button,
      .tutor-login-form-wrap input[type="submit"],
      .pmpro_login_wrap #content-item-quiz button,
      input[type=submit],
      #popup_ok {
         background-color: #018426;
      }

      .ecademy-grid-sorting .ordering .nice-select .list .option:hover,
      .ecademy-grid-sorting .ordering .nice-select .list .option.selected:hover,
      .page-links .current,
      .wp-block-file .wp-block-file__button,
      .learnpress-page .lp-button,
      #learn-press-course-curriculum.courses-curriculum ul li.current a,
      .elementor-1114 .elementor-element.elementor-element-59893a7:not(.elementor-motion-effects-element-type-background),
      .download-syllabus-form form .form-group .nice-select .list .option.selected:hover,
      .download-syllabus-form form .form-group .nice-select .list .option:hover,
      .fep-button:hover,
      .learn-press-pmpro-buy-membership .purchase-button,
      .single-courses-box .courses-image .price,
      .single-courses-box .courses-image .free {
         background-color: #018426 !important;
      }

      .comments-area .form-submit input,
      .coming-soon-content form .form-group .label-title::before,
      .login-form form .remember-me-wrap [type="checkbox"]:checked+label:after,
      .login-form form .remember-me-wrap [type="checkbox"]:not(:checked)+label:after,
      .footer-area .widget_search form button,
      .sidebar .widget .widget-title::after,
      .sidebar .widget ul li::before,
      .sidebar .widget_search form button,
      learn-press-pagination .page-numbers>li a:hover,
      .learn-press-pagination .page-numbers>li a.current,
      .learn-press-pagination .page-numbers>li a:hover,
      .learn-press [type=button],
      .learn-press [type=reset],
      .learn-press [type=submit],
      .learn-press button,
      body.single-lp_course.course-item-popup .curriculum-sections .section .section-content .course-item.current,
      .learnpress .become-teacher-form .learn-press-message:before,
      .learnpress #learn-press-checkout-login .learn-press-message:before,
      #user-submit,
      #bbp_search_submit,
      .owl-item:nth-child(2) .single-kindergarten-courses-box .price,
      .tutor-button.tutor-success,
      .pmpro-has-access a.pmpro_btn,
      .pmpro-has-access input.pmpro_btn,
      .learnpress #learn-press-checkout-register button {
         background: #018426;
      }

      .learn-press-message:before,
      .guest-and-class a {
         background: #018426 !important;
      }

      a:hover,
      .section-title .sub-title,
      .ecademy-nav .navbar .search-box button,
      .ecademy-nav .navbar .navbar-nav .nav-item a:hover,
      .ecademy-nav .navbar .navbar-nav .nav-item a:focus,
      .ecademy-nav .navbar .navbar-nav .nav-item a.active,
      .ecademy-nav .navbar .navbar-nav .nav-item:hover a,
      .ecademy-nav .navbar .navbar-nav .nav-item.active a,
      .ecademy-nav .navbar .navbar-nav .nav-item .dropdown-menu li a:hover,
      .ecademy-nav .navbar .navbar-nav .nav-item .dropdown-menu li a:focus,
      .ecademy-nav .navbar .navbar-nav .nav-item .dropdown-menu li a.active,
      .ecademy-nav .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li a:hover,
      .ecademy-nav .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li a:focus,
      .ecademy-nav .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li a.active,
      .ecademy-nav .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li a:hover,
      .ecademy-nav .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li a:focus,
      .ecademy-nav .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li a.active,
      .ecademy-nav .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li a:hover,
      .ecademy-nav .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li a:focus,
      .ecademy-nav .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li a.active,
      .ecademy-nav .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li a:hover,
      .ecademy-nav .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li a:focus,
      .ecademy-nav .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li a.active,
      .ecademy-nav .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li a:hover,
      .ecademy-nav .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li a:focus,
      .ecademy-nav .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li a.active,
      .ecademy-nav .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li a:hover,
      .ecademy-nav .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li a:focus,
      .ecademy-nav .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li a.active,
      .ecademy-nav .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li.active a,
      .ecademy-nav .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li.active a,
      .ecademy-nav .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li.active a,
      .ecademy-nav .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li.active a,
      .ecademy-nav .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li.active a,
      .ecademy-nav .navbar .navbar-nav .nav-item .dropdown-menu li.active a,
      .ecademy-nav .navbar .navbar-nav .nav-item.megamenu .dropdown-menu .megamenu-submenu li a:hover,
      .ecademy-nav .navbar .navbar-nav .nav-item.megamenu .dropdown-menu .megamenu-submenu li a.active,
      .ecademy-nav .navbar .navbar-nav .nav-item.megamenu .dropdown-menu .single-category-widget .sub-title,
      .ecademy-nav .navbar .others-option .cart-btn a:hover,
      .others-option-for-responsive .option-inner .search-box button,
      .others-option-for-responsive .option-inner .others-option .cart-btn a:hover,
      .ecademy-responsive-nav .ecademy-responsive-menu.mean-container .mean-nav ul li a.active,
      .ecademy-responsive-nav .ecademy-responsive-menu.mean-container .navbar-nav .nav-item.megamenu .dropdown-menu .megamenu-submenu li a:hover,
      .ecademy-responsive-nav .ecademy-responsive-menu.mean-container .navbar-nav .nav-item.megamenu .dropdown-menu .megamenu-submenu li a.active,
      .ecademy-responsive-nav .ecademy-responsive-menu.mean-container .navbar-nav .nav-item.megamenu .dropdown-menu .single-category-widget .sub-title,
      .ecademy-responsive-nav .ecademy-responsive-menu.mean-container .search-box button,
      .ecademy-responsive-nav .ecademy-responsive-menu.mean-container .others-option .cart-btn a:hover,
      .banner-wrapper-content form label,
      .banner-wrapper-content .popular-search-list li a:hover,
      .single-banner-box:hover .icon,
      .single-box-item .link-btn,
      .single-features-box .link-btn,
      .about-content .sub-title,
      .about-content .features-list li span i,
      .about-content-box .sub-title,
      .about-content-box .link-btn,
      .single-courses-box .courses-image .fav:hover,
      .single-courses-box .courses-content .course-author span a,
      .single-courses-box .courses-content .courses-box-footer li i,
      .single-courses-item .courses-content .fav:hover,
      .single-courses-item .courses-content .price,
      .single-courses-item .courses-content .courses-content-footer li i,
      .single-courses-item-box .courses-image .fav:hover,
      .single-courses-item-box .courses-content .course-author span,
      .courses-info p a,
      .shorting-menu .filter.active,
      .shorting-menu .filter:hover,
      .ecademy-grid-sorting .ordering .nice-select .list .option::before,
      .load-more-btn .load-more,
      .courses-details-desc .tab-content .courses-curriculum ul li a::before,
      .courses-details-desc .tab-content .courses-curriculum ul li a .courses-meta .duration,
      .courses-details-desc .tab-content .courses-curriculum ul li a:hover,
      .courses-details-info .info li span i,
      .courses-details-info .info li.price,
      .courses-details-info .courses-share .share-info span,
      .courses-details-header .courses-meta ul li span,
      .courses-details-header .courses-meta ul li a:hover,
      .courses-details-header .courses-meta ul li a:focus,
      .courses-details-desc-style-two .why-you-learn ul li span i,
      .courses-details-desc-style-two .courses-curriculum ul li a::before,
      .courses-details-desc-style-two .courses-curriculum ul li a .courses-meta .duration,
      .courses-details-desc-style-two .courses-curriculum ul li a:hover,
      .courses-sidebar-information .info li span i,
      .courses-sidebar-information .info li.price,
      .courses-sidebar-information .courses-share .share-info span,
      .slogan-content span,
      .single-advisor-box .advisor-content .sub-title,
      .single-advisor-item .advisor-content span,
      .start-with-success-box .content .link-btn,
      .start-with-success-box .content span,
      .single-funfacts-box h3,
      .single-funfacts-item h3,
      .single-funfacts h3,
      .feedback-content .sub-title,
      .feedback-content .feedback-info p a,
      .single-feedback-item .client-info .title h3,
      .single-testimonials-item h3,
      .single-feedback-box .client-info .title h3,
      .single-testimonials-box h3,
      .profile-box .content .sub-title,
      .profile-courses-quizzes .tab-content .table tbody tr td a:hover,
      .get-instant-courses-content .sub-title,
      .single-events-box .image .date,
      .single-events-box .content .location i,
      .events-details-header ul li i,
      .events-details-info .info li.price,
      .events-details-info .btn-box p a,
      .events-details-info .events-share .share-info span,
      .single-blog-post .post-content .category:hover,
      .single-blog-post .post-content .post-content-footer li i,
      .single-blog-post-item .post-content .category:hover,
      .single-blog-post-item .post-content .post-content-footer li .post-author span,
      .single-blog-post-item .post-content .post-content-footer li i,
      .blog-post-info p a,
      .single-blog-post-box .post-content .category:hover,
      .single-blog-post-box .post-content .post-content-footer li .post-author span,
      .single-blog-post-box .post-content .post-content-footer li i,
      .blog-details .article-content .entry-meta ul li span,
      .blog-details .article-content .features-list li i,
      .blog-details .article-footer .article-share .social li a:hover,
      .blog-details .article-footer .article-share .social li a:focus,
      .prev-link-wrapper a:hover .prev-link-info-wrapper,
      .next-link-wrapper a:hover .next-link-info-wrapper,
      .view-all-courses-content .sub-title,
      .teacher-register-box form .default-btn:hover,
      .premium-access-content .sub-title,
      .page-title-content ul li a:hover,
      .subscribe-content .sub-title,
      .single-products-box .products-content .add-to-cart:hover,
      .products-details-desc .price,
      .contact-info .sub-title,
      .contact-info ul li .icon,
      .contact-form form .default-btn:hover,
      .single-footer-widget .footer-links-list li a:hover,
      .single-footer-widget .footer-contact-info li a:hover,
      .footer-bottom-area p a,
      .footer-bottom-area ul li a:hover,
      .footer-area .calendar_wrap .wp-calendar-nav-prev a:hover,
      .footer-area .single-footer-widget ul li a:hover,
      body.single-lp_course.course-item-popup .curriculum-sections .section .section-content .course-item .section-item-link::before,
      body.single-lp_course.course-item-popup .curriculum-sections .section .section-content .course-item .course-item-meta .item-meta.course-item-status,
      .learnpress .become-teacher-form .message-info::before,
      .learnpress #learn-press-checkout-login #checkout-form-login .row a:hover,
      .learnpress #learn-press-user-profile .learn-press-form-login .row a:hover,
      .learnpress #learn-press-user-profile .learn-press-form-register .row a:hover,
      .learnpress .become-teacher-form .form-fields .form-field label span,
      .single-course-sidebar .widget_lp-widget-popular-courses .course-entry .course-detail a:hover,
      .single-course-sidebar .widget_lp-widget-popular-courses .course-entry .course-detail h3:hover,
      .single-course-sidebar .widget_lp-widget-featured-courses .course-entry .course-detail a:hover,
      .single-course-sidebar .widget_lp-widget-featured-courses .course-entry .course-detail h3:hover,
      .single-course-sidebar .widget_lp-widget-recent-courses .course-entry .course-detail a:hover,
      .single-course-sidebar .widget_lp-widget-recent-courses .course-entry .course-detail h3:hover,
      .sidebar .widget_lp-widget-popular-courses .course-entry .course-detail a:hover,
      .sidebar .widget_lp-widget-popular-courses .course-entry .course-detail h3:hover,
      .sidebar .widget_lp-widget-featured-courses .course-entry .course-detail a:hover,
      .sidebar .widget_lp-widget-featured-courses .course-entry .course-detail h3:hover,
      .sidebar .widget_lp-widget-recent-courses .course-entry .course-detail a:hover,
      .sidebar .widget_lp-widget-recent-courses .course-entry .course-detail h3:hover,
      .lp-user-profile #learn-press-profile-content .learn-press-subtab-content .lp-sub-menu li span,
      #learn-press-course-curriculum.courses-curriculum ul li a::before,
      .sidebar .calendar_wrap table #today a,
      .footer-area .calendar_wrap table #today,
      .footer-area .single-footer-widget .wp-calendar-nav .wp-calendar-nav-next a:hover,
      .sidebar .widget_rss ul li .rsswidget:hover,
      .sidebar .calendar_wrap table th a,
      .sidebar .calendar_wrap table #today,
      .wp-block-calendar a,
      .wp-block-image figcaption a,
      blockquote a,
      table td a,
      dd a,
      p a,
      .page-main-content .wp-caption .wp-caption-text a,
      .blog-details .wp-caption .wp-caption-text a,
      .blog-details table a,
      .blog-details .blog-details-content ul li a,
      .sticky .single-blog-post .post-content .post-content-footer li a:hover,
      .sticky .single-blog-post .post-content h3 a:hover,
      .blog-details .blog-details-content .entry-meta li a:hover,
      .blog-details .blog-details-content ol li a,
      .wp-block-file a,
      .blog-details .blog-details-content ol li a,
      #comments .comment-metadata a:hover,
      .page-main-content table a,
      .products_details div.product .woocommerce-product-rating a.woocommerce-review-link:hover,
      .products_details div.product .product_meta span.sku_wrapper span,
      .single-language-courses-box .default-btn,
      .information-content .sub-title,
      .bbpress-wrapper a,
      #bbpress-forums div.bbp-topic-author a.bbp-author-name,
      #bbpress-forums div.bbp-reply-author a.bbp-author-name,
      #bbpress-forums #bbp-single-user-details #bbp-user-navigation a:hover,
      a.bbp-register-link,
      a.bbp-lostpass-link,
      .right-sidebar ul li a:hover,
      .bbp-author-name:hover,
      .download-syllabus-form form span.wpcf7-list-item-label a:hover,
      .preloader .loader .sbl-half-circle-spin,
      .boxes-info p a,
      .overview-box .overview-content .sub-title,
      .single-training-box .link-btn,
      .experience-content .sub-title,
      .download-syllabus-form form .form-group .nice-select .list .option::before,
      #fep-content a,
      .fep-error a,
      .about-content .about-list li span:hover i,
      .single-kindergarten-services-box .content .icon,
      .single-kindergarten-courses-box .courses-image .fav:hover,
      .single-blog-item .post-content .category:hover,
      .events-box .content .location i,
      .col-lg-3:nth-child(2) .single-selected-ages-box h3,
      .col-lg-3:nth-child(2) .single-selected-ages-box .ages-number,
      .tutor-container .tutor-course-loop-title h2 a:hover,
      .lp-pmpro-membership-list .item-td.item-desc,
      .lp-pmpro-membership-list .item-td.item-check,
      .lp-pmpro-membership-list .item-td a:hover,
      #pmpro_account-profile a,
      a.ld-enroll-btn {
         color: #018426;
      }

      .single-footer-widget .footer-contact-info li a:hover,
      .footer-area .single-footer-widget ul li a:hover,
      span.bbp-admin-links a {
         color: #018426 !important;
      }

      .form-control:focus,
      .ecademy-nav .navbar .search-box .input-search:focus,
      .others-option-for-responsive .option-inner .search-box .input-search:focus,
      .ecademy-responsive-nav .ecademy-responsive-menu.mean-container .search-box .input-search:focus,
      .banner-wrapper-content form .input-search:focus,
      .courses-slides.owl-theme .owl-dots .owl-dot:hover span,
      .courses-slides.owl-theme .owl-dots .owl-dot.active span,
      .ecademy-grid-sorting .ordering .nice-select:hover,
      .advisor-slides.owl-theme .owl-dots .owl-dot:hover span,
      .advisor-slides.owl-theme .owl-dots .owl-dot.active span,
      .advisor-slides-two.owl-theme .owl-dots .owl-dot:hover span,
      .advisor-slides-two.owl-theme .owl-dots .owl-dot.active span,
      .funfacts-list .row .col-lg-6:nth-child(2) .single-funfacts-box,
      .single-funfacts-box:hover,
      .feedback-slides.owl-theme .owl-dots .owl-dot:hover span,
      .feedback-slides.owl-theme .owl-dots .owl-dot.active span,
      .testimonials-slides.owl-theme .owl-dots .owl-dot:hover span,
      .testimonials-slides.owl-theme .owl-dots .owl-dot.active span,
      .feedback-slides-two.owl-theme .owl-dots .owl-dot:hover span,
      .feedback-slides-two.owl-theme .owl-dots .owl-dot.active span,
      .blog-slides.owl-theme .owl-dots .owl-dot:hover span,
      .blog-slides.owl-theme .owl-dots .owl-dot.active span,
      .blog-details .article-image-slides.owl-theme .owl-nav [class*=owl-]:hover,
      .login-form form .remember-me-wrap [type="checkbox"]:hover+label:before,
      .login-form form .remember-me-wrap [type="checkbox"]:checked+label:before,
      .ecademy-nav .navbar .navbar-nav .nav-item .dropdown-menu,
      .about-video-box .video-btn::after,
      .about-video-box .video-btn::before,
      .video-box .video-btn::after,
      .video-box .video-btn::before,
      .blog-details .article-footer .article-share .social li a,
      .products-details-desc .products-share .social li a,
      .user-actions,
      .is-style-outline .wp-block-button__link,
      #comments .comment-list .comment-body .reply a:hover,
      .products_details div.product .woocommerce-product-rating a.woocommerce-review-link:hover,
      .single-language-courses-box .default-btn,
      .services-slides.owl-theme .owl-nav [class*=owl-],
      .courses-slides-two.owl-theme .owl-nav [class*=owl-],
      .default-btn-style-two,
      .tutor-form-group.tutor-reg-form-btn-wrap .tutor-button,
      .tutor-login-form-wrap input[type="submit"] {
         border-color: #018426;
      }

      .navbar-area {
         background-color: #FFFFFF !important;
      }

      .footer-area .single-footer-widget p,
      .footer-area .single-footer-widget ul li,
      .single-footer-widget .footer-contact-info li a,
      .footer-area .single-footer-widget ul li a {
         color: #e4e4e4 !important;
      }

      .footer-area {
         background-color: #71BF45 !important;
      }

      .single-footer-widget .social-link li .d-block:hover {
         color: var(--whiteColor) !important;
      }

      .single-products .sale-btn,
      .single-products .products-image ul li a:hover,
      .productsQuickView .modal-dialog .modal-content .products-content form button,
      .productsQuickView .modal-dialog .modal-content button.close:hover,
      .productsQuickView .modal-dialog .modal-content button.close:hover,
      .woocommerce ul.products li.product:hover .add-to-cart-btn,
      .shop-sidebar .widget_product_search form button,
      .shop-sidebar a.button,
      .shop-sidebar .woocommerce-widget-layered-nav-dropdown__submit,
      .shop-sidebar .woocommerce button.button,
      .woocommerce .widget_price_filter .ui-slider .ui-slider-range,
      .woocommerce .widget_price_filter .ui-slider .ui-slider-handle,
      .woocommerce #respond input#submit.alt,
      .woocommerce a.button.alt,
      .woocommerce button.button.alt,
      .woocommerce input.button.alt,
      .products_details div.product .woocommerce-tabs .panel #respond input#submit,
      .products_details div.product .product_title::before,
      .woocommerce #respond input#submit.alt.disabled,
      .woocommerce #respond input#submit.alt.disabled:hover,
      .woocommerce #respond input#submit.alt:disabled,
      .woocommerce #respond input#submit.alt:disabled:hover,
      .woocommerce #respond input#submit.alt:disabled[disabled],
      .woocommerce #respond input#submit.alt:disabled[disabled]:hover,
      .woocommerce a.button.alt.disabled,
      .woocommerce a.button.alt.disabled:hover,
      .woocommerce a.button.alt:disabled,
      .woocommerce a.button.alt:disabled:hover,
      .woocommerce a.button.alt:disabled[disabled],
      .woocommerce a.button.alt:disabled[disabled]:hover,
      .woocommerce button.button.alt.disabled,
      .woocommerce button.button.alt.disabled:hover,
      .woocommerce button.button.alt:disabled,
      .woocommerce button.button.alt:disabled:hover,
      .woocommerce button.button.alt:disabled[disabled],
      .woocommerce button.button.alt:disabled[disabled]:hover,
      .woocommerce input.button.alt.disabled,
      .woocommerce input.button.alt.disabled:hover,
      .woocommerce input.button.alt:disabled,
      .woocommerce input.button.alt:disabled:hover,
      .woocommerce input.button.alt:disabled[disabled],
      .woocommerce input.button.alt:disabled[disabled]:hover,
      .btn-primary:hover,
      .woocommerce #respond input#submit,
      .woocommerce a.button,
      .woocommerce button.button,
      .woocommerce input.button,
      .woocommerce .woocommerce-MyAccount-navigation ul .is-active a,
      .woocommerce .woocommerce-MyAccount-navigation ul li a:hover,
      .products_details div.product span.sale-btn,
      .shop-sidebar .tagcloud a:focus,
      .shop-sidebar .widget_search form button,
      .shop-sidebar .widget .widget-title::before,
      .shop-sidebar .widget ul li::before,
      .shop-sidebar .tagcloud a:hover,
      .shop-sidebar .tagcloud a:focus {
         background-color: #018426;
      }

      .btn-primary,
      .btn-primary.disabled,
      .btn-primary:disabled {
         background-color: #018426;
      }

      .productsQuickView .modal-dialog .modal-content .products-content .product-meta span a:hover,
      .woocommerce ul.products li.product h3 a:hover,
      .woocommerce ul.products li.product .add-to-cart-btn,
      .woocommerce div.product .woocommerce-tabs ul.tabs li.active a,
      .products_details div.product .woocommerce-tabs ul.tabs li a:hover,
      .products_details div.product .woocommerce-tabs ul.tabs li.active,
      .products_details div.product .woocommerce-tabs ul.tabs li.active a:hover,
      .products_details div.product .product_meta span.posted_in a:hover,
      .products_details div.product .product_meta span.tagged_as a:hover,
      .products_details div.product span.price,
      .cart-table table tbody tr td.product-name a,
      .woocommerce-message::before,
      .woocommerce-info::before,
      .shop-sidebar .widget ul li a:hover,
      .shop-sidebar .widget_rss .widget-title .rsswidget {
         color: #018426;
      }

      .woocommerce-info,
      .woocommerce-message {
         border-top-color: #018426;
      }

      .shop-sidebar .widget_shopping_cart .cart_list li a:hover,
      .shop-sidebar ul li a:hover {
         color: #018426 !important;
      }

      .woocommerce ul.products li.product:hover .add-to-cart-btn,
      .form-control:focus,
      .woocommerce .form-control:focus,
      .shop-sidebar .tagcloud a:hover,
      .shop-sidebar .tagcloud a:focus,
      .tutor-button.tutor-success {
         border-color: #018426;
      }

      .navbar-area.no-sticky.is-sticky {
         display: none !important;
      }

      .courses-curriculum .scroll-wrapper>.scroll-content {
         overflow: inherit !important;
      }

      .courses-curriculum .scroll-wrapper {
         overflow: initial !important;
      }

      :root {
         --mainColor: #018426;
         --SparklingAppleColor: #72AE44;
      }

      .single-blog-post .post-image a img {
         width: 100%;
      }

      .pmpro-has-access .entry-content ul {
         list-style-type: none;
      }

      .lp-profile-content button,
      #course-item-content-header .form-button.lp-button-back button {
         background: #fe4a55;
      }

      .lp-profile-content button:hover,
      .lp-profile-content button:focus,
      #course-item-content-header .form-button.lp-button-back button:hover,
      #course-item-content-header .form-button.lp-button-back button:focus {
         color: #ffffff !important;
      }

      @media only screen and (max-width: 767px) {
         #learn-press-profile .lp-content-area {
            display: unset !important;
         }
      }

      .courses-details-info .btn-box form {
         display: block !important;
      }

      .ecademy-nav .navbar .navbar-nav .nav-item:hover .dropdown-menu {
         z-index: 999999 !important;
      }

      .ecademy-nav .navbar .navbar-nav .nav-item .dropdown-menu {
         z-index: 999999 !important;
      }
   </style>
   <link rel='stylesheet' id='ecademy-responsive-css' href='http://harmani.com.ng/qhub/css/ecademy-assets-css-responsive.css' type='text/css' media='all' />
   <link rel='stylesheet' id='ecademy-fonts-css' href='//fonts.googleapis.com/css2?family=Nunito%3Aital%2Cwght%400%2C300%3B0%2C400%3B0%2C600%3B0%2C700%3B0%2C800%3B0%2C900%3B1%2C600%3B1%2C700%3B1%2C800%3B1%2C900&#038;display=swap&#038;ver=1.0.0' type='text/css' media='screen' />
   <link rel='stylesheet' id='elementor-icons-css' href='http://harmani.com.ng/qhub/css/elementor-assets-lib-eicons-css-elementor-icons.min.css' type='text/css' media='all' />
   <link rel='stylesheet' id='elementor-frontend-css' href='http://harmani.com.ng/qhub/css/elementor-assets-css-frontend.min.css' type='text/css' media='all' />
   <link rel='stylesheet' id='swiper-css' href='http://harmani.com.ng/qhub/css/elementor-assets-lib-swiper-css-swiper.min.css' type='text/css' media='all' />
   <link rel='stylesheet' id='elementor-post-17-css' href='http://harmani.com.ng/qhub/css/elementor-css-post-17.css' type='text/css' media='all' />
   <link rel='stylesheet' id='elementor-pro-css' href='http://harmani.com.ng/qhub/css/elementor-pro-assets-css-frontend.min.css' type='text/css' media='all' />
   <link rel='stylesheet' id='elementor-post-30-css' href='http://harmani.com.ng/qhub/css/elementor-css-post-30.css' type='text/css' media='all' />
   <link rel="preload" as="style" href="https://fonts.googleapis.com/css?family=Poppins&#038;display=swap&#038;ver=1692179290" />
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins&#038;display=swap&#038;ver=1692179290" media="print" onload="this.media='all'">
   <noscript>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins&#038;display=swap&#038;ver=1692179290" />
   </noscript>
   <link rel='stylesheet' id='learnpress-widgets-css' href='http://harmani.com.ng/qhub/css/learnpress-assets-css-widgets.min.css' type='text/css' media='all' />
   <link rel='stylesheet' id='google-fonts-1-css' href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CPoppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=auto&#038;ver=6.3' type='text/css' media='all' />
   <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
   <script>
      /* <![CDATA[ */
      var rcewpp = {
         "ajax_url": "https://hub.rightclick-academy.com/wp-admin/admin-ajax.php",
         "nonce": "7d1d5ddd34",
         "home_url": "https://hub.rightclick-academy.com/",
         "settings_icon": 'https://hub.rightclick-academy.com/wp-content/plugins/export-wp-page-to-static-html/admin/images/settings.png',
         "settings_hover_icon": 'https://hub.rightclick-academy.com/wp-content/plugins/export-wp-page-to-static-html/admin/images/settings_hover.png'
      };
      /* ]]\> */
   </script>
   <script type='text/javascript' src='http://harmani.com.ng/qhub/js/jquery-jquery.min.js' id='jquery-core-js'></script>
   <script type='text/javascript' src='http://harmani.com.ng/qhub/js/jquery-jquery-migrate.min.js' id='jquery-migrate-js'></script>
   <script type='text/javascript' src='http://harmani.com.ng/qhub/js/ecademy-assets-js-vendor.min.js' id='vendor-js'></script>
   <script type='text/javascript' src='http://harmani.com.ng/qhub/js/ecademy-assets-js-cursor.min.js' id='ecademy-cursor-js'></script>
   <script type='text/javascript' src='http://harmani.com.ng/qhub/js/ecademy-assets-js-main.js' id='ecademy-main-js'></script>
   <script type='text/javascript' src='http://harmani.com.ng/qhub/js/ecademy-toolkit-inc-content-drip-assets-js-frontend.js' id='lpcd-frontend-js'></script>
   <link rel="https://api.w.org/" href="https://hub.rightclick-academy.com/wp-json/" />
   <link rel="alternate" type="application/json" href="https://hub.rightclick-academy.com/wp-json/wp/v2/pages/30" />
   <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://hub.rightclick-academy.com/xmlrpc.php?rsd" />
   <meta name="generator" content="WordPress 6.3" />
   <meta name="generator" content="WooCommerce 7.9.0" />
   <link rel="canonical" href="https://hub.rightclick-academy.com/" />
   <link rel='shortlink' href='https://hub.rightclick-academy.com/' />
   <link rel="alternate" type="application/json+oembed" href="https://hub.rightclick-academy.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fhub.rightclick-academy.com%2F" />
   <link rel="alternate" type="text/xml+oembed" href="https://hub.rightclick-academy.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fhub.rightclick-academy.com%2F&#038;format=xml" />
   <meta name="generator" content="Redux 4.3.20" />
   <script id="lp-list-instructors-data">
      const lpInstructorsUrl = 'https://hub.rightclick-academy.com/instructors/';
      const urlListInstructorsAPI = 'https://hub.rightclick-academy.com/wp-json/lp/v1/instructors';
      let lpSkeletonParam = '[]';
   </script>
   <style id="learn-press-custom-css">
      :root {
         --lp-cotainer-max-with: 1290px;
         --lp-cotainer-padding: 2rem;
         --lp-primary-color: #fe4a55;
         --lp-secondary-color: #442e66;
      }
   </style>
   <noscript>
      <style>
         .woocommerce-product-gallery {
            opacity: 1 !important;
         }
      </style>
   </noscript>
   <meta name="generator" content="Elementor 3.15.2; features: e_dom_optimization, e_optimized_assets_loading, additional_custom_breakpoints; settings: css_print_method-external, google_font-enabled, font_display-auto">
   <link rel="icon" href="http://harmani.com.ng/qhub/images/cropped-Q-Hub-1-32x32.png" sizes="32x32" />
   <link rel="icon" href="http://harmani.com.ng/qhub/images/cropped-Q-Hub-1-192x192.png" sizes="192x192" />
   <link rel="apple-touch-icon" href="http://harmani.com.ng/qhub/images/cropped-Q-Hub-1-180x180.png" />
   <meta name="msapplication-TileImage" content="https://hub.rightclick-academy.com/wp-content/uploads/2023/08/cropped-Q-Hub-1-270x270.png" />
   <style type="text/css" id="wp-custom-css">
      .e--pointer-double-line .elementor-item:after,
      .e--pointer-underline .elementor-item:after {
         content: "";
         bottom: 0;
         background-color: white !important;
      }

      .main-banner-content .default-btn {
         margin-top: 10px;
         border-radius: 0px !important;
      }

      .single-courses-box .courses-content h3 a {
         display: inline-block;
         text-decoration: none;
         font-family: poppins;
         font-weight: 500;
      }

      .single-courses-box .courses-content .course-author {
         margin-bottom: 15px;
         display: none !important;
      }

      .feedback-content h2 {
         margin-bottom: 0;
         font-size: 40px;
         font-family: poppins;
         font-weight: 500;
      }

      element {}

      .single-feedback-item p {
         color: #606060;
         line-height: 1.8;
         font-size: var(--fontSize);
         font-weight: 200;
         margin-top: 0;
         margin-bottom: 0;
      }

      .banner-wrapper-text .default-btn {
         margin-top: 10px;
         border-radius: 0px !important;
      }

      .single-courses-item-box .courses-content h3 a {
         display: inline-block;
         font-family: poppins;
         font-size: ;
         font-weight: 500;
      }

      .single-feedback-box p {
         color: #606060;
         line-height: 1.8;
         font-size: var(--fontSize);
         font-weight: 200;
         margin-top: 0;
         margin-bottom: 0;
      }

      .unibanner img {
         border-radius: 100% !important;
      }

      .banner-wrapper-content form .input-search {
         display: block;
         width: 100%;
         height: 48px;
         border: 1px solid #eee8e2;
         border-radius: 0px;
         transition: var(--transition);
         color: var(--blackColor);
         font-size: var(--fontSize);
         font-weight: 400;
         padding-left: 50px;
         padding-top: 1px;
         padding-bottom: 0;
         padding-right: 0;
      }

      button,
      input[type="submit"],
      #popup_ok {
         padding: 5px 25px;
         text-transform: capitalize;
         font-size: 13px;
         font-weight: 700;
         line-height: 30px;
         border: 0;
         border-radius: 0px !important;
      }

      .footer-area .single-footer-widget p,
      .footer-area .single-footer-widget ul li,
      .single-footer-widget .footer-contact-info li a,
      .footer-area .single-footer-widget ul li a {
         color: #e4e4e4 !important;
         font-size: 16px;
      }

      .footer-area .single-footer-widget h3 {
         margin-bottom: 25px;
         position: relative;
         padding-bottom: 10px;
         border-bottom: 1px solid #192129;
         color: var(--whiteColor);
         font-size: 22px;
         font-family: poppins;
         font-weight: 400;
      }

      .single-courses-item .courses-content h3 a {
         display: inline-block;
         font-family: poppins;
         font-weight: 400;
      }

      .single-funfacts-item h3 span {
         font-size: 48px;
         font-family: poppins !important;
         font-weight: 600;
      }

      .learn-press-form-login button[type="submit"],
      .learn-press-form-register button[type="submit"] {
         width: 100%;
         height: 50px;
         border-radius: 3px;
         outline: 0;
         color: #fff;
         background: green;
         box-shadow: none;
         font-size: 1rem;
         line-height: 1;
         vertical-align: middle;
         text-decoration: none;
      }

      .qhubmenu .elementor-nav-menu--layout-horizontal .elementor-nav-menu>li:last-child {
         display: flex;
         background-color: white;
         border: 2px solid green;
         margin-left: 10px;
         font-size: 18px;
         color: green !important;
      }

      .page-title-content h2 {
         text-align: center;
         max-width: 800px;
         margin-bottom: 10px;
         margin-left: auto;
         margin-right: auto;
         font-size: 36px;
         font-weight: 800;
         font-family: poppins;
      }
   </style>
   <style id="ecademy_opt-dynamic-css" title="dynamic-css" class="redux-options-output">
      .ecademy-nav .navbar .navbar-brand {
         width: 140px;
      }

      .ecademy-responsive-menu>.logo>a>img {
         width: 130px;
      }

      .ecademy-nav .navbar .navbar-nav .nav-item a {
         font-display: swap;
      }

      .mean-container .mean-nav ul li a,
      .mean-container .mean-nav ul li li a {
         font-display: swap;
      }

      .page-title-content h2 {
         font-display: swap;
      }

      .page-title-content ul li,
      .learn-press-breadcrumb,
      .woocommerce-breadcrumb {
         font-display: swap;
      }

      .ecademy-nav .navbar .navbar-nav .nav-item a,
      .ecademy-nav .navbar .navbar-nav .nav-item .dropdown-menu li a,
      .ecademy-nav .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li a,
      .mean-container .mean-nav ul li a,
      .mean-container .mean-nav ul li li a {
         color: #221638;
      }

      .footer-area .single-footer-widget p,
      .footer-area .single-footer-widget ul li,
      .single-footer-widget .footer-contact-info li a {
         color: #e4e4e4;
      }

      body {
         font-family: Poppins, Arial, Helvetica, sans-serif;
         font-display: swap;
      }
   </style>
</head>







<footer class="footer-area">
   <div class="container">
      <div class="row">
         <div class="col-lg-4 col-md-4">
            <div class="single-footer-widget">
               <a class="logo" href="#"> <img src="{{asset('store/1/register/circle_logo.png')}}" alt="Q-Hub" style="width: 150px !important;"> </a>
               <p style="margin-top: 20px;">Valued Seed Academy is a Learning Management System (LMS) committed to unleashing the complete potential of every learner.</p>
            </div>
         </div>
         <div class="single-footer-widget col-lg-4 col-md-4 widget_nav_menu">
            <h3>Resources</h3>
            <div class="menu-footer-resources-container">
               <ul id="menu-footer-resources" class="menu">
                  <li id="menu-item-40" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-40"><a href="https://hub.rightclick-academy.com/become-a-teacher/">Become A Teacher</a></li>
                  <li id="menu-item-41" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-41"><a href="https://hub.rightclick-academy.com/profile/">Instructor/Student Profile</a></li>
                  <li id="menu-item-42" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-42"><a href="https://hub.rightclick-academy.com/courses/">Courses</a></li>
                  <li id="menu-item-43" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-43"><a href="https://hub.rightclick-academy.com/lp-checkout/">LP Checkout</a></li>
                  <li id="menu-item-44" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-44"><a href="https://hub.rightclick-academy.com/terms-conditions/">Terms &#038; Conditions</a></li>
               </ul>
            </div>
         </div>
         <div class="single-footer-widget col-lg-4 col-md-4 widget_ecademy_contact_info">
            <h3>Contact Information</h3>
            <ul class="footer-contact-info">
               <li> <i class="bx bx-map"></i> <a href="#" target="_blank">20 Fatai Idowu Arobieke Street, Lekki Phase 1, Lagos State</a> </li>
               <li> <i class="bx bx-phone-call"></i> <a href="#">+1-485-456-0102</a> </li>
               <li> <i class="bx bx-envelope"></i> <a href="#">hello@valuedseed-academy.com</a> </li>
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
<!-- End Footer Area -->
<div class="go-top"><i class='bx bx-chevron-up'></i></div>
<div class="container">
   <div class="ecademy-cursor"></div>
   <div class="ecademy-cursor2"></div>
</div>
<script>
   jQuery(document).ready(function($) {
      $(document).on('click', '.plus', function(e) { // replace '.quantity' with document (without single quote)
         $input = $(this).prev('input.qty');
         var val = parseInt($input.val());
         var step = $input.attr('step');
         step = 'undefined' !== typeof(step) ? parseInt(step) : 1;
         $input.val(val + step).change();
      });
      $(document).on('click', '.minus', // replace '.quantity' with document (without single quote)
         function(e) {
            $input = $(this).next('input.qty');
            var val = parseInt($input.val());
            var step = $input.attr('step');
            step = 'undefined' !== typeof(step) ? parseInt(step) : 1;
            if (val > 0) {
               $input.val(val - step).change();
            }
         });
   });
</script>
<script type="text/javascript">
   (function() {
      var c = document.body.className;
      c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
      document.body.className = c;
   })();
</script>
<link rel='stylesheet' id='elementor-post-4364-css' href='https://assets.rightclick-academy.com/css/elementor-css-post-4364.css' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-icons-shared-0-css' href='https://assets.rightclick-academy.com/css/elementor-assets-lib-font-awesome-css-fontawesome.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-icons-fa-solid-css' href='https://assets.rightclick-academy.com/css/elementor-assets-lib-font-awesome-css-solid.min.css' type='text/css' media='all' />
<script type='text/javascript' src='https://assets.rightclick-academy.com/js/contact-form-7-includes-swv-js-index.js' id='swv-js'></script>
<script type='text/javascript' id='contact-form-7-js-extra'>
   /* <![CDATA[ */
   var wpcf7 = {
      "api": {
         "root": "https:\/\/hub.rightclick-academy.com\/wp-json\/",
         "namespace": "contact-form-7\/v1"
      },
      "cached": "1"
   };
   /* ]]> */
</script>
<script type='text/javascript' src='https://assets.rightclick-academy.com/js/contact-form-7-includes-js-index.js' id='contact-form-7-js'></script>
<script type='text/javascript' src='https://assets.rightclick-academy.com/js/woocommerce-assets-js-jquery-blockui-jquery.blockUI.min.js' id='jquery-blockui-js'></script>
<script type='text/javascript' id='wc-add-to-cart-js-extra'>
   /* <![CDATA[ */
   var wc_add_to_cart_params = {
      "ajax_url": "\/wp-admin\/admin-ajax.php",
      "wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
      "i18n_view_cart": "View cart",
      "cart_url": "https:\/\/hub.rightclick-academy.com\/cart\/",
      "is_cart": "",
      "cart_redirect_after_add": "no"
   };
   /* ]]> */
</script>
<script type='text/javascript' src='https://assets.rightclick-academy.com/js/woocommerce-assets-js-frontend-add-to-cart.min.js' id='wc-add-to-cart-js'></script>
<script type='text/javascript' src='https://assets.rightclick-academy.com/js/woocommerce-assets-js-js-cookie-js.cookie.min.js' id='js-cookie-js'></script>
<script type='text/javascript' id='woocommerce-js-extra'>
   /* <![CDATA[ */
   var woocommerce_params = {
      "ajax_url": "\/wp-admin\/admin-ajax.php",
      "wc_ajax_url": "\/?wc-ajax=%%endpoint%%"
   };
   /* ]]> */
</script>
<script type='text/javascript' src='https://assets.rightclick-academy.com/js/woocommerce-assets-js-frontend-woocommerce.min.js' id='woocommerce-js'></script>
<script type='text/javascript' src='https://assets.rightclick-academy.com/js/jquery-ui-core.min.js' id='jquery-ui-core-js'></script>
<script type='text/javascript' src='https://assets.rightclick-academy.com/js/x98-underscore.min.js' id='underscore-js'></script>
<script type='text/javascript' id='wp-util-js-extra'>
   /* <![CDATA[ */
   var _wpUtilSettings = {
      "ajax": {
         "url": "\/wp-admin\/admin-ajax.php"
      }
   };
   /* ]]> */
</script>
<script type='text/javascript' src='https://assets.rightclick-academy.com/js/8az-wp-util.min.js' id='wp-util-js'></script>
<script type='text/javascript' src='https://assets.rightclick-academy.com/js/og3-backbone.min.js' id='backbone-js'></script>
<script type='text/javascript' src='https://assets.rightclick-academy.com/js/wp-events-manager-inc-libraries-countdown-js-jquery.plugin.min.js' id='wpems-countdown-plugin-js-js'></script>
<script type='text/javascript' id='wpems-countdown-js-js-extra'>
   /* <![CDATA[ */
   var WPEMS = {
      "gmt_offset": "0",
      "current_time": "Aug 25, 2023 16:10:00 +0000",
      "l18n": {
         "labels": ["Years", "Months", "Weeks", "Days", "Hours", "Minutes", "Seconds"],
         "labels1": ["Year", "Month", "Week", "Day", "Hour", "Minute", "Second"]
      },
      "ajaxurl": "https:\/\/hub.rightclick-academy.com\/wp-admin\/admin-ajax.php",
      "something_wrong": "Something went wrong",
      "register_button": "ec5a6b9fbd"
   };
   /* ]]> */
</script>
<script type='text/javascript' src='https://assets.rightclick-academy.com/js/wp-events-manager-inc-libraries-countdown-js-jquery.countdown.min.js' id='wpems-countdown-js-js'></script>
<script type='text/javascript' src='https://assets.rightclick-academy.com/js/wp-events-manager-inc-libraries-magnific-popup-js-jquery.magnific-popup.min.js' id='wpems-magnific-popup-js-js'></script>
<script type='text/javascript' src='https://assets.rightclick-academy.com/js/wp-events-manager-assets-js-frontend-events.min.js' id='wpems-frontend-js-js'></script>
<script type='text/javascript' src='https://assets.rightclick-academy.com/js/woocommerce-assets-js-jquery-cookie-jquery.cookie.min.js' id='jquery-cookie-js'></script>
<script type='text/javascript' src='https://assets.rightclick-academy.com/js/elementor-pro-assets-lib-smartmenus-jquery.smartmenus.min.js' id='smartmenus-js'></script>
<script type='text/javascript' src='https://assets.rightclick-academy.com/js/elementor-pro-assets-js-webpack-pro.runtime.min.js' id='elementor-pro-webpack-runtime-js'></script>
<script type='text/javascript' src='https://assets.rightclick-academy.com/js/elementor-assets-js-webpack.runtime.min.js' id='elementor-webpack-runtime-js'></script>
<script type='text/javascript' src='https://assets.rightclick-academy.com/js/elementor-assets-js-frontend-modules.min.js' id='elementor-frontend-modules-js'></script>
<script type='text/javascript' src='https://assets.rightclick-academy.com/js/dist-vendor-wp-polyfill-inert.min.js' id='wp-polyfill-inert-js'></script>
<script type='text/javascript' src='https://assets.rightclick-academy.com/js/dist-vendor-regenerator-runtime.min.js' id='regenerator-runtime-js'></script>
<script type='text/javascript' src='https://assets.rightclick-academy.com/js/dist-vendor-wp-polyfill.min.js' id='wp-polyfill-js'></script>
<script type='text/javascript' src='https://assets.rightclick-academy.com/js/dist-hooks.min.js' id='wp-hooks-js'></script>
<script type='text/javascript' src='https://assets.rightclick-academy.com/js/dist-i18n.min.js' id='wp-i18n-js'></script>
<script id="wp-i18n-js-after" type="text/javascript">
   wp.i18n.setLocaleData({
      'text direction\u0004ltr': ['ltr']
   });
</script>
<script id="elementor-pro-frontend-js-before" type="text/javascript">
   var ElementorProFrontendConfig = {
      "ajaxurl": "https:\/\/hub.rightclick-academy.com\/wp-admin\/admin-ajax.php",
      "nonce": "c835ee4757",
      "urls": {
         "assets": "https:\/\/hub.rightclick-academy.com\/wp-content\/plugins\/elementor-pro\/assets\/",
         "rest": "https:\/\/hub.rightclick-academy.com\/wp-json\/"
      },
      "shareButtonsNetworks": {
         "facebook": {
            "title": "Facebook",
            "has_counter": true
         },
         "twitter": {
            "title": "Twitter"
         },
         "linkedin": {
            "title": "LinkedIn",
            "has_counter": true
         },
         "pinterest": {
            "title": "Pinterest",
            "has_counter": true
         },
         "reddit": {
            "title": "Reddit",
            "has_counter": true
         },
         "vk": {
            "title": "VK",
            "has_counter": true
         },
         "odnoklassniki": {
            "title": "OK",
            "has_counter": true
         },
         "tumblr": {
            "title": "Tumblr"
         },
         "digg": {
            "title": "Digg"
         },
         "skype": {
            "title": "Skype"
         },
         "stumbleupon": {
            "title": "StumbleUpon",
            "has_counter": true
         },
         "mix": {
            "title": "Mix"
         },
         "telegram": {
            "title": "Telegram"
         },
         "pocket": {
            "title": "Pocket",
            "has_counter": true
         },
         "xing": {
            "title": "XING",
            "has_counter": true
         },
         "whatsapp": {
            "title": "WhatsApp"
         },
         "email": {
            "title": "Email"
         },
         "print": {
            "title": "Print"
         }
      },
      "woocommerce": {
         "menu_cart": {
            "cart_page_url": "https:\/\/hub.rightclick-academy.com\/cart\/",
            "checkout_page_url": "https:\/\/hub.rightclick-academy.com\/checkout\/",
            "fragments_nonce": "7467e98d5f"
         }
      },
      "facebook_sdk": {
         "lang": "en_US",
         "app_id": ""
      },
      "lottie": {
         "defaultAnimationUrl": "https:\/\/hub.rightclick-academy.com\/wp-content\/plugins\/elementor-pro\/modules\/lottie\/assets\/animations\/default.json"
      }
   };
</script>
<script type='text/javascript' src='https://assets.rightclick-academy.com/js/elementor-pro-assets-js-frontend.min.js' id='elementor-pro-frontend-js'></script>
<script type='text/javascript' src='https://assets.rightclick-academy.com/js/elementor-assets-lib-waypoints-waypoints.min.js' id='elementor-waypoints-js'></script>
<script id="elementor-frontend-js-before" type="text/javascript">
   var elementorFrontendConfig = {
      "environmentMode": {
         "edit": false,
         "wpPreview": false,
         "isScriptDebug": false
      },
      "i18n": {
         "shareOnFacebook": "Share on Facebook",
         "shareOnTwitter": "Share on Twitter",
         "pinIt": "Pin it",
         "download": "Download",
         "downloadImage": "Download image",
         "fullscreen": "Fullscreen",
         "zoom": "Zoom",
         "share": "Share",
         "playVideo": "Play Video",
         "previous": "Previous",
         "next": "Next",
         "close": "Close",
         "a11yCarouselWrapperAriaLabel": "Carousel | Horizontal scrolling: Arrow Left & Right",
         "a11yCarouselPrevSlideMessage": "Previous slide",
         "a11yCarouselNextSlideMessage": "Next slide",
         "a11yCarouselFirstSlideMessage": "This is the first slide",
         "a11yCarouselLastSlideMessage": "This is the last slide",
         "a11yCarouselPaginationBulletMessage": "Go to slide"
      },
      "is_rtl": false,
      "breakpoints": {
         "xs": 0,
         "sm": 480,
         "md": 768,
         "lg": 1025,
         "xl": 1440,
         "xxl": 1600
      },
      "responsive": {
         "breakpoints": {
            "mobile": {
               "label": "Mobile Portrait",
               "value": 767,
               "default_value": 767,
               "direction": "max",
               "is_enabled": true
            },
            "mobile_extra": {
               "label": "Mobile Landscape",
               "value": 880,
               "default_value": 880,
               "direction": "max",
               "is_enabled": false
            },
            "tablet": {
               "label": "Tablet Portrait",
               "value": 1024,
               "default_value": 1024,
               "direction": "max",
               "is_enabled": true
            },
            "tablet_extra": {
               "label": "Tablet Landscape",
               "value": 1200,
               "default_value": 1200,
               "direction": "max",
               "is_enabled": false
            },
            "laptop": {
               "label": "Laptop",
               "value": 1366,
               "default_value": 1366,
               "direction": "max",
               "is_enabled": false
            },
            "widescreen": {
               "label": "Widescreen",
               "value": 2400,
               "default_value": 2400,
               "direction": "min",
               "is_enabled": false
            }
         }
      },
      "version": "3.15.2",
      "is_static": false,
      "experimentalFeatures": {
         "e_dom_optimization": true,
         "e_optimized_assets_loading": true,
         "additional_custom_breakpoints": true,
         "theme_builder_v2": true,
         "landing-pages": true,
         "page-transitions": true,
         "notes": true,
         "loop": true,
         "form-submissions": true,
         "e_scroll_snap": true
      },
      "urls": {
         "assets": "https:\/\/hub.rightclick-academy.com\/wp-content\/plugins\/elementor\/assets\/"
      },
      "swiperClass": "swiper-container",
      "settings": {
         "page": [],
         "editorPreferences": []
      },
      "kit": {
         "global_image_lightbox": "yes",
         "active_breakpoints": ["viewport_mobile", "viewport_tablet"],
         "lightbox_enable_counter": "yes",
         "lightbox_enable_fullscreen": "yes",
         "lightbox_enable_zoom": "yes",
         "lightbox_enable_share": "yes",
         "lightbox_title_src": "title",
         "lightbox_description_src": "description",
         "woocommerce_notices_elements": []
      },
      "post": {
         "id": 30,
         "title": "Q-Hub",
         "excerpt": "",
         "featuredImage": false
      }
   };
</script>
<script type='text/javascript' src='https://assets.rightclick-academy.com/js/elementor-assets-js-frontend.min.js' id='elementor-frontend-js'></script>
<script type='text/javascript' src='https://assets.rightclick-academy.com/js/elementor-pro-assets-js-elements-handlers.min.js' id='pro-elements-handlers-js'></script>









@include('web.default.includes.advertise_modal.index')

@if(!empty($floatingBar) and $floatingBar->position == 'bottom')
@include('web.default.includes.floating_bar')
@endif
</div>
<!-- Template JS File -->
<script src="/assets/default/js/app.js"></script>
<script src="/assets/default/vendors/feather-icons/dist/feather.min.js"></script>
<script src="/assets/default/vendors/moment.min.js"></script>
<script src="/assets/default/vendors/sweetalert2/dist/sweetalert2.min.js"></script>
<script src="/assets/default/vendors/toast/jquery.toast.min.js"></script>
<script type="text/javascript" src="/assets/default/vendors/simplebar/simplebar.min.js"></script>

@if(empty($justMobileApp) and checkShowCookieSecurityDialog())
@include('web.default.includes.cookie-security')
@endif


<script>
   var deleteAlertTitle = '{{ trans('
   public.are_you_sure ') }}';
   var deleteAlertHint = '{{ trans('
   public.deleteAlertHint ') }}';
   var deleteAlertConfirm = '{{ trans('
   public.deleteAlertConfirm ') }}';
   var deleteAlertCancel = '{{ trans('
   public.cancel ') }}';
   var deleteAlertSuccess = '{{ trans('
   public.success ') }}';
   var deleteAlertFail = '{{ trans('
   public.fail ') }}';
   var deleteAlertFailHint = '{{ trans('
   public.deleteAlertFailHint ') }}';
   var deleteAlertSuccessHint = '{{ trans('
   public.deleteAlertSuccessHint ') }}';
   var forbiddenRequestToastTitleLang = '{{ trans('
   public.forbidden_request_toast_lang ') }}';
   var forbiddenRequestToastMsgLang = '{{ trans('
   public.forbidden_request_toast_msg_lang ') }}';
</script>

@if(session()->has('toast'))
<script>
   (function() {
      "use strict";

      $.toast({
         heading: '{{ session()->get('
         toast ')['
         title '] ?? '
         ' }}',
         text: '{{ session()->get('
         toast ')['
         msg '] ?? '
         ' }}',
         bgColor: '@if(session()->get('
         toast ')['
         status '] == '
         success ') #43d477 @else #f63c3c @endif',
         textColor: 'white',
         hideAfter: 10000,
         position: 'bottom-right',
         icon: '{{ session()->get('
         toast ')['
         status '] }}'
      });
   })(jQuery)
</script>
@endif

@stack('styles_bottom')
@stack('scripts_bottom')

<script src="/assets/default/js/parts/main.min.js"></script>

<script>
   @if(session()->has('registration_package_limited'))
      (function() {
         "use strict";

         handleLimitedAccountModal('{!! session()->get('
            registration_package_limited ') !!}')
      })(jQuery)

   {
      {
         session()->forget('registration_package_limited')
      }
   }
   @endif

   {
      !!!empty(getCustomCssAndJs('js')) ? getCustomCssAndJs('js') : ''!!
   }
</script>
<script>
   jQuery(document).ready(function($) {
      $(document).on('click', '.plus', function(e) { // replace '.quantity' with document (without single quote)
         $input = $(this).prev('input.qty');
         var val = parseInt($input.val());
         var step = $input.attr('step');
         step = 'undefined' !== typeof(step) ? parseInt(step) : 1;
         $input.val(val + step).change();
      });
      $(document).on('click', '.minus', // replace '.quantity' with document (without single quote)
         function(e) {
            $input = $(this).next('input.qty');
            var val = parseInt($input.val());
            var step = $input.attr('step');
            step = 'undefined' !== typeof(step) ? parseInt(step) : 1;
            if (val > 0) {
               $input.val(val - step).change();
            }
         });
   });
</script>
<script type="text/javascript">
   (function() {
      var c = document.body.className;
      c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
      document.body.className = c;
   })();
</script>
<link rel='stylesheet' id='elementor-post-4364-css' href='https://assets.rightclick-academy.com/css/elementor-css-post-4364.css' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-icons-shared-0-css' href='https://assets.rightclick-academy.com/css/elementor-assets-lib-font-awesome-css-fontawesome.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-icons-fa-solid-css' href='https://assets.rightclick-academy.com/css/elementor-assets-lib-font-awesome-css-solid.min.css' type='text/css' media='all' />
<script type='text/javascript' src='https://assets.rightclick-academy.com/js/contact-form-7-includes-swv-js-index.js' id='swv-js'></script>
<script type='text/javascript' id='contact-form-7-js-extra'>
   /* <![CDATA[ */
   var wpcf7 = {
      "api": {
         "root": "https:\/\/qhub.talisa.io\/wp-json\/",
         "namespace": "contact-form-7\/v1"
      },
      "cached": "1"
   };
   /* ]]> */
</script>
<script type='text/javascript' src='https://assets.rightclick-academy.com/js/contact-form-7-includes-js-index.js' id='contact-form-7-js'></script>
<script type='text/javascript' src='https://assets.rightclick-academy.com/js/woocommerce-assets-js-jquery-blockui-jquery.blockUI.min.js' id='jquery-blockui-js'></script>
<script type='text/javascript' id='wc-add-to-cart-js-extra'>
   /* <![CDATA[ */
   var wc_add_to_cart_params = {
      "ajax_url": "\/wp-admin\/admin-ajax.php",
      "wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
      "i18n_view_cart": "View cart",
      "cart_url": "https:\/\/qhub.talisa.io\/cart\/",
      "is_cart": "",
      "cart_redirect_after_add": "no"
   };
   /* ]]> */
</script>
<script type='text/javascript' src='https://assets.rightclick-academy.com/js/woocommerce-assets-js-frontend-add-to-cart.min.js' id='wc-add-to-cart-js'></script>
<script type='text/javascript' src='https://assets.rightclick-academy.com/js/woocommerce-assets-js-js-cookie-js.cookie.min.js' id='js-cookie-js'></script>
<script type='text/javascript' id='woocommerce-js-extra'>
   /* <![CDATA[ */
   var woocommerce_params = {
      "ajax_url": "\/wp-admin\/admin-ajax.php",
      "wc_ajax_url": "\/?wc-ajax=%%endpoint%%"
   };
   /* ]]> */
</script>
<script type='text/javascript' src='https://assets.rightclick-academy.com/js/woocommerce-assets-js-frontend-woocommerce.min.js' id='woocommerce-js'></script>
<script type='text/javascript' src='https://assets.rightclick-academy.com/js/jquery-ui-core.min.js' id='jquery-ui-core-js'></script>
<script type='text/javascript' src='https://assets.rightclick-academy.com/js/rxo-underscore.min.js' id='underscore-js'></script>
<script type='text/javascript' id='wp-util-js-extra'>
   /* <![CDATA[ */
   var _wpUtilSettings = {
      "ajax": {
         "url": "\/wp-admin\/admin-ajax.php"
      }
   };
   /* ]]> */
</script>
<script type='text/javascript' src='https://assets.rightclick-academy.com/js/3l5-wp-util.min.js' id='wp-util-js'></script>
<script type='text/javascript' src='https://assets.rightclick-academy.com/js/lc9-backbone.min.js' id='backbone-js'></script>
<script type='text/javascript' src='https://assets.rightclick-academy.com/js/wp-events-manager-inc-libraries-countdown-js-jquery.plugin.min.js' id='wpems-countdown-plugin-js-js'></script>
<script type='text/javascript' id='wpems-countdown-js-js-extra'>
   /* <![CDATA[ */
   var WPEMS = {
      "gmt_offset": "0",
      "current_time": "Sep 11, 2023 11:51:00 +0000",
      "l18n": {
         "labels": ["Years", "Months", "Weeks", "Days", "Hours", "Minutes", "Seconds"],
         "labels1": ["Year", "Month", "Week", "Day", "Hour", "Minute", "Second"]
      },
      "ajaxurl": "https:\/\/qhub.talisa.io\/wp-admin\/admin-ajax.php",
      "something_wrong": "Something went wrong",
      "register_button": "3f82699963"
   };
   /* ]]> */
</script>
<script type='text/javascript' src='https://assets.rightclick-academy.com/js/wp-events-manager-inc-libraries-countdown-js-jquery.countdown.min.js' id='wpems-countdown-js-js'></script>
<script type='text/javascript' src='https://assets.rightclick-academy.com/js/wp-events-manager-inc-libraries-magnific-popup-js-jquery.magnific-popup.min.js' id='wpems-magnific-popup-js-js'></script>
<script type='text/javascript' src='https://assets.rightclick-academy.com/js/wp-events-manager-assets-js-frontend-events.min.js' id='wpems-frontend-js-js'></script>
<script type='text/javascript' src='https://assets.rightclick-academy.com/js/woocommerce-assets-js-jquery-cookie-jquery.cookie.min.js' id='jquery-cookie-js'></script>
<script type='text/javascript' src='https://assets.rightclick-academy.com/js/elementor-pro-assets-lib-smartmenus-jquery.smartmenus.min.js' id='smartmenus-js'></script>
<script type='text/javascript' src='https://assets.rightclick-academy.com/js/elementor-pro-assets-js-webpack-pro.runtime.min.js' id='elementor-pro-webpack-runtime-js'></script>
<script type='text/javascript' src='https://assets.rightclick-academy.com/js/elementor-assets-js-webpack.runtime.min.js' id='elementor-webpack-runtime-js'></script>
<script type='text/javascript' src='https://assets.rightclick-academy.com/js/elementor-assets-js-frontend-modules.min.js' id='elementor-frontend-modules-js'></script>
<script type='text/javascript' src='https://assets.rightclick-academy.com/js/dist-vendor-wp-polyfill-inert.min.js' id='wp-polyfill-inert-js'></script>
<script type='text/javascript' src='https://assets.rightclick-academy.com/js/dist-vendor-regenerator-runtime.min.js' id='regenerator-runtime-js'></script>
<script type='text/javascript' src='https://assets.rightclick-academy.com/js/dist-vendor-wp-polyfill.min.js' id='wp-polyfill-js'></script>
<script type='text/javascript' src='https://assets.rightclick-academy.com/js/dist-hooks.min.js' id='wp-hooks-js'></script>
<script type='text/javascript' src='https://assets.rightclick-academy.com/js/dist-i18n.min.js' id='wp-i18n-js'></script>
<script id="wp-i18n-js-after" type="text/javascript">
   wp.i18n.setLocaleData({
      'text direction\u0004ltr': ['ltr']
   });
</script>
<script id="elementor-pro-frontend-js-before" type="text/javascript">
   var ElementorProFrontendConfig = {
      "ajaxurl": "https:\/\/qhub.talisa.io\/wp-admin\/admin-ajax.php",
      "nonce": "663c29d783",
      "urls": {
         "assets": "https:\/\/qhub.talisa.io\/wp-content\/plugins\/elementor-pro\/assets\/",
         "rest": "https:\/\/qhub.talisa.io\/wp-json\/"
      },
      "shareButtonsNetworks": {
         "facebook": {
            "title": "Facebook",
            "has_counter": true
         },
         "twitter": {
            "title": "Twitter"
         },
         "linkedin": {
            "title": "LinkedIn",
            "has_counter": true
         },
         "pinterest": {
            "title": "Pinterest",
            "has_counter": true
         },
         "reddit": {
            "title": "Reddit",
            "has_counter": true
         },
         "vk": {
            "title": "VK",
            "has_counter": true
         },
         "odnoklassniki": {
            "title": "OK",
            "has_counter": true
         },
         "tumblr": {
            "title": "Tumblr"
         },
         "digg": {
            "title": "Digg"
         },
         "skype": {
            "title": "Skype"
         },
         "stumbleupon": {
            "title": "StumbleUpon",
            "has_counter": true
         },
         "mix": {
            "title": "Mix"
         },
         "telegram": {
            "title": "Telegram"
         },
         "pocket": {
            "title": "Pocket",
            "has_counter": true
         },
         "xing": {
            "title": "XING",
            "has_counter": true
         },
         "whatsapp": {
            "title": "WhatsApp"
         },
         "email": {
            "title": "Email"
         },
         "print": {
            "title": "Print"
         }
      },
      "woocommerce": {
         "menu_cart": {
            "cart_page_url": "https:\/\/qhub.talisa.io\/cart\/",
            "checkout_page_url": "https:\/\/qhub.talisa.io\/checkout\/",
            "fragments_nonce": "fb78ba5b86"
         }
      },
      "facebook_sdk": {
         "lang": "en_US",
         "app_id": ""
      },
      "lottie": {
         "defaultAnimationUrl": "https:\/\/qhub.talisa.io\/wp-content\/plugins\/elementor-pro\/modules\/lottie\/assets\/animations\/default.json"
      }
   };
</script>
<script type='text/javascript' src='https://assets.rightclick-academy.com/js/elementor-pro-assets-js-frontend.min.js' id='elementor-pro-frontend-js'></script>
<script type='text/javascript' src='https://assets.rightclick-academy.com/js/elementor-assets-lib-waypoints-waypoints.min.js' id='elementor-waypoints-js'></script>
<script id="elementor-frontend-js-before" type="text/javascript">
   var elementorFrontendConfig = {
      "environmentMode": {
         "edit": false,
         "wpPreview": false,
         "isScriptDebug": false
      },
      "i18n": {
         "shareOnFacebook": "Share on Facebook",
         "shareOnTwitter": "Share on Twitter",
         "pinIt": "Pin it",
         "download": "Download",
         "downloadImage": "Download image",
         "fullscreen": "Fullscreen",
         "zoom": "Zoom",
         "share": "Share",
         "playVideo": "Play Video",
         "previous": "Previous",
         "next": "Next",
         "close": "Close",
         "a11yCarouselWrapperAriaLabel": "Carousel | Horizontal scrolling: Arrow Left & Right",
         "a11yCarouselPrevSlideMessage": "Previous slide",
         "a11yCarouselNextSlideMessage": "Next slide",
         "a11yCarouselFirstSlideMessage": "This is the first slide",
         "a11yCarouselLastSlideMessage": "This is the last slide",
         "a11yCarouselPaginationBulletMessage": "Go to slide"
      },
      "is_rtl": false,
      "breakpoints": {
         "xs": 0,
         "sm": 480,
         "md": 768,
         "lg": 1025,
         "xl": 1440,
         "xxl": 1600
      },
      "responsive": {
         "breakpoints": {
            "mobile": {
               "label": "Mobile Portrait",
               "value": 767,
               "default_value": 767,
               "direction": "max",
               "is_enabled": true
            },
            "mobile_extra": {
               "label": "Mobile Landscape",
               "value": 880,
               "default_value": 880,
               "direction": "max",
               "is_enabled": false
            },
            "tablet": {
               "label": "Tablet Portrait",
               "value": 1024,
               "default_value": 1024,
               "direction": "max",
               "is_enabled": true
            },
            "tablet_extra": {
               "label": "Tablet Landscape",
               "value": 1200,
               "default_value": 1200,
               "direction": "max",
               "is_enabled": false
            },
            "laptop": {
               "label": "Laptop",
               "value": 1366,
               "default_value": 1366,
               "direction": "max",
               "is_enabled": false
            },
            "widescreen": {
               "label": "Widescreen",
               "value": 2400,
               "default_value": 2400,
               "direction": "min",
               "is_enabled": false
            }
         }
      },
      "version": "3.15.1",
      "is_static": false,
      "experimentalFeatures": {
         "e_dom_optimization": true,
         "e_optimized_assets_loading": true,
         "additional_custom_breakpoints": true,
         "theme_builder_v2": true,
         "landing-pages": true,
         "page-transitions": true,
         "notes": true,
         "loop": true,
         "form-submissions": true,
         "e_scroll_snap": true
      },
      "urls": {
         "assets": "https:\/\/qhub.talisa.io\/wp-content\/plugins\/elementor\/assets\/"
      },
      "swiperClass": "swiper-container",
      "settings": {
         "page": [],
         "editorPreferences": []
      },
      "kit": {
         "global_image_lightbox": "yes",
         "active_breakpoints": ["viewport_mobile", "viewport_tablet"],
         "lightbox_enable_counter": "yes",
         "lightbox_enable_fullscreen": "yes",
         "lightbox_enable_zoom": "yes",
         "lightbox_enable_share": "yes",
         "lightbox_title_src": "title",
         "lightbox_description_src": "description",
         "woocommerce_notices_elements": []
      },
      "post": {
         "id": 2975,
         "title": "Gym%20Coaching%20%E2%80%93%20Q-Hub",
         "excerpt": "",
         "featuredImage": false
      }
   };
</script>
<script type='text/javascript' src='https://assets.rightclick-academy.com/js/elementor-assets-js-frontend.min.js' id='elementor-frontend-js'></script>
<script type='text/javascript' src='https://assets.rightclick-academy.com/js/elementor-pro-assets-js-elements-handlers.min.js' id='pro-elements-handlers-js'></script>

</body>

</html>