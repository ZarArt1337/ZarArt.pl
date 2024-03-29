<?php

    if (isset($_POST['create_post'])) {

        $post_title = $_POST['post_title'];
        $post_author = $_SESSION['username'];
        $post_category_id = $_POST['post_category'];
        $post_status = $_POST['post_status'];

        $post_image = $_FILES['image']['name'];
        $post_image_temp = $_FILES['image']['tmp_name'];

        $post_tags = $_POST['post_tags'];
        $post_content = $_POST['post_content'];
        $post_date = date('d-m-y');

        move_uploaded_file($post_image_temp, "../images/$post_image");

        $query = "INSERT INTO posts(post_category_id, post_title, post_author, post_date, post_image, post_content, post_tags, post_status)";

        $query .= "VALUES({$post_category_id},'{$post_title}','{$post_author}',now(),'{$post_image}','{$post_content}','{$post_tags}','{$post_status}')";

        $create_post_query = mysqli_query($connection, $query);

        confirm($create_post_query);

        echo "<p class='text-center bg-success'>Post Added. <a href='posts.php'>View All Posts</a></p>";

    }

    ?>

<form action="" method="post" enctype="multipart/form-data">

    <div class="form-group">
        <label for="post_title">Post title</label>
        <input type="text" class="form-control" name="post_title">
    </div>

    <div class="form-group">
        <select name="post_category" id="">
           
        <?php

          $query = "SELECT * FROM categories ";
          $select_categories = mysqli_query($connection,$query);
        
          confirm($select_categories);

          while($row = mysqli_fetch_assoc($select_categories )) {
            $cat_id = $row['cat_id'];
            $cat_title = $row['cat_title'];

          if($cat_id == $post_category_id) {

            echo "<option selected value='{$cat_id}'>{$cat_title}</option>";

            } else {

              echo "<option value='{$cat_id}'>{$cat_title}</option>";

            }
          }
        ?>
                 
        </select>
      </div>

    <div class="form-group">
      <select name="post_status" id="">
        <option value='draft'>Select post status</option>
        <option value='draft'>draft</option>
        <option value='published'>published</option>
      </select>
    </div>

    <div class="form-group">
        <label for="post_image">Post Image</label>
        <input type="file" name="image">
    </div>

    <div class="form-group">
        <label for="post_tags">Post tags</label>
        <input type="text" class="form-control" name="post_tags">
    </div>

    <div class="form-group">
        <label for="editor">Post Content</label>
        <textarea type="text" class="form-control" name="post_content" id="editor" cols="30" rows="10"></textarea>
    </div>

    <div class="form-group">
    <input class="btn btn-primary" type="submit" name="create_post" value="Publish Post">
    </div>


</form>