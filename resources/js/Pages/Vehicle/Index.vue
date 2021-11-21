<template>
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
    <div class="z-0 bg-gray-50 flex flex-row h-screen w-screen">
        <Sidebar></Sidebar>
        <div class="container mx-auto px-4">
            <div class="mb-16 text-center">
                <h2 class="mt-10 text-4xl lg:text-5xl font-bold font-heading">
                    Your vehicles
                </h2>
                <div class="mt-10">
                    <a
                        class="
                            inline-block
                            py-2
                            px-6
                            rounded-b-xl rounded-t-xl
                            bg-green-600
                            hover:bg-green-700
                            text-gray-50
                            font-bold
                            leading-loose
                            outline-none
                            transition
                            duration-200
                        "
                        :href="`/vehicles/create`"
                        >Add a Vehicle</a
                    >
                </div>
            </div>
            <div class="flex flex-wrap justify-center">
                <div class="flex flex-wrap w-full lg:w-1/2">
                    <div
                        class="w-full px-3 mb-5"
                        v-for="vehicle in vehicles"
                        :key="vehicle"
                    >
                        <div
                            class="
                                relative
                                h-64
                                mx-auto
                                rounded
                                flex flex-wrap
                                justify-center
                            "
                            id="list"
                        >
                            <div
                                class="
                                    absolute
                                    inset-0
                                    p-6
                                    flex flex-col
                                    items-start
                                "
                            >
                                <span
                                    class="
                                        mt-90
                                        text-xl
                                        lg:text-2xl
                                        text-gray-300
                                        font-bold
                                    "
                                >
                                    {{ vehicle.plate_no.toUpperCase() }}
                                </span>
                                <p
                                    class="
                                        text-xl
                                        lg:text-2xl
                                        text-white
                                        font-bold
                                    "
                                >
                                    {{ vehicle.brand }} {{ vehicle.model }}
                                </p>
                                <p
                                    class="
                                        text-xl
                                        lg:text-2xl
                                        text-white
                                        font-bold
                                    "
                                >
                                    {{ vehicle.type.name }}
                                </p>
                                <a
                                    class="
                                        mt-auto
                                        ml-auto
                                        py-1
                                        px-3
                                        text-sm
                                        bg-red-400
                                        rounded-full
                                        text-white
                                        uppercase
                                        font-bold
                                    "
                                    @click="toggleDeleteModal(vehicle.id)"
                                    >Delete Vehicle</a
                                >
                                <button
                                    class="
                                        mt-auto
                                        ml-auto
                                        py-1
                                        px-3
                                        text-sm
                                        bg-white
                                        rounded-full
                                        text-green-600
                                        uppercase
                                        font-bold
                                    "
                                    @click="toggleVehicleModal(vehicle.id)"
                                >
                                    Edit Vehicle
                                </button>
                                <!-- </a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Navbar from "@/Components/Navbar";
import Sidebar from "@/Components/Sidebar";
import { useForm } from "@inertiajs/inertia-vue3";
import { GDialog, plugin } from "gitart-vue-dialog";
import "gitart-vue-dialog/dist/style.css";

export default {
    setup() {},
    props: ["vehicles", "vehicle_types"],
    setup() {
        const form = useForm({
            plate_no: null,
            brand: null,
            model: null,
            vehicle_type_id: null,
        });
        return { form };
    },
    components: {
        Navbar,
        Sidebar,
        GDialog,
    },
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
#list {
    background-color: #05385b;
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
}

#list:hover {
    background: #074c7a;
}
</style>
