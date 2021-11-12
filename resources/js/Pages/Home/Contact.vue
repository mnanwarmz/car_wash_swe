<template>
<Navbar></Navbar>
<section class="relative py-10 lg:h-screen bg-gray-50">
  <div class="hidden lg:flex items-center absolute inset-0 w-2/5 bg-white">

  </div>
  <div class="lg:absolute inset-0 flex justify-center items-center ml-auto w-full lg:w-3/5 bg-gray-50">
    <div class="container mx-auto px-4">
      <div class="max-w-md mx-auto py-10">
        <h3 class="mb-6 text-2xl">Got any question? Let’s talk about it.</h3>
        <form action="">
          <div class="mb-4 text-sm">
            <span class="mr-4 font-semibold">Department:</span>
            <label class="mr-4">
              <input class="mr-1" type="radio" name="department" value="1" checked="">
              <span>Support</span>
            </label>
            <label>
              <input class="mr-1" type="radio" name="department" value="2">
              <span>Sales</span>
            </label>
          </div>
          <div class="mb-4">
            <input class="w-full p-4 text-xs font-semibold leading-none bg-white rounded outline-none" type="text" placeholder="Subject" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%;">
          </div>
          <div class="mb-4">
            <input class="w-full p-4 text-xs font-semibold leading-none bg-white rounded outline-none" type="text" placeholder="Name">
          </div>
          <div class="mb-4">
            <input class="w-full p-4 text-xs font-semibold leading-none bg-white rounded outline-none" type="email" placeholder="name@example.com">
          </div>
          <div class="mb-4"><textarea class="w-full h-24 p-4 text-xs font-semibold leading-none resize-none bg-white rounded outline-none" type="text" placeholder="Message..."></textarea></div>
          <div class="mb-4">
            <label class="flex px-2 bg-white rounded">
              <input class="hidden" type="file" placeholder="Choose file.." name="Choose file">
              <div class="my-1 ml-auto px-4 py-3 text-xs text-white font-semibold leading-none bg-gray-500 hover:bg-gray-600 rounded cursor-pointer transition duration-200">Browse</div>
            </label>
          </div>
          <div class="flex justify-between items-center">
            <label>
              <input class="mr-1" type="checkbox" name="terms" value="1">
              <span class="text-sm font-semibold">I agree to terms and conditions.</span>
            </label>
            <button class="inline-block py-2 px-6 rounded-l-xl rounded-t-xl bg-green-600 hover:bg-green-700 text-gray-50 font-bold leading-loose transition duration-200">Get Started</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
</template>

<script>
import Navbar from '@/Components/Navbar'
export default {
    components: {
        Navbar
    },

    props: [],

    data() {
        return {};
    },

    computed: {},

    methods() {},
};
</script>
