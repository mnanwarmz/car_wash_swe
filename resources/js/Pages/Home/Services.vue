<template>
    <Navbar></Navbar>
<section>
  <div class="py-20 bg-gray-50 radius-for-skewed">
    <div class="container mx-auto px-4">
      <div class="max-w-2xl mx-auto text-center mb-16">
        <h2 class="mb-2 text-4xl lg:text-5xl font-bold font-heading">SERVICES</h2>
      </div>
      <div class="flex flex-wrap -mx-4">
        <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8 lg:mb-0">
          <div class="p-8 bg-white shadow rounded">
            <div>
              <h4 class="mb-2 text-2xl font-bold text-black">Standard Wash</h4>
              <img class="w-full" src="/images/standardwash.jpg" />
              <div class="px-4 py-2">
                <div class="flex space-x-2 mt-2">
                </div>
                <p class="text-md tracking-normal">Car washes can be self-service (DIY), full-service (with attendants who wash the vehicle), or fully automated (possibly connected to a gas station).</p>
              </div>
            </div>
            <a class="inline-block text-center py-2 px-4 w-full rounded-l-xl rounded-t-xl bg-green-600 text-white font-bold leading-loose shadow-lg hover:shadow-xl transform transition duration-500 hover:scale-105" href="#">Get Started</a>
          </div>
        </div>
        <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8 lg:mb-0">
          <div class="p-8 bg-green-600 shadow rounded">
            <div>
              <h4 class="mb-2 text-2xl font-bold text-white">Standard Polish</h4>
              <img class="w-full" src="/images/standardwash.jpg" />
              <div class="px-4 py-2">
                <div class="flex space-x-2 mt-2">
                </div>
                <p class="text-md tracking-normal text-white">The polishing process removes a very small amount of the clearcoat, because it's the clearcoat that gets damaged. A polish is designed to remove that damage, whether it be in the form of water marks, acid-rain etch, fine scratches or swirl marks.</p></div>
            </div>
            <a class="inline-block text-center py-2 px-4 w-full rounded-l-xl rounded-t-xl bg-white hover:bg-gray-50 font-bold leading-loose shadow-lg hover:shadow-xl transform transition duration-500 hover:scale-105" href="#">Get Started</a>
          </div>
        </div>
        <div class="w-full lg:w-1/3 px-4">
          <div class="p-8 bg-white shadow rounded">
            <div>
              <h4 class="mb-2 text-2xl font-bold text-black">Standard Vacuum</h4>
              <img class="w-full" src="/images/standardwash.jpg" />
              <div class="px-4 py-2">
                <div class="flex space-x-2 mt-2">
                </div>
                <p class="text-md tracking-normal">The vacuuming process will ensure that no dirt will be left inside your car, best done after washing and polishing your car for maximum output</p>
              </div>
            </div>
            <a class="inline-block text-center py-2 px-4 w-full rounded-l-xl rounded-t-xl bg-green-600 text-white font-bold leading-loose shadow-lg hover:shadow-xl transform transition duration-500 hover:scale-105" href="#">Get Started</a>
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
</section>
</template>

<script>
import Navbar from "@/Components/Navbar";
export default {

    props: [],
    components: {
        Navbar,
    },
    data() {
        return {};
    },
    computed: {},

    methods() {},
};
</script>

<style>
    b{
        color: rgba(48, 172, 103, 0.51);
    }
</style>
