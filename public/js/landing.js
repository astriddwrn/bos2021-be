/* Navbar */
let scrollPrevPosition = $(window).scrollTop();
$(document).ready(() => {
    $(window).scroll(() => {
        let currPosition = $(window).scrollTop();
        /* const mediaQuery = window.matchMedia("(min-width: 768px)"); */

            /* if (scrollPrevPosition > currPosition) {
                $("#navbar").removeClass("scroll-down");
                $("#navbar").addClass("scroll-up");
            } else {
                $("#navbar").removeClass("scroll-up");
                $("#navbar").addClass("scroll-down");
            } */
            if (currPosition > 700) {
                $("#navbar").addClass("change-bg");
                $(".loginbtn").addClass("nav-login");
                $(".burger").addClass("addFilter");
                $(".profile").addClass("addFilter");
                $("#logo-down").css("display", "block")
                $("#logo-up").css("display","none")
            } else {
                $("#navbar").removeClass("change-bg");
                $(".loginbtn").removeClass("nav-login");
                $(".burger").removeClass("addFilter");
                $(".profile").removeClass("addFilter");
                $("#logo-up").css("display", "block")
                $("#logo-down").css("display","none")
            }
            scrollPrevPosition = currPosition;

    });

    var c, currentScrollTop = 0,
    navbar = $('#navbar');
    $(window).scroll(function () {
    var a = $(window).scrollTop();
    var b = navbar.height();
    currentScrollTop = a;
    if (c < currentScrollTop && a > b + b) {
        $('.menu-cont').removeClass('active');
        navbar.addClass("scrollUp");
    } else if (c > currentScrollTop && !(a <= b)) {
        $('.menu-cont').removeClass('active');
        navbar.removeClass("scrollUp");
    }
    c = currentScrollTop;
    });

    $('.burger').click(function () {
        $('.menu-cont').addClass('active');
    });
    $('.menu-close').click(function () {
        $('.menu-cont').removeClass('active');
    });

});

/* About */
$(document).ready(() => {

    var indexBehind = 2;
    var indexMiddle = 0;
    var indexLeft = 4;
    var indexRight = 1;

    function setSlidesNext() {
        $(".about .glass")
            .eq(indexBehind)
            .addClass("behindJoin")
            .removeClass("leftJoin");

        $(".about .glass")
            .eq(indexMiddle)
            .addClass("activeJoin")
            .removeClass("rightJoin");
        $(".about .glass")
            .eq(indexLeft)
            .addClass("leftJoin")
            .removeClass("activeJoin");
        $(".about .glass")
            .eq(indexRight)
            .addClass("backJoin")
            .addClass("rightJoin");

        setTimeout(function () {
            $(".behindJoin").animate(
                {
                    opacity: 0,
                },
                300,
                function () {
                    $(this).removeClass("behindJoin");
                }
            );

            $(".about .glass").each(function () {
                $(this).removeClass("backJoin");
            });
        }, 700);
    }

    function setSlidesPrev() {
        $(".about .glass")
            .eq(indexBehind)
            .addClass("behindJoin")
            .removeClass("rightJoin");

        $(".about .glass")
            .eq(indexMiddle)
            .addClass("activeJoin")
            .removeClass("leftJoin");
        $(".about .glass")
            .eq(indexRight)
            .addClass("rightJoin")
            .removeClass("activeJoin");
        $(".about .glass")
            .eq(indexLeft)
            .addClass("backJoin")
            .addClass("leftJoin");

        setTimeout(function () {
            $(".behindJoin").animate(
                {
                    opacity: 0,
                },
                300,
                function () {
                    $(this).removeClass("behindJoin");
                }
            );

            $(".about .glass").each(function () {
                $(this).removeClass("backJoin");
            });
        }, 700);
    }

    function setDots() {
        $(".about .dots").removeClass("activeJoinDots");
        $(".about .dots").eq(indexMiddle).addClass("activeJoinDots");
    }

    $(".about .glass").eq(indexMiddle).addClass("activeJoin");
    $(".about .glass").eq(indexLeft).addClass("leftJoin");
    $(".about .glass").eq(indexRight).addClass("rightJoin");
    $(".about .dots").eq(indexMiddle).addClass("activeJoinDots");

    // next
    $(".about .next").click(function () {
        // return;
        indexBehind = indexLeft;
        indexMiddle += 1;
        indexLeft += 1;
        indexRight += 1;

        if (indexMiddle > 4) {
            indexMiddle = 0;
        }
        if (indexLeft > 4) {
            indexLeft = 0;
        }
        if (indexRight > 4) {
            indexRight = 0;
        }

        $(setSlidesNext());

        $(setSlidesNext());

        $(setDots());
    });

    // prev
    $(".about .prev").click(function () {
        indexBehind = indexRight;
        indexMiddle -= 1;
        indexLeft -= 1;
        indexRight -= 1;

        if (indexMiddle < 0) {
            indexMiddle = 4;
        }
        if (indexLeft < 0) {
            indexLeft = 4;
        }
        if (indexRight < 0) {
            indexRight = 4;
        }

        $(setSlidesPrev());

        $(setDots());
    });
});

/* Fun Fact */
$(".shadow-bsFf").hover(
    function () {
    $(this).children( ".ff-img" ).css( "filter", "grayscale(0%)" );
}, function() {
    $(this).children( ".ff-img" ).css( "filter", "grayscale(100%)" );
}
);


/* FAQ */
$(".top").click(function () {
    let thisFaq = $(this);
    $(this).children(".arrow").toggleClass("arrow-active");

    if ($(this).hasClass("top-active")) {
        $(this).siblings(".bot").slideToggle();
        setTimeout(function () {
            topFaq(thisFaq);
        }, 300);
    } else {
        $(this).toggleClass("top-active");
        setTimeout(function () {
            botFaq(thisFaq);
        }, 100);
    }
});

const topFaq = (thisFaq) => {
    $(thisFaq).toggleClass("top-active");
}

const botFaq = (thisFaq) => {
    $(thisFaq).siblings(".bot").slideToggle();
}

$(document).ready(function(){
    let sayCurrNum = 0;
    $('.say-btn').click(function(){
        let sayThisNum = $(this).index();
        $('.say-btn img').removeClass('say-pic-active');
        $(this).find('img').addClass('say-pic-active');
        $('.say-card').removeClass('say-card-visible');
        $('.say-card').eq(sayThisNum).addClass('say-card-visible');
    });

});

 // Event JS
 let eventCurrNum = 0;
 $(".carousel-event .next").click(function(){
     if($(this).hasClass('non-clickable')){
         return false;
     }
     $(".carousel-event .slide").eq(eventCurrNum).addClass('slide-left');
     eventCurrNum++;
     eventCurrNum>8 ? eventCurrNum=0 : '';
     let a=eventCurrNum;
     let b=eventCurrNum;
     a -= 2;
     a==-2 ? a=7 : '';
     a==-1 ? a=8 : '';
     b +=1;
     b>8 ? b=0 : '';
     $(".carousel-event .slide").eq(a).removeClass('slide-left').addClass('slide-behind');
     $(".carousel-event .slide").eq(eventCurrNum).removeClass('slide-right');
     $(".carousel-event .slide").eq(b).removeClass('slide-behind').addClass('slide-right');
     $(".dot-cont-event div").removeClass('on');
     $(".dot-cont-event div").eq(eventCurrNum).addClass('on');

     $('.carousel-event .next, .carousel-event .prev').addClass('non-clickable');
     setTimeout(function(){
          $('.carousel-event .next, .carousel-event .prev').removeClass('non-clickable');
     },1000);

 });
 $(".carousel-event .prev").click(function(){
     if($(this).hasClass('non-clickable')){
         return false;
     }
     $(".carousel-event .slide").eq(eventCurrNum).addClass('slide-right');
     eventCurrNum--;
     eventCurrNum<0 ? eventCurrNum=8 : '';
     let a=eventCurrNum;
     let b=eventCurrNum;
     a +=2;
     a==10 ? a=1 : '';
     a==9 ? a=0 : '';
     b -=1;
     b<0 ? b=8 : '';
     $(".carousel-event .slide").eq(a).removeClass('slide-right').addClass('slide-behind');
     $(".carousel-event .slide").eq(eventCurrNum).removeClass('slide-left');
     $(".carousel-event .slide").eq(b).removeClass('slide-behind').addClass('slide-left');
     $(".dot-cont-event div").removeClass('on');
     $(".dot-cont-event div").eq(eventCurrNum).addClass('on');

     $('.carousel-event .next, .carousel-event .prev').addClass('non-clickable');
     setTimeout(function(){
          $('.carousel-event .next, .carousel-event .prev').removeClass('non-clickable');
     },1000);
 });


 /* Our Courses */

 $(".ocBtn").click(function () {
     $(this).parent().siblings().removeClass("ocBox-active");
     $(this).parent().addClass("ocBox-active");
     $(this).parent().siblings().children(".ocBtn").removeClass("ocBtn-active");
     $(this).addClass("ocBtn-active");
});

let btnJava = $("#ocBtn-java");
let btnMobile = $("#ocBtn-mobile");
let btnBe = $("#ocBtn-be");
let btnUi = $("#ocBtn-ui");
let btnFe = $("#ocBtn-fe");
let btnC = $("#ocBtn-c");
let btnGame = $("#ocBtn-game");

let conJava = $("#oc-java");
let conMobile = $("#oc-mobile");
let conBe = $("#oc-be");
let conUi = $("#oc-ui");
let conFe = $("#oc-fe");
let conC = $("#oc-c");
let conGame = $("#oc-game");

const ourCourse = (btn, con) => {
    $(btn).click(function () {
        $(con).siblings().removeClass("ocCon-active");
        $(con).addClass("ocCon-active");
    });
}

ourCourse(btnJava, conJava);
ourCourse(btnMobile, conMobile);
ourCourse(btnBe, conBe);
ourCourse(btnUi, conUi);
ourCourse(btnFe, conFe);
ourCourse(btnC, conC);
ourCourse(btnGame, conGame);

/* Bose */
$(".bose-cs").click(function () {
    $(this).slideUp();
    $(this).siblings(".bose-cc").slideDown();
});

$(".bose-ch").click(function () {
    $(this).parent().slideUp();
    $(this).parent().siblings(".bose-cs").slideDown();
});

/* POPUP */

let popup = $("#popup");
let closePopup = $(".close-popup");
$(closePopup).click(function () {
    $(popup).hide();
});

$("#popup a").click(function () {
    $(popup).hide();
});
