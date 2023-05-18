<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C.P.L.A</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="../js/script.js" defer></script>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/1.css">
    <link rel="stylesheet" href="../css/cabecera.css">



</head>

<body>
    <?php include 'menu.html'; ?>

    <div>
        <div class="lightbox">
            <div class="wrapper">
                <header>
                    <div class="photographer">
                        <i class="uil uil-camera"></i>
                        <span></span>
                    </div>
                    <div class="buttons">
                        <i class="uil uil-import"></i>
                        <i class="close-icon uil uil-times"></i>
                    </div>
                </header>
                <div class="preview-img">
                    <div class="img"><img src="" alt="preview-img"></div>
                </div>
            </div>
        </div>
        <section class="search">
            <img src="../images/search-img.jpg" alt="search-img">
            <div class="content">
                <h1>Image Gallery with JavaScript</h1>
                <p>Search and download any images within a second</p>
                <div class="search-box">
                    <i class="uil uil-search"></i>
                    <input type="text" placeholder="Search images">
                </div>
            </div>
        </section>

        <section class="gallery">
            <ul class="images"></ul>
            <!-- <button class="load-more">Load More</button> -->

        </section>
    </div>


</body>

</html>