<template>
    <app-layout title="Payment page">
        <h1 class="text-xl"></h1>
        

    </app-layout>
</template>

<script>
    import { defineComponent } from 'vue'
    import AppLayout from '@/Layouts/AppLayout.vue'
    import Welcome from '@/Jetstream/Welcome.vue'
    import Stripe from '@/Jetstream/Stripe.vue'
    export default defineComponent({
        components: {
            AppLayout,
            Welcome,
        },
    })
</script>
