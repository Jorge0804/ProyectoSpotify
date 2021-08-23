<template>
    <div class="flex justify-between w-full w-10" style="height: 40%; width: 100%; padding-left: 40px;">
        <slot name="imagen"></slot>
        <div class="flex" style="color:white; flex-direction: column; vertical-align: bottom; width: 70%; vertical-align: text-bottom; padding-bottom: 10px">
            <label style="font-size: 70px">
                <slot name="nombre"></slot>
            </label>
            <label style="font-size: 25px">
                <slot name="descripcion"></slot>
            </label>
            <label style="font-size: 15px">
                <slot name="cantidad"></slot>
            </label>
        </div>
    </div>
</template>
