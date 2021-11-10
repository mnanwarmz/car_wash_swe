<!-- This example requires Tailwind CSS v2.0+ -->
<template>
<Navbar></Navbar>
  <div class="py-20 bg-gray-50 radius-for-skewed">
    <div class="container mx-auto px-4">
      <div class="mb-16 text-center">
        <h2 class="text-4xl lg:text-5xl font-bold font-heading">Your Saved Locations</h2>
      </div>
      <div class="flex flex-wrap justify-center ">
        <div class="flex flex-wrap w-full lg:w-1/2">

          <div class="w-full px-3 mb-5" v-for="location in locations" :key="location">
            <a href="#">
                <div class="relative h-64 mx-auto rounded flex flex-wrap justify-center" id="list">
                    <div class="absolute inset-0 p-6 flex flex-col items-start">
                        <span class="mt-90 text-xl lg:text-2xl text-gray-300 font-bold">
                            {{ location.name}}
                        </span>
                        <p class="text-xl lg:text-2xl text-white font-bold">
                            {{ location.city }} {{location.state}}
                        </p>
                        <p class="text-xl lg:text-2xl text-white font-bold">{{ location.address }}</p>
                        <span class="mt-auto ml-auto py-1 px-3 text-sm bg-white rounded-full text-green-600 uppercase font-bold">View Location</span>
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
  props:["locations"],
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
