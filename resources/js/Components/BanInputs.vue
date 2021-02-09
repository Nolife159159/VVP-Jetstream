<template>
    <div>
        <div class="unban">
            <div class="input-group">
                <span class="input-group-btn">
                    <a class="btn unban-button">Atblokuoti</a>
                </span>
                <input type="text" name="unban-username" id="unban-name" class="margin-pc rcon-message-zaidejams2 form-control" placeholder="Vardas_Pavardė"/>
                <input type="text" name="ban-username" id="ban-name" class="rcon-message-zaidejams2 form-control" placeholder="Vardas_Pavardė"/>
                <span class="input-group-btn">
                    <a class="btn unban-button">Blokuoti</a>
                </span>
            </div>
        </div>

    </div>
</template>

<script>
export default {
}
</script>

<style lang="scss" scoped>
.unban {
    margin: 0% 15% 0% 15%;
}
.margin-pc {
    margin-right: 4%;
}
.unban-button {
    color: rgb(227, 36, 43) !important;
    background: transparent;
    background-image: none;
    border-color: rgb(227, 36, 43) !important;
    border-radius: 0% !important;
    text-transform: uppercase;
    width: 109px;
    padding: 10% !important;
    height: 49px;
    cursor: pointer !important;
    &:hover {
        color: #fff !important;
        background: rgb(227, 36, 43);
        border-color: rgb(227, 36, 43);
    }
}
.rcon-message-zaidejams2 {
    height: 49px !important;
    width: 353px !important;
    background: transparent !important;
    border-radius: 0% !important;
    border-color: rgb(227, 36, 43) !important;
    color: rgb(227, 36, 43) !important;
    position: inherit;
    top: 48px;
}
.rcon-message-zaidejams2::-moz-placeholder {
    color: rgb(227, 36, 43) !important;
    font-size: 15px !important;
    text-align: unset;
    text-transform: uppercase;
    font-weight: unset;
}
.rcon-message-zaidejams2::-webkit-input-placeholder {
    color: rgb(227, 36, 43) !important;
    font-size: 15px !important;
    text-align: unset;
    text-transform: uppercase;
    font-weight: unset;
}
.rcon-message-zaidejams2:-moz-placeholder {
    color: rgb(227, 36, 43) !important;
    font-size: 15px !important;
    text-align: unset;
    text-transform: uppercase;
    font-weight: unset;
}
.rcon-message-zaidejams2::-moz-placeholder {
    color: rgb(227, 36, 43) !important;
    font-size: 15px !important;
    text-align: unset;
    text-transform: uppercase;
    font-weight: unset;
}
@media (max-width: 768px) {
    .unban {
        float: unset !important;
        margin: unset !important;
    }
    .rcon-message {
        width: auto;
        position: absolute;
    }
    .rcon-message-zaidejams2 {
        width: unset !important;
    }
    .margin-pc {
        margin: unset !important;
    }
}
</style>
