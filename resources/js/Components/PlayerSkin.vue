<template>
    <div class="col">
        <img class="skin" :src="'/img/skins/'+DisplaySkin()+'.png'" >
    </div>
</template>

<script>
export default {
    methods: {
        DisplaySkin() {
            if(this.$page.props.SearchUserInfo === undefined) {
                return this.$page.props.user.skin;
            } else {
                return this.$page.props.SearchUserInfo.skin;
            }
        }
    }
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
