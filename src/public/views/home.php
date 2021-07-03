<?php
$url = "http://localhost/processo-seletivo-php/get-images";
$images = json_decode(file_get_contents($url));
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/styles/home.css">
    <link rel="stylesheet" href="./src/styles/main.css">
    <link rel="stylesheet" href="./src/styles/media.css">
    <title>RGB Gallery</title>
</head>

<body>
    <div class="container">
        <header>
            <div class="container-logo">
                <img src="./assets/logo.png" />
            </div>

            <div class="phone">
                <div class="icon">
                    <img src="./assets/phone-icon.png" />
                </div>

                <p>(16) 98874-5897</p>
            </div>
        </header>

        <main class="main-container">
            <div class="cards-container">
                <?php
                foreach ($images as $image) : ?>
                    <div class="card">
                        <div class="card-image">
                            <img src="./assets/<?php echo $image->path ?>" />
                        </div>

                        <div class="info">
                            <h4><?php echo $image->title; ?></h4>

                            <div class="buttons">
                                <button>
                                    <img src="./assets/twitter.png" />
                                    Tweet
                                </button>

                                <button>
                                    <img src="./assets/thumbs-up.png" />
                                    Like
                                </button>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </main>

        <footer>
            <div class="footer-main">
                <div class="image-container">
                    <img src="assets/palms.jpg">
                </div>

                <div class="content">
                    <h1>Pessoa ou Empresa</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In blandit pharetra nisl, sed consequat orci porta sit amet. Cras lobortis, lacus eget posuere porta, sem mauris aliquam turpis, ac sollicitudin augue turpis sed orci. Nunc a accumsan nisi. Curabitur laoreet eros faucibus feugiat commodo. Proin non magna non nisi pellentesque vehicula. Morbi in faucibus turpis. Fusce mattis odio eget imperdiet tempus. Pellentesque mi dui, malesuada id nisi eget, maximus interdum.
                    </p>
                </div>
            </div>

            <div class="social-media">
                <div class="social-container social-fb-container">
                    <div class="icon-container">
                        <img class="social-icon" src="assets/facebook-icon.png" />
                    </div>
                    <a href="">www.fb.com/loremipsum</a>
                </div>
                <div class="social-container social-twitter-container">
                    <div class="icon-container">
                        <img class="social-icon" src="assets/twitter-icon.png" />
                    </div>
                    <a href="">www.twitter.com/loremipsum</a>
                </div>
                <div class="social-container social-twitter-container">
                    <div class="icon-container">
                        <img class="social-icon" src="assets/flickr-icon.png" />
                    </div>
                    <a href="">www.flickr.com/loremipsum</a>
                </div>
            </div>

            <div class="copyright">
                <p>Todos os direitos reservados - © 2021</p>

                <img src="assets/logo.png" />
            </div>
        </footer>
    </div>
</body>

</html>