<template>
    <div class="col">
        <div class="priv">
            <span class="privs vip" v-if="DisplayVip() != 0">VIP</span>
            <span class="privs sav" v-if="DisplayAdmin() == 4">Savininkas</span>
            <span class="privs sav" v-if="DisplayAdmin() <= 4 && DisplayAdmin() != 4 && DisplayAdmin() != 0">Administratorius</span>
            <span class="privs mod" v-if="DisplayPriz() == 1">Atsiblokavimų prižiurėtojas</span>
            <span class="privs mod" v-if="DisplayPriz() == 2">Užblokavimų prižiurėtojas</span>
            <span class="privs mod" v-if="DisplayPriz() == 3">Direktorių prižiurėtojas</span>
            <span class="privs mod" v-if="DisplayPriz() == 4">Gaujų/mafijų prižiurėtojas</span>
            <span class="privs mod" v-if="DisplayPriz() == 5">Administratorių prižiurėtojas</span>
            <span class="privs mod" v-if="DisplayPriz() == 6">VIP prižiurėtojas</span>
            <span class="privs mod" v-if="DisplayPriz() == 7">Emigracijų prižiurėtojas</span>
            <span class="privs direktorius" v-if="DisplayDrk() != 0">Direktorius</span>
            <span class="privs pavaduotojas" v-if="DisplayPav() != 0">Pavaduotojas</span>
            <span class="privs ban" v-if="DisplayBanned() == 1">Užblokuotas</span>
            <span class="privs ban" v-if="DisplayBanned() == 2">Užblokuotas laikinai</span>
            <span class="privs ban" v-if="DisplayBanned() == 3">Užblokuotas IP</span>
            <span class="privs ban" v-if="DisplayMuted() != 0">Užtildytas</span>
        </div>
    </div>
</template>

<script>
export default {
    methods: {
        DisplayVip() {
            if(this.$page.props.SearchUserInfo === undefined) {
                return this.$page.props.user.vip;
            } else {
                return this.$page.props.SearchUserInfo.vip;
            }
        },
        DisplayAdmin() {
            if(this.$page.props.SearchUserInfo === undefined) {
                return this.$page.props.user.admin;
            } else {
                return this.$page.props.SearchUserInfo.admin;
            }
        },
        DisplayPriz() {
            if(this.$page.props.SearchUserInfo === undefined) {
                return this.$page.props.user.priziuretojas;
            } else {
                return this.$page.props.SearchUserInfo.priziuretojas;
            }
        },
        DisplayDrk() {
            if(this.$page.props.SearchUserInfo === undefined) {
                return this.$page.props.user.direktorius;
            } else {
                return this.$page.props.SearchUserInfo.direktorius;
            }
        },
        DisplayPav() {
            if(this.$page.props.SearchUserInfo === undefined) {
                return this.$page.props.user.pavaduotojas;
            } else {
                return this.$page.props.SearchUserInfo.pavaduotojas;
            }
        },
        DisplayBanned() {
            if(this.$page.props.SearchUserInfo === undefined) {
                return this.$page.props.user.banned;
            } else {
                return this.$page.props.SearchUserInfo.banned;
            }
        },
        DisplayMuted() {
            if(this.$page.props.SearchUserInfo === undefined) {
                return this.$page.props.user.mutelaikas;
            } else {
                return this.$page.props.SearchUserInfo.mutelaikas;
            }
        },
    }
}
</script>

<style lang="scss" scoped>
.priv {
    line-height: 0.5 !important;
    margin-top: 40px;
    margin-left: 80px !important;
}
.privs {
    padding: 2px 12px 3px 12px;
    text-decoration: none;
    font-size: 16px;
    font-family: "Calibri";
    margin-top: 10px;
    color: #FFFFFF;
    font-variant: small-caps;
    line-height: 1.2;
    text-align: center;
    display: flex;
    width: max-content;
}
.vip {
    border-style: solid;
    border-width: 1px;
    border-color: #D4A619;
    border-radius: 5px;
    background: #D4A619;
}
.sav {
    border-style: solid;
    border-width: 1px;
    border-color: #c40d0d;
    border-radius: 5px;
    background: #c40d0d;
}
.admin {
    border-style: solid;
    border-width: 1px;
    border-color: #c40d0d;
    border-radius: 5px;
    background: #c40d0d;
    }
.mod {
    border-style: solid;
    border-width: 1px;
    border-color: #3399FF;
    border-radius: 5px;
    background: #3399FF;
}
.ban {
    border-style: solid;
    border-width: 1px;
    border-color: #383838;
    border-radius: 5px;
    background: #111111;
}
.direktorius {
    border-style: solid;
    border-width: 1px;
    border-color: #7C44D7;
    border-radius: 5px;
    background: #7C44D7;
}
.pavaduotojas {
    border-style: solid;
    border-width: 1px;
    border-color: #9c44d6;
    border-radius: 5px;
    background: #9c44d6;
}
@font-face {
    font-family: "CRASSROOTSOFLREG";
    src: url('/font/Calibri.ttf') format("truetype");
    font-weight: normal;
    font-style: normal;
}
</style>
