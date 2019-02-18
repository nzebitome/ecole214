if (self.CavalryLogger) { CavalryLogger.start_js(["6mEwM"]); }

__d("FBRTCAvailability",["ChannelConstants","PresenceStatus"],(function(a,b,c,d,e,f){"use strict";a={isCallable:function(a){a=b("PresenceStatus").getCapabilities(a);var c=b("ChannelConstants").CAPABILITY_VOIP_INTEROP;return!!(a&c)}};e.exports=a}),null);
__d("RTCWebUserActionsDebugTypedLogger",["Banzai","GeneratedLoggerUtils","nullthrows"],(function(a,b,c,d,e,f){"use strict";__p&&__p();function a(){this.$1={}}a.prototype.log=function(){b("GeneratedLoggerUtils").log("logger:RTCWebUserActionsDebugLoggerConfig",this.$1,b("Banzai").BASIC)};a.prototype.logVital=function(){b("GeneratedLoggerUtils").log("logger:RTCWebUserActionsDebugLoggerConfig",this.$1,b("Banzai").VITAL)};a.prototype.logImmediately=function(){b("GeneratedLoggerUtils").log("logger:RTCWebUserActionsDebugLoggerConfig",this.$1,{signal:!0})};a.prototype.clear=function(){this.$1={};return this};a.prototype.getData=function(){return babelHelpers["extends"]({},this.$1)};a.prototype.updateData=function(a){this.$1=babelHelpers["extends"]({},this.$1,a);return this};a.prototype.setCallID=function(a){this.$1.call_id=a;return this};a.prototype.setCallType=function(a){this.$1.call_type=a;return this};a.prototype.setCheckpoint=function(a){this.$1.checkpoint=a;return this};a.prototype.setClientTime=function(a){this.$1.client_time=a;return this};a.prototype.setComponent=function(a){this.$1.component=a;return this};a.prototype.setConferenceName=function(a){this.$1.conference_name=a;return this};a.prototype.setConferenceState=function(a){this.$1.conference_state=a;return this};a.prototype.setDeviceID=function(a){this.$1.device_id=a;return this};a.prototype.setErrorDomain=function(a){this.$1.error_domain=a;return this};a.prototype.setErrorType=function(a){this.$1.error_type=a;return this};a.prototype.setEvent=function(a){this.$1.event=a;return this};a.prototype.setEventTimeElapsed=function(a){this.$1.event_time_elapsed=a;return this};a.prototype.setIsCaller=function(a){this.$1.is_caller=a;return this};a.prototype.setMediaType=function(a){this.$1.media_type=a;return this};a.prototype.setPage=function(a){this.$1.page=a;return this};a.prototype.setSurface=function(a){this.$1.surface=a;return this};a.prototype.setTime=function(a){this.$1.time=a;return this};a.prototype.setVC=function(a){this.$1.vc=a;return this};a.prototype.setWeight=function(a){this.$1.weight=a;return this};c={call_id:!0,call_type:!0,checkpoint:!0,client_time:!0,component:!0,conference_name:!0,conference_state:!0,device_id:!0,error_domain:!0,error_type:!0,event:!0,event_time_elapsed:!0,is_caller:!0,media_type:!0,page:!0,surface:!0,time:!0,vc:!0,weight:!0};e.exports=a}),null);
__d("RTCWebUserActionsTypedLogger",["Banzai","GeneratedLoggerUtils","nullthrows"],(function(a,b,c,d,e,f){"use strict";__p&&__p();function a(){this.$1={}}a.prototype.log=function(){b("GeneratedLoggerUtils").log("logger:RTCWebUserActionsLoggerConfig",this.$1,b("Banzai").BASIC)};a.prototype.logVital=function(){b("GeneratedLoggerUtils").log("logger:RTCWebUserActionsLoggerConfig",this.$1,b("Banzai").VITAL)};a.prototype.logImmediately=function(){b("GeneratedLoggerUtils").log("logger:RTCWebUserActionsLoggerConfig",this.$1,{signal:!0})};a.prototype.clear=function(){this.$1={};return this};a.prototype.getData=function(){return babelHelpers["extends"]({},this.$1)};a.prototype.updateData=function(a){this.$1=babelHelpers["extends"]({},this.$1,a);return this};a.prototype.setCallID=function(a){this.$1.call_id=a;return this};a.prototype.setCallType=function(a){this.$1.call_type=a;return this};a.prototype.setCheckpoint=function(a){this.$1.checkpoint=a;return this};a.prototype.setClientTime=function(a){this.$1.client_time=a;return this};a.prototype.setComponent=function(a){this.$1.component=a;return this};a.prototype.setConferenceName=function(a){this.$1.conference_name=a;return this};a.prototype.setConferenceState=function(a){this.$1.conference_state=a;return this};a.prototype.setDeviceID=function(a){this.$1.device_id=a;return this};a.prototype.setErrorDomain=function(a){this.$1.error_domain=a;return this};a.prototype.setErrorType=function(a){this.$1.error_type=a;return this};a.prototype.setEvent=function(a){this.$1.event=a;return this};a.prototype.setEventTimeElapsed=function(a){this.$1.event_time_elapsed=a;return this};a.prototype.setIsCaller=function(a){this.$1.is_caller=a;return this};a.prototype.setMediaType=function(a){this.$1.media_type=a;return this};a.prototype.setPage=function(a){this.$1.page=a;return this};a.prototype.setSurface=function(a){this.$1.surface=a;return this};a.prototype.setTime=function(a){this.$1.time=a;return this};a.prototype.setVC=function(a){this.$1.vc=a;return this};a.prototype.setWeight=function(a){this.$1.weight=a;return this};c={call_id:!0,call_type:!0,checkpoint:!0,client_time:!0,component:!0,conference_name:!0,conference_state:!0,device_id:!0,error_domain:!0,error_type:!0,event:!0,event_time_elapsed:!0,is_caller:!0,media_type:!0,page:!0,surface:!0,time:!0,vc:!0,weight:!0};e.exports=a}),null);
__d("RTWebLoggingCallType",[],(function(a,b,c,d,e,f){e.exports=Object.freeze({P2P:"p2p",MW:"mw",ESCALATED:"escalated"})}),null);
__d("RTWebLoggingComponent",[],(function(a,b,c,d,e,f){e.exports=Object.freeze({AUDIO_CALL:"audio_button",VIDEO_CALL:"video_button",START_CALL:"start_call_button",END_CALL:"end_call_button",JOIN_CALL:"join_call_button",CANCEL:"cancel_button",CALL_BACK:"call_back",CALL_AGAIN:"call_again",CHAT_PANEL_MESSAGE:"chat_panel_message",REDIAL:"redial",SCREENSHARING:"screensharing",SCREENSHARING_POP_OUT:"screensharing_pop_out_button",TOGGLE_VIDEO:"toggle_video",TOGGLE_AUDIO:"toggle_audio",TOGGLE_CHAT:"toggle_chat",TOGGLE_FILTERS:"toggle_filters",SCROLL_FILTERS:"scroll_filters",VIDEO_FILTER_OPTION:"video_filter_option",ADD_PARTICIPANT:"add_participant",FULLSCREEN:"fullscreen",FULLSCREEN_ENABLE:"fullscreen_enable",FULLSCREEN_DISABLE:"fullscreen_disable",CLOSE_WINDOW:"close_window",ACCEPT:"accept_button",DECLINE:"decline_button",NOT_NOW:"rating_not_now",SELF_VIEW:"self_view",SELF_VIEW_MINIMIZE:"self_view_minimize",SELF_VIEW_UNMINIMIZE:"self_view_unminimize",PARTICIPANT_ROW_SELECT:"participant_row_select",PARTICIPANT_ROW_UNSELECT:"participant_row_unselect",STAR_RATING:"star_rating",SUBMIT_FEEDBACK:"submit_feedback",SETTINGS:"settings",CLOSE_DIALOG:"close_dialog",INCOMING_RING_TONE:"incoming_ring_tone",FREE_CALL:"free_call",VIDEO_ESCALATE:"video_escalate",VIDEO_ESCALATE_ACCEPT:"video_escalate_accept",VIDEO_ESCALATE_DECLINE:"video_escalate_decline",RECENT_CALLS:"recent_calls",MESSAGE:"message",SAVE:"save_button",WINDOW_RESIZE:"window_resize",POOR_NETWORK_TOOLTIP:"poor_network_tooltip"})}),null);
__d("RTWebLoggingEvent",[],(function(a,b,c,d,e,f){e.exports=Object.freeze({TAP:"tap",IMPRESSION:"impression",ERROR:"error",RING_TONE_PLAYED:"ring_tone_played",CHECKPOINT:"checkpoint"})}),null);
__d("RTWebLoggingMediaType",[],(function(a,b,c,d,e,f){e.exports=Object.freeze({VIDEO:"video",AUDIO:"audio",ESCALATED:"escalated"})}),null);
__d("RTWebLoggingPage",[],(function(a,b,c,d,e,f){e.exports=Object.freeze({MESSENGER_DOT_COM:"messenger_dot_com",FACEBOOK:"facebook",MOBILE_WEB:"mweb",WORKPLACE:"workplace"})}),null);
__d("RTWebUserActionLogger",["CurrentUser","FBRTCConsoleLogger","FBRTCSupport","RTCWebUserActionsDebugTypedLogger","RTCWebUserActionsTypedLogger","RTWebLoggingCallType","RTWebLoggingComponent","RTWebLoggingEvent","RTWebLoggingMediaType","RTWebLoggingPage","RTWebLoggingSharedInstance","immutable","performanceNow"],(function(a,b,c,d,e,f){"use strict";__p&&__p();var g=b("immutable").Map;function a(){this.$2=g(),this.$3=new Set(),this.$4=b("RTWebLoggingSharedInstance").getInstance().getDeviceID(),this.$5=this.$6(),this.clearCache()}a.prototype.clearCache=function(){this.$1={callID:void 0,callType:void 0,mediaType:void 0,conferenceName:void 0,conferenceState:void 0}};a.prototype.logImpression=function(a){this.logEvent(babelHelpers["extends"]({eventName:b("RTWebLoggingEvent").IMPRESSION},a))};a.prototype.logPreCallImpression=function(a){this.clearCache(),this.logImpression(a)};a.prototype.logPreCallClick=function(a){this.clearCache(),this.logClick(a)};a.prototype.logClick=function(a){this.logEvent(babelHelpers["extends"]({eventName:b("RTWebLoggingEvent").TAP},a))};a.prototype.logError=function(a){this.logEvent(babelHelpers["extends"]({eventName:b("RTWebLoggingEvent").ERROR},a))};a.prototype.startTimer=function(a){var c=b("performanceNow")();this.$2=this.$2.set(a,c);this.logCheckpoint({checkpoint:a+"_timerStart"});this.$7(a,{startTime:c})};a.prototype.logStopTimer=function(a){var b=a.checkpointName===void 0?a.timerName:a.checkpointName,c=a.event||{};c.timeElapsed=this.$8(a.timerName);this.logCheckpoint(babelHelpers["extends"]({checkpoint:b+"_timerEnd"},c));return c.timeElapsed};a.prototype.logCheckpoint=function(a){this.logEvent(babelHelpers["extends"]({eventName:b("RTWebLoggingEvent").CHECKPOINT},a))};a.prototype.$9=function(a){return a===null||a===void 0};a.prototype.logEvent=function(a){__p&&__p();var b=this.$1;b.callID=this.$9(a.callID)?b.callID:a.callID;b.callType=a.callType||b.callType;b.conferenceState=a.conferenceState||b.conferenceState;b.conferenceName=this.$9(a.conferenceName)?b.conferenceName:a.conferenceName;b.isCaller=a.isCaller==null?b.isCaller:a.isCaller;b.mediaType=a.mediaType||b.mediaType;this.$10(a,b);b=this.$11(a,b);this.$7(a.eventName,b)};a.prototype.$11=function(a,c){var d=new(b("RTCWebUserActionsTypedLogger"))();d.setCallType(c.callType).setDeviceID(this.$4).setClientTime(Date.now()).setErrorDomain(a.errorDomain).setErrorType(a.errorType).setComponent(a.component).setConferenceState(c.conferenceState).setEvent(a.eventName).setMediaType(c.mediaType).setPage(this.$5).setCallID(c.callID).setConferenceName(c.conferenceName).setSurface(a.surface).setCheckpoint(a.checkpoint).setEventTimeElapsed(a.timeElapsed).setIsCaller(c.isCaller).log();return d.getData()};a.prototype.$10=function(a,c){var d=new(b("RTCWebUserActionsDebugTypedLogger"))();d.setCallType(c.callType).setDeviceID(this.$4).setClientTime(Date.now()).setErrorDomain(a.errorDomain).setErrorType(a.errorType).setComponent(a.component).setConferenceState(c.conferenceState).setEvent(a.eventName).setMediaType(c.mediaType).setPage(this.$5).setCallID(c.callID).setConferenceName(c.conferenceName).setSurface(a.surface).setCheckpoint(a.checkpoint).setEventTimeElapsed(a.timeElapsed).setIsCaller(c.isCaller).log();return d.getData()};a.prototype.getCallType=function(a,c){c===void 0&&(c=!1);if(a===null||a===void 0)return null;if(a)return b("RTWebLoggingCallType").MW;else if(c)return b("RTWebLoggingCallType").ESCALATED;else return b("RTWebLoggingCallType").P2P};a.prototype.getAudioVideoComponent=function(a){return a===null||a===void 0?null:a?b("RTWebLoggingComponent").AUDIO_CALL:b("RTWebLoggingComponent").VIDEO_CALL};a.prototype.getMediaType=function(a,c){c===void 0&&(c=!1);if(c)return b("RTWebLoggingMediaType").ESCALATED;else if(a)return b("RTWebLoggingMediaType").AUDIO;else return b("RTWebLoggingMediaType").VIDEO};a.prototype.logErrorOnceforDomain=function(a,b){this.$3.has(a)||(this.$3.add(a),this.logError({errorDomain:a,errorType:b.toString()}))};a.prototype.clearLoggedDomains=function(){this.$3.clear()};a.prototype.getWebLoggerInfoFromStore=function(a){a=a.callInfo;var b=a.callID,c=a.conferenceName;a=a.conferenceState;return{callID:b,conferenceName:c,conferenceState:a}};a.prototype.$6=function(){__p&&__p();if(b("FBRTCSupport").isMobileDevice())return b("RTWebLoggingPage").MOBILE_WEB;else if(b("CurrentUser").isWorkUser())return b("RTWebLoggingPage").WORKPLACE;var a=window.location.hostname;if(a.search("facebook")!==-1)return b("RTWebLoggingPage").FACEBOOK;else if(a.search("messenger")!==-1)return b("RTWebLoggingPage").MESSENGER_DOT_COM;return a};a.prototype.$8=function(a){var c=this.$2.get(a);if(c){this.$2=this.$2.remove(a);return parseInt(b("performanceNow")()-c,10)}return null};a.prototype.$7=function(a,c){a=a==null?"null":a;b("FBRTCConsoleLogger").getInstance().getLogHistory().log(a,JSON.stringify(c))};e.exports=new a()}),null);
__d("assignMediaStream",[],(function(a,b,c,d,e,f){"use strict";var g=window.URL||window.webkitURL,h="srcObject"in window.HTMLMediaElement.prototype,i="mozSrcObject"in window.HTMLMediaElement.prototype;function a(a,b){h?a.srcObject=b:i?a.mozSrcObject=b:(typeof a.src==="string"&&g.revokeObjectURL(a.src),a.src=b!=null?g.createObjectURL(b):"")}e.exports=a}),null);
__d("FBRTCUtils",["AsyncRequest","CollabCallTriggerType","FBIDCheck","FBRTCConfig","RTCConfig","RTWebUserActionLogger","assignMediaStream","emptyFunction","randomInt"],(function(a,b,c,d,e,f){__p&&__p();var g=6e3,h="setSinkId"in window.HTMLMediaElement.prototype;a={attachMediaStream:function(a,c){if(a==null)return;b("assignMediaStream")(a,c);if(c){c=a.play();c!==void 0&&c["catch"](function(a){b("RTWebUserActionLogger").logError({errorDomain:"autoplay was prevented",errorType:a.toString()})})}},aboutEqual:function(a,b){return a-b<.01&&b-a<.01},sendServerRequest:function(a,c,d,e,f,h){c===void 0&&(c=b("emptyFunction"));d===void 0&&(d=b("emptyFunction"));e===void 0&&(e=!1);f===void 0&&(f=g);h===void 0&&(h={});a=new(b("AsyncRequest"))().setURI(a).setData(h).setAllowCrossPageTransition(!0).setHandler(c).setErrorHandler(d).setTimeoutHandler(f,function(){d()});e&&a.setOption("asynchronous_DEPRECATED",!1);a.send()},supportsSetSink:function(){return h},isPeerVCEndpoint:function(a){var c=b("FBRTCConfig").isVCEndpointCall();return c!==void 0?c:!!a&&!b("FBIDCheck").isUser_deprecated(a)&&b("RTCConfig").CollabVCEndpointsVideoCallGK},isCollabTrigger:function(a){return a===b("CollabCallTriggerType").QUICK_DIAL||a===b("CollabCallTriggerType").MEETING_ROOM_PAGE_PROFILE}};e.exports=a}),null);
__d("FBRTCCallUIWrapper",["regeneratorRuntime","Bootloader","CurrentUser","FBRTCUtils","RTWebExperiments","UserAgent"],(function(a,b,c,d,e,f){"use strict";__p&&__p();var g=null,h={openGroupCallUI:function(a,c,d,e,f,h,i){return b("regeneratorRuntime").async(function(j){while(1)switch(j.prev=j.next){case 0:g=this._openWindow("Group Call"),b("Bootloader").loadModules(["FBRTCCallUI"],function(b){b.openGroupCallUI(a,c,d,e,f,h,g,i)},"FBRTCCallUIWrapper");case 2:case"end":return j.stop()}},null,this)},openGroupCallURI:function(a,c,d,e,f,h,i,j,k){return b("regeneratorRuntime").async(function(l){while(1)switch(l.prev=l.next){case 0:g=this._openWindow("Group Call"),b("Bootloader").loadModules(["FBRTCCallUI"],function(b){b.openGroupCallURI({conferenceName:a,callID:c,hasVideo:d,initializeVideo:e,serverInfoData:i,trigger:j,callSummary:k,callWindow:g,multiwayWwwTier:h,multiwayCoreTier:f})},"FBRTCCallUIWrapper");case 2:case"end":return l.stop()}},null,this)},openAsCaller:function(a,c,d,e){!g&&window.rtcCallChildWindow&&(g=window.rtcCallChildWindow,window.rtcCallChildWindow=null);if(this._shouldFocusCallWindow(a)){g&&g.focus();return}this._shouldCloseCallWindow()&&(g&&g.close());g=this._openWindow("Video Call",{isP2P:!0,isVCCall:b("FBRTCUtils").isPeerVCEndpoint(a)||b("FBRTCUtils").isCollabTrigger(d)});b("Bootloader").loadModules(["FBRTCCallUI"],function(b){b.openAsCaller(a,c,d,e,g)},"FBRTCCallUIWrapper")},openAsCallee:function(a,c,d,e,f){g=this._openWindow("Video Call",{isP2P:!0,isVCCall:b("FBRTCUtils").isPeerVCEndpoint(a)}),b("Bootloader").loadModules(["FBRTCCallUI"],function(b){b.openAsCallee(a,c,d,e,g,f)},"FBRTCCallUIWrapper")},_shouldFocusCallWindow:function(a){return!!g&&!g.closed&&g.rtcCallInProgessWith===a},_shouldCloseCallWindow:function(){return!!g&&!g.closed&&!g.rtcCallInProgessWith},_openWindow:function(a,b){__p&&__p();b=b===void 0?{isP2P:!1,isVCCall:!1}:b;var c=b.isP2P;c=c===void 0?!1:c;b=b.isVCCall;b=b===void 0?!1:b;c=this._windowPosition({isP2P:c,isVCCall:b});b=["menubar=no","location=no","scrollbars=no","status=no","personalbar=no",c.height,c.width,c.top,c.left].join(",");this._isSparkBrowser()&&(b="");c=window.open("",a,b);window.callWindow=c;return c},_windowDimension:function(a){__p&&__p();var c=a.isP2P;a=a.isVCCall;var d=960,e=540;if(screen&&screen.width>1280){var f=!1,g=!1;c&&(f=b("RTWebExperiments").forceSmallWindow(a,b("CurrentUser").isWorkUser()));!c&&!f&&(g=b("RTWebExperiments").fixedHeightGridView(a,b("CurrentUser").isWorkUser()));g?(d=b("RTWebExperiments").fixedHeightGridViewOuterWindowWidth(),e=b("RTWebExperiments").fixedHeightGridViewOuterWindowHeight()):f||(d=1280,e=720)}return{height:e,width:d}},_windowPosition:function(a){__p&&__p();var b=a.isP2P;b=b===void 0?!1:b;a=a.isVCCall;a=a===void 0?!1:a;var c,d,e,f;b=h._windowDimension({isP2P:b,isVCCall:a});a=b.height;b=b.width;window.innerWidth!==void 0?(d=window.innerWidth,c=window.innerHeight):(d=screen.width,c=screen.height);window.screenLeft!==void 0?(e=window.screenLeft,f=window.screenTop):(e=window.screenX,f=window.screenY);d=Math.floor(d/2-b/2+e);e=Math.floor(c/2-a/2+f);return{height:"height="+a.toString(),width:"width="+b.toString(),top:"top="+e.toString(),left:"left="+d.toString()}},_isSparkBrowser:function(){return b("UserAgent").isBrowser("Chrome < 34")&&b("UserAgent").isBrowser("Chrome > 33")}};e.exports=h}),null);
__d("RTWebLoggingSurface",[],(function(a,b,c,d,e,f){e.exports=Object.freeze({CALL_CONTROLS:"call_controls",CHAT_PANEL:"chat_panel",CHAT_TAB:"chat_tab",MESSENGER_HEADER:"messenger_header",INCOMING_DIALOG:"incoming_call_dialog",CALL_HEADER:"call_header",GROUP_CALL_ADD_MEMBERS_DIALOG:"group_call_add_members_dialog",GROUP_CALL_PARTICIPANT_PICKER_DIALOG:"group_call_participant_picker_dialog",CALL_CONTAINER:"call_container",TIMELINE_TOP_SECTION:"timeline_top_section",DROPDOWN_CALL_MENU:"dropdown_call_menu",THREAD_LIST:"thread_list",DESKTOP_NOTIFICATION:"desktop_notification",AUDIO_FALLBACK_DIALOG:"audio_fallback_dialog",STAR_RATING_SURFACE:"star_rating_surface",MISSED_CALL_DIALOG:"missed_call_dialog",UNSUPPORTED_BROWSER_DIALOG:"unsupported_browser_dialog",ADMIN_MESSAGE:"admin_message",WORK_HOVERCARD:"work_hovercard",MESSENGER_BUBBLE:"messenger_bubble",CHAT_SIDEBAR:"chat_sidebar",SETTING_DIALOG:"setting_dialog",SCREENSHARING_POP_OUT:"screensharing_pop_out"})}),null);
__d("RTWebCallTriggerMapping",["RTWebLoggingComponent","RTWebLoggingSurface","deepFreezeValue"],(function(a,b,c,d,e,f){"use strict";a={chat_sidebar:{surface:b("RTWebLoggingSurface").CHAT_SIDEBAR,component:b("RTWebLoggingComponent").RECENT_CALLS},chattab_audio_button:{surface:b("RTWebLoggingSurface").CHAT_TAB,component:b("RTWebLoggingComponent").AUDIO_CALL},chattab_video_button:{surface:b("RTWebLoggingSurface").CHAT_TAB,component:b("RTWebLoggingComponent").VIDEO_CALL},messenger_bubble_free_call:{surface:b("RTWebLoggingSurface").MESSENGER_BUBBLE,component:b("RTWebLoggingComponent").FREE_CALL},messenger_dot_com_missed_call_dialog:{surface:b("RTWebLoggingSurface").MISSED_CALL_DIALOG,component:b("RTWebLoggingComponent").START_CALL},messenger_dot_com_video_call:{surface:b("RTWebLoggingSurface").MESSENGER_HEADER,component:b("RTWebLoggingComponent").VIDEO_CALL},messenger_dot_com_audio_call:{surface:b("RTWebLoggingSurface").MESSENGER_HEADER,component:b("RTWebLoggingComponent").AUDIO_CALL},timeline:{surface:b("RTWebLoggingSurface").DROPDOWN_CALL_MENU,component:b("RTWebLoggingComponent").START_CALL},messenger_dot_com_work_hovercard:{surface:b("RTWebLoggingSurface").WORK_HOVERCARD,component:b("RTWebLoggingComponent").START_CALL},admin_message:{surface:b("RTWebLoggingSurface").ADMIN_MESSAGE,component:b("RTWebLoggingComponent").START_CALL},return_call:{surface:b("RTWebLoggingSurface").MISSED_CALL_DIALOG,component:b("RTWebLoggingComponent").START_CALL},popup_start_call_button:{surface:b("RTWebLoggingSurface").CALL_CONTAINER,component:b("RTWebLoggingComponent").START_CALL},redial_button:{surface:b("RTWebLoggingSurface").CALL_CONTAINER,component:b("RTWebLoggingComponent").REDIAL}};b("deepFreezeValue")(a);e.exports=a}),null);
__d("generateRTCCallID",["randomInt"],(function(a,b,c,d,e,f){"use strict";function a(){return b("randomInt")(0,4294967294)+1}e.exports=a}),null);
__d("FBRTCCore",["invariant","Bootloader","FBLogger","FBRTCAvailability","FBRTCCallUIWrapper","FBRTCSupport","RTWebCallTriggerMapping","RTWebLoggingCallType","RTWebUserActionLogger","generateRTCCallID","setTimeout"],(function(a,b,c,d,e,f,g){"use strict";__p&&__p();var h=!1;a={startOutgoingCall:function(a,c,d,e){__p&&__p();e===void 0&&(e=!1);/\D/.test(a)&&g(0,2478);var f=b("generateRTCCallID")(),i=b("RTWebCallTriggerMapping")[c];(i===null||i===void 0)&&b("FBLogger")("rtweb").mustfix("Unexpected or unknown call trigger: %s",c);b("RTWebUserActionLogger").logPreCallClick(babelHelpers["extends"]({},i,{callID:f.toString(),mediaType:b("RTWebUserActionLogger").getMediaType(d),callType:b("RTWebLoggingCallType").P2P}));if(h)return;h=!0;b("setTimeout")(function(){h=!1},1e3);e&&!b("FBRTCSupport").isCollabSupported()?b("Bootloader").loadModules(["FBRTCUnsupportedBrowserMessage","CollabMessengerLogger"],function(b,c){b.showForUnsupportedCollabCall(),c.logBrowserNotSupported({peerID:a})},"FBRTCCore"):!b("FBRTCSupport").isWebrtcSupported()?b("Bootloader").loadModules(["FBRTCUnsupportedBrowserMessage"],function(a){a.showForOutgoingCall(),b("RTWebUserActionLogger").logError({callID:f.toString(),callType:b("RTWebLoggingCallType").P2P,mediaType:b("RTWebUserActionLogger").getMediaType(d),errorDomain:"unsupported browser"})},"FBRTCCore"):b("FBRTCCallUIWrapper").openAsCaller(a,f,c,d)},startGroupCall:function(a){__p&&__p();var c=a.conferenceName,d=a.hasVideo,e=a.serverInfoData,f=a.trigger;a=a.usersToRing;a=a===void 0?[]:a;if(h)return;h=!0;b("setTimeout")(function(){h=!1},1e3);if(!b("FBRTCSupport").isGroupCallWebtrcSupported()){b("Bootloader").loadModules(["MessengerRTCUnsupportedBrowserDialogController"],function(a){b("RTWebUserActionLogger").logError({callType:b("RTWebLoggingCallType").MW,conferenceName:c,mediaType:b("RTWebUserActionLogger").getMediaType(!d),errorDomain:"unsupported browser"}),a.render({hasVideo:d,isGroupCall:!0})},"FBRTCCore");return}b("FBRTCCallUIWrapper").openGroupCallUI(c,b("generateRTCCallID")(),a,d,d,f,e)},isAvailableForWebrtcCalling:function(a){return b("FBRTCAvailability").isCallable(a)}};e.exports=a}),null);