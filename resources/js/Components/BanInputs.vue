<template>
    <div>
        <form autocomplete="off">
            <div class="unban">
                <div class="input-group">
                    <span class="input-group-btn">
                        <a class="btn unban-button">Atblokuoti</a>
                    </span>
                    <input type="text" name="unban-username" id="unban-name" v-model="Ban.unban_name"  class="margin-pc rcon-message-zaidejams2 form-control" placeholder="Vardas_Pavardė"/>
                    <input type="text" name="ban-username" id="ban-name" v-model="Ban.ban_name" class="rcon-message-zaidejams2 form-control" placeholder="Vardas_Pavardė"/>
                    <span class="input-group-btn">
                        <a class="btn unban-button" @click="BanUser">Blokuoti</a>
                    </span>
                    <BanModal v-if="ShowBanModal" @close-modal="CloseModal" v-bind:Ban="this.Ban.ban_name">
                        <span>Blokuoti žaidėją: <span class="name"> {{ this.Ban.ban_name }} </span>? <span class="close" @click="CloseModal">&times;</span></span>
                    </BanModal>
                    <div v-if="message">
                        <SettingsDangerToast @close="remove">
                            <p class="toast-text">{{ message }}</p>
                        </SettingsDangerToast>
                    </div>
                </div>
            </div>
        </form>
    </div>
</template>

<script>
import BanModal from "@/Components/BanModal";
import SettingsDangerToast from "@/Components/SettingsDangerToast";
export default {
    components: {
        BanModal,
        SettingsDangerToast
    },
    data: function() {
        return {
            Ban: {
                unban_name: null,
                ban_name: null
            },
            ShowBanModal: false,
            message: '',
        }
    },
    methods: {
        BanUser(event) {
            event.preventDefault();
            if(this.Ban.ban_name === '' || this.Ban.ban_name === null) {
                this.message = "* Laukelis negali būti tusčias."
            } else {
                axios.get('/Ban/' + this.Ban.ban_name)
                    .then(response => {
                        this.results = response.data;
                        this.ShowBanModal = true;
                    })
                    .catch((error) => {
                        this.message = "* Toks žaidėjas nerastas."
                    });
            }
        },
        CloseModal() {
            this.ShowBanModal = false;
        },
        remove() {
            this.message = null;
        },
    }
}
</script>

<style lang="scss" scoped>
@import "./resources/sass/toast.scss";
.unban {
    margin: 0% 15% 0% 15%;
}
.margin-pc {
    margin-right: 4%;
}
.toast-text {
    font-size: 16px;
}
.unban-button {
    color: rgb(227, 36, 43) !important;
    background: transparent;
    background-image: none;
    border-color: rgb(227, 36, 43) !important;
    border-radius: 0% !important;
    text-transform: uppercase;
    width: 109px;
    padding: 10% !important;
    height: 49px;
    cursor: pointer !important;
    &:hover {
        color: #fff !important;
        background: rgb(227, 36, 43);
        border-color: rgb(227, 36, 43);
    }
}
.rcon-message-zaidejams2 {
    height: 49px !important;
    width: 353px !important;
    background: transparent !important;
    border-radius: 0% !important;
    border-color: rgb(227, 36, 43) !important;
    color: rgb(227, 36, 43) !important;
    position: inherit;
    top: 48px;
}
.rcon-message-zaidejams2::-moz-placeholder {
    color: rgb(227, 36, 43) !important;
    font-size: 15px !important;
    text-align: unset;
    text-transform: uppercase;
    font-weight: unset;
}
.rcon-message-zaidejams2::-webkit-input-placeholder {
    color: rgb(227, 36, 43) !important;
    font-size: 15px !important;
    text-align: unset;
    text-transform: uppercase;
    font-weight: unset;
}
.rcon-message-zaidejams2:-moz-placeholder {
    color: rgb(227, 36, 43) !important;
    font-size: 15px !important;
    text-align: unset;
    text-transform: uppercase;
    font-weight: unset;
}
.rcon-message-zaidejams2::-moz-placeholder {
    color: rgb(227, 36, 43) !important;
    font-size: 15px !important;
    text-align: unset;
    text-transform: uppercase;
    font-weight: unset;
}
.name {
    color: #32324e;
}
@media (max-width: 768px) {
    .unban {
        float: unset !important;
        margin: unset !important;
    }
    .rcon-message {
        width: auto;
        position: absolute;
    }
    .rcon-message-zaidejams2 {
        width: unset !important;
    }
    .margin-pc {
        margin: unset !important;
    }
}
</style>
