<template>
    <div class="card">
        <tr>
            <td v-for="(value, key) in item">{{value}}</td>
            <td>
                <div class="list-icons">
                    <a href="#" class="list-icons-item text-primary-600" v-on:click="onClickUpdate()"><i class="icon-pencil7"></i></a>
                    <a href="#" class="list-icons-item text-danger-600"  v-on:click="onClickDelete()"><i class="icon-trash"></i></a>
                    <a href="#" class="list-icons-item text-teal-600"><i class="icon-cog6"></i></a>
                </div>
            </td>

        </tr>
    </div>
    
</template>

<script>

    export default {
        props:["item"],
        name: "itemCrud",
        methods: {
            onClickDelete() {
                this.$emit('delete');
            },

            onClickUpdate() {
                this.$emit('update', this.item);
            }
        }
    }

</script>

