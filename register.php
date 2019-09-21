<?php
require('common/config.php');
if($_SESSION['access_token']!=''){ header('Location: index.php'); exit; }
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<!-- Mirrored from www.w88bkk.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Jul 2019 09:47:49 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <title>
        เดิมพันออนไลน์ , แทงบอลออนไลน์ , คาสิโนสด ออนไลน์ ทั้งหมดรวมอยู่ใน W88
    </title>
    <meta name="description"
        content="เรานำเสนอเทคโนโลยีที่ทันสมัยที่สุดในการเดิมพันออน์ไลน์, แทงบอลออน์ไลน์, คาสิโนออน์ไลน์, สล็อต, เกมส์แบบผู้เล่นต่อผู้เล่น, การซื้อขายแลกเปลี่ยน, การเทรดเงิน ด้วยวิธีการเล่นที่ง่ายและเพลิดเพลิน">
    <meta name="keywords"
        content="เดิมพันออน์ไลน์, แทงบอล, แทงบอลออน์ไลน์, คาสิโนออน์ไลน์, ทายผลกีฬาออน์ไลน์, ผลบอลสด, ผลบอลวันนี้, แทงบอลสด, แทงบอลวันนี้, คาสิโนสดออน์ไลน์, W88คาสิโน, กีฬา, คาสิโนสด, หวยออน์ไลน์, ล็อตเตอรี่ออน์ไลน์, การซื้อขายแลกเปลี่ยนเงิน, การเดิมพันทางการเงิน, โป๊กเกอร์, ไบนารี่, การซื้อขายแลกเปลี่ยน , สมัครสมาชิก, พันธมิตร, เดิมพันสด, สถิติกีฬา, ข้อมูลการเดิมพัน, สถิติการเดิมพัน">

        <?php include('common/module/head.php'); ?> 

        <style>
		.headerContent, .mainContent, .footercontent, .menuContent, div.centralized {
			width: 960px !important;
		}

		.form {
			width: 100%;
			margin: 0px auto;
			border-collapse: separate;
			border-spacing: 5px 8px;
			*border-collapse: collapse;
			vertical-align: top;
		}

			.form thead td {
				height: 0;
			}

		.noborderspacing {
			border-spacing: 0;
		}

		.form tbody {
			height: auto;
		}

		td.validate_input, td.right {
			line-height: 22px;
		}

		.form input[type="text"], input[type="password"], select {
			width: 210px;
		}

		a.selectbox-link, .selectbox-container {
			max-width: 210px;
		}

		select {
			width: 210px;
		}

		#contact_no {
			width: 125px;
		}

		#contact_no_country {
			width: 40px;
		}

		/*input#captcha {
			width: 95px;
		}*/

		span, span * {
			line-height: normal;
		}

		select#year {
			width: 60px;
		}

		select#month {
			width: 85px;
		}

		select#day {
			width: 45px;
		}

        .footer-image {
            margin-bottom: 15px;
        }
	</style>
	<!--[if IE 6]>
	<style>
		select {
			width: 205px;
		}
		select#year {
			width: 60px;
		}
		select#month {
			width: 85px;
		}
		select#day {
			width: 45px;
		}
		select#contact_no_country{
		width: 55px !important;
		}
	</style>
	<![endif]-->
	<style>
		.tab-content-wrap {
			margin-top: 8px;
			border: 1px solid #2a8fbd;
			padding: 10px;
			overflow: visible;
			line-height: normal !important;
			max-height: 25px;
			text-align: right;
		}

		hr.special {
			border-top: 1px solid #1F1F1F;
		}

		.contact_option {
			text-align: right;
			height: 21px;
			padding: 0;
			margin: 0;
		}

		.contact_option li {
			float: right;
		}

		.contact_option li a {
			width: auto;
			height: auto;
		}

		.contact_method_wrap {
			width: 100%;
			margin: 0 auto;
		}

		.contact_option li.active:before, .contact_option li.active .before {
			margin-left: -9px;
		}

		.contact_option li.active:after, .contact_option li.active .after {
			bottom: -9px;
			margin-left: -7px;
		}

		body.white .contact_option li.active:after, body.white .contact_option li.active .after {
			border-color: #fff transparent;
		}

		body {
			position: relative;
		}

		body.white .tab-content-wrap {
			border: 1px solid #38c0ff;
		}

		div.progressBar {
			height: 100%;
			width: 100%;
		}

		div.internal_wrap {
			position: relative;
		}
		/*left promo*/
		div.left_side_promo {
			position: absolute;
			width: 271px;
			top: 10px;
			left: 0px;
			border: 1px solid #2a8fbd;
			padding: 18px 12px;
			background: #1f1f1f;
		}

		body.white div.left_side_promo {
			background: #eee;
		}

		div.left_side_promo ul li {
			margin-top: 10px;
		}

		.white_size_20px {
			font-size: 20px;
		}

		i.sprite_info {
			background-position: 0 0;
			background-image: url("/_static/_css/img/icon_info.png");
			background-repeat: no-repeat;
			width: 16px;
			height: 16px;
			display: inline-block;
			vertical-align: middle;
			padding: 0 1px;
		}

		div.success.grey {
			border-color: #808080;
		}

		div.success.grey:after {
			content: url('/_static/_css/img/msgbox_join_grey.png');
			/*left: -6px;*/
		}

		body.white div.success.grey:after {
			content: url('/_static/_css/img/msgbox_join_grey.white.png');
		}

		div.new_pattern {
			width:640px;
			margin-left: 320px;
		}
	</style>
	

	<script src="_static/_script/jquery.linkselect.js"></script>
	<script>
        var getDaysInMonth = function(year, month) {
            return new Date(year, month, 0).getDate();
        },
            populateDays = function() {
                var day = parseInt($('#day').val()),
                    month = parseInt($('#month').val()),
                    year = parseInt($('#year').val()),
                    dt = new Date(year, month, 0, 0),
                    days = getDaysInMonth(dt.getFullYear(), dt.getMonth() + 1);

                $('#day').linkselect('destroy');
                $('#day').empty();

                for (var x = 0; x < days; x++)
                    $('<option />', { value: x + 1, html: x + 1 })
                        .appendTo($('#day'));

                if (day <= days)
                    $('#day').val(day);

                $("#day").linkselect({ style: "selectbox", fixedWidth: true });
            };

        function scorePassword(pass) {
            var score = 0;
            if (!pass)
                return score;
            // award every unique letter until 5 repetitions
            var letters = new Object();
            for (var i = 0; i < pass.length; i++) {
                letters[pass[i]] = (letters[pass[i]] || 0) + 1;
                score += 5.0 / letters[pass[i]];
            }
            // bonus points for mixing it up
            var variations = {
                digits: /\d/.test(pass),
                lower: /[a-z]/.test(pass),
                upper: /[A-Z]/.test(pass),
                nonWords: /\W/.test(pass),
            }
            variationCount = 0;
            for (var check in variations) {
                variationCount += (variations[check] == true) ? 1 : 0;
            }
            score += (variationCount - 1) * 10;
            return parseInt(score);
        }


        function checkPassStrength(pass) {
            var score = scorePassword(pass);
            var display_text = "";
            $(".password").removeClass(function (index, css) {
                return (css.match(/(^|\s)background_\S+/g) || []).join(' ');
            });
            $("#password_score").removeClass(function (index, css) {
                return (css.match(/(^|\s)color_\S+/g) || []).join(' ');
            });
            $("[class^=password_desc]").hide();
            if (score > 75) {
                display_text = "ปลอดภัยมาก";
			    $(".password").addClass("background_strong");
			    $("#password_score").addClass("color_strong");
			    $(".password_desc_strong").show();
			}
			else if (score > 50) {
			    display_text = "ปานกลาง";
			    $(".password:lt(2)").addClass("background_good");
			    $("#password_score").addClass("color_good");
			    $(".password_desc_good").show();
			}
			    //else if (score > 30) {
			    //	display_text = "Weak";
			    //	$(".password:first").addClass("background_weak");
			    //	$("#password_score").addClass("color_weak");
			    //}
			else if (score >= 0) {
			    display_text = "คาดเดาได้ง่าย";
				    $(".password:first").addClass("background_weak");
				    $("#password_score").addClass("color_weak");
				    $(".password_desc_weak").show();
				}
        $("#password_score").text(display_text);
    }


    function redirectMyAccountCard() {
        if (window.opener != null) {
            window.opener.location.reload(true);
            location.href = "https://<?php echo $headers['Host']; ?>/RegisterSuccess.aspx";
            }
            else {
                window.open('https://<?php echo $headers['Host']; ?>/RegisterSuccess.aspx', 'member', 'width=1000,height=650,scrollbars=yes,location=1,resizable=yes');
		        location.href = '/';
		    }
        }

        $.validator.addMethod("DateofBirth", function () {
            try {
                var dt = new Date(),
                    day = parseInt($('#day').val()),
                    month = parseInt($('#month').val()),
                    year = parseInt($('#year').val()),
                    bday = new Date(year, month - 1, day, 0),
                    today = new Date(dt.getFullYear(), dt.getMonth(), dt.getDate(), 0);
		        
                $("#year").val(bday.getFullYear());
                $("#month").val(bday.getMonth() + 1);
                $("#day").val(bday.getDate());

                return Math.abs(new Date(today - bday).getUTCFullYear() - 1970) < 18
                    ? false
                    : true;
            } catch (e) {
                return false;
            }
        }, "ท่านจะต้องมีอายุมากกว่า 18 ​ปี");

	    $.validator.addMethod("PasswordScore", function () {
	        try {
	            var score = scorePassword($("#password").val());
	            if (score > 50)
	                return true;
	            else
	                return false;
	            return true;
	        } catch (e) {
	            return false;
	        }
	    }, "Please insert a strong password");

	    $.validator.addMethod("noNumberSpecialCharAllowed", function (value, element) {
	        return /^[^~@!#$%^&*()+={}|\[\]\\<>?,/:";\d]*$/.test(value);
	    }, 'กรุณากรอกชื่อ นามสกุลเป็นตัวอักษรเท่านั้น! ไม่อนุญาตให้ใช้ตัวเลขและสัญลักษณ์ใดๆทั้งสิ้น');

	    $.validator.addMethod("nospace", function (value, element) {
	        return /^\S*$/.test(value);
	    }, 'ไม่ควรมีช่องว่าง');

	    $.validator.addMethod("noNumberOnly", function (value, element) {
	        return !/^\d+$/.test(value);
	    }, 'ตัวอักษรผสมตังเลข');

	    $(document).ready(function () {

	       
	        $('.contact_option a').hover(function (e) {
	            e.preventDefault();
	            $(this).tab('show');
	        }).click(function () {
	            window.open($(this).data("link"), $(this).attr("target"));
	        });
	        $('#form1 input:not([type="submit"]),#form1 select,a.selectbox-link').bind("focus click", function () {
	            $(this).closest("td.validate_input").next("td").next("td").html("");
	            $(this).closest("td.validate_input").next("td").html("");
	            $("<i >").addClass("sprite_info").appendTo($(this).closest("td.validate_input").next("td"));
	            $("<div>").append($("<div />").css("padding","10px").html($(this).attr("data-msg-default")))
			    .attr("for", $(this).attr("id"))
			    .addClass('success grey').appendTo($(this).closest("td.validate_input").next("td").next("td"));
	            $("div.error,div.success").hide();
	            $("div.success:first").show();
	        }).bind("blur focusout", function () {
	            $(this).closest("td.validate_input").next("td").next("td").find("div.success").remove();
	            $(this).closest("td.validate_input").next("td").html("");
	            $("div.error,div.success").hide();
	            $("div.error:first").show();
	            if ($(this).val() || submitCount) {
	                try { $(this).valid(); } catch (e) { }
	            }
	            try { $($(this).attr("href")).valid(); } catch (e) { }
            });
        });

	        

	        /*
		        errorPlacement: function (error, element) {
		            $(element).closest("td.validate_input").next("td").html("");
		            $(element).closest("td.validate_input").next("td").next("td").html("");
		            $("<div>").addClass("error").append($("<div />").css("padding","10px").append(error.removeClass("error").addClass("red bold")).append("<div>" + $(element).attr("data-msg-default") + "</div>")).appendTo($(element).closest("td.validate_input").next("td").next("td"));
		            $(element).closest("td.validate_input").next("td").html("");
		            var icon = $("<i>")
				    .attr("for", element.name)
				    .addClass('sprite_error').appendTo($(element).closest("td.validate_input").next("td"));
		            $("div.error,div.success").hide();
		            $("div.error:first").show();
		        },
		        success: function (label, element) {
		            $(element).closest("td.validate_input").next("td").html("");
		            $(element).closest("td.validate_input").next("td").next("td").html("");
		            $("<i>")
				    .attr("for", $(element).attr("id"))
				    .addClass('sprite_correct').appendTo($(element).closest("td.validate_input").next("td"));
		        },
		        submitHandler: function (form) {
		            $('button[type=submit], input[type=submit]').prop('disabled', true);
		            $("div.progressBar").show();
		            register_get_before_submit(form);
		        },
		        invalidHandler: function (f, v) {
		            $('button[type=submit], input[type=submit]').prop('disabled', false);

                }
                */
		
		
       
		
        function final_submit() {
            $("#contact_no").val($("#contact_no").val().replace(/^0+/, ''));
			$("input[type='submit']").attr("disabled", "disabled");
            //error_msg
            $('.error_msg').html('');
			//alert('let go...');
            

			console.log($( "#form2" ).serializeArray());
			var url="resource/register.app.php";
			var dataSet = $( "#form2" ).serializeArray();
			$.post(url,dataSet,function(data){
                console.log(data);
                
                if(data.status == '0'){
                    $.each(data.data, function(k, v) {
                        console.log(k,v[0]);
                        $('#error_'+k).html(v[0]);
                    });
                }
                
				if(data.status == '1'){
                    var url="resource/login.app.php";
                        var dataSet = $( "#form2" ).serializeArray();
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
                                toggleLoginProgressBar();
                                showMessage(data.msg);
                                
                            }}else{
                                toggleLoginProgressBar();
                                showMessage('เกิดข้อผิดพลาด ลองใหม่อีกครั้งในภายหลัง');
                            }
                        }, "json");	
					
				}
			}, "json");	
            //form.submit();
        }
       /* function disableF5(e) { if ((e.keyCode) == 116) e.preventDefault(); };
        $(document).on("keydown", disableF5);*/

        /*$('#form2').submit(function (event) {
        alert("Submitted");
        event.preventDefault();
        });*/
    </script>
</head>

<body class="home grey">
<?php include('common/module/header.php'); ?>
<?php include('common/module/menu.php'); ?>
<?php include('common/module/loginframe.php'); ?>
<?php include('common/module/modalFrame.php'); ?>
<?php include('common/module/marquee.php'); ?>
<?php
/*if($_SESSION['refresh_token']!='')
{ 
    echo "<script>location.href = 'index.php';</script>";
    exit;
}*/
?>


	

<form name="form2" method="post" id="form2">

<input type="hidden" id="route" name="route" value="Register">

        <div class="tempPlace hide"></div>
        <div>

            <div class="mainContent clear">
                <br>
                <div class="title special">สร้างบัญชีผู้ใช้งาน</div>
                <div class="internal_wrap">
                    <div class="left_side_promo">
    <div class="dinpro white_size_24px blue center white_size_20px">สมัครสมาชิกวันนี้<br>รับทันที!!</div>
    <div>
        <ul>
            <li>
                พิเศษโปรโมชั่นสำหรับสมาชิกใหม่
                <ul class="sub-ul">
                    <li><a href="/Promotion.aspx#USD50BONUS" target="_blank">โบนัสยินดีต้อนรับ 100% สูงถึง 1,500 บาท ในผลิตภัณฑ์ที่คุณต้องการ!</a></li>
                    <li><a href="/Promotion.aspx#USD200BONUS" target="_blank">โบนัสยินดีต้อนรับ 100% สูงถึง 6,000 บาท ในเกมส์สล็อตทุกคลับของW88</a></li>
                    <li><a href="/Promotion.aspx#esportsDaily" target="_blank">โบนัสเงินฝากรายวัน e-Sports 10%จ่ายโบนัสสูงสุดถึง 1,500 บาท ยอดเทิร์น เพียง 6 เท่า!</a></li>
                    <li><a href="/Promotion.aspx#CARELOADBONUS" target="_blank">โบนัสเงินฝากรายวัน คาสิโน 10% จ่ายโบนัสสูงสุดถึง 1,000 บาท ยอดเทิร์น 10 เท่า!</a></li>
                </ul>
            </li>
            <li>ได้รับเงินเดิมพันฟรีง่ายๆ เพียงแค่กรอกข้อมูลการสมัครให้ถูกต้อง**</li>
            <li>การฝาก-ถอน ที่รวดเร็วและตัวเลือกการฝากเงินที่หลากหลาย</li>
            <!--<li>เพลิดเพลินไปกับโบนัสเงินฝากครั้งแรกสูงถึง 6,000 บาท</li>-->
            <li><a href="/VIP/" target="_blank">เป็นสมาชิกระดับ VIP พร้อมรับสิทธิพิเศษต่างๆ และร่วมคลับสะสมแต้ม</a></li>
            <li><a href="/Blog/?p=5038" target="_blank">คลิ๊กที่นี่</a> <b>เพื่อดูตัวอย่างการสมัครสมาชิก</b></li>
            <!--<li><a href="/Mobile/" target="_blank">ประสบการณ์การเล่นเกมที่ปลอดภัยกับเว็บแพลตฟอร์มโทรศัพท์มือถือและแท็บเล็ SSL เข้ารหัสเต็มรูปแบบ</a></li>-->
        </ul>
        <div style="padding-left: 25px;">**ข้อกำหนด & เงื่อนไข<br>การใช้โปรโมชั่นทั้งหมด</div>
    </div>
</div>
<style type="text/css">
    div.left_side_promo.sponsor {
        background-image: url(/_static/register/img/Registration-W88Wolves-TH.jpg);
        background-size: 295px;
        height: 350px;
        border: 0;
    }
    div.left_side_promo.sponsor > div {
        display: none;
    }
    ul .sub-ul {
        list-style-type: none;
    }
    ul .sub-ul > li {
        text-indent: -5px;
        margin-left: -15px;
    }
    ul .sub-ul > li:before {
        content: '-';
        margin-right: 5px;
    }
</style>
                    <div class="new_pattern">
                        
                        <style>
                            .nowrap {
                                white-space: nowrap;
                            }

                            table.form td.right {
                                white-space: nowrap;
                                min-width: 60px;
                            }

                            .validate_input {
                                width: 215px;
                            }

                            .validate_icon {
                                width: 28px;
                            }

                            .validate_msg {
                                min-width: 200px;
                                position: relative;
                            }

                                .validate_msg div.error, .validate_msg div.success {
                                    width: 100%;
                                    margin-left: 0;
                                    padding: 0;
                                }
                        </style>
                        <table class="form" cellpadding="0" cellspacing="0">
                            
                            <tr>
                                <td class="right"> อีเมล์ </td>
                                <td class="red">*</td>
                                <td class="validate_input">
                                    <input name="email" type="text" id="email" class="required" data-msg-default="กรุณากรอกอีเมล์ของท่าน">
                                </td>
                                <td class="error_msg" id="error_email_icon"></td>
                                <td class="error_msg" id="error_email"></td>
                            </tr>
                            <tr>
                                <td class="right">เบอร์โทรศัพท์ </td>
                                <td class="red">*</td>
                                <td class="validate_input">+&nbsp;<select name="contact_no_country" id="contact_no_country" class="required contact_no_country" data-msg-default="กรุณาเลือกรหัสประเทศ" style="width: 60px;">
	<option value="44">44</option>
	<option value="60">60</option>
	<option value="61">61</option>
	<option value="62">62</option>
	<option selected="selected" value="66">66</option>
	<option value="81">81</option>
	<option value="82">82</option>
	<option value="84">84</option>
	<option value="855">855</option>
	<option value="86">86</option>
	<option value="91">91</option>

</select>&nbsp;-&nbsp;<input name="contact_no" type="text" id="contact_no" class="required contact_no" data-msg-default="กรุณากรอกหมายเลขโทรศัพท์ของท่าน">
                                </td>
                                <td class="error_msg" id="error_contact_no_icon"></td>
                                <td class="error_msg" id="error_contact_no"></td>
                            </tr>
                            
                            <tr>
                                <td class="right"></td>
                                <td class="red"></td>
                                <td class="validate_input">
                                    <hr style="width: 212px;">
                                </td>
                                <td class="validate_icon"></td>
                                <td class="validate_msg"></td>
                            </tr>
                            
                            <tr>
                                <td class="right">สกุลเงิน </td>
                                <td class="red">*</td>
                                <td class="validate_input">
                                    <select name="currency" id="currency" cssclas="required" data-msg-default="กรุณาเลือกสกุลเงินที่ท่านต้องการ&lt;br />สกุลเงินที่ท่านเลือกจะไม่สามารถเปลี่ยนแปลงได้">
	<option value="IDR">อินโดนีเซียรูเปียห์</option>
	<option value="KRW">วอน</option>
	<option value="MYR">ริงกิตมาเลเซีย</option>
	<option value="RMB">หยวน</option>
	<option selected="selected" value="THB">บาท</option>
	<option value="USD">ดอลลาร์สหรัฐ</option>
	<option value="VND">ดอง</option>

</select>
                                    
                                </td>
                                <td class="validate_icon"></td>
                                <td class="validate_msg"></td>
                            </tr>
                            
                            <tr>
                                <td class="right"></td>
                                <td class="red"></td>
                                <td class="validate_input">
                                    <hr style="width: 212px;">
                                </td>
                                <td class="validate_icon"></td>
                                <td class="validate_msg"></td>
                            </tr>
                            <tr>
                                <td class="right">ชื่อ – นามสกุล </td>
                                <td class="red">*</td>
                                <td class="validate_input">
                                    <input name="first_name" type="text" id="first_name" data-msg-default="คุณจะต้องทำการกรอก ชื่อและนามสกุลจริงที่ตรงกับบัญชีธนาคารของคุณเท่านั้นค่ะ">
                                </td>
                                <td class="error_msg" id="error_first_name_icon"></td>
                                <td class="error_msg" id="error_first_name"></td>
                            </tr>
                            <tr >
                                <td class="right">สกุล </td>
                                <td class="red">*</td>
                                <td class="validate_input">
                                    <input name="last_name" type="text" id="last_name" data-msg-default="กรุณากรอกนามสกุลของท่านเท่านั้น &lt;br /> รายการของบัตร, เช็ค และการโอนเงิน สามารถดำเนินการได้หากชื่อสกุลตรงกับบัญชีผู้ใช้งาน">
                                </td>
                                <td class="error_msg" id="error_last_name_icon"></td>
                                <td class="error_msg" id="error_last_name"></td>
                            </tr>
                            <tr>
                                <td class="right">วัน เดือน ปี เกิด </td>
                                <td class="red">*</td>
                                <td class="validate_input">
                                    <select name="day" id="day" cssclas="required" data-msg-default="กรุณากรอก วัน/เดือน/ปี เกิดของท่าน">
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
	<option value="9">9</option>
	<option value="10">10</option>
	<option value="11">11</option>
	<option value="12">12</option>
	<option value="13">13</option>
	<option value="14">14</option>
	<option value="15">15</option>
	<option value="16">16</option>
	<option value="17">17</option>
	<option value="18">18</option>
	<option value="19">19</option>
	<option value="20">20</option>
	<option value="21">21</option>
	<option value="22">22</option>
	<option value="23">23</option>
	<option value="24">24</option>
	<option value="25">25</option>
	<option value="26">26</option>
	<option value="27">27</option>
	<option value="28">28</option>
	<option value="29">29</option>
	<option value="30">30</option>
	<option value="31">31</option>

</select><span style="display: inline-block; width: 7px;"></span><select name="month" id="month" cssclas="required" onchange="populateDays()" data-msg-default="กรุณากรอก วัน/เดือน/ปี เกิดของท่าน">
	<option value="1">January</option>
	<option value="2">February</option>
	<option value="3">March</option>
	<option value="4">April</option>
	<option value="5">May</option>
	<option value="6">June</option>
	<option value="7">July</option>
	<option value="8">August</option>
	<option value="9">September</option>
	<option value="10">October</option>
	<option value="11">November</option>
	<option value="12">December</option>

</select><span style="display: inline-block; width: 7px;"></span><select name="year" id="year" cssclas="required" onchange="populateDays()" data-msg-default="กรุณากรอก วัน/เดือน/ปี เกิดของท่าน">
    <?php
    $already_selected_value = 1984;
    $earliest_year = 1950;

    foreach (range(date('Y'), $earliest_year) as $x) {
        print '<option value="'.$x.'"'.($x === $already_selected_value ? ' selected="selected"' : '').'>'.$x.'</option>';
    }
    ?>
</select>
                                </td>
                                <td class="validate_icon">&nbsp;</td>
                                <td class="validate_msg"></td>
                            </tr>
                            <tr>
                                <td class="right"></td>
                                <td class="red"></td>
                                <td class="validate_input">
                                    <hr style="width: 212px;">
                                </td>
                                <td class="validate_icon"></td>
                                <td class="validate_msg"></td>
                            </tr>
                            <tr>
                                <td class="right">ชื่อผู้ใช้งาน </td>
                                <td class="red">*</td>
                                <td class="validate_input">
                                    <input name="username" type="text" id="username" class="required" data-msg-default="กรุณากรอกชื่อผู้ใช้งานที่ท่านต้องการ">
                                </td>
                                <td class="error_msg" id="error_username_icon"></td>
                                <td class="error_msg" id="error_username"></td>
                            </tr>
                            <tr>
                                <td class="right" style="vertical-align: top;">รหัสผ่าน </td>
                                <td class="red" style="vertical-align: top;">*</td>
                                <td class="validate_input">
                                    <input name="password" type="password" id="password" class="required" data-msg-default="กรุณากรอกรหัสผ่านของท่าน">
                                    <div class="password_checker hide">
                                        <style>
                                            span.password {
                                                display: inline-block;
                                                width: 36px;
                                                height: 6px;
                                                padding-right: 5px;
                                                background-color: #808080;
                                            }

                                            .color_weak {
                                                color: #d6b500 !important;
                                            }

                                            .background_weak {
                                                background: #d6b500 !important;
                                            }

                                            .color_good {
                                                color: #00d60f !important;
                                            }

                                            .background_good {
                                                background: #00d60f !important;
                                            }

                                            .color_strong {
                                                color: #2a8fbd !important;
                                            }

                                            .background_strong {
                                                background: #2a8fbd !important;
                                            }

                                            .validate_icon, .validate_msg {
                                                vertical-align: top;
                                                padding-top: 5px;
                                            }

                                            .password_desc_weak, .password_desc_good, .password_desc_strong {
                                                line-height: normal;
                                            }

                                            .rule_length i, .rule_alphanumeric i, .rule_space i {
                                                margin-top: -2px;
                                                margin-right: 2px;
                                            }

                                            div.grey[for=password] {
                                                line-height: 20px !important;
                                            }
                                        </style>
                                        <span class="password"></span>
                                        <span class="password"></span>
                                        <span class="password"></span>
                                        <div class="float_right" id="password_score" style="padding-right: 6px;">
                                        </div>
                                        <div>
                                            <div class="password_desc_weak hide color_weak">แนะนำให้ทำการตั้งรหัสผ่านด้วยการผสมตัวอักษรและตัวเลขพิเศษให้มากขี้น</div>
                                            <div class="password_desc_good hide color_good">การตั้งรหัสผ่านอยู่ในระดับซับซ้อนพอสมควร และสามารถปรับปรุงได้ในอนาคต</div>
                                            <div class="password_desc_strong hide color_strong">การตั้งรหัสผ่านอยู่ในระดับที่คาดเดาได้ยากมาก กรุณาจำรหัสผ่านของคุณให้ดีด้วยคะ</div>
                                        </div>
                                        <div class="rule_checker hide">
                                            <div class="rule_length">
                                                <i class="sprite_error">&nbsp;</i>ความยาว 6-20 ตัวอักษร
                                            </div>
                                            <div class="rule_alphanumeric">
                                                <i class="sprite_error">&nbsp;</i>ตัวอักษรผสมตังเลข
                                            </div>
                                            <div class="rule_space">
                                                <i class="sprite_error">&nbsp;</i>ไม่ควรมีช่องว่าง
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="validate_icon"></td>
                                <td class="validate_msg"></td>
                            </tr>
                            <tr>
                                <td class="right">ยืนยันรหัสผ่าน </td>
                                <td class="red">*</td>
                                <td class="validate_input">
                                    <input name="c_password" type="password" id="c_password" class="required" data-msg-default="กรุณากรอกรหัสผ่านของท่านอีกครั้ง">
                                </td>
                                <td class="error_msg" id="error_c_password_icon"></td>
                                <td class="error_msg" id="error_c_password"></td>
                            </tr>
                            <tr>
                                <td class="right"></td>
                                <td class="red"></td>
                                <td class="validate_input">
                                    <hr style="width: 212px;">
                                </td>
                                <td class="validate_icon"></td>
                                <td class="validate_msg"></td>
                            </tr>
                            
                            
                            <tr id="line_tr" class="">
	<td class="right">Line ID </td>
	<td class="red"></td>
	<td class="validate_input">
                                    <input name="line_id" type="text" id="line_id" data-msg-default="กรุณากรอกไลน์ไอดีของคุณ">
                                </td>
	<td class="validate_icon"></td>
	<td class="validate_msg"></td>
</tr>

                            <tr id="line_tr2">
	<td class="right"></td>
	<td class="red"></td>
	<td class="validate_input">
                                    <hr style="width: 212px;">
                                </td>
	<td class="validate_icon"></td>
	<td class="validate_msg"></td>
</tr>

                            <tr id="row_affiliate" class="">
	<td class="right">พันธมิตร ID </td>
	<td class="red"></td>
	<td class="validate_input">
                                    <input name="affiliate_id" type="text" maxlength="19" id="affiliate_id" class="numeric" data-msg-default="กรุณากรอกพันธมิตร ID">
                                </td>
	<td class="validate_icon"></td>
	<td class="validate_msg"></td>
</tr>
                            <tr>
                                <td class="right"></td>
                                <td class="red"></td>
                                <td class="validate_input">
                                    <input type="submit" style="position: absolute; left: -9999px; width: 1px; height: 1px;">
                                    <button type="button" class="button_submit center" style="width: 172px;" onclick="final_submit();">สมัครสมาชิก</button>
                                </td>
                                <td class="validate_icon"></td>
                                <td class="validate_msg"></td>
                            </tr>
                            <tr>
                                <td colspan="5">
                                    <br>
                                    <span class="line_height_normal">ในการสมัครสมาชิกนี้ ข้าพเจ้าขอยืนยันว่ามีอายุครบ 18  ปีบริบรูณ์ ได้อ่าน และยอมรับข้อกำหนดและเงื่อนไขทั้งหมดของทางเว็บไซต์ <a href='javascript:load_info("/termOfUse_en.shtml");'>ดูข้อกำหนดและเงื่อนไข ที่
นี่</a> </span>
                                </td>
                            </tr>
                        </table>
                        <div id="div_currency">
                        </div>

                    </div>
                </div>
            </div>
            <div id="messageModal" class="modal hide fade left background-grey" data-backdrop="static">
                <div class="modal-body">
                    <div class="message">
                        
                    </div>
                    <br>
                    <div class="center">
                        <a href="#" class="button_submit center closeModal" data-dismiss="modal" aria-hidden="true">ปิด </a>
                        
                    </div>
                </div>
            </div>
            <div id="redirectModal" class="modal hide fade left background-grey" data-backdrop="static">
                <div class="modal-body">
                    <div class="message">
                        การสมัครสมาชิกของท่านเสร็จสมบรูณ์แล้วค่ะ บัญชีของท่านพร้อมใช้งานและ ต่อจากนี้ไปขอเชิญท่านสัมผัสกับประสบการณ์ความสนุกรูปแบบใหม่ และความตื่นเต้นเร้าใจในการเกมส์การเดิมพันหลากหลายประเภทได้แล้วค่ะ
                    </div>
                    <br>
                    <div class="center">
                        <a href="javascript:void(0)" onclick="redirectMyAccountCard();" class="button_submit center closeModal" aria-hidden="true">ปิด </a>
                    </div>
                </div>
            </div>
            
        </div>
</form>
</body>
</html>