<template>
    <link
        href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
        rel="stylesheet"
    />

    <Navbar></Navbar>
    <div class="flex flex-row min-h-auto">
        <GDialog v-model="deleteModal" v-cloak max-width="500">
            <div class="flex flex-col items-start p-4">
                <div class="flex items-center w-full">
                    <div class="text-gray-900 font-medium text-2xl py-2">
                        Confirm Deletion
                    </div>
                    <svg
                        class="
                            ml-auto
                            fill-current
                            text-gray-700
                            w-6
                            h-6
                            cursor-pointer
                        "
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 18 18"
                    >
                        <path
                            d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"
                        />
                    </svg>
                </div>
                <hr />
                <div class="">
                    Are you sure you want to delete user {{ userSelectedId }}?
                </div>
                <hr />
                <div class="ml-auto flex">
                    <button
                        @click="deleteUser"
                        class="
                            bg-red-500
                            hover:bg-red-700
                            text-white
                            font-bold
                            py-2
                            px-4
                            rounded
                        "
                    >
                        Confirm
                    </button>
                    <div class="pr-2"></div>
                    <button
                        class="
                            bg-transparent
                            hover:bg-gray-500
                            text-blue-700
                            font-semibold
                            hover:text-white
                            py-2
                            px-4
                            border border-blue-500
                            hover:border-transparent
                            rounded
                        "
                    >
                        Cancel
                    </button>
                </div>
            </div>
        </GDialog>
        <!-- Sidebar -->
        <Sidebar></Sidebar>
        <!-- End Sidebar -->
        <div class="px-16 py-20 text-gray-700 bg-gray-200 h-auto w-screen">
            <h1 class="text-black text-4xl flex flex-wrap justify-center">
                Users
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
                                    <th class="px-4 py-3">Phone</th>
                                    <th class="px-4 py-3">Email</th>
                                    <th class="px-4 py-3">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white">
                                <tr
                                    class="text-gray-700"
                                    v-for="user in users"
                                    :key="user"
                                >
                                    <td class="px-4 py-3 border">
                                        {{ user.id }}
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
                                                    :src="`https://ui-avatars.com/api/?name=${user.name}&rounded=true&background=0D8ABC&color=fff`"
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
                                                    {{ user.name }}
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
                                        {{ user.phone }}
                                    </td>
                                    <td class="px-4 py-3 text-sm border">
                                        <span
                                            class="
                                                px-2
                                                py-1
                                                font-semibold
                                                leading-tight
                                                text-gray-600
                                                rounded-sm
                                            "
                                        >
                                            {{ user.email }}
                                        </span>
                                    </td>
                                    <td class="px-4 py-3 text-sm border">
                                        <a
                                            href="#"
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
                                        </a>
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
                                        <button
                                            @click="toggleDeleteModal(user.id)"
                                            class="
                                                text-gray-400
                                                hover:text-gray-100
                                                ml-3
                                            "
                                        >
                                            Delete
                                        </button>
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
import { GDialog, plugin } from "gitart-vue-dialog";
import "gitart-vue-dialog/dist/style.css";
export default {
    components: {
        Sidebar,
        Navbar,
        GDialog,
    },
    data() {
        return {
            userSelectedId: null,
            deleteModal: false,
        };
    },
    props: ["users"],
    methods: {
        deleteUser() {
            this.deleteModal = false;
            this.$inertia.post(
                `/users/${this.userSelectedId}`,
                {
                    method: "delete",
                },
                {
                    preserveState: false,
                }
            );
            this.$inertia.reload();
        },
        toggleDeleteModal(id) {
            this.deleteModal = true;
            this.userSelectedId = id;
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
