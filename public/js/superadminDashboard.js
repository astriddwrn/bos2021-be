$(document).ready(function () {

    setTimeout(function () {
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

    // let deleteBtn = $('.deleteBtn');
    // let deleteBtnBack = $('.delete-back');
    // let deleteModal = $('.delete-user');

    let deleteParticipantBtn = $('.deleteParticipantBtn');
    let deleteParticipantBtnBack = $('.deleteParticipant-back');
    let deleteParticipantModal = $('.delete-participant');

    var deleteId = null;
    $('.submitDeleteParticipant').click(function(){
        Livewire.emit('deleteParticipant', deleteId);
        // console.log({ret});
    });

    function hookUsersTable(message, component){
        deleteId = null;
        $('#delete-name').text('');
        $('#delete-nim').text('');
        $('#delete-campus').text('');
        $(deleteParticipantModal).toggleClass('is-visible');
    }

    function initDeleteModal(btn){
        var id = btn.getAttribute('data-id');
        deleteId = id;
        $('#delete-name').text($(`td[data-id=${id}][data-type=fullname]`).text());
        $('#delete-nim').text($(`td[data-id=${id}][data-type=nim]`).text());
        $('#delete-campus').text($(`td[data-id=${id}][data-type=campus]`).text());
        // console.log({btn});
    }

    const showhideModal = (btn, btnback, modal, callback) => {
        var el = $(btn);
        el.off('click');
        el.click(function () {
            console.log([this]);

            $(modal).toggleClass('is-visible');

            if(callback && typeof callback == 'function') callback(this, btn, btnback, modal);
        });

        var el = $(btnback);
        el.off('click');
        el.click(function () {
            $(modal).toggleClass('is-visible');
            el[0].flagDelete = true;
            if(callback && typeof callback == 'function') callback(this, btn, btnback, modal);
        });
    }

    // showhideModal(verifyBtn, verifyBtnBack, verifyModal);
    // showhideModal(rejectBtn, rejectBtnBack, rejectModal);
    // showhideModal(deleteBtn, deleteBtnBack, deleteModal);
    showhideModal(deleteParticipantBtn, deleteParticipantBtnBack, deleteParticipantModal, function(el){
        if(/deleteParticipantBtn/.test(el.className)) initDeleteModal(el);
    });

    $(".menu-list div").click(function() {
        console.log(["73", this]);
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
        // console.log("activated");
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

    let inputAttrPart = $('.data-part');
    let inputAttrReregis    = $('#data-reregis');

    let btnCancelEditPart = $('.cancel-editPart');
    let btnCancelEditReregis = $('.cancel-editReregis');

    let participantSec = $('.participant-sec');
    let reregisSec = $('.reregistration-sec');

    let editformParticipant = $('.editdata-participantsec')
    let editformReregis = $('.editdata-reregistrationsec')

    const showEditForm = (btn, editform, inputAttr, callback) => {
        var el = $(btn);
        el.off('click');
        el.click(function () {
            var $btn = $(this);
            $btn.closest('.section').hide();
            var x = $btn.attr("data-id");
            $(inputAttr).val(x);
            $(editform).show();
            $('.menu-cont').hide();
            if(callback && typeof callback == 'function') callback(this, btn, editform, inputAttr);
        });
    }

    showEditForm(btnEditParticipant, editformParticipant, inputAttrPart, function(el){
        Livewire.emit('changeId', $(el).attr("data-id"));
    });
    showEditForm(btnEditReregis, editformReregis, inputAttrReregis, function(el){
        Livewire.emit('changeMemberId', $(el).attr("data-id"));
    });

    const closeEditForm = (btn, editform, sec) => {
        $(btn).click(function () {
            $(editform).hide();
            $(sec).show();
            $('.menu-cont').show();
        });
    }

    closeEditForm(btnCancelEditPart, editformParticipant, participantSec);
    closeEditForm(btnCancelEditReregis, editformReregis, reregisSec);



    /* PARTIICIPANTS EDIT */

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
            x[0].appendChild(a).style.color = "black";
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
            $('form#form-editdata-participant').submit();
            return;
        }
    }

    var $mBDG = ['Computer Science',
            'Creativepreneurship',
            'Interior Design',
            'Visual Communication Design',
            'Digital Business Innovation',
            'Interactive Design & Technology'
            ];
        var $mMLG = [
            'Communication',
            'Computer Science',
            'Entrepreneurship - Business Creation',
            'Interior Design',
            'Public Relations',
            'Visual Communication Design',
            'Digital Business Innovation',
            'Interactive Design & Technology'

        ];
        var $mKMG = ["Accounting",'Architecture','Business Analytics','Chinese Literature','Civil Engineering', 'Communication - Marketing Communication',
                'Communication - Mass Communication','Computer Engineering','Computer Science','Computer Science & Mathematics','Computer Science & Statistics',
            'Cyber Security', 'Data Science','English Literature', 'Game Application and Technology','Global Business Marketing', 'Hotel Management (Diploma Program)',
            'Industrial Engineering','Information Systems','Information Systems & Accounting','Information Systems & Management',
            'Interior Design','International Relations','Japanese Literature','Law - Business Law','Management','Master of Information Systems Management',
            'Master of Information Technology','Mobile Application and Technology','Primary Teacher Education','Program Profesi Insinyur (Professional Program)',
            'Psychology','Taxation','Tourism','Visual Communication Design - Animation','Visual Communication Design - Creative Advertising','Visual Communication Design - New Media'
        ];
        var $mALS = ['Accounting',
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
        var $mSNY = [
            'Fashion Design', 'Fashion Management', 'Graphic Design & New Media', 'Interactive Digital Media',
            'Business Informations Systmens', 'Business Management & Marketing', 'Communication',
            'Computer Science', 'Finance', 'International Business'
        ];
        var $mASO = [
            'Automotive & Robotics Engineering', 'Product Design Engineering'
        ];
        var $mOL = [
            'Information Systems', 'Management', 'Computer Science'
        ];
        var $mBKS = [
            'Accounting', 'Business Hotel Management', 'Business Information Technology', 'Business Management',
            'Management', 'Psychology'
        ]

        var $cALS = ['Front-End Development', 'UI/UX Design', 'C Programming', 'Java Programming'];
        var $cBDG = ['None', 'Back-End Development', 'UI/UX Design', 'Java Programming', 'Mobile Application Development', 'Game Development'];
        var $cKMG = ['Front-End Development' ,'Back-End Development', 'UI/UX Design', 'Java Programming', 'Mobile Application Development'];
        var $cMLG = ['Back-End Development', 'UI/UX Design', 'Java Programming', 'Mobile Application Development', 'Game Development'];

        var $fKMG = ["Batch 1", "Batch 2", "Batch 3", "Batch 4", "Batch 5"];
        var $fMLG = ["Batch 1", "Batch 2", "Batch 3", "Batch 4"];
        var $fBDG = ["Batch 1", "Batch 2", "Batch 3", "Batch 4"];

    function changeCampus(x, y, z ,cmps, major, fyp, lnt, bl, esport){
        let a = $cKMG;
        let b = $mKMG;
        let c = $fKMG;
        let d;
        if(cmps=='ALS'){
            a = $cALS;
            b = $mALS;
            c = $fKMG;
            d = $('.schedule-als');
        }
        else if(cmps=='BDG'){
            a = $cBDG;
            b = $mBDG;
            c = $fBDG;
            d = $('.schedule-bdg');
        }
        else if(cmps=='KMG'){
            a = $cKMG;
            b = $mKMG;
            c = $fKMG;
            d = $('.schedule-kmg');
        }
        else if(cmps=='MLG'){
            a = $cMLG;
            b = $mMLG;
            c = $fMLG;
            d = $('.schedule-mlg');
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
        if(major){
            $('.major-select option[value='+'"' +major + '"').attr('selected', 'selected');
        }
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
        if(fyp){
            $('.fyp-select option[value='+'"' +fyp + '"').attr('selected', 'selected');
        }
        selectFunc('fyp-select');


        $len = a.length;
        $lenSel = $('#palnt-select').length;
        $('.lnt-select select').removeAttr('name');
        $('#palnt-select').attr('name', 'lnt_course');
        $("#palnt-select > option:not(:first)").each(function() {
            $(this).remove();
        });
        for(let i = 0; i<$len; i++){
            $('#palnt-select').append(new Option(a[i], a[i]));
        }
        y.next().remove();
        y.remove();
        if(lnt){
            $('#palnt-select option[value='+'"' +lnt + '"').attr('selected', 'selected');
        }
        selectFunc('palnt-select');

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
            d.find('.radio-input[value='+'"' +esport+ '"]').prop('checked', true);
        }

        if (cmps == 'KMG' || cmps == 'ALS' || cmps=='SNY' || cmps=='ASO' || cmps=='OL' || cmps=='BKS'){
            $('.bncc-select-kmg .select-selected').remove();
            $('.bncc-select-als .select-selected').remove();
            $('.bncc-select-kmg .select-items').remove();
            $('.bncc-select-als .select-items').remove();
            d.find('select').attr('name', 'schedule[]');
            d.find('select option[value='+'"' +bl[0]+ '"]').attr('selected', 'selected');
            selectFunc("bncc-select-kmg");
            selectFunc("bncc-select-als");
        }
        else{
            d.find('input:checkbox').attr('name', 'schedule[]');
            for(let i=0; i<bl.length; i++ ){
                d.find('input[value='+'"' +bl[i]+ '"]').prop('checked', true);
            }
        }
    }

    const json = JSON.parse($("meta[name=schedules]").attr("content"));
    var outputKMG = json.filter(schedule => schedule.campus == "kmg");
    var outputALS = json.filter(schedule => schedule.campus == "als");
    var outputMLG = json.filter(schedule => schedule.campus == "mlg");
    var outputBDG = json.filter(schedule => schedule.campus == "bdg");
    for (const [key, val] of Object.entries(outputKMG)) {
        $('#bncc-select-kmg').append(new Option(`${val.text}`, `${val.id}`));
    }
    for (const [key, val] of Object.entries(outputALS)) {
        $('#bncc-select-als').append(new Option(`${val.text}`, `${val.id}`));
    }
    for (const [key, val] of Object.entries(outputMLG)) {
        $('.schedule-mlg .multiple').append('<label class="my-2 main">'+ `${val.text}` + '<input type="checkbox" name="schedule[]" value="'+ `${val.id}` + '"> <span class="mark"></span> </label>');
    }
    for (const [key, val] of Object.entries(outputBDG)) {
        $('.schedule-bdg .multiple').append('<label class="my-2 main">'+ `${val.text}` + '<input type="checkbox" name="schedule[]" value="'+ `${val.id}` + '"> <span class="mark"></span> </label>');
    }

    function hookEditParticipantMetaData(message, component){
        $('.select-selected').remove();

        var userData = JSON.parse($("meta[name=user]").attr("content"));

        $('#fullName').val(userData.fullName);
        $('.gender-select option[value='+'"' +userData.gender+ '"').attr('selected', 'selected');
        selectFunc("gender-select");
        $('#birthDate').val(userData.birthDate);
        $('#placeBirth').val(userData.placeBirth);
        $('#domicile').val(userData.domicile);
        $('#address').val(userData.address);
        $('#email').val(userData.email);
        $('#personal_email').val(userData.personal_email);
        $('#line_id').val(userData.line_id);
        $('#whatsapp').val(userData.whatsapp);
        $('#nim').val(userData.nim);
        $('.campus-select option[value='+'"' +userData.campus+ '"').attr('selected', 'selected');
        selectFunc("campus-select");

        changeCampus($('.major-select').find('.select-selected'), $('.lnt-select').find('.select-selected'), $('.fyp-select').find('.select-selected'),userData.campus, userData.major, userData.batch, userData.lnt_course, userData.schedule, userData.is_esport);

        $("input").blur(function(){
            checkEmpty($(this));
        });

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

                changeCampus($('.major-select').find('.select-selected'), $('.lnt-select').find('.select-selected'), $('.fyp-select').find('.select-selected'),cmps, '', '', '', '', '');
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

        $(".close").click(function () {
            $(".failed-notif").css("display", "none");
        });
    }

    // REREGIST EDIT

    $('input:file').change(function() {
        var file = $(this)[0].files[0].name;
        $(this).prev().prev().find(".file-name").text(file).css("color", "black");
        checkValidationInput($(this));
     });

     function checkValidationSelect(x){
        if(x.hasClass("custom-select") && x.find(":selected").val()==0 && x.is(':visible')){
            x.addClass("border-error");
            x.siblings('.msg-error').text("This is a required space.");
        }
     }

     function checkValidationInput(x){
        if(x.attr('type') == 'file'){
            fileVal(x);
        }
        else if(x.is('input') && x.val()==""){
            x.addClass("border-error");
            x.siblings('.msg-error').text("This is a required space.");
        }
        else{
            x.removeClass("border-error");
            x.siblings('.msg-error').empty();
            if(x.is('#bnccid')){
                bnccidVal(x);
            }
            if(x.is('#linkedinUrl')){
                linkedinVal(x);
            }
            if(x.is('#githubUrl')){
                githubVal(x);
            }
        }
    }

    function bnccidVal(x){
        if(x.val().length != 11 || x.val().substring(0, 6)!="BNCC21"){
            x.addClass("border-error");
            x.siblings('.msg-error').text("Please input a valid BNCC ID.");
        }
    }

    function fileVal(x){
        return;
        if (x.val()== ''){
            x.prev().prev().addClass("border-error");
            x.next().addClass('msg-error');
        }
        else if((x[0].files[0].size / 1024 / 1024) > 5){
            x.prev().prev().addClass("border-error");
            x.next().addClass('msg-error');
        }
        else{
            x.prev().prev().removeClass("border-error");
            x.next().removeClass('msg-error');
        }
    }

    function linkedinVal(x){
        if( x.val().substring(0, 28)!="https://www.linkedin.com/in/"){
            x.addClass("border-error");
            x.siblings('.msg-error').text("Please input a valid LinkedIn URL.");
        }

    }

    function githubVal(x){
        if( x.val().substring(0, 19)!="https://github.com/"){
            x.addClass("border-error");
            x.siblings('.msg-error').text("Please input a valid Github URL.");
        }
    }

    $("#form-editdata-reregis input").not(':input[type=file]').blur(function(){
        checkValidationInput($(this));
    })


    $('#form-editdata-reregis .btn-continue').click(function(){
        let a;
        let b;
        let c;

        a=$('#form-editdata-reregis input');
        b=$('#form-editdata-reregis .custom-select');
        c=$('#form-editdata-reregis');

        a.each(function() {
            checkValidationInput($(this));
        });
        b.each(function() {
            checkValidationSelect($(this));
        });
        setTimeout(function() {
            if(!c.find('.msg-error').text()){
                c.submit();
            }
        },300);
     });

    function hookEditMemberMetaData(message,component){
        $('.select-selected').remove();

        var memberData = JSON.parse($("meta[name=member]").attr("content"));

        $('#bnccid').val(memberData.bnccid);
        $('#linkedinUrl').val(memberData.linkedinUrl);
        $('#githubUrl').val(memberData.githubUrl);
        let cmps = memberData.campus;
        let a;
        if(cmps=='ALS'){
            a = $cALS;
            console.log('tst');
        }
        else if(cmps=='BDG'){
            a = $cBDG;
        }
        else if(cmps=='KMG'){
            a = $cKMG;
        }
        else if(cmps=='MLG'){
            a = $cMLG;
        }
        else if(cmps=='SNY'){
            a = $cKMG;
        }
        else if(cmps=='ASO'){
            a = $cKMG;
        }
        else if(cmps=='OL'){
            a = $cKMG;
        }
        else if(cmps=='BKS'){
            a = $cKMG;
        }
        let $len = a.length;
        let lnt = memberData.lnt_course
        $('.lnt-select select').removeAttr('name');
        $('#relnt-select').attr('name', 'lnt_course');
        $("#relnt-select > option:not(:first)").each(function() {
            $(this).remove();
        });
        for(let i = 0; i<$len; i++){
            $('#relnt-select').append(new Option(a[i], a[i]));
        }
        $('#relnt-select option[value='+'"' +lnt + '"').attr('selected', 'selected');
        selectFunc('relnt-select');
        $('#ktp-upload').prev().prev().find(".file-name").text(memberData["ktp-upload"]).css("color", "black");
        $('#fyp-upload').prev().prev().find(".file-name").text(memberData["fyp-upload"]).css("color", "black");

    }

    Livewire.hook('message.processed', (message, component) => {
        // console.log({message, component});

        var lwName = component.fingerprint.name;
        var ret = message.response.effects.returns;

        if(ret)
            if(lwName == 'edit-participant-meta-data' && ret && 'changeId' in ret) hookEditParticipantMetaData(message, component);
            else if(lwName == 'users-table' && ret && 'deleteParticipant' in ret) hookUsersTable(message, component);
            // member-data
            else if(lwName == 'edit-member-meta-data') hookEditMemberMetaData(message,component);

        if(lwName == 'users-table'){
            showEditForm('.editBtnParticipant', editformParticipant, inputAttrPart, function(el){
                Livewire.emit('changeId', $(el).attr("data-id"));
            });
            showhideModal('.deleteParticipantBtn', deleteParticipantBtnBack, deleteParticipantModal, function(el){
                initDeleteModal(el);
            });
        }
    });

    /* EDIT REREGIS */

});

