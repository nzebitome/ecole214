if (self.CavalryLogger) { CavalryLogger.start_js(["Z8kPH"]); }

__d("MessengerColors",["ChatConfig"],(function(a,b,c,d,e,f){"use strict";__p&&__p();function a(a,b){b===void 0&&(b=!1);var c=100/(a.length-1);b=b?a.slice():a.slice().reverse();a=b.map(function(a,b){return a+" "+b*c+"%"}).join(",");return"radial-gradient(circle at center 75%, "+a+")"}function b(a,b,c){__p&&__p();var d={};if(a){b!=null&&b!==""?d.backgroundColor=b:d.backgroundColor=c;if(a.length&&a.length>0)if(a.length===1)d.backgroundColor=a[0];else if(a.length===2)d.backgroundImage="linear-gradient("+a[0]+", "+a[1]+")";else{var e=a.length,f=100/(e-1);e=a.map(function(a,b){return a+" "+b*f+"%"}).join(", ");d.backgroundImage="linear-gradient("+e+")"}}else b!=null&&b!==""?d.backgroundColor=b:d.backgroundColor=c;return d}e.exports={makeRadialGradient:a,makeLinearGradient:b}}),null);
__d("MessengerQuickCamOrigins",[],(function(a,b,c,d,e,f){"use strict";var g={CHAT_TAB:"chat tab",MESSENGER:"messenger",getValues:function(){return[g.CHAT_TAB,g.MESSENGER]}};e.exports=g}),null);
__d("ArchiveWarningReact.bs",["cx","React","ReasonReact.bs","TooltipData","bs_js_primitive","bs_js_null_undefined"],(function(a,b,c,d,e,f,g){"use strict";__p&&__p();var h=b("ReasonReact.bs").statelessComponent("ArchiveWarningReact");function i(a,c){return[h[0],h[1],h[2],h[3],h[4],h[5],h[6],h[7],function(){var c=b("TooltipData").propsFor("All employee-to-employee conversations will be archived","above");if(a){var d=b("React").createElement("i",{className:"_3olv _14lt"});return b("React").cloneElement(b("React").createElement("div",{className:"_3a61"},d),{"data-tooltip-content":b("bs_js_null_undefined").fromOption(b("bs_js_primitive").undefined_to_opt(c["data-tooltip-content"])),"data-hover":b("bs_js_null_undefined").fromOption(b("bs_js_primitive").undefined_to_opt(c["data-hover"])),"data-tooltip-position":b("bs_js_null_undefined").fromOption(b("bs_js_primitive").undefined_to_opt(c["data-tooltip-position"]))})}else return null},h[9],h[10],h[11],h[12]]}a=b("ReasonReact.bs").wrapReasonForJs(h,function(a){return i(a.shown,[])});f.component=h;f.make=i;f.jsComponent=a}),null);
__d("MessengerTextWithEmoticonsReact.bs",["ReasonReact.bs","bs_js_null_undefined","MessengerTextWithEmoticons.react"],(function(a,b,c,d,e,f){"use strict";function a(a,c,d,e,f){return b("ReasonReact.bs").wrapJsForReason(b("MessengerTextWithEmoticons.react"),{renderEmoji:b("bs_js_null_undefined").fromOption(a),renderEmoticons:b("bs_js_null_undefined").fromOption(c),text:b("bs_js_null_undefined").fromOption(d),customSize:b("bs_js_null_undefined").fromOption(e)},f)}f.make=a}),null);
__d("MercuryThreadTitleReact.bs",["fbt","bs_array","bs_block","bs_curry","React","bs_js_dict","MercuryIDs","ReasonReact.bs","bs_js_primitive","bs_js_null_undefined","MessengerParticipants.bs","MercuryParticipantListRenderer","MessengerTextWithEmoticonsReact.bs"],(function(a,b,c,d,e,f,g){"use strict";__p&&__p();var h=b("ReasonReact.bs").reducerComponent("MercuryThreadTitleReact");function i(a,b){return g._("{conversation-title} ({unread-count})",[g._param("conversation-title",a),g._param("unread-count",String(b))])}function a(a,c,d,e,f,g,j,k,l){__p&&__p();var m=f!==void 0?f:!1,n=g!==void 0?g:!1,o=j!==void 0?j:!1,p=k!==void 0?k:!1,q=function(a){__p&&__p();if(d.name===""){b("bs_curry")._1(a[3],[""]);var c=b("MercuryIDs").getParticipantIDFromUserID(e),f=d.participants.length>1?d.participants.filter(function(a){return a!==c}):d.participants;b("MessengerParticipants.bs").getMulti(f,function(c){__p&&__p();if(a[1][2][0]){var e=[];b("bs_array").iter(function(a){a=c[a];if(a!==void 0){e.push(a);return 0}else return 0},f);var g=b("bs_js_null_undefined").bind(d.custom_nickname,function(a){var c={};b("bs_array").iter(function(a){c[a[0]]=b("ReasonReact.bs").element(void 0,void 0,b("MessengerTextWithEmoticonsReact.bs").make(!0,!0,a[1],void 0,[]));return 0},b("bs_js_dict").entries(a));return c});g=new(b("MercuryParticipantListRenderer"))().setUseShortName(o).setUseAndSeparator(p).setIsNewThread(m).setNickname(g).renderParticipantList(e);g=n&&d.unread_count>0?i(g,d.unread_count):g;return b("bs_curry")._1(a[3],[g])}else return 0});return 0}else return 0},r=function(){if(c!==void 0){var a=c;a=a===0||a>=d.name.length?d.name:d.name.slice(0,a)+"..."}else a=d.name;a=b("ReasonReact.bs").element(void 0,void 0,b("MessengerTextWithEmoticonsReact.bs").make(!0,!0,a,void 0,[]));if(d.unread_count===0||!n)return a;else return i(a,d.unread_count)};return[h[0],h[1],h[2],h[3],function(a){a[1][2][0]=!0;return q(a)},function(a){a=a[1];if(a[1][0][0]!==d){a[1][0][0]=d;return q(a)}else return 0},function(a){a[1][2][0]=!1;return 0},h[7],function(c){c=d.name!==""?r(0):c[1][1];var e={};a!==void 0&&(e.className=b("bs_js_primitive").valFromOption(a));return b("React").createElement("span",e,c,l)},function(){return[[d],"",[!1]]},h[10],function(a,c){return b("bs_block").__(0,[[c[0],a[0],c[2]]])},h[12]]}f.component=h;f.renderTitleWithUnreadCount=i;f.make=a}),null);
__d("MessengerDotComAndInboxM4Check.bs",["gkx","CurrentUser","MessengerEnvironment"],(function(a,b,c,d,e,f){"use strict";a=b("gkx")("686397")&&!b("CurrentUser").isWorkUser()&&b("MessengerEnvironment").messengerui;f.yes=a}),null);
__d("MessengerCustomColorUtils.bs",["cssVar","CurrentUser","MessengerDotComAndInboxM4Check.bs"],(function(a,b,c,d,e,f,g){"use strict";__p&&__p();function h(){if(b("CurrentUser").isWorkUser())return"#373e4c";else if(b("MessengerDotComAndInboxM4Check.bs").yes)return"#0099ff";else return"#0084ff"}function a(a){a=a.solid_color;if(a==null)return h(0);else return a}f.defaultColor=h;f.customColorOrBlue=a}),null);
__d("ReactDOMRe.bs",["React","ReactDOM","bs_caml_builtin_exceptions"],(function(a,b,c,d,e,f){"use strict";__p&&__p();function a(a,c){var d=document.getElementsByClassName(c);if(d.length!==0){b("ReactDOM").render(a,d[0]);return 0}else throw[b("bs_caml_builtin_exceptions").invalid_argument,"ReactDOMRe.renderToElementWithClassName: no element of class "+(c+" found in the HTML.")]}function c(a,c){var d=document.getElementById(c);if(d==null)throw[b("bs_caml_builtin_exceptions").invalid_argument,"ReactDOMRe.renderToElementWithId : no element of id "+(c+" found in the HTML.")];else{b("ReactDOM").render(a,d);return 0}}function d(a,c){var d=document.getElementsByClassName(c);if(d.length!==0){b("ReactDOM").hydrate(a,d[0]);return 0}else throw[b("bs_caml_builtin_exceptions").invalid_argument,"ReactDOMRe.hydrateToElementWithClassName: no element of class "+(c+" found in the HTML.")]}function e(a,c){var d=document.getElementById(c);if(d==null)throw[b("bs_caml_builtin_exceptions").invalid_argument,"ReactDOMRe.hydrateToElementWithId : no element of id "+(c+" found in the HTML.")];else{b("ReactDOM").hydrate(a,d);return 0}}function g(a,c,d){a=[a,c].concat(d);return b("React").createElement.apply(null,a)}function h(a,b){return Object.assign(Object.assign({},a),b)}function i(a,b,c){var d={};d[b]=c;return h(a,d)}i=[h,i];f.renderToElementWithClassName=a;f.renderToElementWithId=c;f.hydrateToElementWithClassName=d;f.hydrateToElementWithId=e;f.createElementVariadic=g;f.Style=i}),null);
__d("MessengerHotLikeIconSVGM4React.bs",["React","uniqueID","ReactDOMRe.bs","MessengerColors","MessengerCustomColorUtils.bs"],(function(a,b,c,d,e,f){"use strict";__p&&__p();function a(a){return b("React").createElement("svg",{height:"32px",width:"32px",viewBox:"0 0 36 36"},b("React").createElement("path",{id:"Fill-17",d:"M10,30 L7.75,30 C6.625,30 6,27.7515306 6,23.3673469 C6,18.9831633 6.625,16.7346939 7.75,16.7346939 L10,16.7346939 C10.552,16.7346939 11,17.1918367 11,17.755102 L11,28.9795918 C11,29.5428571 10.552,30 10,30 M17,6.02040816 C17,5.44540816 17.4195,5.00255102 18,5 C19.2035,5 22,5.79081633 22,10.6122449 C22,12.2443878 21.8015,13.130102 21.7195,13.7163265 C21.719,13.7183673 21.719,13.7204082 21.7185,13.722449 C21.6865,13.9566327 21.872,14.1647959 22.113,14.1647959 C26.908,14.1647959 29.469,15.4336735 29.469,16.7290816 C29.469,17.3612245 29.211,17.9321429 28.7975,18.3535714 C29.513,18.7591837 30,19.5091837 30,20.3780612 C30,21.3642857 29.4255,22.2045918 28.5475,22.5515306 C28.821,22.9326531 28.9845,23.3954082 28.9845,23.8969388 C28.9845,24.9704082 28.3395,25.8653061 27.3365,26.1438776 C27.4285,26.377551 27.4845,26.6290816 27.4845,26.8943878 C27.4845,28.0459184 25.5485,28.9795918 21,28.9795918 C17.675,28.9795918 15.3815,28.3857143 14.5,27.9591837 C13.851,27.6454082 13,27.0770408 13,25.4081633 L13,18.7755102 C13,15.0403061 17.25,13.7760204 17.25,10.1020408 C17.25,7.78826531 17,6.81326531 17,6.02040816",fill:a}))}var g=b("uniqueID")();function c(a){a=b("ReactDOMRe.bs").Style[1](b("ReactDOMRe.bs").Style[1](b("ReactDOMRe.bs").Style[1](b("MessengerColors").makeLinearGradient(a.gradient_colors,a.solid_color,b("MessengerCustomColorUtils.bs").defaultColor(0)),"backgroundAttachment","fixed"),"height","95%"),"width","95%");return b("React").createElement(b("React").Fragment,void 0,b("React").createElement("svg",{style:{height:"100%",position:"absolute",width:"100%"},viewBox:"0 0 36 36"},b("React").createElement("mask",{id:g},b("React").createElement("rect",{height:"100%",width:"100%",fill:"white",x:"0",y:"0"}),b("React").createElement("path",{d:"M10,30 L7.75,30 C6.625,30 6,27.7515306 6,23.3673469 C6,18.9831633 6.625,16.7346939 7.75,16.7346939 L10,16.7346939 C10.552,16.7346939 11,17.1918367 11,17.755102 L11,28.9795918 C11,29.5428571 10.552,30 10,30 M17,6.02040816 C17,5.44540816 17.4195,5.00255102 18,5 C19.2035,5 22,5.79081633 22,10.6122449 C22,12.2443878 21.8015,13.130102 21.7195,13.7163265 C21.719,13.7183673 21.719,13.7204082 21.7185,13.722449 C21.6865,13.9566327 21.872,14.1647959 22.113,14.1647959 C26.908,14.1647959 29.469,15.4336735 29.469,16.7290816 C29.469,17.3612245 29.211,17.9321429 28.7975,18.3535714 C29.513,18.7591837 30,19.5091837 30,20.3780612 C30,21.3642857 29.4255,22.2045918 28.5475,22.5515306 C28.821,22.9326531 28.9845,23.3954082 28.9845,23.8969388 C28.9845,24.9704082 28.3395,25.8653061 27.3365,26.1438776 C27.4285,26.377551 27.4845,26.6290816 27.4845,26.8943878 C27.4845,28.0459184 25.5485,28.9795918 21,28.9795918 C17.675,28.9795918 15.3815,28.3857143 14.5,27.9591837 C13.851,27.6454082 13,27.0770408 13,25.4081633 L13,18.7755102 C13,15.0403061 17.25,13.7760204 17.25,10.1020408 C17.25,7.78826531 17,6.81326531 17,6.02040816",fill:"black"})),b("React").createElement("rect",{height:"100%",width:"100%",fill:"white",mask:"url(#"+(String(g)+")")})),b("React").createElement("div",{style:a}))}f.make=a;f.uniqueId=g;f.makeWithGradient=c}),null);
__d("MessengerParticipantUtils.bs",["bs_belt_Set","bs_caml_obj","MercuryIDs"],(function(a,b,c,d,e,f){"use strict";__p&&__p();function g(a,c,d){var e=b("MercuryIDs").getParticipantIDFromUserID(a);a=d.participants.filter(function(a){return b("bs_caml_obj").caml_notequal(a,e)});return a.filter(function(a){return b("bs_belt_Set").has(c,a)})}d=b("bs_belt_Set").has;function h(a,b,c){if(c.is_canonical)return[];else return g(a,b,c)}function a(a,b,c){return h(a,b,c).length>0}function c(a,b,c){return g(a,b,c).length>0}f.findIntersection=g;f.has=d;f.participantsInGroupThread=h;f.areParticipantsInGroupThread=a;f.areParticipantsInThread=c}),null);
__d("OnlineUserIds.bs",["bs_belt_Set","ParticipantId.bs"],(function(a,b,c,d,e,f){"use strict";function a(){return b("bs_belt_Set").make([b("ParticipantId.bs").cmp])}function c(a){return b("bs_belt_Set").fromArray(a,[b("ParticipantId.bs").cmp])}f.make=a;f.fromArray=c}),null);
__d("MessengerPresenceProvider.bs",["FBID.bs","bs_curry","Arbiter","bs_belt_Set","bs_caml_obj","bs_belt_Array","MercuryIDs","bs_belt_Option","ReasonReact.bs","bs_js_primitive","OnlineUserIds.bs","ParticipantId.bs","PresenceStatus","PresencePrivacy","AvailableListConstants","MessengerPersistantViewerKeyedSubscriptionComponent.bs"],(function(a,b,c,d,e,f){"use strict";__p&&__p();var g=["privacy-changed","privacy-availability-changed","privacy-user-presence-response"];function a(){return b("OnlineUserIds.bs").make(0)}function c(a,c){if(a){a=a[0];var d=b("bs_caml_obj").caml_equal(b("PresenceStatus").get(a),b("AvailableListConstants").ACTIVE);if(d)return b("bs_belt_Set").add(c,b("MercuryIDs").getParticipantIDFromUserID(a));else return b("bs_belt_Set").remove(c,b("MercuryIDs").getParticipantIDFromUserID(a))}else return b("bs_belt_Set").fromArray(b("bs_belt_Array").map(b("PresenceStatus").getOnlineIDs(),function(a){return b("MercuryIDs").getParticipantIDFromUserID(a)}),[b("ParticipantId.bs").cmp])}function d(a,c){__p&&__p();b("PresencePrivacy").subscribe(g,function(){return b("bs_curry")._1(c,0)});b("bs_curry")._1(c,0);b("Arbiter").subscribe(b("AvailableListConstants").ON_AVAILABILITY_CHANGED,function(a,d){if(d==null)return 0;else{a=b("FBID.bs").ofStringExn(d);return b("bs_curry")._1(c,[a])}});return 0}e=b("MessengerPersistantViewerKeyedSubscriptionComponent.bs").Make([a,c,d,"MessengerPresenceProvider"]);a=e[0];var h=e[1];function i(a){return b("bs_curry")._1(h,function(c,d){if(a!==void 0){d=b("bs_belt_Set").union(b("bs_belt_Set").diff(c,d),b("bs_belt_Set").diff(d,c));return!b("bs_belt_Set").isEmpty(b("bs_belt_Set").intersect(d,b("bs_js_primitive").valFromOption(a)))}else return!1})}c=b("ReasonReact.bs").wrapReasonForJs(a,function(a){return b("bs_curry")._3(i(b("bs_belt_Option").map(b("bs_js_primitive").nullable_to_opt(a.subscribeToIDs),function(a){return b("bs_belt_Set").fromArray(a,[b("ParticipantId.bs").cmp])})),void 0,b("bs_js_primitive").nullable_to_opt(a.fbid),a.children)});d=e[2];f.privacyEvents=g;f.component=a;f.send=d;f.make=i;f.jsComponent=c}),null);
__d("LazyWorkMultiCompanyChatTooltip.react",["JSResource","lazyLoadComponent","react"],(function(a,b,c,d,e,f){"use strict";var g=b("lazyLoadComponent")(b("JSResource")("WorkMultiCompanyChatTooltip.react").__setRef("LazyWorkMultiCompanyChatTooltip.react"));function a(a){return b("react").createElement(b("react").Suspense,{fallback:a.children},b("react").createElement(g,null,a.children))}e.exports=a}),null);
__d("LazyWorkMultiCompanyChatTooltipReact.bs",["ReasonReact.bs","LazyWorkMultiCompanyChatTooltip.react"],(function(a,b,c,d,e,f){"use strict";function a(a){return b("ReasonReact.bs").wrapJsForReason(b("LazyWorkMultiCompanyChatTooltip.react"),{},a)}f.make=a}),null);
__d("MercurySendMessageFields",[],(function(a,b,c,d,e,f){e.exports=Object.freeze({AUTO_RETRY_CNT:"auto_retry_cnt",MANUAL_RETRY_CNT:"manual_retry_cnt"})}),null);
__d("MercuryMessageObject",["BanzaiODS","MercuryActionStatus","MercuryActionType","MercuryIDs","MercuryLocalIDs","MercuryMessageClientState","MercuryMessageSourceTags","MercurySendMessageFields","MercurySingletonProvider","MercurySourceType","MessengerObjectAssociationType","MessengerState.bs","RepliedToMessageStatusForGraphQL","SiteData"],(function(a,b,c,d,e,f){__p&&__p();a.getForFBID=function(a){"use strict";return i.getForFBID(a)};a.get=function(){"use strict";return i.get()};function a(a){"use strict";this.$1=a}a.prototype.constructHotLikeObject=function(a,c,d,e,f){"use strict";c=g(this.$1,b("MercuryActionType").USER_GENERATED_MESSAGE,c,d);d={body:a,has_attachment:!1,html_body:!1,attachments:[],specific_to_list:[],creator_info:void 0,tags:e||[],signatureID:f,ui_push_phase:b("SiteData").push_phase};return babelHelpers["extends"]({},c,d)};a.prototype.constructPhotoMessageObject=function(a,c,d,e,f){"use strict";c=g(this.$1,b("MercuryActionType").USER_GENERATED_MESSAGE,c,d);d={replied_to_message:a?{message:a,status:b("RepliedToMessageStatusForGraphQL").VALID}:void 0,has_attachment:!1,html_body:!1,attachments:[],specific_to_list:[],creator_info:void 0,tags:e||[],signatureID:f,ui_push_phase:b("SiteData").push_phase};return babelHelpers["extends"]({},c,d)};a.prototype.constructTextMessageObject=function(a,c,d,e,f,h,i,j,k){"use strict";h=g(this.$1,b("MercuryActionType").USER_GENERATED_MESSAGE,h,i);i=f.params&&f.type;var l=c.length>0;a={body:typeof a==="string"?a.replace(/^\s+/,"").replace(/\s+$/,""):"",replied_to_message:d?{message:d,status:b("RepliedToMessageStatusForGraphQL").VALID}:void 0,has_attachment:i||l,raw_attachments:l?c:void 0,shareable_attachment:i?{share_params:f.params.get("data"),share_type:f.type}:void 0,profile_ranges:e,profile_xmd:e,html_body:!1,attachments:[],specific_to_list:[],creator_info:void 0,tags:j||[],signatureID:k,ui_push_phase:b("SiteData").push_phase};return babelHelpers["extends"]({},h,a)};a.prototype.constructUserGeneratedMessageObject=function(a,c,d,e,f,h){"use strict";c=g(this.$1,b("MercuryActionType").USER_GENERATED_MESSAGE,c,d);d={body:typeof a==="string"?a.replace(/^\s+/,"").replace(/\s+$/,""):"",has_attachment:!1,html_body:!1,attachments:[],specific_to_list:e||[],creator_info:f,tags:h||[]};return babelHelpers["extends"]({},c,d)};a.prototype.constructStickerMessageObject=function(a,c,d,e,f){"use strict";c=g(this.$1,b("MercuryActionType").USER_GENERATED_MESSAGE,c,d);d={has_attachment:!0,html_body:!1,attachments:[],sticker_id:a,specific_to_list:[],tags:e||[],signatureID:f,ui_push_phase:b("SiteData").push_phase};return babelHelpers["extends"]({},c,d)};a.prototype.constructAttachmentMessageObject=function(a,c){"use strict";a=g(this.$1,b("MercuryActionType").USER_GENERATED_MESSAGE,a,c);c={attachments:[],specific_to_list:[]};return babelHelpers["extends"]({},a,c)};a.prototype.constructLogMessageObject=function(a,c,d,e){"use strict";a=g(this.$1,b("MercuryActionType").LOG_MESSAGE,a,c);c={log_message_type:d,log_message_data:e,ephemeral_ttl_mode:e&&e.untypedData&&e.untypedData.ttl};return babelHelpers["extends"]({},a,c)};a.prototype.constructCTAConfirmationMessageObject=function(a,b,c,d,e){"use strict";a=this.constructUserGeneratedMessageObject(a,b,c,null,null,e);b=d?{quick_replies:d,ignore_for_webhook:!1}:{ignore_for_webhook:!0};return babelHelpers["extends"]({},a,{platform_xmd:JSON.stringify(b)})};a.prototype.normalizeNewMessage=function(a){"use strict";__p&&__p();a.status===void 0&&(a.status=b("MercuryActionStatus").UNSENT);a.offline_threading_id=a.offline_threading_id||b("MercuryLocalIDs").generateOfflineThreadingID(a.timestamp);a.offline_threading_id||b("BanzaiODS").bumpEntityKey("chat.web","invalid_otid_generated");a.message_id=a.message_id||a.offline_threading_id;var c=b("MercuryIDs").getParticipantIDFromUserID(this.$1);a.specific_to_list=a.specific_to_list||[];a.specific_to_list.length&&a.specific_to_list.indexOf(c)===-1&&a.specific_to_list.push(c);var d=!1;if(!a.thread_id)a.thread_id="root:"+a.offline_threading_id;else{var e,f=b("MessengerState.bs").getThreadMetaNow(this.$1,a.thread_id);f&&f.ephemeral_ttl_mode!==null&&a.ephemeral_ttl_mode===void 0&&(a.ephemeral_ttl_mode=f.ephemeral_ttl_mode);((e=f)!=null?(e=e.associated_object)!=null?e.name:e:e)&&((e=f)!=null?e.object_association_type:e)===b("MessengerObjectAssociationType").GENERAL_CHAT&&(d=!0)}if(!d)if(a.specific_to_list.length==1)a.thread_id="user:"+this.$1;else if(a.specific_to_list.length==2){f=a.specific_to_list[0]==c?a.specific_to_list[1]:a.specific_to_list[0];a.thread_id=b("MercuryIDs").getThreadIDFromParticipantID(f)}if(!a.specific_to_list.length){e=b("MercuryIDs").tokenize(a.thread_id);d=e.type;f=e.value;d=="user"&&(a.specific_to_list=["fbid:"+f,c])}a[b("MercurySendMessageFields").MANUAL_RETRY_CNT]||(a[b("MercurySendMessageFields").MANUAL_RETRY_CNT]=0)};a.prototype.normalizeResendMessage=function(a){"use strict";a.status=b("MercuryActionStatus").RESENDING,a.timestamp=Date.now(),a[b("MercurySendMessageFields").MANUAL_RETRY_CNT]+=1};a.prototype.normalizeAddAttachmentPlaceholder=function(a,c,d){"use strict";d.preview_attachments.length>0&&(a.has_attachment=!0,a.preview_attachments=d.preview_attachments),a.client_state=b("MercuryMessageClientState").DO_NOT_SEND_TO_SERVER,a.status=b("MercuryActionStatus").RESENDING,a.upload_id=c};function g(a,c,d,e){var f=h(d)?[b("MercuryMessageSourceTags").CHAT]:[],g=Date.now();c={action_type:c,thread_id:e,author:b("MercuryIDs").getParticipantIDFromUserID(a),author_email:null,timestamp:g,is_unread:!1,is_filtered_content:!1,is_filtered_content_bh:!1,is_filtered_content_account:!1,is_filtered_content_quasar:!1,is_filtered_content_invalid_app:!1,is_spoof_warning:!1,source:d,source_tags:f};return c}function h(a){switch(a){case b("MercurySourceType").CHAT_WEB:case b("MercurySourceType").CHAT_JABBER:case b("MercurySourceType").CHAT_IPHONE:case b("MercurySourceType").CHAT_MEEBO:case b("MercurySourceType").CHAT_ORCA:case b("MercurySourceType").CHAT_TEST:case b("MercurySourceType").CHAT:return!0;default:return!1}}var i=new(b("MercurySingletonProvider"))(a);e.exports=a}),null);
__d("MercuryMessageActions",["MercuryActionType","MercuryDispatcher","MercuryMessageObject","MercuryPayloadSource","MercuryServerRequests","MercurySingletonMixin"],(function(a,b,c,d,e,f){"use strict";__p&&__p();function a(a){this.$1=a,this.$2=b("MercuryMessageObject").getForFBID(this.$1),this.__serverRequests=b("MercuryServerRequests").getForFBID(this.$1),this.__dispatcher=b("MercuryDispatcher").getForFBID(this.$1)}a.prototype.send=function(a,c,d){c=c||Function.prototype,this.$2.normalizeNewMessage(a),this.__dispatcher.handleUpdate(this.__constructClientSingleMessagePayload(babelHelpers["extends"]({},a),b("MercuryPayloadSource").CLIENT_SEND_MESSAGE)),this.__serverRequests.sendNewMessage(a,d),c(a.thread_id)};a.prototype.resend=function(a,b){a=babelHelpers["extends"]({},a);this.$2.normalizeResendMessage(a);this.send(a,void 0,b)};a.prototype.addAttachmentPlaceholder=function(a,c,d){this.$2.normalizeAddAttachmentPlaceholder(a,c,d),this.$2.normalizeNewMessage(a),this.__dispatcher.handleUpdate(this.__constructClientSingleMessagePayload(babelHelpers["extends"]({},a),b("MercuryPayloadSource").CLIENT_SEND_MESSAGE))};a.prototype.cancelAttachmentPlaceholder=function(a,c){this.__dispatcher.handleUpdate(this.__constructClientSingleMessagePayload({upload_id:a,upload_data:c,action_type:b("MercuryActionType").CANCEL_ATTACHMENT_PLACEHOLDER},b("MercuryPayloadSource").CLIENT_SEND_MESSAGE))};a.prototype.confirmAttachmentPlaceholder=function(a,c){this.__dispatcher.handleUpdate(this.__constructClientSingleMessagePayload({upload_id:a,upload_data:c,action_type:b("MercuryActionType").CONFIRM_ATTACHMENT_PLACEHOLDER},b("MercuryPayloadSource").CLIENT_SEND_MESSAGE))};a.prototype["delete"]=function(a,c,d){this.__dispatcher.handleUpdate(this.$3(a,c,b("MercuryActionType").DELETE_MESSAGES,d||b("MercuryPayloadSource").CLIENT_DELETE_MESSAGES))};a.prototype.__constructClientSingleMessagePayload=function(a,b){return{actions:[a],from_client:!0,payload_source:b}};a.prototype.$4=function(a,b){return{actions:[a],from_client:!1,payload_source:b}};a.prototype.$3=function(a,b,c,d){return{actions:[{action_type:c,thread_id:a,message_ids:b}],from_client:!0,payload_source:d}};Object.assign(a,b("MercurySingletonMixin"));e.exports=a}),null);
__d("convertMIGColorToFIGColor",["cssVar"],(function(a,b,c,d,e,f,g){"use strict";var h={"#0077e5":"#4080ff","#44bec7":"#54C7EC","#ffc300":"#f5c33b","#fa3c4c":"#F35369","#d696bb":"#d696bb","#6699cc":"#7596c8","#13cf13":"#42b72a","#ff7e29":"#F7923B","#e68585":"#e68585","#7646ff":"#8C72CB","#20cef5":"#54C7EC","#67b868":"#A3CE71","#d4a88c":"#cfa588","#ff5ca1":"#EC7EBD","#a695c7":"#AF9CDA"};function a(a){return a&&h[a]||a||""}e.exports=a}),null);
__d("getThreadTypeNameFromThreadType",["MessagingThreadType"],(function(a,b,c,d,e,f){"use strict";function a(a){for(var c in b("MessagingThreadType"))if(b("MessagingThreadType")[c]===a)return c;return""}e.exports=a}),null);
__d("MercuryTriodeSourceUtil",["MercurySourceType","MessengerEnvironment"],(function(a,b,c,d,e,f){"use strict";a={getMercuryTriodeSource:function(){return b("MessengerEnvironment").messengerdotcom?b("MercurySourceType").MESSENGER_WEB:b("MercurySourceType").TITAN_WEB}};e.exports=a}),null);
__d("getURLRanges",["UnicodeUtils","URI","URLScraper"],(function(a,b,c,d,e,f){"use strict";__p&&__p();function g(a,c){__p&&__p();c===void 0&&(c=0);var d=a.substr(c),e=b("URLScraper").match(d);if(!e)return[];var f=e;/^[a-z][a-z0-9\-+.]+:\/\//i.test(e)||(f="http://"+e);if(!b("URI").isValidURI(f))return[];var h=d.indexOf(e);d=b("UnicodeUtils").strlen(d.substr(0,h));c+=d;h=e.length;d=[{offset:c,length:e.length,entity:{url:f}}];return d.concat(g(a,c+h))}e.exports=g}),null);
__d("StickersDispatcher",["ExplicitRegistrationDispatcher"],(function(a,b,c,d,e,f){"use strict";e.exports=new(b("ExplicitRegistrationDispatcher"))({strict:!1})}),null);
__d("StickersActions",["StickersDispatcher","keyMirror"],(function(a,b,c,d,e,f){"use strict";__p&&__p();var g=b("keyMirror")({ADD_RECENT_STICKER:null,HIDE_FLYOUT:null,LOAD_RECENT_STICKERS:null,SELECT_AVATAR_STICKERS:null,SELECT_STORE_PACK:null,SELECT_TRAY_PACK:null,SHOW_FLYOUT:null,TRAY_LOADED:null});a={Types:g,addRecentSticker:function(a){b("StickersDispatcher").dispatch({type:g.ADD_RECENT_STICKER,sticker:a})},hideStickerFlyout:function(){b("StickersDispatcher").dispatch({type:g.HIDE_FLYOUT})},loadRecentStickers:function(a){b("StickersDispatcher").dispatch({type:g.LOAD_RECENT_STICKERS,stickers:a})},selectAvatarStickers:function(){b("StickersDispatcher").dispatch({type:g.SELECT_AVATAR_STICKERS})},selectStorePack:function(a){b("StickersDispatcher").dispatch({type:g.SELECT_STORE_PACK,packID:a})},selectTrayPack:function(a){b("StickersDispatcher").dispatch({type:g.SELECT_TRAY_PACK,packID:a})},showStickerFlyout:function(a){b("StickersDispatcher").dispatch({type:g.SHOW_FLYOUT,threadID:a})},trayLoaded:function(){b("StickersDispatcher").dispatch({type:g.TRAY_LOADED})}};e.exports=a}),null);
__d("ContextualLayerAutoFlipHorizontal",["ContextualLayerAutoFlip"],(function(a,b,c,d,e,f){__p&&__p();var g;g=babelHelpers.inherits(a,b("ContextualLayerAutoFlip"));g&&g.prototype;a.prototype.getValidPositions=function(a){"use strict";return[a.getPosition()]};function a(){"use strict";g.apply(this,arguments)}e.exports=a}),null);
__d("MercuryTimePassed",[],(function(a,b,c,d,e,f){e.exports=Object.freeze({TODAY:0,WEEK_AGO:1,MONTH_AGO:2,CURRENT_YEAR:3,OTHER_YEAR:4})}),null);
__d("VideoCallWebDriverIDs",[],(function(a,b,c,d,e,f){e.exports=Object.freeze({ACCEPT_ESCALATION_CALL_BUTTON:"acceptEscalationButton",ADD_GROUP_MEMBERS_BUTTON:"addGroupMembersButton",ANSWER_CALL_BUTTON:"answerCallButton",DOMINANT_SPEAKER_SWITCH_BUTTON:"dominantSpeakerSwitchButton",END_CALL_BUTTON:"endCallButton",ESCALATE_CALL_BUTTON:"escalateCallButton",FULL_SCREEN_BUTTON:"fullScreenButton",GRID_SWITCH_BUTTON:"gridSwitchButton",IGNORE_CALL_BUTTON:"ignoreCallButton",INCALL_VIDEO_CONTAINER:"incallVideoContainer",REDIAL_BUTTON:"rediallButton",REJECT_CALL_BUTTON:"rejectCallButton",REMOTE_VIEW_THUMBNAIL:"remoteViewThumbnail",RTC_APP_VIEW_START_CALL_BUTTON:"RTCAppViewStartCallButton",RTC_INCALL_VIDEO:"RTCIncallVideo",RTC_PICKER_DIALOG_CALL_BUTTON:"RTCPickerDialogCallButton",RTC_PICKER_DIALOG_CANCEL_BUTTON:"RTCPickerDialogCancelButton",RTC_PICKER_DIALOG_CONTACT_LIST_ITEM:"RTCPickerDialogContactListItem",RTC_PICKER_DIALOG_RING_BUTTON:"RTCPickerDialogRingButton",RTC_SELF_VIEW:"RTCSelfView",STAR_RATING_VIEW:"starRatingView",STAR_RATING_NOT_NOW_BUTTON:"starRatingNotNowButton",START_VIDEO_CALL:"startVideoCall",START_VOICE_CALL:"startVoiceCall",TOGGLE_AUDIO_BUTTON:"toggleAudioButton",TOGGLE_VIDEO_BUTTON:"toggleVideoButton",TOGGLE_CHAT_BUTTON:"toggleChatButton",CLOSE_CHAT_BUTTON:"closeChatButton",SETTINGS_BUTTON:"settingsButton",SAVE_SETTINGS_BUTTON:"saveSettingsButton",CLOSE_CALL_WINDOW_BUTTON:"closeCallWindowButton",CHAT_TAB_VIDEO_BUTTON:"chatTabVideoButton",CHAT_TAB_VOICE_BUTTON:"chatTabVoiceButton",PROFILE_DROPDOWN_MENU:"profileDropdownMenu",RTC_CALL_ACTION_LINK:"RTCCallActionLink",STAR_RATING_SUBMIT_BUTTON:"submitStarRatingButton"})}),null);
__d("BootloadOnInteraction.react",["BootloadOnRender.react","React"],(function(a,b,c,d,e,f){__p&&__p();var g;c=babelHelpers.inherits(a,b("React").Component);g=c&&c.prototype;function a(a){"use strict";g.constructor.call(this,a),this.$1=function(){this.setState({hadUserInteraction:!0})}.bind(this),this.state={hadUserInteraction:!1}}a.prototype.render=function(){"use strict";if(!this.state.hadUserInteraction)return b("React").cloneElement(this.props.placeholder,{onFocus:this.$1,onMouseOver:this.$1,onClick:this.$1});var a=this.props,c=a.loader,d=a.component;a=a.placeholder;return b("React").createElement(b("BootloadOnRender.react"),{placeholder:a,loader:c,component:d})};e.exports=a}),null);
__d("MercuryTimestamp",["fbt","MercuryTimePassed","formatDate"],(function(a,b,c,d,e,f,g){__p&&__p();a=864e5;var h=6*a,i={getFormatedTimestamp:function(a){var b=a/1e3;return i.getFormattedTimestampByBucket(b,this.getTimeBucket(a))},getAbsoluteTimestamp:function(a){if(a==null)return null;else{a=i.getFormatedTimestamp(a);return a.absolute}},getRelativeTimestamp:function(a){a=i.getFormatedTimestamp(a);return a.relative},getFormattedTimestampByBucket:function(a,c){switch(c){case b("MercuryTimePassed").TODAY:return{absolute:g._("Aujourd\u2019hui"),relative:b("formatDate")(a,"g:ia")};case b("MercuryTimePassed").WEEK_AGO:return{absolute:b("formatDate")(a,"l"),relative:b("formatDate")(a,"D")};case b("MercuryTimePassed").CURRENT_YEAR:return{absolute:b("formatDate")(a,"F j"),relative:b("formatDate")(a,"M j")};default:return{absolute:b("formatDate")(a,"F j, Y"),relative:b("formatDate")(a,"n/j/y")}}},getTimeBucket:function(a){__p&&__p();a=new Date(a);var c=new Date();c=new Date(c.getFullYear(),c.getMonth(),c.getDate());if(c<a)return b("MercuryTimePassed").TODAY;else if(c-h<a)return b("MercuryTimePassed").WEEK_AGO;else if(c.getFullYear()===a.getFullYear())return b("MercuryTimePassed").CURRENT_YEAR;else return b("MercuryTimePassed").OTHER_YEAR},getPreciseTimestamp:function(a){return b("formatDate")(new Date(a),i.getPreciseFormat(a))},getPreciseFormat:function(a){a=i.getTimeBucket(a);switch(a){case b("MercuryTimePassed").TODAY:return"g:ia";case b("MercuryTimePassed").WEEK_AGO:return"l g:ia";case b("MercuryTimePassed").CURRENT_YEAR:return"F jS, g:ia";case b("MercuryTimePassed").OTHER_YEAR:default:return"F j, Y g:i a"}}};e.exports=i}),null);