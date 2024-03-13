<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1, minimum-scale=1, target-densitydpi=device-dpi" />
    <title>Zyan &#8211; Personal Portfolio Theme</title>
    <meta name='robots' content='max-image-preview:large' />
    <link rel='dns-prefetch' href='//fonts.googleapis.com' />
    <link rel="alternate" type="application/rss+xml" title="Zyan - Personal Portfolio Theme &raquo; Feed"
        href="https://wp.shsarker.xyz/zyan/feed/" />
    <link rel="alternate" type="application/rss+xml" title="Zyan - Personal Portfolio Theme &raquo; Comments Feed"
        href="https://wp.shsarker.xyz/zyan/comments/feed/" />

    <script type="text/javascript">
    /* <![CDATA[ */
    window._wpemojiSettings = {
        "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/",
        "ext": ".png",
        "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/",
        "svgExt": ".svg",
        "source": {
            "concatemoji": "https:\/\/wp.shsarker.xyz\/zyan\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.4.2"
        }
    };
    /*! This file is auto-generated */
    ! function(i, n) {
        var o, s, e;

        function c(e) {
            try {
                var t = {
                    supportTests: e,
                    timestamp: (new Date).valueOf()
                };
                sessionStorage.setItem(o, JSON.stringify(t))
            } catch (e) {}
        }

        function p(e, t, n) {
            e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0);
            var t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data),
                r = (e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0), new Uint32Array(e
                    .getImageData(0, 0, e.canvas.width, e.canvas.height).data));
            return t.every(function(e, t) {
                return e === r[t]
            })
        }

        function u(e, t, n) {
            switch (t) {
                case "flag":
                    return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !
                        n(e, "\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") && !n(e,
                            "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f",
                            "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f"
                            );
                case "emoji":
                    return !n(e, "\ud83e\udef1\ud83c\udffb\u200d\ud83e\udef2\ud83c\udfff",
                        "\ud83e\udef1\ud83c\udffb\u200b\ud83e\udef2\ud83c\udfff")
            }
            return !1
        }

        function f(e, t, n) {
            var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(
                    300, 150) : i.createElement("canvas"),
                a = r.getContext("2d", {
                    willReadFrequently: !0
                }),
                o = (a.textBaseline = "top", a.font = "600 32px Arial", {});
            return e.forEach(function(e) {
                o[e] = t(a, e, n)
            }), o
        }

        function t(e) {
            var t = i.createElement("script");
            t.src = e, t.defer = !0, i.head.appendChild(t)
        }
        "undefined" != typeof Promise && (o = "wpEmojiSettingsSupports", s = ["flag", "emoji"], n.supports = {
            everything: !0,
            everythingExceptFlag: !0
        }, e = new Promise(function(e) {
            i.addEventListener("DOMContentLoaded", e, {
                once: !0
            })
        }), new Promise(function(t) {
            var n = function() {
                try {
                    var e = JSON.parse(sessionStorage.getItem(o));
                    if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() <
                        e.timestamp + 604800 && "object" == typeof e.supportTests) return e.supportTests
                } catch (e) {}
                return null
            }();
            if (!n) {
                if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" !=
                    typeof URL && URL.createObjectURL && "undefined" != typeof Blob) try {
                    var e = "postMessage(" + f.toString() + "(" + [JSON.stringify(s), u.toString(), p
                            .toString()
                        ].join(",") + "));",
                        r = new Blob([e], {
                            type: "text/javascript"
                        }),
                        a = new Worker(URL.createObjectURL(r), {
                            name: "wpTestEmojiSupports"
                        });
                    return void(a.onmessage = function(e) {
                        c(n = e.data), a.terminate(), t(n)
                    })
                } catch (e) {}
                c(n = f(s, u, p))
            }
            t(n)
        }).then(function(e) {
            for (var t in e) n.supports[t] = e[t], n.supports.everything = n.supports.everything && n
                .supports[t], "flag" !== t && (n.supports.everythingExceptFlag = n.supports
                    .everythingExceptFlag && n.supports[t]);
            n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag, n
                .DOMReady = !1, n.readyCallback = function() {
                    n.DOMReady = !0
                }
        }).then(function() {
            return e
        }).then(function() {
            var e;
            n.supports.everything || (n.readyCallback(), (e = n.source || {}).concatemoji ? t(e
                .concatemoji) : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)))
        }))
    }((window, document), window._wpemojiSettings);
    /* ]]> */
    </script>
    <style id='wp-emoji-styles-inline-css' type='text/css'>
    img.wp-smiley,
    img.emoji {
        display: inline !important;
        border: none !important;
        box-shadow: none !important;
        height: 1em !important;
        width: 1em !important;
        margin: 0 0.07em !important;
        vertical-align: -0.1em !important;
        background: none !important;
        padding: 0 !important;
    }
    </style>
    <link rel='stylesheet' id='wp-block-library-css' href='./wp-includes/css/dist/block-library/style.min.css?ver=6.4.2'
        type='text/css' media='all' />
    <style id='classic-theme-styles-inline-css' type='text/css'>
    /*! This file is auto-generated */

    .wp-block-button__link {
        color: #fff;
        background-color: #32373c;
        border-radius: 9999px;
        box-shadow: none;
        text-decoration: none;
        padding: calc(.667em + 2px) calc(1.333em + 2px);
        font-size: 1.125em
    }

    .wp-block-file__button {
        background: #32373c;
        color: #fff;
        text-decoration: none
    }
    </style>
    <style id='global-styles-inline-css' type='text/css'>
    body {
        --wp--preset--color--black: #000000;
        --wp--preset--color--cyan-bluish-gray: #abb8c3;
        --wp--preset--color--white: #ffffff;
        --wp--preset--color--pale-pink: #f78da7;
        --wp--preset--color--vivid-red: #cf2e2e;
        --wp--preset--color--luminous-vivid-orange: #ff6900;
        --wp--preset--color--luminous-vivid-amber: #fcb900;
        --wp--preset--color--light-green-cyan: #7bdcb5;
        --wp--preset--color--vivid-green-cyan: #00d084;
        --wp--preset--color--pale-cyan-blue: #8ed1fc;
        --wp--preset--color--vivid-cyan-blue: #0693e3;
        --wp--preset--color--vivid-purple: #9b51e0;
        --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
        --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
        --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
        --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
        --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
        --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
        --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
        --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
        --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
        --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
        --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
        --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
        --wp--preset--font-size--small: 13px;
        --wp--preset--font-size--medium: 20px;
        --wp--preset--font-size--large: 36px;
        --wp--preset--font-size--x-large: 42px;
        --wp--preset--spacing--20: 0.44rem;
        --wp--preset--spacing--30: 0.67rem;
        --wp--preset--spacing--40: 1rem;
        --wp--preset--spacing--50: 1.5rem;
        --wp--preset--spacing--60: 2.25rem;
        --wp--preset--spacing--70: 3.38rem;
        --wp--preset--spacing--80: 5.06rem;
        --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
        --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
        --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
        --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
        --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
    }

    :where(.is-layout-flex) {
        gap: 0.5em;
    }

    :where(.is-layout-grid) {
        gap: 0.5em;
    }

    body .is-layout-flow>.alignleft {
        float: left;
        margin-inline-start: 0;
        margin-inline-end: 2em;
    }

    body .is-layout-flow>.alignright {
        float: right;
        margin-inline-start: 2em;
        margin-inline-end: 0;
    }

    body .is-layout-flow>.aligncenter {
        margin-left: auto !important;
        margin-right: auto !important;
    }

    body .is-layout-constrained>.alignleft {
        float: left;
        margin-inline-start: 0;
        margin-inline-end: 2em;
    }

    body .is-layout-constrained>.alignright {
        float: right;
        margin-inline-start: 2em;
        margin-inline-end: 0;
    }

    body .is-layout-constrained>.aligncenter {
        margin-left: auto !important;
        margin-right: auto !important;
    }

    body .is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
        max-width: var(--wp--style--global--content-size);
        margin-left: auto !important;
        margin-right: auto !important;
    }

    body .is-layout-constrained>.alignwide {
        max-width: var(--wp--style--global--wide-size);
    }

    body .is-layout-flex {
        display: flex;
    }

    body .is-layout-flex {
        flex-wrap: wrap;
        align-items: center;
    }

    body .is-layout-flex>* {
        margin: 0;
    }

    body .is-layout-grid {
        display: grid;
    }

    body .is-layout-grid>* {
        margin: 0;
    }

    :where(.wp-block-columns.is-layout-flex) {
        gap: 2em;
    }

    :where(.wp-block-columns.is-layout-grid) {
        gap: 2em;
    }

    :where(.wp-block-post-template.is-layout-flex) {
        gap: 1.25em;
    }

    :where(.wp-block-post-template.is-layout-grid) {
        gap: 1.25em;
    }

    .has-black-color {
        color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-color {
        color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-color {
        color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-color {
        color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-color {
        color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-color {
        color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-color {
        color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-color {
        color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-color {
        color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-color {
        color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-color {
        color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-color {
        color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-black-background-color {
        background-color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-background-color {
        background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-background-color {
        background-color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-background-color {
        background-color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-background-color {
        background-color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-background-color {
        background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-background-color {
        background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-background-color {
        background-color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-background-color {
        background-color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-background-color {
        background-color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-background-color {
        background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-background-color {
        background-color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-black-border-color {
        border-color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-border-color {
        border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-border-color {
        border-color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-border-color {
        border-color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-border-color {
        border-color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-border-color {
        border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-border-color {
        border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-border-color {
        border-color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-border-color {
        border-color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-border-color {
        border-color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-border-color {
        border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-border-color {
        border-color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
        background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
    }

    .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
        background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
    }

    .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
        background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-orange-to-vivid-red-gradient-background {
        background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
    }

    .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
        background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
    }

    .has-cool-to-warm-spectrum-gradient-background {
        background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
    }

    .has-blush-light-purple-gradient-background {
        background: var(--wp--preset--gradient--blush-light-purple) !important;
    }

    .has-blush-bordeaux-gradient-background {
        background: var(--wp--preset--gradient--blush-bordeaux) !important;
    }

    .has-luminous-dusk-gradient-background {
        background: var(--wp--preset--gradient--luminous-dusk) !important;
    }

    .has-pale-ocean-gradient-background {
        background: var(--wp--preset--gradient--pale-ocean) !important;
    }

    .has-electric-grass-gradient-background {
        background: var(--wp--preset--gradient--electric-grass) !important;
    }

    .has-midnight-gradient-background {
        background: var(--wp--preset--gradient--midnight) !important;
    }

    .has-small-font-size {
        font-size: var(--wp--preset--font-size--small) !important;
    }

    .has-medium-font-size {
        font-size: var(--wp--preset--font-size--medium) !important;
    }

    .has-large-font-size {
        font-size: var(--wp--preset--font-size--large) !important;
    }

    .has-x-large-font-size {
        font-size: var(--wp--preset--font-size--x-large) !important;
    }

    .wp-block-navigation a:where(:not(.wp-element-button)) {
        color: inherit;
    }

    :where(.wp-block-post-template.is-layout-flex) {
        gap: 1.25em;
    }

    :where(.wp-block-post-template.is-layout-grid) {
        gap: 1.25em;
    }

    :where(.wp-block-columns.is-layout-flex) {
        gap: 2em;
    }

    :where(.wp-block-columns.is-layout-grid) {
        gap: 2em;
    }

    .wp-block-pullquote {
        font-size: 1.5em;
        line-height: 1.6;
    }
    </style>
    <link rel='stylesheet' id='contact-form-7-css'
        href='./wp-content/plugins/contact-form-7/includes/css/styles.css?ver=5.8.2' type='text/css' media='all' />
    <link rel='stylesheet' id='zyan_fonts-css'
        href='https://fonts.googleapis.com/css2?family=Poppins%3Aital%2Cwght%400%2C100%3B0%2C200%3B0%2C300%3B0%2C400%3B0%2C500%3B0%2C600%3B0%2C700%3B0%2C800%3B0%2C900%3B1%2C100%3B1%2C200%3B1%2C300%3B1%2C400%3B1%2C500%3B1%2C600%3B1%2C700%3B1%2C800%3B1%2C900&#038;display=swap&#038;ver=1702371204'
        type='text/css' media='all' />
    <link rel='stylesheet' id='font-awesome-pro-css'
        href='./wp-content/themes/zyan_1/assets/css/font-awesome-pro.css?ver=1.0.0' type='text/css' media='all' />
    <link rel='stylesheet' id='iconsax-icon-css'
        href='./wp-content/themes/zyan_1/assets/css/iconsax-icon.min.css?ver=1.0.0' type='text/css' media='all' />
    <link rel='stylesheet' id='bootstrap-css-css'
        href='./wp-content/themes/zyan_1/assets/css/bootstrap.min.css?ver=1.0.0' type='text/css' media='all' />
    <link rel='stylesheet' id='scroll_button-css-css'
        href='./wp-content/themes/zyan_1/assets/css/scroll_button.css?ver=1.0.0' type='text/css' media='all' />
    <link rel='stylesheet' id='zyan-plugins-css' href='./wp-content/themes/zyan_1/assets/css/plugin.css?ver=1.0.0'
        type='text/css' media='all' />
    <link rel='stylesheet' id='spacing-css-css' href='./wp-content/themes/zyan_1/assets/css/spacing.css?ver=1.0.0'
        type='text/css' media='all' />
    <link rel='stylesheet' id='zyan-unit-css' href='./wp-content/themes/zyan_1/assets/css/zyan-unit.css?ver=1.0.0'
        type='text/css' media='all' />
    <link rel='stylesheet' id='zyan-core-css' href='./wp-content/themes/zyan_1/assets/css/zyan-core.css?ver=1.0.0'
        type='text/css' media='all' />
    <link rel='stylesheet' id='zyan-responsive-css'
        href='./wp-content/themes/zyan_1/assets/css/responsive.css?ver=1.0.0' type='text/css' media='all' />
    <link rel='stylesheet' id='zyan-style-css' href='./wp-content/themes/zyan_1/style.css?ver=1.0.0' type='text/css'
        media='all' />
    <link rel='stylesheet' id='elementor-icons-css'
        href='./wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css?ver=5.23.0' type='text/css'
        media='all' />
    <link rel='stylesheet' id='elementor-frontend-css'
        href='./wp-content/plugins/elementor/assets/css/frontend-lite.min.css?ver=3.17.1' type='text/css' media='all' />
    <link rel='stylesheet' id='swiper-css'
        href='./wp-content/plugins/elementor/assets/lib/swiper/v8/css/swiper.min.css?ver=8.4.5' type='text/css'
        media='all' />
    <link rel='stylesheet' id='elementor-post-8-css' href='./wp-content/uploads/elementor/css/post-8.css?ver=1700155091'
        type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-global-css' href='./wp-content/uploads/elementor/css/global.css?ver=1700155091'
        type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-346-css'
        href='./wp-content/uploads/elementor/css/post-346.css?ver=1700155091' type='text/css' media='all' />
    <link rel='stylesheet' id='google-fonts-1-css'
        href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=swap&#038;ver=6.4.2'
        type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-icons-shared-0-css'
        href='./wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min.css?ver=5.15.3' type='text/css'
        media='all' />
    <link rel='stylesheet' id='elementor-icons-fa-solid-css'
        href='./wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.min.css?ver=5.15.3' type='text/css'
        media='all' />
    <link rel='stylesheet' id='elementor-icons-cf-fontawesome-icons-css'
        href='./wp-content/plugins/cf-core/assets/css/fontawesome-all.min.css?ver=1.0.0' type='text/css' media='all' />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <script type="text/javascript" src="./wp-includes/js/jquery/jquery.min.js?ver=3.7.1" id="jquery-core-js"></script>
    <script type="text/javascript" src="./wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1" id="jquery-migrate-js">
    </script>
    <link rel="https://api.w.org/" href="https://wp.shsarker.xyz/zyan/wp-json/" />
    <link rel="alternate" type="application/json" href="https://wp.shsarker.xyz/zyan/wp-json/wp/v2/pages/346" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://wp.shsarker.xyz/zyan/xmlrpc.php?rsd" />
    <meta name="generator" content="WordPress 6.4.2" />
    <link rel="canonical" href="https://wp.shsarker.xyz/zyan/" />
    <link rel='shortlink' href='https://wp.shsarker.xyz/zyan/' />
    <link rel="alternate" type="application/json+oembed"
        href="https://wp.shsarker.xyz/zyan/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwp.shsarker.xyz%2Fzyan%2F" />
    <link rel="alternate" type="text/xml+oembed"
        href="https://wp.shsarker.xyz/zyan/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwp.shsarker.xyz%2Fzyan%2F&#038;format=xml" />
    <meta name="cdp-version" content="1.4.3" />
    <meta name="generator"
        content="Elementor 3.17.1; features: e_dom_optimization, e_optimized_assets_loading, e_optimized_css_loading, additional_custom_breakpoints; settings: css_print_method-external, google_font-enabled, font_display-swap">
    <style type="text/css">
    .recentcomments a {
        display: inline !important;
        padding: 0 !important;
        margin: 0 !important;
    }
    </style>
    <link rel="icon" href="./wp-content/uploads/2023/10/cropped-favicon-32x32.png" sizes="32x32" />
    <link rel="icon" href="./wp-content/uploads/2023/10/cropped-favicon-192x192.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="./wp-content/uploads/2023/10/cropped-favicon-180x180.png" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <meta name="msapplication-TileImage" content="./wp-content/uploads/2023/10/cropped-favicon-270x270.png" />
    <style id="kirki-inline-styles">
    .tf__breadcrumb {
        background-image: url("./wp-content/uploads/2023/10/breadcrumb.jpg");
    }

    .tf__subscribe {
        background-image: url("./wp-content/uploads/2023/10/subscribe-scaled.jpg");
    }

    #footer_2 svg path {
        stroke: #55E6A5;
    }

    .footer {
        background: #02050A;
        background-color: #02050A;
        background-repeat: repeat;
        background-position: center center;
        background-attachment: scroll;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -ms-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }

    #footer svg path {
        stroke: #55E6A5;
    }

    :root {
        --colorPrimary: #55e6a5;
        --bodyBg: #02050a;
        --bgColor: #09101a;
        --bodyColor: #a2a2a2;
        --colorWhite: #fff;
        --colorBlack: #02050a;
    }

    body,
    p,
    span {
        font-family: Poppins;
    }

    /* devanagari */

    @font-face {
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 400;
        font-display: swap;
        src: url(/home5/shsarker/public_html/wp.shsarker.xyz/zyan/wp-content/fonts/poppins/pxiEyp8kv8JHgFVrJJbedHFHGPezSQ.woff) format('woff');
        unicode-range: U+0900-097F, U+1CD0-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FF;
    }

    /* latin-ext */

    @font-face {
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 400;
        font-display: swap;
        src: url(/home5/shsarker/public_html/wp.shsarker.xyz/zyan/wp-content/fonts/poppins/pxiEyp8kv8JHgFVrJJnedHFHGPezSQ.woff) format('woff');
        unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */

    @font-face {
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 400;
        font-display: swap;
        src: url(/home5/shsarker/public_html/wp.shsarker.xyz/zyan/wp-content/fonts/poppins/pxiEyp8kv8JHgFVrJJfedHFHGPc.woff) format('woff');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    /* devanagari */

    @font-face {
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 400;
        font-display: swap;
        src: url(/home5/shsarker/public_html/wp.shsarker.xyz/zyan/wp-content/fonts/poppins/pxiEyp8kv8JHgFVrJJbedHFHGPezSQ.woff) format('woff');
        unicode-range: U+0900-097F, U+1CD0-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FF;
    }

    /* latin-ext */

    @font-face {
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 400;
        font-display: swap;
        src: url(/home5/shsarker/public_html/wp.shsarker.xyz/zyan/wp-content/fonts/poppins/pxiEyp8kv8JHgFVrJJnedHFHGPezSQ.woff) format('woff');
        unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    /* latin */

    @font-face {
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 400;
        font-display: swap;
        src: url(/home5/shsarker/public_html/wp.shsarker.xyz/zyan/wp-content/fonts/poppins/pxiEyp8kv8JHgFVrJJfedHFHGPc.woff) format('woff');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }
    </style>
</head>

<body
    class="home page-template-default page page-id-346 wp-embed-responsive elementor-default elementor-template-full-width elementor-kit-8 elementor-page elementor-page-346">
    <div class="zyan-body">

        <div class="preloader">
            <svg viewBox="0 0 1000 1000" preserveAspectRatio="none">
                <path id="svg" d="M0,1005S175,995,500,995s500,5,500,5V0H0Z"></path>
            </svg>
            <h5 class="preloader-text">Loading</h5>
        </div>

        <i class="fa-solid fa-bars"></i>


        <nav class="navbar navbar-expand-lg main_menu">
            <div class="container main_menu_bg">
                <a class="navbar-brand" href="https://wp.shsarker.xyz/zyan/">
                    <img src="./wp-content/themes/zyan_1/assets/img/logo/logo.png" alt="ZYAN" class="img-fluid w-100" />
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa-solid fa-bars"></i>
                    <i class="fa-regular fa-xmark close_icon"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul id="menu-menu-1" class="navbar-nav m-auto">
                        <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement"
                            id="menu-item-396"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-346 current_page_item current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children  active nav-item menu-item-396 nav-item">
                            <a title="Home" href="#"
                                class="nav-link text_hover_animaiton">Home</a>
                            
                        </li>
                        <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement"
                            id="menu-item-161"
                            class="menu-item menu-item-type-custom menu-item-object-custom nav-item menu-item-161 nav-item">
                            <a title="about" href="#about" class="nav-link text_hover_animaiton">about</a>
                        </li>
                        <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement"
                            id="menu-item-162"
                            class="menu-item menu-item-type-custom menu-item-object-custom nav-item menu-item-162 nav-item">
                            <a title="services" href="#service" class="nav-link text_hover_animaiton">services</a>
                        </li>
                        <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement"
                            id="menu-item-163"
                            class="menu-item menu-item-type-custom menu-item-object-custom nav-item menu-item-163 nav-item">
                            <a title="projects" href="#projects" class="nav-link text_hover_animaiton">projects</a>
                        </li>
                        <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement"
                            id="menu-item-189"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  nav-item menu-item-189 nav-item">
                            <a title="Blog" href="#blog" class="nav-link text_hover_animaiton">Blog</a>
                            
                        </li>
                        <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement"
                            id="menu-item-398"
                            class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-398 nav-item">
                            <a title="Contact" href=""
                                class="nav-link text_hover_animaiton">Contact</a>
                        </li>
                    </ul> <span class="toggle_icon c-pointer" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i
                            class="fa-solid fa-bars"></i></span>
                </div>
            </div>
        </nav>

        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight">
            <div class="offcanvas-header">
                <a class="offcanvas-logo" href="https://wp.shsarker.xyz/zyan/">
                    <img src="./wp-content/themes/zyan_1/assets/img/logo/logo.png" alt="ZYAN" class="img-fluid w-100" />
                </a>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <div class="offcanvas-body">
                <div class="tf__design_form offcanvas_form">
                    <div class="offcanvas-content-box">
                        <h4 class="offcanvas_title">About us</h4>
                        <p>
                        We're innovators crafting digital brilliance, defining excellence with creativity. Join us in shaping your visionary digital landscapes     </p>
                    </div>
                    <div class="offcanvas_contact_form">
                        <h4 class="offcanvas_title">Get In Touch</h4>

                      <?php
// Display confirmation message based on status parameter in the URL
if(isset($_GET['status'])) {
    if($_GET['status'] == 'success') {
        echo '<p style="color: green;">Message sent successfully!</p>';
    } elseif($_GET['status'] == 'error') {
        echo '<p style="color: red;">Failed to send message. Please try again later.</p>';
    }
}
?>
                                            <form action="submit.php" method="post">
                                                <input type="text" id="name" placeholder="Name" name="name" required><br>

                                                <input type="email" id="email" placeholder="Email" name="email" required><br>

                                                <input type="text" id="number" placeholder="Phone No." name="number" required><br>

                                                <textarea id="subject" name="subject" placeholder="Message" required></textarea><br>

                                                <input type="submit" value="Submit"
                                                    onclick="scrollToSection('contact-form-section')"
                                                    class="common_btn mu">
                                            </form>

                    </div>
                </div>
            </div>
        </div>
        <div data-elementor-type="wp-page" data-elementor-id="346" class="elementor elementor-346">
            <div class="elementor-element elementor-element-85e8e20 e-con-full e-flex e-con e-parent" data-id="85e8e20"
                data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;full&quot;}"
                data-core-v316-plus="true">
                <div class="elementor-element elementor-element-f3a9dc8 elementor-widget elementor-widget-hero_header"
                    data-id="f3a9dc8" data-element_type="widget" data-widget_type="hero_header.default">
                    <div class="elementor-widget-container">
                        <section class="tf__banner banner"
                            style="background: url(./wp-content/uploads/2023/10/banner-scaled.jpg)">
                            <div class="container">
                                <div class="row justify-content-between">
                                    <div class="col-xl-6 col-lg-8">
                                        <div class="tf__banner_text">
                                            <h1>
                                                <italic class="texto"> HI, I&#039;M Piyush Chandra Creative</italic>
                                                <span class="cd-headline rotate-1">
                                                    <!-- ANIMATE TEXT VALUES: zoom, rotate-1, letters type, letters rotate-2, loading-bar, slide, clip, letters rotate-3, letters scale, push,  -->
                                                    <span class="cd-words-wrapper">
                                                        <b class="is-visible">Web Developer</b>
                                                        <b class="">Wordpress Developer</b>
                                                        <b class="">Web Designer</b>
                                                        <b class="">UI/UX Designer</b>
                                                        <b class="">Digital Marketing</b>
                                                    </span>
                                                </span>
                                            </h1>
                                            <p>

                                                Proficient in web development, WordPress customization, and design, this
                                                professional creates user-friendly websites. They blend aesthetics and
                                                functionality, excelling in web design and UI/UX mastery. Strategic in
                                                digital marketing, they boost brand presence across online platforms.
                                                This versatile expert embodies technical skill, design finesse, and
                                                marketing savvy, consistently delivering innovative solutions. Their
                                                ability to adapt and innovate defines their success in navigating the
                                                ever-evolving digital landscape. </p>
                                            <ul>
                                                <li>
                                                    <a class="common_btn" href="#">
                                                        Download CV <i class="fa-solid fa-file-arrow-down"></i> </a>
                                                </li>
                                                <li>
                                                    <a class="banner_video_btn play_btn"
                                                        href="https://www.youtube.com/watch?v=B-ytMSuwbf8">
                                                        <i aria-hidden="true" class="fas fa-play-circle"></i> Watch The
                                                        Video </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xl-5 col-lg-4">
                                        <div class="tf__banner_img">
                                            <div class="img">
                                                <img decoding="async"
                                                    src="./wp-content/uploads/2023/10/banner_img_1.png"
                                                    class="img-fluid w-100" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <div class="elementor-element elementor-element-965cdd7 elementor-widget elementor-widget-service_section"
                    data-id="965cdd7" data-element_type="widget" data-widget_type="service_section.default">
                    <div class="elementor-widget-container">
                        <section class="tf__service pt_130 xs_pt_80" id="service">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12 m-auto mb_40">
                                        <div class="tf__section_heading">
                                            <h5 class="has-animation">MY SERIVCE</h5>
                                            <h2 class="has-animation">
                                                Crafting Your Digital Journey </h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="tf__single_service fade_left" data-trigerId="service">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="99" height="101"
                                                    viewBox="0 0 99 101" fill="none">
                                                    <path
                                                        d="M76.0618 100.003H1.44788C0.675676 100.003 0 99.3278 0 98.5556V23.7487C0 22.9765 0.675676 22.3008 1.44788 22.3008H76.0618C76.834 22.3008 77.5097 22.9765 77.5097 23.7487V98.4591C77.5097 99.3278 76.834 100.003 76.0618 100.003ZM2.89575 97.1077H74.6139V25.1965H2.89575V97.1077Z"
                                                        fill="#55E6A5"></path>
                                                    <path
                                                        d="M97.0071 77.6062H22.3932C21.621 77.6062 20.9453 76.9305 20.9453 76.1583V50.4826C20.9453 49.7104 21.621 49.0347 22.3932 49.0347H41.4086C42.1808 49.0347 42.8565 49.7104 42.8565 50.4826C42.8565 51.2548 42.1808 51.9305 41.4086 51.9305H23.8411V74.7104H95.5592V2.89575H23.8411V23.7452C23.8411 24.5174 23.1654 25.1931 22.3932 25.1931C21.621 25.1931 20.9453 24.5174 20.9453 23.7452V1.44788C20.9453 0.675676 21.621 0 22.3932 0H97.0071C97.7793 0 98.455 0.675676 98.455 1.44788V76.1583C98.455 77.027 97.7793 77.6062 97.0071 77.6062Z"
                                                        fill="#55E6A5"></path>
                                                    <path
                                                        d="M50.3866 54.8279C47.9735 54.8279 46.043 52.8974 46.043 50.4843C46.043 48.0711 47.9735 46.1406 50.3866 46.1406C52.7997 46.1406 54.7302 48.0711 54.7302 50.4843C54.7302 52.8974 52.7997 54.8279 50.3866 54.8279ZM50.3866 49.0364C49.6144 49.0364 48.9387 49.7121 48.9387 50.4843C48.9387 51.2565 49.6144 51.9321 50.3866 51.9321C51.1588 51.9321 51.8345 51.2565 51.8345 50.4843C51.8345 49.7121 51.1588 49.0364 50.3866 49.0364Z"
                                                        fill="#55E6A5"></path>
                                                </svg> </span>
                                            <h3>Web Development</h3>
                                            <p>
                                                Building dynamic digital landscapes, one line of code at a time.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="tf__single_service fade_left" data-trigerId="service">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="127" height="100"
                                                    viewBox="0 0 127 100" fill="none">
                                                    <path
                                                        d="M63.7291 99.9969C63.2929 99.9969 62.8568 99.7789 62.5296 99.4517L0.484306 33.699C-0.0609081 33.1537 -0.0609081 32.3904 0.26622 31.7362L16.2955 3.82122C16.6226 3.27601 17.1679 2.94888 17.7131 2.94888H26.2184C27.0907 2.94888 27.854 3.71218 27.854 4.58452C27.854 5.45686 27.0907 6.22016 26.2184 6.22016H18.6945L3.75559 32.2814L63.7291 95.9624L123.266 32.2814L106.583 6.11113H42.6839C41.8115 6.11113 41.0482 5.34783 41.0482 4.47549C41.0482 3.60314 41.8115 2.83984 42.6839 2.83984H107.346C107.891 2.83984 108.437 3.16697 108.764 3.60314L126.647 31.5181C127.083 32.1724 126.974 32.9356 126.429 33.4809L64.9286 99.3427C64.6015 99.8879 64.1653 99.9969 63.7291 99.9969Z"
                                                        fill="#55E6A5"></path>
                                                    <path
                                                        d="M1.68373 34.2451C0.920431 34.2451 0.266175 33.6999 0.0480891 32.9366C-0.169996 32.0642 0.375217 31.1919 1.24756 30.9738L75.5057 14.2903C76.378 14.0722 77.2504 14.6174 77.4685 15.4897C77.6865 16.3621 77.1413 17.2344 76.269 17.4525L2.01086 34.1361C1.90182 34.1361 1.79277 34.2451 1.68373 34.2451Z"
                                                        fill="#55E6A5"></path>
                                                    <path
                                                        d="M125.227 34.2405C125.009 34.2405 124.9 34.2405 124.682 34.1314L42.1369 6.21648C41.2645 5.88936 40.8284 5.01702 41.1555 4.14468C41.4826 3.27234 42.355 2.83617 43.2273 3.1633L125.773 31.0782C126.645 31.4054 127.081 32.2777 126.754 33.1501C126.645 33.8043 125.991 34.2405 125.227 34.2405Z"
                                                        fill="#55E6A5"></path>
                                                    <path
                                                        d="M34.3962 9.1596C31.8882 9.1596 29.8164 7.08778 29.8164 4.57979C29.8164 2.07181 31.8882 0 34.3962 0C36.9042 0 38.976 2.07181 38.976 4.57979C38.976 7.08778 36.9042 9.1596 34.3962 9.1596ZM34.3962 3.27128C33.6329 3.27128 33.0877 3.81649 33.0877 4.57979C33.0877 5.34309 33.6329 5.88832 34.3962 5.88832C35.1595 5.88832 35.7047 5.34309 35.7047 4.57979C35.7047 3.92554 35.1595 3.27128 34.3962 3.27128Z"
                                                        fill="#55E6A5"></path>
                                                </svg> </span>
                                            <h3>WordPress Customization</h3>
                                            <p>
                                                Tailoring your online home with seamless customization. </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="tf__single_service fade_left" data-trigerId="service">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="117" height="100"
                                                    viewBox="0 0 117 100" fill="none">
                                                    <path
                                                        d="M74.2104 51.7634C73.8691 51.7634 73.414 51.6496 73.0727 51.4221C72.3902 50.8533 72.2764 49.7156 72.8452 49.033L110.502 3.52674H5.38219L43.0386 49.033C43.6074 49.7156 43.4937 50.8533 42.8111 51.4221C42.1285 51.9909 40.9908 51.8771 40.422 51.1945L0.490267 2.84414C0.0352047 2.38908 0.0352049 1.59271 0.262736 1.02388C0.490268 0.455056 1.17286 0 1.85546 0H114.37C115.052 0 115.621 0.34129 115.962 1.02388C116.19 1.59271 116.19 2.27531 115.735 2.84414L75.6894 51.0808C75.2343 51.5358 74.7792 51.7634 74.2104 51.7634Z"
                                                        fill="#55E6A5"></path>
                                                    <path
                                                        d="M58.0566 71.3299C57.6016 71.3299 57.0327 71.1024 56.6914 70.7611L44.5185 56.0853C43.9497 55.4027 44.0634 54.2651 44.746 53.6962C45.4286 53.1274 46.5663 53.2412 47.1351 53.9238L57.9428 67.0068L68.5231 54.2651C69.0919 53.5825 70.2295 53.4687 70.9121 54.0375C71.5947 54.6064 71.7085 55.744 71.1397 56.4266L59.308 70.7611C58.9667 71.1024 58.5117 71.3299 58.0566 71.3299Z"
                                                        fill="#55E6A5"></path>
                                                    <path
                                                        d="M114.256 99.9957H1.74217C1.05958 99.9957 0.490752 99.6544 0.149455 98.9719C-0.0780763 98.403 -0.0780765 97.7204 0.376986 97.1516L56.691 29.3473C57.3736 28.5509 58.625 28.5509 59.3076 29.3473L115.508 97.2654C115.963 97.7204 115.963 98.5168 115.735 99.0856C115.508 99.6544 114.939 99.9957 114.256 99.9957ZM5.38267 96.5827H110.616L58.0562 33.1015L5.38267 96.5827Z"
                                                        fill="#55E6A5"></path>
                                                    <path
                                                        d="M58.0561 26.7355C57.146 26.7355 56.3496 25.9392 56.3496 25.0291V19.9096C56.3496 18.9995 57.146 18.2031 58.0561 18.2031C58.9662 18.2031 59.7626 18.9995 59.7626 19.9096V25.0291C59.7626 25.9392 58.9662 26.7355 58.0561 26.7355Z"
                                                        fill="#55E6A5"></path>
                                                    <path
                                                        d="M58.054 84.4156C55.3237 84.4156 53.1621 82.2541 53.1621 79.6375C53.1621 77.0209 55.3237 74.8594 58.054 74.8594C60.7844 74.8594 62.946 77.0209 62.946 79.6375C62.946 82.3679 60.7844 84.4156 58.054 84.4156ZM58.054 78.3861C57.2577 78.3861 56.5751 78.9549 56.5751 79.7513C56.5751 80.5476 57.2577 81.1165 58.054 81.1165C58.8504 81.1165 59.533 80.5476 59.533 79.7513C59.533 78.9549 58.8504 78.3861 58.054 78.3861Z"
                                                        fill="#55E6A5"></path>
                                                </svg> </span>
                                            <h3>Design Alchemy</h3>
                                            <p>
                                                Infusing aesthetics into functionality for captivating web interfaces.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="tf__single_service fade_left" data-trigerId="service">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="117" height="100"
                                                    viewBox="0 0 117 100" fill="none">
                                                    <path
                                                        d="M74.2104 51.7634C73.8691 51.7634 73.414 51.6496 73.0727 51.4221C72.3902 50.8533 72.2764 49.7156 72.8452 49.033L110.502 3.52674H5.38219L43.0386 49.033C43.6074 49.7156 43.4937 50.8533 42.8111 51.4221C42.1285 51.9909 40.9908 51.8771 40.422 51.1945L0.490267 2.84414C0.0352047 2.38908 0.0352049 1.59271 0.262736 1.02388C0.490268 0.455056 1.17286 0 1.85546 0H114.37C115.052 0 115.621 0.34129 115.962 1.02388C116.19 1.59271 116.19 2.27531 115.735 2.84414L75.6894 51.0808C75.2343 51.5358 74.7792 51.7634 74.2104 51.7634Z"
                                                        fill="#55E6A5"></path>
                                                    <path
                                                        d="M58.0566 71.3299C57.6016 71.3299 57.0327 71.1024 56.6914 70.7611L44.5185 56.0853C43.9497 55.4027 44.0634 54.2651 44.746 53.6962C45.4286 53.1274 46.5663 53.2412 47.1351 53.9238L57.9428 67.0068L68.5231 54.2651C69.0919 53.5825 70.2295 53.4687 70.9121 54.0375C71.5947 54.6064 71.7085 55.744 71.1397 56.4266L59.308 70.7611C58.9667 71.1024 58.5117 71.3299 58.0566 71.3299Z"
                                                        fill="#55E6A5"></path>
                                                    <path
                                                        d="M114.256 99.9957H1.74217C1.05958 99.9957 0.490752 99.6544 0.149455 98.9719C-0.0780763 98.403 -0.0780765 97.7204 0.376986 97.1516L56.691 29.3473C57.3736 28.5509 58.625 28.5509 59.3076 29.3473L115.508 97.2654C115.963 97.7204 115.963 98.5168 115.735 99.0856C115.508 99.6544 114.939 99.9957 114.256 99.9957ZM5.38267 96.5827H110.616L58.0562 33.1015L5.38267 96.5827Z"
                                                        fill="#55E6A5"></path>
                                                    <path
                                                        d="M58.0561 26.7355C57.146 26.7355 56.3496 25.9392 56.3496 25.0291V19.9096C56.3496 18.9995 57.146 18.2031 58.0561 18.2031C58.9662 18.2031 59.7626 18.9995 59.7626 19.9096V25.0291C59.7626 25.9392 58.9662 26.7355 58.0561 26.7355Z"
                                                        fill="#55E6A5"></path>
                                                    <path
                                                        d="M58.054 84.4156C55.3237 84.4156 53.1621 82.2541 53.1621 79.6375C53.1621 77.0209 55.3237 74.8594 58.054 74.8594C60.7844 74.8594 62.946 77.0209 62.946 79.6375C62.946 82.3679 60.7844 84.4156 58.054 84.4156ZM58.054 78.3861C57.2577 78.3861 56.5751 78.9549 56.5751 79.7513C56.5751 80.5476 57.2577 81.1165 58.054 81.1165C58.8504 81.1165 59.533 80.5476 59.533 79.7513C59.533 78.9549 58.8504 78.3861 58.054 78.3861Z"
                                                        fill="#55E6A5"></path>
                                                </svg> </span>
                                            <h3>UI/UX Artistry</h3>
                                            <p>
                                                Creating visually stunning and intuitively navigable experiences. </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="tf__single_service fade_left" data-trigerId="service">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="117" height="100"
                                                    viewBox="0 0 117 100" fill="none">
                                                    <path
                                                        d="M74.2104 51.7634C73.8691 51.7634 73.414 51.6496 73.0727 51.4221C72.3902 50.8533 72.2764 49.7156 72.8452 49.033L110.502 3.52674H5.38219L43.0386 49.033C43.6074 49.7156 43.4937 50.8533 42.8111 51.4221C42.1285 51.9909 40.9908 51.8771 40.422 51.1945L0.490267 2.84414C0.0352047 2.38908 0.0352049 1.59271 0.262736 1.02388C0.490268 0.455056 1.17286 0 1.85546 0H114.37C115.052 0 115.621 0.34129 115.962 1.02388C116.19 1.59271 116.19 2.27531 115.735 2.84414L75.6894 51.0808C75.2343 51.5358 74.7792 51.7634 74.2104 51.7634Z"
                                                        fill="#55E6A5"></path>
                                                    <path
                                                        d="M58.0566 71.3299C57.6016 71.3299 57.0327 71.1024 56.6914 70.7611L44.5185 56.0853C43.9497 55.4027 44.0634 54.2651 44.746 53.6962C45.4286 53.1274 46.5663 53.2412 47.1351 53.9238L57.9428 67.0068L68.5231 54.2651C69.0919 53.5825 70.2295 53.4687 70.9121 54.0375C71.5947 54.6064 71.7085 55.744 71.1397 56.4266L59.308 70.7611C58.9667 71.1024 58.5117 71.3299 58.0566 71.3299Z"
                                                        fill="#55E6A5"></path>
                                                    <path
                                                        d="M114.256 99.9957H1.74217C1.05958 99.9957 0.490752 99.6544 0.149455 98.9719C-0.0780763 98.403 -0.0780765 97.7204 0.376986 97.1516L56.691 29.3473C57.3736 28.5509 58.625 28.5509 59.3076 29.3473L115.508 97.2654C115.963 97.7204 115.963 98.5168 115.735 99.0856C115.508 99.6544 114.939 99.9957 114.256 99.9957ZM5.38267 96.5827H110.616L58.0562 33.1015L5.38267 96.5827Z"
                                                        fill="#55E6A5"></path>
                                                    <path
                                                        d="M58.0561 26.7355C57.146 26.7355 56.3496 25.9392 56.3496 25.0291V19.9096C56.3496 18.9995 57.146 18.2031 58.0561 18.2031C58.9662 18.2031 59.7626 18.9995 59.7626 19.9096V25.0291C59.7626 25.9392 58.9662 26.7355 58.0561 26.7355Z"
                                                        fill="#55E6A5"></path>
                                                    <path
                                                        d="M58.054 84.4156C55.3237 84.4156 53.1621 82.2541 53.1621 79.6375C53.1621 77.0209 55.3237 74.8594 58.054 74.8594C60.7844 74.8594 62.946 77.0209 62.946 79.6375C62.946 82.3679 60.7844 84.4156 58.054 84.4156ZM58.054 78.3861C57.2577 78.3861 56.5751 78.9549 56.5751 79.7513C56.5751 80.5476 57.2577 81.1165 58.054 81.1165C58.8504 81.1165 59.533 80.5476 59.533 79.7513C59.533 78.9549 58.8504 78.3861 58.054 78.3861Z"
                                                        fill="#55E6A5"></path>
                                                </svg> </span>
                                            <h3>SEO Optimization</h3>
                                            <p>
                                                Strategically propelling your brand across the online cosmos.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <div class="elementor-element elementor-element-e821686 elementor-widget elementor-widget-about-section"
                    data-id="e821686" data-element_type="widget" data-widget_type="about-section.default">
                    <div class="elementor-widget-container">
                        <section class="tf__about pt_140 xs_pt_80" id="about">
                            <div class="container">
                                <div class="row justify-content-between">
                                    <div class="col-xxl-7 col-lg-6 col-xl-6">
                                        <div class="pb_8 xs_pb_50">
                                            <div class="tf__section_heading">
                                                <h5 class="has-animation">ABOUT ME</h5>
                                                <h2 class="has-animation">
                                                Crafting Digital Magic<br>Where Creativity Meets Innovation</h2>
                                            </div>
                                        </div>
                                        <div class="tf__about_text">
                                            <p>
                                            Hi there! I'm all about blending creativity and innovation to craft digital magic. I love turning ideas into engaging online experiences that look awesome and work like a charm. With a passion for setting trends and making things easy-peasy for users, I create tech that stands out and brings smiles! </p>
                                            <a class="common_btn" href="#">
                                                Download Cv <i class="fa-solid fa-file-arrow-down"></i> </a>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-lg-6 col-xl-6">
                                        <div class="tf__about_img fade_right" data-trigerId="about">
                                            <img decoding="async" src="./wp-content/uploads/2023/10/about_img.jpg"
                                                class="img-fluid w-100" alt="">
                                            <div class="tf__about_img_text">
                                                <i aria-hidden="true" class="fas fa-chart-pie"></i>
                                                <div class="tf__about_content">
                                                    <h4>Daily Activity</h4>
                                                    <!-- <p>Loream is ispam</p> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <div class="elementor-element elementor-element-c2b46e8 elementor-widget elementor-widget-design-section"
                    data-id="c2b46e8" data-element_type="widget" id="contact-form-section"
                    data-widget_type="design-section.default">
                    <div class="elementor-widget-container">
                        <section class="tf__design mt_135 xs_mt_40 mb_120 xs_mb_80" id="counter">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="tf__design_text">
                                            <h2>Design <span>and Innovation</span></h2>
                                            <p class="">
                                            
"In my realm, design merges seamlessly with innovation. I specialize in crafting digital experiences that blend creativity and function. With a thoughtful approach and tech finesse, I build pathways that redefine user engagement. I transform ideas into impactful realities, creating a digital landscape where aesthetics meet functionality, setting new standards for excellence."</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-6 col-md-6">
                                                <div class="tf__design_counter fade_left" data-trigerId="counter">
                                                    <span class="icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="75" height="60"
                                                            viewBox="0 0 75 60" fill="none">
                                                            <g clip-path="url(#clip0_2773_413)">
                                                                <path
                                                                    d="M29.6018 60.0002C29.3531 60.0002 29.1043 59.8743 28.9178 59.7484L0.248601 30.6613C-0.124534 30.2835 -0.124534 29.7169 0.248601 29.3392L28.9799 0.252066C29.3531 -0.125689 29.9128 -0.125689 30.2859 0.252066L58.9551 29.2762C59.3282 29.654 59.3282 30.2206 58.9551 30.5983L30.2859 59.6854C30.0993 59.8743 29.8506 60.0002 29.6018 60.0002ZM2.23865 29.9687L29.6018 57.6707L56.965 29.9687L29.6018 2.26676L2.23865 29.9687Z"
                                                                    fill="#55E6A5"></path>
                                                                <path
                                                                    d="M51.8646 53.4512C51.6159 53.4512 51.3671 53.3252 51.1806 53.1993L43.7179 45.6442C43.3447 45.2665 43.3447 44.6998 43.7179 44.3221C44.091 43.9443 44.6507 43.9443 45.0238 44.3221L51.8025 51.1846L72.7602 29.9674L51.8646 8.81317L30.285 30.66C29.9119 31.0377 29.3522 31.0377 28.9791 30.66C28.6059 30.2822 28.6059 29.7156 28.9791 29.3378L51.1806 6.86144C51.5537 6.48369 52.1134 6.48369 52.4865 6.86144L74.688 29.3378C75.0612 29.7156 75.0612 30.2822 74.688 30.66L52.4865 53.1364C52.3 53.3252 52.1134 53.4512 51.8646 53.4512Z"
                                                                    fill="#55E6A5"></path>
                                                                <path
                                                                    d="M26.1812 35.9499C24.8753 35.9499 23.7559 34.8796 23.7559 33.4945C23.7559 32.1723 24.8131 31.0391 26.1812 31.0391C27.4872 31.0391 28.6066 32.1094 28.6066 33.4945C28.6066 34.8166 27.4872 35.9499 26.1812 35.9499ZM26.1812 32.9278C25.8703 32.9278 25.6215 33.1797 25.6215 33.4945C25.6215 33.8093 25.8703 34.0611 26.1812 34.0611C26.4922 34.0611 26.7409 33.8093 26.7409 33.4945C26.7409 33.1797 26.4922 32.9278 26.1812 32.9278Z"
                                                                    fill="#55E6A5"></path>
                                                            </g>
                                                            <defs>
                                                                <clipPath id="clip0_2773_413">
                                                                    <rect width="75" height="60" fill="white"></rect>
                                                                </clipPath>
                                                            </defs>
                                                        </svg> </span>
                                                    <h3><span class="counter">10</span>+</h3>
                                                    <p>Complete project</p>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-md-6">
                                                <div class="tf__design_counter fade_left" data-trigerId="counter">
                                                    <span class="icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="75" height="60"
                                                            viewBox="0 0 75 60" fill="none">
                                                            <g clip-path="url(#clip0_2773_398)">
                                                                <path
                                                                    d="M70.8102 60.0031H4.19006C3.6314 60.0031 3.14258 59.3089 3.14258 58.5155C3.14258 57.7221 3.6314 57.0279 4.19006 57.0279H69.8325L72.6956 4.46591L51.6761 21.8213C51.1873 22.218 50.5588 22.0196 50.2794 21.3254C50.0001 20.6312 50.1398 19.7386 50.6286 19.3419L73.394 0.59814C73.7431 0.30062 74.1621 0.30062 74.5113 0.59814C74.8605 0.895661 75.0001 1.39153 75.0001 1.98657L71.8577 58.7138C71.7878 59.4081 71.3688 60.0031 70.8102 60.0031Z"
                                                                    fill="#55E6A5"></path>
                                                                <path
                                                                    d="M70.8101 60.0085H4.18994C3.63128 60.0085 3.21229 59.4135 3.14246 58.6201L0 1.89282C0 1.29778 0.139665 0.801911 0.488827 0.50439C0.837989 0.20687 1.25698 0.20687 1.60615 0.50439L45.1117 36.306C45.6006 36.7027 45.8101 37.5953 45.4609 38.2895C45.1816 38.9837 44.5531 39.2812 44.0642 38.7854L2.23464 4.47133L5.09777 57.0333H70.7402C71.2989 57.0333 71.7877 57.7275 71.7877 58.5209C71.8575 59.3143 71.3687 60.0085 70.8101 60.0085Z"
                                                                    fill="#55E6A5"></path>
                                                                <path
                                                                    d="M50.9078 22.0192C50.6285 22.0192 50.3492 21.9201 50.1397 21.6225L37.5 3.57296L24.7905 21.6225C24.3715 22.2176 23.743 22.2176 23.324 21.6225C22.905 21.0275 22.905 20.1349 23.324 19.5399L36.7318 0.399406C37.1508 -0.195635 37.7793 -0.195635 38.1983 0.399406L51.6061 19.4407C52.0251 20.0358 52.0251 20.9283 51.6061 21.5234C51.3966 21.8209 51.1871 22.0192 50.9078 22.0192Z"
                                                                    fill="#55E6A5"></path>
                                                                <path
                                                                    d="M51.1865 48.7997C49.0915 48.7997 47.3457 46.3204 47.3457 43.3452C47.3457 40.37 49.0915 37.8906 51.1865 37.8906C53.2815 37.8906 55.0273 40.37 55.0273 43.3452C55.0273 46.3204 53.2815 48.7997 51.1865 48.7997ZM51.1865 40.8658C50.2088 40.8658 49.4407 41.9567 49.4407 43.3452C49.4407 44.7336 50.2088 45.8245 51.1865 45.8245C52.1641 45.8245 52.9323 44.7336 52.9323 43.3452C52.9323 41.9567 52.1641 40.8658 51.1865 40.8658Z"
                                                                    fill="#55E6A5"></path>
                                                            </g>
                                                            <defs>
                                                                <clipPath id="clip0_2773_398">
                                                                    <rect width="75" height="60" fill="white"></rect>
                                                                </clipPath>
                                                            </defs>
                                                        </svg> </span>
                                                    <h3><span class="counter">8</span>+</h3>
                                                    <p>Client review</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="tf__design_form">
                                            <h2 class="has-animation">Let's connect !</h2>
                                            <p class="">
                                            Contact me for expert solutions in web development, design, WordPress, UI/UX, and digital marketing collaboration and inquiries. </p>
                                            <?php
// Display confirmation message based on status parameter in the URL
if(isset($_GET['status'])) {
    if($_GET['status'] == 'success') {
        echo '<p style="color: green;">Message sent successfully!</p>';
    } elseif($_GET['status'] == 'error') {
        echo '<p style="color: red;">Failed to send message. Please try again later.</p>';
    }
}
?>
                                            <form action="submit.php" method="post">
                                                <label for="name">Name:</label><br>
                                                <input type="text" id="name" name="name" required><br><br>

                                                <label for="email">Email:</label><br>
                                                <input type="email" id="email" name="email" required><br><br>

                                                <label for="number">Phone Number:</label><br>
                                                <input type="text" id="number" name="number" required><br><br>

                                                <label for="subject">Message:</label><br>
                                                <textarea id="subject" name="subject" required></textarea><br><br>

                                                <input type="submit" value="Submit"
                                                    onclick="scrollToSection('contact-form-section')"
                                                    class="common_btn mu">
                                            </form>

                                            <div id="response"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <div class="elementor-element elementor-element-3437b03 elementor-widget elementor-widget-educaiton"
                    data-id="3437b03" data-element_type="widget" data-widget_type="educaiton.default">
                    <div class="elementor-widget-container">
                        <section class="tf__skills pt_115 xs_pt_75 pb_70 xs_pb_30" id="skills">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-10 col-lg-8 m-auto mb_60">
                                        <div class="mb_40">
                                            <div class="tf__section_heading">
                                                <h5 class="has-animation">EDUCATION &amp; SKILL</h5>
                                                <h2 class="has-animation piyer">
                                                Unleash Your Talent :  Amplify Your Impact : Showcasing in Style !</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="tf__single_skills fade_bottom" data-trigerId="skills"
                                            data-stagger=".13">
                                            <span>2013 - 2015</span>
                                            <h3>Intermediate - DAV Public School Bariatu, Ranchi, Jharkhand</h3>
                                            <p>
                                            Mastering Physics, Chemistry, and Mathematics, cultivating analytical prowess and problem-solving skills, paving the way for continuous learning and growth </p>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="tf__single_skills fade_bottom" data-trigerId="skills"
                                            data-stagger=".13">
                                            <span>April 2021 - June 2023</span>
                                            <h3>Associate Software Developer -  Speqto Technologies PVT Ltd</h3>
                                            <p>
                                            Venturing into dynamic web development, my recent projects encompass immersive WordPress sites, elevating user experiences with intuitive design and seamless functionality.</p>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="tf__single_skills fade_bottom" data-trigerId="skills"
                                            data-stagger=".13">
                                            <span>2016 - 2020</span>
                                            <h3>B.E - RGPV Bhopal ,Madhya Pradesh</h3>
                                            <p>
                                            Completed Bachelor's in Engineering, equipped with skills in problem-solving, innovation, and technical proficiency, ready to tackle real-world challenges. </p>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="tf__single_skills fade_bottom" data-trigerId="skills"
                                            data-stagger=".13">
                                            <span>July 2023 - Till Now</span>
                                            <h3>Senior Web Developer - APAC News Network PVT Ltd</h3>
                                            <p>
                                            Curated an array of web development marvels, including captivating WordPress projects that redefine online experiences with seamless functionality and captivating design.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-3 col-lg-3">
                                        <div class="tf__team_skills_bar_single fade_bottom" data-trigerId="skills"
                                            data-stagger=".25">
                                            <p>HTML5</p>
                                            <div id="bar1" class="barfiller" style="width: 76%;">
                                                <div class="tipWrap">
                                                    <span class="tip"></span>
                                                </div>
                                                <span class="fill"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3">
                                        <div class="tf__team_skills_bar_single fade_bottom" data-trigerId="skills"
                                            data-stagger=".25">
                                            <p>PHP</p>
                                            <div id="bar1" class="barfiller" style="width: 84%;">
                                                <div class="tipWrap">
                                                    <span class="tip"></span>
                                                </div>
                                                <span class="fill"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3">
                                        <div class="tf__team_skills_bar_single fade_bottom" data-trigerId="skills"
                                            data-stagger=".25">
                                            <p>Database - MySql</p>
                                            <div id="bar1" class="barfiller" style="width: 84%;">
                                                <div class="tipWrap">
                                                    <span class="tip"></span>
                                                </div>
                                                <span class="fill"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3">
                                        <div class="tf__team_skills_bar_single fade_bottom" data-trigerId="skills"
                                            data-stagger=".25">
                                            <p>CSS3</p>
                                            <div id="bar1" class="barfiller" style="width: 90%;">
                                                <div class="tipWrap">
                                                    <span class="tip"></span>
                                                </div>
                                                <span class="fill"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3">
                                        <div class="tf__team_skills_bar_single fade_bottom" data-trigerId="skills"
                                            data-stagger=".25">
                                            <p>CSS Framework -  Bootstrap</p>
                                            <div id="bar1" class="barfiller" style="width: 90%;">
                                                <div class="tipWrap">
                                                    <span class="tip"></span>
                                                </div>
                                                <span class="fill"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3">
                                        <div class="tf__team_skills_bar_single fade_bottom" data-trigerId="skills"
                                            data-stagger=".25">
                                            <p>Photoshop</p>
                                            <div id="bar1" class="barfiller" style="width: 80%;">
                                                <div class="tipWrap">
                                                    <span class="tip"></span>
                                                </div>
                                                <span class="fill"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3">
                                        <div class="tf__team_skills_bar_single fade_bottom" data-trigerId="skills"
                                            data-stagger=".25">
                                            <p>Java Script ES6</p>
                                            <div id="bar1" class="barfiller" style="width: 90%;">
                                                <div class="tipWrap">
                                                    <span class="tip"></span>
                                                </div>
                                                <span class="fill"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3">
                                        <div class="tf__team_skills_bar_single fade_bottom" data-trigerId="skills"
                                            data-stagger=".25">
                                            <p>Jquery</p>
                                            <div id="bar1" class="barfiller" style="width: 90%;">
                                                <div class="tipWrap">
                                                    <span class="tip"></span>
                                                </div>
                                                <span class="fill"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3">
                                        <div class="tf__team_skills_bar_single fade_bottom" data-trigerId="skills"
                                            data-stagger=".25">
                                            <p>React.Js</p>
                                            <div id="bar1" class="barfiller" style="width: 90%;">
                                                <div class="tipWrap">
                                                    <span class="tip"></span>
                                                </div>
                                                <span class="fill"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3">
                                        <div class="tf__team_skills_bar_single fade_bottom" data-trigerId="skills"
                                            data-stagger=".25">
                                            <p>Firebase</p>
                                            <div id="bar1" class="barfiller" style="width: 90%;">
                                                <div class="tipWrap">
                                                    <span class="tip"></span>
                                                </div>
                                                <span class="fill"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3">
                                        <div class="tf__team_skills_bar_single fade_bottom" data-trigerId="skills"
                                            data-stagger=".25">
                                            <p>Cpanel</p>
                                            <div id="bar1" class="barfiller" style="width: 90%;">
                                                <div class="tipWrap">
                                                    <span class="tip"></span>
                                                </div>
                                                <span class="fill"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3">
                                        <div class="tf__team_skills_bar_single fade_bottom" data-trigerId="skills"
                                            data-stagger=".25">
                                            <p>WordPress</p>
                                            <div id="bar1" class="barfiller" style="width: 85%;">
                                                <div class="tipWrap">
                                                    <span class="tip"></span>
                                                </div>
                                                <span class="fill"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3">
                                        <div class="tf__team_skills_bar_single fade_bottom" data-trigerId="skills"
                                            data-stagger=".25">
                                            <p>E-commerce</p>
                                            <div id="bar1" class="barfiller" style="width: 85%;">
                                                <div class="tipWrap">
                                                    <span class="tip"></span>
                                                </div>
                                                <span class="fill"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3">
                                        <div class="tf__team_skills_bar_single fade_bottom" data-trigerId="skills"
                                            data-stagger=".25">
                                            <p>SEO - Onn Page ,Off Page </p>
                                            <div id="bar1" class="barfiller" style="width: 85%;">
                                                <div class="tipWrap">
                                                    <span class="tip"></span>
                                                </div>
                                                <span class="fill"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3">
                                        <div class="tf__team_skills_bar_single fade_bottom" data-trigerId="skills"
                                            data-stagger=".25">
                                            <p>Google Adsense </p>
                                            <div id="bar1" class="barfiller" style="width: 85%;">
                                                <div class="tipWrap">
                                                    <span class="tip"></span>
                                                </div>
                                                <span class="fill"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3">
                                        <div class="tf__team_skills_bar_single fade_bottom" data-trigerId="skills"
                                            data-stagger=".25">
                                            <p>Figma</p>
                                            <div id="bar1" class="barfiller" style="width: 84%;">
                                                <div class="tipWrap">
                                                    <span class="tip"></span>
                                                </div>
                                                <span class="fill"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <div class="elementor-element elementor-element-bc0687c elementor-widget elementor-widget-portfolio_section"
                    data-id="bc0687c" data-element_type="widget" data-widget_type="portfolio_section.default">
                    <div class="elementor-widget-container">
                        <section class="tf__portfolio mt_120 xs_mt_80" id="projects">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-10 col-lg-9 mb_30">
                                        <div class="tf__section_heading">
                                            <h5 class="has-animation">MY RECENT PORTFOLIO</h5>
                                            <h2 class="has-animation">
                                            Showcasing latest works,<br> a digital gallery igniting creativity!
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-8 col-md-6">
                                        <a href="https://www.speqto.com"
                                            class="tf__portfolio_item play_btn" data-cursor="view <br> link" target="_blank">
                                            <img decoding="async" src="./wp-content/uploads/speqto.png"
                                                alt="portfolio" class="img-fluid w-100" />
                                            <div class="text">
                                                <h4>Wordpress Website</h4>
                                                <p>Speqto Technology</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-xl-4 col-md-6">
                                        <a href="https://apacnewsnetwork.com/nccss/mp/" class="tf__portfolio_item play_btn"
                                            data-cursor="view <br> link">
                                            <img decoding="async" src="./wp-content/uploads/ncss.png"
                                                alt="portfolio" class="img-fluid w-100" />
                                            <div class="text">
                                                <h4>Dynamic Website </h4>
                                                <p>National Cloud & Cyber Security Summit</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-xl-6 col-md-6">
                                        <a href="https://www.bigflix.com/doc-martin-season-11/"
                                            class="tf__portfolio_item play_btn" data-cursor="View <br> link">
                                            <img decoding="async" src="./wp-content/uploads/big.png"
                                                alt="portfolio" class="img-fluid w-100" />
                                            <div class="text">
                                                <h4>E-commerce Website </h4>
                                                <p>Rent a Movie</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-xl-6 col-md-6">
                                        <a href="./wp-content/uploads/2023/10/4.jpg"
                                            class="tf__portfolio_item image_popup" data-cursor="View <br> Image">
                                            <img decoding="async" src="./wp-content/uploads/2023/10/4.jpg"
                                                alt="portfolio" class="img-fluid w-100" />
                                            <div class="text">
                                                <h4>sheet metal bending</h4>
                                                <p>Image</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <div class="elementor-element elementor-element-5b1b4ac elementor-widget elementor-widget-testimonial-section"
                    data-id="5b1b4ac" data-element_type="widget" data-widget_type="testimonial-section.default">
                    <div class="elementor-widget-container">
                        <section class="tf__testimonial pt_115 xs_pt_75">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-8 m-auto mb_30">
                                        <div class="tf__section_heading">
                                            <h5 class="has-animation">CLIENTS REVIEW</h5>
                                            <h2 class="has-animation">
                                                My testomonial
















                                            </h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="row testi_slider">
                                    <div class="col-xl-6">
                                        <div class="tf__single_testimonial">
                                            <div class="img">
                                                <img decoding="async" src="./wp-content/uploads/2023/10/1-1.jpg"
                                                    alt="clients" class="img-fluid w-100" />
                                            </div>
                                            <p class="rating">
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                            </p>
                                            <h3>Alexander Walker</h3>
                                            <h5>Graphic Designer</h5>
                                            <p class="description">
                                                Beautiful minimalist design and great, fast response with support.
                                                Highly recommend. Thanks Marketify! </p>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="tf__single_testimonial">
                                            <div class="img">
                                                <img decoding="async" src="./wp-content/uploads/2023/10/2-1.jpg"
                                                    alt="clients" class="img-fluid w-100" />
                                            </div>
                                            <p class="rating">
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                                <i class="fa-sharp fa-regular fa-star"></i>
                                            </p>
                                            <h3>Armin Van Buuren</h3>
                                            <h5>Content Manager</h5>
                                            <p class="description">
                                                Beautiful minimalist design and great, fast response with support.
                                                Highly recommend. Thanks Marketify! </p>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="tf__single_testimonial">
                                            <div class="img">
                                                <img decoding="async" src="./wp-content/uploads/2023/10/1-1.jpg"
                                                    alt="clients" class="img-fluid w-100" />
                                            </div>
                                            <p class="rating">
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                            </p>
                                            <h3>Alexander Walker</h3>
                                            <h5>Graphic Designer</h5>
                                            <p class="description">
                                                Beautiful minimalist design and great, fast response with support.
                                                Highly recommend. Thanks Marketify! </p>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="tf__single_testimonial">
                                            <div class="img">
                                                <img decoding="async" src="./wp-content/uploads/2023/10/2-1.jpg"
                                                    alt="clients" class="img-fluid w-100" />
                                            </div>
                                            <p class="rating">
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                                <i class="fa-sharp fa-solid fa-star"></i>
                                            </p>
                                            <h3>Armin Van Buuren</h3>
                                            <h5>Content Manager</h5>
                                            <p class="description">
                                                Beautiful minimalist design and great, fast response with support.
                                                Highly recommend. Thanks Marketify! </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <div class="elementor-element elementor-element-aaef128 elementor-widget elementor-widget-marquee"
                    data-id="aaef128" data-element_type="widget" data-widget_type="marquee.default">
                    <div class="elementor-widget-container">
                        <div class="tf__brand mt_120 xs_mt_80">
                            <div class="row">
                                <div class="col-12">
                                    <div class="marquee_animi">
                                        <ul>
                                            <li>* PHP</li>
                                            <li>* Python</li>
                                            <li>* design</li>
                                            <li>* world</li>
                                            <li>* Development</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-377a70f elementor-widget elementor-widget-blog-section"
                    data-id="377a70f" data-element_type="widget" data-widget_type="blog-section.default">
                    <div class="elementor-widget-container">
                        <section class="tf__blog pt_125 xs_pt_75 pb_40 xs_pb_0" id="blogs">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-8 col-lg-9 mb_30">
                                        <div class="tf__section_heading">
                                            <h5 class="has-animation">MY BLOG</h5>
                                            <h2 class="has-animation">
                                                Unlocking the potential of your personal brand </h2>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <!-- 01 blog item start -->

                                    <div class="col-xl-4 col-md-6">
                                        <div class="tf__slingle_blog fade_left" data-trigerId="blogs">
                                            <a href="https://wp.shsarker.xyz/zyan/the-standard-personal-my-portfolio/"
                                                class="tf__blog_img" data-cursor="read <br> more">
                                                <img fetchpriority="high" decoding="async" width="850" height="430"
                                                    src="./wp-content/uploads/2023/10/list_2.jpg"
                                                    class="attachment-category-thumb size-category-thumb wp-post-image"
                                                    alt=""
                                                    srcset="./wp-content/uploads/2023/10/list_2.jpg 850w, ./wp-content/uploads/2023/10/list_2-300x152.jpg 300w, ./wp-content/uploads/2023/10/list_2-768x389.jpg 768w"
                                                    sizes="(max-width: 850px) 100vw, 850px" /> </a>
                                            <div class="tf__blog_text">
                                                <span>October 18, 2023</span>
                                                <ul>
                                                    <li>
                                                        <i class="fa-sharp fa-solid fa-circle-user"></i> By zyan
                                                    </li>
                                                    <li>
                                                        <i class="fa-sharp fa-solid fa-comments"></i> Comments (0)
                                                    </li>
                                                </ul>
                                                <a
                                                    href="https://wp.shsarker.xyz/zyan/the-standard-personal-my-portfolio/">The
                                                    standard personal My portfolio</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 01 blog item end -->
                                    <!-- 01 blog item start -->

                                    <div class="col-xl-4 col-md-6">
                                        <div class="tf__slingle_blog fade_left" data-trigerId="blogs">
                                            <a href="https://wp.shsarker.xyz/zyan/empowering-your-business-with-innovative-solutions-revolutionizing-your-solutions/"
                                                class="tf__blog_img" data-cursor="read <br> more">
                                                <img decoding="async" width="850" height="430"
                                                    src="./wp-content/uploads/2023/10/list_1.jpg"
                                                    class="attachment-category-thumb size-category-thumb wp-post-image"
                                                    alt=""
                                                    srcset="./wp-content/uploads/2023/10/list_1.jpg 850w, ./wp-content/uploads/2023/10/list_1-300x152.jpg 300w, ./wp-content/uploads/2023/10/list_1-768x389.jpg 768w"
                                                    sizes="(max-width: 850px) 100vw, 850px" /> </a>
                                            <div class="tf__blog_text">
                                                <span>October 18, 2023</span>
                                                <ul>
                                                    <li>
                                                        <i class="fa-sharp fa-solid fa-circle-user"></i> By zyan
                                                    </li>
                                                    <li>
                                                        <i class="fa-sharp fa-solid fa-comments"></i> Comments (0)
                                                    </li>
                                                </ul>
                                                <a
                                                    href="https://wp.shsarker.xyz/zyan/empowering-your-business-with-innovative-solutions-revolutionizing-your-solutions/">Empowering
                                                    your business with innovative solutions</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 01 blog item end -->
                                    <!-- 01 blog item start -->

                                    <div class="col-xl-4 col-md-6">
                                        <div class="tf__slingle_blog fade_left" data-trigerId="blogs">
                                            <a href="https://wp.shsarker.xyz/zyan/hello-world/" class="tf__blog_img"
                                                data-cursor="read <br> more">
                                                <img decoding="async" width="850" height="430"
                                                    src="./wp-content/uploads/2023/10/list_3.jpg"
                                                    class="attachment-category-thumb size-category-thumb wp-post-image"
                                                    alt=""
                                                    srcset="./wp-content/uploads/2023/10/list_3.jpg 850w, ./wp-content/uploads/2023/10/list_3-300x152.jpg 300w, ./wp-content/uploads/2023/10/list_3-768x389.jpg 768w"
                                                    sizes="(max-width: 850px) 100vw, 850px" /> </a>
                                            <div class="tf__blog_text">
                                                <span>October 18, 2023</span>
                                                <ul>
                                                    <li>
                                                        <i class="fa-sharp fa-solid fa-circle-user"></i> By zyan
                                                    </li>
                                                    <li>
                                                        <i class="fa-sharp fa-solid fa-comments"></i> Comments (1)
                                                    </li>
                                                </ul>
                                                <a href="https://wp.shsarker.xyz/zyan/hello-world/">The standard
                                                    personal My portfolio</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 01 blog item end -->
                                    <div class="col-12">
                                        <a class="common_btn" href="#">
                                            More Blog <i aria-hidden="true" class="fal fa-plus"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <div class="elementor-element elementor-element-2ffa97c elementor-widget elementor-widget-subscribe_section"
                    data-id="2ffa97c" data-element_type="widget" data-widget_type="subscribe_section.default">
                    <div class="elementor-widget-container">
                        <div class="tf__subscribe"
                            style="background: url(./wp-content/uploads/2023/10/subscribe-scaled.jpg)">
                            <div class="tf__subscribe_overlay pt_115 xs_pt_75 pb_120 xs_pb_80">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-8 col-md-10 m-auto">
                                            <div class="tf__subscribe_text">
                                                <h3 class="has-animation">SUBSCRIBE MY NEWSLETTER</h3>

                                                <div class="wpcf7 no-js" id="wpcf7-f105-p346-o3" lang="en-US" dir="ltr">
                                                    <div class="screen-reader-response">
                                                        <p role="status" aria-live="polite" aria-atomic="true"></p>
                                                        <ul></ul>
                                                    </div>
                                                    <form action="/zyan/#wpcf7-f105-p346-o3" method="post"
                                                        class="wpcf7-form init" aria-label="Contact form"
                                                        novalidate="novalidate" data-status="init">
                                                        <div style="display: none;">
                                                            <input type="hidden" name="_wpcf7" value="105" />
                                                            <input type="hidden" name="_wpcf7_version" value="5.8.2" />
                                                            <input type="hidden" name="_wpcf7_locale" value="en_US" />
                                                            <input type="hidden" name="_wpcf7_unit_tag"
                                                                value="wpcf7-f105-p346-o3" />
                                                            <input type="hidden" name="_wpcf7_container_post"
                                                                value="346" />
                                                            <input type="hidden" name="_wpcf7_posted_data_hash"
                                                                value="" />
                                                        </div>
                                                        <span class="wpcf7-form-control-wrap"
                                                            data-name="your-email"><input size="40"
                                                                class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-email"
                                                                autocomplete="email" aria-required="true"
                                                                aria-invalid="false" placeholder="Enter Your Email"
                                                                value="" type="email" name="your-email" /></span>
                                                        <input
                                                            class="wpcf7-form-control wpcf7-submit has-spinner common_btn"
                                                            type="submit" value="Notify Now" />
                                                        <div class="wpcf7-response-output" aria-hidden="true"></div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="magic-cursor">
            <div id="ball"></div>
        </div>
        <!--================================
        SCROLL BUTTON START
    =================================-->
        <div class="progress active">
            <svg class="progress-svg" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
            </svg>
        </div>
        <!--================================
        SCROLL BUTTON END
    =================================-->


        <footer class="footer" id="footer">
            <div class="footer-container">
                <div class="pt_120 xs_pt_80 sm_pt_80">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="tf__footer_content fade_right" data-trigerId="footer" data-stagger=".25">
                                    <div class="icon">
                                        <div class="icon-contianer">
                                            <img src="./wp-content/themes/zyan_1/assets/svg/map.svg" alt="footer"
                                                class="img-fluid w-100 svg" />
                                        </div>
                                    </div>
                                    <div class="text">
                                        <h3>Address</h3>
                                        2118 Thornridge Cir. Syracuse, Connecticut 35624
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="tf__footer_content fade_right" data-trigerId="footer" data-stagger=".25">
                                    <div class="icon">
                                        <div class="icon-contianer">
                                            <img src="./wp-content/themes/zyan_1/assets/svg/phone.svg" alt="footer"
                                                class="img-fluid w-100 svg" />
                                        </div>
                                    </div>
                                    <div class="text">
                                        <h3>Lets talk us</h3>
                                        <a href="+91-9993933445">+91-9993933445</a> <a href="1234567890">(603)
                                            555-0123</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="tf__footer_content fade_right" data-trigerId="footer" data-stagger=".25">
                                    <div class="icon">
                                        <div class="icon-contianer">
                                            <img src="./wp-content/themes/zyan_1/assets/svg/envelope.svg" alt="footer"
                                                class="img-fluid w-100 svg" />
                                        </div>
                                    </div>
                                    <div class="text">
                                        <h3>Send us email</h3>
                                        <a href="mailto:chandrapiyush649@gmail.com">chandrapiyush649@gmail.com</a><a
                                            href="mailto:example@gmail.com">curtis@example.com</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="tf__footer_copyright">
                                    <p>© CodeeFly 2023 | All Rights Reserved</p>
                                    <ul>
                                        <li>
                                            <a href="#" class="text_hover_animaiton">Trams &amp; Condition</a>
                                        </li>
                                        <li>
                                            <a href="#" class="text_hover_animaiton">Privacy Policy</a>
                                        </li>
                                        <li>
                                            <a href="#" class="text_hover_animaiton">Sitemap</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script src="https://kit.fontawesome.com/bb6f3b909b.js" crossorigin="anonymous"></script>
    <script>
    // Function to scroll to a specific section of the page
    function scrollToSection(contact - form - section) {
        document.getElementById(contact - form - section).scrollIntoView({
            behavior: 'smooth'
        });
    }
    </script>
    <script>
    $(document).ready(function() {
        $("#submitForm").click(function(e) {
            e.preventDefault(); // Prevent the default form submission

            // Get form data
            var formData = $("#myForm").serialize();

            // AJAX call
            $.ajax({
                type: "POST",
                url: "submit.php", // Path to your PHP file handling form submission
                data: formData,
                success: function(response) {
                    // Handle the response here (e.g., show success message)
                    $("#response").html(response); // Display response
                }
            });
        });
    });
    </script>

    <script type="text/javascript" src="./wp-content/themes/zyan_1/assets/js/plugin.js?ver=1.0.0" id="plugin-js">
    </script>
    <script type="text/javascript" src="./wp-content/themes/zyan_1/assets/js/scroll_button.js?ver=1.0.0"
        id="scroll_button-js"></script>
    <script type="text/javascript" src="./wp-content/themes/zyan_1/assets/js/sticky_sidebar.js?ver=1.0.0"
        id="sticky_sidebar-js"></script>
    <script type="text/javascript" src="./wp-content/themes/zyan_1/assets/js/animation.js?ver=1.0.0" id="animation-js">
    </script>
    <script type="text/javascript" src="./wp-content/themes/zyan_1/assets/js/main.js?ver=1.0.0" id="zyan-init-js">
    </script>
    <script type="text/javascript" src="./wp-content/plugins/elementor/assets/js/webpack.runtime.min.js?ver=3.17.1"
        id="elementor-webpack-runtime-js"></script>
    <script type="text/javascript" src="./wp-content/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.17.1"
        id="elementor-frontend-modules-js"></script>
    <script type="text/javascript" src="./wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min.js?ver=4.0.2"
        id="elementor-waypoints-js"></script>
    <script type="text/javascript" src="./wp-includes/js/jquery/ui/core.min.js?ver=1.13.2" id="jquery-ui-core-js">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script type="text/javascript" id="elementor-frontend-js-before">
    /* <![CDATA[ */
    var elementorFrontendConfig = {
        "environmentMode": {
            "edit": false,
            "wpPreview": false,
            "isScriptDebug": false
        },
        "i18n": {
            "shareOnFacebook": "Share on Facebook",
            "shareOnTwitter": "Share on Twitter",
            "pinIt": "Pin it",
            "download": "Download",
            "downloadImage": "Download image",
            "fullscreen": "Fullscreen",
            "zoom": "Zoom",
            "share": "Share",
            "playVideo": "Play Video",
            "previous": "Previous",
            "next": "Next",
            "close": "Close",
            "a11yCarouselWrapperAriaLabel": "Carousel | Horizontal scrolling: Arrow Left & Right",
            "a11yCarouselPrevSlideMessage": "Previous slide",
            "a11yCarouselNextSlideMessage": "Next slide",
            "a11yCarouselFirstSlideMessage": "This is the first slide",
            "a11yCarouselLastSlideMessage": "This is the last slide",
            "a11yCarouselPaginationBulletMessage": "Go to slide"
        },
        "is_rtl": false,
        "breakpoints": {
            "xs": 0,
            "sm": 480,
            "md": 768,
            "lg": 1025,
            "xl": 1440,
            "xxl": 1600
        },
        "responsive": {
            "breakpoints": {
                "mobile": {
                    "label": "Mobile Portrait",
                    "value": 767,
                    "default_value": 767,
                    "direction": "max",
                    "is_enabled": true
                },
                "mobile_extra": {
                    "label": "Mobile Landscape",
                    "value": 880,
                    "default_value": 880,
                    "direction": "max",
                    "is_enabled": false
                },
                "tablet": {
                    "label": "Tablet Portrait",
                    "value": 1024,
                    "default_value": 1024,
                    "direction": "max",
                    "is_enabled": true
                },
                "tablet_extra": {
                    "label": "Tablet Landscape",
                    "value": 1200,
                    "default_value": 1200,
                    "direction": "max",
                    "is_enabled": false
                },
                "laptop": {
                    "label": "Laptop",
                    "value": 1366,
                    "default_value": 1366,
                    "direction": "max",
                    "is_enabled": false
                },
                "widescreen": {
                    "label": "Widescreen",
                    "value": 2400,
                    "default_value": 2400,
                    "direction": "min",
                    "is_enabled": false
                }
            }
        },
        "version": "3.17.1",
        "is_static": false,
        "experimentalFeatures": {
            "e_dom_optimization": true,
            "e_optimized_assets_loading": true,
            "e_optimized_css_loading": true,
            "additional_custom_breakpoints": true,
            "container": true,
            "e_swiper_latest": true,
            "landing-pages": true,
            "e_global_styleguide": true
        },
        "urls": {
            "assets": "https:\/\/wp.shsarker.xyz\/zyan\/wp-content\/plugins\/elementor\/assets\/"
        },
        "swiperClass": "swiper",
        "settings": {
            "page": [],
            "editorPreferences": []
        },
        "kit": {
            "active_breakpoints": ["viewport_mobile", "viewport_tablet"],
            "lightbox_enable_counter": "yes",
            "lightbox_enable_fullscreen": "yes",
            "lightbox_enable_zoom": "yes",
            "lightbox_enable_share": "yes",
            "lightbox_title_src": "title",
            "lightbox_description_src": "description"
        },
        "post": {
            "id": 346,
            "title": "Zyan%20%E2%80%93%20Personal%20Portfolio%20Theme",
            "excerpt": "",
            "featuredImage": false
        }
    };
    /* ]]> */
    </script>
    <script type="text/javascript" src="./wp-content/plugins/elementor/assets/js/frontend.min.js?ver=3.17.1"
        id="elementor-frontend-js"></script>
</body>

</html>