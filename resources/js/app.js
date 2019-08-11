import Vue from 'vue';
import VueRouter from 'vue-router';
import routes from './routes';
// import vuetify from 'vuetify'

Vue.use(VueRouter);
Vue.http.headers.common['X-CSRF-TOKEN'] = $('meta[name="csrf-token"]').attr("content");
// Vue.use(vuetify);

const app = new Vue({
    el: '#app',
    router: new VueRouter(routes),
});