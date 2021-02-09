<template>
    <div class="nustatymu-main-content">
        <div class="container mt-4">
            <div class="row">
                <div class="col nustatymu-bg">
                    <form autocomplete="off">
                        <span class="pass_title">Slaptažodžio keitimas</span><br>
                        <label>Dabartinis Slaptažodis:</label><br>
                        <input type="password" class="pass" name="pass_input" v-model="changePW.dabartinis_pw"><br>
                        <label>Naujas Slaptažodis:</label><br>
                        <input type="password" class="pass" name="pass2_input" v-model="changePW.new_pw"><br>
                        <label>Patvirtinkite Slaptažodį:</label><br>
                        <input type="password" class="pass" name="pass3_input" v-model="changePW.repeat_pw"><br><br>
                        <button class="keisti-btn" name="change_pass" @click="ChangePassword">Keisti</button>
                        <br>
                        <span class="klaida">{{ message_pass }}</span>
                        <span class="pavyko">{{ success_pass }}</span>
                    </form>
                </div>
                <div class="col nustatymu-bg padding">
                    <form autocomplete="off">
                        <span class="pass_title">El.Pašto keitimas</span><br>
                        <label>Dabartinis el.pašto adresas:</label><br>
                        <p class="text">{{ this.$page.props.user.email }}</p>
                        <label>Naujas el.pašto adresas:</label><br>
                        <input type="text" class="pass" name="email1_input" v-model="changeEmail.new_Email"><br>
                        <label>Patvirtinkite el.pašto adresą:</label><br>
                        <input type="text" class="pass" name="email2_input" v-model="changeEmail.repeat_Email"><br><br>
                        <button class="keisti-btn" @click="ChangeEmail">Keisti</button>
                        <br>
                        <span class="klaida">{{ message_email }}</span>
                        <span class="pavyko">{{ success_email }}</span>
                    </form>
                </div>
            </div>
            <div class="row margin">
                <div class="col nustatymu-bg">
                    <form class="full" autocomplete="off">
                        <span class="pass_title">Banko pin keitimas</span><br>
                        <label>Dabartinis banko pinkodas:</label><br>
                        <p class="text" v-if="this.$page.props.user.bank_pin != ''">{{ this.$page.props.user.bank_pin }}</p>
                        <p class="text" v-else="">Banko pinkodas nenustatytas!</p>
                        <label>Naujas banko pinkodas:</label><br>
                        <input type="password" class="pass" name="pin1_input" v-model="changePin.new_Pin"><br>
                        <label>Patvirtinkite banko pinkodą:</label><br>
                        <input type="password" class="pass" name="pin2_input" v-model="changePin.repeat_Pin"><br><br>
                        <button class="keisti-btn" name="change_pass" @click="ChangePin" v-if="this.$page.props.user.bank_pin != ''">Keisti</button>
                        <button class="keisti-btn" name="change_pass" @click="SetPin" v-else="">Nustatyti</button>
                        <button class="keisti-btn" name="change_pass" @click="RemovePin" v-if="this.$page.props.user.bank_pin != ''">Nuimti</button>
                        <br>
                        <span class="klaida">{{ message_bank_pin }}</span>
                        <span class="pavyko">{{ success_pin }}</span>
                    </form>
                </div>
                <div class="col nustatymu-bg padding">
                    <form method="post" action="" autocomplete="off">
                        <span class="pass_title">El.Pašto keitimas</span><br>
                        <label>Dabartinis el.pašto adresas:</label><br>
                        <input type="text" class="pass" name="pass_input"><br>
                        <label>Naujas el.pašto adresas:</label><br>
                        <input type="text" class="pass" name="pass2_input"><br>
                        <label>Patvirtinkite el.pašto adresą:</label><br>
                        <input type="text" class="pass" name="pass3_input"><br><br>
                        <button class="keisti-btn" name="change_pass" type="submit">Keisti</button>
                    </form>
                </div>
            </div>
            <div class="row margin bot-margin">
                <div class="col nustatymu-bg">
                    <form autocomplete="off">
                        <span class="pass_title">Slapto kl. keitimas</span><br>
                        <label>Dabartinis slaptas klausimas:</label><br>
                        <p class="text" v-if="this.$page.props.user.SlaptasKlausimas != ''">{{ this.$page.props.user.SlaptasKlausimas }}</p>
                        <p class="text" v-else="">Slaptas klausimas nenustatytas!</p>
                        <label>Naujas slaptas klausimas:</label><br>
                        <input type="text" class="pass" name="klausimas1_input" v-model="changeKl.new_Kl"><br>
                        <label>Patvirtinkite slaptas klausimas:</label><br>
                        <input type="text" class="pass" name="klausimas2_input" v-model="changeKl.repeat_Kl"><br><br>
                        <button class="keisti-btn" name="change_pass" @click="ChangeKlausimas" v-if="this.$page.props.user.SlaptasKlausimas != ''">Keisti</button>
                        <button class="keisti-btn" name="change_pass" @click="SetKlausimas" v-else="">Nustatyti</button>
                        <button class="keisti-btn" name="change_pass" @click="RemoveKlausimas" v-if="this.$page.props.user.SlaptasKlausimas != ''">Nuimti</button>
                        <br>
                        <span class="klaida">{{ message_klausimas }}</span>
                        <span class="pavyko">{{ success_klausimas }}</span>
                    </form>
                </div>
                <div class="col nustatymu-bg padding">
                    <form autocomplete="off">
                        <span class="pass_title">Slapto ats. keitimas</span><br>
                        <label>Dabartinis slaptas atsakymas:</label><br>
                        <p class="text" v-if="this.$page.props.user.KlausimoAtsakymas != ''">{{ this.$page.props.user.KlausimoAtsakymas }}</p>
                        <p class="text" v-else="">Klausimo atsakymas nenustatytas!</p>
                        <label>Naujas slaptas atsakymas:</label><br>
                        <input type="password" class="pass" name="ats1_input" v-model="changeAts.new_Ats"><br>
                        <label>Patvirtinkite slapta atsakymą:</label><br>
                        <input type="password" class="pass" name="ats2_input" v-model="changeAts.repeat_Ats"><br><br>
                        <button class="keisti-btn" name="change_pass" @click="ChangeAtsakymas" v-if="this.$page.props.user.KlausimoAtsakymas != ''">Keisti</button>
                        <button class="keisti-btn" name="change_pass" @click="SetAtsakymas" v-else="">Nustatyti</button>
                        <button class="keisti-btn" name="change_pass" @click="RemoveAtsakymas" v-if="this.$page.props.user.KlausimoAtsakymas != ''">Nuimti</button>
                        <br>
                        <span class="klaida">{{ message_atsakymas }}</span>
                        <span class="pavyko">{{ success_atsakymas }}</span>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data: function() {
        return {
            changePW: {
                dabartinis_pw: null,
                new_pw: null,
                repeat_pw: null
            },
            changeEmail: {
                new_Email: null,
                repeat_Email: null
            },
            changePin: {
                new_Pin: null,
                repeat_Pin: null
            },
            changeKl: {
              new_Kl: null,
              repeat_Kl: null
            },
            changeAts: {
                new_Ats: null,
                repeat_Ats: null
            },
            success_atsakymas: '',
            message_atsakymas: '',
            message_klausimas: '',
            success_klausimas: '',
            message_bank_pin: '',
            success_pin: '',
            message_pass: '',
            success_pass: '',
            success_email: '',
            message_email: ''
        }
    },
    methods: {
        ChangePassword(event) {
            event.preventDefault();
            axios.post('/ChangePassword', this.changePW)
                .then((response) => {
                    this.success_pass = response.data;
                })
                .catch((error) => {
                    this.message_pass = error.response.data
                })
        },
        ChangeEmail(event) {
            event.preventDefault();
            axios.post('/ChangeEmail', this.ChangeEmail)
                .then((response) => {
                    this.success_email = response.data;
                })
                .catch((error) => {
                    this.message_email = error.response.data
                })
        },
        ChangePin(event) {
            event.preventDefault();
            axios.post('/ChangePin', this.changePin)
                .then((response) => {
                    this.success_pin = response.data;
                })
                .catch((error) => {
                    this.message_bank_pin = error.response.data
                })
        },
        SetPin(event) {
            event.preventDefault();
            axios.post('/SetPin', this.changePin)
                .then((response) => {
                    this.success_pin = response.data;
                })
                .catch((error) => {
                    this.message_bank_pin = error.response.data
                })
        },
        RemovePin(event) {
            event.preventDefault();
            axios.post('/RemovePin', this.changePin)
                .then((response) => {
                    this.success_pin = response.data;
                })
                .catch((error) => {
                    this.message_bank_pin = error.response.data
                })
        },
        ChangeKlausimas(event) {
            event.preventDefault();
            axios.post('/ChangeKlausimas', this.changeKl)
                .then((response) => {
                    this.success_klausimas = response.data;
                })
                .catch((error) => {
                    this.message_klausimas = error.response.data
                })
        },
        SetKlausimas(event) {
            event.preventDefault();
            axios.post('/SetKlausimas', this.changeKl)
                .then((response) => {
                    this.success_klausimas = response.data;
                })
                .catch((error) => {
                    this.message_klausimas = error.response.data
                })
        },
        RemoveKlausimas(event) {
            event.preventDefault();
            axios.post('/RemoveKlausimas', this.changeKl)
                .then((response) => {
                    this.success_klausimas = response.data;
                })
                .catch((error) => {
                    this.message_klausimas = error.response.data
                })
        },
        ChangeAtsakymas(event) {
            event.preventDefault();
            axios.post('/ChangeAtsakymas', this.changeAts)
                .then((response) => {
                    this.success_atsakymas = response.data;
                })
                .catch((error) => {
                    this.message_atsakymas = error.response.data
                })
        },
        SetAtsakymas(event) {
            event.preventDefault();
            axios.post('/SetAtsakymas', this.changeAts)
                .then((response) => {
                    this.success_atsakymas = response.data;
                })
                .catch((error) => {
                    this.message_atsakymas = error.response.data
                })
        },
        RemoveAtsakymas(event) {
            event.preventDefault();
            axios.post('/RemoveAtsakymas', this.changeAts)
                .then((response) => {
                    this.success_atsakymas = response.data;
                })
                .catch((error) => {
                    this.message_atsakymas = error.response.data
                })
        },
    }
}
</script>

<style lang="scss" scoped>
.nustatymu-main-content {
    margin: 0px 15px 0px 15px;
    display: flex;
    background: rgba(15, 17, 24, 0);
    background: url("/public/img/main-texture.png");
    background-repeat: no-repeat;
    background-size: cover;
    justify-content: space-between;
}
.klaida {
    color: #e3242b;
    font-size: 24px;
}
.pavyko {
    color: #2ECC40;
    font-weight: bold;
    font-size: 24px;
}
.nustatymu-bg {
    background: #4F4E56;
    font-size: medium;
}
.pass_title {
    font-size: 50px;
    color: #FFFFFF;
    font-family: "Calibri";
}
label {
    color: #FFFFFF;
    float: left;
    margin-left: 0.5rem;
}
.pass {
    color: #e3242b;
    border-bottom: 2px solid #FFFFFF !important;
    border: none;
    background: transparent;
    width: 100%;
    outline: none;
    height: 8%;
    &:focus {
        border-bottom: 2px solid #e3242b !important;
        border: none;
    }
    &:active {
        border-bottom: 2px solid #e3242b !important;
        border: none;
    }
}
.padding {
    margin-left: 200px;
}
.margin {
    margin-top: 20px;
}
.keisti-btn {
    color: #FFFFFF;
    background: #e3242b;
    font-weight: bold;
    width: 140px;
    border-radius: 10px;
    border: 2px solid #e3242b;
    margin-bottom: 20px
}
.text {
    width: max-content;
    margin-left: 0.5rem;
    color: #e3242b;
    font-weight: bold;
}
.bot-margin {
    margin-bottom: 20px;
}
.full {
    width: max-content;
}
@media (max-width: 768px) {
    .padding {
        margin-left: unset !important;
        margin-top: 20px;
    }
    .full {
        width: unset !important;
    }
}
</style>
