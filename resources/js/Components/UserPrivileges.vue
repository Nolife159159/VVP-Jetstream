<template>
    <div class="col">
        <div class="priv">
            <span class="privs vip" v-if="this.$page.props.user.vip != 0">VIP</span>
            <span class="privs sav" v-if="this.$page.props.user.admin == 4">Savininkas</span>
            <span class="privs sav" v-if="this.$page.props.user.admin <= 4 && this.$page.props.user.admin != 4 && this.$page.props.user.admin != 0">Administratorius</span>
            <span class="privs mod" v-if="this.$page.props.user.priziuretojas == 1">Atsiblokavimų prižiurėtojas</span>
            <span class="privs mod" v-if="this.$page.props.user.priziuretojas == 2">Užblokavimų prižiurėtojas</span>
            <span class="privs mod" v-if="this.$page.props.user.priziuretojas == 3">Direktorių prižiurėtojas</span>
            <span class="privs mod" v-if="this.$page.props.user.priziuretojas == 4">Gaujų/mafijų prižiurėtojas</span>
            <span class="privs mod" v-if="this.$page.props.user.priziuretojas == 5">Administratorių prižiurėtojas</span>
            <span class="privs mod" v-if="this.$page.props.user.priziuretojas == 6">VIP prižiurėtojas</span>
            <span class="privs mod" v-if="this.$page.props.user.priziuretojas == 7">Emigracijų prižiurėtojas</span>
            <span class="privs direktorius" v-if="this.$page.props.user.direktorius != 0">Direktorius</span>
            <span class="privs pavaduotojas" v-if="this.$page.props.user.pavaduotojas != 0">Pavaduotojas</span>
            <span class="privs ban" v-if="this.$page.props.user.banned == 1">Užblokuotas</span>
            <span class="privs ban" v-if="this.$page.props.user.banned == 2">Užblokuotas laikinai</span>
            <span class="privs ban" v-if="this.$page.props.user.banned == 3">Užblokuotas IP</span>
            <span class="privs ban" v-if="this.$page.props.user.mutelaikas != 0">Užtildytas</span>
        </div>
    </div>
</template>

<script>
export default {
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
