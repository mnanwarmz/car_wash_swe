<template>
    <div>
        <nav class="flex flex-wrap items-center justify-between p-4">
            <div class="flex flex-shrink-0 mr-10">
                <a
                    class="text-xl text-indigo-600 font-semibold font-heading"
                    href="#"
                    >Dunder Mifflin</a
                >
            </div>
            <div class="block lg:hidden">
                <button
                    class="
                        navbar-burger
                        flex
                        items-center
                        py-2
                        px-3
                        text-indigo-500
                        rounded
                        border border-indigo-500
                    "
                >
                    <svg
                        class="fill-current h-3 w-3"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <title>Menu</title>
                        <path
                            d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"
                        ></path>
                    </svg>
                </button>
            </div>
            <div
                class="
                    navbar-menu
                    hidden
                    lg:flex lg:items-center
                    w-full
                    lg:w-auto
                "
            >
                <!-- <div class="lg:mr-auto">
                    <a
                        class="
                            block
                            lg:inline-block
                            mt-4
                            lg:mt-0
                            mr-10
                            text-blue-900
                            hover:text-indigo-600
                        "
                        href="#"
                        >Appointments</a
                    ><a
                        class="
                            block
                            lg:inline-block
                            mt-4
                            lg:mt-0
                            mr-10
                            text-blue-900
                            hover:text-indigo-600
                        "
                        href="#"
                        >Vehicles</a
                    ><a
                        class="
                            block
                            lg:inline-block
                            mt-4
                            lg:mt-0
                            mr-10
                            text-blue-900
                            hover:text-indigo-600
                        "
                        href="#"
                        >Car Wash Stations</a
                    ><a
                        class="
                            block
                            lg:inline-block
                            mt-4
                            lg:mt-0
                            text-blue-900
                            hover:text-indigo-600
                        "
                        href="#"
                        >Blog</a
                    >
                </div> -->
                <div v-if="$page.props.user" class="float-right">
                    <Link
                        class="
                            block
                            lg:inline-block
                            mt-4
                            lg:mt-0 lg:mr-8
                            text-blue-900
                            hover:text-indigo-600
                        "
                        :href="route('dashboard')"
                    >
                        Dashboard
                    </Link>
                </div>
                <div v-else class="float-right">
                    <Link
                        :href="route('login')"
                        class="
                            block
                            lg:inline-block
                            mt-4
                            lg:mt-0 lg:mr-8
                            text-blue-900
                            hover:text-indigo-600
                        "
                        >Sign in</Link
                    ><Link
                        v-if="canRegister"
                        :href="route('register')"
                        class="
                            inline-block
                            py-3
                            px-6
                            mt-4
                            lg:mt-0
                            leading-none
                            text-white
                            bg-indigo-600
                            hover:bg-indigo-700
                            font-semibold
                            rounded
                            shadow
                        "
                        >Sign up</Link
                    >
                </div>
            </div>
        </nav>
    </div>
</template>

<script>
import { Head, Link } from "@inertiajs/inertia-vue3";
export default {
    components: {
        Head,
        Link,
    },

    props: {},
    data() {
        return {};
    },
    computed: {},

    methods() {},
};
</script>
