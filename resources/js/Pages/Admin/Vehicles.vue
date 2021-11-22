<template>
    <link
        href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
        rel="stylesheet"
    />

    <Navbar></Navbar>
    <GDialog v-model="vehicleModal" max-width="500">
        <section class="bg-gray-50">
            <div class="container mx-auto px-4">
                <div class="max-w-xl mx-auto">
                    <div
                        class="
                            py-10
                            lg:py-20
                            p-6
                            lg:p-12
                            mb-6
                            bg-white
                            shadow
                            rounded
                        "
                    >
                        <div class="mb-6">
                            <h3 class="text-2xl font-bold">
                                Edit Vehicle Detail
                            </h3>
                        </div>
                        <div class="flex flex-wrap -mx-2">
                            <div class="mb-3 w-full lg:w-1/2 px-2">
                                <input
                                    class="
                                        w-full
                                        p-4
                                        text-xs
                                        bg-gray-50
                                        outline-none
                                        rounded
                                    "
                                    :value="`${form.brand}`"
                                    @input="form.brand = $event.target.value"
                                    placeholder="Brand"
                                    type="text"
                                    autocomplete="off"
                                    style="
                                        background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAAAXNSR0IArs4c6QAAAPhJREFUOBHlU70KgzAQPlMhEvoQTg6OPoOjT+JWOnRqkUKHgqWP4OQbOPokTk6OTkVULNSLVc62oJmbIdzd95NcuGjX2/3YVI/Ts+t0WLE2ut5xsQ0O+90F6UxFjAI8qNcEGONia08e6MNONYwCS7EQAizLmtGUDEzTBNd1fxsYhjEBnHPQNG3KKTYV34F8ec/zwHEciOMYyrIE3/ehKAqIoggo9inGXKmFXwbyBkmSQJqmUNe15IRhCG3byphitm1/eUzDM4qR0TTNjEixGdAnSi3keS5vSk2UDKqqgizLqB4YzvassiKhGtZ/jDMtLOnHz7TE+yf8BaDZXA509yeBAAAAAElFTkSuQmCC');
                                        background-repeat: no-repeat;
                                        background-attachment: scroll;
                                        background-size: 16px 18px;
                                        background-position: 98% 50%;
                                    "
                                />
                            </div>
                            <div class="mb-3 w-full lg:w-1/2 px-2">
                                <input
                                    class="
                                        w-full
                                        p-4
                                        text-xs
                                        bg-gray-50
                                        outline-none
                                        rounded
                                    "
                                    :value="`${form.model}`"
                                    @input="form.model = $event.target.value"
                                    type="text"
                                    placeholder="Model"
                                    autocomplete="off"
                                    style="
                                        background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAAAXNSR0IArs4c6QAAAPhJREFUOBHlU70KgzAQPlMhEvoQTg6OPoOjT+JWOnRqkUKHgqWP4OQbOPokTk6OTkVULNSLVc62oJmbIdzd95NcuGjX2/3YVI/Ts+t0WLE2ut5xsQ0O+90F6UxFjAI8qNcEGONia08e6MNONYwCS7EQAizLmtGUDEzTBNd1fxsYhjEBnHPQNG3KKTYV34F8ec/zwHEciOMYyrIE3/ehKAqIoggo9inGXKmFXwbyBkmSQJqmUNe15IRhCG3byphitm1/eUzDM4qR0TTNjEixGdAnSi3keS5vSk2UDKqqgizLqB4YzvassiKhGtZ/jDMtLOnHz7TE+yf8BaDZXA509yeBAAAAAElFTkSuQmCC');
                                        background-repeat: no-repeat;
                                        background-attachment: scroll;
                                        background-size: 16px 18px;
                                        background-position: 98% 50%;
                                        cursor: auto;
                                    "
                                />
                            </div>
                        </div>
                        <div class="mb-3 flex p-4 bg-gray-50 rounded">
                            <input
                                class="w-full text-xs bg-gray-50 outline-none"
                                :value="`${form.plate_no}`"
                                @input="form.plate_no = $event.target.value"
                                placeholder="Plate Number"
                                autocomplete="off"
                                style="
                                    background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAAAXNSR0IArs4c6QAAAPhJREFUOBHlU70KgzAQPlMhEvoQTg6OPoOjT+JWOnRqkUKHgqWP4OQbOPokTk6OTkVULNSLVc62oJmbIdzd95NcuGjX2/3YVI/Ts+t0WLE2ut5xsQ0O+90F6UxFjAI8qNcEGONia08e6MNONYwCS7EQAizLmtGUDEzTBNd1fxsYhjEBnHPQNG3KKTYV34F8ec/zwHEciOMYyrIE3/ehKAqIoggo9inGXKmFXwbyBkmSQJqmUNe15IRhCG3byphitm1/eUzDM4qR0TTNjEixGdAnSi3keS5vSk2UDKqqgizLqB4YzvassiKhGtZ/jDMtLOnHz7TE+yf8BaDZXA509yeBAAAAAElFTkSuQmCC');
                                    background-repeat: no-repeat;
                                    background-attachment: scroll;
                                    background-size: 16px 18px;
                                    background-position: 98% 50%;
                                    cursor: auto;
                                "
                            />
                        </div>
                        <div class="mb-6 flex p-4 bg-gray-50 rounded">
                            <select
                                v-model="form.vehicle_type_id"
                                class="
                                    mt-1
                                    block
                                    w-full
                                    py-2
                                    px-3
                                    border border-gray-300
                                    bg-white
                                    rounded-md
                                    shadow-sm
                                    focus:outline-none
                                    focus:ring-indigo-500
                                    focus:border-indigo-500
                                    sm:text-sm
                                "
                            >
                                <option
                                    v-for="vehicle_type in vehicle_types"
                                    :key="vehicle_type"
                                    :value="vehicle_type.id"
                                    :selected="
                                        vehicle_type.id ==
                                        vehicleSelected.type.id
                                            ? true
                                            : false
                                    "
                                >
                                    {{ vehicle_type.name }}
                                </option>
                            </select>
                        </div>
                        <div class="text-center">
                            <button
                                class="
                                    mb-2
                                    w-full
                                    py-4
                                    bg-green-600
                                    hover:bg-green-700
                                    rounded
                                    text-sm
                                    font-bold
                                    text-gray-50
                                    transition
                                    duration-200
                                "
                                @click="submit"
                            >
                                Update Info
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </GDialog>
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
                Are you sure you want to delete selected vehicle?
            </div>
            <hr />
            <div class="ml-auto flex">
                <button
                    @click="deleteVehicle"
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
    <div class="flex flex-row min-h-auto">
        <!-- Sidebar -->
        <Sidebar></Sidebar>
        <!-- End Sidebar -->
        <div class="px-16 py-20 text-gray-700 bg-gray-200 h-auto w-screen">
            <h1 class="text-black text-4xl flex flex-wrap justify-center">
                Vehicles
            </h1>
            <section class="container mx-auto p-6 font-mono">
                <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
                    <div class="w-full md:overflow-x-auto">
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
                                    <th class="text-center px-4 py-3">
                                        Plate Number
                                    </th>
                                    <th class="text-center px-4 py-3">Brand</th>
                                    <th class="text-center px-4 py-3">Model</th>
                                    <th class="text-center px-4 py-3">
                                        Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white text-center">
                                <tr
                                    class="text-gray-700"
                                    v-for="vehicle in vehicles"
                                    :key="vehicle"
                                >
                                    <td class="px-4 py-3 border">
                                        <div class="flex items-center text-sm">
                                            <div>
                                                <p
                                                    class="
                                                        font-semibold
                                                        text-black
                                                        uppercase
                                                    "
                                                >
                                                    {{ vehicle.plate_no }}
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
                                            capitalize
                                        "
                                    >
                                        {{ vehicle.brand }}
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
                                                capitalize
                                            "
                                        >
                                            {{ vehicle.model }}
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
                                        <button
                                            class="
                                                text-gray-400
                                                hover:text-gray-100
                                                ml-3
                                            "
                                            @click="
                                                toggleVehicleModal(vehicle.id)
                                            "
                                        >
                                            <i
                                                class="
                                                    material-icons-outlined
                                                    text-base
                                                "
                                                >edit</i
                                            >
                                        </button>
                                        <button
                                            class="
                                                text-gray-400
                                                hover:text-gray-100
                                                ml-3
                                            "
                                            @click="
                                                toggleDeleteModal(vehicle.id)
                                            "
                                        >
                                            <i
                                                class="
                                                    material-icons-round
                                                    text-base
                                                "
                                                >delete_outline</i
                                            >
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
import { useForm } from "@inertiajs/inertia-vue3";

import "gitart-vue-dialog/dist/style.css";
export default {
    components: {
        Sidebar,
        Navbar,
        GDialog,
    },
    setup() {
        const form = useForm({
            plate_no: null,
            brand: null,
            model: null,
            vehicle_type_id: null,
        });
        return { form };
    },

    props: ["vehicles", "vehicle_types"],
    data: () => ({
        vehicleModal: false,
        deleteModal: false,
        vehicleSelected_id: null,
        vehicleSelected: null,
    }),
    updated() {
        this.form.plate_no = this.vehicleSelected.plate_no;
        this.form.brand = this.vehicleSelected.brand;
        this.form.model = this.vehicleSelected.model;
        this.form.vehicle_type_id = this.vehicleSelected.type.id;
    },
    methods: {
        toggleVehicleModal(id) {
            this.vehicleSelected_id = id;
            this.vehicleSelected = this.vehicles.find(
                (vehicle) => vehicle.id == this.vehicleSelected_id
            );
            this.deleteModal = false;
            this.vehicleModal = true;
        },
        toggleDeleteModal(id) {
            this.vehicleSelected_id = id;
            this.vehicleSelected = this.vehicles.find(
                (vehicle) => vehicle.id == this.vehicleSelected_id
            );
            this.vehicleModal = false;
            this.deleteModal = true;
        },
        deleteVehicle() {
            this.$inertia.post(
                `/vehicles/${this.vehicleSelected_id}`,
                {
                    _method: "delete",
                },
                {
                    preserveState: false,
                }
            );
            this.deleteModal = false;
            this.$nextTick(() => {
                this.$forceUpdate();
            });
        },
        submit() {
            this.vehicleModal = false;
            this.form.post("/vehicles/" + this.vehicleSelected.id + "/update");
            this.$nextTick(() => {
                this.$forceUpdate();
            });
        },
    },
};
</script>

<style>
tr td:nth-child(n + 4),
tr th:nth-child(n + 4) {
    border-radius: 0 0.625rem 0.625rem 0;
}

tr td:nth-child(1),
tr th:nth-child(1) {
    border-radius: 0.625rem 0 0 0.625rem;
}
</style>
