<?php
    $hot = $app->articles->getHotArticles();
?>

<div class='home-articles clr'>
    <div class='home-module home-module-light col span_16'>
        <h3 class='no-margin'>Featured articles</h3>
        <div class='clr'>
<?php
    $n = 0;
    foreach($hot AS $article):
        if ($n++ == 2)
            break;
?>
                <a href='<?=$article->slug;?>' class="col span_12 <?=isset($article->thumbnail) || isset($article->video)?'img':'';?> thumbnail" data-overlay="<?=$article->category;?>">
<?php   if (isset($article->thumbnail)): ?>
                    <img src="/users/images/200/4:3/<?=$article->thumbnail;?>">
<?php   elseif (isset($article->video)): ?>
                    <img src="http://img.youtube.com/vi/<?=$article->video;?>/0.jpg">
<?php   endif; ?>
                    <div class="caption">
                        <h3><?=$article->title;?></h3>
                    <p><?=$app->parse($article->body, false);?></p>
                    </div>
                </a>
<?php
    endforeach;
?>
        </div>
    </div>
    <div class='home-module col span_8 external-articles mobile-hide'>
        <ul class='plain slider'>
            <li>
                <a href='#'>
                    <h3>[BBC] Four UK men arrested over Silk Road links</h3>
                    <img src='http://news.bbcimg.co.uk/media/images/70343000/jpg/_70343563_70285124.jpg'/>
                </a>
            </li>
            <li>
                <a href='#'>
                    <h3>[BBC] Symantec disables 500,000 botnet-infected computers</h3>
                    <img src='http://news.bbcimg.co.uk/media/images/70210000/jpg/_70210113_148056808.jpg'/>
                </a>
            </li>
            <li>
                <a href='#'>
                    <h3>[SecurityWeek] Argentina Nabs Young 'Super Hacker'</h3>
                    A 19-year-old Argentine has been arrested on charges of hacking into online gambling pages and international money transfer sites, authorities said Friday. 
                </a>
            </li>
        </ul>
    </div>
</div>