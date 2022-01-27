Vue.config.devtools = true;

const app= new Vue({
    el: "#root",
    data:{
        disksArray: [],
        selectedGenre: ''
    },
    methods:{
        axiosCall: function(){
            axios.get('http://localhost:8888/php-ajax-dischi/server.php',{
                params:{
                    genre: this.selectedGenre
                }
            }
            )
            .then((response) =>{
                console.log(response)
                this.disksArray = response.data;
            })
        },
    },
    created: function(){
        this.axiosCall();
    }
})