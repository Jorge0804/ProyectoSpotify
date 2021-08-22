<template>
    <Link :href="route('Spotify')">
        <button :class="`w-full text-sm font-semibold rounded px-3 py-2 flex items-center hover:text-white justify-start`">
            <i class="material-icons mr-3" style="color: white">
                <slot name="icono"></slot>
            </i>
            <p style="color: white">
                <slot name="texto"></slot>
            </p>
        </button>
    </Link>
</template>

<script>
import {Link} from '@inertiajs/inertia-vue3';

export default {
    components:{
        Link
    }
}
</script>
