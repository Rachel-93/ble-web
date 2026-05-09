<template>
    <section class="text-white mt-20" id="projects">
        <div class="px-4 xl:pl-16">
            <div class="mb-4 md:flex md:justify-between xl:pr-16">
                <h2 class="text-4xl font-bold text-white">Our Projects</h2>
                <div class="flex space-x-4 mb-4 mt-5 md:mt-0">
                    <button class="hover:text-primary" v-for="category in ['All', 'Automation', 'Power Distribution', 'Infrastructure']"
                        :key="category" @click="() => selectedCategory = category"
                        :class="{ 'text-primary': selectedCategory === category }">
                        {{ category }}
                    </button>
                </div>
            </div>
            <ul class="px-4 sm:py-16 xl:pr-16 grid grid-cols-1 gap-6 pt-10 sm:grid-cols-2 md:gap-10 md:pt-12 lg:grid-cols-3"
                data-aos="fade-right">
                <div v-for="project in filteredProjects" :key="project.id">
                    <div class="h-52 md:h-[24rem] rounded-t-xl relative group"
                    :style="{ backgroundImage: 'url(' + project.image + ')', backgroundSize: 'cover' }">                    
                    <div class="overlay items-center justify-center absolute top-0 left-0 w-full h-full bg-[#181818] bg-opacity-0
                    hidden group-hover:flex group-hover:bg-opacity-80 transition-all duration-500
                    ">
                        <p class="text-white text-center px-4">{{ project.description }}</p>
                    </div>
                </div>
                <div class="text-white rounded-b-xl mt-3 bg-[#111a3e] shadow-lg border border-[#1f1641] py-6 px-4">
                    <h3 class="text-lg font-semibold uppercase lg:text-xl"> {{ project.title }}</h3>
                    <p class="text-[#ADB7BE]">{{ project.description }}</p>
                    <div class="flex flex-wrap p-2.5">
                        <div v-for="technology in project.technologies" :key="technology" class="text-center ml-1 mt-1 rounded-3xl bg-[#111827]"
                        style="box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1); border: 1px solid #111827;backdrop-filter: blur(9px);-webkit-backdrop-filter: blur(9px);"
                        >
                    <p class="px-1 py-2">{{ technology }}</p>
                    </div>
                    </div>
                </div>
                </div>
            </ul>
        </div>
    </section>
</template>
<script setup>
import { ref, computed } from 'vue';

const Projects = ref([
    {
        id: 1,
        category: 'Automation',
        image: '/projects/scada-system.jpg',
        title: 'SCADA & HMI System',
        description: 'Design and development of SCADA/HMI systems for industrial plant automation and real-time monitoring across multiple facilities in Vietnam and Malaysia.',
        technologies: ['SCADA', 'HMI', 'Networking', 'PLC'],
    },
    {
        id: 2,
        category: 'Power Distribution',
        image: '/projects/mcc-panels.jpg',
        title: 'MCC Panel Manufacturing',
        description: 'Custom design, manufacturing and installation of Motor Control Centre (MCC) panels and low voltage switchboards for industrial applications.',
        technologies: ['MCC', 'Switchboard', 'Low Voltage'],
    },
    {
        id: 3,
        category: 'Power Distribution',
        image: '/projects/control-panels.jpg',
        title: 'Control Panel Systems',
        description: 'Engineering and supply of control panels, mimic panels and PLC panels for wastewater treatment plants and manufacturing facilities.',
        technologies: ['Control Panels', 'PLC Panels', 'Mimic Panels'],
    },
    {
        id: 4,
        category: 'Infrastructure',
        image: '/projects/cabling-works.jpg',
        title: 'Cabling & Instrumentation Works',
        description: 'Complete cabling, control and instrumentation works for industrial plants including CCTV and PAGA systems integration.',
        technologies: ['Cabling', 'Instrumentation', 'CCTV', 'PAGA'],
    },
    {
        id: 5,
        category: 'Infrastructure',
        image: '/projects/earthing-works.jpg',
        title: 'Earthing Works',
        description: 'Design and installation of earthing systems for industrial facilities, ensuring safety compliance and reliable grounding solutions.',
        technologies: ['Earthing', 'Safety', 'Grounding'],
    },
    {
        id: 6,
        category: 'Automation',
        image: '/projects/site-commissioning.jpg',
        title: 'Site Testing & Commissioning',
        description: 'On-site testing, commissioning and handover services for turnkey electrical engineering projects across Southeast Asia.',
        technologies: ['Commissioning', 'Testing', 'Turnkey'],
    }
]);

const selectedCategory = ref('All');
const filteredProjects = computed(() => {
    if (selectedCategory.value === 'All') {
        return Projects.value;
    }
    return Projects.value.filter(project => project.category.toLocaleLowerCase() === selectedCategory.value.toLocaleLowerCase());
})

</script>
