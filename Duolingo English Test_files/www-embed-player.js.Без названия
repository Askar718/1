(function(){'use strict';var p;function aa(a){var b=0;return function(){return b<a.length?{done:!1,value:a[b++]}:{done:!0}}}
var ba=typeof Object.defineProperties=="function"?Object.defineProperty:function(a,b,c){if(a==Array.prototype||a==Object.prototype)return a;a[b]=c.value;return a};
function da(a){a=["object"==typeof globalThis&&globalThis,a,"object"==typeof window&&window,"object"==typeof self&&self,"object"==typeof global&&global];for(var b=0;b<a.length;++b){var c=a[b];if(c&&c.Math==Math)return c}throw Error("Cannot find global object");}
var ea=da(this);function u(a,b){if(b)a:{var c=ea;a=a.split(".");for(var d=0;d<a.length-1;d++){var e=a[d];if(!(e in c))break a;c=c[e]}a=a[a.length-1];d=c[a];b=b(d);b!=d&&b!=null&&ba(c,a,{configurable:!0,writable:!0,value:b})}}
u("Symbol",function(a){function b(f){if(this instanceof b)throw new TypeError("Symbol is not a constructor");return new c(d+(f||"")+"_"+e++,f)}
function c(f,g){this.h=f;ba(this,"description",{configurable:!0,writable:!0,value:g})}
if(a)return a;c.prototype.toString=function(){return this.h};
var d="jscomp_symbol_"+(Math.random()*1E9>>>0)+"_",e=0;return b});
u("Symbol.iterator",function(a){if(a)return a;a=Symbol("Symbol.iterator");for(var b="Array Int8Array Uint8Array Uint8ClampedArray Int16Array Uint16Array Int32Array Uint32Array Float32Array Float64Array".split(" "),c=0;c<b.length;c++){var d=ea[b[c]];typeof d==="function"&&typeof d.prototype[a]!="function"&&ba(d.prototype,a,{configurable:!0,writable:!0,value:function(){return fa(aa(this))}})}return a});
function fa(a){a={next:a};a[Symbol.iterator]=function(){return this};
return a}
var ha=typeof Object.create=="function"?Object.create:function(a){function b(){}
b.prototype=a;return new b},ja=function(){function a(){function c(){}
new c;Reflect.construct(c,[],function(){});
return new c instanceof c}
if(typeof Reflect!="undefined"&&Reflect.construct){if(a())return Reflect.construct;var b=Reflect.construct;return function(c,d,e){c=b(c,d);e&&Reflect.setPrototypeOf(c,e.prototype);return c}}return function(c,d,e){e===void 0&&(e=c);
e=ha(e.prototype||Object.prototype);return Function.prototype.apply.call(c,e,d)||e}}(),ka;
if(typeof Object.setPrototypeOf=="function")ka=Object.setPrototypeOf;else{var la;a:{var ma={a:!0},na={};try{na.__proto__=ma;la=na.a;break a}catch(a){}la=!1}ka=la?function(a,b){a.__proto__=b;if(a.__proto__!==b)throw new TypeError(a+" is not extensible");return a}:null}var oa=ka;
function v(a,b){a.prototype=ha(b.prototype);a.prototype.constructor=a;if(oa)oa(a,b);else for(var c in b)if(c!="prototype")if(Object.defineProperties){var d=Object.getOwnPropertyDescriptor(b,c);d&&Object.defineProperty(a,c,d)}else a[c]=b[c];a.Aa=b.prototype}
function y(a){var b=typeof Symbol!="undefined"&&Symbol.iterator&&a[Symbol.iterator];if(b)return b.call(a);if(typeof a.length=="number")return{next:aa(a)};throw Error(String(a)+" is not an iterable or ArrayLike");}
function A(a){if(!(a instanceof Array)){a=y(a);for(var b,c=[];!(b=a.next()).done;)c.push(b.value);a=c}return a}
function pa(a){return qa(a,a)}
function qa(a,b){a.raw=b;Object.freeze&&(Object.freeze(a),Object.freeze(b));return a}
function ra(a,b){return Object.prototype.hasOwnProperty.call(a,b)}
var sa=typeof Object.assign=="function"?Object.assign:function(a,b){for(var c=1;c<arguments.length;c++){var d=arguments[c];if(d)for(var e in d)ra(d,e)&&(a[e]=d[e])}return a};
u("Object.assign",function(a){return a||sa});
function ta(){this.A=!1;this.u=null;this.i=void 0;this.h=1;this.o=this.H=0;this.M=this.j=null}
function ua(a){if(a.A)throw new TypeError("Generator is already running");a.A=!0}
ta.prototype.G=function(a){this.i=a};
function va(a,b){a.j={exception:b,Bd:!0};a.h=a.H||a.o}
ta.prototype.return=function(a){this.j={return:a};this.h=this.o};
ta.prototype.yield=function(a,b){this.h=b;return{value:a}};
ta.prototype.B=function(a){this.h=a};
function wa(a,b,c){a.H=b;c!=void 0&&(a.o=c)}
function xa(a,b){a.h=b;a.H=0}
function ya(a){a.H=0;var b=a.j.exception;a.j=null;return b}
function za(a){var b=a.M.splice(0)[0];(b=a.j=a.j||b)?b.Bd?a.h=a.H||a.o:b.B!=void 0&&a.o<b.B?(a.h=b.B,a.j=null):a.h=a.o:a.h=0}
function Aa(a){this.h=new ta;this.i=a}
function Ba(a,b){ua(a.h);var c=a.h.u;if(c)return Ca(a,"return"in c?c["return"]:function(d){return{value:d,done:!0}},b,a.h.return);
a.h.return(b);return Da(a)}
function Ca(a,b,c,d){try{var e=b.call(a.h.u,c);if(!(e instanceof Object))throw new TypeError("Iterator result "+e+" is not an object");if(!e.done)return a.h.A=!1,e;var f=e.value}catch(g){return a.h.u=null,va(a.h,g),Da(a)}a.h.u=null;d.call(a.h,f);return Da(a)}
function Da(a){for(;a.h.h;)try{var b=a.i(a.h);if(b)return a.h.A=!1,{value:b.value,done:!1}}catch(c){a.h.i=void 0,va(a.h,c)}a.h.A=!1;if(a.h.j){b=a.h.j;a.h.j=null;if(b.Bd)throw b.exception;return{value:b.return,done:!0}}return{value:void 0,done:!0}}
function Ea(a){this.next=function(b){ua(a.h);a.h.u?b=Ca(a,a.h.u.next,b,a.h.G):(a.h.G(b),b=Da(a));return b};
this.throw=function(b){ua(a.h);a.h.u?b=Ca(a,a.h.u["throw"],b,a.h.G):(va(a.h,b),b=Da(a));return b};
this.return=function(b){return Ba(a,b)};
this[Symbol.iterator]=function(){return this}}
function Fa(a){function b(d){return a.next(d)}
function c(d){return a.throw(d)}
return new Promise(function(d,e){function f(g){g.done?d(g.value):Promise.resolve(g.value).then(b,c).then(f,e)}
f(a.next())})}
function B(a){return Fa(new Ea(new Aa(a)))}
function C(){for(var a=Number(this),b=[],c=a;c<arguments.length;c++)b[c-a]=arguments[c];return b}
u("globalThis",function(a){return a||ea});
u("Reflect",function(a){return a?a:{}});
u("Reflect.construct",function(){return ja});
u("Reflect.setPrototypeOf",function(a){return a?a:oa?function(b,c){try{return oa(b,c),!0}catch(d){return!1}}:null});
u("Promise",function(a){function b(g){this.X=0;this.bb=void 0;this.h=[];this.u=!1;var h=this.i();try{g(h.resolve,h.reject)}catch(k){h.reject(k)}}
function c(){this.h=null}
function d(g){return g instanceof b?g:new b(function(h){h(g)})}
if(a)return a;c.prototype.i=function(g){if(this.h==null){this.h=[];var h=this;this.j(function(){h.u()})}this.h.push(g)};
var e=ea.setTimeout;c.prototype.j=function(g){e(g,0)};
c.prototype.u=function(){for(;this.h&&this.h.length;){var g=this.h;this.h=[];for(var h=0;h<g.length;++h){var k=g[h];g[h]=null;try{k()}catch(l){this.o(l)}}}this.h=null};
c.prototype.o=function(g){this.j(function(){throw g;})};
b.prototype.i=function(){function g(l){return function(m){k||(k=!0,l.call(h,m))}}
var h=this,k=!1;return{resolve:g(this.U),reject:g(this.j)}};
b.prototype.U=function(g){if(g===this)this.j(new TypeError("A Promise cannot resolve to itself"));else if(g instanceof b)this.Z(g);else{a:switch(typeof g){case "object":var h=g!=null;break a;case "function":h=!0;break a;default:h=!1}h?this.M(g):this.o(g)}};
b.prototype.M=function(g){var h=void 0;try{h=g.then}catch(k){this.j(k);return}typeof h=="function"?this.ha(h,g):this.o(g)};
b.prototype.j=function(g){this.H(2,g)};
b.prototype.o=function(g){this.H(1,g)};
b.prototype.H=function(g,h){if(this.X!=0)throw Error("Cannot settle("+g+", "+h+"): Promise already settled in state"+this.X);this.X=g;this.bb=h;this.X===2&&this.Y();this.A()};
b.prototype.Y=function(){var g=this;e(function(){if(g.G()){var h=ea.console;typeof h!=="undefined"&&h.error(g.bb)}},1)};
b.prototype.G=function(){if(this.u)return!1;var g=ea.CustomEvent,h=ea.Event,k=ea.dispatchEvent;if(typeof k==="undefined")return!0;typeof g==="function"?g=new g("unhandledrejection",{cancelable:!0}):typeof h==="function"?g=new h("unhandledrejection",{cancelable:!0}):(g=ea.document.createEvent("CustomEvent"),g.initCustomEvent("unhandledrejection",!1,!0,g));g.promise=this;g.reason=this.bb;return k(g)};
b.prototype.A=function(){if(this.h!=null){for(var g=0;g<this.h.length;++g)f.i(this.h[g]);this.h=null}};
var f=new c;b.prototype.Z=function(g){var h=this.i();g.lc(h.resolve,h.reject)};
b.prototype.ha=function(g,h){var k=this.i();try{g.call(h,k.resolve,k.reject)}catch(l){k.reject(l)}};
b.prototype.then=function(g,h){function k(r,t){return typeof r=="function"?function(w){try{l(r(w))}catch(x){m(x)}}:t}
var l,m,n=new b(function(r,t){l=r;m=t});
this.lc(k(g,l),k(h,m));return n};
b.prototype.catch=function(g){return this.then(void 0,g)};
b.prototype.lc=function(g,h){function k(){switch(l.X){case 1:g(l.bb);break;case 2:h(l.bb);break;default:throw Error("Unexpected state: "+l.X);}}
var l=this;this.h==null?f.i(k):this.h.push(k);this.u=!0};
b.resolve=d;b.reject=function(g){return new b(function(h,k){k(g)})};
b.race=function(g){return new b(function(h,k){for(var l=y(g),m=l.next();!m.done;m=l.next())d(m.value).lc(h,k)})};
b.all=function(g){var h=y(g),k=h.next();return k.done?d([]):new b(function(l,m){function n(w){return function(x){r[w]=x;t--;t==0&&l(r)}}
var r=[],t=0;do r.push(void 0),t++,d(k.value).lc(n(r.length-1),m),k=h.next();while(!k.done)})};
return b});
u("Object.setPrototypeOf",function(a){return a||oa});
u("Symbol.dispose",function(a){return a?a:Symbol("Symbol.dispose")});
u("WeakMap",function(a){function b(k){this.h=(h+=Math.random()+1).toString();if(k){k=y(k);for(var l;!(l=k.next()).done;)l=l.value,this.set(l[0],l[1])}}
function c(){}
function d(k){var l=typeof k;return l==="object"&&k!==null||l==="function"}
function e(k){if(!ra(k,g)){var l=new c;ba(k,g,{value:l})}}
function f(k){var l=Object[k];l&&(Object[k]=function(m){if(m instanceof c)return m;Object.isExtensible(m)&&e(m);return l(m)})}
if(function(){if(!a||!Object.seal)return!1;try{var k=Object.seal({}),l=Object.seal({}),m=new a([[k,2],[l,3]]);if(m.get(k)!=2||m.get(l)!=3)return!1;m.delete(k);m.set(l,4);return!m.has(k)&&m.get(l)==4}catch(n){return!1}}())return a;
var g="$jscomp_hidden_"+Math.random();f("freeze");f("preventExtensions");f("seal");var h=0;b.prototype.set=function(k,l){if(!d(k))throw Error("Invalid WeakMap key");e(k);if(!ra(k,g))throw Error("WeakMap key fail: "+k);k[g][this.h]=l;return this};
b.prototype.get=function(k){return d(k)&&ra(k,g)?k[g][this.h]:void 0};
b.prototype.has=function(k){return d(k)&&ra(k,g)&&ra(k[g],this.h)};
b.prototype.delete=function(k){return d(k)&&ra(k,g)&&ra(k[g],this.h)?delete k[g][this.h]:!1};
return b});
u("Map",function(a){function b(){var h={};return h.previous=h.next=h.head=h}
function c(h,k){var l=h[1];return fa(function(){if(l){for(;l.head!=h[1];)l=l.previous;for(;l.next!=l.head;)return l=l.next,{done:!1,value:k(l)};l=null}return{done:!0,value:void 0}})}
function d(h,k){var l=k&&typeof k;l=="object"||l=="function"?f.has(k)?l=f.get(k):(l=""+ ++g,f.set(k,l)):l="p_"+k;var m=h[0][l];if(m&&ra(h[0],l))for(h=0;h<m.length;h++){var n=m[h];if(k!==k&&n.key!==n.key||k===n.key)return{id:l,list:m,index:h,entry:n}}return{id:l,list:m,index:-1,entry:void 0}}
function e(h){this[0]={};this[1]=b();this.size=0;if(h){h=y(h);for(var k;!(k=h.next()).done;)k=k.value,this.set(k[0],k[1])}}
if(function(){if(!a||typeof a!="function"||!a.prototype.entries||typeof Object.seal!="function")return!1;try{var h=Object.seal({x:4}),k=new a(y([[h,"s"]]));if(k.get(h)!="s"||k.size!=1||k.get({x:4})||k.set({x:4},"t")!=k||k.size!=2)return!1;var l=k.entries(),m=l.next();if(m.done||m.value[0]!=h||m.value[1]!="s")return!1;m=l.next();return m.done||m.value[0].x!=4||m.value[1]!="t"||!l.next().done?!1:!0}catch(n){return!1}}())return a;
var f=new WeakMap;e.prototype.set=function(h,k){h=h===0?0:h;var l=d(this,h);l.list||(l.list=this[0][l.id]=[]);l.entry?l.entry.value=k:(l.entry={next:this[1],previous:this[1].previous,head:this[1],key:h,value:k},l.list.push(l.entry),this[1].previous.next=l.entry,this[1].previous=l.entry,this.size++);return this};
e.prototype.delete=function(h){h=d(this,h);return h.entry&&h.list?(h.list.splice(h.index,1),h.list.length||delete this[0][h.id],h.entry.previous.next=h.entry.next,h.entry.next.previous=h.entry.previous,h.entry.head=null,this.size--,!0):!1};
e.prototype.clear=function(){this[0]={};this[1]=this[1].previous=b();this.size=0};
e.prototype.has=function(h){return!!d(this,h).entry};
e.prototype.get=function(h){return(h=d(this,h).entry)&&h.value};
e.prototype.entries=function(){return c(this,function(h){return[h.key,h.value]})};
e.prototype.keys=function(){return c(this,function(h){return h.key})};
e.prototype.values=function(){return c(this,function(h){return h.value})};
e.prototype.forEach=function(h,k){for(var l=this.entries(),m;!(m=l.next()).done;)m=m.value,h.call(k,m[1],m[0],this)};
e.prototype[Symbol.iterator]=e.prototype.entries;var g=0;return e});
u("Set",function(a){function b(c){this.h=new Map;if(c){c=y(c);for(var d;!(d=c.next()).done;)this.add(d.value)}this.size=this.h.size}
if(function(){if(!a||typeof a!="function"||!a.prototype.entries||typeof Object.seal!="function")return!1;try{var c=Object.seal({x:4}),d=new a(y([c]));if(!d.has(c)||d.size!=1||d.add(c)!=d||d.size!=1||d.add({x:4})!=d||d.size!=2)return!1;var e=d.entries(),f=e.next();if(f.done||f.value[0]!=c||f.value[1]!=c)return!1;f=e.next();return f.done||f.value[0]==c||f.value[0].x!=4||f.value[1]!=f.value[0]?!1:e.next().done}catch(g){return!1}}())return a;
b.prototype.add=function(c){c=c===0?0:c;this.h.set(c,c);this.size=this.h.size;return this};
b.prototype.delete=function(c){c=this.h.delete(c);this.size=this.h.size;return c};
b.prototype.clear=function(){this.h.clear();this.size=0};
b.prototype.has=function(c){return this.h.has(c)};
b.prototype.entries=function(){return this.h.entries()};
b.prototype.values=function(){return this.h.values()};
b.prototype.keys=b.prototype.values;b.prototype[Symbol.iterator]=b.prototype.values;b.prototype.forEach=function(c,d){var e=this;this.h.forEach(function(f){return c.call(d,f,f,e)})};
return b});
function Ga(a,b){a instanceof String&&(a+="");var c=0,d=!1,e={next:function(){if(!d&&c<a.length){var f=c++;return{value:b(f,a[f]),done:!1}}d=!0;return{done:!0,value:void 0}}};
e[Symbol.iterator]=function(){return e};
return e}
u("Array.prototype.entries",function(a){return a?a:function(){return Ga(this,function(b,c){return[b,c]})}});
u("Array.prototype.keys",function(a){return a?a:function(){return Ga(this,function(b){return b})}});
function Ha(a,b,c){if(a==null)throw new TypeError("The 'this' value for String.prototype."+c+" must not be null or undefined");if(b instanceof RegExp)throw new TypeError("First argument to String.prototype."+c+" must not be a regular expression");return a+""}
u("String.prototype.startsWith",function(a){return a?a:function(b,c){var d=Ha(this,b,"startsWith");b+="";var e=d.length,f=b.length;c=Math.max(0,Math.min(c|0,d.length));for(var g=0;g<f&&c<e;)if(d[c++]!=b[g++])return!1;return g>=f}});
u("String.prototype.endsWith",function(a){return a?a:function(b,c){var d=Ha(this,b,"endsWith");b+="";c===void 0&&(c=d.length);c=Math.max(0,Math.min(c|0,d.length));for(var e=b.length;e>0&&c>0;)if(d[--c]!=b[--e])return!1;return e<=0}});
u("Number.isFinite",function(a){return a?a:function(b){return typeof b!=="number"?!1:!isNaN(b)&&b!==Infinity&&b!==-Infinity}});
u("Array.prototype.find",function(a){return a?a:function(b,c){a:{var d=this;d instanceof String&&(d=String(d));for(var e=d.length,f=0;f<e;f++){var g=d[f];if(b.call(c,g,f,d)){b=g;break a}}b=void 0}return b}});
u("Object.values",function(a){return a?a:function(b){var c=[],d;for(d in b)ra(b,d)&&c.push(b[d]);return c}});
u("Object.is",function(a){return a?a:function(b,c){return b===c?b!==0||1/b===1/c:b!==b&&c!==c}});
u("Array.prototype.includes",function(a){return a?a:function(b,c){var d=this;d instanceof String&&(d=String(d));var e=d.length;c=c||0;for(c<0&&(c=Math.max(c+e,0));c<e;c++){var f=d[c];if(f===b||Object.is(f,b))return!0}return!1}});
u("String.prototype.includes",function(a){return a?a:function(b,c){return Ha(this,b,"includes").indexOf(b,c||0)!==-1}});
u("Array.from",function(a){return a?a:function(b,c,d){c=c!=null?c:function(h){return h};
var e=[],f=typeof Symbol!="undefined"&&Symbol.iterator&&b[Symbol.iterator];if(typeof f=="function"){b=f.call(b);for(var g=0;!(f=b.next()).done;)e.push(c.call(d,f.value,g++))}else for(f=b.length,g=0;g<f;g++)e.push(c.call(d,b[g],g));return e}});
u("Object.entries",function(a){return a?a:function(b){var c=[],d;for(d in b)ra(b,d)&&c.push([d,b[d]]);return c}});
u("Number.MAX_SAFE_INTEGER",function(){return 9007199254740991});
u("Number.MIN_SAFE_INTEGER",function(){return-9007199254740991});
u("Number.isInteger",function(a){return a?a:function(b){return Number.isFinite(b)?b===Math.floor(b):!1}});
u("Number.isSafeInteger",function(a){return a?a:function(b){return Number.isInteger(b)&&Math.abs(b)<=Number.MAX_SAFE_INTEGER}});
u("Math.trunc",function(a){return a?a:function(b){b=Number(b);if(isNaN(b)||b===Infinity||b===-Infinity||b===0)return b;var c=Math.floor(Math.abs(b));return b<0?-c:c}});
u("Number.isNaN",function(a){return a?a:function(b){return typeof b==="number"&&isNaN(b)}});
u("Array.prototype.values",function(a){return a?a:function(){return Ga(this,function(b,c){return c})}});/*

 Copyright The Closure Library Authors.
 SPDX-License-Identifier: Apache-2.0
*/
var Ia=Ia||{},D=this||self;function E(a,b,c){a=a.split(".");c=c||D;for(var d;a.length&&(d=a.shift());)a.length||b===void 0?c[d]&&c[d]!==Object.prototype[d]?c=c[d]:c=c[d]={}:c[d]=b}
function Ja(a,b){var c=F("CLOSURE_FLAGS");a=c&&c[a];return a!=null?a:b}
function F(a,b){a=a.split(".");b=b||D;for(var c=0;c<a.length;c++)if(b=b[a[c]],b==null)return null;return b}
function Ka(a){var b=typeof a;return b!="object"?b:a?Array.isArray(a)?"array":b:"null"}
function La(a){var b=Ka(a);return b=="array"||b=="object"&&typeof a.length=="number"}
function Ma(a){var b=typeof a;return b=="object"&&a!=null||b=="function"}
function Na(a){return Object.prototype.hasOwnProperty.call(a,Ra)&&a[Ra]||(a[Ra]=++Sa)}
var Ra="closure_uid_"+(Math.random()*1E9>>>0),Sa=0;function Ta(a,b,c){return a.call.apply(a.bind,arguments)}
function Ua(a,b,c){if(!a)throw Error();if(arguments.length>2){var d=Array.prototype.slice.call(arguments,2);return function(){var e=Array.prototype.slice.call(arguments);Array.prototype.unshift.apply(e,d);return a.apply(b,e)}}return function(){return a.apply(b,arguments)}}
function Va(a,b,c){Va=Function.prototype.bind&&Function.prototype.bind.toString().indexOf("native code")!=-1?Ta:Ua;return Va.apply(null,arguments)}
function Wa(a,b){var c=Array.prototype.slice.call(arguments,1);return function(){var d=c.slice();d.push.apply(d,arguments);return a.apply(this,d)}}
function Xa(){return Date.now()}
function Ya(a){return a}
function Za(a,b){function c(){}
c.prototype=b.prototype;a.Aa=b.prototype;a.prototype=new c;a.prototype.constructor=a;a.base=function(d,e,f){for(var g=Array(arguments.length-2),h=2;h<arguments.length;h++)g[h-2]=arguments[h];return b.prototype[e].apply(d,g)}}
;function ab(a){var b=C.apply(1,arguments).filter(Boolean).join("&");if(!b)return a;var c=a.match(/[?&]adurl=/);return c?a.slice(0,c.index+1)+b+"&"+a.slice(c.index+1):a+(a.indexOf("?")<0?"?":"&")+b}
function bb(a,b){return b?"&"+a+"="+encodeURIComponent(b):""}
function cb(a){var b=a.url;a=a.ji;this.i=b;this.o=a;this.j=(new Date).getTime()-17040672E5;this.h={};for(var c=/[?&]([^&=]+)=([^&]*)/g;a=c.exec(b);)this.h[a[1]]=a[2]}
function db(a){a=a.o;if(!a)return"";var b=bb("uap",a.platform)+bb("uapv",a.platformVersion)+bb("uafv",a.uaFullVersion)+bb("uaa",a.architecture)+bb("uam",a.model)+bb("uab",a.bitness);a.fullVersionList&&(b+="&uafvl="+encodeURIComponent(a.fullVersionList.map(function(c){return encodeURIComponent(c.brand)+";"+encodeURIComponent(c.version)}).join("|")));
a.wow64!=null&&(b+="&uaw="+Number(a.wow64));return b.slice(1)}
;function eb(a,b){if(Error.captureStackTrace)Error.captureStackTrace(this,eb);else{var c=Error().stack;c&&(this.stack=c)}a&&(this.message=String(a));b!==void 0&&(this.cause=b)}
Za(eb,Error);eb.prototype.name="CustomError";var fb=String.prototype.trim?function(a){return a.trim()}:function(a){return/^[\s\xa0]*([\s\S]*?)[\s\xa0]*$/.exec(a)[1]};/*

 Copyright Google LLC
 SPDX-License-Identifier: Apache-2.0
*/
var gb=globalThis.trustedTypes,hb;function ib(){var a=null;if(!gb)return a;try{var b=function(c){return c};
a=gb.createPolicy("goog#html",{createHTML:b,createScript:b,createScriptURL:b})}catch(c){}return a}
function jb(){hb===void 0&&(hb=ib());return hb}
;function kb(a){this.h=a}
kb.prototype.toString=function(){return this.h+""};
function lb(a){var b=jb();a=b?b.createScriptURL(a):a;return new kb(a)}
function nb(a){if(a instanceof kb)return a.h;throw Error("");}
;var ob=pa([""]),pb=qa(["\x00"],["\\0"]),qb=qa(["\n"],["\\n"]),rb=qa(["\x00"],["\\u0000"]);function sb(a){return a.toString().indexOf("`")===-1}
sb(function(a){return a(ob)})||sb(function(a){return a(pb)})||sb(function(a){return a(qb)})||sb(function(a){return a(rb)});function tb(a){this.h=a}
tb.prototype.toString=function(){return this.h};
var ub=new tb("about:invalid#zClosurez");function vb(a){this.Je=a}
function wb(a){return new vb(function(b){return b.substr(0,a.length+1).toLowerCase()===a+":"})}
var xb=[wb("data"),wb("http"),wb("https"),wb("mailto"),wb("ftp"),new vb(function(a){return/^[^:]*([/?#]|$)/.test(a)})],yb=/^\s*(?!javascript:)(?:[\w+.-]+:|[^:/?#]*(?:[/?#]|$))/i;
function zb(a){if(a instanceof tb)if(a instanceof tb)a=a.h;else throw Error("");else a=yb.test(a)?a:void 0;return a}
;function Ab(a,b){b=zb(b);b!==void 0&&(a.href=b)}
;function Bb(a,b){throw Error(b===void 0?"unexpected value "+a+"!":b);}
;function Cb(a){this.h=a}
Cb.prototype.toString=function(){return this.h+""};function Db(a){a=a===void 0?document:a;var b,c;a=(c=(b=a).querySelector)==null?void 0:c.call(b,"script[nonce]");return a==null?"":a.nonce||a.getAttribute("nonce")||""}
;function Eb(a){this.h=a}
Eb.prototype.toString=function(){return this.h+""};
function Fb(a){var b=jb();a=b?b.createScript(a):a;return new Eb(a)}
function Gb(a){if(a instanceof Eb)return a.h;throw Error("");}
;function Hb(a){var b=Db(a.ownerDocument);b&&a.setAttribute("nonce",b)}
function Ib(a,b){a.src=nb(b);Hb(a)}
;function Jb(){this.h=Kb[0].toLowerCase()}
Jb.prototype.toString=function(){return this.h};function Lb(a){var b="true".toString(),c=[new Jb];if(c.length===0)throw Error("");if(c.map(function(d){if(d instanceof Jb)d=d.h;else throw Error("");return d}).every(function(d){return"data-loaded".indexOf(d)!==0}))throw Error('Attribute "data-loaded" does not match any of the allowed prefixes.');
a.setAttribute("data-loaded",b)}
;var Mb="alternate author bookmark canonical cite help icon license modulepreload next prefetch dns-prefetch prerender preconnect preload prev search subresource".split(" ");function Nb(a,b){if(b instanceof kb)a.href=nb(b).toString(),a.rel="stylesheet";else{if(Mb.indexOf("stylesheet")===-1)throw Error('TrustedResourceUrl href attribute required with rel="stylesheet"');b=zb(b);b!==void 0&&(a.href=b,a.rel="stylesheet")}}
;var Ob=Array.prototype.indexOf?function(a,b){return Array.prototype.indexOf.call(a,b,void 0)}:function(a,b){if(typeof a==="string")return typeof b!=="string"||b.length!=1?-1:a.indexOf(b,0);
for(var c=0;c<a.length;c++)if(c in a&&a[c]===b)return c;return-1},Pb=Array.prototype.forEach?function(a,b){Array.prototype.forEach.call(a,b,void 0)}:function(a,b){for(var c=a.length,d=typeof a==="string"?a.split(""):a,e=0;e<c;e++)e in d&&b.call(void 0,d[e],e,a)},Rb=Array.prototype.filter?function(a,b){return Array.prototype.filter.call(a,b,void 0)}:function(a,b){for(var c=a.length,d=[],e=0,f=typeof a==="string"?a.split(""):a,g=0;g<c;g++)if(g in f){var h=f[g];
b.call(void 0,h,g,a)&&(d[e++]=h)}return d},Sb=Array.prototype.map?function(a,b){return Array.prototype.map.call(a,b,void 0)}:function(a,b){for(var c=a.length,d=Array(c),e=typeof a==="string"?a.split(""):a,f=0;f<c;f++)f in e&&(d[f]=b.call(void 0,e[f],f,a));
return d},Tb=Array.prototype.reduce?function(a,b,c){return Array.prototype.reduce.call(a,b,c)}:function(a,b,c){var d=c;
Pb(a,function(e,f){d=b.call(void 0,d,e,f,a)});
return d};
function Ub(a,b){a:{for(var c=a.length,d=typeof a==="string"?a.split(""):a,e=0;e<c;e++)if(e in d&&b.call(void 0,d[e],e,a)){b=e;break a}b=-1}return b<0?null:typeof a==="string"?a.charAt(b):a[b]}
function Vb(a,b){b=Ob(a,b);var c;(c=b>=0)&&Array.prototype.splice.call(a,b,1);return c}
function Wb(a){var b=a.length;if(b>0){for(var c=Array(b),d=0;d<b;d++)c[d]=a[d];return c}return[]}
function Xb(a,b){for(var c=1;c<arguments.length;c++){var d=arguments[c];if(La(d)){var e=a.length||0,f=d.length||0;a.length=e+f;for(var g=0;g<f;g++)a[e+g]=d[g]}else a.push(d)}}
function Yb(a,b){return a>b?1:a<b?-1:0}
;function Zb(a,b){a.__closure__error__context__984382||(a.__closure__error__context__984382={});a.__closure__error__context__984382.severity=b}
;function $b(a){var b=F("window.location.href");a==null&&(a='Unknown Error of type "null/undefined"');if(typeof a==="string")return{message:a,name:"Unknown error",lineNumber:"Not available",fileName:b,stack:"Not available"};var c=!1;try{var d=a.lineNumber||a.line||"Not available"}catch(g){d="Not available",c=!0}try{var e=a.fileName||a.filename||a.sourceURL||D.$googDebugFname||b}catch(g){e="Not available",c=!0}b=ac(a);if(!(!c&&a.lineNumber&&a.fileName&&a.stack&&a.message&&a.name)){c=a.message;if(c==
null){if(a.constructor&&a.constructor instanceof Function){if(a.constructor.name)c=a.constructor.name;else if(c=a.constructor,bc[c])c=bc[c];else{c=String(c);if(!bc[c]){var f=/function\s+([^\(]+)/m.exec(c);bc[c]=f?f[1]:"[Anonymous]"}c=bc[c]}c='Unknown Error of type "'+c+'"'}else c="Unknown Error of unknown type";typeof a.toString==="function"&&Object.prototype.toString!==a.toString&&(c+=": "+a.toString())}return{message:c,name:a.name||"UnknownError",lineNumber:d,fileName:e,stack:b||"Not available"}}return{message:a.message,
name:a.name,lineNumber:a.lineNumber,fileName:a.fileName,stack:b}}
function ac(a,b){b||(b={});b[cc(a)]=!0;var c=a.stack||"",d=a.cause;d&&!b[cc(d)]&&(c+="\nCaused by: ",d.stack&&d.stack.indexOf(d.toString())==0||(c+=typeof d==="string"?d:d.message+"\n"),c+=ac(d,b));a=a.errors;if(Array.isArray(a)){d=1;var e;for(e=0;e<a.length&&!(d>4);e++)b[cc(a[e])]||(c+="\nInner error "+d++ +": ",a[e].stack&&a[e].stack.indexOf(a[e].toString())==0||(c+=typeof a[e]==="string"?a[e]:a[e].message+"\n"),c+=ac(a[e],b));e<a.length&&(c+="\n... "+(a.length-e)+" more inner errors")}return c}
function cc(a){var b="";typeof a.toString==="function"&&(b=""+a);return b+a.stack}
var bc={};function dc(a){return decodeURIComponent(a.replace(/\+/g," "))}
function ec(a){for(var b=0,c=0;c<a.length;++c)b=31*b+a.charCodeAt(c)>>>0;return b}
;var fc=RegExp("^(?:([^:/?#.]+):)?(?://(?:([^\\\\/?#]*)@)?([^\\\\/?#]*?)(?::([0-9]+))?(?=[\\\\/?#]|$))?([^?#]+)?(?:\\?([^#]*))?(?:#([\\s\\S]*))?$");function hc(a){return a?decodeURI(a):a}
function ic(a){return hc(a.match(fc)[3]||null)}
function jc(a){return hc(a.match(fc)[5]||null)}
function kc(a){var b=a.match(fc);a=b[5];var c=b[6];b=b[7];var d="";a&&(d+=a);c&&(d+="?"+c);b&&(d+="#"+b);return d}
function lc(a){var b=a.indexOf("#");return b<0?a:a.slice(0,b)}
function mc(a,b){if(a){a=a.split("&");for(var c=0;c<a.length;c++){var d=a[c].indexOf("="),e=null;if(d>=0){var f=a[c].substring(0,d);e=a[c].substring(d+1)}else f=a[c];b(f,e?dc(e):"")}}}
function nc(a,b,c){if(Array.isArray(b))for(var d=0;d<b.length;d++)nc(a,String(b[d]),c);else b!=null&&c.push(a+(b===""?"":"="+encodeURIComponent(String(b))))}
function oc(a){var b=[],c;for(c in a)nc(c,a[c],b);return b.join("&")}
function pc(a,b){b=oc(b);if(b){var c=a.indexOf("#");c<0&&(c=a.length);var d=a.indexOf("?");if(d<0||d>c){d=c;var e=""}else e=a.substring(d+1,c);a=[a.slice(0,d),e,a.slice(c)];c=a[1];a[1]=b?c?c+"&"+b:b:c;b=a[0]+(a[1]?"?"+a[1]:"")+a[2]}else b=a;return b}
function qc(a,b,c,d){for(var e=c.length;(b=a.indexOf(c,b))>=0&&b<d;){var f=a.charCodeAt(b-1);if(f==38||f==63)if(f=a.charCodeAt(b+e),!f||f==61||f==38||f==35)return b;b+=e+1}return-1}
var rc=/#|$/,sc=/[?&]($|#)/;function tc(a,b){for(var c=a.search(rc),d=0,e,f=[];(e=qc(a,d,b,c))>=0;)f.push(a.substring(d,e)),d=Math.min(a.indexOf("&",e)+1||c,c);f.push(a.slice(d));return f.join("").replace(sc,"$1")}
;function uc(){try{var a,b;return!!((a=window)==null?0:(b=a.top)==null?0:b.location.href)&&!1}catch(c){return!0}}
;function vc(a){a&&typeof a.dispose=="function"&&a.dispose()}
;function wc(a){for(var b=0,c=arguments.length;b<c;++b){var d=arguments[b];La(d)?wc.apply(null,d):vc(d)}}
;function I(){this.ea=this.ea;this.H=this.H}
I.prototype.ea=!1;I.prototype.dispose=function(){this.ea||(this.ea=!0,this.ba())};
I.prototype[Symbol.dispose]=function(){this.dispose()};
function xc(a,b){a.addOnDisposeCallback(Wa(vc,b))}
I.prototype.addOnDisposeCallback=function(a,b){this.ea?b!==void 0?a.call(b):a():(this.H||(this.H=[]),b&&(a=a.bind(b)),this.H.push(a))};
I.prototype.ba=function(){if(this.H)for(;this.H.length;)this.H.shift()()};function yc(){var a=zc();a=a===void 0?"bevasrsg":a;return new Promise(function(b){var c=window===window.top?window:uc()?window:window.top,d=c[a],e;((e=d)==null?0:e.bevasrs)?b(new Ac(d.bevasrs)):(d||(d={},d=(d.nqfbel=[],d),c[a]=d),d.nqfbel.push(function(f){b(new Ac(f))}))})}
function Ac(a){I.call(this);var b=this;this.vm=a;this.i="keydown keypress keyup input focusin focusout select copy cut paste change click dblclick auxclick pointerover pointerdown pointerup pointermove pointerout dragenter dragleave drag dragend mouseover mousedown mouseup mousemove mouseout touchstart touchend touchmove wheel".split(" ");this.h=void 0;this.hd=this.vm.p;this.j=this.o.bind(this);this.addOnDisposeCallback(function(){return void Bc(b)})}
v(Ac,I);Ac.prototype.snapshot=function(a){return this.vm.s(Object.assign({},a.Pb&&{c:a.Pb},a.kd&&{s:a.kd},a.ld!==void 0&&{p:a.ld}))};
Ac.prototype.o=function(a){this.vm.e(a)};
function Bc(a){a.h!==void 0&&(a.i.forEach(function(b){var c;(c=a.h)==null||c.removeEventListener(b,a.j)}),a.h=void 0)}
;function Cc(a){var b=b===void 0?50:b;var c=[];Dc(a,Ec,6).forEach(function(d){Fc(d,2)<=b&&c.push(Fc(d,1))});
return c}
function Gc(a){var b=b===void 0?50:b;var c=[];Dc(a,Ec,6).forEach(function(d){Fc(d,2)>b&&c.push(Fc(d,1))});
return c}
;var Hc;function Ic(){I.apply(this,arguments);this.i=1;this[Hc]=this.dispose}
v(Ic,I);Ic.prototype.share=function(){if(this.ea)throw Error("E:AD");this.i++;return this};
Ic.prototype.dispose=function(){--this.i||I.prototype.dispose.call(this)};
Hc=Symbol.dispose;function Jc(a){return{fieldType:2,fieldName:a}}
function Kc(a){return{fieldType:3,fieldName:a}}
;function Lc(a){this.h=a;a.Kc("/client_streamz/bg/frs",Kc("mk"))}
Lc.prototype.record=function(a,b){this.h.record("/client_streamz/bg/frs",a,b)};
function Mc(a){this.h=a;a.Kc("/client_streamz/bg/wrl",Kc("mn"),Jc("ac"),Jc("sc"),Kc("rk"),Kc("mk"))}
Mc.prototype.record=function(a,b,c,d,e,f){this.h.record("/client_streamz/bg/wrl",a,b,c,d,e,f)};
function Nc(a){this.h=a;a.Mb("/client_streamz/bg/ec",Kc("en"),Kc("mk"))}
Nc.prototype.kb=function(a,b){this.h.Jb("/client_streamz/bg/ec",a,b)};
function Oc(a){this.h=a;a.Kc("/client_streamz/bg/el",Kc("en"),Kc("mk"))}
Oc.prototype.record=function(a,b,c){this.h.record("/client_streamz/bg/el",a,b,c)};
function Pc(a){this.h=a;a.Mb("/client_streamz/bg/cec",Jc("ec"),Kc("mk"))}
Pc.prototype.kb=function(a,b){this.h.Jb("/client_streamz/bg/cec",a,b)};
function Qc(a){this.h=a;a.Mb("/client_streamz/bg/po/csc",Jc("cs"),Kc("mk"))}
Qc.prototype.kb=function(a,b){this.h.Jb("/client_streamz/bg/po/csc",a,b)};
function Rc(a){this.h=a;a.Mb("/client_streamz/bg/po/ctav",Kc("av"),Kc("mk"))}
Rc.prototype.kb=function(a,b){this.h.Jb("/client_streamz/bg/po/ctav",a,b)};
function Sc(a){this.h=a;a.Mb("/client_streamz/bg/po/cwsc",Kc("su"),Kc("mk"))}
Sc.prototype.kb=function(a,b){this.h.Jb("/client_streamz/bg/po/cwsc",a,b)};function Tc(a){D.setTimeout(function(){throw a;},0)}
;var Uc=Ja(610401301,!1),Vc=Ja(748402147,Ja(1,!0));function Wc(){var a=D.navigator;return a&&(a=a.userAgent)?a:""}
var Xc,Yc=D.navigator;Xc=Yc?Yc.userAgentData||null:null;function Zc(a){if(!Uc||!Xc)return!1;for(var b=0;b<Xc.brands.length;b++){var c=Xc.brands[b].brand;if(c&&c.indexOf(a)!=-1)return!0}return!1}
function J(a){return Wc().indexOf(a)!=-1}
;function $c(){return Uc?!!Xc&&Xc.brands.length>0:!1}
function ad(){return $c()?!1:J("Opera")}
function bd(){return J("Firefox")||J("FxiOS")}
function cd(){return $c()?Zc("Chromium"):(J("Chrome")||J("CriOS"))&&!($c()?0:J("Edge"))||J("Silk")}
;function dd(){return Uc?!!Xc&&!!Xc.platform:!1}
function ed(){return J("iPhone")&&!J("iPod")&&!J("iPad")}
;function fd(a){fd[" "](a);return a}
fd[" "]=function(){};var gd=ad(),hd=$c()?!1:J("Trident")||J("MSIE"),id=J("Edge"),jd=J("Gecko")&&!(Wc().toLowerCase().indexOf("webkit")!=-1&&!J("Edge"))&&!(J("Trident")||J("MSIE"))&&!J("Edge"),kd=Wc().toLowerCase().indexOf("webkit")!=-1&&!J("Edge");kd&&J("Mobile");dd()||J("Macintosh");dd()||J("Windows");(dd()?Xc.platform==="Linux":J("Linux"))||dd()||J("CrOS");var ld=dd()?Xc.platform==="Android":J("Android");ed();J("iPad");J("iPod");ed()||J("iPad")||J("iPod");Wc().toLowerCase().indexOf("kaios");bd();var md=ed()||J("iPod"),nd=J("iPad");!J("Android")||cd()||bd()||ad()||J("Silk");cd();var od=J("Safari")&&!(cd()||($c()?0:J("Coast"))||ad()||($c()?0:J("Edge"))||($c()?Zc("Microsoft Edge"):J("Edg/"))||($c()?Zc("Opera"):J("OPR"))||bd()||J("Silk")||J("Android"))&&!(ed()||J("iPad")||J("iPod"));var pd={},qd=null;function rd(a,b){La(a);b===void 0&&(b=0);sd();b=pd[b];for(var c=Array(Math.floor(a.length/3)),d=b[64]||"",e=0,f=0;e<a.length-2;e+=3){var g=a[e],h=a[e+1],k=a[e+2],l=b[g>>2];g=b[(g&3)<<4|h>>4];h=b[(h&15)<<2|k>>6];k=b[k&63];c[f++]=""+l+g+h+k}l=0;k=d;switch(a.length-e){case 2:l=a[e+1],k=b[(l&15)<<2]||d;case 1:a=a[e],c[f]=""+b[a>>2]+b[(a&3)<<4|l>>4]+k+d}return c.join("")}
function td(a){var b=a.length,c=b*3/4;c%3?c=Math.floor(c):"=.".indexOf(a[b-1])!=-1&&(c="=.".indexOf(a[b-2])!=-1?c-2:c-1);var d=new Uint8Array(c),e=0;ud(a,function(f){d[e++]=f});
return e!==c?d.subarray(0,e):d}
function ud(a,b){function c(k){for(;d<a.length;){var l=a.charAt(d++),m=qd[l];if(m!=null)return m;if(!/^[\s\xa0]*$/.test(l))throw Error("Unknown base64 encoding at char: "+l);}return k}
sd();for(var d=0;;){var e=c(-1),f=c(0),g=c(64),h=c(64);if(h===64&&e===-1)break;b(e<<2|f>>4);g!=64&&(b(f<<4&240|g>>2),h!=64&&b(g<<6&192|h))}}
function sd(){if(!qd){qd={};for(var a="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789".split(""),b=["+/=","+/","-_=","-_.","-_"],c=0;c<5;c++){var d=a.concat(b[c].split(""));pd[c]=d;for(var e=0;e<d.length;e++){var f=d[e];qd[f]===void 0&&(qd[f]=e)}}}}
;var vd=typeof Uint8Array!=="undefined",wd=!hd&&typeof btoa==="function",xd=/[-_.]/g,yd={"-":"+",_:"/",".":"="};function zd(a){return yd[a]||""}
var Ad={};function Bd(a,b){Cd(b);this.h=a;if(a!=null&&a.length===0)throw Error("ByteString should be constructed with non-empty values");}
Bd.prototype.sizeBytes=function(){Cd(Ad);var a=this.h;if(!(a==null||vd&&a!=null&&a instanceof Uint8Array))if(typeof a==="string")if(wd){a=xd.test(a)?a.replace(xd,zd):a;a=atob(a);for(var b=new Uint8Array(a.length),c=0;c<a.length;c++)b[c]=a.charCodeAt(c);a=b}else a=td(a);else Ka(a),a=null;return(a=a==null?a:this.h=a)?a.length:0};
var Dd;function Cd(a){if(a!==Ad)throw Error("illegal external caller");}
;var Ed=void 0;function Fd(a){a=Error(a);Zb(a,"warning");return a}
function Gd(a,b){if(a!=null){var c;var d=(c=Ed)!=null?c:Ed={};c=d[a]||0;c>=b||(d[a]=c+1,a=Error(),Zb(a,"incident"),Tc(a))}}
;var Hd=typeof Symbol==="function"&&typeof Symbol()==="symbol";function Id(a,b,c){return typeof Symbol==="function"&&typeof Symbol()==="symbol"?(c===void 0?0:c)&&Symbol.for&&a?Symbol.for(a):a!=null?Symbol(a):Symbol():b}
var Jd=Id("jas",void 0,!0),Kd=Id(void 0,"1oa"),Ld=Id(void 0,Symbol()),Md=Id(void 0,"0ub"),Nd=Id(void 0,"0ubs"),Od=Id(void 0,"0actk"),Pd=Id("m_m","Sh",!0),Qd=Id(void 0,"vps"),Rd=Id();Math.max.apply(Math,A(Object.values({sh:1,rh:2,qh:4,wh:8,yh:16,th:32,Sf:64,oh:128,Xf:256,xh:512,Yf:1024,ph:2048,uh:4096})));var Sd={Ie:{value:0,configurable:!0,writable:!0,enumerable:!1}},Td=Object.defineProperties,K=Hd?Jd:"Ie",Ud,Vd=[];Wd(Vd,7);Ud=Object.freeze(Vd);function Xd(a,b){Hd||K in a||Td(a,Sd);a[K]|=b}
function Wd(a,b){Hd||K in a||Td(a,Sd);a[K]=b}
;function Yd(){return typeof BigInt==="function"}
;var Zd={};function $d(a,b){if(b===void 0){if(b=a.h!==ae)b=!!(2&(a.F[K]|0));return b}return!!(2&b)&&a.h!==ae}
var ae={},be=Object.freeze({}),ce={};function de(a){a.Nh=!0;return a}
;var ee=de(function(a){return typeof a==="number"}),fe=de(function(a){return typeof a==="string"}),ge=de(function(a){return typeof a==="boolean"});
function he(){var a=ie;return de(function(b){for(var c in a)if(b===a[c]&&!/^[0-9]+$/.test(c))return!0;return!1})}
var je=de(function(a){return a!=null&&typeof a==="object"&&typeof a.then==="function"});var ke=typeof D.BigInt==="function"&&typeof D.BigInt(0)==="bigint";function le(a){var b=a;if(fe(b)){if(!/^\s*(?:-?[1-9]\d*|0)?\s*$/.test(b))throw Error(String(b));}else if(ee(b)&&!Number.isSafeInteger(b))throw Error(String(b));return ke?BigInt(a):a=ge(a)?a?"1":"0":fe(a)?a.trim()||"0":String(a)}
var re=de(function(a){return ke?a>=me&&a<=ne:a[0]==="-"?oe(a,pe):oe(a,qe)}),pe=Number.MIN_SAFE_INTEGER.toString(),me=ke?BigInt(Number.MIN_SAFE_INTEGER):void 0,qe=Number.MAX_SAFE_INTEGER.toString(),ne=ke?BigInt(Number.MAX_SAFE_INTEGER):void 0;
function oe(a,b){if(a.length>b.length)return!1;if(a.length<b.length||a===b)return!0;for(var c=0;c<a.length;c++){var d=a[c],e=b[c];if(d>e)return!1;if(d<e)return!0}}
;var se=0,te=0;function ue(a){var b=a>>>0;se=b;te=(a-b)/4294967296>>>0}
function ve(a){if(a<0){ue(0-a);var b=y(we(se,te));a=b.next().value;b=b.next().value;se=a>>>0;te=b>>>0}else ue(a)}
function xe(a,b){b>>>=0;a>>>=0;if(b<=2097151)var c=""+(4294967296*b+a);else Yd()?c=""+(BigInt(b)<<BigInt(32)|BigInt(a)):(c=(a>>>24|b<<8)&16777215,b=b>>16&65535,a=(a&16777215)+c*6777216+b*6710656,c+=b*8147497,b*=2,a>=1E7&&(c+=a/1E7>>>0,a%=1E7),c>=1E7&&(b+=c/1E7>>>0,c%=1E7),c=b+ye(c)+ye(a));return c}
function ye(a){a=String(a);return"0000000".slice(a.length)+a}
function ze(){var a=se,b=te;b&2147483648?Yd()?a=""+(BigInt(b|0)<<BigInt(32)|BigInt(a>>>0)):(b=y(we(a,b)),a=b.next().value,b=b.next().value,a="-"+xe(a,b)):a=xe(a,b);return a}
function we(a,b){b=~b;a?a=~a+1:b+=1;return[a,b]}
;function Ae(a){return Array.prototype.slice.call(a)}
;var Be=typeof BigInt==="function"?BigInt.asIntN:void 0,Ce=Number.isSafeInteger,De=Number.isFinite,Ee=Math.trunc;function Fe(a){return a.displayName||a.name||"unknown type name"}
function Ge(a){if(a!=null&&typeof a!=="boolean")throw Error("Expected boolean but got "+Ka(a)+": "+a);return a}
var He=/^-?([1-9][0-9]*|0)(\.[0-9]+)?$/;function Ie(a){switch(typeof a){case "bigint":return!0;case "number":return De(a);case "string":return He.test(a);default:return!1}}
function Je(a){if(typeof a!=="number")throw Fd("int32");if(!De(a))throw Fd("int32");return a|0}
function Ke(a){return a==null?a:Je(a)}
function Le(a){if(a==null)return a;if(typeof a==="string"&&a)a=+a;else if(typeof a!=="number")return;return De(a)?a|0:void 0}
function Me(a){var b=0;b=b===void 0?0:b;if(!Ie(a))throw Fd("int64");var c=typeof a;switch(b){case 512:switch(c){case "string":return Ne(a);case "bigint":return String(Be(64,a));default:return Oe(a)}case 1024:switch(c){case "string":return Pe(a);case "bigint":return le(Be(64,a));default:return Qe(a)}case 0:switch(c){case "string":return Ne(a);case "bigint":return le(Be(64,a));default:return Re(a)}default:return Bb(b,"Unknown format requested type for int64")}}
function Se(a){return a==null?a:Me(a)}
function Te(a){var b=a.length;return a[0]==="-"?b<20?!0:b===20&&Number(a.substring(0,7))>-922337:b<19?!0:b===19&&Number(a.substring(0,6))<922337}
function Ue(a){a.indexOf(".");if(Te(a))return a;if(a.length<16)ve(Number(a));else if(Yd())a=BigInt(a),se=Number(a&BigInt(4294967295))>>>0,te=Number(a>>BigInt(32)&BigInt(4294967295));else{var b=+(a[0]==="-");te=se=0;for(var c=a.length,d=0+b,e=(c-b)%6+b;e<=c;d=e,e+=6)d=Number(a.slice(d,e)),te*=1E6,se=se*1E6+d,se>=4294967296&&(te+=Math.trunc(se/4294967296),te>>>=0,se>>>=0);b&&(b=y(we(se,te)),a=b.next().value,b=b.next().value,se=a,te=b)}return ze()}
function Re(a){Ie(a);a=Ee(a);if(!Ce(a)){ve(a);var b=se,c=te;if(a=c&2147483648)b=~b+1>>>0,c=~c>>>0,b==0&&(c=c+1>>>0);var d=c*4294967296+(b>>>0);b=Number.isSafeInteger(d)?d:xe(b,c);a=typeof b==="number"?a?-b:b:a?"-"+b:b}return a}
function Oe(a){Ie(a);a=Ee(a);if(Ce(a))a=String(a);else{var b=String(a);Te(b)?a=b:(ve(a),a=ze())}return a}
function Ne(a){Ie(a);var b=Ee(Number(a));if(Ce(b))return String(b);b=a.indexOf(".");b!==-1&&(a=a.substring(0,b));return Ue(a)}
function Pe(a){var b=Ee(Number(a));if(Ce(b))return le(b);b=a.indexOf(".");b!==-1&&(a=a.substring(0,b));return Yd()?le(Be(64,BigInt(a))):le(Ue(a))}
function Qe(a){return Ce(a)?le(Re(a)):le(Oe(a))}
function Ve(a){if(typeof a!=="string")throw Error();return a}
function We(a){if(a!=null&&typeof a!=="string")throw Error();return a}
function Xe(a){return a==null||typeof a==="string"?a:void 0}
function Ye(a,b){if(!(a instanceof b))throw Error("Expected instanceof "+Fe(b)+" but got "+(a&&Fe(a.constructor)));}
function Ze(a,b,c){if(a!=null&&a[Pd]===Zd)return a;if(Array.isArray(a)){var d=a[K]|0;c=d|c&32|c&2;c!==d&&Wd(a,c);return new b(a)}}
;var $e={};function af(a){return a}
;var bf={bi:!0};function cf(a,b){b<100||Gd(Nd,1)}
;function df(a,b,c,d){var e=d!==void 0;d=!!d;var f=Ya(Ld),g;!e&&Hd&&f&&(g=a[f])&&g.Kh(cf);f=[];var h=a.length;g=4294967295;var k=!1,l=!!(b&64),m=l?b&128?0:-1:void 0;if(!(b&1)){var n=h&&a[h-1];n!=null&&typeof n==="object"&&n.constructor===Object?(h--,g=h):n=void 0;if(l&&!(b&128)&&!e){k=!0;var r;g=((r=ef)!=null?r:af)(g-m,m,a,n,void 0)+m}}b=void 0;for(e=0;e<h;e++)if(r=a[e],r!=null&&(r=c(r,d))!=null)if(l&&e>=g){var t=e-m,w=void 0;((w=b)!=null?w:b={})[t]=r}else f[e]=r;if(n)for(var x in n)a=n[x],a!=null&&
(a=c(a,d))!=null&&(h=+x,e=void 0,l&&!Number.isNaN(h)&&(e=h+m)<g?f[e]=a:(h=void 0,((h=b)!=null?h:b={})[x]=a));b&&(k?f.push(b):f[g]=b);return f}
function ff(a){switch(typeof a){case "number":return Number.isFinite(a)?a:""+a;case "bigint":return re(a)?Number(a):""+a;case "boolean":return a?1:0;case "object":if(Array.isArray(a)){var b=a[K]|0;return a.length===0&&b&1?void 0:df(a,b,ff)}if(a!=null&&a[Pd]===Zd)return gf(a);if(a instanceof Bd){b=a.h;if(b==null)a="";else if(typeof b==="string")a=b;else{if(wd){for(var c="",d=0,e=b.length-10240;d<e;)c+=String.fromCharCode.apply(null,b.subarray(d,d+=10240));c+=String.fromCharCode.apply(null,d?b.subarray(d):
b);b=btoa(c)}else b=rd(b);a=a.h=b}return a}return}return a}
var ef;function hf(a,b){if(b){ef=b==null||b===af||b[Qd]!==$e?af:b;try{return gf(a)}finally{ef=void 0}}return gf(a)}
function gf(a){a=a.F;return df(a,a[K]|0,ff)}
;function L(a,b,c){var d=d===void 0?0:d;if(a==null){var e=32;c?(a=[c],e|=128):a=[];b&&(e=e&-8380417|(b&1023)<<13)}else{if(!Array.isArray(a))throw Error("narr");e=a[K]|0;if(Vc&&1&e)throw Error("rfarr");2048&e&&!(2&e)&&jf();if(e&256)throw Error("farr");if(e&64)return d!==0||e&2048||Wd(a,e|2048),a;if(c&&(e|=128,c!==a[0]))throw Error("mid");a:{c=a;e|=64;var f=c.length;if(f){var g=f-1,h=c[g];if(h!=null&&typeof h==="object"&&h.constructor===Object){b=e&128?0:-1;g-=b;if(g>=1024)throw Error("pvtlmt");for(var k in h)f=
+k,f<g&&(c[f+b]=h[k],delete h[k]);e=e&-8380417|(g&1023)<<13;break a}}if(b){k=Math.max(b,f-(e&128?0:-1));if(k>1024)throw Error("spvt");e=e&-8380417|(k&1023)<<13}}}e|=64;d===0&&(e|=2048);Wd(a,e);return a}
function jf(){if(Vc)throw Error("carr");Gd(Od,5)}
;function kf(a,b){if(typeof a!=="object")return a;if(Array.isArray(a)){var c=a[K]|0;a.length===0&&c&1?a=void 0:c&2||(!b||4096&c||16&c?a=lf(a,c,!1,b&&!(c&16)):(Xd(a,34),c&4&&Object.freeze(a)));return a}if(a!=null&&a[Pd]===Zd)return b=a.F,c=b[K]|0,$d(a,c)?a:mf(a,b,c)?nf(a,b):lf(b,c);if(a instanceof Bd)return a}
function nf(a,b,c){a=new a.constructor(b);c&&(a.h=ae);a.i=ae;return a}
function lf(a,b,c,d){d!=null||(d=!!(34&b));a=df(a,b,kf,d);d=32;c&&(d|=2);b=b&8380609|d;Wd(a,b);return a}
function of(a){var b=a.F,c=b[K]|0;return $d(a,c)?mf(a,b,c)?nf(a,b,!0):new a.constructor(lf(b,c,!1)):a}
function pf(a){if(a.h!==ae)return!1;var b=a.F;b=lf(b,b[K]|0);Xd(b,2048);a.F=b;a.h=void 0;a.i=void 0;return!0}
function qf(a){if(!pf(a)&&$d(a,a.F[K]|0))throw Error();}
function rf(a,b){b===void 0&&(b=a[K]|0);b&32&&!(b&4096)&&Wd(a,b|4096)}
function mf(a,b,c){return c&2?!0:c&32&&!(c&4096)?(Wd(b,c|2),a.h=ae,!0):!1}
;var sf=le(0),tf={};function uf(a,b,c,d){Object.isExtensible(a);b=vf(a.F,b,c);if(b!==null||d&&a.i!==ae)return b}
function vf(a,b,c,d){if(b===-1)return null;var e=b+(c?0:-1),f=a.length-1;if(!(f<1+(c?0:-1))){if(e>=f){var g=a[f];if(g!=null&&typeof g==="object"&&g.constructor===Object){c=g[b];var h=!0}else if(e===f)c=g;else return}else c=a[e];if(d&&c!=null){d=d(c);if(d==null)return d;if(!Object.is(d,c))return h?g[b]=d:a[e]=d,d}return c}}
function wf(a,b,c,d){qf(a);var e=a.F;xf(e,e[K]|0,b,c,d);return a}
function xf(a,b,c,d,e){var f=c+(e?0:-1),g=a.length-1;if(g>=1+(e?0:-1)&&f>=g){var h=a[g];if(h!=null&&typeof h==="object"&&h.constructor===Object)return h[c]=d,b}if(f<=g)return a[f]=d,b;if(d!==void 0){var k;g=((k=b)!=null?k:b=a[K]|0)>>13&1023||536870912;c>=g?d!=null&&(f={},a[g+(e?0:-1)]=(f[c]=d,f)):a[f]=d}return b}
function yf(a){return!!(2&a)&&!!(4&a)||!!(256&a)}
function zf(a,b,c){qf(a);var d=a.F,e=d[K]|0;if(b==null)return xf(d,e,3),a;if(!Array.isArray(b))throw Fd();var f=b===Ud?7:b[K]|0,g=f,h=yf(f),k=h||Object.isFrozen(b);h||(f=0);k||(b=Ae(b),g=0,f=Af(f,e),k=!1);f|=5;h=4&f?512&f?512:1024&f?1024:0:void 0;h=h!=null?h:0;for(var l=0;l<b.length;l++){var m=b[l],n=c(m,h);Object.is(m,n)||(k&&(b=Ae(b),g=0,f=Af(f,e),k=!1),b[l]=n)}f!==g&&(k&&(b=Ae(b),f=Af(f,e)),Wd(b,f));xf(d,e,3,b);return a}
function Bf(a,b,c,d){qf(a);a=a.F;var e=a[K]|0;if(d==null){var f=Cf(a);if(Df(f,a,e,c)===b)f.set(c,0);else return}else{b===0||c.includes(b);f=Cf(a);var g=Df(f,a,e,c);g!==b&&(g&&(e=xf(a,e,g)),f.set(c,b))}xf(a,e,b,d)}
function Cf(a){if(Hd){var b;return(b=a[Kd])!=null?b:a[Kd]=new Map}if(Kd in a)return a[Kd];b=new Map;Object.defineProperty(a,Kd,{value:b});return b}
function Df(a,b,c,d){var e=a.get(d);if(e!=null)return e;for(var f=e=0;f<d.length;f++){var g=d[f];vf(b,g)!=null&&(e!==0&&(c=xf(b,c,e)),e=g)}a.set(d,e);return e}
function Ef(a,b,c,d,e){var f=!1;d=vf(a,d,e,function(g){var h=Ze(g,c,b);f=h!==g&&h!=null;return h});
if(d!=null)return f&&!$d(d)&&rf(a,b),d}
function Ff(a,b,c,d){var e=a.F,f=e[K]|0;b=Ef(e,f,b,c,d);if(b==null)return b;f=e[K]|0;if(!$d(a,f)){var g=of(b);g!==b&&(pf(a)&&(e=a.F,f=e[K]|0),b=g,f=xf(e,f,c,b,d),rf(e,f))}return b}
function Dc(a,b,c){var d=void 0===be?2:4;var e=a.F,f=e,g=e[K]|0;e=!1;var h=$d(a,g);d=h?1:d;e=!!e||d===3;var k=!h;(d===2||k)&&pf(a)&&(f=a.F,g=f[K]|0);a=vf(f,c);h=Array.isArray(a)?a:Ud;var l=h===Ud?7:h[K]|0;a=l;2&g&&(a|=2);var m=a|1;if(a=!(4&m)){var n=h,r=g,t=!!(2&m);t&&(r|=2);for(var w=!t,x=!0,z=0,G=0;z<n.length;z++){var H=Ze(n[z],b,r);if(H instanceof b){if(!t){var U=$d(H);w&&(w=!U);x&&(x=U)}n[G++]=H}}G<z&&(n.length=G);m|=4;m=x?m&-4097:m|4096;m=w?m|8:m&-9}m!==l&&(Wd(h,m),2&m&&Object.freeze(h));if(k&&
!(8&m||!h.length&&(d===1||(d!==4?0:2&m||!(16&m)&&32&g)))){yf(m)&&(h=Ae(h),m=Af(m,g),g=xf(f,g,c,h));b=h;k=m;for(l=0;l<b.length;l++)n=b[l],m=of(n),n!==m&&(b[l]=m);k|=8;m=k=b.length?k|4096:k&-4097;Wd(h,m)}b=h;k=h=m;d===1||(d!==4?0:2&h||!(16&h)&&32&g)?yf(h)||(h|=!b.length||a&&!(4096&h)||32&g&&!(4096&h||16&h)?2:256,h!==k&&Wd(b,h),Object.freeze(b)):(d===2&&yf(h)&&(b=Ae(b),k=0,h=Af(h,g),g=xf(f,g,c,b)),yf(h)||(e||(h|=16),h!==k&&Wd(b,h)));2&h||!(4096&h||16&h)||rf(f,g);return b}
function Gf(a,b,c,d,e){d!=null?Ye(d,b):d=void 0;wf(a,c,d,e);d&&!$d(d)&&rf(a.F);return a}
function Hf(a,b,c,d){qf(a);var e=a.F,f=e[K]|0;if(d==null)return xf(e,f,c),a;if(!Array.isArray(d))throw Fd();for(var g=d===Ud?7:d[K]|0,h=g,k=yf(g),l=k||Object.isFrozen(d),m=!0,n=!0,r=0;r<d.length;r++){var t=d[r];Ye(t,b);k||(t=$d(t),m&&(m=!t),n&&(n=t))}k||(g=m?13:5,g=n?g&-4097:g|4096);l&&g===h||(d=Ae(d),h=0,g=Af(g,f));g!==h&&Wd(d,g);f=xf(e,f,c,d);2&g||!(4096&g||16&g)||rf(e,f);return a}
function Af(a,b){return a=(2&b?a|2:a&-3)&-273}
function Fc(a,b,c){c=c===void 0?0:c;a=Le(uf(a,b));return a!=null?a:c}
function If(a,b,c){c=c===void 0?sf:c;a=uf(a,b);b=typeof a;a=a==null?a:b==="bigint"?le(Be(64,a)):Ie(a)?b==="string"?Pe(a):Qe(a):void 0;return a!=null?a:c}
function Jf(a,b,c,d){c=c===void 0?"":c;var e;return(e=Xe(uf(a,b,d)))!=null?e:c}
function Kf(a){var b=b===void 0?0:b;a=uf(a,1);a=a==null?a:De(a)?a|0:void 0;return a!=null?a:b}
function Lf(a,b,c){return wf(a,b,We(c))}
function Mf(a,b,c){c=We(c);qf(a);a=a.F;xf(a,a[K]|0,b,c===""?void 0:c,ce)}
function Nf(a,b,c){if(c!=null){if(!De(c))throw Fd("enum");c|=0}return wf(a,b,c)}
;function M(a,b,c){this.F=L(a,b,c)}
M.prototype.toJSON=function(){return hf(this)};
M.prototype.serialize=function(a){return JSON.stringify(hf(this,a))};
function Of(a,b){if(b==null||b=="")return new a;b=JSON.parse(b);if(!Array.isArray(b))throw Error("dnarr");Xd(b,32);return new a(b)}
M.prototype.clone=function(){var a=this.F,b=a[K]|0;return mf(this,a,b)?nf(this,a,!0):new this.constructor(lf(a,b,!1))};
M.prototype[Pd]=Zd;M.prototype.toString=function(){return this.F.toString()};function Pf(){var a=Qf;this.ctor=Rf;this.isRepeated=0;this.h=Ff;this.defaultValue=void 0;this.i=a.Pe!=null?ce:void 0}
Pf.prototype.register=function(){fd(this)};function Sf(a){return function(b){return Of(a,b)}}
;function Tf(a){this.F=L(a)}
v(Tf,M);function Uf(a,b){return zf(a,b,Je)}
;function Vf(a){this.F=L(a)}
v(Vf,M);var Wf=[1,2,3];function Xf(a){this.F=L(a)}
v(Xf,M);var Yf=[1,2,3];function Zf(a){this.F=L(a)}
v(Zf,M);function $f(a){this.F=L(a)}
v($f,M);function ag(a){this.F=L(a)}
v(ag,M);function bg(a){if(!a)return"";if(/^about:(?:blank|srcdoc)$/.test(a))return window.origin||"";a.indexOf("blob:")===0&&(a=a.substring(5));a=a.split("#")[0].split("?")[0];a=a.toLowerCase();a.indexOf("//")==0&&(a=window.location.protocol+a);/^[\w\-]*:\/\//.test(a)||(a=window.location.href);var b=a.substring(a.indexOf("://")+3),c=b.indexOf("/");c!=-1&&(b=b.substring(0,c));c=a.substring(0,a.indexOf("://"));if(!c)throw Error("URI is missing protocol: "+a);if(c!=="http"&&c!=="https"&&c!=="chrome-extension"&&
c!=="moz-extension"&&c!=="file"&&c!=="android-app"&&c!=="chrome-search"&&c!=="chrome-untrusted"&&c!=="chrome"&&c!=="app"&&c!=="devtools")throw Error("Invalid URI scheme in origin: "+c);a="";var d=b.indexOf(":");if(d!=-1){var e=b.substring(d+1);b=b.substring(0,d);if(c==="http"&&e!=="80"||c==="https"&&e!=="443")a=":"+e}return c+"://"+b+a}
;function cg(){function a(){e[0]=1732584193;e[1]=4023233417;e[2]=2562383102;e[3]=271733878;e[4]=3285377520;m=l=0}
function b(n){for(var r=g,t=0;t<64;t+=4)r[t/4]=n[t]<<24|n[t+1]<<16|n[t+2]<<8|n[t+3];for(t=16;t<80;t++)n=r[t-3]^r[t-8]^r[t-14]^r[t-16],r[t]=(n<<1|n>>>31)&4294967295;n=e[0];var w=e[1],x=e[2],z=e[3],G=e[4];for(t=0;t<80;t++){if(t<40)if(t<20){var H=z^w&(x^z);var U=1518500249}else H=w^x^z,U=1859775393;else t<60?(H=w&x|z&(w|x),U=2400959708):(H=w^x^z,U=3395469782);H=((n<<5|n>>>27)&4294967295)+H+G+U+r[t]&4294967295;G=z;z=x;x=(w<<30|w>>>2)&4294967295;w=n;n=H}e[0]=e[0]+n&4294967295;e[1]=e[1]+w&4294967295;e[2]=
e[2]+x&4294967295;e[3]=e[3]+z&4294967295;e[4]=e[4]+G&4294967295}
function c(n,r){if(typeof n==="string"){n=unescape(encodeURIComponent(n));for(var t=[],w=0,x=n.length;w<x;++w)t.push(n.charCodeAt(w));n=t}r||(r=n.length);t=0;if(l==0)for(;t+64<r;)b(n.slice(t,t+64)),t+=64,m+=64;for(;t<r;)if(f[l++]=n[t++],m++,l==64)for(l=0,b(f);t+64<r;)b(n.slice(t,t+64)),t+=64,m+=64}
function d(){var n=[],r=m*8;l<56?c(h,56-l):c(h,64-(l-56));for(var t=63;t>=56;t--)f[t]=r&255,r>>>=8;b(f);for(t=r=0;t<5;t++)for(var w=24;w>=0;w-=8)n[r++]=e[t]>>w&255;return n}
for(var e=[],f=[],g=[],h=[128],k=1;k<64;++k)h[k]=0;var l,m;a();return{reset:a,update:c,digest:d,ne:function(){for(var n=d(),r="",t=0;t<n.length;t++)r+="0123456789ABCDEF".charAt(Math.floor(n[t]/16))+"0123456789ABCDEF".charAt(n[t]%16);return r}}}
;function dg(a,b,c){var d=String(D.location.href);return d&&a&&b?[b,eg(bg(d),a,c||null)].join(" "):null}
function eg(a,b,c){var d=[],e=[];if((Array.isArray(c)?2:1)==1)return e=[b,a],Pb(d,function(h){e.push(h)}),fg(e.join(" "));
var f=[],g=[];Pb(c,function(h){g.push(h.key);f.push(h.value)});
c=Math.floor((new Date).getTime()/1E3);e=f.length==0?[c,b,a]:[f.join(":"),c,b,a];Pb(d,function(h){e.push(h)});
a=fg(e.join(" "));a=[c,a];g.length==0||a.push(g.join(""));return a.join("_")}
function fg(a){var b=cg();b.update(a);return b.ne().toLowerCase()}
;function gg(a){this.h=a||{cookie:""}}
p=gg.prototype;p.isEnabled=function(){if(!D.navigator.cookieEnabled)return!1;if(this.h.cookie)return!0;this.set("TESTCOOKIESENABLED","1",{Xb:60});if(this.get("TESTCOOKIESENABLED")!=="1")return!1;this.remove("TESTCOOKIESENABLED");return!0};
p.set=function(a,b,c){var d=!1;if(typeof c==="object"){var e=c.ff;d=c.secure||!1;var f=c.domain||void 0;var g=c.path||void 0;var h=c.Xb}if(/[;=\s]/.test(a))throw Error('Invalid cookie name "'+a+'"');if(/[;\r\n]/.test(b))throw Error('Invalid cookie value "'+b+'"');h===void 0&&(h=-1);c=f?";domain="+f:"";g=g?";path="+g:"";d=d?";secure":"";h=h<0?"":h==0?";expires="+(new Date(1970,1,1)).toUTCString():";expires="+(new Date(Date.now()+h*1E3)).toUTCString();this.h.cookie=a+"="+b+c+g+h+d+(e!=null?";samesite="+
e:"")};
p.get=function(a,b){for(var c=a+"=",d=(this.h.cookie||"").split(";"),e=0,f;e<d.length;e++){f=fb(d[e]);if(f.lastIndexOf(c,0)==0)return f.slice(c.length);if(f==a)return""}return b};
p.remove=function(a,b,c){var d=this.get(a)!==void 0;this.set(a,"",{Xb:0,path:b,domain:c});return d};
p.Tb=function(){return hg(this).keys};
p.Wa=function(){return hg(this).values};
p.clear=function(){for(var a=hg(this).keys,b=a.length-1;b>=0;b--)this.remove(a[b])};
function hg(a){a=(a.h.cookie||"").split(";");for(var b=[],c=[],d,e,f=0;f<a.length;f++)e=fb(a[f]),d=e.indexOf("="),d==-1?(b.push(""),c.push(e)):(b.push(e.substring(0,d)),c.push(e.substring(d+1)));return{keys:b,values:c}}
var ig=new gg(typeof document=="undefined"?null:document);function jg(){var a=D.__SAPISID||D.__APISID||D.__3PSAPISID||D.__1PSAPISID||D.__OVERRIDE_SID;if(a)return!0;typeof document!=="undefined"&&(a=new gg(document),a=a.get("SAPISID")||a.get("APISID")||a.get("__Secure-3PAPISID")||a.get("__Secure-1PAPISID"));return!!a}
function kg(a,b,c,d){(a=D[a])||typeof document==="undefined"||(a=(new gg(document)).get(b));return a?dg(a,c,d):null}
function lg(a){var b=bg(D==null?void 0:D.location.href),c=[];if(jg()){b=b.indexOf("https:")==0||b.indexOf("chrome-extension:")==0||b.indexOf("chrome-untrusted://new-tab-page")==0||b.indexOf("moz-extension:")==0;var d=b?D.__SAPISID:D.__APISID;d||typeof document==="undefined"||(d=new gg(document),d=d.get(b?"SAPISID":"APISID")||d.get("__Secure-3PAPISID"));(d=d?dg(d,b?"SAPISIDHASH":"APISIDHASH",a):null)&&c.push(d);b&&((b=kg("__1PSAPISID","__Secure-1PAPISID","SAPISID1PHASH",a))&&c.push(b),(a=kg("__3PSAPISID",
"__Secure-3PAPISID","SAPISID3PHASH",a))&&c.push(a))}return c.length==0?null:c.join(" ")}
;function mg(){}
mg.prototype.compress=function(a){var b,c,d,e;return B(function(f){switch(f.h){case 1:return b=new CompressionStream("gzip"),c=(new Response(b.readable)).arrayBuffer(),d=b.writable.getWriter(),f.yield(d.write((new TextEncoder).encode(a)),2);case 2:return f.yield(d.close(),3);case 3:return e=Uint8Array,f.yield(c,4);case 4:return f.return(new e(f.i))}})};
mg.prototype.isSupported=function(a){return a<1024?!1:typeof CompressionStream!=="undefined"};function ng(a){this.F=L(a)}
v(ng,M);function og(a,b){this.intervalMs=a;this.callback=b;this.enabled=!1;this.h=function(){return Xa()};
this.i=this.h()}
og.prototype.setInterval=function(a){this.intervalMs=a;this.timer&&this.enabled?(this.stop(),this.start()):this.timer&&this.stop()};
og.prototype.start=function(){var a=this;this.enabled=!0;this.timer||(this.timer=setTimeout(function(){a.tick()},this.intervalMs),this.i=this.h())};
og.prototype.stop=function(){this.enabled=!1;this.timer&&(clearTimeout(this.timer),this.timer=void 0)};
og.prototype.tick=function(){var a=this;if(this.enabled){var b=Math.max(this.h()-this.i,0);b<this.intervalMs*.8?this.timer=setTimeout(function(){a.tick()},this.intervalMs-b):(this.timer&&(clearTimeout(this.timer),this.timer=void 0),this.callback(),this.enabled&&(this.stop(),this.start()))}else this.timer=void 0};function pg(a){this.F=L(a)}
v(pg,M);function qg(a){this.F=L(a)}
v(qg,M);function rg(a,b){this.x=a!==void 0?a:0;this.y=b!==void 0?b:0}
p=rg.prototype;p.clone=function(){return new rg(this.x,this.y)};
p.equals=function(a){return a instanceof rg&&(this==a?!0:this&&a?this.x==a.x&&this.y==a.y:!1)};
p.ceil=function(){this.x=Math.ceil(this.x);this.y=Math.ceil(this.y);return this};
p.floor=function(){this.x=Math.floor(this.x);this.y=Math.floor(this.y);return this};
p.round=function(){this.x=Math.round(this.x);this.y=Math.round(this.y);return this};
p.scale=function(a,b){this.x*=a;this.y*=typeof b==="number"?b:a;return this};function sg(a,b){this.width=a;this.height=b}
p=sg.prototype;p.clone=function(){return new sg(this.width,this.height)};
p.aspectRatio=function(){return this.width/this.height};
p.ceil=function(){this.width=Math.ceil(this.width);this.height=Math.ceil(this.height);return this};
p.floor=function(){this.width=Math.floor(this.width);this.height=Math.floor(this.height);return this};
p.round=function(){this.width=Math.round(this.width);this.height=Math.round(this.height);return this};
p.scale=function(a,b){this.width*=a;this.height*=typeof b==="number"?b:a;return this};function tg(a,b){for(var c in a)b.call(void 0,a[c],c,a)}
function ug(a){var b=[],c=0,d;for(d in a)b[c++]=a[d];return b}
function vg(a){var b=wg,c;for(c in b)if(a.call(void 0,b[c],c,b))return c}
function xg(a){for(var b in a)return!1;return!0}
function yg(a,b){if(a!==null&&b in a)throw Error('The object already contains the key "'+b+'"');a[b]=!0}
function zg(a){return a!==null&&"privembed"in a?a.privembed:!1}
function Ag(a,b){for(var c in a)if(!(c in b)||a[c]!==b[c])return!1;for(var d in b)if(!(d in a))return!1;return!0}
function Bg(a){var b={},c;for(c in a)b[c]=a[c];return b}
function Cg(a){if(!a||typeof a!=="object")return a;if(typeof a.clone==="function")return a.clone();if(typeof Map!=="undefined"&&a instanceof Map)return new Map(a);if(typeof Set!=="undefined"&&a instanceof Set)return new Set(a);if(a instanceof Date)return new Date(a.getTime());var b=Array.isArray(a)?[]:typeof ArrayBuffer!=="function"||typeof ArrayBuffer.isView!=="function"||!ArrayBuffer.isView(a)||a instanceof DataView?{}:new a.constructor(a.length),c;for(c in a)b[c]=Cg(a[c]);return b}
var Dg="constructor hasOwnProperty isPrototypeOf propertyIsEnumerable toLocaleString toString valueOf".split(" ");function Eg(a,b){for(var c,d,e=1;e<arguments.length;e++){d=arguments[e];for(c in d)a[c]=d[c];for(var f=0;f<Dg.length;f++)c=Dg[f],Object.prototype.hasOwnProperty.call(d,c)&&(a[c]=d[c])}}
;function Fg(a,b){this.h=a===Gg&&b||""}
Fg.prototype.toString=function(){return this.h};
var Gg={};new Fg(Gg,"");"ARTICLE SECTION NAV ASIDE H1 H2 H3 H4 H5 H6 HEADER FOOTER ADDRESS P HR PRE BLOCKQUOTE OL UL LH LI DL DT DD FIGURE FIGCAPTION MAIN DIV EM STRONG SMALL S CITE Q DFN ABBR RUBY RB RT RTC RP DATA TIME CODE VAR SAMP KBD SUB SUP I B U MARK BDI BDO SPAN BR WBR NOBR INS DEL PICTURE PARAM TRACK MAP TABLE CAPTION COLGROUP COL TBODY THEAD TFOOT TR TD TH SELECT DATALIST OPTGROUP OPTION OUTPUT PROGRESS METER FIELDSET LEGEND DETAILS SUMMARY MENU DIALOG SLOT CANVAS FONT CENTER ACRONYM BASEFONT BIG DIR HGROUP STRIKE TT".split(" ").concat(["BUTTON",
"INPUT"]);function Hg(a){var b=document;return typeof a==="string"?b.getElementById(a):a}
function Ig(a){var b=document;a=String(a);b.contentType==="application/xhtml+xml"&&(a=a.toLowerCase());return b.createElement(a)}
function Jg(a){a&&a.parentNode&&a.parentNode.removeChild(a)}
function Kg(a,b){for(var c=0;a;){if(b(a))return a;a=a.parentNode;c++}return null}
;function Lg(a){this.F=L(a)}
v(Lg,M);Lg.prototype.sc=function(){return Kf(this)};function Mg(a){this.F=L(a)}
v(Mg,M);function Ng(a){this.F=L(a)}
v(Ng,M);function Og(a){Hf(Pg,Mg,1,a)}
var Qg=Sf(Ng);function Rg(a){this.F=L(a)}
v(Rg,M);var Sg=["platform","platformVersion","architecture","model","uaFullVersion"],Pg=new Ng,Tg=null;function Ug(a,b){b=b===void 0?Sg:b;if(!Tg){var c;a=(c=a.navigator)==null?void 0:c.userAgentData;if(!a||typeof a.getHighEntropyValues!=="function"||a.brands&&typeof a.brands.map!=="function")return Promise.reject(Error("UACH unavailable"));Og((a.brands||[]).map(function(e){var f=new Mg;f=Lf(f,1,e.brand);return Lf(f,2,e.version)}));
typeof a.mobile==="boolean"&&wf(Pg,2,Ge(a.mobile));Tg=a.getHighEntropyValues(b)}var d=new Set(b);return Tg.then(function(e){var f=Pg.clone();d.has("platform")&&Lf(f,3,e.platform);d.has("platformVersion")&&Lf(f,4,e.platformVersion);d.has("architecture")&&Lf(f,5,e.architecture);d.has("model")&&Lf(f,6,e.model);d.has("uaFullVersion")&&Lf(f,7,e.uaFullVersion);return f.serialize()}).catch(function(){return Pg.serialize()})}
;function Vg(a){this.F=L(a)}
v(Vg,M);function Wg(a){return Nf(a,1,1)}
;function Xg(a){this.F=L(a,4)}
v(Xg,M);function Yg(a){this.F=L(a,36)}
v(Yg,M);function Zg(a){this.F=L(a,19)}
v(Zg,M);Zg.prototype.ac=function(a){return Nf(this,2,a)};function $g(a,b){this.Oa=b=b===void 0?!1:b;this.j=this.locale=null;this.i=0;this.isFinal=!1;this.h=new Zg;Number.isInteger(a)&&this.h.ac(a);b||(this.locale=document.documentElement.getAttribute("lang"));ah(this,new Vg)}
$g.prototype.ac=function(a){this.h.ac(a);return this};
function ah(a,b){Gf(a.h,Vg,1,b);Kf(b)||Wg(b);a.Oa||(b=bh(a),Jf(b,5)||Lf(b,5,a.locale));a.j&&(b=bh(a),Ff(b,Ng,9)||Gf(b,Ng,9,a.j))}
function ch(a,b){a.i=b}
function dh(a){var b=b===void 0?Sg:b;var c=a.Oa?void 0:window;c?Ug(c,b).then(function(d){a.j=Qg(d!=null?d:"[]");d=bh(a);Gf(d,Ng,9,a.j);return!0}).catch(function(){return!1}):Promise.resolve(!1)}
function bh(a){var b=Ff(a.h,Vg,1);b||(b=new Vg,ah(a,b));a=b;b=Ff(a,Rg,11);b||(b=new Rg,Gf(a,Rg,11,b));return b}
function eh(a,b,c,d,e,f,g){c=c===void 0?0:c;d=d===void 0?0:d;e=e===void 0?null:e;f=f===void 0?0:f;g=g===void 0?0:g;if(!a.Oa){var h=bh(a);var k=new Lg;k=Nf(k,1,a.i);k=wf(k,2,Ge(a.isFinal));d=wf(k,3,Ke(d>0?d:void 0));d=wf(d,4,Ke(f>0?f:void 0));d=wf(d,5,Ke(g>0?g:void 0));f=d.F;g=f[K]|0;d=$d(d,g)?d:mf(d,f,g)?nf(d,f):new d.constructor(lf(f,g,!0));Gf(h,Lg,10,d)}a=a.h.clone();h=Date.now().toString();a=wf(a,4,Se(h));b=b.slice();b=Hf(a,Yg,3,b);e&&(a=new pg,e=wf(a,13,Ke(e)),a=new qg,e=Gf(a,pg,2,e),a=new Xg,
e=Gf(a,qg,1,e),e=Nf(e,2,9),Gf(b,Xg,18,e));c&&wf(b,14,Se(c));return b}
;var fh=function(){if(!D.addEventListener||!Object.defineProperty)return!1;var a=!1,b=Object.defineProperty({},"passive",{get:function(){a=!0}});
try{var c=function(){};
D.addEventListener("test",c,b);D.removeEventListener("test",c,b)}catch(d){}return a}();function gh(a){this.h=this.i=this.j=a}
gh.prototype.reset=function(){this.h=this.i=this.j};
gh.prototype.getValue=function(){return this.i};function Qf(a){this.F=L(a,8)}
v(Qf,M);var hh=Sf(Qf);function Rf(a){this.F=L(a)}
v(Rf,M);var ih;ih=new Pf;function jh(a){I.call(this);var b=this;this.componentId="";this.h=[];this.Ra="";this.pageId=null;this.fb=this.ma=-1;this.G=this.experimentIds=null;this.A=this.o=0;this.U=null;this.Z=this.ha=0;this.Kb=1;this.timeoutMillis=0;this.xa=!1;this.logSource=a.logSource;this.yb=a.yb||function(){};
this.j=new $g(a.logSource,a.Oa);this.network=a.network||null;this.ob=a.ob||null;this.bufferSize=1E3;this.M=a.Df||null;this.sessionIndex=a.sessionIndex||null;this.Rb=a.Rb||!1;this.logger=null;this.withCredentials=!a.Nc;this.Oa=a.Oa||!1;this.Y=!this.Oa&&!!window&&!!window.navigator&&window.navigator.sendBeacon!==void 0;this.Qa=typeof URLSearchParams!=="undefined"&&!!(new URL(kh())).searchParams&&!!(new URL(kh())).searchParams.set;var c=Wg(new Vg);ah(this.j,c);this.u=new gh(1E4);a=lh(this,a.rd);this.i=
new og(this.u.getValue(),a);this.Fa=new og(6E5,a);this.Rb||this.Fa.start();this.Oa||(document.addEventListener("visibilitychange",function(){if(document.visibilityState==="hidden"){mh(b);var d;(d=b.U)==null||d.flush()}}),document.addEventListener("pagehide",function(){mh(b);
var d;(d=b.U)==null||d.flush()}))}
v(jh,I);function lh(a,b){return a.Qa?b?function(){b().then(function(){a.flush()})}:function(){a.flush()}:function(){}}
jh.prototype.ba=function(){mh(this);this.i.stop();this.Fa.stop();I.prototype.ba.call(this)};
function nh(a){a.M||(a.M=kh());try{return(new URL(a.M)).toString()}catch(b){return(new URL(a.M,window.location.origin)).toString()}}
function oh(a,b,c){a.U&&a.U.kb(b,c)}
jh.prototype.log=function(a){oh(this,2,1);if(this.Qa){a=a.clone();var b=this.Kb++;a=wf(a,21,Se(b));this.componentId&&Lf(a,26,this.componentId);b=a;var c=uf(b,1);var d=d===void 0?!1:d;var e=typeof c;d=c==null?c:e==="bigint"?String(Be(64,c)):Ie(c)?e==="string"?Ne(c):d?Oe(c):Re(c):void 0;d==null&&(d=Date.now(),d=Number.isFinite(d)?d.toString():"0",wf(b,1,Se(d)));d=uf(b,15);d!=null&&(typeof d==="bigint"?re(d)?d=Number(d):(d=Be(64,d),d=re(d)?Number(d):String(d)):d=Ie(d)?typeof d==="number"?Re(d):Ne(d):
void 0);d==null&&wf(b,15,Se((new Date).getTimezoneOffset()*60));this.experimentIds&&(d=this.experimentIds.clone(),Gf(b,ng,16,d));oh(this,1,1);b=this.h.length-this.bufferSize+1;b>0&&(this.h.splice(0,b),this.o+=b,oh(this,3,b));this.h.push(a);this.Rb||this.i.enabled||this.i.start()}};
jh.prototype.flush=function(a,b){var c=this;if(this.h.length===0)a&&a();else if(this.xa&&this.Y)this.j.i=3,ph(this);else{var d=Date.now();if(this.fb>d&&this.ma<d)b&&b("throttled");else{this.network&&(typeof this.network.sc==="function"?ch(this.j,this.network.sc()):this.j.i=0);var e=this.h.length,f=eh(this.j,this.h,this.o,this.A,this.ob,this.ha,this.Z),g=this.yb();if(g&&this.Ra===g)b&&b("stale-auth-token");else{this.h=[];this.i.enabled&&this.i.stop();this.o=0;d=f.serialize();var h;this.G&&this.G.isSupported(d.length)&&
(h=this.G.compress(d));var k=qh(this,d,g),l=function(r){c.u.reset();c.i.setInterval(c.u.getValue());if(r){var t=null;try{var w=JSON.stringify(JSON.parse(r.replace(")]}'\n","")));t=hh(w)}catch(G){}if(t){r=Number(If(t,1,le("-1")));r>0&&(c.ma=Date.now(),c.fb=c.ma+r);r=Ya(Ld);var x;Hd&&r&&((x=t.F[r])==null?void 0:x[175237375])!=null&&Gd(Md,3);a:{var z=z===void 0?!1:z;if(Ya(Rd)&&Ya(Ld)&&void 0===Rd){x=t.F;r=x[Ld];if(!r)break a;if(r=r.ci)try{r(x,175237375,bf);break a}catch(G){Tc(G)}}z&&(z=t.F,(x=Ya(Ld))&&
x in z&&(z=z[x])&&delete z[175237375])}z=ih.ctor?ih.h(t,ih.ctor,175237375,ih.i):ih.h(t,175237375,null,ih.i);if(z=z===null?void 0:z)z=Fc(z,1,-1),z!==-1&&(c.u=new gh(z<1?1:z),c.i.setInterval(c.u.getValue()))}}a&&a();c.A=0},m=function(r,t){var w=Dc(f,Yg,3);
var x=Number(If(f,14)),z=c.u;z.h=Math.min(3E5,z.h*2);z.i=Math.min(3E5,z.h+Math.round(.1*(Math.random()-.5)*2*z.h));c.i.setInterval(c.u.getValue());r===401&&g&&(c.Ra=g);x&&(c.o+=x);t===void 0&&(t=c.isRetryable(r));t&&(c.h=w.concat(c.h),c.Rb||c.i.enabled||c.i.start());oh(c,7,1);b&&b("net-send-failed",r);++c.A},n=function(){c.network&&c.network.send(k,l,m)};
h?h.then(function(r){oh(c,5,e);k.Ec["Content-Encoding"]="gzip";k.Ec["Content-Type"]="application/binary";k.body=r;k.ge=2;n()},function(){oh(c,6,e);
n()}):n()}}}};
function qh(a,b,c){c=c===void 0?null:c;var d=d===void 0?a.withCredentials:d;var e={},f=new URL(nh(a));c&&(e.Authorization=c);a.sessionIndex&&(e["X-Goog-AuthUser"]=a.sessionIndex,f.searchParams.set("authuser",a.sessionIndex));a.pageId&&(Object.defineProperty(e,"X-Goog-PageId",{value:a.pageId}),f.searchParams.set("pageId",a.pageId));return{url:f.toString(),body:b,ge:1,Ec:e,requestType:"POST",withCredentials:d,timeoutMillis:a.timeoutMillis}}
function mh(a){a.j.isFinal=!0;a.flush();a.j.isFinal=!1}
function ph(a){rh(a,function(b,c){b=new URL(b);b.searchParams.set("format","json");var d=!1;try{d=window.navigator.sendBeacon(b.toString(),c.serialize())}catch(e){}d||(a.Y=!1);return d})}
function rh(a,b){if(a.h.length!==0){var c=new URL(nh(a));c.searchParams.delete("format");var d=a.yb();d&&c.searchParams.set("auth",d);c.searchParams.set("authuser",a.sessionIndex||"0");for(d=0;d<10&&a.h.length;++d){var e=a.h.slice(0,32),f=eh(a.j,e,a.o,a.A,a.ob,a.ha,a.Z);if(!b(c.toString(),f)){++a.A;break}a.o=0;a.A=0;a.ha=0;a.Z=0;a.h=a.h.slice(e.length)}a.i.enabled&&a.i.stop()}}
jh.prototype.isRetryable=function(a){return 500<=a&&a<600||a===401||a===0};
function kh(){return"https://play.google.com/log?format=json&hasfast=true"}
;function sh(){this.Yd=typeof AbortController!=="undefined"}
sh.prototype.send=function(a,b,c){var d=this,e,f,g,h,k,l,m,n,r,t;return B(function(w){switch(w.h){case 1:return f=(e=d.Yd?new AbortController:void 0)?setTimeout(function(){e.abort()},a.timeoutMillis):void 0,wa(w,2,3),g=Object.assign({},{method:a.requestType,
headers:Object.assign({},a.Ec)},a.body&&{body:a.body},a.withCredentials&&{credentials:"include"},{signal:a.timeoutMillis&&e?e.signal:null}),w.yield(fetch(a.url,g),5);case 5:h=w.i;if(h.status!==200){(k=c)==null||k(h.status);w.B(3);break}if((l=b)==null){w.B(7);break}return w.yield(h.text(),8);case 8:l(w.i);case 7:case 3:w.M=[w.j];w.H=0;w.o=0;clearTimeout(f);za(w);break;case 2:m=ya(w);switch((n=m)==null?void 0:n.name){case "AbortError":(r=c)==null||r(408);break;default:(t=c)==null||t(400)}w.B(3)}})};
sh.prototype.sc=function(){return 4};function th(a,b){b=b===void 0?"0":b;I.call(this);this.logSource=a;this.sessionIndex=b;this.Va="https://play.google.com/log?format=json&hasfast=true";this.i=null;this.o=!1;this.network=null;this.componentId="";this.h=this.ob=null;this.j=!1;this.pageId=null;this.bufferSize=void 0}
v(th,I);function uh(a,b){a.i=b;return a}
function xh(a,b){a.network=b;return a}
function yh(a,b){a.h=b}
function zh(a){a.j=!0;return a}
th.prototype.Nc=function(){this.u=!0;return this};
function Ah(a){a.network||(a.network=new sh);var b=new jh({logSource:a.logSource,yb:a.yb?a.yb:lg,sessionIndex:a.sessionIndex,Df:a.Va,Oa:a.o,Rb:!1,Nc:a.u,rd:a.rd,network:a.network});xc(a,b);if(a.i){var c=a.i,d=bh(b.j);Lf(d,7,c)}b.G=new mg;a.componentId&&(b.componentId=a.componentId);a.ob&&(b.ob=a.ob);a.pageId&&(b.pageId=a.pageId);a.h&&((d=a.h)?(b.experimentIds||(b.experimentIds=new ng),c=b.experimentIds,d=d.serialize(),Lf(c,4,d)):b.experimentIds&&wf(b.experimentIds,4));a.j&&(b.xa=b.Y);dh(b.j);a.bufferSize&&
(b.bufferSize=a.bufferSize);a.network.ac&&a.network.ac(a.logSource);a.network.sf&&a.network.sf(b);return b}
;function Bh(a,b,c,d,e,f,g){a=a===void 0?-1:a;b=b===void 0?"":b;c=c===void 0?"":c;d=d===void 0?!1:d;e=e===void 0?"":e;I.call(this);this.logSource=a;this.componentId=b;f?b=f:(a=new th(a,"0"),a.componentId=b,xc(this,a),c!==""&&(a.Va=c),d&&(a.o=!0),e&&uh(a,e),g&&xh(a,g),b=Ah(a));this.h=b}
v(Bh,I);
Bh.prototype.flush=function(a){var b=a||[];if(b.length){a=new ag;for(var c=[],d=0;d<b.length;d++){var e=b[d],f=new $f;f=Lf(f,1,e.i);var g=Ch(e);f=zf(f,g,Ve);g=[];var h=[];for(var k=y(e.h.keys()),l=k.next();!l.done;l=k.next())h.push(l.value.split(","));for(k=0;k<h.length;k++){l=h[k];var m=e.o;for(var n=e.Qc(l)||[],r=[],t=0;t<n.length;t++){var w=n[t],x=w&&w.h;w=new Xf;switch(m){case 3:x=Number(x);Number.isFinite(x)&&Bf(w,1,Yf,Se(x));break;case 2:x=Number(x);if(x!=null&&typeof x!=="number")throw Error("Value of float/double field must be a number, found "+typeof x+
": "+x);Bf(w,2,Yf,x)}r.push(w)}m=r;for(n=0;n<m.length;n++){r=m[n];t=new Zf;r=Gf(t,Xf,2,r);t=l;w=[];x=Dh(e);for(var z=0;z<x.length;z++){var G=x[z],H=t[z],U=new Vf;switch(G){case 3:Bf(U,1,Wf,We(String(H)));break;case 2:G=Number(H);Number.isFinite(G)&&Bf(U,2,Wf,Ke(G));break;case 1:Bf(U,3,Wf,Ge(H==="true"))}w.push(U)}Hf(r,Vf,1,w);g.push(r)}}Hf(f,Zf,4,g);c.push(f);e.clear()}Hf(a,$f,1,c);b=this.h;if(a instanceof Yg)b.log(a);else try{var Z=new Yg,mb=a.serialize();var Qb=Lf(Z,8,mb);b.log(Qb)}catch(ca){oh(b,
4,1)}this.h.flush()}};function Eh(a){this.h=a}
;function Fh(a,b,c){this.i=a;this.o=b;this.fields=c||[];this.h=new Map}
function Dh(a){return a.fields.map(function(b){return b.fieldType})}
function Ch(a){return a.fields.map(function(b){return b.fieldName})}
p=Fh.prototype;p.Zd=function(a){var b=C.apply(1,arguments),c=this.Qc(b);c?c.push(new Eh(a)):this.Md(a,b)};
p.Md=function(a){var b=this.qd(C.apply(1,arguments));this.h.set(b,[new Eh(a)])};
p.Qc=function(){var a=this.qd(C.apply(0,arguments));return this.h.has(a)?this.h.get(a):void 0};
p.ze=function(){var a=this.Qc(C.apply(0,arguments));return a&&a.length?a[0]:void 0};
p.clear=function(){this.h.clear()};
p.qd=function(){var a=C.apply(0,arguments);return a?a.join(","):"key"};function Gh(a,b){Fh.call(this,a,3,b)}
v(Gh,Fh);Gh.prototype.j=function(a){var b=C.apply(1,arguments),c=0,d=this.ze(b);d&&(c=d.h);this.Md(c+a,b)};function Hh(a,b){Fh.call(this,a,2,b)}
v(Hh,Fh);Hh.prototype.record=function(a){this.Zd(a,C.apply(1,arguments))};function Ih(a,b){this.type=a;this.h=this.target=b;this.defaultPrevented=this.j=!1}
Ih.prototype.stopPropagation=function(){this.j=!0};
Ih.prototype.preventDefault=function(){this.defaultPrevented=!0};function Jh(a,b){Ih.call(this,a?a.type:"");this.relatedTarget=this.h=this.target=null;this.button=this.screenY=this.screenX=this.clientY=this.clientX=0;this.key="";this.charCode=this.keyCode=0;this.metaKey=this.shiftKey=this.altKey=this.ctrlKey=!1;this.state=null;this.pointerId=0;this.pointerType="";this.i=null;a&&this.init(a,b)}
Za(Jh,Ih);
Jh.prototype.init=function(a,b){var c=this.type=a.type,d=a.changedTouches&&a.changedTouches.length?a.changedTouches[0]:null;this.target=a.target||a.srcElement;this.h=b;b=a.relatedTarget;b||(c=="mouseover"?b=a.fromElement:c=="mouseout"&&(b=a.toElement));this.relatedTarget=b;d?(this.clientX=d.clientX!==void 0?d.clientX:d.pageX,this.clientY=d.clientY!==void 0?d.clientY:d.pageY,this.screenX=d.screenX||0,this.screenY=d.screenY||0):(this.clientX=a.clientX!==void 0?a.clientX:a.pageX,this.clientY=a.clientY!==
void 0?a.clientY:a.pageY,this.screenX=a.screenX||0,this.screenY=a.screenY||0);this.button=a.button;this.keyCode=a.keyCode||0;this.key=a.key||"";this.charCode=a.charCode||(c=="keypress"?a.keyCode:0);this.ctrlKey=a.ctrlKey;this.altKey=a.altKey;this.shiftKey=a.shiftKey;this.metaKey=a.metaKey;this.pointerId=a.pointerId||0;this.pointerType=a.pointerType;this.state=a.state;this.i=a;a.defaultPrevented&&Jh.Aa.preventDefault.call(this)};
Jh.prototype.stopPropagation=function(){Jh.Aa.stopPropagation.call(this);this.i.stopPropagation?this.i.stopPropagation():this.i.cancelBubble=!0};
Jh.prototype.preventDefault=function(){Jh.Aa.preventDefault.call(this);var a=this.i;a.preventDefault?a.preventDefault():a.returnValue=!1};var Kh="closure_listenable_"+(Math.random()*1E6|0);var Lh=0;function Mh(a,b,c,d,e){this.listener=a;this.proxy=null;this.src=b;this.type=c;this.capture=!!d;this.vc=e;this.key=++Lh;this.Zb=this.kc=!1}
function Nh(a){a.Zb=!0;a.listener=null;a.proxy=null;a.src=null;a.vc=null}
;function Oh(a){this.src=a;this.listeners={};this.h=0}
Oh.prototype.add=function(a,b,c,d,e){var f=a.toString();a=this.listeners[f];a||(a=this.listeners[f]=[],this.h++);var g=Ph(a,b,d,e);g>-1?(b=a[g],c||(b.kc=!1)):(b=new Mh(b,this.src,f,!!d,e),b.kc=c,a.push(b));return b};
Oh.prototype.remove=function(a,b,c,d){a=a.toString();if(!(a in this.listeners))return!1;var e=this.listeners[a];b=Ph(e,b,c,d);return b>-1?(Nh(e[b]),Array.prototype.splice.call(e,b,1),e.length==0&&(delete this.listeners[a],this.h--),!0):!1};
function Qh(a,b){var c=b.type;c in a.listeners&&Vb(a.listeners[c],b)&&(Nh(b),a.listeners[c].length==0&&(delete a.listeners[c],a.h--))}
function Ph(a,b,c,d){for(var e=0;e<a.length;++e){var f=a[e];if(!f.Zb&&f.listener==b&&f.capture==!!c&&f.vc==d)return e}return-1}
;var Rh="closure_lm_"+(Math.random()*1E6|0),Sh={},Th=0;function Uh(a,b,c,d,e){if(d&&d.once)Vh(a,b,c,d,e);else if(Array.isArray(b))for(var f=0;f<b.length;f++)Uh(a,b[f],c,d,e);else c=Wh(c),a&&a[Kh]?a.listen(b,c,Ma(d)?!!d.capture:!!d,e):Xh(a,b,c,!1,d,e)}
function Xh(a,b,c,d,e,f){if(!b)throw Error("Invalid event type");var g=Ma(e)?!!e.capture:!!e,h=Yh(a);h||(a[Rh]=h=new Oh(a));c=h.add(b,c,d,g,f);if(!c.proxy){d=Zh();c.proxy=d;d.src=a;d.listener=c;if(a.addEventListener)fh||(e=g),e===void 0&&(e=!1),a.addEventListener(b.toString(),d,e);else if(a.attachEvent)a.attachEvent($h(b.toString()),d);else if(a.addListener&&a.removeListener)a.addListener(d);else throw Error("addEventListener and attachEvent are unavailable.");Th++}}
function Zh(){function a(c){return b.call(a.src,a.listener,c)}
var b=ai;return a}
function Vh(a,b,c,d,e){if(Array.isArray(b))for(var f=0;f<b.length;f++)Vh(a,b[f],c,d,e);else c=Wh(c),a&&a[Kh]?bi(a,b,c,Ma(d)?!!d.capture:!!d,e):Xh(a,b,c,!0,d,e)}
function ci(a,b,c,d,e){if(Array.isArray(b))for(var f=0;f<b.length;f++)ci(a,b[f],c,d,e);else(d=Ma(d)?!!d.capture:!!d,c=Wh(c),a&&a[Kh])?a.i.remove(String(b),c,d,e):a&&(a=Yh(a))&&(b=a.listeners[b.toString()],a=-1,b&&(a=Ph(b,c,d,e)),(c=a>-1?b[a]:null)&&di(c))}
function di(a){if(typeof a!=="number"&&a&&!a.Zb){var b=a.src;if(b&&b[Kh])Qh(b.i,a);else{var c=a.type,d=a.proxy;b.removeEventListener?b.removeEventListener(c,d,a.capture):b.detachEvent?b.detachEvent($h(c),d):b.addListener&&b.removeListener&&b.removeListener(d);Th--;(c=Yh(b))?(Qh(c,a),c.h==0&&(c.src=null,b[Rh]=null)):Nh(a)}}}
function $h(a){return a in Sh?Sh[a]:Sh[a]="on"+a}
function ai(a,b){if(a.Zb)a=!0;else{b=new Jh(b,this);var c=a.listener,d=a.vc||a.src;a.kc&&di(a);a=c.call(d,b)}return a}
function Yh(a){a=a[Rh];return a instanceof Oh?a:null}
var ei="__closure_events_fn_"+(Math.random()*1E9>>>0);function Wh(a){if(typeof a==="function")return a;a[ei]||(a[ei]=function(b){return a.handleEvent(b)});
return a[ei]}
;function fi(){I.call(this);this.i=new Oh(this);this.xa=this;this.Z=null}
Za(fi,I);fi.prototype[Kh]=!0;p=fi.prototype;p.addEventListener=function(a,b,c,d){Uh(this,a,b,c,d)};
p.removeEventListener=function(a,b,c,d){ci(this,a,b,c,d)};
function gi(a,b){var c=a.Z;if(c){var d=[];for(var e=1;c;c=c.Z)d.push(c),++e}a=a.xa;c=b.type||b;typeof b==="string"?b=new Ih(b,a):b instanceof Ih?b.target=b.target||a:(e=b,b=new Ih(c,a),Eg(b,e));e=!0;var f;if(d)for(f=d.length-1;!b.j&&f>=0;f--){var g=b.h=d[f];e=hi(g,c,!0,b)&&e}b.j||(g=b.h=a,e=hi(g,c,!0,b)&&e,b.j||(e=hi(g,c,!1,b)&&e));if(d)for(f=0;!b.j&&f<d.length;f++)g=b.h=d[f],e=hi(g,c,!1,b)&&e}
p.ba=function(){fi.Aa.ba.call(this);this.removeAllListeners();this.Z=null};
p.listen=function(a,b,c,d){return this.i.add(String(a),b,!1,c,d)};
function bi(a,b,c,d,e){a.i.add(String(b),c,!0,d,e)}
p.removeAllListeners=function(a){if(this.i){var b=this.i;a=a&&a.toString();var c=0,d;for(d in b.listeners)if(!a||d==a){for(var e=b.listeners[d],f=0;f<e.length;f++)++c,Nh(e[f]);delete b.listeners[d];b.h--}b=c}else b=0;return b};
function hi(a,b,c,d){b=a.i.listeners[String(b)];if(!b)return!0;b=b.concat();for(var e=!0,f=0;f<b.length;++f){var g=b[f];if(g&&!g.Zb&&g.capture==c){var h=g.listener,k=g.vc||g.src;g.kc&&Qh(a.i,g);e=h.call(k,d)!==!1&&e}}return e&&!d.defaultPrevented}
;var ii=typeof AsyncContext!=="undefined"&&typeof AsyncContext.Snapshot==="function"?function(a){return a&&AsyncContext.Snapshot.wrap(a)}:function(a){return a};function ji(a,b){this.j=a;this.o=b;this.i=0;this.h=null}
ji.prototype.get=function(){if(this.i>0){this.i--;var a=this.h;this.h=a.next;a.next=null}else a=this.j();return a};
function ki(a,b){a.o(b);a.i<100&&(a.i++,b.next=a.h,a.h=b)}
;function li(){this.i=this.h=null}
li.prototype.add=function(a,b){var c=mi.get();c.set(a,b);this.i?this.i.next=c:this.h=c;this.i=c};
li.prototype.remove=function(){var a=null;this.h&&(a=this.h,this.h=this.h.next,this.h||(this.i=null),a.next=null);return a};
var mi=new ji(function(){return new ni},function(a){return a.reset()});
function ni(){this.next=this.scope=this.h=null}
ni.prototype.set=function(a,b){this.h=a;this.scope=b;this.next=null};
ni.prototype.reset=function(){this.next=this.scope=this.h=null};var oi,pi=!1,qi=new li;function ri(a,b){oi||si();pi||(oi(),pi=!0);qi.add(a,b)}
function si(){var a=Promise.resolve(void 0);oi=function(){a.then(ti)}}
function ti(){for(var a;a=qi.remove();){try{a.h.call(a.scope)}catch(b){Tc(b)}ki(mi,a)}pi=!1}
;function ui(){}
function vi(a){var b=!1,c;return function(){b||(c=a(),b=!0);return c}}
;function wi(a){this.X=0;this.bb=void 0;this.wb=this.Ta=this.parent_=null;this.uc=this.Oc=!1;if(a!=ui)try{var b=this;a.call(void 0,function(c){xi(b,2,c)},function(c){xi(b,3,c)})}catch(c){xi(this,3,c)}}
function yi(){this.next=this.context=this.h=this.i=this.child=null;this.j=!1}
yi.prototype.reset=function(){this.context=this.h=this.i=this.child=null;this.j=!1};
var zi=new ji(function(){return new yi},function(a){a.reset()});
function Ai(a,b,c){var d=zi.get();d.i=a;d.h=b;d.context=c;return d}
function Bi(a){return new wi(function(b,c){c(a)})}
wi.prototype.then=function(a,b,c){return Ci(this,ii(typeof a==="function"?a:null),ii(typeof b==="function"?b:null),c)};
wi.prototype.$goog_Thenable=!0;function Di(a,b,c,d){Ei(a,Ai(b||ui,c||null,d))}
p=wi.prototype;p.finally=function(a){var b=this;a=ii(a);return new Promise(function(c,d){Di(b,function(e){a();c(e)},function(e){a();
d(e)})})};
p.Hc=function(a,b){return Ci(this,null,ii(a),b)};
p.catch=wi.prototype.Hc;p.cancel=function(a){if(this.X==0){var b=new Fi(a);ri(function(){Gi(this,b)},this)}};
function Gi(a,b){if(a.X==0)if(a.parent_){var c=a.parent_;if(c.Ta){for(var d=0,e=null,f=null,g=c.Ta;g&&(g.j||(d++,g.child==a&&(e=g),!(e&&d>1)));g=g.next)e||(f=g);e&&(c.X==0&&d==1?Gi(c,b):(f?(d=f,d.next==c.wb&&(c.wb=d),d.next=d.next.next):Hi(c),Ii(c,e,3,b)))}a.parent_=null}else xi(a,3,b)}
function Ei(a,b){a.Ta||a.X!=2&&a.X!=3||Ji(a);a.wb?a.wb.next=b:a.Ta=b;a.wb=b}
function Ci(a,b,c,d){var e=Ai(null,null,null);e.child=new wi(function(f,g){e.i=b?function(h){try{var k=b.call(d,h);f(k)}catch(l){g(l)}}:f;
e.h=c?function(h){try{var k=c.call(d,h);k===void 0&&h instanceof Fi?g(h):f(k)}catch(l){g(l)}}:g});
e.child.parent_=a;Ei(a,e);return e.child}
p.Bf=function(a){this.X=0;xi(this,2,a)};
p.Cf=function(a){this.X=0;xi(this,3,a)};
function xi(a,b,c){if(a.X==0){a===c&&(b=3,c=new TypeError("Promise cannot resolve to itself"));a.X=1;a:{var d=c,e=a.Bf,f=a.Cf;if(d instanceof wi){Di(d,e,f,a);var g=!0}else{if(d)try{var h=!!d.$goog_Thenable}catch(l){h=!1}else h=!1;if(h)d.then(e,f,a),g=!0;else{if(Ma(d))try{var k=d.then;if(typeof k==="function"){Ki(d,k,e,f,a);g=!0;break a}}catch(l){f.call(a,l);g=!0;break a}g=!1}}}g||(a.bb=c,a.X=b,a.parent_=null,Ji(a),b!=3||c instanceof Fi||Li(a,c))}}
function Ki(a,b,c,d,e){function f(k){h||(h=!0,d.call(e,k))}
function g(k){h||(h=!0,c.call(e,k))}
var h=!1;try{b.call(a,g,f)}catch(k){f(k)}}
function Ji(a){a.Oc||(a.Oc=!0,ri(a.te,a))}
function Hi(a){var b=null;a.Ta&&(b=a.Ta,a.Ta=b.next,b.next=null);a.Ta||(a.wb=null);return b}
p.te=function(){for(var a;a=Hi(this);)Ii(this,a,this.X,this.bb);this.Oc=!1};
function Ii(a,b,c,d){if(c==3&&b.h&&!b.j)for(;a&&a.uc;a=a.parent_)a.uc=!1;if(b.child)b.child.parent_=null,Mi(b,c,d);else try{b.j?b.i.call(b.context):Mi(b,c,d)}catch(e){Ni.call(null,e)}ki(zi,b)}
function Mi(a,b,c){b==2?a.i.call(a.context,c):a.h&&a.h.call(a.context,c)}
function Li(a,b){a.uc=!0;ri(function(){a.uc&&Ni.call(null,b)})}
var Ni=Tc;function Fi(a){eb.call(this,a)}
Za(Fi,eb);Fi.prototype.name="cancel";function Oi(a,b){fi.call(this);this.j=a||1;this.h=b||D;this.o=Va(this.yf,this);this.u=Xa()}
Za(Oi,fi);p=Oi.prototype;p.enabled=!1;p.Ea=null;p.setInterval=function(a){this.j=a;this.Ea&&this.enabled?(this.stop(),this.start()):this.Ea&&this.stop()};
p.yf=function(){if(this.enabled){var a=Xa()-this.u;a>0&&a<this.j*.8?this.Ea=this.h.setTimeout(this.o,this.j-a):(this.Ea&&(this.h.clearTimeout(this.Ea),this.Ea=null),gi(this,"tick"),this.enabled&&(this.stop(),this.start()))}};
p.start=function(){this.enabled=!0;this.Ea||(this.Ea=this.h.setTimeout(this.o,this.j),this.u=Xa())};
p.stop=function(){this.enabled=!1;this.Ea&&(this.h.clearTimeout(this.Ea),this.Ea=null)};
p.ba=function(){Oi.Aa.ba.call(this);this.stop();delete this.h};function Pi(a){I.call(this);this.G=a;this.j=0;this.o=100;this.u=!1;this.i=new Map;this.A=new Set;this.flushInterval=3E4;this.h=new Oi(this.flushInterval);this.h.listen("tick",this.Gc,!1,this);xc(this,this.h)}
v(Pi,I);p=Pi.prototype;p.sendIsolatedPayload=function(a){this.u=a;this.o=1};
function Qi(a){a.h.enabled||a.h.start();a.j++;a.j>=a.o&&a.Gc()}
p.Gc=function(){var a=this.i.values();a=[].concat(A(a)).filter(function(b){return b.h.size});
a.length&&this.G.flush(a,this.u);Ri(a);this.j=0;this.h.enabled&&this.h.stop()};
p.Mb=function(a){var b=C.apply(1,arguments);this.i.has(a)||this.i.set(a,new Gh(a,b))};
p.Kc=function(a){var b=C.apply(1,arguments);this.i.has(a)||this.i.set(a,new Hh(a,b))};
function Si(a,b){return a.A.has(b)?void 0:a.i.get(b)}
p.Jb=function(a){this.Xd(a,1,C.apply(1,arguments))};
p.Xd=function(a,b){var c=C.apply(2,arguments),d=Si(this,a);d&&d instanceof Gh&&(d.j(b,c),Qi(this))};
p.record=function(a,b){var c=C.apply(2,arguments),d=Si(this,a);d&&d instanceof Hh&&(d.record(b,c),Qi(this))};
function Ri(a){for(var b=0;b<a.length;b++)a[b].clear()}
;function Ti(){}
Ti.prototype.serialize=function(a){var b=[];Ui(this,a,b);return b.join("")};
function Ui(a,b,c){if(b==null)c.push("null");else{if(typeof b=="object"){if(Array.isArray(b)){var d=b;b=d.length;c.push("[");for(var e="",f=0;f<b;f++)c.push(e),Ui(a,d[f],c),e=",";c.push("]");return}if(b instanceof String||b instanceof Number||b instanceof Boolean)b=b.valueOf();else{c.push("{");e="";for(d in b)Object.prototype.hasOwnProperty.call(b,d)&&(f=b[d],typeof f!="function"&&(c.push(e),Vi(d,c),c.push(":"),Ui(a,f,c),e=","));c.push("}");return}}switch(typeof b){case "string":Vi(b,c);break;case "number":c.push(isFinite(b)&&
!isNaN(b)?String(b):"null");break;case "boolean":c.push(String(b));break;case "function":c.push("null");break;default:throw Error("Unknown type: "+typeof b);}}}
var Wi={'"':'\\"',"\\":"\\\\","/":"\\/","\b":"\\b","\f":"\\f","\n":"\\n","\r":"\\r","\t":"\\t","\v":"\\u000b"},Xi=/\uffff/.test("\uffff")?/[\\"\x00-\x1f\x7f-\uffff]/g:/[\\"\x00-\x1f\x7f-\xff]/g;function Vi(a,b){b.push('"',a.replace(Xi,function(c){var d=Wi[c];d||(d="\\u"+(c.charCodeAt(0)|65536).toString(16).slice(1),Wi[c]=d);return d}),'"')}
;function Yi(){fi.call(this);this.headers=new Map;this.h=!1;this.K=null;this.o=this.Y="";this.j=this.U=this.A=this.M=!1;this.G=0;this.u=null;this.ma="";this.ha=!1}
Za(Yi,fi);var Zi=/^https?$/i,$i=["POST","PUT"],aj=[];function bj(a,b,c,d,e,f,g){var h=new Yi;aj.push(h);b&&h.listen("complete",b);bi(h,"ready",h.je);f&&(h.G=Math.max(0,f));g&&(h.ha=g);h.send(a,c,d,e)}
p=Yi.prototype;p.je=function(){this.dispose();Vb(aj,this)};
p.send=function(a,b,c,d){if(this.K)throw Error("[goog.net.XhrIo] Object is active with another request="+this.Y+"; newUri="+a);b=b?b.toUpperCase():"GET";this.Y=a;this.o="";this.M=!1;this.h=!0;this.K=new XMLHttpRequest;this.K.onreadystatechange=ii(Va(this.Fd,this));try{this.getStatus(),this.U=!0,this.K.open(b,String(a),!0),this.U=!1}catch(g){this.getStatus();cj(this,g);return}a=c||"";c=new Map(this.headers);if(d)if(Object.getPrototypeOf(d)===Object.prototype)for(var e in d)c.set(e,d[e]);else if(typeof d.keys===
"function"&&typeof d.get==="function"){e=y(d.keys());for(var f=e.next();!f.done;f=e.next())f=f.value,c.set(f,d.get(f))}else throw Error("Unknown input type for opt_headers: "+String(d));d=Array.from(c.keys()).find(function(g){return"content-type"==g.toLowerCase()});
e=D.FormData&&a instanceof D.FormData;!(Ob($i,b)>=0)||d||e||c.set("Content-Type","application/x-www-form-urlencoded;charset=utf-8");b=y(c);for(d=b.next();!d.done;d=b.next())c=y(d.value),d=c.next().value,c=c.next().value,this.K.setRequestHeader(d,c);this.ma&&(this.K.responseType=this.ma);"withCredentials"in this.K&&this.K.withCredentials!==this.ha&&(this.K.withCredentials=this.ha);try{this.u&&(clearTimeout(this.u),this.u=null),this.G>0&&(this.getStatus(),this.u=setTimeout(this.Af.bind(this),this.G)),
this.getStatus(),this.A=!0,this.K.send(a),this.A=!1}catch(g){this.getStatus(),cj(this,g)}};
p.Af=function(){typeof Ia!="undefined"&&this.K&&(this.o="Timed out after "+this.G+"ms, aborting",this.getStatus(),gi(this,"timeout"),this.abort(8))};
function cj(a,b){a.h=!1;a.K&&(a.j=!0,a.K.abort(),a.j=!1);a.o=b;dj(a);ej(a)}
function dj(a){a.M||(a.M=!0,gi(a,"complete"),gi(a,"error"))}
p.abort=function(){this.K&&this.h&&(this.getStatus(),this.h=!1,this.j=!0,this.K.abort(),this.j=!1,gi(this,"complete"),gi(this,"abort"),ej(this))};
p.ba=function(){this.K&&(this.h&&(this.h=!1,this.j=!0,this.K.abort(),this.j=!1),ej(this,!0));Yi.Aa.ba.call(this)};
p.Fd=function(){this.ea||(this.U||this.A||this.j?fj(this):this.Re())};
p.Re=function(){fj(this)};
function fj(a){if(a.h&&typeof Ia!="undefined")if(a.A&&(a.K?a.K.readyState:0)==4)setTimeout(a.Fd.bind(a),0);else if(gi(a,"readystatechange"),a.isComplete()){a.getStatus();a.h=!1;try{if(gj(a))gi(a,"complete"),gi(a,"success");else{try{var b=(a.K?a.K.readyState:0)>2?a.K.statusText:""}catch(c){b=""}a.o=b+" ["+a.getStatus()+"]";dj(a)}}finally{ej(a)}}}
function ej(a,b){if(a.K){a.u&&(clearTimeout(a.u),a.u=null);var c=a.K;a.K=null;b||gi(a,"ready");try{c.onreadystatechange=null}catch(d){}}}
p.isActive=function(){return!!this.K};
p.isComplete=function(){return(this.K?this.K.readyState:0)==4};
function gj(a){var b=a.getStatus();a:switch(b){case 200:case 201:case 202:case 204:case 206:case 304:case 1223:var c=!0;break a;default:c=!1}if(!c){if(b=b===0)a=String(a.Y).match(fc)[1]||null,!a&&D.self&&D.self.location&&(a=D.self.location.protocol.slice(0,-1)),b=!Zi.test(a?a.toLowerCase():"");c=b}return c}
p.getStatus=function(){try{return(this.K?this.K.readyState:0)>2?this.K.status:-1}catch(a){return-1}};
p.getLastError=function(){return typeof this.o==="string"?this.o:String(this.o)};function hj(){}
hj.prototype.send=function(a,b,c){b=b===void 0?function(){}:b;
c=c===void 0?function(){}:c;
bj(a.url,function(d){d=d.target;if(gj(d)){try{var e=d.K?d.K.responseText:""}catch(f){e=""}b(e)}else c(d.getStatus())},a.requestType,a.body,a.Ec,a.timeoutMillis,a.withCredentials)};
hj.prototype.sc=function(){return 1};function ij(a,b){this.logger=a;this.event=b;this.startTime=jj()}
ij.prototype.done=function(){this.logger.Wb(this.event,jj()-this.startTime)};
function kj(){Ic.apply(this,arguments)}
v(kj,Ic);function lj(a,b){var c=jj();b=b();a.Wb("n",jj()-c);return b}
function mj(){kj.apply(this,arguments)}
v(mj,kj);p=mj.prototype;p.Vc=function(){};
p.Db=function(){};
p.Wb=function(){};
p.Ha=function(){};
p.Dc=function(){};
function nj(a,b,c,d,e){a=zh(xh(uh(new th(1828,"0"),a),new hj));b.length&&yh(a,Uf(new Tf,b));d!==void 0&&(a.Va=d);e&&a.Nc();var f=new Bh(1828,"","",!1,"",Ah(a));xc(f,a);var g=new Pi({flush:function(h){try{f.flush(h)}catch(k){c(k)}}});
g.addOnDisposeCallback(function(){setTimeout(function(){try{g.Gc()}finally{f.dispose()}})});
g.o=1E5;g.flushInterval=3E4;g.h.setInterval(3E4);return g}
function oj(a,b){I.call(this);var c=this;this.callback=a;this.i=b;this.h=-b;this.addOnDisposeCallback(function(){return void clearTimeout(c.timer)})}
v(oj,I);function pj(a){if(a.timer===void 0){var b=Math.max(0,a.h+a.i-jj());a.timer=setTimeout(function(){try{a.callback()}finally{a.h=jj(),a.timer=void 0}},b)}}
function qj(a,b){kj.call(this);this.metrics=a;this.Da=b}
v(qj,kj);qj.prototype.Vc=function(a){this.metrics.wf.record(a,this.Da)};
qj.prototype.Db=function(a){this.metrics.eventCount.kb(a,this.Da)};
qj.prototype.Wb=function(a,b){this.metrics.se.record(b,a,this.Da)};
qj.prototype.Ha=function(a){this.metrics.errorCount.kb(a,this.Da)};
function rj(a,b){b=b===void 0?[]:b;var c={Da:a.Da||"_",Pc:a.Pc||[],Uc:a.Uc|0,Va:a.Va,disableClearcutCredentialBinding:a.disableClearcutCredentialBinding,yc:a.yc||function(){},
dc:a.dc||function(f,g){return nj(f,g,c.yc,c.Va,c.disableClearcutCredentialBinding)}},d=c.dc("50",c.Pc.concat(b));
qj.call(this,{wf:new Lc(d),errorCount:new Pc(d),eventCount:new Nc(d),se:new Oc(d),li:new Mc(d),ni:new Qc(d),Ch:new Rc(d),mi:new Sc(d)},c.Da);var e=this;this.options=c;this.service=d;this.j=!a.dc;this.h=new oj(function(){return void e.service.Gc()},c.Uc);
this.addOnDisposeCallback(function(){e.h.dispose();e.j&&e.service.dispose()});
b.slice().sort(Yb)}
v(rj,qj);rj.prototype.Dc=function(){pj(this.h)};
function jj(){var a,b,c;return(c=(a=globalThis.performance)==null?void 0:(b=a.now)==null?void 0:b.call(a))!=null?c:Date.now()}
;function sj(a){this.F=L(a)}
v(sj,M);function tj(a){this.F=L(a)}
v(tj,M);function uj(a){this.F=L(a,0,"bfkj")}
v(uj,M);var vj=function(a){return de(function(b){return b instanceof a&&!$d(b)})}(uj);
uj.Pe="bfkj";function wj(a){this.F=L(a)}
v(wj,M);function Ec(a){this.F=L(a)}
v(Ec,M);function xj(a){this.F=L(a)}
v(xj,M);var yj=Sf(xj);function zj(){var a=this;this.promise=new Promise(function(b,c){a.resolve=b;a.reject=c})}
;function Aj(a,b){if(a.disable)return new mj;var c=b?Cc(b):[],d=a.Da,e=a.Ih,f=a.Uh,g=a.Va,h=a.yc;a=a.dc;b=b==null?void 0:Ff(b,wj,11);var k=k===void 0?50:k;b=(b==null?void 0:Fc(b,1))||0;d={Da:d,Pc:e,Uc:f,Va:g,yc:h,dc:a,disableClearcutCredentialBinding:b>0&&k>=b};c=c===void 0?[]:c;return new rj(d,c)}
function Bj(a){function b(w,x,z,G){Promise.resolve().then(function(){k.done();h.Dc();h.dispose();g.resolve({ce:w,uf:x,Ve:z,Eh:G})})}
function c(w,x,z,G){if(!d.logger.ea){var H="k";x?H="h":z&&(H="u");H!=="k"?G!==0&&(d.logger.Db(H),d.logger.Wb(H,w)):d.i<=0?(d.logger.Db(H),d.logger.Wb(H,w),d.i=Math.floor(Math.random()*200)):d.i--}}
I.call(this);var d=this;this.i=Math.floor(Math.random()*200);this.h=new xj;if("challenge"in a&&vj(a.challenge)){var e=Jf(a.challenge,4,void 0,ce);var f=Jf(a.challenge,5,void 0,ce);Jf(a.challenge,7,void 0,ce)&&(this.h=yj(Jf(a.challenge,7,void 0,ce)))}else e=a.program,f=a.globalName;this.addOnDisposeCallback(function(){var w,x,z;return B(function(G){if(G.h==1)return G.yield(d.j,2);w=G.i;x=w.uf;(z=x)==null||z();G.h=0})});
this.logger=Aj(a.Dd||{},this.h);xc(this,this.logger);var g=new zj;this.j=g.promise;this.logger.Db("t");var h=this.logger.share(),k=new ij(h,"t");if(!D[f])throw this.logger.Ha(25),Error("EGOU");if(!D[f].a)throw this.logger.Ha(26),Error("ELIU");try{var l=D[f].a;f=[];for(var m=[],n=Cc(this.h),r=0;r<n.length;r++)f.push(n[r]),m.push(1);var t=Gc(this.h);for(n=0;n<t.length;n++)f.push(t[n]),m.push(2);this.u=y(l(e,b,!0,a.ki,c,[f,m],Jf(this.h,5))).next().value;this.hd=g.promise.then(function(){})}catch(w){throw this.logger.Ha(28),
w;
}}
v(Bj,I);Bj.prototype.snapshot=function(a){if(this.ea)throw Error("Already disposed");this.logger.Db("n");var b=this.logger.share();return this.j.then(function(c){var d=c.ce;return new Promise(function(e){var f=new ij(b,"n");d(function(g){f.done();b.Vc(g.length);b.Dc();b.dispose();e(g)},[a.Pb,
a.kd,a.Gf,a.ld])})})};
Bj.prototype.Od=function(a){var b=this;if(this.ea)throw Error("Already disposed");this.logger.Db("n");var c=lj(this.logger,function(){return b.u([a.Pb,a.kd,a.Gf,a.ld])});
this.logger.Vc(c.length);this.logger.Dc();return c};
Bj.prototype.o=function(a){this.j.then(function(b){var c;(c=b.Ve)==null||c(a)})};function Cj(a){if(!a)return null;a=Xe(uf(a,4,void 0,tf));return a===null||a===void 0?null:lb(a)}
;function Dj(){this.promises={};this.h=null}
function Ej(){Dj.instance||(Dj.instance=new Dj);return Dj.instance}
function Fj(a,b){return Gj(a,Ff(b,sj,1,ce),Ff(b,tj,2,ce),Jf(b,3,void 0,ce))}
function Gj(a,b,c,d){if(!b&&!c)return Promise.resolve();if(!d)return Hj(b,c);var e;(e=a.promises)[d]||(e[d]=new Promise(function(f,g){Hj(b,c).then(function(){a.h=d;f()},function(h){delete a.promises[d];
g(h)})}));
return a.promises[d]}
function Hj(a,b){return b?Ij(b):a?Jj(a):Promise.resolve()}
function Ij(a){return new Promise(function(b,c){var d=Ig("SCRIPT"),e=Cj(a);Ib(d,e);d.onload=function(){Jg(d);b()};
d.onerror=function(){Jg(d);c(Error("EWLS"))};
(document.getElementsByTagName("HEAD")[0]||document.documentElement).appendChild(d)})}
function Jj(a){return new Promise(function(b){var c=Ig("SCRIPT");if(a){var d=Xe(uf(a,6,void 0,tf));d=d===null||d===void 0?null:Fb(d)}else d=null;c.textContent=Gb(d);Hb(c);(document.getElementsByTagName("HEAD")[0]||document.documentElement).appendChild(c);Jg(c);b()})}
;var Kj=window;function Lj(a){var b=Mj;if(b)for(var c in b)Object.prototype.hasOwnProperty.call(b,c)&&a(b[c],c,b)}
function Nj(){var a=[];Lj(function(b){a.push(b)});
return a}
var Mj={Hf:"allow-forms",If:"allow-modals",Jf:"allow-orientation-lock",Kf:"allow-pointer-lock",Lf:"allow-popups",Mf:"allow-popups-to-escape-sandbox",Nf:"allow-presentation",Of:"allow-same-origin",Pf:"allow-scripts",Qf:"allow-top-navigation",Rf:"allow-top-navigation-by-user-activation"},Oj=vi(function(){return Nj()});
function Pj(){var a=Qj(),b={};Pb(Oj(),function(c){a.sandbox&&a.sandbox.supports&&a.sandbox.supports(c)&&(b[c]=!0)});
return b}
function Qj(){var a=a===void 0?document:a;return a.createElement("iframe")}
;function Rj(a){typeof a=="number"&&(a=Math.round(a)+"px");return a}
;var Sj=(new Date).getTime();function Tj(a){fi.call(this);var b=this;this.A=this.j=0;this.Ca=a!=null?a:{pa:function(e,f){return setTimeout(e,f)},
qa:function(e){clearTimeout(e)}};
var c,d;this.h=(d=(c=window.navigator)==null?void 0:c.onLine)!=null?d:!0;this.o=function(){return B(function(e){return e.yield(Uj(b),0)})};
window.addEventListener("offline",this.o);window.addEventListener("online",this.o);this.A||Vj(this)}
v(Tj,fi);function Wj(){var a=Xj;Tj.instance||(Tj.instance=new Tj(a));return Tj.instance}
Tj.prototype.dispose=function(){window.removeEventListener("offline",this.o);window.removeEventListener("online",this.o);this.Ca.qa(this.A);delete Tj.instance};
Tj.prototype.ta=function(){return this.h};
function Vj(a){a.A=a.Ca.pa(function(){var b;return B(function(c){if(c.h==1)return a.h?((b=window.navigator)==null?0:b.onLine)?c.B(3):c.yield(Uj(a),3):c.yield(Uj(a),3);Vj(a);c.h=0})},3E4)}
function Uj(a,b){return a.u?a.u:a.u=new Promise(function(c){var d,e,f,g;return B(function(h){switch(h.h){case 1:return d=window.AbortController?new window.AbortController:void 0,f=(e=d)==null?void 0:e.signal,g=!1,wa(h,2,3),d&&(a.j=a.Ca.pa(function(){d.abort()},b||2E4)),h.yield(fetch("/generate_204",{method:"HEAD",
signal:f}),5);case 5:g=!0;case 3:h.M=[h.j];h.H=0;h.o=0;a.u=void 0;a.j&&(a.Ca.qa(a.j),a.j=0);g!==a.h&&(a.h=g,a.h?gi(a,"networkstatus-online"):gi(a,"networkstatus-offline"));c(g);za(h);break;case 2:ya(h),g=!1,h.B(3)}})})}
;function Yj(){this.data=[];this.h=-1}
Yj.prototype.set=function(a,b){b=b===void 0?!0:b;0<=a&&a<52&&Number.isInteger(a)&&this.data[a]!==b&&(this.data[a]=b,this.h=-1)};
Yj.prototype.get=function(a){return!!this.data[a]};
function Zj(a){a.h===-1&&(a.h=a.data.reduce(function(b,c,d){return b+(c?Math.pow(2,d):0)},0));
return a.h}
;function ak(){this.blockSize=-1}
;function bk(){this.blockSize=-1;this.blockSize=64;this.h=[];this.u=[];this.H=[];this.j=[];this.j[0]=128;for(var a=1;a<this.blockSize;++a)this.j[a]=0;this.o=this.i=0;this.reset()}
Za(bk,ak);bk.prototype.reset=function(){this.h[0]=1732584193;this.h[1]=4023233417;this.h[2]=2562383102;this.h[3]=271733878;this.h[4]=3285377520;this.o=this.i=0};
function ck(a,b,c){c||(c=0);var d=a.H;if(typeof b==="string")for(var e=0;e<16;e++)d[e]=b.charCodeAt(c)<<24|b.charCodeAt(c+1)<<16|b.charCodeAt(c+2)<<8|b.charCodeAt(c+3),c+=4;else for(e=0;e<16;e++)d[e]=b[c]<<24|b[c+1]<<16|b[c+2]<<8|b[c+3],c+=4;for(b=16;b<80;b++)c=d[b-3]^d[b-8]^d[b-14]^d[b-16],d[b]=(c<<1|c>>>31)&4294967295;b=a.h[0];c=a.h[1];e=a.h[2];for(var f=a.h[3],g=a.h[4],h,k,l=0;l<80;l++)l<40?l<20?(h=f^c&(e^f),k=1518500249):(h=c^e^f,k=1859775393):l<60?(h=c&e|f&(c|e),k=2400959708):(h=c^e^f,k=3395469782),
h=(b<<5|b>>>27)+h+g+k+d[l]&4294967295,g=f,f=e,e=(c<<30|c>>>2)&4294967295,c=b,b=h;a.h[0]=a.h[0]+b&4294967295;a.h[1]=a.h[1]+c&4294967295;a.h[2]=a.h[2]+e&4294967295;a.h[3]=a.h[3]+f&4294967295;a.h[4]=a.h[4]+g&4294967295}
bk.prototype.update=function(a,b){if(a!=null){b===void 0&&(b=a.length);for(var c=b-this.blockSize,d=0,e=this.u,f=this.i;d<b;){if(f==0)for(;d<=c;)ck(this,a,d),d+=this.blockSize;if(typeof a==="string")for(;d<b;){if(e[f]=a.charCodeAt(d),++f,++d,f==this.blockSize){ck(this,e);f=0;break}}else for(;d<b;)if(e[f]=a[d],++f,++d,f==this.blockSize){ck(this,e);f=0;break}}this.i=f;this.o+=b}};
bk.prototype.digest=function(){var a=[],b=this.o*8;this.i<56?this.update(this.j,56-this.i):this.update(this.j,this.blockSize-(this.i-56));for(var c=this.blockSize-1;c>=56;c--)this.u[c]=b&255,b/=256;ck(this,this.u);for(c=b=0;c<5;c++)for(var d=24;d>=0;d-=8)a[b]=this.h[c]>>d&255,++b;return a};function dk(a){return typeof a.className=="string"?a.className:a.getAttribute&&a.getAttribute("class")||""}
function ek(a,b){typeof a.className=="string"?a.className=b:a.setAttribute&&a.setAttribute("class",b)}
function fk(a,b){a.classList?b=a.classList.contains(b):(a=a.classList?a.classList:dk(a).match(/\S+/g)||[],b=Ob(a,b)>=0);return b}
function gk(){var a=document.body;a.classList?a.classList.remove("inverted-hdpi"):fk(a,"inverted-hdpi")&&ek(a,Array.prototype.filter.call(a.classList?a.classList:dk(a).match(/\S+/g)||[],function(b){return b!="inverted-hdpi"}).join(" "))}
;function hk(){}
hk.prototype.next=function(){return ik};
var ik={done:!0,value:void 0};hk.prototype.tb=function(){return this};function jk(a){if(a instanceof kk||a instanceof lk||a instanceof mk)return a;if(typeof a.next=="function")return new kk(function(){return a});
if(typeof a[Symbol.iterator]=="function")return new kk(function(){return a[Symbol.iterator]()});
if(typeof a.tb=="function")return new kk(function(){return a.tb()});
throw Error("Not an iterator or iterable.");}
function kk(a){this.h=a}
kk.prototype.tb=function(){return new lk(this.h())};
kk.prototype[Symbol.iterator]=function(){return new mk(this.h())};
kk.prototype.i=function(){return new mk(this.h())};
function lk(a){this.h=a}
v(lk,hk);lk.prototype.next=function(){return this.h.next()};
lk.prototype[Symbol.iterator]=function(){return new mk(this.h)};
lk.prototype.i=function(){return new mk(this.h)};
function mk(a){kk.call(this,function(){return a});
this.j=a}
v(mk,kk);mk.prototype.next=function(){return this.j.next()};function N(a){I.call(this);this.u=1;this.j=[];this.o=0;this.h=[];this.i={};this.A=!!a}
Za(N,I);p=N.prototype;p.subscribe=function(a,b,c){var d=this.i[a];d||(d=this.i[a]=[]);var e=this.u;this.h[e]=a;this.h[e+1]=b;this.h[e+2]=c;this.u=e+3;d.push(e);return e};
p.unsubscribe=function(a,b,c){if(a=this.i[a]){var d=this.h;if(a=a.find(function(e){return d[e+1]==b&&d[e+2]==c}))return this.fc(a)}return!1};
p.fc=function(a){var b=this.h[a];if(b){var c=this.i[b];this.o!=0?(this.j.push(a),this.h[a+1]=function(){}):(c&&Vb(c,a),delete this.h[a],delete this.h[a+1],delete this.h[a+2])}return!!b};
p.sb=function(a,b){var c=this.i[a];if(c){var d=Array(arguments.length-1),e=arguments.length,f;for(f=1;f<e;f++)d[f-1]=arguments[f];if(this.A)for(f=0;f<c.length;f++)e=c[f],nk(this.h[e+1],this.h[e+2],d);else{this.o++;try{for(f=0,e=c.length;f<e&&!this.ea;f++){var g=c[f];this.h[g+1].apply(this.h[g+2],d)}}finally{if(this.o--,this.j.length>0&&this.o==0)for(;c=this.j.pop();)this.fc(c)}}return f!=0}return!1};
function nk(a,b,c){ri(function(){a.apply(b,c)})}
p.clear=function(a){if(a){var b=this.i[a];b&&(b.forEach(this.fc,this),delete this.i[a])}else this.h.length=0,this.i={}};
p.ba=function(){N.Aa.ba.call(this);this.clear();this.j.length=0};function ok(a){this.h=a}
ok.prototype.set=function(a,b){b===void 0?this.h.remove(a):this.h.set(a,(new Ti).serialize(b))};
ok.prototype.get=function(a){try{var b=this.h.get(a)}catch(c){return}if(b!==null)try{return JSON.parse(b)}catch(c){throw"Storage: Invalid value was encountered";}};
ok.prototype.remove=function(a){this.h.remove(a)};function pk(a){this.h=a}
Za(pk,ok);function qk(a){this.data=a}
function rk(a){return a===void 0||a instanceof qk?a:new qk(a)}
pk.prototype.set=function(a,b){pk.Aa.set.call(this,a,rk(b))};
pk.prototype.i=function(a){a=pk.Aa.get.call(this,a);if(a===void 0||a instanceof Object)return a;throw"Storage: Invalid value was encountered";};
pk.prototype.get=function(a){if(a=this.i(a)){if(a=a.data,a===void 0)throw"Storage: Invalid value was encountered";}else a=void 0;return a};function sk(a){this.h=a}
Za(sk,pk);sk.prototype.set=function(a,b,c){if(b=rk(b)){if(c){if(c<Xa()){sk.prototype.remove.call(this,a);return}b.expiration=c}b.creation=Xa()}sk.Aa.set.call(this,a,b)};
sk.prototype.i=function(a){var b=sk.Aa.i.call(this,a);if(b){var c=b.creation,d=b.expiration;if(d&&d<Xa()||c&&c>Xa())sk.prototype.remove.call(this,a);else return b}};function tk(){}
;function uk(){}
Za(uk,tk);uk.prototype[Symbol.iterator]=function(){return jk(this.tb(!0)).i()};
uk.prototype.clear=function(){var a=Array.from(this);a=y(a);for(var b=a.next();!b.done;b=a.next())this.remove(b.value)};function vk(a){this.h=a;this.i=null}
Za(vk,uk);p=vk.prototype;p.isAvailable=function(){if(this.i===null){var a=this.h;if(a)try{a.setItem("__sak","1");a.removeItem("__sak");var b=!0}catch(c){b=c instanceof DOMException&&(c.name==="QuotaExceededError"||c.code===22||c.code===1014||c.name==="NS_ERROR_DOM_QUOTA_REACHED")&&a&&a.length!==0}else b=!1;this.i=b}return this.i};
p.set=function(a,b){wk(this);try{this.h.setItem(a,b)}catch(c){if(this.h.length==0)throw"Storage mechanism: Storage disabled";throw"Storage mechanism: Quota exceeded";}};
p.get=function(a){wk(this);a=this.h.getItem(a);if(typeof a!=="string"&&a!==null)throw"Storage mechanism: Invalid value was encountered";return a};
p.remove=function(a){wk(this);this.h.removeItem(a)};
p.tb=function(a){wk(this);var b=0,c=this.h,d=new hk;d.next=function(){if(b>=c.length)return ik;var e=c.key(b++);if(a)return{value:e,done:!1};e=c.getItem(e);if(typeof e!=="string")throw"Storage mechanism: Invalid value was encountered";return{value:e,done:!1}};
return d};
p.clear=function(){wk(this);this.h.clear()};
p.key=function(a){wk(this);return this.h.key(a)};
function wk(a){if(a.h==null)throw Error("Storage mechanism: Storage unavailable");a.isAvailable()||Tc(Error("Storage mechanism: Storage unavailable"))}
;function xk(){var a=null;try{a=D.localStorage||null}catch(b){}vk.call(this,a)}
Za(xk,vk);function yk(a,b){this.i=a;this.h=b+"::"}
Za(yk,uk);yk.prototype.set=function(a,b){this.i.set(this.h+a,b)};
yk.prototype.get=function(a){return this.i.get(this.h+a)};
yk.prototype.remove=function(a){this.i.remove(this.h+a)};
yk.prototype.tb=function(a){var b=this.i[Symbol.iterator](),c=this,d=new hk;d.next=function(){var e=b.next();if(e.done)return e;for(e=e.value;e.slice(0,c.h.length)!=c.h;){e=b.next();if(e.done)return e;e=e.value}return{value:a?e.slice(c.h.length):c.i.get(e),done:!1}};
return d};function zk(a){if(a.Wa&&typeof a.Wa=="function")return a.Wa();if(typeof Map!=="undefined"&&a instanceof Map||typeof Set!=="undefined"&&a instanceof Set)return Array.from(a.values());if(typeof a==="string")return a.split("");if(La(a)){for(var b=[],c=a.length,d=0;d<c;d++)b.push(a[d]);return b}return ug(a)}
function Ak(a){if(a.Tb&&typeof a.Tb=="function")return a.Tb();if(!a.Wa||typeof a.Wa!="function"){if(typeof Map!=="undefined"&&a instanceof Map)return Array.from(a.keys());if(!(typeof Set!=="undefined"&&a instanceof Set)){if(La(a)||typeof a==="string"){var b=[];a=a.length;for(var c=0;c<a;c++)b.push(c);return b}b=[];c=0;for(var d in a)b[c++]=d;return b}}}
function Bk(a,b,c){if(a.forEach&&typeof a.forEach=="function")a.forEach(b,c);else if(La(a)||typeof a==="string")Array.prototype.forEach.call(a,b,c);else for(var d=Ak(a),e=zk(a),f=e.length,g=0;g<f;g++)b.call(c,e[g],d&&d[g],a)}
;function Ck(a){this.i=this.A=this.j="";this.G=null;this.u=this.h="";this.o=!1;var b;a instanceof Ck?(this.o=a.o,Dk(this,a.j),this.A=a.A,this.i=a.i,Ek(this,a.G),this.h=a.h,Fk(this,a.H.clone()),this.u=a.u):a&&(b=String(a).match(fc))?(this.o=!1,Dk(this,b[1]||"",!0),this.A=Gk(b[2]||""),this.i=Gk(b[3]||"",!0),Ek(this,b[4]),this.h=Gk(b[5]||"",!0),Fk(this,b[6]||"",!0),this.u=Gk(b[7]||"")):(this.o=!1,this.H=new Hk(null,this.o))}
Ck.prototype.toString=function(){var a=[],b=this.j;b&&a.push(Ik(b,Jk,!0),":");var c=this.i;if(c||b=="file")a.push("//"),(b=this.A)&&a.push(Ik(b,Jk,!0),"@"),a.push(encodeURIComponent(String(c)).replace(/%25([0-9a-fA-F]{2})/g,"%$1")),c=this.G,c!=null&&a.push(":",String(c));if(c=this.h)this.i&&c.charAt(0)!="/"&&a.push("/"),a.push(Ik(c,c.charAt(0)=="/"?Kk:Lk,!0));(c=this.H.toString())&&a.push("?",c);(c=this.u)&&a.push("#",Ik(c,Mk));return a.join("")};
Ck.prototype.resolve=function(a){var b=this.clone(),c=!!a.j;c?Dk(b,a.j):c=!!a.A;c?b.A=a.A:c=!!a.i;c?b.i=a.i:c=a.G!=null;var d=a.h;if(c)Ek(b,a.G);else if(c=!!a.h){if(d.charAt(0)!="/")if(this.i&&!this.h)d="/"+d;else{var e=b.h.lastIndexOf("/");e!=-1&&(d=b.h.slice(0,e+1)+d)}e=d;if(e==".."||e==".")d="";else if(e.indexOf("./")!=-1||e.indexOf("/.")!=-1){d=e.lastIndexOf("/",0)==0;e=e.split("/");for(var f=[],g=0;g<e.length;){var h=e[g++];h=="."?d&&g==e.length&&f.push(""):h==".."?((f.length>1||f.length==1&&
f[0]!="")&&f.pop(),d&&g==e.length&&f.push("")):(f.push(h),d=!0)}d=f.join("/")}else d=e}c?b.h=d:c=a.H.toString()!=="";c?Fk(b,a.H.clone()):c=!!a.u;c&&(b.u=a.u);return b};
Ck.prototype.clone=function(){return new Ck(this)};
function Dk(a,b,c){a.j=c?Gk(b,!0):b;a.j&&(a.j=a.j.replace(/:$/,""))}
function Ek(a,b){if(b){b=Number(b);if(isNaN(b)||b<0)throw Error("Bad port number "+b);a.G=b}else a.G=null}
function Fk(a,b,c){b instanceof Hk?(a.H=b,Nk(a.H,a.o)):(c||(b=Ik(b,Ok)),a.H=new Hk(b,a.o))}
function Gk(a,b){return a?b?decodeURI(a.replace(/%25/g,"%2525")):decodeURIComponent(a):""}
function Ik(a,b,c){return typeof a==="string"?(a=encodeURI(a).replace(b,Pk),c&&(a=a.replace(/%25([0-9a-fA-F]{2})/g,"%$1")),a):null}
function Pk(a){a=a.charCodeAt(0);return"%"+(a>>4&15).toString(16)+(a&15).toString(16)}
var Jk=/[#\/\?@]/g,Lk=/[#\?:]/g,Kk=/[#\?]/g,Ok=/[#\?@]/g,Mk=/#/g;function Hk(a,b){this.i=this.h=null;this.j=a||null;this.o=!!b}
function Qk(a){a.h||(a.h=new Map,a.i=0,a.j&&mc(a.j,function(b,c){a.add(dc(b),c)}))}
p=Hk.prototype;p.add=function(a,b){Qk(this);this.j=null;a=Rk(this,a);var c=this.h.get(a);c||this.h.set(a,c=[]);c.push(b);this.i=this.i+1;return this};
p.remove=function(a){Qk(this);a=Rk(this,a);return this.h.has(a)?(this.j=null,this.i=this.i-this.h.get(a).length,this.h.delete(a)):!1};
p.clear=function(){this.h=this.j=null;this.i=0};
function Sk(a,b){Qk(a);b=Rk(a,b);return a.h.has(b)}
p.forEach=function(a,b){Qk(this);this.h.forEach(function(c,d){c.forEach(function(e){a.call(b,e,d,this)},this)},this)};
p.Tb=function(){Qk(this);for(var a=Array.from(this.h.values()),b=Array.from(this.h.keys()),c=[],d=0;d<b.length;d++)for(var e=a[d],f=0;f<e.length;f++)c.push(b[d]);return c};
p.Wa=function(a){Qk(this);var b=[];if(typeof a==="string")Sk(this,a)&&(b=b.concat(this.h.get(Rk(this,a))));else{a=Array.from(this.h.values());for(var c=0;c<a.length;c++)b=b.concat(a[c])}return b};
p.set=function(a,b){Qk(this);this.j=null;a=Rk(this,a);Sk(this,a)&&(this.i=this.i-this.h.get(a).length);this.h.set(a,[b]);this.i=this.i+1;return this};
p.get=function(a,b){if(!a)return b;a=this.Wa(a);return a.length>0?String(a[0]):b};
p.toString=function(){if(this.j)return this.j;if(!this.h)return"";for(var a=[],b=Array.from(this.h.keys()),c=0;c<b.length;c++){var d=b[c],e=encodeURIComponent(String(d));d=this.Wa(d);for(var f=0;f<d.length;f++){var g=e;d[f]!==""&&(g+="="+encodeURIComponent(String(d[f])));a.push(g)}}return this.j=a.join("&")};
p.clone=function(){var a=new Hk;a.j=this.j;this.h&&(a.h=new Map(this.h),a.i=this.i);return a};
function Rk(a,b){b=String(b);a.o&&(b=b.toLowerCase());return b}
function Nk(a,b){b&&!a.o&&(Qk(a),a.j=null,a.h.forEach(function(c,d){var e=d.toLowerCase();d!=e&&(this.remove(d),this.remove(e),c.length>0&&(this.j=null,this.h.set(Rk(this,e),Wb(c)),this.i=this.i+c.length))},a));
a.o=b}
p.extend=function(a){for(var b=0;b<arguments.length;b++)Bk(arguments[b],function(c,d){this.add(d,c)},this)};/*

 (The MIT License)

 Copyright (C) 2014 by Vitaly Puzrin

 Permission is hereby granted, free of charge, to any person obtaining a copy
 of this software and associated documentation files (the "Software"), to deal
 in the Software without restriction, including without limitation the rights
 to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 copies of the Software, and to permit persons to whom the Software is
 furnished to do so, subject to the following conditions:

 The above copyright notice and this permission notice shall be included in
 all copies or substantial portions of the Software.

 THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 THE SOFTWARE.

 -----------------------------------------------------------------------------
 Ported from zlib, which is under the following license
 https://github.com/madler/zlib/blob/master/zlib.h

 zlib.h -- interface of the 'zlib' general purpose compression library
   version 1.2.8, April 28th, 2013
   Copyright (C) 1995-2013 Jean-loup Gailly and Mark Adler
   This software is provided 'as-is', without any express or implied
   warranty.  In no event will the authors be held liable for any damages
   arising from the use of this software.
   Permission is granted to anyone to use this software for any purpose,
   including commercial applications, and to alter it and redistribute it
   freely, subject to the following restrictions:
   1. The origin of this software must not be misrepresented; you must not
      claim that you wrote the original software. If you use this software
      in a product, an acknowledgment in the product documentation would be
      appreciated but is not required.
   2. Altered source versions must be plainly marked as such, and must not be
      misrepresented as being the original software.
   3. This notice may not be removed or altered from any source distribution.
   Jean-loup Gailly        Mark Adler
   jloup@gzip.org          madler@alumni.caltech.edu
   The data format used by the zlib library is described by RFCs (Request for
   Comments) 1950 to 1952 in the files http://tools.ietf.org/html/rfc1950
   (zlib format), rfc1951 (deflate format) and rfc1952 (gzip format).
*/
var O={},Tk=typeof Uint8Array!=="undefined"&&typeof Uint16Array!=="undefined"&&typeof Int32Array!=="undefined";O.assign=function(a){for(var b=Array.prototype.slice.call(arguments,1);b.length;){var c=b.shift();if(c){if(typeof c!=="object")throw new TypeError(c+"must be non-object");for(var d in c)Object.prototype.hasOwnProperty.call(c,d)&&(a[d]=c[d])}}return a};
O.jd=function(a,b){if(a.length===b)return a;if(a.subarray)return a.subarray(0,b);a.length=b;return a};
var Uk={ub:function(a,b,c,d,e){if(b.subarray&&a.subarray)a.set(b.subarray(c,c+d),e);else for(var f=0;f<d;f++)a[e+f]=b[c+f]},
wd:function(a){var b,c;var d=c=0;for(b=a.length;d<b;d++)c+=a[d].length;var e=new Uint8Array(c);d=c=0;for(b=a.length;d<b;d++){var f=a[d];e.set(f,c);c+=f.length}return e}},Vk={ub:function(a,b,c,d,e){for(var f=0;f<d;f++)a[e+f]=b[c+f]},
wd:function(a){return[].concat.apply([],a)}};
O.tf=function(){Tk?(O.rb=Uint8Array,O.Ja=Uint16Array,O.Wd=Int32Array,O.assign(O,Uk)):(O.rb=Array,O.Ja=Array,O.Wd=Array,O.assign(O,Vk))};
O.tf();var Wk=!0;try{new Uint8Array(1)}catch(a){Wk=!1}
function Xk(a){var b,c,d=a.length,e=0;for(b=0;b<d;b++){var f=a.charCodeAt(b);if((f&64512)===55296&&b+1<d){var g=a.charCodeAt(b+1);(g&64512)===56320&&(f=65536+(f-55296<<10)+(g-56320),b++)}e+=f<128?1:f<2048?2:f<65536?3:4}var h=new O.rb(e);for(b=c=0;c<e;b++)f=a.charCodeAt(b),(f&64512)===55296&&b+1<d&&(g=a.charCodeAt(b+1),(g&64512)===56320&&(f=65536+(f-55296<<10)+(g-56320),b++)),f<128?h[c++]=f:(f<2048?h[c++]=192|f>>>6:(f<65536?h[c++]=224|f>>>12:(h[c++]=240|f>>>18,h[c++]=128|f>>>12&63),h[c++]=128|f>>>
6&63),h[c++]=128|f&63);return h}
;var Yk={};Yk=function(a,b,c,d){var e=a&65535|0;a=a>>>16&65535|0;for(var f;c!==0;){f=c>2E3?2E3:c;c-=f;do e=e+b[d++]|0,a=a+e|0;while(--f);e%=65521;a%=65521}return e|a<<16|0};for(var Zk={},$k,al=[],bl=0;bl<256;bl++){$k=bl;for(var cl=0;cl<8;cl++)$k=$k&1?3988292384^$k>>>1:$k>>>1;al[bl]=$k}Zk=function(a,b,c,d){c=d+c;for(a^=-1;d<c;d++)a=a>>>8^al[(a^b[d])&255];return a^-1};var dl={};dl={2:"need dictionary",1:"stream end",0:"","-1":"file error","-2":"stream error","-3":"data error","-4":"insufficient memory","-5":"buffer error","-6":"incompatible version"};function el(a){for(var b=a.length;--b>=0;)a[b]=0}
var fl=[0,0,0,0,0,0,0,0,1,1,1,1,2,2,2,2,3,3,3,3,4,4,4,4,5,5,5,5,0],gl=[0,0,0,0,1,1,2,2,3,3,4,4,5,5,6,6,7,7,8,8,9,9,10,10,11,11,12,12,13,13],hl=[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,2,3,7],il=[16,17,18,0,8,7,9,6,10,5,11,4,12,3,13,2,14,1,15],jl=Array(576);el(jl);var kl=Array(60);el(kl);var ll=Array(512);el(ll);var ml=Array(256);el(ml);var nl=Array(29);el(nl);var ol=Array(30);el(ol);function pl(a,b,c,d,e){this.Pd=a;this.xe=b;this.we=c;this.pe=d;this.Oe=e;this.zd=a&&a.length}
var ql,rl,sl;function tl(a,b){this.vd=a;this.Fb=0;this.cb=b}
function ul(a,b){a.aa[a.pending++]=b&255;a.aa[a.pending++]=b>>>8&255}
function vl(a,b,c){a.ia>16-c?(a.oa|=b<<a.ia&65535,ul(a,a.oa),a.oa=b>>16-a.ia,a.ia+=c-16):(a.oa|=b<<a.ia&65535,a.ia+=c)}
function wl(a,b,c){vl(a,c[b*2],c[b*2+1])}
function xl(a,b){var c=0;do c|=a&1,a>>>=1,c<<=1;while(--b>0);return c>>>1}
function yl(a,b,c){var d=Array(16),e=0,f;for(f=1;f<=15;f++)d[f]=e=e+c[f-1]<<1;for(c=0;c<=b;c++)e=a[c*2+1],e!==0&&(a[c*2]=xl(d[e]++,e))}
function zl(a){var b;for(b=0;b<286;b++)a.ra[b*2]=0;for(b=0;b<30;b++)a.hb[b*2]=0;for(b=0;b<19;b++)a.ja[b*2]=0;a.ra[512]=1;a.Pa=a.Ib=0;a.ya=a.matches=0}
function Al(a){a.ia>8?ul(a,a.oa):a.ia>0&&(a.aa[a.pending++]=a.oa);a.oa=0;a.ia=0}
function Bl(a,b,c){Al(a);ul(a,c);ul(a,~c);O.ub(a.aa,a.window,b,c,a.pending);a.pending+=c}
function Cl(a,b,c,d){var e=b*2,f=c*2;return a[e]<a[f]||a[e]===a[f]&&d[b]<=d[c]}
function Dl(a,b,c){for(var d=a.da[c],e=c<<1;e<=a.Na;){e<a.Na&&Cl(b,a.da[e+1],a.da[e],a.depth)&&e++;if(Cl(b,d,a.da[e],a.depth))break;a.da[c]=a.da[e];c=e;e<<=1}a.da[c]=d}
function El(a,b,c){var d=0;if(a.ya!==0){do{var e=a.aa[a.Qb+d*2]<<8|a.aa[a.Qb+d*2+1];var f=a.aa[a.Tc+d];d++;if(e===0)wl(a,f,b);else{var g=ml[f];wl(a,g+256+1,b);var h=fl[g];h!==0&&(f-=nl[g],vl(a,f,h));e--;g=e<256?ll[e]:ll[256+(e>>>7)];wl(a,g,c);h=gl[g];h!==0&&(e-=ol[g],vl(a,e,h))}}while(d<a.ya)}wl(a,256,b)}
function Fl(a,b){var c=b.vd,d=b.cb.Pd,e=b.cb.zd,f=b.cb.pe,g,h=-1;a.Na=0;a.Ab=573;for(g=0;g<f;g++)c[g*2]!==0?(a.da[++a.Na]=h=g,a.depth[g]=0):c[g*2+1]=0;for(;a.Na<2;){var k=a.da[++a.Na]=h<2?++h:0;c[k*2]=1;a.depth[k]=0;a.Pa--;e&&(a.Ib-=d[k*2+1])}b.Fb=h;for(g=a.Na>>1;g>=1;g--)Dl(a,c,g);k=f;do g=a.da[1],a.da[1]=a.da[a.Na--],Dl(a,c,1),d=a.da[1],a.da[--a.Ab]=g,a.da[--a.Ab]=d,c[k*2]=c[g*2]+c[d*2],a.depth[k]=(a.depth[g]>=a.depth[d]?a.depth[g]:a.depth[d])+1,c[g*2+1]=c[d*2+1]=k,a.da[1]=k++,Dl(a,c,1);while(a.Na>=
2);a.da[--a.Ab]=a.da[1];g=b.vd;k=b.Fb;d=b.cb.Pd;e=b.cb.zd;f=b.cb.xe;var l=b.cb.we,m=b.cb.Oe,n,r=0;for(n=0;n<=15;n++)a.Ka[n]=0;g[a.da[a.Ab]*2+1]=0;for(b=a.Ab+1;b<573;b++){var t=a.da[b];n=g[g[t*2+1]*2+1]+1;n>m&&(n=m,r++);g[t*2+1]=n;if(!(t>k)){a.Ka[n]++;var w=0;t>=l&&(w=f[t-l]);var x=g[t*2];a.Pa+=x*(n+w);e&&(a.Ib+=x*(d[t*2+1]+w))}}if(r!==0){do{for(n=m-1;a.Ka[n]===0;)n--;a.Ka[n]--;a.Ka[n+1]+=2;a.Ka[m]--;r-=2}while(r>0);for(n=m;n!==0;n--)for(t=a.Ka[n];t!==0;)d=a.da[--b],d>k||(g[d*2+1]!==n&&(a.Pa+=(n-g[d*
2+1])*g[d*2],g[d*2+1]=n),t--)}yl(c,h,a.Ka)}
function Gl(a,b,c){var d,e=-1,f=b[1],g=0,h=7,k=4;f===0&&(h=138,k=3);b[(c+1)*2+1]=65535;for(d=0;d<=c;d++){var l=f;f=b[(d+1)*2+1];++g<h&&l===f||(g<k?a.ja[l*2]+=g:l!==0?(l!==e&&a.ja[l*2]++,a.ja[32]++):g<=10?a.ja[34]++:a.ja[36]++,g=0,e=l,f===0?(h=138,k=3):l===f?(h=6,k=3):(h=7,k=4))}}
function Hl(a,b,c){var d,e=-1,f=b[1],g=0,h=7,k=4;f===0&&(h=138,k=3);for(d=0;d<=c;d++){var l=f;f=b[(d+1)*2+1];if(!(++g<h&&l===f)){if(g<k){do wl(a,l,a.ja);while(--g!==0)}else l!==0?(l!==e&&(wl(a,l,a.ja),g--),wl(a,16,a.ja),vl(a,g-3,2)):g<=10?(wl(a,17,a.ja),vl(a,g-3,3)):(wl(a,18,a.ja),vl(a,g-11,7));g=0;e=l;f===0?(h=138,k=3):l===f?(h=6,k=3):(h=7,k=4)}}}
function Il(a){var b=4093624447,c;for(c=0;c<=31;c++,b>>>=1)if(b&1&&a.ra[c*2]!==0)return 0;if(a.ra[18]!==0||a.ra[20]!==0||a.ra[26]!==0)return 1;for(c=32;c<256;c++)if(a.ra[c*2]!==0)return 1;return 0}
var Jl=!1;function Kl(a,b,c){a.aa[a.Qb+a.ya*2]=b>>>8&255;a.aa[a.Qb+a.ya*2+1]=b&255;a.aa[a.Tc+a.ya]=c&255;a.ya++;b===0?a.ra[c*2]++:(a.matches++,b--,a.ra[(ml[c]+256+1)*2]++,a.hb[(b<256?ll[b]:ll[256+(b>>>7)])*2]++);return a.ya===a.Vb-1}
;function Ll(a,b){a.msg=dl[b];return b}
function Ml(a){for(var b=a.length;--b>=0;)a[b]=0}
function Nl(a){var b=a.state,c=b.pending;c>a.S&&(c=a.S);c!==0&&(O.ub(a.output,b.aa,b.Yb,c,a.Gb),a.Gb+=c,b.Yb+=c,a.md+=c,a.S-=c,b.pending-=c,b.pending===0&&(b.Yb=0))}
function Ol(a,b){var c=a.va>=0?a.va:-1,d=a.v-a.va,e=0;if(a.level>0){a.P.Mc===2&&(a.P.Mc=Il(a));Fl(a,a.xc);Fl(a,a.oc);Gl(a,a.ra,a.xc.Fb);Gl(a,a.hb,a.oc.Fb);Fl(a,a.td);for(e=18;e>=3&&a.ja[il[e]*2+1]===0;e--);a.Pa+=3*(e+1)+5+5+4;var f=a.Pa+3+7>>>3;var g=a.Ib+3+7>>>3;g<=f&&(f=g)}else f=g=d+5;if(d+4<=f&&c!==-1)vl(a,b?1:0,3),Bl(a,c,d);else if(a.strategy===4||g===f)vl(a,2+(b?1:0),3),El(a,jl,kl);else{vl(a,4+(b?1:0),3);c=a.xc.Fb+1;d=a.oc.Fb+1;e+=1;vl(a,c-257,5);vl(a,d-1,5);vl(a,e-4,4);for(f=0;f<e;f++)vl(a,
a.ja[il[f]*2+1],3);Hl(a,a.ra,c-1);Hl(a,a.hb,d-1);El(a,a.ra,a.hb)}zl(a);b&&Al(a);a.va=a.v;Nl(a.P)}
function P(a,b){a.aa[a.pending++]=b}
function Pl(a,b){a.aa[a.pending++]=b>>>8&255;a.aa[a.pending++]=b&255}
function Ql(a,b){var c=a.Cd,d=a.v,e=a.wa,f=a.Ed,g=a.v>a.la-262?a.v-(a.la-262):0,h=a.window,k=a.eb,l=a.Ia,m=a.v+258,n=h[d+e-1],r=h[d+e];a.wa>=a.yd&&(c>>=2);f>a.D&&(f=a.D);do{var t=b;if(h[t+e]===r&&h[t+e-1]===n&&h[t]===h[d]&&h[++t]===h[d+1]){d+=2;for(t++;h[++d]===h[++t]&&h[++d]===h[++t]&&h[++d]===h[++t]&&h[++d]===h[++t]&&h[++d]===h[++t]&&h[++d]===h[++t]&&h[++d]===h[++t]&&h[++d]===h[++t]&&d<m;);t=258-(m-d);d=m-258;if(t>e){a.Eb=b;e=t;if(t>=f)break;n=h[d+e-1];r=h[d+e]}}}while((b=l[b&k])>g&&--c!==0);return e<=
a.D?e:a.D}
function Rl(a){var b=a.la,c;do{var d=a.Ud-a.D-a.v;if(a.v>=b+(b-262)){O.ub(a.window,a.window,b,b,0);a.Eb-=b;a.v-=b;a.va-=b;var e=c=a.wc;do{var f=a.head[--e];a.head[e]=f>=b?f-b:0}while(--c);e=c=b;do f=a.Ia[--e],a.Ia[e]=f>=b?f-b:0;while(--c);d+=b}if(a.P.na===0)break;e=a.P;c=a.window;f=a.v+a.D;var g=e.na;g>d&&(g=d);g===0?c=0:(e.na-=g,O.ub(c,e.input,e.nb,g,f),e.state.wrap===1?e.J=Yk(e.J,c,g,f):e.state.wrap===2&&(e.J=Zk(e.J,c,g,f)),e.nb+=g,e.qb+=g,c=g);a.D+=c;if(a.D+a.sa>=3)for(d=a.v-a.sa,a.R=a.window[d],
a.R=(a.R<<a.Ma^a.window[d+1])&a.La;a.sa&&!(a.R=(a.R<<a.Ma^a.window[d+3-1])&a.La,a.Ia[d&a.eb]=a.head[a.R],a.head[a.R]=d,d++,a.sa--,a.D+a.sa<3););}while(a.D<262&&a.P.na!==0)}
function Sl(a,b){for(var c;;){if(a.D<262){Rl(a);if(a.D<262&&b===0)return 1;if(a.D===0)break}c=0;a.D>=3&&(a.R=(a.R<<a.Ma^a.window[a.v+3-1])&a.La,c=a.Ia[a.v&a.eb]=a.head[a.R],a.head[a.R]=a.v);c!==0&&a.v-c<=a.la-262&&(a.T=Ql(a,c));if(a.T>=3)if(c=Kl(a,a.v-a.Eb,a.T-3),a.D-=a.T,a.T<=a.Wc&&a.D>=3){a.T--;do a.v++,a.R=(a.R<<a.Ma^a.window[a.v+3-1])&a.La,a.Ia[a.v&a.eb]=a.head[a.R],a.head[a.R]=a.v;while(--a.T!==0);a.v++}else a.v+=a.T,a.T=0,a.R=a.window[a.v],a.R=(a.R<<a.Ma^a.window[a.v+1])&a.La;else c=Kl(a,0,
a.window[a.v]),a.D--,a.v++;if(c&&(Ol(a,!1),a.P.S===0))return 1}a.sa=a.v<2?a.v:2;return b===4?(Ol(a,!0),a.P.S===0?3:4):a.ya&&(Ol(a,!1),a.P.S===0)?1:2}
function Tl(a,b){for(var c,d;;){if(a.D<262){Rl(a);if(a.D<262&&b===0)return 1;if(a.D===0)break}c=0;a.D>=3&&(a.R=(a.R<<a.Ma^a.window[a.v+3-1])&a.La,c=a.Ia[a.v&a.eb]=a.head[a.R],a.head[a.R]=a.v);a.wa=a.T;a.Hd=a.Eb;a.T=2;c!==0&&a.wa<a.Wc&&a.v-c<=a.la-262&&(a.T=Ql(a,c),a.T<=5&&(a.strategy===1||a.T===3&&a.v-a.Eb>4096)&&(a.T=2));if(a.wa>=3&&a.T<=a.wa){d=a.v+a.D-3;c=Kl(a,a.v-1-a.Hd,a.wa-3);a.D-=a.wa-1;a.wa-=2;do++a.v<=d&&(a.R=(a.R<<a.Ma^a.window[a.v+3-1])&a.La,a.Ia[a.v&a.eb]=a.head[a.R],a.head[a.R]=a.v);
while(--a.wa!==0);a.lb=0;a.T=2;a.v++;if(c&&(Ol(a,!1),a.P.S===0))return 1}else if(a.lb){if((c=Kl(a,0,a.window[a.v-1]))&&Ol(a,!1),a.v++,a.D--,a.P.S===0)return 1}else a.lb=1,a.v++,a.D--}a.lb&&(Kl(a,0,a.window[a.v-1]),a.lb=0);a.sa=a.v<2?a.v:2;return b===4?(Ol(a,!0),a.P.S===0?3:4):a.ya&&(Ol(a,!1),a.P.S===0)?1:2}
function Ul(a,b){for(var c,d,e,f=a.window;;){if(a.D<=258){Rl(a);if(a.D<=258&&b===0)return 1;if(a.D===0)break}a.T=0;if(a.D>=3&&a.v>0&&(d=a.v-1,c=f[d],c===f[++d]&&c===f[++d]&&c===f[++d])){for(e=a.v+258;c===f[++d]&&c===f[++d]&&c===f[++d]&&c===f[++d]&&c===f[++d]&&c===f[++d]&&c===f[++d]&&c===f[++d]&&d<e;);a.T=258-(e-d);a.T>a.D&&(a.T=a.D)}a.T>=3?(c=Kl(a,1,a.T-3),a.D-=a.T,a.v+=a.T,a.T=0):(c=Kl(a,0,a.window[a.v]),a.D--,a.v++);if(c&&(Ol(a,!1),a.P.S===0))return 1}a.sa=0;return b===4?(Ol(a,!0),a.P.S===0?3:4):
a.ya&&(Ol(a,!1),a.P.S===0)?1:2}
function Vl(a,b){for(var c;;){if(a.D===0&&(Rl(a),a.D===0)){if(b===0)return 1;break}a.T=0;c=Kl(a,0,a.window[a.v]);a.D--;a.v++;if(c&&(Ol(a,!1),a.P.S===0))return 1}a.sa=0;return b===4?(Ol(a,!0),a.P.S===0?3:4):a.ya&&(Ol(a,!1),a.P.S===0)?1:2}
function Wl(a,b,c,d,e){this.Be=a;this.Ne=b;this.Qe=c;this.Me=d;this.ye=e}
var Xl;Xl=[new Wl(0,0,0,0,function(a,b){var c=65535;for(c>a.za-5&&(c=a.za-5);;){if(a.D<=1){Rl(a);if(a.D===0&&b===0)return 1;if(a.D===0)break}a.v+=a.D;a.D=0;var d=a.va+c;if(a.v===0||a.v>=d)if(a.D=a.v-d,a.v=d,Ol(a,!1),a.P.S===0)return 1;if(a.v-a.va>=a.la-262&&(Ol(a,!1),a.P.S===0))return 1}a.sa=0;if(b===4)return Ol(a,!0),a.P.S===0?3:4;a.v>a.va&&Ol(a,!1);return 1}),
new Wl(4,4,8,4,Sl),new Wl(4,5,16,8,Sl),new Wl(4,6,32,32,Sl),new Wl(4,4,16,16,Tl),new Wl(8,16,32,32,Tl),new Wl(8,16,128,128,Tl),new Wl(8,32,128,256,Tl),new Wl(32,128,258,1024,Tl),new Wl(32,258,258,4096,Tl)];
function Yl(){this.P=null;this.status=0;this.aa=null;this.wrap=this.pending=this.Yb=this.za=0;this.I=null;this.Ba=0;this.method=8;this.Cb=-1;this.eb=this.pd=this.la=0;this.window=null;this.Ud=0;this.head=this.Ia=null;this.Ed=this.yd=this.strategy=this.level=this.Wc=this.Cd=this.wa=this.D=this.Eb=this.v=this.lb=this.Hd=this.T=this.va=this.Ma=this.La=this.Rc=this.wc=this.R=0;this.ra=new O.Ja(1146);this.hb=new O.Ja(122);this.ja=new O.Ja(78);Ml(this.ra);Ml(this.hb);Ml(this.ja);this.td=this.oc=this.xc=
null;this.Ka=new O.Ja(16);this.da=new O.Ja(573);Ml(this.da);this.Ab=this.Na=0;this.depth=new O.Ja(573);Ml(this.depth);this.ia=this.oa=this.sa=this.matches=this.Ib=this.Pa=this.Qb=this.ya=this.Vb=this.Tc=0}
function Zl(a,b){if(!a||!a.state||b>5||b<0)return a?Ll(a,-2):-2;var c=a.state;if(!a.output||!a.input&&a.na!==0||c.status===666&&b!==4)return Ll(a,a.S===0?-5:-2);c.P=a;var d=c.Cb;c.Cb=b;if(c.status===42)if(c.wrap===2)a.J=0,P(c,31),P(c,139),P(c,8),c.I?(P(c,(c.I.text?1:0)+(c.I.Xa?2:0)+(c.I.extra?4:0)+(c.I.name?8:0)+(c.I.comment?16:0)),P(c,c.I.time&255),P(c,c.I.time>>8&255),P(c,c.I.time>>16&255),P(c,c.I.time>>24&255),P(c,c.level===9?2:c.strategy>=2||c.level<2?4:0),P(c,c.I.os&255),c.I.extra&&c.I.extra.length&&
(P(c,c.I.extra.length&255),P(c,c.I.extra.length>>8&255)),c.I.Xa&&(a.J=Zk(a.J,c.aa,c.pending,0)),c.Ba=0,c.status=69):(P(c,0),P(c,0),P(c,0),P(c,0),P(c,0),P(c,c.level===9?2:c.strategy>=2||c.level<2?4:0),P(c,3),c.status=113);else{var e=8+(c.pd-8<<4)<<8;e|=(c.strategy>=2||c.level<2?0:c.level<6?1:c.level===6?2:3)<<6;c.v!==0&&(e|=32);c.status=113;Pl(c,e+(31-e%31));c.v!==0&&(Pl(c,a.J>>>16),Pl(c,a.J&65535));a.J=1}if(c.status===69)if(c.I.extra){for(e=c.pending;c.Ba<(c.I.extra.length&65535)&&(c.pending!==c.za||
(c.I.Xa&&c.pending>e&&(a.J=Zk(a.J,c.aa,c.pending-e,e)),Nl(a),e=c.pending,c.pending!==c.za));)P(c,c.I.extra[c.Ba]&255),c.Ba++;c.I.Xa&&c.pending>e&&(a.J=Zk(a.J,c.aa,c.pending-e,e));c.Ba===c.I.extra.length&&(c.Ba=0,c.status=73)}else c.status=73;if(c.status===73)if(c.I.name){e=c.pending;do{if(c.pending===c.za&&(c.I.Xa&&c.pending>e&&(a.J=Zk(a.J,c.aa,c.pending-e,e)),Nl(a),e=c.pending,c.pending===c.za)){var f=1;break}f=c.Ba<c.I.name.length?c.I.name.charCodeAt(c.Ba++)&255:0;P(c,f)}while(f!==0);c.I.Xa&&c.pending>
e&&(a.J=Zk(a.J,c.aa,c.pending-e,e));f===0&&(c.Ba=0,c.status=91)}else c.status=91;if(c.status===91)if(c.I.comment){e=c.pending;do{if(c.pending===c.za&&(c.I.Xa&&c.pending>e&&(a.J=Zk(a.J,c.aa,c.pending-e,e)),Nl(a),e=c.pending,c.pending===c.za)){f=1;break}f=c.Ba<c.I.comment.length?c.I.comment.charCodeAt(c.Ba++)&255:0;P(c,f)}while(f!==0);c.I.Xa&&c.pending>e&&(a.J=Zk(a.J,c.aa,c.pending-e,e));f===0&&(c.status=103)}else c.status=103;c.status===103&&(c.I.Xa?(c.pending+2>c.za&&Nl(a),c.pending+2<=c.za&&(P(c,
a.J&255),P(c,a.J>>8&255),a.J=0,c.status=113)):c.status=113);if(c.pending!==0){if(Nl(a),a.S===0)return c.Cb=-1,0}else if(a.na===0&&(b<<1)-(b>4?9:0)<=(d<<1)-(d>4?9:0)&&b!==4)return Ll(a,-5);if(c.status===666&&a.na!==0)return Ll(a,-5);if(a.na!==0||c.D!==0||b!==0&&c.status!==666){d=c.strategy===2?Vl(c,b):c.strategy===3?Ul(c,b):Xl[c.level].ye(c,b);if(d===3||d===4)c.status=666;if(d===1||d===3)return a.S===0&&(c.Cb=-1),0;if(d===2&&(b===1?(vl(c,2,3),wl(c,256,jl),c.ia===16?(ul(c,c.oa),c.oa=0,c.ia=0):c.ia>=
8&&(c.aa[c.pending++]=c.oa&255,c.oa>>=8,c.ia-=8)):b!==5&&(vl(c,0,3),Bl(c,0,0),b===3&&(Ml(c.head),c.D===0&&(c.v=0,c.va=0,c.sa=0))),Nl(a),a.S===0))return c.Cb=-1,0}if(b!==4)return 0;if(c.wrap<=0)return 1;c.wrap===2?(P(c,a.J&255),P(c,a.J>>8&255),P(c,a.J>>16&255),P(c,a.J>>24&255),P(c,a.qb&255),P(c,a.qb>>8&255),P(c,a.qb>>16&255),P(c,a.qb>>24&255)):(Pl(c,a.J>>>16),Pl(c,a.J&65535));Nl(a);c.wrap>0&&(c.wrap=-c.wrap);return c.pending!==0?0:1}
;var $l={};$l=function(){this.input=null;this.qb=this.na=this.nb=0;this.output=null;this.md=this.S=this.Gb=0;this.msg="";this.state=null;this.Mc=2;this.J=0};var am=Object.prototype.toString;
function bm(a){if(!(this instanceof bm))return new bm(a);a=this.options=O.assign({level:-1,method:8,chunkSize:16384,windowBits:15,memLevel:8,strategy:0,to:""},a||{});a.raw&&a.windowBits>0?a.windowBits=-a.windowBits:a.gzip&&a.windowBits>0&&a.windowBits<16&&(a.windowBits+=16);this.err=0;this.msg="";this.ended=!1;this.chunks=[];this.P=new $l;this.P.S=0;var b=this.P;var c=a.level,d=a.method,e=a.windowBits,f=a.memLevel,g=a.strategy;if(b){var h=1;c===-1&&(c=6);e<0?(h=0,e=-e):e>15&&(h=2,e-=16);if(f<1||f>
9||d!==8||e<8||e>15||c<0||c>9||g<0||g>4)b=Ll(b,-2);else{e===8&&(e=9);var k=new Yl;b.state=k;k.P=b;k.wrap=h;k.I=null;k.pd=e;k.la=1<<k.pd;k.eb=k.la-1;k.Rc=f+7;k.wc=1<<k.Rc;k.La=k.wc-1;k.Ma=~~((k.Rc+3-1)/3);k.window=new O.rb(k.la*2);k.head=new O.Ja(k.wc);k.Ia=new O.Ja(k.la);k.Vb=1<<f+6;k.za=k.Vb*4;k.aa=new O.rb(k.za);k.Qb=1*k.Vb;k.Tc=3*k.Vb;k.level=c;k.strategy=g;k.method=d;if(b&&b.state){b.qb=b.md=0;b.Mc=2;c=b.state;c.pending=0;c.Yb=0;c.wrap<0&&(c.wrap=-c.wrap);c.status=c.wrap?42:113;b.J=c.wrap===2?
0:1;c.Cb=0;if(!Jl){d=Array(16);for(f=g=0;f<28;f++)for(nl[f]=g,e=0;e<1<<fl[f];e++)ml[g++]=f;ml[g-1]=f;for(f=g=0;f<16;f++)for(ol[f]=g,e=0;e<1<<gl[f];e++)ll[g++]=f;for(g>>=7;f<30;f++)for(ol[f]=g<<7,e=0;e<1<<gl[f]-7;e++)ll[256+g++]=f;for(e=0;e<=15;e++)d[e]=0;for(e=0;e<=143;)jl[e*2+1]=8,e++,d[8]++;for(;e<=255;)jl[e*2+1]=9,e++,d[9]++;for(;e<=279;)jl[e*2+1]=7,e++,d[7]++;for(;e<=287;)jl[e*2+1]=8,e++,d[8]++;yl(jl,287,d);for(e=0;e<30;e++)kl[e*2+1]=5,kl[e*2]=xl(e,5);ql=new pl(jl,fl,257,286,15);rl=new pl(kl,
gl,0,30,15);sl=new pl([],hl,0,19,7);Jl=!0}c.xc=new tl(c.ra,ql);c.oc=new tl(c.hb,rl);c.td=new tl(c.ja,sl);c.oa=0;c.ia=0;zl(c);c=0}else c=Ll(b,-2);c===0&&(b=b.state,b.Ud=2*b.la,Ml(b.head),b.Wc=Xl[b.level].Ne,b.yd=Xl[b.level].Be,b.Ed=Xl[b.level].Qe,b.Cd=Xl[b.level].Me,b.v=0,b.va=0,b.D=0,b.sa=0,b.T=b.wa=2,b.lb=0,b.R=0);b=c}}else b=-2;if(b!==0)throw Error(dl[b]);a.header&&(b=this.P)&&b.state&&b.state.wrap===2&&(b.state.I=a.header);if(a.dictionary){var l;typeof a.dictionary==="string"?l=Xk(a.dictionary):
am.call(a.dictionary)==="[object ArrayBuffer]"?l=new Uint8Array(a.dictionary):l=a.dictionary;a=this.P;f=l;g=f.length;if(a&&a.state)if(l=a.state,b=l.wrap,b===2||b===1&&l.status!==42||l.D)b=-2;else{b===1&&(a.J=Yk(a.J,f,g,0));l.wrap=0;g>=l.la&&(b===0&&(Ml(l.head),l.v=0,l.va=0,l.sa=0),c=new O.rb(l.la),O.ub(c,f,g-l.la,l.la,0),f=c,g=l.la);c=a.na;d=a.nb;e=a.input;a.na=g;a.nb=0;a.input=f;for(Rl(l);l.D>=3;){f=l.v;g=l.D-2;do l.R=(l.R<<l.Ma^l.window[f+3-1])&l.La,l.Ia[f&l.eb]=l.head[l.R],l.head[l.R]=f,f++;while(--g);
l.v=f;l.D=2;Rl(l)}l.v+=l.D;l.va=l.v;l.sa=l.D;l.D=0;l.T=l.wa=2;l.lb=0;a.nb=d;a.input=e;a.na=c;l.wrap=b;b=0}else b=-2;if(b!==0)throw Error(dl[b]);this.zh=!0}}
bm.prototype.push=function(a,b){var c=this.P,d=this.options.chunkSize;if(this.ended)return!1;var e=b===~~b?b:b===!0?4:0;typeof a==="string"?c.input=Xk(a):am.call(a)==="[object ArrayBuffer]"?c.input=new Uint8Array(a):c.input=a;c.nb=0;c.na=c.input.length;do{c.S===0&&(c.output=new O.rb(d),c.Gb=0,c.S=d);a=Zl(c,e);if(a!==1&&a!==0)return cm(this,a),this.ended=!0,!1;if(c.S===0||c.na===0&&(e===4||e===2))if(this.options.to==="string"){var f=O.jd(c.output,c.Gb);b=f;f=f.length;if(f<65537&&(b.subarray&&Wk||!b.subarray))b=
String.fromCharCode.apply(null,O.jd(b,f));else{for(var g="",h=0;h<f;h++)g+=String.fromCharCode(b[h]);b=g}this.chunks.push(b)}else b=O.jd(c.output,c.Gb),this.chunks.push(b)}while((c.na>0||c.S===0)&&a!==1);if(e===4)return(c=this.P)&&c.state?(d=c.state.status,d!==42&&d!==69&&d!==73&&d!==91&&d!==103&&d!==113&&d!==666?a=Ll(c,-2):(c.state=null,a=d===113?Ll(c,-3):0)):a=-2,cm(this,a),this.ended=!0,a===0;e===2&&(cm(this,0),c.S=0);return!0};
function cm(a,b){b===0&&(a.result=a.options.to==="string"?a.chunks.join(""):O.wd(a.chunks));a.chunks=[];a.err=b;a.msg=a.P.msg}
function dm(a,b){b=b||{};b.gzip=!0;b=new bm(b);b.push(a,!0);if(b.err)throw b.msg||dl[b.err];return b.result}
;function em(a){return a?(a=a.privateDoNotAccessOrElseSafeScriptWrappedValue)?Fb(a):null:null}
function fm(a){return a?(a=a.privateDoNotAccessOrElseTrustedResourceUrlWrappedValue)?lb(a):null:null}
;function gm(a){return lb(a===null?"null":a===void 0?"undefined":a)}
;function hm(a){this.name=a}
;var im=new hm("rawColdConfigGroup");var jm=new hm("rawHotConfigGroup");function km(a){this.F=L(a)}
v(km,M);function lm(a){this.F=L(a)}
v(lm,M);lm.prototype.setTrackingParams=function(a){if(a!=null)if(typeof a==="string")a=a?new Bd(a,Ad):Dd||(Dd=new Bd(null,Ad));else if(a.constructor!==Bd)if(vd&&a!=null&&a instanceof Uint8Array)a instanceof Uint8Array||Array.isArray(a),a=a.length?new Bd(new Uint8Array(a),Ad):Dd||(Dd=new Bd(null,Ad));else throw Error();return wf(this,1,a)};var mm=new hm("continuationCommand");var nm=new hm("webCommandMetadata");var om=new hm("signalServiceEndpoint");var pm={Wf:"EMBEDDED_PLAYER_MODE_UNKNOWN",Tf:"EMBEDDED_PLAYER_MODE_DEFAULT",Vf:"EMBEDDED_PLAYER_MODE_PFP",Uf:"EMBEDDED_PLAYER_MODE_PFL"};var qm=new hm("feedbackEndpoint");var ie={bh:"GENERIC_CLIENT_EXPERIMENT_EVENT_TYPE_UNKNOWN",tg:"GENERIC_CLIENT_EXPERIMENT_EVENT_TYPE_FOR_TESTING",Lg:"GENERIC_CLIENT_EXPERIMENT_EVENT_TYPE_RESUME_TO_HOME_TTL",Tg:"GENERIC_CLIENT_EXPERIMENT_EVENT_TYPE_START_TO_SHORTS_ANALYSIS_SLICE",ig:"GENERIC_CLIENT_EXPERIMENT_EVENT_TYPE_DEVICE_LAYER_SLICE",ah:"GENERIC_CLIENT_EXPERIMENT_EVENT_TYPE_UNIFIED_LAYER_SLICE",eh:"GENERIC_CLIENT_EXPERIMENT_EVENT_TYPE_VISITOR_LAYER_SLICE",Sg:"GENERIC_CLIENT_EXPERIMENT_EVENT_TYPE_SHOW_SHEET_COMMAND_HANDLER_BLOCK",
gh:"GENERIC_CLIENT_EXPERIMENT_EVENT_TYPE_WIZ_NEXT_MIGRATED_COMPONENT",fh:"GENERIC_CLIENT_EXPERIMENT_EVENT_TYPE_WIZ_NEXT_CHANNEL_NAME_TOOLTIP",Og:"GENERIC_CLIENT_EXPERIMENT_EVENT_TYPE_ROTATION_LOCK_SUPPORTED",Vg:"GENERIC_CLIENT_EXPERIMENT_EVENT_TYPE_THEATER_MODE_ENABLED",kh:"GENERIC_CLIENT_EXPERIMENT_EVENT_TYPE_WOULD_SHOW_PIN_SUGGESTION",jh:"GENERIC_CLIENT_EXPERIMENT_EVENT_TYPE_WOULD_SHOW_LONG_PRESS_EDU_TOAST",ih:"GENERIC_CLIENT_EXPERIMENT_EVENT_TYPE_WOULD_SHOW_AMBIENT",Wg:"GENERIC_CLIENT_EXPERIMENT_EVENT_TYPE_TIME_WATCHED_PANEL",
Qg:"GENERIC_CLIENT_EXPERIMENT_EVENT_TYPE_SEARCH_FROM_SEARCH_BAR_OVERLAY",mh:"GENERIC_CLIENT_EXPERIMENT_EVENT_TYPE_WOULD_SHOW_VOICE_SEARCH_EDU_TOAST",Ug:"GENERIC_CLIENT_EXPERIMENT_EVENT_TYPE_SUGGESTED_LANGUAGE_SELECTED",nh:"GENERIC_CLIENT_EXPERIMENT_EVENT_TYPE_WOULD_TRIGGER_SHORTS_PIP",Ag:"GENERIC_CLIENT_EXPERIMENT_EVENT_TYPE_IN_ZP_VOICE_CRASHY_SET",Hg:"GENERIC_CLIENT_EXPERIMENT_EVENT_TYPE_REEL_FAST_SWIPE_SUPPRESSED",Gg:"GENERIC_CLIENT_EXPERIMENT_EVENT_TYPE_REEL_FAST_SWIPE_ALLOWED",Jg:"GENERIC_CLIENT_EXPERIMENT_EVENT_TYPE_REEL_PULL_TO_REFRESH_ATTEMPT",
hh:"GENERIC_CLIENT_EXPERIMENT_EVENT_TYPE_WOULD_BLOCK_KABUKI",Kg:"GENERIC_CLIENT_EXPERIMENT_EVENT_TYPE_REEL_TALL_SCREEN",Ig:"GENERIC_CLIENT_EXPERIMENT_EVENT_TYPE_REEL_NORMAL_SCREEN",ag:"GENERIC_CLIENT_EXPERIMENT_EVENT_TYPE_ACCESSIBILITY_MODE_ENABLED",Zf:"GENERIC_CLIENT_EXPERIMENT_EVENT_TYPE_ACCESSIBILITY_MODE_DISABLED",cg:"GENERIC_CLIENT_EXPERIMENT_EVENT_TYPE_AUTOPLAY_ENABLED",dg:"GENERIC_CLIENT_EXPERIMENT_EVENT_TYPE_CAST_MATCH_OCCURRED",mg:"GENERIC_CLIENT_EXPERIMENT_EVENT_TYPE_EMC3DS_ELIGIBLE",pg:"GENERIC_CLIENT_EXPERIMENT_EVENT_TYPE_ENDSCREEN_TRIGGERED",
Fg:"GENERIC_CLIENT_EXPERIMENT_EVENT_TYPE_POSTPLAY_TRIGGERED",Eg:"GENERIC_CLIENT_EXPERIMENT_EVENT_TYPE_POSTPLAY_LACT_THRESHOLD_EXCEEDED",ug:"GENERIC_CLIENT_EXPERIMENT_EVENT_TYPE_IDENTITIES_STATE_MATCHED_ON_REMOTE_CONNECTION",wg:"GENERIC_CLIENT_EXPERIMENT_EVENT_TYPE_IDENTITIES_STATE_SWITCHABLE_ON_REMOTE_CONNECTION",vg:"GENERIC_CLIENT_EXPERIMENT_EVENT_TYPE_IDENTITIES_STATE_MISATTRIBUTED_ON_REMOTE_CONNECTION",zg:"GENERIC_CLIENT_EXPERIMENT_EVENT_TYPE_IDENTITIES_TV_IS_SIGNED_IN_ON_REMOTE_CONNECTION",Yg:"GENERIC_CLIENT_EXPERIMENT_EVENT_TYPE_TV_START_TYPE_COLD_ON_REMOTE_CONNECTION",
Zg:"GENERIC_CLIENT_EXPERIMENT_EVENT_TYPE_TV_START_TYPE_NON_COLD_ON_REMOTE_CONNECTION",Cg:"GENERIC_CLIENT_EXPERIMENT_EVENT_TYPE_ON_REMOTE_CONNECTION",hg:"GENERIC_CLIENT_EXPERIMENT_EVENT_TYPE_COBALT_PERSISTENT_SETTINGS_TEST_VALID",fg:"GENERIC_CLIENT_EXPERIMENT_EVENT_TYPE_COBALT_PERSISTENT_SETTINGS_TEST_INVALID",gg:"GENERIC_CLIENT_EXPERIMENT_EVENT_TYPE_COBALT_PERSISTENT_SETTINGS_TEST_UNDEFINED",eg:"GENERIC_CLIENT_EXPERIMENT_EVENT_TYPE_COBALT_PERSISTENT_SETTINGS_TEST_DEFINED",Bg:"GENERIC_CLIENT_EXPERIMENT_EVENT_TYPE_LACT_THRESHOLD_EXCEEDED",
Pg:"GENERIC_CLIENT_EXPERIMENT_EVENT_TYPE_ROUND_TRIP_HANDLING_ON_REMOTE_CONNECTION",yg:"GENERIC_CLIENT_EXPERIMENT_EVENT_TYPE_IDENTITIES_STATE_SWITCHED_ON_REMOTE_CONNECTION_BEFORE_APP_RELOAD",xg:"GENERIC_CLIENT_EXPERIMENT_EVENT_TYPE_IDENTITIES_STATE_SWITCHED_ON_REMOTE_CONNECTION_AFTER_APP_RELOAD",ng:"GENERIC_CLIENT_EXPERIMENT_EVENT_TYPE_EMC3DS_INELIGIBLE",Xg:"GENERIC_CLIENT_EXPERIMENT_EVENT_TYPE_TVHTML5_MID_ROLL_THRESHOLD_REACHED",rg:"GENERIC_CLIENT_EXPERIMENT_EVENT_TYPE_EXP_COBALT_HTTP3_CONFIG_PENDING",
qg:"GENERIC_CLIENT_EXPERIMENT_EVENT_TYPE_EXP_COBALT_HTTP3_CONFIG_ACTIVATED",og:"GENERIC_CLIENT_EXPERIMENT_EVENT_TYPE_EMC3DS_M2_ELIGIBLE",Mg:"GENERIC_CLIENT_EXPERIMENT_EVENT_TYPE_ROTATE_DEVICE_TO_LANDSCAPE",Ng:"GENERIC_CLIENT_EXPERIMENT_EVENT_TYPE_ROTATE_DEVICE_TO_PORTRAIT",lg:"GENERIC_CLIENT_EXPERIMENT_EVENT_TYPE_EMBEDS_FACEOFF_UI_EVENT",sg:"GENERIC_CLIENT_EXPERIMENT_EVENT_TYPE_EXP_COBALT_HTTP3_CONFIG_RECEIVED",kg:"GENERIC_CLIENT_EXPERIMENT_EVENT_TYPE_ELIGIBLE_TO_SUPPRESS_TRANSPORT_CONTROLS_BUTTONS",
dh:"GENERIC_CLIENT_EXPERIMENT_EVENT_TYPE_USER_HAS_THEATER_MODE_COOKIE_ENABLED",jg:"GENERIC_CLIENT_EXPERIMENT_EVENT_TYPE_DOCUMENT_PICTURE_IN_PICTURE_SUPPORTED",Rg:"GENERIC_CLIENT_EXPERIMENT_EVENT_TYPE_SHORTS_NON_DEFAULT_ASPECT_RATIO",Dg:"GENERIC_CLIENT_EXPERIMENT_EVENT_TYPE_PLAYER_IN_SQUEEZEBACK"};var rm=new hm("shareEndpoint"),sm=new hm("shareEntityEndpoint"),tm=new hm("shareEntityServiceEndpoint"),um=new hm("webPlayerShareEntityServiceEndpoint");var wm=new hm("playlistEditEndpoint");var xm=new hm("modifyChannelNotificationPreferenceEndpoint");var ym=new hm("undoFeedbackEndpoint");var zm=new hm("unsubscribeEndpoint");var Am=new hm("subscribeEndpoint");function Bm(){var a=Cm;F("yt.ads.biscotti.getId_")||E("yt.ads.biscotti.getId_",a)}
function Dm(a){E("yt.ads.biscotti.lastId_",a)}
;function Em(a,b){b.length>1?a[b[0]]=b[1]:b.length===1&&Object.assign(a,b[0])}
;var Fm=D.window,Gm,Hm,Im=(Fm==null?void 0:(Gm=Fm.yt)==null?void 0:Gm.config_)||(Fm==null?void 0:(Hm=Fm.ytcfg)==null?void 0:Hm.data_)||{};E("yt.config_",Im);function Jm(){Em(Im,arguments)}
function R(a,b){return a in Im?Im[a]:b}
function Km(a){var b=Im.EXPERIMENT_FLAGS;return b?b[a]:void 0}
;var Lm=[];function Mm(a){Lm.forEach(function(b){return b(a)})}
function Nm(a){return a&&window.yterr?function(){try{return a.apply(this,arguments)}catch(b){Om(b)}}:a}
function Om(a){var b=F("yt.logging.errors.log");b?b(a,"ERROR",void 0,void 0,void 0,void 0,void 0):(b=R("ERRORS",[]),b.push([a,"ERROR",void 0,void 0,void 0,void 0,void 0]),Jm("ERRORS",b));Mm(a)}
function Pm(a,b,c,d,e){var f=F("yt.logging.errors.log");f?f(a,"WARNING",b,c,d,void 0,e):(f=R("ERRORS",[]),f.push([a,"WARNING",b,c,d,void 0,e]),Jm("ERRORS",f))}
;var Qm=/^[\w.]*$/,Rm={q:!0,search_query:!0};function Sm(a,b){b=a.split(b);for(var c={},d=0,e=b.length;d<e;d++){var f=b[d].split("=");if(f.length===1&&f[0]||f.length===2)try{var g=Tm(f[0]||""),h=Tm(f[1]||"");if(g in c){var k=c[g];Array.isArray(k)?Xb(k,h):c[g]=[k,h]}else c[g]=h}catch(r){var l=r,m=f[0],n=String(Sm);l.args=[{key:m,value:f[1],query:a,method:Um===n?"unchanged":n}];Rm.hasOwnProperty(m)||Pm(l)}}return c}
var Um=String(Sm);function Vm(a){var b=[];tg(a,function(c,d){var e=encodeURIComponent(String(d));c=Array.isArray(c)?c:[c];Pb(c,function(f){f==""?b.push(e):b.push(e+"="+encodeURIComponent(String(f)))})});
return b.join("&")}
function Wm(a){a.charAt(0)==="?"&&(a=a.substring(1));return Sm(a,"&")}
function Xm(a){return a.indexOf("?")!==-1?(a=(a||"").split("#")[0],a=a.split("?",2),Wm(a.length>1?a[1]:a[0])):{}}
function Ym(a,b){return Zm(a,b||{},!0)}
function Zm(a,b,c){var d=a.split("#",2);a=d[0];d=d.length>1?"#"+d[1]:"";var e=a.split("?",2);a=e[0];e=Wm(e[1]||"");for(var f in b)!c&&e!==null&&f in e||(e[f]=b[f]);return pc(a,e)+d}
function $m(a){if(!b)var b=window.location.href;var c=a.match(fc)[1]||null,d=ic(a);c&&d?(a=a.match(fc),b=b.match(fc),a=a[3]==b[3]&&a[1]==b[1]&&a[4]==b[4]):a=d?ic(b)===d&&(Number(b.match(fc)[4]||null)||null)===(Number(a.match(fc)[4]||null)||null):!0;return a}
function Tm(a){return a&&a.match(Qm)?a:dc(a)}
;function an(a){var b=bn;a=a===void 0?F("yt.ads.biscotti.lastId_")||"":a;var c=Object,d=c.assign,e={};e.dt=Sj;e.flash="0";a:{try{var f=b.h.top.location.href}catch(Oa){f=2;break a}f=f?f===b.i.location.href?0:1:2}e=(e.frm=f,e);try{e.u_tz=-(new Date).getTimezoneOffset();try{var g=Kj.history.length}catch(Oa){g=0}e.u_his=g;var h;e.u_h=(h=Kj.screen)==null?void 0:h.height;var k;e.u_w=(k=Kj.screen)==null?void 0:k.width;var l;e.u_ah=(l=Kj.screen)==null?void 0:l.availHeight;var m;e.u_aw=(m=Kj.screen)==null?
void 0:m.availWidth;var n;e.u_cd=(n=Kj.screen)==null?void 0:n.colorDepth}catch(Oa){}var r;g=b.h;try{var t=g.screenX;var w=g.screenY}catch(Oa){}try{var x=g.outerWidth;var z=g.outerHeight}catch(Oa){}try{var G=g.innerWidth;var H=g.innerHeight}catch(Oa){}try{var U=g.screenLeft;var Z=g.screenTop}catch(Oa){}try{G=g.innerWidth,H=g.innerHeight}catch(Oa){}try{var mb=g.screen.availWidth;var Qb=g.screen.availTop}catch(Oa){}t=[U,Z,t,w,mb,Qb,x,z,G,H];try{var ca=(b.h.top||window).document,$a=ca.compatMode=="CSS1Compat"?
ca.documentElement:ca.body;var Pa=(new sg($a.clientWidth,$a.clientHeight)).round()}catch(Oa){Pa=new sg(-12245933,-12245933)}ca=Pa;Pa={};var Qa=Qa===void 0?D:Qa;$a=new Yj;"SVGElement"in Qa&&"createElementNS"in Qa.document&&$a.set(0);w=Pj();w["allow-top-navigation-by-user-activation"]&&$a.set(1);w["allow-popups-to-escape-sandbox"]&&$a.set(2);Qa.crypto&&Qa.crypto.subtle&&$a.set(3);"TextDecoder"in Qa&&"TextEncoder"in Qa&&$a.set(4);Qa=Zj($a);Pa.bc=Qa;Pa.bih=ca.height;Pa.biw=ca.width;Pa.brdim=t.join();
b=b.i;b=b.prerendering?3:(r={visible:1,hidden:2,prerender:3,preview:4,unloaded:5,"":0}[b.visibilityState||b.webkitVisibilityState||b.mozVisibilityState||""])!=null?r:0;r=(Pa.vis=b,Pa.wgl=!!Kj.WebGLRenderingContext,Pa);c=d.call(c,e,r);c.ca_type="image";a&&(c.bid=a);return c}
var bn=new function(){var a=window.document;this.h=window;this.i=a};
E("yt.ads_.signals_.getAdSignalsString",function(a){return Vm(an(a))});Xa();navigator.userAgent.indexOf(" (CrKey ");var cn="XMLHttpRequest"in D?function(){return new XMLHttpRequest}:null;
function dn(){if(!cn)return null;var a=cn();return"open"in a?a:null}
function en(a){switch(a&&"status"in a?a.status:-1){case 200:case 201:case 202:case 203:case 204:case 205:case 206:case 304:return!0;default:return!1}}
;function fn(a,b){typeof a==="function"&&(a=Nm(a));return window.setTimeout(a,b)}
;var gn="client_dev_domain client_dev_expflag client_dev_regex_map client_dev_root_url client_rollout_override expflag forcedCapability jsfeat jsmode mods".split(" ");[].concat(A(gn),["client_dev_set_cookie"]);function S(a){a=hn(a);return typeof a==="string"&&a==="false"?!1:!!a}
function jn(a,b){a=hn(a);return a===void 0&&b!==void 0?b:Number(a||0)}
function hn(a){return R("EXPERIMENT_FLAGS",{})[a]}
function kn(){for(var a=[],b=R("EXPERIMENTS_FORCED_FLAGS",{}),c=y(Object.keys(b)),d=c.next();!d.done;d=c.next())d=d.value,a.push({key:d,value:String(b[d])});c=R("EXPERIMENT_FLAGS",{});d=y(Object.keys(c));for(var e=d.next();!e.done;e=d.next())e=e.value,e.startsWith("force_")&&b[e]===void 0&&a.push({key:e,value:String(c[e])});return a}
;var ln={Authorization:"AUTHORIZATION","X-Goog-EOM-Visitor-Id":"EOM_VISITOR_DATA","X-Goog-Visitor-Id":"SANDBOXED_VISITOR_ID","X-Youtube-Domain-Admin-State":"DOMAIN_ADMIN_STATE","X-Youtube-Chrome-Connected":"CHROME_CONNECTED_HEADER","X-YouTube-Client-Name":"INNERTUBE_CONTEXT_CLIENT_NAME","X-YouTube-Client-Version":"INNERTUBE_CONTEXT_CLIENT_VERSION","X-YouTube-Delegation-Context":"INNERTUBE_CONTEXT_SERIALIZED_DELEGATION_CONTEXT","X-YouTube-Device":"DEVICE","X-Youtube-Identity-Token":"ID_TOKEN","X-YouTube-Page-CL":"PAGE_CL",
"X-YouTube-Page-Label":"PAGE_BUILD_LABEL","X-Goog-AuthUser":"SESSION_INDEX","X-Goog-PageId":"DELEGATED_SESSION_ID"},mn="app debugcss debugjs expflag force_ad_params force_ad_encrypted force_viral_ad_response_params forced_experiments innertube_snapshots innertube_goldens internalcountrycode internalipoverride absolute_experiments conditional_experiments sbb sr_bns_address".split(" ").concat(A(gn)),nn=!1;function on(a,b,c,d,e,f,g,h,k){function l(){(m&&"readyState"in m?m.readyState:0)===4&&b&&Nm(b)(m)}
c=c===void 0?"GET":c;d=d===void 0?"":d;h=h===void 0?!1:h;var m=dn();if(!m)return null;"onloadend"in m?m.addEventListener("loadend",l,!1):m.onreadystatechange=l;S("debug_forward_web_query_parameters")&&(a=pn(a));m.open(c,a,!0);f&&(m.responseType=f);g&&(m.withCredentials=!0);c=c==="POST"&&(window.FormData===void 0||!(d instanceof FormData));if(e=qn(a,e))for(var n in e)m.setRequestHeader(n,e[n]),"content-type"===n.toLowerCase()&&(c=!1);c&&m.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
k&&"onprogress"in m&&(m.onprogress=function(){k(m.responseText)});
if(h&&"setAttributionReporting"in XMLHttpRequest.prototype){a={eventSourceEligible:!0,triggerEligible:!1};try{m.setAttributionReporting(a)}catch(r){Pm(r)}}m.send(d);return m}
function qn(a,b){b=b===void 0?{}:b;var c=$m(a),d=R("INNERTUBE_CLIENT_NAME"),e=S("web_ajax_ignore_global_headers_if_set"),f;for(f in ln){var g=R(ln[f]),h=f==="X-Goog-AuthUser"||f==="X-Goog-PageId";f!=="X-Goog-Visitor-Id"||g||(g=R("VISITOR_DATA"));var k;if(!(k=!g)){if(!(k=c||(ic(a)?!1:!0))){k=a;var l;if(l=S("add_auth_headers_to_remarketing_google_dot_com_ping")&&f==="Authorization"&&(d==="TVHTML5"||d==="TVHTML5_UNPLUGGED"||d==="TVHTML5_SIMPLY"))l=ic(k),l=l!==null?l.split(".").reverse():null,l=l===null?
!1:l[1]==="google"?!0:l[2]==="google"?l[0]==="au"&&l[1]==="com"?!0:l[0]==="uk"&&l[1]==="co"?!0:!1:!1;l&&(k=jc(k)||"",k=k.split("/"),k="/"+(k.length>1?k[1]:""),l=k==="/pagead");k=l?!0:!1}k=!k}k||e&&b[f]!==void 0||d==="TVHTML5_UNPLUGGED"&&h||(b[f]=g)}"X-Goog-EOM-Visitor-Id"in b&&"X-Goog-Visitor-Id"in b&&delete b["X-Goog-Visitor-Id"];if(c||!ic(a))b["X-YouTube-Utc-Offset"]=String(-(new Date).getTimezoneOffset());if(c||!ic(a)){try{var m=(new Intl.DateTimeFormat).resolvedOptions().timeZone}catch(n){}m&&
(b["X-YouTube-Time-Zone"]=m)}document.location.hostname.endsWith("youtubeeducation.com")||!c&&ic(a)||(b["X-YouTube-Ad-Signals"]=Vm(an()));return b}
function rn(a,b){b.method="POST";b.postParams||(b.postParams={});return sn(a,b)}
function sn(a,b){var c=b.format||"JSON";a=tn(a,b);var d=un(a,b),e=!1,f=vn(a,function(k){if(!e){e=!0;h&&window.clearTimeout(h);var l=en(k),m=null,n=400<=k.status&&k.status<500,r=500<=k.status&&k.status<600;if(l||n||r)m=wn(a,c,k,b.convertToSafeHtml);l&&(l=xn(c,k,m));m=m||{};n=b.context||D;l?b.onSuccess&&b.onSuccess.call(n,k,m):b.onError&&b.onError.call(n,k,m);b.onFinish&&b.onFinish.call(n,k,m)}},b.method,d,b.headers,b.responseType,b.withCredentials,!1,b.onProgress);
d=b.timeout||0;if(b.onTimeout&&d>0){var g=b.onTimeout;var h=fn(function(){e||(e=!0,f.abort(),window.clearTimeout(h),g.call(b.context||D,f))},d)}return f}
function tn(a,b){b.includeDomain&&(a=document.location.protocol+"//"+document.location.hostname+(document.location.port?":"+document.location.port:"")+a);var c=R("XSRF_FIELD_NAME");if(b=b.urlParams)b[c]&&delete b[c],a=Ym(a,b);return a}
function un(a,b){var c=R("XSRF_FIELD_NAME"),d=R("XSRF_TOKEN"),e=b.postBody||"",f=b.postParams,g=R("XSRF_FIELD_NAME"),h;b.headers&&(h=b.headers["Content-Type"]);b.excludeXsrf||ic(a)&&!b.withCredentials&&ic(a)!==document.location.hostname||b.method!=="POST"||h&&h!=="application/x-www-form-urlencoded"||b.postParams&&b.postParams[g]||(f||(f={}),f[c]=d);(S("ajax_parse_query_data_only_when_filled")&&f&&Object.keys(f).length>0||f)&&typeof e==="string"&&(e=Wm(e),Eg(e,f),e=b.postBodyFormat&&b.postBodyFormat===
"JSON"?JSON.stringify(e):oc(e));f=e||f&&!xg(f);!nn&&f&&b.method!=="POST"&&(nn=!0,Om(Error("AJAX request with postData should use POST")));return e}
function wn(a,b,c,d){var e=null;switch(b){case "JSON":try{var f=c.responseText}catch(g){throw d=Error("Error reading responseText"),d.params=a,Pm(d),g;}a=c.getResponseHeader("Content-Type")||"";f&&a.indexOf("json")>=0&&(f.substring(0,5)===")]}'\n"&&(f=f.substring(5)),e=JSON.parse(f));break;case "XML":if(a=(a=c.responseXML)?yn(a):null)e={},Pb(a.getElementsByTagName("*"),function(g){e[g.tagName]=zn(g)})}d&&An(e);
return e}
function An(a){if(Ma(a))for(var b in a){var c;(c=b==="html_content")||(c=b.length-5,c=c>=0&&b.indexOf("_html",c)==c);if(c){c=a[b];var d=jb();c=d?d.createHTML(c):c;a[b]=new Cb(c)}else An(a[b])}}
function xn(a,b,c){if(b&&b.status===204)return!0;switch(a){case "JSON":return!!c;case "XML":return Number(c&&c.return_code)===0;case "RAW":return!0;default:return!!c}}
function yn(a){return a?(a=("responseXML"in a?a.responseXML:a).getElementsByTagName("root"))&&a.length>0?a[0]:null:null}
function zn(a){var b="";Pb(a.childNodes,function(c){b+=c.nodeValue});
return b}
function pn(a){var b=window.location.search,c=ic(a);S("debug_handle_relative_url_for_query_forward_killswitch")||!c&&$m(a)&&(c=document.location.hostname);var d=jc(a);d=(c=c&&(c.endsWith("youtube.com")||c.endsWith("youtube-nocookie.com")))&&d&&d.startsWith("/api/");if(!c||d)return a;var e=Wm(b),f={};Pb(mn,function(g){e[g]&&(f[g]=e[g])});
return Zm(a,f||{},!1)}
var vn=on;var Bn=[{Xc:function(a){return"Cannot read property '"+a.key+"'"},
zc:{Error:[{regexp:/(Permission denied) to access property "([^']+)"/,groups:["reason","key"]}],TypeError:[{regexp:/Cannot read property '([^']+)' of (null|undefined)/,groups:["key","value"]},{regexp:/\u65e0\u6cd5\u83b7\u53d6\u672a\u5b9a\u4e49\u6216 (null|undefined) \u5f15\u7528\u7684\u5c5e\u6027\u201c([^\u201d]+)\u201d/,groups:["value","key"]},{regexp:/\uc815\uc758\ub418\uc9c0 \uc54a\uc74c \ub610\ub294 (null|undefined) \ucc38\uc870\uc778 '([^']+)' \uc18d\uc131\uc744 \uac00\uc838\uc62c \uc218 \uc5c6\uc2b5\ub2c8\ub2e4./,
groups:["value","key"]},{regexp:/No se puede obtener la propiedad '([^']+)' de referencia nula o sin definir/,groups:["key"]},{regexp:/Unable to get property '([^']+)' of (undefined or null) reference/,groups:["key","value"]},{regexp:/(null) is not an object \(evaluating '(?:([^.]+)\.)?([^']+)'\)/,groups:["value","base","key"]}]}},{Xc:function(a){return"Cannot call '"+a.key+"'"},
zc:{TypeError:[{regexp:/(?:([^ ]+)?\.)?([^ ]+) is not a function/,groups:["base","key"]},{regexp:/([^ ]+) called on (null or undefined)/,groups:["key","value"]},{regexp:/Object (.*) has no method '([^ ]+)'/,groups:["base","key"]},{regexp:/Object doesn't support property or method '([^ ]+)'/,groups:["key"]},{regexp:/\u30aa\u30d6\u30b8\u30a7\u30af\u30c8\u306f '([^']+)' \u30d7\u30ed\u30d1\u30c6\u30a3\u307e\u305f\u306f\u30e1\u30bd\u30c3\u30c9\u3092\u30b5\u30dd\u30fc\u30c8\u3057\u3066\u3044\u307e\u305b\u3093/,
groups:["key"]},{regexp:/\uac1c\uccb4\uac00 '([^']+)' \uc18d\uc131\uc774\ub098 \uba54\uc11c\ub4dc\ub97c \uc9c0\uc6d0\ud558\uc9c0 \uc54a\uc2b5\ub2c8\ub2e4./,groups:["key"]}]}},{Xc:function(a){return a.key+" is not defined"},
zc:{ReferenceError:[{regexp:/(.*) is not defined/,groups:["key"]},{regexp:/Can't find variable: (.*)/,groups:["key"]}]}}];var En={Za:[],Ua:[{callback:Cn,weight:500},{callback:Dn,weight:500}]};function Cn(a){if(a.name==="JavaException")return!0;a=a.stack;return a.includes("chrome://")||a.includes("-extension://")||a.includes("webkit-masked-url://")}
function Dn(a){if(!a.stack)return!0;var b=!a.stack.includes("\n");return b&&a.stack.includes("ErrorType: ")||b&&a.stack.includes("Anonymous function (Unknown script")||a.stack.toLowerCase()==="not available"||a.fileName==="user-script"||a.fileName.startsWith("user-script:")?!0:!1}
;function Fn(){this.Ua=[];this.Za=[]}
var Gn;function Hn(){if(!Gn){var a=Gn=new Fn;a.Za.length=0;a.Ua.length=0;In(a,En)}return Gn}
function In(a,b){b.Za&&a.Za.push.apply(a.Za,b.Za);b.Ua&&a.Ua.push.apply(a.Ua,b.Ua)}
;var Jn=new N;function Kn(a){function b(){return a.charCodeAt(d++)}
var c=a.length,d=0;do{var e=Ln(b);if(e===Infinity)break;var f=e>>3;switch(e&7){case 0:e=Ln(b);if(f===2)return e;break;case 1:if(f===2)return;d+=8;break;case 2:e=Ln(b);if(f===2)return a.substr(d,e);d+=e;break;case 5:if(f===2)return;d+=4;break;default:return}}while(d<c)}
function Ln(a){var b=a(),c=b&127;if(b<128)return c;b=a();c|=(b&127)<<7;if(b<128)return c;b=a();c|=(b&127)<<14;if(b<128)return c;b=a();return b<128?c|(b&127)<<21:Infinity}
;function Mn(a,b,c,d){if(a)if(Array.isArray(a)){var e=d;for(d=0;d<a.length&&!(a[d]&&(e+=Nn(d,a[d],b,c),e>500));d++);d=e}else if(typeof a==="object")for(e in a){if(a[e]){var f=e;var g=a[e],h=b,k=c;f=typeof g!=="string"||f!=="clickTrackingParams"&&f!=="trackingParams"?0:(g=Kn(atob(g.replace(/-/g,"+").replace(/_/g,"/"))))?Nn(f+".ve",g,h,k):0;d+=f;d+=Nn(e,a[e],b,c);if(d>500)break}}else c[b]=On(a),d+=c[b].length;else c[b]=On(a),d+=c[b].length;return d}
function Nn(a,b,c,d){c+="."+a;a=On(b);d[c]=a;return c.length+a.length}
function On(a){try{return(typeof a==="string"?a:String(JSON.stringify(a))).substr(0,500)}catch(b){return"unable to serialize "+typeof a+" ("+b.message+")"}}
;function Pn(a){var b=this;this.i=void 0;this.h=!1;a.addEventListener("beforeinstallprompt",function(c){c.preventDefault();b.i=c});
a.addEventListener("appinstalled",function(){b.h=!0},{once:!0})}
function Qn(){if(!D.matchMedia)return"WEB_DISPLAY_MODE_UNKNOWN";try{return D.matchMedia("(display-mode: standalone)").matches?"WEB_DISPLAY_MODE_STANDALONE":D.matchMedia("(display-mode: minimal-ui)").matches?"WEB_DISPLAY_MODE_MINIMAL_UI":D.matchMedia("(display-mode: fullscreen)").matches?"WEB_DISPLAY_MODE_FULLSCREEN":D.matchMedia("(display-mode: browser)").matches?"WEB_DISPLAY_MODE_BROWSER":"WEB_DISPLAY_MODE_UNKNOWN"}catch(a){return"WEB_DISPLAY_MODE_UNKNOWN"}}
;function Rn(){this.Qd=!0}
function Sn(){Rn.instance||(Rn.instance=new Rn);return Rn.instance}
function Tn(a,b){a={};var c=[];"USER_SESSION_ID"in Im&&c.push({key:"u",value:R("USER_SESSION_ID")});if(c=lg(c))a.Authorization=c,c=b=b==null?void 0:b.sessionIndex,c===void 0&&(c=Number(R("SESSION_INDEX",0)),c=isNaN(c)?0:c),S("voice_search_auth_header_removal")||(a["X-Goog-AuthUser"]=c.toString()),"INNERTUBE_HOST_OVERRIDE"in Im||(a["X-Origin"]=window.location.origin),b===void 0&&"DELEGATED_SESSION_ID"in Im&&(a["X-Goog-PageId"]=R("DELEGATED_SESSION_ID"));return a}
;var Un={identityType:"UNAUTHENTICATED_IDENTITY_TYPE_UNKNOWN"};function Vn(a,b,c,d,e){ig.set(""+a,b,{Xb:c,path:"/",domain:d===void 0?"youtube.com":d,secure:e===void 0?!1:e})}
function Wn(a){return ig.get(""+a,void 0)}
function Xn(a,b,c){ig.remove(""+a,b===void 0?"/":b,c===void 0?"youtube.com":c)}
function Yn(){if(S("embeds_web_enable_cookie_detection_fix")){if(!D.navigator.cookieEnabled)return!1}else if(!ig.isEnabled())return!1;if(ig.h.cookie)return!0;S("embeds_web_enable_cookie_detection_fix")?ig.set("TESTCOOKIESENABLED","1",{Xb:60,ff:"none",secure:!0}):ig.set("TESTCOOKIESENABLED","1",{Xb:60});if(ig.get("TESTCOOKIESENABLED")!=="1")return!1;ig.remove("TESTCOOKIESENABLED");return!0}
;var Zn=F("ytglobal.prefsUserPrefsPrefs_")||{};E("ytglobal.prefsUserPrefsPrefs_",Zn);function $n(){this.h=R("ALT_PREF_COOKIE_NAME","PREF");this.i=R("ALT_PREF_COOKIE_DOMAIN","youtube.com");var a=Wn(this.h);a&&this.parse(a)}
var ao;function bo(){ao||(ao=new $n);return ao}
p=$n.prototype;p.get=function(a,b){co(a);eo(a);a=Zn[a]!==void 0?Zn[a].toString():null;return a!=null?a:b?b:""};
p.set=function(a,b){co(a);eo(a);if(b==null)throw Error("ExpectedNotNull");Zn[a]=b.toString()};
function fo(a){return!!((go("f"+(Math.floor(a/31)+1))||0)&1<<a%31)}
p.remove=function(a){co(a);eo(a);delete Zn[a]};
p.clear=function(){for(var a in Zn)delete Zn[a]};
function eo(a){if(/^f([1-9][0-9]*)$/.test(a))throw Error("ExpectedRegexMatch: "+a);}
function co(a){if(!/^\w+$/.test(a))throw Error("ExpectedRegexMismatch: "+a);}
function go(a){a=Zn[a]!==void 0?Zn[a].toString():null;return a!=null&&/^[A-Fa-f0-9]+$/.test(a)?parseInt(a,16):null}
p.parse=function(a){a=decodeURIComponent(a).split("&");for(var b=0;b<a.length;b++){var c=a[b].split("="),d=c[0];(c=c[1])&&(Zn[d]=c.toString())}};var ho={bluetooth:"CONN_DISCO",cellular:"CONN_CELLULAR_UNKNOWN",ethernet:"CONN_WIFI",none:"CONN_NONE",wifi:"CONN_WIFI",wimax:"CONN_CELLULAR_4G",other:"CONN_UNKNOWN",unknown:"CONN_UNKNOWN","slow-2g":"CONN_CELLULAR_2G","2g":"CONN_CELLULAR_2G","3g":"CONN_CELLULAR_3G","4g":"CONN_CELLULAR_4G"},io={"slow-2g":"EFFECTIVE_CONNECTION_TYPE_SLOW_2G","2g":"EFFECTIVE_CONNECTION_TYPE_2G","3g":"EFFECTIVE_CONNECTION_TYPE_3G","4g":"EFFECTIVE_CONNECTION_TYPE_4G"};
function jo(){var a=D.navigator;return a?a.connection:void 0}
function ko(){var a=jo();if(a){var b=ho[a.type||"unknown"]||"CONN_UNKNOWN";a=ho[a.effectiveType||"unknown"]||"CONN_UNKNOWN";b==="CONN_CELLULAR_UNKNOWN"&&a!=="CONN_UNKNOWN"&&(b=a);if(b!=="CONN_UNKNOWN")return b;if(a!=="CONN_UNKNOWN")return a}}
function lo(){var a=jo();if(a!=null&&a.effectiveType)return io.hasOwnProperty(a.effectiveType)?io[a.effectiveType]:"EFFECTIVE_CONNECTION_TYPE_UNKNOWN"}
;function T(a){var b=C.apply(1,arguments);var c=Error.call(this,a);this.message=c.message;"stack"in c&&(this.stack=c.stack);this.args=[].concat(A(b));Object.setPrototypeOf(this,this.constructor.prototype)}
v(T,Error);function mo(){try{return no(),!0}catch(a){return!1}}
function no(a){if(R("DATASYNC_ID")!==void 0)return R("DATASYNC_ID");throw new T("Datasync ID not set",a===void 0?"unknown":a);}
;function oo(){}
function po(a,b){return Xj.Sa(a,0,b)}
oo.prototype.pa=function(a,b){return this.Sa(a,1,b)};
oo.prototype.Lb=function(a){var b=F("yt.scheduler.instance.addImmediateJob");b?b(a):a()};var qo=jn("web_emulated_idle_callback_delay",300),ro=1E3/60-3,so=[8,5,4,3,2,1,0];
function to(a){a=a===void 0?{}:a;I.call(this);this.i=[];this.j={};this.Z=this.h=0;this.Y=this.u=!1;this.M=[];this.U=this.ha=!1;for(var b=y(so),c=b.next();!c.done;c=b.next())this.i[c.value]=[];this.o=0;this.Jc=a.timeout||1;this.G=ro;this.A=0;this.xa=this.Se.bind(this);this.Kb=this.zf.bind(this);this.Qa=this.be.bind(this);this.Ra=this.Ce.bind(this);this.fb=this.Ze.bind(this);this.Fa=!!window.requestIdleCallback&&!!window.cancelIdleCallback&&!S("disable_scheduler_requestIdleCallback");(this.ma=a.useRaf!==
!1&&!!window.requestAnimationFrame)&&document.addEventListener("visibilitychange",this.xa)}
v(to,I);p=to.prototype;p.Lb=function(a){var b=Xa();uo(this,a);a=Xa()-b;this.u||(this.G-=a)};
p.Sa=function(a,b,c){++this.Z;if(b===10)return this.Lb(a),this.Z;var d=this.Z;this.j[d]=a;this.u&&!c?this.M.push({id:d,priority:b}):(this.i[b].push(d),this.Y||this.u||(this.h!==0&&vo(this)!==this.A&&this.stop(),this.start()));return d};
p.qa=function(a){delete this.j[a]};
function wo(a){a.M.length=0;for(var b=5;b>=0;b--)a.i[b].length=0;a.i[8].length=0;a.j={};a.stop()}
p.isHidden=function(){return!!document.hidden||!1};
function xo(a){return!a.isHidden()&&a.ma}
function vo(a){if(a.i[8].length){if(a.U)return 4;if(xo(a))return 3}for(var b=5;b>=a.o;b--)if(a.i[b].length>0)return b>0?xo(a)?3:2:1;return 0}
p.Ha=function(a){var b=F("yt.logging.errors.log");b&&b(a)};
function uo(a,b){try{b()}catch(c){a.Ha(c)}}
function yo(a){for(var b=y(so),c=b.next();!c.done;c=b.next())if(a.i[c.value].length)return!0;return!1}
p.Ce=function(a){var b=void 0;a&&(b=a.timeRemaining());this.ha=!0;zo(this,b);this.ha=!1};
p.zf=function(){zo(this)};
p.be=function(){Ao(this)};
p.Ze=function(a){this.U=!0;var b=vo(this);b===4&&b!==this.A&&(this.stop(),this.start());zo(this,void 0,a);this.U=!1};
p.Se=function(){this.isHidden()||Ao(this);this.h&&(this.stop(),this.start())};
function Ao(a){a.stop();a.u=!0;for(var b=Xa(),c=a.i[8];c.length;){var d=c.shift(),e=a.j[d];delete a.j[d];e&&uo(a,e)}Bo(a);a.u=!1;yo(a)&&a.start();b=Xa()-b;a.G-=b}
function Bo(a){for(var b=0,c=a.M.length;b<c;b++){var d=a.M[b];a.i[d.priority].push(d.id)}a.M.length=0}
function zo(a,b,c){a.U&&a.A===4&&a.h||a.stop();a.u=!0;b=Xa()+(b||a.G);for(var d=a.i[5];d.length;){var e=d.shift(),f=a.j[e];delete a.j[e];if(f){e=a;try{f(c)}catch(l){e.Ha(l)}}}for(d=a.i[4];d.length;)c=d.shift(),f=a.j[c],delete a.j[c],f&&uo(a,f);d=a.ha?0:1;d=a.o>d?a.o:d;if(!(Xa()>=b)){do{a:{c=a;f=d;for(e=3;e>=f;e--)for(var g=c.i[e];g.length;){var h=g.shift(),k=c.j[h];delete c.j[h];if(k){c=k;break a}}c=null}c&&uo(a,c)}while(c&&Xa()<b)}a.u=!1;Bo(a);a.G=ro;yo(a)&&a.start()}
p.start=function(){this.Y=!1;if(this.h===0)switch(this.A=vo(this),this.A){case 1:var a=this.Ra;this.h=this.Fa?window.requestIdleCallback(a,{timeout:3E3}):window.setTimeout(a,qo);break;case 2:this.h=window.setTimeout(this.Kb,this.Jc);break;case 3:this.h=window.requestAnimationFrame(this.fb);break;case 4:this.h=window.setTimeout(this.Qa,0)}};
p.pause=function(){this.stop();this.Y=!0};
p.stop=function(){if(this.h){switch(this.A){case 1:var a=this.h;this.Fa?window.cancelIdleCallback(a):window.clearTimeout(a);break;case 2:case 4:window.clearTimeout(this.h);break;case 3:window.cancelAnimationFrame(this.h)}this.h=0}};
p.ba=function(){wo(this);this.stop();this.ma&&document.removeEventListener("visibilitychange",this.xa);I.prototype.ba.call(this)};var Co=F("yt.scheduler.instance.timerIdMap_")||{},Do=jn("kevlar_tuner_scheduler_soft_state_timer_ms",800),Eo=0,Fo=0;function Go(){var a=F("ytglobal.schedulerInstanceInstance_");if(!a||a.ea)a=new to(R("scheduler")||{}),E("ytglobal.schedulerInstanceInstance_",a);return a}
function Ho(){Io();var a=F("ytglobal.schedulerInstanceInstance_");a&&(vc(a),E("ytglobal.schedulerInstanceInstance_",null))}
function Io(){wo(Go());for(var a in Co)Co.hasOwnProperty(a)&&delete Co[Number(a)]}
function Jo(a,b,c){if(!c)return c=c===void 0,-Go().Sa(a,b,c);var d=window.setTimeout(function(){var e=Go().Sa(a,b);Co[d]=e},c);
return d}
function Ko(a){Go().Lb(a)}
function Lo(a){var b=Go();if(a<0)b.qa(-a);else{var c=Co[a];c?(b.qa(c),delete Co[a]):window.clearTimeout(a)}}
function Mo(){No()}
function No(){window.clearTimeout(Eo);Go().start()}
function Oo(){Go().pause();window.clearTimeout(Eo);Eo=window.setTimeout(Mo,Do)}
function Po(){window.clearTimeout(Fo);Fo=window.setTimeout(function(){Qo(0)},Do)}
function Qo(a){Po();var b=Go();b.o=a;b.start()}
function Ro(a){Po();var b=Go();b.o>a&&(b.o=a,b.start())}
function So(){window.clearTimeout(Fo);var a=Go();a.o=0;a.start()}
function To(){F("yt.scheduler.initialized")||(E("yt.scheduler.instance.dispose",Ho),E("yt.scheduler.instance.addJob",Jo),E("yt.scheduler.instance.addImmediateJob",Ko),E("yt.scheduler.instance.cancelJob",Lo),E("yt.scheduler.instance.cancelAllJobs",Io),E("yt.scheduler.instance.start",No),E("yt.scheduler.instance.pause",Oo),E("yt.scheduler.instance.setPriorityThreshold",Qo),E("yt.scheduler.instance.enablePriorityThreshold",Ro),E("yt.scheduler.instance.clearPriorityThreshold",So),E("yt.scheduler.initialized",
!0))}
;function Uo(){oo.apply(this,arguments)}
v(Uo,oo);function Vo(){Uo.instance||(Uo.instance=new Uo);return Uo.instance}
Uo.prototype.Sa=function(a,b,c){c!==void 0&&Number.isNaN(Number(c))&&(c=void 0);var d=F("yt.scheduler.instance.addJob");return d?d(a,b,c):c===void 0?(a(),NaN):fn(a,c||0)};
Uo.prototype.qa=function(a){if(a===void 0||!Number.isNaN(Number(a))){var b=F("yt.scheduler.instance.cancelJob");b?b(a):window.clearTimeout(a)}};
Uo.prototype.start=function(){var a=F("yt.scheduler.instance.start");a&&a()};
Uo.prototype.pause=function(){var a=F("yt.scheduler.instance.pause");a&&a()};
var Xj=Vo();S("web_scheduler_auto_init")&&To();function Wo(a){var b=new xk;this.h=(a=b.isAvailable()?a?new yk(b,a):b:null)?new sk(a):null;this.i=document.domain||window.location.hostname}
Wo.prototype.set=function(a,b,c,d){c=c||31104E3;this.remove(a);if(this.h)try{this.h.set(a,b,Date.now()+c*1E3);return}catch(f){}var e="";if(d)try{e=escape((new Ti).serialize(b))}catch(f){return}else e=escape(b);Vn(a,e,c,this.i)};
Wo.prototype.get=function(a,b){var c=void 0,d=!this.h;if(!d)try{c=this.h.get(a)}catch(e){d=!0}if(d&&(c=Wn(a))&&(c=unescape(c),b))try{c=JSON.parse(c)}catch(e){this.remove(a),c=void 0}return c};
Wo.prototype.remove=function(a){this.h&&this.h.remove(a);Xn(a,"/",this.i)};var Xo=function(){var a;return function(){a||(a=new Wo("ytidb"));return a}}();
function Yo(){var a;return(a=Xo())==null?void 0:a.get("LAST_RESULT_ENTRY_KEY",!0)}
;var Zo=[],$o,ap=!1;function bp(){var a={};for($o=new cp(a.handleError===void 0?dp:a.handleError,a.logEvent===void 0?ep:a.logEvent);Zo.length>0;)switch(a=Zo.shift(),a.type){case "ERROR":$o.Ha(a.payload);break;case "EVENT":$o.logEvent(a.eventType,a.payload)}}
function fp(a){ap||($o?$o.Ha(a):(Zo.push({type:"ERROR",payload:a}),Zo.length>10&&Zo.shift()))}
function gp(a,b){ap||($o?$o.logEvent(a,b):(Zo.push({type:"EVENT",eventType:a,payload:b}),Zo.length>10&&Zo.shift()))}
;function hp(a){if(a.indexOf(":")>=0)throw Error("Database name cannot contain ':'");}
function ip(a){return a.substr(0,a.indexOf(":"))||a}
;var jp=md||nd;function kp(a){var b=Wc();return b?b.toLowerCase().indexOf(a)>=0:!1}
;var lp={},mp=(lp.AUTH_INVALID="No user identifier specified.",lp.EXPLICIT_ABORT="Transaction was explicitly aborted.",lp.IDB_NOT_SUPPORTED="IndexedDB is not supported.",lp.MISSING_INDEX="Index not created.",lp.MISSING_OBJECT_STORES="Object stores not created.",lp.DB_DELETED_BY_MISSING_OBJECT_STORES="Database is deleted because expected object stores were not created.",lp.DB_REOPENED_BY_MISSING_OBJECT_STORES="Database is reopened because expected object stores were not created.",lp.UNKNOWN_ABORT="Transaction was aborted for unknown reasons.",
lp.QUOTA_EXCEEDED="The current transaction exceeded its quota limitations.",lp.QUOTA_MAYBE_EXCEEDED="The current transaction may have failed because of exceeding quota limitations.",lp.EXECUTE_TRANSACTION_ON_CLOSED_DB="Can't start a transaction on a closed database",lp.INCOMPATIBLE_DB_VERSION="The binary is incompatible with the database version",lp),np={},op=(np.AUTH_INVALID="ERROR",np.EXECUTE_TRANSACTION_ON_CLOSED_DB="WARNING",np.EXPLICIT_ABORT="IGNORED",np.IDB_NOT_SUPPORTED="ERROR",np.MISSING_INDEX=
"WARNING",np.MISSING_OBJECT_STORES="ERROR",np.DB_DELETED_BY_MISSING_OBJECT_STORES="WARNING",np.DB_REOPENED_BY_MISSING_OBJECT_STORES="WARNING",np.QUOTA_EXCEEDED="WARNING",np.QUOTA_MAYBE_EXCEEDED="WARNING",np.UNKNOWN_ABORT="WARNING",np.INCOMPATIBLE_DB_VERSION="WARNING",np),pp={},qp=(pp.AUTH_INVALID=!1,pp.EXECUTE_TRANSACTION_ON_CLOSED_DB=!1,pp.EXPLICIT_ABORT=!1,pp.IDB_NOT_SUPPORTED=!1,pp.MISSING_INDEX=!1,pp.MISSING_OBJECT_STORES=!1,pp.DB_DELETED_BY_MISSING_OBJECT_STORES=!1,pp.DB_REOPENED_BY_MISSING_OBJECT_STORES=
!1,pp.QUOTA_EXCEEDED=!1,pp.QUOTA_MAYBE_EXCEEDED=!0,pp.UNKNOWN_ABORT=!0,pp.INCOMPATIBLE_DB_VERSION=!1,pp);function rp(a,b,c,d,e){b=b===void 0?{}:b;c=c===void 0?mp[a]:c;d=d===void 0?op[a]:d;e=e===void 0?qp[a]:e;T.call(this,c,Object.assign({},{name:"YtIdbKnownError",isSw:self.document===void 0,isIframe:self!==self.top,type:a},b));this.type=a;this.message=c;this.level=d;this.h=e;Object.setPrototypeOf(this,rp.prototype)}
v(rp,T);function sp(a,b){rp.call(this,"MISSING_OBJECT_STORES",{expectedObjectStores:b,foundObjectStores:a},mp.MISSING_OBJECT_STORES);Object.setPrototypeOf(this,sp.prototype)}
v(sp,rp);function tp(a,b){var c=Error.call(this);this.message=c.message;"stack"in c&&(this.stack=c.stack);this.index=a;this.objectStore=b;Object.setPrototypeOf(this,tp.prototype)}
v(tp,Error);var up=["The database connection is closing","Can't start a transaction on a closed database","A mutation operation was attempted on a database that did not allow mutations"];
function vp(a,b,c,d){b=ip(b);var e=a instanceof Error?a:Error("Unexpected error: "+a);if(e instanceof rp)return e;a={objectStoreNames:c,dbName:b,dbVersion:d};if(e.name==="QuotaExceededError")return new rp("QUOTA_EXCEEDED",a);if(od&&e.name==="UnknownError")return new rp("QUOTA_MAYBE_EXCEEDED",a);if(e instanceof tp)return new rp("MISSING_INDEX",Object.assign({},a,{objectStore:e.objectStore,index:e.index}));if(e.name==="InvalidStateError"&&up.some(function(f){return e.message.includes(f)}))return new rp("EXECUTE_TRANSACTION_ON_CLOSED_DB",
a);
if(e.name==="AbortError")return new rp("UNKNOWN_ABORT",a,e.message);e.args=[Object.assign({},a,{name:"IdbError",Gd:e.name})];e.level="WARNING";return e}
function wp(a,b,c){var d=Yo();return new rp("IDB_NOT_SUPPORTED",{context:{caller:a,publicName:b,version:c,hasSucceededOnce:d==null?void 0:d.hasSucceededOnce}})}
;function xp(a){if(!a)throw Error();throw a;}
function yp(a){return a}
function zp(a){this.h=a}
function Ap(a){function b(e){if(d.state.status==="PENDING"){d.state={status:"REJECTED",reason:e};e=y(d.i);for(var f=e.next();!f.done;f=e.next())f=f.value,f()}}
function c(e){if(d.state.status==="PENDING"){d.state={status:"FULFILLED",value:e};e=y(d.h);for(var f=e.next();!f.done;f=e.next())f=f.value,f()}}
var d=this;this.state={status:"PENDING"};this.h=[];this.i=[];a=a.h;try{a(c,b)}catch(e){b(e)}}
Ap.all=function(a){return new Ap(new zp(function(b,c){var d=[],e=a.length;e===0&&b(d);for(var f={Bb:0};f.Bb<a.length;f={Bb:f.Bb},++f.Bb)Ap.resolve(a[f.Bb]).then(function(g){return function(h){d[g.Bb]=h;e--;e===0&&b(d)}}(f)).catch(function(g){c(g)})}))};
Ap.resolve=function(a){return new Ap(new zp(function(b,c){a instanceof Ap?a.then(b,c):b(a)}))};
Ap.reject=function(a){return new Ap(new zp(function(b,c){c(a)}))};
Ap.prototype.then=function(a,b){var c=this,d=a!=null?a:yp,e=b!=null?b:xp;return new Ap(new zp(function(f,g){c.state.status==="PENDING"?(c.h.push(function(){Bp(c,c,d,f,g)}),c.i.push(function(){Cp(c,c,e,f,g)})):c.state.status==="FULFILLED"?Bp(c,c,d,f,g):c.state.status==="REJECTED"&&Cp(c,c,e,f,g)}))};
Ap.prototype.catch=function(a){return this.then(void 0,a)};
function Bp(a,b,c,d,e){try{if(a.state.status!=="FULFILLED")throw Error("calling handleResolve before the promise is fulfilled.");var f=c(a.state.value);f instanceof Ap?Dp(a,b,f,d,e):d(f)}catch(g){e(g)}}
function Cp(a,b,c,d,e){try{if(a.state.status!=="REJECTED")throw Error("calling handleReject before the promise is rejected.");var f=c(a.state.reason);f instanceof Ap?Dp(a,b,f,d,e):d(f)}catch(g){e(g)}}
function Dp(a,b,c,d,e){b===c?e(new TypeError("Circular promise chain detected.")):c.then(function(f){f instanceof Ap?Dp(a,b,f,d,e):d(f)},function(f){e(f)})}
;function Ep(a,b,c){function d(){c(a.error);f()}
function e(){b(a.result);f()}
function f(){try{a.removeEventListener("success",e),a.removeEventListener("error",d)}catch(g){}}
a.addEventListener("success",e);a.addEventListener("error",d)}
function Fp(a){return new Promise(function(b,c){Ep(a,b,c)})}
function Gp(a){return new Ap(new zp(function(b,c){Ep(a,b,c)}))}
;function Hp(a,b){return new Ap(new zp(function(c,d){function e(){var f=a?b(a):null;f?f.then(function(g){a=g;e()},d):c()}
e()}))}
;var Ip=window,V=Ip.ytcsi&&Ip.ytcsi.now?Ip.ytcsi.now:Ip.performance&&Ip.performance.timing&&Ip.performance.now&&Ip.performance.timing.navigationStart?function(){return Ip.performance.timing.navigationStart+Ip.performance.now()}:function(){return(new Date).getTime()};function Jp(a,b){this.h=a;this.options=b;this.transactionCount=0;this.j=Math.round(V());this.i=!1}
p=Jp.prototype;p.add=function(a,b,c){return Kp(this,[a],{mode:"readwrite",ka:!0},function(d){return d.objectStore(a).add(b,c)})};
p.clear=function(a){return Kp(this,[a],{mode:"readwrite",ka:!0},function(b){return b.objectStore(a).clear()})};
p.close=function(){this.h.close();var a;((a=this.options)==null?0:a.closed)&&this.options.closed()};
p.count=function(a,b){return Kp(this,[a],{mode:"readonly",ka:!0},function(c){return c.objectStore(a).count(b)})};
function Lp(a,b,c){a=a.h.createObjectStore(b,c);return new Mp(a)}
p.delete=function(a,b){return Kp(this,[a],{mode:"readwrite",ka:!0},function(c){return c.objectStore(a).delete(b)})};
p.get=function(a,b){return Kp(this,[a],{mode:"readonly",ka:!0},function(c){return c.objectStore(a).get(b)})};
function Np(a,b,c){return Kp(a,[b],{mode:"readwrite",ka:!0},function(d){d=d.objectStore(b);return Gp(d.h.put(c,void 0))})}
p.objectStoreNames=function(){return Array.from(this.h.objectStoreNames)};
function Kp(a,b,c,d){var e,f,g,h,k,l,m,n,r,t,w,x;return B(function(z){switch(z.h){case 1:var G={mode:"readonly",ka:!1,tag:"IDB_TRANSACTION_TAG_UNKNOWN"};typeof c==="string"?G.mode=c:Object.assign(G,c);e=G;a.transactionCount++;f=e.ka?3:1;g=0;case 2:if(h){z.B(4);break}g++;k=Math.round(V());wa(z,5);l=a.h.transaction(b,e.mode);G=z.yield;var H=new Op(l);H=Pp(H,d);return G.call(z,H,7);case 7:return m=z.i,n=Math.round(V()),Qp(a,k,n,g,void 0,b.join(),e),z.return(m);case 5:r=ya(z);t=Math.round(V());w=vp(r,
a.h.name,b.join(),a.h.version);if((x=w instanceof rp&&!w.h)||g>=f)Qp(a,k,t,g,w,b.join(),e),h=w;z.B(2);break;case 4:return z.return(Promise.reject(h))}})}
function Qp(a,b,c,d,e,f,g){b=c-b;e?(e instanceof rp&&(e.type==="QUOTA_EXCEEDED"||e.type==="QUOTA_MAYBE_EXCEEDED")&&gp("QUOTA_EXCEEDED",{dbName:ip(a.h.name),objectStoreNames:f,transactionCount:a.transactionCount,transactionMode:g.mode}),e instanceof rp&&e.type==="UNKNOWN_ABORT"&&(c-=a.j,c<0&&c>=2147483648&&(c=0),gp("TRANSACTION_UNEXPECTEDLY_ABORTED",{objectStoreNames:f,transactionDuration:b,transactionCount:a.transactionCount,dbDuration:c}),a.i=!0),Rp(a,!1,d,f,b,g.tag),fp(e)):Rp(a,!0,d,f,b,g.tag)}
function Rp(a,b,c,d,e,f){gp("TRANSACTION_ENDED",{objectStoreNames:d,connectionHasUnknownAbortedTransaction:a.i,duration:e,isSuccessful:b,tryCount:c,tag:f===void 0?"IDB_TRANSACTION_TAG_UNKNOWN":f})}
p.getName=function(){return this.h.name};
function Mp(a){this.h=a}
p=Mp.prototype;p.add=function(a,b){return Gp(this.h.add(a,b))};
p.autoIncrement=function(){return this.h.autoIncrement};
p.clear=function(){return Gp(this.h.clear()).then(function(){})};
function Sp(a,b,c){a.h.createIndex(b,c,{unique:!1})}
p.count=function(a){return Gp(this.h.count(a))};
function Tp(a,b){return Up(a,{query:b},function(c){return c.delete().then(function(){return Vp(c)})}).then(function(){})}
p.delete=function(a){return a instanceof IDBKeyRange?Tp(this,a):Gp(this.h.delete(a))};
p.get=function(a){return Gp(this.h.get(a))};
p.index=function(a){try{return new Wp(this.h.index(a))}catch(b){if(b instanceof Error&&b.name==="NotFoundError")throw new tp(a,this.h.name);throw b;}};
p.getName=function(){return this.h.name};
p.keyPath=function(){return this.h.keyPath};
function Up(a,b,c){a=a.h.openCursor(b.query,b.direction);return Xp(a).then(function(d){return Hp(d,c)})}
function Op(a){var b=this;this.h=a;this.i=new Map;this.aborted=!1;this.done=new Promise(function(c,d){b.h.addEventListener("complete",function(){c()});
b.h.addEventListener("error",function(e){e.currentTarget===e.target&&d(b.h.error)});
b.h.addEventListener("abort",function(){var e=b.h.error;if(e)d(e);else if(!b.aborted){e=rp;for(var f=b.h.objectStoreNames,g=[],h=0;h<f.length;h++){var k=f.item(h);if(k===null)throw Error("Invariant: item in DOMStringList is null");g.push(k)}e=new e("UNKNOWN_ABORT",{objectStoreNames:g.join(),dbName:b.h.db.name,mode:b.h.mode});d(e)}})})}
function Pp(a,b){var c=new Promise(function(d,e){try{b(a).then(function(f){d(f)}).catch(e)}catch(f){e(f),a.abort()}});
return Promise.all([c,a.done]).then(function(d){return y(d).next().value})}
Op.prototype.abort=function(){this.h.abort();this.aborted=!0;throw new rp("EXPLICIT_ABORT");};
Op.prototype.objectStore=function(a){a=this.h.objectStore(a);var b=this.i.get(a);b||(b=new Mp(a),this.i.set(a,b));return b};
function Wp(a){this.h=a}
p=Wp.prototype;p.count=function(a){return Gp(this.h.count(a))};
p.delete=function(a){return Yp(this,{query:a},function(b){return b.delete().then(function(){return Vp(b)})})};
p.get=function(a){return Gp(this.h.get(a))};
p.keyPath=function(){return this.h.keyPath};
p.unique=function(){return this.h.unique};
function Yp(a,b,c){a=a.h.openCursor(b.query===void 0?null:b.query,b.direction===void 0?"next":b.direction);return Xp(a).then(function(d){return Hp(d,c)})}
function Zp(a,b){this.request=a;this.cursor=b}
function Xp(a){return Gp(a).then(function(b){return b?new Zp(a,b):null})}
function Vp(a){a.cursor.continue(void 0);return Xp(a.request)}
Zp.prototype.delete=function(){return Gp(this.cursor.delete()).then(function(){})};
Zp.prototype.getValue=function(){return this.cursor.value};
Zp.prototype.update=function(a){return Gp(this.cursor.update(a))};function $p(a,b,c){return new Promise(function(d,e){function f(){r||(r=new Jp(g.result,{closed:n}));return r}
var g=b!==void 0?self.indexedDB.open(a,b):self.indexedDB.open(a);var h=c.ee,k=c.blocking,l=c.xf,m=c.upgrade,n=c.closed,r;g.addEventListener("upgradeneeded",function(t){try{if(t.newVersion===null)throw Error("Invariant: newVersion on IDbVersionChangeEvent is null");if(g.transaction===null)throw Error("Invariant: transaction on IDbOpenDbRequest is null");t.dataLoss&&t.dataLoss!=="none"&&gp("IDB_DATA_CORRUPTED",{reason:t.dataLossMessage||"unknown reason",dbName:ip(a)});var w=f(),x=new Op(g.transaction);
m&&m(w,function(z){return t.oldVersion<z&&t.newVersion>=z},x);
x.done.catch(function(z){e(z)})}catch(z){e(z)}});
g.addEventListener("success",function(){var t=g.result;k&&t.addEventListener("versionchange",function(){k(f())});
t.addEventListener("close",function(){gp("IDB_UNEXPECTEDLY_CLOSED",{dbName:ip(a),dbVersion:t.version});l&&l()});
d(f())});
g.addEventListener("error",function(){e(g.error)});
h&&g.addEventListener("blocked",function(){h()})})}
function aq(a,b,c){c=c===void 0?{}:c;return $p(a,b,c)}
function bq(a,b){b=b===void 0?{}:b;var c,d,e,f;return B(function(g){if(g.h==1)return wa(g,2),c=self.indexedDB.deleteDatabase(a),d=b,(e=d.ee)&&c.addEventListener("blocked",function(){e()}),g.yield(Fp(c),4);
if(g.h!=2)return xa(g,0);f=ya(g);throw vp(f,a,"",-1);})}
;function cq(a,b){this.name=a;this.options=b;this.j=!0;this.u=this.o=0}
cq.prototype.i=function(a,b,c){c=c===void 0?{}:c;return aq(a,b,c)};
cq.prototype.delete=function(a){a=a===void 0?{}:a;return bq(this.name,a)};
function dq(a,b){return new rp("INCOMPATIBLE_DB_VERSION",{dbName:a.name,oldVersion:a.options.version,newVersion:b})}
function eq(a,b){if(!b)throw wp("openWithToken",ip(a.name));return a.open()}
cq.prototype.open=function(){function a(){var f,g,h,k,l,m,n,r,t,w;return B(function(x){switch(x.h){case 1:return g=(f=Error().stack)!=null?f:"",wa(x,2),x.yield(c.i(c.name,c.options.version,e),4);case 4:for(var z=h=x.i,G=c.options,H=[],U=y(Object.keys(G.Hb)),Z=U.next();!Z.done;Z=U.next()){Z=Z.value;var mb=G.Hb[Z],Qb=mb.af===void 0?Number.MAX_VALUE:mb.af;!(z.h.version>=mb.Nb)||z.h.version>=Qb||z.h.objectStoreNames.contains(Z)||H.push(Z)}k=H;if(k.length===0){x.B(5);break}l=Object.keys(c.options.Hb);
m=h.objectStoreNames();if(c.u<jn("ytidb_reopen_db_retries",0))return c.u++,h.close(),fp(new rp("DB_REOPENED_BY_MISSING_OBJECT_STORES",{dbName:c.name,expectedObjectStores:l,foundObjectStores:m})),x.return(a());if(!(c.o<jn("ytidb_remake_db_retries",1))){x.B(6);break}c.o++;return x.yield(c.delete(),7);case 7:return fp(new rp("DB_DELETED_BY_MISSING_OBJECT_STORES",{dbName:c.name,expectedObjectStores:l,foundObjectStores:m})),x.return(a());case 6:throw new sp(m,l);case 5:return x.return(h);case 2:n=ya(x);
if(n instanceof DOMException?n.name!=="VersionError":"DOMError"in self&&n instanceof DOMError?n.name!=="VersionError":!(n instanceof Object&&"message"in n)||n.message!=="An attempt was made to open a database using a lower version than the existing version."){x.B(8);break}return x.yield(c.i(c.name,void 0,Object.assign({},e,{upgrade:void 0})),9);case 9:r=x.i;t=r.h.version;if(c.options.version!==void 0&&t>c.options.version+1)throw r.close(),c.j=!1,dq(c,t);return x.return(r);case 8:throw b(),n instanceof
Error&&!S("ytidb_async_stack_killswitch")&&(n.stack=n.stack+"\n"+g.substring(g.indexOf("\n")+1)),vp(n,c.name,"",(w=c.options.version)!=null?w:-1);}})}
function b(){c.h===d&&(c.h=void 0)}
var c=this;if(!this.j)throw dq(this);if(this.h)return this.h;var d,e={blocking:function(f){f.close()},
closed:b,xf:b,upgrade:this.options.upgrade};return this.h=d=a()};var fq=new cq("YtIdbMeta",{Hb:{databases:{Nb:1}},upgrade:function(a,b){b(1)&&Lp(a,"databases",{keyPath:"actualName"})}});
function gq(a,b){var c;return B(function(d){if(d.h==1)return d.yield(eq(fq,b),2);c=d.i;return d.return(Kp(c,["databases"],{ka:!0,mode:"readwrite"},function(e){var f=e.objectStore("databases");return f.get(a.actualName).then(function(g){if(g?a.actualName!==g.actualName||a.publicName!==g.publicName||a.userIdentifier!==g.userIdentifier:1)return Gp(f.h.put(a,void 0)).then(function(){})})}))})}
function hq(a,b){var c;return B(function(d){if(d.h==1)return a?d.yield(eq(fq,b),2):d.return();c=d.i;return d.return(c.delete("databases",a))})}
function iq(a,b){var c,d;return B(function(e){return e.h==1?(c=[],e.yield(eq(fq,b),2)):e.h!=3?(d=e.i,e.yield(Kp(d,["databases"],{ka:!0,mode:"readonly"},function(f){c.length=0;return Up(f.objectStore("databases"),{},function(g){a(g.getValue())&&c.push(g.getValue());return Vp(g)})}),3)):e.return(c)})}
function jq(a){return iq(function(b){return b.publicName==="LogsDatabaseV2"&&b.userIdentifier!==void 0},a)}
function kq(a,b,c){return iq(function(d){return c?d.userIdentifier!==void 0&&!a.includes(d.userIdentifier)&&c.includes(d.publicName):d.userIdentifier!==void 0&&!a.includes(d.userIdentifier)},b)}
function lq(a){var b,c;return B(function(d){if(d.h==1)return b=no("YtIdbMeta hasAnyMeta other"),d.yield(iq(function(e){return e.userIdentifier!==void 0&&e.userIdentifier!==b},a),2);
c=d.i;return d.return(c.length>0)})}
;var mq,nq=new function(){}(new function(){});
function oq(){var a,b,c,d;return B(function(e){switch(e.h){case 1:a=Yo();if((b=a)==null?0:b.hasSucceededOnce)return e.return(!0);var f;if(f=jp)f=/WebKit\/([0-9]+)/.exec(Wc()),f=!!(f&&parseInt(f[1],10)>=600);f&&(f=/WebKit\/([0-9]+)/.exec(Wc()),f=!(f&&parseInt(f[1],10)>=602));if(f||id)return e.return(!1);try{if(c=self,!(c.indexedDB&&c.IDBIndex&&c.IDBKeyRange&&c.IDBObjectStore))return e.return(!1)}catch(g){return e.return(!1)}if(!("IDBTransaction"in self&&"objectStoreNames"in IDBTransaction.prototype))return e.return(!1);
wa(e,2);d={actualName:"yt-idb-test-do-not-use",publicName:"yt-idb-test-do-not-use",userIdentifier:void 0};return e.yield(gq(d,nq),4);case 4:return e.yield(hq("yt-idb-test-do-not-use",nq),5);case 5:return e.return(!0);case 2:return ya(e),e.return(!1)}})}
function pq(){if(mq!==void 0)return mq;ap=!0;return mq=oq().then(function(a){ap=!1;var b;if((b=Xo())!=null&&b.h){var c;b={hasSucceededOnce:((c=Yo())==null?void 0:c.hasSucceededOnce)||a};var d;(d=Xo())==null||d.set("LAST_RESULT_ENTRY_KEY",b,2592E3,!0)}return a})}
function qq(){return F("ytglobal.idbToken_")||void 0}
function rq(){var a=qq();return a?Promise.resolve(a):pq().then(function(b){(b=b?nq:void 0)&&E("ytglobal.idbToken_",b);return b})}
;var sq=0;function tq(a,b){sq||(sq=Xj.pa(function(){var c,d,e,f,g;return B(function(h){switch(h.h){case 1:return h.yield(rq(),2);case 2:c=h.i;if(!c)return h.return();d=!0;wa(h,3);return h.yield(kq(a,c,b),5);case 5:e=h.i;if(!e.length){d=!1;h.B(6);break}f=e[0];return h.yield(bq(f.actualName),7);case 7:return h.yield(hq(f.actualName,c),6);case 6:xa(h,4);break;case 3:g=ya(h),fp(g),d=!1;case 4:Xj.qa(sq),sq=0,d&&tq(a,b),h.h=0}})}))}
function uq(){var a;return B(function(b){return b.h==1?b.yield(rq(),2):(a=b.i)?b.return(lq(a)):b.return(!1)})}
new zj;function vq(a){if(!mo())throw a=new rp("AUTH_INVALID",{dbName:a}),fp(a),a;var b=no();return{actualName:a+":"+b,publicName:a,userIdentifier:b}}
function wq(a,b,c,d){var e,f,g,h,k,l;return B(function(m){switch(m.h){case 1:return f=(e=Error().stack)!=null?e:"",m.yield(rq(),2);case 2:g=m.i;if(!g)throw h=wp("openDbImpl",a,b),S("ytidb_async_stack_killswitch")||(h.stack=h.stack+"\n"+f.substring(f.indexOf("\n")+1)),fp(h),h;hp(a);k=c?{actualName:a,publicName:a,userIdentifier:void 0}:vq(a);wa(m,3);return m.yield(gq(k,g),5);case 5:return m.yield(aq(k.actualName,b,d),6);case 6:return m.return(m.i);case 3:return l=ya(m),wa(m,7),m.yield(hq(k.actualName,
g),9);case 9:xa(m,8);break;case 7:ya(m);case 8:throw l;}})}
function xq(a,b,c){c=c===void 0?{}:c;return wq(a,b,!1,c)}
function yq(a,b,c){c=c===void 0?{}:c;return wq(a,b,!0,c)}
function zq(a,b){b=b===void 0?{}:b;var c,d;return B(function(e){if(e.h==1)return e.yield(rq(),2);if(e.h!=3){c=e.i;if(!c)return e.return();hp(a);d=vq(a);return e.yield(bq(d.actualName,b),3)}return e.yield(hq(d.actualName,c),0)})}
function Aq(a,b,c){a=a.map(function(d){return B(function(e){return e.h==1?e.yield(bq(d.actualName,b),2):e.yield(hq(d.actualName,c),0)})});
return Promise.all(a).then(function(){})}
function Bq(){var a=a===void 0?{}:a;var b,c;return B(function(d){if(d.h==1)return d.yield(rq(),2);if(d.h!=3){b=d.i;if(!b)return d.return();hp("LogsDatabaseV2");return d.yield(jq(b),3)}c=d.i;return d.yield(Aq(c,a,b),0)})}
function Cq(a,b){b=b===void 0?{}:b;var c;return B(function(d){if(d.h==1)return d.yield(rq(),2);if(d.h!=3){c=d.i;if(!c)return d.return();hp(a);return d.yield(bq(a,b),3)}return d.yield(hq(a,c),0)})}
;function Dq(a,b){cq.call(this,a,b);this.options=b;hp(a)}
v(Dq,cq);function Eq(a,b){var c;return function(){c||(c=new Dq(a,b));return c}}
Dq.prototype.i=function(a,b,c){c=c===void 0?{}:c;return(this.options.shared?yq:xq)(a,b,Object.assign({},c))};
Dq.prototype.delete=function(a){a=a===void 0?{}:a;return(this.options.shared?Cq:zq)(this.name,a)};
function Fq(a,b){return Eq(a,b)}
;var Gq={},Hq=Fq("ytGcfConfig",{Hb:(Gq.coldConfigStore={Nb:1},Gq.hotConfigStore={Nb:1},Gq),shared:!1,upgrade:function(a,b){b(1)&&(Sp(Lp(a,"hotConfigStore",{keyPath:"key",autoIncrement:!0}),"hotTimestampIndex","timestamp"),Sp(Lp(a,"coldConfigStore",{keyPath:"key",autoIncrement:!0}),"coldTimestampIndex","timestamp"))},
version:1});function Iq(a){return eq(Hq(),a)}
function Jq(a,b,c){var d,e,f;return B(function(g){switch(g.h){case 1:return d={config:a,hashData:b,timestamp:V()},g.yield(Iq(c),2);case 2:return e=g.i,g.yield(e.clear("hotConfigStore"),3);case 3:return g.yield(Np(e,"hotConfigStore",d),4);case 4:return f=g.i,g.return(f)}})}
function Kq(a,b,c,d){var e,f,g;return B(function(h){switch(h.h){case 1:return e={config:a,hashData:b,configData:c,timestamp:V()},h.yield(Iq(d),2);case 2:return f=h.i,h.yield(f.clear("coldConfigStore"),3);case 3:return h.yield(Np(f,"coldConfigStore",e),4);case 4:return g=h.i,h.return(g)}})}
function Lq(a){var b,c;return B(function(d){return d.h==1?d.yield(Iq(a),2):d.h!=3?(b=d.i,c=void 0,d.yield(Kp(b,["coldConfigStore"],{mode:"readwrite",ka:!0},function(e){return Yp(e.objectStore("coldConfigStore").index("coldTimestampIndex"),{direction:"prev"},function(f){c=f.getValue()})}),3)):d.return(c)})}
function Mq(a){var b,c;return B(function(d){return d.h==1?d.yield(Iq(a),2):d.h!=3?(b=d.i,c=void 0,d.yield(Kp(b,["hotConfigStore"],{mode:"readwrite",ka:!0},function(e){return Yp(e.objectStore("hotConfigStore").index("hotTimestampIndex"),{direction:"prev"},function(f){c=f.getValue()})}),3)):d.return(c)})}
;function Nq(){I.call(this);this.i=[];this.h=[];var a=F("yt.gcf.config.hotUpdateCallbacks");a?(this.i=[].concat(A(a)),this.h=a):(this.h=[],E("yt.gcf.config.hotUpdateCallbacks",this.h))}
v(Nq,I);Nq.prototype.ba=function(){for(var a=y(this.i),b=a.next();!b.done;b=a.next()){var c=this.h;b=c.indexOf(b.value);b>=0&&c.splice(b,1)}this.i.length=0;I.prototype.ba.call(this)};function Oq(){this.h=0;this.i=new Nq}
function Pq(){var a;return(a=F("yt.gcf.config.hotConfigGroup"))!=null?a:R("RAW_HOT_CONFIG_GROUP")}
function Qq(a,b,c){var d,e,f;return B(function(g){switch(g.h){case 1:if(!S("start_client_gcf")){g.B(0);break}c&&(a.j=c,E("yt.gcf.config.hotConfigGroup",a.j||null));a.o(b);d=qq();if(!d){g.B(3);break}if(c){g.B(4);break}return g.yield(Mq(d),5);case 5:e=g.i,c=(f=e)==null?void 0:f.config;case 4:return g.yield(Jq(c,b,d),3);case 3:if(c)for(var h=c,k=y(a.i.h),l=k.next();!l.done;l=k.next())l=l.value,l(h);g.h=0}})}
function Rq(a,b,c){var d,e,f,g;return B(function(h){if(h.h==1){if(!S("start_client_gcf"))return h.B(0);a.coldHashData=b;E("yt.gcf.config.coldHashData",a.coldHashData||null);return(d=qq())?c?h.B(4):h.yield(Lq(d),5):h.B(0)}h.h!=4&&(e=h.i,c=(f=e)==null?void 0:f.config);if(!c)return h.B(0);g=c.configData;return h.yield(Kq(c,b,g,d),0)})}
function Sq(){if(!Oq.instance){var a=new Oq;Oq.instance=a}a=Oq.instance;var b=V()-a.h;if(!(a.h!==0&&b<jn("send_config_hash_timer"))){b=F("yt.gcf.config.coldConfigData");var c=F("yt.gcf.config.hotHashData"),d=F("yt.gcf.config.coldHashData");b&&c&&d&&(a.h=V());return{coldConfigData:b,hotHashData:c,coldHashData:d}}}
Oq.prototype.o=function(a){this.hotHashData=a;E("yt.gcf.config.hotHashData",this.hotHashData||null)};function Tq(){return"INNERTUBE_API_KEY"in Im&&"INNERTUBE_API_VERSION"in Im}
function Uq(){return{innertubeApiKey:R("INNERTUBE_API_KEY"),innertubeApiVersion:R("INNERTUBE_API_VERSION"),De:R("INNERTUBE_CONTEXT_CLIENT_CONFIG_INFO"),Ad:R("INNERTUBE_CONTEXT_CLIENT_NAME","WEB"),Lh:R("INNERTUBE_CONTEXT_CLIENT_NAME",1),innertubeContextClientVersion:R("INNERTUBE_CONTEXT_CLIENT_VERSION"),Fe:R("INNERTUBE_CONTEXT_HL"),Ee:R("INNERTUBE_CONTEXT_GL"),Ge:R("INNERTUBE_HOST_OVERRIDE")||"",He:!!R("INNERTUBE_USE_THIRD_PARTY_AUTH",!1),Mh:!!R("INNERTUBE_OMIT_API_KEY_WHEN_AUTH_HEADER_IS_PRESENT",
!1),appInstallData:R("SERIALIZED_CLIENT_CONFIG_DATA")}}
function Vq(a){var b={client:{hl:a.Fe,gl:a.Ee,clientName:a.Ad,clientVersion:a.innertubeContextClientVersion,configInfo:a.De}};navigator.userAgent&&(b.client.userAgent=String(navigator.userAgent));var c=D.devicePixelRatio;c&&c!=1&&(b.client.screenDensityFloat=String(c));c=R("EXPERIMENTS_TOKEN","");c!==""&&(b.client.experimentsToken=c);c=kn();c.length>0&&(b.request={internalExperimentFlags:c});c=a.Ad;if((c==="WEB"||c==="MWEB"||c===1||c===2)&&b){var d;b.client.mainAppWebInfo=(d=b.client.mainAppWebInfo)!=
null?d:{};b.client.mainAppWebInfo.webDisplayMode=Qn()}(d=F("yt.embedded_player.embed_url"))&&b&&(b.thirdParty={embedUrl:d});var e;if(S("web_log_memory_total_kbytes")&&((e=D.navigator)==null?0:e.deviceMemory)){var f;e=(f=D.navigator)==null?void 0:f.deviceMemory;b&&(b.client.memoryTotalKbytes=""+e*1E6)}a.appInstallData&&b&&(b.client.configInfo=b.client.configInfo||{},b.client.configInfo.appInstallData=a.appInstallData);(a=ko())&&b&&(b.client.connectionType=a);S("web_log_effective_connection_type")&&
(a=lo())&&b&&(b.client.effectiveConnectionType=a);S("start_client_gcf")&&(e=Sq())&&(a=e.coldConfigData,f=e.coldHashData,e=e.hotHashData,b&&(b.client.configInfo=b.client.configInfo||{},a&&(b.client.configInfo.coldConfigData=a),f&&(b.client.configInfo.coldHashData=f),e&&(b.client.configInfo.hotHashData=e)));R("DELEGATED_SESSION_ID")&&!S("pageid_as_header_web")&&(b.user={onBehalfOfUser:R("DELEGATED_SESSION_ID")});!S("fill_delegate_context_in_gel_killswitch")&&(a=R("INNERTUBE_CONTEXT_SERIALIZED_DELEGATION_CONTEXT"))&&
(b.user=Object.assign({},b.user,{serializedDelegationContext:a}));a=R("INNERTUBE_CONTEXT");var g;if(S("enable_persistent_device_token")&&(a==null?0:(g=a.client)==null?0:g.rolloutToken)){var h;b.client.rolloutToken=a==null?void 0:(h=a.client)==null?void 0:h.rolloutToken}g=Object;h=g.assign;a=b.client;f={};e=y(Object.entries(Wm(R("DEVICE",""))));for(d=e.next();!d.done;d=e.next())c=y(d.value),d=c.next().value,c=c.next().value,d==="cbrand"?f.deviceMake=c:d==="cmodel"?f.deviceModel=c:d==="cbr"?f.browserName=
c:d==="cbrver"?f.browserVersion=c:d==="cos"?f.osName=c:d==="cosver"?f.osVersion=c:d==="cplatform"&&(f.platform=c);b.client=h.call(g,a,f);return b}
function Wq(a,b,c){c=c===void 0?{}:c;var d={};R("EOM_VISITOR_DATA")?d={"X-Goog-EOM-Visitor-Id":R("EOM_VISITOR_DATA")}:d={"X-Goog-Visitor-Id":c.visitorData||R("VISITOR_DATA","")};if(b&&b.includes("www.youtube-nocookie.com"))return d;b=c.authorization||R("AUTHORIZATION");b||(a?b="Bearer "+F("gapi.auth.getToken")().Ah:(a=Tn(Sn()),S("pageid_as_header_web")||delete a["X-Goog-PageId"],d=Object.assign({},d,a)));b&&(d.Authorization=b);return d}
;var Xq=typeof TextEncoder!=="undefined"?new TextEncoder:null,Yq=Xq?function(a){return Xq.encode(a)}:function(a){for(var b=[],c=0,d=0;d<a.length;d++){var e=a.charCodeAt(d);
e<128?b[c++]=e:(e<2048?b[c++]=e>>6|192:((e&64512)==55296&&d+1<a.length&&(a.charCodeAt(d+1)&64512)==56320?(e=65536+((e&1023)<<10)+(a.charCodeAt(++d)&1023),b[c++]=e>>18|240,b[c++]=e>>12&63|128):b[c++]=e>>12|224,b[c++]=e>>6&63|128),b[c++]=e&63|128)}a=new Uint8Array(b.length);for(c=0;c<a.length;c++)a[c]=b[c];return a};var Zq={next:"wn_s",browse:"br_s",search:"sr_s",reel:"r_wrs",player:"ps_s"},$q={next:"wn_r",browse:"br_r",search:"sr_r",reel:"r_wrr",player:"ps_r"};function ar(a,b){this.version=a;this.args=b}
ar.prototype.serialize=function(){return{version:this.version,args:this.args}};function br(a,b){this.topic=a;this.h=b}
br.prototype.toString=function(){return this.topic};var cr=F("ytPubsub2Pubsub2Instance")||new N;N.prototype.subscribe=N.prototype.subscribe;N.prototype.unsubscribeByKey=N.prototype.fc;N.prototype.publish=N.prototype.sb;N.prototype.clear=N.prototype.clear;E("ytPubsub2Pubsub2Instance",cr);var dr=F("ytPubsub2Pubsub2SubscribedKeys")||{};E("ytPubsub2Pubsub2SubscribedKeys",dr);var er=F("ytPubsub2Pubsub2TopicToKeys")||{};E("ytPubsub2Pubsub2TopicToKeys",er);var fr=F("ytPubsub2Pubsub2IsAsync")||{};E("ytPubsub2Pubsub2IsAsync",fr);
E("ytPubsub2Pubsub2SkipSubKey",null);function gr(a,b){var c=hr();c&&c.publish.call(c,a.toString(),a,b)}
function ir(a){var b=jr,c=hr();if(!c)return 0;var d=c.subscribe(b.toString(),function(e,f){var g=F("ytPubsub2Pubsub2SkipSubKey");g&&g==d||(g=function(){if(dr[d])try{if(f&&b instanceof br&&b!=e)try{var h=b.h,k=f;if(!k.args||!k.version)throw Error("yt.pubsub2.Data.deserialize(): serializedData is incomplete.");try{if(!h.Sd){var l=new h;h.Sd=l.version}var m=h.Sd}catch(n){}if(!m||k.version!=m)throw Error("yt.pubsub2.Data.deserialize(): serializedData version is incompatible.");try{f=Reflect.construct(h,
Wb(k.args))}catch(n){throw n.message="yt.pubsub2.Data.deserialize(): "+n.message,n;}}catch(n){throw n.message="yt.pubsub2.pubsub2 cross-binary conversion error for "+b.toString()+": "+n.message,n;}a.call(window,f)}catch(n){Om(n)}},fr[b.toString()]?F("yt.scheduler.instance")?Xj.pa(g):fn(g,0):g())});
dr[d]=!0;er[b.toString()]||(er[b.toString()]=[]);er[b.toString()].push(d);return d}
function kr(){var a=lr,b=ir(function(c){a.apply(void 0,arguments);mr(b)});
return b}
function mr(a){var b=hr();b&&(typeof a==="number"&&(a=[a]),Pb(a,function(c){b.unsubscribeByKey(c);delete dr[c]}))}
function hr(){return F("ytPubsub2Pubsub2Instance")}
;function nr(a,b,c){c=c===void 0?{sampleRate:.1}:c;Math.random()<Math.min(.02,c.sampleRate/100)&&gr("meta_logging_csi_event",{timerName:a,ii:b})}
;var or=void 0,pr=void 0;function qr(){pr||(pr=fm(R("WORKER_SERIALIZATION_URL")));return pr||void 0}
function rr(){var a=qr();or||a===void 0||(or=new Worker(nb(a),void 0));return or}
;var sr=jn("max_body_size_to_compress",5E5),tr=jn("min_body_size_to_compress",500),ur=!0,vr=0,wr=0,xr=jn("compression_performance_threshold_lr",250),yr=jn("slow_compressions_before_abandon_count",4),zr=!1,Ar=new Map,Br=1,Cr=!0;function Dr(){if(typeof Worker==="function"&&qr()&&!zr){var a=function(c){c=c.data;if(c.op==="gzippedGelBatch"){var d=Ar.get(c.key);d&&(Er(c.gzippedBatch,d.latencyPayload,d.url,d.options,d.sendFn),Ar.delete(c.key))}},b=rr();
b&&(b.addEventListener("message",a),b.onerror=function(){Ar.clear()},zr=!0)}}
function Fr(a,b,c,d,e){e=e===void 0?!1:e;var f={startTime:V(),ticks:{},infos:{}};if(ur)try{var g=Gr(b);if(g!=null&&(g>sr||g<tr))d(a,c);else{if(S("gzip_gel_with_worker")&&(S("initial_gzip_use_main_thread")&&!Cr||!S("initial_gzip_use_main_thread"))){zr||Dr();var h=rr();if(h&&!e){Ar.set(Br,{latencyPayload:f,url:a,options:c,sendFn:d});h.postMessage({op:"gelBatchToGzip",serializedBatch:b,key:Br});Br++;return}}var k=dm(Yq(b));Er(k,f,a,c,d)}}catch(l){Pm(l),d(a,c)}else d(a,c)}
function Er(a,b,c,d,e){Cr=!1;var f=V();b.ticks.gelc=f;wr++;S("disable_compression_due_to_performance_degredation")&&f-b.startTime>=xr&&(vr++,S("abandon_compression_after_N_slow_zips")?wr===jn("compression_disable_point")&&vr>yr&&(ur=!1):ur=!1);Hr(b);d.headers||(d.headers={});d.headers["Content-Encoding"]="gzip";d.postBody=a;d.postParams=void 0;e(c,d)}
function Ir(a){var b=b===void 0?!1:b;var c=c===void 0?!1:c;var d=V(),e={startTime:d,ticks:{},infos:{}},f=b?F("yt.logging.gzipForFetch",!1):!0;if(ur&&f){if(!a.body)return a;try{var g=c?a.body:typeof a.body==="string"?a.body:JSON.stringify(a.body);f=g;if(!c&&typeof g==="string"){var h=Gr(g);if(h!=null&&(h>sr||h<tr))return a;c=b?{level:1}:void 0;f=dm(Yq(g),c);var k=V();e.ticks.gelc=k;if(b){wr++;if((S("disable_compression_due_to_performance_degredation")||S("disable_compression_due_to_performance_degradation_lr"))&&
k-d>=xr)if(vr++,S("abandon_compression_after_N_slow_zips")||S("abandon_compression_after_N_slow_zips_lr")){b=vr/wr;var l=yr/jn("compression_disable_point");wr>0&&wr%jn("compression_disable_point")===0&&b>=l&&(ur=!1)}else ur=!1;Hr(e)}}a.headers=Object.assign({},{"Content-Encoding":"gzip"},a.headers||{});a.body=f;return a}catch(m){return Pm(m),a}}else return a}
function Gr(a){try{return(new Blob(a.split(""))).size}catch(b){return Pm(b),null}}
function Hr(a){S("gel_compression_csi_killswitch")||!S("log_gel_compression_latency")&&!S("log_gel_compression_latency_lr")||nr("gel_compression",a,{sampleRate:.1})}
;function Jr(a){a=Object.assign({},a);delete a.Authorization;var b=lg();if(b){var c=new bk;c.update(R("INNERTUBE_API_KEY"));c.update(b);a.hash=rd(c.digest(),3)}return a}
;var Kr;function Lr(){Kr||(Kr=new Wo("yt.innertube"));return Kr}
function Mr(a,b,c,d){if(d)return null;d=Lr().get("nextId",!0)||1;var e=Lr().get("requests",!0)||{};e[d]={method:a,request:b,authState:Jr(c),requestTime:Math.round(V())};Lr().set("nextId",d+1,86400,!0);Lr().set("requests",e,86400,!0);return d}
function Nr(a){var b=Lr().get("requests",!0)||{};delete b[a];Lr().set("requests",b,86400,!0)}
function Or(a){var b=Lr().get("requests",!0);if(b){for(var c in b){var d=b[c];if(!(Math.round(V())-d.requestTime<6E4)){var e=d.authState,f=Jr(Wq(!1));Ag(e,f)&&(e=d.request,"requestTimeMs"in e&&(e.requestTimeMs=Math.round(V())),Pr(a,d.method,e,{}));delete b[c]}}Lr().set("requests",b,86400,!0)}}
;function Qr(a){this.jc=this.h=!1;this.potentialEsfErrorCounter=this.i=0;this.handleError=function(){};
this.zb=function(){};
this.now=Date.now;this.Sb=!1;var b;this.Rd=(b=a.Rd)!=null?b:100;var c;this.Ld=(c=a.Ld)!=null?c:1;var d;this.Jd=(d=a.Jd)!=null?d:2592E6;var e;this.Id=(e=a.Id)!=null?e:12E4;var f;this.Kd=(f=a.Kd)!=null?f:5E3;var g;this.V=(g=a.V)!=null?g:void 0;this.qc=!!a.qc;var h;this.nc=(h=a.nc)!=null?h:.1;var k;this.Bc=(k=a.Bc)!=null?k:10;a.handleError&&(this.handleError=a.handleError);a.zb&&(this.zb=a.zb);a.Sb&&(this.Sb=a.Sb);a.jc&&(this.jc=a.jc);this.W=a.W;this.Ca=a.Ca;this.ga=a.ga;this.fa=a.fa;this.sendFn=a.sendFn;
this.dd=a.dd;this.Zc=a.Zc;Rr(this)&&(!this.W||this.W("networkless_logging"))&&Sr(this)}
function Sr(a){Rr(a)&&!a.Sb&&(a.h=!0,a.qc&&Math.random()<=a.nc&&a.ga.he(a.V),Tr(a),a.fa.ta()&&a.ec(),a.fa.listen(a.dd,a.ec.bind(a)),a.fa.listen(a.Zc,a.ud.bind(a)))}
p=Qr.prototype;p.writeThenSend=function(a,b){var c=this;b=b===void 0?{}:b;if(Rr(this)&&this.h){var d={url:a,options:b,timestamp:this.now(),status:"NEW",sendCount:0};this.ga.set(d,this.V).then(function(e){d.id=e;c.fa.ta()&&Ur(c,d)}).catch(function(e){Ur(c,d);
Vr(c,e)})}else this.sendFn(a,b)};
p.sendThenWrite=function(a,b,c){var d=this;b=b===void 0?{}:b;if(Rr(this)&&this.h){var e={url:a,options:b,timestamp:this.now(),status:"NEW",sendCount:0};this.W&&this.W("nwl_skip_retry")&&(e.skipRetry=c);if(this.fa.ta()||this.W&&this.W("nwl_aggressive_send_then_write")&&!e.skipRetry){if(!e.skipRetry){var f=b.onError?b.onError:function(){};
b.onError=function(g,h){return B(function(k){if(k.h==1)return k.yield(d.ga.set(e,d.V).catch(function(l){Vr(d,l)}),2);
f(g,h);k.h=0})}}this.sendFn(a,b,e.skipRetry)}else this.ga.set(e,this.V).catch(function(g){d.sendFn(a,b,e.skipRetry);
Vr(d,g)})}else this.sendFn(a,b,this.W&&this.W("nwl_skip_retry")&&c)};
p.sendAndWrite=function(a,b){var c=this;b=b===void 0?{}:b;if(Rr(this)&&this.h){var d={url:a,options:b,timestamp:this.now(),status:"NEW",sendCount:0},e=!1,f=b.onSuccess?b.onSuccess:function(){};
d.options.onSuccess=function(g,h){d.id!==void 0?c.ga.xb(d.id,c.V):e=!0;c.fa.mb&&c.W&&c.W("vss_network_hint")&&c.fa.mb(!0);f(g,h)};
this.sendFn(d.url,d.options,void 0,!0);this.ga.set(d,this.V).then(function(g){d.id=g;e&&c.ga.xb(d.id,c.V)}).catch(function(g){Vr(c,g)})}else this.sendFn(a,b,void 0,!0)};
p.ec=function(){var a=this;if(!Rr(this))throw Error("IndexedDB is not supported: throttleSend");this.i||(this.i=this.Ca.pa(function(){var b;return B(function(c){if(c.h==1)return c.yield(a.ga.xd("NEW",a.V),2);if(c.h!=3)return b=c.i,b?c.yield(Ur(a,b),3):(a.ud(),c.return());a.i&&(a.i=0,a.ec());c.h=0})},this.Rd))};
p.ud=function(){this.Ca.qa(this.i);this.i=0};
function Ur(a,b){var c;return B(function(d){switch(d.h){case 1:if(!Rr(a))throw Error("IndexedDB is not supported: immediateSend");if(b.id===void 0){d.B(2);break}return d.yield(a.ga.Le(b.id,a.V),3);case 3:(c=d.i)||a.zb(Error("The request cannot be found in the database."));case 2:if(Wr(a,b,a.Jd)){d.B(4);break}a.zb(Error("Networkless Logging: Stored logs request expired age limit"));if(b.id===void 0){d.B(5);break}return d.yield(a.ga.xb(b.id,a.V),5);case 5:return d.return();case 4:b.skipRetry||(b=Xr(a,
b));if(!b){d.B(0);break}if(!b.skipRetry||b.id===void 0){d.B(8);break}return d.yield(a.ga.xb(b.id,a.V),8);case 8:a.sendFn(b.url,b.options,!!b.skipRetry),d.h=0}})}
function Xr(a,b){if(!Rr(a))throw Error("IndexedDB is not supported: updateRequestHandlers");var c=b.options.onError?b.options.onError:function(){};
b.options.onError=function(e,f){var g,h,k,l;return B(function(m){switch(m.h){case 1:g=Yr(f);(h=Zr(f))&&a.W&&a.W("web_enable_error_204")&&a.handleError(Error("Request failed due to compression"),b.url,f);if(!(a.W&&a.W("nwl_consider_error_code")&&g||a.W&&!a.W("nwl_consider_error_code")&&a.potentialEsfErrorCounter<=a.Bc)){m.B(2);break}if(!a.fa.Fc){m.B(3);break}return m.yield(a.fa.Fc(),3);case 3:if(a.fa.ta()){m.B(2);break}c(e,f);if(!a.W||!a.W("nwl_consider_error_code")||((k=b)==null?void 0:k.id)===void 0){m.B(6);
break}return m.yield(a.ga.ed(b.id,a.V,!1),6);case 6:return m.return();case 2:if(a.W&&a.W("nwl_consider_error_code")&&!g&&a.potentialEsfErrorCounter>a.Bc)return m.return();a.potentialEsfErrorCounter++;if(((l=b)==null?void 0:l.id)===void 0){m.B(8);break}return b.sendCount<a.Ld?m.yield(a.ga.ed(b.id,a.V,!0,h?!1:void 0),12):m.yield(a.ga.xb(b.id,a.V),8);case 12:a.Ca.pa(function(){a.fa.ta()&&a.ec()},a.Kd);
case 8:c(e,f),m.h=0}})};
var d=b.options.onSuccess?b.options.onSuccess:function(){};
b.options.onSuccess=function(e,f){var g;return B(function(h){if(h.h==1)return((g=b)==null?void 0:g.id)===void 0?h.B(2):h.yield(a.ga.xb(b.id,a.V),2);a.fa.mb&&a.W&&a.W("vss_network_hint")&&a.fa.mb(!0);d(e,f);h.h=0})};
return b}
function Wr(a,b,c){b=b.timestamp;return a.now()-b>=c?!1:!0}
function Tr(a){if(!Rr(a))throw Error("IndexedDB is not supported: retryQueuedRequests");a.ga.xd("QUEUED",a.V).then(function(b){b&&!Wr(a,b,a.Id)?a.Ca.pa(function(){return B(function(c){if(c.h==1)return b.id===void 0?c.B(2):c.yield(a.ga.ed(b.id,a.V),2);Tr(a);c.h=0})}):a.fa.ta()&&a.ec()})}
function Vr(a,b){a.Vd&&!a.fa.ta()?a.Vd(b):a.handleError(b)}
function Rr(a){return!!a.V||a.jc}
function Yr(a){var b;return(a=a==null?void 0:(b=a.error)==null?void 0:b.code)&&a>=400&&a<=599?!1:!0}
function Zr(a){var b;a=a==null?void 0:(b=a.error)==null?void 0:b.code;return!(a!==400&&a!==415)}
;var $r;
function as(){if($r)return $r();var a={};$r=Fq("LogsDatabaseV2",{Hb:(a.LogsRequestsStore={Nb:2},a),shared:!1,upgrade:function(b,c,d){c(2)&&Lp(b,"LogsRequestsStore",{keyPath:"id",autoIncrement:!0});c(3);c(5)&&(d=d.objectStore("LogsRequestsStore"),d.h.indexNames.contains("newRequest")&&d.h.deleteIndex("newRequest"),Sp(d,"newRequestV2",["status","interface","timestamp"]));c(7)&&b.h.objectStoreNames.contains("sapisid")&&b.h.deleteObjectStore("sapisid");c(9)&&b.h.objectStoreNames.contains("SWHealthLog")&&b.h.deleteObjectStore("SWHealthLog")},
version:9});return $r()}
;function bs(a){return eq(as(),a)}
function cs(a,b){var c,d,e,f;return B(function(g){if(g.h==1)return c={startTime:V(),infos:{transactionType:"YT_IDB_TRANSACTION_TYPE_WRITE"},ticks:{}},g.yield(bs(b),2);if(g.h!=3)return d=g.i,e=Object.assign({},a,{options:JSON.parse(JSON.stringify(a.options)),interface:R("INNERTUBE_CONTEXT_CLIENT_NAME",0)}),g.yield(Np(d,"LogsRequestsStore",e),3);f=g.i;c.ticks.tc=V();ds(c);return g.return(f)})}
function es(a,b){var c,d,e,f,g,h,k,l,m;return B(function(n){if(n.h==1)return c={startTime:V(),infos:{transactionType:"YT_IDB_TRANSACTION_TYPE_READ"},ticks:{}},n.yield(bs(b),2);if(n.h!=3)return d=n.i,e=R("INNERTUBE_CONTEXT_CLIENT_NAME",0),f=[a,e,0],g=[a,e,V()],h=IDBKeyRange.bound(f,g),k="prev",S("use_fifo_for_networkless")&&(k="next"),l=void 0,m=a==="NEW"?"readwrite":"readonly",S("use_readonly_for_get_most_recent_by_status_killswitch")&&(m="readwrite"),n.yield(Kp(d,["LogsRequestsStore"],{mode:m,ka:!0},
function(r){return Yp(r.objectStore("LogsRequestsStore").index("newRequestV2"),{query:h,direction:k},function(t){t.getValue()&&(l=t.getValue(),a==="NEW"&&(l.status="QUEUED",t.update(l)))})}),3);
c.ticks.tc=V();ds(c);return n.return(l)})}
function gs(a,b){var c;return B(function(d){if(d.h==1)return d.yield(bs(b),2);c=d.i;return d.return(Kp(c,["LogsRequestsStore"],{mode:"readwrite",ka:!0},function(e){var f=e.objectStore("LogsRequestsStore");return f.get(a).then(function(g){if(g)return g.status="QUEUED",Gp(f.h.put(g,void 0)).then(function(){return g})})}))})}
function hs(a,b,c,d){c=c===void 0?!0:c;var e;return B(function(f){if(f.h==1)return f.yield(bs(b),2);e=f.i;return f.return(Kp(e,["LogsRequestsStore"],{mode:"readwrite",ka:!0},function(g){var h=g.objectStore("LogsRequestsStore");return h.get(a).then(function(k){return k?(k.status="NEW",c&&(k.sendCount+=1),d!==void 0&&(k.options.compress=d),Gp(h.h.put(k,void 0)).then(function(){return k})):Ap.resolve(void 0)})}))})}
function is(a,b){var c;return B(function(d){if(d.h==1)return d.yield(bs(b),2);c=d.i;return d.return(c.delete("LogsRequestsStore",a))})}
function js(a){var b,c;return B(function(d){if(d.h==1)return d.yield(bs(a),2);b=d.i;c=V()-2592E6;return d.yield(Kp(b,["LogsRequestsStore"],{mode:"readwrite",ka:!0},function(e){return Up(e.objectStore("LogsRequestsStore"),{},function(f){if(f.getValue().timestamp<=c)return f.delete().then(function(){return Vp(f)})})}),0)})}
function ks(){B(function(a){return a.yield(Bq(),0)})}
function ds(a){S("nwl_csi_killswitch")||nr("networkless_performance",a,{sampleRate:1})}
;var ls={accountStateChangeSignedIn:23,accountStateChangeSignedOut:24,delayedEventMetricCaptured:11,latencyActionBaselined:6,latencyActionInfo:7,latencyActionTicked:5,offlineTransferStatusChanged:2,offlineImageDownload:335,playbackStartStateChanged:9,systemHealthCaptured:3,mangoOnboardingCompleted:10,mangoPushNotificationReceived:230,mangoUnforkDbMigrationError:121,mangoUnforkDbMigrationSummary:122,mangoUnforkDbMigrationPreunforkDbVersionNumber:133,mangoUnforkDbMigrationPhoneMetadata:134,mangoUnforkDbMigrationPhoneStorage:135,
mangoUnforkDbMigrationStep:142,mangoAsyncApiMigrationEvent:223,mangoDownloadVideoResult:224,mangoHomepageVideoCount:279,mangoHomeV3State:295,mangoImageClientCacheHitEvent:273,sdCardStatusChanged:98,framesDropped:12,thumbnailHovered:13,deviceRetentionInfoCaptured:14,thumbnailLoaded:15,backToAppEvent:318,streamingStatsCaptured:17,offlineVideoShared:19,appCrashed:20,youThere:21,offlineStateSnapshot:22,mdxSessionStarted:25,mdxSessionConnected:26,mdxSessionDisconnected:27,bedrockResourceConsumptionSnapshot:28,
nextGenWatchWatchSwiped:29,kidsAccountsSnapshot:30,zeroStepChannelCreated:31,tvhtml5SearchCompleted:32,offlineSharePairing:34,offlineShareUnlock:35,mdxRouteDistributionSnapshot:36,bedrockRepetitiveActionTimed:37,unpluggedDegradationInfo:229,uploadMp4HeaderMoved:38,uploadVideoTranscoded:39,uploadProcessorStarted:46,uploadProcessorEnded:47,uploadProcessorReady:94,uploadProcessorRequirementPending:95,uploadProcessorInterrupted:96,uploadFrontendEvent:241,assetPackDownloadStarted:41,assetPackDownloaded:42,
assetPackApplied:43,assetPackDeleted:44,appInstallAttributionEvent:459,playbackSessionStopped:45,adBlockerMessagingShown:48,distributionChannelCaptured:49,dataPlanCpidRequested:51,detailedNetworkTypeCaptured:52,sendStateUpdated:53,receiveStateUpdated:54,sendDebugStateUpdated:55,receiveDebugStateUpdated:56,kidsErrored:57,mdxMsnSessionStatsFinished:58,appSettingsCaptured:59,mdxWebSocketServerHttpError:60,mdxWebSocketServer:61,startupCrashesDetected:62,coldStartInfo:435,offlinePlaybackStarted:63,liveChatMessageSent:225,
liveChatUserPresent:434,liveChatBeingModerated:457,liveCreationCameraUpdated:64,liveCreationEncodingCaptured:65,liveCreationError:66,liveCreationHealthUpdated:67,liveCreationVideoEffectsCaptured:68,liveCreationStageOccured:75,liveCreationBroadcastScheduled:123,liveCreationArchiveReplacement:149,liveCreationCostreamingConnection:421,liveCreationStreamWebrtcStats:288,mdxSessionRecoveryStarted:69,mdxSessionRecoveryCompleted:70,mdxSessionRecoveryStopped:71,visualElementShown:72,visualElementHidden:73,
visualElementGestured:78,visualElementStateChanged:208,screenCreated:156,playbackAssociated:202,visualElementAttached:215,playbackContextEvent:214,cloudCastingPlaybackStarted:74,webPlayerApiCalled:76,tvhtml5AccountDialogOpened:79,foregroundHeartbeat:80,foregroundHeartbeatScreenAssociated:111,kidsOfflineSnapshot:81,mdxEncryptionSessionStatsFinished:82,playerRequestCompleted:83,liteSchedulerStatistics:84,mdxSignIn:85,spacecastMetadataLookupRequested:86,spacecastBatchLookupRequested:87,spacecastSummaryRequested:88,
spacecastPlayback:89,spacecastDiscovery:90,tvhtml5LaunchUrlComponentChanged:91,mdxBackgroundPlaybackRequestCompleted:92,mdxBrokenAdditionalDataDeviceDetected:93,tvhtml5LocalStorage:97,tvhtml5DeviceStorageStatus:147,autoCaptionsAvailable:99,playbackScrubbingEvent:339,flexyState:100,interfaceOrientationCaptured:101,mainAppBrowseFragmentCache:102,offlineCacheVerificationFailure:103,offlinePlaybackExceptionDigest:217,vrCopresenceStats:104,vrCopresenceSyncStats:130,vrCopresenceCommsStats:137,vrCopresencePartyStats:153,
vrCopresenceEmojiStats:213,vrCopresenceEvent:141,vrCopresenceFlowTransitEvent:160,vrCowatchPartyEvent:492,vrCowatchUserStartOrJoinEvent:504,vrPlaybackEvent:345,kidsAgeGateTracking:105,offlineDelayAllowedTracking:106,mainAppAutoOfflineState:107,videoAsThumbnailDownload:108,videoAsThumbnailPlayback:109,liteShowMore:110,renderingError:118,kidsProfilePinGateTracking:119,abrTrajectory:124,scrollEvent:125,streamzIncremented:126,kidsProfileSwitcherTracking:127,kidsProfileCreationTracking:129,buyFlowStarted:136,
mbsConnectionInitiated:138,mbsPlaybackInitiated:139,mbsLoadChildren:140,liteProfileFetcher:144,mdxRemoteTransaction:146,reelPlaybackError:148,reachabilityDetectionEvent:150,mobilePlaybackEvent:151,courtsidePlayerStateChanged:152,musicPersistentCacheChecked:154,musicPersistentCacheCleared:155,playbackInterrupted:157,playbackInterruptionResolved:158,fixFopFlow:159,anrDetection:161,backstagePostCreationFlowEnded:162,clientError:163,gamingAccountLinkStatusChanged:164,liteHousewarming:165,buyFlowEvent:167,
kidsParentalGateTracking:168,kidsSignedOutSettingsStatus:437,kidsSignedOutPauseHistoryFixStatus:438,tvhtml5WatchdogViolation:444,ypcUpgradeFlow:169,yongleStudy:170,ypcUpdateFlowStarted:171,ypcUpdateFlowCancelled:172,ypcUpdateFlowSucceeded:173,ypcUpdateFlowFailed:174,liteGrowthkitPromo:175,paymentFlowStarted:341,transactionFlowShowPaymentDialog:405,transactionFlowStarted:176,transactionFlowSecondaryDeviceStarted:222,transactionFlowSecondaryDeviceSignedOutStarted:383,transactionFlowCancelled:177,transactionFlowPaymentCallBackReceived:387,
transactionFlowPaymentSubmitted:460,transactionFlowPaymentSucceeded:329,transactionFlowSucceeded:178,transactionFlowFailed:179,transactionFlowPlayBillingConnectionStartEvent:428,transactionFlowSecondaryDeviceSuccess:458,transactionFlowErrorEvent:411,liteVideoQualityChanged:180,watchBreakEnablementSettingEvent:181,watchBreakFrequencySettingEvent:182,videoEffectsCameraPerformanceMetrics:183,adNotify:184,startupTelemetry:185,playbackOfflineFallbackUsed:186,outOfMemory:187,ypcPauseFlowStarted:188,ypcPauseFlowCancelled:189,
ypcPauseFlowSucceeded:190,ypcPauseFlowFailed:191,uploadFileSelected:192,ypcResumeFlowStarted:193,ypcResumeFlowCancelled:194,ypcResumeFlowSucceeded:195,ypcResumeFlowFailed:196,adsClientStateChange:197,ypcCancelFlowStarted:198,ypcCancelFlowCancelled:199,ypcCancelFlowSucceeded:200,ypcCancelFlowFailed:201,ypcCancelFlowGoToPaymentProcessor:402,ypcDeactivateFlowStarted:320,ypcRedeemFlowStarted:203,ypcRedeemFlowCancelled:204,ypcRedeemFlowSucceeded:205,ypcRedeemFlowFailed:206,ypcFamilyCreateFlowStarted:258,
ypcFamilyCreateFlowCancelled:259,ypcFamilyCreateFlowSucceeded:260,ypcFamilyCreateFlowFailed:261,ypcFamilyManageFlowStarted:262,ypcFamilyManageFlowCancelled:263,ypcFamilyManageFlowSucceeded:264,ypcFamilyManageFlowFailed:265,restoreContextEvent:207,embedsAdEvent:327,autoplayTriggered:209,clientDataErrorEvent:210,experimentalVssValidation:211,tvhtml5TriggeredEvent:212,tvhtml5FrameworksFieldTrialResult:216,tvhtml5FrameworksFieldTrialStart:220,musicOfflinePreferences:218,watchTimeSegment:219,appWidthLayoutError:221,
accountRegistryChange:226,userMentionAutoCompleteBoxEvent:227,downloadRecommendationEnablementSettingEvent:228,musicPlaybackContentModeChangeEvent:231,offlineDbOpenCompleted:232,kidsFlowEvent:233,kidsFlowCorpusSelectedEvent:234,videoEffectsEvent:235,unpluggedOpsEogAnalyticsEvent:236,playbackAudioRouteEvent:237,interactionLoggingDebugModeError:238,offlineYtbRefreshed:239,kidsFlowError:240,musicAutoplayOnLaunchAttempted:242,deviceContextActivityEvent:243,deviceContextEvent:244,templateResolutionException:245,
musicSideloadedPlaylistServiceCalled:246,embedsStorageAccessNotChecked:247,embedsHasStorageAccessResult:248,embedsItpPlayedOnReload:249,embedsRequestStorageAccessResult:250,embedsShouldRequestStorageAccessResult:251,embedsRequestStorageAccessState:256,embedsRequestStorageAccessFailedState:257,embedsItpWatchLaterResult:266,searchSuggestDecodingPayloadFailure:252,siriShortcutActivated:253,tvhtml5KeyboardPerformance:254,latencyActionSpan:255,elementsLog:267,ytbFileOpened:268,tfliteModelError:269,apiTest:270,
yongleUsbSetup:271,touStrikeInterstitialEvent:272,liteStreamToSave:274,appBundleClientEvent:275,ytbFileCreationFailed:276,adNotifyFailure:278,ytbTransferFailed:280,blockingRequestFailed:281,liteAccountSelector:282,liteAccountUiCallbacks:283,dummyPayload:284,browseResponseValidationEvent:285,entitiesError:286,musicIosBackgroundFetch:287,mdxNotificationEvent:289,layersValidationError:290,musicPwaInstalled:291,liteAccountCleanup:292,html5PlayerHealthEvent:293,watchRestoreAttempt:294,liteAccountSignIn:296,
notaireEvent:298,kidsVoiceSearchEvent:299,adNotifyFilled:300,delayedEventDropped:301,analyticsSearchEvent:302,systemDarkThemeOptOutEvent:303,flowEvent:304,networkConnectivityBaselineEvent:305,ytbFileImported:306,downloadStreamUrlExpired:307,directSignInEvent:308,lyricImpressionEvent:309,accessibilityStateEvent:310,tokenRefreshEvent:311,genericAttestationExecution:312,tvhtml5VideoSeek:313,unpluggedAutoPause:314,scrubbingEvent:315,bedtimeReminderEvent:317,tvhtml5UnexpectedRestart:319,tvhtml5StabilityTraceEvent:478,
tvhtml5OperationHealth:467,tvhtml5WatchKeyEvent:321,voiceLanguageChanged:322,tvhtml5LiveChatStatus:323,parentToolsCorpusSelectedEvent:324,offerAdsEnrollmentInitiated:325,networkQualityIntervalEvent:326,deviceStartupMetrics:328,heartbeatActionPlayerTransitioned:330,tvhtml5Lifecycle:331,heartbeatActionPlayerHalted:332,adaptiveInlineMutedSettingEvent:333,mainAppLibraryLoadingState:334,thirdPartyLogMonitoringEvent:336,appShellAssetLoadReport:337,tvhtml5AndroidAttestation:338,tvhtml5StartupSoundEvent:340,
iosBackgroundRefreshTask:342,iosBackgroundProcessingTask:343,sliEventBatch:344,postImpressionEvent:346,musicSideloadedPlaylistExport:347,idbUnexpectedlyClosed:348,voiceSearchEvent:349,mdxSessionCastEvent:350,idbQuotaExceeded:351,idbTransactionEnded:352,idbTransactionAborted:353,tvhtml5KeyboardLogging:354,idbIsSupportedCompleted:355,creatorStudioMobileEvent:356,idbDataCorrupted:357,parentToolsAppChosenEvent:358,webViewBottomSheetResized:359,activeStateControllerScrollPerformanceSummary:360,navigatorValidation:361,
mdxSessionHeartbeat:362,clientHintsPolyfillDiagnostics:363,clientHintsPolyfillEvent:364,proofOfOriginTokenError:365,kidsAddedAccountSummary:366,musicWearableDevice:367,ypcRefundFlowEvent:368,tvhtml5PlaybackMeasurementEvent:369,tvhtml5WatermarkMeasurementEvent:370,clientExpGcfPropagationEvent:371,mainAppReferrerIntent:372,leaderLockEnded:373,leaderLockAcquired:374,googleHatsEvent:375,persistentLensLaunchEvent:376,parentToolsChildWelcomeChosenEvent:378,browseThumbnailPreloadEvent:379,finalPayload:380,
mdxDialAdditionalDataUpdateEvent:381,webOrchestrationTaskLifecycleRecord:382,startupSignalEvent:384,accountError:385,gmsDeviceCheckEvent:386,accountSelectorEvent:388,accountUiCallbacks:389,mdxDialAdditionalDataProbeEvent:390,downloadsSearchIcingApiStats:391,downloadsSearchIndexUpdatedEvent:397,downloadsSearchIndexSnapshot:398,dataPushClientEvent:392,kidsCategorySelectedEvent:393,mdxDeviceManagementSnapshotEvent:394,prefetchRequested:395,prefetchableCommandExecuted:396,gelDebuggingEvent:399,webLinkTtsPlayEnd:400,
clipViewInvalid:401,persistentStorageStateChecked:403,cacheWipeoutEvent:404,playerEvent:410,sfvEffectPipelineStartedEvent:412,sfvEffectPipelinePausedEvent:429,sfvEffectPipelineEndedEvent:413,sfvEffectChosenEvent:414,sfvEffectLoadedEvent:415,sfvEffectUserInteractionEvent:465,sfvEffectFirstFrameProcessedLatencyEvent:416,sfvEffectAggregatedFramesProcessedLatencyEvent:417,sfvEffectAggregatedFramesDroppedEvent:418,sfvEffectPipelineErrorEvent:430,sfvEffectGraphFrozenEvent:419,sfvEffectGlThreadBlockedEvent:420,
mdeQosEvent:510,mdeVideoChangedEvent:442,mdePlayerPerformanceMetrics:472,mdeExporterEvent:497,genericClientExperimentEvent:423,homePreloadTaskScheduled:424,homePreloadTaskExecuted:425,homePreloadCacheHit:426,polymerPropertyChangedInObserver:427,applicationStarted:431,networkCronetRttBatch:432,networkCronetRttSummary:433,repeatChapterLoopEvent:436,seekCancellationEvent:462,lockModeTimeoutEvent:483,externalVideoShareToYoutubeAttempt:501,parentCodeEvent:502,offlineTransferStarted:4,musicOfflineMixtapePreferencesChanged:16,
mangoDailyNewVideosNotificationAttempt:40,mangoDailyNewVideosNotificationError:77,dtwsPlaybackStarted:112,dtwsTileFetchStarted:113,dtwsTileFetchCompleted:114,dtwsTileFetchStatusChanged:145,dtwsKeyframeDecoderBufferSent:115,dtwsTileUnderflowedOnNonkeyframe:116,dtwsBackfillFetchStatusChanged:143,dtwsBackfillUnderflowed:117,dtwsAdaptiveLevelChanged:128,blockingVisitorIdTimeout:277,liteSocial:18,mobileJsInvocation:297,biscottiBasedDetection:439,coWatchStateChange:440,embedsVideoDataDidChange:441,shortsFirst:443,
cruiseControlEvent:445,qoeClientLoggingContext:446,atvRecommendationJobExecuted:447,tvhtml5UserFeedback:448,producerProjectCreated:449,producerProjectOpened:450,producerProjectDeleted:451,producerProjectElementAdded:453,producerProjectElementRemoved:454,producerAppStateChange:509,producerProjectDiskInsufficientExportFailure:516,producerMediaServicesResetDetails:522,tvhtml5ShowClockEvent:455,deviceCapabilityCheckMetrics:456,youtubeClearcutEvent:461,offlineBrowseFallbackEvent:463,getCtvTokenEvent:464,
startupDroppedFramesSummary:466,screenshotEvent:468,miniAppPlayEvent:469,elementsDebugCounters:470,fontLoadEvent:471,webKillswitchReceived:473,webKillswitchExecuted:474,cameraOpenEvent:475,manualSmoothnessMeasurement:476,tvhtml5AppQualityEvent:477,polymerPropertyAccessEvent:479,miniAppSdkUsage:480,cobaltTelemetryEvent:481,crossDevicePlayback:482,channelCreatedWithObakeImage:484,channelEditedWithObakeImage:485,offlineDeleteEvent:486,crossDeviceNotificationTransfer:487,androidIntentEvent:488,unpluggedAmbientInterludesCounterfactualEvent:489,
keyPlaysPlayback:490,shortsCreationFallbackEvent:493,vssData:491,castMatch:494,miniAppPerformanceMetrics:495,userFeedbackEvent:496,kidsGuestSessionMismatch:498,musicSideloadedPlaylistMigrationEvent:499,sleepTimerSessionFinishEvent:500,watchEpPromoConflict:503,innertubeResponseCacheMetrics:505,miniAppAdEvent:506,dataPlanUpsellEvent:507,producerProjectRenamed:508,producerMediaSelectionEvent:511,embedsAutoplayStatusChanged:512,remoteConnectEvent:513,connectedSessionMisattributionEvent:514,producerProjectElementModified:515,
adsSeenClientLogging:517,producerEvent:518,tvhtml5CleanStart:519,deviceAccountMetricsEvent:520,derpLogEvent:521,playablesPortalEvent:523,ipValidationStarted:524,ipValidationReceived:525};var ms={},ns=Fq("ServiceWorkerLogsDatabase",{Hb:(ms.SWHealthLog={Nb:1},ms),shared:!0,upgrade:function(a,b){b(1)&&Sp(Lp(a,"SWHealthLog",{keyPath:"id",autoIncrement:!0}),"swHealthNewRequest",["interface","timestamp"])},
version:1});function ps(a){return eq(ns(),a)}
function qs(a){var b,c;B(function(d){if(d.h==1)return d.yield(ps(a),2);b=d.i;c=V()-2592E6;return d.yield(Kp(b,["SWHealthLog"],{mode:"readwrite",ka:!0},function(e){return Up(e.objectStore("SWHealthLog"),{},function(f){if(f.getValue().timestamp<=c)return f.delete().then(function(){return Vp(f)})})}),0)})}
function rs(a){var b;return B(function(c){if(c.h==1)return c.yield(ps(a),2);b=c.i;return c.yield(b.clear("SWHealthLog"),0)})}
;var ss={},ts=0;function us(a){var b=b===void 0?{}:b;var c=new Image,d=""+ts++;ss[d]=c;c.onload=c.onerror=function(){delete ss[d]};
b.di&&(c.referrerPolicy="no-referrer");c.src=a}
;var vs;function ws(){vs||(vs=new Wo("yt.offline"));return vs}
function xs(a){if(S("offline_error_handling")){var b=ws().get("errors",!0)||{};b[a.message]={name:a.name,stack:a.stack};a.level&&(b[a.message].level=a.level);ws().set("errors",b,2592E3,!0)}}
;function ys(){this.h=new Map;this.i=!1}
function zs(){if(!ys.instance){var a=F("yt.networkRequestMonitor.instance")||new ys;E("yt.networkRequestMonitor.instance",a);ys.instance=a}return ys.instance}
ys.prototype.requestComplete=function(a,b){b&&(this.i=!0);a=this.removeParams(a);this.h.get(a)||this.h.set(a,b)};
ys.prototype.isEndpointCFR=function(a){a=this.removeParams(a);return(a=this.h.get(a))?!1:a===!1&&this.i?!0:null};
ys.prototype.removeParams=function(a){return a.split("?")[0]};
ys.prototype.removeParams=ys.prototype.removeParams;ys.prototype.isEndpointCFR=ys.prototype.isEndpointCFR;ys.prototype.requestComplete=ys.prototype.requestComplete;ys.getInstance=zs;function As(){fi.call(this);var a=this;this.j=!1;this.h=Wj();this.h.listen("networkstatus-online",function(){if(a.j&&S("offline_error_handling")){var b=ws().get("errors",!0);if(b){for(var c in b)if(b[c]){var d=new T(c,"sent via offline_errors");d.name=b[c].name;d.stack=b[c].stack;d.level=b[c].level;Om(d)}ws().set("errors",{},2592E3,!0)}}})}
v(As,fi);function Bs(){if(!As.instance){var a=F("yt.networkStatusManager.instance")||new As;E("yt.networkStatusManager.instance",a);As.instance=a}return As.instance}
p=As.prototype;p.ta=function(){return this.h.ta()};
p.mb=function(a){this.h.h=a};
p.Ae=function(){var a=window.navigator.onLine;return a===void 0?!0:a};
p.qe=function(){this.j=!0};
p.listen=function(a,b){return this.h.listen(a,b)};
p.Fc=function(a){a=Uj(this.h,a);a.then(function(b){S("use_cfr_monitor")&&zs().requestComplete("generate_204",b)});
return a};
As.prototype.sendNetworkCheckRequest=As.prototype.Fc;As.prototype.listen=As.prototype.listen;As.prototype.enableErrorFlushing=As.prototype.qe;As.prototype.getWindowStatus=As.prototype.Ae;As.prototype.networkStatusHint=As.prototype.mb;As.prototype.isNetworkAvailable=As.prototype.ta;As.getInstance=Bs;function Cs(a){a=a===void 0?{}:a;fi.call(this);var b=this;this.h=this.u=0;this.j=Bs();var c=F("yt.networkStatusManager.instance.listen").bind(this.j);c&&(a.rateLimit?(this.rateLimit=a.rateLimit,c("networkstatus-online",function(){Ds(b,"publicytnetworkstatus-online")}),c("networkstatus-offline",function(){Ds(b,"publicytnetworkstatus-offline")})):(c("networkstatus-online",function(){gi(b,"publicytnetworkstatus-online")}),c("networkstatus-offline",function(){gi(b,"publicytnetworkstatus-offline")})))}
v(Cs,fi);Cs.prototype.ta=function(){var a=F("yt.networkStatusManager.instance.isNetworkAvailable");return a?a.bind(this.j)():!0};
Cs.prototype.mb=function(a){var b=F("yt.networkStatusManager.instance.networkStatusHint").bind(this.j);b&&b(a)};
Cs.prototype.Fc=function(a){var b=this,c;return B(function(d){c=F("yt.networkStatusManager.instance.sendNetworkCheckRequest").bind(b.j);return S("skip_network_check_if_cfr")&&zs().isEndpointCFR("generate_204")?d.return(new Promise(function(e){var f;b.mb(((f=window.navigator)==null?void 0:f.onLine)||!0);e(b.ta())})):c?d.return(c(a)):d.return(!0)})};
function Ds(a,b){a.rateLimit?a.h?(Xj.qa(a.u),a.u=Xj.pa(function(){a.o!==b&&(gi(a,b),a.o=b,a.h=V())},a.rateLimit-(V()-a.h))):(gi(a,b),a.o=b,a.h=V()):gi(a,b)}
;var Es;function Fs(){var a=Qr.call;Es||(Es=new Cs({Rh:!0,Hh:!0}));a.call(Qr,this,{ga:{he:js,xb:is,xd:es,Le:gs,ed:hs,set:cs},fa:Es,handleError:function(b,c,d){var e,f=d==null?void 0:(e=d.error)==null?void 0:e.code;if(f===400||f===415){var g;b=new T(b.message,c,d==null?void 0:(g=d.error)==null?void 0:g.code);Pm(b,void 0,void 0,void 0,!0)}else Om(b)},
zb:Pm,sendFn:Gs,now:V,Vd:xs,Ca:Vo(),dd:"publicytnetworkstatus-online",Zc:"publicytnetworkstatus-offline",qc:!0,nc:.1,Bc:jn("potential_esf_error_limit",10),W:S,Sb:!(mo()&&Hs())});this.j=new zj;S("networkless_immediately_drop_all_requests")&&ks();Cq("LogsDatabaseV2")}
v(Fs,Qr);function Is(){var a=F("yt.networklessRequestController.instance");a||(a=new Fs,E("yt.networklessRequestController.instance",a),S("networkless_logging")&&rq().then(function(b){a.V=b;Sr(a);a.j.resolve();a.qc&&Math.random()<=a.nc&&a.V&&qs(a.V);S("networkless_immediately_drop_sw_health_store")&&Js(a)}));
return a}
Fs.prototype.writeThenSend=function(a,b){b||(b={});b=Ks(a,b);mo()||(this.h=!1);Qr.prototype.writeThenSend.call(this,a,b)};
Fs.prototype.sendThenWrite=function(a,b,c){b||(b={});b=Ks(a,b);mo()||(this.h=!1);Qr.prototype.sendThenWrite.call(this,a,b,c)};
Fs.prototype.sendAndWrite=function(a,b){b||(b={});b=Ks(a,b);mo()||(this.h=!1);Qr.prototype.sendAndWrite.call(this,a,b)};
Fs.prototype.awaitInitialization=function(){return this.j.promise};
function Js(a){var b;B(function(c){if(!a.V)throw b=wp("clearSWHealthLogsDb"),b;return c.return(rs(a.V).catch(function(d){a.handleError(d)}))})}
function Gs(a,b,c,d){d=d===void 0?!1:d;b=S("web_fp_via_jspb")?Object.assign({},b):b;S("use_cfr_monitor")&&Ls(a,b);if(S("use_request_time_ms_header"))b.headers&&$m(a)&&(b.headers["X-Goog-Request-Time"]=JSON.stringify(Math.round(V())));else{var e;if((e=b.postParams)==null?0:e.requestTimeMs)b.postParams.requestTimeMs=Math.round(V())}if(c&&Object.keys(b).length===0){var f=f===void 0?"":f;var g=g===void 0?!1:g;var h=h===void 0?!1:h;if(a)if(f)on(a,void 0,"POST",f,void 0);else if(R("USE_NET_AJAX_FOR_PING_TRANSPORT",
!1)||h)on(a,void 0,"GET","",void 0,void 0,g,h);else{b:{try{c:{var k=new cb({url:a});if(k.h.dsh==="1")var l=null;else{var m=k.h.ae;if(m==="1"){var n=k.h.adurl;if(n)try{l={version:3,oe:decodeURIComponent(n),de:ab(k.i,"act=1","ri=1",db(k))};break c}catch(Z){}}l=m==="2"?{version:4,oe:ab(k.i,"dct=1","suid="+k.j,""),de:ab(k.i,"act=1","ri=1","suid="+k.j)}:null}}if(l){var r=jc(a),t;if(!(t=!r||!r.endsWith("/aclk"))){var w=a.search(rc),x=qc(a,0,"ri",w);if(x<0)var z=null;else{var G=a.indexOf("&",x);if(G<0||
G>w)G=w;z=dc(a.slice(x+3,G!==-1?G:0))}t=z!=="1"}var H=!t;break b}}catch(Z){}H=!1}if(H){b:{try{if(window.navigator&&window.navigator.sendBeacon&&window.navigator.sendBeacon(a,"")){var U=!0;break b}}catch(Z){}U=!1}c=U?!0:!1}else c=!1;c||us(a)}}else b.compress?b.postBody?(typeof b.postBody!=="string"&&(b.postBody=JSON.stringify(b.postBody)),Fr(a,b.postBody,b,sn,d)):Fr(a,JSON.stringify(b.postParams),b,rn,d):sn(a,b)}
function Ks(a,b){S("use_event_time_ms_header")&&$m(a)&&(b.headers||(b.headers={}),b.headers["X-Goog-Event-Time"]=JSON.stringify(Math.round(V())));return b}
function Ls(a,b){var c=b.onError?b.onError:function(){};
b.onError=function(e,f){zs().requestComplete(a,!1);c(e,f)};
var d=b.onSuccess?b.onSuccess:function(){};
b.onSuccess=function(e,f){zs().requestComplete(a,!0);d(e,f)}}
function Hs(){return ic(document.location.toString())!=="www.youtube-nocookie.com"}
;var Ms=!1,Ns=D.ytNetworklessLoggingInitializationOptions||{isNwlInitialized:Ms};E("ytNetworklessLoggingInitializationOptions",Ns);function Os(){var a;B(function(b){if(b.h==1)return b.yield(rq(),2);a=b.i;if(!a||!mo()&&!S("nwl_init_require_datasync_id_killswitch")||!Hs())return b.B(0);Ms=!0;Ns.isNwlInitialized=Ms;return b.yield(Is().awaitInitialization(),0)})}
;function Ps(a){var b=this;this.config_=null;a?this.config_=a:Tq()&&(this.config_=Uq());po(function(){Or(b)},5E3)}
Ps.prototype.isReady=function(){!this.config_&&Tq()&&(this.config_=Uq());return!!this.config_};
function Pr(a,b,c,d){function e(n){n=n===void 0?!1:n;var r;if(d.retry&&h!="www.youtube-nocookie.com"&&(n||S("skip_ls_gel_retry")||g.headers["Content-Type"]!=="application/json"||(r=Mr(b,c,l,k)),r)){var t=g.onSuccess,w=g.onFetchSuccess;g.onSuccess=function(G,H){Nr(r);t(G,H)};
c.onFetchSuccess=function(G,H){Nr(r);w(G,H)}}try{if(n&&d.retry&&!d.networklessOptions.bypassNetworkless)g.method="POST",d.networklessOptions.writeThenSend?Is().writeThenSend(m,g):Is().sendAndWrite(m,g);
else if(d.compress){var x=!d.networklessOptions.writeThenSend;if(g.postBody){var z=g.postBody;typeof z!=="string"&&(z=JSON.stringify(g.postBody));Fr(m,z,g,sn,x)}else Fr(m,JSON.stringify(g.postParams),g,rn,x)}else S("web_all_payloads_via_jspb")?sn(m,g):rn(m,g)}catch(G){if(G.name==="InvalidAccessError")r&&(Nr(r),r=0),Pm(Error("An extension is blocking network request."));else throw G;}r&&po(function(){Or(a)},5E3)}
!R("VISITOR_DATA")&&b!=="visitor_id"&&Math.random()<.01&&Pm(new T("Missing VISITOR_DATA when sending innertube request.",b,c,d));if(!a.isReady()){var f=new T("innertube xhrclient not ready",b,c,d);Om(f);throw f;}var g={headers:d.headers||{},method:"POST",postParams:c,postBody:d.postBody,postBodyFormat:d.postBodyFormat||"JSON",onTimeout:function(){d.onTimeout()},
onFetchTimeout:d.onTimeout,onSuccess:function(n,r){if(d.onSuccess)d.onSuccess(r)},
onFetchSuccess:function(n){if(d.onSuccess)d.onSuccess(n)},
onProgress:function(n){if(d.onProgress)d.onProgress(n)},
onError:function(n,r){if(d.onError)d.onError(r)},
onFetchError:function(n){if(d.onError)d.onError(n)},
timeout:d.timeout,withCredentials:!0,compress:d.compress};g.headers["Content-Type"]||(g.headers["Content-Type"]="application/json");var h="";(f=a.config_.Ge)&&(h=f);var k=a.config_.He||!1,l=Wq(k,h,d);Object.assign(g.headers,l);g.headers.Authorization&&!h&&k&&(g.headers["x-origin"]=window.location.origin);var m=Ym(""+h+("/youtubei/"+a.config_.innertubeApiVersion+"/"+b),{alt:"json"});(F("ytNetworklessLoggingInitializationOptions")?Ns.isNwlInitialized:Ms)?pq().then(function(n){e(n)}):e(!1)}
;var Qs=0,Rs=kd?"webkit":jd?"moz":hd?"ms":gd?"o":"";E("ytDomDomGetNextId",F("ytDomDomGetNextId")||function(){return++Qs});var Ss={stopImmediatePropagation:1,stopPropagation:1,preventMouseEvent:1,preventManipulation:1,preventDefault:1,layerX:1,layerY:1,screenX:1,screenY:1,scale:1,rotation:1,webkitMovementX:1,webkitMovementY:1};
function Ts(a){this.type="";this.state=this.source=this.data=this.currentTarget=this.relatedTarget=this.target=null;this.charCode=this.keyCode=0;this.metaKey=this.shiftKey=this.ctrlKey=this.altKey=!1;this.rotation=this.clientY=this.clientX=0;this.scale=1;this.changedTouches=this.touches=null;try{if(a=a||window.event){this.event=a;for(var b in a)b in Ss||(this[b]=a[b]);this.scale=a.scale;this.rotation=a.rotation;var c=a.target||a.srcElement;c&&c.nodeType==3&&(c=c.parentNode);this.target=c;var d=a.relatedTarget;
if(d)try{d=d.nodeName?d:null}catch(e){d=null}else this.type=="mouseover"?d=a.fromElement:this.type=="mouseout"&&(d=a.toElement);this.relatedTarget=d;this.clientX=a.clientX!=void 0?a.clientX:a.pageX;this.clientY=a.clientY!=void 0?a.clientY:a.pageY;this.keyCode=a.keyCode?a.keyCode:a.which;this.charCode=a.charCode||(this.type=="keypress"?this.keyCode:0);this.altKey=a.altKey;this.ctrlKey=a.ctrlKey;this.shiftKey=a.shiftKey;this.metaKey=a.metaKey;this.h=a.pageX;this.i=a.pageY}}catch(e){}}
function Ys(a){if(document.body&&document.documentElement){var b=document.body.scrollTop+document.documentElement.scrollTop;a.h=a.clientX+(document.body.scrollLeft+document.documentElement.scrollLeft);a.i=a.clientY+b}}
Ts.prototype.preventDefault=function(){this.event&&(this.event.returnValue=!1,this.event.preventDefault&&this.event.preventDefault())};
Ts.prototype.stopPropagation=function(){this.event&&(this.event.cancelBubble=!0,this.event.stopPropagation&&this.event.stopPropagation())};
Ts.prototype.stopImmediatePropagation=function(){this.event&&(this.event.cancelBubble=!0,this.event.stopImmediatePropagation&&this.event.stopImmediatePropagation())};var wg=D.ytEventsEventsListeners||{};E("ytEventsEventsListeners",wg);var Zs=D.ytEventsEventsCounter||{count:0};E("ytEventsEventsCounter",Zs);
function $s(a,b,c,d){d=d===void 0?{}:d;a.addEventListener&&(b!="mouseenter"||"onmouseenter"in document?b!="mouseleave"||"onmouseenter"in document?b=="mousewheel"&&"MozBoxSizing"in document.documentElement.style&&(b="MozMousePixelScroll"):b="mouseout":b="mouseover");return vg(function(e){var f=typeof e[4]==="boolean"&&e[4]==!!d,g=Ma(e[4])&&Ma(d)&&Ag(e[4],d);return!!e.length&&e[0]==a&&e[1]==b&&e[2]==c&&(f||g)})}
function at(a,b,c,d){d=d===void 0?{}:d;if(!a||!a.addEventListener&&!a.attachEvent)return"";var e=$s(a,b,c,d);if(e)return e;e=++Zs.count+"";var f=!(b!="mouseenter"&&b!="mouseleave"||!a.addEventListener||"onmouseenter"in document);var g=f?function(h){h=new Ts(h);if(!Kg(h.relatedTarget,function(k){return k==a}))return h.currentTarget=a,h.type=b,c.call(a,h)}:function(h){h=new Ts(h);
h.currentTarget=a;return c.call(a,h)};
g=Nm(g);a.addEventListener?(b=="mouseenter"&&f?b="mouseover":b=="mouseleave"&&f?b="mouseout":b=="mousewheel"&&"MozBoxSizing"in document.documentElement.style&&(b="MozMousePixelScroll"),bt()||typeof d==="boolean"?a.addEventListener(b,g,d):a.addEventListener(b,g,!!d.capture)):a.attachEvent("on"+b,g);wg[e]=[a,b,c,g,d];return e}
function ct(a){a&&(typeof a=="string"&&(a=[a]),Pb(a,function(b){if(b in wg){var c=wg[b],d=c[0],e=c[1],f=c[3];c=c[4];d.removeEventListener?bt()||typeof c==="boolean"?d.removeEventListener(e,f,c):d.removeEventListener(e,f,!!c.capture):d.detachEvent&&d.detachEvent("on"+e,f);delete wg[b]}}))}
var bt=vi(function(){var a=!1;try{var b=Object.defineProperty({},"capture",{get:function(){a=!0}});
window.addEventListener("test",null,b)}catch(c){}return a});function dt(a){this.G=a;this.h=null;this.o=0;this.A=null;this.u=0;this.i=[];for(a=0;a<4;a++)this.i.push(0);this.j=0;this.U=at(window,"mousemove",Va(this.Y,this));a=Va(this.M,this);typeof a==="function"&&(a=Nm(a));this.Z=window.setInterval(a,25)}
Za(dt,I);dt.prototype.Y=function(a){a.h===void 0&&Ys(a);var b=a.h;a.i===void 0&&Ys(a);this.h=new rg(b,a.i)};
dt.prototype.M=function(){if(this.h){var a=V();if(this.o!=0){var b=this.A,c=this.h,d=b.x-c.x;b=b.y-c.y;d=Math.sqrt(d*d+b*b)/(a-this.o);this.i[this.j]=Math.abs((d-this.u)/this.u)>.5?1:0;for(c=b=0;c<4;c++)b+=this.i[c]||0;b>=3&&this.G();this.u=d}this.o=a;this.A=this.h;this.j=(this.j+1)%4}};
dt.prototype.ba=function(){window.clearInterval(this.Z);ct(this.U)};var et={};
function ft(a){var b=a===void 0?{}:a;a=b.Xe===void 0?!1:b.Xe;b=b.re===void 0?!0:b.re;if(F("_lact",window)==null){var c=parseInt(R("LACT"),10);c=isFinite(c)?Date.now()-Math.max(c,0):-1;E("_lact",c,window);E("_fact",c,window);c==-1&&gt();at(document,"keydown",gt);at(document,"keyup",gt);at(document,"mousedown",gt);at(document,"mouseup",gt);a?at(window,"touchmove",function(){ht("touchmove",200)},{passive:!0}):(at(window,"resize",function(){ht("resize",200)}),b&&at(window,"scroll",function(){ht("scroll",200)}));
new dt(function(){ht("mouse",100)});
at(document,"touchstart",gt,{passive:!0});at(document,"touchend",gt,{passive:!0})}}
function ht(a,b){et[a]||(et[a]=!0,Xj.pa(function(){gt();et[a]=!1},b))}
function gt(){F("_lact",window)==null&&ft();var a=Date.now();E("_lact",a,window);F("_fact",window)==-1&&E("_fact",a,window);(a=F("ytglobal.ytUtilActivityCallback_"))&&a()}
function jt(){var a=F("_lact",window);return a==null?-1:Math.max(Date.now()-a,0)}
;var kt=D.ytPubsubPubsubInstance||new N,lt=D.ytPubsubPubsubSubscribedKeys||{},mt=D.ytPubsubPubsubTopicToKeys||{},nt=D.ytPubsubPubsubIsSynchronous||{};function ot(a,b){var c=pt();if(c&&b){var d=c.subscribe(a,function(){function e(){lt[d]&&b.apply&&typeof b.apply=="function"&&b.apply(window,f)}
var f=arguments;try{nt[a]?e():fn(e,0)}catch(g){Om(g)}},void 0);
lt[d]=!0;mt[a]||(mt[a]=[]);mt[a].push(d);return d}return 0}
function qt(a){var b=pt();b&&(typeof a==="number"?a=[a]:typeof a==="string"&&(a=[parseInt(a,10)]),Pb(a,function(c){b.unsubscribeByKey(c);delete lt[c]}))}
function rt(a,b){var c=pt();c&&c.publish.apply(c,arguments)}
function st(a){var b=pt();if(b)if(b.clear(a),a)tt(a);else for(var c in mt)tt(c)}
function pt(){return D.ytPubsubPubsubInstance}
function tt(a){mt[a]&&(a=mt[a],Pb(a,function(b){lt[b]&&delete lt[b]}),a.length=0)}
N.prototype.subscribe=N.prototype.subscribe;N.prototype.unsubscribeByKey=N.prototype.fc;N.prototype.publish=N.prototype.sb;N.prototype.clear=N.prototype.clear;E("ytPubsubPubsubInstance",kt);E("ytPubsubPubsubTopicToKeys",mt);E("ytPubsubPubsubIsSynchronous",nt);E("ytPubsubPubsubSubscribedKeys",lt);var ut=Symbol("injectionDeps");function vt(a){this.name=a}
vt.prototype.toString=function(){return"InjectionToken("+this.name+")"};
function wt(a){this.key=a}
function xt(a){return new wt(a)}
function zt(){this.i=new Map;this.j=new Map;this.h=new Map}
function At(a,b){a.i.set(b.pb,b);var c=a.j.get(b.pb);if(c)try{c.ai(a.resolve(b.pb))}catch(d){c.Yh(d)}}
zt.prototype.resolve=function(a){return a instanceof wt?Bt(this,a.key,[],!0):Bt(this,a,[])};
function Bt(a,b,c,d){d=d===void 0?!1:d;if(c.indexOf(b)>-1)throw Error("Deps cycle for: "+b);if(a.h.has(b))return a.h.get(b);if(!a.i.has(b)){if(d)return;throw Error("No provider for: "+b);}d=a.i.get(b);c.push(b);if(d.nd!==void 0)var e=d.nd;else if(d.Ff)e=d[ut]?Ct(a,d[ut],c):[],e=d.Ff.apply(d,A(e));else if(d.Ic){e=d.Ic;var f=e[ut]?Ct(a,e[ut],c):[];e=new (Function.prototype.bind.apply(e,[null].concat(A(f))))}else throw Error("Could not resolve providers for: "+b);c.pop();d.hi||a.h.set(b,e);return e}
function Ct(a,b,c){return b?b.map(function(d){return d instanceof wt?Bt(a,d.key,c,!0):Bt(a,d,c)}):[]}
;var Dt;function Et(){Dt||(Dt=new zt);return Dt}
;var Ft=window;function Gt(){var a,b;return"h5vcc"in Ft&&((a=Ft.h5vcc.traceEvent)==null?0:a.traceBegin)&&((b=Ft.h5vcc.traceEvent)==null?0:b.traceEnd)?1:"performance"in Ft&&Ft.performance.mark&&Ft.performance.measure?2:0}
function Ht(a){var b=Gt();switch(b){case 1:Ft.h5vcc.traceEvent.traceBegin("YTLR",a);break;case 2:Ft.performance.mark(a+"-start");break;case 0:break;default:Bb(b,"unknown trace type")}}
function It(a){var b=Gt();switch(b){case 1:Ft.h5vcc.traceEvent.traceEnd("YTLR",a);break;case 2:b=a+"-start";var c=a+"-end";Ft.performance.mark(c);Ft.performance.measure(a,b,c);break;case 0:break;default:Bb(b,"unknown trace type")}}
;var Jt=S("web_enable_lifecycle_monitoring")&&Gt()!==0,Kt=S("web_enable_lifecycle_monitoring");function Lt(a){var b,c;(c=(b=window).onerror)==null||c.call(b,a.message,"",0,0,a)}
;function Mt(a){var b=this;var c=c===void 0?0:c;var d=d===void 0?Vo():d;this.j=c;this.scheduler=d;this.i=new zj;this.h=a;for(a={jb:0};a.jb<this.h.length;a={Ac:void 0,jb:a.jb},a.jb++)a.Ac=this.h[a.jb],c=function(e){return function(){e.Ac.Sc();b.h[e.jb].Cc=!0;b.h.every(function(f){return f.Cc===!0})&&b.i.resolve()}}(a),d=this.getPriority(a.Ac),d=this.scheduler.Sa(c,d),this.h[a.jb]=Object.assign({},a.Ac,{Sc:c,
jobId:d})}
function Nt(a){var b=Array.from(a.h.keys()).sort(function(d,e){return a.getPriority(a.h[e])-a.getPriority(a.h[d])});
b=y(b);for(var c=b.next();!c.done;c=b.next())c=a.h[c.value],c.jobId===void 0||c.Cc||(a.scheduler.qa(c.jobId),a.scheduler.Sa(c.Sc,10))}
Mt.prototype.cancel=function(){for(var a=y(this.h),b=a.next();!b.done;b=a.next())b=b.value,b.jobId===void 0||b.Cc||this.scheduler.qa(b.jobId),b.Cc=!0;this.i.resolve()};
Mt.prototype.getPriority=function(a){var b;return(b=a.priority)!=null?b:this.j};function Ot(a){this.state=a;this.plugins=[];this.o=void 0;this.A={};Jt&&Ht(this.state)}
p=Ot.prototype;p.install=function(a){this.plugins.push(a);return this};
p.uninstall=function(){var a=this;C.apply(0,arguments).forEach(function(b){b=a.plugins.indexOf(b);b>-1&&a.plugins.splice(b,1)})};
p.transition=function(a,b){var c=this;Jt&&It(this.state);var d=this.transitions.find(function(f){return Array.isArray(f.from)?f.from.find(function(g){return g===c.state&&f.to===a}):f.from===c.state&&f.to===a});
if(d){this.j&&(Nt(this.j),this.j=void 0);Pt(this,a,b);this.state=a;Jt&&Ht(this.state);d=d.action.bind(this);var e=this.plugins.filter(function(f){return f[a]}).map(function(f){return f[a]});
d(Qt(this,e),b)}else throw Error("no transition specified from "+this.state+" to "+a);};
function Qt(a,b){var c=b.filter(function(e){return Rt(a,e)===10}),d=b.filter(function(e){return Rt(a,e)!==10});
return a.A.gi?function(){var e=C.apply(0,arguments);return B(function(f){if(f.h==1)return f.yield(a.df.apply(a,[c].concat(A(e))),2);a.Nd.apply(a,[d].concat(A(e)));f.h=0})}:function(){var e=C.apply(0,arguments);
a.ef.apply(a,[c].concat(A(e)));a.Nd.apply(a,[d].concat(A(e)))}}
p.ef=function(a){for(var b=C.apply(1,arguments),c=Vo(),d=y(a),e=d.next(),f={};!e.done;f={Ub:void 0},e=d.next())f.Ub=e.value,c.Lb(function(g){return function(){St(g.Ub.name);Tt(function(){return g.Ub.callback.apply(g.Ub,A(b))});
Ut(g.Ub.name)}}(f))};
p.df=function(a){var b=C.apply(1,arguments),c,d,e,f,g;return B(function(h){h.h==1&&(c=Vo(),d=y(a),e=d.next(),f={});if(h.h!=3){if(e.done)return h.B(0);f.Ya=e.value;f.hc=void 0;g=function(k){return function(){St(k.Ya.name);var l=Tt(function(){return k.Ya.callback.apply(k.Ya,A(b))});
je(l)?k.hc=S("web_lifecycle_error_handling_killswitch")?l.then(function(){Ut(k.Ya.name)}):l.then(function(){Ut(k.Ya.name)},function(m){Lt(m);
Ut(k.Ya.name)}):Ut(k.Ya.name)}}(f);
c.Lb(g);return f.hc?h.yield(f.hc,3):h.B(3)}f={Ya:void 0,hc:void 0};e=d.next();return h.B(2)})};
p.Nd=function(a){var b=C.apply(1,arguments),c=this,d=a.map(function(e){return{Sc:function(){St(e.name);Tt(function(){return e.callback.apply(e,A(b))});
Ut(e.name)},
priority:Rt(c,e)}});
d.length&&(this.j=new Mt(d))};
function Rt(a,b){var c,d;return(d=(c=a.o)!=null?c:b.priority)!=null?d:0}
function St(a){Jt&&a&&Ht(a)}
function Ut(a){Jt&&a&&It(a)}
function Pt(a,b,c){Kt&&console.groupCollapsed&&console.groupEnd&&(console.groupCollapsed("["+a.constructor.name+"] '"+a.state+"' to '"+b+"'"),console.log("with message: ",c),console.groupEnd())}
ea.Object.defineProperties(Ot.prototype,{currentState:{configurable:!0,enumerable:!0,get:function(){return this.state}}});
function Tt(a){if(S("web_lifecycle_error_handling_killswitch"))return a();try{return a()}catch(b){Lt(b)}}
;function Vt(a){Ot.call(this,a===void 0?"none":a);this.h=null;this.o=10;this.transitions=[{from:"none",to:"application_navigating",action:this.i},{from:"application_navigating",to:"none",action:this.u},{from:"application_navigating",to:"application_navigating",action:function(){}},
{from:"none",to:"none",action:function(){}}]}
var Wt;v(Vt,Ot);Vt.prototype.i=function(a,b){var c=this;this.h=po(function(){c.currentState==="application_navigating"&&c.transition("none")},5E3);
a(b==null?void 0:b.event)};
Vt.prototype.u=function(a,b){this.h&&(Xj.qa(this.h),this.h=null);a(b==null?void 0:b.event)};
function Xt(){Wt||(Wt=new Vt);return Wt}
;var Yt=[];E("yt.logging.transport.getScrapedGelPayloads",function(){return Yt});function Zt(){this.store={};this.h={}}
Zt.prototype.storePayload=function(a,b){a=$t(a);this.store[a]?this.store[a].push(b):(this.h={},this.store[a]=[b]);S("more_accurate_gel_parser")&&(b=new CustomEvent("TRANSPORTING_NEW_EVENT"),window.dispatchEvent(b));return a};
Zt.prototype.smartExtractMatchingEntries=function(a){if(!a.keys.length)return[];for(var b=au(this,a.keys.splice(0,1)[0]),c=[],d=0;d<b.length;d++)this.store[b[d]]&&a.sizeLimit&&(this.store[b[d]].length<=a.sizeLimit?(c.push.apply(c,A(this.store[b[d]])),delete this.store[b[d]]):c.push.apply(c,A(this.store[b[d]].splice(0,a.sizeLimit))));(a==null?0:a.sizeLimit)&&c.length<(a==null?void 0:a.sizeLimit)&&(a.sizeLimit-=c.length,c.push.apply(c,A(this.smartExtractMatchingEntries(a))));return c};
Zt.prototype.extractMatchingEntries=function(a){a=au(this,a);for(var b=[],c=0;c<a.length;c++)this.store[a[c]]&&(b.push.apply(b,A(this.store[a[c]])),delete this.store[a[c]]);return b};
Zt.prototype.getSequenceCount=function(a){a=au(this,a);for(var b=0,c=0;c<a.length;c++){var d=void 0;b+=((d=this.store[a[c]])==null?void 0:d.length)||0}return b};
function au(a,b){var c=$t(b);if(a.h[c])return a.h[c];var d=Object.keys(a.store)||[];if(d.length<=1&&$t(b)===d[0])return d;for(var e=[],f=0;f<d.length;f++){var g=d[f].split("/");if(bu(b.auth,g[0])){var h=b.isJspb;bu(h===void 0?"undefined":h?"true":"false",g[1])&&bu(b.cttAuthInfo,g[2])&&(h=b.tier,h=h===void 0?"undefined":JSON.stringify(h),bu(h,g[3])&&e.push(d[f]))}}return a.h[c]=e}
function bu(a,b){return a===void 0||a==="undefined"?!0:a===b}
Zt.prototype.getSequenceCount=Zt.prototype.getSequenceCount;Zt.prototype.extractMatchingEntries=Zt.prototype.extractMatchingEntries;Zt.prototype.smartExtractMatchingEntries=Zt.prototype.smartExtractMatchingEntries;Zt.prototype.storePayload=Zt.prototype.storePayload;function $t(a){return[a.auth===void 0?"undefined":a.auth,a.isJspb===void 0?"undefined":a.isJspb,a.cttAuthInfo===void 0?"undefined":a.cttAuthInfo,a.tier===void 0?"undefined":a.tier].join("/")}
;function cu(a,b){if(a)return a[b.name]}
;var du=jn("initial_gel_batch_timeout",2E3),eu=jn("gel_queue_timeout_max_ms",6E4),fu=jn("gel_min_batch_size",5),gu=void 0;function hu(){this.o=this.h=this.i=0;this.j=!1}
var iu=new hu,ju=new hu,ku=new hu,lu=new hu,mu,nu=!0,ou=D.ytLoggingTransportTokensToCttTargetIds_||{};E("ytLoggingTransportTokensToCttTargetIds_",ou);var pu={};function qu(){var a=F("yt.logging.ims");a||(a=new Zt,E("yt.logging.ims",a));return a}
function ru(a,b){if(a.endpoint==="log_event"){su(a);var c=tu(a),d=uu(a.payload)||"";a:{if(S("enable_web_tiered_gel")){var e=ls[d||""];var f,g,h,k=Et().resolve(xt(Oq))==null?void 0:(f=Pq())==null?void 0:(g=f.loggingHotConfig)==null?void 0:(h=g.eventLoggingConfig)==null?void 0:h.payloadPolicies;if(k)for(f=0;f<k.length;f++)if(k[f].payloadNumber===e){e=k[f];break a}}e=void 0}k=200;if(e){if(e.enabled===!1&&!S("web_payload_policy_disabled_killswitch"))return;k=vu(e.tier);if(k===400){wu(a,b);return}}pu[c]=
!0;c={cttAuthInfo:c,isJspb:!1,tier:k};qu().storePayload(c,a.payload);xu(b,c,d==="gelDebuggingEvent")}}
function xu(a,b,c){function d(){yu({writeThenSend:!0},void 0,e,b.tier)}
var e=!1;e=e===void 0?!1:e;c=c===void 0?!1:c;a&&(gu=new a);a=jn("tvhtml5_logging_max_batch_ads_fork")||jn("tvhtml5_logging_max_batch")||jn("web_logging_max_batch")||100;var f=V(),g=zu(e,b.tier),h=g.o;c&&(g.j=!0);c=0;b&&(c=qu().getSequenceCount(b));c>=1E3?d():c>=a?mu||(mu=Au(function(){d();mu=void 0},0)):f-h>=10&&(Bu(e,b.tier),g.o=f)}
function wu(a,b){if(a.endpoint==="log_event"){S("more_accurate_gel_parser")&&qu().storePayload({isJspb:!1},a.payload);su(a);var c=tu(a),d=new Map;d.set(c,[a.payload]);var e=uu(a.payload)||"";b&&(gu=new b);return new wi(function(f,g){gu&&gu.isReady()?Cu(d,gu,f,g,{bypassNetworkless:!0},!0,e==="gelDebuggingEvent"):f()})}}
function tu(a){var b="";if(a.dangerousLogToVisitorSession)b="visitorOnlyApprovedKey";else if(a.cttAuthInfo){b=a.cttAuthInfo;var c={};b.videoId?c.videoId=b.videoId:b.playlistId&&(c.playlistId=b.playlistId);ou[a.cttAuthInfo.token]=c;b=a.cttAuthInfo.token}return b}
function yu(a,b,c,d){a=a===void 0?{}:a;c=c===void 0?!1:c;new wi(function(e,f){var g=zu(c,d),h=g.j;g.j=!1;Du(g.i);Du(g.h);g.h=0;gu&&gu.isReady()?d===void 0&&S("enable_web_tiered_gel")?Eu(e,f,a,b,c,300,h):Eu(e,f,a,b,c,d,h):(Bu(c,d),e())})}
function Eu(a,b,c,d,e,f,g){var h=gu;c=c===void 0?{}:c;e=e===void 0?!1:e;f=f===void 0?200:f;g=g===void 0?!1:g;var k=new Map,l={isJspb:e,cttAuthInfo:d,tier:f};e={isJspb:e,cttAuthInfo:d};if(d!==void 0)f=S("enable_web_tiered_gel")?qu().smartExtractMatchingEntries({keys:[l,e],sizeLimit:1E3}):qu().extractMatchingEntries(e),k.set(d,f);else for(d=y(Object.keys(pu)),l=d.next();!l.done;l=d.next())l=l.value,e=S("enable_web_tiered_gel")?qu().smartExtractMatchingEntries({keys:[{isJspb:!1,cttAuthInfo:l,tier:f},
{isJspb:!1,cttAuthInfo:l}],sizeLimit:1E3}):qu().extractMatchingEntries({isJspb:!1,cttAuthInfo:l}),e.length>0&&k.set(l,e),(S("web_fp_via_jspb_and_json")&&c.writeThenSend||!S("web_fp_via_jspb_and_json"))&&delete pu[l];Cu(k,h,a,b,c,!1,g)}
function Bu(a,b){function c(){yu({writeThenSend:!0},void 0,a,b)}
a=a===void 0?!1:a;b=b===void 0?200:b;var d=zu(a,b),e=d===lu||d===ku?5E3:eu;S("web_gel_timeout_cap")&&!d.h&&(e=Au(function(){c()},e),d.h=e);
Du(d.i);e=R("LOGGING_BATCH_TIMEOUT",jn("web_gel_debounce_ms",1E4));S("shorten_initial_gel_batch_timeout")&&nu&&(e=du);e=Au(function(){jn("gel_min_batch_size")>0?qu().getSequenceCount({cttAuthInfo:void 0,isJspb:a,tier:b})>=fu&&c():c()},e);
d.i=e}
function Cu(a,b,c,d,e,f,g){e=e===void 0?{}:e;var h=Math.round(V()),k=a.size,l=(g===void 0?0:g)&&S("vss_through_gel_video_stats")?"video_stats":"log_event";a=y(a);var m=a.next();for(g={};!m.done;g={Yc:void 0,batchRequest:void 0,dangerousLogToVisitorSession:void 0,cd:void 0,bd:void 0},m=a.next()){var n=y(m.value);m=n.next().value;n=n.next().value;g.batchRequest=Cg({context:Vq(b.config_||Uq())});if(!La(n)&&!S("throw_err_when_logevent_malformed_killswitch")){d();break}g.batchRequest.events=n;(n=ou[m])&&
Fu(g.batchRequest,m,n);delete ou[m];g.dangerousLogToVisitorSession=m==="visitorOnlyApprovedKey";Gu(g.batchRequest,h,g.dangerousLogToVisitorSession);S("always_send_and_write")&&(e.writeThenSend=!1);g.cd=function(r){S("start_client_gcf")&&Xj.pa(function(){return B(function(t){return t.yield(Hu(r),0)})});
k--;k||c()};
g.Yc=0;g.bd=function(r){return function(){r.Yc++;if(e.bypassNetworkless&&r.Yc===1)try{Pr(b,l,r.batchRequest,Iu({writeThenSend:!0},r.dangerousLogToVisitorSession,r.cd,r.bd,f)),nu=!1}catch(t){Om(t),d()}k--;k||c()}}(g);
try{Pr(b,l,g.batchRequest,Iu(e,g.dangerousLogToVisitorSession,g.cd,g.bd,f)),nu=!1}catch(r){Om(r),d()}}}
function Iu(a,b,c,d,e){a={retry:!0,onSuccess:c,onError:d,networklessOptions:a,dangerousLogToVisitorSession:b,Bh:!!e,headers:{},postBodyFormat:"",postBody:"",compress:S("compress_gel")||S("compress_gel_lr")};Ju()&&(a.headers["X-Goog-Request-Time"]=JSON.stringify(Math.round(V())));return a}
function Gu(a,b,c){Ju()||(a.requestTimeMs=String(b));S("unsplit_gel_payloads_in_logs")&&(a.unsplitGelPayloadsInLogs=!0);!c&&(b=R("EVENT_ID"))&&((c=R("BATCH_CLIENT_COUNTER")||0)||(c=Math.floor(Math.random()*65535/2)),c++,c>65535&&(c=1),Jm("BATCH_CLIENT_COUNTER",c),a.serializedClientEventId={serializedEventId:b,clientCounter:String(c)})}
function Fu(a,b,c){if(c.videoId)var d="VIDEO";else if(c.playlistId)d="PLAYLIST";else return;a.credentialTransferTokenTargetId=c;a.context=a.context||{};a.context.user=a.context.user||{};a.context.user.credentialTransferTokens=[{token:b,scope:d}]}
function su(a){var b=hn("il_payload_scraping");b=(b!==void 0?String(b):"")==="enable_il_payload_scraping";if(!F("yt.logging.transport.enableScrapingForTest"))if(b)Yt=[],E("yt.logging.transport.enableScrapingForTest",!0),E("yt.logging.transport.scrapedPayloadsForTesting",Yt),E("yt.logging.transport.payloadToScrape","visualElementShown visualElementHidden visualElementAttached screenCreated visualElementGestured visualElementStateChanged".split(" ")),E("yt.logging.transport.getScrapedPayloadFromClientEventsFunction"),
E("yt.logging.transport.scrapeClientEvent",!0);else return;b=F("yt.logging.transport.scrapedPayloadsForTesting");var c=F("yt.logging.transport.payloadToScrape"),d=F("yt.logging.transport.scrapeClientEvent");if(c&&c.length>=1)for(var e=0;e<c.length;e++)if(a&&a.payload[c[e]])if(d)b.push(a.payload);else{var f=void 0;b.push(((f=a)==null?void 0:f.payload)[c[e]])}E("yt.logging.transport.scrapedPayloadsForTesting",b)}
function Ju(){return S("use_request_time_ms_header")||S("lr_use_request_time_ms_header")}
function Au(a,b){return S("transport_use_scheduler")===!1?fn(a,b):S("logging_avoid_blocking_during_navigation")||S("lr_logging_avoid_blocking_during_navigation")?po(function(){if(Xt().currentState==="none")a();else{var c={};Xt().install((c.none={callback:a},c))}},b):po(a,b)}
function Du(a){S("transport_use_scheduler")?Xj.qa(a):window.clearTimeout(a)}
function Hu(a){var b,c,d,e,f,g,h,k,l,m;return B(function(n){return n.h==1?(d=(b=a)==null?void 0:(c=b.responseContext)==null?void 0:c.globalConfigGroup,e=cu(d,jm),g=(f=d)==null?void 0:f.hotHashData,h=cu(d,im),l=(k=d)==null?void 0:k.coldHashData,(m=Et().resolve(xt(Oq)))?g?e?n.yield(Qq(m,g,e),2):n.yield(Qq(m,g),2):n.B(2):n.return()):l?h?n.yield(Rq(m,l,h),0):n.yield(Rq(m,l),0):n.B(0)})}
function zu(a,b){b=b===void 0?200:b;return a?b===300?lu:ju:b===300?ku:iu}
function uu(a){a=Object.keys(a);a=y(a);for(var b=a.next();!b.done;b=a.next())if(b=b.value,ls[b])return b}
function vu(a){switch(a){case "DELAYED_EVENT_TIER_UNSPECIFIED":return 0;case "DELAYED_EVENT_TIER_DEFAULT":return 100;case "DELAYED_EVENT_TIER_DISPATCH_TO_EMPTY":return 200;case "DELAYED_EVENT_TIER_FAST":return 300;case "DELAYED_EVENT_TIER_IMMEDIATE":return 400;default:return 200}}
;var Ku=D.ytLoggingGelSequenceIdObj_||{};E("ytLoggingGelSequenceIdObj_",Ku);
function Lu(a,b,c,d){d=d===void 0?{}:d;var e={},f=Math.round(d.timestamp||V());e.eventTimeMs=f<Number.MAX_SAFE_INTEGER?f:0;e[a]=b;a=jt();e.context={lastActivityMs:String(d.timestamp||!isFinite(a)?-1:a)};d.sequenceGroup&&!S("web_gel_sequence_info_killswitch")&&(a=e.context,b=d.sequenceGroup,Ku[b]=b in Ku?Ku[b]+1:0,a.sequence={index:Ku[b],groupKey:b},d.endOfSequence&&delete Ku[d.sequenceGroup]);S("web_tag_automated_log_events")&&(e.context.automatedLogEventSource=d.automatedLogEventSource);(d.sendIsolatedPayload?
wu:ru)({endpoint:"log_event",payload:e,cttAuthInfo:d.cttAuthInfo,dangerousLogToVisitorSession:d.dangerousLogToVisitorSession},c)}
;function ep(a,b,c){c=c===void 0?{}:c;var d=Ps;R("ytLoggingEventsDefaultDisabled",!1)&&Ps===Ps&&(d=null);Lu(a,b,d,c)}
;var Mu=new Set,Nu=0,Ou=0,Pu=0,Qu=[],Ru=[],Su=["PhantomJS","Googlebot","TO STOP THIS SECURITY SCAN go/scan"];function Tu(){Pb(R("ERRORS")||[],function(a){Uu.apply(null,a)});
Jm("ERRORS",[])}
function dp(a){Uu(a)}
function Vu(a){Uu(a,"WARNING")}
function Wu(a){a instanceof Error?Uu(a):(a=Ma(a)?JSON.stringify(a):String(a),a=new T(a),a.name="RejectedPromiseError",Vu(a))}
function Xu(a,b,c,d,e,f){b=b===void 0?"Unknown file":b;c=c===void 0?0:c;var g=!1,h=Km("log_window_onerror_fraction");if(h&&Math.random()<h)g=!0;else{h=document.getElementsByTagName("script");for(var k=0,l=h.length;k<l;k++)if(h[k].src.indexOf("/debug-")>0){g=!0;break}}if(g){g=!1;e?g=!0:(typeof a==="string"?h=a:ErrorEvent&&a instanceof ErrorEvent?(g=!0,h=a.message,b=a.filename,c=a.lineno,d=a.colno):(h="Unknown error",b="Unknown file",c=0),e=new T(h),e.name="UnhandledWindowError",e.message=h,e.fileName=
b,e.lineNumber=c,isNaN(d)?delete e.columnNumber:e.columnNumber=d);if(!S("wiz_enable_component_stack_propagation_killswitch")){a=e;var m;if((m=f)==null||!m.componentStack)if(m=a.ke)f||(f={}),f.componentStack=m}f&&Yu(e,f);g?Uu(e):Vu(e)}}
function Uu(a,b,c,d,e,f,g,h){f=f===void 0?{}:f;f.name=c||R("INNERTUBE_CONTEXT_CLIENT_NAME",1);f.version=d||R("INNERTUBE_CONTEXT_CLIENT_VERSION");c=f;b=b===void 0?"ERROR":b;g=g===void 0?!1:g;b=b===void 0?"ERROR":b;g=g===void 0?!1:g;if(a&&(a.hasOwnProperty("level")&&a.level&&(b=a.level),S("console_log_js_exceptions")&&(d=[],d.push("Name: "+a.name),d.push("Message: "+a.message),a.hasOwnProperty("params")&&d.push("Error Params: "+JSON.stringify(a.params)),a.hasOwnProperty("args")&&d.push("Error args: "+
JSON.stringify(a.args)),d.push("File name: "+a.fileName),d.push("Stacktrace: "+a.stack),d=d.join("\n"),window.console.log(d,a)),!(Nu>=5))){d=[];e=y(Ru);for(f=e.next();!f.done;f=e.next()){f=f.value;try{f()&&d.push(f())}catch(z){}}d=[].concat(A(Qu),A(d));var k=$b(a);e=k.message||"Unknown Error";f=k.name||"UnknownError";var l=k.stack||a.i||"Not available";if(l.startsWith(f+": "+e)){var m=l.split("\n");m.shift();l=m.join("\n")}m=k.lineNumber||"Not available";k=k.fileName||"Not available";var n=0;if(a.hasOwnProperty("args")&&
a.args&&a.args.length)for(var r=0;r<a.args.length&&!(n=Mn(a.args[r],"params."+r,c,n),n>=500);r++);else if(a.hasOwnProperty("params")&&a.params){var t=a.params;if(typeof a.params==="object")for(r in t){if(t[r]){var w="params."+r,x=On(t[r]);c[w]=x;n+=w.length+x.length;if(n>500)break}}else c.params=On(t)}if(d.length)for(r=0;r<d.length&&!(n=Mn(d[r],"params.context."+r,c,n),n>=500);r++);navigator.vendor&&!c.hasOwnProperty("vendor")&&(c["device.vendor"]=navigator.vendor);r={message:e,name:f,lineNumber:m,
fileName:k,stack:l,params:c,sampleWeight:1};c=Number(a.columnNumber);isNaN(c)||(r.lineNumber=r.lineNumber+":"+c);if(a.level==="IGNORED")a=0;else a:{a=Hn();c=y(a.Za);for(d=c.next();!d.done;d=c.next())if(d=d.value,r.message&&r.message.match(d.Th)){a=d.weight;break a}a=y(a.Ua);for(c=a.next();!c.done;c=a.next())if(c=c.value,c.callback(r)){a=c.weight;break a}a=1}r.sampleWeight=a;a=y(Bn);for(c=a.next();!c.done;c=a.next())if(c=c.value,c.zc[r.name])for(e=y(c.zc[r.name]),d=e.next();!d.done;d=e.next())if(f=
d.value,d=r.message.match(f.regexp)){r.params["params.error.original"]=d[0];e=f.groups;f={};for(m=0;m<e.length;m++)f[e[m]]=d[m+1],r.params["params.error."+e[m]]=d[m+1];r.message=c.Xc(f);break}r.params||(r.params={});a=Hn();r.params["params.errorServiceSignature"]="msg="+a.Za.length+"&cb="+a.Ua.length;r.params["params.serviceWorker"]="false";D.document&&D.document.querySelectorAll&&(r.params["params.fscripts"]=String(document.querySelectorAll("script:not([nonce])").length));(new Fg(Gg,"sample")).constructor!==
Fg&&(r.params["params.fconst"]="true");window.yterr&&typeof window.yterr==="function"&&window.yterr(r);if(r.sampleWeight!==0&&!Mu.has(r.message)){if(g&&S("web_enable_error_204"))Zu(b===void 0?"ERROR":b,r);else{b=b===void 0?"ERROR":b;b==="ERROR"?(Jn.sb("handleError",r),S("record_app_crashed_web")&&Pu===0&&r.sampleWeight===1&&(Pu++,g={appCrashType:"APP_CRASH_TYPE_BREAKPAD"},S("report_client_error_with_app_crash_ks")||(g.systemHealth={crashData:{clientError:{logMessage:{message:r.message}}}}),ep("appCrashed",
g)),Ou++):b==="WARNING"&&Jn.sb("handleWarning",r);if(S("kevlar_gel_error_routing")){g=b;h=h===void 0?{}:h;b:{a=y(Su);for(c=a.next();!c.done;c=a.next())if(kp(c.value.toLowerCase())){a=!0;break b}a=!1}if(a)h=void 0;else{c={stackTrace:r.stack};r.fileName&&(c.filename=r.fileName);a=r.lineNumber&&r.lineNumber.split?r.lineNumber.split(":"):[];a.length!==0&&(a.length!==1||isNaN(Number(a[0]))?a.length!==2||isNaN(Number(a[0]))||isNaN(Number(a[1]))||(c.lineNumber=Number(a[0]),c.columnNumber=Number(a[1])):c.lineNumber=
Number(a[0]));a={level:"ERROR_LEVEL_UNKNOWN",message:r.message,errorClassName:r.name,sampleWeight:r.sampleWeight};g==="ERROR"?a.level="ERROR_LEVEL_ERROR":g==="WARNING"&&(a.level="ERROR_LEVEL_WARNNING");c={isObfuscated:!0,browserStackInfo:c};h.pageUrl=window.location.href;h.kvPairs=[];R("FEXP_EXPERIMENTS")&&(h.experimentIds=R("FEXP_EXPERIMENTS"));d=R("LATEST_ECATCHER_SERVICE_TRACKING_PARAMS");if(!Km("web_disable_gel_stp_ecatcher_killswitch")&&d)for(e=y(Object.keys(d)),f=e.next();!f.done;f=e.next())f=
f.value,h.kvPairs.push({key:f,value:String(d[f])});if(d=r.params)for(e=y(Object.keys(d)),f=e.next();!f.done;f=e.next())f=f.value,h.kvPairs.push({key:"client."+f,value:String(d[f])});d=R("SERVER_NAME");e=R("SERVER_VERSION");d&&e&&(h.kvPairs.push({key:"server.name",value:d}),h.kvPairs.push({key:"server.version",value:e}));h={errorMetadata:h,stackTrace:c,logMessage:a}}h&&(ep("clientError",h),(g==="ERROR"||S("errors_flush_gel_always_killswitch"))&&yu(void 0,void 0,!1))}S("suppress_error_204_logging")||
Zu(b,r)}try{Mu.add(r.message)}catch(z){}Nu++}}}
function Zu(a,b){var c=b.params||{};a={urlParams:{a:"logerror",t:"jserror",type:b.name,msg:b.message.substr(0,250),line:b.lineNumber,level:a,"client.name":c.name},postParams:{url:R("PAGE_NAME",window.location.href),file:b.fileName},method:"POST"};c.version&&(a["client.version"]=c.version);if(a.postParams){b.stack&&(a.postParams.stack=b.stack);b=y(Object.keys(c));for(var d=b.next();!d.done;d=b.next())d=d.value,a.postParams["client."+d]=c[d];if(c=R("LATEST_ECATCHER_SERVICE_TRACKING_PARAMS"))for(b=y(Object.keys(c)),
d=b.next();!d.done;d=b.next())d=d.value,a.postParams[d]=c[d];(c=R("LAVA_VERSION"))&&(a.postParams["lava.version"]=c);c=R("SERVER_NAME");b=R("SERVER_VERSION");c&&b&&(a.postParams["server.name"]=c,a.postParams["server.version"]=b)}sn(R("ECATCHER_REPORT_HOST","")+"/error_204",a)}
function Yu(a){var b=C.apply(1,arguments);a.args||(a.args=[]);Array.isArray(a.args)&&a.args.push.apply(a.args,A(b))}
;function $u(){this.register=new Map}
function av(a){a=y(a.register.values());for(var b=a.next();!b.done;b=a.next())b.value.Xh("ABORTED")}
$u.prototype.clear=function(){av(this);this.register.clear()};
var bv=new $u;var cv=Date.now().toString();
function dv(){a:{if(window.crypto&&window.crypto.getRandomValues)try{var a=Array(16),b=new Uint8Array(16);window.crypto.getRandomValues(b);for(var c=0;c<a.length;c++)a[c]=b[c];var d=a;break a}catch(e){}d=Array(16);for(a=0;a<16;a++){b=Date.now();for(c=0;c<b%23;c++)d[a]=Math.random();d[a]=Math.floor(Math.random()*256)}if(cv)for(a=1,b=0;b<cv.length;b++)d[a%16]^=d[(a-1)%16]/4^cv.charCodeAt(b),a++}a=[];for(b=0;b<d.length;b++)a.push("ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789-_".charAt(d[b]&63));
return a.join("")}
;var ev,fv=D.ytLoggingDocDocumentNonce_;fv||(fv=dv(),E("ytLoggingDocDocumentNonce_",fv));ev=fv;function gv(a){this.h=a}
p=gv.prototype;p.getAsJson=function(){var a={};this.h.trackingParams!==void 0?a.trackingParams=this.h.trackingParams:(a.veType=this.h.veType,this.h.veCounter!==void 0&&(a.veCounter=this.h.veCounter),this.h.elementIndex!==void 0&&(a.elementIndex=this.h.elementIndex));this.h.dataElement!==void 0&&(a.dataElement=this.h.dataElement.getAsJson());this.h.youtubeData!==void 0&&(a.youtubeData=this.h.youtubeData);this.h.isCounterfactual&&(a.isCounterfactual=!0);return a};
p.getAsJspb=function(){var a=new lm;this.h.trackingParams!==void 0?a.setTrackingParams(this.h.trackingParams):(this.h.veType!==void 0&&wf(a,2,Ke(this.h.veType)),this.h.veCounter!==void 0&&wf(a,6,Ke(this.h.veCounter)),this.h.elementIndex!==void 0&&wf(a,3,Ke(this.h.elementIndex)),this.h.isCounterfactual&&wf(a,5,Ge(!0)));if(this.h.dataElement!==void 0){var b=this.h.dataElement.getAsJspb();Gf(a,lm,7,b)}this.h.youtubeData!==void 0&&Gf(a,km,8,this.h.jspbYoutubeData);return a};
p.toString=function(){return JSON.stringify(this.getAsJson())};
p.isClientVe=function(){return!this.h.trackingParams&&!!this.h.veType};
p.getLoggingDirectives=function(){return this.h.loggingDirectives};function hv(a){return R("client-screen-nonce-store",{})[a===void 0?0:a]}
function iv(a,b){b=b===void 0?0:b;var c=R("client-screen-nonce-store");c||(c={},Jm("client-screen-nonce-store",c));c[b]=a}
function jv(a){a=a===void 0?0:a;return a===0?"ROOT_VE_TYPE":"ROOT_VE_TYPE."+a}
function kv(a){return R(jv(a===void 0?0:a))}
E("yt_logging_screen.getRootVeType",kv);function lv(){var a=R("csn-to-ctt-auth-info");a||(a={},Jm("csn-to-ctt-auth-info",a));return a}
function mv(){return Object.values(R("client-screen-nonce-store",{})).filter(function(a){return a!==void 0})}
function nv(a){a=hv(a===void 0?0:a);if(!a&&!R("USE_CSN_FALLBACK",!0))return null;a||(a="UNDEFINED_CSN");return a?a:null}
E("yt_logging_screen.getCurrentCsn",nv);function ov(a,b,c){var d=lv();(c=nv(c))&&delete d[c];b&&(d[a]=b)}
function pv(a){return lv()[a]}
E("yt_logging_screen.getCttAuthInfo",pv);E("yt_logging_screen.setCurrentScreen",function(a,b,c,d){c=c===void 0?0:c;if(a!==hv(c)||b!==R(jv(c)))if(ov(a,d,c),iv(a,c),Jm(jv(c),b),b=function(){setTimeout(function(){a&&ep("foregroundHeartbeatScreenAssociated",{clientDocumentNonce:ev,clientScreenNonce:a})},0)},"requestAnimationFrame"in window)try{window.requestAnimationFrame(b)}catch(e){b()}else b()});function qv(){var a=Bg(rv),b;return(new wi(function(c,d){a.onSuccess=function(e){en(e)?c(new sv(e)):d(new tv("Request failed, status="+(e&&"status"in e?e.status:-1),"net.badstatus",e))};
a.onError=function(e){d(new tv("Unknown request error","net.unknown",e))};
a.onTimeout=function(e){d(new tv("Request timed out","net.timeout",e))};
b=sn("//googleads.g.doubleclick.net/pagead/id",a)})).Hc(function(c){if(c instanceof Fi){var d;
(d=b)==null||d.abort()}return Bi(c)})}
function tv(a,b,c){eb.call(this,a+", errorCode="+b);this.errorCode=b;this.xhr=c;this.name="PromiseAjaxError"}
v(tv,eb);function sv(a){this.xhr=a}
;function uv(){this.X=0;this.h=null}
uv.prototype.then=function(a,b,c){return this.X===1&&a?(a=a.call(c,this.h))&&typeof a.then==="function"?a:vv(a):this.X===2&&b?(a=b.call(c,this.h))&&typeof a.then==="function"?a:wv(a):this};
uv.prototype.getValue=function(){return this.h};
uv.prototype.isRejected=function(){return this.X==2};
uv.prototype.$goog_Thenable=!0;function wv(a){var b=new uv;a=a===void 0?null:a;b.X=2;b.h=a===void 0?null:a;return b}
function vv(a){var b=new uv;a=a===void 0?null:a;b.X=1;b.h=a===void 0?null:a;return b}
;function xv(a){var b=R("INNERTUBE_HOST_OVERRIDE");b&&(a=String(b)+String(kc(a)));return a}
function yv(a){var b={};S("json_condensed_response")&&(b.prettyPrint="false");return a=Zm(a,b||{},!1)}
function zv(a,b){var c=c===void 0?{}:c;a={method:b===void 0?"POST":b,mode:$m(a)?"same-origin":"cors",credentials:$m(a)?"same-origin":"include"};b={};for(var d=y(Object.keys(c)),e=d.next();!e.done;e=d.next())e=e.value,c[e]&&(b[e]=c[e]);Object.keys(b).length>0&&(a.headers=b);return a}
;function Av(){return jg()||(md||nd)&&kp("applewebkit")&&!kp("version")&&(!kp("safari")||kp("gsa/"))||ld&&kp("version/")?!0:R("EOM_VISITOR_DATA")?!1:!0}
;function Bv(a){var b=a.docid||a.video_id||a.videoId||a.id;if(b)return b;b=a.raw_player_response;b||(a=a.player_response)&&(b=JSON.parse(a));return b&&b.videoDetails&&b.videoDetails.videoId||null}
;function Cv(a){a:{var b="EMBEDDED_PLAYER_MODE_UNKNOWN";window.location.hostname.includes("youtubeeducation.com")&&(b="EMBEDDED_PLAYER_MODE_PFL");var c=a.raw_embedded_player_response;if(!c&&(a=a.embedded_player_response))try{c=JSON.parse(a)}catch(e){break a}if(c)b:for(var d in pm)if(pm[d]==c.embeddedPlayerMode){b=pm[d];break b}}return b==="EMBEDDED_PLAYER_MODE_PFL"}
;function Dv(a){eb.call(this,a.message||a.description||a.name);this.isMissing=a instanceof Ev;this.isTimeout=a instanceof tv&&a.errorCode=="net.timeout";this.isCanceled=a instanceof Fi}
v(Dv,eb);Dv.prototype.name="BiscottiError";function Ev(){eb.call(this,"Biscotti ID is missing from server")}
v(Ev,eb);Ev.prototype.name="BiscottiMissingError";var rv={format:"RAW",method:"GET",timeout:5E3,withCredentials:!0},Fv=null;function Gv(){if(S("disable_biscotti_fetch_entirely_for_all_web_clients"))return Error("Biscotti id fetching has been disabled entirely.");if(!Av())return Error("User has not consented - not fetching biscotti id.");var a=R("PLAYER_VARS",{});if(zg(a)=="1")return Error("Biscotti ID is not available in private embed mode");if(Cv(a))return Error("Biscotti id fetching has been disabled for pfl.")}
function Cm(){var a=Gv();if(a!==void 0)return Bi(a);Fv||(Fv=qv().then(Hv).Hc(function(b){return Iv(2,b)}));
return Fv}
function Hv(a){a=a.xhr.responseText;if(a.lastIndexOf(")]}'",0)!=0)throw new Ev;a=JSON.parse(a.substr(4));if((a.type||1)>1)throw new Ev;a=a.id;Dm(a);Fv=vv(a);Jv(18E5,2);return a}
function Iv(a,b){b=new Dv(b);Dm("");Fv=wv(b);a>0&&Jv(12E4,a-1);throw b;}
function Jv(a,b){fn(function(){qv().then(Hv,function(c){return Iv(b,c)}).Hc(ui)},a)}
function Kv(){try{var a=F("yt.ads.biscotti.getId_");return a?a():Cm()}catch(b){return Bi(b)}}
;var Kb=pa(["data-"]);function Lv(a){a&&(a.dataset?a.dataset[Mv()]="true":Lb(a))}
function Nv(a){return a?a.dataset?a.dataset[Mv()]:a.getAttribute("data-loaded"):null}
var Ov={};function Mv(){return Ov.loaded||(Ov.loaded="loaded".replace(/\-([a-z])/g,function(a,b){return b.toUpperCase()}))}
;function Pv(a){a=a||{};var b={},c={};this.url=a.url||"";this.args=a.args||Bg(b);this.assets=a.assets||{};this.attrs=a.attrs||Bg(c);this.fallback=a.fallback||null;this.fallbackMessage=a.fallbackMessage||null;this.html5=!!a.html5;this.disable=a.disable||{};this.loaded=!!a.loaded;this.messages=a.messages||{}}
Pv.prototype.clone=function(){var a=new Pv,b;for(b in this)if(this.hasOwnProperty(b)){var c=this[b];Ka(c)=="object"?a[b]=Bg(c):a[b]=c}return a};var Qv=["att/get"],Rv=["share/get_share_panel"],Sv=["share/get_web_player_share_panel"],Tv=["feedback"],Uv=["notification/modify_channel_preference"],Vv=["browse/edit_playlist"],Wv=["subscription/subscribe"],Xv=["subscription/unsubscribe"];var Yv=window.yt&&window.yt.msgs_||window.ytcfg&&window.ytcfg.msgs||{};E("yt.msgs_",Yv);function Zv(a){Em(Yv,arguments)}
;function $v(a,b,c){aw(a,b,c===void 0?null:c)}
function bw(a){a=cw(a);var b=document.getElementById(a);b&&(st(a),b.parentNode.removeChild(b))}
function dw(a,b){a&&b&&(a=""+Na(b),(a=ew[a])&&qt(a))}
function aw(a,b,c){c=c===void 0?null:c;var d=cw(typeof a==="string"?a:a.toString()),e=document.getElementById(d),f=e&&Nv(e),g=e&&!f;f?b&&b():(b&&(f=ot(d,b),b=""+Na(b),ew[b]=f),g||(e=fw(a,d,function(){Nv(e)||(Lv(e),rt(d),fn(function(){st(d)},0))},c)))}
function fw(a,b,c,d){d=d===void 0?null:d;var e=Ig("SCRIPT");e.id=b;e.onload=function(){c&&setTimeout(c,0)};
e.onreadystatechange=function(){switch(e.readyState){case "loaded":case "complete":e.onload()}};
d&&e.setAttribute("nonce",d);Ib(e,typeof a==="string"?gm(a):a);a=document.getElementsByTagName("head")[0]||document.body;a.insertBefore(e,a.firstChild);return e}
function cw(a){var b=document.createElement("a");Ab(b,a);a=b.href.replace(/^[a-zA-Z]+:\/\//,"//");return"js-"+ec(a)}
var ew={};function gw(a){var b=hw(a),c=document.getElementById(b),d=c&&Nv(c);d||c&&!d||(c=iw(a,b,function(){if(!Nv(c)){Lv(c);rt(b);var e=Wa(st,b);fn(e,0)}}))}
function iw(a,b,c){var d=document.createElement("link");d.id=b;d.onload=function(){c&&setTimeout(c,0)};
a=gm(a);Nb(d,a);(document.getElementsByTagName("head")[0]||document.body).appendChild(d);return d}
function hw(a){var b=Ig("A");Ab(b,new tb(a));a=b.href.replace(/^[a-zA-Z]+:\/\//,"//");return"css-"+ec(a)}
;function jw(a){var b=C.apply(1,arguments);if(!kw(a)||b.some(function(d){return!kw(d)}))throw Error("Only objects may be merged.");
b=y(b);for(var c=b.next();!c.done;c=b.next())lw(a,c.value)}
function lw(a,b){for(var c in b)if(kw(b[c])){if(c in a&&!kw(a[c]))throw Error("Cannot merge an object into a non-object.");c in a||(a[c]={});lw(a[c],b[c])}else if(mw(b[c])){if(c in a&&!mw(a[c]))throw Error("Cannot merge an array into a non-array.");c in a||(a[c]=[]);nw(a[c],b[c])}else a[c]=b[c];return a}
function nw(a,b){b=y(b);for(var c=b.next();!c.done;c=b.next())c=c.value,kw(c)?a.push(lw({},c)):mw(c)?a.push(nw([],c)):a.push(c);return a}
function kw(a){return typeof a==="object"&&!Array.isArray(a)}
function mw(a){return typeof a==="object"&&Array.isArray(a)}
;var ow="absolute_experiments app conditional_experiments debugcss debugjs expflag forced_experiments pbj pbjreload sbb spf spfreload sr_bns_address sttick".split(" ");
function pw(a,b){var c=c===void 0?!0:c;var d=R("VALID_SESSION_TEMPDATA_DOMAINS",[]),e=ic(window.location.href);e&&d.push(e);e=ic(a);if(Ob(d,e)>=0||!e&&a.lastIndexOf("/",0)==0)if(d=document.createElement("a"),Ab(d,a),a=d.href)if(a=kc(a),a=lc(a))if(c&&!b.csn&&(b.itct||b.ved)&&(b=Object.assign({csn:nv()},b)),f){var f=parseInt(f,10);isFinite(f)&&f>0&&qw(a,b,f)}else qw(a,b)}
function qw(a,b,c){a=rw(a);b=b?oc(b):"";c=c||5;Av()&&Vn(a,b,c)}
function rw(a){for(var b=y(ow),c=b.next();!c.done;c=b.next())a=tc(a,c.value);return"ST-"+ec(a).toString(36)}
;function sw(a){ar.call(this,1,arguments);this.csn=a}
v(sw,ar);var jr=new br("screen-created",sw),tw=[],uw=0,vw=new Map,ww=new Map,xw=new Map;
function yw(a,b,c,d,e,f){e=e===void 0?!1:e;f=f===void 0?{}:f;Object.assign(f,zw({cttAuthInfo:pv(b)||void 0},b));for(var g=y(d),h=g.next();!h.done;h=g.next()){h=h.value;var k=h.getAsJson();(xg(k)||!k.trackingParams&&!k.veType)&&Vu(Error("Child VE logged with no data"));if(S("no_client_ve_attach_unless_shown")){var l=Aw(h,b);if(k.veType&&!ww.has(l)&&!xw.has(l)&&!e){if(!S("il_attach_cache_limit")||vw.size<1E3){vw.set(l,[a,b,c,h]);return}S("il_attach_cache_limit")&&vw.size>1E3&&Vu(new T("IL Attach cache exceeded limit"))}h=
Aw(c,b);vw.has(h)?Bw(c,b):xw.set(h,!0)}}d=d.filter(function(m){m.csn!==b?(m.csn=b,m=!0):m=!1;return m});
c={csn:b,parentVe:c.getAsJson(),childVes:Sb(d,function(m){return m.getAsJson()})};
b==="UNDEFINED_CSN"?Cw("visualElementAttached",f,c):a?Lu("visualElementAttached",c,a,f):ep("visualElementAttached",c,f)}
function Cw(a,b,c){tw.push({We:a,payload:c,Oh:void 0,options:b});uw||(uw=kr())}
function lr(a){if(tw){for(var b=y(tw),c=b.next();!c.done;c=b.next())c=c.value,c.payload&&(c.payload.csn=a.csn,ep(c.We,c.payload,c.options));tw.length=0}uw=0}
function Aw(a,b){return""+a.getAsJson().veType+a.getAsJson().veCounter+b}
function Bw(a,b){a=Aw(a,b);if(vw.has(a)){b=vw.get(a)||[];var c=c===void 0?{}:c;yw(b[0],b[1],b[2],[b[3]],!0,c);vw.delete(a)}}
function zw(a,b){S("log_sequence_info_on_gel_web")&&(a.sequenceGroup=b);return a}
;function Dw(){try{return!!self.localStorage}catch(a){return!1}}
;function Ew(a){a=a.match(/(.*)::.*::.*/);if(a!==null)return a[1]}
function Fw(a){if(Dw()){var b=Object.keys(window.localStorage);b=y(b);for(var c=b.next();!c.done;c=b.next()){c=c.value;var d=Ew(c);d===void 0||a.includes(d)||self.localStorage.removeItem(c)}}}
function Gw(){if(!Dw())return!1;var a=no(),b=Object.keys(window.localStorage);b=y(b);for(var c=b.next();!c.done;c=b.next())if(c=Ew(c.value),c!==void 0&&c!==a)return!0;return!1}
;function Hw(){var a=!1;try{a=!!window.sessionStorage.getItem("session_logininfo")}catch(b){a=!0}return(R("INNERTUBE_CLIENT_NAME")==="WEB"||R("INNERTUBE_CLIENT_NAME")==="WEB_CREATOR")&&a}
function Iw(){var a=a===void 0?!0:a;try{window.sessionStorage.removeItem("stickiness_reload");window.sessionStorage.removeItem("session_logininfo");Jm("LOGIN_INFO","");a&&window.sessionStorage.setItem("from_switch_account","1");a=!0;a=a===void 0?!1:a;var b,c=Jw;c||(c=document.querySelector("#persist_identity"));if(b=c){var d=b.src?(new URL(b.src)).origin:"*";if(a){var e;(e=b.contentWindow)==null||e.postMessage({action:"clear"},d)}else if(!(Number(window.sessionStorage.getItem("stickiness_reload"))>=
2)){var f=window.sessionStorage.getItem("session_logininfo");if(f){var g;(g=b.contentWindow)==null||g.postMessage({loginInfo:f},d)}}}}catch(h){}}
function Kw(a){if(a)if(a.startsWith("https://accounts.google.com/AddSession"))Iw();else if(a.startsWith("https://accounts.google.com/ServiceLogin"))Iw();else{var b;if(b=a.startsWith("https://myaccount.google.com"))b=(a instanceof Ck?a.clone():new Ck(a)).h.endsWith("/youtubeoptions");b&&Iw()}if(R("LOGGED_IN",!0)&&Hw()){b=R("VALID_SESSION_TEMPDATA_DOMAINS",[]);var c=ic(window.location.href);c&&b.push(c);c=ic(a);Ob(b,c)>=0||!c&&a.lastIndexOf("/",0)==0?(b=kc(a),(b=lc(b))?(b=rw(b),b=(b=Wn(b)||null)?Wm(b):
{}):b=null):b=null;b==null&&(b={});c=b;var d=void 0;Hw()?(d||(d=R("LOGIN_INFO")),d?(c.session_logininfo=d,c=!0):c=!1):c=!1;c&&pw(a,b)}}
var Jw=null;function Lw(a,b,c){b=b===void 0?{}:b;c=c===void 0?!1:c;var d=R("EVENT_ID");d&&(b.ei||(b.ei=d));b&&pw(a,b);if(c)return!1;Kw(a);var e=e===void 0?{}:e;var f=f===void 0?"":f;var g=g===void 0?window:g;b=pc(a,e);Kw(b);a=void 0;a=a===void 0?xb:a;a:if(f=b+f,a=a===void 0?xb:a,!(f instanceof tb)){for(b=0;b<a.length;++b)if(c=a[b],c instanceof vb&&c.Je(f)){f=new tb(f);break a}f=void 0}g=g.location;f=zb(f||ub);f!==void 0&&(g.href=f);return!0}
;function Mw(a){if(zg(R("PLAYER_VARS",{}))!="1"){a&&Bm();try{Kv().then(function(){},function(){}),fn(Mw,18E5)}catch(b){Om(b)}}}
;var Nw=new Map([["dark","USER_INTERFACE_THEME_DARK"],["light","USER_INTERFACE_THEME_LIGHT"]]);function Ow(){var a=a===void 0?window.location.href:a;if(S("kevlar_disable_theme_param"))return null;var b=jc(a);if(S("enable_dark_theme_only_on_shorts")&&b!=null&&b.startsWith("/shorts/"))return"USER_INTERFACE_THEME_DARK";try{var c=Xm(a).theme;return Nw.get(c)||null}catch(d){}return null}
;function Pw(){this.h={};if(this.i=Yn()){var a=Wn("CONSISTENCY");a&&Qw(this,{encryptedTokenJarContents:a})}}
Pw.prototype.handleResponse=function(a,b){if(!b)throw Error("request needs to be passed into ConsistencyService");var c,d;b=((c=b.Ga.context)==null?void 0:(d=c.request)==null?void 0:d.consistencyTokenJars)||[];var e;if(a=(e=a.responseContext)==null?void 0:e.consistencyTokenJar){e=y(b);for(c=e.next();!c.done;c=e.next())delete this.h[c.value.encryptedTokenJarContents];Qw(this,a)}};
function Qw(a,b){if(b.encryptedTokenJarContents&&(a.h[b.encryptedTokenJarContents]=b,typeof b.expirationSeconds==="string")){var c=Number(b.expirationSeconds);setTimeout(function(){delete a.h[b.encryptedTokenJarContents]},c*1E3);
a.i&&Vn("CONSISTENCY",b.encryptedTokenJarContents,c,void 0,!0)}}
;var Rw=window.location.hostname.split(".").slice(-2).join(".");function Sw(){this.i=-1;var a=R("LOCATION_PLAYABILITY_TOKEN");R("INNERTUBE_CLIENT_NAME")==="TVHTML5"&&(this.localStorage=Tw(this))&&(a=this.localStorage.get("yt-location-playability-token"));a&&(this.locationPlayabilityToken=a,this.h=void 0)}
var Uw;function Vw(){Uw=F("yt.clientLocationService.instance");Uw||(Uw=new Sw,E("yt.clientLocationService.instance",Uw));return Uw}
p=Sw.prototype;
p.setLocationOnInnerTubeContext=function(a){a.client||(a.client={});if(this.h)a.client.locationInfo||(a.client.locationInfo={}),a.client.locationInfo.latitudeE7=Math.floor(this.h.coords.latitude*1E7),a.client.locationInfo.longitudeE7=Math.floor(this.h.coords.longitude*1E7),a.client.locationInfo.horizontalAccuracyMeters=Math.round(this.h.coords.accuracy),a.client.locationInfo.forceLocationPlayabilityTokenRefresh=!0;else if(this.j||this.locationPlayabilityToken)a.client.locationPlayabilityToken=this.j||
this.locationPlayabilityToken};
p.handleResponse=function(a){var b;a=(b=a.responseContext)==null?void 0:b.locationPlayabilityToken;a!==void 0&&(this.locationPlayabilityToken=a,this.h=void 0,R("INNERTUBE_CLIENT_NAME")==="TVHTML5"?(this.localStorage=Tw(this))&&this.localStorage.set("yt-location-playability-token",a,15552E3):Vn("YT_CL",JSON.stringify({loctok:a}),15552E3,Rw,!0))};
function Tw(a){return a.localStorage===void 0?new Wo("yt-client-location"):a.localStorage}
p.clearLocationPlayabilityToken=function(a){a==="TVHTML5"?(this.localStorage=Tw(this))&&this.localStorage.remove("yt-location-playability-token"):Xn("YT_CL");this.j=void 0;this.i!==-1&&(clearTimeout(this.i),this.i=-1)};
p.getCurrentPositionFromGeolocation=function(){var a=this;if(!(navigator&&navigator.geolocation&&navigator.geolocation.getCurrentPosition))return Promise.reject(Error("Geolocation unsupported"));var b=!1,c=1E4;R("INNERTUBE_CLIENT_NAME")==="MWEB"&&(b=!0,c=15E3);return new Promise(function(d,e){navigator.geolocation.getCurrentPosition(function(f){a.h=f;d(f)},function(f){e(f)},{enableHighAccuracy:b,
maximumAge:0,timeout:c})})};
p.createUnpluggedLocationInfo=function(a){var b={};a=a.coords;if(a==null?0:a.latitude)b.latitudeE7=Math.floor(a.latitude*1E7);if(a==null?0:a.longitude)b.longitudeE7=Math.floor(a.longitude*1E7);if(a==null?0:a.accuracy)b.locationRadiusMeters=Math.round(a.accuracy);return b};
p.createLocationInfo=function(a){var b={};a=a.coords;if(a==null?0:a.latitude)b.latitudeE7=Math.floor(a.latitude*1E7);if(a==null?0:a.longitude)b.longitudeE7=Math.floor(a.longitude*1E7);return b};function Ww(a,b,c){b=b===void 0?!1:b;c=c===void 0?!1:c;var d=R("INNERTUBE_CONTEXT");if(!d)return Uu(Error("Error: No InnerTubeContext shell provided in ytconfig.")),{};d=Cg(d);S("web_no_tracking_params_in_shell_killswitch")||delete d.clickTracking;d.client||(d.client={});var e=d.client;e.clientName==="MWEB"&&e.clientFormFactor!=="AUTOMOTIVE_FORM_FACTOR"&&(e.clientFormFactor=R("IS_TABLET")?"LARGE_FORM_FACTOR":"SMALL_FORM_FACTOR");e.screenWidthPoints=window.innerWidth;e.screenHeightPoints=window.innerHeight;
e.screenPixelDensity=Math.round(window.devicePixelRatio||1);e.screenDensityFloat=window.devicePixelRatio||1;e.utcOffsetMinutes=-Math.floor((new Date).getTimezoneOffset());var f=f===void 0?!1:f;bo();var g="USER_INTERFACE_THEME_LIGHT";fo(165)?g="USER_INTERFACE_THEME_DARK":fo(174)?g="USER_INTERFACE_THEME_LIGHT":!S("kevlar_legacy_browsers")&&window.matchMedia&&window.matchMedia("(prefers-color-scheme)").matches&&window.matchMedia("(prefers-color-scheme: dark)").matches&&(g="USER_INTERFACE_THEME_DARK");
f=f?g:Ow()||g;e.userInterfaceTheme=f;if(!b){if(f=ko())e.connectionType=f;S("web_log_effective_connection_type")&&(f=lo())&&(d.client.effectiveConnectionType=f)}var h;if(S("web_log_memory_total_kbytes")&&((h=D.navigator)==null?0:h.deviceMemory)){var k;h=(k=D.navigator)==null?void 0:k.deviceMemory;d.client.memoryTotalKbytes=""+h*1E6}S("web_gcf_hashes_innertube")&&(f=Sq())&&(k=f.coldConfigData,h=f.coldHashData,f=f.hotHashData,d.client.configInfo=d.client.configInfo||{},k&&(d.client.configInfo.coldConfigData=
k),h&&(d.client.configInfo.coldHashData=h),f&&(d.client.configInfo.hotHashData=f));k=Xm(D.location.href);!S("web_populate_internal_geo_killswitch")&&k.internalcountrycode&&(e.internalGeo=k.internalcountrycode);e.clientName==="MWEB"||e.clientName==="WEB"?(e.mainAppWebInfo||(e.mainAppWebInfo={}),e.mainAppWebInfo.graftUrl=D.location.href,S("kevlar_woffle")&&Pn.instance&&(k=Pn.instance,e.mainAppWebInfo.pwaInstallabilityStatus=!k.h&&k.i?"PWA_INSTALLABILITY_STATUS_CAN_BE_INSTALLED":"PWA_INSTALLABILITY_STATUS_UNKNOWN"),
e.mainAppWebInfo.webDisplayMode=Qn(),e.mainAppWebInfo.isWebNativeShareAvailable=navigator&&navigator.share!==void 0):e.clientName==="TVHTML5"&&(!S("web_lr_app_quality_killswitch")&&(k=R("LIVING_ROOM_APP_QUALITY"))&&(e.tvAppInfo=Object.assign(e.tvAppInfo||{},{appQuality:k})),k=R("LIVING_ROOM_CERTIFICATION_SCOPE"))&&(e.tvAppInfo=Object.assign(e.tvAppInfo||{},{certificationScope:k}));if(!S("web_populate_time_zone_itc_killswitch")){a:{if(typeof Intl!=="undefined")try{var l=(new Intl.DateTimeFormat).resolvedOptions().timeZone;
break a}catch(Z){}l=void 0}l&&(e.timeZone=l)}(l=R("EXPERIMENTS_TOKEN",""))?e.experimentsToken=l:delete e.experimentsToken;l=kn();Pw.instance||(Pw.instance=new Pw);d.request=Object.assign({},d.request,{internalExperimentFlags:l,consistencyTokenJars:ug(Pw.instance.h)});!S("web_prequest_context_killswitch")&&(l=R("INNERTUBE_CONTEXT_PREQUEST_CONTEXT"))&&(d.request.externalPrequestContext=l);e=bo();l=fo(58);e=e.get("gsml","");d.user=Object.assign({},d.user);l&&(d.user.enableSafetyMode=l);e&&(d.user.lockedSafetyMode=
!0);S("warm_op_csn_cleanup")?c&&(b=nv())&&(d.clientScreenNonce=b):!b&&(b=nv())&&(d.clientScreenNonce=b);a&&(d.clickTracking={clickTrackingParams:a});if(a=F("yt.mdx.remote.remoteClient_"))d.remoteClient=a;Vw().setLocationOnInnerTubeContext(d);try{var m=an(),n=m.bid;delete m.bid;d.adSignalsInfo={params:[],bid:n};for(var r=y(Object.entries(m)),t=r.next();!t.done;t=r.next()){var w=y(t.value),x=w.next().value,z=w.next().value;m=x;n=z;a=void 0;(a=d.adSignalsInfo.params)==null||a.push({key:m,value:""+n})}var G,
H;if(((G=d.client)==null?void 0:G.clientName)==="TVHTML5"||((H=d.client)==null?void 0:H.clientName)==="TVHTML5_UNPLUGGED"){var U=R("INNERTUBE_CONTEXT");U.adSignalsInfo&&(d.adSignalsInfo.advertisingId=U.adSignalsInfo.advertisingId,d.adSignalsInfo.advertisingIdSignalType="DEVICE_ID_TYPE_CONNECTED_TV_IFA",d.adSignalsInfo.limitAdTracking=U.adSignalsInfo.limitAdTracking)}}catch(Z){Uu(Z)}return d}
;function Xw(a){var b={"Content-Type":"application/json"};R("EOM_VISITOR_DATA")?b["X-Goog-EOM-Visitor-Id"]=R("EOM_VISITOR_DATA"):R("VISITOR_DATA")&&(b["X-Goog-Visitor-Id"]=R("VISITOR_DATA"));b["X-Youtube-Bootstrap-Logged-In"]=R("LOGGED_IN",!1);R("DEBUG_SETTINGS_METADATA")&&(b["X-Debug-Settings-Metadata"]=R("DEBUG_SETTINGS_METADATA"));a!=="cors"&&((a=R("INNERTUBE_CONTEXT_CLIENT_NAME"))&&(b["X-Youtube-Client-Name"]=a),(a=R("INNERTUBE_CONTEXT_CLIENT_VERSION"))&&(b["X-Youtube-Client-Version"]=a),(a=R("CHROME_CONNECTED_HEADER"))&&
(b["X-Youtube-Chrome-Connected"]=a),(a=R("DOMAIN_ADMIN_STATE"))&&(b["X-Youtube-Domain-Admin-State"]=a),R("ENABLE_LAVA_HEADER_ON_IT_EXPANSION")&&(a=R("SERIALIZED_LAVA_DEVICE_CONTEXT"))&&(b["X-YouTube-Lava-Device-Context"]=a));return b}
;function Yw(){this.h={}}
p=Yw.prototype;p.contains=function(a){return Object.prototype.hasOwnProperty.call(this.h,a)};
p.get=function(a){if(this.contains(a))return this.h[a]};
p.set=function(a,b){this.h[a]=b};
p.Tb=function(){return Object.keys(this.h)};
p.remove=function(a){delete this.h[a]};function Zw(){this.mappings=new Yw}
Zw.prototype.getModuleId=function(a){return a.serviceId.getModuleId()};
Zw.prototype.get=function(a){a:{var b=this.mappings.get(a.toString());switch(b.type){case "mapping":a=b.value;break a;case "factory":b=b.value();this.mappings.set(a.toString(),{type:"mapping",value:b});a=b;break a;default:a=Bb(b)}}return a};
new Zw;function $w(a){return function(){return new a}}
;var ax={},bx=(ax.WEB_UNPLUGGED="^unplugged/",ax.WEB_UNPLUGGED_ONBOARDING="^unplugged/",ax.WEB_UNPLUGGED_OPS="^unplugged/",ax.WEB_UNPLUGGED_PUBLIC="^unplugged/",ax.WEB_CREATOR="^creator/",ax.WEB_KIDS="^kids/",ax.WEB_EXPERIMENTS="^experiments/",ax.WEB_MUSIC="^music/",ax.WEB_REMIX="^music/",ax.WEB_MUSIC_EMBEDDED_PLAYER="^music/",ax.WEB_MUSIC_EMBEDDED_PLAYER="^main_app/|^sfv/",ax);
function cx(a){var b=b===void 0?"UNKNOWN_INTERFACE":b;if(a.length===1)return a[0];var c=bx[b];if(c){c=new RegExp(c);for(var d=y(a),e=d.next();!e.done;e=d.next())if(e=e.value,c.exec(e))return e}var f=[];Object.entries(bx).forEach(function(g){var h=y(g);g=h.next().value;h=h.next().value;b!==g&&f.push(h)});
c=new RegExp(f.join("|"));a.sort(function(g,h){return g.length-h.length});
d=y(a);for(e=d.next();!e.done;e=d.next())if(e=e.value,!c.exec(e))return e;return a[0]}
;function dx(){}
dx.prototype.u=function(a,b,c){b=b===void 0?{}:b;c=c===void 0?Un:c;var d={context:Ww(a.clickTrackingParams,!1,this.o)};var e=this.i(a);if(e){this.h(d,e,b);var f;b="/youtubei/v1/"+cx(this.j());(e=(f=cu(a.commandMetadata,nm))==null?void 0:f.apiUrl)&&(b=e);f=yv(xv(b));a=Object.assign({},{command:a},void 0);d={input:f,ab:zv(f),Ga:d,config:a};d.config.Ob?d.config.Ob.identity=c:d.config.Ob={identity:c};return d}c=new T("Error: Failed to create Request from Command.",a);Uu(c)};
ea.Object.defineProperties(dx.prototype,{o:{configurable:!0,enumerable:!0,get:function(){return!1}}});
function ex(){}
v(ex,dx);function fx(){}
v(fx,ex);fx.prototype.u=function(){return{input:"/getDatasyncIdsEndpoint",ab:zv("/getDatasyncIdsEndpoint","GET"),Ga:{}}};
fx.prototype.j=function(){return[]};
fx.prototype.i=function(){};
fx.prototype.h=function(){};var gx={},hx=(gx.GET_DATASYNC_IDS=$w(fx),gx);function ix(a){var b;(b=F("ytcsi."+(a||"")+"data_"))||(b={tick:{},info:{}},E("ytcsi."+(a||"")+"data_",b));return b}
function jx(){var a=ix();a.info||(a.info={});return a.info}
function kx(a){a=ix(a);a.metadata||(a.metadata={});return a.metadata}
function lx(a){a=ix(a);a.tick||(a.tick={});return a.tick}
function mx(a){a=ix(a);if(a.gel){var b=a.gel;b.gelInfos||(b.gelInfos={});b.gelTicks||(b.gelTicks={})}else a.gel={gelTicks:{},gelInfos:{}};return a.gel}
function nx(a){a=mx(a);a.gelInfos||(a.gelInfos={});return a.gelInfos}
function ox(a){var b=ix(a).nonce;b||(b=dv(),ix(a).nonce=b);return b}
;function px(){var a=F("ytcsi.debug");a||(a=[],E("ytcsi.debug",a),E("ytcsi.reference",{}));return a}
function qx(a){a=a||"";var b=F("ytcsi.reference");b||(px(),b=F("ytcsi.reference"));if(b[a])return b[a];var c=px(),d={timerName:a,info:{},tick:{},span:{},jspbInfo:[]};c.push(d);return b[a]=d}
;var W={},rx=(W.auto_search="LATENCY_ACTION_AUTO_SEARCH",W.ad_to_ad="LATENCY_ACTION_AD_TO_AD",W.ad_to_video="LATENCY_ACTION_AD_TO_VIDEO",W.app_startup="LATENCY_ACTION_APP_STARTUP",W.browse="LATENCY_ACTION_BROWSE",W.cast_splash="LATENCY_ACTION_CAST_SPLASH",W.channel_activity="LATENCY_ACTION_KIDS_CHANNEL_ACTIVITY",W.channels="LATENCY_ACTION_CHANNELS",W.chips="LATENCY_ACTION_CHIPS",W.commerce_transaction="LATENCY_ACTION_COMMERCE_TRANSACTION",W.direct_playback="LATENCY_ACTION_DIRECT_PLAYBACK",W.editor=
"LATENCY_ACTION_EDITOR",W.embed="LATENCY_ACTION_EMBED",W.embed_no_video="LATENCY_ACTION_EMBED_NO_VIDEO",W.entity_key_serialization_perf="LATENCY_ACTION_ENTITY_KEY_SERIALIZATION_PERF",W.entity_key_deserialization_perf="LATENCY_ACTION_ENTITY_KEY_DESERIALIZATION_PERF",W.explore="LATENCY_ACTION_EXPLORE",W.favorites="LATENCY_ACTION_FAVORITES",W.home="LATENCY_ACTION_HOME",W.inboarding="LATENCY_ACTION_INBOARDING",W.landing="LATENCY_ACTION_LANDING",W.learning="LATENCY_ACTION_LEARNING",W.learning_journey_browse=
"LATENCY_ACTION_LEARNING_JOURNEY_BROWSE",W.learning_journey_watch="LATENCY_ACTION_LEARNING_JOURNEY_WATCH",W.library="LATENCY_ACTION_LIBRARY",W.live="LATENCY_ACTION_LIVE",W.live_pagination="LATENCY_ACTION_LIVE_PAGINATION",W.management="LATENCY_ACTION_MANAGEMENT",W.mini_app="LATENCY_ACTION_MINI_APP_PLAY",W.notification_settings="LATENCY_ACTION_KIDS_NOTIFICATION_SETTINGS",W.onboarding="LATENCY_ACTION_ONBOARDING",W.parent_profile_settings="LATENCY_ACTION_KIDS_PARENT_PROFILE_SETTINGS",W.parent_tools_collection=
"LATENCY_ACTION_PARENT_TOOLS_COLLECTION",W.parent_tools_dashboard="LATENCY_ACTION_PARENT_TOOLS_DASHBOARD",W.player_att="LATENCY_ACTION_PLAYER_ATTESTATION",W.prebuffer="LATENCY_ACTION_PREBUFFER",W.prefetch="LATENCY_ACTION_PREFETCH",W.profile_settings="LATENCY_ACTION_KIDS_PROFILE_SETTINGS",W.profile_switcher="LATENCY_ACTION_LOGIN",W.projects="LATENCY_ACTION_PROJECTS",W.reel_watch="LATENCY_ACTION_REEL_WATCH",W.results="LATENCY_ACTION_RESULTS",W.red="LATENCY_ACTION_PREMIUM_PAGE_GET_BROWSE",W.premium=
"LATENCY_ACTION_PREMIUM_PAGE_GET_BROWSE",W.privacy_policy="LATENCY_ACTION_KIDS_PRIVACY_POLICY",W.review="LATENCY_ACTION_REVIEW",W.search_overview_answer="LATENCY_ACTION_SEARCH_OVERVIEW_ANSWER",W.search_ui="LATENCY_ACTION_SEARCH_UI",W.search_suggest="LATENCY_ACTION_SUGGEST",W.search_zero_state="LATENCY_ACTION_SEARCH_ZERO_STATE",W.secret_code="LATENCY_ACTION_KIDS_SECRET_CODE",W.seek="LATENCY_ACTION_PLAYER_SEEK",W.settings="LATENCY_ACTION_SETTINGS",W.store="LATENCY_ACTION_STORE",W.supervision_dashboard=
"LATENCY_ACTION_KIDS_SUPERVISION_DASHBOARD",W.tenx="LATENCY_ACTION_TENX",W.video_preview="LATENCY_ACTION_VIDEO_PREVIEW",W.video_to_ad="LATENCY_ACTION_VIDEO_TO_AD",W.watch="LATENCY_ACTION_WATCH",W.watch_it_again="LATENCY_ACTION_KIDS_WATCH_IT_AGAIN",W["watch,watch7"]="LATENCY_ACTION_WATCH",W["watch,watch7_html5"]="LATENCY_ACTION_WATCH",W["watch,watch7ad"]="LATENCY_ACTION_WATCH",W["watch,watch7ad_html5"]="LATENCY_ACTION_WATCH",W.wn_comments="LATENCY_ACTION_LOAD_COMMENTS",W.ww_rqs="LATENCY_ACTION_WHO_IS_WATCHING",
W.voice_assistant="LATENCY_ACTION_VOICE_ASSISTANT",W.cast_load_by_entity_to_watch="LATENCY_ACTION_CAST_LOAD_BY_ENTITY_TO_WATCH",W.networkless_performance="LATENCY_ACTION_NETWORKLESS_PERFORMANCE",W.gel_compression="LATENCY_ACTION_GEL_COMPRESSION",W.gel_jspb_serialize="LATENCY_ACTION_GEL_JSPB_SERIALIZE",W.attestation_challenge_fetch="LATENCY_ACTION_ATTESTATION_CHALLENGE_FETCH",W);function sx(a,b){ar.call(this,1,arguments);this.timer=b}
v(sx,ar);var tx=new br("aft-recorded",sx);E("ytLoggingGelSequenceIdObj_",D.ytLoggingGelSequenceIdObj_||{});var ux=D.ytLoggingLatencyUsageStats_||{};E("ytLoggingLatencyUsageStats_",ux);function vx(){this.h=0}
function wx(){vx.instance||(vx.instance=new vx);return vx.instance}
vx.prototype.tick=function(a,b,c,d){xx(this,"tick_"+a+"_"+b)||ep("latencyActionTicked",{tickName:a,clientActionNonce:b},{timestamp:c,cttAuthInfo:d})};
vx.prototype.info=function(a,b,c){var d=Object.keys(a).join("");xx(this,"info_"+d+"_"+b)||(a=Object.assign({},a),a.clientActionNonce=b,ep("latencyActionInfo",a,{cttAuthInfo:c}))};
vx.prototype.jspbInfo=function(){};
vx.prototype.span=function(a,b,c){var d=Object.keys(a).join("");xx(this,"span_"+d+"_"+b)||(a.clientActionNonce=b,ep("latencyActionSpan",a,{cttAuthInfo:c}))};
function xx(a,b){ux[b]=ux[b]||{count:0};var c=ux[b];c.count++;c.time=V();a.h||(a.h=po(function(){var d=V(),e;for(e in ux)ux[e]&&d-ux[e].time>6E4&&delete ux[e];a&&(a.h=0)},5E3));
return c.count>5?(c.count===6&&Math.random()*1E5<1&&(c=new T("CSI data exceeded logging limit with key",b.split("_")),b.indexOf("plev")>=0||Vu(c)),!0):!1}
;var yx=window;function zx(){this.timing={};this.clearResourceTimings=function(){};
this.webkitClearResourceTimings=function(){};
this.mozClearResourceTimings=function(){};
this.msClearResourceTimings=function(){};
this.oClearResourceTimings=function(){}}
function Ax(){var a;if(S("csi_use_performance_navigation_timing")){var b,c,d,e=X==null?void 0:(a=X.getEntriesByType)==null?void 0:(b=a.call(X,"navigation"))==null?void 0:(c=b[0])==null?void 0:(d=c.toJSON)==null?void 0:d.call(c);e?(e.requestStart=Bx(e.requestStart),e.responseEnd=Bx(e.responseEnd),e.redirectStart=Bx(e.redirectStart),e.redirectEnd=Bx(e.redirectEnd),e.domainLookupEnd=Bx(e.domainLookupEnd),e.connectStart=Bx(e.connectStart),e.connectEnd=Bx(e.connectEnd),e.responseStart=Bx(e.responseStart),
e.secureConnectionStart=Bx(e.secureConnectionStart),e.domainLookupStart=Bx(e.domainLookupStart),e.isPerformanceNavigationTiming=!0,a=e):a=X.timing}else a=S("csi_performance_timing_to_object")?JSON.parse(JSON.stringify(X.timing)):X.timing;return a}
function Bx(a){return Math.round(Cx()+a)}
function Cx(){return(S("csi_use_time_origin")||S("csi_use_time_origin_tvhtml5"))&&X.timeOrigin?Math.floor(X.timeOrigin):X.timing.navigationStart}
var X=yx.performance||yx.mozPerformance||yx.msPerformance||yx.webkitPerformance||new zx;var Dx=!1,Ex=!1,Fx={'script[name="scheduler/scheduler"]':"sj",'script[name="player/base"]':"pj",'link[rel="preload"][name="player/embed"]':"pej",'link[rel="stylesheet"][name="www-player"]':"pc",'link[rel="stylesheet"][name="player/www-player"]':"pc",'script[name="desktop_polymer/desktop_polymer"]':"dpj",'link[rel="import"][name="desktop_polymer"]':"dph",'script[name="mobile-c3"]':"mcj",'link[rel="stylesheet"][name="mobile-c3"]':"mcc",'script[name="player-plasma-ias-phone/base"]':"mcppj",'script[name="player-plasma-ias-tablet/base"]':"mcptj",
'link[rel="stylesheet"][name="mobile-polymer-player-ias"]':"mcpc",'link[rel="stylesheet"][name="mobile-polymer-player-svg-ias"]':"mcpsc",'script[name="mobile_blazer_core_mod"]':"mbcj",'link[rel="stylesheet"][name="mobile_blazer_css"]':"mbc",'script[name="mobile_blazer_logged_in_users_mod"]':"mbliuj",'script[name="mobile_blazer_logged_out_users_mod"]':"mblouj",'script[name="mobile_blazer_noncore_mod"]':"mbnj","#player_css":"mbpc",'script[name="mobile_blazer_desktopplayer_mod"]':"mbpj",'link[rel="stylesheet"][name="mobile_blazer_tablet_css"]':"mbtc",
'script[name="mobile_blazer_watch_mod"]':"mbwj",'script[name="embed_client"]':"ecj",'link[rel="stylesheet"][name="embed-ui"]':"ecc"};Va(X.clearResourceTimings||X.webkitClearResourceTimings||X.mozClearResourceTimings||X.msClearResourceTimings||X.oClearResourceTimings||ui,X);function Gx(a,b){if(!S("web_csi_action_sampling_enabled")||!ix(b).actionDisabled){var c=qx(b||"");jw(c.info,a);a.loadType&&(c=a.loadType,kx(b).loadType=c);jw(nx(b),a);c=ox(b);b=ix(b).cttAuthInfo;wx().info(a,c,b)}}
function Hx(){var a,b,c,d;return((d=Et().resolve(xt(Oq))==null?void 0:(a=Pq())==null?void 0:(b=a.loggingHotConfig)==null?void 0:(c=b.csiConfig)==null?void 0:c.debugTicks)!=null?d:[]).map(function(e){return Object.values(e)[0]})}
function Ix(a,b,c){if(!S("web_csi_action_sampling_enabled")||!ix(c).actionDisabled){var d=ox(c),e;if(e=S("web_csi_debug_sample_enabled")&&d){(Et().resolve(xt(Oq))==null?0:Pq())&&!Ex&&(Ex=!0,Ix("gcfl",V(),c));var f,g,h;e=(Et().resolve(xt(Oq))==null?void 0:(f=Pq())==null?void 0:(g=f.loggingHotConfig)==null?void 0:(h=g.csiConfig)==null?void 0:h.debugSampleWeight)||0;if(f=e!==0)b:{f=Hx();if(f.length>0)for(g=0;g<f.length;g++)if(a===f[g]){f=!0;break b}f=!1}if(f){for(g=f=0;g<d.length;g++)f=f*31+d.charCodeAt(g),
g<d.length-1&&(f%=0x800000000000);e=f%1E5%e!==0;ix(c).debugTicksExcludedLogged||(f={},f.debugTicksExcluded=e,Gx(f,c));ix(c).debugTicksExcludedLogged=!0}else e=!1}if(!e){if(a[0]!=="_"&&(e=a,f=b,X.mark))if(e.startsWith("mark_")||(e="mark_"+e),c&&(e+=" ("+c+")"),f===void 0||S("web_csi_disable_alt_time_performance_mark"))X.mark(e);else{f=S("csi_use_performance_navigation_timing")?f-X.timeOrigin:f-(X.timeOrigin||X.timing.navigationStart);try{X.mark(e,{startTime:f})}catch(k){}}e=qx(c||"");e.tick[a]=b||
V();if(e.callback&&e.callback[a])for(e=y(e.callback[a]),f=e.next();!f.done;f=e.next())f=f.value,f();e=mx(c);e.gelTicks&&(e.gelTicks[a]=!0);f=lx(c);e=b||V();S("log_repeated_ytcsi_ticks")?a in f||(f[a]=e):f[a]=e;f=ix(c).cttAuthInfo;a==="_start"?(a=wx(),xx(a,"baseline_"+d)||ep("latencyActionBaselined",{clientActionNonce:d},{timestamp:b,cttAuthInfo:f})):wx().tick(a,d,b,f);Jx(c);return e}}}
function Kx(){var a=document;if("visibilityState"in a)a=a.visibilityState;else{var b=Rs+"VisibilityState";a=b in a?a[b]:void 0}switch(a){case "hidden":return 0;case "visible":return 1;case "prerender":return 2;case "unloaded":return 3;default:return-1}}
function Lx(){function a(f,g,h){g=g.match("_rid")?g.split("_rid")[0]:g;typeof h==="number"&&(h=JSON.stringify(h));f.requestIds?f.requestIds.push({endpoint:g,id:h}):f.requestIds=[{endpoint:g,id:h}]}
for(var b={},c=y(Object.entries(R("TIMING_INFO",{}))),d=c.next();!d.done;d=c.next()){var e=y(d.value);d=e.next().value;e=e.next().value;switch(d){case "GetBrowse_rid":a(b,d,e);break;case "GetGuide_rid":a(b,d,e);break;case "GetHome_rid":a(b,d,e);break;case "GetPlayer_rid":a(b,d,e);break;case "GetSearch_rid":a(b,d,e);break;case "GetSettings_rid":a(b,d,e);break;case "GetTrending_rid":a(b,d,e);break;case "GetWatchNext_rid":a(b,d,e);break;case "yt_red":b.isRedSubscriber=!!e;break;case "yt_ad":b.isMonetized=
!!e}}return b}
function Mx(a,b){a=document.querySelector(a);if(!a)return!1;var c="",d=a.nodeName;d==="SCRIPT"?(c=a.src,c||(c=a.getAttribute("data-timing-href"))&&(c=window.location.protocol+c)):d==="LINK"&&(c=a.href);Db(document)&&a.setAttribute("nonce",Db(document));return c?(a=X.getEntriesByName(c))&&a[0]&&(a=a[0],c=Cx(),Ix("rsf_"+b,c+Math.round(a.fetchStart)),Ix("rse_"+b,c+Math.round(a.responseEnd)),a.transferSize!==void 0&&a.transferSize===0)?!0:!1:!1}
function Nx(){var a=window.location.protocol,b=X.getEntriesByType("resource");b=Rb(b,function(c){return c.name.indexOf(a+"//fonts.gstatic.com/s/")===0});
(b=Tb(b,function(c,d){return d.duration>c.duration?d:c},{duration:0}))&&b.startTime>0&&b.responseEnd>0&&(Ix("wffs",Bx(b.startTime)),Ix("wffe",Bx(b.responseEnd)))}
function Ox(a){var b=Px("aft",a);if(b)return b;b=R((a||"")+"TIMING_AFT_KEYS",["ol"]);for(var c=b.length,d=0;d<c;d++){var e=Px(b[d],a);if(e)return e}return NaN}
function Px(a,b){if(a=lx(b)[a])return typeof a==="number"?a:a[a.length-1]}
function Jx(a){var b=Px("_start",a),c=Ox(a),d=!Dx;b&&c&&d&&(gr(tx,new sx(Math.round(c-b),a)),Dx=!0)}
function Qx(){if(X.getEntriesByType){var a=X.getEntriesByType("paint");if(a=Ub(a,function(c){return c.name==="first-paint"}))return Bx(a.startTime)}var b;
S("csi_use_performance_navigation_timing")?b=X.getEntriesByType("first-paint")[0].startTime:b=X.timing.Vh;return b?Math.max(0,b):0}
;function Rx(a,b){Nm(function(){qx("").info.actionType=a;b&&Jm("TIMING_AFT_KEYS",b);Jm("TIMING_ACTION",a);var c=Lx();Object.keys(c).length>0&&Gx(c);c={isNavigation:!0,actionType:rx[R("TIMING_ACTION")]||"LATENCY_ACTION_UNKNOWN"};var d=R("PREVIOUS_ACTION");d&&(c.previousAction=rx[d]||"LATENCY_ACTION_UNKNOWN");if(d=R("CLIENT_PROTOCOL"))c.httpProtocol=d;if(d=R("CLIENT_TRANSPORT"))c.transportProtocol=d;(d=nv())&&d!=="UNDEFINED_CSN"&&(c.clientScreenNonce=d);d=Kx();if(d===1||d===-1)c.isVisible=!0;kx();jx();
c.loadType="cold";d=jx();var e=Ax(),f=Cx(),g=R("CSI_START_TIMESTAMP_MILLIS",0);g>0&&!S("embeds_web_enable_csi_start_override_killswitch")&&(f=g);f&&(Ix("srt",e.responseStart),d.prerender!==1&&Ix("_start",f,void 0));d=Qx();d>0&&Ix("fpt",d);d=Ax();d.isPerformanceNavigationTiming&&Gx({performanceNavigationTiming:!0},void 0);Ix("nreqs",d.requestStart,void 0);Ix("nress",d.responseStart,void 0);Ix("nrese",d.responseEnd,void 0);d.redirectEnd-d.redirectStart>0&&(Ix("nrs",d.redirectStart,void 0),Ix("nre",
d.redirectEnd,void 0));d.domainLookupEnd-d.domainLookupStart>0&&(Ix("ndnss",d.domainLookupStart,void 0),Ix("ndnse",d.domainLookupEnd,void 0));d.connectEnd-d.connectStart>0&&(Ix("ntcps",d.connectStart,void 0),Ix("ntcpe",d.connectEnd,void 0));d.secureConnectionStart>=Cx()&&d.connectEnd-d.secureConnectionStart>0&&(Ix("nstcps",d.secureConnectionStart,void 0),Ix("ntcpe",d.connectEnd,void 0));X&&"getEntriesByType"in X&&Nx();d=[];if(document.querySelector&&X&&X.getEntriesByName)for(var h in Fx)Fx.hasOwnProperty(h)&&
(e=Fx[h],Mx(h,e)&&d.push(e));if(d.length>0)for(c.resourceInfo=[],h=y(d),d=h.next();!d.done;d=h.next())c.resourceInfo.push({resourceCache:d.value});Gx(c);c=mx();c.preLoggedGelInfos||(c.preLoggedGelInfos=[]);h=c.preLoggedGelInfos;c=nx();d=void 0;for(e=0;e<h.length;e++)if(f=h[e],f.loadType){d=f.loadType;break}if(kx().loadType==="cold"&&(c.loadType==="cold"||d==="cold")){d=lx();e=mx();e=e.gelTicks?e.gelTicks:e.gelTicks={};for(var k in d)if(!(k in e))if(typeof d[k]==="number")Ix(k,Px(k));else if(S("log_repeated_ytcsi_ticks"))for(f=
y(d[k]),g=f.next();!g.done;g=f.next())g=g.value,Ix(k.slice(1),g);k={};d=!1;h=y(h);for(e=h.next();!e.done;e=h.next())d=e.value,jw(c,d),jw(k,d),d=!0;d&&Gx(k)}E("ytglobal.timingready_",!0);k=R("TIMING_ACTION");F("ytglobal.timingready_")&&k&&Sx()&&Ox()&&Jx()})()}
function Sx(a){return Nm(function(){return Tx("_start",a)})()}
function Ux(a,b,c){Nm(Gx)(a,b,c===void 0?!1:c)}
function Vx(a,b,c){return Nm(Ix)(a,b,c)}
function Tx(a,b){return Nm(function(){var c=lx(b);return a in c})()}
function Wx(a){if(!S("universal_csi_network_ticks"))return"";a=jc(a)||"";for(var b=Object.keys(Zq),c=0;c<b.length;c++){var d=b[c];if(a.includes(d))return d}return""}
function Xx(a){if(!S("universal_csi_network_ticks"))return function(){};
var b=Zq[a];return b?(Yx(b),function(){var c=S("universal_csi_network_ticks")?(c=$q[a])?Yx(c):!1:!1;return c}):function(){}}
function Yx(a){return Nm(function(){if(Tx(a))return!1;Vx(a,void 0,void 0);return!0})()}
function Zx(a){Nm(function(){if(!Sx("attestation_challenge_fetch")||Tx(a,"attestation_challenge_fetch"))return!1;Vx(a,void 0,"attestation_challenge_fetch");return!0})()}
function $x(){Nm(function(){var a=ox();requestAnimationFrame(function(){setTimeout(function(){a===ox()&&Vx("ol",void 0,void 0)},0)})})()}
var ay=window;ay.ytcsi&&(ay.ytcsi.infoGel=Ux,ay.ytcsi.tick=Vx);var by="tokens consistency service_params mss client_location entities adblock_detection response_received_commands store PLAYER_PRELOAD shorts_prefetch".split(" "),cy=["type.googleapis.com/youtube.api.pfiinnertube.YoutubeApiInnertube.BrowseResponse","type.googleapis.com/youtube.api.pfiinnertube.YoutubeApiInnertube.PlayerResponse"];function dy(a,b,c,d){this.u=a;this.fa=b;this.j=c;this.o=d;this.i=void 0;this.h=new Map;a.cc||(a.cc={});a.cc=Object.assign({},hx,a.cc)}
function ey(a,b,c,d){if(dy.instance!==void 0){if(d=dy.instance,a=[a!==d.u,b!==d.fa,c!==d.j,!1,!1,!1,void 0!==d.i],a.some(function(e){return e}))throw new T("InnerTubeTransportService is already initialized",a);
}else dy.instance=new dy(a,b,c,d)}
function fy(a){var b={signalServiceEndpoint:{signal:"GET_DATASYNC_IDS"}};var c=c===void 0?Un:c;var d=gy(a,b);return d?new wi(function(e,f){var g,h,k,l,m;return B(function(n){switch(n.h){case 1:return n.yield(d,2);case 2:g=n.i;h=g.u(b,void 0,c);if(!h){f(new T("Error: Failed to build request for command.",b));n.B(0);break}Kw(h.input);l=((k=h.ab)==null?void 0:k.mode)==="cors"?"cors":void 0;if(a.j.Qd){m=hy(h.config,l);n.B(4);break}return n.yield(iy(h.config,l),5);case 5:m=n.i;case 4:e(jy(a,h,m)),n.h=
0}})}):Bi(new T("Error: No request builder found for command.",b))}
function ky(a,b){function c(){}
var d="/youtubei/v1/"+cx(Qv);var e=e===void 0?{Ob:{identity:Un}}:e;var f=f===void 0?!0:f;c=Xx(Wx(d));b.context||(b.context=Ww(void 0,f));return new wi(function(g){var h,k,l,m,n;return B(function(r){if(r.h==1)return h=xv(d),k=$m(h)?"same-origin":"cors",a.j.Qd?(l=hy(e,k),r.B(2)):r.yield(iy(e,k),3);r.h!=2&&(l=r.i);m=yv(xv(d));n={input:m,ab:zv(m),Ga:b,config:e};g(jy(a,n,l,c));r.h=0})})}
function ly(a,b,c){var d;if(b&&!(b==null?0:(d=b.sequenceMetaData)==null?0:d.skipProcessing)&&a.o){d=y(by);for(var e=d.next();!e.done;e=d.next())e=e.value,a.o[e]&&a.o[e].handleResponse(b,c)}}
function jy(a,b,c,d){d=d===void 0?function(){}:d;
var e,f,g,h,k,l,m,n,r,t,w,x,z,G,H,U,Z,mb,Qb,ca,$a,Pa,Qa,Oa,vh,wh,Us,Vs,Ws,Xs;return B(function(ia){switch(ia.h){case 1:ia.B(2);break;case 3:if((e=ia.i)&&!e.isExpired())return ia.return(Promise.resolve(e.h()));case 2:if(!((f=b)==null?0:(g=f.Ga)==null?0:g.context)){ia.B(4);break}h=b.Ga.context;ia.B(5);break;case 5:k=y([]),l=k.next();case 8:if(l.done){ia.B(4);break}m=l.value;return ia.yield(m.Wh(h),9);case 9:l=k.next();ia.B(8);break;case 4:if((n=a.i)==null||!n.fi(b.input,b.Ga)){ia.B(12);break}return ia.yield(a.i.Qh(b.input,
b.Ga),13);case 13:return r=ia.i,ly(a,r,b),ia.return(r);case 12:return(x=(w=b.config)==null?void 0:w.Zh)&&a.h.has(x)?t=a.h.get(x):(z=JSON.stringify(b.Ga),U=(H=(G=b.ab)==null?void 0:G.headers)!=null?H:{},b.ab=Object.assign({},b.ab,{headers:Object.assign({},U,c)}),Z=Object.assign({},b.ab),b.ab.method==="POST"&&(Z=Object.assign({},Z,{body:z})),((mb=b.config)==null?0:mb.bf)&&Vx(b.config.bf),Qb=function(){return a.fa.fetch(b.input,Z,b.config)},t=Qb(),x&&a.h.set(x,t)),ia.yield(t,14);
case 14:(ca=ia.i)&&S("web_streaming_player")&&Array.isArray(ca)&&(ca=ca[0].playerResponse);if(ca&&"error"in ca&&(($a=ca)==null?0:(Pa=$a.error)==null?0:Pa.details))for(Qa=ca.error.details,Oa=y(Qa),vh=Oa.next();!vh.done;vh=Oa.next())wh=vh.value,(Us=wh["@type"])&&cy.indexOf(Us)>-1&&(delete wh["@type"],ca=wh);x&&a.h.has(x)&&a.h.delete(x);((Vs=b.config)==null?0:Vs.cf)&&Vx(b.config.cf);if(ca||(Ws=a.i)==null||!Ws.Dh(b.input,b.Ga)){ia.B(15);break}return ia.yield(a.i.Ph(b.input,b.Ga),16);case 16:ca=ia.i;case 15:return ly(a,
ca,b),((Xs=b.config)==null?0:Xs.Ye)&&Vx(b.config.Ye),d(),ia.return(ca||void 0)}})}
function gy(a,b){a:{a=a.u;var c,d=(c=cu(b,om))==null?void 0:c.signal;if(d&&a.cc&&(c=a.cc[d])){var e=c();break a}var f;if((c=(f=cu(b,mm))==null?void 0:f.request)&&a.le&&(f=a.le[c])){e=f();break a}for(e in b)if(a.Lc[e]&&(b=a.Lc[e])){e=b();break a}e=void 0}if(e!==void 0)return Promise.resolve(e)}
function iy(a,b){var c,d,e,f;return B(function(g){if(g.h==1){e=(c=a)==null?void 0:(d=c.Ob)==null?void 0:d.sessionIndex;var h=g.yield;var k=Tn(0,{sessionIndex:e});if(!(k instanceof wi)){var l=new wi(ui);xi(l,2,k);k=l}return h.call(g,k,2)}f=g.i;return g.return(Promise.resolve(Object.assign({},Xw(b),f)))})}
function hy(a,b){var c;a=a==null?void 0:(c=a.Ob)==null?void 0:c.sessionIndex;c=Tn(0,{sessionIndex:a});return Object.assign({},Xw(b),c)}
;var my=new vt("INNERTUBE_TRANSPORT_TOKEN");function ny(){}
v(ny,ex);ny.prototype.j=function(){return Wv};
ny.prototype.i=function(a){return cu(a,Am)||void 0};
ny.prototype.h=function(a,b,c){c=c===void 0?{}:c;b.channelIds&&(a.channelIds=b.channelIds);b.siloName&&(a.siloName=b.siloName);b.params&&(a.params=b.params);c.botguardResponse&&(a.botguardResponse=c.botguardResponse);c.feature&&(a.clientFeature=c.feature)};
ea.Object.defineProperties(ny.prototype,{o:{configurable:!0,enumerable:!0,get:function(){return!0}}});function oy(){}
v(oy,ex);oy.prototype.j=function(){return Xv};
oy.prototype.i=function(a){return cu(a,zm)||void 0};
oy.prototype.h=function(a,b){b.channelIds&&(a.channelIds=b.channelIds);b.siloName&&(a.siloName=b.siloName);b.params&&(a.params=b.params)};
ea.Object.defineProperties(oy.prototype,{o:{configurable:!0,enumerable:!0,get:function(){return!0}}});var py=new vt("SHARE_CLIENT_PARAMS_PROVIDER_TOKEN");function qy(a){this.H=a}
v(qy,ex);qy.prototype.j=function(){return Rv};
qy.prototype.i=function(a){return cu(a,sm)||cu(a,tm)||cu(a,rm)};
qy.prototype.h=function(a,b){b.serializedShareEntity&&(a.serializedSharedEntity=b.serializedShareEntity);if(b.clientParamIdentifier){var c;if((c=this.H)==null?0:c.h(b.clientParamIdentifier))a.clientParams=this.H.i(b.clientParamIdentifier)}};
qy[ut]=[py];function ry(){}
v(ry,ex);ry.prototype.j=function(){return Tv};
ry.prototype.i=function(a){return cu(a,qm)||void 0};
ry.prototype.h=function(a,b,c){a.feedbackTokens=[];b.feedbackToken&&a.feedbackTokens.push(b.feedbackToken);if(b=b.cpn||c.cpn)a.feedbackContext={cpn:b};a.isFeedbackTokenUnencrypted=!!c.is_feedback_token_unencrypted;a.shouldMerge=!1;c.extra_feedback_tokens&&(a.shouldMerge=!0,a.feedbackTokens=a.feedbackTokens.concat(c.extra_feedback_tokens))};
ea.Object.defineProperties(ry.prototype,{o:{configurable:!0,enumerable:!0,get:function(){return!0}}});function sy(){}
v(sy,ex);sy.prototype.j=function(){return Uv};
sy.prototype.i=function(a){return cu(a,xm)||void 0};
sy.prototype.h=function(a,b){b.params&&(a.params=b.params);b.secondaryParams&&(a.secondaryParams=b.secondaryParams)};function ty(){}
v(ty,ex);ty.prototype.j=function(){return Vv};
ty.prototype.i=function(a){return cu(a,wm)||void 0};
ty.prototype.h=function(a,b){b.actions&&(a.actions=b.actions);b.params&&(a.params=b.params);b.playlistId&&(a.playlistId=b.playlistId)};function uy(){}
v(uy,ex);uy.prototype.j=function(){return Sv};
uy.prototype.i=function(a){return cu(a,um)};
uy.prototype.h=function(a,b,c){c=c===void 0?{}:c;b.serializedShareEntity&&(a.serializedSharedEntity=b.serializedShareEntity);c.includeListId&&(a.includeListId=!0)};var vy=new vt("FETCH_FN_TOKEN"),wy=new vt("PARSE_FN_TOKEN"),xy=new vt("WINDOW_REQUEST_TOKEN"),yy=new vt("TEXT_DECODER_TOKEN");function zy(a,b){var c=C.apply(2,arguments);a=a===void 0?0:a;T.call(this,b,c);this.errorType=a;Object.setPrototypeOf(this,this.constructor.prototype)}
v(zy,T);var Ay=new vt("NETWORK_SLI_TOKEN");function By(a,b,c,d){this.h=a;this.i=b;this.j=c;this.o=d}
By.prototype.fetch=function(a,b,c){var d=this,e,f,g;return B(function(h){e=Cy(d,a,b);g=(f=d.i)!=null?f:fetch;return h.return(g(e).then(function(k){return d.handleResponse(k,c)}).catch(function(k){Vu(k);
if((c==null?0:c.ue)&&k instanceof zy&&k.errorType===1)return Promise.reject(k)}))})};
function Cy(a,b,c){if(a.h){var d=jc(tc(b,"key"))||"/UNKNOWN_PATH";a.h.start(d)}d=c;S("wug_networking_gzip_request")&&(d=Ir(c));var e;return new ((e=a.o)!=null?e:window.Request)(b,d)}
By.prototype.handleResponse=function(a,b){var c,d=(c=this.j)!=null?c:JSON.parse;c=a.text().then(function(e){if((b==null?0:b.Ke)&&a.ok)return Of(b.Ke,e);e=e.replace(")]}'","");if((b==null?0:b.ue)&&e)try{var f=d(e)}catch(h){throw new zy(1,"JSON parsing failed after fetch");}var g;return(g=f)!=null?g:d(e)});
a.redirected||a.ok?this.h&&this.h.success():(this.h&&this.h.Jh(),c=c.then(function(e){Vu(new T("Error: API fetch failed",a.status,a.url,e));return Object.assign({},e,{errorMetadata:{status:a.status}})}));
return c};
By[ut]=[xt(Ay),xt(vy),xt(wy),xt(xy),xt(yy)];var Dy=new vt("NETWORK_MANAGER_TOKEN");var Ey;function Fy(a){var b=new uj;if(a.interpreterJavascript){var c=em(a.interpreterJavascript);c=Gb(c).toString();var d=new sj;Lf(d,6,c);Gf(b,sj,1,d,ce)}else a.interpreterUrl&&(c=fm(a.interpreterUrl),c=nb(c).toString(),d=new tj,Lf(d,4,c),Gf(b,tj,2,d,ce));a.interpreterHash&&Mf(b,3,a.interpreterHash);a.program&&Mf(b,4,a.program);a.globalName&&Mf(b,5,a.globalName);a.clientExperimentsStateBlob&&Mf(b,7,a.clientExperimentsStateBlob);return b}
function Gy(a){var b={};a=y(a.split("&"));for(var c=a.next();!c.done;c=a.next())c=c.value.split("="),c.length===2&&(b[c[0]]=c[1]);return b}
;function zc(){if(S("bg_st_hr"))return"havuokmhhs-0";var a,b=((a=performance)==null?void 0:a.timeOrigin)||0;return"havuokmhhs-"+Math.floor(b)}
function Hy(a){this.h=a}
Hy.prototype.bindInnertubeChallengeFetcher=function(a){this.h.bicf(a)};
Hy.prototype.registerChallengeFetchedCallback=function(a){this.h.bcr(a)};
Hy.prototype.getLatestChallengeResponse=function(){return this.h.blc()};
function Iy(){return new Promise(function(a){var b=window.top;b.ntpevasrs!==void 0?a(new Hy(b.ntpevasrs)):(b.ntpqfbel===void 0&&(b.ntpqfbel=[]),b.ntpqfbel.push(function(c){a(new Hy(c))}))})}
;var Jy=pa(["https://static.doubleclick.net/instream/ad_status.js"]),Ky=[],Ly=function(a){var b=C.apply(1,arguments);if(b.length===0)return lb(a[0]);for(var c=a[0],d=0;d<b.length;d++)c+=encodeURIComponent(b[d])+a[d+1];return lb(c)}(Jy),My=!1;
function Ny(){if(Av()){var a=R("PLAYER_VARS",{});if(zg(a)!="1"&&!Cv(a)){var b=function(){My=!0;"google_ad_status"in window?Jm("DCLKSTAT",1):Jm("DCLKSTAT",2)};
try{$v(Ly,b)}catch(c){}Ky.push(Xj.pa(function(){if(!(My||"google_ad_status"in window)){try{dw(Ly.toString(),b)}catch(c){}My=!0;Jm("DCLKSTAT",3)}},5E3))}}}
function Oy(){var a=Number(R("DCLKSTAT",0));return isNaN(a)?0:a}
;function Y(a){this.h=a}
[new Y("b.f_"),new Y("j.s_"),new Y("r.s_"),new Y("e.h_"),new Y("i.s_"),new Y("s.t_"),new Y("p.h_"),new Y("s.i_"),new Y("f.i_"),new Y("a.b_"),new Y("a.o_"),new Y("g.o_"),new Y("p.i_"),new Y("p.m_"),new Y("n.k_"),new Y("i.f_"),new Y("a.s_"),new Y("m.c_"),new Y("n.h_"),new Y("o.p_"),new Y("m.p_"),new Y("o.a_"),new Y("d.p_"),new Y("e.i_")].reduce(function(a,b){a[b.h]=b;return a},{});function Py(a,b,c){var d=this;this.network=a;this.options=b;this.o=c;this.h=null;if(b.Ef){var e=new zj;this.h=e.promise;D.ytAtRC&&Xj.Sa(function(){var f,g;return B(function(h){if(h.h==1){if(!D.ytAtRC)return h.return();f=Qy(null);return h.yield(d.ib(f),2)}g=h.i;D.ytAtRC&&D.ytAtRC(JSON.stringify(g));h.h=0})},2);
Iy().then(function(f){var g,h,k,l;return B(function(m){if(m.h==1)return f.bindInnertubeChallengeFetcher(function(n){return d.ib(Qy(n))}),m.yield(yc(),2);
g=m.i;h=f.getLatestChallengeResponse();k=h.challenge;if(!k)throw Error("BGE_MACIL");l={challenge:k,gb:Gy(k),vm:g,bgChallenge:new uj};e.resolve(l);f.registerChallengeFetchedCallback(function(n){n=n.challenge;if(!n)throw Error("BGE_MACR");n={challenge:n,gb:Gy(n),vm:g,bgChallenge:new uj};d.h=Promise.resolve(n)});
m.h=0})})}else b.preload&&Ry(this,new Promise(function(f){po(function(){f(Sy(d))},0)}))}
Py.prototype.j=function(){var a=this;return B(function(b){return b.h==1?b.yield(Promise.race([a.h,null]),2):b.return(!!b.i)})};
Py.prototype.i=function(a,b,c){var d=this,e,f,g;return B(function(h){d.h===null&&Ry(d,Sy(d));e=!1;f={};g=function(){var k,l,m;return B(function(n){switch(n.h){case 1:return n.yield(d.h,2);case 2:k=n.i;f.challenge=k.challenge;if(!k.vm){"c1a"in k.gb&&(f.error="ATTESTATION_ERROR_VM_NOT_INITIALIZED");n.B(3);break}l=Object.assign({},{c:k.challenge,e:a},b);wa(n,4);e=!0;return n.yield(k.vm.snapshot({Pb:l}),6);case 6:(m=n.i)?f.webResponse=m:f.error="ATTESTATION_ERROR_VM_NO_RESPONSE";xa(n,3);break;case 4:ya(n),
f.error="ATTESTATION_ERROR_VM_INTERNAL_ERROR";case 3:if(a==="ENGAGEMENT_TYPE_PLAYBACK"){var r=k.gb,t={};r.c6a&&(t.reportingStatus=String(Number(r.c)^Oy()));r.c6b&&(t.broadSpectrumDetectionResult=String(Number(r.c)^Number(R("CATSTAT",0))));f.adblockReporting=t}return n.return(f)}})};
return h.return(Promise.race([g(),Ty(c,function(){var k=Object.assign({},f);e&&(k.error="ATTESTATION_ERROR_VM_TIMEOUT");return k})]))})};
function Qy(a){var b={engagementType:"ENGAGEMENT_TYPE_UNBOUND"};a&&(b.interpreterHash=a);return b}
function Sy(a,b){b=b===void 0?0:b;var c,d,e,f,g,h,k,l,m,n,r,t;return B(function(w){switch(w.h){case 1:c=Qy(Ej().h);if(S("att_fet_ks"))return wa(w,7),w.yield(a.ib(c),9);wa(w,4);return w.yield(Uy(a,c),6);case 6:g=w.i;e=g.Te;f=g.Ue;d=g;xa(w,3);break;case 4:return ya(w),Vu(Error("Failed to fetch attestation challenge after "+(b+" attempts; not retrying for 24h."))),Vy(a,864E5),w.return({challenge:"",gb:{},vm:void 0,bgChallenge:void 0});case 9:d=w.i;if(!d)throw Error("Fetching Attestation challenge returned falsy");
if(!d.challenge)throw Error("Missing Attestation challenge");e=d.challenge;f=Gy(e);if("c1a"in f&&(!d.bgChallenge||!d.bgChallenge.program))throw Error("Expected bg challenge but missing.");xa(w,3);break;case 7:h=ya(w);Vu(h);b++;if(b>=5)return Vu(Error("Failed to fetch attestation challenge after "+(b+" attempts; not retrying for 24h."))),Vy(a,864E5),w.return({challenge:"",gb:{},vm:void 0,bgChallenge:void 0});k=1E3*Math.pow(2,b-1)+Math.random()*1E3;return w.return(new Promise(function(x){po(function(){x(Sy(a,
b))},k)}));
case 3:l=Number(f.t)||7200;Vy(a,l*1E3);m=void 0;if(!("c1a"in f&&d.bgChallenge)){w.B(10);break}n=Fy(d.bgChallenge);wa(w,11);return w.yield(Fj(Ej(),n),13);case 13:xa(w,12);break;case 11:return r=ya(w),Vu(r),w.return({challenge:e,gb:f,vm:m,bgChallenge:n});case 12:return wa(w,14),m=new Bj({challenge:n,Dd:{Da:"aGIf"}}),w.yield(m.hd,16);case 16:xa(w,10);break;case 14:t=ya(w),Vu(t),m=void 0;case 10:return w.return({challenge:e,gb:f,vm:m,bgChallenge:n})}})}
Py.prototype.ib=function(a){var b=this,c;return B(function(d){c=b.o;if(!c||c.ta())return d.return(b.network.ib(a));Zx("att_pna");return d.return(new Promise(function(e){bi(c,"publicytnetworkstatus-online",function(){b.network.ib(a).then(e)})}))})};
function Wy(a){if(!a)throw Error("Fetching Attestation challenge returned falsy");if(!a.challenge)throw Error("Missing Attestation challenge");var b=a.challenge,c=Gy(b);if("c1a"in c&&(!a.bgChallenge||!a.bgChallenge.program))throw Error("Expected bg challenge but missing.");return Object.assign({},a,{Te:b,Ue:c})}
function Uy(a,b){var c,d,e,f,g;return B(function(h){switch(h.h){case 1:c=void 0,d=0,e={};case 2:if(!(d<5)){h.B(4);break}if(!(d>0)){h.B(5);break}e.sd=1E3*Math.pow(2,d-1)+Math.random()*1E3;return h.yield(new Promise(function(k){return function(l){po(function(){l(void 0)},k.sd)}}(e)),5);
case 5:return wa(h,7),h.yield(a.ib(b),9);case 9:return f=h.i,h.return(Wy(f));case 7:c=g=ya(h),g instanceof Error&&Vu(g);case 8:d++;e={sd:void 0};h.B(2);break;case 4:throw c;}})}
function Ry(a,b){a.h=b}
function Xy(a){var b,c,d;return B(function(e){if(e.h==1)return e.yield(Promise.race([a.h,null]),2);b=e.i;var f=Sy(a);a.h=f;(c=b)==null||(d=c.vm)==null||d.dispose();e.h=0})}
function Vy(a,b){function c(){var e;return B(function(f){e=d-Date.now();return e<1E3?f.yield(Xy(a),0):(po(c,Math.min(e,6E4)),f.B(0))})}
var d=Date.now()+b;c()}
function Ty(a,b){return new Promise(function(c){po(function(){c(b())},a)})}
;function Yy(a){this.h=a}
Yy.prototype.ib=function(a){Zx("att_fsr");return ky(this.h,a).then(function(b){Zx("att_frr");return b})};function Zy(){var a,b,c;return B(function(d){if(d.h==1)return a=Et().resolve(my),a?d.yield(fy(a),2):(Vu(Error("InnertubeTransportService unavailable in fetchDatasyncIds")),d.return(void 0));if(b=d.i){if(b.errorMetadata)return Vu(Error("Datasync IDs fetch responded with "+b.errorMetadata.status+": "+b.error)),d.return(void 0);c=b.Fh;return d.return(c)}Vu(Error("Network request to get Datasync IDs failed."));return d.return(void 0)})}
;function $y(){}
v($y,ex);$y.prototype.j=function(){return Tv};
$y.prototype.i=function(a){return cu(a,ym)};
$y.prototype.h=function(a,b){b.undoToken&&(a.feedbackTokens=[b.undoToken]);b.isUndoTokenUnencrypted&&(a.isFeedbackTokenUnencrypted=b.isUndoTokenUnencrypted)};
ea.Object.defineProperties($y.prototype,{o:{configurable:!0,enumerable:!0,get:function(){return!0}}});function az(){var a=a===void 0?Xu:a;var b=b===void 0?{}:b;E("yt.logging.errors.log",Uu);Tu();In(Hn(),b);window.onerror=a;Ni=Wu;window.addEventListener("unhandledrejection",function(c){if(c.reason instanceof Error){var d=c.reason;Yu(d,{source:"unhandledrejection"});d.name==="AbortError"&&(d.level="WARNING")}Wu(c.reason);c.preventDefault()})}
;function bz(){var a;return(a=R("WEB_PLAYER_CONTEXT_CONFIGS"))==null?void 0:a.WEB_PLAYER_CONTEXT_CONFIG_ID_EMBEDDED_PLAYER}
;var cz=D.caches,dz;function ez(a){var b=a.indexOf(":");return b===-1?{Gd:a}:{Gd:a.substring(0,b),datasyncId:a.substring(b+1)}}
function fz(){return B(function(a){if(dz!==void 0)return a.return(dz);dz=new Promise(function(b){var c;return B(function(d){switch(d.h){case 1:return wa(d,2),d.yield(cz.open("test-only"),4);case 4:return d.yield(cz.delete("test-only"),5);case 5:xa(d,3);break;case 2:if(c=ya(d),c instanceof Error&&c.name==="SecurityError")return b(!1),d.return();case 3:b("caches"in window),d.h=0}})});
return a.return(dz)})}
function gz(a){var b,c,d,e,f,g,h;B(function(k){if(k.h==1)return k.yield(fz(),2);if(k.h!=3){if(!k.i)return k.return(!1);b=[];return k.yield(cz.keys(),3)}c=k.i;d=y(c);for(e=d.next();!e.done;e=d.next())f=e.value,g=ez(f),h=g.datasyncId,!h||a.includes(h)||b.push(cz.delete(f));return k.return(Promise.all(b).then(function(l){return l.some(function(m){return m})}))})}
function hz(){var a,b,c,d,e,f,g;return B(function(h){if(h.h==1)return h.yield(fz(),2);if(h.h!=3){if(!h.i)return h.return(!1);a=no("cache contains other");return h.yield(cz.keys(),3)}b=h.i;c=y(b);for(d=c.next();!d.done;d=c.next())if(e=d.value,f=ez(e),(g=f.datasyncId)&&g!==a)return h.return(!0);return h.return(!1)})}
;function iz(){try{return!!self.sessionStorage}catch(a){return!1}}
;function jz(a){a=a.match(/(.*)::.*::.*/);if(a!==null)return a[1]}
function kz(a){if(iz()){var b=Object.keys(window.sessionStorage);b=y(b);for(var c=b.next();!c.done;c=b.next()){c=c.value;var d=jz(c);d===void 0||a.includes(d)||self.sessionStorage.removeItem(c)}}}
function lz(){if(!iz())return!1;var a=no(),b=Object.keys(window.sessionStorage);b=y(b);for(var c=b.next();!c.done;c=b.next())if(c=jz(c.value),c!==void 0&&c!==a)return!0;return!1}
;function mz(){Zy().then(function(a){a&&(tq(a),gz(a),Fw(a),kz(a))})}
function nz(){var a=new Cs;Xj.pa(function(){var b,c,d,e,f;return B(function(g){switch(g.h){case 1:if(S("ytidb_clear_optimizations_killswitch")){g.B(2);break}b=no("clear");if(b.startsWith("V")&&b.endsWith("||")){var h=[b];tq(h);gz(h);Fw(h);kz(h);return g.return()}c=Gw();d=lz();return g.yield(hz(),3);case 3:return e=g.i,g.yield(uq(),4);case 4:if(f=g.i,!(c||d||e||f))return g.return();case 2:a.ta()?mz():bi(a,"publicytnetworkstatus-online",mz),g.h=0}})})}
;var oz=["www.youtube-nocookie.com","www.youtubeeducation.com","youtube.googleapis.com"];function pz(){this.state=1;this.vm=null;this.h=void 0}
p=pz.prototype;p.initialize=function(a,b,c,d){this.h=d;if(a.program){var e;d=(e=a.interpreterUrl)!=null?e:null;if(a.interpreterSafeScript)e=em(a.interpreterSafeScript);else{var f;e=(f=a.interpreterScript)!=null?f:null}a.interpreterSafeUrl&&(d=fm(a.interpreterSafeUrl).toString());qz(this,e,d,a.program,b,c)}else Vu(Error("BL:CIP"))};
function qz(a,b,c,d,e,f){var g=g===void 0?"trayride":g;c?(a.state=2,$v(gm(c),function(){window[g]?rz(a,d,g,e):(a.state=3,bw(c),Vu(new T("BL:ULB",""+c)))},f)):b?(f=Ig("SCRIPT"),b instanceof Eb?(f.textContent=Gb(b),Hb(f)):f.textContent=b,f.nonce=Db(document),document.head.appendChild(f),document.head.removeChild(f),window[g]?rz(a,d,g,e):(a.state=4,Vu(new T("BL:ULBJ")))):Vu(new T("BL:ULV"))}
p.isLoading=function(){return this.state===2};
function rz(a,b,c,d){a.state=5;var e=!!a.h&&oz.includes(ic(a.h)||"");try{var f=new Bj({program:b,globalName:c,Dd:{disable:!S("att_web_record_metrics")||!S("att_skip_metrics_for_cookieless_domains_ks")&&e,Da:"aGIf"}});f.hd.then(function(){a.state=6;d&&d(b)});
a.gd(f)}catch(g){a.state=7,g instanceof Error&&Vu(g)}}
p.invoke=function(a){a=a===void 0?{}:a;return this.od()?this.Td({Pb:a}):null};
p.dispose=function(){this.gd(null);this.state=8};
p.od=function(){return!!this.vm};
p.Td=function(a){return this.vm.Od(a)};
p.gd=function(a){vc(this.vm);this.vm=a};function sz(){var a=F("yt.abuse.playerAttLoader");return a&&["bgvma","bgvmb","bgvmc"].every(function(b){return b in a})?a:null}
;function tz(){pz.apply(this,arguments)}
v(tz,pz);tz.prototype.gd=function(a){var b;(b=sz())==null||b.bgvma();a?(b={bgvma:a.dispose.bind(a),bgvmb:a.snapshot.bind(a),bgvmc:a.Od.bind(a)},E("yt.abuse.playerAttLoader",b),E("yt.abuse.playerAttLoaderRun",function(c){return a.snapshot(c)})):(E("yt.abuse.playerAttLoader",null),E("yt.abuse.playerAttLoaderRun",null))};
tz.prototype.od=function(){return!!sz()};
tz.prototype.Td=function(a){return sz().bgvmc(a)};var uz=new vt("AUTH_SERVICE_TOKEN");function vz(a){Ot.call(this,a===void 0?"document_active":a);var b=this;this.o=10;this.h=new Map;this.transitions=[{from:"document_active",to:"document_disposed_preventable",action:this.G},{from:"document_active",to:"document_disposed",action:this.u},{from:"document_disposed_preventable",to:"document_disposed",action:this.u},{from:"document_disposed_preventable",to:"flush_logs",action:this.H},{from:"document_disposed_preventable",to:"document_active",action:this.i},{from:"document_disposed",to:"flush_logs",
action:this.H},{from:"document_disposed",to:"document_active",action:this.i},{from:"document_disposed",to:"document_disposed",action:function(){}},
{from:"flush_logs",to:"document_active",action:this.i}];window.addEventListener("pagehide",function(c){b.transition("document_disposed",{event:c})});
window.addEventListener("beforeunload",function(c){b.transition("document_disposed_preventable",{event:c})})}
v(vz,Ot);vz.prototype.G=function(a,b){if(!this.h.get("document_disposed_preventable")){a(b==null?void 0:b.event);var c,d;if((b==null?0:(c=b.event)==null?0:c.defaultPrevented)||(b==null?0:(d=b.event)==null?0:d.returnValue)){b.event.returnValue||(b.event.returnValue=!0);b.event.defaultPrevented||b.event.preventDefault();this.h=new Map;this.transition("document_active");return}}this.h.set("document_disposed_preventable",!0);this.h.get("document_disposed")?this.transition("flush_logs"):this.transition("document_disposed")};
vz.prototype.u=function(a,b){this.h.get("document_disposed")?this.transition("document_active"):(a(b==null?void 0:b.event),this.h.set("document_disposed",!0),this.transition("flush_logs"))};
vz.prototype.H=function(a,b){a(b==null?void 0:b.event);this.transition("document_active")};
vz.prototype.i=function(){this.h=new Map};function wz(a){Ot.call(this,a===void 0?"document_visibility_unknown":a);var b=this;this.transitions=[{from:"document_visibility_unknown",to:"document_visible",action:this.i},{from:"document_visibility_unknown",to:"document_hidden",action:this.h},{from:"document_visibility_unknown",to:"document_foregrounded",action:this.H},{from:"document_visibility_unknown",to:"document_backgrounded",action:this.u},{from:"document_visible",to:"document_hidden",action:this.h},{from:"document_visible",to:"document_foregrounded",
action:this.H},{from:"document_visible",to:"document_visible",action:this.i},{from:"document_foregrounded",to:"document_visible",action:this.i},{from:"document_foregrounded",to:"document_hidden",action:this.h},{from:"document_foregrounded",to:"document_foregrounded",action:this.H},{from:"document_hidden",to:"document_visible",action:this.i},{from:"document_hidden",to:"document_backgrounded",action:this.u},{from:"document_hidden",to:"document_hidden",action:this.h},{from:"document_backgrounded",to:"document_hidden",
action:this.h},{from:"document_backgrounded",to:"document_backgrounded",action:this.u},{from:"document_backgrounded",to:"document_visible",action:this.i}];document.addEventListener("visibilitychange",function(c){document.visibilityState==="visible"?b.transition("document_visible",{event:c}):b.transition("document_hidden",{event:c})});
S("visibility_lifecycles_dynamic_backgrounding")&&(window.addEventListener("blur",function(c){b.transition("document_backgrounded",{event:c})}),window.addEventListener("focus",function(c){b.transition("document_foregrounded",{event:c})}))}
v(wz,Ot);wz.prototype.i=function(a,b){a(b==null?void 0:b.event);S("visibility_lifecycles_dynamic_backgrounding")&&this.transition("document_foregrounded")};
wz.prototype.h=function(a,b){a(b==null?void 0:b.event);S("visibility_lifecycles_dynamic_backgrounding")&&this.transition("document_backgrounded")};
wz.prototype.u=function(a,b){a(b==null?void 0:b.event)};
wz.prototype.H=function(a,b){a(b==null?void 0:b.event)};function xz(){this.o=new vz;this.u=new wz}
xz.prototype.install=function(){var a=C.apply(0,arguments),b=this;a.forEach(function(c){b.o.install(c)});
a.forEach(function(c){b.u.install(c)})};function yz(){this.o=[];this.i=new Map;this.h=new Map;this.j=new Set}
yz.prototype.clickCommand=function(a,b,c){var d=a.clickTrackingParams;c=c===void 0?0:c;if(d)if(c=nv(c===void 0?0:c)){a=this.client;d=new gv({trackingParams:d});var e=void 0;if(S("no_client_ve_attach_unless_shown")){var f=Aw(d,c);ww.set(f,!0);Bw(d,c)}e=e||"INTERACTION_LOGGING_GESTURE_TYPE_GENERIC_CLICK";f=zw({cttAuthInfo:pv(c)||void 0},c);d={csn:c,ve:d.getAsJson(),gestureType:e};b&&(d.clientData=b);c==="UNDEFINED_CSN"?Cw("visualElementGestured",f,d):a?Lu("visualElementGestured",d,a,f):ep("visualElementGestured",
d,f);b=!0}else b=!1;else b=!1;return b};
yz.prototype.stateChanged=function(a,b,c){this.visualElementStateChanged(new gv({trackingParams:a}),b,c===void 0?0:c)};
yz.prototype.visualElementStateChanged=function(a,b,c){c=c===void 0?0:c;if(c===0&&this.j.has(c))this.o.push([a,b]);else{var d=c;d=d===void 0?0:d;c=nv(d);a||(a=(a=kv(d===void 0?0:d))?new gv({veType:a,youtubeData:void 0,jspbYoutubeData:void 0}):null);var e=a;c&&e&&(a=this.client,d=zw({cttAuthInfo:pv(c)||void 0},c),b={csn:c,ve:e.getAsJson(),clientData:b},c==="UNDEFINED_CSN"?Cw("visualElementStateChanged",d,b):a?Lu("visualElementStateChanged",b,a,d):ep("visualElementStateChanged",b,d))}};
function zz(a,b){if(b===void 0)for(var c=mv(),d=0;d<c.length;d++)c[d]!==void 0&&zz(a,c[d]);else a.i.forEach(function(e,f){(f=a.h.get(f))&&yw(a.client,b,f,e)}),a.i.clear(),a.h.clear()}
;function Az(){xz.call(this);var a={};this.install((a.document_disposed={callback:this.h},a));S("combine_ve_grafts")&&(a={},this.install((a.document_disposed={callback:this.i},a)));a={};this.install((a.flush_logs={callback:this.j},a));S("web_log_cfg_cee_ks")||po(Bz)}
v(Az,xz);Az.prototype.j=function(){ep("finalPayload",{csn:nv()})};
Az.prototype.h=function(){av(bv)};
Az.prototype.i=function(){var a=zz;yz.instance||(yz.instance=new yz);a(yz.instance)};
function Bz(){var a=R("CLIENT_EXPERIMENT_EVENTS");if(a){var b=he();a=y(a);for(var c=a.next();!c.done;c=a.next())c=c.value,b(c)&&ep("genericClientExperimentEvent",{eventType:c});delete Im.CLIENT_EXPERIMENT_EVENTS}}
;function Cz(){}
function Dz(){var a=F("ytglobal.storage_");a||(a=new Cz,E("ytglobal.storage_",a));return a}
Cz.prototype.estimate=function(){var a,b,c;return B(function(d){a=navigator;return((b=a.storage)==null?0:b.estimate)?d.return(a.storage.estimate()):((c=a.webkitTemporaryStorage)==null?0:c.queryUsageAndQuota)?d.return(Ez()):d.return()})};
function Ez(){var a=navigator;return new Promise(function(b,c){var d;(d=a.webkitTemporaryStorage)!=null&&d.queryUsageAndQuota?a.webkitTemporaryStorage.queryUsageAndQuota(function(e,f){b({usage:e,quota:f})},function(e){c(e)}):c(Error("webkitTemporaryStorage is not supported."))})}
E("ytglobal.storageClass_",Cz);function cp(a,b){var c=this;this.handleError=a;this.h=b;this.i=!1;self.document===void 0||self.addEventListener("beforeunload",function(){c.i=!0});
this.j=Math.random()<=.2}
cp.prototype.Ha=function(a){this.handleError(a)};
cp.prototype.logEvent=function(a,b){switch(a){case "IDB_DATA_CORRUPTED":S("idb_data_corrupted_killswitch")||this.h("idbDataCorrupted",b);break;case "IDB_UNEXPECTEDLY_CLOSED":this.h("idbUnexpectedlyClosed",b);break;case "IS_SUPPORTED_COMPLETED":S("idb_is_supported_completed_killswitch")||this.h("idbIsSupportedCompleted",b);break;case "QUOTA_EXCEEDED":Fz(this,b);break;case "TRANSACTION_ENDED":this.j&&Math.random()<=.1&&this.h("idbTransactionEnded",b);break;case "TRANSACTION_UNEXPECTEDLY_ABORTED":a=
Object.assign({},b,{hasWindowUnloaded:this.i}),this.h("idbTransactionAborted",a)}};
function Fz(a,b){Dz().estimate().then(function(c){c=Object.assign({},b,{isSw:self.document===void 0,isIframe:self!==self.top,deviceStorageUsageMbytes:Gz(c==null?void 0:c.usage),deviceStorageQuotaMbytes:Gz(c==null?void 0:c.quota)});a.h("idbQuotaExceeded",c)})}
function Gz(a){return typeof a==="undefined"?"-1":String(Math.ceil(a/1048576))}
;var Hz={Lc:{feedbackEndpoint:$w(ry),modifyChannelNotificationPreferenceEndpoint:$w(sy),playlistEditEndpoint:$w(ty),shareEntityEndpoint:$w(qy),subscribeEndpoint:$w(ny),undoFeedbackEndpoint:$w($y),unsubscribeEndpoint:$w(oy),webPlayerShareEntityServiceEndpoint:$w(uy)}};function Iz(){var a=Et();At(a,{pb:Dy,Ic:By});At(a,{pb:uz,Ic:Rn});var b=Vw(),c=a.resolve(uz),d=a.resolve(Dy),e={};b&&(e.client_location=b);ey(Hz,d,c,e);At(a,{pb:my,nd:dy.instance})}
;var Jz={},Kz=(Jz["api.invalidparam"]=2,Jz.auth=150,Jz["drm.auth"]=150,Jz["heartbeat.net"]=150,Jz["heartbeat.servererror"]=150,Jz["heartbeat.stop"]=150,Jz["html5.unsupportedads"]=5,Jz["fmt.noneavailable"]=5,Jz["fmt.decode"]=5,Jz["fmt.unplayable"]=5,Jz["html5.missingapi"]=5,Jz["html5.unsupportedlive"]=5,Jz["drm.unavailable"]=5,Jz["mrm.blocked"]=151,Jz["embedder.identity.denied"]=152,Jz["embedder.identity.missing.referrer"]=153,Jz);var Lz=new Set("endSeconds startSeconds mediaContentUrl suggestedQuality videoId rct rctn playmuted muted_autoplay_duration_mode".split(" "));function Mz(a){return(a.search("cue")===0||a.search("load")===0)&&a!=="loadModule"}
function Nz(a,b,c){if(typeof a==="string")return{videoId:a,startSeconds:b,suggestedQuality:c};b={};c=y(Lz);for(var d=c.next();!d.done;d=c.next())d=d.value,a[d]&&(b[d]=a[d]);if(a=a.embedConfig||a.embed_config)if(typeof a==="string")b.embed_config=a;else if(Ma(a))try{var e=JSON.stringify(a);b.embed_config=e}catch(f){console.error("Invalid embedConfig JSON",f)}return b}
function Oz(a,b,c,d){if(Ma(a)&&!Array.isArray(a)){b="playlist list listType index startSeconds suggestedQuality".split(" ");c={};for(d=0;d<b.length;d++){var e=b[d];a[e]&&(c[e]=a[e])}return c}b={index:b,startSeconds:c,suggestedQuality:d};typeof a==="string"&&a.length===16?b.list="PL"+a:b.playlist=a;return b}
;function Pz(a,b){I.call(this);var c=this;this.api=a;this.A=this.G=!1;this.M=[];this.U={};this.j=[];this.i=[];this.Z=!1;this.sessionId=this.h=null;this.targetOrigin="*";this.Y=S("web_player_split_event_bus_iframe");this.u=R("POST_MESSAGE_ORIGIN")||document.location.protocol+"//"+document.location.hostname;this.o=function(d){c.onMessage(d)};
Qz.addEventListener("message",this.o);if(a=R("WIDGET_ID"))this.sessionId=a;b&&this.o(b);Rz(this,"onReady",function(){c.G=!0;var d=c.api.getVideoData();if(!d.isPlayable){c.Z=!0;d=d.errorCode;var e=e===void 0?5:e;c.errorCode=d?Kz[d]||e:e;c.sendMessage("onError",Number(c.errorCode))}Sz(c)});
Rz(this,"onVideoProgress",this.pf.bind(this));Rz(this,"onVolumeChange",this.qf.bind(this));Rz(this,"onApiChange",this.gf.bind(this));Rz(this,"onPlaybackQualityChange",this.lf.bind(this));Rz(this,"onPlaybackRateChange",this.mf.bind(this));Rz(this,"onStateChange",this.nf.bind(this));Rz(this,"onWebglSettingsChanged",this.rf.bind(this));Rz(this,"onCaptionsTrackListChanged",this.hf.bind(this));Rz(this,"captionssettingschanged",this.jf.bind(this))}
v(Pz,I);function Sz(a){if(a.G&&a.h&&!a.A){a.A=!0;a.G=!1;a.sendMessage("initialDelivery",Tz(a));a.sendMessage("onReady");Vx("ep_init_ar");for(var b=y(a.M),c=b.next();!c.done;c=b.next())Uz(a,c.value);a.M=[]}}
function Vz(a,b){a.sendMessage("infoDelivery",b)}
p=Pz.prototype;p.sendMessage=function(a,b){a={event:a,info:b===void 0?null:b};this.A?Uz(this,a):this.M.push(a)};
function Wz(a,b,c){return function(d){b==="onError"?a.api.logApiCall(b+" invocation",c,d):a.api.logApiCall(b+" invocation",c);a.sendMessage(b,d)}}
function Rz(a,b,c){a.j.push({eventType:b,listener:c});a.api.addEventListener(b,c)}
function Tz(a){if(!a.api)return null;var b=a.api.getApiInterface();Vb(b,"getVideoData");for(var c={apiInterface:b},d=0,e=b.length;d<e;d++){var f=b[d];if(f.search("get")===0||f.search("is")===0){var g=0;f.search("get")===0?g=3:f.search("is")===0&&(g=2);g=f.charAt(g).toLowerCase()+f.substring(g+1);try{var h=a.api[f]();c[g]=h}catch(k){}}}c.videoData=a.api.getVideoData();c.currentTimeLastUpdated_=Date.now()/1E3;return c}
p.nf=function(a){a={playerState:a,currentTime:this.api.getCurrentTime(),duration:this.api.getDuration(),videoData:this.api.getVideoData(),videoStartBytes:0,videoBytesTotal:this.api.getVideoBytesTotal(),videoLoadedFraction:this.api.getVideoLoadedFraction(),playbackQuality:this.api.getPlaybackQuality(),availableQualityLevels:this.api.getAvailableQualityLevels(),currentTimeLastUpdated_:Date.now()/1E3,playbackRate:this.api.getPlaybackRate(),mediaReferenceTime:this.api.getMediaReferenceTime()};this.api.getVideoUrl&&
(a.videoUrl=this.api.getVideoUrl());this.api.getVideoContentRect&&(a.videoContentRect=this.api.getVideoContentRect());this.api.getProgressState&&(a.progressState=this.api.getProgressState());this.api.getPlaylist&&(a.playlist=this.api.getPlaylist());this.api.getPlaylistIndex&&(a.playlistIndex=this.api.getPlaylistIndex());Vz(this,a)};
p.lf=function(a){a={playbackQuality:a};this.api.getAvailableQualityLevels&&(a.availableQualityLevels=this.api.getAvailableQualityLevels());this.api.getPreferredQuality&&(a.preferredQuality=this.api.getPreferredQuality());Vz(this,a)};
p.mf=function(a){Vz(this,{playbackRate:a})};
p.gf=function(){for(var a=this.api.getOptions(),b={namespaces:a},c=0,d=a.length;c<d;c++){var e=a[c],f=this.api.getOptions(e);a.join(", ");b[e]={options:f};for(var g=0,h=f.length;g<h;g++){var k=f[g],l=this.api.getOption(e,k);b[e][k]=l}}this.sendMessage("apiInfoDelivery",b)};
p.qf=function(){Vz(this,{muted:this.api.isMuted(),volume:this.api.getVolume()})};
p.pf=function(a){a={currentTime:a,videoBytesLoaded:this.api.getVideoBytesLoaded(),videoLoadedFraction:this.api.getVideoLoadedFraction(),currentTimeLastUpdated_:Date.now()/1E3,playbackRate:this.api.getPlaybackRate(),mediaReferenceTime:this.api.getMediaReferenceTime()};this.api.getProgressState&&(a.progressState=this.api.getProgressState());Vz(this,a)};
p.rf=function(){Vz(this,{sphericalProperties:this.api.getSphericalProperties()})};
p.hf=function(){if(this.api.getCaptionTracks){var a={captionTracks:this.api.getCaptionTracks()};Vz(this,a)}};
p.jf=function(){if(this.api.getSubtitlesUserSettings){var a={subtitlesUserSettings:this.api.getSubtitlesUserSettings()};Vz(this,a)}};
p.onMessage=function(a){if(!(this.u!=="*"&&a.origin!==this.u||this.h&&a.source!==this.h||typeof a.data!=="string")){try{var b=JSON.parse(a.data)}catch(f){return}if(b)switch(b.event){case "listening":var c=a.source;a=a.origin;b=b.id;a!=="null"&&(this.u=this.targetOrigin=a);this.h=c;this.sessionId=b;Sz(this);break;case "command":if(c=b.func,b=b.args,c==="addEventListener"&&b)c=b[0],b=a.origin,c==="onReady"?this.api.logApiCall(c+" invocation",b):c==="onError"&&this.Z&&(this.api.logApiCall(c+" invocation",
b,this.errorCode),this.errorCode=void 0),this.api.logApiCall(c+" registration",b),this.U[c]||c==="onReady"||(a=Wz(this,c,b),this.i.push({eventType:c,listener:a,origin:b}),this.Y?this.api.handleExternalCall("addEventListener",[c,a],b):this.api.addEventListener(c,a),this.U[c]=!0);else if(a=a.origin,this.api.isExternalMethodAvailable(c,a)){b=b||[];if(b.length>0&&Mz(c)){var d=b;if(Ma(d[0])&&!Array.isArray(d[0]))var e=d[0];else switch(e={},c){case "loadVideoById":case "cueVideoById":e=Nz(d[0],d[1]!==void 0?
Number(d[1]):void 0,d[2]);break;case "loadVideoByUrl":case "cueVideoByUrl":e=d[0];typeof e==="string"&&(e={mediaContentUrl:e,startSeconds:d[1]!==void 0?Number(d[1]):void 0,suggestedQuality:d[2]});b:{if((d=e.mediaContentUrl)&&(d=/\/([ve]|embed)\/([^#?]+)/.exec(d))&&d[2]){d=d[2];break b}d=null}e.videoId=d;e=Nz(e);break;case "loadPlaylist":case "cuePlaylist":e=Oz(d[0],d[1],d[2],d[3])}b.length=1;b[0]=e}this.api.handleExternalCall(c,b,a);Mz(c)&&Vz(this,Tz(this))}}}};
function Uz(a,b){if(a.h){b.channel="widget";a.sessionId&&(b.id=a.sessionId);try{var c=JSON.stringify(b);a.h.postMessage(c,a.targetOrigin)}catch(d){Vu(d)}}}
p.ba=function(){I.prototype.ba.call(this);Qz.removeEventListener("message",this.o);for(var a=0;a<this.j.length;a++){var b=this.j[a];this.api.removeEventListener(b.eventType,b.listener)}this.j=[];for(a=0;a<this.i.length;a++)b=this.i[a],this.Y?this.api.handleExternalCall("removeEventListener",[b.eventType,b.listener],b.origin):this.api.removeEventListener(b.eventType,b.listener);this.i=[]};
var Qz=window;function Xz(a,b,c){I.call(this);var d=this;this.api=a;this.id=b;this.origin=c;this.h={};this.j=S("web_player_split_event_bus_iframe");this.i=function(e){d.onMessage(e)};
Yz.addEventListener("message",this.i);Zz(this,"RECEIVING")}
v(Xz,I);p=Xz.prototype;p.addListener=function(a,b){if(!(a in this.h)){var c=this.kf.bind(this,a);this.h[a]=c;this.addEventListener(a,c,b)}};
p.kf=function(a,b){this.ea||Zz(this,a,$z(a,b))};
p.removeListener=function(a,b){a in this.h&&(this.removeEventListener(a,this.h[a],b),delete this.h[a])};
p.addEventListener=function(a,b,c){this.j?a==="onReady"?this.api.addEventListener(a,b):this.api.handleExternalCall("addEventListener",[a,b],c||null):this.api.addEventListener(a,b)};
p.removeEventListener=function(a,b,c){this.j?a==="onReady"?this.api.removeEventListener(a,b):this.api.handleExternalCall("removeEventListener",[a,b],c||null):this.api.removeEventListener(a,b)};
function aA(a,b){switch(a){case "loadVideoById":return[Nz(b)];case "cueVideoById":return[Nz(b)];case "loadVideoByPlayerVars":return[b];case "cueVideoByPlayerVars":return[b];case "loadPlaylist":return[Oz(b)];case "cuePlaylist":return[Oz(b)];case "seekTo":return[b.seconds,b.allowSeekAhead];case "playVideoAt":return[b.index];case "setVolume":return[b.volume];case "setPlaybackQuality":return[b.suggestedQuality];case "setPlaybackRate":return[b.suggestedRate];case "setLoop":return[b.loopPlaylists];case "setShuffle":return[b.shufflePlaylist];
case "getOptions":return[b.module];case "getOption":return[b.module,b.option];case "setOption":return[b.module,b.option,b.value];case "handleGlobalKeyDown":return[b.keyCode,b.shiftKey,b.ctrlKey,b.altKey,b.metaKey,b.key,b.code]}return[]}
function bA(a,b){switch(a){case "isMuted":return{muted:b};case "getVolume":return{volume:b};case "getPlaybackRate":return{playbackRate:b};case "getAvailablePlaybackRates":return{availablePlaybackRates:b};case "getVideoLoadedFraction":return{videoLoadedFraction:b};case "getPlayerState":return{playerState:b};case "getCurrentTime":return{currentTime:b};case "getPlaybackQuality":return{playbackQuality:b};case "getAvailableQualityLevels":return{availableQualityLevels:b};case "getDuration":return{duration:b};
case "getVideoUrl":return{videoUrl:b};case "getVideoEmbedCode":return{videoEmbedCode:b};case "getPlaylist":return{playlist:b};case "getPlaylistIndex":return{playlistIndex:b};case "getOptions":return{options:b};case "getOption":return{option:b}}}
function $z(a,b){switch(a){case "onReady":return;case "onStateChange":return{playerState:b};case "onPlaybackQualityChange":return{playbackQuality:b};case "onPlaybackRateChange":return{playbackRate:b};case "onError":return{errorCode:b}}if(b!=null)return{value:b}}
function Zz(a,b,c){a.ea||(b={id:a.id,command:b},c&&(b.data=c),cA.postMessage(JSON.stringify(b),a.origin))}
p.onMessage=function(a){if(a.origin===this.origin){var b=a.data;if(typeof b==="string"){try{b=JSON.parse(b)}catch(e){return}if(b.command){var c=b.command;b=b.data;a=a.origin;if(!this.ea){var d=b||{};switch(c){case "addEventListener":typeof d.event==="string"&&this.addListener(d.event,a);break;case "removeEventListener":typeof d.event==="string"&&this.removeListener(d.event,a);break;default:this.api.isReady()&&this.api.isExternalMethodAvailable(c,a||null)&&(b=aA(c,b||{}),b=this.api.handleExternalCall(c,
b,a||null),(b=bA(c,b))&&Zz(this,c,b))}}}}}};
p.ba=function(){Yz.removeEventListener("message",this.i);for(var a in this.h)this.h.hasOwnProperty(a)&&this.removeListener(a);I.prototype.ba.call(this)};
var Yz=window,cA=window.parent;var dA=new tz;function eA(){return dA.od()}
function fA(a){a=a===void 0?{}:a;return dA.invoke(a)}
;function gA(a,b,c,d,e){I.call(this);var f=this;this.A=b;this.webPlayerContextConfig=d;this.Kb=e;this.Qa=!1;this.api={};this.ma=this.u=null;this.U=new N;this.h={};this.Z=this.xa=this.elementId=this.Ra=this.config=null;this.Y=!1;this.j=this.G=null;this.Fa={};this.Jc=["onReady"];this.lastError=null;this.fb=NaN;this.M={};this.ha=0;this.i=this.o=a;xc(this,this.U);hA(this);c?this.ha=setTimeout(function(){f.loadNewVideoConfig(c)},0):d&&(iA(this),jA(this))}
v(gA,I);p=gA.prototype;p.getId=function(){return this.A};
p.loadNewVideoConfig=function(a){if(!this.ea){this.ha&&(clearTimeout(this.ha),this.ha=0);var b=a||{};b instanceof Pv||(b=new Pv(b));this.config=b;this.setConfig(a);jA(this);this.isReady()&&kA(this)}};
function iA(a){var b;a.webPlayerContextConfig?b=a.webPlayerContextConfig.rootElementId:b=a.config.attrs.id;a.elementId=b||a.elementId;a.elementId==="video-player"&&(a.elementId=a.A,a.webPlayerContextConfig?a.webPlayerContextConfig.rootElementId=a.A:a.config.attrs.id=a.A);var c;((c=a.i)==null?void 0:c.id)===a.elementId&&(a.elementId+="-player",a.webPlayerContextConfig?a.webPlayerContextConfig.rootElementId=a.elementId:a.config.attrs.id=a.elementId)}
p.setConfig=function(a){this.Ra=a;this.config=lA(a);iA(this);if(!this.xa){var b;this.xa=mA(this,((b=this.config.args)==null?void 0:b.jsapicallback)||"onYouTubePlayerReady")}this.config.args?this.config.args.jsapicallback=null:this.config.args={jsapicallback:null};var c;if((c=this.config)==null?0:c.attrs)a=this.config.attrs,(b=a.width)&&this.i&&(this.i.style.width=Rj(Number(b)||b)),(a=a.height)&&this.i&&(this.i.style.height=Rj(Number(a)||a))};
function kA(a){if(a.config&&a.config.loaded!==!0)if(a.config.loaded=!0,!a.config.args||a.config.args.autoplay!=="0"&&a.config.args.autoplay!==0&&a.config.args.autoplay!==!1){var b;a.api.loadVideoByPlayerVars((b=a.config.args)!=null?b:null)}else a.api.cueVideoByPlayerVars(a.config.args)}
function nA(a){var b=!0,c=oA(a);c&&a.config&&(b=c.dataset.version===pA(a));return b&&!!F("yt.player.Application.create")}
function jA(a){if(!a.ea&&!a.Y){var b=nA(a);if(b&&(oA(a)?"html5":null)==="html5")a.Z="html5",a.isReady()||qA(a);else if(rA(a),a.Z="html5",b&&a.j&&a.o)a.o.appendChild(a.j),qA(a);else{a.config&&(a.config.loaded=!0);var c=!1;a.G=function(){c=!0;var d=sA(a,"player_bootstrap_method")?F("yt.player.Application.createAlternate")||F("yt.player.Application.create"):F("yt.player.Application.create");var e=a.config?lA(a.config):void 0;d&&d(a.o,e,a.webPlayerContextConfig,a.Kb);qA(a)};
a.Y=!0;b?a.G():($v(pA(a),a.G),(b=tA(a))&&gw(b||""),uA(a)&&!c&&E("yt.player.Application.create",null))}}}
function oA(a){var b=Hg(a.elementId);!b&&a.i&&a.i.querySelector&&(b=a.i.querySelector("#"+a.elementId));return b}
function qA(a){if(!a.ea){var b=oA(a),c=!1;b&&b.getApiInterface&&b.getApiInterface()&&(c=!0);if(c){a.Y=!1;if(!sA(a,"html5_remove_not_servable_check_killswitch")){var d;if((b==null?0:b.isNotServable)&&a.config&&(b==null?0:b.isNotServable((d=a.config.args)==null?void 0:d.video_id)))return}vA(a)}else a.fb=setTimeout(function(){qA(a)},50)}}
function vA(a){hA(a);a.Qa=!0;var b=oA(a);if(b){a.u=wA(a,b,"addEventListener");a.ma=wA(a,b,"removeEventListener");var c=b.getApiInterface();c=c.concat(b.getInternalApiInterface());for(var d=a.api,e=0;e<c.length;e++){var f=c[e];d[f]||(d[f]=wA(a,b,f))}}for(var g in a.h)a.h.hasOwnProperty(g)&&a.u&&a.u(g,a.h[g]);kA(a);a.xa&&a.xa(a.api);a.U.sb("onReady",a.api)}
function wA(a,b,c){var d=b[c];return function(){var e=C.apply(0,arguments);try{return a.lastError=null,d.apply(b,e)}catch(f){if(c!=="sendAbandonmentPing")throw f.params=c,a.lastError=f,e=new T("PlayerProxy error in method call",{error:f,method:c,playerId:a.A}),e.level="WARNING",e;}}}
function hA(a){a.Qa=!1;if(a.ma)for(var b in a.h)a.h.hasOwnProperty(b)&&a.ma(b,a.h[b]);for(var c in a.M)a.M.hasOwnProperty(c)&&clearTimeout(Number(c));a.M={};a.u=null;a.ma=null;b=a.api;for(var d in b)b.hasOwnProperty(d)&&(b[d]=null);b.addEventListener=function(e,f){a.addEventListener(e,f)};
b.removeEventListener=function(e,f){a.removeEventListener(e,f)};
b.destroy=function(){a.dispose()};
b.getLastError=function(){return a.getLastError()};
b.getPlayerType=function(){return a.getPlayerType()};
b.getCurrentVideoConfig=function(){return a.Ra};
b.loadNewVideoConfig=function(e){a.loadNewVideoConfig(e)};
b.isReady=function(){return a.isReady()}}
p.isReady=function(){return this.Qa};
p.addEventListener=function(a,b){var c=this,d=mA(this,b);d&&(Ob(this.Jc,a)>=0||this.h[a]||(b=xA(this,a),this.u&&this.u(a,b)),this.U.subscribe(a,d),a==="onReady"&&this.isReady()&&setTimeout(function(){d(c.api)},0))};
p.removeEventListener=function(a,b){this.ea||(b=mA(this,b))&&this.U.unsubscribe(a,b)};
function mA(a,b){var c=b;if(typeof b==="string"){if(a.Fa[b])return a.Fa[b];c=function(){var d=C.apply(0,arguments),e=F(b);if(e)try{e.apply(D,d)}catch(f){throw d=new T("PlayerProxy error when executing callback",{error:f}),d.level="ERROR",d;}};
a.Fa[b]=c}return c?c:null}
function xA(a,b){function c(d){function e(){if(!a.ea)try{a.U.sb(b,d!=null?d:void 0)}catch(h){var g=new T("PlayerProxy error when creating global callback",{error:h.message,event:b,playerId:a.A,data:d,originalStack:h.stack,componentStack:h.ke});g.level="WARNING";throw g;}}
if(sA(a,"web_player_publish_events_immediately"))e();else{var f=setTimeout(function(){e();var g=a.M,h=String(f);h in g&&delete g[h]},0);
yg(a.M,String(f))}}
return a.h[b]=c}
p.getPlayerType=function(){return this.Z||(oA(this)?"html5":null)};
p.getLastError=function(){return this.lastError};
function rA(a){a.cancel();hA(a);a.Z=null;a.config&&(a.config.loaded=!1);var b=oA(a);b&&(nA(a)||!uA(a)?a.j=b:(b&&b.destroy&&b.destroy(),a.j=null));if(a.o)for(a=a.o;b=a.firstChild;)a.removeChild(b)}
p.cancel=function(){this.G&&dw(pA(this),this.G);clearTimeout(this.fb);this.Y=!1};
p.ba=function(){rA(this);if(this.j&&this.config&&this.j.destroy)try{this.j.destroy()}catch(b){var a=new T("PlayerProxy error during disposal",{error:b});a.level="ERROR";throw a;}this.Fa=null;for(a in this.h)this.h.hasOwnProperty(a)&&delete this.h[a];this.Ra=this.config=this.api=null;delete this.o;delete this.i;I.prototype.ba.call(this)};
function uA(a){var b,c;a=(b=a.config)==null?void 0:(c=b.args)==null?void 0:c.fflags;return!!a&&a.indexOf("player_destroy_old_version=true")!==-1}
function pA(a){return a.webPlayerContextConfig?a.webPlayerContextConfig.jsUrl:(a=a.config.assets)?a.js:""}
function tA(a){return a.webPlayerContextConfig?a.webPlayerContextConfig.cssUrl:(a=a.config.assets)?a.css:""}
function sA(a,b){if(a.webPlayerContextConfig)var c=a.webPlayerContextConfig.serializedExperimentFlags;else{var d;if((d=a.config)==null?0:d.args)c=a.config.args.fflags}return(c||"").split("&").includes(b+"=true")}
function lA(a){for(var b={},c=y(Object.keys(a)),d=c.next();!d.done;d=c.next()){d=d.value;var e=a[d];b[d]=typeof e==="object"?Bg(e):e}return b}
;var yA={},zA="player_uid_"+(Math.random()*1E9>>>0);function AA(a,b){var c="player",d=!1;d=d===void 0?!0:d;c=typeof c==="string"?Hg(c):c;var e=zA+"_"+Na(c),f=yA[e];if(f&&d)return BA(a,b)?f.api.loadVideoByPlayerVars(a.args||null):f.loadNewVideoConfig(a),f.api;f=new gA(c,e,a,b,void 0);yA[e]=f;f.addOnDisposeCallback(function(){delete yA[f.getId()]});
return f.api}
function BA(a,b){return b&&b.serializedExperimentFlags?b.serializedExperimentFlags.includes("web_player_remove_playerproxy=true"):a&&a.args&&a.args.fflags?a.args.fflags.includes("web_player_remove_playerproxy=true"):!1}
;var CA=null,DA=null,EA;
function FA(){$x();var a=bo(),b=fo(119),c=window.devicePixelRatio>1;if(document.body&&fk(document.body,"exp-invert-logo"))if(c&&!fk(document.body,"inverted-hdpi")){var d=document.body;if(d.classList)d.classList.add("inverted-hdpi");else if(!fk(d,"inverted-hdpi")){var e=dk(d);ek(d,e+(e.length>0?" inverted-hdpi":"inverted-hdpi"))}}else!c&&fk(document.body,"inverted-hdpi")&&gk();if(b!=c){b="f"+(Math.floor(119/31)+1);d=go(b)||0;d=c?d|67108864:d&-67108865;d===0?delete Zn[b]:(c=d.toString(16),Zn[b]=c.toString());
c=!0;S("web_secure_pref_cookie_killswitch")&&(c=!1);b=a.h;d=[];for(f in Zn)Zn.hasOwnProperty(f)&&d.push(f+"="+encodeURIComponent(String(Zn[f])));var f=d.join("&");Vn(b,f,63072E3,a.i,c)}}
function GA(){HA()}
function IA(){Vx("ep_init_pr");HA()}
function HA(){var a=CA.getVideoData(1);a=a.title?a.title+" - YouTube":"YouTube";document.title!==a&&(document.title=a)}
function JA(){CA&&CA.sendAbandonmentPing&&CA.sendAbandonmentPing();R("PL_ATT")&&dA.dispose();for(var a=Xj,b=0,c=Ky.length;b<c;b++)a.qa(Ky[b]);Ky.length=0;bw(Ly.toString());My=!1;Jm("DCLKSTAT",0);wc(DA);CA&&(CA.removeEventListener("onVideoDataChange",GA),CA.destroy())}
;var KA;S("embeds_no_early_ticks")?KA=V():Vx("ep_init_eps");S("embeds_enable_scheduler")&&To();E("yt.setConfig",Jm);E("yt.config.set",Jm);E("yt.setMsg",Zv);E("yt.msgs.set",Zv);E("yt.logging.errors.log",Uu);
E("writeEmbed",function(){Vx("ep_init_wes");var a=R("PLAYER_CONFIG");if(!a){var b=R("PLAYER_VARS");b&&(a={args:b})}Mw(!0);a.args.ps==="gvn"&&(document.body.style.backgroundColor="transparent");a.attrs||(a.attrs={width:"100%",height:"100%",id:"video-player"});var c=document.referrer;b=R("POST_MESSAGE_ORIGIN");window!==window.top&&c&&c!==document.URL&&(a.args.loaderUrl=c);c=bz();if(!c.serializedForcedExperimentIds){var d=Xm(window.location.href);d.forced_experiments&&(c.serializedForcedExperimentIds=
d.forced_experiments)}var e;((e=a.args)==null?0:e.autoplay)?Rx("watch",["pbs","pbu","pbp"]):a.args&&Bv(a.args)?Rx("video_preview",["ol"]):Rx("embed_no_video",["ep_init_pr"]);CA=AA(a,c);CA.addEventListener("onVideoDataChange",GA);CA.addEventListener("onReady",IA);a=R("POST_MESSAGE_ID","player");R("ENABLE_JS_API")?DA=new Pz(CA,EA):R("ENABLE_POST_API")&&typeof a==="string"&&typeof b==="string"&&(DA=new Xz(CA,a,b));EA=void 0;Ny();S("ytidb_create_logger_embed_killswitch")||bp();a={};Az.h||(Az.h=new Az);
Az.h.install((a.flush_logs={callback:function(){yu()}},a));
Os();if(S("embeds_enable_separate_ITS")){Iz();var f=function(){return dy.instance}}else f=function(){var g,h;
if(!Ey){var k=Et();At(k,{pb:Dy,Ic:By});var l={Lc:{feedbackEndpoint:$w(ry),modifyChannelNotificationPreferenceEndpoint:$w(sy),playlistEditEndpoint:$w(ty),shareEntityEndpoint:$w(qy),subscribeEndpoint:$w(ny),unsubscribeEndpoint:$w(oy),webPlayerShareEntityServiceEndpoint:$w(uy)}},m=Vw(),n={};m&&(n.client_location=m);g===void 0&&(g=Sn());h===void 0&&(h=k.resolve(Dy));ey(l,h,g,n);At(k,{pb:my,nd:dy.instance});Ey=k.resolve(my)}return Ey};
S("ytidb_clear_embedded_player")&&Xj.pa(function(){f();nz()});
S("enable_rta_manager")&&po(function(){var g=new Yy(f());var h={preload:!S("enable_rta_npi"),Ef:S("attmusi")},k=!1;if(typeof h==="boolean")var l={preload:h};else typeof h==="undefined"?l={preload:!0}:(l=h,k=!!h.Gh);h=k?void 0:new Cs;Py.instance=new Py(g,l,h);g=Py.instance;l=g.i.bind(g);E("yt.aba.att",l);g=g.j.bind(g);E("yt.aba.att2",g)});
Vx("ep_init_wee")});
E("yt.abuse.player.botguardInitialized",F("yt.abuse.player.botguardInitialized")||eA);E("yt.abuse.player.invokeBotguard",F("yt.abuse.player.invokeBotguard")||fA);E("yt.abuse.dclkstatus.checkDclkStatus",F("yt.abuse.dclkstatus.checkDclkStatus")||Oy);E("yt.player.exports.navigate",F("yt.player.exports.navigate")||Lw);E("yt.util.activity.init",F("yt.util.activity.init")||ft);E("yt.util.activity.getTimeSinceActive",F("yt.util.activity.getTimeSinceActive")||jt);
E("yt.util.activity.setTimestamp",F("yt.util.activity.setTimestamp")||gt);window.addEventListener("load",Nm(function(){FA()}));
window.addEventListener("pageshow",Nm(function(a){a.persisted||FA()}));
window.addEventListener("pagehide",Nm(function(a){S("embeds_web_enable_dispose_player_if_page_not_cached_killswitch")?JA():a.persisted||JA()}));
S("embeds_enable_contrib_error_handling")?az():(window.onerror=function(a,b,c,d,e){Xu(a,b,c,d,e)},Ni=Wu,window.addEventListener("unhandledrejection",function(a){Wu(a.reason)}),Tu());
(function(){if(S("embeds_enable_early_message_handler")&&R("ENABLE_JS_API")){var a=function(b){EA=b;window.removeEventListener("message",a)};
window.addEventListener("message",a)}})();
S("embeds_no_early_ticks")&&KA&&Vx("ep_init_eps",KA);Vx("ep_init_epe");}).call(this);
