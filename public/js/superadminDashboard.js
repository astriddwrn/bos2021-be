setTimeout(function(){
    $('.pop-up').removeClass('hidden');
}, 1000);


$(".logout").click(function() {
$('.loggingout').toggleClass('is-visible');
});

$(".modal-back").click(function() {
$('.loggingout').toggleClass('is-visible');
});

let verifyBtn = $('.verifyBtn');
let verifyBtnBack = $('.verify-back');
let verifyModal = $('.verify-user');

let rejectBtn = $('.rejectBtn');
let rejectBtnBack = $('.reject-back');
let rejectModal = $('.reject-user');

let deleteBtn = $('.deleteBtn');
let deleteBtnBack = $('.delete-back');
let deleteModal = $('.delete-user');

const showhideModal = (btn, btnback, modal) => {
    $(btn).click(function () {
        $(modal).toggleClass('is-visible');
    });
    $(btnback).click(function () {
        $(modal).toggleClass('is-visible');
    });
}

showhideModal(verifyBtn, verifyBtnBack, verifyModal);
showhideModal(rejectBtn, rejectBtnBack, rejectModal);
showhideModal(deleteBtn, deleteBtnBack, deleteModal);

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


/* Show Table */
let btnKmg = $('.btnKMG');
let btnAs = $('.btnAS');
let btnBdg = $('.btnBDG');
let btnMlg = $('.btnMLG');
let btnAllReg = $('.btnAllReg');

let tblKmg = $('.tblKMG');
let tblAs = $('.tblAS');
let tblBdg = $('.tblBDG');
let tblMlg = $('.tblMLG');
let tblAllReg = $('.tblAllReg');

const removeactiveElements = () => {
    $(btnKmg).removeClass("btnRegion-active");
    $(btnAs).removeClass("btnRegion-active");
    $(btnBdg).removeClass("btnRegion-active");
    $(btnMlg).removeClass("btnRegion-active");
    $(btnAllReg).removeClass("btnRegion-active");

    // $(tblKmg).removeClass("tbl-active");
    // $(tblAs).removeClass("tbl-active");
    // $(tblBdg).removeClass("tbl-active");
    // $(tblMlg).removeClass("tbl-active");
    // $(tblAllReg).removeClass("tbl-active");
    console.log("activated");
}


const addactiveElements = (btn) => {
    $(btn).click(function () {
        removeactiveElements();
        $(btn).addClass("btnRegion-active");
        if ($(btn).hasClass("btnKMG")) {
            $(tblKmg).addClass("tbl-active");
        }
        else if ($(btn).hasClass("btnAS")) {
            $(tblAs).addClass("tbl-active");
        }
        else if ($(btn).hasClass("btnBDG")) {
            $(tblBdg).addClass("tbl-active");
        }
        else if ($(btn).hasClass("btnMLG")) {
            $(tblMlg).addClass("tbl-active");
        }
        else if ($(btn).hasClass("btnAllReg")) {
            $(tblAllReg).addClass("tbl-active");
        }
    });
}

addactiveElements(btnKmg);
addactiveElements(btnAs);
addactiveElements(btnBdg);
addactiveElements(btnMlg);
addactiveElements(btnAllReg);

let btnEditParticipant = $('.editBtnParticipant');
let btnEditReregis = $('.editBtnReregis');

let btnCancelEditPart = $('.cancel-editPart');
let btnCancelEditReregis = $('.cancel-editReregis');

let participantSec = $('.participant-sec');
let reregisSec = $('.reregistration-sec');

let editformParticipant = $('.editdata-participantsec')
let editformReregis = $('.editdata-reregistrationsec')

const showEditForm = (btn, editform) => {
    $(btn).click(function () {
        $(this).closest('.section').hide();
        $(editform).show();
    });
}

showEditForm(btnEditParticipant, editformParticipant);
showEditForm(btnEditReregis, editformReregis);

const closeEditForm = (btn, editform, sec) => {
    $(btn).click(function () {
        $(editform).hide();
        $(sec).show();
    });
}

closeEditForm(btnCancelEditPart, editformParticipant, participantSec);
closeEditForm(btnCancelEditReregis, editformReregis, reregisSec);


