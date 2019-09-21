<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="content-language" content="kh,th,zh">
    <meta charset="UTF-8">
    <meta name="google-site-verification" content="3EtGwmEfdo_19Qcvcy-GPxwkYzbiMDGiEbX6-YGHcsE">
    <link rel="shortcut icon" href="_static/_css/img/favicon.ico" type="image/x-icon">
    <link href="_static/_css/custom-theme/jquery-ui.min.css" rel="stylesheet">
    <link href="_static/_css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!--[if IE 7]>
<link href="/_static/_css/bootstrap/bootstrap-ie7.css" rel="stylesheet" />
<![endif]-->
    <!--[if IE 6]>
<link href="/_static/_css/bootstrap/bootstrap-ie6.css" rel="stylesheet" />
<![endif]-->
    <link href="_static/_css/Main.css" rel="stylesheet">
    <link href="_static/_css/spritee28b.css?0.0.565" rel="stylesheet">
    <link href="_static/_css/Main.th-thf6ac.css?20190116" rel="stylesheet">
    <link href="_static/_css/jquery.linkselect/jquery.linkselect.style.select.css" rel="stylesheet">
    <!-- CSS for New Custom Select Box -->
    <link rel="stylesheet" href="_static/_css/custom.selectbox.css">

    <!--[if IE 6]>
<link href="/_static/_css/IE6.css" rel="stylesheet" />
<script src="/_static/_css/ie6png/iepngfix_tilebg.js"></script>
<script src="/_static/_script/jquery.ie6MultipleClass.min.js"></script>
<![endif]-->
    <script src="_static/_script/combined.js"></script>
    <script src="_static/_script/jquery.linkselect.min.js"></script>
    <script src="_static/_script/jquery.carouFredSel.js"></script>
    <!-- JS for New Custom Select Box -->
    <script type="text/javascript" src="_static/js/custom.selectbox.js"></script>
    <script src="_static/_script/jquery.idle.js"></script>
    <script src="_static/_script/main.js?"></script>

    <script>

    var access_token = sessionStorage.getItem('access_token'); 
    var expires_in = sessionStorage.getItem('expires_in'); 
    var refresh_token = sessionStorage.getItem('refresh_token'); 

    console.log(sessionStorage,access_token,refresh_token,expires_in);

    function logout(){
        sessionStorage.clear();
        location.href='index.php';
    }

        $.extend(jQuery.validator.messages, {
            required: "จำเป็นต้องกรอกข้อมูลส่วนนี้",
            remote: "กรุณากรอกรหัส หรือรีเฟรชเพื่อขอรหัสใหม่",
            email: "กรุณากรอกอีเมล์ที่ใช้งานได้",
            url: "Please enter a valid URL.",
            date: "กรุณากรอกวันให้ถูกต้อง",
            dateISO: "Please enter a valid date (ISO).",
            number: "กรุณากรอกหมายเลขที่ถูกต้อง",
            digits: "กรุณากรอกเฉพาะตัวเลข",
            creditcard: "Please enter a valid credit card number.",
            equalTo: "กรุณากรอกข้อมูลเดิมอีกครั้ง",
            accept: "Please enter a value with a valid extension.",
            maxlength: jQuery.validator.format("กรอกตัวอักษรได้ไม่เกิน {0} ตัวอักษร"),
            minlength: jQuery.validator.format("กรอกตัวอักษรอย่างน้อย {0} ตัวอักษร"),
            rangelength: jQuery.validator.format("กรุณากรอกข้อมูลที่มีความยาวระหว่าง{0} และ {1}"),
            range: jQuery.validator.format("กรุณากรอกข้อมูลระหว่าง{0} และ {1}"),
            max: jQuery.validator.format("กรุณากรอกข้อมูลน้อยกว่าหรือเท่ากับ{0}"),
            min: jQuery.validator.format("กรุณากรอกข้อมูลมากกว่าหรือเท่ากับ{0}")
        });

        $.validator.addMethod("alpha_numeric", function (value, element) {
            return this.optional(element) || /^[a-z0-9]+$/i.test(value);
        }, "ชื่อผู้ใช้งานจะต้องประกอบไปด้วยตัวอักษร, ตัวเลข");

        $.validator.addMethod("not_watermark", function (value, element) {
            return ($(element).attr("data-watermark")) ? value != $(element).attr("data-watermark") : true;
        }, jQuery.validator.messages.required);
    </script>
    <script>
        loginStatus_bool = false;
        vip_bool = false;
        lang = "th-th";
        lottery_domain = "https://lottery.w88bkk.com/";
        info_domain = "https://info.w88bkk.com/";
        domain_www = "index.html";

        var isWrapper = false;
    </script>
    <script>
        $(function () {
            try {

                $("select.to-custom-select").toCustomSelectBox();

                if (!($.browser.msie && $.browser.version == 6)) {
                    $("select:not(.to-custom-select)").addClass("selectbox");
                    $("select.selectbox").linkselect({ style: "selectbox", fixedWidth: true });
                }
            } catch (e) { }
        });
    </script>


    <style>
        a.button.disable {
            cursor: default;
        }

        a.button.disable:hover {
            background: #2A8FBD;
        }

        .home_popup {
            position: absolute;
            top: 123px;
            left: 50%;
            margin-left: -480px;
            z-index: 50;
        }

        .carousel_main_wrapper {
            width: 100%;
            min-width: 960px;
            height: 500px;
            position: relative;
            left: 0;
            background-position: top center;
            background-repeat: no-repeat;
            background-color: #000;
        }

        .carousel_main_wrapper .carousel_main div.slide {
            height: 500px;
            float: left;
            position: relative;
            background-position: top center;
            background-repeat: no-repeat;
            background-color: #000;
        }

        .carousel_main div.slide div.slide_content {
            position: relative;
            width: 100%;
            height: 500px;
            bottom: 0;
            margin: 0 auto;
            
            text-align: center;
        }

        .carousel_main div.slide div.slide_content div.textarea {
            position: absolute;
            width: 960px;
            left: 50%;
            margin-left: -480px;
            bottom: 50px;
            *left: 0;
            text-align: center;
        }

        .carousel_main_wrapper div.pager {
            position: absolute;
            bottom: 10px;
            width: 100%;
            text-align: center;
            z-index: 20;
            zoom: 1;
        }

        .carousel_main_wrapper div.pager a.thumb {
            height: 16px;
            width: 16px;
            display: inline-block;
            margin: 0px 10px;
        }

        .carousel_main_wrapper .white_size_50px {
            font-size: 55px;
        }

        .carousel_main_wrapper .white_size_24px {
            font-size: 35px;
        }

        body.white .carousel_main .white_size_50px,
        body.white .carousel_main .white_size_24px,
        body.white .carousel_main .white_size_18px,
        body.white .carousel_main .white_size_16px,
        body.white .carousel_main .white_size_14px,
        body.white .carousel_main .white_size_12px {

            color: #fff;
        }

        .main_arrow_left_off,
        .main_arrow_left_on,
        .main_arrow_right_off,
        .main_arrow_right_on {
            background-color: #000;
            position: absolute;
            top: 50%;
            border: 20px solid #000;
            margin-top: -15px;
            z-index: 2;
            ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=30)";
            filter: alpha(opacity=30);
            -moz-opacity: 0.30;
            -khtml-opacity: 0.30;
            opacity: 0.30;
        }

        .main_arrow_left_off,
        .main_arrow_left_on {
            left: 0px;
        }

        .main_arrow_right_off,
        .main_arrow_right_on {
            right: 0px;
        }

        .main_arrow_left_on,
        .main_arrow_right_on {
            ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=70)";
            filter: alpha(opacity=70);
            -moz-opacity: 0.70;
            -khtml-opacity: 0.70;
            opacity: 0.70;
        }

        .btm_product>tbody>tr>td {
            width: 320px;
            height: 280px;
            vertical-align: top;
            
        }

        .btm_product .title {

            line-height: 1em;
            margin: 20px 0 9px 21px;
            color: #dab867;
        }

        .btm_product .content {
            padding: 0px 20px;
        }

        .btm_product .content .white_size_24px {
            line-height: 18px;
        }

        .btm_product .progress_bar {
            margin: 5px 0;
            display: inline-block;
            width: 250px;
            height: 12px;
            background-image: url(_static/home/btm/img/Service-Advantages-bar-grey.png);
            backgroud-repeat: no-repeart;
        }

        .btm_product .progress_bar_2 {
            display: inline-block;
            width: 0;
            height: 12px;
            background-image: url(_static/home/btm/img/Service-Advantages-bar-grey.png);
            background-position: 0 -14px;
            backgroud-repeat: no-repeart;
        }

        .btm_product #product_advantage_carousel,
        .btm_product #sports_carousel {
            position: relative;
            padding: 10px 0 0 0;
            padding-left: 10px;
            cursor: pointer;
        }

        .btm_product #product_advantage_carousel .home_btm_carousel_item,
        .btm_product #sports_carousel .home_btm_carousel_item {
            height: 216px;
            float: left;
            position: relative;
            overflow: hidden;
        }

        .btm_product #product_advantage_carousel .home_btm_carousel_item .clear {
            margin-bottom: 18px;
        }

        .btm_product .white_size_12px {
            color: #808080;
            line-height: 1em;
            padding-top: 5px;
        }

        .btm_product #product_advantage_carousel .sub_carousel_page,
        .btm_product #sports_carousel .sub_carousel_page {
            bottom: 15px !important;
        }

        .btm_product #contact_carousel .home_btm_carousel_item {
            height: 224px;
            float: left;
            position: relative;
        }

        .btm_product #sports_carousel .sub_carousel_page {
            bottom: -1px !important;
        }

        .btm_product #sports_carousel .home_btm_carousel_item .title {
            position: relative;
            top: -10px;
        }

        .btm_product .home_btm_carousel .home_btm_carousel_item .white_size_12px {
            color: #808080;
        }

        body.grey .btm_product .white_size_14px,
        body.grey .btm_product .white_size_18px,
        body.white .btm_product .white_size_14px,
        body.white .btm_product .white_size_18px {
            line-height: 1em;
        }

        body.grey .btm_product a.white_size_14px,
        body.grey .btm_product a.white_size_18px {
            color: #fff;
        }

        body.white .btm_product a.white_size_14px,
        body.white .btm_product a.white_size_18px {
            color: #1f1f1f;
        }

        .btm_product a.white_size_14p:hover,
        .btm_product a.white_size_18px:hover {
            color: #38c0ff !important;
        }

        .btm_product a.margin_bottom_38px {
            display: block;
            margin-bottom: 38px;
            min-width: 100px;
        }



        a.paging {
            height: 10px;
            width: 10px;
            padding: 0;
            margin: 5px;
            background: url(_static/home/btm/img/dot.png) no-repeat;
            background-position: -11px 0;

        }

        a.paging.selected {
            background: url(_static/home/btm/img/dot.png) no-repeat;
            background-position: 0 0;
        }


        .btm_product #hotmatch {
            position: relative;
            
        }

        .btm_product #hotmatch .home_btm_carousel_item {
            height: 216px;
            float: left;
            position: relative;
            overflow: hidden;
            width: 100%;
        }

        .btm_product #hotmatch .home_btm_carousel_item .clear {
            margin-bottom: 18px;
        }

        .btm_product #hotmatch .sub_carousel_page {
            bottom: 15px !important;
        }

        .btm_product #promo-home-carousel {
            position: relative;
            
        }

        .btm_product #promo-home-carousel .home_btm_carousel_item {
            height: 216px;
            float: left;
            position: relative;
            overflow: hidden;
            width: 100%;
        }

        .btm_product #promo-home-carousel .home_btm_carousel_item .clear {
            margin-bottom: 18px;
        }

        .btm_product #promo-home-carousel .sub_carousel_page {
            bottom: 15px !important;
        }

        .w100 {
            width: 100%;
        }

        #tblHotFooterCont {
            background-color: #303030;
        }

        body.white #tblHotFooterCont {
            background-color: #eee;
        }

        #sports_carousel img {
            height: 48px;
        }

        #sports_carousel .home_btm_carousel_item>table {
            padding: 0;
            margin: 0;
        }
    </style>
    <script>
    
   

        function numberWithCommas(x) {
            var parts = x.toString().split(".");
            parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            return parts.join(".");
        }

        $(function () {
            //get function querystring from W88Info
            var urlFunctionToExecute = getParameterByName2("function", window.location.href);

            //url has function to execute from W88Info
            if (urlFunctionToExecute && urlFunctionToExecute.trim().length > 0) {
                setTimeout(function () {
                    eval(urlFunctionToExecute);
                },
                    100);
                return;
            };

            if ($("#progressive_jackpot").length > 0) {
                $.ajax({
                    type: "GET",
                    url: "/Games/Progressive/Default.aspx/get_jackpot_list_v2",
                    dataType: "json",
                    contentType: "application/json",
                    success: function (msg) {
                        $(".progressBar").hide();
                        var jsonGroup = $.parseJSON(msg.d);
                        var btn_play, btn_try;
                        for (var i = 0; i < 1; i++) {
                            if (jsonGroup[i].trial) {
                                btn_try = jsonGroup[i].trial["@label"];
                            }
                            if (jsonGroup[i].play) {
                                if (parseFloat(jsonGroup[i].play["@value"]) == 0) {
                                    $("#progressive_jackpot").closest("a").remove();
                                }
                                btn_play = jsonGroup[i].play["@label"];
                                $("#progressive_jackpot").attr("data-cur", jsonGroup[i].play["@currency"]);
                                $("#progressive_jackpot").attr("data-value", jsonGroup[i].play["@value"]);

                                var curr = $("#progressive_jackpot").attr("data-cur") === 'USD' ? '$' : $("#progressive_jackpot").attr("data-cur");

                                var jackpot_increase_timer = setInterval(function () {
                                    $("#progressive_jackpot").attr("data-value", parseFloat($("#progressive_jackpot").attr("data-value")) + Math.random() / 10);
                                    $("#progressive_jackpot").html(curr + " " + numberWithCommas(parseFloat($("#progressive_jackpot").attr("data-value")).toFixed(2)));
                                }, 400);
                            }
                        }
                    }
                });
            }

            if ("")
                showMessagev2($('<img />', { src: "" }));

            //$.ajax({
            //	type: "GET",
            //	url: "/Default.aspx/GetAnnouncement",
            //	dataType: "json",
            //	contentType: 'application/json',
            //	success: function (response) {
            //		if (!response || (response && !response.d))
            //			return;

            //		showMessagev2($('<img />', { src: response.d.Payload.ImagePath }));
            //	}
            //});

            if (("False" || '').toLowerCase() === 'true') {
                $('.btm_product tr:nth-child(1) > td:nth-child(3)').empty();
                $('.btm_product tr:nth-child(2) > td:nth-child(2)').empty()
                    .append($('.btm_product tr:nth-child(2) > td:nth-child(3)').html());
                $('.btm_product tr:nth-child(2) > td:nth-child(3)').empty();
            }
        });
    </script>
    <script>
        $(function () {
            if (false && $.cookie("language" === "th-th")) {
                getHotMatchesByLanguage(function (d) {
                    if (d && d.length > 0) {
                        //d.push({
                        //    "gameId": "14235137",
                        //    "leagueId": "156662",
                        //    "awayTeam": "France",
                        //    "homeTeam": "Andorra",
                        //    "gameDate": "06/12/2019 19:55:00",
                        //    "bets": [
                        //        {
                        //            "lineName": "Home",
                        //            "odds": "56.25"
                        //        },
                        //        {
                        //            "lineName": "Draw",
                        //            "odds": "21.25"
                        //        },
                        //        {
                        //            "lineName": "Away",
                        //            "odds": "1.01"
                        //        }
                        //    ]
                        //});
                        $.each(d, function (index, value) {
                            var dvParent = $('<div />', { "class": "home_btm_carousel_item w100" });
                            var tblItem = $('#tblHotMatchTemp').clone().prop('id', '#tblHotMatch' + index).removeClass('hide');
                            tblItem.appendTo(dvParent);

                            dvParent.appendTo($('#dvtblHotMatchCont .home_btm_carousel'));

                            var bets = value.bets;
                            var homeOdds = bets.filter(function (a) { return a.lineName === "Home" });
                            var awayOdds = bets.filter(function (a) { return a.lineName === "Away" });
                            var drawOdds = bets.filter(function (a) { return a.lineName === "Draw" });

                            dvParent.find(' #spnHome').text(value.homeTeam);
                            dvParent.find('#spnAway').text(value.awayTeam);
                            dvParent.find('#aHomeOdds').text(homeOdds[0].odds);
                            dvParent.find('#aAwayOdds').text(awayOdds[0].odds);
                            var tdDates = dvParent.find('#trDateVal td');
                            var date = new Date(value.gameDate);
                            $(tdDates[0]).text(date.getDate());
                            $(tdDates[1]).text(date.getHours());
                            $(tdDates[2]).text(date.getMinutes());
                        });

                        $('#tdHotmatchCont').replaceWith($('#dvtblHotMatchCont'));
                        $('#dvtblHotMatchCont').removeClass('hide');

                        if (d.length > 1) {
                            $('#sports_carousel .home_btm_carousel').carouFredSel({
                                responsive: true,
                                items: {
                                    visible: 1,
                                    height: 223
                                },
                                scroll: {
                                    duration: 800,
                                    timeoutDuration: 5000,
                                    fx: "slide"
                                },
                                auto: {
                                    play: true
                                },
                                pagination: {
                                    container: '#sports_carousel .sub_carousel_page',
                                    anchorBuilder: function (nr) {
                                        return '<a href="#" class="paging"></a>';
                                    }
                                }
                            });
                        };
                        //bind click to redirect to eSports Asian
                        $('#sports_carousel .home_btm_carousel_item > table').off('click').on('click', function (e) {
                            load_inplay();
                        });
                    };
                }
                    , function (e) { console.log(e); });
            };

            if ($('.carousel_main').length >= 1 && $('.carousel_main .slide').length > 1) {
                $('.carousel_main').carouFredSel({
                    responsive: true,
                    items: {
                        visible: 1,
                        height: 500
                    },
                    scroll: {
                        duration: 800,
                        timeoutDuration: 5000,
                        fx: "crossfade"
                    },
                    auto: {
                        play: true,
                        progress: {
                            bar: $("#pager a.selected"),
                            updater: function (percentage) {
                                if ($("#pager a:not('.selected') i:not('timer_0')").length && percentage < 4) {
                                    $("#pager a:not('.selected') i:not('timer_0')").remove();
                                    $("#pager a:not('.selected')").append($("<i>").addClass("timer_0"));
                                }
                                $("#pager a.selected").find("i").remove();
                                $("#pager a.selected").append($("<i>").addClass("timer_" + (Math.floor(percentage / 1.6129) + 1)));
                            }
                        }
                    },
                    pagination: {
                        container: '#pager',
                        anchorBuilder: function (nr) {
                            return '<a href="#" class="thumb"><i class="timer_0"></i></a>';
                        }
                    },
                    prev: '#prev1',
                    next: '#next1'
                });
            }

            if ($('.home_btm_carousel').length >= 1) {
                if ($('#product_advantage_carousel .home_btm_carousel .home_btm_carousel_item').length > 1) {
                    $('#product_advantage_carousel .home_btm_carousel').carouFredSel({
                        responsive: true,
                        items: {
                            visible: 1,
                            height: 223
                        },
                        scroll: {
                            duration: 800,
                            timeoutDuration: 5000,
                            fx: "slide"
                        },
                        auto: {
                            play: true
                        },
                        pagination: {
                            container: '#product_advantage_carousel .sub_carousel_page',
                            anchorBuilder: function (nr) {
                                return '<a href="#" class="paging"></a>';
                            }
                        }
                    });
                }

                if ($('#contact_carousel .home_btm_carousel .home_btm_carousel_item').length > 1) {
                    $('#contact_carousel .home_btm_carousel').carouFredSel({
                        responsive: true,
                        items: {
                            visible: 1,
                            height: 224
                        },
                        scroll: {
                            duration: 800,
                            timeoutDuration: 5000,
                            fx: "slide"
                        },
                        auto: {
                            play: true
                        },
                        pagination: {
                            container: '#contact_carousel .sub_carosel_page',
                            anchorBuilder: function (nr) {
                                return '<a href="#" class="paging"></a>';
                            }
                        }
                    });
                }

                if ($('#hotmatch .home_btm_carousel .home_btm_carousel_item').length > 1) {
                    $('#hotmatch .home_btm_carousel').carouFredSel({
                        responsive: true,
                        items: {
                            visible: 1,
                            height: 223
                        },
                        scroll: {
                            duration: 800,
                            timeoutDuration: 5000,
                            fx: "slide"
                        },
                        auto: {
                            play: true
                        },
                        pagination: {
                            container: '#hotmatch .sub_carousel_page',
                            anchorBuilder: function (nr) {
                                return '<a href="#" class="paging"></a>';
                            }
                        }
                    });
                }

                if ($('#promo-home-carousel .home_btm_carousel_item').length > 1) {
                    $('#promo-home-carousel .home_btm_carousel').carouFredSel({
                        responsive: true,
                        items: {
                            visible: 1,
                            height: 223
                        },
                        scroll: {
                            duration: 800,
                            timeoutDuration: 5000,
                            fx: "slide"
                        },
                        auto: {
                            play: true
                        },
                        pagination: {
                            container: '#promo-home-carousel .sub_carousel_page',
                            anchorBuilder: function (nr) {
                                return '<a href="#" class="paging"></a>';
                            }
                        }
                    });
                }

                if ($('#sports_carousel .home_btm_carousel .home_btm_carousel_item').length > 1) {
                    //$('#sports_carousel .home_btm_carousel').carouFredSel({
                    //    responsive: true,
                    //    items: {
                    //        visible: 1,
                    //        height: 223
                    //    },
                    //    scroll: {
                    //        duration: 800,
                    //        timeoutDuration: 5000,
                    //        fx: "slide"
                    //    },
                    //    auto: {
                    //        play: true
                    //    },
                    //    pagination: {
                    //        container: '#sports_carousel .sub_carousel_page',
                    //        anchorBuilder: function (nr) {
                    //            return '<a href="#" class="paging"></a>';
                    //        }
                    //    }
                    //});
                }
            }
        });

       /* $(function () {
            $(window).on("load scroll", function () {
                if (!$(".btm_product").hasClass("animated") && ($(window).scrollTop() + $(window).height() > $(".btm_product").position().top + 48)) {
                    $(".progress_bar_2").each(function () {
                        if ($(this).data("animate")) {
                            $(this).animate({
                                width: ($(this).data("animate") / 60) * 100 + "%",
                            }, 1500);
                        }
                    });

                    $("span[data-animate]").each(function (index, value) {
                        $(this).addClass("animateNumber" + index);
                        $("." + "animateNumber" + index).data("value", 0);
                        setInterval(function () {
                            if (parseInt($("." + "animateNumber" + index).data("value")) < 1500) {
                                $("." + "animateNumber" + index).data("value", parseInt($("." + "animateNumber" + index).data("value")) + 100);
                                $("." + "animateNumber" + index).text(parseInt(parseFloat($("." + "animateNumber" + index).data("value")) * parseFloat($("." + "animateNumber" + index).data("animate")) / 1500));
                            }
                        }, 100);
                    });
                    $(".btm_product").addClass("animated");
                }
            });
        });*/
    </script>

    