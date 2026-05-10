<template>
    <section class="relative w-full" data-aos="zoom-in-up">
        <div class="absolute top-0 inset-x-0 h-64 flex items-start">
            <div class="h-24 w-2/3 bg-gradient-to-br from-[#570cac] blur-2xl invisible opacity-40"></div>
            <div class="h-20 w-3/5 bg-gradient-to-r from-[#670ccf] opqcity-40 blur-2xl"></div>
        </div>
        <div class="w-full px-5 sm:px-8 md:px-12 lg:px-8 max-w-screen-lg lg:max-w-screen-xl mx-auto relative">
            <div class="grid lg:grid-cols-2 gap-10 xl:gap-14 relative pt-24 lg:max-w-none max-w-2xl md:max-w-3xl mx-auto">
                <div class="lg:py-6">
                    <div class="text-center lg:text-left">
                        <h1 class="pt-4 text-white font-bold text-4xl md:text-5xl lg:text-6xl">
                            Welcome to 
                            <p>
                                <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-pink-500">
                                    BLE GLOBAL ENGINEERING
                                </span>
                            </p>
                        </h1>
                    </div>
                    <p class="text-gray-300 pt-8 text-center lg:text-left mx-auto max-w-xl">
                        BLE Global Engineering Sdn. Bhd. is a leading provider of electrical engineering solutions.
                        Possessing one of the most advanced technology in the industry, BLE Global Engineering Sdn. Bhd. is a progressive solution provider advocating for tomorrow’s advance, for today. Hence our motto;
                        Realising Tomorrow’s Life. Today.
                    </p>
                </div>
                <div class="lg:h-full flex justify-center items-center">
                    <div class="flex w-full h-48 sm:h-64 md:h-80 lg:h-full items-center justify-center relative">
                        <div class="absolute z-0 top-1/2 -translate-y-1/2 w-5/6 right-0 h-[calc(80%+20px)] bg-gradient-to-tr opacity-25 from-[#570cac] to-primary blur-2xl"></div>
                        <div class="z-10 p-2 w-40 h-40 sm:w-56 sm:h-56 md:w-64 md:h-64 lg:w-72 lg:h-72 rounded-full shadow-lg border border-primary">
                            <img src="@/assets/ble-logo.png" alt="BLE Logo" loading="lazy"
                            class="w-full h-full rounded-full object-cover"
                            >
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
<script setup>
import AOS from 'aos';
import 'aos/dist/aos.css';
AOS.init();
</script>