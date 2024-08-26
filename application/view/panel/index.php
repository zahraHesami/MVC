
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP panel</title>
    <link rel="stylesheet" href="<?= asset('assets/css/bootstrap.min.css') ?>" media="all" type="text/css">
    <link rel="stylesheet" href="<?= asset('assets/css/style.css') ?>" media="all" type="text/css">
</head>
<body>
<section id="app">

<?php $this->include("panel.layouts.top-nav") ?>

    <section class="container-fluid">
        <section class="row">
            <section class="col-md-2 p-0">

                <?php $this->include("panel.layouts.sidebar")?>

            </section>
            <section class="col-md-10 pb-3">

                <section style="min-height: 80vh;" class="d-flex justify-content-center align-items-center">
                    <section>
                        <h1>PHP Tutorial</h1>
                        <ul class="mt-2 li">
                            <li><h3>PDO Connection</h3></li>
                            <li><h3>File upload</h3></li>
                            <li><h3>Blog (categories and posts)</h3></li>
                        </ul>
                    </section>
                </section>

            </section>
        </section>
    </section>

    <?php $this->include("panel.layouts.footer")?>
