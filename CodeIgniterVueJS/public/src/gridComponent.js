import demoGrid from './components/gridTable.vue';

window.axios = require('axios');
var demo     = new Vue({
    el        : '#demo',
    mounted() {
        axios.get('index.php/Welcome/get_data')
            .then(resp=> {
                this.gridData = resp.data.product;
            })
            .catch(function () {
                console.log("Could not load your product");
            });
    },
    data      : {
        searchQuery: '',
        gridColumns: ['name', 'power'],
        gridData   : []
    },
    components: {
        'demo-grid': demoGrid
    }
})
