(()=>{var n={273:()=>{function n(t){return(n="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(n){return typeof n}:function(n){return n&&"function"==typeof Symbol&&n.constructor===Symbol&&n!==Symbol.prototype?"symbol":typeof n})(t)}!function(t,e){var o=null,i=null,a=null,r=null,s=null,l=null,c=0,u=0,d=0,h=null,p=null,f="current",v=null,m=null,g=null,x=null,y=null,w=0,_=0,z=[],I=null,b=null,W=null,P=null,H=null,M=null,j=0,B=0,S={},N={navWidth:120,navHeight:120,navItemNum:5,navItemMargin:7,navBorder:1,autoPlay:!0,autoPlayTimeout:3e3},T={init:function(n){var e=t.extend({},N,n);i=(o=this).find(".exzoom_img_box"),l=o.find(".exzoom_img_ul"),h=o.find(".exzoom_nav"),x=o.find(".exzoom_prev_btn"),y=o.find(".exzoom_next_btn"),r=a=o.outerWidth(),S.navWidth=e.navWidth,S.navHeight=e.navHeight,S.navBorder=e.navBorder,S.navItemMargin=e.navItemMargin,S.navItemNum=e.navItemNum,S.autoPlay=e.autoPlay,S.autoPlayTimeout=e.autoPlayTimeout,g=i.find("img"),w=g.length,function(n){var t=setInterval((function(){var e=0,o=n.length;n.each((function(){this.complete&&e++})),e===o&&(clearInterval(t),k())}),100)}(g)},prev:function(){X()},next:function(){O()},setImg:function(){var n=arguments[0];D(n,(function(t,e){H.attr("src",n),b.attr("src",n),l.find("li").length===w+1&&l.find("li:last").remove(),l.append('<li style="width: '+a+'px;"><img src="'+n+'"></li>'),A(E(n,t,e))}))}};function k(){i.append("<div class='exzoom_img_ul_outer'></div>"),h.append("<p class='exzoom_nav_inner'></p>"),s=i.find(".exzoom_img_ul_outer"),p=h.find(".exzoom_nav_inner"),s.append(l);for(var n=0;n<w;n++){z[n]=E(g.eq(n)),console.log(z[n]);var N=l.find("li").eq(n);N.css("width",a),N.find("img").css({"margin-top":z[n][5],width:z[n][3]})}v=h.find("span"),m=2*S.navBorder+S.navHeight,S.exzoom_navWidth=(m+S.navItemMargin)*S.navItemNum,S.exzoom_nav_innerWidth=(m+S.navItemMargin)*w,v.eq(_).addClass(f),h.css({height:m+"px",width:a-x.width()-y.width()}),p.css({width:S.exzoom_nav_innerWidth+"px"}),v.css({"margin-left":S.navItemMargin+"px",width:S.navWidth+"px",height:S.navHeight+"px"}),u=a*w,d=a*(w-1),l.css("width",u),i.append("\n<div class='exzoom_zoom_outer'>\n    <span class='exzoom_zoom'></span>\n</div>\n<p class='exzoom_preview'>\n    <img class='exzoom_preview_img' src='' />\n</p>\n            "),I=i.find(".exzoom_zoom"),b=i.find(".exzoom_main_img"),W=i.find(".exzoom_zoom_outer"),P=i.find(".exzoom_preview"),H=i.find(".exzoom_preview_img"),i.css({width:r+"px",height:r+"px"}),s.css({width:r+"px",height:r+"px"}),P.css({width:r+"px",height:r+"px",left:r+5+"px"}),A(z[_]),Y(),l.on("touchstart",(function(n){var t=q(n);j=t.x,t.y;var o=l.css("left");c=parseInt(o),e.clearInterval(M)})),l.on("touchmove",(function(n){var t,e=q(n);B=e.x,e.y,t=Q(t=c+B-j),l.css("left",t)})),l.on("touchend",(function(n){console.log(B<j),B<j?O():B>j&&X(),Y()})),W.on("mousedown",(function(n){var t=q(n);j=t.x,t.y;var e=l.css("left");c=parseInt(e)})),W.on("mouseup",(function(n){var t=o.offset();j-t.left<a/2?X():j-t.left>a/2&&O()})),o.on("mouseenter",(function(){e.clearInterval(M)})),o.on("mouseleave",(function(){Y()})),W.on("mouseenter",(function(){I.css("display","block"),P.css("display","block")})),W.on("mousemove",(function(n){var t=I.width()/2,e=W.width()-t,o=W.height()-t,i=n.pageX-W.offset().left,a=n.pageY-W.offset().top,r=i-t,s=a-t;i<=t&&(r=0),i>=e&&(r=e-t),a<=t&&(s=0),a>=o&&(s=o-t),I.css({left:r+"px",top:s+"px"}),H.css({left:-r*P.width()/I.width()+"px",top:-s*P.width()/I.width()+"px"})})),W.on("mouseleave",(function(){I.css("display","none"),P.css("display","none")})),P.on("mouseenter",(function(){I.css("display","none"),P.css("display","none")})),y.on("click",(function(){O()})),x.on("click",(function(){X()})),v.hover((function(){C(_=t(this).index())}))}function q(n){var t=n||e.event,o=t;return void 0!==t.touches&&t.touches.length>0&&(o=t.touches[0]),{x:o.clientX||o.pageX,y:o.clientY||o.pageY}}function Q(n){return-n>d?(n=-d,_=0):n>0&&(n=0),n}function C(n){void 0===n&&alert("exzoom 中的 move 函数的 direction 参数必填"),_>z.length-1&&(_=0),v.eq(_).addClass(f).siblings().removeClass(f);var t=h.width(),e=0,o=(S.navItemMargin+S.navWidth+2*S.navBorder)*(_+1);o>t&&(e=a-o),p.css({left:e});var i=-a*_;i=Q(i),l.stop().animate({left:i},500),A(z[_])}function O(){++_>w&&(_=w),C("right")}function X(){--_<0&&(_=0),C("left")}function Y(){S.autoPlay&&(M=e.setInterval((function(){_>=w&&(_=0),_++,C("right")}),S.autoPlayTimeout))}function A(n){void 0!==n&&(H.attr("src",n[0]),b.attr("src",n[0]).css({width:n[3]+"px",height:n[4]+"px"}),W.css({width:n[3]+"px",height:n[4]+"px",top:n[5]+"px",left:n[6]+"px",position:"relative"}),I.css({width:n[7]+"px",height:n[7]+"px"}),H.css({width:n[8]+"px",height:n[9]+"px"}))}function D(n,t){var e=new Image;if(e.src=n,void 0===t)return{width:e.width,height:e.height};e.complete?t(e.width,e.height):e.onload=function(){t(e.width,e.height)}}function E(n,t,e){var o,i=[];if("string"==typeof n)o=n;else{var a=D(o=n.attr("src"));t=a.width,e=a.height}i[0]=o,i[1]=t,i[2]=e;var s=i[1]/i[2];if(1===s)i[3]=r,i[4]=r,i[5]=0,i[6]=0,i[7]=r/2,i[8]=2*r,i[9]=2*r,p.append('<span><img src="'.concat(o,'" width="').concat(S.navWidth,'" height="').concat(S.navHeight,'"/></span>'));else if(s>1){i[3]=r,i[4]=r/s,i[5]=(r-i[4])/2,i[6]=0,i[7]=i[4]/2,i[8]=2*r*s,i[9]=2*r;var l=(S.navHeight-S.navWidth/s)/2;p.append('<span><img src="'.concat(o,'" width="').concat(S.navWidth,"\" style='top:").concat(l,"px;' /></span>"))}else if(s<1){i[3]=r*s,i[4]=r,i[5]=0,i[6]=(r-i[3])/2,i[7]=i[3]/2,i[8]=2*r,i[9]=2*r/s;var c=(S.navWidth-S.navHeight*s)/2;p.append('<span><img src="'.concat(o,'" height="').concat(S.navHeight,'" style="left:').concat(c,'px;"/></span>'))}return i}t.fn.extend({exzoom:function(e,o){if(0===arguments.length||"object"===n(e)&&!o){if(0!==this.length)return T.init.apply(this,arguments);t.error("Selector is empty when call jQuery.exzomm")}else{if(T[e])return T[e].apply(this,Array.prototype.slice.call(arguments,1));t.error("Method "+e+"does not exist on jQuery.exzomm")}}})}(jQuery,window)}},t={};function e(o){var i=t[o];if(void 0!==i)return i.exports;var a=t[o]={exports:{}};return n[o](a,a.exports,e),a.exports}e.n=n=>{var t=n&&n.__esModule?()=>n.default:()=>n;return e.d(t,{a:t}),t},e.d=(n,t)=>{for(var o in t)e.o(t,o)&&!e.o(n,o)&&Object.defineProperty(n,o,{enumerable:!0,get:t[o]})},e.o=(n,t)=>Object.prototype.hasOwnProperty.call(n,t),(()=>{"use strict";e(273),jQuery(document).ready((function(n){n(document).ready((function(){n("#exzoom").exzoom({navWidth:120,navHeight:120,navItemNum:5,navItemMargin:7,navBorder:1,autoPlay:!0,autoPlayTimeout:3e3})}))}))})()})();
//# sourceMappingURL=zoom.js.map