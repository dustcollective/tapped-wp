// Overlay
$(window).load(function() {
	$('body.home #overlay-preload, body.page-id-201 #overlay-preload').delay(600).fadeOut('slow');
});
$(window).load(function() {
	$('#overlay-preload').fadeOut('slow');
});

// Mobile menu slide
$('.mobile-navigation .menu-holder').click(function() {
	$('.mobile-navigation-children').toggle();
});

// Set height of captions on journal page
/*
$(window).load(function() {
$('.each-journal-image-container').each(function() {
    var h = $(this).height()-60;
    $(this).find('.each-journal-image-caption').height(h);
});
});
*/

// Animations
$('.content-area').addClass('animated fadeInLeftBig');
$('.each-journal-image-caption').addClass('animated fadeInLeftBig');
$('.each-journal-image').addClass('animated fadeInLeftBig');
$('.each-brew-container').addClass('animated fadeInLeftBig');
$('.each-brew-image').addClass('animated fadeInLeftBig');
$('.each-journal-text-only').addClass('animated fadeInLeftBig');
$('.each-story-container').addClass('animated fadeInLeftBig');

// Age restrictions
$(document).ready(function() {
	$('#av-overlay h1').after('<h2>You must be of legal drinking age in your country to enter this website. By entering this site you agree to our <span class="privacy-modal">privacy statement</span>.</h2>');
	$('#av-overlay p.submit').before('<p class="age-disclaimer">The Tapped Brew Co. promotes responsible and moderate drinking, visit <a href="http://www.drinkaware.co.uk" target="_blank">drinkaware.co.uk</a> for the facts. Please drink responsibly. Over 18s only (UK).</p>');
});

// Remove empty paragraphs
$('p').each(function() {
	var $this = $(this);
	if ($this.html().replace(/\s|&nbsp;/g, '').length == 0) $this.remove();
});

// Privacy statement
$(document).ready(function() {
$('.privacy-modal').click(function() {    
	$('.privacy-statement-pre-age').slideDown('fast');
});
$('.privacy-statement-pre-age span').click(function() {    
	$('.privacy-statement-pre-age').slideUp('fast');
});
});

// Ajax subscribe form
$(function () {
    $('#subForm').submit(function (e) {
        e.preventDefault();
        $.getJSON(
        this.action + "?callback=?",
        $(this).serialize(),
        function (data) {
            if (data.Status === 400) {
                alert("Error: " + data.Message);
            } else { // 200
                $('.confirmation-message').fadeIn();
                $('#subForm').find('input[type=text]').val('');
                setTimeout(function(){ $('.confirmation-message').fadeOut('slow'); }, 1500);
            }
        });
    });
});

// Fancybox
$(document).ready(function() {
	$('.fancybox').fancybox();
});

$(document).ready(function() {
    var myColors = [
        '#141b41', '#008552', '#c03236', '#be863c'
    ];
    var i = 0;
    $('.each-journal-text-only').each(function() {
        $(this).css('background-color', myColors[i]);
        i = (i + 1) % myColors.length;
    });
});