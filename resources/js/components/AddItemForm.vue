<template>
    <div class="addItem">
        <input type="text" class="input" placeholder="Add todo">
        <button class="addButton"></button>
    </div>
</template>
<script>
    export default {

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
        outline: linen;
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
        border-bottom-top-radius: 4px;
        border-width: 1px;
        background-color: white;
    }
</style>
