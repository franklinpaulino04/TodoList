<template>
    <div class="addItem">
        <input type="text" class="input" placeholder="Add todo" v-model="item.name">
        <button class="addButton" @click="addItem">
            <font-awesome-icon icon="user-secret" />
        </button>
    </div>
</template>
<script>

    import EventBus from "../event-bus";

    export default {

        data: function() {

            return {
                item: {
                    name: ""
                }
            }
        },

        methods: {

           async addItem() {

                if(this.item.name != "") {

                   await axios.post('api/create', {
                        todo: this.item.name
                    }).then( (response) => {

                        let { result, data } = response.data;

                        if(result == 1) {
                            this.item.name  = "";

                        }

                    }).catch( (e) => {
                        console.log(e);
                    });

                }else{
                   alert('write a name.')
                }
            },

        },

        created() {

        }
    }
</script>

<style scoped>
    .addItem{
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 25px;
    }

    .input{
        border-style: solid;
        border-color: blue;
        border-bottom-left-radius: 4px;
        border-top-left-radius: 4px;
        border-width: 1px;
        outline: none;
        padding: 5px;
        height: 30px;
        width: 100%;
    }

    .addButton{
        height: 42px;
        width: 42px;
        border-style: solid;
        border-color: blue;
        border-bottom-right-radius: 4px;
        border-top-right-radius: 4px;
        border-width: 1px;
        background-color: white;
    }

    .plus{
        font-size: 20px;
        color: blue;
    }
</style>
