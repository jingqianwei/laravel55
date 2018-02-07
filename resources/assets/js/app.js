
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

//Vue.component('example-component', require('./components/ExampleComponent.vue'));// 注释掉
import exampleComponent from './components/ExampleComponent.vue';// 引入ExampleComponent 组件
/**
 * 下面两种方法都可以实现vue.js的渲染
 * @type {Vue|*}
 */
const app = new Vue({
    el: '#app',
    render: h => h(exampleComponent)
    // template: '<exampleComponent />',
    // components: {exampleComponent}
});

/**
 * 说明：app.js 是构建 Vue 项目的主文件，最后所有的组件都会被引入到这个文件，在引入所有组件之前，
 * bootstrap.js 文件做了一些初始化的操作。同时，因为有了 window.Vue = require(‘vue’) 这句话，
 * 就不再需要使用 import Vue from ‘vue’ 重复导入 Vue 了。
 */
