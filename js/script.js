Vue.config.devtools = true;

const app= new Vue({
    el: "#root",
    data:{
        disksArray: []
    },
    methods:{
        axiosCall : function(){
            axios.get('http://localhost:8888/php-ajax-dischi/server.php')
            .then((response) =>{
                this.disksArray = response.data;
            })
        }
    },
    created: function(){
        this.axiosCall();
    }
})