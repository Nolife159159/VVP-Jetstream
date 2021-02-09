<template>
    <div>
        <div class="online-zaidejai">
            <table class="online-table">
                <tr>
                    <th class="online-table-title">Online Žaidėjai</th>
                </tr>
            </table>
            <div class="online-table-scroll">
                <table class="online-table">
                    <tr class='online-table-info-title'>
                        <th>ID</th>
                        <th>Vardas_Pavardė</th>
                        <th>XP</th>
                        <th>Ping</th>
                        <th>Veiksmai</th>
                    </tr>
                    <tr class="online-table-info-info">
                        <td>1</td>
                        <td>Admin_Mantas</td>
                        <td>{{ Number(5000).toLocaleString() }} XP</td>
                        <td>{{ Number(4521).toLocaleString() }}</td>
                        <td><a href='' class='kick-button second-online'>Kick</a> |  <a href='' class='ban-button second-online'>Ban</a></td>
                    </tr>
                    <tr class="online-table-info-info">
                        <td>1</td>
                        <td>Admin_Mantas</td>
                        <td>{{ Number(5000).toLocaleString() }} XP</td>
                        <td>{{ Number(4521).toLocaleString() }}</td>
                        <td><a href='' class='kick-button second-online'>Kick</a> |  <a href='' class='ban-button second-online'>Ban</a></td>
                    </tr>
                    <tr class="online-table-info-info">
                        <td>1</td>
                        <td>Admin_Mantas</td>
                        <td>{{ Number(5000).toLocaleString() }} XP</td>
                        <td>{{ Number(4521).toLocaleString() }}</td>
                        <td><a href='' class='kick-button second-online'>Kick</a> |  <a href='' class='ban-button second-online'>Ban</a></td>
                    </tr>
                    <tr class="online-table-info-info">
                        <td>1</td>
                        <td>Admin_Mantas</td>
                        <td>{{ Number(5000).toLocaleString() }} XP</td>
                        <td>{{ Number(4521).toLocaleString() }}</td>
                        <td><a href='' class='kick-button second-online'>Kick</a> |  <a href='' class='ban-button second-online'>Ban</a></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
export default {
}
</script>

<style lang="scss" scoped>
.online-zaidejai {
    margin-right: 15%;
    margin-left: 15%;
    padding-top: 20px;
}
table.online-table {
    width: 100%;
    color: #FFFFFF;
    td {
        padding: 20px 30px 20px;
        text-transform: uppercase;
        text-align: center;
    }
    tr{
        &:nth-child(even){
            background:rgb(15, 17, 24);
        }
        &:nth-child(odd){
            background: rgb(21, 24, 33);
        }
    }
    .second-online {
        color: rgb(227, 36, 43);
        text-align: center;
        text-transform: uppercase;
        padding: 20px 1px 20px !important;
        &:hover {
            color: rgb(227, 36, 43);
            text-decoration: none;
        }
    }
}
.online-table-title {
    background: rgb(227, 36, 43) !important;
    text-align: center;
    padding: 20px 0px 20px 0px;
    text-transform: uppercase;
    font-size: 16px;
    font-weight: normal;
}
.online-table-scroll {
    height:150px;
    overflow:auto;
}
.online-table-info-title {
    background: rgb(227, 36, 43) !important;
    padding: 20px 0px 20px 0px;
    text-transform: uppercase;
    font-size: 16px;
    font-weight: normal;
    text-align: center;
}
.online-table-info-info {
    font-size: 16px;
    padding: 20px 30px 20px;
    text-transform: uppercase;
    text-align: center;
}
.online-table-scroll::-webkit-scrollbar-thumb {
    box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
    background-color: #D62929;
}
.online-table-scroll::-webkit-scrollbar-track {
    box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
    background-color: transparent;
}
.online-table-scroll::-webkit-scrollbar {
    width: 11px;
    background-color: transparent;
}
.online-table-scroll::-webkit-scrollbar-thumb {
    box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
    background-color: #D62929;
}
@media (max-width: 768px) {
    .online-zaidejai {
        margin: unset;
    }
}
</style>
