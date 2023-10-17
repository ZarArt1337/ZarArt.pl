<?php include "includes/db.php"?>
<?php include "includes/header.php"?>
<?php include "includes/navigation.php"; ?>
    <!--HERO GRAPHIC-->
    <section class="home home-img">
        <div class="container h-100 d-flex flex-column justify-content-center align-items-center text-light text-center">
            <p class="display-1 font-2nd shadow-text py-4">Witam na stronie ZarArt.pl</p>
            <p class="display-1 font-2nd shadow-text py-4 orange">Malarstwo - Rękodzieło</p>
            
            <div class="hero-shadow"></div>
        </div>
    </section>

    <!-- SOCIAL MEDIA ICONS-->
    <aside>
        <ul class="fs-links">
            <li class="fs-links-facebook">
                <a href="https://www.facebook.com/profile.php?id=100070167114186">Facebook</a>
                <i class="fab fa-facebook"></i>
            </li>
            <li class="fs-links-instagram">
                <a href="https://www.instagram.com/zarart.pl/">Instagram</a>
                <i class="fab fa-instagram"></i>
            </li>

        </ul>
    </aside>
    <!--OFFERT-->
    <section id="offert" class="offert pt-2 pb-5 my-5 t-color">
        <p class="display-3 text-center p-5 font-2nd">Czym się zajmuję:</p>
    
        <div class="row row-cols-1 row-cols-lg-3 g-5 px-5 mx-lg-5">

            <div class="col py-4">
              <div class="card project-box h-100 border-0">
                <img src="./img/mini4.jpg" class="card-img-top" alt="Miniature">
                <div class="card-body p-4 t-color">
                    <h4 class="card-title text-center py-4">Malowanie figurek</h4>
                    <p class="card-text text-center py-4">Maluje figurki na zlecenie do gier bitewnych, planszowych, wydruki 3D itd. Oferuję 3 poziomy malowania - każdy może wybrać coś dla siebie. </p>
                </div>
                <div class="text-center py-4">
                    <a href="figurki.php"><button class="btn-offert">Figurki</button></a>
                </div>
              </div>
            </div>

            <div class="col py-4">
                <div class="card project-box h-100 border-0">
                  <img src="./img/kart_3a.jpg" class="card-img-top" alt="Kartki">
                  <div class="card-body p-4 t-color">
                      <h4 class="card-title text-center py-4">Kartki okolicznościowe</h4>
                      <p class="card-text text-center py-4">Robię własnoręcznie kartki okolicznościowe. Przede wszystkim malowane akwarelami, ale nie tylko. Kartki z wybranymi motywami. </p>
                  </div>
                  <div class="text-center py-4">
                  <a href="kartki.php"><button class="btn-offert">Kartki</button></a>
                </div>
                </div>
            </div>

            <div class="col py-4">
                <div class="card project-box h-100 border-0">
                  <img src="./img/jew_1a.jpg" class="card-img-top" alt="Jewellery">
                  <div class="card-body p-4 t-color">
                      <h4 class="card-title text-center py-4">Bizuteria z miedzi</h4>
                      <p class="card-text text-center py-4">Biżuteria miedziana własnej roboty. Z kamieniami półszlachetnymi lub bez. </p>
                  </div>
                  <div class="text-center py-4">
                  <a href="bizuteria.php"><button class="btn-offert">Biżuteria</button></a>
                </div>
                </div>
            </div>


        </div>
    </section>

    <!--BLOG-->
    <section id="blog" class="blog pt-2 pb-5 text-light bg-t">
        <p class="display-3 text-center p-5 font-2nd">Blog</p>
        <div class="row rows g-5 px-5 mx-lg-5">

        <!--POSTS-->
        <?php

            $query = "SELECT * FROM posts ORDER BY post_id DESC LIMIT 8";
            $select_all_posts_query = mysqli_query($connection,$query);

                while($row = mysqli_fetch_assoc($select_all_posts_query)) {
                    $post_id = $row['post_id'];
                    $post_title = $row['post_title'];
                    $post_author = $row['post_author'];
                    $post_date = $row['post_date'];
                    $post_image = $row['post_image'];
                    $post_content = $row['post_content'];
                    $post_status = $row['post_status'];

                    if($post_status == 'published') {

                        ?>

                        <!-- SHOW POSTS -->
                        <?php include "news.php" ?>

        <?php } }?>


        </div>
    </section>

    <!--GALLERY-->
    <section id="gallery" class="gallery hide-it">
        <div class="container-wrap">
            <div class="row">
                <div class="col-6 col-md-2 p-0 m-0 gal-img hide-it-left">
                    <img src="./img/jew_5.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-6 col-md-2 p-0 m-0 gal-img hide-it-left">
                    <img src="./img/mini_rew.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-6 col-md-2 p-0 m-0 gal-img hide-it-left">
                    <img src="./img/kart_2.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-6 col-md-2 p-0 m-0 gal-img hide-it-right">
                    <img src="./img/jew_6.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-6 col-md-2 p-0 m-0 gal-img hide-it-right">
                    <img src="./img/kart_1.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-6 col-md-2 p-0 m-0 gal-img hide-it-right">
                    <img src="./img_mini/mini (71).jpg" alt="" class="img-fluid">
                </div>

                <div class="col-6 col-md-2 p-0 m-0 gal-img hide-it-left">
                    <img src="./img_mini/mini (97).jpg" alt="" class="img-fluid">
                </div>
                <div class="col-6 col-md-2 p-0 m-0 gal-img hide-it-left">
                    <img src="./img_mini/mini (24).jpg" alt="" class="img-fluid">
                </div>
                <div class="col-6 col-md-2 p-0 m-0 gal-img hide-it-left">
                    <img src="./img_mini/mini (104).jpg" alt="" class="img-fluid">
                </div>
                <div class="col-6 col-md-2 p-0 m-0 gal-img hide-it-right">
                    <img src="./img_mini/mini (107).jpg" alt="" class="img-fluid">
                </div>
                <div class="col-6 col-md-2 p-0 m-0 gal-img hide-it-right">
                    <img src="./img_mini/mini (106).jpg" alt="" class="img-fluid">
                </div>
                <div class="col-6 col-md-2 p-0 m-0 gal-img hide-it-right">
                    <img src="./img/jew_2.jpg" alt="" class="img-fluid">
                </div>
            </row>
        </div>

    </section>

    <!--FORM AND CONTACTS-->
    <?php include "contact.php" ?>
    
<?php include "includes/footer.php"; ?>