<template>
    <div>
        <navbar>
        </navbar>
        <div class="grid-container">
            <div class="content">
                <TitleContent/>
                <PlayerInfoCharts/>
                <OtherPlayerInfo/>
            </div>
        </div>
    </div>
</template>

<script>
    import Navbar from "@/Components/Navbar";
    import TopBar from "@/Components/TopBar";
    import TitleContent from  "@/Components/TitleContent"
    import PlayerInfoCharts from "@/Components/PlayerInfoCharts";
    import OtherPlayerInfo from "@/Pages/OtherPlayerInfo";

    export default {
        components: {
            TopBar,
            Navbar,
            TitleContent,
            PlayerInfoCharts,
            OtherPlayerInfo
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
    font-size: 80px;
}
@media (max-width: 768px) {
    .grid-container {
        display: block;
    }
}
</style>
