<template>
    <CancionInfo/>
    <Reproductor/>
    <Elementos/>
</template>

<script>
    import CancionInfo from './Cancion';
    import Reproductor from './Reprodutor';
    import Elementos from './ElementosReproductor';

    export default {
        components:{
            CancionInfo,
            Reproductor,
            Elementos
        }
    }
</script>
