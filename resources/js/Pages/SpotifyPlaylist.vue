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
                <!-- Canciones -->
                <div class="px-6 py-3 h-full">
                    <!-- Info. -->
                    <InfoPlaylist>
                        <template v-slot:imagen>
                            <img :src="'/images'+playlist.imagen.ruta+'/'+playlist.imagen.nombre+'.'+playlist.imagen.extension">
                        </template>
                        <template v-slot:nombre>
                            {{playlist.nombre}}
                        </template>
                        <template v-slot:descripcion>
                            {{playlist.descripcion}}
                        </template>
                        <template v-slot:cantidad>
                            {{playlist.canciones.length}} canciones
                        </template>
                    </InfoPlaylist>
                    <DivisionSpotify style="margin-top: 30px; margin-bottom: 15px; color: gray"/>
                    <!-- Tools -->
                    <Tools/>
                    <div class="flex justify-start w-full h-full" style="flex-direction: column; margin-top: 10px; color: lightgray; padding-right: 30px; padding-left: 30px;">
                        <!-- Table Header -->
                        <TableHeader/>
                        <DivisionSpotify/>
                        <!-- Table Body -->
                        <CancionSpotify @click="PlayMusic" v-for="cancion in playlist.canciones" :cancion="cancion"/>
                    </div>
                </div>
            </div>
        </div>
        <!-- Play skip etc -->
        <div class="w-full flex items-center justify-between px-3 border-gray-300" style="height:12vh; background-color: #282828; padding: 14px;">
            <PlayBar/>
        </div>
    </div>
</template>

<script>
import SideBar from '../MisComponentes/SideBar/SideBar';
import Header from "../MisComponentes/Header/Header";
import PlayBar from "../MisComponentes/PlayBar/PlayBar";
import DivisionSpotify from '../MisComponentes/SideBar/DivisionSide';
import InfoPlaylist from '../MisComponentes/Base/Playlist/Info';
import Tools from "../MisComponentes/Base/Playlist/Tools";
import TableHeader from '../MisComponentes/Base/Playlist/TableHeader';
import CancionSpotify from '../MisComponentes/Base/Playlist/TableBody';

var cancion = new Audio('/Musica/NothingOnYou.mp3');

export default {
    data() {
        return {
            enReproduccion: {status: false, cancion: null},
            global: 'spoti'
        }
    },
    props:[
        'playlist',
        'playlists',
        'usuario'
    ],
    components: {
        Tools,
        PlayBar,
        SideBar,
        Header,
        DivisionSpotify,
        InfoPlaylist,
        TableHeader,
        CancionSpotify
    },
    methods: {
        PlayMusic: function(){
            if (this.enReproduccion.status == false){
                cancion.play();
                this.enReproduccion.status = true;
            } else{
                cancion.pause();
                this.enReproduccion.status = false;
            }
        }
    }
}
</script>
