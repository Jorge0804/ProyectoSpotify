<template>
    <div class="w-full sticky top-0 py-4 px-6 flex items-center justify-between bg-dark z-50" style="background-color: #121212">
        <NavigationSpotify/>
        <Perfil :usuario="usuario"/>
    </div>
</template>

<script>
    import NavigationSpotify from './NavigationTop';
    import Perfil from './Perfil/Perfil';

    export default {
        props:[
            'usuario'
        ],
        components:{
            NavigationSpotify,
            Perfil
        }
    }
</script>
