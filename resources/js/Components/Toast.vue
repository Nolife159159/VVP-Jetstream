<template>
    <div v-if="hasErrors">
        <div class="toastjs-container" aria-hidden="false">
            <div class="toastjs danger" v-for="key in Object.keys(errors)" :key="key">
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" @click="close(key)">
                    &times;
                </button>
                <p>{{ errors[key] }}</p>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return { };
    },
    mounted() {},
    computed: {
        errors() {
            return this.$page.props.errors;
        },
        hasErrors() {
            return Object.keys(this.errors).length > 0;
        }
    },
    methods: {
        // It's basically this, somehow delete doesn't trigger changes in the internal object
        close(index) {
            const errors = { ...this.$page.props.errors };
            delete errors[index];
            this.$page.props.errors = errors;
        }
    }
}
</script>

<style scoped>

</style>
