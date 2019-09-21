<!--<div id="loginFrame" class="modal hide fade left background-grey" tabindex="-1" style="overflow: hidden;"
        data-backdrop="static">
        <div class="modal-body">
            <a href="javascript:void(0);" data-dismiss="modal" aria-hidden="true">
                <img style="position: absolute; top: 0; right: 0; z-index: 2;" src="_static/promotions/img/close.png">
            </a>
            <iframe src="#" style="border: 0; overflow: hidden; width: 430px; height: 390px;"
                onload="this.style.display = 'block';" frameborder='0' border='0' allowtransparency="true"></iframe>
        </div>
    </div>

    <style>
        #loginFrame2 {
            width: 690px;
            margin-left: -345px;
            border: 0;
            top: 140px !important;
            margin-top: 0 !important;
        }

        #loginFrame2 .modal-body {
            padding: 15px 30px;
        }

        #loginFrame2 * {
            font-size: 18px;
        }
    </style>-->
    <div id="loginFrame2" class="modal hide fade left background-grey" tabindex="-1" style="overflow: hidden;"
        data-backdrop="static">
        <div class="modal-body">
            <a href="javascript:void(0);" data-dismiss="modal" aria-hidden="true">
                <img style="position: absolute; top: 0; right: 0; z-index: 2;" src="_static/promotions/img/close.png">
            </a>

            <style>
                .textfield1 {
                    width: 90px !important;
                    height: 14px !important;
                    border: hidden;
                }

                .textfield2 {
                    width: 100% !important;
                    min-width: 190px;
                    border: hidden;
                }

                #ajaxform input.error,
                #ajaxform input.error:focus {
                    color: #D6001E !important;
                    border-color: #D6001E !important;
                }

                #ajaxform table {
                    margin: 0;
                }

                #ajaxform #username {
                    font-size: 12px;
                }

                .font-size-16px,
                .font-size-16px * {
                    font-size: 16px !important;
                }
            </style>
            
            <script>
                var alwaysShowCaptcha = "True".toLowerCase() === 'true';
                var retry = 0;

                var getCaptcha = function () {
                    var headers = { Authorization: 'Bearer ' + (window.tkn || window.ftkn) };

                    utility.DoAjaxGet('/_secure/ajax/api/handler/captcha',
                        null,
                        headers,
                        function (r) {
                            if (!r)
                                return;

                            $('#imgCaptcha').attr('src', String.format('data:image/jpeg;base64, {0}', r.v));
                            $('#imgCaptcha').data('sessioncode', r.k);
                        },
                        function (e) {
                        });
                };
                

                function toggleLoginProgressBar() {
                    $("#loginFrame2 .progressBar").toggle();
                    $("#username").focus();
                }
                function get_before_submit(form) {
                   
                            final_submit(form);
                       
                }


                function final_submit(form) {
                    $("input[type='submit']").attr("disabled", "disabled");
                    var loginCredential = {};
                    loginCredential["username"] = $(form).find("input[name='username']").val();
                    loginCredential["password"] = $(form).find("input[name='password']").val();

                    if (retry >= 3)
                        loginCredential["captcha"] = $(form).find("input[name='captcha']").val();
                    else
                        loginCredential["captcha"] = "";

                        console.log($( "#ajaxform" ).serializeArray());
                        var url="common/login.app.php";
                        var dataSet = $( "#ajaxform" ).serializeArray();
                        $.post(url,dataSet,function(data){
                            console.log(data);
                            toggleLoginProgressBar();
                            if(data.status == '1'){
                                sessionStorage.setItem('token_type', data.session.token_type); 
                                sessionStorage.setItem('access_token', data.session.access_token);
                                sessionStorage.setItem('expires_in', data.session.expires_in);
                                sessionStorage.setItem('refresh_token', data.session.refresh_token); 
                                //location.reload();
                                window.opener.location.reload(true);
                                location.href = "https://account.w88bkk.com/RegisterSuccess.aspx";
                            }

                            if(data.status == '0'){
                                alert(data.msg);
                            }
                        }, "json");	
                }

                $(function () {
                    //getCaptcha();

                    $("#ajaxform input[type='text'],#ajaxform input[type='password']").keydown(function (event) {
                        if (event.keyCode == 13) {
                            get_before_submit();
                            return false;
                        }
                    });

                    $('#imgCaptcha').on('click', function (e) {
                        e.preventDefault();
                        e.stopImmediatePropagation();

                        return getCaptcha();
                    });

                    $("#password1").focus(function (e) {
                        $(this).hide();
                        $("#password").show();
                        $("#password").focus();
                    });

                    $("#password").blur(function () {
                        if ($(this).val().length == 0) {
                            $(this).hide();
                            $("#password1").show();
                        }
                    });

                    $('#ajaxform #username, #ajaxform #password, #ajaxform #password1, #ajaxform #captcha')
                        .on('keyup', function (e) {
                            if ($(e.target).val() && $(e.target).val().length > 0)
                                $(e.target).removeClass('error');
                        })
                        .on('blur', function (e) {
                            if ($(e.target).val() && $(e.target).val().length > 0)
                                $(e.target).removeClass('error');
                        });

                    var placeholdersupported = ('placeholder' in document.createElement("input"));
                    $("#ajaxform input[type='text'],#ajaxform input[type='password']").each(function () {
                        if ($(this).attr("data-watermark") && ($(this).attr("id") != "")) {
                            var watermark = $(this).attr("data-watermark");
                            if (placeholdersupported) {
                                $(this).attr("placeholder", watermark);
                            }
                            else {
                                $(this).blur(function () {
                                    if ($(this).val().length == 0) {
                                        $(this).val(watermark).addClass('watermark');
                                    }
                                    if ($(this).attr("id") != "captcha") {
                                        $(this).valid();
                                    }
                                }).focus(function () {
                                    if ($(this).val() == watermark) {
                                        $(this).val('').removeClass('watermark');
                                    }
                                }).val(watermark).addClass('watermark');
                            }
                        }
                    });

                    $("#ajaxform").submit(function (e) {
                        if ($("#ajaxform").valid()) {
                            if ($("#ajaxform #username").val() == $("#ajaxform #username").data("watermark")) {
                                $("#username").focus();
                                e.preventDefault();
                            } else if (retry >= 3 && $("#ajaxform #captcha").val() == $("#ajaxform #captcha").data("watermark")) {
                                $("#captcha").focus();
                                e.preventDefault();
                            }
                            else if ($("#ajaxform #password1").is(":visible") && $("#ajaxform #password1").val() == $("#ajaxform #password1").data("watermark")) {
                                $("#ajaxform #password1").focus();
                                e.preventDefault();
                            }
                            else if ($("#ajaxform #password").val() == "") {
                                $("#ajaxform #password").focus();
                                e.preventDefault();
                            } else if (retry >= 3 && $("#ajaxform #captcha").valid()) {

                            }
                        }
                    });

                    $("#ajaxform").validate({
                        onkeyup: false,
                        onclick: false,
                        onfocusout: false,
                        onfocusin: false,
                        rules: {
                            username: {
                                not_watermark: true,
                                required: true
                            },
                            password: {
                                required: true
                            },
                            password1: {
                                not_watermark: true,
                                required: true
                            }
                            //captcha:
                            //{
                            //	required: true,
                            //	not_watermark: true,
                            //	remote: {
                            //		url: "/common/handler.aspx/verifyCaptcha",
                            //		type: "post",
                            //		dataType: "json",
                            //		contentType: "application/json; charset=utf-8",
                            //		complete: function (data) {
                            //			if (!$.parseJSON(data.responseText).d) {
                            //				location.href = $("#imgCaptcha").closest("a").attr("href");
                            //			}
                            //		}
                            //	}
                            //}
                        },
                        errorElement: "div",
                        errorPlacement: function (error, element) {
                        },
                        success: function (label, element) {
                        },
                        submitHandler: function (form) {
                            toggleLoginProgressBar();
                            $("#ajaxform input:submit").attr('disabled', 'disabled');
                            get_before_submit(form);
                        },
                        invalidHandler: function (f, v) {
                            if (retry >= 3)
                                $("#ajaxform #captcha").removeData("previousValue");
                        }
                    });

                    $('#ajaxform #username').click(function () {
                        $(this).attr("placeholder", "");
                    }).blur(function () {
                        $(this).attr("placeholder", $(this).attr("data-watermark"));
                    });


                });
            </script>
            <form name="ajaxform" id="ajaxform"
                method="POST">
                <input type="hidden" name="route" id="route" value="AuthLogin">
                <div class="progressBar center"
                    style="height: 100%; width: 100%; display: block; z-index: 100; position: absolute; top: 0; right: 0; display: none; padding: 0;">
                    <img src="_static/_css/img/loading.gif" style="top: 50%; margin-top: -8px; position: relative;">
                </div>
                <div style="position:relative;">
                    <i style="margin: 0 auto; display: block" class="sprite_logo "></i>
                    <br>
                    <table style="margin: 0 auto; width: auto; white-space:nowrap;" cellpadding="0" cellspacing="0">
                        <colgroup>
                            <col style=" width: auto;">
                            <col style=" width: 15px; ">
                            <col style=" width: auto;">
                        </colgroup>
                        <tr>
                            <td class="dinpro">ชื่อผู้ใช้งาน</td>
                            <td></td>
                            <td>
                                <input type="text" name="username" id="username" class="textfield2" data-watermark="">
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td style="height: 8px;"></td>
                        </tr>
                        <tr>
                            <td class="dinpro">รหัสผ่าน</td>
                            <td></td>
                            <td>
                                <input type="password" name="password" id="password" class="textfield2">
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td style="height: 8px;"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td class="">
                                <input type="submit"
                                    style="position: absolute; left: -9999px; width: 1px; height: 1px;">
                                <a href="#" onclick="get_before_submit(); return false;" class="button big center"
                                    style="margin-left: 0px;">เข้าสู่ระบบ</a>
                                &nbsp;
                                <a class="center font-size-16px" href="ForgotPassword.php" target="_top"
                                    type="forgot_login">ลืมรหัสผ่าน?</a>
                            </td>
                        </tr>
                    </table>
                    <br>
                    <div class="center font-size-16px">

                        <div class="dinpro" style="display:inline;">คุณสมัครสมาชิกกับเราหรือยังค่ะ? หากยังคลิก <a
                                href="_secure/register.html?language=th-th" type="register" target="_top">ที่นี่</a>
                            เพื่อสมัครสมาชิกทันที!</div>
                    </div>

                    <br>
                    <hr>
                    <br>
                    <div class="dinpro center font-size-16px" style="padding: 0 15px;">

                        หากท่านไม่สามารถเข้าสู่ระบบได้ <br>กรุณาติดต่อ <a class="dinpro"
                            href="javascript:load_livechat()">เจ้าหน้าที่ลูกค้าสัมพันธ์</a> ได้ที่นี่
                        <br>
                        เว็บไซต์นี้ใช้ระบบ ล่าสุด 256-bit สำหรับการเข้ารหัส เซิร์ฟเวอร์ SSL

                    </div>


                </div>
                <br>

            </form>

        </div>
    </div>-->