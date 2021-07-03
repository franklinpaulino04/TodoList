<template>
    <div>
        <h1 class="title">Todo List</h1>
        <div class="todoListContainer">
            <add-item-view/>
            <list-view/>
        </div>
    </div>
</template>

<script>
    import AddItemForm from './AddItemForm'
    import ListView from './ListView'

    export default {
        comments:{
            AddItemForm,
            ListView,
        }
    }
</script>
<style scoped>

    .todoListContainer{
        width: 100%;
        margin: auto;
        margin-top: 5px;
    }

    .title{
        margin-top: 200px;
        text-align: center;
    }
</style>
