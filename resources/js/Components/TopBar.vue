<template>
    <div class="header">
        <img src="img/main-logo.png" style="transform: scale(0.8);">
        <img class="corner-logo" src="img/corner-logo.png" alt="">
    </div>
</template>

<script>
export default {

}
</script>

<style lang="scss" scoped>
.header {
    background: #0f1118;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #FFFFFF;
}

.corner-logo {
    left: 0;
    position: absolute;
    width: 60px;
    overflow: hidden;
    top: 0;
    height: 48px;
}

@media (max-width: 768px) {
    .corner-logo {
        display: none;
    }
}

</style>
