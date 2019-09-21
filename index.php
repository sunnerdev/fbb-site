<?php require('common/config.php'); ?>
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
</head>

<body class="home grey">

    
    <?php include('common/module/header.php'); ?>
    <?php include('common/module/menu.php'); ?>
    <?php include('common/module/loginframe.php'); ?>
    <?php include('common/module/modalFrame.php'); ?>
    



    <script>
        function menuInit(data) {
            if (data.Currency.length > 0) {
                $("a[data-afterlogin]").each(function () {
                    $(this).attr("href", $(this).attr("data-afterlogin"));
                });
            }
            if ((data.Currency.length > 0 && data.Currency != "RMB") || (data.Currency.length == 0 && data.Language != "zh-cn")) {
                $("a.fishing_menu.subcontent_button").parent().find("a.subcontent_button").removeClass("menu_eight_column").addClass("menu_seven_column");
                $(".fishing_menu").remove();

                //$('div.sports a.menu_seven_column').removeClass('menu_seven_column').addClass('menu_six_column');
            }
            else {
                $("a.hide_for_RMB.subcontent_button").parent().find("a.subcontent_button").removeClass("menu_six_column").addClass("menu_four_column");
                $("a.hide_for_RMB.subcontent_button").parent().find("a.subcontent_button").removeClass("menu_seven_column").addClass("menu_five_column");
                $("a.hide_for_RMB.subcontent_button").remove();
                $(".item.hide_for_RMB").remove();
                $(".column.hide_for_RMB").remove();
                $("sup.hide_for_RMB").remove();
            }
            if (data.Currency.length > 0 && data.Currency == "USD") {
                $("a.hide_for_RMB.subcontent_button").parent().find("a.subcontent_button").removeClass("menu_six_column").addClass("menu_four_column");
                $("a.hide_for_RMB.subcontent_button").parent().find("a.subcontent_button").removeClass("menu_seven_column").addClass("menu_five_column");
                $("a.hide_for_RMB.subcontent_button").remove();
                $(".item.hide_for_RMB").remove();
                $(".column.hide_for_RMB").remove();
                $("sup.hide_for_RMB").remove();
            }
            if ((data.Currency.length > 0 && data.Currency == "MYR") || (data.Currency.length == 0 && data.Language == "zh-my") || (data.Currency.length == 0 && data.Language == "en-us.my")) {
                $("a.hide_for_MYR.subcontent_button").parent().find("a.subcontent_button").removeClass("menu_six_column").addClass("menu_five_column");
                $("a.hide_for_MYR.subcontent_button").remove();
                $(".item.hide_for_MYR").remove();
                $(".column.hide_for_MYR").remove();
                $("sup.hide_for_MYR").remove();
            }
            if ((data.Currency.length > 0 && !(data.Currency == "THB" || data.Currency == "RMB" || data.Currency == "UUS" || data.Currency == "MYR" || data.Currency == "IDR"))
                || (data.Currency.length == 0 && !(data.Language == "th-th" || data.Language == "zh-cn" || data.Language == "zh-my" || data.Language == "en-us.my" || data.Language == "id-id"))) {
                $("a.fishing_fascino.subcontent_button").parent().find("a.subcontent_button").removeClass("menu_seven_column").addClass("menu_six_column");
                $(".fishing_fascino").remove();
                if (location.href.toLowerCase().indexOf('/games/fascino') >= 0) {
                    location.href = "index.html";
                }
            }
            if (data.Category && data.Category != "N" && data.Category.length > 0) {
                $(".NON-VIP").hide();
                $(".VIP-ONLY").show();
                $("a[data-VIPONLY]").each(function () {
                    $(this).attr("href", $(this).attr("data-VIPONLY"));
                });
            }
            else {
                $(".NON-VIP").show();
                $(".VIP-ONLY").remove();
            }
        };

        function colorPicked(color, loc) {
            push_color(color === "grey" ? "dark" : "light");
            location.href = '?' + loc;
            return false;
        };
    </script>

<form name="form1" method="post" action="https://www.w88bkk.com/" id="form1">
        <div>
            <input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE"
                value="/wEPDwUKLTM3NTA4Njg5MWRkl33k/r7ytMpML3+/H/fMMwqRMiythRrww2nDTxhHVyw=">
        </div>

        <div>

            <input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="CA0B0334">
        </div>
        <style>
            div.promo_timer {
                right: 0;
                top: 3px;
                position: absolute;
                background: none;
                border: 0;
                padding: 2px 0px;
            }

            div.promo_timer:before,
            div.promo_timer .before,
            div.promo_timer:after,
            div.promo_timer .after {
                display: none;
            }

            div.promo_timer td.timer {
                line-height: 44px;
                font-size: 32px;

                width: 51px;
                color: white;
            }

            div.promo_timer tr.timer_text td {
                color: white;
            }

            .timer_text>td {
                line-height: 7px;
                font-size: 7px !important;
                font-weight: lighter;
            }

            .carousel_main div.slide div.slide_content div.textarea {
                bottom: 65px;
            }
        </style>

        <div class="" style="position:relative;">


            <script>
                detectLink = function (window, mac) {
                    var OSName = "Unknown OS";
                    if (navigator.appVersion.indexOf("Win") != -1) OSName = "Windows";
                    if (navigator.appVersion.indexOf("Mac") != -1) OSName = "MacOS";
                    if (navigator.appVersion.indexOf("X11") != -1) OSName = "UNIX";
                    if (navigator.appVersion.indexOf("Linux") != -1) OSName = "Linux";

                    if (OSName != "MacOS") {
                        location.href = window;
                    }
                    else {
                        location.href = mac;
                    }
                }
                /*function go_mobile(path) {
                    if (!path) {
                        path = "";
                    }
                    location.href = window.location.protocol + "//m" + ((window.location.hostname.split(".").length > 2) ? window.location.hostname.substring(window.location.hostname.indexOf('.'), window.location.hostname.length) : "." + window.location.hostname) + path + window.location.search;
                }*/
            </script>
            

            




        </div>
        

<?php include('common/module/slider_banner.php'); ?>
<?php include('common/module/marquee.php'); ?>
        <div class="mainContent clear">

            <div class="bottom_column clear">
                <!--<a href="/Slots/Jackpots/" style="position: relative; display: block;">
	<img src="/_static/home/btm/img/Progressive-Jackpot-BG-TH.jpg" />
	<div id="progressive_jackpot" style="font-size: 45px; position: absolute; top: 27px; left: 240px; width: 694px; height: 56px; line-height: 56px; padding: 0;" class="white_size_50px blue center">Loading</div>
</a>-->
                <table cellpadding="0" cellspacing="0" class="btm_product"
                    style="width: 100%; height: 510px; background-image: url('_static/home/btm/img/Dividing-line-grey.png'); background-position: 1px -5px;">
                    <tr>
                        <td>
                            <a href="javascript:load_inplay();">
                                <div class="title">กีฬา</div>
                                <div class="">
                                    <img src="_static/home/btm/img/promo/W88-Home-e-Sports-TH-grey.jpg">
                                </div>
                            </a>
                        </td>
                        <td>
                            <a href="Promotion.html#esports100" class="">
                                <div class="title">โปรโมชั่น</div>
                                <div class="">
                                    <img src="_static/home/btm/img/promo/W88-Promo-B-100welcome-191018-TH-grey.jpg">
                                </div>
                            </a>
                            <div class="hide">
                                <div class="title">คู่เด็ด</div>
                                <div class="home_btm_carousel_wrapper" id="hotmatch">
                                    <div class="home_btm_carousel">
                                        [hotmatch]
                                    </div>
                                    <div class="sub_carousel_page"
                                        style="position: absolute; text-align: center; width: 100%; bottom: 20px;">
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="title">
                                การให้บริการฝาก-ถอน
                            </div>
                            <div class="content" style="padding-top: 10px; padding-left: 30px">
                                <table cellpadding="0" cellspacing="0" style="width: 250px;">
                                    <tr>
                                        <td class="white_size_18px">การฝากเงิน</td>
                                        <td rowspan="2" style="vertical-align: bottom; width: 60px;" class="right"><span
                                                class="white_size_24px" style="font-size: 30px;"
                                                data-animate="1">0</span>นาที
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>เวลาเฉลี่ย</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <div class="progress_bar">
                                                <div class="progress_bar_2" data-animate="1"></div>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                                <br>
                                <table cellpadding="0" cellspacing="0" style="width: 250px;">
                                    <tr>
                                        <td class="white_size_18px">การถอนเงิน</td>
                                        <td rowspan="2" style="vertical-align: bottom; width: 60px;" class="right"><span
                                                class="white_size_24px" style="font-size: 30px;"
                                                data-animate="3">0</span>นาที
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>เวลาเฉลี่ย</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <div class="progress_bar">
                                                <div class="progress_bar_2" data-animate="3"></div>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                                <br>
                                <br>
                                <div>
                                    การฝาก-ถอนอาจล่าช้าในช่วงเวลาธนาคารออฟไลน์<br>
                                    กรุณาตรวจสอบช่วงเวลาธนาคารออฟไลน์ได้ <a id="testing" href="javascript:void(0);"
                                        data-toggle="popover" data-html="true" data-placement="bottom"
                                        data-content="&lt;div style=&#39;padding:0 5px;&#39;&gt;ธนาคารไทยพาณิชย์ออฟไลน์เวลา 24:00 - 01:00 น. (GMT+8) ทุกวัน&lt;br/&gt;ธนาคารกรุงไทยออฟไลน์เวลา 24:00 - 04:00 น. (GMT+8) ทุกวัน&lt;br/&gt;&lt;br/&gt;**กรุณาหลีกเลี่ยงการฝากเงินในช่วงเวลาดังกล่าวซึ่งอาจจะใช้เวลาโดยประมาณ 25-30 นาทีในการปรับยอด**&lt;/div&gt;">ที่นี่</a>
                                </div>
                                <!--<table cellpadding="0" cellspacing="0" style="width: 250px;">
                    <tr>
                        <td class="white_size_18px">บริการธนาคาร</td>
                        <td rowspan="2" style="vertical-align: bottom; width: 60px;" class="right"><span class="white_size_24px" style="font-size: 30px;">62</span>ธนาคาร</td>
                    </tr>
                    <tr>
                        <td>ฟรี , ไม่ต้องเสียค่าใช้จ่าย</td>
                    </tr>
                </table>-->
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="title">ผลิตภัณฑ์เด่น</div>
                            <div class="content">
                                <div class="home_btm_carousel_wrapper" id="product_advantage_carousel">
                                    <div class="home_btm_carousel">
                                        <div class="home_btm_carousel_item">
                                            <a href="Sports/index.html">
                                                <div class="white_size_18px">
                                                    กีฬา
                                                </div>
                                                <div class="white_size_12px">
                                                    หน้ากีฬาแบบใหม่ แบบยุโรป & แบบเอเชีย
                                                    เปิดให้เดิมพันกีฬาได้หลากหลายรูปแบบแล้ววันนี้
                                                </div>
                                            </a>
                                            <div class="clear"></div>
                                            <a href="Casino/index.html">
                                                <div class="white_size_18px">
                                                    คาสิโนสด
                                                </div>
                                                <div class="white_size_12px">
                                                    ประสบการณ์ที่ลืมไม่ลงกับเกมส์คาสิโนออน์ไลน์สดที่ดีที่สุด
                                                </div>
                                            </a>
                                            <div class="clear"></div>
                                            <a href="Slots/index.html">
                                                <div class="white_size_18px">
                                                    สล็อต
                                                </div>
                                                <div class="white_size_12px">
                                                    ตื่นตากับอนิเมชั่น 3 มิติสุดอลังการ
                                                </div>
                                            </a>
                                        </div>
                                        <div class="home_btm_carousel_item">
                                            <a href="Games/index.html">
                                                <div class="white_size_18px">
                                                    เกมส์
                                                </div>
                                                <div class="white_size_12px">
                                                    สุดยอดเกมส์แห่งปีที่ไม่เหมือนใคร
                                                </div>
                                            </a>
                                            <div class="clear"></div>
                                            <a href="javascript:load_lottery_pk10(true);"
                                                data-afterlogin="javascript:load_lottery_pk10();">
                                                <div class="white_size_18px">
                                                    PK10
                                                </div>
                                                <div class="white_size_12px">
                                                    หากคุณชอบความเร็ว? ต้อง PK10 Super เดิมพันไว 60 วินาที
                                                </div>
                                            </a>
                                            <div class="clear"></div>
                                            <a href="Lottery/index.html"
                                                data-afterlogin="javascript:load_lottery_v2('lottery');">
                                                <div class="white_size_18px">
                                                    ล็อตเตอรี่
                                                </div>
                                                <div class="white_size_12px">
                                                    ออกรางวัลหมุน 3 ครั้ง & 5 ครั้ง จ่ายเงินรางวัลสูง และรับเงินคืนทันที
                                                    เลือกเล่นได้จาก 9 เกมที่แตกต่าง!
                                                </div>
                                            </a>
                                            <div class="clear"></div>

                                        </div>
                                        <div class="home_btm_carousel_item">
                                            <a href="javascript:load_lottery_keno(true, 4, 4);"
                                                data-afterlogin="javascript:load_lottery_keno(false,4, 4);">
                                                <div class="white_size_18px">
                                                    คีโน
                                                </div>
                                                <div class="white_size_12px">
                                                    ตื่นเต้น & สนุกไม่รู้จบในทุกๆ 3 - 5 นาที
                                                </div>
                                            </a>
                                            <div class="clear"></div>
                                            <a href="SuperBull/index.html">
                                                <div class="white_size_18px">
                                                    SUPER BULL
                                                </div>
                                                <div class="white_size_12px">
                                                    เล่นสนุก ชนะได้รวดเร็วขึ้น พร้อมลุ้นรับรางวัลได้สูงถึง 15 เท่า
                                                </div>
                                            </a>
                                            <div class="clear"></div>
                                            <a href="Poker/index.html">
                                                <div class="white_size_18px">
                                                    โป๊กเกอร์
                                                </div>
                                                <div class="white_size_12px">
                                                    พบกับห้องโป๊กเกอร์ออนไลน์สุดพิเศษพร้อมโบนัสเงินรางวัลใหญ่ที่เตรียมไว้ให้คุณ
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="sub_carousel_page"
                                        style="position: absolute; text-align: center; width: 100%; bottom: 20px;">
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="title">
                                ศูนย์ข้อมูล
                            </div>
                            <div class="content" style="padding: 32px 30px 0 30px;">
                                <table style="margin: 0 auto">
                                    <tr>
                                        <td>
                                            <a class="white_size_18px margin_bottom_38px"
                                                href="javascript:load_info('_static/message/404.html');">คำถามที่พบบ่อย
                                                ></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a class="white_size_18px margin_bottom_38px"
                                                href="javascript:load_info('_static/message/404.html');">วิธีการฝากเงิน?
                                                ></a> </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a class="white_size_18px"
                                                href="javascript:load_info('_static/message/404.html#2');">วิธีการถอนเงิน?
                                                ></a>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </td>
                        <td>
                            <div class="title" style="margin-top: 10px; height: 36px">
                                <img style="height: 36px; vertical-align: top;"
                                    src="_static/home/btm/img/24-hours-icon.png">
                                <span class="dinpro"
                                    style="font-size: 18px; padding-top: 10px; display: inline-block;">&nbsp;ติดต่อเรา</span>
                            </div>
                            <div class="content">
                                <div class="home_btm_carousel_wrapper" id="contact_carousel"
                                    style="position: relative;">
                                    <div class="home_btm_carousel">
                                        <div class="home_btm_carousel_item">
                                            <table border="0" cellpadding="0" cellspacing="0"
                                                style="padding: 27px 0px 57px 45px">
                                                <tr>
                                                    <td rowspan="2" height="31px">
                                                        <img src="_static/home/btm/img/Live-Chat-icon.png">
                                                    </td>
                                                    <td rowspan="2" width="32px"></td>
                                                    <td class="white_size_14px blue">แชทกับเจ้าหน้าที่
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="javascript:load_livechat()"
                                                            class="white_size_14px">แชททันที!
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="height: 21px">&nbsp;</td>
                                                </tr>
                                                <!--<tr>
									<td rowspan="2" height="31px">
										<img src="/_static/home/btm/img/Line-icon.png" />
									</td>
									<td rowspan="2" width="32px"></td>
									<td class="white_size_14px blue">LINE ฝากเงิน
									</td>
								</tr>
								<tr>
									<td> s
									    @SUPPORTTEAM
									</td>
								</tr>
								<tr>
									<td style="height: 21px">&nbsp;</td>
								</tr>-->
                                                <!--<tr>
									<td rowspan="2" height="31px">
										<img src="/_static/home/btm/img/line-icon.png" />
									</td>
									<td rowspan="2" width="32px"></td>
									<td class="white_size_14px blue">LINE
									</td>
								</tr>
								<tr>
									<td class="white_size_14px">@W88Thailand
									</td>
								</tr>-->
                                                <tr>
                                                    <td rowspan="2" height="31px">
                                                        <img src="_static/home/btm/img/Line-icon.png">
                                                    </td>
                                                    <td rowspan="2" width="32px"></td>
                                                    <td class="white_size_14px blue">LINE ติดต่อได้ 24 ชม
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="white_size_14px">@W88INFO
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                        <!--<div class="home_btm_carousel_item">
							<table border="0" cellpadding="0" cellspacing="0" style="padding: 27px 0px 57px 45px">
								<tr>
									<td rowspan="2" height="31px">
										<img src="/_static/home/btm/img/phone-icon.png" />
									</td>
									<td rowspan="2" width="32px"></td>
									<td class="white_size_14px blue">โทรหาเรา
									</td>
								</tr>
								<tr>
									<td class="white_size_14px">(+44) 2036085161
									</td>
								</tr>
							</table>
						</div>-->
                                    </div>
                                    <div class="sub_carosel_page"
                                        style="position: absolute; text-align: center; width: 100%; bottom: 20px;">
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        </form>
        <?php 
        

        if($_GET['route'] == 'logout'){
           
        }

    
        ?>

        <?php include('common/module/footer.php'); ?>

        <?php //include('common/module/slider_contact.php'); ?>


        <script>
            $(function () {
                var match = location.pathname.match(/\/(games|slots)\/(\w+)(\/(.*))?/i);
                if (match) {
                    var path = match[2];
                    path = path.toLowerCase();
                    if ("palazzo,massimo,gallardo,nuovo,divino,apollo,bravado,potm".indexOf(path.toLowerCase()) >= 0) {
                        $(function () {
                            $(window).on("scroll", BacktoTopScroll);
                        })
                    }
                    else {
                        $("#backtotopStyle").remove();
                    }
                }
                else {
                    $("#backtotopStyle").remove();
                }
            });

            function BacktoTopScroll() {
                if ($(window).scrollTop() > $(window).height()) {
                    $("#backtotop").fadeIn();
                }
                else {
                    $("#backtotop").fadeOut();
                }
            }

            function BacktoTop() {
                $("html, body").animate({ "scrollTop": "0px" }, 100);
            }
        </script>
        <style id="backtotopStyle">
            div.jackpot_popup {
                right: 70px;
            }
        </style>
        <a href="javascript:void(0)" onclick="BacktoTop();" id="backtotop" class="hide">
            <img src="_static/footer/img/backtotop.png" type="hover"
                data-imageover="/_static/footer/img/backtotop-on.png"
                style="position:fixed;bottom:10px;right:10px;z-index:9999;">
        </a>

        
        <div class="clear"></div>
        <div class="event_footer"></div>
  
</body>
</html>