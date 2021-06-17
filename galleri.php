<?php 
    $css = "galleri";
    $title = "Galleri";
    include "./includes/header.php";
    include "./includes/nav.php";
?>
<main>
<form action="#gallery" method="post" id="gallery">
    <h3>Filtrer:</h3>
<input type="checkbox" name="jagt" id="jagt" value="jagt">
<label for="jagt">Jagt</label>
<p>Jagt</p>
<input type="checkbox" name="produkter" id="produkter" value="produkter">
<label for="produkter">Produkter</label>
<p>Produkter</p>
<input type="checkbox" name="værksted" id="værksted" value="værksted">
<label for="værksted">Værksted</label>
<p>Værksted</p>
</form>
<div id="pictures">
<img src="https://source.unsplash.com/1400x900/?hunting" alt="">
<img src="https://source.unsplash.com/1400x1500/?hunting" alt="">
<img src="https://source.unsplash.com/1400x900/?hunting" alt="">
<img src="https://source.unsplash.com/1400x900/?hunting" alt="">
<img src="https://source.unsplash.com/1400x900/?hunting" alt="">
<img src="https://source.unsplash.com/1400x1000/?hunting" alt="">
<img src="https://source.unsplash.com/1400x1200/?hunting" alt="">
<img src="https://source.unsplash.com/1400x900/?hunting" alt="">
<img src="https://source.unsplash.com/1400x1500/?hunting" alt="">
<img src="https://source.unsplash.com/1400x900/?hunting" alt="">
<img src="https://source.unsplash.com/1400x900/?hunting" alt="">
<img src="https://source.unsplash.com/1400x900/?hunting" alt="">
<img src="https://source.unsplash.com/1400x1000/?hunting" alt="">
<img src="https://source.unsplash.com/1400x1200/?hunting" alt="">
<img src="https://source.unsplash.com/1400x900/?hunting" alt="">
<img src="https://source.unsplash.com/1400x1500/?hunting" alt="">
<img src="https://source.unsplash.com/1400x900/?hunting" alt="">
<img src="https://source.unsplash.com/1400x900/?hunting" alt="">
<img src="https://source.unsplash.com/1400x900/?hunting" alt="">
<img src="https://source.unsplash.com/1400x1000/?hunting" alt="">
<img src="https://source.unsplash.com/1400x1200/?hunting" alt="">
<img src="https://source.unsplash.com/1400x900/?hunting" alt="">
<img src="https://source.unsplash.com/1400x1500/?hunting" alt="">
<img src="https://source.unsplash.com/1400x900/?hunting" alt="">
</div>
</main>
<script src="./js/galleri.js"></script>
<?php
    include "./includes/footer.php";
?>