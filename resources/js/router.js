import Vue from 'vue';

import VueRouter from 'vue-router';

Vue.use(VueRouter);

import Home from "./pages/Home.vue";
import About from "./pages/About.vue";
import Who from "./pages/Who.vue";
import Blog from "./pages/Blog.vue";
import NotFound from "./pages/NotFound.vue";
import SinglePost from "./pages/SinglePost.vue";
// import { component } from 'vue/types/umd';

const router = new VueRouter({
    mode: "history",
    routes: [
        {
            path: "/",
            name: "home",
            component: Home
        },
        {
            path: "/about",
            name: "about",
            component: About
        },
        {
            path: "/who",
            name: "who",
            component: Who
        },
        {
            path: "/blog",
            name: "blog",
            component: Blog
        },
        {
            path: "/*",
            component: NotFound
        },
        {
            path: "/blog/:slug",
            name: "single-post",
            component: SinglePost
        }
    ]
});

export default router;