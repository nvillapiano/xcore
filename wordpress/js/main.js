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
// Contact trigger
function contactTrigger() {
    $('.contact-trigger, .contact .x-close, #contact-us .button').click( function() {
        $('body, html').toggleClass('overflow');
        $('.modal.contact').toggleClass('active');
        $('.contact span:first-of-type input').focus();
    })
}
// Search trigger
function searchTrigger() {
    $('.search-trigger, .search .x-close').click( function() {
        $('body, html').toggleClass('overflow');
        $('.modal.search').toggleClass('active');
        $('.search input').focus();
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
