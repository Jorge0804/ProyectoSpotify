<template>
    <OpcionSpotify>
        <template v-slot:icono>
            home
        </template>
        <template v-slot:texto>
            Hola
        </template>
    </OpcionSpotify>
</template>

<script>
console.log(cancion);
import OpcionSpotify from './OpcionSide';

export default{
    components:{
        OpcionSpotify
    }
}
</script>
