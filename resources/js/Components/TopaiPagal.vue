<template>
    <div>
        <div class="mobile-icons">
            <button type="button" class="btn-outline-custom" onclick="location.href='?pagal=xp'">Patirtį</button>
            <button type="button" class="btn-outline-custom" onclick="location.href='?pagal=pinigus'">Pinigus</button>
            <button type="button" class="btn-outline-custom" onclick="location.href='?pagal=uzdarbi'">Uždarbį</button>
            <button type="button" class="btn-outline-custom" onclick="location.href='?pagal=darbo-xp'">Darbo patirtį</button>
        </div>
    </div>
</template>

<script>
export default {
}
</script>

<style lang="scss" scoped>
.btn-outline-custom {
    color: #e3242b;
    background: transparent;
    background-image: none;
    border-color: #e3242b !important;
    margin-bottom: 70px;
    text-transform: uppercase;
    border: 1px solid transparent;
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

@media (max-width: 768px) {
.btn-outline-custom {
    width: 100%;
    margin-bottom: unset !important;
    margin-top: 10px;
}
.mobile-icons {
    display: flex;
    flex-direction: column;
}
.btn-outline-custom:last-child {
        margin-bottom: 10px !important;
    }
}
</style>
