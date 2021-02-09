<template>
    <div>
        <Navbar />
        <div class="grid-container">
            <div class="content">
                <SearchTittle/>
                <SearchInput/>
            </div>
        </div>
        <Footer/>
    </div>
</template>

<script>
import Navbar from "@/Components/Navbar";
import SearchTittle from "@/Components/SearchTittle";
import SearchInput from "@/Components/SearchInput";
import Footer from "@/Components/Footer";

export default {
    components: {
        Navbar,
        SearchTittle,
        SearchInput,
        Footer
    },
    metaInfo: {
        title: 'LERG.LT Vartotojų valdymo panelė | Paieška ',
        meta: [
            { charset: 'utf-8' },
            { name: 'viewport', content: 'width=device-width, initial-scale=1' },
            { name: 'author', content: 'Nelixus, Design By: P-Design'},
            { name: 'description', content: 'LERG.LT Vartotojų valdymo panelė | Paieška' },
            { name: 'keyword', content: 'LERG.LT Vartotojų valdymo panelė | Paieška, LERG, VVP, LERG.LT, Search, Paieška' },
            { name: 'apple-web-app-capable', content: 'yes' },
            { name: 'apple-mobile-web-title', content: 'LERG.LT Vartotojų valdymo panelė | Paieška' },
            { name: 'apple-mobile-web-capable', content: 'yes' },
            { name: 'application-name', content: 'LERG.LT Vartotojų valdymo panelė | Paieška' },
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
}
.footer {
    position: fixed !important;
    bottom: 0 !important;
}

@media (max-width: 768px) {
    .grid-container {
        display: block;
    }
}
</style>

