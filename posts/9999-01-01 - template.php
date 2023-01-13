<?php
$exclude = true;
if ($exclude == true) return;

$title = 'Template';

$hasImage = true;
$imageURL = '/img/calucon_logo_bg_small.png';
$imageALT = 'Calucon Logo';

$author = 'Simon Schwitz';
$date = new DateTime('1998-04-06', new DateTimeZone('utc'));

?>

<section class="section">
    <div class="container">
        <div class="card">
            <header class="card-header has-background-warning">
                <p class="card-header-title title is-5 is-family-monospace"><?php echo $title; ?></p>
            </header>
            <?php
            if ($hasImage) {
            ?>
                <div class="card-image">
                    <figure class="image">
                        <img src="<?php echo $imageURL; ?>" alt="<?php echo $imageALT; ?>">
                    </figure>
                </div>
            <?php
            }

            ?>
            <div class="card-content has-background-white-bis">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sit amet purus scelerisque, iaculis sapien quis, volutpat ex. Duis sit amet turpis a leo rhoncus sodales sed quis ex. Morbi eget ex vitae tellus pretium interdum. Curabitur egestas cursus nibh ut interdum. Nulla tempus ex id dolor mattis, nec viverra lacus bibendum. Mauris eu aliquam velit. Pellentesque malesuada odio sit amet magna molestie luctus. Nunc pellentesque, diam vitae molestie porta, sem massa feugiat tellus, eu eleifend urna orci vitae elit. Phasellus mauris ex, pharetra et velit fermentum, tincidunt varius libero. Cras luctus pulvinar dolor, vitae vulputate felis congue non. Donec interdum rutrum erat, in tempor nisi varius posuere. Vestibulum laoreet neque in risus pulvinar pretium. Nunc at nibh at odio consectetur dignissim non sed augue. Aliquam vestibulum varius ligula, lobortis aliquam velit luctus quis. Mauris consequat urna nec nisi vehicula, vestibulum accumsan ex commodo.</p><br>

                <p>Aliquam vel orci sit amet velit pellentesque lobortis eu sed sapien. Etiam ligula leo, porta a nulla et, vulputate malesuada purus. Donec vitae dui elit. Etiam porttitor venenatis magna, a blandit ante porttitor quis. Nam vel molestie dui, et condimentum tortor. Suspendisse sollicitudin mi vitae dignissim vulputate. Phasellus sodales dignissim auctor. Vivamus sagittis mi id purus rhoncus tincidunt. Phasellus quis ante ultricies, varius nibh sed, feugiat sem. Nunc fermentum sapien ut congue porttitor. Cras pharetra luctus orci eget sagittis. Cras nec arcu id nibh condimentum consequat.</p><br>

                <p>eu nunc nec odio eleifend porta. Mauris in urna a libero fringilla varius sed eu risus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras accumsan lorem leo, id pulvinar augue mollis sit amet. Quisque sit amet augue convallis, maximus leo eu, viverra justo. Nunc elementum mi eu leo aliquet aliquam non eu diam. Nulla commodo lectus mi, ac dignissim arcu aliquam vehicula. Praesent feugiat neque et lectus vulputate, eu finibus nisi fermentum. Aliquam eget metus eu velit ullamcorper rhoncus.</p><br>

                <p>Pellentesque porttitor imperdiet augue, sed luctus nulla convallis eget. Aliquam erat volutpat. Nullam faucibus non lacus eget viverra. Aliquam consectetur mi in erat sagittis, vel molestie magna luctus. Nam elementum quam sed magna vestibulum, ac egestas augue ultrices. Sed finibus nulla laoreet congue porttitor. Phasellus molestie blandit est, vitae facilisis felis sagittis et. Aenean ex metus, pellentesque vel eros quis, tristique lobortis massa. Vivamus eu justo eget quam dictum tincidunt.</p><br>

                <p>Donec nec lacinia tellus, non lacinia ante. Vivamus felis urna, tristique vel turpis vel, convallis posuere neque. Nullam sodales urna in velit tempus volutpat. Phasellus suscipit auctor purus ut efficitur. Sed eget convallis ligula, posuere vehicula nunc. Nam aliquet, nibh non venenatis varius, augue velit mollis ipsum, nec condimentum quam odio vitae urna. Mauris hendrerit nunc non molestie imperdiet. Curabitur varius tortor sem, eu tincidunt massa elementum non. Cras suscipit risus quis quam ultricies, aliquet rhoncus nibh scelerisque. Praesent pellentesque nisi et lorem tristique, posuere porta eros laoreet. Etiam volutpat nisi at dui pulvinar fringilla. Sed vel imperdiet nulla, in vestibulum dui.</p>
                <?php
                if (isset($author) && isset($date)) {
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