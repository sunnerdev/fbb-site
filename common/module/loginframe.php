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
                function login_submit(){

                        console.log($( "#loginform" ).serializeArray());
                        var url="resource/login.app.php";
                        var dataSet = $( "#loginform" ).serializeArray();
                        $.post(url,dataSet,function(data){
                            console.log(data);
                            
                            if(data!=null){
                            if(data.status == '1'){
                                sessionStorage.setItem('token_type', data.session.token_type); 
                                sessionStorage.setItem('access_token', data.session.access_token);
                                sessionStorage.setItem('expires_in', data.session.expires_in);
                                sessionStorage.setItem('refresh_token', data.session.refresh_token); 
                                location.href='transaction.php';
                            }

                            if(data.status == '0'){
                                //toggleLoginProgressBar();
                                showMessage(data.msg);
                            }}else{
                                //toggleLoginProgressBar();
                                showMessage('เกิดข้อผิดพลาด ลองใหม่อีกครั้งในภายหลัง');
                            }
                        }, "json");	
                }

                $( "#loginform" ).submit(function( event ) {
                    login_submit();
                    });
            </script>
            <style>
        .headerLogo .sprite_logo,
        .headerLogo .sprite_logo.zh-cn,
        .headerContent .sprite_logo,
        .headerContent .sprite_logo.zh-cn {
            background: url('images/logo/<?php echo $SiteName; ?>/logo.png') 0 0 no-repeat;
            width: 500px;
            height: 80px;
            position: absolute;
            margin: 0;
        }

        /*.headerLogo .sprite_logo.th-th {
        background: url('/_static/_event/2018Songkran/W88-Logo-Songkran2019-gray-TH.png') 0 0 no-repeat;
        margin-left: -56px;
    }*/
    </style>
            <form name="loginform" id="loginform"
                method="POST">
                <input type="hidden" name="route" id="route" value="AuthLogin">
                <div class="progressBar center"
                    style="height: 100%; width: 100%; display: block; z-index: 100; position: absolute; top: 0; right: 0; display: none; padding: 0;">
                    <img src="_static/_css/img/loading.gif" style="top: 50%; margin-top: -8px; position: relative;">
                </div>
                <div style="position:relative;">
                    <div style="margin: 0 auto; display: block; text-align:center;" class=""><img src="images/logo/<?php echo $SiteName; ?>/logo.png"></div>
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
                                <button type="button" onclick="login_submit();" class="button big center"
                                    style="margin-left: 0px;">เข้าสู่ระบบ</button>
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
    </div>