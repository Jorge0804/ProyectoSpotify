<template>
    <Link :href="route('Likes')">
        <button class="flex text-sm items-center justify-start text-white opacity-75 hover:opacity-100" style="margin-left: 12px">
            <img src="../../../Images/favoritas.png" class="h-8 w-8 mr-3"/>
            <p class="truncate" style="color: white">Tus me gusta</p>
        </button>
    </Link>
</template>

<script>
    import {Link} from '@inertiajs/inertia-vue3';

    export default {
        components: {
            Link
        }
    }
</script>
