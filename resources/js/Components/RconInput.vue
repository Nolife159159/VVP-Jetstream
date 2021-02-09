<template>
    <div>
        <form action='?a=rcon' class=''>
            <div class="rcon">
                <div class="input-group">
                    <span class="input-group-btn">
                        <a class="btn rcon-button">RCON</a>
                    </span>
                    <div class="rcon-message form-control">
                        <select class name="cmd">
                            <option value="" disabled selected class="top-select-text">Pasirinkite rcon komandą</option>
                            <option value="1">Say {Žinutė}</option>
                            <option value="2">Kick {Žaidėjo ID}</option>
                            <option value="3">Ban {Žaidėjo ID}</option>
                            <option value="4">BanIP {ip}</option>
                            <option value="5">UnBanIP {ip}</option>
                            <option value="6">(Nustatyti) Gamemode {Tekstas}</option>
                            <option value="7">(Nustatyti) Pavadinimą {Tekstas}</option>
                            <option value="8">(Nustatyti) Slaptažodį {Tekstas}</option>
                            <option value="9">(Panaikinti) Slaptažodį</option>
                            <option value="10">(Nustatyti) "Weburl" {Nuoroda}</option>
                            <option value="11">(Nustatyti) Kalbą {Tekstas}</option>
                            <option value="12">(Nustatyti) Žemėlapį {Tekstas}</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="rcon-zaidejams">
                <div class="input-group width">
                    <input type="text" name="mex" class="rcon-message-zaidejams form-control" placeholder="Įrašykite žinutę išsiųsti visiems žaidėjams serveryje"/>
                    <span class="input-group-btn rcon-message-span">
                        <button type="submit" class="btn rcon-message-button" name="rcon-send">Siųsti</button>
                    </span>
                </div>
            </div>
        </form>
    </div>
</template>

<script>
export default {

}
</script>

<style lang="scss" scoped>
.rcon {
    float: left;
    margin: 0% 15% 0% 15%;
}
.rcon-button {
    color: rgb(227, 36, 43);
    background: transparent;
    background-image: none;
    border-color: rgb(227, 36, 43);
    border-radius: 0%;
    text-transform: uppercase;
    width: 109px;
    padding: 10%;
    height: 49px;
    cursor: default;
    &:hover {
        color: #fff;
        background: rgb(227, 36, 43);
        border-color: rgb(227, 36, 43);
    }
}
.rcon-message-button {
    float: right;
    color: rgb(227, 36, 43);
    background: transparent;
    background-image: none;
    border-color: rgb(227, 36, 43) !important;
    border-radius: 0% !important;
    text-transform: uppercase;
    width: 109px;
    height: 49px;
    &:hover {
        color: #fff;
        background: rgb(227, 36, 43);
        border-color: rgb(227, 36, 43);
    }
}
.rcon-message-span {
    padding-left: 20px !important;
}
select {
    background: transparent;
    color: #ffff;
    border: unset;
    margin-top: 5px;
    outline: unset;
    cursor: pointer !important;
    text-transform: uppercase;
}
option {
    text-transform: uppercase;
    background: #151821;
    padding: 8px 16px;
    cursor: pointer !important;
}
.width {
    width: 70% !important;
    margin-right: 15%;
    margin-left: 15%;
}
.rcon-message {
    height: 49px !important;
    width: 353px !important;
    background: transparent !important;
    border-radius: 0% !important;
    border-color: rgb(227, 36, 43) !important;
    position: inherit;
    top: 48px;
}
.top-select-text {
    color: rgb(227, 36, 43);
}
.rcon-message-zaidejams {
    height: 49px !important;
    width: 353px !important;
    background: transparent !important;
    border-radius: 0% !important;
    border-color: rgb(227, 36, 43) !important;
    color: rgb(227, 36, 43) !important;
}
@media (max-width: 768px) {
    .rcon-message {
        width: auto;
        position: absolute;
    }
    .rcon {
        float: unset !important;
        margin: unset !important;
    }
    select {
        width: 61%;
        right: 10px;
        position: absolute;
    }
    .width {
        width: 100% !important;
        margin: unset;
    }
    .rcon-message-span {
        padding-left: 0px !important;
    }
}
</style>
