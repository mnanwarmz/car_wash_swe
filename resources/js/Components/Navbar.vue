<template>
<body class="bg-blue-400">
    <div>
        <nav class=" relative px-4 py-4 flex justify-between items-center h-20">
            <a class="text-3xl font-bold leading-none" href="#">
                <img src="/images/logo.png" alt="Home" id="logo" class="h-10">
            </a>
            <h6 class="mr-auto mt-5 text-3xl text-white">NueCar</h6>
            <div class="lg:hidden">
                <button @click="toggleMenu" class="navbar-burger flex items-center text-white p-3">
                    <svg class="block h-4 w-full fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
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
                <div class="hidden lg:inline-block">
                    <a>
                        <button @click="toggleDropdown">
                            <img
                            class="mx-auto h-10"
                            :src="`https://ui-avatars.com/api/?name=${$page.props.user.name}&rounded=true&background=0D8ABC&color=fff`"
                            />
                        </button>
                    </a>
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
						<a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" :href="`/`" >Home</a>
					</li>
					<li class="mb-1">
						<a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" :href="`/about`">About Us</a>
					</li>
					<li class="mb-1">
						<a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" :href="`/services`">Services</a>
					</li>
					<li class="mb-1">
						<a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" :href="`/pricing`">Pricing</a>
					</li>
					<li class="mb-1">
						<a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" :href="`contact`">Contact</a>
					</li>
				</ul>
			</div>
			<div class="mt-auto">
				<div v-if="($page.props.user)" class="pt-6 ">
                    <a class="block px-4 py-3 mb-3 leading-loose text-sm text-center text-white font-bold leading-none bg-blue-500 hover:bg-blue-600 rounded-xl" id="dashboard" v-if="is('admin | superadmin')" href="/admin/dashboard">Dashboard</a>
                    <a class="" id="dashboard" v-else href="/dashboard">
                        <img
                        class="mx-auto h-12"
                        :src="`https://ui-avatars.com/api/?name=${$page.props.user.name}&rounded=true&background=0D8ABC&color=fff`"
                        />
                    </a>
				</div>
                <div v-else>
                    <a class="block px-4 py-3 mb-3 leading-loose text-xs text-center font-semibold leading-none bg-gray-50 hover:bg-gray-100 rounded-xl" href="/login">Sign in</a>
					<a class="block px-4 py-3 mb-2 leading-loose text-xs text-center text-white font-semibold bg-blue-600 hover:bg-blue-700  rounded-xl" href="/register">Sign Up</a>
                </div>
				<p class="my-4 text-xs text-center text-gray-400">
					<span>Copyright © 2021</span>
				</p>
			</div>
		</nav>
	</div>

    <div ref="dropdown" class="border rounded-lg filter drop-shadow z-40 hidden absolute top-14 right-8">
        <div ref="props" class="hidden"></div>
        <div class="border rounded-lg ml-auto bg-white dark:bg-gray-800 h-40 w-56  shadow flex justify-center items-center">
                <ul class="space-y-3 dark:text-white">
                    <li class="font-medium">
                    <a v-if="is('admin | superadmin')" href="/admin/dashboard" class="flex items-center transform transition-colors duration-200 border-r-4 border-transparent hover:border-indigo-700">
                        <jet-responsive-nav-link>
                            Dashboard
                        </jet-responsive-nav-link>
                    </a>
                    <a v-else href="/dashboard" class="flex items-center transform transition-colors duration-200 border-r-4 border-transparent hover:border-indigo-700">
                        <jet-responsive-nav-link>
                            Dashboard
                        </jet-responsive-nav-link>
                    </a>
                    </li>
                    <li class="font-medium">
                    <a href="" class="flex items-center transform transition-colors duration-200 border-r-4 border-transparent hover:border-indigo-700">
                        <jet-responsive-nav-link :href="route('profile.show')" :active="route().current('profile.show')">
                            Settings
                        </jet-responsive-nav-link>
                    </a>
                    </li>
                    <hr class="dark:border-gray-700">
                    <li class="font-medium">
                    <a href="#" class="flex items-center transform transition-colors duration-200 border-r-4 border-transparent hover:border-red-600">
                        <form method="POST" @submit.prevent="logout">
                            <jet-responsive-nav-link as="button" href="/">
                                Logout
                            </jet-responsive-nav-link>
                        </form>
                    </a>
                    </li>
                </ul>
        </div>
    </div>
</body>
</template>

<script>
import JetResponsiveNavLink from '@/Jetstream/ResponsiveNavLink.vue'
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
        Seperator,
        JetResponsiveNavLink,
    },
    mounted() {
    },
    methods: {
        toggleMenu() {
            this.$refs.menu.classList.toggle('hidden');
            this.$refs.backdrop.classList.toggle('hidden');
        },

        toggleDropdown() {
            this.$refs.dropdown.classList.toggle('hidden');
            this.$refs.props.classList.toggle('hidden');
        },

        logout() {
            this.$inertia.post(route('logout'));
        },
    },
});
</script>

<style>
    nav{
        background: rgb(0, 113, 158);
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
