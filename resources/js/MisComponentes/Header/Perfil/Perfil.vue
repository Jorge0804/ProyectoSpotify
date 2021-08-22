<template>
    <div class="relative">
        <BotonPerfil :usuario="usuario"/>
    </div>
</template>

<script>
    import BotonPerfil from './BotonPerfil';

    export default {
        props: [
            'usuario'
        ],
        components: {
            BotonPerfil
        }
    }
</script>
