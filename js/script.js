Vue.config.devtools = true;

const app= new Vue({
    el: "#root",
    data:{
        disksArray: [],
        genresArray: [],
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
                this.disksArray.forEach(element => {
                    if (!this.genresArray.includes(element.genre)){
                        this.genresArray.push(element.genre);
                    }
                });
            })
        },
    },
    created: function(){
        this.axiosCall();
    }
})