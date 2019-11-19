/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you require will output into a single css file (app.scss in this case)
require('../css/app.scss');
require('../js/bootstrap-carousel');
require('@fortawesome/fontawesome-free/css/all.min.css');
require('@fortawesome/fontawesome-free/js/all.js');

// Need jQuery? Install it with "yarn add jquery", then uncomment to require it.
// const $ = require('jquery');

console.log('Hello Webpack Encore! Edit me in assets/js/app.js');


const $ = require('jquery');

// FAVORITE STORE 


$(document).ready(function () {

    $('.favorite-store-button').click(function (e) {

        let id = parseInt(e.currentTarget.id);
        console.log(id);
        let url = '/stores/' + id + '/favorite';
        console.log(url);

        fetch(url)
            .then(response => response.json())
            .then(json => {
                console.log(json);
                location.reload()
            });
    });

});

$(document).ready(function () {
    $('.delete-store-div').click(function (e) {
        let id = parseInt(e.currentTarget.id);
        let url = '/stores/' + id + '/delete';

        $.ajax({
            type: "DELETE",
            url: url,
        })
        location.reload()

    })
});

// FAVORITE PRODUCT

$(document).ready(function () {

    $('.favorite-product-button').click(function (e) {

        let id = parseInt(e.currentTarget.id);
        console.log(id);
        let url = '/products/' + id + '/favorite';
        console.log(url);

        fetch(url)
            .then(response => response.json())
            .then(json => {
                console.log(json);
                location.reload()
            });
    });

});

$(document).ready(function () {
    $('.delete-product-div').click(function (e) {
        let id = parseInt(e.currentTarget.id);
        let url = '/products/' + id + '/delete';

        $.ajax({
            type: "DELETE",
            url: url,
        })
        location.reload()

    })
});


const navSlide = () => {
    const burger = document.querySelector('.burger');
    const nav = document.querySelector('.navigation-links');
    const navLinks = document.querySelectorAll('.navigation-links li');
//Toggle nav

    burger.addEventListener('click', () => {
        nav.classList.toggle('nav-active');

        //Animate links
        navLinks.forEach((link, index) => {
            if (link.style.animation) {
                link.style.animation = ''
            } else {
                link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 1.5}s`;
            }
        });

        //Bur   ger Animation
        burger.classList.toggle('toggle');
    });

}

navSlide();


// Returns a function, that, as long as it continues to be invoked, will not
// be triggered. The function will be called after it stops being called for
// N milliseconds. If `immediate` is passed, trigger the function on the
// leading edge, instead of the trailing.
function debounce(func, wait, immediate) {
    var timeout;
    return function() {
        var context = this, args = arguments;
        var later = function() {
            timeout = null;
            if (!immediate) func.apply(context, args);
        };
        var callNow = immediate && !timeout;
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
        if (callNow) func.apply(context, args);
    };
};

/**************************** *****************************/
/****************      AJAX SEARCHBAR TRIPS     *******************/
/**************************** *****************************/

let rechercheAjax =
    function () {
        let recherche = $('#search').val();
        $.ajax({
            type: "GET",
            url: "/search-stores",
            dataType: "json",
            data: {
                recherche: recherche,
            },
            success: function (stores) {
                $('.card-store').addClass('d-none');
                stores.forEach(function (store) {
                    $('#store-' + store.id).removeClass('d-none');
                })
            }
        });
    };

$('#search').keyup(
    debounce(rechercheAjax, 250));


document.getElementById("submit-search").addEventListener("click", function (event) {
    event.preventDefault()
});

////////// CAROUSEL STORE DETAIL WITH FLEXSLIDER /////////////





