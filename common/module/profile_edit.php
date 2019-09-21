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
						<span id="ctl00_ctl00_master_ContentPlaceHolder2_ContentPlaceHolder2_email_display" disabled="disabled"><?php echo $me->email; ?></span>
					</td>
					<td class="validate_icon">&nbsp;</td>
					<td></td>
				</tr>
				<tr class="text">
					<td class="right">หมายเลขโทรศัพท์ที่ติดต่อได้สะดวก </td>
					<td class="red">&nbsp;</td>
					<td class="validate_input">+<span id="ctl00_ctl00_master_ContentPlaceHolder2_ContentPlaceHolder2_contact_no_display" class="required contact_no"><?php echo $me->contact_no_country; ?>-<?php echo $me->contact_no; ?></span>
					</td>
					<td class="validate_icon">&nbsp;</td>
					<td></td>
				</tr>
				<tr class="text">
					<td class="right">ชื่อผู้ใช้งาน </td>
					<td class="red">&nbsp;</td>
					<td class="validate_input">
						<span id="ctl00_ctl00_master_ContentPlaceHolder2_ContentPlaceHolder2_username" disabled="disabled" class="required"><?php echo $me->username; ?></span>
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
						<span id="ctl00_ctl00_master_ContentPlaceHolder2_ContentPlaceHolder2_first_name" class="required" data-msg-default="กรุณากรอกชื่อของท่านเท่านั้น <br /> รายการของบัตร, เช็ค และการโอนเงิน สามารถดำเนินการได้หากชื่อตรงกับบัญชีผู้ใช้งาน"><?php echo $me->first_name; ?> <?php echo $me->last_name; ?></span>
					</td>
					<td class="validate_icon">&nbsp;</td>
					<td></td>
				</tr>
				<tr>
					<td class="right">วัน เดือน ปี เกิด </td>
					<td class="red">&nbsp;</td>
					<td class="validate_input">
						<span id="ctl00_ctl00_master_ContentPlaceHolder2_ContentPlaceHolder2_dob"><?php echo $me->dateofbirth; ?></span>
						
					</td>
					<td class="validate_icon">&nbsp;</td>
					<td></td>
				</tr>
				<tr>
					<td class="right"> เพศ </td>
					<td class="red">*</td>
					<td class="validate_input">-</td>
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
				<tbody>
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

</select></div>
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

</select>
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

</select>
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