<template>
    <div class="row">
        <div class="col-md-4">
            <div class="top3-header">
                <span>TOP 3 Žaidėjai pagal Patirtį</span>
            </div>
            <div class="top1" v-if="show" @click="ShowTopOne">
                <div class="tops">
                    <span class="top-number top-place-1">1</span>
                </div>
            </div>
            <div class="top2" v-if="show" @click="ShowTopTwo">
                <div class="tops">
                    <span class="top-number top-place-2">2</span>
                </div>
            </div>
            <div class="top3" v-if="show" @click="ShowTopThree">
                <div class="tops">
                    <span class="top-number top-place-3">3</span>
                </div>
            </div>
            <div v-if="ShowTopOneDiv == 1" @click="CloseTopOne">
                <div class="top1-clicked">
                    <span class='tops-number'>1</span>
                    <vc-donut class="test" :sections="sections" background="#cccc33" :size="120"></vc-donut>
                    <span v-for="(item) in TopOne" class="players-name">{{item.vardas}}</span>
                    <span v-for="(item) in TopOne" class="players-xp">{{Number(item.patirtis).toLocaleString()}} XP.</span>
                    <div class="more-info" v-for="(item) in TopOne">
                        <span class='main-textas darbo-patirtis'>Darbo patirtis</span> <span class="result-textas">{{Number(item.VisasDarboXP).toLocaleString()}} XP.</span>
                        <br>
                        <span class='main-textas darbo-patirtis'>Pražaidė</span> <span class="result-textas">{{item.Prazaide}} sec.</span>
                        <br>
                        <span class='main-textas darbo-patirtis'>Alga</span> <span class="result-textas">{{Number(item.alga).toLocaleString()}} &euro;</span>
                        <br>
                        <span class='main-textas darbo-patirtis'>Reputacija</span> <span class="result-textas">{{Number(item.rep).toLocaleString()}} REP.</span>
                    </div>
                </div>
            </div>
            <div v-if="ShowTopTwoDiv == 1" @click="CloseTopTwo">
                <div class="top2-clicked">
                    <span class='tops-number'>2</span>
                    <vc-donut class="test" :sections="sections" background="#cccccc" :size="120"></vc-donut>
                    <span v-for="(item) in TopTwo" class="players-name">{{item.vardas}}</span>
                    <span v-for="(item) in TopTwo" class="players-xp-2">{{Number(item.patirtis).toLocaleString()}} XP.</span>
                    <div class="more-info" v-for="(item) in TopTwo">
                        <span class='main-textas-2 darbo-patirtis'>Darbo patirtis</span> <span class="result-textas">{{Number(item.VisasDarboXP).toLocaleString()}} XP.</span>
                        <br>
                        <span class='main-textas-2 darbo-patirtis'>Pražaidė</span> <span class="result-textas">{{item.Prazaide}} sec.</span>
                        <br>
                        <span class='main-textas-2 darbo-patirtis'>Alga</span> <span class="result-textas">{{Number(item.alga).toLocaleString()}} &euro;</span>
                        <br>
                        <span class='main-textas-2 darbo-patirtis'>Reputacija</span> <span class="result-textas">{{Number(item.rep).toLocaleString()}} REP.</span>
                    </div>
                </div>
            </div>
            <div v-if="ShowTopThreeDiv == 1" @click="CloseTopThree">
                <div class="top3-clicked">
                    <span class='tops-number'>3</span>
                    <vc-donut class="test" :sections="sections" background="#cc9933" :size="120"></vc-donut>
                    <span v-for="(item) in TopThree" class="players-name">{{item.vardas}}</span>
                    <span v-for="(item) in TopThree" class="players-xp-3">{{Number(item.patirtis).toLocaleString()}} XP.</span>
                    <div class="more-info" v-for="(item) in TopThree">
                        <span class='main-textas-3 darbo-patirtis'>Darbo patirtis</span> <span class="result-textas">{{Number(item.VisasDarboXP).toLocaleString()}} XP.</span>
                        <br>
                        <span class='main-textas-3 darbo-patirtis'>Pražaidė</span> <span class="result-textas">{{item.Prazaide}} sec.</span>
                        <br>
                        <span class='main-textas-3 darbo-patirtis'>Alga</span> <span class="result-textas">{{Number(item.alga).toLocaleString()}} &euro;</span>
                        <br>
                        <span class='main-textas-3 darbo-patirtis'>Reputacija</span> <span class="result-textas">{{Number(item.rep).toLocaleString()}} REP.</span>
                    </div>
                </div>
            </div>
            <div class="top3-header">
                <span>&nbsp;</span>
            </div>
        </div>
        <div class="col-md-8 mt4 mobile-padding">
            <div class="table-responsive">
                <table class="table">
                    <thead class="thead-custom">
                        <th scope="col">#</th>
                        <th scope="col">Žaidėjo vardas</th>
                        <th scope="col">Patirtis</th>
                        <th scope="col">Praleista</th>
                    </thead>
                    <tbody class="tbody-custom">
                        <tr v-for="(item, index) in Topai">
                            <td class="list-number">{{ index+1  }}</td>
                            <td>
                                <img class="playerSkin" :src="'img/skins/'+item.skin+'.png'" height="300">
                                <span class="PlayerName">{{ item.vardas }}</span><br>
                                <span class="PlayerRank" v-if="item.admin === 4">Savininkas</span>
                                <span class="PlayerRank" v-else-if="item.admin <= 3 && item.admin != 0">Administratorius</span>
                                <span class="PlayerRank" v-else-if="item.vip != 0">VIP narys</span>
                                <span class="PlayerRank" v-else-if="item.direktorius != 0">Direktorius</span>
                                <span class="PlayerRank" v-else-if="item.pavaduotojas != 0">Pavaduotojas</span>
                                <span class="PlayerRank" v-else-if="item.priziuretojas == 1 && item.priziuretojas != 0">Atsiblokavimų priž.</span>
                                <span class="PlayerRank" v-else-if="item.priziuretojas == 2 && item.priziuretojas != 0">Užblokavimų priž.</span>
                                <span class="PlayerRank" v-else-if="item.priziuretojas == 3 && item.priziuretojas != 0">Direktorių priž.</span>
                                <span class="PlayerRank" v-else-if="item.priziuretojas == 4 && item.priziuretojas != 0">Gaujų/Mafijų priž.</span>
                                <span class="PlayerRank" v-else-if="item.priziuretojas == 5 && item.priziuretojas != 0">Administratorių priž.</span>
                                <span class="PlayerRank" v-else-if="item.priziuretojas == 6 && item.priziuretojas != 0">VIP priž.</span>
                                <span class="PlayerRank" v-else-if="item.priziuretojas == 7 && item.priziuretojas != 0">Emigracijų priž.</span>
                                <span class="PlayerRank" v-else>Paprastas žaidėjas</span>
                            </td>
                            <td class="PlayerXP padding">{{ Number(item.patirtis).toLocaleString() }} XP.</td>
                            <td class="PlayerTime padding" v-if="item.Prazaide != 0">{{ PrazaideUnixToDate(item.Prazaide) }}</td>
                            <td class="PlayerTime padding" v-else>Žaidėjas nežaidė</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="thead-custom">
                <span>&ensp;</span>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            Topai: [],
            TopOne: [],
            TopTwo: [],
            TopThree: [],
            show: 1,
            ShowTopOneDiv: 0,
            ShowTopTwoDiv: 0,
            ShowTopThreeDiv: 0,
            sections: [
                { value: 100, color: '#E3A624' }
            ]
        }
    },
    created() {
        axios.get("/TopsByXP",).then((res) => {
            this.Topai = res.data;
        });
        axios.get("/TopOneByXP",).then((res) => {
            this.TopOne = res.data;
        });
        axios.get("/TopTwoByXP",).then((res) => {
            this.TopTwo = res.data;
        });
        axios.get("/TopThreeByXP",).then((res) => {
            this.TopThree = res.data;
        });
    },
    methods: {
        ShowTopOne() {
            this.show = 0;
            this.ShowTopOneDiv = 1;
        },
        CloseTopOne() {
            this.show = 1;
            this.ShowTopOneDiv = 0;
        },
        ShowTopTwo() {
            this.show = 0;
            this.ShowTopTwoDiv = 1;
        },
        CloseTopTwo() {
            this.show = 1;
            this.ShowTopTwoDiv = 0;
        },
        ShowTopThree() {
            this.show = 0;
            this.ShowTopThreeDiv = 1;
        },
        CloseTopThree() {
            this.show = 1;
            this.ShowTopThreeDiv = 0;
        },
        PrazaideUnixToDate: function (UnixTime) {
            let sec_num = parseInt(UnixTime, 10);
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
.top3-header {
    background: #4B4769;
    border-color: #4B4769;
    color: #FFFFFF;
    font-family: "Calibri";
    font-size: 12px;
    letter-spacing: 3px;
    text-transform: uppercase;
    margin: 0px 0px 0px 15px;
    padding: 0.66rem;
    box-shadow: 2px 2px 18px 0px rgba(0, 0, 0, 0.75);
}
.test {
    position: absolute;
    top: 175px;
    left: 50px;
}
.top1-clicked {
    margin: 0px 0px 0px 15px;
    height: 595px;
    background: linear-gradient(to bottom right, #cccc33 40%, #151821 40%);
    box-shadow: 2px 2px 18px 0px rgba(0, 0, 0, 0.75);
}
.tops-number {
    font-family: "Calibri";
    font-size: 120px;
    letter-spacing: 100px;
    line-height: 0.8;
    float: left;
    color: #ffffff;
}
.players-name {
    position: absolute;
    line-height: 0;
    font-size: 60px;
    color: #FFFFFF;
    text-transform: uppercase;
    left: 90px;
    top: 90px;
}
.main-textas {
    color: #E3A624;
    font-family: "Calibri";
    font-size: 16px;
    text-transform: uppercase;
    letter-spacing: 4px;
}
.main-textas-2 {
    color: #999999;
    font-family: "Calibri";
    font-size: 16px;
    text-transform: uppercase;
    letter-spacing: 4px;
}
.main-textas-3 {
    color: #ffcc33;
    font-family: "Calibri";
    font-size: 16px;
    text-transform: uppercase;
    letter-spacing: 4px;
}
.result-textas {
    font-size: 16px;
    position: relative;
    background: #FFFFFF;
    margin-left: 120px;
    color: #151821;
    padding-left: 20px;
    padding-right: 20px;
    border-radius: 25px;
}
.more-info {
    position: absolute;
    top: 380px;
    line-height: 0;
    left: 56px;
}
.top2-clicked {
    margin: 0px 0px 0px 15px;
    height: 595px;
    background: linear-gradient(to bottom right, #cccccc 40%, #151821 40%);
    box-shadow: 2px 2px 18px 0px rgba(0, 0, 0, 0.75);
}
.top3-clicked {
    margin: 0px 0px 0px 15px;
    height: 595px;
    background: linear-gradient(to bottom right, #cc9933 40%, #151821 40%);
    box-shadow: 2px 2px 18px 0px rgba(0, 0, 0, 0.75);
}
.padding {
    padding-top: 90px;
}
.table-responsive::-webkit-scrollbar {
    display: none !important;
}
.row {
    margin-right: unset !important;
}
.top1 {
    background-color: rgb(225, 227, 36);
    box-shadow: 0px 3px 0px 0px rgba(0, 0, 0, 0.2);
    margin: 0px 0px 0px 15px;
}
.top2 {
    background-color: rgb(187, 187, 187);
    box-shadow: 0px 3px 0px 0px rgba(0, 0, 0, 0.2);
    margin: 0px 0px 0px 15px;
}
.top3 {
    background-color: rgb(227, 166, 36);
    box-shadow: 0px 3px 0px 0px rgba(0, 0, 0, 0.2);
    margin: 0px 0px 0px 15px;
}
.tops {
    background: url("/img/tops.png");
    background-repeat: no-repeat;
    background-position: center;
}
.top-place-1 {
    color: #ffff7c;
}
.top-place-2 {
    color: #ffffff;
}
.top-place-3 {
    color: #ffff96;
}
.top-number {
    font-size: 72px;
    font-family: "Calibri";
    font-variant: small-caps;
    line-height: 1.2;
    text-align: center;
    text-shadow: 0px 3px 0px rgba(255, 255, 255, 0.004);
    position: relative;
    bottom: 10px;
}
.player-name {
    position: relative;
    left: 20px;
    line-height: 0;
    font-size: 36px;
    color: #FFFFFF;
    text-transform: uppercase;
    top: 50px;
}
.players-xp {
    font-size: 40px;
    font-family: "Calibri";
    color: #E3A624;
    text-transform: uppercase;
    position: absolute;
    top: 160px;
    left: 210px;
}
.players-xp-2 {
    font-size: 40px;
    font-family: "Calibri";
    color: #999999;
    text-transform: uppercase;
    position: absolute;
    top: 160px;
    left: 210px;
}
.players-xp-3 {
    font-size: 40px;
    font-family: "Calibri";
    color: #ffcc33;
    text-transform: uppercase;
    position: absolute;
    top: 160px;
    left: 210px;
}
.table thead th {
    border-bottom: unset !important;
}
.table th, .table td {
    border-top: unset !important;
}
.table {
    margin: 0px 15px 0px 15px;
    width: 97.8% !important;
    margin-bottom: 1rem;
    background: transparent;
    color: #fff;
}
.tbody-custom {
    font-family: "Calibri";
    font-size: 24px;
}
.playerSkin {
    position: relative;
    right: 160px;
    height: 162px;
}
.PlayerName {
    position: relative;
    bottom: 95px;
    color: #fff;
}
.PlayerRank {
    bottom: 100px;
    position: relative;
    left: 137px;
    font-family: "Calibri";
    font-size: 19px;
    text-transform: uppercase;
    left: 20px;
    color: #fff;
}
.PlayerXP {
    color: #fff;
}
.PlayerTime {
    color: #fff;
}
.list-number {
    font-family: "Calibri";
    font-size: 72px;
    color: #FFFFFF;
}
td {
    padding-left: 80px;
}
tr:first-child .list-number {
    font-family: "Calibri";
    font-size: 72px;
    color: #cccc33;
}
tr:nth-child(2) .list-number {
    font-family: "Calibri";
    font-size: 72px;
    color: #cccccc;
}
tr:nth-child(3) .list-number {
    font-family: "Calibri";
    font-size: 72px;
    color: #cc9933;
}
.thead-custom {
    background: #4B4769;
    border-color: #4B4769;
    color: #FFFFFF;
    font-family: "Calibri";
    font-size: 12px;
    letter-spacing: 3px;
    text-transform: uppercase;
    margin: 0px 5px 0px 15px;
    padding-bottom: 60px;
}
@media (max-width: 768px) {
    .mobile-padding {
        padding-top: 20px;
    }
    .col-1, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-10, .col-11, .col-12, .col, .col-auto, .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm, .col-sm-auto, .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12, .col-md, .col-md-auto, .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg, .col-lg-auto, .col-xl-1, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl, .col-xl-auto {
        padding-right: unset !important;
        padding-left: unset !important;
    }
    .playerSkin {
       display: none;
    }
    .PlayerName {
        position: relative;
        top: 20px;
        right: 20px;
    }
    .PlayerRank {
        position: relative;
        left: -27px !important;
        top: 21px;
    }
    td {
        padding-left: 20px;
    }
    .table-responsive::-webkit-scrollbar {
        display: none !important;
    }
    .padding {
        padding-top: 30px !important;
    }
    .players-name {
        position: absolute !important;
        left: 90px !important;
        top: 90px !important;
        font-size: 40px !important;
    }
    .players-xp {
        color: #E3A624;
        font-size: 27px;
        position: absolute;
        top: 160px;
        left: 155px;
    }
    .result-textas {
        font-size: 16px;
        margin-left: 25px !important;
        padding-left: 20px;
        padding-right: 20px;
        border-radius: 25px;
    }
    .test {
        top: 171px !important;
        left: unset !important;
    }
    .more-info {
        position: absolute;
        top: 380px;
        line-height: 0;
        left: 15px;
    }
}

@media only screen
and (min-device-width: 768px)
and (max-device-width: 1024px)
and (-webkit-min-device-pixel-ratio: 1) {
    .players-name {
        font-size: 26px !important;
    }
    .players-xp {
        font-size: 40px;
        font-family: "Calibri";
        color: #E3A624;
        text-transform: uppercase;
        position: absolute;
        top: 160px;
        left: 100px;
    }
    .test {
        display: none;
    }
    .result-textas {
        margin-left: unset !important;
    }
    .more-info {
        left: 25px !important;
    }
}


@media (min-width : 1824px) {
    td {
        padding-left: 220px;
    }
    .PlayerName {
        bottom: unset;
    }
    .PlayerRank {
        left: -20px;
    }
    .players-name {
        font-size: 75px;
        left: 110px;
    }
    .players-xp {
        position: absolute;
        top: 150px;
        left: 235px;
        font-size: 90px;
        color: #E3A624;
    }
    .more-info {
        top: 440px !important;
    }
    .result-textas {
        font-size: 20px;
        margin-left: 290px;
    }
    .main-textas {
        font-size: 30px !important;
    }
}

@media (max-width : 1024px) {
    td {
        padding-left: 20px !important;
    }
}

@font-face {
    font-family: "CRASSROOTSOFLREG";
    src: url('/font/Calibri.ttf') format("truetype");
    font-weight: normal;
    font-style: normal;
}
</style>
