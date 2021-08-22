<template>
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
            <i class="material-icons text-green mx-4">favorite</i>
            <p style="font-size: 15px">2:40</p>
        </div>
    </div>
</template>

<script>
    export default {
        props:[
            'cancion'
        ]
    }
</script>
