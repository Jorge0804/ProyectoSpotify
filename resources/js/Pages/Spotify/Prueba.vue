<template>
    <OpcionSpotify>
        <template v-slot:icono>
            home
        </template>
        <template v-slot:texto>
            {{cancion.nombre}}
        </template>
    </OpcionSpotify>
</template>

<script>
import OpcionSpotify from '../../MisComponentes/SideBar/OpcionSide';

export default{
    props:[
        'cancion'
    ],
    components:{
        OpcionSpotify
    }
}
</script>
