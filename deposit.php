
<?php 
require('common/config.php');
if($_SESSION['refresh_token']=='')
{ 
    echo "<script>location.href = 'index.php';</script>";
    exit;
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head id="Head1"><title>
	จัดการด้านการเงิน
</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
<link rel="shortcut icon" href="_static/_css/img/favicon.ico" type="image/x-icon" />

<?php include('common/module/head.php'); ?> 


<link href="_static/_css/depositwithdrawal.css?v=123" rel="stylesheet" />
     
    <link rel="stylesheet" href="_static/_css/font-awesome/css/font-awesome.min.css">

    <script>
        function doOpenWindowWithPost(url, title, height, width, params) {
            var form = document.createElement("form");
            form.setAttribute("method", "post");
            form.setAttribute("action", url);
            form.setAttribute("target", "_self");

            for (var i in params) {
                if (params.hasOwnProperty(i)) {
                    var input = document.createElement('input');
                    input.type = 'hidden';
                    input.name = i;
                    input.value = params[i];
                    form.appendChild(input);
                }
            }
            document.body.appendChild(form);
            form.submit();
            document.body.removeChild(form);
        }

        function doPopUpDetail(url) {
            var walletIds = "";
            var walletBalances = "";
            var walletNames = "";
            var accountSafety = "";
            if (!isNaN(parseFloat($("div.total_wallet_balance a span").html()))) {
                walletIds = "-1|";
                walletBalances = $("div.total_wallet_balance a span").html() + "|";
                walletNames = "Balance|";
                var listItems = $(".wallet_balance li");
                listItems.each(function (idx, li) {
                    var wallet = $(li);
                    if (typeof wallet.attr("id") != "undefined") {
                        var walletBalance = wallet.find('.wallet_value').text();
                        var walletName = wallet.find('.wallet_name').html().replace("<", "&lt;").replace(">", "&gt;");
                        walletIds += wallet.attr("id") + "|";
                        walletBalances += walletBalance + "|";
                        walletNames += walletName + "|";
                    }
                });

                var $a = $(".account_safety"), $r = $("#account_safety_registered"), $b = $("#account_safety_bank_details"), $p = $("#account_safety_phone"), $e = $("#account_safety_email"), $t = $("#account_safety_total");

                accountSafety = $t.attr("class") + "|" + $a.find(".safe_level").html() + "|" + $r.attr("class") + "|" + $b.attr("class") + "|" + $p.attr("class") + "|" + $e.attr("class");
            }

            var param = { 'id': walletIds, 'bal': walletBalances, 'name': walletNames, 'as': accountSafety }
            //console.log('url:' + url);
            //console.log('id:' + walletIds);
            //console.log('bal:' + walletBalances);
            //console.log('name:' + walletNames);
            //console.log('as:' + walletIds);
            doOpenWindowWithPost(url, '', '1000', '1000', param);
        }

        function popupVerify(link, msg, contact_or_email) {
            try { $("#modalFrameClone").remove(); } catch (e) { }
            var popup = $("#modalFrame").clone();
            popup.attr("id", "modalFrameClone");
            popup.find("a").clone().appendTo(popup.find("a").parent());
            popup.find("a:last").addClass("button_grey").removeClass("button_submit");
            popup.find("a:first").attr("data-dismiss", "").attr("href", link).html("ส่งรหัสยืนยัน");
    		popup.appendTo("body");
    		$("#modalFrameClone").find("p.message").html(msg.replace("[contact_or_email]", contact_or_email));
    		$("#modalFrameClone").modal("show");
        }
		
		updatePMessage= function () {
    		$.ajax({
    			type: "POST",
    			url: "/common/handler.aspx/pmessageCount",
    			contentType: "application/json",
    			dataType: "json",
    			success: function (msg) {
    				try {
    					$("#private_message").find("span").html(msg.d);
    					if (parseInt(msg.d)) {
    						$("#private_message").find("i").removeClass("sprite_private_message").addClass("sprite_private_message_on");;
    						$("#private_message1 span").html(parseInt(msg.d));
    					}
    					else {
    						$("#private_message").find("i").removeClass("sprite_private_message_on").addClass("sprite_private_message");;
    					}
    				} catch (e) {
    				}
    			}
    		});
    	}
    </script>
</head>
<body class="account grey">
<?php include('common/module/header.php'); ?>
<?php include('common/module/menu.php'); ?>
<?php include('common/module/loginframe.php'); ?>
<?php include('common/module/modalFrame.php'); ?>

    <form method="post" action="FastDepositExV2.aspx" id="aspnetForm" enctype="multipart/form-data">
<div class="aspNetHidden">

		<div class="mainContent clear">
             <div>
                <div class="menuContent marquee" onclick="openAnnouncemnet()" style="margin: 0 0 10px;">
                    <div class="float">
                        <i class="sprite_announcement flip"></i>
                    </div>
                    <div>
                        <div id="marquee"></div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
			<div class="title special">บัญชีของฉัน <span>&#62;</span> 
				</div>
            <div class="mainContent_inner">
                 <div class="account_safety_container">
                    <div class="account_safety float">
                        <div class="account_safety_percentage">                    
                            <i id="account_safety_total" class="as1_logo_safe_percent" title="ระดับความปลอดภัยของคุณ"></i>
                        </div>
                        <div class="account_safety_info">
                            <div class="info_1"><span class="title">ระดับความปลอดภัยของบัญชี:</span> <span class="safe_level">การตรวจสอบบางส่วน</span></div>
                            <div class="info_2">
                                <a id="account_safety_registered" class="as_logo_registered claim"  data-container="body" data-class="account_safe" data-html="true" data-toggle="popover" data-placement="top" data-trigger="hover" title="" data-content="อัพเดท  &quot;ข้อมูลส่วนตัว &quot;เพื่อเพิ่มระดับความปลอดภัยให้บัญชีของคุณ และรับเลยทันทีเงินเดิมพันฟรี <span class='blue'>[cur] [amt]</span>" data-content-normal="อัพเดทโปรไฟล์" href="https://account.w88bkk.com/Profile/Edit.aspx" ></a>
                                <a id="account_safety_bank_details" class="as_logo_bank_details" data-container="body" data-class="account_safe" data-html="true" data-toggle="popover" data-placement="top" data-trigger="hover" title="" data-content="อัพเดท &quot;รายละเอียดธนาคาร&quot; เพื่อการ ฝาก-ถอนที่รวดเร็วยิ่งขึ้น" href="https://payment.w88bkk.com/View/BankingDetailsV2.aspx" target="_self"></a>
                                <a id="account_safety_phone" class="as_logo_phone claim" data-container="body" data-class="account_safe" data-html="true" data-toggle="popover" data-placement="top" data-trigger="hover" title="" data-content="ตรวจสอบ  &quot;หมายเลขโทรศัพท์ &quot; เพื่อเพิ่มระดับความปลอดภัยให้บัญชีของคุณ และรับเลยทันทีเงินเดิมพันฟรี <span class='blue'>[cur] [amt]</span>" data-content-done="เบอร์ติดต่อถูกต้อง"  data-content-claim="ตรวจสอบ &quot;เบอร์ติดต่อของคุณ&quot; ที่มีระดับความปลอดภัยสูง" href="javascript:popupVerify('https://account.w88bkk.com/Safety/ContactVerification.aspx', 'กด&quot;ส่งรหัสยืนยัน&quot;เพื่อนยืนยันเบอร์ติดต่อของคุณ.&quot;+[contact_or_email]&quot;', '66-****12226' );" ></a>
                                <a id="account_safety_email" class="as_logo_email claim" data-container="body" data-class="account_safe" data-html="true" data-toggle="popover" data-placement="top" data-trigger="hover" title="" data-content="ตรวจสอบ  &quot;อีเมล์ &quot; เพื่อเพิ่มระดับความปลอดภัยให้บัญชีของคุณ และรับเลยทันทีเงินเดิมพันฟรี<span class='blue'> [cur] [amt]</span>"  data-content-done="อีเมลถูกต้อง" data-content-claim="ตรวจสอบ &quot;ที่อยู่อิเมลล์ของคุณ&quot; ที่มีระดับความปลอดภัยสูง" href="javascript:popupVerify('https://account.w88bkk.com/Safety/EmailVerification.aspx', 'กด&quot;ส่งรหัสยืนยัน&quot;เพื่อนยืนยันอีเมลล์แอดเดรสของคุณ.&quot;[contact_or_email]&quot;', 'su*********2@gmail.com');"></a>
                            </div>
                        </div>
                    </div>
                    <div class="vip_logo_divider float hide"></div>
                    <div class="account_safety float">
                        <div class="account_safety_percentage">                    
                            <a href="https://www.w88bkk.com/VIP/Levels.aspx" target="_blank"></a>
                        </div>
                        <div class="account_safety_info">
                            <div class="">คุณมี<a href='https://account.w88bkk.com/message/inbox.aspx' id='private_message1' style='font-size:14px;color:red;'><span style='font-size:14px'>0</span> ข้อความใหม่</a>จากเรา</div>
							
                        </div>
						<div class="clear"></div>
						
                    </div>
                    <div class="float_right">
					    <div class="total_wallet_balance float center">
						    <div class="inner_container">
							    <a href="javascript:getWalletBalancev2Click();void(0);"><img src="_static/_css/img/grey/btn_refresh_off.png" type="hover" /></a><br /><br /><a class="dinpro" href="javascript:void(0);"><span class="dinpro">-</span></a><br /><br />คงเหลือ<br />(ยกเว้นโปกเกอร์ + F1 Fishing)
                            </div>
					    </div>
					    <div class="wallet_divider float"></div>
					    <div class="total_rewards_balance float center">
						    <div class="inner_container">
							    <a href="javascript:getRewardsPtClick();void(0);"><img src="_static/_css/img/grey/btn_refresh_off.png" type="hover" /></a><br /><br /><a class="dinpro" href="javascript:void(o);" type='rewardsaccountsummary'><span class="dinpro">-</span></a><br /><br />แต้มสะสมของ
                                <a href="javascript:void(o);" type='rewardsspin' style="position: absolute; top: 0px; right: 0px; height: 50px; padding-right: 3px;"><i id="rewards-status-img" class="rewards-status off"></i></a>
                            </div>
					    </div>
				    </div>
                </div>
				 
				<div class="account_menu">					
					<div class="float">
						<ul class="account_menu">
							
							<li><a class=""  href="#" onclick="doPopUpDetail('https://fundtransfer.w88bkk.com');">ย้ายเงิน</a></li>
                            <li><a class="  hover" href="#" onclick="doPopUpDetail('https://payment.w88bkk.com/view/DepositDefault.aspx');">ฝาก</a></li>
                             
                            <li><a class=" " href="#" onclick="doPopUpDetail('https://payment.w88bkk.com/view/withdrawal/BankTransfer.aspx');">ถอน</a></li>                            
                            

                            <li><a class=" " href="#" onclick="doPopUpDetail('https://fundtransfer.w88bkk.com/ClaimPromo.aspx');">รับฟรีเดิมพัน</a></li>
		 
                            <li><a class=" "  href="#" onclick="doPopUpDetail('https://account.w88bkk.com/history/depositwithdrawal.aspx');">ประวัติ</a></li>
                            
							<li><a class=" "  href="#" onclick="doPopUpDetail('https://account.w88bkk.com/Message/Upload.aspx');">อัพโหลด</a></li>
                        </ul></div>
					<div class="clear"></div>
				</div>    
				<div class="hide" id="wallet_locked_msg">คุณจะต้องทำการถอนเงินขั้นต่ำของ [cur] [amt] และตรวจสอบบัญชีของคุณเพื่อจะปลดล็อค ฟรีเดิมพัน นี้</div>
				<div class="wallet_balance_container clear"><ul class="wallet_balance"><li class="main_wallet locked" id="wallet0" style="position: relative;"><div class="wallet_value">0.00</div><div class="wallet_name">กระเป๋าหลัก</div></li><li class="main_wallet wallet_lock_icon" data-toggle="popover" data-content="คุณจะต้องทำการถอนเงินขั้นต่ำของ THB 500.00 และตรวจสอบบัญชีของคุณเพื่อจะปลดล็อค ฟรีเดิมพัน นี้" data-placement="top" data-trigger="hover" id="wallet00" style="position: relative;" data-original-title="" title=""><div class="wallet_value wallet_value_red">100.00</div><div class="wallet_name">กระเป๋าหลัก (ล็อก)</div></li><li class="empty" style="position: relative;"></li><li class="expand" id="wallet3" style="position: relative;"><div class="wallet_value">0.00</div><div class="wallet_name">คลับ W Grand, คลับอพอลโล, คลับบราวาโด้, คลับดิวิโน่, คลับเกลลาโด้, คลับแมสซิโม, คลับนูโอโว้, กีฬาอนิเมชั่น &amp; ล็อตเตอรี่</div></li></ul><div class="wallet_balance_line"></div><ul class="wallet_balance wallet_balance_alternate"><li id="wallet2" style="position: relative;"><div class="wallet_value">0.00</div><div class="wallet_name">a-Sports</div></li><li class="empty" style="position: relative;"></li><li id="wallet7" style="position: relative;"><div class="wallet_value">0.00</div><div class="wallet_name">e-Sports</div></li><li class="empty" style="position: relative;"></li><li id="wallet9" style="position: relative;"><div class="wallet_value">-</div><div class="wallet_name">i-Sports</div></li><li class="empty" style="position: relative;"></li><li id="wallet11" style="position: relative;"><div class="wallet_value">-</div><div class="wallet_name">x-Sports</div></li></ul><div class="wallet_balance_line"></div><ul class="wallet_balance wallet_balance_alternate"><li id="wallet4" style="position: relative;"><div class="wallet_value">0.00</div><div class="wallet_name">พาลาซโซ</div></li><li class="empty" style="position: relative;"></li><li id="wallet16" style="position: relative;"><div class="wallet_value">0.00</div><div class="wallet_name">F1 ตกปลา (RMB)</div></li><li class="empty" style="position: relative;"></li><li id="wallet6" style="position: relative;"><div class="wallet_value">-</div><div class="wallet_name">Poker (USD)</div></li><li class="empty" style="position: relative;"></li><li id="wallet8" style="position: relative;"><div class="wallet_value">0.00</div><div class="wallet_name">P2P</div></li></ul><div class="wallet_balance_line"></div></div>
					<div class="wallet_balance_line clear"></div>
					
    <div class="history_sub_menu_container">
        
                <ul class="history_sub_menu">
                    <li></li>
            
                <li><a href="#a" onclick="doPopUpDetail('https://payment.w88bkk.com/view/deposit/FastDepositEx.aspx');" class="110101 hover">ฝากเงินด่วน</a></li>
            
                </ul>
            
        <div class="clear"></div>
    </div>
    <div id="master_ContentPlaceHolder2_dividerMaintenance" class="history_sub_menu_container_divider">&nbsp;</div>
    <div class="clear"></div>
    
    
    <style>
        #ddlBankAccount {
            list-style-type: none;
            margin-left: 0px;
            margin-bottom: 15px;
            width: 202px;
        }

            #ddlBankAccount > li > label {
                font-size: 14px;
                vertical-align: bottom;
                padding-left: 5px;
            }

            #ddlBankAccount > li > input {
                margin-bottom: 2px;
            }

        .thMessageFD ol {
            counter-reset: item;
            display: table;
            margin: 0;
        }

        .thMessageFD > ol > li:before {
            content: counters(item, ".") ".";
        }

        .thMessageFD li {
            list-style: none;
            counter-increment: foo;
            display: table-row;
        }

            .thMessageFD li:before {
                content: counters(item, ".") " ";
                counter-increment: item;
                display: table-cell;
                text-align: right;
                padding-right: .3em;
            }

        .limitLineChat-div {
            float: left;
            width: 370px;
            margin: 0 auto;
            padding-bottom: 20px;
        }
    </style>
    <br />
    <div class="profile_page_background">
        <div class="limit-div">
            <table class="limit-table">
                <tr>
                    <td class="limit-table-font-left">
                        ประเภท:</td>
                    <td class="limit-table-font-right">
                        ฝากเงินด่วน</td>
                </tr>
                <tr>
                    <td class="limit-table-font-left">
                        วิธีการ:</td>
                    <td class="limit-table-font-right">
                        ออฟไลน์</td>
                </tr>
                <tr>
                    <td class="limit-table-font-left">
                        การจำกัดยอดขั้นต่ำ /สูงสุด:</td>
                    <td class="limit-table-font-right">
                        250.00/50,000.00</td>
                </tr>
                <tr>
                    <td class="limit-table-font-left">
                        การจำกัดยอดเงินต่อวัน:</td>
                    <td class="limit-table-font-right">
                        ไม่จำกัด</td>
                </tr>
                <tr>
                    <td class="limit-table-font-left">
                        ยอดเงินที่ทำรายการได้:</td>
                    <td class="limit-table-font-right">
                        ไม่จำกัด</td>
                </tr>
            </table>
            <br />
            <br />
            <span id="lblSideNote"><a href="http://www.w88info.com/th/?p=5032" style="text-decoration:underline;" target="_blank">(คลิกที่นี่)</a> <b>เพื่อดูตัวอย่างการแจ้งฝากเงิน</b> ขอเรียนสมาชิกให้ทราบว่าทางเว็บเราไม่มีนโยบายในการรับฝากเงินผ่าน"เช็ค" หรือ"ตัวแลกเงิน"(เช็คบุคคลหรือบริษัท)</span>
            <br />
            <br />
            <br />
            <span id="lblMessage1">หมายเหตุ: หลังจากทำรายการฝากเงินเรียบร้อยแล้วระบบจะปรับยอด อัตโนมัติภายใน 5 นาที หากเกิดปัญหา กรุณา<a href="https://goo.gl/rvSRxx" style="text-decoration:underline;" target="_blank">คลิกที่นี่</a> เพื่อติดต่อฝ่ายบริการลูกค้าของเราได้ตลอด 24 ชม. ทุกวัน</span>
            <br />
            <br />
            <br />
            <span id="lblMessage2">การฝากเงินด่วน: รับการฝากผ่าน ช่องทาง Internet Banking, ATM, CDM และ Mobile Banking<br/><br/>*สำคัญ! กรุณาทำการเพิ่มข้อมูลบัญชีฝาก-ถอน ก่อนทำการฝากเงิน*</span>
            <br />
            <br />
            <br />
            <div class="tutorialLink hide"><a href="mp4:TH/Deposit-THB-Bank-Transfer-TH" class="button_submit center dinpro preview popup" custom-url="rtmp://asecdnv.w88media.com/cfx/st">วิธีการฝากเงิน</a></div>
            <div id="master_ContentPlaceHolder2_DepositContent_lineChatDiv" class="limitLineChat-div">
                
                <img src="_static/img/linechat/LineChatQR.png" style="width: 80px; height: 80px; position: absolute">
                <a onclick="showLineChatModal()">
                    <img src="_static/img/linechat/grey/dark-th-th.jpg" style="width: 280px; height: 80px"></a>
                </div>
        </div>

        <table id="master_ContentPlaceHolder2_DepositContent_tableForm" class="form table-left-border" style="display: table">
	<tr>
		<td></td>
		<td colspan="5" style="width: 200px;">
                    <span id="master_ContentPlaceHolder2_DepositContent_lblAddBankAccountMessage">สำหรับการฝากเงินครั้งแรก หรือ การเพิ่มบัญชีในการฝากครั้งต่อไป คลิกที่นี่เพื่อ  <a href="../BankingDetailsV2.aspx?AddBankAccount=1" style="text-decoration:underline;">เพิ่มเลขที่บัญชีฝาก-ถอน</a></span></td>
	</tr>
	<tr>
		<td></td>
		<td colspan="5" style="width: 200px;">
                    <div id="IDRimgFastDeposit">
                    </div>
                </td>
	</tr>
	<tr>
		<td></td>
		<td class="verticalAlign"></td>
		<td class="red"></td>
		<td class="validate_input">
                    <span id="master_ContentPlaceHolder2_DepositContent_lblAmountMessage" style="color:Red;"></span></td>
		<td class="validate_icon"></td>
		<td></td>
	</tr>
	<tr>
		<td></td>
		<td class="verticalAlign">
                <label for="txtDepositAmount" id="master_ContentPlaceHolder2_DepositContent_lblDepositAmount">ยอดเงินการฝาก</label></td>
		<td class="red">*</td>
		<td class="validate_input">
                <input name="ctl00$ctl00$master_ContentPlaceHolder2$DepositContent$txtDepositAmount" type="text" maxlength="15" id="txtDepositAmount" class="required" onKeyPress="return ValidatePositiveDecimal(this, event);" data-msg-default="โปรดกรอกข้อมูลให้ถูกต้อง" /></td>
		<td class="validate_icon"></td>
		<td></td>
	</tr>
	<tr class="account-member">
		<td></td>
		<td class="verticalAlign">
                    <label for="ddlSystemAccount" id="master_ContentPlaceHolder2_DepositContent_lblSystemAccount">บัญชี</label></td>
		<td class="red">*</td>
		<td>
                    <ul id="ddlSystemAccount" class="required" data-msg-default="กรุณาเลือกข้อมูลที่ถูกต้องบัญชี" style="font-size:Large;">
			<li><input id="ddlSystemAccount_0" type="radio" name="ctl00$ctl00$master_ContentPlaceHolder2$DepositContent$ddlSystemAccount" value="116551" checked="checked" onclick="javascript:ShowSystemBankAccountInfoV2(&#39;Miss. Sing Huy&#39;,&#39;0478429010&#39;,&#39;ธนาคารกสิกรไทย&#39;,&#39;NA&#39;,1);" /><label for="ddlSystemAccount_0">KBANK-29010 <a class='bank-downtime-logo off'></a></label></li>
			<li><input id="ddlSystemAccount_1" type="radio" name="ctl00$ctl00$master_ContentPlaceHolder2$DepositContent$ddlSystemAccount" value="116773" onclick="javascript:ShowSystemBankAccountInfoV2(&#39;Pin Chuon&#39;,&#39;0478896964&#39;,&#39;ธนาคารกสิกรไทย&#39;,&#39;NA&#39;,1);" /><label for="ddlSystemAccount_1">KBANK-96964 <a class='bank-downtime-logo off'></a></label></li>
			<li><input id="ddlSystemAccount_2" type="radio" name="ctl00$ctl00$master_ContentPlaceHolder2$DepositContent$ddlSystemAccount" value="117605" onclick="javascript:ShowSystemBankAccountInfoV2(&#39;Miss. Da Sok&#39;,&#39;6729370750&#39;,&#39;ธนาคารกรุงไทย&#39;,&#39;NA&#39;,1);" /><label for="ddlSystemAccount_2">KTB-70750 <a class='bank-downtime-logo off'></a></label></li>
			<li><input id="ddlSystemAccount_3" type="radio" name="ctl00$ctl00$master_ContentPlaceHolder2$DepositContent$ddlSystemAccount" value="117591" onclick="javascript:ShowSystemBankAccountInfoV2(&#39;Panida Boonjan&#39;,&#39;4140151561&#39;,&#39;ธนาคารไทยพาณิชย์&#39;,&#39;NA&#39;,1);" /><label for="ddlSystemAccount_3">SCB-51561 <a class='bank-downtime-logo off'></a></label></li>

		</ul>
                    
                    <div id="master_ContentPlaceHolder2_DepositContent_offlineBankMessage" style="margin-bottom:5px;width:210px;display:none;">
                        <span id="lblOfflineBankMessage">ธนาคารออฟไลน์ ณ ขณะนี้ กรุณาเลือกฝากธนาคารอื่นเ</span></div>
                    <div style="margin-bottom: 5px; width: 210px;">
                        <span id="lblCall" style="display:none;">หากติดปัญหาเกี่ยวกับการฝาก-ถอนเงิน <a href="javascript: load_livechat();" style="text-decoration:underline;">คลิกที่นี่</a></span></div>
                    <table id="tblBankInfo" style="margin-bottom:5px;display:block;">
			<tr>
				<td class="custom-padding-bottom">
                                <span id="master_ContentPlaceHolder2_DepositContent_lblSystemAccountBank" class="custom-bank-info-size">ธนาคาร:</span>
                                <span id="lblSystemAccountBankValue" class="custom-bank-info-size">ธนาคารกสิกรไทย</span><br />
                            </td>
			</tr>
			<tr>
				<td class="custom-padding-bottom">
                                <span id="master_ContentPlaceHolder2_DepositContent_lblSystemAccountBranch" class="custom-bank-info-size">สาขาธนาคาร:</span>
                                <span id="lblSystemAccountBranchValue" class="custom-bank-info-size">NA</span><br />
                            </td>
			</tr>
			<tr>
				<td class="custom-padding-bottom">
                                <span id="master_ContentPlaceHolder2_DepositContent_lblSystemAccountName" class="custom-bank-info-size">ชื่อบัญชี:</span>
                                <span id="lblSystemAccountNameValue" class="custom-bank-info-size">Miss. Sing Huy</span><br />
                            </td>
			</tr>
			<tr>
				<td class="custom-padding-bottom">
                                <span id="master_ContentPlaceHolder2_DepositContent_lblSystemAccountNo" class="custom-bank-info-size">หมายเลขบัญชี:</span>
                                <span id="lblSystemAccountNoValue" class="custom-bank-info-size">0478429010</span>
                            </td>
			</tr>
		</table>
		
                    </td>
		<td class="validate_icon"></td>
		<td></td>
	</tr>
	<tr id="master_ContentPlaceHolder2_DepositContent_trDepositTime">
		<td></td>
		<td class="verticalAlign">
                    <span id="master_ContentPlaceHolder2_DepositContent_lblDepositDateTime">วัน/เวลา ที่ฝากเงิน</span></td>
		<td class="red">*</td>
		<td class="validate_input">
                    <input name="ctl00$ctl00$master_ContentPlaceHolder2$DepositContent$txtDatePicker" type="text" readonly="readonly" id="txtDatePicker" class="required" data-msg-default="กรุณาทำรายการด้วย ข้อมูลเวลาและวันที่ที่ถูกต้อง อ้างอิงจากใบสลิปการฝากเงิน เพื่อหลีกเลี่ยงความล่าช้าที่อาจเกิดขึ้นได้" style="height:14px;width:65px;cursor: pointer" />
                    <input type="hidden" name="ctl00$ctl00$master_ContentPlaceHolder2$DepositContent$hidSelectedDate" id="hidSelectedDate" />
                    <select name="ctl00$ctl00$master_ContentPlaceHolder2$DepositContent$ddlHour" id="ddlHour" class="required" data-msg-default="กรุณาทำรายการด้วย ข้อมูลเวลาและวันที่ที่ถูกต้อง อ้างอิงจากใบสลิปการฝากเงิน เพื่อหลีกเลี่ยงความล่าช้าที่อาจเกิดขึ้นได้" style="width:56px;">
			<option value="0">ชั่วโมง</option>
			<option value="00">00</option>
			<option value="01">01</option>
			<option value="02">02</option>
			<option value="03">03</option>
			<option value="04">04</option>
			<option value="05">05</option>
			<option value="06">06</option>
			<option value="07">07</option>
			<option value="08">08</option>
			<option value="09">09</option>
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

		</select>
                    <select name="ctl00$ctl00$master_ContentPlaceHolder2$DepositContent$ddlMinute" id="ddlMinute" class="required" data-msg-default="กรุณาทำรายการด้วย ข้อมูลเวลาและวันที่ที่ถูกต้อง อ้างอิงจากใบสลิปการฝากเงิน เพื่อหลีกเลี่ยงความล่าช้าที่อาจเกิดขึ้นได้" style="width:64px;">
			<option value="0">นาที</option>
			<option value="00">00</option>
			<option value="01">01</option>
			<option value="02">02</option>
			<option value="03">03</option>
			<option value="04">04</option>
			<option value="05">05</option>
			<option value="06">06</option>
			<option value="07">07</option>
			<option value="08">08</option>
			<option value="09">09</option>
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
			<option value="32">32</option>
			<option value="33">33</option>
			<option value="34">34</option>
			<option value="35">35</option>
			<option value="36">36</option>
			<option value="37">37</option>
			<option value="38">38</option>
			<option value="39">39</option>
			<option value="40">40</option>
			<option value="41">41</option>
			<option value="42">42</option>
			<option value="43">43</option>
			<option value="44">44</option>
			<option value="45">45</option>
			<option value="46">46</option>
			<option value="47">47</option>
			<option value="48">48</option>
			<option value="49">49</option>
			<option value="50">50</option>
			<option value="51">51</option>
			<option value="52">52</option>
			<option value="53">53</option>
			<option value="54">54</option>
			<option value="55">55</option>
			<option value="56">56</option>
			<option value="57">57</option>
			<option value="58">58</option>
			<option value="59">59</option>

		</select>
                </td>
		<td class="validate_icon"></td>
		<td></td>
	</tr>
	<tr>
		<td></td>
		<td class="verticalAlign">
                    <label for="ddlDepositChannel" id="master_ContentPlaceHolder2_DepositContent_lblDepositChannel">ช่องทางการฝากเงิน</label></td>
		<td class="red">*</td>
		<td class="validate_input">
                    <select name="ctl00$ctl00$master_ContentPlaceHolder2$DepositContent$ddlDepositChannel" id="ddlDepositChannel" class="required" onChange="SelectDepositChannel(this);" data-msg-default="กรุณาเลือกข้อมูลที่ถูกต้องช่องทางการฝากเงิน">
			<option selected="selected" value="0">--กรุณาเลือก--</option>
			<option value="ATM">ฝากผ่านตู้เอทีเอ็ม</option>
			<option value="iBanking">ฝากผ่านระบบอินเตอร์เน็ต</option>
			<option value="mBanking">ฝากผ่านโทรศัพท์มือถือ</option>
			<option value="CDM">ฝากผ่านเครื่องฝากเงินสดอัตโนมัติ</option>

		</select></td>
		<td class="validate_icon"></td>
		<td></td>
	</tr>
	<tr id="master_ContentPlaceHolder2_DepositContent_trUpload" class="trUpload" style="display: none;">
		<td></td>
		<td class="verticalAlign">
                    <label for="fuFile" id="lblUpload">ไฟล์ (ขนาดไม่เกิน 2Mb)</label></td>
		<td class="red"></td>
		<td class="validate_input">
                    <input type="submit" name="ctl00$ctl00$master_ContentPlaceHolder2$DepositContent$btnUploadFile" value="Choose File" onclick="TriggerFileUpload();return (false);" id="master_ContentPlaceHolder2_DepositContent_btnUploadFile" data-msg-default="กรุณาเลือกไฟล์ที่ถูกต้องและมีขนาดไม่เกิน 2 Mb" style="width:80px;" />
                    &nbsp;<span id="master_ContentPlaceHolder2_DepositContent_lblFileUpload">No file chosen</span>
                    
                    <input type="file" name="ctl00$ctl00$master_ContentPlaceHolder2$DepositContent$fuFile" id="fuFile" onchange="ApplyFileNameText();" accept="image/*" data-msg-default="กรุณาเลือกไฟล์ที่ถูกต้องและมีขนาดไม่เกิน 2 Mb" style="display: none; visibility: hidden;" />
                </td>
		<td class="validate_icon"></td>
		<td></td>
	</tr>
	<tr class="account-bank">
		<td></td>
		<td class="verticalAlign">
                    <label for="ddlBank_Input" id="master_ContentPlaceHolder2_DepositContent_lblBank_Input">ธนาคารของคุณ</label></td>
		<td class="red">*</td>
		<td class="validate_input">
                    <select name="ctl00$ctl00$master_ContentPlaceHolder2$DepositContent$ddlBank_Input" id="ddlBank_Input" class="required" onChange="ShowBankNameInput_2(this);" data-msg-default="กรุณาเลือกข้อมูลที่ถูกต้องธนาคารของคุณ">
			<option value="0">--กรุณาเลือก--</option>
			<option value="SCB">ธนาคารไทยพาณิชย์</option>
			<option value="BBL">ธนาคารกรุงเทพ</option>
			<option value="KBANK">ธนาคารกสิกรไทย</option>
			<option value="KTB">ธนาคารกรุงไทย</option>
			<option value="BOA">ธนาคารกรุงศรีอยุธยา</option>
			<option value="GSB">ธนาคารออมสิน</option>
			<option value="TMB">ธนาคารทหารไทย</option>
			<option value="TBANK">ธนาคารธนชาต</option>
			<option value="CIMBT">ธนาคาร ซีไอเอ็มบี ไทย</option>
			<option value="KNK">ธนาคารเกียรตินาคิน</option>
			<option value="UOB">UOB Bank</option>
			<option value="BAAC">ธนาคารเพื่อการเกษตรและสหกรณ์การเกษตร (ธกส.)</option>
			<option value="LHB">ธนาคารแลนด์ แอนด์ เฮ้าส์</option>
			<option value="OTHER">ธนาคารอื่นๆ</option>

		</select>
                    
                </td>
		<td class="validate_icon"></td>
		<td></td>
	</tr>
	<tr class="trBankName_Input" style="display: none;">
		<td></td>
		<td class="verticalAlign">
                    <label for="txtBank_Input" id="lblBankName_Input">ชื่อธนาคารของคุณ</label></td>
		<td class="red">*</td>
		<td class="validate_input">
                    <input name="ctl00$ctl00$master_ContentPlaceHolder2$DepositContent$txtBank_Input" type="text" maxlength="100" id="txtBank_Input" class="required" onKeyPress="return ValidateAlphaNumeric(event);" data-msg-default="โปรดกรอกข้อมูลให้ถูกต้อง" />
                    
                </td>
		<td class="validate_icon"></td>
		<td></td>
	</tr>
	<tr class="account-name">
		<td></td>
		<td class="verticalAlign">
                    <span id="master_ContentPlaceHolder2_DepositContent_lblAccountName_Input">ชื่อบัญชีของคุณ</span></td>
		<td class="red">*</td>
		<td class="validate_input" style="padding-top: 7px">
                    
                &nbsp;&nbsp;<span id="master_ContentPlaceHolder2_DepositContent_lblAccountNamevalue_Input">สุริยา ส่องแสง</span>
                    
                </td>
		<td class="validate_icon"></td>
		<td></td>
	</tr>
	<tr class="account-member-Input">
		<td></td>
		<td class="verticalAlign">
                    <label for="ddlBankAccount" id="master_ContentPlaceHolder2_DepositContent_lblBankAcount"><b>เพิ่มบัญชีธนาคารของคุณที่นี่</b></label></td>
		<td class="red">
                    *</td>
		<td>
                    <ul id="ddlBankAccount" class="required">
			<li><input id="ddlBankAccount_0" type="radio" name="ctl00$ctl00$master_ContentPlaceHolder2$DepositContent$ddlBankAccount" value="1700246" checked="checked" /><label for="ddlBankAccount_0">BBL-******9165 <a class='bank-downtime-logo off'></a></label></li>

		</ul></td>
		<td class="validate_icon"></td>
		<td></td>
	</tr>
	<tr id="master_ContentPlaceHolder2_DepositContent_bankAddAccountRow" style="display: none">
		<td></td>
		<td class="verticalAlign"></td>
		<td class="red"></td>
		<td>
                    <div style="float: left;" id="bankAddAccount"><a href="#" id="master_ContentPlaceHolder2_DepositContent_lnkAddBankAccount" class="href-addbank" onclick="hideBankAdd()">
                        <span id="master_ContentPlaceHolder2_DepositContent_lblAddBankAccount" style="text-decoration: underline; font-size: 11px">เพิ่มเลขที่บัญชธนาคาร</span></a></div>
                </td>
		<td class="validate_icon"></td>
		<td></td>
	</tr>
	<tr id="master_ContentPlaceHolder2_DepositContent_bankDetailsAddRow" style="display: none">
		<td></td>
		<td class="verticalAlign"></td>
		<td class="red"></td>
		<td>
                    <div id="bankDetailsAdd" class="bank-details-add-div-deposit">
                        <table id="master_ContentPlaceHolder2_DepositContent_tblBankForm" class="formAccountAdd">
			<tr>
				<td></td>
				<td class="verticalAlign">
                                    <label for="ddlBank" id="master_ContentPlaceHolder2_DepositContent_lblBank">ธนาคารของคุณ</label></td>
				<td class="red">*</td>
				<td class="validate_input">
                                    <select name="ctl00$ctl00$master_ContentPlaceHolder2$DepositContent$ddlBank" id="ddlBank" class="required" onChange="ShowBankNameInput(this);" data-msg-default="กรุณาเลือกข้อมูลที่ถูกต้องธนาคารของคุณ" style="width:305px;">
					<option selected="selected" value="0">--กรุณาเลือก--</option>
					<option value="SCB">ธนาคารไทยพาณิชย์</option>
					<option value="BBL">ธนาคารกรุงเทพ</option>
					<option value="KBANK">ธนาคารกสิกรไทย</option>
					<option value="KTB">ธนาคารกรุงไทย</option>
					<option value="BOA">ธนาคารกรุงศรีอยุธยา</option>
					<option value="GSB">ธนาคารออมสิน</option>
					<option value="TMB">ธนาคารทหารไทย</option>
					<option value="TBANK">ธนาคารธนชาต</option>
					<option value="CIMBT">ธนาคาร ซีไอเอ็มบี ไทย</option>
					<option value="KNK">ธนาคารเกียรตินาคิน</option>
					<option value="UOB">UOB Bank</option>
					<option value="BAAC">ธนาคารเพื่อการเกษตรและสหกรณ์การเกษตร (ธกส.)</option>
					<option value="LHB">ธนาคารแลนด์ แอนด์ เฮ้าส์</option>
					<option value="OTHER">ธนาคารอื่นๆ</option>

				</select></td>
				<td></td>
				<td></td>
			</tr>
			<tr id="master_ContentPlaceHolder2_DepositContent_trBankName" class="trBankName" style="display: none;">
				<td></td>
				<td class="verticalAlign">
                                    <label for="txtBank" id="lblBankName">ชื่อธนาคารของคุณ</label></td>
				<td class="red">*</td>
				<td class="validate_input">
                                    <input name="ctl00$ctl00$master_ContentPlaceHolder2$DepositContent$txtBank" type="text" maxlength="100" id="txtBank" class="required" onKeyPress="return ValidateAlpha(event);" data-msg-default="โปรดกรอกข้อมูลให้ถูกต้อง" style="width:300px;" /></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td class="verticalAlign">
                                    <label for="txtBranch" id="master_ContentPlaceHolder2_DepositContent_lblBranch">สาขา</label></td>
				<td class="red">
                                    *</td>
				<td class="validate_input">
                                    <input name="ctl00$ctl00$master_ContentPlaceHolder2$DepositContent$txtBranch" type="text" maxlength="100" id="txtBranch" class="required" onKeyPress="return ValidateAlphaNumeric(event);" data-msg-default="โปรดกรอกข้อมูลให้ถูกต้อง" style="width:300px;" />
                                </td>
				<td class="validate_icon"></td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td class="verticalAlign">
                                    <label for="ddlProvince" id="master_ContentPlaceHolder2_DepositContent_lblAddress">ที่อยู่</label></td>
				<td class="red">
                                    *</td>
				<td id="master_ContentPlaceHolder2_DepositContent_td_txtAddress" class="validate_input">
                                    <input name="ctl00$ctl00$master_ContentPlaceHolder2$DepositContent$txtAddress" type="text" maxlength="300" id="txtAddress" class="required" onKeyPress="return ValidateAlphaNumeric(event);" data-msg-default="โปรดกรอกข้อมูลให้ถูกต้อง" style="width:300px;" /></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td class="verticalAlign">
                                    <label for="master_ContentPlaceHolder2_DepositContent_lblAccountNamevalue" id="master_ContentPlaceHolder2_DepositContent_lblAccountName">ชื่อบัญชีของคุณ</label></td>
				<td class="red"></td>
				<td class="validate_input" style="padding-top: 7px">&nbsp;&nbsp;<span id="master_ContentPlaceHolder2_DepositContent_lblAccountNamevalue">สุริยา ส่องแสง</span></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td class="verticalAlign">
                                    <label for="txtAccountNumber" id="master_ContentPlaceHolder2_DepositContent_lblAccountNumber">หมายเลขบัญชีของคุณ</label></td>
				<td class="red">*</td>
				<td class="validate_input">
                                    <input name="ctl00$ctl00$master_ContentPlaceHolder2$DepositContent$txtAccountNumber" type="text" maxlength="50" id="txtAccountNumber" title="หมายเลขเท่านั้น" class=" required" onKeyPress="return ValidateNumeric(event);" data-msg-default="โปรดกรอกข้อมูลให้ถูกต้อง" style="width:300px;" /></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td class="right"></td>
				<td class="red"></td>
				<td>
                                    <span class="paymentCheckBox"><input id="chkPreferred" type="checkbox" name="ctl00$ctl00$master_ContentPlaceHolder2$DepositContent$chkPreferred" /><label for="chkPreferred">ตั้งเป็นค่าเริ่มต้น</label></span></td>
				<td class="validate_icon"></td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td class="right"></td>
				<td class="red"></td>
				<td>
                                    <a onclick="javascript:return false;" id="btnSubmit" class="button_submit center dinpro" href="javascript:__doPostBack(&#39;ctl00$ctl00$master_ContentPlaceHolder2$DepositContent$btnSubmit&#39;,&#39;&#39;)">เพิ่มเลขที่บัญชีธนาคาร</a>
                                    
                                </td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td colspan="5">
                                    <span id="master_ContentPlaceHolder2_DepositContent_lblMessageBankAdd" style="color:Red;"></span></td>
			</tr>
		</table>
		
                    </div>
                </td>
		<td class="validate_icon"></td>
		<td></td>
	</tr>
	<tr>
		<td></td>
		<td class="verticalAlign"></td>
		<td class="red"></td>
		<td>
                    <div style="float: left;" id="bankManageAccount"><a href="../BankingDetailsV2.aspx" id="master_ContentPlaceHolder2_DepositContent_lnkManageBankAccount">
                        <span id="master_ContentPlaceHolder2_DepositContent_lblManageBankAccount" style="text-decoration: underline; font-size: 11px">แก้ไขบัญชีฝาก-ถอน</span></a></div>
                </td>
		<td class="validate_icon"></td>
		<td></td>
	</tr>
	<tr>
		<td></td>
		<td class="verticalAlign">
                    <label for="txtReferenceId" id="master_ContentPlaceHolder2_DepositContent_lblReferenceId">หมายเลขอ้างอิง</label></td>
		<td class="red"></td>
		<td class="validate_input">
                    <input name="ctl00$ctl00$master_ContentPlaceHolder2$DepositContent$txtReferenceId" type="text" maxlength="50" id="txtReferenceId" onKeyPress="return ValidateAlphaNumeric(event);" data-msg-default="โปรดกรอกข้อมูลให้ถูกต้อง" /></td>
		<td class="validate_icon"></td>
		<td></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td class="red"></td>
		<td>
                    <a onclick="javascript:SubmitThisPage(); return false;" id="btnDeposit" class="button_submit center dinpro" href="javascript:__doPostBack(&#39;ctl00$ctl00$master_ContentPlaceHolder2$DepositContent$btnDeposit&#39;,&#39;&#39;)">การฝาก</a><img style="display: none;" id="imgLoading" src="_static/_css/img/loading.gif" /></td>
		<td class="validate_icon"></td>
		<td></td>
	</tr>
	<tr>
		<td></td>
		<td colspan="5">
                    <span id="master_ContentPlaceHolder2_DepositContent_lblMessage" style="color:Red;"></span></td>
	</tr>
</table>

        <table id="master_ContentPlaceHolder2_DepositContent_tableMessage" class="form table-left-border" style="display: none">
	<tr id="master_ContentPlaceHolder2_DepositContent_tr1">
		<td></td>
		<td colspan="5" style="width: 560px; height: 350px;">
                    <span id="master_ContentPlaceHolder2_DepositContent_lblMessageBank"></span></td>
	</tr>
</table>

    </div>
    <div class="logo-container" style="clear: both;">
        
    </div>
    <div id="confirmModal" class="modal hide fade left background-grey" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-body">
            <p class="message">ยืนยันการทำรายการฝากเงิน?</p>
            <ul id="validItemsList"></ul>
            <table class="form">
                <tr>
                    <td><a id="modalSubmit" href="#" class="button_submit center dinpro">ใช่</a></td>
                    <td><a href="#" class="button_submit center dinpro" data-dismiss="modal" aria-hidden="true">ไม่ใช่</a></td>
                </tr>
            </table>
        </div>
        <div id="announcementModal" class="modal hide fade left background-grey" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-body">
                <p class="message"></p>
                <input type="checkbox" id="chkDoNotShow">
                ไม่แสดงอีกครั้ง
                <table class="form">
                    <tr>
                        <td><a id="A1" href="#" class="button_submit center dinpro" data-dismiss="modal" aria-hidden="true">ปิด</a></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    </div>
	</div>
		
	
</form>
    
    

</body>
</html>