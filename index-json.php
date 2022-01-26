<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">  
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.25.0/axios.min.js" integrity="sha512-/Q6t3CASm04EliI1QyIDAA/nDo9R8FQ/BULoUFyN4n/BDdyIxeH7u++Z+eobdmr11gG5D/6nPFyDlnisDwhpYA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <div id="root">
        <header class="d-flex align-items-center">
            <img src="https://storage.googleapis.com/pr-newsroom-wp/1/2018/11/Spotify_Logo_CMYK_Green.png" alt="Spotify Logo" class="spotify_logo">
        </header>

        <main>
            <div class="my_container">
                <!-- Select Genre -->
                <div class="select_genres">
                    <span>Seleziona genere: </span>
                    <select v-model="selectedGenre" @change="axiosCall">
                        <option value="">All</option>
                        <option v-for="(singleGenre, index) in genresArray" :key="index" :value="singleGenre">{{singleGenre}}</option>
                    </select>
                </div>
                <!-- End Select Genre -->

                <!-- Albums -->
                <div class="d-flex flex-wrap">
                    <div class="single_disk" v-for="(disk,index) in disksArray" :key="index">
                        <img :src="disk.poster" alt="">
                        <h3 class="album_title my-3">{{disk.title}}</h3>
                        <div class="album_author">{{disk.author}} </div>
                        <div class="album_date mb-4">{{disk.year}} </div>
                    </div>
                </div>
                <!-- End Albums -->
            </div>
        </main>
    </div>

    <script src="js/script.js"></script>
 
</body>
</html>