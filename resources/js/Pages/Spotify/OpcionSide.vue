<template>
    <button :class="`w-full text-sm font-semibold rounded px-3 py-2 flex items-center hover:text-white justify-start`">
        <i class="material-icons mr-3">
           <slot name="icono"></slot>
        </i>
        <p>
            <slot name="texto"></slot>
        </p>
    </button>
</template>
