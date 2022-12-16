import { createApp } from 'vue/dist/vue.esm-bundler';
import Dashboard from "./components/Dashboard.vue"
import Navbar from "./components/Navbar.vue"

// Vuetify
import 'vuetify/styles'
import { createVuetify } from 'vuetify'
import * as components from 'vuetify/components'
import * as directives from 'vuetify/directives'

import '../sass/app.scss'

const vuetify = createVuetify({
    components,
    directives,
})

const app = createApp({});
app.use(vuetify);
app.component('dashboard', Dashboard);
app.component('navbar', Navbar);
app.mount('#app');
