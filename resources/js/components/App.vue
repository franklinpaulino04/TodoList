<template>
    <div>
        <h1 class="title">Todo List</h1>
        <div class="todoListContainer">
            <add-item-form></add-item-form>
            <list-view></list-view>
        </div>
    </div>
</template>

<script>
    export default {

    }
</script>
<style scoped>

    .todoListContainer{
        width: 400px;
        margin: auto;
        margin-top: 50px;
    }

    .title{
        margin-top: 200px;
        text-align: center;
    }
</style>
