if (self.CavalryLogger) { CavalryLogger.start_js(["Rzq+P"]); }

__d("TypeaheadFacepile",["DOM"],(function(a,b,c,d,e,f){function a(){}a.render=function(a){var c=[b("DOM").create("span",{className:"splitpic leftpic"},[b("DOM").create("img",{alt:"",src:a[0]})]),b("DOM").create("span",{className:"splitpic"+(a[2]?" toppic":"")},[b("DOM").create("img",{alt:"",src:a[1]})])];a[2]&&c.push(b("DOM").create("span",{className:"splitpic bottompic"},[b("DOM").create("img",{alt:"",src:a[2]})]));return b("DOM").create("span",{className:"splitpics clearfix"},c)};e.exports=a}),null);
__d("createEmojiElement",["cx","JSXDOM","gkx"],(function(a,b,c,d,e,f,g){function a(a,c,d){d=d||16;d={height:d,width:d,fontSize:d,backgroundImage:"url('"+c+"')"};return b("JSXDOM").span({className:"_5mfr"},[b("JSXDOM").span({className:"_6qdm",style:d},a)])}e.exports=a}),null);
__d("DOMEmoji",["cx","EmojiImageURL","EmojiRenderer","FBEmojiUtils","JSXDOM","createEmojiElement","flattenArray","gkx","isElementNode"],(function(a,b,c,d,e,f,g){"use strict";__p&&__p();a={MAX_ITEMS:40,transform:function(a,c){c=c||{};var d=c.size||16;return b("flattenArray")(a.map(function(a){if(!b("isElementNode")(a))return b("EmojiRenderer").render(a,function(a){var c=b("FBEmojiUtils").getSupportedKey(a);return c?b("createEmojiElement")(a.join(""),b("EmojiImageURL").getFBEmojiURL(c,d),d):b("JSXDOM").span({className:"_4ay8"+(d===16?" _3kkw":"")},a.join(""))},this.MAX_ITEMS);else return a}.bind(this)))},params:function(a){if(!a)return this;var b=this;return{__params:!0,obj:b,params:a}}};e.exports=a}),null);
__d("TransformTextToDOMMixin",["flattenArray","isElementNode"],(function(a,b,c,d,e,f){__p&&__p();var g=3;a={transform:function(a,c){__p&&__p();return b("flattenArray")(a.map(function(a){__p&&__p();if(!b("isElementNode")(a)){var d=a,e=[],f=this.MAX_ITEMS||g;while(f--){var h=c?[d].concat(c):[d];h=this.match.apply(this,h);if(!h)break;e.push(d.substring(0,h.startIndex));e.push(h.element);d=d.substring(h.endIndex)}d&&e.push(d);return e}return a}.bind(this)))},params:function(){for(var a=arguments.length,b=new Array(a),c=0;c<a;c++)b[c]=arguments[c];var d=this;return{__params:!0,obj:d,params:b}}};e.exports=a}),null);
__d("DOMEmote",["cx","fbt","EmojiImageURL","EmoticonEmojiList","EmoticonsList","JSXDOM","SupportedFacebookEmoji","TransformTextToDOMMixin"],(function(a,b,c,d,e,f,g,h){"use strict";__p&&__p();a={MAX_ITEMS:40,match:function(a,c){var d=c&&c.getMessengerEmote;a=d?b("EmoticonEmojiList").regexp.exec(a):b("EmoticonsList").regexp.exec(a);if(!a||!a.length)return!1;var e=a[2];a=a.index+a[1].length;d=d?b("EmoticonEmojiList").names[e]:b("EmoticonsList").emotes[e];return{startIndex:a,endIndex:a+e.length,element:this._element(e,d,c)}},_element:function(a,c,d){d=d&&d.getMessengerEmote;var e=d?b("EmoticonEmojiList").emote2emojis[c]:b("EmoticonsList").emoji[c];if(e==null)return a;c=h._("\u00e9motic\u00f4ne {emoticonName}",[h._param("emoticonName",c)]);return b("JSXDOM").span({className:"_47e3 _5mfr",title:c},[b("JSXDOM").img({"aria-hidden":!0,className:"img",height:16,src:d?b("EmojiImageURL").getMessengerURL(e,16):b("SupportedFacebookEmoji")[e]?b("EmojiImageURL").getFBEmojiURL(e):b("EmojiImageURL").getFBEmojiExtendedURL(e),width:16}),b("JSXDOM").span({"aria-hidden":!0,className:"_7oe"},a)])}};e.exports=Object.assign(a,b("TransformTextToDOMMixin"))}),null);
__d("transformTextToDOM",["createArrayFromMixed"],(function(a,b,c,d,e,f){function a(a,c){var d=[a];c=b("createArrayFromMixed")(c);c.forEach(function(a){var b,c=a;a.__params&&(b=a.params,c=a.obj);d=c.transform(d,b)});return d}e.exports=a}),null);
__d("emojiAndEmote",["DOMEmoji","DOMEmote","FbtResultBase","transformTextToDOM"],(function(a,b,c,d,e,f){"use strict";a=function(a,c){if(a instanceof b("FbtResultBase"))return[a];var d=c?{isSupportedEmoji:c.isSupportedEmoji}:null;c=c?{getMessengerEmote:c.getMessengerEmote}:null;d=[b("DOMEmoji").params(d),b("DOMEmote").params(c)];return b("transformTextToDOM")(a,d)};e.exports=a}),null);
__d("CompactTypeaheadRenderer",["BadgeHelper","DOM","TypeaheadFacepile","emojiAndEmote","isSocialPlugin"],(function(a,b,c,d,e,f){__p&&__p();function a(a,c){__p&&__p();c=[];if(a.xhp)return b("DOM").create("li",{className:"raw"},a.xhp);var d=a.photos||a.photo;d&&(d instanceof Array?d=b("TypeaheadFacepile").render(d):d=b("DOM").create("img",{alt:"",src:d}),c.push(d));d=a.iconClass;if(d){d=b("DOM").create("span",{className:d});c.push(d)}d=a.debug_info;d&&c.push(b("DOM").create("span",{className:"debugInfo"},d));if(a.text){d=[a.text];b("isSocialPlugin")()||(d=b("emojiAndEmote")(a.text));a.is_verified?d.push(b("BadgeHelper").renderBadge("xsmall","verified")):a.is_trending_hashtag&&d.push(b("BadgeHelper").renderBadge("xsmall","trending"));c.push(b("DOM").create("span",{className:"text"},d))}d=a.subtext;var e=a.category;if(d||e){var f=[];d&&f.push(d);d&&e&&f.push(" \xb7 ");e&&f.push(e);c.push(b("DOM").create("span",{className:"subtext"},f))}d=b("DOM").create("li",{className:a.type||""},c);a.text&&(d.setAttribute("title",a.text),d.setAttribute("aria-label",a.text));return d}a.className="compact";e.exports=a}),null);