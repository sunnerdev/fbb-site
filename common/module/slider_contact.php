<script>
            function adjust_live_chat_v2() {
                $("div.live_chat_v2").css('top', $(window).scrollTop() + $(window).height() / 2 + "px");
            }

            function adjust_live_chat_v3() {
                if ($(window).scrollTop() > 200) {
                    $("div.live_chat_v2").css('top', '25px');
                    $("div.live_chat_v2").css('position', 'fixed');
                }
                else {
                    $("div.live_chat_v2").css('top', '156px');
                    $("div.live_chat_v2").css('position', 'fixed');
                }
            }

            function close_livechat() {
                $("div.live_chat_v2").hide();
                $.cookie("livechat", 1);
            }
            $(function () {
                //var chromeFix_livechat = ($.cookie("livechat")) ? parseInt($.cookie("livechat")) : 0;
                var chromeFix_livechat = 0;
                if (chromeFix_livechat < 1) {
                    $("div.live_chat_v2").show();
                }
                if (($.browser.msie && $.browser.version == 6)) {
                    $(window).bind("scroll load", adjust_live_chat_v2);
                }
                else {
                    $(window).bind("scroll load", adjust_live_chat_v3);
                }

                var livechat_timeout;
                $("div.live_chat_v2 .slider").hover(function () {
                    $("div.live_chat_v2 .slider").animate({ right: 0 }, 500);
                    clearTimeout(livechat_timeout);
                }, function () {
                    clearTimeout(livechat_timeout);
                    livechat_timeout = setTimeout(function () {
                        $("div.live_chat_v2 .slider").animate({ right: "-150px" }, 500);
                    }, 500);
                });
            });

            $(window).load(function () {
                $("div.live_chat_v2 .no_slider").css("top", $("div.live_chat_v2 .slider").height());
            })
        </script>
        <style>
            div.live_chat_v2 {
                position: fixed;
                *position: fixed;
                right: 0px;
                top: 200px;
                z-index: 2000;
                display: none;
            }

            div.live_chat_v2 .slider {
                position: absolute;
                right: -150px;
                width: 221px;
                z-index: 2;
            }

            div.live_chat_v2 .no_slider {
                position: absolute;
                right: 0;
                width: 71px;
            }

            div.live_chat_v2 div {
                position: relative;
            }

            div.live_chat_v2 div span {
                position: absolute;
            }

            div.live_chat_v3 {
                position: fixed;
                *position: fixed;
                right: 0;
                top: 200px;
                z-index: 2001;
            }

            .noborder {
                border: none;
            }
        </style>
        <div class="live_chat_v2 clear">
            <div class="slider">
                <img src="_static/footer/livechat/img/th-thc4ca.png?1" usemap="#livechat_map" class="noborder">
                <!--<a class="move_up" href="skype:w88cs.thai" style="top: 177px; left: 114px; color: white;font-size: 12px; position: absolute;">W88CS.Thai</a>
<a class="move_up" href="skype:w88cs.thai" style="top: 151px; left: -835px; color: white;font-size: 11px; position: absolute;display:block; height:33px; width:132px;"></a>-->
                <!--<span class="move_up" style="top: 176px; left: 114px; color: white; font-size: 12px;">@W88Thailand</span>-->
                <span class="move_up" style="top: 177px; left: 114px; color: white; font-size: 11px;">@W88INFO</span>
                <span class="move_up" style="top: 214px; left: 114px; color: white; font-size: 11px;">(+44)
                    2036085161</span>
                <map name="livechat_map" class="noborder">
                    <area shape="rect" coords="79, 243, 211, 277" href="javascript:load_livechat()"
                        class="noborder login_change">

                    <area shape="rect" coords="79, 127, 211, 160" href="_secure/register.html" type="register"
                        class="noborder login_remove">
                    <area shape="rect" coords="95, 0, 200, 118" href="javascript:load_livechat()" class="noborder">
                    <area shape="rect" coords="72, 281, 218, 323"
                        href="javascript:load_account('/BankingOptions.aspx');" class="noborder login_change">
                    <area shape="rect" coords="79, 204, 211, 238" href="javascript:load_livechat('banking')"
                        class="noborder login_change">
                </map>
                <!--<img src="/_static/footer/livechat/img/th-th.png" usemap="#livechat_map" class="noborder">-->

            </div>
            <div class="no_slider">
                <!--<img src="/_static/footer/livechat/img/Floating-Chat-th-th.png" usemap="#livehelp_map" class="noborder " style="margin-top: 30px;">-->
                <!--<map name="livehelp_map" class="noborder">
	<area shape="rect" coords="0, 0, 70, 66" href="javascript:load_livechat('banking')" class="noborder">
	<area shape="rect" coords="0, 77, 70, 143" href="javascript:load_livechat()" class="noborder">
</map>-->

                <script type="text/javascript">
                    $(function () {
                        $('img.live-chat-btn-close').on('click', function (e) {
                            e.preventDefault();

                            $(this).parent().remove();
                        });
                    });
                </script>

                <style type="text/css">
                    img.live-chat-btn-close {
                        position: absolute;
                        top: 30px;
                        right: 3px;
                        cursor: pointer;
                    }

                    img.live-chat-btn-qr {
                        margin-top: 30px;
                    }

                    div.live_chat_v2 .no_slider {
                        width: 168px !important;
                    }
                </style>

                <div class="live-chat-btn">
                    <img src="_static/footer/downloadbar/img/v2/close.png" class="live-chat-btn-close">
                    <img src="_static/footer/livechat/img/Floatingbox-th-line-info.png" usemap="#livehelp_map"
                        class="noborder live-chat-btn-qr">
                </div>


                <style>
                    #bravado_featured_slot {
                        background-image: url(_static/footer/img/bg-black.png);
                        background-repeat: no-repeat;
                        padding: 12px 12px 0 24px;
                        width: 358px;
                        min-height: 223px;
                        right: 0;
                        position: fixed;
                        cursor: pointer;
                        margin-top: 30px;
                        color: #808080;
                    }

                    #bravado_featured_slot.white {
                        background-image: url(_static/footer/img/bg-white.png);
                    }

                    
                </style>
                <script>
                    $(function () {
                        var bravado_featured = ($.cookie("bravado_featured")) ? parseInt($.cookie("bravado_featured")) : 0;
                        if (!bravado_featured) {
                            setTimeout(function () {
                                toggle_bravado_featured();
                            }, 10000);
                        }
                    });

                    toggle_bravado_featured = function () {
                        var bravado_featured = ($.cookie("bravado_featured")) ? parseInt($.cookie("bravado_featured")) : 0;
                        if (!$('#bravado_featured_slot').is(":hidden") && !bravado_featured) {
                            setTimeout(function () {
                                toggle_bravado_featured();
                            }, 30000);
                        }
                        else {
                            setTimeout(function () {
                                if (!$('#bravado_featured_slot').is(":hidden")) {
                                    toggle_bravado_featured();
                                }
                            }, 10000);
                        }
                        $('#bravado_featured_slot').toggle('slide', { direction: 'right' }, 'slow');
                    }

                    add_bravado_featured_cookie = function () {
                        $.cookie("bravado_featured", "2018/06/04", { domain: ("." + location.hostname.split('.').slice(-2).join('.')), path: '/', expires: 1 });
                        $('#bravado_featured_slot').hide();
                    }
                </script>
                <div id="bravado_featured_slot" class="hide">
                    <a href="javascript:void(0);" onclick="toggle_bravado_featured();add_bravado_featured_cookie()">
                        <img style="position: absolute; top: 0; right: 0; z-index: 2; /*margin-top: -5px; margin-right: -5px; width: 40px; */"
                            src="_static/promotions/img/close.png">
                    </a>
                    <table>
                        <tbody>
                            <tr>
                                <td colspan="3" class="white_size_24px blue dinpro bold"
                                    style="font-size: 20px; line-height: normal;">FEATURED SLOTS</td>
                            </tr>
                            <tr>
                                <td colspan="3" style="height: 8px;"></td>
                            </tr>
                            <tr
                                onclick="load_bravado_link('captainrabbit_alt', 'real', '', 'sidebar'); add_bravado_featured_cookie();">
                                <td style="width: 133px;">
                                    <div style="width: 133px; height: 133px; overflow: hidden;">
                                        <img src="_static/games/bravado/thumbnail/w88-slots-Captain-Rabbit.jpg"
                                            style="margin-top: -37px;">
                                    </div>
                                </td>
                                <td>&nbsp;</td>
                                <td class="dinpro" style="font-size: 16px;">
                                    <div class="white_size_18px uppercase">Captain Rabbit</div>
                                    ชนะเงินรางวัลมากสุดถึง 3เท่ากับ Free Spins และเงินรางวัลโบนัสในกล่องลึกลับ!
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="hide" id="bravado_free_round">

                </div>
                <script>
                    showMessagev3 = function (message) {
                        $("#modalFrame3").find("p.message").html(message);
                        $("#modalFrame3").modal("show");
                        $('#modalFrame3 img').on('load', function () {
                            $(window).trigger("resize");
                        });
                    }

                    $(function () {
                        if ($.cookie("bravado_free_round")) {
                            $(".free_round_play").attr("href", "javascript:load_bravado_link('" + $.cookie("bravado_free_round") + "','real');$('#modalFrame3').modal('hide');void(0);");
                            showMessagev3($("#bravado_free_round").html());
                            $.removeCookie('bravado_free_round', { path: '/' });
                        }
                    });
                </script>
                <style>
                    #modalFrame3 {
                        width: 600px;
                        margin-left: -300px;
                    }
                </style>
                <div id="modalFrame3" class="modal hide fade left background-grey" tabindex="-1">
                    <a class="float_right" href="javascript:void(0);" data-dismiss="modal" aria-hidden="true"
                        style="position: absolute; right: 0; top: 0; z-index: 2;">
                        <img src="_static/promotions/img/close.png"></a>
                    <div class="modal-body" style="padding: 0; margin: 0;">
                        <p class="message" style="padding: 0; margin: 0;">
                    </div>
                </div>

            </div>
        </div>