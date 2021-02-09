<template>
    <div>
        <Navbar/>
        <div class="grid-container">
            <div class="content">
                <div class="row logu-title">
                    <div class="back-title col-sm-2" onclick="history.back()">Atgal</div>
                    <div class="logai-text col-sm-10">Rcon Ban'ai</div>
                </div>
                <textarea id='logs' rows=20 class='logai-textarea col-sm-9' readonly>
                </textarea>
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
        Footer,
    },
    metaInfo: {
        title: 'LERG.LT Vartotojų valdymo panelė | Rcon Ban\'ai ',
        meta: [
            { charset: 'utf-8' },
            { name: 'viewport', content: 'width=device-width, initial-scale=1' },
            { name: 'author', content: 'Nelixus, Design By: P-Design'},
            { name: 'description', content: 'LERG.LT Vartotojų valdymo panelė | Rcon Ban\'ai' },
            { name: 'keyword', content: 'LERG.LT Vartotojų valdymo panelė | Rcon Ban\'ai, LERG, VVP, LERG.LT, Rcon Ban\'ai, Rcon Bans Rcon-ban\'ai, Rcon-bans' },
            { name: 'apple-web-app-capable', content: 'yes' },
            { name: 'apple-mobile-web-title', content: 'LERG.LT Vartotojų valdymo panelė | Rcon Ban\'ai' },
            { name: 'apple-mobile-web-capable', content: 'yes' },
            { name: 'application-name', content: 'LERG.LT Vartotojų valdymo panelė | Rcon Ban\'ai' },
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
.logu-title {
    margin-right: 15% !important;
    margin-left: 15% !important;
    text-align: center;
    text-transform: uppercase;
    font-size: 16px;
    font-weight: normal;
    color: white;
}
.back-title {
    background: rgb(197, 30, 36) !important;
    padding: 20px 0px 20px 0px;
    cursor: pointer;
}
.logai-text {
    background: rgb(227, 36, 43) !important;
    padding: 20px 0px 20px 0px;
}
textarea {
    border: none;
    overflow: auto;
    outline: none;
}
.logai-textarea {
    text-align: left;
    width: 70% !important;
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    line-height: 1.5;
    color: #FFFFFF;
    background: rgb(15, 17, 24);;
    background-clip: padding-box;
    border: 1px solid rgb(15, 17, 24);;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    font-size: 16px;
    font-family: "Arial";
    resize: none;
}
.logai-textarea::-webkit-scrollbar-thumb {
    box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
    background-color: #D62929;
}
.logai-textarea::-webkit-scrollbar-track {
    box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
    background-color: transparent;
}
.logai-textarea::-webkit-scrollbar {
    width: 11px;
    background-color: transparent;
}
.logai-textarea::-webkit-scrollbar-thumb {
    box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
    background-color: #D62929;
}
@media (max-width: 768px) {
    .grid-container {
        display: block;
    }
    .logu-title {
        margin: unset !important;
    }
    .logai-textarea {
        width: 100% !important;
    }
}
</style>
