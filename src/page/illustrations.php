<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/lists.css">
    <title>Illustrations</title>
</head>

<?php
$texts = json_decode(file_get_contents('../src/data/lang/en.json'));
$illustrations = json_decode(file_get_contents('../src/data/work_content/illustrations.json'));
?>

<body>
    <?php require '../src/parts/lists_header.php' ?>
    <main>
        <section id="hero">
            <p class="almost-main-title">Check my</p>
            <h1 class="main-title">Illustrations</h1>
        </section>
        <section class="list">
            <?php
            foreach ($illustrations as $illustration) {
            ?>
                <a href="" class="card HOVER">
                    <div class="card-header bg <?php echo $illustration->class ?>">
                    </div>
                    <p class="card-title"><?php echo $illustration->title ?></p>
                </a>
            <?php
            }

            ?>

        </section>
    </main>

    <?php require '../src/parts/footer.php' ?>
</body>

</html>