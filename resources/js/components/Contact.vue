<template>
    <a><div class="info-box-contact hover-expand-effect">
        <div class="icon">
            <i class="material-icons contact-icon">mail</i>
        </div>
        <div class="title">
            <h3>PRISE DE CONTACT</h3>
        </div>
    </div></a>
</template>


<style scoped>

    .info-box-contact {
        display:none;
    }

    h3 {
        text-align: left;
        margin: 0;
        font-family: "Roboto", sans-serif;
        font-weight: normal;
        padding-top: 16px;
        font-size: 18px;
    }

    .info-box-contact {
        color: white;
        display: flex;
        background: #4BA593;
        border-left: 3px solid #285A53;
        flex-direction: row;
        height: 50px;
        transition: background 0.7s;
    }

    .info-box-contact.hover-expand-effect:after {
        background-color: #285A53;
        content: ".";
        position: absolute;
        left: 18px;
        bottom: 0;
        width: 0;
        height: 50px;
        color: transparent;
        transition: all 1.95s;
    }

    .info-box-contact.hover-expand-effect:hover:after {
        width: 90%;
    }

    .icon {
        flex:1;
        text-align: center;
        padding-left:10px;
        z-index: 9;
     }



    .title {
        flex: 3;
        z-index: 9;
    }

    .contact-icon {
        color: white;
        font-size: 25px;
        border: 2px solid white;
        border-radius: 50%;
        width: 40px;
        padding: 5px;
    }

</style>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
