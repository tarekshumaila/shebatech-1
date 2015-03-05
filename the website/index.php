<html>
    <head>
        <?php include './php/head.php'; ?>
    </head>
        <body onload="Slider();" class="flex direction-column">
            <ul class='flex justify-between' id="menucontainer"><?php include './php/menu.php'; ?></ul>
<!--slides -->
            <ul class='flex' id=""><?php include './php/slider.php'; ?></ul>  

<!--about us-->
            <ul class='flex justify-around wrap-wrap' id="aboutus"><?php include './php/aboutus.php'; ?></ul>
            
<!--srevices-->
            <ul class='flex justify-around wrap-wrap' id="services"><?php include './php/services.php'; ?></ul>

<!--portfolio-->
            <ul class='flex justify-around wrap-wrap' id="portfolio"><?php include './php/portfolio.php'; ?></ul>

<!--contactus-->
            <ul class='flex justify-around wrap-wrap' id="contactus"><?php include './php/contactus.php'; ?></ul>

<!--footer-->     
            <ul class='flex wrap-wrap' id="footer"><?php include './php/footer.php'; ?></ul>
        </body>
</html>





