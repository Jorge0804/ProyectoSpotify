<template>
    <Link :href="route('Spotify')">
        <button class="rounded-full bg-black w-8 h-8 text-white mr-3">
            <i class="material-icons text-3xl">keyboard_arrow_left</i>
        </button>
    </Link>
</template>

<script>
    import { Link } from '@inertiajs/inertia-vue3';

    export default {
        components:{
            Link
        }
    }
</script>
