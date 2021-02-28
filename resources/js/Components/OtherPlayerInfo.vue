<template>
    <div class="row">
        <div class="col">
            <div class="info">
                <li>
                    <ul class="main_text">Pinigai banke: <span class="main_text_2">{{ Number(5000).toLocaleString() }} &euro;</span></ul>
                    <ul class="main_text">Lytis: <span class="main_text_2" v-if="this.DisplayLytis() === 0">Vyras</span><span class="main_text_2" v-else>Moteris</span></ul>
                    <ul class="main_text">Gauja: <span class="main_text_2">Ganksteriai</span></ul>
                    <ul class="main_text">Klubas: <span class="main_text_2">Klubasikas</span></ul>
                    <ul class="main_text">Darbas: <span class="main_text_2">{{ DisplayDarbas() }}</span><span class="main_text" v-if="DisplayDarbas() != 'Bedarbis'">, Įsidarbino: <span class="main_text_2">{{ DisplayIsisdarbino() }}</span></span></ul>
                    <ul class="main_text">Darbo rangas: <span class="main_text_2" v-if="DisplayDarbas() != 'Bedarbis'">Mediko padijėjas</span><span class="main_text_2" v-else>Nėra</span></ul>
                    <ul class="main_text">Namas: <span class="main_text_2">Neturi</span></ul>
                    <ul class="main_text">Verslas: <span class="main_text_2">Neturi</span></ul>
                    <ul class="main_text">Gaudomumas: <span class="main_text_2" v-if="DisplayGaudomumas() != '0'">{{ DisplayGaudomumas() }} lygių</span><span class="main_text_2" v-else>Negaudomas</span></ul>
                    <ul class="main_text">VIP iki: <span class="main_text_2" v-if="DisplayVip() != '1970-01-01 03:03:03'">{{ DisplayVip() }}</span><span class="main_text_2" v-else>Neturite VIP <a :href="route('Nustatymai')"class="no-perms">(Užsisakyti)</a></span></ul>
                    <ul class="main_text">Admin iki: <span class="main_text_2" v-if="DisplayAdmin() != '1970-01-01 03:03:03'">{{ DisplayAdmin() }}</span><span class="main_text_2" v-else>Neturite Admin <a :href="route('Nustatymai')"class="no-perms">(Užsisakyti)</a></span></ul>
                    <ul class="main_text">Registracijos data: <span class="main_text_2">{{ DisplayRegDate() }}</span></ul>
                    <ul class="main_text">Nuosavos tr. priemonės: <span class="main_text_2">Elegy</span></ul>
                    <ul class="main_text" v-if="DisplayBanned() != 0">Kas užblokavo: <span class="main_text_2">{{ kas }}</span></ul>
                    <ul class="main_text" v-if="DisplayBanned() != 0">Užblokavimo priežastis: <span class="main_text_2">{{ reasson }}</span></ul>
                    <ul class="main_text" v-if="DisplayBanned() != 0">Užblokavimo data: <span class="main_text_2">{{ banDate }}</span></ul>
                    <ul class="main_text" v-if="DisplayBanned() != 0">Pasibaigs už: <span class="main_text_2" v-if="this.likeLaikas != 0">{{ DisplayBannedLaikas() }}</span><span class="main_text_2" v-else>Užblokuotas visam</span></ul>
                    <ul class="main_text" v-if="DisplayMuteLaikas() != 0">Mute Pasibaigs už: <span class="main_text_2" v-if="DisplayMuteLaikas() != '00:00:00'">{{ DisplayMuteLaikas() }}</span> <span class="main_text_2" v-else="">Užtildytas visam</span></ul>
                    <ul class="main_text" v-if="DisplayMuteLaikas() != 0">Kas užtildė: <span class="main_text_2">{{ DisplayAdminMuteName() }}</span></ul>
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
    methods: {
        VipUnixToDate: function (UnixTime) {
            let date = new Date(UnixTime * 1000);
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
        AdminUnixToDate: function (UnixTime) {
            let date = new Date(UnixTime * 1000);
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
        BanUnixToDate: function (UnixTime) {
            let sec_num = parseInt(UnixTime, 10);
            let hours   = Math.floor(sec_num / 3600);
            let minutes = Math.floor((sec_num - (hours * 3600)) / 60);
            let seconds = sec_num - (hours * 3600) - (minutes * 60);

            if (hours   < 10) {hours   = "0"+hours;}
            if (minutes < 10) {minutes = "0"+minutes;}
            if (seconds < 10) {seconds = "0"+seconds;}
            return hours+':'+minutes+':'+seconds;
        },
        MuteUnixToDate: function (UnixTime) {
            let sec_num = parseInt(UnixTime, 10);
            let hours   = Math.floor(sec_num / 3600);
            let minutes = Math.floor((sec_num - (hours * 3600)) / 60);
            let seconds = sec_num - (hours * 3600) - (minutes * 60);

            if (hours   < 10) {hours   = "0"+hours;}
            if (minutes < 10) {minutes = "0"+minutes;}
            if (seconds < 10) {seconds = "0"+seconds;}
            return hours+':'+minutes+':'+seconds;
        },
        DisplayName() {
            if(this.$page.props.SearchUserInfo === undefined) {
                return this.$page.props.user.vardas;
            } else {
                return this.$page.props.SearchUserInfo.vardas;
            }
        },
        DisplayLytis() {
            if(this.$page.props.SearchUserInfo === undefined) {
                return this.$page.props.user.gender;
            } else {
                return this.$page.props.SearchUserInfo.gender;
            }
        },
        DisplayDarbas() {
            if(this.$page.props.SearchUserInfo === undefined) {
                return this.$page.props.user.darbas_job;
            } else {
                return this.$page.props.SearchUserInfo.darbas_job;
            }
        },
        DisplayIsisdarbino() {
            if(this.$page.props.SearchUserInfo === undefined) {
                return this.$page.props.user.isidarbino;
            } else {
                return this.$page.props.SearchUserInfo.isidarbino;
            }
        },
        DisplayGaudomumas() {
            if(this.$page.props.SearchUserInfo === undefined) {
                return Number(this.$page.props.user.Gaudomumas).toLocaleString();
            } else {
                return Number(this.$page.props.SearchUserInfo.Gaudomumas).toLocaleString();
            }
        },
        DisplayVip() {
            if(this.$page.props.SearchUserInfo === undefined) {
                return this.VipUnixToDate(this.$page.props.user.VipLaikas);
            } else {
                return this.VipUnixToDate(this.$page.props.SearchUserInfo.VipLaikas);
            }
        },
        DisplayAdmin() {
            if(this.$page.props.SearchUserInfo === undefined) {
                return this.VipUnixToDate(this.$page.props.user.AdminLaikas);
            } else {
                return this.VipUnixToDate(this.$page.props.SearchUserInfo.AdminLaikas);
            }
        },
        DisplayRegDate() {
            if(this.$page.props.SearchUserInfo === undefined) {
                return this.$page.props.user.regdate;
            } else {
                return this.$page.props.SearchUserInfo.regdate;
            }
        },
        DisplayBanned() {
            if(this.$page.props.SearchUserInfo === undefined) {
                return this.$page.props.user.banned;
            } else {
                return this.$page.props.SearchUserInfo.banned;
            }
        },
        DisplayBannedLaikas() {
            if(this.$page.props.SearchUserInfo === undefined) {
                return this.BanUnixToDate(this.$page.props.user.BanLaikas);
            } else {
                return this.BanUnixToDate(this.$page.props.SearchUserInfo.BanLaikas);
            }
        },
        DisplayMuteLaikas() {
            if(this.$page.props.SearchUserInfo === undefined) {
                return this.BanUnixToDate(this.$page.props.user.mutelaikas);
            } else {
                return this.BanUnixToDate(this.$page.props.SearchUserInfo.mutelaikas);
            }
        },
        DisplayAdminMuteName() {
            if(this.$page.props.SearchUserInfo === undefined) {
                return this.$page.props.user.adminmutename;
            } else {
                return this.$page.props.SearchUserInfo.adminmutename;
            }
        },
    },
    created() {
        axios.get("/BanInfo?name="+this.DisplayName()).then((res) => {
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
