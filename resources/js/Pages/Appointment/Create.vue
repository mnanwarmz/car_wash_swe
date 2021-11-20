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
          <div class="shadow overflow-hidden sm:rounded-md bg-green-300">
            <div class="px-4 py-5 sm:p-6">
              <div class="grid grid-cols-6 gap-6">
                <div class="col-auto sm:col-span-3">
                  <label for="first-name" class="block text-sm font-medium text-gray-700"><b>Registered Vehicle</b></label>
                  <div class="flex">
                  <select v-if="vehicles" v-model="form.vehicle_id" class=" mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option v-for="vehicle in vehicles" :key="vehicle" :value="`${vehicle.id}`" >
                        {{ vehicle.plate_no.toUpperCase() }}</option>
                  </select>
                    <button @click="value = true" class="bg-def-500 hover:bg-def-700 h-1/2 flex-2 font-bold py-2 px-4 rounded">
                        <span class="text-white text-sm">
                            <i class="fas fa-plus"></i>
                            </span>
                    </button>
                  </div>
                </div>

                  <div>
                  <label class="block text-sm font-medium text-gray-700 mb-1">Appointment Time</label>
                  <div class="relative col-span-4">
                    <vue-timepicker
                    format="h:mm A"
                    :minute-interval="30"
                    :minute-range="[0,30]"
                    v-model="form.start_at">
                    </vue-timepicker>
                    </div>
                </div>
                <!-- </div> -->
                <div class="col-span-6 sm:col-span-6">
                  <label for="country" class="block text-sm font-medium text-gray-700">Appointment Type</label>
                  <Multiselect
                  v-model="typesSelected"
                  mode="multiple"
                  valueProp="id"
                    label="name"
                  :options="appointment_types"/>
                </div>
                <div class="col-span-6 sm:col-span-6">
                  <label for="country" class="block text-sm font-medium text-gray-700">Location</label>
                  <!-- <button @click="value = true" class="bg-def-500 hover:bg-def-700 h-1/2 flex-2 font-bold py-2 px-4 rounded">
                        <span class="text-white text-sm">
                            <i class="fas fa-plus"></i>
                            </span>
                    </button> -->
                  <select v-model="form.location_id" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option v-for="location in locations" :key="location.id">
                        {{ location.address }}
                    </option>
                  </select>

                </div>

              </div>
                <div class="flex mt-8">
                    <div class="max-w-2xl rounded-lg shadow-xl bg-gray-50">

                    </div>
                </div>
            </div>
            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
              <button  class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" @click="submitForm">
                Create Appointment
              </button>
            </div>
          </div>
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

</div>
</template>
<script>
import { useForm } from '@inertiajs/inertia-vue3';
import Navbar from "@/Components/Navbar";
import JetDropdown from '@/Jetstream/Dropdown.vue';
import Multiselect from '@vueform/multiselect';
import Datepicker from 'vue3-date-time-picker';
import VueTimepicker from 'vue3-timepicker';
import moment from 'moment'
import { GDialog, plugin } from "gitart-vue-dialog";
import "gitart-vue-dialog/dist/style.css";
import 'vue3-date-time-picker/dist/main.css'
import axios from 'axios';

export default {
    props: ["appointments","appointment_types","locations","vehicles"],
    components: {
        Navbar,
        JetDropdown,
        Multiselect,
        Datepicker,
        GDialog,
        VueTimepicker,
    },
    computed: {
        total()
        {
            let tot = 0;
            this.typesSelected.forEach(element => {
                this.appointment_types.forEach(type => {
                    if(element == type.id)
                        tot += type.price;
                });
            });
            // return this.typesSelected.reduce((a, b) => a + b, 0);
            return tot;
        },
    },
    data:() => ({
        typesSelected : [],
        vehcleRegisterModal: false,
        LocationRegisterModal: false,
        total_price: 0,
        vehicles: [],
    }),
    setup()
    {
        let form = {
                start_at: null,
                end_at: null,
                location_id: null,
                vehicle_id: null,
                appointment_type_ids: null,
                price:null,
                status:1,
        };
        // const form = useForm({
        //         start_at: null,
        //         end_at: null,
        //         location_id: null,
        //         vehicle_id: null,
        //         appointment_type_ids: null,
        //         price:null,
        //         status:1,
        // });
        return { form }
    },
    updated()
    {
        // this.form.start_at = moment(form.start_at).format('YYYY-MM-DD');
        // this.form.end_at = moment(form.start_at).add(30,'m');
        this.form.end_at = this.form.start_at

        this.form.price = this.total;
        this.form.appointment_type_ids = this.typesSelected;
        console.log(this.form);
    },
    methods: {
            // registerVehicleModal()
            // {
            //     return true;
            // },
            // toggleModal()
            // {
            //     this.value = !this.value;
            // },
            submitForm()
            {
                axios.post("/appointments",{
                    start_at: this.form.start_at,
                    end_at: this.form.end_at,
                    location_id: this.form.location_id,
                    vehicle_id: this.form.vehicle_id,
                    appointment_type_ids: this.form.appointment_type_ids,
                    price: this.form.price,
                    status: this.form.status,
                });
            },
            // submitForm()
            // {
            //     this.form.post("/appointments");
            // },
    },
};
</script>
<style src="@vueform/multiselect/themes/default.css"></style>

