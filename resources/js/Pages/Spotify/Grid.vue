<template>
    <div class="bg-dark h-screen" style="background-color: red">
        <div class="flex" style="height: 88vh;">
            <!-- Sidebar -->
            <div class="w-56 bg-black h-full flex-none">
                <SideBar :playlists="playlists"/>
            </div>
            <!-- Main -->
            <div class="w-full h-full relative overflow-y-scroll" style="background-color: #121212">
                <!-- Header -->
                <Header :usuario="usuario"/>
                <!-- Categorías -->
                <div class="px-6 py-3">
                    <Categorias v-for="categoria in categorias" :categoria="categoria">
                        <template v-slot:usuario>{{usuario.name}}</template>
                    </Categorias>
                </div>
            </div>
        </div>
        <!-- Play skip etc -->
        <div class="w-full flex items-center justify-between px-3 bg-light border-t border-dark" style="height:12vh; background-color: purple">

        </div>
    </div>
</template>

<script>
    import SideBar from '../../MisComponentes/SideBar/SideBar';
    import Header from "../../MisComponentes/Header/Header";
    import Categorias from '../../MisComponentes/Base/Categorias/Categoria';

    export default {
        props:[
            'playlists',
            'usuario',
            'categorias'
        ],
        components: {
            SideBar,
            Header,
            Categorias
        }
    }
</script>
