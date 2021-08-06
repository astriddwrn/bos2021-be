
    setTimeout(function(){
        $('.pop-up').removeClass('hidden');
     }, 1000);


    $(".logout").click(function() {
    $('.loggingout').toggleClass('is-visible');
    });
    
    $(".modal-back").click(function() {
    $('.loggingout').toggleClass('is-visible');
    });

    $(".verifyBtn").click(function() {
        $('.verify-user').toggleClass('is-visible');
    });
    $(".verify-back").click(function() {
        $('.verify-user').toggleClass('is-visible');
    });

    $(".rejectBtn").click(function() {
        $('.reject-user').toggleClass('is-visible');
    });
    $(".reject-back").click(function() {
        $('.reject-user').toggleClass('is-visible');
    });

    $(".deleteBtn").click(function() {
        $('.delete-user').toggleClass('is-visible');
    });
    $(".delete-back").click(function() {
        $('.delete-user').toggleClass('is-visible');
    });

    $(".editBtn").click(function() {
        $('.edit-user').toggleClass('is-visible');
    });
    $(".edit-back").click(function() {
        $('.edit-user').toggleClass('is-visible');
    });

   $(".menu-list div").click(function() {
    $('.on').each(function() {
        if(!$(this).hasClass('hidden')){
            $(this).parent().find('img').toggleClass("hidden");
        }
    });
    $(this).find('img').toggleClass("hidden");

    let sec;
    if($(this).hasClass('menu-schedule')){
        sec = $('.schedule-sec')
    }
    else if($(this).hasClass('menu-payment')){
        sec = $('.payment-sec');
    }
    else if($(this).hasClass('menu-reregistration')){
        sec = $('.reregistration-sec');
    }
    else if($(this).hasClass('menu-profile')){
        sec = $('.profile-sec');
    }
    else if($(this).hasClass('menu-participant')){
        sec = $('.participant-sec');
    }

    $('.section').each(function() {
        $(this).addClass('hidden');
    });
    sec.removeClass('hidden');
});

$('.menu-icon, .arrow-icon, .menu-list .menu, .main-container').click(function(){
    if($(this).hasClass('main-container')){
        if(!$(".menu-cont").hasClass('menu-off')){
             $(".menu-cont").addClass('menu-off');
        }
         return;
     }

     $(".menu-cont").toggleClass('menu-off');

 });
