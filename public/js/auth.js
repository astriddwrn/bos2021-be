$(document).ready(function(){

    setTimeout(function(){
       $('.section').removeClass('hidden');
    }, 1000);

function selectFunc(z){
    var x, i, j, l, ll, selElmnt, a, b, c;
    /*look for any elements with the class "custom-select":*/
    x = document.getElementsByClassName(z);
    l = x.length;
    for (i = 0; i < l; i++) {
    selElmnt = x[i].getElementsByTagName("select")[0];
    ll = selElmnt.length;
    /*for each element, create a new DIV that will act as the selected item:*/
    a = document.createElement("DIV");
    a.setAttribute("class", "select-selected");
    a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
    x[i].appendChild(a);
    x[0].appendChild(a).style.color = "rgba(32, 32, 32, 0.2)";
    /*for each element, create a new DIV that will contain the option list:*/
    b = document.createElement("DIV");
    b.setAttribute("class", "select-items select-hide");
    for (j = 1; j < ll; j++) {
        /*for each option in the original select element,
        create a new DIV that will act as an option item:*/
        c = document.createElement("DIV");
        c.innerHTML = selElmnt.options[j].innerHTML;
        c.addEventListener("click", function(e) {
            /*when an item is clicked, update the original select box,
            and the selected item:*/
            var y, i, k, s, h, sl, yl;
            s = this.parentNode.parentNode.getElementsByTagName("select")[0];
            sl = s.length;
            h = this.parentNode.previousSibling;
            h.style.color = "black";
            for (i = 0; i < sl; i++) {
            if (s.options[i].innerHTML == this.innerHTML) {
                s.selectedIndex = i;
                h.innerHTML = this.innerHTML;
                y = this.parentNode.getElementsByClassName("same-as-selected");
                yl = y.length;
                for (k = 0; k < yl; k++) {
                y[k].removeAttribute("class");
                }
                this.setAttribute("class", "same-as-selected");
                break;
            }
            }
            h.click();

        });
        b.appendChild(c);

    }
    x[i].appendChild(b);
    a.addEventListener("click", function(e) {
        /*when the select box is clicked, close any other select boxes,
        and open/close the current select box:*/
        e.stopPropagation();
        closeAllSelect(this);
        this.nextSibling.classList.toggle("select-hide");
        this.classList.toggle("select-arrow-active");
        });
    }

    /*if the user clicks anywhere outside the select box,
    then close all select boxes:*/
    document.addEventListener("click", closeAllSelect);
    var e = document.getElementById(z);
}
function closeAllSelect(elmnt) {
    /*a function that will close all select boxes in the document,
    except the current select box:*/
    var x, y, i, xl, yl, arrNo = [];
    x = document.getElementsByClassName("select-items");
    y = document.getElementsByClassName("select-selected");
    xl = x.length;
    yl = y.length;
    for (i = 0; i < yl; i++) {
        if (elmnt == y[i]) {
        arrNo.push(i)
        } else {
        y[i].classList.remove("select-arrow-active");
        }
    }
    for (i = 0; i < xl; i++) {
        if (arrNo.indexOf(i)) {
        x[i].classList.add("select-hide");
        }

    }
    if($(elmnt).parent().find(":selected").val() !=0){
        $(elmnt).parent().removeClass("border-error");
        $(elmnt).parent().siblings('.msg-error').empty();
    }
}

selectFunc("gender-select");
selectFunc("test-select");
selectFunc("nim-select");
selectFunc("campus-select");
selectFunc("major-select");
selectFunc("fyp-select");
selectFunc("bncc-select-kmg");
selectFunc("bncc-select-als");

    $('.eye-open, .eye-close').click(function(){
        x = $(this).siblings('input');
        if (x.attr('type') === "password") {
            x.attr('type', "text");
            x.siblings(".eye-open, .eye-close").toggleClass("hidden");
          } else {
            x.attr('type', "password");
            x.siblings(".eye-open, .eye-close").toggleClass("hidden");

          }
    });

    // check empty
    function checkEmpty(x){
        if(x.is('input') && x.val()==""){
            x.addClass("border-error");
            x.siblings('.msg-error').text("This is a required space.");
        }
        else if(x.hasClass("custom-select") && x.find(":selected").val()==0){
            x.addClass("border-error");
            x.siblings('.msg-error').text("This is a required space.");
        }
        else{
            x.removeClass("border-error");
            x.siblings('.msg-error').empty();
            minimumChar(x);
            phoneNumber(x);
            email(x);
            password(x);
            confirm(x);
        }
    }
    function checkbox(x){

        if(!x.is(":checked")){
            x.parent().next().text("This field must be checked.");
        }
        else{
            x.parent().next().empty();
        }
    }
    function multiple(x){
        let a = false;
        x.find('label input').each(function() {
            if($(this).is(':checked')){
                a=true;
            }
        })

        if(!a){
            x.next().text("This field must be checked.");
        }
        else{
            x.next().empty();
        }
    }

    function minimumChar(x){
        if(x.attr('type')=='text' && x.val().length <3){
            x.addClass("border-error");
            x.siblings('.msg-error').text("This field require minimum 3 characters.");
        }
        if(x.is('#nim') && x.val().length!=10){
            x.addClass("border-error");
            x.siblings('.msg-error').text("Please input a valid NIM / student ID.");
        }
    }

    function phoneNumber(x){
        // var pattern = /^(^\+62|62|^08)(\d{3,4}-?){2}\d{3,4}$/g;
        var pattern = /^(08)\d+/g;

        if(x.is('#whatsapp') && (!pattern.test(x.val()) || x.val().length < 8 || x.val().length > 15)){
            x.addClass("border-error");
            x.siblings('.msg-error').text("please input a valid phone number.");
        }
    }

    function email(x){
        var pattern = /^[a-zA-Z0-9_.+-]+@(?:(?:[a-zA-Z0-9-]+\.)?[a-zA-Z]+\.)?binus\.ac.id$/g;
        var pattern2 = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;


        if(x.is('#email') && !pattern.test(x.val())){
            x.addClass("border-error");
            x.siblings('.msg-error').text("Please input a valid binusian email address.");
        }else if(x.is('#personal_email') && !pattern2.test(x.val())){
                x.addClass("border-error");
                x.siblings('.msg-error').text("Please input a valid email address.");

        }
    }

    function password(x){
        var pattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/;

 // if(x.is('#password') && !pattern.test(x.val())){
    if(x.is('#password') && !(x.val().length >= 8 && /[a-z]/.test(x.val()) && /[A-Z]/.test(x.val()) && /\d/.test(x.val()) ) ){
            x.addClass("border-error");
            x.siblings('.msg-error').text("Password must contain minimum eight characters, at least one uppercase letter, one lowercase letter and one number");
        }
    }

    function confirm(x){
        var password = $("#password").val();
        var confirmPassword = x.val();
        if(x.is('#confirm') && password != confirmPassword){
            x.addClass("border-error");
            x.siblings('.msg-error').text("Confirm password does not match.");
        }
    }

    function lastValidation (sec, callback){
        sec.find("input").each(function(){
            checkEmpty($(this));
        });
        sec.find(".custom-select:visible").each(function(){
            checkEmpty($(this));
        });
        checkbox(sec.find('#checkbox'));
        if(sec.find('.multiple:visible')){
            multiple(sec.find('.multiple:visible'))
        }
        callback(sec);
    }

    function continueTransition(sec){
        if(!sec.find('.msg-error').text()){
            if(sec.hasClass("account-sec")){
                // $('.success').toggleClass('is-visible');
                    $('form').submit();
                return;
            }
            if(sec.hasClass("login-sec") || sec.hasClass("resetPass-form") || sec.hasClass("forgotPass-form")){
                $('form').submit();
                return;
            }
            sec.addClass('left-section');
            sec.next().removeClass('right-section');
            $("form").animate({
                scrollTop: 0
            }, "slow");
            $('html, body').animate({
                scrollTop: 0
            }, "slow");
            prog++;
            progressNext();
        }
    }

    let prog = 0;
    function progressNext(){
        $('.dot').eq(prog).addClass('active-dot');
        $('.line').eq(prog-1).addClass('active-line');
        $('.title').eq(prog).addClass('active-title');
    }

    function progressPrev(){
        $('.dot').eq(prog).removeClass('active-dot');
        $('.line').eq(prog-1).removeClass('active-line');
        $('.title').eq(prog).removeClass('active-title');
        prog--;
    }

    $("input").blur(function(){
        checkEmpty($(this));
    })

    function changeCampus(x, y, z ,cmps){
        $mBDG = [
            'Computer Science',
            'Creativepreneurship',
            'Interior Design',
            'Visual Communication Design',
            'Digital Business Innovation',
            'Interactive Design & Technology'
            ];
        $mMLG = [
            'Communication',
            'Computer Science',
            'Entrepreneurship - Business Creation',
            'Interior Design',
            'Public Relations',
            'Visual Communication Design',
            'Digital Business Innovation',
            'Interactive Design & Technology'
        ];
        $mKMG = [
            "Accounting",'Architecture',
            'Business Analytics','Chinese Literature','Civil Engineering', 'Communication - Marketing Communication',
            'Communication - Mass Communication','Computer Engineering','Computer Science','Computer Science & Mathematics','Computer Science & Statistics',
            'Cyber Security',
            'Data Science',
            'English Literature',
            'Game Application and Technology','Global Business Marketing',
            'Hotel Management (Diploma Program)',
            'Industrial Engineering','Information Systems','Information Systems & Accounting', 'Information Systems, Accounting, & Auditing', 'Information Systems & Management',
            'Interior Design','International Relations','Japanese Literature','Law - Business Law','Management','Master of Information Systems Management',
            'Master of Information Technology','Mobile Application and Technology','Primary Teacher Education','Program Profesi Insinyur (Professional Program)',
            'Psychology','Taxation','Tourism','Visual Communication Design - Animation','Visual Communication Design - Creative Advertising','Visual Communication Design - New Media'
        ];
        $mALS = [
            'Accounting',
            'Automotive and Robotics Engineering (International Program)',
            'Business Creation',
            'Chinese Literature',
            'Communication - Marketing Communication',
            'Communication - Mass Communication',
            'Computer Science',
            'Film',
            'Finance',
            'Food Technology',
            'Global Business Marketing',
            'Information Systems',
            'International Business Management',
            'International Relations',
            'Management',
            'Master of Management',
            'Product Design Engineering (International Program)',
            'Visual Communication Design - Animation',
            'Visual Communication Design - New Media'
        ];
        $mSNY = [
            'Fashion Design', 'Fashion Management', 'Graphic Design & New Media', 'Interactive Digital Media',
            'Business Informations Systmens', 'Business Management & Marketing', 'Communication',
            'Computer Science', 'Finance', 'International Business'
        ];
        $mASO = [
            'Automotive & Robotics Engineering', 'Product Design Engineering'
        ];
        $mOL = [
            'Information Systems', 'Management', 'Computer Science',
            'Industrial Engineering'
        ];
        $mBKS = [
            'Accounting', 'Business Hotel Management', 'Business Information Technology', 'Business Management',
            'Management', 'Psychology'
        ]

        $cALS = ['Front-End Development', 'UI/UX Design', 'C Programming', 'Java Programming'];
        $cBDG = ['None', 'Back-End Development', 'UI/UX Design', 'Java Programming', 'Mobile Application Development', 'Game Development'];
        $cKMG = ['Front-End Development' ,'Back-End Development', 'UI/UX Design', 'Java Programming', 'Mobile Application Development'];
        $cMLG = ['Back-End Development', 'UI/UX Design', 'Java Programming', 'Mobile Application Development', 'Game Development'];

        $fKMG = ["Batch 1", "Batch 2", "Batch 3", "Batch 4", "Batch 5"];
        $fMLG = ["Batch 1", "Batch 2", "Batch 3", "Batch 4", "Batch 5"];
        $fBDG = ["Batch 1", "Batch 2", "Batch 3", "Batch 4", "Batch 5"];

        let a = $cKMG;
        let b = $mKMG;
        let c = $fKMG;
        let d;
        if(cmps=='ALS'){
            a = $cALS;
            b = $mALS;
            c = $fKMG;
            d = $('.schedule-als')
        }
        else if(cmps=='BDG'){
            a = $cBDG;
            b = $mBDG;
            c = $fBDG;
            d = $('.schedule-bdg')
        }
        else if(cmps=='KMG'){
            a = $cKMG;
            b = $mKMG;
            c = $fKMG;
            d = $('.schedule-kmg')
        }
        else if(cmps=='MLG'){
            a = $cMLG;
            b = $mMLG;
            c = $fMLG;
            d = $('.schedule-mlg')
        }
        else if(cmps=='SNY'){
            a = $cKMG;
            b = $mSNY;
            c = $fKMG;
            d = $('.schedule-kmg')
        }
        else if(cmps=='ASO'){
            a = $cKMG;
            b = $mASO;
            c = $fKMG;
            d = $('.schedule-kmg')
        }
        else if(cmps=='OL'){
            a = $cKMG;
            b = $mOL;
            c = $fKMG;
            d = $('.schedule-kmg')
        }
        else if(cmps=='BKS'){
            a = $cKMG;
            b = $mBKS;
            c = $fKMG;
            d = $('.schedule-kmg')
        }

        $len = b.length;
        $lenSel = $('#major-select').length;
        $("#major-select > option:not(:first)").each(function() {
            $(this).remove();
        });
        for(let i = 0; i<$len; i++){
            $('#major-select').append(new Option(b[i], b[i]));
        }
        x.next().remove();
        x.remove();
        selectFunc("major-select");

        $len = c.length;
        $lenSel = $('#fyp-select').length;
        $("#fyp-select > option:not(:first)").each(function() {
            $(this).remove();
        });
        for(let i = 0; i<$len; i++){
            $('#fyp-select').append(new Option(c[i], c[i]));
        }
        z.next().remove();
        z.remove();
        selectFunc('fyp-select');

        $len = a.length;
        $lenSel = $('#lnt-select').length;
        $("#lnt-select > option:not(:first)").each(function() {
            $(this).remove();
        });
        for(let i = 0; i<$len; i++){
            $('#lnt-select').append(new Option(a[i], a[i]));
        }
        y.next().remove();
        y.remove();
        selectFunc('lnt-select');

        $('.schedule').each(function(){
            $(this).addClass('hidden');
            $(this).find('.msg-error').empty();
            $(this).find('select').removeAttr('name');
            $(this).find('.radio-input').removeAttr('name');
            $(this).find('input:checkbox').removeAttr('name');
        });
        d.removeClass('hidden');
        if (cmps=='BDG'){
            d.find('.radio-input').attr('name', 'is_esport');
        }

        if (cmps == 'KMG' || cmps == 'ALS' || cmps=='SNY' || cmps=='ASO' || cmps=='OL' || cmps=='BKS'){
            d.find('select').attr('name', 'schedule[]');
        }
        else{
            d.find('input:checkbox').attr('name', 'schedule[]');
        }
    }

    $('.select-selected').click(function(){
        let select = $(this).parent();
        if((select).hasClass('major-select') || (select).hasClass('fyp-select')){
            if($('.campus-select').find(":selected").val()==0){
                closeAllSelect($(this));
                $('.campus-select').addClass("border-error");
                $('.campus-select').siblings('.msg-error').text("Please fill out this field first.");
            }
        }

        if(select.hasClass('campus-select') && $('.campus-select').find(":selected").val()!=0){

            cmps = select.find(":selected").val();
            changeCampus($('.major-select').find('.select-selected'), $('.lnt-select').find('.select-selected'), $('.fyp-select').find('.select-selected'),cmps);

        }
    });

    $('.select-items').click(function(){
        x = $(this).parent();
        x.removeClass("border-error");
        x.siblings('.msg-error').empty();
    });

    $(".btn-continue").click(function(){
        let sec = $(this).parent().parent();
        lastValidation(sec, continueTransition);
    });

    $('.btn-back').click(function(){
        let sec = $(this).parent().parent();
        sec.addClass('right-section');
        sec.prev().removeClass('left-section');
        $("form").animate({
            scrollTop: 0
        }, "slow");
        $('html, body').animate({
            scrollTop: 0
        }, "slow");
        progressPrev();
    })


    $('.modal-back').click(function(){
        $('.confirmation').toggleClass('is-visible');
    });

    // $('form').submit(function (evt) {
    //     evt.preventDefault();
    // });



    $( ".close" ).click(function() {
        $(".failed-notif").css("display", "none");
      })

});
