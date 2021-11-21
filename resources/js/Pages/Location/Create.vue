<template>
    <Navbar></Navbar>
    <!-- component -->

	<header class="bg-gray-100 shadow" >
		<div class="max-w-7xl mx-auto py-6 sm:px-6 ">
			<h2 name="header" class="font-semibold text-xl text-gray-800 leading-tight flex justify-center">Addres Registration</h2>
		</div>
	</header>
  <div class="mt-10 sm:mt-0 bg-gray-100 h-screen">
    <div class="md:grid md:grid-cols-3 md:ml-10">
      <div class="mt-5 md:mt-0 md:col-span-2">
          <div class="shadow overflow-hidden sm:rounded-md bg-green-300">
            <div class="px-4 py-5 sm:p-6">
              <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-3">
                  <label for="name" class="block text-sm font-medium text-gray-700"><b>Name</b></label>
                  <input  type="text" v-model="form.name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                </div>

                <div class="col-span-3 sm:col-span-2">
                  <label for="city" class="block text-sm font-medium text-gray-700"><b>City</b></label>
                  <input type="text" v-model="form.city" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                </div>

                <div class="col-span-3 sm:col-span-2">
                  <label for="state" class="block text-sm font-medium text-gray-700"><b>State</b></label>
                  <input type="text" v-model="form.state" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                </div>

                <div class="col-span-3 sm:col-span-2">
                  <label for="postcode" class="block text-sm font-medium text-gray-700"><b>Postcode</b></label>
                  <input type="text" v-model="form.postcode" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                </div>

                <div class="col-span- sm:col-span-full">
                  <label for="address" class="block text-sm font-medium text-gray-700"><b>Address</b></label>
                  <input type="text" v-model="form.address" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
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
                <p class="text-center font-bold text-2xl  "><b>Address Details</b></p>
                <!-- <p class="text-center text-5xl mt-4 ">{{this.plate_no}}</p> -->
                <p class="text-center text-xl mt-4">Name : {{this.name}}</p>
                <p class="text-center text-xl mt-4">City : {{this.city}}</p>
                <p class="text-center text-xl mt-4">State : {{this.state}}</p>
                <p class="text-center text-xl mt-4 ">Address : {{this.address}}</p>
                <p class="text-center text-xl mt-4 ">Postcode : {{this.postcode}}</p>
            </div>
      </div>
    </div>
  </div>
</template>

<script>
import { useForm } from '@inertiajs/inertia-vue3';
import Navbar from '@/Components/Navbar';
export default {
    props:["locations"],
    components: {
      Navbar,
    },
    setup(){
        const form = useForm({
            name: null,
            city: null,
            state: null,
            address: null,
            postcode: null,
        })
        return {form}
    },
	data:()=>({
		name: null,
        city: null,
        state: null,
        address: null,
        postcode: null,
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
            this.form.post('/location/create')
        }
    }
}
</script>

<style>

</style>
