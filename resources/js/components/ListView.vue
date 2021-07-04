<template>
    <div>
        <div v-if="isLoading" v-for="(item, index) in items" :key="index">

            <!-- v-on funciona para mandar a llamar metodo a otro archivo vue -->

            <list-item :item="item" class="item"></list-item>
        </div>
    </div>
</template>
<script>
    import EventBus from "../event-bus";

    export default {

        data: function() {

            return {
                items: [],
                isLoading: false,
            }

        },

        methods: {

            async getItems() {

                await axios.get('api')
                .then(( response ) => {

                    let { result, data } = response.data;

                    if(result == 1) {

                        this.isLoading  = true;
                        this.items      = data;

                    }
                })
                .catch((e) => {
                    console.log(e);
                });
            },

        },

        created() {

            this.getItems();

        }
    }
</script>

<style scoped>
    .item {
        padding: 12px;
        margin-top: 5px;
        border-style: solid;
        border-color: blue;
        border-radius: 7px;
        border-width: 1px;
    }
</style>
