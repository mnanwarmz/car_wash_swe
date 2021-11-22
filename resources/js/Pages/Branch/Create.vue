<template>
    <Navbar></Navbar>
	<header class="bg-white shadow" >
		<div class="max-w-7xl mx-auto py-6 sm:px-6 ">
			<h2 name="header" class="font-semibold text-xl text-gray-800 leading-tight">Branch/Rider Application</h2>
		</div>
	</header>
<!-- component -->
    <section class="bg-gray-50 h-full">
  <div class="relative py-20  overflow-hidden">
    <img class="hidden lg:block absolute inset-0 w-full" src="atis-assets/background/lines.svg" alt="">
    <div class="relative container mx-auto px-4">
      <div class="flex flex-wrap items-center -mx-4">
        <div class="w-full lg:w-1/2 px-4 mb-12 md:mb-20 lg:mb-0 flex items-center">
          <div class="w-full text-center lg:text-left">
            <div class="max-w-md mx-auto lg:mx-0">
              <h2 class="mb-3 text-4xl lg:text-5xl font-bold font-heading">
                <span>Become a rider or open up your own branch now!</span>
              </h2>
            </div>
            <div class="max-w-sm mx-auto lg:mx-0">
            	<div><a class="inline-block mb-3 lg:mb-0 lg:mr-3 w-full lg:w-auto py-2 px-6 leading-loose bg-green-600 hover:bg-green-700 text-white font-semibold rounded-l-xl rounded-t-xl transition duration-200" href="#">Become a rider here!</a></div>
            </div>
          </div>
        </div>
        <div class="w-full lg:w-1/2 px-4">
          <div class="max-w-sm text-center mx-auto">
            <div class="mb-4 px-6 py-8 bg-white rounded-xl">
              <div class="mb-6">
                <h3 class="text-2xl font-bold">Branch Info</h3>
              </div>
                <div class="flex flex-wrap -mx-2">
                  <div class="mb-4 w-full lg:w-1/2 px-2">
                    <input class="w-full p-4 text-xs bg-gray-50 outline-none rounded" type="text" placeholder="Branch Name" v-model="form.name">
                  </div>
                  <div class="mb-4 w-full lg:w-1/2 px-2">
                    <input class="w-full p-4 text-xs bg-gray-50 outline-none rounded" type="text" placeholder="Branch City" v-model="form.city">
                  </div>
                </div>
                <div class="mb-4 flex p-4 bg-gray-50 rounded">
                  <input class="w-full text-xs bg-gray-50 outline-none" placeholder="Branch Address" v-model="form.address">
                </div>
                <div class="flex flex-wrap -mx-2">
                
                  <div class="mb-4 w-full lg:w-1/2 px-2">
                    <input class="w-full p-4 text-xs bg-gray-50 outline-none rounded" type="text" placeholder="Branch State" v-model="form.state">
                  </div>

                  <div class="mb-4 w-full lg:w-1/2 px-2">
                    <input class="w-full p-4 text-xs bg-gray-50 outline-none rounded" type="text" placeholder="Branch Postcode" v-model="form.postcode">
                  </div>
				  </div>
                  <button>
                  </button>
                <div class="text-center">
                  <button class="mb-2 w-full py-4 bg-green-600 hover:bg-green-700 rounded text-sm font-bold text-gray-50 transition duration-200" @click="submit">Open your branch here!</button>
                </div>
            </div>
            </div>
        </div>
      </div>
    </div>
  </div>
  <div class="hidden navbar-menu fixed top-0 left-0 bottom-0 w-5/6 max-w-sm z-50">
    <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
    <nav class="relative flex flex-col py-6 px-6 h-full w-full bg-white border-r overflow-y-auto">
      <div class="flex items-center mb-8">
        <a class="mr-auto text-3xl font-bold leading-none" href="#">
          <img class="h-10" src="atis-assets/logo/atis/atis-mono-black.svg" alt="" width="auto">
        </a>
        <button class="navbar-close">
          <svg class="h-6 w-6 text-gray-400 cursor-pointer hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
          </svg>
        </button>
      </div>
      <div class="mt-auto">
        <div class="pt-6"><a class="block px-4 py-3 mb-3 leading-loose text-xs text-center font-semibold leading-none bg-gray-50 hover:bg-gray-100 rounded-l-xl rounded-t-xl" href="#">Sign In</a><a class="block px-4 py-3 mb-2 leading-loose text-xs text-center text-white font-semibold bg-green-600 hover:bg-green-700 rounded-l-xl rounded-t-xl" href="#">Sign Up</a></div>
        <p class="my-4 text-xs text-center text-gray-400">
          <span>© 2020 All rights reserved.</span>
        </p>
        <div class="text-center">
          <a class="inline-block px-1" href="#">
            <img src="atis-assets/social/facebook.svg" alt="">
          </a>
          <a class="inline-block px-1" href="#">
            <img src="atis-assets/social/twitter.svg" alt="">
          </a>
          <a class="inline-block px-1" href="#">
            <img src="atis-assets/social/instagram.svg" alt="">
          </a>
        </div>
      </div>
    </nav>
  </div>
</section>
</template>

<script>
    import Navbar from '@/Components/Navbar';
	import {useForm} from '@inertiajs/inertia-vue3'
    export default {
		setup()
		{
			const form = useForm({
				name: '',
				address: '',
				city: '',
				state: '',
				postcode: '',
			})	
			return {form}
		},
        components: {
            Navbar
        },
		methods: {
			submit()
			{
				this.form.post('/branches/store');
			}
		}
    }
</script>

