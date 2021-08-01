/* Navbar */
let scrollPrevPosition = $(window).scrollTop();
$(document).ready(() => {
    $(window).scroll(() => {
        let currPosition = $(window).scrollTop();
        const mediaQuery = window.matchMedia("(min-width: 768px)");
        if (mediaQuery.matches) {
            /* if (scrollPrevPosition > currPosition) {
                $("#navbar").removeClass("scroll-down");
                $("#navbar").addClass("scroll-up");
            } else {
                $("#navbar").removeClass("scroll-up");
                $("#navbar").addClass("scroll-down");
            } */
            if (currPosition > 700) {
                $("#navbar").addClass("change-bg");
                $("#logo-down").css("display", "block")
                $("#logo-up").css("display","none")
            } else {
                $("#navbar").removeClass("change-bg");
                $("#logo-up").css("display", "block")
                $("#logo-down").css("display","none")
            }
            scrollPrevPosition = currPosition;
        }
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
$('.arrow').click(function () {
    let thisFaq = $(this);
    $(this).toggleClass("arrow-active");

    if ($(this).parent().hasClass("top-active")) {
        $(this).parent().siblings(".bot").slideToggle();
        setTimeout(function () {
            topFaq(thisFaq);
        }, 300);
    } else {
        $(this).parent().toggleClass("top-active");
        setTimeout(function () {
            botFaq(thisFaq);
        }, 100);
    }
});

const topFaq = (thisFaq) => {
    $(thisFaq).parent().toggleClass("top-active");
}

const botFaq = (thisFaq) => {
    $(thisFaq).parent().siblings(".bot").slideToggle();
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
     eventCurrNum>5 ? eventCurrNum=0 : '';
     let a=eventCurrNum;
     let b=eventCurrNum;
     a -=2;
     a==-2 ? a=4 : '';
     a==-1 ? a=5 : '';
     b +=1;
     b>5 ? b=0 : '';
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
     eventCurrNum<0 ? eventCurrNum=5 : '';
     let a=eventCurrNum;
     let b=eventCurrNum;
     a +=2;
     a==7 ? a=1 : '';
     a==6 ? a=0 : '';
     b -=1;
     b<0 ? b=5 : '';
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
