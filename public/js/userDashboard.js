$(document).ready(function(){
    
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
    
    selectFunc("lnt-select");
    selectFunc("schedule-select");

    $('input:file').change(function() {
        var file = $(this)[0].files[0].name;
        $(this).prev().prev().find(".file-name").text(file).css("color", "black");
        checkValidationInput($(this));
     });

     function checkValidationSelect(x){
        if(x.hasClass("custom-select") && x.find(":selected").val()==0){
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
        if(x.val().length!=9 || x.val().substring(0, 6)!="BNCC21"){
            x.addClass("border-error");
            x.siblings('.msg-error').text("Please input a valid BNCC ID.");
        }
    }

    function fileVal(x){
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

    $('.select-items').click(function(){
        x = $(this).parent();
        x.removeClass("border-error");
        x.siblings('.msg-error').empty();
    });

    $("input").not(':input[type=file]').blur(function(){
        checkValidationInput($(this));
    })


    $('.btn').click(function(){
        let a;
        let b;
        let c;
        if( $(this).hasClass("reregistration-btn")){
            a=$('#form-reregistration input');
            b=$('#form-reregistration .custom-select');
            c=$('#form-reregistration');
            d=$('.success-reregistration');
        }
        else if($(this).hasClass("payment-btn")){
            a=$('#form-payment input')
            b=$('#form-payment .custom-select')
            c=$('#form-payment');
            d=$('.success-payment');
        }
        else if($(this).hasClass("schedule-btn")){
            a=$('#form-schedule input');
            b=$('#form-schedule .custom-select');
            c=$('#form-schedule');
            d=$('.success-schedule');
        }
        a.each(function() {
            checkValidationInput($(this));
        });
        b.each(function() {
        console.log("select");
            checkValidationSelect($(this));
        });
        setTimeout(function() {
            if(!c.find('.msg-error').text()){
                d.toggleClass('is-visible');
                setTimeout(function() {
                    c.submit();
                },1000);
            }
        },300);
     });

     $(".logout").click(function() {
        $('.loggingout').toggleClass('is-visible');
     });
     $(".modal-back").click(function() {
        $('.loggingout').toggleClass('is-visible');
     });

     // menus
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

        $('.section').each(function() {
            $(this).addClass('hidden');
        });
        sec.removeClass('hidden');
    });

    // menu-slide
    $('.menu-icon, .arrow-icon, .menu-list .menu, .main-container').click(function(){
       if($(this).hasClass('main-container')){
           if(!$(".menu-cont").hasClass('menu-off')){
                $(".menu-cont").addClass('menu-off');
           }
            return;
        }
        
        $(".menu-cont").toggleClass('menu-off');
        
    });

    

});