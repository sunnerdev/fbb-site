
<input name="transaction_type" id="transaction_type" value="deposit" type="hidden" />
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

<script>
$( function() {
        $( ".datepicker" ).datepicker();
});


function ShowSystemBankAccountInfoV2(accountName, accountNumber, bankName, bankBranch, showBankInfo) {
            if (showBankInfo == 1) {
                $('#tblBankInfo').css({ display: "block" });
                $('#lblCall').css({ display: "none" });
                $('#lblSystemAccountNameValue').text(accountName);
                $('#lblSystemAccountNoValue').text(accountNumber);
                $('#lblSystemAccountBankValue').text(bankName);
                $('#lblSystemAccountBranchValue').text(bankBranch);
                //$('#btnSendSMS').hide();

                var offlineDiv = document.getElementById('master_ContentPlaceHolder2_DepositContent_offlineBankMessage');
                offlineDiv.style.display = "none";
            }
            else {
                $('#tblBankInfo').css({ display: "none" });
                $('#lblCall').css({ display: "block" });
                //$('#btnSendSMS').show();

                var offlineDiv = document.getElementById('master_ContentPlaceHolder2_DepositContent_offlineBankMessage');
                offlineDiv.style.display = "none";
            }
        }

function GetWebBank(){
		$.ajax({
			url: 'resource/webbank.app.php',
			type:'POST',
			data:  {},
			success: function(data){ 
                console.log(data.data);
                var htmlopt = '';
                $.each(data.data, function(k, v) {
                    console.log('1.'+k,v.bank_name);
               
                    htmlopt += '<li><input id="ddlSystemAccount_0" type="radio" name="ddlSystemAccount" value="'+v.id+':'+v.bank_name.toUpperCase()+'-'+v.account_number.substring(6,10)+'" onclick="javascript:ShowSystemBankAccountInfoV2(&#39;'+v.account_name+'&#39;,&#39;'+v.account_number+'&#39;,&#39;ธนาคาร'+v.bank_name+'&#39;,&#39;NA&#39;,1);" /><label for="ddlSystemAccount_0">'+v.bank_name.toUpperCase()+'-'+v.account_number.substring(6,10)+' <a class=\'bank-downtime-logo off\'></a></label></li>';
                });
                if(htmlopt==undefined || htmlopt==null || htmlopt==''){
                    $('#ddlSystemAccount').html('<li><label for="ddlSystemAccount">ไม่มีข้อมูลธนาคาร<a class=\'bank-downtime-logo off\'></a></label></li>');
                }else{
                    $('#ddlSystemAccount').html(htmlopt);
                }
			},
			error: function(data) {
				$('#ddlSystemAccount').html('<li><label for="ddlSystemAccount">ไม่มีข้อมูลธนาคาร<a class=\'bank-downtime-logo off\'></a></label></li>');

			}
		});
	}
    GetWebBank();


    function GetBank(){
		$.ajax({
			url: 'resource/bank.app.php',
			type:'POST',
			data:  {},
			success: function(data){ 
                console.log(data.data);
                var htmlopt = '';
                $.each(data.data, function(k, v) {
                    console.log('1.'+k,v.bank_name);
               
                    htmlopt += '<li><input type="radio" name="ddlBankAccount" value="'+v.id+':'+v.bank_name.toUpperCase()+'-'+v.account_number.substring(6,10) +'" checked="checked" /><label for="ddlBankAccount_0">'+v.bank_name.toUpperCase()+'-******'+v.account_number.substring(6,10) +' <a class=\'bank-downtime-logo off\'></a></label></li>';
            });
            if(htmlopt==undefined || htmlopt==null || htmlopt==''){
                    $('#ddlBankAccount').html('<li><label for="ddlBankAccount">ไม่มีข้อมูลธนาคาร<a class=\'bank-downtime-logo off\'></a></label></li>');
                }else{
                    $('#ddlBankAccount').html(htmlopt);
                }
			},
			error: function(data) {
				$('#ddlBankAccount').html('<li><label for="ddlBankAccount_0">ไม่มีข้อมูลธนาคาร<a class=\'bank-downtime-logo off\'></a></label></li>');

			}
		});
	}
    GetBank();

    function c_submit(){
        $('#confirmModal').modal('show');
    }

    function f_submit()
    {
        $('#confirmModal').modal('hide');
        var deptime = $('#atePicker').val()+' '+$('#ddlHour').val()+':'+$('#ddlMinute').val()+':00';
        var date = new Date(deptime);
        var ddlSystemAccount = $("input[name='ddlSystemAccount']:checked").val();
        var ddlBankAccount = $("input[name='ddlBankAccount']:checked").val();
        var ddlDepositChannel = $("#ddlDepositChannel option:selected").val();
        var ddlBank_Input = $("#ddlBank_Input option:selected").val();
        console.log(date.getTime(),ddlSystemAccount,ddlBankAccount,ddlDepositChannel,ddlBank_Input);

        if($('#ddlHour').val()=='-' || $('#ddlMinute').val()=='-')
        {
            $("#modalFrame").find("p.message").html('เวลาฝากเงินที่ระบุไม่ถูกต้อง');
			$('#modalFrame').modal('show');
            return false;
        }
        
		$.ajax({
			url: 'resource/deposit.app.php',
			type:'POST',
			data:  {
                transaction_type: $('#transaction_type').val(),
                deposit_channel: ddlDepositChannel+'-'+ddlBank_Input,
                deposit_time: date.getTime() ,
                deposit_tos: ddlSystemAccount,
                amount: $('#txtDepositAmount').val(),
                trans_froms: ddlBankAccount,
                trans_tos: $('#ddlDepositToWallet').val(),
                referenceid: $('#txtReferenceId').val()
            },
			success: function(data){ 
                console.log(data);
                var htmlopt = '';
                if(data.success == false){
                    $.each(data.data, function(k, v) {
                        console.log(k,v[0]);
                        $('#error_'+k).html(v[0]);
                    });
                }

                if(data.success == true)
                {
                    alert('ทำรายการสำเร็จ');
                    location.href='transaction?r=history';
                }
            
			},
			error: function(data) {
				$("#modalFrame").find("p.message").html('ไม่สามารถทำรายการได้ กรุณาลองใหม่อีกครั้ง');
			    $('#modalFrame').modal('show');

			}
		});
    }
</script>
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
        <input name="txtDepositAmount" type="text" maxlength="15" id="txtDepositAmount" class="required" onKeyPress="return ValidatePositiveDecimal(this, event);" data-msg-default="โปรดกรอกข้อมูลให้ถูกต้อง" /></td>
<td id="error_amount"></td>
<td></td>
</tr>
<tr class="account-member">
<td></td>
<td class="verticalAlign">
            <label for="ddlSystemAccount" id="master_ContentPlaceHolder2_DepositContent_lblSystemAccount">บัญชี</label></td>
<td class="red">*</td>
<td>
            <ul id="ddlSystemAccount" class="required" data-msg-default="กรุณาเลือกข้อมูลที่ถูกต้องบัญชี" style="font-size:Large;">
            </ul>
            
            <div id="master_ContentPlaceHolder2_DepositContent_offlineBankMessage" style="margin-bottom:5px;width:210px;display:none;">
                <span id="lblOfflineBankMessage">ธนาคารออฟไลน์ ณ ขณะนี้ กรุณาเลือกฝากธนาคารอื่นเ</span></div>
            <div style="margin-bottom: 5px; width: 210px;">
                <span id="lblCall" style="display:none;">หากติดปัญหาเกี่ยวกับการฝาก-ถอนเงิน <a href="javascript: load_livechat();" style="text-decoration:underline;">คลิกที่นี่</a></span></div>
            <table id="tblBankInfo" style="margin-bottom:5px;display:block;">
    <tr>
        <td class="custom-padding-bottom">
                        <span id="master_ContentPlaceHolder2_DepositContent_lblSystemAccountBank" class="custom-bank-info-size">ธนาคาร:</span>
                        <span id="lblSystemAccountBankValue" class="custom-bank-info-size">ธนาคาร -</span><br />
                    </td>
    </tr>
    <tr>
        <td class="custom-padding-bottom">
                        <span id="master_ContentPlaceHolder2_DepositContent_lblSystemAccountBranch" class="custom-bank-info-size">สาขาธนาคาร:</span>
                        <span id="lblSystemAccountBranchValue" class="custom-bank-info-size"> - </span><br />
                    </td>
    </tr>
    <tr>
        <td class="custom-padding-bottom">
                        <span id="master_ContentPlaceHolder2_DepositContent_lblSystemAccountName" class="custom-bank-info-size">ชื่อบัญชี:</span>
                        <span id="lblSystemAccountNameValue" class="custom-bank-info-size"> - </span><br />
                    </td>
    </tr>
    <tr>
        <td class="custom-padding-bottom">
                        <span id="master_ContentPlaceHolder2_DepositContent_lblSystemAccountNo" class="custom-bank-info-size">หมายเลขบัญชี:</span>
                        <span id="lblSystemAccountNoValue" class="custom-bank-info-size"> - </span>
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
            <input name="atePicker" type="text" id="atePicker" class="required datepicker" data-msg-default="กรุณาทำรายการด้วย ข้อมูลเวลาและวันที่ที่ถูกต้อง อ้างอิงจากใบสลิปการฝากเงิน เพื่อหลีกเลี่ยงความล่าช้าที่อาจเกิดขึ้นได้" style="height:14px;width:65px;cursor: pointer" value="<?php echo date('m/d/Y'); ?>"/>
            <input type="hidden" name="hidSelectedDate" id="hidSelectedDate" />
            <select name="ddlHour" id="ddlHour" class="required" data-msg-default="กรุณาทำรายการด้วย ข้อมูลเวลาและวันที่ที่ถูกต้อง อ้างอิงจากใบสลิปการฝากเงิน เพื่อหลีกเลี่ยงความล่าช้าที่อาจเกิดขึ้นได้" style="width:56px;">
    <option value="-">ชั่วโมง</option>
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
            <select name="ddlMinute" id="ddlMinute" class="required" data-msg-default="กรุณาทำรายการด้วย ข้อมูลเวลาและวันที่ที่ถูกต้อง อ้างอิงจากใบสลิปการฝากเงิน เพื่อหลีกเลี่ยงความล่าช้าที่อาจเกิดขึ้นได้" style="width:64px;">
    <option value="-">นาที</option>
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
            <select name="ddlDepositChannel" id="ddlDepositChannel" class="required" data-msg-default="กรุณาเลือกข้อมูลที่ถูกต้องช่องทางการฝากเงิน">
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
            <input type="submit" name="btnUploadFile" value="Choose File" onclick="TriggerFileUpload();return (false);" id="master_ContentPlaceHolder2_DepositContent_btnUploadFile" data-msg-default="กรุณาเลือกไฟล์ที่ถูกต้องและมีขนาดไม่เกิน 2 Mb" style="width:80px;" />
            &nbsp;<span id="master_ContentPlaceHolder2_DepositContent_lblFileUpload">No file chosen</span>
            
            <input type="file" name="fuFile" id="fuFile" onchange="ApplyFileNameText();" accept="image/*" data-msg-default="กรุณาเลือกไฟล์ที่ถูกต้องและมีขนาดไม่เกิน 2 Mb" style="display: none; visibility: hidden;" />
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
            <select name="ddlBank_Input" id="ddlBank_Input" class="required" data-msg-default="กรุณาเลือกข้อมูลที่ถูกต้องธนาคารของคุณ">
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
            <input name="txtBank_Input" type="text" maxlength="100" id="txtBank_Input" class="required" onKeyPress="return ValidateAlphaNumeric(event);" data-msg-default="โปรดกรอกข้อมูลให้ถูกต้อง" />
            
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
            <ul id="ddlBankAccount" name="ddlBankAccount" class="required">
    <li><label for="ddlBankAccount_0">ไม่พบข้อมูลบัญชี กรุณาเพิ่มบัญชีธนาคาร <a class='bank-downtime-logo off'></a></label></li>

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
                            <select name="ddlBank" id="ddlBank" class="required" onChange="ShowBankNameInput(this);" data-msg-default="กรุณาเลือกข้อมูลที่ถูกต้องธนาคารของคุณ" style="width:305px;">
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
                            <input name="txtBank" type="text" maxlength="100" id="txtBank" class="required" onKeyPress="return ValidateAlpha(event);" data-msg-default="โปรดกรอกข้อมูลให้ถูกต้อง" style="width:300px;" /></td>
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
                            <input name="txtBranch" type="text" maxlength="100" id="txtBranch" class="required" onKeyPress="return ValidateAlphaNumeric(event);" data-msg-default="โปรดกรอกข้อมูลให้ถูกต้อง" style="width:300px;" />
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
                            <input name="txtAddress" type="text" maxlength="300" id="txtAddress" class="required" onKeyPress="return ValidateAlphaNumeric(event);" data-msg-default="โปรดกรอกข้อมูลให้ถูกต้อง" style="width:300px;" /></td>
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
                            <input name="txtAccountNumber" type="text" maxlength="50" id="txtAccountNumber" title="หมายเลขเท่านั้น" class=" required" onKeyPress="return ValidateNumeric(event);" data-msg-default="โปรดกรอกข้อมูลให้ถูกต้อง" style="width:300px;" /></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td class="right"></td>
        <td class="red"></td>
        <td>
                            <span class="paymentCheckBox"><input id="chkPreferred" type="checkbox" name="chkPreferred" /><label for="chkPreferred">ตั้งเป็นค่าเริ่มต้น</label></span></td>
        <td class="validate_icon"></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td class="right"></td>
        <td class="red"></td>
        <td>
                            <a onclick="javascript:return false;" id="btnSubmit" class="button_submit center dinpro" href="javascript:__doPostBack(&#39;btnSubmit&#39;,&#39;&#39;)">เพิ่มเลขที่บัญชีธนาคาร</a>
                            
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
            <input name="txtReferenceId" type="text" maxlength="50" id="txtReferenceId" onKeyPress="return ValidateAlphaNumeric(event);" data-msg-default="โปรดกรอกข้อมูลให้ถูกต้อง" /></td>
<td class="validate_icon"></td>
<td></td>
</tr>
<tr>
		<td></td>
		<td class="verticalAlign"><label for="ddlDepositToWallet" id="master_ContentPlaceHolder2_DepositContent_lblDepositWallet">ฝากเงินไปกระเป๋า</label></td>
		<td class="red"></td>
		<td class="validate_input"><select name="ddlDepositToWallet" id="ddlDepositToWallet" data-msg-default="กรุณาเลือกข้อมูลที่ถูกต้องฝากเงินไปกระเป๋า" class="selectbox valid" >
			<option selected="selected" value="0:Main_Wallet">กระเป๋าหลัก</option>
			<option value="2:a-Sports">a-Sports</option>
			<option value="7:e-Sports">e-Sports</option>
		</select></td>
		<td class="validate_icon"></td>
		<td></td>
	</tr>
<tr>
<td></td>
<td></td>
<td class="red"></td>

<td><button type="button" id="btnTransaction" class="button_submit center dinpro" onclick="c_submit();">ยืนยันฝาก</a>
            <img style="display: none;" id="imgLoading" src="_static/_css/img/loading.gif" /></td>
        
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
            <td><a id="modalSubmit" href="#" onclick="f_submit();" class="button_submit center dinpro">ใช่</a></td>
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