// Navbar

$(function () {
    $(document).scroll(function () {
        var $nav = $(".navbar");
        $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
    });
});



// Scrolling

$(function() {
    /**
    * Smooth scrolling to page anchor on click
    **/
    $("a[href*='#']:not([href='#'])").click(function() {
        if (
            location.hostname == this.hostname
            && this.pathname.replace(/^\//,"") == location.pathname.replace(/^\//,"")
        ) {
            var anchor = $(this.hash);
            anchor = anchor.length ? anchor : $("[name=" + this.hash.slice(1) +"]");
            if ( anchor.length ) {
                $("html, body").animate( { scrollTop: anchor.offset().top }, 1000);
            }
        }
    });
});

$(function() {
    /**
    * Smooth scrolling to the top of page
    **/
    $("html, body").animate({scrollTop : 0}, 500);
});



// To not refresh the page

$( "a" ).click(function( event ) {
    event.preventDefault();
});



// Open in a new tab

function openInNewTab(url) {
    var win = window.open(url, '_blank');
    win.focus();
}