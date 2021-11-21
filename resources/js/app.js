require('./bootstrap');

import { createApp, h } from 'vue';
import LaravelPermissionToVueJS from 'laravel-permission-to-vuejs'
import { createInertiaApp } from '@inertiajs/inertia-vue3';
import { InertiaProgress } from '@inertiajs/progress';
import Datepicker from 'vue3-date-time-picker';
import VueTimepicker from 'vue3-timepicker'
import { StripePlugin } from '@vue-stripe/vue-stripe';
import 'vue3-timepicker/dist/VueTimepicker.css'
import 'animate.css';
import 'vue-carousel';

const options = {
	pk: process.env.STRIPE_KEY,
	stripeAccount: process.env.STRIPE_ACCOUNT,
	apiVersion: process.env.API_VERSION,
	locale: process.env.LOCALE,
  };

const appName = window.document.getElementsByTagName('title')[0]?.innerText || 'Laravel';
createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => require(`./Pages/${name}.vue`),
    setup({ el, app, props, plugin }) {
        return createApp({ render: () => h(app, props) })
            .use(plugin)
            .use(LaravelPermissionToVueJS)
            .use(VueTimepicker)
			.use(StripePlugin, options)
            .component('Datepicker', Datepicker)
            .mixin({ methods: { route } })
            .mount(el);
    },
});

InertiaProgress.init({ color: '#4B5563' });
