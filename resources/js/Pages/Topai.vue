<template>
    <div>
        <Navbar/>
        <div class="grid-container">
            <div class="content">
                <TopaiTitle />
                <TopaiPagal/>
                <div v-if="this.$page.url === '/topai?pagal=xp'">
                    <TopaiPagalXP />
                </div>
                <div v-else-if="this.$page.url === '/topai?pagal=pinigus'">
                    <TopaiPagalPinigus />
                </div>
                <div v-else-if="this.$page.url === '/topai?pagal=uzdarbi'">
                    <TopaiPagalUzdarbi />
                </div>
                <div v-else-if="this.$page.url === '/topai?pagal=darbo-xp'">
                    <TopaiPagalDarboXP />
                </div>
            </div>
        </div>
        <Footer/>
    </div>
</template>

<script>
import Navbar from "@/Components/Navbar";
import TopaiTitle from "@/Components/TopaiTitle";
import TopaiPagal from "@/Components/TopaiPagal";
import TopaiPagalXP from "@/Components/TopaiPagalXP";
import TopaiPagalPinigus from "@/Components/TopaiPagalPinigus";
import TopaiPagalUzdarbi from "@/Components/TopaiPagalUzdarbi";
import TopaiPagalDarboXP from "@/Components/TopaiPagalDarboXP";
import Footer from "@/Components/Footer";

export default {
    components: {
        Navbar,
        TopaiTitle,
        TopaiPagal,
        TopaiPagalXP,
        TopaiPagalPinigus,
        TopaiPagalUzdarbi,
        TopaiPagalDarboXP,
        Footer

    },
    created() {
        console.log(this.$page.url);
    },
    metaInfo: {
        title: 'LERG.LT Vartotojų valdymo panelė | Topai ',
        meta: [
            { charset: 'utf-8' },
            { name: 'viewport', content: 'width=device-width, initial-scale=1' },
            { name: 'author', content: 'Nelixus, Design By: P-Design'},
            { name: 'description', content: 'LERG.LT Vartotojų valdymo panelė | Topai' },
            { name: 'keyword', content: 'LERG.LT Vartotojų valdymo panelė | Topai, LERG, VVP, LERG.LT, Tops, Topai' },
            { name: 'apple-web-app-capable', content: 'yes' },
            { name: 'apple-mobile-web-title', content: 'LERG.LT Vartotojų valdymo panelė | Topai' },
            { name: 'apple-mobile-web-capable', content: 'yes' },
            { name: 'application-name', content: 'LERG.LT Vartotojų valdymo panelė | Topai' },
            { name: 'application-starturl', content: '/' }
        ]
    },
}
</script>

<style lang="scss" scoped>
.grid-container {
    display: grid;
    grid-template-columns: 60px auto;
    grid-template-rows: auto;
    grid-template-areas: "nav content";
    grid-gap: 0px;
}
.content {
    grid-area: content;
    background: #151821;
    text-align: center;
    padding-bottom: 1rem;
    font-size: 80px !important;
}
@media (max-width: 768px) {
    .grid-container {
        display: block;
    }
}
</style>
