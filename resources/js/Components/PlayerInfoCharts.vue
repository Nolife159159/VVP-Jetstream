<template>
    <div class="main-content">
        <div class="container mt-4">
            <div class="row">
                <div class="col-md-6">
                    <div class="pie-chart-left">
                        <vc-donut :sections="sections" background="#1B1D29" :size="120"></vc-donut>
                    </div>
                    <div class="text-padding">
                        <span class="progress-text">Pražaista <br>
                        <span class="progress-number">{{ this.$page.props.user.Prazaide }} sec</span></span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="pie-chart-left">
                        <vc-donut :sections="sections" background="#1B1D29" :size="120"></vc-donut>
                    </div>
                    <div class="text-padding">
                        <span class="progress-text">Patirtis <br>
                        <span class="progress-number">{{ this.$page.props.user.patirtis }} XP</span></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="pie-chart-left">
                        <vc-donut :sections="sections" background="#1B1D29" :size="120"></vc-donut>
                    </div>
                    <div class="text-padding">
                        <span class="progress-text">Uždarbis <br>
                        <span class="progress-number">{{ this.$page.props.user.alga }} &euro;</span></span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="pie-chart-left">
                        <vc-donut :sections="sections" background="#1B1D29" :size="120"></vc-donut>
                    </div>
                    <div class="text-padding">
                        <span class="progress-text">Pinigai <br>
                        <span class="progress-number">{{ this.$page.props.user.pinigai }} &euro;</span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            sections: [
                { value: 100, color: '#e3242b' }
            ]
        };
    }
}
</script>

<style lang="scss" scoped>
.main-content {
    margin: 0px 15px 0px 15px;
    display: flex;
    background: rgba(15, 17, 24, 0);
    background: url("/public/img/main-texture.png");
    background-repeat: no-repeat;
    background-size: cover;
    justify-content: space-between;
}
.progress-text {
    font-size: 34px;
    font-family: "Calibri";
    color: #FFFFFF;
    font-variant: small-caps;
    line-height: 1.8;
    float: left;
}
.progress-number {
    font-size: 36px;
    font-family: "Calibri";
    font-variant: small-caps;
    line-height: 1.2;
    color: #e3242b;
    margin-left: 10px;
}
.text-padding {
    float: right;
    position: absolute;
    right: 20px;
    top: 10px;
}
.pie-chart-left {
    padding-top: 20px;
}
@media (max-width: 768px) {
   .pie-chart-left {
       padding-top: unset;
       float: left;
   }
}
</style>
