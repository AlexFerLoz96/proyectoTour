// Poner prioridad a las imagenes del carrusel que esten subidas en nuestro servidor.

$(function () {
    var itemcarrusel = $('.b1-slide').length;
    if (itemcarrusel > 1) {
        $('.b1').removeClass('carrusel-desktop');
        $('.b1-slider').addClass('owl-carousel');
        $('.b1-slider').addClass('b1-owlcarousel');

        $('.b1-owlcarousel').owlCarousel({
            loop: true,
            margin: 0,
            nav: true,
            items: 1,
            smartSpeed: 1000,
            autoplay: true,
            animateIn: 'fadeIn',
            animateOut: 'fadeOut',
            responsive: {
                0: {
                    items: 1
                }
            }

        });
    }
});
window.addEventListener('load', function () {
    var pager_items = document.querySelectorAll('.b1 .owl-dot'),
        pager_items_cant = document.querySelectorAll('.b1 .owl-dot').length;
    for (var i = 0; i < pager_items.length; i++) {
        var elemento = document.createElement("span"),
            child = i + 1;
        if (pager_items_cant <= 9) {
            var cant = document.createTextNode("0" + child + "/0" + pager_items_cant);
            pager_items[i].appendChild(elemento);
        }
        else if (pager_items_cant >= 10) {
            var cant = document.createTextNode(child + "/" + pager_items_cant);

            pager_items[i].appendChild(elemento);
        }
        // console.log(pager_items[i])
    }
    // console.log(pager_items)
}, false)