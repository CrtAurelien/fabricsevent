<template>
    <div class="content">
        <div class="test-container">
            <div class="demo un pure-u-1 pure-u-sm-1-2 pure-u-md-1-3 pure-u-lg-1-4">
                <figure class="imghvr-shutter-out-diag-2"><img :src="'./images/fabrics-img/tee-shirt.jpg'" alt="example-image">
                    <figcaption>
                        <h3>Hello World</h3>
                        <p>Life is too important to be taken seriously!</p>
                    </figcaption><a href="javascript:;"></a>
                </figure>
            </div>
            <div class="deux">
                <div class="deuxA">
                    <div class="deuxAUn">
                        <span>Tasses</span>
                    </div>
                    <div class="deuxADeux">
                        <span>Bloc 3</span>
                    </div>
                </div>
                <div class="deuxB">
                    <div class="deuxBUn">
                        <span>Bonnets</span>
                    </div>
                    <div class="deuxBDeux">
                        <span>bloc 5</span>
                    </div>
                </div>
            </div>
            <div class="trois">
                <span>bloc 6</span>
            </div>
        </div>

    </div>
</template>

<style scoped>

    .test-container {
        display: flex;
        flex-direction: row;
        text-align: center;
        min-height: 332px;
    }

    .un, .deux, .trois {
        flex:1
    }

    .un + .deux, .deux + .trois, .deuxA + .deuxB {
        margin-left: 15px;
    }


    .deuxAUn + .deuxADeux, .deuxBUn + .deuxBDeux {
        margin-top:15px;
    }



    .deux {
        display: flex;
        flex-direction: row;
    }

    .deuxA {
        flex:1;
        display: flex;
        flex-direction: column;
    }

    .deuxAUn, .deuxADeux {
        flex:1;
    }


    .deuxB {
        flex: 1;
        display: flex;
        flex-direction: column;
    }

    .deuxBUn, .deuxBDeux {
        flex:1;
    }

    h3 {
        text-align: center;
    }
    .content {
        background: white;
    }
</style>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
    }
</script>
