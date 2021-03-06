require('./bootstrap.site');

window.Vue = require('vue');
window.$Bus = new Vue() // EventBus Service for communicating component via component

// import ViewUI from 'view-design';
// import 'view-design/dist/styles/iview.css';
// import locale from 'view-design/dist/locale/en-US';
// import { Notice } from "view-design";
Vue.config.productionTips = false
Vue.config.performance = process.env.NODE_ENV !== "production";

// window.$Notice = Notice // Toast Notification . alternative sweetalert2 . I`ll use IViewUI
// Vue.use(ViewUI, { locale });
import VueAWN from "vue-awesome-notifications";
import 'vue-awesome-notifications/dist/styles/style.css';
// import 'vue-owl-carousel/dist/vue-owl-carousel';
import vueMagnifier from 'vue-magnifier';

let options = {
    durations : {
        global: 3000,
        success: 1000,
    }
}

Vue.use(VueAWN);
window.$awn = Vue.prototype.$awn;
Vue.use(vueMagnifier)



import router from './router.site'
import i18n, { selectedLocale } from './i18n'
// IMPORT THE STORE
import store from './store.site';

Vue.component('main-app', () => import('./site/comonents/MainApp.vue'));
Vue.component('MultipleFilter', () => import('./site/comonents/Filter/MultipleFilter.vue'));
Vue.component('SortingToolBox', () => import('./site/comonents/Filter/SortingToolBox.vue'));
Vue.component('QuickView', () => import('./site/comonents/Product/QuickView.vue'));
Vue.component('Product', () => import('./site/comonents/Product/Product.vue'));
Vue.component('carousel', require('vue-owl-carousel'));
Vue.component('mobile-menu', () => import('./site/comonents/MobileMenu.vue'));
Vue.component('mobile-footer', () => import('./site/comonents/MobileFooter.vue'));

const app = new Vue({
    el: '#main-app',
    i18n,
    router,
    store
});

