<?php
$exclude = false;
if ($exclude == true) return;

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
                <p>Hello, my name is Simon.</p><br />
                <p>
                    I'm a computer science student at the <a href="https://www.uni-konstanz.de/en/" target="_blank" rel="noopener">University of Konstanz</a>. While studying I'm also working as a full-stack developer at <a href="https://fast-rocket.de/" target="_blank" rel="noopener">FastRocket GmbH</a>.
                </p><br />
                <p>
                    At University, I'm focusing my studies in the field of HCI (Human Computer Interaction). As I enjoy working on front-end-facing projects, I want to gain a deeper understanding of UI/UX design.
                </p><br />
                <p>
                    At work, I'm mostly working on various PHP applications. Among these are WordPress and Shopware websites.
                </p>
                <hr />
                <div class="timeline is-centered">
                    <header class="timeline-header">
                        <span class="tag is-medium is-warning">Start</span>
                    </header>
                    <div class="timeline-item is-warning">
                        <div class="timeline-marker is-warning"></div>
                        <div class="timeline-content">
                            <p class="heading">September 2016</p>
                            <p>
                                Apprenticeship as Software Developer at
                                <br />
                                <a href="https://www.gebhardt-inc.com/" target="_blank" rel="noopener">Gebhardt Logistic Solutions GmbH</a>
                            </p>
                        </div>
                    </div>
                    <header class="timeline-header">
                        <span class="tag is-warning">2019</span>
                    </header>
                    <div class="timeline-item is-success">
                        <div class="timeline-marker is-success is-icon">
                            <i class="fa fa-check"></i>
                        </div>
                        <div class="timeline-content">
                            <p class="heading">February 2019</p>
                            <p>
                                Successfully finished apprenticeship
                                <br />
                                and got an employment contract at
                                <br />
                                <a href="https://www.gebhardt-inc.com/" target="_blank" rel="noopener">Gebhardt Logistic Solutions GmbH</a>
                            </p>
                        </div>
                    </div>
                    <div class="timeline-item is-warning">
                        <div class="timeline-marker is-warning"></div>
                        <div class="timeline-content">
                            <p class="heading">October 2019</p>
                            <p>
                                Studying computer science at
                                <br />
                                <a href="https://www.uni-konstanz.de/en/" target="_blank" rel="noopener">University of Konstanz</a>
                            </p>
                        </div>
                    </div>
                    <header class="timeline-header">
                        <span class="tag is-warning">2020</span>
                    </header>
                    <div class="timeline-item is-warning">
                        <div class="timeline-marker is-warning"></div>
                        <div class="timeline-content">
                            <p class="heading">March 2020</p>
                            <p>
                                Working part-time as Full-Stack Developer at
                                <br />
                                <a href="https://fast-rocket.de/" target="_blank" rel="noopener">FastRocket GmbH</a>
                            </p>
                        </div>
                    </div>
                    <header class="timeline-header">
                        <span class="tag is-medium is-warning">Today</span>
                    </header>
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