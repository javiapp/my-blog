<?php
    require_once(__DIR__ . "/../model/config.php");
    ?>

<h1>Register</h1>

<form method="post" action="<?php echo $path . "/controller/create-user.php"; ?>">
    <div>
        <lable>Email</label>
        <input type="text" name="email" />
        
    <div>
        <label for="username">User Name: <label>
        <input type ="text" name ="username" />
    </div>
    <div>
        <label for="password"> Password: </label>
        <input type="password" name="password" />
    </div>
        
        <div>
            <button type="submit">Submit</button>
        </div>
</form>