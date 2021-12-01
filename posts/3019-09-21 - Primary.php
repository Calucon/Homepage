<?php
$exclude = false;
if($exclude == true) return;

$title = 'About me';

$hasImage = true;
$imageURL = '/img/calucon_logo_bg_small.webp';
$imageALT = 'Calucon Logo';

$author = 'Simon Schwitz';
$date = new DateTime('2019-09-21', new DateTimeZone('utc'));

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
                Hello, this is Simon.<br>
                I'm a computer science student at the <a href="https://www.uni-konstanz.de/en/" target="_blank" rel="noopener">University of Konstanz</a>. While studying I'm also working as a full-stack developer at <a href="https://fast-rocket.de/" target="_blank" rel="noopener">FastRocket GmbH</a>.<br>
                <br>
                When I'm not currently busy with studying or working, I like to explore unknown stuff regarding: linux server administration and automation as well as software development.
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