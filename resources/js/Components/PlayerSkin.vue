<template>
    <div class="col">
        <img class="skin" :src="'img/skins/'+this.$page.props.user.skin+'.png'" >
    </div>
</template>

<script>
export default {
}
</script>

<style lang="scss" scoped>
.skin {
    width: 500px;
    height: 400px;
    margin-bottom: 20px;
}
@media (max-width: 768px) {
    .skin {
        width: 320px;
    }
}
</style>
