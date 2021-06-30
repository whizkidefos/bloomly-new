//Navigation
$(document).ready(function () {
	$(".burger").click(function () {
		$(".burger").toggleClass("open");
		$(".mobile-nav-content ").slideToggle('slow');
	});
});

//Initialise Rellax
var rellax = new Rellax(".rellax");

// Banner Slide
var banner = new Swiper(".banner-container", {
	spaceBetween: 30,
	effect: "fade",
	loop: true,
	pagination: {
		el: ".banner-pagination",
		clickable: true,
	},
	autoplay: {
		delay: 5000,
	},
	navigation: {
		nextEl: ".banner-button-next",
		prevEl: ".banner-button-prev",
	},
});

// Our Tests Slide
var tests = new Swiper(".tests-container", {
	spaceBetween: 10,
	slidesPerView: 1,
	breakpoints: {
		640: {
			slidesPerView: 1,
			spaceBetween: 20,
		},
		768: {
			slidesPerView: 2,
			spaceBetween: 20,
		},
		1024: {
			slidesPerView: 3,
			spaceBetween: 20,
		},
	},
	navigation: {
		nextEl: ".tests-button-next",
		prevEl: ".tests-button-prev",
	},
});

// News Slide
var news = new Swiper(".news-container", {
	slidesPerView: 1,
	spaceBetween: 20,
	loop: true,
	pagination: {
		el: ".news-pagination",
		type: "progressbar",
		clickable: true,
	},
	navigation: {
		nextEl: ".news-button-next",
		prevEl: ".news-button-prev",
	},
	breakpoints: {
		640: {
			slidesPerView: 2,
			spaceBetween: 20,
		},
		768: {
			slidesPerView: 3,
			spaceBetween: 20,
		},
		1024: {
			slidesPerView: 4,
			spaceBetween: 20,
		},
	},
});

// Thoughts Slide
var thoughts = new Swiper(".thoughts-container", {
	spaceBetween: 30,
	loop: true,
	autoplay: {
	    delay: 5000
	},
	speed: 2000,
	navigation: {
		nextEl: ".thoughts-button-next",
		prevEl: ".thoughts-button-prev",
	},
});

// Gallery Slide
var gallery = new Swiper(".gallery-container", {
	spaceBetween: 30,
	loop: true,
	pagination: {
	el: '.gallery-pagination',
	type: 'bullets',
	clickable: true,
	},
	autoplay: {
	    delay: 3000
	},
	speed: 700,
	navigation: {
		nextEl: ".gallery-button-next",
		prevEl: ".gallery-button-prev",
	},
});

//TABS

//Add to cart button
jQuery(document).ready(function($) {
    $('.single_add_to_cart_button').on('click', function(e){ 
    e.preventDefault();
    $thisbutton = $(this),
                $form = $thisbutton.closest('form.cart'),
                id = $thisbutton.val(),
                product_qty = $form.find('input[name=quantity]').val() || 1,
                product_id = $form.find('input[name=product_id]').val() || id,
                variation_id = $form.find('input[name=variation_id]').val() || 0;
    var data = {
            action: 'ql_woocommerce_ajax_add_to_cart',
            product_id: product_id,
            product_sku: '',
            quantity: product_qty,
            variation_id: variation_id,
        };
    $.ajax({
            type: 'post',
            url: wc_add_to_cart_params.ajax_url,
            data: data,
            beforeSend: function (response) {
                $thisbutton.removeClass('added').addClass('loading');
            },
            complete: function (response) {
                $thisbutton.addClass('added').removeClass('loading');
            }, 
            success: function (response) { 
                if (response.error & response.product_url) {
                    window.location = response.product_url;
                    return;
                } else { 
                    $(document.body).trigger('added_to_cart', [response.fragments, response.cart_hash, $thisbutton]);
                } 
            }, 
        }); 
     }); 
});
