<template>
    <div class="title-content">
        <span class="big-text">PROFILIS<br>
        <span class="name">{{ DisplayName() }}</span></span>
        <a :href="route('Nustatymai')" v-if="!this.$page.props.SearchUserInfo">
            <button type="button" class="btn btn-outline-light settings-button">Nustatymai</button>
        </a>
    </div>
</template>

<script>
export default {
    methods: {
        DisplayName() {
            if(this.$page.props.SearchUserInfo === undefined) {
                return this.$page.props.user.vardas;
            } else {
                return this.$page.props.SearchUserInfo.vardas;
            }
        }
    }
}
</script>

<style lang="scss" scoped>
.title-content {
    height: 142px;
    margin: 15px 15px 0px 15px;
    display: flex;
    background: url("/public/img/texture.png");
    background-repeat: no-repeat;
    background-size: cover;
    justify-content: space-between;
}
.settings-button {
    height: 50px;
    border-radius: 10px !important;
    margin-right: 50px;
}
.big-text {
    font-size: 72px;
    font-family: "Calibri";
    color: #FFFFFF;
    font-variant: small-caps;
    line-height: 0.2;
    margin-left: 15px;
    padding-top: 30px;
}
.name {
    font-size: 36px;
    font-family: "Calibri";
    color: #99999A;
    font-variant: small-caps;
    line-height: 3.0;
    margin-right: 25px;
}
@media (max-width: 768px) {
    .title-content {
        height: 142px;
        display: flex;
        margin: 0px !important;
        background: url("/public/img/texture.png");
        background-repeat: no-repeat;
        background-size: cover;
    }
    .settings-button {
        height: 50px;
        border-radius: 10px !important;
        margin-right: 15px;
    }
    .big-text {
        padding-top: 37px;
        font-size: 42px;
        font-family: "Calibri";
        color: #FFFFFF;
        font-variant: small-caps;
        line-height: 1.2;
        margin-left: 15px;
    }
    .name {
        font-size: 20px;
        font-family: "Calibri";
        color: #99999A;
        font-variant: small-caps;
        line-height: 1.2;
        margin-right: 25px;
    }
}

@font-face {
    font-family: "CRASSROOTSOFLREG";
    src: url('/font/Calibri.ttf') format("truetype");
    font-weight: normal;
    font-style: normal;
}
</style>
