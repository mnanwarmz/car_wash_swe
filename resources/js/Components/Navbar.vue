<template>
<body class="bg-blue-500">
    <div>
        <nav class="relative px-4 py-4 flex justify-between items-center">
            <a class="text-3xl font-bold leading-none" href="#">
                <img src="/images/logo.png" alt="Home" id="logo" class="h-10">
            </a>
            <h6 class="mr-auto mt-5 text-3xl text-white">NueCar</h6>
            <div class="lg:hidden">
                <button @click="toggleMenu" class="navbar-burger flex items-center text-white p-3">
                    <svg class="block h-4 w-4 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Mobile menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                    </svg>
                </button>
            </div>
            <ul class="hidden absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 lg:flex lg:mx-auto lg:flex lg:items-center lg:w-auto lg:space-x-6">
                <li><a class="text-sm text-white hover:text-gray-500" :href="`/`">Home</a></li>
                <li class="text-gray-300">
                    <Seperator></Seperator>
                </li>
                <li><a class="text-sm text-white hover:text-gray-500" :href="`/about`">About Us</a></li>
                <li class="text-gray-300">
                    <Seperator></Seperator>
                </li>
                <li><a class="text-sm text-white hover:text-gray-500" :href="`/services`">Services</a></li>
                <li class="text-gray-300">
                    <Seperator></Seperator>
                </li>
                <li><a class="text-sm text-white hover:text-gray-500" :href="`/pricing`">Pricing</a></li>
                <li class="text-gray-300">
                    <Seperator></Seperator>
                </li>
                <li><a class="text-sm text-white hover:text-gray-500" :href="`/contact`">Contact</a></li>
            </ul>
            <div v-if="$page.props.user">
                <div class="hidden lg:inline-block py-2 px-6 bg-blue-500 hover:bg-blue-600 text-sm text-white font-bold rounded-xl transition duration-200" id="dashboard">
                    <a v-if="is('admin | superadmin')" href="/admin/dashboard">Dashboard</a>
                    <a v-else href="dashboard">Dashboard</a>
                </div>
            </div>
            <div v-else>
                <a class="hidden lg:inline-block lg:ml-auto lg:mr-3 py-2 px-6 bg-gray-50 hover:bg-gray-100 text-sm text-gray-900 font-bold  rounded-xl transition duration-200" href="/login">Sign In</a>
                <a class="hidden lg:inline-block py-2 px-6 bg-blue-500 hover:bg-blue-600 text-sm text-white font-bold rounded-xl transition duration-200" href="/register">Sign up</a>
            </div>
        </nav>
    </div>
	<div ref="menu" class="navbar-menu relative z-50 hidden">
		<div ref = "backdrop" class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25 hidden"></div>
		<nav class="fixed top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 bg-white border-r overflow-y-auto">
			<div class="flex items-center mb-8">
				<a class="mr-auto text-3xl font-bold leading-none" href="#">
					<img src="/images/logo.png" alt="Home" id="logo" class="h-12">
                    <!-- <p>NueCar</p> -->
				</a>
				<button @click="toggleMenu" class="navbar-close">
					<svg class="h-6 w-6 text-gray-400 cursor-pointer hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
					</svg>
				</button>
			</div>
			<div>
				<ul>
					<li class="mb-1">
						<inertia-link class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" :href="`/`" >Home</inertia-link>
					</li>
					<li class="mb-1">
						<inertia-link class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" :href="`/about`">About Us</inertia-link>
					</li>
					<li class="mb-1">
						<inertia-link class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" :href="`/services`">Services</inertia-link>
					</li>
					<li class="mb-1">
						<inertia-link class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" :href="`/pricing`">Pricing</inertia-link>
					</li>
					<li class="mb-1">
						<inertia-link class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" :href="`contact`">Contact</inertia-link>
					</li>
				</ul>
			</div>
			<div class="mt-auto">
				<div v-if="!($page.props.user)" class="pt-6">
					<a class="block px-4 py-3 mb-3 leading-loose text-xs text-center font-semibold leading-none bg-gray-50 hover:bg-gray-100 rounded-xl" href="/login">Sign in</a>
					<a class="block px-4 py-3 mb-2 leading-loose text-xs text-center text-white font-semibold bg-blue-600 hover:bg-blue-700  rounded-xl" href="/register">Sign Up</a>
				</div>
				<p class="my-4 text-xs text-center text-gray-400">
					<span>Copyright © 2021</span>
				</p>
			</div>
		</nav>
	</div>
</body>
</template>

<script>

import { defineComponent } from "@vue/runtime-core";
import Seperator from "@/Components/Seperator.vue"

export default defineComponent({
    data() {
        return {
            page: {
                props: {
                    user: this.user
                }
            }
        }
    },
    components: {
        Seperator
    },
    mounted() {
        console.log("User: "+ {user});
    },
    methods: {
        toggleMenu() {
            this.$refs.menu.classList.toggle('hidden');
            this.$refs.backdrop.classList.toggle('hidden');
        },
    },
});
</script>

<style>
    nav{
        background: rgba(92, 219, 149, 0.51);
    }

    #logo{
        width: 60px;
        height: 46px;
    }

    #dashboard{
        background-color: #05385B;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    }

    #dashboard:hover{
        background: #074c7a;
    }
</style>
