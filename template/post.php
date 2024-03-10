<?php

/** @var Post */
$post = $vvars['post'];

?>

<section class="section">
    <div class="container">
        <div class="card">
            <header class="card-header has-background-warning">
                <p class="card-header-title title is-5 is-family-monospace" id="<?php echo $post->htmlAnchor; ?>"><?php echo $post->title; ?></p>
            </header>
            <?php
            if ($post->hasImage()) {
            ?>
                <div class="card-image">
                    <figure class="image">
                        <img src="<?php echo $post->imageUrl; ?>" alt="<?php echo $post->imageAlt; ?>" loading="lazy">
                    </figure>
                </div>
            <?php
            }
            ?>
            <div class="card-content has-background-white-bis">
                <?php Util::loadPostContent($post, $vvars); ?>
                <hr>
                <div class="level">
                    <div class="level-left">
                        <p class="level-item help"><strong>Author:&nbsp;</strong><?php echo $post->author; ?></p>
                    </div>
                    <div class="level-right">
                        <p class="level-item help"><strong>Created on&nbsp;</strong><?php echo $post->date->format('Y-m-d'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>