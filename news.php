<?php ;?>

<div class="col-xl-4 col-md-6 col-12 py-3">
    <div class="border-0 text-center">

        <a href="post.php?p_id=<?php echo $post_id; ?>" class="text-center">
            <img class="img-post rounded" src="images/<?php echo $post_image; ?>" alt="Zdjecie - Post">
        </a>

        <div class="py-2 text-light bg-t m-auto">
            <h3 class="card-title text-center fw-bold py-2"><a class="text-light" href="post.php?p_id=<?php echo $post_id; ?>"><?php echo $post_title ?></a></h3>
            <p class="date-text text-center">
                <span class="text-light"><?php echo $post_author ;?></span>
                <span><i class="fa-solid fa-calendar-days px-2"></i><?php echo $post_date ?></span>        
            </p>
        </div>
    </div>
</div>

<?php ;?>
                    