import './bootstrap';

window.Vue = require('vue').default;

import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'

import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'

Vue.use(BootstrapVue)
Vue.use(IconsPlugin)

Vue.component('shipping-component', require('./components/ShippingComponent.vue').default);
Vue.component('add-shipper-modal', require('./components/AddShipperModal.vue').default);

const app = new Vue({
    el: '#app',
});
