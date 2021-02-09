<template>
    <div class="row">
        <div class="col">
            <div class="info">
                <li>
                    <ul class="main_text">Pinigai banke: <span class="main_text_2">{{ Number(5000).toLocaleString() }} &euro;</span></ul>
                    <ul class="main_text">Lytis: <span class="main_text_2" v-if="this.$page.props.user.gender === 0">Vyras</span><span class="main_text_2" v-else>Moteris</span></ul>
                    <ul class="main_text">Gauja: <span class="main_text_2">Ganksteriai</span></ul>
                    <ul class="main_text">Klubas: <span class="main_text_2">Klubasikas</span></ul>
                    <ul class="main_text">Darbas: <span class="main_text_2">{{ this.$page.props.user.darbas_job }}</span><span class="main_text" v-if="this.$page.props.user.darbas_job != 'Bedarbis'">, Įsidarbino: <span class="main_text_2">{{ this.$page.props.user.isidarbino }}</span></span></ul>
                    <ul class="main_text">Darbo rangas: <span class="main_text_2" v-if="this.$page.props.user.darbas_job != 'Bedarbis'">Mediko padijėjas</span><span class="main_text_2" v-else>Nėra</span></ul>
                    <ul class="main_text">Namas: <span class="main_text_2">Neturi</span></ul>
                    <ul class="main_text">Verslas: <span class="main_text_2">Neturi</span></ul>
                    <ul class="main_text">Gaudomumas: <span class="main_text_2" v-if="this.$page.props.user.Gaudomumas != '0'">{{ Number(this.$page.props.user.Gaudomumas).toLocaleString() }} lygių</span><span class="main_text_2" v-else>Negaudomas</span></ul>
                    <ul class="main_text">VIP iki: <span class="main_text_2" v-if="this.$page.props.user.vip != '0'">{{ VipUnixToDate }}</span><span class="main_text_2" v-else>Neturite VIP <a :href="route('Nustatymai')"class="no-perms">(Užsisakyti)</a></span></ul>
                    <ul class="main_text">Admin iki: <span class="main_text_2" v-if="this.$page.props.user.admin != '0'">{{ AdminUnixToDate }}</span><span class="main_text_2" v-else>Neturite Admin <a :href="route('Nustatymai')"class="no-perms">(Užsisakyti)</a></span></ul>
                    <ul class="main_text">Registracijos data: <span class="main_text_2">{{ this.$page.props.user.regdate }}</span></ul>
                    <ul class="main_text">Nuosavos tr. priemonės: <span class="main_text_2">Elegy</span></ul>
                    <ul class="main_text" v-if="this.$page.props.user.banned != 0">Kas užblokavo: <span class="main_text_2">{{ kas }}</span></ul>
                    <ul class="main_text" v-if="this.$page.props.user.banned != 0">Užblokavimo priežastis: <span class="main_text_2">{{ reasson }}</span></ul>
                    <ul class="main_text" v-if="this.$page.props.user.banned != 0">Užblokavimo data: <span class="main_text_2">{{ banDate }}</span></ul>
                    <ul class="main_text" v-if="this.$page.props.user.banned != 0">Pasibaigs už: <span class="main_text_2" v-if="this.likeLaikas != 0">{{ BanUnixToDate }}</span><span class="main_text_2" v-else>Užblokuotas visam</span></ul>
                    <ul class="main_text" v-if="this.$page.props.user.mutelaikas != 0">Mute Pasibaigs už: <span class="main_text_2">{{ MuteUnixToDate }}</span></ul>
                    <ul class="main_text" v-if="this.$page.props.user.mutelaikas != 0">Kas užtildė: <span class="main_text_2">{{ this.$page.props.user.adminmutename }}</span></ul>
                </li>
            </div>
        </div>
        <UserPrivileges />
        <PlayerSkin/>
    </div>
</template>

<script>
import UserPrivileges from "@/Components/UserPrivileges";
import PlayerSkin from "@/Components/PlayerSkin";
export default {
    components: {
        PlayerSkin,
        UserPrivileges
    },
    data() {
      return {
          vardas: '',
          kas: '',
          reasson: '',
          type: '',
          banDate: '',
          likeLaikas: '',
      }
    },
    computed: {
        VipUnixToDate: function () {
            let date = new Date(this.$page.props.user.VipLaikas * 1000);
            let months_arr = ['01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '11'];
            let year = date.getFullYear();
            let month = months_arr[date.getMonth()];
            let day = date.getDate();
            let hours = date.getHours();
            let minutes = "0" + date.getMinutes();
            let seconds = "0" + date.getSeconds();

            if (day   < 10) {day   = "0"+date.getDate()}
            if (hours   < 10) {hours   = "0"+date.getHours();}
            if (minutes < 10) {minutes = "0"+date.getHours();}
            if (seconds < 10) {seconds = "0"+date.getHours();}

            let convdataTime = year + '-' + month + '-' + day + ' ' + hours + ':' + minutes.substr(-2) + ':' + seconds.substr(-2);
            return convdataTime;
        },
        AdminUnixToDate: function () {
            let date = new Date(this.$page.props.user.AdminLaikas * 1000);
            let months_arr = ['01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '11'];
            let year = date.getFullYear();
            let month = months_arr[date.getMonth()];
            let day = date.getDate();
            let hours = date.getHours();
            let minutes = "0" + date.getMinutes();
            let seconds = "0" + date.getSeconds();

            if (day   < 10) {day   = "0"+date.getDate()}
            if (hours   < 10) {hours   = "0"+date.getHours();}
            if (minutes < 10) {minutes = "0"+date.getHours();}
            if (seconds < 10) {seconds = "0"+date.getHours();}

            let convdataTime = year + '-' + month + '-' + day + ' ' + hours + ':' + minutes.substr(-2) + ':' + seconds.substr(-2);
            return convdataTime;
        },
        BanUnixToDate: function () {
            let sec_num = parseInt(this.$page.props.user.likeLaikas, 10);
            let hours   = Math.floor(sec_num / 3600);
            let minutes = Math.floor((sec_num - (hours * 3600)) / 60);
            let seconds = sec_num - (hours * 3600) - (minutes * 60);

            if (hours   < 10) {hours   = "0"+hours;}
            if (minutes < 10) {minutes = "0"+minutes;}
            if (seconds < 10) {seconds = "0"+seconds;}
            return hours+':'+minutes+':'+seconds;
        },
        MuteUnixToDate: function () {
            let sec_num = parseInt(this.$page.props.user.mutelaikas, 10);
            let hours   = Math.floor(sec_num / 3600);
            let minutes = Math.floor((sec_num - (hours * 3600)) / 60);
            let seconds = sec_num - (hours * 3600) - (minutes * 60);

            if (hours   < 10) {hours   = "0"+hours;}
            if (minutes < 10) {minutes = "0"+minutes;}
            if (seconds < 10) {seconds = "0"+seconds;}
            return hours+':'+minutes+':'+seconds;
        },
    },
    created() {
        axios.get("/BanInfo",).then((res) => {
            this.vardas = res.data.Vardas;
            this.reasson = res.data.reason;
            this.type = res.data.type;
            this.kas = res.data.kasUzblokavo;
            this.likeLaikas = res.data.likeslaikas;
            this.banDate = res.data.banDate
        })
    }
}
</script>

<style lang="scss" scoped>
.info {
    margin-top: 40px;
}
li {
    list-style-type: none;
}
.row {
   margin-right: unset !important;
}
.main_text {
    font-size: 22px;
    font-family: "Calibri";
    color: #e3242b;
    font-variant: small-caps;
    line-height: 1.2;
}
.no-perms {
    color: #ffffff;
    text-decoration: none;
}
.main_text_2 {
    font-size: 18px;
    font-family: "Calibri";
    color: #FFFFFF;
    font-variant: small-caps;
    line-height: 1.2;
}

@font-face {
    font-family: "CRASSROOTSOFLREG";
    src: url('/font/Calibri.ttf') format("truetype");
    font-weight: normal;
    font-style: normal;
}

</style>
