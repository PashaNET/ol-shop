<?php
// Variables

$noo_site_primary_hover_color             			=	   noo_hermosa_get_option( 'noo_site_primary_color', noo_hermosa_get_theme_default( 'primary_color' ) );
$noo_site_secondary_hover_color           			=	   noo_hermosa_get_option( 'noo_site_secondary_color', noo_hermosa_get_theme_default( 'secondary_color' ) );

$noo_site_primary_link_color_darken_15    			=	   noo_hermosa_css_darken( $noo_site_primary_hover_color, '15%' );
$noo_site_primary_link_color_lighten_20         =    noo_hermosa_css_lighten( $noo_site_primary_hover_color, '20%' );
$noo_site_secondary_link_color_darken_15  			=	   noo_hermosa_css_darken( $noo_site_secondary_hover_color, '15%' );

$noo_site_secondary_link_color_lighten_15 			=	   noo_hermosa_css_lighten( $noo_site_secondary_hover_color, '15%' );

$noo_site_secondary_link_color_fade_80    			=	   noo_hermosa_css_fade( $noo_site_secondary_hover_color, '80%' );
$noo_site_secondary_link_color_fade_70    			=	   noo_hermosa_css_fade( $noo_site_secondary_hover_color, '70%' );
$noo_site_secondary_link_color_fade_35    			=	   noo_hermosa_css_fade( $noo_site_secondary_hover_color, '35%' );
$noo_site_secondary_link_color_fade_20    			=	   noo_hermosa_css_fade( $noo_site_secondary_hover_color, '20%' );
$noo_site_secondary_link_color_fade_30    			=	   noo_hermosa_css_fade( $noo_site_secondary_hover_color, '30%' );

$noo_site_secondary_link_color_fade_darken_25   =    noo_hermosa_css_fade( noo_hermosa_css_darken( $noo_site_secondary_hover_color, '25%' ), '25%' );

?>
h1 a:hover, h2 a:hover, h3 a:hover, h4 a:hover, h5 a:hover, h6 a:hover,
.h1 a:hover, .h2 a:hover, .h3 a:hover, .h4 a:hover, .h5 a:hover, .h6 a:hover,
a:hover,
a:focus{
    color: <?php echo esc_html($noo_site_primary_hover_color); ?>;
}

.pagination .page-numbers.current,
.pagination a.page-numbers:hover{
    background: <?php echo esc_html($noo_site_primary_hover_color); ?>;
    border-color: <?php echo esc_html($noo_site_primary_hover_color); ?>;
}

.hentry.sticky:after,
#comments #respond .form-submit input:hover{
    background: <?php echo esc_html($noo_site_primary_hover_color); ?>;
}

.hentry.sticky{
    border-color: <?php echo esc_html($noo_site_primary_hover_color); ?>;
}

/*
* Color Primary
* ===============================
*/

.off-canvas #off-canvas-nav .noo-main-canvas .nav-collapse li.current-menu-item > a,
.off-canvas #off-canvas-nav .noo-main-canvas .nav-collapse li ul.sub-menu li.current-menu-item a,
h3.noo-title,
a:hover, a:focus,
.text-primary,
.btn-primary .badge,
.btn-link:hover, .btn-link:focus,
#comments .comments-title em,
#comments ol > li .comment-wrap .comment-block .comment-header cite:after, #comments ul > li .comment-wrap .comment-block .comment-header cite:after,
#comments #respond .comment-reply-title,
.noo-main-menu .navbar-nav li.current-menu-parent > a, .noo-main-menu .navbar-nav li.current-menu-item > a,
.noo-header.header-logo-transparent .noo-top-right-widget a:focus, .noo-header.header-logo-transparent .noo-top-left-widget a:focus, .noo-header.header-logo-transparent .noo-top-right-widget a:hover, .noo-header.header-logo-transparent .noo-top-left-widget a:hover,
.noo-header.header-logo-transparent .noo-top-right-widget a:focus i, .noo-header.header-logo-transparent .noo-top-left-widget a:focus i, .noo-header.header-logo-transparent .noo-top-right-widget a:hover i, .noo-header.header-logo-transparent .noo-top-left-widget a:hover i,
.noo-header.header-logo-transparent .noo-top-right-widget a span.noo-cart-total,
.noo-page-heading .page-title,
.wrap-footer a,
.widget_noo_infomation .noo-custom-menu a:hover, .widget_noo_infomation .noo-custom-menu a:focus,
.widget_noo_infomation .noo-custom-menu a:hover:before, .widget_noo_infomation .noo-custom-menu a:focus:before,
.woocommerce-before-shop-loop .woocommerce-result-count span,
.woocommerce-before-shop-loop .noo-button-header-shop i:hover, .woocommerce-before-shop-loop .noo-button-header-shop i.active,
.woocommerce div.product .price span,
.woocommerce div.product .woocommerce-tabs ul.tabs li.active a,
.woocommerce .woocommerce-message, .woocommerce .woocommerce-info,
.woocommerce .woocommerce-message:before, .woocommerce .woocommerce-info:before,
.woocommerce .star-rating,
.woocommerce .star-rating:before,
.noo-single-product .entry-summary .yith-wcwl-add-to-wishlist a:hover, .noo-single-product .entry-summary .yith-wcwl-add-to-wishlist a:focus,
.noo-single-product .entry-summary .yith-wcwl-add-to-wishlist a:hover:after, .noo-single-product .entry-summary .yith-wcwl-add-to-wishlist a:focus:after,
.noo-single-product .noo-shop-related h3.noo-title,
.woocommerce-cart table.cart a.remove:hover:before,
.woocommerce-cart table.cart td .quantity button:hover,
.woocommerce-cart .cart-collaterals .cart_totals table td[data-title='Total'],
.noo-sidebar h4.widget-title,
.noo-sidebar .widget_price_filter .price_slider_amount .price_label span,
.noo-sidebar .widget_product_categories > ul > li a:hover, .noo-sidebar .widget_categories > ul > li a:hover, .noo-sidebar .widget_product_categories > ul > li a:focus, .noo-sidebar .widget_categories > ul > li a:focus,
.noo-sidebar .widget_products ul li .product-title:hover, .noo-sidebar .widget_products ul li .product-title:focus,
.noo-sidebar .widget_products ul li .amount,
.noo_event_box_author .noo-box-author-item i,
.noo_event_box_map address i,
.noo_event_slider .noo-event-slider-body h4 a:hover, .noo_event_slider .noo-event-slider-body h4 a:focus,
.noo_event_slider .noo-event-slider-body span i,
.post_list_widget li a .post-title:hover,
.post_list_widget li a:hover .post-title,
.posts-loop-title .loop-view-mode a.active,
.posts-loop-content .loop-item-content .loop-item-title a:hover,

.posts-loop-content .loop-item-content .loop-item-category,
.posts-loop-content .loop-item-content .loop-item-category a,
.posts-loop-content .loop-item-content .content-meta i,
.single-noo_class .hentry .content-header .content-meta i,
.single-noo_class .hentry .content-wrap blockquote:before,
.single-noo_class .timetable_week h4,
.single-noo_class .timetable_week .day,
.widget-search-classes .widget-class-filter.search-class-weekday label input[type="checkbox"]:checked:before,
.widget-single-class-sidebar .class-info-sidebar .clearfix span, .widget-single-class-sidebar .class-info-sidebar .dl-horizontal dd span, .widget-single-class-sidebar .class-info-sidebar .noo-container span, .widget-single-class-sidebar .class-info-sidebar .noo-container-fluid span, .widget-single-class-sidebar .class-info-sidebar .noo-row span, .widget-single-class-sidebar .class-info-sidebar .form-horizontal .form-group span, .widget-single-class-sidebar .class-info-sidebar .btn-toolbar span, .widget-single-class-sidebar .class-info-sidebar .btn-group-vertical > .btn-group span,
.widget-single-class-sidebar .class-info-sidebar i,
.widget-popular-class .noo-slider .slider-item h5 a:hover,
.widget-popular-class .noo-slider .slider-item .item-info .trainer-info i,
.noo-trainer-shortcode .masonry .trainer-tag-wrap .trainer-bio .trainer-info h4 a:hover,
.noo-trainer-shortcode .masonry .trainer-tag-wrap .trainer-bio .trainer-info .trainer-category,
.noo-trainer-shortcode .masonry .trainer-tag-wrap .trainer-bio .trainer-info .trainer-category a,
.noo-filters ul li a.selected,
.single-noo_trainer .hentry .trainer-info .trainer-category,
.single-noo_trainer .hentry .trainer-info .trainer-category a,
.single-noo_trainer .trainer-content .content blockquote:before,
.single-noo_trainer .trainer-content .content ul li:before,
.single-noo_trainer .noo-progress-bar .noo-single-bar .label-bar .noo-label-units,
.noo-theme-wraptext .wrap-title .noo-theme-title,
.noo-theme-wraptext .wrap-title .noo-theme-title .first-word,

.noo-class-schedule-shortcode .fc-month-view .fc-body .fc-popover .fc-more, .noo-class-schedule-shortcode .fc-month-view .fc-body .fc-content-skeleton .fc-more,
.sc-noo-product-wrap > .noo-product-head .noo-product-title,
.sc-noo-event-slider-wrap > .noo-event-slider-head .noo-event-slider-title,
.sc-noo-event-slider-wrap .swiper-slide .item-body .noo-title a:hover, .sc-noo-event-slider-wrap .swiper-slide .item-body .noo-title a:focus,
.sc-noo-event-slider-wrap .swiper-slide .item-body .noo-event-meta span i,
.sc-noo-event-slider-wrap .swiper-slide-active .item-body .noo-title a:hover, .sc-noo-event-slider-wrap .swiper-slide-active .item-body .noo-title a:focus,
.sc-noo-event-slider-wrap .swiper-slide-active .item-body .noo-event-meta span i,
.noo-short-intro h3 span,
.noo-contact-form-7 .noo-theme-title,
.noo-video h3,
.our-blog-item .noo-blog-meta .comment-meta i,
.our-blog-item .noo-blog-entry h3 a:hover,
.style_2 .our-blog-item .noo-blog-footer .noo-readmore:before,
.style_2 .our-blog-item .noo-blog-footer .noo-readmore:hover,
.style_2 .our-blog-item .noo-blog-footer .comment-meta i,
.noo-pricetable.style-1 .item-price,
.noo-single-event-head h1 a:hover, .noo-single-event-head h3 a:hover, .noo-single-event-head h1 a:focus, .noo-single-event-head h3 a:focus,
.noo-single-event-head .noo-event-meta span i,
.noo-single-event-body ul li:before,
.archive-noo-event-head .noo-event-text span,
.archive-noo-event-head .noo-event-button i:hover, .archive-noo-event-head .noo-event-button i.active,
.archive-noo-event-item .noo-single-event-head .event-category a,
.single-post .entry-header h1 a:hover, .category .entry-header h1 a:hover, .blog .entry-header h1 a:hover, .single-post .entry-header h3 a:hover, .category .entry-header h3 a:hover, .blog .entry-header h3 a:hover, .single-post .entry-header h1 a:focus, .category .entry-header h1 a:focus, .blog .entry-header h1 a:focus, .single-post .entry-header h3 a:focus, .category .entry-header h3 a:focus, .blog .entry-header h3 a:focus,
.single-post .item-info span i, .category .item-info span i, .blog .item-info span i,
.single-post .action-like:before, .category .action-like:before, .blog .action-like:before,
.single-post .entry-content blockquote:before, .category .entry-content blockquote:before, .blog .entry-content blockquote:before,
.single-post .entry-content ul li:before, .category .entry-content ul li:before, .blog .entry-content ul li:before,
.single-post .entry-footer .tags-links i, .category .entry-footer .tags-links i, .blog .entry-footer .tags-links i,
.noo-post-nav .prev-post a:before, .noo-post-nav .next-post a:before, .noo-post-nav .prev-post a:after, .noo-post-nav .next-post a:after,
.single-noo_class .timetable_week .res-sche-content .item-weekday,
.category .content-featured .content-thumb:hover:after, .blog .content-featured .content-thumb:hover:after {
	color: <?php echo esc_html($noo_site_primary_hover_color); ?>;
}

.posts-loop-content .loop-item-content .loop-item-category a:hover,
.noo-trainer-shortcode .masonry .trainer-tag-wrap .trainer-bio .trainer-info .trainer-category a:hover,
.single-noo_trainer .hentry .trainer-info .trainer-category a:hover,
.noo-class-schedule-shortcode .fc-month-view .fc-body .fc-popover .fc-more:hover, .noo-class-schedule-shortcode .fc-month-view .fc-body .fc-content-skeleton .fc-more:hover,
.archive-noo-event-item .noo-single-event-head .event-category a:hover,
.meta-author .box-author-info h5 a:hover, .meta-author .box-author-info h5 a:focus,
.meta-author .box-author-info ul.author-social li a:hover, .meta-author .box-author-info ul.author-social li a:focus,
.noo-post-nav .fa-th-large:hover, .noo-post-nav .fa-th-large:focus
{
	color: <?php echo esc_html($noo_site_primary_link_color_darken_15); ?>;
}

.off-canvas #off-canvas-nav .noo-main-canvas .nav-collapse li ul.sub-menu li.current-menu-item a:before,
.bg-primary,
.btn-primary,
.btn-primary.disabled, .btn-primary[disabled], fieldset[disabled] .btn-primary,
.btn-primary.disabled:hover, .btn-primary[disabled]:hover, fieldset[disabled] .btn-primary:hover,
.btn-primary.disabled:focus, .btn-primary[disabled]:focus, fieldset[disabled] .btn-primary:focus, .btn-primary.disabled.focus,
.btn-primary[disabled].focus, fieldset[disabled] .btn-primary.focus, .btn-primary.disabled:active, .btn-primary[disabled]:active,
fieldset[disabled] .btn-primary:active, .btn-primary.disabled.active, .btn-primary[disabled].active, fieldset[disabled] .btn-primary.active,
.pagination .page-numbers.current,
.pagination a.page-numbers:hover,
.hentry.sticky:after,
#comments .comments-title:after,
#comments #respond .comment-reply-title:after,
#comments #respond .form-submit input[type="submit"],
.noo-main-menu .navbar-nav li > a:after, .noo-main-menu .navbar-nav li > a:before,
.noo-header.header-logo-transparent .navbar-header,
.noo-header.fixed_top.fixed-top-eff.header-logo-transparent .navbar-header,
.noo-page-heading .wrap-page-title:after,
.yith-wcwl-add-to-wishlist a,
.yith-wcwl-add-to-wishlist .yith-wcwl-wishlistexistsbrowse a, .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistaddedbrowse a,
.woocommerce .products div.product .noo-action-button-shop a,
.woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span:hover, .woocommerce nav.woocommerce-pagination ul li a.current, .woocommerce nav.woocommerce-pagination ul li span.current,
.woocommerce table.wishlist_table tbody td.product-add-to-cart a, .woocommerce table.wishlist_table tbody td.product-add-to-cart a, .woocommerce table.cart tbody td.product-add-to-cart a, .woocommerce table.shop_table tbody td.product-add-to-cart a,
.woocommerce form.checkout_coupon .form-row-last input.button:hover, .woocommerce form.checkout_coupon .form-row-last input.button:focus,
.woocommerce #payment #place_order,
.woocommerce #respond input#submit,
.noo-single-product .entry-summary form.cart .button,
.woocommerce .button.wc-backward:hover,
.woocommerce-cart table.cart .actions .continue:hover, .woocommerce-cart table.cart .actions .button:hover,
.noocart-coupon .noo-apply-coupon:hover,
.woocommerce-cart .wc-proceed-to-checkout a.checkout-button:hover,
.noo-sidebar h4.widget-title .wrap-title:after,
.noo-sidebar .widget_price_filter .price_slider_amount .button,
.noo-sidebar .widget_product_categories > ul > li a:hover:before, .noo-sidebar .widget_categories > ul > li a:hover:before, .noo-sidebar .widget_product_categories > ul > li a:focus:before, .noo-sidebar .widget_categories > ul > li a:focus:before,
.noo-sidebar .tagcloud a:hover, .noo-sidebar .tagcloud a:focus,
.noo_event_slider .owl-theme .owl-controls .owl-page.active span,
.posts-loop-content .loop-item-content .loop-item-action .btn,
.posts-loop-content .btn-loadmore,
.single-noo_class .timetable_week h4:before,
.widget-single-class-sidebar .btn,
.widget-popular-class .noo-slider .owl-controls .owl-page span:hover,
.widget-popular-class .noo-slider .owl-controls .owl-page.active span,
.noo-trainer-shortcode .masonry .trainer-tag-wrap .trainer-bio .trainer-info .view-profile,
.noo-filters ul li a.selected:after,
.noo-class-slider-shortcode .grid .posts-loop-content .owl-theme .owl-controls .owl-page span:hover:before,
.noo-class-slider-shortcode .grid .posts-loop-content .owl-theme .owl-controls .owl-page.active span:before,
.sc-noo-product-wrap .noo-product-button,
.sc-noo-event-slider-wrap .noo-event-slider-button,
.sc-noo-event-slider-wrap .swiper-slide .item-body .learn-more:hover, .sc-noo-event-slider-wrap .swiper-slide .item-body .learn-more:focus,
.sc-noo-event-slider-wrap .swiper-slide-active .item-body .learn-more:hover, .sc-noo-event-slider-wrap .swiper-slide-active .item-body .learn-more:focus,
.noo-short-intro .custom_link,
.ui-datepicker .ui-datepicker-header,
.ui-datepicker-calendar tr td:hover,
.noo-contact-form-7 .wpcf7-form input[type='submit'],
.our-blog-item .noo-blog-footer a,
.blog-pagination .custom_link,
.noo-pricetable.style-1 .noo-pricetable-header, .noo-pricetable.style-1 .button,
.noo_event_info .register_button,
.noo-archive-event-footer .readmore,
.single-post .read-more, .category .read-more, .blog .read-more,
.noo_counter_background,
.noo-contact-form input[type="submit"],
.head-single-find-event
{
	background-color: <?php echo esc_html($noo_site_primary_hover_color); ?>;
}

/**
 * Keyframe
 */
 @keyframes preload_audio_wave {
  0% {
    height: 5px;
    transform: translateY(0px);
    background-color: <?php echo esc_html($noo_site_primary_hover_color); ?>;
  }
  25% {
    height: 30px;
    transform: translateY(15px);
    background-color: <?php echo esc_html($noo_site_primary_hover_color); ?>;
  }
  50% {
    height: 5px;
    transform: translateY(0px);
    background-color: <?php echo esc_html($noo_site_primary_hover_color); ?>;
  }
  100% {
    height: 5px;
    transform: translateY(0px);
    background-color: <?php echo esc_html($noo_site_primary_hover_color); ?>;
  }
}
@-webkit-keyframes preload_audio_wave {
  0% {
    height: 5px;
    -webkit-transform: translateY(0px);
    background-color: <?php echo esc_html($noo_site_primary_hover_color); ?>;
  }
  25% {
    height: 30px;
    -webkit-transform: translateY(15px);
    background-color: <?php echo esc_html($noo_site_primary_hover_color); ?>;
  }
  50% {
    height: 5px;
    -webkit-transform: translateY(0px);
    background-color: <?php echo esc_html($noo_site_primary_hover_color); ?>;
  }
  100% {
    height: 5px;
    -webkit-transform: translateY(0px);
    background-color: <?php echo esc_html($noo_site_primary_hover_color); ?>;
  }
}
@-moz-keyframes preload_audio_wave {
  0% {
    height: 5px;
    -moz-transform: translateY(0px);
    background-color: <?php echo esc_html($noo_site_primary_hover_color); ?>;
  }
  25% {
    height: 30px;
    -moz-transform: translateY(15px);
    background-color: <?php echo esc_html($noo_site_primary_hover_color); ?>;
  }
  50% {
    height: 5px;
    -moz-transform: translateY(0px);
    background-color: <?php echo esc_html($noo_site_primary_hover_color); ?>;
  }
  100% {
    height: 5px;
    -moz-transform: translateY(0px);
    background-color: <?php echo esc_html($noo_site_primary_hover_color); ?>;
  }
}
@keyframes preload_audio_wave {
  0% {
    height: 5px;
    transform: translateY(0px);
    background-color: <?php echo esc_html($noo_site_primary_hover_color); ?>;
  }
  25% {
    height: 30px;
    transform: translateY(15px);
    background-color: <?php echo esc_html($noo_site_primary_hover_color); ?>;
  }
  50% {
    height: 5px;
    transform: translateY(0px);
    background-color: <?php echo esc_html($noo_site_primary_hover_color); ?>;
  }
  100% {
    height: 5px;
    transform: translateY(0px);
    background-color: <?php echo esc_html($noo_site_primary_hover_color); ?>;
  }
}

.noo-contact-form input[type="submit"]:hover,
#comments #respond .form-submit input[type="submit"]:hover,
.widget_noo_infomation .social-all a:hover, .widget_noo_infomation .social-all a:focus,
.woocommerce .products.shop-list .product .noo-action-button-shop a:hover, .woocommerce .products.shop-list .product .noo-action-button-shop a:focus,
.woocommerce table.wishlist_table tbody td.product-add-to-cart a:hover, .woocommerce table.wishlist_table tbody td.product-add-to-cart a:hover, .woocommerce table.cart tbody td.product-add-to-cart a:hover, .woocommerce table.shop_table tbody td.product-add-to-cart a:hover, .woocommerce table.wishlist_table tbody td.product-add-to-cart a:focus, .woocommerce table.wishlist_table tbody td.product-add-to-cart a:focus, .woocommerce table.cart tbody td.product-add-to-cart a:focus, .woocommerce table.shop_table tbody td.product-add-to-cart a:focus,
.woocommerce #respond input#submit:hover, .woocommerce #respond input#submit:focus,
.noo-single-product .entry-summary form.cart .button:hover, .noo-single-product .entry-summary form.cart .button:focus,
.noo-sidebar .widget_price_filter .price_slider_amount .button:hover, .noo-sidebar .widget_price_filter .price_slider_amount .button:focus,
.noo_event_slider .owl-loaded .owl-dots .owl-dot.active span:hover, .noo_event_slider .owl-loaded .owl-dots .owl-dot.active span:focus,
.noo_event_slider .owl-loaded .owl-dots .owl-dot.active span,
.posts-loop-content .loop-item-content .loop-item-action .btn:hover,
.posts-loop-content .btn-loadmore:focus, .posts-loop-content .btn-loadmore:hover,
.widget-single-class-sidebar .btn:hover,
.noo-trainer-shortcode .masonry .trainer-tag-wrap .trainer-bio .trainer-info .view-profile:hover,
.sc-noo-product-wrap .noo-product-button:hover, .sc-noo-product-wrap .noo-product-button:focus,
.sc-noo-event-slider-wrap .noo-event-slider-button:hover, .sc-noo-event-slider-wrap .noo-event-slider-button:focus,
.noo-short-intro .custom_link:hover,
.noo-contact-form-7 .wpcf7-form input[type='submit']:hover,
.our-blog-item .noo-blog-footer a:hover,
.blog-pagination .custom_link:hover,
.noo-pricetable.style-1 .button:hover,
.noo-archive-event-footer .readmore:hover, .noo-archive-event-footer .readmore:focus,
.noo_event_info .register_button:hover, .noo_event_info .register_button:focus,
.single-post .read-more:hover, .category .read-more:hover, .blog .read-more:hover, .single-post .read-more:focus, .category .read-more:focus, .blog .read-more:focus
{
	background-color: <?php echo esc_html($noo_site_primary_link_color_darken_15); ?>;
}

.pagination .page-numbers.current,
.pagination a.page-numbers:hover,
.hentry.sticky,
.woocommerce div.product .woocommerce-tabs ul.tabs li.active,
.woocommerce form.checkout_coupon .form-row-last input.button:hover, .woocommerce form.checkout_coupon .form-row-last input.button:focus,
.noo-single-product .noo-images .noo-image-slider-wrap .noo-thumbnails div.active img,
.woocommerce .button.wc-backward:hover,
.woocommerce-cart table.cart .actions .continue:hover, .woocommerce-cart table.cart .actions .button:hover,
.sc-noo-event-slider-wrap .swiper-slide .item-body .learn-more:hover, .sc-noo-event-slider-wrap .swiper-slide .item-body .learn-more:focus,
.sc-noo-event-slider-wrap .swiper-slide-active .item-body .learn-more:hover, .sc-noo-event-slider-wrap .swiper-slide-active .item-body .learn-more:focus {
	border-color: <?php echo esc_html($noo_site_primary_hover_color); ?>;
}

.noo-filters ul li a.selected:after {
  border-color: <?php echo esc_html($noo_site_primary_link_color_lighten_20); ?>;
}

.noo-class-slider-shortcode .grid .posts-loop-content .owl-theme .owl-controls .owl-page.active span {
  background-color: <?php echo esc_html($noo_site_primary_link_color_lighten_20); ?>;
}


<?php if( class_exists('Hc_Insert_Html_Widget') ) :?>

.site div.healcode .trainer_list .class_offered_link,
.site div.healcode .class_list .class_offered_link,
.site div.healcode .trainer_list .trainer_teaches_link,
.site div.healcode .class_list .trainer_teaches_link,
.site div.healcode a.hc-button, .site div.healcode input.hc-button,
.site div.healcode input[type='submit'],
.site div.healcode .week_links span a {
  background: <?php echo esc_html($noo_site_primary_hover_color); ?>;
}

.site div.healcode .trainer_list .class_offered_link:hover,
.site div.healcode .class_list .class_offered_link:hover,
.site div.healcode .trainer_list .trainer_teaches_link:hover,
.site div.healcode .class_list .trainer_teaches_link:hover,
.site div.healcode a.hc-button:hover, .site div.healcode input.hc-button:hover,
.site div.healcode input[type='submit']:hover,
.site div.healcode .week_links span a:hover {
  background: <?php echo esc_html($noo_site_primary_link_color_darken_15); ?>;
}

.site div.healcode .healcode-title-text, .site div.healcode .hc_header_time,
.site div.healcode input[type="checkbox"]:checked:before {
  color: <?php echo esc_html($noo_site_primary_hover_color); ?>;
}

.site div.healcode .healcode-title-text,
.site div.healcode .trainer_list h1.trainer_name,
.site div.healcode .class_list .class_name {
  color: <?php echo esc_html($noo_site_secondary_hover_color); ?>;
}

<?php endif;?>

/*
* Color Secondary
* ===============================
*/

.noo-responsive-schedule-wrap .res-sche-navigation .prev,
.noo-responsive-schedule-wrap .res-sche-navigation .next,
.noo-responsive-calendar-wrap .res-calendar-navigation .prev,
.noo-responsive-calendar-wrap .res-calendar-navigation .next,
button.noo_icon_menu:hover,

h3.noo-title .first-word,
#comments .comments-title,
#comments ol > li .comment-wrap .comment-block a.comment-reply-link:hover, #comments ul > li .comment-wrap .comment-block a.comment-reply-link:hover,
#comments #respond .comment-reply-title .first-word,
.noo-header .noo-top-left-widget a:focus, .noo-header .noo-top-left-widget a:hover,
.noo-header .noo-top-left-widget a:focus i, .noo-header .noo-top-left-widget a:hover i,
.noo-header .noo-top-right-widget a:focus, .noo-header .noo-top-right-widget a:hover,
.noo-header .noo-top-right-widget a:focus i, .noo-header .noo-top-right-widget a:hover i,
.noo-page-heading .page-title .first-word,
.woocommerce div.product .noo-title-shop a:hover, .woocommerce div.product .noo-title-shop a:focus,
.woocommerce .quantity .qty-decrease:focus, .woocommerce .quantity .qty-increase:focus, .woocommerce .quantity .qty:focus,
.woocommerce .quantity .qty-decrease:hover, .woocommerce .quantity .qty-increase:hover, .woocommerce .quantity .qty:hover, .woocommerce .quantity .qty-decrease:focus, .woocommerce .quantity .qty-increase:focus, .woocommerce .quantity .qty:focus,
.noo-single-product .entry-summary h1,
.noo-single-product .noo-social-share a:hover i, .noo-single-product .noo-social-share a:focus i,
.noo-single-product .noo-shop-related h3.noo-title .first-word,
.noo-sidebar h4.widget-title .first-word,
.noo_event_slider .noo-event-slider-body h4 a,
.posts-loop-content .loop-item-content .loop-item-title a,

.single-noo_class .hentry .content-header .content-title,
.single-noo_class .hentry .content-wrap blockquote,
.single-noo_class .timetable_week h4 .first-word,
.widget-popular-class .noo-slider .slider-item h5 a,
.single-noo_trainer .hentry .trainer-info .content-title,
.single-noo_trainer .trainer-content .content blockquote,
.single-noo_trainer .trainer-content .content h1, .single-noo_trainer .trainer-content .content h2, .single-noo_trainer .trainer-content .content h3, .single-noo_trainer .trainer-content .content h4, .single-noo_trainer .trainer-content .content h5, .single-noo_trainer .trainer-content .content h6,
.noo-class-slider-shortcode .grid .posts-loop-content .owl-next, .noo-class-slider-shortcode .grid .posts-loop-content .owl-prev,
.noo-class-schedule-shortcode .fc-toolbar .fc-button,
.sc-noo-product-wrap > .noo-product-head .noo-product-title .first-word,
.sc-noo-event-slider-wrap > .noo-event-slider-head .noo-event-slider-title .first-word,
.sc-noo-event-slider-wrap .swiper-button-next:before, .sc-noo-event-slider-wrap .swiper-container-rtl .swiper-button-prev:before, .sc-noo-event-slider-wrap .swiper-button-prev:before, .sc-noo-event-slider-wrap .swiper-container-rtl .swiper-button-next:before,
.noo-event-calendar-wrap .fc-toolbar button .fc-icon,
.noo-event-calendar-wrap .fc-event:hover, .noo-event-calendar-wrap .fc-event:focus,
.noo-event-calendar-wrap a.fc-more:hover, .noo-event-calendar-wrap a.fc-more:focus,
.noo-short-intro h3,
.noo-contact-form-7 .noo-theme-title span,
.noo-video h3 span,
.our-blog-item .noo-blog-meta .cats-links a,
.style_2 .our-blog-item .noo-blog-entry h3 a,
.noo-pricetable.style-2 .item-price,
.noo-single-event-head h1 a, .noo-single-event-head h3 a,
.single-post .entry-content blockquote, .category .entry-content blockquote, .blog .entry-content blockquote,
.noo-post-nav .prev-post a:hover, .noo-post-nav .next-post a:hover, .noo-post-nav .prev-post a:focus, .noo-post-nav .next-post a:focus {
	color: <?php echo esc_html($noo_site_secondary_hover_color); ?>;	
}

.noo-responsive-schedule-wrap .res-sche-navigation .prev:focus,
.noo-responsive-schedule-wrap .res-sche-navigation .next:focus,
.noo-responsive-schedule-wrap .res-sche-navigation .prev:hover,
.noo-responsive-schedule-wrap .res-sche-navigation .next:hover,
.noo-responsive-calendar-wrap .res-calendar-navigation .prev:focus,
.noo-responsive-calendar-wrap .res-calendar-navigation .next:focus,
.noo-responsive-calendar-wrap .res-calendar-navigation .prev:hover,
.noo-responsive-calendar-wrap .res-calendar-navigation .next:hover,
.noo-info-wrap .icon,
.noo-video .noo-control-video,
.yith-wcwl-add-to-wishlist a:hover, .yith-wcwl-add-to-wishlist a:focus,
.yith-wcwl-add-to-wishlist .yith-wcwl-wishlistexistsbrowse a:hover, .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistaddedbrowse a:hover, .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistexistsbrowse a:focus, .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistaddedbrowse a:focus,
.woocommerce .products div.product .noo-action-button-shop a:hover, .woocommerce .products div.product .noo-action-button-shop a:focus,
.woocommerce span.onsale,
.woocommerce .cart .button:hover, .woocommerce .cart input.button:hover, .woocommerce .cart .button:focus, .woocommerce .cart input.button:focus,
.woocommerce #payment #place_order:hover, .woocommerce #payment #place_order:focus,
.noo-sidebar .widget_price_filter .ui-slider .ui-slider-handle,
.noo-sidebar .widget_price_filter .ui-slider-horizontal .ui-slider-range,
.noo-class-slider-shortcode .grid .posts-loop-content .owl-next:hover,
.noo-class-slider-shortcode .grid .posts-loop-content .owl-prev:hover,
.noo-class-schedule-shortcode .fc-toolbar .fc-button:focus, .noo-class-schedule-shortcode .fc-toolbar .fc-button:hover,
.noo-class-schedule-shortcode .fc-view .fc-head table .fc-widget-header,
.noo-class-schedule-shortcode .fc-view .fc-body .fc-time-grid .fc-event .fc-content .fc-category,
.noo-class-schedule-shortcode .fc-month-view .fc-today.fc-day-number span,
.noo-class-schedule-shortcode .fc-month-view .fc-body .fc-popover .fc-header,
.sc-noo-event-slider-wrap .swiper-slide .item-body,
.sc-noo-event-slider-wrap .swiper-slide-active .item-body,
.sc-noo-event-slider-wrap .swiper-button-next:hover, .sc-noo-event-slider-wrap .swiper-container-rtl .swiper-button-prev:hover, .sc-noo-event-slider-wrap .swiper-button-prev:hover, .sc-noo-event-slider-wrap .swiper-container-rtl .swiper-button-next:hover, .sc-noo-event-slider-wrap .swiper-button-next:focus, .sc-noo-event-slider-wrap .swiper-container-rtl .swiper-button-prev:focus, .sc-noo-event-slider-wrap .swiper-button-prev:focus, .sc-noo-event-slider-wrap .swiper-container-rtl .swiper-button-next:focus,
.sc-noo-event-slider-wrap .swiper-container-rtl .swiper-button-next,
.sc-noo-event-slider-wrap .swiper-container-rtl .swiper-button-prev,
.noo-event-calendar-wrap .fc-popover .fc-header,
.noo-event-calendar-wrap .fc-toolbar button:hover, .noo-event-calendar-wrap .fc-toolbar button:focus,
.noo-event-calendar-wrap .fc-view table .fc-head,
.noo-event-calendar-wrap .fc-today.fc-state-highlight,
.noo-video .thumb_image .noo-control-video,
.noo-pricetable.style-2 .noo-pricetable-header, .noo-pricetable.style-2 .button,
.noo-featured-event .is_featured,
.noo-find-event-wrap input[type="submit"] {
	background-color: <?php echo esc_html($noo_site_secondary_hover_color); ?>;	
}

.sc-noo-event-slider-wrap .swiper-button-prev:hover, .sc-noo-event-slider-wrap .swiper-container-rtl .swiper-button-next:hover, .sc-noo-event-slider-wrap .swiper-button-prev:focus, .sc-noo-event-slider-wrap .swiper-container-rtl .swiper-button-next:focus,
.sc-noo-event-slider-wrap .swiper-button-next:hover, .sc-noo-event-slider-wrap .swiper-container-rtl .swiper-button-prev:hover, .sc-noo-event-slider-wrap .swiper-button-next:focus, .sc-noo-event-slider-wrap .swiper-container-rtl .swiper-button-prev:focus,
.noo-pricetable.style-2 .button:hover,
.noo-find-event-wrap input[type="submit"]:hover {
	background-color: <?php echo esc_html($noo_site_secondary_link_color_darken_15); ?>;
}

.noo-responsive-schedule-wrap .res-sche-navigation .prev, .noo-responsive-schedule-wrap .res-sche-navigation .next,
.noo-responsive-calendar-wrap .res-calendar-navigation .prev, .noo-responsive-calendar-wrap .res-calendar-navigation .next,
.noo-class-slider-shortcode .grid .posts-loop-content .owl-next, .noo-class-slider-shortcode .grid .posts-loop-content .owl-prev,
.noo-class-schedule-shortcode .fc-toolbar .fc-button,
.noo-class-schedule-shortcode .fc-view .fc-head td,
.sc-noo-event-slider-wrap .swiper-button-next, .sc-noo-event-slider-wrap .swiper-container-rtl .swiper-button-prev, .sc-noo-event-slider-wrap .swiper-button-prev, .sc-noo-event-slider-wrap .swiper-container-rtl .swiper-button-next,
.noo-event-calendar-wrap .fc-toolbar button {
	border-color: <?php echo esc_html($noo_site_secondary_hover_color); ?>;	
}

.noo-event-calendar-wrap .fc-widget-header {
	border-color: <?php echo esc_html($noo_site_secondary_link_color_darken_15); ?> !important;	
}

.noo-gallery-inner .noo-gallery-content {
	background-color: <?php echo esc_html($noo_site_secondary_link_color_fade_80); ?>;
}

.noo-instagram ul li a:before {
  background-color: <?php echo esc_html($noo_site_secondary_link_color_fade_70); ?>;
}

.noo-event-calendar-wrap th.fc-widget-header {
	border-color: <?php echo esc_html($noo_site_secondary_link_color_fade_darken_25); ?> !important;
}

.noo-video .noo-control-video,
.noo-video .thumb_image .noo-control-video {
	-webkit-box-shadow: 0 0 0 8px <?php echo esc_html($noo_site_secondary_link_color_fade_20); ?>;
	box-shadow: 0 0 0 8px <?php echo esc_html($noo_site_secondary_link_color_fade_20); ?>;
}

.noo-video .noo-control-video:hover,
.noo-video .thumb_image .noo-control-video:hover {
	-webkit-box-shadow: 0 0 0 3px <?php echo esc_html($noo_site_secondary_link_color_fade_20); ?>;
	box-shadow: 0 0 0 3px <?php echo esc_html($noo_site_secondary_link_color_fade_20); ?>;
}

.woocommerce .products div.product .noo-action-button-shop a:hover,
.woocommerce .products div.product .noo-action-button-shop a:focus {
	-webkit-box-shadow: 0px 0px 0 5px <?php echo esc_html($noo_site_secondary_link_color_fade_35); ?>;
	box-shadow: 0px 0px 0 5px <?php echo esc_html($noo_site_secondary_link_color_fade_35); ?>;
}

.single-noo_trainer .noo-progress-bar .noo-single-bar .noo-bar {
	background-color: <?php echo esc_html($noo_site_secondary_link_color_lighten_15); ?>;
}

.single-post .content-featured .content-thumb:before,
.category .content-featured .content-thumb:before,
.blog .content-featured .content-thumb:before {
	background-color: <?php echo esc_html($noo_site_secondary_link_color_fade_30); ?>;
}

/* Style home 1, 2 ,3 */

.noo-theme-wraptext.center.style-1 .wrap-title .noo-theme-title,
.noo-theme-wraptext.center.style-2 .wrap-title .noo-theme-title,
.noo-theme-wraptext.center.style-3 .wrap-title .noo-theme-title,
.noo-icon-wrap.style-3 .noo-icon-body .icon-title,
.noo-class-slider-shortcode.style2 .grid .posts-loop-content .owl-prev,
.noo-class-slider-shortcode.style2 .grid .posts-loop-content .owl-next,
.noo-class-schedule-shortcode.style_title-1 .noo-theme-wraptext .wrap-title .noo-theme-title,
.noo-class-schedule-shortcode.style_title-2 .noo-theme-wraptext .wrap-title .noo-theme-title,
.noo-class-slider-shortcode.style2 .posts-loop-content .loop-item-content .loop-item-title a:hover,
.noo-class-slider-shortcode.style2 .posts-loop-content .loop-item-content .loop-item-title a,
.noo-trainer-shortcode .noo-theme-wraptext .wrap-title .noo-theme-title,
.noo-trainer-shortcode .style_title-1.noo-theme-wraptext .wrap-title .noo-theme-title,
.noo-trainer-shortcode .style_title-2.noo-theme-wraptext .wrap-title .noo-theme-title,
.noo-trainer-shortcode .slider .trainer-tag-wrap .trainer-bio:hover .trainer-info a,
.noo-trainer-shortcode .slider .trainer-tag-wrap .trainer-bio:hover .trainer-info .trainer-category a,
.noo-trainer-shortcode .slider .trainer-tag-wrap .owl-buttons .owl-prev,
.noo-trainer-shortcode .slider .trainer-tag-wrap .owl-buttons .owl-next,
.shortcode-title-gallery .style_title-1.noo-theme-wraptext .wrap-title .noo-theme-title,
.shortcode-title-gallery .style_title-2.noo-theme-wraptext .wrap-title .noo-theme-title,
.shortcode-title-gallery .style_title-3.noo-theme-wraptext .wrap-title .noo-theme-title,
.shortcode-noo-recent-new .noo-theme-wraptext .wrap-title .noo-theme-title,
.shortcode-noo-recent-new .noo-theme-wraptext.style_2 .wrap-title .noo-theme-title .first-word,
.shortcode-noo-recent-new .noo-theme-wraptext.style_3 .wrap-title .noo-theme-title .first-word,
.sc-noo-product-wrap .noo-theme-wraptext.grid .noo-theme-title,
.sc-noo-product-wrap .noo-theme-wraptext.grid .noo-theme-title .first-word,
.sc-noo-product-wrap .style-1.noo-theme-wraptext .wrap-title .noo-theme-title,
.sc-noo-product-wrap .style-2.noo-theme-wraptext .wrap-title .noo-theme-title,
.sc-noo-product-wrap .style-2.noo-theme-wraptext .wrap-title .noo-theme-title .first-word,
.noo-class-slider-shortcode.style1 .noo-theme-wraptext .wrap-title .noo-theme-title,
.noo-class-slider-shortcode.style2 .noo-theme-wraptext .wrap-title .noo-theme-title,
.noo-class-grid-shortcode .noo-theme-wraptext .wrap-title .noo-theme-title,
.noo-contact-form-7.style-default .noo-theme-title,
.noo_sh_blog_wraper .noo-theme-wraptext .noo-theme-title,
.sc-noo-event-slider-wrap .noo-theme-wraptext .wrap-title .noo-theme-title
{
  color:<?php echo esc_html($noo_site_secondary_hover_color); ?>; 
}
.sc-noo-product-wrap .noo-theme-wraptext.grid .wrap-title .noo-theme-title .first-word
{
  color:<?php echo esc_html($noo_site_secondary_hover_color); ?> !important; 
}

.noo-theme-wraptext.center.style-1 .wrap-title .noo-theme-title .first-word,
.noo-theme-wraptext.center.style-2 .wrap-title .noo-theme-title .first-word,
.noo-theme-wraptext.center.style-3 .wrap-title .noo-theme-title .first-word,
.noo-class-slider-shortcode.style2 .posts-loop-content .loop-item-content .content-meta i,
.style_title-2.noo-theme-wraptext .wrap-title .noo-theme-title .first-word,
.noo-class-slider-shortcode.style2 .grid .posts-loop-content .owl-prev:hover,
.noo-class-slider-shortcode.style2 .grid .posts-loop-content .owl-next:hover,
.noo-trainer-shortcode .slider .trainer-tag-wrap .owl-nav .owl-prev:hover span,
.noo-trainer-shortcode .slider .trainer-tag-wrap .owl-nav .owl-next:hover span,
.shortcode-title-gallery .style_title-1.noo-theme-wraptext .wrap-title .noo-theme-title .first-word,
.shortcode-title-gallery .style_title-2.noo-theme-wraptext .wrap-title .noo-theme-title .first-word,
.shortcode-title-gallery .style_title-3.noo-theme-wraptext .wrap-title .noo-theme-title .first-word,
.wpb_wrapper .noo-filters ul li a.selected,
.wpb_wrapper .noo-filters ul li a:hover, .wpb_wrapper .noo-filters ul li a:focus,
.recent-new-wrap .noo-blog-meta .comment-meta span i,
.recent-new-wrap .noo-blog-footer .noo-readmore,
.recent-new-wrap .owl-nav .owl-prev:hover span ,
.recent-new-wrap .owl-nav .owl-next:hover span ,
.shortcode-noo-recent-new .noo-theme-wraptext.style_1 .wrap-title .noo-theme-title .first-word,
.noo-instagram-wrap .noo-instagram .instagram-info .instagram-image-around:after,
.tp-mask-wrap .slider-button:hover,
.noo-class-slider-shortcode.style1 .noo-theme-wraptext .wrap-title .noo-theme-title .first-word,
.noo-class-slider-shortcode.style2 .noo-theme-wraptext .wrap-title .noo-theme-title .first-word,
.noo-class-schedule-shortcode.style_title-1 .noo-theme-wraptext .wrap-title .noo-theme-title .first-word,
.noo-class-schedule-shortcode.style_title-2 .noo-theme-wraptext .wrap-title .noo-theme-title .first-word,
.sc-noo-product-wrap .style-1.noo-theme-wraptext .wrap-title .noo-theme-title .first-word,
.noo-contact-form-7.style-default .noo-theme-title .first-word,
.noo_sh_blog_wraper .noo-theme-wraptext .noo-theme-title .first-word,
.noo-trainer-shortcode .noo-theme-wraptext .wrap-title .noo-theme-title .first-word,
.sc-noo-event-slider-wrap .noo-theme-wraptext .wrap-title .noo-theme-title .first-word,
.masonry .trainer-tag-wrap .trainer-bio .trainer-info .trainer-category a,
.masonry .trainer-tag-wrap .trainer-bio .trainer-info .trainer-category a:hover
{
  color: <?php echo esc_html($noo_site_primary_hover_color); ?>;
}
.noo-filters ul li a.selected,
.noo-filters ul li a:hover
{
  color: <?php echo esc_html($noo_site_primary_hover_color);  ?> !important;
}
.noo-trainer-shortcode .slider .trainer-tag-wrap .trainer-bio:hover .trainer-info,
.noo-class-slider-shortcode.style1 .grid .posts-loop-content .owl-dots .owl-dot.active,
.noo-class-slider-shortcode.style2 .grid .posts-loop-content .owl-dots .owl-dot.active,
.recent-new-wrap .owl-dots .owl-dot.active,
.sc-noo-product-wrap .slider-mansory .noo-product-wraper .owl-dots .owl-dot.active,
.noo-trainer-shortcode .slider .trainer-tag-wrap .owl-dots .owl-dot.active,
.noo-contact-form-7.style-2 .wpcf7-form input[type='submit'],
.noo-contact-form-7.style-default .wpcf7-form input[type='submit'],
.noo-contact-form-7.style-default .wpcf7-form input[type='submit']:hover,
.ares .tp-bullet.selected, 
.ares .tp-bullet:hover,
.noo-sidebar-wrap .trainer-tag-wrap .trainer-bio .trainer-info .view-profile,
.widget-single-class-sidebar .button,
.masonry .trainer-tag-wrap .trainer-bio .trainer-info .view-profile
{
  background-color:<?php echo esc_html($noo_site_primary_hover_color); ?>;
}

.noo-sidebar-wrap .trainer-tag-wrap .trainer-bio .trainer-info .view-profile:hover,
.widget-single-class-sidebar .button:hover,
.masonry .trainer-tag-wrap .trainer-bio .trainer-info .view-profile:hover
{
  background-color:<?php echo esc_html($noo_site_primary_hover_color); ?>;
}