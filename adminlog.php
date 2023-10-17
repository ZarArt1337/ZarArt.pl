<?php include "includes/db.php"?>
<?php include "includes/header.php"; ?>
<?php include "includes/navigation_2.php"; ?>

 
 <!--LOGIN PANEL-->
 <div class="bg-light p-3 rounded login-panel py-5">
        <h4 class="py-2 text-center">Login panel</h4>
        <form action="includes/login.php" method="post">
            <div class="form-group px-4 py-2">
                <input name="username" type="text" class="form-control py-3" placeholder="Enter username">  
            </div>
            <div class="form-group px-4 py-4 text-center">
                <input name="password" type="password" class="form-control py-3" placeholder="Enter password"> 
                <button class="btn btn-primary px-4 py-2 my-4" name="login" type="submit">Log in</button>
            </div>
        </form> 
    </div>

    <?php include "includes/footer.php"; ?>  