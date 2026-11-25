<?php
    $title = "About";
    require "blocks/header.php";
?>
<div class="container mt-2">
<h1>About</h1>

<form action="check_post.php" method="post">
    <input type="text" name="username" placeholder="type username" class="form-control"><br>
    <input type="text" name="email" placeholder="type email" class="form-control"><br>
    <input type="password" name="password" placeholder="type password" class="form-control"><br>
    <textarea name="message" id="" placeholder="type message" class="form-control"></textarea><br>
    <input type="submit" value="send" class="btn btn-success">
</form>
</div>
<?php
    require "blocks/footer.php";
?>