<template>
    <div class="title-content">
        <span class="big-text">{{ this.$page.props.user.vardas }}<br>
        <span class="name">Profilio nustatymai</span></span>
        <img class="svg-logo"src="img/svg/nustatymai-svg.svg" alt=""/>
    </div>
</template>

<script>
export default {
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
.big-text {
    font-size: 72px;
    font-family: "Calibri";
    color: #FFFFFF;
    font-variant: small-caps;
    line-height: 0.2;
    margin-left: 15px;
    margin-top: 40px;
}
.name {
    font-size: 36px;
    font-family: "Calibri";
    color: #99999A;
    font-variant: small-caps;
    line-height: 3.2;
    margin-right: 115px;
}
.svg-logo {
    padding: 20px;
}
@media (max-width: 768px) {
    .big-text {
        padding-top: 37px;
        font-size: 42px;
        margin-left: 15px;
        line-height: 1.2;
        margin-top: 10px;
        line-height: 0.2;
    }
    .name {
        font-size: 20px;
        line-height: 4.2;
        margin-right: 70px;
    }
    .title-content {
        margin: unset !important;
    }
}
@font-face {
    font-family: "CRASSROOTSOFLREG";
    src: url('/font/Calibri.ttf') format("truetype");
    font-weight: normal;
    font-style: normal;
}
</style>
