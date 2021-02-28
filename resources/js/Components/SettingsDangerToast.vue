<template>
    <div>
        <div class="toastjs-container" aria-hidden="false" v-show='toggle'>
            <div class="toastjs danger">
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" @click="close()">
                    &times;
                </button>
                <slot></slot>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            toggle: true,
        };
    },
    methods: {
        close() {
            this.toggle = false;
            this.$emit('close');
        }
    }
}
</script>

<style scoped>

</style>
