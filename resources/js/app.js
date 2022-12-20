import './bootstrap';

window.Vue = require('vue').default;

import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'

import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'

Vue.use(BootstrapVue)
Vue.use(IconsPlugin)

Vue.component('shipping-component', require('./components/ShippingComponent.vue').default);
Vue.component('Add-shipper-modal', require('./components/AddShipperModal.vue').default);
Vue.component('Add-contact-modal', require('./components/AddContactModal.vue').default);
Vue.component('Show-contacts-modal', require('./components/ShowContactsModal.vue').default);
Vue.component('Edit-shipper-modal', require('./components/EditShipperModal.vue').default);
Vue.component('Delete-shipper-modal', require('./components/DeleteShipperModal.vue').default);

const app = new Vue({
    el: '#app',
});
