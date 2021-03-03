require('./bootstrap');

import Vue from 'vue'
// import VueRouter from 'vue-router'

const files = require.context("./components", true, /\.vue$/i);
files.keys().map(key =>
    Vue.component(
        key
            .split("/")
            .pop()
            ?.split(".")[0] ?? "",
        files(key).default
    )
);

// Vue.use(VueRouter)

let app = new Vue({
    el: '#app'
})