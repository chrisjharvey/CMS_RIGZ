<?php
			include_once "header.php";
			include_once "registration_process.php";
?>

<div class="form-wrapper mt-3 mb-5">
    <div>
        <h2 class="mt-5 mb-5">Create Account</h2>
    </div>
    <form action="register.php" id="form" method="POST">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" class="form-control"
                value="<?php if(isset($username)){ echo $username; }?>" />
            <small class="text-danger">
                <?php if(isset($error_username)){ echo $error_username; }?>
            </small>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" class="form-control"
                value="<?php if(isset($email)){ echo $email; }?>" />
            <small class="text-danger">
                <?php if(isset($error_email)){ echo $error_email; }?>
            </small>
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" id="password"
                value="<?php if(isset($password)){ echo $password; }?>" />
            <small class="text-danger">
                <?php if(isset($error_password)){ echo $error_password; }?>
            </small>
        </div>

        <div class="form-group">
            <label for="password2">Confirm Password</label>
            <input type="password" name="password2" class="form-control" id="password2"
                value="<?php if(isset($password2)){ echo $password2; }?>" />
            <small class="text-danger">
                <?php if(isset($error_password2)){ echo $error_password2; }?>
            </small>
        </div>

        <button type="register" name="register" class="btn btn-block btn mb-3">Create Account</button>
        <small>Already have an account? <a href="login.php">Login here</a></small>
    </form>
</div>

<?php
		include_once "footer.php";
	
?>