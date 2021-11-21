<template>
    <Navbar></Navbar>
    <!-- component -->

	<header class="bg-white shadow" >
		<div class="max-w-7xl mx-auto py-6 sm:px-6 ">
			<h2 name="header" class="font-semibold text-xl text-gray-800 leading-tight">Vehicle Registration</h2>
		</div>
	</header>
    <div class="py-5">
    </div>
  <div class="mt-10 sm:mt-0">
    <div class="md:grid md:grid-cols-3 md:ml-10">
      <div class="mt-5 md:mt-0 md:col-span-2">
          <div class="shadow overflow-hidden sm:rounded-md bg-green-300">
		  <div class="bg-blue-200 py-1 rounded-md"></div>
            <div class="px-4 py-10 ">
              <div class="grid grid-cols-6 gap-6">

                <div class="col-span-6 sm:col-span-3">
                  <label for="country" class="block text-sm font-medium text-gray-700"><b>Car Type</b></label>
                  <select v-model="form.vehicle_type_id" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option v-for="vehicle_type in vehicle_types" :key="vehicle_type" :value="`${vehicle_type.id}`">{{ vehicle_type.name }}</option>
                  </select>
                </div>

				<div class="col-span-6 sm:col-span-3">
                  <label for="first-name" class="block text-sm font-medium text-gray-700"><b>Car Brand</b></label>
                  <input  type="text" v-model="form.brand" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                </div>

                <div class="col-span-6 sm:col-span-3">
                  <label for="last-name" class="block text-sm font-medium text-gray-700"><b>Car Model</b></label>
                  <input type="text" v-model="form.model" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                </div>

                <div class="col-span-6 sm:col-span-3">
                  <label for="email-address" class="block text-sm font-medium text-gray-700"><b>Plate Number</b></label>
                  <input type="text" v-model="form.plate_no" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                </div>
              </div>
            </div>
            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
              <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" @click="submitForm">
                Submit
              </button>
            </div>
          </div>
      </div>
	  <div class="shadow overflow-hidden sm:rounded-md sm:mx-10 sm:mb-16 bg-green-300" id="form">
           <div class="px-4 py-3 bg-blue-900 text-right sm:px-6 m-8 text-white">
                <p class="text-center font-bold text-2xl  "><b>Vehicle Details</b></p>
                <p class="text-center text-5xl mt-4 ">{{this.plate_no}}</p>
                <p class="text-center text-xl mt-4">Brand : {{this.brand}}</p>
                <p class="text-center text-xl mt-4">Model : {{this.model}}</p>
                <p class="text-center text-xl mt-4">Type : {{this.vehicle_type_name}}</p>
                <p class="text-center text-xl mt-4 ">Rate : RM {{this.price}}</p>
                
            </div>
      </div>
    </div>
  </div>
</template>

<script>
import { useForm } from '@inertiajs/inertia-vue3';
import Navbar from '@/Components/Navbar';
export default {
    props:["vehicle_types"],
    components: {
      Navbar,
    },
    setup(){
        const form = useForm({
            plate_no: null,
            brand: null,
            model: null,

			
            vehicle_type_id: null,
        })
        return {form}
    },
	data:()=>({
		price: null,
		plate_no: null,
		brand: null,
		model: null,
		vehicle_type_name: null,
	}),
	updated(){
		this.price = this.vehicle_types.find(vehicle_type => vehicle_type.id == this.form.vehicle_type_id).price;
		this.plate_no = this.form.plate_no;
		this.brand = this.form.brand;
		this.model = this.form.model;
		this.vehicle_type_name = this.vehicle_types.find(vehicle_type => vehicle_type.id == this.form.vehicle_type_id).name;
	},
    methods: {
        submitForm() {
            this.form.post('/vehicles/create')
        }
    }
}
</script>

<style>

</style>
