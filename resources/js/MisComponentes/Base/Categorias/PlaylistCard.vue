<template>
    <Link :href="route('Playlist', {id_playlist: playlist.id_playlist})">
        <div class="p-4 w-60 relative">
            <div class="absolute w-full h-full flex items-end justify-end p-8 opacity-0 hover:opacity-100">
                <div class="rounded-full h-11 w-11 flex items-center justify-center" style="background-color: #1db954; margin-bottom: 15px">
                    <i class="material-icons text-white text-2xl">play_arrow</i>
                </div>
            </div>
            <div class="bg-light rounded-lf shadow-md w-full h-auto p-5" style="background-color: #282828">
                <img :src="'/images'+playlist.imagen.ruta+'/'+playlist.imagen.nombre+'.'+playlist.imagen.extension" class="h-auto w-full shadow mb-2">
                <h1 class="text-sm font-semibold text-white tracking-wide">
                    <slot name="titulo"></slot>
                </h1>
                <h2 class="text-xs line-clamp-2 text-lightest tracking-wide pt-2" style="color: lightgray">
                    <slot name="descripcion"></slot>
                </h2>
            </div>
        </div>
    </Link>
</template>

<script>
    import {Link} from '@inertiajs/inertia-vue3';

    export default {
        components:{
            Link
        },
        props: [
            'playlist'
        ]
    }
</script>
