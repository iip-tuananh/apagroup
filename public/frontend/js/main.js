$(document).ready(function() {
    appButton = () => {
        let has = $('.menu li:has("ul")');
        return has ?
            has.append('<button class="btn btn__toggle"></button>') :
            "";
    };

    appButton();

    onMenu = () => {
        let button = $(".btn__toggle");
        let hasMenu = $(".menu .menu__list  ul");
        button.on("click", function() {
            let __ = $(this).parent(".menu__list").children("ul");
            hasMenu.not(__).slideUp();
            button.not($(this)).removeClass("active");
            __.slideToggle();
            $(this).toggleClass("active");
        });
    };
    onMenu();

    openMenu = () => {
        $(".btn__menu").on("click", function() {
            $("body").addClass("body__hidden");
            $(".box__menu").toggleClass("active");
        });
    };
    openMenu();

    closeMenu = () => {
        let menusClass = $(".box__container");
        $(".box__menu").on("click", function(e) {
            if (
                !menusClass.is(e.target) &&
                menusClass.has(e.target).length === 0
            ) {
                $("body").removeClass("body__hidden");
                $(".box__menu").removeClass("active");
            }
        });
    };
    closeMenu();
    lineMenu = () => {
        let menuLine = $(".menu__line");
        let menuActive = $(".menu__list.active");
        let offsetWidth = menuActive[0].offsetWidth;
        let offsetLeft = menuActive[0].offsetLeft;
        menuLine.css({
            left: offsetLeft,
            width: offsetWidth,
        });
    };
    lineMenu();
    $(".menu__list").hover(function() {
        $(".menu__list").not(this).removeClass("active");
        $(this).addClass("active");
        lineMenu();
    });
    $(".menu__list").one("click", function() {
        $(".menu__list").not(this).removeClass("active");
        $(this).addClass("active");
        lineMenu();
    });
    $(window).on("scroll", function() {
        var height = $("#header").height();
        if ($(this).scrollTop() > height) {
            $(".back-top").addClass("active");
            $(".header-body").addClass("active");
        } else {
            $(".back-top").removeClass("active");
            $(".header-body").removeClass("active");
        }
    });
    $(".back-top").on("click", function() {
        $(".back-top").removeClass("active");
        $("html, body").animate({
                scrollTop: 0,
            },
            1000
        );
    });
});