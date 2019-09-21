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

    
        <?php 
        if($_GET['route'] == ''){
            include('common/pages/home.php');
        }

        if($_GET['route'] == 'register'){
            include('common/pages/register.php');
        }

        if($_GET['route'] == 'logout'){
            $_SESSION['access_token']='';
            $_SESSION['refresh_token']='';
            $_SESSION['expires_in']='';
            echo "<script>location.href = 'index.php';</script>";
            exit;
        }

    
        ?>

        <?php //include('common/module/footer.php'); ?>

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

        <script>
           /* var secondMax = function (arr) {
                var max = Math.max.apply(null, arr), // get the max of the array
                    maxi = arr.indexOf(max);
                arr[maxi] = -Infinity; // replace max in the array with -infinity
                var secondMax = Math.max.apply(null, arr); // get the new max 
                arr[maxi] = max;
                return secondMax;
            };

            setTimeout(function () {
                $(window).on("resize", function () {
                    var listWidth = $('.headerContent, body:not(.home) .mainContent, .footercontent, .menuContent').map(function () {
                        return $(this).width();
                    }).get();
                    var max = Math.max.apply(Math, listWidth);

                    if ($("body").width() < (max + 140) && $("body").width() != max) {
                        $(".download_box,.live_chat_v2 ").hide();
                    }
                    else if ($("body").width() == max) {
                        var secondPlace = secondMax(listWidth);
                        if ($("body").width() < (secondPlace + 140)) {
                            $(".download_box,.live_chat_v2 ").hide();
                        }
                        else {
                            $(".download_box,.live_chat_v2 ").show();
                        }
                    }
                    else {
                        $(".download_box,.live_chat_v2 ").show();
                    }
                }).trigger('resize');;
            }, 100);*/
        </script>
        <div class="clear"></div>
        <div class="event_footer"></div>
  
   
</body>
</html>