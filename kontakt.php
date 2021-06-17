<?php 
    $css = "kontakt";
    $title = "Kontakt";
    include "./includes/header.php";
    include "./includes/nav.php";
?>
    <script src="./js/googleMap.js"></script>
<main>
    <h1>Kontakt</h1>
    <hr>
    <div id="map"></div>
    <hr>
    <div class="kontact-info">
        <ul>
            <li>filler</li>
            <li>filler</li>
            <li>Nørregade 9</li>
            <li>9300 Sæby</li>
            <li>Danmark</li>
            <li>filler</li>
            <li>filler</li>
            <li>filler</li>
            <li>filler</li>
            <li>filler</li>
        </ul>
        <form action="#kontaktformular" id="kontaktformular" method="post">
            <h3>Kontaktformular</h3>
            <label for="Navn">Navn:</label>
            <input type="text" name="Navn" id="Navn">
            <label for="Tlf">Tlf:</label>
            <input type="number" name="Tlf" id="Tlf">
            <label for="E-mail">E-mail:</label>
            <input type="email" name="E-mail" id="E-mail">
            <label for="Besked">Besked:</label>
            <textarea name="Besked" id="Besked"></textarea>
            <input type="submit" value="Send">
            <?php
            include "./includes/sendmail.php"
            ?>
        </form>
    </div>
</main>
<script async
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAY6ffHt02kbDGL6YganM7329A5MpwH7yA&callback=initMap">
</script>
<?php
    include "./includes/footer.php";
?>