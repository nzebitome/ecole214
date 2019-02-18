if (self.CavalryLogger) { CavalryLogger.start_js(["Ahlcf"]); }

__d("DetectBrokenProxyCache",["AsyncSignal","Cookie","URI"],(function(a,b,c,d,e,f){function a(a,c){var d=b("Cookie").get(c);if(d!=a&&d!=null&&a!="0"){c={c:"si_detect_broken_proxy_cache",m:c+" "+a+" "+d};a=new(b("URI"))("/common/scribe_endpoint.php").getQualifiedURI().toString();new(b("AsyncSignal"))(a,c).send()}}e.exports={run:a}}),null);
__d("InstanceProxy",[],(function(a,b,c,d,e,f){__p&&__p();function a(a){"use strict";this.$1=a}a.prototype.getInstance=function(){"use strict";return this.$1};a.prototype.setInstance=function(a){"use strict";this.$1=a};e.exports=a}),null);
__d("TrackingPixel",["Arbiter","ControlledReferer","DeferredCookie","FBLogger"],(function(a,b,c,d,e,f){__p&&__p();var g={_iframe:void 0,loadWithNoReferrer:function(a){__p&&__p();if(!b("DeferredCookie").canEmbedThirdPartyPixel()){b("FBLogger")("tracking_pixel").mustfix("Attempting to load a TrackingPixel (%s) while cookies are deferred. This is not allowed because tracking pixels sometimes set cookies.",a);return}if(!g._iframe){var c=document.createElement("iframe");c.frameborder=0;c.width=c.height=1;c.style.position="absolute";c.style.top="-10px";b("ControlledReferer").useFacebookReferer(c,function(){b("Arbiter").inform("TrackingPixel/iframeIsLoaded",null,"persistent")},null);document.body.appendChild(c);g._iframe=c}b("Arbiter").subscribe("TrackingPixel/iframeIsLoaded",function(){var b=g._iframe.contentWindow;b=new b.Image();b.src=a})}};e.exports=g}),null);
__d("HelpLiteFlyoutBootloader",["regeneratorRuntime","Deferred","JSResource"],(function(a,b,c,d,e,f){"use strict";__p&&__p();var g=!1,h=null,i=null,j={loadFlyout:function(){return b("regeneratorRuntime").async(function(a){while(1)switch(a.prev=a.next){case 0:j.loadFlyoutWithHelpType(null);case 1:case"end":return a.stop()}},null,this)},loadFlyoutWithHelpType:function(a){__p&&__p();var c,d,e,f;return b("regeneratorRuntime").async(function(h){__p&&__p();while(1)switch(h.prev=h.next){case 0:h.next=2;return b("regeneratorRuntime").awrap(b("JSResource")("HelpLiteFlyout").__setRef("HelpLiteFlyoutBootloader").load());case 2:c=h.sent;if(!g){h.next=6;break}c.refreshHelp();return h.abrupt("return");case 6:g=!0;a&&j.setHelpType(a);h.next=10;return b("regeneratorRuntime").awrap(this._getDeferredFlyoutElements().getPromise());case 10:d=h.sent,e=d.flyout,f=d.flyoutRoot,c.registerFlyoutToggler(e,f),c.loadBody();case 15:case"end":return h.stop()}},null,this)},setHelpType:function(a){i=a},getHelpType:function(){return i},_getDeferredFlyoutElements:function(){h==null&&(h=new(b("Deferred"))());return h},registerFlyoutElements:function(a,b){this._getDeferredFlyoutElements().resolve({flyout:a,flyoutRoot:b})}};e.exports=j}),null);
__d("RequiredFormListener",["Event","Input"],(function(a,b,c,d,e,f){__p&&__p();b("Event").listen(document.documentElement,"submit",function(a){a=a.getTarget();if(a.getAttribute("novalidate"))return!0;a=a.getElementsByTagName("*");for(var c=0;c<a.length;c++)if(a[c].getAttribute("required")&&b("Input").isEmpty(a[c])){a[c].focus();return!1}},b("Event").Priority.URGENT)}),null);
__d("AccessibilityLogger",["AsyncSignal","Cookie"],(function(a,b,c,d,e,f){__p&&__p();var g={COOKIE:"a11y",DECAY_MS:6*60*60*1e3,DEFAULT:{sr:0,"sr-ts":Date.now(),jk:0,"jk-ts":Date.now(),kb:0,"kb-ts":Date.now(),hcm:0,"hcm-ts":Date.now()},getCookie:function(){var a=g.DEFAULT,c=b("Cookie").get(g.COOKIE);if(c){c=JSON.parse(c);for(var d in a)d in c&&(a[d]=c[d])}return a},logKey:function(a,c){var d=g.getCookie();d[a]++;var e=Date.now();e-d[a+"-ts"]>g.DECAY_MS&&(new(b("AsyncSignal"))("/ajax/accessibilitylogging",{eventName:c,times_pressed:d[a]}).send(),d[a+"-ts"]=e,d[a]=0);b("Cookie").set(g.COOKIE,JSON.stringify(d))},logHCM:function(){g.logKey("hcm","hcm_users")},logSRKey:function(){g.logKey("sr","sr_users")},logJKKey:function(){g.logKey("jk","jk_users")},logFocusIn:function(){g.logKey("kb","kb_users")}};e.exports=g}),null);
__d("ClickRefUtils",["DataAttributeUtils"],(function(a,b,c,d,e,f){__p&&__p();var g={get_intern_ref:function(a){__p&&__p();if(a){var b={profile_minifeed:1,gb_content_and_toolbar:1,gb_muffin_area:1,ego:1,bookmarks_menu:1,jewelBoxNotif:1,jewelNotif:1,BeeperBox:1,searchBarClickRef:1};for(var a=a;a&&a!=document.body;a=a.parentNode){if(!a.id||typeof a.id!=="string")continue;if(a.id.substr(0,8)=="pagelet_")return a.id.substr(8);if(a.id.substr(0,8)=="box_app_")return a.id;if(b[a.id])return a.id}}return"-"},get_href:function(a){a=a.getAttribute&&(a.getAttribute("ajaxify")||a.getAttribute("data-endpoint"))||a.action||a.href||a.name;return typeof a==="string"?a:null},should_report:function(a,c){if(c=="FORCE")return!0;return c=="INDIRECT"?!1:a&&(g.get_href(a)||a.getAttribute&&b("DataAttributeUtils").getDataFt(a))}};e.exports=g}),null);
__d("ClickRefLogger",["Arbiter","Banzai","ClickRefUtils","Cookie","Env","ScriptPath","SessionName","Vector","$","collectDataAttributes","ge","pageID"],(function(a,b,c,d,e,f){__p&&__p();var g={delay:0,retry:!0};function h(a){if(!b("ge")("content"))return[0,0,0,0];b("$")("content");a=b("Vector").getEventPosition(a);return[a.x,a.y,0,0]}function i(c,d,e,f){__p&&__p();var g="r",i=[0,0,0,0],j,k;if(e){j=e.type;j=="click"&&b("ge")("content")&&(i=h(e));var l=0;e.ctrlKey&&(l+=1);e.shiftKey&&(l+=2);e.altKey&&(l+=4);e.metaKey&&(l+=8);l&&(j+=l)}d&&(k=b("ClickRefUtils").get_href(d));l=b("collectDataAttributes")(e?e.target||e.srcElement:d,["ft","gt"]);Object.assign(l.ft,f.ft);Object.assign(l.gt,f.gt);typeof l.ft.ei==="string"&&delete l.ft.ei;e&&e.which&&(l.ft.click_type=e.which===1?"left":e.which===2?"middle":"right");f=[c._ue_ts,c._ue_count,k||"-",c._context,j||"-",b("ClickRefUtils").get_intern_ref(d),g,a.URI?a.URI.getRequestURI(!0,!0).getUnqualifiedURI().toString():location.pathname+location.search+location.hash,l].concat(i).concat(b("pageID")).concat(b("ScriptPath").getScriptPath());return f}b("Arbiter").subscribe("ClickRefAction/new",function(a,c){if(b("ClickRefUtils").should_report(c.node,c.mode)){a=i(c.cfa,c.node,c.event,c.extra_data);b("Cookie").set("act",c.cfa.ue);c=[b("SessionName").getName(),Date.now(),"act"];b("Banzai").post("click_ref_logger",Array.prototype.concat(c,a),g)}});b("Arbiter").subscribe("ClickRefAction/contextmenu",function(a,c){if(b("ClickRefUtils").should_report(c.node,c.mode)){a=i(c.cfa,c.node,c.event,c.extra_data);b("Cookie").set("act",c.cfa.ue);c=[b("SessionName").getName(),Date.now(),"act"];b("Banzai").post("click_ref_logger",Array.prototype.concat(c,a),g)}});function c(a){__p&&__p();function c(a){var b="";for(var c=0;c<a.length;c++)b+=String.fromCharCode(1^a.charCodeAt(c));return b}function d(a,b,c,e){__p&&__p();var f=b[c];if(f&&a&&f in a)if(c+1<b.length)d(a[f],b,c+1,e);else{var g=a[f];b=function(){setTimeout(e.bind(null,arguments));return g.apply(this,arguments)};b.toString=g.toString.bind(g);Object.defineProperty(a,f,{configurable:!1,writable:!0,value:b})}}var e={},f={},g=!1;function h(a,b){if(f[a])return;f[a]=e[a]=1}a=a[c("jiri")];if(a){var i=[];c(a).split(",").map(function(a,f){__p&&__p();var j=a.substring(1).split(":"),k;switch(a.charAt(0)){case"1":i.push(function(a){window[j[0]]&&h(f,j[0])});break;case"2":k=new RegExp(j[0]);d(window,j,2,function(b){b=b[j[1]];typeof b==="string"&&k.test(b)&&h(f,a)});break;case"3":d(window,j,0,function(){for(var a=i.length;a--;)i[a]();a=Object.keys(e);a.length&&(e={},setTimeout(b("Banzai")[c("qnru")].bind(b("Banzai"),c("islg"),{m:""+a}),5e3))});break;case"4":g=!0;break}})}}try{c(b("Env"))}catch(a){}}),null);
__d("DimensionTracking",["Cookie","Event","debounce","getViewportDimensions","isInIframe"],(function(a,b,c,d,e,f){function a(){var a=b("getViewportDimensions")();b("Cookie").set("wd",a.width+"x"+a.height)}b("isInIframe")()||(setTimeout(a,100),b("Event").listen(window,"resize",b("debounce")(a,250)),b("Event").listen(window,"focus",a))}),null);
__d("HighContrastMode",["AccessibilityLogger","CSS","CurrentUser","DOM","Style","URI","emptyFunction"],(function(a,b,c,d,e,f){__p&&__p();var g={init:function(a){__p&&__p();var c=new(b("URI"))(window.location.href);if(c.getPath().indexOf("/intern/")===0)return;if(window.top!==window.self)return;c=b("DOM").create("div");b("DOM").appendContent(document.body,c);c.style.cssText="border: 1px solid !important;border-color: red green !important;position: fixed;height: 5px;top: -999px;background-image: url("+a.spacerImage+") !important;";a=b("Style").get(c,"background-image");var d=b("Style").get(c,"border-top-color"),e=b("Style").get(c,"border-right-color");d=d==e&&a&&(a=="none"||a=="url(invalid-url:)");d&&(b("CSS").conditionClass(document.documentElement,"highContrast",d),b("CurrentUser").getID()&&b("AccessibilityLogger").logHCM());b("DOM").remove(c);g.init=b("emptyFunction")}};e.exports=g}),null);
__d("KappaWrapper",["AsyncSignal","setTimeoutAcrossTransitions"],(function(a,b,c,d,e,f){var g=!1;e.exports={forceStart:function(a,c,d){var e=0,f=function d(){new(b("AsyncSignal"))("/si/kappa/",{Ko:"a"}).send(),++e<a&&b("setTimeoutAcrossTransitions")(d,c*1e3)};b("setTimeoutAcrossTransitions")(f,(c+d)*1e3)},start:function(a,b,c){g||(g=!0,this.forceStart(a,b,c))}}}),null);
__d("Chromedome",["fbt"],(function(a,b,c,d,e,f,g){__p&&__p();f.start=function(a){__p&&__p();if(a.off||top!==window||!/(^|\.)facebook\.(com|sg)$/.test(document.domain))return;var b=a.stop||g._("Stop\u00a0!"),c=a.text||g._("Il s\u2019agit d\u2019une fonctionnalit\u00e9 de navigateur con\u00e7ue pour les d\u00e9veloppeurs. Si quelqu\u2019un vous a invit\u00e9(e) \u00e0 copier-coller quelque chose ici pour activer une fonctionnalit\u00e9 ou soit-disant pirater le compte d\u2019un tiers, sachez que c\u2019est une escroquerie permettant \u00e0 cette personne d\u2019acc\u00e9der \u00e0 votre compte Facebook."),d=a.more||g._("Voir {url} pour plus d\u2019informations.",[g._param("url","https://www.facebook.com/selfxss")]);if((window.chrome||window.safari)&&!a.textonly){var e="font-family:helvetica; font-size:20px; ";[[b,a.c1||e+"font-size:50px; font-weight:bold; color:red; -webkit-text-stroke:1px black;"],[c,a.c2||e],[d,a.c3||e],["",""]].map(function(a){setTimeout(console.log.bind(console,"\n%c"+a[0],a[1]))})}else{b=[""," .d8888b.  888                       888","d88P  Y88b 888                       888","Y88b.      888                       888",' "Y888b.   888888  .d88b.  88888b.   888','    "Y88b. 888    d88""88b 888 "88b  888','      "888 888    888  888 888  888  Y8P',"Y88b  d88P Y88b.  Y88..88P 888 d88P",' "Y8888P"   "Y888  "Y88P"  88888P"   888',"                           888","                           888","                           888"];a=(""+c).match(/.{35}.+?\s+|.+$/g);e=Math.floor(Math.max(0,(b.length-a.length)/2));for(var c=0;c<b.length||c<a.length;c++){var f=b[c];b[c]=f+new Array(45-f.length).join(" ")+(a[c-e]||"")}console.log("\n\n\n"+b.join("\n")+"\n\n"+d+"\n");return}}}),null);
__d("StickyPlaceholderInput",["CSS","DOM","Event","Input","Parent","emptyFunction","getElementText"],(function(a,b,c,d,e,f){__p&&__p();function g(a){return b("Parent").byClass(a,"uiStickyPlaceholderInput")}function h(a){return b("DOM").scry(a,".placeholder")[0]}function i(a){a=a||window.event;var c=a.target||a.srcElement;if(b("DOM").isNodeOfType(c,["input","textarea"])){var d=g(c);d&&setTimeout(function(){b("CSS").conditionClass(d,"uiStickyPlaceholderEmptyInput",!c.value.length)},0)}}var j={init:function(){j.init=b("emptyFunction"),b("Event").listen(document.documentElement,{keydown:i,keyup:i,paste:i,focusout:i})},registerInput:function(a){j.init();var c=a.getAttribute("placeholder")||"";if(c.length)if(document.activeElement===a)var d=b("Event").listen(a,"blur",function(){j.manipulateInput(a,c),d.remove()});else j.manipulateInput(a,c)},manipulateInput:function(a,c){var d=b("DOM").create("div",{className:"placeholder","aria-hidden":"true"},c),e=b("DOM").create("div",{className:"uiStickyPlaceholderInput"},d);b("DOM").isNodeOfType(a,"textarea")&&b("CSS").addClass(e,"uiStickyPlaceholderTextarea");b("Event").listen(d,"click",function(){a.focus()});a.value===c&&(a.value="");a.setAttribute("placeholder","");b("DOM").replace(a,e);b("DOM").appendContent(e,a);b("CSS").conditionClass(e,"uiStickyPlaceholderEmptyInput",!a.value.length)},setPlaceholderText:function(a,c){var d=g(a);if(!d)b("Input").setPlaceholder(a,c);else{a=h(d);a&&b("DOM").setContent(a,c)}},getPlaceholderText:function(a){a=g(a);a=h(a);return a&&b("getElementText")(a)},update:function(a){var c=g(a);c&&b("CSS").conditionClass(c,"uiStickyPlaceholderEmptyInput",!a.value.length)},getVisibleText:function(a){var c=g(a);if(b("CSS").hasClass(c,"uiStickyPlaceholderEmptyInput")){c=h(c);return c&&b("getElementText")(c)}else return a.value}};e.exports=j}),null);
__d("ArtillerySegment",["invariant","performanceAbsoluteNow"],(function(a,b,c,d,e,f,g){__p&&__p();var h=0;function a(a){"use strict";a||g(0,1496),"category"in a&&"description"in a||g(0,3138,JSON.stringify(a)),this.$1=!1,this.$2=babelHelpers["extends"]({},a,{id:(h++).toString(36)}),this.$3=[]}a.prototype.getID=function(){"use strict";return this.$2.id};a.prototype.begin=function(){"use strict";this.$2.begin=b("performanceAbsoluteNow")();return this};a.prototype.end=function(){"use strict";this.$2.end=b("performanceAbsoluteNow")();return this};a.prototype.appendChild=function(){"use strict";this.$1&&g(0,3139,this.$2.description);for(var a=arguments.length,b=new Array(a),c=0;c<a;c++)b[c]=arguments[c];b.forEach(function(a){this.$3.push(a.getID())}.bind(this));return this};a.prototype.setPosted=function(){"use strict";this.$1=!0;return this};a.prototype.getPostData=function(){"use strict";return babelHelpers["extends"]({},this.$2,{id:this.$2.id,children:this.$3.slice()})};e.exports=a}),null);
__d("ArtillerySequence",["invariant"],(function(a,b,c,d,e,f,g){__p&&__p();var h=0;function a(a){"use strict";a||g(0,1496),"description"in a||g(0,1497,JSON.stringify(a)),this.$1=!1,this.$2=babelHelpers["extends"]({},a,{id:(h++).toString(36)}),this.$3=[]}a.prototype.getID=function(){"use strict";return this.$2.id};a.prototype.addSegment=function(){"use strict";this.$1&&g(0,1498,this.$2.description);for(var a=arguments.length,b=new Array(a),c=0;c<a;c++)b[c]=arguments[c];b.forEach(function(a){this.$3.push(a.getID())}.bind(this));return this};a.prototype.setPosted=function(){"use strict";this.$1=!0;return this};a.prototype.getPostData=function(){"use strict";return babelHelpers["extends"]({},this.$2,{id:this.$2.id,segments:this.$3.slice()})};e.exports=a}),null);
__d("ArtilleryTrace",["invariant","ArtillerySegment","ArtillerySequence"],(function(a,b,c,d,e,f,g){__p&&__p();function a(){"use strict";this.$1=!1,this.$3=void 0,this.$4={},this.$5={},this.$6=[],this.$7=[],this.$8={},this.$9=[],this.$10=null}a.prototype.createSequence=function(a){"use strict";this.$1&&g(0,4917);a=new(b("ArtillerySequence"))(a);this.$6.push(a);return a};a.prototype.createSegment=function(a){"use strict";this.$1&&g(0,4918);a=new(b("ArtillerySegment"))(a);this.$7.push(a);return a};a.prototype.markSegment=function(a,b){"use strict";this.$1&&g(0,4919);this.$8[b]=a.getID();return this};a.prototype.connectTrace=function(a,b){"use strict";this.$1&&g(0,4919);b=b||this.$2;b||g(0,4920);this.$9.push({segment:a.getID(),trace:b});return this};a.prototype.setID=function(a,b){"use strict";!this.$2&&!this.$3||g(0,4921);this.$2=a;this.$3=b;return this};a.prototype.getID=function(){"use strict";return this.$2};a.prototype.getArtillery2ID=function(){"use strict";return this.$3};a.prototype.addProperty=function(a,b){"use strict";this.$4[a]=b;return this};a.prototype.addTagset=function(a,b){"use strict";this.$5[a]=b;return this};a.prototype.addActivePolicies=function(a){"use strict";this.addTagset("active_policies",a);this.addTagset("policy",a);return this};a.prototype.getProperty=function(a){"use strict";return this.$4[a]};a.prototype.getTagset=function(a){"use strict";return this.$5[a]};a.prototype.getActivePolicies=function(){"use strict";return this.getTagset("active_policies")};a.prototype.post=function(){"use strict";this.$1&&g(0,4922,this.$2);this.$1=!0;var a=this.$10;a&&a({id:this.$2,artillery2Id:this.$3,properties:this.$4,tagsets:this.$5,sequences:this.$6.map(function(a){return a.setPosted().getPostData()}),segments:this.$7.map(function(a){return a.setPosted().getPostData()}),marks:Object.assign({},this.$8),connections:this.$9.slice()})};a.prototype.setOnPost=function(a){"use strict";this.$10&&g(0,4923);this.$10=a;return this};a.prototype.isPosted=function(){"use strict";return this.$1};e.exports=a}),null);
__d("ClientServiceWorkerMessage",[],(function(a,b,c,d,e,f){__p&&__p();function a(a,b,c){"use strict";this.$1=a,this.$2=b,this.$3=c}a.prototype.sendViaController=function(){"use strict";if(!navigator.serviceWorker||!navigator.serviceWorker.controller)return;var a=new self.MessageChannel();this.$3&&(a.port1.onmessage=this.$3);navigator.serviceWorker.controller.postMessage({command:this.$1,data:this.$2},[a.port2])};e.exports=a}),null);
__d("ServiceWorkerRegistration",["Promise","BrowserPaymentHandlerConfig","ClientServiceWorkerMessage","EventListener","Run","promiseDone"],(function(a,b,c,d,e,f){__p&&__p();var g=!!navigator.serviceWorker,h={},i=Object.freeze({name:"Facebook Payments",method:"basic-card",capabilities:{supportedNetworks:["discover"],supportedTypes:["credit","debit"]}}),j=Object.freeze({name:"Facebook Payments",method:self.location.origin,capabilities:{supportedNetworks:["discover"],supportedTypes:["credit","debit"]}});function k(){var a=navigator.serviceWorker;if(!g||!a)throw new Error("serviceWorker is not supported in this browser");return a}var l={isSupported:function(){return g},registerWorkerIfUnregisteredAfterDD:function(a){b("Run").onAfterLoad(function(){l.registerWorkerIfUnregistered(a)})},registerWorkerIfUnregistered:function(a){__p&&__p();if(h[a])return h[a];var c=k();h[a]=new(b("Promise"))(function(d,e){this.getWorkerRegistration(a).done(function(f){if(!f){var g=b("EventListener").listen(window,"message",function(a){a.data&&a.data.command&&a.data.command==="ServiceWorkerInstallError"&&e()});b("promiseDone")(b("Promise").resolve(c.register(a,{updateViaCache:"all"})),function(){g.remove(),b("promiseDone")(b("Promise").resolve(c.ready),d)})}else d(f),b("BrowserPaymentHandlerConfig").enabled&&f.paymentManager&&f.paymentManager.instruments&&(f.paymentManager.instruments.set("Facebook",j),f.paymentManager.instruments.set("FacebookBasicCard",i))})}.bind(this));h[a].done(function(){h[a]=null});return h[a]},unregisterControllingWorker:function(){return new(b("Promise"))(function(a,c){c=new(b("ClientServiceWorkerMessage"))("unregister",{},function(){a(!0)});c.sendViaController()})},getWorkerRegistration:function(a){var c=k();return b("Promise").resolve(c.getRegistration(a))},isAWorkerActivated:function(){return!navigator.serviceWorker||!navigator.serviceWorker.getRegistration?b("Promise").resolve(!1):navigator.serviceWorker.getRegistration().then(function(a){return!!(a&&a.active)})}};e.exports=l}),null);
__d("Artillery",["invariant","ArtilleryTrace","Banzai","ClientServiceWorkerMessage","Run","ServiceWorkerRegistration","forEachObject","mixInEventEmitter","performance"],(function(a,b,c,d,e,f,g){__p&&__p();var h=!1,i=!1,j=[],k,l,m,n={},o={},p=!1,q=!1;function r(){if(h)return;h=!0;b("Banzai").subscribe(b("Banzai").SHUTDOWN,function(){t._postAll()})}function s(){l=null,k=null,o={},n={},m=null,q=!1}var t={isEnabled:function(){return i},createTrace:function(){r();var a=new(b("ArtilleryTrace"))();a.setOnPost(function(a){t.emitAndHold("posttrace",a)});j.push(a);return a},getPageTrace:function(){__p&&__p();k||g(0,4261);if(m)return m;var a=t.createTrace().setID(k,l);b("forEachObject")(n,function(b,c,d){a.addProperty(c,b)});b("forEachObject")(o,function(b,c,d){a.addTagset(c,b)});m=a;return a},setPageProperties:function(a){n=a},addPageTagset:function(a,b){m==null?o[a]=b:m.addTagset(a,b)},setActivePolicies:function(a){this.addPageTagset("active_policies",a),this.addPageTagset("policy",a)},getPageActivePolicies:function(){return this.getPageTagset("active_policies")},enableLogServiceWorker:function(){b("ServiceWorkerRegistration").isSupported()&&(p=!0)},getPageProperty:function(a){if(m==null)return n[a];else return m.getProperty(a)},getPageTagset:function(a){if(m==null)return o[a];else return m.getTagset(a)},enable:function(){i=!0,q||(b("Run").onLeave(s),q=!0)},disable:function(){i=!1},setPageTraceID:function(a,c){if(k===a&&l===c)return;!k&&!l||g(0,4262);k=a;l=c;if(p&&b("performance")&&b("performance").timing&&b("performance").timing.navigationStart){a=new(b("ClientServiceWorkerMessage"))("asw-sendStartupData",{traceID:l,windowStart:b("performance").timing.navigationStart},null);a.sendViaController()}},addPiggyback:function(a,b){window.CavalryLogger&&window.CavalryLogger.getInstance().addPiggyback(a,b)},_postAll:function(){j.forEach(function(a){return!a.isPosted()&&a.post()})}};b("mixInEventEmitter")(t,{posttrace:!0});e.exports=t}),null);
__d("ArtilleryRequestDataCollection",["Arbiter","ArtilleryRequestDataCollector","BigPipe","PageEvents","setTimeoutAcrossTransitions"],(function(a,b,c,d,e,f){"use strict";__p&&__p();var g=12e4,h={},i={},j=!1;function k(a){delete h[a],clearTimeout(i[a]),delete i[a]}a={init:function(){if(j)return;b("Arbiter").subscribe(b("BigPipe").Events.init,function(a,c){a=c.arbiter;a.subscribeOnce(b("PageEvents").AJAXPIPE_FIRST_RESPONSE,function(a,b){a=b.lid;b=b.quickling;b||this.start(a)}.bind(this),"new")}.bind(this));j=!0},start:function(a){if(h[a])return;var c=new(b("ArtilleryRequestDataCollector"))().start();h[a]=c;i[a]=b("setTimeoutAcrossTransitions")(function(){this.disable(a)}.bind(this),g)},finish:function(a){var b=h[a];if(b){b=b.finish();k(a);return b}return{sampleRecorder:null,profilingCountersData:[],userTimingProfilerData:null,timeSliceData:[]}},getCollector:function(a){return h[a]},disable:function(a){var b=h[a];b&&(b.disable(),k(a))}};e.exports=a}),null);
__d("NavigationMetricsEnumJS",[],(function(a,b,c,d,e,f){e.exports=Object.freeze({NAVIGATION_START:"navigationStart",UNLOAD_EVENT_START:"unloadEventStart",UNLOAD_EVENT_END:"unloadEventEnd",REDIRECT_START:"redirectStart",REDIRECT_END:"redirectEnd",FETCH_START:"fetchStart",DOMAIN_LOOKUP_START:"domainLookupStart",DOMAIN_LOOKUP_END:"domainLookupEnd",CONNECT_START:"connectStart",CONNECT_END:"connectEnd",SECURE_CONNECTION_START:"secureConnectionStart",REQUEST_START:"requestStart",RESPONSE_START:"responseStart",RESPONSE_END:"responseEnd",DOM_LOADING:"domLoading",DOM_INTERACTIVE:"domInteractive",DOM_CONTENT_LOADED_EVENT_START:"domContentLoadedEventStart",DOM_CONTENT_LOADED_EVENT_END:"domContentLoadedEventEnd",DOM_COMPLETE:"domComplete",LOAD_EVENT_START:"loadEventStart",LOAD_EVENT_END:"loadEventEnd"})}),null);
__d("ResourceTimingMetricsEnumJS",[],(function(a,b,c,d,e,f){e.exports=Object.freeze({START_TIME:"startTime",REDIRECT_START:"redirectStart",REDIRECT_END:"redirectEnd",FETCH_START:"fetchStart",DOMAIN_LOOKUP_START:"domainLookupStart",DOMAIN_LOOKUP_END:"domainLookupEnd",CONNECT_START:"connectStart",SECURE_CONNECTION_START:"secureConnectionStart",CONNECT_END:"connectEnd",REQUEST_START:"requestStart",RESPONSE_START:"responseStart",RESPONSE_END:"responseEnd"})}),null);
__d("ImageTimingHelper",["Arbiter","BigPipe","URI"],(function(a,b,c,d,e,f){__p&&__p();var g={},h={};function i(a){__p&&__p();var c=a.lid,d=a.pagelet,e=a.images,f=a.timeslice,i=a.ts,j=g[c];j||(j=g[c]=[]);e.forEach(function(a){try{var c=new(b("URI"))(a);a=c.setFragment("").toString()}catch(a){return}if(h[a])return;h[a]=!0;j.push({pagelet:d,timeslice:f,ts:i,uri:a})})}b("Arbiter").subscribe(b("BigPipe").Events.init,function(a,b){b.lid&&b.lid!=="0"&&b.arbiter.subscribe("images_displayed",function(a,b){i(b)})});b("Arbiter").subscribe("MRenderingScheduler/images_displayed",function(a,b){i(b)});e.exports.getImageTimings=function(a){return g[a]||[]}}),null);
__d("NavigationTimingHelper",["NavigationMetricsEnumJS","forEachObject","performance"],(function(a,b,c,d,e,f){__p&&__p();function g(a,c){var d={};b("forEachObject")(b("NavigationMetricsEnumJS"),function(b){var e=c[b];e&&(d[b]=e+a)});return d}var h={getAsyncRequestTimings:function(a){if(!a||!b("performance").timing||!b("performance").getEntriesByName)return void 0;a=b("performance").getEntriesByName(a);return a.length===0?void 0:g(b("performance").timing.navigationStart,a[0])},getPerformanceNavigationTiming:function(){if(!b("performance").timing||!b("performance").getEntriesByType)return{};var a=b("performance").getEntriesByType("navigation");return!a.length?{}:g(b("performance").timing.navigationStart,a[0])},getNavTimings:function(){if(!b("performance").timing)return void 0;var a=babelHelpers["extends"]({},g(0,b("performance").timing),h.getPerformanceNavigationTiming());return g(0,a)}};e.exports=h}),null);
__d("PageletEventsHelper",["Arbiter","PageletEventConstsJS"],(function(a,b,c,d,e,f){__p&&__p();var g="BigPipe/init",h="MRenderingScheduler/init",i="pagelet_event",j="phase_begin",k={},l=[],m=!1;function n(){return{pagelets:{},categories:{},phase_start:{},display_resources:{},all_resources:{}}}function o(a,b,c,d){k[d]==void 0&&(k[d]=n()),k[d].pagelets[b]==void 0&&(k[d].pagelets[b]={}),k[d].pagelets[b][a]=c}function p(a){__p&&__p();a.subscribe(i,function(a,c){__p&&__p();var d=c.event,e=c.ts;a=c.id;var f=c.lid,g=c.phase,h=c.categories,i=c.allResources;c=c.displayResources;o(d,a,e,f);var j=k[f],m=j.pagelets[a];d===b("PageletEventConstsJS").ARRIVE_END&&(m.phase=g,j.all_resources[a]=i,j.display_resources[a]=c);(d===b("PageletEventConstsJS").ONLOAD_END||d===b("PageletEventConstsJS").DISPLAY_END)&&h&&h.forEach(function(a){j.categories[a]==void 0&&(j.categories[a]={}),j.categories[a][d]=e});for(var m=0,g=l.length;m<g;m++)l[m](a,d,e,f)}),a.subscribe(j,function(a,b){k[b.lid].phase_start[b.phase]=b.ts})}a={init:function(){__p&&__p();if(m)return;b("Arbiter").subscribe(g,function(a,b){a=b.lid;b=b.arbiter;k[a]=n();p(b)});b("Arbiter").subscribe(h,function(a,b){a=b.lid;b=b.arbiter;k[a]=n();p(b)});m=!0},getMetrics:function(a){return k[a]?JSON.parse(JSON.stringify(k[a])):null},subscribeToPageletEvents:function(a){l.push(a);return{remove:function(){l.splice(l.indexOf(a),1)}}}};e.exports=a}),null);
__d("ResourceTimingBootloaderHelper",["Bootloader","ErrorUtils","ImageTimingHelper","ResourceTimingMetricsEnumJS","ResourceTimingsStore","ResourceTypes","URI","forEachObject","isEmpty","performance"],(function(a,b,c,d,e,f){__p&&__p();var g=500,h=[],i={},j={},k={},l=[".mp4",".m4v",".mpd","m4a"],m=new Set(["bootload","js_exec","start_bootload","tag_bootload"]);function n(a){for(var b=0;b<l.length;b++){var c=l[b];if(a.endsWith(c))return!0}return!1}function o(a){__p&&__p();var c=new Map();b("ResourceTimingsStore").getMapFor(a).forEach(function(a){if(a.requestSent!=null){var b=c.get(a.uri);b!=null?b.push(a):c.set(a.uri,[a])}});c.forEach(function(a){return a.sort(function(a,b){return a.requestSent-b.requestSent})});return c}function p(a,b,c,d){__p&&__p();var e=a.get(b);if(e==null){var f=b.indexOf("?");if(f!==-1){b=b.substring(0,f);e=a.get(b)}}if(e!=null)for(var f=0;f<e.length;f++){a=e[f];b=a.requestSent;a=a.responseReceived;if((c==null||b!=null&&b<=c)&&(d==null||a!=null&&a>=d))return e.splice(f,1)[0]}return null}function q(a,c,d,e,f,g,h){__p&&__p();if(!b("performance").timing||!b("performance").getEntriesByType)return null;var i={},l=b("performance").timing.navigationStart;d&&(i=b("ImageTimingHelper").getImageTimings(e).sort(function(a,b){return a.ts-b.ts}).reduce(function(a,b){if(a[b.uri])return a;a[b.uri]=b.pagelet;return a},{}));d=Array.from(b("performance").getEntriesByType("resource"));e=d.filter(function(a){return a.duration>=0&&a.startTime!=null&&a.startTime+l>c&&(f==null||a.responseEnd==null||a.responseEnd+l<f)});e.sort(function(a,b){return a.startTime-b.startTime});d=e.length;var m=0,q=0,u=0,v=0,w=0,x=o(b("ResourceTypes").XHR),y=o(b("ResourceTypes").CSS),z=o(b("ResourceTypes").JS);for(var A=0;A<e.length;A++){var B=e[A],C="",D="",E=void 0,F=B.initiatorType;switch(F){case"css":case"link":case"script":F=b("ResourceTimingsStore").parseMakeHasteURL(B.name);if(!F)continue;var G=F[0];F=F[1];if(F==="css"||F==="js"){var H=F==="css"?y:z;E=p(H,B.name,B.startTime+l,B.responseEnd+l);if(E!=null&&h){D=F;C=E.uid;break}else{D=F;H=k[B.name]||u++;C=H+"_"+G}}else{F=t(B.name);H=F[0];D=F[1];C=q+++"_"+H}break;case"img":C=q+++"_"+r(B.name);D="img";break;case"iframe":C=v+++"_"+r(B.name)+s(B.name);D="iframe";break;case"xmlhttprequest":if(g){G=r(B.name);F=s(B.name);if(n(F)){C=w+++"_"+G+F;D="video";break}else{E=p(x,B.name,B.startTime+l,B.responseEnd+l);if(E!=null){D=b("ResourceTypes").XHR;C=E.uid;break}}}default:continue}H={};G=Object.keys(b("ResourceTimingMetricsEnumJS"));for(var F=0;F<G.length;F++){var I=b("ResourceTimingMetricsEnumJS")[G[F]],J=B[I];J&&(H[I]=J+b("performance").timing.navigationStart)}if(E!=null){I=E;J=I.requestSent;F=I.responseReceived;if(c!=null&&J!=null&&J<c||f!=null&&F!=null&&F>f)continue;H.requestSent=J;H.responseReceived=F}H.type=D;H.desc=C;if(E!=null&&(D===b("ResourceTypes").JS||D===b("ResourceTypes").CSS||D===b("ResourceTypes").XHR)){G=b("ResourceTimingsStore").getAnnotationsFor(D,E.uid);G!=null&&(H.annotations=G)}D=="img"&&Object.prototype.hasOwnProperty.call(i,B.name)&&(H.pagelet=i[B.name]);H.transferSize=B.transferSize;H.encodedBodySize=B.encodedBodySize;a[B.name]==void 0&&(a[B.name]=[]);m++;a[B.name].push(H)}return h?{numValidEntries:d,numSuccessfulMetrics:m}:null}function r(a){a=new(b("URI"))(a).getDomain();return a}function s(a){a=new(b("URI"))(a).getPath();return a}function t(a){return[r(a),"img"]}function u(a){__p&&__p();var b=Object.keys(a).filter(function(a){return a.startsWith("start_bootload/")}).sort(function(b,c){return a[b]-a[c]}).map(function(a){return a.substring(a.indexOf("/")+1)});b.forEach(function(b){return m.forEach(function(c){c=c+"/"+b;a[c]!=null&&(i[c]=a[c])})});h=h.concat(b);if(h.length>g){b=h.splice(0,h.length-g);b.forEach(function(a){return m.forEach(function(b){i[b+"/"+a]&&delete i[b+"/"+a]})})}}a={addPastBootloaderMetricsToResourceTimings:function(c,d){__p&&__p();c===void 0&&(c={});d===void 0&&(d={});var a=b("Bootloader").getURLToHashMap();b("forEachObject")(c,function(b,c){__p&&__p();var e=a[c];if(!e)return;var f=new Map();f.set("bootloader_hash",e);m.forEach(function(a){var b=a+"/"+e;b=d[b]||i[b];b!=null&&f.set(a,b)});f.size>0&&b.forEach(function(a){if(a.requestSent||a.responseReceived)return;f.forEach(function(b,c){return a[c]=b})})})},mergeBootloaderMetricsAndResourceTimings:function(a,c,d){__p&&__p();a===void 0&&(a={});c===void 0&&(c={});d===void 0&&(d=!0);b("isEmpty")(k)&&(k=b("Bootloader").getURLToHashMap());var e=new Map();b("forEachObject")(k,function(a,b){e.set(a,b)});var f=[];b("forEachObject")(c,function(b,c){__p&&__p();var d=c.indexOf("/");if(d===-1)return;var g=c.substring(0,d);if(!m.has(g))return;f.push(c);var h=c.substring(d+1);c=e.get(h);if(!c){c=h;h=k[c];if(!h)return}c.startsWith("data:")&&(c="inlined resource: "+h);a[c]==null&&(a[c]=[{}]);a[c].forEach(function(a){a.bootloader_hash=h,a[g]=b})});d||(u(c),f.forEach(function(a){return delete c[a]}));return a},getLastTTIAndE2EImageResponseEnds:function(a,c,d){__p&&__p();var e={TTI:a,E2E:c};if(!b("performance").timing)return e;var f=d.filter(function(b){return b.ts<=a}).map(function(a){return a.uri}).reduce(function(b,a){b[a]=!0;return b},{}),g=d.map(function(a){return a.uri}).reduce(function(b,a){b[a]=!0;return b},{});for(var h in j)j[h].forEach(function(a){a.type==="img"&&(f[h]&&(e.TTI=Math.max(e.TTI,a.responseEnd)),g[h]&&(e.E2E=Math.max(e.E2E,a.responseEnd)))});return e},getMetrics:function(a,c,d,e,f,g){j={};b("isEmpty")(k)&&(k=b("Bootloader").getURLToHashMap());a=q(j,a,c,d,e,f,g);return{data:j,diagnostics:a}}};e.exports=a}),null);
__d("PerfXFlusher",["invariant","Banzai"],(function(a,b,c,d,e,f,g){var h="perfx_custom_logger_endpoint",i=["perfx_page","perfx_page_type","lid"];function j(a){i.forEach(function(b){return g(b in a,'PerfXFlusher: Field "%s" missing in the PerfX payload',b)})}a={flush:function(a){j(a),b("Banzai").post(h,a,{signal:!0})},registerToSendWithBeacon:function(a){b("Banzai").registerToSendWithBeacon(h,a)}};e.exports=a}),null);
__d("QuicklingRefreshOverheadUtil",["QuicklingConfig","WebStorage","performanceAbsoluteNow"],(function(a,b,c,d,e,f){"use strict";__p&&__p();var g=null,h=1e4;a={onQuicklingStart:function(){g=b("performanceAbsoluteNow")()},onQuicklingVersionMatch:function(){g=null},onQuicklingRefreshStart:function(){if(!b("QuicklingConfig").logRefreshOverhead||g===null)return;var a=b("WebStorage").getSessionStorage();if(!a)return;a.setItem("quickling_refresh_overhead",(b("performanceAbsoluteNow")()-g).toString());a.setItem("quickling_refresh_start",Date.now().toString())},getOverhead:function(a){__p&&__p();if(!b("QuicklingConfig").logRefreshOverhead)return null;var c=b("WebStorage").getSessionStorageForRead();if(!c)return null;var d=c.getItem("quickling_refresh_start");if(d==null)return null;if(a-parseInt(d,10)>h)return null;a=c.getItem("quickling_refresh_overhead");return a!=null?parseFloat(a):null}};e.exports=a}),null);
__d("pageLoadedViaSWCache",[],(function(a,b,c,d,e,f){function a(){return self.__SW_CACHE__===1}e.exports=a}),null);
__d("PerfXLogger",["ArtilleryOnUntilOffLogging","BanzaiODS","DataAttributeUtils","NavigationMetrics","NavigationTimingHelper","PerfXFlusher","PerfXSharedFields","QuicklingRefreshOverheadUtil","VisibilityListener","forEachObject","pageLoadedViaSWCache","performanceAbsoluteNow","setTimeoutAcrossTransitions"],(function(a,b,c,d,e,f){__p&&__p();var g={},h={},i=65*1e3,j=["e2e","tti","all_pagelets_displayed","all_pagelets_loaded","artillery_disable_time"],k={},l={_listenersSetUp:!1,_uploadEarly:!1,_alreadyUploadedEarly:!1,_setupListeners:function(){__p&&__p();if(this._listenersSetUp)return;this._subscribeToNavigationMetrics();b("PerfXFlusher").registerToSendWithBeacon(function(){var a=[];b("forEachObject")(g,function(b,c){if(!g[c].sent){b=this.getPayload(c,"unload fired");b!=null&&a.push(b)}}.bind(this));g={};return a}.bind(this));this._listenersSetUp=!0},_init:function(a){__p&&__p();var b=a.lid;if(b==null)return;this._alreadyUploadedEarly=!1;this._uploadEarly=!!a.upload_perfx_early;delete a.upload_perfx_early;var c=h[b]||[];delete h[b];if(a.sw_controlled_tags){if(navigator.serviceWorker&&navigator.serviceWorker.controller)for(var d=0;d<a.sw_controlled_tags.length;d++)c.push(a.sw_controlled_tags[d]);delete a.sw_controlled_tags}g[b]=babelHelpers["extends"]({tags:new Set(c),sent:!1},a);this._registerTimeoutSendback(b);this._setupListeners()},initWithNavigationMetricsLID:function(a,c){__p&&__p();var d=b("NavigationMetrics").getFullPageLoadLid();if(!d)return;this._init(babelHelpers["extends"]({},c,{lid:d}));if(a&&a.always)for(var c=0;c<a.always.length;c++)l.addTag(d,a.always[c]);if(a&&a.swCache&&b("pageLoadedViaSWCache")())for(var c=0;c<a.swCache.length;c++)l.addTag(d,a.swCache[c])},init:function(a,b){b!=null&&a.lid!=null&&(k[a.lid]=b),this._init(a)},addTag:function(a,c){this._alreadyUploadedEarly&&b("BanzaiODS").bumpEntityKey("PerfXLateTag",c);var d=g[a];if(d){d.tags.add(c);return}h[a]||(h[a]=[]);h[a].push(c)},addTagWithNavigationMetricsLID:function(a){this._alreadyUploadedEarly&&b("BanzaiODS").bumpEntityKey("PerfXLateTag",a);var c=b("NavigationMetrics").getFullPageLoadLid();if(!c)return;l.addTag(c,a)},_registerTimeoutSendback:function(a){var c=this._getFetchStart(a),d=i;c!=null&&(d-=b("performanceAbsoluteNow")()-c);b("setTimeoutAcrossTransitions")(function(){return this._uploadPayload(a,"sendback time out")}.bind(this),d)},_subscribeToNavigationMetrics:function(){__p&&__p();b("NavigationMetrics").addRetroactiveListener(b("NavigationMetrics").Events.EVENT_OCCURRED,function(a,b){if(!(a in g))return;j.includes(b.event)&&Object.prototype.hasOwnProperty.call(b,"timestamp")&&b.timestamp!=null&&(g[a][b.event]=b.timestamp);b.event==="all_pagelets_displayed"&&this._uploadEarly&&(j.forEach(function(c){Object.prototype.hasOwnProperty.call(b,c)&&b[c]!=null&&(g[a][c]=b[c])}),this._uploadPayload(a),this._alreadyUploadedEarly=!0)}.bind(this)),b("NavigationMetrics").addRetroactiveListener(b("NavigationMetrics").Events.NAVIGATION_DONE,function(a,b){var c=b.serverLID;if(!(c in g))return;j.forEach(function(a){Object.prototype.hasOwnProperty.call(b,a)&&b[a]!=null&&(g[c][a]=b[a])});this._uploadPayload(c)}.bind(this))},_getPayloadWithOffset:function(a,c,d){__p&&__p();a=g[a];if(a==null)return null;var e=Object.assign({},a),f=document.querySelector('[id^="hyperfeed_story_id"]');if(f){f=JSON.parse(b("DataAttributeUtils").getDataFt(f));f&&(e.mf_query_id=f.qid)}e.tags=Array.from(a.tags);e.art_id||(e.artillery_disable_time=b("ArtilleryOnUntilOffLogging").lastDisableTime());this._adjustValues(e,c);e.fetch_start=c;if(e.perfx_page_type==="normal"){f=b("NavigationTimingHelper").getNavTimings();f!=null&&f.navigationStart!=null&&(e.nav_to_fetch=c-f.navigationStart);a=b("QuicklingRefreshOverheadUtil").getOverhead(c);a!==null&&(e.quickling_refresh_overhead=a)}d!=null&&(e.sendback_reason=d);b("PerfXSharedFields").addCommonValues(e);b("VisibilityListener").supported()&&e.fetch_start&&e.all_pagelets_displayed&&e.tti&&e.e2e&&(e.tab_hidden_time_dd=b("VisibilityListener").getHiddenTime(e.fetch_start,e.fetch_start+e.all_pagelets_displayed),e.tab_hidden_time_tti=b("VisibilityListener").getHiddenTime(e.fetch_start,e.fetch_start+e.tti),e.tab_hidden_time_e2e=b("VisibilityListener").getHiddenTime(e.fetch_start,e.fetch_start+e.e2e));window&&window.location&&window.location.pathname&&(e.request_uri=window.location.pathname);delete e.sent;return e},_uploadPayload:function(a,c){if(g[a]!=null&&!g[a].sent){c=this.getPayload(a,c);c!=null&&(b("PerfXFlusher").flush(c),g[a].sent=!0)}},getPayload:function(a,b){return this._getPayloadWithOffset(a,this._getFetchStart(a),b)},_getFetchStart:function(a){if(!(a in g))return null;var c=g[a].perfx_page_type;if(c=="quickling")if(!(a in k))return null;else c=b("NavigationTimingHelper").getAsyncRequestTimings(k[a]);else c=b("NavigationTimingHelper").getNavTimings();return!c||!c.fetchStart?null:c.fetchStart},_adjustValues:function(a,b){j.forEach(function(c){Object.prototype.hasOwnProperty.call(a,c)&&(a[c]-=b)})}};e.exports=l}),null);
__d("ServiceWorkerLoginAndLogout",["ClientServiceWorkerMessage"],(function(a,b,c,d,e,f){function g(a){new(b("ClientServiceWorkerMessage"))(a,null).sendViaController()}a={login:function(){g("login")},logout:function(){g("logout")}};e.exports=a}),null);