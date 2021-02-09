<template>
    <div class="row padding">
        <div class="col-sm-9 main-panel">
            <h2>{{ this.$page.props.user.vardas }} Darbų Patirtis</h2>
        </div>
        <div class="col-sm-3 side-panel">
            <h2>Mėgstamiausi darbai</h2>
        </div>
    </div>
</template>

<script>
export default {
}
</script>

<style lang="scss" scoped>
.padding {
    margin-left: 20px !important;
    margin-right: 20px !important;
}
.main-panel {
    background: #f4b0b3;
    height: 68px;
    font-family: "Calibri";
    color: #282328;
    text-transform: uppercase;
    border-left: 11px solid #d9767b;
}
.main-panel h2 {
    font-size: 30px;
    padding-left: 20px;
    padding-top: 23px;
    text-align: left;
}
.side-panel {
    background: #E77B7F;
    height: 68px;
    font-family: "Calibri";
    color: #F1AFB2;
    text-transform: uppercase;
    border-left: 11px solid #d9767a;
}
.side-panel h2 {
    padding-left: 20px;
    font-size: 27px;
    padding-top: 23px;
    text-align: left;
}
@media (max-width: 768px) {
    .main-panel h2 {
        font-size: 25px !important;
        padding-top: 10px;
    }
    .side-panel h2 {
        font-size: 20px !important;
    }
}
@font-face {
    font-family: "CRASSROOTSOFLREG";
    src: url('/font/Calibri.ttf') format("truetype");
    font-weight: normal;
    font-style: normal;
}
</style>
