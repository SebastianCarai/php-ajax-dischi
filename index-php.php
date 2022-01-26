<?php require __DIR__ . '/database.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">  
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="d-flex align-items-center">
        <img src="https://storage.googleapis.com/pr-newsroom-wp/1/2018/11/Spotify_Logo_CMYK_Green.png" alt="Spotify Logo" class="spotify_logo">
    </header>

    <main>
        <div class="my_container">
            <div class="d-flex flex-wrap">
                <?php foreach($database as $single_album){
                    $album_cover= $single_album['poster']; ?>
                    <div class="single_disk">
                        <img src=<?php echo $album_cover; ?> alt="">
                        <h3 class="album_title my-3"><?php echo $single_album['title']; ?></h3>
                        <div class="album_author"><?php echo $single_album['author']; ?></div>
                        <div class="album_date mb-4"><?php echo $single_album['year']; ?></div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </main>

    
</body>
</html>