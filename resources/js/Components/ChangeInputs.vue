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
                        <span class="klaida" v-if="message_pass">{{ message_pass }}</span>
                        <span class="pavyko" v-if="success_pass">{{ success_pass }}</span>
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
                        <span class="klaida" v-if="message_email">{{ message_email }}</span>
                        <span class="pavyko" v-if="success_email">{{ success_email }}</span>
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
                        <button class="keisti-btn" name="change_pass" @click="ShowPinModal" v-if="this.$page.props.user.bank_pin != ''">Nuimti</button>
                        <SettingsModal v-if="showPinConfirmModal" @close-modal="CloseModal">
                            <form metod="POST" action="">
                                <a class="yes-button btn modal-button" @click="RemovePin">Taip</a><button type="button" class="no-button btn modal-button" @click="CloseModal">Ne</button>
                            </form>
                        </SettingsModal>
                        <br>
                        <span class="klaida" v-if="message_bank_pin">{{ message_bank_pin }}</span>
                        <span class="pavyko" v-if="success_pin">{{ success_pin }}</span>
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
                        <button class="keisti-btn" name="change_pass" @click="ShowKlModal" v-if="this.$page.props.user.SlaptasKlausimas != ''">Nuimti</button>
                        <SettingsModal v-if="showKlConfirmModal" @close-modal="CloseModal">
                            <form metod="POST" action="">
                                <a class="yes-button btn modal-button" @click="RemoveKlausymas">Taip</a><button type="button" class="no-button btn modal-button" @click="CloseModal">Ne</button>
                            </form>
                        </SettingsModal>
                        <br>
                        <span class="klaida" v-if="message_klausimas">{{ message_klausimas }}</span>
                        <span class="pavyko" v-if="success_klausimas">{{ success_klausimas }}</span>
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
                        <button class="keisti-btn" name="change_pass" @click="ShowAtsModal" v-if="this.$page.props.user.KlausimoAtsakymas != ''">Nuimti</button>
                        <SettingsModal v-if="showAtsConfirmModal" @close-modal="CloseModal">
                            <form metod="POST" action="">
                                <a class="yes-button btn modal-button" @click="RemoveAtsakymas">Taip</a><button type="button" class="no-button btn modal-button" @click="CloseModal">Ne</button>
                            </form>
                        </SettingsModal>
                        <br>
                        <span class="klaida" v-if="message_atsakymas">{{ message_atsakymas }}</span>
                        <span class="pavyko" v-if="success_atsakymas">{{ success_atsakymas }}</span>
                    </form>
                </div>
            </div>
        </div>
        <div v-if="message_pass">
            <SettingsDangerToast @close="remove">
                <p class="toast-text">{{ message_pass }}</p>
            </SettingsDangerToast>
        </div>
        <div v-if="message_email">
            <SettingsDangerToast @close="remove">
                <p class="toast-text">{{ message_email }}</p>
            </SettingsDangerToast>
        </div>
        <div v-if="message_bank_pin">
            <SettingsDangerToast @close="remove">
                <p class="toast-text">{{ message_bank_pin }}</p>
            </SettingsDangerToast>
        </div>
        <div v-if="message_klausimas">
            <SettingsDangerToast @close="remove">
                <p class="toast-text">{{ message_klausimas }}</p>
            </SettingsDangerToast>
        </div>
        <div v-if="message_atsakymas">
            <SettingsSuccessToast @close="remove_succes">
                <p class="toast-text">{{ message_atsakymas }}</p>
            </SettingsSuccessToast>
        </div>
        <div v-if="success_pass">
            <SettingsSuccessToast @close-success="remove_succes">
                <p class="toast-text">{{ success_pass }}</p>
            </SettingsSuccessToast>
        </div>
        <div v-if="success_email">
            <SettingsSuccessToast @close-success="remove_succes">
                <p class="toast-text">{{ success_email }}</p>
            </SettingsSuccessToast>
        </div>
        <div v-if="success_pin">
            <SettingsSuccessToast @close-success="remove_succes">
                <p class="toast-text">{{ success_pin }}</p>
            </SettingsSuccessToast>
        </div>
        <div v-if="success_klausimas">
            <SettingsSuccessToast @close-success="remove_succes">
                <p class="toast-text">{{ success_klausimas }}</p>
            </SettingsSuccessToast>
        </div>
        <div v-if="success_atsakymas">
            <SettingsSuccessToast @close-success="remove_succes">
                <p class="toast-text">{{ success_atsakymas }}</p>
            </SettingsSuccessToast>
        </div>
    </div>
</template>

<script>
import SettingsDangerToast from "@/Components/SettingsDangerToast";
import SettingsSuccessToast from "@/Components/SettingsSuccessToast";
import SettingsModal from "@/Components/SettingsModal";
export default {
    components: {
        SettingsModal,
        SettingsDangerToast,
        SettingsSuccessToast
    },
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
            message_email: '',
            showKlConfirmModal: false,
            showAtsConfirmModal: false,
            showPinConfirmModal: false,
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
                    this.showPinConfirmModal = false;
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
        RemoveKlausymas(event) {
            event.preventDefault();
            axios.post('/RemoveKlausimas', this.changeKl)
                .then((response) => {
                    this.success_klausimas = response.data;
                    this.showKlConfirmModal = false;
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
                    this.showAtsConfirmModal = false;
                })
                .catch((error) => {
                    this.message_atsakymas = error.response.data
                })
        },
        ShowKlModal(event) {
            event.preventDefault();
            this.showKlConfirmModal = true;
        },
        ShowAtsModal(event) {
            event.preventDefault();
            this.showAtsConfirmModal = true;
        },
        ShowPinModal(event) {
            event.preventDefault();
            this.showPinConfirmModal = true;
        },
        remove() {
            this.message_pass = null
            this.message_email = null
            this.message_bank_pin = null
            this.message_klausimas = null
            this.message_atsakymas = null
        },
        remove_succes() {
            this.success_pass = null
            this.success_email = null
            this.success_pin = null
            this.success_klausimas = null
            this.success_atsakymas = null
        },
        CloseModal() {
            this.showKlConfirmModal = false;
            this.showAtsConfirmModal = false;
            this.showPinConfirmModal = false;
        }
    }
}
</script>

<style lang="scss" scoped>
@import "./resources/sass/toast.scss";
.nustatymu-main-content {
    margin: 0px 15px 0px 15px;
    display: flex;
    background: rgba(15, 17, 24, 0);
    background: url("/public/img/main-texture.png");
    background-repeat: no-repeat;
    background-size: cover;
    justify-content: space-between;
}
.toast-text {
    font-size: 16px;
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
