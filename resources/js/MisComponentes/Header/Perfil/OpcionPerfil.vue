<template>
    <Link @click="logout">
        <button class="w-full py-2 pl-3 text-white text-left hover:bg-lightest text-sm opacity-75 hover:opacity-100">
            <slot name="nombre"></slot>
        </button>
    </Link>
</template>

<script>
    import { Link } from '@inertiajs/inertia-vue3';

    export default {
        components:{
            Link
        },
        props:[
            'opcion'
        ],
        methods:{
            logout() {
                this.$inertia.post(route('logout'));
            }
        }
    }
</script>
