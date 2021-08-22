<template>
    <Link :href="route('SpotifyLikes', {id_playlist: playlist.id_playlist})">
        <p class="text-lightest hover:text-white text-sm py-2" style="color: white">
            {{playlist.nombre}}
        </p>
    </Link>
</template>

<script>
import {Link} from '@inertiajs/inertia-vue3';

export default {
    props:[
        'playlist'
    ],
    components:{
        Link
    }
}
</script>
