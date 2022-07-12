<template>
    <div>
        <h1>
            Front Office
            <Posts/>
        </h1>
        
    </div>

</template>

<script>
import Posts from "../components/Posts.vue";

export default {
   name: 'App',
   components: {
    Posts
},
};

</script>

<style>


</style>