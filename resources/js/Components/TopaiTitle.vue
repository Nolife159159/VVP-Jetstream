<template>
    <div>
        <div class="title-content">
            <span class="big-text-midle">Top žaidėjai<br>
            <span class="name2-midle">Pagal</span></span>
        </div>
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
.big-text-midle {
    font-size: 72px;
    font-family: "Calibri";
    color: #FFFFFF;
    font-variant: small-caps;
    line-height: 0.2;
    margin-left: 36%;
    margin-top: 40px;
}
.name2-midle {
    font-size: 36px;
    font-family: "Calibri";
    color: #99999A;
    font-variant: small-caps;
    line-height: 2.2;
    margin-right: 80px;
}
@font-face {
    font-family: "CRASSROOTSOFLREG";
    src: url('/font/Calibri.ttf') format("truetype");
    font-weight: normal;
    font-style: normal;
}
@media (max-width: 768px) {
    .big-text-midle {
        font-size: 36px;
        font-family: "Calibri";
        color: #FFFFFF;
        font-variant: small-caps;
        line-height: 1.2;
        margin-top: 35px;
    }
    .name2-midle {
        font-size: 20px;
        font-family: "Calibri";
        color: #99999A;
        font-variant: small-caps;
        line-height: 1.2;
        margin-right: 40px;
    }
    .title-content {
        margin: unset !important;
    }

}
</style>
