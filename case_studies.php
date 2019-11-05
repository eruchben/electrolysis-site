<?
$this_page = 'case_studies';
require_once 'header.php';
require_once 'main_slider.php';

$arr = ['Chana', 'Susan', 'Elisheva'];

// $db = DB::instance();
$directory = "assets/img/client_pics";
$images = $_GET['admin'] ? glob($directory . "/*.JPG") : [];
?>

<section style='margin:auto'>
    <h2>Coming Soon...</h2>
</section>

<div>
    <img src="">
</div>


<?foreach ($images as $image):?>
    <img src="<?=$image?>" height="200">
    <?$pos = strrpos($image, '/');
    echo substr($image, $pos+1)?>
    <hr>
<?endforeach;?>
<!--    
<?foreach ($arr as $author => $story):?>
    <div style="display: none;" id="hidden-content_<?=$author?>">
        <h2>Hello. This is <?=$story?>'s Story.</h2>
        <p>Everything is Awesome!!</p>
    </div>
<?endforeach;?>

<section class="story_links">
    <?foreach ($arr as $author => $story):?>
        <a data-fancybox class="border" data-src="#hidden-content_<?=$author?>" href="javascript:;">
            <?=$story?>'s Story
        </a>    
    <?endforeach;?>
</section> -->
<?require_once 'footer.php'?>
