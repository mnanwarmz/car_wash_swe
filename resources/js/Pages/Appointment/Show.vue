<template>
<Navbar></Navbar>

			<header class="bg-white shadow" >
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <h2 name="header" class="font-semibold text-xl text-gray-800 leading-tight">Appointment Details</h2>
                </div>
            </header>
   <!-- component -->
    <div class="py-5">
      <div class="border-t border-gray-50" />
    </div>
  
  <div class="mt-10 sm:mt-0">
    <div class="">
      <div class="shadow overflow-hidden sm:rounded-md sm:mx-10 sm:mb-16 bg-green-300" id="form">
           <div class="px-4 py-3 bg-blue-900 text-right sm:px-6 m-8 text-white">
                <p class="text-center font-bold text-2xl  "><b>Order Total</b></p>
                <p class="text-center text-5xl mt-4 pt-3">RM {{appointment.price}}</p>
                <p class="text-center font-bold text-2xl  mt-8 pt-3">Services</p>
                <p v-for="type in appointment.types" :key="type" class="text-center text-xl pt-2">1x {{type.name}} <span class="font-medium "> RM{{type.price}}</span> </p>
                <p class="text-center  font-bold text-2xl pt-3">Payment Method</p>
                <button @click="checkout" class=" text-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Make Payment
                </button>
            </div>
      </div>
    </div>
  </div>
</template>
<script>
import Navbar from "@/Components/Navbar";
import { Head } from '@inertiajs/inertia-vue3';

export default {
    props: ["appointment"],
    computed: {},
    components: {
        Navbar,
		Head
    },
    created() {
    },
	setup()
	{
		// const types = this.appointment.appointment_types;
	},
    data() {
        return {
		};
    },

    methods() {},
};
</script>

