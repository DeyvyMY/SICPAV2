<template>
    <div>
        <h2>this hijo</h2>
        <label v-text="message"></label>
    </div>

</template>

<script>
    export default {
        name: "hijo",
        props: ['on','actions'],
        data: function(){
            return {
                message:"",
            }
        },
        created() {
            console.log("created hijo");
            this.on("click", ()=> {
                let min=0;
                let max=10;
                let random = Math.random() * (+max - +min) + +min;
                this.message=random+"FFF"
                this.actions.methodoUno();
            });
        }
    }
</script>

<style scoped>

</style>