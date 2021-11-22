<template class="max-h-screen">
    <Navbar></Navbar>
    <div class="z-0 bg-gray-50 flex flex-row h-screen w-screen">
        <Sidebar></Sidebar>
        <GDialog v-model="locationModal" max-width="500">
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
                                    Edit Location Detail
                                </h3>
                            </div>

                            <div class="mb-6 flex p-4 bg-gray-50 rounded">
                                <input
                                    :value="`${form.name}`"
                                    @input="form.name = $event.target.value"
                                    class="
                                        w-full
                                        text-xs
                                        bg-gray-50
                                        outline-none
                                    "
                                />
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
                                        :value="`${form.state}`"
                                        @input="
                                            form.state = $event.target.value
                                        "
                                        placeholder="State"
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
                                        :value="`${form.city}`"
                                        @input="form.city = $event.target.value"
                                        type="text"
                                        placeholder="City"
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
                                    class="
                                        w-full
                                        text-xs
                                        bg-gray-50
                                        outline-none
                                    "
                                    :value="`${form.address}`"
                                    @input="form.address = $event.target.value"
                                    placeholder="Address"
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
                            <div class="mb-3 flex p-4 bg-gray-50 rounded">
                                <input
                                    class="
                                        w-full
                                        text-xs
                                        bg-gray-50
                                        outline-none
                                    "
                                    :value="`${form.postcode}`"
                                    @input="form.postcode = $event.target.value"
                                    placeholder="Postcode"
                                    style="
                                        background-repeat: no-repeat;
                                        background-attachment: scroll;
                                        background-size: 16px 18px;
                                        background-position: 98% 50%;
                                        cursor: auto;
                                    "
                                />
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
                    Are you sure you want to cancel selected appointment?
                </div>
                <hr />
                <div class="ml-auto flex">
                    <button
                        @click="deleteLocation"
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
        <div class="container mx-auto px-4">
            <div class="mb-16 text-center">
                <h2 class="text-4xl lg:text-5xl font-bold font-heading mt-10">
                    Your Saved Locations
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
                        :href="`/locations/create`"
                        >Add a Location</a
                    >
                </div>
            </div>

            <div class="flex flex-wrap justify-center">
                <div class="flex flex-wrap w-full lg:w-1/2">
                    <div
                        class="w-full px-3 mb-5"
                        v-for="location in locations"
                        :key="location"
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
                                    {{ location.name }}
                                </span>
                                <p
                                    class="
                                        text-xl
                                        lg:text-2xl
                                        text-white
                                        font-bold
                                    "
                                >
                                    {{ location.city }} {{ location.state }}
                                </p>
                                <p
                                    class="
                                        text-xl
                                        lg:text-2xl
                                        text-white
                                        font-bold
                                    "
                                >
                                    {{ location.address }}
                                </p>
                                <div class="flex mt-auto ml-auto">
                                    <button
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
                                        @click="toggleDeleteModal(location.id)"
                                    >
                                        Delete Location
                                    </button>
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
                                        @click="
                                            toggleLocationModal(location.id)
                                        "
                                    >
                                        Edit Location
                                    </button>
                                </div>
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
    props: ["locations"],
    setup() {
        const form = useForm({
            name: null,
            city: null,
            state: null,
            address: null,
            postcode: null,
        });

        return { form };
    },
    props: ["locations"],
    components: {
        Navbar,
        Sidebar,
        GDialog,
    },
    data: () => ({
        deleteModal: false,
        locationModal: false,
        locationId: null,
        location: null,
    }),
    methods: {
        toggleDeleteModal(id) {
            this.locationId = id;
            this.location = this.locations.find(
                (location) => location.id === id
            );
            this.form = {
                name: this.location.name,
                city: this.location.city,
                state: this.location.state,
                address: this.location.address,
                postcode: this.location.postcode,
            };
            this.deleteModal = true;
            this.locationModal = false;
        },
        toggleLocationModal(id) {
            this.locationId = id;
            this.location = this.locations.find(
                (location) => location.id === id
            );
            this.form = {
                name: this.location.name,
                city: this.location.city,
                state: this.location.state,
                address: this.location.address,
                postcode: this.location.postcode,
            };
            this.deleteModal = false;
            this.locationModal = true;
        },
        deleteLocation() {
            this.$inertia.post(
                `/locations/${this.locationId}`,
                { _method: "delete" },
                { preserveState: false }
            );
            this.deleteModal = false;
            this.$inertia.reload();
        },
        submit() {
            this.form.post(`/locations/${this.locationId}`);
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
