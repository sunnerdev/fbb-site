<div class="headerMenu clear">
        <div class="mainMenu  clear">
            <div class="menuContent">
                <sup class="hide">New</sup>
                <ul id="nav">
                    <li id="navHome">
                        <a class="subcontent hover" data-subcontent="home" href="index.php" title="หน้าหลัก">
                            <img src="_static/img/home.gif" height="28" width="30" alt="">
                        </a>
                    </li>
                    <li id="navMobile">
                        <a class="subcontent" data-subcontent="mobile" title="เดิมพันผ่านมือถือ"
                            href="Mobile/index.html">
                            <img src="_static/img/mobile.gif" style="height: 28px; width: 30px;" height="28" width="30"
                                alt="">&nbsp;<sup class="hide" style="margin-left: -9px;">New</sup>
                        </a>
                    </li>
                    <li id="navSports">
                        <a class="subcontent" data-subcontent="sports" href="Sports/index.html" title="กีฬา">
                            <h2>กีฬา</h2>
                        </a>
                    </li>
                    <li id="navCasino">
                        <a class="subcontent" data-subcontent="casino" href="Casino/index.html" title="คาสิโนสด">
                            <h2>คาสิโนสด<sup>ใหม่</sup></h2>
                        </a>
                    </li>
                    <li id="navSlots">
                        <a class="subcontent" data-subcontent="slots" href="Slots/index.html" title="สล็อต">
                            <h2>สล็อต<sup>ใหม่</sup></h2>
                        </a>
                    </li>
                    <li id="navGames">
                        <a class="subcontent" data-subcontent="games_dropdown" href="Games/index.html" title="เกมส์">
                            <h2>เกมส์</h2>
                        </a>
                    </li>
                    <li id="navLottery">
                        <a class="subcontent" data-subcontent="lottery" href="Lottery/index.html" title="ล็อตเตอรี่">
                            <h2>ล็อตเตอรี่<sup>ใหม่</sup></h2>
                        </a>
                    </li>
                    <li id="navP2p">
                        <a class="subcontent" data-subcontent="p2p" href="P2P/index.html" title="P2P">
                            <h2>P2P</h2>
                        </a>
                    </li>
                    <li id="navPromos">
                        <a href="Promotion.html" title="โปรโมชั่น">
                            <h2>โปรโมชั่น</h2>
                        </a>
                    </li>
                    <li id="navBlog">
                        <a href="Blog/index.html" title="บล็อก" target="_blank">
                            <h2>บล็อก</h2>
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

                .virtual sup {
                    display: none !important;
                }

                /*.casino_massimo sup*/
                .casino_massimo sup,
                .casino_clubw sup,
                .casino_palazzo sup,
                .casino_massimo sup {
                    display: none !important;
                }

                /* .bravado_menu sup, .gallardo_menu sup, .nuovo_menu sup, .crescendo_menu sup, .palazzo_menu sup, .massimo_menu sup, .apollo_menu sup, .divino_menu sup */
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

                /*potm*/

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
                    /*right: 210px;*/
                }

                div.subcontent_holder sup {
                    display: none !important;
                }

                div.subcontent_holder sup.active {
                    display: block !important;
                }

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

                /*#palazzo ul li {
        list-style-position: inside;
        text-indent: -1em;
        margin-left: 1em;
    }*/

                #palazzo .palazzo-tbl td {
                    vertical-align: baseline;
                    padding-right: 5px;
                    font-size: 13px;
                }

                /*.modal-esports.in {
        top: 30% !important;
    }*/

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

                /*.home #loginFrame {
        transform: translate(10%, 0%);
    }*/

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
                    /*left: 44%;*/
                }

                /*@media(min-height: 700px) {
        #esports_asia_popup,
        #esports_euro_popup {
            top: 40%;
        }
    }
    #esports_asia_popup table,
    #esports_euro_popup table {
        margin: 0 auto;
    }*/

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
                }
            </style>
            <div id="dvView">
                <div class="subcontent_holder" style="">
                    <!-- If club is POTM, the url need to change to /Slots/potm/ -->
                    <div class="potm">
                        <div id="slot_row1" class="centralized slots hide">
                            <a id="slot_massimo" href="Slots/Microgaming/index.html"
                                class="subcontent_button menu_five_column">
                                <h3>MASSIMO</h3>
                                <div class="bg">
                                    <div class="menu_potm"></div>
                                    <img src="_static/img/blank.png"
                                        data-src="/_static/menu/img/20180711/slots/5_item/microgaming-th.png"
                                        style="height: 164px;">
                                    <div class="white_size_14px center subcontent_button_play">เล่นทันที</div>
                                </div>
                            </a>
                            <a id="slot_playngo" href="Slots/PlaynGO/index.html"
                                class="subcontent_button menu_five_column">
                                <h3>GALLARDO</h3>
                                <div class="bg">
                                    <div class="menu_potm"></div>
                                    <img src="_static/img/blank.png"
                                        data-src="/_static/menu/img/20180711/slots/5_item/Playn-GO-th.png"
                                        style="height: 164px;">
                                    <div class="white_size_14px center subcontent_button_play">เล่นทันที</div>
                                </div>
                            </a>
                            <a id="slot_bravado" href="Slots/GameplayInteractive/index.html"
                                class="subcontent_button menu_five_column">
                                <h3>BRAVADO</h3>
                                <div class="bg">
                                    <div class="menu_potm"></div>
                                    <img src="_static/img/blank.png"
                                        data-src="/_static/menu/img/20180711/slots/5_item/gameplay-interactive-th.png"
                                        style="height: 164px;">
                                    <div class="white_size_14px center subcontent_button_play">เล่นทันที</div>
                                </div>
                            </a>
                            <a id="slot_qtech" href="Slots/QTech/index.html" class="subcontent_button menu_five_column">
                                <h3>APOLLO</h3>
                                <div class="bg">
                                    <div class="menu_potm"></div>
                                    <img src="_static/img/blank.png"
                                        data-src="/_static/menu/img/20180711/slots/5_item/QTech-th.png"
                                        style="height: 164px;">
                                    <div class="white_size_14px center subcontent_button_play">เล่นทันที</div>
                                </div>
                            </a>
                            <a id="slot_palazzo" href="Slots/Playtech/index.html"
                                class="palazzo_menu subcontent_button menu_five_column">
                                <h3>CLUB PALAZZO</h3>
                                <div class="bg">
                                    <div class="menu_potm_small"></div>
                                    <img src="_static/img/blank.png"
                                        data-src="/_static/menu/img/20180711/slots/5_item/Playtech-th.png"
                                        style="height: 164px;">
                                    <div class="white_size_14px center subcontent_button_play">เล่นทันที</div>
                                    <sup>ใหม่</sup>
                                </div>
                            </a>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="potm">
                        <div id="slot_row2" class="centralized slots hide">
                            <a id="slot_gallardo" href="Slots/iSoftBet/index.html"
                                class="gallardo_menu subcontent_button menu_six_column">
                                <h3>CLUB GALLARDO</h3>
                                <div class="bg">
                                    <div class="menu_potm active"></div>
                                    <img src="_static/img/blank.png"
                                        data-src="/_static/menu/img/20180711/slots/6_item/potm/iSoftbet-th.png"
                                        style="height: 164px;">
                                    <div class="white_size_14px center subcontent_button_play">เล่นทันที</div>
                                    <sup>ใหม่</sup>
                                </div>
                            </a>
                            <a id="slot_pragmatic" href="Slots/PragmaticPlay/index.html"
                                class="apollo_menu subcontent_button menu_six_column">
                                <h3>CLUB APOLLO</h3>
                                <div class="bg">
                                    <div class="menu_potm"></div>
                                    <img src="_static/img/blank.png"
                                        data-src="/_static/menu/img/20180711/slots/6_item/Pragmatic-Play-th.png"
                                        style="height: 164px;">
                                    <div class="white_size_14px center subcontent_button_play">เล่นทันที</div>
                                    <sup>ใหม่</sup>
                                </div>
                            </a>
                            <a id="slot_nuovo" href="Slots/NetEnt/index.html"
                                class="nuovo_menu subcontent_button menu_six_column">
                                <h3>CLUB NUOVO</h3>
                                <div class="bg">
                                    <div class="menu_potm"></div>
                                    <img src="_static/img/blank.png"
                                        data-src="/_static/menu/img/20180711/slots/6_item/NetEnt-th.png"
                                        style="height: 164px;">
                                    <div class="white_size_14px center subcontent_button_play">เล่นทันที</div>
                                    <sup>ใหม่</sup>
                                </div>
                            </a>
                            <a id="slot_skywind" href="Slots/Skywind/index.html"
                                class="divino_menu subcontent_button menu_six_column">
                                <h3>CLUB DIVINO</h3>
                                <div class="bg">
                                    <div class="menu_potm"></div>
                                    <img src="_static/img/blank.png"
                                        data-src="/_static/menu/img/20180711/slots/6_item/Skywind-th.png"
                                        style="height: 164px;">
                                    <div class="white_size_14px center subcontent_button_play">เล่นทันที</div>
                                    <sup>ใหม่</sup>
                                </div>
                            </a>
                            <a id="slot_apollo" href="Slots/ToptrendGaming/index.html"
                                class="apollo_menu subcontent_button menu_six_column">
                                <h3>CLUB APOLLO</h3>
                                <div class="bg">
                                    <div class="menu_potm"></div>
                                    <img src="_static/img/blank.png"
                                        data-src="/_static/menu/img/20180711/slots/6_item/toptrend-gaming-th.png"
                                        style="height: 164px;">
                                    <div class="white_size_14px center subcontent_button_play">เล่นทันที</div>
                                    <sup>ใหม่</sup>
                                </div>
                            </a>
                            <a id="slot_more" href="Slots/index.html" class="hover subcontent_button menu_six_column"
                                data-subcontent="moreslots" title="MORE SLOTS">
                                <h3>CLUB</h3>
                                <div class="bg">
                                    <div class="menu_potm"></div>
                                    <img src="_static/img/blank.png"
                                        data-src="/_static/menu/img/20180711/slots/6_item/more-slot-th.png"
                                        style="height: 164px;">
                                    <div class="white_size_14px center subcontent_button_play"></div>
                                    <sup>ใหม่</sup>
                                </div>
                            </a>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="potm">
                        <div id="slot_row3" class="centralized moreslots hide subcontent_sub">
                            <a id="slot_divino" href="Slots/Betsoft/index.html"
                                class="divino_menu subcontent_button menu_six_column">
                                <h3>CLUB DIVINO</h3>
                                <div class="bg">
                                    <div class="menu_potm"></div>
                                    <img src="_static/img/blank.png"
                                        data-src="/_static/menu/img/20180711/slots/6_item/Betsoft-th.png"
                                        style="height: 164px;">
                                    <div class="white_size_14px center subcontent_button_play">เล่นทันที</div>
                                    <sup>ใหม่</sup>
                                </div>
                            </a>

                            <a id="slot_booongo" href="Slots/Booongo/index.html"
                                class="nuovo_menu subcontent_button menu_six_column">
                                <h3>CLUB NUOVO</h3>
                                <div class="bg">
                                    <div class="menu_potm"></div>
                                    <img src="_static/img/blank.png"
                                        data-src="/_static/menu/img/20180711/slots/6_item/BOOONGO-th.png"
                                        style="height: 164px;">
                                    <div class="white_size_14px center subcontent_button_play">เล่นทันที</div>
                                    <sup>ใหม่</sup>
                                </div>
                            </a>
                            <a id="slot_genesis" href="Slots/Genesis/index.html"
                                class="nuovo_menu subcontent_button menu_six_column">
                                <h3>CLUB NUOVO</h3>
                                <div class="bg">
                                    <div class="menu_potm"></div>
                                    <img src="_static/img/blank.png"
                                        data-src="/_static/menu/img/20180711/slots/6_item/Genesis-th.png"
                                        style="height: 164px;">
                                    <div class="white_size_14px center subcontent_button_play">เล่นทันที</div>
                                    <sup>ใหม่</sup>
                                </div>
                            </a>
                            <a id="slot_solid" href="Slots/SolidGaming/index.html"
                                class="nuovo_menu sup subcontent_button menu_six_column">
                                <h3>CLUB NUOVO</h3>
                                <div class="bg">
                                    <div class="menu_potm"></div>
                                    <img src="_static/img/blank.png"
                                        data-src="/_static/menu/img/20180711/slots/6_item/Solid-Gaming-th.png"
                                        style="height: 164px;">
                                    <div class="white_size_14px center subcontent_button_play">เล่นทันที</div>
                                    <sup>ใหม่</sup>
                                </div>
                            </a>
                            <a id="slot_spade" href="Slots/Spadegaming/index.html"
                                class="divino_menu subcontent_button menu_six_column">
                                <h3>CLUB DIVINO</h3>
                                <div class="bg">
                                    <div class="menu_potm"></div>
                                    <img src="_static/img/blank.png"
                                        data-src="/_static/menu/img/20180711/slots/6_item/Spadegaming-th.png"
                                        style="height: 164px;">
                                    <div class="white_size_14px center subcontent_button_play">เล่นทันที</div>
                                    <sup>ใหม่</sup>
                                </div>
                            </a>
                            <a id="slot_yggdrasil" href="Slots/Yggdrasil/index.html"
                                class="gallardo_menu subcontent_button menu_six_column">
                                <h3>CLUB GALLARDO</h3>
                                <div class="bg">
                                    <div class="menu_potm"></div>
                                    <img src="_static/img/blank.png"
                                        data-src="/_static/menu/img/20180711/slots/6_item/Yggdrasil-th.png"
                                        style="height: 164px;">
                                    <div class="white_size_14px center subcontent_button_play">เล่นทันที</div>
                                    <sup>ใหม่</sup>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="centralized">
                        <div id="homeMenu" class="home hide">
                            <a id="vipHomeMenu" href="VIP/index.html" class="subcontent_button menu_eight_column">
                                <h3>VIP</h3>
                                <div class="bg">
                                    <img src="_static/img/blank.png"
                                        data-src="/_static/menu/img/home/8_item/Sub-VIP-th.png" style="height: 164px;">
                                    <div class="white_size_14px center subcontent_button_play">&nbsp;</div>
                                    <!--<sup>ใหม่</sup>-->
                                </div>
                            </a>
                            <a id="rewardsHomeMenu" href="http://rewards.w88bkk.com/" rel="nofollow"
                                class="subcontent_button menu_eight_column" type="rewards">
                                <h3>Rewards Club</h3>
                                <div class="bg">
                                    <img src="_static/img/blank.png"
                                        data-src="/_static/menu/img/home/8_item/sub-rewardsclub-th.png"
                                        style="height: 164px;">
                                    <div class="white_size_14px center subcontent_button_play">&nbsp;</div>
                                    <!--<sup>ใหม่</sup>-->
                                </div>
                            </a>
                            <a id="bankingOptionsHomeMenu" href="javascript:load_account('/BankingOptions.aspx')"
                                class="subcontent_button menu_eight_column">
                                <h3>Banking Options</h3>
                                <div class="bg">
                                    <img src="_static/img/blank.png"
                                        data-src="/_static/menu/img/home/8_item/Sub-BankingOption-th.png"
                                        style="height: 164px;">
                                    <div class="white_size_14px center subcontent_button_play">&nbsp;</div>
                                    <!--<sup>ใหม่</sup>-->
                                </div>
                            </a>
                            <a id="infoCenterHomeMenu" href="javascript:load_info('_static/message/404.html');"
                                class="subcontent_button menu_eight_column">
                                <h3>Info Centre</h3>
                                <div class="bg">
                                    <img src="_static/img/blank.png"
                                        data-src="/_static/menu/img/home/8_item/Sub-InfoCentre-th.png"
                                        style="height: 164px;">
                                    <div class="white_size_14px center subcontent_button_play">&nbsp;</div>
                                    <!--<sup>ใหม่</sup>-->
                                </div>
                            </a>
                            <a id="contactUsHomeMenu" href="ContactUs.html" class="subcontent_button menu_eight_column">
                                <h3>Contact Us</h3>
                                <div class="bg">
                                    <img src="_static/img/blank.png"
                                        data-src="/_static/menu/img/home/8_item/Sub-ContactUs-th.png"
                                        style="height: 164px;">
                                    <div class="white_size_14px center subcontent_button_play">&nbsp;</div>
                                    <!--<sup>ใหม่</sup>-->
                                </div>
                            </a>
                            <a id="milestoneHomeMenu" href="Milestones.html"
                                class="subcontent_button menu_eight_column">
                                <h3>Contact Us</h3>
                                <div class="bg">
                                    <img src="_static/img/blank.png"
                                        data-src="/_static/menu/img/home/8_item/sub-milestone-th.png"
                                        style="height: 164px;">
                                    <div class="white_size_14px center subcontent_button_play">&nbsp;</div>
                                    <!--<sup>ใหม่</sup>-->
                                </div>
                            </a>
                            <a id="winnerHomeMenu" href="Winner.html" class="subcontent_button menu_eight_column">
                                <h3>Winners</h3>
                                <div class="bg">
                                    <img src="_static/img/blank.png"
                                        data-src="/_static/menu/img/home/8_item/Sub-Winner-th.png"
                                        style="height: 164px;">
                                    <div class="white_size_14px center subcontent_button_play">&nbsp;</div>
                                    <!--<sup>ใหม่</sup>-->
                                </div>
                            </a>
                            <a id="jackpotHomeMenu" href="Slots/Jackpots/index.html"
                                class="subcontent_button menu_eight_column">
                                <h3></h3>
                                <div class="bg">
                                    <img src="_static/img/blank.png"
                                        data-src="/_static/menu/img/home/8_item/sub-jackpots-th.png"
                                        style="height: 164px;">
                                    <div class="white_size_14px center subcontent_button_play">&nbsp;</div>
                                    <!--<sup>ใหม่</sup>-->
                                </div>
                            </a>
                            <div class="clear"></div>
                        </div>
                        <div id="sportsMenu" class="sports hide">
                            <a id="aSportsMenu" href="javascript:load_asports();"
                                class="subcontent_button menu_seven_column">
                                <h3>a-SPORTS</h3>
                                <div class="bg">
                                    <img src="_static/img/blank.png"
                                        data-src="/_static/menu/img/sports/7_item/asports_th.png"
                                        style="height: 164px;">
                                    <div class="white_size_14px center subcontent_button_play">เล่นทันที</div>
                                    <!--<sup>ใหม่</sup>-->
                                </div>
                            </a>
                            <a id="eSportsMenu" href="javascript:load_inplay();"
                                class="subcontent_button menu_seven_column">
                                <h3>e-SPORTS (Asian)</h3>
                                <div class="bg">
                                    <img src="_static/img/blank.png"
                                        data-src="/_static/menu/img/sports/7_item/esports_th.png"
                                        style="height: 164px;">
                                    <div class="white_size_14px center subcontent_button_play">เล่นทันที</div>
                                    <!--<sup>ใหม่</sup>-->
                                </div>
                            </a>
                            <a id="euSportsMenu" href="javascript:load_esports();"
                                class="subcontent_button menu_seven_column">
                                <h3>e-SPORTS (European)</h3>
                                <div class="bg">
                                    <img src="_static/img/blank.png"
                                        data-src="/_static/menu/img/sports/7_item/esports_2_th.png"
                                        style="height: 164px;">
                                    <div class="white_size_14px center subcontent_button_play">เล่นทันที</div>
                                    <!--<sup>ใหม่</sup>-->
                                </div>
                            </a>
                            <a id="iSportsMenu" href="javascript:load_isports();"
                                class="subcontent_button menu_seven_column">
                                <h3>i-SPORTS</h3>
                                <div class="bg">
                                    <img src="_static/img/blank.png"
                                        data-src="/_static/menu/img/sports/7_item/isports_th.png"
                                        style="height: 164px;">
                                    <div class="white_size_14px center subcontent_button_play">เล่นทันที</div>
                                    <!--<sup>ใหม่</sup>-->
                                </div>
                            </a>
                            <a id="xSportsMenu" href="javascript:load_xsports();"
                                class="subcontent_button menu_seven_column">
                                <div class="bg">
                                    <img src="_static/img/blank.png"
                                        data-src="/_static/menu/img/sports/7_item/xsports_th.png"
                                        style="height: 164px;">
                                    <div class="white_size_14px center subcontent_button_play">เล่นทันที</div>
                                    <!--<sup>ใหม่</sup>-->
                                </div>
                            </a>
                            <a id="vSportsMenu" href="javascript:load_virtual();"
                                class="subcontent_button menu_seven_column">
                                <h3>VIRTUAL</h3>
                                <div class="bg">
                                    <img src="_static/img/blank.png"
                                        data-src="/_static/menu/img/sports/7_item/vsports_th.png"
                                        style="height: 164px;">
                                    <div class="white_size_14px center subcontent_button_play">เล่นทันที</div>
                                    <!--<sup>ใหม่</sup>-->
                                </div>
                            </a>

                            <a id="ambSportsMenu" href="Ambassadors.html" class="subcontent_button menu_seven_column">
                                <h3>AMBASSADOR</h3>
                                <div class="bg">
                                    <img src="_static/img/blank.png"
                                        data-src="/_static/menu/img/sports/7_item/brand_ambassador_th.png"
                                        style="height: 164px;">
                                    <div class="white_size_14px center subcontent_button_play">ดู</div>
                                    <!--<sup>ใหม่</sup>-->
                                </div>
                            </a>
                            <div class="clear"></div>
                        </div>
                        <div id="gamesMenu" class="games_dropdown hide">
                            <a id="rpsGamesMenu" href="javascript:loadLotteryGameWithTrial('rockpaperscissors');"
                                class="subcontent_button menu_eight_column">
                                <h3>RPS</h3>
                                <div class="bg">
                                    <img src="_static/img/blank.png"
                                        data-src="/_static/menu/img/20180711/games/8_item/RPS-th.png"
                                        style="height: 164px;">
                                    <div class="white_size_14px center subcontent_button_play">
                                        <table cellpadding="0" cellspacing="0"
                                            style="width: 100%; height: 26px; overflow: hidden;">
                                            <tr>
                                                <td class="white_size_14px center" style="color: #fff;">
                                                    เล่น
                                                </td>
                                                <td style="width: 1px;">
                                                    <img src="_static/menu/img/1px_white.gif">
                                                </td>
                                                <td onclick="loadLotteryGameWithTrial('rockpaperscissors', true); return false;"
                                                    class="white_size_14px center " style="color: #fff;">
                                                    ลองเล่น
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <sup>ใหม่</sup>
                                </div>
                            </a>
                            <a id="theLadderGamesMenu" href="javascript:loadLotteryGameWithTrial('ladder');"
                                class="subcontent_button menu_eight_column">
                                <h3>Ladder</h3>
                                <div class="bg">
                                    <img src="_static/img/blank.png"
                                        data-src="/_static/menu/img/20180711/games/8_item/the-ladder-th.png"
                                        style="height: 164px;">
                                    <div class="white_size_14px center subcontent_button_play">
                                        <table cellpadding="0" cellspacing="0"
                                            style="width: 100%; height: 26px; overflow: hidden;">
                                            <tr>
                                                <td class="white_size_14px center" style="color: #fff;">
                                                    เล่น
                                                </td>
                                                <td style="width: 1px;">
                                                    <img src="_static/menu/img/1px_white.gif">
                                                </td>
                                                <td onclick="loadLotteryGameWithTrial('ladder', true);return false;"
                                                    class="white_size_14px center " style="color: #fff;">
                                                    ลองเล่น
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <sup>ใหม่</sup>
                                </div>
                            </a>
                            <a id="momoFishingGamesMenu" href="javascript:loadMomoFishingGame('momoFishing');"
                                class="subcontent_button menu_eight_column">
                                <h3>MOMO FISHING</h3>
                                <div class="bg">
                                    <img src="_static/img/blank.png"
                                        data-src="/_static/menu/img/20180711/games/8_item/Momo-Fishing-th.png"
                                        style="height: 164px;">
                                    <div class="white_size_14px center subcontent_button_play">เล่นทันที</div>
                                    <sup>ใหม่</sup>
                                </div>
                            </a>
                            <a id="luckyFishingGamesMenu"
                                href="javascript:$('#poseidonfishing_download').modal('show');void(0);"
                                class="luckyfishing subcontent_button menu_eight_column">
                                <h3>FISHING</h3>
                                <div class="bg">
                                    <img src="_static/img/blank.png"
                                        data-src="/_static/menu/img/20180711/games/8_item/LUCKY-FISHING-th.png"
                                        style="height: 164px;">
                                    <div class="white_size_14px center subcontent_button_play">ดาวน์โหลด</div>
                                    <sup>ใหม่</sup>
                                </div>
                            </a>
                            <a id="thorGameMenu" href="javascript:loadLotteryGameWithTrial('thor');"
                                class="subcontent_button menu_eight_column">
                                <h3>THOR</h3>
                                <div class="bg">
                                    <img src="_static/img/blank.png"
                                        data-src="/_static/menu/img/20180711/games/8_item/Thor-th.png"
                                        style="height: 164px;">
                                    <div class="white_size_14px center subcontent_button_play">
                                        <table cellpadding="0" cellspacing="0"
                                            style="width: 100%; height: 26px; overflow: hidden;">
                                            <tr>
                                                <td class="white_size_14px center" style="color: #fff;">
                                                    เล่น
                                                </td>
                                                <td style="width: 1px;">
                                                    <img src="_static/menu/img/1px_white.gif">
                                                </td>
                                                <td onclick="loadLotteryGameWithTrial('thor', true); return false;"
                                                    class="white_size_14px center " style="color: #fff;">
                                                    ลองเล่น
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <sup>ใหม่</sup>
                                </div>
                            </a>
                            <a id="poseidonFishingGamesMenu"
                                href="javascript:$('#poseidonfishing_download').modal('show');void(0);"
                                class="poseidonfishing subcontent_button menu_eight_column">
                                <h3>FISHING</h3>
                                <div class="bg">
                                    <img src="_static/img/blank.png"
                                        data-src="/_static/menu/img/20180711/games/8_item/3D-Poseidon-Fishing-th.png"
                                        style="height: 164px;">
                                    <div class="white_size_14px center subcontent_button_play">ดาวน์โหลด</div>
                                    <sup>ใหม่</sup>
                                </div>
                            </a>
                            <a id="fishingMasterGamesMenu" href="Games/FishingMaster/index.html"
                                class="fishingmaster subcontent_button menu_eight_column">
                                <h3>FISHING</h3>
                                <div class="bg">
                                    <img src="_static/img/blank.png"
                                        data-src="/_static/menu/img/20180711/games/8_item/FISHING-MASTER-th.png"
                                        style="height: 164px;">
                                    <div class="white_size_14px center subcontent_button_play">
                                        <table cellpadding="0" cellspacing="0"
                                            style="width: 100%; height: 26px; overflow: hidden;">
                                            <tr>
                                                <td onclick="location.href = 'https://dl.gp2cache.net/fishing/FishingMasterVN.apk';event.preventDefault();"
                                                    class="white_size_14px center" style="color: #fff;">
                                                    ANDROID
                                                </td>
                                                <td style="width: 1px;">
                                                    <img src="_static/menu/img/1px_white.gif">
                                                </td>
                                                <td onclick="$('#fishingmaster_IOS').modal('show');event.preventDefault();"
                                                    class="white_size_14px center " style="color: #fff; width: 45%;">
                                                    iOS
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <sup>ใหม่</sup>
                                </div>
                            </a>
                            <a id="cashFishGamesMenu" href="javascript:load_palazzo_link('cashfi','real')"
                                class="fishingpalazzo subcontent_button menu_eight_column">
                                <h3>FISHING</h3>
                                <div class="bg">
                                    <img src="_static/img/blank.png"
                                        data-src="/_static/menu/img/20180711/games/8_item/CLUB-PALAZZO-th.png"
                                        style="height: 164px;">
                                    <div class="white_size_14px center subcontent_button_play">เล่นทันที</div>
                                    <sup>ใหม่</sup>
                                </div>
                            </a>
                            <div class="clear"></div>
                        </div>
                        <div class="mobile hide">
                            <a href="Mobile/index.html" class="subcontent_button menu_one_column">
                                <h3>MOBILE</h3>
                                <div class="bg">
                                    <img src="_static/img/blank.png"
                                        data-src="/_static/menu/img/mobile/MOBILESUB-Standard2-th.jpg"
                                        style="width: 960px; height: 164px;">
                                    <div class="white_size_14px center subcontent_button_play">เล่นทันที</div>
                                    <sup>ใหม่</sup>
                                </div>
                            </a>
                            <div class="clear"></div>
                        </div>
                        <!--<div class="lottery hide">
            <!--<a href="javascript:load_lottery_iLotto(false);"  class="subcontent_button menu_three_column hide">
                <div class="bg">
                    <img src="/_static/img/blank.png" data-src="/_static/menu/img/ilotto_th.png" style="width:320px;  height: 164px;" />
                    <div class="white_size_14px center subcontent_button_play"><table cellpadding="0" cellspacing="0" style="width: 100%; height: 26px; overflow:hidden;">
                            <tr>
                                <td class="white_size_14px center" style="color:#fff;">
                                    เล่นทันที
                                </td>
                                <td style="width: 1px;">
                                    <img src="/_static/menu/img/1px_white.gif" />
                                </td>
                                <td onclick="load_lottery_iLotto(true); return false;" class="white_size_14px center " style="color:#fff;">
                                    ลองเล่นทันที
                                </td>
                            </tr>
                        </table></div>
                </div>
            </a>-->
                        <!--<div class="clear"></div>-->
                        <!--</div>-->

                        <div id="casinoMenu" class="casino hide">



                            <a id="clubMassimoCasinoMenu" href="Casino/index.html"
                                class="casino_massimo subcontent_button menu_three_column casino_menu_3_column_small casino_hover_small"
                                data-afterlogin="javascript:load_massimo_casino('Baccarat');">
                                <h3>CLUB MASSIMO</h3>
                                <div class="bg">
                                    <img src="_static/img/blank.png"
                                        data-src="/_static/menu/img/casino/3_item/Sub-Live-Casino-Club-Massimo-th.png"
                                        style="height: 164px;">
                                    <div class="white_size_14px center subcontent_button_play">
                                        <table cellpadding="0" cellspacing="0"
                                            style="width: 100%; height: 26px; overflow: hidden;">
                                            <tr>
                                                <td class="white_size_14px center" style="color: #fff;">
                                                    เล่นทันที
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <sup>ใหม่</sup>
                                </div>
                            </a>

                            <a id="clubwGrandCasinoMenu" href="Casino/index.html"
                                class="casino_clubw_premier subcontent_button menu_three_column casino_menu_3_column_big casino_hover_big"
                                data-afterlogin="javascript:load_casino_link_v2();">
                                <h3>CLUB W PREMIER</h3>
                                <div class="bg">
                                    <div class="menu_potm"></div>
                                    <img src="_static/img/blank.png"
                                        data-src="/_static/menu/img/casino/3_item/Sub-Live-Casino-Club-W-Grand-th.png"
                                        style="height: 164px;">
                                    <div class="white_size_14px center subcontent_button_play">
                                        <table cellpadding="0" cellspacing="0"
                                            style="width: 100%; height: 26px; overflow: hidden;">
                                            <tr>
                                                <td class="white_size_14px center" style="color: #fff;">
                                                    เล่นทันที
                                                </td>
                                                <td style="width: 1px;">
                                                    <img src="_static/menu/img/1px_white.gif">
                                                </td>
                                                <td onclick="location.href = 'https://rslots.gp2play.com/_downloads/releases/w88/win32-ia32-prod-v1.0.0/W88Slots-Setup-1.0.0-ia32.exe';return false;"
                                                    class="white_size_14px center " style="color: #fff;">
                                                    ดาวน์โหลด
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <sup>ใหม่</sup>
                                </div>
                            </a>



                            <a id="clubPalazzoCasinoMenu" href="Casino/index.html"
                                class="casino_palazzo subcontent_button menu_three_column casino_menu_3_column_small casino_hover_small"
                                data-afterlogin="javascript:load_casino_link('bal', 'real');">
                                <h3>CLUB PALAZZO</h3>
                                <div class="bg">
                                    <img src="_static/img/blank.png"
                                        data-src="/_static/menu/img/casino/3_item/Sub-Live-Casino-Club-Palazzo-th.png"
                                        style="height: 164px;">
                                    <div class="white_size_14px center subcontent_button_play">
                                        <table cellpadding="0" cellspacing="0"
                                            style="width: 100%; height: 26px; overflow: hidden;">
                                            <tr>
                                                <td class="white_size_14px center" style="color: #fff;">
                                                    เล่นทันที
                                                </td>
                                                <td style="width: 1px;">
                                                    <img src="_static/menu/img/1px_white.gif">
                                                </td>
                                                <td onclick="$('#palazzo').modal('show'); return false;"
                                                    class="white_size_14px center " style="color: #fff;">
                                                    ดาวน์โหลด
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <sup>ใหม่</sup>
                                </div>
                            </a>
                            <div class="clear"></div>
                        </div>
                        <div class="virtual hide">
                            <a href="javascript:load_virtual('VFL');" class="subcontent_button menu_five_column">
                                <h3>FOOTBALL</h3>
                                <div class="bg">
                                    <img src="_static/img/blank.png" data-src="/_static/menu/img/football_th.png"
                                        style="height: 164px;">
                                    <div class="white_size_14px center subcontent_button_play">เล่นทันที</div>
                                    <sup>ใหม่</sup>
                                </div>
                            </a>
                            <a href="javascript:load_virtual('VBL');" class="subcontent_button menu_five_column">
                                <h3>BASKETBALL</h3>
                                <div class="bg">
                                    <img src="_static/img/blank.png" data-src="/_static/menu/img/basketball_th.png"
                                        style="height: 164px;">
                                    <div class="white_size_14px center subcontent_button_play">เล่นทันที</div>
                                    <sup>ใหม่</sup>
                                </div>
                            </a>
                            <a href="javascript:load_virtual('VTO');" class="subcontent_button menu_five_column">
                                <h3>TENNIS</h3>
                                <div class="bg">
                                    <img src="_static/img/blank.png" data-src="/_static/menu/img/tennis_th.png"
                                        style="height: 164px;">
                                    <div class="white_size_14px center subcontent_button_play">เล่นทันที</div>
                                    <sup>ใหม่</sup>
                                </div>
                            </a>
                            <a href="javascript:load_virtual('VHC');" class="subcontent_button menu_five_column">
                                <h3>HORSE RACING</h3>
                                <div class="bg">
                                    <img src="_static/img/blank.png" data-src="/_static/menu/img/horseracing_th.png"
                                        style="height: 164px;">
                                    <div class="white_size_14px center subcontent_button_play">เล่นทันที</div>
                                    <sup>ใหม่</sup>
                                </div>
                            </a>
                            <a href="javascript:load_virtual('VDR');" class="subcontent_button menu_five_column">
                                <h3>DOG RACING</h3>
                                <div class="bg">
                                    <img src="_static/img/blank.png" data-src="/_static/menu/img/dogracing_th.png"
                                        style="height: 164px;">
                                    <div class="white_size_14px center subcontent_button_play">เล่นทันที</div>
                                    <sup>ใหม่</sup>
                                </div>
                            </a>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="potm">
                        <div id="lotteryMenuRow1" class="lottery centralized hide">


                            <a id="kenoLotteryMenu" href="javascript:load_lottery_keno(false, 6);"
                                class="subcontent_button  menu_five_column">
                                <h3>KENO</h3>
                                <div class="bg">
                                    <img src="_static/img/blank.png"
                                        data-src="/_static/menu/img/20180711/lottery/5_item/keno-th.png"
                                        style="height: 164px;">
                                    <div class="white_size_14px center subcontent_button_play">
                                        <table cellpadding="0" cellspacing="0"
                                            style="width: 100%; height: 26px; overflow: hidden;">
                                            <tr>
                                                <td class="white_size_14px center" style="color: #fff;">
                                                    เล่นทันที
                                                </td>
                                                <td style="width: 1px;">
                                                    <img src="_static/menu/img/1px_white.gif">
                                                </td>
                                                <td onclick="load_lottery_keno(true, 6); return false;"
                                                    class="white_size_14px center " style="color: #fff;">
                                                    ลองเล่นทันที
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <!--<sup>ใหม่</sup>-->
                                </div>
                            </a>
                            <a id="wkenoLotteryMenu" href="javascript:load_lottery_keno(false, 4, 4);"
                                class="subcontent_button  menu_five_column">
                                <h3>W KENO</h3>
                                <div class="bg">
                                    <img src="_static/img/blank.png"
                                        data-src="/_static/menu/img/20180711/lottery/5_item/wkeno-th.png"
                                        style="height: 164px;">
                                    <div class="white_size_14px center subcontent_button_play">
                                        <table cellpadding="0" cellspacing="0"
                                            style="width: 100%; height: 26px; overflow: hidden;">
                                            <tr>
                                                <td class="white_size_14px center" style="color: #fff;">
                                                    เล่นทันที
                                                </td>
                                                <td style="width: 1px;">
                                                    <img src="_static/menu/img/1px_white.gif">
                                                </td>
                                                <td onclick="load_lottery_keno(true,4, 4); return false;"
                                                    class="white_size_14px center " style="color: #fff;">
                                                    ลองเล่นทันที
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <!--<sup>ใหม่</sup>-->
                                </div>
                            </a>
                            <a id="soDengLotteryMenu" href="javascript:loadLotteryGameWithTrial('sode');"
                                class="subcontent_button sup menu_five_column">
                                <h3>SO DENG</h3>
                                <div class="bg">
                                    <img src="_static/img/blank.png"
                                        data-src="/_static/menu/img/20180711/lottery/5_item/sode-th.png"
                                        style="height: 164px;">
                                    <div class="white_size_14px center subcontent_button_play">
                                        <table cellpadding="0" cellspacing="0"
                                            style="width: 100%; height: 26px; overflow: hidden;">
                                            <tr>
                                                <td class="white_size_14px center" style="color: #fff;">
                                                    เล่นทันที
                                                </td>
                                                <td style="width: 1px;">
                                                    <img src="_static/menu/img/1px_white.gif">
                                                </td>
                                                <td onclick="loadLotteryGameWithTrial('sode', true); return false;"
                                                    class="white_size_14px center " style="color: #fff;">
                                                    ลองเล่นทันที
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <sup>ใหม่</sup>
                                </div>
                            </a>
                            <a id="ladderLotteryMenu" href="javascript:loadLotteryGameWithTrial('ladder');"
                                class="subcontent_button  menu_five_column">
                                <h3>Ladder</h3>
                                <div class="bg">
                                    <img src="_static/img/blank.png"
                                        data-src="/_static/menu/img/20180711/lottery/5_item/theladder-th.png"
                                        style="height: 164px;">
                                    <div class="white_size_14px center subcontent_button_play">
                                        <table cellpadding="0" cellspacing="0"
                                            style="width: 100%; height: 26px; overflow: hidden;">
                                            <tr>
                                                <td class="white_size_14px center" style="color: #fff;">
                                                    เล่นทันที
                                                </td>
                                                <td style="width: 1px;">
                                                    <img src="_static/menu/img/1px_white.gif">
                                                </td>
                                                <td onclick="loadLotteryGameWithTrial('ladder', true); return false;"
                                                    class="white_size_14px center " style="color: #fff;">
                                                    ลองเล่นทันที
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <sup>ใหม่</sup>
                                </div>
                            </a>
                            <a id="fast3LotteryMenu" href="javascript:loadLotteryGameWithTrial('fast3');"
                                class="subcontent_button menu_five_column">
                                <h3>FAST3</h3>
                                <div class="bg">
                                    <img src="_static/img/blank.png"
                                        data-src="/_static/menu/img/20180711/lottery/5_item/fast3-th.png"
                                        style="height: 164px;">
                                    <div class="white_size_14px center subcontent_button_play">
                                        <table cellpadding="0" cellspacing="0"
                                            style="width: 100%; height: 26px; overflow: hidden;">
                                            <tr>
                                                <td class="white_size_14px center" style="color: #fff;">
                                                    เล่นทันที
                                                </td>
                                                <td style="width: 1px;">
                                                    <img src="_static/menu/img/1px_white.gif">
                                                </td>
                                                <td onclick="loadLotteryGameWithTrial('fast3', true); return false;"
                                                    class="white_size_14px center " style="color: #fff;">
                                                    ลองเล่นทันที
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <sup>ใหม่</sup>
                                </div>
                            </a>

                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="potm">
                        <div id="lotteryMenuRow2" class="lottery centralized hide">
                            <a id="rpsLotteryMenu" href="javascript:loadLotteryGameWithTrial('rockpaperscissors');"
                                class="subcontent_button menu_six_column">
                                <h3>RPS</h3>
                                <div class="bg">
                                    <img src="_static/img/blank.png"
                                        data-src="/_static/menu/img/20180711/lottery/6_item/RPS-th.png"
                                        style="height: 164px;">
                                    <div class="white_size_14px center subcontent_button_play">
                                        <table cellpadding="0" cellspacing="0"
                                            style="width: 100%; height: 26px; overflow: hidden;">
                                            <tr>
                                                <td class="white_size_14px center" style="color: #fff;">
                                                    เล่นทันที
                                                </td>
                                                <td style="width: 1px;">
                                                    <img src="_static/menu/img/1px_white.gif">
                                                </td>
                                                <td onclick="loadLotteryGameWithTrial('rockpaperscissors', true); return false;"
                                                    class="white_size_14px center " style="color: #fff;">
                                                    ลองเล่นทันที
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <sup>ใหม่</sup>
                                </div>
                            </a>
                            <a id="lottoLotteryMenu" href="javascript:load_lottery_v2('lottery');"
                                class="subcontent_button menu_six_column">
                                <h3>LOTTO</h3>
                                <div class="bg">
                                    <img src="_static/img/blank.png"
                                        data-src="/_static/menu/img/20180711/lottery/6_item/lotto-th.png"
                                        style="height: 164px;">
                                    <div class="white_size_14px center subcontent_button_play">เล่นทันที</div>
                                    <!--<sup>ใหม่</sup>-->
                                </div>
                            </a>
                            <a id="thorLotteryMenu" href="javascript:loadLotteryGameWithTrial('thor');"
                                class="subcontent_button menu_six_column">
                                <h3>THOR</h3>
                                <div class="bg">
                                    <img src="_static/img/blank.png"
                                        data-src="/_static/menu/img/20180711/lottery/6_item/thor-th.png"
                                        style="height: 164px;">
                                    <div class="white_size_14px center subcontent_button_play">
                                        <table cellpadding="0" cellspacing="0"
                                            style="width: 100%; height: 26px; overflow: hidden;">
                                            <tr>
                                                <td class="white_size_14px center" style="color: #fff;">
                                                    เล่นทันที
                                                </td>
                                                <td style="width: 1px;">
                                                    <img src="_static/menu/img/1px_white.gif">
                                                </td>
                                                <td onclick="loadLotteryGameWithTrial('thor', true); return false;"
                                                    class="white_size_14px center " style="color: #fff;">
                                                    ลองเล่นทันที
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <sup>ใหม่</sup>
                                </div>
                            </a>
                            <a id="pk10LotteryMenu" href="javascript:load_lottery_pk10();"
                                class="subcontent_button menu_six_column">
                                <h3>PK10</h3>
                                <div class="bg">
                                    <img src="_static/img/blank.png"
                                        data-src="/_static/menu/img/20180711/lottery/6_item/pk10-th.png"
                                        style="height: 164px;">
                                    <div class="white_size_14px center subcontent_button_play">
                                        <table cellpadding="0" cellspacing="0"
                                            style="width: 100%; height: 26px; overflow: hidden;">
                                            <tr>
                                                <td class="white_size_14px center" style="color: #fff;">
                                                    เล่นทันที
                                                </td>
                                                <td style="width: 1px;">
                                                    <img src="_static/menu/img/1px_white.gif">
                                                </td>
                                                <td onclick="load_lottery_pk10(true); return false;"
                                                    class="white_size_14px center " style="color: #fff;">
                                                    ลองเล่นทันที
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <sup>ใหม่</sup>
                                </div>
                            </a>
                            <a id="gpiLotteryMenu" href="javascript:loadLotteryGameWithTrial('gpilottery');"
                                class="subcontent_button menu_six_column">
                                <h3>GPILOTTERY</h3>
                                <div class="bg">
                                    <img src="_static/img/blank.png"
                                        data-src="/_static/menu/img/20180711/lottery/6_item/gpi-lottery-th.png"
                                        style="height: 164px;">
                                    <div class="white_size_14px center subcontent_button_play">
                                        <table cellpadding="0" cellspacing="0"
                                            style="width: 100%; height: 26px; overflow: hidden;">
                                            <tr>
                                                <td class="white_size_14px center" style="color: #fff;">
                                                    เล่นทันที
                                                </td>
                                                <td style="width: 1px;">
                                                    <img src="_static/menu/img/1px_white.gif">
                                                </td>
                                                <td onclick="loadLotteryGameWithTrial('gpilottery', true); return false;"
                                                    class="white_size_14px center " style="color: #fff;">
                                                    ลองเล่นทันที
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <sup>ใหม่</sup>
                                </div>
                            </a>
                            <a id="tournamentLotteryMenu" href="Lottery/Tournament/index.html"
                                class="subcontent_button  menu_six_column">
                                <h3>SoPower</h3>
                                <div class="bg">
                                    <img src="_static/img/blank.png"
                                        data-src="/_static/menu/img/20180711/lottery/6_item/tournament-th.png"
                                        style="height: 164px;">
                                    <div class="white_size_14px center subcontent_button_play">เล่นทันที</div>
                                    <!--<sup>ใหม่</sup>-->
                                    <sup>ใหม่</sup>
                                </div>
                            </a>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="potm">
                        <div id="p2pMenuRow1" class="p2p centralized hide">
                            <a id="texasHoldemMenu" href="P2P/Poker/index.html"
                                class="subcontent_button menu_six_column">
                                <h3>Texas Holdem Poker</h3>
                                <div class="bg">
                                    <img src="_static/img/blank.png"
                                        data-src="/_static/menu/img/20180711/p2p/6_item/texas-holdem-th.png"
                                        style="height: 164px;">
                                    <div class="white_size_14px center subcontent_button_play">เล่นทันที</div>
                                    <sup>ใหม่</sup>
                                </div>
                            </a>
                            <a id="dominoQQMenu" href="Domino/index.html" class="subcontent_button menu_six_column">
                                <h3>Domino</h3>
                                <div class="bg">
                                    <img src="_static/img/blank.png"
                                        data-src="/_static/menu/img/20180711/p2p/6_item/domino-qq-th.png"
                                        style="height: 164px;">
                                    <div class="white_size_14px center subcontent_button_play">เล่นทันที</div>
                                    <sup>ใหม่</sup>
                                </div>
                            </a>
                            <a id="pokDengMenu" href="PokDeng/index.html" class="subcontent_button menu_six_column">
                                <h3>Pok Deng</h3>
                                <div class="bg">
                                    <img src="_static/img/blank.png"
                                        data-src="/_static/menu/img/20180711/p2p/6_item/pokdeng-th.png"
                                        style="height: 164px;">
                                    <div class="white_size_14px center subcontent_button_play">เล่นทันที</div>
                                    <sup>ใหม่</sup>
                                </div>
                            </a>
                            <a id="tienLenMenu" href="TienLen/index.html" class="subcontent_button menu_six_column">
                                <h3>Tien Len</h3>
                                <div class="bg">
                                    <img src="_static/img/blank.png"
                                        data-src="/_static/menu/img/20180711/p2p/6_item/tienlen-th.png"
                                        style="height: 164px;">
                                    <div class="white_size_14px center subcontent_button_play">เล่นทันที</div>
                                    <sup>ใหม่</sup>
                                </div>
                            </a>
                            <a id="superBullP2PMenu" href="SuperBull/index.html"
                                class="subcontent_button menu_six_column">
                                <h3>SuperBull</h3>
                                <div class="bg">
                                    <img src="_static/img/blank.png"
                                        data-src="/_static/menu/img/20180711/p2p/6_item/super-bull-th.png"
                                        style="height: 164px;">
                                    <div class="white_size_14px center subcontent_button_play">เล่นทันที</div>
                                    <sup>ใหม่</sup>
                                </div>
                            </a>
                            <a id="pokerMenu" href="Poker/index.html" class="subcontent_button menu_six_column">
                                <h3>Poker</h3>
                                <div class="bg">
                                    <img src="_static/img/blank.png"
                                        data-src="/_static/menu/img/20180711/p2p/6_item/poker-th.png"
                                        style="height: 164px;">
                                    <div class="white_size_14px center subcontent_button_play">เล่นทันที</div>
                                    <sup>ใหม่</sup>
                                </div>
                            </a>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="potm">

                    </div>
                    <div class="potm">
                        <div id="p2pMenuRow3" class="p2p centralized hide">





                            <a id="emptyZ88P2PMenu" href="javascript:void(0);"
                                class="subcontent_button menu_one_column">
                                <h3>Three Cards</h3>
                                <div class="bg">
                                    <!--<img src="/_static/img/blank.png" data-src="/_static/menu/img/20180711/p2p/0_item/Killer-39s-th.png" style="height: 164px;" />
                    <div class="white_size_14px center subcontent_button_play">เล่นทันที</div>
                    <sup>ใหม่</sup>-->
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div id="palazzo_mobile_carousel" class="download_modal modal hide fade left background-grey" tabindex="-1"
                style="overflow: hidden;">
                <div class="modal-body">
                    <a href="javascript:void(0);" data-dismiss="modal" aria-hidden="true">
                        <img style="position: absolute; top: 0; right: 0; z-index: 2;" src="_static/img/blank.png"
                            data-src="_static/promotions/img/close.png">
                    </a>
                    <div class="center logo">
                        <i class="sprite_logo"></i>
                    </div>
                    <div class="palazzo_message">
                        <div class="title blue">3 ขั้นตอนง่ายๆในการเล่นคลับพาลาซโซเวอร์ชั่นดาวน์โหลด</div>
                        <ul>
                            <li><b>ขั้นตอนที่ 1:</b>&nbsp;&nbsp;คลิกที่ปุ่มดาวน์โหลดด้านล่าง</li>
                            <li><b>ขั้นตอนที่ 2:</b>&nbsp;&nbsp; ทำการติดตั้งโปรแกรมเกมส์ด้วยการคลิก RUN หรือ Save
                                เพื่อเก็บข้อมูลที่ Hard drive ของคุณ</li>
                            <li><b>ขั้นตอนที่ 3:</b>&nbsp;&nbsp;ทำการเข้าสู่ระบบด้วยการใส่ "<span
                                    class="blue">w88</span>" นำหน้าชื่อผู้ใช้งานของคุณ</li>
                        </ul>
                        <br>
                        ตัวอย่าง:
                        <br>
                        หากชื่อผู้ใช้งานของคุณคือ "luckyplayer", ดังนั้นในการเข้าสู่ระบบคุณต้องใช้ "<span
                            class="blue">W88</span>LUCKYPLAYER"เป็นต้น
                        <br>
                        <br>
                        <div class="center">
                            <a href="http://m.ld176988.com/live/download.html" rel="nofollow" target="_blank"
                                class="button big">ดาวน์โหลดทันที</a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="palazzo_mobile" class="download_modal modal hide fade left background-grey" tabindex="-1"
                style="overflow: hidden;">
                <div class="modal-body">
                    <a href="javascript:void(0);" data-dismiss="modal" aria-hidden="true">
                        <img style="position: absolute; top: 0; right: 0; z-index: 2;" src="_static/img/blank.png"
                            data-src="_static/promotions/img/close.png">
                    </a>
                    <div class="center logo">
                        <i class="sprite_logo"></i>
                    </div>
                    <div class="palazzo_message">
                        <div class="title blue">3 ขั้นตอนง่ายๆในการเล่นคลับพาลาซโซเวอร์ชั่นดาวน์โหลด</div>
                        <ul>
                            <li><b>ขั้นตอนที่ 1:</b>&nbsp;&nbsp;คลิกที่ปุ่มดาวน์โหลดด้านล่าง</li>
                            <li><b>ขั้นตอนที่ 2:</b>&nbsp;&nbsp; ทำการติดตั้งโปรแกรมเกมส์ด้วยการคลิก RUN หรือ Save
                                เพื่อเก็บข้อมูลที่ Hard drive ของคุณ</li>
                            <li><b>ขั้นตอนที่ 3:</b>&nbsp;&nbsp;ทำการเข้าสู่ระบบด้วยการใส่ "<span
                                    class="blue">w88</span>" นำหน้าชื่อผู้ใช้งานของคุณ</li>
                        </ul>
                        <br>
                        ตัวอย่าง:
                        <br>
                        หากชื่อผู้ใช้งานของคุณคือ "luckyplayer", ดังนั้นในการเข้าสู่ระบบคุณต้องใช้ "<span
                            class="blue">W88</span>LUCKYPLAYER"เป็นต้น
                        <br>
                        <br>
                        <div class="center">
                            <a href="http://m.ld176988.com/download.html" rel="nofollow" target="_blank"
                                class="button big">ดาวน์โหลดทันที</a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="palazzo" class="download_modal modal hide fade left background-grey" tabindex="-1"
                style="overflow: hidden;">
                <div class="modal-body">
                    <a href="javascript:void(0);" data-dismiss="modal" aria-hidden="true">
                        <img style="position: absolute; top: 0; right: 0; z-index: 2;" src="_static/img/blank.png"
                            data-src="_static/promotions/img/close.png">
                    </a>
                    <div class="center logo">
                        <i class="sprite_logo"></i>
                    </div>
                    <div class="palazzo_message">
                        <div class="title blue">3 ขั้นตอนง่ายๆในการเล่นคลับพาลาซโซเวอร์ชั่นดาวน์โหลด</div>
                        <ul>
                            <li><b>ขั้นตอนที่ 1:</b>&nbsp;&nbsp;คลิกที่ปุ่มดาวน์โหลดด้านล่าง</li>
                            <li><b>ขั้นตอนที่ 2:</b>&nbsp;&nbsp; ทำการติดตั้งโปรแกรมเกมส์ด้วยการคลิก RUN หรือ Save
                                เพื่อเก็บข้อมูลที่ Hard drive ของคุณ</li>
                            <li><b>ขั้นตอนที่ 3:</b>&nbsp;&nbsp;ทำการเข้าสู่ระบบด้วยการใส่ "<span
                                    class="blue">w88</span>" นำหน้าชื่อผู้ใช้งานของคุณ</li>
                        </ul>
                        <br>
                        ตัวอย่าง:
                        <br>
                        หากชื่อผู้ใช้งานของคุณคือ "luckyplayer", ดังนั้นในการเข้าสู่ระบบคุณต้องใช้ "<span
                            class="blue">w88</span>luckyplayer"เป็นต้น
                        <br>
                        <br>
                        <i>สมาชิกจะต้องทำการดาวน์โหลด <a href="http://get.adobe.com/flashplayer/otherversions"
                                rel="nofollow" target="_blank">Adobe Flash Player</a> เวอร์ชั่นล่าสุดก่อน
                            หากท่านใช้งานด้วยเบราว์เซอร์ IE.</i>
                        <br>
                        <br>
                        <div class="center">
                            <a href="http://cdn.w88palazzo.com/newgpi/w88/setupglx.exe" rel="nofollow"
                                class="button big">ดาวน์โหลดทันที</a>
                        </div>
                    </div>
                    <div class="clear" style="margin: 8px 0 0;">
                        <input type="checkbox" id="palazzo_msg_chk" style="margin: 0;">&nbsp;<label
                            for="palazzo_msg_chk">ไม่แสดงอีกครั้ง</label>
                    </div>
                </div>
            </div>
            <div id="massimo_download" class="download_modal modal hide fade left background-grey" tabindex="-1"
                style="overflow: hidden;">
                <div class="modal-body">
                    <a href="javascript:void(0);" data-dismiss="modal" aria-hidden="true">
                        <img style="position: absolute; top: 0; right: 0; z-index: 2;" src="_static/img/blank.png"
                            data-src="_static/promotions/img/close.png">
                    </a>
                    <div class="center logo">
                        <i class="sprite_logo"></i>
                    </div>
                    <div class="palazzo_message" style="position: relative;">
                        <div class="title blue" style="line-height: normal; text-align: left;">
                            คลับแมสซิโมดาวน์โหลดพีซี
                        </div>
                        <div class="" style="position:absolute; right: 10px;margin-top: -25px;">
                            <a href="http://resigner.qfcontent.com/w88.apk">
                                <table>
                                    <tr>
                                        <td>
                                            <div style="margin:0 auto; width: 70px;">
                                                <img src="_static/img/blank.png"
                                                    data-src="_static/menu/img/ClubMassimo-MG-CN.png">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="center bold">
                                            MG แอนดรอยด์
                                        </td>
                                    </tr>
                                </table>
                            </a>
                        </div>
                        <br>
                        <br>
                        <br>
                        <br>
                        <div class="">
                            <a href="https://dl.gp2cache.net/Massimo/Club_Massimo.exe" rel="nofollow"
                                class="button big">ดาวน์โหลดทันที</a>
                            <br><br>
                        </div>
                    </div>
                    <div class="clear" style="margin: 8px 0 0;">
                        <br><br><br><br>
                        <input type="checkbox" id="massimo_msg_chk" style="margin: 0;">&nbsp;<label
                            for="massimo_msg_chk">ไม่แสดงอีกครั้</label>
                    </div>
                    <img src="_static/img/blank.png" data-src="/_static/menu/img/MG-popup-img.png"
                        style="position:absolute;margin-top: -113px;left: 50%;margin-left:-133px;">
                </div>
            </div>
            <!-- <div id="gallardo" class="download_modal modal hide fade left background-grey" tabindex="-1" style="overflow: hidden;">
    <div class="modal-body">
        <a href="javascript:void(0);" data-dismiss="modal" aria-hidden="true">
            <img style="position: absolute; top: 0; right: 0; z-index: 2;" src="/_static/img/blank.png" data-src="/_static/promotions/img/close.png" />
        </a>
        <div class="center logo">
            <i class="sprite_logo"></i>
        </div>
        <div class="gallardo_message">
            <div class="title blue">3 ขั้นตอนง่ายๆในการเล่นคลับเกลลาโด้(ISB)เวอร์ชั่นดาวน์โหลด</div>
            <ul>
                <li><b>ขั้นตอนที่ 1:</b>&nbsp;&nbsp;คลิกที่ปุ่มดาวน์โหลดด้านล่าง</li>
                <li><b>ขั้นตอนที่ 2:</b>&nbsp;&nbsp;ทำการติดตั้งโปรแกรมเกมส์ด้วยการคลิก RUN  หรือ Save เพื่อเก็บข้อมูลที่ Hard drive ของคุณ</li>
                <li><b>ขั้นตอนที่ 3:</b>&nbsp;&nbsp;ทำการเข้าสู่ระบบด้วยบัญชีผู้ใช้งานและรหัสผ่านของคุณ</li>
            </ul>

            <br />
            <br />
            <div class="center">
                <a href="/download.aspx?type=gallardo" rel="nofollow" class="button big">ดาวน์โหลดทันที</a>
            </div>
        </div>
        <div class="clear" style="margin: 8px 0 0;">
            <input type="checkbox" id="gallardo_msg_chk" style="margin: 0;" />&nbsp;<label for="gallardo_msg_chk">ไม่แสดงอีกครั้ง</label>
        </div>
    </div>
</div> -->
            <div id="fishingmaster_IOS" class="download_modal modal hide fade left background-grey" tabindex="-1"
                style="overflow: hidden;">
                <div class="modal-body">
                    <a href="javascript:void(0);" data-dismiss="modal" aria-hidden="true">
                        <img style="position: absolute; top: 0; right: 0; z-index: 2;" src="_static/img/blank.png"
                            data-src="_static/promotions/img/close.png">
                    </a>
                    <div class="center logo">
                        <i class="sprite_logo"></i>
                    </div>
                    <div class="palazzo_message">
                        <div class="title blue">5 วิธีง่ายๆในการเล่นFishing Masterมาจงผ่านมือถือระบบ iOS</div>
                        <ul>
                            <li><b>ขั้นตอนที่ 1:</b>&nbsp;&nbsp;คลิกเลือกที่ปุ่ม "ดาวน์โหลดทันที"</li>
                            <li><b>ขั้นตอนที่ 2:</b>&nbsp;&nbsp;จัดเก็บไฟล์เกมส์ฟิชชิ่งมาสเตอร์ลงในมือถือของคุณ</li>
                            <li><b>ขั้นตอนที่ 3:</b>&nbsp;&nbsp;ไปที่ Settings => General => Profiles & Device
                                Management</li>
                            <li><b>ขั้นตอนที่ 4:</b>&nbsp;&nbsp;คลิกที่ "Green Communications Inc" จากนั้นคลิก Trust
                            </li>
                            <li><b>ขั้นตอนที่ 5:</b>&nbsp;&nbsp;การดาวน์โหลดและการตั้งค่าเสร็จสมบรูณ์
                                คุณสามารถเล่นเกมส์Fishing Masterจากมือถือไอโฟนเครื่องโปรดของคุณได้ทันที!!</li>
                        </ul>
                        <div class="center">
                            <br>
                            <p>
                                <a href="javascript:detectIOS('_static/download/fishing_master_ios.vi-vn.html?type=fishingmaster_ios','https://dl.gp2cache.net/fishing/FishingMasterVN.ipa');void(0);"
                                    rel="nofollow" class="button big">ดาวน์โหลดทันที</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div id="mahjong_IOS" class="download_modal modal hide fade left background-grey" tabindex="-1"
                style="overflow: hidden;">
                <div class="modal-body">
                    <a href="javascript:void(0);" data-dismiss="modal" aria-hidden="true">
                        <img style="position: absolute; top: 0; right: 0; z-index: 2;" src="_static/img/blank.png"
                            data-src="_static/promotions/img/close.png">
                    </a>
                    <div class="center logo">
                        <i class="sprite_logo"></i>
                    </div>
                    <div class="palazzo_message">
                        <div class="title blue">5 วิธีง่ายๆในการเล่นเท็กซัสมาจงผ่านมือถือระบบ iOS</div>
                        <ul>
                            <li><b>ขั้นตอนที่ 1:</b>&nbsp;&nbsp;คลิกเลือกที่ปุ่ม "ดาวน์โหลดทันที"</li>
                            <li><b>ขั้นตอนที่ 2:</b>&nbsp;&nbsp;จัดเก็บไฟล์เกมส์เท็กซัสมาจงลงในมือถือของคุณ</li>
                            <li><b>ขั้นตอนที่ 3:</b>&nbsp;&nbsp;ไปที่ Settings => General => Profiles & Device
                                Management</li>
                            <li><b>ขั้นตอนที่ 4:</b>&nbsp;&nbsp;คลิกที่ "Green Communications Inc" จากนั้นคลิก Trust
                            </li>
                            <li><b>ขั้นตอนที่ 5:</b>&nbsp;&nbsp;การดาวน์โหลดและการตั้งค่าเสร็จสมบรูณ์
                                คุณสามารถเล่นเกมส์เท็กซัสมาจงจากมือถือไอโฟนเครื่องโปรดของคุณได้ทันที!!</li>
                        </ul>
                        <div class="center">
                            <br>
                            <p>
                                <a href="https://tm.gp2play.com/mobile/ios/direct.html" rel="nofollow" target="_blank"
                                    class="button big">ดาวน์โหลดทันที</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div id="bull_IOS" class="download_modal modal hide fade left background-grey" tabindex="-1"
                style="overflow: hidden;">
                <div class="modal-body">
                    <a href="javascript:void(0);" data-dismiss="modal" aria-hidden="true">
                        <img style="position: absolute; top: 0; right: 0; z-index: 2;" src="_static/img/blank.png"
                            data-src="_static/promotions/img/close.png">
                    </a>
                    <div class="center logo">
                        <i class="sprite_logo"></i>
                    </div>
                    <div class="palazzo_message">
                        <div class="title blue">5 วิธีง่ายๆในการเล่น Super Bull ผ่านมือถือระบบ iOS</div>
                        <ul>
                            <li><b>ขั้นตอนที่ 1:</b>&nbsp;&nbsp;คลิกเลือกที่ปุ่ม "ดาวน์โหลดทันที"</li>
                            <li><b>ขั้นตอนที่ 2:</b>&nbsp;&nbsp;จัดเก็บไฟล์เกมส์ Super Bull ลงในมือถือของคุณ</li>
                            <li><b>ขั้นตอนที่ 3:</b>&nbsp;&nbsp;ไปที่ Settings => General => Profiles & Device
                                Management</li>
                            <li><b>ขั้นตอนที่ 4:</b>&nbsp;&nbsp;คลิกที่ "Shanghai U.E Supply Chain Management Co., Ltd"
                                จากนั้นคลิก Trust</li>
                            <li><b>ขั้นตอนที่ 5:</b>&nbsp;&nbsp;การดาวน์โหลดและการตั้งค่าเสร็จสมบรูณ์ คุณสามารถเล่นเกมส์
                                Super Bull จากมือถือไอโฟนเครื่องโปรดของคุณได้ทันที!!</li>
                        </ul>
                        <div class="center">
                            <br>
                            <p>
                                <a href="https://tm.gp2play.com/mobileNiuniu/1/ios_direct_en.html" rel="nofollow"
                                    target="_blank" class="button big">ดาวน์โหลดทันที</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div id="w88_IOS" class="download_modal modal hide fade left background-grey" tabindex="-1"
                style="overflow: hidden;">
                <div class="modal-body">
                    <a href="javascript:void(0);" data-dismiss="modal" aria-hidden="true">
                        <img style="position: absolute; top: 0; right: 0; z-index: 2;" src="_static/img/blank.png"
                            data-src="_static/promotions/img/close.png">
                    </a>
                    <div class="center logo">
                        <i class="sprite_logo"></i>
                    </div>
                    <div class="palazzo_message">
                        <div class="title blue">5 ขั้นตอนง่ายๆในการดาวน์โหลด Club W88 บน iOS</div>
                        <ul>
                            <li><b>ขั้นตอนที่ 1:</b>&nbsp;&nbsp;คลิ๊กที่ปุ่ม "ดาวน์โหลดทันที" </li>
                            <li><b>ขั้นตอนที่ 2:</b>&nbsp;&nbsp;ทำการติดตั้ง <span class="blue">CLUB W88</span>
                                โดยการเปิดไฟล์ดาวน์โหลด และบันทึกไปยังมือถือของท่าน</li>
                            <li><b>ขั้นตอนที่ 3:</b>&nbsp;&nbsp;ไปที่ ตั้งค่า(Setting) => ทั่วไป(General) =>
                                การจัดการโปรไฟล์และอุปกรณ์(PROFILES & DEVICE MANAGEMENT)</li>
                            <li><b>ขั้นตอนที่ 4:</b>&nbsp;&nbsp;คลิ๊กที่ "Green Communications Inc" => คลิ๊กที่เชื่อถือ
                            </li>
                            <li><b>ขั้นตอนที่ 5:</b>&nbsp;&nbsp;คุณได้ทำการตั้งค่าเรียบร้อยแล้วเท่านี้ CLUB W88
                                สามารถทำงานบนอุปกรณ์ของคุณได้แล้วค่ะ</li>
                        </ul>
                        <div class="center">
                            <br>
                            <p>
                                <a href="javascript:detectIOS('https://casino.gp2fun.com/ios/download.html?lang=vi-vn','https://casino.gp2fun.com/ios/download.html?lang=vi-vn');"
                                    rel="nofollow" class="button big">ดาวน์โหลดทันที</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div id="fishing_download" class="download_modal modal hide fade left background-grey" tabindex="-1"
                style="overflow: hidden;">
                <div class="modal-body">
                    <a href="javascript:void(0);" data-dismiss="modal" aria-hidden="true">
                        <img style="position: absolute; top: 0; right: 0; z-index: 2;" src="_static/img/blank.png"
                            data-src="_static/promotions/img/close.png">
                    </a>
                    <div class="center logo">
                        <i class="sprite_logo"></i>
                    </div>
                    <div class="palazzo_message">
                        <div class="title blue">ขั้นตอนง่ายๆ ในการเริ่มต้นเล่น LUCKY FISHING</div>
                        <ul>
                            <li><b>ขั้นตอนที่ 1:</b>&nbsp;&nbsp;คลิกที่ [Bank] ด้านบนสุด</li>
                            <li><b>ขั้นตอนที่ 2:</b>&nbsp;&nbsp;เปลี่ยนเงินของคุณใน <a
                                    href="javascript:showMessagev2(&quot;<img src='_static/menu/img/fishing_step1_en.jpg'>&quot;);">[Gold
                                    Coins]</a></li>
                            <!--<li><b>ขั้นตอนที่ 3:</b>&nbsp;&nbsp;เข้าสู่หน้าล็อบบี้เกมส์ตกปลา</li>
                <li><b>ขั้นตอนที่ 4:</b>&nbsp;&nbsp;เปลี่ยน [金币] เป็น <a href="javascript:showMessagev2(&quot;<img src='/_static/menu/img/fishing_step2.jpg'>&quot;);">[游戏币]</a></li>-->

                        </ul>
                        <div class="center">
                            <p>
                                หมายเหตุ: 21 กรกฎาคม 2016 นี้เป็นต้นไป อัตราแลกเปลี่ยน <br>RMB 1 = 1000 Gold Coins
                            </p>
                            <p>
                                <a href="https://dl.gp2cache.net/fishing/W88FishingEN.exe" rel="nofollow"
                                    target="_blank" class="button big">ดาวน์โหลดทันที</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 3D Poseidon Fishing -->
            <div id="poseidonfishing_download" class="download_modal modal hide fade left background-grey" tabindex="-1"
                style="overflow: hidden;">
                <div class="modal-body">
                    <a href="javascript:void(0);" data-dismiss="modal" aria-hidden="true">
                        <img style="position: absolute; top: 0; right: 0; z-index: 2;" src="_static/img/blank.png"
                            data-src="_static/promotions/img/close.png">
                    </a>
                    <div class="center logo">
                        <i class="sprite_logo"></i>
                    </div>
                    <div class="palazzo_message">
                        <div class="title blue">ขั้นตอนง่ายๆ ในการเริ่มต้นเล่น LUCKY FISHING/3D POSEIDON FISHING</div>
                        <ul>
                            <li><b>ขั้นตอนที่ 1:</b>&nbsp;&nbsp;คลิกที่ [Bank] ด้านบนสุด</li>
                            <li><b>ขั้นตอนที่ 2:</b>&nbsp;&nbsp;เปลี่ยนเงินของคุณใน <a
                                    href="javascript:showMessagev2(&quot;<img src='_static/menu/img/fishing_step1_en.jpg'>&quot;);">[Gold
                                    Coins]</a></li>
                            <!--<li><b>ขั้นตอนที่ 3:</b>&nbsp;&nbsp;เข้าสู่หน้าล็อบบี้เกมส์ตกปลา</li>
                <li><b>ขั้นตอนที่ 4:</b>&nbsp;&nbsp;เปลี่ยน [金币] เป็น <a href="javascript:showMessagev2(&quot;<img src='/_static/menu/img/fishing_step2.jpg'>&quot;);">[游戏币]</a></li>-->

                        </ul>
                        <div class="center">
                            <p>
                                หมายเหตุ: 21 กรกฎาคม 2016 นี้เป็นต้นไป อัตราแลกเปลี่ยน <br>RMB 1 = 1000 Gold Coins
                            </p>
                            <p>
                                <a href="https://dl.gp2cache.net/fishing/W88FishingEN.exe" rel="nofollow"
                                    target="_blank" class="button big">ดาวน์โหลดทันที</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div id="nuovo" class="download_modal modal hide fade left background-grey" tabindex="-1"
                style="overflow: hidden;">
                <div class="modal-body">
                    <a href="javascript:void(0);" data-dismiss="modal" aria-hidden="true">
                        <img style="position: absolute; top: 0; right: 0; z-index: 2;" src="_static/img/blank.png"
                            data-src="_static/promotions/img/close.png">
                    </a>
                    <div class="center logo">
                        <i class="sprite_logo"></i>
                    </div>
                    <div class="palazzo_message">
                        <div class="center">
                            <p>สามารถเดิมพัน "นูโอโว้ (PS), (MRS), (GNS) & (BO)" ได้ในกระเป๋าเดิมพันเดียวกันกับ
                                "คลับบราวาโด้", "คลับอพอลโล", "คลับดิวิโน่", "คลับเกลลาโด้" และ "คลับแมสซิโม"</p>
                        </div>
                    </div>
                    <div class="clear" style="margin: 8px 0 0;">
                        <input type="checkbox" id="nuovo_msg_chk" style="margin: 0;">&nbsp;<label
                            for="nuovo_msg_chk">ไม่แสดงอีกครั้ง</label>
                    </div>
                </div>
            </div>

            <div id="home_popup" class="modal hide fade left background-grey">
                <div class="modal-body">
                    <a href="javascript:void(0);" data-dismiss="modal" aria-hidden="true">
                        <img style="position: absolute; top: 0; right: 0; z-index: 2;" src="_static/img/blank.png"
                            data-src="_static/promotions/img/close.png">
                    </a>
                    <div class="center">
                        <img src="_static/img/blank.png" data-src="_static/home/popup/img/w88lite-pop-up-banner-th.jpg">
                    </div>
                    <div class="palazzo_message">
                        <div style="text-align:center;padding: 20px 0 0 0;">
                            <div style="display:inline-block">
                                <img src="_static/img/blank.png"
                                    data-src="_static/mobile/img/v2/W88Lite-Android-th.png">
                            </div>
                            <div style="display:inline-block;vertical-align: middle;padding: 0 0 0 20px;">
                                <div class="title blue" style="padding: 0 0 10px 0;">
                                    แอพพลิเคชั่นใหม่ W88 LITE
                                </div>
                                <div class="detail" style="text-align:left;">
                                    ใช้งานง่าย รวดเร็ว ปลอดภัย
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="center" style="padding:0 0 18px 0;">
                            <a href="https://casino.gp2fun.com/liteapp/download.html?op=W88&amp;lang=th-th"
                                target="_blank" style="margin: 10px 10px 10px 0;" class="big button center"><img
                                    src="_static/img/blank.png" data-src="/_static/casino/img/android_w.png"
                                    style="vertical-align: top;">&nbsp;ดาว์นโหลด ANDROID</a>
                        </div>
                    </div>

                    <div class="clear" style="margin: 10px;">
                        <input type="checkbox" id="home_popup_chk" style="margin: 0;">&nbsp;<label
                            for="home_popup_chk">ไม่แสดงอีกครั้ง</label>
                    </div>
                </div>
            </div>

            <div id="esports_asia_popup" class="modal hide fade left background-grey modal-esports">
                <div class="modal-body">
                    <div class="palazzo_message" style="padding: 0px">
                        <table cellpadding="10" cellspacing="0"
                            style="background-image: url('_static/home/btm/img/Dividing-line-grey.png');background-position: -42px 5px;background-size: 167% 154%;">
                            <tr>
                                <td>
                                    <div class="title detail">
                                        เวอร์ชั่นใหม่
                                    </div>
                                    <div class="center">
                                        <br>
                                        <img src="_static/img/blank.png"
                                            data-src="_static/sports/img/popup/eSports-Asian-V2-New-TH.png">
                                        <br>
                                        <br>
                                        <a href="#" style="margin: 10px 10px 10px 0;"
                                            class="big button center esports-modal-btn esports-v2-asia">&nbsp;เล่นทันที</a>
                                    </div>
                                </td>
                                <td>
                                    <div class="title detail">
                                        เวอร์ชั่นเดิม
                                    </div>
                                    <div class="center">
                                        <br>
                                        <img src="_static/img/blank.png"
                                            data-src="_static/sports/img/popup/eSports-Asian-V1.png">
                                        <br>
                                        <br>
                                        <a href="#" style="margin: 10px 10px 10px 0;"
                                            class="big button center esports-modal-btn esports-v1-asia">&nbsp;เล่นทันที</a>
                                    </div>
                                </td>
                            </tr>
                        </table>
                        <div class="clear" style="margin: 10px;">
                            <input type="checkbox" id="esports_asia_popup_chk" style="margin: 0;">&nbsp;<label
                                for="esports_asia_popup_chk">จดจำการเลือกของฉัน</label>
                        </div>
                    </div>
                </div>
            </div>
            <div id="esports_euro_popup" class="modal hide fade left background-grey modal-esports">
                <div class="modal-body">
                    <div class="palazzo_message" style="padding: 0px">
                        <table cellpadding="10" cellspacing="0"
                            style="background-image: url('_static/home/btm/img/Dividing-line-grey.png');background-position: -42px 5px;background-size: 167% 154%;">
                            <tr>
                                <td>
                                    <div class="title detail">
                                        เวอร์ชั่นใหม่
                                    </div>
                                    <div class="center">
                                        <br>
                                        <img src="_static/img/blank.png"
                                            data-src="_static/sports/img/popup/eSports-European-V2-New-TH.png">
                                        <br>
                                        <br>
                                        <a href="#" style="margin: 10px 10px 10px 0;"
                                            class="big button center esports-modal-btn esports-v2-euro">&nbsp;เล่นทันที</a>
                                    </div>
                                </td>
                                <td>
                                    <div class="title detail">
                                        เวอร์ชั่นเดิม
                                    </div>
                                    <div class="center">
                                        <br>
                                        <img src="_static/img/blank.png"
                                            data-src="_static/sports/img/popup/eSports-European-V1.png">
                                        <br>
                                        <br>
                                        <a href="#" style="margin: 10px 10px 10px 0;"
                                            class="big button center esports-modal-btn esports-v1-euro">&nbsp;เล่นทันที</a>
                                    </div>
                                </td>
                            </tr>
                        </table>
                        <div class="clear" style="margin: 10px;">
                            <input type="checkbox" id="esports_euro_popup_chk" style="margin: 0;">&nbsp;<label
                                for="esports_euro_popup_chk">จดจำการเลือกของฉัน</label>
                        </div>
                    </div>
                </div>
            </div>

            <div id="pushy" class="modal hide fade left background-grey" tabindex="-1" style="overflow: hidden;">
                <div class="modal-body">
                    <a class="float_right" data-dismiss="modal" aria-hidden="true">
                        <img style="position: absolute; top: 0; right: 0; z-index: 2;" src="_static/img/blank.png"
                            data-src="_static/promotions/img/close.png">
                    </a>
                    <div class="center logo">
                        <i class="sprite_logo"></i>
                    </div>
                    <div class="palazzo_message pushy-content">
                        <!--<div class="pushy-logo">
            </div>-->
                        <div class="pushy-message">
                            <br>
                            <div class="title blue uppercase">กดติดตามการแจ้งเตือนของW88</div>
                            <br>
                            <p>อัพเดทข่าวสาร & โปรโมชั่นของ W88 ได้ก่อนใคร</p>
                            <br>
                            <p class="pushy-sub">กดติดตาม เพื่อรับข่าวสาร & โปรโมชั่นพิเศษของ W88 ทันที</p>
                            <br>
                            <div class="pushy-button center">
                                <a href="#" target="_blank" class="button center pushy-subscribe">ติดตาม</a>
                                <a href="#" target="_blank" class="button_grey center pushy-cancel">ยกเลิก</a>
                            </div>
                            <br>
                        </div>
                    </div>
                </div>
            </div>

            <div id="bravado" class="modal hide fade left background-grey" tabindex="-1" style="overflow: hidden;">
                <div class="modal-body">
                    <a class="float_right" data-dismiss="modal" aria-hidden="true">
                        <img style="position: absolute; top: 0; right: 0; z-index: 2;" src="_static/img/blank.png"
                            data-src="_static/promotions/img/close.png">
                    </a>
                    <div class="center logo">
                        <i class="sprite_logo"></i>
                    </div>
                    <div class="palazzo_message">
                        <div class="title blue">3 ขั้นตอนง่ายๆในการเล่นคลับบราวาโด้เวอร์ชั่นดาวน์โหลด</div>
                        <ul>
                            <li><b>ขั้นตอนที่ 1:</b>&nbsp;&nbsp;คลิกที่ปุ่มดาวน์โหลดด้านล่าง</li>
                            <li><b>ขั้นตอนที่ 2:</b>&nbsp;&nbsp;ทำการติดตั้งโปรแกรมเกมส์ด้วยการคลิก RUN หรือ Save
                                เพื่อเก็บข้อมูลที่ Hard drive ของคุณ</li>
                            <li><b>ขั้นตอนที่ 3:</b>&nbsp;&nbsp;เข้าสู่ระบบด้วยชื่อผู้ใช้และรหัสผ่านของคุณ</li>
                        </ul>
                        <br>
                        <div class="center">
                            <a href="https://rslots.gp2play.com/_downloads/releases/w88/win32-ia32-prod-v1.0.0/W88Slots-Setup-1.0.0-ia32.exe"
                                class="button big">ดาวน์โหลดทันที</a>
                        </div>
                    </div>
                    <div class="clear" style="margin: 8px 0 0;">
                        <input type="checkbox" id="bravado_msg_chk" style="margin:0;">&nbsp;<label
                            for="bravado_msg_chk">ไม่แสดงอีกครั้ง</label>
                    </div>
                </div>
            </div>

            <div id="slotLobby" class="modal hide fade left background-grey" tabindex="-1" style="overflow: hidden;">
                <div class="modal-body">
                    <a class="float_right" data-dismiss="modal" aria-hidden="true">
                        <img style="position: absolute; top: 0; right: 0; z-index: 2;" src="_static/img/blank.png"
                            data-src="_static/promotions/img/close.png">
                    </a>
                    <a href="index.html">
                        <img src="_static/img/blank.png" data-src="_static/games/popup/img/Popup-DailySlotPromo-CN.jpg">
                    </a>
                </div>
            </div>

            <div id="modalFrame2" class="modal hide fade left background-grey" tabindex="-1">
                <a class="float_right" href="javascript:void(0);" data-dismiss="modal" aria-hidden="true"
                    style="position: absolute; right: 0; top: 0; z-index: 2;">
                    <img src="_static/img/blank.png" data-src="_static/promotions/img/close.png">
                </a>
                <div class="modal-body" style="padding: 0; margin: 0;">
                    <p class="message" style="padding: 0; margin: 0;">
                </div>
            </div>

            <script>
                function slotsMenuInit() {
                    var udata = utility.getFromStorage(true, "udata");
                    var palazzo_download = ($.cookie("palazzo_download")) ? parseInt($.cookie("palazzo_download")) : 0;

                    if (!palazzo_download &&
                        (location.pathname.toLowerCase().indexOf("/slots/palazzo") >= 0 ||
                            location.pathname.toLowerCase().indexOf("/slots/playtech") >= 0 ||
                            (!((udata.currency && udata.currency.length && udata.currency.toLowerCase() === 'rmb' && udata.lang === 'zh-cn')
                                || (!udata.currency && udata.lang === 'zh-cn')) &&
                                (location.pathname.toLowerCase() == "/slots/" ||
                                    location.pathname.toLowerCase() == "/slots/default.aspx")))) {

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

                    if (((udata.currency && udata.currency.length && udata.currency.toLowerCase() === 'rmb' && udata.lang === 'zh-cn')
                        || (!udata.currency && udata.lang === 'zh-cn')) && (location.pathname.toLowerCase() == "/slots/" || location.pathname.toLowerCase() == "/slots/default.aspx"))
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
                            location.href = "Games/Fishing/index.html";

                            return false;
                        }
                    });

                    $('#fishing_download, #poseidonfishing_download, #modalFrame2,.modal').on('shown.bs.modal',
                        function () {
                            img_unveil();
                            $('#fishing_download img').on('load',
                                function () {
                                    $(window).trigger("resize");
                                });
                        });
                };

                window.showMessagev2 = function (message) {
                    $("#modalFrame2").find("p.message").html(message);
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