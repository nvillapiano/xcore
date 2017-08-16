// main.js

// Fade in on page load
function fadeIn() {
    $(document).ready( function() {
        $('body').removeClass('fade');
    })
}
// Smooth scrolling for jump links (nabbed from css-tricks.com)
function smoothScrolling() {
    if ($(window).width() < 768) {
        $(' a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top - 66
                    }, 800);
                    return false;
                }
            }
        });
    }
    else {
        $(' a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 800);
                    return false;
                }
            }
        });
    }
}
// Contact trigger
function contactTrigger() {
    $('.contact-trigger, .contact .x-close, #contact-us .button').click( function() {
        $('.modal.contact').toggleClass('active');

        if ($(window).width() > 768) {
            $('.contact input[name="user-name"]').focus();
        }

        // Overflow
        if ( $('body, html').hasClass('overflow') === false ) {
            $('body, html').addClass('overflow');
        } else {
            $('body, html').removeClass('overflow');
            //
            $('.links-wrapper').removeClass('show');
            $('.hamburger').removeClass('x-close');
            setTimeout( function() {
                $('.hamburger').removeClass('contract');
            }, 300)
        }
    })
}
// Search trigger
function searchTrigger() {
    $('.search-trigger, .search .x-close').click( function() {
        $('.modal.search').toggleClass('active');

        if ($(window).width() > 768) {
            $('.search input').focus();
        }

        // Overflow
        if ( $('body, html').hasClass('overflow') === false ) {
            $('body, html').addClass('overflow');
        } else {
            $('body, html').removeClass('overflow');
            //
            $('.links-wrapper').removeClass('show');
            $('.hamburger').removeClass('x-close');
            setTimeout( function() {
                $('.hamburger').removeClass('contract');
            }, 300)
        }
    })
}
// Search funtionality
function search() {
    // Declare variables
    var input;
    var filter;
    var ul;
    var li;
    var a;
    var i;
    input = document.getElementById('searchInput');
    filter = input.value.toUpperCase();
    ul = document.getElementById("searchUl");
    li = ul.getElementsByTagName('li');

    // Loop through all list items, and show those who match the search query
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "block";
            console.log('success');
        } else {
            li[i].style.display = "none";
            console.log('fail');
        }
    }
}
// Hamburger
function hamburger() {
    $('.hamburger').click( function() {
        $('.links-wrapper').toggleClass('show');
        if ( $('.hamburger').hasClass('x-close') === false  ) {
            $('.hamburger').addClass('contract');
            setTimeout( function() {
                $('.hamburger').addClass('x-close');
            }, 300)
        } else {
            $('.hamburger').removeClass('x-close');
            setTimeout( function() {
                $('.hamburger').removeClass('contract');
            }, 300)
        }
        // Overflow
        if ( $('body, html').hasClass('overflow') === false ) {
            $('body, html').addClass('overflow');
            console.log('hamburger if');
        } else {
            $('body, html').removeClass('overflow');
            console.log('hamburger else');
        }
    })

}
// Team member modal
function teamMemberModal() {
    $('.team-member-trigger').click( function() {
        var slug = this.id;
        console.log('slug:', slug);
        $('.' + slug).addClass('active');
    })
    //
    $('.team-member .x-close').click( function() {
        $(this).closest('section').removeClass('active');
    })
}
//
//
//
$('.search input').keypress( function() {
    search();
});
fadeIn();
smoothScrolling();
contactTrigger();
searchTrigger();
hamburger();
teamMemberModal();

// Slider
$(document).ready(function(){
  $('.bxslider').bxSlider({
    auto: true
  });
});


// Hide Header on on scroll down (grabbed from https://codepen.io/viriava/pen/LxLYRP)
var didScroll;
var lastScrollTop = 0;
var delta = 5;
var navbarHeight = $('header').outerHeight();

$(window).scroll(function(event){
    didScroll = true;
});

setInterval(function() {
    if (didScroll) {
        hasScrolled();
        didScroll = false;
    }
}, 250);

function hasScrolled() {
    var st = $(this).scrollTop();

    // Make sure they scroll more than delta
    if(Math.abs(lastScrollTop - st) <= delta)
        return;

    // If they scrolled down and are past the navbar, add class .nav-up.
    // This is necessary so you never see what is "behind" the navbar.
    if (st > lastScrollTop && st > navbarHeight){
        // Scroll Down
        $('header').removeClass('nav-down').addClass('nav-up');
    } else {
        // Scroll Up
        if(st + $(window).height() < $(document).height()) {
            $('header').removeClass('nav-up').addClass('nav-down');
        }
    }

    lastScrollTop = st;
}
