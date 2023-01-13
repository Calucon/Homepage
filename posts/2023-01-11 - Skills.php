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
        <header class="card-header has-background-success-light">
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
    <br />
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
            <div class="card-content has-background-white-ter">
                <?php
                printSkill(
                    'PHP',
                    4,
                    'Approaching the end of my apprenticeship, I wanted to create my own website. Having learned that you can easily use PHP in combination with an Apache2 web server and wanting to learn something new, this was the first time I\'ve looked into PHP.  In the beginning, I mostly focused on the object-oriented part of PHP without any additional libraries or frameworks. After starting at my current employer, I was first introduced to the Laravel ecosystem. Later we had requests for WordPress plugins and Shopware (based on Symfony) themes and apps.'
                );
                printSkill(
                    'Kotlin',
                    3,
                    'For the final project of my apprenticeship, there was a requirement that the server part of the software can run on any host. I heard about Kotlin before, but this is the first time I\'ve actually used it. Having a profound background in Java, switching to Kotlin was quite easy and I enjoyed working with all the additional features that Kotlin offers.',
                    'My own Java/Kotlin TCP/UDP library emerged from my final project which can be found <a href="https://gitlab.com/Calucon/calpkt" target="_blank" rel="noreferrer">here</a>. During one of my University courses, I was able to re-use this library, but due to lack of time, I\'ve never continued to actively develop it further.'
                );
                printSkill(
                    'Java',
                    4,
                    'I taught myself how to program while still going to school. Back then, I was strongly interested in Minecraft and wanted to develop my own server plugins. Having no experience at all, I started by watching Youtube videos and learned it that way. Also at University, this was the first programming language we were required to learn.'
                );
                printSkill(
                    'C#',
                    3,
                    'For my apprenticeship, I had to learn C# as the majority of the used in-house software was either written in C# (partly ASP.NET).'
                );
                printSkill(
                    'HTML/CSS/VanillaJS',
                    6,
                    'As already mentioned, at the company I did my apprenticeship, we used ASP.NET to deliver websites to our co-workers. These were rendered through the Razor template engine and used Bootstrap as CSS framework and JQuery to facilitate writing Javascript code. As we already were accustomed to C#, we used the ASP.NET framework to port all in-house to a web-based variant so users can use them regardless of their operating system or the device they used for their job.',
                    'Until today, the demand for websites hasn\'t stopped growing and many of our current customers are looking for responsive websites for various purposes.'
                );
                printSkill(
                    'SQL',
                    6,
                    'Behind every enterprise application is usually some kind of Database. This can range from a simple Maria- or Mysql database, to SSAS (Microsoft SQL Server Analysis Services) for creating BI (Business Intelligence) reports to a MongoDB for simple data storage.'
                );


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