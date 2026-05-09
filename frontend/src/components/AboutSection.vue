<template >
    <section class="text-white mt-18" id="about">
        <div class="absolute z-0 top-[93rem] inset-x-0 h-64 flex items-start">
            <div class="h-24 w-64 bg-gradient-to-br from-primary via-secondary blur-2xl to-[#570cac] opacity-20"></div>
        </div>
        <div class="md:grid md:grid-cols-2 gap-8 items-center py-8 px-4 xl:gap-16 sm:py-16 xl:px-16 z-1">
            <div data-aos="flip-right">
                <h2 class="text-4xl font-bold text-white text-left mb-8">Overview</h2>
                <div class="space-y-8 py-8" data-aos="fade-left">
                    <div v-for="element in VisionMission" :key="element.id"
                    class="flex  items-center rounded-xl p-4 bg-[#111a3e] shadow-lg border border-[#1f1641]"
                    >
                        <div class="w-1/4">
                            <img src="https://img.icons8.com/ios-filled/100/ffffff/lawyer.png" alt="lawyer">
                        </div>
                        <div class="w-3/4 pl-4">
                            <h3 class="text-2xl font-semibold uppercase text-transparent bg-clip-text bg-gradient-to-r from-primary to-secondary">
                                {{ element.title }}
                            </h3>
                            <p class="text-white">{{ element.description }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-4 md:mt-0 text-left flex flex-col z-10 h-full" data-aos="flip-right">
                <h2 class="text-4xl font-bold text-white md:text-center text-left mb-4">More
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-secondary">About</span>
                    Us
                </h2>
                <p class="text-base lg:text-lg mt-8 py-8"> 
                    BLE Global Engineering Sdn. Bhd. is a progressive provider of electrical engineering services and environmental health solutions. 
                    As a company that progresses constantly with the trends of time, BLE Global's Engineering Sdn. Bhd. is capable to provide the most relevant solutions the the market and also to introduce foreign technology to the local market.
                </p>
                <div class="grid grid-cols-3 gap-4 max-w-lg pt-8">
                    <div class="text-center rounded-xl bg-[#111a3e] shadow-lg border border-[#1f1641] p-3">
                        <h3 class="text-white font-bold text-xl sm:text-2xl lg:text-3xl">+200</h3>
                        <p class="text-sm sm:text-base text-gray-300">Happy Client</p>
                    </div>
                    <div class="text-center rounded-xl bg-[#111a3e] shadow-lg border border-[#1f1641] p-3">
                        <h3 class="text-white font-bold text-xl sm:text-2xl lg:text-3xl">+300</h3>
                        <p class="text-sm sm:text-base text-gray-300">Project</p>
                    </div>

                    <div class="text-center rounded-xl bg-[#111a3e] shadow-lg border border-[#1f1641] p-3">
                        <h3 class="text-white font-bold text-xl sm:text-2xl lg:text-3xl">+7</h3>
                        <p class="text-sm sm:text-base text-gray-300"> Years Experience</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
<script setup>
import { ref } from 'vue';
const VisionMission =ref([
    {
        id:1,
        title:'Corporate Vision',
        description:"To attain a reputated branding status, well-known for BLE's benchmarking product and services innovations, locally and internationally."
    },
    {
        id:2,
        title:'Corporate Mission',
        description:"To constantly provide quality assured, cost-effective and innovative product and service solutions."
    },
])
</script>
