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
                        <span class="progress-number long-time-date">{{ PrazaideUnixToDate }}</span></span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="pie-chart-left">
                        <vc-donut :sections="sections" background="#1B1D29" :size="120"></vc-donut>
                    </div>
                    <div class="text-padding">
                        <span class="progress-text">Patirtis <br>
                        <span class="progress-number">{{ Number(this.$page.props.user.patirtis).toLocaleString() }} XP</span></span>
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
                        <span class="progress-number">{{ Number(this.$page.props.user.alga).toLocaleString() }} &euro;</span></span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="pie-chart-left">
                        <vc-donut :sections="sections" background="#1B1D29" :size="120"></vc-donut>
                    </div>
                    <div class="text-padding">
                        <span class="progress-text">Pinigai <br>
                        <span class="progress-number">{{ Number(this.$page.props.user.pinigai).toLocaleString() }} &euro;</span></span>
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
    },
    computed: {
        PrazaideUnixToDate: function () {
            let sec_num = parseInt(this.$page.props.user.Prazaide, 10);
            let hours   = Math.floor(sec_num / 3600);
            let minutes = Math.floor((sec_num - (hours * 3600)) / 60);
            let seconds = sec_num - (hours * 3600) - (minutes * 60);

            if (hours   < 10) {hours   = "0"+hours;}
            if (minutes < 10) {minutes = "0"+minutes;}
            if (seconds < 10) {seconds = "0"+seconds;}
            return hours+'H. '+minutes+'min. '+seconds+'sec. ';
        },
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
.long-time-date {
    font-size: 23px !important;
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
    .main-content {
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
