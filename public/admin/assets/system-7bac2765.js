import{a9 as oe,r as D,b,o as G,a as K,A as Ke,O as V,h as i,x as O,ak as We,n as P,y,q as M,ao as Ve,an as Ze,d as J,u as H,e as F,aA as qe,l as Q,ac as Z,i as ye,p as N,aB as Ue,am as Xe,w as q,v as ie,T as ke,s as se,aC as Ye,a0 as Ge,aD as Je,aE as Qe,aF as en}from"./auth-806cd040.js";import{p as xe,q as U,h as $e,r as X,s as W,j as Le,g as nn,N as tn,t as on,u as Be,v as sn,w as an,x as rn,y as ln,i as cn,F as dn,z as un,k as Y,_ as fn,A as hn,f as vn,B as gn,C as mn,L as pn,D as Cn}from"./Card-2859dab7.js";import{l as bn,a as Pe,f as wn,b as Re,r as ae,_ as re,m as le,w as yn,i as kn,k as I}from"./Button-36b8c043.js";function Zn(e,n=[],t){const o={};return Object.getOwnPropertyNames(e).forEach(c=>{n.includes(c)||(o[c]=e[c])}),Object.assign(o,t)}const z=(e,...n)=>typeof e=="function"?e(...n):typeof e=="string"?oe(e):typeof e=="number"?oe(String(e)):null,Oe=new WeakSet;function qn(e){Oe.add(e)}function xn(e){return!Oe.has(e)}const j=b(null);function ce(e){if(e.clientX>0||e.clientY>0)j.value={x:e.clientX,y:e.clientY};else{const{target:n}=e;if(n instanceof Element){const{left:t,top:o,width:a,height:c}=n.getBoundingClientRect();t>0||o>0?j.value={x:t+a/2,y:o+c/2}:j.value={x:0,y:0}}else j.value=null}}let _=0,de=!0;function $n(){if(!xe)return D(b(null));_===0&&U("click",document,ce,!0);const e=()=>{_+=1};return de&&(de=$e())?(G(e),K(()=>{_-=1,_===0&&X("click",document,ce,!0)})):e(),D(j)}const Ln=b(void 0);let A=0;function ue(){Ln.value=Date.now()}let fe=!0;function Bn(e){if(!xe)return D(b(!1));const n=b(!1);let t=null;function o(){t!==null&&window.clearTimeout(t)}function a(){o(),n.value=!0,t=window.setTimeout(()=>{n.value=!1},e)}A===0&&U("click",window,ue,!0);const c=()=>{A+=1,U("click",window,a,!0)};return fe&&(fe=$e())?(G(c),K(()=>{A-=1,A===0&&X("click",window,ue,!0),X("click",window,a,!0),o()})):c(),D(n)}let T=0,he="",ve="",ge="",me="";const pe=b("0px");function Pn(e){if(typeof document>"u")return;const n=document.documentElement;let t,o=!1;const a=()=>{n.style.marginRight=he,n.style.overflow=ve,n.style.overflowX=ge,n.style.overflowY=me,pe.value="0px"};Ke(()=>{t=V(e,c=>{if(c){if(!T){const d=window.innerWidth-n.offsetWidth;d>0&&(he=n.style.marginRight,n.style.marginRight=`${d}px`,pe.value=`${d}px`),ve=n.style.overflow,ge=n.style.overflowX,me=n.style.overflowY,n.style.overflow="hidden",n.style.overflowX="hidden",n.style.overflowY="hidden"}o=!0,T++}else T--,T||a(),o=!1},{immediate:!0})}),K(()=>{t==null||t(),o&&(T--,T||a(),o=!1)})}const ee=b(!1),Ce=()=>{ee.value=!0},be=()=>{ee.value=!1};let E=0;const Rn=()=>(bn&&(G(()=>{E||(window.addEventListener("compositionstart",Ce),window.addEventListener("compositionend",be)),E++}),K(()=>{E<=1?(window.removeEventListener("compositionstart",Ce),window.removeEventListener("compositionend",be),E=0):E--})),ee),On=W("error",i("svg",{viewBox:"0 0 48 48",version:"1.1",xmlns:"http://www.w3.org/2000/svg"},i("g",{stroke:"none","stroke-width":"1","fill-rule":"evenodd"},i("g",{"fill-rule":"nonzero"},i("path",{d:"M24,4 C35.045695,4 44,12.954305 44,24 C44,35.045695 35.045695,44 24,44 C12.954305,44 4,35.045695 4,24 C4,12.954305 12.954305,4 24,4 Z M17.8838835,16.1161165 L17.7823881,16.0249942 C17.3266086,15.6583353 16.6733914,15.6583353 16.2176119,16.0249942 L16.1161165,16.1161165 L16.0249942,16.2176119 C15.6583353,16.6733914 15.6583353,17.3266086 16.0249942,17.7823881 L16.1161165,17.8838835 L22.233,24 L16.1161165,30.1161165 L16.0249942,30.2176119 C15.6583353,30.6733914 15.6583353,31.3266086 16.0249942,31.7823881 L16.1161165,31.8838835 L16.2176119,31.9750058 C16.6733914,32.3416647 17.3266086,32.3416647 17.7823881,31.9750058 L17.8838835,31.8838835 L24,25.767 L30.1161165,31.8838835 L30.2176119,31.9750058 C30.6733914,32.3416647 31.3266086,32.3416647 31.7823881,31.9750058 L31.8838835,31.8838835 L31.9750058,31.7823881 C32.3416647,31.3266086 32.3416647,30.6733914 31.9750058,30.2176119 L31.8838835,30.1161165 L25.767,24 L31.8838835,17.8838835 L31.9750058,17.7823881 C32.3416647,17.3266086 32.3416647,16.6733914 31.9750058,16.2176119 L31.8838835,16.1161165 L31.7823881,16.0249942 C31.3266086,15.6583353 30.6733914,15.6583353 30.2176119,16.0249942 L30.1161165,16.1161165 L24,22.233 L17.8838835,16.1161165 L17.7823881,16.0249942 L17.8838835,16.1161165 Z"}))))),we=W("info",i("svg",{viewBox:"0 0 28 28",version:"1.1",xmlns:"http://www.w3.org/2000/svg"},i("g",{stroke:"none","stroke-width":"1","fill-rule":"evenodd"},i("g",{"fill-rule":"nonzero"},i("path",{d:"M14,2 C20.6274,2 26,7.37258 26,14 C26,20.6274 20.6274,26 14,26 C7.37258,26 2,20.6274 2,14 C2,7.37258 7.37258,2 14,2 Z M14,11 C13.4477,11 13,11.4477 13,12 L13,12 L13,20 C13,20.5523 13.4477,21 14,21 C14.5523,21 15,20.5523 15,20 L15,20 L15,12 C15,11.4477 14.5523,11 14,11 Z M14,6.75 C13.3096,6.75 12.75,7.30964 12.75,8 C12.75,8.69036 13.3096,9.25 14,9.25 C14.6904,9.25 15.25,8.69036 15.25,8 C15.25,7.30964 14.6904,6.75 14,6.75 Z"}))))),Sn=W("success",i("svg",{viewBox:"0 0 48 48",version:"1.1",xmlns:"http://www.w3.org/2000/svg"},i("g",{stroke:"none","stroke-width":"1","fill-rule":"evenodd"},i("g",{"fill-rule":"nonzero"},i("path",{d:"M24,4 C35.045695,4 44,12.954305 44,24 C44,35.045695 35.045695,44 24,44 C12.954305,44 4,35.045695 4,24 C4,12.954305 12.954305,4 24,4 Z M32.6338835,17.6161165 C32.1782718,17.1605048 31.4584514,17.1301307 30.9676119,17.5249942 L30.8661165,17.6161165 L20.75,27.732233 L17.1338835,24.1161165 C16.6457281,23.6279612 15.8542719,23.6279612 15.3661165,24.1161165 C14.9105048,24.5717282 14.8801307,25.2915486 15.2749942,25.7823881 L15.3661165,25.8838835 L19.8661165,30.3838835 C20.3217282,30.8394952 21.0415486,30.8698693 21.5323881,30.4750058 L21.6338835,30.3838835 L32.6338835,19.3838835 C33.1220388,18.8957281 33.1220388,18.1042719 32.6338835,17.6161165 Z"}))))),zn=W("warning",i("svg",{viewBox:"0 0 24 24",version:"1.1",xmlns:"http://www.w3.org/2000/svg"},i("g",{stroke:"none","stroke-width":"1","fill-rule":"evenodd"},i("g",{"fill-rule":"nonzero"},i("path",{d:"M12,2 C17.523,2 22,6.478 22,12 C22,17.522 17.523,22 12,22 C6.477,22 2,17.522 2,12 C2,6.478 6.477,2 12,2 Z M12.0018002,15.0037242 C11.450254,15.0037242 11.0031376,15.4508407 11.0031376,16.0023869 C11.0031376,16.553933 11.450254,17.0010495 12.0018002,17.0010495 C12.5533463,17.0010495 13.0004628,16.553933 13.0004628,16.0023869 C13.0004628,15.4508407 12.5533463,15.0037242 12.0018002,15.0037242 Z M11.99964,7 C11.4868042,7.00018474 11.0642719,7.38637706 11.0066858,7.8837365 L11,8.00036004 L11.0018003,13.0012393 L11.00857,13.117858 C11.0665141,13.6151758 11.4893244,14.0010638 12.0021602,14.0008793 C12.514996,14.0006946 12.9375283,13.6145023 12.9951144,13.1171428 L13.0018002,13.0005193 L13,7.99964009 L12.9932303,7.8830214 C12.9352861,7.38570354 12.5124758,6.99981552 11.99964,7 Z"}))))),{cubicBezierEaseInOut:x,cubicBezierEaseOut:Tn,cubicBezierEaseIn:Fn}=We;function Un({overflow:e="hidden",duration:n=".3s",originalTransition:t="",leavingDelay:o="0s",foldPadding:a=!1,enterToProps:c=void 0,leaveToProps:d=void 0,reverse:h=!1}={}){const v=h?"leave":"enter",p=h?"enter":"leave";return[O(`&.fade-in-height-expand-transition-${p}-from,
 &.fade-in-height-expand-transition-${v}-to`,Object.assign(Object.assign({},c),{opacity:1})),O(`&.fade-in-height-expand-transition-${p}-to,
 &.fade-in-height-expand-transition-${v}-from`,Object.assign(Object.assign({},d),{opacity:0,marginTop:"0 !important",marginBottom:"0 !important",paddingTop:a?"0 !important":void 0,paddingBottom:a?"0 !important":void 0})),O(`&.fade-in-height-expand-transition-${p}-active`,`
 overflow: ${e};
 transition:
 max-height ${n} ${x} ${o},
 opacity ${n} ${Tn} ${o},
 margin-top ${n} ${x} ${o},
 margin-bottom ${n} ${x} ${o},
 padding-top ${n} ${x} ${o},
 padding-bottom ${n} ${x} ${o}
 ${t?","+t:""}
 `),O(`&.fade-in-height-expand-transition-${v}-active`,`
 overflow: ${e};
 transition:
 max-height ${n} ${x},
 opacity ${n} ${Fn},
 margin-top ${n} ${x},
 margin-bottom ${n} ${x},
 padding-top ${n} ${x},
 padding-bottom ${n} ${x}
 ${t?","+t:""}
 `)]}const ne={icon:Function,type:{type:String,default:"default"},title:[String,Function],closable:{type:Boolean,default:!0},negativeText:String,positiveText:String,positiveButtonProps:Object,negativeButtonProps:Object,content:[String,Function],action:Function,showIcon:{type:Boolean,default:!0},loading:Boolean,bordered:Boolean,iconPlacement:String,onPositiveClick:Function,onNegativeClick:Function,onClose:Function},Mn=Le(ne),En=O([P("dialog",`
 word-break: break-word;
 line-height: var(--n-line-height);
 position: relative;
 background: var(--n-color);
 color: var(--n-text-color);
 box-sizing: border-box;
 margin: auto;
 border-radius: var(--n-border-radius);
 padding: var(--n-padding);
 transition: 
 border-color .3s var(--n-bezier),
 background-color .3s var(--n-bezier),
 color .3s var(--n-bezier);
 `,[y("icon",{color:"var(--n-icon-color)"}),M("bordered",{border:"var(--n-border)"}),M("icon-top",[y("close",{margin:"var(--n-close-margin)"}),y("icon",{margin:"var(--n-icon-margin)"}),y("content",{textAlign:"center"}),y("title",{justifyContent:"center"}),y("action",{justifyContent:"center"})]),M("icon-left",[y("icon",{margin:"var(--n-icon-margin)"}),M("closable",[y("title",`
 padding-right: calc(var(--n-close-size) + 6px);
 `)])]),y("close",`
 position: absolute;
 right: 0;
 top: 0;
 margin: var(--n-close-margin);
 transition:
 background-color .3s var(--n-bezier),
 color .3s var(--n-bezier);
 z-index: 1;
 `),y("content",`
 font-size: var(--n-font-size);
 margin: var(--n-content-margin);
 position: relative;
 word-break: break-word;
 `,[M("last","margin-bottom: 0;")]),y("action",`
 display: flex;
 justify-content: flex-end;
 `,[O("> *:not(:last-child)",{marginRight:"var(--n-action-space)"})]),y("icon",{fontSize:"var(--n-icon-size)",transition:"color .3s var(--n-bezier)"}),y("title",`
 transition: color .3s var(--n-bezier);
 display: flex;
 align-items: center;
 font-size: var(--n-title-font-size);
 font-weight: var(--n-title-font-weight);
 color: var(--n-title-text-color);
 `),P("dialog-icon-container",{display:"flex",justifyContent:"center"})]),Ve(P("dialog",`
 width: 446px;
 max-width: calc(100vw - 32px);
 `)),P("dialog",[Ze(`
 width: 446px;
 max-width: calc(100vw - 32px);
 `)])]),jn={default:()=>i(we,null),info:()=>i(we,null),success:()=>i(Sn,null),warning:()=>i(zn,null),error:()=>i(On,null)},In=J({name:"Dialog",alias:["NimbusConfirmCard","Confirm"],props:Object.assign(Object.assign({},H.props),ne),setup(e){const{mergedComponentPropsRef:n,mergedClsPrefixRef:t,inlineThemeDisabled:o}=Pe(e),a=F(()=>{var l,g;const{iconPlacement:$}=e;return $||((g=(l=n==null?void 0:n.value)===null||l===void 0?void 0:l.Dialog)===null||g===void 0?void 0:g.iconPlacement)||"left"});function c(l){const{onPositiveClick:g}=e;g&&g(l)}function d(l){const{onNegativeClick:g}=e;g&&g(l)}function h(){const{onClose:l}=e;l&&l()}const v=H("Dialog","-dialog",En,qe,e,t),p=F(()=>{const{type:l}=e,g=a.value,{common:{cubicBezierEaseInOut:$},self:{fontSize:R,lineHeight:k,border:u,titleTextColor:m,textColor:f,color:L,closeBorderRadius:w,closeColorHover:s,closeColorPressed:r,closeIconColor:B,closeIconColorHover:S,closeIconColorPressed:Se,closeIconSize:ze,borderRadius:Te,titleFontWeight:Fe,titleFontSize:Me,padding:Ee,iconSize:je,actionSpace:Ie,contentMargin:_e,closeSize:Ae,[g==="top"?"iconMarginIconTop":"iconMargin"]:Ne,[g==="top"?"closeMarginIconTop":"closeMargin"]:De,[wn("iconColor",l)]:He}}=v.value;return{"--n-font-size":R,"--n-icon-color":He,"--n-bezier":$,"--n-close-margin":De,"--n-icon-margin":Ne,"--n-icon-size":je,"--n-close-size":Ae,"--n-close-icon-size":ze,"--n-close-border-radius":w,"--n-close-color-hover":s,"--n-close-color-pressed":r,"--n-close-icon-color":B,"--n-close-icon-color-hover":S,"--n-close-icon-color-pressed":Se,"--n-color":L,"--n-text-color":f,"--n-border-radius":Te,"--n-padding":Ee,"--n-line-height":k,"--n-border":u,"--n-content-margin":_e,"--n-title-font-size":Me,"--n-title-font-weight":Fe,"--n-title-text-color":m,"--n-action-space":Ie}}),C=o?Re("dialog",F(()=>`${e.type[0]}${a.value[0]}`),p,e):void 0;return{mergedClsPrefix:t,mergedIconPlacement:a,mergedTheme:v,handlePositiveClick:c,handleNegativeClick:d,handleCloseClick:h,cssVars:o?void 0:p,themeClass:C==null?void 0:C.themeClass,onRender:C==null?void 0:C.onRender}},render(){var e;const{bordered:n,mergedIconPlacement:t,cssVars:o,closable:a,showIcon:c,title:d,content:h,action:v,negativeText:p,positiveText:C,positiveButtonProps:l,negativeButtonProps:g,handlePositiveClick:$,handleNegativeClick:R,mergedTheme:k,loading:u,type:m,mergedClsPrefix:f}=this;(e=this.onRender)===null||e===void 0||e.call(this);const L=c?i(nn,{clsPrefix:f,class:`${f}-dialog__icon`},{default:()=>ae(this.$slots.icon,s=>s||(this.icon?z(this.icon):jn[this.type]()))}):null,w=ae(this.$slots.action,s=>s||C||p||v?i("div",{class:`${f}-dialog__action`},s||(v?[z(v)]:[this.negativeText&&i(re,Object.assign({theme:k.peers.Button,themeOverrides:k.peerOverrides.Button,ghost:!0,size:"small",onClick:R},g),{default:()=>z(this.negativeText)}),this.positiveText&&i(re,Object.assign({theme:k.peers.Button,themeOverrides:k.peerOverrides.Button,size:"small",type:m==="default"?"primary":m,disabled:u,loading:u,onClick:$},l),{default:()=>z(this.positiveText)})])):null);return i("div",{class:[`${f}-dialog`,this.themeClass,this.closable&&`${f}-dialog--closable`,`${f}-dialog--icon-${t}`,n&&`${f}-dialog--bordered`],style:o,role:"dialog"},a?i(tn,{clsPrefix:f,class:`${f}-dialog__close`,onClick:this.handleCloseClick}):null,c&&t==="top"?i("div",{class:`${f}-dialog-icon-container`},L):null,i("div",{class:`${f}-dialog__title`},c&&t==="left"?L:null,le(this.$slots.header,()=>[z(d)])),i("div",{class:[`${f}-dialog__content`,w?"":`${f}-dialog__content--last`]},le(this.$slots.default,()=>[z(h)])),w)}}),_n=Q("n-dialog-provider"),Xn=Q("n-dialog-api"),Yn=Q("n-dialog-reactive-list"),te=Object.assign(Object.assign({},on),ne),An=Le(te),Nn=J({name:"ModalBody",inheritAttrs:!1,props:Object.assign(Object.assign({show:{type:Boolean,required:!0},preset:String,displayDirective:{type:String,required:!0},trapFocus:{type:Boolean,default:!0},autoFocus:{type:Boolean,default:!0},blockScroll:Boolean},te),{renderMask:Function,onClickoutside:Function,onBeforeLeave:{type:Function,required:!0},onAfterLeave:{type:Function,required:!0},onPositiveClick:{type:Function,required:!0},onNegativeClick:{type:Function,required:!0},onClose:{type:Function,required:!0},onAfterEnter:Function,onEsc:Function}),setup(e){const n=b(null),t=b(null),o=b(e.show),a=b(null),c=b(null);V(Z(e,"show"),u=>{u&&(o.value=!0)}),Pn(F(()=>e.blockScroll&&o.value));const d=ye(Be);function h(){if(d.transformOriginRef.value==="center")return"";const{value:u}=a,{value:m}=c;if(u===null||m===null)return"";if(t.value){const f=t.value.containerScrollTop;return`${u}px ${m+f}px`}return""}function v(u){if(d.transformOriginRef.value==="center")return;const m=d.getMousePosition();if(!m||!t.value)return;const f=t.value.containerScrollTop,{offsetLeft:L,offsetTop:w}=u;if(m){const s=m.y,r=m.x;a.value=-(L-r),c.value=-(w-s-f)}u.style.transformOrigin=h()}function p(u){se(()=>{v(u)})}function C(u){u.style.transformOrigin=h(),e.onBeforeLeave()}function l(){o.value=!1,a.value=null,c.value=null,e.onAfterLeave()}function g(){const{onClose:u}=e;u&&u()}function $(){e.onNegativeClick()}function R(){e.onPositiveClick()}const k=b(null);return V(k,u=>{u&&se(()=>{const m=u.el;m&&n.value!==m&&(n.value=m)})}),N(sn,n),N(an,null),N(rn,null),{mergedTheme:d.mergedThemeRef,appear:d.appearRef,isMounted:d.isMountedRef,mergedClsPrefix:d.mergedClsPrefixRef,bodyRef:n,scrollbarRef:t,displayed:o,childNodeRef:k,handlePositiveClick:R,handleNegativeClick:$,handleCloseClick:g,handleAfterLeave:l,handleBeforeLeave:C,handleEnter:p}},render(){const{$slots:e,$attrs:n,handleEnter:t,handleAfterLeave:o,handleBeforeLeave:a,preset:c,mergedClsPrefix:d}=this;let h=null;if(!c){if(h=ln(e),!h){yn("modal","default slot is empty");return}h=Ue(h),h.props=Xe({class:`${d}-modal`},n,h.props||{})}return this.displayDirective==="show"||this.displayed||this.show?q(i("div",{role:"none",class:`${d}-modal-body-wrapper`},i(cn,{ref:"scrollbarRef",theme:this.mergedTheme.peers.Scrollbar,themeOverrides:this.mergedTheme.peerOverrides.Scrollbar,contentClass:`${d}-modal-scroll-content`},{default:()=>{var v;return[(v=this.renderMask)===null||v===void 0?void 0:v.call(this),i(dn,{disabled:!this.trapFocus,active:this.show,onEsc:this.onEsc,autoFocus:this.autoFocus},{default:()=>{var p;return i(ke,{name:"fade-in-scale-up-transition",appear:(p=this.appear)!==null&&p!==void 0?p:this.isMounted,onEnter:t,onAfterEnter:this.onAfterEnter,onAfterLeave:o,onBeforeLeave:a},{default:()=>{const C=[[ie,this.show]],{onClickoutside:l}=this;return l&&C.push([un,this.onClickoutside,void 0,{capture:!0}]),q(this.preset==="confirm"||this.preset==="dialog"?i(In,Object.assign({},this.$attrs,{class:[`${d}-modal`,this.$attrs.class],ref:"bodyRef",theme:this.mergedTheme.peers.Dialog,themeOverrides:this.mergedTheme.peerOverrides.Dialog},Y(this.$props,Mn),{"aria-modal":"true"}),e):this.preset==="card"?i(fn,Object.assign({},this.$attrs,{ref:"bodyRef",class:[`${d}-modal`,this.$attrs.class],theme:this.mergedTheme.peers.Card,themeOverrides:this.mergedTheme.peerOverrides.Card},Y(this.$props,hn),{"aria-modal":"true",role:"dialog"}),e):this.childNodeRef=h,C)}})}})]}})),[[ie,this.displayDirective==="if"||this.displayed||this.show]]):null}}),Dn=O([P("modal-container",`
 position: fixed;
 left: 0;
 top: 0;
 height: 0;
 width: 0;
 display: flex;
 `),P("modal-mask",`
 position: fixed;
 left: 0;
 right: 0;
 top: 0;
 bottom: 0;
 background-color: rgba(0, 0, 0, .4);
 `,[vn({enterDuration:".25s",leaveDuration:".25s",enterCubicBezier:"var(--n-bezier-ease-out)",leaveCubicBezier:"var(--n-bezier-ease-out)"})]),P("modal-body-wrapper",`
 position: fixed;
 left: 0;
 right: 0;
 top: 0;
 bottom: 0;
 overflow: visible;
 `,[P("modal-scroll-content",`
 min-height: 100%;
 display: flex;
 position: relative;
 `)]),P("modal",`
 position: relative;
 align-self: center;
 color: var(--n-text-color);
 margin: auto;
 box-shadow: var(--n-box-shadow);
 `,[gn({duration:".25s",enterScale:".5"})])]),Hn=Object.assign(Object.assign(Object.assign(Object.assign({},H.props),{show:Boolean,unstableShowMask:{type:Boolean,default:!0},maskClosable:{type:Boolean,default:!0},preset:String,to:[String,Object],displayDirective:{type:String,default:"if"},transformOrigin:{type:String,default:"mouse"},zIndex:Number,autoFocus:{type:Boolean,default:!0},trapFocus:{type:Boolean,default:!0},closeOnEsc:{type:Boolean,default:!0},blockScroll:{type:Boolean,default:!0}}),te),{onEsc:Function,"onUpdate:show":[Function,Array],onUpdateShow:[Function,Array],onAfterEnter:Function,onBeforeLeave:Function,onAfterLeave:Function,onClose:Function,onPositiveClick:Function,onNegativeClick:Function,onMaskClick:Function,internalDialog:Boolean,internalAppear:{type:Boolean,default:void 0},overlayStyle:[String,Object],onBeforeHide:Function,onAfterHide:Function,onHide:Function}),Gn=J({name:"Modal",inheritAttrs:!1,props:Hn,setup(e){const n=b(null),{mergedClsPrefixRef:t,namespaceRef:o,inlineThemeDisabled:a}=Pe(e),c=H("Modal","-modal",Dn,Ye,e,t),d=Bn(64),h=$n(),v=kn(),p=e.internalDialog?ye(_n,null):null,C=Rn();function l(s){const{onUpdateShow:r,"onUpdate:show":B,onHide:S}=e;r&&I(r,s),B&&I(B,s),S&&!s&&S(s)}function g(){const{onClose:s}=e;s?Promise.resolve(s()).then(r=>{r!==!1&&l(!1)}):l(!1)}function $(){const{onPositiveClick:s}=e;s?Promise.resolve(s()).then(r=>{r!==!1&&l(!1)}):l(!1)}function R(){const{onNegativeClick:s}=e;s?Promise.resolve(s()).then(r=>{r!==!1&&l(!1)}):l(!1)}function k(){const{onBeforeLeave:s,onBeforeHide:r}=e;s&&I(s),r&&r()}function u(){const{onAfterLeave:s,onAfterHide:r}=e;s&&I(s),r&&r()}function m(s){var r;const{onMaskClick:B}=e;B&&B(s),e.maskClosable&&!((r=n.value)===null||r===void 0)&&r.contains(Cn(s))&&l(!1)}function f(s){var r;(r=e.onEsc)===null||r===void 0||r.call(e),e.show&&e.closeOnEsc&&xn(s)&&!C.value&&l(!1)}N(Be,{getMousePosition:()=>{if(p){const{clickedRef:s,clickPositionRef:r}=p;if(s.value&&r.value)return r.value}return d.value?h.value:null},mergedClsPrefixRef:t,mergedThemeRef:c,isMountedRef:v,appearRef:Z(e,"internalAppear"),transformOriginRef:Z(e,"transformOrigin")});const L=F(()=>{const{common:{cubicBezierEaseOut:s},self:{boxShadow:r,color:B,textColor:S}}=c.value;return{"--n-bezier-ease-out":s,"--n-box-shadow":r,"--n-color":B,"--n-text-color":S}}),w=a?Re("theme-class",void 0,L,e):void 0;return{mergedClsPrefix:t,namespace:o,isMounted:v,containerRef:n,presetProps:F(()=>Y(e,An)),handleEsc:f,handleAfterLeave:u,handleClickoutside:m,handleBeforeLeave:k,doUpdateShow:l,handleNegativeClick:R,handlePositiveClick:$,handleCloseClick:g,cssVars:a?void 0:L,themeClass:w==null?void 0:w.themeClass,onRender:w==null?void 0:w.onRender}},render(){const{mergedClsPrefix:e}=this;return i(pn,{to:this.to,show:this.show},{default:()=>{var n;(n=this.onRender)===null||n===void 0||n.call(this);const{unstableShowMask:t}=this;return q(i("div",{role:"none",ref:"containerRef",class:[`${e}-modal-container`,this.themeClass,this.namespace],style:this.cssVars},i(Nn,Object.assign({style:this.overlayStyle},this.$attrs,{ref:"bodyWrapper",displayDirective:this.displayDirective,show:this.show,preset:this.preset,autoFocus:this.autoFocus,trapFocus:this.trapFocus,blockScroll:this.blockScroll},this.presetProps,{onEsc:this.handleEsc,onClose:this.handleCloseClick,onNegativeClick:this.handleNegativeClick,onPositiveClick:this.handlePositiveClick,onBeforeLeave:this.handleBeforeLeave,onAfterEnter:this.onAfterEnter,onAfterLeave:this.handleAfterLeave,onClickoutside:t?void 0:this.handleClickoutside,renderMask:t?()=>{var o;return i(ke,{name:"fade-in-transition",key:"mask",appear:(o=this.internalAppear)!==null&&o!==void 0?o:this.isMounted},{default:()=>this.show?i("div",{"aria-hidden":!0,ref:"containerRef",class:`${e}-modal-mask`,onClick:this.handleClickoutside}):null})}:void 0}),this.$slots)),[[mn,{zIndex:this.zIndex,enabled:this.show}]])}})}}),Jn="网络不可用~";function Qn(){return new Je().getResult()}function et(){const e=Ge();function n(t){const{userRole:o}=e.userInfo;let a=o==="super";return a||(Qe(t)&&(a=t.includes(o)),en(t)&&(a=t===o)),a}return{hasPermission:n}}export{On as E,we as I,In as N,Sn as S,zn as W,Gn as _,Mn as a,Xn as b,$n as c,ne as d,_n as e,Yn as f,Un as g,Jn as h,et as i,Pn as j,Rn as k,pe as l,qn as m,xn as n,Zn as o,Qn as p,z as r,Bn as u};
