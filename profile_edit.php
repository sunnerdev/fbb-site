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
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <title>
        เดิมพันออนไลน์ , แทงบอลออนไลน์ , คาสิโนสด ออนไลน์ ทั้งหมดรวมอยู่ใน W88
    </title>
    <meta name="description"
        content="เรานำเสนอเทคโนโลยีที่ทันสมัยที่สุดในการเดิมพันออน์ไลน์, แทงบอลออน์ไลน์, คาสิโนออน์ไลน์, สล็อต, เกมส์แบบผู้เล่นต่อผู้เล่น, การซื้อขายแลกเปลี่ยน, การเทรดเงิน ด้วยวิธีการเล่นที่ง่ายและเพลิดเพลิน">
    <meta name="keywords"
        content="เดิมพันออน์ไลน์, แทงบอล, แทงบอลออน์ไลน์, คาสิโนออน์ไลน์, ทายผลกีฬาออน์ไลน์, ผลบอลสด, ผลบอลวันนี้, แทงบอลสด, แทงบอลวันนี้, คาสิโนสดออน์ไลน์, W88คาสิโน, กีฬา, คาสิโนสด, หวยออน์ไลน์, ล็อตเตอรี่ออน์ไลน์, การซื้อขายแลกเปลี่ยนเงิน, การเดิมพันทางการเงิน, โป๊กเกอร์, ไบนารี่, การซื้อขายแลกเปลี่ยน , สมัครสมาชิก, พันธมิตร, เดิมพันสด, สถิติกีฬา, ข้อมูลการเดิมพัน, สถิติการเดิมพัน">

        <?php include('common/module/head.php'); ?> 

        <style>.headerLogo .sprite_logo,.headerLogo .sprite_logo.zh-cn,.headerContent .sprite_logo,.headerContent .sprite_logo.zh-cn{background:url('/_static/_event/2019/W88-Logo-AVFCW88-black-EN.png') 0 0 no-repeat;width:500px;height:80px;position:absolute;margin:0}div.account_safety_container{margin:0;padding:14px 0}ul.wallet_balance,div.account_menu,div.wallet_balance_container,div.account_safety_container div.float_right,div.wallet_balance_line{display:none}div.mainContent_inner{margin-top:0}tr.text td{line-height:20px}div.error,div.success{margin-left:0;width:120px}body.account input[type="text"],body.account input[type="password"],body.account select,body.account textarea{width:135px}body.account select{width:140px}table.form{margin:0 10px}.mainContent hr{border-color:#2e2e2e;margin:15px 0}.history div.wrap{padding:5px 10px}.subcontent_holder h3{display:none}.virtual sup{display:none!important}.casino_massimo sup,.casino_clubw sup,.casino_palazzo sup,.casino_massimo sup{display:none!important}.gallardo_menu sup,.nuovo_menu sup,.crescendo_menu sup,.palazzo_menu sup,.massimo_menu sup,.apollo_menu sup,.excelso sup,.luckyfishing sup,.fishingmaster sup,.fishingworld sup,.fishingpalazzo sup,.casino_clubw_premier sup,.mobile sup{display:none!important}.subcontent_button.sup sup{display:block!important}.download_modal{width:446px;margin-left:-223px}.download_modal .logo{padding-top:10px}.download_modal .modal-body{padding:8px}div.palazzo_message,div.gallardo_message{background:#252525;border:1px solid #333;margin-top:20px;padding:0 10px 10px}.palazzo_message .title,.gallardo_message .title{font-size:18px;text-align:center;font-weight:bold;line-height:18px;padding:18px 0}.palazzo_message ul,.gallardo_message ul{list-style-type:none;padding:0;margin:0}body.white div.palazzo_message,body.white div.gallardo_message{background:#ddd;border:1px solid #ddd;color:#000}body.white .palazzo_message .modal-body,body.white .gallardo_message .modal-body{color:#000}div.potm{width:100%;background:url(/_static/menu/img/1.jpg) #1e4c64 bottom repeat-x}.potm a .subcontent_button_play{color:#fff;line-height:26px;height:26px;background:#286d8e}.potm a:hover .subcontent_button_play{background:#2a8fbd;overflow:hidden}div.potm div sup{top:15px}div.subcontent_holder sup{display:none!important}div.subcontent_holder sup.active{display:block!important}div.menu_potm{background-repeat:no-repeat;display:none;left:0;top:0;position:absolute;z-index:0}.menu_five_column div.menu_potm{background-image:url(/_static/menu/img/20180711/slots/5_item/potm/POTM-bg.jpg);height:164px;width:192px}.menu_six_column div.menu_potm{background-image:url(/_static/menu/img/20180711/slots/6_item/potm/POTM-bg.jpg);height:164px;width:160px}.menu_seven_column div.menu_potm{background-image:url(/_static/menu/img/20180711/slots/7_item/potm/POTM-bg.jpg);height:164px;width:138px}div.menu_potm.active{display:block}div.menu_potm.active+img{position:relative;z-index:1}.potm a.menu_five_column:hover div.menu_potm.active{background-image:url(/_static/menu/img/20180711/slots/5_item/potm/POTM-bg-hover.jpg)}.potm a.menu_six_column:hover div.menu_potm.active{background-image:url(/_static/menu/img/20180711/slots/6_item/potm/POTM-bg-hover.jpg)}.potm a.menu_seven_column:hover div.menu_potm.active{background-image:url(/_static/menu/img/20180711/slots/7_item/potm/POTM-bg-hover.jpg)}#casinoMenu div.menu_potm{background-image:url(/_static/menu/img/casino/3_item/POTM-bg.jpg);height:164px;width:563px}#casinoMenu #clubwGrandCasinoMenu:hover div.menu_potm{background-image:url(/_static/menu/img/casino/3_item/POTM-hover-bg.jpg)}#casinoMenu .menu_four_column div.menu_potm{background-image:url(/_static/menu/img/casino/4_item/POTM-bg.jpg);height:164px;width:240px}#casinoMenu #clubwGrandCasinoMenu.menu_four_column:hover div.menu_potm{background-image:url(/_static/menu/img/casino/4_item/POTM-hover-bg.jpg)}#fishing_download .popover{z-index:9999;position:fixed;min-width:400px}#fishing_download .popover-content{padding:0}#home_popup{margin-top:-290px!important;width:auto!important}#home_popup .modal-body{padding:0}#home_popup .modal-body .palazzo_message{font-size:13px;margin:10px}#home_popup .modal-body .detail{font-size:13px;text-align:center}#palazzo_mobile_carousel .palazzo_message .title,#palazzo_mobile .palazzo_message .title,#palazzo .palazzo_message .title,#massimo_download .palazzo_message .title,#gallardo .palazzo_message .title,#fishingmaster_IOS .palazzo_message .title,#mahjong_IOS .palazzo_message .title,#bull_IOS .palazzo_message .title,#w88_IOS .palazzo_message .title,#fishing_download .palazzo_message .title,#poseidonfishing_download .palazzo_message .title,#nuovo .palazzo_message .title,#bravado .palazzo_message .title,#home_popup .modal-body .palazzo_message .title{font-size:18px;line-height:1.3!important}#home_popup .modal-body ul{margin-left:10px}#palazzo_mobile_carousel .modal-body ul li,#palazzo_mobile .modal-body ul li,#palazzo .modal-body ul li,#massimo_download .modal-body ul li,#gallardo .modal-body ul li,#fishingmaster_IOS .modal-body ul li,#mahjong_IOS .modal-body ul li,#bull_IOS .modal-body ul li,#w88_IOS .modal-body ul li,#fishing_download .modal-body ul li,#poseidonfishing_download .modal-body ul li,#bravado .modal-body ul li,#nuovo .modal-body ul li,#palazzo_mobile_carousel .modal-body .palazzo_message,#palazzo_mobile .modal-body .palazzo_message,#palazzo .modal-body .palazzo_message,#massimo_download .modal-body .palazzo_message,#gallardo .modal-body .palazzo_message,#fishingmaster_IOS .modal-body .palazzo_message,#mahjong_IOS .modal-body .palazzo_message,#bull_IOS .modal-body .palazzo_message,#w88_IOS .modal-body .palazzo_message,#fishing_download .modal-body .palazzo_message,#poseidonfishing_download .modal-body .palazzo_message,#bravado .modal-body .palazzo_message,#nuovo .modal-body .palazzo_message,#palazzo_mobile_carousel .modal-body .palazzo_message i,#palazzo_mobile .modal-body .palazzo_message i,#palazzo .modal-body .palazzo_message i,#massimo_download .modal-body .palazzo_message i,#gallardo .modal-body .palazzo_message i,#fishingmaster_IOS .modal-body .palazzo_message i,#mahjong_IOS .modal-body .palazzo_message i,#bull_IOS .modal-body .palazzo_message i,#w88_IOS .modal-body .palazzo_message i,#fishing_download .modal-body .palazzo_message i,#poseidonfishing_download .modal-body .palazzo_message i,#bravado .modal-body .palazzo_message i,#nuovo .modal-body .palazzo_message i{font-size:16px;line-height:1.5}#palazzo_mobile_carousel.download_modal,#palazzo_mobile.download_modal,#palazzo.download_modal,#fishingmaster_IOS.download_modal,#bull_IOS.download_modal,#w88_IOS.download_modal{width:575px}#home_popup .modal-body ul li{text-indent:-1em;padding-left:1em;font-size:16px;line-height:1.5}#palazzo .palazzo-tbl td{vertical-align:baseline;padding-right:5px;font-size:13px}.modal-esports .modal-body{padding:0}.modal-esports .palazzo_message{margin:5px}.modal-esports .title.detail{font-size:18px;font-weight:normal;padding:0}body.white .modal-esports .palazzo_message .title.detail{color:#000}.home #loginFrame{transform:translate(10%,0%)}.modal-body .palazzo_message *,.modal-body .palazzo_message ul *,.modal-body .palazzo_message ul li *,.modal-body .palazzo_message ul li b *,.modal-body .gallardo_message ul *,.modal-body .gallardo_message ul li *,.modal-body .gallardo_message ul li b *,.modal-body .gallardo_message ol *,.modal-body .gallardo_message ol li *,.modal-body .gallardo_message ol li b *,.modal-body label[for*="msg_chk"],.modal-body label[for*="popup_chk"],.modal-body .palazzo_message span,.modal-body .palazzo_message p,#logoutFrame .modal-body .message,#announcementFrame *,#announcementFrame *>*,#announcementFrame2 *,#announcementFrame2 *>*,#modalFrame .message{font-size:16px}.modal-body input[type="checkbox"][id*="msg_chk"],.modal-body input[type="checkbox"][id*="popup_chk"]{vertical-align:text-bottom;position:relative;top:-1px}#esports_asia_popup .palazzo_message table,#esports_euro_popup .palazzo_message table{margin:0 auto}#esports_asia_popup,#esports_euro_popup{width:800px}#bravado{width:446px;margin-left:-223px}#bravado .logo{padding-top:10px}#bravado .modal-body{padding:8px}#bravado_mobile{width:446px;margin-left:-223px}#bravado_mobile .logo{padding-top:10px}#bravado_mobile .modal-body{padding:8px}body.white #bravado .modal-body{color:#000}.modal.no-padding .modal-body{padding:0!important}#videoPopup,#videoPopup video{width:600px}#videoPopup video{width:600px;height:337px}#videoPopup .palazzo_message{border:0}#videoPopup,#videoPopup .palazzo_message{background-color:#252525}#videoPopup .palazzo_message a.button{margin-bottom:10px}body.white #videoPopup,body.white #videoPopup .palazzo_message{background-color:#fff}body.white #pushy .pushy-content{background:#ddd;border:1px solid #ddd;margin:20px 10px;padding:0 10px 10px;font-size:15px}#pushy .pushy-content{background:#252525;border:1px solid #333;margin:20px 10px;padding:0 10px 10px;font-size:15px}#pushy .pushy-content *{font-size:15px}#pushy .pushy-content ul{margin:0 100px}#pushy .pushy-content ul,#pushy .pushy-content ul li{list-style-type:none}#pushy .pushy-content ul li{margin:12px 0}#pushy .pushy-content ul li input[type="checkbox"]:hover,#pushy .pushy-content ul li label:hover{cursor:pointer}#pushy .pushy-content ul li input[type="checkbox"]{vertical-align:top}#pushy .pushy-content a{min-width:90px}#pushy .pushy-content label{padding-left:50px}.pushy-modal-always-on-top{z-index:1999!important}.modal-scrollable .modal:not(.modal-overflow){margin:0 auto!important;position:absolute;left:0;right:0;-webkit-transform:translateY(-50%);-moz-transform:translateY(-50%);-ms-transform:translateY(-50%);-o-transform:translateY(-50%);transform:translateY(-50%)}.modal-scrollable #loginFrame2{transform:translateY(0)}@-webkit-keyframes shake2{0%,100%{-webkit-transform:translate(0,-50%) rotate(0deg)}10%,30%,50%,70%,90%{-webkit-transform:translate(-10px,-50%) rotate(0deg)}20%,40%,60%,80%{-webkit-transform:translate(10px,-50%) rotate(0deg)}}#esports_asia_popup.shake,#esports_euro_popup.shake,#pushy.shake{-webkit-animation-name:shake2;-moz-animation-name:shake2;-o-animation-name:shake2;animation-name:shake2}.footerlink ul li a{font-size:12px}</style>
    </head>
<body class="account grey">
<?php include('common/module/header.php'); ?>
<?php include('common/module/menu.php'); ?>
<?php include('common/module/loginframe.php'); ?>
<?php include('common/module/modalFrame.php'); ?>


	

<div class="mainContent clear">  
			<div class="title special">บัญชีของฉัน <span>&gt;</span> แก้ไข</div>
            <div class="mainContent_inner">
                 <div class="account_safety_container">
                    <div class="account_safety float">
                        <div class="account_safety_percentage">
                            <i id="account_safety_total" class="as1_logo_safe_percent as1_logo_safe_percent_50" title="ระดับความปลอดภัยของคุณ"></i>
                        </div>
                        <div class="account_safety_info">
                            <div class="info_1"><span class="title">ระดับความปลอดภัยของบัญชี:</span> <span class="safe_level">การตรวจสอบบางส่วน</span></div>
                            <div class="info_2">
                                <a id="account_safety_registered" class="as_logo_registered" data-container="body" data-class="account_safe" data-html="true" data-toggle="popover" data-placement="top" data-trigger="hover" title="" data-content="อัพเดท  &quot;ข้อมูลส่วนตัว &quot;เพื่อเพิ่มระดับความปลอดภัยให้บัญชีของคุณ และรับเลยทันทีเงินเดิมพันฟรี <span class='blue'>[cur] [amt]</span>" data-content-normal="อัพเดทโปรไฟล์" href="https://<?php echo $headers['Host']; ?>/Profile/Edit.aspx" data-original-title=""></a>
                                <a id="account_safety_bank_details" class="as_logo_bank_details_on" data-container="body" data-class="account_safe" data-html="true" data-toggle="popover" data-placement="top" data-trigger="hover" title="" data-content="อัพเดท &quot;รายละเอียดธนาคาร&quot; เพื่อการ ฝาก-ถอนที่รวดเร็วยิ่งขึ้น" href="https://<?php echo $headers['Host']; ?>/View/BankingDetails.aspx" target="_self" data-original-title=""></a>
                                <a id="account_safety_phone" class="as_logo_phone_on" data-container="body" data-class="account_safe" data-html="true" data-toggle="popover" data-placement="top" data-trigger="hover" title="" data-content="ตรวจสอบ  &quot;หมายเลขโทรศัพท์ &quot; เพื่อเพิ่มระดับความปลอดภัยให้บัญชีของคุณ และรับเลยทันทีเงินเดิมพันฟรี <span class='blue'>[cur] [amt]</span>" data-content-done="เบอร์ติดต่อถูกต้อง" data-content-claim="ตรวจสอบ &quot;เบอร์ติดต่อของคุณ&quot; ที่มีระดับความปลอดภัยสูง" href="javascript:void(0);" data-original-title=""></a>
                                <a id="account_safety_email" class="as_logo_email" data-container="body" data-class="account_safe" data-html="true" data-toggle="popover" data-placement="top" data-trigger="hover" title="" data-content="ตรวจสอบ  &quot;อีเมล์ &quot; เพื่อเพิ่มระดับความปลอดภัยให้บัญชีของคุณ และรับเลยทันทีเงินเดิมพันฟรี<span class='blue'> [cur] [amt]</span>" data-content-done="อีเมลถูกต้อง" data-content-claim="ตรวจสอบ &quot;ที่อยู่อิเมลล์ของคุณ&quot; ที่มีระดับความปลอดภัยสูง" href="javascript:popupVerify('https://<?php echo $headers['Host']; ?>/Safety/EmailVerification.aspx', 'กด&quot;ส่งรหัสยืนยัน&quot;เพื่อนยืนยันอีเมลล์แอดเดรสของคุณ.&quot;[contact_or_email]&quot;', 'su*********2@gmail.com');" data-original-title=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="vip_logo_divider float hide"></div>
                    <div class="account_safety float">
                        <div class="account_safety_percentage">
                            <a href="https://www.<?php echo $headers['Host']; ?>/VIP/Levels.aspx" target="_blank"></a>
                        </div>
                        <div class="account_safety_info">
                            <div class="">คุณมี<a href="https://<?php echo $headers['Host']; ?>/message/inbox.aspx" id="private_message1" style="font-size:14px;color:red;"><span style="font-size:14px">0</span> ข้อความใหม่</a>จากเรา</div>
							
                        </div>
						<div class="clear"></div>
						

                    </div>
                    <div class="float_right">
					    <div class="total_wallet_balance float center">
						    <div class="inner_container">
						        <a href="javascript:getWalletBalancev2Click();void(0);"><img src="/_static/_css/img/grey/btn_refresh_off.png" type="hover"></a><br><br><a class="dinpro" href="javascript:void(0);"><span class="dinpro">-</span></a><br><br>
								คงเหลือ<br>(ยกเว้นโปกเกอร์ + F1 Fishing)
                            </div>
					    </div>
					    <div class="wallet_divider float"></div>
					    <div class="total_rewards_balance float center">
						    <div class="inner_container">
							    <a href="javascript:getRewardsPtClick();void(0);"><img src="/_static/_css/img/grey/btn_refresh_off.png" type="hover"></a><br><br><a class="dinpro" href="javascript:void(o);" type="rewardsaccountsummary"><span class="dinpro">0</span></a><br><br>แต้มสะสมของ
                                <a href="javascript:void(o);" type="rewardsspin" style="position: absolute; top: 0px; right: 0px; height: 50px; padding-right: 3px;"><i id="rewards-status-img" class="rewards-status off"></i></a>
                            </div>
					    </div>
				    </div>
                </div>
				 
				<div class="account_menu">
					<div class="float">
						<ul class="account_menu">
							
							<li><a class="" href="#" onclick="doPopUpDetail('https://fundtransfer.<?php echo $headers['Host']; ?>');">ย้ายเงิน</a></li>
                            <li><a class=" " href="#" onclick="doPopUpDetail('https://<?php echo $headers['Host']; ?>/view/DepositDefault.aspx');">ฝาก</a></li>
							
								<li><a class=" " href="#" onclick="doPopUpDetail('https://<?php echo $headers['Host']; ?>/view/withdrawal/BankTransfer.aspx');">ถอน</a></li>                            
							
                            
                            <li><a class=" " href="#" onclick="doPopUpDetail('https://fundtransfer.<?php echo $headers['Host']; ?>/ClaimPromo.aspx');">รับฟรีเดิมพัน</a></li>
		 
								<li><a class=" " href="#" onclick="doPopUpDetail('https://<?php echo $headers['Host']; ?>/history/depositwithdrawal.aspx');">ประวัติ</a></li>
							
                            
							<li><a class=" " href="#" onclick="doPopUpDetail('https://<?php echo $headers['Host']; ?>/Message/Upload.aspx');">อัพโหลด</a></li>
                        </ul></div>
					<div class="clear"></div>
				</div>
				<div class="hide" id="wallet_locked_msg">คุณจะต้องทำการถอนเงินขั้นต่ำของ THB 500.00 และตรวจสอบบัญชีของคุณเพื่อจะปลดล็อค ฟรีเดิมพัน นี้</div>
				<div class="wallet_balance_container clear">
					<ul class="wallet_balance">

					</ul>
				</div>
					<div class="wallet_balance_line clear"></div>
					
	<div class="history_sub_menu_container">
		<ul class="history_sub_menu">
			<li class="hide">ข้อมูลส่วนตัว: </li>		
			<li style="margin-left: 20px;"><a href="https://<?php echo $headers['Host']; ?>/Profile/edit.aspx" class="hover">แก้ไข</a></li>
			<li><a href="https://<?php echo $headers['Host']; ?>/Profile/Address.aspx">ที่อยู่ในการจัดส่ง</a></li>
            <li><a href="https://<?php echo $headers['Host']; ?>/Profile/ChangePassword.aspx">เปลี่ยนรหัสผ่าน</a></li>
			<li><a href="https://<?php echo $headers['Host']; ?>/View/BankingDetails.aspx">ข้อมูลธนาคาร</a></li>
			<li><a href="https://<?php echo $headers['Host']; ?>/Message/Inbox.aspx">ข้อความ</a></li>
			<li class="hide"><a href="https://<?php echo $headers['Host']; ?>/VIP/">โปรแกรม VIP</a></li>
			<li><a href="https://<?php echo $headers['Host']; ?>/History/Rebate.aspx">เงินคืน / เงินคืนแคชแบ็ค
</a></li>
			
		</ul>
		<div class="clear"></div>
	</div>
	<div class="history_sub_menu_container_divider">&nbsp;</div>
	
	<div class="history">
		<div class="wrap">
			<div class="clear">จำเป็นต้องกรอกข้อมูลส่วนนี้</div>
			<table class="form float" cellpadding="0" cellspacing="0">
				<colgroup>
					<col style="width: 125px;">
					<col style="width: 5px;">
					<col style="width: 145px;">
					<col style="width: 20px;">
					<col style="width: 100px;">
				</colgroup>
				<tbody><tr class="text">
					<td class="right"> อีเมล์ </td>
					<td class="red">&nbsp;</td>
					<td class="validate_input">
						<span id="ctl00_ctl00_master_ContentPlaceHolder2_ContentPlaceHolder2_email_display" disabled="disabled">su*********2@gmail.com</span>
						<input name="ctl00$ctl00$master_ContentPlaceHolder2$ContentPlaceHolder2$email" type="hidden" id="ctl00_ctl00_master_ContentPlaceHolder2_ContentPlaceHolder2_email" data-msg-default="กรุณากรอกอีเมล์ของท่าน" value="dsd/k5ySz/GdpKqKGSohCk/3lYUhcxs4XM24QNYsOaxl0rRonW28QYFqrwj2wQMx">
					</td>
					<td class="validate_icon">&nbsp;</td>
					<td></td>
				</tr>
				<tr class="text">
					<td class="right">หมายเลขโทรศัพท์ที่ติดต่อได้สะดวก </td>
					<td class="red">&nbsp;</td>
					<td class="validate_input">+<span id="ctl00_ctl00_master_ContentPlaceHolder2_ContentPlaceHolder2_contact_no_display" class="required contact_no">66-****12226</span>
						<input name="ctl00$ctl00$master_ContentPlaceHolder2$ContentPlaceHolder2$contact_no" type="hidden" id="ctl00_ctl00_master_ContentPlaceHolder2_ContentPlaceHolder2_contact_no" data-msg-default="กรุณากรอกหมายเลขโทรศัพท์ของท่าน" value="4aG9PZzypJcEF9GBlZrZwkOvRLXXrPVEvW0iT/9n0T0=">
					</td>
					<td class="validate_icon">&nbsp;</td>
					<td></td>
				</tr>
				<tr class="text">
					<td class="right">ชื่อผู้ใช้งาน </td>
					<td class="red">&nbsp;</td>
					<td class="validate_input">
						<span id="ctl00_ctl00_master_ContentPlaceHolder2_ContentPlaceHolder2_username" disabled="disabled" class="required">Sunner88</span>
					</td>
					<td class="validate_icon">&nbsp;</td>
					<td></td>
				</tr>
				
			</tbody></table>
			<table class="form float" cellpadding="0" cellspacing="0">
				<colgroup>
					<col style="width: 100px;">
					<col style="width: 5px;">
					<col style="width: 145px;">
					<col style="width: 20px;">
					<col style="width: 100px;">
				</colgroup>
				
				<tbody><tr>
					<td class="right">ชื่อเต็ม </td>
					<td class="red">&nbsp;</td>
					<td class="validate_input">
						<span id="ctl00_ctl00_master_ContentPlaceHolder2_ContentPlaceHolder2_first_name" class="required" data-msg-default="กรุณากรอกชื่อของท่านเท่านั้น <br /> รายการของบัตร, เช็ค และการโอนเงิน สามารถดำเนินการได้หากชื่อตรงกับบัญชีผู้ใช้งาน">สุริยา ส่องแสง </span>
					</td>
					<td class="validate_icon">&nbsp;</td>
					<td></td>
				</tr>
				<tr class="hide">
					<td class="right">สกุล </td>
					<td class="red">&nbsp;</td>
					<td class="validate_input">
						<span id="ctl00_ctl00_master_ContentPlaceHolder2_ContentPlaceHolder2_last_name" class="required" data-msg-default="กรุณากรอกนามสกุลของท่านเท่านั้น <br /> รายการของบัตร, เช็ค และการโอนเงิน สามารถดำเนินการได้หากชื่อสกุลตรงกับบัญชีผู้ใช้งาน"></span>

					</td>
					<td class="validate_icon">&nbsp;</td>
					<td></td>
				</tr>
				<tr>
					<td class="right">วัน เดือน ปี เกิด </td>
					<td class="red">&nbsp;</td>
					<td class="validate_input">
						<span id="ctl00_ctl00_master_ContentPlaceHolder2_ContentPlaceHolder2_dob">20/09/1991</span>
						
					</td>
					<td class="validate_icon">&nbsp;</td>
					<td></td>
				</tr>
				<tr>
					<td class="right"> เพศ </td>
					<td class="red">*</td>
					<td class="validate_input">
                        
						ชาย
					</td>
					<td class="validate_icon">&nbsp;</td>
					<td></td>
				</tr>
			</tbody></table>
			<div class="clear"></div>
			<hr class="clear">
			<table class="form float" cellpadding="0" cellspacing="0">
				<colgroup>
					<col style="width: 100px;">
					<col style="width: 5px;">
					<col style="width: 145px;">
					<col style="width: 20px;">
					<col style="width: 100px;">
				</colgroup>
				<tbody><tr class="hide">
					<td class="right">ที่อยู่ </td>
					<td class="red"></td>
					<td class="validate_input">
						<textarea name="ctl00$ctl00$master_ContentPlaceHolder2$ContentPlaceHolder2$address" rows="2" cols="20" id="ctl00_ctl00_master_ContentPlaceHolder2_ContentPlaceHolder2_address" data-msg-default="กรุณากรอกที่อยู่ของท่าน">TH</textarea></td>
					<td class="validate_icon">&nbsp;</td>
					<td></td>
				</tr>
				<tr class="hide">
					<td class="right">เมือง </td>
					<td class="red"></td>
					<td class="validate_input">
						<input name="ctl00$ctl00$master_ContentPlaceHolder2$ContentPlaceHolder2$city" type="text" value="TH" id="ctl00_ctl00_master_ContentPlaceHolder2_ContentPlaceHolder2_city" data-msg-default="กรุณากรอกชื่อเมือง"></td>
					<td class="validate_icon">&nbsp;</td>
					<td></td>
				</tr>
				<tr class="hide">
					<td class="right">รหัสไปรษณีย์ </td>
					<td class="red">*</td>
					<td class="validate_input">
						<input name="ctl00$ctl00$master_ContentPlaceHolder2$ContentPlaceHolder2$postal" type="text" value="000000" id="ctl00_ctl00_master_ContentPlaceHolder2_ContentPlaceHolder2_postal" class="required" data-msg-default="กรุณากรอกรหัสเมือง"></td>
					<td class="validate_icon">&nbsp;</td>
					<td></td>
				</tr>
				<tr class="text hide">
					<td class="right">ประเทศ </td>
					<td class="red"></td>
					<td class="validate_input">
						<span id="ctl00_ctl00_master_ContentPlaceHolder2_ContentPlaceHolder2_lbl_country">TH</span>
					</td>
					<td class="validate_icon">&nbsp;</td>
					<td></td>
				</tr>
				<tr>
					<td class="right">ภาษา </td>
					<td class="red">*</td>
					<td class="validate_input">
                        <div class="select" style="width: 140px;"><select name="ctl00$ctl00$master_ContentPlaceHolder2$ContentPlaceHolder2$language" id="language" cssclas="required" data-msg-default="กรุณาเลือกภาษาที่ท่านต้องการ" class="select-hidden">
	<option value="en-us">English</option>
	<option value="zh-cn">简体中文</option>
	<option value="id-id">Bhs Indonesia</option>
	<option value="km-kh">Khmer</option>
	<option value="ko-kr">한국어</option>
	<option selected="selected" value="th-th">ไทย</option>
	<option value="vi-vn">Tiếng Việt</option>

</select><div class="select-styled" cssclas="required" data-msg-default="กรุณาเลือกภาษาที่ท่านต้องการ">ไทย</div><ul class="select-options"><li rel="en-us">English</li><li rel="zh-cn">简体中文</li><li rel="id-id">Bhs Indonesia</li><li rel="km-kh">Khmer</li><li rel="ko-kr">한국어</li><li rel="th-th">ไทย</li><li rel="vi-vn">Tiếng Việt</li></ul><i class="arrow"></i></div>
					</td>
					<td class="validate_icon">&nbsp;</td>
					<td></td>
				</tr>
				<tr class="text">
					<td class="right">ประเภทอัตราต่อรอง </td>
					<td class="red">*</td>
					<td class="validate_input">
                        <div class="select" style="width: 140px;"><select name="ctl00$ctl00$master_ContentPlaceHolder2$ContentPlaceHolder2$odds" id="odds" cssclas="required" data-msg-default="Please enter odds" class="select-hidden">
	<option selected="selected" value="1">มาเลย์</option>
	<option value="2">ฮ่องกง</option>
	<option value="3">เดซิมอล</option>
	<option value="4">อินโด</option>
	<option value="5">อเมริกา</option>

</select><div class="select-styled" cssclas="required" data-msg-default="Please enter odds">มาเลย์</div><ul class="select-options"><li rel="1">มาเลย์</li><li rel="2">ฮ่องกง</li><li rel="3">เดซิมอล</li><li rel="4">อินโด</li><li rel="5">อเมริกา</li></ul><i class="arrow"></i></div>
					</td>
					<td class="validate_icon">&nbsp;</td>
					<td></td>
				</tr>
				<tr class="text">
					<td class="right">สกุลเงิน </td>
					<td class="red">&nbsp;</td>
					<td class="validate_input">
						<span id="ctl00_ctl00_master_ContentPlaceHolder2_ContentPlaceHolder2_currency">บาท</span>
					</td>
					<td class="validate_icon">&nbsp;</td>
					<td></td>
				</tr>
			</tbody></table>

			<table class="form float" cellpadding="0" cellspacing="0">
				<colgroup>
					<col style="width: 100px;">
					<col style="width: 5px;">
					<col style="width: 145px;">
					<col style="width: 20px;">
					<col style="width: 100px;">
				</colgroup>
				<tbody><tr>
					<td class="right"> คำถามเพื่อรักษาความปลอดภัย</td>
					<td class="red">*</td>
					<td class="validate_input">
                        <div class="select" style="width: 140px;"><select name="ctl00$ctl00$master_ContentPlaceHolder2$ContentPlaceHolder2$security_question" id="security_question" class="required select-hidden" cssclas="required" data-msg-default=" กรุณาเลือกคำถามเพื่อรักษาความปลอดภัย">
	<option selected="selected" value="">กรุณาเลือกคำถาม</option>
	<option value="1">ชื่อกลางของมารดาคุณคือ?</option>
	<option value="2">ชื่อเล่น หรือฉายาของคุณในวัยเด็กคือ?</option>
	<option value="3">ความฝันในวัยเด็กของคุณคือ ?</option>
	<option value="4">ชื่อเมือง หรือจังหวัดที่ท่านเริ่มทำงานครั้งแรกคือ?</option>
	<option value="5">ชื่อโรงเรียนแรกที่คุณเข้าเรียนคือ?</option>
	<option value="6">ชื่อกลางของบิดาคุณคือ?</option>

</select><div class="select-styled" cssclas="required" data-msg-default=" กรุณาเลือกคำถามเพื่อรักษาความปลอดภัย">กรุณาเลือกคำถาม</div><ul class="select-options"><li rel="">กรุณาเลือกคำถาม</li><li rel="1">ชื่อกลางของมารดาคุณคือ?</li><li rel="2">ชื่อเล่น หรือฉายาของคุณในวัยเด็กคือ?</li><li rel="3">ความฝันในวัยเด็กของคุณคือ ?</li><li rel="4">ชื่อเมือง หรือจังหวัดที่ท่านเริ่มทำงานครั้งแรกคือ?</li><li rel="5">ชื่อโรงเรียนแรกที่คุณเข้าเรียนคือ?</li><li rel="6">ชื่อกลางของบิดาคุณคือ?</li></ul><i class="arrow"></i></div>
					</td>
					<td class="validate_icon"></td>
					<td></td>
				</tr>
				<tr>
					<td class="right">คำตอบเพื่อรักษาความปลอดภัย</td>
					<td class="red">*</td>
					<td class="validate_input">
                        <input name="ctl00$ctl00$master_ContentPlaceHolder2$ContentPlaceHolder2$security_answer" type="text" id="security_answer" class="required" data-msg-default="กรุณากรอกคำตอบเพื่อรักษาความปลอดภัย" data-default="">
                        <input name="ctl00$ctl00$master_ContentPlaceHolder2$ContentPlaceHolder2$sec_answer1" type="hidden" id="ctl00_ctl00_master_ContentPlaceHolder2_ContentPlaceHolder2_sec_answer1">
                        <input name="ctl00$ctl00$master_ContentPlaceHolder2$ContentPlaceHolder2$security_answer_hash" type="hidden" id="ctl00_ctl00_master_ContentPlaceHolder2_ContentPlaceHolder2_security_answer_hash" value="NQvbvph02jOQ53HLGitGXA==">
                        <input name="ctl00$ctl00$master_ContentPlaceHolder2$ContentPlaceHolder2$security_answer_dummy" type="hidden" id="ctl00_ctl00_master_ContentPlaceHolder2_ContentPlaceHolder2_security_answer_dummy">
					</td>
					<td class="validate_icon"></td>
					<td></td>
				</tr>
				<tr>
					<td class="right">รหัสผ่าน </td>
					<td class="red">*</td>
					<td class="validate_input">
                        <input name="ctl00$ctl00$master_ContentPlaceHolder2$ContentPlaceHolder2$password" type="password" id="password" class="required" data-msg-default="กรุณากรอกรหัสผ่านของท่าน">
					</td>
					<td class="validate_icon">&nbsp;</td>
					<td></td>
				</tr>
				<tr>
					<td class="right"></td>
					<td class="red"></td>
					<td class="validate_input">
                        <input type="button" id="btnSubmit" style="position: absolute; left: -9999px; width: 1px; height: 1px;">
                        <a href="#" class="button center dinpro" onclick="doUpdate(event)">ยืนยัน
                        </a>
                    </td>
					<td class="validate_icon">&nbsp;</td>
					<td></td>
				</tr>
			</tbody></table>
			<div class="clear"></div>
		</div>
	</div>


			</div>
		</div>
</body>
</html>