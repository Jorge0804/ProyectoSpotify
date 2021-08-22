<template>
    <div class="w-56 bg-black h-full flex-none" style="background-color: black; height: 88vh;">
        <LogoSpotify/>
        <OpcionSpotify v-for="opcion in opciones" @click="opcion.id">
            <template v-slot:icono>
                {{ opcion.icono }}
            </template>
            <template v-slot:texto>
                {{ opcion.nombre }}
            </template>
        </OpcionSpotify>
        <OpcionLikesSpotify style="margin-left: 10px"/>
        <div class="mx-5" style="background-color: black">
            <DivisionSpotify/>
        </div>
        <div class="mx-5">
            <div class="w-full h-64 overflow-y-scroll">
                <AlbumsSpotify v-for="playlist in playlists" :playlist="playlist"/>
            </div>
        </div>
    </div>
</template>

<script>
    import LogoSpotify from './Logo';
    import OpcionSpotify from './OpcionSide';
    import OpcionLikesSpotify from './OpcionMeGusta';
    import DivisionSpotify from './DivisionSide';
    import AlbumsSpotify from './AlbumsSide';

    export default {
        components:{
            LogoSpotify,
            OpcionSpotify,
            OpcionLikesSpotify,
            DivisionSpotify,
            AlbumsSpotify
        },
        props:[
            'playlists',
            'prueba'
        ],
        data() {
            return {
                opciones:[
                    {id: 'home', nombre: 'Inicio', icono: 'home'},
                    {id: 'buscar', nombre: 'Buscar', icono: 'search'},
                    {id: 'biblioteca', nombre: 'Tu Biblioteca', icono: 'bar_chart'},
                    {id: 'agregar', nombre: 'Crear lista', icono: 'add_box'}
                ]
            }
        }
    }
</script>
