<?php
/**
 * Template Name: eServices Page
 */

get_header(); ?>

<?php
get_template_part( 'template-parts/component/eservices_header' );
?>

<section class="eservices">
    <div class="container">
        <div class="row">
            <div class="eservices__nav col-lg-9">
                <a class="eservices__button about-authority__link">All eServices</a>
                <a class="eservices__button about-authority__link">Permits</a>
                <a class="eservices__button about-authority__link">Partnership</a>
                <a class="eservices__button about-authority__link">Investment</a>
                <a class="eservices__button about-authority__link">Events</a>
            </div>

            <div class="eservices__search col-lg-3">
                <input class="eservice__input" type="text" placeholder="Search">
                <button class="eservice__search-button"><i class="icon-search"></i></button>
            </div>
        </div>
    </div>
</section>

<style>
    .eservices {
        min-height: 500px;
    }

    .eservices__nav,
    .eservices__search {
        margin-top: 40px;
    }

    .eservices__nav a {
        background-color: transparent !important;
        color: #6E6E74;
        font-weight: 400;
        width: auto !important;
        margin: 0 10px;
        cursor: pointer;
        height: 50px;
        padding: 17px;
    }

    input.eservice__input {
        position: relative;
        width: 100%;
        height: 50px;
        border-radius: 5px 0 0 5px;
    }

    .eservice__search-button {
        position: absolute;
        right: 15px;
        width: 50px;
        background-color: #fb8c05;
        border: 0;
        border-radius: 0 5px 5px 0;
        height: 50px;
        margin-left: -5px;
    }

    i.icon-search {
        color: #fff;
    }

    .rtl input.eservice__input {
        border-radius: 0px 5px 5px 0;
    }

    .rtl .eservice__search-button {
        left: 15px;
        right: inherit;
        border-radius: 5px 0 0 5px;
    }

    @media only screen and (max-width: 992px) {
        .eservices .row {
            flex-direction: column-reverse;
        }

        .eservices__nav {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }

        a.eservices__button {
            margin-bottom: 15px;
        }
    }
</style>

<?php
get_footer();
