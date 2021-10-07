<template>
    <div v-if="links.length > 3" class="bg-white px-4 py-3 flex items-center justify-between border-t border-gray-200 sm:px-6">
        <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
            <div>
                <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                    <!-- active - text-blue-500 font-bold -->
                    <!-- url null - bg-gray-100 -->

                    <Link v-for="(link, k) in links"
                      :href="link.url"
                      :key="k"
                      :disabled="link.url === null"
                      :class="{'text-blue-500 font-bold': link.active, 'bg-gray-100': link.url === null}"
                       v-html="link.label"
                       class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium"

                    />
                </nav>
            </div>
        </div>
    </div>
</template>

<script>
import {Link} from '@inertiajs/inertia-vue3'

export default {
    components: {
        Link,
    },
    props: {
        links: Array,
    }
};
</script>