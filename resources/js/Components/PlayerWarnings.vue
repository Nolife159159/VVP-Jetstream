<template>
    <div class="row margin">
        <div class="title2">
            <h3 class="title-text">{{ DisplayName() }} Įspėjimai</h3>
        </div>
        <div class="full" v-if="visp.length > 0">
            <table class="table table-hover table-dark">
                <thead>
                <tr>
                    <th scope="col" class="col-number">#</th>
                    <th scope="col">VIP įspėjimai ({{ DisplayVipIsp() }})</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="(item, index) in visp">
                    <td>{{ index+1  }}</td>
                    <td>{{ item.kasispejo }} / {{ item.data }} / {{ item.priezastis }}</td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="full" v-else>
            <table class="table table-hover table-dark">
                <thead>
                <tr>
                    <th scope="col" class="col-number">#</th>
                    <th scope="col">VIP įspėjimai ({{ DisplayVipIsp() }})</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td>VIP įspėjimų neturite</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="full" v-if="aisp.length > 0">
            <table class="table table-hover table-dark">
                <thead>
                <tr>
                    <th scope="col" class="col-number">#</th>
                    <th scope="col">Admin įspėjimai ({{ DisplayAdminIsp() }})</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="(item, index) in aisp">
                    <td>{{ index+1  }}</td>
                    <td>{{ item.kasispejo }} / {{ item.data }} / {{ item.priezastis }}</td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="full" v-else>
            <table class="table table-hover table-dark">
                <thead>
                <tr>
                    <th scope="col" class="col-number">#</th>
                    <th scope="col">Admin įspėjimai ({{ DisplayAdminIsp() }})</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td></td>
                    <td>Admin įspėjimų neturite</td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="full" v-if="disp.length > 0">
            <table class="table table-hover table-dark">
                <thead>
                <tr>
                    <th scope="col" class="col-number">#</th>
                    <th scope="col">Direktoriaus įspėjimai ({{ DisplayDrkIsp() }})</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="(item, index) in disp">
                    <td>{{ index+1  }}</td>
                    <td>{{ item.kasispejo }} / {{ item.data }} / {{ item.priezastis }}</td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="full" v-else>
            <table class="table table-hover table-dark">
                <thead>
                <tr>
                    <th scope="col" class="col-number">#</th>
                    <th scope="col">VIP įspėjimai ({{ DisplayDrkIsp() }})</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td></td>
                    <td>Direktoriaus įspėjimų neturite</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            visp: [],
            aisp: [],
            disp: []
        }
    },
    created() {
        axios.get("/VipWarningInfo?name="+this.DisplayName()).then((res) => {
            this.visp = res.data;
        })
        axios.get("/AdminWarningInfo?name"+this.DisplayName()).then((res) => {
            this.aisp = res.data;
        })
        axios.get("/DrkWarningInfo?name"+this.DisplayName()).then((res) => {
            this.disp = res.data;
        })
    },
    methods: {
        DisplayName() {
            if(this.$page.props.SearchUserInfo === undefined) {
                return this.$page.props.user.vardas;
            } else {
                return this.$page.props.SearchUserInfo.vardas;
            }
        },
        DisplayVipIsp() {
            if(this.$page.props.SearchUserInfo === undefined) {
                return this.$page.props.user.visp;
            } else {
                return this.$page.props.SearchUserInfo.visp;
            }
        },
        DisplayAdminIsp() {
            if(this.$page.props.SearchUserInfo === undefined) {
                return this.$page.props.user.aisp;
            } else {
                return this.$page.props.SearchUserInfo.aisp;
            }
        },
        DisplayDrkIsp() {
            if(this.$page.props.SearchUserInfo === undefined) {
                return this.$page.props.user.disp;
            } else {
                return this.$page.props.SearchUserInfo.disp;
            }
        },
    }
}
</script>

<style lang="scss" scoped>
.margin {
    margin: 0px 15px 0px 15px;
}
.full {
    display: contents;
}
th {
    text-align: initial;
}
td {
    text-align: initial;
}
.title2 {
    background: #0f1118;
    color: #fff;
    padding: 18px 18px 36px 10px;
    font-size: 13px;
    text-transform: uppercase;
    width: 100%;
}
.title-text {
    color: #fff;
    padding-bottom: 2px;
    font-size: 13px;
    text-transform: uppercase;
    float: left;
    margin-bottom: -12px !important;
}
.table {
    margin: 0px 15px 0px 15px;
    width: 97.8% !important;
    margin-bottom: 1rem;
    background: transparent;
    color: #fff;
    text-indent: initial;
    white-space: normal;
    line-height: normal;
    font-size: medium;
    font-style: normal;
    border-spacing: 2px;
    font-variant: normal;
}
.col-number {
    width: 5%;
}
.table th, .table td {
    padding: 0.75rem;
}
</style>
