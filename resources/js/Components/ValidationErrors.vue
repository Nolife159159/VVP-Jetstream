<template>
    <div v-if="hasErrors">

        <div class="login-klaida" v-for="(error, key) in errors" :key="key">{{ error }}</div>

    </div>
</template>

<script>
    export default {
        computed: {
            errors() {
                return this.$page.props.errors
            },

            hasErrors() {
                return Object.keys(this.errors).length > 0;
            },
        }
    }
</script>
<style lang="scss" scoped>
.login-klaida {
    color: #e3242b;
}
</style>
