<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Chaosbeing - Portfolio</title>
</head>

<?php
$texts = json_decode(file_get_contents('./assets/lang/en.json'));
?>

<body>
    <header>
        <div class="logo_container">
            <img src="./TOREMOVEFROMPROD/some_sort_of_logo.png" alt="">
        </div>
        <nav>
            <ul>
                <li><?php echo $texts->about_title; ?></li>
                <li><?php echo $texts->hobbies_title; ?></li>
                <li><?php echo $texts->about_title; ?></li>
                <li><?php echo $texts->about_title; ?></li>
                <li><?php echo $texts->about_title; ?></li>
            </ul>
        </nav>
    </header>
    <main>
        <section id="hero">
            <h1><?php echo $texts->main_title[0]; ?></h1>
            <h1><?php echo $texts->main_title[1]; ?></h1>
            <p class="bt"><?php echo $texts->main_subtitle; ?></p>
        </section>

        <section id="about">
            <h2 class="section_title"><?php echo $texts->about_title; ?></h2>
            <div class="section_content">
                <div class="text">
                    <p><?php echo $texts->about_text[0]; ?></p>
                    <p><?php echo $texts->about_text[1]; ?></p>
                    <p><?php echo $texts->about_text[2]; ?></p>
                </div>
                <div class="img-wrapper">
                    <img src="./assets/img/hello.svg" alt="" id="hello_img">
                </div>
            </div>
        </section>

        <section id="hobbies">
            <h2 class="section_title"><?php echo $texts->hobbies_title; ?></h2>
            <div class="section_content">
                <div class="card">
                    <div class="img-wrapper">
                        <img src="./assets/img/coding.png" alt="">
                    </div>
                    <h2><?php echo $texts->hobbies_cards[0]->title ?></h2>
                    <p><?php echo $texts->hobbies_cards[0]->text ?></p>
                </div>

                <div class="card">
                    <div class="img-wrapper">
                        <img src="./assets/img/design.png" alt="">
                    </div>
                    <h2><?php echo $texts->hobbies_cards[1]->title ?></h2>
                    <p><?php echo $texts->hobbies_cards[1]->text ?></p>
                </div>

                <div class="card">
                    <div class="img-wrapper">
                        <img src="./assets/img/gaming.png" alt="">
                    </div>
                    <h2><?php echo $texts->hobbies_cards[2]->title ?></h2>
                    <p><?php echo $texts->hobbies_cards[2]->text ?></p>
                </div>
            </div>
        </section>

        <section id="works">
            <h2 class="section_title">My works</h2>
            <div class="section_content">
                <div class="work-sect">
                    <div class="ws-header">
                        <div class="ws-content">
                            <h3>Websites</h3>
                            <p>Get to see the collection of my websites. They’re all trash but at least i’ve done some things i guess ? idk what it’s worth in the end</p>
                        </div>
                        <div class="ws-icon"></div>
                    </div>
                    <div class="preview">
                        <a href=""></a>
                        <a href=""></a>
                        <a href="" class="preview-explore">
                            <p>Explore</p>
                        </a>
                    </div>
                </div>

                <div class="work-sect">
                    <div class="ws-header">
                        <div class="ws-content">
                            <h3>Illustration</h3>
                            <p>I’ve done some shit with illustrator and/or photoshop, so here they are... Also i’ve done inktober and it was fun ig</p>
                        </div>
                        <div class="ws-icon"></div>
                    </div>
                    <div class="preview">
                        <a href=""></a>
                        <a href=""></a>
                        <a href="" class="preview-explore">
                            <p>Explore</p>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section id="softwares">
            <h2 class="section_title">Software Proficiency</h2>
            <div class="section_content">
            </div>
        </section>

        <section id="contact">
            <h2 class="section_title">Contact me</h2>
            <div class="section_content">
            </div>
        </section>
    </main>

    <script src="./assets/js/script_writing.js"></script>
    <script src="./assets/js/hello.js"></script>
    <script src="./assets/js/vanilla-tilt.js"></script>
</body>

</html>