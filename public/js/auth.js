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
    }
    /*if the user clicks anywhere outside the select box,
    then close all select boxes:*/
    document.addEventListener("click", closeAllSelect);
    var e = document.getElementById(z);
    // console.log(e[2].value)
}

selectFunc("gender-select");
selectFunc("test-select");
selectFunc("nim-select");
selectFunc("campus-select");
selectFunc("major-select");
selectFunc("fyp-select");
selectFunc("bncc-select");
selectFunc("lnt-select");

$(document).ready(function(){
    // check empty
    function checkEmpty(x){
        if(x.is('input') && x.val()==""){
            x.addClass("border-error");
            x.siblings('.msg-error').text("This is a required space.");
        }
        else if(x.hasClass("custom-select") && x.find(":selected").val()==0){
            console.log(x.find(":selected").val());
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
        var pattern = /^(^\+62|62|^08)(\d{3,4}-?){2}\d{3,4}$/g;
        
        if(x.is('#whatsapp') && !pattern.test(x.val())){
            x.addClass("border-error");
            x.siblings('.msg-error').text("Pleane input a valid phone number.");
        } 
    }

    function email(x){
        var pattern = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
        
        if(x.is('#email') && !pattern.test(x.val())){
            x.addClass("border-error");
            x.siblings('.msg-error').text("Please input a valid email address.");
        } 
    }

    function password(x){
        var pattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/;
        
        if(x.is('#password') && !pattern.test(x.val())){
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
        sec.find(".custom-select").each(function(){
            checkEmpty($(this));
        });
        checkbox(sec.find('#checkbox'));
        callback(sec);
    }

    function continueTransition(sec){
        if(!sec.find('.msg-error').text()){
            if(sec.hasClass("login-sec") || se.hasClass("account-sec")){
                console.log(12);
                $('form').submit();
                return;
            }
            sec.addClass('left-section');
            sec.next().removeClass('right-section');
            $("html, body").animate({ 
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

    $('.select-selected').click(function(){
        let select = $(this).parent();
        if((select).find(":selected").val()!=0){
            checkEmpty(select);
        }
    });

    $(".btn-continue").click(function(){
        let sec = $(this).parent().parent();
        lastValidation(sec, continueTransition);
    });

    $('.btn-back').click(function(){
        let sec = $(this).parent().parent();
        sec.addClass('right-section');
        sec.prev().removeClass('left-section');
        $("html, body").animate({ 
            scrollTop: 0 
        }, "fast");
        progressPrev();
    })

    // $('form').submit(function (evt) {
    //     evt.preventDefault();
    // });

});