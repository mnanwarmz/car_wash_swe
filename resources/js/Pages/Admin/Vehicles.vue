<template>
<link
	href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
	rel="stylesheet">

<Navbar></Navbar>
<div class="flex flex-row min-h-auto">
    <!-- Sidebar -->
    <Sidebar></Sidebar>
    <!-- End Sidebar -->
<div class="px-16 py-20 text-gray-700 bg-gray-200 h-auto w-screen">
    <h1 class="text-black text-4xl flex flex-wrap justify-center ">Vehicles</h1>
    <section class="container mx-auto p-6 font-mono">
        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
            <div class="w-full md:overflow-x-auto">
            <table class="w-full">
                <thead>
                <tr class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
                    <th class="text-center px-4 py-3">Plate Number</th>
                    <th class="text-center px-4 py-3">Brand</th>
                    <th class="text-center px-4 py-3">Model</th>
                    <th class="text-center px-4 py-3">Actions</th>
                </tr>
                </thead>
                <tbody class="bg-white">
                <tr class="text-gray-700" v-for="vehicle in vehicles" :key="vehicle">
                    <td class="px-4 py-3 border">
                    <div class="flex items-center text-sm">
                        <div>
                        <p class="font-semibold text-black">{{vehicle.plate_no}}</p>
                        </div>
                    </div>
                    </td>
                    <td class="px-4 py-3 text-sm font-semibold border">{{vehicle.brand}}</td>
                    <td class="px-4 py-3 text-sm border">
                    <span class="px-2 py-1 font-semibold leading-tight text-gray-600 rounded-sm"> {{vehicle.model}} </span>
                    </td>
                    <td class="px-4 py-3 text-sm border">
                        <a href="#" class="h-1 text-gray-400 hover:text-gray-100">
							<i class="material-icons-outlined text-base">visibility</i>
						</a>
						<a href="#" class="text-gray-400 hover:text-gray-100 ml-2">
							<i class="material-icons-outlined text-base">edit</i>
						</a>
						<a href="#" class="text-gray-400 hover:text-gray-100 ml-3">
							<i class="material-icons-round text-base">delete_outline</i>
						</a>
                    </td>
                </tr>
                </tbody>
            </table>
            </div>
        </div>
        </section>
</div>
</div>
</template>

<script>
import Navbar from '@/Components/Navbar'
import Sidebar from '@/Components/Sidebar'
export default {
    components: {
        Sidebar,
        Navbar,
    },

    props: [
        'vehicles'
    ]
}
</script>

<style>
	tr td:nth-child(n+4),
	tr th:nth-child(n+4) {
		border-radius: 0 .625rem .625rem 0;
	}

	tr td:nth-child(1),
	tr th:nth-child(1) {
		border-radius: .625rem 0 0 .625rem;
	}
</style>
