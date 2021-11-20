require('./bootstrap');

import { createApp, h } from 'vue';
import LaravelPermissionToVueJS from 'laravel-permission-to-vuejs'
import { createInertiaApp } from '@inertiajs/inertia-vue3';
import { InertiaProgress } from '@inertiajs/progress';
import Datepicker from 'vue3-date-time-picker';
import VueTimepicker from 'vue3-timepicker'
import 'vue3-timepicker/dist/VueTimepicker.css'
import 'animate.css';
import 'vue-carousel';
// import VueTableDynamic from 'vue-table-dynamic';


const appName = window.document.getElementsByTagName('title')[0]?.innerText || 'Laravel';
createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => require(`./Pages/${name}.vue`),
    setup({ el, app, props, plugin }) {
        return createApp({ render: () => h(app, props) })
            // .use(require('vue-moment'))
            // .use(VueTableDynamic)
            .use(plugin)
            .use(LaravelPermissionToVueJS)
            .use(VueTimepicker)
            .component('Datepicker', Datepicker)
            .mixin({ methods: { route } })
            .mount(el);
    },
});

InertiaProgress.init({ color: '#4B5563' });
