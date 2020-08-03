<?php
			include_once "header.php";
			include_once "login_process.php";
?>

<div class="form-wrapper">
    <div>
        <h2 class="mt-5 mb-5">Login</h2>
    </div>
    <form action="" id="form" method="POST" class="needs-validation">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control"
                value="<?php if(isset($email)){ echo $email; }?>" />
            <small class="text-danger">
                <?php if(isset($error_email)){ echo $error_email; }?>
            </small>
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" id="password"
                value="<?php if(isset($password)){ echo $password; }?>" />
            <small class="text-danger"><?php if(isset($error_password)){ echo $error_password; }?></small>
        </div>

        <button type="submit" name="login" class="btn btn-block btn mb-3">Login</button>
        <small>Dont have an account? <a href="register.php">Sign up here</a></small>
    </form>
</div>

<?php
		include_once "footer.php";
	
?>