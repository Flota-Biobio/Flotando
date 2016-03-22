<?php

$slider = array(
    (object) array(
        'id' => '12',
        'image' => 'slide-12.jpg',
        'title' => 'Matta Egwea',
        'caption' => 'Matta Egwea',
        'link' => '#',
        'position' => '99',
        'status' => '1'
    ),
    (object) array(
        'id' => '13',
        'image' => 'slide-13.jpg',
        'title' => 'asdasd',
        'caption' => 'asdasd',
        'link' => '#',
        'position' => '99',
        'status' => '1'
    ),
    (object) array(
        'id' => '14',
        'image' => 'slide-14.jpg',
        'title' => 'asd',
        'caption' => 'asd',
        'link' => '#',
        'position' => '99',
        'status' => '1'
    )
);

?>

<?php rimy_header_tag('css', ASSETS_CSS_URL . 'slider.css') ?>
<div class="slider">
    <div class="container">
        <div class="content row">

            <div id="home-slider" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <?php foreach ($slider as $pos => $slide): ?>
                    <li data-target="#home-slider" <?= $pos==0 ? 'class="active' : '' ?> data-slide-to="<?=$pos?>"></li>
                    <?php endforeach ?>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">

                    <?php foreach ($slider as $pos => $slide): ?>
                    <div class="item<?=$pos==0 ? ' active' : ''?>">
                        <a href="<?=$slide->link?>" target="_blank">
                            <img src="<?= ASSETS_IMG_URL ?>uploaded/slider/full/<?=$slide->image?>" title="<?=$slide->title?>" class="slide" />
                        </a>
                        <div class="carousel-caption">
                            <?=$slide->caption?>
                        </div>
                    </div>
                    <?php endforeach ?>

                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#home-slider" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#home-slider" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>