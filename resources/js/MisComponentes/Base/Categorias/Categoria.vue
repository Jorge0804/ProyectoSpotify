<template>
    <div class="flex items-center justify-between">
        <h1 class="pl-2 text-2xl font-semibold text-white tracking-wider hover:underline truncate">
            {{categoria.titulo}} <slot name="usuario"></slot> Desde servidor 2
        </h1>
        <h2 class="pr-8 pt-4 mb-3 text-xs font-semibold text-lightest uppercase tracking-wider hover:underline" style="color: white">Ver más</h2>
    </div>
    <div class="w-full flex flex-wrap">
        <PlaylistCard v-for="playlist in categoria.playlists" :playlist="playlist">
            <template v-slot:titulo>{{ playlist.nombre }}</template>
            <template v-slot:descripcion>{{ playlist.descripcion }}</template>
        </PlaylistCard>
    </div>
</template>

<script>
    import PlaylistCard from './PlaylistCard';

    export default {
        props:[
            'categoria'
        ],
        components:{
            PlaylistCard
        }
    }
</script>
