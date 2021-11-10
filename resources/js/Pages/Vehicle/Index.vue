<!-- This example requires Tailwind CSS v2.0+ -->
<template>
<Navbar></Navbar>
  <!-- <div class="flex flex-col">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg" id="table">
          <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
              <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Brand
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Model
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Type
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Plate Number
            </th>
                <th scope="col" class="relative px-6 py-3">
                  <span class="sr-only">Edit</span>
                </th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
              <tr v-for="vehicle in vehicles" :key="vehicle">
                <td class="px-6 py-4 whitespace-nowrap">
                  <div class="flex items-center">
                    <div class="ml-4">
                      <div class="text-sm font-medium text-gray-900">
                        {{ vehicle.brand }}
                      </div>
                    </div>
                  </div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <div class="text-sm text-gray-900">{{ vehicle.model }}</div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full">
                    {{ vehicle.type }}
                  </span>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                  {{ vehicle.plate_no }}
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                  <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div> -->
  <div class="py-20 bg-gray-50 radius-for-skewed">
    <div class="container mx-auto px-4">
      <div class="mb-16 text-center">
        <h2 class="text-4xl lg:text-5xl font-bold font-heading">Your vehicles</h2>
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
                        <!-- <a href="/vehicles/{{ vehicle.id }}}"> -->
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
import Navbar from '@/Components/Navbar';
export default {
  setup() {

  },
  props:["vehicles"],
  components: {
      Navbar,
  },
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
