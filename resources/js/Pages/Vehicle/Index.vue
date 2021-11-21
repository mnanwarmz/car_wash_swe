<template>
<Navbar></Navbar>
  <GDialog v-model="this.submitModal" v-cloak max-width="500">

	</GDialog>
  <div class="z-0 bg-gray-50 flex flex-row h-screen w-screen">
    <Sidebar></Sidebar>
    <div class="container mx-auto px-4">
      <div class="mb-16 text-center">
        <h2 class="mt-10 text-4xl lg:text-5xl font-bold font-heading">Your vehicles</h2>
        <div class="mt-10"><a class="inline-block py-2 px-6 rounded-b-xl rounded-t-xl bg-green-600 hover:bg-green-700 text-gray-50 font-bold leading-loose outline-none transition duration-200" :href="`/vehicles/create`">Add a Vehicle</a></div>
      </div>
      <div class="flex flex-wrap justify-center ">
        <div class="flex flex-wrap w-full lg:w-1/2">

          <div class="w-full px-3 mb-5" v-for="vehicle in vehicles" :key="vehicle">
            <a href="#">
                <div class="relative h-64 mx-auto rounded flex flex-wrap justify-center" id="list">
                    <div class="absolute inset-0 p-6 flex flex-col items-start">
                        <span class="mt-90 text-xl lg:text-2xl text-gray-300 font-bold">
                            {{ vehicle.plate_no.toUpperCase()}}
                        </span>
                        <p class="text-xl lg:text-2xl text-white font-bold">
                            {{ vehicle.brand }} {{vehicle.model}}
                        </p>
                        <p class="text-xl lg:text-2xl text-white font-bold">{{ vehicle.type.name }}</p>
                        <a :href="`/vehicles/${vehicle.id}`" class="mt-auto ml-auto py-1 px-3 text-sm bg-white rounded-full text-green-600 uppercase font-bold">View Vehicle</a>
                        <!-- </a> -->
                    </div>
                </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import Navbar from '@/Components/Navbar';
import Sidebar from '@/Components/Sidebar';
import { useForm } from '@inertiajs/inertia-vue3';
import { GDialog, plugin } from "gitart-vue-dialog";
import "gitart-vue-dialog/dist/style.css";

export default {
  setup() {

  },
  props:["vehicles"],
  components: {
      Navbar,
	  Sidebar,
	  GDialog
  },
  data:() => ({
	  vehicleModal: false,
  }),
  methods: {
	toggleModal() {
	  this.submitModal = true;
	}
  }
}
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
