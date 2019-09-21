/*
 * jQuery hashchange event - v1.3 - 7/21/2010
 * http://benalman.com/projects/jquery-hashchange-plugin/
 *
 * Copyright (c) 2010 "Cowboy" Ben Alman
 * Dual licensed under the MIT and GPL licenses.
 * http://benalman.com/about/license/
 */
(function ($, e, b) { var c = "hashchange", h = document, f, g = $.event.special, i = h.documentMode, d = "on" + c in e && (i === b || i > 7); function a(j) { j = j || location.href; return "#" + j.replace(/^[^#]*#?(.*)$/, "$1") } $.fn[c] = function (j) { return j ? this.bind(c, j) : this.trigger(c) }; $.fn[c].delay = 50; g[c] = $.extend(g[c], { setup: function () { if (d) { return false } $(f.start) }, teardown: function () { if (d) { return false } $(f.stop) } }); f = (function () { var j = {}, p, m = a(), k = function (q) { return q }, l = k, o = k; j.start = function () { p || n() }; j.stop = function () { p && clearTimeout(p); p = b }; function n() { var r = a(), q = o(m); if (r !== m) { l(m = r, q); $(e).trigger(c) } else { if (q !== m) { location.href = location.href.replace(/#.*/, "") + q } } p = setTimeout(n, $.fn[c].delay) } $.browser.msie && !d && (function () { var q, r; j.start = function () { if (!q) { r = $.fn[c].src; r = r && r + a(); q = $('<iframe tabindex="-1" title="empty"/>').hide().one("load", function () { r || l(a()); n() }).attr("src", r || "javascript:0").insertAfter("body")[0].contentWindow; h.onpropertychange = function () { try { if (event.propertyName === "title") { q.document.title = h.title } } catch (s) { } } } }; j.stop = k; o = function () { return a(q.location.href) }; l = function (v, s) { var u = q.document, t = $.fn[c].domain; if (v !== s) { u.title = h.title; u.open(); t && u.write('<script>document.domain="' + t + '"<\/script>'); u.close(); q.location.hash = v } } })(); return j })() })(jQuery, this);
//jQuery.ajaxSetup({ async: true });

//stringjs
$type = String, $type.__typeName = "String", $type.__class = !0, $prototype = $type.prototype, $prototype.trim = function () { if (arguments.length !== 0) throw Error.parameterCount(); return this.replace(/^\s+|\s+$/g, "") }, $prototype.trimEnd = function () { if (arguments.length !== 0) throw Error.parameterCount(); return this.replace(/\s+$/, "") }, $prototype.trimStart = function () { if (arguments.length !== 0) throw Error.parameterCount(); return this.replace(/^\s+/, "") }, $type.format = function (t, n) { return String._toFormattedString(!1, arguments) }, $type._toFormattedString = function (t, n) { var r = "", i = n[0]; for (var s = 0; ;) { var o = i.indexOf("{", s), u = i.indexOf("}", s); if (o < 0 && u < 0) { r += i.slice(s); break } if (u > 0 && (u < o || o < 0)) { if (i.charAt(u + 1) !== "}") throw Error.argument("format", Sys.Res.stringFormatBraceMismatch); r += i.slice(s, u + 1), s = u + 2; continue } r += i.slice(s, o), s = o + 1; if (i.charAt(s) === "{") { r += "{", s++; continue } if (u < 0) throw Error.argument("format", Sys.Res.stringFormatBraceMismatch); if (u < 0) break; var a = i.substring(s, u), f = a.indexOf(":"), l = parseInt(f < 0 ? a : a.substring(0, f), 10) + 1; if (isNaN(l)) throw Error.argument("format", Sys.Res.stringFormatInvalid); var c = f < 0 ? "" : a.substring(f + 1), h = n[l]; if (typeof h == "undefined" || h === null) h = ""; h.toFormattedString ? r += h.toFormattedString(c) : t && h.localeFormat ? r += h.localeFormat(c) : h.format ? r += h.format(c) : r += h.toString(), s = u + 1 } return r };

/*
* jQuery BlockUI; v20141123
*/
(function () { "use strict"; function e(e) { function o(o, i) { var s, h, k = o == window, v = i && void 0 !== i.message ? i.message : void 0; if (i = e.extend({}, e.blockUI.defaults, i || {}), !i.ignoreIfBlocked || !e(o).data("blockUI.isBlocked")) { if (i.overlayCSS = e.extend({}, e.blockUI.defaults.overlayCSS, i.overlayCSS || {}), s = e.extend({}, e.blockUI.defaults.css, i.css || {}), i.onOverlayClick && (i.overlayCSS.cursor = "pointer"), h = e.extend({}, e.blockUI.defaults.themedCSS, i.themedCSS || {}), v = void 0 === v ? i.message : v, k && b && t(window, { fadeOut: 0 }), v && "string" != typeof v && (v.parentNode || v.jquery)) { var y = v.jquery ? v[0] : v, m = {}; e(o).data("blockUI.history", m), m.el = y, m.parent = y.parentNode, m.display = y.style.display, m.position = y.style.position, m.parent && m.parent.removeChild(y) } e(o).data("blockUI.onUnblock", i.onUnblock); var g, I, w, U, x = i.baseZ; g = r || i.forceIframe ? e('<iframe class="blockUI" style="z-index:' + x++ + ';display:none;border:none;margin:0;padding:0;position:absolute;width:100%;height:100%;top:0;left:0" src="' + i.iframeSrc + '"></iframe>') : e('<div class="blockUI" style="display:none"></div>'), I = i.theme ? e('<div class="blockUI blockOverlay ui-widget-overlay" style="z-index:' + x++ + ';display:none"></div>') : e('<div class="blockUI blockOverlay" style="z-index:' + x++ + ';display:none;border:none;margin:0;padding:0;width:100%;height:100%;top:0;left:0"></div>'), i.theme && k ? (U = '<div class="blockUI ' + i.blockMsgClass + ' blockPage ui-dialog ui-widget ui-corner-all" style="z-index:' + (x + 10) + ';display:none;position:fixed">', i.title && (U += '<div class="ui-widget-header ui-dialog-titlebar ui-corner-all blockTitle">' + (i.title || "&nbsp;") + "</div>"), U += '<div class="ui-widget-content ui-dialog-content"></div>', U += "</div>") : i.theme ? (U = '<div class="blockUI ' + i.blockMsgClass + ' blockElement ui-dialog ui-widget ui-corner-all" style="z-index:' + (x + 10) + ';display:none;position:absolute">', i.title && (U += '<div class="ui-widget-header ui-dialog-titlebar ui-corner-all blockTitle">' + (i.title || "&nbsp;") + "</div>"), U += '<div class="ui-widget-content ui-dialog-content"></div>', U += "</div>") : U = k ? '<div class="blockUI ' + i.blockMsgClass + ' blockPage" style="z-index:' + (x + 10) + ';display:none;position:fixed"></div>' : '<div class="blockUI ' + i.blockMsgClass + ' blockElement" style="z-index:' + (x + 10) + ';display:none;position:absolute"></div>', w = e(U), v && (i.theme ? (w.css(h), w.addClass("ui-widget-content")) : w.css(s)), i.theme || I.css(i.overlayCSS), I.css("position", k ? "fixed" : "absolute"), (r || i.forceIframe) && g.css("opacity", 0); var C = [g, I, w], S = k ? e("body") : e(o); e.each(C, function () { this.appendTo(S) }), i.theme && i.draggable && e.fn.draggable && w.draggable({ handle: ".ui-dialog-titlebar", cancel: "li" }); var O = f && (!e.support.boxModel || e("object,embed", k ? null : o).length > 0); if (u || O) { if (k && i.allowBodyStretch && e.support.boxModel && e("html,body").css("height", "100%"), (u || !e.support.boxModel) && !k) var E = d(o, "borderTopWidth"), T = d(o, "borderLeftWidth"), M = E ? "(0 - " + E + ")" : 0, B = T ? "(0 - " + T + ")" : 0; e.each(C, function (e, o) { var t = o[0].style; if (t.position = "absolute", 2 > e) k ? t.setExpression("height", "Math.max(document.body.scrollHeight, document.body.offsetHeight) - (jQuery.support.boxModel?0:" + i.quirksmodeOffsetHack + ') + "px"') : t.setExpression("height", 'this.parentNode.offsetHeight + "px"'), k ? t.setExpression("width", 'jQuery.support.boxModel && document.documentElement.clientWidth || document.body.clientWidth + "px"') : t.setExpression("width", 'this.parentNode.offsetWidth + "px"'), B && t.setExpression("left", B), M && t.setExpression("top", M); else if (i.centerY) k && t.setExpression("top", '(document.documentElement.clientHeight || document.body.clientHeight) / 2 - (this.offsetHeight / 2) + (blah = document.documentElement.scrollTop ? document.documentElement.scrollTop : document.body.scrollTop) + "px"'), t.marginTop = 0; else if (!i.centerY && k) { var n = i.css && i.css.top ? parseInt(i.css.top, 10) : 0, s = "((document.documentElement.scrollTop ? document.documentElement.scrollTop : document.body.scrollTop) + " + n + ') + "px"'; t.setExpression("top", s) } }) } if (v && (i.theme ? w.find(".ui-widget-content").append(v) : w.append(v), (v.jquery || v.nodeType) && e(v).show()), (r || i.forceIframe) && i.showOverlay && g.show(), i.fadeIn) { var j = i.onBlock ? i.onBlock : c, H = i.showOverlay && !v ? j : c, z = v ? j : c; i.showOverlay && I._fadeIn(i.fadeIn, H), v && w._fadeIn(i.fadeIn, z) } else i.showOverlay && I.show(), v && w.show(), i.onBlock && i.onBlock.bind(w)(); if (n(1, o, i), k ? (b = w[0], p = e(i.focusableElements, b), i.focusInput && setTimeout(l, 20)) : a(w[0], i.centerX, i.centerY), i.timeout) { var W = setTimeout(function () { k ? e.unblockUI(i) : e(o).unblock(i) }, i.timeout); e(o).data("blockUI.timeout", W) } } } function t(o, t) { var s, l = o == window, a = e(o), d = a.data("blockUI.history"), c = a.data("blockUI.timeout"); c && (clearTimeout(c), a.removeData("blockUI.timeout")), t = e.extend({}, e.blockUI.defaults, t || {}), n(0, o, t), null === t.onUnblock && (t.onUnblock = a.data("blockUI.onUnblock"), a.removeData("blockUI.onUnblock")); var r; r = l ? e("body").children().filter(".blockUI").add("body > .blockUI") : a.find(">.blockUI"), t.cursorReset && (r.length > 1 && (r[1].style.cursor = t.cursorReset), r.length > 2 && (r[2].style.cursor = t.cursorReset)), l && (b = p = null), t.fadeOut ? (s = r.length, r.stop().fadeOut(t.fadeOut, function () { 0 === --s && i(r, d, t, o) })) : i(r, d, t, o) } function i(o, t, i, n) { var s = e(n); if (!s.data("blockUI.isBlocked")) { o.each(function () { this.parentNode && this.parentNode.removeChild(this) }), t && t.el && (t.el.style.display = t.display, t.el.style.position = t.position, t.el.style.cursor = "default", t.parent && t.parent.appendChild(t.el), s.removeData("blockUI.history")), s.data("blockUI.static") && s.css("position", "static"), "function" == typeof i.onUnblock && i.onUnblock(n, i); var l = e(document.body), a = l.width(), d = l[0].style.width; l.width(a - 1).width(a), l[0].style.width = d } } function n(o, t, i) { var n = t == window, l = e(t); if ((o || (!n || b) && (n || l.data("blockUI.isBlocked"))) && (l.data("blockUI.isBlocked", o), n && i.bindEvents && (!o || i.showOverlay))) { var a = "mousedown mouseup keydown keypress keyup touchstart touchend touchmove"; o ? e(document).bind(a, i, s) : e(document).unbind(a, s) } } function s(o) { if ("keydown" === o.type && o.keyCode && 9 == o.keyCode && b && o.data.constrainTabKey) { var t = p, i = !o.shiftKey && o.target === t[t.length - 1], n = o.shiftKey && o.target === t[0]; if (i || n) return setTimeout(function () { l(n) }, 10), !1 } var s = o.data, a = e(o.target); return a.hasClass("blockOverlay") && s.onOverlayClick && s.onOverlayClick(o), a.parents("div." + s.blockMsgClass).length > 0 ? !0 : 0 === a.parents().children().filter("div.blockUI").length } function l(e) { if (p) { var o = p[e === !0 ? p.length - 1 : 0]; o && o.focus() } } function a(e, o, t) { var i = e.parentNode, n = e.style, s = (i.offsetWidth - e.offsetWidth) / 2 - d(i, "borderLeftWidth"), l = (i.offsetHeight - e.offsetHeight) / 2 - d(i, "borderTopWidth"); o && (n.left = s > 0 ? s + "px" : "0"), t && (n.top = l > 0 ? l + "px" : "0") } function d(o, t) { return parseInt(e.css(o, t), 10) || 0 } e.fn._fadeIn = e.fn.fadeIn; var c = e.noop || function () { }, r = /MSIE/.test(navigator.userAgent), u = /MSIE 6.0/.test(navigator.userAgent) && !/MSIE 8.0/.test(navigator.userAgent); document.documentMode || 0; var f = e.isFunction(document.createElement("div").style.setExpression); e.blockUI = function (e) { o(window, e) }, e.unblockUI = function (e) { t(window, e) }, e.growlUI = function (o, t, i, n) { var s = e('<div class="growlUI"></div>'); o && s.append("<h1>" + o + "</h1>"), t && s.append("<h2>" + t + "</h2>"), void 0 === i && (i = 3e3); var l = function (o) { o = o || {}, e.blockUI({ message: s, fadeIn: o.fadeIn !== void 0 ? o.fadeIn : 700, fadeOut: o.fadeOut !== void 0 ? o.fadeOut : 1e3, timeout: o.timeout !== void 0 ? o.timeout : i, centerY: !1, showOverlay: !1, onUnblock: n, css: e.blockUI.defaults.growlCSS }) }; l(), s.css("opacity"), s.mouseover(function () { l({ fadeIn: 0, timeout: 3e4 }); var o = e(".blockMsg"); o.stop(), o.fadeTo(300, 1) }).mouseout(function () { e(".blockMsg").fadeOut(1e3) }) }, e.fn.block = function (t) { if (this[0] === window) return e.blockUI(t), this; var i = e.extend({}, e.blockUI.defaults, t || {}); return this.each(function () { var o = e(this); i.ignoreIfBlocked && o.data("blockUI.isBlocked") || o.unblock({ fadeOut: 0 }) }), this.each(function () { "static" == e.css(this, "position") && (this.style.position = "relative", e(this).data("blockUI.static", !0)), this.style.zoom = 1, o(this, t) }) }, e.fn.unblock = function (o) { return this[0] === window ? (e.unblockUI(o), this) : this.each(function () { t(this, o) }) }, e.blockUI.version = 2.7, e.blockUI.defaults = { message: "<h1>Please wait...</h1>", title: null, draggable: !0, theme: !1, css: { padding: 0, margin: 0, width: "30%", top: "40%", left: "35%", textAlign: "center", color: "#000", border: "3px solid #aaa", backgroundColor: "#fff", cursor: "wait" }, themedCSS: { width: "30%", top: "40%", left: "35%" }, overlayCSS: { backgroundColor: "#000", opacity: .6, cursor: "wait" }, cursorReset: "default", growlCSS: { width: "350px", top: "10px", left: "", right: "10px", border: "none", padding: "5px", opacity: .6, cursor: "default", color: "#fff", backgroundColor: "#000", "-webkit-border-radius": "10px", "-moz-border-radius": "10px", "border-radius": "10px" }, iframeSrc: /^https/i.test(window.location.href || "") ? "javascript:false" : "about:blank", forceIframe: !1, baseZ: 1e3, centerX: !0, centerY: !0, allowBodyStretch: !0, bindEvents: !0, constrainTabKey: !0, fadeIn: 200, fadeOut: 400, timeout: 0, showOverlay: !0, focusInput: !0, focusableElements: ":input:enabled:visible", onBlock: null, onUnblock: null, onOverlayClick: null, quirksmodeOffsetHack: 4, blockMsgClass: "blockMsg", ignoreIfBlocked: !1 }; var b = null, p = [] } "function" == typeof define && define.amd && define.amd.jQuery ? define(["jquery"], e) : e(jQuery) })();
//blockUI defaults
$.blockUI.defaults.fadeOut = 500;
$.blockUI.defaults.fadeIn = 500;
$.blockUI.defaults.css = {
    border: 'none',
    padding: '15px',
    backgroundColor: '#000',
    '-webkit-border-radius': '10px',
    '-moz-border-radius': '10px',
    opacity: .5,
    color: '#fff',
    textAlign: 'center',
    'font-size': 'large'
};
//$.blockUI.defaults.css.border = 'none';
//$.blockUI.defaults.css.opacity = '0.8';
//$.blockUI.defaults.css.color = '#fff';
//$.blockUI.defaults.css.padding = '15px';
//$.blockUI.defaults.css.backgroundColor = '#000';

var blockMessage = function (container, timeout, message, isBlock) {
    if (!container)
        return;

    timeout = timeout || 0;
    message = message || '<img src="/_static/_css/img/loading.gif"/>';

    if (isBlock)
        return container.block({
            message: message,
            css: {
                width: '300px'
            },
            timeout: timeout,
            fadeIn: 500,
            fadeOut: 0
        });

    return container.unblock();
};

$(function () {
    if (isWrapper) {
        window.open = function (open) {
            return function (url, name, features) {
                var getFeature = function (featureName) {
                    try {
                        if (features == null)
                            return;

                        var value = "," + features;
                        var parts = value.split("," + featureName + "=");

                        if (parts.length == 2)
                            return parts.pop().split(",").shift();
                    } catch (e) {
                        return;
                    }
                };

                var featureWidth = parseInt(getFeature('width')) || 800,
                    featureHeight = parseInt(getFeature('height')) || 600;

                var dualScreenLeft = window.screenLeft || window.screenX;
                var dualScreenTop = window.screenTop || window.screenY;

                var width = window.innerWidth || document.documentElement.clientWidth || screen.width;
                var height = window.innerHeight || document.documentElement.clientHeight || screen.height;


                var left = (width / 2) - (featureWidth / 2) + dualScreenLeft,
					top = (height / 2) - (featureHeight / 2) + dualScreenTop;

                name = name || "default_window_name";
                if (features == null) {
                    features = "toolbar=no,location=no,status=no,menubar=no,resizable=yes,width=800,height=600";
                    features += ",top=" + top + ",left=" + left;
                }

                var hasTop = features.indexOf('top=') > -1,
                    hasLeft = features.indexOf('left=') > -1;

                if (!hasTop)
                    features += ",top=" + top;
                if (!hasLeft)
                    features += ",left=" + left;

                return open.call(window, url, name, features);
            };
        }(window.open);
    }

    window.showMessagev2 = function (showMessagev2) {
        return function () {
            var pathname = window.location.pathname;
            // add restriction if page is not home
            if (pathname !== '/' && pathname !== '/default.aspx')
                return (showMessagev2 || function () { }).apply(this, arguments);

            if (getCookie('language') !== 'id-id')
                return (showMessagev2 || function () { }).apply(this, arguments);

            if (sessionStorage.getItem("id-id_popup"))
                return;

            (showMessagev2 || function () { }).apply(this, arguments);
            sessionStorage.setItem("id-id_popup", true);
        }
    }(window.showMessagev2);
});

var date = new Date();
var hideMenu;
var loginStatus_bool = false;
var lang = "en-us";
var lottery_domain = "";
var binary_domain = "";
var info_domain = "";
var loginStatus = "";
var chromeFix = ($.cookie("announcement")) ? parseInt($.cookie("announcement")) : 0;
var chromeFixPopup = ($.cookie("popup")) ? parseInt($.cookie("popup")) : 0;

var domain_www = "";

var mobile = ($.cookie("mobile")) ? parseInt($.cookie("mobile")) : 0;

var directMobile = ($.cookie("directMobile")) ? parseInt($.cookie("directMobile")) : 0;
if (getParameterByName("nomobile").length > 0) {
    $.cookie("mobile", 1, { domain: ("." + location.hostname.split('.').slice(-2).join('.')), path: '/' });
    $.removeCookie("directMobile", { path: '/' });
}
else if (directMobile && (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent))) {
    //location.href = window.location.protocol + "//m" + ((window.location.hostname.split(".").length > 2) ? window.location.hostname.substring(window.location.hostname.indexOf('.'), window.location.hostname.length) : "." + window.location.hostname) + location.search;
}
else if ((/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) && !mobile)) {
    //$.cookie("mobile", 1, { dolmain: ("." + location.hostname.split('.').slice(-2).join('.')), path: '/' });
    //location.href = domain_www + "/Mobile/Detect/" + location.search;
    //location.href = window.location.protocol + "//m" + ((window.location.hostname.split(".").length > 2) ? window.location.hostname.substring(window.location.hostname.indexOf('.'), window.location.hostname.length) : "." + window.location.hostname) + location.search;
}

/*if (getParameterByName("nomobile").length > 0) {
	$.cookie("mobile", 1, { domain: ("." + location.hostname.split('.').slice(-2).join('.')), path: '/' });
}
else if ((!(window.matchMedia("(orientation: portrait)").matches && screen.width >= 768) && !(window.matchMedia("(orientation: landscape)").matches && screen.width >= 1024)) && !mobile && /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
	location.href = window.location.protocol + "//m" + ((window.location.hostname.split(".").length > 2) ? window.location.hostname.substring(window.location.hostname.indexOf('.'), window.location.hostname.length) : "." + window.location.hostname) + window.location.search;
}*/

function getCookie(name) {
    var value = "; " + document.cookie;
    var parts = value.split("; " + name + "=");
    if (parts.length == 2) return parts.pop().split(";").shift();
}

var vip_bool = false;
function open_fundtransfer() {
    $("a#link_fundtransfer").trigger("click");
}

function open_deposit() {
    $("a#link_deposit").trigger("click");
}

function check_https() {
    if (location.href.substring(0, 5) != "https") {
        location.href = location.href.replace("http:", "https:");
    }
}


function checkLoginStatus() {
	if (isIdle)
        return;

    var loginCookie = $.cookie("s");
    if (loginCookie === null || loginCookie === undefined || loginCookie === "") {
        if (loginStatus !== '' && loginStatus !== 'empty') {
            location.href = "/common/logout.aspx";
            loginStatus = "";
            }
    } else {
        var headers = { Authorization: 'Bearer ' + window.tkn };
        var udata = utility.getFromStorage(true, "udata");
        var url = String.format("/_secure/ajax/api/{0}/loginStatus", udata.loginStatusUseRest ? "member" : "handler");
        if (udata && window.tkn)
            utility.DoAjaxPost(url,
                { sessionId: loginCookie, loginIP: udata.rIp },
                headers,
                function (d) {
                    if (loginStatus === "") {
                        loginStatus = d;
                    }
                    if (d === "logout" || d === "multiple") {
                location.href = "/common/logout.aspx";
                    } else if (d && !loginStatus) {
                        if (d !== "forcechangepassword") {
                    location.reload(true);
                }
                    } else if (!d && loginStatus) {
                window.location.href = window.location.href + "#multiple";
                location.reload(true);
            }
                    loginStatus = d;
                });
        }
};

/***********************delay load**********************
$(function () {
	var img = $('img');

	img.each(function () {
		var src = $(this).attr('src');
		$(this).data('src', src).attr('src', '');
	});
});

$(window).load(function () {
	var img = $('img');

	img.each(function () {
		var src = $(this).data('src');
		$(this).attr('src', src);
	});
});*/

/***********************hash multiple***********************/
$(function () {
    if (location.hash == "#multiple" || location.hash == "#logout") {
        $("#logoutFrame .message").hide();
        $("#logoutFrame .message." + location.hash.replace("#", "")).show();
        $("#logoutFrame").modal("show");
        $('#logoutFrame').on('hidden.bs.modal', function () {
            location.href = "/common/logout.aspx";
        });
    }
});

updateAnnouncement = function () {
    $.ajax({
        type: "GET",
        url: "/common/handler.aspx/getAnnouncement",
        contentType: "application/json",
        dataType: "json",
        success: function (msg) {
            var decoded = $('<div/>').html(msg.d).text();
            var msgId = 0;
            var newdecoded = $("<ul />");
            $(decoded).find("li").each(function () {
                newdecoded.append($("<li />").addClass($(this).attr("class")).text($(this).text()));
                if (parseInt($(this).attr("class").replace("announcement_", "")) > msgId) {
                    msgId = parseInt($(this).attr("class").replace("announcement_", ""));
                }
            });
            decoded = $(decoded).empty().append(newdecoded).html();
            if (msgId) {
                chromeFix = ($.cookie("announcement")) ? parseInt($.cookie("announcement")) : 0;

                if (chromeFix >= msgId) {
                    $("#notification").find("i").removeClass("sprite_announcement_on").addClass("sprite_announcement");
                    $(".marquee").find("i").removeClass("sprite_announcement_on").addClass("sprite_announcement");
                }
                else {
                    $("#notification").find("i").removeClass("sprite_announcement").addClass("sprite_announcement_on");
                    $(".marquee").find("i").removeClass("sprite_announcement").addClass("sprite_announcement_on");
                }
            }

            if ($.trim(decoded) == $.trim($('#announcementFrame').find("div.message").html())) {
                return 0;
            }

            if (decoded.length > 0) {
                $('#announcementFrame').find("div.message").html(decoded);
                $("#notification").find("span").html($(decoded).find("li").length);
                var newContentText = $(decoded).find("li[class='announcement_" + msgId + "']").html();
                if (newContentText.length >= ((lang == 'zh-cn') ? 100 : 200)) {
                    newContentText = newContentText.substr(0, (lang == 'zh-cn') ? 100 : 200);
                    newContentText += "...";
                }
                var newContent = $("<div />");
                newContent.append($("#notification").attr("data-content")).find("div:first").replaceWith($("<div />").attr("id", "announcement_" + msgId).html(newContentText));
                newContent.find("hr").show();

                if ($("#notification").data("popover").tip().hasClass('in')) {
                    $("#notification").popover("destroy");
                    $("#notification").popover(
						{
						    content: $(newContent.html())
						}
					);
                    $("#notification").popover("show");
                }
                else {
                    $("#notification").popover("destroy");
                    $("#notification").popover(
						{
						    content: $(newContent.html())
						}
					);
                }
            }
            else {
                $("#notification").find("i").removeClass("sprite_announcement_on").addClass("sprite_announcement");
                $(".marquee").find("i").removeClass("sprite_announcement_on").addClass("sprite_announcement");
                var newContent = $("<div />");
                newContent.append($("#notification").attr("data-content")).find("div:first").replaceWith($("<div />").hide());
                newContent.find("hr").hide();
                $("#notification").popover(
					{
					    content: $(newContent.html())
					}
				);
                $("#notification").popover("destroy");
            }

            //var template = $("<div />").html($('#notification').data('popover').options.template);
            //$(template).find("div.popover-content").css("width", "400px");
            //$('#notification').data('popover').options.template = $(template).html();

            //new version for view all only remove red sign
            if (msgId > chromeFixPopup) {
                $('#notification').popover('show');
                var int4 = setTimeout(function () { $('#notification').popover('hide') }, 3000);
                chromeFixPopup = msgId;
                $.cookie("popup", msgId, { domain: ("." + location.hostname.split('.').slice(-2).join('.')), path: '/' });
            }
        }
    });
}

function showAnnouncemntGrp(id, page) {
    if ($(".annoucement_pager").attr("ann-cat") == id) {
        //return;
    }
    $(".annoucement_body .announcement").stop(true, true);
    $(".annoucement_body .announcement").hide();

    page = (page <= 0 || !page ? 1 : page) - 1;
    //$(".annoucement_body .ann_cat_" + id).slice(0 + announcement_per_page * page, announcement_per_page + announcement_per_page * page).fadeIn(function () {
    $(".annoucement_body .ann_cat_" + id).fadeIn(function () {
    }).promise().done(function () {
        $('.annoucement_body').perfectScrollbar('destroy');
        $('.annoucement_body').perfectScrollbar();
    });;

    if ($(".annoucement_body .ann_cat_" + id).length == 0) {
        $(".annoucement_body .noannouncement").remove();
        var noann = $("<div />").addClass("announcement noannouncement").append($("<div />").addClass("dinpro center").html($("#announcementFrame2").data("noannouncement"))).appendTo(".annoucement_body");
    }
    else {

    }
    genAnnouncementPager(id, page);
}

var announcement_per_page = 3;

genAnnouncementPager = function (announcemnet_grp, current_page) {
    $(".annoucement_pager span").html(current_page);
    $(".annoucement_pager").attr("ann-cat", announcemnet_grp);
    var total_page = Math.ceil($(".annoucement_body .ann_cat_" + announcemnet_grp).length / announcement_per_page);
    //(total_page == 0) ? $(".annoucement_footer ").hide() : $(".annoucement_footer ").show();
    for (var i = total_page - 1; i >= 0; i--) {
        $(".annoucement_pager span").after(
			$("<a />").attr("href", "javascript:showAnnouncemntGrp(" + announcemnet_grp + "," + i + ")").html(i + 1)
		);
    }
}

nextAnnouncemnt = function () {
    $(".annoucement_body .announcement").stop(true, true);
    $(".annoucement_body").scrollTop(0);
    var ativated_grp_id = $(".annoucement_pager").attr("ann-cat");
    var lst_visible = $(".annoucement_body .ann_cat_" + ativated_grp_id + ":visible:last");
    if (lst_visible.nextAll(".ann_cat_" + ativated_grp_id).length > 0) {
        $(".annoucement_pager span").html(Math.ceil(($(".annoucement_body .ann_cat_" + ativated_grp_id).index(lst_visible.nextAll(".ann_cat_" + ativated_grp_id)[0]) + 1) / announcement_per_page));
        $(".annoucement_body .ann_cat_" + ativated_grp_id + ":visible").fadeOut(function () {
            lst_visible.nextAll(".ann_cat_" + ativated_grp_id).slice(0, announcement_per_page).fadeIn();
        });
    }
    return false;
}

prevAnnouncemnt = function () {
    $(".annoucement_body .announcement").stop(true, true);
    $(".annoucement_body").scrollTop(0)
    var ativated_grp_id = $(".annoucement_pager").attr("ann-cat");
    var first_visible = $(".annoucement_body .ann_cat_" + ativated_grp_id + ":visible:first");
    if (first_visible.prevAll(".ann_cat_" + ativated_grp_id).length > 0) {
        $(".annoucement_pager span").html(Math.ceil(($(".annoucement_body .ann_cat_" + ativated_grp_id).index(first_visible.prevAll(".ann_cat_" + ativated_grp_id)[0]) + 1) / announcement_per_page));
        $(".annoucement_body .ann_cat_" + ativated_grp_id + ":visible").fadeOut(function () {
            first_visible.prevAll(".ann_cat_" + ativated_grp_id).slice(0, announcement_per_page).fadeIn();
        });
    }
    return false;
}

var announcement_result = "";
function updateAnnouncement_new() {
    var udata = utility.getFromStorage(true, "udata");
    var headers = { Authorization: 'Bearer ' + window.ftkn };
    if (udata) {
        var data = {            
            paymentGp: udata.paymentGp,
            riskId: udata.riskId
        };
        
        utility.DoAjaxGet(String.format("/_secure/ajax/api/handler/announcements/{0}", udata.lang), data, headers, announcementSuccessCallback);
    }   
};

function announcementSuccessCallback(msg) {
    var msgId = 0;
    var result = msg;

    var first_grp_class = "";
    $(".annoucement_category").html("");
    var tr = $("<tr />");

    //sort grouping
    result.group = result.group.sort(function (a, b) {
        return parseInt(a.announcementCatId) - parseInt(b.announcementCatId);
    });

    //filter out blank details
    result.msg = result.msg.filter(function (a) {
        return a.AnnouncementDetails !== '';
    });

    for (var i = 0; i < result.group.length; i++) {
        var link = $("<a />").addClass("ann_cat_" + result.group[i].announcementCatId).addClass("white_size_14px bold")
                        .attr("href", "javascript:showAnnouncemntGrp(" + result.group[i].announcementCatId + ")")
                        .html((result.group[i].announcementCatTraslation ? result.group[i].announcementCatTraslation : result.group[i].announcementCatName));
        tr.append($("<td />").append(link).css("width", (100 / result.group.length) + "%"));
    }

    if (result.group.length > 0) {
        first_grp_class = result.group[0].announcementCatId;
    }

    $(".annoucement_category").append($("<table />").attr("border", 0).attr("cellspacing", 0).attr("cellpadding", 0)
                                                .addClass("center").append(tr));

    $(".annoucement_category a:first").addClass("blue");
    $(".annoucement_category a").on("click", function () {
        $(".annoucement_category a").removeClass("blue");
        $(this).addClass("blue");
    });

    $(".annoucement_body").html("");
    var ul = $("<ul />");
    $("#marquee").html("");

    for (var j = 0; j < result.msg.length; j++) {
        if (parseInt(result.msg[j].announcementId) > msgId) {
            msgId = parseInt(result.msg[j].announcementId);
        }
        var listItem = $("<li />").addClass("announcement_" + result.msg[j].announcementId)
                                    .addClass("ann_cat_" + result.msg[j].announcementCatId)
                                    .append($("<span />").addClass("float").html(result.msg[j].AnnouncementDetails))
                                    .append($("<span />").addClass("float_right").html(result.msg[j].startDate));
        ul.append(listItem);

        var tobeclean = $("<div />").append(result.msg[j].AnnouncementDetails);
        var listItem2 = $("<div />").addClass("announcement_" + result.msg[j].announcementId)
                                    .addClass("announcement")
                                    .addClass("ann_cat_" + result.msg[j].announcementCatId)
                                    .append($("<div />").addClass("dinpro").append(result.msg[j].AnnouncementDetails).append($("<div />").addClass("float_right").append(result.msg[j].startDate.split("T")[0])).append($("<div />").addClass("clear")));
        $("#marquee").append(tobeclean.text()).append($("<span />"));
        $(".annoucement_body").append(listItem2);
    }
    marqueeFunction();

    $('.annoucement_body .announcement').perfectScrollbar('destroy');
    $('.annoucement_body .announcement').perfectScrollbar();

    $(".annoucement_body .announcement strong,.annoucement_body .announcement em, .annoucement_body .announcement b, .annoucement_body .announcement i").addClass("blue");
    showAnnouncemntGrp(first_grp_class);
    if (msgId) {
        $("#notification").data("msgId", msgId);
        chromeFix = ($.cookie("announcement")) ? parseInt($.cookie("announcement")) : 0;

        if (chromeFix >= msgId) {
            $("#notification").find("i").removeClass("sprite_announcement_on").addClass("sprite_announcement");
            $(".marquee").find("i").removeClass("sprite_announcement_on").addClass("sprite_announcement");
        }
        else {
            $("#notification").find("i").removeClass("sprite_announcement").addClass("sprite_announcement_on");
            $(".marquee").find("i").removeClass("sprite_announcement").addClass("sprite_announcement_on");
        }
    }

    if ($(".annoucement_body .announcement").length > 0) {
        $("#notification").find("span").html($(".annoucement_body .announcement").length);

        var selectedMSG = $(".annoucement_body").find(".announcement_" + msgId).clone();
        selectedMSG.find(".float_right").remove();
        var newContentText = selectedMSG.text();
        if (newContentText.length >= ((lang == 'zh-cn') ? 100 : 200)) {
            newContentText = newContentText.substr(0, (lang == 'zh-cn') ? 100 : 200);
            newContentText += "...";
        }
        var newContent = $("<div />");
        newContent.append($("#notification").attr("data-content")).find("div:first").replaceWith($("<div />").attr("id", "announcement_" + msgId).html(newContentText));
        newContent.find("hr").show();

        if ($("#notification").data("popover").tip().hasClass('in')) {
            $("#notification").popover("destroy");
            $("#notification").popover(
                {
                    content: $(newContent.html())
                }
            );
            $("#notification").popover("show");
        }
        else {
            $("#notification").popover("destroy");
            $("#notification").popover(
                {
                    content: $(newContent.html())
                }
            );
        }
    }
    else {
        $("#notification").find("i").removeClass("sprite_announcement_on").addClass("sprite_announcement");
        $(".marquee").find("i").removeClass("sprite_announcement_on").addClass("sprite_announcement");
        var newContent = $("<div />");
        newContent.append($("#notification").attr("data-content")).find("div:first").replaceWith($("<div />").hide());
        newContent.find("hr").hide();
        $("#notification").popover(
            {
                content: $(newContent.html())
            }
        );
        $("#notification").popover("destroy");
    }

    //new version for view all only remove red sign
    if (msgId > chromeFixPopup) {
        $('#notification').popover('show');
        var int4 = setTimeout(function () { $('#notification').popover('hide') }, 3000);
        chromeFixPopup = msgId;
        $.cookie("popup", msgId, { domain: ("." + location.hostname.split('.').slice(-2).join('.')), path: '/' });
    }
};

openAnnouncemnet = function () {
    var msgId = 0;
    try {
        $('#announcementFrame').find("div.message ul").find("li").each(function () {
            if (parseInt($(this).attr("class").replace("announcement_", "")) > msgId) {
                msgId = parseInt($(this).attr("class").replace("announcement_", ""));
            }
        });
    } catch (e) {

    }
    if (msgId) {
        if (msgId > chromeFix) {
            $.cookie("announcement", msgId, { domain: ("." + location.hostname.split('.').slice(-2).join('.')), path: '/' });
            chromeFix = msgId;
        }
    }
    $("#notification").find("i").removeClass("sprite_announcement_on").addClass("sprite_announcement");
    $(".marquee").find("i").removeClass("sprite_announcement_on").addClass("sprite_announcement");
    $('#announcementFrame').modal('show'); $('#notification').popover('hide');
}


openAnnouncemnet_new = function () {
    var msgId = 0;
    try {
        $('#announcementFrame2').find("div.annoucement_body").find("div.announcement").each(function () {
            if (parseInt($(this).attr("class").replace("announcement_", "")) > msgId) {
                msgId = parseInt($(this).attr("class").replace("announcement_", ""));
            }
        });
    } catch (e) {

    }
    if (msgId) {
        if (msgId > chromeFix) {
            $.cookie("announcement", msgId, { domain: ("." + location.hostname.split('.').slice(-2).join('.')), path: '/' });
            chromeFix = msgId;
        }
    }
    $("#notification").find("i").removeClass("sprite_announcement_on").addClass("sprite_announcement");
    $(".marquee").find("i").removeClass("sprite_announcement_on").addClass("sprite_announcement");
    $('#announcementFrame2').modal('show'); $('#notification').popover('hide');
    try {
        $(".annoucement_category a:first").trigger("click");
        if ($(".annoucement_category a:first").attr("href")) {
            location.href = $(".annoucement_category a:first").attr("href");
        }
    } catch (e) {

    }
}

updateAnnouncement = function () {
    updateAnnouncement_new();
}

openAnnouncemnet = function () {
    openAnnouncemnet_new();
}

function updatePMessage() {
    var udata = utility.getFromStorage(true, "udata");
    if (udata && window.tkn) {
        var headers = { Authorization: 'Bearer ' + window.tkn };
        utility.DoAjaxGet(String.format("/_secure/ajax/api/messages/unreadcount/{0}", udata.memId),
            null,
            headers,
            function (d) {
                try {
                    $("#private_message").find("span").html(d);
                    if (d > 0) {
                        $("#private_message").find("i").removeClass("sprite_private_message").addClass("sprite_private_message_on");;
                    }
                    else {
                        $("#private_message").find("i").removeClass("sprite_private_message_on").addClass("sprite_private_message");;
                    }
                } catch (e) {
                }
            });
    }

    //$.ajax({
    //	type: "GET",
    //	url: "/common/handler.aspx/pmessageCount",
    //	contentType: "application/json",
    //	dataType: "json",
    //	success: function (msg) {
    //		try {
    //			$("#private_message").find("span").html(msg.d);
    //			if (parseInt(msg.d)) {
    //				$("#private_message").find("i").removeClass("sprite_private_message").addClass("sprite_private_message_on");;
    //			}
    //			else {
    //				$("#private_message").find("i").removeClass("sprite_private_message_on").addClass("sprite_private_message");;
    //			}
    //		} catch (e) {
    //		}
    //	}
    //});
}

function autoTiming() {
    try {
        date.setSeconds(date.getSeconds() + 1);
        var yyyy = date.getFullYear().toString();
        var mm = (date.getMonth() + 1).toString();
        var dd = date.getDate().toString();
        $("#date").html((dd.length == 2 ? dd : "0" + dd) + "/" + (mm.length == 2 ? mm : "0" + mm) + "/" + yyyy);
        $("#time").html(('0' + date.getHours()).slice(-2) + ":" + ('0' + date.getMinutes()).slice(-2) + ":" + ('0' + date.getSeconds()).slice(-2));
        $("#zone").html(date.toLocaleTimeString('en-us', { timeZoneName: 'short' }).split(' ')[2]);
    } catch(e) {}
}

function refreshCaptcha(captchaID, code) {
    var w = getParameterByName2("w", $(captchaID).attr("src"));
    if (w) {
        $(captchaID).attr("src", "/common/captcha.aspx?s=" + code + "&t=" + Date() + "&w=" + w);
    }
    else {
        $(captchaID).attr("src", "/common/captcha.aspx?s=" + code + "&t=" + Date());
    }

}

function getParameterByName(name) {
    name = name.replace(/[\[]/, "\\\[").replace(/[\]]/, "\\\]");
    var regexS = "[\\?&]" + name + "=([^&#]*)";
    var regex = new RegExp(regexS);
    var results = regex.exec(window.location.search);
    if (results == null)
        return "";
    else
        return decodeURIComponent(results[1].replace(/\+/g, " "));
}

function getParameterByName2(name, location) {
    name = name.replace(/[\[]/, "\\\[").replace(/[\]]/, "\\\]");
    var regexS = "[\\?&]" + name + "=([^&#]*)";
    var regex = new RegExp(regexS);
    var results = regex.exec(location);
    if (results == null)
        return "";
    else
        return decodeURIComponent(results[1].replace(/\+/g, " "));
}

function showMessage(message) {
    $("#modalFrame").find("p.message").html(message);
    $("#modalFrame").modal("show");
}

function showLogin() {
    $('#loginFrame').find("iframe").attr("src", "/common/login.aspx?url=" + encodeURIComponent(location.href));
    $('#loginFrame').modal('show');
    $('#loginFrame').on('hidden.bs.modal', function () {
        location.reload();
    });
}

function showLogin2() {
    $('#loginFrame2').modal('show');
    $('#loginFrame2').on('shown', function () {
        $('#username').focus();
    });
}

function load_asports() {
    if (loginStatus) {
        window.open("/Sports/aSports/Loader.aspx", 'sports');
        if (window.location.hostname.indexOf("www") == 0) {
            //location.href = "/Casino/";
        }

    } else {
        location.href = "/Sports/aSports/";
    }
}

function load_esports() {
    if (loginStatus) {
        window.open("/Sports/eSports/Loader.aspx", 'esports');
        if (window.location.hostname.indexOf("www") == 0) {
            //location.href = "/Casino/";
        }
    } else {
        location.href = "/Sports/eSports/";
    }
}

function load_bravado_slots() {
    location.href = "/Slots/Bravado/";
}

function load_livecasino() {
    location.href = "/Casino/";
}

function load_inplay() {
    if (loginStatus) {
        window.open("/Sports/InPlay/Loader.aspx", 'esports');
        if (window.location.hostname.indexOf("www") == 0) {
            //location.href = "/Casino/";
        }
    } else {
        location.href = "/Sports/InPlay/";
    }
}

function load_isports() {
    if (loginStatus) {
        window.open("/Sports/iSports/Loader.aspx", 'isports');
        if (window.location.hostname.indexOf("www") == 0) {
            //location.href = "/Casino/";
        }
    } else {
        location.href = "/Sports/iSports/";
    }
}

//function load_xsports() {
//	if (loginStatus) {
//		window.open("/Sports/xSports/Loader.aspx", 'xsports');
//		if (window.location.hostname.indexOf("www") == 0) {
//			location.href = "/Casino/";
//		}
//	} else {
//		location.href = "/Sports/xSports/";
//	}
//}

function load_usports() {
    if (loginStatus) {
        window.open("/Sports/USports/Loader.aspx", 'usports');
        if (window.location.hostname.indexOf("www") == 0) {
            //location.href = "/Casino/";
        }
    } else { showLogin(); }
}

function load_xsports() {
    if (loginStatus) {
        window.open("/Sports/xSports/Loader.aspx", 'xsports');
        if (window.location.hostname.indexOf("www") == 0) {
            //location.href = "/Casino/";
        }
    } else {
        location.href = "/Sports/xSports/";
    }
}


function load_wsports() {
    if (loginStatus) {
        window.open("/Sports/wSports/Loader.aspx", 'wsports');
        if (window.location.hostname.indexOf("www") == 0) {
            //location.href = "/Casino/";
        }
    } else {
        location.href = "/Sports/wSports/";
    }
}

function load_vsports(option) {
    if (!option) {
        location.href = "/Virtual/";
        return false;
    }
    else {
        if (loginStatus) {
            window.open("/Virtual/Loader.aspx?type=" + option, option);
            if (window.location.hostname.indexOf("www") == 0) {
                //location.href = "/Casino/";
            }
        } else {
            showLogin();
        }
    }
}

function load_virtual(option) {
    if (!option) {
        location.href = "/Virtual/";
        return false;
    }
    else {
        if (loginStatus) {
            var path = "/Virtual/Loader.aspx?type=" + option;
            if (option === 'VFWC' || option === 'VFLM' || option === 'VBL' || option === 'VFAS')
                path = path + '&style=gameplayinteractiveasia';

            window.open(path, option);
        } else {
            showLogin();
        }
    }
}


var casino_window;
function load_casino_link(code, mode) {
    if (loginStatus || mode != "real") {
        try { casino_window.close(); } catch (e) { }
        casino_window = window.open("/games/palazzo/launcher.aspx?casino=true&game=" + code + "&mode=" + mode, 'casino_palazzo');
    }
    else { showLogin(); }
}

var casino_V2_window;
function load_casino_link_v2(code) {
    if (loginStatus) {
        try { casino_V2_window.close(); } catch (e) { }
        casino_V2_window = window.open("/Casino/launcher.aspx?" + ((code) ? code : ""), 'casino');
    }
    else { showLogin(); }
}

var allegro_casino;
load_allegro_casino = function (code) {
    if (loginStatus) {
        try { allegro_casino.close(); } catch (e) { }
        allegro_casino = window.open("/Casino/Allegro/Launcher.aspx?" + ((code) ? code : ""), 'allegro_casino');
    }
    else { showLogin(); }
}

var crescendo_window;
function load_crescendo_link(code, mode, internal) {
    //if (loginStatus || mode != "real") {
    //    try { crescendo_window.close(); } catch (e) { }
    //    crescendo_window = window.open("/Slots/Crescendo/launcher.aspx?game=" + code + "&mode=" + mode + "&internal=" + internal, 'crescendo');
    //}
    //else { showLogin(); }
}

var bravado_window;
var rlots_window;
function load_bravado_link(code, mode, club, category) {
    if (loginStatus || mode != "real") {
        var size = [{ module: "bikinibeach", width: 1280, height: 768 }];
        var windowsize = $.grep(size, function (n, i) {
            return n.module == code.replace("_hd", "");
        });
        if (code.substr(-4) == "_alt") {
            try { rlots_window.close(); } catch (e) { }
            if (windowsize.length == 1) {
                rlots_window = window.open("/Slots/bravado/launcher.aspx?game=" + code + "&mode=" + mode + (club !== "undefined" ? "&club=" + club : ''), 'rslots');
            }
            else {
                rlots_window = window.open("/Slots/bravado/launcher.aspx?game=" + code + "&mode=" + mode + (club !== "undefined" ? "&club=" + club : ''), 'rslots');
            }
        }
        else {
            try { bravado_window.close(); } catch (e) { }
            if (windowsize.length == 1) {
                bravado_window = window.open("/Slots/bravado/launcher.aspx?game=" + code + "&mode=" + mode + (club !== "undefined" ? "&club=" + club : ''), '3D');
            }
            else {
                bravado_window = window.open("/Slots/bravado/launcher.aspx?game=" + code + "&mode=" + mode + (club !== "undefined" ? "&club=" + club : ''), '3D');
            }
        }

        track_bravado(location.pathname, category, code, mode);
    }
    else { showLogin(); }
}

function load_play_link(code, mode, club, category) {
    if (loginStatus || mode != "real") {
        var size = [{ module: "bikinibeach", width: 1280, height: 768 }];
        var windowsize = $.grep(size, function (n, i) {
            return n.module == code.replace("_hd", "");
        });
        if (code.substr(-4) == "_alt") {
            try { rlots_window.close(); } catch (e) { }
            if (windowsize.length == 1) {
                rlots_window = window.open("/Slots/Play/launcher.aspx?game=" + code + "&mode=" + mode + (club !== "undefined" ? "&club=" + club : ''), 'rslots');
            }
            else {
                rlots_window = window.open("/Slots/Play/launcher.aspx?game=" + code + "&mode=" + mode + (club !== "undefined" ? "&club=" + club : ''), 'rslots');
            }
        }
        else {
            try { bravado_window.close(); } catch (e) { }
            if (windowsize.length == 1) {
                bravado_window = window.open("/Slots/Play/launcher.aspx?game=" + code + "&mode=" + mode + (club !== "undefined" ? "&club=" + club : ''), '3D');
            }
            else {
                bravado_window = window.open("/Slots/Play/launcher.aspx?game=" + code + "&mode=" + mode + (club !== "undefined" ? "&club=" + club : ''), '3D');
            }
        }

        track_bravado(location.pathname, category, code, mode);
    }
    else { showLogin(); }
}

function track_bravado(path, category, code, mode) {
    try {
        code = code.replace("_alt", "");
        var match = path.match(/\/(games|slots)\/(\w+)(\/(.*))?/i);
        if (match) {
            path = match[2];
            path = path.toLowerCase();
            console.log(path);
        }
        else {
            path = "other";
        }

        if (_paq && category) {
            //_paq.push(['trackEvent', path, category, code + "-" + mode]);
            _paq.push(['trackLink', location.href, "link", { dimension4: 'Slot', dimension5: code, dimension6: "Club" + path.substr(0, 1).toUpperCase() + path.substr(1), dimension7: mode.substr(0, 1).toUpperCase() + mode.substr(1), dimension8: category }]);
        }
    } catch (e) {
        //throw e;
    }
}

var bravado_window_2;
function load_bravado_link_v2(code, mode) {
    if (loginStatus || mode != "real") {
        try { bravado_window_2.close(); } catch (e) { }
        bravado_window_2 = window.open("/Slots/PlaynGo/launcher.aspx?game=" + code + "&mode=" + mode, 'playngo', config = 'width=891,height=768,scrollbars=no,location=0,resizable=no');
    }
    else { showLogin(); }
}

function load_3DGames(code, mode) {
    if (loginStatus || mode != "real") {
        var size = [{ module: "bikinibeach", width: 1280, height: 768 }];
        var windowsize = $.grep(size, function (n, i) {
            return n.module == code.replace("_hd", "");
        });
        try { bravado_window.close(); } catch (e) { }
        if (windowsize.length == 1) {
            bravado_window = window.open("/Slots/bravado/launcher.aspx?game=" + code + "&mode=" + mode, '3D', 'width=' + windowsize[0].width + ',height=' + windowsize[0].height + ',scrollbars=no,location=1,resizable=yes');
        }
        else {
            bravado_window = window.open("/Slots/bravado/launcher.aspx?game=" + code + "&mode=" + mode, '3D', 'width=1024,height=768,scrollbars=no,location=1,resizable=yes');
        }
    }
    else { showLogin(); }
}

function load_divino_link(code, mode) {
    if (loginStatus || mode != "real") {
        window.open("/Slots/Divino/Launcher.aspx?game=" + code + "&mode=" + mode, 'divino');
    }
    else { showLogin(); }
}

function load_massimo_link(code, mode) {
    if (loginStatus || mode != "real") {
        window.open("/Slots/Massimo/Launcher.aspx?game=" + code + "&mode=" + mode, 'massimo');
    }
    else { showLogin(); }
}

function load_massimo_casino(code) {
    var mode = "real";
    if (loginStatus || mode != "real") {
        window.open("/Slots/Massimo/Launcher.aspx?casino=true&game=" + code + "&mode=" + mode, 'massimo_casino');
    }
    else { showLogin(); }
}


function load_nuovo_link(code, mode) {
    //if (loginStatus || mode != "real") {
    //    //window.open("/Slots/Nuovo/Launcher.aspx?game=" + code + "&mode=" + mode, 'nuovo', 'width=1024,height=768,scrollbars=no,location=1,resizable=yes');
    //    window.open("/Slots/Nuovo/Launcher.aspx?game=" + code + "&mode=" + mode, 'esports');
    //}
    //else { showLogin(); }
}

var gallardo_window;
function load_gallardo_link(code, mode) {
    if (loginStatus || mode != "real") {
        if (/\|/.test(code)) {
            gallardo_window = window.open("/Slots/PlaynGo/launcher.aspx?game=" + code + "&mode=" + mode, 'PNG');
        } else {
            window.open("/Slots/Gallardo/Launcher.aspx?game=" + code + "&mode=" + mode, 'gallardo');
        }
    }
    else { showLogin(); }
}

var playson_window
function load_playson_link(code, mode) {
    //if (loginStatus || mode != "real") {
    //    playson_window = window.open("/Slots/Playson/launcher.aspx?game=" + code + "&mode=" + mode, 'playson');
    //}
    //else { showLogin(); }
}

var mrs_window
function load_mrs_link(code, mode) {
    //if (loginStatus || mode != "real") {
    //    mrs_window = window.open("/Slots/MRS/launcher.aspx?game=" + code + "&mode=" + mode, 'mrs');
    //}
    //else { showLogin(); }
}

var genesis_window;
function load_genesis_link(code, mode) {
    if (loginStatus || mode != "real") {
        genesis_window = window.open("/Slots/Genesis/launcher.aspx?game=" + code + "&mode=" + mode, 'genesis');
    }
    else { showLogin(); }
}

var booongo_window;
function load_booongo_link(code, mode) {
    if (loginStatus || mode != "real") {
        booongo_window = window.open("/Slots/Booongo/launcher.aspx?game=" + code + "&mode=" + mode, 'booongo');
    }
    else { showLogin(); }
}

var booming_window
function load_booming_link(code, mode) {
    if (loginStatus || mode != "real") {
        booming_window = window.open("/Slots/Booming/launcher.aspx?game=" + code + "&mode=" + mode, 'booming');
    }
    else { showLogin(); }
}

var spade_window
function load_spade_link(code, mode) {
    if (loginStatus || mode != "real") {
        spade_window = window.open("/Slots/Spade/launcher.aspx?game=" + code + "&mode=" + mode, 'spade');
    }
    else { showLogin(); }
}

var skywind_window
function load_skywind_link(code, mode) {
    if (loginStatus || mode != "real") {
        skywind_window = window.open("/Slots/skywind/launcher.aspx?game=" + code + "&mode=" + mode, 'skywind');
    }
    else { showLogin(); }
}

var spade_window
function load_spade_link(code, mode) {
    if (loginStatus || mode != "real") {
        spade_window = window.open("/Slots/Spade/launcher.aspx?game=" + code + "&mode=" + mode, 'spade');
    }
    else { showLogin(); }
}

var yggdrasil_window
function load_yggdrasil_link(code, mode) {
    if (loginStatus || mode != "real") {
        yggdrasil_window = window.open("/Slots/Yggdrasil/launcher.aspx?game=" + code + "&mode=" + mode, 'yggdrasil');
    }
    else { showLogin(); }
}

var flowgaming_window;
function load_flowgaming_link(code, mode, type) {
    if (loginStatus || mode !== 'real')
        flowgaming_window = window.open('/Slots/Flowgaming/Launcher.aspx?game=' + code + '&mode=' + mode + '&clientType=' + type, 'flowgaming');
    else
        showLogin();
}

var solid_window;
function load_solid_link(code, mode) {
    if (loginStatus || mode !== 'real')
        solid_window = window.open('/Slots/Solid/Launcher.aspx?game=' + code + '&mode=' + mode, 'flowgaming');
    else
        showLogin();
}

function load_palazzo_link(code, mode) {
    var windowsize = $.grep(typeof size != 'undefined' ? size : "", function (n, i) {
        return n.module == code;
    });
    if (loginStatus || mode != "real") {
        try { palazzo_window.close(); } catch (e) { }
        if (windowsize.length == 1) {
            palazzo_window = window.open("/games/palazzo/launcher.aspx?game=" + code + "&mode=" + mode, 'palazzo');
        }
        else {
            palazzo_window = window.open("/games/palazzo/launcher.aspx?game=" + code + "&mode=" + mode, 'palazzo');
        }

    }
    else { showLogin(); }

    if (event)
        event.preventDefault();
}

function load_apollo_link(code, mode) {
    if (loginStatus || mode != "real") {
        window.open("/Games/Apollo/Launcher.aspx?game=" + code + "&mode=" + mode, 'APOLLO');
    }
    else { showLogin(); }
}

function load_apollo_link_v2(code, mode) {
    if (loginStatus || mode != "real") {
        window.open("/Games/qtech/Launcher.aspx?game=" + code + "&mode=" + mode, 'APOLLO');
    }
    else { showLogin(); }
}

function load_UC8_link(code, mode) {
    //if (loginStatus || mode != "real") {
    //    window.open("/Slots/UC8/Launcher.aspx?game=" + code + "&mode=" + mode, 'UC8');
    //}
    //else { showLogin(); }
}

function load_game(code, name) {
    if (!name) {
        name = "v1"
    }
    if (loginStatus) {
        window.open(domain_www + "/Games/Launcher.aspx?game=" + code + (name != "v1" ? "&type=" + name : ""), "games" + name);
    }
    else { showLogin2(); }
}

function load_apollo_link_v3(code, mode) {
    if (loginStatus || mode != "real") {
        window.open("/Slots/Pragmatic/Launcher.aspx?game=" + code + "&mode=" + mode, 'pragmatic');
    }
    else { showLogin(); }
}

function load_lottery_ladder(trial) {
    var product = "ladder";
    var options = "";
    if (trial) {
        load_lottery("/lottery/launcherv2.aspx?game=" + product + "&mode=try", product)
    }
    else {
        if (loginStatus) { load_lottery("/lottery/launcherv2.aspx?game=" + product, product); } else { showLogin(); }
    }
}

function load_games_ladder(trial) {
    var product = "ladder";
    var options = "";
    if (trial) {
        load_lottery("/lottery/launcherv2.aspx?game=" + product + "&mode=try", product);
    }
    else {
        if (loginStatus) { load_lottery("/lottery/launcherv2.aspx?game=" + product, product); } else { showLogin(); }
    }
}

function load_lottery_pk10(trial) {
    var product = "pk10";
    var options = "left=200,top=200,width=960,height=720,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=no,copyhistory=no,resizable=no";
    if (trial) {
        load_lottery("/lottery/launcherv2.aspx?game=" + product + "&mode=try", product)
    }
    else {
        if (loginStatus) { load_lottery("/lottery/launcherv2.aspx?game=" + product, product); } else { showLogin(); }
    }
}

function load_lottery_v2(product, trial, tab) {
    trial = (typeof trial == 'undefined' ? false : true);
    tab = "opentab";
    if (trial) {
        load_lottery("/lottery/launcherv3.aspx?game=" + product + "&mode=try", tab)
    }
    else {
        if (loginStatus) { load_lottery("/lottery/launcherv3.aspx?game=" + product, tab); } else { showLogin(); }
    }
}

function load_lottery_link(trial, view) {
    trial = (typeof trial == 'undefined' ? true : trial);
    view = (typeof view == 'undefined' ? 6 : view);
    if (trial) {
        load_lottery("/lottery/launcher.aspx?mode=Try&view=" + view + "&theme=2");
    } else {
        if (loginStatus) { load_lottery("/lottery/launcher.aspx?view=" + view + "&theme=2"); } else { showLogin(); }
    }
}

function load_lottery_iLotto(trial, view, version) {
    if (typeof version === "undefined") { version = 1; }
    trial = (typeof trial == 'undefined' ? true : trial);
    view = (typeof view == 'undefined' ? 6 : view);
    if (trial) {
        load_lottery("/lottery/launcher.aspx?game=ilotto&mode=Try&view=" + view + "&theme=2" + "&version=" + version);
    }
    else {
        if (loginStatus) { load_lottery("/lottery/launcher.aspx?game=ilotto&view=" + view + "&theme=2" + "&version=" + version); } else { showLogin(); }
    }
}
function load_lottery_keno(trial, view, version) {
    if (typeof version === "undefined") { version = 3; }
    trial = (typeof trial == 'undefined' ? false : trial);
    view = (typeof view == 'undefined' ? 6 : view);
    if (trial) {
        load_lottery("/lottery/launcher.aspx?game=keno&mode=Try&view=" + view + "&theme=2" + "&version=" + version);
    }
    else {
        if (loginStatus) { load_lottery("/lottery/launcher.aspx?game=keno&view=" + view + "&theme=2" + "&version=" + version); } else { showLogin(); }
    }
}

var binary_window;
function load_binary_link(trial) {
    if (loginStatus || trial) {
        try { binary_window.close(); } catch (e) { }
        binary_window = window.open("/binary/launcher.aspx" + ((trial) ? ("?demo=1") : ""), 'binary', 'width=1024,height=768,scrollbars=no,location=1,resizable=yes');
    } else { showLogin(); }
}

function load_lottery(link, tab, options) {
    tab = (typeof tab == 'undefined' ? 'lottery' : tab);
    options = (typeof tab == 'undefined' ? '' : options);
    window.open(link, tab, options);
}

function load_casino() {
    if (loginStatus) {
        load_casino_link('7bal', 'real');
    }
    else { showLogin(); }
}

var pmahjong_window;
function load_pmahjong() {
    if (loginStatus) {
        try { pmahjong_window.close(); } catch (e) { }
        pmahjong_window = window.open(("http://pmj" + ((window.location.hostname.split(".").length > 2) ? window.location.hostname.substring(window.location.hostname.indexOf('.'), window.location.hostname.length) : "." + window.location.hostname)), 'pmahjong', 'width=1024,height=790,scrollbars=no,location=1,resizable=yes');
    }
    else { showLogin(); }
}

function open_launcher(link, tab, options) {
    tab = (typeof tab === 'undefined' ? 'launcher' : tab);
    options = (typeof tab === 'undefined' ? '' : options);
    window.open(link, tab, options);
}

var livechat_window;
function load_livechat(cat) {
    var chatLang = "";
    var skill = "English";
    switch (lang) {
        case "id-id": chatLang = "Indonesia"; skill = "Indonesia"; break;
        case "ja-jp": chatLang = "Japanese"; skill = "Japanese"; break;
        case "km-kh": chatLang = "Cambodia"; skill = "Cambodia"; break;
        case "ko-kr": chatLang = "Korean"; skill = "Korean"; break;
        case "th-th": chatLang = "Thailand"; skill = "Thailand"; break;
        case "vi-vn": chatLang = "Vietnamese"; skill = "Vietnamese"; break;
        case "zh-cn": chatLang = "Chinese"; skill = "Chinese"; break;
        default: chatLang = "English"; break;
    }
    if (vip_bool) {
        switch (lang) {
            case "id-id": chatLang = "VIP-Bahasa"; skill = "VIP-Bahasa"; break;
                //case "ja-jp": chatLang = "Japanese"; skill = "Japanese"; break;
                //case "km-kh": chatLang = "VIP-Cambodian"; skill = "VIP-Cambodian"; break;
                //case "ko-kr": chatLang = "VIP-Korean"; skill = "VIP-Korean"; break;
            case "th-th": chatLang = "VIP-Thailand"; skill = "VIP-Thailand"; break;
            case "vi-vn": chatLang = "VIP-TiengViet "; skill = "VIP-TiengViet "; break;
            case "zh-cn": chatLang = "VIP-Chinese "; skill = "VIP-Chinese "; break;
            case "en-us": chatLang = "VIP-English"; skill = "VIP-English"; break;
                //default: chatLang = "VIP-English"; skill = "VIP-English"; break;
            default: break;
        }
    }
    try { livechat_window.close(); } catch (e) { }
    if (false) {
        livechat_window = window.open("https://server.iad.liveperson.net/hc/88942816/?cmd=file&file=visitorWantsToChat&site=88942816&SV!skill=" + skill + "&leInsId=88942816527642465&skId=1&leEngId=88942816_29aeab82-a5fc-4de7-b801-c6a87c638106&leEngTypeId=8&leEngName=LiveHelp_default&leRepAvState=3&referrer=" + escape(document.location.href) + "&SESSIONVAR!visitor_profile=" + chatLang, 'livechat');
    }
    else {
        //window.location.href = $('.livezilla').attr('href');
        livechat_window = window.open("/common/livechat.ashx?url=" + encodeURIComponent(window.location) + "&category=" + cat, 'livechat', 'left=200,top=200,width=450,height=410,toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=no,copyhistory=no,resizable=no');
    }
}

var info_window;
function load_info(link, domain) {
    var infoLang = "";
    switch (lang) {
        case "id-id": infoLang = "id"; break;
        case "ja-jp": infoLang = "jp"; break;
        case "km-kh": infoLang = "kh"; break;
        case "ko-kr": infoLang = "kr"; break;
        case "my-mm": infoLang = "mm"; break;
        case "th-th": infoLang = "th"; break;
        case "vi-vn": infoLang = "vn"; break;
        case "zh-cn": infoLang = "cs"; break;
        default: infoLang = "en"; break;
    }
    try {
        link = link.toLowerCase().replace("_en.shtml", "_" + infoLang + ".shtml");
        link = link.toLowerCase().replace("-en.shtml", "-" + infoLang + ".shtml");
    } catch (e) { }
    try { info_window.close(); } catch (e) { }
    info_window = window.open(((domain) ? domain : info_domain) + link, 'info', 'width=1000,height=700,scrollbars=yes,location=no,resizable=yes');
}

function load_account(link) {
    //window.open(("http://account" + ((window.location.hostname.split(".").length > 2) ? window.location.hostname.substring(window.location.hostname.indexOf('.'), window.location.hostname.length) : "." + window.location.hostname)) + link, 'account', 'width=1000,height=700,scrollbars=yes,location=1,resizable=yes');
    location.href = (window.location.protocol + "//account" + ((window.location.hostname.split(".").length > 2) ? window.location.hostname.substring(window.location.hostname.indexOf('.'), window.location.hostname.length) : "." + window.location.hostname)) + link;
}

function pad(num, size) {
    var s = num + "";
    while (s.length < size) s = "0" + s;
    return s;
}

$.fn.preload = function () {
    this.each(function () {
        $('<img/>')[0].src = this;
    });
}

$(function () {
    if ((!($.browser.msie && parseInt($.browser.version, 10) == 6))) {
        var menuWidth = 0;
        $(".mainMenu div.menuContent>ul>li>a").each(function () {
            menuWidth += $(this).outerWidth();
        });
        $(".mainMenu div.menuContent>ul:not('.nav')>li>a").each(function () {
            $(this).css('width', "+=" + Math.floor(($(".mainMenu ul").width() - menuWidth) / $(".mainMenu div.menuContent>ul>li>a").length));
        });
        menuWidth = 0;
        $(".mainMenu div.menuContent>ul:not('.nav')>li>a").each(function () {
            menuWidth += $(this).outerWidth();
        });
        $(".mainMenu div.menuContent>ul>li>ul>li>a").each(function () {
            //$(this).width($(this).closest("li").closest("ul").closest("li").width());
        });
        $(".mainMenu div.menuContent>ul:not('.nav')>li>a:last").css("width", "+=" + ($(".mainMenu ul").width() - menuWidth));

        $("ul.slots").each(function () {
            if ($(this).parent().width() - ($(this).width() + 20) < 0) {
                $(this).css("marginLeft", ($(this).parent().width() - ($(this).width() + 20)) / 2);
            }
        });
    }
    else {
        var menuWidth = 0;
        $(".mainMenu div.menuContent>ul>li>a").each(function () {
            menuWidth += $(this).outerWidth();
        });
        $(".mainMenu div.menuContent>ul>li>a").each(function () {
            $(this).css('width', "+=" + Math.floor((960 - menuWidth) / $(".mainMenu div.menuContent>ul>li>a").length));
        });
    }

    /*var register_window;
	$("a[type='register']").click(function () {
		try {register_window.close();} catch (e) {}
		register_window = window.open($(this).attr("href"), 'member', 'width=1000,height=680,scrollbars=yes,location=1,resizable=yes');
		return false;
	});*/

    var forgot_login_window;
    $("a[type='forgot_login']").click(function () {
        try { forgot_login_window.close(); } catch (e) { }
        forgot_login_window = window.open($(this).attr("href"), 'member', 'width=1000,height=450,scrollbars=yes,location=1,resizable=yes');
        return false;
    });

    $("a[type='member']").click(function () {
        //window.open($(this).attr("href"), 'member', 'width=1000,height=700,scrollbars=yes,location=1,resizable=yes');
        //return false;
    });

    var affiliate_window;
    $("a[type='affiliate']").click(function () {
        try { affiliate_window.close(); } catch (e) { }
        affiliate_window = window.open((window.location.protocol + "//affiliate" + ((window.location.hostname.split(".").length > 2) ? window.location.hostname.substring(window.location.hostname.indexOf('.'), window.location.hostname.length) : "." + window.location.hostname)), $(this).attr("type"));
        return false;
    });

    var rewards_window;
    $("a[type='rewards']").click(function () {
        try { rewards_window.close(); } catch (e) { }
        rewards_window = window.open((window.location.protocol + "//rewards" + ((window.location.hostname.split(".").length > 2) ? window.location.hostname.substring(window.location.hostname.indexOf('.'), window.location.hostname.length) : "." + window.location.hostname)), $(this).attr("type"), 'width=1088,height=768,scrollbars=yes,location=no,resizable=yes');
        return false;
    });
    $("a[type='rewardsv2']").click(function () {
        try { rewards_window.close(); } catch (e) { }
        rewards_window = window.open((window.location.protocol + "//rewards" + ((window.location.hostname.split(".").length > 2) ? window.location.hostname.substring(window.location.hostname.indexOf('.'), window.location.hostname.length) : "." + window.location.hostname)) + $(this).attr("href"), $(this).attr("type"), 'width=1088,height=768,scrollbars=yes,location=no,resizable=yes');
        return false;
    });

    $("a[type='account']").click(function () {
        //window.open($(this).attr("href"), 'account', 'width=1000,height=700,scrollbars=yes,location=1,resizable=yes');
        //return false;
    });

    $("a[type='loader']").click(function () {
        window.open($(this).attr("href"), "loader", 'width=1000,height=700,scrollbars=yes,location=1,resizable=yes');
        return false;
    });

    $("div.float.column").click(function (event) {
        if ($(this).closest("div").find("a:first").attr("target") && $(this).closest("div").find("a:first").attr("target") != "_blank") {
            window.open($(this).closest("div").find("a:first").attr("href"), $(this).closest("div").find("a:first").attr("target"), "width=1024,height=768,scrollbars=yes,location=1,resizable=yes");
        }
        else if ($(this).closest("div").find("a:first").attr("target") && $(this).closest("div").find("a:first").attr("target") == "_blank") {
            //$(this).closest("div").find("a:first").click();
            window.open($(this).closest("div").find("a:first").attr("href"), $(this).closest("div").find("a:first").attr("target"));
        }
        else {
            window.location = $(this).closest("div").find("a:first").attr("href")
        }
        return false;
    })

    $("div.float.column a").click(function (e) {
        if ($(this).attr("target") && $(this).attr("target") != "_blank") {
            window.open($(this).attr("href"), $(this).attr("target"), "width=1024,height=768,scrollbars=yes,location=1,resizable=yes");
        }
        else if ($(this).attr("target") && $(this).attr("target") == "_blank") {
            $(this)[0].click();
        }
        else {
            window.location = $(this).attr("href");
        }
        return false;
    })

    var subcontent,
		subcontentSub;

    $('.mainMenu a.hover.subcontent_button, .mainMenu a.subcontent_sub').hover(
		function () {
		    if ($(this).hasClass('subcontent_sub')) {
		        $(this).show();

		        return;
		    } else {
		        if (!$(this).hasClass('hover')) {
		            $('a.hover.withIndicator').removeClass('hover withIndicator');
		            $(this).addClass('hover withIndicator');
		        }

		        $("div.subcontent_holder div." + $(this).data('subcontent')).show();
		        $("div.subcontent_holder div." + $(this).data('subcontent')).stop(true, true).slideDown(function () {
		            
		        });
		    }

		    clearTimeout(subcontentSub);
		},
		function () {
		    var div = !($(this).hasClass('subcontent_sub'))
				? $("div.subcontent_holder div." + $(this).data('subcontent'))
				: $(this);

		    if ($(div).is(':hover'))
		        return;

		    subcontentSub = setTimeout(function () {
		        if ($(div).is(':hover'))
		            return;

		        $(div).stop(true, true)
					.slideUp();
		    }, 1000);
		}
	);

    $('.mainMenu div.subcontent_sub').hover(
		function () { },
		function () {
		    var me = this;

		    subcontentSub = setTimeout(function () {
		        $(me).stop(true, true)
					.slideUp();
		    }, 1000);
		}
	);

    $(".mainMenu  a.subcontent").hover(
		function () {  // on mouseover
		    if (!$(this).hasClass("hover")) {
		        $("a.subcontent.withIndicator").removeClass("hover withIndicator");
		        $(this).addClass("hover withIndicator");
		    }
		    $("div.subcontent_holder>div>div").hide();
		    $("div.subcontent_holder div." + $(this).data('subcontent')).show();
		    $("div.subcontent_holder").stop(true, true).slideDown(function () {
		        //$(".subMenu").css("top", function (index) {
		        //	return $("div.subcontent_holder").height() + $(".mainMenu").height();
		        //});
		        
		    });
		    clearTimeout(subcontent);
		    //event.preventDefault();
		}
	);

    $(".mainMenu .menuContent a:not('.subcontent')").hover(function () {
        $("div.subcontent_holder").stop(true, true).slideUp(); $("a.subcontent.withIndicator").removeClass("hover withIndicator");
        //$(".subMenu").css("top", "auto");
    });


    $("div.subcontent_holder").hover(
		function () {  // on mouseover
		    clearTimeout(subcontent);
		}
	);

    $(".headerMenu").hover(
		function () {  // on mouseover
		    //$(".subMenu").slideDown();
		    //clearTimeout(hideMenu);
		},
		function () {  // on mouseout
		    //hideMenu = setTimeout(function () { $(".subMenu").stop(true, true).slideUp(); }, 1000);
		    subcontent = setTimeout(function () {
		        $("div.subcontent_holder").stop(true, true).slideUp(); $("a.subcontent.withIndicator").removeClass("hover withIndicator");
		        //$(".subMenu").css("top", "auto");
		    }, 1000);
		}
	);

    $("a").hover(function () {
        if ($(this).children("i[class*='_arrow']").length > 0) {
            if ($(this).children("i[class*='_arrow']").hasClass("sprite_blue_arrow")) {
                $(this).children("i[class*='_arrow']").attr('class', $(this).children("i[class*='_arrow']").attr('class').replace("sprite_blue_arrow", "sprite_light_blue_arrow"));
            }
            else if ($(this).children("i[class*='_arrow']").hasClass("sprite_grey_arrow")) {
                $(this).children("i[class*='_arrow']").attr('class', $(this).children("i[class*='_arrow']").attr('class').replace("sprite_grey_arrow", "sprite_white_arrow"));
            }
        }
    }
	, function () {
	    if ($(this).children("i[class*='_arrow']").length > 0) {
	        if ($(this).children("i[class*='_arrow']").hasClass("sprite_light_blue_arrow")) {
	            $(this).children("i[class*='_arrow']").attr('class', $(this).children("i[class*='_arrow']").attr('class').replace("sprite_light_blue_arrow", "sprite_blue_arrow"));
	        }
	        else if ($(this).children("i[class*='_arrow']").hasClass("sprite_white_arrow")) {
	            $(this).children("i[class*='_arrow']").attr('class', $(this).children("i[class*='_arrow']").attr('class').replace("sprite_white_arrow", "sprite_grey_arrow"));
	        }
	    }
	});

    $("img[type='hover']").each(function () {
        $(this).hover(
			function () {  // on mouseover
			    $(this).attr("originalImg", $(this).prop("src")); // save original
			    if ($(this).attr("data-imageover")) {
			        $(this).attr("src", $(this).attr("data-imageover"));
			    }
			    else {
			        $(this).attr("src", $(this).attr("src").replace("_off", "_on"));
			    }
			},
			function () {  // on mouseout
			    $(this).attr("src", $(this).attr("originalImg")); // change to original
			});
    });

    $("[type='sprite_hover']").each(function () {
        $(this).hover(
			function () {  // on mouseover
			    $(this).attr("originalClass", $(this).attr("class")); // save original
			    $(this).attr("class", $(this).attr("class").replace("_off", "_on"));
			},
			function () {  // on mouseout
			    $(this).attr("class", $(this).attr("originalClass"));
			});
    });

    if ($("#changepassword_form").length) {
        $("#changepassword_form input").focusout(function () {
            $(this).closest("td.validate_input").next("td").next("td").find("div.success").remove();
            $(this).valid();
        });
        $("#changepassword_form").validate({
            rules: {
                password: {
                    required: true, minlength: 6,
                    maxlength: 20
                },
                new_password: {
                    required: true, minlength: 6,
                    maxlength: 20
                },
                confirm_password: { required: true, equalTo: "#new_password" }
            },
            errorElement: "div",
            errorPlacement: function (error, element) {
                $(element).closest("td.validate_input").next("td").html("");
                var icon = $("<i>")
				.attr("for", element.name)
				.addClass('sprite_error').appendTo($(element).closest("td.validate_input").next("td"));
            },
            success: function (label, element) {
                $(element).closest("td.validate_input").next("td").html("");
                $(element).closest("td.validate_input").next("td").next("td").html("");
                $("<label>")
				.attr("for", $(element).attr("id"))
				.addClass('sprite_correct').appendTo($(element).closest("td.validate_input").next("td"));
            }
        });
    }
});

/*hide not accessible language*/
$(function () {
    $("a[class^='lang-']").each(function () {
        if ($(this).attr("href") == "#") {
            $(this).hover(function () {
                $(this).find("i").data("class", $(this).find("i").attr("class"));
                $(this).find("i").removeClass($(this).find("i").data("class"));
            }, function () {
                $(this).find("i").addClass($(this).find("i").data("class"));
            });
        }
    });
});

function openLanguagelist() {
    if ($("ul.languageSpecial").parent()[0] !== $("a.languageOpener")[0]) {
        var element = $('ul.languageSpecial').detach();
        $("a.languageOpener").append(element);
    }
    if ($("ul.languageSpecial").is(":hidden")) {
        $("ul.languageSpecial").show();
        $("a.languageOpener").addClass("open");
    }
    else {
        $("ul.languageSpecial").hide();
        $("a.languageOpener").removeClass("open");
    }
}

function openColorlist() {
    if ($("ul.colorSelector").parent()[0] !== $("a.colorOpener")[0]) {
        var element = $('ul.colorSelector').detach();
        $("a.colorOpener").append(element);
    }
    if ($("ul.colorSelector").is(":hidden")) {
        $("a.colorOpener").addClass("open");
        $("ul.colorSelector").show();
    }
}

var isIdle = false;

$(function () {
    // Idle function to lessen loginStatus check
    var jsGlobal = utility.getFromStorage(true, "jsGlobal");
    var loginInterval;

    $(document).idle({
        onIdle: function () {
            // callback when idle for about xx secs (base on jsGlobal idleTimeout)
            isIdle = true;
            console.log('idle');
            // clear the interval so that when user is idle, we don't have task running in background
            if (loginInterval)
                clearInterval(loginInterval);
        },
        onActive: function () {
            // callback when cursor is move or user not idle
            isIdle = false;
            //console.log('active');
            // set the interval again
            loginInterval = setInterval(function () { checkLoginStatus() }, 60000);
        },
        onHide: function() {
            //console.log('hidden');
        },
        onShow: function () {
            //console.log('shown');
        },
        idle: (jsGlobal || {}).idleTimeout || 30000
    });


    //auto timer & updat timer
    if ($("#time").length) {
        getRealIp();
        checkLoginStatus();
        updatePMessage();
        setTimeout(updateAnnouncement, 500);

        //run interval functions for update
        setInterval(function () { autoTiming() }, 1000);
        loginInterval = setInterval(function () { checkLoginStatus() }, 60000);
    }

    //hover function
    $("a[data-toggle='popover']").popover();

    //popover fix
    /*$('html').on('mouseup', function (e) {
		if (!$(e.target).closest('.popover').length) {
			$('.popover').each(function () {
				$(this.previousSibling).popover('hide');
			});
		}
	});*/

    /*$("body").on('focus', ':not(.popover)', function () {
		$('.popover').popover('hide');
	});*/

    $('body').on('click', function (e) {
        $("ul.languageSpecial").hide();
        $("a.languageOpener").removeClass("open");
        $("ul.colorSelector").hide();
        $("a.colorOpener").removeClass("open");
        $('a[data-toggle="popover"]').each(function () {
            //the 'is' for buttons that triggers popups
            //the 'has' for icons within a button that triggers a popup
            if (!$(this).is(e.target) && $(this).has(e.target).length === 0 && $('.popover').has(e.target).length === 0) {
                $(this).popover('hide');
            }

            if ($(e.target).is('#login_popover, #login_popover *, #login_button')) {
                return;
            }
            else {
                $("#login_popover").hide();
            }
        });
    });
});



$(function () {
    //main
    if ($('#carousel').length > 0) {
        setTimeout(function () {
            $('#carousel').carouFredSel({
                width: '100%',
                height: '100%',
                items: {
                    visible: 1
                },
                scroll: {
                    queue: "last",
                    items: 1,
                    duration: 1000,
                    timeoutDuration: 5000,
                    onBefore: function (data) {
                        var page = $("#carousel").triggerHandler("currentPage");
                        page += 2;
                        if (page > data.items.old.prevObject.length) {
                            page -= data.items.old.prevObject.length;
                        }
                        $("#paging").html(page + "/" + data.items.old.prevObject.length);
                        $("#carousel>.slide>div").hide();
                        var interval = 0;
                        var refreshSprite;
                        refreshSprite = setInterval(function () {
                            interval += 1;
                            $("div.sprite>i").removeClass().addClass("c_" + interval);
                            if (interval == 32) {
                                interval = 0;
                                clearInterval(refreshSprite);
                            }
                        }, 14);
                    },
                    onAfter: function (data) {
                        $("#carousel>.slide:eq(0)>div").slideDown();
                    }
                },
                onCreate: function (data) {
                    $("#carousel").closest("div.caroufredsel_wrapper").css("height", 524);
                    $("#carousel>.slide:eq(0)>div").slideDown();
                },
                auto: {
                    play: true,
                    delay: 5000,
                    timeoutDuration: 5000,
                    progress: {
                        bar: "#bar",
                        updater: function (percentage) {
                            $(this).width(percentage + "%");
                            $("div.sprite>i").removeClass().addClass("c_" + (Math.floor(percentage / 3.225) + 1));
                        }
                    }
                },
                prev: '#prev1',
                next: '#next1'
			, pagination: {
			    container: '#pager',
			    deviation: 1,
			    anchorBuilder: function (nr) {
			        return '<a href="#" class="thumb' + nr + '"><img src="' + $(this).children('img:first').attr('src') + '"  /></a>';
			    }
			}
            });
            if (($.browser.msie && parseInt($.browser.version, 10) === 7)) {
                $('#carousel').triggerHandler("slideTo", 0);
            }
        }, 10);
    }
});
$(function () {
    if ($("div.page_background").length > 0 && $("div.page_background>div.item").length > 1) {
        $("div.page_background_navigation").show();
        $("div.page_background").show();
        setTimeout(function () {
            initial_main_carousel();
        }, 500);
    }
    else {
        $("div.display_area").html($("div.page_background>div.item>div.display_text").html());
    }
});
$(function () {
    if ($("div.sub_carosel").length > 0) {
        $("div.sub_carosel").carouFredSel({
            width: '100%',
            height: '130px',
            items: {
                visible: 1
            },
            auto: {
                play: true
            },
            onCreate: function (data) {
                $("div.sub_carosel").css("left", 0);
            },
            pagination: {
                container: '#sub_carosel_page',
                anchorBuilder: function (nr) {
                    return '<a href="#" class="paging"></a>';
                }
            }
        });
    }
});
initial_main_carousel = function () {
    try { $("div.page_background").carouFredSel("destroy"); } catch (e) { }
    if ($("div.page_background").length > 0 && $("div.page_background>div.item").length > 1) {
        $("div.page_background").carouFredSel({
            width: '100%',
            height: '100%',
            items: {
                visible: 1,
                width: '960px',
                height: '647px'
            },
            scroll:
			{
			    fx: "fade",
			    onBefore: function (data) {
			        var page = $("div.page_background").triggerHandler("currentPage");
			        $("div.display_area").fadeOut('fast', function () {
			            $("div.display_area").html($(data.items.visible[0]).find("div.display_text").html());
			            $("div.display_area").fadeIn('slow');
			        });
			        page += 1;
			        if (page > data.items.old.prevObject.length) {
			            page -= data.items.old.prevObject.length;
			        }
			        $("#paging").html("<span class='blue'>" + page + "</span>/" + data.items.old.prevObject.length);
			        var interval = 0;
			        var refreshSprite;
			        refreshSprite = setInterval(function () {
			            interval += 1;
			            $("span.sprite>i").removeClass().addClass("c_" + interval);
			            if (interval == 32) {
			                interval = 0;
			                clearInterval(refreshSprite);
			            }
			        }, 14);
			    }
			},
            onCreate: function (data) {
                var page = $("div.page_background").triggerHandler("currentPage");
                $("div.display_area").fadeOut('fast', function () {
                    $("div.display_area").html($(data.items[0]).find("div.display_text").html());
                    $("div.display_area").fadeIn('slow');
                });
                page += 1;
                $("#paging").html("<span class='blue'>" + page + "</span>/" + $(this).children().length);
            },
            prev: '#prev',
            next: '#next',
            auto: {
                play: true,
                timeoutDuration: 5000,
                progress: {
                    bar: "#bar",
                    updater: function (percentage) {
                        $("span.sprite>i").removeClass().addClass("c_" + (Math.floor(percentage / 3.225) + 1));
                    }
                }
            }
        });
    }
}
initial_content_promo_slot_carousel = function () {
    try { $("div.content_promo_slot").carouFredSel("destroy"); } catch (e) { }
    if ($("div.content_promo_slot .content_promo_item").length > 0) {
        $("div.content_promo_slot").carouFredSel({
            width: '304px',
            height: '462px',
            items: {
                visible: 1
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
            onCreate: function (data) {
                //$("div.sub_carosel").css("left", 0);
            }
			, scroll: {
			    fx: "scroll",
			    duration: 500
			}
			,
            pagination: {
                container: 'div.content_promo_slot_wrapper #pager',
                anchorBuilder: function (nr) {
                    return '<a href="#" class="thumb"><i class="timer_0"></i></a>';
                }
            },
            //, direction: "up"
        });
    }
    else {
        $("div.content_promo_slot").closest(".content_promo_slot_wrapper").remove();
        setTimeout(function () {
            $(window).trigger("hashchange");
        }, 500);
    }
}

$(function () {
    if ($("div.content_promo").length > 0) {
        $("div.content_promo").carouFredSel({
            width: '304px',
            height: '154px',
            items: {
                visible: 1
            },
            auto: {
                play: true
            },
            onCreate: function (data) {
                //$("div.sub_carosel").css("left", 0);
            },
            direction: "up"
        });
    }

    if ($("div.content_promo_slot_bravado").length > 0) {
        $("div.content_promo_slot_bravado").carouFredSel({
            width: '304px',
            height: '462px',
            items: {
                visible: 1
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
            onCreate: function (data) {
                //$("div.sub_carosel").css("left", 0);
            }
			, scroll: {
			    fx: "crossfade",
			    duration: 500
			}
			,
            pagination: {
                container: 'div.content_promo_slot_wrapper #pager',
                anchorBuilder: function (nr) {
                    return '<a href="#" class="thumb"><i class="timer_0"></i></a>';
                }
            },
            //, direction: "up"
        });
    }
    initial_content_promo_slot_carousel();
});
$(function () {
    if ($("div.float.column div.main_content_carousel").length > 0) {
        $("div.float.column div.main_content_carousel").each(function (i) {
            $(this).carouFredSel({
                items: {
                    visible: 1
                },
                auto: {
                    play: true,
                    delay: i * 2000,
                    timeoutDuration: 4000
                },
                scroll: {
                    fx: "fade",
                    duration: 1000
                }
            });
        });
    }
});

var livechat_timeout;
$(function () {
    $("div.live_chat").hover(function () {
        clearTimeout(livechat_timeout);
        $(this).animate({ right: 0 });
    }, function () {
        livechat_timeout = setTimeout(function () {
            $("div.live_chat").animate({ right: -126 });
        }, 1000);
    });
});
/************pop up************/
function closeHomePopup() {
    $(".home_popup").hide("slow");
}

$(function () {
    $(document).click(function (e) {
        if (!$(e.target).is('.home_popup, .home_popup *,.headerContent,.headerContent *,.live_chat_v2,.live_chat_v2 * ')) {
            $(".home_popup").hide("slow");
        }
    });

    setTimeout(function () {
        closeHomePopup();
    }, 8000);
});

/*************hoome page product****************/
$(function () {
    $("table.home_btm_product a").hover(function () {
        $(this).children("img").each(function () {
            if ($(this).attr("src").indexOf("_off.") >= 0) {
                $(this).attr("src", $(this).attr("src").replace("_off.", "_on."));
            }
        });
    }, function () {
        $(this).children("img").each(function () {
            if ($(this).attr("src").indexOf("_on.") >= 0) {
                $(this).attr("src", $(this).attr("src").replace("_on.", "_off."));
            }
        });
    });
});

function adjust_BalanceHeight() {
    if ($("#balanceFrame").length) {
        $("#balanceFrame").css("height", document.getElementById('balanceFrame').contentWindow.document.body.offsetHeight);
    }
}

function load_worldcupinfo() {
    var wcLang = "";
    switch (lang) {
        case "id-id": wcLang = "id"; break;
        case "ko-kr": wcLang = "ko"; break;
        case "th-th": wcLang = "th"; break;
        case "zh-cn": wcLang = "zh"; break;
        default: wcLang = "en"; break;
    }
    window.open("http://ls.betradar.com/ls/livescore/?/w88/" + wcLang + "/page/worldcup_matchcenter", 'wc_info');
    if (loginStatus) {
        location.href = domain_www + "/Sports/";
    } else {
        load_asports();
    }
}



var load_Mahjong = function (game) {
    if (loginStatus || game == "fun" || game == "howtoplaydomain" || game == "downloaddomain") {
        if (game == "howtoplaydomain" || game == "downloaddomain") {
            window.open("/TexasMahjong/Launcher.aspx?game=" + game, game);
        }
        else {
            window.open("/TexasMahjong/Launcher.aspx?game=" + game, 'mahjong');
        }

    } else {
        //location.href = "/TexasMahjong/";
        showLogin();
    }
}

$(function () {
    $("#marquee").css("marginLeft", $(".marquee .float:first").width() + "px");
});
var marqueeFunction = function () {
    if ($("#marquee").length) {
        clearTimeout(marqueeTimeout);
        $("#marquee").show();
        $("#marquee").html($("<div />").html($("#marquee").html()));
        $("#marquee div:first").css("position", "relative");
        marqueeTimeout = setTimeout(function () {
            moveMarqueeLeft();
        }, 100);
        $("#marquee").hover(function () {
            clearTimeout(marqueeTimeout);
        }, function () {
            marqueeTimeout = setTimeout(function () {
                moveMarqueeLeft();
            }, 100);
        });
    }
}

var marqueeTimeout;
moveMarqueeLeft = function () {
    var parentwidth = 960 - parseInt($("#marquee").css("marginLeft").replace("px", ""));
    if ($("#marquee div:first").width() > parentwidth &&
		(-parseInt($("#marquee div:first").css("left".replace("px", ""))) < ($("#marquee div:first").width()) ||
		($("#marquee div:first").css("left") == "auto" || $("#marquee div:first").css("left") == "0"))) {
        if ($("#marquee div:first").css("left") == "auto" || $("#marquee div:first").css("left") == "0") {
            $("#marquee div:first").css("left", "-1px");
            clearTimeout(marqueeTimeout);
            marqueeTimeout = setTimeout(function () {
                moveMarqueeLeft();
            }, 150);
        }
        else {
            $("#marquee div:first").css("left", (parseInt($("#marquee div:first").css("left".replace("px", ""))) - 3) + "px");
            clearTimeout(marqueeTimeout);
            marqueeTimeout = setTimeout(function () {
                moveMarqueeLeft();
            }, 100);
        }
    }

    if (-parseInt($("#marquee div:first").css("left".replace("px", ""))) >= ($("#marquee div:first").width())) {
        $("#marquee div:first").css("left", parentwidth + "px");
        clearTimeout(marqueeTimeout);
        marqueeTimeout = setTimeout(function () {
            moveMarqueeLeft();
        }, 100);
    }
}




create_bravado_game = function (detailed, club) {
    var function_name = "load_bravado_link";
    if (detailed["@hidetest"] === "1") {
        function_name = "load_play_link";
    }

    var game =
		$("<div />").addClass("games").addClass(detailed["@provider"]).attr("id", detailed["@game"])
		.append(
			$("<div />").addClass("image").append($("<img />").attr("src", "/_static/_css/img/loading.gif").attr('data-src', "/_static/games/bravado/thumbnail/" + detailed["@image"]))
		)
		.append(
			$("<div />").addClass("name")
						.append(
							$("<div />").addClass("opacity_content")
								.append($("<div />").addClass("opacity_background"))
								.append($("<div />").addClass("opacity_content").append($("<div />").append(detailed["@name"])))
						)
		)
		.append(
			(detailed["@special"] !== "1" ?
			$("<div />").addClass("game_button_play").append($("<a />").append(lbl_play).attr("href", "javascript:" + function_name + "('" + detailed["@game"] + ((detailed["@alt"]) ? "_alt" : "") + "','real'" + ",'" + club + "'" + (detailed["@category"] ? ",'" + detailed["@category"] + "'" : "") + ")"))
			:
			$("<div />").addClass("game_button_play").append($("<a />").append(detailed["@special_link_translation"]).attr("href", detailed["@special_link"]))
			)
		)
		.append(
			(detailed["@hd"] ?
			$("<div />").addClass("game_button_play " + ((detailed["@hd"] && detailed["@ld"]) ? "hd_button" : "")).append($("<a />").append($("<img />").attr("src", "/_static/games/bravado/hd.png")).attr("href", "javascript:" + function_name + "('" + detailed["@game"] + "_hd" + ((detailed["@alt"]) ? "_alt" : "") + "','real'" + ",'" + club + "'" + (detailed["@category"] ? ",'" + detailed["@category"] + "'" : "") + ")"))
			: "")
		)
		.append(
			(detailed["@ld"] ?
			$("<div />").addClass("game_button_play " + ((detailed["@hd"] && detailed["@ld"]) ? "ld_button" : "")).append($("<a />").append($("<img />").attr("src", "/_static/games/bravado/sd.png")).attr("href", "javascript:" + function_name + "('" + detailed["@game"] + "_sd" + ((detailed["@alt"]) ? "_alt" : "") + "','real'" + ",'" + club + "'" + (detailed["@category"] ? ",'" + detailed["@category"] + "'" : "") + ")"))
			: "")
		)
		.append(
			(detailed["@special"] !== "1" ?
			$("<div />").addClass("game_button_try clear").append($("<a />").append(lbl_try).attr("href", "javascript:" + function_name + "('" + detailed["@game"] + ((detailed["@alt"]) ? "_alt" : "") + "','fun'" + ",'" + club + "'" + (detailed["@category"] ? ",'" + detailed["@category"] + "'" : "") + ")"))
			:
			""
			)
		).append(
		(detailed["@progressive"] ? $("<div />").addClass("game_progressive").attr("data-campaign", detailed["@campaign"]).append("$$$$$$") : $("<div />"))
	);
    return game;
}

closeLoginModal = function () {
    $('#loginFrame').modal('hide');
};

hide_slots = function () {

    if ($('#slot_provider').linkselect('val') == "ALL") {
        $('.games_menu .games').show();
    } else {
        $('.games_menu .games').hide();
        $('.games_menu .' + $('#slot_provider').linkselect('val')).show();
    }

    $(window).trigger("scroll");

};
//Adjust Category Menu With
$(function () {

    switch ($('.game_category a').length) {
        case 3:
            $('.game_category a').css('width', '319px');
            break;
        case 5:
            $('.game_category a').css('width', '180px');
            $('.game_category a:eq(4)').css('width', '230px');
            break;
        default:
            $('.game_category a').css('width', 'auto');
            break;
    }

});

//Fishing Master
$(function () {
    $(document).on('show.bs.modal hide.bs.modal', '#fishingmaster_IOS', function (e) {
        var $modal = $(e.target),
            $elemTriggered = $(document.activeElement),
            isCurrency = $elemTriggered.data('currency');

        if (e.type === 'show' && isCurrency === 1)
            return $modal.data('currency', isCurrency);

        return $modal.removeData('currency');
    });
});

//Utility lib
(function (window) {

    this.utility = new function () {
        var self = this;

        self.TryParseInt = function (str, defaultValue) {
            defaultValue = defaultValue || 0;
            var retValue = defaultValue;
            if (str) {
                if (str.toString().length > 0) {
                    if (!isNaN(str)) {
                        retValue = parseInt(str);
                    }
                }
            }
            return retValue;
        };

        //#region Ajax Call
        self.DoAjaxPost = function (url, postData, customHeaders, successCallBack, failedCallBack, contentType) {
            $.ajax({
                url: url,
                type: 'POST',
                contentType: contentType || "application/json",
                dataType: "json",
                data: JSON.stringify(postData),
                timeout: 60000,
                beforeSend: function (xhr) {
                    //set custom headers here
                    if (customHeaders) {
                        for (var name in customHeaders) {
                            if (customHeaders.hasOwnProperty(name)) {
                                xhr.setRequestHeader(name, customHeaders[name]);
                            }
                        }
                    }
                },
                success: function (data) {
                    if (successCallBack && typeof successCallBack === 'function')
                        successCallBack(data);
                },
                error: function (xmlHttpRequest, textStatus, errorThrown) {
                    if (failedCallBack && typeof failedCallBack === 'function') {
                        var msg = self.logAJAXError(url, postData, xmlHttpRequest, errorThrown);
                        failedCallBack(msg);
                    }
                }
            });
        }
        self.DoAjaxGet = function (url, getData, customHeaders, successCallBack, failedCallBack, contentType, dataType) {
            $.ajax({
                url: url,
                type: 'GET',
                contentType: contentType || "application/json",
                dataType: dataType || "json",
                data: getData,
                timeout: 60000,
                beforeSend: function (xhr) {
                    //set custom headers here
                    if (customHeaders) {
                        for (var name in customHeaders) {
                            if (customHeaders.hasOwnProperty(name)) {
                                xhr.setRequestHeader(name, customHeaders[name]);
                            }
                        }
                    }
                },
                success: function (data) {
                    if (successCallBack && typeof successCallBack === 'function')
                        successCallBack(data);
                },
                error: function (xmlHttpRequest, textStatus, errorThrown) {
                    if (failedCallBack && typeof failedCallBack === 'function') {
                        var msg = self.logAJAXError(url, getData, xmlHttpRequest, errorThrown);
                        failedCallBack(msg);
                    }
                }
            });
        };

        self.DoAjaxGetJsonp = function (url, getData, customHeaders, successCallBack, failedCallBack) {
            $.ajax({
                url: url,
                type: 'GET',
                contentType: "application/json",
                dataType: "jsonp",
                data: getData,
                timeout: 60000,
                beforeSend: function (xhr) {
                    //set custom headers here
                    if (customHeaders) {
                        for (var name in customHeaders) {
                            if (customHeaders.hasOwnProperty(name)) {
                                xhr.setRequestHeader(name, customHeaders[name]);
                            }
                        }
                    }
                },
                success: function (data) {
                    if (successCallBack && typeof successCallBack === 'function')
                        successCallBack(data);
                },
                error: function (xmlHttpRequest, textStatus, errorThrown) {
                    if (failedCallBack && typeof failedCallBack === 'function') {
                        var msg = self.logAJAXError(url, getData, xmlHttpRequest, errorThrown);
                        failedCallBack(msg);
                    }
                }
            });
        };

        self.logAJAXError = function (url, requestData, XMLHttpRequest, errorThrown) {
            var errMsg;
            try {
                var errorObj = XMLHttpRequest.responseJSON ? XMLHttpRequest.responseJSON : JSON.parse(XMLHttpRequest.responseText);
                errMsg = String.format('{0} {1}', errorObj.Message, errorObj.ExceptionMessage);
            }
            catch (e) {
                errMsg = errorThrown;
            }

            return errMsg;
        };
        //#endregion

        //#region Local Storage
        self.getFromStorage = function (isSession, key) {
            var type = isSession ? 'session' : 'local';
            var storage = window[type + 'Storage'];

            if (storage) {
                var item = storage.getItem(key);
                if (item) {
                    item = JSON.parse(item);
                    if (item.expiredDate && item.expiredDate > 0) {
                        var isExpired = item.expiredDate < new Date().getTime();
                        if (isExpired) {
                            self.removeToStorage(isSession, key);
                            return null;
                        }
                    }
                    return item.data;
                }
            }
            return null;
        };
        self.removeToStorage = function (isSession, key) {
            var type = isSession ? 'session' : 'local';
            var storage = window[type + 'Storage'];

            if (storage)
                storage.removeItem(key);
        };
        self.storeToStorage = function (isSession, key, val, validityInMinutes) {
            validityInMinutes = validityInMinutes || 0;
            val = JSON.stringify({
                data: val,
                expiredDate: validityInMinutes > 0 ? new Date().getTime() + (validityInMinutes * 60 * 1000) : null
            });

            if (isSession) {
                if (sessionStorage && sessionStorage != undefined)
                    sessionStorage.setItem(key, val);
            }
            else {
                if (localStorage && localStorage != undefined)
                    localStorage.setItem(key, val);
            }
        };
        //#endregion     
    }
})(window);

/*GAMES Page functions*/
function loadLotteryGameWithTrial(product, trial, queryStr) {
    queryStr = queryStr || '';
    if (trial) {
        load_lottery("/lottery/launcherv2.aspx?game=" + product + "&mode=try" + queryStr, product);
        return;
    }

    loginStatus ? load_lottery("/lottery/launcherv2.aspx?game=" + product + queryStr, product) : showLogin();
};

function loadSuperBullWithTrial(product, trial) {
    if (trial)
        return open_launcher(String.format("/Superbull/Launcher?game={0}&t=1", product), "superbull");
    else
        loginStatus ? open_launcher(String.format("/Superbull/Launcher?game={0}&t=0", product), "superbull") : showLogin();
}

function loadP2PGame(product, trial) {
    if (!loginStatus)
        return showLogin();

    open_launcher(String.format("/P2P/Launcher?game={0}&t=0", product), "p2p");
}

function loadPokerGame(product, trial) {
    if (!loginStatus)
        return showLogin();

    open_launcher(domain_www + "/Poker/Launcher?game=" + product + "&t=0", "poker");
}

function loadDominoQQGame(product, trial) {
    if (trial)
        return open_launcher(domain_www + "/Domino/Launcher?game=" + product + "&t=1", "dominoqq");
    else
        loginStatus ? open_launcher(domain_www + "/Domino/Launcher?game=" + product + "&t=0", "dominoqq") : showLogin();
}

function loadMomoFishingGame(product, trial) {
    if (trial)
        return open_launcher(domain_www + "/MomoFishing/Launcher?game=" + product + "&t=1", "momofishing");
    else
        loginStatus ? open_launcher(domain_www + "/MomoFishing/Launcher?game=" + product + "&t=0", "momofishing") : showLogin();
}

function loadP2PTexasHoldemPoker(product, trial) {
    if (trial)
        return open_launcher(domain_www + "/P2P/Poker/Launcher?game=" + product + "&t=1", "texasHoldemPoker");
    else
        loginStatus ? open_launcher(domain_www + "/P2P/Poker/Launcher?game=" + product + "&t=0", "texasHoldemPoker") : showLogin();
}


//set user session storage data
function setUserSessionStorageData(data) {
    var udata = utility.getFromStorage(true, "udata");
    $.extend(true, udata, data || {});

    utility.storeToStorage(true, "udata", data);
};

//set session storage data
function setSessionStorageData(key, data) {
    var d = utility.getFromStorage(true, key);
    $.extend(true, d, data || {});

    utility.storeToStorage(true, key, data);
}

//appInsights
//Called when my app has identified the user.
function authenticateInAppInsigths(signInId, sessionId, memId) {
    if (signInId) {
        var id = signInId.toString();
        if (id.length && id !== "0") {
            var validatedId = id.replace(/[,;=| ]+/g, "_");
            var validatedSesId = sessionId.replace(/[,;=| ]+/g, "_");
            if (typeof appInsights !== "undefined")
                appInsights.setAuthenticatedUserContext(validatedId, validatedSesId);
            //appInsights.context.user.id = memId;
        }
    }
};

function getRealIp() {
    var udata = utility.getFromStorage(true, "udata");
    if (!$.cookie("clientIp")) {
        
    }
};

//slots top winners
function getSlotsTopWinner(product, currency, successCallBack, failedCallBack) {
    var headers = { Authorization: 'Bearer ' + window.ftkn };
    var udata = utility.getFromStorage(true, "udata");
    var url = String.format("/_secure/ajax/api/product/slots/winners/top/{0}/{1}",
        udata.lang,
        currency);
    var data = { product: product };

    utility.DoAjaxGet(url, data, headers, successCallBack, failedCallBack);
};

function getSlotsTopWinnerAll(currency, successCallBack, failedCallBack) {
    var headers = { Authorization: 'Bearer ' + window.ftkn };
    var udata = utility.getFromStorage(true, "udata");
    var url = String.format("/_secure/ajax/api/product/slots/winners/top/all/{0}/{1}",
        udata.lang,
        currency);    

    utility.DoAjaxGet(url, null, headers, successCallBack, failedCallBack);
};

//slots progressive
function getSlotsJackpotProgressive(currency, provider, successCallBack, failedCallBack) {
    var headers = { Authorization: 'Bearer ' + window.ftkn };
    var url = String.format("/_secure/ajax/api/product/progressive/{0}", currency);
    var data = { provider: provider };

    utility.DoAjaxGet(url, data, headers, successCallBack, failedCallBack);
};