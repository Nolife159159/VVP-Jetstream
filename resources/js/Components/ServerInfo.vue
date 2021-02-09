<template>
    <div class="server-info">
        <div class="full">
            <table class="server-info-table">
                <tr>
                    <td class="first">Serverio Pavadinimas</td>
                    <td class="second">LERG.LT</td>
                </tr>
                <tr>
                    <td class="first">Serverio IP</td>
                    <td class="second"><code>samp.lerg.lt:7777</code></td>
                </tr>
                <tr>
                    <td class="first">Serverio RCON slaptažodis</td>
                    <td class="second"><code>Ganksteriu slaptažodis</code></td>
                </tr>
                <tr>
                    <td class="first">Statusas</td>
                    <td class="second">LERG.LT</td>
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
.full {
    display: contents;
}
table.server-info-table {
    width: 100%;
    color: #FFFFFF;
    tr{
        &:nth-child(1) {
            background:  rgb(21, 24, 33);
            border-bottom: 1px solid #FFFFFF;
            width: auto;
        }
        &:nth-child(2) {
            border-bottom: 1px solid #FFFFFF;
            width: auto;
        }
        &:nth-child(3) {
            background:  rgb(21, 24, 33);
            border-bottom: 1px solid #FFFFFF;
            width: auto;
        }
        &:nth-child(4) {
            border-bottom: 1px solid rgb(227, 36, 43);
        }
    }
}
.first {
    padding: 20px 30px 20px;
    float: left;
}
.second {
    color: rgb(227, 36, 43);
    text-align: end;
    padding: 20px 20px 20px;
}
@media (max-width: 768px) {
    .server-info {
        margin: unset;
    }
}
</style>
