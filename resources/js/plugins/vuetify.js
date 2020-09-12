import Vue from 'vue';
import Vuetify from 'vuetify';
Vue.use(Vuetify);

import 'vuetify/dist/vuetify.min.css';
import '@mdi/font/css/materialdesignicons.css';

const opts = {
  icons: {
    iconfont: 'mdi',
  },
};

export default new Vuetify(opts);
