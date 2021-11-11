<template>
    <Navbar></Navbar>
    <div class="">
        <div class="py-12 px-4">
            <div
                class="
                    flex flex-wrap
                    items-center
                    text-center
                    lg:text-left
                    -mx-2
                    animate__animated animate__fadeIn
                "
            >
                <div
                    class="
                        lg:w-1/2
                        px-2
                        lg:pr-10
                        mt-10
                        lg:mt-0
                        order-1
                        lg:order-none
                    "
                >
                    <h2
                        class="
                            text-5xl
                            mt-4
                            mb-6
                            leading-tight
                            font-semibold font-heading
                            text-black
                        "
                    >
                        No car can be clean without <b><u>Nuecar</u></b>
                    </h2>
                    <a v-if="$page.props.user" class="text-lg text-indigo-600">
                        Thank you for joining us!
                    </a>
                    <a v-else class="text-lg text-indigo-600 hover:underline" href="/register">
                        Join us now!
                    </a>
                </div>

                <div class="lg:w-1/2 px-2">
                    <img src="/svg/background.svg" alt="" />
                </div>
            </div>
        </div>
        <div class="p-4">
            <div class="flex flex-wrap -mx-4">
                <div class="md:w-1/4 p-4 mb-4 md:mb-0">
                    <svg
                        class="text-indigo-600 w-10 h-10"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"
                        ></path>
                    </svg>
                    <h3 class="text-xl my-3 font-semibold font-heading">
                        High durability
                    </h3>
                    <p class="text-gray-400 leading-relaxed">
                        Forget about paper jams with our increased stability
                        product.
                    </p>
                </div>
                <div class="md:w-1/4 p-4 mb-4 md:mb-0">
                    <svg
                        class="text-indigo-600 w-10 h-10"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"
                        ></path>
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"
                        ></path>
                    </svg>
                    <h3 class="text-xl my-3 font-semibold font-heading">
                        Versatility
                    </h3>
                    <p class="text-gray-400 leading-relaxed">
                        Multi-functional paper for various office needs.
                    </p>
                </div>
                <div class="md:w-1/4 p-4 mb-4 md:mb-0">
                    <svg
                        class="text-indigo-600 w-10 h-10"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"
                        ></path>
                    </svg>
                    <h3 class="text-xl my-3 font-semibold font-heading">
                        Value-based price
                    </h3>
                    <p class="text-gray-400 leading-relaxed">
                        The best combination of quality and economy comes with
                        our paper.
                    </p>
                </div>
                <div class="md:w-1/4 p-4 mb-4 md:mb-0">
                    <svg
                        class="text-indigo-600 w-10 h-10"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M9 13h6m-3-3v6m5 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"
                        ></path>
                    </svg>
                    <h3 class="text-xl my-2 font-semibold font-heading">
                        Variety
                    </h3>
                    <p class="text-gray-400 leading-relaxed">
                        The offer includes paper in wide range of density and
                        sizes.
                    </p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Navbar from "@/Components/Navbar";
export default {

    props: [],
    components: {
        Navbar,
    },
    data() {
        return {};
    },
    computed: {},

    methods() {},
};
</script>

<style>
    b{
        color: rgba(48, 172, 103, 0.51);
    }
</style>
