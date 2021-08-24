<template>
    <div style="cursor: pointer" >
        <div class="absolute flex w-full h-16 justify-start opacity-0 hover:opacity-100" style="width: 80%;align-items: center;">
            <div class="justify-center" style="background-color: rgba(0, 0, 0, 0.50)">
                <i class="material-icons text-white text-2xl" style="margin-left: 5px; margin-right: 12px; margin-top: 2px; margin-bottom: 2px;">play_arrow</i>
            </div>
        </div>
        <div class="flex w-full h-16 justify-start justify-between" style="align-items: center;">
            <div class="flex justify-start" style="flex-direction: row;">
                <img width="40" height="40" :src="'/images'+cancion.imagen.ruta+'/'+cancion.imagen.nombre+'.'+cancion.imagen.extension">
                <div class="flex" style="flex-direction: column; padding-left: 10px">
                    <p style="font-size: 15px">{{ cancion.nombre }}</p>
                    <p style="font-size: 10px">{{ cancion.artista }}</p>
                </div>
            </div>
            <p style="font-size: 15px">{{ cancion.album }}</p>
            <div class="flex" style="flex-direction: row">
                <Link :href="route('DarLike', {id_cancion: cancion.id_cancion})">
                    <i class="material-icons text-green mx-4">favorite</i>
                </Link>
                <p style="font-size: 15px">2:40</p>
            </div>
        </div>
    </div>
</template>

<script>
    import {Link} from '@inertiajs/inertia-vue3';

    export default {
        components:{
          Link
        },
        props:[
            'cancion'
        ]
    }
</script>
