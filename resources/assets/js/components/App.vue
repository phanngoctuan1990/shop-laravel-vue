<template>
    <div>
        <div class="w3-row w3-padding-8 w3-theme-d2 w3-xlarge">
            <div class="w3-quarter">
                <div class="w3-bar">
                    <a href="#" class="w3-bar-item w3-button">
                        <i class="fa fa-bars"></i>
                    </a>
                </div>
            </div>
            <div class="w3-half">
                <input type="text" style="width:100%;" class="w3-amber w3-border-0 w3-padding">
            </div>
            <div class="w3-quarter">
                <div class="w3-bar w3-xlarge">
                    <a href="#" class="w3-bar-item w3-button w3-left">
                        <i class="fa fa-search"></i>
                    </a>
                    <a href="#" class="w3-bar-item w3-button w3-right">
                        <img src="img_avatar.jpg" style="height:40px;" class="w3-hide-small w3-circle">
                    </a>
                </div>
            </div>
        </div>
        <router-view></router-view>
    </div>
</template>

<script>
    export default {
        data () {
            return {
                
            };
        }
    }
</script>
