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
                    class="flex items-center rounded-xl p-4 bg-[#111a3e] shadow-lg border border-[#1f1641]"
                    >
                        <div class="w-20 h-20 flex-shrink-0 flex items-center justify-center">
                            <!-- Vision icon: telescope/eye -->
                            <svg v-if="element.id === 1" viewBox="0 0 100 100" class="w-16 h-16">
                                <circle cx="50" cy="50" r="30" fill="none" stroke="#4DD0E1" stroke-width="5"/>
                                <circle cx="50" cy="50" r="14" fill="none" stroke="#4DD0E1" stroke-width="5"/>
                                <circle cx="50" cy="50" r="5" fill="#f59e0b"/>
                                <line x1="50" y1="15" x2="50" y2="5" stroke="#4DD0E1" stroke-width="4" stroke-linecap="round"/>
                                <line x1="50" y1="85" x2="50" y2="95" stroke="#4DD0E1" stroke-width="4" stroke-linecap="round"/>
                                <line x1="15" y1="50" x2="5" y2="50" stroke="#4DD0E1" stroke-width="4" stroke-linecap="round"/>
                                <line x1="85" y1="50" x2="95" y2="50" stroke="#4DD0E1" stroke-width="4" stroke-linecap="round"/>
                            </svg>
                            <!-- Mission icon: target/bullseye with arrow -->
                            <svg v-else viewBox="0 0 100 100" class="w-16 h-16">
                                <circle cx="50" cy="55" r="30" fill="none" stroke="#4DD0E1" stroke-width="4"/>
                                <circle cx="50" cy="55" r="20" fill="none" stroke="#4DD0E1" stroke-width="4"/>
                                <circle cx="50" cy="55" r="10" fill="none" stroke="#4DD0E1" stroke-width="4"/>
                                <circle cx="50" cy="55" r="3" fill="#f59e0b"/>
                                <line x1="25" y1="30" x2="47" y2="52" stroke="#f59e0b" stroke-width="4" stroke-linecap="round"/>
                                <polyline points="25,20 25,30 35,30" fill="none" stroke="#f59e0b" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="flex-1 pl-4">
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
                    BLE Global Engineering Sdn. Bhd. is a progressive provider of electrical engineering services and solutions. 
                    As a company that progresses constantly with the trends of time, BLE Global's Engineering Sdn. Bhd. is capable to provide the most relevant solutions the the market and also to introduce foreign technology to the local market.
                </p>
                <div class="grid grid-cols-3 gap-4 max-w-lg pt-8">
                    <div class="text-center rounded-xl bg-[#111a3e] shadow-lg border border-[#1f1641] p-3">
                        <h3 class="text-white font-bold text-xl sm:text-2xl lg:text-3xl">+200</h3>
                        <p class="text-sm sm:text-base text-gray-300">Happy Client</p>
                    </div>
                    <div class="text-center rounded-xl bg-[#111a3e] shadow-lg border border-[#1f1641] p-3">
                        <h3 class="text-white font-bold text-xl sm:text-2xl lg:text-3xl">+700</h3>
                        <p class="text-sm sm:text-base text-gray-300">Project</p>
                    </div>

                    <div class="text-center rounded-xl bg-[#111a3e] shadow-lg border border-[#1f1641] p-3">
                        <h3 class="text-white font-bold text-xl sm:text-2xl lg:text-3xl">+14</h3>
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
        description:"To constantly provide quality assured, cost-effective and innovative product and service solutions. To constantly provide benchmarking and relevant product and services technology that further contributes to the industry. To constantly moving towards BLE's quality branding direction."
    },
])
</script>
