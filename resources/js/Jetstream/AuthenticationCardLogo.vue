<template>
    <Link :href="'/'">
        <img src="../../Images/logo_verde.png" class="w-16 h-16" viewBox="0 0 48 48" fill="none">
    </Link>
</template>

<script>
    import { Link } from '@inertiajs/inertia-vue3';

    export default {
        components: {
            Link,
        },
    }
</script>
