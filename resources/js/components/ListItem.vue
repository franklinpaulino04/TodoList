<template>
    <div class="item">
        <input type="checkbox" @change="updateTodo()" v-model="item.completed">
        <span :class="['itemText', item.completed ? 'completed': '']">
            {{ item.todo }}
        </span>
        <button class="edit">
            <font-awesome-icon icon="edit"></font-awesome-icon>
        </button>
        <button class="delete" @click="deleteTodo()">
            <font-awesome-icon icon="trash"></font-awesome-icon>
        </button>
    </div>
</template>
<script>
    export default {

        props: ['item'],

        data: function() {
            return {

            }
        },

        methods: {

            async updateTodo() {

                await axios.post('api/update/' + this.item.id, {
                    completed: this.item.completed,
                })
                .then(( response ) => {

                    let { result, data } = response.data;

                    if(result == 1) {
                        alert('Item updated succesfully!');

                    }

                })
                .catch(( e ) => {
                    console.log(e);
                });
            },

            async deleteTodo() {

                await axios.get('api/delete/' + this.item.id)
                .then(( response ) => {

                    let { result } = response.data;

                    if(result == 1){
                        alert('Item deleted succesfully!');

                    }

                })
                .catch(( e ) => {
                    console.log(e);
                });
            }
        },

        created() {

        }
    }
</script>

<style scoped>
    .item {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .completed {
        text-decoration: line-through;
        color: #999999;
    }

    .itemText {
        width: 100%;
        margin-left: 20px;
    }

    .edit{
        color: blue;
        border-radius: 5px;
        border: none;
        outline: none;
        margin-right: 5px;
        background-color: white;
        font-size: 17px;
    }

    .delete{
        color:red;
        border-radius: 5px;
        border: none;
        outline: none;
        background-color: white;
        font-size: 17px;
    }
</style>
