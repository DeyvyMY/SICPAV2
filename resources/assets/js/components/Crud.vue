<template>
    <div>
        <button type="button" class="btn btn-primary" v-on:click="onAdd()"><i class="icon-cog3 mr-2"></i> With icon
        </button>

        <button v-on:click="showModal()"> show modal </button>
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
        ></modal>

    </div>
</template>

<script>
    export default {
        name: "crud",
        props:["items"],
        data: function () {
            return {
                itemsData: [],
                isModalVisible: false,
            }
        },
        methods: {
            onAdd() {
                // show Modal
                this.itemsData.push({"id": 100, "descripction": "werwerwer", "otro": "3333333333"});
            },
            onUpdate(index, thought) {
                this.itemsData[index] = thought;
            },
            onDelete(index) {
                this.itemsData.splice(index, 1);
            },
            showModal(){
                this.isModalVisible=true;
            }
        },
        mounted() {
            /*
            for ( var i = 0; i< 10 ; i++){
                this.itemsData.push(this.items[i])
            }*/
            this.itemsData=this.items;

        }

    }
</script>

<style scoped>

</style>