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
        icon:'/services/plant-automation.png',
        name:'Plant Automation Design',
        description:'Provides superb customer service and high quality turn-key automated systems.'
    },
    {
        id:2,
        icon:'/services/plc-programming.png',
        name:'PLC Programming',
        description:'Provides comprehensive and customizable PLC programming designs that suit any specific project requirements.'
    },
    {
        id:3,
        icon:'/services/switchboard.png',
        name:'Low Voltage Switchboard / MCC Panel Design',
        description:'Provides quality assured and durable LV Switchboard and MCC Panels that suit any specific project requirements.'
    },
    {
        id:4,
        icon:'/services/control-panel.png',
        name:'Control Panel / Mimic Panel / PLC Panel Design',
        description:'Provides quality assured and durable Control Panel, Mimic Panel, PLC Panel that suit any specific project requirements.'
    },
    {
        id:5,
        icon:'/services/networking.png',
        name:'SCADA / HMI and Networking',
        description:'Provides comprehensive and customizable SCADA designs that are designed to serve greater practicality in any system.'
    },
    {
        id:6,
        icon:'/services/cctv.png',
        name:'CCTV / PAGA System',
        description:'Provides intelligent security surveillance and public address / general alarm system solutions for comprehensive site monitoring and safety.'
    },
    {
        id:7,
        icon:'/services/telecommunication-system.png',
        name:'Telecommunication System',
        description:'Provides systematic and customizable Telecommunication System designs that are designed to serve greater practicality in any system.'
    },
    {
        id:8,
        icon:'/services/control-instrumentation.png',
        name:'Control & Instrumentation',
        description:'Provides complete control and instrumentation solutions including field device installation, calibration, and system integration for industrial processes.'
    },
    {
        id:9,
        icon:'/services/cabling-works.png',
        name:'Cabling Works',
        description:'Provides comprehensive cabling services including power, control, instrument, network/IT, telephone, and fibre-optic cabling works.'
    },
    {
        id:10,
        icon:'/services/earthing-works.png',
        name:'Earthing Works',
        description:'Provides professional earthing and lightning protection system installation to ensure electrical safety and equipment protection.'
    },
    {
        id:11,
        icon:'/services/turn-key.png',
        name:'Turnkey Project',
        description:'BLE Global Engineering Sdn. Bhd. strives to offer, "The Full Package / Turn-key".'
    },
    {
        id:12,
        icon:'/services/site-testing.png',
        name:'Site Testing Commissioning',
        description:'Provides thorough on-site testing, commissioning, and factory acceptance testing to ensure all systems perform to specification.'
    },
    {
        id:13,
        icon:'/services/solar-off-grid.svg',
        name:'Solar Off Grid System',
        description:'Provides reliable solar off-grid power solutions for remote and rural areas where grid connection is unavailable.'
    },
    {
        id:14,
        icon:'/services/generator-set.svg',
        name:'Generator Set',
        description:'Supplies and installs quality generator sets for reliable backup and primary power generation.'
    },
    {
        id:15,
        icon:'/services/acoustic-solution.svg',
        name:'Acoustic Solution',
        description:'Provides acoustic enclosure solutions for noise reduction and sound attenuation in industrial environments.'
    },
    {
        id:16,
        icon:'/services/explosion-proof-panel.svg',
        name:'Explosion Proof Panel',
        description:'Designs and fabricates explosion-proof control panels for hazardous area applications.'
    }
    ])
</script>

