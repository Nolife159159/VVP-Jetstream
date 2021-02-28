<template>
    <div>
        <Navbar/>
        <div class="grid-container">
            <div class="content">
                <img class="img-401" src="/img/401.png" >
                <br>
                <span class="textas">Neturite teisių peržiurėti šį puslapį.</span>
                <br>
                <button type="button" class="btn-outline-custom" onclick="location.href='/profile'">Grįžti</button>
            </div>
        </div>
        <Footer/>
    </div>
</template>

<script>
import Navbar from "@/Components/Navbar";
import Footer from "@/Components/Footer";

export default {
    components: {
        Navbar,
        Footer
    },
    metaInfo: {
        title: 'LERG.LT Vartotojų valdymo panelė | Neturite teisių ',
        meta: [
            { charset: 'utf-8' },
            { name: 'viewport', content: 'width=device-width, initial-scale=1' },
            { name: 'author', content: 'Nelixus, Design By: P-Design'},
            { name: 'description', content: 'LERG.LT Vartotojų valdymo panelė | Neturite teisių' },
            { name: 'keyword', content: 'LERG.LT Vartotojų valdymo panelė | Neturite teisių, LERG, VVP, LERG.LT, No permissions, Neturite teisių' },
            { name: 'apple-web-app-capable', content: 'yes' },
            { name: 'apple-mobile-web-title', content: 'LERG.LT Vartotojų valdymo panelė | Neturite teisių' },
            { name: 'apple-mobile-web-capable', content: 'yes' },
            { name: 'application-name', content: 'LERG.LT Vartotojų valdymo panelė | Neturite teisių' },
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
.textas {
    color: #FFFFFF;
    font-size: 16px;
}
.img-401 {
    margin-top: 10%;
}
.text {
    color: #FFFFFF;
    font-size: large;
}
.btn-outline-custom {
    color: #FFFFFF;
    background: #e3242b;
    margin-bottom: 70px;
    text-transform: uppercase;
    border: 1px solid #e3242b;
    text-align: center;
    vertical-align: middle;
    display: inline-block;
    font-weight: 400;
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    line-height: 1.5;
    border-radius: 0.25rem;
    &:hover {
        color: #FFFFFF;
        background: #e3242b;
        border-color: #e3242b;
    }
}
.footer {
    position: fixed !important;
    bottom: 0 !important;
}
@media (max-width: 768px) {
    .grid-container {
        display: block;
    }
    .img-401 {
        margin-top: 50%;
    }
}
</style>
