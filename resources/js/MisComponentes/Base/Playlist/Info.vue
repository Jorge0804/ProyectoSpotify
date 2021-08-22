<template>
    <div class="flex justify-between w-full w-10" style="height: 40%; width: 100%; padding-left: 40px;">
        <img :src="'/images'+playlist.imagen.ruta+'/'+playlist.imagen.nombre+'.'+playlist.imagen.extension">
        <div class="flex" style="color:white; flex-direction: column; vertical-align: bottom; width: 70%; vertical-align: text-bottom; padding-bottom: 10px">
            <label style="font-size: 70px">{{playlist.nombre}}</label>
            <label style="font-size: 25px">{{playlist.descripcion}}</label>
            <label style="font-size: 15px">{{playlist.canciones.length}} canciones</label>
        </div>
    </div>
</template>

<script>
    export default {
        props: [
            'playlist'
        ]
    }
</script>
