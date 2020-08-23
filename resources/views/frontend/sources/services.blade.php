@if(env('APP_ENV') == 'production')

    <!-- Google Search Console -->
    <meta name="google-site-verification" content="Wt1RKFI-XNhu8CWx6aG6wYYdawskByEp3gYOHxQkb10" />

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-174660091-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-174660091-1');
        gtag('config', 'AW-606382949');
    </script>

    <!-- Event snippet for Контакт conversion page
    In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
    <script>
        function gtag_report_conversion(url) {
            var callback = function () {
                if (typeof(url) != 'undefined') {
                    window.location = url;
                }
            };
            gtag('event', 'conversion', {
                'send_to': 'AW-606382949/N7H9CMKdrNsBEOXWkqEC',
                'event_callback': callback
            });
            return false;
        }
    </script>


    <!-- Yandex Webmaster -->
    <meta name="yandex-verification" content="2e7efb253224f5bc" />

    <!-- Yandex Email For Domain -->
    <meta name="yandex-verification" content="cceeb69436cef6a6" />

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" > (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)}; m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)}) (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym"); ym(66219841, "init", { clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); </script> <noscript><div><img src="https://mc.yandex.ru/watch/66219841" style="position:absolute; left:-9999px;" alt="" /></div></noscript>

    <!-- Jivosite -->
    <script src="//code-ya.jivosite.com/widget/WGe5rR2CE2" async></script>

    <!-- Zadarma Calltracking -->
    <script>(function(w, c){(w[c]=w[c]||[]).push(function(){new zTracker({"id":"da8947630a206ba03fca23de175aab833446","metrics":{"metrika":"66219841","ga":"UA-174660091-1"},"cssClass":"calltracking"});});})(window, "zTrackerCallbacks");</script>
    <script async id="zd_ct_phone_script" src="https://my.zadarma.com/js/ct_phone.min.js"></script>

@endif
