<template>
    <div>


        <h1> this is father</h1>
        <label v-text="cont"></label>
        <button v-on:click="onClick">

        </button>
        <slot name="behavior" :on="on" :actions="actions"></slot>
    </div>
</template>

<script>
    export default {
        name: "padre",
        data: function () {
            return {
                cont: 0,
            }
        },
        methods: {
            onClick() {
                this.cont = this.cont + 1;
                this.$emit('click');
            },
            methodoUno(){
                this.cont=this.cont*100;
            }
        },
        computed: {
            actions() {
                const {methodoUno} = this;
                return {methodoUno};
            },
            on() {
                return this.$on.bind(this);
            }
        }
    }
</script>

<style scoped>

</style>