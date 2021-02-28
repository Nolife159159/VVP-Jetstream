<template>
    <div>
        <navbar />
        <div class="grid-container">
            <div class="content">
                <TitleContent/>
                <PlayerInfoCharts/>
                <OtherPlayerInfo/>
                <PlayerWarnings />
                <PlayerWorkInfo />
            </div>
        </div>
        <Footer />
    </div>
</template>

<script>
    import Navbar from "@/Components/Navbar";
    import TitleContent from  "@/Components/TitleContent"
    import PlayerInfoCharts from "@/Components/PlayerInfoCharts";
    import OtherPlayerInfo from "@/Components/OtherPlayerInfo";
    import PlayerWarnings from "@/Components/PlayerWarnings";
    import PlayerWorkInfo from "@/Components/PlayerWorkInfo";
    import Footer from "@/Components/Footer";

    export default {
        components: {
            Navbar,
            TitleContent,
            PlayerInfoCharts,
            OtherPlayerInfo,
            PlayerWarnings,
            PlayerWorkInfo,
            Footer
        },
        metaInfo: {
            title: 'LERG.LT Vartotojų valdymo panelė | Profilis ',
            meta: [
                { charset: 'utf-8' },
                { name: 'viewport', content: 'width=device-width, initial-scale=1' },
                { name: 'author', content: 'Nelixus, Design By: P-Design'},
                { name: 'description', content: 'LERG.LT Vartotojų valdymo panelė | Profilis' },
                { name: 'keyword', content: 'LERG.LT Vartotojų valdymo panelė | Profilis, LERG, VVP, LERG.LT, Profile, Profilis' },
                { name: 'apple-web-app-capable', content: 'yes' },
                { name: 'apple-mobile-web-title', content: 'LERG.LT Vartotojų valdymo panelė | Profilis' },
                { name: 'apple-mobile-web-capable', content: 'yes' },
                { name: 'application-name', content: 'LERG.LT Vartotojų valdymo panelė | Profilis' },
                { name: 'application-starturl', content: '/' }
            ]
        }
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
