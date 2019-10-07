<template>
    <div>
        <button type="button" class="btn btn-primary" v-on:click="onAddItem()">
            <i class="icon-cog3 mr-2"></i>

            <label> Agregar</label>
        </button>


        <div class="table-responsive">
            <table class="table table-xs">
                <thead>
                <tr>

                    <th v-for="(value, key) in items[0]">{{key}}</th>
                    <th>Operaciones</th>

                </tr>
                </thead>
                <tbody>

                <tr v-for="(item, index) in itemsData"
                    :key="item.id">
                    <td v-for="(value, key) in item">{{value}}</td>
                    <td>
                        <div class="list-icons">
                            <a href="#" class="list-icons-item text-primary-600" v-on:click="onClickUpdate(index)"><i
                                    class="icon-pencil7"></i></a>
                            <a href="#" class="list-icons-item text-danger-600" v-on:click="onClickDelete(index)"><i
                                    class="icon-trash"></i></a>
                            <a href="#" class="list-icons-item text-teal-600" v-on:click="addCount()"><i
                                    class="icon-cog6"></i></a>
                        </div>
                    </td>

                </tr>
                </tbody>
            </table>
        </div>

        <modal v-show="isModalVisible"
               @close="closeModal"
        >

            <template slot="body">

                <!-- form -->
                <slot name="form" :on="on" :actions="actions"></slot>

            </template>
            <template slot="footer">
                <div v-if="errors.length">
                    <div class="alert bg-danger text-white alert-styled-left alert-dismissible">
                        <ul>
                            <li v-for="err in errors"><span class="font-weight-semibold">{{err}}</span></li>
                        </ul>
                    </div>
                </div>

                <div v-if="loading">
                    <span class="font-weight-semibold">Cargando...</span>
                </div>

                <div v-if="success">

                    <div class="alert bg-success text-white alert-styled-left alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert"><span>×</span></button>
                        <span class="font-weight-semibold">Completado</span>
                    </div>

                </div>

            </template>
        </modal>



    </div>
</template>
<!--
POST          /users                      store   users.store
PUT|PATCH     /users/{user}               update  users.update
-->
<script>
    const qs = require('querystring');
    const config = {
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        }
    };

    export default {
        name: "crud",
        props: ["items", "crudName"],
        data: function () {
            return {
                itemsData: [],
                isModalVisible: false,
                item: {},
                itemIndex: -1,
                errors: [],
                loading: false,
                success: false,
            }
        },
        methods: {
            onAddItem() {
                this.item = null;
                this.itemIndex = -1;
                this.$emit('addItem');
                // show Modal
                this.showModal();

            },

            onClickUpdate(index) {
                this.item = this.itemsData[index];
                this.itemIndex = index;
                this.$emit('updateItem', this.item);
                this.showModal();

            },
            onClickDelete(index) {
                this.item = this.itemsData[index];
                this.itemIndex = index;
                this.$emit('deleteItem', this.item);
                this.showModal();
                //this.itemsData.splice(index, 1);
                //this.item = this.itemsData[0];
            },
            showModal() {
                this.isModalVisible = true;
                this.success = false;
                this.errors.length = 0;
                this.loading = false;
            },
            closeModal() {
                this.isModalVisible = false;
            },

            // CRUD
            async crudOperation(itemId, itemStringify, typeOperation) {
                try {
                    this.loading = true;

                    switch (typeOperation) {
                        case "ADD":
                            this.success = await this.save(itemStringify);
                            break;
                        case "UPDATE":
                            this.success = await this.update(itemId, itemStringify);
                            break;
                        case "DELETE":
                            this.success = await this.delete(itemId, itemStringify);
                            break;

                    }

                } catch (err) {
                    this.showErrors(err);
                    this.success = false;

                } finally {
                    this.loading = false;
                    this.$emit('completeOperation', this.success);
                }
            },

            async save(item) {
                console.log("Save");
                console.log(item);

                let res = await axios.post("api/" + this.crudName, item, config);
                console.log(res);
                let resItem = this.getDataOfResponse(res);
                this.addToList(resItem, -1);
                return true;

            },
            async update(idItem, item) {
                //PUT|PATCH     /users/{user}               update  users.update
                console.log("update");
                console.log(item);
                let res = await axios.put("api/" + this.crudName + "/" + idItem, item, config);
                let resItem = this.getDataOfResponse(res);
                this.addToList(resItem, this.itemIndex);
                return true;
            },
            async delete(idItem, item) {
                //DELETE        /users/{user}               destroy users.destroy
                console.log("delete");
                console.log(item);
                let res = await axios.delete("api/" + this.crudName + "/" + idItem, item, config);
                let resItem = this.getDataOfResponse(res);
                this.addToList(resItem, this.itemIndex);
                return true;
            },

            // SHOW
            showErrors(err) {
                if (err.response) {
                    let status = err.response.statusText;
                    let message = err.response.data.errors;
                    if (message)
                        this.errors.push(message);
                    if (status)
                        this.errors.push(status);
                } else {
                    this.errors.push("Response not found");
                }

            },
            getDataOfResponse(response) {
                if (response && response.data) {
                    let itemResponse = response.data;
                    return Object.values(itemResponse)[0];

                } else {
                    throw "Response Not Contains Item";
                }
            },
            addToList(item, index) {
                if (!item) {
                    // remove
                    this.itemsData.splice(index, 1);
                }
                if (item && index < 0) {
                    // insert first
                    this.itemsData.unshift(item);
                }
                if (item && index >= 0) {
                    // update
                    this.itemsData[index] = item
                }
                //this.itemsData.unshift(Object.values(itemResponse)[0]);
            }

        },
        mounted() {
            /*
            for ( var i = 0; i< 10 ; i++){
                this.itemsData.push(this.items[i])
            }*/
            if (this.items)
                this.itemsData = this.items;


        },
        watch: {},
        computed: {
            actions() {
                const {save, update, crudOperation} = this;
                return {save, update, crudOperation};
            },
            on() {
                return this.$on.bind(this);
            }
        }

    }
</script>

<style scoped>

</style>