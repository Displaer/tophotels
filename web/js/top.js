/**
 * Created by DELL on 2019-07-19.
 */

/* 'use strict'; */
 $(function(){
var $simpleForm = {
    emailValidate:function(mail){
        var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(String(mail).toLowerCase());
    },
    rebindErrorEscape:function () {

        $("#formPanel #name,#formPanel #phone,#formPanel #mail").bind("keyup", function (e) {
            var id = $(this).attr('id');

            switch (id){
                case "name":
                case "phone":{
                    if($(this).val() == '') {
                        if(!$(this).parent().hasClass('has-error'))
                            $(this).parent().addClass('has-error');
                    } else {
                        if($(this).parent().hasClass('has-error'))
                            $(this).parent().removeClass('has-error');
                    }
                }break;
                case "mail":{
                    if($(this).val() !='' && !$simpleForm.emailValidate($(this).val())) {
                        if(!$(this).parent().hasClass('has-error'))
                            $(this).parent().addClass('has-error');
                    } else {
                        if($(this).parent().hasClass('has-error'))
                            $(this).parent().removeClass('has-error');
                    }
                }
            }
        });

    },
    rebindSendButton:function () {
        $("#formPanel #sendButton").bind("click", function () {

            var errors=0, reqData = {};
            reqData.desc = $("#formPanel #desc").val();
            reqData.name = $("#formPanel #name").val();
            reqData.phone = $("#formPanel #phone").val();
            reqData.mail = $("#formPanel #mail").val();

            // ФИО
            if(reqData.name == '') {
                $("#formPanel #name").parent().addClass('has-error');
                /*$('.js-add-error').addClass('has-error');*/
                errors++;
            } else {
                $("#formPanel #name").parent().removeClass('has-error');
            }

            // Телефон
            if(reqData.phone == '') {
                $("#formPanel #phone").parent().addClass('has-error');
                /*$('.js-add-error').addClass('has-error');*/
                errors++;
            } else {
                $("#formPanel #phone").parent().removeClass('has-error');
            }

            // Телефон
            if(reqData.mail != '') {
                if($simpleForm.emailValidate(reqData.mail)){
                    $("#formPanel #mail").parent().removeClass('has-error');
                } else {
                    $("#formPanel #mail").parent().addClass('has-error');
                    errors++;
                }
            } else {
                $("#formPanel #mail").parent().removeClass('has-error');
            }

            // Если нет ошибок, отправляем пост запрос.
            if(errors == 0) {
                $("#formPanel #sendButton").addClass('bth__loader--animate');
                var data = {};
                $(data).prop($('meta[name=csrf-param]').prop('content'), $('meta[name=csrf-token]').prop('content'));
                data.Request = reqData;

                $.ajax({
                    dataType:"JSON",
                    method: "POST",
                    url: "top/send",
                    data: data,
                    success:function (data) {
                        $("#formPanel #sendButton").removeClass('bth__loader--animate');
                        if(data.status == 'success'){
                            // Почистить форму,
                            $(['desc','name','mail','phone']).each(function (index,element) {
                                $("#formPanel #" + element).val('');
                            });
                            // Убрать форму и вывести сообшения
                            $("#formPanel>div").each(function (index,element) {

                                if($(element).attr("id") == 'message'){
                                    $(element).show();
                                } else {
                                    $(element).hide();
                                }
                            });



                        } else {
                            alert(data.message);
                        }
                    },
                    error:function(XHR, textStatus, errorThrown) {
                        $("#formPanel #sendButton").removeClass('bth__loader--animate');
                        if(XHR.status == 4) {
                            console.log(textStatus);
                        }
                    }
                });

            } else {

            }
        });
    },
    init:function () {
        $("#formPanel div#message").hide();
        $simpleForm.rebindSendButton();
        $simpleForm.rebindErrorEscape();

        $("#formPanel input#phone").bind("keypress", function (e) {

            var enabled = [0,8,32,40,41,43,45,48,49,50,51,52,53,54,55,56,57];
            var key = e.keyCode || e.which; // get key
            //console.log(key);
            /*if (key != 8 && key != 0 && (key < 48 || key > 57)) {*/
            if (enabled.indexOf(key) ==-1) {
                //display error message
                // $("#errmsg").html("Digits Only").show().fadeOut("slow");
                return false;
            }
            
        });

    }
};
$simpleForm.init();

});
