<!DOCTYPE html>
<html>
    <head>
        <base href="<?php echo base_url(); ?>" >
        <!-- Page Title -->
        <title>Blue sky Excursions</title>

        <!-- Meta Tags -->
        <meta charset="utf-8">
        <meta name="keywords" content="" />
        <meta name="description" content="Blue Sky | ">
        <meta name="author" content="">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Theme Styles -->
        <link rel="stylesheet" href="assest/css/bootstrap.min.css">
        <link rel="stylesheet" href="assest/css/font-awesome.min.css">
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="assest/css/animate.min.css">

        <!-- Current Page Styles -->
        <link rel="stylesheet" type="text/css" href="assest/components/revolution_slider/css/settings.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="assest/components/revolution_slider/css/style.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="assest/components/jquery.bxslider/jquery.bxslider.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="assest/components/flexslider/flexslider.css" media="screen" />

        <!-- Main Style -->
        <link id="main-style" rel="stylesheet" href="assest/css/style.css">

        <!-- Custom Styles -->
        <link rel="stylesheet" href="assest/css/custom.css">

        <!-- Updated Styles -->
        <link rel="stylesheet" href="assest/css/updates.css">

        <!-- Updated Styles -->
        <link rel="stylesheet" href="assest/css/updates.css">

        <!-- Responsive Styles -->
        <link rel="stylesheet" href="assest/css/responsive.css">
 <?php 
    if(isset($error)){
        echo "<h3>".$error."</h3>";
    }
    ?> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script>
            tjq = jQuery.noConflict();
        </script>   
        <script>
            var hash = '<?php echo (isset($hash) ? $hash : ""); ?>';
            function submitPayuForm() {
                if (hash == '') {
                    return;
                }
                var payuForm = document.forms.payuForm;
                payuForm.submit();
            }
        </script>

        <!-- Javascript Page Loader -->
       <!--  <script type="text/javascript" src="assest/js/pace.min.js" data-pace-options='{ "ajax": false }'></script>
        <script type="text/javascript" src="assest/js/page-loading.js"></script> -->
    </head>
