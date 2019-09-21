<script>
$( function() {
        $( ".datepicker" ).datepicker();
});


function GetResults()
{
    $('#loading_res').show();
	$('#search_result tbody').html('');
    var htmlopt = '';
    $.ajax({
			url: 'resource/history.app.php',
			type:'POST',
			data:  {
                
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
                    $.each(data.data, function(k, v) {

                        var trans_froms =v.trans_froms.split(':');
                        var trans_tos =v.trans_tos.split(':');

                        htmlopt += '<tr>'+
                        '<td style="width: 15px;"></td>'+
                            '<td>'+v.id+'</td>'+
                            '<td>'+v.created_at+'</td>'+
                            '<td>'+(v.referenceid==null?'':v.referenceid)+'</td>'+
                            '<td>'+v.transaction_type+'</td>'+
                            '<td>'+trans_froms[1]+'</td>'+
                            '<td>'+trans_tos[1]+'</td>'+
                            '<td style="text-align: right;">'+v.amount+'</td>'+
                            '<td style="text-align: center;">'+v.trans_status+'</td>'+
                            '<td style="width: 15px;">'+(v.deposit_channel==null?'':v.deposit_channel+',')+''+(v.deposit_time==null?'':v.deposit_time+',')+''+(v.deposit_tos==null?'':v.deposit_tos)+'</td>'+
                            '<td style="width: 15px;"></td>'+
                        '</tr>';
                    });

                    $('#search_result tbody').html(htmlopt);
                    $('#loading_res').hide();
	                
                }
            
			},
			error: function(data) {
				$("#modalFrame").find("p.message").html('ไม่สามารถทำรายการได้ กรุณาลองใหม่อีกครั้ง');
                $('#modalFrame').modal('show');
                $('#loading_res').hide();

			}
		});
    
    

                   
}

GetResults();
</script>
<input name="transaction_type" value="history" type="hidden" />
<div class="history">
        <div class="wrap">
            <table id="searchForm" cellspacing="0" cellpadding="0">
                <colgroup>
                    <col style="width: 65px;">
                    <col style="width: 5px;">
                    <col style="width: 170px;">
                    <col style="width: 65px;">
                    <col style="width: 65px;">
                    <col style="width: 5px;">
                    <col style="width: 170px;">
                    <col style="width: 65px;">
                </colgroup>
                <tbody><tr>
                    <td>วันเริ่มต้น</td>
                    <td>:</td>
                    <td>
                        <input id="startDate" name="startDate" type="text" class="datepicker"  value="01/09/2019"></td>
                    <td></td>
                    <td>วันสุดท้าย</td>
                    <td>:</td>
                    <td>
                        <input id="endDate"  name="endDate" type="text" class="datepicker" readonly="true" value="05/09/2019"></td>
                    <td></td>
                </tr>
                <tr>
                    <td>ประเภท</td>
                    <td>:</td>
                    <td>
                        <div class="select"><select id="type" name="type" class="required select-hidden">
                            <option value="0">ทั้งหมด</option>
                            <option value="1">ฝาก</option>
                            <option value="2">ถอน</option>
                        </select><div class="select-styled">ทั้งหมด</div><ul class="select-options"><li rel="0">ทั้งหมด</li><li rel="1">ฝาก</li><li rel="2">ถอน</li></ul><i class="arrow"></i></div></td>
                    <td></td>
                    <td>สถานะ</td>
                    <td>:</td>
                    <td>
                        <div class="select"><select id="status" name="status" class="required select-hidden">
                            <option value="All">ทั้งหมด</option>
                            <option value="Successful">สำเร็จ</option>
                            
                            <option value="Pending">อยู่ในระหว่างดำเนินการ</option>
                            
                            <option value="Failed">ล้มเหลว</option>
                        </select><div class="select-styled">ทั้งหมด</div><ul class="select-options"><li rel="All">ทั้งหมด</li><li rel="Successful">สำเร็จ</li><li rel="Pending">อยู่ในระหว่างดำเนินการ</li><li rel="Failed">ล้มเหลว</li></ul><i class="arrow"></i></div>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><button type="button" id="btnTransaction" class="button_submit center dinpro" onclick="GetResults();">ยืนยัน</a>
            <img style="display: none;" id="imgLoading" src="_static/_css/img/loading.gif" /></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody></table>
        </div>
        <hr>
        <div class="">
            
            <table id="search_result" border="0" style="width: 100%;" cellspacing="0" cellpadding="0">
                <thead>
                    <tr>
                        <th style="width: 15px;"></th>
                        <th style="">รายการเลขที่</th>
                        <th style="">วัน/เวลา</th>
                        <th style="">หมายเลขอ้างอิง</th>
                        <th style="">ประเภท</th>
                        <th style="">ต้นทาง</th>
                        <th style="">ปลายทาง</th>
                        <th style="text-align: center;">ยอดเงิน</th>
                        <th style="text-align: center;">สถานะ</th>
                        <th style="text-align: center;">หมายเหตุ</th>
                        <th style="width: 15px;"></th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
            
        </div>

        <div class="wrap">
            <div class="result_not_found">
                <br>
                ไม่พบข้อมูล!
            </div>
            <div class="error_message">
                <br>
                เกิดข้อผิดพลาด
            </div>
            <div id="loading_res" class="loading">
                <br>
                Loading
            </div>
        </div>
    </div>