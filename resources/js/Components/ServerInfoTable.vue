<template>
    <div>
        <div class="server-info">
            <table class="nustatymai-info-table">
                <tr>
                    <td class="first">Serverio Pavadinimas</td>
                    <td class="second">LERG.LT</td>
                </tr>
                <tr>
                    <td class="first">Serverio IP adresas</td>
                    <td class="second"><code>samp.lt:7777</code></td>
                </tr>
                <tr>
                    <td class="first">Serverio RCON slaptažodis</td>
                    <td class="second"><code>LERG.LT</code></td>
                </tr>
                <tr>
                    <td class="first">Serverio Statusas</td>
                    <td class="second">Išjungtas</td>
                </tr>
                <tr>
                    <td class="first">Žaidėjų skaičius</td>
                    <td class="second">100</td>
                </tr>
                <tr>
                    <td class="first">Žaidėjų vietų skaičius</td>
                    <td class="second">1000</td>
                </tr>
                <tr>
                    <td class="first">Gamemode</td>
                    <td class="second">LERG.LT</td>
                </tr>
                <tr>
                    <td class="first">Serverio žemėlapio pavadinimas</td>
                    <td class="second">SF</td>
                </tr>
                <tr>
                    <td class="first">Serverio slaptažodis</td>
                    <td class="second">Neuždėtas</td>
                </tr>
                <tr>
                    <td class="first">Serverio svetainės nuoroda</td>
                    <td class="second">www.lerg.lt</td>
                </tr>
                <tr>
                    <td class="first">Serverio žaidimo versija</td>
                    <td class="second">Naujausa</td>
                </tr>
                <tr>
                    <td class="first">Serverio pasaulio laikas</td>
                    <td class="second">Diena</td>
                </tr>
                <tr>
                    <td class="first">Serverio oras</td>
                    <td class="second">Giedra</td>
                </tr>
                <tr>
                    <td class="first">Serverio "Lagcomp"</td>
                    <td class="second">Išjungtas</td>
                </tr>
            </table>
        </div>
    </div>
</template>

<script>
export default {
}
</script>

<style lang="scss" scoped>
.server-info {
    font-size: 15px;
    text-transform: uppercase;
    margin-right: 15%;
    margin-left: 15%;
    background: rgb(15, 17, 24);
}
table.nustatymai-info-table {
    width: 100%;
    color: #FFFFFF;
    tr{
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
.second {
    color: rgb(227, 36, 43);
    text-align: end;
    padding: 20px 20px 20px;
}
.first {
    padding: 20px 30px 20px;
    float: left;
}
@media (max-width: 768px) {
    .server-info {
        margin: unset !important;
    }
}
</style>
