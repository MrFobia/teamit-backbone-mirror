@verbatim
<!doctype html>
<html lang="es-CO">
  <head>
    <title>Team It — Infraestructura tecnológica que sostiene tu operación</title>
    <meta
      name="description"
      content="Team It diseña, implementa y opera infraestructura tecnológica en Colombia: soluciones de infraestructura, servicios profesionales, cloud y cómputo general."
    />
    <meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="theme-color" content="#08090d" />

<!--
  CSS crítico, en línea a propósito: la hoja del sitio entra por el bundle, así
  que hasta que el JS corre el navegador pinta el HTML pelado sobre blanco. Esto
  fija el fondo oscuro desde el primer byte y evita el fogonazo.
-->
<style>
  html {
    background: #08090d;
    color-scheme: dark;
  }
  body {
    margin: 0;
    background: #08090d;
    color: #fff;
    font-family: Inter, ui-sans-serif, system-ui, -apple-system, sans-serif;
    -webkit-font-smoothing: antialiased;
  }
  /* Nada del contenido se ve hasta que la hoja real está aplicada. */
  body:not([data-booted]) main,
  body:not([data-booted]) .site-header,
  body:not([data-booted]) footer {
    visibility: hidden;
  }
</style>
<link rel="icon" type="image/png" href="/projects/teamit/assets/brand/teamit-logo.png" />
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link
  rel="stylesheet"
  href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Space+Grotesk:wght@500;600;700&display=swap"
/>

    <script>
document.addEventListener("DOMContentLoaded",function(){
var NM=Object.defineProperty;var FM=(an,ci,Ye)=>ci in an?NM(an,ci,{enumerable:!0,configurable:!0,writable:!0,value:Ye}):an[ci]=Ye;var It=(an,ci,Ye)=>FM(an,typeof ci!="symbol"?ci+"":ci,Ye);(function(){"use strict";function an(r){if(r===void 0)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return r}function ci(r,t){r.prototype=Object.create(t.prototype),r.prototype.constructor=r,r.__proto__=t}/*!
 * GSAP 3.15.0
 * https://gsap.com
 *
 * @license Copyright 2008-2026, GreenSock. All rights reserved.
 * Subject to the terms at https://gsap.com/standard-license
 * @author: Jack Doyle, jack@greensock.com
*/var Ye={autoSleep:120,force3D:"auto",nullTargetWarn:1,units:{lineHeight:""}},Js={duration:.5,overwrite:!1,delay:0},pl,je,Ae,Wn=1e8,ve=1/Wn,ml=Math.PI*2,nm=ml/4,im=0,rh=Math.sqrt,rm=Math.cos,sm=Math.sin,qe=function(t){return typeof t=="string"},Le=function(t){return typeof t=="function"},Mi=function(t){return typeof t=="number"},_l=function(t){return typeof t>"u"},ui=function(t){return typeof t=="object"},vn=function(t){return t!==!1},gl=function(){return typeof window<"u"},Zo=function(t){return Le(t)||qe(t)},sh=typeof ArrayBuffer=="function"&&ArrayBuffer.isView||function(){},Qe=Array.isArray,om=/random\([^)]+\)/g,am=/,\s*/g,oh=/(?:-?\.?\d|\.)+/gi,ah=/[-+=.]*\d+[.e\-+]*\d*[e\-+]*\d*/g,Zr=/[-+=.]*\d+[.e-]*\d*[a-z%]*/g,vl=/[-+=.]*\d+\.?\d*(?:e-|e\+)?\d*/gi,lh=/[+-]=-?[.\d]+/,lm=/[^,'"\[\]\s]+/gi,cm=/^[+\-=e\s\d]*\d+[.\d]*([a-z]*|%)\s*$/i,we,hi,xl,Sl,Cn={},jo={},ch,uh=function(t){return(jo=Jr(t,Cn))&&yn},Ml=function(t,e){return console.warn("Invalid property",t,"set to",e,"Missing plugin? gsap.registerPlugin()")},Qs=function(t,e){return!e&&console.warn(t)},hh=function(t,e){return t&&(Cn[t]=e)&&jo&&(jo[t]=e)||Cn},to=function(){return 0},um={suppressEvents:!0,isStart:!0,kill:!1},Jo={suppressEvents:!0,kill:!1},hm={suppressEvents:!0},yl={},zi=[],El={},fh,Pn={},Tl={},dh=30,Qo=[],bl="",Al=function(t){var e=t[0],n,i;if(ui(e)||Le(e)||(t=[t]),!(n=(e._gsap||{}).harness)){for(i=Qo.length;i--&&!Qo[i].targetTest(e););n=Qo[i]}for(i=t.length;i--;)t[i]&&(t[i]._gsap||(t[i]._gsap=new kh(t[i],n)))||t.splice(i,1);return t},pr=function(t){return t._gsap||Al(Yn(t))[0]._gsap},ph=function(t,e,n){return(n=t[e])&&Le(n)?t[e]():_l(n)&&t.getAttribute&&t.getAttribute(e)||n},xn=function(t,e){return(t=t.split(",")).forEach(e)||t},Ue=function(t){return Math.round(t*1e5)/1e5||0},Re=function(t){return Math.round(t*1e7)/1e7||0},jr=function(t,e){var n=e.charAt(0),i=parseFloat(e.substr(2));return t=parseFloat(t),n==="+"?t+i:n==="-"?t-i:n==="*"?t*i:t/i},fm=function(t,e){for(var n=e.length,i=0;t.indexOf(e[i])<0&&++i<n;);return i<n},ta=function(){var t=zi.length,e=zi.slice(0),n,i;for(El={},zi.length=0,n=0;n<t;n++)i=e[n],i&&i._lazy&&(i.render(i._lazy[0],i._lazy[1],!0)._lazy=0)},wl=function(t){return!!(t._initted||t._startAt||t.add)},mh=function(t,e,n,i){zi.length&&!je&&ta(),t.render(e,n,!!(je&&e<0&&wl(t))),zi.length&&!je&&ta()},_h=function(t){var e=parseFloat(t);return(e||e===0)&&(t+"").match(lm).length<2?e:qe(t)?t.trim():t},gh=function(t){return t},Dn=function(t,e){for(var n in e)n in t||(t[n]=e[n]);return t},dm=function(t){return function(e,n){for(var i in n)i in e||i==="duration"&&t||i==="ease"||(e[i]=n[i])}},Jr=function(t,e){for(var n in e)t[n]=e[n];return t},vh=function r(t,e){for(var n in e)n!=="__proto__"&&n!=="constructor"&&n!=="prototype"&&(t[n]=ui(e[n])?r(t[n]||(t[n]={}),e[n]):e[n]);return t},ea=function(t,e){var n={},i;for(i in t)i in e||(n[i]=t[i]);return n},eo=function(t){var e=t.parent||we,n=t.keyframes?dm(Qe(t.keyframes)):Dn;if(vn(t.inherit))for(;e;)n(t,e.vars.defaults),e=e.parent||e._dp;return t},pm=function(t,e){for(var n=t.length,i=n===e.length;i&&n--&&t[n]===e[n];);return n<0},xh=function(t,e,n,i,s){var o=t[i],a;if(s)for(a=e[s];o&&o[s]>a;)o=o._prev;return o?(e._next=o._next,o._next=e):(e._next=t[n],t[n]=e),e._next?e._next._prev=e:t[i]=e,e._prev=o,e.parent=e._dp=t,e},na=function(t,e,n,i){n===void 0&&(n="_first"),i===void 0&&(i="_last");var s=e._prev,o=e._next;s?s._next=o:t[n]===e&&(t[n]=o),o?o._prev=s:t[i]===e&&(t[i]=s),e._next=e._prev=e.parent=null},ki=function(t,e){t.parent&&(!e||t.parent.autoRemoveChildren)&&t.parent.remove&&t.parent.remove(t),t._act=0},mr=function(t,e){if(t&&(!e||e._end>t._dur||e._start<0))for(var n=t;n;)n._dirty=1,n=n.parent;return t},mm=function(t){for(var e=t.parent;e&&e.parent;)e._dirty=1,e.totalDuration(),e=e.parent;return t},Rl=function(t,e,n,i){return t._startAt&&(je?t._startAt.revert(Jo):t.vars.immediateRender&&!t.vars.autoRevert||t._startAt.render(e,!0,i))},_m=function r(t){return!t||t._ts&&r(t.parent)},Sh=function(t){return t._repeat?Qr(t._tTime,t=t.duration()+t._rDelay)*t:0},Qr=function(t,e){var n=Math.floor(t=Re(t/e));return t&&n===t?n-1:n},ia=function(t,e){return(t-e._start)*e._ts+(e._ts>=0?0:e._dirty?e.totalDuration():e._tDur)},ra=function(t){return t._end=Re(t._start+(t._tDur/Math.abs(t._ts||t._rts||ve)||0))},sa=function(t,e){var n=t._dp;return n&&n.smoothChildTiming&&t._ts&&(t._start=Re(n._time-(t._ts>0?e/t._ts:((t._dirty?t.totalDuration():t._tDur)-e)/-t._ts)),ra(t),n._dirty||mr(n,t)),t},Mh=function(t,e){var n;if((e._time||!e._dur&&e._initted||e._start<t._time&&(e._dur||!e.add))&&(n=ia(t.rawTime(),e),(!e._dur||io(0,e.totalDuration(),n)-e._tTime>ve)&&e.render(n,!0)),mr(t,e)._dp&&t._initted&&t._time>=t._dur&&t._ts){if(t._dur<t.duration())for(n=t;n._dp;)n.rawTime()>=0&&n.totalTime(n._tTime),n=n._dp;t._zTime=-ve}},fi=function(t,e,n,i){return e.parent&&ki(e),e._start=Re((Mi(n)?n:n||t!==we?Xn(t,n,e):t._time)+e._delay),e._end=Re(e._start+(e.totalDuration()/Math.abs(e.timeScale())||0)),xh(t,e,"_first","_last",t._sort?"_start":0),Cl(e)||(t._recent=e),i||Mh(t,e),t._ts<0&&sa(t,t._tTime),t},yh=function(t,e){return(Cn.ScrollTrigger||Ml("scrollTrigger",e))&&Cn.ScrollTrigger.create(e,t)},Eh=function(t,e,n,i,s){if(Bl(t,e,s),!t._initted)return 1;if(!n&&t._pt&&!je&&(t._dur&&t.vars.lazy!==!1||!t._dur&&t.vars.lazy)&&fh!==In.frame)return zi.push(t),t._lazy=[s,i],1},gm=function r(t){var e=t.parent;return e&&e._ts&&e._initted&&!e._lock&&(e.rawTime()<0||r(e))},Cl=function(t){var e=t.data;return e==="isFromStart"||e==="isStart"},vm=function(t,e,n,i){var s=t.ratio,o=e<0||!e&&(!t._start&&gm(t)&&!(!t._initted&&Cl(t))||(t._ts<0||t._dp._ts<0)&&!Cl(t))?0:1,a=t._rDelay,l=0,c,u,f;if(a&&t._repeat&&(l=io(0,t._tDur,e),u=Qr(l,a),t._yoyo&&u&1&&(o=1-o),u!==Qr(t._tTime,a)&&(s=1-o,t.vars.repeatRefresh&&t._initted&&t.invalidate())),o!==s||je||i||t._zTime===ve||!e&&t._zTime){if(!t._initted&&Eh(t,e,i,n,l))return;for(f=t._zTime,t._zTime=e||(n?ve:0),n||(n=e&&!f),t.ratio=o,t._from&&(o=1-o),t._time=0,t._tTime=l,c=t._pt;c;)c.r(o,c.d),c=c._next;e<0&&Rl(t,e,n,!0),t._onUpdate&&!n&&Ln(t,"onUpdate"),l&&t._repeat&&!n&&t.parent&&Ln(t,"onRepeat"),(e>=t._tDur||e<0)&&t.ratio===o&&(o&&ki(t,1),!n&&!je&&(Ln(t,o?"onComplete":"onReverseComplete",!0),t._prom&&t._prom()))}else t._zTime||(t._zTime=e)},xm=function(t,e,n){var i;if(n>e)for(i=t._first;i&&i._start<=n;){if(i.data==="isPause"&&i._start>e)return i;i=i._next}else for(i=t._last;i&&i._start>=n;){if(i.data==="isPause"&&i._start<e)return i;i=i._prev}},ts=function(t,e,n,i){var s=t._repeat,o=Re(e)||0,a=t._tTime/t._tDur;return a&&!i&&(t._time*=o/t._dur),t._dur=o,t._tDur=s?s<0?1e10:Re(o*(s+1)+t._rDelay*s):o,a>0&&!i&&sa(t,t._tTime=t._tDur*a),t.parent&&ra(t),n||mr(t.parent,t),t},Th=function(t){return t instanceof Sn?mr(t):ts(t,t._dur)},Sm={_start:0,endTime:to,totalDuration:to},Xn=function r(t,e,n){var i=t.labels,s=t._recent||Sm,o=t.duration()>=Wn?s.endTime(!1):t._dur,a,l,c;return qe(e)&&(isNaN(e)||e in i)?(l=e.charAt(0),c=e.substr(-1)==="%",a=e.indexOf("="),l==="<"||l===">"?(a>=0&&(e=e.replace(/=/,"")),(l==="<"?s._start:s.endTime(s._repeat>=0))+(parseFloat(e.substr(1))||0)*(c?(a<0?s:n).totalDuration()/100:1)):a<0?(e in i||(i[e]=o),i[e]):(l=parseFloat(e.charAt(a-1)+e.substr(a+1)),c&&n&&(l=l/100*(Qe(n)?n[0]:n).totalDuration()),a>1?r(t,e.substr(0,a-1),n)+l:o+l)):e==null?o:+e},no=function(t,e,n){var i=Mi(e[1]),s=(i?2:1)+(t<2?0:1),o=e[s],a,l;if(i&&(o.duration=e[1]),o.parent=n,t){for(a=o,l=n;l&&!("immediateRender"in a);)a=l.vars.defaults||{},l=vn(l.vars.inherit)&&l.parent;o.immediateRender=vn(a.immediateRender),t<2?o.runBackwards=1:o.startAt=e[s-1]}return new Be(e[0],o,e[s+1])},Hi=function(t,e){return t||t===0?e(t):e},io=function(t,e,n){return n<t?t:n>e?e:n},tn=function(t,e){return!qe(t)||!(e=cm.exec(t))?"":e[1]},Mm=function(t,e,n){return Hi(n,function(i){return io(t,e,i)})},Pl=[].slice,bh=function(t,e){return t&&ui(t)&&"length"in t&&(!e&&!t.length||t.length-1 in t&&ui(t[0]))&&!t.nodeType&&t!==hi},ym=function(t,e,n){return n===void 0&&(n=[]),t.forEach(function(i){var s;return qe(i)&&!e||bh(i,1)?(s=n).push.apply(s,Yn(i)):n.push(i)})||n},Yn=function(t,e,n){return Ae&&!e&&Ae.selector?Ae.selector(t):qe(t)&&!n&&(xl||!ns())?Pl.call((e||Sl).querySelectorAll(t),0):Qe(t)?ym(t,n):bh(t)?Pl.call(t,0):t?[t]:[]},Dl=function(t){return t=Yn(t)[0]||Qs("Invalid scope")||{},function(e){var n=t.current||t.nativeElement||t;return Yn(e,n.querySelectorAll?n:n===t?Qs("Invalid scope")||Sl.createElement("div"):t)}},Ah=function(t){return t.sort(function(){return .5-Math.random()})},wh=function(t){if(Le(t))return t;var e=ui(t)?t:{each:t},n=_r(e.ease),i=e.from||0,s=parseFloat(e.base)||0,o={},a=i>0&&i<1,l=isNaN(i)||a,c=e.axis,u=i,f=i;return qe(i)?u=f={center:.5,edges:.5,end:1}[i]||0:!a&&l&&(u=i[0],f=i[1]),function(h,d,_){var g=(_||e).length,m=o[g],p,y,E,v,C,w,b,R,S;if(!m){if(S=e.grid==="auto"?0:(e.grid||[1,Wn])[1],!S){for(b=-Wn;b<(b=_[S++].getBoundingClientRect().left)&&S<g;);S<g&&S--}for(m=o[g]=[],p=l?Math.min(S,g)*u-.5:i%S,y=S===Wn?0:l?g*f/S-.5:i/S|0,b=0,R=Wn,w=0;w<g;w++)E=w%S-p,v=y-(w/S|0),m[w]=C=c?Math.abs(c==="y"?v:E):rh(E*E+v*v),C>b&&(b=C),C<R&&(R=C);i==="random"&&Ah(m),m.max=b-R,m.min=R,m.v=g=(parseFloat(e.amount)||parseFloat(e.each)*(S>g?g-1:c?c==="y"?g/S:S:Math.max(S,g/S))||0)*(i==="edges"?-1:1),m.b=g<0?s-g:s,m.u=tn(e.amount||e.each)||0,n=n&&g<0?Nm(n):n}return g=(m[h]-m.min)/m.max||0,Re(m.b+(n?n(g):g)*m.v)+m.u}},Ll=function(t){var e=Math.pow(10,((t+"").split(".")[1]||"").length);return function(n){var i=Re(Math.round(parseFloat(n)/t)*t*e);return(i-i%1)/e+(Mi(n)?0:tn(n))}},Rh=function(t,e){var n=Qe(t),i,s;return!n&&ui(t)&&(i=n=t.radius||Wn,t.values?(t=Yn(t.values),(s=!Mi(t[0]))&&(i*=i)):t=Ll(t.increment)),Hi(e,n?Le(t)?function(o){return s=t(o),Math.abs(s-o)<=i?s:o}:function(o){for(var a=parseFloat(s?o.x:o),l=parseFloat(s?o.y:0),c=Wn,u=0,f=t.length,h,d;f--;)s?(h=t[f].x-a,d=t[f].y-l,h=h*h+d*d):h=Math.abs(t[f]-a),h<c&&(c=h,u=f);return u=!i||c<=i?t[u]:o,s||u===o||Mi(o)?u:u+tn(o)}:Ll(t))},Ch=function(t,e,n,i){return Hi(Qe(t)?!e:n===!0?!!(n=0):!i,function(){return Qe(t)?t[~~(Math.random()*t.length)]:(n=n||1e-5)&&(i=n<1?Math.pow(10,(n+"").length-2):1)&&Math.floor(Math.round((t-n/2+Math.random()*(e-t+n*.99))/n)*n*i)/i})},Em=function(){for(var t=arguments.length,e=new Array(t),n=0;n<t;n++)e[n]=arguments[n];return function(i){return e.reduce(function(s,o){return o(s)},i)}},Tm=function(t,e){return function(n){return t(parseFloat(n))+(e||tn(n))}},bm=function(t,e,n){return Dh(t,e,0,1,n)},Ph=function(t,e,n){return Hi(n,function(i){return t[~~e(i)]})},Am=function r(t,e,n){var i=e-t;return Qe(t)?Ph(t,r(0,t.length),e):Hi(n,function(s){return(i+(s-t)%i)%i+t})},wm=function r(t,e,n){var i=e-t,s=i*2;return Qe(t)?Ph(t,r(0,t.length-1),e):Hi(n,function(o){return o=(s+(o-t)%s)%s||0,t+(o>i?s-o:o)})},ro=function(t){return t.replace(om,function(e){var n=e.indexOf("[")+1,i=e.substring(n||7,n?e.indexOf("]"):e.length-1).split(am);return Ch(n?i:+i[0],n?0:+i[1],+i[2]||1e-5)})},Dh=function(t,e,n,i,s){var o=e-t,a=i-n;return Hi(s,function(l){return n+((l-t)/o*a||0)})},Rm=function r(t,e,n,i){var s=isNaN(t+e)?0:function(d){return(1-d)*t+d*e};if(!s){var o=qe(t),a={},l,c,u,f,h;if(n===!0&&(i=1)&&(n=null),o)t={p:t},e={p:e};else if(Qe(t)&&!Qe(e)){for(u=[],f=t.length,h=f-2,c=1;c<f;c++)u.push(r(t[c-1],t[c]));f--,s=function(_){_*=f;var g=Math.min(h,~~_);return u[g](_-g)},n=e}else i||(t=Jr(Qe(t)?[]:{},t));if(!u){for(l in e)Fl.call(a,t,l,"get",e[l]);s=function(_){return Hl(_,a)||(o?t.p:t)}}}return Hi(n,s)},Lh=function(t,e,n){var i=t.labels,s=Wn,o,a,l;for(o in i)a=i[o]-e,a<0==!!n&&a&&s>(a=Math.abs(a))&&(l=o,s=a);return l},Ln=function(t,e,n){var i=t.vars,s=i[e],o=Ae,a=t._ctx,l,c,u;if(s)return l=i[e+"Params"],c=i.callbackScope||t,n&&zi.length&&ta(),a&&(Ae=a),u=l?s.apply(c,l):s.call(c),Ae=o,u},so=function(t){return ki(t),t.scrollTrigger&&t.scrollTrigger.kill(!!je),t.progress()<1&&Ln(t,"onInterrupt"),t},es,Ih=[],Uh=function(t){if(t)if(t=!t.name&&t.default||t,gl()||t.headless){var e=t.name,n=Le(t),i=e&&!n&&t.init?function(){this._props=[]}:t,s={init:to,render:Hl,add:Fl,kill:Xm,modifier:Wm,rawVars:0},o={targetTest:0,get:0,getSetter:kl,aliases:{},register:0};if(ns(),t!==i){if(Pn[e])return;Dn(i,Dn(ea(t,s),o)),Jr(i.prototype,Jr(s,ea(t,o))),Pn[i.prop=e]=i,t.targetTest&&(Qo.push(i),yl[e]=1),e=(e==="css"?"CSS":e.charAt(0).toUpperCase()+e.substr(1))+"Plugin"}hh(e,i),t.register&&t.register(yn,i,Mn)}else Ih.push(t)},xe=255,oo={aqua:[0,xe,xe],lime:[0,xe,0],silver:[192,192,192],black:[0,0,0],maroon:[128,0,0],teal:[0,128,128],blue:[0,0,xe],navy:[0,0,128],white:[xe,xe,xe],olive:[128,128,0],yellow:[xe,xe,0],orange:[xe,165,0],gray:[128,128,128],purple:[128,0,128],green:[0,128,0],red:[xe,0,0],pink:[xe,192,203],cyan:[0,xe,xe],transparent:[xe,xe,xe,0]},Il=function(t,e,n){return t+=t<0?1:t>1?-1:0,(t*6<1?e+(n-e)*t*6:t<.5?n:t*3<2?e+(n-e)*(2/3-t)*6:e)*xe+.5|0},Nh=function(t,e,n){var i=t?Mi(t)?[t>>16,t>>8&xe,t&xe]:0:oo.black,s,o,a,l,c,u,f,h,d,_;if(!i){if(t.substr(-1)===","&&(t=t.substr(0,t.length-1)),oo[t])i=oo[t];else if(t.charAt(0)==="#"){if(t.length<6&&(s=t.charAt(1),o=t.charAt(2),a=t.charAt(3),t="#"+s+s+o+o+a+a+(t.length===5?t.charAt(4)+t.charAt(4):"")),t.length===9)return i=parseInt(t.substr(1,6),16),[i>>16,i>>8&xe,i&xe,parseInt(t.substr(7),16)/255];t=parseInt(t.substr(1),16),i=[t>>16,t>>8&xe,t&xe]}else if(t.substr(0,3)==="hsl"){if(i=_=t.match(oh),!e)l=+i[0]%360/360,c=+i[1]/100,u=+i[2]/100,o=u<=.5?u*(c+1):u+c-u*c,s=u*2-o,i.length>3&&(i[3]*=1),i[0]=Il(l+1/3,s,o),i[1]=Il(l,s,o),i[2]=Il(l-1/3,s,o);else if(~t.indexOf("="))return i=t.match(ah),n&&i.length<4&&(i[3]=1),i}else i=t.match(oh)||oo.transparent;i=i.map(Number)}return e&&!_&&(s=i[0]/xe,o=i[1]/xe,a=i[2]/xe,f=Math.max(s,o,a),h=Math.min(s,o,a),u=(f+h)/2,f===h?l=c=0:(d=f-h,c=u>.5?d/(2-f-h):d/(f+h),l=f===s?(o-a)/d+(o<a?6:0):f===o?(a-s)/d+2:(s-o)/d+4,l*=60),i[0]=~~(l+.5),i[1]=~~(c*100+.5),i[2]=~~(u*100+.5)),n&&i.length<4&&(i[3]=1),i},Fh=function(t){var e=[],n=[],i=-1;return t.split(Vi).forEach(function(s){var o=s.match(Zr)||[];e.push.apply(e,o),n.push(i+=o.length+1)}),e.c=n,e},Oh=function(t,e,n){var i="",s=(t+i).match(Vi),o=e?"hsla(":"rgba(",a=0,l,c,u,f;if(!s)return t;if(s=s.map(function(h){return(h=Nh(h,e,1))&&o+(e?h[0]+","+h[1]+"%,"+h[2]+"%,"+h[3]:h.join(","))+")"}),n&&(u=Fh(t),l=n.c,l.join(i)!==u.c.join(i)))for(c=t.replace(Vi,"1").split(Zr),f=c.length-1;a<f;a++)i+=c[a]+(~l.indexOf(a)?s.shift()||o+"0,0,0,0)":(u.length?u:s.length?s:n).shift());if(!c)for(c=t.split(Vi),f=c.length-1;a<f;a++)i+=c[a]+s[a];return i+c[f]},Vi=(function(){var r="(?:\\b(?:(?:rgb|rgba|hsl|hsla)\\(.+?\\))|\\B#(?:[0-9a-f]{3,4}){1,2}\\b",t;for(t in oo)r+="|"+t+"\\b";return new RegExp(r+")","gi")})(),Cm=/hsl[a]?\(/,Bh=function(t){var e=t.join(" "),n;if(Vi.lastIndex=0,Vi.test(e))return n=Cm.test(e),t[1]=Oh(t[1],n),t[0]=Oh(t[0],n,Fh(t[1])),!0},ao,In=(function(){var r=Date.now,t=500,e=33,n=r(),i=n,s=1e3/240,o=s,a=[],l,c,u,f,h,d,_=function g(m){var p=r()-i,y=m===!0,E,v,C,w;if((p>t||p<0)&&(n+=p-e),i+=p,C=i-n,E=C-o,(E>0||y)&&(w=++f.frame,h=C-f.time*1e3,f.time=C=C/1e3,o+=E+(E>=s?4:s-E),v=1),y||(l=c(g)),v)for(d=0;d<a.length;d++)a[d](C,h,w,m)};return f={time:0,frame:0,tick:function(){_(!0)},deltaRatio:function(m){return h/(1e3/(m||60))},wake:function(){ch&&(!xl&&gl()&&(hi=xl=window,Sl=hi.document||{},Cn.gsap=yn,(hi.gsapVersions||(hi.gsapVersions=[])).push(yn.version),uh(jo||hi.GreenSockGlobals||!hi.gsap&&hi||{}),Ih.forEach(Uh)),u=typeof requestAnimationFrame<"u"&&requestAnimationFrame,l&&f.sleep(),c=u||function(m){return setTimeout(m,o-f.time*1e3+1|0)},ao=1,_(2))},sleep:function(){(u?cancelAnimationFrame:clearTimeout)(l),ao=0,c=to},lagSmoothing:function(m,p){t=m||1/0,e=Math.min(p||33,t)},fps:function(m){s=1e3/(m||240),o=f.time*1e3+s},add:function(m,p,y){var E=p?function(v,C,w,b){m(v,C,w,b),f.remove(E)}:m;return f.remove(m),a[y?"unshift":"push"](E),ns(),E},remove:function(m,p){~(p=a.indexOf(m))&&a.splice(p,1)&&d>=p&&d--},_listeners:a},f})(),ns=function(){return!ao&&In.wake()},se={},Pm=/^[\d.\-M][\d.\-,\s]/,Dm=/["']/g,Lm=function(t){for(var e={},n=t.substr(1,t.length-3).split(":"),i=n[0],s=1,o=n.length,a,l,c;s<o;s++)l=n[s],a=s!==o-1?l.lastIndexOf(","):l.length,c=l.substr(0,a),e[i]=isNaN(c)?c.replace(Dm,"").trim():+c,i=l.substr(a+1).trim();return e},Im=function(t){var e=t.indexOf("(")+1,n=t.indexOf(")"),i=t.indexOf("(",e);return t.substring(e,~i&&i<n?t.indexOf(")",n+1):n)},Um=function(t){var e=(t+"").split("("),n=se[e[0]];return n&&e.length>1&&n.config?n.config.apply(null,~t.indexOf("{")?[Lm(e[1])]:Im(t).split(",").map(_h)):se._CE&&Pm.test(t)?se._CE("",t):n},Nm=function(t){return function(e){return 1-t(1-e)}},_r=function(t,e){return t&&(Le(t)?t:se[t]||Um(t))||e},gr=function(t,e,n,i){n===void 0&&(n=function(l){return 1-e(1-l)}),i===void 0&&(i=function(l){return l<.5?e(l*2)/2:1-e((1-l)*2)/2});var s={easeIn:e,easeOut:n,easeInOut:i},o;return xn(t,function(a){se[a]=Cn[a]=s,se[o=a.toLowerCase()]=n;for(var l in s)se[o+(l==="easeIn"?".in":l==="easeOut"?".out":".inOut")]=se[a+"."+l]=s[l]}),s},zh=function(t){return function(e){return e<.5?(1-t(1-e*2))/2:.5+t((e-.5)*2)/2}},Ul=function r(t,e,n){var i=e>=1?e:1,s=(n||(t?.3:.45))/(e<1?e:1),o=s/ml*(Math.asin(1/i)||0),a=function(u){return u===1?1:i*Math.pow(2,-10*u)*sm((u-o)*s)+1},l=t==="out"?a:t==="in"?function(c){return 1-a(1-c)}:zh(a);return s=ml/s,l.config=function(c,u){return r(t,c,u)},l},Nl=function r(t,e){e===void 0&&(e=1.70158);var n=function(o){return o?--o*o*((e+1)*o+e)+1:0},i=t==="out"?n:t==="in"?function(s){return 1-n(1-s)}:zh(n);return i.config=function(s){return r(t,s)},i};xn("Linear,Quad,Cubic,Quart,Quint,Strong",function(r,t){var e=t<5?t+1:t;gr(r+",Power"+(e-1),t?function(n){return Math.pow(n,e)}:function(n){return n},function(n){return 1-Math.pow(1-n,e)},function(n){return n<.5?Math.pow(n*2,e)/2:1-Math.pow((1-n)*2,e)/2})}),se.Linear.easeNone=se.none=se.Linear.easeIn,gr("Elastic",Ul("in"),Ul("out"),Ul()),(function(r,t){var e=1/t,n=2*e,i=2.5*e,s=function(a){return a<e?r*a*a:a<n?r*Math.pow(a-1.5/t,2)+.75:a<i?r*(a-=2.25/t)*a+.9375:r*Math.pow(a-2.625/t,2)+.984375};gr("Bounce",function(o){return 1-s(1-o)},s)})(7.5625,2.75),gr("Expo",function(r){return Math.pow(2,10*(r-1))*r+r*r*r*r*r*r*(1-r)}),gr("Circ",function(r){return-(rh(1-r*r)-1)}),gr("Sine",function(r){return r===1?1:-rm(r*nm)+1}),gr("Back",Nl("in"),Nl("out"),Nl()),se.SteppedEase=se.steps=Cn.SteppedEase={config:function(t,e){t===void 0&&(t=1);var n=1/t,i=t+(e?0:1),s=e?1:0,o=1-ve;return function(a){return((i*io(0,o,a)|0)+s)*n}}},Js.ease=se["quad.out"],xn("onComplete,onUpdate,onStart,onRepeat,onReverseComplete,onInterrupt",function(r){return bl+=r+","+r+"Params,"});var kh=function(t,e){this.id=im++,t._gsap=this,this.target=t,this.harness=e,this.get=e?e.get:ph,this.set=e?e.getSetter:kl},lo=(function(){function r(e){this.vars=e,this._delay=+e.delay||0,(this._repeat=e.repeat===1/0?-2:e.repeat||0)&&(this._rDelay=e.repeatDelay||0,this._yoyo=!!e.yoyo||!!e.yoyoEase),this._ts=1,ts(this,+e.duration,1,1),this.data=e.data,Ae&&(this._ctx=Ae,Ae.data.push(this)),ao||In.wake()}var t=r.prototype;return t.delay=function(n){return n||n===0?(this.parent&&this.parent.smoothChildTiming&&this.startTime(this._start+n-this._delay),this._delay=n,this):this._delay},t.duration=function(n){return arguments.length?this.totalDuration(this._repeat>0?n+(n+this._rDelay)*this._repeat:n):this.totalDuration()&&this._dur},t.totalDuration=function(n){return arguments.length?(this._dirty=0,ts(this,this._repeat<0?n:(n-this._repeat*this._rDelay)/(this._repeat+1))):this._tDur},t.totalTime=function(n,i){if(ns(),!arguments.length)return this._tTime;var s=this._dp;if(s&&s.smoothChildTiming&&this._ts){for(sa(this,n),!s._dp||s.parent||Mh(s,this);s&&s.parent;)s.parent._time!==s._start+(s._ts>=0?s._tTime/s._ts:(s.totalDuration()-s._tTime)/-s._ts)&&s.totalTime(s._tTime,!0),s=s.parent;!this.parent&&this._dp.autoRemoveChildren&&(this._ts>0&&n<this._tDur||this._ts<0&&n>0||!this._tDur&&!n)&&fi(this._dp,this,this._start-this._delay)}return(this._tTime!==n||!this._dur&&!i||this._initted&&Math.abs(this._zTime)===ve||!this._initted&&this._dur&&n||!n&&!this._initted&&(this.add||this._ptLookup))&&(this._ts||(this._pTime=n),mh(this,n,i)),this},t.time=function(n,i){return arguments.length?this.totalTime(Math.min(this.totalDuration(),n+Sh(this))%(this._dur+this._rDelay)||(n?this._dur:0),i):this._time},t.totalProgress=function(n,i){return arguments.length?this.totalTime(this.totalDuration()*n,i):this.totalDuration()?Math.min(1,this._tTime/this._tDur):this.rawTime()>=0&&this._initted?1:0},t.progress=function(n,i){return arguments.length?this.totalTime(this.duration()*(this._yoyo&&!(this.iteration()&1)?1-n:n)+Sh(this),i):this.duration()?Math.min(1,this._time/this._dur):this.rawTime()>0?1:0},t.iteration=function(n,i){var s=this.duration()+this._rDelay;return arguments.length?this.totalTime(this._time+(n-1)*s,i):this._repeat?Qr(this._tTime,s)+1:1},t.timeScale=function(n,i){if(!arguments.length)return this._rts===-ve?0:this._rts;if(this._rts===n)return this;var s=this.parent&&this._ts?ia(this.parent._time,this):this._tTime;return this._rts=+n||0,this._ts=this._ps||n===-ve?0:this._rts,this.totalTime(io(-Math.abs(this._delay),this.totalDuration(),s),i!==!1),ra(this),mm(this)},t.paused=function(n){return arguments.length?(this._ps!==n&&(this._ps=n,n?(this._pTime=this._tTime||Math.max(-this._delay,this.rawTime()),this._ts=this._act=0):(ns(),this._ts=this._rts,this.totalTime(this.parent&&!this.parent.smoothChildTiming?this.rawTime():this._tTime||this._pTime,this.progress()===1&&Math.abs(this._zTime)!==ve&&(this._tTime-=ve)))),this):this._ps},t.startTime=function(n){if(arguments.length){this._start=Re(n);var i=this.parent||this._dp;return i&&(i._sort||!this.parent)&&fi(i,this,this._start-this._delay),this}return this._start},t.endTime=function(n){return this._start+(vn(n)?this.totalDuration():this.duration())/Math.abs(this._ts||1)},t.rawTime=function(n){var i=this.parent||this._dp;return i?n&&(!this._ts||this._repeat&&this._time&&this.totalProgress()<1)?this._tTime%(this._dur+this._rDelay):this._ts?ia(i.rawTime(n),this):this._tTime:this._tTime},t.revert=function(n){n===void 0&&(n=hm);var i=je;return je=n,wl(this)&&(this.timeline&&this.timeline.revert(n),this.totalTime(-.01,n.suppressEvents)),this.data!=="nested"&&n.kill!==!1&&this.kill(),je=i,this},t.globalTime=function(n){for(var i=this,s=arguments.length?n:i.rawTime();i;)s=i._start+s/(Math.abs(i._ts)||1),i=i._dp;return!this.parent&&this._sat?this._sat.globalTime(n):s},t.repeat=function(n){return arguments.length?(this._repeat=n===1/0?-2:n,Th(this)):this._repeat===-2?1/0:this._repeat},t.repeatDelay=function(n){if(arguments.length){var i=this._time;return this._rDelay=n,Th(this),i?this.time(i):this}return this._rDelay},t.yoyo=function(n){return arguments.length?(this._yoyo=n,this):this._yoyo},t.seek=function(n,i){return this.totalTime(Xn(this,n),vn(i))},t.restart=function(n,i){return this.play().totalTime(n?-this._delay:0,vn(i)),this._dur||(this._zTime=-ve),this},t.play=function(n,i){return n!=null&&this.seek(n,i),this.reversed(!1).paused(!1)},t.reverse=function(n,i){return n!=null&&this.seek(n||this.totalDuration(),i),this.reversed(!0).paused(!1)},t.pause=function(n,i){return n!=null&&this.seek(n,i),this.paused(!0)},t.resume=function(){return this.paused(!1)},t.reversed=function(n){return arguments.length?(!!n!==this.reversed()&&this.timeScale(-this._rts||(n?-ve:0)),this):this._rts<0},t.invalidate=function(){return this._initted=this._act=0,this._zTime=-ve,this},t.isActive=function(){var n=this.parent||this._dp,i=this._start,s;return!!(!n||this._ts&&this._initted&&n.isActive()&&(s=n.rawTime(!0))>=i&&s<this.endTime(!0)-ve)},t.eventCallback=function(n,i,s){var o=this.vars;return arguments.length>1?(i?(o[n]=i,s&&(o[n+"Params"]=s),n==="onUpdate"&&(this._onUpdate=i)):delete o[n],this):o[n]},t.then=function(n){var i=this,s=i._prom;return new Promise(function(o){var a=Le(n)?n:gh,l=function(){var u=i.then;i.then=null,s&&s(),Le(a)&&(a=a(i))&&(a.then||a===i)&&(i.then=u),o(a),i.then=u};i._initted&&i.totalProgress()===1&&i._ts>=0||!i._tTime&&i._ts<0?l():i._prom=l})},t.kill=function(){so(this)},r})();Dn(lo.prototype,{_time:0,_start:0,_end:0,_tTime:0,_tDur:0,_dirty:0,_repeat:0,_yoyo:!1,parent:null,_initted:!1,_rDelay:0,_ts:1,_dp:0,ratio:0,_zTime:-ve,_prom:0,_ps:!1,_rts:1});var Sn=(function(r){ci(t,r);function t(n,i){var s;return n===void 0&&(n={}),s=r.call(this,n)||this,s.labels={},s.smoothChildTiming=!!n.smoothChildTiming,s.autoRemoveChildren=!!n.autoRemoveChildren,s._sort=vn(n.sortChildren),we&&fi(n.parent||we,an(s),i),n.reversed&&s.reverse(),n.paused&&s.paused(!0),n.scrollTrigger&&yh(an(s),n.scrollTrigger),s}var e=t.prototype;return e.to=function(i,s,o){return no(0,arguments,this),this},e.from=function(i,s,o){return no(1,arguments,this),this},e.fromTo=function(i,s,o,a){return no(2,arguments,this),this},e.set=function(i,s,o){return s.duration=0,s.parent=this,eo(s).repeatDelay||(s.repeat=0),s.immediateRender=!!s.immediateRender,new Be(i,s,Xn(this,o),1),this},e.call=function(i,s,o){return fi(this,Be.delayedCall(0,i,s),o)},e.staggerTo=function(i,s,o,a,l,c,u){return o.duration=s,o.stagger=o.stagger||a,o.onComplete=c,o.onCompleteParams=u,o.parent=this,new Be(i,o,Xn(this,l)),this},e.staggerFrom=function(i,s,o,a,l,c,u){return o.runBackwards=1,eo(o).immediateRender=vn(o.immediateRender),this.staggerTo(i,s,o,a,l,c,u)},e.staggerFromTo=function(i,s,o,a,l,c,u,f){return a.startAt=o,eo(a).immediateRender=vn(a.immediateRender),this.staggerTo(i,s,a,l,c,u,f)},e.render=function(i,s,o){var a=this._time,l=this._dirty?this.totalDuration():this._tDur,c=this._dur,u=i<=0?0:Re(i),f=this._zTime<0!=i<0&&(this._initted||!c),h,d,_,g,m,p,y,E,v,C,w,b;if(this!==we&&u>l&&i>=0&&(u=l),u!==this._tTime||o||f){if(a!==this._time&&c&&(u+=this._time-a,i+=this._time-a),h=u,v=this._start,E=this._ts,p=!E,f&&(c||(a=this._zTime),(i||!s)&&(this._zTime=i)),this._repeat){if(w=this._yoyo,m=c+this._rDelay,this._repeat<-1&&i<0)return this.totalTime(m*100+i,s,o);if(h=Re(u%m),u===l?(g=this._repeat,h=c):(C=Re(u/m),g=~~C,g&&g===C&&(h=c,g--),h>c&&(h=c)),C=Qr(this._tTime,m),!a&&this._tTime&&C!==g&&this._tTime-C*m-this._dur<=0&&(C=g),w&&g&1&&(h=c-h,b=1),g!==C&&!this._lock){var R=w&&C&1,S=R===(w&&g&1);if(g<C&&(R=!R),a=R?0:u%c?c:u,this._lock=1,this.render(a||(b?0:Re(g*m)),s,!c)._lock=0,this._tTime=u,!s&&this.parent&&Ln(this,"onRepeat"),this.vars.repeatRefresh&&!b&&(this.invalidate()._lock=1,C=g),a&&a!==this._time||p!==!this._ts||this.vars.onRepeat&&!this.parent&&!this._act)return this;if(c=this._dur,l=this._tDur,S&&(this._lock=2,a=R?c:-1e-4,this.render(a,!0),this.vars.repeatRefresh&&!b&&this.invalidate()),this._lock=0,!this._ts&&!p)return this}}if(this._hasPause&&!this._forcing&&this._lock<2&&(y=xm(this,Re(a),Re(h)),y&&(u-=h-(h=y._start))),this._tTime=u,this._time=h,this._act=!!E,this._initted||(this._onUpdate=this.vars.onUpdate,this._initted=1,this._zTime=i,a=0),!a&&u&&c&&!s&&!C&&(Ln(this,"onStart"),this._tTime!==u))return this;if(h>=a&&i>=0)for(d=this._first;d;){if(_=d._next,(d._act||h>=d._start)&&d._ts&&y!==d){if(d.parent!==this)return this.render(i,s,o);if(d.render(d._ts>0?(h-d._start)*d._ts:(d._dirty?d.totalDuration():d._tDur)+(h-d._start)*d._ts,s,o),h!==this._time||!this._ts&&!p){y=0,_&&(u+=this._zTime=-ve);break}}d=_}else{d=this._last;for(var x=i<0?i:h;d;){if(_=d._prev,(d._act||x<=d._end)&&d._ts&&y!==d){if(d.parent!==this)return this.render(i,s,o);if(d.render(d._ts>0?(x-d._start)*d._ts:(d._dirty?d.totalDuration():d._tDur)+(x-d._start)*d._ts,s,o||je&&wl(d)),h!==this._time||!this._ts&&!p){y=0,_&&(u+=this._zTime=x?-ve:ve);break}}d=_}}if(y&&!s&&(this.pause(),y.render(h>=a?0:-ve)._zTime=h>=a?1:-1,this._ts))return this._start=v,ra(this),this.render(i,s,o);this._onUpdate&&!s&&Ln(this,"onUpdate",!0),(u===l&&this._tTime>=this.totalDuration()||!u&&a)&&(v===this._start||Math.abs(E)!==Math.abs(this._ts))&&(this._lock||((i||!c)&&(u===l&&this._ts>0||!u&&this._ts<0)&&ki(this,1),!s&&!(i<0&&!a)&&(u||a||!l)&&(Ln(this,u===l&&i>=0?"onComplete":"onReverseComplete",!0),this._prom&&!(u<l&&this.timeScale()>0)&&this._prom())))}return this},e.add=function(i,s){var o=this;if(Mi(s)||(s=Xn(this,s,i)),!(i instanceof lo)){if(Qe(i))return i.forEach(function(a){return o.add(a,s)}),this;if(qe(i))return this.addLabel(i,s);if(Le(i))i=Be.delayedCall(0,i);else return this}return this!==i?fi(this,i,s):this},e.getChildren=function(i,s,o,a){i===void 0&&(i=!0),s===void 0&&(s=!0),o===void 0&&(o=!0),a===void 0&&(a=-Wn);for(var l=[],c=this._first;c;)c._start>=a&&(c instanceof Be?s&&l.push(c):(o&&l.push(c),i&&l.push.apply(l,c.getChildren(!0,s,o)))),c=c._next;return l},e.getById=function(i){for(var s=this.getChildren(1,1,1),o=s.length;o--;)if(s[o].vars.id===i)return s[o]},e.remove=function(i){return qe(i)?this.removeLabel(i):Le(i)?this.killTweensOf(i):(i.parent===this&&na(this,i),i===this._recent&&(this._recent=this._last),mr(this))},e.totalTime=function(i,s){return arguments.length?(this._forcing=1,!this._dp&&this._ts&&(this._start=Re(In.time-(this._ts>0?i/this._ts:(this.totalDuration()-i)/-this._ts))),r.prototype.totalTime.call(this,i,s),this._forcing=0,this):this._tTime},e.addLabel=function(i,s){return this.labels[i]=Xn(this,s),this},e.removeLabel=function(i){return delete this.labels[i],this},e.addPause=function(i,s,o){var a=Be.delayedCall(0,s||to,o);return a.data="isPause",this._hasPause=1,fi(this,a,Xn(this,i))},e.removePause=function(i){var s=this._first;for(i=Xn(this,i);s;)s._start===i&&s.data==="isPause"&&ki(s),s=s._next},e.killTweensOf=function(i,s,o){for(var a=this.getTweensOf(i,o),l=a.length;l--;)Gi!==a[l]&&a[l].kill(i,s);return this},e.getTweensOf=function(i,s){for(var o=[],a=Yn(i),l=this._first,c=Mi(s),u;l;)l instanceof Be?fm(l._targets,a)&&(c?(!Gi||l._initted&&l._ts)&&l.globalTime(0)<=s&&l.globalTime(l.totalDuration())>s:!s||l.isActive())&&o.push(l):(u=l.getTweensOf(a,s)).length&&o.push.apply(o,u),l=l._next;return o},e.tweenTo=function(i,s){s=s||{};var o=this,a=Xn(o,i),l=s,c=l.startAt,u=l.onStart,f=l.onStartParams,h=l.immediateRender,d,_=Be.to(o,Dn({ease:s.ease||"none",lazy:!1,immediateRender:!1,time:a,overwrite:"auto",duration:s.duration||Math.abs((a-(c&&"time"in c?c.time:o._time))/o.timeScale())||ve,onStart:function(){if(o.pause(),!d){var m=s.duration||Math.abs((a-(c&&"time"in c?c.time:o._time))/o.timeScale());_._dur!==m&&ts(_,m,0,1).render(_._time,!0,!0),d=1}u&&u.apply(_,f||[])}},s));return h?_.render(0):_},e.tweenFromTo=function(i,s,o){return this.tweenTo(s,Dn({startAt:{time:Xn(this,i)}},o))},e.recent=function(){return this._recent},e.nextLabel=function(i){return i===void 0&&(i=this._time),Lh(this,Xn(this,i))},e.previousLabel=function(i){return i===void 0&&(i=this._time),Lh(this,Xn(this,i),1)},e.currentLabel=function(i){return arguments.length?this.seek(i,!0):this.previousLabel(this._time+ve)},e.shiftChildren=function(i,s,o){o===void 0&&(o=0);var a=this._first,l=this.labels,c;for(i=Re(i);a;)a._start>=o&&(a._start+=i,a._end+=i),a=a._next;if(s)for(c in l)l[c]>=o&&(l[c]+=i);return mr(this)},e.invalidate=function(i){var s=this._first;for(this._lock=0;s;)s.invalidate(i),s=s._next;return r.prototype.invalidate.call(this,i)},e.clear=function(i){i===void 0&&(i=!0);for(var s=this._first,o;s;)o=s._next,this.remove(s),s=o;return this._dp&&(this._time=this._tTime=this._pTime=0),i&&(this.labels={}),mr(this)},e.totalDuration=function(i){var s=0,o=this,a=o._last,l=Wn,c,u,f;if(arguments.length)return o.timeScale((o._repeat<0?o.duration():o.totalDuration())/(o.reversed()?-i:i));if(o._dirty){for(f=o.parent;a;)c=a._prev,a._dirty&&a.totalDuration(),u=a._start,u>l&&o._sort&&a._ts&&!o._lock?(o._lock=1,fi(o,a,u-a._delay,1)._lock=0):l=u,u<0&&a._ts&&(s-=u,(!f&&!o._dp||f&&f.smoothChildTiming)&&(o._start+=Re(u/o._ts),o._time-=u,o._tTime-=u),o.shiftChildren(-u,!1,-1/0),l=0),a._end>s&&a._ts&&(s=a._end),a=c;ts(o,o===we&&o._time>s?o._time:s,1,1),o._dirty=0}return o._tDur},t.updateRoot=function(i){if(we._ts&&(mh(we,ia(i,we)),fh=In.frame),In.frame>=dh){dh+=Ye.autoSleep||120;var s=we._first;if((!s||!s._ts)&&Ye.autoSleep&&In._listeners.length<2){for(;s&&!s._ts;)s=s._next;s||In.sleep()}}},t})(lo);Dn(Sn.prototype,{_lock:0,_hasPause:0,_forcing:0});var Fm=function(t,e,n,i,s,o,a){var l=new Mn(this._pt,t,e,0,1,Yh,null,s),c=0,u=0,f,h,d,_,g,m,p,y;for(l.b=n,l.e=i,n+="",i+="",(p=~i.indexOf("random("))&&(i=ro(i)),o&&(y=[n,i],o(y,t,e),n=y[0],i=y[1]),h=n.match(vl)||[];f=vl.exec(i);)_=f[0],g=i.substring(c,f.index),d?d=(d+1)%5:g.substr(-5)==="rgba("&&(d=1),_!==h[u++]&&(m=parseFloat(h[u-1])||0,l._pt={_next:l._pt,p:g||u===1?g:",",s:m,c:_.charAt(1)==="="?jr(m,_)-m:parseFloat(_)-m,m:d&&d<4?Math.round:0},c=vl.lastIndex);return l.c=c<i.length?i.substring(c,i.length):"",l.fp=a,(lh.test(i)||p)&&(l.e=0),this._pt=l,l},Fl=function(t,e,n,i,s,o,a,l,c,u){Le(i)&&(i=i(s||0,t,o));var f=t[e],h=n!=="get"?n:Le(f)?c?t[e.indexOf("set")||!Le(t["get"+e.substr(3)])?e:"get"+e.substr(3)](c):t[e]():f,d=Le(f)?c?Hm:Wh:zl,_;if(qe(i)&&(~i.indexOf("random(")&&(i=ro(i)),i.charAt(1)==="="&&(_=jr(h,i)+(tn(h)||0),(_||_===0)&&(i=_))),!u||h!==i||Ol)return!isNaN(h*i)&&i!==""?(_=new Mn(this._pt,t,e,+h||0,i-(h||0),typeof f=="boolean"?Gm:Xh,0,d),c&&(_.fp=c),a&&_.modifier(a,this,t),this._pt=_):(!f&&!(e in t)&&Ml(e,i),Fm.call(this,t,e,h,i,d,l||Ye.stringFilter,c))},Om=function(t,e,n,i,s){if(Le(t)&&(t=co(t,s,e,n,i)),!ui(t)||t.style&&t.nodeType||Qe(t)||sh(t))return qe(t)?co(t,s,e,n,i):t;var o={},a;for(a in t)o[a]=co(t[a],s,e,n,i);return o},Hh=function(t,e,n,i,s,o){var a,l,c,u;if(Pn[t]&&(a=new Pn[t]).init(s,a.rawVars?e[t]:Om(e[t],i,s,o,n),n,i,o)!==!1&&(n._pt=l=new Mn(n._pt,s,t,0,1,a.render,a,0,a.priority),n!==es))for(c=n._ptLookup[n._targets.indexOf(s)],u=a._props.length;u--;)c[a._props[u]]=l;return a},Gi,Ol,Bl=function r(t,e,n){var i=t.vars,s=i.ease,o=i.startAt,a=i.immediateRender,l=i.lazy,c=i.onUpdate,u=i.runBackwards,f=i.yoyoEase,h=i.keyframes,d=i.autoRevert,_=t._dur,g=t._startAt,m=t._targets,p=t.parent,y=p&&p.data==="nested"?p.vars.targets:m,E=t._overwrite==="auto"&&!pl,v=t.timeline,C=i.easeReverse||f,w,b,R,S,x,L,F,B,G,j,Y,$,H;if(v&&(!h||!s)&&(s="none"),t._ease=_r(s,Js.ease),t._rEase=C&&(_r(C)||t._ease),t._from=!v&&!!i.runBackwards,t._from&&(t.ratio=1),!v||h&&!i.stagger){if(B=m[0]?pr(m[0]).harness:0,$=B&&i[B.prop],w=ea(i,yl),g&&(g._zTime<0&&g.progress(1),e<0&&u&&a&&!d?g.render(-1,!0):g.revert(u&&_?Jo:um),g._lazy=0),o){if(ki(t._startAt=Be.set(m,Dn({data:"isStart",overwrite:!1,parent:p,immediateRender:!0,lazy:!g&&vn(l),startAt:null,delay:0,onUpdate:c&&function(){return Ln(t,"onUpdate")},stagger:0},o))),t._startAt._dp=0,t._startAt._sat=t,e<0&&(je||!a&&!d)&&t._startAt.revert(Jo),a&&_&&e<=0&&n<=0){e&&(t._zTime=e);return}}else if(u&&_&&!g){if(e&&(a=!1),R=Dn({overwrite:!1,data:"isFromStart",lazy:a&&!g&&vn(l),immediateRender:a,stagger:0,parent:p},w),$&&(R[B.prop]=$),ki(t._startAt=Be.set(m,R)),t._startAt._dp=0,t._startAt._sat=t,e<0&&(je?t._startAt.revert(Jo):t._startAt.render(-1,!0)),t._zTime=e,!a)r(t._startAt,ve,ve);else if(!e)return}for(t._pt=t._ptCache=0,l=_&&vn(l)||l&&!_,b=0;b<m.length;b++){if(x=m[b],F=x._gsap||Al(m)[b]._gsap,t._ptLookup[b]=j={},El[F.id]&&zi.length&&ta(),Y=y===m?b:y.indexOf(x),B&&(G=new B).init(x,$||w,t,Y,y)!==!1&&(t._pt=S=new Mn(t._pt,x,G.name,0,1,G.render,G,0,G.priority),G._props.forEach(function(it){j[it]=S}),G.priority&&(L=1)),!B||$)for(R in w)Pn[R]&&(G=Hh(R,w,t,Y,x,y))?G.priority&&(L=1):j[R]=S=Fl.call(t,x,R,"get",w[R],Y,y,0,i.stringFilter);t._op&&t._op[b]&&t.kill(x,t._op[b]),E&&t._pt&&(Gi=t,we.killTweensOf(x,j,t.globalTime(e)),H=!t.parent,Gi=0),t._pt&&l&&(El[F.id]=1)}L&&qh(t),t._onInit&&t._onInit(t)}t._onUpdate=c,t._initted=(!t._op||t._pt)&&!H,h&&e<=0&&v.render(Wn,!0,!0)},Bm=function(t,e,n,i,s,o,a,l){var c=(t._pt&&t._ptCache||(t._ptCache={}))[e],u,f,h,d;if(!c)for(c=t._ptCache[e]=[],h=t._ptLookup,d=t._targets.length;d--;){if(u=h[d][e],u&&u.d&&u.d._pt)for(u=u.d._pt;u&&u.p!==e&&u.fp!==e;)u=u._next;if(!u)return Ol=1,t.vars[e]="+=0",Bl(t,a),Ol=0,l?Qs(e+" not eligible for reset. Try splitting into individual properties"):1;c.push(u)}for(d=c.length;d--;)f=c[d],u=f._pt||f,u.s=(i||i===0)&&!s?i:u.s+(i||0)+o*u.c,u.c=n-u.s,f.e&&(f.e=Ue(n)+tn(f.e)),f.b&&(f.b=u.s+tn(f.b))},zm=function(t,e){var n=t[0]?pr(t[0]).harness:0,i=n&&n.aliases,s,o,a,l;if(!i)return e;s=Jr({},e);for(o in i)if(o in s)for(l=i[o].split(","),a=l.length;a--;)s[l[a]]=s[o];return s},km=function(t,e,n,i){var s=e.ease||i||"power1.inOut",o,a;if(Qe(e))a=n[t]||(n[t]=[]),e.forEach(function(l,c){return a.push({t:c/(e.length-1)*100,v:l,e:s})});else for(o in e)a=n[o]||(n[o]=[]),o==="ease"||a.push({t:parseFloat(t),v:e[o],e:s})},co=function(t,e,n,i,s){return Le(t)?t.call(e,n,i,s):qe(t)&&~t.indexOf("random(")?ro(t):t},Vh=bl+"repeat,repeatDelay,yoyo,repeatRefresh,yoyoEase,easeReverse,autoRevert",Gh={};xn(Vh+",id,stagger,delay,duration,paused,scrollTrigger",function(r){return Gh[r]=1});var Be=(function(r){ci(t,r);function t(n,i,s,o){var a;typeof i=="number"&&(s.duration=i,i=s,s=null),a=r.call(this,o?i:eo(i))||this;var l=a.vars,c=l.duration,u=l.delay,f=l.immediateRender,h=l.stagger,d=l.overwrite,_=l.keyframes,g=l.defaults,m=l.scrollTrigger,p=i.parent||we,y=(Qe(n)||sh(n)?Mi(n[0]):"length"in i)?[n]:Yn(n),E,v,C,w,b,R,S,x;if(a._targets=y.length?Al(y):Qs("GSAP target "+n+" not found. https://gsap.com",!Ye.nullTargetWarn)||[],a._ptLookup=[],a._overwrite=d,_||h||Zo(c)||Zo(u)){i=a.vars;var L=i.easeReverse||i.yoyoEase;if(E=a.timeline=new Sn({data:"nested",defaults:g||{},targets:p&&p.data==="nested"?p.vars.targets:y}),E.kill(),E.parent=E._dp=an(a),E._start=0,h||Zo(c)||Zo(u)){if(w=y.length,S=h&&wh(h),ui(h))for(b in h)~Vh.indexOf(b)&&(x||(x={}),x[b]=h[b]);for(v=0;v<w;v++)C=ea(i,Gh),C.stagger=0,L&&(C.easeReverse=L),x&&Jr(C,x),R=y[v],C.duration=+co(c,an(a),v,R,y),C.delay=(+co(u,an(a),v,R,y)||0)-a._delay,!h&&w===1&&C.delay&&(a._delay=u=C.delay,a._start+=u,C.delay=0),E.to(R,C,S?S(v,R,y):0),E._ease=se.none;E.duration()?c=u=0:a.timeline=0}else if(_){eo(Dn(E.vars.defaults,{ease:"none"})),E._ease=_r(_.ease||i.ease||"none");var F=0,B,G,j;if(Qe(_))_.forEach(function(Y){return E.to(y,Y,">")}),E.duration();else{C={};for(b in _)b==="ease"||b==="easeEach"||km(b,_[b],C,_.easeEach);for(b in C)for(B=C[b].sort(function(Y,$){return Y.t-$.t}),F=0,v=0;v<B.length;v++)G=B[v],j={ease:G.e,duration:(G.t-(v?B[v-1].t:0))/100*c},j[b]=G.v,E.to(y,j,F),F+=j.duration;E.duration()<c&&E.to({},{duration:c-E.duration()})}}c||a.duration(c=E.duration())}else a.timeline=0;return d===!0&&!pl&&(Gi=an(a),we.killTweensOf(y),Gi=0),fi(p,an(a),s),i.reversed&&a.reverse(),i.paused&&a.paused(!0),(f||!c&&!_&&a._start===Re(p._time)&&vn(f)&&_m(an(a))&&p.data!=="nested")&&(a._tTime=-ve,a.render(Math.max(0,-u)||0)),m&&yh(an(a),m),a}var e=t.prototype;return e.render=function(i,s,o){var a=this._time,l=this._tDur,c=this._dur,u=i<0,f=i>l-ve&&!u?l:i<ve?0:i,h,d,_,g,m,p,y,E;if(!c)vm(this,i,s,o);else if(f!==this._tTime||!i||o||!this._initted&&this._tTime||this._startAt&&this._zTime<0!==u||this._lazy){if(h=f,E=this.timeline,this._repeat){if(g=c+this._rDelay,this._repeat<-1&&u)return this.totalTime(g*100+i,s,o);if(h=Re(f%g),f===l?(_=this._repeat,h=c):(m=Re(f/g),_=~~m,_&&_===m?(h=c,_--):h>c&&(h=c)),p=this._yoyo&&_&1,p&&(h=c-h),m=Qr(this._tTime,g),h===a&&!o&&this._initted&&_===m)return this._tTime=f,this;_!==m&&this.vars.repeatRefresh&&!p&&!this._lock&&h!==g&&this._initted&&(this._lock=o=1,this.render(Re(g*_),!0).invalidate()._lock=0)}if(!this._initted){if(Eh(this,u?i:h,o,s,f))return this._tTime=0,this;if(a!==this._time&&!(o&&this.vars.repeatRefresh&&_!==m))return this;if(c!==this._dur)return this.render(i,s,o)}if(this._rEase){var v=h<a;if(v!==this._inv){var C=v?a:c-a;this._inv=v,this._from&&(this.ratio=1-this.ratio),this._invRatio=this.ratio,this._invTime=a,this._invRecip=C?(v?-1:1)/C:0,this._invScale=v?-this.ratio:1-this.ratio,this._invEase=v?this._rEase:this._ease}this.ratio=y=this._invRatio+this._invScale*this._invEase((h-this._invTime)*this._invRecip)}else this.ratio=y=this._ease(h/c);if(this._from&&(this.ratio=y=1-y),this._tTime=f,this._time=h,!this._act&&this._ts&&(this._act=1,this._lazy=0),!a&&f&&!s&&!m&&(Ln(this,"onStart"),this._tTime!==f))return this;for(d=this._pt;d;)d.r(y,d.d),d=d._next;E&&E.render(i<0?i:E._dur*E._ease(h/this._dur),s,o)||this._startAt&&(this._zTime=i),this._onUpdate&&!s&&(u&&Rl(this,i,s,o),Ln(this,"onUpdate")),this._repeat&&_!==m&&this.vars.onRepeat&&!s&&this.parent&&Ln(this,"onRepeat"),(f===this._tDur||!f)&&this._tTime===f&&(u&&!this._onUpdate&&Rl(this,i,!0,!0),(i||!c)&&(f===this._tDur&&this._ts>0||!f&&this._ts<0)&&ki(this,1),!s&&!(u&&!a)&&(f||a||p)&&(Ln(this,f===l?"onComplete":"onReverseComplete",!0),this._prom&&!(f<l&&this.timeScale()>0)&&this._prom()))}return this},e.targets=function(){return this._targets},e.invalidate=function(i){return(!i||!this.vars.runBackwards)&&(this._startAt=0),this._pt=this._op=this._onUpdate=this._lazy=this.ratio=0,this._ptLookup=[],this.timeline&&this.timeline.invalidate(i),r.prototype.invalidate.call(this,i)},e.resetTo=function(i,s,o,a,l){ao||In.wake(),this._ts||this.play();var c=Math.min(this._dur,(this._dp._time-this._start)*this._ts),u;return this._initted||Bl(this,c),u=this._ease(c/this._dur),Bm(this,i,s,o,a,u,c,l)?this.resetTo(i,s,o,a,1):(sa(this,0),this.parent||xh(this._dp,this,"_first","_last",this._dp._sort?"_start":0),this.render(0))},e.kill=function(i,s){if(s===void 0&&(s="all"),!i&&(!s||s==="all"))return this._lazy=this._pt=0,this.parent?so(this):this.scrollTrigger&&this.scrollTrigger.kill(!!je),this;if(this.timeline){var o=this.timeline.totalDuration();return this.timeline.killTweensOf(i,s,Gi&&Gi.vars.overwrite!==!0)._first||so(this),this.parent&&o!==this.timeline.totalDuration()&&ts(this,this._dur*this.timeline._tDur/o,0,1),this}var a=this._targets,l=i?Yn(i):a,c=this._ptLookup,u=this._pt,f,h,d,_,g,m,p;if((!s||s==="all")&&pm(a,l))return s==="all"&&(this._pt=0),so(this);for(f=this._op=this._op||[],s!=="all"&&(qe(s)&&(g={},xn(s,function(y){return g[y]=1}),s=g),s=zm(a,s)),p=a.length;p--;)if(~l.indexOf(a[p])){h=c[p],s==="all"?(f[p]=s,_=h,d={}):(d=f[p]=f[p]||{},_=s);for(g in _)m=h&&h[g],m&&((!("kill"in m.d)||m.d.kill(g)===!0)&&na(this,m,"_pt"),delete h[g]),d!=="all"&&(d[g]=1)}return this._initted&&!this._pt&&u&&so(this),this},t.to=function(i,s){return new t(i,s,arguments[2])},t.from=function(i,s){return no(1,arguments)},t.delayedCall=function(i,s,o,a){return new t(s,0,{immediateRender:!1,lazy:!1,overwrite:!1,delay:i,onComplete:s,onReverseComplete:s,onCompleteParams:o,onReverseCompleteParams:o,callbackScope:a})},t.fromTo=function(i,s,o){return no(2,arguments)},t.set=function(i,s){return s.duration=0,s.repeatDelay||(s.repeat=0),new t(i,s)},t.killTweensOf=function(i,s,o){return we.killTweensOf(i,s,o)},t})(lo);Dn(Be.prototype,{_targets:[],_lazy:0,_startAt:0,_op:0,_onInit:0}),xn("staggerTo,staggerFrom,staggerFromTo",function(r){Be[r]=function(){var t=new Sn,e=Pl.call(arguments,0);return e.splice(r==="staggerFromTo"?5:4,0,0),t[r].apply(t,e)}});var zl=function(t,e,n){return t[e]=n},Wh=function(t,e,n){return t[e](n)},Hm=function(t,e,n,i){return t[e](i.fp,n)},Vm=function(t,e,n){return t.setAttribute(e,n)},kl=function(t,e){return Le(t[e])?Wh:_l(t[e])&&t.setAttribute?Vm:zl},Xh=function(t,e){return e.set(e.t,e.p,Math.round((e.s+e.c*t)*1e6)/1e6,e)},Gm=function(t,e){return e.set(e.t,e.p,!!(e.s+e.c*t),e)},Yh=function(t,e){var n=e._pt,i="";if(!t&&e.b)i=e.b;else if(t===1&&e.e)i=e.e;else{for(;n;)i=n.p+(n.m?n.m(n.s+n.c*t):Math.round((n.s+n.c*t)*1e4)/1e4)+i,n=n._next;i+=e.c}e.set(e.t,e.p,i,e)},Hl=function(t,e){for(var n=e._pt;n;)n.r(t,n.d),n=n._next},Wm=function(t,e,n,i){for(var s=this._pt,o;s;)o=s._next,s.p===i&&s.modifier(t,e,n),s=o},Xm=function(t){for(var e=this._pt,n,i;e;)i=e._next,e.p===t&&!e.op||e.op===t?na(this,e,"_pt"):e.dep||(n=1),e=i;return!n},Ym=function(t,e,n,i){i.mSet(t,e,i.m.call(i.tween,n,i.mt),i)},qh=function(t){for(var e=t._pt,n,i,s,o;e;){for(n=e._next,i=s;i&&i.pr>e.pr;)i=i._next;(e._prev=i?i._prev:o)?e._prev._next=e:s=e,(e._next=i)?i._prev=e:o=e,e=n}t._pt=s},Mn=(function(){function r(e,n,i,s,o,a,l,c,u){this.t=n,this.s=s,this.c=o,this.p=i,this.r=a||Xh,this.d=l||this,this.set=c||zl,this.pr=u||0,this._next=e,e&&(e._prev=this)}var t=r.prototype;return t.modifier=function(n,i,s){this.mSet=this.mSet||this.set,this.set=Ym,this.m=n,this.mt=s,this.tween=i},r})();xn(bl+"parent,duration,ease,delay,overwrite,runBackwards,startAt,yoyo,immediateRender,repeat,repeatDelay,data,paused,reversed,lazy,callbackScope,stringFilter,id,yoyoEase,stagger,inherit,repeatRefresh,keyframes,autoRevert,scrollTrigger,easeReverse",function(r){return yl[r]=1}),Cn.TweenMax=Cn.TweenLite=Be,Cn.TimelineLite=Cn.TimelineMax=Sn,we=new Sn({sortChildren:!1,defaults:Js,autoRemoveChildren:!0,id:"root",smoothChildTiming:!0}),Ye.stringFilter=Bh;var vr=[],oa={},qm=[],$h=0,$m=0,Vl=function(t){return(oa[t]||qm).map(function(e){return e()})},Gl=function(){var t=Date.now(),e=[];t-$h>2&&(Vl("matchMediaInit"),vr.forEach(function(n){var i=n.queries,s=n.conditions,o,a,l,c;for(a in i)o=hi.matchMedia(i[a]).matches,o&&(l=1),o!==s[a]&&(s[a]=o,c=1);c&&(n.revert(),l&&e.push(n))}),Vl("matchMediaRevert"),e.forEach(function(n){return n.onMatch(n,function(i){return n.add(null,i)})}),$h=t,Vl("matchMedia"))},Kh=(function(){function r(e,n){this.selector=n&&Dl(n),this.data=[],this._r=[],this.isReverted=!1,this.id=$m++,e&&this.add(e)}var t=r.prototype;return t.add=function(n,i,s){Le(n)&&(s=i,i=n,n=Le);var o=this,a=function(){var c=Ae,u=o.selector,f;return c&&c!==o&&c.data.push(o),s&&(o.selector=Dl(s)),Ae=o,f=i.apply(o,arguments),Le(f)&&o._r.push(f),Ae=c,o.selector=u,o.isReverted=!1,f};return o.last=a,n===Le?a(o,function(l){return o.add(null,l)}):n?o[n]=a:a},t.ignore=function(n){var i=Ae;Ae=null,n(this),Ae=i},t.getTweens=function(){var n=[];return this.data.forEach(function(i){return i instanceof r?n.push.apply(n,i.getTweens()):i instanceof Be&&!(i.parent&&i.parent.data==="nested")&&n.push(i)}),n},t.clear=function(){this._r.length=this.data.length=0},t.kill=function(n,i){var s=this;if(n?(function(){for(var a=s.getTweens(),l=s.data.length,c;l--;)c=s.data[l],c.data==="isFlip"&&(c.revert(),c.getChildren(!0,!0,!1).forEach(function(u){return a.splice(a.indexOf(u),1)}));for(a.map(function(u){return{g:u._dur||u._delay||u._sat&&!u._sat.vars.immediateRender?u.globalTime(0):-1/0,t:u}}).sort(function(u,f){return f.g-u.g||-1/0}).forEach(function(u){return u.t.revert(n)}),l=s.data.length;l--;)c=s.data[l],c instanceof Sn?c.data!=="nested"&&(c.scrollTrigger&&c.scrollTrigger.revert(),c.kill()):!(c instanceof Be)&&c.revert&&c.revert(n);s._r.forEach(function(u){return u(n,s)}),s.isReverted=!0})():this.data.forEach(function(a){return a.kill&&a.kill()}),this.clear(),i)for(var o=vr.length;o--;)vr[o].id===this.id&&vr.splice(o,1)},t.revert=function(n){this.kill(n||{})},r})(),Km=(function(){function r(e){this.contexts=[],this.scope=e,Ae&&Ae.data.push(this)}var t=r.prototype;return t.add=function(n,i,s){ui(n)||(n={matches:n});var o=new Kh(0,s||this.scope),a=o.conditions={},l,c,u;Ae&&!o.selector&&(o.selector=Ae.selector),this.contexts.push(o),i=o.add("onMatch",i),o.queries=n;for(c in n)c==="all"?u=1:(l=hi.matchMedia(n[c]),l&&(vr.indexOf(o)<0&&vr.push(o),(a[c]=l.matches)&&(u=1),l.addListener?l.addListener(Gl):l.addEventListener("change",Gl)));return u&&i(o,function(f){return o.add(null,f)}),this},t.revert=function(n){this.kill(n||{})},t.kill=function(n){this.contexts.forEach(function(i){return i.kill(n,!0)})},r})(),aa={registerPlugin:function(){for(var t=arguments.length,e=new Array(t),n=0;n<t;n++)e[n]=arguments[n];e.forEach(function(i){return Uh(i)})},timeline:function(t){return new Sn(t)},getTweensOf:function(t,e){return we.getTweensOf(t,e)},getProperty:function(t,e,n,i){qe(t)&&(t=Yn(t)[0]);var s=pr(t||{}).get,o=n?gh:_h;return n==="native"&&(n=""),t&&(e?o((Pn[e]&&Pn[e].get||s)(t,e,n,i)):function(a,l,c){return o((Pn[a]&&Pn[a].get||s)(t,a,l,c))})},quickSetter:function(t,e,n){if(t=Yn(t),t.length>1){var i=t.map(function(u){return yn.quickSetter(u,e,n)}),s=i.length;return function(u){for(var f=s;f--;)i[f](u)}}t=t[0]||{};var o=Pn[e],a=pr(t),l=a.harness&&(a.harness.aliases||{})[e]||e,c=o?function(u){var f=new o;es._pt=0,f.init(t,n?u+n:u,es,0,[t]),f.render(1,f),es._pt&&Hl(1,es)}:a.set(t,l);return o?c:function(u){return c(t,l,n?u+n:u,a,1)}},quickTo:function(t,e,n){var i,s=yn.to(t,Dn((i={},i[e]="+=0.1",i.paused=!0,i.stagger=0,i),n||{})),o=function(l,c,u){return s.resetTo(e,l,c,u)};return o.tween=s,o},isTweening:function(t){return we.getTweensOf(t,!0).length>0},defaults:function(t){return t&&t.ease&&(t.ease=_r(t.ease,Js.ease)),vh(Js,t||{})},config:function(t){return vh(Ye,t||{})},registerEffect:function(t){var e=t.name,n=t.effect,i=t.plugins,s=t.defaults,o=t.extendTimeline;(i||"").split(",").forEach(function(a){return a&&!Pn[a]&&!Cn[a]&&Qs(e+" effect requires "+a+" plugin.")}),Tl[e]=function(a,l,c){return n(Yn(a),Dn(l||{},s),c)},o&&(Sn.prototype[e]=function(a,l,c){return this.add(Tl[e](a,ui(l)?l:(c=l)&&{},this),c)})},registerEase:function(t,e){se[t]=_r(e)},parseEase:function(t,e){return arguments.length?_r(t,e):se},getById:function(t){return we.getById(t)},exportRoot:function(t,e){t===void 0&&(t={});var n=new Sn(t),i,s;for(n.smoothChildTiming=vn(t.smoothChildTiming),we.remove(n),n._dp=0,n._time=n._tTime=we._time,i=we._first;i;)s=i._next,(e||!(!i._dur&&i instanceof Be&&i.vars.onComplete===i._targets[0]))&&fi(n,i,i._start-i._delay),i=s;return fi(we,n,0),n},context:function(t,e){return t?new Kh(t,e):Ae},matchMedia:function(t){return new Km(t)},matchMediaRefresh:function(){return vr.forEach(function(t){var e=t.conditions,n,i;for(i in e)e[i]&&(e[i]=!1,n=1);n&&t.revert()})||Gl()},addEventListener:function(t,e){var n=oa[t]||(oa[t]=[]);~n.indexOf(e)||n.push(e)},removeEventListener:function(t,e){var n=oa[t],i=n&&n.indexOf(e);i>=0&&n.splice(i,1)},utils:{wrap:Am,wrapYoyo:wm,distribute:wh,random:Ch,snap:Rh,normalize:bm,getUnit:tn,clamp:Mm,splitColor:Nh,toArray:Yn,selector:Dl,mapRange:Dh,pipe:Em,unitize:Tm,interpolate:Rm,shuffle:Ah},install:uh,effects:Tl,ticker:In,updateRoot:Sn.updateRoot,plugins:Pn,globalTimeline:we,core:{PropTween:Mn,globals:hh,Tween:Be,Timeline:Sn,Animation:lo,getCache:pr,_removeLinkedListItem:na,reverting:function(){return je},context:function(t){return t&&Ae&&(Ae.data.push(t),t._ctx=Ae),Ae},suppressOverwrites:function(t){return pl=t}}};xn("to,from,fromTo,delayedCall,set,killTweensOf",function(r){return aa[r]=Be[r]}),In.add(Sn.updateRoot),es=aa.to({},{duration:0});var Zm=function(t,e){for(var n=t._pt;n&&n.p!==e&&n.op!==e&&n.fp!==e;)n=n._next;return n},jm=function(t,e){var n=t._targets,i,s,o;for(i in e)for(s=n.length;s--;)o=t._ptLookup[s][i],o&&(o=o.d)&&(o._pt&&(o=Zm(o,i)),o&&o.modifier&&o.modifier(e[i],t,n[s],i))},Wl=function(t,e){return{name:t,headless:1,rawVars:1,init:function(i,s,o){o._onInit=function(a){var l,c;if(qe(s)&&(l={},xn(s,function(u){return l[u]=1}),s=l),e){l={};for(c in s)l[c]=e(s[c]);s=l}jm(a,s)}}}},yn=aa.registerPlugin({name:"attr",init:function(t,e,n,i,s){var o,a,l;this.tween=n;for(o in e)l=t.getAttribute(o)||"",a=this.add(t,"setAttribute",(l||0)+"",e[o],i,s,0,0,o),a.op=o,a.b=l,this._props.push(o)},render:function(t,e){for(var n=e._pt;n;)je?n.set(n.t,n.p,n.b,n):n.r(t,n.d),n=n._next}},{name:"endArray",headless:1,init:function(t,e){for(var n=e.length;n--;)this.add(t,n,t[n]||0,e[n],0,0,0,0,0,1)}},Wl("roundProps",Ll),Wl("modifiers"),Wl("snap",Rh))||aa;Be.version=Sn.version=yn.version="3.15.0",ch=1,gl()&&ns(),se.Power0,se.Power1,se.Power2,se.Power3,se.Power4,se.Linear,se.Quad,se.Cubic,se.Quart,se.Quint,se.Strong,se.Elastic,se.Back,se.SteppedEase,se.Bounce,se.Sine,se.Expo,se.Circ;/*!
 * CSSPlugin 3.15.0
 * https://gsap.com
 *
 * Copyright 2008-2026, GreenSock. All rights reserved.
 * Subject to the terms at https://gsap.com/standard-license
 * @author: Jack Doyle, jack@greensock.com
*/var Zh,Wi,is,Xl,xr,jh,Yl,Jm=function(){return typeof window<"u"},yi={},Sr=180/Math.PI,rs=Math.PI/180,ss=Math.atan2,Jh=1e8,ql=/([A-Z])/g,Qm=/(left|right|width|margin|padding|x)/i,t_=/[\s,\(]\S/,di={autoAlpha:"opacity,visibility",scale:"scaleX,scaleY",alpha:"opacity"},$l=function(t,e){return e.set(e.t,e.p,Math.round((e.s+e.c*t)*1e4)/1e4+e.u,e)},e_=function(t,e){return e.set(e.t,e.p,t===1?e.e:Math.round((e.s+e.c*t)*1e4)/1e4+e.u,e)},n_=function(t,e){return e.set(e.t,e.p,t?Math.round((e.s+e.c*t)*1e4)/1e4+e.u:e.b,e)},i_=function(t,e){return e.set(e.t,e.p,t===1?e.e:t?Math.round((e.s+e.c*t)*1e4)/1e4+e.u:e.b,e)},r_=function(t,e){var n=e.s+e.c*t;e.set(e.t,e.p,~~(n+(n<0?-.5:.5))+e.u,e)},Qh=function(t,e){return e.set(e.t,e.p,t?e.e:e.b,e)},tf=function(t,e){return e.set(e.t,e.p,t!==1?e.b:e.e,e)},s_=function(t,e,n){return t.style[e]=n},o_=function(t,e,n){return t.style.setProperty(e,n)},a_=function(t,e,n){return t._gsap[e]=n},l_=function(t,e,n){return t._gsap.scaleX=t._gsap.scaleY=n},c_=function(t,e,n,i,s){var o=t._gsap;o.scaleX=o.scaleY=n,o.renderTransform(s,o)},u_=function(t,e,n,i,s){var o=t._gsap;o[e]=n,o.renderTransform(s,o)},Ce="transform",En=Ce+"Origin",h_=function r(t,e){var n=this,i=this.target,s=i.style,o=i._gsap;if(t in yi&&s){if(this.tfm=this.tfm||{},t!=="transform")t=di[t]||t,~t.indexOf(",")?t.split(",").forEach(function(a){return n.tfm[a]=Ei(i,a)}):this.tfm[t]=o.x?o[t]:Ei(i,t),t===En&&(this.tfm.zOrigin=o.zOrigin);else return di.transform.split(",").forEach(function(a){return r.call(n,a,e)});if(this.props.indexOf(Ce)>=0)return;o.svg&&(this.svgo=i.getAttribute("data-svg-origin"),this.props.push(En,e,"")),t=Ce}(s||e)&&this.props.push(t,e,s[t])},ef=function(t){t.translate&&(t.removeProperty("translate"),t.removeProperty("scale"),t.removeProperty("rotate"))},f_=function(){var t=this.props,e=this.target,n=e.style,i=e._gsap,s,o;for(s=0;s<t.length;s+=3)t[s+1]?t[s+1]===2?e[t[s]](t[s+2]):e[t[s]]=t[s+2]:t[s+2]?n[t[s]]=t[s+2]:n.removeProperty(t[s].substr(0,2)==="--"?t[s]:t[s].replace(ql,"-$1").toLowerCase());if(this.tfm){for(o in this.tfm)i[o]=this.tfm[o];i.svg&&(i.renderTransform(),e.setAttribute("data-svg-origin",this.svgo||"")),s=Yl(),(!s||!s.isStart)&&!n[Ce]&&(ef(n),i.zOrigin&&n[En]&&(n[En]+=" "+i.zOrigin+"px",i.zOrigin=0,i.renderTransform()),i.uncache=1)}},nf=function(t,e){var n={target:t,props:[],revert:f_,save:h_};return t._gsap||yn.core.getCache(t),e&&t.style&&t.nodeType&&e.split(",").forEach(function(i){return n.save(i)}),n},rf,Kl=function(t,e){var n=Wi.createElementNS?Wi.createElementNS((e||"http://www.w3.org/1999/xhtml").replace(/^https/,"http"),t):Wi.createElement(t);return n&&n.style?n:Wi.createElement(t)},Un=function r(t,e,n){var i=getComputedStyle(t);return i[e]||i.getPropertyValue(e.replace(ql,"-$1").toLowerCase())||i.getPropertyValue(e)||!n&&r(t,os(e)||e,1)||""},sf="O,Moz,ms,Ms,Webkit".split(","),os=function(t,e,n){var i=e||xr,s=i.style,o=5;if(t in s&&!n)return t;for(t=t.charAt(0).toUpperCase()+t.substr(1);o--&&!(sf[o]+t in s););return o<0?null:(o===3?"ms":o>=0?sf[o]:"")+t},Zl=function(){Jm()&&window.document&&(Zh=window,Wi=Zh.document,is=Wi.documentElement,xr=Kl("div")||{style:{}},Kl("div"),Ce=os(Ce),En=Ce+"Origin",xr.style.cssText="border-width:0;line-height:0;position:absolute;padding:0",rf=!!os("perspective"),Yl=yn.core.reverting,Xl=1)},of=function(t){var e=t.ownerSVGElement,n=Kl("svg",e&&e.getAttribute("xmlns")||"http://www.w3.org/2000/svg"),i=t.cloneNode(!0),s;i.style.display="block",n.appendChild(i),is.appendChild(n);try{s=i.getBBox()}catch{}return n.removeChild(i),is.removeChild(n),s},af=function(t,e){for(var n=e.length;n--;)if(t.hasAttribute(e[n]))return t.getAttribute(e[n])},lf=function(t){var e,n;try{e=t.getBBox()}catch{e=of(t),n=1}return e&&(e.width||e.height)||n||(e=of(t)),e&&!e.width&&!e.x&&!e.y?{x:+af(t,["x","cx","x1"])||0,y:+af(t,["y","cy","y1"])||0,width:0,height:0}:e},cf=function(t){return!!(t.getCTM&&(!t.parentNode||t.ownerSVGElement)&&lf(t))},Xi=function(t,e){if(e){var n=t.style,i;e in yi&&e!==En&&(e=Ce),n.removeProperty?(i=e.substr(0,2),(i==="ms"||e.substr(0,6)==="webkit")&&(e="-"+e),n.removeProperty(i==="--"?e:e.replace(ql,"-$1").toLowerCase())):n.removeAttribute(e)}},Yi=function(t,e,n,i,s,o){var a=new Mn(t._pt,e,n,0,1,o?tf:Qh);return t._pt=a,a.b=i,a.e=s,t._props.push(n),a},uf={deg:1,rad:1,turn:1},d_={grid:1,flex:1},qi=function r(t,e,n,i){var s=parseFloat(n)||0,o=(n+"").trim().substr((s+"").length)||"px",a=xr.style,l=Qm.test(e),c=t.tagName.toLowerCase()==="svg",u=(c?"client":"offset")+(l?"Width":"Height"),f=100,h=i==="px",d=i==="%",_,g,m,p;if(i===o||!s||uf[i]||uf[o])return s;if(o!=="px"&&!h&&(s=r(t,e,n,"px")),p=t.getCTM&&cf(t),(d||o==="%")&&(yi[e]||~e.indexOf("adius")))return _=p?t.getBBox()[l?"width":"height"]:t[u],Ue(d?s/_*f:s/100*_);if(a[l?"width":"height"]=f+(h?o:i),g=i!=="rem"&&~e.indexOf("adius")||i==="em"&&t.appendChild&&!c?t:t.parentNode,p&&(g=(t.ownerSVGElement||{}).parentNode),(!g||g===Wi||!g.appendChild)&&(g=Wi.body),m=g._gsap,m&&d&&m.width&&l&&m.time===In.time&&!m.uncache)return Ue(s/m.width*f);if(d&&(e==="height"||e==="width")){var y=t.style[e];t.style[e]=f+i,_=t[u],y?t.style[e]=y:Xi(t,e)}else(d||o==="%")&&!d_[Un(g,"display")]&&(a.position=Un(t,"position")),g===t&&(a.position="static"),g.appendChild(xr),_=xr[u],g.removeChild(xr),a.position="absolute";return l&&d&&(m=pr(g),m.time=In.time,m.width=g[u]),Ue(h?_*s/f:_&&s?f/_*s:0)},Ei=function(t,e,n,i){var s;return Xl||Zl(),e in di&&e!=="transform"&&(e=di[e],~e.indexOf(",")&&(e=e.split(",")[0])),yi[e]&&e!=="transform"?(s=ho(t,i),s=e!=="transformOrigin"?s[e]:s.svg?s.origin:ca(Un(t,En))+" "+s.zOrigin+"px"):(s=t.style[e],(!s||s==="auto"||i||~(s+"").indexOf("calc("))&&(s=la[e]&&la[e](t,e,n)||Un(t,e)||ph(t,e)||(e==="opacity"?1:0))),n&&!~(s+"").trim().indexOf(" ")?qi(t,e,s,n)+n:s},p_=function(t,e,n,i){if(!n||n==="none"){var s=os(e,t,1),o=s&&Un(t,s,1);o&&o!==n?(e=s,n=o):e==="borderColor"&&(n=Un(t,"borderTopColor"))}var a=new Mn(this._pt,t.style,e,0,1,Yh),l=0,c=0,u,f,h,d,_,g,m,p,y,E,v,C;if(a.b=n,a.e=i,n+="",i+="",i.substring(0,6)==="var(--"&&(i=Un(t,i.substring(4,i.indexOf(")")))),i==="auto"&&(g=t.style[e],t.style[e]=i,i=Un(t,e)||i,g?t.style[e]=g:Xi(t,e)),u=[n,i],Bh(u),n=u[0],i=u[1],h=n.match(Zr)||[],C=i.match(Zr)||[],C.length){for(;f=Zr.exec(i);)m=f[0],y=i.substring(l,f.index),_?_=(_+1)%5:(y.substr(-5)==="rgba("||y.substr(-5)==="hsla(")&&(_=1),m!==(g=h[c++]||"")&&(d=parseFloat(g)||0,v=g.substr((d+"").length),m.charAt(1)==="="&&(m=jr(d,m)+v),p=parseFloat(m),E=m.substr((p+"").length),l=Zr.lastIndex-E.length,E||(E=E||Ye.units[e]||v,l===i.length&&(i+=E,a.e+=E)),v!==E&&(d=qi(t,e,g,E)||0),a._pt={_next:a._pt,p:y||c===1?y:",",s:d,c:p-d,m:_&&_<4||e==="zIndex"?Math.round:0});a.c=l<i.length?i.substring(l,i.length):""}else a.r=e==="display"&&i==="none"?tf:Qh;return lh.test(i)&&(a.e=0),this._pt=a,a},hf={top:"0%",bottom:"100%",left:"0%",right:"100%",center:"50%"},m_=function(t){var e=t.split(" "),n=e[0],i=e[1]||"50%";return(n==="top"||n==="bottom"||i==="left"||i==="right")&&(t=n,n=i,i=t),e[0]=hf[n]||n,e[1]=hf[i]||i,e.join(" ")},__=function(t,e){if(e.tween&&e.tween._time===e.tween._dur){var n=e.t,i=n.style,s=e.u,o=n._gsap,a,l,c;if(s==="all"||s===!0)i.cssText="",l=1;else for(s=s.split(","),c=s.length;--c>-1;)a=s[c],yi[a]&&(l=1,a=a==="transformOrigin"?En:Ce),Xi(n,a);l&&(Xi(n,Ce),o&&(o.svg&&n.removeAttribute("transform"),i.scale=i.rotate=i.translate="none",ho(n,1),o.uncache=1,ef(i)))}},la={clearProps:function(t,e,n,i,s){if(s.data!=="isFromStart"){var o=t._pt=new Mn(t._pt,e,n,0,0,__);return o.u=i,o.pr=-10,o.tween=s,t._props.push(n),1}}},uo=[1,0,0,1,0,0],ff={},df=function(t){return t==="matrix(1, 0, 0, 1, 0, 0)"||t==="none"||!t},pf=function(t){var e=Un(t,Ce);return df(e)?uo:e.substr(7).match(ah).map(Ue)},jl=function(t,e){var n=t._gsap||pr(t),i=t.style,s=pf(t),o,a,l,c;return n.svg&&t.getAttribute("transform")?(l=t.transform.baseVal.consolidate().matrix,s=[l.a,l.b,l.c,l.d,l.e,l.f],s.join(",")==="1,0,0,1,0,0"?uo:s):(s===uo&&!t.offsetParent&&t!==is&&!n.svg&&(l=i.display,i.display="block",o=t.parentNode,(!o||!t.offsetParent&&!t.getBoundingClientRect().width)&&(c=1,a=t.nextElementSibling,is.appendChild(t)),s=pf(t),l?i.display=l:Xi(t,"display"),c&&(a?o.insertBefore(t,a):o?o.appendChild(t):is.removeChild(t))),e&&s.length>6?[s[0],s[1],s[4],s[5],s[12],s[13]]:s)},Jl=function(t,e,n,i,s,o){var a=t._gsap,l=s||jl(t,!0),c=a.xOrigin||0,u=a.yOrigin||0,f=a.xOffset||0,h=a.yOffset||0,d=l[0],_=l[1],g=l[2],m=l[3],p=l[4],y=l[5],E=e.split(" "),v=parseFloat(E[0])||0,C=parseFloat(E[1])||0,w,b,R,S;n?l!==uo&&(b=d*m-_*g)&&(R=v*(m/b)+C*(-g/b)+(g*y-m*p)/b,S=v*(-_/b)+C*(d/b)-(d*y-_*p)/b,v=R,C=S):(w=lf(t),v=w.x+(~E[0].indexOf("%")?v/100*w.width:v),C=w.y+(~(E[1]||E[0]).indexOf("%")?C/100*w.height:C)),i||i!==!1&&a.smooth?(p=v-c,y=C-u,a.xOffset=f+(p*d+y*g)-p,a.yOffset=h+(p*_+y*m)-y):a.xOffset=a.yOffset=0,a.xOrigin=v,a.yOrigin=C,a.smooth=!!i,a.origin=e,a.originIsAbsolute=!!n,t.style[En]="0px 0px",o&&(Yi(o,a,"xOrigin",c,v),Yi(o,a,"yOrigin",u,C),Yi(o,a,"xOffset",f,a.xOffset),Yi(o,a,"yOffset",h,a.yOffset)),t.setAttribute("data-svg-origin",v+" "+C)},ho=function(t,e){var n=t._gsap||new kh(t);if("x"in n&&!e&&!n.uncache)return n;var i=t.style,s=n.scaleX<0,o="px",a="deg",l=getComputedStyle(t),c=Un(t,En)||"0",u,f,h,d,_,g,m,p,y,E,v,C,w,b,R,S,x,L,F,B,G,j,Y,$,H,it,P,ut,Ut,$t,J,nt;return u=f=h=g=m=p=y=E=v=0,d=_=1,n.svg=!!(t.getCTM&&cf(t)),l.translate&&((l.translate!=="none"||l.scale!=="none"||l.rotate!=="none")&&(i[Ce]=(l.translate!=="none"?"translate3d("+(l.translate+" 0 0").split(" ").slice(0,3).join(", ")+") ":"")+(l.rotate!=="none"?"rotate("+l.rotate+") ":"")+(l.scale!=="none"?"scale("+l.scale.split(" ").join(",")+") ":"")+(l[Ce]!=="none"?l[Ce]:"")),i.scale=i.rotate=i.translate="none"),b=jl(t,n.svg),n.svg&&(n.uncache?(H=t.getBBox(),c=n.xOrigin-H.x+"px "+(n.yOrigin-H.y)+"px",$=""):$=!e&&t.getAttribute("data-svg-origin"),Jl(t,$||c,!!$||n.originIsAbsolute,n.smooth!==!1,b)),C=n.xOrigin||0,w=n.yOrigin||0,b!==uo&&(L=b[0],F=b[1],B=b[2],G=b[3],u=j=b[4],f=Y=b[5],b.length===6?(d=Math.sqrt(L*L+F*F),_=Math.sqrt(G*G+B*B),g=L||F?ss(F,L)*Sr:0,y=B||G?ss(B,G)*Sr+g:0,y&&(_*=Math.abs(Math.cos(y*rs))),n.svg&&(u-=C-(C*L+w*B),f-=w-(C*F+w*G))):(nt=b[6],$t=b[7],P=b[8],ut=b[9],Ut=b[10],J=b[11],u=b[12],f=b[13],h=b[14],R=ss(nt,Ut),m=R*Sr,R&&(S=Math.cos(-R),x=Math.sin(-R),$=j*S+P*x,H=Y*S+ut*x,it=nt*S+Ut*x,P=j*-x+P*S,ut=Y*-x+ut*S,Ut=nt*-x+Ut*S,J=$t*-x+J*S,j=$,Y=H,nt=it),R=ss(-B,Ut),p=R*Sr,R&&(S=Math.cos(-R),x=Math.sin(-R),$=L*S-P*x,H=F*S-ut*x,it=B*S-Ut*x,J=G*x+J*S,L=$,F=H,B=it),R=ss(F,L),g=R*Sr,R&&(S=Math.cos(R),x=Math.sin(R),$=L*S+F*x,H=j*S+Y*x,F=F*S-L*x,Y=Y*S-j*x,L=$,j=H),m&&Math.abs(m)+Math.abs(g)>359.9&&(m=g=0,p=180-p),d=Ue(Math.sqrt(L*L+F*F+B*B)),_=Ue(Math.sqrt(Y*Y+nt*nt)),R=ss(j,Y),y=Math.abs(R)>2e-4?R*Sr:0,v=J?1/(J<0?-J:J):0),n.svg&&($=t.getAttribute("transform"),n.forceCSS=t.setAttribute("transform","")||!df(Un(t,Ce)),$&&t.setAttribute("transform",$))),Math.abs(y)>90&&Math.abs(y)<270&&(s?(d*=-1,y+=g<=0?180:-180,g+=g<=0?180:-180):(_*=-1,y+=y<=0?180:-180)),e=e||n.uncache,n.x=u-((n.xPercent=u&&(!e&&n.xPercent||(Math.round(t.offsetWidth/2)===Math.round(-u)?-50:0)))?t.offsetWidth*n.xPercent/100:0)+o,n.y=f-((n.yPercent=f&&(!e&&n.yPercent||(Math.round(t.offsetHeight/2)===Math.round(-f)?-50:0)))?t.offsetHeight*n.yPercent/100:0)+o,n.z=h+o,n.scaleX=Ue(d),n.scaleY=Ue(_),n.rotation=Ue(g)+a,n.rotationX=Ue(m)+a,n.rotationY=Ue(p)+a,n.skewX=y+a,n.skewY=E+a,n.transformPerspective=v+o,(n.zOrigin=parseFloat(c.split(" ")[2])||!e&&n.zOrigin||0)&&(i[En]=ca(c)),n.xOffset=n.yOffset=0,n.force3D=Ye.force3D,n.renderTransform=n.svg?v_:rf?mf:g_,n.uncache=0,n},ca=function(t){return(t=t.split(" "))[0]+" "+t[1]},Ql=function(t,e,n){var i=tn(e);return Ue(parseFloat(e)+parseFloat(qi(t,"x",n+"px",i)))+i},g_=function(t,e){e.z="0px",e.rotationY=e.rotationX="0deg",e.force3D=0,mf(t,e)},Mr="0deg",fo="0px",yr=") ",mf=function(t,e){var n=e||this,i=n.xPercent,s=n.yPercent,o=n.x,a=n.y,l=n.z,c=n.rotation,u=n.rotationY,f=n.rotationX,h=n.skewX,d=n.skewY,_=n.scaleX,g=n.scaleY,m=n.transformPerspective,p=n.force3D,y=n.target,E=n.zOrigin,v="",C=p==="auto"&&t&&t!==1||p===!0;if(E&&(f!==Mr||u!==Mr)){var w=parseFloat(u)*rs,b=Math.sin(w),R=Math.cos(w),S;w=parseFloat(f)*rs,S=Math.cos(w),o=Ql(y,o,b*S*-E),a=Ql(y,a,-Math.sin(w)*-E),l=Ql(y,l,R*S*-E+E)}m!==fo&&(v+="perspective("+m+yr),(i||s)&&(v+="translate("+i+"%, "+s+"%) "),(C||o!==fo||a!==fo||l!==fo)&&(v+=l!==fo||C?"translate3d("+o+", "+a+", "+l+") ":"translate("+o+", "+a+yr),c!==Mr&&(v+="rotate("+c+yr),u!==Mr&&(v+="rotateY("+u+yr),f!==Mr&&(v+="rotateX("+f+yr),(h!==Mr||d!==Mr)&&(v+="skew("+h+", "+d+yr),(_!==1||g!==1)&&(v+="scale("+_+", "+g+yr),y.style[Ce]=v||"translate(0, 0)"},v_=function(t,e){var n=e||this,i=n.xPercent,s=n.yPercent,o=n.x,a=n.y,l=n.rotation,c=n.skewX,u=n.skewY,f=n.scaleX,h=n.scaleY,d=n.target,_=n.xOrigin,g=n.yOrigin,m=n.xOffset,p=n.yOffset,y=n.forceCSS,E=parseFloat(o),v=parseFloat(a),C,w,b,R,S;l=parseFloat(l),c=parseFloat(c),u=parseFloat(u),u&&(u=parseFloat(u),c+=u,l+=u),l||c?(l*=rs,c*=rs,C=Math.cos(l)*f,w=Math.sin(l)*f,b=Math.sin(l-c)*-h,R=Math.cos(l-c)*h,c&&(u*=rs,S=Math.tan(c-u),S=Math.sqrt(1+S*S),b*=S,R*=S,u&&(S=Math.tan(u),S=Math.sqrt(1+S*S),C*=S,w*=S)),C=Ue(C),w=Ue(w),b=Ue(b),R=Ue(R)):(C=f,R=h,w=b=0),(E&&!~(o+"").indexOf("px")||v&&!~(a+"").indexOf("px"))&&(E=qi(d,"x",o,"px"),v=qi(d,"y",a,"px")),(_||g||m||p)&&(E=Ue(E+_-(_*C+g*b)+m),v=Ue(v+g-(_*w+g*R)+p)),(i||s)&&(S=d.getBBox(),E=Ue(E+i/100*S.width),v=Ue(v+s/100*S.height)),S="matrix("+C+","+w+","+b+","+R+","+E+","+v+")",d.setAttribute("transform",S),y&&(d.style[Ce]=S)},x_=function(t,e,n,i,s){var o=360,a=qe(s),l=parseFloat(s)*(a&&~s.indexOf("rad")?Sr:1),c=l-i,u=i+c+"deg",f,h;return a&&(f=s.split("_")[1],f==="short"&&(c%=o,c!==c%(o/2)&&(c+=c<0?o:-o)),f==="cw"&&c<0?c=(c+o*Jh)%o-~~(c/o)*o:f==="ccw"&&c>0&&(c=(c-o*Jh)%o-~~(c/o)*o)),t._pt=h=new Mn(t._pt,e,n,i,c,e_),h.e=u,h.u="deg",t._props.push(n),h},_f=function(t,e){for(var n in e)t[n]=e[n];return t},S_=function(t,e,n){var i=_f({},n._gsap),s="perspective,force3D,transformOrigin,svgOrigin",o=n.style,a,l,c,u,f,h,d,_;i.svg?(c=n.getAttribute("transform"),n.setAttribute("transform",""),o[Ce]=e,a=ho(n,1),Xi(n,Ce),n.setAttribute("transform",c)):(c=getComputedStyle(n)[Ce],o[Ce]=e,a=ho(n,1),o[Ce]=c);for(l in yi)c=i[l],u=a[l],c!==u&&s.indexOf(l)<0&&(d=tn(c),_=tn(u),f=d!==_?qi(n,l,c,_):parseFloat(c),h=parseFloat(u),t._pt=new Mn(t._pt,a,l,f,h-f,$l),t._pt.u=_||0,t._props.push(l));_f(a,i)};xn("padding,margin,Width,Radius",function(r,t){var e="Top",n="Right",i="Bottom",s="Left",o=(t<3?[e,n,i,s]:[e+s,e+n,i+n,i+s]).map(function(a){return t<2?r+a:"border"+a+r});la[t>1?"border"+r:r]=function(a,l,c,u,f){var h,d;if(arguments.length<4)return h=o.map(function(_){return Ei(a,_,c)}),d=h.join(" "),d.split(h[0]).length===5?h[0]:d;h=(u+"").split(" "),d={},o.forEach(function(_,g){return d[_]=h[g]=h[g]||h[(g-1)/2|0]}),a.init(l,d,f)}});var gf={name:"css",register:Zl,targetTest:function(t){return t.style&&t.nodeType},init:function(t,e,n,i,s){var o=this._props,a=t.style,l=n.vars.startAt,c,u,f,h,d,_,g,m,p,y,E,v,C,w,b,R,S;Xl||Zl(),this.styles=this.styles||nf(t),R=this.styles.props,this.tween=n;for(g in e)if(g!=="autoRound"&&(u=e[g],!(Pn[g]&&Hh(g,e,n,i,t,s)))){if(d=typeof u,_=la[g],d==="function"&&(u=u.call(n,i,t,s),d=typeof u),d==="string"&&~u.indexOf("random(")&&(u=ro(u)),_)_(this,t,g,u,n)&&(b=1);else if(g.substr(0,2)==="--")c=(getComputedStyle(t).getPropertyValue(g)+"").trim(),u+="",Vi.lastIndex=0,Vi.test(c)||(m=tn(c),p=tn(u),p?m!==p&&(c=qi(t,g,c,p)+p):m&&(u+=m)),this.add(a,"setProperty",c,u,i,s,0,0,g),o.push(g),R.push(g,0,a[g]);else if(d!=="undefined"){if(l&&g in l?(c=typeof l[g]=="function"?l[g].call(n,i,t,s):l[g],qe(c)&&~c.indexOf("random(")&&(c=ro(c)),tn(c+"")||c==="auto"||(c+=Ye.units[g]||tn(Ei(t,g))||""),(c+"").charAt(1)==="="&&(c=Ei(t,g))):c=Ei(t,g),h=parseFloat(c),y=d==="string"&&u.charAt(1)==="="&&u.substr(0,2),y&&(u=u.substr(2)),f=parseFloat(u),g in di&&(g==="autoAlpha"&&(h===1&&Ei(t,"visibility")==="hidden"&&f&&(h=0),R.push("visibility",0,a.visibility),Yi(this,a,"visibility",h?"inherit":"hidden",f?"inherit":"hidden",!f)),g!=="scale"&&g!=="transform"&&(g=di[g],~g.indexOf(",")&&(g=g.split(",")[0]))),E=g in yi,E){if(this.styles.save(g),S=u,d==="string"&&u.substring(0,6)==="var(--"){if(u=Un(t,u.substring(4,u.indexOf(")"))),u.substring(0,5)==="calc("){var x=t.style.perspective;t.style.perspective=u,u=Un(t,"perspective"),x?t.style.perspective=x:Xi(t,"perspective")}f=parseFloat(u)}if(v||(C=t._gsap,C.renderTransform&&!e.parseTransform||ho(t,e.parseTransform),w=e.smoothOrigin!==!1&&C.smooth,v=this._pt=new Mn(this._pt,a,Ce,0,1,C.renderTransform,C,0,-1),v.dep=1),g==="scale")this._pt=new Mn(this._pt,C,"scaleY",C.scaleY,(y?jr(C.scaleY,y+f):f)-C.scaleY||0,$l),this._pt.u=0,o.push("scaleY",g),g+="X";else if(g==="transformOrigin"){R.push(En,0,a[En]),u=m_(u),C.svg?Jl(t,u,0,w,0,this):(p=parseFloat(u.split(" ")[2])||0,p!==C.zOrigin&&Yi(this,C,"zOrigin",C.zOrigin,p),Yi(this,a,g,ca(c),ca(u)));continue}else if(g==="svgOrigin"){Jl(t,u,1,w,0,this);continue}else if(g in ff){x_(this,C,g,h,y?jr(h,y+u):u);continue}else if(g==="smoothOrigin"){Yi(this,C,"smooth",C.smooth,u);continue}else if(g==="force3D"){C[g]=u;continue}else if(g==="transform"){S_(this,u,t);continue}}else g in a||(g=os(g)||g);if(E||(f||f===0)&&(h||h===0)&&!t_.test(u)&&g in a)m=(c+"").substr((h+"").length),f||(f=0),p=tn(u)||(g in Ye.units?Ye.units[g]:m),m!==p&&(h=qi(t,g,c,p)),this._pt=new Mn(this._pt,E?C:a,g,h,(y?jr(h,y+f):f)-h,!E&&(p==="px"||g==="zIndex")&&e.autoRound!==!1?r_:$l),this._pt.u=p||0,E&&S!==u?(this._pt.b=c,this._pt.e=S,this._pt.r=i_):m!==p&&p!=="%"&&(this._pt.b=c,this._pt.r=n_);else if(g in a)p_.call(this,t,g,c,y?y+u:u);else if(g in t)this.add(t,g,c||t[g],y?y+u:u,i,s);else if(g!=="parseTransform"){Ml(g,u);continue}E||(g in a?R.push(g,0,a[g]):typeof t[g]=="function"?R.push(g,2,t[g]()):R.push(g,1,c||t[g])),o.push(g)}}b&&qh(this)},render:function(t,e){if(e.tween._time||!Yl())for(var n=e._pt;n;)n.r(t,n.d),n=n._next;else e.styles.revert()},get:Ei,aliases:di,getSetter:function(t,e,n){var i=di[e];return i&&i.indexOf(",")<0&&(e=i),e in yi&&e!==En&&(t._gsap.x||Ei(t,"x"))?n&&jh===n?e==="scale"?l_:a_:(jh=n||{})&&(e==="scale"?c_:u_):t.style&&!_l(t.style[e])?s_:~e.indexOf("-")?o_:kl(t,e)},core:{_removeProperty:Xi,_getMatrix:jl}};yn.utils.checkPrefix=os,yn.core.getStyleSaver=nf,(function(r,t,e,n){var i=xn(r+","+t+","+e,function(s){yi[s]=1});xn(t,function(s){Ye.units[s]="deg",ff[s]=1}),di[i[13]]=r+","+t,xn(n,function(s){var o=s.split(":");di[o[1]]=i[o[0]]})})("x,y,z,scale,scaleX,scaleY,xPercent,yPercent","rotation,rotationX,rotationY,skewX,skewY","transform,transformOrigin,svgOrigin,force3D,smoothOrigin,transformPerspective","0:translateX,1:translateY,2:translateZ,8:rotate,8:rotationZ,8:rotateZ,9:rotateX,10:rotateY"),xn("x,y,z,top,right,bottom,left,width,height,fontSize,padding,margin,perspective",function(r){Ye.units[r]="px"}),yn.registerPlugin(gf);var as=yn.registerPlugin(gf)||yn;as.core.Tween;function M_(r,t){for(var e=0;e<t.length;e++){var n=t[e];n.enumerable=n.enumerable||!1,n.configurable=!0,"value"in n&&(n.writable=!0),Object.defineProperty(r,n.key,n)}}function y_(r,t,e){return t&&M_(r.prototype,t),r}/*!
 * Observer 3.15.0
 * https://gsap.com
 *
 * @license Copyright 2008-2026, GreenSock. All rights reserved.
 * Subject to the terms at https://gsap.com/standard-license
 * @author: Jack Doyle, jack@greensock.com
*/var Je,ua,Nn,$i,Ki,ls,vf,Er,cs,xf,Ti,ti,Sf,Mf=function(){return Je||typeof window<"u"&&(Je=window.gsap)&&Je.registerPlugin&&Je},yf=1,us=[],ee=[],pi=[],po=Date.now,tc=function(t,e){return e},E_=function(){var t=cs.core,e=t.bridge||{},n=t._scrollers,i=t._proxies;n.push.apply(n,ee),i.push.apply(i,pi),ee=n,pi=i,tc=function(o,a){return e[o](a)}},Zi=function(t,e){return~pi.indexOf(t)&&pi[pi.indexOf(t)+1][e]},mo=function(t){return!!~xf.indexOf(t)},ln=function(t,e,n,i,s){return t.addEventListener(e,n,{passive:i!==!1,capture:!!s})},cn=function(t,e,n,i){return t.removeEventListener(e,n,!!i)},ha="scrollLeft",fa="scrollTop",ec=function(){return Ti&&Ti.isPressed||ee.cache++},da=function(t,e){var n=function i(s){if(s||s===0){yf&&(Nn.history.scrollRestoration="manual");var o=Ti&&Ti.isPressed;s=i.v=Math.round(s)||(Ti&&Ti.iOS?1:0),t(s),i.cacheID=ee.cache,o&&tc("ss",s)}else(e||ee.cache!==i.cacheID||tc("ref"))&&(i.cacheID=ee.cache,i.v=t());return i.v+i.offset};return n.offset=0,t&&n},un={s:ha,p:"left",p2:"Left",os:"right",os2:"Right",d:"width",d2:"Width",a:"x",sc:da(function(r){return arguments.length?Nn.scrollTo(r,He.sc()):Nn.pageXOffset||$i[ha]||Ki[ha]||ls[ha]||0})},He={s:fa,p:"top",p2:"Top",os:"bottom",os2:"Bottom",d:"height",d2:"Height",a:"y",op:un,sc:da(function(r){return arguments.length?Nn.scrollTo(un.sc(),r):Nn.pageYOffset||$i[fa]||Ki[fa]||ls[fa]||0})},Tn=function(t,e){return(e&&e._ctx&&e._ctx.selector||Je.utils.toArray)(t)[0]||(typeof t=="string"&&Je.config().nullTargetWarn!==!1?console.warn("Element not found:",t):null)},T_=function(t,e){for(var n=e.length;n--;)if(e[n]===t||e[n].contains(t))return!0;return!1},ji=function(t,e){var n=e.s,i=e.sc;mo(t)&&(t=$i.scrollingElement||Ki);var s=ee.indexOf(t),o=i===He.sc?1:2;!~s&&(s=ee.push(t)-1),ee[s+o]||ln(t,"scroll",ec);var a=ee[s+o],l=a||(ee[s+o]=da(Zi(t,n),!0)||(mo(t)?i:da(function(c){return arguments.length?t[n]=c:t[n]})));return l.target=t,a||(l.smooth=Je.getProperty(t,"scrollBehavior")==="smooth"),l},nc=function(t,e,n){var i=t,s=t,o=po(),a=o,l=e||50,c=Math.max(500,l*3),u=function(_,g){var m=po();g||m-o>l?(s=i,i=_,a=o,o=m):n?i+=_:i=s+(_-s)/(m-a)*(o-a)},f=function(){s=i=n?0:i,a=o=0},h=function(_){var g=a,m=s,p=po();return(_||_===0)&&_!==i&&u(_),o===a||p-a>c?0:(i+(n?m:-m))/((n?p:o)-g)*1e3};return{update:u,reset:f,getVelocity:h}},_o=function(t,e){return e&&!t._gsapAllow&&t.cancelable!==!1&&t.preventDefault(),t.changedTouches?t.changedTouches[0]:t},Ef=function(t){var e=Math.max.apply(Math,t),n=Math.min.apply(Math,t);return Math.abs(e)>=Math.abs(n)?e:n},Tf=function(){cs=Je.core.globals().ScrollTrigger,cs&&cs.core&&E_()},bf=function(t){return Je=t||Mf(),!ua&&Je&&typeof document<"u"&&document.body&&(Nn=window,$i=document,Ki=$i.documentElement,ls=$i.body,xf=[Nn,$i,Ki,ls],Je.utils.clamp,Sf=Je.core.context||function(){},Er="onpointerenter"in ls?"pointer":"mouse",vf=Ne.isTouch=Nn.matchMedia&&Nn.matchMedia("(hover: none), (pointer: coarse)").matches?1:"ontouchstart"in Nn||navigator.maxTouchPoints>0||navigator.msMaxTouchPoints>0?2:0,ti=Ne.eventTypes=("ontouchstart"in Ki?"touchstart,touchmove,touchcancel,touchend":"onpointerdown"in Ki?"pointerdown,pointermove,pointercancel,pointerup":"mousedown,mousemove,mouseup,mouseup").split(","),setTimeout(function(){return yf=0},500),ua=1),cs||Tf(),ua};un.op=He,ee.cache=0;var Ne=(function(){function r(e){this.init(e)}var t=r.prototype;return t.init=function(n){ua||bf(Je)||console.warn("Please gsap.registerPlugin(Observer)"),cs||Tf();var i=n.tolerance,s=n.dragMinimum,o=n.type,a=n.target,l=n.lineHeight,c=n.debounce,u=n.preventDefault,f=n.onStop,h=n.onStopDelay,d=n.ignore,_=n.wheelSpeed,g=n.event,m=n.onDragStart,p=n.onDragEnd,y=n.onDrag,E=n.onPress,v=n.onRelease,C=n.onRight,w=n.onLeft,b=n.onUp,R=n.onDown,S=n.onChangeX,x=n.onChangeY,L=n.onChange,F=n.onToggleX,B=n.onToggleY,G=n.onHover,j=n.onHoverEnd,Y=n.onMove,$=n.ignoreCheck,H=n.isNormalizer,it=n.onGestureStart,P=n.onGestureEnd,ut=n.onWheel,Ut=n.onEnable,$t=n.onDisable,J=n.onClick,nt=n.scrollSpeed,dt=n.capture,et=n.allowClicks,Mt=n.lockAxis,At=n.onLockAxis;this.target=a=Tn(a)||Ki,this.vars=n,d&&(d=Je.utils.toArray(d)),i=i||1e-9,s=s||0,_=_||1,nt=nt||1,o=o||"wheel,touch,pointer",c=c!==!1,l||(l=parseFloat(Nn.getComputedStyle(ls).lineHeight)||22);var zt,Kt,Ot,Pt,I,he,Bt,z=this,Et=0,ie=0,wt=n.passive||!u&&n.passive!==!1,A=ji(a,un),M=ji(a,He),V=A(),N=M(),k=~o.indexOf("touch")&&!~o.indexOf("pointer")&&ti[0]==="pointerdown",q=mo(a),rt=a.ownerDocument||$i,ot=[0,0,0],lt=[0,0,0],Tt=0,tt=function(){return Tt=po()},st=function(Ct,jt){return(z.event=Ct)&&d&&T_(Ct.target,d)||jt&&k&&Ct.pointerType!=="touch"||$&&$(Ct,jt)},Dt=function(){z._vx.reset(),z._vy.reset(),Kt.pause(),f&&f(z)},Rt=function(){var Ct=z.deltaX=Ef(ot),jt=z.deltaY=Ef(lt),gt=Math.abs(Ct)>=i,Gt=Math.abs(jt)>=i;L&&(gt||Gt)&&L(z,Ct,jt,ot,lt),gt&&(C&&z.deltaX>0&&C(z),w&&z.deltaX<0&&w(z),S&&S(z),F&&z.deltaX<0!=Et<0&&F(z),Et=z.deltaX,ot[0]=ot[1]=ot[2]=0),Gt&&(R&&z.deltaY>0&&R(z),b&&z.deltaY<0&&b(z),x&&x(z),B&&z.deltaY<0!=ie<0&&B(z),ie=z.deltaY,lt[0]=lt[1]=lt[2]=0),(Pt||Ot)&&(Y&&Y(z),Ot&&(m&&Ot===1&&m(z),y&&y(z),Ot=0),Pt=!1),he&&!(he=!1)&&At&&At(z),I&&(ut(z),I=!1),zt=0},_t=function(Ct,jt,gt){ot[gt]+=Ct,lt[gt]+=jt,z._vx.update(Ct),z._vy.update(jt),c?zt||(zt=requestAnimationFrame(Rt)):Rt()},Xt=function(Ct,jt){Mt&&!Bt&&(z.axis=Bt=Math.abs(Ct)>Math.abs(jt)?"x":"y",he=!0),Bt!=="y"&&(ot[2]+=Ct,z._vx.update(Ct,!0)),Bt!=="x"&&(lt[2]+=jt,z._vy.update(jt,!0)),c?zt||(zt=requestAnimationFrame(Rt)):Rt()},Ft=function(Ct){if(!st(Ct,1)){Ct=_o(Ct,u);var jt=Ct.clientX,gt=Ct.clientY,Gt=jt-z.x,Lt=gt-z.y,Vt=z.isDragging;z.x=jt,z.y=gt,(Vt||(Gt||Lt)&&(Math.abs(z.startX-jt)>=s||Math.abs(z.startY-gt)>=s))&&(Ot||(Ot=Vt?2:1),Vt||(z.isDragging=!0),Xt(Gt,Lt))}},Qt=z.onPress=function(xt){st(xt,1)||xt&&xt.button||(z.axis=Bt=null,Kt.pause(),z.isPressed=!0,xt=_o(xt),Et=ie=0,z.startX=z.x=xt.clientX,z.startY=z.y=xt.clientY,z._vx.reset(),z._vy.reset(),ln(H?a:rt,ti[1],Ft,wt,!0),z.deltaX=z.deltaY=0,E&&E(z))},D=z.onRelease=function(xt){if(!st(xt,1)){cn(H?a:rt,ti[1],Ft,!0);var Ct=!isNaN(z.y-z.startY),jt=z.isDragging,gt=jt&&(Math.abs(z.x-z.startX)>3||Math.abs(z.y-z.startY)>3),Gt=_o(xt);!gt&&Ct&&(z._vx.reset(),z._vy.reset(),u&&et&&Je.delayedCall(.08,function(){if(po()-Tt>300&&!xt.defaultPrevented){if(xt.target.click)xt.target.click();else if(rt.createEvent){var Lt=rt.createEvent("MouseEvents");Lt.initMouseEvent("click",!0,!0,Nn,1,Gt.screenX,Gt.screenY,Gt.clientX,Gt.clientY,!1,!1,!1,!1,0,null),xt.target.dispatchEvent(Lt)}}})),z.isDragging=z.isGesturing=z.isPressed=!1,f&&jt&&!H&&Kt.restart(!0),Ot&&Rt(),p&&jt&&p(z),v&&v(z,gt)}},ht=function(Ct){return Ct.touches&&Ct.touches.length>1&&(z.isGesturing=!0)&&it(Ct,z.isDragging)},K=function(){return(z.isGesturing=!1)||P(z)},Q=function(Ct){if(!st(Ct)){var jt=A(),gt=M();_t((jt-V)*nt,(gt-N)*nt,1),V=jt,N=gt,f&&Kt.restart(!0)}},ft=function(Ct){if(!st(Ct)){Ct=_o(Ct,u),ut&&(I=!0);var jt=(Ct.deltaMode===1?l:Ct.deltaMode===2?Nn.innerHeight:1)*_;_t(Ct.deltaX*jt,Ct.deltaY*jt,0),f&&!H&&Kt.restart(!0)}},pt=function(Ct){if(!st(Ct)){var jt=Ct.clientX,gt=Ct.clientY,Gt=jt-z.x,Lt=gt-z.y;z.x=jt,z.y=gt,Pt=!0,f&&Kt.restart(!0),(Gt||Lt)&&Xt(Gt,Lt)}},kt=function(Ct){z.event=Ct,G(z)},le=function(Ct){z.event=Ct,j(z)},Ie=function(Ct){return st(Ct)||_o(Ct,u)&&J(z)};Kt=z._dc=Je.delayedCall(h||.25,Dt).pause(),z.deltaX=z.deltaY=0,z._vx=nc(0,50,!0),z._vy=nc(0,50,!0),z.scrollX=A,z.scrollY=M,z.isDragging=z.isGesturing=z.isPressed=!1,Sf(this),z.enable=function(xt){return z.isEnabled||(ln(q?rt:a,"scroll",ec),o.indexOf("scroll")>=0&&ln(q?rt:a,"scroll",Q,wt,dt),o.indexOf("wheel")>=0&&ln(a,"wheel",ft,wt,dt),(o.indexOf("touch")>=0&&vf||o.indexOf("pointer")>=0)&&(ln(a,ti[0],Qt,wt,dt),ln(rt,ti[2],D),ln(rt,ti[3],D),et&&ln(a,"click",tt,!0,!0),J&&ln(a,"click",Ie),it&&ln(rt,"gesturestart",ht),P&&ln(rt,"gestureend",K),G&&ln(a,Er+"enter",kt),j&&ln(a,Er+"leave",le),Y&&ln(a,Er+"move",pt)),z.isEnabled=!0,z.isDragging=z.isGesturing=z.isPressed=Pt=Ot=!1,z._vx.reset(),z._vy.reset(),V=A(),N=M(),xt&&xt.type&&Qt(xt),Ut&&Ut(z)),z},z.disable=function(){z.isEnabled&&(us.filter(function(xt){return xt!==z&&mo(xt.target)}).length||cn(q?rt:a,"scroll",ec),z.isPressed&&(z._vx.reset(),z._vy.reset(),cn(H?a:rt,ti[1],Ft,!0)),cn(q?rt:a,"scroll",Q,dt),cn(a,"wheel",ft,dt),cn(a,ti[0],Qt,dt),cn(rt,ti[2],D),cn(rt,ti[3],D),cn(a,"click",tt,!0),cn(a,"click",Ie),cn(rt,"gesturestart",ht),cn(rt,"gestureend",K),cn(a,Er+"enter",kt),cn(a,Er+"leave",le),cn(a,Er+"move",pt),z.isEnabled=z.isPressed=z.isDragging=!1,$t&&$t(z))},z.kill=z.revert=function(){z.disable();var xt=us.indexOf(z);xt>=0&&us.splice(xt,1),Ti===z&&(Ti=0)},us.push(z),H&&mo(a)&&(Ti=z),z.enable(g)},y_(r,[{key:"velocityX",get:function(){return this._vx.getVelocity()}},{key:"velocityY",get:function(){return this._vy.getVelocity()}}]),r})();Ne.version="3.15.0",Ne.create=function(r){return new Ne(r)},Ne.register=bf,Ne.getAll=function(){return us.slice()},Ne.getById=function(r){return us.filter(function(t){return t.vars.id===r})[0]},Mf()&&Je.registerPlugin(Ne);/*!
 * ScrollTrigger 3.15.0
 * https://gsap.com
 *
 * @license Copyright 2008-2026, GreenSock. All rights reserved.
 * Subject to the terms at https://gsap.com/standard-license
 * @author: Jack Doyle, jack@greensock.com
*/var yt,hs,ne,_e,Fn,ue,ic,pa,go,vo,xo,ma,en,_a,rc,hn,Af,wf,fs,Rf,sc,Cf,fn,oc,Pf,Df,Ji,ac,lc,ds,cc,So,uc,hc,ga=1,nn=Date.now,fc=nn(),qn=0,Mo=0,Lf=function(t,e,n){var i=On(t)&&(t.substr(0,6)==="clamp("||t.indexOf("max")>-1);return n["_"+e+"Clamp"]=i,i?t.substr(6,t.length-7):t},If=function(t,e){return e&&(!On(t)||t.substr(0,6)!=="clamp(")?"clamp("+t+")":t},b_=function r(){return Mo&&requestAnimationFrame(r)},Uf=function(){return _a=1},Nf=function(){return _a=0},mi=function(t){return t},yo=function(t){return Math.round(t*1e5)/1e5||0},Ff=function(){return typeof window<"u"},Of=function(){return yt||Ff()&&(yt=window.gsap)&&yt.registerPlugin&&yt},Tr=function(t){return!!~ic.indexOf(t)},Bf=function(t){return(t==="Height"?cc:ne["inner"+t])||Fn["client"+t]||ue["client"+t]},zf=function(t){return Zi(t,"getBoundingClientRect")||(Tr(t)?function(){return Pa.width=ne.innerWidth,Pa.height=cc,Pa}:function(){return bi(t)})},A_=function(t,e,n){var i=n.d,s=n.d2,o=n.a;return(o=Zi(t,"getBoundingClientRect"))?function(){return o()[i]}:function(){return(e?Bf(s):t["client"+s])||0}},w_=function(t,e){return!e||~pi.indexOf(t)?zf(t):function(){return Pa}},_i=function(t,e){var n=e.s,i=e.d2,s=e.d,o=e.a;return Math.max(0,(n="scroll"+i)&&(o=Zi(t,n))?o()-zf(t)()[s]:Tr(t)?(Fn[n]||ue[n])-Bf(i):t[n]-t["offset"+i])},va=function(t,e){for(var n=0;n<fs.length;n+=3)(!e||~e.indexOf(fs[n+1]))&&t(fs[n],fs[n+1],fs[n+2])},On=function(t){return typeof t=="string"},rn=function(t){return typeof t=="function"},Eo=function(t){return typeof t=="number"},br=function(t){return typeof t=="object"},To=function(t,e,n){return t&&t.progress(e?0:1)&&n&&t.pause()},ps=function(t,e,n){if(t.enabled){var i=t._ctx?t._ctx.add(function(){return e(t,n)}):e(t,n);i&&i.totalTime&&(t.callbackAnimation=i)}},ms=Math.abs,kf="left",Hf="top",dc="right",pc="bottom",Ar="width",wr="height",bo="Right",Ao="Left",wo="Top",Ro="Bottom",ze="padding",$n="margin",_s="Width",mc="Height",Ve="px",Kn=function(t){return ne.getComputedStyle(t.nodeType===Node.DOCUMENT_NODE?t.scrollingElement:t)},R_=function(t){var e=Kn(t).position;t.style.position=e==="absolute"||e==="fixed"?e:"relative"},Vf=function(t,e){for(var n in e)n in t||(t[n]=e[n]);return t},bi=function(t,e){var n=e&&Kn(t)[rc]!=="matrix(1, 0, 0, 1, 0, 0)"&&yt.to(t,{x:0,y:0,xPercent:0,yPercent:0,rotation:0,rotationX:0,rotationY:0,scale:1,skewX:0,skewY:0}).progress(1),i=t.getBoundingClientRect?t.getBoundingClientRect():t.scrollingElement.getBoundingClientRect();return n&&n.progress(0).kill(),i},xa=function(t,e){var n=e.d2;return t["offset"+n]||t["client"+n]||0},Gf=function(t){var e=[],n=t.labels,i=t.duration(),s;for(s in n)e.push(n[s]/i);return e},C_=function(t){return function(e){return yt.utils.snap(Gf(t),e)}},_c=function(t){var e=yt.utils.snap(t),n=Array.isArray(t)&&t.slice(0).sort(function(i,s){return i-s});return n?function(i,s,o){o===void 0&&(o=.001);var a;if(!s)return e(i);if(s>0){for(i-=o,a=0;a<n.length;a++)if(n[a]>=i)return n[a];return n[a-1]}else for(a=n.length,i+=o;a--;)if(n[a]<=i)return n[a];return n[0]}:function(i,s,o){o===void 0&&(o=.001);var a=e(i);return!s||Math.abs(a-i)<o||a-i<0==s<0?a:e(s<0?i-t:i+t)}},P_=function(t){return function(e,n){return _c(Gf(t))(e,n.direction)}},Sa=function(t,e,n,i){return n.split(",").forEach(function(s){return t(e,s,i)})},$e=function(t,e,n,i,s){return t.addEventListener(e,n,{passive:!i,capture:!!s})},Ke=function(t,e,n,i){return t.removeEventListener(e,n,!!i)},Ma=function(t,e,n){n=n&&n.wheelHandler,n&&(t(e,"wheel",n),t(e,"touchmove",n))},Wf={startColor:"green",endColor:"red",indent:0,fontSize:"16px",fontWeight:"normal"},ya={toggleActions:"play",anticipatePin:0},Ea={top:0,left:0,center:.5,bottom:1,right:1},Ta=function(t,e){if(On(t)){var n=t.indexOf("="),i=~n?+(t.charAt(n-1)+1)*parseFloat(t.substr(n+1)):0;~n&&(t.indexOf("%")>n&&(i*=e/100),t=t.substr(0,n-1)),t=i+(t in Ea?Ea[t]*e:~t.indexOf("%")?parseFloat(t)*e/100:parseFloat(t)||0)}return t},ba=function(t,e,n,i,s,o,a,l){var c=s.startColor,u=s.endColor,f=s.fontSize,h=s.indent,d=s.fontWeight,_=_e.createElement("div"),g=Tr(n)||Zi(n,"pinType")==="fixed",m=t.indexOf("scroller")!==-1,p=g?ue:n.tagName==="IFRAME"?n.contentDocument.body:n,y=t.indexOf("start")!==-1,E=y?c:u,v="border-color:"+E+";font-size:"+f+";color:"+E+";font-weight:"+d+";pointer-events:none;white-space:nowrap;font-family:sans-serif,Arial;z-index:1000;padding:4px 8px;border-width:0;border-style:solid;";return v+="position:"+((m||l)&&g?"fixed;":"absolute;"),(m||l||!g)&&(v+=(i===He?dc:pc)+":"+(o+parseFloat(h))+"px;"),a&&(v+="box-sizing:border-box;text-align:left;width:"+a.offsetWidth+"px;"),_._isStart=y,_.setAttribute("class","gsap-marker-"+t+(e?" marker-"+e:"")),_.style.cssText=v,_.innerText=e||e===0?t+"-"+e:t,p.children[0]?p.insertBefore(_,p.children[0]):p.appendChild(_),_._offset=_["offset"+i.op.d2],Aa(_,0,i,y),_},Aa=function(t,e,n,i){var s={display:"block"},o=n[i?"os2":"p2"],a=n[i?"p2":"os2"];t._isFlipped=i,s[n.a+"Percent"]=i?-100:0,s[n.a]=i?"1px":0,s["border"+o+_s]=1,s["border"+a+_s]=0,s[n.p]=e+"px",yt.set(t,s)},te=[],gc={},Co,Xf=function(){return nn()-qn>34&&(Co||(Co=requestAnimationFrame(Ai)))},gs=function(){(!fn||!fn.isPressed||fn.startX>ue.clientWidth)&&(ee.cache++,fn?Co||(Co=requestAnimationFrame(Ai)):Ai(),qn||Cr("scrollStart"),qn=nn())},vc=function(){Df=ne.innerWidth,Pf=ne.innerHeight},Po=function(t){ee.cache++,(t===!0||!en&&!Cf&&!_e.fullscreenElement&&!_e.webkitFullscreenElement&&(!oc||Df!==ne.innerWidth||Math.abs(ne.innerHeight-Pf)>ne.innerHeight*.25))&&pa.restart(!0)},Rr={},D_=[],Yf=function r(){return Ke(qt,"scrollEnd",r)||Dr(!0)},Cr=function(t){return Rr[t]&&Rr[t].map(function(e){return e()})||D_},Bn=[],qf=function(t){for(var e=0;e<Bn.length;e+=5)(!t||Bn[e+4]&&Bn[e+4].query===t)&&(Bn[e].style.cssText=Bn[e+1],Bn[e].getBBox&&Bn[e].setAttribute("transform",Bn[e+2]||""),Bn[e+3].uncache=1)},$f=function(){return ee.forEach(function(t){return rn(t)&&++t.cacheID&&(t.rec=t())})},xc=function(t,e){var n;for(hn=0;hn<te.length;hn++)n=te[hn],n&&(!e||n._ctx===e)&&(t?n.kill(1):n.revert(!0,!0));So=!0,e&&qf(e),e||Cr("revert")},Kf=function(t,e){ee.cache++,(e||!dn)&&ee.forEach(function(n){return rn(n)&&n.cacheID++&&(n.rec=0)}),On(t)&&(ne.history.scrollRestoration=lc=t)},dn,Pr=0,Zf,L_=function(){if(Zf!==Pr){var t=Zf=Pr;requestAnimationFrame(function(){return t===Pr&&Dr(!0)})}},jf=function(){ue.appendChild(ds),cc=!fn&&ds.offsetHeight||ne.innerHeight,ue.removeChild(ds)},Jf=function(t){return go(".gsap-marker-start, .gsap-marker-end, .gsap-marker-scroller-start, .gsap-marker-scroller-end").forEach(function(e){return e.style.display=t?"none":"block"})},Dr=function(t,e){if(Fn=_e.documentElement,ue=_e.body,ic=[ne,_e,Fn,ue],qn&&!t&&!So){$e(qt,"scrollEnd",Yf);return}jf(),dn=qt.isRefreshing=!0,So||$f();var n=Cr("refreshInit");Rf&&qt.sort(),e||xc(),ee.forEach(function(i){rn(i)&&(i.smooth&&(i.target.style.scrollBehavior="auto"),i(0))}),te.slice(0).forEach(function(i){return i.refresh()}),So=!1,te.forEach(function(i){if(i._subPinOffset&&i.pin){var s=i.vars.horizontal?"offsetWidth":"offsetHeight",o=i.pin[s];i.revert(!0,1),i.adjustPinSpacing(i.pin[s]-o),i.refresh()}}),uc=1,Jf(!0),te.forEach(function(i){var s=_i(i.scroller,i._dir),o=i.vars.end==="max"||i._endClamp&&i.end>s,a=i._startClamp&&i.start>=s;(o||a)&&i.setPositions(a?s-1:i.start,o?Math.max(a?s:i.start+1,s):i.end,!0)}),Jf(!1),uc=0,n.forEach(function(i){return i&&i.render&&i.render(-1)}),ee.forEach(function(i){rn(i)&&(i.smooth&&requestAnimationFrame(function(){return i.target.style.scrollBehavior="smooth"}),i.rec&&i(i.rec))}),Kf(lc,1),pa.pause(),Pr++,dn=2,Ai(2),te.forEach(function(i){return rn(i.vars.onRefresh)&&i.vars.onRefresh(i)}),dn=qt.isRefreshing=!1,Cr("refresh")},Sc=0,wa=1,Do,Ai=function(t){if(t===2||!dn&&!So){qt.isUpdating=!0,Do&&Do.update(0);var e=te.length,n=nn(),i=n-fc>=50,s=e&&te[0].scroll();if(wa=Sc>s?-1:1,dn||(Sc=s),i&&(qn&&!_a&&n-qn>200&&(qn=0,Cr("scrollEnd")),xo=fc,fc=n),wa<0){for(hn=e;hn-- >0;)te[hn]&&te[hn].update(0,i);wa=1}else for(hn=0;hn<e;hn++)te[hn]&&te[hn].update(0,i);qt.isUpdating=!1}Co=0},Mc=[kf,Hf,pc,dc,$n+Ro,$n+bo,$n+wo,$n+Ao,"display","flexShrink","float","zIndex","gridColumnStart","gridColumnEnd","gridRowStart","gridRowEnd","gridArea","justifySelf","alignSelf","placeSelf","order"],Ra=Mc.concat([Ar,wr,"boxSizing","max"+_s,"max"+mc,"position",$n,ze,ze+wo,ze+bo,ze+Ro,ze+Ao]),I_=function(t,e,n){vs(n);var i=t._gsap;if(i.spacerIsNative)vs(i.spacerState);else if(t._gsap.swappedIn){var s=e.parentNode;s&&(s.insertBefore(t,e),s.removeChild(e))}t._gsap.swappedIn=!1},yc=function(t,e,n,i){if(!t._gsap.swappedIn){for(var s=Mc.length,o=e.style,a=t.style,l;s--;)l=Mc[s],o[l]=n[l];o.position=n.position==="absolute"?"absolute":"relative",n.display==="inline"&&(o.display="inline-block"),a[pc]=a[dc]="auto",o.flexBasis=n.flexBasis||"auto",o.overflow="visible",o.boxSizing="border-box",o[Ar]=xa(t,un)+Ve,o[wr]=xa(t,He)+Ve,o[ze]=a[$n]=a[Hf]=a[kf]="0",vs(i),a[Ar]=a["max"+_s]=n[Ar],a[wr]=a["max"+mc]=n[wr],a[ze]=n[ze],t.parentNode!==e&&(t.parentNode.insertBefore(e,t),e.appendChild(t)),t._gsap.swappedIn=!0}},U_=/([A-Z])/g,vs=function(t){if(t){var e=t.t.style,n=t.length,i=0,s,o;for((t.t._gsap||yt.core.getCache(t.t)).uncache=1;i<n;i+=2)o=t[i+1],s=t[i],o?e[s]=o:e[s]&&e.removeProperty(s.replace(U_,"-$1").toLowerCase())}},Ca=function(t){for(var e=Ra.length,n=t.style,i=[],s=0;s<e;s++)i.push(Ra[s],n[Ra[s]]);return i.t=t,i},N_=function(t,e,n){for(var i=[],s=t.length,o=n?8:0,a;o<s;o+=2)a=t[o],i.push(a,a in e?e[a]:t[o+1]);return i.t=t.t,i},Pa={left:0,top:0},Qf=function(t,e,n,i,s,o,a,l,c,u,f,h,d,_){rn(t)&&(t=t(l)),On(t)&&t.substr(0,3)==="max"&&(t=h+(t.charAt(4)==="="?Ta("0"+t.substr(3),n):0));var g=d?d.time():0,m,p,y;if(d&&d.seek(0),isNaN(t)||(t=+t),Eo(t))d&&(t=yt.utils.mapRange(d.scrollTrigger.start,d.scrollTrigger.end,0,h,t)),a&&Aa(a,n,i,!0);else{rn(e)&&(e=e(l));var E=(t||"0").split(" "),v,C,w,b;y=Tn(e,l)||ue,v=bi(y)||{},(!v||!v.left&&!v.top)&&Kn(y).display==="none"&&(b=y.style.display,y.style.display="block",v=bi(y),b?y.style.display=b:y.style.removeProperty("display")),C=Ta(E[0],v[i.d]),w=Ta(E[1]||"0",n),t=v[i.p]-c[i.p]-u+C+s-w,a&&Aa(a,w,i,n-w<20||a._isStart&&w>20),n-=n-w}if(_&&(l[_]=t||-.001,t<0&&(t=0)),o){var R=t+n,S=o._isStart;m="scroll"+i.d2,Aa(o,R,i,S&&R>20||!S&&(f?Math.max(ue[m],Fn[m]):o.parentNode[m])<=R+1),f&&(c=bi(a),f&&(o.style[i.op.p]=c[i.op.p]-i.op.m-o._offset+Ve))}return d&&y&&(m=bi(y),d.seek(h),p=bi(y),d._caScrollDist=m[i.p]-p[i.p],t=t/d._caScrollDist*h),d&&d.seek(g),d?t:Math.round(t)},F_=/(webkit|moz|length|cssText|inset)/i,td=function(t,e,n,i){if(t.parentNode!==e){var s=t.style,o,a;if(e===ue){t._stOrig=s.cssText,a=Kn(t);for(o in a)!+o&&!F_.test(o)&&a[o]&&typeof s[o]=="string"&&o!=="0"&&(s[o]=a[o]);s.top=n,s.left=i}else s.cssText=t._stOrig;yt.core.getCache(t).uncache=1,e.appendChild(t)}},ed=function(t,e,n){var i=e,s=i;return function(o){var a=Math.round(t());return a!==i&&a!==s&&Math.abs(a-i)>3&&Math.abs(a-s)>3&&(o=a,n&&n()),s=i,i=Math.round(o),i}},Da=function(t,e,n){var i={};i[e.p]="+="+n,yt.set(t,i)},nd=function(t,e){var n=ji(t,e),i="_scroll"+e.p2,s=function o(a,l,c,u,f){var h=o.tween,d=l.onComplete,_={};c=c||n();var g=ed(n,c,function(){h.kill(),o.tween=0});return f=u&&f||0,u=u||a-c,h&&h.kill(),l[i]=a,l.inherit=!1,l.modifiers=_,_[i]=function(){return g(c+u*h.ratio+f*h.ratio*h.ratio)},l.onUpdate=function(){ee.cache++,o.tween&&Ai()},l.onComplete=function(){o.tween=0,d&&d.call(h)},h=o.tween=yt.to(t,l),h};return t[i]=n,n.wheelHandler=function(){return s.tween&&s.tween.kill()&&(s.tween=0)},$e(t,"wheel",n.wheelHandler),qt.isTouch&&$e(t,"touchmove",n.wheelHandler),s},qt=(function(){function r(e,n){hs||r.register(yt)||console.warn("Please gsap.registerPlugin(ScrollTrigger)"),ac(this),this.init(e,n)}var t=r.prototype;return t.init=function(n,i){if(this.progress=this.start=0,this.vars&&this.kill(!0,!0),!Mo){this.update=this.refresh=this.kill=mi;return}n=Vf(On(n)||Eo(n)||n.nodeType?{trigger:n}:n,ya);var s=n,o=s.onUpdate,a=s.toggleClass,l=s.id,c=s.onToggle,u=s.onRefresh,f=s.scrub,h=s.trigger,d=s.pin,_=s.pinSpacing,g=s.invalidateOnRefresh,m=s.anticipatePin,p=s.onScrubComplete,y=s.onSnapComplete,E=s.once,v=s.snap,C=s.pinReparent,w=s.pinSpacer,b=s.containerAnimation,R=s.fastScrollEnd,S=s.preventOverlaps,x=n.horizontal||n.containerAnimation&&n.horizontal!==!1?un:He,L=!f&&f!==0,F=Tn(n.scroller||ne),B=yt.core.getCache(F),G=Tr(F),j=("pinType"in n?n.pinType:Zi(F,"pinType")||G&&"fixed")==="fixed",Y=[n.onEnter,n.onLeave,n.onEnterBack,n.onLeaveBack],$=L&&n.toggleActions.split(" "),H="markers"in n?n.markers:ya.markers,it=G?0:parseFloat(Kn(F)["border"+x.p2+_s])||0,P=this,ut=n.onRefreshInit&&function(){return n.onRefreshInit(P)},Ut=A_(F,G,x),$t=w_(F,G),J=0,nt=0,dt=0,et=ji(F,x),Mt,At,zt,Kt,Ot,Pt,I,he,Bt,z,Et,ie,wt,A,M,V,N,k,q,rt,ot,lt,Tt,tt,st,Dt,Rt,_t,Xt,Ft,Qt,D,ht,K,Q,ft,pt,kt,le;if(P._startClamp=P._endClamp=!1,P._dir=x,m*=45,P.scroller=F,P.scroll=b?b.time.bind(b):et,Kt=et(),P.vars=n,i=i||n.animation,"refreshPriority"in n&&(Rf=1,n.refreshPriority===-9999&&(Do=P)),B.tweenScroll=B.tweenScroll||{top:nd(F,He),left:nd(F,un)},P.tweenTo=Mt=B.tweenScroll[x.p],P.scrubDuration=function(gt){ht=Eo(gt)&&gt,ht?D?D.duration(gt):D=yt.to(i,{ease:"expo",totalProgress:"+=0",inherit:!1,duration:ht,paused:!0,onComplete:function(){return p&&p(P)}}):(D&&D.progress(1).kill(),D=0)},i&&(i.vars.lazy=!1,i._initted&&!P.isReverted||i.vars.immediateRender!==!1&&n.immediateRender!==!1&&i.duration()&&i.render(0,!0,!0),P.animation=i.pause(),i.scrollTrigger=P,P.scrubDuration(f),Ft=0,l||(l=i.vars.id)),v&&((!br(v)||v.push)&&(v={snapTo:v}),"scrollBehavior"in ue.style&&yt.set(G?[ue,Fn]:F,{scrollBehavior:"auto"}),ee.forEach(function(gt){return rn(gt)&&gt.target===(G?_e.scrollingElement||Fn:F)&&(gt.smooth=!1)}),zt=rn(v.snapTo)?v.snapTo:v.snapTo==="labels"?C_(i):v.snapTo==="labelsDirectional"?P_(i):v.directional!==!1?function(gt,Gt){return _c(v.snapTo)(gt,nn()-nt<500?0:Gt.direction)}:yt.utils.snap(v.snapTo),K=v.duration||{min:.1,max:2},K=br(K)?vo(K.min,K.max):vo(K,K),Q=yt.delayedCall(v.delay||ht/2||.1,function(){var gt=et(),Gt=nn()-nt<500,Lt=Mt.tween;if((Gt||Math.abs(P.getVelocity())<10)&&!Lt&&!_a&&J!==gt){var Vt=(gt-Pt)/A,Oe=i&&!L?i.totalProgress():Vt,re=Gt?0:(Oe-Qt)/(nn()-xo)*1e3||0,Ee=yt.utils.clamp(-Vt,1-Vt,ms(re/2)*re/.185),Xe=Vt+(v.inertia===!1?0:Ee),Me,ye,fe=v,Vn=fe.onStart,Te=fe.onInterrupt,gn=fe.onComplete;if(Me=zt(Xe,P),Eo(Me)||(Me=Xe),ye=Math.max(0,Math.round(Pt+Me*A)),gt<=I&&gt>=Pt&&ye!==gt){if(Lt&&!Lt._initted&&Lt.data<=ms(ye-gt))return;v.inertia===!1&&(Ee=Me-Vt),Mt(ye,{duration:K(ms(Math.max(ms(Xe-Oe),ms(Me-Oe))*.185/re/.05||0)),ease:v.ease||"power3",data:ms(ye-gt),onInterrupt:function(){return Q.restart(!0)&&Te&&ps(P,Te)},onComplete:function(){P.update(),J=et(),i&&!L&&(D?D.resetTo("totalProgress",Me,i._tTime/i._tDur):i.progress(Me)),Ft=Qt=i&&!L?i.totalProgress():P.progress,y&&y(P),gn&&ps(P,gn)}},gt,Ee*A,ye-gt-Ee*A),Vn&&ps(P,Vn,Mt.tween)}}else P.isActive&&J!==gt&&Q.restart(!0)}).pause()),l&&(gc[l]=P),h=P.trigger=Tn(h||d!==!0&&d),le=h&&h._gsap&&h._gsap.stRevert,le&&(le=le(P)),d=d===!0?h:Tn(d),On(a)&&(a={targets:h,className:a}),d&&(_===!1||_===$n||(_=!_&&d.parentNode&&d.parentNode.style&&Kn(d.parentNode).display==="flex"?!1:ze),P.pin=d,At=yt.core.getCache(d),At.spacer?M=At.pinState:(w&&(w=Tn(w),w&&!w.nodeType&&(w=w.current||w.nativeElement),At.spacerIsNative=!!w,w&&(At.spacerState=Ca(w))),At.spacer=k=w||_e.createElement("div"),k.classList.add("pin-spacer"),l&&k.classList.add("pin-spacer-"+l),At.pinState=M=Ca(d)),n.force3D!==!1&&yt.set(d,{force3D:!0}),P.spacer=k=At.spacer,Xt=Kn(d),tt=Xt[_+x.os2],rt=yt.getProperty(d),ot=yt.quickSetter(d,x.a,Ve),yc(d,k,Xt),N=Ca(d)),H){ie=br(H)?Vf(H,Wf):Wf,z=ba("scroller-start",l,F,x,ie,0),Et=ba("scroller-end",l,F,x,ie,0,z),q=z["offset"+x.op.d2];var Ie=Tn(Zi(F,"content")||F);he=this.markerStart=ba("start",l,Ie,x,ie,q,0,b),Bt=this.markerEnd=ba("end",l,Ie,x,ie,q,0,b),b&&(kt=yt.quickSetter([he,Bt],x.a,Ve)),!j&&!(pi.length&&Zi(F,"fixedMarkers")===!0)&&(R_(G?ue:F),yt.set([z,Et],{force3D:!0}),Dt=yt.quickSetter(z,x.a,Ve),_t=yt.quickSetter(Et,x.a,Ve))}if(b){var xt=b.vars.onUpdate,Ct=b.vars.onUpdateParams;b.eventCallback("onUpdate",function(){P.update(0,0,1),xt&&xt.apply(b,Ct||[])})}if(P.previous=function(){return te[te.indexOf(P)-1]},P.next=function(){return te[te.indexOf(P)+1]},P.revert=function(gt,Gt){if(!Gt)return P.kill(!0);var Lt=gt!==!1||!P.enabled,Vt=en;Lt!==P.isReverted&&(Lt&&(ft=Math.max(et(),P.scroll.rec||0),dt=P.progress,pt=i&&i.progress()),he&&[he,Bt,z,Et].forEach(function(Oe){return Oe.style.display=Lt?"none":"block"}),Lt&&(en=P,P.update(Lt)),d&&(!C||!P.isActive)&&(Lt?I_(d,k,M):yc(d,k,Kn(d),st)),Lt||P.update(Lt),en=Vt,P.isReverted=Lt)},P.refresh=function(gt,Gt,Lt,Vt){if(!((en||!P.enabled)&&!Gt)){if(d&&gt&&qn){$e(r,"scrollEnd",Yf);return}!dn&&ut&&ut(P),en=P,Mt.tween&&!Lt&&(Mt.tween.kill(),Mt.tween=0),D&&D.pause(),g&&i&&(i.revert({kill:!1}).invalidate(),i.getChildren?i.getChildren(!0,!0,!1).forEach(function(De){return De.vars.immediateRender&&De.render(0,!0,!0)}):i.vars.immediateRender&&i.render(0,!0,!0)),P.isReverted||P.revert(!0,!0),P._subPinOffset=!1;var Oe=Ut(),re=$t(),Ee=b?b.duration():_i(F,x),Xe=A<=.01||!A,Me=0,ye=Vt||0,fe=br(Lt)?Lt.end:n.end,Vn=n.endTrigger||h,Te=br(Lt)?Lt.start:n.start||(n.start===0||!h?0:d?"0 0":"0 100%"),gn=P.pinnedContainer=n.pinnedContainer&&Tn(n.pinnedContainer,P),T=h&&Math.max(0,te.indexOf(P))||0,U=T,W,X,O,at,ct,mt,St,Ht,Wt,bt,Yt,ce,de;for(H&&br(Lt)&&(ce=yt.getProperty(z,x.p),de=yt.getProperty(Et,x.p));U-- >0;)mt=te[U],mt.end||mt.refresh(0,1)||(en=P),St=mt.pin,St&&(St===h||St===d||St===gn)&&!mt.isReverted&&(bt||(bt=[]),bt.unshift(mt),mt.revert(!0,!0)),mt!==te[U]&&(T--,U--);for(rn(Te)&&(Te=Te(P)),Te=Lf(Te,"start",P),Pt=Qf(Te,h,Oe,x,et(),he,z,P,re,it,j,Ee,b,P._startClamp&&"_startClamp")||(d?-.001:0),rn(fe)&&(fe=fe(P)),On(fe)&&!fe.indexOf("+=")&&(~fe.indexOf(" ")?fe=(On(Te)?Te.split(" ")[0]:"")+fe:(Me=Ta(fe.substr(2),Oe),fe=On(Te)?Te:(b?yt.utils.mapRange(0,b.duration(),b.scrollTrigger.start,b.scrollTrigger.end,Pt):Pt)+Me,Vn=h)),fe=Lf(fe,"end",P),I=Math.max(Pt,Qf(fe||(Vn?"100% 0":Ee),Vn,Oe,x,et()+Me,Bt,Et,P,re,it,j,Ee,b,P._endClamp&&"_endClamp"))||-.001,Me=0,U=T;U--;)mt=te[U]||{},St=mt.pin,St&&mt.start-mt._pinPush<=Pt&&!b&&mt.end>0&&(W=mt.end-(P._startClamp?Math.max(0,mt.start):mt.start),(St===h&&mt.start-mt._pinPush<Pt||St===gn)&&isNaN(Te)&&(Me+=W*(1-mt.progress)),St===d&&(ye+=W));if(Pt+=Me,I+=Me,P._startClamp&&(P._startClamp+=Me),P._endClamp&&!dn&&(P._endClamp=I||-.001,I=Math.min(I,_i(F,x))),A=I-Pt||(Pt-=.01)&&.001,Xe&&(dt=yt.utils.clamp(0,1,yt.utils.normalize(Pt,I,ft))),P._pinPush=ye,he&&Me&&(W={},W[x.a]="+="+Me,gn&&(W[x.p]="-="+et()),yt.set([he,Bt],W)),d&&!(uc&&P.end>=_i(F,x)))W=Kn(d),at=x===He,O=et(),lt=parseFloat(rt(x.a))+ye,!Ee&&I>1&&(Yt=(G?_e.scrollingElement||Fn:F).style,Yt={style:Yt,value:Yt["overflow"+x.a.toUpperCase()]},G&&Kn(ue)["overflow"+x.a.toUpperCase()]!=="scroll"&&(Yt.style["overflow"+x.a.toUpperCase()]="scroll")),yc(d,k,W),N=Ca(d),X=bi(d,!0),Ht=j&&ji(F,at?un:He)(),_?(st=[_+x.os2,A+ye+Ve],st.t=k,U=_===ze?xa(d,x)+A+ye:0,U&&(st.push(x.d,U+Ve),k.style.flexBasis!=="auto"&&(k.style.flexBasis=U+Ve)),vs(st),gn&&te.forEach(function(De){De.pin===gn&&De.vars.pinSpacing!==!1&&(De._subPinOffset=!0)}),j&&et(ft)):(U=xa(d,x),U&&k.style.flexBasis!=="auto"&&(k.style.flexBasis=U+Ve)),j&&(ct={top:X.top+(at?O-Pt:Ht)+Ve,left:X.left+(at?Ht:O-Pt)+Ve,boxSizing:"border-box",position:"fixed"},ct[Ar]=ct["max"+_s]=Math.ceil(X.width)+Ve,ct[wr]=ct["max"+mc]=Math.ceil(X.height)+Ve,ct[$n]=ct[$n+wo]=ct[$n+bo]=ct[$n+Ro]=ct[$n+Ao]="0",ct[ze]=W[ze],ct[ze+wo]=W[ze+wo],ct[ze+bo]=W[ze+bo],ct[ze+Ro]=W[ze+Ro],ct[ze+Ao]=W[ze+Ao],V=N_(M,ct,C),dn&&et(0)),i?(Wt=i._initted,sc(1),i.render(i.duration(),!0,!0),Tt=rt(x.a)-lt+A+ye,Rt=Math.abs(A-Tt)>1,j&&Rt&&V.splice(V.length-2,2),i.render(0,!0,!0),Wt||i.invalidate(!0),i.parent||i.totalTime(i.totalTime()),sc(0)):Tt=A,Yt&&(Yt.value?Yt.style["overflow"+x.a.toUpperCase()]=Yt.value:Yt.style.removeProperty("overflow-"+x.a));else if(h&&et()&&!b)for(X=h.parentNode;X&&X!==ue;)X._pinOffset&&(Pt-=X._pinOffset,I-=X._pinOffset),X=X.parentNode;bt&&bt.forEach(function(De){return De.revert(!1,!0)}),P.start=Pt,P.end=I,Kt=Ot=dn?ft:et(),!b&&!dn&&(Kt<ft&&et(ft),P.scroll.rec=0),P.revert(!1,!0),nt=nn(),Q&&(J=-1,Q.restart(!0)),en=0,i&&L&&(i._initted||pt)&&i.progress()!==pt&&i.progress(pt||0,!0).render(i.time(),!0,!0),(Xe||dt!==P.progress||b||g||i&&!i._initted)&&(i&&!L&&(i._initted||dt||i.vars.immediateRender!==!1)&&i.totalProgress(b&&Pt<-.001&&!dt?yt.utils.normalize(Pt,I,0):dt,!0),P.progress=Xe||(Kt-Pt)/A===dt?0:dt),d&&_&&(k._pinOffset=Math.round(P.progress*Tt)),D&&D.invalidate(),isNaN(ce)||(ce-=yt.getProperty(z,x.p),de-=yt.getProperty(Et,x.p),Da(z,x,ce),Da(he,x,ce-(Vt||0)),Da(Et,x,de),Da(Bt,x,de-(Vt||0))),Xe&&!dn&&P.update(),u&&!dn&&!wt&&(wt=!0,u(P),wt=!1)}},P.getVelocity=function(){return(et()-Ot)/(nn()-xo)*1e3||0},P.endAnimation=function(){To(P.callbackAnimation),i&&(D?D.progress(1):i.paused()?L||To(i,P.direction<0,1):To(i,i.reversed()))},P.labelToScroll=function(gt){return i&&i.labels&&(Pt||P.refresh()||Pt)+i.labels[gt]/i.duration()*A||0},P.getTrailing=function(gt){var Gt=te.indexOf(P),Lt=P.direction>0?te.slice(0,Gt).reverse():te.slice(Gt+1);return(On(gt)?Lt.filter(function(Vt){return Vt.vars.preventOverlaps===gt}):Lt).filter(function(Vt){return P.direction>0?Vt.end<=Pt:Vt.start>=I})},P.update=function(gt,Gt,Lt){if(!(b&&!Lt&&!gt)){var Vt=dn===!0?ft:P.scroll(),Oe=gt?0:(Vt-Pt)/A,re=Oe<0?0:Oe>1?1:Oe||0,Ee=P.progress,Xe,Me,ye,fe,Vn,Te,gn,T;if(Gt&&(Ot=Kt,Kt=b?et():Vt,v&&(Qt=Ft,Ft=i&&!L?i.totalProgress():re)),m&&d&&!en&&!ga&&qn&&(!re&&Pt<Vt+(Vt-Ot)/(nn()-xo)*m?re=1e-4:re===1&&I>Vt+(Vt-Ot)/(nn()-xo)*m&&(re=.9999)),re!==Ee&&P.enabled){if(Xe=P.isActive=!!re&&re<1,Me=!!Ee&&Ee<1,Te=Xe!==Me,Vn=Te||!!re!=!!Ee,P.direction=re>Ee?1:-1,P.progress=re,Vn&&!en&&(ye=re&&!Ee?0:re===1?1:Ee===1?2:3,L&&(fe=!Te&&$[ye+1]!=="none"&&$[ye+1]||$[ye],T=i&&(fe==="complete"||fe==="reset"||fe in i))),S&&(Te||T)&&(T||f||!i)&&(rn(S)?S(P):P.getTrailing(S).forEach(function(O){return O.endAnimation()})),L||(D&&!en&&!ga?(D._dp._time-D._start!==D._time&&D.render(D._dp._time-D._start),D.resetTo?D.resetTo("totalProgress",re,i._tTime/i._tDur):(D.vars.totalProgress=re,D.invalidate().restart())):i&&i.totalProgress(re,!!(en&&(nt||gt)))),d){if(gt&&_&&(k.style[_+x.os2]=tt),!j)ot(yo(lt+Tt*re));else if(Vn){if(gn=!gt&&re>Ee&&I+1>Vt&&Vt+1>=_i(F,x),C)if(!gt&&(Xe||gn)){var U=bi(d,!0),W=Vt-Pt;td(d,ue,U.top+(x===He?W:0)+Ve,U.left+(x===He?0:W)+Ve)}else td(d,k);vs(Xe||gn?V:N),Rt&&re<1&&Xe||ot(lt+(re===1&&!gn?Tt:0))}}v&&!Mt.tween&&!en&&!ga&&Q.restart(!0),a&&(Te||E&&re&&(re<1||!hc))&&go(a.targets).forEach(function(O){return O.classList[Xe||E?"add":"remove"](a.className)}),o&&!L&&!gt&&o(P),Vn&&!en?(L&&(T&&(fe==="complete"?i.pause().totalProgress(1):fe==="reset"?i.restart(!0).pause():fe==="restart"?i.restart(!0):i[fe]()),o&&o(P)),(Te||!hc)&&(c&&Te&&ps(P,c),Y[ye]&&ps(P,Y[ye]),E&&(re===1?P.kill(!1,1):Y[ye]=0),Te||(ye=re===1?1:3,Y[ye]&&ps(P,Y[ye]))),R&&!Xe&&Math.abs(P.getVelocity())>(Eo(R)?R:2500)&&(To(P.callbackAnimation),D?D.progress(1):To(i,fe==="reverse"?1:!re,1))):L&&o&&!en&&o(P)}if(_t){var X=b?Vt/b.duration()*(b._caScrollDist||0):Vt;Dt(X+(z._isFlipped?1:0)),_t(X)}kt&&kt(-Vt/b.duration()*(b._caScrollDist||0))}},P.enable=function(gt,Gt){P.enabled||(P.enabled=!0,$e(F,"resize",Po),G||$e(F,"scroll",gs),ut&&$e(r,"refreshInit",ut),gt!==!1&&(P.progress=dt=0,Kt=Ot=J=et()),Gt!==!1&&P.refresh())},P.getTween=function(gt){return gt&&Mt?Mt.tween:D},P.setPositions=function(gt,Gt,Lt,Vt){if(b){var Oe=b.scrollTrigger,re=b.duration(),Ee=Oe.end-Oe.start;gt=Oe.start+Ee*gt/re,Gt=Oe.start+Ee*Gt/re}P.refresh(!1,!1,{start:If(gt,Lt&&!!P._startClamp),end:If(Gt,Lt&&!!P._endClamp)},Vt),P.update()},P.adjustPinSpacing=function(gt){if(st&&gt){var Gt=st.indexOf(x.d)+1;st[Gt]=parseFloat(st[Gt])+gt+Ve,st[1]=parseFloat(st[1])+gt+Ve,vs(st)}},P.disable=function(gt,Gt){if(gt!==!1&&P.revert(!0,!0),P.enabled&&(P.enabled=P.isActive=!1,Gt||D&&D.pause(),ft=0,At&&(At.uncache=1),ut&&Ke(r,"refreshInit",ut),Q&&(Q.pause(),Mt.tween&&Mt.tween.kill()&&(Mt.tween=0)),!G)){for(var Lt=te.length;Lt--;)if(te[Lt].scroller===F&&te[Lt]!==P)return;Ke(F,"resize",Po),G||Ke(F,"scroll",gs)}},P.kill=function(gt,Gt){P.disable(gt,Gt),D&&!Gt&&D.kill(),l&&delete gc[l];var Lt=te.indexOf(P);Lt>=0&&te.splice(Lt,1),Lt===hn&&wa>0&&hn--,Lt=0,te.forEach(function(Vt){return Vt.scroller===P.scroller&&(Lt=1)}),Lt||dn||(P.scroll.rec=0),i&&(i.scrollTrigger=null,gt&&i.revert({kill:!1}),Gt||i.kill()),he&&[he,Bt,z,Et].forEach(function(Vt){return Vt.parentNode&&Vt.parentNode.removeChild(Vt)}),Do===P&&(Do=0),d&&(At&&(At.uncache=1),Lt=0,te.forEach(function(Vt){return Vt.pin===d&&Lt++}),Lt||(At.spacer=0)),n.onKill&&n.onKill(P)},te.push(P),P.enable(!1,!1),le&&le(P),i&&i.add&&!A){var jt=P.update;P.update=function(){P.update=jt,ee.cache++,Pt||I||P.refresh()},yt.delayedCall(.01,P.update),A=.01,Pt=I=0}else P.refresh();d&&L_()},r.register=function(n){return hs||(yt=n||Of(),Ff()&&window.document&&r.enable(),hs=Mo),hs},r.defaults=function(n){if(n)for(var i in n)ya[i]=n[i];return ya},r.disable=function(n,i){Mo=0,te.forEach(function(o){return o[i?"kill":"disable"](n)}),Ke(ne,"wheel",gs),Ke(_e,"scroll",gs),clearInterval(ma),Ke(_e,"touchcancel",mi),Ke(ue,"touchstart",mi),Sa(Ke,_e,"pointerdown,touchstart,mousedown",Uf),Sa(Ke,_e,"pointerup,touchend,mouseup",Nf),pa.kill(),va(Ke);for(var s=0;s<ee.length;s+=3)Ma(Ke,ee[s],ee[s+1]),Ma(Ke,ee[s],ee[s+2])},r.enable=function(){if(ne=window,_e=document,Fn=_e.documentElement,ue=_e.body,yt){if(go=yt.utils.toArray,vo=yt.utils.clamp,ac=yt.core.context||mi,sc=yt.core.suppressOverwrites||mi,lc=ne.history.scrollRestoration||"auto",Sc=ne.pageYOffset||0,yt.core.globals("ScrollTrigger",r),ue){Mo=1,ds=document.createElement("div"),ds.style.height="100vh",ds.style.position="absolute",jf(),b_(),Ne.register(yt),r.isTouch=Ne.isTouch,Ji=Ne.isTouch&&/(iPad|iPhone|iPod|Mac)/g.test(navigator.userAgent),oc=Ne.isTouch===1,$e(ne,"wheel",gs),ic=[ne,_e,Fn,ue],yt.matchMedia?(r.matchMedia=function(u){var f=yt.matchMedia(),h;for(h in u)f.add(h,u[h]);return f},yt.addEventListener("matchMediaInit",function(){$f(),xc()}),yt.addEventListener("matchMediaRevert",function(){return qf()}),yt.addEventListener("matchMedia",function(){Dr(0,1),Cr("matchMedia")}),yt.matchMedia().add("(orientation: portrait)",function(){return vc(),vc})):console.warn("Requires GSAP 3.11.0 or later"),vc(),$e(_e,"scroll",gs);var n=ue.hasAttribute("style"),i=ue.style,s=i.borderTopStyle,o=yt.core.Animation.prototype,a,l;for(o.revert||Object.defineProperty(o,"revert",{value:function(){return this.time(-.01,!0)}}),i.borderTopStyle="solid",a=bi(ue),He.m=Math.round(a.top+He.sc())||0,un.m=Math.round(a.left+un.sc())||0,s?i.borderTopStyle=s:i.removeProperty("border-top-style"),n||(ue.setAttribute("style",""),ue.removeAttribute("style")),ma=setInterval(Xf,250),yt.delayedCall(.5,function(){return ga=0}),$e(_e,"touchcancel",mi),$e(ue,"touchstart",mi),Sa($e,_e,"pointerdown,touchstart,mousedown",Uf),Sa($e,_e,"pointerup,touchend,mouseup",Nf),rc=yt.utils.checkPrefix("transform"),Ra.push(rc),hs=nn(),pa=yt.delayedCall(.2,Dr).pause(),fs=[_e,"visibilitychange",function(){var u=ne.innerWidth,f=ne.innerHeight;_e.hidden?(Af=u,wf=f):(Af!==u||wf!==f)&&Po()},_e,"DOMContentLoaded",Dr,ne,"load",Dr,ne,"resize",Po],va($e),te.forEach(function(u){return u.enable(0,1)}),l=0;l<ee.length;l+=3)Ma(Ke,ee[l],ee[l+1]),Ma(Ke,ee[l],ee[l+2])}else if(_e){var c=function u(){r.enable(),_e.removeEventListener("DOMContentLoaded",u)};_e.addEventListener("DOMContentLoaded",c)}}},r.config=function(n){"limitCallbacks"in n&&(hc=!!n.limitCallbacks);var i=n.syncInterval;i&&clearInterval(ma)||(ma=i)&&setInterval(Xf,i),"ignoreMobileResize"in n&&(oc=r.isTouch===1&&n.ignoreMobileResize),"autoRefreshEvents"in n&&(va(Ke)||va($e,n.autoRefreshEvents||"none"),Cf=(n.autoRefreshEvents+"").indexOf("resize")===-1)},r.scrollerProxy=function(n,i){var s=Tn(n),o=ee.indexOf(s),a=Tr(s);~o&&ee.splice(o,a?6:2),i&&(a?pi.unshift(ne,i,ue,i,Fn,i):pi.unshift(s,i))},r.clearMatchMedia=function(n){te.forEach(function(i){return i._ctx&&i._ctx.query===n&&i._ctx.kill(!0,!0)})},r.isInViewport=function(n,i,s){var o=(On(n)?Tn(n):n).getBoundingClientRect(),a=o[s?Ar:wr]*i||0;return s?o.right-a>0&&o.left+a<ne.innerWidth:o.bottom-a>0&&o.top+a<ne.innerHeight},r.positionInViewport=function(n,i,s){On(n)&&(n=Tn(n));var o=n.getBoundingClientRect(),a=o[s?Ar:wr],l=i==null?a/2:i in Ea?Ea[i]*a:~i.indexOf("%")?parseFloat(i)*a/100:parseFloat(i)||0;return s?(o.left+l)/ne.innerWidth:(o.top+l)/ne.innerHeight},r.killAll=function(n){if(te.slice(0).forEach(function(s){return s.vars.id!=="ScrollSmoother"&&s.kill()}),n!==!0){var i=Rr.killAll||[];Rr={},i.forEach(function(s){return s()})}},r})();qt.version="3.15.0",qt.saveStyles=function(r){return r?go(r).forEach(function(t){if(t&&t.style){var e=Bn.indexOf(t);e>=0&&Bn.splice(e,5),Bn.push(t,t.style.cssText,t.getBBox&&t.getAttribute("transform"),yt.core.getCache(t),ac())}}):Bn},qt.revert=function(r,t){return xc(!r,t)},qt.create=function(r,t){return new qt(r,t)},qt.refresh=function(r){return r?Po(!0):(hs||qt.register())&&Dr(!0)},qt.update=function(r){return++ee.cache&&Ai(r===!0?2:0)},qt.clearScrollMemory=Kf,qt.maxScroll=function(r,t){return _i(r,t?un:He)},qt.getScrollFunc=function(r,t){return ji(Tn(r),t?un:He)},qt.getById=function(r){return gc[r]},qt.getAll=function(){return te.filter(function(r){return r.vars.id!=="ScrollSmoother"})},qt.isScrolling=function(){return!!qn},qt.snapDirectional=_c,qt.addEventListener=function(r,t){var e=Rr[r]||(Rr[r]=[]);~e.indexOf(t)||e.push(t)},qt.removeEventListener=function(r,t){var e=Rr[r],n=e&&e.indexOf(t);n>=0&&e.splice(n,1)},qt.batch=function(r,t){var e=[],n={},i=t.interval||.016,s=t.batchMax||1e9,o=function(c,u){var f=[],h=[],d=yt.delayedCall(i,function(){u(f,h),f=[],h=[]}).pause();return function(_){f.length||d.restart(!0),f.push(_.trigger),h.push(_),s<=f.length&&d.progress(1)}},a;for(a in t)n[a]=a.substr(0,2)==="on"&&rn(t[a])&&a!=="onRefreshInit"?o(a,t[a]):t[a];return rn(s)&&(s=s(),$e(qt,"refresh",function(){return s=t.batchMax()})),go(r).forEach(function(l){var c={};for(a in n)c[a]=n[a];c.trigger=l,e.push(qt.create(c))}),e};var id=function(t,e,n,i){return e>i?t(i):e<0&&t(0),n>i?(i-e)/(n-e):n<0?e/(e-n):1},Ec=function r(t,e){e===!0?t.style.removeProperty("touch-action"):t.style.touchAction=e===!0?"auto":e?"pan-"+e+(Ne.isTouch?" pinch-zoom":""):"none",t===Fn&&r(ue,e)},La={auto:1,scroll:1},O_=function(t){var e=t.event,n=t.target,i=t.axis,s=(e.changedTouches?e.changedTouches[0]:e).target,o=s._gsap||yt.core.getCache(s),a=nn(),l;if(!o._isScrollT||a-o._isScrollT>2e3){for(;s&&s!==ue&&(s.scrollHeight<=s.clientHeight&&s.scrollWidth<=s.clientWidth||!(La[(l=Kn(s)).overflowY]||La[l.overflowX]));)s=s.parentNode;o._isScroll=s&&s!==n&&!Tr(s)&&(La[(l=Kn(s)).overflowY]||La[l.overflowX]),o._isScrollT=a}(o._isScroll||i==="x")&&(e.stopPropagation(),e._gsapAllow=!0)},rd=function(t,e,n,i){return Ne.create({target:t,capture:!0,debounce:!1,lockAxis:!0,type:e,onWheel:i=i&&O_,onPress:i,onDrag:i,onScroll:i,onEnable:function(){return n&&$e(_e,Ne.eventTypes[0],od,!1,!0)},onDisable:function(){return Ke(_e,Ne.eventTypes[0],od,!0)}})},B_=/(input|label|select|textarea)/i,sd,od=function(t){var e=B_.test(t.target.tagName);(e||sd)&&(t._gsapAllow=!0,sd=e)},z_=function(t){br(t)||(t={}),t.preventDefault=t.isNormalizer=t.allowClicks=!0,t.type||(t.type="wheel,touch"),t.debounce=!!t.debounce,t.id=t.id||"normalizer";var e=t,n=e.normalizeScrollX,i=e.momentum,s=e.allowNestedScroll,o=e.onRelease,a,l,c=Tn(t.target)||Fn,u=yt.core.globals().ScrollSmoother,f=u&&u.get(),h=Ji&&(t.content&&Tn(t.content)||f&&t.content!==!1&&!f.smooth()&&f.content()),d=ji(c,He),_=ji(c,un),g=1,m=(Ne.isTouch&&ne.visualViewport?ne.visualViewport.scale*ne.visualViewport.width:ne.outerWidth)/ne.innerWidth,p=0,y=rn(i)?function(){return i(a)}:function(){return i||2.8},E,v,C=rd(c,t.type,!0,s),w=function(){return v=!1},b=mi,R=mi,S=function(){l=_i(c,He),R=vo(Ji?1:0,l),n&&(b=vo(0,_i(c,un))),E=Pr},x=function(){h._gsap.y=yo(parseFloat(h._gsap.y)+d.offset)+"px",h.style.transform="matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, "+parseFloat(h._gsap.y)+", 0, 1)",d.offset=d.cacheID=0},L=function(){if(v){requestAnimationFrame(w);var H=yo(a.deltaY/2),it=R(d.v-H);if(h&&it!==d.v+d.offset){d.offset=it-d.v;var P=yo((parseFloat(h&&h._gsap.y)||0)-d.offset);h.style.transform="matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, "+P+", 0, 1)",h._gsap.y=P+"px",d.cacheID=ee.cache,Ai()}return!0}d.offset&&x(),v=!0},F,B,G,j,Y=function(){S(),F.isActive()&&F.vars.scrollY>l&&(d()>l?F.progress(1)&&d(l):F.resetTo("scrollY",l))};return h&&yt.set(h,{y:"+=0"}),t.ignoreCheck=function($){return Ji&&$.type==="touchmove"&&L()||g>1.05&&$.type!=="touchstart"||a.isGesturing||$.touches&&$.touches.length>1},t.onPress=function(){v=!1;var $=g;g=yo((ne.visualViewport&&ne.visualViewport.scale||1)/m),F.pause(),$!==g&&Ec(c,g>1.01?!0:n?!1:"x"),B=_(),G=d(),S(),E=Pr},t.onRelease=t.onGestureStart=function($,H){if(d.offset&&x(),!H)j.restart(!0);else{ee.cache++;var it=y(),P,ut;n&&(P=_(),ut=P+it*.05*-$.velocityX/.227,it*=id(_,P,ut,_i(c,un)),F.vars.scrollX=b(ut)),P=d(),ut=P+it*.05*-$.velocityY/.227,it*=id(d,P,ut,_i(c,He)),F.vars.scrollY=R(ut),F.invalidate().duration(it).play(.01),(Ji&&F.vars.scrollY>=l||P>=l-1)&&yt.to({},{onUpdate:Y,duration:it})}o&&o($)},t.onWheel=function(){F._ts&&F.pause(),nn()-p>1e3&&(E=0,p=nn())},t.onChange=function($,H,it,P,ut){if(Pr!==E&&S(),H&&n&&_(b(P[2]===H?B+($.startX-$.x):_()+H-P[1])),it){d.offset&&x();var Ut=ut[2]===it,$t=Ut?G+$.startY-$.y:d()+it-ut[1],J=R($t);Ut&&$t!==J&&(G+=J-$t),d(J)}(it||H)&&Ai()},t.onEnable=function(){Ec(c,n?!1:"x"),qt.addEventListener("refresh",Y),$e(ne,"resize",Y),d.smooth&&(d.target.style.scrollBehavior="auto",d.smooth=_.smooth=!1),C.enable()},t.onDisable=function(){Ec(c,!0),Ke(ne,"resize",Y),qt.removeEventListener("refresh",Y),C.kill()},t.lockAxis=t.lockAxis!==!1,a=new Ne(t),a.iOS=Ji,Ji&&!d()&&d(1),Ji&&yt.ticker.add(mi),j=a._dc,F=yt.to(a,{ease:"power4",paused:!0,inherit:!1,scrollX:n?"+=0.1":"+=0",scrollY:"+=0.1",modifiers:{scrollY:ed(d,d(),function(){return F.pause()})},onUpdate:Ai,onComplete:j.vars.onComplete}),a};qt.sort=function(r){if(rn(r))return te.sort(r);var t=ne.pageYOffset||0;return qt.getAll().forEach(function(e){return e._sortY=e.trigger?t+e.trigger.getBoundingClientRect().top:e.start+ne.innerHeight}),te.sort(r||function(e,n){return(e.vars.refreshPriority||0)*-1e6+(e.vars.containerAnimation?1e6:e._sortY)-((n.vars.containerAnimation?1e6:n._sortY)+(n.vars.refreshPriority||0)*-1e6)})},qt.observe=function(r){return new Ne(r)},qt.normalizeScroll=function(r){if(typeof r>"u")return fn;if(r===!0&&fn)return fn.enable();if(r===!1){fn&&fn.kill(),fn=r;return}var t=r instanceof Ne?r:z_(r);return fn&&fn.target===t.target&&fn.kill(),Tr(t.target)&&(fn=t),t},qt.core={_getVelocityProp:nc,_inputObserver:rd,_scrollers:ee,_proxies:pi,bridge:{ss:function(){qn||Cr("scrollStart"),qn=nn()},ref:function(){return en}}},Of()&&yt.registerPlugin(qt);var ad="1.3.26";function ld(r,t,e){return Math.max(r,Math.min(t,e))}function k_(r,t,e){return(1-e)*r+e*t}function H_(r,t,e,n){return k_(r,t,1-Math.exp(-e*n))}function V_(r,t){return(r%t+t)%t}var G_=class{constructor(){It(this,"isRunning",!1);It(this,"value",0);It(this,"from",0);It(this,"to",0);It(this,"currentTime",0);It(this,"lerp");It(this,"duration");It(this,"easing");It(this,"onUpdate")}advance(r){var e;if(!this.isRunning)return;let t=!1;if(this.duration&&this.easing){this.currentTime+=r;const n=ld(0,this.currentTime/this.duration,1);t=n>=1;const i=t?1:this.easing(n);this.value=this.from+(this.to-this.from)*i}else this.lerp?(this.value=H_(this.value,this.to,this.lerp*60,r),Math.round(this.value)===Math.round(this.to)&&(this.value=this.to,t=!0)):(this.value=this.to,t=!0);t&&this.stop(),(e=this.onUpdate)==null||e.call(this,this.value,t)}stop(){this.isRunning=!1}fromTo(r,t,{lerp:e,duration:n,easing:i,onStart:s,onUpdate:o}){this.from=this.value=r,this.to=t,this.lerp=e,this.duration=n,this.easing=i,this.currentTime=0,this.isRunning=!0,s==null||s(),this.onUpdate=o}};function W_(r,t){let e;return function(...n){clearTimeout(e),e=setTimeout(()=>{e=void 0,r.apply(this,n)},t)}}var X_=class{constructor(r,t,{autoResize:e=!0,debounce:n=250}={}){It(this,"width",0);It(this,"height",0);It(this,"scrollHeight",0);It(this,"scrollWidth",0);It(this,"debouncedResize");It(this,"wrapperResizeObserver");It(this,"contentResizeObserver");It(this,"resize",()=>{this.onWrapperResize(),this.onContentResize()});It(this,"onWrapperResize",()=>{this.wrapper instanceof Window?(this.width=window.innerWidth,this.height=window.innerHeight):(this.width=this.wrapper.clientWidth,this.height=this.wrapper.clientHeight)});It(this,"onContentResize",()=>{this.wrapper instanceof Window?(this.scrollHeight=this.content.scrollHeight,this.scrollWidth=this.content.scrollWidth):(this.scrollHeight=this.wrapper.scrollHeight,this.scrollWidth=this.wrapper.scrollWidth)});this.wrapper=r,this.content=t,e&&(this.debouncedResize=W_(this.resize,n),this.wrapper instanceof Window?window.addEventListener("resize",this.debouncedResize):(this.wrapperResizeObserver=new ResizeObserver(this.debouncedResize),this.wrapperResizeObserver.observe(this.wrapper)),this.contentResizeObserver=new ResizeObserver(this.debouncedResize),this.contentResizeObserver.observe(this.content)),this.resize()}destroy(){var r,t;(r=this.wrapperResizeObserver)==null||r.disconnect(),(t=this.contentResizeObserver)==null||t.disconnect(),this.wrapper===window&&this.debouncedResize&&window.removeEventListener("resize",this.debouncedResize)}get limit(){return{x:this.scrollWidth-this.width,y:this.scrollHeight-this.height}}},cd=class{constructor(){It(this,"events",{})}emit(r,...t){var n;const e=this.events[r]||[];for(let i=0,s=e.length;i<s;i++)(n=e[i])==null||n.call(e,...t)}on(r,t){return this.events[r]?this.events[r].push(t):this.events[r]=[t],()=>{var e;this.events[r]=(e=this.events[r])==null?void 0:e.filter(n=>t!==n)}}off(r,t){var e;this.events[r]=(e=this.events[r])==null?void 0:e.filter(n=>t!==n)}destroy(){this.events={}}};const Y_=100/6,Qi={passive:!1};function ud(r,t){return r===1?Y_:r===2?t:1}var q_=class{constructor(r,t={wheelMultiplier:1,touchMultiplier:1}){It(this,"touchStart",{x:0,y:0});It(this,"lastDelta",{x:0,y:0});It(this,"window",{width:0,height:0});It(this,"emitter",new cd);It(this,"onTouchStart",r=>{const{clientX:t,clientY:e}=r.targetTouches?r.targetTouches[0]:r;this.touchStart.x=t,this.touchStart.y=e,this.lastDelta={x:0,y:0},this.emitter.emit("scroll",{deltaX:0,deltaY:0,event:r})});It(this,"onTouchMove",r=>{const{clientX:t,clientY:e}=r.targetTouches?r.targetTouches[0]:r,n=-(t-this.touchStart.x)*this.options.touchMultiplier,i=-(e-this.touchStart.y)*this.options.touchMultiplier;this.touchStart.x=t,this.touchStart.y=e,this.lastDelta={x:n,y:i},this.emitter.emit("scroll",{deltaX:n,deltaY:i,event:r})});It(this,"onTouchEnd",r=>{this.emitter.emit("scroll",{deltaX:this.lastDelta.x,deltaY:this.lastDelta.y,event:r})});It(this,"onWheel",r=>{let{deltaX:t,deltaY:e,deltaMode:n}=r;const i=ud(n,this.window.width),s=ud(n,this.window.height);t*=i,e*=s,t*=this.options.wheelMultiplier,e*=this.options.wheelMultiplier,this.emitter.emit("scroll",{deltaX:t,deltaY:e,event:r})});It(this,"onWindowResize",()=>{this.window={width:window.innerWidth,height:window.innerHeight}});this.element=r,this.options=t,window.addEventListener("resize",this.onWindowResize),this.onWindowResize(),this.element.addEventListener("wheel",this.onWheel,Qi),this.element.addEventListener("touchstart",this.onTouchStart,Qi),this.element.addEventListener("touchmove",this.onTouchMove,Qi),this.element.addEventListener("touchend",this.onTouchEnd,Qi)}on(r,t){return this.emitter.on(r,t)}destroy(){this.emitter.destroy(),window.removeEventListener("resize",this.onWindowResize),this.element.removeEventListener("wheel",this.onWheel,Qi),this.element.removeEventListener("touchstart",this.onTouchStart,Qi),this.element.removeEventListener("touchmove",this.onTouchMove,Qi),this.element.removeEventListener("touchend",this.onTouchEnd,Qi)}};const hd=r=>Math.min(1,1.001-2**(-10*r));var $_=class{constructor({wrapper:r=window,content:t=document.documentElement,eventsTarget:e=r,smoothWheel:n=!0,syncTouch:i=!1,syncTouchLerp:s=.075,touchInertiaExponent:o=1.7,duration:a,easing:l,lerp:c=.1,infinite:u=!1,orientation:f="vertical",gestureOrientation:h=f==="horizontal"?"both":"vertical",touchMultiplier:d=1,wheelMultiplier:_=1,autoResize:g=!0,prevent:m,virtualScroll:p,overscroll:y=!0,autoRaf:E=!1,anchors:v=!1,autoToggle:C=!1,allowNestedScroll:w=!1,__experimental__naiveDimensions:b=!1,naiveDimensions:R=b,stopInertiaOnNavigate:S=!1,respectReducedMotion:x=!0}={}){It(this,"_isScrolling",!1);It(this,"_isStopped",!1);It(this,"_isLocked",!1);It(this,"_preventNextNativeScrollEvent",!1);It(this,"_resetVelocityTimeout",null);It(this,"_rafId",null);It(this,"_isDraggingSelection",!1);It(this,"reducedMotionMediaQuery",window.matchMedia("(prefers-reduced-motion: reduce)"));It(this,"isTouching");It(this,"isIos");It(this,"time",0);It(this,"userData",{});It(this,"lastVelocity",0);It(this,"velocity",0);It(this,"direction",0);It(this,"options");It(this,"targetScroll");It(this,"animatedScroll");It(this,"animate",new G_);It(this,"emitter",new cd);It(this,"dimensions");It(this,"virtualScroll");It(this,"onScrollEnd",r=>{r instanceof CustomEvent||(this.isScrolling==="smooth"||this.isScrolling===!1)&&r.stopPropagation()});It(this,"dispatchScrollendEvent",()=>{this.options.wrapper.dispatchEvent(new CustomEvent("scrollend",{bubbles:this.options.wrapper===window,detail:{lenisScrollEnd:!0}}))});It(this,"onTransitionEnd",r=>{var t;(t=r.propertyName)!=null&&t.includes("overflow")&&r.target===this.rootElement&&this.checkOverflow()});It(this,"onClick",r=>{const t=r.composedPath().filter(n=>n instanceof HTMLAnchorElement&&n.href).map(n=>new URL(n.href)),e=new URL(window.location.href);if(this.options.anchors){const n=t.find(i=>e.host===i.host&&e.pathname===i.pathname&&i.hash);if(n){const i=typeof this.options.anchors=="object"&&this.options.anchors?this.options.anchors:void 0,s=decodeURIComponent(n.hash);this.scrollTo(s,i);return}}if(this.options.stopInertiaOnNavigate&&t.some(n=>e.host===n.host&&e.pathname!==n.pathname)){this.reset();return}});It(this,"onPointerDown",r=>{r.button===1&&this.reset()});It(this,"onVirtualScroll",r=>{if(typeof this.options.virtualScroll=="function"&&this.options.virtualScroll(r)===!1)return;const{deltaX:t,deltaY:e,event:n}=r;if(this.emitter.emit("virtual-scroll",{deltaX:t,deltaY:e,event:n}),n.ctrlKey||n.lenisStopPropagation)return;const i=n.type.includes("touch"),s=n.type.includes("wheel");if(i&&this.isIos&&(n.type==="touchstart"&&(this._isDraggingSelection=this.isTouchOnSelectionHandle(n)),this._isDraggingSelection)){n.type==="touchend"&&(this._isDraggingSelection=!1);return}this.isTouching=n.type==="touchstart"||n.type==="touchmove";const o=t===0&&e===0;if(this.options.syncTouch&&i&&n.type==="touchstart"&&o&&!this.isStopped&&!this.isLocked){this.reset();return}const a=this.options.gestureOrientation==="vertical"&&e===0||this.options.gestureOrientation==="horizontal"&&t===0;if(o||a)return;let l=n.composedPath();l=l.slice(0,l.indexOf(this.rootElement));const c=this.options.prevent,u=Math.abs(t)>=Math.abs(e)?"horizontal":"vertical";if(l.find(_=>{var g,m,p,y,E;return _ instanceof HTMLElement&&(typeof c=="function"&&(c==null?void 0:c(_))||((g=_.hasAttribute)==null?void 0:g.call(_,"data-lenis-prevent"))||u==="vertical"&&((m=_.hasAttribute)==null?void 0:m.call(_,"data-lenis-prevent-vertical"))||u==="horizontal"&&((p=_.hasAttribute)==null?void 0:p.call(_,"data-lenis-prevent-horizontal"))||i&&((y=_.hasAttribute)==null?void 0:y.call(_,"data-lenis-prevent-touch"))||s&&((E=_.hasAttribute)==null?void 0:E.call(_,"data-lenis-prevent-wheel"))||this.options.allowNestedScroll&&this.hasNestedScroll(_,{deltaX:t,deltaY:e}))}))return;if(this.isStopped||this.isLocked){n.cancelable&&n.preventDefault();return}if(!(this.options.syncTouch&&i||this.options.smoothWheel&&s)){this.isScrolling="native",this.animate.stop(),n.lenisStopPropagation=!0;return}let f=e;this.options.gestureOrientation==="both"?f=Math.abs(e)>Math.abs(t)?e:t:this.options.gestureOrientation==="horizontal"&&(f=t),(!this.options.overscroll||this.options.infinite||this.options.wrapper!==window&&this.limit>0&&(this.animatedScroll>0&&this.animatedScroll<this.limit||this.animatedScroll===0&&e>0||this.animatedScroll===this.limit&&e<0))&&(n.lenisStopPropagation=!0),n.cancelable&&n.preventDefault();const h=i&&this.options.syncTouch,d=i&&n.type==="touchend";d&&(f=Math.sign(f)*Math.abs(this.velocity)**this.options.touchInertiaExponent),this.scrollTo(this.targetScroll+f,{programmatic:!1,...h?{lerp:d?this.options.syncTouchLerp:1}:{lerp:this.options.lerp,duration:this.options.duration,easing:this.options.easing}})});It(this,"onNativeScroll",()=>{if(this._resetVelocityTimeout!==null&&(clearTimeout(this._resetVelocityTimeout),this._resetVelocityTimeout=null),this._preventNextNativeScrollEvent){this._preventNextNativeScrollEvent=!1;return}if(this.isScrolling===!1||this.isScrolling==="native"){const r=this.animatedScroll;this.animatedScroll=this.targetScroll=this.actualScroll,this.lastVelocity=this.velocity,this.velocity=this.animatedScroll-r,this.direction=Math.sign(this.animatedScroll-r),this.isStopped||(this.isScrolling="native"),this.emit(),this.velocity!==0&&(this._resetVelocityTimeout=setTimeout(()=>{this.lastVelocity=this.velocity,this.velocity=0,this.isScrolling=!1,this.emit()},400))}});It(this,"raf",r=>{const t=r-(this.time||r);this.time=r,this.animate.advance(t*.001),this.options.autoRaf&&(this._rafId=requestAnimationFrame(this.raf))});window.lenisVersion=ad,window.lenis||(window.lenis={}),window.lenis.version=ad,f==="horizontal"&&(window.lenis.horizontal=!0),i===!0&&(window.lenis.touch=!0),this.isIos=/(iPad|iPhone|iPod)/g.test(navigator.userAgent),(!r||r===document.documentElement)&&(r=window),typeof a=="number"&&typeof l!="function"?l=hd:typeof l=="function"&&typeof a!="number"&&(a=1),this.options={wrapper:r,content:t,eventsTarget:e,smoothWheel:n,syncTouch:i,syncTouchLerp:s,touchInertiaExponent:o,duration:a,easing:l,lerp:c,infinite:u,gestureOrientation:h,orientation:f,touchMultiplier:d,wheelMultiplier:_,autoResize:g,prevent:m,virtualScroll:p,overscroll:y,autoRaf:E,anchors:v,autoToggle:C,allowNestedScroll:w,naiveDimensions:R,stopInertiaOnNavigate:S,respectReducedMotion:x},this.dimensions=new X_(r,t,{autoResize:g}),this.updateClassName(),this.targetScroll=this.animatedScroll=this.actualScroll,this.options.wrapper.addEventListener("scroll",this.onNativeScroll),this.options.wrapper.addEventListener("scrollend",this.onScrollEnd,{capture:!0}),(this.options.anchors||this.options.stopInertiaOnNavigate)&&this.options.wrapper.addEventListener("click",this.onClick),this.options.wrapper.addEventListener("pointerdown",this.onPointerDown),this.virtualScroll=new q_(e,{touchMultiplier:d,wheelMultiplier:_}),this.virtualScroll.on("scroll",this.onVirtualScroll),this.options.autoToggle&&(this.checkOverflow(),this.rootElement.addEventListener("transitionend",this.onTransitionEnd)),this.options.autoRaf&&(this._rafId=requestAnimationFrame(this.raf))}destroy(){this.emitter.destroy(),this.options.wrapper.removeEventListener("scroll",this.onNativeScroll),this.options.wrapper.removeEventListener("scrollend",this.onScrollEnd,{capture:!0}),this.options.wrapper.removeEventListener("pointerdown",this.onPointerDown),(this.options.anchors||this.options.stopInertiaOnNavigate)&&this.options.wrapper.removeEventListener("click",this.onClick),this.virtualScroll.destroy(),this.dimensions.destroy(),this.cleanUpClassName(),this._rafId&&cancelAnimationFrame(this._rafId)}on(r,t){return this.emitter.on(r,t)}off(r,t){return this.emitter.off(r,t)}get overflow(){const r=this.isHorizontal?"overflow-x":"overflow-y";return getComputedStyle(this.rootElement)[r]}checkOverflow(){["hidden","clip"].includes(this.overflow)?this.internalStop():this.internalStart()}setScroll(r){this.isHorizontal?this.options.wrapper.scrollTo({left:r,behavior:"instant"}):this.options.wrapper.scrollTo({top:r,behavior:"instant"})}isTouchOnSelectionHandle(r){const t=window.getSelection();if(!t||t.isCollapsed||t.rangeCount===0)return!1;const e=r.targetTouches[0]??r.changedTouches[0];if(!e)return!1;const n=t.getRangeAt(0).getClientRects();if(n.length===0)return!1;const i=n[0],s=n[n.length-1],o=40,a=Math.hypot(e.clientX-i.left,e.clientY-i.top)<=o,l=Math.hypot(e.clientX-s.right,e.clientY-s.bottom)<=o;return a||l}resize(){this.dimensions.resize(),this.animatedScroll=this.targetScroll=this.actualScroll,this.emit()}emit(){this.emitter.emit("scroll",this)}reset(){this.isLocked=!1,this.isScrolling=!1,this.animatedScroll=this.targetScroll=this.actualScroll,this.lastVelocity=this.velocity=0,this.animate.stop()}start(){if(this.isStopped){if(this.options.autoToggle){this.rootElement.style.removeProperty("overflow");return}this.internalStart()}}internalStart(){this.isStopped&&(this.reset(),this.isStopped=!1,this.emit())}stop(){if(!this.isStopped){if(this.options.autoToggle){this.rootElement.style.setProperty("overflow","clip");return}this.internalStop()}}internalStop(){this.isStopped||(this.reset(),this.isStopped=!0,this.emit())}scrollTo(r,{offset:t=0,immediate:e=!1,lock:n=!1,programmatic:i=!0,lerp:s=i?this.options.lerp:void 0,duration:o=i?this.options.duration:void 0,easing:a=i?this.options.easing:void 0,onStart:l,onComplete:c,force:u=!1,userData:f}={}){if(this.prefersReducedMotion&&(i?e=!0:(s=1,o=void 0,a=void 0)),(this.isStopped||this.isLocked)&&!u)return;let h=r,d=t;if(typeof h=="string"&&["top","left","start","#"].includes(h))h=0;else if(typeof h=="string"&&["bottom","right","end"].includes(h))h=this.limit;else{let _=null;if(typeof h=="string"?(_=h.startsWith("#")?document.getElementById(h.slice(1)):document.querySelector(h),_||(h==="#top"?h=0:console.warn("Lenis: Target not found",h))):h instanceof HTMLElement&&(h!=null&&h.nodeType)&&(_=h),_){if(this.options.wrapper!==window){const v=this.rootElement.getBoundingClientRect();d-=this.isHorizontal?v.left:v.top}const g=_.getBoundingClientRect(),m=getComputedStyle(_),p=this.isHorizontal?Number.parseFloat(m.scrollMarginLeft):Number.parseFloat(m.scrollMarginTop),y=getComputedStyle(this.rootElement),E=this.isHorizontal?Number.parseFloat(y.scrollPaddingLeft):Number.parseFloat(y.scrollPaddingTop);h=(this.isHorizontal?g.left:g.top)+this.animatedScroll-(Number.isNaN(p)?0:p)-(Number.isNaN(E)?0:E)}}if(typeof h=="number"){if(h+=d,this.options.infinite){if(i){this.targetScroll=this.animatedScroll=this.scroll;const _=h-this.animatedScroll;_>this.limit/2?h-=this.limit:_<-this.limit/2&&(h+=this.limit)}}else h=ld(0,h,this.limit);if(h===this.targetScroll){l==null||l(this),c==null||c(this);return}if(this.userData=f??{},e){this.animatedScroll=this.targetScroll=h,this.setScroll(this.scroll),this.reset(),this.preventNextNativeScrollEvent(),this.emit(),c==null||c(this),this.userData={},requestAnimationFrame(()=>{this.dispatchScrollendEvent()});return}i||(this.targetScroll=h),typeof o=="number"&&typeof a!="function"?a=hd:typeof a=="function"&&typeof o!="number"&&(o=1),this.animate.fromTo(this.animatedScroll,h,{duration:o,easing:a,lerp:s,onStart:()=>{n&&(this.isLocked=!0),this.isScrolling="smooth",l==null||l(this)},onUpdate:(_,g)=>{this.isScrolling="smooth",this.lastVelocity=this.velocity,this.velocity=_-this.animatedScroll,this.direction=Math.sign(this.velocity),this.animatedScroll=_,this.setScroll(this.scroll),i&&(this.targetScroll=_),g||this.emit(),g&&(this.reset(),this.emit(),c==null||c(this),this.userData={},requestAnimationFrame(()=>{this.dispatchScrollendEvent()}),this.preventNextNativeScrollEvent())}})}}preventNextNativeScrollEvent(){this._preventNextNativeScrollEvent=!0,requestAnimationFrame(()=>{this._preventNextNativeScrollEvent=!1})}hasNestedScroll(r,{deltaX:t,deltaY:e}){const n=Date.now();r._lenis||(r._lenis={});const i=r._lenis;let s,o,a,l,c,u,f,h,d,_;if(n-(i.time??0)>2e3){i.time=Date.now();const w=window.getComputedStyle(r);if(i.computedStyle=w,s=["auto","overlay","scroll"].includes(w.overflowX),o=["auto","overlay","scroll"].includes(w.overflowY),c=["auto"].includes(w.overscrollBehaviorX),u=["auto"].includes(w.overscrollBehaviorY),i.hasOverflowX=s,i.hasOverflowY=o,!(s||o))return!1;f=r.scrollWidth,h=r.scrollHeight,d=r.clientWidth,_=r.clientHeight,a=f>d,l=h>_,i.isScrollableX=a,i.isScrollableY=l,i.scrollWidth=f,i.scrollHeight=h,i.clientWidth=d,i.clientHeight=_,i.hasOverscrollBehaviorX=c,i.hasOverscrollBehaviorY=u}else a=i.isScrollableX,l=i.isScrollableY,s=i.hasOverflowX,o=i.hasOverflowY,f=i.scrollWidth,h=i.scrollHeight,d=i.clientWidth,_=i.clientHeight,c=i.hasOverscrollBehaviorX,u=i.hasOverscrollBehaviorY;if(!(s&&a||o&&l))return!1;const g=Math.abs(t)>=Math.abs(e)?"horizontal":"vertical";let m,p,y,E,v,C;if(g==="horizontal")m=Math.round(r.scrollLeft),p=f-d,y=t,E=s,v=a,C=c;else if(g==="vertical")m=Math.round(r.scrollTop),p=h-_,y=e,E=o,v=l,C=u;else return!1;return!C&&(m>=p||m<=0)?!0:(y>0?m<p:m>0)&&E&&v}get rootElement(){return this.options.wrapper===window?document.documentElement:this.options.wrapper}get limit(){return this.options.naiveDimensions?this.isHorizontal?this.rootElement.scrollWidth-this.rootElement.clientWidth:this.rootElement.scrollHeight-this.rootElement.clientHeight:this.dimensions.limit[this.isHorizontal?"x":"y"]}get isHorizontal(){return this.options.orientation==="horizontal"}get actualScroll(){const r=this.options.wrapper;return this.isHorizontal?r.scrollX??r.scrollLeft:r.scrollY??r.scrollTop}get scroll(){return this.options.infinite?V_(this.animatedScroll,this.limit):this.animatedScroll}get progress(){return this.limit===0?1:this.scroll/this.limit}get isScrolling(){return this._isScrolling}set isScrolling(r){this._isScrolling!==r&&(this._isScrolling=r,this.updateClassName())}get isStopped(){return this._isStopped}set isStopped(r){this._isStopped!==r&&(this._isStopped=r,this.updateClassName())}get isLocked(){return this._isLocked}set isLocked(r){this._isLocked!==r&&(this._isLocked=r,this.updateClassName())}get isSmooth(){return this.isScrolling==="smooth"}get prefersReducedMotion(){return this.options.respectReducedMotion&&this.reducedMotionMediaQuery.matches}get className(){let r="lenis";return this.options.autoToggle&&(r+=" lenis-autoToggle"),this.isStopped&&(r+=" lenis-stopped"),this.isLocked&&(r+=" lenis-locked"),this.isScrolling&&(r+=" lenis-scrolling"),this.isScrolling==="smooth"&&(r+=" lenis-smooth"),r}updateClassName(){this.cleanUpClassName(),this.className.split(" ").forEach(r=>{this.rootElement.classList.add(r)})}cleanUpClassName(){for(const r of Array.from(this.rootElement.classList))(r==="lenis"||r.startsWith("lenis-"))&&this.rootElement.classList.remove(r)}};const fd=80;function K_(r){const t=r.textContent.trim().split(/\s+/);r.textContent="";const e=t.map(s=>{const o=document.createElement("span");return o.textContent=s,o.style.display="inline-block",r.append(o,document.createTextNode(" ")),o}),n=[];let i=null;return e.forEach(s=>{const o=Math.round(s.offsetTop);o!==i&&(n.push([]),i=o),n.at(-1).push(s.textContent)}),r.textContent="",n.map((s,o)=>{const a=document.createElement("span");a.className="reveal-line",a.style.setProperty("--d",`${o*fd}ms`);const l=document.createElement("span");return l.textContent=s.join(" "),a.appendChild(l),r.appendChild(a),a})}function dd(r){if(!r.length)return;const t=new IntersectionObserver(e=>{e.forEach(n=>{n.isIntersecting&&(n.target.classList.add("is-in"),t.unobserve(n.target))})},{rootMargin:"0px 0px -10% 0px",threshold:.01});r.forEach(e=>t.observe(e))}function Z_(){document.querySelectorAll("[data-reveal-lines]").forEach(t=>{dd(K_(t))});const r=new Map;document.querySelectorAll("[data-reveal]").forEach(t=>{const e=t.closest("[data-reveal-group]")||t.parentElement;r.has(e)||r.set(e,[]),r.get(e).push(t)}),r.forEach(t=>{t.forEach((e,n)=>e.style.setProperty("--d",`${n*fd}ms`)),dd(t)})}function j_(){const r=[...document.querySelectorAll("[data-count]")];if(!r.length)return;const t=window.matchMedia("(prefers-reduced-motion: reduce)").matches,e=i=>{const s=Number(i.dataset.count);if(t||!Number.isFinite(s)){i.textContent=String(s);return}const o=performance.now(),a=1200,l=c=>{const u=Math.min(1,(c-o)/a),f=1-Math.pow(1-u,4);i.textContent=String(Math.round(s*f)),u<1&&requestAnimationFrame(l)};requestAnimationFrame(l)},n=new IntersectionObserver(i=>{i.forEach(s=>{s.isIntersecting&&(e(s.target),n.unobserve(s.target))})},{threshold:.5});r.forEach(i=>n.observe(i))}as.registerPlugin(qt);const tr=window.matchMedia("(prefers-reduced-motion: reduce)").matches,pd=72;function J_(){var u;tr&&(document.body.dataset.motion="reduced");let r=null;tr||(r=new $_({duration:1.05,smoothWheel:!0,touchMultiplier:1.6}),r.on("scroll",qt.update),as.ticker.add(f=>r.raf(f*1e3)),as.ticker.lagSmoothing(0));const t=f=>{r?r.scrollTo(f,{offset:-pd}):f.scrollIntoView({block:"start"})};if(document.querySelectorAll('a[href*="#"]').forEach(f=>{const h=f.getAttribute("href")||"",d=h.slice(h.indexOf("#"));d.length<2||!(h.startsWith("#")||h.startsWith(location.pathname+"#"))||f.addEventListener("click",g=>{const m=document.querySelector(d);m&&(g.preventDefault(),t(m),i())})}),location.hash.length>1){const f=document.querySelector(location.hash);f&&requestAnimationFrame(()=>setTimeout(()=>t(f),60))}const e=document.querySelector(".site-header");if(e){const f=d=>e.dataset.stuck=d>40?"true":"false";qt.create({start:40,onUpdate:d=>f(d.scroll()),onRefresh:d=>f(d.scroll())});const h=[...document.querySelectorAll(".section-light")];if(h.length){const d=new Set,_=new IntersectionObserver(g=>{g.forEach(m=>{m.isIntersecting?d.add(m.target):d.delete(m.target)}),e.dataset.theme=d.size?"light":"dark"},{rootMargin:`0px 0px -${Math.max(0,window.innerHeight-pd)}px 0px`});h.forEach(g=>_.observe(g))}else e.dataset.theme="dark"}const n=document.querySelector("[data-menu-toggle]");function i(){document.body.dataset.menu="closed",n==null||n.setAttribute("aria-expanded","false")}n==null||n.addEventListener("click",()=>{const f=document.body.dataset.menu==="open";document.body.dataset.menu=f?"closed":"open",n.setAttribute("aria-expanded",String(!f))});const s=[...document.querySelectorAll("[data-nav-group]")],o=()=>{const f=s.some(h=>h.dataset.open==="true");e==null||e.setAttribute("data-nav-open",String(f))},a=f=>{s.forEach(h=>{var d;h!==f&&(h.dataset.open="false",(d=h.querySelector("[data-nav-toggle]"))==null||d.setAttribute("aria-expanded","false"))}),o()};s.forEach(f=>{const h=f.querySelector("[data-nav-toggle]");f.dataset.open="false",h==null||h.addEventListener("click",()=>{const d=f.dataset.open==="true";a(f),f.dataset.open=String(!d),h.setAttribute("aria-expanded",String(!d)),o()}),f.addEventListener("pointerenter",d=>{d.pointerType==="mouse"&&(a(f),f.dataset.open="true",h==null||h.setAttribute("aria-expanded","true"),o())}),f.addEventListener("pointerleave",d=>{d.pointerType==="mouse"&&(f.dataset.open="false",h==null||h.setAttribute("aria-expanded","false"),o())}),f.addEventListener("focusout",d=>{f.contains(d.relatedTarget)||(f.dataset.open="false",h==null||h.setAttribute("aria-expanded","false"),o())})}),document.addEventListener("keydown",f=>{f.key==="Escape"&&(a(null),i())}),document.addEventListener("click",f=>{f.target.closest("[data-nav-group]")||a(null)});const l=location.pathname.replace(/index\.html$/,"");document.querySelectorAll('.site-header a[href^="/"]').forEach(f=>{var d,_;const h=f.getAttribute("href");!h||h==="/"||h.includes("#")||l.startsWith(h)&&(f.setAttribute("aria-current","page"),(_=(d=f.closest("[data-nav-group]"))==null?void 0:d.querySelector("[data-nav-toggle]"))==null||_.setAttribute("data-section-active","true"))}),tr||document.querySelectorAll("[data-parallax]").forEach(f=>{as.fromTo(f,{yPercent:-9},{yPercent:9,ease:"none",scrollTrigger:{trigger:f.closest(".band")||f.parentElement,start:"top bottom",end:"bottom top",scrub:!0}})}),Z_(),j_();const c=document.querySelector("[data-year]");return c&&(c.textContent=String(new Date().getFullYear())),window.addEventListener("load",()=>qt.refresh()),(u=document.fonts)==null||u.ready.then(()=>qt.refresh()),requestAnimationFrame(()=>requestAnimationFrame(()=>window.dispatchEvent(new Event("teamit:ready")))),{gsap:as,ScrollTrigger:qt,lenis:r}}/**
 * @license
 * Copyright 2010-2024 Three.js Authors
 * SPDX-License-Identifier: MIT
 */const Tc="170",Q_=0,md=1,tg=2,_d=1,eg=2,wi=3,er=0,bn=1,Ri=2,nr=0,xs=1,gd=2,vd=3,xd=4,ng=5,Lr=100,ig=101,rg=102,sg=103,og=104,ag=200,lg=201,cg=202,ug=203,bc=204,Ac=205,hg=206,fg=207,dg=208,pg=209,mg=210,_g=211,gg=212,vg=213,xg=214,wc=0,Rc=1,Cc=2,Ss=3,Pc=4,Dc=5,Lc=6,Ic=7,Sd=0,Sg=1,Mg=2,ir=0,yg=1,Eg=2,Tg=3,bg=4,Ag=5,wg=6,Rg=7,Md=300,Ms=301,ys=302,Uc=303,Nc=304,Ia=306,Fc=1e3,Ir=1001,Oc=1002,zn=1003,Cg=1004,Ua=1005,gi=1006,Bc=1007,Ur=1008,Ci=1009,yd=1010,Ed=1011,Lo=1012,zc=1013,Nr=1014,vi=1015,Io=1016,kc=1017,Hc=1018,Es=1020,Td=35902,bd=1021,Ad=1022,ei=1023,wd=1024,Rd=1025,Ts=1026,bs=1027,Vc=1028,Gc=1029,Cd=1030,Wc=1031,Xc=1033,Na=33776,Fa=33777,Oa=33778,Ba=33779,Yc=35840,qc=35841,$c=35842,Kc=35843,Zc=36196,jc=37492,Jc=37496,Qc=37808,tu=37809,eu=37810,nu=37811,iu=37812,ru=37813,su=37814,ou=37815,au=37816,lu=37817,cu=37818,uu=37819,hu=37820,fu=37821,za=36492,du=36494,pu=36495,Pd=36283,mu=36284,_u=36285,gu=36286,Pg=3200,Dg=3201,Lg=0,Ig=1,rr="",Zn="srgb",As="srgb-linear",ka="linear",ge="srgb",ws=7680,Dd=519,Ug=512,Ng=513,Fg=514,Ld=515,Og=516,Bg=517,zg=518,kg=519,Id=35044,Ud=35048,Nd="300 es",Pi=2e3,Ha=2001;class Rs{addEventListener(t,e){this._listeners===void 0&&(this._listeners={});const n=this._listeners;n[t]===void 0&&(n[t]=[]),n[t].indexOf(e)===-1&&n[t].push(e)}hasEventListener(t,e){if(this._listeners===void 0)return!1;const n=this._listeners;return n[t]!==void 0&&n[t].indexOf(e)!==-1}removeEventListener(t,e){if(this._listeners===void 0)return;const i=this._listeners[t];if(i!==void 0){const s=i.indexOf(e);s!==-1&&i.splice(s,1)}}dispatchEvent(t){if(this._listeners===void 0)return;const n=this._listeners[t.type];if(n!==void 0){t.target=this;const i=n.slice(0);for(let s=0,o=i.length;s<o;s++)i[s].call(this,t);t.target=null}}}const sn=["00","01","02","03","04","05","06","07","08","09","0a","0b","0c","0d","0e","0f","10","11","12","13","14","15","16","17","18","19","1a","1b","1c","1d","1e","1f","20","21","22","23","24","25","26","27","28","29","2a","2b","2c","2d","2e","2f","30","31","32","33","34","35","36","37","38","39","3a","3b","3c","3d","3e","3f","40","41","42","43","44","45","46","47","48","49","4a","4b","4c","4d","4e","4f","50","51","52","53","54","55","56","57","58","59","5a","5b","5c","5d","5e","5f","60","61","62","63","64","65","66","67","68","69","6a","6b","6c","6d","6e","6f","70","71","72","73","74","75","76","77","78","79","7a","7b","7c","7d","7e","7f","80","81","82","83","84","85","86","87","88","89","8a","8b","8c","8d","8e","8f","90","91","92","93","94","95","96","97","98","99","9a","9b","9c","9d","9e","9f","a0","a1","a2","a3","a4","a5","a6","a7","a8","a9","aa","ab","ac","ad","ae","af","b0","b1","b2","b3","b4","b5","b6","b7","b8","b9","ba","bb","bc","bd","be","bf","c0","c1","c2","c3","c4","c5","c6","c7","c8","c9","ca","cb","cc","cd","ce","cf","d0","d1","d2","d3","d4","d5","d6","d7","d8","d9","da","db","dc","dd","de","df","e0","e1","e2","e3","e4","e5","e6","e7","e8","e9","ea","eb","ec","ed","ee","ef","f0","f1","f2","f3","f4","f5","f6","f7","f8","f9","fa","fb","fc","fd","fe","ff"],vu=Math.PI/180,xu=180/Math.PI;function Uo(){const r=Math.random()*4294967295|0,t=Math.random()*4294967295|0,e=Math.random()*4294967295|0,n=Math.random()*4294967295|0;return(sn[r&255]+sn[r>>8&255]+sn[r>>16&255]+sn[r>>24&255]+"-"+sn[t&255]+sn[t>>8&255]+"-"+sn[t>>16&15|64]+sn[t>>24&255]+"-"+sn[e&63|128]+sn[e>>8&255]+"-"+sn[e>>16&255]+sn[e>>24&255]+sn[n&255]+sn[n>>8&255]+sn[n>>16&255]+sn[n>>24&255]).toLowerCase()}function An(r,t,e){return Math.max(t,Math.min(e,r))}function Hg(r,t){return(r%t+t)%t}function Su(r,t,e){return(1-e)*r+e*t}function No(r,t){switch(t.constructor){case Float32Array:return r;case Uint32Array:return r/4294967295;case Uint16Array:return r/65535;case Uint8Array:return r/255;case Int32Array:return Math.max(r/2147483647,-1);case Int16Array:return Math.max(r/32767,-1);case Int8Array:return Math.max(r/127,-1);default:throw new Error("Invalid component type.")}}function wn(r,t){switch(t.constructor){case Float32Array:return r;case Uint32Array:return Math.round(r*4294967295);case Uint16Array:return Math.round(r*65535);case Uint8Array:return Math.round(r*255);case Int32Array:return Math.round(r*2147483647);case Int16Array:return Math.round(r*32767);case Int8Array:return Math.round(r*127);default:throw new Error("Invalid component type.")}}class Se{constructor(t=0,e=0){Se.prototype.isVector2=!0,this.x=t,this.y=e}get width(){return this.x}set width(t){this.x=t}get height(){return this.y}set height(t){this.y=t}set(t,e){return this.x=t,this.y=e,this}setScalar(t){return this.x=t,this.y=t,this}setX(t){return this.x=t,this}setY(t){return this.y=t,this}setComponent(t,e){switch(t){case 0:this.x=e;break;case 1:this.y=e;break;default:throw new Error("index is out of range: "+t)}return this}getComponent(t){switch(t){case 0:return this.x;case 1:return this.y;default:throw new Error("index is out of range: "+t)}}clone(){return new this.constructor(this.x,this.y)}copy(t){return this.x=t.x,this.y=t.y,this}add(t){return this.x+=t.x,this.y+=t.y,this}addScalar(t){return this.x+=t,this.y+=t,this}addVectors(t,e){return this.x=t.x+e.x,this.y=t.y+e.y,this}addScaledVector(t,e){return this.x+=t.x*e,this.y+=t.y*e,this}sub(t){return this.x-=t.x,this.y-=t.y,this}subScalar(t){return this.x-=t,this.y-=t,this}subVectors(t,e){return this.x=t.x-e.x,this.y=t.y-e.y,this}multiply(t){return this.x*=t.x,this.y*=t.y,this}multiplyScalar(t){return this.x*=t,this.y*=t,this}divide(t){return this.x/=t.x,this.y/=t.y,this}divideScalar(t){return this.multiplyScalar(1/t)}applyMatrix3(t){const e=this.x,n=this.y,i=t.elements;return this.x=i[0]*e+i[3]*n+i[6],this.y=i[1]*e+i[4]*n+i[7],this}min(t){return this.x=Math.min(this.x,t.x),this.y=Math.min(this.y,t.y),this}max(t){return this.x=Math.max(this.x,t.x),this.y=Math.max(this.y,t.y),this}clamp(t,e){return this.x=Math.max(t.x,Math.min(e.x,this.x)),this.y=Math.max(t.y,Math.min(e.y,this.y)),this}clampScalar(t,e){return this.x=Math.max(t,Math.min(e,this.x)),this.y=Math.max(t,Math.min(e,this.y)),this}clampLength(t,e){const n=this.length();return this.divideScalar(n||1).multiplyScalar(Math.max(t,Math.min(e,n)))}floor(){return this.x=Math.floor(this.x),this.y=Math.floor(this.y),this}ceil(){return this.x=Math.ceil(this.x),this.y=Math.ceil(this.y),this}round(){return this.x=Math.round(this.x),this.y=Math.round(this.y),this}roundToZero(){return this.x=Math.trunc(this.x),this.y=Math.trunc(this.y),this}negate(){return this.x=-this.x,this.y=-this.y,this}dot(t){return this.x*t.x+this.y*t.y}cross(t){return this.x*t.y-this.y*t.x}lengthSq(){return this.x*this.x+this.y*this.y}length(){return Math.sqrt(this.x*this.x+this.y*this.y)}manhattanLength(){return Math.abs(this.x)+Math.abs(this.y)}normalize(){return this.divideScalar(this.length()||1)}angle(){return Math.atan2(-this.y,-this.x)+Math.PI}angleTo(t){const e=Math.sqrt(this.lengthSq()*t.lengthSq());if(e===0)return Math.PI/2;const n=this.dot(t)/e;return Math.acos(An(n,-1,1))}distanceTo(t){return Math.sqrt(this.distanceToSquared(t))}distanceToSquared(t){const e=this.x-t.x,n=this.y-t.y;return e*e+n*n}manhattanDistanceTo(t){return Math.abs(this.x-t.x)+Math.abs(this.y-t.y)}setLength(t){return this.normalize().multiplyScalar(t)}lerp(t,e){return this.x+=(t.x-this.x)*e,this.y+=(t.y-this.y)*e,this}lerpVectors(t,e,n){return this.x=t.x+(e.x-t.x)*n,this.y=t.y+(e.y-t.y)*n,this}equals(t){return t.x===this.x&&t.y===this.y}fromArray(t,e=0){return this.x=t[e],this.y=t[e+1],this}toArray(t=[],e=0){return t[e]=this.x,t[e+1]=this.y,t}fromBufferAttribute(t,e){return this.x=t.getX(e),this.y=t.getY(e),this}rotateAround(t,e){const n=Math.cos(e),i=Math.sin(e),s=this.x-t.x,o=this.y-t.y;return this.x=s*n-o*i+t.x,this.y=s*i+o*n+t.y,this}random(){return this.x=Math.random(),this.y=Math.random(),this}*[Symbol.iterator](){yield this.x,yield this.y}}class Zt{constructor(t,e,n,i,s,o,a,l,c){Zt.prototype.isMatrix3=!0,this.elements=[1,0,0,0,1,0,0,0,1],t!==void 0&&this.set(t,e,n,i,s,o,a,l,c)}set(t,e,n,i,s,o,a,l,c){const u=this.elements;return u[0]=t,u[1]=i,u[2]=a,u[3]=e,u[4]=s,u[5]=l,u[6]=n,u[7]=o,u[8]=c,this}identity(){return this.set(1,0,0,0,1,0,0,0,1),this}copy(t){const e=this.elements,n=t.elements;return e[0]=n[0],e[1]=n[1],e[2]=n[2],e[3]=n[3],e[4]=n[4],e[5]=n[5],e[6]=n[6],e[7]=n[7],e[8]=n[8],this}extractBasis(t,e,n){return t.setFromMatrix3Column(this,0),e.setFromMatrix3Column(this,1),n.setFromMatrix3Column(this,2),this}setFromMatrix4(t){const e=t.elements;return this.set(e[0],e[4],e[8],e[1],e[5],e[9],e[2],e[6],e[10]),this}multiply(t){return this.multiplyMatrices(this,t)}premultiply(t){return this.multiplyMatrices(t,this)}multiplyMatrices(t,e){const n=t.elements,i=e.elements,s=this.elements,o=n[0],a=n[3],l=n[6],c=n[1],u=n[4],f=n[7],h=n[2],d=n[5],_=n[8],g=i[0],m=i[3],p=i[6],y=i[1],E=i[4],v=i[7],C=i[2],w=i[5],b=i[8];return s[0]=o*g+a*y+l*C,s[3]=o*m+a*E+l*w,s[6]=o*p+a*v+l*b,s[1]=c*g+u*y+f*C,s[4]=c*m+u*E+f*w,s[7]=c*p+u*v+f*b,s[2]=h*g+d*y+_*C,s[5]=h*m+d*E+_*w,s[8]=h*p+d*v+_*b,this}multiplyScalar(t){const e=this.elements;return e[0]*=t,e[3]*=t,e[6]*=t,e[1]*=t,e[4]*=t,e[7]*=t,e[2]*=t,e[5]*=t,e[8]*=t,this}determinant(){const t=this.elements,e=t[0],n=t[1],i=t[2],s=t[3],o=t[4],a=t[5],l=t[6],c=t[7],u=t[8];return e*o*u-e*a*c-n*s*u+n*a*l+i*s*c-i*o*l}invert(){const t=this.elements,e=t[0],n=t[1],i=t[2],s=t[3],o=t[4],a=t[5],l=t[6],c=t[7],u=t[8],f=u*o-a*c,h=a*l-u*s,d=c*s-o*l,_=e*f+n*h+i*d;if(_===0)return this.set(0,0,0,0,0,0,0,0,0);const g=1/_;return t[0]=f*g,t[1]=(i*c-u*n)*g,t[2]=(a*n-i*o)*g,t[3]=h*g,t[4]=(u*e-i*l)*g,t[5]=(i*s-a*e)*g,t[6]=d*g,t[7]=(n*l-c*e)*g,t[8]=(o*e-n*s)*g,this}transpose(){let t;const e=this.elements;return t=e[1],e[1]=e[3],e[3]=t,t=e[2],e[2]=e[6],e[6]=t,t=e[5],e[5]=e[7],e[7]=t,this}getNormalMatrix(t){return this.setFromMatrix4(t).invert().transpose()}transposeIntoArray(t){const e=this.elements;return t[0]=e[0],t[1]=e[3],t[2]=e[6],t[3]=e[1],t[4]=e[4],t[5]=e[7],t[6]=e[2],t[7]=e[5],t[8]=e[8],this}setUvTransform(t,e,n,i,s,o,a){const l=Math.cos(s),c=Math.sin(s);return this.set(n*l,n*c,-n*(l*o+c*a)+o+t,-i*c,i*l,-i*(-c*o+l*a)+a+e,0,0,1),this}scale(t,e){return this.premultiply(Mu.makeScale(t,e)),this}rotate(t){return this.premultiply(Mu.makeRotation(-t)),this}translate(t,e){return this.premultiply(Mu.makeTranslation(t,e)),this}makeTranslation(t,e){return t.isVector2?this.set(1,0,t.x,0,1,t.y,0,0,1):this.set(1,0,t,0,1,e,0,0,1),this}makeRotation(t){const e=Math.cos(t),n=Math.sin(t);return this.set(e,-n,0,n,e,0,0,0,1),this}makeScale(t,e){return this.set(t,0,0,0,e,0,0,0,1),this}equals(t){const e=this.elements,n=t.elements;for(let i=0;i<9;i++)if(e[i]!==n[i])return!1;return!0}fromArray(t,e=0){for(let n=0;n<9;n++)this.elements[n]=t[n+e];return this}toArray(t=[],e=0){const n=this.elements;return t[e]=n[0],t[e+1]=n[1],t[e+2]=n[2],t[e+3]=n[3],t[e+4]=n[4],t[e+5]=n[5],t[e+6]=n[6],t[e+7]=n[7],t[e+8]=n[8],t}clone(){return new this.constructor().fromArray(this.elements)}}const Mu=new Zt;function Fd(r){for(let t=r.length-1;t>=0;--t)if(r[t]>=65535)return!0;return!1}function Va(r){return document.createElementNS("http://www.w3.org/1999/xhtml",r)}function Vg(){const r=Va("canvas");return r.style.display="block",r}const Od={};function Fo(r){r in Od||(Od[r]=!0,console.warn(r))}function Gg(r,t,e){return new Promise(function(n,i){function s(){switch(r.clientWaitSync(t,r.SYNC_FLUSH_COMMANDS_BIT,0)){case r.WAIT_FAILED:i();break;case r.TIMEOUT_EXPIRED:setTimeout(s,e);break;default:n()}}setTimeout(s,e)})}function Wg(r){const t=r.elements;t[2]=.5*t[2]+.5*t[3],t[6]=.5*t[6]+.5*t[7],t[10]=.5*t[10]+.5*t[11],t[14]=.5*t[14]+.5*t[15]}function Xg(r){const t=r.elements;t[11]===-1?(t[10]=-t[10]-1,t[14]=-t[14]):(t[10]=-t[10],t[14]=-t[14]+1)}const ae={enabled:!0,workingColorSpace:As,spaces:{},convert:function(r,t,e){return this.enabled===!1||t===e||!t||!e||(this.spaces[t].transfer===ge&&(r.r=Di(r.r),r.g=Di(r.g),r.b=Di(r.b)),this.spaces[t].primaries!==this.spaces[e].primaries&&(r.applyMatrix3(this.spaces[t].toXYZ),r.applyMatrix3(this.spaces[e].fromXYZ)),this.spaces[e].transfer===ge&&(r.r=Cs(r.r),r.g=Cs(r.g),r.b=Cs(r.b))),r},fromWorkingColorSpace:function(r,t){return this.convert(r,this.workingColorSpace,t)},toWorkingColorSpace:function(r,t){return this.convert(r,t,this.workingColorSpace)},getPrimaries:function(r){return this.spaces[r].primaries},getTransfer:function(r){return r===rr?ka:this.spaces[r].transfer},getLuminanceCoefficients:function(r,t=this.workingColorSpace){return r.fromArray(this.spaces[t].luminanceCoefficients)},define:function(r){Object.assign(this.spaces,r)},_getMatrix:function(r,t,e){return r.copy(this.spaces[t].toXYZ).multiply(this.spaces[e].fromXYZ)},_getDrawingBufferColorSpace:function(r){return this.spaces[r].outputColorSpaceConfig.drawingBufferColorSpace},_getUnpackColorSpace:function(r=this.workingColorSpace){return this.spaces[r].workingColorSpaceConfig.unpackColorSpace}};function Di(r){return r<.04045?r*.0773993808:Math.pow(r*.9478672986+.0521327014,2.4)}function Cs(r){return r<.0031308?r*12.92:1.055*Math.pow(r,.41666)-.055}const Bd=[.64,.33,.3,.6,.15,.06],zd=[.2126,.7152,.0722],kd=[.3127,.329],Hd=new Zt().set(.4123908,.3575843,.1804808,.212639,.7151687,.0721923,.0193308,.1191948,.9505322),Vd=new Zt().set(3.2409699,-1.5373832,-.4986108,-.9692436,1.8759675,.0415551,.0556301,-.203977,1.0569715);ae.define({[As]:{primaries:Bd,whitePoint:kd,transfer:ka,toXYZ:Hd,fromXYZ:Vd,luminanceCoefficients:zd,workingColorSpaceConfig:{unpackColorSpace:Zn},outputColorSpaceConfig:{drawingBufferColorSpace:Zn}},[Zn]:{primaries:Bd,whitePoint:kd,transfer:ge,toXYZ:Hd,fromXYZ:Vd,luminanceCoefficients:zd,outputColorSpaceConfig:{drawingBufferColorSpace:Zn}}});let Ps;class Yg{static getDataURL(t){if(/^data:/i.test(t.src)||typeof HTMLCanvasElement>"u")return t.src;let e;if(t instanceof HTMLCanvasElement)e=t;else{Ps===void 0&&(Ps=Va("canvas")),Ps.width=t.width,Ps.height=t.height;const n=Ps.getContext("2d");t instanceof ImageData?n.putImageData(t,0,0):n.drawImage(t,0,0,t.width,t.height),e=Ps}return e.width>2048||e.height>2048?(console.warn("THREE.ImageUtils.getDataURL: Image converted to jpg for performance reasons",t),e.toDataURL("image/jpeg",.6)):e.toDataURL("image/png")}static sRGBToLinear(t){if(typeof HTMLImageElement<"u"&&t instanceof HTMLImageElement||typeof HTMLCanvasElement<"u"&&t instanceof HTMLCanvasElement||typeof ImageBitmap<"u"&&t instanceof ImageBitmap){const e=Va("canvas");e.width=t.width,e.height=t.height;const n=e.getContext("2d");n.drawImage(t,0,0,t.width,t.height);const i=n.getImageData(0,0,t.width,t.height),s=i.data;for(let o=0;o<s.length;o++)s[o]=Di(s[o]/255)*255;return n.putImageData(i,0,0),e}else if(t.data){const e=t.data.slice(0);for(let n=0;n<e.length;n++)e instanceof Uint8Array||e instanceof Uint8ClampedArray?e[n]=Math.floor(Di(e[n]/255)*255):e[n]=Di(e[n]);return{data:e,width:t.width,height:t.height}}else return console.warn("THREE.ImageUtils.sRGBToLinear(): Unsupported image type. No color space conversion applied."),t}}let qg=0;class Gd{constructor(t=null){this.isSource=!0,Object.defineProperty(this,"id",{value:qg++}),this.uuid=Uo(),this.data=t,this.dataReady=!0,this.version=0}set needsUpdate(t){t===!0&&this.version++}toJSON(t){const e=t===void 0||typeof t=="string";if(!e&&t.images[this.uuid]!==void 0)return t.images[this.uuid];const n={uuid:this.uuid,url:""},i=this.data;if(i!==null){let s;if(Array.isArray(i)){s=[];for(let o=0,a=i.length;o<a;o++)i[o].isDataTexture?s.push(yu(i[o].image)):s.push(yu(i[o]))}else s=yu(i);n.url=s}return e||(t.images[this.uuid]=n),n}}function yu(r){return typeof HTMLImageElement<"u"&&r instanceof HTMLImageElement||typeof HTMLCanvasElement<"u"&&r instanceof HTMLCanvasElement||typeof ImageBitmap<"u"&&r instanceof ImageBitmap?Yg.getDataURL(r):r.data?{data:Array.from(r.data),width:r.width,height:r.height,type:r.data.constructor.name}:(console.warn("THREE.Texture: Unable to serialize Texture."),{})}let $g=0;class pn extends Rs{constructor(t=pn.DEFAULT_IMAGE,e=pn.DEFAULT_MAPPING,n=Ir,i=Ir,s=gi,o=Ur,a=ei,l=Ci,c=pn.DEFAULT_ANISOTROPY,u=rr){super(),this.isTexture=!0,Object.defineProperty(this,"id",{value:$g++}),this.uuid=Uo(),this.name="",this.source=new Gd(t),this.mipmaps=[],this.mapping=e,this.channel=0,this.wrapS=n,this.wrapT=i,this.magFilter=s,this.minFilter=o,this.anisotropy=c,this.format=a,this.internalFormat=null,this.type=l,this.offset=new Se(0,0),this.repeat=new Se(1,1),this.center=new Se(0,0),this.rotation=0,this.matrixAutoUpdate=!0,this.matrix=new Zt,this.generateMipmaps=!0,this.premultiplyAlpha=!1,this.flipY=!0,this.unpackAlignment=4,this.colorSpace=u,this.userData={},this.version=0,this.onUpdate=null,this.isRenderTargetTexture=!1,this.pmremVersion=0}get image(){return this.source.data}set image(t=null){this.source.data=t}updateMatrix(){this.matrix.setUvTransform(this.offset.x,this.offset.y,this.repeat.x,this.repeat.y,this.rotation,this.center.x,this.center.y)}clone(){return new this.constructor().copy(this)}copy(t){return this.name=t.name,this.source=t.source,this.mipmaps=t.mipmaps.slice(0),this.mapping=t.mapping,this.channel=t.channel,this.wrapS=t.wrapS,this.wrapT=t.wrapT,this.magFilter=t.magFilter,this.minFilter=t.minFilter,this.anisotropy=t.anisotropy,this.format=t.format,this.internalFormat=t.internalFormat,this.type=t.type,this.offset.copy(t.offset),this.repeat.copy(t.repeat),this.center.copy(t.center),this.rotation=t.rotation,this.matrixAutoUpdate=t.matrixAutoUpdate,this.matrix.copy(t.matrix),this.generateMipmaps=t.generateMipmaps,this.premultiplyAlpha=t.premultiplyAlpha,this.flipY=t.flipY,this.unpackAlignment=t.unpackAlignment,this.colorSpace=t.colorSpace,this.userData=JSON.parse(JSON.stringify(t.userData)),this.needsUpdate=!0,this}toJSON(t){const e=t===void 0||typeof t=="string";if(!e&&t.textures[this.uuid]!==void 0)return t.textures[this.uuid];const n={metadata:{version:4.6,type:"Texture",generator:"Texture.toJSON"},uuid:this.uuid,name:this.name,image:this.source.toJSON(t).uuid,mapping:this.mapping,channel:this.channel,repeat:[this.repeat.x,this.repeat.y],offset:[this.offset.x,this.offset.y],center:[this.center.x,this.center.y],rotation:this.rotation,wrap:[this.wrapS,this.wrapT],format:this.format,internalFormat:this.internalFormat,type:this.type,colorSpace:this.colorSpace,minFilter:this.minFilter,magFilter:this.magFilter,anisotropy:this.anisotropy,flipY:this.flipY,generateMipmaps:this.generateMipmaps,premultiplyAlpha:this.premultiplyAlpha,unpackAlignment:this.unpackAlignment};return Object.keys(this.userData).length>0&&(n.userData=this.userData),e||(t.textures[this.uuid]=n),n}dispose(){this.dispatchEvent({type:"dispose"})}transformUv(t){if(this.mapping!==Md)return t;if(t.applyMatrix3(this.matrix),t.x<0||t.x>1)switch(this.wrapS){case Fc:t.x=t.x-Math.floor(t.x);break;case Ir:t.x=t.x<0?0:1;break;case Oc:Math.abs(Math.floor(t.x)%2)===1?t.x=Math.ceil(t.x)-t.x:t.x=t.x-Math.floor(t.x);break}if(t.y<0||t.y>1)switch(this.wrapT){case Fc:t.y=t.y-Math.floor(t.y);break;case Ir:t.y=t.y<0?0:1;break;case Oc:Math.abs(Math.floor(t.y)%2)===1?t.y=Math.ceil(t.y)-t.y:t.y=t.y-Math.floor(t.y);break}return this.flipY&&(t.y=1-t.y),t}set needsUpdate(t){t===!0&&(this.version++,this.source.needsUpdate=!0)}set needsPMREMUpdate(t){t===!0&&this.pmremVersion++}}pn.DEFAULT_IMAGE=null,pn.DEFAULT_MAPPING=Md,pn.DEFAULT_ANISOTROPY=1;class Fe{constructor(t=0,e=0,n=0,i=1){Fe.prototype.isVector4=!0,this.x=t,this.y=e,this.z=n,this.w=i}get width(){return this.z}set width(t){this.z=t}get height(){return this.w}set height(t){this.w=t}set(t,e,n,i){return this.x=t,this.y=e,this.z=n,this.w=i,this}setScalar(t){return this.x=t,this.y=t,this.z=t,this.w=t,this}setX(t){return this.x=t,this}setY(t){return this.y=t,this}setZ(t){return this.z=t,this}setW(t){return this.w=t,this}setComponent(t,e){switch(t){case 0:this.x=e;break;case 1:this.y=e;break;case 2:this.z=e;break;case 3:this.w=e;break;default:throw new Error("index is out of range: "+t)}return this}getComponent(t){switch(t){case 0:return this.x;case 1:return this.y;case 2:return this.z;case 3:return this.w;default:throw new Error("index is out of range: "+t)}}clone(){return new this.constructor(this.x,this.y,this.z,this.w)}copy(t){return this.x=t.x,this.y=t.y,this.z=t.z,this.w=t.w!==void 0?t.w:1,this}add(t){return this.x+=t.x,this.y+=t.y,this.z+=t.z,this.w+=t.w,this}addScalar(t){return this.x+=t,this.y+=t,this.z+=t,this.w+=t,this}addVectors(t,e){return this.x=t.x+e.x,this.y=t.y+e.y,this.z=t.z+e.z,this.w=t.w+e.w,this}addScaledVector(t,e){return this.x+=t.x*e,this.y+=t.y*e,this.z+=t.z*e,this.w+=t.w*e,this}sub(t){return this.x-=t.x,this.y-=t.y,this.z-=t.z,this.w-=t.w,this}subScalar(t){return this.x-=t,this.y-=t,this.z-=t,this.w-=t,this}subVectors(t,e){return this.x=t.x-e.x,this.y=t.y-e.y,this.z=t.z-e.z,this.w=t.w-e.w,this}multiply(t){return this.x*=t.x,this.y*=t.y,this.z*=t.z,this.w*=t.w,this}multiplyScalar(t){return this.x*=t,this.y*=t,this.z*=t,this.w*=t,this}applyMatrix4(t){const e=this.x,n=this.y,i=this.z,s=this.w,o=t.elements;return this.x=o[0]*e+o[4]*n+o[8]*i+o[12]*s,this.y=o[1]*e+o[5]*n+o[9]*i+o[13]*s,this.z=o[2]*e+o[6]*n+o[10]*i+o[14]*s,this.w=o[3]*e+o[7]*n+o[11]*i+o[15]*s,this}divide(t){return this.x/=t.x,this.y/=t.y,this.z/=t.z,this.w/=t.w,this}divideScalar(t){return this.multiplyScalar(1/t)}setAxisAngleFromQuaternion(t){this.w=2*Math.acos(t.w);const e=Math.sqrt(1-t.w*t.w);return e<1e-4?(this.x=1,this.y=0,this.z=0):(this.x=t.x/e,this.y=t.y/e,this.z=t.z/e),this}setAxisAngleFromRotationMatrix(t){let e,n,i,s;const l=t.elements,c=l[0],u=l[4],f=l[8],h=l[1],d=l[5],_=l[9],g=l[2],m=l[6],p=l[10];if(Math.abs(u-h)<.01&&Math.abs(f-g)<.01&&Math.abs(_-m)<.01){if(Math.abs(u+h)<.1&&Math.abs(f+g)<.1&&Math.abs(_+m)<.1&&Math.abs(c+d+p-3)<.1)return this.set(1,0,0,0),this;e=Math.PI;const E=(c+1)/2,v=(d+1)/2,C=(p+1)/2,w=(u+h)/4,b=(f+g)/4,R=(_+m)/4;return E>v&&E>C?E<.01?(n=0,i=.707106781,s=.707106781):(n=Math.sqrt(E),i=w/n,s=b/n):v>C?v<.01?(n=.707106781,i=0,s=.707106781):(i=Math.sqrt(v),n=w/i,s=R/i):C<.01?(n=.707106781,i=.707106781,s=0):(s=Math.sqrt(C),n=b/s,i=R/s),this.set(n,i,s,e),this}let y=Math.sqrt((m-_)*(m-_)+(f-g)*(f-g)+(h-u)*(h-u));return Math.abs(y)<.001&&(y=1),this.x=(m-_)/y,this.y=(f-g)/y,this.z=(h-u)/y,this.w=Math.acos((c+d+p-1)/2),this}setFromMatrixPosition(t){const e=t.elements;return this.x=e[12],this.y=e[13],this.z=e[14],this.w=e[15],this}min(t){return this.x=Math.min(this.x,t.x),this.y=Math.min(this.y,t.y),this.z=Math.min(this.z,t.z),this.w=Math.min(this.w,t.w),this}max(t){return this.x=Math.max(this.x,t.x),this.y=Math.max(this.y,t.y),this.z=Math.max(this.z,t.z),this.w=Math.max(this.w,t.w),this}clamp(t,e){return this.x=Math.max(t.x,Math.min(e.x,this.x)),this.y=Math.max(t.y,Math.min(e.y,this.y)),this.z=Math.max(t.z,Math.min(e.z,this.z)),this.w=Math.max(t.w,Math.min(e.w,this.w)),this}clampScalar(t,e){return this.x=Math.max(t,Math.min(e,this.x)),this.y=Math.max(t,Math.min(e,this.y)),this.z=Math.max(t,Math.min(e,this.z)),this.w=Math.max(t,Math.min(e,this.w)),this}clampLength(t,e){const n=this.length();return this.divideScalar(n||1).multiplyScalar(Math.max(t,Math.min(e,n)))}floor(){return this.x=Math.floor(this.x),this.y=Math.floor(this.y),this.z=Math.floor(this.z),this.w=Math.floor(this.w),this}ceil(){return this.x=Math.ceil(this.x),this.y=Math.ceil(this.y),this.z=Math.ceil(this.z),this.w=Math.ceil(this.w),this}round(){return this.x=Math.round(this.x),this.y=Math.round(this.y),this.z=Math.round(this.z),this.w=Math.round(this.w),this}roundToZero(){return this.x=Math.trunc(this.x),this.y=Math.trunc(this.y),this.z=Math.trunc(this.z),this.w=Math.trunc(this.w),this}negate(){return this.x=-this.x,this.y=-this.y,this.z=-this.z,this.w=-this.w,this}dot(t){return this.x*t.x+this.y*t.y+this.z*t.z+this.w*t.w}lengthSq(){return this.x*this.x+this.y*this.y+this.z*this.z+this.w*this.w}length(){return Math.sqrt(this.x*this.x+this.y*this.y+this.z*this.z+this.w*this.w)}manhattanLength(){return Math.abs(this.x)+Math.abs(this.y)+Math.abs(this.z)+Math.abs(this.w)}normalize(){return this.divideScalar(this.length()||1)}setLength(t){return this.normalize().multiplyScalar(t)}lerp(t,e){return this.x+=(t.x-this.x)*e,this.y+=(t.y-this.y)*e,this.z+=(t.z-this.z)*e,this.w+=(t.w-this.w)*e,this}lerpVectors(t,e,n){return this.x=t.x+(e.x-t.x)*n,this.y=t.y+(e.y-t.y)*n,this.z=t.z+(e.z-t.z)*n,this.w=t.w+(e.w-t.w)*n,this}equals(t){return t.x===this.x&&t.y===this.y&&t.z===this.z&&t.w===this.w}fromArray(t,e=0){return this.x=t[e],this.y=t[e+1],this.z=t[e+2],this.w=t[e+3],this}toArray(t=[],e=0){return t[e]=this.x,t[e+1]=this.y,t[e+2]=this.z,t[e+3]=this.w,t}fromBufferAttribute(t,e){return this.x=t.getX(e),this.y=t.getY(e),this.z=t.getZ(e),this.w=t.getW(e),this}random(){return this.x=Math.random(),this.y=Math.random(),this.z=Math.random(),this.w=Math.random(),this}*[Symbol.iterator](){yield this.x,yield this.y,yield this.z,yield this.w}}class Kg extends Rs{constructor(t=1,e=1,n={}){super(),this.isRenderTarget=!0,this.width=t,this.height=e,this.depth=1,this.scissor=new Fe(0,0,t,e),this.scissorTest=!1,this.viewport=new Fe(0,0,t,e);const i={width:t,height:e,depth:1};n=Object.assign({generateMipmaps:!1,internalFormat:null,minFilter:gi,depthBuffer:!0,stencilBuffer:!1,resolveDepthBuffer:!0,resolveStencilBuffer:!0,depthTexture:null,samples:0,count:1},n);const s=new pn(i,n.mapping,n.wrapS,n.wrapT,n.magFilter,n.minFilter,n.format,n.type,n.anisotropy,n.colorSpace);s.flipY=!1,s.generateMipmaps=n.generateMipmaps,s.internalFormat=n.internalFormat,this.textures=[];const o=n.count;for(let a=0;a<o;a++)this.textures[a]=s.clone(),this.textures[a].isRenderTargetTexture=!0;this.depthBuffer=n.depthBuffer,this.stencilBuffer=n.stencilBuffer,this.resolveDepthBuffer=n.resolveDepthBuffer,this.resolveStencilBuffer=n.resolveStencilBuffer,this.depthTexture=n.depthTexture,this.samples=n.samples}get texture(){return this.textures[0]}set texture(t){this.textures[0]=t}setSize(t,e,n=1){if(this.width!==t||this.height!==e||this.depth!==n){this.width=t,this.height=e,this.depth=n;for(let i=0,s=this.textures.length;i<s;i++)this.textures[i].image.width=t,this.textures[i].image.height=e,this.textures[i].image.depth=n;this.dispose()}this.viewport.set(0,0,t,e),this.scissor.set(0,0,t,e)}clone(){return new this.constructor().copy(this)}copy(t){this.width=t.width,this.height=t.height,this.depth=t.depth,this.scissor.copy(t.scissor),this.scissorTest=t.scissorTest,this.viewport.copy(t.viewport),this.textures.length=0;for(let n=0,i=t.textures.length;n<i;n++)this.textures[n]=t.textures[n].clone(),this.textures[n].isRenderTargetTexture=!0;const e=Object.assign({},t.texture.image);return this.texture.source=new Gd(e),this.depthBuffer=t.depthBuffer,this.stencilBuffer=t.stencilBuffer,this.resolveDepthBuffer=t.resolveDepthBuffer,this.resolveStencilBuffer=t.resolveStencilBuffer,t.depthTexture!==null&&(this.depthTexture=t.depthTexture.clone()),this.samples=t.samples,this}dispose(){this.dispatchEvent({type:"dispose"})}}class Fr extends Kg{constructor(t=1,e=1,n={}){super(t,e,n),this.isWebGLRenderTarget=!0}}class Wd extends pn{constructor(t=null,e=1,n=1,i=1){super(null),this.isDataArrayTexture=!0,this.image={data:t,width:e,height:n,depth:i},this.magFilter=zn,this.minFilter=zn,this.wrapR=Ir,this.generateMipmaps=!1,this.flipY=!1,this.unpackAlignment=1,this.layerUpdates=new Set}addLayerUpdate(t){this.layerUpdates.add(t)}clearLayerUpdates(){this.layerUpdates.clear()}}class Zg extends pn{constructor(t=null,e=1,n=1,i=1){super(null),this.isData3DTexture=!0,this.image={data:t,width:e,height:n,depth:i},this.magFilter=zn,this.minFilter=zn,this.wrapR=Ir,this.generateMipmaps=!1,this.flipY=!1,this.unpackAlignment=1}}class Oo{constructor(t=0,e=0,n=0,i=1){this.isQuaternion=!0,this._x=t,this._y=e,this._z=n,this._w=i}static slerpFlat(t,e,n,i,s,o,a){let l=n[i+0],c=n[i+1],u=n[i+2],f=n[i+3];const h=s[o+0],d=s[o+1],_=s[o+2],g=s[o+3];if(a===0){t[e+0]=l,t[e+1]=c,t[e+2]=u,t[e+3]=f;return}if(a===1){t[e+0]=h,t[e+1]=d,t[e+2]=_,t[e+3]=g;return}if(f!==g||l!==h||c!==d||u!==_){let m=1-a;const p=l*h+c*d+u*_+f*g,y=p>=0?1:-1,E=1-p*p;if(E>Number.EPSILON){const C=Math.sqrt(E),w=Math.atan2(C,p*y);m=Math.sin(m*w)/C,a=Math.sin(a*w)/C}const v=a*y;if(l=l*m+h*v,c=c*m+d*v,u=u*m+_*v,f=f*m+g*v,m===1-a){const C=1/Math.sqrt(l*l+c*c+u*u+f*f);l*=C,c*=C,u*=C,f*=C}}t[e]=l,t[e+1]=c,t[e+2]=u,t[e+3]=f}static multiplyQuaternionsFlat(t,e,n,i,s,o){const a=n[i],l=n[i+1],c=n[i+2],u=n[i+3],f=s[o],h=s[o+1],d=s[o+2],_=s[o+3];return t[e]=a*_+u*f+l*d-c*h,t[e+1]=l*_+u*h+c*f-a*d,t[e+2]=c*_+u*d+a*h-l*f,t[e+3]=u*_-a*f-l*h-c*d,t}get x(){return this._x}set x(t){this._x=t,this._onChangeCallback()}get y(){return this._y}set y(t){this._y=t,this._onChangeCallback()}get z(){return this._z}set z(t){this._z=t,this._onChangeCallback()}get w(){return this._w}set w(t){this._w=t,this._onChangeCallback()}set(t,e,n,i){return this._x=t,this._y=e,this._z=n,this._w=i,this._onChangeCallback(),this}clone(){return new this.constructor(this._x,this._y,this._z,this._w)}copy(t){return this._x=t.x,this._y=t.y,this._z=t.z,this._w=t.w,this._onChangeCallback(),this}setFromEuler(t,e=!0){const n=t._x,i=t._y,s=t._z,o=t._order,a=Math.cos,l=Math.sin,c=a(n/2),u=a(i/2),f=a(s/2),h=l(n/2),d=l(i/2),_=l(s/2);switch(o){case"XYZ":this._x=h*u*f+c*d*_,this._y=c*d*f-h*u*_,this._z=c*u*_+h*d*f,this._w=c*u*f-h*d*_;break;case"YXZ":this._x=h*u*f+c*d*_,this._y=c*d*f-h*u*_,this._z=c*u*_-h*d*f,this._w=c*u*f+h*d*_;break;case"ZXY":this._x=h*u*f-c*d*_,this._y=c*d*f+h*u*_,this._z=c*u*_+h*d*f,this._w=c*u*f-h*d*_;break;case"ZYX":this._x=h*u*f-c*d*_,this._y=c*d*f+h*u*_,this._z=c*u*_-h*d*f,this._w=c*u*f+h*d*_;break;case"YZX":this._x=h*u*f+c*d*_,this._y=c*d*f+h*u*_,this._z=c*u*_-h*d*f,this._w=c*u*f-h*d*_;break;case"XZY":this._x=h*u*f-c*d*_,this._y=c*d*f-h*u*_,this._z=c*u*_+h*d*f,this._w=c*u*f+h*d*_;break;default:console.warn("THREE.Quaternion: .setFromEuler() encountered an unknown order: "+o)}return e===!0&&this._onChangeCallback(),this}setFromAxisAngle(t,e){const n=e/2,i=Math.sin(n);return this._x=t.x*i,this._y=t.y*i,this._z=t.z*i,this._w=Math.cos(n),this._onChangeCallback(),this}setFromRotationMatrix(t){const e=t.elements,n=e[0],i=e[4],s=e[8],o=e[1],a=e[5],l=e[9],c=e[2],u=e[6],f=e[10],h=n+a+f;if(h>0){const d=.5/Math.sqrt(h+1);this._w=.25/d,this._x=(u-l)*d,this._y=(s-c)*d,this._z=(o-i)*d}else if(n>a&&n>f){const d=2*Math.sqrt(1+n-a-f);this._w=(u-l)/d,this._x=.25*d,this._y=(i+o)/d,this._z=(s+c)/d}else if(a>f){const d=2*Math.sqrt(1+a-n-f);this._w=(s-c)/d,this._x=(i+o)/d,this._y=.25*d,this._z=(l+u)/d}else{const d=2*Math.sqrt(1+f-n-a);this._w=(o-i)/d,this._x=(s+c)/d,this._y=(l+u)/d,this._z=.25*d}return this._onChangeCallback(),this}setFromUnitVectors(t,e){let n=t.dot(e)+1;return n<Number.EPSILON?(n=0,Math.abs(t.x)>Math.abs(t.z)?(this._x=-t.y,this._y=t.x,this._z=0,this._w=n):(this._x=0,this._y=-t.z,this._z=t.y,this._w=n)):(this._x=t.y*e.z-t.z*e.y,this._y=t.z*e.x-t.x*e.z,this._z=t.x*e.y-t.y*e.x,this._w=n),this.normalize()}angleTo(t){return 2*Math.acos(Math.abs(An(this.dot(t),-1,1)))}rotateTowards(t,e){const n=this.angleTo(t);if(n===0)return this;const i=Math.min(1,e/n);return this.slerp(t,i),this}identity(){return this.set(0,0,0,1)}invert(){return this.conjugate()}conjugate(){return this._x*=-1,this._y*=-1,this._z*=-1,this._onChangeCallback(),this}dot(t){return this._x*t._x+this._y*t._y+this._z*t._z+this._w*t._w}lengthSq(){return this._x*this._x+this._y*this._y+this._z*this._z+this._w*this._w}length(){return Math.sqrt(this._x*this._x+this._y*this._y+this._z*this._z+this._w*this._w)}normalize(){let t=this.length();return t===0?(this._x=0,this._y=0,this._z=0,this._w=1):(t=1/t,this._x=this._x*t,this._y=this._y*t,this._z=this._z*t,this._w=this._w*t),this._onChangeCallback(),this}multiply(t){return this.multiplyQuaternions(this,t)}premultiply(t){return this.multiplyQuaternions(t,this)}multiplyQuaternions(t,e){const n=t._x,i=t._y,s=t._z,o=t._w,a=e._x,l=e._y,c=e._z,u=e._w;return this._x=n*u+o*a+i*c-s*l,this._y=i*u+o*l+s*a-n*c,this._z=s*u+o*c+n*l-i*a,this._w=o*u-n*a-i*l-s*c,this._onChangeCallback(),this}slerp(t,e){if(e===0)return this;if(e===1)return this.copy(t);const n=this._x,i=this._y,s=this._z,o=this._w;let a=o*t._w+n*t._x+i*t._y+s*t._z;if(a<0?(this._w=-t._w,this._x=-t._x,this._y=-t._y,this._z=-t._z,a=-a):this.copy(t),a>=1)return this._w=o,this._x=n,this._y=i,this._z=s,this;const l=1-a*a;if(l<=Number.EPSILON){const d=1-e;return this._w=d*o+e*this._w,this._x=d*n+e*this._x,this._y=d*i+e*this._y,this._z=d*s+e*this._z,this.normalize(),this}const c=Math.sqrt(l),u=Math.atan2(c,a),f=Math.sin((1-e)*u)/c,h=Math.sin(e*u)/c;return this._w=o*f+this._w*h,this._x=n*f+this._x*h,this._y=i*f+this._y*h,this._z=s*f+this._z*h,this._onChangeCallback(),this}slerpQuaternions(t,e,n){return this.copy(t).slerp(e,n)}random(){const t=2*Math.PI*Math.random(),e=2*Math.PI*Math.random(),n=Math.random(),i=Math.sqrt(1-n),s=Math.sqrt(n);return this.set(i*Math.sin(t),i*Math.cos(t),s*Math.sin(e),s*Math.cos(e))}equals(t){return t._x===this._x&&t._y===this._y&&t._z===this._z&&t._w===this._w}fromArray(t,e=0){return this._x=t[e],this._y=t[e+1],this._z=t[e+2],this._w=t[e+3],this._onChangeCallback(),this}toArray(t=[],e=0){return t[e]=this._x,t[e+1]=this._y,t[e+2]=this._z,t[e+3]=this._w,t}fromBufferAttribute(t,e){return this._x=t.getX(e),this._y=t.getY(e),this._z=t.getZ(e),this._w=t.getW(e),this._onChangeCallback(),this}toJSON(){return this.toArray()}_onChange(t){return this._onChangeCallback=t,this}_onChangeCallback(){}*[Symbol.iterator](){yield this._x,yield this._y,yield this._z,yield this._w}}class Z{constructor(t=0,e=0,n=0){Z.prototype.isVector3=!0,this.x=t,this.y=e,this.z=n}set(t,e,n){return n===void 0&&(n=this.z),this.x=t,this.y=e,this.z=n,this}setScalar(t){return this.x=t,this.y=t,this.z=t,this}setX(t){return this.x=t,this}setY(t){return this.y=t,this}setZ(t){return this.z=t,this}setComponent(t,e){switch(t){case 0:this.x=e;break;case 1:this.y=e;break;case 2:this.z=e;break;default:throw new Error("index is out of range: "+t)}return this}getComponent(t){switch(t){case 0:return this.x;case 1:return this.y;case 2:return this.z;default:throw new Error("index is out of range: "+t)}}clone(){return new this.constructor(this.x,this.y,this.z)}copy(t){return this.x=t.x,this.y=t.y,this.z=t.z,this}add(t){return this.x+=t.x,this.y+=t.y,this.z+=t.z,this}addScalar(t){return this.x+=t,this.y+=t,this.z+=t,this}addVectors(t,e){return this.x=t.x+e.x,this.y=t.y+e.y,this.z=t.z+e.z,this}addScaledVector(t,e){return this.x+=t.x*e,this.y+=t.y*e,this.z+=t.z*e,this}sub(t){return this.x-=t.x,this.y-=t.y,this.z-=t.z,this}subScalar(t){return this.x-=t,this.y-=t,this.z-=t,this}subVectors(t,e){return this.x=t.x-e.x,this.y=t.y-e.y,this.z=t.z-e.z,this}multiply(t){return this.x*=t.x,this.y*=t.y,this.z*=t.z,this}multiplyScalar(t){return this.x*=t,this.y*=t,this.z*=t,this}multiplyVectors(t,e){return this.x=t.x*e.x,this.y=t.y*e.y,this.z=t.z*e.z,this}applyEuler(t){return this.applyQuaternion(Xd.setFromEuler(t))}applyAxisAngle(t,e){return this.applyQuaternion(Xd.setFromAxisAngle(t,e))}applyMatrix3(t){const e=this.x,n=this.y,i=this.z,s=t.elements;return this.x=s[0]*e+s[3]*n+s[6]*i,this.y=s[1]*e+s[4]*n+s[7]*i,this.z=s[2]*e+s[5]*n+s[8]*i,this}applyNormalMatrix(t){return this.applyMatrix3(t).normalize()}applyMatrix4(t){const e=this.x,n=this.y,i=this.z,s=t.elements,o=1/(s[3]*e+s[7]*n+s[11]*i+s[15]);return this.x=(s[0]*e+s[4]*n+s[8]*i+s[12])*o,this.y=(s[1]*e+s[5]*n+s[9]*i+s[13])*o,this.z=(s[2]*e+s[6]*n+s[10]*i+s[14])*o,this}applyQuaternion(t){const e=this.x,n=this.y,i=this.z,s=t.x,o=t.y,a=t.z,l=t.w,c=2*(o*i-a*n),u=2*(a*e-s*i),f=2*(s*n-o*e);return this.x=e+l*c+o*f-a*u,this.y=n+l*u+a*c-s*f,this.z=i+l*f+s*u-o*c,this}project(t){return this.applyMatrix4(t.matrixWorldInverse).applyMatrix4(t.projectionMatrix)}unproject(t){return this.applyMatrix4(t.projectionMatrixInverse).applyMatrix4(t.matrixWorld)}transformDirection(t){const e=this.x,n=this.y,i=this.z,s=t.elements;return this.x=s[0]*e+s[4]*n+s[8]*i,this.y=s[1]*e+s[5]*n+s[9]*i,this.z=s[2]*e+s[6]*n+s[10]*i,this.normalize()}divide(t){return this.x/=t.x,this.y/=t.y,this.z/=t.z,this}divideScalar(t){return this.multiplyScalar(1/t)}min(t){return this.x=Math.min(this.x,t.x),this.y=Math.min(this.y,t.y),this.z=Math.min(this.z,t.z),this}max(t){return this.x=Math.max(this.x,t.x),this.y=Math.max(this.y,t.y),this.z=Math.max(this.z,t.z),this}clamp(t,e){return this.x=Math.max(t.x,Math.min(e.x,this.x)),this.y=Math.max(t.y,Math.min(e.y,this.y)),this.z=Math.max(t.z,Math.min(e.z,this.z)),this}clampScalar(t,e){return this.x=Math.max(t,Math.min(e,this.x)),this.y=Math.max(t,Math.min(e,this.y)),this.z=Math.max(t,Math.min(e,this.z)),this}clampLength(t,e){const n=this.length();return this.divideScalar(n||1).multiplyScalar(Math.max(t,Math.min(e,n)))}floor(){return this.x=Math.floor(this.x),this.y=Math.floor(this.y),this.z=Math.floor(this.z),this}ceil(){return this.x=Math.ceil(this.x),this.y=Math.ceil(this.y),this.z=Math.ceil(this.z),this}round(){return this.x=Math.round(this.x),this.y=Math.round(this.y),this.z=Math.round(this.z),this}roundToZero(){return this.x=Math.trunc(this.x),this.y=Math.trunc(this.y),this.z=Math.trunc(this.z),this}negate(){return this.x=-this.x,this.y=-this.y,this.z=-this.z,this}dot(t){return this.x*t.x+this.y*t.y+this.z*t.z}lengthSq(){return this.x*this.x+this.y*this.y+this.z*this.z}length(){return Math.sqrt(this.x*this.x+this.y*this.y+this.z*this.z)}manhattanLength(){return Math.abs(this.x)+Math.abs(this.y)+Math.abs(this.z)}normalize(){return this.divideScalar(this.length()||1)}setLength(t){return this.normalize().multiplyScalar(t)}lerp(t,e){return this.x+=(t.x-this.x)*e,this.y+=(t.y-this.y)*e,this.z+=(t.z-this.z)*e,this}lerpVectors(t,e,n){return this.x=t.x+(e.x-t.x)*n,this.y=t.y+(e.y-t.y)*n,this.z=t.z+(e.z-t.z)*n,this}cross(t){return this.crossVectors(this,t)}crossVectors(t,e){const n=t.x,i=t.y,s=t.z,o=e.x,a=e.y,l=e.z;return this.x=i*l-s*a,this.y=s*o-n*l,this.z=n*a-i*o,this}projectOnVector(t){const e=t.lengthSq();if(e===0)return this.set(0,0,0);const n=t.dot(this)/e;return this.copy(t).multiplyScalar(n)}projectOnPlane(t){return Eu.copy(this).projectOnVector(t),this.sub(Eu)}reflect(t){return this.sub(Eu.copy(t).multiplyScalar(2*this.dot(t)))}angleTo(t){const e=Math.sqrt(this.lengthSq()*t.lengthSq());if(e===0)return Math.PI/2;const n=this.dot(t)/e;return Math.acos(An(n,-1,1))}distanceTo(t){return Math.sqrt(this.distanceToSquared(t))}distanceToSquared(t){const e=this.x-t.x,n=this.y-t.y,i=this.z-t.z;return e*e+n*n+i*i}manhattanDistanceTo(t){return Math.abs(this.x-t.x)+Math.abs(this.y-t.y)+Math.abs(this.z-t.z)}setFromSpherical(t){return this.setFromSphericalCoords(t.radius,t.phi,t.theta)}setFromSphericalCoords(t,e,n){const i=Math.sin(e)*t;return this.x=i*Math.sin(n),this.y=Math.cos(e)*t,this.z=i*Math.cos(n),this}setFromCylindrical(t){return this.setFromCylindricalCoords(t.radius,t.theta,t.y)}setFromCylindricalCoords(t,e,n){return this.x=t*Math.sin(e),this.y=n,this.z=t*Math.cos(e),this}setFromMatrixPosition(t){const e=t.elements;return this.x=e[12],this.y=e[13],this.z=e[14],this}setFromMatrixScale(t){const e=this.setFromMatrixColumn(t,0).length(),n=this.setFromMatrixColumn(t,1).length(),i=this.setFromMatrixColumn(t,2).length();return this.x=e,this.y=n,this.z=i,this}setFromMatrixColumn(t,e){return this.fromArray(t.elements,e*4)}setFromMatrix3Column(t,e){return this.fromArray(t.elements,e*3)}setFromEuler(t){return this.x=t._x,this.y=t._y,this.z=t._z,this}setFromColor(t){return this.x=t.r,this.y=t.g,this.z=t.b,this}equals(t){return t.x===this.x&&t.y===this.y&&t.z===this.z}fromArray(t,e=0){return this.x=t[e],this.y=t[e+1],this.z=t[e+2],this}toArray(t=[],e=0){return t[e]=this.x,t[e+1]=this.y,t[e+2]=this.z,t}fromBufferAttribute(t,e){return this.x=t.getX(e),this.y=t.getY(e),this.z=t.getZ(e),this}random(){return this.x=Math.random(),this.y=Math.random(),this.z=Math.random(),this}randomDirection(){const t=Math.random()*Math.PI*2,e=Math.random()*2-1,n=Math.sqrt(1-e*e);return this.x=n*Math.cos(t),this.y=e,this.z=n*Math.sin(t),this}*[Symbol.iterator](){yield this.x,yield this.y,yield this.z}}const Eu=new Z,Xd=new Oo;class Or{constructor(t=new Z(1/0,1/0,1/0),e=new Z(-1/0,-1/0,-1/0)){this.isBox3=!0,this.min=t,this.max=e}set(t,e){return this.min.copy(t),this.max.copy(e),this}setFromArray(t){this.makeEmpty();for(let e=0,n=t.length;e<n;e+=3)this.expandByPoint(ni.fromArray(t,e));return this}setFromBufferAttribute(t){this.makeEmpty();for(let e=0,n=t.count;e<n;e++)this.expandByPoint(ni.fromBufferAttribute(t,e));return this}setFromPoints(t){this.makeEmpty();for(let e=0,n=t.length;e<n;e++)this.expandByPoint(t[e]);return this}setFromCenterAndSize(t,e){const n=ni.copy(e).multiplyScalar(.5);return this.min.copy(t).sub(n),this.max.copy(t).add(n),this}setFromObject(t,e=!1){return this.makeEmpty(),this.expandByObject(t,e)}clone(){return new this.constructor().copy(this)}copy(t){return this.min.copy(t.min),this.max.copy(t.max),this}makeEmpty(){return this.min.x=this.min.y=this.min.z=1/0,this.max.x=this.max.y=this.max.z=-1/0,this}isEmpty(){return this.max.x<this.min.x||this.max.y<this.min.y||this.max.z<this.min.z}getCenter(t){return this.isEmpty()?t.set(0,0,0):t.addVectors(this.min,this.max).multiplyScalar(.5)}getSize(t){return this.isEmpty()?t.set(0,0,0):t.subVectors(this.max,this.min)}expandByPoint(t){return this.min.min(t),this.max.max(t),this}expandByVector(t){return this.min.sub(t),this.max.add(t),this}expandByScalar(t){return this.min.addScalar(-t),this.max.addScalar(t),this}expandByObject(t,e=!1){t.updateWorldMatrix(!1,!1);const n=t.geometry;if(n!==void 0){const s=n.getAttribute("position");if(e===!0&&s!==void 0&&t.isInstancedMesh!==!0)for(let o=0,a=s.count;o<a;o++)t.isMesh===!0?t.getVertexPosition(o,ni):ni.fromBufferAttribute(s,o),ni.applyMatrix4(t.matrixWorld),this.expandByPoint(ni);else t.boundingBox!==void 0?(t.boundingBox===null&&t.computeBoundingBox(),Ga.copy(t.boundingBox)):(n.boundingBox===null&&n.computeBoundingBox(),Ga.copy(n.boundingBox)),Ga.applyMatrix4(t.matrixWorld),this.union(Ga)}const i=t.children;for(let s=0,o=i.length;s<o;s++)this.expandByObject(i[s],e);return this}containsPoint(t){return t.x>=this.min.x&&t.x<=this.max.x&&t.y>=this.min.y&&t.y<=this.max.y&&t.z>=this.min.z&&t.z<=this.max.z}containsBox(t){return this.min.x<=t.min.x&&t.max.x<=this.max.x&&this.min.y<=t.min.y&&t.max.y<=this.max.y&&this.min.z<=t.min.z&&t.max.z<=this.max.z}getParameter(t,e){return e.set((t.x-this.min.x)/(this.max.x-this.min.x),(t.y-this.min.y)/(this.max.y-this.min.y),(t.z-this.min.z)/(this.max.z-this.min.z))}intersectsBox(t){return t.max.x>=this.min.x&&t.min.x<=this.max.x&&t.max.y>=this.min.y&&t.min.y<=this.max.y&&t.max.z>=this.min.z&&t.min.z<=this.max.z}intersectsSphere(t){return this.clampPoint(t.center,ni),ni.distanceToSquared(t.center)<=t.radius*t.radius}intersectsPlane(t){let e,n;return t.normal.x>0?(e=t.normal.x*this.min.x,n=t.normal.x*this.max.x):(e=t.normal.x*this.max.x,n=t.normal.x*this.min.x),t.normal.y>0?(e+=t.normal.y*this.min.y,n+=t.normal.y*this.max.y):(e+=t.normal.y*this.max.y,n+=t.normal.y*this.min.y),t.normal.z>0?(e+=t.normal.z*this.min.z,n+=t.normal.z*this.max.z):(e+=t.normal.z*this.max.z,n+=t.normal.z*this.min.z),e<=-t.constant&&n>=-t.constant}intersectsTriangle(t){if(this.isEmpty())return!1;this.getCenter(Bo),Wa.subVectors(this.max,Bo),Ds.subVectors(t.a,Bo),Ls.subVectors(t.b,Bo),Is.subVectors(t.c,Bo),sr.subVectors(Ls,Ds),or.subVectors(Is,Ls),Br.subVectors(Ds,Is);let e=[0,-sr.z,sr.y,0,-or.z,or.y,0,-Br.z,Br.y,sr.z,0,-sr.x,or.z,0,-or.x,Br.z,0,-Br.x,-sr.y,sr.x,0,-or.y,or.x,0,-Br.y,Br.x,0];return!Tu(e,Ds,Ls,Is,Wa)||(e=[1,0,0,0,1,0,0,0,1],!Tu(e,Ds,Ls,Is,Wa))?!1:(Xa.crossVectors(sr,or),e=[Xa.x,Xa.y,Xa.z],Tu(e,Ds,Ls,Is,Wa))}clampPoint(t,e){return e.copy(t).clamp(this.min,this.max)}distanceToPoint(t){return this.clampPoint(t,ni).distanceTo(t)}getBoundingSphere(t){return this.isEmpty()?t.makeEmpty():(this.getCenter(t.center),t.radius=this.getSize(ni).length()*.5),t}intersect(t){return this.min.max(t.min),this.max.min(t.max),this.isEmpty()&&this.makeEmpty(),this}union(t){return this.min.min(t.min),this.max.max(t.max),this}applyMatrix4(t){return this.isEmpty()?this:(Li[0].set(this.min.x,this.min.y,this.min.z).applyMatrix4(t),Li[1].set(this.min.x,this.min.y,this.max.z).applyMatrix4(t),Li[2].set(this.min.x,this.max.y,this.min.z).applyMatrix4(t),Li[3].set(this.min.x,this.max.y,this.max.z).applyMatrix4(t),Li[4].set(this.max.x,this.min.y,this.min.z).applyMatrix4(t),Li[5].set(this.max.x,this.min.y,this.max.z).applyMatrix4(t),Li[6].set(this.max.x,this.max.y,this.min.z).applyMatrix4(t),Li[7].set(this.max.x,this.max.y,this.max.z).applyMatrix4(t),this.setFromPoints(Li),this)}translate(t){return this.min.add(t),this.max.add(t),this}equals(t){return t.min.equals(this.min)&&t.max.equals(this.max)}}const Li=[new Z,new Z,new Z,new Z,new Z,new Z,new Z,new Z],ni=new Z,Ga=new Or,Ds=new Z,Ls=new Z,Is=new Z,sr=new Z,or=new Z,Br=new Z,Bo=new Z,Wa=new Z,Xa=new Z,zr=new Z;function Tu(r,t,e,n,i){for(let s=0,o=r.length-3;s<=o;s+=3){zr.fromArray(r,s);const a=i.x*Math.abs(zr.x)+i.y*Math.abs(zr.y)+i.z*Math.abs(zr.z),l=t.dot(zr),c=e.dot(zr),u=n.dot(zr);if(Math.max(-Math.max(l,c,u),Math.min(l,c,u))>a)return!1}return!0}const jg=new Or,zo=new Z,bu=new Z;class ko{constructor(t=new Z,e=-1){this.isSphere=!0,this.center=t,this.radius=e}set(t,e){return this.center.copy(t),this.radius=e,this}setFromPoints(t,e){const n=this.center;e!==void 0?n.copy(e):jg.setFromPoints(t).getCenter(n);let i=0;for(let s=0,o=t.length;s<o;s++)i=Math.max(i,n.distanceToSquared(t[s]));return this.radius=Math.sqrt(i),this}copy(t){return this.center.copy(t.center),this.radius=t.radius,this}isEmpty(){return this.radius<0}makeEmpty(){return this.center.set(0,0,0),this.radius=-1,this}containsPoint(t){return t.distanceToSquared(this.center)<=this.radius*this.radius}distanceToPoint(t){return t.distanceTo(this.center)-this.radius}intersectsSphere(t){const e=this.radius+t.radius;return t.center.distanceToSquared(this.center)<=e*e}intersectsBox(t){return t.intersectsSphere(this)}intersectsPlane(t){return Math.abs(t.distanceToPoint(this.center))<=this.radius}clampPoint(t,e){const n=this.center.distanceToSquared(t);return e.copy(t),n>this.radius*this.radius&&(e.sub(this.center).normalize(),e.multiplyScalar(this.radius).add(this.center)),e}getBoundingBox(t){return this.isEmpty()?(t.makeEmpty(),t):(t.set(this.center,this.center),t.expandByScalar(this.radius),t)}applyMatrix4(t){return this.center.applyMatrix4(t),this.radius=this.radius*t.getMaxScaleOnAxis(),this}translate(t){return this.center.add(t),this}expandByPoint(t){if(this.isEmpty())return this.center.copy(t),this.radius=0,this;zo.subVectors(t,this.center);const e=zo.lengthSq();if(e>this.radius*this.radius){const n=Math.sqrt(e),i=(n-this.radius)*.5;this.center.addScaledVector(zo,i/n),this.radius+=i}return this}union(t){return t.isEmpty()?this:this.isEmpty()?(this.copy(t),this):(this.center.equals(t.center)===!0?this.radius=Math.max(this.radius,t.radius):(bu.subVectors(t.center,this.center).setLength(t.radius),this.expandByPoint(zo.copy(t.center).add(bu)),this.expandByPoint(zo.copy(t.center).sub(bu))),this)}equals(t){return t.center.equals(this.center)&&t.radius===this.radius}clone(){return new this.constructor().copy(this)}}const Ii=new Z,Au=new Z,Ya=new Z,ar=new Z,wu=new Z,qa=new Z,Ru=new Z;class Jg{constructor(t=new Z,e=new Z(0,0,-1)){this.origin=t,this.direction=e}set(t,e){return this.origin.copy(t),this.direction.copy(e),this}copy(t){return this.origin.copy(t.origin),this.direction.copy(t.direction),this}at(t,e){return e.copy(this.origin).addScaledVector(this.direction,t)}lookAt(t){return this.direction.copy(t).sub(this.origin).normalize(),this}recast(t){return this.origin.copy(this.at(t,Ii)),this}closestPointToPoint(t,e){e.subVectors(t,this.origin);const n=e.dot(this.direction);return n<0?e.copy(this.origin):e.copy(this.origin).addScaledVector(this.direction,n)}distanceToPoint(t){return Math.sqrt(this.distanceSqToPoint(t))}distanceSqToPoint(t){const e=Ii.subVectors(t,this.origin).dot(this.direction);return e<0?this.origin.distanceToSquared(t):(Ii.copy(this.origin).addScaledVector(this.direction,e),Ii.distanceToSquared(t))}distanceSqToSegment(t,e,n,i){Au.copy(t).add(e).multiplyScalar(.5),Ya.copy(e).sub(t).normalize(),ar.copy(this.origin).sub(Au);const s=t.distanceTo(e)*.5,o=-this.direction.dot(Ya),a=ar.dot(this.direction),l=-ar.dot(Ya),c=ar.lengthSq(),u=Math.abs(1-o*o);let f,h,d,_;if(u>0)if(f=o*l-a,h=o*a-l,_=s*u,f>=0)if(h>=-_)if(h<=_){const g=1/u;f*=g,h*=g,d=f*(f+o*h+2*a)+h*(o*f+h+2*l)+c}else h=s,f=Math.max(0,-(o*h+a)),d=-f*f+h*(h+2*l)+c;else h=-s,f=Math.max(0,-(o*h+a)),d=-f*f+h*(h+2*l)+c;else h<=-_?(f=Math.max(0,-(-o*s+a)),h=f>0?-s:Math.min(Math.max(-s,-l),s),d=-f*f+h*(h+2*l)+c):h<=_?(f=0,h=Math.min(Math.max(-s,-l),s),d=h*(h+2*l)+c):(f=Math.max(0,-(o*s+a)),h=f>0?s:Math.min(Math.max(-s,-l),s),d=-f*f+h*(h+2*l)+c);else h=o>0?-s:s,f=Math.max(0,-(o*h+a)),d=-f*f+h*(h+2*l)+c;return n&&n.copy(this.origin).addScaledVector(this.direction,f),i&&i.copy(Au).addScaledVector(Ya,h),d}intersectSphere(t,e){Ii.subVectors(t.center,this.origin);const n=Ii.dot(this.direction),i=Ii.dot(Ii)-n*n,s=t.radius*t.radius;if(i>s)return null;const o=Math.sqrt(s-i),a=n-o,l=n+o;return l<0?null:a<0?this.at(l,e):this.at(a,e)}intersectsSphere(t){return this.distanceSqToPoint(t.center)<=t.radius*t.radius}distanceToPlane(t){const e=t.normal.dot(this.direction);if(e===0)return t.distanceToPoint(this.origin)===0?0:null;const n=-(this.origin.dot(t.normal)+t.constant)/e;return n>=0?n:null}intersectPlane(t,e){const n=this.distanceToPlane(t);return n===null?null:this.at(n,e)}intersectsPlane(t){const e=t.distanceToPoint(this.origin);return e===0||t.normal.dot(this.direction)*e<0}intersectBox(t,e){let n,i,s,o,a,l;const c=1/this.direction.x,u=1/this.direction.y,f=1/this.direction.z,h=this.origin;return c>=0?(n=(t.min.x-h.x)*c,i=(t.max.x-h.x)*c):(n=(t.max.x-h.x)*c,i=(t.min.x-h.x)*c),u>=0?(s=(t.min.y-h.y)*u,o=(t.max.y-h.y)*u):(s=(t.max.y-h.y)*u,o=(t.min.y-h.y)*u),n>o||s>i||((s>n||isNaN(n))&&(n=s),(o<i||isNaN(i))&&(i=o),f>=0?(a=(t.min.z-h.z)*f,l=(t.max.z-h.z)*f):(a=(t.max.z-h.z)*f,l=(t.min.z-h.z)*f),n>l||a>i)||((a>n||n!==n)&&(n=a),(l<i||i!==i)&&(i=l),i<0)?null:this.at(n>=0?n:i,e)}intersectsBox(t){return this.intersectBox(t,Ii)!==null}intersectTriangle(t,e,n,i,s){wu.subVectors(e,t),qa.subVectors(n,t),Ru.crossVectors(wu,qa);let o=this.direction.dot(Ru),a;if(o>0){if(i)return null;a=1}else if(o<0)a=-1,o=-o;else return null;ar.subVectors(this.origin,t);const l=a*this.direction.dot(qa.crossVectors(ar,qa));if(l<0)return null;const c=a*this.direction.dot(wu.cross(ar));if(c<0||l+c>o)return null;const u=-a*ar.dot(Ru);return u<0?null:this.at(u/o,s)}applyMatrix4(t){return this.origin.applyMatrix4(t),this.direction.transformDirection(t),this}equals(t){return t.origin.equals(this.origin)&&t.direction.equals(this.direction)}clone(){return new this.constructor().copy(this)}}class Pe{constructor(t,e,n,i,s,o,a,l,c,u,f,h,d,_,g,m){Pe.prototype.isMatrix4=!0,this.elements=[1,0,0,0,0,1,0,0,0,0,1,0,0,0,0,1],t!==void 0&&this.set(t,e,n,i,s,o,a,l,c,u,f,h,d,_,g,m)}set(t,e,n,i,s,o,a,l,c,u,f,h,d,_,g,m){const p=this.elements;return p[0]=t,p[4]=e,p[8]=n,p[12]=i,p[1]=s,p[5]=o,p[9]=a,p[13]=l,p[2]=c,p[6]=u,p[10]=f,p[14]=h,p[3]=d,p[7]=_,p[11]=g,p[15]=m,this}identity(){return this.set(1,0,0,0,0,1,0,0,0,0,1,0,0,0,0,1),this}clone(){return new Pe().fromArray(this.elements)}copy(t){const e=this.elements,n=t.elements;return e[0]=n[0],e[1]=n[1],e[2]=n[2],e[3]=n[3],e[4]=n[4],e[5]=n[5],e[6]=n[6],e[7]=n[7],e[8]=n[8],e[9]=n[9],e[10]=n[10],e[11]=n[11],e[12]=n[12],e[13]=n[13],e[14]=n[14],e[15]=n[15],this}copyPosition(t){const e=this.elements,n=t.elements;return e[12]=n[12],e[13]=n[13],e[14]=n[14],this}setFromMatrix3(t){const e=t.elements;return this.set(e[0],e[3],e[6],0,e[1],e[4],e[7],0,e[2],e[5],e[8],0,0,0,0,1),this}extractBasis(t,e,n){return t.setFromMatrixColumn(this,0),e.setFromMatrixColumn(this,1),n.setFromMatrixColumn(this,2),this}makeBasis(t,e,n){return this.set(t.x,e.x,n.x,0,t.y,e.y,n.y,0,t.z,e.z,n.z,0,0,0,0,1),this}extractRotation(t){const e=this.elements,n=t.elements,i=1/Us.setFromMatrixColumn(t,0).length(),s=1/Us.setFromMatrixColumn(t,1).length(),o=1/Us.setFromMatrixColumn(t,2).length();return e[0]=n[0]*i,e[1]=n[1]*i,e[2]=n[2]*i,e[3]=0,e[4]=n[4]*s,e[5]=n[5]*s,e[6]=n[6]*s,e[7]=0,e[8]=n[8]*o,e[9]=n[9]*o,e[10]=n[10]*o,e[11]=0,e[12]=0,e[13]=0,e[14]=0,e[15]=1,this}makeRotationFromEuler(t){const e=this.elements,n=t.x,i=t.y,s=t.z,o=Math.cos(n),a=Math.sin(n),l=Math.cos(i),c=Math.sin(i),u=Math.cos(s),f=Math.sin(s);if(t.order==="XYZ"){const h=o*u,d=o*f,_=a*u,g=a*f;e[0]=l*u,e[4]=-l*f,e[8]=c,e[1]=d+_*c,e[5]=h-g*c,e[9]=-a*l,e[2]=g-h*c,e[6]=_+d*c,e[10]=o*l}else if(t.order==="YXZ"){const h=l*u,d=l*f,_=c*u,g=c*f;e[0]=h+g*a,e[4]=_*a-d,e[8]=o*c,e[1]=o*f,e[5]=o*u,e[9]=-a,e[2]=d*a-_,e[6]=g+h*a,e[10]=o*l}else if(t.order==="ZXY"){const h=l*u,d=l*f,_=c*u,g=c*f;e[0]=h-g*a,e[4]=-o*f,e[8]=_+d*a,e[1]=d+_*a,e[5]=o*u,e[9]=g-h*a,e[2]=-o*c,e[6]=a,e[10]=o*l}else if(t.order==="ZYX"){const h=o*u,d=o*f,_=a*u,g=a*f;e[0]=l*u,e[4]=_*c-d,e[8]=h*c+g,e[1]=l*f,e[5]=g*c+h,e[9]=d*c-_,e[2]=-c,e[6]=a*l,e[10]=o*l}else if(t.order==="YZX"){const h=o*l,d=o*c,_=a*l,g=a*c;e[0]=l*u,e[4]=g-h*f,e[8]=_*f+d,e[1]=f,e[5]=o*u,e[9]=-a*u,e[2]=-c*u,e[6]=d*f+_,e[10]=h-g*f}else if(t.order==="XZY"){const h=o*l,d=o*c,_=a*l,g=a*c;e[0]=l*u,e[4]=-f,e[8]=c*u,e[1]=h*f+g,e[5]=o*u,e[9]=d*f-_,e[2]=_*f-d,e[6]=a*u,e[10]=g*f+h}return e[3]=0,e[7]=0,e[11]=0,e[12]=0,e[13]=0,e[14]=0,e[15]=1,this}makeRotationFromQuaternion(t){return this.compose(Qg,t,t0)}lookAt(t,e,n){const i=this.elements;return kn.subVectors(t,e),kn.lengthSq()===0&&(kn.z=1),kn.normalize(),lr.crossVectors(n,kn),lr.lengthSq()===0&&(Math.abs(n.z)===1?kn.x+=1e-4:kn.z+=1e-4,kn.normalize(),lr.crossVectors(n,kn)),lr.normalize(),$a.crossVectors(kn,lr),i[0]=lr.x,i[4]=$a.x,i[8]=kn.x,i[1]=lr.y,i[5]=$a.y,i[9]=kn.y,i[2]=lr.z,i[6]=$a.z,i[10]=kn.z,this}multiply(t){return this.multiplyMatrices(this,t)}premultiply(t){return this.multiplyMatrices(t,this)}multiplyMatrices(t,e){const n=t.elements,i=e.elements,s=this.elements,o=n[0],a=n[4],l=n[8],c=n[12],u=n[1],f=n[5],h=n[9],d=n[13],_=n[2],g=n[6],m=n[10],p=n[14],y=n[3],E=n[7],v=n[11],C=n[15],w=i[0],b=i[4],R=i[8],S=i[12],x=i[1],L=i[5],F=i[9],B=i[13],G=i[2],j=i[6],Y=i[10],$=i[14],H=i[3],it=i[7],P=i[11],ut=i[15];return s[0]=o*w+a*x+l*G+c*H,s[4]=o*b+a*L+l*j+c*it,s[8]=o*R+a*F+l*Y+c*P,s[12]=o*S+a*B+l*$+c*ut,s[1]=u*w+f*x+h*G+d*H,s[5]=u*b+f*L+h*j+d*it,s[9]=u*R+f*F+h*Y+d*P,s[13]=u*S+f*B+h*$+d*ut,s[2]=_*w+g*x+m*G+p*H,s[6]=_*b+g*L+m*j+p*it,s[10]=_*R+g*F+m*Y+p*P,s[14]=_*S+g*B+m*$+p*ut,s[3]=y*w+E*x+v*G+C*H,s[7]=y*b+E*L+v*j+C*it,s[11]=y*R+E*F+v*Y+C*P,s[15]=y*S+E*B+v*$+C*ut,this}multiplyScalar(t){const e=this.elements;return e[0]*=t,e[4]*=t,e[8]*=t,e[12]*=t,e[1]*=t,e[5]*=t,e[9]*=t,e[13]*=t,e[2]*=t,e[6]*=t,e[10]*=t,e[14]*=t,e[3]*=t,e[7]*=t,e[11]*=t,e[15]*=t,this}determinant(){const t=this.elements,e=t[0],n=t[4],i=t[8],s=t[12],o=t[1],a=t[5],l=t[9],c=t[13],u=t[2],f=t[6],h=t[10],d=t[14],_=t[3],g=t[7],m=t[11],p=t[15];return _*(+s*l*f-i*c*f-s*a*h+n*c*h+i*a*d-n*l*d)+g*(+e*l*d-e*c*h+s*o*h-i*o*d+i*c*u-s*l*u)+m*(+e*c*f-e*a*d-s*o*f+n*o*d+s*a*u-n*c*u)+p*(-i*a*u-e*l*f+e*a*h+i*o*f-n*o*h+n*l*u)}transpose(){const t=this.elements;let e;return e=t[1],t[1]=t[4],t[4]=e,e=t[2],t[2]=t[8],t[8]=e,e=t[6],t[6]=t[9],t[9]=e,e=t[3],t[3]=t[12],t[12]=e,e=t[7],t[7]=t[13],t[13]=e,e=t[11],t[11]=t[14],t[14]=e,this}setPosition(t,e,n){const i=this.elements;return t.isVector3?(i[12]=t.x,i[13]=t.y,i[14]=t.z):(i[12]=t,i[13]=e,i[14]=n),this}invert(){const t=this.elements,e=t[0],n=t[1],i=t[2],s=t[3],o=t[4],a=t[5],l=t[6],c=t[7],u=t[8],f=t[9],h=t[10],d=t[11],_=t[12],g=t[13],m=t[14],p=t[15],y=f*m*c-g*h*c+g*l*d-a*m*d-f*l*p+a*h*p,E=_*h*c-u*m*c-_*l*d+o*m*d+u*l*p-o*h*p,v=u*g*c-_*f*c+_*a*d-o*g*d-u*a*p+o*f*p,C=_*f*l-u*g*l-_*a*h+o*g*h+u*a*m-o*f*m,w=e*y+n*E+i*v+s*C;if(w===0)return this.set(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);const b=1/w;return t[0]=y*b,t[1]=(g*h*s-f*m*s-g*i*d+n*m*d+f*i*p-n*h*p)*b,t[2]=(a*m*s-g*l*s+g*i*c-n*m*c-a*i*p+n*l*p)*b,t[3]=(f*l*s-a*h*s-f*i*c+n*h*c+a*i*d-n*l*d)*b,t[4]=E*b,t[5]=(u*m*s-_*h*s+_*i*d-e*m*d-u*i*p+e*h*p)*b,t[6]=(_*l*s-o*m*s-_*i*c+e*m*c+o*i*p-e*l*p)*b,t[7]=(o*h*s-u*l*s+u*i*c-e*h*c-o*i*d+e*l*d)*b,t[8]=v*b,t[9]=(_*f*s-u*g*s-_*n*d+e*g*d+u*n*p-e*f*p)*b,t[10]=(o*g*s-_*a*s+_*n*c-e*g*c-o*n*p+e*a*p)*b,t[11]=(u*a*s-o*f*s-u*n*c+e*f*c+o*n*d-e*a*d)*b,t[12]=C*b,t[13]=(u*g*i-_*f*i+_*n*h-e*g*h-u*n*m+e*f*m)*b,t[14]=(_*a*i-o*g*i-_*n*l+e*g*l+o*n*m-e*a*m)*b,t[15]=(o*f*i-u*a*i+u*n*l-e*f*l-o*n*h+e*a*h)*b,this}scale(t){const e=this.elements,n=t.x,i=t.y,s=t.z;return e[0]*=n,e[4]*=i,e[8]*=s,e[1]*=n,e[5]*=i,e[9]*=s,e[2]*=n,e[6]*=i,e[10]*=s,e[3]*=n,e[7]*=i,e[11]*=s,this}getMaxScaleOnAxis(){const t=this.elements,e=t[0]*t[0]+t[1]*t[1]+t[2]*t[2],n=t[4]*t[4]+t[5]*t[5]+t[6]*t[6],i=t[8]*t[8]+t[9]*t[9]+t[10]*t[10];return Math.sqrt(Math.max(e,n,i))}makeTranslation(t,e,n){return t.isVector3?this.set(1,0,0,t.x,0,1,0,t.y,0,0,1,t.z,0,0,0,1):this.set(1,0,0,t,0,1,0,e,0,0,1,n,0,0,0,1),this}makeRotationX(t){const e=Math.cos(t),n=Math.sin(t);return this.set(1,0,0,0,0,e,-n,0,0,n,e,0,0,0,0,1),this}makeRotationY(t){const e=Math.cos(t),n=Math.sin(t);return this.set(e,0,n,0,0,1,0,0,-n,0,e,0,0,0,0,1),this}makeRotationZ(t){const e=Math.cos(t),n=Math.sin(t);return this.set(e,-n,0,0,n,e,0,0,0,0,1,0,0,0,0,1),this}makeRotationAxis(t,e){const n=Math.cos(e),i=Math.sin(e),s=1-n,o=t.x,a=t.y,l=t.z,c=s*o,u=s*a;return this.set(c*o+n,c*a-i*l,c*l+i*a,0,c*a+i*l,u*a+n,u*l-i*o,0,c*l-i*a,u*l+i*o,s*l*l+n,0,0,0,0,1),this}makeScale(t,e,n){return this.set(t,0,0,0,0,e,0,0,0,0,n,0,0,0,0,1),this}makeShear(t,e,n,i,s,o){return this.set(1,n,s,0,t,1,o,0,e,i,1,0,0,0,0,1),this}compose(t,e,n){const i=this.elements,s=e._x,o=e._y,a=e._z,l=e._w,c=s+s,u=o+o,f=a+a,h=s*c,d=s*u,_=s*f,g=o*u,m=o*f,p=a*f,y=l*c,E=l*u,v=l*f,C=n.x,w=n.y,b=n.z;return i[0]=(1-(g+p))*C,i[1]=(d+v)*C,i[2]=(_-E)*C,i[3]=0,i[4]=(d-v)*w,i[5]=(1-(h+p))*w,i[6]=(m+y)*w,i[7]=0,i[8]=(_+E)*b,i[9]=(m-y)*b,i[10]=(1-(h+g))*b,i[11]=0,i[12]=t.x,i[13]=t.y,i[14]=t.z,i[15]=1,this}decompose(t,e,n){const i=this.elements;let s=Us.set(i[0],i[1],i[2]).length();const o=Us.set(i[4],i[5],i[6]).length(),a=Us.set(i[8],i[9],i[10]).length();this.determinant()<0&&(s=-s),t.x=i[12],t.y=i[13],t.z=i[14],ii.copy(this);const c=1/s,u=1/o,f=1/a;return ii.elements[0]*=c,ii.elements[1]*=c,ii.elements[2]*=c,ii.elements[4]*=u,ii.elements[5]*=u,ii.elements[6]*=u,ii.elements[8]*=f,ii.elements[9]*=f,ii.elements[10]*=f,e.setFromRotationMatrix(ii),n.x=s,n.y=o,n.z=a,this}makePerspective(t,e,n,i,s,o,a=Pi){const l=this.elements,c=2*s/(e-t),u=2*s/(n-i),f=(e+t)/(e-t),h=(n+i)/(n-i);let d,_;if(a===Pi)d=-(o+s)/(o-s),_=-2*o*s/(o-s);else if(a===Ha)d=-o/(o-s),_=-o*s/(o-s);else throw new Error("THREE.Matrix4.makePerspective(): Invalid coordinate system: "+a);return l[0]=c,l[4]=0,l[8]=f,l[12]=0,l[1]=0,l[5]=u,l[9]=h,l[13]=0,l[2]=0,l[6]=0,l[10]=d,l[14]=_,l[3]=0,l[7]=0,l[11]=-1,l[15]=0,this}makeOrthographic(t,e,n,i,s,o,a=Pi){const l=this.elements,c=1/(e-t),u=1/(n-i),f=1/(o-s),h=(e+t)*c,d=(n+i)*u;let _,g;if(a===Pi)_=(o+s)*f,g=-2*f;else if(a===Ha)_=s*f,g=-1*f;else throw new Error("THREE.Matrix4.makeOrthographic(): Invalid coordinate system: "+a);return l[0]=2*c,l[4]=0,l[8]=0,l[12]=-h,l[1]=0,l[5]=2*u,l[9]=0,l[13]=-d,l[2]=0,l[6]=0,l[10]=g,l[14]=-_,l[3]=0,l[7]=0,l[11]=0,l[15]=1,this}equals(t){const e=this.elements,n=t.elements;for(let i=0;i<16;i++)if(e[i]!==n[i])return!1;return!0}fromArray(t,e=0){for(let n=0;n<16;n++)this.elements[n]=t[n+e];return this}toArray(t=[],e=0){const n=this.elements;return t[e]=n[0],t[e+1]=n[1],t[e+2]=n[2],t[e+3]=n[3],t[e+4]=n[4],t[e+5]=n[5],t[e+6]=n[6],t[e+7]=n[7],t[e+8]=n[8],t[e+9]=n[9],t[e+10]=n[10],t[e+11]=n[11],t[e+12]=n[12],t[e+13]=n[13],t[e+14]=n[14],t[e+15]=n[15],t}}const Us=new Z,ii=new Pe,Qg=new Z(0,0,0),t0=new Z(1,1,1),lr=new Z,$a=new Z,kn=new Z,Yd=new Pe,qd=new Oo;class Ui{constructor(t=0,e=0,n=0,i=Ui.DEFAULT_ORDER){this.isEuler=!0,this._x=t,this._y=e,this._z=n,this._order=i}get x(){return this._x}set x(t){this._x=t,this._onChangeCallback()}get y(){return this._y}set y(t){this._y=t,this._onChangeCallback()}get z(){return this._z}set z(t){this._z=t,this._onChangeCallback()}get order(){return this._order}set order(t){this._order=t,this._onChangeCallback()}set(t,e,n,i=this._order){return this._x=t,this._y=e,this._z=n,this._order=i,this._onChangeCallback(),this}clone(){return new this.constructor(this._x,this._y,this._z,this._order)}copy(t){return this._x=t._x,this._y=t._y,this._z=t._z,this._order=t._order,this._onChangeCallback(),this}setFromRotationMatrix(t,e=this._order,n=!0){const i=t.elements,s=i[0],o=i[4],a=i[8],l=i[1],c=i[5],u=i[9],f=i[2],h=i[6],d=i[10];switch(e){case"XYZ":this._y=Math.asin(An(a,-1,1)),Math.abs(a)<.9999999?(this._x=Math.atan2(-u,d),this._z=Math.atan2(-o,s)):(this._x=Math.atan2(h,c),this._z=0);break;case"YXZ":this._x=Math.asin(-An(u,-1,1)),Math.abs(u)<.9999999?(this._y=Math.atan2(a,d),this._z=Math.atan2(l,c)):(this._y=Math.atan2(-f,s),this._z=0);break;case"ZXY":this._x=Math.asin(An(h,-1,1)),Math.abs(h)<.9999999?(this._y=Math.atan2(-f,d),this._z=Math.atan2(-o,c)):(this._y=0,this._z=Math.atan2(l,s));break;case"ZYX":this._y=Math.asin(-An(f,-1,1)),Math.abs(f)<.9999999?(this._x=Math.atan2(h,d),this._z=Math.atan2(l,s)):(this._x=0,this._z=Math.atan2(-o,c));break;case"YZX":this._z=Math.asin(An(l,-1,1)),Math.abs(l)<.9999999?(this._x=Math.atan2(-u,c),this._y=Math.atan2(-f,s)):(this._x=0,this._y=Math.atan2(a,d));break;case"XZY":this._z=Math.asin(-An(o,-1,1)),Math.abs(o)<.9999999?(this._x=Math.atan2(h,c),this._y=Math.atan2(a,s)):(this._x=Math.atan2(-u,d),this._y=0);break;default:console.warn("THREE.Euler: .setFromRotationMatrix() encountered an unknown order: "+e)}return this._order=e,n===!0&&this._onChangeCallback(),this}setFromQuaternion(t,e,n){return Yd.makeRotationFromQuaternion(t),this.setFromRotationMatrix(Yd,e,n)}setFromVector3(t,e=this._order){return this.set(t.x,t.y,t.z,e)}reorder(t){return qd.setFromEuler(this),this.setFromQuaternion(qd,t)}equals(t){return t._x===this._x&&t._y===this._y&&t._z===this._z&&t._order===this._order}fromArray(t){return this._x=t[0],this._y=t[1],this._z=t[2],t[3]!==void 0&&(this._order=t[3]),this._onChangeCallback(),this}toArray(t=[],e=0){return t[e]=this._x,t[e+1]=this._y,t[e+2]=this._z,t[e+3]=this._order,t}_onChange(t){return this._onChangeCallback=t,this}_onChangeCallback(){}*[Symbol.iterator](){yield this._x,yield this._y,yield this._z,yield this._order}}Ui.DEFAULT_ORDER="XYZ";class $d{constructor(){this.mask=1}set(t){this.mask=(1<<t|0)>>>0}enable(t){this.mask|=1<<t|0}enableAll(){this.mask=-1}toggle(t){this.mask^=1<<t|0}disable(t){this.mask&=~(1<<t|0)}disableAll(){this.mask=0}test(t){return(this.mask&t.mask)!==0}isEnabled(t){return(this.mask&(1<<t|0))!==0}}let e0=0;const Kd=new Z,Ns=new Oo,Ni=new Pe,Ka=new Z,Ho=new Z,n0=new Z,i0=new Oo,Zd=new Z(1,0,0),jd=new Z(0,1,0),Jd=new Z(0,0,1),Qd={type:"added"},r0={type:"removed"},Fs={type:"childadded",child:null},Cu={type:"childremoved",child:null};class Rn extends Rs{constructor(){super(),this.isObject3D=!0,Object.defineProperty(this,"id",{value:e0++}),this.uuid=Uo(),this.name="",this.type="Object3D",this.parent=null,this.children=[],this.up=Rn.DEFAULT_UP.clone();const t=new Z,e=new Ui,n=new Oo,i=new Z(1,1,1);function s(){n.setFromEuler(e,!1)}function o(){e.setFromQuaternion(n,void 0,!1)}e._onChange(s),n._onChange(o),Object.defineProperties(this,{position:{configurable:!0,enumerable:!0,value:t},rotation:{configurable:!0,enumerable:!0,value:e},quaternion:{configurable:!0,enumerable:!0,value:n},scale:{configurable:!0,enumerable:!0,value:i},modelViewMatrix:{value:new Pe},normalMatrix:{value:new Zt}}),this.matrix=new Pe,this.matrixWorld=new Pe,this.matrixAutoUpdate=Rn.DEFAULT_MATRIX_AUTO_UPDATE,this.matrixWorldAutoUpdate=Rn.DEFAULT_MATRIX_WORLD_AUTO_UPDATE,this.matrixWorldNeedsUpdate=!1,this.layers=new $d,this.visible=!0,this.castShadow=!1,this.receiveShadow=!1,this.frustumCulled=!0,this.renderOrder=0,this.animations=[],this.userData={}}onBeforeShadow(){}onAfterShadow(){}onBeforeRender(){}onAfterRender(){}applyMatrix4(t){this.matrixAutoUpdate&&this.updateMatrix(),this.matrix.premultiply(t),this.matrix.decompose(this.position,this.quaternion,this.scale)}applyQuaternion(t){return this.quaternion.premultiply(t),this}setRotationFromAxisAngle(t,e){this.quaternion.setFromAxisAngle(t,e)}setRotationFromEuler(t){this.quaternion.setFromEuler(t,!0)}setRotationFromMatrix(t){this.quaternion.setFromRotationMatrix(t)}setRotationFromQuaternion(t){this.quaternion.copy(t)}rotateOnAxis(t,e){return Ns.setFromAxisAngle(t,e),this.quaternion.multiply(Ns),this}rotateOnWorldAxis(t,e){return Ns.setFromAxisAngle(t,e),this.quaternion.premultiply(Ns),this}rotateX(t){return this.rotateOnAxis(Zd,t)}rotateY(t){return this.rotateOnAxis(jd,t)}rotateZ(t){return this.rotateOnAxis(Jd,t)}translateOnAxis(t,e){return Kd.copy(t).applyQuaternion(this.quaternion),this.position.add(Kd.multiplyScalar(e)),this}translateX(t){return this.translateOnAxis(Zd,t)}translateY(t){return this.translateOnAxis(jd,t)}translateZ(t){return this.translateOnAxis(Jd,t)}localToWorld(t){return this.updateWorldMatrix(!0,!1),t.applyMatrix4(this.matrixWorld)}worldToLocal(t){return this.updateWorldMatrix(!0,!1),t.applyMatrix4(Ni.copy(this.matrixWorld).invert())}lookAt(t,e,n){t.isVector3?Ka.copy(t):Ka.set(t,e,n);const i=this.parent;this.updateWorldMatrix(!0,!1),Ho.setFromMatrixPosition(this.matrixWorld),this.isCamera||this.isLight?Ni.lookAt(Ho,Ka,this.up):Ni.lookAt(Ka,Ho,this.up),this.quaternion.setFromRotationMatrix(Ni),i&&(Ni.extractRotation(i.matrixWorld),Ns.setFromRotationMatrix(Ni),this.quaternion.premultiply(Ns.invert()))}add(t){if(arguments.length>1){for(let e=0;e<arguments.length;e++)this.add(arguments[e]);return this}return t===this?(console.error("THREE.Object3D.add: object can't be added as a child of itself.",t),this):(t&&t.isObject3D?(t.removeFromParent(),t.parent=this,this.children.push(t),t.dispatchEvent(Qd),Fs.child=t,this.dispatchEvent(Fs),Fs.child=null):console.error("THREE.Object3D.add: object not an instance of THREE.Object3D.",t),this)}remove(t){if(arguments.length>1){for(let n=0;n<arguments.length;n++)this.remove(arguments[n]);return this}const e=this.children.indexOf(t);return e!==-1&&(t.parent=null,this.children.splice(e,1),t.dispatchEvent(r0),Cu.child=t,this.dispatchEvent(Cu),Cu.child=null),this}removeFromParent(){const t=this.parent;return t!==null&&t.remove(this),this}clear(){return this.remove(...this.children)}attach(t){return this.updateWorldMatrix(!0,!1),Ni.copy(this.matrixWorld).invert(),t.parent!==null&&(t.parent.updateWorldMatrix(!0,!1),Ni.multiply(t.parent.matrixWorld)),t.applyMatrix4(Ni),t.removeFromParent(),t.parent=this,this.children.push(t),t.updateWorldMatrix(!1,!0),t.dispatchEvent(Qd),Fs.child=t,this.dispatchEvent(Fs),Fs.child=null,this}getObjectById(t){return this.getObjectByProperty("id",t)}getObjectByName(t){return this.getObjectByProperty("name",t)}getObjectByProperty(t,e){if(this[t]===e)return this;for(let n=0,i=this.children.length;n<i;n++){const o=this.children[n].getObjectByProperty(t,e);if(o!==void 0)return o}}getObjectsByProperty(t,e,n=[]){this[t]===e&&n.push(this);const i=this.children;for(let s=0,o=i.length;s<o;s++)i[s].getObjectsByProperty(t,e,n);return n}getWorldPosition(t){return this.updateWorldMatrix(!0,!1),t.setFromMatrixPosition(this.matrixWorld)}getWorldQuaternion(t){return this.updateWorldMatrix(!0,!1),this.matrixWorld.decompose(Ho,t,n0),t}getWorldScale(t){return this.updateWorldMatrix(!0,!1),this.matrixWorld.decompose(Ho,i0,t),t}getWorldDirection(t){this.updateWorldMatrix(!0,!1);const e=this.matrixWorld.elements;return t.set(e[8],e[9],e[10]).normalize()}raycast(){}traverse(t){t(this);const e=this.children;for(let n=0,i=e.length;n<i;n++)e[n].traverse(t)}traverseVisible(t){if(this.visible===!1)return;t(this);const e=this.children;for(let n=0,i=e.length;n<i;n++)e[n].traverseVisible(t)}traverseAncestors(t){const e=this.parent;e!==null&&(t(e),e.traverseAncestors(t))}updateMatrix(){this.matrix.compose(this.position,this.quaternion,this.scale),this.matrixWorldNeedsUpdate=!0}updateMatrixWorld(t){this.matrixAutoUpdate&&this.updateMatrix(),(this.matrixWorldNeedsUpdate||t)&&(this.matrixWorldAutoUpdate===!0&&(this.parent===null?this.matrixWorld.copy(this.matrix):this.matrixWorld.multiplyMatrices(this.parent.matrixWorld,this.matrix)),this.matrixWorldNeedsUpdate=!1,t=!0);const e=this.children;for(let n=0,i=e.length;n<i;n++)e[n].updateMatrixWorld(t)}updateWorldMatrix(t,e){const n=this.parent;if(t===!0&&n!==null&&n.updateWorldMatrix(!0,!1),this.matrixAutoUpdate&&this.updateMatrix(),this.matrixWorldAutoUpdate===!0&&(this.parent===null?this.matrixWorld.copy(this.matrix):this.matrixWorld.multiplyMatrices(this.parent.matrixWorld,this.matrix)),e===!0){const i=this.children;for(let s=0,o=i.length;s<o;s++)i[s].updateWorldMatrix(!1,!0)}}toJSON(t){const e=t===void 0||typeof t=="string",n={};e&&(t={geometries:{},materials:{},textures:{},images:{},shapes:{},skeletons:{},animations:{},nodes:{}},n.metadata={version:4.6,type:"Object",generator:"Object3D.toJSON"});const i={};i.uuid=this.uuid,i.type=this.type,this.name!==""&&(i.name=this.name),this.castShadow===!0&&(i.castShadow=!0),this.receiveShadow===!0&&(i.receiveShadow=!0),this.visible===!1&&(i.visible=!1),this.frustumCulled===!1&&(i.frustumCulled=!1),this.renderOrder!==0&&(i.renderOrder=this.renderOrder),Object.keys(this.userData).length>0&&(i.userData=this.userData),i.layers=this.layers.mask,i.matrix=this.matrix.toArray(),i.up=this.up.toArray(),this.matrixAutoUpdate===!1&&(i.matrixAutoUpdate=!1),this.isInstancedMesh&&(i.type="InstancedMesh",i.count=this.count,i.instanceMatrix=this.instanceMatrix.toJSON(),this.instanceColor!==null&&(i.instanceColor=this.instanceColor.toJSON())),this.isBatchedMesh&&(i.type="BatchedMesh",i.perObjectFrustumCulled=this.perObjectFrustumCulled,i.sortObjects=this.sortObjects,i.drawRanges=this._drawRanges,i.reservedRanges=this._reservedRanges,i.visibility=this._visibility,i.active=this._active,i.bounds=this._bounds.map(a=>({boxInitialized:a.boxInitialized,boxMin:a.box.min.toArray(),boxMax:a.box.max.toArray(),sphereInitialized:a.sphereInitialized,sphereRadius:a.sphere.radius,sphereCenter:a.sphere.center.toArray()})),i.maxInstanceCount=this._maxInstanceCount,i.maxVertexCount=this._maxVertexCount,i.maxIndexCount=this._maxIndexCount,i.geometryInitialized=this._geometryInitialized,i.geometryCount=this._geometryCount,i.matricesTexture=this._matricesTexture.toJSON(t),this._colorsTexture!==null&&(i.colorsTexture=this._colorsTexture.toJSON(t)),this.boundingSphere!==null&&(i.boundingSphere={center:i.boundingSphere.center.toArray(),radius:i.boundingSphere.radius}),this.boundingBox!==null&&(i.boundingBox={min:i.boundingBox.min.toArray(),max:i.boundingBox.max.toArray()}));function s(a,l){return a[l.uuid]===void 0&&(a[l.uuid]=l.toJSON(t)),l.uuid}if(this.isScene)this.background&&(this.background.isColor?i.background=this.background.toJSON():this.background.isTexture&&(i.background=this.background.toJSON(t).uuid)),this.environment&&this.environment.isTexture&&this.environment.isRenderTargetTexture!==!0&&(i.environment=this.environment.toJSON(t).uuid);else if(this.isMesh||this.isLine||this.isPoints){i.geometry=s(t.geometries,this.geometry);const a=this.geometry.parameters;if(a!==void 0&&a.shapes!==void 0){const l=a.shapes;if(Array.isArray(l))for(let c=0,u=l.length;c<u;c++){const f=l[c];s(t.shapes,f)}else s(t.shapes,l)}}if(this.isSkinnedMesh&&(i.bindMode=this.bindMode,i.bindMatrix=this.bindMatrix.toArray(),this.skeleton!==void 0&&(s(t.skeletons,this.skeleton),i.skeleton=this.skeleton.uuid)),this.material!==void 0)if(Array.isArray(this.material)){const a=[];for(let l=0,c=this.material.length;l<c;l++)a.push(s(t.materials,this.material[l]));i.material=a}else i.material=s(t.materials,this.material);if(this.children.length>0){i.children=[];for(let a=0;a<this.children.length;a++)i.children.push(this.children[a].toJSON(t).object)}if(this.animations.length>0){i.animations=[];for(let a=0;a<this.animations.length;a++){const l=this.animations[a];i.animations.push(s(t.animations,l))}}if(e){const a=o(t.geometries),l=o(t.materials),c=o(t.textures),u=o(t.images),f=o(t.shapes),h=o(t.skeletons),d=o(t.animations),_=o(t.nodes);a.length>0&&(n.geometries=a),l.length>0&&(n.materials=l),c.length>0&&(n.textures=c),u.length>0&&(n.images=u),f.length>0&&(n.shapes=f),h.length>0&&(n.skeletons=h),d.length>0&&(n.animations=d),_.length>0&&(n.nodes=_)}return n.object=i,n;function o(a){const l=[];for(const c in a){const u=a[c];delete u.metadata,l.push(u)}return l}}clone(t){return new this.constructor().copy(this,t)}copy(t,e=!0){if(this.name=t.name,this.up.copy(t.up),this.position.copy(t.position),this.rotation.order=t.rotation.order,this.quaternion.copy(t.quaternion),this.scale.copy(t.scale),this.matrix.copy(t.matrix),this.matrixWorld.copy(t.matrixWorld),this.matrixAutoUpdate=t.matrixAutoUpdate,this.matrixWorldAutoUpdate=t.matrixWorldAutoUpdate,this.matrixWorldNeedsUpdate=t.matrixWorldNeedsUpdate,this.layers.mask=t.layers.mask,this.visible=t.visible,this.castShadow=t.castShadow,this.receiveShadow=t.receiveShadow,this.frustumCulled=t.frustumCulled,this.renderOrder=t.renderOrder,this.animations=t.animations.slice(),this.userData=JSON.parse(JSON.stringify(t.userData)),e===!0)for(let n=0;n<t.children.length;n++){const i=t.children[n];this.add(i.clone())}return this}}Rn.DEFAULT_UP=new Z(0,1,0),Rn.DEFAULT_MATRIX_AUTO_UPDATE=!0,Rn.DEFAULT_MATRIX_WORLD_AUTO_UPDATE=!0;const ri=new Z,Fi=new Z,Pu=new Z,Oi=new Z,Os=new Z,Bs=new Z,tp=new Z,Du=new Z,Lu=new Z,Iu=new Z,Uu=new Fe,Nu=new Fe,Fu=new Fe;class si{constructor(t=new Z,e=new Z,n=new Z){this.a=t,this.b=e,this.c=n}static getNormal(t,e,n,i){i.subVectors(n,e),ri.subVectors(t,e),i.cross(ri);const s=i.lengthSq();return s>0?i.multiplyScalar(1/Math.sqrt(s)):i.set(0,0,0)}static getBarycoord(t,e,n,i,s){ri.subVectors(i,e),Fi.subVectors(n,e),Pu.subVectors(t,e);const o=ri.dot(ri),a=ri.dot(Fi),l=ri.dot(Pu),c=Fi.dot(Fi),u=Fi.dot(Pu),f=o*c-a*a;if(f===0)return s.set(0,0,0),null;const h=1/f,d=(c*l-a*u)*h,_=(o*u-a*l)*h;return s.set(1-d-_,_,d)}static containsPoint(t,e,n,i){return this.getBarycoord(t,e,n,i,Oi)===null?!1:Oi.x>=0&&Oi.y>=0&&Oi.x+Oi.y<=1}static getInterpolation(t,e,n,i,s,o,a,l){return this.getBarycoord(t,e,n,i,Oi)===null?(l.x=0,l.y=0,"z"in l&&(l.z=0),"w"in l&&(l.w=0),null):(l.setScalar(0),l.addScaledVector(s,Oi.x),l.addScaledVector(o,Oi.y),l.addScaledVector(a,Oi.z),l)}static getInterpolatedAttribute(t,e,n,i,s,o){return Uu.setScalar(0),Nu.setScalar(0),Fu.setScalar(0),Uu.fromBufferAttribute(t,e),Nu.fromBufferAttribute(t,n),Fu.fromBufferAttribute(t,i),o.setScalar(0),o.addScaledVector(Uu,s.x),o.addScaledVector(Nu,s.y),o.addScaledVector(Fu,s.z),o}static isFrontFacing(t,e,n,i){return ri.subVectors(n,e),Fi.subVectors(t,e),ri.cross(Fi).dot(i)<0}set(t,e,n){return this.a.copy(t),this.b.copy(e),this.c.copy(n),this}setFromPointsAndIndices(t,e,n,i){return this.a.copy(t[e]),this.b.copy(t[n]),this.c.copy(t[i]),this}setFromAttributeAndIndices(t,e,n,i){return this.a.fromBufferAttribute(t,e),this.b.fromBufferAttribute(t,n),this.c.fromBufferAttribute(t,i),this}clone(){return new this.constructor().copy(this)}copy(t){return this.a.copy(t.a),this.b.copy(t.b),this.c.copy(t.c),this}getArea(){return ri.subVectors(this.c,this.b),Fi.subVectors(this.a,this.b),ri.cross(Fi).length()*.5}getMidpoint(t){return t.addVectors(this.a,this.b).add(this.c).multiplyScalar(1/3)}getNormal(t){return si.getNormal(this.a,this.b,this.c,t)}getPlane(t){return t.setFromCoplanarPoints(this.a,this.b,this.c)}getBarycoord(t,e){return si.getBarycoord(t,this.a,this.b,this.c,e)}getInterpolation(t,e,n,i,s){return si.getInterpolation(t,this.a,this.b,this.c,e,n,i,s)}containsPoint(t){return si.containsPoint(t,this.a,this.b,this.c)}isFrontFacing(t){return si.isFrontFacing(this.a,this.b,this.c,t)}intersectsBox(t){return t.intersectsTriangle(this)}closestPointToPoint(t,e){const n=this.a,i=this.b,s=this.c;let o,a;Os.subVectors(i,n),Bs.subVectors(s,n),Du.subVectors(t,n);const l=Os.dot(Du),c=Bs.dot(Du);if(l<=0&&c<=0)return e.copy(n);Lu.subVectors(t,i);const u=Os.dot(Lu),f=Bs.dot(Lu);if(u>=0&&f<=u)return e.copy(i);const h=l*f-u*c;if(h<=0&&l>=0&&u<=0)return o=l/(l-u),e.copy(n).addScaledVector(Os,o);Iu.subVectors(t,s);const d=Os.dot(Iu),_=Bs.dot(Iu);if(_>=0&&d<=_)return e.copy(s);const g=d*c-l*_;if(g<=0&&c>=0&&_<=0)return a=c/(c-_),e.copy(n).addScaledVector(Bs,a);const m=u*_-d*f;if(m<=0&&f-u>=0&&d-_>=0)return tp.subVectors(s,i),a=(f-u)/(f-u+(d-_)),e.copy(i).addScaledVector(tp,a);const p=1/(m+g+h);return o=g*p,a=h*p,e.copy(n).addScaledVector(Os,o).addScaledVector(Bs,a)}equals(t){return t.a.equals(this.a)&&t.b.equals(this.b)&&t.c.equals(this.c)}}const ep={aliceblue:15792383,antiquewhite:16444375,aqua:65535,aquamarine:8388564,azure:15794175,beige:16119260,bisque:16770244,black:0,blanchedalmond:16772045,blue:255,blueviolet:9055202,brown:10824234,burlywood:14596231,cadetblue:6266528,chartreuse:8388352,chocolate:13789470,coral:16744272,cornflowerblue:6591981,cornsilk:16775388,crimson:14423100,cyan:65535,darkblue:139,darkcyan:35723,darkgoldenrod:12092939,darkgray:11119017,darkgreen:25600,darkgrey:11119017,darkkhaki:12433259,darkmagenta:9109643,darkolivegreen:5597999,darkorange:16747520,darkorchid:10040012,darkred:9109504,darksalmon:15308410,darkseagreen:9419919,darkslateblue:4734347,darkslategray:3100495,darkslategrey:3100495,darkturquoise:52945,darkviolet:9699539,deeppink:16716947,deepskyblue:49151,dimgray:6908265,dimgrey:6908265,dodgerblue:2003199,firebrick:11674146,floralwhite:16775920,forestgreen:2263842,fuchsia:16711935,gainsboro:14474460,ghostwhite:16316671,gold:16766720,goldenrod:14329120,gray:8421504,green:32768,greenyellow:11403055,grey:8421504,honeydew:15794160,hotpink:16738740,indianred:13458524,indigo:4915330,ivory:16777200,khaki:15787660,lavender:15132410,lavenderblush:16773365,lawngreen:8190976,lemonchiffon:16775885,lightblue:11393254,lightcoral:15761536,lightcyan:14745599,lightgoldenrodyellow:16448210,lightgray:13882323,lightgreen:9498256,lightgrey:13882323,lightpink:16758465,lightsalmon:16752762,lightseagreen:2142890,lightskyblue:8900346,lightslategray:7833753,lightslategrey:7833753,lightsteelblue:11584734,lightyellow:16777184,lime:65280,limegreen:3329330,linen:16445670,magenta:16711935,maroon:8388608,mediumaquamarine:6737322,mediumblue:205,mediumorchid:12211667,mediumpurple:9662683,mediumseagreen:3978097,mediumslateblue:8087790,mediumspringgreen:64154,mediumturquoise:4772300,mediumvioletred:13047173,midnightblue:1644912,mintcream:16121850,mistyrose:16770273,moccasin:16770229,navajowhite:16768685,navy:128,oldlace:16643558,olive:8421376,olivedrab:7048739,orange:16753920,orangered:16729344,orchid:14315734,palegoldenrod:15657130,palegreen:10025880,paleturquoise:11529966,palevioletred:14381203,papayawhip:16773077,peachpuff:16767673,peru:13468991,pink:16761035,plum:14524637,powderblue:11591910,purple:8388736,rebeccapurple:6697881,red:16711680,rosybrown:12357519,royalblue:4286945,saddlebrown:9127187,salmon:16416882,sandybrown:16032864,seagreen:3050327,seashell:16774638,sienna:10506797,silver:12632256,skyblue:8900331,slateblue:6970061,slategray:7372944,slategrey:7372944,snow:16775930,springgreen:65407,steelblue:4620980,tan:13808780,teal:32896,thistle:14204888,tomato:16737095,turquoise:4251856,violet:15631086,wheat:16113331,white:16777215,whitesmoke:16119285,yellow:16776960,yellowgreen:10145074},cr={h:0,s:0,l:0},Za={h:0,s:0,l:0};function Ou(r,t,e){return e<0&&(e+=1),e>1&&(e-=1),e<1/6?r+(t-r)*6*e:e<1/2?t:e<2/3?r+(t-r)*6*(2/3-e):r}class oe{constructor(t,e,n){return this.isColor=!0,this.r=1,this.g=1,this.b=1,this.set(t,e,n)}set(t,e,n){if(e===void 0&&n===void 0){const i=t;i&&i.isColor?this.copy(i):typeof i=="number"?this.setHex(i):typeof i=="string"&&this.setStyle(i)}else this.setRGB(t,e,n);return this}setScalar(t){return this.r=t,this.g=t,this.b=t,this}setHex(t,e=Zn){return t=Math.floor(t),this.r=(t>>16&255)/255,this.g=(t>>8&255)/255,this.b=(t&255)/255,ae.toWorkingColorSpace(this,e),this}setRGB(t,e,n,i=ae.workingColorSpace){return this.r=t,this.g=e,this.b=n,ae.toWorkingColorSpace(this,i),this}setHSL(t,e,n,i=ae.workingColorSpace){if(t=Hg(t,1),e=An(e,0,1),n=An(n,0,1),e===0)this.r=this.g=this.b=n;else{const s=n<=.5?n*(1+e):n+e-n*e,o=2*n-s;this.r=Ou(o,s,t+1/3),this.g=Ou(o,s,t),this.b=Ou(o,s,t-1/3)}return ae.toWorkingColorSpace(this,i),this}setStyle(t,e=Zn){function n(s){s!==void 0&&parseFloat(s)<1&&console.warn("THREE.Color: Alpha component of "+t+" will be ignored.")}let i;if(i=/^(\w+)\(([^\)]*)\)/.exec(t)){let s;const o=i[1],a=i[2];switch(o){case"rgb":case"rgba":if(s=/^\s*(\d+)\s*,\s*(\d+)\s*,\s*(\d+)\s*(?:,\s*(\d*\.?\d+)\s*)?$/.exec(a))return n(s[4]),this.setRGB(Math.min(255,parseInt(s[1],10))/255,Math.min(255,parseInt(s[2],10))/255,Math.min(255,parseInt(s[3],10))/255,e);if(s=/^\s*(\d+)\%\s*,\s*(\d+)\%\s*,\s*(\d+)\%\s*(?:,\s*(\d*\.?\d+)\s*)?$/.exec(a))return n(s[4]),this.setRGB(Math.min(100,parseInt(s[1],10))/100,Math.min(100,parseInt(s[2],10))/100,Math.min(100,parseInt(s[3],10))/100,e);break;case"hsl":case"hsla":if(s=/^\s*(\d*\.?\d+)\s*,\s*(\d*\.?\d+)\%\s*,\s*(\d*\.?\d+)\%\s*(?:,\s*(\d*\.?\d+)\s*)?$/.exec(a))return n(s[4]),this.setHSL(parseFloat(s[1])/360,parseFloat(s[2])/100,parseFloat(s[3])/100,e);break;default:console.warn("THREE.Color: Unknown color model "+t)}}else if(i=/^\#([A-Fa-f\d]+)$/.exec(t)){const s=i[1],o=s.length;if(o===3)return this.setRGB(parseInt(s.charAt(0),16)/15,parseInt(s.charAt(1),16)/15,parseInt(s.charAt(2),16)/15,e);if(o===6)return this.setHex(parseInt(s,16),e);console.warn("THREE.Color: Invalid hex color "+t)}else if(t&&t.length>0)return this.setColorName(t,e);return this}setColorName(t,e=Zn){const n=ep[t.toLowerCase()];return n!==void 0?this.setHex(n,e):console.warn("THREE.Color: Unknown color "+t),this}clone(){return new this.constructor(this.r,this.g,this.b)}copy(t){return this.r=t.r,this.g=t.g,this.b=t.b,this}copySRGBToLinear(t){return this.r=Di(t.r),this.g=Di(t.g),this.b=Di(t.b),this}copyLinearToSRGB(t){return this.r=Cs(t.r),this.g=Cs(t.g),this.b=Cs(t.b),this}convertSRGBToLinear(){return this.copySRGBToLinear(this),this}convertLinearToSRGB(){return this.copyLinearToSRGB(this),this}getHex(t=Zn){return ae.fromWorkingColorSpace(on.copy(this),t),Math.round(An(on.r*255,0,255))*65536+Math.round(An(on.g*255,0,255))*256+Math.round(An(on.b*255,0,255))}getHexString(t=Zn){return("000000"+this.getHex(t).toString(16)).slice(-6)}getHSL(t,e=ae.workingColorSpace){ae.fromWorkingColorSpace(on.copy(this),e);const n=on.r,i=on.g,s=on.b,o=Math.max(n,i,s),a=Math.min(n,i,s);let l,c;const u=(a+o)/2;if(a===o)l=0,c=0;else{const f=o-a;switch(c=u<=.5?f/(o+a):f/(2-o-a),o){case n:l=(i-s)/f+(i<s?6:0);break;case i:l=(s-n)/f+2;break;case s:l=(n-i)/f+4;break}l/=6}return t.h=l,t.s=c,t.l=u,t}getRGB(t,e=ae.workingColorSpace){return ae.fromWorkingColorSpace(on.copy(this),e),t.r=on.r,t.g=on.g,t.b=on.b,t}getStyle(t=Zn){ae.fromWorkingColorSpace(on.copy(this),t);const e=on.r,n=on.g,i=on.b;return t!==Zn?`color(${t} ${e.toFixed(3)} ${n.toFixed(3)} ${i.toFixed(3)})`:`rgb(${Math.round(e*255)},${Math.round(n*255)},${Math.round(i*255)})`}offsetHSL(t,e,n){return this.getHSL(cr),this.setHSL(cr.h+t,cr.s+e,cr.l+n)}add(t){return this.r+=t.r,this.g+=t.g,this.b+=t.b,this}addColors(t,e){return this.r=t.r+e.r,this.g=t.g+e.g,this.b=t.b+e.b,this}addScalar(t){return this.r+=t,this.g+=t,this.b+=t,this}sub(t){return this.r=Math.max(0,this.r-t.r),this.g=Math.max(0,this.g-t.g),this.b=Math.max(0,this.b-t.b),this}multiply(t){return this.r*=t.r,this.g*=t.g,this.b*=t.b,this}multiplyScalar(t){return this.r*=t,this.g*=t,this.b*=t,this}lerp(t,e){return this.r+=(t.r-this.r)*e,this.g+=(t.g-this.g)*e,this.b+=(t.b-this.b)*e,this}lerpColors(t,e,n){return this.r=t.r+(e.r-t.r)*n,this.g=t.g+(e.g-t.g)*n,this.b=t.b+(e.b-t.b)*n,this}lerpHSL(t,e){this.getHSL(cr),t.getHSL(Za);const n=Su(cr.h,Za.h,e),i=Su(cr.s,Za.s,e),s=Su(cr.l,Za.l,e);return this.setHSL(n,i,s),this}setFromVector3(t){return this.r=t.x,this.g=t.y,this.b=t.z,this}applyMatrix3(t){const e=this.r,n=this.g,i=this.b,s=t.elements;return this.r=s[0]*e+s[3]*n+s[6]*i,this.g=s[1]*e+s[4]*n+s[7]*i,this.b=s[2]*e+s[5]*n+s[8]*i,this}equals(t){return t.r===this.r&&t.g===this.g&&t.b===this.b}fromArray(t,e=0){return this.r=t[e],this.g=t[e+1],this.b=t[e+2],this}toArray(t=[],e=0){return t[e]=this.r,t[e+1]=this.g,t[e+2]=this.b,t}fromBufferAttribute(t,e){return this.r=t.getX(e),this.g=t.getY(e),this.b=t.getZ(e),this}toJSON(){return this.getHex()}*[Symbol.iterator](){yield this.r,yield this.g,yield this.b}}const on=new oe;oe.NAMES=ep;let s0=0;class ja extends Rs{static get type(){return"Material"}get type(){return this.constructor.type}set type(t){}constructor(){super(),this.isMaterial=!0,Object.defineProperty(this,"id",{value:s0++}),this.uuid=Uo(),this.name="",this.blending=xs,this.side=er,this.vertexColors=!1,this.opacity=1,this.transparent=!1,this.alphaHash=!1,this.blendSrc=bc,this.blendDst=Ac,this.blendEquation=Lr,this.blendSrcAlpha=null,this.blendDstAlpha=null,this.blendEquationAlpha=null,this.blendColor=new oe(0,0,0),this.blendAlpha=0,this.depthFunc=Ss,this.depthTest=!0,this.depthWrite=!0,this.stencilWriteMask=255,this.stencilFunc=Dd,this.stencilRef=0,this.stencilFuncMask=255,this.stencilFail=ws,this.stencilZFail=ws,this.stencilZPass=ws,this.stencilWrite=!1,this.clippingPlanes=null,this.clipIntersection=!1,this.clipShadows=!1,this.shadowSide=null,this.colorWrite=!0,this.precision=null,this.polygonOffset=!1,this.polygonOffsetFactor=0,this.polygonOffsetUnits=0,this.dithering=!1,this.alphaToCoverage=!1,this.premultipliedAlpha=!1,this.forceSinglePass=!1,this.visible=!0,this.toneMapped=!0,this.userData={},this.version=0,this._alphaTest=0}get alphaTest(){return this._alphaTest}set alphaTest(t){this._alphaTest>0!=t>0&&this.version++,this._alphaTest=t}onBeforeRender(){}onBeforeCompile(){}customProgramCacheKey(){return this.onBeforeCompile.toString()}setValues(t){if(t!==void 0)for(const e in t){const n=t[e];if(n===void 0){console.warn(`THREE.Material: parameter '${e}' has value of undefined.`);continue}const i=this[e];if(i===void 0){console.warn(`THREE.Material: '${e}' is not a property of THREE.${this.type}.`);continue}i&&i.isColor?i.set(n):i&&i.isVector3&&n&&n.isVector3?i.copy(n):this[e]=n}}toJSON(t){const e=t===void 0||typeof t=="string";e&&(t={textures:{},images:{}});const n={metadata:{version:4.6,type:"Material",generator:"Material.toJSON"}};n.uuid=this.uuid,n.type=this.type,this.name!==""&&(n.name=this.name),this.color&&this.color.isColor&&(n.color=this.color.getHex()),this.roughness!==void 0&&(n.roughness=this.roughness),this.metalness!==void 0&&(n.metalness=this.metalness),this.sheen!==void 0&&(n.sheen=this.sheen),this.sheenColor&&this.sheenColor.isColor&&(n.sheenColor=this.sheenColor.getHex()),this.sheenRoughness!==void 0&&(n.sheenRoughness=this.sheenRoughness),this.emissive&&this.emissive.isColor&&(n.emissive=this.emissive.getHex()),this.emissiveIntensity!==void 0&&this.emissiveIntensity!==1&&(n.emissiveIntensity=this.emissiveIntensity),this.specular&&this.specular.isColor&&(n.specular=this.specular.getHex()),this.specularIntensity!==void 0&&(n.specularIntensity=this.specularIntensity),this.specularColor&&this.specularColor.isColor&&(n.specularColor=this.specularColor.getHex()),this.shininess!==void 0&&(n.shininess=this.shininess),this.clearcoat!==void 0&&(n.clearcoat=this.clearcoat),this.clearcoatRoughness!==void 0&&(n.clearcoatRoughness=this.clearcoatRoughness),this.clearcoatMap&&this.clearcoatMap.isTexture&&(n.clearcoatMap=this.clearcoatMap.toJSON(t).uuid),this.clearcoatRoughnessMap&&this.clearcoatRoughnessMap.isTexture&&(n.clearcoatRoughnessMap=this.clearcoatRoughnessMap.toJSON(t).uuid),this.clearcoatNormalMap&&this.clearcoatNormalMap.isTexture&&(n.clearcoatNormalMap=this.clearcoatNormalMap.toJSON(t).uuid,n.clearcoatNormalScale=this.clearcoatNormalScale.toArray()),this.dispersion!==void 0&&(n.dispersion=this.dispersion),this.iridescence!==void 0&&(n.iridescence=this.iridescence),this.iridescenceIOR!==void 0&&(n.iridescenceIOR=this.iridescenceIOR),this.iridescenceThicknessRange!==void 0&&(n.iridescenceThicknessRange=this.iridescenceThicknessRange),this.iridescenceMap&&this.iridescenceMap.isTexture&&(n.iridescenceMap=this.iridescenceMap.toJSON(t).uuid),this.iridescenceThicknessMap&&this.iridescenceThicknessMap.isTexture&&(n.iridescenceThicknessMap=this.iridescenceThicknessMap.toJSON(t).uuid),this.anisotropy!==void 0&&(n.anisotropy=this.anisotropy),this.anisotropyRotation!==void 0&&(n.anisotropyRotation=this.anisotropyRotation),this.anisotropyMap&&this.anisotropyMap.isTexture&&(n.anisotropyMap=this.anisotropyMap.toJSON(t).uuid),this.map&&this.map.isTexture&&(n.map=this.map.toJSON(t).uuid),this.matcap&&this.matcap.isTexture&&(n.matcap=this.matcap.toJSON(t).uuid),this.alphaMap&&this.alphaMap.isTexture&&(n.alphaMap=this.alphaMap.toJSON(t).uuid),this.lightMap&&this.lightMap.isTexture&&(n.lightMap=this.lightMap.toJSON(t).uuid,n.lightMapIntensity=this.lightMapIntensity),this.aoMap&&this.aoMap.isTexture&&(n.aoMap=this.aoMap.toJSON(t).uuid,n.aoMapIntensity=this.aoMapIntensity),this.bumpMap&&this.bumpMap.isTexture&&(n.bumpMap=this.bumpMap.toJSON(t).uuid,n.bumpScale=this.bumpScale),this.normalMap&&this.normalMap.isTexture&&(n.normalMap=this.normalMap.toJSON(t).uuid,n.normalMapType=this.normalMapType,n.normalScale=this.normalScale.toArray()),this.displacementMap&&this.displacementMap.isTexture&&(n.displacementMap=this.displacementMap.toJSON(t).uuid,n.displacementScale=this.displacementScale,n.displacementBias=this.displacementBias),this.roughnessMap&&this.roughnessMap.isTexture&&(n.roughnessMap=this.roughnessMap.toJSON(t).uuid),this.metalnessMap&&this.metalnessMap.isTexture&&(n.metalnessMap=this.metalnessMap.toJSON(t).uuid),this.emissiveMap&&this.emissiveMap.isTexture&&(n.emissiveMap=this.emissiveMap.toJSON(t).uuid),this.specularMap&&this.specularMap.isTexture&&(n.specularMap=this.specularMap.toJSON(t).uuid),this.specularIntensityMap&&this.specularIntensityMap.isTexture&&(n.specularIntensityMap=this.specularIntensityMap.toJSON(t).uuid),this.specularColorMap&&this.specularColorMap.isTexture&&(n.specularColorMap=this.specularColorMap.toJSON(t).uuid),this.envMap&&this.envMap.isTexture&&(n.envMap=this.envMap.toJSON(t).uuid,this.combine!==void 0&&(n.combine=this.combine)),this.envMapRotation!==void 0&&(n.envMapRotation=this.envMapRotation.toArray()),this.envMapIntensity!==void 0&&(n.envMapIntensity=this.envMapIntensity),this.reflectivity!==void 0&&(n.reflectivity=this.reflectivity),this.refractionRatio!==void 0&&(n.refractionRatio=this.refractionRatio),this.gradientMap&&this.gradientMap.isTexture&&(n.gradientMap=this.gradientMap.toJSON(t).uuid),this.transmission!==void 0&&(n.transmission=this.transmission),this.transmissionMap&&this.transmissionMap.isTexture&&(n.transmissionMap=this.transmissionMap.toJSON(t).uuid),this.thickness!==void 0&&(n.thickness=this.thickness),this.thicknessMap&&this.thicknessMap.isTexture&&(n.thicknessMap=this.thicknessMap.toJSON(t).uuid),this.attenuationDistance!==void 0&&this.attenuationDistance!==1/0&&(n.attenuationDistance=this.attenuationDistance),this.attenuationColor!==void 0&&(n.attenuationColor=this.attenuationColor.getHex()),this.size!==void 0&&(n.size=this.size),this.shadowSide!==null&&(n.shadowSide=this.shadowSide),this.sizeAttenuation!==void 0&&(n.sizeAttenuation=this.sizeAttenuation),this.blending!==xs&&(n.blending=this.blending),this.side!==er&&(n.side=this.side),this.vertexColors===!0&&(n.vertexColors=!0),this.opacity<1&&(n.opacity=this.opacity),this.transparent===!0&&(n.transparent=!0),this.blendSrc!==bc&&(n.blendSrc=this.blendSrc),this.blendDst!==Ac&&(n.blendDst=this.blendDst),this.blendEquation!==Lr&&(n.blendEquation=this.blendEquation),this.blendSrcAlpha!==null&&(n.blendSrcAlpha=this.blendSrcAlpha),this.blendDstAlpha!==null&&(n.blendDstAlpha=this.blendDstAlpha),this.blendEquationAlpha!==null&&(n.blendEquationAlpha=this.blendEquationAlpha),this.blendColor&&this.blendColor.isColor&&(n.blendColor=this.blendColor.getHex()),this.blendAlpha!==0&&(n.blendAlpha=this.blendAlpha),this.depthFunc!==Ss&&(n.depthFunc=this.depthFunc),this.depthTest===!1&&(n.depthTest=this.depthTest),this.depthWrite===!1&&(n.depthWrite=this.depthWrite),this.colorWrite===!1&&(n.colorWrite=this.colorWrite),this.stencilWriteMask!==255&&(n.stencilWriteMask=this.stencilWriteMask),this.stencilFunc!==Dd&&(n.stencilFunc=this.stencilFunc),this.stencilRef!==0&&(n.stencilRef=this.stencilRef),this.stencilFuncMask!==255&&(n.stencilFuncMask=this.stencilFuncMask),this.stencilFail!==ws&&(n.stencilFail=this.stencilFail),this.stencilZFail!==ws&&(n.stencilZFail=this.stencilZFail),this.stencilZPass!==ws&&(n.stencilZPass=this.stencilZPass),this.stencilWrite===!0&&(n.stencilWrite=this.stencilWrite),this.rotation!==void 0&&this.rotation!==0&&(n.rotation=this.rotation),this.polygonOffset===!0&&(n.polygonOffset=!0),this.polygonOffsetFactor!==0&&(n.polygonOffsetFactor=this.polygonOffsetFactor),this.polygonOffsetUnits!==0&&(n.polygonOffsetUnits=this.polygonOffsetUnits),this.linewidth!==void 0&&this.linewidth!==1&&(n.linewidth=this.linewidth),this.dashSize!==void 0&&(n.dashSize=this.dashSize),this.gapSize!==void 0&&(n.gapSize=this.gapSize),this.scale!==void 0&&(n.scale=this.scale),this.dithering===!0&&(n.dithering=!0),this.alphaTest>0&&(n.alphaTest=this.alphaTest),this.alphaHash===!0&&(n.alphaHash=!0),this.alphaToCoverage===!0&&(n.alphaToCoverage=!0),this.premultipliedAlpha===!0&&(n.premultipliedAlpha=!0),this.forceSinglePass===!0&&(n.forceSinglePass=!0),this.wireframe===!0&&(n.wireframe=!0),this.wireframeLinewidth>1&&(n.wireframeLinewidth=this.wireframeLinewidth),this.wireframeLinecap!=="round"&&(n.wireframeLinecap=this.wireframeLinecap),this.wireframeLinejoin!=="round"&&(n.wireframeLinejoin=this.wireframeLinejoin),this.flatShading===!0&&(n.flatShading=!0),this.visible===!1&&(n.visible=!1),this.toneMapped===!1&&(n.toneMapped=!1),this.fog===!1&&(n.fog=!1),Object.keys(this.userData).length>0&&(n.userData=this.userData);function i(s){const o=[];for(const a in s){const l=s[a];delete l.metadata,o.push(l)}return o}if(e){const s=i(t.textures),o=i(t.images);s.length>0&&(n.textures=s),o.length>0&&(n.images=o)}return n}clone(){return new this.constructor().copy(this)}copy(t){this.name=t.name,this.blending=t.blending,this.side=t.side,this.vertexColors=t.vertexColors,this.opacity=t.opacity,this.transparent=t.transparent,this.blendSrc=t.blendSrc,this.blendDst=t.blendDst,this.blendEquation=t.blendEquation,this.blendSrcAlpha=t.blendSrcAlpha,this.blendDstAlpha=t.blendDstAlpha,this.blendEquationAlpha=t.blendEquationAlpha,this.blendColor.copy(t.blendColor),this.blendAlpha=t.blendAlpha,this.depthFunc=t.depthFunc,this.depthTest=t.depthTest,this.depthWrite=t.depthWrite,this.stencilWriteMask=t.stencilWriteMask,this.stencilFunc=t.stencilFunc,this.stencilRef=t.stencilRef,this.stencilFuncMask=t.stencilFuncMask,this.stencilFail=t.stencilFail,this.stencilZFail=t.stencilZFail,this.stencilZPass=t.stencilZPass,this.stencilWrite=t.stencilWrite;const e=t.clippingPlanes;let n=null;if(e!==null){const i=e.length;n=new Array(i);for(let s=0;s!==i;++s)n[s]=e[s].clone()}return this.clippingPlanes=n,this.clipIntersection=t.clipIntersection,this.clipShadows=t.clipShadows,this.shadowSide=t.shadowSide,this.colorWrite=t.colorWrite,this.precision=t.precision,this.polygonOffset=t.polygonOffset,this.polygonOffsetFactor=t.polygonOffsetFactor,this.polygonOffsetUnits=t.polygonOffsetUnits,this.dithering=t.dithering,this.alphaTest=t.alphaTest,this.alphaHash=t.alphaHash,this.alphaToCoverage=t.alphaToCoverage,this.premultipliedAlpha=t.premultipliedAlpha,this.forceSinglePass=t.forceSinglePass,this.visible=t.visible,this.toneMapped=t.toneMapped,this.userData=JSON.parse(JSON.stringify(t.userData)),this}dispose(){this.dispatchEvent({type:"dispose"})}set needsUpdate(t){t===!0&&this.version++}onBuild(){console.warn("Material: onBuild() has been removed.")}}class Bu extends ja{static get type(){return"MeshBasicMaterial"}constructor(t){super(),this.isMeshBasicMaterial=!0,this.color=new oe(16777215),this.map=null,this.lightMap=null,this.lightMapIntensity=1,this.aoMap=null,this.aoMapIntensity=1,this.specularMap=null,this.alphaMap=null,this.envMap=null,this.envMapRotation=new Ui,this.combine=Sd,this.reflectivity=1,this.refractionRatio=.98,this.wireframe=!1,this.wireframeLinewidth=1,this.wireframeLinecap="round",this.wireframeLinejoin="round",this.fog=!0,this.setValues(t)}copy(t){return super.copy(t),this.color.copy(t.color),this.map=t.map,this.lightMap=t.lightMap,this.lightMapIntensity=t.lightMapIntensity,this.aoMap=t.aoMap,this.aoMapIntensity=t.aoMapIntensity,this.specularMap=t.specularMap,this.alphaMap=t.alphaMap,this.envMap=t.envMap,this.envMapRotation.copy(t.envMapRotation),this.combine=t.combine,this.reflectivity=t.reflectivity,this.refractionRatio=t.refractionRatio,this.wireframe=t.wireframe,this.wireframeLinewidth=t.wireframeLinewidth,this.wireframeLinecap=t.wireframeLinecap,this.wireframeLinejoin=t.wireframeLinejoin,this.fog=t.fog,this}}const ke=new Z,Ja=new Se;class oi{constructor(t,e,n=!1){if(Array.isArray(t))throw new TypeError("THREE.BufferAttribute: array should be a Typed Array.");this.isBufferAttribute=!0,this.name="",this.array=t,this.itemSize=e,this.count=t!==void 0?t.length/e:0,this.normalized=n,this.usage=Id,this.updateRanges=[],this.gpuType=vi,this.version=0}onUploadCallback(){}set needsUpdate(t){t===!0&&this.version++}setUsage(t){return this.usage=t,this}addUpdateRange(t,e){this.updateRanges.push({start:t,count:e})}clearUpdateRanges(){this.updateRanges.length=0}copy(t){return this.name=t.name,this.array=new t.array.constructor(t.array),this.itemSize=t.itemSize,this.count=t.count,this.normalized=t.normalized,this.usage=t.usage,this.gpuType=t.gpuType,this}copyAt(t,e,n){t*=this.itemSize,n*=e.itemSize;for(let i=0,s=this.itemSize;i<s;i++)this.array[t+i]=e.array[n+i];return this}copyArray(t){return this.array.set(t),this}applyMatrix3(t){if(this.itemSize===2)for(let e=0,n=this.count;e<n;e++)Ja.fromBufferAttribute(this,e),Ja.applyMatrix3(t),this.setXY(e,Ja.x,Ja.y);else if(this.itemSize===3)for(let e=0,n=this.count;e<n;e++)ke.fromBufferAttribute(this,e),ke.applyMatrix3(t),this.setXYZ(e,ke.x,ke.y,ke.z);return this}applyMatrix4(t){for(let e=0,n=this.count;e<n;e++)ke.fromBufferAttribute(this,e),ke.applyMatrix4(t),this.setXYZ(e,ke.x,ke.y,ke.z);return this}applyNormalMatrix(t){for(let e=0,n=this.count;e<n;e++)ke.fromBufferAttribute(this,e),ke.applyNormalMatrix(t),this.setXYZ(e,ke.x,ke.y,ke.z);return this}transformDirection(t){for(let e=0,n=this.count;e<n;e++)ke.fromBufferAttribute(this,e),ke.transformDirection(t),this.setXYZ(e,ke.x,ke.y,ke.z);return this}set(t,e=0){return this.array.set(t,e),this}getComponent(t,e){let n=this.array[t*this.itemSize+e];return this.normalized&&(n=No(n,this.array)),n}setComponent(t,e,n){return this.normalized&&(n=wn(n,this.array)),this.array[t*this.itemSize+e]=n,this}getX(t){let e=this.array[t*this.itemSize];return this.normalized&&(e=No(e,this.array)),e}setX(t,e){return this.normalized&&(e=wn(e,this.array)),this.array[t*this.itemSize]=e,this}getY(t){let e=this.array[t*this.itemSize+1];return this.normalized&&(e=No(e,this.array)),e}setY(t,e){return this.normalized&&(e=wn(e,this.array)),this.array[t*this.itemSize+1]=e,this}getZ(t){let e=this.array[t*this.itemSize+2];return this.normalized&&(e=No(e,this.array)),e}setZ(t,e){return this.normalized&&(e=wn(e,this.array)),this.array[t*this.itemSize+2]=e,this}getW(t){let e=this.array[t*this.itemSize+3];return this.normalized&&(e=No(e,this.array)),e}setW(t,e){return this.normalized&&(e=wn(e,this.array)),this.array[t*this.itemSize+3]=e,this}setXY(t,e,n){return t*=this.itemSize,this.normalized&&(e=wn(e,this.array),n=wn(n,this.array)),this.array[t+0]=e,this.array[t+1]=n,this}setXYZ(t,e,n,i){return t*=this.itemSize,this.normalized&&(e=wn(e,this.array),n=wn(n,this.array),i=wn(i,this.array)),this.array[t+0]=e,this.array[t+1]=n,this.array[t+2]=i,this}setXYZW(t,e,n,i,s){return t*=this.itemSize,this.normalized&&(e=wn(e,this.array),n=wn(n,this.array),i=wn(i,this.array),s=wn(s,this.array)),this.array[t+0]=e,this.array[t+1]=n,this.array[t+2]=i,this.array[t+3]=s,this}onUpload(t){return this.onUploadCallback=t,this}clone(){return new this.constructor(this.array,this.itemSize).copy(this)}toJSON(){const t={itemSize:this.itemSize,type:this.array.constructor.name,array:Array.from(this.array),normalized:this.normalized};return this.name!==""&&(t.name=this.name),this.usage!==Id&&(t.usage=this.usage),t}}class np extends oi{constructor(t,e,n){super(new Uint16Array(t),e,n)}}class ip extends oi{constructor(t,e,n){super(new Uint32Array(t),e,n)}}class kr extends oi{constructor(t,e,n){super(new Float32Array(t),e,n)}}let o0=0;const jn=new Pe,zu=new Rn,zs=new Z,Hn=new Or,Vo=new Or,Ze=new Z;class Hr extends Rs{constructor(){super(),this.isBufferGeometry=!0,Object.defineProperty(this,"id",{value:o0++}),this.uuid=Uo(),this.name="",this.type="BufferGeometry",this.index=null,this.indirect=null,this.attributes={},this.morphAttributes={},this.morphTargetsRelative=!1,this.groups=[],this.boundingBox=null,this.boundingSphere=null,this.drawRange={start:0,count:1/0},this.userData={}}getIndex(){return this.index}setIndex(t){return Array.isArray(t)?this.index=new(Fd(t)?ip:np)(t,1):this.index=t,this}setIndirect(t){return this.indirect=t,this}getIndirect(){return this.indirect}getAttribute(t){return this.attributes[t]}setAttribute(t,e){return this.attributes[t]=e,this}deleteAttribute(t){return delete this.attributes[t],this}hasAttribute(t){return this.attributes[t]!==void 0}addGroup(t,e,n=0){this.groups.push({start:t,count:e,materialIndex:n})}clearGroups(){this.groups=[]}setDrawRange(t,e){this.drawRange.start=t,this.drawRange.count=e}applyMatrix4(t){const e=this.attributes.position;e!==void 0&&(e.applyMatrix4(t),e.needsUpdate=!0);const n=this.attributes.normal;if(n!==void 0){const s=new Zt().getNormalMatrix(t);n.applyNormalMatrix(s),n.needsUpdate=!0}const i=this.attributes.tangent;return i!==void 0&&(i.transformDirection(t),i.needsUpdate=!0),this.boundingBox!==null&&this.computeBoundingBox(),this.boundingSphere!==null&&this.computeBoundingSphere(),this}applyQuaternion(t){return jn.makeRotationFromQuaternion(t),this.applyMatrix4(jn),this}rotateX(t){return jn.makeRotationX(t),this.applyMatrix4(jn),this}rotateY(t){return jn.makeRotationY(t),this.applyMatrix4(jn),this}rotateZ(t){return jn.makeRotationZ(t),this.applyMatrix4(jn),this}translate(t,e,n){return jn.makeTranslation(t,e,n),this.applyMatrix4(jn),this}scale(t,e,n){return jn.makeScale(t,e,n),this.applyMatrix4(jn),this}lookAt(t){return zu.lookAt(t),zu.updateMatrix(),this.applyMatrix4(zu.matrix),this}center(){return this.computeBoundingBox(),this.boundingBox.getCenter(zs).negate(),this.translate(zs.x,zs.y,zs.z),this}setFromPoints(t){const e=this.getAttribute("position");if(e===void 0){const n=[];for(let i=0,s=t.length;i<s;i++){const o=t[i];n.push(o.x,o.y,o.z||0)}this.setAttribute("position",new kr(n,3))}else{for(let n=0,i=e.count;n<i;n++){const s=t[n];e.setXYZ(n,s.x,s.y,s.z||0)}t.length>e.count&&console.warn("THREE.BufferGeometry: Buffer size too small for points data. Use .dispose() and create a new geometry."),e.needsUpdate=!0}return this}computeBoundingBox(){this.boundingBox===null&&(this.boundingBox=new Or);const t=this.attributes.position,e=this.morphAttributes.position;if(t&&t.isGLBufferAttribute){console.error("THREE.BufferGeometry.computeBoundingBox(): GLBufferAttribute requires a manual bounding box.",this),this.boundingBox.set(new Z(-1/0,-1/0,-1/0),new Z(1/0,1/0,1/0));return}if(t!==void 0){if(this.boundingBox.setFromBufferAttribute(t),e)for(let n=0,i=e.length;n<i;n++){const s=e[n];Hn.setFromBufferAttribute(s),this.morphTargetsRelative?(Ze.addVectors(this.boundingBox.min,Hn.min),this.boundingBox.expandByPoint(Ze),Ze.addVectors(this.boundingBox.max,Hn.max),this.boundingBox.expandByPoint(Ze)):(this.boundingBox.expandByPoint(Hn.min),this.boundingBox.expandByPoint(Hn.max))}}else this.boundingBox.makeEmpty();(isNaN(this.boundingBox.min.x)||isNaN(this.boundingBox.min.y)||isNaN(this.boundingBox.min.z))&&console.error('THREE.BufferGeometry.computeBoundingBox(): Computed min/max have NaN values. The "position" attribute is likely to have NaN values.',this)}computeBoundingSphere(){this.boundingSphere===null&&(this.boundingSphere=new ko);const t=this.attributes.position,e=this.morphAttributes.position;if(t&&t.isGLBufferAttribute){console.error("THREE.BufferGeometry.computeBoundingSphere(): GLBufferAttribute requires a manual bounding sphere.",this),this.boundingSphere.set(new Z,1/0);return}if(t){const n=this.boundingSphere.center;if(Hn.setFromBufferAttribute(t),e)for(let s=0,o=e.length;s<o;s++){const a=e[s];Vo.setFromBufferAttribute(a),this.morphTargetsRelative?(Ze.addVectors(Hn.min,Vo.min),Hn.expandByPoint(Ze),Ze.addVectors(Hn.max,Vo.max),Hn.expandByPoint(Ze)):(Hn.expandByPoint(Vo.min),Hn.expandByPoint(Vo.max))}Hn.getCenter(n);let i=0;for(let s=0,o=t.count;s<o;s++)Ze.fromBufferAttribute(t,s),i=Math.max(i,n.distanceToSquared(Ze));if(e)for(let s=0,o=e.length;s<o;s++){const a=e[s],l=this.morphTargetsRelative;for(let c=0,u=a.count;c<u;c++)Ze.fromBufferAttribute(a,c),l&&(zs.fromBufferAttribute(t,c),Ze.add(zs)),i=Math.max(i,n.distanceToSquared(Ze))}this.boundingSphere.radius=Math.sqrt(i),isNaN(this.boundingSphere.radius)&&console.error('THREE.BufferGeometry.computeBoundingSphere(): Computed radius is NaN. The "position" attribute is likely to have NaN values.',this)}}computeTangents(){const t=this.index,e=this.attributes;if(t===null||e.position===void 0||e.normal===void 0||e.uv===void 0){console.error("THREE.BufferGeometry: .computeTangents() failed. Missing required attributes (index, position, normal or uv)");return}const n=e.position,i=e.normal,s=e.uv;this.hasAttribute("tangent")===!1&&this.setAttribute("tangent",new oi(new Float32Array(4*n.count),4));const o=this.getAttribute("tangent"),a=[],l=[];for(let R=0;R<n.count;R++)a[R]=new Z,l[R]=new Z;const c=new Z,u=new Z,f=new Z,h=new Se,d=new Se,_=new Se,g=new Z,m=new Z;function p(R,S,x){c.fromBufferAttribute(n,R),u.fromBufferAttribute(n,S),f.fromBufferAttribute(n,x),h.fromBufferAttribute(s,R),d.fromBufferAttribute(s,S),_.fromBufferAttribute(s,x),u.sub(c),f.sub(c),d.sub(h),_.sub(h);const L=1/(d.x*_.y-_.x*d.y);isFinite(L)&&(g.copy(u).multiplyScalar(_.y).addScaledVector(f,-d.y).multiplyScalar(L),m.copy(f).multiplyScalar(d.x).addScaledVector(u,-_.x).multiplyScalar(L),a[R].add(g),a[S].add(g),a[x].add(g),l[R].add(m),l[S].add(m),l[x].add(m))}let y=this.groups;y.length===0&&(y=[{start:0,count:t.count}]);for(let R=0,S=y.length;R<S;++R){const x=y[R],L=x.start,F=x.count;for(let B=L,G=L+F;B<G;B+=3)p(t.getX(B+0),t.getX(B+1),t.getX(B+2))}const E=new Z,v=new Z,C=new Z,w=new Z;function b(R){C.fromBufferAttribute(i,R),w.copy(C);const S=a[R];E.copy(S),E.sub(C.multiplyScalar(C.dot(S))).normalize(),v.crossVectors(w,S);const L=v.dot(l[R])<0?-1:1;o.setXYZW(R,E.x,E.y,E.z,L)}for(let R=0,S=y.length;R<S;++R){const x=y[R],L=x.start,F=x.count;for(let B=L,G=L+F;B<G;B+=3)b(t.getX(B+0)),b(t.getX(B+1)),b(t.getX(B+2))}}computeVertexNormals(){const t=this.index,e=this.getAttribute("position");if(e!==void 0){let n=this.getAttribute("normal");if(n===void 0)n=new oi(new Float32Array(e.count*3),3),this.setAttribute("normal",n);else for(let h=0,d=n.count;h<d;h++)n.setXYZ(h,0,0,0);const i=new Z,s=new Z,o=new Z,a=new Z,l=new Z,c=new Z,u=new Z,f=new Z;if(t)for(let h=0,d=t.count;h<d;h+=3){const _=t.getX(h+0),g=t.getX(h+1),m=t.getX(h+2);i.fromBufferAttribute(e,_),s.fromBufferAttribute(e,g),o.fromBufferAttribute(e,m),u.subVectors(o,s),f.subVectors(i,s),u.cross(f),a.fromBufferAttribute(n,_),l.fromBufferAttribute(n,g),c.fromBufferAttribute(n,m),a.add(u),l.add(u),c.add(u),n.setXYZ(_,a.x,a.y,a.z),n.setXYZ(g,l.x,l.y,l.z),n.setXYZ(m,c.x,c.y,c.z)}else for(let h=0,d=e.count;h<d;h+=3)i.fromBufferAttribute(e,h+0),s.fromBufferAttribute(e,h+1),o.fromBufferAttribute(e,h+2),u.subVectors(o,s),f.subVectors(i,s),u.cross(f),n.setXYZ(h+0,u.x,u.y,u.z),n.setXYZ(h+1,u.x,u.y,u.z),n.setXYZ(h+2,u.x,u.y,u.z);this.normalizeNormals(),n.needsUpdate=!0}}normalizeNormals(){const t=this.attributes.normal;for(let e=0,n=t.count;e<n;e++)Ze.fromBufferAttribute(t,e),Ze.normalize(),t.setXYZ(e,Ze.x,Ze.y,Ze.z)}toNonIndexed(){function t(a,l){const c=a.array,u=a.itemSize,f=a.normalized,h=new c.constructor(l.length*u);let d=0,_=0;for(let g=0,m=l.length;g<m;g++){a.isInterleavedBufferAttribute?d=l[g]*a.data.stride+a.offset:d=l[g]*u;for(let p=0;p<u;p++)h[_++]=c[d++]}return new oi(h,u,f)}if(this.index===null)return console.warn("THREE.BufferGeometry.toNonIndexed(): BufferGeometry is already non-indexed."),this;const e=new Hr,n=this.index.array,i=this.attributes;for(const a in i){const l=i[a],c=t(l,n);e.setAttribute(a,c)}const s=this.morphAttributes;for(const a in s){const l=[],c=s[a];for(let u=0,f=c.length;u<f;u++){const h=c[u],d=t(h,n);l.push(d)}e.morphAttributes[a]=l}e.morphTargetsRelative=this.morphTargetsRelative;const o=this.groups;for(let a=0,l=o.length;a<l;a++){const c=o[a];e.addGroup(c.start,c.count,c.materialIndex)}return e}toJSON(){const t={metadata:{version:4.6,type:"BufferGeometry",generator:"BufferGeometry.toJSON"}};if(t.uuid=this.uuid,t.type=this.type,this.name!==""&&(t.name=this.name),Object.keys(this.userData).length>0&&(t.userData=this.userData),this.parameters!==void 0){const l=this.parameters;for(const c in l)l[c]!==void 0&&(t[c]=l[c]);return t}t.data={attributes:{}};const e=this.index;e!==null&&(t.data.index={type:e.array.constructor.name,array:Array.prototype.slice.call(e.array)});const n=this.attributes;for(const l in n){const c=n[l];t.data.attributes[l]=c.toJSON(t.data)}const i={};let s=!1;for(const l in this.morphAttributes){const c=this.morphAttributes[l],u=[];for(let f=0,h=c.length;f<h;f++){const d=c[f];u.push(d.toJSON(t.data))}u.length>0&&(i[l]=u,s=!0)}s&&(t.data.morphAttributes=i,t.data.morphTargetsRelative=this.morphTargetsRelative);const o=this.groups;o.length>0&&(t.data.groups=JSON.parse(JSON.stringify(o)));const a=this.boundingSphere;return a!==null&&(t.data.boundingSphere={center:a.center.toArray(),radius:a.radius}),t}clone(){return new this.constructor().copy(this)}copy(t){this.index=null,this.attributes={},this.morphAttributes={},this.groups=[],this.boundingBox=null,this.boundingSphere=null;const e={};this.name=t.name;const n=t.index;n!==null&&this.setIndex(n.clone(e));const i=t.attributes;for(const c in i){const u=i[c];this.setAttribute(c,u.clone(e))}const s=t.morphAttributes;for(const c in s){const u=[],f=s[c];for(let h=0,d=f.length;h<d;h++)u.push(f[h].clone(e));this.morphAttributes[c]=u}this.morphTargetsRelative=t.morphTargetsRelative;const o=t.groups;for(let c=0,u=o.length;c<u;c++){const f=o[c];this.addGroup(f.start,f.count,f.materialIndex)}const a=t.boundingBox;a!==null&&(this.boundingBox=a.clone());const l=t.boundingSphere;return l!==null&&(this.boundingSphere=l.clone()),this.drawRange.start=t.drawRange.start,this.drawRange.count=t.drawRange.count,this.userData=t.userData,this}dispose(){this.dispatchEvent({type:"dispose"})}}const rp=new Pe,Vr=new Jg,Qa=new ko,sp=new Z,tl=new Z,el=new Z,nl=new Z,ku=new Z,il=new Z,op=new Z,rl=new Z;class ai extends Rn{constructor(t=new Hr,e=new Bu){super(),this.isMesh=!0,this.type="Mesh",this.geometry=t,this.material=e,this.updateMorphTargets()}copy(t,e){return super.copy(t,e),t.morphTargetInfluences!==void 0&&(this.morphTargetInfluences=t.morphTargetInfluences.slice()),t.morphTargetDictionary!==void 0&&(this.morphTargetDictionary=Object.assign({},t.morphTargetDictionary)),this.material=Array.isArray(t.material)?t.material.slice():t.material,this.geometry=t.geometry,this}updateMorphTargets(){const e=this.geometry.morphAttributes,n=Object.keys(e);if(n.length>0){const i=e[n[0]];if(i!==void 0){this.morphTargetInfluences=[],this.morphTargetDictionary={};for(let s=0,o=i.length;s<o;s++){const a=i[s].name||String(s);this.morphTargetInfluences.push(0),this.morphTargetDictionary[a]=s}}}}getVertexPosition(t,e){const n=this.geometry,i=n.attributes.position,s=n.morphAttributes.position,o=n.morphTargetsRelative;e.fromBufferAttribute(i,t);const a=this.morphTargetInfluences;if(s&&a){il.set(0,0,0);for(let l=0,c=s.length;l<c;l++){const u=a[l],f=s[l];u!==0&&(ku.fromBufferAttribute(f,t),o?il.addScaledVector(ku,u):il.addScaledVector(ku.sub(e),u))}e.add(il)}return e}raycast(t,e){const n=this.geometry,i=this.material,s=this.matrixWorld;i!==void 0&&(n.boundingSphere===null&&n.computeBoundingSphere(),Qa.copy(n.boundingSphere),Qa.applyMatrix4(s),Vr.copy(t.ray).recast(t.near),!(Qa.containsPoint(Vr.origin)===!1&&(Vr.intersectSphere(Qa,sp)===null||Vr.origin.distanceToSquared(sp)>(t.far-t.near)**2))&&(rp.copy(s).invert(),Vr.copy(t.ray).applyMatrix4(rp),!(n.boundingBox!==null&&Vr.intersectsBox(n.boundingBox)===!1)&&this._computeIntersections(t,e,Vr)))}_computeIntersections(t,e,n){let i;const s=this.geometry,o=this.material,a=s.index,l=s.attributes.position,c=s.attributes.uv,u=s.attributes.uv1,f=s.attributes.normal,h=s.groups,d=s.drawRange;if(a!==null)if(Array.isArray(o))for(let _=0,g=h.length;_<g;_++){const m=h[_],p=o[m.materialIndex],y=Math.max(m.start,d.start),E=Math.min(a.count,Math.min(m.start+m.count,d.start+d.count));for(let v=y,C=E;v<C;v+=3){const w=a.getX(v),b=a.getX(v+1),R=a.getX(v+2);i=sl(this,p,t,n,c,u,f,w,b,R),i&&(i.faceIndex=Math.floor(v/3),i.face.materialIndex=m.materialIndex,e.push(i))}}else{const _=Math.max(0,d.start),g=Math.min(a.count,d.start+d.count);for(let m=_,p=g;m<p;m+=3){const y=a.getX(m),E=a.getX(m+1),v=a.getX(m+2);i=sl(this,o,t,n,c,u,f,y,E,v),i&&(i.faceIndex=Math.floor(m/3),e.push(i))}}else if(l!==void 0)if(Array.isArray(o))for(let _=0,g=h.length;_<g;_++){const m=h[_],p=o[m.materialIndex],y=Math.max(m.start,d.start),E=Math.min(l.count,Math.min(m.start+m.count,d.start+d.count));for(let v=y,C=E;v<C;v+=3){const w=v,b=v+1,R=v+2;i=sl(this,p,t,n,c,u,f,w,b,R),i&&(i.faceIndex=Math.floor(v/3),i.face.materialIndex=m.materialIndex,e.push(i))}}else{const _=Math.max(0,d.start),g=Math.min(l.count,d.start+d.count);for(let m=_,p=g;m<p;m+=3){const y=m,E=m+1,v=m+2;i=sl(this,o,t,n,c,u,f,y,E,v),i&&(i.faceIndex=Math.floor(m/3),e.push(i))}}}}function a0(r,t,e,n,i,s,o,a){let l;if(t.side===bn?l=n.intersectTriangle(o,s,i,!0,a):l=n.intersectTriangle(i,s,o,t.side===er,a),l===null)return null;rl.copy(a),rl.applyMatrix4(r.matrixWorld);const c=e.ray.origin.distanceTo(rl);return c<e.near||c>e.far?null:{distance:c,point:rl.clone(),object:r}}function sl(r,t,e,n,i,s,o,a,l,c){r.getVertexPosition(a,tl),r.getVertexPosition(l,el),r.getVertexPosition(c,nl);const u=a0(r,t,e,n,tl,el,nl,op);if(u){const f=new Z;si.getBarycoord(op,tl,el,nl,f),i&&(u.uv=si.getInterpolatedAttribute(i,a,l,c,f,new Se)),s&&(u.uv1=si.getInterpolatedAttribute(s,a,l,c,f,new Se)),o&&(u.normal=si.getInterpolatedAttribute(o,a,l,c,f,new Z),u.normal.dot(n.direction)>0&&u.normal.multiplyScalar(-1));const h={a,b:l,c,normal:new Z,materialIndex:0};si.getNormal(tl,el,nl,h.normal),u.face=h,u.barycoord=f}return u}class ks extends Hr{constructor(t=1,e=1,n=1,i=1,s=1,o=1){super(),this.type="BoxGeometry",this.parameters={width:t,height:e,depth:n,widthSegments:i,heightSegments:s,depthSegments:o};const a=this;i=Math.floor(i),s=Math.floor(s),o=Math.floor(o);const l=[],c=[],u=[],f=[];let h=0,d=0;_("z","y","x",-1,-1,n,e,t,o,s,0),_("z","y","x",1,-1,n,e,-t,o,s,1),_("x","z","y",1,1,t,n,e,i,o,2),_("x","z","y",1,-1,t,n,-e,i,o,3),_("x","y","z",1,-1,t,e,n,i,s,4),_("x","y","z",-1,-1,t,e,-n,i,s,5),this.setIndex(l),this.setAttribute("position",new kr(c,3)),this.setAttribute("normal",new kr(u,3)),this.setAttribute("uv",new kr(f,2));function _(g,m,p,y,E,v,C,w,b,R,S){const x=v/b,L=C/R,F=v/2,B=C/2,G=w/2,j=b+1,Y=R+1;let $=0,H=0;const it=new Z;for(let P=0;P<Y;P++){const ut=P*L-B;for(let Ut=0;Ut<j;Ut++){const $t=Ut*x-F;it[g]=$t*y,it[m]=ut*E,it[p]=G,c.push(it.x,it.y,it.z),it[g]=0,it[m]=0,it[p]=w>0?1:-1,u.push(it.x,it.y,it.z),f.push(Ut/b),f.push(1-P/R),$+=1}}for(let P=0;P<R;P++)for(let ut=0;ut<b;ut++){const Ut=h+ut+j*P,$t=h+ut+j*(P+1),J=h+(ut+1)+j*(P+1),nt=h+(ut+1)+j*P;l.push(Ut,$t,nt),l.push($t,J,nt),H+=6}a.addGroup(d,H,S),d+=H,h+=$}}copy(t){return super.copy(t),this.parameters=Object.assign({},t.parameters),this}static fromJSON(t){return new ks(t.width,t.height,t.depth,t.widthSegments,t.heightSegments,t.depthSegments)}}function Hs(r){const t={};for(const e in r){t[e]={};for(const n in r[e]){const i=r[e][n];i&&(i.isColor||i.isMatrix3||i.isMatrix4||i.isVector2||i.isVector3||i.isVector4||i.isTexture||i.isQuaternion)?i.isRenderTargetTexture?(console.warn("UniformsUtils: Textures of render targets cannot be cloned via cloneUniforms() or mergeUniforms()."),t[e][n]=null):t[e][n]=i.clone():Array.isArray(i)?t[e][n]=i.slice():t[e][n]=i}}return t}function mn(r){const t={};for(let e=0;e<r.length;e++){const n=Hs(r[e]);for(const i in n)t[i]=n[i]}return t}function l0(r){const t=[];for(let e=0;e<r.length;e++)t.push(r[e].clone());return t}function ap(r){const t=r.getRenderTarget();return t===null?r.outputColorSpace:t.isXRRenderTarget===!0?t.texture.colorSpace:ae.workingColorSpace}const c0={clone:Hs,merge:mn};var u0=`void main() {
	gl_Position = projectionMatrix * modelViewMatrix * vec4( position, 1.0 );
}`,h0=`void main() {
	gl_FragColor = vec4( 1.0, 0.0, 0.0, 1.0 );
}`;class ur extends ja{static get type(){return"ShaderMaterial"}constructor(t){super(),this.isShaderMaterial=!0,this.defines={},this.uniforms={},this.uniformsGroups=[],this.vertexShader=u0,this.fragmentShader=h0,this.linewidth=1,this.wireframe=!1,this.wireframeLinewidth=1,this.fog=!1,this.lights=!1,this.clipping=!1,this.forceSinglePass=!0,this.extensions={clipCullDistance:!1,multiDraw:!1},this.defaultAttributeValues={color:[1,1,1],uv:[0,0],uv1:[0,0]},this.index0AttributeName=void 0,this.uniformsNeedUpdate=!1,this.glslVersion=null,t!==void 0&&this.setValues(t)}copy(t){return super.copy(t),this.fragmentShader=t.fragmentShader,this.vertexShader=t.vertexShader,this.uniforms=Hs(t.uniforms),this.uniformsGroups=l0(t.uniformsGroups),this.defines=Object.assign({},t.defines),this.wireframe=t.wireframe,this.wireframeLinewidth=t.wireframeLinewidth,this.fog=t.fog,this.lights=t.lights,this.clipping=t.clipping,this.extensions=Object.assign({},t.extensions),this.glslVersion=t.glslVersion,this}toJSON(t){const e=super.toJSON(t);e.glslVersion=this.glslVersion,e.uniforms={};for(const i in this.uniforms){const o=this.uniforms[i].value;o&&o.isTexture?e.uniforms[i]={type:"t",value:o.toJSON(t).uuid}:o&&o.isColor?e.uniforms[i]={type:"c",value:o.getHex()}:o&&o.isVector2?e.uniforms[i]={type:"v2",value:o.toArray()}:o&&o.isVector3?e.uniforms[i]={type:"v3",value:o.toArray()}:o&&o.isVector4?e.uniforms[i]={type:"v4",value:o.toArray()}:o&&o.isMatrix3?e.uniforms[i]={type:"m3",value:o.toArray()}:o&&o.isMatrix4?e.uniforms[i]={type:"m4",value:o.toArray()}:e.uniforms[i]={value:o}}Object.keys(this.defines).length>0&&(e.defines=this.defines),e.vertexShader=this.vertexShader,e.fragmentShader=this.fragmentShader,e.lights=this.lights,e.clipping=this.clipping;const n={};for(const i in this.extensions)this.extensions[i]===!0&&(n[i]=!0);return Object.keys(n).length>0&&(e.extensions=n),e}}class lp extends Rn{constructor(){super(),this.isCamera=!0,this.type="Camera",this.matrixWorldInverse=new Pe,this.projectionMatrix=new Pe,this.projectionMatrixInverse=new Pe,this.coordinateSystem=Pi}copy(t,e){return super.copy(t,e),this.matrixWorldInverse.copy(t.matrixWorldInverse),this.projectionMatrix.copy(t.projectionMatrix),this.projectionMatrixInverse.copy(t.projectionMatrixInverse),this.coordinateSystem=t.coordinateSystem,this}getWorldDirection(t){return super.getWorldDirection(t).negate()}updateMatrixWorld(t){super.updateMatrixWorld(t),this.matrixWorldInverse.copy(this.matrixWorld).invert()}updateWorldMatrix(t,e){super.updateWorldMatrix(t,e),this.matrixWorldInverse.copy(this.matrixWorld).invert()}clone(){return new this.constructor().copy(this)}}const hr=new Z,cp=new Se,up=new Se;class Jn extends lp{constructor(t=50,e=1,n=.1,i=2e3){super(),this.isPerspectiveCamera=!0,this.type="PerspectiveCamera",this.fov=t,this.zoom=1,this.near=n,this.far=i,this.focus=10,this.aspect=e,this.view=null,this.filmGauge=35,this.filmOffset=0,this.updateProjectionMatrix()}copy(t,e){return super.copy(t,e),this.fov=t.fov,this.zoom=t.zoom,this.near=t.near,this.far=t.far,this.focus=t.focus,this.aspect=t.aspect,this.view=t.view===null?null:Object.assign({},t.view),this.filmGauge=t.filmGauge,this.filmOffset=t.filmOffset,this}setFocalLength(t){const e=.5*this.getFilmHeight()/t;this.fov=xu*2*Math.atan(e),this.updateProjectionMatrix()}getFocalLength(){const t=Math.tan(vu*.5*this.fov);return .5*this.getFilmHeight()/t}getEffectiveFOV(){return xu*2*Math.atan(Math.tan(vu*.5*this.fov)/this.zoom)}getFilmWidth(){return this.filmGauge*Math.min(this.aspect,1)}getFilmHeight(){return this.filmGauge/Math.max(this.aspect,1)}getViewBounds(t,e,n){hr.set(-1,-1,.5).applyMatrix4(this.projectionMatrixInverse),e.set(hr.x,hr.y).multiplyScalar(-t/hr.z),hr.set(1,1,.5).applyMatrix4(this.projectionMatrixInverse),n.set(hr.x,hr.y).multiplyScalar(-t/hr.z)}getViewSize(t,e){return this.getViewBounds(t,cp,up),e.subVectors(up,cp)}setViewOffset(t,e,n,i,s,o){this.aspect=t/e,this.view===null&&(this.view={enabled:!0,fullWidth:1,fullHeight:1,offsetX:0,offsetY:0,width:1,height:1}),this.view.enabled=!0,this.view.fullWidth=t,this.view.fullHeight=e,this.view.offsetX=n,this.view.offsetY=i,this.view.width=s,this.view.height=o,this.updateProjectionMatrix()}clearViewOffset(){this.view!==null&&(this.view.enabled=!1),this.updateProjectionMatrix()}updateProjectionMatrix(){const t=this.near;let e=t*Math.tan(vu*.5*this.fov)/this.zoom,n=2*e,i=this.aspect*n,s=-.5*i;const o=this.view;if(this.view!==null&&this.view.enabled){const l=o.fullWidth,c=o.fullHeight;s+=o.offsetX*i/l,e-=o.offsetY*n/c,i*=o.width/l,n*=o.height/c}const a=this.filmOffset;a!==0&&(s+=t*a/this.getFilmWidth()),this.projectionMatrix.makePerspective(s,s+i,e,e-n,t,this.far,this.coordinateSystem),this.projectionMatrixInverse.copy(this.projectionMatrix).invert()}toJSON(t){const e=super.toJSON(t);return e.object.fov=this.fov,e.object.zoom=this.zoom,e.object.near=this.near,e.object.far=this.far,e.object.focus=this.focus,e.object.aspect=this.aspect,this.view!==null&&(e.object.view=Object.assign({},this.view)),e.object.filmGauge=this.filmGauge,e.object.filmOffset=this.filmOffset,e}}const Vs=-90,Gs=1;class f0 extends Rn{constructor(t,e,n){super(),this.type="CubeCamera",this.renderTarget=n,this.coordinateSystem=null,this.activeMipmapLevel=0;const i=new Jn(Vs,Gs,t,e);i.layers=this.layers,this.add(i);const s=new Jn(Vs,Gs,t,e);s.layers=this.layers,this.add(s);const o=new Jn(Vs,Gs,t,e);o.layers=this.layers,this.add(o);const a=new Jn(Vs,Gs,t,e);a.layers=this.layers,this.add(a);const l=new Jn(Vs,Gs,t,e);l.layers=this.layers,this.add(l);const c=new Jn(Vs,Gs,t,e);c.layers=this.layers,this.add(c)}updateCoordinateSystem(){const t=this.coordinateSystem,e=this.children.concat(),[n,i,s,o,a,l]=e;for(const c of e)this.remove(c);if(t===Pi)n.up.set(0,1,0),n.lookAt(1,0,0),i.up.set(0,1,0),i.lookAt(-1,0,0),s.up.set(0,0,-1),s.lookAt(0,1,0),o.up.set(0,0,1),o.lookAt(0,-1,0),a.up.set(0,1,0),a.lookAt(0,0,1),l.up.set(0,1,0),l.lookAt(0,0,-1);else if(t===Ha)n.up.set(0,-1,0),n.lookAt(-1,0,0),i.up.set(0,-1,0),i.lookAt(1,0,0),s.up.set(0,0,1),s.lookAt(0,1,0),o.up.set(0,0,-1),o.lookAt(0,-1,0),a.up.set(0,-1,0),a.lookAt(0,0,1),l.up.set(0,-1,0),l.lookAt(0,0,-1);else throw new Error("THREE.CubeCamera.updateCoordinateSystem(): Invalid coordinate system: "+t);for(const c of e)this.add(c),c.updateMatrixWorld()}update(t,e){this.parent===null&&this.updateMatrixWorld();const{renderTarget:n,activeMipmapLevel:i}=this;this.coordinateSystem!==t.coordinateSystem&&(this.coordinateSystem=t.coordinateSystem,this.updateCoordinateSystem());const[s,o,a,l,c,u]=this.children,f=t.getRenderTarget(),h=t.getActiveCubeFace(),d=t.getActiveMipmapLevel(),_=t.xr.enabled;t.xr.enabled=!1;const g=n.texture.generateMipmaps;n.texture.generateMipmaps=!1,t.setRenderTarget(n,0,i),t.render(e,s),t.setRenderTarget(n,1,i),t.render(e,o),t.setRenderTarget(n,2,i),t.render(e,a),t.setRenderTarget(n,3,i),t.render(e,l),t.setRenderTarget(n,4,i),t.render(e,c),n.texture.generateMipmaps=g,t.setRenderTarget(n,5,i),t.render(e,u),t.setRenderTarget(f,h,d),t.xr.enabled=_,n.texture.needsPMREMUpdate=!0}}class hp extends pn{constructor(t,e,n,i,s,o,a,l,c,u){t=t!==void 0?t:[],e=e!==void 0?e:Ms,super(t,e,n,i,s,o,a,l,c,u),this.isCubeTexture=!0,this.flipY=!1}get images(){return this.image}set images(t){this.image=t}}class d0 extends Fr{constructor(t=1,e={}){super(t,t,e),this.isWebGLCubeRenderTarget=!0;const n={width:t,height:t,depth:1},i=[n,n,n,n,n,n];this.texture=new hp(i,e.mapping,e.wrapS,e.wrapT,e.magFilter,e.minFilter,e.format,e.type,e.anisotropy,e.colorSpace),this.texture.isRenderTargetTexture=!0,this.texture.generateMipmaps=e.generateMipmaps!==void 0?e.generateMipmaps:!1,this.texture.minFilter=e.minFilter!==void 0?e.minFilter:gi}fromEquirectangularTexture(t,e){this.texture.type=e.type,this.texture.colorSpace=e.colorSpace,this.texture.generateMipmaps=e.generateMipmaps,this.texture.minFilter=e.minFilter,this.texture.magFilter=e.magFilter;const n={uniforms:{tEquirect:{value:null}},vertexShader:`

				varying vec3 vWorldDirection;

				vec3 transformDirection( in vec3 dir, in mat4 matrix ) {

					return normalize( ( matrix * vec4( dir, 0.0 ) ).xyz );

				}

				void main() {

					vWorldDirection = transformDirection( position, modelMatrix );

					#include <begin_vertex>
					#include <project_vertex>

				}
			`,fragmentShader:`

				uniform sampler2D tEquirect;

				varying vec3 vWorldDirection;

				#include <common>

				void main() {

					vec3 direction = normalize( vWorldDirection );

					vec2 sampleUV = equirectUv( direction );

					gl_FragColor = texture2D( tEquirect, sampleUV );

				}
			`},i=new ks(5,5,5),s=new ur({name:"CubemapFromEquirect",uniforms:Hs(n.uniforms),vertexShader:n.vertexShader,fragmentShader:n.fragmentShader,side:bn,blending:nr});s.uniforms.tEquirect.value=e;const o=new ai(i,s),a=e.minFilter;return e.minFilter===Ur&&(e.minFilter=gi),new f0(1,10,this).update(t,o),e.minFilter=a,o.geometry.dispose(),o.material.dispose(),this}clear(t,e,n,i){const s=t.getRenderTarget();for(let o=0;o<6;o++)t.setRenderTarget(this,o),t.clear(e,n,i);t.setRenderTarget(s)}}const Hu=new Z,p0=new Z,m0=new Zt;class Gr{constructor(t=new Z(1,0,0),e=0){this.isPlane=!0,this.normal=t,this.constant=e}set(t,e){return this.normal.copy(t),this.constant=e,this}setComponents(t,e,n,i){return this.normal.set(t,e,n),this.constant=i,this}setFromNormalAndCoplanarPoint(t,e){return this.normal.copy(t),this.constant=-e.dot(this.normal),this}setFromCoplanarPoints(t,e,n){const i=Hu.subVectors(n,e).cross(p0.subVectors(t,e)).normalize();return this.setFromNormalAndCoplanarPoint(i,t),this}copy(t){return this.normal.copy(t.normal),this.constant=t.constant,this}normalize(){const t=1/this.normal.length();return this.normal.multiplyScalar(t),this.constant*=t,this}negate(){return this.constant*=-1,this.normal.negate(),this}distanceToPoint(t){return this.normal.dot(t)+this.constant}distanceToSphere(t){return this.distanceToPoint(t.center)-t.radius}projectPoint(t,e){return e.copy(t).addScaledVector(this.normal,-this.distanceToPoint(t))}intersectLine(t,e){const n=t.delta(Hu),i=this.normal.dot(n);if(i===0)return this.distanceToPoint(t.start)===0?e.copy(t.start):null;const s=-(t.start.dot(this.normal)+this.constant)/i;return s<0||s>1?null:e.copy(t.start).addScaledVector(n,s)}intersectsLine(t){const e=this.distanceToPoint(t.start),n=this.distanceToPoint(t.end);return e<0&&n>0||n<0&&e>0}intersectsBox(t){return t.intersectsPlane(this)}intersectsSphere(t){return t.intersectsPlane(this)}coplanarPoint(t){return t.copy(this.normal).multiplyScalar(-this.constant)}applyMatrix4(t,e){const n=e||m0.getNormalMatrix(t),i=this.coplanarPoint(Hu).applyMatrix4(t),s=this.normal.applyMatrix3(n).normalize();return this.constant=-i.dot(s),this}translate(t){return this.constant-=t.dot(this.normal),this}equals(t){return t.normal.equals(this.normal)&&t.constant===this.constant}clone(){return new this.constructor().copy(this)}}const Wr=new ko,ol=new Z;class fp{constructor(t=new Gr,e=new Gr,n=new Gr,i=new Gr,s=new Gr,o=new Gr){this.planes=[t,e,n,i,s,o]}set(t,e,n,i,s,o){const a=this.planes;return a[0].copy(t),a[1].copy(e),a[2].copy(n),a[3].copy(i),a[4].copy(s),a[5].copy(o),this}copy(t){const e=this.planes;for(let n=0;n<6;n++)e[n].copy(t.planes[n]);return this}setFromProjectionMatrix(t,e=Pi){const n=this.planes,i=t.elements,s=i[0],o=i[1],a=i[2],l=i[3],c=i[4],u=i[5],f=i[6],h=i[7],d=i[8],_=i[9],g=i[10],m=i[11],p=i[12],y=i[13],E=i[14],v=i[15];if(n[0].setComponents(l-s,h-c,m-d,v-p).normalize(),n[1].setComponents(l+s,h+c,m+d,v+p).normalize(),n[2].setComponents(l+o,h+u,m+_,v+y).normalize(),n[3].setComponents(l-o,h-u,m-_,v-y).normalize(),n[4].setComponents(l-a,h-f,m-g,v-E).normalize(),e===Pi)n[5].setComponents(l+a,h+f,m+g,v+E).normalize();else if(e===Ha)n[5].setComponents(a,f,g,E).normalize();else throw new Error("THREE.Frustum.setFromProjectionMatrix(): Invalid coordinate system: "+e);return this}intersectsObject(t){if(t.boundingSphere!==void 0)t.boundingSphere===null&&t.computeBoundingSphere(),Wr.copy(t.boundingSphere).applyMatrix4(t.matrixWorld);else{const e=t.geometry;e.boundingSphere===null&&e.computeBoundingSphere(),Wr.copy(e.boundingSphere).applyMatrix4(t.matrixWorld)}return this.intersectsSphere(Wr)}intersectsSprite(t){return Wr.center.set(0,0,0),Wr.radius=.7071067811865476,Wr.applyMatrix4(t.matrixWorld),this.intersectsSphere(Wr)}intersectsSphere(t){const e=this.planes,n=t.center,i=-t.radius;for(let s=0;s<6;s++)if(e[s].distanceToPoint(n)<i)return!1;return!0}intersectsBox(t){const e=this.planes;for(let n=0;n<6;n++){const i=e[n];if(ol.x=i.normal.x>0?t.max.x:t.min.x,ol.y=i.normal.y>0?t.max.y:t.min.y,ol.z=i.normal.z>0?t.max.z:t.min.z,i.distanceToPoint(ol)<0)return!1}return!0}containsPoint(t){const e=this.planes;for(let n=0;n<6;n++)if(e[n].distanceToPoint(t)<0)return!1;return!0}clone(){return new this.constructor().copy(this)}}function dp(){let r=null,t=!1,e=null,n=null;function i(s,o){e(s,o),n=r.requestAnimationFrame(i)}return{start:function(){t!==!0&&e!==null&&(n=r.requestAnimationFrame(i),t=!0)},stop:function(){r.cancelAnimationFrame(n),t=!1},setAnimationLoop:function(s){e=s},setContext:function(s){r=s}}}function _0(r){const t=new WeakMap;function e(a,l){const c=a.array,u=a.usage,f=c.byteLength,h=r.createBuffer();r.bindBuffer(l,h),r.bufferData(l,c,u),a.onUploadCallback();let d;if(c instanceof Float32Array)d=r.FLOAT;else if(c instanceof Uint16Array)a.isFloat16BufferAttribute?d=r.HALF_FLOAT:d=r.UNSIGNED_SHORT;else if(c instanceof Int16Array)d=r.SHORT;else if(c instanceof Uint32Array)d=r.UNSIGNED_INT;else if(c instanceof Int32Array)d=r.INT;else if(c instanceof Int8Array)d=r.BYTE;else if(c instanceof Uint8Array)d=r.UNSIGNED_BYTE;else if(c instanceof Uint8ClampedArray)d=r.UNSIGNED_BYTE;else throw new Error("THREE.WebGLAttributes: Unsupported buffer data format: "+c);return{buffer:h,type:d,bytesPerElement:c.BYTES_PER_ELEMENT,version:a.version,size:f}}function n(a,l,c){const u=l.array,f=l.updateRanges;if(r.bindBuffer(c,a),f.length===0)r.bufferSubData(c,0,u);else{f.sort((d,_)=>d.start-_.start);let h=0;for(let d=1;d<f.length;d++){const _=f[h],g=f[d];g.start<=_.start+_.count+1?_.count=Math.max(_.count,g.start+g.count-_.start):(++h,f[h]=g)}f.length=h+1;for(let d=0,_=f.length;d<_;d++){const g=f[d];r.bufferSubData(c,g.start*u.BYTES_PER_ELEMENT,u,g.start,g.count)}l.clearUpdateRanges()}l.onUploadCallback()}function i(a){return a.isInterleavedBufferAttribute&&(a=a.data),t.get(a)}function s(a){a.isInterleavedBufferAttribute&&(a=a.data);const l=t.get(a);l&&(r.deleteBuffer(l.buffer),t.delete(a))}function o(a,l){if(a.isInterleavedBufferAttribute&&(a=a.data),a.isGLBufferAttribute){const u=t.get(a);(!u||u.version<a.version)&&t.set(a,{buffer:a.buffer,type:a.type,bytesPerElement:a.elementSize,version:a.version});return}const c=t.get(a);if(c===void 0)t.set(a,e(a,l));else if(c.version<a.version){if(c.size!==a.array.byteLength)throw new Error("THREE.WebGLAttributes: The size of the buffer attribute's array buffer does not match the original size. Resizing buffer attributes is not supported.");n(c.buffer,a,l),c.version=a.version}}return{get:i,remove:s,update:o}}class al extends Hr{constructor(t=1,e=1,n=1,i=1){super(),this.type="PlaneGeometry",this.parameters={width:t,height:e,widthSegments:n,heightSegments:i};const s=t/2,o=e/2,a=Math.floor(n),l=Math.floor(i),c=a+1,u=l+1,f=t/a,h=e/l,d=[],_=[],g=[],m=[];for(let p=0;p<u;p++){const y=p*h-o;for(let E=0;E<c;E++){const v=E*f-s;_.push(v,-y,0),g.push(0,0,1),m.push(E/a),m.push(1-p/l)}}for(let p=0;p<l;p++)for(let y=0;y<a;y++){const E=y+c*p,v=y+c*(p+1),C=y+1+c*(p+1),w=y+1+c*p;d.push(E,v,w),d.push(v,C,w)}this.setIndex(d),this.setAttribute("position",new kr(_,3)),this.setAttribute("normal",new kr(g,3)),this.setAttribute("uv",new kr(m,2))}copy(t){return super.copy(t),this.parameters=Object.assign({},t.parameters),this}static fromJSON(t){return new al(t.width,t.height,t.widthSegments,t.heightSegments)}}var g0=`#ifdef USE_ALPHAHASH
	if ( diffuseColor.a < getAlphaHashThreshold( vPosition ) ) discard;
#endif`,v0=`#ifdef USE_ALPHAHASH
	const float ALPHA_HASH_SCALE = 0.05;
	float hash2D( vec2 value ) {
		return fract( 1.0e4 * sin( 17.0 * value.x + 0.1 * value.y ) * ( 0.1 + abs( sin( 13.0 * value.y + value.x ) ) ) );
	}
	float hash3D( vec3 value ) {
		return hash2D( vec2( hash2D( value.xy ), value.z ) );
	}
	float getAlphaHashThreshold( vec3 position ) {
		float maxDeriv = max(
			length( dFdx( position.xyz ) ),
			length( dFdy( position.xyz ) )
		);
		float pixScale = 1.0 / ( ALPHA_HASH_SCALE * maxDeriv );
		vec2 pixScales = vec2(
			exp2( floor( log2( pixScale ) ) ),
			exp2( ceil( log2( pixScale ) ) )
		);
		vec2 alpha = vec2(
			hash3D( floor( pixScales.x * position.xyz ) ),
			hash3D( floor( pixScales.y * position.xyz ) )
		);
		float lerpFactor = fract( log2( pixScale ) );
		float x = ( 1.0 - lerpFactor ) * alpha.x + lerpFactor * alpha.y;
		float a = min( lerpFactor, 1.0 - lerpFactor );
		vec3 cases = vec3(
			x * x / ( 2.0 * a * ( 1.0 - a ) ),
			( x - 0.5 * a ) / ( 1.0 - a ),
			1.0 - ( ( 1.0 - x ) * ( 1.0 - x ) / ( 2.0 * a * ( 1.0 - a ) ) )
		);
		float threshold = ( x < ( 1.0 - a ) )
			? ( ( x < a ) ? cases.x : cases.y )
			: cases.z;
		return clamp( threshold , 1.0e-6, 1.0 );
	}
#endif`,x0=`#ifdef USE_ALPHAMAP
	diffuseColor.a *= texture2D( alphaMap, vAlphaMapUv ).g;
#endif`,S0=`#ifdef USE_ALPHAMAP
	uniform sampler2D alphaMap;
#endif`,M0=`#ifdef USE_ALPHATEST
	#ifdef ALPHA_TO_COVERAGE
	diffuseColor.a = smoothstep( alphaTest, alphaTest + fwidth( diffuseColor.a ), diffuseColor.a );
	if ( diffuseColor.a == 0.0 ) discard;
	#else
	if ( diffuseColor.a < alphaTest ) discard;
	#endif
#endif`,y0=`#ifdef USE_ALPHATEST
	uniform float alphaTest;
#endif`,E0=`#ifdef USE_AOMAP
	float ambientOcclusion = ( texture2D( aoMap, vAoMapUv ).r - 1.0 ) * aoMapIntensity + 1.0;
	reflectedLight.indirectDiffuse *= ambientOcclusion;
	#if defined( USE_CLEARCOAT ) 
		clearcoatSpecularIndirect *= ambientOcclusion;
	#endif
	#if defined( USE_SHEEN ) 
		sheenSpecularIndirect *= ambientOcclusion;
	#endif
	#if defined( USE_ENVMAP ) && defined( STANDARD )
		float dotNV = saturate( dot( geometryNormal, geometryViewDir ) );
		reflectedLight.indirectSpecular *= computeSpecularOcclusion( dotNV, ambientOcclusion, material.roughness );
	#endif
#endif`,T0=`#ifdef USE_AOMAP
	uniform sampler2D aoMap;
	uniform float aoMapIntensity;
#endif`,b0=`#ifdef USE_BATCHING
	#if ! defined( GL_ANGLE_multi_draw )
	#define gl_DrawID _gl_DrawID
	uniform int _gl_DrawID;
	#endif
	uniform highp sampler2D batchingTexture;
	uniform highp usampler2D batchingIdTexture;
	mat4 getBatchingMatrix( const in float i ) {
		int size = textureSize( batchingTexture, 0 ).x;
		int j = int( i ) * 4;
		int x = j % size;
		int y = j / size;
		vec4 v1 = texelFetch( batchingTexture, ivec2( x, y ), 0 );
		vec4 v2 = texelFetch( batchingTexture, ivec2( x + 1, y ), 0 );
		vec4 v3 = texelFetch( batchingTexture, ivec2( x + 2, y ), 0 );
		vec4 v4 = texelFetch( batchingTexture, ivec2( x + 3, y ), 0 );
		return mat4( v1, v2, v3, v4 );
	}
	float getIndirectIndex( const in int i ) {
		int size = textureSize( batchingIdTexture, 0 ).x;
		int x = i % size;
		int y = i / size;
		return float( texelFetch( batchingIdTexture, ivec2( x, y ), 0 ).r );
	}
#endif
#ifdef USE_BATCHING_COLOR
	uniform sampler2D batchingColorTexture;
	vec3 getBatchingColor( const in float i ) {
		int size = textureSize( batchingColorTexture, 0 ).x;
		int j = int( i );
		int x = j % size;
		int y = j / size;
		return texelFetch( batchingColorTexture, ivec2( x, y ), 0 ).rgb;
	}
#endif`,A0=`#ifdef USE_BATCHING
	mat4 batchingMatrix = getBatchingMatrix( getIndirectIndex( gl_DrawID ) );
#endif`,w0=`vec3 transformed = vec3( position );
#ifdef USE_ALPHAHASH
	vPosition = vec3( position );
#endif`,R0=`vec3 objectNormal = vec3( normal );
#ifdef USE_TANGENT
	vec3 objectTangent = vec3( tangent.xyz );
#endif`,C0=`float G_BlinnPhong_Implicit( ) {
	return 0.25;
}
float D_BlinnPhong( const in float shininess, const in float dotNH ) {
	return RECIPROCAL_PI * ( shininess * 0.5 + 1.0 ) * pow( dotNH, shininess );
}
vec3 BRDF_BlinnPhong( const in vec3 lightDir, const in vec3 viewDir, const in vec3 normal, const in vec3 specularColor, const in float shininess ) {
	vec3 halfDir = normalize( lightDir + viewDir );
	float dotNH = saturate( dot( normal, halfDir ) );
	float dotVH = saturate( dot( viewDir, halfDir ) );
	vec3 F = F_Schlick( specularColor, 1.0, dotVH );
	float G = G_BlinnPhong_Implicit( );
	float D = D_BlinnPhong( shininess, dotNH );
	return F * ( G * D );
} // validated`,P0=`#ifdef USE_IRIDESCENCE
	const mat3 XYZ_TO_REC709 = mat3(
		 3.2404542, -0.9692660,  0.0556434,
		-1.5371385,  1.8760108, -0.2040259,
		-0.4985314,  0.0415560,  1.0572252
	);
	vec3 Fresnel0ToIor( vec3 fresnel0 ) {
		vec3 sqrtF0 = sqrt( fresnel0 );
		return ( vec3( 1.0 ) + sqrtF0 ) / ( vec3( 1.0 ) - sqrtF0 );
	}
	vec3 IorToFresnel0( vec3 transmittedIor, float incidentIor ) {
		return pow2( ( transmittedIor - vec3( incidentIor ) ) / ( transmittedIor + vec3( incidentIor ) ) );
	}
	float IorToFresnel0( float transmittedIor, float incidentIor ) {
		return pow2( ( transmittedIor - incidentIor ) / ( transmittedIor + incidentIor ));
	}
	vec3 evalSensitivity( float OPD, vec3 shift ) {
		float phase = 2.0 * PI * OPD * 1.0e-9;
		vec3 val = vec3( 5.4856e-13, 4.4201e-13, 5.2481e-13 );
		vec3 pos = vec3( 1.6810e+06, 1.7953e+06, 2.2084e+06 );
		vec3 var = vec3( 4.3278e+09, 9.3046e+09, 6.6121e+09 );
		vec3 xyz = val * sqrt( 2.0 * PI * var ) * cos( pos * phase + shift ) * exp( - pow2( phase ) * var );
		xyz.x += 9.7470e-14 * sqrt( 2.0 * PI * 4.5282e+09 ) * cos( 2.2399e+06 * phase + shift[ 0 ] ) * exp( - 4.5282e+09 * pow2( phase ) );
		xyz /= 1.0685e-7;
		vec3 rgb = XYZ_TO_REC709 * xyz;
		return rgb;
	}
	vec3 evalIridescence( float outsideIOR, float eta2, float cosTheta1, float thinFilmThickness, vec3 baseF0 ) {
		vec3 I;
		float iridescenceIOR = mix( outsideIOR, eta2, smoothstep( 0.0, 0.03, thinFilmThickness ) );
		float sinTheta2Sq = pow2( outsideIOR / iridescenceIOR ) * ( 1.0 - pow2( cosTheta1 ) );
		float cosTheta2Sq = 1.0 - sinTheta2Sq;
		if ( cosTheta2Sq < 0.0 ) {
			return vec3( 1.0 );
		}
		float cosTheta2 = sqrt( cosTheta2Sq );
		float R0 = IorToFresnel0( iridescenceIOR, outsideIOR );
		float R12 = F_Schlick( R0, 1.0, cosTheta1 );
		float T121 = 1.0 - R12;
		float phi12 = 0.0;
		if ( iridescenceIOR < outsideIOR ) phi12 = PI;
		float phi21 = PI - phi12;
		vec3 baseIOR = Fresnel0ToIor( clamp( baseF0, 0.0, 0.9999 ) );		vec3 R1 = IorToFresnel0( baseIOR, iridescenceIOR );
		vec3 R23 = F_Schlick( R1, 1.0, cosTheta2 );
		vec3 phi23 = vec3( 0.0 );
		if ( baseIOR[ 0 ] < iridescenceIOR ) phi23[ 0 ] = PI;
		if ( baseIOR[ 1 ] < iridescenceIOR ) phi23[ 1 ] = PI;
		if ( baseIOR[ 2 ] < iridescenceIOR ) phi23[ 2 ] = PI;
		float OPD = 2.0 * iridescenceIOR * thinFilmThickness * cosTheta2;
		vec3 phi = vec3( phi21 ) + phi23;
		vec3 R123 = clamp( R12 * R23, 1e-5, 0.9999 );
		vec3 r123 = sqrt( R123 );
		vec3 Rs = pow2( T121 ) * R23 / ( vec3( 1.0 ) - R123 );
		vec3 C0 = R12 + Rs;
		I = C0;
		vec3 Cm = Rs - T121;
		for ( int m = 1; m <= 2; ++ m ) {
			Cm *= r123;
			vec3 Sm = 2.0 * evalSensitivity( float( m ) * OPD, float( m ) * phi );
			I += Cm * Sm;
		}
		return max( I, vec3( 0.0 ) );
	}
#endif`,D0=`#ifdef USE_BUMPMAP
	uniform sampler2D bumpMap;
	uniform float bumpScale;
	vec2 dHdxy_fwd() {
		vec2 dSTdx = dFdx( vBumpMapUv );
		vec2 dSTdy = dFdy( vBumpMapUv );
		float Hll = bumpScale * texture2D( bumpMap, vBumpMapUv ).x;
		float dBx = bumpScale * texture2D( bumpMap, vBumpMapUv + dSTdx ).x - Hll;
		float dBy = bumpScale * texture2D( bumpMap, vBumpMapUv + dSTdy ).x - Hll;
		return vec2( dBx, dBy );
	}
	vec3 perturbNormalArb( vec3 surf_pos, vec3 surf_norm, vec2 dHdxy, float faceDirection ) {
		vec3 vSigmaX = normalize( dFdx( surf_pos.xyz ) );
		vec3 vSigmaY = normalize( dFdy( surf_pos.xyz ) );
		vec3 vN = surf_norm;
		vec3 R1 = cross( vSigmaY, vN );
		vec3 R2 = cross( vN, vSigmaX );
		float fDet = dot( vSigmaX, R1 ) * faceDirection;
		vec3 vGrad = sign( fDet ) * ( dHdxy.x * R1 + dHdxy.y * R2 );
		return normalize( abs( fDet ) * surf_norm - vGrad );
	}
#endif`,L0=`#if NUM_CLIPPING_PLANES > 0
	vec4 plane;
	#ifdef ALPHA_TO_COVERAGE
		float distanceToPlane, distanceGradient;
		float clipOpacity = 1.0;
		#pragma unroll_loop_start
		for ( int i = 0; i < UNION_CLIPPING_PLANES; i ++ ) {
			plane = clippingPlanes[ i ];
			distanceToPlane = - dot( vClipPosition, plane.xyz ) + plane.w;
			distanceGradient = fwidth( distanceToPlane ) / 2.0;
			clipOpacity *= smoothstep( - distanceGradient, distanceGradient, distanceToPlane );
			if ( clipOpacity == 0.0 ) discard;
		}
		#pragma unroll_loop_end
		#if UNION_CLIPPING_PLANES < NUM_CLIPPING_PLANES
			float unionClipOpacity = 1.0;
			#pragma unroll_loop_start
			for ( int i = UNION_CLIPPING_PLANES; i < NUM_CLIPPING_PLANES; i ++ ) {
				plane = clippingPlanes[ i ];
				distanceToPlane = - dot( vClipPosition, plane.xyz ) + plane.w;
				distanceGradient = fwidth( distanceToPlane ) / 2.0;
				unionClipOpacity *= 1.0 - smoothstep( - distanceGradient, distanceGradient, distanceToPlane );
			}
			#pragma unroll_loop_end
			clipOpacity *= 1.0 - unionClipOpacity;
		#endif
		diffuseColor.a *= clipOpacity;
		if ( diffuseColor.a == 0.0 ) discard;
	#else
		#pragma unroll_loop_start
		for ( int i = 0; i < UNION_CLIPPING_PLANES; i ++ ) {
			plane = clippingPlanes[ i ];
			if ( dot( vClipPosition, plane.xyz ) > plane.w ) discard;
		}
		#pragma unroll_loop_end
		#if UNION_CLIPPING_PLANES < NUM_CLIPPING_PLANES
			bool clipped = true;
			#pragma unroll_loop_start
			for ( int i = UNION_CLIPPING_PLANES; i < NUM_CLIPPING_PLANES; i ++ ) {
				plane = clippingPlanes[ i ];
				clipped = ( dot( vClipPosition, plane.xyz ) > plane.w ) && clipped;
			}
			#pragma unroll_loop_end
			if ( clipped ) discard;
		#endif
	#endif
#endif`,I0=`#if NUM_CLIPPING_PLANES > 0
	varying vec3 vClipPosition;
	uniform vec4 clippingPlanes[ NUM_CLIPPING_PLANES ];
#endif`,U0=`#if NUM_CLIPPING_PLANES > 0
	varying vec3 vClipPosition;
#endif`,N0=`#if NUM_CLIPPING_PLANES > 0
	vClipPosition = - mvPosition.xyz;
#endif`,F0=`#if defined( USE_COLOR_ALPHA )
	diffuseColor *= vColor;
#elif defined( USE_COLOR )
	diffuseColor.rgb *= vColor;
#endif`,O0=`#if defined( USE_COLOR_ALPHA )
	varying vec4 vColor;
#elif defined( USE_COLOR )
	varying vec3 vColor;
#endif`,B0=`#if defined( USE_COLOR_ALPHA )
	varying vec4 vColor;
#elif defined( USE_COLOR ) || defined( USE_INSTANCING_COLOR ) || defined( USE_BATCHING_COLOR )
	varying vec3 vColor;
#endif`,z0=`#if defined( USE_COLOR_ALPHA )
	vColor = vec4( 1.0 );
#elif defined( USE_COLOR ) || defined( USE_INSTANCING_COLOR ) || defined( USE_BATCHING_COLOR )
	vColor = vec3( 1.0 );
#endif
#ifdef USE_COLOR
	vColor *= color;
#endif
#ifdef USE_INSTANCING_COLOR
	vColor.xyz *= instanceColor.xyz;
#endif
#ifdef USE_BATCHING_COLOR
	vec3 batchingColor = getBatchingColor( getIndirectIndex( gl_DrawID ) );
	vColor.xyz *= batchingColor.xyz;
#endif`,k0=`#define PI 3.141592653589793
#define PI2 6.283185307179586
#define PI_HALF 1.5707963267948966
#define RECIPROCAL_PI 0.3183098861837907
#define RECIPROCAL_PI2 0.15915494309189535
#define EPSILON 1e-6
#ifndef saturate
#define saturate( a ) clamp( a, 0.0, 1.0 )
#endif
#define whiteComplement( a ) ( 1.0 - saturate( a ) )
float pow2( const in float x ) { return x*x; }
vec3 pow2( const in vec3 x ) { return x*x; }
float pow3( const in float x ) { return x*x*x; }
float pow4( const in float x ) { float x2 = x*x; return x2*x2; }
float max3( const in vec3 v ) { return max( max( v.x, v.y ), v.z ); }
float average( const in vec3 v ) { return dot( v, vec3( 0.3333333 ) ); }
highp float rand( const in vec2 uv ) {
	const highp float a = 12.9898, b = 78.233, c = 43758.5453;
	highp float dt = dot( uv.xy, vec2( a,b ) ), sn = mod( dt, PI );
	return fract( sin( sn ) * c );
}
#ifdef HIGH_PRECISION
	float precisionSafeLength( vec3 v ) { return length( v ); }
#else
	float precisionSafeLength( vec3 v ) {
		float maxComponent = max3( abs( v ) );
		return length( v / maxComponent ) * maxComponent;
	}
#endif
struct IncidentLight {
	vec3 color;
	vec3 direction;
	bool visible;
};
struct ReflectedLight {
	vec3 directDiffuse;
	vec3 directSpecular;
	vec3 indirectDiffuse;
	vec3 indirectSpecular;
};
#ifdef USE_ALPHAHASH
	varying vec3 vPosition;
#endif
vec3 transformDirection( in vec3 dir, in mat4 matrix ) {
	return normalize( ( matrix * vec4( dir, 0.0 ) ).xyz );
}
vec3 inverseTransformDirection( in vec3 dir, in mat4 matrix ) {
	return normalize( ( vec4( dir, 0.0 ) * matrix ).xyz );
}
mat3 transposeMat3( const in mat3 m ) {
	mat3 tmp;
	tmp[ 0 ] = vec3( m[ 0 ].x, m[ 1 ].x, m[ 2 ].x );
	tmp[ 1 ] = vec3( m[ 0 ].y, m[ 1 ].y, m[ 2 ].y );
	tmp[ 2 ] = vec3( m[ 0 ].z, m[ 1 ].z, m[ 2 ].z );
	return tmp;
}
bool isPerspectiveMatrix( mat4 m ) {
	return m[ 2 ][ 3 ] == - 1.0;
}
vec2 equirectUv( in vec3 dir ) {
	float u = atan( dir.z, dir.x ) * RECIPROCAL_PI2 + 0.5;
	float v = asin( clamp( dir.y, - 1.0, 1.0 ) ) * RECIPROCAL_PI + 0.5;
	return vec2( u, v );
}
vec3 BRDF_Lambert( const in vec3 diffuseColor ) {
	return RECIPROCAL_PI * diffuseColor;
}
vec3 F_Schlick( const in vec3 f0, const in float f90, const in float dotVH ) {
	float fresnel = exp2( ( - 5.55473 * dotVH - 6.98316 ) * dotVH );
	return f0 * ( 1.0 - fresnel ) + ( f90 * fresnel );
}
float F_Schlick( const in float f0, const in float f90, const in float dotVH ) {
	float fresnel = exp2( ( - 5.55473 * dotVH - 6.98316 ) * dotVH );
	return f0 * ( 1.0 - fresnel ) + ( f90 * fresnel );
} // validated`,H0=`#ifdef ENVMAP_TYPE_CUBE_UV
	#define cubeUV_minMipLevel 4.0
	#define cubeUV_minTileSize 16.0
	float getFace( vec3 direction ) {
		vec3 absDirection = abs( direction );
		float face = - 1.0;
		if ( absDirection.x > absDirection.z ) {
			if ( absDirection.x > absDirection.y )
				face = direction.x > 0.0 ? 0.0 : 3.0;
			else
				face = direction.y > 0.0 ? 1.0 : 4.0;
		} else {
			if ( absDirection.z > absDirection.y )
				face = direction.z > 0.0 ? 2.0 : 5.0;
			else
				face = direction.y > 0.0 ? 1.0 : 4.0;
		}
		return face;
	}
	vec2 getUV( vec3 direction, float face ) {
		vec2 uv;
		if ( face == 0.0 ) {
			uv = vec2( direction.z, direction.y ) / abs( direction.x );
		} else if ( face == 1.0 ) {
			uv = vec2( - direction.x, - direction.z ) / abs( direction.y );
		} else if ( face == 2.0 ) {
			uv = vec2( - direction.x, direction.y ) / abs( direction.z );
		} else if ( face == 3.0 ) {
			uv = vec2( - direction.z, direction.y ) / abs( direction.x );
		} else if ( face == 4.0 ) {
			uv = vec2( - direction.x, direction.z ) / abs( direction.y );
		} else {
			uv = vec2( direction.x, direction.y ) / abs( direction.z );
		}
		return 0.5 * ( uv + 1.0 );
	}
	vec3 bilinearCubeUV( sampler2D envMap, vec3 direction, float mipInt ) {
		float face = getFace( direction );
		float filterInt = max( cubeUV_minMipLevel - mipInt, 0.0 );
		mipInt = max( mipInt, cubeUV_minMipLevel );
		float faceSize = exp2( mipInt );
		highp vec2 uv = getUV( direction, face ) * ( faceSize - 2.0 ) + 1.0;
		if ( face > 2.0 ) {
			uv.y += faceSize;
			face -= 3.0;
		}
		uv.x += face * faceSize;
		uv.x += filterInt * 3.0 * cubeUV_minTileSize;
		uv.y += 4.0 * ( exp2( CUBEUV_MAX_MIP ) - faceSize );
		uv.x *= CUBEUV_TEXEL_WIDTH;
		uv.y *= CUBEUV_TEXEL_HEIGHT;
		#ifdef texture2DGradEXT
			return texture2DGradEXT( envMap, uv, vec2( 0.0 ), vec2( 0.0 ) ).rgb;
		#else
			return texture2D( envMap, uv ).rgb;
		#endif
	}
	#define cubeUV_r0 1.0
	#define cubeUV_m0 - 2.0
	#define cubeUV_r1 0.8
	#define cubeUV_m1 - 1.0
	#define cubeUV_r4 0.4
	#define cubeUV_m4 2.0
	#define cubeUV_r5 0.305
	#define cubeUV_m5 3.0
	#define cubeUV_r6 0.21
	#define cubeUV_m6 4.0
	float roughnessToMip( float roughness ) {
		float mip = 0.0;
		if ( roughness >= cubeUV_r1 ) {
			mip = ( cubeUV_r0 - roughness ) * ( cubeUV_m1 - cubeUV_m0 ) / ( cubeUV_r0 - cubeUV_r1 ) + cubeUV_m0;
		} else if ( roughness >= cubeUV_r4 ) {
			mip = ( cubeUV_r1 - roughness ) * ( cubeUV_m4 - cubeUV_m1 ) / ( cubeUV_r1 - cubeUV_r4 ) + cubeUV_m1;
		} else if ( roughness >= cubeUV_r5 ) {
			mip = ( cubeUV_r4 - roughness ) * ( cubeUV_m5 - cubeUV_m4 ) / ( cubeUV_r4 - cubeUV_r5 ) + cubeUV_m4;
		} else if ( roughness >= cubeUV_r6 ) {
			mip = ( cubeUV_r5 - roughness ) * ( cubeUV_m6 - cubeUV_m5 ) / ( cubeUV_r5 - cubeUV_r6 ) + cubeUV_m5;
		} else {
			mip = - 2.0 * log2( 1.16 * roughness );		}
		return mip;
	}
	vec4 textureCubeUV( sampler2D envMap, vec3 sampleDir, float roughness ) {
		float mip = clamp( roughnessToMip( roughness ), cubeUV_m0, CUBEUV_MAX_MIP );
		float mipF = fract( mip );
		float mipInt = floor( mip );
		vec3 color0 = bilinearCubeUV( envMap, sampleDir, mipInt );
		if ( mipF == 0.0 ) {
			return vec4( color0, 1.0 );
		} else {
			vec3 color1 = bilinearCubeUV( envMap, sampleDir, mipInt + 1.0 );
			return vec4( mix( color0, color1, mipF ), 1.0 );
		}
	}
#endif`,V0=`vec3 transformedNormal = objectNormal;
#ifdef USE_TANGENT
	vec3 transformedTangent = objectTangent;
#endif
#ifdef USE_BATCHING
	mat3 bm = mat3( batchingMatrix );
	transformedNormal /= vec3( dot( bm[ 0 ], bm[ 0 ] ), dot( bm[ 1 ], bm[ 1 ] ), dot( bm[ 2 ], bm[ 2 ] ) );
	transformedNormal = bm * transformedNormal;
	#ifdef USE_TANGENT
		transformedTangent = bm * transformedTangent;
	#endif
#endif
#ifdef USE_INSTANCING
	mat3 im = mat3( instanceMatrix );
	transformedNormal /= vec3( dot( im[ 0 ], im[ 0 ] ), dot( im[ 1 ], im[ 1 ] ), dot( im[ 2 ], im[ 2 ] ) );
	transformedNormal = im * transformedNormal;
	#ifdef USE_TANGENT
		transformedTangent = im * transformedTangent;
	#endif
#endif
transformedNormal = normalMatrix * transformedNormal;
#ifdef FLIP_SIDED
	transformedNormal = - transformedNormal;
#endif
#ifdef USE_TANGENT
	transformedTangent = ( modelViewMatrix * vec4( transformedTangent, 0.0 ) ).xyz;
	#ifdef FLIP_SIDED
		transformedTangent = - transformedTangent;
	#endif
#endif`,G0=`#ifdef USE_DISPLACEMENTMAP
	uniform sampler2D displacementMap;
	uniform float displacementScale;
	uniform float displacementBias;
#endif`,W0=`#ifdef USE_DISPLACEMENTMAP
	transformed += normalize( objectNormal ) * ( texture2D( displacementMap, vDisplacementMapUv ).x * displacementScale + displacementBias );
#endif`,X0=`#ifdef USE_EMISSIVEMAP
	vec4 emissiveColor = texture2D( emissiveMap, vEmissiveMapUv );
	#ifdef DECODE_VIDEO_TEXTURE_EMISSIVE
		emissiveColor = sRGBTransferEOTF( emissiveColor );
	#endif
	totalEmissiveRadiance *= emissiveColor.rgb;
#endif`,Y0=`#ifdef USE_EMISSIVEMAP
	uniform sampler2D emissiveMap;
#endif`,q0="gl_FragColor = linearToOutputTexel( gl_FragColor );",$0=`vec4 LinearTransferOETF( in vec4 value ) {
	return value;
}
vec4 sRGBTransferEOTF( in vec4 value ) {
	return vec4( mix( pow( value.rgb * 0.9478672986 + vec3( 0.0521327014 ), vec3( 2.4 ) ), value.rgb * 0.0773993808, vec3( lessThanEqual( value.rgb, vec3( 0.04045 ) ) ) ), value.a );
}
vec4 sRGBTransferOETF( in vec4 value ) {
	return vec4( mix( pow( value.rgb, vec3( 0.41666 ) ) * 1.055 - vec3( 0.055 ), value.rgb * 12.92, vec3( lessThanEqual( value.rgb, vec3( 0.0031308 ) ) ) ), value.a );
}`,K0=`#ifdef USE_ENVMAP
	#ifdef ENV_WORLDPOS
		vec3 cameraToFrag;
		if ( isOrthographic ) {
			cameraToFrag = normalize( vec3( - viewMatrix[ 0 ][ 2 ], - viewMatrix[ 1 ][ 2 ], - viewMatrix[ 2 ][ 2 ] ) );
		} else {
			cameraToFrag = normalize( vWorldPosition - cameraPosition );
		}
		vec3 worldNormal = inverseTransformDirection( normal, viewMatrix );
		#ifdef ENVMAP_MODE_REFLECTION
			vec3 reflectVec = reflect( cameraToFrag, worldNormal );
		#else
			vec3 reflectVec = refract( cameraToFrag, worldNormal, refractionRatio );
		#endif
	#else
		vec3 reflectVec = vReflect;
	#endif
	#ifdef ENVMAP_TYPE_CUBE
		vec4 envColor = textureCube( envMap, envMapRotation * vec3( flipEnvMap * reflectVec.x, reflectVec.yz ) );
	#else
		vec4 envColor = vec4( 0.0 );
	#endif
	#ifdef ENVMAP_BLENDING_MULTIPLY
		outgoingLight = mix( outgoingLight, outgoingLight * envColor.xyz, specularStrength * reflectivity );
	#elif defined( ENVMAP_BLENDING_MIX )
		outgoingLight = mix( outgoingLight, envColor.xyz, specularStrength * reflectivity );
	#elif defined( ENVMAP_BLENDING_ADD )
		outgoingLight += envColor.xyz * specularStrength * reflectivity;
	#endif
#endif`,Z0=`#ifdef USE_ENVMAP
	uniform float envMapIntensity;
	uniform float flipEnvMap;
	uniform mat3 envMapRotation;
	#ifdef ENVMAP_TYPE_CUBE
		uniform samplerCube envMap;
	#else
		uniform sampler2D envMap;
	#endif
	
#endif`,j0=`#ifdef USE_ENVMAP
	uniform float reflectivity;
	#if defined( USE_BUMPMAP ) || defined( USE_NORMALMAP ) || defined( PHONG ) || defined( LAMBERT )
		#define ENV_WORLDPOS
	#endif
	#ifdef ENV_WORLDPOS
		varying vec3 vWorldPosition;
		uniform float refractionRatio;
	#else
		varying vec3 vReflect;
	#endif
#endif`,J0=`#ifdef USE_ENVMAP
	#if defined( USE_BUMPMAP ) || defined( USE_NORMALMAP ) || defined( PHONG ) || defined( LAMBERT )
		#define ENV_WORLDPOS
	#endif
	#ifdef ENV_WORLDPOS
		
		varying vec3 vWorldPosition;
	#else
		varying vec3 vReflect;
		uniform float refractionRatio;
	#endif
#endif`,Q0=`#ifdef USE_ENVMAP
	#ifdef ENV_WORLDPOS
		vWorldPosition = worldPosition.xyz;
	#else
		vec3 cameraToVertex;
		if ( isOrthographic ) {
			cameraToVertex = normalize( vec3( - viewMatrix[ 0 ][ 2 ], - viewMatrix[ 1 ][ 2 ], - viewMatrix[ 2 ][ 2 ] ) );
		} else {
			cameraToVertex = normalize( worldPosition.xyz - cameraPosition );
		}
		vec3 worldNormal = inverseTransformDirection( transformedNormal, viewMatrix );
		#ifdef ENVMAP_MODE_REFLECTION
			vReflect = reflect( cameraToVertex, worldNormal );
		#else
			vReflect = refract( cameraToVertex, worldNormal, refractionRatio );
		#endif
	#endif
#endif`,tv=`#ifdef USE_FOG
	vFogDepth = - mvPosition.z;
#endif`,ev=`#ifdef USE_FOG
	varying float vFogDepth;
#endif`,nv=`#ifdef USE_FOG
	#ifdef FOG_EXP2
		float fogFactor = 1.0 - exp( - fogDensity * fogDensity * vFogDepth * vFogDepth );
	#else
		float fogFactor = smoothstep( fogNear, fogFar, vFogDepth );
	#endif
	gl_FragColor.rgb = mix( gl_FragColor.rgb, fogColor, fogFactor );
#endif`,iv=`#ifdef USE_FOG
	uniform vec3 fogColor;
	varying float vFogDepth;
	#ifdef FOG_EXP2
		uniform float fogDensity;
	#else
		uniform float fogNear;
		uniform float fogFar;
	#endif
#endif`,rv=`#ifdef USE_GRADIENTMAP
	uniform sampler2D gradientMap;
#endif
vec3 getGradientIrradiance( vec3 normal, vec3 lightDirection ) {
	float dotNL = dot( normal, lightDirection );
	vec2 coord = vec2( dotNL * 0.5 + 0.5, 0.0 );
	#ifdef USE_GRADIENTMAP
		return vec3( texture2D( gradientMap, coord ).r );
	#else
		vec2 fw = fwidth( coord ) * 0.5;
		return mix( vec3( 0.7 ), vec3( 1.0 ), smoothstep( 0.7 - fw.x, 0.7 + fw.x, coord.x ) );
	#endif
}`,sv=`#ifdef USE_LIGHTMAP
	uniform sampler2D lightMap;
	uniform float lightMapIntensity;
#endif`,ov=`LambertMaterial material;
material.diffuseColor = diffuseColor.rgb;
material.specularStrength = specularStrength;`,av=`varying vec3 vViewPosition;
struct LambertMaterial {
	vec3 diffuseColor;
	float specularStrength;
};
void RE_Direct_Lambert( const in IncidentLight directLight, const in vec3 geometryPosition, const in vec3 geometryNormal, const in vec3 geometryViewDir, const in vec3 geometryClearcoatNormal, const in LambertMaterial material, inout ReflectedLight reflectedLight ) {
	float dotNL = saturate( dot( geometryNormal, directLight.direction ) );
	vec3 irradiance = dotNL * directLight.color;
	reflectedLight.directDiffuse += irradiance * BRDF_Lambert( material.diffuseColor );
}
void RE_IndirectDiffuse_Lambert( const in vec3 irradiance, const in vec3 geometryPosition, const in vec3 geometryNormal, const in vec3 geometryViewDir, const in vec3 geometryClearcoatNormal, const in LambertMaterial material, inout ReflectedLight reflectedLight ) {
	reflectedLight.indirectDiffuse += irradiance * BRDF_Lambert( material.diffuseColor );
}
#define RE_Direct				RE_Direct_Lambert
#define RE_IndirectDiffuse		RE_IndirectDiffuse_Lambert`,lv=`uniform bool receiveShadow;
uniform vec3 ambientLightColor;
#if defined( USE_LIGHT_PROBES )
	uniform vec3 lightProbe[ 9 ];
#endif
vec3 shGetIrradianceAt( in vec3 normal, in vec3 shCoefficients[ 9 ] ) {
	float x = normal.x, y = normal.y, z = normal.z;
	vec3 result = shCoefficients[ 0 ] * 0.886227;
	result += shCoefficients[ 1 ] * 2.0 * 0.511664 * y;
	result += shCoefficients[ 2 ] * 2.0 * 0.511664 * z;
	result += shCoefficients[ 3 ] * 2.0 * 0.511664 * x;
	result += shCoefficients[ 4 ] * 2.0 * 0.429043 * x * y;
	result += shCoefficients[ 5 ] * 2.0 * 0.429043 * y * z;
	result += shCoefficients[ 6 ] * ( 0.743125 * z * z - 0.247708 );
	result += shCoefficients[ 7 ] * 2.0 * 0.429043 * x * z;
	result += shCoefficients[ 8 ] * 0.429043 * ( x * x - y * y );
	return result;
}
vec3 getLightProbeIrradiance( const in vec3 lightProbe[ 9 ], const in vec3 normal ) {
	vec3 worldNormal = inverseTransformDirection( normal, viewMatrix );
	vec3 irradiance = shGetIrradianceAt( worldNormal, lightProbe );
	return irradiance;
}
vec3 getAmbientLightIrradiance( const in vec3 ambientLightColor ) {
	vec3 irradiance = ambientLightColor;
	return irradiance;
}
float getDistanceAttenuation( const in float lightDistance, const in float cutoffDistance, const in float decayExponent ) {
	float distanceFalloff = 1.0 / max( pow( lightDistance, decayExponent ), 0.01 );
	if ( cutoffDistance > 0.0 ) {
		distanceFalloff *= pow2( saturate( 1.0 - pow4( lightDistance / cutoffDistance ) ) );
	}
	return distanceFalloff;
}
float getSpotAttenuation( const in float coneCosine, const in float penumbraCosine, const in float angleCosine ) {
	return smoothstep( coneCosine, penumbraCosine, angleCosine );
}
#if NUM_DIR_LIGHTS > 0
	struct DirectionalLight {
		vec3 direction;
		vec3 color;
	};
	uniform DirectionalLight directionalLights[ NUM_DIR_LIGHTS ];
	void getDirectionalLightInfo( const in DirectionalLight directionalLight, out IncidentLight light ) {
		light.color = directionalLight.color;
		light.direction = directionalLight.direction;
		light.visible = true;
	}
#endif
#if NUM_POINT_LIGHTS > 0
	struct PointLight {
		vec3 position;
		vec3 color;
		float distance;
		float decay;
	};
	uniform PointLight pointLights[ NUM_POINT_LIGHTS ];
	void getPointLightInfo( const in PointLight pointLight, const in vec3 geometryPosition, out IncidentLight light ) {
		vec3 lVector = pointLight.position - geometryPosition;
		light.direction = normalize( lVector );
		float lightDistance = length( lVector );
		light.color = pointLight.color;
		light.color *= getDistanceAttenuation( lightDistance, pointLight.distance, pointLight.decay );
		light.visible = ( light.color != vec3( 0.0 ) );
	}
#endif
#if NUM_SPOT_LIGHTS > 0
	struct SpotLight {
		vec3 position;
		vec3 direction;
		vec3 color;
		float distance;
		float decay;
		float coneCos;
		float penumbraCos;
	};
	uniform SpotLight spotLights[ NUM_SPOT_LIGHTS ];
	void getSpotLightInfo( const in SpotLight spotLight, const in vec3 geometryPosition, out IncidentLight light ) {
		vec3 lVector = spotLight.position - geometryPosition;
		light.direction = normalize( lVector );
		float angleCos = dot( light.direction, spotLight.direction );
		float spotAttenuation = getSpotAttenuation( spotLight.coneCos, spotLight.penumbraCos, angleCos );
		if ( spotAttenuation > 0.0 ) {
			float lightDistance = length( lVector );
			light.color = spotLight.color * spotAttenuation;
			light.color *= getDistanceAttenuation( lightDistance, spotLight.distance, spotLight.decay );
			light.visible = ( light.color != vec3( 0.0 ) );
		} else {
			light.color = vec3( 0.0 );
			light.visible = false;
		}
	}
#endif
#if NUM_RECT_AREA_LIGHTS > 0
	struct RectAreaLight {
		vec3 color;
		vec3 position;
		vec3 halfWidth;
		vec3 halfHeight;
	};
	uniform sampler2D ltc_1;	uniform sampler2D ltc_2;
	uniform RectAreaLight rectAreaLights[ NUM_RECT_AREA_LIGHTS ];
#endif
#if NUM_HEMI_LIGHTS > 0
	struct HemisphereLight {
		vec3 direction;
		vec3 skyColor;
		vec3 groundColor;
	};
	uniform HemisphereLight hemisphereLights[ NUM_HEMI_LIGHTS ];
	vec3 getHemisphereLightIrradiance( const in HemisphereLight hemiLight, const in vec3 normal ) {
		float dotNL = dot( normal, hemiLight.direction );
		float hemiDiffuseWeight = 0.5 * dotNL + 0.5;
		vec3 irradiance = mix( hemiLight.groundColor, hemiLight.skyColor, hemiDiffuseWeight );
		return irradiance;
	}
#endif`,cv=`#ifdef USE_ENVMAP
	vec3 getIBLIrradiance( const in vec3 normal ) {
		#ifdef ENVMAP_TYPE_CUBE_UV
			vec3 worldNormal = inverseTransformDirection( normal, viewMatrix );
			vec4 envMapColor = textureCubeUV( envMap, envMapRotation * worldNormal, 1.0 );
			return PI * envMapColor.rgb * envMapIntensity;
		#else
			return vec3( 0.0 );
		#endif
	}
	vec3 getIBLRadiance( const in vec3 viewDir, const in vec3 normal, const in float roughness ) {
		#ifdef ENVMAP_TYPE_CUBE_UV
			vec3 reflectVec = reflect( - viewDir, normal );
			reflectVec = normalize( mix( reflectVec, normal, roughness * roughness) );
			reflectVec = inverseTransformDirection( reflectVec, viewMatrix );
			vec4 envMapColor = textureCubeUV( envMap, envMapRotation * reflectVec, roughness );
			return envMapColor.rgb * envMapIntensity;
		#else
			return vec3( 0.0 );
		#endif
	}
	#ifdef USE_ANISOTROPY
		vec3 getIBLAnisotropyRadiance( const in vec3 viewDir, const in vec3 normal, const in float roughness, const in vec3 bitangent, const in float anisotropy ) {
			#ifdef ENVMAP_TYPE_CUBE_UV
				vec3 bentNormal = cross( bitangent, viewDir );
				bentNormal = normalize( cross( bentNormal, bitangent ) );
				bentNormal = normalize( mix( bentNormal, normal, pow2( pow2( 1.0 - anisotropy * ( 1.0 - roughness ) ) ) ) );
				return getIBLRadiance( viewDir, bentNormal, roughness );
			#else
				return vec3( 0.0 );
			#endif
		}
	#endif
#endif`,uv=`ToonMaterial material;
material.diffuseColor = diffuseColor.rgb;`,hv=`varying vec3 vViewPosition;
struct ToonMaterial {
	vec3 diffuseColor;
};
void RE_Direct_Toon( const in IncidentLight directLight, const in vec3 geometryPosition, const in vec3 geometryNormal, const in vec3 geometryViewDir, const in vec3 geometryClearcoatNormal, const in ToonMaterial material, inout ReflectedLight reflectedLight ) {
	vec3 irradiance = getGradientIrradiance( geometryNormal, directLight.direction ) * directLight.color;
	reflectedLight.directDiffuse += irradiance * BRDF_Lambert( material.diffuseColor );
}
void RE_IndirectDiffuse_Toon( const in vec3 irradiance, const in vec3 geometryPosition, const in vec3 geometryNormal, const in vec3 geometryViewDir, const in vec3 geometryClearcoatNormal, const in ToonMaterial material, inout ReflectedLight reflectedLight ) {
	reflectedLight.indirectDiffuse += irradiance * BRDF_Lambert( material.diffuseColor );
}
#define RE_Direct				RE_Direct_Toon
#define RE_IndirectDiffuse		RE_IndirectDiffuse_Toon`,fv=`BlinnPhongMaterial material;
material.diffuseColor = diffuseColor.rgb;
material.specularColor = specular;
material.specularShininess = shininess;
material.specularStrength = specularStrength;`,dv=`varying vec3 vViewPosition;
struct BlinnPhongMaterial {
	vec3 diffuseColor;
	vec3 specularColor;
	float specularShininess;
	float specularStrength;
};
void RE_Direct_BlinnPhong( const in IncidentLight directLight, const in vec3 geometryPosition, const in vec3 geometryNormal, const in vec3 geometryViewDir, const in vec3 geometryClearcoatNormal, const in BlinnPhongMaterial material, inout ReflectedLight reflectedLight ) {
	float dotNL = saturate( dot( geometryNormal, directLight.direction ) );
	vec3 irradiance = dotNL * directLight.color;
	reflectedLight.directDiffuse += irradiance * BRDF_Lambert( material.diffuseColor );
	reflectedLight.directSpecular += irradiance * BRDF_BlinnPhong( directLight.direction, geometryViewDir, geometryNormal, material.specularColor, material.specularShininess ) * material.specularStrength;
}
void RE_IndirectDiffuse_BlinnPhong( const in vec3 irradiance, const in vec3 geometryPosition, const in vec3 geometryNormal, const in vec3 geometryViewDir, const in vec3 geometryClearcoatNormal, const in BlinnPhongMaterial material, inout ReflectedLight reflectedLight ) {
	reflectedLight.indirectDiffuse += irradiance * BRDF_Lambert( material.diffuseColor );
}
#define RE_Direct				RE_Direct_BlinnPhong
#define RE_IndirectDiffuse		RE_IndirectDiffuse_BlinnPhong`,pv=`PhysicalMaterial material;
material.diffuseColor = diffuseColor.rgb * ( 1.0 - metalnessFactor );
vec3 dxy = max( abs( dFdx( nonPerturbedNormal ) ), abs( dFdy( nonPerturbedNormal ) ) );
float geometryRoughness = max( max( dxy.x, dxy.y ), dxy.z );
material.roughness = max( roughnessFactor, 0.0525 );material.roughness += geometryRoughness;
material.roughness = min( material.roughness, 1.0 );
#ifdef IOR
	material.ior = ior;
	#ifdef USE_SPECULAR
		float specularIntensityFactor = specularIntensity;
		vec3 specularColorFactor = specularColor;
		#ifdef USE_SPECULAR_COLORMAP
			specularColorFactor *= texture2D( specularColorMap, vSpecularColorMapUv ).rgb;
		#endif
		#ifdef USE_SPECULAR_INTENSITYMAP
			specularIntensityFactor *= texture2D( specularIntensityMap, vSpecularIntensityMapUv ).a;
		#endif
		material.specularF90 = mix( specularIntensityFactor, 1.0, metalnessFactor );
	#else
		float specularIntensityFactor = 1.0;
		vec3 specularColorFactor = vec3( 1.0 );
		material.specularF90 = 1.0;
	#endif
	material.specularColor = mix( min( pow2( ( material.ior - 1.0 ) / ( material.ior + 1.0 ) ) * specularColorFactor, vec3( 1.0 ) ) * specularIntensityFactor, diffuseColor.rgb, metalnessFactor );
#else
	material.specularColor = mix( vec3( 0.04 ), diffuseColor.rgb, metalnessFactor );
	material.specularF90 = 1.0;
#endif
#ifdef USE_CLEARCOAT
	material.clearcoat = clearcoat;
	material.clearcoatRoughness = clearcoatRoughness;
	material.clearcoatF0 = vec3( 0.04 );
	material.clearcoatF90 = 1.0;
	#ifdef USE_CLEARCOATMAP
		material.clearcoat *= texture2D( clearcoatMap, vClearcoatMapUv ).x;
	#endif
	#ifdef USE_CLEARCOAT_ROUGHNESSMAP
		material.clearcoatRoughness *= texture2D( clearcoatRoughnessMap, vClearcoatRoughnessMapUv ).y;
	#endif
	material.clearcoat = saturate( material.clearcoat );	material.clearcoatRoughness = max( material.clearcoatRoughness, 0.0525 );
	material.clearcoatRoughness += geometryRoughness;
	material.clearcoatRoughness = min( material.clearcoatRoughness, 1.0 );
#endif
#ifdef USE_DISPERSION
	material.dispersion = dispersion;
#endif
#ifdef USE_IRIDESCENCE
	material.iridescence = iridescence;
	material.iridescenceIOR = iridescenceIOR;
	#ifdef USE_IRIDESCENCEMAP
		material.iridescence *= texture2D( iridescenceMap, vIridescenceMapUv ).r;
	#endif
	#ifdef USE_IRIDESCENCE_THICKNESSMAP
		material.iridescenceThickness = (iridescenceThicknessMaximum - iridescenceThicknessMinimum) * texture2D( iridescenceThicknessMap, vIridescenceThicknessMapUv ).g + iridescenceThicknessMinimum;
	#else
		material.iridescenceThickness = iridescenceThicknessMaximum;
	#endif
#endif
#ifdef USE_SHEEN
	material.sheenColor = sheenColor;
	#ifdef USE_SHEEN_COLORMAP
		material.sheenColor *= texture2D( sheenColorMap, vSheenColorMapUv ).rgb;
	#endif
	material.sheenRoughness = clamp( sheenRoughness, 0.07, 1.0 );
	#ifdef USE_SHEEN_ROUGHNESSMAP
		material.sheenRoughness *= texture2D( sheenRoughnessMap, vSheenRoughnessMapUv ).a;
	#endif
#endif
#ifdef USE_ANISOTROPY
	#ifdef USE_ANISOTROPYMAP
		mat2 anisotropyMat = mat2( anisotropyVector.x, anisotropyVector.y, - anisotropyVector.y, anisotropyVector.x );
		vec3 anisotropyPolar = texture2D( anisotropyMap, vAnisotropyMapUv ).rgb;
		vec2 anisotropyV = anisotropyMat * normalize( 2.0 * anisotropyPolar.rg - vec2( 1.0 ) ) * anisotropyPolar.b;
	#else
		vec2 anisotropyV = anisotropyVector;
	#endif
	material.anisotropy = length( anisotropyV );
	if( material.anisotropy == 0.0 ) {
		anisotropyV = vec2( 1.0, 0.0 );
	} else {
		anisotropyV /= material.anisotropy;
		material.anisotropy = saturate( material.anisotropy );
	}
	material.alphaT = mix( pow2( material.roughness ), 1.0, pow2( material.anisotropy ) );
	material.anisotropyT = tbn[ 0 ] * anisotropyV.x + tbn[ 1 ] * anisotropyV.y;
	material.anisotropyB = tbn[ 1 ] * anisotropyV.x - tbn[ 0 ] * anisotropyV.y;
#endif`,mv=`struct PhysicalMaterial {
	vec3 diffuseColor;
	float roughness;
	vec3 specularColor;
	float specularF90;
	float dispersion;
	#ifdef USE_CLEARCOAT
		float clearcoat;
		float clearcoatRoughness;
		vec3 clearcoatF0;
		float clearcoatF90;
	#endif
	#ifdef USE_IRIDESCENCE
		float iridescence;
		float iridescenceIOR;
		float iridescenceThickness;
		vec3 iridescenceFresnel;
		vec3 iridescenceF0;
	#endif
	#ifdef USE_SHEEN
		vec3 sheenColor;
		float sheenRoughness;
	#endif
	#ifdef IOR
		float ior;
	#endif
	#ifdef USE_TRANSMISSION
		float transmission;
		float transmissionAlpha;
		float thickness;
		float attenuationDistance;
		vec3 attenuationColor;
	#endif
	#ifdef USE_ANISOTROPY
		float anisotropy;
		float alphaT;
		vec3 anisotropyT;
		vec3 anisotropyB;
	#endif
};
vec3 clearcoatSpecularDirect = vec3( 0.0 );
vec3 clearcoatSpecularIndirect = vec3( 0.0 );
vec3 sheenSpecularDirect = vec3( 0.0 );
vec3 sheenSpecularIndirect = vec3(0.0 );
vec3 Schlick_to_F0( const in vec3 f, const in float f90, const in float dotVH ) {
    float x = clamp( 1.0 - dotVH, 0.0, 1.0 );
    float x2 = x * x;
    float x5 = clamp( x * x2 * x2, 0.0, 0.9999 );
    return ( f - vec3( f90 ) * x5 ) / ( 1.0 - x5 );
}
float V_GGX_SmithCorrelated( const in float alpha, const in float dotNL, const in float dotNV ) {
	float a2 = pow2( alpha );
	float gv = dotNL * sqrt( a2 + ( 1.0 - a2 ) * pow2( dotNV ) );
	float gl = dotNV * sqrt( a2 + ( 1.0 - a2 ) * pow2( dotNL ) );
	return 0.5 / max( gv + gl, EPSILON );
}
float D_GGX( const in float alpha, const in float dotNH ) {
	float a2 = pow2( alpha );
	float denom = pow2( dotNH ) * ( a2 - 1.0 ) + 1.0;
	return RECIPROCAL_PI * a2 / pow2( denom );
}
#ifdef USE_ANISOTROPY
	float V_GGX_SmithCorrelated_Anisotropic( const in float alphaT, const in float alphaB, const in float dotTV, const in float dotBV, const in float dotTL, const in float dotBL, const in float dotNV, const in float dotNL ) {
		float gv = dotNL * length( vec3( alphaT * dotTV, alphaB * dotBV, dotNV ) );
		float gl = dotNV * length( vec3( alphaT * dotTL, alphaB * dotBL, dotNL ) );
		float v = 0.5 / ( gv + gl );
		return saturate(v);
	}
	float D_GGX_Anisotropic( const in float alphaT, const in float alphaB, const in float dotNH, const in float dotTH, const in float dotBH ) {
		float a2 = alphaT * alphaB;
		highp vec3 v = vec3( alphaB * dotTH, alphaT * dotBH, a2 * dotNH );
		highp float v2 = dot( v, v );
		float w2 = a2 / v2;
		return RECIPROCAL_PI * a2 * pow2 ( w2 );
	}
#endif
#ifdef USE_CLEARCOAT
	vec3 BRDF_GGX_Clearcoat( const in vec3 lightDir, const in vec3 viewDir, const in vec3 normal, const in PhysicalMaterial material) {
		vec3 f0 = material.clearcoatF0;
		float f90 = material.clearcoatF90;
		float roughness = material.clearcoatRoughness;
		float alpha = pow2( roughness );
		vec3 halfDir = normalize( lightDir + viewDir );
		float dotNL = saturate( dot( normal, lightDir ) );
		float dotNV = saturate( dot( normal, viewDir ) );
		float dotNH = saturate( dot( normal, halfDir ) );
		float dotVH = saturate( dot( viewDir, halfDir ) );
		vec3 F = F_Schlick( f0, f90, dotVH );
		float V = V_GGX_SmithCorrelated( alpha, dotNL, dotNV );
		float D = D_GGX( alpha, dotNH );
		return F * ( V * D );
	}
#endif
vec3 BRDF_GGX( const in vec3 lightDir, const in vec3 viewDir, const in vec3 normal, const in PhysicalMaterial material ) {
	vec3 f0 = material.specularColor;
	float f90 = material.specularF90;
	float roughness = material.roughness;
	float alpha = pow2( roughness );
	vec3 halfDir = normalize( lightDir + viewDir );
	float dotNL = saturate( dot( normal, lightDir ) );
	float dotNV = saturate( dot( normal, viewDir ) );
	float dotNH = saturate( dot( normal, halfDir ) );
	float dotVH = saturate( dot( viewDir, halfDir ) );
	vec3 F = F_Schlick( f0, f90, dotVH );
	#ifdef USE_IRIDESCENCE
		F = mix( F, material.iridescenceFresnel, material.iridescence );
	#endif
	#ifdef USE_ANISOTROPY
		float dotTL = dot( material.anisotropyT, lightDir );
		float dotTV = dot( material.anisotropyT, viewDir );
		float dotTH = dot( material.anisotropyT, halfDir );
		float dotBL = dot( material.anisotropyB, lightDir );
		float dotBV = dot( material.anisotropyB, viewDir );
		float dotBH = dot( material.anisotropyB, halfDir );
		float V = V_GGX_SmithCorrelated_Anisotropic( material.alphaT, alpha, dotTV, dotBV, dotTL, dotBL, dotNV, dotNL );
		float D = D_GGX_Anisotropic( material.alphaT, alpha, dotNH, dotTH, dotBH );
	#else
		float V = V_GGX_SmithCorrelated( alpha, dotNL, dotNV );
		float D = D_GGX( alpha, dotNH );
	#endif
	return F * ( V * D );
}
vec2 LTC_Uv( const in vec3 N, const in vec3 V, const in float roughness ) {
	const float LUT_SIZE = 64.0;
	const float LUT_SCALE = ( LUT_SIZE - 1.0 ) / LUT_SIZE;
	const float LUT_BIAS = 0.5 / LUT_SIZE;
	float dotNV = saturate( dot( N, V ) );
	vec2 uv = vec2( roughness, sqrt( 1.0 - dotNV ) );
	uv = uv * LUT_SCALE + LUT_BIAS;
	return uv;
}
float LTC_ClippedSphereFormFactor( const in vec3 f ) {
	float l = length( f );
	return max( ( l * l + f.z ) / ( l + 1.0 ), 0.0 );
}
vec3 LTC_EdgeVectorFormFactor( const in vec3 v1, const in vec3 v2 ) {
	float x = dot( v1, v2 );
	float y = abs( x );
	float a = 0.8543985 + ( 0.4965155 + 0.0145206 * y ) * y;
	float b = 3.4175940 + ( 4.1616724 + y ) * y;
	float v = a / b;
	float theta_sintheta = ( x > 0.0 ) ? v : 0.5 * inversesqrt( max( 1.0 - x * x, 1e-7 ) ) - v;
	return cross( v1, v2 ) * theta_sintheta;
}
vec3 LTC_Evaluate( const in vec3 N, const in vec3 V, const in vec3 P, const in mat3 mInv, const in vec3 rectCoords[ 4 ] ) {
	vec3 v1 = rectCoords[ 1 ] - rectCoords[ 0 ];
	vec3 v2 = rectCoords[ 3 ] - rectCoords[ 0 ];
	vec3 lightNormal = cross( v1, v2 );
	if( dot( lightNormal, P - rectCoords[ 0 ] ) < 0.0 ) return vec3( 0.0 );
	vec3 T1, T2;
	T1 = normalize( V - N * dot( V, N ) );
	T2 = - cross( N, T1 );
	mat3 mat = mInv * transposeMat3( mat3( T1, T2, N ) );
	vec3 coords[ 4 ];
	coords[ 0 ] = mat * ( rectCoords[ 0 ] - P );
	coords[ 1 ] = mat * ( rectCoords[ 1 ] - P );
	coords[ 2 ] = mat * ( rectCoords[ 2 ] - P );
	coords[ 3 ] = mat * ( rectCoords[ 3 ] - P );
	coords[ 0 ] = normalize( coords[ 0 ] );
	coords[ 1 ] = normalize( coords[ 1 ] );
	coords[ 2 ] = normalize( coords[ 2 ] );
	coords[ 3 ] = normalize( coords[ 3 ] );
	vec3 vectorFormFactor = vec3( 0.0 );
	vectorFormFactor += LTC_EdgeVectorFormFactor( coords[ 0 ], coords[ 1 ] );
	vectorFormFactor += LTC_EdgeVectorFormFactor( coords[ 1 ], coords[ 2 ] );
	vectorFormFactor += LTC_EdgeVectorFormFactor( coords[ 2 ], coords[ 3 ] );
	vectorFormFactor += LTC_EdgeVectorFormFactor( coords[ 3 ], coords[ 0 ] );
	float result = LTC_ClippedSphereFormFactor( vectorFormFactor );
	return vec3( result );
}
#if defined( USE_SHEEN )
float D_Charlie( float roughness, float dotNH ) {
	float alpha = pow2( roughness );
	float invAlpha = 1.0 / alpha;
	float cos2h = dotNH * dotNH;
	float sin2h = max( 1.0 - cos2h, 0.0078125 );
	return ( 2.0 + invAlpha ) * pow( sin2h, invAlpha * 0.5 ) / ( 2.0 * PI );
}
float V_Neubelt( float dotNV, float dotNL ) {
	return saturate( 1.0 / ( 4.0 * ( dotNL + dotNV - dotNL * dotNV ) ) );
}
vec3 BRDF_Sheen( const in vec3 lightDir, const in vec3 viewDir, const in vec3 normal, vec3 sheenColor, const in float sheenRoughness ) {
	vec3 halfDir = normalize( lightDir + viewDir );
	float dotNL = saturate( dot( normal, lightDir ) );
	float dotNV = saturate( dot( normal, viewDir ) );
	float dotNH = saturate( dot( normal, halfDir ) );
	float D = D_Charlie( sheenRoughness, dotNH );
	float V = V_Neubelt( dotNV, dotNL );
	return sheenColor * ( D * V );
}
#endif
float IBLSheenBRDF( const in vec3 normal, const in vec3 viewDir, const in float roughness ) {
	float dotNV = saturate( dot( normal, viewDir ) );
	float r2 = roughness * roughness;
	float a = roughness < 0.25 ? -339.2 * r2 + 161.4 * roughness - 25.9 : -8.48 * r2 + 14.3 * roughness - 9.95;
	float b = roughness < 0.25 ? 44.0 * r2 - 23.7 * roughness + 3.26 : 1.97 * r2 - 3.27 * roughness + 0.72;
	float DG = exp( a * dotNV + b ) + ( roughness < 0.25 ? 0.0 : 0.1 * ( roughness - 0.25 ) );
	return saturate( DG * RECIPROCAL_PI );
}
vec2 DFGApprox( const in vec3 normal, const in vec3 viewDir, const in float roughness ) {
	float dotNV = saturate( dot( normal, viewDir ) );
	const vec4 c0 = vec4( - 1, - 0.0275, - 0.572, 0.022 );
	const vec4 c1 = vec4( 1, 0.0425, 1.04, - 0.04 );
	vec4 r = roughness * c0 + c1;
	float a004 = min( r.x * r.x, exp2( - 9.28 * dotNV ) ) * r.x + r.y;
	vec2 fab = vec2( - 1.04, 1.04 ) * a004 + r.zw;
	return fab;
}
vec3 EnvironmentBRDF( const in vec3 normal, const in vec3 viewDir, const in vec3 specularColor, const in float specularF90, const in float roughness ) {
	vec2 fab = DFGApprox( normal, viewDir, roughness );
	return specularColor * fab.x + specularF90 * fab.y;
}
#ifdef USE_IRIDESCENCE
void computeMultiscatteringIridescence( const in vec3 normal, const in vec3 viewDir, const in vec3 specularColor, const in float specularF90, const in float iridescence, const in vec3 iridescenceF0, const in float roughness, inout vec3 singleScatter, inout vec3 multiScatter ) {
#else
void computeMultiscattering( const in vec3 normal, const in vec3 viewDir, const in vec3 specularColor, const in float specularF90, const in float roughness, inout vec3 singleScatter, inout vec3 multiScatter ) {
#endif
	vec2 fab = DFGApprox( normal, viewDir, roughness );
	#ifdef USE_IRIDESCENCE
		vec3 Fr = mix( specularColor, iridescenceF0, iridescence );
	#else
		vec3 Fr = specularColor;
	#endif
	vec3 FssEss = Fr * fab.x + specularF90 * fab.y;
	float Ess = fab.x + fab.y;
	float Ems = 1.0 - Ess;
	vec3 Favg = Fr + ( 1.0 - Fr ) * 0.047619;	vec3 Fms = FssEss * Favg / ( 1.0 - Ems * Favg );
	singleScatter += FssEss;
	multiScatter += Fms * Ems;
}
#if NUM_RECT_AREA_LIGHTS > 0
	void RE_Direct_RectArea_Physical( const in RectAreaLight rectAreaLight, const in vec3 geometryPosition, const in vec3 geometryNormal, const in vec3 geometryViewDir, const in vec3 geometryClearcoatNormal, const in PhysicalMaterial material, inout ReflectedLight reflectedLight ) {
		vec3 normal = geometryNormal;
		vec3 viewDir = geometryViewDir;
		vec3 position = geometryPosition;
		vec3 lightPos = rectAreaLight.position;
		vec3 halfWidth = rectAreaLight.halfWidth;
		vec3 halfHeight = rectAreaLight.halfHeight;
		vec3 lightColor = rectAreaLight.color;
		float roughness = material.roughness;
		vec3 rectCoords[ 4 ];
		rectCoords[ 0 ] = lightPos + halfWidth - halfHeight;		rectCoords[ 1 ] = lightPos - halfWidth - halfHeight;
		rectCoords[ 2 ] = lightPos - halfWidth + halfHeight;
		rectCoords[ 3 ] = lightPos + halfWidth + halfHeight;
		vec2 uv = LTC_Uv( normal, viewDir, roughness );
		vec4 t1 = texture2D( ltc_1, uv );
		vec4 t2 = texture2D( ltc_2, uv );
		mat3 mInv = mat3(
			vec3( t1.x, 0, t1.y ),
			vec3(    0, 1,    0 ),
			vec3( t1.z, 0, t1.w )
		);
		vec3 fresnel = ( material.specularColor * t2.x + ( vec3( 1.0 ) - material.specularColor ) * t2.y );
		reflectedLight.directSpecular += lightColor * fresnel * LTC_Evaluate( normal, viewDir, position, mInv, rectCoords );
		reflectedLight.directDiffuse += lightColor * material.diffuseColor * LTC_Evaluate( normal, viewDir, position, mat3( 1.0 ), rectCoords );
	}
#endif
void RE_Direct_Physical( const in IncidentLight directLight, const in vec3 geometryPosition, const in vec3 geometryNormal, const in vec3 geometryViewDir, const in vec3 geometryClearcoatNormal, const in PhysicalMaterial material, inout ReflectedLight reflectedLight ) {
	float dotNL = saturate( dot( geometryNormal, directLight.direction ) );
	vec3 irradiance = dotNL * directLight.color;
	#ifdef USE_CLEARCOAT
		float dotNLcc = saturate( dot( geometryClearcoatNormal, directLight.direction ) );
		vec3 ccIrradiance = dotNLcc * directLight.color;
		clearcoatSpecularDirect += ccIrradiance * BRDF_GGX_Clearcoat( directLight.direction, geometryViewDir, geometryClearcoatNormal, material );
	#endif
	#ifdef USE_SHEEN
		sheenSpecularDirect += irradiance * BRDF_Sheen( directLight.direction, geometryViewDir, geometryNormal, material.sheenColor, material.sheenRoughness );
	#endif
	reflectedLight.directSpecular += irradiance * BRDF_GGX( directLight.direction, geometryViewDir, geometryNormal, material );
	reflectedLight.directDiffuse += irradiance * BRDF_Lambert( material.diffuseColor );
}
void RE_IndirectDiffuse_Physical( const in vec3 irradiance, const in vec3 geometryPosition, const in vec3 geometryNormal, const in vec3 geometryViewDir, const in vec3 geometryClearcoatNormal, const in PhysicalMaterial material, inout ReflectedLight reflectedLight ) {
	reflectedLight.indirectDiffuse += irradiance * BRDF_Lambert( material.diffuseColor );
}
void RE_IndirectSpecular_Physical( const in vec3 radiance, const in vec3 irradiance, const in vec3 clearcoatRadiance, const in vec3 geometryPosition, const in vec3 geometryNormal, const in vec3 geometryViewDir, const in vec3 geometryClearcoatNormal, const in PhysicalMaterial material, inout ReflectedLight reflectedLight) {
	#ifdef USE_CLEARCOAT
		clearcoatSpecularIndirect += clearcoatRadiance * EnvironmentBRDF( geometryClearcoatNormal, geometryViewDir, material.clearcoatF0, material.clearcoatF90, material.clearcoatRoughness );
	#endif
	#ifdef USE_SHEEN
		sheenSpecularIndirect += irradiance * material.sheenColor * IBLSheenBRDF( geometryNormal, geometryViewDir, material.sheenRoughness );
	#endif
	vec3 singleScattering = vec3( 0.0 );
	vec3 multiScattering = vec3( 0.0 );
	vec3 cosineWeightedIrradiance = irradiance * RECIPROCAL_PI;
	#ifdef USE_IRIDESCENCE
		computeMultiscatteringIridescence( geometryNormal, geometryViewDir, material.specularColor, material.specularF90, material.iridescence, material.iridescenceFresnel, material.roughness, singleScattering, multiScattering );
	#else
		computeMultiscattering( geometryNormal, geometryViewDir, material.specularColor, material.specularF90, material.roughness, singleScattering, multiScattering );
	#endif
	vec3 totalScattering = singleScattering + multiScattering;
	vec3 diffuse = material.diffuseColor * ( 1.0 - max( max( totalScattering.r, totalScattering.g ), totalScattering.b ) );
	reflectedLight.indirectSpecular += radiance * singleScattering;
	reflectedLight.indirectSpecular += multiScattering * cosineWeightedIrradiance;
	reflectedLight.indirectDiffuse += diffuse * cosineWeightedIrradiance;
}
#define RE_Direct				RE_Direct_Physical
#define RE_Direct_RectArea		RE_Direct_RectArea_Physical
#define RE_IndirectDiffuse		RE_IndirectDiffuse_Physical
#define RE_IndirectSpecular		RE_IndirectSpecular_Physical
float computeSpecularOcclusion( const in float dotNV, const in float ambientOcclusion, const in float roughness ) {
	return saturate( pow( dotNV + ambientOcclusion, exp2( - 16.0 * roughness - 1.0 ) ) - 1.0 + ambientOcclusion );
}`,_v=`
vec3 geometryPosition = - vViewPosition;
vec3 geometryNormal = normal;
vec3 geometryViewDir = ( isOrthographic ) ? vec3( 0, 0, 1 ) : normalize( vViewPosition );
vec3 geometryClearcoatNormal = vec3( 0.0 );
#ifdef USE_CLEARCOAT
	geometryClearcoatNormal = clearcoatNormal;
#endif
#ifdef USE_IRIDESCENCE
	float dotNVi = saturate( dot( normal, geometryViewDir ) );
	if ( material.iridescenceThickness == 0.0 ) {
		material.iridescence = 0.0;
	} else {
		material.iridescence = saturate( material.iridescence );
	}
	if ( material.iridescence > 0.0 ) {
		material.iridescenceFresnel = evalIridescence( 1.0, material.iridescenceIOR, dotNVi, material.iridescenceThickness, material.specularColor );
		material.iridescenceF0 = Schlick_to_F0( material.iridescenceFresnel, 1.0, dotNVi );
	}
#endif
IncidentLight directLight;
#if ( NUM_POINT_LIGHTS > 0 ) && defined( RE_Direct )
	PointLight pointLight;
	#if defined( USE_SHADOWMAP ) && NUM_POINT_LIGHT_SHADOWS > 0
	PointLightShadow pointLightShadow;
	#endif
	#pragma unroll_loop_start
	for ( int i = 0; i < NUM_POINT_LIGHTS; i ++ ) {
		pointLight = pointLights[ i ];
		getPointLightInfo( pointLight, geometryPosition, directLight );
		#if defined( USE_SHADOWMAP ) && ( UNROLLED_LOOP_INDEX < NUM_POINT_LIGHT_SHADOWS )
		pointLightShadow = pointLightShadows[ i ];
		directLight.color *= ( directLight.visible && receiveShadow ) ? getPointShadow( pointShadowMap[ i ], pointLightShadow.shadowMapSize, pointLightShadow.shadowIntensity, pointLightShadow.shadowBias, pointLightShadow.shadowRadius, vPointShadowCoord[ i ], pointLightShadow.shadowCameraNear, pointLightShadow.shadowCameraFar ) : 1.0;
		#endif
		RE_Direct( directLight, geometryPosition, geometryNormal, geometryViewDir, geometryClearcoatNormal, material, reflectedLight );
	}
	#pragma unroll_loop_end
#endif
#if ( NUM_SPOT_LIGHTS > 0 ) && defined( RE_Direct )
	SpotLight spotLight;
	vec4 spotColor;
	vec3 spotLightCoord;
	bool inSpotLightMap;
	#if defined( USE_SHADOWMAP ) && NUM_SPOT_LIGHT_SHADOWS > 0
	SpotLightShadow spotLightShadow;
	#endif
	#pragma unroll_loop_start
	for ( int i = 0; i < NUM_SPOT_LIGHTS; i ++ ) {
		spotLight = spotLights[ i ];
		getSpotLightInfo( spotLight, geometryPosition, directLight );
		#if ( UNROLLED_LOOP_INDEX < NUM_SPOT_LIGHT_SHADOWS_WITH_MAPS )
		#define SPOT_LIGHT_MAP_INDEX UNROLLED_LOOP_INDEX
		#elif ( UNROLLED_LOOP_INDEX < NUM_SPOT_LIGHT_SHADOWS )
		#define SPOT_LIGHT_MAP_INDEX NUM_SPOT_LIGHT_MAPS
		#else
		#define SPOT_LIGHT_MAP_INDEX ( UNROLLED_LOOP_INDEX - NUM_SPOT_LIGHT_SHADOWS + NUM_SPOT_LIGHT_SHADOWS_WITH_MAPS )
		#endif
		#if ( SPOT_LIGHT_MAP_INDEX < NUM_SPOT_LIGHT_MAPS )
			spotLightCoord = vSpotLightCoord[ i ].xyz / vSpotLightCoord[ i ].w;
			inSpotLightMap = all( lessThan( abs( spotLightCoord * 2. - 1. ), vec3( 1.0 ) ) );
			spotColor = texture2D( spotLightMap[ SPOT_LIGHT_MAP_INDEX ], spotLightCoord.xy );
			directLight.color = inSpotLightMap ? directLight.color * spotColor.rgb : directLight.color;
		#endif
		#undef SPOT_LIGHT_MAP_INDEX
		#if defined( USE_SHADOWMAP ) && ( UNROLLED_LOOP_INDEX < NUM_SPOT_LIGHT_SHADOWS )
		spotLightShadow = spotLightShadows[ i ];
		directLight.color *= ( directLight.visible && receiveShadow ) ? getShadow( spotShadowMap[ i ], spotLightShadow.shadowMapSize, spotLightShadow.shadowIntensity, spotLightShadow.shadowBias, spotLightShadow.shadowRadius, vSpotLightCoord[ i ] ) : 1.0;
		#endif
		RE_Direct( directLight, geometryPosition, geometryNormal, geometryViewDir, geometryClearcoatNormal, material, reflectedLight );
	}
	#pragma unroll_loop_end
#endif
#if ( NUM_DIR_LIGHTS > 0 ) && defined( RE_Direct )
	DirectionalLight directionalLight;
	#if defined( USE_SHADOWMAP ) && NUM_DIR_LIGHT_SHADOWS > 0
	DirectionalLightShadow directionalLightShadow;
	#endif
	#pragma unroll_loop_start
	for ( int i = 0; i < NUM_DIR_LIGHTS; i ++ ) {
		directionalLight = directionalLights[ i ];
		getDirectionalLightInfo( directionalLight, directLight );
		#if defined( USE_SHADOWMAP ) && ( UNROLLED_LOOP_INDEX < NUM_DIR_LIGHT_SHADOWS )
		directionalLightShadow = directionalLightShadows[ i ];
		directLight.color *= ( directLight.visible && receiveShadow ) ? getShadow( directionalShadowMap[ i ], directionalLightShadow.shadowMapSize, directionalLightShadow.shadowIntensity, directionalLightShadow.shadowBias, directionalLightShadow.shadowRadius, vDirectionalShadowCoord[ i ] ) : 1.0;
		#endif
		RE_Direct( directLight, geometryPosition, geometryNormal, geometryViewDir, geometryClearcoatNormal, material, reflectedLight );
	}
	#pragma unroll_loop_end
#endif
#if ( NUM_RECT_AREA_LIGHTS > 0 ) && defined( RE_Direct_RectArea )
	RectAreaLight rectAreaLight;
	#pragma unroll_loop_start
	for ( int i = 0; i < NUM_RECT_AREA_LIGHTS; i ++ ) {
		rectAreaLight = rectAreaLights[ i ];
		RE_Direct_RectArea( rectAreaLight, geometryPosition, geometryNormal, geometryViewDir, geometryClearcoatNormal, material, reflectedLight );
	}
	#pragma unroll_loop_end
#endif
#if defined( RE_IndirectDiffuse )
	vec3 iblIrradiance = vec3( 0.0 );
	vec3 irradiance = getAmbientLightIrradiance( ambientLightColor );
	#if defined( USE_LIGHT_PROBES )
		irradiance += getLightProbeIrradiance( lightProbe, geometryNormal );
	#endif
	#if ( NUM_HEMI_LIGHTS > 0 )
		#pragma unroll_loop_start
		for ( int i = 0; i < NUM_HEMI_LIGHTS; i ++ ) {
			irradiance += getHemisphereLightIrradiance( hemisphereLights[ i ], geometryNormal );
		}
		#pragma unroll_loop_end
	#endif
#endif
#if defined( RE_IndirectSpecular )
	vec3 radiance = vec3( 0.0 );
	vec3 clearcoatRadiance = vec3( 0.0 );
#endif`,gv=`#if defined( RE_IndirectDiffuse )
	#ifdef USE_LIGHTMAP
		vec4 lightMapTexel = texture2D( lightMap, vLightMapUv );
		vec3 lightMapIrradiance = lightMapTexel.rgb * lightMapIntensity;
		irradiance += lightMapIrradiance;
	#endif
	#if defined( USE_ENVMAP ) && defined( STANDARD ) && defined( ENVMAP_TYPE_CUBE_UV )
		iblIrradiance += getIBLIrradiance( geometryNormal );
	#endif
#endif
#if defined( USE_ENVMAP ) && defined( RE_IndirectSpecular )
	#ifdef USE_ANISOTROPY
		radiance += getIBLAnisotropyRadiance( geometryViewDir, geometryNormal, material.roughness, material.anisotropyB, material.anisotropy );
	#else
		radiance += getIBLRadiance( geometryViewDir, geometryNormal, material.roughness );
	#endif
	#ifdef USE_CLEARCOAT
		clearcoatRadiance += getIBLRadiance( geometryViewDir, geometryClearcoatNormal, material.clearcoatRoughness );
	#endif
#endif`,vv=`#if defined( RE_IndirectDiffuse )
	RE_IndirectDiffuse( irradiance, geometryPosition, geometryNormal, geometryViewDir, geometryClearcoatNormal, material, reflectedLight );
#endif
#if defined( RE_IndirectSpecular )
	RE_IndirectSpecular( radiance, iblIrradiance, clearcoatRadiance, geometryPosition, geometryNormal, geometryViewDir, geometryClearcoatNormal, material, reflectedLight );
#endif`,xv=`#if defined( USE_LOGDEPTHBUF )
	gl_FragDepth = vIsPerspective == 0.0 ? gl_FragCoord.z : log2( vFragDepth ) * logDepthBufFC * 0.5;
#endif`,Sv=`#if defined( USE_LOGDEPTHBUF )
	uniform float logDepthBufFC;
	varying float vFragDepth;
	varying float vIsPerspective;
#endif`,Mv=`#ifdef USE_LOGDEPTHBUF
	varying float vFragDepth;
	varying float vIsPerspective;
#endif`,yv=`#ifdef USE_LOGDEPTHBUF
	vFragDepth = 1.0 + gl_Position.w;
	vIsPerspective = float( isPerspectiveMatrix( projectionMatrix ) );
#endif`,Ev=`#ifdef USE_MAP
	vec4 sampledDiffuseColor = texture2D( map, vMapUv );
	#ifdef DECODE_VIDEO_TEXTURE
		sampledDiffuseColor = sRGBTransferEOTF( sampledDiffuseColor );
	#endif
	diffuseColor *= sampledDiffuseColor;
#endif`,Tv=`#ifdef USE_MAP
	uniform sampler2D map;
#endif`,bv=`#if defined( USE_MAP ) || defined( USE_ALPHAMAP )
	#if defined( USE_POINTS_UV )
		vec2 uv = vUv;
	#else
		vec2 uv = ( uvTransform * vec3( gl_PointCoord.x, 1.0 - gl_PointCoord.y, 1 ) ).xy;
	#endif
#endif
#ifdef USE_MAP
	diffuseColor *= texture2D( map, uv );
#endif
#ifdef USE_ALPHAMAP
	diffuseColor.a *= texture2D( alphaMap, uv ).g;
#endif`,Av=`#if defined( USE_POINTS_UV )
	varying vec2 vUv;
#else
	#if defined( USE_MAP ) || defined( USE_ALPHAMAP )
		uniform mat3 uvTransform;
	#endif
#endif
#ifdef USE_MAP
	uniform sampler2D map;
#endif
#ifdef USE_ALPHAMAP
	uniform sampler2D alphaMap;
#endif`,wv=`float metalnessFactor = metalness;
#ifdef USE_METALNESSMAP
	vec4 texelMetalness = texture2D( metalnessMap, vMetalnessMapUv );
	metalnessFactor *= texelMetalness.b;
#endif`,Rv=`#ifdef USE_METALNESSMAP
	uniform sampler2D metalnessMap;
#endif`,Cv=`#ifdef USE_INSTANCING_MORPH
	float morphTargetInfluences[ MORPHTARGETS_COUNT ];
	float morphTargetBaseInfluence = texelFetch( morphTexture, ivec2( 0, gl_InstanceID ), 0 ).r;
	for ( int i = 0; i < MORPHTARGETS_COUNT; i ++ ) {
		morphTargetInfluences[i] =  texelFetch( morphTexture, ivec2( i + 1, gl_InstanceID ), 0 ).r;
	}
#endif`,Pv=`#if defined( USE_MORPHCOLORS )
	vColor *= morphTargetBaseInfluence;
	for ( int i = 0; i < MORPHTARGETS_COUNT; i ++ ) {
		#if defined( USE_COLOR_ALPHA )
			if ( morphTargetInfluences[ i ] != 0.0 ) vColor += getMorph( gl_VertexID, i, 2 ) * morphTargetInfluences[ i ];
		#elif defined( USE_COLOR )
			if ( morphTargetInfluences[ i ] != 0.0 ) vColor += getMorph( gl_VertexID, i, 2 ).rgb * morphTargetInfluences[ i ];
		#endif
	}
#endif`,Dv=`#ifdef USE_MORPHNORMALS
	objectNormal *= morphTargetBaseInfluence;
	for ( int i = 0; i < MORPHTARGETS_COUNT; i ++ ) {
		if ( morphTargetInfluences[ i ] != 0.0 ) objectNormal += getMorph( gl_VertexID, i, 1 ).xyz * morphTargetInfluences[ i ];
	}
#endif`,Lv=`#ifdef USE_MORPHTARGETS
	#ifndef USE_INSTANCING_MORPH
		uniform float morphTargetBaseInfluence;
		uniform float morphTargetInfluences[ MORPHTARGETS_COUNT ];
	#endif
	uniform sampler2DArray morphTargetsTexture;
	uniform ivec2 morphTargetsTextureSize;
	vec4 getMorph( const in int vertexIndex, const in int morphTargetIndex, const in int offset ) {
		int texelIndex = vertexIndex * MORPHTARGETS_TEXTURE_STRIDE + offset;
		int y = texelIndex / morphTargetsTextureSize.x;
		int x = texelIndex - y * morphTargetsTextureSize.x;
		ivec3 morphUV = ivec3( x, y, morphTargetIndex );
		return texelFetch( morphTargetsTexture, morphUV, 0 );
	}
#endif`,Iv=`#ifdef USE_MORPHTARGETS
	transformed *= morphTargetBaseInfluence;
	for ( int i = 0; i < MORPHTARGETS_COUNT; i ++ ) {
		if ( morphTargetInfluences[ i ] != 0.0 ) transformed += getMorph( gl_VertexID, i, 0 ).xyz * morphTargetInfluences[ i ];
	}
#endif`,Uv=`float faceDirection = gl_FrontFacing ? 1.0 : - 1.0;
#ifdef FLAT_SHADED
	vec3 fdx = dFdx( vViewPosition );
	vec3 fdy = dFdy( vViewPosition );
	vec3 normal = normalize( cross( fdx, fdy ) );
#else
	vec3 normal = normalize( vNormal );
	#ifdef DOUBLE_SIDED
		normal *= faceDirection;
	#endif
#endif
#if defined( USE_NORMALMAP_TANGENTSPACE ) || defined( USE_CLEARCOAT_NORMALMAP ) || defined( USE_ANISOTROPY )
	#ifdef USE_TANGENT
		mat3 tbn = mat3( normalize( vTangent ), normalize( vBitangent ), normal );
	#else
		mat3 tbn = getTangentFrame( - vViewPosition, normal,
		#if defined( USE_NORMALMAP )
			vNormalMapUv
		#elif defined( USE_CLEARCOAT_NORMALMAP )
			vClearcoatNormalMapUv
		#else
			vUv
		#endif
		);
	#endif
	#if defined( DOUBLE_SIDED ) && ! defined( FLAT_SHADED )
		tbn[0] *= faceDirection;
		tbn[1] *= faceDirection;
	#endif
#endif
#ifdef USE_CLEARCOAT_NORMALMAP
	#ifdef USE_TANGENT
		mat3 tbn2 = mat3( normalize( vTangent ), normalize( vBitangent ), normal );
	#else
		mat3 tbn2 = getTangentFrame( - vViewPosition, normal, vClearcoatNormalMapUv );
	#endif
	#if defined( DOUBLE_SIDED ) && ! defined( FLAT_SHADED )
		tbn2[0] *= faceDirection;
		tbn2[1] *= faceDirection;
	#endif
#endif
vec3 nonPerturbedNormal = normal;`,Nv=`#ifdef USE_NORMALMAP_OBJECTSPACE
	normal = texture2D( normalMap, vNormalMapUv ).xyz * 2.0 - 1.0;
	#ifdef FLIP_SIDED
		normal = - normal;
	#endif
	#ifdef DOUBLE_SIDED
		normal = normal * faceDirection;
	#endif
	normal = normalize( normalMatrix * normal );
#elif defined( USE_NORMALMAP_TANGENTSPACE )
	vec3 mapN = texture2D( normalMap, vNormalMapUv ).xyz * 2.0 - 1.0;
	mapN.xy *= normalScale;
	normal = normalize( tbn * mapN );
#elif defined( USE_BUMPMAP )
	normal = perturbNormalArb( - vViewPosition, normal, dHdxy_fwd(), faceDirection );
#endif`,Fv=`#ifndef FLAT_SHADED
	varying vec3 vNormal;
	#ifdef USE_TANGENT
		varying vec3 vTangent;
		varying vec3 vBitangent;
	#endif
#endif`,Ov=`#ifndef FLAT_SHADED
	varying vec3 vNormal;
	#ifdef USE_TANGENT
		varying vec3 vTangent;
		varying vec3 vBitangent;
	#endif
#endif`,Bv=`#ifndef FLAT_SHADED
	vNormal = normalize( transformedNormal );
	#ifdef USE_TANGENT
		vTangent = normalize( transformedTangent );
		vBitangent = normalize( cross( vNormal, vTangent ) * tangent.w );
	#endif
#endif`,zv=`#ifdef USE_NORMALMAP
	uniform sampler2D normalMap;
	uniform vec2 normalScale;
#endif
#ifdef USE_NORMALMAP_OBJECTSPACE
	uniform mat3 normalMatrix;
#endif
#if ! defined ( USE_TANGENT ) && ( defined ( USE_NORMALMAP_TANGENTSPACE ) || defined ( USE_CLEARCOAT_NORMALMAP ) || defined( USE_ANISOTROPY ) )
	mat3 getTangentFrame( vec3 eye_pos, vec3 surf_norm, vec2 uv ) {
		vec3 q0 = dFdx( eye_pos.xyz );
		vec3 q1 = dFdy( eye_pos.xyz );
		vec2 st0 = dFdx( uv.st );
		vec2 st1 = dFdy( uv.st );
		vec3 N = surf_norm;
		vec3 q1perp = cross( q1, N );
		vec3 q0perp = cross( N, q0 );
		vec3 T = q1perp * st0.x + q0perp * st1.x;
		vec3 B = q1perp * st0.y + q0perp * st1.y;
		float det = max( dot( T, T ), dot( B, B ) );
		float scale = ( det == 0.0 ) ? 0.0 : inversesqrt( det );
		return mat3( T * scale, B * scale, N );
	}
#endif`,kv=`#ifdef USE_CLEARCOAT
	vec3 clearcoatNormal = nonPerturbedNormal;
#endif`,Hv=`#ifdef USE_CLEARCOAT_NORMALMAP
	vec3 clearcoatMapN = texture2D( clearcoatNormalMap, vClearcoatNormalMapUv ).xyz * 2.0 - 1.0;
	clearcoatMapN.xy *= clearcoatNormalScale;
	clearcoatNormal = normalize( tbn2 * clearcoatMapN );
#endif`,Vv=`#ifdef USE_CLEARCOATMAP
	uniform sampler2D clearcoatMap;
#endif
#ifdef USE_CLEARCOAT_NORMALMAP
	uniform sampler2D clearcoatNormalMap;
	uniform vec2 clearcoatNormalScale;
#endif
#ifdef USE_CLEARCOAT_ROUGHNESSMAP
	uniform sampler2D clearcoatRoughnessMap;
#endif`,Gv=`#ifdef USE_IRIDESCENCEMAP
	uniform sampler2D iridescenceMap;
#endif
#ifdef USE_IRIDESCENCE_THICKNESSMAP
	uniform sampler2D iridescenceThicknessMap;
#endif`,Wv=`#ifdef OPAQUE
diffuseColor.a = 1.0;
#endif
#ifdef USE_TRANSMISSION
diffuseColor.a *= material.transmissionAlpha;
#endif
gl_FragColor = vec4( outgoingLight, diffuseColor.a );`,Xv=`vec3 packNormalToRGB( const in vec3 normal ) {
	return normalize( normal ) * 0.5 + 0.5;
}
vec3 unpackRGBToNormal( const in vec3 rgb ) {
	return 2.0 * rgb.xyz - 1.0;
}
const float PackUpscale = 256. / 255.;const float UnpackDownscale = 255. / 256.;const float ShiftRight8 = 1. / 256.;
const float Inv255 = 1. / 255.;
const vec4 PackFactors = vec4( 1.0, 256.0, 256.0 * 256.0, 256.0 * 256.0 * 256.0 );
const vec2 UnpackFactors2 = vec2( UnpackDownscale, 1.0 / PackFactors.g );
const vec3 UnpackFactors3 = vec3( UnpackDownscale / PackFactors.rg, 1.0 / PackFactors.b );
const vec4 UnpackFactors4 = vec4( UnpackDownscale / PackFactors.rgb, 1.0 / PackFactors.a );
vec4 packDepthToRGBA( const in float v ) {
	if( v <= 0.0 )
		return vec4( 0., 0., 0., 0. );
	if( v >= 1.0 )
		return vec4( 1., 1., 1., 1. );
	float vuf;
	float af = modf( v * PackFactors.a, vuf );
	float bf = modf( vuf * ShiftRight8, vuf );
	float gf = modf( vuf * ShiftRight8, vuf );
	return vec4( vuf * Inv255, gf * PackUpscale, bf * PackUpscale, af );
}
vec3 packDepthToRGB( const in float v ) {
	if( v <= 0.0 )
		return vec3( 0., 0., 0. );
	if( v >= 1.0 )
		return vec3( 1., 1., 1. );
	float vuf;
	float bf = modf( v * PackFactors.b, vuf );
	float gf = modf( vuf * ShiftRight8, vuf );
	return vec3( vuf * Inv255, gf * PackUpscale, bf );
}
vec2 packDepthToRG( const in float v ) {
	if( v <= 0.0 )
		return vec2( 0., 0. );
	if( v >= 1.0 )
		return vec2( 1., 1. );
	float vuf;
	float gf = modf( v * 256., vuf );
	return vec2( vuf * Inv255, gf );
}
float unpackRGBAToDepth( const in vec4 v ) {
	return dot( v, UnpackFactors4 );
}
float unpackRGBToDepth( const in vec3 v ) {
	return dot( v, UnpackFactors3 );
}
float unpackRGToDepth( const in vec2 v ) {
	return v.r * UnpackFactors2.r + v.g * UnpackFactors2.g;
}
vec4 pack2HalfToRGBA( const in vec2 v ) {
	vec4 r = vec4( v.x, fract( v.x * 255.0 ), v.y, fract( v.y * 255.0 ) );
	return vec4( r.x - r.y / 255.0, r.y, r.z - r.w / 255.0, r.w );
}
vec2 unpackRGBATo2Half( const in vec4 v ) {
	return vec2( v.x + ( v.y / 255.0 ), v.z + ( v.w / 255.0 ) );
}
float viewZToOrthographicDepth( const in float viewZ, const in float near, const in float far ) {
	return ( viewZ + near ) / ( near - far );
}
float orthographicDepthToViewZ( const in float depth, const in float near, const in float far ) {
	return depth * ( near - far ) - near;
}
float viewZToPerspectiveDepth( const in float viewZ, const in float near, const in float far ) {
	return ( ( near + viewZ ) * far ) / ( ( far - near ) * viewZ );
}
float perspectiveDepthToViewZ( const in float depth, const in float near, const in float far ) {
	return ( near * far ) / ( ( far - near ) * depth - far );
}`,Yv=`#ifdef PREMULTIPLIED_ALPHA
	gl_FragColor.rgb *= gl_FragColor.a;
#endif`,qv=`vec4 mvPosition = vec4( transformed, 1.0 );
#ifdef USE_BATCHING
	mvPosition = batchingMatrix * mvPosition;
#endif
#ifdef USE_INSTANCING
	mvPosition = instanceMatrix * mvPosition;
#endif
mvPosition = modelViewMatrix * mvPosition;
gl_Position = projectionMatrix * mvPosition;`,$v=`#ifdef DITHERING
	gl_FragColor.rgb = dithering( gl_FragColor.rgb );
#endif`,Kv=`#ifdef DITHERING
	vec3 dithering( vec3 color ) {
		float grid_position = rand( gl_FragCoord.xy );
		vec3 dither_shift_RGB = vec3( 0.25 / 255.0, -0.25 / 255.0, 0.25 / 255.0 );
		dither_shift_RGB = mix( 2.0 * dither_shift_RGB, -2.0 * dither_shift_RGB, grid_position );
		return color + dither_shift_RGB;
	}
#endif`,Zv=`float roughnessFactor = roughness;
#ifdef USE_ROUGHNESSMAP
	vec4 texelRoughness = texture2D( roughnessMap, vRoughnessMapUv );
	roughnessFactor *= texelRoughness.g;
#endif`,jv=`#ifdef USE_ROUGHNESSMAP
	uniform sampler2D roughnessMap;
#endif`,Jv=`#if NUM_SPOT_LIGHT_COORDS > 0
	varying vec4 vSpotLightCoord[ NUM_SPOT_LIGHT_COORDS ];
#endif
#if NUM_SPOT_LIGHT_MAPS > 0
	uniform sampler2D spotLightMap[ NUM_SPOT_LIGHT_MAPS ];
#endif
#ifdef USE_SHADOWMAP
	#if NUM_DIR_LIGHT_SHADOWS > 0
		uniform sampler2D directionalShadowMap[ NUM_DIR_LIGHT_SHADOWS ];
		varying vec4 vDirectionalShadowCoord[ NUM_DIR_LIGHT_SHADOWS ];
		struct DirectionalLightShadow {
			float shadowIntensity;
			float shadowBias;
			float shadowNormalBias;
			float shadowRadius;
			vec2 shadowMapSize;
		};
		uniform DirectionalLightShadow directionalLightShadows[ NUM_DIR_LIGHT_SHADOWS ];
	#endif
	#if NUM_SPOT_LIGHT_SHADOWS > 0
		uniform sampler2D spotShadowMap[ NUM_SPOT_LIGHT_SHADOWS ];
		struct SpotLightShadow {
			float shadowIntensity;
			float shadowBias;
			float shadowNormalBias;
			float shadowRadius;
			vec2 shadowMapSize;
		};
		uniform SpotLightShadow spotLightShadows[ NUM_SPOT_LIGHT_SHADOWS ];
	#endif
	#if NUM_POINT_LIGHT_SHADOWS > 0
		uniform sampler2D pointShadowMap[ NUM_POINT_LIGHT_SHADOWS ];
		varying vec4 vPointShadowCoord[ NUM_POINT_LIGHT_SHADOWS ];
		struct PointLightShadow {
			float shadowIntensity;
			float shadowBias;
			float shadowNormalBias;
			float shadowRadius;
			vec2 shadowMapSize;
			float shadowCameraNear;
			float shadowCameraFar;
		};
		uniform PointLightShadow pointLightShadows[ NUM_POINT_LIGHT_SHADOWS ];
	#endif
	float texture2DCompare( sampler2D depths, vec2 uv, float compare ) {
		return step( compare, unpackRGBAToDepth( texture2D( depths, uv ) ) );
	}
	vec2 texture2DDistribution( sampler2D shadow, vec2 uv ) {
		return unpackRGBATo2Half( texture2D( shadow, uv ) );
	}
	float VSMShadow (sampler2D shadow, vec2 uv, float compare ){
		float occlusion = 1.0;
		vec2 distribution = texture2DDistribution( shadow, uv );
		float hard_shadow = step( compare , distribution.x );
		if (hard_shadow != 1.0 ) {
			float distance = compare - distribution.x ;
			float variance = max( 0.00000, distribution.y * distribution.y );
			float softness_probability = variance / (variance + distance * distance );			softness_probability = clamp( ( softness_probability - 0.3 ) / ( 0.95 - 0.3 ), 0.0, 1.0 );			occlusion = clamp( max( hard_shadow, softness_probability ), 0.0, 1.0 );
		}
		return occlusion;
	}
	float getShadow( sampler2D shadowMap, vec2 shadowMapSize, float shadowIntensity, float shadowBias, float shadowRadius, vec4 shadowCoord ) {
		float shadow = 1.0;
		shadowCoord.xyz /= shadowCoord.w;
		shadowCoord.z += shadowBias;
		bool inFrustum = shadowCoord.x >= 0.0 && shadowCoord.x <= 1.0 && shadowCoord.y >= 0.0 && shadowCoord.y <= 1.0;
		bool frustumTest = inFrustum && shadowCoord.z <= 1.0;
		if ( frustumTest ) {
		#if defined( SHADOWMAP_TYPE_PCF )
			vec2 texelSize = vec2( 1.0 ) / shadowMapSize;
			float dx0 = - texelSize.x * shadowRadius;
			float dy0 = - texelSize.y * shadowRadius;
			float dx1 = + texelSize.x * shadowRadius;
			float dy1 = + texelSize.y * shadowRadius;
			float dx2 = dx0 / 2.0;
			float dy2 = dy0 / 2.0;
			float dx3 = dx1 / 2.0;
			float dy3 = dy1 / 2.0;
			shadow = (
				texture2DCompare( shadowMap, shadowCoord.xy + vec2( dx0, dy0 ), shadowCoord.z ) +
				texture2DCompare( shadowMap, shadowCoord.xy + vec2( 0.0, dy0 ), shadowCoord.z ) +
				texture2DCompare( shadowMap, shadowCoord.xy + vec2( dx1, dy0 ), shadowCoord.z ) +
				texture2DCompare( shadowMap, shadowCoord.xy + vec2( dx2, dy2 ), shadowCoord.z ) +
				texture2DCompare( shadowMap, shadowCoord.xy + vec2( 0.0, dy2 ), shadowCoord.z ) +
				texture2DCompare( shadowMap, shadowCoord.xy + vec2( dx3, dy2 ), shadowCoord.z ) +
				texture2DCompare( shadowMap, shadowCoord.xy + vec2( dx0, 0.0 ), shadowCoord.z ) +
				texture2DCompare( shadowMap, shadowCoord.xy + vec2( dx2, 0.0 ), shadowCoord.z ) +
				texture2DCompare( shadowMap, shadowCoord.xy, shadowCoord.z ) +
				texture2DCompare( shadowMap, shadowCoord.xy + vec2( dx3, 0.0 ), shadowCoord.z ) +
				texture2DCompare( shadowMap, shadowCoord.xy + vec2( dx1, 0.0 ), shadowCoord.z ) +
				texture2DCompare( shadowMap, shadowCoord.xy + vec2( dx2, dy3 ), shadowCoord.z ) +
				texture2DCompare( shadowMap, shadowCoord.xy + vec2( 0.0, dy3 ), shadowCoord.z ) +
				texture2DCompare( shadowMap, shadowCoord.xy + vec2( dx3, dy3 ), shadowCoord.z ) +
				texture2DCompare( shadowMap, shadowCoord.xy + vec2( dx0, dy1 ), shadowCoord.z ) +
				texture2DCompare( shadowMap, shadowCoord.xy + vec2( 0.0, dy1 ), shadowCoord.z ) +
				texture2DCompare( shadowMap, shadowCoord.xy + vec2( dx1, dy1 ), shadowCoord.z )
			) * ( 1.0 / 17.0 );
		#elif defined( SHADOWMAP_TYPE_PCF_SOFT )
			vec2 texelSize = vec2( 1.0 ) / shadowMapSize;
			float dx = texelSize.x;
			float dy = texelSize.y;
			vec2 uv = shadowCoord.xy;
			vec2 f = fract( uv * shadowMapSize + 0.5 );
			uv -= f * texelSize;
			shadow = (
				texture2DCompare( shadowMap, uv, shadowCoord.z ) +
				texture2DCompare( shadowMap, uv + vec2( dx, 0.0 ), shadowCoord.z ) +
				texture2DCompare( shadowMap, uv + vec2( 0.0, dy ), shadowCoord.z ) +
				texture2DCompare( shadowMap, uv + texelSize, shadowCoord.z ) +
				mix( texture2DCompare( shadowMap, uv + vec2( -dx, 0.0 ), shadowCoord.z ),
					 texture2DCompare( shadowMap, uv + vec2( 2.0 * dx, 0.0 ), shadowCoord.z ),
					 f.x ) +
				mix( texture2DCompare( shadowMap, uv + vec2( -dx, dy ), shadowCoord.z ),
					 texture2DCompare( shadowMap, uv + vec2( 2.0 * dx, dy ), shadowCoord.z ),
					 f.x ) +
				mix( texture2DCompare( shadowMap, uv + vec2( 0.0, -dy ), shadowCoord.z ),
					 texture2DCompare( shadowMap, uv + vec2( 0.0, 2.0 * dy ), shadowCoord.z ),
					 f.y ) +
				mix( texture2DCompare( shadowMap, uv + vec2( dx, -dy ), shadowCoord.z ),
					 texture2DCompare( shadowMap, uv + vec2( dx, 2.0 * dy ), shadowCoord.z ),
					 f.y ) +
				mix( mix( texture2DCompare( shadowMap, uv + vec2( -dx, -dy ), shadowCoord.z ),
						  texture2DCompare( shadowMap, uv + vec2( 2.0 * dx, -dy ), shadowCoord.z ),
						  f.x ),
					 mix( texture2DCompare( shadowMap, uv + vec2( -dx, 2.0 * dy ), shadowCoord.z ),
						  texture2DCompare( shadowMap, uv + vec2( 2.0 * dx, 2.0 * dy ), shadowCoord.z ),
						  f.x ),
					 f.y )
			) * ( 1.0 / 9.0 );
		#elif defined( SHADOWMAP_TYPE_VSM )
			shadow = VSMShadow( shadowMap, shadowCoord.xy, shadowCoord.z );
		#else
			shadow = texture2DCompare( shadowMap, shadowCoord.xy, shadowCoord.z );
		#endif
		}
		return mix( 1.0, shadow, shadowIntensity );
	}
	vec2 cubeToUV( vec3 v, float texelSizeY ) {
		vec3 absV = abs( v );
		float scaleToCube = 1.0 / max( absV.x, max( absV.y, absV.z ) );
		absV *= scaleToCube;
		v *= scaleToCube * ( 1.0 - 2.0 * texelSizeY );
		vec2 planar = v.xy;
		float almostATexel = 1.5 * texelSizeY;
		float almostOne = 1.0 - almostATexel;
		if ( absV.z >= almostOne ) {
			if ( v.z > 0.0 )
				planar.x = 4.0 - v.x;
		} else if ( absV.x >= almostOne ) {
			float signX = sign( v.x );
			planar.x = v.z * signX + 2.0 * signX;
		} else if ( absV.y >= almostOne ) {
			float signY = sign( v.y );
			planar.x = v.x + 2.0 * signY + 2.0;
			planar.y = v.z * signY - 2.0;
		}
		return vec2( 0.125, 0.25 ) * planar + vec2( 0.375, 0.75 );
	}
	float getPointShadow( sampler2D shadowMap, vec2 shadowMapSize, float shadowIntensity, float shadowBias, float shadowRadius, vec4 shadowCoord, float shadowCameraNear, float shadowCameraFar ) {
		float shadow = 1.0;
		vec3 lightToPosition = shadowCoord.xyz;
		
		float lightToPositionLength = length( lightToPosition );
		if ( lightToPositionLength - shadowCameraFar <= 0.0 && lightToPositionLength - shadowCameraNear >= 0.0 ) {
			float dp = ( lightToPositionLength - shadowCameraNear ) / ( shadowCameraFar - shadowCameraNear );			dp += shadowBias;
			vec3 bd3D = normalize( lightToPosition );
			vec2 texelSize = vec2( 1.0 ) / ( shadowMapSize * vec2( 4.0, 2.0 ) );
			#if defined( SHADOWMAP_TYPE_PCF ) || defined( SHADOWMAP_TYPE_PCF_SOFT ) || defined( SHADOWMAP_TYPE_VSM )
				vec2 offset = vec2( - 1, 1 ) * shadowRadius * texelSize.y;
				shadow = (
					texture2DCompare( shadowMap, cubeToUV( bd3D + offset.xyy, texelSize.y ), dp ) +
					texture2DCompare( shadowMap, cubeToUV( bd3D + offset.yyy, texelSize.y ), dp ) +
					texture2DCompare( shadowMap, cubeToUV( bd3D + offset.xyx, texelSize.y ), dp ) +
					texture2DCompare( shadowMap, cubeToUV( bd3D + offset.yyx, texelSize.y ), dp ) +
					texture2DCompare( shadowMap, cubeToUV( bd3D, texelSize.y ), dp ) +
					texture2DCompare( shadowMap, cubeToUV( bd3D + offset.xxy, texelSize.y ), dp ) +
					texture2DCompare( shadowMap, cubeToUV( bd3D + offset.yxy, texelSize.y ), dp ) +
					texture2DCompare( shadowMap, cubeToUV( bd3D + offset.xxx, texelSize.y ), dp ) +
					texture2DCompare( shadowMap, cubeToUV( bd3D + offset.yxx, texelSize.y ), dp )
				) * ( 1.0 / 9.0 );
			#else
				shadow = texture2DCompare( shadowMap, cubeToUV( bd3D, texelSize.y ), dp );
			#endif
		}
		return mix( 1.0, shadow, shadowIntensity );
	}
#endif`,Qv=`#if NUM_SPOT_LIGHT_COORDS > 0
	uniform mat4 spotLightMatrix[ NUM_SPOT_LIGHT_COORDS ];
	varying vec4 vSpotLightCoord[ NUM_SPOT_LIGHT_COORDS ];
#endif
#ifdef USE_SHADOWMAP
	#if NUM_DIR_LIGHT_SHADOWS > 0
		uniform mat4 directionalShadowMatrix[ NUM_DIR_LIGHT_SHADOWS ];
		varying vec4 vDirectionalShadowCoord[ NUM_DIR_LIGHT_SHADOWS ];
		struct DirectionalLightShadow {
			float shadowIntensity;
			float shadowBias;
			float shadowNormalBias;
			float shadowRadius;
			vec2 shadowMapSize;
		};
		uniform DirectionalLightShadow directionalLightShadows[ NUM_DIR_LIGHT_SHADOWS ];
	#endif
	#if NUM_SPOT_LIGHT_SHADOWS > 0
		struct SpotLightShadow {
			float shadowIntensity;
			float shadowBias;
			float shadowNormalBias;
			float shadowRadius;
			vec2 shadowMapSize;
		};
		uniform SpotLightShadow spotLightShadows[ NUM_SPOT_LIGHT_SHADOWS ];
	#endif
	#if NUM_POINT_LIGHT_SHADOWS > 0
		uniform mat4 pointShadowMatrix[ NUM_POINT_LIGHT_SHADOWS ];
		varying vec4 vPointShadowCoord[ NUM_POINT_LIGHT_SHADOWS ];
		struct PointLightShadow {
			float shadowIntensity;
			float shadowBias;
			float shadowNormalBias;
			float shadowRadius;
			vec2 shadowMapSize;
			float shadowCameraNear;
			float shadowCameraFar;
		};
		uniform PointLightShadow pointLightShadows[ NUM_POINT_LIGHT_SHADOWS ];
	#endif
#endif`,tx=`#if ( defined( USE_SHADOWMAP ) && ( NUM_DIR_LIGHT_SHADOWS > 0 || NUM_POINT_LIGHT_SHADOWS > 0 ) ) || ( NUM_SPOT_LIGHT_COORDS > 0 )
	vec3 shadowWorldNormal = inverseTransformDirection( transformedNormal, viewMatrix );
	vec4 shadowWorldPosition;
#endif
#if defined( USE_SHADOWMAP )
	#if NUM_DIR_LIGHT_SHADOWS > 0
		#pragma unroll_loop_start
		for ( int i = 0; i < NUM_DIR_LIGHT_SHADOWS; i ++ ) {
			shadowWorldPosition = worldPosition + vec4( shadowWorldNormal * directionalLightShadows[ i ].shadowNormalBias, 0 );
			vDirectionalShadowCoord[ i ] = directionalShadowMatrix[ i ] * shadowWorldPosition;
		}
		#pragma unroll_loop_end
	#endif
	#if NUM_POINT_LIGHT_SHADOWS > 0
		#pragma unroll_loop_start
		for ( int i = 0; i < NUM_POINT_LIGHT_SHADOWS; i ++ ) {
			shadowWorldPosition = worldPosition + vec4( shadowWorldNormal * pointLightShadows[ i ].shadowNormalBias, 0 );
			vPointShadowCoord[ i ] = pointShadowMatrix[ i ] * shadowWorldPosition;
		}
		#pragma unroll_loop_end
	#endif
#endif
#if NUM_SPOT_LIGHT_COORDS > 0
	#pragma unroll_loop_start
	for ( int i = 0; i < NUM_SPOT_LIGHT_COORDS; i ++ ) {
		shadowWorldPosition = worldPosition;
		#if ( defined( USE_SHADOWMAP ) && UNROLLED_LOOP_INDEX < NUM_SPOT_LIGHT_SHADOWS )
			shadowWorldPosition.xyz += shadowWorldNormal * spotLightShadows[ i ].shadowNormalBias;
		#endif
		vSpotLightCoord[ i ] = spotLightMatrix[ i ] * shadowWorldPosition;
	}
	#pragma unroll_loop_end
#endif`,ex=`float getShadowMask() {
	float shadow = 1.0;
	#ifdef USE_SHADOWMAP
	#if NUM_DIR_LIGHT_SHADOWS > 0
	DirectionalLightShadow directionalLight;
	#pragma unroll_loop_start
	for ( int i = 0; i < NUM_DIR_LIGHT_SHADOWS; i ++ ) {
		directionalLight = directionalLightShadows[ i ];
		shadow *= receiveShadow ? getShadow( directionalShadowMap[ i ], directionalLight.shadowMapSize, directionalLight.shadowIntensity, directionalLight.shadowBias, directionalLight.shadowRadius, vDirectionalShadowCoord[ i ] ) : 1.0;
	}
	#pragma unroll_loop_end
	#endif
	#if NUM_SPOT_LIGHT_SHADOWS > 0
	SpotLightShadow spotLight;
	#pragma unroll_loop_start
	for ( int i = 0; i < NUM_SPOT_LIGHT_SHADOWS; i ++ ) {
		spotLight = spotLightShadows[ i ];
		shadow *= receiveShadow ? getShadow( spotShadowMap[ i ], spotLight.shadowMapSize, spotLight.shadowIntensity, spotLight.shadowBias, spotLight.shadowRadius, vSpotLightCoord[ i ] ) : 1.0;
	}
	#pragma unroll_loop_end
	#endif
	#if NUM_POINT_LIGHT_SHADOWS > 0
	PointLightShadow pointLight;
	#pragma unroll_loop_start
	for ( int i = 0; i < NUM_POINT_LIGHT_SHADOWS; i ++ ) {
		pointLight = pointLightShadows[ i ];
		shadow *= receiveShadow ? getPointShadow( pointShadowMap[ i ], pointLight.shadowMapSize, pointLight.shadowIntensity, pointLight.shadowBias, pointLight.shadowRadius, vPointShadowCoord[ i ], pointLight.shadowCameraNear, pointLight.shadowCameraFar ) : 1.0;
	}
	#pragma unroll_loop_end
	#endif
	#endif
	return shadow;
}`,nx=`#ifdef USE_SKINNING
	mat4 boneMatX = getBoneMatrix( skinIndex.x );
	mat4 boneMatY = getBoneMatrix( skinIndex.y );
	mat4 boneMatZ = getBoneMatrix( skinIndex.z );
	mat4 boneMatW = getBoneMatrix( skinIndex.w );
#endif`,ix=`#ifdef USE_SKINNING
	uniform mat4 bindMatrix;
	uniform mat4 bindMatrixInverse;
	uniform highp sampler2D boneTexture;
	mat4 getBoneMatrix( const in float i ) {
		int size = textureSize( boneTexture, 0 ).x;
		int j = int( i ) * 4;
		int x = j % size;
		int y = j / size;
		vec4 v1 = texelFetch( boneTexture, ivec2( x, y ), 0 );
		vec4 v2 = texelFetch( boneTexture, ivec2( x + 1, y ), 0 );
		vec4 v3 = texelFetch( boneTexture, ivec2( x + 2, y ), 0 );
		vec4 v4 = texelFetch( boneTexture, ivec2( x + 3, y ), 0 );
		return mat4( v1, v2, v3, v4 );
	}
#endif`,rx=`#ifdef USE_SKINNING
	vec4 skinVertex = bindMatrix * vec4( transformed, 1.0 );
	vec4 skinned = vec4( 0.0 );
	skinned += boneMatX * skinVertex * skinWeight.x;
	skinned += boneMatY * skinVertex * skinWeight.y;
	skinned += boneMatZ * skinVertex * skinWeight.z;
	skinned += boneMatW * skinVertex * skinWeight.w;
	transformed = ( bindMatrixInverse * skinned ).xyz;
#endif`,sx=`#ifdef USE_SKINNING
	mat4 skinMatrix = mat4( 0.0 );
	skinMatrix += skinWeight.x * boneMatX;
	skinMatrix += skinWeight.y * boneMatY;
	skinMatrix += skinWeight.z * boneMatZ;
	skinMatrix += skinWeight.w * boneMatW;
	skinMatrix = bindMatrixInverse * skinMatrix * bindMatrix;
	objectNormal = vec4( skinMatrix * vec4( objectNormal, 0.0 ) ).xyz;
	#ifdef USE_TANGENT
		objectTangent = vec4( skinMatrix * vec4( objectTangent, 0.0 ) ).xyz;
	#endif
#endif`,ox=`float specularStrength;
#ifdef USE_SPECULARMAP
	vec4 texelSpecular = texture2D( specularMap, vSpecularMapUv );
	specularStrength = texelSpecular.r;
#else
	specularStrength = 1.0;
#endif`,ax=`#ifdef USE_SPECULARMAP
	uniform sampler2D specularMap;
#endif`,lx=`#if defined( TONE_MAPPING )
	gl_FragColor.rgb = toneMapping( gl_FragColor.rgb );
#endif`,cx=`#ifndef saturate
#define saturate( a ) clamp( a, 0.0, 1.0 )
#endif
uniform float toneMappingExposure;
vec3 LinearToneMapping( vec3 color ) {
	return saturate( toneMappingExposure * color );
}
vec3 ReinhardToneMapping( vec3 color ) {
	color *= toneMappingExposure;
	return saturate( color / ( vec3( 1.0 ) + color ) );
}
vec3 CineonToneMapping( vec3 color ) {
	color *= toneMappingExposure;
	color = max( vec3( 0.0 ), color - 0.004 );
	return pow( ( color * ( 6.2 * color + 0.5 ) ) / ( color * ( 6.2 * color + 1.7 ) + 0.06 ), vec3( 2.2 ) );
}
vec3 RRTAndODTFit( vec3 v ) {
	vec3 a = v * ( v + 0.0245786 ) - 0.000090537;
	vec3 b = v * ( 0.983729 * v + 0.4329510 ) + 0.238081;
	return a / b;
}
vec3 ACESFilmicToneMapping( vec3 color ) {
	const mat3 ACESInputMat = mat3(
		vec3( 0.59719, 0.07600, 0.02840 ),		vec3( 0.35458, 0.90834, 0.13383 ),
		vec3( 0.04823, 0.01566, 0.83777 )
	);
	const mat3 ACESOutputMat = mat3(
		vec3(  1.60475, -0.10208, -0.00327 ),		vec3( -0.53108,  1.10813, -0.07276 ),
		vec3( -0.07367, -0.00605,  1.07602 )
	);
	color *= toneMappingExposure / 0.6;
	color = ACESInputMat * color;
	color = RRTAndODTFit( color );
	color = ACESOutputMat * color;
	return saturate( color );
}
const mat3 LINEAR_REC2020_TO_LINEAR_SRGB = mat3(
	vec3( 1.6605, - 0.1246, - 0.0182 ),
	vec3( - 0.5876, 1.1329, - 0.1006 ),
	vec3( - 0.0728, - 0.0083, 1.1187 )
);
const mat3 LINEAR_SRGB_TO_LINEAR_REC2020 = mat3(
	vec3( 0.6274, 0.0691, 0.0164 ),
	vec3( 0.3293, 0.9195, 0.0880 ),
	vec3( 0.0433, 0.0113, 0.8956 )
);
vec3 agxDefaultContrastApprox( vec3 x ) {
	vec3 x2 = x * x;
	vec3 x4 = x2 * x2;
	return + 15.5 * x4 * x2
		- 40.14 * x4 * x
		+ 31.96 * x4
		- 6.868 * x2 * x
		+ 0.4298 * x2
		+ 0.1191 * x
		- 0.00232;
}
vec3 AgXToneMapping( vec3 color ) {
	const mat3 AgXInsetMatrix = mat3(
		vec3( 0.856627153315983, 0.137318972929847, 0.11189821299995 ),
		vec3( 0.0951212405381588, 0.761241990602591, 0.0767994186031903 ),
		vec3( 0.0482516061458583, 0.101439036467562, 0.811302368396859 )
	);
	const mat3 AgXOutsetMatrix = mat3(
		vec3( 1.1271005818144368, - 0.1413297634984383, - 0.14132976349843826 ),
		vec3( - 0.11060664309660323, 1.157823702216272, - 0.11060664309660294 ),
		vec3( - 0.016493938717834573, - 0.016493938717834257, 1.2519364065950405 )
	);
	const float AgxMinEv = - 12.47393;	const float AgxMaxEv = 4.026069;
	color *= toneMappingExposure;
	color = LINEAR_SRGB_TO_LINEAR_REC2020 * color;
	color = AgXInsetMatrix * color;
	color = max( color, 1e-10 );	color = log2( color );
	color = ( color - AgxMinEv ) / ( AgxMaxEv - AgxMinEv );
	color = clamp( color, 0.0, 1.0 );
	color = agxDefaultContrastApprox( color );
	color = AgXOutsetMatrix * color;
	color = pow( max( vec3( 0.0 ), color ), vec3( 2.2 ) );
	color = LINEAR_REC2020_TO_LINEAR_SRGB * color;
	color = clamp( color, 0.0, 1.0 );
	return color;
}
vec3 NeutralToneMapping( vec3 color ) {
	const float StartCompression = 0.8 - 0.04;
	const float Desaturation = 0.15;
	color *= toneMappingExposure;
	float x = min( color.r, min( color.g, color.b ) );
	float offset = x < 0.08 ? x - 6.25 * x * x : 0.04;
	color -= offset;
	float peak = max( color.r, max( color.g, color.b ) );
	if ( peak < StartCompression ) return color;
	float d = 1. - StartCompression;
	float newPeak = 1. - d * d / ( peak + d - StartCompression );
	color *= newPeak / peak;
	float g = 1. - 1. / ( Desaturation * ( peak - newPeak ) + 1. );
	return mix( color, vec3( newPeak ), g );
}
vec3 CustomToneMapping( vec3 color ) { return color; }`,ux=`#ifdef USE_TRANSMISSION
	material.transmission = transmission;
	material.transmissionAlpha = 1.0;
	material.thickness = thickness;
	material.attenuationDistance = attenuationDistance;
	material.attenuationColor = attenuationColor;
	#ifdef USE_TRANSMISSIONMAP
		material.transmission *= texture2D( transmissionMap, vTransmissionMapUv ).r;
	#endif
	#ifdef USE_THICKNESSMAP
		material.thickness *= texture2D( thicknessMap, vThicknessMapUv ).g;
	#endif
	vec3 pos = vWorldPosition;
	vec3 v = normalize( cameraPosition - pos );
	vec3 n = inverseTransformDirection( normal, viewMatrix );
	vec4 transmitted = getIBLVolumeRefraction(
		n, v, material.roughness, material.diffuseColor, material.specularColor, material.specularF90,
		pos, modelMatrix, viewMatrix, projectionMatrix, material.dispersion, material.ior, material.thickness,
		material.attenuationColor, material.attenuationDistance );
	material.transmissionAlpha = mix( material.transmissionAlpha, transmitted.a, material.transmission );
	totalDiffuse = mix( totalDiffuse, transmitted.rgb, material.transmission );
#endif`,hx=`#ifdef USE_TRANSMISSION
	uniform float transmission;
	uniform float thickness;
	uniform float attenuationDistance;
	uniform vec3 attenuationColor;
	#ifdef USE_TRANSMISSIONMAP
		uniform sampler2D transmissionMap;
	#endif
	#ifdef USE_THICKNESSMAP
		uniform sampler2D thicknessMap;
	#endif
	uniform vec2 transmissionSamplerSize;
	uniform sampler2D transmissionSamplerMap;
	uniform mat4 modelMatrix;
	uniform mat4 projectionMatrix;
	varying vec3 vWorldPosition;
	float w0( float a ) {
		return ( 1.0 / 6.0 ) * ( a * ( a * ( - a + 3.0 ) - 3.0 ) + 1.0 );
	}
	float w1( float a ) {
		return ( 1.0 / 6.0 ) * ( a *  a * ( 3.0 * a - 6.0 ) + 4.0 );
	}
	float w2( float a ){
		return ( 1.0 / 6.0 ) * ( a * ( a * ( - 3.0 * a + 3.0 ) + 3.0 ) + 1.0 );
	}
	float w3( float a ) {
		return ( 1.0 / 6.0 ) * ( a * a * a );
	}
	float g0( float a ) {
		return w0( a ) + w1( a );
	}
	float g1( float a ) {
		return w2( a ) + w3( a );
	}
	float h0( float a ) {
		return - 1.0 + w1( a ) / ( w0( a ) + w1( a ) );
	}
	float h1( float a ) {
		return 1.0 + w3( a ) / ( w2( a ) + w3( a ) );
	}
	vec4 bicubic( sampler2D tex, vec2 uv, vec4 texelSize, float lod ) {
		uv = uv * texelSize.zw + 0.5;
		vec2 iuv = floor( uv );
		vec2 fuv = fract( uv );
		float g0x = g0( fuv.x );
		float g1x = g1( fuv.x );
		float h0x = h0( fuv.x );
		float h1x = h1( fuv.x );
		float h0y = h0( fuv.y );
		float h1y = h1( fuv.y );
		vec2 p0 = ( vec2( iuv.x + h0x, iuv.y + h0y ) - 0.5 ) * texelSize.xy;
		vec2 p1 = ( vec2( iuv.x + h1x, iuv.y + h0y ) - 0.5 ) * texelSize.xy;
		vec2 p2 = ( vec2( iuv.x + h0x, iuv.y + h1y ) - 0.5 ) * texelSize.xy;
		vec2 p3 = ( vec2( iuv.x + h1x, iuv.y + h1y ) - 0.5 ) * texelSize.xy;
		return g0( fuv.y ) * ( g0x * textureLod( tex, p0, lod ) + g1x * textureLod( tex, p1, lod ) ) +
			g1( fuv.y ) * ( g0x * textureLod( tex, p2, lod ) + g1x * textureLod( tex, p3, lod ) );
	}
	vec4 textureBicubic( sampler2D sampler, vec2 uv, float lod ) {
		vec2 fLodSize = vec2( textureSize( sampler, int( lod ) ) );
		vec2 cLodSize = vec2( textureSize( sampler, int( lod + 1.0 ) ) );
		vec2 fLodSizeInv = 1.0 / fLodSize;
		vec2 cLodSizeInv = 1.0 / cLodSize;
		vec4 fSample = bicubic( sampler, uv, vec4( fLodSizeInv, fLodSize ), floor( lod ) );
		vec4 cSample = bicubic( sampler, uv, vec4( cLodSizeInv, cLodSize ), ceil( lod ) );
		return mix( fSample, cSample, fract( lod ) );
	}
	vec3 getVolumeTransmissionRay( const in vec3 n, const in vec3 v, const in float thickness, const in float ior, const in mat4 modelMatrix ) {
		vec3 refractionVector = refract( - v, normalize( n ), 1.0 / ior );
		vec3 modelScale;
		modelScale.x = length( vec3( modelMatrix[ 0 ].xyz ) );
		modelScale.y = length( vec3( modelMatrix[ 1 ].xyz ) );
		modelScale.z = length( vec3( modelMatrix[ 2 ].xyz ) );
		return normalize( refractionVector ) * thickness * modelScale;
	}
	float applyIorToRoughness( const in float roughness, const in float ior ) {
		return roughness * clamp( ior * 2.0 - 2.0, 0.0, 1.0 );
	}
	vec4 getTransmissionSample( const in vec2 fragCoord, const in float roughness, const in float ior ) {
		float lod = log2( transmissionSamplerSize.x ) * applyIorToRoughness( roughness, ior );
		return textureBicubic( transmissionSamplerMap, fragCoord.xy, lod );
	}
	vec3 volumeAttenuation( const in float transmissionDistance, const in vec3 attenuationColor, const in float attenuationDistance ) {
		if ( isinf( attenuationDistance ) ) {
			return vec3( 1.0 );
		} else {
			vec3 attenuationCoefficient = -log( attenuationColor ) / attenuationDistance;
			vec3 transmittance = exp( - attenuationCoefficient * transmissionDistance );			return transmittance;
		}
	}
	vec4 getIBLVolumeRefraction( const in vec3 n, const in vec3 v, const in float roughness, const in vec3 diffuseColor,
		const in vec3 specularColor, const in float specularF90, const in vec3 position, const in mat4 modelMatrix,
		const in mat4 viewMatrix, const in mat4 projMatrix, const in float dispersion, const in float ior, const in float thickness,
		const in vec3 attenuationColor, const in float attenuationDistance ) {
		vec4 transmittedLight;
		vec3 transmittance;
		#ifdef USE_DISPERSION
			float halfSpread = ( ior - 1.0 ) * 0.025 * dispersion;
			vec3 iors = vec3( ior - halfSpread, ior, ior + halfSpread );
			for ( int i = 0; i < 3; i ++ ) {
				vec3 transmissionRay = getVolumeTransmissionRay( n, v, thickness, iors[ i ], modelMatrix );
				vec3 refractedRayExit = position + transmissionRay;
		
				vec4 ndcPos = projMatrix * viewMatrix * vec4( refractedRayExit, 1.0 );
				vec2 refractionCoords = ndcPos.xy / ndcPos.w;
				refractionCoords += 1.0;
				refractionCoords /= 2.0;
		
				vec4 transmissionSample = getTransmissionSample( refractionCoords, roughness, iors[ i ] );
				transmittedLight[ i ] = transmissionSample[ i ];
				transmittedLight.a += transmissionSample.a;
				transmittance[ i ] = diffuseColor[ i ] * volumeAttenuation( length( transmissionRay ), attenuationColor, attenuationDistance )[ i ];
			}
			transmittedLight.a /= 3.0;
		
		#else
		
			vec3 transmissionRay = getVolumeTransmissionRay( n, v, thickness, ior, modelMatrix );
			vec3 refractedRayExit = position + transmissionRay;
			vec4 ndcPos = projMatrix * viewMatrix * vec4( refractedRayExit, 1.0 );
			vec2 refractionCoords = ndcPos.xy / ndcPos.w;
			refractionCoords += 1.0;
			refractionCoords /= 2.0;
			transmittedLight = getTransmissionSample( refractionCoords, roughness, ior );
			transmittance = diffuseColor * volumeAttenuation( length( transmissionRay ), attenuationColor, attenuationDistance );
		
		#endif
		vec3 attenuatedColor = transmittance * transmittedLight.rgb;
		vec3 F = EnvironmentBRDF( n, v, specularColor, specularF90, roughness );
		float transmittanceFactor = ( transmittance.r + transmittance.g + transmittance.b ) / 3.0;
		return vec4( ( 1.0 - F ) * attenuatedColor, 1.0 - ( 1.0 - transmittedLight.a ) * transmittanceFactor );
	}
#endif`,fx=`#if defined( USE_UV ) || defined( USE_ANISOTROPY )
	varying vec2 vUv;
#endif
#ifdef USE_MAP
	varying vec2 vMapUv;
#endif
#ifdef USE_ALPHAMAP
	varying vec2 vAlphaMapUv;
#endif
#ifdef USE_LIGHTMAP
	varying vec2 vLightMapUv;
#endif
#ifdef USE_AOMAP
	varying vec2 vAoMapUv;
#endif
#ifdef USE_BUMPMAP
	varying vec2 vBumpMapUv;
#endif
#ifdef USE_NORMALMAP
	varying vec2 vNormalMapUv;
#endif
#ifdef USE_EMISSIVEMAP
	varying vec2 vEmissiveMapUv;
#endif
#ifdef USE_METALNESSMAP
	varying vec2 vMetalnessMapUv;
#endif
#ifdef USE_ROUGHNESSMAP
	varying vec2 vRoughnessMapUv;
#endif
#ifdef USE_ANISOTROPYMAP
	varying vec2 vAnisotropyMapUv;
#endif
#ifdef USE_CLEARCOATMAP
	varying vec2 vClearcoatMapUv;
#endif
#ifdef USE_CLEARCOAT_NORMALMAP
	varying vec2 vClearcoatNormalMapUv;
#endif
#ifdef USE_CLEARCOAT_ROUGHNESSMAP
	varying vec2 vClearcoatRoughnessMapUv;
#endif
#ifdef USE_IRIDESCENCEMAP
	varying vec2 vIridescenceMapUv;
#endif
#ifdef USE_IRIDESCENCE_THICKNESSMAP
	varying vec2 vIridescenceThicknessMapUv;
#endif
#ifdef USE_SHEEN_COLORMAP
	varying vec2 vSheenColorMapUv;
#endif
#ifdef USE_SHEEN_ROUGHNESSMAP
	varying vec2 vSheenRoughnessMapUv;
#endif
#ifdef USE_SPECULARMAP
	varying vec2 vSpecularMapUv;
#endif
#ifdef USE_SPECULAR_COLORMAP
	varying vec2 vSpecularColorMapUv;
#endif
#ifdef USE_SPECULAR_INTENSITYMAP
	varying vec2 vSpecularIntensityMapUv;
#endif
#ifdef USE_TRANSMISSIONMAP
	uniform mat3 transmissionMapTransform;
	varying vec2 vTransmissionMapUv;
#endif
#ifdef USE_THICKNESSMAP
	uniform mat3 thicknessMapTransform;
	varying vec2 vThicknessMapUv;
#endif`,dx=`#if defined( USE_UV ) || defined( USE_ANISOTROPY )
	varying vec2 vUv;
#endif
#ifdef USE_MAP
	uniform mat3 mapTransform;
	varying vec2 vMapUv;
#endif
#ifdef USE_ALPHAMAP
	uniform mat3 alphaMapTransform;
	varying vec2 vAlphaMapUv;
#endif
#ifdef USE_LIGHTMAP
	uniform mat3 lightMapTransform;
	varying vec2 vLightMapUv;
#endif
#ifdef USE_AOMAP
	uniform mat3 aoMapTransform;
	varying vec2 vAoMapUv;
#endif
#ifdef USE_BUMPMAP
	uniform mat3 bumpMapTransform;
	varying vec2 vBumpMapUv;
#endif
#ifdef USE_NORMALMAP
	uniform mat3 normalMapTransform;
	varying vec2 vNormalMapUv;
#endif
#ifdef USE_DISPLACEMENTMAP
	uniform mat3 displacementMapTransform;
	varying vec2 vDisplacementMapUv;
#endif
#ifdef USE_EMISSIVEMAP
	uniform mat3 emissiveMapTransform;
	varying vec2 vEmissiveMapUv;
#endif
#ifdef USE_METALNESSMAP
	uniform mat3 metalnessMapTransform;
	varying vec2 vMetalnessMapUv;
#endif
#ifdef USE_ROUGHNESSMAP
	uniform mat3 roughnessMapTransform;
	varying vec2 vRoughnessMapUv;
#endif
#ifdef USE_ANISOTROPYMAP
	uniform mat3 anisotropyMapTransform;
	varying vec2 vAnisotropyMapUv;
#endif
#ifdef USE_CLEARCOATMAP
	uniform mat3 clearcoatMapTransform;
	varying vec2 vClearcoatMapUv;
#endif
#ifdef USE_CLEARCOAT_NORMALMAP
	uniform mat3 clearcoatNormalMapTransform;
	varying vec2 vClearcoatNormalMapUv;
#endif
#ifdef USE_CLEARCOAT_ROUGHNESSMAP
	uniform mat3 clearcoatRoughnessMapTransform;
	varying vec2 vClearcoatRoughnessMapUv;
#endif
#ifdef USE_SHEEN_COLORMAP
	uniform mat3 sheenColorMapTransform;
	varying vec2 vSheenColorMapUv;
#endif
#ifdef USE_SHEEN_ROUGHNESSMAP
	uniform mat3 sheenRoughnessMapTransform;
	varying vec2 vSheenRoughnessMapUv;
#endif
#ifdef USE_IRIDESCENCEMAP
	uniform mat3 iridescenceMapTransform;
	varying vec2 vIridescenceMapUv;
#endif
#ifdef USE_IRIDESCENCE_THICKNESSMAP
	uniform mat3 iridescenceThicknessMapTransform;
	varying vec2 vIridescenceThicknessMapUv;
#endif
#ifdef USE_SPECULARMAP
	uniform mat3 specularMapTransform;
	varying vec2 vSpecularMapUv;
#endif
#ifdef USE_SPECULAR_COLORMAP
	uniform mat3 specularColorMapTransform;
	varying vec2 vSpecularColorMapUv;
#endif
#ifdef USE_SPECULAR_INTENSITYMAP
	uniform mat3 specularIntensityMapTransform;
	varying vec2 vSpecularIntensityMapUv;
#endif
#ifdef USE_TRANSMISSIONMAP
	uniform mat3 transmissionMapTransform;
	varying vec2 vTransmissionMapUv;
#endif
#ifdef USE_THICKNESSMAP
	uniform mat3 thicknessMapTransform;
	varying vec2 vThicknessMapUv;
#endif`,px=`#if defined( USE_UV ) || defined( USE_ANISOTROPY )
	vUv = vec3( uv, 1 ).xy;
#endif
#ifdef USE_MAP
	vMapUv = ( mapTransform * vec3( MAP_UV, 1 ) ).xy;
#endif
#ifdef USE_ALPHAMAP
	vAlphaMapUv = ( alphaMapTransform * vec3( ALPHAMAP_UV, 1 ) ).xy;
#endif
#ifdef USE_LIGHTMAP
	vLightMapUv = ( lightMapTransform * vec3( LIGHTMAP_UV, 1 ) ).xy;
#endif
#ifdef USE_AOMAP
	vAoMapUv = ( aoMapTransform * vec3( AOMAP_UV, 1 ) ).xy;
#endif
#ifdef USE_BUMPMAP
	vBumpMapUv = ( bumpMapTransform * vec3( BUMPMAP_UV, 1 ) ).xy;
#endif
#ifdef USE_NORMALMAP
	vNormalMapUv = ( normalMapTransform * vec3( NORMALMAP_UV, 1 ) ).xy;
#endif
#ifdef USE_DISPLACEMENTMAP
	vDisplacementMapUv = ( displacementMapTransform * vec3( DISPLACEMENTMAP_UV, 1 ) ).xy;
#endif
#ifdef USE_EMISSIVEMAP
	vEmissiveMapUv = ( emissiveMapTransform * vec3( EMISSIVEMAP_UV, 1 ) ).xy;
#endif
#ifdef USE_METALNESSMAP
	vMetalnessMapUv = ( metalnessMapTransform * vec3( METALNESSMAP_UV, 1 ) ).xy;
#endif
#ifdef USE_ROUGHNESSMAP
	vRoughnessMapUv = ( roughnessMapTransform * vec3( ROUGHNESSMAP_UV, 1 ) ).xy;
#endif
#ifdef USE_ANISOTROPYMAP
	vAnisotropyMapUv = ( anisotropyMapTransform * vec3( ANISOTROPYMAP_UV, 1 ) ).xy;
#endif
#ifdef USE_CLEARCOATMAP
	vClearcoatMapUv = ( clearcoatMapTransform * vec3( CLEARCOATMAP_UV, 1 ) ).xy;
#endif
#ifdef USE_CLEARCOAT_NORMALMAP
	vClearcoatNormalMapUv = ( clearcoatNormalMapTransform * vec3( CLEARCOAT_NORMALMAP_UV, 1 ) ).xy;
#endif
#ifdef USE_CLEARCOAT_ROUGHNESSMAP
	vClearcoatRoughnessMapUv = ( clearcoatRoughnessMapTransform * vec3( CLEARCOAT_ROUGHNESSMAP_UV, 1 ) ).xy;
#endif
#ifdef USE_IRIDESCENCEMAP
	vIridescenceMapUv = ( iridescenceMapTransform * vec3( IRIDESCENCEMAP_UV, 1 ) ).xy;
#endif
#ifdef USE_IRIDESCENCE_THICKNESSMAP
	vIridescenceThicknessMapUv = ( iridescenceThicknessMapTransform * vec3( IRIDESCENCE_THICKNESSMAP_UV, 1 ) ).xy;
#endif
#ifdef USE_SHEEN_COLORMAP
	vSheenColorMapUv = ( sheenColorMapTransform * vec3( SHEEN_COLORMAP_UV, 1 ) ).xy;
#endif
#ifdef USE_SHEEN_ROUGHNESSMAP
	vSheenRoughnessMapUv = ( sheenRoughnessMapTransform * vec3( SHEEN_ROUGHNESSMAP_UV, 1 ) ).xy;
#endif
#ifdef USE_SPECULARMAP
	vSpecularMapUv = ( specularMapTransform * vec3( SPECULARMAP_UV, 1 ) ).xy;
#endif
#ifdef USE_SPECULAR_COLORMAP
	vSpecularColorMapUv = ( specularColorMapTransform * vec3( SPECULAR_COLORMAP_UV, 1 ) ).xy;
#endif
#ifdef USE_SPECULAR_INTENSITYMAP
	vSpecularIntensityMapUv = ( specularIntensityMapTransform * vec3( SPECULAR_INTENSITYMAP_UV, 1 ) ).xy;
#endif
#ifdef USE_TRANSMISSIONMAP
	vTransmissionMapUv = ( transmissionMapTransform * vec3( TRANSMISSIONMAP_UV, 1 ) ).xy;
#endif
#ifdef USE_THICKNESSMAP
	vThicknessMapUv = ( thicknessMapTransform * vec3( THICKNESSMAP_UV, 1 ) ).xy;
#endif`,mx=`#if defined( USE_ENVMAP ) || defined( DISTANCE ) || defined ( USE_SHADOWMAP ) || defined ( USE_TRANSMISSION ) || NUM_SPOT_LIGHT_COORDS > 0
	vec4 worldPosition = vec4( transformed, 1.0 );
	#ifdef USE_BATCHING
		worldPosition = batchingMatrix * worldPosition;
	#endif
	#ifdef USE_INSTANCING
		worldPosition = instanceMatrix * worldPosition;
	#endif
	worldPosition = modelMatrix * worldPosition;
#endif`;const Jt={alphahash_fragment:g0,alphahash_pars_fragment:v0,alphamap_fragment:x0,alphamap_pars_fragment:S0,alphatest_fragment:M0,alphatest_pars_fragment:y0,aomap_fragment:E0,aomap_pars_fragment:T0,batching_pars_vertex:b0,batching_vertex:A0,begin_vertex:w0,beginnormal_vertex:R0,bsdfs:C0,iridescence_fragment:P0,bumpmap_pars_fragment:D0,clipping_planes_fragment:L0,clipping_planes_pars_fragment:I0,clipping_planes_pars_vertex:U0,clipping_planes_vertex:N0,color_fragment:F0,color_pars_fragment:O0,color_pars_vertex:B0,color_vertex:z0,common:k0,cube_uv_reflection_fragment:H0,defaultnormal_vertex:V0,displacementmap_pars_vertex:G0,displacementmap_vertex:W0,emissivemap_fragment:X0,emissivemap_pars_fragment:Y0,colorspace_fragment:q0,colorspace_pars_fragment:$0,envmap_fragment:K0,envmap_common_pars_fragment:Z0,envmap_pars_fragment:j0,envmap_pars_vertex:J0,envmap_physical_pars_fragment:cv,envmap_vertex:Q0,fog_vertex:tv,fog_pars_vertex:ev,fog_fragment:nv,fog_pars_fragment:iv,gradientmap_pars_fragment:rv,lightmap_pars_fragment:sv,lights_lambert_fragment:ov,lights_lambert_pars_fragment:av,lights_pars_begin:lv,lights_toon_fragment:uv,lights_toon_pars_fragment:hv,lights_phong_fragment:fv,lights_phong_pars_fragment:dv,lights_physical_fragment:pv,lights_physical_pars_fragment:mv,lights_fragment_begin:_v,lights_fragment_maps:gv,lights_fragment_end:vv,logdepthbuf_fragment:xv,logdepthbuf_pars_fragment:Sv,logdepthbuf_pars_vertex:Mv,logdepthbuf_vertex:yv,map_fragment:Ev,map_pars_fragment:Tv,map_particle_fragment:bv,map_particle_pars_fragment:Av,metalnessmap_fragment:wv,metalnessmap_pars_fragment:Rv,morphinstance_vertex:Cv,morphcolor_vertex:Pv,morphnormal_vertex:Dv,morphtarget_pars_vertex:Lv,morphtarget_vertex:Iv,normal_fragment_begin:Uv,normal_fragment_maps:Nv,normal_pars_fragment:Fv,normal_pars_vertex:Ov,normal_vertex:Bv,normalmap_pars_fragment:zv,clearcoat_normal_fragment_begin:kv,clearcoat_normal_fragment_maps:Hv,clearcoat_pars_fragment:Vv,iridescence_pars_fragment:Gv,opaque_fragment:Wv,packing:Xv,premultiplied_alpha_fragment:Yv,project_vertex:qv,dithering_fragment:$v,dithering_pars_fragment:Kv,roughnessmap_fragment:Zv,roughnessmap_pars_fragment:jv,shadowmap_pars_fragment:Jv,shadowmap_pars_vertex:Qv,shadowmap_vertex:tx,shadowmask_pars_fragment:ex,skinbase_vertex:nx,skinning_pars_vertex:ix,skinning_vertex:rx,skinnormal_vertex:sx,specularmap_fragment:ox,specularmap_pars_fragment:ax,tonemapping_fragment:lx,tonemapping_pars_fragment:cx,transmission_fragment:ux,transmission_pars_fragment:hx,uv_pars_fragment:fx,uv_pars_vertex:dx,uv_vertex:px,worldpos_vertex:mx,background_vert:`varying vec2 vUv;
uniform mat3 uvTransform;
void main() {
	vUv = ( uvTransform * vec3( uv, 1 ) ).xy;
	gl_Position = vec4( position.xy, 1.0, 1.0 );
}`,background_frag:`uniform sampler2D t2D;
uniform float backgroundIntensity;
varying vec2 vUv;
void main() {
	vec4 texColor = texture2D( t2D, vUv );
	#ifdef DECODE_VIDEO_TEXTURE
		texColor = vec4( mix( pow( texColor.rgb * 0.9478672986 + vec3( 0.0521327014 ), vec3( 2.4 ) ), texColor.rgb * 0.0773993808, vec3( lessThanEqual( texColor.rgb, vec3( 0.04045 ) ) ) ), texColor.w );
	#endif
	texColor.rgb *= backgroundIntensity;
	gl_FragColor = texColor;
	#include <tonemapping_fragment>
	#include <colorspace_fragment>
}`,backgroundCube_vert:`varying vec3 vWorldDirection;
#include <common>
void main() {
	vWorldDirection = transformDirection( position, modelMatrix );
	#include <begin_vertex>
	#include <project_vertex>
	gl_Position.z = gl_Position.w;
}`,backgroundCube_frag:`#ifdef ENVMAP_TYPE_CUBE
	uniform samplerCube envMap;
#elif defined( ENVMAP_TYPE_CUBE_UV )
	uniform sampler2D envMap;
#endif
uniform float flipEnvMap;
uniform float backgroundBlurriness;
uniform float backgroundIntensity;
uniform mat3 backgroundRotation;
varying vec3 vWorldDirection;
#include <cube_uv_reflection_fragment>
void main() {
	#ifdef ENVMAP_TYPE_CUBE
		vec4 texColor = textureCube( envMap, backgroundRotation * vec3( flipEnvMap * vWorldDirection.x, vWorldDirection.yz ) );
	#elif defined( ENVMAP_TYPE_CUBE_UV )
		vec4 texColor = textureCubeUV( envMap, backgroundRotation * vWorldDirection, backgroundBlurriness );
	#else
		vec4 texColor = vec4( 0.0, 0.0, 0.0, 1.0 );
	#endif
	texColor.rgb *= backgroundIntensity;
	gl_FragColor = texColor;
	#include <tonemapping_fragment>
	#include <colorspace_fragment>
}`,cube_vert:`varying vec3 vWorldDirection;
#include <common>
void main() {
	vWorldDirection = transformDirection( position, modelMatrix );
	#include <begin_vertex>
	#include <project_vertex>
	gl_Position.z = gl_Position.w;
}`,cube_frag:`uniform samplerCube tCube;
uniform float tFlip;
uniform float opacity;
varying vec3 vWorldDirection;
void main() {
	vec4 texColor = textureCube( tCube, vec3( tFlip * vWorldDirection.x, vWorldDirection.yz ) );
	gl_FragColor = texColor;
	gl_FragColor.a *= opacity;
	#include <tonemapping_fragment>
	#include <colorspace_fragment>
}`,depth_vert:`#include <common>
#include <batching_pars_vertex>
#include <uv_pars_vertex>
#include <displacementmap_pars_vertex>
#include <morphtarget_pars_vertex>
#include <skinning_pars_vertex>
#include <logdepthbuf_pars_vertex>
#include <clipping_planes_pars_vertex>
varying vec2 vHighPrecisionZW;
void main() {
	#include <uv_vertex>
	#include <batching_vertex>
	#include <skinbase_vertex>
	#include <morphinstance_vertex>
	#ifdef USE_DISPLACEMENTMAP
		#include <beginnormal_vertex>
		#include <morphnormal_vertex>
		#include <skinnormal_vertex>
	#endif
	#include <begin_vertex>
	#include <morphtarget_vertex>
	#include <skinning_vertex>
	#include <displacementmap_vertex>
	#include <project_vertex>
	#include <logdepthbuf_vertex>
	#include <clipping_planes_vertex>
	vHighPrecisionZW = gl_Position.zw;
}`,depth_frag:`#if DEPTH_PACKING == 3200
	uniform float opacity;
#endif
#include <common>
#include <packing>
#include <uv_pars_fragment>
#include <map_pars_fragment>
#include <alphamap_pars_fragment>
#include <alphatest_pars_fragment>
#include <alphahash_pars_fragment>
#include <logdepthbuf_pars_fragment>
#include <clipping_planes_pars_fragment>
varying vec2 vHighPrecisionZW;
void main() {
	vec4 diffuseColor = vec4( 1.0 );
	#include <clipping_planes_fragment>
	#if DEPTH_PACKING == 3200
		diffuseColor.a = opacity;
	#endif
	#include <map_fragment>
	#include <alphamap_fragment>
	#include <alphatest_fragment>
	#include <alphahash_fragment>
	#include <logdepthbuf_fragment>
	float fragCoordZ = 0.5 * vHighPrecisionZW[0] / vHighPrecisionZW[1] + 0.5;
	#if DEPTH_PACKING == 3200
		gl_FragColor = vec4( vec3( 1.0 - fragCoordZ ), opacity );
	#elif DEPTH_PACKING == 3201
		gl_FragColor = packDepthToRGBA( fragCoordZ );
	#elif DEPTH_PACKING == 3202
		gl_FragColor = vec4( packDepthToRGB( fragCoordZ ), 1.0 );
	#elif DEPTH_PACKING == 3203
		gl_FragColor = vec4( packDepthToRG( fragCoordZ ), 0.0, 1.0 );
	#endif
}`,distanceRGBA_vert:`#define DISTANCE
varying vec3 vWorldPosition;
#include <common>
#include <batching_pars_vertex>
#include <uv_pars_vertex>
#include <displacementmap_pars_vertex>
#include <morphtarget_pars_vertex>
#include <skinning_pars_vertex>
#include <clipping_planes_pars_vertex>
void main() {
	#include <uv_vertex>
	#include <batching_vertex>
	#include <skinbase_vertex>
	#include <morphinstance_vertex>
	#ifdef USE_DISPLACEMENTMAP
		#include <beginnormal_vertex>
		#include <morphnormal_vertex>
		#include <skinnormal_vertex>
	#endif
	#include <begin_vertex>
	#include <morphtarget_vertex>
	#include <skinning_vertex>
	#include <displacementmap_vertex>
	#include <project_vertex>
	#include <worldpos_vertex>
	#include <clipping_planes_vertex>
	vWorldPosition = worldPosition.xyz;
}`,distanceRGBA_frag:`#define DISTANCE
uniform vec3 referencePosition;
uniform float nearDistance;
uniform float farDistance;
varying vec3 vWorldPosition;
#include <common>
#include <packing>
#include <uv_pars_fragment>
#include <map_pars_fragment>
#include <alphamap_pars_fragment>
#include <alphatest_pars_fragment>
#include <alphahash_pars_fragment>
#include <clipping_planes_pars_fragment>
void main () {
	vec4 diffuseColor = vec4( 1.0 );
	#include <clipping_planes_fragment>
	#include <map_fragment>
	#include <alphamap_fragment>
	#include <alphatest_fragment>
	#include <alphahash_fragment>
	float dist = length( vWorldPosition - referencePosition );
	dist = ( dist - nearDistance ) / ( farDistance - nearDistance );
	dist = saturate( dist );
	gl_FragColor = packDepthToRGBA( dist );
}`,equirect_vert:`varying vec3 vWorldDirection;
#include <common>
void main() {
	vWorldDirection = transformDirection( position, modelMatrix );
	#include <begin_vertex>
	#include <project_vertex>
}`,equirect_frag:`uniform sampler2D tEquirect;
varying vec3 vWorldDirection;
#include <common>
void main() {
	vec3 direction = normalize( vWorldDirection );
	vec2 sampleUV = equirectUv( direction );
	gl_FragColor = texture2D( tEquirect, sampleUV );
	#include <tonemapping_fragment>
	#include <colorspace_fragment>
}`,linedashed_vert:`uniform float scale;
attribute float lineDistance;
varying float vLineDistance;
#include <common>
#include <uv_pars_vertex>
#include <color_pars_vertex>
#include <fog_pars_vertex>
#include <morphtarget_pars_vertex>
#include <logdepthbuf_pars_vertex>
#include <clipping_planes_pars_vertex>
void main() {
	vLineDistance = scale * lineDistance;
	#include <uv_vertex>
	#include <color_vertex>
	#include <morphinstance_vertex>
	#include <morphcolor_vertex>
	#include <begin_vertex>
	#include <morphtarget_vertex>
	#include <project_vertex>
	#include <logdepthbuf_vertex>
	#include <clipping_planes_vertex>
	#include <fog_vertex>
}`,linedashed_frag:`uniform vec3 diffuse;
uniform float opacity;
uniform float dashSize;
uniform float totalSize;
varying float vLineDistance;
#include <common>
#include <color_pars_fragment>
#include <uv_pars_fragment>
#include <map_pars_fragment>
#include <fog_pars_fragment>
#include <logdepthbuf_pars_fragment>
#include <clipping_planes_pars_fragment>
void main() {
	vec4 diffuseColor = vec4( diffuse, opacity );
	#include <clipping_planes_fragment>
	if ( mod( vLineDistance, totalSize ) > dashSize ) {
		discard;
	}
	vec3 outgoingLight = vec3( 0.0 );
	#include <logdepthbuf_fragment>
	#include <map_fragment>
	#include <color_fragment>
	outgoingLight = diffuseColor.rgb;
	#include <opaque_fragment>
	#include <tonemapping_fragment>
	#include <colorspace_fragment>
	#include <fog_fragment>
	#include <premultiplied_alpha_fragment>
}`,meshbasic_vert:`#include <common>
#include <batching_pars_vertex>
#include <uv_pars_vertex>
#include <envmap_pars_vertex>
#include <color_pars_vertex>
#include <fog_pars_vertex>
#include <morphtarget_pars_vertex>
#include <skinning_pars_vertex>
#include <logdepthbuf_pars_vertex>
#include <clipping_planes_pars_vertex>
void main() {
	#include <uv_vertex>
	#include <color_vertex>
	#include <morphinstance_vertex>
	#include <morphcolor_vertex>
	#include <batching_vertex>
	#if defined ( USE_ENVMAP ) || defined ( USE_SKINNING )
		#include <beginnormal_vertex>
		#include <morphnormal_vertex>
		#include <skinbase_vertex>
		#include <skinnormal_vertex>
		#include <defaultnormal_vertex>
	#endif
	#include <begin_vertex>
	#include <morphtarget_vertex>
	#include <skinning_vertex>
	#include <project_vertex>
	#include <logdepthbuf_vertex>
	#include <clipping_planes_vertex>
	#include <worldpos_vertex>
	#include <envmap_vertex>
	#include <fog_vertex>
}`,meshbasic_frag:`uniform vec3 diffuse;
uniform float opacity;
#ifndef FLAT_SHADED
	varying vec3 vNormal;
#endif
#include <common>
#include <dithering_pars_fragment>
#include <color_pars_fragment>
#include <uv_pars_fragment>
#include <map_pars_fragment>
#include <alphamap_pars_fragment>
#include <alphatest_pars_fragment>
#include <alphahash_pars_fragment>
#include <aomap_pars_fragment>
#include <lightmap_pars_fragment>
#include <envmap_common_pars_fragment>
#include <envmap_pars_fragment>
#include <fog_pars_fragment>
#include <specularmap_pars_fragment>
#include <logdepthbuf_pars_fragment>
#include <clipping_planes_pars_fragment>
void main() {
	vec4 diffuseColor = vec4( diffuse, opacity );
	#include <clipping_planes_fragment>
	#include <logdepthbuf_fragment>
	#include <map_fragment>
	#include <color_fragment>
	#include <alphamap_fragment>
	#include <alphatest_fragment>
	#include <alphahash_fragment>
	#include <specularmap_fragment>
	ReflectedLight reflectedLight = ReflectedLight( vec3( 0.0 ), vec3( 0.0 ), vec3( 0.0 ), vec3( 0.0 ) );
	#ifdef USE_LIGHTMAP
		vec4 lightMapTexel = texture2D( lightMap, vLightMapUv );
		reflectedLight.indirectDiffuse += lightMapTexel.rgb * lightMapIntensity * RECIPROCAL_PI;
	#else
		reflectedLight.indirectDiffuse += vec3( 1.0 );
	#endif
	#include <aomap_fragment>
	reflectedLight.indirectDiffuse *= diffuseColor.rgb;
	vec3 outgoingLight = reflectedLight.indirectDiffuse;
	#include <envmap_fragment>
	#include <opaque_fragment>
	#include <tonemapping_fragment>
	#include <colorspace_fragment>
	#include <fog_fragment>
	#include <premultiplied_alpha_fragment>
	#include <dithering_fragment>
}`,meshlambert_vert:`#define LAMBERT
varying vec3 vViewPosition;
#include <common>
#include <batching_pars_vertex>
#include <uv_pars_vertex>
#include <displacementmap_pars_vertex>
#include <envmap_pars_vertex>
#include <color_pars_vertex>
#include <fog_pars_vertex>
#include <normal_pars_vertex>
#include <morphtarget_pars_vertex>
#include <skinning_pars_vertex>
#include <shadowmap_pars_vertex>
#include <logdepthbuf_pars_vertex>
#include <clipping_planes_pars_vertex>
void main() {
	#include <uv_vertex>
	#include <color_vertex>
	#include <morphinstance_vertex>
	#include <morphcolor_vertex>
	#include <batching_vertex>
	#include <beginnormal_vertex>
	#include <morphnormal_vertex>
	#include <skinbase_vertex>
	#include <skinnormal_vertex>
	#include <defaultnormal_vertex>
	#include <normal_vertex>
	#include <begin_vertex>
	#include <morphtarget_vertex>
	#include <skinning_vertex>
	#include <displacementmap_vertex>
	#include <project_vertex>
	#include <logdepthbuf_vertex>
	#include <clipping_planes_vertex>
	vViewPosition = - mvPosition.xyz;
	#include <worldpos_vertex>
	#include <envmap_vertex>
	#include <shadowmap_vertex>
	#include <fog_vertex>
}`,meshlambert_frag:`#define LAMBERT
uniform vec3 diffuse;
uniform vec3 emissive;
uniform float opacity;
#include <common>
#include <packing>
#include <dithering_pars_fragment>
#include <color_pars_fragment>
#include <uv_pars_fragment>
#include <map_pars_fragment>
#include <alphamap_pars_fragment>
#include <alphatest_pars_fragment>
#include <alphahash_pars_fragment>
#include <aomap_pars_fragment>
#include <lightmap_pars_fragment>
#include <emissivemap_pars_fragment>
#include <envmap_common_pars_fragment>
#include <envmap_pars_fragment>
#include <fog_pars_fragment>
#include <bsdfs>
#include <lights_pars_begin>
#include <normal_pars_fragment>
#include <lights_lambert_pars_fragment>
#include <shadowmap_pars_fragment>
#include <bumpmap_pars_fragment>
#include <normalmap_pars_fragment>
#include <specularmap_pars_fragment>
#include <logdepthbuf_pars_fragment>
#include <clipping_planes_pars_fragment>
void main() {
	vec4 diffuseColor = vec4( diffuse, opacity );
	#include <clipping_planes_fragment>
	ReflectedLight reflectedLight = ReflectedLight( vec3( 0.0 ), vec3( 0.0 ), vec3( 0.0 ), vec3( 0.0 ) );
	vec3 totalEmissiveRadiance = emissive;
	#include <logdepthbuf_fragment>
	#include <map_fragment>
	#include <color_fragment>
	#include <alphamap_fragment>
	#include <alphatest_fragment>
	#include <alphahash_fragment>
	#include <specularmap_fragment>
	#include <normal_fragment_begin>
	#include <normal_fragment_maps>
	#include <emissivemap_fragment>
	#include <lights_lambert_fragment>
	#include <lights_fragment_begin>
	#include <lights_fragment_maps>
	#include <lights_fragment_end>
	#include <aomap_fragment>
	vec3 outgoingLight = reflectedLight.directDiffuse + reflectedLight.indirectDiffuse + totalEmissiveRadiance;
	#include <envmap_fragment>
	#include <opaque_fragment>
	#include <tonemapping_fragment>
	#include <colorspace_fragment>
	#include <fog_fragment>
	#include <premultiplied_alpha_fragment>
	#include <dithering_fragment>
}`,meshmatcap_vert:`#define MATCAP
varying vec3 vViewPosition;
#include <common>
#include <batching_pars_vertex>
#include <uv_pars_vertex>
#include <color_pars_vertex>
#include <displacementmap_pars_vertex>
#include <fog_pars_vertex>
#include <normal_pars_vertex>
#include <morphtarget_pars_vertex>
#include <skinning_pars_vertex>
#include <logdepthbuf_pars_vertex>
#include <clipping_planes_pars_vertex>
void main() {
	#include <uv_vertex>
	#include <color_vertex>
	#include <morphinstance_vertex>
	#include <morphcolor_vertex>
	#include <batching_vertex>
	#include <beginnormal_vertex>
	#include <morphnormal_vertex>
	#include <skinbase_vertex>
	#include <skinnormal_vertex>
	#include <defaultnormal_vertex>
	#include <normal_vertex>
	#include <begin_vertex>
	#include <morphtarget_vertex>
	#include <skinning_vertex>
	#include <displacementmap_vertex>
	#include <project_vertex>
	#include <logdepthbuf_vertex>
	#include <clipping_planes_vertex>
	#include <fog_vertex>
	vViewPosition = - mvPosition.xyz;
}`,meshmatcap_frag:`#define MATCAP
uniform vec3 diffuse;
uniform float opacity;
uniform sampler2D matcap;
varying vec3 vViewPosition;
#include <common>
#include <dithering_pars_fragment>
#include <color_pars_fragment>
#include <uv_pars_fragment>
#include <map_pars_fragment>
#include <alphamap_pars_fragment>
#include <alphatest_pars_fragment>
#include <alphahash_pars_fragment>
#include <fog_pars_fragment>
#include <normal_pars_fragment>
#include <bumpmap_pars_fragment>
#include <normalmap_pars_fragment>
#include <logdepthbuf_pars_fragment>
#include <clipping_planes_pars_fragment>
void main() {
	vec4 diffuseColor = vec4( diffuse, opacity );
	#include <clipping_planes_fragment>
	#include <logdepthbuf_fragment>
	#include <map_fragment>
	#include <color_fragment>
	#include <alphamap_fragment>
	#include <alphatest_fragment>
	#include <alphahash_fragment>
	#include <normal_fragment_begin>
	#include <normal_fragment_maps>
	vec3 viewDir = normalize( vViewPosition );
	vec3 x = normalize( vec3( viewDir.z, 0.0, - viewDir.x ) );
	vec3 y = cross( viewDir, x );
	vec2 uv = vec2( dot( x, normal ), dot( y, normal ) ) * 0.495 + 0.5;
	#ifdef USE_MATCAP
		vec4 matcapColor = texture2D( matcap, uv );
	#else
		vec4 matcapColor = vec4( vec3( mix( 0.2, 0.8, uv.y ) ), 1.0 );
	#endif
	vec3 outgoingLight = diffuseColor.rgb * matcapColor.rgb;
	#include <opaque_fragment>
	#include <tonemapping_fragment>
	#include <colorspace_fragment>
	#include <fog_fragment>
	#include <premultiplied_alpha_fragment>
	#include <dithering_fragment>
}`,meshnormal_vert:`#define NORMAL
#if defined( FLAT_SHADED ) || defined( USE_BUMPMAP ) || defined( USE_NORMALMAP_TANGENTSPACE )
	varying vec3 vViewPosition;
#endif
#include <common>
#include <batching_pars_vertex>
#include <uv_pars_vertex>
#include <displacementmap_pars_vertex>
#include <normal_pars_vertex>
#include <morphtarget_pars_vertex>
#include <skinning_pars_vertex>
#include <logdepthbuf_pars_vertex>
#include <clipping_planes_pars_vertex>
void main() {
	#include <uv_vertex>
	#include <batching_vertex>
	#include <beginnormal_vertex>
	#include <morphinstance_vertex>
	#include <morphnormal_vertex>
	#include <skinbase_vertex>
	#include <skinnormal_vertex>
	#include <defaultnormal_vertex>
	#include <normal_vertex>
	#include <begin_vertex>
	#include <morphtarget_vertex>
	#include <skinning_vertex>
	#include <displacementmap_vertex>
	#include <project_vertex>
	#include <logdepthbuf_vertex>
	#include <clipping_planes_vertex>
#if defined( FLAT_SHADED ) || defined( USE_BUMPMAP ) || defined( USE_NORMALMAP_TANGENTSPACE )
	vViewPosition = - mvPosition.xyz;
#endif
}`,meshnormal_frag:`#define NORMAL
uniform float opacity;
#if defined( FLAT_SHADED ) || defined( USE_BUMPMAP ) || defined( USE_NORMALMAP_TANGENTSPACE )
	varying vec3 vViewPosition;
#endif
#include <packing>
#include <uv_pars_fragment>
#include <normal_pars_fragment>
#include <bumpmap_pars_fragment>
#include <normalmap_pars_fragment>
#include <logdepthbuf_pars_fragment>
#include <clipping_planes_pars_fragment>
void main() {
	vec4 diffuseColor = vec4( 0.0, 0.0, 0.0, opacity );
	#include <clipping_planes_fragment>
	#include <logdepthbuf_fragment>
	#include <normal_fragment_begin>
	#include <normal_fragment_maps>
	gl_FragColor = vec4( packNormalToRGB( normal ), diffuseColor.a );
	#ifdef OPAQUE
		gl_FragColor.a = 1.0;
	#endif
}`,meshphong_vert:`#define PHONG
varying vec3 vViewPosition;
#include <common>
#include <batching_pars_vertex>
#include <uv_pars_vertex>
#include <displacementmap_pars_vertex>
#include <envmap_pars_vertex>
#include <color_pars_vertex>
#include <fog_pars_vertex>
#include <normal_pars_vertex>
#include <morphtarget_pars_vertex>
#include <skinning_pars_vertex>
#include <shadowmap_pars_vertex>
#include <logdepthbuf_pars_vertex>
#include <clipping_planes_pars_vertex>
void main() {
	#include <uv_vertex>
	#include <color_vertex>
	#include <morphcolor_vertex>
	#include <batching_vertex>
	#include <beginnormal_vertex>
	#include <morphinstance_vertex>
	#include <morphnormal_vertex>
	#include <skinbase_vertex>
	#include <skinnormal_vertex>
	#include <defaultnormal_vertex>
	#include <normal_vertex>
	#include <begin_vertex>
	#include <morphtarget_vertex>
	#include <skinning_vertex>
	#include <displacementmap_vertex>
	#include <project_vertex>
	#include <logdepthbuf_vertex>
	#include <clipping_planes_vertex>
	vViewPosition = - mvPosition.xyz;
	#include <worldpos_vertex>
	#include <envmap_vertex>
	#include <shadowmap_vertex>
	#include <fog_vertex>
}`,meshphong_frag:`#define PHONG
uniform vec3 diffuse;
uniform vec3 emissive;
uniform vec3 specular;
uniform float shininess;
uniform float opacity;
#include <common>
#include <packing>
#include <dithering_pars_fragment>
#include <color_pars_fragment>
#include <uv_pars_fragment>
#include <map_pars_fragment>
#include <alphamap_pars_fragment>
#include <alphatest_pars_fragment>
#include <alphahash_pars_fragment>
#include <aomap_pars_fragment>
#include <lightmap_pars_fragment>
#include <emissivemap_pars_fragment>
#include <envmap_common_pars_fragment>
#include <envmap_pars_fragment>
#include <fog_pars_fragment>
#include <bsdfs>
#include <lights_pars_begin>
#include <normal_pars_fragment>
#include <lights_phong_pars_fragment>
#include <shadowmap_pars_fragment>
#include <bumpmap_pars_fragment>
#include <normalmap_pars_fragment>
#include <specularmap_pars_fragment>
#include <logdepthbuf_pars_fragment>
#include <clipping_planes_pars_fragment>
void main() {
	vec4 diffuseColor = vec4( diffuse, opacity );
	#include <clipping_planes_fragment>
	ReflectedLight reflectedLight = ReflectedLight( vec3( 0.0 ), vec3( 0.0 ), vec3( 0.0 ), vec3( 0.0 ) );
	vec3 totalEmissiveRadiance = emissive;
	#include <logdepthbuf_fragment>
	#include <map_fragment>
	#include <color_fragment>
	#include <alphamap_fragment>
	#include <alphatest_fragment>
	#include <alphahash_fragment>
	#include <specularmap_fragment>
	#include <normal_fragment_begin>
	#include <normal_fragment_maps>
	#include <emissivemap_fragment>
	#include <lights_phong_fragment>
	#include <lights_fragment_begin>
	#include <lights_fragment_maps>
	#include <lights_fragment_end>
	#include <aomap_fragment>
	vec3 outgoingLight = reflectedLight.directDiffuse + reflectedLight.indirectDiffuse + reflectedLight.directSpecular + reflectedLight.indirectSpecular + totalEmissiveRadiance;
	#include <envmap_fragment>
	#include <opaque_fragment>
	#include <tonemapping_fragment>
	#include <colorspace_fragment>
	#include <fog_fragment>
	#include <premultiplied_alpha_fragment>
	#include <dithering_fragment>
}`,meshphysical_vert:`#define STANDARD
varying vec3 vViewPosition;
#ifdef USE_TRANSMISSION
	varying vec3 vWorldPosition;
#endif
#include <common>
#include <batching_pars_vertex>
#include <uv_pars_vertex>
#include <displacementmap_pars_vertex>
#include <color_pars_vertex>
#include <fog_pars_vertex>
#include <normal_pars_vertex>
#include <morphtarget_pars_vertex>
#include <skinning_pars_vertex>
#include <shadowmap_pars_vertex>
#include <logdepthbuf_pars_vertex>
#include <clipping_planes_pars_vertex>
void main() {
	#include <uv_vertex>
	#include <color_vertex>
	#include <morphinstance_vertex>
	#include <morphcolor_vertex>
	#include <batching_vertex>
	#include <beginnormal_vertex>
	#include <morphnormal_vertex>
	#include <skinbase_vertex>
	#include <skinnormal_vertex>
	#include <defaultnormal_vertex>
	#include <normal_vertex>
	#include <begin_vertex>
	#include <morphtarget_vertex>
	#include <skinning_vertex>
	#include <displacementmap_vertex>
	#include <project_vertex>
	#include <logdepthbuf_vertex>
	#include <clipping_planes_vertex>
	vViewPosition = - mvPosition.xyz;
	#include <worldpos_vertex>
	#include <shadowmap_vertex>
	#include <fog_vertex>
#ifdef USE_TRANSMISSION
	vWorldPosition = worldPosition.xyz;
#endif
}`,meshphysical_frag:`#define STANDARD
#ifdef PHYSICAL
	#define IOR
	#define USE_SPECULAR
#endif
uniform vec3 diffuse;
uniform vec3 emissive;
uniform float roughness;
uniform float metalness;
uniform float opacity;
#ifdef IOR
	uniform float ior;
#endif
#ifdef USE_SPECULAR
	uniform float specularIntensity;
	uniform vec3 specularColor;
	#ifdef USE_SPECULAR_COLORMAP
		uniform sampler2D specularColorMap;
	#endif
	#ifdef USE_SPECULAR_INTENSITYMAP
		uniform sampler2D specularIntensityMap;
	#endif
#endif
#ifdef USE_CLEARCOAT
	uniform float clearcoat;
	uniform float clearcoatRoughness;
#endif
#ifdef USE_DISPERSION
	uniform float dispersion;
#endif
#ifdef USE_IRIDESCENCE
	uniform float iridescence;
	uniform float iridescenceIOR;
	uniform float iridescenceThicknessMinimum;
	uniform float iridescenceThicknessMaximum;
#endif
#ifdef USE_SHEEN
	uniform vec3 sheenColor;
	uniform float sheenRoughness;
	#ifdef USE_SHEEN_COLORMAP
		uniform sampler2D sheenColorMap;
	#endif
	#ifdef USE_SHEEN_ROUGHNESSMAP
		uniform sampler2D sheenRoughnessMap;
	#endif
#endif
#ifdef USE_ANISOTROPY
	uniform vec2 anisotropyVector;
	#ifdef USE_ANISOTROPYMAP
		uniform sampler2D anisotropyMap;
	#endif
#endif
varying vec3 vViewPosition;
#include <common>
#include <packing>
#include <dithering_pars_fragment>
#include <color_pars_fragment>
#include <uv_pars_fragment>
#include <map_pars_fragment>
#include <alphamap_pars_fragment>
#include <alphatest_pars_fragment>
#include <alphahash_pars_fragment>
#include <aomap_pars_fragment>
#include <lightmap_pars_fragment>
#include <emissivemap_pars_fragment>
#include <iridescence_fragment>
#include <cube_uv_reflection_fragment>
#include <envmap_common_pars_fragment>
#include <envmap_physical_pars_fragment>
#include <fog_pars_fragment>
#include <lights_pars_begin>
#include <normal_pars_fragment>
#include <lights_physical_pars_fragment>
#include <transmission_pars_fragment>
#include <shadowmap_pars_fragment>
#include <bumpmap_pars_fragment>
#include <normalmap_pars_fragment>
#include <clearcoat_pars_fragment>
#include <iridescence_pars_fragment>
#include <roughnessmap_pars_fragment>
#include <metalnessmap_pars_fragment>
#include <logdepthbuf_pars_fragment>
#include <clipping_planes_pars_fragment>
void main() {
	vec4 diffuseColor = vec4( diffuse, opacity );
	#include <clipping_planes_fragment>
	ReflectedLight reflectedLight = ReflectedLight( vec3( 0.0 ), vec3( 0.0 ), vec3( 0.0 ), vec3( 0.0 ) );
	vec3 totalEmissiveRadiance = emissive;
	#include <logdepthbuf_fragment>
	#include <map_fragment>
	#include <color_fragment>
	#include <alphamap_fragment>
	#include <alphatest_fragment>
	#include <alphahash_fragment>
	#include <roughnessmap_fragment>
	#include <metalnessmap_fragment>
	#include <normal_fragment_begin>
	#include <normal_fragment_maps>
	#include <clearcoat_normal_fragment_begin>
	#include <clearcoat_normal_fragment_maps>
	#include <emissivemap_fragment>
	#include <lights_physical_fragment>
	#include <lights_fragment_begin>
	#include <lights_fragment_maps>
	#include <lights_fragment_end>
	#include <aomap_fragment>
	vec3 totalDiffuse = reflectedLight.directDiffuse + reflectedLight.indirectDiffuse;
	vec3 totalSpecular = reflectedLight.directSpecular + reflectedLight.indirectSpecular;
	#include <transmission_fragment>
	vec3 outgoingLight = totalDiffuse + totalSpecular + totalEmissiveRadiance;
	#ifdef USE_SHEEN
		float sheenEnergyComp = 1.0 - 0.157 * max3( material.sheenColor );
		outgoingLight = outgoingLight * sheenEnergyComp + sheenSpecularDirect + sheenSpecularIndirect;
	#endif
	#ifdef USE_CLEARCOAT
		float dotNVcc = saturate( dot( geometryClearcoatNormal, geometryViewDir ) );
		vec3 Fcc = F_Schlick( material.clearcoatF0, material.clearcoatF90, dotNVcc );
		outgoingLight = outgoingLight * ( 1.0 - material.clearcoat * Fcc ) + ( clearcoatSpecularDirect + clearcoatSpecularIndirect ) * material.clearcoat;
	#endif
	#include <opaque_fragment>
	#include <tonemapping_fragment>
	#include <colorspace_fragment>
	#include <fog_fragment>
	#include <premultiplied_alpha_fragment>
	#include <dithering_fragment>
}`,meshtoon_vert:`#define TOON
varying vec3 vViewPosition;
#include <common>
#include <batching_pars_vertex>
#include <uv_pars_vertex>
#include <displacementmap_pars_vertex>
#include <color_pars_vertex>
#include <fog_pars_vertex>
#include <normal_pars_vertex>
#include <morphtarget_pars_vertex>
#include <skinning_pars_vertex>
#include <shadowmap_pars_vertex>
#include <logdepthbuf_pars_vertex>
#include <clipping_planes_pars_vertex>
void main() {
	#include <uv_vertex>
	#include <color_vertex>
	#include <morphinstance_vertex>
	#include <morphcolor_vertex>
	#include <batching_vertex>
	#include <beginnormal_vertex>
	#include <morphnormal_vertex>
	#include <skinbase_vertex>
	#include <skinnormal_vertex>
	#include <defaultnormal_vertex>
	#include <normal_vertex>
	#include <begin_vertex>
	#include <morphtarget_vertex>
	#include <skinning_vertex>
	#include <displacementmap_vertex>
	#include <project_vertex>
	#include <logdepthbuf_vertex>
	#include <clipping_planes_vertex>
	vViewPosition = - mvPosition.xyz;
	#include <worldpos_vertex>
	#include <shadowmap_vertex>
	#include <fog_vertex>
}`,meshtoon_frag:`#define TOON
uniform vec3 diffuse;
uniform vec3 emissive;
uniform float opacity;
#include <common>
#include <packing>
#include <dithering_pars_fragment>
#include <color_pars_fragment>
#include <uv_pars_fragment>
#include <map_pars_fragment>
#include <alphamap_pars_fragment>
#include <alphatest_pars_fragment>
#include <alphahash_pars_fragment>
#include <aomap_pars_fragment>
#include <lightmap_pars_fragment>
#include <emissivemap_pars_fragment>
#include <gradientmap_pars_fragment>
#include <fog_pars_fragment>
#include <bsdfs>
#include <lights_pars_begin>
#include <normal_pars_fragment>
#include <lights_toon_pars_fragment>
#include <shadowmap_pars_fragment>
#include <bumpmap_pars_fragment>
#include <normalmap_pars_fragment>
#include <logdepthbuf_pars_fragment>
#include <clipping_planes_pars_fragment>
void main() {
	vec4 diffuseColor = vec4( diffuse, opacity );
	#include <clipping_planes_fragment>
	ReflectedLight reflectedLight = ReflectedLight( vec3( 0.0 ), vec3( 0.0 ), vec3( 0.0 ), vec3( 0.0 ) );
	vec3 totalEmissiveRadiance = emissive;
	#include <logdepthbuf_fragment>
	#include <map_fragment>
	#include <color_fragment>
	#include <alphamap_fragment>
	#include <alphatest_fragment>
	#include <alphahash_fragment>
	#include <normal_fragment_begin>
	#include <normal_fragment_maps>
	#include <emissivemap_fragment>
	#include <lights_toon_fragment>
	#include <lights_fragment_begin>
	#include <lights_fragment_maps>
	#include <lights_fragment_end>
	#include <aomap_fragment>
	vec3 outgoingLight = reflectedLight.directDiffuse + reflectedLight.indirectDiffuse + totalEmissiveRadiance;
	#include <opaque_fragment>
	#include <tonemapping_fragment>
	#include <colorspace_fragment>
	#include <fog_fragment>
	#include <premultiplied_alpha_fragment>
	#include <dithering_fragment>
}`,points_vert:`uniform float size;
uniform float scale;
#include <common>
#include <color_pars_vertex>
#include <fog_pars_vertex>
#include <morphtarget_pars_vertex>
#include <logdepthbuf_pars_vertex>
#include <clipping_planes_pars_vertex>
#ifdef USE_POINTS_UV
	varying vec2 vUv;
	uniform mat3 uvTransform;
#endif
void main() {
	#ifdef USE_POINTS_UV
		vUv = ( uvTransform * vec3( uv, 1 ) ).xy;
	#endif
	#include <color_vertex>
	#include <morphinstance_vertex>
	#include <morphcolor_vertex>
	#include <begin_vertex>
	#include <morphtarget_vertex>
	#include <project_vertex>
	gl_PointSize = size;
	#ifdef USE_SIZEATTENUATION
		bool isPerspective = isPerspectiveMatrix( projectionMatrix );
		if ( isPerspective ) gl_PointSize *= ( scale / - mvPosition.z );
	#endif
	#include <logdepthbuf_vertex>
	#include <clipping_planes_vertex>
	#include <worldpos_vertex>
	#include <fog_vertex>
}`,points_frag:`uniform vec3 diffuse;
uniform float opacity;
#include <common>
#include <color_pars_fragment>
#include <map_particle_pars_fragment>
#include <alphatest_pars_fragment>
#include <alphahash_pars_fragment>
#include <fog_pars_fragment>
#include <logdepthbuf_pars_fragment>
#include <clipping_planes_pars_fragment>
void main() {
	vec4 diffuseColor = vec4( diffuse, opacity );
	#include <clipping_planes_fragment>
	vec3 outgoingLight = vec3( 0.0 );
	#include <logdepthbuf_fragment>
	#include <map_particle_fragment>
	#include <color_fragment>
	#include <alphatest_fragment>
	#include <alphahash_fragment>
	outgoingLight = diffuseColor.rgb;
	#include <opaque_fragment>
	#include <tonemapping_fragment>
	#include <colorspace_fragment>
	#include <fog_fragment>
	#include <premultiplied_alpha_fragment>
}`,shadow_vert:`#include <common>
#include <batching_pars_vertex>
#include <fog_pars_vertex>
#include <morphtarget_pars_vertex>
#include <skinning_pars_vertex>
#include <logdepthbuf_pars_vertex>
#include <shadowmap_pars_vertex>
void main() {
	#include <batching_vertex>
	#include <beginnormal_vertex>
	#include <morphinstance_vertex>
	#include <morphnormal_vertex>
	#include <skinbase_vertex>
	#include <skinnormal_vertex>
	#include <defaultnormal_vertex>
	#include <begin_vertex>
	#include <morphtarget_vertex>
	#include <skinning_vertex>
	#include <project_vertex>
	#include <logdepthbuf_vertex>
	#include <worldpos_vertex>
	#include <shadowmap_vertex>
	#include <fog_vertex>
}`,shadow_frag:`uniform vec3 color;
uniform float opacity;
#include <common>
#include <packing>
#include <fog_pars_fragment>
#include <bsdfs>
#include <lights_pars_begin>
#include <logdepthbuf_pars_fragment>
#include <shadowmap_pars_fragment>
#include <shadowmask_pars_fragment>
void main() {
	#include <logdepthbuf_fragment>
	gl_FragColor = vec4( color, opacity * ( 1.0 - getShadowMask() ) );
	#include <tonemapping_fragment>
	#include <colorspace_fragment>
	#include <fog_fragment>
}`,sprite_vert:`uniform float rotation;
uniform vec2 center;
#include <common>
#include <uv_pars_vertex>
#include <fog_pars_vertex>
#include <logdepthbuf_pars_vertex>
#include <clipping_planes_pars_vertex>
void main() {
	#include <uv_vertex>
	vec4 mvPosition = modelViewMatrix[ 3 ];
	vec2 scale = vec2( length( modelMatrix[ 0 ].xyz ), length( modelMatrix[ 1 ].xyz ) );
	#ifndef USE_SIZEATTENUATION
		bool isPerspective = isPerspectiveMatrix( projectionMatrix );
		if ( isPerspective ) scale *= - mvPosition.z;
	#endif
	vec2 alignedPosition = ( position.xy - ( center - vec2( 0.5 ) ) ) * scale;
	vec2 rotatedPosition;
	rotatedPosition.x = cos( rotation ) * alignedPosition.x - sin( rotation ) * alignedPosition.y;
	rotatedPosition.y = sin( rotation ) * alignedPosition.x + cos( rotation ) * alignedPosition.y;
	mvPosition.xy += rotatedPosition;
	gl_Position = projectionMatrix * mvPosition;
	#include <logdepthbuf_vertex>
	#include <clipping_planes_vertex>
	#include <fog_vertex>
}`,sprite_frag:`uniform vec3 diffuse;
uniform float opacity;
#include <common>
#include <uv_pars_fragment>
#include <map_pars_fragment>
#include <alphamap_pars_fragment>
#include <alphatest_pars_fragment>
#include <alphahash_pars_fragment>
#include <fog_pars_fragment>
#include <logdepthbuf_pars_fragment>
#include <clipping_planes_pars_fragment>
void main() {
	vec4 diffuseColor = vec4( diffuse, opacity );
	#include <clipping_planes_fragment>
	vec3 outgoingLight = vec3( 0.0 );
	#include <logdepthbuf_fragment>
	#include <map_fragment>
	#include <alphamap_fragment>
	#include <alphatest_fragment>
	#include <alphahash_fragment>
	outgoingLight = diffuseColor.rgb;
	#include <opaque_fragment>
	#include <tonemapping_fragment>
	#include <colorspace_fragment>
	#include <fog_fragment>
}`},vt={common:{diffuse:{value:new oe(16777215)},opacity:{value:1},map:{value:null},mapTransform:{value:new Zt},alphaMap:{value:null},alphaMapTransform:{value:new Zt},alphaTest:{value:0}},specularmap:{specularMap:{value:null},specularMapTransform:{value:new Zt}},envmap:{envMap:{value:null},envMapRotation:{value:new Zt},flipEnvMap:{value:-1},reflectivity:{value:1},ior:{value:1.5},refractionRatio:{value:.98}},aomap:{aoMap:{value:null},aoMapIntensity:{value:1},aoMapTransform:{value:new Zt}},lightmap:{lightMap:{value:null},lightMapIntensity:{value:1},lightMapTransform:{value:new Zt}},bumpmap:{bumpMap:{value:null},bumpMapTransform:{value:new Zt},bumpScale:{value:1}},normalmap:{normalMap:{value:null},normalMapTransform:{value:new Zt},normalScale:{value:new Se(1,1)}},displacementmap:{displacementMap:{value:null},displacementMapTransform:{value:new Zt},displacementScale:{value:1},displacementBias:{value:0}},emissivemap:{emissiveMap:{value:null},emissiveMapTransform:{value:new Zt}},metalnessmap:{metalnessMap:{value:null},metalnessMapTransform:{value:new Zt}},roughnessmap:{roughnessMap:{value:null},roughnessMapTransform:{value:new Zt}},gradientmap:{gradientMap:{value:null}},fog:{fogDensity:{value:25e-5},fogNear:{value:1},fogFar:{value:2e3},fogColor:{value:new oe(16777215)}},lights:{ambientLightColor:{value:[]},lightProbe:{value:[]},directionalLights:{value:[],properties:{direction:{},color:{}}},directionalLightShadows:{value:[],properties:{shadowIntensity:1,shadowBias:{},shadowNormalBias:{},shadowRadius:{},shadowMapSize:{}}},directionalShadowMap:{value:[]},directionalShadowMatrix:{value:[]},spotLights:{value:[],properties:{color:{},position:{},direction:{},distance:{},coneCos:{},penumbraCos:{},decay:{}}},spotLightShadows:{value:[],properties:{shadowIntensity:1,shadowBias:{},shadowNormalBias:{},shadowRadius:{},shadowMapSize:{}}},spotLightMap:{value:[]},spotShadowMap:{value:[]},spotLightMatrix:{value:[]},pointLights:{value:[],properties:{color:{},position:{},decay:{},distance:{}}},pointLightShadows:{value:[],properties:{shadowIntensity:1,shadowBias:{},shadowNormalBias:{},shadowRadius:{},shadowMapSize:{},shadowCameraNear:{},shadowCameraFar:{}}},pointShadowMap:{value:[]},pointShadowMatrix:{value:[]},hemisphereLights:{value:[],properties:{direction:{},skyColor:{},groundColor:{}}},rectAreaLights:{value:[],properties:{color:{},position:{},width:{},height:{}}},ltc_1:{value:null},ltc_2:{value:null}},points:{diffuse:{value:new oe(16777215)},opacity:{value:1},size:{value:1},scale:{value:1},map:{value:null},alphaMap:{value:null},alphaMapTransform:{value:new Zt},alphaTest:{value:0},uvTransform:{value:new Zt}},sprite:{diffuse:{value:new oe(16777215)},opacity:{value:1},center:{value:new Se(.5,.5)},rotation:{value:0},map:{value:null},mapTransform:{value:new Zt},alphaMap:{value:null},alphaMapTransform:{value:new Zt},alphaTest:{value:0}}},xi={basic:{uniforms:mn([vt.common,vt.specularmap,vt.envmap,vt.aomap,vt.lightmap,vt.fog]),vertexShader:Jt.meshbasic_vert,fragmentShader:Jt.meshbasic_frag},lambert:{uniforms:mn([vt.common,vt.specularmap,vt.envmap,vt.aomap,vt.lightmap,vt.emissivemap,vt.bumpmap,vt.normalmap,vt.displacementmap,vt.fog,vt.lights,{emissive:{value:new oe(0)}}]),vertexShader:Jt.meshlambert_vert,fragmentShader:Jt.meshlambert_frag},phong:{uniforms:mn([vt.common,vt.specularmap,vt.envmap,vt.aomap,vt.lightmap,vt.emissivemap,vt.bumpmap,vt.normalmap,vt.displacementmap,vt.fog,vt.lights,{emissive:{value:new oe(0)},specular:{value:new oe(1118481)},shininess:{value:30}}]),vertexShader:Jt.meshphong_vert,fragmentShader:Jt.meshphong_frag},standard:{uniforms:mn([vt.common,vt.envmap,vt.aomap,vt.lightmap,vt.emissivemap,vt.bumpmap,vt.normalmap,vt.displacementmap,vt.roughnessmap,vt.metalnessmap,vt.fog,vt.lights,{emissive:{value:new oe(0)},roughness:{value:1},metalness:{value:0},envMapIntensity:{value:1}}]),vertexShader:Jt.meshphysical_vert,fragmentShader:Jt.meshphysical_frag},toon:{uniforms:mn([vt.common,vt.aomap,vt.lightmap,vt.emissivemap,vt.bumpmap,vt.normalmap,vt.displacementmap,vt.gradientmap,vt.fog,vt.lights,{emissive:{value:new oe(0)}}]),vertexShader:Jt.meshtoon_vert,fragmentShader:Jt.meshtoon_frag},matcap:{uniforms:mn([vt.common,vt.bumpmap,vt.normalmap,vt.displacementmap,vt.fog,{matcap:{value:null}}]),vertexShader:Jt.meshmatcap_vert,fragmentShader:Jt.meshmatcap_frag},points:{uniforms:mn([vt.points,vt.fog]),vertexShader:Jt.points_vert,fragmentShader:Jt.points_frag},dashed:{uniforms:mn([vt.common,vt.fog,{scale:{value:1},dashSize:{value:1},totalSize:{value:2}}]),vertexShader:Jt.linedashed_vert,fragmentShader:Jt.linedashed_frag},depth:{uniforms:mn([vt.common,vt.displacementmap]),vertexShader:Jt.depth_vert,fragmentShader:Jt.depth_frag},normal:{uniforms:mn([vt.common,vt.bumpmap,vt.normalmap,vt.displacementmap,{opacity:{value:1}}]),vertexShader:Jt.meshnormal_vert,fragmentShader:Jt.meshnormal_frag},sprite:{uniforms:mn([vt.sprite,vt.fog]),vertexShader:Jt.sprite_vert,fragmentShader:Jt.sprite_frag},background:{uniforms:{uvTransform:{value:new Zt},t2D:{value:null},backgroundIntensity:{value:1}},vertexShader:Jt.background_vert,fragmentShader:Jt.background_frag},backgroundCube:{uniforms:{envMap:{value:null},flipEnvMap:{value:-1},backgroundBlurriness:{value:0},backgroundIntensity:{value:1},backgroundRotation:{value:new Zt}},vertexShader:Jt.backgroundCube_vert,fragmentShader:Jt.backgroundCube_frag},cube:{uniforms:{tCube:{value:null},tFlip:{value:-1},opacity:{value:1}},vertexShader:Jt.cube_vert,fragmentShader:Jt.cube_frag},equirect:{uniforms:{tEquirect:{value:null}},vertexShader:Jt.equirect_vert,fragmentShader:Jt.equirect_frag},distanceRGBA:{uniforms:mn([vt.common,vt.displacementmap,{referencePosition:{value:new Z},nearDistance:{value:1},farDistance:{value:1e3}}]),vertexShader:Jt.distanceRGBA_vert,fragmentShader:Jt.distanceRGBA_frag},shadow:{uniforms:mn([vt.lights,vt.fog,{color:{value:new oe(0)},opacity:{value:1}}]),vertexShader:Jt.shadow_vert,fragmentShader:Jt.shadow_frag}};xi.physical={uniforms:mn([xi.standard.uniforms,{clearcoat:{value:0},clearcoatMap:{value:null},clearcoatMapTransform:{value:new Zt},clearcoatNormalMap:{value:null},clearcoatNormalMapTransform:{value:new Zt},clearcoatNormalScale:{value:new Se(1,1)},clearcoatRoughness:{value:0},clearcoatRoughnessMap:{value:null},clearcoatRoughnessMapTransform:{value:new Zt},dispersion:{value:0},iridescence:{value:0},iridescenceMap:{value:null},iridescenceMapTransform:{value:new Zt},iridescenceIOR:{value:1.3},iridescenceThicknessMinimum:{value:100},iridescenceThicknessMaximum:{value:400},iridescenceThicknessMap:{value:null},iridescenceThicknessMapTransform:{value:new Zt},sheen:{value:0},sheenColor:{value:new oe(0)},sheenColorMap:{value:null},sheenColorMapTransform:{value:new Zt},sheenRoughness:{value:1},sheenRoughnessMap:{value:null},sheenRoughnessMapTransform:{value:new Zt},transmission:{value:0},transmissionMap:{value:null},transmissionMapTransform:{value:new Zt},transmissionSamplerSize:{value:new Se},transmissionSamplerMap:{value:null},thickness:{value:0},thicknessMap:{value:null},thicknessMapTransform:{value:new Zt},attenuationDistance:{value:0},attenuationColor:{value:new oe(0)},specularColor:{value:new oe(1,1,1)},specularColorMap:{value:null},specularColorMapTransform:{value:new Zt},specularIntensity:{value:1},specularIntensityMap:{value:null},specularIntensityMapTransform:{value:new Zt},anisotropyVector:{value:new Se},anisotropyMap:{value:null},anisotropyMapTransform:{value:new Zt}}]),vertexShader:Jt.meshphysical_vert,fragmentShader:Jt.meshphysical_frag};const ll={r:0,b:0,g:0},Xr=new Ui,_x=new Pe;function gx(r,t,e,n,i,s,o){const a=new oe(0);let l=s===!0?0:1,c,u,f=null,h=0,d=null;function _(y){let E=y.isScene===!0?y.background:null;return E&&E.isTexture&&(E=(y.backgroundBlurriness>0?e:t).get(E)),E}function g(y){let E=!1;const v=_(y);v===null?p(a,l):v&&v.isColor&&(p(v,1),E=!0);const C=r.xr.getEnvironmentBlendMode();C==="additive"?n.buffers.color.setClear(0,0,0,1,o):C==="alpha-blend"&&n.buffers.color.setClear(0,0,0,0,o),(r.autoClear||E)&&(n.buffers.depth.setTest(!0),n.buffers.depth.setMask(!0),n.buffers.color.setMask(!0),r.clear(r.autoClearColor,r.autoClearDepth,r.autoClearStencil))}function m(y,E){const v=_(E);v&&(v.isCubeTexture||v.mapping===Ia)?(u===void 0&&(u=new ai(new ks(1,1,1),new ur({name:"BackgroundCubeMaterial",uniforms:Hs(xi.backgroundCube.uniforms),vertexShader:xi.backgroundCube.vertexShader,fragmentShader:xi.backgroundCube.fragmentShader,side:bn,depthTest:!1,depthWrite:!1,fog:!1})),u.geometry.deleteAttribute("normal"),u.geometry.deleteAttribute("uv"),u.onBeforeRender=function(C,w,b){this.matrixWorld.copyPosition(b.matrixWorld)},Object.defineProperty(u.material,"envMap",{get:function(){return this.uniforms.envMap.value}}),i.update(u)),Xr.copy(E.backgroundRotation),Xr.x*=-1,Xr.y*=-1,Xr.z*=-1,v.isCubeTexture&&v.isRenderTargetTexture===!1&&(Xr.y*=-1,Xr.z*=-1),u.material.uniforms.envMap.value=v,u.material.uniforms.flipEnvMap.value=v.isCubeTexture&&v.isRenderTargetTexture===!1?-1:1,u.material.uniforms.backgroundBlurriness.value=E.backgroundBlurriness,u.material.uniforms.backgroundIntensity.value=E.backgroundIntensity,u.material.uniforms.backgroundRotation.value.setFromMatrix4(_x.makeRotationFromEuler(Xr)),u.material.toneMapped=ae.getTransfer(v.colorSpace)!==ge,(f!==v||h!==v.version||d!==r.toneMapping)&&(u.material.needsUpdate=!0,f=v,h=v.version,d=r.toneMapping),u.layers.enableAll(),y.unshift(u,u.geometry,u.material,0,0,null)):v&&v.isTexture&&(c===void 0&&(c=new ai(new al(2,2),new ur({name:"BackgroundMaterial",uniforms:Hs(xi.background.uniforms),vertexShader:xi.background.vertexShader,fragmentShader:xi.background.fragmentShader,side:er,depthTest:!1,depthWrite:!1,fog:!1})),c.geometry.deleteAttribute("normal"),Object.defineProperty(c.material,"map",{get:function(){return this.uniforms.t2D.value}}),i.update(c)),c.material.uniforms.t2D.value=v,c.material.uniforms.backgroundIntensity.value=E.backgroundIntensity,c.material.toneMapped=ae.getTransfer(v.colorSpace)!==ge,v.matrixAutoUpdate===!0&&v.updateMatrix(),c.material.uniforms.uvTransform.value.copy(v.matrix),(f!==v||h!==v.version||d!==r.toneMapping)&&(c.material.needsUpdate=!0,f=v,h=v.version,d=r.toneMapping),c.layers.enableAll(),y.unshift(c,c.geometry,c.material,0,0,null))}function p(y,E){y.getRGB(ll,ap(r)),n.buffers.color.setClear(ll.r,ll.g,ll.b,E,o)}return{getClearColor:function(){return a},setClearColor:function(y,E=1){a.set(y),l=E,p(a,l)},getClearAlpha:function(){return l},setClearAlpha:function(y){l=y,p(a,l)},render:g,addToRenderList:m}}function vx(r,t){const e=r.getParameter(r.MAX_VERTEX_ATTRIBS),n={},i=h(null);let s=i,o=!1;function a(x,L,F,B,G){let j=!1;const Y=f(B,F,L);s!==Y&&(s=Y,c(s.object)),j=d(x,B,F,G),j&&_(x,B,F,G),G!==null&&t.update(G,r.ELEMENT_ARRAY_BUFFER),(j||o)&&(o=!1,v(x,L,F,B),G!==null&&r.bindBuffer(r.ELEMENT_ARRAY_BUFFER,t.get(G).buffer))}function l(){return r.createVertexArray()}function c(x){return r.bindVertexArray(x)}function u(x){return r.deleteVertexArray(x)}function f(x,L,F){const B=F.wireframe===!0;let G=n[x.id];G===void 0&&(G={},n[x.id]=G);let j=G[L.id];j===void 0&&(j={},G[L.id]=j);let Y=j[B];return Y===void 0&&(Y=h(l()),j[B]=Y),Y}function h(x){const L=[],F=[],B=[];for(let G=0;G<e;G++)L[G]=0,F[G]=0,B[G]=0;return{geometry:null,program:null,wireframe:!1,newAttributes:L,enabledAttributes:F,attributeDivisors:B,object:x,attributes:{},index:null}}function d(x,L,F,B){const G=s.attributes,j=L.attributes;let Y=0;const $=F.getAttributes();for(const H in $)if($[H].location>=0){const P=G[H];let ut=j[H];if(ut===void 0&&(H==="instanceMatrix"&&x.instanceMatrix&&(ut=x.instanceMatrix),H==="instanceColor"&&x.instanceColor&&(ut=x.instanceColor)),P===void 0||P.attribute!==ut||ut&&P.data!==ut.data)return!0;Y++}return s.attributesNum!==Y||s.index!==B}function _(x,L,F,B){const G={},j=L.attributes;let Y=0;const $=F.getAttributes();for(const H in $)if($[H].location>=0){let P=j[H];P===void 0&&(H==="instanceMatrix"&&x.instanceMatrix&&(P=x.instanceMatrix),H==="instanceColor"&&x.instanceColor&&(P=x.instanceColor));const ut={};ut.attribute=P,P&&P.data&&(ut.data=P.data),G[H]=ut,Y++}s.attributes=G,s.attributesNum=Y,s.index=B}function g(){const x=s.newAttributes;for(let L=0,F=x.length;L<F;L++)x[L]=0}function m(x){p(x,0)}function p(x,L){const F=s.newAttributes,B=s.enabledAttributes,G=s.attributeDivisors;F[x]=1,B[x]===0&&(r.enableVertexAttribArray(x),B[x]=1),G[x]!==L&&(r.vertexAttribDivisor(x,L),G[x]=L)}function y(){const x=s.newAttributes,L=s.enabledAttributes;for(let F=0,B=L.length;F<B;F++)L[F]!==x[F]&&(r.disableVertexAttribArray(F),L[F]=0)}function E(x,L,F,B,G,j,Y){Y===!0?r.vertexAttribIPointer(x,L,F,G,j):r.vertexAttribPointer(x,L,F,B,G,j)}function v(x,L,F,B){g();const G=B.attributes,j=F.getAttributes(),Y=L.defaultAttributeValues;for(const $ in j){const H=j[$];if(H.location>=0){let it=G[$];if(it===void 0&&($==="instanceMatrix"&&x.instanceMatrix&&(it=x.instanceMatrix),$==="instanceColor"&&x.instanceColor&&(it=x.instanceColor)),it!==void 0){const P=it.normalized,ut=it.itemSize,Ut=t.get(it);if(Ut===void 0)continue;const $t=Ut.buffer,J=Ut.type,nt=Ut.bytesPerElement,dt=J===r.INT||J===r.UNSIGNED_INT||it.gpuType===zc;if(it.isInterleavedBufferAttribute){const et=it.data,Mt=et.stride,At=it.offset;if(et.isInstancedInterleavedBuffer){for(let zt=0;zt<H.locationSize;zt++)p(H.location+zt,et.meshPerAttribute);x.isInstancedMesh!==!0&&B._maxInstanceCount===void 0&&(B._maxInstanceCount=et.meshPerAttribute*et.count)}else for(let zt=0;zt<H.locationSize;zt++)m(H.location+zt);r.bindBuffer(r.ARRAY_BUFFER,$t);for(let zt=0;zt<H.locationSize;zt++)E(H.location+zt,ut/H.locationSize,J,P,Mt*nt,(At+ut/H.locationSize*zt)*nt,dt)}else{if(it.isInstancedBufferAttribute){for(let et=0;et<H.locationSize;et++)p(H.location+et,it.meshPerAttribute);x.isInstancedMesh!==!0&&B._maxInstanceCount===void 0&&(B._maxInstanceCount=it.meshPerAttribute*it.count)}else for(let et=0;et<H.locationSize;et++)m(H.location+et);r.bindBuffer(r.ARRAY_BUFFER,$t);for(let et=0;et<H.locationSize;et++)E(H.location+et,ut/H.locationSize,J,P,ut*nt,ut/H.locationSize*et*nt,dt)}}else if(Y!==void 0){const P=Y[$];if(P!==void 0)switch(P.length){case 2:r.vertexAttrib2fv(H.location,P);break;case 3:r.vertexAttrib3fv(H.location,P);break;case 4:r.vertexAttrib4fv(H.location,P);break;default:r.vertexAttrib1fv(H.location,P)}}}}y()}function C(){R();for(const x in n){const L=n[x];for(const F in L){const B=L[F];for(const G in B)u(B[G].object),delete B[G];delete L[F]}delete n[x]}}function w(x){if(n[x.id]===void 0)return;const L=n[x.id];for(const F in L){const B=L[F];for(const G in B)u(B[G].object),delete B[G];delete L[F]}delete n[x.id]}function b(x){for(const L in n){const F=n[L];if(F[x.id]===void 0)continue;const B=F[x.id];for(const G in B)u(B[G].object),delete B[G];delete F[x.id]}}function R(){S(),o=!0,s!==i&&(s=i,c(s.object))}function S(){i.geometry=null,i.program=null,i.wireframe=!1}return{setup:a,reset:R,resetDefaultState:S,dispose:C,releaseStatesOfGeometry:w,releaseStatesOfProgram:b,initAttributes:g,enableAttribute:m,disableUnusedAttributes:y}}function xx(r,t,e){let n;function i(c){n=c}function s(c,u){r.drawArrays(n,c,u),e.update(u,n,1)}function o(c,u,f){f!==0&&(r.drawArraysInstanced(n,c,u,f),e.update(u,n,f))}function a(c,u,f){if(f===0)return;t.get("WEBGL_multi_draw").multiDrawArraysWEBGL(n,c,0,u,0,f);let d=0;for(let _=0;_<f;_++)d+=u[_];e.update(d,n,1)}function l(c,u,f,h){if(f===0)return;const d=t.get("WEBGL_multi_draw");if(d===null)for(let _=0;_<c.length;_++)o(c[_],u[_],h[_]);else{d.multiDrawArraysInstancedWEBGL(n,c,0,u,0,h,0,f);let _=0;for(let g=0;g<f;g++)_+=u[g]*h[g];e.update(_,n,1)}}this.setMode=i,this.render=s,this.renderInstances=o,this.renderMultiDraw=a,this.renderMultiDrawInstances=l}function Sx(r,t,e,n){let i;function s(){if(i!==void 0)return i;if(t.has("EXT_texture_filter_anisotropic")===!0){const b=t.get("EXT_texture_filter_anisotropic");i=r.getParameter(b.MAX_TEXTURE_MAX_ANISOTROPY_EXT)}else i=0;return i}function o(b){return!(b!==ei&&n.convert(b)!==r.getParameter(r.IMPLEMENTATION_COLOR_READ_FORMAT))}function a(b){const R=b===Io&&(t.has("EXT_color_buffer_half_float")||t.has("EXT_color_buffer_float"));return!(b!==Ci&&n.convert(b)!==r.getParameter(r.IMPLEMENTATION_COLOR_READ_TYPE)&&b!==vi&&!R)}function l(b){if(b==="highp"){if(r.getShaderPrecisionFormat(r.VERTEX_SHADER,r.HIGH_FLOAT).precision>0&&r.getShaderPrecisionFormat(r.FRAGMENT_SHADER,r.HIGH_FLOAT).precision>0)return"highp";b="mediump"}return b==="mediump"&&r.getShaderPrecisionFormat(r.VERTEX_SHADER,r.MEDIUM_FLOAT).precision>0&&r.getShaderPrecisionFormat(r.FRAGMENT_SHADER,r.MEDIUM_FLOAT).precision>0?"mediump":"lowp"}let c=e.precision!==void 0?e.precision:"highp";const u=l(c);u!==c&&(console.warn("THREE.WebGLRenderer:",c,"not supported, using",u,"instead."),c=u);const f=e.logarithmicDepthBuffer===!0,h=e.reverseDepthBuffer===!0&&t.has("EXT_clip_control"),d=r.getParameter(r.MAX_TEXTURE_IMAGE_UNITS),_=r.getParameter(r.MAX_VERTEX_TEXTURE_IMAGE_UNITS),g=r.getParameter(r.MAX_TEXTURE_SIZE),m=r.getParameter(r.MAX_CUBE_MAP_TEXTURE_SIZE),p=r.getParameter(r.MAX_VERTEX_ATTRIBS),y=r.getParameter(r.MAX_VERTEX_UNIFORM_VECTORS),E=r.getParameter(r.MAX_VARYING_VECTORS),v=r.getParameter(r.MAX_FRAGMENT_UNIFORM_VECTORS),C=_>0,w=r.getParameter(r.MAX_SAMPLES);return{isWebGL2:!0,getMaxAnisotropy:s,getMaxPrecision:l,textureFormatReadable:o,textureTypeReadable:a,precision:c,logarithmicDepthBuffer:f,reverseDepthBuffer:h,maxTextures:d,maxVertexTextures:_,maxTextureSize:g,maxCubemapSize:m,maxAttributes:p,maxVertexUniforms:y,maxVaryings:E,maxFragmentUniforms:v,vertexTextures:C,maxSamples:w}}function Mx(r){const t=this;let e=null,n=0,i=!1,s=!1;const o=new Gr,a=new Zt,l={value:null,needsUpdate:!1};this.uniform=l,this.numPlanes=0,this.numIntersection=0,this.init=function(f,h){const d=f.length!==0||h||n!==0||i;return i=h,n=f.length,d},this.beginShadows=function(){s=!0,u(null)},this.endShadows=function(){s=!1},this.setGlobalState=function(f,h){e=u(f,h,0)},this.setState=function(f,h,d){const _=f.clippingPlanes,g=f.clipIntersection,m=f.clipShadows,p=r.get(f);if(!i||_===null||_.length===0||s&&!m)s?u(null):c();else{const y=s?0:n,E=y*4;let v=p.clippingState||null;l.value=v,v=u(_,h,E,d);for(let C=0;C!==E;++C)v[C]=e[C];p.clippingState=v,this.numIntersection=g?this.numPlanes:0,this.numPlanes+=y}};function c(){l.value!==e&&(l.value=e,l.needsUpdate=n>0),t.numPlanes=n,t.numIntersection=0}function u(f,h,d,_){const g=f!==null?f.length:0;let m=null;if(g!==0){if(m=l.value,_!==!0||m===null){const p=d+g*4,y=h.matrixWorldInverse;a.getNormalMatrix(y),(m===null||m.length<p)&&(m=new Float32Array(p));for(let E=0,v=d;E!==g;++E,v+=4)o.copy(f[E]).applyMatrix4(y,a),o.normal.toArray(m,v),m[v+3]=o.constant}l.value=m,l.needsUpdate=!0}return t.numPlanes=g,t.numIntersection=0,m}}function yx(r){let t=new WeakMap;function e(o,a){return a===Uc?o.mapping=Ms:a===Nc&&(o.mapping=ys),o}function n(o){if(o&&o.isTexture){const a=o.mapping;if(a===Uc||a===Nc)if(t.has(o)){const l=t.get(o).texture;return e(l,o.mapping)}else{const l=o.image;if(l&&l.height>0){const c=new d0(l.height);return c.fromEquirectangularTexture(r,o),t.set(o,c),o.addEventListener("dispose",i),e(c.texture,o.mapping)}else return null}}return o}function i(o){const a=o.target;a.removeEventListener("dispose",i);const l=t.get(a);l!==void 0&&(t.delete(a),l.dispose())}function s(){t=new WeakMap}return{get:n,dispose:s}}class Ex extends lp{constructor(t=-1,e=1,n=1,i=-1,s=.1,o=2e3){super(),this.isOrthographicCamera=!0,this.type="OrthographicCamera",this.zoom=1,this.view=null,this.left=t,this.right=e,this.top=n,this.bottom=i,this.near=s,this.far=o,this.updateProjectionMatrix()}copy(t,e){return super.copy(t,e),this.left=t.left,this.right=t.right,this.top=t.top,this.bottom=t.bottom,this.near=t.near,this.far=t.far,this.zoom=t.zoom,this.view=t.view===null?null:Object.assign({},t.view),this}setViewOffset(t,e,n,i,s,o){this.view===null&&(this.view={enabled:!0,fullWidth:1,fullHeight:1,offsetX:0,offsetY:0,width:1,height:1}),this.view.enabled=!0,this.view.fullWidth=t,this.view.fullHeight=e,this.view.offsetX=n,this.view.offsetY=i,this.view.width=s,this.view.height=o,this.updateProjectionMatrix()}clearViewOffset(){this.view!==null&&(this.view.enabled=!1),this.updateProjectionMatrix()}updateProjectionMatrix(){const t=(this.right-this.left)/(2*this.zoom),e=(this.top-this.bottom)/(2*this.zoom),n=(this.right+this.left)/2,i=(this.top+this.bottom)/2;let s=n-t,o=n+t,a=i+e,l=i-e;if(this.view!==null&&this.view.enabled){const c=(this.right-this.left)/this.view.fullWidth/this.zoom,u=(this.top-this.bottom)/this.view.fullHeight/this.zoom;s+=c*this.view.offsetX,o=s+c*this.view.width,a-=u*this.view.offsetY,l=a-u*this.view.height}this.projectionMatrix.makeOrthographic(s,o,a,l,this.near,this.far,this.coordinateSystem),this.projectionMatrixInverse.copy(this.projectionMatrix).invert()}toJSON(t){const e=super.toJSON(t);return e.object.zoom=this.zoom,e.object.left=this.left,e.object.right=this.right,e.object.top=this.top,e.object.bottom=this.bottom,e.object.near=this.near,e.object.far=this.far,this.view!==null&&(e.object.view=Object.assign({},this.view)),e}}const Ws=4,pp=[.125,.215,.35,.446,.526,.582],Yr=20,Vu=new Ex,mp=new oe;let Gu=null,Wu=0,Xu=0,Yu=!1;const qr=(1+Math.sqrt(5))/2,Xs=1/qr,_p=[new Z(-qr,Xs,0),new Z(qr,Xs,0),new Z(-Xs,0,qr),new Z(Xs,0,qr),new Z(0,qr,-Xs),new Z(0,qr,Xs),new Z(-1,1,-1),new Z(1,1,-1),new Z(-1,1,1),new Z(1,1,1)];class gp{constructor(t){this._renderer=t,this._pingPongRenderTarget=null,this._lodMax=0,this._cubeSize=0,this._lodPlanes=[],this._sizeLods=[],this._sigmas=[],this._blurMaterial=null,this._cubemapMaterial=null,this._equirectMaterial=null,this._compileMaterial(this._blurMaterial)}fromScene(t,e=0,n=.1,i=100){Gu=this._renderer.getRenderTarget(),Wu=this._renderer.getActiveCubeFace(),Xu=this._renderer.getActiveMipmapLevel(),Yu=this._renderer.xr.enabled,this._renderer.xr.enabled=!1,this._setSize(256);const s=this._allocateTargets();return s.depthBuffer=!0,this._sceneToCubeUV(t,n,i,s),e>0&&this._blur(s,0,0,e),this._applyPMREM(s),this._cleanup(s),s}fromEquirectangular(t,e=null){return this._fromTexture(t,e)}fromCubemap(t,e=null){return this._fromTexture(t,e)}compileCubemapShader(){this._cubemapMaterial===null&&(this._cubemapMaterial=Sp(),this._compileMaterial(this._cubemapMaterial))}compileEquirectangularShader(){this._equirectMaterial===null&&(this._equirectMaterial=xp(),this._compileMaterial(this._equirectMaterial))}dispose(){this._dispose(),this._cubemapMaterial!==null&&this._cubemapMaterial.dispose(),this._equirectMaterial!==null&&this._equirectMaterial.dispose()}_setSize(t){this._lodMax=Math.floor(Math.log2(t)),this._cubeSize=Math.pow(2,this._lodMax)}_dispose(){this._blurMaterial!==null&&this._blurMaterial.dispose(),this._pingPongRenderTarget!==null&&this._pingPongRenderTarget.dispose();for(let t=0;t<this._lodPlanes.length;t++)this._lodPlanes[t].dispose()}_cleanup(t){this._renderer.setRenderTarget(Gu,Wu,Xu),this._renderer.xr.enabled=Yu,t.scissorTest=!1,cl(t,0,0,t.width,t.height)}_fromTexture(t,e){t.mapping===Ms||t.mapping===ys?this._setSize(t.image.length===0?16:t.image[0].width||t.image[0].image.width):this._setSize(t.image.width/4),Gu=this._renderer.getRenderTarget(),Wu=this._renderer.getActiveCubeFace(),Xu=this._renderer.getActiveMipmapLevel(),Yu=this._renderer.xr.enabled,this._renderer.xr.enabled=!1;const n=e||this._allocateTargets();return this._textureToCubeUV(t,n),this._applyPMREM(n),this._cleanup(n),n}_allocateTargets(){const t=3*Math.max(this._cubeSize,112),e=4*this._cubeSize,n={magFilter:gi,minFilter:gi,generateMipmaps:!1,type:Io,format:ei,colorSpace:As,depthBuffer:!1},i=vp(t,e,n);if(this._pingPongRenderTarget===null||this._pingPongRenderTarget.width!==t||this._pingPongRenderTarget.height!==e){this._pingPongRenderTarget!==null&&this._dispose(),this._pingPongRenderTarget=vp(t,e,n);const{_lodMax:s}=this;({sizeLods:this._sizeLods,lodPlanes:this._lodPlanes,sigmas:this._sigmas}=Tx(s)),this._blurMaterial=bx(s,t,e)}return i}_compileMaterial(t){const e=new ai(this._lodPlanes[0],t);this._renderer.compile(e,Vu)}_sceneToCubeUV(t,e,n,i){const a=new Jn(90,1,e,n),l=[1,-1,1,1,1,1],c=[1,1,1,-1,-1,-1],u=this._renderer,f=u.autoClear,h=u.toneMapping;u.getClearColor(mp),u.toneMapping=ir,u.autoClear=!1;const d=new Bu({name:"PMREM.Background",side:bn,depthWrite:!1,depthTest:!1}),_=new ai(new ks,d);let g=!1;const m=t.background;m?m.isColor&&(d.color.copy(m),t.background=null,g=!0):(d.color.copy(mp),g=!0);for(let p=0;p<6;p++){const y=p%3;y===0?(a.up.set(0,l[p],0),a.lookAt(c[p],0,0)):y===1?(a.up.set(0,0,l[p]),a.lookAt(0,c[p],0)):(a.up.set(0,l[p],0),a.lookAt(0,0,c[p]));const E=this._cubeSize;cl(i,y*E,p>2?E:0,E,E),u.setRenderTarget(i),g&&u.render(_,a),u.render(t,a)}_.geometry.dispose(),_.material.dispose(),u.toneMapping=h,u.autoClear=f,t.background=m}_textureToCubeUV(t,e){const n=this._renderer,i=t.mapping===Ms||t.mapping===ys;i?(this._cubemapMaterial===null&&(this._cubemapMaterial=Sp()),this._cubemapMaterial.uniforms.flipEnvMap.value=t.isRenderTargetTexture===!1?-1:1):this._equirectMaterial===null&&(this._equirectMaterial=xp());const s=i?this._cubemapMaterial:this._equirectMaterial,o=new ai(this._lodPlanes[0],s),a=s.uniforms;a.envMap.value=t;const l=this._cubeSize;cl(e,0,0,3*l,2*l),n.setRenderTarget(e),n.render(o,Vu)}_applyPMREM(t){const e=this._renderer,n=e.autoClear;e.autoClear=!1;const i=this._lodPlanes.length;for(let s=1;s<i;s++){const o=Math.sqrt(this._sigmas[s]*this._sigmas[s]-this._sigmas[s-1]*this._sigmas[s-1]),a=_p[(i-s-1)%_p.length];this._blur(t,s-1,s,o,a)}e.autoClear=n}_blur(t,e,n,i,s){const o=this._pingPongRenderTarget;this._halfBlur(t,o,e,n,i,"latitudinal",s),this._halfBlur(o,t,n,n,i,"longitudinal",s)}_halfBlur(t,e,n,i,s,o,a){const l=this._renderer,c=this._blurMaterial;o!=="latitudinal"&&o!=="longitudinal"&&console.error("blur direction must be either latitudinal or longitudinal!");const u=3,f=new ai(this._lodPlanes[i],c),h=c.uniforms,d=this._sizeLods[n]-1,_=isFinite(s)?Math.PI/(2*d):2*Math.PI/(2*Yr-1),g=s/_,m=isFinite(s)?1+Math.floor(u*g):Yr;m>Yr&&console.warn(`sigmaRadians, ${s}, is too large and will clip, as it requested ${m} samples when the maximum is set to ${Yr}`);const p=[];let y=0;for(let b=0;b<Yr;++b){const R=b/g,S=Math.exp(-R*R/2);p.push(S),b===0?y+=S:b<m&&(y+=2*S)}for(let b=0;b<p.length;b++)p[b]=p[b]/y;h.envMap.value=t.texture,h.samples.value=m,h.weights.value=p,h.latitudinal.value=o==="latitudinal",a&&(h.poleAxis.value=a);const{_lodMax:E}=this;h.dTheta.value=_,h.mipInt.value=E-n;const v=this._sizeLods[i],C=3*v*(i>E-Ws?i-E+Ws:0),w=4*(this._cubeSize-v);cl(e,C,w,3*v,2*v),l.setRenderTarget(e),l.render(f,Vu)}}function Tx(r){const t=[],e=[],n=[];let i=r;const s=r-Ws+1+pp.length;for(let o=0;o<s;o++){const a=Math.pow(2,i);e.push(a);let l=1/a;o>r-Ws?l=pp[o-r+Ws-1]:o===0&&(l=0),n.push(l);const c=1/(a-2),u=-c,f=1+c,h=[u,u,f,u,f,f,u,u,f,f,u,f],d=6,_=6,g=3,m=2,p=1,y=new Float32Array(g*_*d),E=new Float32Array(m*_*d),v=new Float32Array(p*_*d);for(let w=0;w<d;w++){const b=w%3*2/3-1,R=w>2?0:-1,S=[b,R,0,b+2/3,R,0,b+2/3,R+1,0,b,R,0,b+2/3,R+1,0,b,R+1,0];y.set(S,g*_*w),E.set(h,m*_*w);const x=[w,w,w,w,w,w];v.set(x,p*_*w)}const C=new Hr;C.setAttribute("position",new oi(y,g)),C.setAttribute("uv",new oi(E,m)),C.setAttribute("faceIndex",new oi(v,p)),t.push(C),i>Ws&&i--}return{lodPlanes:t,sizeLods:e,sigmas:n}}function vp(r,t,e){const n=new Fr(r,t,e);return n.texture.mapping=Ia,n.texture.name="PMREM.cubeUv",n.scissorTest=!0,n}function cl(r,t,e,n,i){r.viewport.set(t,e,n,i),r.scissor.set(t,e,n,i)}function bx(r,t,e){const n=new Float32Array(Yr),i=new Z(0,1,0);return new ur({name:"SphericalGaussianBlur",defines:{n:Yr,CUBEUV_TEXEL_WIDTH:1/t,CUBEUV_TEXEL_HEIGHT:1/e,CUBEUV_MAX_MIP:`${r}.0`},uniforms:{envMap:{value:null},samples:{value:1},weights:{value:n},latitudinal:{value:!1},dTheta:{value:0},mipInt:{value:0},poleAxis:{value:i}},vertexShader:qu(),fragmentShader:`

			precision mediump float;
			precision mediump int;

			varying vec3 vOutputDirection;

			uniform sampler2D envMap;
			uniform int samples;
			uniform float weights[ n ];
			uniform bool latitudinal;
			uniform float dTheta;
			uniform float mipInt;
			uniform vec3 poleAxis;

			#define ENVMAP_TYPE_CUBE_UV
			#include <cube_uv_reflection_fragment>

			vec3 getSample( float theta, vec3 axis ) {

				float cosTheta = cos( theta );
				// Rodrigues' axis-angle rotation
				vec3 sampleDirection = vOutputDirection * cosTheta
					+ cross( axis, vOutputDirection ) * sin( theta )
					+ axis * dot( axis, vOutputDirection ) * ( 1.0 - cosTheta );

				return bilinearCubeUV( envMap, sampleDirection, mipInt );

			}

			void main() {

				vec3 axis = latitudinal ? poleAxis : cross( poleAxis, vOutputDirection );

				if ( all( equal( axis, vec3( 0.0 ) ) ) ) {

					axis = vec3( vOutputDirection.z, 0.0, - vOutputDirection.x );

				}

				axis = normalize( axis );

				gl_FragColor = vec4( 0.0, 0.0, 0.0, 1.0 );
				gl_FragColor.rgb += weights[ 0 ] * getSample( 0.0, axis );

				for ( int i = 1; i < n; i++ ) {

					if ( i >= samples ) {

						break;

					}

					float theta = dTheta * float( i );
					gl_FragColor.rgb += weights[ i ] * getSample( -1.0 * theta, axis );
					gl_FragColor.rgb += weights[ i ] * getSample( theta, axis );

				}

			}
		`,blending:nr,depthTest:!1,depthWrite:!1})}function xp(){return new ur({name:"EquirectangularToCubeUV",uniforms:{envMap:{value:null}},vertexShader:qu(),fragmentShader:`

			precision mediump float;
			precision mediump int;

			varying vec3 vOutputDirection;

			uniform sampler2D envMap;

			#include <common>

			void main() {

				vec3 outputDirection = normalize( vOutputDirection );
				vec2 uv = equirectUv( outputDirection );

				gl_FragColor = vec4( texture2D ( envMap, uv ).rgb, 1.0 );

			}
		`,blending:nr,depthTest:!1,depthWrite:!1})}function Sp(){return new ur({name:"CubemapToCubeUV",uniforms:{envMap:{value:null},flipEnvMap:{value:-1}},vertexShader:qu(),fragmentShader:`

			precision mediump float;
			precision mediump int;

			uniform float flipEnvMap;

			varying vec3 vOutputDirection;

			uniform samplerCube envMap;

			void main() {

				gl_FragColor = textureCube( envMap, vec3( flipEnvMap * vOutputDirection.x, vOutputDirection.yz ) );

			}
		`,blending:nr,depthTest:!1,depthWrite:!1})}function qu(){return`

		precision mediump float;
		precision mediump int;

		attribute float faceIndex;

		varying vec3 vOutputDirection;

		// RH coordinate system; PMREM face-indexing convention
		vec3 getDirection( vec2 uv, float face ) {

			uv = 2.0 * uv - 1.0;

			vec3 direction = vec3( uv, 1.0 );

			if ( face == 0.0 ) {

				direction = direction.zyx; // ( 1, v, u ) pos x

			} else if ( face == 1.0 ) {

				direction = direction.xzy;
				direction.xz *= -1.0; // ( -u, 1, -v ) pos y

			} else if ( face == 2.0 ) {

				direction.x *= -1.0; // ( -u, v, 1 ) pos z

			} else if ( face == 3.0 ) {

				direction = direction.zyx;
				direction.xz *= -1.0; // ( -1, v, -u ) neg x

			} else if ( face == 4.0 ) {

				direction = direction.xzy;
				direction.xy *= -1.0; // ( -u, -1, v ) neg y

			} else if ( face == 5.0 ) {

				direction.z *= -1.0; // ( u, v, -1 ) neg z

			}

			return direction;

		}

		void main() {

			vOutputDirection = getDirection( uv, faceIndex );
			gl_Position = vec4( position, 1.0 );

		}
	`}function Ax(r){let t=new WeakMap,e=null;function n(a){if(a&&a.isTexture){const l=a.mapping,c=l===Uc||l===Nc,u=l===Ms||l===ys;if(c||u){let f=t.get(a);const h=f!==void 0?f.texture.pmremVersion:0;if(a.isRenderTargetTexture&&a.pmremVersion!==h)return e===null&&(e=new gp(r)),f=c?e.fromEquirectangular(a,f):e.fromCubemap(a,f),f.texture.pmremVersion=a.pmremVersion,t.set(a,f),f.texture;if(f!==void 0)return f.texture;{const d=a.image;return c&&d&&d.height>0||u&&d&&i(d)?(e===null&&(e=new gp(r)),f=c?e.fromEquirectangular(a):e.fromCubemap(a),f.texture.pmremVersion=a.pmremVersion,t.set(a,f),a.addEventListener("dispose",s),f.texture):null}}}return a}function i(a){let l=0;const c=6;for(let u=0;u<c;u++)a[u]!==void 0&&l++;return l===c}function s(a){const l=a.target;l.removeEventListener("dispose",s);const c=t.get(l);c!==void 0&&(t.delete(l),c.dispose())}function o(){t=new WeakMap,e!==null&&(e.dispose(),e=null)}return{get:n,dispose:o}}function wx(r){const t={};function e(n){if(t[n]!==void 0)return t[n];let i;switch(n){case"WEBGL_depth_texture":i=r.getExtension("WEBGL_depth_texture")||r.getExtension("MOZ_WEBGL_depth_texture")||r.getExtension("WEBKIT_WEBGL_depth_texture");break;case"EXT_texture_filter_anisotropic":i=r.getExtension("EXT_texture_filter_anisotropic")||r.getExtension("MOZ_EXT_texture_filter_anisotropic")||r.getExtension("WEBKIT_EXT_texture_filter_anisotropic");break;case"WEBGL_compressed_texture_s3tc":i=r.getExtension("WEBGL_compressed_texture_s3tc")||r.getExtension("MOZ_WEBGL_compressed_texture_s3tc")||r.getExtension("WEBKIT_WEBGL_compressed_texture_s3tc");break;case"WEBGL_compressed_texture_pvrtc":i=r.getExtension("WEBGL_compressed_texture_pvrtc")||r.getExtension("WEBKIT_WEBGL_compressed_texture_pvrtc");break;default:i=r.getExtension(n)}return t[n]=i,i}return{has:function(n){return e(n)!==null},init:function(){e("EXT_color_buffer_float"),e("WEBGL_clip_cull_distance"),e("OES_texture_float_linear"),e("EXT_color_buffer_half_float"),e("WEBGL_multisampled_render_to_texture"),e("WEBGL_render_shared_exponent")},get:function(n){const i=e(n);return i===null&&Fo("THREE.WebGLRenderer: "+n+" extension not supported."),i}}}function Rx(r,t,e,n){const i={},s=new WeakMap;function o(f){const h=f.target;h.index!==null&&t.remove(h.index);for(const _ in h.attributes)t.remove(h.attributes[_]);for(const _ in h.morphAttributes){const g=h.morphAttributes[_];for(let m=0,p=g.length;m<p;m++)t.remove(g[m])}h.removeEventListener("dispose",o),delete i[h.id];const d=s.get(h);d&&(t.remove(d),s.delete(h)),n.releaseStatesOfGeometry(h),h.isInstancedBufferGeometry===!0&&delete h._maxInstanceCount,e.memory.geometries--}function a(f,h){return i[h.id]===!0||(h.addEventListener("dispose",o),i[h.id]=!0,e.memory.geometries++),h}function l(f){const h=f.attributes;for(const _ in h)t.update(h[_],r.ARRAY_BUFFER);const d=f.morphAttributes;for(const _ in d){const g=d[_];for(let m=0,p=g.length;m<p;m++)t.update(g[m],r.ARRAY_BUFFER)}}function c(f){const h=[],d=f.index,_=f.attributes.position;let g=0;if(d!==null){const y=d.array;g=d.version;for(let E=0,v=y.length;E<v;E+=3){const C=y[E+0],w=y[E+1],b=y[E+2];h.push(C,w,w,b,b,C)}}else if(_!==void 0){const y=_.array;g=_.version;for(let E=0,v=y.length/3-1;E<v;E+=3){const C=E+0,w=E+1,b=E+2;h.push(C,w,w,b,b,C)}}else return;const m=new(Fd(h)?ip:np)(h,1);m.version=g;const p=s.get(f);p&&t.remove(p),s.set(f,m)}function u(f){const h=s.get(f);if(h){const d=f.index;d!==null&&h.version<d.version&&c(f)}else c(f);return s.get(f)}return{get:a,update:l,getWireframeAttribute:u}}function Cx(r,t,e){let n;function i(h){n=h}let s,o;function a(h){s=h.type,o=h.bytesPerElement}function l(h,d){r.drawElements(n,d,s,h*o),e.update(d,n,1)}function c(h,d,_){_!==0&&(r.drawElementsInstanced(n,d,s,h*o,_),e.update(d,n,_))}function u(h,d,_){if(_===0)return;t.get("WEBGL_multi_draw").multiDrawElementsWEBGL(n,d,0,s,h,0,_);let m=0;for(let p=0;p<_;p++)m+=d[p];e.update(m,n,1)}function f(h,d,_,g){if(_===0)return;const m=t.get("WEBGL_multi_draw");if(m===null)for(let p=0;p<h.length;p++)c(h[p]/o,d[p],g[p]);else{m.multiDrawElementsInstancedWEBGL(n,d,0,s,h,0,g,0,_);let p=0;for(let y=0;y<_;y++)p+=d[y]*g[y];e.update(p,n,1)}}this.setMode=i,this.setIndex=a,this.render=l,this.renderInstances=c,this.renderMultiDraw=u,this.renderMultiDrawInstances=f}function Px(r){const t={geometries:0,textures:0},e={frame:0,calls:0,triangles:0,points:0,lines:0};function n(s,o,a){switch(e.calls++,o){case r.TRIANGLES:e.triangles+=a*(s/3);break;case r.LINES:e.lines+=a*(s/2);break;case r.LINE_STRIP:e.lines+=a*(s-1);break;case r.LINE_LOOP:e.lines+=a*s;break;case r.POINTS:e.points+=a*s;break;default:console.error("THREE.WebGLInfo: Unknown draw mode:",o);break}}function i(){e.calls=0,e.triangles=0,e.points=0,e.lines=0}return{memory:t,render:e,programs:null,autoReset:!0,reset:i,update:n}}function Dx(r,t,e){const n=new WeakMap,i=new Fe;function s(o,a,l){const c=o.morphTargetInfluences,u=a.morphAttributes.position||a.morphAttributes.normal||a.morphAttributes.color,f=u!==void 0?u.length:0;let h=n.get(a);if(h===void 0||h.count!==f){let S=function(){b.dispose(),n.delete(a),a.removeEventListener("dispose",S)};h!==void 0&&h.texture.dispose();const d=a.morphAttributes.position!==void 0,_=a.morphAttributes.normal!==void 0,g=a.morphAttributes.color!==void 0,m=a.morphAttributes.position||[],p=a.morphAttributes.normal||[],y=a.morphAttributes.color||[];let E=0;d===!0&&(E=1),_===!0&&(E=2),g===!0&&(E=3);let v=a.attributes.position.count*E,C=1;v>t.maxTextureSize&&(C=Math.ceil(v/t.maxTextureSize),v=t.maxTextureSize);const w=new Float32Array(v*C*4*f),b=new Wd(w,v,C,f);b.type=vi,b.needsUpdate=!0;const R=E*4;for(let x=0;x<f;x++){const L=m[x],F=p[x],B=y[x],G=v*C*4*x;for(let j=0;j<L.count;j++){const Y=j*R;d===!0&&(i.fromBufferAttribute(L,j),w[G+Y+0]=i.x,w[G+Y+1]=i.y,w[G+Y+2]=i.z,w[G+Y+3]=0),_===!0&&(i.fromBufferAttribute(F,j),w[G+Y+4]=i.x,w[G+Y+5]=i.y,w[G+Y+6]=i.z,w[G+Y+7]=0),g===!0&&(i.fromBufferAttribute(B,j),w[G+Y+8]=i.x,w[G+Y+9]=i.y,w[G+Y+10]=i.z,w[G+Y+11]=B.itemSize===4?i.w:1)}}h={count:f,texture:b,size:new Se(v,C)},n.set(a,h),a.addEventListener("dispose",S)}if(o.isInstancedMesh===!0&&o.morphTexture!==null)l.getUniforms().setValue(r,"morphTexture",o.morphTexture,e);else{let d=0;for(let g=0;g<c.length;g++)d+=c[g];const _=a.morphTargetsRelative?1:1-d;l.getUniforms().setValue(r,"morphTargetBaseInfluence",_),l.getUniforms().setValue(r,"morphTargetInfluences",c)}l.getUniforms().setValue(r,"morphTargetsTexture",h.texture,e),l.getUniforms().setValue(r,"morphTargetsTextureSize",h.size)}return{update:s}}function Lx(r,t,e,n){let i=new WeakMap;function s(l){const c=n.render.frame,u=l.geometry,f=t.get(l,u);if(i.get(f)!==c&&(t.update(f),i.set(f,c)),l.isInstancedMesh&&(l.hasEventListener("dispose",a)===!1&&l.addEventListener("dispose",a),i.get(l)!==c&&(e.update(l.instanceMatrix,r.ARRAY_BUFFER),l.instanceColor!==null&&e.update(l.instanceColor,r.ARRAY_BUFFER),i.set(l,c))),l.isSkinnedMesh){const h=l.skeleton;i.get(h)!==c&&(h.update(),i.set(h,c))}return f}function o(){i=new WeakMap}function a(l){const c=l.target;c.removeEventListener("dispose",a),e.remove(c.instanceMatrix),c.instanceColor!==null&&e.remove(c.instanceColor)}return{update:s,dispose:o}}class Mp extends pn{constructor(t,e,n,i,s,o,a,l,c,u=Ts){if(u!==Ts&&u!==bs)throw new Error("DepthTexture format must be either THREE.DepthFormat or THREE.DepthStencilFormat");n===void 0&&u===Ts&&(n=Nr),n===void 0&&u===bs&&(n=Es),super(null,i,s,o,a,l,u,n,c),this.isDepthTexture=!0,this.image={width:t,height:e},this.magFilter=a!==void 0?a:zn,this.minFilter=l!==void 0?l:zn,this.flipY=!1,this.generateMipmaps=!1,this.compareFunction=null}copy(t){return super.copy(t),this.compareFunction=t.compareFunction,this}toJSON(t){const e=super.toJSON(t);return this.compareFunction!==null&&(e.compareFunction=this.compareFunction),e}}const yp=new pn,Ep=new Mp(1,1),Tp=new Wd,bp=new Zg,Ap=new hp,wp=[],Rp=[],Cp=new Float32Array(16),Pp=new Float32Array(9),Dp=new Float32Array(4);function Ys(r,t,e){const n=r[0];if(n<=0||n>0)return r;const i=t*e;let s=wp[i];if(s===void 0&&(s=new Float32Array(i),wp[i]=s),t!==0){n.toArray(s,0);for(let o=1,a=0;o!==t;++o)a+=e,r[o].toArray(s,a)}return s}function Ge(r,t){if(r.length!==t.length)return!1;for(let e=0,n=r.length;e<n;e++)if(r[e]!==t[e])return!1;return!0}function We(r,t){for(let e=0,n=t.length;e<n;e++)r[e]=t[e]}function ul(r,t){let e=Rp[t];e===void 0&&(e=new Int32Array(t),Rp[t]=e);for(let n=0;n!==t;++n)e[n]=r.allocateTextureUnit();return e}function Ix(r,t){const e=this.cache;e[0]!==t&&(r.uniform1f(this.addr,t),e[0]=t)}function Ux(r,t){const e=this.cache;if(t.x!==void 0)(e[0]!==t.x||e[1]!==t.y)&&(r.uniform2f(this.addr,t.x,t.y),e[0]=t.x,e[1]=t.y);else{if(Ge(e,t))return;r.uniform2fv(this.addr,t),We(e,t)}}function Nx(r,t){const e=this.cache;if(t.x!==void 0)(e[0]!==t.x||e[1]!==t.y||e[2]!==t.z)&&(r.uniform3f(this.addr,t.x,t.y,t.z),e[0]=t.x,e[1]=t.y,e[2]=t.z);else if(t.r!==void 0)(e[0]!==t.r||e[1]!==t.g||e[2]!==t.b)&&(r.uniform3f(this.addr,t.r,t.g,t.b),e[0]=t.r,e[1]=t.g,e[2]=t.b);else{if(Ge(e,t))return;r.uniform3fv(this.addr,t),We(e,t)}}function Fx(r,t){const e=this.cache;if(t.x!==void 0)(e[0]!==t.x||e[1]!==t.y||e[2]!==t.z||e[3]!==t.w)&&(r.uniform4f(this.addr,t.x,t.y,t.z,t.w),e[0]=t.x,e[1]=t.y,e[2]=t.z,e[3]=t.w);else{if(Ge(e,t))return;r.uniform4fv(this.addr,t),We(e,t)}}function Ox(r,t){const e=this.cache,n=t.elements;if(n===void 0){if(Ge(e,t))return;r.uniformMatrix2fv(this.addr,!1,t),We(e,t)}else{if(Ge(e,n))return;Dp.set(n),r.uniformMatrix2fv(this.addr,!1,Dp),We(e,n)}}function Bx(r,t){const e=this.cache,n=t.elements;if(n===void 0){if(Ge(e,t))return;r.uniformMatrix3fv(this.addr,!1,t),We(e,t)}else{if(Ge(e,n))return;Pp.set(n),r.uniformMatrix3fv(this.addr,!1,Pp),We(e,n)}}function zx(r,t){const e=this.cache,n=t.elements;if(n===void 0){if(Ge(e,t))return;r.uniformMatrix4fv(this.addr,!1,t),We(e,t)}else{if(Ge(e,n))return;Cp.set(n),r.uniformMatrix4fv(this.addr,!1,Cp),We(e,n)}}function kx(r,t){const e=this.cache;e[0]!==t&&(r.uniform1i(this.addr,t),e[0]=t)}function Hx(r,t){const e=this.cache;if(t.x!==void 0)(e[0]!==t.x||e[1]!==t.y)&&(r.uniform2i(this.addr,t.x,t.y),e[0]=t.x,e[1]=t.y);else{if(Ge(e,t))return;r.uniform2iv(this.addr,t),We(e,t)}}function Vx(r,t){const e=this.cache;if(t.x!==void 0)(e[0]!==t.x||e[1]!==t.y||e[2]!==t.z)&&(r.uniform3i(this.addr,t.x,t.y,t.z),e[0]=t.x,e[1]=t.y,e[2]=t.z);else{if(Ge(e,t))return;r.uniform3iv(this.addr,t),We(e,t)}}function Gx(r,t){const e=this.cache;if(t.x!==void 0)(e[0]!==t.x||e[1]!==t.y||e[2]!==t.z||e[3]!==t.w)&&(r.uniform4i(this.addr,t.x,t.y,t.z,t.w),e[0]=t.x,e[1]=t.y,e[2]=t.z,e[3]=t.w);else{if(Ge(e,t))return;r.uniform4iv(this.addr,t),We(e,t)}}function Wx(r,t){const e=this.cache;e[0]!==t&&(r.uniform1ui(this.addr,t),e[0]=t)}function Xx(r,t){const e=this.cache;if(t.x!==void 0)(e[0]!==t.x||e[1]!==t.y)&&(r.uniform2ui(this.addr,t.x,t.y),e[0]=t.x,e[1]=t.y);else{if(Ge(e,t))return;r.uniform2uiv(this.addr,t),We(e,t)}}function Yx(r,t){const e=this.cache;if(t.x!==void 0)(e[0]!==t.x||e[1]!==t.y||e[2]!==t.z)&&(r.uniform3ui(this.addr,t.x,t.y,t.z),e[0]=t.x,e[1]=t.y,e[2]=t.z);else{if(Ge(e,t))return;r.uniform3uiv(this.addr,t),We(e,t)}}function qx(r,t){const e=this.cache;if(t.x!==void 0)(e[0]!==t.x||e[1]!==t.y||e[2]!==t.z||e[3]!==t.w)&&(r.uniform4ui(this.addr,t.x,t.y,t.z,t.w),e[0]=t.x,e[1]=t.y,e[2]=t.z,e[3]=t.w);else{if(Ge(e,t))return;r.uniform4uiv(this.addr,t),We(e,t)}}function $x(r,t,e){const n=this.cache,i=e.allocateTextureUnit();n[0]!==i&&(r.uniform1i(this.addr,i),n[0]=i);let s;this.type===r.SAMPLER_2D_SHADOW?(Ep.compareFunction=Ld,s=Ep):s=yp,e.setTexture2D(t||s,i)}function Kx(r,t,e){const n=this.cache,i=e.allocateTextureUnit();n[0]!==i&&(r.uniform1i(this.addr,i),n[0]=i),e.setTexture3D(t||bp,i)}function Zx(r,t,e){const n=this.cache,i=e.allocateTextureUnit();n[0]!==i&&(r.uniform1i(this.addr,i),n[0]=i),e.setTextureCube(t||Ap,i)}function jx(r,t,e){const n=this.cache,i=e.allocateTextureUnit();n[0]!==i&&(r.uniform1i(this.addr,i),n[0]=i),e.setTexture2DArray(t||Tp,i)}function Jx(r){switch(r){case 5126:return Ix;case 35664:return Ux;case 35665:return Nx;case 35666:return Fx;case 35674:return Ox;case 35675:return Bx;case 35676:return zx;case 5124:case 35670:return kx;case 35667:case 35671:return Hx;case 35668:case 35672:return Vx;case 35669:case 35673:return Gx;case 5125:return Wx;case 36294:return Xx;case 36295:return Yx;case 36296:return qx;case 35678:case 36198:case 36298:case 36306:case 35682:return $x;case 35679:case 36299:case 36307:return Kx;case 35680:case 36300:case 36308:case 36293:return Zx;case 36289:case 36303:case 36311:case 36292:return jx}}function Qx(r,t){r.uniform1fv(this.addr,t)}function tS(r,t){const e=Ys(t,this.size,2);r.uniform2fv(this.addr,e)}function eS(r,t){const e=Ys(t,this.size,3);r.uniform3fv(this.addr,e)}function nS(r,t){const e=Ys(t,this.size,4);r.uniform4fv(this.addr,e)}function iS(r,t){const e=Ys(t,this.size,4);r.uniformMatrix2fv(this.addr,!1,e)}function rS(r,t){const e=Ys(t,this.size,9);r.uniformMatrix3fv(this.addr,!1,e)}function sS(r,t){const e=Ys(t,this.size,16);r.uniformMatrix4fv(this.addr,!1,e)}function oS(r,t){r.uniform1iv(this.addr,t)}function aS(r,t){r.uniform2iv(this.addr,t)}function lS(r,t){r.uniform3iv(this.addr,t)}function cS(r,t){r.uniform4iv(this.addr,t)}function uS(r,t){r.uniform1uiv(this.addr,t)}function hS(r,t){r.uniform2uiv(this.addr,t)}function fS(r,t){r.uniform3uiv(this.addr,t)}function dS(r,t){r.uniform4uiv(this.addr,t)}function pS(r,t,e){const n=this.cache,i=t.length,s=ul(e,i);Ge(n,s)||(r.uniform1iv(this.addr,s),We(n,s));for(let o=0;o!==i;++o)e.setTexture2D(t[o]||yp,s[o])}function mS(r,t,e){const n=this.cache,i=t.length,s=ul(e,i);Ge(n,s)||(r.uniform1iv(this.addr,s),We(n,s));for(let o=0;o!==i;++o)e.setTexture3D(t[o]||bp,s[o])}function _S(r,t,e){const n=this.cache,i=t.length,s=ul(e,i);Ge(n,s)||(r.uniform1iv(this.addr,s),We(n,s));for(let o=0;o!==i;++o)e.setTextureCube(t[o]||Ap,s[o])}function gS(r,t,e){const n=this.cache,i=t.length,s=ul(e,i);Ge(n,s)||(r.uniform1iv(this.addr,s),We(n,s));for(let o=0;o!==i;++o)e.setTexture2DArray(t[o]||Tp,s[o])}function vS(r){switch(r){case 5126:return Qx;case 35664:return tS;case 35665:return eS;case 35666:return nS;case 35674:return iS;case 35675:return rS;case 35676:return sS;case 5124:case 35670:return oS;case 35667:case 35671:return aS;case 35668:case 35672:return lS;case 35669:case 35673:return cS;case 5125:return uS;case 36294:return hS;case 36295:return fS;case 36296:return dS;case 35678:case 36198:case 36298:case 36306:case 35682:return pS;case 35679:case 36299:case 36307:return mS;case 35680:case 36300:case 36308:case 36293:return _S;case 36289:case 36303:case 36311:case 36292:return gS}}class xS{constructor(t,e,n){this.id=t,this.addr=n,this.cache=[],this.type=e.type,this.setValue=Jx(e.type)}}class SS{constructor(t,e,n){this.id=t,this.addr=n,this.cache=[],this.type=e.type,this.size=e.size,this.setValue=vS(e.type)}}class MS{constructor(t){this.id=t,this.seq=[],this.map={}}setValue(t,e,n){const i=this.seq;for(let s=0,o=i.length;s!==o;++s){const a=i[s];a.setValue(t,e[a.id],n)}}}const $u=/(\w+)(\])?(\[|\.)?/g;function Lp(r,t){r.seq.push(t),r.map[t.id]=t}function yS(r,t,e){const n=r.name,i=n.length;for($u.lastIndex=0;;){const s=$u.exec(n),o=$u.lastIndex;let a=s[1];const l=s[2]==="]",c=s[3];if(l&&(a=a|0),c===void 0||c==="["&&o+2===i){Lp(e,c===void 0?new xS(a,r,t):new SS(a,r,t));break}else{let f=e.map[a];f===void 0&&(f=new MS(a),Lp(e,f)),e=f}}}class hl{constructor(t,e){this.seq=[],this.map={};const n=t.getProgramParameter(e,t.ACTIVE_UNIFORMS);for(let i=0;i<n;++i){const s=t.getActiveUniform(e,i),o=t.getUniformLocation(e,s.name);yS(s,o,this)}}setValue(t,e,n,i){const s=this.map[e];s!==void 0&&s.setValue(t,n,i)}setOptional(t,e,n){const i=e[n];i!==void 0&&this.setValue(t,n,i)}static upload(t,e,n,i){for(let s=0,o=e.length;s!==o;++s){const a=e[s],l=n[a.id];l.needsUpdate!==!1&&a.setValue(t,l.value,i)}}static seqWithValue(t,e){const n=[];for(let i=0,s=t.length;i!==s;++i){const o=t[i];o.id in e&&n.push(o)}return n}}function Ip(r,t,e){const n=r.createShader(t);return r.shaderSource(n,e),r.compileShader(n),n}const ES=37297;let TS=0;function bS(r,t){const e=r.split(`
`),n=[],i=Math.max(t-6,0),s=Math.min(t+6,e.length);for(let o=i;o<s;o++){const a=o+1;n.push(`${a===t?">":" "} ${a}: ${e[o]}`)}return n.join(`
`)}const Up=new Zt;function AS(r){ae._getMatrix(Up,ae.workingColorSpace,r);const t=`mat3( ${Up.elements.map(e=>e.toFixed(4))} )`;switch(ae.getTransfer(r)){case ka:return[t,"LinearTransferOETF"];case ge:return[t,"sRGBTransferOETF"];default:return console.warn("THREE.WebGLProgram: Unsupported color space: ",r),[t,"LinearTransferOETF"]}}function Np(r,t,e){const n=r.getShaderParameter(t,r.COMPILE_STATUS),i=r.getShaderInfoLog(t).trim();if(n&&i==="")return"";const s=/ERROR: 0:(\d+)/.exec(i);if(s){const o=parseInt(s[1]);return e.toUpperCase()+`

`+i+`

`+bS(r.getShaderSource(t),o)}else return i}function wS(r,t){const e=AS(t);return[`vec4 ${r}( vec4 value ) {`,`	return ${e[1]}( vec4( value.rgb * ${e[0]}, value.a ) );`,"}"].join(`
`)}function RS(r,t){let e;switch(t){case yg:e="Linear";break;case Eg:e="Reinhard";break;case Tg:e="Cineon";break;case bg:e="ACESFilmic";break;case wg:e="AgX";break;case Rg:e="Neutral";break;case Ag:e="Custom";break;default:console.warn("THREE.WebGLProgram: Unsupported toneMapping:",t),e="Linear"}return"vec3 "+r+"( vec3 color ) { return "+e+"ToneMapping( color ); }"}const fl=new Z;function CS(){ae.getLuminanceCoefficients(fl);const r=fl.x.toFixed(4),t=fl.y.toFixed(4),e=fl.z.toFixed(4);return["float luminance( const in vec3 rgb ) {",`	const vec3 weights = vec3( ${r}, ${t}, ${e} );`,"	return dot( weights, rgb );","}"].join(`
`)}function PS(r){return[r.extensionClipCullDistance?"#extension GL_ANGLE_clip_cull_distance : require":"",r.extensionMultiDraw?"#extension GL_ANGLE_multi_draw : require":""].filter(Go).join(`
`)}function DS(r){const t=[];for(const e in r){const n=r[e];n!==!1&&t.push("#define "+e+" "+n)}return t.join(`
`)}function LS(r,t){const e={},n=r.getProgramParameter(t,r.ACTIVE_ATTRIBUTES);for(let i=0;i<n;i++){const s=r.getActiveAttrib(t,i),o=s.name;let a=1;s.type===r.FLOAT_MAT2&&(a=2),s.type===r.FLOAT_MAT3&&(a=3),s.type===r.FLOAT_MAT4&&(a=4),e[o]={type:s.type,location:r.getAttribLocation(t,o),locationSize:a}}return e}function Go(r){return r!==""}function Fp(r,t){const e=t.numSpotLightShadows+t.numSpotLightMaps-t.numSpotLightShadowsWithMaps;return r.replace(/NUM_DIR_LIGHTS/g,t.numDirLights).replace(/NUM_SPOT_LIGHTS/g,t.numSpotLights).replace(/NUM_SPOT_LIGHT_MAPS/g,t.numSpotLightMaps).replace(/NUM_SPOT_LIGHT_COORDS/g,e).replace(/NUM_RECT_AREA_LIGHTS/g,t.numRectAreaLights).replace(/NUM_POINT_LIGHTS/g,t.numPointLights).replace(/NUM_HEMI_LIGHTS/g,t.numHemiLights).replace(/NUM_DIR_LIGHT_SHADOWS/g,t.numDirLightShadows).replace(/NUM_SPOT_LIGHT_SHADOWS_WITH_MAPS/g,t.numSpotLightShadowsWithMaps).replace(/NUM_SPOT_LIGHT_SHADOWS/g,t.numSpotLightShadows).replace(/NUM_POINT_LIGHT_SHADOWS/g,t.numPointLightShadows)}function Op(r,t){return r.replace(/NUM_CLIPPING_PLANES/g,t.numClippingPlanes).replace(/UNION_CLIPPING_PLANES/g,t.numClippingPlanes-t.numClipIntersection)}const IS=/^[ \t]*#include +<([\w\d./]+)>/gm;function Ku(r){return r.replace(IS,NS)}const US=new Map;function NS(r,t){let e=Jt[t];if(e===void 0){const n=US.get(t);if(n!==void 0)e=Jt[n],console.warn('THREE.WebGLRenderer: Shader chunk "%s" has been deprecated. Use "%s" instead.',t,n);else throw new Error("Can not resolve #include <"+t+">")}return Ku(e)}const FS=/#pragma unroll_loop_start\s+for\s*\(\s*int\s+i\s*=\s*(\d+)\s*;\s*i\s*<\s*(\d+)\s*;\s*i\s*\+\+\s*\)\s*{([\s\S]+?)}\s+#pragma unroll_loop_end/g;function Bp(r){return r.replace(FS,OS)}function OS(r,t,e,n){let i="";for(let s=parseInt(t);s<parseInt(e);s++)i+=n.replace(/\[\s*i\s*\]/g,"[ "+s+" ]").replace(/UNROLLED_LOOP_INDEX/g,s);return i}function zp(r){let t=`precision ${r.precision} float;
	precision ${r.precision} int;
	precision ${r.precision} sampler2D;
	precision ${r.precision} samplerCube;
	precision ${r.precision} sampler3D;
	precision ${r.precision} sampler2DArray;
	precision ${r.precision} sampler2DShadow;
	precision ${r.precision} samplerCubeShadow;
	precision ${r.precision} sampler2DArrayShadow;
	precision ${r.precision} isampler2D;
	precision ${r.precision} isampler3D;
	precision ${r.precision} isamplerCube;
	precision ${r.precision} isampler2DArray;
	precision ${r.precision} usampler2D;
	precision ${r.precision} usampler3D;
	precision ${r.precision} usamplerCube;
	precision ${r.precision} usampler2DArray;
	`;return r.precision==="highp"?t+=`
#define HIGH_PRECISION`:r.precision==="mediump"?t+=`
#define MEDIUM_PRECISION`:r.precision==="lowp"&&(t+=`
#define LOW_PRECISION`),t}function BS(r){let t="SHADOWMAP_TYPE_BASIC";return r.shadowMapType===_d?t="SHADOWMAP_TYPE_PCF":r.shadowMapType===eg?t="SHADOWMAP_TYPE_PCF_SOFT":r.shadowMapType===wi&&(t="SHADOWMAP_TYPE_VSM"),t}function zS(r){let t="ENVMAP_TYPE_CUBE";if(r.envMap)switch(r.envMapMode){case Ms:case ys:t="ENVMAP_TYPE_CUBE";break;case Ia:t="ENVMAP_TYPE_CUBE_UV";break}return t}function kS(r){let t="ENVMAP_MODE_REFLECTION";if(r.envMap)switch(r.envMapMode){case ys:t="ENVMAP_MODE_REFRACTION";break}return t}function HS(r){let t="ENVMAP_BLENDING_NONE";if(r.envMap)switch(r.combine){case Sd:t="ENVMAP_BLENDING_MULTIPLY";break;case Sg:t="ENVMAP_BLENDING_MIX";break;case Mg:t="ENVMAP_BLENDING_ADD";break}return t}function VS(r){const t=r.envMapCubeUVHeight;if(t===null)return null;const e=Math.log2(t)-2,n=1/t;return{texelWidth:1/(3*Math.max(Math.pow(2,e),112)),texelHeight:n,maxMip:e}}function GS(r,t,e,n){const i=r.getContext(),s=e.defines;let o=e.vertexShader,a=e.fragmentShader;const l=BS(e),c=zS(e),u=kS(e),f=HS(e),h=VS(e),d=PS(e),_=DS(s),g=i.createProgram();let m,p,y=e.glslVersion?"#version "+e.glslVersion+`
`:"";e.isRawShaderMaterial?(m=["#define SHADER_TYPE "+e.shaderType,"#define SHADER_NAME "+e.shaderName,_].filter(Go).join(`
`),m.length>0&&(m+=`
`),p=["#define SHADER_TYPE "+e.shaderType,"#define SHADER_NAME "+e.shaderName,_].filter(Go).join(`
`),p.length>0&&(p+=`
`)):(m=[zp(e),"#define SHADER_TYPE "+e.shaderType,"#define SHADER_NAME "+e.shaderName,_,e.extensionClipCullDistance?"#define USE_CLIP_DISTANCE":"",e.batching?"#define USE_BATCHING":"",e.batchingColor?"#define USE_BATCHING_COLOR":"",e.instancing?"#define USE_INSTANCING":"",e.instancingColor?"#define USE_INSTANCING_COLOR":"",e.instancingMorph?"#define USE_INSTANCING_MORPH":"",e.useFog&&e.fog?"#define USE_FOG":"",e.useFog&&e.fogExp2?"#define FOG_EXP2":"",e.map?"#define USE_MAP":"",e.envMap?"#define USE_ENVMAP":"",e.envMap?"#define "+u:"",e.lightMap?"#define USE_LIGHTMAP":"",e.aoMap?"#define USE_AOMAP":"",e.bumpMap?"#define USE_BUMPMAP":"",e.normalMap?"#define USE_NORMALMAP":"",e.normalMapObjectSpace?"#define USE_NORMALMAP_OBJECTSPACE":"",e.normalMapTangentSpace?"#define USE_NORMALMAP_TANGENTSPACE":"",e.displacementMap?"#define USE_DISPLACEMENTMAP":"",e.emissiveMap?"#define USE_EMISSIVEMAP":"",e.anisotropy?"#define USE_ANISOTROPY":"",e.anisotropyMap?"#define USE_ANISOTROPYMAP":"",e.clearcoatMap?"#define USE_CLEARCOATMAP":"",e.clearcoatRoughnessMap?"#define USE_CLEARCOAT_ROUGHNESSMAP":"",e.clearcoatNormalMap?"#define USE_CLEARCOAT_NORMALMAP":"",e.iridescenceMap?"#define USE_IRIDESCENCEMAP":"",e.iridescenceThicknessMap?"#define USE_IRIDESCENCE_THICKNESSMAP":"",e.specularMap?"#define USE_SPECULARMAP":"",e.specularColorMap?"#define USE_SPECULAR_COLORMAP":"",e.specularIntensityMap?"#define USE_SPECULAR_INTENSITYMAP":"",e.roughnessMap?"#define USE_ROUGHNESSMAP":"",e.metalnessMap?"#define USE_METALNESSMAP":"",e.alphaMap?"#define USE_ALPHAMAP":"",e.alphaHash?"#define USE_ALPHAHASH":"",e.transmission?"#define USE_TRANSMISSION":"",e.transmissionMap?"#define USE_TRANSMISSIONMAP":"",e.thicknessMap?"#define USE_THICKNESSMAP":"",e.sheenColorMap?"#define USE_SHEEN_COLORMAP":"",e.sheenRoughnessMap?"#define USE_SHEEN_ROUGHNESSMAP":"",e.mapUv?"#define MAP_UV "+e.mapUv:"",e.alphaMapUv?"#define ALPHAMAP_UV "+e.alphaMapUv:"",e.lightMapUv?"#define LIGHTMAP_UV "+e.lightMapUv:"",e.aoMapUv?"#define AOMAP_UV "+e.aoMapUv:"",e.emissiveMapUv?"#define EMISSIVEMAP_UV "+e.emissiveMapUv:"",e.bumpMapUv?"#define BUMPMAP_UV "+e.bumpMapUv:"",e.normalMapUv?"#define NORMALMAP_UV "+e.normalMapUv:"",e.displacementMapUv?"#define DISPLACEMENTMAP_UV "+e.displacementMapUv:"",e.metalnessMapUv?"#define METALNESSMAP_UV "+e.metalnessMapUv:"",e.roughnessMapUv?"#define ROUGHNESSMAP_UV "+e.roughnessMapUv:"",e.anisotropyMapUv?"#define ANISOTROPYMAP_UV "+e.anisotropyMapUv:"",e.clearcoatMapUv?"#define CLEARCOATMAP_UV "+e.clearcoatMapUv:"",e.clearcoatNormalMapUv?"#define CLEARCOAT_NORMALMAP_UV "+e.clearcoatNormalMapUv:"",e.clearcoatRoughnessMapUv?"#define CLEARCOAT_ROUGHNESSMAP_UV "+e.clearcoatRoughnessMapUv:"",e.iridescenceMapUv?"#define IRIDESCENCEMAP_UV "+e.iridescenceMapUv:"",e.iridescenceThicknessMapUv?"#define IRIDESCENCE_THICKNESSMAP_UV "+e.iridescenceThicknessMapUv:"",e.sheenColorMapUv?"#define SHEEN_COLORMAP_UV "+e.sheenColorMapUv:"",e.sheenRoughnessMapUv?"#define SHEEN_ROUGHNESSMAP_UV "+e.sheenRoughnessMapUv:"",e.specularMapUv?"#define SPECULARMAP_UV "+e.specularMapUv:"",e.specularColorMapUv?"#define SPECULAR_COLORMAP_UV "+e.specularColorMapUv:"",e.specularIntensityMapUv?"#define SPECULAR_INTENSITYMAP_UV "+e.specularIntensityMapUv:"",e.transmissionMapUv?"#define TRANSMISSIONMAP_UV "+e.transmissionMapUv:"",e.thicknessMapUv?"#define THICKNESSMAP_UV "+e.thicknessMapUv:"",e.vertexTangents&&e.flatShading===!1?"#define USE_TANGENT":"",e.vertexColors?"#define USE_COLOR":"",e.vertexAlphas?"#define USE_COLOR_ALPHA":"",e.vertexUv1s?"#define USE_UV1":"",e.vertexUv2s?"#define USE_UV2":"",e.vertexUv3s?"#define USE_UV3":"",e.pointsUvs?"#define USE_POINTS_UV":"",e.flatShading?"#define FLAT_SHADED":"",e.skinning?"#define USE_SKINNING":"",e.morphTargets?"#define USE_MORPHTARGETS":"",e.morphNormals&&e.flatShading===!1?"#define USE_MORPHNORMALS":"",e.morphColors?"#define USE_MORPHCOLORS":"",e.morphTargetsCount>0?"#define MORPHTARGETS_TEXTURE_STRIDE "+e.morphTextureStride:"",e.morphTargetsCount>0?"#define MORPHTARGETS_COUNT "+e.morphTargetsCount:"",e.doubleSided?"#define DOUBLE_SIDED":"",e.flipSided?"#define FLIP_SIDED":"",e.shadowMapEnabled?"#define USE_SHADOWMAP":"",e.shadowMapEnabled?"#define "+l:"",e.sizeAttenuation?"#define USE_SIZEATTENUATION":"",e.numLightProbes>0?"#define USE_LIGHT_PROBES":"",e.logarithmicDepthBuffer?"#define USE_LOGDEPTHBUF":"",e.reverseDepthBuffer?"#define USE_REVERSEDEPTHBUF":"","uniform mat4 modelMatrix;","uniform mat4 modelViewMatrix;","uniform mat4 projectionMatrix;","uniform mat4 viewMatrix;","uniform mat3 normalMatrix;","uniform vec3 cameraPosition;","uniform bool isOrthographic;","#ifdef USE_INSTANCING","	attribute mat4 instanceMatrix;","#endif","#ifdef USE_INSTANCING_COLOR","	attribute vec3 instanceColor;","#endif","#ifdef USE_INSTANCING_MORPH","	uniform sampler2D morphTexture;","#endif","attribute vec3 position;","attribute vec3 normal;","attribute vec2 uv;","#ifdef USE_UV1","	attribute vec2 uv1;","#endif","#ifdef USE_UV2","	attribute vec2 uv2;","#endif","#ifdef USE_UV3","	attribute vec2 uv3;","#endif","#ifdef USE_TANGENT","	attribute vec4 tangent;","#endif","#if defined( USE_COLOR_ALPHA )","	attribute vec4 color;","#elif defined( USE_COLOR )","	attribute vec3 color;","#endif","#ifdef USE_SKINNING","	attribute vec4 skinIndex;","	attribute vec4 skinWeight;","#endif",`
`].filter(Go).join(`
`),p=[zp(e),"#define SHADER_TYPE "+e.shaderType,"#define SHADER_NAME "+e.shaderName,_,e.useFog&&e.fog?"#define USE_FOG":"",e.useFog&&e.fogExp2?"#define FOG_EXP2":"",e.alphaToCoverage?"#define ALPHA_TO_COVERAGE":"",e.map?"#define USE_MAP":"",e.matcap?"#define USE_MATCAP":"",e.envMap?"#define USE_ENVMAP":"",e.envMap?"#define "+c:"",e.envMap?"#define "+u:"",e.envMap?"#define "+f:"",h?"#define CUBEUV_TEXEL_WIDTH "+h.texelWidth:"",h?"#define CUBEUV_TEXEL_HEIGHT "+h.texelHeight:"",h?"#define CUBEUV_MAX_MIP "+h.maxMip+".0":"",e.lightMap?"#define USE_LIGHTMAP":"",e.aoMap?"#define USE_AOMAP":"",e.bumpMap?"#define USE_BUMPMAP":"",e.normalMap?"#define USE_NORMALMAP":"",e.normalMapObjectSpace?"#define USE_NORMALMAP_OBJECTSPACE":"",e.normalMapTangentSpace?"#define USE_NORMALMAP_TANGENTSPACE":"",e.emissiveMap?"#define USE_EMISSIVEMAP":"",e.anisotropy?"#define USE_ANISOTROPY":"",e.anisotropyMap?"#define USE_ANISOTROPYMAP":"",e.clearcoat?"#define USE_CLEARCOAT":"",e.clearcoatMap?"#define USE_CLEARCOATMAP":"",e.clearcoatRoughnessMap?"#define USE_CLEARCOAT_ROUGHNESSMAP":"",e.clearcoatNormalMap?"#define USE_CLEARCOAT_NORMALMAP":"",e.dispersion?"#define USE_DISPERSION":"",e.iridescence?"#define USE_IRIDESCENCE":"",e.iridescenceMap?"#define USE_IRIDESCENCEMAP":"",e.iridescenceThicknessMap?"#define USE_IRIDESCENCE_THICKNESSMAP":"",e.specularMap?"#define USE_SPECULARMAP":"",e.specularColorMap?"#define USE_SPECULAR_COLORMAP":"",e.specularIntensityMap?"#define USE_SPECULAR_INTENSITYMAP":"",e.roughnessMap?"#define USE_ROUGHNESSMAP":"",e.metalnessMap?"#define USE_METALNESSMAP":"",e.alphaMap?"#define USE_ALPHAMAP":"",e.alphaTest?"#define USE_ALPHATEST":"",e.alphaHash?"#define USE_ALPHAHASH":"",e.sheen?"#define USE_SHEEN":"",e.sheenColorMap?"#define USE_SHEEN_COLORMAP":"",e.sheenRoughnessMap?"#define USE_SHEEN_ROUGHNESSMAP":"",e.transmission?"#define USE_TRANSMISSION":"",e.transmissionMap?"#define USE_TRANSMISSIONMAP":"",e.thicknessMap?"#define USE_THICKNESSMAP":"",e.vertexTangents&&e.flatShading===!1?"#define USE_TANGENT":"",e.vertexColors||e.instancingColor||e.batchingColor?"#define USE_COLOR":"",e.vertexAlphas?"#define USE_COLOR_ALPHA":"",e.vertexUv1s?"#define USE_UV1":"",e.vertexUv2s?"#define USE_UV2":"",e.vertexUv3s?"#define USE_UV3":"",e.pointsUvs?"#define USE_POINTS_UV":"",e.gradientMap?"#define USE_GRADIENTMAP":"",e.flatShading?"#define FLAT_SHADED":"",e.doubleSided?"#define DOUBLE_SIDED":"",e.flipSided?"#define FLIP_SIDED":"",e.shadowMapEnabled?"#define USE_SHADOWMAP":"",e.shadowMapEnabled?"#define "+l:"",e.premultipliedAlpha?"#define PREMULTIPLIED_ALPHA":"",e.numLightProbes>0?"#define USE_LIGHT_PROBES":"",e.decodeVideoTexture?"#define DECODE_VIDEO_TEXTURE":"",e.decodeVideoTextureEmissive?"#define DECODE_VIDEO_TEXTURE_EMISSIVE":"",e.logarithmicDepthBuffer?"#define USE_LOGDEPTHBUF":"",e.reverseDepthBuffer?"#define USE_REVERSEDEPTHBUF":"","uniform mat4 viewMatrix;","uniform vec3 cameraPosition;","uniform bool isOrthographic;",e.toneMapping!==ir?"#define TONE_MAPPING":"",e.toneMapping!==ir?Jt.tonemapping_pars_fragment:"",e.toneMapping!==ir?RS("toneMapping",e.toneMapping):"",e.dithering?"#define DITHERING":"",e.opaque?"#define OPAQUE":"",Jt.colorspace_pars_fragment,wS("linearToOutputTexel",e.outputColorSpace),CS(),e.useDepthPacking?"#define DEPTH_PACKING "+e.depthPacking:"",`
`].filter(Go).join(`
`)),o=Ku(o),o=Fp(o,e),o=Op(o,e),a=Ku(a),a=Fp(a,e),a=Op(a,e),o=Bp(o),a=Bp(a),e.isRawShaderMaterial!==!0&&(y=`#version 300 es
`,m=[d,"#define attribute in","#define varying out","#define texture2D texture"].join(`
`)+`
`+m,p=["#define varying in",e.glslVersion===Nd?"":"layout(location = 0) out highp vec4 pc_fragColor;",e.glslVersion===Nd?"":"#define gl_FragColor pc_fragColor","#define gl_FragDepthEXT gl_FragDepth","#define texture2D texture","#define textureCube texture","#define texture2DProj textureProj","#define texture2DLodEXT textureLod","#define texture2DProjLodEXT textureProjLod","#define textureCubeLodEXT textureLod","#define texture2DGradEXT textureGrad","#define texture2DProjGradEXT textureProjGrad","#define textureCubeGradEXT textureGrad"].join(`
`)+`
`+p);const E=y+m+o,v=y+p+a,C=Ip(i,i.VERTEX_SHADER,E),w=Ip(i,i.FRAGMENT_SHADER,v);i.attachShader(g,C),i.attachShader(g,w),e.index0AttributeName!==void 0?i.bindAttribLocation(g,0,e.index0AttributeName):e.morphTargets===!0&&i.bindAttribLocation(g,0,"position"),i.linkProgram(g);function b(L){if(r.debug.checkShaderErrors){const F=i.getProgramInfoLog(g).trim(),B=i.getShaderInfoLog(C).trim(),G=i.getShaderInfoLog(w).trim();let j=!0,Y=!0;if(i.getProgramParameter(g,i.LINK_STATUS)===!1)if(j=!1,typeof r.debug.onShaderError=="function")r.debug.onShaderError(i,g,C,w);else{const $=Np(i,C,"vertex"),H=Np(i,w,"fragment");console.error("THREE.WebGLProgram: Shader Error "+i.getError()+" - VALIDATE_STATUS "+i.getProgramParameter(g,i.VALIDATE_STATUS)+`

Material Name: `+L.name+`
Material Type: `+L.type+`

Program Info Log: `+F+`
`+$+`
`+H)}else F!==""?console.warn("THREE.WebGLProgram: Program Info Log:",F):(B===""||G==="")&&(Y=!1);Y&&(L.diagnostics={runnable:j,programLog:F,vertexShader:{log:B,prefix:m},fragmentShader:{log:G,prefix:p}})}i.deleteShader(C),i.deleteShader(w),R=new hl(i,g),S=LS(i,g)}let R;this.getUniforms=function(){return R===void 0&&b(this),R};let S;this.getAttributes=function(){return S===void 0&&b(this),S};let x=e.rendererExtensionParallelShaderCompile===!1;return this.isReady=function(){return x===!1&&(x=i.getProgramParameter(g,ES)),x},this.destroy=function(){n.releaseStatesOfProgram(this),i.deleteProgram(g),this.program=void 0},this.type=e.shaderType,this.name=e.shaderName,this.id=TS++,this.cacheKey=t,this.usedTimes=1,this.program=g,this.vertexShader=C,this.fragmentShader=w,this}let WS=0;class XS{constructor(){this.shaderCache=new Map,this.materialCache=new Map}update(t){const e=t.vertexShader,n=t.fragmentShader,i=this._getShaderStage(e),s=this._getShaderStage(n),o=this._getShaderCacheForMaterial(t);return o.has(i)===!1&&(o.add(i),i.usedTimes++),o.has(s)===!1&&(o.add(s),s.usedTimes++),this}remove(t){const e=this.materialCache.get(t);for(const n of e)n.usedTimes--,n.usedTimes===0&&this.shaderCache.delete(n.code);return this.materialCache.delete(t),this}getVertexShaderID(t){return this._getShaderStage(t.vertexShader).id}getFragmentShaderID(t){return this._getShaderStage(t.fragmentShader).id}dispose(){this.shaderCache.clear(),this.materialCache.clear()}_getShaderCacheForMaterial(t){const e=this.materialCache;let n=e.get(t);return n===void 0&&(n=new Set,e.set(t,n)),n}_getShaderStage(t){const e=this.shaderCache;let n=e.get(t);return n===void 0&&(n=new YS(t),e.set(t,n)),n}}class YS{constructor(t){this.id=WS++,this.code=t,this.usedTimes=0}}function qS(r,t,e,n,i,s,o){const a=new $d,l=new XS,c=new Set,u=[],f=i.logarithmicDepthBuffer,h=i.vertexTextures;let d=i.precision;const _={MeshDepthMaterial:"depth",MeshDistanceMaterial:"distanceRGBA",MeshNormalMaterial:"normal",MeshBasicMaterial:"basic",MeshLambertMaterial:"lambert",MeshPhongMaterial:"phong",MeshToonMaterial:"toon",MeshStandardMaterial:"physical",MeshPhysicalMaterial:"physical",MeshMatcapMaterial:"matcap",LineBasicMaterial:"basic",LineDashedMaterial:"dashed",PointsMaterial:"points",ShadowMaterial:"shadow",SpriteMaterial:"sprite"};function g(S){return c.add(S),S===0?"uv":`uv${S}`}function m(S,x,L,F,B){const G=F.fog,j=B.geometry,Y=S.isMeshStandardMaterial?F.environment:null,$=(S.isMeshStandardMaterial?e:t).get(S.envMap||Y),H=$&&$.mapping===Ia?$.image.height:null,it=_[S.type];S.precision!==null&&(d=i.getMaxPrecision(S.precision),d!==S.precision&&console.warn("THREE.WebGLProgram.getParameters:",S.precision,"not supported, using",d,"instead."));const P=j.morphAttributes.position||j.morphAttributes.normal||j.morphAttributes.color,ut=P!==void 0?P.length:0;let Ut=0;j.morphAttributes.position!==void 0&&(Ut=1),j.morphAttributes.normal!==void 0&&(Ut=2),j.morphAttributes.color!==void 0&&(Ut=3);let $t,J,nt,dt;if(it){const xt=xi[it];$t=xt.vertexShader,J=xt.fragmentShader}else $t=S.vertexShader,J=S.fragmentShader,l.update(S),nt=l.getVertexShaderID(S),dt=l.getFragmentShaderID(S);const et=r.getRenderTarget(),Mt=r.state.buffers.depth.getReversed(),At=B.isInstancedMesh===!0,zt=B.isBatchedMesh===!0,Kt=!!S.map,Ot=!!S.matcap,Pt=!!$,I=!!S.aoMap,he=!!S.lightMap,Bt=!!S.bumpMap,z=!!S.normalMap,Et=!!S.displacementMap,ie=!!S.emissiveMap,wt=!!S.metalnessMap,A=!!S.roughnessMap,M=S.anisotropy>0,V=S.clearcoat>0,N=S.dispersion>0,k=S.iridescence>0,q=S.sheen>0,rt=S.transmission>0,ot=M&&!!S.anisotropyMap,lt=V&&!!S.clearcoatMap,Tt=V&&!!S.clearcoatNormalMap,tt=V&&!!S.clearcoatRoughnessMap,st=k&&!!S.iridescenceMap,Dt=k&&!!S.iridescenceThicknessMap,Rt=q&&!!S.sheenColorMap,_t=q&&!!S.sheenRoughnessMap,Xt=!!S.specularMap,Ft=!!S.specularColorMap,Qt=!!S.specularIntensityMap,D=rt&&!!S.transmissionMap,ht=rt&&!!S.thicknessMap,K=!!S.gradientMap,Q=!!S.alphaMap,ft=S.alphaTest>0,pt=!!S.alphaHash,kt=!!S.extensions;let le=ir;S.toneMapped&&(et===null||et.isXRRenderTarget===!0)&&(le=r.toneMapping);const Ie={shaderID:it,shaderType:S.type,shaderName:S.name,vertexShader:$t,fragmentShader:J,defines:S.defines,customVertexShaderID:nt,customFragmentShaderID:dt,isRawShaderMaterial:S.isRawShaderMaterial===!0,glslVersion:S.glslVersion,precision:d,batching:zt,batchingColor:zt&&B._colorsTexture!==null,instancing:At,instancingColor:At&&B.instanceColor!==null,instancingMorph:At&&B.morphTexture!==null,supportsVertexTextures:h,outputColorSpace:et===null?r.outputColorSpace:et.isXRRenderTarget===!0?et.texture.colorSpace:As,alphaToCoverage:!!S.alphaToCoverage,map:Kt,matcap:Ot,envMap:Pt,envMapMode:Pt&&$.mapping,envMapCubeUVHeight:H,aoMap:I,lightMap:he,bumpMap:Bt,normalMap:z,displacementMap:h&&Et,emissiveMap:ie,normalMapObjectSpace:z&&S.normalMapType===Ig,normalMapTangentSpace:z&&S.normalMapType===Lg,metalnessMap:wt,roughnessMap:A,anisotropy:M,anisotropyMap:ot,clearcoat:V,clearcoatMap:lt,clearcoatNormalMap:Tt,clearcoatRoughnessMap:tt,dispersion:N,iridescence:k,iridescenceMap:st,iridescenceThicknessMap:Dt,sheen:q,sheenColorMap:Rt,sheenRoughnessMap:_t,specularMap:Xt,specularColorMap:Ft,specularIntensityMap:Qt,transmission:rt,transmissionMap:D,thicknessMap:ht,gradientMap:K,opaque:S.transparent===!1&&S.blending===xs&&S.alphaToCoverage===!1,alphaMap:Q,alphaTest:ft,alphaHash:pt,combine:S.combine,mapUv:Kt&&g(S.map.channel),aoMapUv:I&&g(S.aoMap.channel),lightMapUv:he&&g(S.lightMap.channel),bumpMapUv:Bt&&g(S.bumpMap.channel),normalMapUv:z&&g(S.normalMap.channel),displacementMapUv:Et&&g(S.displacementMap.channel),emissiveMapUv:ie&&g(S.emissiveMap.channel),metalnessMapUv:wt&&g(S.metalnessMap.channel),roughnessMapUv:A&&g(S.roughnessMap.channel),anisotropyMapUv:ot&&g(S.anisotropyMap.channel),clearcoatMapUv:lt&&g(S.clearcoatMap.channel),clearcoatNormalMapUv:Tt&&g(S.clearcoatNormalMap.channel),clearcoatRoughnessMapUv:tt&&g(S.clearcoatRoughnessMap.channel),iridescenceMapUv:st&&g(S.iridescenceMap.channel),iridescenceThicknessMapUv:Dt&&g(S.iridescenceThicknessMap.channel),sheenColorMapUv:Rt&&g(S.sheenColorMap.channel),sheenRoughnessMapUv:_t&&g(S.sheenRoughnessMap.channel),specularMapUv:Xt&&g(S.specularMap.channel),specularColorMapUv:Ft&&g(S.specularColorMap.channel),specularIntensityMapUv:Qt&&g(S.specularIntensityMap.channel),transmissionMapUv:D&&g(S.transmissionMap.channel),thicknessMapUv:ht&&g(S.thicknessMap.channel),alphaMapUv:Q&&g(S.alphaMap.channel),vertexTangents:!!j.attributes.tangent&&(z||M),vertexColors:S.vertexColors,vertexAlphas:S.vertexColors===!0&&!!j.attributes.color&&j.attributes.color.itemSize===4,pointsUvs:B.isPoints===!0&&!!j.attributes.uv&&(Kt||Q),fog:!!G,useFog:S.fog===!0,fogExp2:!!G&&G.isFogExp2,flatShading:S.flatShading===!0,sizeAttenuation:S.sizeAttenuation===!0,logarithmicDepthBuffer:f,reverseDepthBuffer:Mt,skinning:B.isSkinnedMesh===!0,morphTargets:j.morphAttributes.position!==void 0,morphNormals:j.morphAttributes.normal!==void 0,morphColors:j.morphAttributes.color!==void 0,morphTargetsCount:ut,morphTextureStride:Ut,numDirLights:x.directional.length,numPointLights:x.point.length,numSpotLights:x.spot.length,numSpotLightMaps:x.spotLightMap.length,numRectAreaLights:x.rectArea.length,numHemiLights:x.hemi.length,numDirLightShadows:x.directionalShadowMap.length,numPointLightShadows:x.pointShadowMap.length,numSpotLightShadows:x.spotShadowMap.length,numSpotLightShadowsWithMaps:x.numSpotLightShadowsWithMaps,numLightProbes:x.numLightProbes,numClippingPlanes:o.numPlanes,numClipIntersection:o.numIntersection,dithering:S.dithering,shadowMapEnabled:r.shadowMap.enabled&&L.length>0,shadowMapType:r.shadowMap.type,toneMapping:le,decodeVideoTexture:Kt&&S.map.isVideoTexture===!0&&ae.getTransfer(S.map.colorSpace)===ge,decodeVideoTextureEmissive:ie&&S.emissiveMap.isVideoTexture===!0&&ae.getTransfer(S.emissiveMap.colorSpace)===ge,premultipliedAlpha:S.premultipliedAlpha,doubleSided:S.side===Ri,flipSided:S.side===bn,useDepthPacking:S.depthPacking>=0,depthPacking:S.depthPacking||0,index0AttributeName:S.index0AttributeName,extensionClipCullDistance:kt&&S.extensions.clipCullDistance===!0&&n.has("WEBGL_clip_cull_distance"),extensionMultiDraw:(kt&&S.extensions.multiDraw===!0||zt)&&n.has("WEBGL_multi_draw"),rendererExtensionParallelShaderCompile:n.has("KHR_parallel_shader_compile"),customProgramCacheKey:S.customProgramCacheKey()};return Ie.vertexUv1s=c.has(1),Ie.vertexUv2s=c.has(2),Ie.vertexUv3s=c.has(3),c.clear(),Ie}function p(S){const x=[];if(S.shaderID?x.push(S.shaderID):(x.push(S.customVertexShaderID),x.push(S.customFragmentShaderID)),S.defines!==void 0)for(const L in S.defines)x.push(L),x.push(S.defines[L]);return S.isRawShaderMaterial===!1&&(y(x,S),E(x,S),x.push(r.outputColorSpace)),x.push(S.customProgramCacheKey),x.join()}function y(S,x){S.push(x.precision),S.push(x.outputColorSpace),S.push(x.envMapMode),S.push(x.envMapCubeUVHeight),S.push(x.mapUv),S.push(x.alphaMapUv),S.push(x.lightMapUv),S.push(x.aoMapUv),S.push(x.bumpMapUv),S.push(x.normalMapUv),S.push(x.displacementMapUv),S.push(x.emissiveMapUv),S.push(x.metalnessMapUv),S.push(x.roughnessMapUv),S.push(x.anisotropyMapUv),S.push(x.clearcoatMapUv),S.push(x.clearcoatNormalMapUv),S.push(x.clearcoatRoughnessMapUv),S.push(x.iridescenceMapUv),S.push(x.iridescenceThicknessMapUv),S.push(x.sheenColorMapUv),S.push(x.sheenRoughnessMapUv),S.push(x.specularMapUv),S.push(x.specularColorMapUv),S.push(x.specularIntensityMapUv),S.push(x.transmissionMapUv),S.push(x.thicknessMapUv),S.push(x.combine),S.push(x.fogExp2),S.push(x.sizeAttenuation),S.push(x.morphTargetsCount),S.push(x.morphAttributeCount),S.push(x.numDirLights),S.push(x.numPointLights),S.push(x.numSpotLights),S.push(x.numSpotLightMaps),S.push(x.numHemiLights),S.push(x.numRectAreaLights),S.push(x.numDirLightShadows),S.push(x.numPointLightShadows),S.push(x.numSpotLightShadows),S.push(x.numSpotLightShadowsWithMaps),S.push(x.numLightProbes),S.push(x.shadowMapType),S.push(x.toneMapping),S.push(x.numClippingPlanes),S.push(x.numClipIntersection),S.push(x.depthPacking)}function E(S,x){a.disableAll(),x.supportsVertexTextures&&a.enable(0),x.instancing&&a.enable(1),x.instancingColor&&a.enable(2),x.instancingMorph&&a.enable(3),x.matcap&&a.enable(4),x.envMap&&a.enable(5),x.normalMapObjectSpace&&a.enable(6),x.normalMapTangentSpace&&a.enable(7),x.clearcoat&&a.enable(8),x.iridescence&&a.enable(9),x.alphaTest&&a.enable(10),x.vertexColors&&a.enable(11),x.vertexAlphas&&a.enable(12),x.vertexUv1s&&a.enable(13),x.vertexUv2s&&a.enable(14),x.vertexUv3s&&a.enable(15),x.vertexTangents&&a.enable(16),x.anisotropy&&a.enable(17),x.alphaHash&&a.enable(18),x.batching&&a.enable(19),x.dispersion&&a.enable(20),x.batchingColor&&a.enable(21),S.push(a.mask),a.disableAll(),x.fog&&a.enable(0),x.useFog&&a.enable(1),x.flatShading&&a.enable(2),x.logarithmicDepthBuffer&&a.enable(3),x.reverseDepthBuffer&&a.enable(4),x.skinning&&a.enable(5),x.morphTargets&&a.enable(6),x.morphNormals&&a.enable(7),x.morphColors&&a.enable(8),x.premultipliedAlpha&&a.enable(9),x.shadowMapEnabled&&a.enable(10),x.doubleSided&&a.enable(11),x.flipSided&&a.enable(12),x.useDepthPacking&&a.enable(13),x.dithering&&a.enable(14),x.transmission&&a.enable(15),x.sheen&&a.enable(16),x.opaque&&a.enable(17),x.pointsUvs&&a.enable(18),x.decodeVideoTexture&&a.enable(19),x.decodeVideoTextureEmissive&&a.enable(20),x.alphaToCoverage&&a.enable(21),S.push(a.mask)}function v(S){const x=_[S.type];let L;if(x){const F=xi[x];L=c0.clone(F.uniforms)}else L=S.uniforms;return L}function C(S,x){let L;for(let F=0,B=u.length;F<B;F++){const G=u[F];if(G.cacheKey===x){L=G,++L.usedTimes;break}}return L===void 0&&(L=new GS(r,x,S,s),u.push(L)),L}function w(S){if(--S.usedTimes===0){const x=u.indexOf(S);u[x]=u[u.length-1],u.pop(),S.destroy()}}function b(S){l.remove(S)}function R(){l.dispose()}return{getParameters:m,getProgramCacheKey:p,getUniforms:v,acquireProgram:C,releaseProgram:w,releaseShaderCache:b,programs:u,dispose:R}}function $S(){let r=new WeakMap;function t(o){return r.has(o)}function e(o){let a=r.get(o);return a===void 0&&(a={},r.set(o,a)),a}function n(o){r.delete(o)}function i(o,a,l){r.get(o)[a]=l}function s(){r=new WeakMap}return{has:t,get:e,remove:n,update:i,dispose:s}}function KS(r,t){return r.groupOrder!==t.groupOrder?r.groupOrder-t.groupOrder:r.renderOrder!==t.renderOrder?r.renderOrder-t.renderOrder:r.material.id!==t.material.id?r.material.id-t.material.id:r.z!==t.z?r.z-t.z:r.id-t.id}function kp(r,t){return r.groupOrder!==t.groupOrder?r.groupOrder-t.groupOrder:r.renderOrder!==t.renderOrder?r.renderOrder-t.renderOrder:r.z!==t.z?t.z-r.z:r.id-t.id}function Hp(){const r=[];let t=0;const e=[],n=[],i=[];function s(){t=0,e.length=0,n.length=0,i.length=0}function o(f,h,d,_,g,m){let p=r[t];return p===void 0?(p={id:f.id,object:f,geometry:h,material:d,groupOrder:_,renderOrder:f.renderOrder,z:g,group:m},r[t]=p):(p.id=f.id,p.object=f,p.geometry=h,p.material=d,p.groupOrder=_,p.renderOrder=f.renderOrder,p.z=g,p.group=m),t++,p}function a(f,h,d,_,g,m){const p=o(f,h,d,_,g,m);d.transmission>0?n.push(p):d.transparent===!0?i.push(p):e.push(p)}function l(f,h,d,_,g,m){const p=o(f,h,d,_,g,m);d.transmission>0?n.unshift(p):d.transparent===!0?i.unshift(p):e.unshift(p)}function c(f,h){e.length>1&&e.sort(f||KS),n.length>1&&n.sort(h||kp),i.length>1&&i.sort(h||kp)}function u(){for(let f=t,h=r.length;f<h;f++){const d=r[f];if(d.id===null)break;d.id=null,d.object=null,d.geometry=null,d.material=null,d.group=null}}return{opaque:e,transmissive:n,transparent:i,init:s,push:a,unshift:l,finish:u,sort:c}}function ZS(){let r=new WeakMap;function t(n,i){const s=r.get(n);let o;return s===void 0?(o=new Hp,r.set(n,[o])):i>=s.length?(o=new Hp,s.push(o)):o=s[i],o}function e(){r=new WeakMap}return{get:t,dispose:e}}function jS(){const r={};return{get:function(t){if(r[t.id]!==void 0)return r[t.id];let e;switch(t.type){case"DirectionalLight":e={direction:new Z,color:new oe};break;case"SpotLight":e={position:new Z,direction:new Z,color:new oe,distance:0,coneCos:0,penumbraCos:0,decay:0};break;case"PointLight":e={position:new Z,color:new oe,distance:0,decay:0};break;case"HemisphereLight":e={direction:new Z,skyColor:new oe,groundColor:new oe};break;case"RectAreaLight":e={color:new oe,position:new Z,halfWidth:new Z,halfHeight:new Z};break}return r[t.id]=e,e}}}function JS(){const r={};return{get:function(t){if(r[t.id]!==void 0)return r[t.id];let e;switch(t.type){case"DirectionalLight":e={shadowIntensity:1,shadowBias:0,shadowNormalBias:0,shadowRadius:1,shadowMapSize:new Se};break;case"SpotLight":e={shadowIntensity:1,shadowBias:0,shadowNormalBias:0,shadowRadius:1,shadowMapSize:new Se};break;case"PointLight":e={shadowIntensity:1,shadowBias:0,shadowNormalBias:0,shadowRadius:1,shadowMapSize:new Se,shadowCameraNear:1,shadowCameraFar:1e3};break}return r[t.id]=e,e}}}let QS=0;function tM(r,t){return(t.castShadow?2:0)-(r.castShadow?2:0)+(t.map?1:0)-(r.map?1:0)}function eM(r){const t=new jS,e=JS(),n={version:0,hash:{directionalLength:-1,pointLength:-1,spotLength:-1,rectAreaLength:-1,hemiLength:-1,numDirectionalShadows:-1,numPointShadows:-1,numSpotShadows:-1,numSpotMaps:-1,numLightProbes:-1},ambient:[0,0,0],probe:[],directional:[],directionalShadow:[],directionalShadowMap:[],directionalShadowMatrix:[],spot:[],spotLightMap:[],spotShadow:[],spotShadowMap:[],spotLightMatrix:[],rectArea:[],rectAreaLTC1:null,rectAreaLTC2:null,point:[],pointShadow:[],pointShadowMap:[],pointShadowMatrix:[],hemi:[],numSpotLightShadowsWithMaps:0,numLightProbes:0};for(let c=0;c<9;c++)n.probe.push(new Z);const i=new Z,s=new Pe,o=new Pe;function a(c){let u=0,f=0,h=0;for(let S=0;S<9;S++)n.probe[S].set(0,0,0);let d=0,_=0,g=0,m=0,p=0,y=0,E=0,v=0,C=0,w=0,b=0;c.sort(tM);for(let S=0,x=c.length;S<x;S++){const L=c[S],F=L.color,B=L.intensity,G=L.distance,j=L.shadow&&L.shadow.map?L.shadow.map.texture:null;if(L.isAmbientLight)u+=F.r*B,f+=F.g*B,h+=F.b*B;else if(L.isLightProbe){for(let Y=0;Y<9;Y++)n.probe[Y].addScaledVector(L.sh.coefficients[Y],B);b++}else if(L.isDirectionalLight){const Y=t.get(L);if(Y.color.copy(L.color).multiplyScalar(L.intensity),L.castShadow){const $=L.shadow,H=e.get(L);H.shadowIntensity=$.intensity,H.shadowBias=$.bias,H.shadowNormalBias=$.normalBias,H.shadowRadius=$.radius,H.shadowMapSize=$.mapSize,n.directionalShadow[d]=H,n.directionalShadowMap[d]=j,n.directionalShadowMatrix[d]=L.shadow.matrix,y++}n.directional[d]=Y,d++}else if(L.isSpotLight){const Y=t.get(L);Y.position.setFromMatrixPosition(L.matrixWorld),Y.color.copy(F).multiplyScalar(B),Y.distance=G,Y.coneCos=Math.cos(L.angle),Y.penumbraCos=Math.cos(L.angle*(1-L.penumbra)),Y.decay=L.decay,n.spot[g]=Y;const $=L.shadow;if(L.map&&(n.spotLightMap[C]=L.map,C++,$.updateMatrices(L),L.castShadow&&w++),n.spotLightMatrix[g]=$.matrix,L.castShadow){const H=e.get(L);H.shadowIntensity=$.intensity,H.shadowBias=$.bias,H.shadowNormalBias=$.normalBias,H.shadowRadius=$.radius,H.shadowMapSize=$.mapSize,n.spotShadow[g]=H,n.spotShadowMap[g]=j,v++}g++}else if(L.isRectAreaLight){const Y=t.get(L);Y.color.copy(F).multiplyScalar(B),Y.halfWidth.set(L.width*.5,0,0),Y.halfHeight.set(0,L.height*.5,0),n.rectArea[m]=Y,m++}else if(L.isPointLight){const Y=t.get(L);if(Y.color.copy(L.color).multiplyScalar(L.intensity),Y.distance=L.distance,Y.decay=L.decay,L.castShadow){const $=L.shadow,H=e.get(L);H.shadowIntensity=$.intensity,H.shadowBias=$.bias,H.shadowNormalBias=$.normalBias,H.shadowRadius=$.radius,H.shadowMapSize=$.mapSize,H.shadowCameraNear=$.camera.near,H.shadowCameraFar=$.camera.far,n.pointShadow[_]=H,n.pointShadowMap[_]=j,n.pointShadowMatrix[_]=L.shadow.matrix,E++}n.point[_]=Y,_++}else if(L.isHemisphereLight){const Y=t.get(L);Y.skyColor.copy(L.color).multiplyScalar(B),Y.groundColor.copy(L.groundColor).multiplyScalar(B),n.hemi[p]=Y,p++}}m>0&&(r.has("OES_texture_float_linear")===!0?(n.rectAreaLTC1=vt.LTC_FLOAT_1,n.rectAreaLTC2=vt.LTC_FLOAT_2):(n.rectAreaLTC1=vt.LTC_HALF_1,n.rectAreaLTC2=vt.LTC_HALF_2)),n.ambient[0]=u,n.ambient[1]=f,n.ambient[2]=h;const R=n.hash;(R.directionalLength!==d||R.pointLength!==_||R.spotLength!==g||R.rectAreaLength!==m||R.hemiLength!==p||R.numDirectionalShadows!==y||R.numPointShadows!==E||R.numSpotShadows!==v||R.numSpotMaps!==C||R.numLightProbes!==b)&&(n.directional.length=d,n.spot.length=g,n.rectArea.length=m,n.point.length=_,n.hemi.length=p,n.directionalShadow.length=y,n.directionalShadowMap.length=y,n.pointShadow.length=E,n.pointShadowMap.length=E,n.spotShadow.length=v,n.spotShadowMap.length=v,n.directionalShadowMatrix.length=y,n.pointShadowMatrix.length=E,n.spotLightMatrix.length=v+C-w,n.spotLightMap.length=C,n.numSpotLightShadowsWithMaps=w,n.numLightProbes=b,R.directionalLength=d,R.pointLength=_,R.spotLength=g,R.rectAreaLength=m,R.hemiLength=p,R.numDirectionalShadows=y,R.numPointShadows=E,R.numSpotShadows=v,R.numSpotMaps=C,R.numLightProbes=b,n.version=QS++)}function l(c,u){let f=0,h=0,d=0,_=0,g=0;const m=u.matrixWorldInverse;for(let p=0,y=c.length;p<y;p++){const E=c[p];if(E.isDirectionalLight){const v=n.directional[f];v.direction.setFromMatrixPosition(E.matrixWorld),i.setFromMatrixPosition(E.target.matrixWorld),v.direction.sub(i),v.direction.transformDirection(m),f++}else if(E.isSpotLight){const v=n.spot[d];v.position.setFromMatrixPosition(E.matrixWorld),v.position.applyMatrix4(m),v.direction.setFromMatrixPosition(E.matrixWorld),i.setFromMatrixPosition(E.target.matrixWorld),v.direction.sub(i),v.direction.transformDirection(m),d++}else if(E.isRectAreaLight){const v=n.rectArea[_];v.position.setFromMatrixPosition(E.matrixWorld),v.position.applyMatrix4(m),o.identity(),s.copy(E.matrixWorld),s.premultiply(m),o.extractRotation(s),v.halfWidth.set(E.width*.5,0,0),v.halfHeight.set(0,E.height*.5,0),v.halfWidth.applyMatrix4(o),v.halfHeight.applyMatrix4(o),_++}else if(E.isPointLight){const v=n.point[h];v.position.setFromMatrixPosition(E.matrixWorld),v.position.applyMatrix4(m),h++}else if(E.isHemisphereLight){const v=n.hemi[g];v.direction.setFromMatrixPosition(E.matrixWorld),v.direction.transformDirection(m),g++}}}return{setup:a,setupView:l,state:n}}function Vp(r){const t=new eM(r),e=[],n=[];function i(u){c.camera=u,e.length=0,n.length=0}function s(u){e.push(u)}function o(u){n.push(u)}function a(){t.setup(e)}function l(u){t.setupView(e,u)}const c={lightsArray:e,shadowsArray:n,camera:null,lights:t,transmissionRenderTarget:{}};return{init:i,state:c,setupLights:a,setupLightsView:l,pushLight:s,pushShadow:o}}function nM(r){let t=new WeakMap;function e(i,s=0){const o=t.get(i);let a;return o===void 0?(a=new Vp(r),t.set(i,[a])):s>=o.length?(a=new Vp(r),o.push(a)):a=o[s],a}function n(){t=new WeakMap}return{get:e,dispose:n}}class iM extends ja{static get type(){return"MeshDepthMaterial"}constructor(t){super(),this.isMeshDepthMaterial=!0,this.depthPacking=Pg,this.map=null,this.alphaMap=null,this.displacementMap=null,this.displacementScale=1,this.displacementBias=0,this.wireframe=!1,this.wireframeLinewidth=1,this.setValues(t)}copy(t){return super.copy(t),this.depthPacking=t.depthPacking,this.map=t.map,this.alphaMap=t.alphaMap,this.displacementMap=t.displacementMap,this.displacementScale=t.displacementScale,this.displacementBias=t.displacementBias,this.wireframe=t.wireframe,this.wireframeLinewidth=t.wireframeLinewidth,this}}class rM extends ja{static get type(){return"MeshDistanceMaterial"}constructor(t){super(),this.isMeshDistanceMaterial=!0,this.map=null,this.alphaMap=null,this.displacementMap=null,this.displacementScale=1,this.displacementBias=0,this.setValues(t)}copy(t){return super.copy(t),this.map=t.map,this.alphaMap=t.alphaMap,this.displacementMap=t.displacementMap,this.displacementScale=t.displacementScale,this.displacementBias=t.displacementBias,this}}const sM=`void main() {
	gl_Position = vec4( position, 1.0 );
}`,oM=`uniform sampler2D shadow_pass;
uniform vec2 resolution;
uniform float radius;
#include <packing>
void main() {
	const float samples = float( VSM_SAMPLES );
	float mean = 0.0;
	float squared_mean = 0.0;
	float uvStride = samples <= 1.0 ? 0.0 : 2.0 / ( samples - 1.0 );
	float uvStart = samples <= 1.0 ? 0.0 : - 1.0;
	for ( float i = 0.0; i < samples; i ++ ) {
		float uvOffset = uvStart + i * uvStride;
		#ifdef HORIZONTAL_PASS
			vec2 distribution = unpackRGBATo2Half( texture2D( shadow_pass, ( gl_FragCoord.xy + vec2( uvOffset, 0.0 ) * radius ) / resolution ) );
			mean += distribution.x;
			squared_mean += distribution.y * distribution.y + distribution.x * distribution.x;
		#else
			float depth = unpackRGBAToDepth( texture2D( shadow_pass, ( gl_FragCoord.xy + vec2( 0.0, uvOffset ) * radius ) / resolution ) );
			mean += depth;
			squared_mean += depth * depth;
		#endif
	}
	mean = mean / samples;
	squared_mean = squared_mean / samples;
	float std_dev = sqrt( squared_mean - mean * mean );
	gl_FragColor = pack2HalfToRGBA( vec2( mean, std_dev ) );
}`;function aM(r,t,e){let n=new fp;const i=new Se,s=new Se,o=new Fe,a=new iM({depthPacking:Dg}),l=new rM,c={},u=e.maxTextureSize,f={[er]:bn,[bn]:er,[Ri]:Ri},h=new ur({defines:{VSM_SAMPLES:8},uniforms:{shadow_pass:{value:null},resolution:{value:new Se},radius:{value:4}},vertexShader:sM,fragmentShader:oM}),d=h.clone();d.defines.HORIZONTAL_PASS=1;const _=new Hr;_.setAttribute("position",new oi(new Float32Array([-1,-1,.5,3,-1,.5,-1,3,.5]),3));const g=new ai(_,h),m=this;this.enabled=!1,this.autoUpdate=!0,this.needsUpdate=!1,this.type=_d;let p=this.type;this.render=function(w,b,R){if(m.enabled===!1||m.autoUpdate===!1&&m.needsUpdate===!1||w.length===0)return;const S=r.getRenderTarget(),x=r.getActiveCubeFace(),L=r.getActiveMipmapLevel(),F=r.state;F.setBlending(nr),F.buffers.color.setClear(1,1,1,1),F.buffers.depth.setTest(!0),F.setScissorTest(!1);const B=p!==wi&&this.type===wi,G=p===wi&&this.type!==wi;for(let j=0,Y=w.length;j<Y;j++){const $=w[j],H=$.shadow;if(H===void 0){console.warn("THREE.WebGLShadowMap:",$,"has no shadow.");continue}if(H.autoUpdate===!1&&H.needsUpdate===!1)continue;i.copy(H.mapSize);const it=H.getFrameExtents();if(i.multiply(it),s.copy(H.mapSize),(i.x>u||i.y>u)&&(i.x>u&&(s.x=Math.floor(u/it.x),i.x=s.x*it.x,H.mapSize.x=s.x),i.y>u&&(s.y=Math.floor(u/it.y),i.y=s.y*it.y,H.mapSize.y=s.y)),H.map===null||B===!0||G===!0){const ut=this.type!==wi?{minFilter:zn,magFilter:zn}:{};H.map!==null&&H.map.dispose(),H.map=new Fr(i.x,i.y,ut),H.map.texture.name=$.name+".shadowMap",H.camera.updateProjectionMatrix()}r.setRenderTarget(H.map),r.clear();const P=H.getViewportCount();for(let ut=0;ut<P;ut++){const Ut=H.getViewport(ut);o.set(s.x*Ut.x,s.y*Ut.y,s.x*Ut.z,s.y*Ut.w),F.viewport(o),H.updateMatrices($,ut),n=H.getFrustum(),v(b,R,H.camera,$,this.type)}H.isPointLightShadow!==!0&&this.type===wi&&y(H,R),H.needsUpdate=!1}p=this.type,m.needsUpdate=!1,r.setRenderTarget(S,x,L)};function y(w,b){const R=t.update(g);h.defines.VSM_SAMPLES!==w.blurSamples&&(h.defines.VSM_SAMPLES=w.blurSamples,d.defines.VSM_SAMPLES=w.blurSamples,h.needsUpdate=!0,d.needsUpdate=!0),w.mapPass===null&&(w.mapPass=new Fr(i.x,i.y)),h.uniforms.shadow_pass.value=w.map.texture,h.uniforms.resolution.value=w.mapSize,h.uniforms.radius.value=w.radius,r.setRenderTarget(w.mapPass),r.clear(),r.renderBufferDirect(b,null,R,h,g,null),d.uniforms.shadow_pass.value=w.mapPass.texture,d.uniforms.resolution.value=w.mapSize,d.uniforms.radius.value=w.radius,r.setRenderTarget(w.map),r.clear(),r.renderBufferDirect(b,null,R,d,g,null)}function E(w,b,R,S){let x=null;const L=R.isPointLight===!0?w.customDistanceMaterial:w.customDepthMaterial;if(L!==void 0)x=L;else if(x=R.isPointLight===!0?l:a,r.localClippingEnabled&&b.clipShadows===!0&&Array.isArray(b.clippingPlanes)&&b.clippingPlanes.length!==0||b.displacementMap&&b.displacementScale!==0||b.alphaMap&&b.alphaTest>0||b.map&&b.alphaTest>0){const F=x.uuid,B=b.uuid;let G=c[F];G===void 0&&(G={},c[F]=G);let j=G[B];j===void 0&&(j=x.clone(),G[B]=j,b.addEventListener("dispose",C)),x=j}if(x.visible=b.visible,x.wireframe=b.wireframe,S===wi?x.side=b.shadowSide!==null?b.shadowSide:b.side:x.side=b.shadowSide!==null?b.shadowSide:f[b.side],x.alphaMap=b.alphaMap,x.alphaTest=b.alphaTest,x.map=b.map,x.clipShadows=b.clipShadows,x.clippingPlanes=b.clippingPlanes,x.clipIntersection=b.clipIntersection,x.displacementMap=b.displacementMap,x.displacementScale=b.displacementScale,x.displacementBias=b.displacementBias,x.wireframeLinewidth=b.wireframeLinewidth,x.linewidth=b.linewidth,R.isPointLight===!0&&x.isMeshDistanceMaterial===!0){const F=r.properties.get(x);F.light=R}return x}function v(w,b,R,S,x){if(w.visible===!1)return;if(w.layers.test(b.layers)&&(w.isMesh||w.isLine||w.isPoints)&&(w.castShadow||w.receiveShadow&&x===wi)&&(!w.frustumCulled||n.intersectsObject(w))){w.modelViewMatrix.multiplyMatrices(R.matrixWorldInverse,w.matrixWorld);const B=t.update(w),G=w.material;if(Array.isArray(G)){const j=B.groups;for(let Y=0,$=j.length;Y<$;Y++){const H=j[Y],it=G[H.materialIndex];if(it&&it.visible){const P=E(w,it,S,x);w.onBeforeShadow(r,w,b,R,B,P,H),r.renderBufferDirect(R,null,B,P,w,H),w.onAfterShadow(r,w,b,R,B,P,H)}}}else if(G.visible){const j=E(w,G,S,x);w.onBeforeShadow(r,w,b,R,B,j,null),r.renderBufferDirect(R,null,B,j,w,null),w.onAfterShadow(r,w,b,R,B,j,null)}}const F=w.children;for(let B=0,G=F.length;B<G;B++)v(F[B],b,R,S,x)}function C(w){w.target.removeEventListener("dispose",C);for(const R in c){const S=c[R],x=w.target.uuid;x in S&&(S[x].dispose(),delete S[x])}}}const lM={[wc]:Rc,[Cc]:Lc,[Pc]:Ic,[Ss]:Dc,[Rc]:wc,[Lc]:Cc,[Ic]:Pc,[Dc]:Ss};function cM(r,t){function e(){let D=!1;const ht=new Fe;let K=null;const Q=new Fe(0,0,0,0);return{setMask:function(ft){K!==ft&&!D&&(r.colorMask(ft,ft,ft,ft),K=ft)},setLocked:function(ft){D=ft},setClear:function(ft,pt,kt,le,Ie){Ie===!0&&(ft*=le,pt*=le,kt*=le),ht.set(ft,pt,kt,le),Q.equals(ht)===!1&&(r.clearColor(ft,pt,kt,le),Q.copy(ht))},reset:function(){D=!1,K=null,Q.set(-1,0,0,0)}}}function n(){let D=!1,ht=!1,K=null,Q=null,ft=null;return{setReversed:function(pt){if(ht!==pt){const kt=t.get("EXT_clip_control");ht?kt.clipControlEXT(kt.LOWER_LEFT_EXT,kt.ZERO_TO_ONE_EXT):kt.clipControlEXT(kt.LOWER_LEFT_EXT,kt.NEGATIVE_ONE_TO_ONE_EXT);const le=ft;ft=null,this.setClear(le)}ht=pt},getReversed:function(){return ht},setTest:function(pt){pt?et(r.DEPTH_TEST):Mt(r.DEPTH_TEST)},setMask:function(pt){K!==pt&&!D&&(r.depthMask(pt),K=pt)},setFunc:function(pt){if(ht&&(pt=lM[pt]),Q!==pt){switch(pt){case wc:r.depthFunc(r.NEVER);break;case Rc:r.depthFunc(r.ALWAYS);break;case Cc:r.depthFunc(r.LESS);break;case Ss:r.depthFunc(r.LEQUAL);break;case Pc:r.depthFunc(r.EQUAL);break;case Dc:r.depthFunc(r.GEQUAL);break;case Lc:r.depthFunc(r.GREATER);break;case Ic:r.depthFunc(r.NOTEQUAL);break;default:r.depthFunc(r.LEQUAL)}Q=pt}},setLocked:function(pt){D=pt},setClear:function(pt){ft!==pt&&(ht&&(pt=1-pt),r.clearDepth(pt),ft=pt)},reset:function(){D=!1,K=null,Q=null,ft=null,ht=!1}}}function i(){let D=!1,ht=null,K=null,Q=null,ft=null,pt=null,kt=null,le=null,Ie=null;return{setTest:function(xt){D||(xt?et(r.STENCIL_TEST):Mt(r.STENCIL_TEST))},setMask:function(xt){ht!==xt&&!D&&(r.stencilMask(xt),ht=xt)},setFunc:function(xt,Ct,jt){(K!==xt||Q!==Ct||ft!==jt)&&(r.stencilFunc(xt,Ct,jt),K=xt,Q=Ct,ft=jt)},setOp:function(xt,Ct,jt){(pt!==xt||kt!==Ct||le!==jt)&&(r.stencilOp(xt,Ct,jt),pt=xt,kt=Ct,le=jt)},setLocked:function(xt){D=xt},setClear:function(xt){Ie!==xt&&(r.clearStencil(xt),Ie=xt)},reset:function(){D=!1,ht=null,K=null,Q=null,ft=null,pt=null,kt=null,le=null,Ie=null}}}const s=new e,o=new n,a=new i,l=new WeakMap,c=new WeakMap;let u={},f={},h=new WeakMap,d=[],_=null,g=!1,m=null,p=null,y=null,E=null,v=null,C=null,w=null,b=new oe(0,0,0),R=0,S=!1,x=null,L=null,F=null,B=null,G=null;const j=r.getParameter(r.MAX_COMBINED_TEXTURE_IMAGE_UNITS);let Y=!1,$=0;const H=r.getParameter(r.VERSION);H.indexOf("WebGL")!==-1?($=parseFloat(/^WebGL (\d)/.exec(H)[1]),Y=$>=1):H.indexOf("OpenGL ES")!==-1&&($=parseFloat(/^OpenGL ES (\d)/.exec(H)[1]),Y=$>=2);let it=null,P={};const ut=r.getParameter(r.SCISSOR_BOX),Ut=r.getParameter(r.VIEWPORT),$t=new Fe().fromArray(ut),J=new Fe().fromArray(Ut);function nt(D,ht,K,Q){const ft=new Uint8Array(4),pt=r.createTexture();r.bindTexture(D,pt),r.texParameteri(D,r.TEXTURE_MIN_FILTER,r.NEAREST),r.texParameteri(D,r.TEXTURE_MAG_FILTER,r.NEAREST);for(let kt=0;kt<K;kt++)D===r.TEXTURE_3D||D===r.TEXTURE_2D_ARRAY?r.texImage3D(ht,0,r.RGBA,1,1,Q,0,r.RGBA,r.UNSIGNED_BYTE,ft):r.texImage2D(ht+kt,0,r.RGBA,1,1,0,r.RGBA,r.UNSIGNED_BYTE,ft);return pt}const dt={};dt[r.TEXTURE_2D]=nt(r.TEXTURE_2D,r.TEXTURE_2D,1),dt[r.TEXTURE_CUBE_MAP]=nt(r.TEXTURE_CUBE_MAP,r.TEXTURE_CUBE_MAP_POSITIVE_X,6),dt[r.TEXTURE_2D_ARRAY]=nt(r.TEXTURE_2D_ARRAY,r.TEXTURE_2D_ARRAY,1,1),dt[r.TEXTURE_3D]=nt(r.TEXTURE_3D,r.TEXTURE_3D,1,1),s.setClear(0,0,0,1),o.setClear(1),a.setClear(0),et(r.DEPTH_TEST),o.setFunc(Ss),Bt(!1),z(md),et(r.CULL_FACE),I(nr);function et(D){u[D]!==!0&&(r.enable(D),u[D]=!0)}function Mt(D){u[D]!==!1&&(r.disable(D),u[D]=!1)}function At(D,ht){return f[D]!==ht?(r.bindFramebuffer(D,ht),f[D]=ht,D===r.DRAW_FRAMEBUFFER&&(f[r.FRAMEBUFFER]=ht),D===r.FRAMEBUFFER&&(f[r.DRAW_FRAMEBUFFER]=ht),!0):!1}function zt(D,ht){let K=d,Q=!1;if(D){K=h.get(ht),K===void 0&&(K=[],h.set(ht,K));const ft=D.textures;if(K.length!==ft.length||K[0]!==r.COLOR_ATTACHMENT0){for(let pt=0,kt=ft.length;pt<kt;pt++)K[pt]=r.COLOR_ATTACHMENT0+pt;K.length=ft.length,Q=!0}}else K[0]!==r.BACK&&(K[0]=r.BACK,Q=!0);Q&&r.drawBuffers(K)}function Kt(D){return _!==D?(r.useProgram(D),_=D,!0):!1}const Ot={[Lr]:r.FUNC_ADD,[ig]:r.FUNC_SUBTRACT,[rg]:r.FUNC_REVERSE_SUBTRACT};Ot[sg]=r.MIN,Ot[og]=r.MAX;const Pt={[ag]:r.ZERO,[lg]:r.ONE,[cg]:r.SRC_COLOR,[bc]:r.SRC_ALPHA,[mg]:r.SRC_ALPHA_SATURATE,[dg]:r.DST_COLOR,[hg]:r.DST_ALPHA,[ug]:r.ONE_MINUS_SRC_COLOR,[Ac]:r.ONE_MINUS_SRC_ALPHA,[pg]:r.ONE_MINUS_DST_COLOR,[fg]:r.ONE_MINUS_DST_ALPHA,[_g]:r.CONSTANT_COLOR,[gg]:r.ONE_MINUS_CONSTANT_COLOR,[vg]:r.CONSTANT_ALPHA,[xg]:r.ONE_MINUS_CONSTANT_ALPHA};function I(D,ht,K,Q,ft,pt,kt,le,Ie,xt){if(D===nr){g===!0&&(Mt(r.BLEND),g=!1);return}if(g===!1&&(et(r.BLEND),g=!0),D!==ng){if(D!==m||xt!==S){if((p!==Lr||v!==Lr)&&(r.blendEquation(r.FUNC_ADD),p=Lr,v=Lr),xt)switch(D){case xs:r.blendFuncSeparate(r.ONE,r.ONE_MINUS_SRC_ALPHA,r.ONE,r.ONE_MINUS_SRC_ALPHA);break;case gd:r.blendFunc(r.ONE,r.ONE);break;case vd:r.blendFuncSeparate(r.ZERO,r.ONE_MINUS_SRC_COLOR,r.ZERO,r.ONE);break;case xd:r.blendFuncSeparate(r.ZERO,r.SRC_COLOR,r.ZERO,r.SRC_ALPHA);break;default:console.error("THREE.WebGLState: Invalid blending: ",D);break}else switch(D){case xs:r.blendFuncSeparate(r.SRC_ALPHA,r.ONE_MINUS_SRC_ALPHA,r.ONE,r.ONE_MINUS_SRC_ALPHA);break;case gd:r.blendFunc(r.SRC_ALPHA,r.ONE);break;case vd:r.blendFuncSeparate(r.ZERO,r.ONE_MINUS_SRC_COLOR,r.ZERO,r.ONE);break;case xd:r.blendFunc(r.ZERO,r.SRC_COLOR);break;default:console.error("THREE.WebGLState: Invalid blending: ",D);break}y=null,E=null,C=null,w=null,b.set(0,0,0),R=0,m=D,S=xt}return}ft=ft||ht,pt=pt||K,kt=kt||Q,(ht!==p||ft!==v)&&(r.blendEquationSeparate(Ot[ht],Ot[ft]),p=ht,v=ft),(K!==y||Q!==E||pt!==C||kt!==w)&&(r.blendFuncSeparate(Pt[K],Pt[Q],Pt[pt],Pt[kt]),y=K,E=Q,C=pt,w=kt),(le.equals(b)===!1||Ie!==R)&&(r.blendColor(le.r,le.g,le.b,Ie),b.copy(le),R=Ie),m=D,S=!1}function he(D,ht){D.side===Ri?Mt(r.CULL_FACE):et(r.CULL_FACE);let K=D.side===bn;ht&&(K=!K),Bt(K),D.blending===xs&&D.transparent===!1?I(nr):I(D.blending,D.blendEquation,D.blendSrc,D.blendDst,D.blendEquationAlpha,D.blendSrcAlpha,D.blendDstAlpha,D.blendColor,D.blendAlpha,D.premultipliedAlpha),o.setFunc(D.depthFunc),o.setTest(D.depthTest),o.setMask(D.depthWrite),s.setMask(D.colorWrite);const Q=D.stencilWrite;a.setTest(Q),Q&&(a.setMask(D.stencilWriteMask),a.setFunc(D.stencilFunc,D.stencilRef,D.stencilFuncMask),a.setOp(D.stencilFail,D.stencilZFail,D.stencilZPass)),ie(D.polygonOffset,D.polygonOffsetFactor,D.polygonOffsetUnits),D.alphaToCoverage===!0?et(r.SAMPLE_ALPHA_TO_COVERAGE):Mt(r.SAMPLE_ALPHA_TO_COVERAGE)}function Bt(D){x!==D&&(D?r.frontFace(r.CW):r.frontFace(r.CCW),x=D)}function z(D){D!==Q_?(et(r.CULL_FACE),D!==L&&(D===md?r.cullFace(r.BACK):D===tg?r.cullFace(r.FRONT):r.cullFace(r.FRONT_AND_BACK))):Mt(r.CULL_FACE),L=D}function Et(D){D!==F&&(Y&&r.lineWidth(D),F=D)}function ie(D,ht,K){D?(et(r.POLYGON_OFFSET_FILL),(B!==ht||G!==K)&&(r.polygonOffset(ht,K),B=ht,G=K)):Mt(r.POLYGON_OFFSET_FILL)}function wt(D){D?et(r.SCISSOR_TEST):Mt(r.SCISSOR_TEST)}function A(D){D===void 0&&(D=r.TEXTURE0+j-1),it!==D&&(r.activeTexture(D),it=D)}function M(D,ht,K){K===void 0&&(it===null?K=r.TEXTURE0+j-1:K=it);let Q=P[K];Q===void 0&&(Q={type:void 0,texture:void 0},P[K]=Q),(Q.type!==D||Q.texture!==ht)&&(it!==K&&(r.activeTexture(K),it=K),r.bindTexture(D,ht||dt[D]),Q.type=D,Q.texture=ht)}function V(){const D=P[it];D!==void 0&&D.type!==void 0&&(r.bindTexture(D.type,null),D.type=void 0,D.texture=void 0)}function N(){try{r.compressedTexImage2D.apply(r,arguments)}catch(D){console.error("THREE.WebGLState:",D)}}function k(){try{r.compressedTexImage3D.apply(r,arguments)}catch(D){console.error("THREE.WebGLState:",D)}}function q(){try{r.texSubImage2D.apply(r,arguments)}catch(D){console.error("THREE.WebGLState:",D)}}function rt(){try{r.texSubImage3D.apply(r,arguments)}catch(D){console.error("THREE.WebGLState:",D)}}function ot(){try{r.compressedTexSubImage2D.apply(r,arguments)}catch(D){console.error("THREE.WebGLState:",D)}}function lt(){try{r.compressedTexSubImage3D.apply(r,arguments)}catch(D){console.error("THREE.WebGLState:",D)}}function Tt(){try{r.texStorage2D.apply(r,arguments)}catch(D){console.error("THREE.WebGLState:",D)}}function tt(){try{r.texStorage3D.apply(r,arguments)}catch(D){console.error("THREE.WebGLState:",D)}}function st(){try{r.texImage2D.apply(r,arguments)}catch(D){console.error("THREE.WebGLState:",D)}}function Dt(){try{r.texImage3D.apply(r,arguments)}catch(D){console.error("THREE.WebGLState:",D)}}function Rt(D){$t.equals(D)===!1&&(r.scissor(D.x,D.y,D.z,D.w),$t.copy(D))}function _t(D){J.equals(D)===!1&&(r.viewport(D.x,D.y,D.z,D.w),J.copy(D))}function Xt(D,ht){let K=c.get(ht);K===void 0&&(K=new WeakMap,c.set(ht,K));let Q=K.get(D);Q===void 0&&(Q=r.getUniformBlockIndex(ht,D.name),K.set(D,Q))}function Ft(D,ht){const Q=c.get(ht).get(D);l.get(ht)!==Q&&(r.uniformBlockBinding(ht,Q,D.__bindingPointIndex),l.set(ht,Q))}function Qt(){r.disable(r.BLEND),r.disable(r.CULL_FACE),r.disable(r.DEPTH_TEST),r.disable(r.POLYGON_OFFSET_FILL),r.disable(r.SCISSOR_TEST),r.disable(r.STENCIL_TEST),r.disable(r.SAMPLE_ALPHA_TO_COVERAGE),r.blendEquation(r.FUNC_ADD),r.blendFunc(r.ONE,r.ZERO),r.blendFuncSeparate(r.ONE,r.ZERO,r.ONE,r.ZERO),r.blendColor(0,0,0,0),r.colorMask(!0,!0,!0,!0),r.clearColor(0,0,0,0),r.depthMask(!0),r.depthFunc(r.LESS),o.setReversed(!1),r.clearDepth(1),r.stencilMask(4294967295),r.stencilFunc(r.ALWAYS,0,4294967295),r.stencilOp(r.KEEP,r.KEEP,r.KEEP),r.clearStencil(0),r.cullFace(r.BACK),r.frontFace(r.CCW),r.polygonOffset(0,0),r.activeTexture(r.TEXTURE0),r.bindFramebuffer(r.FRAMEBUFFER,null),r.bindFramebuffer(r.DRAW_FRAMEBUFFER,null),r.bindFramebuffer(r.READ_FRAMEBUFFER,null),r.useProgram(null),r.lineWidth(1),r.scissor(0,0,r.canvas.width,r.canvas.height),r.viewport(0,0,r.canvas.width,r.canvas.height),u={},it=null,P={},f={},h=new WeakMap,d=[],_=null,g=!1,m=null,p=null,y=null,E=null,v=null,C=null,w=null,b=new oe(0,0,0),R=0,S=!1,x=null,L=null,F=null,B=null,G=null,$t.set(0,0,r.canvas.width,r.canvas.height),J.set(0,0,r.canvas.width,r.canvas.height),s.reset(),o.reset(),a.reset()}return{buffers:{color:s,depth:o,stencil:a},enable:et,disable:Mt,bindFramebuffer:At,drawBuffers:zt,useProgram:Kt,setBlending:I,setMaterial:he,setFlipSided:Bt,setCullFace:z,setLineWidth:Et,setPolygonOffset:ie,setScissorTest:wt,activeTexture:A,bindTexture:M,unbindTexture:V,compressedTexImage2D:N,compressedTexImage3D:k,texImage2D:st,texImage3D:Dt,updateUBOMapping:Xt,uniformBlockBinding:Ft,texStorage2D:Tt,texStorage3D:tt,texSubImage2D:q,texSubImage3D:rt,compressedTexSubImage2D:ot,compressedTexSubImage3D:lt,scissor:Rt,viewport:_t,reset:Qt}}function Gp(r,t,e,n){const i=uM(n);switch(e){case bd:return r*t;case wd:return r*t;case Rd:return r*t*2;case Vc:return r*t/i.components*i.byteLength;case Gc:return r*t/i.components*i.byteLength;case Cd:return r*t*2/i.components*i.byteLength;case Wc:return r*t*2/i.components*i.byteLength;case Ad:return r*t*3/i.components*i.byteLength;case ei:return r*t*4/i.components*i.byteLength;case Xc:return r*t*4/i.components*i.byteLength;case Na:case Fa:return Math.floor((r+3)/4)*Math.floor((t+3)/4)*8;case Oa:case Ba:return Math.floor((r+3)/4)*Math.floor((t+3)/4)*16;case qc:case Kc:return Math.max(r,16)*Math.max(t,8)/4;case Yc:case $c:return Math.max(r,8)*Math.max(t,8)/2;case Zc:case jc:return Math.floor((r+3)/4)*Math.floor((t+3)/4)*8;case Jc:return Math.floor((r+3)/4)*Math.floor((t+3)/4)*16;case Qc:return Math.floor((r+3)/4)*Math.floor((t+3)/4)*16;case tu:return Math.floor((r+4)/5)*Math.floor((t+3)/4)*16;case eu:return Math.floor((r+4)/5)*Math.floor((t+4)/5)*16;case nu:return Math.floor((r+5)/6)*Math.floor((t+4)/5)*16;case iu:return Math.floor((r+5)/6)*Math.floor((t+5)/6)*16;case ru:return Math.floor((r+7)/8)*Math.floor((t+4)/5)*16;case su:return Math.floor((r+7)/8)*Math.floor((t+5)/6)*16;case ou:return Math.floor((r+7)/8)*Math.floor((t+7)/8)*16;case au:return Math.floor((r+9)/10)*Math.floor((t+4)/5)*16;case lu:return Math.floor((r+9)/10)*Math.floor((t+5)/6)*16;case cu:return Math.floor((r+9)/10)*Math.floor((t+7)/8)*16;case uu:return Math.floor((r+9)/10)*Math.floor((t+9)/10)*16;case hu:return Math.floor((r+11)/12)*Math.floor((t+9)/10)*16;case fu:return Math.floor((r+11)/12)*Math.floor((t+11)/12)*16;case za:case du:case pu:return Math.ceil(r/4)*Math.ceil(t/4)*16;case Pd:case mu:return Math.ceil(r/4)*Math.ceil(t/4)*8;case _u:case gu:return Math.ceil(r/4)*Math.ceil(t/4)*16}throw new Error(`Unable to determine texture byte length for ${e} format.`)}function uM(r){switch(r){case Ci:case yd:return{byteLength:1,components:1};case Lo:case Ed:case Io:return{byteLength:2,components:1};case kc:case Hc:return{byteLength:2,components:4};case Nr:case zc:case vi:return{byteLength:4,components:1};case Td:return{byteLength:4,components:3}}throw new Error(`Unknown texture type ${r}.`)}function hM(r,t,e,n,i,s,o){const a=t.has("WEBGL_multisampled_render_to_texture")?t.get("WEBGL_multisampled_render_to_texture"):null,l=typeof navigator>"u"?!1:/OculusBrowser/g.test(navigator.userAgent),c=new Se,u=new WeakMap;let f;const h=new WeakMap;let d=!1;try{d=typeof OffscreenCanvas<"u"&&new OffscreenCanvas(1,1).getContext("2d")!==null}catch{}function _(A,M){return d?new OffscreenCanvas(A,M):Va("canvas")}function g(A,M,V){let N=1;const k=wt(A);if((k.width>V||k.height>V)&&(N=V/Math.max(k.width,k.height)),N<1)if(typeof HTMLImageElement<"u"&&A instanceof HTMLImageElement||typeof HTMLCanvasElement<"u"&&A instanceof HTMLCanvasElement||typeof ImageBitmap<"u"&&A instanceof ImageBitmap||typeof VideoFrame<"u"&&A instanceof VideoFrame){const q=Math.floor(N*k.width),rt=Math.floor(N*k.height);f===void 0&&(f=_(q,rt));const ot=M?_(q,rt):f;return ot.width=q,ot.height=rt,ot.getContext("2d").drawImage(A,0,0,q,rt),console.warn("THREE.WebGLRenderer: Texture has been resized from ("+k.width+"x"+k.height+") to ("+q+"x"+rt+")."),ot}else return"data"in A&&console.warn("THREE.WebGLRenderer: Image in DataTexture is too big ("+k.width+"x"+k.height+")."),A;return A}function m(A){return A.generateMipmaps}function p(A){r.generateMipmap(A)}function y(A){return A.isWebGLCubeRenderTarget?r.TEXTURE_CUBE_MAP:A.isWebGL3DRenderTarget?r.TEXTURE_3D:A.isWebGLArrayRenderTarget||A.isCompressedArrayTexture?r.TEXTURE_2D_ARRAY:r.TEXTURE_2D}function E(A,M,V,N,k=!1){if(A!==null){if(r[A]!==void 0)return r[A];console.warn("THREE.WebGLRenderer: Attempt to use non-existing WebGL internal format '"+A+"'")}let q=M;if(M===r.RED&&(V===r.FLOAT&&(q=r.R32F),V===r.HALF_FLOAT&&(q=r.R16F),V===r.UNSIGNED_BYTE&&(q=r.R8)),M===r.RED_INTEGER&&(V===r.UNSIGNED_BYTE&&(q=r.R8UI),V===r.UNSIGNED_SHORT&&(q=r.R16UI),V===r.UNSIGNED_INT&&(q=r.R32UI),V===r.BYTE&&(q=r.R8I),V===r.SHORT&&(q=r.R16I),V===r.INT&&(q=r.R32I)),M===r.RG&&(V===r.FLOAT&&(q=r.RG32F),V===r.HALF_FLOAT&&(q=r.RG16F),V===r.UNSIGNED_BYTE&&(q=r.RG8)),M===r.RG_INTEGER&&(V===r.UNSIGNED_BYTE&&(q=r.RG8UI),V===r.UNSIGNED_SHORT&&(q=r.RG16UI),V===r.UNSIGNED_INT&&(q=r.RG32UI),V===r.BYTE&&(q=r.RG8I),V===r.SHORT&&(q=r.RG16I),V===r.INT&&(q=r.RG32I)),M===r.RGB_INTEGER&&(V===r.UNSIGNED_BYTE&&(q=r.RGB8UI),V===r.UNSIGNED_SHORT&&(q=r.RGB16UI),V===r.UNSIGNED_INT&&(q=r.RGB32UI),V===r.BYTE&&(q=r.RGB8I),V===r.SHORT&&(q=r.RGB16I),V===r.INT&&(q=r.RGB32I)),M===r.RGBA_INTEGER&&(V===r.UNSIGNED_BYTE&&(q=r.RGBA8UI),V===r.UNSIGNED_SHORT&&(q=r.RGBA16UI),V===r.UNSIGNED_INT&&(q=r.RGBA32UI),V===r.BYTE&&(q=r.RGBA8I),V===r.SHORT&&(q=r.RGBA16I),V===r.INT&&(q=r.RGBA32I)),M===r.RGB&&V===r.UNSIGNED_INT_5_9_9_9_REV&&(q=r.RGB9_E5),M===r.RGBA){const rt=k?ka:ae.getTransfer(N);V===r.FLOAT&&(q=r.RGBA32F),V===r.HALF_FLOAT&&(q=r.RGBA16F),V===r.UNSIGNED_BYTE&&(q=rt===ge?r.SRGB8_ALPHA8:r.RGBA8),V===r.UNSIGNED_SHORT_4_4_4_4&&(q=r.RGBA4),V===r.UNSIGNED_SHORT_5_5_5_1&&(q=r.RGB5_A1)}return(q===r.R16F||q===r.R32F||q===r.RG16F||q===r.RG32F||q===r.RGBA16F||q===r.RGBA32F)&&t.get("EXT_color_buffer_float"),q}function v(A,M){let V;return A?M===null||M===Nr||M===Es?V=r.DEPTH24_STENCIL8:M===vi?V=r.DEPTH32F_STENCIL8:M===Lo&&(V=r.DEPTH24_STENCIL8,console.warn("DepthTexture: 16 bit depth attachment is not supported with stencil. Using 24-bit attachment.")):M===null||M===Nr||M===Es?V=r.DEPTH_COMPONENT24:M===vi?V=r.DEPTH_COMPONENT32F:M===Lo&&(V=r.DEPTH_COMPONENT16),V}function C(A,M){return m(A)===!0||A.isFramebufferTexture&&A.minFilter!==zn&&A.minFilter!==gi?Math.log2(Math.max(M.width,M.height))+1:A.mipmaps!==void 0&&A.mipmaps.length>0?A.mipmaps.length:A.isCompressedTexture&&Array.isArray(A.image)?M.mipmaps.length:1}function w(A){const M=A.target;M.removeEventListener("dispose",w),R(M),M.isVideoTexture&&u.delete(M)}function b(A){const M=A.target;M.removeEventListener("dispose",b),x(M)}function R(A){const M=n.get(A);if(M.__webglInit===void 0)return;const V=A.source,N=h.get(V);if(N){const k=N[M.__cacheKey];k.usedTimes--,k.usedTimes===0&&S(A),Object.keys(N).length===0&&h.delete(V)}n.remove(A)}function S(A){const M=n.get(A);r.deleteTexture(M.__webglTexture);const V=A.source,N=h.get(V);delete N[M.__cacheKey],o.memory.textures--}function x(A){const M=n.get(A);if(A.depthTexture&&(A.depthTexture.dispose(),n.remove(A.depthTexture)),A.isWebGLCubeRenderTarget)for(let N=0;N<6;N++){if(Array.isArray(M.__webglFramebuffer[N]))for(let k=0;k<M.__webglFramebuffer[N].length;k++)r.deleteFramebuffer(M.__webglFramebuffer[N][k]);else r.deleteFramebuffer(M.__webglFramebuffer[N]);M.__webglDepthbuffer&&r.deleteRenderbuffer(M.__webglDepthbuffer[N])}else{if(Array.isArray(M.__webglFramebuffer))for(let N=0;N<M.__webglFramebuffer.length;N++)r.deleteFramebuffer(M.__webglFramebuffer[N]);else r.deleteFramebuffer(M.__webglFramebuffer);if(M.__webglDepthbuffer&&r.deleteRenderbuffer(M.__webglDepthbuffer),M.__webglMultisampledFramebuffer&&r.deleteFramebuffer(M.__webglMultisampledFramebuffer),M.__webglColorRenderbuffer)for(let N=0;N<M.__webglColorRenderbuffer.length;N++)M.__webglColorRenderbuffer[N]&&r.deleteRenderbuffer(M.__webglColorRenderbuffer[N]);M.__webglDepthRenderbuffer&&r.deleteRenderbuffer(M.__webglDepthRenderbuffer)}const V=A.textures;for(let N=0,k=V.length;N<k;N++){const q=n.get(V[N]);q.__webglTexture&&(r.deleteTexture(q.__webglTexture),o.memory.textures--),n.remove(V[N])}n.remove(A)}let L=0;function F(){L=0}function B(){const A=L;return A>=i.maxTextures&&console.warn("THREE.WebGLTextures: Trying to use "+A+" texture units while this GPU supports only "+i.maxTextures),L+=1,A}function G(A){const M=[];return M.push(A.wrapS),M.push(A.wrapT),M.push(A.wrapR||0),M.push(A.magFilter),M.push(A.minFilter),M.push(A.anisotropy),M.push(A.internalFormat),M.push(A.format),M.push(A.type),M.push(A.generateMipmaps),M.push(A.premultiplyAlpha),M.push(A.flipY),M.push(A.unpackAlignment),M.push(A.colorSpace),M.join()}function j(A,M){const V=n.get(A);if(A.isVideoTexture&&Et(A),A.isRenderTargetTexture===!1&&A.version>0&&V.__version!==A.version){const N=A.image;if(N===null)console.warn("THREE.WebGLRenderer: Texture marked for update but no image data found.");else if(N.complete===!1)console.warn("THREE.WebGLRenderer: Texture marked for update but image is incomplete");else{J(V,A,M);return}}e.bindTexture(r.TEXTURE_2D,V.__webglTexture,r.TEXTURE0+M)}function Y(A,M){const V=n.get(A);if(A.version>0&&V.__version!==A.version){J(V,A,M);return}e.bindTexture(r.TEXTURE_2D_ARRAY,V.__webglTexture,r.TEXTURE0+M)}function $(A,M){const V=n.get(A);if(A.version>0&&V.__version!==A.version){J(V,A,M);return}e.bindTexture(r.TEXTURE_3D,V.__webglTexture,r.TEXTURE0+M)}function H(A,M){const V=n.get(A);if(A.version>0&&V.__version!==A.version){nt(V,A,M);return}e.bindTexture(r.TEXTURE_CUBE_MAP,V.__webglTexture,r.TEXTURE0+M)}const it={[Fc]:r.REPEAT,[Ir]:r.CLAMP_TO_EDGE,[Oc]:r.MIRRORED_REPEAT},P={[zn]:r.NEAREST,[Cg]:r.NEAREST_MIPMAP_NEAREST,[Ua]:r.NEAREST_MIPMAP_LINEAR,[gi]:r.LINEAR,[Bc]:r.LINEAR_MIPMAP_NEAREST,[Ur]:r.LINEAR_MIPMAP_LINEAR},ut={[Ug]:r.NEVER,[kg]:r.ALWAYS,[Ng]:r.LESS,[Ld]:r.LEQUAL,[Fg]:r.EQUAL,[zg]:r.GEQUAL,[Og]:r.GREATER,[Bg]:r.NOTEQUAL};function Ut(A,M){if(M.type===vi&&t.has("OES_texture_float_linear")===!1&&(M.magFilter===gi||M.magFilter===Bc||M.magFilter===Ua||M.magFilter===Ur||M.minFilter===gi||M.minFilter===Bc||M.minFilter===Ua||M.minFilter===Ur)&&console.warn("THREE.WebGLRenderer: Unable to use linear filtering with floating point textures. OES_texture_float_linear not supported on this device."),r.texParameteri(A,r.TEXTURE_WRAP_S,it[M.wrapS]),r.texParameteri(A,r.TEXTURE_WRAP_T,it[M.wrapT]),(A===r.TEXTURE_3D||A===r.TEXTURE_2D_ARRAY)&&r.texParameteri(A,r.TEXTURE_WRAP_R,it[M.wrapR]),r.texParameteri(A,r.TEXTURE_MAG_FILTER,P[M.magFilter]),r.texParameteri(A,r.TEXTURE_MIN_FILTER,P[M.minFilter]),M.compareFunction&&(r.texParameteri(A,r.TEXTURE_COMPARE_MODE,r.COMPARE_REF_TO_TEXTURE),r.texParameteri(A,r.TEXTURE_COMPARE_FUNC,ut[M.compareFunction])),t.has("EXT_texture_filter_anisotropic")===!0){if(M.magFilter===zn||M.minFilter!==Ua&&M.minFilter!==Ur||M.type===vi&&t.has("OES_texture_float_linear")===!1)return;if(M.anisotropy>1||n.get(M).__currentAnisotropy){const V=t.get("EXT_texture_filter_anisotropic");r.texParameterf(A,V.TEXTURE_MAX_ANISOTROPY_EXT,Math.min(M.anisotropy,i.getMaxAnisotropy())),n.get(M).__currentAnisotropy=M.anisotropy}}}function $t(A,M){let V=!1;A.__webglInit===void 0&&(A.__webglInit=!0,M.addEventListener("dispose",w));const N=M.source;let k=h.get(N);k===void 0&&(k={},h.set(N,k));const q=G(M);if(q!==A.__cacheKey){k[q]===void 0&&(k[q]={texture:r.createTexture(),usedTimes:0},o.memory.textures++,V=!0),k[q].usedTimes++;const rt=k[A.__cacheKey];rt!==void 0&&(k[A.__cacheKey].usedTimes--,rt.usedTimes===0&&S(M)),A.__cacheKey=q,A.__webglTexture=k[q].texture}return V}function J(A,M,V){let N=r.TEXTURE_2D;(M.isDataArrayTexture||M.isCompressedArrayTexture)&&(N=r.TEXTURE_2D_ARRAY),M.isData3DTexture&&(N=r.TEXTURE_3D);const k=$t(A,M),q=M.source;e.bindTexture(N,A.__webglTexture,r.TEXTURE0+V);const rt=n.get(q);if(q.version!==rt.__version||k===!0){e.activeTexture(r.TEXTURE0+V);const ot=ae.getPrimaries(ae.workingColorSpace),lt=M.colorSpace===rr?null:ae.getPrimaries(M.colorSpace),Tt=M.colorSpace===rr||ot===lt?r.NONE:r.BROWSER_DEFAULT_WEBGL;r.pixelStorei(r.UNPACK_FLIP_Y_WEBGL,M.flipY),r.pixelStorei(r.UNPACK_PREMULTIPLY_ALPHA_WEBGL,M.premultiplyAlpha),r.pixelStorei(r.UNPACK_ALIGNMENT,M.unpackAlignment),r.pixelStorei(r.UNPACK_COLORSPACE_CONVERSION_WEBGL,Tt);let tt=g(M.image,!1,i.maxTextureSize);tt=ie(M,tt);const st=s.convert(M.format,M.colorSpace),Dt=s.convert(M.type);let Rt=E(M.internalFormat,st,Dt,M.colorSpace,M.isVideoTexture);Ut(N,M);let _t;const Xt=M.mipmaps,Ft=M.isVideoTexture!==!0,Qt=rt.__version===void 0||k===!0,D=q.dataReady,ht=C(M,tt);if(M.isDepthTexture)Rt=v(M.format===bs,M.type),Qt&&(Ft?e.texStorage2D(r.TEXTURE_2D,1,Rt,tt.width,tt.height):e.texImage2D(r.TEXTURE_2D,0,Rt,tt.width,tt.height,0,st,Dt,null));else if(M.isDataTexture)if(Xt.length>0){Ft&&Qt&&e.texStorage2D(r.TEXTURE_2D,ht,Rt,Xt[0].width,Xt[0].height);for(let K=0,Q=Xt.length;K<Q;K++)_t=Xt[K],Ft?D&&e.texSubImage2D(r.TEXTURE_2D,K,0,0,_t.width,_t.height,st,Dt,_t.data):e.texImage2D(r.TEXTURE_2D,K,Rt,_t.width,_t.height,0,st,Dt,_t.data);M.generateMipmaps=!1}else Ft?(Qt&&e.texStorage2D(r.TEXTURE_2D,ht,Rt,tt.width,tt.height),D&&e.texSubImage2D(r.TEXTURE_2D,0,0,0,tt.width,tt.height,st,Dt,tt.data)):e.texImage2D(r.TEXTURE_2D,0,Rt,tt.width,tt.height,0,st,Dt,tt.data);else if(M.isCompressedTexture)if(M.isCompressedArrayTexture){Ft&&Qt&&e.texStorage3D(r.TEXTURE_2D_ARRAY,ht,Rt,Xt[0].width,Xt[0].height,tt.depth);for(let K=0,Q=Xt.length;K<Q;K++)if(_t=Xt[K],M.format!==ei)if(st!==null)if(Ft){if(D)if(M.layerUpdates.size>0){const ft=Gp(_t.width,_t.height,M.format,M.type);for(const pt of M.layerUpdates){const kt=_t.data.subarray(pt*ft/_t.data.BYTES_PER_ELEMENT,(pt+1)*ft/_t.data.BYTES_PER_ELEMENT);e.compressedTexSubImage3D(r.TEXTURE_2D_ARRAY,K,0,0,pt,_t.width,_t.height,1,st,kt)}M.clearLayerUpdates()}else e.compressedTexSubImage3D(r.TEXTURE_2D_ARRAY,K,0,0,0,_t.width,_t.height,tt.depth,st,_t.data)}else e.compressedTexImage3D(r.TEXTURE_2D_ARRAY,K,Rt,_t.width,_t.height,tt.depth,0,_t.data,0,0);else console.warn("THREE.WebGLRenderer: Attempt to load unsupported compressed texture format in .uploadTexture()");else Ft?D&&e.texSubImage3D(r.TEXTURE_2D_ARRAY,K,0,0,0,_t.width,_t.height,tt.depth,st,Dt,_t.data):e.texImage3D(r.TEXTURE_2D_ARRAY,K,Rt,_t.width,_t.height,tt.depth,0,st,Dt,_t.data)}else{Ft&&Qt&&e.texStorage2D(r.TEXTURE_2D,ht,Rt,Xt[0].width,Xt[0].height);for(let K=0,Q=Xt.length;K<Q;K++)_t=Xt[K],M.format!==ei?st!==null?Ft?D&&e.compressedTexSubImage2D(r.TEXTURE_2D,K,0,0,_t.width,_t.height,st,_t.data):e.compressedTexImage2D(r.TEXTURE_2D,K,Rt,_t.width,_t.height,0,_t.data):console.warn("THREE.WebGLRenderer: Attempt to load unsupported compressed texture format in .uploadTexture()"):Ft?D&&e.texSubImage2D(r.TEXTURE_2D,K,0,0,_t.width,_t.height,st,Dt,_t.data):e.texImage2D(r.TEXTURE_2D,K,Rt,_t.width,_t.height,0,st,Dt,_t.data)}else if(M.isDataArrayTexture)if(Ft){if(Qt&&e.texStorage3D(r.TEXTURE_2D_ARRAY,ht,Rt,tt.width,tt.height,tt.depth),D)if(M.layerUpdates.size>0){const K=Gp(tt.width,tt.height,M.format,M.type);for(const Q of M.layerUpdates){const ft=tt.data.subarray(Q*K/tt.data.BYTES_PER_ELEMENT,(Q+1)*K/tt.data.BYTES_PER_ELEMENT);e.texSubImage3D(r.TEXTURE_2D_ARRAY,0,0,0,Q,tt.width,tt.height,1,st,Dt,ft)}M.clearLayerUpdates()}else e.texSubImage3D(r.TEXTURE_2D_ARRAY,0,0,0,0,tt.width,tt.height,tt.depth,st,Dt,tt.data)}else e.texImage3D(r.TEXTURE_2D_ARRAY,0,Rt,tt.width,tt.height,tt.depth,0,st,Dt,tt.data);else if(M.isData3DTexture)Ft?(Qt&&e.texStorage3D(r.TEXTURE_3D,ht,Rt,tt.width,tt.height,tt.depth),D&&e.texSubImage3D(r.TEXTURE_3D,0,0,0,0,tt.width,tt.height,tt.depth,st,Dt,tt.data)):e.texImage3D(r.TEXTURE_3D,0,Rt,tt.width,tt.height,tt.depth,0,st,Dt,tt.data);else if(M.isFramebufferTexture){if(Qt)if(Ft)e.texStorage2D(r.TEXTURE_2D,ht,Rt,tt.width,tt.height);else{let K=tt.width,Q=tt.height;for(let ft=0;ft<ht;ft++)e.texImage2D(r.TEXTURE_2D,ft,Rt,K,Q,0,st,Dt,null),K>>=1,Q>>=1}}else if(Xt.length>0){if(Ft&&Qt){const K=wt(Xt[0]);e.texStorage2D(r.TEXTURE_2D,ht,Rt,K.width,K.height)}for(let K=0,Q=Xt.length;K<Q;K++)_t=Xt[K],Ft?D&&e.texSubImage2D(r.TEXTURE_2D,K,0,0,st,Dt,_t):e.texImage2D(r.TEXTURE_2D,K,Rt,st,Dt,_t);M.generateMipmaps=!1}else if(Ft){if(Qt){const K=wt(tt);e.texStorage2D(r.TEXTURE_2D,ht,Rt,K.width,K.height)}D&&e.texSubImage2D(r.TEXTURE_2D,0,0,0,st,Dt,tt)}else e.texImage2D(r.TEXTURE_2D,0,Rt,st,Dt,tt);m(M)&&p(N),rt.__version=q.version,M.onUpdate&&M.onUpdate(M)}A.__version=M.version}function nt(A,M,V){if(M.image.length!==6)return;const N=$t(A,M),k=M.source;e.bindTexture(r.TEXTURE_CUBE_MAP,A.__webglTexture,r.TEXTURE0+V);const q=n.get(k);if(k.version!==q.__version||N===!0){e.activeTexture(r.TEXTURE0+V);const rt=ae.getPrimaries(ae.workingColorSpace),ot=M.colorSpace===rr?null:ae.getPrimaries(M.colorSpace),lt=M.colorSpace===rr||rt===ot?r.NONE:r.BROWSER_DEFAULT_WEBGL;r.pixelStorei(r.UNPACK_FLIP_Y_WEBGL,M.flipY),r.pixelStorei(r.UNPACK_PREMULTIPLY_ALPHA_WEBGL,M.premultiplyAlpha),r.pixelStorei(r.UNPACK_ALIGNMENT,M.unpackAlignment),r.pixelStorei(r.UNPACK_COLORSPACE_CONVERSION_WEBGL,lt);const Tt=M.isCompressedTexture||M.image[0].isCompressedTexture,tt=M.image[0]&&M.image[0].isDataTexture,st=[];for(let Q=0;Q<6;Q++)!Tt&&!tt?st[Q]=g(M.image[Q],!0,i.maxCubemapSize):st[Q]=tt?M.image[Q].image:M.image[Q],st[Q]=ie(M,st[Q]);const Dt=st[0],Rt=s.convert(M.format,M.colorSpace),_t=s.convert(M.type),Xt=E(M.internalFormat,Rt,_t,M.colorSpace),Ft=M.isVideoTexture!==!0,Qt=q.__version===void 0||N===!0,D=k.dataReady;let ht=C(M,Dt);Ut(r.TEXTURE_CUBE_MAP,M);let K;if(Tt){Ft&&Qt&&e.texStorage2D(r.TEXTURE_CUBE_MAP,ht,Xt,Dt.width,Dt.height);for(let Q=0;Q<6;Q++){K=st[Q].mipmaps;for(let ft=0;ft<K.length;ft++){const pt=K[ft];M.format!==ei?Rt!==null?Ft?D&&e.compressedTexSubImage2D(r.TEXTURE_CUBE_MAP_POSITIVE_X+Q,ft,0,0,pt.width,pt.height,Rt,pt.data):e.compressedTexImage2D(r.TEXTURE_CUBE_MAP_POSITIVE_X+Q,ft,Xt,pt.width,pt.height,0,pt.data):console.warn("THREE.WebGLRenderer: Attempt to load unsupported compressed texture format in .setTextureCube()"):Ft?D&&e.texSubImage2D(r.TEXTURE_CUBE_MAP_POSITIVE_X+Q,ft,0,0,pt.width,pt.height,Rt,_t,pt.data):e.texImage2D(r.TEXTURE_CUBE_MAP_POSITIVE_X+Q,ft,Xt,pt.width,pt.height,0,Rt,_t,pt.data)}}}else{if(K=M.mipmaps,Ft&&Qt){K.length>0&&ht++;const Q=wt(st[0]);e.texStorage2D(r.TEXTURE_CUBE_MAP,ht,Xt,Q.width,Q.height)}for(let Q=0;Q<6;Q++)if(tt){Ft?D&&e.texSubImage2D(r.TEXTURE_CUBE_MAP_POSITIVE_X+Q,0,0,0,st[Q].width,st[Q].height,Rt,_t,st[Q].data):e.texImage2D(r.TEXTURE_CUBE_MAP_POSITIVE_X+Q,0,Xt,st[Q].width,st[Q].height,0,Rt,_t,st[Q].data);for(let ft=0;ft<K.length;ft++){const kt=K[ft].image[Q].image;Ft?D&&e.texSubImage2D(r.TEXTURE_CUBE_MAP_POSITIVE_X+Q,ft+1,0,0,kt.width,kt.height,Rt,_t,kt.data):e.texImage2D(r.TEXTURE_CUBE_MAP_POSITIVE_X+Q,ft+1,Xt,kt.width,kt.height,0,Rt,_t,kt.data)}}else{Ft?D&&e.texSubImage2D(r.TEXTURE_CUBE_MAP_POSITIVE_X+Q,0,0,0,Rt,_t,st[Q]):e.texImage2D(r.TEXTURE_CUBE_MAP_POSITIVE_X+Q,0,Xt,Rt,_t,st[Q]);for(let ft=0;ft<K.length;ft++){const pt=K[ft];Ft?D&&e.texSubImage2D(r.TEXTURE_CUBE_MAP_POSITIVE_X+Q,ft+1,0,0,Rt,_t,pt.image[Q]):e.texImage2D(r.TEXTURE_CUBE_MAP_POSITIVE_X+Q,ft+1,Xt,Rt,_t,pt.image[Q])}}}m(M)&&p(r.TEXTURE_CUBE_MAP),q.__version=k.version,M.onUpdate&&M.onUpdate(M)}A.__version=M.version}function dt(A,M,V,N,k,q){const rt=s.convert(V.format,V.colorSpace),ot=s.convert(V.type),lt=E(V.internalFormat,rt,ot,V.colorSpace),Tt=n.get(M),tt=n.get(V);if(tt.__renderTarget=M,!Tt.__hasExternalTextures){const st=Math.max(1,M.width>>q),Dt=Math.max(1,M.height>>q);k===r.TEXTURE_3D||k===r.TEXTURE_2D_ARRAY?e.texImage3D(k,q,lt,st,Dt,M.depth,0,rt,ot,null):e.texImage2D(k,q,lt,st,Dt,0,rt,ot,null)}e.bindFramebuffer(r.FRAMEBUFFER,A),z(M)?a.framebufferTexture2DMultisampleEXT(r.FRAMEBUFFER,N,k,tt.__webglTexture,0,Bt(M)):(k===r.TEXTURE_2D||k>=r.TEXTURE_CUBE_MAP_POSITIVE_X&&k<=r.TEXTURE_CUBE_MAP_NEGATIVE_Z)&&r.framebufferTexture2D(r.FRAMEBUFFER,N,k,tt.__webglTexture,q),e.bindFramebuffer(r.FRAMEBUFFER,null)}function et(A,M,V){if(r.bindRenderbuffer(r.RENDERBUFFER,A),M.depthBuffer){const N=M.depthTexture,k=N&&N.isDepthTexture?N.type:null,q=v(M.stencilBuffer,k),rt=M.stencilBuffer?r.DEPTH_STENCIL_ATTACHMENT:r.DEPTH_ATTACHMENT,ot=Bt(M);z(M)?a.renderbufferStorageMultisampleEXT(r.RENDERBUFFER,ot,q,M.width,M.height):V?r.renderbufferStorageMultisample(r.RENDERBUFFER,ot,q,M.width,M.height):r.renderbufferStorage(r.RENDERBUFFER,q,M.width,M.height),r.framebufferRenderbuffer(r.FRAMEBUFFER,rt,r.RENDERBUFFER,A)}else{const N=M.textures;for(let k=0;k<N.length;k++){const q=N[k],rt=s.convert(q.format,q.colorSpace),ot=s.convert(q.type),lt=E(q.internalFormat,rt,ot,q.colorSpace),Tt=Bt(M);V&&z(M)===!1?r.renderbufferStorageMultisample(r.RENDERBUFFER,Tt,lt,M.width,M.height):z(M)?a.renderbufferStorageMultisampleEXT(r.RENDERBUFFER,Tt,lt,M.width,M.height):r.renderbufferStorage(r.RENDERBUFFER,lt,M.width,M.height)}}r.bindRenderbuffer(r.RENDERBUFFER,null)}function Mt(A,M){if(M&&M.isWebGLCubeRenderTarget)throw new Error("Depth Texture with cube render targets is not supported");if(e.bindFramebuffer(r.FRAMEBUFFER,A),!(M.depthTexture&&M.depthTexture.isDepthTexture))throw new Error("renderTarget.depthTexture must be an instance of THREE.DepthTexture");const N=n.get(M.depthTexture);N.__renderTarget=M,(!N.__webglTexture||M.depthTexture.image.width!==M.width||M.depthTexture.image.height!==M.height)&&(M.depthTexture.image.width=M.width,M.depthTexture.image.height=M.height,M.depthTexture.needsUpdate=!0),j(M.depthTexture,0);const k=N.__webglTexture,q=Bt(M);if(M.depthTexture.format===Ts)z(M)?a.framebufferTexture2DMultisampleEXT(r.FRAMEBUFFER,r.DEPTH_ATTACHMENT,r.TEXTURE_2D,k,0,q):r.framebufferTexture2D(r.FRAMEBUFFER,r.DEPTH_ATTACHMENT,r.TEXTURE_2D,k,0);else if(M.depthTexture.format===bs)z(M)?a.framebufferTexture2DMultisampleEXT(r.FRAMEBUFFER,r.DEPTH_STENCIL_ATTACHMENT,r.TEXTURE_2D,k,0,q):r.framebufferTexture2D(r.FRAMEBUFFER,r.DEPTH_STENCIL_ATTACHMENT,r.TEXTURE_2D,k,0);else throw new Error("Unknown depthTexture format")}function At(A){const M=n.get(A),V=A.isWebGLCubeRenderTarget===!0;if(M.__boundDepthTexture!==A.depthTexture){const N=A.depthTexture;if(M.__depthDisposeCallback&&M.__depthDisposeCallback(),N){const k=()=>{delete M.__boundDepthTexture,delete M.__depthDisposeCallback,N.removeEventListener("dispose",k)};N.addEventListener("dispose",k),M.__depthDisposeCallback=k}M.__boundDepthTexture=N}if(A.depthTexture&&!M.__autoAllocateDepthBuffer){if(V)throw new Error("target.depthTexture not supported in Cube render targets");Mt(M.__webglFramebuffer,A)}else if(V){M.__webglDepthbuffer=[];for(let N=0;N<6;N++)if(e.bindFramebuffer(r.FRAMEBUFFER,M.__webglFramebuffer[N]),M.__webglDepthbuffer[N]===void 0)M.__webglDepthbuffer[N]=r.createRenderbuffer(),et(M.__webglDepthbuffer[N],A,!1);else{const k=A.stencilBuffer?r.DEPTH_STENCIL_ATTACHMENT:r.DEPTH_ATTACHMENT,q=M.__webglDepthbuffer[N];r.bindRenderbuffer(r.RENDERBUFFER,q),r.framebufferRenderbuffer(r.FRAMEBUFFER,k,r.RENDERBUFFER,q)}}else if(e.bindFramebuffer(r.FRAMEBUFFER,M.__webglFramebuffer),M.__webglDepthbuffer===void 0)M.__webglDepthbuffer=r.createRenderbuffer(),et(M.__webglDepthbuffer,A,!1);else{const N=A.stencilBuffer?r.DEPTH_STENCIL_ATTACHMENT:r.DEPTH_ATTACHMENT,k=M.__webglDepthbuffer;r.bindRenderbuffer(r.RENDERBUFFER,k),r.framebufferRenderbuffer(r.FRAMEBUFFER,N,r.RENDERBUFFER,k)}e.bindFramebuffer(r.FRAMEBUFFER,null)}function zt(A,M,V){const N=n.get(A);M!==void 0&&dt(N.__webglFramebuffer,A,A.texture,r.COLOR_ATTACHMENT0,r.TEXTURE_2D,0),V!==void 0&&At(A)}function Kt(A){const M=A.texture,V=n.get(A),N=n.get(M);A.addEventListener("dispose",b);const k=A.textures,q=A.isWebGLCubeRenderTarget===!0,rt=k.length>1;if(rt||(N.__webglTexture===void 0&&(N.__webglTexture=r.createTexture()),N.__version=M.version,o.memory.textures++),q){V.__webglFramebuffer=[];for(let ot=0;ot<6;ot++)if(M.mipmaps&&M.mipmaps.length>0){V.__webglFramebuffer[ot]=[];for(let lt=0;lt<M.mipmaps.length;lt++)V.__webglFramebuffer[ot][lt]=r.createFramebuffer()}else V.__webglFramebuffer[ot]=r.createFramebuffer()}else{if(M.mipmaps&&M.mipmaps.length>0){V.__webglFramebuffer=[];for(let ot=0;ot<M.mipmaps.length;ot++)V.__webglFramebuffer[ot]=r.createFramebuffer()}else V.__webglFramebuffer=r.createFramebuffer();if(rt)for(let ot=0,lt=k.length;ot<lt;ot++){const Tt=n.get(k[ot]);Tt.__webglTexture===void 0&&(Tt.__webglTexture=r.createTexture(),o.memory.textures++)}if(A.samples>0&&z(A)===!1){V.__webglMultisampledFramebuffer=r.createFramebuffer(),V.__webglColorRenderbuffer=[],e.bindFramebuffer(r.FRAMEBUFFER,V.__webglMultisampledFramebuffer);for(let ot=0;ot<k.length;ot++){const lt=k[ot];V.__webglColorRenderbuffer[ot]=r.createRenderbuffer(),r.bindRenderbuffer(r.RENDERBUFFER,V.__webglColorRenderbuffer[ot]);const Tt=s.convert(lt.format,lt.colorSpace),tt=s.convert(lt.type),st=E(lt.internalFormat,Tt,tt,lt.colorSpace,A.isXRRenderTarget===!0),Dt=Bt(A);r.renderbufferStorageMultisample(r.RENDERBUFFER,Dt,st,A.width,A.height),r.framebufferRenderbuffer(r.FRAMEBUFFER,r.COLOR_ATTACHMENT0+ot,r.RENDERBUFFER,V.__webglColorRenderbuffer[ot])}r.bindRenderbuffer(r.RENDERBUFFER,null),A.depthBuffer&&(V.__webglDepthRenderbuffer=r.createRenderbuffer(),et(V.__webglDepthRenderbuffer,A,!0)),e.bindFramebuffer(r.FRAMEBUFFER,null)}}if(q){e.bindTexture(r.TEXTURE_CUBE_MAP,N.__webglTexture),Ut(r.TEXTURE_CUBE_MAP,M);for(let ot=0;ot<6;ot++)if(M.mipmaps&&M.mipmaps.length>0)for(let lt=0;lt<M.mipmaps.length;lt++)dt(V.__webglFramebuffer[ot][lt],A,M,r.COLOR_ATTACHMENT0,r.TEXTURE_CUBE_MAP_POSITIVE_X+ot,lt);else dt(V.__webglFramebuffer[ot],A,M,r.COLOR_ATTACHMENT0,r.TEXTURE_CUBE_MAP_POSITIVE_X+ot,0);m(M)&&p(r.TEXTURE_CUBE_MAP),e.unbindTexture()}else if(rt){for(let ot=0,lt=k.length;ot<lt;ot++){const Tt=k[ot],tt=n.get(Tt);e.bindTexture(r.TEXTURE_2D,tt.__webglTexture),Ut(r.TEXTURE_2D,Tt),dt(V.__webglFramebuffer,A,Tt,r.COLOR_ATTACHMENT0+ot,r.TEXTURE_2D,0),m(Tt)&&p(r.TEXTURE_2D)}e.unbindTexture()}else{let ot=r.TEXTURE_2D;if((A.isWebGL3DRenderTarget||A.isWebGLArrayRenderTarget)&&(ot=A.isWebGL3DRenderTarget?r.TEXTURE_3D:r.TEXTURE_2D_ARRAY),e.bindTexture(ot,N.__webglTexture),Ut(ot,M),M.mipmaps&&M.mipmaps.length>0)for(let lt=0;lt<M.mipmaps.length;lt++)dt(V.__webglFramebuffer[lt],A,M,r.COLOR_ATTACHMENT0,ot,lt);else dt(V.__webglFramebuffer,A,M,r.COLOR_ATTACHMENT0,ot,0);m(M)&&p(ot),e.unbindTexture()}A.depthBuffer&&At(A)}function Ot(A){const M=A.textures;for(let V=0,N=M.length;V<N;V++){const k=M[V];if(m(k)){const q=y(A),rt=n.get(k).__webglTexture;e.bindTexture(q,rt),p(q),e.unbindTexture()}}}const Pt=[],I=[];function he(A){if(A.samples>0){if(z(A)===!1){const M=A.textures,V=A.width,N=A.height;let k=r.COLOR_BUFFER_BIT;const q=A.stencilBuffer?r.DEPTH_STENCIL_ATTACHMENT:r.DEPTH_ATTACHMENT,rt=n.get(A),ot=M.length>1;if(ot)for(let lt=0;lt<M.length;lt++)e.bindFramebuffer(r.FRAMEBUFFER,rt.__webglMultisampledFramebuffer),r.framebufferRenderbuffer(r.FRAMEBUFFER,r.COLOR_ATTACHMENT0+lt,r.RENDERBUFFER,null),e.bindFramebuffer(r.FRAMEBUFFER,rt.__webglFramebuffer),r.framebufferTexture2D(r.DRAW_FRAMEBUFFER,r.COLOR_ATTACHMENT0+lt,r.TEXTURE_2D,null,0);e.bindFramebuffer(r.READ_FRAMEBUFFER,rt.__webglMultisampledFramebuffer),e.bindFramebuffer(r.DRAW_FRAMEBUFFER,rt.__webglFramebuffer);for(let lt=0;lt<M.length;lt++){if(A.resolveDepthBuffer&&(A.depthBuffer&&(k|=r.DEPTH_BUFFER_BIT),A.stencilBuffer&&A.resolveStencilBuffer&&(k|=r.STENCIL_BUFFER_BIT)),ot){r.framebufferRenderbuffer(r.READ_FRAMEBUFFER,r.COLOR_ATTACHMENT0,r.RENDERBUFFER,rt.__webglColorRenderbuffer[lt]);const Tt=n.get(M[lt]).__webglTexture;r.framebufferTexture2D(r.DRAW_FRAMEBUFFER,r.COLOR_ATTACHMENT0,r.TEXTURE_2D,Tt,0)}r.blitFramebuffer(0,0,V,N,0,0,V,N,k,r.NEAREST),l===!0&&(Pt.length=0,I.length=0,Pt.push(r.COLOR_ATTACHMENT0+lt),A.depthBuffer&&A.resolveDepthBuffer===!1&&(Pt.push(q),I.push(q),r.invalidateFramebuffer(r.DRAW_FRAMEBUFFER,I)),r.invalidateFramebuffer(r.READ_FRAMEBUFFER,Pt))}if(e.bindFramebuffer(r.READ_FRAMEBUFFER,null),e.bindFramebuffer(r.DRAW_FRAMEBUFFER,null),ot)for(let lt=0;lt<M.length;lt++){e.bindFramebuffer(r.FRAMEBUFFER,rt.__webglMultisampledFramebuffer),r.framebufferRenderbuffer(r.FRAMEBUFFER,r.COLOR_ATTACHMENT0+lt,r.RENDERBUFFER,rt.__webglColorRenderbuffer[lt]);const Tt=n.get(M[lt]).__webglTexture;e.bindFramebuffer(r.FRAMEBUFFER,rt.__webglFramebuffer),r.framebufferTexture2D(r.DRAW_FRAMEBUFFER,r.COLOR_ATTACHMENT0+lt,r.TEXTURE_2D,Tt,0)}e.bindFramebuffer(r.DRAW_FRAMEBUFFER,rt.__webglMultisampledFramebuffer)}else if(A.depthBuffer&&A.resolveDepthBuffer===!1&&l){const M=A.stencilBuffer?r.DEPTH_STENCIL_ATTACHMENT:r.DEPTH_ATTACHMENT;r.invalidateFramebuffer(r.DRAW_FRAMEBUFFER,[M])}}}function Bt(A){return Math.min(i.maxSamples,A.samples)}function z(A){const M=n.get(A);return A.samples>0&&t.has("WEBGL_multisampled_render_to_texture")===!0&&M.__useRenderToTexture!==!1}function Et(A){const M=o.render.frame;u.get(A)!==M&&(u.set(A,M),A.update())}function ie(A,M){const V=A.colorSpace,N=A.format,k=A.type;return A.isCompressedTexture===!0||A.isVideoTexture===!0||V!==As&&V!==rr&&(ae.getTransfer(V)===ge?(N!==ei||k!==Ci)&&console.warn("THREE.WebGLTextures: sRGB encoded textures have to use RGBAFormat and UnsignedByteType."):console.error("THREE.WebGLTextures: Unsupported texture color space:",V)),M}function wt(A){return typeof HTMLImageElement<"u"&&A instanceof HTMLImageElement?(c.width=A.naturalWidth||A.width,c.height=A.naturalHeight||A.height):typeof VideoFrame<"u"&&A instanceof VideoFrame?(c.width=A.displayWidth,c.height=A.displayHeight):(c.width=A.width,c.height=A.height),c}this.allocateTextureUnit=B,this.resetTextureUnits=F,this.setTexture2D=j,this.setTexture2DArray=Y,this.setTexture3D=$,this.setTextureCube=H,this.rebindTextures=zt,this.setupRenderTarget=Kt,this.updateRenderTargetMipmap=Ot,this.updateMultisampleRenderTarget=he,this.setupDepthRenderbuffer=At,this.setupFrameBufferTexture=dt,this.useMultisampledRTT=z}function fM(r,t){function e(n,i=rr){let s;const o=ae.getTransfer(i);if(n===Ci)return r.UNSIGNED_BYTE;if(n===kc)return r.UNSIGNED_SHORT_4_4_4_4;if(n===Hc)return r.UNSIGNED_SHORT_5_5_5_1;if(n===Td)return r.UNSIGNED_INT_5_9_9_9_REV;if(n===yd)return r.BYTE;if(n===Ed)return r.SHORT;if(n===Lo)return r.UNSIGNED_SHORT;if(n===zc)return r.INT;if(n===Nr)return r.UNSIGNED_INT;if(n===vi)return r.FLOAT;if(n===Io)return r.HALF_FLOAT;if(n===bd)return r.ALPHA;if(n===Ad)return r.RGB;if(n===ei)return r.RGBA;if(n===wd)return r.LUMINANCE;if(n===Rd)return r.LUMINANCE_ALPHA;if(n===Ts)return r.DEPTH_COMPONENT;if(n===bs)return r.DEPTH_STENCIL;if(n===Vc)return r.RED;if(n===Gc)return r.RED_INTEGER;if(n===Cd)return r.RG;if(n===Wc)return r.RG_INTEGER;if(n===Xc)return r.RGBA_INTEGER;if(n===Na||n===Fa||n===Oa||n===Ba)if(o===ge)if(s=t.get("WEBGL_compressed_texture_s3tc_srgb"),s!==null){if(n===Na)return s.COMPRESSED_SRGB_S3TC_DXT1_EXT;if(n===Fa)return s.COMPRESSED_SRGB_ALPHA_S3TC_DXT1_EXT;if(n===Oa)return s.COMPRESSED_SRGB_ALPHA_S3TC_DXT3_EXT;if(n===Ba)return s.COMPRESSED_SRGB_ALPHA_S3TC_DXT5_EXT}else return null;else if(s=t.get("WEBGL_compressed_texture_s3tc"),s!==null){if(n===Na)return s.COMPRESSED_RGB_S3TC_DXT1_EXT;if(n===Fa)return s.COMPRESSED_RGBA_S3TC_DXT1_EXT;if(n===Oa)return s.COMPRESSED_RGBA_S3TC_DXT3_EXT;if(n===Ba)return s.COMPRESSED_RGBA_S3TC_DXT5_EXT}else return null;if(n===Yc||n===qc||n===$c||n===Kc)if(s=t.get("WEBGL_compressed_texture_pvrtc"),s!==null){if(n===Yc)return s.COMPRESSED_RGB_PVRTC_4BPPV1_IMG;if(n===qc)return s.COMPRESSED_RGB_PVRTC_2BPPV1_IMG;if(n===$c)return s.COMPRESSED_RGBA_PVRTC_4BPPV1_IMG;if(n===Kc)return s.COMPRESSED_RGBA_PVRTC_2BPPV1_IMG}else return null;if(n===Zc||n===jc||n===Jc)if(s=t.get("WEBGL_compressed_texture_etc"),s!==null){if(n===Zc||n===jc)return o===ge?s.COMPRESSED_SRGB8_ETC2:s.COMPRESSED_RGB8_ETC2;if(n===Jc)return o===ge?s.COMPRESSED_SRGB8_ALPHA8_ETC2_EAC:s.COMPRESSED_RGBA8_ETC2_EAC}else return null;if(n===Qc||n===tu||n===eu||n===nu||n===iu||n===ru||n===su||n===ou||n===au||n===lu||n===cu||n===uu||n===hu||n===fu)if(s=t.get("WEBGL_compressed_texture_astc"),s!==null){if(n===Qc)return o===ge?s.COMPRESSED_SRGB8_ALPHA8_ASTC_4x4_KHR:s.COMPRESSED_RGBA_ASTC_4x4_KHR;if(n===tu)return o===ge?s.COMPRESSED_SRGB8_ALPHA8_ASTC_5x4_KHR:s.COMPRESSED_RGBA_ASTC_5x4_KHR;if(n===eu)return o===ge?s.COMPRESSED_SRGB8_ALPHA8_ASTC_5x5_KHR:s.COMPRESSED_RGBA_ASTC_5x5_KHR;if(n===nu)return o===ge?s.COMPRESSED_SRGB8_ALPHA8_ASTC_6x5_KHR:s.COMPRESSED_RGBA_ASTC_6x5_KHR;if(n===iu)return o===ge?s.COMPRESSED_SRGB8_ALPHA8_ASTC_6x6_KHR:s.COMPRESSED_RGBA_ASTC_6x6_KHR;if(n===ru)return o===ge?s.COMPRESSED_SRGB8_ALPHA8_ASTC_8x5_KHR:s.COMPRESSED_RGBA_ASTC_8x5_KHR;if(n===su)return o===ge?s.COMPRESSED_SRGB8_ALPHA8_ASTC_8x6_KHR:s.COMPRESSED_RGBA_ASTC_8x6_KHR;if(n===ou)return o===ge?s.COMPRESSED_SRGB8_ALPHA8_ASTC_8x8_KHR:s.COMPRESSED_RGBA_ASTC_8x8_KHR;if(n===au)return o===ge?s.COMPRESSED_SRGB8_ALPHA8_ASTC_10x5_KHR:s.COMPRESSED_RGBA_ASTC_10x5_KHR;if(n===lu)return o===ge?s.COMPRESSED_SRGB8_ALPHA8_ASTC_10x6_KHR:s.COMPRESSED_RGBA_ASTC_10x6_KHR;if(n===cu)return o===ge?s.COMPRESSED_SRGB8_ALPHA8_ASTC_10x8_KHR:s.COMPRESSED_RGBA_ASTC_10x8_KHR;if(n===uu)return o===ge?s.COMPRESSED_SRGB8_ALPHA8_ASTC_10x10_KHR:s.COMPRESSED_RGBA_ASTC_10x10_KHR;if(n===hu)return o===ge?s.COMPRESSED_SRGB8_ALPHA8_ASTC_12x10_KHR:s.COMPRESSED_RGBA_ASTC_12x10_KHR;if(n===fu)return o===ge?s.COMPRESSED_SRGB8_ALPHA8_ASTC_12x12_KHR:s.COMPRESSED_RGBA_ASTC_12x12_KHR}else return null;if(n===za||n===du||n===pu)if(s=t.get("EXT_texture_compression_bptc"),s!==null){if(n===za)return o===ge?s.COMPRESSED_SRGB_ALPHA_BPTC_UNORM_EXT:s.COMPRESSED_RGBA_BPTC_UNORM_EXT;if(n===du)return s.COMPRESSED_RGB_BPTC_SIGNED_FLOAT_EXT;if(n===pu)return s.COMPRESSED_RGB_BPTC_UNSIGNED_FLOAT_EXT}else return null;if(n===Pd||n===mu||n===_u||n===gu)if(s=t.get("EXT_texture_compression_rgtc"),s!==null){if(n===za)return s.COMPRESSED_RED_RGTC1_EXT;if(n===mu)return s.COMPRESSED_SIGNED_RED_RGTC1_EXT;if(n===_u)return s.COMPRESSED_RED_GREEN_RGTC2_EXT;if(n===gu)return s.COMPRESSED_SIGNED_RED_GREEN_RGTC2_EXT}else return null;return n===Es?r.UNSIGNED_INT_24_8:r[n]!==void 0?r[n]:null}return{convert:e}}class dM extends Jn{constructor(t=[]){super(),this.isArrayCamera=!0,this.cameras=t}}class qs extends Rn{constructor(){super(),this.isGroup=!0,this.type="Group"}}const pM={type:"move"};class Zu{constructor(){this._targetRay=null,this._grip=null,this._hand=null}getHandSpace(){return this._hand===null&&(this._hand=new qs,this._hand.matrixAutoUpdate=!1,this._hand.visible=!1,this._hand.joints={},this._hand.inputState={pinching:!1}),this._hand}getTargetRaySpace(){return this._targetRay===null&&(this._targetRay=new qs,this._targetRay.matrixAutoUpdate=!1,this._targetRay.visible=!1,this._targetRay.hasLinearVelocity=!1,this._targetRay.linearVelocity=new Z,this._targetRay.hasAngularVelocity=!1,this._targetRay.angularVelocity=new Z),this._targetRay}getGripSpace(){return this._grip===null&&(this._grip=new qs,this._grip.matrixAutoUpdate=!1,this._grip.visible=!1,this._grip.hasLinearVelocity=!1,this._grip.linearVelocity=new Z,this._grip.hasAngularVelocity=!1,this._grip.angularVelocity=new Z),this._grip}dispatchEvent(t){return this._targetRay!==null&&this._targetRay.dispatchEvent(t),this._grip!==null&&this._grip.dispatchEvent(t),this._hand!==null&&this._hand.dispatchEvent(t),this}connect(t){if(t&&t.hand){const e=this._hand;if(e)for(const n of t.hand.values())this._getHandJoint(e,n)}return this.dispatchEvent({type:"connected",data:t}),this}disconnect(t){return this.dispatchEvent({type:"disconnected",data:t}),this._targetRay!==null&&(this._targetRay.visible=!1),this._grip!==null&&(this._grip.visible=!1),this._hand!==null&&(this._hand.visible=!1),this}update(t,e,n){let i=null,s=null,o=null;const a=this._targetRay,l=this._grip,c=this._hand;if(t&&e.session.visibilityState!=="visible-blurred"){if(c&&t.hand){o=!0;for(const g of t.hand.values()){const m=e.getJointPose(g,n),p=this._getHandJoint(c,g);m!==null&&(p.matrix.fromArray(m.transform.matrix),p.matrix.decompose(p.position,p.rotation,p.scale),p.matrixWorldNeedsUpdate=!0,p.jointRadius=m.radius),p.visible=m!==null}const u=c.joints["index-finger-tip"],f=c.joints["thumb-tip"],h=u.position.distanceTo(f.position),d=.02,_=.005;c.inputState.pinching&&h>d+_?(c.inputState.pinching=!1,this.dispatchEvent({type:"pinchend",handedness:t.handedness,target:this})):!c.inputState.pinching&&h<=d-_&&(c.inputState.pinching=!0,this.dispatchEvent({type:"pinchstart",handedness:t.handedness,target:this}))}else l!==null&&t.gripSpace&&(s=e.getPose(t.gripSpace,n),s!==null&&(l.matrix.fromArray(s.transform.matrix),l.matrix.decompose(l.position,l.rotation,l.scale),l.matrixWorldNeedsUpdate=!0,s.linearVelocity?(l.hasLinearVelocity=!0,l.linearVelocity.copy(s.linearVelocity)):l.hasLinearVelocity=!1,s.angularVelocity?(l.hasAngularVelocity=!0,l.angularVelocity.copy(s.angularVelocity)):l.hasAngularVelocity=!1));a!==null&&(i=e.getPose(t.targetRaySpace,n),i===null&&s!==null&&(i=s),i!==null&&(a.matrix.fromArray(i.transform.matrix),a.matrix.decompose(a.position,a.rotation,a.scale),a.matrixWorldNeedsUpdate=!0,i.linearVelocity?(a.hasLinearVelocity=!0,a.linearVelocity.copy(i.linearVelocity)):a.hasLinearVelocity=!1,i.angularVelocity?(a.hasAngularVelocity=!0,a.angularVelocity.copy(i.angularVelocity)):a.hasAngularVelocity=!1,this.dispatchEvent(pM)))}return a!==null&&(a.visible=i!==null),l!==null&&(l.visible=s!==null),c!==null&&(c.visible=o!==null),this}_getHandJoint(t,e){if(t.joints[e.jointName]===void 0){const n=new qs;n.matrixAutoUpdate=!1,n.visible=!1,t.joints[e.jointName]=n,t.add(n)}return t.joints[e.jointName]}}const mM=`
void main() {

	gl_Position = vec4( position, 1.0 );

}`,_M=`
uniform sampler2DArray depthColor;
uniform float depthWidth;
uniform float depthHeight;

void main() {

	vec2 coord = vec2( gl_FragCoord.x / depthWidth, gl_FragCoord.y / depthHeight );

	if ( coord.x >= 1.0 ) {

		gl_FragDepth = texture( depthColor, vec3( coord.x - 1.0, coord.y, 1 ) ).r;

	} else {

		gl_FragDepth = texture( depthColor, vec3( coord.x, coord.y, 0 ) ).r;

	}

}`;class gM{constructor(){this.texture=null,this.mesh=null,this.depthNear=0,this.depthFar=0}init(t,e,n){if(this.texture===null){const i=new pn,s=t.properties.get(i);s.__webglTexture=e.texture,(e.depthNear!=n.depthNear||e.depthFar!=n.depthFar)&&(this.depthNear=e.depthNear,this.depthFar=e.depthFar),this.texture=i}}getMesh(t){if(this.texture!==null&&this.mesh===null){const e=t.cameras[0].viewport,n=new ur({vertexShader:mM,fragmentShader:_M,uniforms:{depthColor:{value:this.texture},depthWidth:{value:e.z},depthHeight:{value:e.w}}});this.mesh=new ai(new al(20,20),n)}return this.mesh}reset(){this.texture=null,this.mesh=null}getDepthTexture(){return this.texture}}class vM extends Rs{constructor(t,e){super();const n=this;let i=null,s=1,o=null,a="local-floor",l=1,c=null,u=null,f=null,h=null,d=null,_=null;const g=new gM,m=e.getContextAttributes();let p=null,y=null;const E=[],v=[],C=new Se;let w=null;const b=new Jn;b.viewport=new Fe;const R=new Jn;R.viewport=new Fe;const S=[b,R],x=new dM;let L=null,F=null;this.cameraAutoUpdate=!0,this.enabled=!1,this.isPresenting=!1,this.getController=function(J){let nt=E[J];return nt===void 0&&(nt=new Zu,E[J]=nt),nt.getTargetRaySpace()},this.getControllerGrip=function(J){let nt=E[J];return nt===void 0&&(nt=new Zu,E[J]=nt),nt.getGripSpace()},this.getHand=function(J){let nt=E[J];return nt===void 0&&(nt=new Zu,E[J]=nt),nt.getHandSpace()};function B(J){const nt=v.indexOf(J.inputSource);if(nt===-1)return;const dt=E[nt];dt!==void 0&&(dt.update(J.inputSource,J.frame,c||o),dt.dispatchEvent({type:J.type,data:J.inputSource}))}function G(){i.removeEventListener("select",B),i.removeEventListener("selectstart",B),i.removeEventListener("selectend",B),i.removeEventListener("squeeze",B),i.removeEventListener("squeezestart",B),i.removeEventListener("squeezeend",B),i.removeEventListener("end",G),i.removeEventListener("inputsourceschange",j);for(let J=0;J<E.length;J++){const nt=v[J];nt!==null&&(v[J]=null,E[J].disconnect(nt))}L=null,F=null,g.reset(),t.setRenderTarget(p),d=null,h=null,f=null,i=null,y=null,$t.stop(),n.isPresenting=!1,t.setPixelRatio(w),t.setSize(C.width,C.height,!1),n.dispatchEvent({type:"sessionend"})}this.setFramebufferScaleFactor=function(J){s=J,n.isPresenting===!0&&console.warn("THREE.WebXRManager: Cannot change framebuffer scale while presenting.")},this.setReferenceSpaceType=function(J){a=J,n.isPresenting===!0&&console.warn("THREE.WebXRManager: Cannot change reference space type while presenting.")},this.getReferenceSpace=function(){return c||o},this.setReferenceSpace=function(J){c=J},this.getBaseLayer=function(){return h!==null?h:d},this.getBinding=function(){return f},this.getFrame=function(){return _},this.getSession=function(){return i},this.setSession=async function(J){if(i=J,i!==null){if(p=t.getRenderTarget(),i.addEventListener("select",B),i.addEventListener("selectstart",B),i.addEventListener("selectend",B),i.addEventListener("squeeze",B),i.addEventListener("squeezestart",B),i.addEventListener("squeezeend",B),i.addEventListener("end",G),i.addEventListener("inputsourceschange",j),m.xrCompatible!==!0&&await e.makeXRCompatible(),w=t.getPixelRatio(),t.getSize(C),i.renderState.layers===void 0){const nt={antialias:m.antialias,alpha:!0,depth:m.depth,stencil:m.stencil,framebufferScaleFactor:s};d=new XRWebGLLayer(i,e,nt),i.updateRenderState({baseLayer:d}),t.setPixelRatio(1),t.setSize(d.framebufferWidth,d.framebufferHeight,!1),y=new Fr(d.framebufferWidth,d.framebufferHeight,{format:ei,type:Ci,colorSpace:t.outputColorSpace,stencilBuffer:m.stencil})}else{let nt=null,dt=null,et=null;m.depth&&(et=m.stencil?e.DEPTH24_STENCIL8:e.DEPTH_COMPONENT24,nt=m.stencil?bs:Ts,dt=m.stencil?Es:Nr);const Mt={colorFormat:e.RGBA8,depthFormat:et,scaleFactor:s};f=new XRWebGLBinding(i,e),h=f.createProjectionLayer(Mt),i.updateRenderState({layers:[h]}),t.setPixelRatio(1),t.setSize(h.textureWidth,h.textureHeight,!1),y=new Fr(h.textureWidth,h.textureHeight,{format:ei,type:Ci,depthTexture:new Mp(h.textureWidth,h.textureHeight,dt,void 0,void 0,void 0,void 0,void 0,void 0,nt),stencilBuffer:m.stencil,colorSpace:t.outputColorSpace,samples:m.antialias?4:0,resolveDepthBuffer:h.ignoreDepthValues===!1})}y.isXRRenderTarget=!0,this.setFoveation(l),c=null,o=await i.requestReferenceSpace(a),$t.setContext(i),$t.start(),n.isPresenting=!0,n.dispatchEvent({type:"sessionstart"})}},this.getEnvironmentBlendMode=function(){if(i!==null)return i.environmentBlendMode},this.getDepthTexture=function(){return g.getDepthTexture()};function j(J){for(let nt=0;nt<J.removed.length;nt++){const dt=J.removed[nt],et=v.indexOf(dt);et>=0&&(v[et]=null,E[et].disconnect(dt))}for(let nt=0;nt<J.added.length;nt++){const dt=J.added[nt];let et=v.indexOf(dt);if(et===-1){for(let At=0;At<E.length;At++)if(At>=v.length){v.push(dt),et=At;break}else if(v[At]===null){v[At]=dt,et=At;break}if(et===-1)break}const Mt=E[et];Mt&&Mt.connect(dt)}}const Y=new Z,$=new Z;function H(J,nt,dt){Y.setFromMatrixPosition(nt.matrixWorld),$.setFromMatrixPosition(dt.matrixWorld);const et=Y.distanceTo($),Mt=nt.projectionMatrix.elements,At=dt.projectionMatrix.elements,zt=Mt[14]/(Mt[10]-1),Kt=Mt[14]/(Mt[10]+1),Ot=(Mt[9]+1)/Mt[5],Pt=(Mt[9]-1)/Mt[5],I=(Mt[8]-1)/Mt[0],he=(At[8]+1)/At[0],Bt=zt*I,z=zt*he,Et=et/(-I+he),ie=Et*-I;if(nt.matrixWorld.decompose(J.position,J.quaternion,J.scale),J.translateX(ie),J.translateZ(Et),J.matrixWorld.compose(J.position,J.quaternion,J.scale),J.matrixWorldInverse.copy(J.matrixWorld).invert(),Mt[10]===-1)J.projectionMatrix.copy(nt.projectionMatrix),J.projectionMatrixInverse.copy(nt.projectionMatrixInverse);else{const wt=zt+Et,A=Kt+Et,M=Bt-ie,V=z+(et-ie),N=Ot*Kt/A*wt,k=Pt*Kt/A*wt;J.projectionMatrix.makePerspective(M,V,N,k,wt,A),J.projectionMatrixInverse.copy(J.projectionMatrix).invert()}}function it(J,nt){nt===null?J.matrixWorld.copy(J.matrix):J.matrixWorld.multiplyMatrices(nt.matrixWorld,J.matrix),J.matrixWorldInverse.copy(J.matrixWorld).invert()}this.updateCamera=function(J){if(i===null)return;let nt=J.near,dt=J.far;g.texture!==null&&(g.depthNear>0&&(nt=g.depthNear),g.depthFar>0&&(dt=g.depthFar)),x.near=R.near=b.near=nt,x.far=R.far=b.far=dt,(L!==x.near||F!==x.far)&&(i.updateRenderState({depthNear:x.near,depthFar:x.far}),L=x.near,F=x.far),b.layers.mask=J.layers.mask|2,R.layers.mask=J.layers.mask|4,x.layers.mask=b.layers.mask|R.layers.mask;const et=J.parent,Mt=x.cameras;it(x,et);for(let At=0;At<Mt.length;At++)it(Mt[At],et);Mt.length===2?H(x,b,R):x.projectionMatrix.copy(b.projectionMatrix),P(J,x,et)};function P(J,nt,dt){dt===null?J.matrix.copy(nt.matrixWorld):(J.matrix.copy(dt.matrixWorld),J.matrix.invert(),J.matrix.multiply(nt.matrixWorld)),J.matrix.decompose(J.position,J.quaternion,J.scale),J.updateMatrixWorld(!0),J.projectionMatrix.copy(nt.projectionMatrix),J.projectionMatrixInverse.copy(nt.projectionMatrixInverse),J.isPerspectiveCamera&&(J.fov=xu*2*Math.atan(1/J.projectionMatrix.elements[5]),J.zoom=1)}this.getCamera=function(){return x},this.getFoveation=function(){if(!(h===null&&d===null))return l},this.setFoveation=function(J){l=J,h!==null&&(h.fixedFoveation=J),d!==null&&d.fixedFoveation!==void 0&&(d.fixedFoveation=J)},this.hasDepthSensing=function(){return g.texture!==null},this.getDepthSensingMesh=function(){return g.getMesh(x)};let ut=null;function Ut(J,nt){if(u=nt.getViewerPose(c||o),_=nt,u!==null){const dt=u.views;d!==null&&(t.setRenderTargetFramebuffer(y,d.framebuffer),t.setRenderTarget(y));let et=!1;dt.length!==x.cameras.length&&(x.cameras.length=0,et=!0);for(let At=0;At<dt.length;At++){const zt=dt[At];let Kt=null;if(d!==null)Kt=d.getViewport(zt);else{const Pt=f.getViewSubImage(h,zt);Kt=Pt.viewport,At===0&&(t.setRenderTargetTextures(y,Pt.colorTexture,h.ignoreDepthValues?void 0:Pt.depthStencilTexture),t.setRenderTarget(y))}let Ot=S[At];Ot===void 0&&(Ot=new Jn,Ot.layers.enable(At),Ot.viewport=new Fe,S[At]=Ot),Ot.matrix.fromArray(zt.transform.matrix),Ot.matrix.decompose(Ot.position,Ot.quaternion,Ot.scale),Ot.projectionMatrix.fromArray(zt.projectionMatrix),Ot.projectionMatrixInverse.copy(Ot.projectionMatrix).invert(),Ot.viewport.set(Kt.x,Kt.y,Kt.width,Kt.height),At===0&&(x.matrix.copy(Ot.matrix),x.matrix.decompose(x.position,x.quaternion,x.scale)),et===!0&&x.cameras.push(Ot)}const Mt=i.enabledFeatures;if(Mt&&Mt.includes("depth-sensing")){const At=f.getDepthInformation(dt[0]);At&&At.isValid&&At.texture&&g.init(t,At,i.renderState)}}for(let dt=0;dt<E.length;dt++){const et=v[dt],Mt=E[dt];et!==null&&Mt!==void 0&&Mt.update(et,nt,c||o)}ut&&ut(J,nt),nt.detectedPlanes&&n.dispatchEvent({type:"planesdetected",data:nt}),_=null}const $t=new dp;$t.setAnimationLoop(Ut),this.setAnimationLoop=function(J){ut=J},this.dispose=function(){}}}const $r=new Ui,xM=new Pe;function SM(r,t){function e(m,p){m.matrixAutoUpdate===!0&&m.updateMatrix(),p.value.copy(m.matrix)}function n(m,p){p.color.getRGB(m.fogColor.value,ap(r)),p.isFog?(m.fogNear.value=p.near,m.fogFar.value=p.far):p.isFogExp2&&(m.fogDensity.value=p.density)}function i(m,p,y,E,v){p.isMeshBasicMaterial||p.isMeshLambertMaterial?s(m,p):p.isMeshToonMaterial?(s(m,p),f(m,p)):p.isMeshPhongMaterial?(s(m,p),u(m,p)):p.isMeshStandardMaterial?(s(m,p),h(m,p),p.isMeshPhysicalMaterial&&d(m,p,v)):p.isMeshMatcapMaterial?(s(m,p),_(m,p)):p.isMeshDepthMaterial?s(m,p):p.isMeshDistanceMaterial?(s(m,p),g(m,p)):p.isMeshNormalMaterial?s(m,p):p.isLineBasicMaterial?(o(m,p),p.isLineDashedMaterial&&a(m,p)):p.isPointsMaterial?l(m,p,y,E):p.isSpriteMaterial?c(m,p):p.isShadowMaterial?(m.color.value.copy(p.color),m.opacity.value=p.opacity):p.isShaderMaterial&&(p.uniformsNeedUpdate=!1)}function s(m,p){m.opacity.value=p.opacity,p.color&&m.diffuse.value.copy(p.color),p.emissive&&m.emissive.value.copy(p.emissive).multiplyScalar(p.emissiveIntensity),p.map&&(m.map.value=p.map,e(p.map,m.mapTransform)),p.alphaMap&&(m.alphaMap.value=p.alphaMap,e(p.alphaMap,m.alphaMapTransform)),p.bumpMap&&(m.bumpMap.value=p.bumpMap,e(p.bumpMap,m.bumpMapTransform),m.bumpScale.value=p.bumpScale,p.side===bn&&(m.bumpScale.value*=-1)),p.normalMap&&(m.normalMap.value=p.normalMap,e(p.normalMap,m.normalMapTransform),m.normalScale.value.copy(p.normalScale),p.side===bn&&m.normalScale.value.negate()),p.displacementMap&&(m.displacementMap.value=p.displacementMap,e(p.displacementMap,m.displacementMapTransform),m.displacementScale.value=p.displacementScale,m.displacementBias.value=p.displacementBias),p.emissiveMap&&(m.emissiveMap.value=p.emissiveMap,e(p.emissiveMap,m.emissiveMapTransform)),p.specularMap&&(m.specularMap.value=p.specularMap,e(p.specularMap,m.specularMapTransform)),p.alphaTest>0&&(m.alphaTest.value=p.alphaTest);const y=t.get(p),E=y.envMap,v=y.envMapRotation;E&&(m.envMap.value=E,$r.copy(v),$r.x*=-1,$r.y*=-1,$r.z*=-1,E.isCubeTexture&&E.isRenderTargetTexture===!1&&($r.y*=-1,$r.z*=-1),m.envMapRotation.value.setFromMatrix4(xM.makeRotationFromEuler($r)),m.flipEnvMap.value=E.isCubeTexture&&E.isRenderTargetTexture===!1?-1:1,m.reflectivity.value=p.reflectivity,m.ior.value=p.ior,m.refractionRatio.value=p.refractionRatio),p.lightMap&&(m.lightMap.value=p.lightMap,m.lightMapIntensity.value=p.lightMapIntensity,e(p.lightMap,m.lightMapTransform)),p.aoMap&&(m.aoMap.value=p.aoMap,m.aoMapIntensity.value=p.aoMapIntensity,e(p.aoMap,m.aoMapTransform))}function o(m,p){m.diffuse.value.copy(p.color),m.opacity.value=p.opacity,p.map&&(m.map.value=p.map,e(p.map,m.mapTransform))}function a(m,p){m.dashSize.value=p.dashSize,m.totalSize.value=p.dashSize+p.gapSize,m.scale.value=p.scale}function l(m,p,y,E){m.diffuse.value.copy(p.color),m.opacity.value=p.opacity,m.size.value=p.size*y,m.scale.value=E*.5,p.map&&(m.map.value=p.map,e(p.map,m.uvTransform)),p.alphaMap&&(m.alphaMap.value=p.alphaMap,e(p.alphaMap,m.alphaMapTransform)),p.alphaTest>0&&(m.alphaTest.value=p.alphaTest)}function c(m,p){m.diffuse.value.copy(p.color),m.opacity.value=p.opacity,m.rotation.value=p.rotation,p.map&&(m.map.value=p.map,e(p.map,m.mapTransform)),p.alphaMap&&(m.alphaMap.value=p.alphaMap,e(p.alphaMap,m.alphaMapTransform)),p.alphaTest>0&&(m.alphaTest.value=p.alphaTest)}function u(m,p){m.specular.value.copy(p.specular),m.shininess.value=Math.max(p.shininess,1e-4)}function f(m,p){p.gradientMap&&(m.gradientMap.value=p.gradientMap)}function h(m,p){m.metalness.value=p.metalness,p.metalnessMap&&(m.metalnessMap.value=p.metalnessMap,e(p.metalnessMap,m.metalnessMapTransform)),m.roughness.value=p.roughness,p.roughnessMap&&(m.roughnessMap.value=p.roughnessMap,e(p.roughnessMap,m.roughnessMapTransform)),p.envMap&&(m.envMapIntensity.value=p.envMapIntensity)}function d(m,p,y){m.ior.value=p.ior,p.sheen>0&&(m.sheenColor.value.copy(p.sheenColor).multiplyScalar(p.sheen),m.sheenRoughness.value=p.sheenRoughness,p.sheenColorMap&&(m.sheenColorMap.value=p.sheenColorMap,e(p.sheenColorMap,m.sheenColorMapTransform)),p.sheenRoughnessMap&&(m.sheenRoughnessMap.value=p.sheenRoughnessMap,e(p.sheenRoughnessMap,m.sheenRoughnessMapTransform))),p.clearcoat>0&&(m.clearcoat.value=p.clearcoat,m.clearcoatRoughness.value=p.clearcoatRoughness,p.clearcoatMap&&(m.clearcoatMap.value=p.clearcoatMap,e(p.clearcoatMap,m.clearcoatMapTransform)),p.clearcoatRoughnessMap&&(m.clearcoatRoughnessMap.value=p.clearcoatRoughnessMap,e(p.clearcoatRoughnessMap,m.clearcoatRoughnessMapTransform)),p.clearcoatNormalMap&&(m.clearcoatNormalMap.value=p.clearcoatNormalMap,e(p.clearcoatNormalMap,m.clearcoatNormalMapTransform),m.clearcoatNormalScale.value.copy(p.clearcoatNormalScale),p.side===bn&&m.clearcoatNormalScale.value.negate())),p.dispersion>0&&(m.dispersion.value=p.dispersion),p.iridescence>0&&(m.iridescence.value=p.iridescence,m.iridescenceIOR.value=p.iridescenceIOR,m.iridescenceThicknessMinimum.value=p.iridescenceThicknessRange[0],m.iridescenceThicknessMaximum.value=p.iridescenceThicknessRange[1],p.iridescenceMap&&(m.iridescenceMap.value=p.iridescenceMap,e(p.iridescenceMap,m.iridescenceMapTransform)),p.iridescenceThicknessMap&&(m.iridescenceThicknessMap.value=p.iridescenceThicknessMap,e(p.iridescenceThicknessMap,m.iridescenceThicknessMapTransform))),p.transmission>0&&(m.transmission.value=p.transmission,m.transmissionSamplerMap.value=y.texture,m.transmissionSamplerSize.value.set(y.width,y.height),p.transmissionMap&&(m.transmissionMap.value=p.transmissionMap,e(p.transmissionMap,m.transmissionMapTransform)),m.thickness.value=p.thickness,p.thicknessMap&&(m.thicknessMap.value=p.thicknessMap,e(p.thicknessMap,m.thicknessMapTransform)),m.attenuationDistance.value=p.attenuationDistance,m.attenuationColor.value.copy(p.attenuationColor)),p.anisotropy>0&&(m.anisotropyVector.value.set(p.anisotropy*Math.cos(p.anisotropyRotation),p.anisotropy*Math.sin(p.anisotropyRotation)),p.anisotropyMap&&(m.anisotropyMap.value=p.anisotropyMap,e(p.anisotropyMap,m.anisotropyMapTransform))),m.specularIntensity.value=p.specularIntensity,m.specularColor.value.copy(p.specularColor),p.specularColorMap&&(m.specularColorMap.value=p.specularColorMap,e(p.specularColorMap,m.specularColorMapTransform)),p.specularIntensityMap&&(m.specularIntensityMap.value=p.specularIntensityMap,e(p.specularIntensityMap,m.specularIntensityMapTransform))}function _(m,p){p.matcap&&(m.matcap.value=p.matcap)}function g(m,p){const y=t.get(p).light;m.referencePosition.value.setFromMatrixPosition(y.matrixWorld),m.nearDistance.value=y.shadow.camera.near,m.farDistance.value=y.shadow.camera.far}return{refreshFogUniforms:n,refreshMaterialUniforms:i}}function MM(r,t,e,n){let i={},s={},o=[];const a=r.getParameter(r.MAX_UNIFORM_BUFFER_BINDINGS);function l(y,E){const v=E.program;n.uniformBlockBinding(y,v)}function c(y,E){let v=i[y.id];v===void 0&&(_(y),v=u(y),i[y.id]=v,y.addEventListener("dispose",m));const C=E.program;n.updateUBOMapping(y,C);const w=t.render.frame;s[y.id]!==w&&(h(y),s[y.id]=w)}function u(y){const E=f();y.__bindingPointIndex=E;const v=r.createBuffer(),C=y.__size,w=y.usage;return r.bindBuffer(r.UNIFORM_BUFFER,v),r.bufferData(r.UNIFORM_BUFFER,C,w),r.bindBuffer(r.UNIFORM_BUFFER,null),r.bindBufferBase(r.UNIFORM_BUFFER,E,v),v}function f(){for(let y=0;y<a;y++)if(o.indexOf(y)===-1)return o.push(y),y;return console.error("THREE.WebGLRenderer: Maximum number of simultaneously usable uniforms groups reached."),0}function h(y){const E=i[y.id],v=y.uniforms,C=y.__cache;r.bindBuffer(r.UNIFORM_BUFFER,E);for(let w=0,b=v.length;w<b;w++){const R=Array.isArray(v[w])?v[w]:[v[w]];for(let S=0,x=R.length;S<x;S++){const L=R[S];if(d(L,w,S,C)===!0){const F=L.__offset,B=Array.isArray(L.value)?L.value:[L.value];let G=0;for(let j=0;j<B.length;j++){const Y=B[j],$=g(Y);typeof Y=="number"||typeof Y=="boolean"?(L.__data[0]=Y,r.bufferSubData(r.UNIFORM_BUFFER,F+G,L.__data)):Y.isMatrix3?(L.__data[0]=Y.elements[0],L.__data[1]=Y.elements[1],L.__data[2]=Y.elements[2],L.__data[3]=0,L.__data[4]=Y.elements[3],L.__data[5]=Y.elements[4],L.__data[6]=Y.elements[5],L.__data[7]=0,L.__data[8]=Y.elements[6],L.__data[9]=Y.elements[7],L.__data[10]=Y.elements[8],L.__data[11]=0):(Y.toArray(L.__data,G),G+=$.storage/Float32Array.BYTES_PER_ELEMENT)}r.bufferSubData(r.UNIFORM_BUFFER,F,L.__data)}}}r.bindBuffer(r.UNIFORM_BUFFER,null)}function d(y,E,v,C){const w=y.value,b=E+"_"+v;if(C[b]===void 0)return typeof w=="number"||typeof w=="boolean"?C[b]=w:C[b]=w.clone(),!0;{const R=C[b];if(typeof w=="number"||typeof w=="boolean"){if(R!==w)return C[b]=w,!0}else if(R.equals(w)===!1)return R.copy(w),!0}return!1}function _(y){const E=y.uniforms;let v=0;const C=16;for(let b=0,R=E.length;b<R;b++){const S=Array.isArray(E[b])?E[b]:[E[b]];for(let x=0,L=S.length;x<L;x++){const F=S[x],B=Array.isArray(F.value)?F.value:[F.value];for(let G=0,j=B.length;G<j;G++){const Y=B[G],$=g(Y),H=v%C,it=H%$.boundary,P=H+it;v+=it,P!==0&&C-P<$.storage&&(v+=C-P),F.__data=new Float32Array($.storage/Float32Array.BYTES_PER_ELEMENT),F.__offset=v,v+=$.storage}}}const w=v%C;return w>0&&(v+=C-w),y.__size=v,y.__cache={},this}function g(y){const E={boundary:0,storage:0};return typeof y=="number"||typeof y=="boolean"?(E.boundary=4,E.storage=4):y.isVector2?(E.boundary=8,E.storage=8):y.isVector3||y.isColor?(E.boundary=16,E.storage=12):y.isVector4?(E.boundary=16,E.storage=16):y.isMatrix3?(E.boundary=48,E.storage=48):y.isMatrix4?(E.boundary=64,E.storage=64):y.isTexture?console.warn("THREE.WebGLRenderer: Texture samplers can not be part of an uniforms group."):console.warn("THREE.WebGLRenderer: Unsupported uniform value type.",y),E}function m(y){const E=y.target;E.removeEventListener("dispose",m);const v=o.indexOf(E.__bindingPointIndex);o.splice(v,1),r.deleteBuffer(i[E.id]),delete i[E.id],delete s[E.id]}function p(){for(const y in i)r.deleteBuffer(i[y]);o=[],i={},s={}}return{bind:l,update:c,dispose:p}}class yM{constructor(t={}){const{canvas:e=Vg(),context:n=null,depth:i=!0,stencil:s=!1,alpha:o=!1,antialias:a=!1,premultipliedAlpha:l=!0,preserveDrawingBuffer:c=!1,powerPreference:u="default",failIfMajorPerformanceCaveat:f=!1,reverseDepthBuffer:h=!1}=t;this.isWebGLRenderer=!0;let d;if(n!==null){if(typeof WebGLRenderingContext<"u"&&n instanceof WebGLRenderingContext)throw new Error("THREE.WebGLRenderer: WebGL 1 is not supported since r163.");d=n.getContextAttributes().alpha}else d=o;const _=new Uint32Array(4),g=new Int32Array(4);let m=null,p=null;const y=[],E=[];this.domElement=e,this.debug={checkShaderErrors:!0,onShaderError:null},this.autoClear=!0,this.autoClearColor=!0,this.autoClearDepth=!0,this.autoClearStencil=!0,this.sortObjects=!0,this.clippingPlanes=[],this.localClippingEnabled=!1,this._outputColorSpace=Zn,this.toneMapping=ir,this.toneMappingExposure=1;const v=this;let C=!1,w=0,b=0,R=null,S=-1,x=null;const L=new Fe,F=new Fe;let B=null;const G=new oe(0);let j=0,Y=e.width,$=e.height,H=1,it=null,P=null;const ut=new Fe(0,0,Y,$),Ut=new Fe(0,0,Y,$);let $t=!1;const J=new fp;let nt=!1,dt=!1;const et=new Pe,Mt=new Pe,At=new Z,zt=new Fe,Kt={background:null,fog:null,environment:null,overrideMaterial:null,isScene:!0};let Ot=!1;function Pt(){return R===null?H:1}let I=n;function he(T,U){return e.getContext(T,U)}try{const T={alpha:!0,depth:i,stencil:s,antialias:a,premultipliedAlpha:l,preserveDrawingBuffer:c,powerPreference:u,failIfMajorPerformanceCaveat:f};if("setAttribute"in e&&e.setAttribute("data-engine",`three.js r${Tc}`),e.addEventListener("webglcontextlost",Q,!1),e.addEventListener("webglcontextrestored",ft,!1),e.addEventListener("webglcontextcreationerror",pt,!1),I===null){const U="webgl2";if(I=he(U,T),I===null)throw he(U)?new Error("Error creating WebGL context with your selected attributes."):new Error("Error creating WebGL context.")}}catch(T){throw console.error("THREE.WebGLRenderer: "+T.message),T}let Bt,z,Et,ie,wt,A,M,V,N,k,q,rt,ot,lt,Tt,tt,st,Dt,Rt,_t,Xt,Ft,Qt,D;function ht(){Bt=new wx(I),Bt.init(),Ft=new fM(I,Bt),z=new Sx(I,Bt,t,Ft),Et=new cM(I,Bt),z.reverseDepthBuffer&&h&&Et.buffers.depth.setReversed(!0),ie=new Px(I),wt=new $S,A=new hM(I,Bt,Et,wt,z,Ft,ie),M=new yx(v),V=new Ax(v),N=new _0(I),Qt=new vx(I,N),k=new Rx(I,N,ie,Qt),q=new Lx(I,k,N,ie),Rt=new Dx(I,z,A),tt=new Mx(wt),rt=new qS(v,M,V,Bt,z,Qt,tt),ot=new SM(v,wt),lt=new ZS,Tt=new nM(Bt),Dt=new gx(v,M,V,Et,q,d,l),st=new aM(v,q,z),D=new MM(I,ie,z,Et),_t=new xx(I,Bt,ie),Xt=new Cx(I,Bt,ie),ie.programs=rt.programs,v.capabilities=z,v.extensions=Bt,v.properties=wt,v.renderLists=lt,v.shadowMap=st,v.state=Et,v.info=ie}ht();const K=new vM(v,I);this.xr=K,this.getContext=function(){return I},this.getContextAttributes=function(){return I.getContextAttributes()},this.forceContextLoss=function(){const T=Bt.get("WEBGL_lose_context");T&&T.loseContext()},this.forceContextRestore=function(){const T=Bt.get("WEBGL_lose_context");T&&T.restoreContext()},this.getPixelRatio=function(){return H},this.setPixelRatio=function(T){T!==void 0&&(H=T,this.setSize(Y,$,!1))},this.getSize=function(T){return T.set(Y,$)},this.setSize=function(T,U,W=!0){if(K.isPresenting){console.warn("THREE.WebGLRenderer: Can't change size while VR device is presenting.");return}Y=T,$=U,e.width=Math.floor(T*H),e.height=Math.floor(U*H),W===!0&&(e.style.width=T+"px",e.style.height=U+"px"),this.setViewport(0,0,T,U)},this.getDrawingBufferSize=function(T){return T.set(Y*H,$*H).floor()},this.setDrawingBufferSize=function(T,U,W){Y=T,$=U,H=W,e.width=Math.floor(T*W),e.height=Math.floor(U*W),this.setViewport(0,0,T,U)},this.getCurrentViewport=function(T){return T.copy(L)},this.getViewport=function(T){return T.copy(ut)},this.setViewport=function(T,U,W,X){T.isVector4?ut.set(T.x,T.y,T.z,T.w):ut.set(T,U,W,X),Et.viewport(L.copy(ut).multiplyScalar(H).round())},this.getScissor=function(T){return T.copy(Ut)},this.setScissor=function(T,U,W,X){T.isVector4?Ut.set(T.x,T.y,T.z,T.w):Ut.set(T,U,W,X),Et.scissor(F.copy(Ut).multiplyScalar(H).round())},this.getScissorTest=function(){return $t},this.setScissorTest=function(T){Et.setScissorTest($t=T)},this.setOpaqueSort=function(T){it=T},this.setTransparentSort=function(T){P=T},this.getClearColor=function(T){return T.copy(Dt.getClearColor())},this.setClearColor=function(){Dt.setClearColor.apply(Dt,arguments)},this.getClearAlpha=function(){return Dt.getClearAlpha()},this.setClearAlpha=function(){Dt.setClearAlpha.apply(Dt,arguments)},this.clear=function(T=!0,U=!0,W=!0){let X=0;if(T){let O=!1;if(R!==null){const at=R.texture.format;O=at===Xc||at===Wc||at===Gc}if(O){const at=R.texture.type,ct=at===Ci||at===Nr||at===Lo||at===Es||at===kc||at===Hc,mt=Dt.getClearColor(),St=Dt.getClearAlpha(),Ht=mt.r,Wt=mt.g,bt=mt.b;ct?(_[0]=Ht,_[1]=Wt,_[2]=bt,_[3]=St,I.clearBufferuiv(I.COLOR,0,_)):(g[0]=Ht,g[1]=Wt,g[2]=bt,g[3]=St,I.clearBufferiv(I.COLOR,0,g))}else X|=I.COLOR_BUFFER_BIT}U&&(X|=I.DEPTH_BUFFER_BIT),W&&(X|=I.STENCIL_BUFFER_BIT,this.state.buffers.stencil.setMask(4294967295)),I.clear(X)},this.clearColor=function(){this.clear(!0,!1,!1)},this.clearDepth=function(){this.clear(!1,!0,!1)},this.clearStencil=function(){this.clear(!1,!1,!0)},this.dispose=function(){e.removeEventListener("webglcontextlost",Q,!1),e.removeEventListener("webglcontextrestored",ft,!1),e.removeEventListener("webglcontextcreationerror",pt,!1),lt.dispose(),Tt.dispose(),wt.dispose(),M.dispose(),V.dispose(),q.dispose(),Qt.dispose(),D.dispose(),rt.dispose(),K.dispose(),K.removeEventListener("sessionstart",gt),K.removeEventListener("sessionend",Gt),Lt.stop()};function Q(T){T.preventDefault(),console.log("THREE.WebGLRenderer: Context Lost."),C=!0}function ft(){console.log("THREE.WebGLRenderer: Context Restored."),C=!1;const T=ie.autoReset,U=st.enabled,W=st.autoUpdate,X=st.needsUpdate,O=st.type;ht(),ie.autoReset=T,st.enabled=U,st.autoUpdate=W,st.needsUpdate=X,st.type=O}function pt(T){console.error("THREE.WebGLRenderer: A WebGL context could not be created. Reason: ",T.statusMessage)}function kt(T){const U=T.target;U.removeEventListener("dispose",kt),le(U)}function le(T){Ie(T),wt.remove(T)}function Ie(T){const U=wt.get(T).programs;U!==void 0&&(U.forEach(function(W){rt.releaseProgram(W)}),T.isShaderMaterial&&rt.releaseShaderCache(T))}this.renderBufferDirect=function(T,U,W,X,O,at){U===null&&(U=Kt);const ct=O.isMesh&&O.matrixWorld.determinant()<0,mt=Vn(T,U,W,X,O);Et.setMaterial(X,ct);let St=W.index,Ht=1;if(X.wireframe===!0){if(St=k.getWireframeAttribute(W),St===void 0)return;Ht=2}const Wt=W.drawRange,bt=W.attributes.position;let Yt=Wt.start*Ht,ce=(Wt.start+Wt.count)*Ht;at!==null&&(Yt=Math.max(Yt,at.start*Ht),ce=Math.min(ce,(at.start+at.count)*Ht)),St!==null?(Yt=Math.max(Yt,0),ce=Math.min(ce,St.count)):bt!=null&&(Yt=Math.max(Yt,0),ce=Math.min(ce,bt.count));const de=ce-Yt;if(de<0||de===1/0)return;Qt.setup(O,X,mt,W,St);let De,pe=_t;if(St!==null&&(De=N.get(St),pe=Xt,pe.setIndex(De)),O.isMesh)X.wireframe===!0?(Et.setLineWidth(X.wireframeLinewidth*Pt()),pe.setMode(I.LINES)):pe.setMode(I.TRIANGLES);else if(O.isLine){let Nt=X.linewidth;Nt===void 0&&(Nt=1),Et.setLineWidth(Nt*Pt()),O.isLineSegments?pe.setMode(I.LINES):O.isLineLoop?pe.setMode(I.LINE_LOOP):pe.setMode(I.LINE_STRIP)}else O.isPoints?pe.setMode(I.POINTS):O.isSprite&&pe.setMode(I.TRIANGLES);if(O.isBatchedMesh)if(O._multiDrawInstances!==null)pe.renderMultiDrawInstances(O._multiDrawStarts,O._multiDrawCounts,O._multiDrawCount,O._multiDrawInstances);else if(Bt.get("WEBGL_multi_draw"))pe.renderMultiDraw(O._multiDrawStarts,O._multiDrawCounts,O._multiDrawCount);else{const Nt=O._multiDrawStarts,Bi=O._multiDrawCounts,me=O._multiDrawCount,li=St?N.get(St).bytesPerElement:1,js=wt.get(X).currentProgram.getUniforms();for(let Gn=0;Gn<me;Gn++)js.setValue(I,"_gl_DrawID",Gn),pe.render(Nt[Gn]/li,Bi[Gn])}else if(O.isInstancedMesh)pe.renderInstances(Yt,de,O.count);else if(W.isInstancedBufferGeometry){const Nt=W._maxInstanceCount!==void 0?W._maxInstanceCount:1/0,Bi=Math.min(W.instanceCount,Nt);pe.renderInstances(Yt,de,Bi)}else pe.render(Yt,de)};function xt(T,U,W){T.transparent===!0&&T.side===Ri&&T.forceSinglePass===!1?(T.side=bn,T.needsUpdate=!0,Me(T,U,W),T.side=er,T.needsUpdate=!0,Me(T,U,W),T.side=Ri):Me(T,U,W)}this.compile=function(T,U,W=null){W===null&&(W=T),p=Tt.get(W),p.init(U),E.push(p),W.traverseVisible(function(O){O.isLight&&O.layers.test(U.layers)&&(p.pushLight(O),O.castShadow&&p.pushShadow(O))}),T!==W&&T.traverseVisible(function(O){O.isLight&&O.layers.test(U.layers)&&(p.pushLight(O),O.castShadow&&p.pushShadow(O))}),p.setupLights();const X=new Set;return T.traverse(function(O){if(!(O.isMesh||O.isPoints||O.isLine||O.isSprite))return;const at=O.material;if(at)if(Array.isArray(at))for(let ct=0;ct<at.length;ct++){const mt=at[ct];xt(mt,W,O),X.add(mt)}else xt(at,W,O),X.add(at)}),E.pop(),p=null,X},this.compileAsync=function(T,U,W=null){const X=this.compile(T,U,W);return new Promise(O=>{function at(){if(X.forEach(function(ct){wt.get(ct).currentProgram.isReady()&&X.delete(ct)}),X.size===0){O(T);return}setTimeout(at,10)}Bt.get("KHR_parallel_shader_compile")!==null?at():setTimeout(at,10)})};let Ct=null;function jt(T){Ct&&Ct(T)}function gt(){Lt.stop()}function Gt(){Lt.start()}const Lt=new dp;Lt.setAnimationLoop(jt),typeof self<"u"&&Lt.setContext(self),this.setAnimationLoop=function(T){Ct=T,K.setAnimationLoop(T),T===null?Lt.stop():Lt.start()},K.addEventListener("sessionstart",gt),K.addEventListener("sessionend",Gt),this.render=function(T,U){if(U!==void 0&&U.isCamera!==!0){console.error("THREE.WebGLRenderer.render: camera is not an instance of THREE.Camera.");return}if(C===!0)return;if(T.matrixWorldAutoUpdate===!0&&T.updateMatrixWorld(),U.parent===null&&U.matrixWorldAutoUpdate===!0&&U.updateMatrixWorld(),K.enabled===!0&&K.isPresenting===!0&&(K.cameraAutoUpdate===!0&&K.updateCamera(U),U=K.getCamera()),T.isScene===!0&&T.onBeforeRender(v,T,U,R),p=Tt.get(T,E.length),p.init(U),E.push(p),Mt.multiplyMatrices(U.projectionMatrix,U.matrixWorldInverse),J.setFromProjectionMatrix(Mt),dt=this.localClippingEnabled,nt=tt.init(this.clippingPlanes,dt),m=lt.get(T,y.length),m.init(),y.push(m),K.enabled===!0&&K.isPresenting===!0){const at=v.xr.getDepthSensingMesh();at!==null&&Vt(at,U,-1/0,v.sortObjects)}Vt(T,U,0,v.sortObjects),m.finish(),v.sortObjects===!0&&m.sort(it,P),Ot=K.enabled===!1||K.isPresenting===!1||K.hasDepthSensing()===!1,Ot&&Dt.addToRenderList(m,T),this.info.render.frame++,nt===!0&&tt.beginShadows();const W=p.state.shadowsArray;st.render(W,T,U),nt===!0&&tt.endShadows(),this.info.autoReset===!0&&this.info.reset();const X=m.opaque,O=m.transmissive;if(p.setupLights(),U.isArrayCamera){const at=U.cameras;if(O.length>0)for(let ct=0,mt=at.length;ct<mt;ct++){const St=at[ct];re(X,O,T,St)}Ot&&Dt.render(T);for(let ct=0,mt=at.length;ct<mt;ct++){const St=at[ct];Oe(m,T,St,St.viewport)}}else O.length>0&&re(X,O,T,U),Ot&&Dt.render(T),Oe(m,T,U);R!==null&&(A.updateMultisampleRenderTarget(R),A.updateRenderTargetMipmap(R)),T.isScene===!0&&T.onAfterRender(v,T,U),Qt.resetDefaultState(),S=-1,x=null,E.pop(),E.length>0?(p=E[E.length-1],nt===!0&&tt.setGlobalState(v.clippingPlanes,p.state.camera)):p=null,y.pop(),y.length>0?m=y[y.length-1]:m=null};function Vt(T,U,W,X){if(T.visible===!1)return;if(T.layers.test(U.layers)){if(T.isGroup)W=T.renderOrder;else if(T.isLOD)T.autoUpdate===!0&&T.update(U);else if(T.isLight)p.pushLight(T),T.castShadow&&p.pushShadow(T);else if(T.isSprite){if(!T.frustumCulled||J.intersectsSprite(T)){X&&zt.setFromMatrixPosition(T.matrixWorld).applyMatrix4(Mt);const ct=q.update(T),mt=T.material;mt.visible&&m.push(T,ct,mt,W,zt.z,null)}}else if((T.isMesh||T.isLine||T.isPoints)&&(!T.frustumCulled||J.intersectsObject(T))){const ct=q.update(T),mt=T.material;if(X&&(T.boundingSphere!==void 0?(T.boundingSphere===null&&T.computeBoundingSphere(),zt.copy(T.boundingSphere.center)):(ct.boundingSphere===null&&ct.computeBoundingSphere(),zt.copy(ct.boundingSphere.center)),zt.applyMatrix4(T.matrixWorld).applyMatrix4(Mt)),Array.isArray(mt)){const St=ct.groups;for(let Ht=0,Wt=St.length;Ht<Wt;Ht++){const bt=St[Ht],Yt=mt[bt.materialIndex];Yt&&Yt.visible&&m.push(T,ct,Yt,W,zt.z,bt)}}else mt.visible&&m.push(T,ct,mt,W,zt.z,null)}}const at=T.children;for(let ct=0,mt=at.length;ct<mt;ct++)Vt(at[ct],U,W,X)}function Oe(T,U,W,X){const O=T.opaque,at=T.transmissive,ct=T.transparent;p.setupLightsView(W),nt===!0&&tt.setGlobalState(v.clippingPlanes,W),X&&Et.viewport(L.copy(X)),O.length>0&&Ee(O,U,W),at.length>0&&Ee(at,U,W),ct.length>0&&Ee(ct,U,W),Et.buffers.depth.setTest(!0),Et.buffers.depth.setMask(!0),Et.buffers.color.setMask(!0),Et.setPolygonOffset(!1)}function re(T,U,W,X){if((W.isScene===!0?W.overrideMaterial:null)!==null)return;p.state.transmissionRenderTarget[X.id]===void 0&&(p.state.transmissionRenderTarget[X.id]=new Fr(1,1,{generateMipmaps:!0,type:Bt.has("EXT_color_buffer_half_float")||Bt.has("EXT_color_buffer_float")?Io:Ci,minFilter:Ur,samples:4,stencilBuffer:s,resolveDepthBuffer:!1,resolveStencilBuffer:!1,colorSpace:ae.workingColorSpace}));const at=p.state.transmissionRenderTarget[X.id],ct=X.viewport||L;at.setSize(ct.z,ct.w);const mt=v.getRenderTarget();v.setRenderTarget(at),v.getClearColor(G),j=v.getClearAlpha(),j<1&&v.setClearColor(16777215,.5),v.clear(),Ot&&Dt.render(W);const St=v.toneMapping;v.toneMapping=ir;const Ht=X.viewport;if(X.viewport!==void 0&&(X.viewport=void 0),p.setupLightsView(X),nt===!0&&tt.setGlobalState(v.clippingPlanes,X),Ee(T,W,X),A.updateMultisampleRenderTarget(at),A.updateRenderTargetMipmap(at),Bt.has("WEBGL_multisampled_render_to_texture")===!1){let Wt=!1;for(let bt=0,Yt=U.length;bt<Yt;bt++){const ce=U[bt],de=ce.object,De=ce.geometry,pe=ce.material,Nt=ce.group;if(pe.side===Ri&&de.layers.test(X.layers)){const Bi=pe.side;pe.side=bn,pe.needsUpdate=!0,Xe(de,W,X,De,pe,Nt),pe.side=Bi,pe.needsUpdate=!0,Wt=!0}}Wt===!0&&(A.updateMultisampleRenderTarget(at),A.updateRenderTargetMipmap(at))}v.setRenderTarget(mt),v.setClearColor(G,j),Ht!==void 0&&(X.viewport=Ht),v.toneMapping=St}function Ee(T,U,W){const X=U.isScene===!0?U.overrideMaterial:null;for(let O=0,at=T.length;O<at;O++){const ct=T[O],mt=ct.object,St=ct.geometry,Ht=X===null?ct.material:X,Wt=ct.group;mt.layers.test(W.layers)&&Xe(mt,U,W,St,Ht,Wt)}}function Xe(T,U,W,X,O,at){T.onBeforeRender(v,U,W,X,O,at),T.modelViewMatrix.multiplyMatrices(W.matrixWorldInverse,T.matrixWorld),T.normalMatrix.getNormalMatrix(T.modelViewMatrix),O.onBeforeRender(v,U,W,X,T,at),O.transparent===!0&&O.side===Ri&&O.forceSinglePass===!1?(O.side=bn,O.needsUpdate=!0,v.renderBufferDirect(W,U,X,O,T,at),O.side=er,O.needsUpdate=!0,v.renderBufferDirect(W,U,X,O,T,at),O.side=Ri):v.renderBufferDirect(W,U,X,O,T,at),T.onAfterRender(v,U,W,X,O,at)}function Me(T,U,W){U.isScene!==!0&&(U=Kt);const X=wt.get(T),O=p.state.lights,at=p.state.shadowsArray,ct=O.state.version,mt=rt.getParameters(T,O.state,at,U,W),St=rt.getProgramCacheKey(mt);let Ht=X.programs;X.environment=T.isMeshStandardMaterial?U.environment:null,X.fog=U.fog,X.envMap=(T.isMeshStandardMaterial?V:M).get(T.envMap||X.environment),X.envMapRotation=X.environment!==null&&T.envMap===null?U.environmentRotation:T.envMapRotation,Ht===void 0&&(T.addEventListener("dispose",kt),Ht=new Map,X.programs=Ht);let Wt=Ht.get(St);if(Wt!==void 0){if(X.currentProgram===Wt&&X.lightsStateVersion===ct)return fe(T,mt),Wt}else mt.uniforms=rt.getUniforms(T),T.onBeforeCompile(mt,v),Wt=rt.acquireProgram(mt,St),Ht.set(St,Wt),X.uniforms=mt.uniforms;const bt=X.uniforms;return(!T.isShaderMaterial&&!T.isRawShaderMaterial||T.clipping===!0)&&(bt.clippingPlanes=tt.uniform),fe(T,mt),X.needsLights=gn(T),X.lightsStateVersion=ct,X.needsLights&&(bt.ambientLightColor.value=O.state.ambient,bt.lightProbe.value=O.state.probe,bt.directionalLights.value=O.state.directional,bt.directionalLightShadows.value=O.state.directionalShadow,bt.spotLights.value=O.state.spot,bt.spotLightShadows.value=O.state.spotShadow,bt.rectAreaLights.value=O.state.rectArea,bt.ltc_1.value=O.state.rectAreaLTC1,bt.ltc_2.value=O.state.rectAreaLTC2,bt.pointLights.value=O.state.point,bt.pointLightShadows.value=O.state.pointShadow,bt.hemisphereLights.value=O.state.hemi,bt.directionalShadowMap.value=O.state.directionalShadowMap,bt.directionalShadowMatrix.value=O.state.directionalShadowMatrix,bt.spotShadowMap.value=O.state.spotShadowMap,bt.spotLightMatrix.value=O.state.spotLightMatrix,bt.spotLightMap.value=O.state.spotLightMap,bt.pointShadowMap.value=O.state.pointShadowMap,bt.pointShadowMatrix.value=O.state.pointShadowMatrix),X.currentProgram=Wt,X.uniformsList=null,Wt}function ye(T){if(T.uniformsList===null){const U=T.currentProgram.getUniforms();T.uniformsList=hl.seqWithValue(U.seq,T.uniforms)}return T.uniformsList}function fe(T,U){const W=wt.get(T);W.outputColorSpace=U.outputColorSpace,W.batching=U.batching,W.batchingColor=U.batchingColor,W.instancing=U.instancing,W.instancingColor=U.instancingColor,W.instancingMorph=U.instancingMorph,W.skinning=U.skinning,W.morphTargets=U.morphTargets,W.morphNormals=U.morphNormals,W.morphColors=U.morphColors,W.morphTargetsCount=U.morphTargetsCount,W.numClippingPlanes=U.numClippingPlanes,W.numIntersection=U.numClipIntersection,W.vertexAlphas=U.vertexAlphas,W.vertexTangents=U.vertexTangents,W.toneMapping=U.toneMapping}function Vn(T,U,W,X,O){U.isScene!==!0&&(U=Kt),A.resetTextureUnits();const at=U.fog,ct=X.isMeshStandardMaterial?U.environment:null,mt=R===null?v.outputColorSpace:R.isXRRenderTarget===!0?R.texture.colorSpace:As,St=(X.isMeshStandardMaterial?V:M).get(X.envMap||ct),Ht=X.vertexColors===!0&&!!W.attributes.color&&W.attributes.color.itemSize===4,Wt=!!W.attributes.tangent&&(!!X.normalMap||X.anisotropy>0),bt=!!W.morphAttributes.position,Yt=!!W.morphAttributes.normal,ce=!!W.morphAttributes.color;let de=ir;X.toneMapped&&(R===null||R.isXRRenderTarget===!0)&&(de=v.toneMapping);const De=W.morphAttributes.position||W.morphAttributes.normal||W.morphAttributes.color,pe=De!==void 0?De.length:0,Nt=wt.get(X),Bi=p.state.lights;if(nt===!0&&(dt===!0||T!==x)){const Qn=T===x&&X.id===S;tt.setState(X,T,Qn)}let me=!1;X.version===Nt.__version?(Nt.needsLights&&Nt.lightsStateVersion!==Bi.state.version||Nt.outputColorSpace!==mt||O.isBatchedMesh&&Nt.batching===!1||!O.isBatchedMesh&&Nt.batching===!0||O.isBatchedMesh&&Nt.batchingColor===!0&&O.colorTexture===null||O.isBatchedMesh&&Nt.batchingColor===!1&&O.colorTexture!==null||O.isInstancedMesh&&Nt.instancing===!1||!O.isInstancedMesh&&Nt.instancing===!0||O.isSkinnedMesh&&Nt.skinning===!1||!O.isSkinnedMesh&&Nt.skinning===!0||O.isInstancedMesh&&Nt.instancingColor===!0&&O.instanceColor===null||O.isInstancedMesh&&Nt.instancingColor===!1&&O.instanceColor!==null||O.isInstancedMesh&&Nt.instancingMorph===!0&&O.morphTexture===null||O.isInstancedMesh&&Nt.instancingMorph===!1&&O.morphTexture!==null||Nt.envMap!==St||X.fog===!0&&Nt.fog!==at||Nt.numClippingPlanes!==void 0&&(Nt.numClippingPlanes!==tt.numPlanes||Nt.numIntersection!==tt.numIntersection)||Nt.vertexAlphas!==Ht||Nt.vertexTangents!==Wt||Nt.morphTargets!==bt||Nt.morphNormals!==Yt||Nt.morphColors!==ce||Nt.toneMapping!==de||Nt.morphTargetsCount!==pe)&&(me=!0):(me=!0,Nt.__version=X.version);let li=Nt.currentProgram;me===!0&&(li=Me(X,U,O));let js=!1,Gn=!1,$o=!1;const be=li.getUniforms(),Si=Nt.uniforms;if(Et.useProgram(li.program)&&(js=!0,Gn=!0,$o=!0),X.id!==S&&(S=X.id,Gn=!0),js||x!==T){Et.buffers.depth.getReversed()?(et.copy(T.projectionMatrix),Wg(et),Xg(et),be.setValue(I,"projectionMatrix",et)):be.setValue(I,"projectionMatrix",T.projectionMatrix),be.setValue(I,"viewMatrix",T.matrixWorldInverse);const fr=be.map.cameraPosition;fr!==void 0&&fr.setValue(I,At.setFromMatrixPosition(T.matrixWorld)),z.logarithmicDepthBuffer&&be.setValue(I,"logDepthBufFC",2/(Math.log(T.far+1)/Math.LN2)),(X.isMeshPhongMaterial||X.isMeshToonMaterial||X.isMeshLambertMaterial||X.isMeshBasicMaterial||X.isMeshStandardMaterial||X.isShaderMaterial)&&be.setValue(I,"isOrthographic",T.isOrthographicCamera===!0),x!==T&&(x=T,Gn=!0,$o=!0)}if(O.isSkinnedMesh){be.setOptional(I,O,"bindMatrix"),be.setOptional(I,O,"bindMatrixInverse");const Qn=O.skeleton;Qn&&(Qn.boneTexture===null&&Qn.computeBoneTexture(),be.setValue(I,"boneTexture",Qn.boneTexture,A))}O.isBatchedMesh&&(be.setOptional(I,O,"batchingTexture"),be.setValue(I,"batchingTexture",O._matricesTexture,A),be.setOptional(I,O,"batchingIdTexture"),be.setValue(I,"batchingIdTexture",O._indirectTexture,A),be.setOptional(I,O,"batchingColorTexture"),O._colorsTexture!==null&&be.setValue(I,"batchingColorTexture",O._colorsTexture,A));const Ko=W.morphAttributes;if((Ko.position!==void 0||Ko.normal!==void 0||Ko.color!==void 0)&&Rt.update(O,W,li),(Gn||Nt.receiveShadow!==O.receiveShadow)&&(Nt.receiveShadow=O.receiveShadow,be.setValue(I,"receiveShadow",O.receiveShadow)),X.isMeshGouraudMaterial&&X.envMap!==null&&(Si.envMap.value=St,Si.flipEnvMap.value=St.isCubeTexture&&St.isRenderTargetTexture===!1?-1:1),X.isMeshStandardMaterial&&X.envMap===null&&U.environment!==null&&(Si.envMapIntensity.value=U.environmentIntensity),Gn&&(be.setValue(I,"toneMappingExposure",v.toneMappingExposure),Nt.needsLights&&Te(Si,$o),at&&X.fog===!0&&ot.refreshFogUniforms(Si,at),ot.refreshMaterialUniforms(Si,X,H,$,p.state.transmissionRenderTarget[T.id]),hl.upload(I,ye(Nt),Si,A)),X.isShaderMaterial&&X.uniformsNeedUpdate===!0&&(hl.upload(I,ye(Nt),Si,A),X.uniformsNeedUpdate=!1),X.isSpriteMaterial&&be.setValue(I,"center",O.center),be.setValue(I,"modelViewMatrix",O.modelViewMatrix),be.setValue(I,"normalMatrix",O.normalMatrix),be.setValue(I,"modelMatrix",O.matrixWorld),X.isShaderMaterial||X.isRawShaderMaterial){const Qn=X.uniformsGroups;for(let fr=0,dr=Qn.length;fr<dr;fr++){const em=Qn[fr];D.update(em,li),D.bind(em,li)}}return li}function Te(T,U){T.ambientLightColor.needsUpdate=U,T.lightProbe.needsUpdate=U,T.directionalLights.needsUpdate=U,T.directionalLightShadows.needsUpdate=U,T.pointLights.needsUpdate=U,T.pointLightShadows.needsUpdate=U,T.spotLights.needsUpdate=U,T.spotLightShadows.needsUpdate=U,T.rectAreaLights.needsUpdate=U,T.hemisphereLights.needsUpdate=U}function gn(T){return T.isMeshLambertMaterial||T.isMeshToonMaterial||T.isMeshPhongMaterial||T.isMeshStandardMaterial||T.isShadowMaterial||T.isShaderMaterial&&T.lights===!0}this.getActiveCubeFace=function(){return w},this.getActiveMipmapLevel=function(){return b},this.getRenderTarget=function(){return R},this.setRenderTargetTextures=function(T,U,W){wt.get(T.texture).__webglTexture=U,wt.get(T.depthTexture).__webglTexture=W;const X=wt.get(T);X.__hasExternalTextures=!0,X.__autoAllocateDepthBuffer=W===void 0,X.__autoAllocateDepthBuffer||Bt.has("WEBGL_multisampled_render_to_texture")===!0&&(console.warn("THREE.WebGLRenderer: Render-to-texture extension was disabled because an external texture was provided"),X.__useRenderToTexture=!1)},this.setRenderTargetFramebuffer=function(T,U){const W=wt.get(T);W.__webglFramebuffer=U,W.__useDefaultFramebuffer=U===void 0},this.setRenderTarget=function(T,U=0,W=0){R=T,w=U,b=W;let X=!0,O=null,at=!1,ct=!1;if(T){const St=wt.get(T);if(St.__useDefaultFramebuffer!==void 0)Et.bindFramebuffer(I.FRAMEBUFFER,null),X=!1;else if(St.__webglFramebuffer===void 0)A.setupRenderTarget(T);else if(St.__hasExternalTextures)A.rebindTextures(T,wt.get(T.texture).__webglTexture,wt.get(T.depthTexture).__webglTexture);else if(T.depthBuffer){const bt=T.depthTexture;if(St.__boundDepthTexture!==bt){if(bt!==null&&wt.has(bt)&&(T.width!==bt.image.width||T.height!==bt.image.height))throw new Error("WebGLRenderTarget: Attached DepthTexture is initialized to the incorrect size.");A.setupDepthRenderbuffer(T)}}const Ht=T.texture;(Ht.isData3DTexture||Ht.isDataArrayTexture||Ht.isCompressedArrayTexture)&&(ct=!0);const Wt=wt.get(T).__webglFramebuffer;T.isWebGLCubeRenderTarget?(Array.isArray(Wt[U])?O=Wt[U][W]:O=Wt[U],at=!0):T.samples>0&&A.useMultisampledRTT(T)===!1?O=wt.get(T).__webglMultisampledFramebuffer:Array.isArray(Wt)?O=Wt[W]:O=Wt,L.copy(T.viewport),F.copy(T.scissor),B=T.scissorTest}else L.copy(ut).multiplyScalar(H).floor(),F.copy(Ut).multiplyScalar(H).floor(),B=$t;if(Et.bindFramebuffer(I.FRAMEBUFFER,O)&&X&&Et.drawBuffers(T,O),Et.viewport(L),Et.scissor(F),Et.setScissorTest(B),at){const St=wt.get(T.texture);I.framebufferTexture2D(I.FRAMEBUFFER,I.COLOR_ATTACHMENT0,I.TEXTURE_CUBE_MAP_POSITIVE_X+U,St.__webglTexture,W)}else if(ct){const St=wt.get(T.texture),Ht=U||0;I.framebufferTextureLayer(I.FRAMEBUFFER,I.COLOR_ATTACHMENT0,St.__webglTexture,W||0,Ht)}S=-1},this.readRenderTargetPixels=function(T,U,W,X,O,at,ct){if(!(T&&T.isWebGLRenderTarget)){console.error("THREE.WebGLRenderer.readRenderTargetPixels: renderTarget is not THREE.WebGLRenderTarget.");return}let mt=wt.get(T).__webglFramebuffer;if(T.isWebGLCubeRenderTarget&&ct!==void 0&&(mt=mt[ct]),mt){Et.bindFramebuffer(I.FRAMEBUFFER,mt);try{const St=T.texture,Ht=St.format,Wt=St.type;if(!z.textureFormatReadable(Ht)){console.error("THREE.WebGLRenderer.readRenderTargetPixels: renderTarget is not in RGBA or implementation defined format.");return}if(!z.textureTypeReadable(Wt)){console.error("THREE.WebGLRenderer.readRenderTargetPixels: renderTarget is not in UnsignedByteType or implementation defined type.");return}U>=0&&U<=T.width-X&&W>=0&&W<=T.height-O&&I.readPixels(U,W,X,O,Ft.convert(Ht),Ft.convert(Wt),at)}finally{const St=R!==null?wt.get(R).__webglFramebuffer:null;Et.bindFramebuffer(I.FRAMEBUFFER,St)}}},this.readRenderTargetPixelsAsync=async function(T,U,W,X,O,at,ct){if(!(T&&T.isWebGLRenderTarget))throw new Error("THREE.WebGLRenderer.readRenderTargetPixels: renderTarget is not THREE.WebGLRenderTarget.");let mt=wt.get(T).__webglFramebuffer;if(T.isWebGLCubeRenderTarget&&ct!==void 0&&(mt=mt[ct]),mt){const St=T.texture,Ht=St.format,Wt=St.type;if(!z.textureFormatReadable(Ht))throw new Error("THREE.WebGLRenderer.readRenderTargetPixelsAsync: renderTarget is not in RGBA or implementation defined format.");if(!z.textureTypeReadable(Wt))throw new Error("THREE.WebGLRenderer.readRenderTargetPixelsAsync: renderTarget is not in UnsignedByteType or implementation defined type.");if(U>=0&&U<=T.width-X&&W>=0&&W<=T.height-O){Et.bindFramebuffer(I.FRAMEBUFFER,mt);const bt=I.createBuffer();I.bindBuffer(I.PIXEL_PACK_BUFFER,bt),I.bufferData(I.PIXEL_PACK_BUFFER,at.byteLength,I.STREAM_READ),I.readPixels(U,W,X,O,Ft.convert(Ht),Ft.convert(Wt),0);const Yt=R!==null?wt.get(R).__webglFramebuffer:null;Et.bindFramebuffer(I.FRAMEBUFFER,Yt);const ce=I.fenceSync(I.SYNC_GPU_COMMANDS_COMPLETE,0);return I.flush(),await Gg(I,ce,4),I.bindBuffer(I.PIXEL_PACK_BUFFER,bt),I.getBufferSubData(I.PIXEL_PACK_BUFFER,0,at),I.deleteBuffer(bt),I.deleteSync(ce),at}else throw new Error("THREE.WebGLRenderer.readRenderTargetPixelsAsync: requested read bounds are out of range.")}},this.copyFramebufferToTexture=function(T,U=null,W=0){T.isTexture!==!0&&(Fo("WebGLRenderer: copyFramebufferToTexture function signature has changed."),U=arguments[0]||null,T=arguments[1]);const X=Math.pow(2,-W),O=Math.floor(T.image.width*X),at=Math.floor(T.image.height*X),ct=U!==null?U.x:0,mt=U!==null?U.y:0;A.setTexture2D(T,0),I.copyTexSubImage2D(I.TEXTURE_2D,W,0,0,ct,mt,O,at),Et.unbindTexture()},this.copyTextureToTexture=function(T,U,W=null,X=null,O=0){T.isTexture!==!0&&(Fo("WebGLRenderer: copyTextureToTexture function signature has changed."),X=arguments[0]||null,T=arguments[1],U=arguments[2],O=arguments[3]||0,W=null);let at,ct,mt,St,Ht,Wt,bt,Yt,ce;const de=T.isCompressedTexture?T.mipmaps[O]:T.image;W!==null?(at=W.max.x-W.min.x,ct=W.max.y-W.min.y,mt=W.isBox3?W.max.z-W.min.z:1,St=W.min.x,Ht=W.min.y,Wt=W.isBox3?W.min.z:0):(at=de.width,ct=de.height,mt=de.depth||1,St=0,Ht=0,Wt=0),X!==null?(bt=X.x,Yt=X.y,ce=X.z):(bt=0,Yt=0,ce=0);const De=Ft.convert(U.format),pe=Ft.convert(U.type);let Nt;U.isData3DTexture?(A.setTexture3D(U,0),Nt=I.TEXTURE_3D):U.isDataArrayTexture||U.isCompressedArrayTexture?(A.setTexture2DArray(U,0),Nt=I.TEXTURE_2D_ARRAY):(A.setTexture2D(U,0),Nt=I.TEXTURE_2D),I.pixelStorei(I.UNPACK_FLIP_Y_WEBGL,U.flipY),I.pixelStorei(I.UNPACK_PREMULTIPLY_ALPHA_WEBGL,U.premultiplyAlpha),I.pixelStorei(I.UNPACK_ALIGNMENT,U.unpackAlignment);const Bi=I.getParameter(I.UNPACK_ROW_LENGTH),me=I.getParameter(I.UNPACK_IMAGE_HEIGHT),li=I.getParameter(I.UNPACK_SKIP_PIXELS),js=I.getParameter(I.UNPACK_SKIP_ROWS),Gn=I.getParameter(I.UNPACK_SKIP_IMAGES);I.pixelStorei(I.UNPACK_ROW_LENGTH,de.width),I.pixelStorei(I.UNPACK_IMAGE_HEIGHT,de.height),I.pixelStorei(I.UNPACK_SKIP_PIXELS,St),I.pixelStorei(I.UNPACK_SKIP_ROWS,Ht),I.pixelStorei(I.UNPACK_SKIP_IMAGES,Wt);const $o=T.isDataArrayTexture||T.isData3DTexture,be=U.isDataArrayTexture||U.isData3DTexture;if(T.isRenderTargetTexture||T.isDepthTexture){const Si=wt.get(T),Ko=wt.get(U),Qn=wt.get(Si.__renderTarget),fr=wt.get(Ko.__renderTarget);Et.bindFramebuffer(I.READ_FRAMEBUFFER,Qn.__webglFramebuffer),Et.bindFramebuffer(I.DRAW_FRAMEBUFFER,fr.__webglFramebuffer);for(let dr=0;dr<mt;dr++)$o&&I.framebufferTextureLayer(I.READ_FRAMEBUFFER,I.COLOR_ATTACHMENT0,wt.get(T).__webglTexture,O,Wt+dr),T.isDepthTexture?(be&&I.framebufferTextureLayer(I.DRAW_FRAMEBUFFER,I.COLOR_ATTACHMENT0,wt.get(U).__webglTexture,O,ce+dr),I.blitFramebuffer(St,Ht,at,ct,bt,Yt,at,ct,I.DEPTH_BUFFER_BIT,I.NEAREST)):be?I.copyTexSubImage3D(Nt,O,bt,Yt,ce+dr,St,Ht,at,ct):I.copyTexSubImage2D(Nt,O,bt,Yt,ce+dr,St,Ht,at,ct);Et.bindFramebuffer(I.READ_FRAMEBUFFER,null),Et.bindFramebuffer(I.DRAW_FRAMEBUFFER,null)}else be?T.isDataTexture||T.isData3DTexture?I.texSubImage3D(Nt,O,bt,Yt,ce,at,ct,mt,De,pe,de.data):U.isCompressedArrayTexture?I.compressedTexSubImage3D(Nt,O,bt,Yt,ce,at,ct,mt,De,de.data):I.texSubImage3D(Nt,O,bt,Yt,ce,at,ct,mt,De,pe,de):T.isDataTexture?I.texSubImage2D(I.TEXTURE_2D,O,bt,Yt,at,ct,De,pe,de.data):T.isCompressedTexture?I.compressedTexSubImage2D(I.TEXTURE_2D,O,bt,Yt,de.width,de.height,De,de.data):I.texSubImage2D(I.TEXTURE_2D,O,bt,Yt,at,ct,De,pe,de);I.pixelStorei(I.UNPACK_ROW_LENGTH,Bi),I.pixelStorei(I.UNPACK_IMAGE_HEIGHT,me),I.pixelStorei(I.UNPACK_SKIP_PIXELS,li),I.pixelStorei(I.UNPACK_SKIP_ROWS,js),I.pixelStorei(I.UNPACK_SKIP_IMAGES,Gn),O===0&&U.generateMipmaps&&I.generateMipmap(Nt),Et.unbindTexture()},this.copyTextureToTexture3D=function(T,U,W=null,X=null,O=0){return T.isTexture!==!0&&(Fo("WebGLRenderer: copyTextureToTexture3D function signature has changed."),W=arguments[0]||null,X=arguments[1]||null,T=arguments[2],U=arguments[3],O=arguments[4]||0),Fo('WebGLRenderer: copyTextureToTexture3D function has been deprecated. Use "copyTextureToTexture" instead.'),this.copyTextureToTexture(T,U,W,X,O)},this.initRenderTarget=function(T){wt.get(T).__webglFramebuffer===void 0&&A.setupRenderTarget(T)},this.initTexture=function(T){T.isCubeTexture?A.setTextureCube(T,0):T.isData3DTexture?A.setTexture3D(T,0):T.isDataArrayTexture||T.isCompressedArrayTexture?A.setTexture2DArray(T,0):A.setTexture2D(T,0),Et.unbindTexture()},this.resetState=function(){w=0,b=0,R=null,Et.reset(),Qt.reset()},typeof __THREE_DEVTOOLS__<"u"&&__THREE_DEVTOOLS__.dispatchEvent(new CustomEvent("observe",{detail:this}))}get coordinateSystem(){return Pi}get outputColorSpace(){return this._outputColorSpace}set outputColorSpace(t){this._outputColorSpace=t;const e=this.getContext();e.drawingBufferColorspace=ae._getDrawingBufferColorSpace(t),e.unpackColorSpace=ae._getUnpackColorSpace()}}class ju{constructor(t,e=25e-5){this.isFogExp2=!0,this.name="",this.color=new oe(t),this.density=e}clone(){return new ju(this.color,this.density)}toJSON(){return{type:"FogExp2",name:this.name,color:this.color.getHex(),density:this.density}}}class EM extends Rn{constructor(){super(),this.isScene=!0,this.type="Scene",this.background=null,this.environment=null,this.fog=null,this.backgroundBlurriness=0,this.backgroundIntensity=1,this.backgroundRotation=new Ui,this.environmentIntensity=1,this.environmentRotation=new Ui,this.overrideMaterial=null,typeof __THREE_DEVTOOLS__<"u"&&__THREE_DEVTOOLS__.dispatchEvent(new CustomEvent("observe",{detail:this}))}copy(t,e){return super.copy(t,e),t.background!==null&&(this.background=t.background.clone()),t.environment!==null&&(this.environment=t.environment.clone()),t.fog!==null&&(this.fog=t.fog.clone()),this.backgroundBlurriness=t.backgroundBlurriness,this.backgroundIntensity=t.backgroundIntensity,this.backgroundRotation.copy(t.backgroundRotation),this.environmentIntensity=t.environmentIntensity,this.environmentRotation.copy(t.environmentRotation),t.overrideMaterial!==null&&(this.overrideMaterial=t.overrideMaterial.clone()),this.matrixAutoUpdate=t.matrixAutoUpdate,this}toJSON(t){const e=super.toJSON(t);return this.fog!==null&&(e.object.fog=this.fog.toJSON()),this.backgroundBlurriness>0&&(e.object.backgroundBlurriness=this.backgroundBlurriness),this.backgroundIntensity!==1&&(e.object.backgroundIntensity=this.backgroundIntensity),e.object.backgroundRotation=this.backgroundRotation.toArray(),this.environmentIntensity!==1&&(e.object.environmentIntensity=this.environmentIntensity),e.object.environmentRotation=this.environmentRotation.toArray(),e}}class TM extends pn{constructor(t=null,e=1,n=1,i,s,o,a,l,c=zn,u=zn,f,h){super(null,o,a,l,c,u,i,s,f,h),this.isDataTexture=!0,this.image={data:t,width:e,height:n},this.generateMipmaps=!1,this.flipY=!1,this.unpackAlignment=1}}class Wp extends oi{constructor(t,e,n,i=1){super(t,e,n),this.isInstancedBufferAttribute=!0,this.meshPerAttribute=i}copy(t){return super.copy(t),this.meshPerAttribute=t.meshPerAttribute,this}toJSON(){const t=super.toJSON();return t.meshPerAttribute=this.meshPerAttribute,t.isInstancedBufferAttribute=!0,t}}const $s=new Pe,Xp=new Pe,dl=[],Yp=new Or,bM=new Pe,Wo=new ai,Xo=new ko;class AM extends ai{constructor(t,e,n){super(t,e),this.isInstancedMesh=!0,this.instanceMatrix=new Wp(new Float32Array(n*16),16),this.instanceColor=null,this.morphTexture=null,this.count=n,this.boundingBox=null,this.boundingSphere=null;for(let i=0;i<n;i++)this.setMatrixAt(i,bM)}computeBoundingBox(){const t=this.geometry,e=this.count;this.boundingBox===null&&(this.boundingBox=new Or),t.boundingBox===null&&t.computeBoundingBox(),this.boundingBox.makeEmpty();for(let n=0;n<e;n++)this.getMatrixAt(n,$s),Yp.copy(t.boundingBox).applyMatrix4($s),this.boundingBox.union(Yp)}computeBoundingSphere(){const t=this.geometry,e=this.count;this.boundingSphere===null&&(this.boundingSphere=new ko),t.boundingSphere===null&&t.computeBoundingSphere(),this.boundingSphere.makeEmpty();for(let n=0;n<e;n++)this.getMatrixAt(n,$s),Xo.copy(t.boundingSphere).applyMatrix4($s),this.boundingSphere.union(Xo)}copy(t,e){return super.copy(t,e),this.instanceMatrix.copy(t.instanceMatrix),t.morphTexture!==null&&(this.morphTexture=t.morphTexture.clone()),t.instanceColor!==null&&(this.instanceColor=t.instanceColor.clone()),this.count=t.count,t.boundingBox!==null&&(this.boundingBox=t.boundingBox.clone()),t.boundingSphere!==null&&(this.boundingSphere=t.boundingSphere.clone()),this}getColorAt(t,e){e.fromArray(this.instanceColor.array,t*3)}getMatrixAt(t,e){e.fromArray(this.instanceMatrix.array,t*16)}getMorphAt(t,e){const n=e.morphTargetInfluences,i=this.morphTexture.source.data.data,s=n.length+1,o=t*s+1;for(let a=0;a<n.length;a++)n[a]=i[o+a]}raycast(t,e){const n=this.matrixWorld,i=this.count;if(Wo.geometry=this.geometry,Wo.material=this.material,Wo.material!==void 0&&(this.boundingSphere===null&&this.computeBoundingSphere(),Xo.copy(this.boundingSphere),Xo.applyMatrix4(n),t.ray.intersectsSphere(Xo)!==!1))for(let s=0;s<i;s++){this.getMatrixAt(s,$s),Xp.multiplyMatrices(n,$s),Wo.matrixWorld=Xp,Wo.raycast(t,dl);for(let o=0,a=dl.length;o<a;o++){const l=dl[o];l.instanceId=s,l.object=this,e.push(l)}dl.length=0}}setColorAt(t,e){this.instanceColor===null&&(this.instanceColor=new Wp(new Float32Array(this.instanceMatrix.count*3).fill(1),3)),e.toArray(this.instanceColor.array,t*3)}setMatrixAt(t,e){e.toArray(this.instanceMatrix.array,t*16)}setMorphAt(t,e){const n=e.morphTargetInfluences,i=n.length+1;this.morphTexture===null&&(this.morphTexture=new TM(new Float32Array(i*this.count),i,this.count,Vc,vi));const s=this.morphTexture.source.data.data;let o=0;for(let c=0;c<n.length;c++)o+=n[c];const a=this.geometry.morphTargetsRelative?1:1-o,l=i*t;s[l]=a,s.set(n,l+1)}updateMorphTargets(){}dispose(){return this.dispatchEvent({type:"dispose"}),this.morphTexture!==null&&(this.morphTexture.dispose(),this.morphTexture=null),this}}typeof __THREE_DEVTOOLS__<"u"&&__THREE_DEVTOOLS__.dispatchEvent(new CustomEvent("register",{detail:{revision:Tc}})),typeof window<"u"&&(window.__THREE__?console.warn("WARNING: Multiple instances of Three.js being imported."):window.__THREE__=Tc);const Ks=132,qp=2,Ju=5,wM=560,Qu=3.1,Kr=2.9,Zs=20,$p=28,th=5.6,RM=1.5,CM=new oe("#08090d"),PM=new oe("#282b7c"),Kp=new oe("#0274d8"),Zp=new oe("#7fc2ff"),DM=new oe("#e9f3fd"),Yo=[{x0:.551,x1:.978,y0:.437,y1:.956},{x0:.662,x1:.849,y0:.278,y1:.444},{x0:.716,x1:.827,y0:.03,y1:.215},{x0:.867,x1:.96,y0:.23,y1:.385},{x0:.884,x1:.956,y0:.037,y1:.156}],jp=r=>r<0?0:r>1?1:r,qo=(r,t,e)=>{const n=jp((e-r)/(t-r));return n*n*(3-2*n)},_n=(r,t,e)=>r+(t-r)*e;function LM(r=46){const t=Math.min(...Yo.map(c=>c.x0)),e=Math.max(...Yo.map(c=>c.x1)),n=Math.min(...Yo.map(c=>c.y0)),i=Math.max(...Yo.map(c=>c.y1)),s=270/450,o=(e-t)/r,a=Math.max(1,Math.round((i-n)*s/o)),l=[];for(let c=0;c<a;c++)for(let u=0;u<r;u++){const f=t+(u+.5)*o,h=n+(c+.5)/a*(i-n);Yo.some(_=>f>=_.x0&&f<=_.x1&&h>=_.y0&&h<=_.y1)&&l.push([(u+.5)/r-.5,.5-(c+.5)/a])}return{cells:l,rows:a,cols:r,aspect:(i-n)*s/(e-t)}}function IM(r,{reducedMotion:t=!1}={}){const e=new yM({canvas:r,antialias:!0,alpha:!0,powerPreference:"high-performance"});e.setClearColor(0,0);const n=new EM;n.fog=new ju(CM.getHex(),.017);const i=new Jn(42,1,.1,160);i.position.set(0,0,26);const s=new qs;n.add(s);const o=new qs;s.add(o);const{cells:a,aspect:l}=LM($p),c=Ks*2,f=Math.floor(Ks/qp)*Ju,h=Math.max(wM,a.length-c-f),d=c+f+h,_=new Float32Array(d*3),g=new Float32Array(d*3),m=new Float32Array(d*3),p=new Float32Array(d),y=new Float32Array(d),E=new Float32Array(d*3),v=new Float32Array(d),C=new Float32Array(d),w=new Uint8Array(d),b=(()=>{let N=20191204;return()=>(N=(N*1664525+1013904223)%4294967296,N/4294967296)})();let R=0;for(let N=0;N<Ks;N++){const k=N/(Ks-1),q=k*Qu*Math.PI*2,rt=(k-.5)*Zs;for(let ot=0;ot<2;ot++){const lt=q+ot*Math.PI;g[R*3]=Math.cos(lt)*Kr,g[R*3+1]=rt,g[R*3+2]=Math.sin(lt)*Kr,y[R]=k,v[R]=.2,C[R]=.12,R++}}for(let N=0;N<Ks;N+=qp){const k=N/(Ks-1),q=k*Qu*Math.PI*2,rt=(k-.5)*Zs;for(let ot=0;ot<Ju;ot++){const lt=(ot+1)/(Ju+1),Tt=_n(Kr,-Kr,lt);g[R*3]=Math.cos(q)*Tt,g[R*3+1]=rt,g[R*3+2]=Math.sin(q)*Tt,y[R]=k,v[R]=.115,C[R]=.08,R++}}for(;R<d;R++){const N=b()*Math.PI*2,k=Kr*(1.9+b()*3.1);g[R*3]=Math.cos(N)*k,g[R*3+1]=(b()-.5)*Zs*1.5,g[R*3+2]=Math.sin(N)*k,y[R]=b(),v[R]=.06+b()*.07,C[R]=.5+b()*1.9,w[R]=1}for(let N=0;N<d;N++){const k=b()*Math.PI*2,q=Math.acos(b()*2-1),rt=18+b()*26;_[N*3]=Math.sin(q)*Math.cos(k)*rt,_[N*3+1]=Math.cos(q)*rt*.8,_[N*3+2]=Math.sin(q)*Math.sin(k)*rt,E[N*3]=b()*Math.PI,E[N*3+1]=b()*Math.PI,E[N*3+2]=b()*Math.PI}const S=th/$p,x=[...Array(d).keys()].sort((N,k)=>y[N]-y[k]);for(let N=0;N<d;N++){const k=x[N];if(N<a.length){const[q,rt]=a[N%a.length];m[k*3]=q*th,m[k*3+1]=rt*th*l+RM,m[k*3+2]=0,p[k]=S*.94}else m[k*3]=(b()-.5)*34,m[k*3+1]=(b()-.5)*22,m[k*3+2]=-14-b()*16,p[k]=0}const L=new ks(1,1,1),F=new Bu({fog:!0}),B=new AM(L,F,d);B.instanceMatrix.setUsage(Ud),B.frustumCulled=!1,o.add(B);const G=new Rn,j=new oe;for(let N=0;N<d;N++)B.setColorAt(N,Kp);const Y=B.instanceColor;Y.setUsage(Ud);let $=0,H=0,it=-1,P=0,ut=0,Ut=1,$t=1,J=!0;const nt=new Set,dt=new Set,et={tx:0,ty:0,x:0,y:0},Mt=N=>{et.tx=N.clientX/window.innerWidth*2-1,et.ty=N.clientY/window.innerHeight*2-1},At=()=>{et.tx=0,et.ty=0},zt=!t&&window.matchMedia("(hover: hover) and (pointer: fine)").matches;zt&&(window.addEventListener("pointermove",Mt,{passive:!0}),document.addEventListener("pointerleave",At));const Kt=[[.75,1],[.5,.75],[.25,.5],[0,.25]];function Ot(N){if(N<.2||N>.78)return-1;const k=(N-.2)/(.78-.2);return Math.min(3,Math.floor(k*4))}const Pt=new Z;function I(N,k){const q=N*Qu*Math.PI*2+k*Math.PI;return Pt.set(Math.cos(q)*Kr,(N-.5)*Zs,Math.sin(q)*Kr),Pt.applyMatrix4(o.matrixWorld).project(i),{x:Pt.x*.5+.5,y:-Pt.y*.5+.5}}const he=13,Bt=.42,z=.6;function Et(N){if(N<0||N>3)return null;const[k,q]=Kt[N];o.updateWorldMatrix(!0,!1);let rt=null,ot=1/0;for(let lt=0;lt<he;lt++){const Tt=k+(q-k)*lt/(he-1);for(let tt=0;tt<2;tt++){const st=I(Tt,tt),Dt=st.y<.08||st.y>.9?2:0,Rt=st.x>z?(st.x-z)*4:0,_t=Math.abs(st.y-Bt)+Dt+Rt-st.x*.35;_t<ot&&(ot=_t,rt=st)}}return rt}function ie(N){const k=qo(0,.17,N),q=qo(.76,.95,N),rt=Ot(N),ot=t?0:1,lt=zt?1-q:0;for(let Tt=0;Tt<d;Tt++){const tt=Tt*3;let st=_n(_[tt],g[tt],k),Dt=_n(_[tt+1],g[tt+1],k),Rt=_n(_[tt+2],g[tt+2],k);st=_n(st,m[tt],q),Dt=_n(Dt,m[tt+1],q),Rt=_n(Rt,m[tt+2],q);const _t=k*(1-q)*ot;if(_t>.001){const D=P*.9+y[Tt]*9;st+=Math.sin(D)*.09*_t,Rt+=Math.cos(D*1.17)*.09*_t}if(lt>.001){const D=C[Tt]*lt;st+=et.x*D,Dt-=et.y*D}G.position.set(st,Dt,Rt);const Xt=_n(v[Tt]*.6,v[Tt],k),Ft=_n(Xt,p[Tt],q);G.scale.set(Ft,Ft,_n(Ft,Ft*.14,q));const Qt=1-q;if(G.rotation.set(E[tt]*Qt+P*.2*Qt,E[tt+1]*Qt+P*.14*Qt,E[tt+2]*Qt),G.updateMatrix(),B.setMatrixAt(Tt,G.matrix),j.copy(PM).lerp(Kp,y[Tt]),w[Tt]&&j.lerp(Zp,.35),rt>=0){const[D,ht]=Kt[rt];y[Tt]>=D&&y[Tt]<ht?j.lerp(Zp,.72):j.multiplyScalar(.46)}q>0&&j.lerp(DM,q*.85),Y.setXYZ(Tt,j.r,j.g,j.b)}B.instanceMatrix.needsUpdate=!0,Y.needsUpdate=!0,rt!==it&&(it=rt,nt.forEach(Tt=>Tt(rt)))}function wt(N){const k=qo(.78,1,N),q=qo(.14,.8,N);i.position.set(0,_n(Zs*.42,-Zs*.42,q)*(1-k),_n(_n(30,9.6,q),17.5,k)),i.lookAt(0,i.position.y*(1-k)*.45,0),o.rotation.y=_n(-.9,2.5,N)*(1-k);const rt=1-k;s.rotation.y=et.x*.1*rt,s.rotation.x=-et.y*.07*rt,o.rotation.z=_n(.18,0,qo(0,.2,N))*(1-k)}function A(){const N=r.clientWidth||r.parentElement.clientWidth||1,k=r.clientHeight||r.parentElement.clientHeight||1;N===Ut&&k===$t||(Ut=N,$t=k,e.setPixelRatio(Math.min(window.devicePixelRatio,2)),e.setSize(N,k,!1),i.aspect=N/k,i.fov=N/k<.85?58:42,i.updateProjectionMatrix())}function M(N){ut=requestAnimationFrame(M),J&&(P=N*.001,et.x+=(et.tx-et.x)*.06,et.y+=(et.ty-et.y)*.06,H+=($-H)*.12,Math.abs($-H)<2e-4&&(H=$),A(),ie(H),wt(H),e.render(n,i),dt.forEach(k=>k()))}const V=new IntersectionObserver(([N])=>{J=N.isIntersecting},{rootMargin:"10% 0px"});return V.observe(r),A(),t?($=H=.4,ie(.4),wt(.4),e.render(n,i),window.addEventListener("resize",()=>{A(),e.render(n,i)})):ut=requestAnimationFrame(M),{setProgress(N){$=jp(N)},onGeneChange(N){return nt.add(N),()=>nt.delete(N)},onFrame(N){return dt.add(N),()=>dt.delete(N)},geneAnchor:Et,dispose(){cancelAnimationFrame(ut),V.disconnect(),window.removeEventListener("pointermove",Mt),document.removeEventListener("pointerleave",At),L.dispose(),F.dispose(),B.dispose(),e.dispose()}}}const{gsap:eh,ScrollTrigger:UM}=J_(),Jp=document.querySelector("#dna-canvas"),Qp=document.querySelector("#dna-stage"),nh=[...document.querySelectorAll(".gene-panel")],ih=document.querySelector(".gene-rail"),tm=[...document.querySelectorAll("[data-gene-tick]")];if(Jp&&Qp){const r=IM(Jp,{reducedMotion:tr}),t=document.querySelector(".dna-pin"),e=document.querySelector("[data-gene-leader]"),n=e==null?void 0:e.querySelector(".gene-leader__line"),i=e==null?void 0:e.querySelector(".gene-leader__dot"),s=96;let o=-1;const a=()=>{var p;if(!e||o<0)return;const l=(p=nh[o])==null?void 0:p.querySelector(".gene-index span"),c=r.geneAnchor(o);if(!l||!c)return;const u=t.getBoundingClientRect(),f=l.getBoundingClientRect(),h=c.x*u.width,d=c.y*u.height,_=f.left-u.left-20,g=f.top-u.top+f.height*.58,m=h<_-s?_-s:h;n.setAttribute("d",`M ${h} ${d} L ${m} ${g} L ${_} ${g}`),i.setAttribute("cx",h),i.setAttribute("cy",d)};if(e&&!tr&&r.onFrame(a),r.onGeneChange(l=>{nh.forEach((c,u)=>{const f=u===l;eh.to(c,{autoAlpha:f?1:0,y:f?0:u<l?-26:26,duration:tr?0:.6,ease:"expo.out",overwrite:!0})}),tm.forEach((c,u)=>c.dataset.on=String(u===l)),ih==null||ih.setAttribute("data-visible",String(l>=0)),e&&!tr&&(o=l,e.dataset.on="false",l>=0&&(a(),e.getBoundingClientRect(),e.dataset.on="true"))}),tr)nh.forEach(l=>l.classList.add("is-static")),tm.forEach(l=>l.dataset.on="true");else{const l=document.querySelector("[data-hero-fade]"),c=document.querySelector("[data-gene-outro]"),u=document.querySelector(".dna-scrim");let f=null;const h=(_,g,m)=>{const p=Math.min(1,Math.max(0,(m-_)/(g-_)));return p*p*(3-2*p)},d=_=>{r.setProgress(_);const g=Math.min(1,_/.13);eh.set(l,{autoAlpha:1-g,y:-46*g,pointerEvents:g>.5?"none":"auto"});const m=h(.08,.2,_),p=h(.8,.9,_);u.style.opacity=String((.3+.7*m)*(1-p));const y=_>.9;y!==f&&(f=y,eh.to(c,{autoAlpha:y?1:0,y:y?0:24,duration:.6,ease:"expo.out",overwrite:!0}))};UM.create({trigger:Qp,start:"top top",end:"bottom bottom",scrub:!0,onUpdate:_=>d(_.progress),onRefresh:_=>d(_.progress)})}}})();

});
</script>
    
    
    <style>
/*! tailwindcss v4.3.3 | MIT License | https://tailwindcss.com */@layer properties{@supports (((-webkit-hyphens:none)) and (not (margin-trim:inline))) or ((-moz-orient:inline) and (not (color:rgb(from red r g b)))){*,:before,:after,::backdrop{--tw-rotate-x:initial;--tw-rotate-y:initial;--tw-rotate-z:initial;--tw-skew-x:initial;--tw-skew-y:initial;--tw-border-style:solid;--tw-font-weight:initial;--tw-shadow:0 0 #0000;--tw-shadow-color:initial;--tw-shadow-alpha:100%;--tw-inset-shadow:0 0 #0000;--tw-inset-shadow-color:initial;--tw-inset-shadow-alpha:100%;--tw-ring-color:initial;--tw-ring-shadow:0 0 #0000;--tw-inset-ring-color:initial;--tw-inset-ring-shadow:0 0 #0000;--tw-ring-inset:initial;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-offset-shadow:0 0 #0000;--tw-blur:initial;--tw-brightness:initial;--tw-contrast:initial;--tw-grayscale:initial;--tw-hue-rotate:initial;--tw-invert:initial;--tw-opacity:initial;--tw-saturate:initial;--tw-sepia:initial;--tw-drop-shadow:initial;--tw-drop-shadow-color:initial;--tw-drop-shadow-alpha:100%;--tw-drop-shadow-size:initial}}}@layer theme{:root,:host{--font-sans:"Inter", ui-sans-serif, system-ui, sans-serif;--font-mono:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;--color-blue-200:#9ccbf5;--color-blue-400:#3f97e8;--color-white:#fff;--spacing:.25rem;--text-sm:.875rem;--text-sm--line-height:calc(1.25 / .875);--font-weight-medium:500;--default-transition-duration:.15s;--default-transition-timing-function:cubic-bezier(.4, 0, .2, 1);--default-font-family:var(--font-sans);--default-mono-font-family:var(--font-mono);--color-ink:#1c1a19;--color-indigo:#282b7c;--color-blue:#0274d8;--color-night:#08090d;--color-night-2:#0e1015;--color-paper:#f6f7f9;--color-mist:#e6e9ef;--font-display:"Space Grotesk", ui-sans-serif, system-ui, sans-serif;--ease-out-expo:cubic-bezier(.16, 1, .3, 1)}}@layer base{*,:after,:before,::backdrop{box-sizing:border-box;border:0 solid;margin:0;padding:0}::file-selector-button{box-sizing:border-box;border:0 solid;margin:0;padding:0}html,:host{-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;line-height:1.5;font-family:var(--default-font-family,-apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", "Noto Sans", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji");font-feature-settings:var(--default-font-feature-settings,normal);font-variation-settings:var(--default-font-variation-settings,normal);-webkit-tap-highlight-color:transparent}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;-webkit-text-decoration:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,samp,pre{font-family:var(--default-mono-font-family,ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace);font-feature-settings:var(--default-mono-font-feature-settings,normal);font-variation-settings:var(--default-mono-font-variation-settings,normal);font-size:1em}small{font-size:80%}sub,sup{vertical-align:baseline;font-size:75%;line-height:0;position:relative}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}:-moz-focusring:where(:not(iframe)){outline:auto}progress{vertical-align:baseline}summary{display:list-item}ol,ul,menu{list-style:none}img,svg,video,canvas,audio,iframe,embed,object{vertical-align:middle;display:block}img,video{max-width:100%;height:auto}button,input,select,optgroup,textarea{font:inherit;font-feature-settings:inherit;font-variation-settings:inherit;letter-spacing:inherit;color:inherit;opacity:1;background-color:#0000;border-radius:0}::file-selector-button{font:inherit;font-feature-settings:inherit;font-variation-settings:inherit;letter-spacing:inherit;color:inherit;opacity:1;background-color:#0000;border-radius:0}:where(select:is([multiple],[size])) optgroup{font-weight:bolder}:where(select:is([multiple],[size])) optgroup option{padding-inline-start:20px}::file-selector-button{margin-inline-end:4px}::placeholder{opacity:1}@supports (not ((-webkit-appearance:-apple-pay-button))) or (contain-intrinsic-size:1px){::placeholder{color:currentColor}@supports (color:color-mix(in lab,red,red)){::placeholder{color:color-mix(in oklab,currentcolor 50%,transparent)}}}textarea{resize:vertical}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-date-and-time-value{min-height:1lh;text-align:inherit}::-webkit-datetime-edit{display:inline-flex}::-webkit-datetime-edit-fields-wrapper{padding:0}::-webkit-datetime-edit{padding-block:0}::-webkit-datetime-edit-year-field{padding-block:0}::-webkit-datetime-edit-month-field{padding-block:0}::-webkit-datetime-edit-day-field{padding-block:0}::-webkit-datetime-edit-hour-field{padding-block:0}::-webkit-datetime-edit-minute-field{padding-block:0}::-webkit-datetime-edit-second-field{padding-block:0}::-webkit-datetime-edit-millisecond-field{padding-block:0}::-webkit-datetime-edit-meridiem-field{padding-block:0}::-webkit-calendar-picker-indicator{line-height:1}:-moz-ui-invalid{box-shadow:none}button,input:where([type=button],[type=reset],[type=submit]){-webkit-appearance:button;-moz-appearance:button;appearance:button}::file-selector-button{-webkit-appearance:button;-moz-appearance:button;appearance:button}::-webkit-inner-spin-button{height:auto}::-webkit-outer-spin-button{height:auto}[hidden]:where(:not([hidden=until-found])){display:none!important}:root{color-scheme:dark;scroll-behavior:auto}html{-webkit-text-size-adjust:100%}body{background-color:var(--color-night);color:#fff;font-family:var(--font-sans);-webkit-font-smoothing:antialiased;font-size:16px;line-height:1.6;overflow-x:hidden}::selection{background:var(--color-blue);color:#fff}h1,h2,h3,h4{font-family:var(--font-display);letter-spacing:-.025em;text-wrap:balance;font-weight:700;line-height:1.02}a,button{cursor:pointer}:focus-visible{outline:2px solid var(--color-blue-400);outline-offset:3px;border-radius:4px}::-webkit-scrollbar{width:10px}::-webkit-scrollbar-track{background:var(--color-night)}::-webkit-scrollbar-thumb{border:3px solid var(--color-night);background:#2a2e3a;border-radius:99px}}@layer components{.shell{width:100%;max-width:1280px;margin-inline:auto;padding-inline:clamp(20px,5vw,56px)}.section-light{background:var(--color-paper);color:var(--color-ink)}.section-dark{background:var(--color-night);color:#fff}.t-display{font-size:clamp(2.6rem,8.2vw,7rem)}.t-h2{font-size:clamp(1.9rem,4.4vw,3.4rem)}.t-h3{font-size:clamp(1.35rem,2.3vw,1.9rem)}.t-lead{text-wrap:pretty;font-size:clamp(1.05rem,1.5vw,1.3rem);line-height:1.55}.eyebrow{font-family:var(--font-display);letter-spacing:.18em;text-transform:uppercase;font-size:.72rem;font-weight:600}.btn{min-height:48px;font-family:var(--font-display);letter-spacing:.01em;transition:background-color .22s var(--ease-out-expo),color .22s var(--ease-out-expo),border-color .22s var(--ease-out-expo),transform .22s var(--ease-out-expo);border-radius:2px;justify-content:center;align-items:center;gap:.6rem;padding:0 1.55rem;font-size:.9rem;font-weight:600;text-decoration:none;display:inline-flex}.btn:active{transform:scale(.975)}.btn-primary{background:var(--color-blue);color:#fff}.btn-primary:hover{background:#0b86ef}.btn-ghost{color:#fff;border:1px solid #ffffff38}.btn-ghost:hover{background:#ffffff0f;border-color:#fff}.btn-ink{color:var(--color-ink);border:1px solid #1c1a1938}.btn-ink:hover{border-color:var(--color-ink);background:#1c1a190d}.step-mark{aspect-ratio:1;grid-template-columns:repeat(3,1fr);gap:3px;width:26px;display:inline-grid}.step-mark i{background:currentColor;display:block}.site-header{z-index:60;transition:background-color .35s var(--ease-out-expo),border-color .35s var(--ease-out-expo),backdrop-filter .35s var(--ease-out-expo);border-bottom:1px solid #0000;position:fixed;inset:0 0 auto}.site-header[data-stuck=true]{-webkit-backdrop-filter:blur(14px)saturate(140%);backdrop-filter:blur(14px)saturate(140%);background:#08090db8;border-bottom-color:#ffffff14}.site-header[data-theme=light][data-stuck=true]{background:#f6f7f9d1;border-bottom-color:#1c1a191a}.site-header[data-theme=light] .nav-link{color:#1c1a199e}.site-header[data-theme=light] .nav-link:hover,.site-header[data-theme=light] .nav-link[aria-current=true]{color:var(--color-ink)}.site-header[data-theme=light] .nav-link:after{background:var(--color-indigo)}.site-header[data-theme=light] .menu-icon i{background:var(--color-ink)}body[data-menu=open] .site-header[data-theme=light]{background:#08090df5;border-bottom-color:#ffffff14}body[data-menu=open] .site-header[data-theme=light] .logo-on-light{opacity:0}body[data-menu=open] .site-header[data-theme=light] .logo-on-dark{opacity:1}body[data-menu=open] .site-header[data-theme=light] .menu-icon i{background:#fff}.logo-swap{align-items:center;display:inline-flex;position:relative}.logo-swap img{transition:opacity .32s var(--ease-out-expo)}.logo-on-light{opacity:0;position:absolute;top:0;right:0;bottom:0;left:0}.site-header[data-theme=light] .logo-on-dark{opacity:0}.site-header[data-theme=light] .logo-on-light{opacity:1}.nav-link{color:#ffffffad;transition:color .2s var(--ease-out-expo);padding-block:.4rem;font-size:.86rem;font-weight:500;text-decoration:none;position:relative}.nav-link:after{content:"";background:var(--color-blue-400);transform-origin:0;width:100%;height:1px;transition:transform .3s var(--ease-out-expo);position:absolute;bottom:0;left:0;transform:scaleX(0)}.nav-link:hover,.nav-link[aria-current=true]{color:#fff}.nav-link:hover:after,.nav-link[aria-current=true]:after{transform:scaleX(1)}#dna-stage{height:520vh;position:relative}.dna-pin{height:100svh;position:sticky;top:0;overflow:hidden}#dna-canvas{width:100%;height:100%;display:block;position:absolute;top:0;right:0;bottom:0;left:0}.gene-panel{opacity:0;visibility:hidden;will-change:opacity,transform;transform:translateY(26px)}.gene-leader{z-index:3;pointer-events:none;opacity:0;width:100%;height:100%;transition:opacity .4s var(--ease-out-expo);display:none;position:absolute;top:0;right:0;bottom:0;left:0}@media(min-width:1024px){.gene-leader{display:block}}.gene-leader[data-on=true]{opacity:1}.gene-leader__line{fill:none;stroke:var(--color-blue-400);stroke-width:1px;stroke-dasharray:1;stroke-dashoffset:1px;transition:stroke-dashoffset .9s var(--ease-out-expo)}.gene-leader[data-on=true] .gene-leader__line{stroke-dashoffset:0}.gene-leader__dot{fill:var(--color-blue-200);stroke:var(--color-blue);stroke-width:1.5px;opacity:0;transition:opacity .3s var(--ease-out-expo) .26s}.gene-leader[data-on=true] .gene-leader__dot{opacity:1}.gene-index{font-family:var(--font-display);color:#0000;-webkit-text-stroke:1.5px #ffffff47;font-size:clamp(3.4rem,9vw,6.5rem);font-weight:700;line-height:.9}.gene-rail{z-index:3;opacity:0;transition:opacity .5s var(--ease-out-expo);gap:14px;display:none;position:absolute;top:50%;left:clamp(20px,5vw,56px);transform:translateY(-50%)}.gene-rail[data-visible=true]{opacity:1}@media(min-width:1024px){.gene-rail{display:grid}}.gene-rail span{width:2px;height:34px;transition:background-color .4s var(--ease-out-expo);background:#ffffff29;display:block}.gene-rail span[data-on=true]{background:var(--color-blue)}.pill-card{border:1px solid var(--color-mist);color:inherit;transition:border-color .32s var(--ease-out-expo),transform .32s var(--ease-out-expo);background:#fff;flex-direction:column;text-decoration:none;display:flex;position:relative;overflow:hidden}.pill-card:before{content:"";background:var(--color-blue);transform-origin:0;height:2px;transition:transform .42s var(--ease-out-expo);position:absolute;inset:auto 0 0;transform:scaleX(0)}.pill-card:hover{border-color:#282b7c52;transform:translateY(-4px)}.pill-card:hover:before{transform:scaleX(1)}.card-num{font-family:var(--font-display);letter-spacing:.16em;color:var(--color-indigo);font-size:.8rem;font-weight:700}.svc-row{color:inherit;transition:background-color .32s var(--ease-out-expo);border-top:1px solid #ffffff1a;grid-template-columns:auto 1fr;align-items:baseline;gap:clamp(1rem,4vw,3rem);padding-block:clamp(1.6rem,3.4vw,2.6rem);text-decoration:none;display:grid}.svc-row:hover{background:#ffffff08}.svc-row:hover .svc-title{color:var(--color-blue-400)}.svc-title{transition:color .3s var(--ease-out-expo)}.marquee{-webkit-user-select:none;user-select:none;gap:0;display:flex;overflow:hidden;-webkit-mask-image:linear-gradient(90deg,#0000,#000 8% 92%,#0000);mask-image:linear-gradient(90deg,#0000,#000 8%,#000 92%,#0000)}.marquee__track{flex-shrink:0;align-items:center;gap:3rem;padding-right:3rem;animation:34s linear infinite marquee-scroll;display:flex}@keyframes marquee-scroll{to{transform:translate(-100%)}}[data-reveal]{opacity:0;transition:opacity .78s var(--ease-out-expo) var(--d,0s),transform .78s var(--ease-out-expo) var(--d,0s);transform:translateY(24px)}[data-reveal].is-in{opacity:1;transform:none}.reveal-line{padding-bottom:.08em;display:block;overflow:hidden}.reveal-line>span{transition:transform .95s var(--ease-out-expo) var(--d,0s);display:block;transform:translateY(105%)}.reveal-line.is-in>span{transform:none}.nav-group{position:relative}.nav-link--toggle{background:0 0;border:0;align-items:center;gap:.4rem;font-family:inherit;display:inline-flex}.nav-link--toggle svg{fill:none;stroke:currentColor;stroke-width:1.5px;stroke-linecap:round;width:9px;height:6px;transition:transform .3s var(--ease-out-expo)}.nav-group[data-open=true] .nav-link--toggle svg{transform:rotate(180deg)}.nav-group[data-open=true] .nav-link--toggle,.nav-link--toggle[data-section-active=true]{color:#fff}.site-header[data-theme=light] .nav-group[data-open=true] .nav-link--toggle,.site-header[data-theme=light] .nav-link--toggle[data-section-active=true]{color:var(--color-ink)}.nav-group--mega{position:static}.nav-mega{background:var(--color-night-2);opacity:0;visibility:hidden;transition:opacity .28s var(--ease-out-expo),transform .28s var(--ease-out-expo),visibility .28s;border-bottom:1px solid #ffffff1a;padding-block:clamp(24px,3vw,40px) clamp(16px,2vw,24px);position:absolute;top:100%;left:0;right:0;transform:translateY(-10px)}.nav-group--mega[data-open=true] .nav-mega{opacity:1;visibility:visible;transform:none}.nav-mega:before{content:"";height:16px;position:absolute;inset:-16px 0 auto}.nav-mega:after{content:"";pointer-events:none;background:linear-gradient(#08090dcc,#0000);height:60vh;position:absolute;top:100%;left:0;right:0}.site-header[data-nav-open=true],.site-header[data-theme=light][data-nav-open=true]{background:var(--color-night-2);-webkit-backdrop-filter:none;backdrop-filter:none;border-bottom-color:#0000}.site-header[data-theme=light][data-nav-open=true] .nav-link{color:#ffffffad}.site-header[data-theme=light][data-nav-open=true] .nav-link:hover,.site-header[data-theme=light][data-nav-open=true] .nav-link--toggle[aria-expanded=true],.site-header[data-theme=light][data-nav-open=true] .nav-link[aria-current=page]{color:#fff}.site-header[data-theme=light][data-nav-open=true] .logo-on-light{opacity:0}.site-header[data-theme=light][data-nav-open=true] .logo-on-dark{opacity:1}.nav-mega__kicker{font-family:var(--font-display);letter-spacing:.18em;text-transform:uppercase;color:var(--color-blue-200);font-size:.72rem;font-weight:600}.nav-mega__grid{grid-template-columns:repeat(4,minmax(0,1fr));gap:clamp(12px,1.6vw,22px);margin-top:1.4rem;display:grid}.mega-card{opacity:0;transition:opacity .42s var(--ease-out-expo),transform .42s var(--ease-out-expo);transition-delay:calc(var(--i,0) * 45ms);text-decoration:none;display:block;transform:translateY(12px)}.nav-group--mega[data-open=true] .mega-card{opacity:1;transform:none}.mega-card__media{aspect-ratio:16/10;background:var(--color-night);border:1px solid #ffffff14;display:block;position:relative;overflow:hidden}.mega-card__media img{object-fit:cover;width:100%;height:100%;transition:transform .7s var(--ease-out-expo),opacity .4s var(--ease-out-expo);opacity:.72;display:block}.mega-card:hover .mega-card__media img,.mega-card:focus-visible .mega-card__media img{opacity:1;transform:scale(1.06)}.mega-card__media:after{content:"";background:var(--color-blue);transform-origin:0;height:2px;transition:transform .42s var(--ease-out-expo);position:absolute;inset:auto 0 0;transform:scaleX(0)}.mega-card:hover .mega-card__media:after,.mega-card:focus-visible .mega-card__media:after{transform:scaleX(1)}.mega-card__name{font-family:var(--font-display);color:#fff;transition:color .24s var(--ease-out-expo);margin-top:.85rem;font-size:.95rem;font-weight:600;line-height:1.25;display:block}.mega-card:hover .mega-card__name,.mega-card[aria-current=page] .mega-card__name{color:var(--color-blue-400)}.mega-card__desc{color:#ffffff80;margin-top:.3rem;font-size:.78rem;line-height:1.45;display:block}.nav-mega__foot{border-top:1px solid #ffffff1a;flex-wrap:wrap;justify-content:space-between;align-items:center;gap:1rem;margin-top:clamp(18px,2.4vw,30px);padding-top:1.1rem;display:flex}.nav-mega__foot p{color:#ffffff73;margin:0;font-size:.82rem}.nav-mega__links{gap:1.6rem;display:flex}.nav-mega__links a{font-family:var(--font-display);color:#fff;transition:color .2s var(--ease-out-expo);font-size:.82rem;font-weight:600;text-decoration:none}.nav-mega__links a:hover{color:var(--color-blue-400)}.nav-menu{-webkit-backdrop-filter:blur(16px);backdrop-filter:blur(16px);opacity:0;visibility:hidden;width:340px;transition:opacity .26s var(--ease-out-expo),transform .26s var(--ease-out-expo),visibility .26s;background:#0e1015f7;border:1px solid #ffffff1a;padding:8px;position:absolute;top:calc(100% + 14px);left:-18px;transform:translateY(-8px)}.nav-group[data-open=true] .nav-menu{opacity:1;visibility:visible;transform:none}.nav-menu:before{content:"";height:16px;position:absolute;inset:-16px 0 auto}.nav-menu a{transition:background-color .2s var(--ease-out-expo);padding:.7rem .85rem;text-decoration:none;display:block}.nav-menu a:hover,.nav-menu a[aria-current=page]{background:#ffffff0f}.nav-menu span{font-family:var(--font-display);color:#fff;font-size:.9rem;font-weight:600;display:block}.nav-menu a[aria-current=page] span{color:var(--color-blue-400)}.nav-menu small{color:#ffffff73;margin-top:.15rem;font-size:.76rem;line-height:1.4;display:block}.menu-icon{gap:6px;width:22px;display:grid}.menu-icon i{height:2px;transition:transform .3s var(--ease-out-expo);background:#fff;display:block}body[data-menu=open] .menu-icon i:first-child{transform:translateY(4px)rotate(45deg)}body[data-menu=open] .menu-icon i:last-child{transform:translateY(-4px)rotate(-45deg)}.mobile-menu{-webkit-backdrop-filter:blur(14px);backdrop-filter:blur(14px);transition:grid-template-rows .42s var(--ease-out-expo),border-color .42s var(--ease-out-expo);background:#08090df5;border-bottom:1px solid #0000;grid-template-rows:0fr;display:grid}.mobile-menu__inner{min-height:0;overflow:hidden}body[data-menu=open] .mobile-menu{border-bottom-color:#ffffff14;grid-template-rows:1fr}.mobile-link{font-family:var(--font-display);color:#fff;border-bottom:1px solid #ffffff12;padding-block:.7rem;font-size:1.35rem;font-weight:600;text-decoration:none}.mobile-group{font-family:var(--font-display);letter-spacing:.18em;text-transform:uppercase;color:var(--color-blue-200);margin-top:1.1rem;font-size:.7rem;font-weight:600}.mobile-sub{color:#ffffffb8;border-bottom:1px solid #ffffff12;padding-block:.55rem;font-size:1rem;text-decoration:none}.mobile-sub[aria-current=page]{color:var(--color-blue-400)}.foot-title{font-family:var(--font-display);letter-spacing:.18em;text-transform:uppercase;color:#fff6;margin-bottom:.9rem;font-size:.7rem;font-weight:600}.foot-link{color:#ffffffad;transition:color .2s var(--ease-out-expo);padding-block:.32rem;font-size:.86rem;line-height:1.5;text-decoration:none;display:block}.foot-link:hover{color:#fff}.hero-copy{z-index:4;pointer-events:none;flex-direction:column;justify-content:center;display:flex;position:absolute;top:0;right:0;bottom:0;left:0}.hero-copy a{pointer-events:auto}.dna-vignette{background:radial-gradient(55% 45%,#0274d829,#0000 70%),radial-gradient(100% 70% at 50% 100%,#08090de6,#0000)}.dna-scrim{z-index:2;background:linear-gradient(#0000 6%,#08090dd6 30%,#08090de0 74%,#0000 96%)}@media(min-width:1024px){.dna-scrim{background:linear-gradient(90deg,#0000 36%,#08090dcc 64%)}}.scroll-cue{animation:2.6s ease-in-out infinite cue-drift}@keyframes cue-drift{0%,to{opacity:.4;transform:translateY(0)}50%{opacity:.75;transform:translateY(5px)}}.gene-stack{z-index:3;pointer-events:none;align-content:center;justify-items:start;display:grid;position:absolute;top:0;right:0;bottom:0;left:0}.gene-stack>.gene-panel{grid-area:1/1;max-width:46ch}@media(min-width:1024px){.gene-stack{text-align:right;justify-items:end}.gene-stack>.gene-panel{justify-self:end}.gene-stack .t-h2,.gene-stack .t-lead{margin-left:auto}}.gene-panel.is-static{grid-area:auto;margin-block:2rem;position:relative}.gene-outro{z-index:4;text-align:center;opacity:0;visibility:hidden;width:min(92vw,44ch);position:absolute;bottom:clamp(48px,9vh,104px);left:50%;transform:translate(-50%)}.card-media{aspect-ratio:16/10;background:var(--color-night);display:block;overflow:hidden}.card-media img{object-fit:cover;width:100%;height:100%;transition:transform .9s var(--ease-out-expo);display:block}.pill-card:hover .card-media img{transform:scale(1.045)}.card-body{flex-direction:column;flex:1;padding:clamp(1.5rem,2.8vw,2.2rem);display:flex}.card-go{color:var(--color-indigo);transition:transform .38s var(--ease-out-expo);margin-top:auto;padding-top:1.75rem;font-size:1.15rem;display:block}.pill-card:hover .card-go{transform:translate(8px)}.band{background:var(--color-night);align-items:flex-end;height:clamp(340px,52vh,620px);display:flex;position:relative;overflow:hidden}.band__img{object-fit:cover;will-change:transform;width:100%;height:124%;position:absolute;top:-12%;right:0;bottom:-12%;left:0}.band:after{content:"";background:linear-gradient(#08090d99,#08090d73 45%,#08090deb 92%);position:absolute;top:0;right:0;bottom:0;left:0}.band__copy{z-index:2;color:#fff;padding-bottom:clamp(32px,6vh,72px);position:relative}.como-media{background:var(--color-night);aspect-ratio:16/9;overflow:hidden}.como-media img{object-fit:cover;width:100%;height:100%;display:block}.marquee-item{font-family:var(--font-display);letter-spacing:-.02em;white-space:nowrap;color:var(--color-ink);font-size:clamp(1.1rem,2.4vw,1.75rem);font-weight:600}.marquee-dot{background:var(--color-blue);flex:none;width:9px;height:9px}.stat-num{font-family:var(--font-display);color:var(--color-indigo);font-variant-numeric:tabular-nums;font-size:clamp(2.2rem,4vw,3.2rem);font-weight:700;line-height:1}.stat-label{color:#1c1a198c;margin-top:.5rem;font-size:.82rem;line-height:1.35}.policy-row{color:#ffffffb8;border-top:1px solid #ffffff1a;grid-template-columns:auto minmax(0,1fr);align-items:start;gap:clamp(1.25rem,5vw,4rem);max-width:92ch;padding-block:clamp(1.4rem,3vw,2.2rem);display:grid}.policy-row:last-child{border-bottom:1px solid #ffffff1a}.policy-num{font-family:var(--font-display);letter-spacing:.16em;color:var(--color-blue-400);padding-top:.35rem;font-size:.8rem;font-weight:700}.contact-line{transition:border-color .28s var(--ease-out-expo);border-bottom:1px solid #ffffff1a;gap:.35rem;padding-block:1rem;text-decoration:none;display:grid}.contact-line:hover{border-bottom-color:var(--color-blue)}.contact-label{font-family:var(--font-display);letter-spacing:.18em;text-transform:uppercase;color:#fff6;font-size:.7rem;font-weight:600}.contact-value{font-family:var(--font-display);color:#fff;transition:color .28s var(--ease-out-expo);font-size:clamp(1.15rem,2.2vw,1.6rem);font-weight:600}.contact-line:hover .contact-value{color:var(--color-blue-400)}.office{background:var(--color-night);color:#ffffff8c;padding:clamp(1.25rem,2.4vw,1.8rem);font-size:.88rem;line-height:1.55}.office-city{font-family:var(--font-display);color:#fff;margin-bottom:.5rem;font-size:1.05rem;font-weight:600}.page-hero{background:var(--color-night);padding-block:clamp(140px,20vh,220px) clamp(56px,8vw,96px);position:relative;overflow:hidden}.page-hero__media{position:absolute;top:0;right:0;bottom:0;left:0}.page-hero__media img{object-fit:cover;opacity:.4;width:100%;height:100%}.page-hero:after{content:"";background:linear-gradient(90deg,#08090df0 20%,#08090d99 70%,#08090dcc);position:absolute;top:0;right:0;bottom:0;left:0}.page-hero>.shell{z-index:2;position:relative}.crumbs{color:#ffffff73;flex-wrap:wrap;align-items:center;gap:.5rem;font-size:.78rem;display:flex}.crumbs a{color:inherit;transition:color .2s var(--ease-out-expo);text-decoration:none}.crumbs a:hover{color:#fff}.crumbs span[aria-hidden]{opacity:.4}.spec-list{counter-reset:spec;gap:0;display:grid}.spec-list li{border-top:1px solid var(--color-mist);counter-increment:spec;grid-template-columns:auto minmax(0,1fr);align-items:baseline;gap:clamp(1rem,3vw,2rem);padding-block:clamp(.9rem,2vw,1.35rem);display:grid}.spec-list li:last-child{border-bottom:1px solid var(--color-mist)}.spec-list li:before{content:counter(spec,decimal-leading-zero);font-family:var(--font-display);letter-spacing:.14em;color:var(--color-indigo);font-size:.76rem;font-weight:700}.spec-list strong{font-family:var(--font-display);color:var(--color-ink);font-size:clamp(1.05rem,1.8vw,1.3rem);font-weight:600}.spec-list p{color:#1c1a199e;margin-top:.3rem;font-size:.95rem}.logo-grid{background:var(--color-mist);border:1px solid var(--color-mist);grid-template-columns:repeat(auto-fit,minmax(150px,1fr));gap:1px;display:grid}.logo-grid li{background:#fff;place-items:center;min-height:130px;padding:clamp(1.4rem,3vw,2.2rem);display:grid}.logo-grid img{object-fit:contain;filter:grayscale();opacity:.62;width:auto;max-width:100%;max-height:62px;transition:filter .4s var(--ease-out-expo),opacity .4s var(--ease-out-expo)}.logo-grid li:hover img{filter:none;opacity:1}.cert-marquee{margin-top:clamp(40px,6vw,72px);display:flex;overflow:hidden;-webkit-mask-image:linear-gradient(90deg,#0000,#000 6% 94%,#0000);mask-image:linear-gradient(90deg,#0000,#000 6%,#000 94%,#0000)}.cert-marquee__track{flex-shrink:0;align-items:center;gap:clamp(48px,7vw,104px);padding-right:clamp(48px,7vw,104px);animation:38s linear infinite cert-scroll;display:flex}.cert-marquee:hover .cert-marquee__track,.cert-marquee:focus-within .cert-marquee__track{animation-play-state:paused}.cert-marquee img{object-fit:contain;flex:none;width:auto;height:clamp(92px,11vw,132px)}@keyframes cert-scroll{to{transform:translate(-100%)}}.model-card{border:1px solid var(--color-mist);background:#fff;flex-direction:column;padding:clamp(1.6rem,3vw,2.4rem);display:flex}.model-card__num{font-family:var(--font-display);letter-spacing:.16em;color:var(--color-indigo);font-size:.76rem;font-weight:700}.model-card__rule{background:var(--color-blue);width:40px;height:2px;margin-block:1.4rem}.prose{max-width:78ch}.prose h3{margin-top:clamp(2.4rem,5vw,3.6rem);font-size:clamp(1.25rem,2.2vw,1.7rem)}.prose h3:first-child{margin-top:0}.prose p,.prose li{color:#1c1a19b8;line-height:1.68}.prose p+p{margin-top:1rem}.prose ul{gap:.7rem;margin-top:1rem;display:grid}.prose ul li{padding-left:1.4rem;position:relative}.prose ul li:before{content:"";background:var(--color-blue);width:7px;height:7px;position:absolute;top:.65em;left:0}.step{border-top:1px solid var(--color-mist);grid-template-columns:auto minmax(0,1fr);gap:clamp(1rem,3vw,2rem);padding-block:clamp(1.4rem,3vw,2.2rem);display:grid}.step:last-child{border-bottom:1px solid var(--color-mist)}.step__num{font-family:var(--font-display);color:#0000;-webkit-text-stroke:1.4px #282b7c80;font-size:clamp(1.6rem,3vw,2.4rem);font-weight:700;line-height:1}.embed{border:1px solid var(--color-mist);background:#fff;width:100%;position:relative}.embed iframe{border:0;width:100%;height:100%;display:block}.embed--form{height:clamp(620px,88vh,900px)}.embed--video{aspect-ratio:16/9;background:var(--color-night);height:auto}.field{gap:.45rem;display:grid}.field>label{font-family:var(--font-display);letter-spacing:.02em;color:var(--color-ink);font-size:.78rem;font-weight:600}.field .req{color:var(--color-blue)}.field input,.field select,.field textarea{border:1px solid var(--color-mist);width:100%;min-height:48px;font:inherit;color:var(--color-ink);transition:border-color .2s var(--ease-out-expo),box-shadow .2s var(--ease-out-expo);background:#fff;border-radius:2px;padding:.7rem .9rem;font-size:1rem}.field textarea{resize:vertical;min-height:120px}.field input:hover,.field select:hover,.field textarea:hover{border-color:#1c1a1947}.field input:focus,.field select:focus,.field textarea:focus{border-color:var(--color-blue);outline:none;box-shadow:0 0 0 3px #0274d829}.field small{color:#1c1a198c;font-size:.78rem}.check{color:#1c1a19b8;grid-template-columns:auto minmax(0,1fr);align-items:start;gap:.7rem;padding-block:.4rem;font-size:.92rem;line-height:1.5;display:grid}.check input{width:20px;height:20px;accent-color:var(--color-blue);margin-top:.15rem}.form-note{border-left:2px solid var(--color-blue);color:#1c1a19a6;padding:.9rem 0 .9rem 1.1rem;font-size:.88rem;line-height:1.6}.sibling{color:#fff;border-top:1px solid #ffffff1f;justify-content:space-between;align-items:baseline;gap:1.5rem;padding-block:clamp(1.3rem,2.6vw,1.9rem);text-decoration:none;display:flex}.sibling:last-child{border-bottom:1px solid #ffffff1f}.sibling__name,.sibling__go{transition:transform .32s var(--ease-out-expo)}.sibling:hover .sibling__name{transform:translate(12px)}.sibling:hover .sibling__go{transform:translate(-12px)}.sibling__name{font-family:var(--font-display);font-size:clamp(1.2rem,2.4vw,1.7rem);font-weight:600}.sibling__go{color:var(--color-blue-400)}.ask{background:var(--color-night);align-items:center;min-height:100svh;padding-block:clamp(120px,16vh,190px) clamp(40px,8vh,80px);display:grid;position:relative;overflow:hidden}.ask__glow{pointer-events:none;background:radial-gradient(60% 55% at 28% 30%,#0274d833,#0000 70%),radial-gradient(45% 45% at 78% 12%,#282b7c42,#0000 72%);height:90%;position:absolute;inset:-20% -10% auto}.ask__inner{z-index:1;max-width:920px;position:relative}.ask__top{justify-content:space-between;align-items:center;gap:1.5rem;min-height:34px;display:flex}.ask__trail{flex-wrap:wrap;gap:8px;display:flex}.crumb{min-height:40px;transition:background-color .2s var(--ease-out-expo),border-color .2s var(--ease-out-expo);background:#ffffff0d;border:1px solid #ffffff1a;border-radius:999px;align-items:baseline;gap:.45rem;padding:.6rem .85rem;font-size:.76rem;line-height:1.3;display:inline-flex}.crumb:hover{border-color:var(--color-blue);background:#0274d829}.crumb__key{color:#ffffff9e}.crumb__val{color:#fff;text-overflow:ellipsis;white-space:nowrap;max-width:22ch;font-weight:500;overflow:hidden}.ask__count{font-family:var(--font-display);letter-spacing:.06em;color:#ffffff9e;font-variant-numeric:tabular-nums;flex:none;font-size:.76rem;font-weight:600}.ask__bar{background:#ffffff1a;height:2px;margin-top:14px;position:relative;overflow:hidden}.ask__bar:after{content:"";background:linear-gradient(90deg,var(--color-indigo),var(--color-blue));transform:scaleX(var(--p,0));transform-origin:0;transition:transform .62s var(--ease-out-expo);position:absolute;top:0;right:0;bottom:0;left:0}.ask__stage{min-height:clamp(260px,32vh,340px);margin-top:clamp(40px,7vh,72px)}.ask__panel{opacity:0;filter:blur(6px);transition:opacity .52s var(--ease-out-expo),transform .52s var(--ease-out-expo),filter .52s var(--ease-out-expo);transform:translateY(18px)}.ask__panel[data-enter=true]{opacity:1;filter:none;transform:none}.ask__panel[data-leaving=true]{opacity:0;filter:blur(6px);transition-duration:.24s;transform:translateY(-14px)}.ask__lead{color:#ffffff80;max-width:62ch;margin-bottom:.9rem;font-size:1rem;line-height:1.55}.ask__q{letter-spacing:-.03em;text-wrap:balance;max-width:20ch;font-size:clamp(1.9rem,4.4vw,3.1rem);line-height:1.05}.ask__q:focus{outline:none}.ask__lead{color:#ffffff9e}.ask__options{flex-wrap:wrap;gap:10px;margin-top:clamp(28px,4vh,44px);display:flex}.pill{text-align:left;color:#fff;opacity:0;min-height:52px;animation:pill-in .48s var(--ease-out-expo) forwards;animation-delay:calc(var(--i,0) * 45ms + .12s);transition:background-color .22s var(--ease-out-expo),border-color .22s var(--ease-out-expo),box-shadow .22s var(--ease-out-expo),transform .22s var(--ease-out-expo);background:#ffffff0d;border:1px solid #ffffff24;border-radius:999px;gap:.1rem;padding:.78rem 1.35rem;display:grid;transform:translateY(10px)}@keyframes pill-in{to{opacity:1;transform:none}}.pill:hover{border-color:var(--color-blue);background:#0274d824;transform:translateY(-2px);box-shadow:0 10px 26px -12px #0274d8b3}.pill:active{transform:translateY(0)scale(.985)}.pill__label{font-family:var(--font-display);font-size:.98rem;font-weight:600;line-height:1.25}.pill__hint{color:#fff9;font-size:.78rem;line-height:1.35}.pill--write{background:0 0;border-style:dashed;border-color:#ffffff38}.pill--write:hover{border-style:solid}.ask__write{max-width:640px;margin-top:clamp(28px,4vh,44px)}.ask__write textarea{color:#fff;width:100%;font:inherit;resize:vertical;transition:border-color .2s var(--ease-out-expo),background-color .2s var(--ease-out-expo);background:#ffffff0d;border:1px solid #ffffff29;border-radius:16px;padding:.95rem 1.1rem;line-height:1.55}.ask__write textarea::placeholder{color:#ffffff73}.ask__write textarea:hover{border-color:#ffffff57}.ask__write textarea:focus{border-color:var(--color-blue);background:#ffffff12;outline:none}.ask__back{color:#ffffff9e;min-height:44px;transition:color .2s var(--ease-out-expo),border-color .2s var(--ease-out-expo);background:0 0;border:0;border-bottom:1px solid #0000;align-items:center;margin-top:clamp(24px,3.5vh,36px);padding:.4rem 0;font-size:.84rem;display:inline-flex}.ask__back:hover{color:#fff;border-bottom-color:#fff6}.ask__form{max-width:640px;margin-top:clamp(28px,4vh,40px)}.ask__grid{align-items:start;gap:16px;display:grid}@media(min-width:640px){.ask__grid{grid-template-columns:repeat(2,minmax(0,1fr))}}.ask__form .field>label{color:#ffffffb3}.ask__form .field--full{grid-column:1/-1}.ask__form .field input,.ask__form .field select,.ask__form .field textarea{color:#fff;background:#ffffff0d;border-color:#ffffff29;border-radius:12px}.ask__form .field input:hover,.ask__form .field select:hover,.ask__form .field textarea:hover{border-color:#ffffff57}.ask__form .field textarea::placeholder{color:#ffffff73}.field__hint{color:#fff9;font-weight:400}.ask__send{border-radius:999px;margin-top:22px}.ask__alt{color:#ffffffb8;width:fit-content;min-height:44px;transition:color .2s var(--ease-out-expo),border-color .2s var(--ease-out-expo);background:0 0;border:1px solid #ffffff29;border-radius:999px;margin-top:clamp(20px,3vh,28px);padding:.7rem 1.25rem;font-size:.86rem;display:block}.ask__alt:hover{color:#fff;border-color:#fff6}.ask__error{color:#ff9b9b;max-width:52ch;margin-top:14px;font-size:.86rem;line-height:1.5}.ask__write .ask__error{margin-top:10px}.ask__write textarea[aria-invalid=true]{border-color:#ff9b9b}.ask__urgent{color:#ffffff80;margin-top:20px;font-size:.86rem}.line-inline{color:#fff;transition:border-color .2s var(--ease-out-expo);border-bottom:1px solid #ffffff4d}.line-inline:hover{border-bottom-color:var(--color-blue)}.ask__send[disabled]{opacity:.6;pointer-events:none}.ask__note{color:#fff9;max-width:52ch;margin-top:14px;font-size:.78rem;line-height:1.55}.ask__lines{gap:10px;max-width:520px;margin-top:clamp(28px,4vh,40px);display:grid}.ask__call{border-radius:999px;flex-wrap:wrap;justify-content:space-between;align-items:baseline;gap:.5rem 1.25rem;min-height:56px;padding:1.05rem 1.5rem;text-decoration:none;display:flex}.ask__call-key{letter-spacing:.02em;opacity:.72;font-size:.82rem}.ask__call-val{font-family:var(--font-display);letter-spacing:-.01em;font-size:1.15rem;font-weight:700}.ask__lines-alt{gap:10px;display:grid}.ask__lines-alt .line{background:0 0;border-color:#ffffff1a;padding:.8rem 1.35rem}.ask__lines-alt .line__val{color:#ffffffc7;font-size:.95rem;font-weight:500}.ask__lines-alt .line:hover .line__val{color:#fff}.line{transition:background-color .22s var(--ease-out-expo),border-color .22s var(--ease-out-expo);background:#ffffff0d;border:1px solid #ffffff1f;border-radius:16px;justify-content:space-between;align-items:baseline;gap:1rem;padding:1rem 1.35rem;text-decoration:none;display:flex}.line:hover{border-color:var(--color-blue);background:#0274d824}.line__key{color:#ffffff9e;font-size:.76rem}.line__val{font-family:var(--font-display);color:#fff;font-size:1.05rem;font-weight:600}.brief{background:#ffffff0a;border:1px solid #ffffff1a;border-radius:18px;max-width:640px;margin-top:clamp(24px,3.5vh,36px);padding:clamp(1.25rem,2.4vw,1.75rem)}.brief__title{letter-spacing:0;color:#ffffff8c;font-size:.86rem;font-weight:600}.brief__list{grid-template-columns:auto minmax(0,1fr);gap:.55rem 1.5rem;margin-top:1rem;font-size:.92rem;display:grid}@media(max-width:30rem){.brief__list{grid-template-columns:1fr;gap:.15rem}.brief__list dd{margin-bottom:.7rem}}.brief__list dt{color:#ffffff9e}.brief__list dd{color:#fff;margin:0}.ask__actions{flex-wrap:wrap;gap:10px;margin-top:clamp(24px,3.5vh,34px);display:flex}.ask__actions .btn{border-radius:999px}.ask__direct{color:#ffffff9e;border-top:1px solid #ffffff14;margin-top:clamp(36px,6vh,64px);padding-top:clamp(20px,3vh,28px);font-size:.86rem}.ask__direct button{font:inherit;color:var(--color-blue-400);transition:border-color .2s var(--ease-out-expo);background:0 0;border:0;border-bottom:1px solid #3f97e866;padding:0}.ask__direct button:hover{border-bottom-color:var(--color-blue-400)}.grid-bg{background-image:linear-gradient(#ffffff0a 1px,#0000 1px),linear-gradient(90deg,#ffffff0a 1px,#0000 1px);background-size:72px 72px;-webkit-mask-image:radial-gradient(80% 60% at 50% 40%,#000,#0000);mask-image:radial-gradient(80% 60% at 50% 40%,#000,#0000)}}@layer utilities{.pointer-events-none{pointer-events:none}.collapse{visibility:collapse}.invisible{visibility:hidden}.visible{visibility:visible}.sr-only{clip-path:inset(50%);white-space:nowrap;border-width:0;width:1px;height:1px;margin:-1px;padding:0;position:absolute;overflow:hidden}.absolute{position:absolute}.fixed{position:fixed}.relative{position:relative}.static{position:static}.sticky{position:sticky}.inset-0{top:0;right:0;bottom:0;left:0}.mt-2{margin-top:calc(var(--spacing) * 2)}.mt-3{margin-top:calc(var(--spacing) * 3)}.mt-4{margin-top:calc(var(--spacing) * 4)}.mt-5{margin-top:calc(var(--spacing) * 5)}.mt-6{margin-top:calc(var(--spacing) * 6)}.mt-7{margin-top:calc(var(--spacing) * 7)}.mt-8{margin-top:calc(var(--spacing) * 8)}.mt-9{margin-top:calc(var(--spacing) * 9)}.mt-10{margin-top:calc(var(--spacing) * 10)}.mt-12{margin-top:calc(var(--spacing) * 12)}.mt-14{margin-top:calc(var(--spacing) * 14)}.mt-\[clamp\(32px\,5vw\,56px\)\]{margin-top:clamp(32px,5vw,56px)}.mt-\[clamp\(36px\,5vw\,64px\)\]{margin-top:clamp(36px,5vw,64px)}.mt-\[clamp\(40px\,6vw\,72px\)\]{margin-top:clamp(40px,6vw,72px)}.block{display:block}.flex{display:flex}.grid{display:grid}.hidden{display:none}.inline{display:inline}.inline-block{display:inline-block}.h-9{height:calc(var(--spacing) * 9)}.h-11{height:calc(var(--spacing) * 11)}.h-\[72px\]{height:72px}.w-11{width:calc(var(--spacing) * 11)}.w-auto{width:auto}.max-w-\[13ch\]{max-width:13ch}.max-w-\[14ch\]{max-width:14ch}.max-w-\[15ch\]{max-width:15ch}.max-w-\[16ch\]{max-width:16ch}.max-w-\[17ch\]{max-width:17ch}.max-w-\[18ch\]{max-width:18ch}.max-w-\[20ch\]{max-width:20ch}.max-w-\[26ch\]{max-width:26ch}.max-w-\[30ch\]{max-width:30ch}.max-w-\[44ch\]{max-width:44ch}.max-w-\[46ch\]{max-width:46ch}.max-w-\[52ch\]{max-width:52ch}.max-w-\[56ch\]{max-width:56ch}.max-w-\[62ch\]{max-width:62ch}.max-w-\[72ch\]{max-width:72ch}.max-w-\[80ch\]{max-width:80ch}.transform{transform:var(--tw-rotate-x,) var(--tw-rotate-y,) var(--tw-rotate-z,) var(--tw-skew-x,) var(--tw-skew-y,)}.resize{resize:both}.grid-cols-3{grid-template-columns:repeat(3,minmax(0,1fr))}.flex-wrap{flex-wrap:wrap}.place-items-center{place-items:center}.items-center{align-items:center}.justify-between{justify-content:space-between}.gap-1{gap:var(--spacing)}.gap-3{gap:calc(var(--spacing) * 3)}.gap-5{gap:calc(var(--spacing) * 5)}.gap-6{gap:calc(var(--spacing) * 6)}.gap-8{gap:calc(var(--spacing) * 8)}.gap-10{gap:calc(var(--spacing) * 10)}.gap-\[clamp\(20px\,3vw\,32px\)\]{gap:clamp(20px,3vw,32px)}.gap-\[clamp\(24px\,5vw\,72px\)\]{gap:clamp(24px,5vw,72px)}.gap-\[clamp\(32px\,6vw\,80px\)\]{gap:clamp(32px,6vw,80px)}.gap-\[clamp\(40px\,7vw\,96px\)\]{gap:clamp(40px,7vw,96px)}.gap-px{gap:1px}.border{border-style:var(--tw-border-style);border-width:1px}.border-y{border-block-style:var(--tw-border-style);border-block-width:1px}.border-t{border-top-style:var(--tw-border-style);border-top-width:1px}.border-mist{border-color:var(--color-mist)}.border-white\/10{border-color:#ffffff1a}@supports (color:color-mix(in lab,red,red)){.border-white\/10{border-color:color-mix(in oklab,var(--color-white) 10%,transparent)}}.bg-mist{background-color:var(--color-mist)}.bg-white\/10{background-color:#ffffff1a}@supports (color:color-mix(in lab,red,red)){.bg-white\/10{background-color:color-mix(in oklab,var(--color-white) 10%,transparent)}}.py-6{padding-block:calc(var(--spacing) * 6)}.py-14{padding-block:calc(var(--spacing) * 14)}.py-\[clamp\(56px\,8vw\,112px\)\]{padding-block:clamp(56px,8vw,112px)}.py-\[clamp\(64px\,9vw\,128px\)\]{padding-block:clamp(64px,9vw,128px)}.py-\[clamp\(72px\,11vw\,160px\)\]{padding-block:clamp(72px,11vw,160px)}.pt-8{padding-top:calc(var(--spacing) * 8)}.pt-\[clamp\(64px\,9vw\,128px\)\]{padding-top:clamp(64px,9vw,128px)}.pb-\[clamp\(72px\,11vw\,160px\)\]{padding-bottom:clamp(72px,11vw,160px)}.text-sm{font-size:var(--text-sm);line-height:var(--tw-leading,var(--text-sm--line-height))}.font-medium{--tw-font-weight:var(--font-weight-medium);font-weight:var(--font-weight-medium)}.text-blue{color:var(--color-blue)}.text-blue-200{color:var(--color-blue-200)}.text-indigo{color:var(--color-indigo)}.text-ink\/55{color:#1c1a198c}@supports (color:color-mix(in lab,red,red)){.text-ink\/55{color:color-mix(in oklab,var(--color-ink) 55%,transparent)}}.text-ink\/62{color:#1c1a199e}@supports (color:color-mix(in lab,red,red)){.text-ink\/62{color:color-mix(in oklab,var(--color-ink) 62%,transparent)}}.text-ink\/72{color:#1c1a19b8}@supports (color:color-mix(in lab,red,red)){.text-ink\/72{color:color-mix(in oklab,var(--color-ink) 72%,transparent)}}.text-white\/40{color:#fff6}@supports (color:color-mix(in lab,red,red)){.text-white\/40{color:color-mix(in oklab,var(--color-white) 40%,transparent)}}.text-white\/45{color:#ffffff73}@supports (color:color-mix(in lab,red,red)){.text-white\/45{color:color-mix(in oklab,var(--color-white) 45%,transparent)}}.text-white\/60{color:#fff9}@supports (color:color-mix(in lab,red,red)){.text-white\/60{color:color-mix(in oklab,var(--color-white) 60%,transparent)}}.text-white\/62{color:#ffffff9e}@supports (color:color-mix(in lab,red,red)){.text-white\/62{color:color-mix(in oklab,var(--color-white) 62%,transparent)}}.text-white\/65{color:#ffffffa6}@supports (color:color-mix(in lab,red,red)){.text-white\/65{color:color-mix(in oklab,var(--color-white) 65%,transparent)}}.underline{text-decoration-line:underline}.shadow{--tw-shadow:0 1px 3px 0 var(--tw-shadow-color,#0000001a), 0 1px 2px -1px var(--tw-shadow-color,#0000001a);box-shadow:var(--tw-inset-shadow),var(--tw-inset-ring-shadow),var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow)}.blur{--tw-blur:blur(8px);filter:var(--tw-blur,) var(--tw-brightness,) var(--tw-contrast,) var(--tw-grayscale,) var(--tw-hue-rotate,) var(--tw-invert,) var(--tw-saturate,) var(--tw-sepia,) var(--tw-drop-shadow,)}.transition{transition-property:color,background-color,border-color,outline-color,text-decoration-color,fill,stroke,--tw-gradient-from,--tw-gradient-via,--tw-gradient-to,opacity,box-shadow,transform,translate,scale,rotate,filter,-webkit-backdrop-filter,backdrop-filter,display,content-visibility,overlay,pointer-events;transition-timing-function:var(--tw-ease,var(--default-transition-timing-function));transition-duration:var(--tw-duration,var(--default-transition-duration))}.focus\:not-sr-only:focus{clip-path:none;white-space:normal;width:auto;height:auto;margin:0;padding:0;position:static;overflow:visible}.focus\:fixed:focus{position:fixed}.focus\:top-4:focus{top:calc(var(--spacing) * 4)}.focus\:left-4:focus{left:calc(var(--spacing) * 4)}.focus\:z-\[100\]:focus{z-index:100}.focus\:bg-blue:focus{background-color:var(--color-blue)}.focus\:px-4:focus{padding-inline:calc(var(--spacing) * 4)}.focus\:py-2:focus{padding-block:calc(var(--spacing) * 2)}.focus\:text-white:focus{color:var(--color-white)}@media(min-width:40rem){.sm\:col-span-2{grid-column:span 2/span 2}.sm\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}.sm\:grid-cols-3{grid-template-columns:repeat(3,minmax(0,1fr))}}@media(min-width:48rem){.md\:col-span-2{grid-column:span 2/span 2}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}.md\:grid-cols-3{grid-template-columns:repeat(3,minmax(0,1fr))}}@media(min-width:64rem){.lg\:flex{display:flex}.lg\:hidden{display:none}.lg\:inline-flex{display:inline-flex}.lg\:grid-cols-\[1fr_minmax\(0\,46ch\)\]{grid-template-columns:1fr minmax(0,46ch)}.lg\:grid-cols-\[minmax\(0\,1fr\)_auto\]{grid-template-columns:minmax(0,1fr) auto}.lg\:grid-cols-\[minmax\(0\,1fr\)_minmax\(0\,1fr\)\]{grid-template-columns:minmax(0,1fr) minmax(0,1fr)}.lg\:grid-cols-\[minmax\(0\,1fr\)_minmax\(0\,46ch\)\]{grid-template-columns:minmax(0,1fr) minmax(0,46ch)}.lg\:pt-4{padding-top:calc(var(--spacing) * 4)}}.text-balance{text-wrap:balance}}body[data-motion=reduced] #dna-stage{height:auto}body[data-motion=reduced] .dna-pin{height:auto;padding-block:clamp(96px,14vh,160px);position:relative}body[data-motion=reduced] #dna-canvas{opacity:.5;position:absolute;top:0;right:0;bottom:0;left:0}body[data-motion=reduced] .hero-copy,body[data-motion=reduced] .gene-stack{text-align:left;align-content:start;justify-items:start;display:block;position:relative;inset:auto}body[data-motion=reduced] .gene-stack{margin-top:clamp(64px,10vh,120px)}body[data-motion=reduced] .gene-rail,body[data-motion=reduced] .gene-outro,body[data-motion=reduced] .scroll-cue{display:none}@media(prefers-reduced-motion:reduce){.marquee__track{animation:none}.cert-marquee{overflow-x:auto;-webkit-mask-image:none;mask-image:none}.cert-marquee__track{animation:none}.cert-marquee__track[aria-hidden=true]{display:none}[data-reveal],.reveal-line>span,.gene-panel{opacity:1!important;visibility:visible!important;transform:none!important}.pill{opacity:1;transform:none;animation:none!important}.ask__panel,.ask__panel[data-leaving=true]{opacity:1!important;transform:none!important}*{transition-duration:1ms!important}}@property --tw-rotate-x{syntax:"*";inherits:false}@property --tw-rotate-y{syntax:"*";inherits:false}@property --tw-rotate-z{syntax:"*";inherits:false}@property --tw-skew-x{syntax:"*";inherits:false}@property --tw-skew-y{syntax:"*";inherits:false}@property --tw-border-style{syntax:"*";inherits:false;initial-value:solid}@property --tw-font-weight{syntax:"*";inherits:false}@property --tw-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-shadow-color{syntax:"*";inherits:false}@property --tw-shadow-alpha{syntax:"<percentage>";inherits:false;initial-value:100%}@property --tw-inset-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-inset-shadow-color{syntax:"*";inherits:false}@property --tw-inset-shadow-alpha{syntax:"<percentage>";inherits:false;initial-value:100%}@property --tw-ring-color{syntax:"*";inherits:false}@property --tw-ring-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-inset-ring-color{syntax:"*";inherits:false}@property --tw-inset-ring-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-ring-inset{syntax:"*";inherits:false}@property --tw-ring-offset-width{syntax:"<length>";inherits:false;initial-value:0}@property --tw-ring-offset-color{syntax:"*";inherits:false;initial-value:#fff}@property --tw-ring-offset-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-blur{syntax:"*";inherits:false}@property --tw-brightness{syntax:"*";inherits:false}@property --tw-contrast{syntax:"*";inherits:false}@property --tw-grayscale{syntax:"*";inherits:false}@property --tw-hue-rotate{syntax:"*";inherits:false}@property --tw-invert{syntax:"*";inherits:false}@property --tw-opacity{syntax:"*";inherits:false}@property --tw-saturate{syntax:"*";inherits:false}@property --tw-sepia{syntax:"*";inherits:false}@property --tw-drop-shadow{syntax:"*";inherits:false}@property --tw-drop-shadow-color{syntax:"*";inherits:false}@property --tw-drop-shadow-alpha{syntax:"<percentage>";inherits:false;initial-value:100%}@property --tw-drop-shadow-size{syntax:"*";inherits:false}

</style>
  </head>

  <body data-menu="closed">
    <!--
  Pantalla de carga. Va en línea (markup, estilos y script) a propósito: tiene
  que pintarse antes de que el bundle exista, así que no puede depender de
  app.css ni de ningún módulo.

  El isotipo se arma bloque por bloque con las mismas proporciones que usa la
  secuencia 3D del home (los rectángulos medidos sobre el PNG oficial), así la
  entrada al sitio y el cierre del ADN son el mismo gesto.
-->
<style>
  .boot {
    position: fixed;
    inset: 0;
    z-index: 999;
    display: grid;
    place-content: center;
    justify-items: center;
    gap: 34px;
    background: #08090d;
    /* Arranca invisible: si la página ya está en caché y resuelve en un par de
       frames, el loader no llega a mostrarse y no hay parpadeo. */
    opacity: 0;
    transition:
      opacity 520ms cubic-bezier(0.16, 1, 0.3, 1),
      visibility 520ms;
  }
  .boot[data-show='true'] {
    opacity: 1;
  }
  .boot[data-done='true'] {
    opacity: 0;
    visibility: hidden;
    pointer-events: none;
  }

  .boot__mark {
    position: relative;
    width: 92px;
    aspect-ratio: 192 / 250;
  }
  .boot__mark i {
    position: absolute;
    display: block;
    background: #fff;
    opacity: 0;
    transform: translateY(14px) scale(0.82);
    animation: boot-block 2.4s cubic-bezier(0.16, 1, 0.3, 1) infinite;
    animation-delay: var(--d);
  }
  /* Los cinco bloques del isotipo, en porcentajes de la caja de la marca. */
  .boot__mark i:nth-child(1) {
    left: 0;
    top: 43.95%;
    width: 100%;
    height: 56.05%;
    --d: 0ms;
  }
  .boot__mark i:nth-child(2) {
    left: 26%;
    top: 26.78%;
    width: 43.8%;
    height: 17.93%;
    --d: 110ms;
  }
  .boot__mark i:nth-child(3) {
    left: 74%;
    top: 21.6%;
    width: 21.8%;
    height: 16.74%;
    --d: 220ms;
  }
  .boot__mark i:nth-child(4) {
    left: 38.6%;
    top: 0;
    width: 26%;
    height: 19.98%;
    --d: 330ms;
  }
  .boot__mark i:nth-child(5) {
    left: 78%;
    top: 0.76%;
    width: 16.9%;
    height: 12.85%;
    background: #0274d8;
    --d: 440ms;
  }

  @keyframes boot-block {
    0% {
      opacity: 0;
      transform: translateY(14px) scale(0.82);
    }
    18%,
    72% {
      opacity: 1;
      transform: none;
    }
    92%,
    100% {
      opacity: 0;
      transform: translateY(-10px) scale(0.94);
    }
  }

  .boot__bar {
    width: 92px;
    height: 2px;
    overflow: hidden;
    background: rgb(255 255 255 / 0.12);
  }
  .boot__bar span {
    display: block;
    width: 40%;
    height: 100%;
    background: #0274d8;
    animation: boot-bar 1.4s cubic-bezier(0.65, 0, 0.35, 1) infinite;
  }
  @keyframes boot-bar {
    0% {
      transform: translateX(-100%);
    }
    100% {
      transform: translateX(250%);
    }
  }

  .boot__label {
    font-family: 'Space Grotesk', ui-sans-serif, system-ui, sans-serif;
    /* 0.72rem = el mismo tamaño que .eyebrow en app.css; por debajo de 11px
       este micro-label deja de leerse en pantallas densas. */
    font-size: 0.72rem;
    font-weight: 600;
    letter-spacing: 0.22em;
    text-transform: uppercase;
    color: rgb(255 255 255 / 0.35);
  }

  /* Sin JS el loader no puede atrapar la página. */
  .no-js-hide .boot {
    display: none;
  }

  @media (prefers-reduced-motion: reduce) {
    .boot__mark i {
      opacity: 1;
      transform: none;
      animation: none;
    }
    .boot__bar span {
      animation: none;
      width: 100%;
    }
  }
</style>

<div class="boot" id="boot" role="status" aria-live="polite" aria-label="Cargando">
  <div class="boot__mark" aria-hidden="true">
    <i></i><i></i><i></i><i></i><i></i>
  </div>
  <div class="boot__bar" aria-hidden="true"><span></span></div>
  <p class="boot__label">Team It</p>
</div>

<noscript>
  <style>
    .boot {
      display: none;
    }
    body:not([data-booted]) main,
    body:not([data-booted]) .site-header,
    body:not([data-booted]) footer {
      visibility: visible;
    }
  </style>
</noscript>

<script>
  (function () {
    var boot = document.getElementById('boot');
    if (!boot) return;

    var GRACE = 180; // por debajo de esto el loader ni se asoma
    var MIN = 900; // si se asomó, se queda lo suficiente para leerse
    var MAX = 4000; // y nunca más de esto, pase lo que pase
    var start = Date.now();
    var shown = false;
    var done = false;

    var showTimer = setTimeout(function () {
      if (done) return;
      shown = true;
      boot.setAttribute('data-show', 'true');
    }, GRACE);

    function reveal() {
      if (done) return;
      done = true;
      clearTimeout(showTimer);
      document.body.setAttribute('data-booted', '');
      boot.setAttribute('data-done', 'true');
      setTimeout(function () {
        boot.parentNode && boot.parentNode.removeChild(boot);
      }, 600);
    }

    function finish() {
      // El mínimo solo aplica si el loader alcanzó a aparecer: así una página
      // cacheada entra directo y una carga fría no muestra un flash a medias.
      if (!shown) return reveal();
      setTimeout(reveal, Math.max(0, MIN - (Date.now() - start)));
    }

    // Se espera a lo que de verdad provoca el fogonazo: la hoja de estilos del
    // bundle y las fuentes. `site.js` avisa cuando ya aplicó sus estilos.
    var ready = [
      new Promise(function (res) {
        window.addEventListener('teamit:ready', res, { once: true });
      }),
    ];
    if (document.fonts && document.fonts.ready) ready.push(document.fonts.ready);

    Promise.all(ready).then(finish);
    setTimeout(reveal, MAX);
  })();
</script>


<a
  href="#contenido"
  class="sr-only focus:not-sr-only focus:fixed focus:left-4 focus:top-4 focus:z-[100] focus:bg-blue focus:px-4 focus:py-2 focus:text-white"
  >Saltar al contenido</a
>

<header class="site-header" data-stuck="false">
  <div class="shell flex h-[72px] items-center justify-between">
    <a href="/preview/1120" class="logo-swap" aria-label="Team It — inicio">
      <img
        src="/projects/teamit/assets/brand/teamit-logo-dark.png"
        alt="Team It"
        width="450"
        height="270"
        class="logo-on-dark h-9 w-auto"
      />
      <img
        src="/projects/teamit/assets/brand/teamit-logo.png"
        alt=""
        aria-hidden="true"
        width="450"
        height="270"
        class="logo-on-light h-9 w-auto"
      />
    </a>

    <nav class="hidden items-center gap-8 lg:flex" aria-label="Principal">
      <a class="nav-link" data-nav href="/preview/1120#adn">Nuestro ADN</a>

      <!--
        Servicios es el único mega menú: son cuatro destinos que se eligen por
        lo que se ve, no por el nombre. Recursos se queda como lista simple
        porque son trámites, y ahí la imagen no aporta nada.
      -->
      <div class="nav-group nav-group--mega" data-nav-group>
        <button class="nav-link nav-link--toggle" data-nav-toggle aria-expanded="false">
          Servicios
          <svg viewBox="0 0 10 6" aria-hidden="true"><path d="M1 1l4 4 4-4" /></svg>
        </button>

        <div class="nav-mega">
          <div class="shell">
            <p class="nav-mega__kicker">Nuestro portafolio</p>

            <div class="nav-mega__grid">
              <a class="mega-card" href="/preview/1128" style="--i: 0">
                <span class="mega-card__media">
                  <img
                    src="/projects/teamit/assets/img/teamit-rack.jpg"
                    alt=""
                    width="1086"
                    height="1448"
                    loading="lazy"
                    decoding="async"
                  />
                </span>
                <span class="mega-card__name">Soluciones de infraestructura</span>
                <span class="mega-card__desc"
                  >Servidores, almacenamiento, redes, backup y seguridad</span
                >
              </a>

              <a class="mega-card" href="/preview/1126" style="--i: 1">
                <span class="mega-card__media">
                  <img
                    src="/projects/teamit/assets/img/teamit-tecnico.jpg"
                    alt=""
                    width="1400"
                    height="933"
                    loading="lazy"
                    decoding="async"
                  />
                </span>
                <span class="mega-card__name">Servicios profesionales</span>
                <span class="mega-card__desc"
                  >Asesoría, implementación, soporte y monitoreo</span
                >
              </a>

              <a class="mega-card" href="/preview/1129" style="--i: 2">
                <span class="mega-card__media">
                  <img
                    src="/projects/teamit/assets/img/teamit-cloud-bloques.jpg"
                    alt=""
                    width="1400"
                    height="933"
                    loading="lazy"
                    decoding="async"
                  />
                </span>
                <span class="mega-card__name">Cloud</span>
                <span class="mega-card__desc"
                  >Solución como servicio, nube y colocation</span
                >
              </a>

              <a class="mega-card" href="/preview/1127" style="--i: 3">
                <span class="mega-card__media">
                  <img
                    src="/projects/teamit/assets/img/teamit-computo.jpg"
                    alt=""
                    width="1400"
                    height="933"
                    loading="lazy"
                    decoding="async"
                  />
                </span>
                <span class="mega-card__name">Cómputo general</span>
                <span class="mega-card__desc"
                  >Equipos de usuario final, impresión y accesorios</span
                >
              </a>
            </div>

            <div class="nav-mega__foot">
              <p>Se contratan por separado o como una sola solución operada por nosotros.</p>
              <div class="nav-mega__links">
                <a href="/preview/1131">Cómo lo hacemos</a>
                <a href="/preview/1130">Hablemos</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="nav-group" data-nav-group>
        <button class="nav-link nav-link--toggle" data-nav-toggle aria-expanded="false">
          Recursos
          <svg viewBox="0 0 10 6" aria-hidden="true"><path d="M1 1l4 4 4-4" /></svg>
        </button>
        <div class="nav-menu">
          <a href="/preview/1122">
            <span>Garantías</span>
            <small>Radica tu solicitud</small>
          </a>
          <a href="/preview/1125">
            <span>Condiciones de garantías</span>
            <small>Procedimiento, cobertura y exclusiones</small>
          </a>
          <a href="/preview/1121">
            <span>PQRS</span>
            <small>Peticiones, quejas, reclamos y felicitaciones</small>
          </a>
          <a href="/preview/1124">
            <span>Recolección de residuos</span>
            <small>Disposición de equipos en desuso</small>
          </a>
          <a href="/preview/1123">
            <span>Videos</span>
            <small>Nuestro canal</small>
          </a>
        </div>
      </div>

      <a class="nav-link" data-nav href="/preview/1131">Cómo lo hacemos</a>
    </nav>

    <a class="btn btn-primary hidden lg:inline-flex" href="/preview/1130">Hablemos</a>

    <button
      data-menu-toggle
      class="grid h-11 w-11 place-items-center lg:hidden"
      aria-expanded="false"
      aria-controls="mobile-menu"
      aria-label="Abrir menú"
    >
      <span class="menu-icon" aria-hidden="true"><i></i><i></i></span>
    </button>
  </div>

  <div class="mobile-menu lg:hidden" id="mobile-menu">
    <div class="mobile-menu__inner">
      <nav class="shell grid gap-1 py-6" aria-label="Principal (móvil)">
        <a class="mobile-link" href="/preview/1120#adn">Nuestro ADN</a>

        <p class="mobile-group">Servicios</p>
        <a class="mobile-sub" href="/preview/1128"
          >Soluciones de infraestructura</a
        >
        <a class="mobile-sub" href="/preview/1126"
          >Servicios profesionales</a
        >
        <a class="mobile-sub" href="/preview/1129">Cloud</a>
        <a class="mobile-sub" href="/preview/1127">Cómputo general</a>

        <p class="mobile-group">Recursos</p>
        <a class="mobile-sub" href="/preview/1122">Garantías</a>
        <a class="mobile-sub" href="/preview/1125"
          >Condiciones de garantías</a
        >
        <a class="mobile-sub" href="/preview/1121">PQRS</a>
        <a class="mobile-sub" href="/preview/1124"
          >Recolección de residuos</a
        >
        <a class="mobile-sub" href="/preview/1123">Videos</a>

        <a class="mobile-link mt-2" href="/preview/1131">Cómo lo hacemos</a>
        <a class="btn btn-primary mt-4" href="/preview/1130">Hablemos</a>
      </nav>
    </div>
  </div>
</header>


    <main id="contenido">
      <!-- ═══ Acto 1 · Hero + secuencia ADN ═══════════════════════════════ -->
      <section id="adn" class="section-dark" aria-label="Nuestro ADN">
        <div id="dna-stage">
          <div class="dna-pin">
            <canvas id="dna-canvas" aria-hidden="true"></canvas>
            <div class="grid-bg pointer-events-none absolute inset-0" aria-hidden="true"></div>
            <div class="dna-vignette pointer-events-none absolute inset-0" aria-hidden="true"></div>
            <div class="dna-scrim pointer-events-none absolute inset-0" aria-hidden="true"></div>

            <!-- Portada -->
            <div class="hero-copy shell" data-hero-fade>
              <p class="eyebrow text-blue-200">Infraestructura tecnológica · Colombia</p>
              <h1 class="t-display mt-5 max-w-[16ch]" data-reveal-lines>
                Si puedes soñarlo, puedes lograrlo
              </h1>
              <p class="t-lead mt-7 max-w-[52ch] text-white/62">
                Diseñamos, implementamos y operamos la infraestructura que sostiene tu
                operación. Equipos, cloud y servicios especializados, con un equipo que
                responde.
              </p>
              <div class="mt-10 flex flex-wrap gap-3">
                <a class="btn btn-primary" href="#portafolio">Ver portafolio</a>
                <a class="btn btn-ghost" href="/preview/1130">Hablar con el equipo</a>
              </div>
              <p class="scroll-cue eyebrow mt-14 text-white/40">
                Haz scroll y descubre nuestro ADN
              </p>
            </div>

            <!-- Línea que sale de la hélice y apunta al número del gen -->
            <svg class="gene-leader" data-gene-leader aria-hidden="true">
              <path class="gene-leader__line" pathLength="1" />
              <circle class="gene-leader__dot" r="3" />
            </svg>

            <!-- Riel de progreso de los 4 genes -->
            <div class="gene-rail" aria-hidden="true">
              <span data-gene-tick data-on="false"></span>
              <span data-gene-tick data-on="false"></span>
              <span data-gene-tick data-on="false"></span>
              <span data-gene-tick data-on="false"></span>
            </div>

            <!-- Los 4 genes -->
            <div class="gene-stack shell">
              <article class="gene-panel">
                <p class="gene-index"><span>01</span></p>
                <h2 class="t-h2 mt-5 max-w-[13ch]">Equipo multidisciplinario</h2>
                <p class="t-lead mt-5 max-w-[46ch] text-white/65">
                  Cada integrante del equipo es indispensable para garantizar la calidad
                  de nuestro servicio y la continuidad del negocio.
                </p>
              </article>

              <article class="gene-panel">
                <p class="gene-index"><span>02</span></p>
                <h2 class="t-h2 mt-5 max-w-[13ch]">Modelo de gestión</h2>
                <p class="t-lead mt-5 max-w-[46ch] text-white/65">
                  Pasión por el detalle y respeto por la diferencia. Integrar a cada
                  persona es lo que nos permite pensar formas distintas de hacer las
                  cosas, y eso se ve en cómo atendemos a nuestros clientes.
                </p>
              </article>

              <article class="gene-panel">
                <p class="gene-index"><span>03</span></p>
                <h2 class="t-h2 mt-5 max-w-[13ch]">Políticas corporativas</h2>
                <p class="t-lead mt-5 max-w-[46ch] text-white/65">
                  Entendemos la importancia de una gestión adecuada de la información:
                  nuestras políticas acogen las necesidades de todas las partes
                  interesadas.
                </p>
              </article>

              <article class="gene-panel">
                <p class="gene-index"><span>04</span></p>
                <h2 class="t-h2 mt-5 max-w-[13ch]">Estructura organizacional</h2>
                <p class="t-lead mt-5 max-w-[46ch] text-white/65">
                  Orientada al servicio, participativa e incluyente con colaboradores,
                  clientes y proveedores, y consciente de su impacto en el entorno y la
                  sociedad.
                </p>
              </article>
            </div>

            <!-- Cierre: la hélice colapsa en el isotipo -->
            <div class="gene-outro" data-gene-outro>
              <p class="eyebrow text-blue-200">Ese es nuestro ADN</p>
              <p class="t-h3 mt-4 max-w-[30ch] font-medium">
                Cuatro rasgos, un mismo bloque. Así se construye todo lo que entregamos.
              </p>
            </div>
          </div>
        </div>
      </section>

      <!-- ═══ Acto 2 · Portafolio ═════════════════════════════════════════ -->
      <section id="portafolio" class="section-light py-[clamp(72px,11vw,160px)]">
        <div class="shell">
          <div class="max-w-[62ch]">
            <p class="eyebrow text-indigo">Nuestro portafolio</p>
            <h2 class="t-h2 mt-5 max-w-[20ch]" data-reveal-lines>
              Soluciones integrales de infraestructura tecnológica
            </h2>
            <p class="t-lead mt-6 text-ink/62">
              Equipos y servicios especializados que se contratan por separado o como una
              sola solución operada por nosotros.
            </p>
          </div>

          <div
            class="mt-[clamp(40px,6vw,72px)] grid gap-px bg-mist sm:grid-cols-2"
            data-reveal-group
          >
            <a class="pill-card" href="#contacto" data-reveal>
              <div class="card-media">
                <img
                  src="/projects/teamit/assets/img/teamit-rack.jpg"
                  alt="Frente de un rack de servidores iluminado por sus indicadores"
                  width="1086"
                  height="1448"
                  loading="lazy"
                  decoding="async"
                />
              </div>
              <div class="card-body">
                <span class="card-num">01</span>
                <h3 class="t-h3 mt-6">Soluciones de infraestructura</h3>
                <p class="mt-3 text-ink/62">
                  Diseño, suministro e implementación de la base física: cómputo,
                  almacenamiento, red y energía.
                </p>
                <span class="card-go" aria-hidden="true">→</span>
              </div>
            </a>

            <a class="pill-card" href="#contacto" data-reveal>
              <div class="card-media">
                <img
                  src="/projects/teamit/assets/img/teamit-tecnico.jpg"
                  alt="Técnico frente a un rack abierto en una sala de servidores"
                  width="1400"
                  height="933"
                  loading="lazy"
                  decoding="async"
                />
              </div>
              <div class="card-body">
                <span class="card-num">02</span>
                <h3 class="t-h3 mt-6">Servicios profesionales</h3>
                <p class="mt-3 text-ink/62">
                  Personal calificado para proyectos, soporte y operación continua de la
                  plataforma tecnológica.
                </p>
                <span class="card-go" aria-hidden="true">→</span>
              </div>
            </a>

            <a class="pill-card" href="#contacto" data-reveal>
              <div class="card-media">
                <img
                  src="/projects/teamit/assets/img/teamit-cloud-bloques.jpg"
                  alt="Bloques cúbicos flotantes con aristas iluminadas"
                  width="1400"
                  height="933"
                  loading="lazy"
                  decoding="async"
                />
              </div>
              <div class="card-body">
                <span class="card-num">03</span>
                <h3 class="t-h3 mt-6">Cloud</h3>
                <p class="mt-3 text-ink/62">
                  Modelos de solución como servicio, servicios de nube y colocation para
                  crecer sin comprar hierro.
                </p>
                <span class="card-go" aria-hidden="true">→</span>
              </div>
            </a>

            <a class="pill-card" href="#contacto" data-reveal>
              <div class="card-media">
                <img
                  src="/projects/teamit/assets/img/teamit-computo.jpg"
                  alt="Hilera de portátiles y monitores alineados sobre una mesa larga"
                  width="1400"
                  height="933"
                  loading="lazy"
                  decoding="async"
                />
              </div>
              <div class="card-body">
                <span class="card-num">04</span>
                <h3 class="t-h3 mt-6">Cómputo general</h3>
                <p class="mt-3 text-ink/62">
                  Equipos de usuario final y periféricos, con garantía, reposición y
                  gestión del ciclo de vida.
                </p>
                <span class="card-go" aria-hidden="true">→</span>
              </div>
            </a>
          </div>
        </div>
      </section>

      <!-- ═══ Acto 3 · Cómo lo hacemos ════════════════════════════════════ -->
      <section id="como" class="section-light border-t border-mist pb-[clamp(72px,11vw,160px)]">
        <div class="marquee border-y border-mist py-6" aria-hidden="true">
          <div class="marquee__track">
            <span class="marquee-item">Pasión por el detalle</span>
            <span class="marquee-dot"></span>
            <span class="marquee-item">Respeto por la diferencia</span>
            <span class="marquee-dot"></span>
            <span class="marquee-item">Orientación al servicio</span>
            <span class="marquee-dot"></span>
            <span class="marquee-item">Mejoramiento continuo</span>
            <span class="marquee-dot"></span>
          </div>
          <div class="marquee__track">
            <span class="marquee-item">Pasión por el detalle</span>
            <span class="marquee-dot"></span>
            <span class="marquee-item">Respeto por la diferencia</span>
            <span class="marquee-dot"></span>
            <span class="marquee-item">Orientación al servicio</span>
            <span class="marquee-dot"></span>
            <span class="marquee-item">Mejoramiento continuo</span>
            <span class="marquee-dot"></span>
          </div>
        </div>

        <div class="shell grid gap-[clamp(32px,6vw,80px)] pt-[clamp(64px,9vw,128px)] lg:grid-cols-[1fr_minmax(0,46ch)]">
          <div>
            <p class="eyebrow text-indigo">¿Cómo lo hacemos?</p>
            <h2 class="t-h2 mt-5 max-w-[16ch]" data-reveal-lines>
              El diferenciador son las personas
            </h2>
            <figure class="como-media mt-[clamp(32px,5vw,56px)]" data-reveal>
              <img
                src="/projects/teamit/assets/img/teamit-equipo.jpg"
                alt="Tres integrantes del equipo técnico trabajando frente a los tableros de un centro de operaciones"
                width="1800"
                height="1012"
                loading="lazy"
                decoding="async"
              />
            </figure>
          </div>
          <div class="lg:pt-4" data-reveal-group>
            <p class="t-lead text-ink/72" data-reveal>
              El principal elemento diferenciador de la compañía es el compromiso con cada
              integrante del equipo de trabajo. Mejoramos sus condiciones para que el
              crecimiento de la empresa sea consecuencia de su productividad y su
              compromiso.
            </p>

            <dl class="mt-12 grid grid-cols-3 gap-6 border-t border-mist pt-8">
              <div data-reveal>
                <dt class="stat-num"><span data-count="4">0</span></dt>
                <dd class="stat-label">Sedes en Colombia</dd>
              </div>
              <div data-reveal>
                <dt class="stat-num"><span data-count="4">0</span></dt>
                <dd class="stat-label">Líneas de portafolio</dd>
              </div>
              <div data-reveal>
                <dt class="stat-num"><span data-count="5">0</span></dt>
                <dd class="stat-label">Compromisos declarados</dd>
              </div>
            </dl>
          </div>
        </div>
      </section>

      <!-- ═══ Certificaciones ═════════════════════════════════════════════ -->
      <section
        id="certificaciones"
        class="section-light border-t border-mist py-[clamp(72px,11vw,160px)]"
      >
        <div class="shell">
          <div class="grid gap-[clamp(24px,5vw,72px)] lg:grid-cols-[minmax(0,1fr)_minmax(0,46ch)]">
            <div>
              <p class="eyebrow text-indigo">Nos certificamos constantemente</p>
              <h2 class="t-h2 mt-5 max-w-[16ch]" data-reveal-lines>
                Respaldados por los fabricantes
              </h2>
            </div>
            <p class="t-lead text-ink/62 lg:pt-4">
              Buscamos una evolución no solo en nuestro equipo de trabajo sino también en
              todos nuestros procesos y servicios, brindando así una mejor experiencia con
              el usuario.
            </p>
          </div>

        </div>

        <!-- Loop continuo. El track se repite tres veces para que no aparezca
             un hueco en pantallas anchas; solo la primera copia es accesible,
             las otras son decorativas. -->
        <div class="cert-marquee" data-reveal>
          <div class="cert-marquee__track">
            <img src="/projects/teamit/assets/certs/goldpartner.png" alt="HPE Solution Provider · HPE Pointnext Services · Gold Partner" width="273" height="285" loading="lazy" />
            <img src="/projects/teamit/assets/certs/greenlake.png" alt="HPE Solution Provider · HPE GreenLake Flex Capacity · Platinum Partner" width="272" height="285" loading="lazy" />
            <img src="/projects/teamit/assets/certs/veeam.png" alt="Veeam CSP Partner Program" width="350" height="188" loading="lazy" />
            <img src="/projects/teamit/assets/certs/vmpartner-network.png" alt="VMware Partner Network" width="345" height="159" loading="lazy" />
            <img src="/projects/teamit/assets/certs/vmware-solutionprovider.png" alt="VMware Partner · Enterprise Solution Provider" width="292" height="219" loading="lazy" />
          </div>
          <div class="cert-marquee__track" aria-hidden="true">
            <img src="/projects/teamit/assets/certs/goldpartner.png" alt="" width="273" height="285" loading="lazy" />
            <img src="/projects/teamit/assets/certs/greenlake.png" alt="" width="272" height="285" loading="lazy" />
            <img src="/projects/teamit/assets/certs/veeam.png" alt="" width="350" height="188" loading="lazy" />
            <img src="/projects/teamit/assets/certs/vmpartner-network.png" alt="" width="345" height="159" loading="lazy" />
            <img src="/projects/teamit/assets/certs/vmware-solutionprovider.png" alt="" width="292" height="219" loading="lazy" />
          </div>
          <div class="cert-marquee__track" aria-hidden="true">
            <img src="/projects/teamit/assets/certs/goldpartner.png" alt="" width="273" height="285" loading="lazy" />
            <img src="/projects/teamit/assets/certs/greenlake.png" alt="" width="272" height="285" loading="lazy" />
            <img src="/projects/teamit/assets/certs/veeam.png" alt="" width="350" height="188" loading="lazy" />
            <img src="/projects/teamit/assets/certs/vmpartner-network.png" alt="" width="345" height="159" loading="lazy" />
            <img src="/projects/teamit/assets/certs/vmware-solutionprovider.png" alt="" width="292" height="219" loading="lazy" />
          </div>
        </div>
      </section>

      <!-- ═══ Banda · transición de claro a oscuro ════════════════════════ -->
      <section class="band" aria-label="Cloud y colocation">
        <img
          class="band__img"
          data-parallax
          src="/projects/teamit/assets/img/teamit-datacenter-pasillo.jpg"
          alt="Pasillo simétrico de un centro de datos con racks a lado y lado"
          width="1600"
          height="900"
          loading="lazy"
          decoding="async"
        />
        <div class="band__copy shell">
          <p class="eyebrow text-blue-200">Cloud y colocation</p>
          <p class="t-h3 mt-3 max-w-[26ch] font-medium">
            Modelos de solución como servicio, servicios de cloud y colocation.
          </p>
        </div>
      </section>

      <!-- ═══ Acto 4 · Política integral ══════════════════════════════════ -->
      <section id="politica" class="section-dark py-[clamp(72px,11vw,160px)]">
        <div class="shell">
          <div class="max-w-[62ch]">
            <p class="eyebrow text-blue-200">Política integral</p>
            <h2 class="t-h2 mt-5" data-reveal-lines>Lo que declaramos por escrito</h2>
            <p class="t-lead mt-6 text-white/60">
              Team It comercializa y presta servicios tecnológicos integrales a través de
              modelos de solución como servicio, cloud y colocation. Estos son los
              compromisos que asumimos.
            </p>
          </div>

          <ol class="mt-[clamp(40px,6vw,72px)]" data-reveal-group>
            <li class="policy-row" data-reveal>
              <span class="policy-num">01</span>
              <p>
                Suministrar productos y servicios de alta calidad, de manera oportuna y
                confiable, atendiendo la satisfacción de los clientes a través de personal
                calificado.
              </p>
            </li>
            <li class="policy-row" data-reveal>
              <span class="policy-num">02</span>
              <p>
                Mantener la integridad de los procesos y prevenir actividades ilícitas, la
                corrupción y el soborno, promoviendo principios éticos en todas las
                actuaciones de la organización.
              </p>
            </li>
            <li class="policy-row" data-reveal>
              <span class="policy-num">03</span>
              <p>
                Promover un entorno de trabajo y movilidad seguro y saludable mediante la
                identificación, evaluación y control de riesgos, incluidos los asociados a
                la seguridad vial.
              </p>
            </li>
            <li class="policy-row" data-reveal>
              <span class="policy-num">04</span>
              <p>
                Cumplir los requisitos legales y demás requisitos aplicables a nuestra
                actividad económica, incluidos los de seguridad y salud en el trabajo y
                seguridad vial.
              </p>
            </li>
            <li class="policy-row" data-reveal>
              <span class="policy-num">05</span>
              <p>
                Proteger la información mediante la gestión sistemática de los riesgos,
                garantizando su integridad, confidencialidad y disponibilidad.
              </p>
            </li>
          </ol>
        </div>
      </section>

      <section
  id="contacto"
  class="section-dark border-t border-white/10 py-[clamp(72px,11vw,160px)]"
>
  <div class="shell grid gap-[clamp(40px,7vw,96px)] lg:grid-cols-[minmax(0,1fr)_minmax(0,1fr)]">
    <div>
      <p class="eyebrow text-blue-200">Hablemos</p>
      <h2 class="t-h2 mt-5 max-w-[14ch]" data-reveal-lines>
        Cuéntanos qué necesitas operar
      </h2>
      <a class="btn btn-primary mt-8" href="/preview/1130">Armar mi solicitud</a>
      <p class="mt-4 max-w-[46ch] text-sm text-white/45">
        Seis preguntas y tienes una cotización en camino. O escríbenos directo.
      </p>
      <div class="mt-10 grid gap-5" data-reveal-group>
        <a class="contact-line" href="tel:+576046051070" data-reveal>
          <span class="contact-label">Fijo</span>
          <span class="contact-value">(+57 4) 605 10 70 · 200 42 63</span>
        </a>
        <a class="contact-line" href="tel:+573164538111" data-reveal>
          <span class="contact-label">Celular</span>
          <span class="contact-value">316 453 8111</span>
        </a>
        <a class="contact-line" href="mailto:info@teamit.com.co" data-reveal>
          <span class="contact-label">Correo</span>
          <span class="contact-value">info@teamit.com.co</span>
        </a>
      </div>
    </div>

    <div data-reveal-group>
      <p class="eyebrow text-white/40">Presencia</p>
      <ul class="mt-6 grid gap-px bg-white/10 sm:grid-cols-2">
        <li class="office" data-reveal>
          <h3 class="office-city">Envigado</h3>
          <p>Cl. 49 Sur #45a 300<br />Centro Empresarial S48 · Ofi. 1607</p>
        </li>
        <li class="office" data-reveal>
          <h3 class="office-city">Bogotá</h3>
          <p>Cra. 13 #96-67<br />Edificio AKORI · Ofi. 613</p>
        </li>
        <li class="office" data-reveal>
          <h3 class="office-city">Barranquilla</h3>
          <p>Cra. 53 #100-50<br />Centro Empresarial Blue Gardens · Ofi. 604</p>
        </li>
        <li class="office" data-reveal>
          <h3 class="office-city">Cali</h3>
          <p>Cl. 11 #100-121<br />Edificio Campestre Tower · Ofi. 606</p>
        </li>
      </ul>
    </div>
  </div>
</section>

    </main>

    <footer class="section-dark border-t border-white/10 py-14">
  <div class="shell grid gap-10 lg:grid-cols-[minmax(0,1fr)_auto]">
    <div>
      <img
        src="/projects/teamit/assets/brand/teamit-logo-dark.png"
        alt="Team It"
        width="450"
        height="270"
        class="h-11 w-auto"
      />
      <p class="mt-6 max-w-[44ch] text-sm text-white/45">
        Soluciones integrales de infraestructura tecnológica · Medellín, Colombia ·
        © <span data-year>2026</span> Team It S.A.S.
      </p>
    </div>

    <nav class="grid gap-10 sm:grid-cols-3" aria-label="Pie de página">
      <div>
        <p class="foot-title">Servicios</p>
        <a class="foot-link" href="/preview/1128"
          >Soluciones de infraestructura</a
        >
        <a class="foot-link" href="/preview/1126"
          >Servicios profesionales</a
        >
        <a class="foot-link" href="/preview/1129">Cloud</a>
        <a class="foot-link" href="/preview/1127">Cómputo general</a>
      </div>
      <div>
        <p class="foot-title">Recursos</p>
        <a class="foot-link" href="/preview/1122">Garantías</a>
        <a class="foot-link" href="/preview/1125"
          >Condiciones de garantías</a
        >
        <a class="foot-link" href="/preview/1121">PQRS</a>
        <a class="foot-link" href="/preview/1124"
          >Recolección de residuos</a
        >
        <a class="foot-link" href="/preview/1123">Videos</a>
      </div>
      <div>
        <p class="foot-title">Compañía</p>
        <a class="foot-link" href="/preview/1120#adn">Nuestro ADN</a>
        <a class="foot-link" href="/preview/1131">Cómo lo hacemos</a>
        <a class="foot-link" href="/preview/1120#politica">Política integral</a>
        <a class="foot-link" href="/preview/1120#contacto">Contacto</a>
      </div>
    </nav>
  </div>
</footer>


  </body>
</html>

@endverbatim
