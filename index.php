<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>OuiSkin -- Home</title>
        <link href='https://www.google.com/fonts#UsePlace:use/Collection:Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
        <link href="_/css/bootstrap.css" rel="stylesheet">
        <link href="_/css/mystyles.css" rel="stylesheet">
    </head>
    <body id="home">
        <section class = "container">
            <div class="content row">
            <?php include "_/components/php/header.php"; ?>
                <section class = "main col col-lg-8">
                    <?php include "_/components/php/home-article.php"; ?>    
                </section><!--main-->
                <section class = "sidebar col col-lg-4">
                    <?php include "_/components/php/home-skrollr.php"; ?>
                </section><!--sidebar-->
                <?php include "_/components/php/footer.php"; ?>
            </div><!-- content-->
        </section><!-- container-->
        <script src="_/js/bootstrap.js"></script>
        <script src="_/js/myscript.js"></script>
     	<script type="text/javascript">
		   	skrollr.init({
		forceHeight: false,
	});
	</script>
    </body>
</html>