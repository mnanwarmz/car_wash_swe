<template>
    <link
        href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
        rel="stylesheet"
    />

    <Navbar></Navbar>
    <div class="flex flex-row min-h-auto">
        <!-- Sidebar -->
        <Sidebar></Sidebar>
        <!-- End Sidebar -->
        <div class="px-16 py-20 text-gray-700 bg-gray-200 h-auto w-screen">
            <h1 class="text-black text-4xl flex flex-wrap justify-center">
                Branch
            </h1>
            <section class="container mx-auto p-6 font-mono">
                <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
                    <div class="w-full md:overflow-y-auto">
                        <table class="w-full">
                            <thead>
                                <tr
                                    class="
                                        text-md
                                        font-semibold
                                        tracking-wide
                                        text-left text-gray-900
                                        bg-gray-100
                                        uppercase
                                        border-b border-gray-600
                                    "
                                >
                                    <th class="px-4 py-3">Id</th>
                                    <th class="px-4 py-3">Name</th>
                                    <th class="px-4 py-3">Address</th>
                                    <th class="px-4 py-3">Status</th>
                                    <th class="px-4 py-3">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white">
                                <tr
                                    class="text-gray-700"
                                    v-for="branch in branches"
                                    :key="branch"
                                >
                                    <td class="px-4 py-3 border">
                                        {{ branch.id }}
                                    </td>
                                    <td class="px-4 py-3 border">
                                        <div class="flex items-center text-sm">
                                            <div
                                                class="
                                                    relative
                                                    w-8
                                                    h-8
                                                    mr-3
                                                    rounded-full
                                                    md:block
                                                "
                                            >
                                                <img
                                                    class="
                                                        object-cover
                                                        w-full
                                                        h-full
                                                        rounded-full
                                                    "
                                                    src="https://images.pexels.com/photos/5212324/pexels-photo-5212324.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260"
                                                    alt=""
                                                    loading="lazy"
                                                />
                                                <div
                                                    class="
                                                        absolute
                                                        inset-0
                                                        rounded-full
                                                        shadow-inner
                                                    "
                                                    aria-hidden="true"
                                                ></div>
                                            </div>
                                            <div>
                                                <p
                                                    class="
                                                        font-semibold
                                                        text-black
                                                    "
                                                >
                                                    {{ branch.name }}
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td
                                        class="
                                            px-4
                                            py-3
                                            text-sm
                                            font-semibold
                                            border
                                        "
                                    >
                                        {{ branch.location.address }}
                                    </td>
                                    <td class="px-4 py-3 border">
                                        {{ branch.status }}
                                    </td>
                                    <td class="px-4 py-3 text-sm border">
                                        <button
                                            @click="acceptBranch(branch.id)"
                                            class="
                                                h-1
                                                text-gray-400
                                                hover:text-gray-100
                                            "
                                        >
                                            <i
                                                class="
                                                    material-icons-outlined
                                                    text-base
                                                "
                                                >visibility</i
                                            >
                                        </button>
                                        <a
                                            href="#"
                                            class="
                                                text-gray-400
                                                hover:text-gray-100
                                                ml-2
                                            "
                                        >
                                            <i
                                                class="
                                                    material-icons-outlined
                                                    text-base
                                                "
                                                >edit</i
                                            >
                                        </a>
                                        <a
                                            href="#"
                                            class="
                                                text-gray-400
                                                hover:text-gray-100
                                                ml-3
                                            "
                                        >
                                            <i
                                                class="
                                                    material-icons-round
                                                    text-base
                                                "
                                                >delete_outline</i
                                            >
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
import Navbar from "@/Components/Navbar";
import Sidebar from "@/Components/Sidebar";
export default {
    components: {
        Sidebar,
        Navbar,
    },

    props: ["branches"],
    methods: {
        acceptBranch(id) {
            this.$inertia.post(`/branches/${id}`);
        },
    },
};
</script>

<style>
tr td:nth-child(n + 6),
tr th:nth-child(n + 6) {
    border-radius: 0 0.625rem 0.625rem 0;
}

tr td:nth-child(1),
tr th:nth-child(1) {
    border-radius: 0.625rem 0 0 0.625rem;
}
</style>
