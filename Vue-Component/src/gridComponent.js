import demoGrid from './components/gridTable.vue';

var demo = new Vue({
    el        : '#demo',
    data      : {
        searchQuery: '',
        gridColumns: ['name', 'power'],
        gridData   : [
            {name: 'Chuck Norris', power: Infinity},
            {name: 'Bruce Lee', power: 9000},
            {name: 'Jackie Chan', power: 7000},
            {name: 'Jet Li', power: 8000}
        ]
    },
    components: {
        'demo-grid': demoGrid
    }
})