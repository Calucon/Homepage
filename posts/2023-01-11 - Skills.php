<?php
$exclude = false;
if ($exclude == true) return;

$title = 'Skills';

$hasImage = false;
$imageURL = '/img/calucon_logo_bg_small.png';
$imageALT = 'Calucon Logo';

$author = 'Simon Schwitz';
$date = new DateTime('1998-04-06', new DateTimeZone('utc'));

function printSkill(string $name, int $years, string ...$descriptions)
{
?>
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">
                <?php echo $name; ?>
            </p>
            <a href="#collapsible-card-<?php echo $name; ?>" data-action="collapse" class="card-header-icon is-hidden-fullscreen" aria-label="more options">
                <span class="icon">
                    <i class="fas fa-angle-down" aria-hidden="true"></i>
                </span>
            </a>
        </header>
        <div id="collapsible-card-<?php echo $name; ?>" class="is-collapsible is-active">
            <div class="card-content">
                <p class="subtitle is-5">
                    <?php echo $years; ?>+ years
                </p>
                <?php
                foreach ($descriptions as $desc) {
                ?>
                    <p>
                        <?php echo $desc; ?>
                    </p>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
<?php
}

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
            <div class="card-content">
                <?php
                printSkill('Java', 4, 'I taught myself how to program while still going to school. Back then, I was strongly interested in Minecraft and wanted to develop my own server plugins. Having no experience at all, I started by watching Youtube videos and learned it that way. Also at University, this was the first programming language we were required to learn.');

                printSkill(
                    'Kotlin',
                    3,
                    'For the final project of my apprenticeship, there was a requirement that the server part of the software can run on any host. I heard about Kotlin before, but this is the first time I\'ve actually used it. Having a profound background in Java, switching to Kotlin was quite easy and I enjoyed working with all the additional features that Kotlin offers.',
                    'My own Java/Kotlin TCP/UDP library emerged from my final project which can be found <a href="https://gitlab.com/Calucon/calpkt" target="_blank" rel="noreferrer">here</a>. During one of my University courses, I was able to re-use this library, but due to lack of time, I\'ve never continued to actively develop it further.'
                );
                ?>
                <h1>Java</h1>
                <h2>4+ years</h2>
                <p>
                    I taught myself how to program while still going to school. Back then, I was strongly interested in Minecraft and wanted to develop my own server plugins. Having no experience at all, I started by watching Youtube videos and learned it that way. Also at University, this was the first programming language we were required to learn.
                </p>
                <hr>
                <h3>Kotlin</h3>
                <h4>3+ years</h4>
                <p>
                    For the final project of my apprenticeship, there was a requirement that the server part of the software can run on any host. I heard about Kotlin before, but this is the first time I've actually used it. Having a profound background in Java, switching to Kotlin was quite easy and I enjoyed working with all the additional features that Kotlin offers.
                    My own Java/Kotlin TCP/UDP library emerged from my final project which can be found <a href="https://gitlab.com/Calucon/calpkt" target="_blank" rel="noreferrer">here</a>. During one of my University courses, I was able to re-use this library, but due to lack of time, I've never continued to actively develop it further.
                </p>
                <hr>
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