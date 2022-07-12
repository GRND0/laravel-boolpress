<template>
    <div class="container">
        <h2>Lista</h2>
        <div class="row row-cols-3">
            <div v-for="post in posts" :key="post.id" class="col">
                <div class="card mb-3">
                    <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                    <div class="card-body">
                        <h5 class="card-title">{{ post.title }}</h5>
                        <p class="card-text">{{ troncateText(post.content, 50) }}</p>
                    </div>
                    <!-- <ul class="list-group list-group-flush">
                        <li class="list-group-item">Cras justo odio</li>
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div> -->
                </div>
            </div>
        </div>
    </div>


</template>

<script>
import Axios from 'axios';

export default {
    name: 'Posts',
    data() {
        return {
            posts: []
        }
    },

    created() {
        this.getPost();
    },
    methods: {
        getPost() {
            axios.get("http://127.0.0.1:8000/api/posts").then((resp) => {
                this.posts = resp.data.results;
            });
        },

        troncateText(text, maxCharNumber) {
            if (text.lenght > maxCharNumber) {
                return text.substr(0, maxCharNumber) + '...';
            }
            return text;

        },
    },
};


</script>


<style>
</style>