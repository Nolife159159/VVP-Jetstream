<template>
    <div class="modal">
        <div class="modal-content">
            <span class="modal-title"><slot></slot></span>
            <form autocomplete="off" action="POST">
                <input type="text" name="username" class="modal-input form-control" v-model="BanModal.reason" placeholder="Įrašykite priežastį"/>
                <select class="modal-input form-control select-text" name="cmd" v-model="BanModal.selected" required>
                    <option value="0" disabled selected>Pasirinkite blokavimo tipą</option>
                    <option value="1">Laikinas užblokavimas</option>
                    <option value="2">Amžinas užblokavimas</option>
                    <option value="2">IP užblokavimas</option>
                </select>
                <input  v-if="BanModal.selected === '1'" type="text" name="username" class="modal-input form-control" v-model="BanModal.time" placeholder="Įveskite blokavimo trukmę"/>
            </form>
            <button type="button" class="btn modal-button" @click="ConfirmBan">Vykdyti</button>
        </div>
        <div v-if="message">
            <SettingsDangerToast @close="remove">
                <p class="toast-text">{{ message }}</p>
            </SettingsDangerToast>
        </div>
    </div>
</template>

<script>
import SettingsDangerToast from "@/Components/SettingsDangerToast";

export default {
    props: ["Ban"],
    components: {
        SettingsDangerToast
    },
    data: function() {
        return {
            BanModal: {
                selected: 0,
                time: '',
                reason: null,
            },
            message: '',
        }
    },
    methods: {
        CloseModal() {
            this.$emit('close-modal');
            this.message = false;
        },
        isNumeric(n) {
            return !isNaN(parseFloat(n)) && isFinite(n);
        },
        ConfirmBan() {
            if(this.BanModal.reason === '' || this.BanModal.reason === null) {
                this.message = "* Neįrašyta užblokavimo priežastis.";
            } else if(this.BanModal.selected === 0 || this.BanModal.selected === null) {
                this.message = "* Nepasirinktas užblokavimo tipas.";
            } else if(this.BanModal.selected === "1" && this.BanModal.time === '') {
                this.message = "* Neįrašyta užblokavimo trukmė.";
            } else if(this.BanModal.selected === "1" && !this.isNumeric(this.BanModal.time)) {
                this.message = "* Užblokavimo trukmė turi būti sekundėmis (1min = 60s).";
            } else {
                axios.post('/ConfirmBan/' + this.Ban, {username: this.Ban, InputInfo: this.BanModal})
                    .then(response => {
                        this.results = response.data;
                    })
                    .catch((error) => {
                        this.message = "* " + this.Ban + " jau užblokuotas.";
                    });
            }
        },
        remove() {
            this.message = false;
        }
    }
}
</script>

<style lang="scss" scoped>
@import "./resources/sass/toast.scss";
.toast-text {
    font-size: 16px;
}
.modal {
    display: block;
    position: fixed;
    z-index: 1;
    padding-top: 100px;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background: rgb(0,0,0);
    background: rgba(0,0,0,0.4);
}
/* Modal Content */
.modal-content {
    background: transparent !important;
    margin: auto;
    padding: 20px;
    width: 30% !important;
}
/* The Close Button */
.close {
    text-shadow: none !important;
    opacity: unset !important;
    color: #ffffff !important;
    float: right;
    font-size: 25px;
    padding-right: 10px;
}
.modal-title {
    padding-top: 1.5%;
    height: 40px !important;
    background: rgb(227, 36, 43);
    color: #ffffff;
    text-transform: uppercase;
    font-size: 16px;
    text-align: center;
    font-weight: bold;
}
.modal-input {
    background: rgb(213, 213, 213) !important;
    height: 50px !important;
    border-radius: unset !important;
}
.modal-button {
    border-radius: unset !important;
    height: 40px !important;
    background: rgb(227, 36, 43);
    color: #ffffff;
    text-transform: uppercase;
    &:hover {
        background: #ffffff;
        color: rgb(227, 36, 43);
    }
}
</style>
