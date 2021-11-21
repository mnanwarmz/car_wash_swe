<template>
<Navbar></Navbar>
	<Sidebar class="absolute z-50 h-screen"></Sidebar>
  <GDialog v-model="this.submitModal" v-cloak max-width="500">
    <div class="flex flex-col items-start p-4">
      <div class="flex items-center w-full">
        <div class="text-gray-900 font-medium text-2xl py-2">Confirm Deletion</div>
		<svg class="ml-auto fill-current text-gray-700 w-6 h-6 cursor-pointer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18">
			<path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"/>
     	</svg>
      </div>
      <hr>
      <div class="">Are you sure you want to cancel selected appointment?</div>
      <hr>
      <div class="ml-auto flex">
		<Link @click="toggleSubmitModal" :href="`/appointments/${appointmentSelected}/cancel`" method="post" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
          Confirm
        </Link>
		<div class="pr-2"></div>
        <button class="bg-transparent hover:bg-gray-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
          Cancel
        </button>
      </div>
    </div>
  </GDialog>
  <div class="ml-3 py-20 z-0 bg-gray-50 radius-for-skewed">
 <!-- <div class="py-20 bg-gray-50 radius-for-skewed"> -->
     <div class="container mx-auto px-4">
        <div class="mb-16 text-center">
            <h2 class="text-4xl lg:text-5xl font-bold font-heading">Your Appointments</h2>
            <div class="mt-10"><a class="inline-block py-2 px-6 rounded-b-xl rounded-t-xl bg-green-600 hover:bg-green-700 text-gray-50 font-bold leading-loose outline-none transition duration-200" :href="`/appointments/create`">Add an Appointment</a></div>
        </div>
           <div class="flex flex-wrap justify-center " >
             <div class="flex flex-wrap w-full lg:w-1/2">

                <div class="w-full px-3 mb-5" v-for="appointment in appointments" :key="appointment">
                    
                         <div  class="relative h-64 mx-auto rounded flex flex-wrap justify-center" id="list">
                            <div class="absolute inset-0 p-6 flex flex-col items-start">
                                    <span class="mt-90 text-xl lg:text-2xl text-gray-300 font-bold">
                                        {{appointment.start}} - {{appointment.end}}
                                    </span>
                                    <p class="text-xl lg:text-2xl text-white font-bold">
                                        {{appointment.vehicle.plate_no.toUpperCase()}}
                                    </p>
                                    <p class="text-xl lg:text-2xl text-white font-bold">
                                        {{appointment.location.address}}
                                    </p>
                                    <a @click="toggleSubmitModal(appointment.id)" class="mt-auto ml-auto py-1 px-3 text-sm bg-white rounded-full text-green-600 uppercase font-bold">Cancel Appointment</a>
                            </div>
                         </div>
                     
                </div>

             </div>
             </div>
      </div>
</div>

    <div class="skew skew-bottom mr-for-radius">
    <svg class="h-8 md:h-12 lg:h-20 w-full text-gray-50" viewBox="0 0 10 10" preserveAspectRatio="none">
      <polygon fill="currentColor" points="0 0 10 0 0 10"></polygon>
    </svg>
  </div>
  <div class="skew skew-bottom ml-for-radius">
    <svg class="h-8 md:h-12 lg:h-20 w-full text-gray-50" viewBox="0 0 10 10" preserveAspectRatio="none">
      <polygon fill="currentColor" points="0 0 10 0 10 10"></polygon>
    </svg>
  </div>

</template>

<script>
import Navbar from "@/Components/Navbar";
import Sidebar from "@/Components/Sidebar";
import { Link } from '@inertiajs/inertia-vue3'
import { GDialog, plugin } from "gitart-vue-dialog";
import "gitart-vue-dialog/dist/style.css";
export default {
     setup() {
        
     },
    props: ["appointments"],
    computed: {},
  components: {
        Navbar,
		Sidebar,
		GDialog,
		Link
    },
    created() {
    },
    data() {
        return {
			submitModal: false,
			appointmentSelected: null
		};
    },

    methods:{
		toggleSubmitModal(selectedAppointment) {
			this.submitModal = !this.submitModal;
			if(selectedAppointment) 
				this.appointmentSelected = selectedAppointment;
		},
		setAppointment(appointment) {
			this.appointmentSelected = appointment;
		},
	},
};
</script>

<style>
    #list{
        background-color: #05385B;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    }

    #list:hover{
        background: #074c7a;
    }
	
	
</style>
