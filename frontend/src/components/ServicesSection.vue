<template >
    <section class="text-white mt-20" id="services">
        <div class="px-4 xl:pl-16">
            <h2 class="text-4xl font-bold text-white mb-4">Services</h2>
        </div>
        <div class="py-8 xl:px-16 px-4 sm:py-16 grid grid-cols-1 gap-6 pt-10 sm:grid-cols-2 md:gap-10 md:pt-12 lg:grid-cols-3">
            <div v-for="service in services" :key="service.id" data-aos="fade-up"
            class="px-8 py-12 rounded-xl bg-[#111a3e] shadow-lg border border-[#1f1641]"
            >
                <div class="mx-auto h-24 w-24 text-center xl:h-28 xl:w-28">
                    <div>
                        <img :src="service.icon" alt="service icon">
                    </div>
                </div>
                <div class="text-center">
                    <h3 class="pt-8 text-lg font-semibold uppercase text-transparent bg-clip-text bg-gradient-to-r from-primary to-secondary lg:text-xl">
                        {{ service.name }}
                    </h3>
                    <p class="text-grey pt-4 text-sm group-hover:text-white md:text-base">
                        {{ service.description }}
                    </p>
                </div>
            </div>
        </div>
    </section>
</template>
<script setup>
import {ref} from 'vue';
const services =ref([
    {
        id:1,
        icon:'/src/assets/services/plant-automation.png',
        name:'Plant Automation Design',
        description:'Provides superb customer service and high quality turn-key automated systems.'
    },
    {
        id:2,
        icon:'/src/assets/services/plc-programming.png',
        name:'PLC Programming',
        description:'Provides comprehensive and customizable PLC programming designs that suit any specific project requirements.'
    },
    {
        id:3,
        icon:'/src/assets/services/switchboard.png',
        name:'Low Voltage Switchboard / MCC Panel Design',
        description:'Provides quality assured and durable LV Switchboard and MCC Panels that suit any specific project requirements.'
    },
    {
        id:4,
        icon:'/src/assets/services/control-panel.png',
        name:'Control Panel / Mimic Panel / PLC Panel Design',
        description:'Provides quality assured and durable Control Panel, Mimic Panel, PLC Panel that suit any specific project requirements.'
    },
    {
        id:5,
        icon:'/src/assets/services/networking.png',
        name:'GSCADA / HMI and Networking',
        description:'Provides comprehensive and customizable SCADA designs that are designed to serve greater practicality in any system.'
    },
    {
        id:6,
        icon:'/src/assets/services/cctv.png',
        name:'CCTV / PAGA System',
        description:''
    },
    {
        id:7,
        icon:'/src/assets/services/telecommunication-system.png',
        name:'Telecomunication System',
        description:'Provides systematic and customizable Telecomunication System designs that are designed to serve greater practicality in any system.'
    },
    {
        id:8,
        icon:'/src/assets/services/control-instrumentation.png',
        name:'Control & Instrumentation',
        description:''
    },
    {
        id:9,
        icon:'/src/assets/services/cabling-works.png',
        name:'Cabling Works',
        description:''
    },
    {
        id:10,
        icon:'/src/assets/services/earthing-works.png',
        name:'Earthing Works',
        description:''
    },
    {
        id:11,
        icon:'/src/assets/services/turn-key.png',
        name:'Turnkey Project',
        description:'BLE Global Engineering Sdn. Bhd. strives to offer, "The Full Package / Turn-key".'
    },
    {
        id:12,
        icon:'/src/assets/services/site-testing.png',
        name:'Site Testing Commissioning',
        description:''
    }
    ])
</script>

