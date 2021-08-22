<template>
    <button @click="showDropdown=!showDropdown" class="bg-light rounded-full py-1 px-2 flex items-center" style="background-color: #282828">
        <img src="../../../../Images/perfil.gif" class="rounded-full h-6 w-6 mr-2" />
        <p class="text-white font-semibold truncate mr-3">{{usuario.name}}</p>
        <i v-if="!showDropdown" class="material-icons text-white">arrow_drop_down</i>
        <i v-else class="material-icons text-white">arrow_drop_up</i>
    </button>
    <div v-if="showDropdown" class="absolute bg-light w-full rounded mt-1 z-50" style="background-color: #282828">
        <OpcionPerfil v-for="opcion in opcionesPerfil" :opcion="opcion">
            <template v-slot:nombre>
                {{opcion.nombre}}
            </template>
        </OpcionPerfil>
    </div>
</template>

<script>
    import OpcionPerfil from './OpcionPerfil';

    export default {
        props: [
            'usuario'
        ],
        components: {
            OpcionPerfil
        },
        data() {
            return {
                showDropdown: false,
                opcionesPerfil: [
                    {id: 1, nombre: 'Cuenta', link: '#'},
                    {id: 2, nombre:'Perfil', link: '#'},
                    {id: 3, nombre:'Cerrar sesión', link: 'login'}
                ]
            }
        }
    }
</script>
