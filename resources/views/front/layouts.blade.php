<!DOCTYPE html>
<!--[if IE 8]> <html lang="{{app()->getLocale()}}" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="{{app()->getLocale()}}" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="{{app()->getLocale()}}" itemscope
      itemtype="http://schema.org/Article"
      prefix="og: http://ogp.me/ns#" class="no-js">
<!--<![endif]-->
<head>
    <meta name="robots"
          content="noindex, nofollow, nosnippet, noarchive, none, noodp, notranslate, noimageindex, unavailable_after: 7 Jul 2007 16:30:00 GMT">
    <meta name="google-site-verification" content="5Nl_vJi9oWZMx7phswAZVO-sQnbAVzbhjDmBbo9Vqfs"/>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    @yield('css')
    <!-- END PAGE LEVEL PLUGINS -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon-precomposed" sizes="57x57"
          href="/images/apple-touch-icon-57x57.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
          href="/images/apple-touch-icon-114x114.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="72x72"
          href="/images/apple-touch-icon-72x72.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
          href="/images/apple-touch-icon-144x144.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="60x60"
          href="/images/apple-touch-icon-60x60.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="120x120"
          href="/images/apple-touch-icon-120x120.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="76x76"
          href="/images/apple-touch-icon-76x76.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="152x152"
          href="/images/apple-touch-icon-152x152.png"/>
    <link rel="icon" type="image/png"
          href="/images/favicon-196x196.png"
          sizes="196x196"/>
    <link rel="icon" type="image/png"
          href="/images/favicon-96x96.png"
          sizes="96x96"/>
    <link rel="icon" type="image/png"
          href="/images/favicon-32x32.png"
          sizes="32x32"/>
    <link rel="icon" type="image/png"
          href="/images/favicon-16x16.png"
          sizes="16x16"/>
    <link rel="icon" type="image/png"
          href="/images/favicon-128.png"
          sizes="128x128"/>
    <meta name="application-name" content="NordVPN"/>
    <meta name="msapplication-TileColor" content="#FFFFFF"/>
    <meta name="msapplication-TileImage"
          content="/images/mstile-144x144.png"/>
    <meta name="msapplication-square70x70logo"
          content="/images/mstile-70x70.png"/>
    <meta name="msapplication-square150x150logo"
          content="/images/mstile-150x150.png"/>
    <meta name="msapplication-wide310x150logo"
          content="/images/mstile-310x150.png"/>

    <link href="//www.google-analytics.com" rel="dns-prefetch">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <script type="text/javascript">
        window.NREUM || (NREUM = {}), __nr_require = function (e, t, n) {
            function r(n) {
                if (!t[n]) {
                    var o = t[n] = {exports: {}};
                    e[n][0].call(o.exports, function (t) {
                        var o = e[n][1][t];
                        return r(o || t)
                    }, o, o.exports)
                }
                return t[n].exports
            }

            if ("function" == typeof __nr_require) return __nr_require;
            for (var o = 0; o < n.length; o++) r(n[o]);
            return r
        }({
            1: [function (e, t, n) {
                function r() {
                }

                function o(e, t, n) {
                    return function () {
                        return i(e, [f.now()].concat(u(arguments)), t ? null : this, n), t ? void 0 : this
                    }
                }

                var i = e("handle"), a = e(2), u = e(3), c = e("ee").get("tracer"), f = e("loader"), s = NREUM;
                "undefined" == typeof window.newrelic && (newrelic = s);
                var p = ["setPageViewName", "setCustomAttribute", "setErrorHandler", "finished", "addToTrace", "inlineHit", "addRelease"],
                    d = "api-", l = d + "ixn-";
                a(p, function (e, t) {
                    s[t] = o(d + t, !0, "api")
                }), s.addPageAction = o(d + "addPageAction", !0), s.setCurrentRouteName = o(d + "routeName", !0), t.exports = newrelic, s.interaction = function () {
                    return (new r).get()
                };
                var m = r.prototype = {
                    createTracer: function (e, t) {
                        var n = {}, r = this, o = "function" == typeof t;
                        return i(l + "tracer", [f.now(), e, n], r), function () {
                            if (c.emit((o ? "" : "no-") + "fn-start", [f.now(), r, o], n), o) try {
                                return t.apply(this, arguments)
                            } catch (e) {
                                throw c.emit("fn-err", [arguments, this, e], n), e
                            } finally {
                                c.emit("fn-end", [f.now()], n)
                            }
                        }
                    }
                };
                a("setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","), function (e, t) {
                    m[t] = o(l + t)
                }), newrelic.noticeError = function (e) {
                    "string" == typeof e && (e = new Error(e)), i("err", [e, f.now()])
                }
            }, {}], 2: [function (e, t, n) {
                function r(e, t) {
                    var n = [], r = "", i = 0;
                    for (r in e) o.call(e, r) && (n[i] = t(r, e[r]), i += 1);
                    return n
                }

                var o = Object.prototype.hasOwnProperty;
                t.exports = r
            }, {}], 3: [function (e, t, n) {
                function r(e, t, n) {
                    t || (t = 0), "undefined" == typeof n && (n = e ? e.length : 0);
                    for (var r = -1, o = n - t || 0, i = Array(o < 0 ? 0 : o); ++r < o;) i[r] = e[t + r];
                    return i
                }

                t.exports = r
            }, {}], 4: [function (e, t, n) {
                t.exports = {exists: "undefined" != typeof window.performance && window.performance.timing && "undefined" != typeof window.performance.timing.navigationStart}
            }, {}], ee: [function (e, t, n) {
                function r() {
                }

                function o(e) {
                    function t(e) {
                        return e && e instanceof r ? e : e ? c(e, u, i) : i()
                    }

                    function n(n, r, o, i) {
                        if (!d.aborted || i) {
                            e && e(n, r, o);
                            for (var a = t(o), u = m(n), c = u.length, f = 0; f < c; f++) u[f].apply(a, r);
                            var p = s[y[n]];
                            return p && p.push([b, n, r, a]), a
                        }
                    }

                    function l(e, t) {
                        v[e] = m(e).concat(t)
                    }

                    function m(e) {
                        return v[e] || []
                    }

                    function w(e) {
                        return p[e] = p[e] || o(n)
                    }

                    function g(e, t) {
                        f(e, function (e, n) {
                            t = t || "feature", y[n] = t, t in s || (s[t] = [])
                        })
                    }

                    var v = {}, y = {},
                        b = {on: l, emit: n, get: w, listeners: m, context: t, buffer: g, abort: a, aborted: !1};
                    return b
                }

                function i() {
                    return new r
                }

                function a() {
                    (s.api || s.feature) && (d.aborted = !0, s = d.backlog = {})
                }

                var u = "nr@context", c = e("gos"), f = e(2), s = {}, p = {}, d = t.exports = o();
                d.backlog = s
            }, {}], gos: [function (e, t, n) {
                function r(e, t, n) {
                    if (o.call(e, t)) return e[t];
                    var r = n();
                    if (Object.defineProperty && Object.keys) try {
                        return Object.defineProperty(e, t, {value: r, writable: !0, enumerable: !1}), r
                    } catch (i) {
                    }
                    return e[t] = r, r
                }

                var o = Object.prototype.hasOwnProperty;
                t.exports = r
            }, {}], handle: [function (e, t, n) {
                function r(e, t, n, r) {
                    o.buffer([e], r), o.emit(e, t, n)
                }

                var o = e("ee").get("handle");
                t.exports = r, r.ee = o
            }, {}], id: [function (e, t, n) {
                function r(e) {
                    var t = typeof e;
                    return !e || "object" !== t && "function" !== t ? -1 : e === window ? 0 : a(e, i, function () {
                        return o++
                    })
                }

                var o = 1, i = "nr@id", a = e("gos");
                t.exports = r
            }, {}], loader: [function (e, t, n) {
                function r() {
                    if (!x++) {
                        var e = h.info = NREUM.info, t = d.getElementsByTagName("script")[0];
                        if (setTimeout(s.abort, 3e4), !(e && e.licenseKey && e.applicationID && t)) return s.abort();
                        f(y, function (t, n) {
                            e[t] || (e[t] = n)
                        }), c("mark", ["onload", a() + h.offset], null, "api");
                        var n = d.createElement("script");
                        n.src = "https://" + e.agent, t.parentNode.insertBefore(n, t)
                    }
                }

                function o() {
                    "complete" === d.readyState && i()
                }

                function i() {
                    c("mark", ["domContent", a() + h.offset], null, "api")
                }

                function a() {
                    return E.exists && performance.now ? Math.round(performance.now()) : (u = Math.max((new Date).getTime(), u)) - h.offset
                }

                var u = (new Date).getTime(), c = e("handle"), f = e(2), s = e("ee"), p = window, d = p.document,
                    l = "addEventListener", m = "attachEvent", w = p.XMLHttpRequest, g = w && w.prototype;
                NREUM.o = {
                    ST: setTimeout,
                    SI: p.setImmediate,
                    CT: clearTimeout,
                    XHR: w,
                    REQ: p.Request,
                    EV: p.Event,
                    PR: p.Promise,
                    MO: p.MutationObserver
                };
                var v = "" + location, y = {
                        beacon: "bam.nr-data.net",
                        errorBeacon: "bam.nr-data.net",
                        agent: "js-agent.newrelic.com/nr-1071.min.js"
                    }, b = w && g && g[l] && !/CriOS/.test(navigator.userAgent),
                    h = t.exports = {offset: u, now: a, origin: v, features: {}, xhrWrappable: b};
                e(1), d[l] ? (d[l]("DOMContentLoaded", i, !1), p[l]("load", r, !1)) : (d[m]("onreadystatechange", o), p[m]("onload", r)), c("mark", ["firstbyte", u], null, "api");
                var x = 0, E = e(4)
            }, {}]
        }, {}, ["loader"]);
    </script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript">
        var adminAjax = "https://nordwebsite.net/wp-admin/admin-ajax.php";
    </script>


    <!-- All in One SEO Pack 2.4.3 by Michael Torbert of Semper Fi Web Design[166,201] -->
    <meta name="description"
          content="访问无限互联网! 享受3年的高速网络，价格每月最低达到2.75美元（大约17元） 没有 VPN，就没有安全可言。这是事实。 使用 NordVPN，确保您的在线活动安全、私密。 安全 Wi-Fi 使用 NordVPN 安全、可靠地接入公共热点后，您可以放心地查询资金账户余额、在线购物或使用社交媒体。只需轻轻一点，Nord"/>
    <meta name="robots" content="noindex,follow"/>

    <meta property="og:title" content="NordVPN特价 | NordVPN"/>
    <meta property="og:type" content="article"/>
    <meta property="og:url" content="https://nordwebsite.net/zh/special/china-deal/"/>
    <meta property="og:image" content="https://nordwebsite.net/wp-content/uploads/2017/12/holiday-deal-fb-01-1.png"/>
    <meta property="og:site_name" content="NordVPN"/>
    <meta property="og:description"
          content="Happy Holidays and a Secure New Year! Enjoy 3 years of online security for only $99!"/>
    <meta property="article:published_time" content="2017-12-06T10:32:15Z"/>
    <meta property="article:modified_time" content="2018-05-07T13:11:11Z"/>
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:title" content="NordVPN特价 | NordVPN"/>
    <meta name="twitter:description"
          content="Happy Holidays and a Secure New Year! Enjoy 3 years of online security for only $99!"/>
    <meta name="twitter:image" content="https://nordwebsite.net/wp-content/uploads/2017/12/holiday-deal-fb-01-1.png"/>
    <meta itemprop="image" content="https://nordwebsite.net/wp-content/uploads/2017/12/holiday-deal-fb-01-1.png"/>
    <!-- /all in one seo pack -->
    <link rel='dns-prefetch' href='//s1.nordwebsite.net'/>
    <link rel='dns-prefetch' href='//s.w.org'/>
    <script type='text/javascript' src='/js/front/jquery/1.12.4/jquery.min.js?ver=1.11.3'></script>
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://nordwebsite.net/xmlrpc.php?rsd"/>
    <link rel="wlwmanifest" type="application/wlwmanifest+xml"
          href="https://nordwebsite.net/wp-includes/wlwmanifest.xml"/>
    <link rel='shortlink' href='https://nordwebsite.net/zh/?p=56742'/>
    <link rel="alternate" type="application/json+oembed"
          href="https://nordwebsite.net/zh/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fnordwebsite.net%2Fzh%2Fspecial%2Fchina-deal%2F"/>
    <link rel="alternate" type="text/xml+oembed"
          href="https://nordwebsite.net/zh/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fnordwebsite.net%2Fzh%2Fspecial%2Fchina-deal%2F&#038;format=xml"/>
    <!-- Stream WordPress user activity plugin v3.2.2 -->
    <link rel="canonical" href="https://nordwebsite.net/zh/special/china-deal/"/>
    <script type="text/javascript">
        if (!window.dataLayer) {
            window.dataLayer = [];
        }

        // jQuery(window).load(function () {
        //     var googleTag = function () {
        //         (function (w, d, s, l, i) {
        //             w[l] = w[l] || [];
        //             w[l].push({
        //                 'gtm.start':
        //                     new Date().getTime(), event: 'gtm.js'
        //             });
        //             var f = d.getElementsByTagName(s)[0],
        //                 j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
        //             j.async = true;
        //             j.src =
        //                 '//www.googletagmanager.com/gtm.js?id=' + i + dl;
        //             f.parentNode.insertBefore(j, f);
        //         })(window, document, 'script', 'dataLayer', 'GTM-WX5CH8');
        //     };
        //
        //     googleTag();
        // });
    </script>
    <script type='text/javascript'>
        var _vwo_code = (function () {
            var account_id = 316979,
                settings_tolerance = 2000,
                library_tolerance = 2500,
                use_existing_jquery = false,
                /* DO NOT EDIT BELOW THIS LINE */
                f = false, d = document;
            return {
                use_existing_jquery: function () {
                    return use_existing_jquery;
                }, library_tolerance: function () {
                    return library_tolerance;
                }, finish: function () {
                    if (!f) {
                        f = true;
                        var a = d.getElementById('_vis_opt_path_hides');
                        if (a) a.parentNode.removeChild(a);
                    }
                }, finished: function () {
                    return f;
                }, load: function (a) {
                    var b = d.createElement('script');
                    b.src = a;
                    b.type = 'text/javascript';
                    b.innerText;
                    b.onerror = function () {
                        _vwo_code.finish();
                    };
                    d.getElementsByTagName('head')[0].appendChild(b);
                }, init: function () {
                    settings_timer = setTimeout('_vwo_code.finish()', settings_tolerance);
                    var a = d.createElement('style'),
                        b = 'body{opacity:0 !important;filter:alpha(opacity=0) !important;background:none !important;}',
                        h = d.getElementsByTagName('head')[0];
                    a.setAttribute('id', '_vis_opt_path_hides');
                    a.setAttribute('type', 'text/css');
                    if (a.styleSheet) a.styleSheet.cssText = b; else a.appendChild(d.createTextNode(b));
                    h.appendChild(a);
                    this.load('//dev.visualwebsiteoptimizer.com/j.php?a=' + account_id + '&u=' + encodeURIComponent(d.URL) + '&r=' + Math.random());
                    return settings_timer;
                }
            };
        }());
        _vwo_settings_timer = _vwo_code.init();
    </script>
    <script type="text/javascript">function sptRecordConversion(id) {
            jQuery.post("https://nordwebsite.net/wp-admin/admin-ajax.php", {
                action: "sptAjaxRecordConversion",
                sptID: id
            });
        }</script>
    <link rel="stylesheet" href="/css/front/normalize.css">
    <script type="text/javascript">
        "use strict";
        jQuery(document).ready(function () {
            !function (e) {
                var t = jQuery(".slide-container"), s = jQuery(".page-title-container");
                t.length > 0 && t.css("background-image", "url(" + e + ")"), s.length > 0 && s.css("background-image", "url(" + e + ")")
            }("https://s1.nordwebsite.net/nordvpn/0.34.0/images/checkout/main-bg.jpg"), jQuery.ajax({
                url: adminAjax,
                data: {action: "get_user_info_data"},
                success: function (e) {
                    var t = !0 === e.status ? "Secured" : "Unprotected",
                        s = !0 === e.status ? "secured" : "not-secured",
                        a = "" === e.isp || null === e.isp ? "Unknown" : e.isp,
                        n = "" === e.ip || null === e.ip ? "Unknown" : e.ip;
                    jQuery('[data-user="ip"]').html(n), jQuery('[data-user="isp"]').html(a), jQuery('[data-user="' + s + '"]').removeClass("hide"), jQuery('[data-user="status"]').html(t), jQuery(".connection-status").addClass(s), !0 === e.status && jQuery('[data-user="status"]').attr("href", "javascript" + String.fromCharCode(58) + "void(0);").css("pointer-events", "none"), jQuery(".user-info-box").slideDown("fast")
                }
            })
        });
    </script>
    <script type="text/javascript">
        !function (e) {
            function t(r) {
                if (n[r]) return n[r].exports;
                var o = n[r] = {i: r, l: !1, exports: {}};
                return e[r].call(o.exports, o, o.exports, t), o.l = !0, o.exports
            }

            var n = {};
            t.m = e, t.c = n, t.d = function (e, n, r) {
                t.o(e, n) || Object.defineProperty(e, n, {configurable: !1, enumerable: !0, get: r})
            }, t.n = function (e) {
                var n = e && e.__esModule ? function () {
                    return e.default
                } : function () {
                    return e
                };
                return t.d(n, "a", n), n
            }, t.o = function (e, t) {
                return Object.prototype.hasOwnProperty.call(e, t)
            }, t.p = "/public/", t(t.s = 130)
        }({
            130: function (e, t, n) {
                "use strict";
                var r = n(64);
                !function () {
                    function e(e) {
                        return window.localStorage && localStorage.fonts_css_cache && localStorage.fonts_css_cache_file === e
                    }

                    function t(e) {
                        var t = document.createElement("style");
                        t.setAttribute("type", "text/css"), document.getElementsByTagName("head")[0].appendChild(t), t.styleSheet ? t.styleSheet.cssText = e : t.innerHTML = e
                    }

                    function n() {
                        if (window.localStorage && window.XMLHttpRequest) if (e(o)) t(localStorage.fonts_css_cache); else {
                            var n = new XMLHttpRequest;
                            n.open("GET", o, !0), n.onreadystatechange = function () {
                                4 === n.readyState && 200 === n.status && (t(n.responseText), localStorage.fonts_css_cache = n.responseText, localStorage.fonts_css_cache_file = o)
                            }, n.send()
                        } else {
                            var r = document.createElement("link");
                            r.href = o, r.rel = "stylesheet", r.type = "text/css", document.getElementsByTagName("head")[0].appendChild(r), document.cookie = "fonts_css_cache"
                        }
                    }

                    var o = r.cdn + "fonts/gordita/fonts.css";
                    window.localStorage && localStorage.fonts_css_cache || document.cookie.indexOf("fonts_css_cache") > -1 ? n() : function (e, t, n) {
                        e.addEventListener ? e.addEventListener(t, n, !1) : e.attachEvent && e.attachEvent("on" + t, n)
                    }(window, "load", n)
                }()
            }, 64: function (e, t, n) {
                "use strict";
                (function (t) {
                    var n = t.env.APP_CDN || "https://s1.nordwebsite.net/nordvpn/3.28.0/";
                    e.exports = {cdn: n, build: "/build/", cdnVersion: "3.28.0"}
                }).call(t, n(65))
            }, 65: function (e, t, n) {
                "use strict";

                function r() {
                    throw new Error("setTimeout has not been defined")
                }

                function o() {
                    throw new Error("clearTimeout has not been defined")
                }

                function c(e) {
                    if (f === setTimeout) return setTimeout(e, 0);
                    if ((f === r || !f) && setTimeout) return f = setTimeout, setTimeout(e, 0);
                    try {
                        return f(e, 0)
                    } catch (t) {
                        try {
                            return f.call(null, e, 0)
                        } catch (t) {
                            return f.call(this, e, 0)
                        }
                    }
                }

                function i(e) {
                    if (d === clearTimeout) return clearTimeout(e);
                    if ((d === o || !d) && clearTimeout) return d = clearTimeout, clearTimeout(e);
                    try {
                        return d(e)
                    } catch (t) {
                        try {
                            return d.call(null, e)
                        } catch (t) {
                            return d.call(this, e)
                        }
                    }
                }

                function s() {
                    g && p && (g = !1, p.length ? m = p.concat(m) : v = -1, m.length && a())
                }

                function a() {
                    if (!g) {
                        var e = c(s);
                        g = !0;
                        for (var t = m.length; t;) {
                            for (p = m, m = []; ++v < t;) p && p[v].run();
                            v = -1, t = m.length
                        }
                        p = null, g = !1, i(e)
                    }
                }

                function u(e, t) {
                    this.fun = e, this.array = t
                }

                function l() {
                }

                var f, d, h = e.exports = {};
                !function () {
                    try {
                        f = "function" == typeof setTimeout ? setTimeout : r
                    } catch (e) {
                        f = r
                    }
                    try {
                        d = "function" == typeof clearTimeout ? clearTimeout : o
                    } catch (e) {
                        d = o
                    }
                }();
                var p, m = [], g = !1, v = -1;
                h.nextTick = function (e) {
                    var t = new Array(arguments.length - 1);
                    if (arguments.length > 1) for (var n = 1; n < arguments.length; n++) t[n - 1] = arguments[n];
                    m.push(new u(e, t)), 1 !== m.length || g || c(a)
                }, u.prototype.run = function () {
                    this.fun.apply(null, this.array)
                }, h.title = "browser", h.browser = !0, h.env = {}, h.argv = [], h.version = "", h.versions = {}, h.on = l, h.addListener = l, h.once = l, h.off = l, h.removeListener = l, h.removeAllListeners = l, h.emit = l, h.prependListener = l, h.prependOnceListener = l, h.listeners = function (e) {
                    return []
                }, h.binding = function (e) {
                    throw new Error("process.binding is not supported")
                }, h.cwd = function () {
                    return "/"
                }, h.chdir = function (e) {
                    throw new Error("process.chdir is not supported")
                }, h.umask = function () {
                    return 0
                }
            }
        });
    </script>
    <style type="text/css">
        .qtranxs-available-languages-message {
            display: none;
        }
        .Logo{

        }
    </style>
    <script type="text/javascript">
        !function (e) {
            function t(r) {
                if (n[r]) return n[r].exports;
                var o = n[r] = {i: r, l: !1, exports: {}};
                return e[r].call(o.exports, o, o.exports, t), o.l = !0, o.exports
            }

            var n = {};
            t.m = e, t.c = n, t.d = function (e, n, r) {
                t.o(e, n) || Object.defineProperty(e, n, {configurable: !1, enumerable: !0, get: r})
            }, t.n = function (e) {
                var n = e && e.__esModule ? function () {
                    return e.default
                } : function () {
                    return e
                };
                return t.d(n, "a", n), n
            }, t.o = function (e, t) {
                return Object.prototype.hasOwnProperty.call(e, t)
            }, t.p = "/public/", t(t.s = 141)
        }({
            141: function (e, t, n) {
                "use strict";
                n(142), n(144)
            }, 142: function (e, t, n) {
                "use strict";
                n(93)(n(143))
            }, 143: function (e, t) {
                e.exports = '!function(e){"use strict";var n=function(n,t,o){function i(e){if(a.body)return e();setTimeout(function(){i(e)})}function r(){l.addEventListener&&l.removeEventListener("load",r),l.media=o||"all"}var d,a=e.document,l=a.createElement("link");if(t)d=t;else{var f=(a.body||a.getElementsByTagName("head")[0]).childNodes;d=f[f.length-1]}var s=a.styleSheets;l.rel="stylesheet",l.href=n,l.media="only x",i(function(){d.parentNode.insertBefore(l,t?d:d.nextSibling)});var u=function(e){for(var n=l.href,t=s.length;t--;)if(s[t].href===n)return e();setTimeout(function(){u(e)})};return l.addEventListener&&l.addEventListener("load",r),l.onloadcssdefined=u,u(r),l};"undefined"!=typeof exports?exports.loadCSS=n:e.loadCSS=n}("undefined"!=typeof global?global:this);'
            }, 144: function (e, t, n) {
                "use strict";
                n(93)(n(145))
            }, 145: function (e, t) {
                e.exports = '!function(t){if(t.loadCSS){var e=loadCSS.relpreload={};if(e.support=function(){try{return t.document.createElement("link").relList.supports("preload")}catch(t){return!1}},e.poly=function(){for(var e=t.document.getElementsByTagName("link"),r=0;r<e.length;r++){var n=e[r];"preload"===n.rel&&"style"===n.getAttribute("as")&&(t.loadCSS(n.href,n,n.getAttribute("media")),n.rel=null)}},!e.support()){e.poly();var r=t.setInterval(e.poly,300);t.addEventListener&&t.addEventListener("load",function(){e.poly(),t.clearInterval(r)}),t.attachEvent&&t.attachEvent("onload",function(){t.clearInterval(r)})}}}(this);'
            }, 93: function (e, t) {
                e.exports = function (e) {
                    function t(e) {
                        "undefined" != typeof console && (console.error || console.log)("[Script Loader]", e)
                    }

                    try {
                        "undefined" != typeof execScript && function () {
                            return "undefined" != typeof attachEvent && "undefined" == typeof addEventListener
                        }() ? execScript(e) : "undefined" != typeof eval ? eval.call(null, e) : t("EvalError: No eval function available")
                    } catch (e) {
                        t(e)
                    }
                }
            }
        });
    </script>
    <link rel="preload" href="/css/front/base.css" onload="this.rel='stylesheet'"
          as="style">
    <noscript>
        <link rel="stylesheet" href="/css/front/base.css" type='text/css'
              media='all'>
    </noscript>
    <link rel="preload" href="/css/front/sprite.css"
          onload="this.rel='stylesheet'" as="style">
    <noscript>
        <link rel="stylesheet" href="/css/front/sprite.css" type='text/css'
              media='all'>
    </noscript>
    <meta name="robots"
          content="noindex, nofollow, nosnippet, noarchive, none, noodp, notranslate, noimageindex, unavailable_after: 7 Jul 2007 16:30:00 GMT">
</head>
<body class="page-template page-template-page-nord-style-v3-2-light-header-footer page-template-page-nord-style-v3-2-light-header-footer-php page page-id-56742 page-child parent-pageid-29187 zh-language">
<header class="Header Header--light">
    <nav class="Navigation Navigation--light">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-xs-6">
                    <a href="/front">
                        <img src="/images/logo1.svg"
                             alt="logo" class="Logo"/>
                        <img src="/images/logo2.png"
                             alt="logo" class="Logo"/>
                    </a>
                </div>

                <div class="col-xs-6 col-md-9 visible-xs visible-sm mt-3 text-right rtl-flip">
                    <button
                            type="button"
                            data-toggle="toggle"
                            data-target="sidebar"
                            data-body-class="Sidebar--active"
                            class="NavbarToggle NavbarToggle--light"
                    >
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar top-bar"></span>
                        <span class="icon-bar middle-bar"></span>
                        <span class="icon-bar bottom-bar"></span>
                    </button>
                </div>

                <div class="col-md-9 col-xs-12">
                    <div class="navbar-collapse Navigation__body">
                        <div class="HeaderMenu HeaderMenu--light">
                            <ul class="pull-sm-none pull-md-right pull-lg-right pull-xs-none">
                                {{--<li>--}}
                                    {{--<a--}}
                                            {{--href="/front/features"--}}
                                            {{--role="menuitem"--}}
                                            {{--class="Link mb-0"--}}
                                    {{-->--}}
                                        {{--<span>产品特性</span>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                <li>
                                    <a
                                            href="/front"
                                            role="menuitem"
                                            class="Link mb-0"
                                    >
                                        <span>首页</span>
                                    </a>
                                </li>
                                <li>
                                    <a
                                            href="/front/order"
                                            role="menuitem"
                                            class="Link mb-0"
                                    >
                                        <span>购买中心</span>
                                    </a>
                                </li>
                                {{--<li>--}}
                                    {{--<a--}}
                                            {{--href="/front/servers"--}}
                                            {{--role="menuitem"--}}
                                            {{--class="Link mb-0"--}}
                                    {{-->--}}
                                        {{--<span>服务器</span>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                <li>
                                    <a
                                            href="/front/download"
                                            role="menuitem"
                                            class="Link mb-0"
                                    >
                                        <span>下载中心</span>
                                    </a>
                                </li>
                                <li>
                                    <a
                                            href="/front/support"
                                            role="menuitem"
                                            class="Link mb-0"
                                    >
                                        <span>帮助中心</span>
                                    </a>
                                </li>
                                <li>
                                    @if(Session::has('user'))
                                        <a class="Button Button--primary Button--small" href="/user" role="button" tabindex="0"><span>我的账户</span></a>
                                        @else
                                        <a class="Button Button--primary Button--small" href="/login" role="button" tabindex="0"><span>登陆</span></a>
                                        <a class="Button Button--primary Button--small" href="/register" role="button" tabindex="0"><span>注册</span></a>
                                    @endif
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div id="sidebar" class="Sidebar">
        <div class="Sidebar__backdrop" data-toggle="toggle" data-target="sidebar"
             data-body-class="Sidebar--active"></div>
        <div class="Sidebar__body hidden-md hidden-lg">
            <div class="p-7 text-right">
                <button
                        type="button"
                        data-toggle="toggle"
                        data-target="sidebar"
                        data-body-class="Sidebar--active"
                        class="NavbarToggle active"
                >
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar top-bar"></span>
                    <span class="icon-bar middle-bar"></span>
                    <span class="icon-bar bottom-bar"></span>
                </button>
            </div>

            <div class="mb-12">
                <div class="px-8">
                    <div class="SidebarMenu">
                        <ul>
                            {{--<li>--}}
                                {{--<a href="/front/features">产品特性</a>--}}
                            {{--</li>--}}
                            <li>
                                <a href="/front">首页</a>
                            </li>
                            <li>
                                <a href="/front/order">购买中心</a>
                            </li>
                            {{--<li>--}}
                                {{--<a href="/front/servers">服务器</a>--}}
                            {{--</li>--}}
                            <li>
                                <a href="/front/download">下载中心</a>
                            </li>
                            <li>
                                <a href="/front/support">帮助中心</a>
                            </li>
                            @if(Session::has('user'))
                                <li>
                                    <a href="/user"><span>我的账户</span></a>
                                </li>
                            @else
                                <li>
                                    <a href="/login"><span>登陆</span></a>
                                </li>
                                <li>
                                    <a href="/register"><span>注册</span></a>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
@yield('content')
<footer class="Footer">
    <div class="container">
        <div class="my-sm-12 my-md-14" style="margin-top: 30px;margin-bottom: 10px">
            <div class="col-md-6 col-md-offset-3 col-sm-12 Footer__menu" style="text-align: center">
                <div class="col-xs-6 col-sm-3">
                    <a href="/front/aboutus">
                        <div class="p-3 p-sm-0">
                            <div class="text-uppercase text-ellipsis micro text-muted mb-6">
                                <strong>关于我们</strong>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xs-6 col-sm-3">
                    <a href="/front/privacy">
                        <div class="p-3 p-sm-0">
                            <div class="text-uppercase text-ellipsis micro text-muted mb-6">
                                <strong>隐私服务</strong>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xs-6 col-sm-3">
                    <a href="/front/survice">
                        <div class="p-3 p-sm-0">
                            <div class="text-uppercase text-ellipsis micro text-muted mb-6">
                                <strong>使用条款</strong>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xs-6 col-sm-3">
                    <a href="/front/support">
                        <div class="p-3 p-sm-0">
                            <div class="text-uppercase text-ellipsis micro text-muted mb-6">
                                <strong>帮助中心</strong>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>

<div id="fb-root"></div>
<div class="staging-env"></div>
<noscript>
    <iframe
            src="https://www.googletagmanager.com/ns.html?id=GTM-WX5CH8"
            height="0"
            width="0"
            style="display:none;visibility:hidden"
    ></iframe>
</noscript>
<script data-cfasync="false" src="/js/front/email-decode.min.js"></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var countVars = {"disqusShortname": "nordvpn-com-blog"};
    /* ]]> */
</script>
<script type='text/javascript'
        src='/js/front/comment_count.js'></script>
<script type='text/javascript'
        src='/js/front/compiled.min.js'></script>
<script type='text/javascript' src='/js/front/base.min.js'></script>
<script type="text/javascript">window.NREUM || (NREUM = {});
    NREUM.info = {
        "beacon": "bam.nr-data.net",
        "licenseKey": "d9efa7b778",
        "applicationID": "133839972",
        "transactionName": "MlEANUFZDBFSAUMKXwsbIwJHUQ0MHBJWBFVIWg0TVxURFkoOUk5GVhlQTF9RBQpHT18GUQFREExVVw0WVhA=",
        "queueTime": 0,
        "applicationTime": 162,
        "atts": "HhYDQwlDHx8=",
        "errorBeacon": "bam.nr-data.net",
        "agent": ""
    }</script>
</html>