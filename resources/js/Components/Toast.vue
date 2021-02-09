<template>
    <div v-if="hasErrors">
        <div class="toastjs-container" aria-hidden="false">
            <div class="toastjs danger" v-for="(error, key) in errors" :key="key">
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" @click="close(index)">&times;</button>
                <p>{{ error }}</p>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            index: 0,
        }
    },
    mounted() {
    },
    computed: {
        errors() {
            return this.$page.props.errors;
        },
        hasErrors() {
            return Object.keys(this.errors).length > 0;
        },
    },
    methods: {
        close(index) {
        }
    }
}
</script>

<style scoped>

</style>
