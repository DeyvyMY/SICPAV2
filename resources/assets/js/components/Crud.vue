<template>
    <div>
        <button type="button" class="btn btn-primary" v-on:click="onAdd()">
            <i class="icon-cog3 mr-2"></i>

            <label v-text="crudName"></label>
        </button>

        <h1>{{cont}}</h1>
        <div class="table-responsive">
            <table class="table table-xs">
                <thead>
                <tr>

                    <th v-for="(value, key) in items[0]" >{{key}}</th>
                    <th>Operaciones</th>

                </tr>
                </thead>
                <tbody>

                <tr v-for="item in itemsData"
                    :key="item.id" >
                    <td v-for="(value, key) in item">{{value}}</td>
                    <td>
                        <div class="list-icons">
                            <a href="#" class="list-icons-item text-primary-600" v-on:click="onClickUpdate()"><i class="icon-pencil7"></i></a>
                            <a href="#" class="list-icons-item text-danger-600"  v-on:click="onClickDelete()"><i class="icon-trash"></i></a>
                            <a href="#" class="list-icons-item text-teal-600" v-on:click="addCount()"><i class="icon-cog6"></i></a>
                        </div>
                    </td>

                </tr>

                <!--<item-crud
                        v-for="item in itemsData"
                        :key="item.id"
                        :item="item"
                        @update="onUpdate(index, ...arguments)"
                        @delete="onDelete(index)">

                    >
                </item-crud>-->

                </tbody>
            </table>
        </div>

        <modal  v-show="isModalVisible"
                @close="closeModal"
                :method="method"
                :action="action"
        >
            <!-- en en slot body del modal se va poner el slot de crud-->
            <div slot="body"  >
              <slot :item="item"> </slot>
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
                cont:0,
            }
        },
        methods: {
            onAdd() {

                this.item=this.itemsData[0];
                // show Modal
                this.showModal();


            },
            onClickUpdate(index, thought) {

                this.itemsData[index] = thought;
            },
            onClickDelete(index) {
                this.itemsData.splice(index, 1);
            },
            showModal(){
                this.isModalVisible=true;
            },
            closeModal(){
                this.isModalVisible=false;
            },
            addCount(){
                this.cont=this.cont+1;
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