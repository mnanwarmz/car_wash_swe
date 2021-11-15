<template>
<link
	href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
	rel="stylesheet">


<div class="flex flex-row min-h-auto">
    <!-- Sidebar -->
    <Sidebar></Sidebar>
    <!-- End Sidebar -->
<div class="px-16 py-20 text-gray-700 bg-gray-200 h-auto w-screen">
    <h1 class="text-black text-4xl flex flex-wrap justify-center ">Users</h1>
    <section class="container mx-auto p-6 font-mono">
        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
            <div class="w-full md:overflow-y-auto">
            <table class="w-full">
                <thead>
                <tr class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
                    <th class="px-4 py-3">Id</th>
                    <th class="px-4 py-3">Name</th>
                    <th class="px-4 py-3">Phone</th>
                    <th class="px-4 py-3">Email</th>
                    <th class="px-4 py-3">Role</th>
                    <th class="px-4 py-3">Actions</th>
                </tr>
                </thead>
                <tbody class="bg-white">
                <tr class="text-gray-700" v-for="user in users" :key="user">
                    <td class="px-4 py-3 border">
                    {{ user.id }}
                    </td>
                    <td class="px-4 py-3 border">
                    <div class="flex items-center text-sm">
                        <div class="relative w-8 h-8 mr-3 rounded-full md:block">
                        <img class="object-cover w-full h-full rounded-full" src="https://images.pexels.com/photos/5212324/pexels-photo-5212324.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260" alt="" loading="lazy" />
                        <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                        </div>
                        <div>
                        <p class="font-semibold text-black">{{user.name}}</p>
                        </div>
                    </div>
                    </td>
                    <td class="px-4 py-3 text-sm font-semibold border">{{user.phone}}</td>
                    <td class="px-4 py-3 text-sm border">
                    <span class="px-2 py-1 font-semibold leading-tight text-gray-600 rounded-sm"> {{user.email}} </span>
                    </td>
                    <td class="px-4 py-3 border">{{user.role}}</td>
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
import Sidebar from '@/Components/Sidebar'
export default {
    components: {
        Sidebar
    },

    props: [
        'users'
    ]
}
</script>

<style>
	tr td:nth-child(n+6),
	tr th:nth-child(n+6) {
		border-radius: 0 .625rem .625rem 0;
	}

	tr td:nth-child(1),
	tr th:nth-child(1) {
		border-radius: .625rem 0 0 .625rem;
	}
</style>
