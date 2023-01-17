<?php include('Templates/header.php') ?>
<main class="page lanidng-page"></main>
<div class="login-clean">
    <form method="post" action="sql/login.php">
        <h2 class="sr-only">Login Form</h2>
        <div class="illustration" style="color: rgb(71,119,244);"><i class="icon ion-ios-navigate"></i></div>
        <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email"></div>
        <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password"></div>
        <div class="form-group"><button class="btn btn-primary btn-block" type="submit" style="background-color: rgb(71,119,244);">Log In</button></div>
    </form>
</div>
<?php include('Templates/footer.php') ?>