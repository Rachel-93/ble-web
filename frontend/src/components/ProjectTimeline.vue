<template>
    <Teleport to="body">
        <Transition name="timeline">
            <div v-if="isOpen" class="fixed inset-0 z-50 flex flex-col bg-[#0b1120]">
                <!-- Header -->
                <div class="sticky top-0 z-10 bg-[#0b1120]/95 backdrop-blur-md border-b border-white/10">
                    <div class="max-w-6xl mx-auto px-4 py-4 flex items-center justify-between">
                        <div>
                            <h2 class="text-2xl md:text-3xl font-bold text-white">
                                Project Timeline
                            </h2>
                            <p class="text-sm text-gray-400 mt-1">
                                {{ totalProjects }} completed projects since 2011
                            </p>
                        </div>
                        <button @click="close"
                            class="p-2 rounded-full hover:bg-white/10 transition-colors group">
                            <svg class="w-6 h-6 text-gray-400 group-hover:text-white transition-colors" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>

                    <!-- Stats bar -->
                    <div class="max-w-6xl mx-auto px-4 pb-4 flex flex-wrap gap-3 md:gap-6 items-center">
                        <div class="flex items-center gap-2 px-3 py-1.5 rounded-full bg-white/5 border border-white/10 text-sm">
                            <span class="text-primary font-bold">{{ yearsActive }}</span>
                            <span class="text-gray-400">Years Active</span>
                        </div>
                        <div class="flex items-center gap-2 px-3 py-1.5 rounded-full bg-white/5 border border-white/10 text-sm">
                            <span class="text-primary font-bold">{{ totalProjects }}</span>
                            <span class="text-gray-400">Completed</span>
                        </div>

                        <!-- Search -->
                        <div class="flex-1 min-w-[200px] md:min-w-[300px]">
                            <div class="relative">
                                <svg class="absolute left-3 top-1/2 -translate-y-1/2 w-4 h-4 text-gray-500" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                                <input v-model="searchQuery" type="text"
                                    placeholder="Search projects..."
                                    class="w-full pl-10 pr-4 py-2 bg-white/5 border border-white/10 rounded-full text-sm text-white placeholder-gray-500 focus:outline-none focus:border-primary/50 focus:ring-1 focus:ring-primary/30 transition-all" />
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Timeline Content -->
                <div class="flex-1 overflow-y-auto" ref="scrollContainer">
                    <div class="max-w-6xl mx-auto px-4 py-8">
                        <div v-if="filteredYears.length === 0"
                            class="text-center py-20 text-gray-500">
                            <svg class="w-16 h-16 mx-auto mb-4 opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                            <p class="text-lg">No projects found</p>
                            <p class="text-sm mt-1">Try a different search term</p>
                        </div>

                        <!-- Year Groups -->
                        <div v-for="year in filteredYears" :key="year" class="mb-12 last:mb-0">
                            <!-- Year Header -->
                            <div class="flex items-center gap-4 mb-6">
                                <div class="flex items-center gap-3">
                                    <div class="w-3 h-3 rounded-full bg-gradient-to-r from-primary to-secondary shadow-lg shadow-primary/30"></div>
                                    <h3 class="text-3xl md:text-4xl font-black text-transparent bg-clip-text bg-gradient-to-r from-primary to-secondary">
                                        {{ year }}
                                    </h3>
                                </div>
                                <div class="flex-1 h-px bg-gradient-to-r from-primary/30 to-transparent"></div>
                                <span class="text-xs text-gray-500 bg-[#0b1120] px-2 py-1 rounded-full border border-white/5">
                                    {{ getProjectsForYear(year).length }} projects
                                </span>
                            </div>

                            <!-- Project Grid -->
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3">
                                <div v-for="(project, index) in getProjectsForYear(year)" :key="project.jobNo"
                                    class="group relative px-5 py-4 rounded-xl bg-[#111a3e]/60 border border-white/5 hover:border-primary/30 hover:bg-[#111a3e] transition-all duration-300"
                                    :style="{ animationDelay: (index * 30) + 'ms' }">
                                    <!-- Job Number Badge -->
                                    <div class="flex items-start justify-between gap-3">
                                        <div class="flex-1 min-w-0">
                                            <p class="text-sm font-mono text-primary/80 mb-1">{{ project.jobNo }}</p>
                                            <p class="text-white text-sm leading-relaxed truncate group-hover:whitespace-normal group-hover:overflow-visible transition-all">
                                                {{ project.name }}
                                            </p>
                                        </div>
                                        <div class="flex-shrink-0 mt-1">
                                            <span class="inline-flex items-center gap-1 text-[10px] text-emerald-400 bg-emerald-400/10 px-2 py-0.5 rounded-full">
                                                <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
                                                Completed
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </Transition>
    </Teleport>
</template>

<script setup>
import { ref, computed, onMounted, onUnmounted, watch } from 'vue';

const props = defineProps({
    isOpen: {
        type: Boolean,
        default: false
    }
});

const emit = defineEmits(['close']);

const allProjects = ref([]);
const searchQuery = ref('');
const scrollContainer = ref(null);

const close = () => {
    emit('close');
    searchQuery.value = '';
};

// Load project data
onMounted(async () => {
    try {
        const response = await fetch('/data/projects.json');
        allProjects.value = await response.json();
    } catch (e) {
        console.error('Failed to load projects:', e);
    }
});

// Lock body scroll when open
watch(() => props.isOpen, (open) => {
    document.body.style.overflow = open ? 'hidden' : '';
});

onUnmounted(() => {
    document.body.style.overflow = '';
});

// Close on Escape key
const handleKeydown = (e) => {
    if (e.key === 'Escape' && props.isOpen) {
        close();
    }
};
onMounted(() => document.addEventListener('keydown', handleKeydown));
onUnmounted(() => document.removeEventListener('keydown', handleKeydown));

// Computed
const totalProjects = computed(() => allProjects.value.length);
const yearsActive = computed(() => {
    const years = new Set(allProjects.value.map(p => p.year));
    return years.size;
});

const filteredProjects = computed(() => {
    if (!searchQuery.value.trim()) return allProjects.value;
    const q = searchQuery.value.toLowerCase();
    return allProjects.value.filter(p =>
        p.name.toLowerCase().includes(q) ||
        p.jobNo.toLowerCase().includes(q)
    );
});

const filteredYears = computed(() => {
    const years = [...new Set(filteredProjects.value.map(p => p.year))];
    return years.sort((a, b) => b - a);
});

const getProjectsForYear = (year) => {
    return filteredProjects.value.filter(p => p.year === year);
};
</script>

<style scoped>
.timeline-enter-active {
    transition: all 0.3s ease-out;
}
.timeline-leave-active {
    transition: all 0.2s ease-in;
}
.timeline-enter-from {
    opacity: 0;
    transform: translateY(20px);
}
.timeline-leave-to {
    opacity: 0;
    transform: translateY(20px);
}
</style>
