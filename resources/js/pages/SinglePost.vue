<template>
    <div class="container">
        <h1>{{post.title}}</h1>
        <p> Categoria: {{categoryName}}</p>
        <div>
            <span v-for="tag in post.tags" :key="tag.id"  >
                {{tag.name}}
            </span>
        </div>
        <p>
            {{post.content}}
        </p>
    </div>

</template>

<script>
import Axios from 'axios';

export default {
    name: "SinglePost",
    data() {
        return {
            post: null,
        }
    },
    created() {
        this.getPostDetails();
    },
    computed: {
        categoryName() {
            return this.post.category ? this.post.category.name : 'Nessuna';
        }
    },
    methods: {

        getPostDetails(){
             const slug = this.$route.params.slug;
            Axios.get(`/api/posts/${slug}`).then((resp) => {
                this.post = resp.data.results;
            });
        },
    },
};


</script>



<style>



</style>