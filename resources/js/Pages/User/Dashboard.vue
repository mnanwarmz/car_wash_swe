<template>
    <Navbar></Navbar>
    <div class="bg-gray-100 h-screen w-auto flex flex-row">
        <Sidebar></Sidebar>
        <div class="max-w-7xl w-full mx-auto py-6 sm:px-6 lg:px-8">
            <div class="text-4xl flex flex-wrap justify-center ">
            <h1>Dashboard</h1>
            </div>
            <div class="bg-white card border w-auto hover:shadow-none relative flex flex-col mx-auto shadow-lg m-5">
                <img class="max-h-20 w-full opacity-80 absolute top-0" style="z-index:-1" src="https://unsplash.com/photos/h0Vxgz5tyXA/download?force=true&w=640" alt="" />
                <div class="profile w-full flex m-3 ml-4 text-white">
                <img
                :src="`https://ui-avatars.com/api/?name=${$page.props.user.name}&rounded=true&background=0D8ABC&color=fff`"
                />
                <div class="title mt-3 ml-3 font-bold flex flex-col">
                    <div class="text-black name break-words">{{ $page.props.user.name }}</div>
                    <!--  add [dark] class for bright background -->
                    <div class="text-black add font-semibold text-sm italic dark">User</div>
                </div>
                </div>
                <div class="buttons flex absolute bottom-0 font-bold right-0 text-xs text-gray-500 space-x-0 my-3.5 mr-3">
                <!-- <div class="add border rounded-l-2xl rounded-r-sm border-gray-300 p-1 px-4 cursor-pointer hover:bg-gray-700 hover:text-white">Contact</div> -->
                <!-- <div class="add border rounded-r-2xl rounded-l-sm border-gray-300 p-1 px-4 cursor-pointer hover:bg-gray-700 hover:text-white">Bio</div> -->
                </div>
            </div>
            <div class="flex flex-col lg:flex-row w-full lg:space-x-4 space-y-2 lg:space-y-0 mb-2 lg:mb-4">
                <div class="w-full lg:w-1/2">
                    <div class="shadow-lg widget w-full p-4 rounded-lg bg-white border-l-4 border-purple-400">
                        <div class="flex items-center">
                            <div class="icon w-14 p-3.5 bg-purple-400 text-white rounded-full mr-3">
                                <svg viewBox="0 0 25 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M24.4134 5.46875H21.4901L20.6776 3.4375C19.8426 1.34912 17.8499 0 15.6004 0H9.39924C7.15021 0 5.15705 1.34912 4.3216 3.4375L3.5091 5.46875H0.586248C0.204901 5.46875 -0.0748846 5.82715 0.0178888 6.19678L0.310858 7.36865C0.375799 7.62939 0.610174 7.8125 0.879217 7.8125H1.8592C1.20344 8.38525 0.781072 9.21777 0.781072 10.1562V12.5C0.781072 13.2871 1.08185 13.9976 1.56232 14.5474V17.1875C1.56232 18.0503 2.26203 18.75 3.12482 18.75H4.68732C5.55012 18.75 6.24982 18.0503 6.24982 17.1875V15.625H18.7498V17.1875C18.7498 18.0503 19.4495 18.75 20.3123 18.75H21.8748C22.7376 18.75 23.4373 18.0503 23.4373 17.1875V14.5474C23.9178 13.998 24.2186 13.2876 24.2186 12.5V10.1562C24.2186 9.21777 23.7962 8.38525 23.1409 7.8125H24.1209C24.39 7.8125 24.6243 7.62939 24.6893 7.36865L24.9822 6.19678C25.0745 5.82715 24.7947 5.46875 24.4134 5.46875ZM7.22297 4.59814C7.57892 3.7085 8.44074 3.125 9.39924 3.125H15.6004C16.5589 3.125 17.4207 3.7085 17.7767 4.59814L18.7498 7.03125H6.24982L7.22297 4.59814ZM4.68732 12.4902C3.74982 12.4902 3.12482 11.8672 3.12482 10.9326C3.12482 9.99805 3.74982 9.375 4.68732 9.375C5.62482 9.375 7.03107 10.7769 7.03107 11.7114C7.03107 12.646 5.62482 12.4902 4.68732 12.4902ZM20.3123 12.4902C19.3748 12.4902 17.9686 12.646 17.9686 11.7114C17.9686 10.7769 19.3748 9.375 20.3123 9.375C21.2498 9.375 21.8748 9.99805 21.8748 10.9326C21.8748 11.8672 21.2498 12.4902 20.3123 12.4902V12.4902Z" fill="white"/>
                                </svg>
                            </div>
                            <div class="flex flex-col justify-center">
                                <div class="text-sm text-black-400 font-bold">Vehicles</div>
                            </div>
                        </div>
                        <hr class="my-3 border-purple-400">
                        <div v-for="vehicle in vehicles" class="w-full p-4 rounded-lg bg-white border-2 border-purple-400 mt-2 shadow-lg hover:shadow-none">
                            <div class="text-lg text-blue-700 font-bold">
                                <span class="capitalize">
                                    {{ vehicle.brand }}
                                </span>
                                <span class="uppercase">
                                    &nbsp; {{ vehicle.plate_no }}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full lg:w-1/2">
                    <div class="shadow-lg widget w-full p-4 rounded-lg bg-white border-l-4 border-blue-400">
                        <div class="flex items-center">
                            <div class="icon w-14 p-3.5 bg-blue-400 text-white rounded-full mr-3">
                                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19 4H5C3.89543 4 3 4.89543 3 6V20C3 21.1046 3.89543 22 5 22H19C20.1046 22 21 21.1046 21 20V6C21 4.89543 20.1046 4 19 4Z" stroke="#F9FAFB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M16 2V6" stroke="#F9FAFB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M8 2V6" stroke="#F9FAFB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M3 10H21" stroke="#F9FAFB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <div class="flex flex-col justify-center">
                                <div class="text-sm text-black-400 font-bold">Appointments</div>
                            </div>
                        </div>
                        <hr class="my-3 border-blue-400">
                        <div v-for="appointment in appointments" class="w-full p-4 rounded-lg bg-white border-2 border-purple-400 mt-2 shadow-lg hover:shadow-none">
                            <div class="text-sm text-black-400 font-bold">
                                {{appointment.start}} - {{appointment.end}}

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col lg:flex-row w-full lg:space-x-4 space-y-2 lg:space-y-0 mb-2 lg:mb-4">
                <div class="w-full">
                    <div class="shadow-lg widget w-full p-4 rounded-lg bg-white border-l-4 border-red-400">
                        <div class="flex items-center">
                            <div class="icon w-14 p-3.5 bg-red-400 text-white rounded-full mr-3">
                                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.25003 10C7.25003 7.37665 9.37667 5.25 12 5.25C14.6234 5.25 16.75 7.37665 16.75 10C16.75 12.6234 14.6234 14.75 12 14.75C9.37667 14.75 7.25003 12.6234 7.25003 10ZM12 6.75C10.2051 6.75 8.75003 8.20507 8.75003 10C8.75003 11.7949 10.2051 13.25 12 13.25C13.795 13.25 15.25 11.7949 15.25 10C15.25 8.20507 13.795 6.75 12 6.75Z" fill="white"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M3.52439 8.85685C3.87872 4.55824 7.47087 1.25 11.7841 1.25H12.216C16.5292 1.25 20.1213 4.55824 20.4757 8.85685C20.666 11.166 19.9527 13.4589 18.4861 15.2526L13.693 21.1144C12.818 22.1845 11.1821 22.1845 10.307 21.1144L5.51399 15.2526C4.04733 13.4589 3.33405 11.166 3.52439 8.85685ZM11.7841 2.75C8.25152 2.75 5.30952 5.45948 5.01932 8.98008C4.8609 10.9019 5.45455 12.8102 6.67521 14.3031L11.4683 20.1649C11.7431 20.501 12.2569 20.501 12.5318 20.1649L17.3248 14.3031C18.5455 12.8102 19.1391 10.9019 18.9807 8.98008C18.6905 5.45948 15.7485 2.75 12.216 2.75H11.7841Z" fill="white"/>
                                </svg>
                            </div>
                            <div class="flex flex-col justify-center">
                                <div class="text-sm text-black-400 font-bold">Locations</div>
                            </div>
                        </div>
                        <hr class="my-3 border-red-400">
                        <div v-for="location in locations" class="w-full p-4 rounded-lg bg-white border-2 border-red-400 mt-2 shadow-lg hover:shadow-none">
                            <div class="text-blue-700 text-lg text-black-400 font-bold">
                                <span class="capitalize">
                                    {{location.address}}
                                </span>
                                <span class="uppercase ml-2">
                                    {{location.postcode}}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
    import { defineComponent } from 'vue'
    import Navbar from '@/Components/Navbar'
    import Sidebar from '@/Components/Sidebar'

    export default defineComponent({
        components: {
            Navbar,
            Sidebar,
        },

        props: [
            'vehicles',
            'locations',
            'appointments',
        ],
    })
</script>
