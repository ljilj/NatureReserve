<?php
/**
 * Flexible Section
 * Home About Authority
 */
?>

<?php

$title = get_sub_field( 'title' );
$content_text = get_sub_field( 'content_text', false, false );;
$button_title = get_sub_field( 'button_title' );
$button_url = get_sub_field( 'button_url' );
$image = get_sub_field( 'image' );

?>

<section class="about-authority">
    <div class="container">
        <div class="row about-authority__wrap">
            <div class="about-authority__content col-md-6">

                <?php
                if( $title ) :
                ?>

                    <h3 class="about-authority__title"><?php echo $title; ?></h3>

                <?php endif; ?>

                <?php
                if( $content_text ) :
                ?>

                    <p class="about-authority__content-text"><?php echo $content_text; ?></p>

                <?php endif; ?>

                <?php
                if( $button_url ) :
                ?>

                    <?php
                    foreach ( $button_url as $post ):
                    ?>

					<?php setup_postdata ( $post ); ?>
                        <div class="about-authority__button">
                            <a class="about-authority__link" href="<?php the_permalink(); ?>"><?php echo $button_title; ?><i class="icon-angle-left"></i><i class="icon-angle-right"></i></a>
                        </div>

				    <?php endforeach; ?>

			        <?php wp_reset_postdata(); ?>

                <?php endif; ?>
            </div>

            <div class="about-authority__image col-md-6">

                <div class="about-authority__map">

                    <svg mapsvg:geoViewBox="34.492946 32.271167 55.688143 16.387460" preserveAspectRatio="xMidYMid meet" viewBox="0 0 730.13947 600.4032" style="transform: scale(1);" class="svgmap">

                        <path d="m 456.82718,487.03041 -10.13,2.63 -16.39,2.39 -58.85,5.04 -8.85,-0.7 -3.24,-0.72 -5.22,-2.39 -8.51,-5.59 0,0 -13.54,-12.09 -3.91,-6.36 -2.75,-2.96 -0.22,-1.6 1.23,-6.11 3.34,-6.09 0.08,-2.96 -1.06,-1.73 -3.6,-3.6 -3.07,-4.93 -5.76,-5.01 0,0 -4.34,-7.06 -4.77,-6.36 -0.58,-1.47 1.76,-8.48 -0.54,-6.95 2.33,-3.42 0.68,-2.34 -1.79,-13.1 0.96,-6.16 -0.31,-1.57 -6.45,-1.41 -5.65,1.47 -3.7,-1.28 -1.26,-2.3 0.28,-5.34 0.86,-2.93 -1.84,-1.88 -3.09,-0.85 -14.1,-0.63 -3.01,-1.63 -5.15,-11.26 -0.91,-5.64 -2.1,-4.72 -1.13,-4.86 -4.16,-3.3 -0.36,-3.13 0.44,-3.64 0,0 -0.04,-9.03 1.41,-4.88 -0.94,-3.6 2.95,-4.25 0.4,-3.14 0,0 3.04,-5.08 2.17,-1.58 1.5,0.12 5.17,2.55 3.87,0.81 5.73,0.5 5.67,-0.89 5.69,0.87 2.43,-1.79 0.85,-2.18 -1.91,-3.83 0.15,-2.3 5.42,-6.69 3.27,-2.52 12.88,-3.15 2.84,-2.81 3.09,-1.74 2.28,-4.47 2.02,-1.97 3.13,-0.82 8.3,1.06 7.2,-0.68 5.53,0.22 0.84,-3.9 -0.31,-3.16 -2.52,-4.86 1.08,-2.91 -0.14,-0.86 -6.69,-10.16 -3.6,-3.57 -0.49,-1.52 0.84,-5.74 -0.43,-5.12 4.01,-1.1 4.5,-5.87 2.46,-2.11 4.18,-1.84 0.62,-1.48 -0.15,-2.5 -1.34,-2.5 -3.6,-2.99 -2.35,-0.93 0,0 -0.68,-1.88 0.06,-1.59 0.99,-3.1 2.42,-3.32 3.15,-1.64 0,0 1.94,2.12 1.51,0.52 1.8,-0.86 1.3,-2.23 0,0 3.32,2.32 2.12,2.21 1.4,5.11 1.24,1.53 10.41,6.08 5.75,1.06 3.46,4.22 4.06,3.38 2.34,0.63 5.64,0.11 3.01,0.81 9.86,6.94 2.49,1.19 2.36,0.05 4.41,-1.01 1.55,0.22 6.45,6.08 1.47,2.52 8.88,3.16 3.86,2.08 1.09,2.56 0.43,4.96 0.38,22.63 -0.63,15.07 0.35,7.41 0.68,3.7 1.12,1.79 2.28,1.8 9.44,6.3 9.19,9.16 1.68,2.06 2.95,5.78 1.36,6.89 -0.02,7.75 z" title="Ar Riyāḑ" id="SA-01" class=" mapsvg-region r8" style="fill: #d2d2db; stroke: rgb(247, 247, 247); stroke-width: 1.42235px;"></path>
                        <path d="m 143.70718,343.80041 0,0 0.12,-0.02 -0.12,0.02 z m 114.74,-19.79 -0.44,3.64 0.36,3.13 4.15,3.3 1.13,4.86 2.11,4.72 0.91,5.64 5.15,11.26 3.01,1.63 14.1,0.63 3.09,0.85 1.84,1.88 -0.85,2.93 -0.29,5.33 1.26,2.31 3.7,1.28 5.65,-1.47 6.45,1.41 0.31,1.57 -0.96,6.17 1.79,13.1 -0.68,2.34 -2.33,3.43 0.55,6.94 -1.76,8.48 0.58,1.47 4.77,6.36 4.34,7.06 0,0 -4.02,1.47 -5.71,3.77 -5.22,-1.3 -2.26,0.25 -3.16,1.52 -4.55,0.28 -4.26,3.81 -6.41,3.06 -10.11,9.24 -2.31,1.14 -2.29,-0.24 -1.4,-1.02 -4.67,-9.07 0,0 -1.98,-1.93 -1.48,-0.22 -5.42,2.76 -4.16,-0.2 -4.61,1.77 -1.91,-1.46 -1.28,-3.77 -1.22,-1.45 -1.43,-0.61 -2.26,0.32 -1.36,1.41 -0.7,2.12 1.11,4.54 -0.12,2.36 -2.69,4.63 -1.37,3.56 -7.73,1.86 -4,4.1 0.17,1.42 0.67,0.7 3.66,1.09 0.97,1.53 -0.31,5.28 0.91,3.89 -0.27,4.44 1.3,1.54 3.69,2.13 2.06,3.06 1.59,1.05 2.59,0 2.21,-1.08 2.58,-8.98 2.4,-4.46 1.52,-0.59 4.61,-0.04 0.79,-0.5 0,0 1.51,-0.74 2.29,0.13 1.85,1.88 0.21,1.52 -1.31,6.92 2.19,4.44 -1.27,4.6 -0.76,1.42 -1.52,0.75 -4.74,-0.43 -2.24,0.37 -3.88,2.82 -0.75,0.06 -1.97,-1.87 -0.49,10 0.61,2.97 1.02,1.48 1.44,0.48 6.71,0.21 2.11,1.21 2.98,9.14 -1.5,6.41 0,0 -1.01,1.94 -3.55,2.05 -1.97,3.15 0,0 -0.4,-1.87 -0.27,-0.33 -0.95,-1.23 0.03,-0.49 -0.32,-0.57 -0.37,-0.37 -0.51,0.76 -0.36,-0.35 0.36,-1.15 -0.46,-0.24 -0.48,-0.65 0.15,-0.87 -0.73,-0.87 -0.54,-2.04 0.05,-0.8 -0.17,-1.41 -0.82,-0.8 0.15,-1.21 -1.41,-1.06 -0.63,-1.3 -2.26,-0.09 -1.06,-0.83 -0.19,-1.62 -1.74,-2.17 1.24,-4.89 -1.56,-0.4 -1.15,-0.92 -1.2,-2.73 1.29,-3 -0.2,-1.69 -3.05,-1.3 -1.11,-2.63 0.38,-1.51 -0.45,-1.44 -0.82,-0.58 -0.56,-1.36 -1.58,-0.81 0.3,-0.43 -0.48,-2.03 0.5,-2.77 -1.22,-1.31 -2.27,-0.56 -2.79,-2.11 -0.28,-1.02 1.04,0.93 0.34,-2.1 -1.13,-3.14 -1.43,-1.64 -2.06,0.57 -1.01,-0.32 0.18,0.78 1.11,0.52 -0.3,0.28 -1.35,-0.84 -0.43,-1.5 -1.42,-0.71 -0.3,-2 -1.3,-0.58 0.42,-1.26 -0.41,-1.12 -5.69,-3.91 -2.98,-0.95 -1.24,-2.03 -0.65,-0.05 0.14,-1.25 -2.29,0.07 -1.45,-1.52 -0.51,-1.48 -1.65,-0.59 -1.89,0.26 0.06,0.51 -0.75,0.13 -2.1,-1.56 -1.14,0.2 1.53,0.77 0.28,0.74 -2.67,-1.27 -5.15,-3.89 -1.76,-1.95 0.58,-0.54 -1.07,-0.75 0.18,-1.07 -0.96,0.31 -0.7,-0.68 -1.01,-1.32 0.23,-0.37 1,0.68 -0.4,-1.17 -0.99,0.09 -1.48,-1.98 -1.64,-3.02 0.52,-0.77 -0.17,-0.74 -1.45,-0.9 -0.15,0.64 0.6,0.97 -0.58,-0.22 -0.8,-2.17 0.89,0.43 0.34,-0.2 -0.53,-0.43 0.29,-0.25 -0.67,-0.12 -0.55,0.19 -2.05,-1.72 0.25,-1.31 -0.84,-0.77 -1.29,-0.07 -1.24,-1.94 0.16,-1.2 -1.32,-2.35 -1.66,-1 -0.89,-4.24 -0.83,-0.7 -1.27,-2.5 0.11,-0.78 0.87,-0.39 1.29,-0.9 0.7,-1.87 -1.22,-1.02 0.13,-0.82 -0.26,-0.74 0.9,-0.1 -0.92,-1.34 0.25,-0.39 -0.59,0 -0.24,0.29 -0.78,-0.67 -0.93,-6.07 -1.43,-3.12 -3.24,-4.23 -0.38,-1.86 0.39,-0.47 -0.51,-1.44 0.59,-0.78 1.37,-0.28 -1.02,1.88 0.52,0.64 0.46,-0.88 0.79,0.17 0.2,-2.75 1.22,0.1 -0.24,-0.86 0.56,-2.21 -0.34,-0.69 -0.56,2.85 -0.58,-0.26 0.8,-1.95 -0.32,-1.47 2.25,-4.19 -0.02,-1.7 0.44,-0.72 0.84,-0.18 0.32,-1.38 -1.17,-0.01 -0.15,0.92 -0.33,-0.19 -0.72,-0.57 0.48,-2.14 -0.1,-3.6 -1.88,-3.15 -0.39,-1.76 -1.17,-1.43 0.89,-0.9 -0.93,-0.07 -0.43,0.31 -4.27,-7.13 1.3,0.49 1.37,2.24 -0.19,0.47 1.19,0.21 0.51,-0.72 -1.58,-2.25 -0.05,-1.49 -2.29,0 0.32,-0.53 -0.89,0.1 -0.26,0.35 -1.44,-2.19 0.74,-1.65 -0.73,-3.8 -0.25,-0.76 -0.68,0.68 -1.68,-2.45 -0.09,-1.34 -0.33,-0.39 -0.23,-0.15 -0.98,-2.23 -0.07,-2.6 0,0 5.12,-0.4 3.08,-0.92 0.82,0.34 2.13,3.42 2.42,1.85 3.42,4.08 1.68,1.3 1.55,0.23 4.88,-1.11 1.58,0.37 0.43,3.86 0.7,0.58 10.44,-3.25 4.76,-0.31 1.07,1.39 0.28,3.25 -2.65,6.93 0.06,0.86 0.59,0.74 3.98,1.18 2.09,1.91 0.45,2.31 -0.83,3.87 0.65,1.58 4.76,0.56 2.33,-1.12 4.63,-4.1 6.79,2.21 1.62,-0.02 4.47,-6.66 9.34,-7.12 5.12,-5.32 2.45,-1.77 5.67,-2.31 0.56,-0.76 -0.4,-1.57 -5.35,-2.94 -0.76,-0.66 -0.2,-1.49 3.59,-2.87 11.75,-5.83 1.06,-1.53 0.69,-2.21 -0.16,-3.22 -1.11,-2.52 0.58,-2.32 3.24,-1.03 5.03,0.65 z" title="Makkah" id="SA-02" class=" mapsvg-region r9" style="fill: #c5c5cc; stroke: rgb(247, 247, 247); stroke-width: 1.42235px;"></path>
                        <path d="m 130.84718,324.65041 -0.9,-0.61 -0.33,0.61 -0.7,-0.29 -0.33,-0.44 -1.1,-1 0.38,-0.9 -1,0.41 -1.03,-1.53 -1.82,-1.19 0.16,-0.31 -0.62,-0.34 -1.13,0.46 -3.64,-2.84 0.62,-0.51 -0.59,-0.29 0.58,-1.68 -1.39,0.76 0.45,0.38 -0.44,1.27 -1.68,-0.19 -2.75,-2.06 -1.19,-2.11 -0.79,0.16 -0.38,-0.71 -0.69,-0.14 -0.09,-0.83 -1.55,0.6 -1.04,-0.36 -0.08,0.81 0.54,0.16 -0.37,0.91 -1.51,0.05 -0.66,-0.98 -1.17,0.09 -1.82,-2.71 -1.49,-1.07 0.31,-1.82 0.67,0.46 0.26,-1.12 -1.18,-1.47 -0.42,-1.45 -1.040004,-0.88 0,0 0.550004,-3.24 0.95,-1.47 5.65,-0.48 0,0 2.36,-0.91 0,0 0.79,-0.71 0,0 1.17,-1.81 0,0 0.55,-0.71 0,0 1.55,-0.41 2.31,0.45 0,0 2.58,-0.03 1.61,-0.83 0.92,-1.54 0.22,-1.56 0,0 -0.11,-3.18 0,0 -0.22,-10.27 0,0 0.84,-4.77 0,0 0.1,-0.74 0,0 0.25,-2.3 0,0 -1.12,-1.4 0,0 -3.17,-0.13 0,0 -0.74,-0.31 0,0 -1.79,-6.32 0,0 -1.8,-3.88 -3.72,-3.33 0,0 -2.17,-1.85 -0.67,-1.64 0,0 -0.54,-2.27 -0.73,-0.61 0,0 -2.23,-1.15 0,0 -4.010004,-2.52 -1.53,0.17 0,0 -1.95,1.78 -0.28,-1.56 0,0 -0.81,-3.12 -1.69,-3.17 0,0 -0.67,-1.68 0,0 0.16,-2.33 0,0 3.15,-5.54 0.26,-1.76 0,0 -0.36,-1.18 0,0 -1.54,-0.95 0,0 -4.78,-1.35 0,0 -1.6,-1.31 0,0 -1,-1.58 -0.69,-2.63 0.81,-8.93 0,0 -0.99,-4.2 0,0 -1.43,-1.38 0,0 -1.54,-0.18 0,0 -3.12,0.69 0,0 -0.81,-0.48 -0.09,-0.75 1,-1.47 0,0 3.12,-0.69 0,0 1.62,-0.43 0,0 1.67,-0.81 0,0 1.59,-0.57 0,0 3.22,-1.5 0,0 1.64,-1.06 0,0 0.76,-0.34 0,0 1.55,-0.39 0,0 3.96,1.66 0,0 2.360004,1.74 0,0 2.42,0.31 1.73,-0.42 5.85,-3.33 0,0 1.55,-0.46 0,0 0.78,0.31 0,0 1.11,1.52 0,0 0.8,3.16 0,0 0.56,1.68 0,0 2.45,4.27 0,0 1.09,1.55 0,0 0.81,0.56 0,0 1.52,0.26 0,0 5.38,0.24 1,1.24 0,0 -0.2,1.59 0,0 0.15,0.79 1.47,1.04 0,0 2.27,1.42 0,0 0.15,0.75 0,0 -0.43,2.4 0.19,0.75 0.74,0.34 0,0 0.75,-0.01 1.57,-1.19 0,0 1.54,-1.37 0,0 1.69,-1.29 1.65,-0.33 6.16,2.51 0.8,-0.64 -0.52,-1.5 0,0 -0.31,-1.5 0.42,-0.73 0.75,-0.04 0,0 1.28,1.18 0.96,3.08 0,0 2.36,0.83 0,0 2.36,0.58 2.27,1.43 0,0 1.52,1.23 0,0 2.42,1.83 2.26,0.41 0,0 6.57,-0.52 0,0 10.45,-2.02 0,0 1.53,-0.07 0,0 0.77,0.43 0,0 1.22,1.43 0,0 0.56,1.01 0,0 0.68,1.56 0.24,2.66 -0.75,2.42 -1.62,2.25 0,1.63 1.18,1.5 0.77,0.24 3.27,-0.84 0.73,0.25 0.36,0.79 -0.11,4.16 -1.9,10.91 2.08,9.8 -0.52,10.14 0.63,1.61 1.3,1.49 1.56,0.71 1.55,0.03 9.37,-3.24 8.06,-0.39 2.41,-1.18 3.87,-4.64 3.27,-1.25 6.68,-0.15 11.8,2.31 0,0 6.92,1.83 1.35,1.16 0.28,1.98 -0.57,11.32 1.74,2.02 5.3,1.39 1.41,1.13 3.15,10.79 4.08,3.38 0,0 -0.4,3.14 -2.95,4.25 0.94,3.6 -1.41,4.88 0.04,9.03 0,0 -5.05,-0.85 -3.23,1.03 -0.58,2.32 1.11,2.52 0.16,3.23 -0.69,2.21 -1.06,1.53 -11.75,5.84 -3.59,2.87 0.2,1.49 0.76,0.66 5.35,2.94 0.4,1.57 -0.56,0.76 -5.67,2.31 -2.45,1.77 -5.12,5.33 -9.34,7.12 -4.47,6.66 -1.62,0.02 -6.79,-2.21 -4.63,4.1 -2.33,1.12 -4.76,-0.56 -0.65,-1.58 0.83,-3.86 -0.45,-2.31 -2.09,-1.91 -3.98,-1.18 -0.59,-0.74 -0.06,-0.86 2.65,-6.92 -0.28,-3.25 -1.07,-1.39 -4.76,0.31 -10.44,3.25 -0.7,-0.58 -0.43,-3.86 -1.58,-0.37 -4.88,1.11 -1.55,-0.23 -1.67,-1.3 -3.42,-4.08 -2.42,-1.84 -2.12,-3.42 -0.82,-0.34 -3.08,0.92 -5.12,0.4 0,0 -0.21,0.03 0,0 -0.12,0.02 0,0 -0.64,-3.24 -1.32,-1.32 0.21,-1.05 -0.97,0.4 -0.65,-0.35 -0.13,0.75 0.84,0.4 -0.37,0.4 -0.86,-0.5 0.1,-1.51 -0.57,-1.35 0.13,-0.52 -0.78,-0.4 -0.7,-0.82 -0.95,-2.79 -0.01,-1.63 -1.02,-1.12 -0.92,-0.09 -0.87,-1.56 -2.41,-1.65 -0.58,-1.03 -0.44,-0.28 z" title="Al Madīnah" id="SA-03" class=" mapsvg-region r4" style="fill: #b6b6bd; stroke: rgb(247, 247, 247); stroke-width: 1.42235px;"></path>
                        <path d="m 545.08718,262.60041 1.22,0.53 0.35,2.07 -0.6,-1.32 -1.01,-0.6 0.04,-0.68 z m -8.35,-39.01 0.87,0.69 -0.05,1.6 -1.18,-1.16 -1.01,-0.12 0.21,-0.65 1.16,-0.36 z m -18.37,-29.14 1.75,1.05 4.11,1.08 -1.87,0.05 -0.52,-0.26 -2.37,0.75 -0.45,-0.6 0.45,-0.25 -0.11,-0.49 -1.17,-0.55 -2.13,2.34 0.34,0.57 -0.4,-0.13 -0.22,-0.78 0.55,-1.55 0.7,-0.87 1.34,-0.36 z m 19.57,33.55 0.38,0.99 0.46,-1.63 0.45,0.11 -0.06,2.39 0.79,0.44 1.19,-1.76 -0.36,-0.33 0.38,-1.81 0.25,0.39 0.12,1.06 0.38,-0.61 0.05,1.18 -0.98,0.58 0.08,1.05 -0.63,0.11 1.65,1.52 0.52,1.62 -0.54,4.1 0.45,0.68 -0.36,0.03 -0.1,1.48 -1,1.13 0.19,-0.78 -0.87,-1.22 -0.16,2.24 0.42,0.52 -0.83,2.12 0.19,1.3 -0.75,0.42 -2.62,-5.96 -0.76,-0.54 -0.52,0.32 -1.15,2.79 0.89,1.29 -0.52,0.67 0.04,3.02 0.61,0.16 0.8,-0.92 0.81,0.74 1.37,0.1 0.5,0.75 -0.15,0.79 0.63,0.57 -0.69,0.16 -0.37,1.04 1.28,2.91 1.81,2.68 1.09,0.66 0.7,2.02 0.75,0.4 -0.23,0.88 -0.41,0.18 -0.4,-1.47 -1.42,-0.33 -1,-1.47 -0.55,0.17 -0.47,-0.58 0.68,1.74 1.09,0.76 0.05,0.56 0.51,-0.72 0.22,0.28 0.24,1.8 1.28,1.16 0.67,1.46 1.26,0.44 0.07,1.1 2.04,2.54 0.4,0.04 -0.05,-1.1 -0.68,-0.91 0.66,-0.53 0.62,1.64 3.23,2.49 1.33,4.04 -0.34,2.41 1.25,2.03 -0.41,1.78 0.83,2.56 -0.27,0.88 0.89,0.45 -0.5,-0.65 0.32,-0.82 2.52,3.53 1.05,3.3 0.95,0.04 0.54,0.69 1.49,6.53 0.64,-1.84 1.58,-0.3 -0.25,0.48 1.08,2.13 3.69,4.38 4.58,0.8 2.45,-0.96 1.63,-1.8 1.16,0.39 1,-0.33 -0.1,0.51 0.6,0.44 0.76,-0.35 -0.66,1.28 0.13,2.42 1.45,-0.87 0.37,-1.39 1.6,-1.3 -0.09,-0.95 0.89,0.53 0.53,-0.43 0.41,1.64 1.03,-0.58 0.76,0.76 -0.62,0.64 -1.21,0.07 -0.54,0.95 -0.44,-0.16 -0.42,1.48 -3.07,2.44 -0.6,3.09 -0.56,0.13 0.13,1.7 2.24,0.42 0.9,-1.18 2.03,-0.18 1.67,0.66 1.51,2.12 1.63,-0.07 0.75,1.18 -0.51,4.23 34.3,41.63 23.79,4.76 59.71,13.76 7.05,-7.46 15.68,25.98 -22.97,73.24 -103.4,36.4 -39.96,7.94 -57.87,6.31 -32.09,15.68 -20.91,25.6 -4.87,12.21 -1.53,0.93 0,0 2.59,-24.45 7.99,-63.49 0,0 19.5,-152.83 0.02,-7.75 -1.36,-6.9 -2.96,-5.78 -1.67,-2.06 -9.19,-9.15 -9.44,-6.3 -2.29,-1.8 -1.12,-1.79 -0.68,-3.7 -0.34,-7.4 0.63,-15.07 -0.38,-22.62 -0.43,-4.96 -1.09,-2.56 -3.86,-2.08 -8.88,-3.17 -1.46,-2.52 -6.45,-6.08 -1.55,-0.22 -4.41,1.01 -2.35,-0.04 -2.5,-1.19 -9.86,-6.94 -3.01,-0.81 -5.64,-0.11 -2.35,-0.63 -4.06,-3.38 -3.46,-4.22 -5.74,-1.06 -10.41,-6.08 -1.23,-1.53 -1.41,-5.11 -2.12,-2.21 -3.32,-2.32 0,0 -1.47,-1.82 -0.38,-1.53 1.28,-4.67 9.15,-12.15 12.66,-23.67 8.26,-8.72 12.45,-4.39 0,0 5.1,0.13 2.64,-1.27 4.09,-3.16 31.35,4.11 0.87,0.67 3.36,5.38 0.61,2.55 0.22,4.61 3.53,4.7 -0.17,0.7 24.98,-0.43 1.18,1.14 1.28,0.47 -0.04,2.25 0.84,0.66 -0.18,0.34 0.85,0.15 -1.01,3.01 0.97,1.98 1.47,1.03 1.7,2.23 -0.69,0.53 -0.18,2.67 0.39,1 2.05,2.38 3.89,1.05 -0.77,0.92 -0.84,-0.08 0.08,1.05 1.59,1.81 1,0.1 0.05,1.35 2.03,1.26 -0.36,2.1 0.46,0.44 -0.08,0.47 -0.9,0.6 0,-0.89 -0.55,-0.04 0.29,-2 -0.72,1.02 -0.29,-1.41 -1.3,4.4 0.64,0.08 0.45,-1.25 0.35,2.38 0.64,-0.95 0.42,0.68 -0.34,1.18 1.07,-0.31 -0.32,0.58 -0.52,0.11 -0.05,0.82 -0.32,0.69 1.12,0.54 0.75,-1.32 0.63,0.19 -0.57,1.04 0.11,1.29 0.81,-0.41 -0.1,-1.04 1.56,-0.79 0.94,0.37 1.08,1.57 2.59,1.16 3.66,-0.06 1.69,0.83 0.61,1.33 1.12,0.63 0.2,1.82 -0.56,-0.15 0.25,-0.69 -0.36,-0.54 -0.71,1.15 -0.54,-0.61 -0.71,0.71 -0.75,-0.72 -0.74,0.47 -0.31,-0.45 -0.69,0.92 -0.82,-0.34 -0.33,0.73 0.41,-0.21 1.54,0.94 0.56,0.71 1.01,-0.24 -0.03,-1.05 1.36,0.77 -0.61,0.76 -0.73,0.07 0.32,0.92 -0.67,1.23 1.72,-1.09 1.62,0.54 -0.01,3.71 0.67,1.13 0.54,0.02 0.42,-0.06 0.53,-0.23 1.14,0.57 -0.48,1.89 -0.65,-0.23 -0.44,0.41 0.51,0.01 -0.2,0.56 0.76,-0.31 0.53,1.03 0.67,-1.73 0.5,0.35 -0.15,1.06 1.2,-0.66 1.46,0.51 -0.89,-1.68 1.27,-1.31 -1.73,-1.58 -0.68,0.08 0.65,-1.04 -0.21,-0.53 0.74,-0.47 0.46,1.97 1.11,0.06 0.23,1.5 -0.74,0.31 0.97,0.96 0.9,-0.7 0.59,-2.69 0.97,-1.31 -0.99,2.95 -0.44,1.56 -0.63,0.96 0.55,1.96 1.17,1.16 2.4,-1.43 1.07,0.41 -0.03,0.09 -0.49,-0.01 -0.09,0.04 -0.27,0.47 -0.27,-0.47 -2.28,1.16 0.96,1.23 1.49,-0.36 -0.16,0.73 -0.56,0.02 0.02,1.19 0.71,0.03 0.24,0.85 0.13,0.2 2.3,1.81 0.37,0.11 1.21,0.73 1.13,0.37 0.79,0.61 2.98,0.3 2.07,2.21 4.49,5.29 0.49,0.45 0.41,0.4 -0.59,0.09 -1.3,-1.73 -1.68,-0.43 -0.98,0.68 -1.23,-1.95 -0.06,-0.88 -0.47,2.24 0.15,0.95 0.81,0.2 -0.35,1.09 0.31,2.66 0.93,2.33 1.41,1.84 0.1,-1.15 0.31,-0.31 z" title="Ash Sharqīyah" id="SA-04" class=" mapsvg-region r7" style="fill: #b6b6bd; stroke: rgb(247, 247, 247); stroke-width: 1.42235px;"></path>
                        <path d="m 238.57718,264.11041 1.2,-1.37 4.95,-0.74 6,-3.57 5.95,-0.77 0.81,-0.65 0.05,-0.82 -2.4,-4.78 0.32,-2.44 1.26,-1.51 0.86,-0.19 3.95,1.42 2.43,0.25 0.47,-0.77 -0.82,-6.33 1.89,-4.8 0.77,-0.41 1.6,0.52 3.32,-0.78 0.87,-4.3 4.75,-4.83 11.89,-9.24 11.31,-5.23 2.76,-5.79 2.72,-2.76 14.5,-7.43 4.15,-1.34 2.37,0.86 4.44,4.49 5.99,4.12 7.47,0.54 5.05,-5.84 0,0 2.35,0.93 3.6,2.99 1.34,2.5 0.15,2.5 -0.62,1.48 -4.18,1.84 -2.46,2.11 -4.5,5.87 -4.01,1.1 0.43,5.12 -0.84,5.74 0.49,1.52 3.6,3.57 6.69,10.16 0.14,0.86 -1.08,2.91 2.52,4.86 0.31,3.16 -0.84,3.9 -5.53,-0.22 -7.2,0.68 -8.3,-1.06 -3.13,0.82 -2.02,1.97 -2.28,4.47 -3.09,1.74 -2.84,2.81 -12.88,3.15 -3.27,2.52 -5.42,6.69 -0.15,2.3 1.91,3.83 -0.85,2.18 -2.43,1.79 -5.69,-0.87 -5.67,0.89 -5.73,-0.5 -3.87,-0.81 -5.17,-2.55 -1.5,-0.12 -2.17,1.58 -3.04,5.08 0,0 -4.08,-3.38 -3.15,-10.8 -1.4,-1.13 -5.31,-1.39 -1.74,-2.01 0.58,-11.32 -0.28,-1.98 -1.35,-1.16 z" title="Al Qaşīm" id="SA-05" class=" mapsvg-region r6" style="fill: #c5c5cc; stroke: rgb(247, 247, 247); stroke-width: 1.42235px;"></path>
                        <path d="m 183.65718,221.36041 1.99,-2.39 2.34,-7.76 3.13,-3.74 0,0 4.44,-4.13 0.29,-2.41 0,0 -0.36,-0.76 0,0 -2.95,-1.84 0,0 -0.82,-0.36 0,0 -3.73,-2.16 -1.4,-3.91 0,0 -0.14,-0.92 0,0 -0.39,-1.63 0,0 -2.24,-9.37 -1.05,-2.51 0,0 -1.4,-1.64 -2.37,-0.99 0,0 -0.77,-0.46 -1.33,-2.43 -0.75,-0.31 0,0 -2.31,-0.67 0,0 -1.3,-1.59 0,0 -2.94,-2.27 -4.95,-1.3 0,0 -1.54,-0.24 0,0 -4.08,-0.72 0,0 -2.36,-0.52 -1.13,-1.33 0,0 3.69,-4.2 6.27,-3.54 9.93,-4.38 4.29,-0.69 13.07,-7.6 12.9,-5.53 3.04,0.66 0,0 4.38,1.9 2.37,0.37 20.96,-4.87 12.17,3.53 4.76,-1.35 4.45,-0.36 14.47,3.51 2.37,1.99 4.2,5.16 2.52,1.46 3.99,-0.21 4.62,-2.48 2.68,-0.47 0.67,0.8 0.88,6.22 1.42,1.46 0.96,0.31 6.49,-0.31 6,3.12 2.52,-0.84 5.05,-3.38 1.57,-0.21 1.58,1.23 1.08,1.62 5.28,9.66 2.78,7.7 2.02,2.48 2.44,1.44 9.98,1.29 3.28,1.26 1.62,0.95 6.08,5.52 1.03,1.87 0,0 -3.15,1.64 -2.42,3.32 -0.99,3.1 -0.06,1.59 0.68,1.88 0,0 -5.05,5.84 -7.47,-0.54 -5.99,-4.12 -4.44,-4.49 -2.37,-0.86 -4.15,1.34 -14.5,7.43 -2.72,2.76 -2.76,5.79 -11.31,5.23 -11.89,9.24 -4.75,4.83 -0.87,4.3 -3.32,0.78 -1.6,-0.52 -0.77,0.41 -1.89,4.8 0.82,6.33 -0.47,0.77 -2.43,-0.25 -3.95,-1.42 -0.86,0.19 -1.26,1.51 -0.32,2.44 2.4,4.78 -0.05,0.82 -0.81,0.65 -5.95,0.77 -6,3.57 -4.95,0.74 -1.2,1.37 0,0 -11.8,-2.31 -6.69,0.15 -3.27,1.25 -3.87,4.64 -2.41,1.18 -8.06,0.39 -9.37,3.24 -1.55,-0.03 -1.56,-0.7 -1.3,-1.49 -0.63,-1.61 0.51,-10.14 -2.07,-9.81 1.9,-10.9 0.12,-4.16 -0.37,-0.79 -0.73,-0.24 -3.27,0.83 -0.76,-0.24 -1.18,-1.5 0,-1.62 1.62,-2.26 0.74,-2.41 -0.24,-2.66 z" title="Ḩā'il" id="SA-06" class=" mapsvg-region r5" style="fill: #d2d2db; stroke: rgb(247, 247, 247); stroke-width: 1.42235px;"></path>
                        <path d="m 89.197176,284.95041 1.2,0.84 0,0.66 -1.49,-0.68 0.29,-0.82 z m -7.94,-17.27 0.92,0.6 0.42,-0.21 0.96,2.68 -0.7,0 0.08,-1.17 -2.04,-1.11 0.36,-0.79 z m 4.56,-1.3 0.65,0.16 0.38,1.27 0.55,-0.18 -0.26,0.83 -0.21,-0.47 -1.25,0.04 0.41,-1.09 -0.67,-0.43 0.4,-0.13 z m -0.81,-1.47 0.9,0.87 -1.33,-0.1 0.43,-0.77 z m -3.62,-2.17 0.56,0.93 -0.85,0.56 -0.43,-0.67 0.72,-0.82 z m 2.01,-0.4 0.94,2.34 -1.03,-0.85 0.09,-1.49 z m 0.41,-0.85 0.41,0.44 -0.26,0.62 -0.63,-0.79 0.48,-0.27 z m -14.24,-2.19 1.39,1.61 -1.55,0.1 -0.63,-1.01 0.79,-0.7 z m 2.62,-1.99 0.67,0.53 -0.74,0.07 -1.33,-1.36 -0.02,-1.67 0.47,1.79 1.05,-0.63 -0.1,1.27 z m -65.0999998,-86.2 0.88,0.19 0.6,1.53 -1.02,0.43 -0.73,-1.53 -0.45,0.03 -0.06,0.82 -0.6,-0.11 0.24,-0.9 1.14,-0.46 z m -5.35,-2.13 0.48,0.71 -1.23,0.49 -0.45,-0.32 0.02,0.38 1.1,0.84 1.93,-0.34 -0.1,0.81 1.17,1.07 -2.38,0.35 -1.67,-1.25 -0.33,-2.16 1.46,-0.58 z m 47.9399998,-37.38 5.08,1.55 0,0 2.51,1.93 1.99,2.37 0,0 1.17,1.64 0,0 6.23,8.13 0,0 1.72,0.64 1.81,-0.32 0,0 3.28,-1.38 4.39,-1.03 0,0 4.46,-0.83 0,0 5.16,0.72 4.62,1.8 8.550004,0.72 0,0 1.57,-0.57 0,0 2.58,-6.05 0,0 1.26,-1.48 0,0 1.58,-0.72 0,0 2.87,-2.88 0,0 0.77,-0.41 1.57,0.95 0,0 0.46,1.64 0,0 -0.45,7.19 0.31,4.39 0,0 0.57,2.64 0,0 0.75,1.64 0,0 3.48,3.55 2.42,1.21 0,0 3.31,1.1 0,0 10.14,1.18 0,0 2.4,-1.75 0.79,-0.04 0,0 1.54,1.26 0,0 0.78,0.47 0,0 1.64,-0.31 0,0 0.75,0.21 0.79,2.47 1.29,1.08 0,0 1.73,-0.09 3.56,-1.88 0,0 3.39,-0.99 1.64,0.49 1.4,1.22 0,0 1.13,1.32 2.36,0.52 0,0 4.08,0.72 0,0 1.54,0.24 0,0 4.95,1.31 2.94,2.27 0,0 1.3,1.6 0,0 2.31,0.67 0,0 0.75,0.31 1.33,2.42 0.78,0.46 0,0 2.36,0.99 1.41,1.64 0,0 1.04,2.51 2.24,9.37 0,0 0.39,1.63 0,0 0.14,0.92 0,0 1.4,3.91 3.73,2.15 0,0 0.81,0.36 0,0 2.96,1.84 0,0 0.35,0.76 0,0 -0.29,2.41 -4.44,4.13 0,0 -3.13,3.74 -2.33,7.77 -1.99,2.39 0,0 -0.56,-1.01 0,0 -1.22,-1.43 0,0 -0.77,-0.43 0,0 -1.53,0.08 0,0 -10.45,2.03 0,0 -6.57,0.52 0,0 -2.26,-0.4 -2.42,-1.83 0,0 -1.52,-1.23 0,0 -2.27,-1.43 -2.36,-0.58 0,0 -2.35,-0.83 0,0 -0.96,-3.08 -1.28,-1.17 0,0 -0.75,0.04 -0.42,0.73 0.31,1.51 0,0 0.52,1.5 -0.8,0.64 -6.15,-2.51 -1.65,0.33 -1.68,1.29 0,0 -1.54,1.37 0,0 -1.57,1.19 -0.75,0.01 0,0 -0.74,-0.34 -0.19,-0.75 0.43,-2.4 0,0 -0.15,-0.75 0,0 -2.27,-1.42 0,0 -1.47,-1.04 -0.15,-0.79 0,0 0.2,-1.59 0,0 -1,-1.24 -5.38,-0.23 0,0 -1.52,-0.26 0,0 -0.81,-0.56 0,0 -1.09,-1.55 0,0 -2.45,-4.27 0,0 -0.56,-1.68 0,0 -0.8,-3.16 0,0 -1.11,-1.52 0,0 -0.77,-0.31 0,0 -1.55,0.46 0,0 -5.85,3.33 -1.73,0.42 -2.42,-0.31 0,0 -2.350004,-1.74 0,0 -3.96,-1.66 0,0 -1.55,0.39 0,0 -0.76,0.34 0,0 -1.64,1.06 0,0 -3.22,1.5 0,0 -1.59,0.57 0,0 -1.67,0.81 0,0 -1.62,0.43 0,0 -3.12,0.69 0,0 -1,1.47 0.09,0.75 0.81,0.48 0,0 3.12,-0.68 0,0 1.54,0.18 0,0 1.43,1.38 0,0 0.99,4.2 0,0 -0.81,8.93 0.69,2.63 1,1.58 0,0 1.6,1.31 0,0 4.78,1.35 0,0 1.54,0.95 0,0 0.36,1.18 0,0 -0.26,1.76 -3.15,5.54 0,0 -0.16,2.33 0,0 0.67,1.68 0,0 1.69,3.17 0.81,3.12 0,0 0.28,1.56 1.95,-1.78 0,0 1.53,-0.17 4.010004,2.52 0,0 2.23,1.16 0,0 0.73,0.62 0.54,2.27 0,0 0.67,1.64 2.17,1.85 0,0 3.72,3.33 1.8,3.88 0,0 1.79,6.32 0,0 0.74,0.31 0,0 3.17,0.13 0,0 1.12,1.4 0,0 -0.25,2.3 0,0 -0.1,0.74 0,0 -0.84,4.77 0,0 0.22,10.27 0,0 0.12,3.18 0,0 -0.22,1.56 -0.92,1.54 -1.61,0.83 -2.58,0.03 0,0 -2.31,-0.45 -1.55,0.41 0,0 -0.55,0.71 0,0 -1.17,1.81 0,0 -0.79,0.71 0,0 -2.36,0.91 0,0 -5.65,0.48 -0.95,1.47 -0.550004,3.24 0,0 -1.62,-2.9 0.14,-0.69 -0.84,0.33 -0.56,-1.64 -2.78,-1.51 0.33,-0.45 -0.77,-1.66 0.84,0.07 -0.05,-1.24 -0.92,-0.35 0.42,0.41 -0.78,0.58 -1.33,-1.78 0.74,-0.6 1.35,0.3 -0.89,0.44 1.2,0.37 0.35,-1.18 1.15,-0.94 -0.69,-1.49 1.33,-3.11 -1.45,-2.83 0.79,-1.46 -0.59,-2.62 -4.67,-5.22 -1.37,-3.49 0.09,-1.57 -2.7,-2.19 0.04,-1.78 -0.93,-0.25 -0.22,-2.07 -1.07,-1.57 -2.11,-0.91 -2.23,-3.18 -0.39,0.01 0.53,1.51 -0.37,0.18 -0.61,-0.06 -0.53,-0.89 -0.9,-0.06 -1.1,-0.86 0.18,-1.06 -0.49,0.39 -0.45,-0.52 -0.58,-1.92 -0.96,-0.3 1.62,-2.56 0.64,-2.31 -0.24,-1.94 -1.79,-1.12 -2.77,-0.16 -0.28,-0.17 -2.35,-1.96 -1.09,-3.69 -3.07,-4.99 -2.17,-5.7 -2.64,-4.47 -2.02,-2.17 -1.02,-1.98 -1.75,-0.97 -1.79,-4.21 -0.16,-1.73 -3.01,-3.32 -1.93,-1.1 -0.29,-0.81 -3.08,-3.08 -0.43,-2.1 1.01,-1.06 -0.31,-1.15 -2.3,-3.78 -2.56,-1.31 -2.59,-2.96 -0.18,-1.36 -1.79,-2.4 -0.4,-3.1 -1.48,-1.89 -0.38,-1.99 -1.02,-1.86 -0.85,-0.86 -1.85,-0.56 -0.19,-2.51 -2.49,-2 -0.65,-1.62 -3.32,-1.72 -0.19,-0.58 2.18,-0.65 -0.07,-0.59 -2,-0.36 -0.68,-0.59 -1.3,0.06 -1.7,-1.66 -0.56,0.22 -0.9,-0.6 0,0.26 0.51,0.81 -1.1,-0.65 -2.4,1.32 -2.25,-0.17 -0.53,0.41 -0.23,-0.96 1.02,-0.56 -1.66,0.11 -0.58,1.35 -0.27,-0.42 0.64,-1.12 -0.56,0.08 -0.54,0.73 -1.0199998,-0.16 0.44,1.27 -0.96,0.02 0.44,-1.68 -1.35,-0.19 0.32,-0.33 -0.44,-0.83 -0.25,0.49 -0.72,-0.3 -1.13,1.56 0.59,1.1 -0.68,0.14 -0.71,1.44 -0.78,-1.45 0.2,-1.28 -0.53,-0.22 -0.75,0.5 0.01,-0.79 1.96,-2.53 0.97,0.36 -0.42,-1.04 0.6,-0.43 0.76,-2.54 -0.34,-0.08 3.31,-8.17 1.1499998,-1.73 -0.27,-3.51 -0.7699998,-1.93 1.9199998,-5.76 0.03,-2.95 0,0 3.23,0.16 1.64,-0.61 2.49,0.78 0,0 5.25,0.69 0,0 1.92,-0.12 2.31,-2.25 0,0 3.26,-0.84 0,0 6.03,-1.09 0,0 2.35,0.22 0,0 3.31,-0.69 0,0 3.38,-0.17 0,0 2.61,0.51 z" title="Tabūk" id="SA-07" class=" mapsvg-region r3" style="fill: #c5c5cc; stroke: rgb(247, 247, 247); stroke-width: 1.42235px;"></path>
                        <path d="m 403.89718,130.68041 -12.46,4.39 -8.25,8.72 -12.66,23.68 -9.15,12.15 -1.29,4.67 0.39,1.52 1.47,1.83 0,0 -1.3,2.23 -1.8,0.86 -1.51,-0.52 -1.94,-2.12 0,0 -1.03,-1.87 -6.08,-5.52 -1.62,-0.95 -3.28,-1.26 -9.98,-1.29 -2.44,-1.44 -2.02,-2.48 -2.78,-7.7 -5.28,-9.66 -1.08,-1.62 -1.58,-1.23 -1.57,0.21 -5.05,3.38 -2.52,0.84 -6,-3.12 -6.49,0.31 -0.96,-0.31 -1.42,-1.46 -0.88,-6.22 -0.67,-0.8 -2.68,0.47 -4.62,2.48 -3.99,0.21 -2.52,-1.46 -4.2,-5.16 -2.37,-1.99 -14.47,-3.51 -4.45,0.36 -4.76,1.35 -12.17,-3.53 -20.96,4.87 -2.37,-0.37 -4.38,-1.9 0,0 5.62,-5.69 0.89,-6.06 0.39,-9.36 1.4,-2.47 6.16,-4.72 27.27,-16.849995 5.26,-4.73 -0.1,-1.57 -7.78,-6.26 -3.13,-6.39 -2.09,-2.5 -3.6,-1.59 -5.45,0.04 -3.23,-0.65 -7.57,-6.08 -2.7,-1.26 -7.01,0.88 -17.95,-0.62 -3.7,-1.12 -3.98,-3.44 -1.78,-0.77 -4.38,-0.08 -19.01,-3.45 -8.05,0.14 -7.25,1.36 -13.58,1.49 -3.42,-0.04 -2.31,-0.62 -2.19,-1.9 -3.89,-6.96 -4.7,-3.69 -0.58,-6.72 2.84,-8.34 1.27,-6.06 0,0 35.03,-10.31 10.52,-9.1700004 -0.45,-2.01 1.16,1.54 2.33,1.41 18.56,5.42 6.07,2.8400004 3.42,2.31 88.69,62.66 66.05,45.649995 7,1.62 z" title="Al Ḩudūd ash Shamālīyah" id="SA-08" class=" mapsvg-region r1" style="fill: #c5c5cc; stroke: rgb(247, 247, 247); stroke-width: 1.42235px;"></path>
                        <path d="m 260.53718,593.84041 0.42,0.19 0.18,-0.09 0.34,0.26 -0.65,1.12 -0.68,-0.76 0.39,-0.72 z m -0.48,-3.22 0.36,0.53 -0.42,1.5 -0.08,-0.96 -0.49,0.77 -0.56,-1.17 0.35,-0.56 0.84,-0.11 z m -6.48,-0.49 1.42,1.06 -0.8,-0.19 -0.62,-0.87 z m -3.48,-2.47 1.93,0.5 1.13,1.63 -3.2,-1.03 -0.65,-0.76 0.79,-0.34 z m 9.66,-3.75 0.49,0.34 -1.62,0.14 1.13,-0.48 z m -9.18,-1.81 3.17,1.84 1.47,3.11 2.35,0.67 1.59,-0.36 0.99,1.34 1.6,-0.47 -0.28,-0.9 -0.44,-0.07 0.28,0.62 -0.84,0.04 -0.43,-0.61 0.52,-0.58 0.1,-1.28 0.59,0.1 0.18,-0.63 0.86,0.1 0.21,1.43 0.76,1.02 0.42,-0.08 0.59,1 0.91,-0.21 0.03,0.51 0.47,-0.06 -0.08,0.94 -0.62,0.65 0.44,2.97 -0.93,0.11 -1.24,-1.42 -1.81,-0.37 1.24,-0.6 -0.09,-1.26 -1.8,-0.44 -3.04,0.93 -1.97,-1.64 -1.14,-0.32 -1.19,-1.03 -0.96,-1.9 -1.33,-0.03 0.46,-1.25 -1,-0.81 -0.04,-1.06 z m -6.47,-0.16 2.05,3.05 -1.59,-0.6 0.21,-0.33 -0.75,-0.69 0.08,-1.43 z m 11.93,-2.08 1.14,0.78 -0.56,0.94 0.58,0.92 1.38,0.42 -0.13,0.87 -1.3,-0.32 -0.74,0.59 2.19,1.66 0.74,1.04 -0.28,0.45 -0.76,-1.15 -3.02,-1 -1.83,-2.61 0.01,-1.08 1.64,-0.2 0.94,-1.31 z m -8.03,-0.22 1.51,1.1 -0.69,1.16 -1,0.31 -0.94,-1.16 1.12,-1.41 z m 3.62,-0.86 1.13,0.65 -0.47,0.57 -0.44,-0.06 -0.22,-1.16 z m 5.16,0.24 0.42,1.41 -2.06,-2.08 1.64,0.67 z m -5.78,-47.93 4.46,-0.47 1.26,1.03 -0.82,7.27 0.28,1.5 0.74,0.47 2.95,-0.45 2.15,0.23 1.08,1.35 0.85,2.89 0.73,0.64 8.28,0.4 1.28,1.24 1.59,3.73 3.25,3.17 1.52,0.63 1.41,-0.14 0.56,-0.66 1.67,-6.75 1.21,-2.1 2.87,-2.16 2.21,-0.88 1,1.12 -0.13,4.42 3.6,1.82 2.64,4.64 0.69,0.57 2.95,0.6 1.98,3.01 0,0 0.97,1.39 -1.92,2.92 0.09,2.37 1.55,0.9 0,0.65 0.81,0.35 0.26,0.69 -4.49,1.41 0.42,1.87 -1.52,1.37 0.05,1.45 -0.62,0.32 -0.06,0.88 0.09,0.35 0.98,-0.4 1.63,0.48 0.82,1.64 -0.55,0.91 -2.27,-0.26 0.26,2.81 -1.5,0.7 -0.04,0.6 1.45,1.89 1.55,0.34 0.33,0.83 1.01,0.48 -0.22,1.26 0.48,0.86 -1.43,0.11 -0.32,0.81 0.49,2.6 -0.84,0.15 -2.07,-1.11 -0.66,0.18 0.44,0.9 -1.03,2.74 0.05,1.06 -4.42,1.16 -1.67,1.19 0.42,2.71 -1.71,0.38 -4.82,-0.49 -0.34,-0.69 0.6,-1.77 -1.21,-1.16 -0.84,-2.21 0.56,-3.56 -0.33,-0.29 -0.47,-0.6 0,-0.93 0.01,-0.57 -2.51,-3.11 -1.41,-0.69 -0.64,0.25 -0.39,-1.35 -0.51,-0.19 -0.69,-0.31 1.07,-0.96 -0.53,-1.39 0.31,-1.85 -1.37,-1.12 -2.17,-0.67 -1.33,-1.88 0.23,-1.83 -0.46,-0.18 -1.12,-0.67 -0.26,0.3 1.13,1.95 -0.66,0.66 0.05,1.98 -0.3,0.95 -0.18,-3.73 -0.98,-3.19 -0.53,-4.16 -0.56,-0.31 0.66,-2.11 -0.29,-1.63 -1.44,-0.38 -1.57,-2.47 -1.97,-1.51 -0.98,0.05 -0.2,-1.49 -0.79,-0.94 -7.32,-5.21 -0.65,-1.03 -1.45,-0.33 -1.24,-1.02 -1.05,-0.03 0.19,-0.8 -3.78,-3.48 0.69,-0.01 -1.01,-0.91 0.26,-1.07 -0.59,0.79 -0.49,-0.33 -0.12,-0.55 0.59,-0.18 -0.22,-1.01 -1.39,-0.54 -0.76,-1.79 0,0 1.97,-3.15 3.55,-2.05 0.98,-2.11 z" title="Jīzān" id="SA-09" class=" mapsvg-region r13" style="fill: #a6a6ad; stroke: rgb(247, 247, 247); stroke-width: 1.42235px;"></path>
                        <path d="m 399.93718,569.40041 -17.23,-2.36 -6.25,-0.42 -6.25,-4.03 -19.73,0 -1.39,0.98 -1.95,0.27 -2.64,-1.39 -2.7,0.12 -8.79,1.12 -0.82,1.52 -1.08,-1.34 -2.95,0.53 -1.37,1.92 -2.61,-0.72 -1.6,0.43 -1.97,-0.29 -0.68,-0.89 -2.02,0.36 -2.59,-2.7 0.07,-1.04 0,0 1.15,-3.24 -1.3,-5.93 0.67,-1.47 0.77,-8.37 -1.38,-6.12 0.08,-1.66 0.88,-1.69 3.08,-3.43 8.21,-7.56 1.08,-1.48 1.06,-3.02 0.95,-1.05 6.32,-2.02 2.38,-1.42 1.22,-1.41 0.97,-2.22 0.17,-2.12 -1.76,-8.57 0.69,-1.59 3.85,-1.94 1.12,-1.39 0.04,-6.08 0,0 8.51,5.59 5.22,2.39 3.24,0.72 8.85,0.7 58.85,-5.04 16.39,-2.39 10.13,-2.63 0,0 -7.99,63.49 -2.59,24.45 0,0 -7.48,4.72 -7.03,-0.36 -8.18,-11.04 -10.7,1.53 z" title="Najrān" id="SA-10" class=" mapsvg-region r12" style="fill: #c5c5cc; stroke: rgb(247, 247, 247); stroke-width: 1.42235px;"></path>
                        <path d="m 260.01718,447.12041 -2.15,6.42 0.23,0.79 2.05,1.97 0.11,1.59 -1.04,1.45 -5.82,3.97 -0.84,1.79 0.23,3.55 -4.26,8.69 0,0 -0.79,0.51 -4.62,0.04 -1.52,0.58 -2.4,4.46 -2.58,8.99 -2.21,1.08 -2.58,0 -1.59,-1.05 -2.06,-3.06 -3.68,-2.13 -1.3,-1.54 0.26,-4.43 -0.91,-3.89 0.31,-5.29 -0.97,-1.52 -3.65,-1.1 -0.67,-0.7 -0.18,-1.41 4.01,-4.1 7.73,-1.86 1.37,-3.56 2.69,-4.63 0.12,-2.35 -1.11,-4.55 0.7,-2.11 1.36,-1.42 2.26,-0.31 1.43,0.61 1.21,1.45 1.28,3.78 1.92,1.46 4.61,-1.77 4.17,0.2 5.41,-2.75 1.49,0.22 z" title="Al Bāḩah" id="SA-11" class=" mapsvg-region r10" style="fill: #a6a6ad; stroke: rgb(247, 247, 247); stroke-width: 1.42235px;"></path>
                        <path d="m 13.437176,126.05041 0.66,-2.82 0.74,-0.76 -0.18,-0.82 1.04,-0.61 -0.48,-1.92 0.81,-0.46 -0.24,-0.86 0.61,-1.36 38.21,6.79 14.65,-12.07 8.85,-14.779995 25.760004,-5.16 5.78,-13.18 11.32,-6.78 -34.260004,-39.72 33.690004,-9.9 0,0 -1.27,6.06 -2.84,8.34 0.58,6.72 4.7,3.69 3.89,6.96 2.19,1.9 2.31,0.62 3.42,0.04 13.58,-1.49 7.25,-1.36 8.05,-0.14 19.01,3.45 4.38,0.08 1.78,0.77 3.98,3.44 3.7,1.12 17.95,0.62 7.01,-0.88 2.7,1.26 7.57,6.08 3.23,0.65 5.45,-0.04 3.6,1.59 2.09,2.5 3.13,6.39 7.78,6.26 0.1,1.57 -5.26,4.73 -27.27,16.849995 -6.16,4.72 -1.4,2.47 -0.39,9.36 -0.89,6.06 -5.62,5.69 0,0 -3.04,-0.66 -12.9,5.53 -13.07,7.6 -4.29,0.69 -9.93,4.38 -6.27,3.54 -3.69,4.2 0,0 -1.41,-1.21 -1.63,-0.49 -3.39,1 0,0 -3.56,1.88 -1.73,0.08 0,0 -1.3,-1.08 -0.78,-2.47 -0.75,-0.21 0,0 -1.64,0.32 0,0 -0.77,-0.47 0,0 -1.54,-1.26 0,0 -0.8,0.04 -2.4,1.75 0,0 -10.13,-1.18 0,0 -3.32,-1.1 0,0 -2.42,-1.21 -3.47,-3.55 0,0 -0.75,-1.63 0,0 -0.57,-2.65 0,0 -0.31,-4.39 0.45,-7.19 0,0 -0.46,-1.64 0,0 -1.57,-0.94 -0.77,0.41 0,0 -2.87,2.88 0,0 -1.58,0.72 0,0 -1.26,1.47 0,0 -2.58,6.06 0,0 -1.57,0.57 0,0 -8.550004,-0.71 -4.62,-1.8 -5.16,-0.72 0,0 -4.47,0.84 0,0 -4.39,1.03 -3.28,1.37 0,0 -1.81,0.33 -1.72,-0.64 0,0 -6.23,-8.13 0,0 -1.17,-1.64 0,0 -1.99,-2.37 -2.51,-1.93 0,0 -5.08,-1.54 0,0 -2.61,-0.51 0,0 -3.38,0.17 0,0 -3.31,0.69 0,0 -2.35,-0.22 0,0 -6.03,1.09 0,0 -3.27,0.83 0,0 -2.3,2.26 -1.93,0.12 0,0 -5.24,-0.69 0,0 -2.49,-0.78 -1.64,0.61 -3.23,-0.16 0,0 0.39,-2.96 0.64,-1.27 -0.41,-1.66 0.82,-1.35 z" title="Al Jawf" id="SA-12" class=" mapsvg-region r2" style="fill: #b6b6bd; stroke: rgb(247, 247, 247); stroke-width: 1.42235px;"></path>
                        <path d="m 303.24718,558.19041 -1.98,-3.01 -2.95,-0.6 -0.68,-0.57 -2.65,-4.63 -3.6,-1.82 0.14,-4.42 -1,-1.12 -2.21,0.88 -2.87,2.16 -1.21,2.1 -1.66,6.75 -0.57,0.66 -1.4,0.14 -1.52,-0.63 -3.25,-3.16 -1.59,-3.73 -1.28,-1.24 -8.28,-0.4 -0.73,-0.64 -0.85,-2.89 -1.08,-1.35 -2.16,-0.23 -2.94,0.45 -0.74,-0.47 -0.28,-1.5 0.83,-7.27 -1.27,-1.03 -4.46,0.47 0,0 1.5,-6.41 -2.97,-9.14 -2.11,-1.2 -6.71,-0.21 -1.43,-0.49 -1.03,-1.47 -0.61,-2.97 0.49,-10 1.97,1.88 0.75,-0.06 3.87,-2.82 2.24,-0.38 4.74,0.44 1.52,-0.75 0.76,-1.42 1.27,-4.6 -2.19,-4.44 1.31,-6.92 -0.21,-1.51 -1.85,-1.89 -2.29,-0.13 -1.5,0.74 0,0 4.26,-8.69 -0.23,-3.55 0.84,-1.79 5.82,-3.97 1.04,-1.45 -0.11,-1.59 -2.05,-1.97 -0.23,-0.79 2.15,-6.42 0,0 4.67,9.08 1.4,1.02 2.28,0.24 2.31,-1.13 10.11,-9.25 6.41,-3.06 4.26,-3.8 4.55,-0.28 3.16,-1.52 2.26,-0.24 5.21,1.3 5.72,-3.77 4.02,-1.46 0,0 5.76,5.01 3.07,4.93 3.6,3.6 1.06,1.73 -0.08,2.96 -3.34,6.09 -1.23,6.11 0.22,1.6 2.75,2.96 3.91,6.36 13.54,12.09 0,0 -0.04,6.08 -1.12,1.39 -3.85,1.94 -0.69,1.59 1.76,8.57 -0.17,2.12 -0.97,2.22 -1.22,1.41 -2.38,1.42 -6.32,2.02 -0.95,1.05 -1.06,3.02 -1.08,1.48 -8.21,7.56 -3.08,3.43 -0.88,1.69 -0.08,1.66 1.38,6.12 -0.77,8.37 -0.67,1.47 1.3,5.93 -1.15,3.24 0,0 -0.11,1.8 -2.37,-2.3 -5.29,-3.37 -2.46,-0.34 z" title="'Asir" id="SA-14" class=" mapsvg-region r11" style="fill: #b6b6bd; stroke: rgb(247, 247, 247); stroke-width: 1.42235px;"></path>
                    </svg>

                </div>

                <a href="https://www.google.com/maps/d/u/0/viewer?mid=1XZR_AJK0LcctKT5Qv26BsCbqi8LLWQzm&ll=25.297855610388922%2C47.217661169921946&z=9" target="_blank">
                    <span class="about-authority__map-pin" id="pin-1"></span>
                </a>

                <a href="https://www.google.com/maps/d/u/0/viewer?mid=1XZR_AJK0LcctKT5Qv26BsCbqi8LLWQzm&ll=25.297855610388922%2C47.217661169921946&z=9" target="_blank">
                    <span class="about-authority__map-pin" id="pin-2"></span>
                </a>

            </div>

        </div>
    </div>
</section>