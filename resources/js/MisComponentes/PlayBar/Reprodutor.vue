<template>
    <div class="flex flex-col justify-center w-2/4 items-center">
        <div class="flex items-center">
            <audio src="fav.m4a" preload="metadata" loop ref="audio" />
            <button class="mx-3 text-lightest hover:text-white"><i class="material-icons text-base">shuffle</i></button>
            <button class="text-lightest hover:text-white"><i class="material-icons text-base">skip_previous</i></button>
            <button @click="playSong()" class="rounded-full h-8 w-8 flex items-center justify-center mx-3 boder-lightest border text-lightest hover:text-white"><i class="material-icons">play_arrow</i></button>
            <button class="text-lightest hover:text-white"><i class="material-icons text-base">skip_next</i></button>
            <button class="mx-3 text-lightest hover:text-white"><i class="material-icons text-base">repeat</i></button>
        </div>
        <div class="w-3/4 flex items-center justify-center mt-3">
            <p class="text-xs text-lightest mr-1" ref="current" style="color: white">0:00</p>
            <!--<div class="range-slider w-full" style='--min:0; --max:100; --step:1; --value:0; --text-value:"0";'>
                <input ref="seekslider" type="range" min="0" max="100" oninput="this.parentNode.style.setProperty('--value',this.value); this.parentNode.style.setProperty('--text-value', JSON.stringify(this.value))">
                <div class='range-slider__progress'></div>
            </div>-->
            <p class="text-xs text-lightest ml-1" ref="duration" style="color: white">2:40</p>
        </div>
    </div>
</template>

<script>
    export default {
        mounted(){
            const audio = this.$refs.audio
            const durationContainer = this.$refs.duration
            const currentTimeContainer = this.$refs.current


            const displayDuration = () => {
                durationContainer.textContent = calculateTime(audio.duration);
            }
            if (audio.readyState > 0) {
                displayDuration();
            } else {
                audio.addEventListener('loadedmetadata', () => {
                    displayDuration();
                });
            }

            const seekSlider = this.$refs.seekslider

            seekSlider.addEventListener('input', () => {
                currentTimeContainer.textContent = calculateTime(seekSlider.value);
            });

            const setSliderMax = () => {
                seekSlider.max = Math.floor(audio.duration);
            }

            if (audio.readyState > 0) {
                displayDuration();
                setSliderMax();
            } else {
                audio.addEventListener('loadedmetadata', () => {
                    displayDuration();
                    setSliderMax();
                });
            }
        }
    }
</script>
