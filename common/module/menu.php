<?php include('resource/product.app.php'); print($subnav); ?>
<div class="headerMenu clear">
        <div class="mainMenu  clear">
            <div class="menuContent">
                <sup class="hide">New</sup>
                <ul id="nav">
                    <li id="navHome">
                        <a class="subcontent hover" data-subcontent="home" href="./" title="หน้าหลัก">
                            <img src="_static/img/home.gif" height="28" width="30" alt="">
                        </a>
                    </li>
                    <li id="navMobile">
                        <a class="subcontent" data-subcontent="mobile" title="เดิมพันผ่านมือถือ"
                            href="Mobile/index">
                            <img src="_static/img/mobile.gif" style="height: 28px; width: 30px;" height="28" width="30"
                                alt="">&nbsp;<sup class="hide" style="margin-left: -9px;">New</sup>
                        </a>
                    </li>

                    <?php echo $nav; ?>
                    
                    <li id="navPromos">
                        <a href="promotion" title="โปรโมชั่น">
                            <h2>โปรโมชั่น</h2>
                        </a>
                    </li>
                </ul>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
            <style>
                .subcontent_holder h3 {
                    display: none;
                }

               /* .virtual sup {
                    display: none !important;
                }

                
                .casino_massimo sup,
                .casino_clubw sup,
                .casino_palazzo sup,
                .casino_massimo sup {
                    display: none !important;
                }

                .gallardo_menu sup,
                .nuovo_menu sup,
                .crescendo_menu sup,
                .palazzo_menu sup,
                .massimo_menu sup,
                .apollo_menu sup,
                .excelso sup,
                .luckyfishing sup,
                .fishingmaster sup,
                .fishingworld sup,
                .fishingpalazzo sup,
                .casino_clubw_premier sup,
                .mobile sup {
                    display: none !important;
                }

                .subcontent_button.sup sup {
                    display: block !important;
                }

                .download_modal {
                    width: 446px;
                    margin-left: -223px;
                }

                .download_modal .logo {
                    padding-top: 10px;
                }

                .download_modal .modal-body {
                    padding: 8px;
                }

                div.palazzo_message,
                div.gallardo_message {
                    background: #252525;
                    border: 1px solid #333;
                    margin-top: 20px;
                    padding: 0 10px 10px;
                }

                .palazzo_message .title,
                .gallardo_message .title {
                    font-size: 18px;
                    text-align: center;
                    font-weight: bold;
                    line-height: 18px;
                    padding: 18px 0;
                }

                .palazzo_message ul,
                .gallardo_message ul {
                    list-style-type: none;
                    padding: 0;
                    margin: 0;
                }

                body.white div.palazzo_message,
                body.white div.gallardo_message {
                    background: #ddd;
                    border: 1px solid #ddd;
                    color: #000;
                }

                body.white .palazzo_message .modal-body,
                body.white .gallardo_message .modal-body {
                    color: #000;
                }

                

                div.potm {
                    width: 100%;
                    background: url(_static/menu/img/1.jpg) #1e4c64 bottom repeat-x;
                }

                .potm a .subcontent_button_play {
                    color: white;
                    line-height: 26px;
                    height: 26px;
                    background: #286d8e;
                }

                .potm a:hover .subcontent_button_play {
                    background: #2a8fbd;
                    overflow: hidden;
                }


                div.potm div sup {
                    top: 15px;
                   
                }
*/
                div.subcontent_holder sup {
                    display: none !important;
                }

                div.subcontent_holder sup.active {
                    display: block !important;
                }
/*
                div.menu_potm {
                    background-repeat: no-repeat;
                    display: none;
                    left: 0;
                    top: 0;
                    position: absolute;
                    z-index: 0;
                }

                .menu_five_column div.menu_potm {
                    background-image: url(_static/menu/img/20180711/slots/5_item/potm/POTM-bg.jpg);
                    height: 164px;
                    width: 192px;
                }

                .menu_six_column div.menu_potm {
                    background-image: url(_static/menu/img/20180711/slots/6_item/potm/POTM-bg.jpg);
                    height: 164px;
                    width: 160px;
                }

                .menu_seven_column div.menu_potm {
                    background-image: url(_static/menu/img/20180711/slots/7_item/potm/POTM-bg.jpg);
                    height: 164px;
                    width: 138px;
                }

                div.menu_potm.active {
                    display: block;
                }

                div.menu_potm.active+img {
                    position: relative;
                    z-index: 1;
                }

                .potm a.menu_five_column:hover div.menu_potm.active {
                    background-image: url(_static/menu/img/20180711/slots/5_item/potm/POTM-bg-hover.jpg);
                }

                .potm a.menu_six_column:hover div.menu_potm.active {
                    background-image: url(_static/menu/img/20180711/slots/6_item/potm/POTM-bg-hover.jpg);
                }

                .potm a.menu_seven_column:hover div.menu_potm.active {
                    background-image: url(_static/menu/img/20180711/slots/7_item/potm/POTM-bg-hover.jpg);
                }

                #casinoMenu div.menu_potm {
                    background-image: url(_static/menu/img/casino/3_item/POTM-bg.jpg);
                    height: 164px;
                    width: 563px;
                }

                #casinoMenu #clubwGrandCasinoMenu:hover div.menu_potm {
                    background-image: url(_static/menu/img/casino/3_item/POTM-hover-bg.jpg);
                }

                #casinoMenu .menu_four_column div.menu_potm {
                    background-image: url(_static/menu/img/casino/4_item/POTM-bg.jpg);
                    height: 164px;
                    width: 240px;
                }

                #casinoMenu #clubwGrandCasinoMenu.menu_four_column:hover div.menu_potm {
                    background-image: url(_static/menu/img/casino/4_item/POTM-hover-bg.jpg);
                }

                #fishing_download .popover {
                    z-index: 9999;
                    position: fixed;
                    min-width: 400px;
                }

                #fishing_download .popover-content {
                    padding: 0px;
                }

                #home_popup {
                    margin-top: -290px !important;
                    width: auto !important;
                }

                #home_popup .modal-body {
                    padding: 0;
                }

                #home_popup .modal-body .palazzo_message {
                    font-size: 13px;
                    margin: 10px;
                }

                #home_popup .modal-body .detail {
                    font-size: 13px;
                    text-align: center;
                }

                #palazzo_mobile_carousel .palazzo_message .title,
                #palazzo_mobile .palazzo_message .title,
                #palazzo .palazzo_message .title,
                #massimo_download .palazzo_message .title,
                #gallardo .palazzo_message .title,
                #fishingmaster_IOS .palazzo_message .title,
                #mahjong_IOS .palazzo_message .title,
                #bull_IOS .palazzo_message .title,
                #w88_IOS .palazzo_message .title,
                #fishing_download .palazzo_message .title,
                #poseidonfishing_download .palazzo_message .title,
                #nuovo .palazzo_message .title,
                #bravado .palazzo_message .title,
                #home_popup .modal-body .palazzo_message .title {
                    font-size: 18px;
                    line-height: 1.3 !important;
                }

                #home_popup .modal-body ul {
                    margin-left: 10px;
                }

                #palazzo_mobile_carousel .modal-body ul li,
                #palazzo_mobile .modal-body ul li,
                #palazzo .modal-body ul li,
                #massimo_download .modal-body ul li,
                #gallardo .modal-body ul li,
                #fishingmaster_IOS .modal-body ul li,
                #mahjong_IOS .modal-body ul li,
                #bull_IOS .modal-body ul li,
                #w88_IOS .modal-body ul li,
                #fishing_download .modal-body ul li,
                #poseidonfishing_download .modal-body ul li,
                #bravado .modal-body ul li,
                #nuovo .modal-body ul li,
                #palazzo_mobile_carousel .modal-body .palazzo_message,
                #palazzo_mobile .modal-body .palazzo_message,
                #palazzo .modal-body .palazzo_message,
                #massimo_download .modal-body .palazzo_message,
                #gallardo .modal-body .palazzo_message,
                #fishingmaster_IOS .modal-body .palazzo_message,
                #mahjong_IOS .modal-body .palazzo_message,
                #bull_IOS .modal-body .palazzo_message,
                #w88_IOS .modal-body .palazzo_message,
                #fishing_download .modal-body .palazzo_message,
                #poseidonfishing_download .modal-body .palazzo_message,
                #bravado .modal-body .palazzo_message,
                #nuovo .modal-body .palazzo_message,
                #palazzo_mobile_carousel .modal-body .palazzo_message i,
                #palazzo_mobile .modal-body .palazzo_message i,
                #palazzo .modal-body .palazzo_message i,
                #massimo_download .modal-body .palazzo_message i,
                #gallardo .modal-body .palazzo_message i,
                #fishingmaster_IOS .modal-body .palazzo_message i,
                #mahjong_IOS .modal-body .palazzo_message i,
                #bull_IOS .modal-body .palazzo_message i,
                #w88_IOS .modal-body .palazzo_message i,
                #fishing_download .modal-body .palazzo_message i,
                #poseidonfishing_download .modal-body .palazzo_message i,
                #bravado .modal-body .palazzo_message i,
                #nuovo .modal-body .palazzo_message i {
                    font-size: 16px;
                    line-height: 1.5;
                }

                #palazzo_mobile_carousel.download_modal,
                #palazzo_mobile.download_modal,
                #palazzo.download_modal,
                #fishingmaster_IOS.download_modal,
                #bull_IOS.download_modal,
                #w88_IOS.download_modal {
                    width: 575px;
                }

                #home_popup .modal-body ul li {
                    text-indent: -1em;
                    padding-left: 1em;
                    font-size: 16px;
                    line-height: 1.5;
                }

           

                #palazzo .palazzo-tbl td {
                    vertical-align: baseline;
                    padding-right: 5px;
                    font-size: 13px;
                }

               

                .modal-esports .modal-body {
                    padding: 0;
                }

                .modal-esports .palazzo_message {
                    margin: 5px;
                }

                .modal-esports .title.detail {
                    font-size: 18px;
                    font-weight: normal;
                    padding: 0;
                }

                body.white .modal-esports .palazzo_message .title.detail {
                    color: #000;
                }

                

                .modal-body .palazzo_message *,
                .modal-body .palazzo_message ul *,
                .modal-body .palazzo_message ul li *,
                .modal-body .palazzo_message ul li b *,
                .modal-body .gallardo_message ul *,
                .modal-body .gallardo_message ul li *,
                .modal-body .gallardo_message ul li b *,
                .modal-body .gallardo_message ol *,
                .modal-body .gallardo_message ol li *,
                .modal-body .gallardo_message ol li b *,
                .modal-body label[for*="msg_chk"],
                .modal-body label[for*="popup_chk"],
                .modal-body .palazzo_message span,
                .modal-body .palazzo_message p,
                #logoutFrame .modal-body .message,
                #announcementFrame *,
                #announcementFrame *>*,
                #announcementFrame2 *,
                #announcementFrame2 *>*,
                #modalFrame .message {
                    font-size: 16px;
                }

                .modal-body input[type="checkbox"][id*="msg_chk"],
                .modal-body input[type="checkbox"][id*="popup_chk"] {
                    vertical-align: text-bottom;
                    position: relative;
                    top: -1px;
                }

                #esports_asia_popup .palazzo_message table,
                #esports_euro_popup .palazzo_message table {
                    margin: 0 auto;
                }

                #esports_asia_popup,
                #esports_euro_popup {
                    width: 800px;
                  
                }

              

                #bravado {
                    width: 446px;
                    margin-left: -223px;
                }

                #bravado .logo {
                    padding-top: 10px;
                }

                #bravado .modal-body {
                    padding: 8px;
                }

                #bravado_mobile {
                    width: 446px;
                    margin-left: -223px;
                }

                #bravado_mobile .logo {
                    padding-top: 10px;
                }

                #bravado_mobile .modal-body {
                    padding: 8px;
                }

                body.white #bravado .modal-body {
                    color: #000;
                }

                .modal.no-padding .modal-body {
                    padding: 0 !important;
                }

                #videoPopup,
                #videoPopup video {
                    width: 600px;
                }

                #videoPopup video {
                    width: 600px;
                    height: 337px;
                }

                #videoPopup .palazzo_message {
                    border: 0;
                }

                #videoPopup,
                #videoPopup .palazzo_message {
                    background-color: #252525;
                }

                #videoPopup .palazzo_message a.button {
                    margin-bottom: 10px;
                }

                body.white #videoPopup,
                body.white #videoPopup .palazzo_message {
                    background-color: #ffffff;
                }

                .modal-scrollable:has(#pushy) {
                    background: #000;
                }

                body.white #pushy .pushy-content {
                    background: #ddd;
                    border: 1px solid #ddd;
                    font-size: 15px;
                }

                body.white #pushy .pushy-content div.pushy-logo {
                    background: url('_static/_event/W88-Logo-W-182x182.png') no-repeat center center;
                    background-size: 120px;
                }

                #pushy {
                    top: 33%;
                    max-width: 510px;
                }

                #pushy .sprite_logo {
                    background: url('_static/_event/2019/W88-Logo-AVFCW88-black-EN.png') no-repeat;
                    width: 350px;
                    height: 80px;
                    padding: 0px;
                    margin: 0px;
                }

                body.white #pushy .sprite_logo {
                    background: url('_static/_event/2019/W88-Logo-AVFCW88-white-EN.png') no-repeat;
                }

                body.white #pushy .zh-cn {
                    background: url('_static/_event/2019/W88-Logo-AVFCW88-white-CN.png') no-repeat;
                }

                #pushy .zh-cn {
                    background: url('_static/_event/2019/W88-Logo-AVFCW88-black-CN.png') no-repeat;
                }

                #pushy .modal-body .palazzo_message {
                    margin: 0;
                }

                #pushy .pushy-content {
                    background: #252525;
                    border: 1px solid #333;
                    margin: 20px 10px;
                    padding: 5px;
                    font-size: 15px;
                }

                #pushy .pushy-content,
                #pushy .pushy-content .pushy-button {
                    display: flex;
                    align-items: center;
                    justify-content: center;
                }

                #pushy .pushy-content>div {
                    margin: 0 10px;
                }

                #pushy .pushy-content div.pushy-logo {
                    display: block;
                    position: relative;
                    top: 5px;
                    background: url('_static/_event/W88-Logo-B-182x182.png') no-repeat center center;
                    height: 120px;
                    width: 170px;
                    background-size: 120px;
                }

                #pushy .pushy-content div.pushy-logo img {
                    display: none;
                }

                #pushy .pushy-content div.pushy-message,
                #pushy .pushy-content div.pushy-message .title {
                    text-align: center;
                    margin: 0;
                    padding: 0;
                    font-weight: 700;
                }

                #pushy .pushy-content div.pushy-message .title {
                    font-size: 20px;
                }

                #pushy .pushy-content div.pushy-message span,
                #pushy .pushy-content div.pushy-message p {
                    position: relative;
                    top: 3px;
                    font-size: 15px;
                    color: #ccc;
                    margin: 0;
                }

                body.white #pushy .pushy-content div.pushy-message span,
                body.white #pushy .pushy-content div.pushy-message p {
                    color: #000000;
                }

                #pushy .pushy-content div.pushy-message p.pushy-sub {
                    font-size: 15px;
                    font-weight: 200;
                    position: relative;
                    top: 10px;
                    color: #808080;
                    margin: 0;
                }

                #pushy .pushy-content .pushy-button {
                    position: relative;
                    margin-top: 18px;
                }

                #pushy .pushy-content .pushy-button a {
                    min-width: 90px;
                    margin: 0 15px;
                    padding: 5px 20px;
                }

                .pushy-modal-always-on-top {
                    z-index: 2003 !important;
                }

                .pushy-modal-always-on-top~.modal-backdrop {
                    z-index: 2002 !important;
                }

                .uppercase {
                    text-transform: uppercase;
                }

                .modal-scrollable .modal:not(.modal-overflow) {
                    margin: 0 auto !important;
                    position: absolute;
                    left: 0;
                    right: 0;
                    -webkit-transform: translateY(-50%);
                    -moz-transform: translateY(-50%);
                    -ms-transform: translateY(-50%);
                    -o-transform: translateY(-50%);
                    transform: translateY(-50%);
                }

                .modal-scrollable #loginFrame2 {
                    transform: translateY(0);
                }

                @-webkit-keyframes shake2 {

                    0%,
                    100% {
                        -webkit-transform: translate(0, -50%) rotate(0deg);
                    }

                    10%,
                    30%,
                    50%,
                    70%,
                    90% {
                        -webkit-transform: translate(-10px, -50%) rotate(0deg);
                    }

                    20%,
                    40%,
                    60%,
                    80% {
                        -webkit-transform: translate(10px, -50%) rotate(0deg);
                    }
                }

                #esports_asia_popup.shake,
                #esports_euro_popup.shake,
                .home #loginFrame.shake,
                #loginFrame.shake,
                #pushy.shake {
                    -webkit-animation-name: shake2;
                    -moz-animation-name: shake2;
                    -o-animation-name: shake2;
                    animation-name: shake2;
                }

                #pushy.shake {
                    -webkit-animation-name: none;
                    -moz-animation-name: none;
                    -o-animation-name: none;
                    animation-name: none;
                }

                #slotLobby .modal-body {
                    padding: 0 !important;
                }*/
            </style>
            <div id="dvView">
                <div class="subcontent_holder" style="">
                    <?php echo $subnav; ?>
                    <div class="potm">
                        
                    </div>
                    <div class="clear"></div>
                </div>
            </div>

            <script>
                function slotsMenuInit() {
                    var udata = utility.getFromStorage(true, "udata");
                    var palazzo_download = ($.cookie("palazzo_download")) ? parseInt($.cookie("palazzo_download")) : 0;

                    if (!palazzo_download &&
                        (location.pathname.toLowerCase().indexOf("/slots/palazzo") >= 0 ||
                            location.pathname.toLowerCase().indexOf("/slots/playtech") >= 0 &&
                                (location.pathname.toLowerCase() == "/slots/" ||
                                    location.pathname.toLowerCase() == "/slots/default.aspx"))) {

                        $("#palazzo").modal('show');
                    } else {
                        $("#palazzo_msg_chk").attr("checked", "checked");
                    }
                    $("#palazzo_msg_chk").click(function () {
                        if (!$("#palazzo_msg_chk").attr("checked")) {
                            $.cookie("palazzo_download", null);
                        } else {
                            $.cookie("palazzo_download", "1", { expires: 365 });
                        }
                    });

                    var gallardo_download = ($.cookie("gallardo_download")) ? parseInt($.cookie("gallardo_download")) : 0;
                    if (!gallardo_download &&
                        (location.pathname.toLowerCase().indexOf("/slots/gallardo") >= 0 ||
                            location.pathname.toLowerCase().indexOf("/slots/isoftbet") >= 0)) {
                        $("#gallardo").modal('show');
                    } else {
                        $("#gallardo_msg_chk").attr("checked", "checked");
                    }

                    $("#gallardo_msg_chk").click(function () {
                        if (!$("#gallardo_msg_chk").attr("checked")) {
                            $.cookie("gallardo_download", null);
                        } else {
                            $.cookie("gallardo_download", "1", { expires: 365 });
                        }
                    });

                    var massimo_download = ($.cookie("massimo_msg_chk")) ? parseInt($.cookie("massimo_msg_chk")) : 0;
                    if (!massimo_download &&
                        (location.pathname.toLowerCase().indexOf("/slots/massimo") >= 0 ||
                            location.pathname.toLowerCase().indexOf("/slots/microgaming") >= 0)) {
                        $("#massimo_download").modal('show');
                    } else {
                        $("#massimo_msg_chk").attr("checked", "checked");
                    }

                    $("#massimo_msg_chk").click(function () {
                        if (!$("#massimo_msg_chk").attr("checked")) {
                            $.cookie("massimo_msg_chk", null);
                        } else {
                            $.cookie("massimo_msg_chk", "1", { expires: 365 });
                        }
                    });

                    var bravado_download = ($.cookie("bravado_download")) ? parseInt($.cookie("bravado_download")) : 0;
                    if (!bravado_download && (location.pathname.toLowerCase().indexOf("/slots/gameplayinteractive") >= 0)) {
                        $("#bravado").modal('show');
                    }
                    else {
                        $("#bravado_msg_chk").attr("checked", "checked");
                    }

                    $("#bravado_msg_chk").click(function () {
                        if (!$("#bravado_msg_chk").attr("checked")) {
                            $.cookie("bravado_download", null);
                        }
                        else {
                            $.cookie("bravado_download", "1", { expires: 365 });
                        }
                    });

                    //if (location.pathname.toLowerCase() == "/slots/" || location.pathname.toLowerCase() == "/slots/default.aspx")
                    //    $("#videoPopup").modal('show');

                    // Remove 2019-01-24
                    // var popUpStartDt = new Date("2019/02/12 00:00:00");
                    // if (popUpStartDt <= new Date()) {
                    //     var homePopup = ($.cookie("home_popup")) ? parseInt($.cookie("home_popup")) : 0;
                    //     if (!homePopup &&
                    //         (location.pathname.toLowerCase() === "/" || location.pathname.toLowerCase() === "/default.aspx"))
                    //         $("#home_popup").modal('show');
                    //     else
                    //         $("#home_popup_chk").attr("checked", "checked");

                    //     $('#home_popup_chk').on('click',
                    //         function() {
                    //             if (!$('#home_popup_chk').attr("checked"))
                    //                 $.cookie("home_popup", null);
                    //             else
                    //                 $.cookie("home_popup", "1", { expires: 365 });
                    //         });
                    // };

                    if ( (location.pathname.toLowerCase() == "/slots/" || location.pathname.toLowerCase() == "/slots/default.aspx"))
                        $("#slotLobby").modal('show');
                };

                function fishingMenuInit() {
                    if (location.href.toLowerCase().indexOf("/fishing") >= 0 && location.href.toLowerCase().indexOf("/fishingmaster") < 0) {
                        //$('#fishing_download').modal('show');
                        $('#poseidonfishing_download').modal('show');
                    }
                    else if (location.href.toLowerCase().indexOf("/3dposeidon") >= 0) {
                        $('#poseidonfishing_download').modal('show');
                    }

                    $('.luckyfishing, .poseidonfishing').on('click', function (e) {
                        if (location.href.toLowerCase().indexOf("/fishing") < 0 || location.href.toLowerCase().indexOf("/fishingmaster") >= 0) {
                            e.preventDefault();
                            location.href = "Games/Fishing/index";

                            return false;
                        }
                    });

                    $('#fishing_download, #poseidonfishing_download, #modalFrame2,.modal').on('shown.bs.modal',
                        function () {
                            $('#fishing_download img').on('load',
                                function () {
                                    $(window).trigger("resize");
                                });
                        });
                };

                window.showMessagev2 = function (message) {
                    $("#modalFrame2").find("p.message").php(message);
                    $("#modalFrame2").modal("show");
                    $('#modalFrame2 img').on('load', function () {
                        $(window).trigger("resize");
                    });
                }

                window.detectIOS = function (link1, link2) {
                    if ((/iPhone|iPad|iPod/i.test(navigator.userAgent))) {
                        location.href = link1;
                    }
                    else {
                        location.href = link2;
                    }
                }

                $(function () {
                    slotsMenuInit();
                    fishingMenuInit();
                });
            </script>
        </div>
        <div class="subMenu clear">
            <div class="opacity_background"></div>
            <div class="menuContent">
                <ul></ul>
            </div>
        </div>
    </div>