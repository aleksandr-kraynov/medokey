"use strict";(globalThis.webpackChunk_wcAdmin_webpackJsonp=globalThis.webpackChunk_wcAdmin_webpackJsonp||[]).push([[6340],{46838:(e,t,o)=>{o.d(t,{Z:()=>l});var r=o(69307),c=o(65736),n=o(55609),a=o(14812);const l=e=>{let{onCancel:t,onImport:o}=e;return(0,r.createElement)(n.Modal,{className:"woocommerce-products-load-sample-product-confirm-modal",title:(0,c.__)("Load sample products","woocommerce"),onRequestClose:t},(0,r.createElement)(a.Text,{className:"woocommerce-confirmation-modal__message"},(0,c.__)("We'll import images from woocommerce.com to set up your sample products.","woocommerce")),(0,r.createElement)("div",{className:"woocommerce-confirmation-modal-actions"},(0,r.createElement)(n.Button,{isSecondary:!0,onClick:t},(0,c.__)("Cancel","woocommerce")),(0,r.createElement)(n.Button,{isPrimary:!0,onClick:o},(0,c.__)("Import sample products","woocommerce"))))}},59081:(e,t,o)=>{o.d(t,{Z:()=>i});var r=o(69307),c=o(65736),n=o(55609),a=o(96376),l=o(14812);const i=()=>(0,r.createElement)(n.Modal,{className:"woocommerce-products-load-sample-product-modal",overlayClassName:"woocommerce-products-load-sample-product-modal-overlay",title:"",onRequestClose:()=>{}},(0,r.createElement)(a.Spinner,{color:"#007cba",size:48}),(0,r.createElement)(l.Text,{className:"woocommerce-load-sample-product-modal__title"},(0,c.__)("Loading sample products")),(0,r.createElement)(l.Text,{className:"woocommerce-load-sample-product-modal__description"},(0,c.__)("We are loading 9 sample products into your store")))},38712:(e,t,o)=>{o.d(t,{Z:()=>d});var r=o(65736),c=o(86989),n=o.n(c),a=o(67221),l=o(9818),i=o(69307),s=o(14599),m=o(42889);const d=e=>{let{redirectUrlAfterSuccess:t}=e;const[o,c]=(0,i.useState)(!1),{createNotice:d}=(0,l.useDispatch)("core/notices"),{recordCompletionTime:p}=(0,m.Z)("products");return{loadSampleProduct:async()=>{(0,s.recordEvent)("tasklist_add_product",{method:"sample_product"}),p(),c(!0);try{if(await n()({path:`${a.WC_ADMIN_NAMESPACE}/onboarding/tasks/import_sample_products`,method:"POST"}),t)return void(window.location.href=t)}catch(e){const t=e instanceof Error&&e.message?e.message:(0,r.__)("There was an error importing the sample products","woocommerce");d("error",t)}c(!1)},isLoadingSampleProducts:o}}},41243:(e,t,o)=>{o.d(t,{Z:()=>n});var r=o(69307),c=o(86020);const n=e=>{let{items:t}=e;return(0,r.createElement)("div",{className:"woocommerce-products-card-list"},(0,r.createElement)(c.List,{items:t}))}},46340:(e,t,o)=>{o.r(t),o.d(t,{Products:()=>Z});var r=o(69307),c=o(34802),n=o(98817),a=o(65736),l=o(62907),i=o(14666),s=o(10314),m=o(55609),d=o(74617),p=o(14599),u=o(94694),_=o(41243),w=o(3680),h=o(83221),k=o(29497);const f=[{key:"from-csv",title:(0,a.__)("FROM A CSV FILE","woocommerce"),content:(0,a.__)("Import all products at once by uploading a CSV file.","woocommerce"),before:(0,r.createElement)(w.Z,null),onClick:()=>{(0,p.recordEvent)("tasklist_add_product",{method:"import"}),window.location.href=(0,d.getAdminLink)("edit.php?post_type=product&page=product_importer&wc_onboarding_active_task=products")}},{key:"from-cart2cart",title:(0,a.__)("FROM CART2CART","woocommerce"),content:(0,k.Z)({mixedString:(0,a.__)("Migrate all store data like products, customers, and orders in no time with this 3rd party plugin. {{link}}Learn more{{/link}}","woocommerce"),components:{link:(0,r.createElement)(m.ExternalLink,{href:"https://woocommerce.com/products/cart2cart/?utm_medium=product",onClickCapture:e=>e.preventDefault()})}}),before:(0,r.createElement)(h.Z,null),onClick:()=>{var e;(0,p.recordEvent)("tasklist_add_product",{method:"migrate"}),null===(e=window.open("https://woocommerce.com/products/cart2cart/?utm_medium=product","_blank"))||void 0===e||e.focus()}}];var g=o(72206),v=o(92930),y=o(59081),E=o(38712),b=o(46838),C=o(42889);const Z=()=>{const[e,t]=(0,r.useState)(!1),{recordCompletionTime:o}=(0,C.Z)("products"),[c,n]=(0,r.useState)(!1),w=(0,r.useMemo)((()=>f.map((e=>({...e,onClick:()=>{e.onClick(),o()}})))),[o]),{loadSampleProduct:h,isLoadingSampleProducts:k}=(0,E.Z)({redirectUrlAfterSuccess:(0,d.getAdminLink)("edit.php?post_type=product&wc_onboarding_active_task=products")}),Z=(0,g.Z)((0,v.Q)({exclude:["subscription"]}),[],{onClick:o}),L=(0,r.createElement)(u.Z,{items:Z,onClickLoadSampleProduct:()=>n(!0)});return(0,r.createElement)("div",{className:"woocommerce-task-import-products"},(0,r.createElement)("h1",null,(0,a.__)("Import your products","woocommerce")),(0,r.createElement)(_.Z,{items:w}),(0,r.createElement)("div",{className:"woocommerce-task-import-products-stacks"},(0,r.createElement)(m.Button,{onClick:()=>{(0,p.recordEvent)("tasklist_add_product_from_scratch_click"),t(!e)}},(0,a.__)("Or add your products from scratch","woocommerce"),(0,r.createElement)(l.Z,{icon:e?i.Z:s.Z})),e&&L),k?(0,r.createElement)(y.Z,null):c&&(0,r.createElement)(b.Z,{onCancel:()=>{n(!1),(0,p.recordEvent)("tasklist_cancel_load_sample_products_click")},onImport:()=>{n(!1),h()}}))};(0,n.registerPlugin)("wc-admin-onboarding-task-products",{scope:"woocommerce-tasks",render:()=>(0,r.createElement)(c.WooOnboardingTask,{id:"products",variant:"import"},(0,r.createElement)(Z,null))})},32829:(e,t,o)=>{o.d(t,{Vq:()=>p,Yc:()=>_,wW:()=>u,M5:()=>d,T:()=>w});var r=o(69307),c=o(65736),n=o(90391),a=o(96898),l=o(7480),i=o(48349),s=o(62907),m=o(64793);const d=Object.freeze([{key:"physical",title:(0,c.__)("Physical product","woocommerce"),content:(0,c.__)("A tangible item that gets delivered to customers.","woocommerce"),before:(0,r.createElement)(n.Z,null),after:(0,r.createElement)(s.Z,{icon:m.Z})},{key:"digital",title:(0,c.__)("Digital product","woocommerce"),content:(0,c.__)("A digital product like service, downloadable book, music or video.","woocommerce"),before:(0,r.createElement)(a.Z,null),after:(0,r.createElement)(s.Z,{icon:m.Z})},{key:"variable",title:(0,c.__)("Variable product","woocommerce"),content:(0,c.__)("A product with variations like color or size.","woocommerce"),before:(0,r.createElement)(l.Z,null),after:(0,r.createElement)(s.Z,{icon:m.Z})},{key:"subscription",title:(0,c.__)("Subscription product","woocommerce"),content:(0,c.__)("Item that customers receive on a regular basis.","woocommerce"),before:(0,r.createElement)(i.Z,null),after:(0,r.createElement)(s.Z,{icon:m.Z})},{key:"grouped",title:(0,c.__)("Grouped product","woocommerce"),content:(0,c.__)("A collection of related products.","woocommerce"),before:(0,r.createElement)((()=>(0,r.createElement)("svg",{width:"25",height:"24",viewBox:"0 0 25 24",fill:"none",xmlns:"http://www.w3.org/2000/svg"},(0,r.createElement)("mask",{id:"mask0_1133_132667",style:{maskType:"alpha"},maskUnits:"userSpaceOnUse",x:"2",y:"2",width:"21",height:"20"},(0,r.createElement)("path",{fillRule:"evenodd",clipRule:"evenodd",d:"M16.5 2.34497L10.84 7.99497V3.65497H2.84003V11.655H10.84V7.99497L16.5 13.655H12.84V21.655H20.84V13.655H16.5L22.16 7.99497L16.5 2.34497ZM19.33 8.00497L16.5 5.17497L13.67 8.00497L16.5 10.835L19.33 8.00497ZM8.84003 9.65497V5.65497H4.84003V9.65497H8.84003ZM18.84 15.655V19.655H14.84V15.655H18.84ZM8.84003 19.655V15.655H4.84003V19.655H8.84003ZM2.84003 13.655H10.84V21.655H2.84003V13.655Z",fill:"white"})),(0,r.createElement)("g",{mask:"url(#mask0_1133_132667)"},(0,r.createElement)("rect",{x:"0.5",width:"24",height:"24",fill:"#007CBA"})))),null),after:(0,r.createElement)(s.Z,{icon:m.Z})},{key:"external",title:(0,c.__)("External product","woocommerce"),content:(0,c.__)("Link a product to an external website.","woocommerce"),before:(0,r.createElement)((()=>(0,r.createElement)("svg",{width:"25",height:"24",viewBox:"0 0 25 24",fill:"none",xmlns:"http://www.w3.org/2000/svg"},(0,r.createElement)("mask",{id:"mask0_1133_132681",style:{maskType:"alpha"},maskUnits:"userSpaceOnUse",x:"2",y:"7",width:"21",height:"10"},(0,r.createElement)("path",{fillRule:"evenodd",clipRule:"evenodd",d:"M11.5 15H7.5C5.85 15 4.5 13.65 4.5 12C4.5 10.35 5.85 9 7.5 9H11.5V7H7.5C4.74 7 2.5 9.24 2.5 12C2.5 14.76 4.74 17 7.5 17H11.5V15ZM17.5 7H13.5V9H17.5C19.15 9 20.5 10.35 20.5 12C20.5 13.65 19.15 15 17.5 15H13.5V17H17.5C20.26 17 22.5 14.76 22.5 12C22.5 9.24 20.26 7 17.5 7ZM16.5 11H8.5V13H16.5V11Z",fill:"white"})),(0,r.createElement)("g",{mask:"url(#mask0_1133_132681)"},(0,r.createElement)("rect",{x:"0.5",width:"24",height:"24",fill:"#007CBA"})))),null),after:(0,r.createElement)(s.Z,{icon:m.Z})}]),p={key:"load-sample-product",title:(0,c.__)("can’t decide?","woocommerce"),content:(0,c.__)("Load sample products and see what they look like in your store."),before:(0,r.createElement)((()=>(0,r.createElement)("svg",{width:"25",height:"24",viewBox:"0 0 25 24",fill:"none",xmlns:"http://www.w3.org/2000/svg"},(0,r.createElement)("mask",{id:"mask0_1133_132689",style:{maskType:"alpha"},maskUnits:"userSpaceOnUse",x:"5",y:"2",width:"15",height:"20"},(0,r.createElement)("path",{fillRule:"evenodd",clipRule:"evenodd",d:"M12.5 2C8.64 2 5.5 5.14 5.5 9C5.5 11.38 6.69 13.47 8.5 14.74V17C8.5 17.55 8.95 18 9.5 18H15.5C16.05 18 16.5 17.55 16.5 17V14.74C18.31 13.47 19.5 11.38 19.5 9C19.5 5.14 16.36 2 12.5 2ZM9.5 21C9.5 21.55 9.95 22 10.5 22H14.5C15.05 22 15.5 21.55 15.5 21V20H9.5V21ZM14.5 13.7L15.35 13.1C16.7 12.16 17.5 10.63 17.5 9C17.5 6.24 15.26 4 12.5 4C9.74 4 7.5 6.24 7.5 9C7.5 10.63 8.3 12.16 9.65 13.1L10.5 13.7V16H14.5V13.7Z",fill:"white"})),(0,r.createElement)("g",{mask:"url(#mask0_1133_132689)"},(0,r.createElement)("rect",{x:"0.5",width:"24",height:"24",fill:"#757575"})))),null),after:(0,r.createElement)(s.Z,{icon:m.Z}),className:"woocommerce-products-list__item-load-sample-product"},u=Object.freeze({physical:["physical","variable","grouped"],subscriptions:["subscription"],downloads:["digital"],"physical,subscriptions":["physical","subscription"],"downloads,physical":["physical","digital"],"downloads,subscriptions":["digital","subscription"],"downloads,physical,subscriptions":["physical","digital","subscription"]}),_=u.physical,w=["physical","subscriptions","downloads"]},94694:(e,t,o)=>{o.d(t,{Z:()=>d});var r=o(69307),c=o(65736),n=o(86020),a=o(14812),l=o(29497),i=o(74617),s=o(14599),m=o(42889);const d=e=>{let{items:t,onClickLoadSampleProduct:o,showOtherOptions:d=!0}=e;const{recordCompletionTime:p}=(0,m.Z)("products");return(0,r.createElement)("div",{className:"woocommerce-products-stack"},(0,r.createElement)(n.List,{items:t}),d&&(0,r.createElement)(a.Text,{className:"woocommerce-stack__other-options"},(0,l.Z)({mixedString:(0,c.__)("Can’t find your product type? {{sbLink}}Start Blank{{/sbLink}} or {{LspLink}}Load Sample Products{{/LspLink}} to see what they look like in your store.","woocommerce"),components:{sbLink:(0,r.createElement)(n.Link,{onClick:()=>((0,s.recordEvent)("tasklist_add_product",{method:"manually"}),p(),window.location=(0,i.getAdminLink)("post-new.php?post_type=product&wc_onboarding_active_task=products&tutorial=true"),!1),href:"",type:"wc-admin"},(0,r.createElement)(r.Fragment,null)),LspLink:(0,r.createElement)(n.Link,{href:"",type:"wc-admin",onClick:()=>(o(),!1)},(0,r.createElement)(r.Fragment,null))}})))}},72206:(e,t,o)=>{o.d(t,{Z:()=>m});var r=o(69307),c=o(14599),n=o(9818),a=o(67221),l=o(74617),i=o(37942);const s=()=>{const{createProductFromTemplate:e}=(0,n.useDispatch)(a.ITEMS_STORE_NAME),[t,o]=(0,r.useState)(!1);return{createProductByType:async t=>{if("subscription"!==t){o(!0);try{const o=await e({template_name:t,status:"draft"},{_fields:["id"]});if(!o||!o.id)throw new Error("Unexpected empty data response from server");{const e=(0,l.getAdminLink)(`post.php?post=${o.id}&action=edit&wc_onboarding_active_task=products&tutorial=true`);window.location=e}}catch(e){(0,i.a)(e)}o(!1)}else window.location=(0,l.getAdminLink)("post-new.php?post_type=product&subscription_pointers=true")},isRequesting:t}},m=function(e){let t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:[],{onClick:o}=arguments.length>2&&void 0!==arguments[2]?arguments[2]:{};const{createProductByType:n}=s(),a=(0,r.useMemo)((()=>e.map((e=>({...e,onClick:()=>{n(e.key),(0,c.recordEvent)("tasklist_product_template_selection",{product_type:e.key,is_suggested:t.includes(e.key)}),"function"==typeof o&&o()}})))),[n]);return a}},92930:(e,t,o)=>{o.d(t,{Q:()=>n,r:()=>a});var r=o(92819),c=o(32829);const n=function(){let{exclude:e}=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{};return e&&(null==e?void 0:e.length)>0?c.M5.filter((t=>!e.includes(t.key))):[...c.M5]},a=e=>{const t=(0,r.intersection)(e,c.T).sort().join(",");return c.wW.hasOwnProperty(t)?c.wW[t]:c.Yc}},42889:(e,t,o)=>{o.d(t,{Z:()=>a});var r=o(69307),c=o(14599),n=o(20791);const a=(e,t)=>{const o=(0,r.useRef)(t||window.performance.now());return{recordCompletionTime:()=>{(0,c.recordEvent)("task_completion_time",{task_name:e,time:(0,n.Jm)(window.performance.now()-o.current)})}}}},3680:(e,t,o)=>{t.Z=function(e){var t=e.size,o=void 0===t?24:t,r=e.onClick,l=(e.icon,e.className),i=function(e,t){if(null==e)return{};var o,r,c=function(e,t){if(null==e)return{};var o,r,c={},n=Object.keys(e);for(r=0;r<n.length;r++)o=n[r],0<=t.indexOf(o)||(c[o]=e[o]);return c}(e,t);if(Object.getOwnPropertySymbols){var n=Object.getOwnPropertySymbols(e);for(r=0;r<n.length;r++)o=n[r],0<=t.indexOf(o)||Object.prototype.propertyIsEnumerable.call(e,o)&&(c[o]=e[o])}return c}(e,n),s=["gridicon","gridicons-pages",l,!1,!1,!1].filter(Boolean).join(" ");return c.default.createElement("svg",a({className:s,height:o,width:o,onClick:r},i,{xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 24 24"}),c.default.createElement("g",null,c.default.createElement("path",{d:"M16 8H8V6h8v2zm0 2H8v2h8v-2zm4-6v12l-6 6H6a2 2 0 01-2-2V4a2 2 0 012-2h12a2 2 0 012 2zm-2 10V4H6v16h6v-4a2 2 0 012-2h4z"})))};var r,c=(r=o(99196))&&r.__esModule?r:{default:r},n=["size","onClick","icon","className"];function a(){return a=Object.assign||function(e){for(var t,o=1;o<arguments.length;o++)for(var r in t=arguments[o])Object.prototype.hasOwnProperty.call(t,r)&&(e[r]=t[r]);return e},a.apply(this,arguments)}},83221:(e,t,o)=>{t.Z=function(e){var t=e.size,o=void 0===t?24:t,r=e.onClick,l=(e.icon,e.className),i=function(e,t){if(null==e)return{};var o,r,c=function(e,t){if(null==e)return{};var o,r,c={},n=Object.keys(e);for(r=0;r<n.length;r++)o=n[r],0<=t.indexOf(o)||(c[o]=e[o]);return c}(e,t);if(Object.getOwnPropertySymbols){var n=Object.getOwnPropertySymbols(e);for(r=0;r<n.length;r++)o=n[r],0<=t.indexOf(o)||Object.prototype.propertyIsEnumerable.call(e,o)&&(c[o]=e[o])}return c}(e,n),s=["gridicon","gridicons-reblog",l,!1,!1,!1].filter(Boolean).join(" ");return c.default.createElement("svg",a({className:s,height:o,width:o,onClick:r},i,{xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 24 24"}),c.default.createElement("g",null,c.default.createElement("path",{d:"M22.086 9.914L20 7.828V18a2 2 0 01-2 2h-7v-2h7V7.828l-2.086 2.086L14.5 8.5 19 4l4.5 4.5-1.414 1.414zM6 16.172V6h7V4H6a2 2 0 00-2 2v10.172l-2.086-2.086L.5 15.5 5 20l4.5-4.5-1.414-1.414L6 16.172z"})))};var r,c=(r=o(99196))&&r.__esModule?r:{default:r},n=["size","onClick","icon","className"];function a(){return a=Object.assign||function(e){for(var t,o=1;o<arguments.length;o++)for(var r in t=arguments[o])Object.prototype.hasOwnProperty.call(t,r)&&(e[r]=t[r]);return e},a.apply(this,arguments)}}}]);