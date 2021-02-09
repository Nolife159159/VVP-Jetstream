<template>
    <div>
        <div class="nav-bar-div">
            <div class="nav-bar">
                <div class="nav-items">
                    <a :href="route('Admin')"><img src="img/svg/nustatymai-icon.svg" alt=""> Nustatymai</a>
                </div>
                <div class="nav-items">
                    <a :href="route('Informacija')"><img src="img/svg/info-icon.svg" alt=""> Info ir žaidėjai</a>
                </div>
                <div class="nav-items">
                    <a href="#logai" class="logai-button" @click="LogaiDropdown()"><img src="img/svg/logai-icon.svg" alt="" > Log'ai ir Ban'ai <img src="img/svg/dropdown-icon.svg" alt=""> </a>
                    <div class="dropdown" v-if="listOne">
                        <div class="dropdown-content" id="logai-dropdown">
                            <a :href="route('Logai')">Log'ai</a>
                            <a :href="route('Banai')">Ban'ai</a>
                            <a :href="route('RconBanai')">RCON Ban'ai</a>
                            <a class="reset-logs">Perkrauti Log'us</a>
                        </div>
                    </div>
                </div>
                <div class="nav-items">
                    <a href="#serverio-nustatymais" class="server-nustatymai-button" @click="ServerioNustatymaiDropdown()"><img src="img/svg/serverio_veiksmai-icon.svg" alt=""> Serverio nustatymai <img src="img/svg/dropdown-icon.svg" alt=""> </a>
                    <div class="dropdown" v-if="listTwo" @click="listTwo = false">
                        <div class="dropdown-content" id="serverio-nustatymai-dropdown">
                            <a :href="route('Configs')">Serverio Konfiguracija</a>
                        </div>
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
           listOne: false,
           listTwo: false
       }
   },
    methods:{
        LogaiDropdown(){
           if(this.listOne != true){
               this.listOne = true;
           } else {
               this.listOne = false
           }
       },
        ServerioNustatymaiDropdown() {
            if(this.listTwo != true){
                this.listTwo = true;
            } else {
                this.listTwo = false
            }
        }
    }
}
</script>

<style lang="scss" scoped>
.nav-bar {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    margin-left: 15%;
    margin-right: 15%;
    text-transform: uppercase;
    background: rgb(227, 36, 43);
    font-size: 17px;
    height: 50px;
}
.nav-items {
    float: left;
    a {
        display: block;
        color: #FFFFFF;
        text-align: center;
        padding: 14px 45.9px;
        text-decoration: none
    }
}
.dropdown {
    float: left;
    overflow: hidden;
}
.dropdown-content {
    position: fixed;
    background: rgba(255, 255, 255, 0.502);
    min-width: 210px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
    border: 2px solid rgb(15, 17, 24);
    border-radius: 5px;
    a {
        float: none;
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        text-align: left;
        cursor: pointer;
    }
}
@media (max-width: 768px) {
    .nav-bar {
        margin-left: unset !important;
        margin-right: unset !important;
        height: unset !important;
    }
    .nav-items {
        display: contents;
    }
    .dropdown-content {
        left: 50px !important;
    }
}
</style>
