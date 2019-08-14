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



// Switch button menus

let buttonAlcohols = document.querySelector('.alcohols')
let alcohols = document.querySelector('.drink')
let buttonMeals = document.querySelector('.meals')
let meals = document.querySelector('.eat')

function switchAlcohols() {
    meals.classList.add('switch')
    alcohols.classList.remove('switch')
}
function switchMeals() {
    alcohols.classList.add('switch')
    meals.classList.remove('switch')
}

buttonAlcohols.addEventListener('click', switchAlcohols)
buttonMeals.addEventListener('click', switchMeals)




// Modale 

$(document).ready(function(){

    loadGallery(true, 'a.thumbnail');

    //This function disables buttons when needed
    function disableButtons(counter_max, counter_current){
        $('#show-previous-image, #show-next-image').show();
        if(counter_max == counter_current){
            $('#show-next-image').hide();
        } else if (counter_current == 1){
            $('#show-previous-image').hide();
        }
    }

    /**
     *
     * @param setIDs        
     * @param setClickAttr  
     */

    function loadGallery(setIDs, setClickAttr){
        var current_image,
            selector,
            counter = 0;

        $('#show-next-image, #show-previous-image').click(function(){
            if($(this).attr('id') == 'show-previous-image'){
                current_image--;
            } else {
                current_image++;
            }

            selector = $('[data-image-id="' + current_image + '"]');
            updateGallery(selector);
        });

        function updateGallery(selector) {
            var $sel = selector;
            current_image = $sel.data('image-id');
            $('#image-gallery-caption').text($sel.data('caption'));
            $('#image-gallery-title').text($sel.data('title'));
            $('#image-gallery-image').attr('src', $sel.data('image'));
            disableButtons(counter, $sel.data('image-id'));
        }

        if(setIDs == true){
            $('[data-image-id]').each(function(){
                counter++;
                $(this).attr('data-image-id',counter);
            });
        }
        $(setClickAttr).on('click',function(){
            updateGallery($(this));
        });
    }
});

