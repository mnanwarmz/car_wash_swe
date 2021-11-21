<template>
    <div>
        <stripe-checkout
            ref="checkoutRef"
            mode="payment"
            :pk="publishableKey"
            :line-items="lineItems"
            :success-url="successURL"
            :cancel-url="cancelURL"
            @loading="(v) => (loading = v)"
        />
        <button @click="submit">Pay now!</button>
    </div>
</template>

<script src="https://js.stripe.com/v3/"></script>

<script>
import { StripeCheckout } from "@vue-stripe/vue-stripe";
export default {
    components: {
        StripeCheckout,
    },
    data() {
        this.publishableKey = process.env.STRIPE_KEY;
        return {
            loading: false,
            lineItems: [
                {
                    price: "price_1Jy0dXAf2z1VXSzkcVSQe7qN",
                    quantity: 99,
                },
                {
                    price: "price_1Jy0dMAf2z1VXSzkU6H5rRXV",
                    quantity: 99,
                },
                {
                    price: "price_1Jy0bkAf2z1VXSzkLLv4ThEf",
                    quantity: 99,
                },
            ],
            successURL: "your-success-url",
            cancelURL: "your-cancel-url",
        };
    },
    methods: {
        submit() {
            // You will be redirected to Stripe's secure checkout page
            this.$refs.checkoutRef.redirectToCheckout();
        },
    },
};
</script>
