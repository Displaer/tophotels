/**
 * Created by DELL on 2019-07-19.
 */

/* 'use strict'; */
 $(function(){
var $simpleForm = {
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
                if( /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(reqData.mail)){
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
                    url: "index.php?r=top/send",
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

    }
};
$simpleForm.init();

});
