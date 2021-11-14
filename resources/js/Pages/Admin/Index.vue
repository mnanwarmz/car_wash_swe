<template>
<!-- This is an example component -->
<div class="flex flex-row h-full">
  <!-- Sidebar -->
  <Sidebar></Sidebar>
<div class="px-16 py-20 text-gray-700 bg-gray-200 h-screen w-screen">
<div class="">
    <div class="max-w-7xl w-full mx-auto py-6 sm:px-6 lg:px-8">
        <div class="flex flex-wrap justify-center ">
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
                <div class="text-black add font-semibold text-sm italic dark">Super Admin</div>
            </div>
            </div>
            <div class="buttons flex absolute bottom-0 font-bold right-0 text-xs text-gray-500 space-x-0 my-3.5 mr-3">
            <!-- <div class="add border rounded-l-2xl rounded-r-sm border-gray-300 p-1 px-4 cursor-pointer hover:bg-gray-700 hover:text-white">Contact</div> -->
            <!-- <div class="add border rounded-r-2xl rounded-l-sm border-gray-300 p-1 px-4 cursor-pointer hover:bg-gray-700 hover:text-white">Bio</div> -->
            </div>
        </div>
        <div class="flex flex-col lg:flex-row w-full lg:space-x-4 space-y-2 lg:space-y-0 mb-2 lg:mb-4">
            <div class="w-full lg:w-1/2">
                <div class="widget w-full p-4 rounded-lg bg-white border-l-4 border-purple-400">
                    <div class="flex items-center">
                        <div class="icon w-14 p-3.5 bg-purple-400 text-white rounded-full mr-3">
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17 20H22V18C22 16.3431 20.6569 15 19 15C18.0444 15 17.1931 15.4468 16.6438 16.1429M17 20H7M17 20V18C17 17.3438 16.8736 16.717 16.6438 16.1429M7 20H2V18C2 16.3431 3.34315 15 5 15C5.95561 15 6.80686 15.4468 7.35625 16.1429M7 20V18C7 17.3438 7.12642 16.717 7.35625 16.1429M7.35625 16.1429C8.0935 14.301 9.89482 13 12 13C14.1052 13 15.9065 14.301 16.6438 16.1429M15 7C15 8.65685 13.6569 10 12 10C10.3431 10 9 8.65685 9 7C9 5.34315 10.3431 4 12 4C13.6569 4 15 5.34315 15 7ZM21 10C21 11.1046 20.1046 12 19 12C17.8954 12 17 11.1046 17 10C17 8.89543 17.8954 8 19 8C20.1046 8 21 8.89543 21 10ZM7 10C7 11.1046 6.10457 12 5 12C3.89543 12 3 11.1046 3 10C3 8.89543 3.89543 8 5 8C6.10457 8 7 8.89543 7 10Z" stroke="#F9FAFB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="flex flex-col justify-center">
                            <div class="text-lg">{{ userCount }}</div>
                            <div class="text-sm text-gray-400">Users</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full lg:w-1/2">
                <div class="widget w-full p-4 rounded-lg bg-white border-l-4 border-blue-400">
                    <div class="flex items-center">
                        <div class="icon w-14 p-3.5 bg-blue-400 text-white rounded-full mr-3">
                            <svg viewBox="0 0 25 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M24.4134 5.46875H21.4901L20.6776 3.4375C19.8426 1.34912 17.8499 0 15.6004 0H9.39924C7.15021 0 5.15705 1.34912 4.3216 3.4375L3.5091 5.46875H0.586248C0.204901 5.46875 -0.0748846 5.82715 0.0178888 6.19678L0.310858 7.36865C0.375799 7.62939 0.610174 7.8125 0.879217 7.8125H1.8592C1.20344 8.38525 0.781072 9.21777 0.781072 10.1562V12.5C0.781072 13.2871 1.08185 13.9976 1.56232 14.5474V17.1875C1.56232 18.0503 2.26203 18.75 3.12482 18.75H4.68732C5.55012 18.75 6.24982 18.0503 6.24982 17.1875V15.625H18.7498V17.1875C18.7498 18.0503 19.4495 18.75 20.3123 18.75H21.8748C22.7376 18.75 23.4373 18.0503 23.4373 17.1875V14.5474C23.9178 13.998 24.2186 13.2876 24.2186 12.5V10.1562C24.2186 9.21777 23.7962 8.38525 23.1409 7.8125H24.1209C24.39 7.8125 24.6243 7.62939 24.6893 7.36865L24.9822 6.19678C25.0745 5.82715 24.7947 5.46875 24.4134 5.46875ZM7.22297 4.59814C7.57892 3.7085 8.44074 3.125 9.39924 3.125H15.6004C16.5589 3.125 17.4207 3.7085 17.7767 4.59814L18.7498 7.03125H6.24982L7.22297 4.59814ZM4.68732 12.4902C3.74982 12.4902 3.12482 11.8672 3.12482 10.9326C3.12482 9.99805 3.74982 9.375 4.68732 9.375C5.62482 9.375 7.03107 10.7769 7.03107 11.7114C7.03107 12.646 5.62482 12.4902 4.68732 12.4902ZM20.3123 12.4902C19.3748 12.4902 17.9686 12.646 17.9686 11.7114C17.9686 10.7769 19.3748 9.375 20.3123 9.375C21.2498 9.375 21.8748 9.99805 21.8748 10.9326C21.8748 11.8672 21.2498 12.4902 20.3123 12.4902V12.4902Z" fill="white"/>
                            </svg>
                        </div>
                        <div class="flex flex-col justify-center">
                            <div class="text-lg">{{ vehicleCount}}</div>
                            <div class="text-sm text-gray-400">Vehicles</div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        <div class="flex flex-col lg:flex-row w-full lg:space-x-4 space-y-2 lg:space-y-0 mb-2 lg:mb-4">
            <div class="w-full lg:w-1/2">
                <div class="widget w-full p-4 rounded-lg bg-white border-l-4 border-yellow-400">
                    <div class="flex items-center">
                        <div class="icon w-14 p-3.5 bg-yellow-400 text-white rounded-full mr-3">
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M11.4152 2.39511C11.7964 2.27797 12.2039 2.27797 12.585 2.39511L15.5707 3.31277C17.1284 3.79152 18.6077 4.49538 19.9617 5.40203C21.0149 6.10722 20.5157 7.74997 19.2482 7.74997H4.75203C3.48458 7.74997 2.98538 6.10722 4.03853 5.40204C5.39257 4.49538 6.87186 3.79152 8.4295 3.31277L11.4152 2.39511ZM12.1443 3.82891C12.0504 3.80003 11.9499 3.80003 11.8559 3.82891L8.87018 4.74658C7.68938 5.1095 6.55803 5.61454 5.50081 6.24997H18.4994C17.4422 5.61454 16.3109 5.1095 15.1301 4.74658L12.1443 3.82891Z" fill="white"/>
                                <path d="M4.25012 21C4.25012 20.5858 4.58591 20.25 5.00012 20.25H19.0001C19.4143 20.25 19.7501 20.5858 19.7501 21C19.7501 21.4142 19.4143 21.75 19.0001 21.75H5.00012C4.58591 21.75 4.25012 21.4142 4.25012 21Z" fill="white"/>
                                <path d="M6.25012 17C6.25012 17.4142 6.58591 17.75 7.00012 17.75C7.41434 17.75 7.75012 17.4142 7.75012 17L7.75012 11C7.75012 10.5858 7.41434 10.25 7.00012 10.25C6.58591 10.25 6.25012 10.5858 6.25012 11L6.25012 17Z" fill="white"/>
                                <path d="M12.0001 17.75C11.5859 17.75 11.2501 17.4142 11.2501 17L11.2501 11C11.2501 10.5858 11.5859 10.25 12.0001 10.25C12.4143 10.25 12.7501 10.5858 12.7501 11V17C12.7501 17.4142 12.4143 17.75 12.0001 17.75Z" fill="white"/>
                                <path d="M16.2501 17C16.2501 17.4142 16.5859 17.75 17.0001 17.75C17.4143 17.75 17.7501 17.4142 17.7501 17V11C17.7501 10.5858 17.4143 10.25 17.0001 10.25C16.5859 10.25 16.2501 10.5858 16.2501 11V17Z" fill="white"/>
                            </svg>

                        </div>
                        <div class="flex flex-col justify-center">
                            <div class="text-lg">{{branchCount}}</div>
                            <div class="text-sm text-gray-400">Branch</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full lg:w-1/2">
                <div class="widget w-full p-4 rounded-lg bg-white border-l-4 border-red-400">
                    <div class="flex items-center">
                        <div class="icon w-14 p-3.5 bg-red-400 text-white rounded-full mr-3">
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19 4H5C3.89543 4 3 4.89543 3 6V20C3 21.1046 3.89543 22 5 22H19C20.1046 22 21 21.1046 21 20V6C21 4.89543 20.1046 4 19 4Z" stroke="#F9FAFB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M16 2V6" stroke="#F9FAFB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M8 2V6" stroke="#F9FAFB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M3 10H21" stroke="#F9FAFB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="flex flex-col justify-center">
                            <div class="text-lg">{{appointmentCount}}</div>
                            <div class="text-sm text-gray-400">Appointments</div>
                        </div>
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
import Sidebar from '@/Components/Sidebar'
export default {
    components: {
        Sidebar
    },

    props: [
        'userCount',
        'branchCount',
        'appointmentCount',
        'vehicleCount'
    ],

    data() {
        return {};
    },

    computed: {},
};
</script>
