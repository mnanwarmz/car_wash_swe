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
    <h1 class="text-black text-4xl flex flex-wrap justify-center ">APPOINTMENTS HISTORY</h1>
    <section class="container mx-auto p-6 font-mono">
        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
            <div class="w-full md:overflow-y-auto">
                <h1 class="text-black text-2xl flex flex-wrap justify-center">Open Appointments</h1>
                <table class="w-full">
                    <thead>
                    <tr class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
                        <th class="px-4 py-3">Id</th>
                        <th class="px-4 py-3">Name</th>
                        <th class="px-4 py-3">Start At</th>
                        <th class="px-4 py-3">End At</th>
                        <th class="px-4 py-3">Actions</th>
                    </tr>
                    </thead>
                    <tbody class="bg-white">
                    <tr class="text-gray-700" v-for="appointment in appointments" :key="appointment">
                        <td class="px-4 py-3 border">
                        {{ appointment.id }}
                        </td>
                        <td class="px-4 py-3 border">
                        <div class="flex items-center text-sm">
                            <div class="relative w-8 h-8 mr-3 rounded-full md:block">
                            <img class="object-cover w-full h-full rounded-full" src="https://images.pexels.com/photos/5212324/pexels-photo-5212324.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260" alt="" loading="lazy" />
                            <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                            </div>
                            <div>
                            <p class="font-semibold text-black"></p>
                            </div>
                        </div>
                        </td>
                        <td class="px-4 py-3 text-sm font-semibold border">{{appointment.start}}</td>
                        <td class="px-4 py-3 text-sm font-semibold border">
                    {{appointment.end}}
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
    <section class="container mx-auto p-6 font-mono">
        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
            <div class="mt-3 w-full md:overflow-y-auto">
                <h1 class="text-black text-2xl flex flex-wrap justify-center">In-Progress Appointments</h1>
                <table class="w-full">
                    <thead>
                    <tr class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
                        <th class="px-4 py-3">Id</th>
                        <th class="px-4 py-3">Name</th>
                        <th class="px-4 py-3">Start At</th>
                        <th class="px-4 py-3">End At</th>
                        <th class="px-4 py-3">Actions</th>
                    </tr>
                    </thead>
                    <tbody class="bg-white">
                    <tr class="text-gray-700" v-for="appointment in appointments" :key="appointment">
                        <td class="px-4 py-3 border">
                        {{ appointment.id }}
                        </td>
                        <td class="px-4 py-3 border">
                        <div class="flex items-center text-sm">
                            <div class="relative w-8 h-8 mr-3 rounded-full md:block">
                            <img class="object-cover w-full h-full rounded-full" src="https://images.pexels.com/photos/5212324/pexels-photo-5212324.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260" alt="" loading="lazy" />
                            <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                            </div>
                            <div>
                            <p class="font-semibold text-black"></p>
                            </div>
                        </div>
                        </td>
                        <td class="px-4 py-3 text-sm font-semibold border">{{appointment.start}}</td>
                        <td class="px-4 py-3 text-sm font-semibold border">
                    {{appointment.end}}
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
        Navbar
    },

    props: [
        'appointments'
    ]
}
</script>

<style>
	tr td:nth-child(n+5),
	tr th:nth-child(n+5) {
		border-radius: 0 .625rem .625rem 0;
	}

	tr td:nth-child(1),
	tr th:nth-child(1) {
		border-radius: .625rem 0 0 .625rem;
	}
</style>
