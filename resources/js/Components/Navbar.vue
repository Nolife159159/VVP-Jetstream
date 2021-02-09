<template>
    <div>
        <TopBar/>
        <div class="nav">
            <div class="nav-items">
                <div class="item" v-if="this.$page.props.user.admin == 4">
                    <img src="img/svg/acp-white.svg" alt="">
                    <a :href="route('Admin')">ACP</a>
                </div>
                <div class="item active">
                    <img src="img/svg/forum-white.svg" alt="">
                    <a href="www.lerg.lt">FORUMAS</a>
                </div>
                <div class="item">
                    <img src="img/svg/search-white.svg" alt="">
                    <a :href="route('Paieska')">IEŠKOTI</a>
                </div>
                <div class="item">
                    <img src="img/svg/profilis-white.svg" alt="">
                    <a :href="route('Profile')">PROFILIS</a>
                </div>
                <div class="item">
                    <img src="img/svg/top-white.svg" alt="">
                    <a :href="route('Topai')">TOP10</a>
                </div>
                <div class="item">
                    <img src="img/svg/icon-logout-white.svg" alt="">
                    <form @submit.prevent="logout">
                        <a @click="logout()">ATSIJUNGTI</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import TopBar from "@/Components/TopBar";
export default {
    components: {TopBar},
    methods: {
        logout() {
            this.$inertia.post(route('logout'));
        },
    }
}
</script>

<style lang="scss" scoped>
.nav {
    background: #0f1118;
    display:flex;
    justify-content: center;
    .nav-items {
        display:flex;
        flex-direction: column;
        justify-content: center;
        .item {
            display: flex;
            align-items: center;
            padding: .5rem 10px;
            border:3px solid transparent;
            justify-content: center;
            margin-right: 1rem;
            img {
                width: 20px;
            }
            a {
                display: none;
                font-size: small;
                text-transform: uppercase;
            }
            &:hover {
                margin-right: unset;
                border-left: 6px solid #e3242b;
                a {
                    display:inherit;
                    color: #e3242b;
                    text-decoration: none;
                    cursor: pointer;
                }
                img {
                    display:none;
                }
            }
        }
        .active {
            border-left: 6px solid #e3242b;
        }
    }
}

@media (min-width: 768px) {
    .nav {
        position: absolute;
        left:0;
        height: 38rem;
        width: 4rem;
    }

}

@media (max-width: 768px) {
    .nav {
        flex-direction: column;
        display:unset !important;
        .nav-items {
            flex-direction: row;
            align-items: center;
            .item {
                &:hover {
                    border-left: none !important;
                    margin-right: unset;
                    border-top: 6px solid #e3242b;
                }
            }
        }
    }
    .active {
        border-left: none !important;
        border-top: 6px solid #e3242b !important;
    }
}

</style>
