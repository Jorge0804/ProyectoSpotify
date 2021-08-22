<template>
    <div class="flex items-center">
        <LeftSpotify/>
        <RightSpotify/>
    </div>
</template>

<script>
    import LeftSpotify from './BackTop';
    import RightSpotify from './NextTop';

    export default {
        components: {
            LeftSpotify,
            RightSpotify
        }
    }
</script>
