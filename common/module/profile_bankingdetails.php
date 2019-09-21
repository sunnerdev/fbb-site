<script>
function hideBankAdd() {
            //var x = document.getElementById('bankDetailsAdd');
            var x = document.getElementById('master_ContentPlaceHolder2_ContentPlaceHolder2_bankDetailsAdd');
            if (x.style.display == 'none') {
                x.style.display = 'block';
            } 
            else 
            {
                x.style.display = 'none';
            }
        }
</script>
<div class="account-management">
        <div id="mainBank">
            <div class="details-header-div">
                <table>
                    <colgroup>
			            <col style="width: 155px;" />
			            <col style="width: 165px;" />
                        <col style="width: 0px;" />
                        <col style="width: 220px;" />
		            </colgroup>
                    <tr>
                        <td><div style="float: left;"><span id="master_ContentPlaceHolder2_ContentPlaceHolder2_lblBankAccount" class="white_size_14px">บัญชีธนาคาร</span> </div></td>
                        
                        <td><div style="margin:0px auto"></div></td>
                        <td></td>
                        <td><div id="master_ContentPlaceHolder2_ContentPlaceHolder2_bankAddAccount" style="float: right;"><a href="#" id="master_ContentPlaceHolder2_ContentPlaceHolder2_lnkAddBankAccount" class="href-addbank button dinpro" onclick="hideBankAdd()"><span id="master_ContentPlaceHolder2_ContentPlaceHolder2_lblAddBankAccount" class="dinpro uppercase">เพิ่มเลขที่บัญชธนาคาร</span></a></div></td>
                    </tr>
                </table>
            </div>
            
            <div id="master_ContentPlaceHolder2_ContentPlaceHolder2_bankDetailsAdd" class="bank-details-add-div" style="display:none">
                <table id="master_ContentPlaceHolder2_ContentPlaceHolder2_tblBankForm" class="formAccountAdd">
	<tr>
		<td class="verticalAlign"><label for="ddlBank" id="master_ContentPlaceHolder2_ContentPlaceHolder2_lblBank">ธนาคาร</label></td>
		<td class="red">*</td>
		<td class="validate_input"><select name="ctl00$ctl00$master_ContentPlaceHolder2$ContentPlaceHolder2$ddlBank" id="ddlBank" class="required" onChange="ShowBankNameInput(this);" data-msg-default="กรุณาเลือกข้อมูลที่ถูกต้องธนาคาร" style="width:305px;">
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
			<option value="UOB">UOB Bank</option>
			<option value="BAAC">ธนาคารเพื่อการเกษตรและสหกรณ์การเกษตร (ธกส.)</option>
			<option value="LHB">ธนาคารแลนด์ แอนด์ เฮ้าส์</option>
			<option value="OTHER">ธนาคารอื่นๆ</option>

		</select></td>
		<td class="validate_icon"></td>
		<td></td>
	</tr>
	<tr id="master_ContentPlaceHolder2_ContentPlaceHolder2_trBankName" class="trBankName" style="display:none;">
		<td class="verticalAlign"><label for="txtBank" id="lblBankName">ชื่อธนาคารของคุณ</label></td>
		<td class="red">*</td>
		<td class="validate_input"><input name="ctl00$ctl00$master_ContentPlaceHolder2$ContentPlaceHolder2$txtBank" type="text" maxlength="100" id="txtBank" class="required" onKeyPress="return ValidateAlpha(event);" data-msg-default="กรุณากรอกข้อมูลที่ถูกต้องชื่อธนาคารของคุณ" style="width:300px;" /></td>
		<td class="validate_icon"></td>
		<td></td>
	</tr>
	<tr>
		<td class="verticalAlign"><label for="master_ContentPlaceHolder2_ContentPlaceHolder2_lblAccountNamevalue" id="master_ContentPlaceHolder2_ContentPlaceHolder2_lblAccountName">ชื่อบัญชีของคุณ</label></td>
		<td class="red"></td>
		<td class="validate_input" style="padding-top:7px">&nbsp;&nbsp;<span id="master_ContentPlaceHolder2_ContentPlaceHolder2_lblAccountNamevalue">สุริยา ส่องแสง</span></td>
		<td class="validate_icon"></td>
		<td></td>
	</tr>
	<tr>
		<td class="verticalAlign"><label for="txtAccountNumber" id="master_ContentPlaceHolder2_ContentPlaceHolder2_lblAccountNumber">หมายเลขบัญชีของคุณ</label></td>
		<td class="red">*</td>
		<td class="validate_input"><input name="ctl00$ctl00$master_ContentPlaceHolder2$ContentPlaceHolder2$txtAccountNumber" type="text" maxlength="50" id="txtAccountNumber" class=" required" onKeyPress="return ValidateNumeric(event);" data-msg-default="กรุณากรอกข้อมูลที่ถูกต้องหมายเลขบัญชีของคุณ" style="width:300px;" /></td>
		<td class="validate_icon"></td>
		<td></td>
	</tr>
	<tr>
		<td class="right"></td>
		<td class="red"></td>
		<td><span class="paymentCheckBox"><input id="chkPreferred" type="checkbox" name="ctl00$ctl00$master_ContentPlaceHolder2$ContentPlaceHolder2$chkPreferred" /><label for="chkPreferred">ตั้งเป็นรายการโปรด</label></span></td>
		<td class="validate_icon"></td>
		<td></td>
	</tr>
	<tr>
		<td class="right"></td>
		<td class="red"></td>
		<td>
                            <a onclick="javascript:return false;" id="btnSubmit" class="button_submit center dinpro" href="javascript:__doPostBack(&#39;ctl00$ctl00$master_ContentPlaceHolder2$ContentPlaceHolder2$btnSubmit&#39;,&#39;&#39;)">ยืนยัน</a>
                            <a onclick="hideBankAdd();return false;" id="btnSubmitCancel" class="button_grey center dinpro" href="javascript:__doPostBack(&#39;ctl00$ctl00$master_ContentPlaceHolder2$ContentPlaceHolder2$btnSubmitCancel&#39;,&#39;&#39;)">ยกเลิก</a>
                        </td>
		<td class="validate_icon"></td>
		<td></td>
	</tr>
	<tr>
		<td colspan="5"><span id="master_ContentPlaceHolder2_ContentPlaceHolder2_lblMessage" style="color:Red;"></span></td>
	</tr>
</table>

            </div>
            <hr style="visibility:hidden">
            <div id="bankAccountList_Main" class="bank-details-body-div">
                <div id="bankAccountList_Repeat">
                 
                        <table class="alt" cellspacing="0">           
                    
                            <tr>
                                <td style="display:none;"><div style="float: left;"><input type="hidden" name="ctl00$ctl00$master_ContentPlaceHolder2$ContentPlaceHolder2$rptBankAccount$ctl01$hdnBankAccountId" id="master_ContentPlaceHolder2_ContentPlaceHolder2_rptBankAccount_hdnBankAccountId_0" value="1700246" /></div></td>
                                
                                <td style="width:140px"><div style="float: left;"><span id="master_ContentPlaceHolder2_ContentPlaceHolder2_rptBankAccount_spanAccount_0">BBL-******9165</span></div></td>
                                <td><span id="master_ContentPlaceHolder2_ContentPlaceHolder2_rptBankAccount_spanAccountName_0">สุริยา ส่องแสง </span></td>
                                <td class="right">
                                    <a href="#" id="master_ContentPlaceHolder2_ContentPlaceHolder2_rptBankAccount_deleteBank_0" onclick="javascript:showDeleteConfirmationModal(1700246)">ลบ</a>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    
                                    
                                    <a href="#" id="master_ContentPlaceHolder2_ContentPlaceHolder2_rptBankAccount_editBank_0" onclick="javascript:showEditModal(1700246);">แก้ไข</a>
                                </td>
                                <td class="center"> 
                                </td>
                                <td class="center">
                                </td>
                            </tr>
                       
                        </table>         
                    
                </div>
                <hr style="visibility:hidden">
                <div id="bankAccountList">
                <table>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><div style="float: left;"><span id="master_ContentPlaceHolder2_ContentPlaceHolder2_lblBankAccountMessage" class="blue" style="font-size: 11px"></span></div></td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
                </div>
            </div>
        </div>

        
        
    </div>