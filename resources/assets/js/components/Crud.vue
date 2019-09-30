<template>
    <div>
        <button type="button" class="btn btn-primary" v-on:click="onAdd()">
            <i class="icon-cog3 mr-2"></i>
            Crear un {{'crud'}}

        </button>

        <div class="table-responsive">
            <table class="table table-xs">
                <thead>
                <tr>

                    <th v-for="(value, key) in items[0]" >{{key}}</th>
                    <th>Operaciones</th>

                </tr>
                </thead>
                <tbody>
                <item-crud
                        v-for="item in itemsData"
                        :key="item.id"
                        :item="item"
                        @update="onUpdate(index, ...arguments)"
                        @delete="onDelete(index)">

                    >
                </item-crud>


                </tbody>
            </table>
        </div>

        <modal  v-show="isModalVisible"
                @close="closeModal"
                :method="method"
                :action="action"
        >
            <!-- en en slot body del modal se va poner el slot de crud-->
            <div  slot="body"  >

                <slot :item="item" >
                </slot>

            </div>


        </modal>

    </div>
</template>
<!--
POST          /users                      store   users.store
PUT|PATCH     /users/{user}               update  users.update
-->
<script>
    export default {
        name: "crud",
        props:["items","crudName"],
        data: function () {
            return {
                itemsData: [],
                isModalVisible: false,
                method:"",
                action:"",
                item:{},
            }
        },
        methods: {
            onAdd() {

                this.item=this.itemsData[0];
                console.log(this.item);
                // show Modal
                this.showModal();


            },
            onUpdate(index, thought) {

                this.itemsData[index] = thought;
            },
            onDelete(index) {
                this.itemsData.splice(index, 1);
            },
            showModal(){
                this.isModalVisible=true;
            },
            closeModal(){
                this.isModalVisible=false;
            }
        },
        mounted() {
            /*
            for ( var i = 0; i< 10 ; i++){
                this.itemsData.push(this.items[i])
            }*/
            this.itemsData=this.items;
            this.item=this.items[0];

        }

    }
</script>

<style scoped>

</style>