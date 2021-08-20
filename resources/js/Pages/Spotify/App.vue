<template>
    <OpcionSpotify>
        <template v-slot:icono>home</template>
        <template v-slot:texto>Holax4</template>
    </OpcionSpotify>
</template>

<script>
import OpcionSpotify from './OpcionSide';

export default {
    components:{
        OpcionSpotify
    }
}
</script>
