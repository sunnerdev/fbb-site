<style>
        .headerLogo .sprite_logo,
        .headerLogo .sprite_logo.zh-cn,
        .headerContent .sprite_logo,
        .headerContent .sprite_logo.zh-cn {
            background: url('images/logo/<?php echo $SiteName; ?>/logo.png') 0 0 no-repeat;
            width: 500px;
            height: 80px;
            position: absolute;
            margin: 0;
        }

        /*.headerLogo .sprite_logo.th-th {
        background: url('/_static/_event/2018Songkran/W88-Logo-Songkran2019-gray-TH.png') 0 0 no-repeat;
        margin-left: -56px;
    }*/
    </style>

<div class="header_background">
        <div class="clear"></div>
        <div class="headerContent">
            <div class="headerLogo float">
                <a href="./" title="หน้าหลัก">
                    <i class="sprite_logo th-th"></i></a>
            </div>
            <div class="headerMember">
                <div class="miscPanel right">
                    <a href="javascript:load_livechat();" class="uppercase">ห้องสนทนาสด <i class="sprite_live_help"
                            title="ห้องสนทนาสด"></i></a>
                    <i class="sprite_content_divider"></i>
                    <a href="#" id="notification" title="" data-toggle="popover" data-class="notification"
                        data-placement="bottom" data-html="true" data-title="notification" data-content="&lt;div style=&#39;display:none;&#39;&gt;&lt;/div&gt;&lt;hr style=&#39;display:none;&#39; /&gt;&lt;a class="openannouncement" href=_javascript_openAnnouncemnet()%3b__%e0%b8%94%e0%b8%b9%e0%b8%97%e0%b8%b1%e0%b9%89%e0%b8%87%e0%b8%ab%e0%b8%a1%e0%b8%94_/a__.html>
                    <i class=" sprite_announcement" title="การแจ้งเตือน"></i></a>
                    <i class="sprite_content_divider"></i>
                    <a rel="nofollow" href="http://<?php echo $headers['Host']; ?>/" class="uppercase"><i class="sprite_mobile"></i></a>
                    <i class="sprite_content_divider"></i>
                    <a href="javascript:openColorlist();void(0);" class="colorOpener">
                        <i class="color_grey"></i>
                        <img src="_static/_css/img/caret.gif">
                    </a>
                    <script>
                        function push_color(code) {
                            try { _paq.push(['trackEvent', 'Theme', 'Change', code]); }
                            catch (e) { }
                        }
                    </script>
                    <ul class="colorSelector">
                        <li><a onclick="colorPicked('white','color=white');"><i class="color_white"></i></a></li>

                    </ul>
                    <i class="sprite_content_divider"></i>
                    <a class="languageOpener" href="javascript:openLanguagelist();"><i class="flag_th-th"></i><img
                            src="_static/_css/img/caret.gif"></a>
                    <ul class="languageSpecial">
                        <li><a class="lang-en-us" href="default.html?language=en-us"><i
                                    class="flag_en-us"></i><span>&nbsp;English</span></a></li>
                        <li><a class="lang-zh-cn" href="default.html?language=zh-cn"><i
                                    class="flag_zh-cn"></i><span>&nbsp;简体中文</span></a></li>
                        <li><a class="lang-id-id" href="default.html?language=id-id"><i
                                    class="flag_id-id"></i><span>&nbsp;Bhs Indonesia</span></a></li>
                        <li><a class="lang-km-kh" href="default.html?language=km-kh"><i
                                    class="flag_km-kh"></i><span>&nbsp;Khmer</span></a></li>
                        <li><a class="lang-ko-kr" href="default.html?language=ko-kr"><i
                                    class="flag_ko-kr"></i><span>&nbsp;한국어</span></a></li>
                        <li><a class="lang-vi-vn" href="default.html?language=vi-vn"><i
                                    class="flag_vi-vn"></i><span>&nbsp;Tiếng Việt</span></a></li>
                    </ul>
                    <i class="sprite_content_divider"></i>
                    <?php if($_SESSION['refresh_token']==''){?>
                        <a href="javascript:showLogin2()" id="" class="button_login center "
                                            title="เข้าสู่ระบบ">เข้าสู่ระบบ</a>

                        <a href="register" class="button_login center red_button"
                                            title="สมัครสมาชิก">สมัครสมาชิก</a>
                    <?php }else{ ?> 
                        <a href="transaction" id="" class="button_login center "
                                            title="เข้าสู่ระบบ">ฝาก</a>
                        <a href="module/logout.php" class="button_login center red_button"
                                            title="ออกจากระบบ">ออกจากระบบ</a>
                    <?php } ?>
                </div>
                <div class="clear"></div>
                <div class="infoPanel float_right">
                <div class="info right">
					<span id="date" class="dinpro">23/08/2019</span>  <span id="time" class="dinpro">15:38:07</span><span class="dinpro">&nbsp;(<span id="zone">GMT+7</span>)</span>

                <?php if($_SESSION['refresh_token']!=''){?>
					<i class="sprite_content_divider"></i>
					<a href="#" data-class="balance" data-toggle="popover" data-html="true" data-placement="bottom" data-content="&lt;iframe src=&quot;/common/balance&quot; id=&quot;balanceFrame&quot; style=&quot;border: 0; overflow: hidden; width: 300px; height: 230px;&quot; frameborder=&#39;0&#39; border=&#39;0&#39; allowtransparency=&quot;true&quot;&gt;&lt;/iframe&gt;">ยอดคงเหลือ</a>
					<i class="sprite_content_divider"></i>
					<a href="#" data-class="balance" data-toggle="popover" data-html="true" data-placement="bottom" data-content="&lt;div class=&quot;center&quot;&gt;&lt;a class=&quot;white_size_14px&quot; href=&quot;//<?php echo $headers['Host']; ?>/transaction?r=deposit&quot;&gt;ฝาก&lt;/a&gt;&lt;hr /&gt;&lt;a class=&quot;white_size_14px&quot; href=&quot;//<?php echo $headers['Host']; ?>/transaction?r=withdraw&quot;&gt;ถอน&lt;/a&gt;&lt;hr /&gt;&lt;a class=&quot;white_size_14px&quot; href=&quot;//<?php echo $headers['Host']; ?>/transaction?r=transfer&quot;&gt;ย้ายเงิน&lt;/a&gt;&lt;hr /&gt;&lt;a class=&quot;white_size_14px&quot; href=&quot;//<?php echo $headers['Host']; ?>/transaction?r=history&quot;&gt;ประวัติ&lt;/a&gt;&lt;/div&gt;">การเงิน $</a>										
					<i class="sprite_content_divider"></i>
					<a class="blue bold" href="#" data-toggle="popover" data-html="true" data-placement="bottom" data-content="
&lt;div class=&quot;center&quot;&gt;
&lt;a href=&quot;//<?php echo $headers['Host']; ?>/profile_edit&quot; class=&quot;white_size_14px&quot;&gt;
						
						ข้อมูลส่วนตัว 
&lt;/a&gt;
&lt;hr /&gt;
&lt;a href=&quot;//<?php echo $headers['Host']; ?>/profile_changepassword&quot; class=&quot;white_size_14px&quot;&gt;เปลี่ยนรหัสผ่าน&lt;/a&gt;
&lt;hr /&gt;
&lt;/div&gt;">
						<?php echo $me->username; ?>
						</a>					
					
				
                <?php } ?>
				</div>
                </div>
            </div>
        </div>
    </div>