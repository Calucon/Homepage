<?php
$exclude = false;
if ($exclude == true) return;

$title = 'Contact';

$hasImage = false;
$imageURL = '/img/calucon_logo_bg_small.png';
$imageALT = 'Calucon Logo';

$author = 'Simon Schwitz';
$date = new DateTime('2021-10-26', new DateTimeZone('utc'));

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
                <style>
                    .button.is-medium {
                        margin-top: 4px;
                    }
                </style>
                <div class="row">
                    <div class="column">
                        <h2 class="title is-5">Code</h2>
                    </div>
                    <div class="column">
                        <a class="button is-medium is-gitlab" href="https://gitlab.com/Calucon" target="_blank" rel="noopener">
                            <span class="icon is-medium">
                                <i class="fab fa-lg fa-gitlab"></i>
                            </span>
                            <span>Gitlab</span>
                        </a>
                        <a class="button is-medium is-github" href="https://github.com/Calucon" target="_blank" rel="noopener">
                            <span class="icon is-medium">
                                <i class="fab fa-lg fa-github"></i>
                            </span>
                            <span>GitHub</span>
                        </a>
                        <a class="button is-medium is-bitbucket" href="https://bitbucket.org/calucon/" target="_blank" rel="noopener">
                            <span class="icon is-medium">
                                <i class="fab fa-lg fa-bitbucket"></i>
                            </span>
                            <span>Bitbucket</span>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="column">
                        <h2 class="title is-5">Social Media</h2>
                    </div>
                    <div class="column">
                        <a class="button is-medium is-linkedin" href="https://www.linkedin.com/in/simon-schwitz-7840471a1/" target="_blank" rel="noopener">
                            <span class="icon is-medium">
                                <i class="fab fa-lg fa-linkedin"></i>
                            </span>
                            <span>LinkedIn</span>
                        </a>
                        <a class="button is-medium is-twitter" href="https://twitter.com/CaluconDEV" target="_blank" rel="noopener">
                            <span class="icon is-medium">
                                <i class="fab fa-lg fa-twitter"></i>
                            </span>
                            <span>@CaluconDEV</span>
                        </a>
                        <a class="button is-medium is-discord" href="#" rel="noopener">
                            <span class="icon is-medium">
                                <i class="fab fa-lg fa-discord"></i>
                            </span>
                            <span>Calucon#7992</span>
                        </a>
                        <a class="button is-medium is-reddit" href="https://www.reddit.com/user/Calucon" target="_blank" rel="noopener">
                            <span class="icon is-medium">
                                <i class="fab fa-lg fa-reddit"></i>
                            </span>
                            <span>u/Calucon</span>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="column">
                        <h2 class="title is-5">Others</h2>
                    </div>
                    <div class="column">
                        <a class="button is-medium is-docker" href="https://hub.docker.com/u/calucon" target="_blank" rel="noopener">
                            <span class="icon is-medium">
                                <i class="fab fa-lg fa-docker"></i>
                            </span>
                            <span>DockerHub</span>
                        </a>
                        <a class="button is-medium is-stack-overflow" href="https://stackoverflow.com/users/6597672/calucon" target="_blank" rel="noopener">
                            <span class="icon is-medium">
                                <i class="fab fa-lg fa-stack-overflow"></i>
                            </span>
                            <span>Stack Overflow</span>
                        </a>
                    </div>
                </div>
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