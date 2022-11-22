<?php
$exclude = true;
if($exclude == true) return;

$title = 'Blog';

$hasImage = false;
$imageURL = '/img/calucon_logo_bg_small.png';
$imageALT = 'Calucon Logo';

$author = 'Simon Schwitz';
$date = new DateTime('2020-08-25', new DateTimeZone('utc'));

?>

<section class="section">
        <div class="container">
            <div class="card">
                <header class="card-header has-background-warning">
                    <p class="card-header-title title is-5 is-family-monospace"><?php echo $title; ?></p>
                </header>
                <?php
                    if($hasImage){
                        ?>
                            <div class="card-image">
                                <figure class="image">
                                    <img src="<?php echo $imageURL; ?>" alt="<?php echo $imageALT; ?>">
                                </figure>
                            </div>
                        <?php
                    }

                ?>
                <div class="card-content">
                    <p>
                        Instead of using this main landing page as some sort of blog, I've decided to use the already existing 
                        wordpress installation of mine over at <a href="https://blog.calucon.de" target="_blank" rel="noreferrer">blog.calugon.de</a>
                        for anything that is worth a dedicated post.
                    </p>
                    <br>
                    <p>
                        Click on any post below and you'll be redirected to the blog post right away:  
                    </p>
                    <hr/>
                    <iframe title="Calucon Blog Preview" id="blog-frame" src="https://blog.calucon.de/blog/" style="width: 100%;min-height: 30em;"></iframe>
                    <script>
                        focus();
                        addEventListener('blur', function() {
                            if(document.activeElement === document.getElementById('blog-frame')) {
                                console.log('clicked!');
                                document.location = "https://blog.calucon.de/blog/";
                            }
                        });
                    </script>
                    <?php
                        if(isset($author) && isset($date)){
                            ?>
                                <hr>
                                <div class="level">
                                    <div class="level-left">
                                        <p class="level-item help"><strong>Author:&nbsp;</strong><?php echo $author; ?></p>
                                    </div>
                                    <div class="level-right">
                                    <p class="level-item help"><strong>Created on&nbsp;</strong><?php echo $date->format('Y-m-d'); ?></p>
                                    </div>
                                </div>
                            <?php
                        }
                    ?>
                </div>
            </div>
        </div>
    </section>