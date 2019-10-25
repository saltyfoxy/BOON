/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you require will output into a single css file (app.scss in this case)
require('../css/app.scss');


require('@fortawesome/fontawesome-free/css/all.min.css');
require('@fortawesome/fontawesome-free/js/all.js');

// Need jQuery? Install it with "yarn add jquery", then uncomment to require it.
// const $ = require('jquery');

console.log('Hello Webpack Encore! Edit me in assets/js/app.js');


const $ = require('jquery');


$(document).ready(function () {

    $('.cart-div').click(function (e) {

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
            type:"DELETE",
            url: url,
        })
        location.reload()

    })
});

$(function(){
    $(".cart-div").click(function(){
        $(".far ").toggleClass("fas");
    });
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




