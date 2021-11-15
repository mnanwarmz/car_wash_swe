<template>
<Navbar></Navbar>
 <p class="text-center text-3xl m-8">Make an Appointment</p>
<div class="md:container md:mx-auto px-4 bg-green-200 m-8">
 <div class="hidden sm:block" aria-hidden="true">
    <div class="py-5">
      <div class="border-t border-gray-200" />
    </div>
  </div>
  <GDialog v-model="value">
  Content
</GDialog>

  <h1 class="flex justify-center">Make an Appointment</h1>
  <div class="mt-10 sm:mt-0">
    <div class="md:grid md:grid-cols-3 md:ml-10">
      <div class="mt-5 md:mt-0 md:col-span-2">
        <form action="#" method="POST">
          <div class="shadow overflow-hidden sm:rounded-md bg-green-300">
            <div class="px-4 py-5 sm:p-6">
              <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-3">
                  <label for="first-name" class="block text-sm font-medium text-gray-700"><b>Registered Vehicle</b></label>
                  <select v-if="vehicles" v-model="vehicleSelected" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option v-for="vehicle in vehicles" :key="vehicle.id">
                        {{ vehicle.plate_no.toUpperCase() }}</option>
                  </select>

                </div>

                <div class="col-span-6 sm:col-span-3">
                  <label for="country" class="block text-sm font-medium text-gray-700 mb-1">Time Slot</label>
                  <Datepicker v-model="date"></Datepicker>

                </div>
                <div class="col-span-6 sm:col-span-6">
                  <label for="country" class="block text-sm font-medium text-gray-700">Appointment Type</label>
                  <Multiselect
                  v-model="values"
                  mode="multiple"
                  valueProp="price"
                    label="name"
                  :options="this.appointment_types"/>
                </div>

                <div class="col-span-6 sm:col-span-6">
                  <label for="country" class="block text-sm font-medium text-gray-700">Location</label>
                  <select v-model="locationSelected" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option v-for="location in locations" :key="location">
                        {{ location.address }}
                    </option>
                  </select>
                </div>

              </div>
                <div class="flex mt-8">
                    <div class="max-w-2xl rounded-lg shadow-xl bg-gray-50">
                        <div class="m-4">
                            <label class="inline-block mb-2 text-gray-500">File Upload</label>
                            <div class="flex items-center justify-center w-full">
                                <label
                                    class="flex flex-col w-full h-32 border-4 border-blue-200 border-dashed hover:bg-gray-100 hover:border-gray-300">
                                    <div class="flex flex-col items-center justify-center pt-7">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-gray-400 group-hover:text-gray-600"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                                        </svg>
                                        <p class="pt-1 text-sm tracking-wider text-gray-400 group-hover:text-gray-600">
                                            Attach a file</p>
                                    </div>
                                    <input type="file" class="opacity-0" />
                                </label>
                            </div>
                        </div>
                        <div class="flex justify-center p-2">
                            <button class="w-full px-4 py-2 text-white bg-blue-500 rounded shadow-xl">Create</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
              <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Create Appointment
              </button>
            </div>
          </div>
        </form>
      </div>
      <div class="shadow overflow-hidden sm:rounded-md sm:mx-10 sm:mb-16 bg-green-300" id="form">
        <p class="text-center text-2xl "><u><b>Services</b></u></p>
        <p class="text-center text-base mt-2 ">Appointment Type :-</p>
        <p class="text-center text-base mt-8">Full car wash (Available only at Branches) : </p>
        <p class="text-center text-base">Car wash with Vacuum and Polish</p>
        <p class="text-center text-base mt-8 ">Wash only :</p>
        <p class="text-center text-base">Car wash without vacuum or polish</p>
        <p class="text-center text-base mt-8 ">Wash + Vacuum :</p>
        <p class="text-center text-base">Car wash with vacuuming servics</p>
      </div>
    </div>

  </div>


</template>



<script>

import Navbar from "@/Components/Navbar";
import JetDropdown from '@/Jetstream/Dropdown.vue';
import Multiselect from '@vueform/multiselect';
import Datepicker from 'vue3-date-time-picker';
import { GDialog, plugin } from "gitart-vue-dialog";
import "gitart-vue-dialog/dist/style.css";
import 'vue3-date-time-picker/dist/main.css'

export default {
    props: ["appointments","appointment_types","locations","vehicles"],
    computed: {
        total()
        {
            return this.values.reduce((a, b) => a + b, 0);
        },
    },
    components: {
        Navbar,
        JetDropdown,
        Multiselect,
        Datepicker,
        GDialog,
    },
    created() {
        console.log(this.locations);
        console.log(this.vehicles);
      },
    data:() => ({
        values : [],
        value: false,
        total_price: 0,
        vehicleSelected: '',
        locationSelected: '',
        vehicles: [],
    }),
    methods() {
        return {
            registerVehicleModal()
            {
                return true;
            },
            toggleModal()
            {
                this.value = !this.value;
            },

        }
    },
};
</script>
<style src="@vueform/multiselect/themes/default.css"></style>

