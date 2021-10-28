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
  <div class="skew skew-top mr-for-radius">
    <svg class="h-8 md:h-12 lg:h-20 w-full text-gray-50" viewBox="0 0 10 10" preserveAspectRatio="none">
      <polygon fill="currentColor" points="0 0 10 10 0 10"></polygon>
    </svg>
  </div>
  <div class="skew skew-top ml-for-radius">
    <svg class="h-8 md:h-12 lg:h-20 w-full text-gray-50" viewBox="0 0 10 10" preserveAspectRatio="none">
      <polygon fill="currentColor" points="0 10 10 0 10 10"></polygon>
    </svg>
  </div>
  <div class="py-20 bg-gray-50 radius-for-skewed">
    <div class="container mx-auto px-4">
      <div class="mb-16 text-center">
        <h2 class="text-4xl lg:text-5xl font-bold font-heading">Your vehicles</h2>
      </div>
      <div class="flex flex-wrap justify-center -mx-3">
        <div class="flex flex-wrap w-full lg:w-1/2">
          <div class="w-full px-3 mb-5">
            <a href="#">
                <div class="relative h-64 mx-auto rounded flex flex-wrap justify-center" id="list">
                    <!-- <div class="absolute inset-0 bg-gray-900 opacity-75 rounded"></div> -->
                    <div class="absolute inset-0 p-6 flex flex-col items-start">
                        <!-- <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="car-side" class="svg-inline--fa fa-car-side fa-w-20 text-white h-10 w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                            <path fill="currentColor" d="M544 192h-16L419.22 56.02A64.025 64.025 0 0 0 369.24 32H155.33c-26.17 0-49.7 15.93-59.42 40.23L48 194.26C20.44 201.4 0 226.21 0 256v112c0 8.84 7.16 16 16 16h48c0 53.02 42.98 96 96 96s96-42.98 96-96h128c0 53.02 42.98 96 96 96s96-42.98 96-96h48c8.84 0 16-7.16 16-16v-80c0-53.02-42.98-96-96-96zM160 432c-26.47 0-48-21.53-48-48s21.53-48 48-48 48 21.53 48 48-21.53 48-48 48zm72-240H116.93l38.4-96H232v96zm48 0V96h89.24l76.8 96H280zm200 240c-26.47 0-48-21.53-48-48s21.53-48 48-48 48 21.53 48 48-21.53 48-48 48z">
                            </path>
                        </svg> -->
                        <span class="mt-90 text-xl lg:text-2xl text-gray-300 font-bold">WWE 1766</span>
                        <p class="text-xl lg:text-2xl text-white font-bold">Audi A5</p>
                        <p class="text-xl lg:text-2xl text-white font-bold">Gray</p>
                        <p class="text-xl lg:text-2xl text-white font-bold">Payment Status  : Pending</p>
                        <span class="mt-auto ml-auto py-1 px-3 text-sm bg-white rounded-full text-green-600 uppercase font-bold">View Vehicle</span>
                    </div>
                </div>
            </a>
          </div>
          <div class="w-full px-3 mb-5">
            <a href="#">
                <div class="relative h-64 mx-auto rounded" id="list">
                    <!-- <div class="absolute inset-0 bg-gray-900 opacity-75 rounded"></div> -->
                    <div class="absolute inset-0 p-6 flex flex-col items-start">
                        <!-- <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="car-side" class="svg-inline--fa fa-car-side fa-w-20 text-white h-10 w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                            <path fill="currentColor" d="M544 192h-16L419.22 56.02A64.025 64.025 0 0 0 369.24 32H155.33c-26.17 0-49.7 15.93-59.42 40.23L48 194.26C20.44 201.4 0 226.21 0 256v112c0 8.84 7.16 16 16 16h48c0 53.02 42.98 96 96 96s96-42.98 96-96h128c0 53.02 42.98 96 96 96s96-42.98 96-96h48c8.84 0 16-7.16 16-16v-80c0-53.02-42.98-96-96-96zM160 432c-26.47 0-48-21.53-48-48s21.53-48 48-48 48 21.53 48 48-21.53 48-48 48zm72-240H116.93l38.4-96H232v96zm48 0V96h89.24l76.8 96H280zm200 240c-26.47 0-48-21.53-48-48s21.53-48 48-48 48 21.53 48 48-21.53 48-48 48z">
                            </path>
                        </svg> -->
                        <span class="mt-90 text-xl lg:text-2xl text-gray-300 font-bold">WWE 1766</span>
                        <p class="text-xl lg:text-2xl text-white font-bold">Audi A5</p>
                        <p class="text-xl lg:text-2xl text-white font-bold">Gray</p>
                        <p class="text-xl lg:text-2xl text-white font-bold">Payment Status  : Pending</p>
                        <span class="mt-auto ml-auto py-1 px-3 text-sm bg-white rounded-full text-green-600 uppercase font-bold">View Vehicle</span>
                    </div>
                </div>
            </a>
          </div>
          <div class="w-full px-3 mb-5">
            <a href="#">
                <div class="relative h-64 mx-auto rounded" id="list">
                    <!-- <div class="absolute inset-0 bg-gray-900 opacity-75 rounded"></div> -->
                    <div class="absolute inset-0 p-6 flex flex-col items-start">
                        <!-- <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="car-side" class="svg-inline--fa fa-car-side fa-w-20 text-white h-10 w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                            <path fill="currentColor" d="M544 192h-16L419.22 56.02A64.025 64.025 0 0 0 369.24 32H155.33c-26.17 0-49.7 15.93-59.42 40.23L48 194.26C20.44 201.4 0 226.21 0 256v112c0 8.84 7.16 16 16 16h48c0 53.02 42.98 96 96 96s96-42.98 96-96h128c0 53.02 42.98 96 96 96s96-42.98 96-96h48c8.84 0 16-7.16 16-16v-80c0-53.02-42.98-96-96-96zM160 432c-26.47 0-48-21.53-48-48s21.53-48 48-48 48 21.53 48 48-21.53 48-48 48zm72-240H116.93l38.4-96H232v96zm48 0V96h89.24l76.8 96H280zm200 240c-26.47 0-48-21.53-48-48s21.53-48 48-48 48 21.53 48 48-21.53 48-48 48z">
                            </path>
                        </svg> -->
                        <span class="mt-90 text-xl lg:text-2xl text-gray-300 font-bold">WWE 1766</span>
                        <p class="text-xl lg:text-2xl text-white font-bold">Audi A5</p>
                        <p class="text-xl lg:text-2xl text-white font-bold">Gray</p>
                        <p class="text-xl lg:text-2xl text-white font-bold">Payment Status  : Pending</p>
                        <span class="mt-auto ml-auto py-1 px-3 text-sm bg-white rounded-full text-green-600 uppercase font-bold">View Vehicle</span>
                    </div>
                </div>
            </a>
          </div>
        </div>
        <div class="flex flex-wrap w-full lg:w-1/2">
          <div class="w-full px-3 mb-5">
            <a href="#">
              <div class="relative h-64 mx-auto rounded" id="list">
                <!-- <div class="absolute inset-0 bg-gray-900 opacity-75 rounded"></div> -->
                <div class="absolute inset-0 p-6 flex flex-col items-start">
                    <span class="mt-90 text-xl lg:text-2xl text-gray-300 font-bold">WWE 1766</span>
                    <p class="text-xl lg:text-2xl text-white font-bold">Audi A5</p>
                    <p class="text-xl lg:text-2xl text-white font-bold">Gray</p>
                    <p class="text-xl lg:text-2xl text-white font-bold">Payment Status  : Pending</p>
                    <span class="mt-auto ml-auto py-1 px-3 text-sm bg-white rounded-full text-green-600 uppercase font-bold">View Vehicle</span>
                </div>
              </div>
            </a>
          </div>
          <div class="w-full px-3 mb-5">
            <a href="#">
              <div class="relative h-64 mx-auto rounded" id="list">
                <!-- <div class="absolute inset-0 bg-gray-900 opacity-75 rounded"></div> -->
                <div class="absolute inset-0 p-6 flex flex-col items-start">
                    <span class="mt-90 text-xl lg:text-2xl text-gray-300 font-bold">WWE 1766</span>
                    <p class="text-xl lg:text-2xl text-white font-bold">Audi A5</p>
                    <p class="text-xl lg:text-2xl text-white font-bold">Gray</p>
                    <p class="text-xl lg:text-2xl text-white font-bold">Payment Status  : Pending</p>
                    <span class="mt-auto ml-auto py-1 px-3 text-sm bg-white rounded-full text-green-600 uppercase font-bold">View Vehicle</span>
                </div>
              </div>
            </a>
          </div>
          <div class="w-full px-3 mb-5">
            <a href="#">
              <div class="relative h-64 mx-auto rounded" id="list">
                <!-- <div class="absolute inset-0 bg-gray-900 opacity-75 rounded"></div> -->
                <div class="absolute inset-0 p-6 flex flex-col items-start">
                    <span class="mt-90 text-xl lg:text-2xl text-gray-300 font-bold">WWE 1766</span>
                    <p class="text-xl lg:text-2xl text-white font-bold">Audi A5</p>
                    <p class="text-xl lg:text-2xl text-white font-bold">Gray</p>
                    <p class="text-xl lg:text-2xl text-white font-bold">Payment Status  : Pending</p>
                    <span class="mt-auto ml-auto py-1 px-3 text-sm bg-white rounded-full text-green-600 uppercase font-bold">View Vehicle</span>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="mt-10"><a class="inline-block py-2 px-6 rounded-l-xl rounded-t-xl bg-green-600 hover:bg-green-700 text-gray-50 font-bold leading-loose outline-none transition duration-200" href="#">View More Articles</a></div>
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
