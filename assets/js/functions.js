"use strict";

(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/de_DE/sdk.js#xfbml=1&version=v2.8";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

ready(function () {
    var hamburgerButton = document.getElementById('hamburger');
    var mainNavigation = document.getElementById('mainnav');

    hamburgerButton.addEventListener('click',showMenu);

    function showMenu() {
        mainNavigation.style.left = 0;
    }

});
