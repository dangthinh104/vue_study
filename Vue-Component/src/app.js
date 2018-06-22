//regist compnonet file
import bookList from './components/bookList.vue';

//regist component global
Vue.component('global-component', {
    template: '<h1>Global Component from app.js file</h1>'
});

var app = new Vue({
    el        : '#app',
    components: {
        'local-component': {
            template: '<h1>Local Component from app.js file</h1>'
        },
        'book-list'      : bookList
    }
});
