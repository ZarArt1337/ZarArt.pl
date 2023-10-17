<?php include "includes/db.php"?>
<?php include "includes/header.php"?>

<body>

    <!-- Navigation -->

    <?php include "includes/navigation_2.php"?>
    <!-- Page Content -->

            <!-- Blog Entries Column -->
            <div class="container p-5">

            
                <?php

                if(isset($_GET['p_id'])) {

                    $the_post_id = $_GET['p_id'];

                    $view_query = "UPDATE posts SET post_views_count = post_views_count +1 WHERE post_id = $the_post_id ";
                    $send_query = mysqli_query($connection, $view_query);
                
                    $query = "SELECT * FROM posts WHERE post_id = $the_post_id";
                    $select_all_posts_query = mysqli_query($connection,$query);

                        while($row = mysqli_fetch_assoc($select_all_posts_query)) {
                            $post_title = $row['post_title'];
                            $post_author = $row['post_author'];
                            $post_date = $row['post_date'];
                            $post_image = $row['post_image'];
                            $post_content = $row['post_content'];

                            ?>

                            <!-- Posts -->
                            <div class="container p-4 justify-content-center">
                                <div style="min-height:600px;">
                                    <h3 class="text-center fw-bold py-4 bg-t text-light my-4"><?php echo $post_title ?></h3>
                                    <img class="pe-3 pb-3 image-post" src="images/<?php echo $post_image; ?>" alt="Zdjecie - Post">

                                    <p><?php echo $post_content ?></p>

                                </div>
                                <div class="p-4 pb-5 mt-5 text-light bg-t date-text text-center">
                                        <span class="text-light" style="float:left;">Autor: <?php echo $post_author ;?></span>
                                        <span style="float:right;"><i class="fa-solid fa-calendar-days px-2"></i><?php echo $post_date ?></span>  
                                        
                                </div>
                               
                            </div>
                            

                <?php } ?>

                <!-- Blog Comments -->

                <?php

                if(isset($_POST['create_comment'])) {

                    $the_post_id = $_GET['p_id'];
                    $comment_author = $_POST['comment_author'];
                    $comment_email = $_POST['comment_email'];
                    $comment_content = $_POST['comment_content'];

                    if(!empty($comment_author) && !empty($comment_email) && !empty($comment_content)) {

                    $query = "INSERT INTO comments (comment_post_id, comment_author, comment_email, comment_content, comment_status, comment_date)";
                    $query .= "VALUES ($the_post_id, '{$comment_author}', '{$comment_email}', '{$comment_content}', 'approved', now())";
                    $create_comment_query = mysqli_query($connection, $query);

                    if(!$create_comment_query) {
                        die('Query failed' . mysqli_error($connection));
                    }

                    $query = "UPDATE posts SET post_comment_count = post_comment_count + 1 WHERE post_id = $the_post_id ";
                    $update_comment_count = mysqli_query($connection, $query);
                    
                    } else {

                        echo "<script>alert('One or more fields where empty. Fill all the fields again to put a comment.')</script>";

                    }
                }

                ?>
                <!-- Comments Form -->
                <div class="bg-light m-4 p-4">
                    <h4 class="py-2 px-4">Zostaw komentarz:</h4>
                    <form action="" method="post" role="form">
                        <div class="form-group py-2 px-4">
                            <label for="comment_author">Autor</label>
                            <input type="text" class="form-control" name="comment_author">
                        </div>
                        <div class="form-group py-2 px-4">
                        <label for="comment_email">Email</label>
                            <input type="email" class="form-control" name="comment_email">
                        </div>
                        <div class="form-group py-2 px-4">
                        <label for="comment_content">Treść</label>
                            <textarea class="form-control" rows="5" name="comment_content" style="height:100%"></textarea>
                        </div>
                        <div class="py-2 px-4">
                            <button type="submit" name="create_comment" class="btn btn-primary">Submit</button>
                        </div>
                        
                    </form>
                </div>


                <!-- Posted Comments -->
                <?php

                $query = "SELECT * FROM comments WHERE comment_post_id = {$the_post_id} ";
                $query .= "AND comment_status = 'unapproved' ";
                $query .= "ORDER BY comment_id DESC ";
                $select_comment_query = mysqli_query($connection, $query);

                if(!$select_comment_query) {

                    die("Query failed" . mysqli_error($connection));
                }

                while ($row = mysqli_fetch_array($select_comment_query)) {
                    $comment_date = $row['comment_date'];
                    $comment_content = $row['comment_content'];
                    $comment_author = $row['comment_author'];
                ?>

                <!-- Comment -->
                <div class="bg-light p-4 px-4 m-4">
                    <a class="py-2 px-4" href="#">
                    </a>
                    <div class="py-2 px-4">
                        <h4 class="media-heading"><?php echo $comment_author ;?>
                        <h5 class="text-secondary"><?php echo $comment_date ;?></h5>
                        </h4>
                        <?php echo $comment_content ;?>
                    </div>
                </div>

                <?php } 
            
                } else {

                }
                
                ?>
                
            </div>

<?php include "includes/footer.php"?>
