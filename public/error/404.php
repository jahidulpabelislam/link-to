<?php

declare(strict_types=1);

include_once(__DIR__ . "/../../vendor/autoload.php");

$app = \JPI\App::get();
?>

<!DOCTYPE html>
<html lang="en-GB">
    <head>
        <title>Link Not Found</title>

        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="author" content="Jahidul Pabel Islam" />

        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <meta name="robots" content="noindex" />

        <?php $app->renderFavicons(); ?>

        <link href="<?php echo $app::asset("/assets/css/error.css"); ?>" rel="stylesheet" type="text/css" media="all" title="style" />
    </head>

    <body>
        <main class="page">
            <p class="error">Hmm... Couldn't Find What You Are Looking For, But You Can Find All My Links <a href="https://links.<?php echo $app::DOMAINS[$app->getEnvironment()]; ?>">Here</a>.</p>
        </main>

        <script src="<?php echo $app::asset("/assets/js/error.js"); ?>" type="application/javascript"></script>
    </body>
</html>
