<template>
    <Navbar></Navbar>
    <!-- component -->
    <div class="skew skew-bottom mr-for-radius">

  </div>
  <div class="hidden sm:block" aria-hidden="true">
    <div class="py-5">
      <div class="border-t border-gray-200" />
    </div>
  </div>

  <h1 class="flex justify-center">Register Your Vehicle</h1>
  <div class="mt-10 sm:mt-0">
    <div class="md:grid md:grid-cols-3 md:ml-10">
      <div class="mt-5 md:mt-0 md:col-span-2">
        <form action="#" method="POST">
          <div class="shadow overflow-hidden sm:rounded-md bg-green-300">
            <div class="px-4 py-5 sm:p-6">
              <div class="grid grid-cols-6 gap-6">
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

                <div class="col-span-6 sm:col-span-3">
                  <label for="country" class="block text-sm font-medium text-gray-700"><b>Car Type</b></label>
                  <select v-model="form.vehicle_type_id" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option v-for="vehicle_type in vehicle_types" :key="vehicle_type" :value="`${vehicle_type.id}`">{{ vehicle_type.name }}</option>
                  </select>
                </div>

                <!-- <div class="col-span-6">
                  <label for="street-address" class="block text-sm font-medium text-gray-700">Street address</label>
                  <input type="text" name="street-address" id="street-address" autocomplete="street-address" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                </div>

                <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                  <label for="city" class="block text-sm font-medium text-gray-700">City</label>
                  <input type="text" name="city" id="city" autocomplete="address-level2" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                </div>

                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                  <label for="region" class="block text-sm font-medium text-gray-700">State / Province</label>
                  <input type="text" name="region" id="region" autocomplete="address-level1" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                </div>

                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                  <label for="postal-code" class="block text-sm font-medium text-gray-700">ZIP / Postal code</label>
                  <input type="text" name="postal-code" id="postal-code" autocomplete="postal-code" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                </div> -->
              </div>

                <h1 class="mt-8">Upload a picture of your car</h1>
                <div class="flex">
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
              <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" @click="submitForm">
                Submit
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
    methods: {
        submitForm() {
            this.form.post('/vehicles/create')
        }
    }
}
</script>

<style>

</style>
