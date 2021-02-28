<template>
    <div class="search-bg">
        <input
            type="text"
            v-on:keyup.up="go_up($event)" v-on:keyup.down="go_down($event)"
            v-on:keyup="getSearchData($event)"
            class="search_name" placeholder="Vardas_Pavardė" v-model="search_name"
        />
        <div class="autocomplete-items" v-if="results.length" >
            <div v-for="(result, index) in results" :key="index" :class="{ highlighted: index === h_index }" @click="select(index)" @mouseover="highlight(index)">
                {{ result.vardas }}
            </div>
        </div>
        <div class="padd">
            <button class="search_button" @click="SearchUserByName()">Ieškoti</button>
        </div>
        <div v-if="message">
            <SettingsDangerToast @close="remove">
                <p class="toast-text">{{ message }}</p>
            </SettingsDangerToast>
        </div>
        <div v-if="this.$page.props.flash.msg">
            <SettingsDangerToast @close="remove">
                <p class="toast-text">{{ this.$page.props.flash.msg }}</p>
            </SettingsDangerToast>
        </div>
    </div>
</template>
<script>
import SettingsDangerToast from '@/Components/SettingsDangerToast'
import Button from "@/Components/Button";
export default {
    components: {
        Button,
        SettingsDangerToast,
    },
    data() {
        return {
            search_name: '',
            results: [],
            selectedObj: [],
            h_index: -1,
            message: '',
        }
    },
    computed:{
      totalResults() {return this.results.length}
    },
    methods: {
        go_down(event) {
            event.preventDefault()
            let total = this.totalResults > 0 ? this.totalResults - 1 : 0;
            if (this.h_index < total) this.h_index++; else this.h_index = 0
        },
        go_up(event) {
            event.preventDefault()
            if (this.h_index > 0) this.h_index--; else this.h_index = this.totalResults;
        },
        highlight(index){this.h_index = index},
        select (index) {
            this.selectedObj = this.results[index];
            this.search_name = this.results[index].vardas;
            this.results = '';
        },
        getSearchData(event) {
            if (this.search_name.length > 0 && (event.key !== 'ArrowDown' && event.key !== 'ArrowUp')){
                this.results = [];
                axios.get('/AutoComplete',{params: {search_name: this.search_name}})
                    .then(response => {
                        this.results = response.data;
                    }
                );
            }
        },
        SearchUserByName() {
            if(this.search_name === this.$page.props.user.vardas) {
                this.message = "* Savęs ieškoti negalite."
            }
            if(this.search_name === '' || this.search_name === null) {
                this.message = "* Laukelis negali būti tusčias."
            } else if(this.message === "") {
                window.location.href = '/profile/'+this.search_name;
            }
        },
        remove() {
            this.message = null;
            this.$page.props.flash.msg = null;
        },
    }
}
</script>

<style lang="scss" scoped>
@import "./resources/sass/toast.scss";
.search_name {
    width: 80%;
    margin-top: 150px;
    background: #D5D5D5;
    height: 50px;
}
.padd {
    padding-bottom: 40px;
}
.toast-text {
    font-size: 16px;
}
.autocomplete-items div {
    padding: 10px;
    cursor: pointer;
    background: #fff;
    border-bottom: 1px solid #d4d4d4;
    &:hover {
        border-bottom: none;
        background: #e3242b;
        color: #ffffff;
    }
}
.highlighted {
    border-bottom: none;
    background: #e3242b!important;
    color: #ffffff;
}
.autocomplete-items {
    width: 80%;
    padding-left: 230px;
    z-index: 99;
}
.search-bg {
    background: url("/public/img/search-body.png");
    background-repeat: no-repeat;
    background-size: cover;
}
.search_button {
    width: 80%;
    height: 38px;
    background: #151821;
    border-color: #151821;
    color: #FFFFFF;
    font-family: Arial;
    font-size: 16px;
    line-height: 0;
    text-transform: uppercase;
    text-align: center;
    cursor: pointer;
}
::-webkit-input-placeholder {
    text-transform: uppercase;
    padding-left: 20px;
}
@media (max-width: 768px) {
    ::-webkit-input-placeholder {
        padding-left: 10px !important;
        font-size: 27px;
    }
    .search_name {
        margin-top: 40px;
    }
    .autocomplete-items {
        width: 90%;
        font-size: 25px;
        padding-left: 11%;
    }
}
</style>
