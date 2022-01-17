<?php
/**
 * Flexible Section
 * Hero video section
 * Upload video, embed video, upload image
 */
?>

<?php

$title = get_sub_field( 'title' );
$subtitle = get_sub_field( 'subtitle' );
$video = get_sub_field( 'background_video_mp4' );

?>

<section class="home-hero">

    <?php
    if($video) :
    ?>

    <div class="home-hero__video-wrapper">
        <video autoplay loop muted playsinline>
            <source src="<?php echo $video['url']; ?>" type="video/mp4" class="video-file">
        </video>
    </div>

    <?php endif; ?>

    <div class="container">

    <?php if($title) :
    ?>

        <h1 class="home-hero__title"><?php echo $title; ?></h1>

    <?php endif; ?>

    <?php if($subtitle) :
    ?>

        <h2 class="home-hero__title"><?php echo $subtitle; ?></h2>

    <?php endif; ?>

    </div>
</section>
