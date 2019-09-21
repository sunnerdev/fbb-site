<input name="transaction_type" value="transfer" type="hidden" />
<div class="profile_page_background">
        <div class="div_exchange">
            <span class="line_up"></span>
            <span class="btn_exchange"></span>
            <span class="line_down"></span>
        </div>
        <table class="form">
            <colgroup>
			    <col style="width: 115px;">
                <col style="width: 210px;">	
		    </colgroup>
            <tbody><tr>
                <td class="verticalAlign">
                    <label for="drpTransferFrom" id="">โอนเงินจาก</label></td>
                <td>
                    <select name="ctl00$ctl00$master_ContentPlaceHolder2$CashierContent$drpTransferFrom" id="drpTransferFrom" onchange="javascript:checkWallets();TransferFromChange();" class="selectbox" style=" position: absolute;">
	<option value="-1">-- เลือกกระเป๋าเงิน --</option>
	<option value="0">กระเป๋าหลัก</option>
	<option value="3">คลับ W Grand, คลับอพอลโล, คลับบราวาโด้, คลับดิวิโน่, คลับเกลลาโด้, คลับแมสซิโม, คลับนูโอโว้, กีฬาอนิเมชั่น &amp; ล็อตเตอรี่</option>
	<option value="2">a-Sports</option>
	<option value="7">e-Sports</option>
	<option value="9">i-Sports</option>
	<option value="11">x-กีฬา</option>
	<option value="4">พาลาซโซ</option>
	<option value="16">F1 ตกปลา (RMB)</option>
	<option value="6">Poker (USD)</option>
	<option value="8">P2P</option>

</select><input type="hidden" name="ctl00$ctl00$master_ContentPlaceHolder2$CashierContent$drpTransferFrom" id="drpTransferFrom" value="-1" class="selectbox">
                </td>
            </tr>
            <tr>
                <td class="verticalAlign">
                    <label for="drpTransferTo" id="master_ContentPlaceHolder2_CashierContent_lblTransferTo">โอนเงินไปยัง</label></td>
                <td>
                    <select name="ctl00$ctl00$master_ContentPlaceHolder2$CashierContent$drpTransferTo" id="drpTransferTo" onchange="javascript:checkWallets();TransferToChange();" class="selectbox" style=" position: absolute;">
	<option value="-1">-- เลือกกระเป๋าเงิน --</option>
	<option value="0">กระเป๋าหลัก</option>
	<option value="3">คลับ W Grand, คลับอพอลโล, คลับบราวาโด้, คลับดิวิโน่, คลับเกลลาโด้, คลับแมสซิโม, คลับนูโอโว้, กีฬาอนิเมชั่น &amp; ล็อตเตอรี่</option>
	<option value="2">a-Sports</option>
	<option value="7">e-Sports</option>
	<option value="9">i-Sports</option>
	<option value="11">x-กีฬา</option>
	<option value="4">พาลาซโซ</option>
	<option value="16">F1 ตกปลา (RMB)</option>
	<option value="6">Poker (USD)</option>
	<option value="8">P2P</option>

</select><input type="hidden" name="ctl00$ctl00$master_ContentPlaceHolder2$CashierContent$drpTransferTo" id="drpTransferTo" value="-1" class="selectbox">
                </td>
            </tr>
            <tr>
                <td class="verticalAlign">
                    <label for="txtTransferAmount" id="master_ContentPlaceHolder2_CashierContent_lblTransferAmount">ยอดการโอนเงิน</label></td>
                <td>
                    <input name="ctl00$ctl00$master_ContentPlaceHolder2$CashierContent$txtTransferAmount" type="text" id="txtTransferAmount" class="required" onkeypress="return ValidatePositiveDecimal(this, event);" onkeyup="javascript:return ValidatePositiveDecimal(this, event);checkPromo();">
                    <span id="exchangeRate"></span>
                </td>
            </tr>           
            <tr id="trPromoCode" class="verticalAlign" style="display: none;">
                <td>
                    <label for="txtPromoCode" id="master_ContentPlaceHolder2_CashierContent_lblPromoCode">รหัสโปรโมชั่น</label></td>
                <td>
                    <input name="ctl00$ctl00$master_ContentPlaceHolder2$CashierContent$txtPromoCode" type="text" id="txtPromoCode" class="vAlphaNumeric">
                    <span id="litBonusAmount"></span>
                    <span id="litBonusAmt" style="visibility: hidden;"></span>
                    <span id="litRolloverAmount" style="visibility: hidden;"></span>
                    <span id="litProductCode" style="visibility: hidden;"></span>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                <button type="button" id="btnTransaction" class="button_submit center dinpro" onclick="SubmitBox('history');">ยืนยัน</a>
            <img style="display: none;" id="imgLoading" src="_static/_css/img/loading.gif" /></td>
                
            </tr>
            <tr>
                <td></td>
                <td colspan="3">
                    <span id="ltlResults"></span></td>
            </tr>
        </tbody></table>
        <table id="tblBonusCodeNew" class="form" style="display:none;">
            <colgroup>
		        <col style="width: 130px;">
			    <col style="width: 700px;">
		        <col style="width: 130px;">
		    </colgroup>
            <tbody><tr>
		        <td></td>
                <td><span id="lblBonusTitle">รหัสโปรโมชั่น:</span></td>
		        <td></td>
            </tr>
            <tr>
		        <td></td>
                <td>
                    <div class="promotion_left float">
                        <ul class="side_nav nav">
	                        <!--<li><a href="#EXISTING_RELOAD">RELOAD</a></li> -->
                            <li><a href="#ALL">ทั้งหมด</a></li>
	                        <li><a href="#NEW_MEMBER">สมาชิกใหม่</a></li>
                            
                            <li><a href="#SPORTS">กีฬา</a></li>
                            <li><a href="#CASINO">คาสิโน</a></li>
                            <li><a href="#SLOTS">สล็อต</a></li>
                            <li><a href="#TEXAS_MAHJONG">เท็กซัส มาจง</a></li>
                            <li><a href="#LOTTERY">ล็อตเตอรี</a></li>
                            
                        </ul>
                    </div> 
                    <div class="promotion_right float_right" onchange="populateBonusCode();">

 
                    </div>
                    <table id="radBonusCode" class="form" onchange="populateBonusCode();" style="display:none">
	<tbody><tr>
		<td><input id="radBonusCode_0" type="radio" name="ctl00$ctl00$master_ContentPlaceHolder2$CashierContent$radBonusCode" value="CAWRB10,3,CASINO"><label for="radBonusCode_0">โบนัสเติมเงินรายวันคาสิโน 10% (CAWRB10)</label></td><td><input id="radBonusCode_6" type="radio" name="ctl00$ctl00$master_ContentPlaceHolder2$CashierContent$radBonusCode" value="W100SGAP20,3,NEW_MEMBER"><label for="radBonusCode_6">โบนัสต้อนรับ 100% สล็อตเกลลาโด้ (W100SGAP20)</label></td>
	</tr><tr>
		<td><input id="radBonusCode_1" type="radio" name="ctl00$ctl00$master_ContentPlaceHolder2$CashierContent$radBonusCode" value="ESBRB10,7,SPORTS"><label for="radBonusCode_1">โบนัสเติมเงินรายวันกีฬา E-Sports 10% (ESBRB10)</label></td><td><input id="radBonusCode_7" type="radio" name="ctl00$ctl00$master_ContentPlaceHolder2$CashierContent$radBonusCode" value="W100SPZ20,4,NEW_MEMBER"><label for="radBonusCode_7">โบนัสต้อนรับ 100% สล็อตพาลาซโซ (W100SPZ20)</label></td>
	</tr><tr>
		<td><input id="radBonusCode_2" type="radio" name="ctl00$ctl00$master_ContentPlaceHolder2$CashierContent$radBonusCode" value="W100ESPORTS,7,NEW_MEMBER"><label for="radBonusCode_2">โบนัสต้อนรับ 100% กีฬา E-Sports (W100ESPORTS)</label></td><td><input id="radBonusCode_8" type="radio" name="ctl00$ctl00$master_ContentPlaceHolder2$CashierContent$radBonusCode" value="W20CA,3,NEW_MEMBER"><label for="radBonusCode_8">โบนัสต้อนรับ 20% คาสิโน (W20CA)</label></td>
	</tr><tr>
		<td><input id="radBonusCode_3" type="radio" name="ctl00$ctl00$master_ContentPlaceHolder2$CashierContent$radBonusCode" value="W100SAP20,3,NEW_MEMBER"><label for="radBonusCode_3">โบนัสต้อนรับ 100% สล็อตอพอลโล่ (W100SAP20)</label></td><td><input id="radBonusCode_9" type="radio" name="ctl00$ctl00$master_ContentPlaceHolder2$CashierContent$radBonusCode" value="W20ESB,7,NEW_MEMBER"><label for="radBonusCode_9">โบนัสต้อนรับ 20% กีฬา E-Sports (W20ESB)</label></td>
	</tr><tr>
		<td><input id="radBonusCode_4" type="radio" name="ctl00$ctl00$master_ContentPlaceHolder2$CashierContent$radBonusCode" value="W100SBS20,3,NEW_MEMBER"><label for="radBonusCode_4">โบนัสต้อนรับ 100% สล็อตดิวิโน่ (W100SBS20)</label></td><td><input id="radBonusCode_10" type="radio" name="ctl00$ctl00$master_ContentPlaceHolder2$CashierContent$radBonusCode" value="W20WK2,1,NEW_MEMBER"><label for="radBonusCode_10">โบนัสต้อนรับ 20% คีโน (W20WK2)</label></td>
	</tr><tr>
		<td><input id="radBonusCode_5" type="radio" name="ctl00$ctl00$master_ContentPlaceHolder2$CashierContent$radBonusCode" value="W100SBV20,3,NEW_MEMBER"><label for="radBonusCode_5">โปรโมชั่นยินดีต้อนรับ 100% สล็อตคลับบราวาโด้ (W100SBV20)</label></td><td><input id="radBonusCode_11" type="radio" name="ctl00$ctl00$master_ContentPlaceHolder2$CashierContent$radBonusCode" value="W20WS,2,NEW_MEMBER"><label for="radBonusCode_11">โบนัสต้อนรับ 20% กีฬา A-Sports (W20WS)</label></td>
	</tr>
</tbody></table>
                </td>
		        <td></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    
                </td>
            </tr>
            <tr>
		        <td></td>
                <td>
                    <span id="lblBonusNote2">อ้างอิงตาม<a href="https://www.w88bkk.com/Promotion.aspx#NEW_MEMBER" target="_blank">ข้อกำหนดและเงื่อนไข</a>ในการใช้งานโปรโมชั่น</span>
                </td>
		        <td></td>
            </tr>
        </tbody></table>
    </div>