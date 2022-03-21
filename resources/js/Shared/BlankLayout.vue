<template>
    <p v-if="$page.props.message" class="bg-indigo-600 h-10 flex items-center justify-center text-sm font-medium text-white px-4 sm:px-6 lg:px-8">
        {{ $page.props.message }}
    </p>

    <div class="container mx-auto">
        <div class="my-10">
            <slot />
        </div>
    </div>
</template>

<script>
import {Link} from '@inertiajs/inertia-vue3'

export default {
    components: {
        Link
    }
};
</script>