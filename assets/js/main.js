"use strict";
ready(function () {
    var hamburgerButton = document.getElementById('hamburger');
    var mainNavigation = document.getElementById('mainnav');
    var edge = document.querySelectorAll('.egde');
    /**
     * Navigation in Mobile ein und ausblenden
     */
    hamburgerButton.addEventListener('click', showMenu);

    function showMenu() {
        mainNavigation.classList.toggle('hidden');
    }

    function showMoreContent(e) {
      e.target.parentElement.children.item(1).classList.toggle('visible-content');
      e.target.parentElement.children.item(2).classList.toggle('visible-content');
    }

    edge.forEach(function(buttonEgde) {
        buttonEgde.addEventListener('click', showMoreContent);
    });


});
