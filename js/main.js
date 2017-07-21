// main.js

// Fade in on page load
function fadeIn() {
    $(document).ready( function() {
        $('body').removeClass('fade');
    })
}
// Smooth scrolling for jump links (nabbed from css-tricks.com)
function smoothScrolling() {
    $(' a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top - 50
                }, 800);
                return false;
            }
        }
    });
}

fadeIn();
smoothScrolling();
