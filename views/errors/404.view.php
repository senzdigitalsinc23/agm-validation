<?php require_once base_path("views/partials/head.view.php"); ?>
<?php //require_once base_path("views/partials/nav.view.php"); ?> 

    <style>
        h1 {
            color: red;
            font-weight: 900;
            font-size: 1.6rem;
            text-align: center;
        }

        a{
            display: flex;
            text-decoration: none;
            font-size: 1.2rem;
            font-style: italic;
            justify-content: center;
            align-items: center;
            color: blue;
        }
    </style>
    <h1>Page Not Found</h1>

    <a href="/">Back to homepage</a>

    <?php require_once base_path("views/partials/footer.view.php"); ?>