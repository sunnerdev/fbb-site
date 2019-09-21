
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
        /* function doOpenWindowWithPost(url, title, height, width, params) {
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

       /* function doPopUpDetail(url) {
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
    	}*/
    </script>
</head>
<body class="account grey">
<?php include('common/module/header.php'); ?>
<?php include('common/module/menu.php'); ?>
<?php //include('common/module/loginframe.php'); ?>
<?php include('common/module/modalFrame.php'); ?>

<script>
	function ShowBox(box)
	{
		$('.loading').show();
		$('#showbox').html('');
		$( "#account_menu a" ).removeClass('hover');
		$( "#account_menu a#"+box ).addClass('hover');
		$.ajax({
			url: 'module/'+box+'.php',
			type:'POST',
			data:  {},
			success: function(data){ 
				$('#showbox').html(data);
				$('.loading').hide();
			},
			error: function(data) {
				$('#showbox').html('<div class="result_not_found"><br>ไม่พบข้อมูล!</div>');
				$('.loading').hide();
			}
		});
	}

	function GetWallet(id)
	{
		$('#wallet_'+id+' .loading_mini').show();
		//$('#wallet_'+id+' .wallet_value').text(5);
		$.ajax({
			url: 'resource/wallet.app.php',
			type:'POST',
			data:  {id:id},
			success: function(data){ 
				
				//$('#wallet_'+id+' .wallet_value').html(data);
				if(data.data=='')
				{
					$.ajax({
					url: 'resource/wallet.app.php',
					type:'POST',
					data:  {product_id:id},
					success: function(data){ 
						//console.log(data.data);
						if(data.success==true)
						{
							$('#wallet_value_'+id+'').text(numberWithCommas(0));
							$('#wallet_'+id+' .loading_mini').hide();
						}
						if(data.success==false)
						{
							$('#wallet_'+id+' .loading_mini').hide();
							$('#wallet_value_'+id+'').text('error');
						}
					},
					error: function(data) {
						//$('#wallet_'+id+' .wallet_value').html('<div class="result_not_found"><br>ไม่พบข้อมูล!</div>');
						$('#wallet_value_'+id+'').html('<div class="result_not_found"><br>ไม่พบข้อมูล!</div>');
						$('#wallet_'+id+' .loading_mini').hide();
					}
				});
				}
				if(data.data!='')
				{
					if(id=='m'){ console.log(data.data); }
					$('#wallet_'+id+' .loading_mini').hide();
					$('#wallet_value_'+id+'').text(addCommas(data.data[0].amount));
				}
			},
			error: function(data) {
				//$('#wallet_'+id+' .wallet_value').html('<div class="result_not_found"><br>ไม่พบข้อมูล!</div>');
				$('#wallet_value_'+id+'').html('<div class="result_not_found"><br>ไม่พบข้อมูล!</div>');
				$('#wallet_'+id+' .loading_mini').hide();
			}
		});
	}
		GetWallet('m');
	<?php
		foreach($product_wallet as $val)
		{
			echo "GetWallet(".$val['id'].");";
		}
	?>

	function SubmitBox(box)
	{
		$('.loading').hide();
		$('#imgLoading').show();
		$('#btnTransaction').hide();
		var datas = $( "#frm_transaction" ).serializeArray();
		console.log(datas);
		$.ajax({
			url: 'resource/'+box+'.app.php',
			type:'POST',
			data:  datas,
			success: function(data){ 
				console.log(data);
				$('#imgLoading').hide();
				$('#btnTransaction').show();
				$('#error_message').hide();
				$('#result_not_found').hide();
				$('#loading').hide();
			},
			error: function(data) {
				$('#imgLoading').hide();
				$('#btnTransaction').show();
				$('#error_message').show();
				$('#result_not_found').hide();
				$('#loading').hide();
				//alert('error_message');
				$("#modalFrame").find("p.message").html('เกิดข้อผิดพลาดในระบบ กรุณาลองอีกครั้ง');
				$('#modalFrame').modal('show');

			}
		});
	}


/*
	$('ul').live('click', function () {
		//alert('clicked');
    var $this = $(this);
    $(this).closest('a') // get current LI
    .addClass('hover')
	.siblings(); // get adjacent LIs
    $('ul').closest('a').removeClass('hover');
});
*/
</script>
<?php
if($_GET['r']!=''){
	echo "<script>ShowBox('".$_GET['r']."');</script>";
}else{
	echo "<script>ShowBox('deposit');</script>";
}
?>
    <form method="post" action="" id="frm_transaction" enctype="multipart/form-data">
<div class="aspNetHidden">

		<div class="mainContent clear">
             <?php include('common/module/marquee.php'); ?>
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
						<ul class="account_menu" id="account_menu">
							
							<li><a id="transfer" class=""  href="javasctipt:;" onclick="ShowBox('transfer');">ย้ายเงิน</a></li>
                            <li><a id="deposit" class=" hover" href="javasctipt:;" onclick="ShowBox('deposit');">ฝาก</a></li>
                             
                            <li><a id="withdraw" class="" href="javasctipt:;" onclick="ShowBox('withdraw');">ถอน</a></li>                            
                            

                            <!--<li><a class=" " href="javasctipt:;" onclick="doPopUpDetail('https://fundtransfer.w88bkk.com/ClaimPromo.aspx');">รับฟรีเดิมพัน</a></li>-->
		 
                            <li><a id="history" class=""  href="javasctipt:;" onclick="ShowBox('history');">ประวัติ</a></li>
                            
							<!--<li><a class=" "  href="javasctipt:;" onclick="doPopUpDetail('withdraw');">อัพโหลด</a></li>-->
                        </ul></div>
					<div class="clear"></div>
				</div>    
				<div class="hide" id="wallet_locked_msg">คุณจะต้องทำการถอนเงินขั้นต่ำของ [cur] [amt] และตรวจสอบบัญชีของคุณเพื่อจะปลดล็อค ฟรีเดิมพัน นี้</div>
				<div class="wallet_balance_container clear">
					
					<ul class="wallet_balance">
						<li class="main_wallet locked" id="wallet_m" style="position: relative;">
							<div id="wallet_value_m" class="wallet_value"></div>
							<div class="loading_mini"></div>
							<div class="wallet_name">กระเป๋าหลัก</div>
						</li>
						<!--<li class="main_wallet wallet_lock_icon" data-toggle="popover" data-content="คุณจะต้องทำการถอนเงินขั้นต่ำของ THB 500.00 และตรวจสอบบัญชีของคุณเพื่อจะปลดล็อค ฟรีเดิมพัน นี้" data-placement="top" data-trigger="hover" id="wallet00" style="position: relative;" data-original-title="" title=""><div class="wallet_value wallet_value_red">100.00</div><div class="wallet_name">กระเป๋าหลัก (ล็อก)</div></li>-->
						<li class="empty" style="position: relative;"></li>
						<li class="expand" id="wallet3" style="position: relative;"></li>
					</ul>
						
					<div class="wallet_balance_line"></div>
					<ul class="wallet_balance wallet_balance_alternate">
					<?php
						foreach($product_wallet as $val)
						{
							echo '<li id="wallet_'.$val['id'].'" style="position: relative;">
								<div id="loading_mini" class="loading_mini"></div>
								<div id="wallet_value_'.$val['id'].'" class="wallet_value"></div>
								<div class="wallet_name">'.$val['name'].'</div>
								</li>
							<li class="empty" style="position: relative;"></li>';
						}
					?>
					
					</ul>
					<div class="wallet_balance_line"></div>

					<div class="wallet_balance_line clear"></div>

					
					
					
<div class="loading"></div>
<div id="showbox"></div>
		

</form>
    
    

</body>
</html>