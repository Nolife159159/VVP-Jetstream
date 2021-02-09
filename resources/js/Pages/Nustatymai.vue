<template>
    <div>
        <Navbar/>
        <div class="grid-container">
            <div class="content">
                <NustatymuTitle />
                <ChangeInputs/>
            </div>
        </div>
        <Footer/>
    </div>
</template>
<script>
import Navbar from "@/Components/Navbar";
import Footer from "@/Components/Footer";
import NustatymuTitle from "@/Components/NustatymuTitle";
import ChangeInputs from "@/Components/ChangeInputs";
export default {
    components: {
        Navbar,
        NustatymuTitle,
        ChangeInputs,
        Footer
    },
    metaInfo: {
        title: 'LERG.LT Vartotojų valdymo panelė | Nustatymai ',
        meta: [
            { charset: 'utf-8' },
            { name: 'viewport', content: 'width=device-width, initial-scale=1' },
            { name: 'author', content: 'Nelixus, Design By: P-Design'},
            { name: 'description', content: 'LERG.LT Vartotojų valdymo panelė | Profilis' },
            { name: 'keyword', content: 'LERG.LT Vartotojų valdymo panelė | Nustatymai, LERG, VVP, LERG.LT, Settings, Nustatymai' },
            { name: 'apple-web-app-capable', content: 'yes' },
            { name: 'apple-mobile-web-title', content: 'LERG.LT Vartotojų valdymo panelė | Nustatymai' },
            { name: 'apple-mobile-web-capable', content: 'yes' },
            { name: 'application-name', content: 'LERG.LT Vartotojų valdymo panelė | Nustatymai' },
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
