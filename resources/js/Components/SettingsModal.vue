<template>
    <div class="modal">
        <div class="modal-content">
            <span class="modal-title">Ar esate tikras savo sprendimu? <span class="close" @click="CloseModal">&times;</span></span>
            <div class="buttons">
                <slot></slot>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    methods: {
        CloseModal() {
            this.$emit('close-modal');
        }
    }
}
</script>

<style lang="scss" scoped>
.modal {
    display: block;
    position: fixed;
    z-index: 1;
    padding-top: 100px;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background: rgb(0,0,0);
    background: rgba(0,0,0,0.4);
}
/* Modal Content */
.modal-content {
    background: transparent !important;
    margin: auto;
    padding: 20px;
    width: 30% !important;
}
/* The Close Button */
.close {
    text-shadow: none !important;
    opacity: unset !important;
    color: #0f1118 !important;
    float: right;
    font-size: 25px;
    padding-right: 10px;
}
.modal-title {
    padding-top: 1.5%;
    height: 40px !important;
    background: #ffffff;
    color: #0f1118;
    text-transform: uppercase;
    font-size: 16px;
    text-align: center;
    font-weight: bold;
}
.modal-button {
    border-radius: unset !important;
    height: 40px !important;
    background: rgb(227, 36, 43);
    color: #ffffff;
    text-transform: uppercase;
}
.modal-button:hover {
    color: #ffffff;
}
.no-button {
    width: 50%;
}
.yes-button {
    color: #ffffff !important;
    width: 50%;
    background: #36e324;
}
</style>
