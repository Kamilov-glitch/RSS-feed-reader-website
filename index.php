<?php 

include "partials/header.php"

?>

<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Enter rss feed url</h3>
        </div>
        <div class="card-body">
            <form action="" method="POST">
                <div class="form-group">
                    <label for="url">Enter rss feed url</label>
                    <input type="text" class="form-control" name="url">
                </div>
                <button class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

<?php
    if ($_POST['url']) {
        $url = $_POST['url'];
        $feed = simplexml_load_file($url);
        echo '<pre>';
        var_dump($feed);
        echo '</pre>';
    }
?>

<?php

include "partials/footer.php"

?>