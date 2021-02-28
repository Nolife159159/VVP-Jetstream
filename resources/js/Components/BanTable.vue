<template>
    <div>
        <div class="ban-table table-responsive">
            <div class="banai-table-scroll">
                <table class="ban-info-table">
                    <tr>
                        <th>Vardas_Pavardė</th>
                        <th>Priežastis</th>
                        <th>Kas užblokavo</th>
                        <th>Užblokavimo tipas</th>
                        <th>Bano liko</th>
                        <th>Užblokavimo data</th>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
import Vue from "vue";

let numeral = require("numeral");

Vue.filter("formatNumber", function (value) {
    return numeral(value).format("0,0");
});

export default {
}
</script>

<style lang="scss" scoped>
.ban-table {
    padding-top: 20px;
    margin-right: 15%;
    margin-left: 15%;
    width: unset !important;
}
.banai-table-scroll {
    height:350px;
    overflow:auto;
}
.banai-table-scroll::-webkit-scrollbar-thumb {
    box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
    background-color: #D62929;
}
.banai-table-scroll::-webkit-scrollbar-track {
    box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
    background-color: transparent;
}
.banai-table-scroll::-webkit-scrollbar {
    width: 11px;
    background-color: transparent;
}
.banai-table-scroll::-webkit-scrollbar-thumb {
    box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
    background-color: #D62929;
}
table.ban-info-table {
    width: 100%;
    color: #FFFFFF;
    th {
        background: rgb(227, 36, 43) !important;
        padding: 20px 0px 20px 30px;
        text-transform: uppercase;
        font-size: 16px;
        font-weight: normal;
        text-align: center;
    }
   td {
       padding: 20px 32px 20px;
       text-align: center;
       font-size: 22px;
       color: #ffffff;
       &:nth-child(+n+2) {
           color: rgb(227, 36, 43);
       }
   }
    tr{
        &:nth-child(1){
            background:  none !important;
            border-bottom: none !important;
            width: auto;
        }
        &:nth-child(even){
            background:  rgb(21, 24, 33);
            border-bottom: 1px solid rgb(227, 36, 43);
            width: auto;
        }
        &:nth-child(odd){
            background:rgb(15, 17, 24);
            border-bottom: 1px solid #FFFFFF;
            width: auto;
        }
    }
}
@media (max-width: 768px) {
    .ban-table {
        margin: unset !important;
    }
    table.ban-info-table-title {
        th {
            padding: 20px 0px 20px 2px !important;
        }
    }
}
</style>
