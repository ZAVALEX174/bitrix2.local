<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<!doctype html>
<html lang="<?php echo LANGUAGE_ID ?>" xml:lang="<?php echo LANGUAGE_ID ?>">
<head>
    <?

    use Bitrix\Main\Page\Asset;

    //Подключение библиотеки для использования
    $APPLICATION->ShowHead();
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/normalize.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/swiper-bundle.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/style.css");

    Asset::getInstance()->addString('<meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">');
    Asset::getInstance()->addString('<meta http-equiv="X-UA-Compatible" content="ie=edge">');

    ?>


    <title><? $APPLICATION->ShowTitle(); ?></title>
</head>
<body>
<div id="panel">
    <? $APPLICATION->ShowPanel(); ?>
</div>
<div class="burger-menu">
    <nav class="navigation">
        <ul class="navigation__list burger-menu__list">
            <li class="navigation__item">
                <a href="#" class="navigation__link burger-menu__link">
                    Products
                </a>
            </li>
            <li class="navigation__item">
                <a href="#" class="navigation__link burger-menu__link">
                    Pricing
                </a>
            </li>
            <li class="navigation__item">
                <a href="#" class="navigation__link burger-menu__link">
                    FAQ
                </a>
            </li>
            <li class="navigation__item">
                <a href="#" class="navigation__link burger-menu__link">
                    Blog
                </a>
            </li>
            <li class="navigation__item">
                <a href="#" class="navigation__link burger-menu__link">
                    Blog
                </a>
            </li>
        </ul>
    </nav>
    <div class="header__user-sign burger-menu__user-sign">
        <button class="btn header__user-sign-btn burger-menu__user-sign-btn">Sign in</button>
        <button class="btn header__user-sign-btn burger-menu__user-sign-btn">Sign Up</button>
    </div>
    <button class="burger-menu__closes">X</button>

</div>
<section class="first">
    <header class="header">

        <div class="container header__container">
            <div class="logo header__logo">
                <a href="/" class="logo__link">
                    <?$APPLICATION->IncludeFile(
                        SITE_TEMPLATE_PATH . '/include/header/logo.php',
                        array(),
                        array('MODE' => 'text', "NAME" => 'Логотип')
                    )?>
                </a>
            </div>
            <div class="header__navigation">
                <nav class="navigation">
                    <ul class="navigation__list">
                        <li class="navigation__item">
                            <a href="#" class="navigation__link">
                                Products
                            </a>
                        </li>
                        <li class="navigation__item">
                            <a href="#" class="navigation__link">
                                Pricing
                            </a>
                        </li>
                        <li class="navigation__item">
                            <a href="#" class="navigation__link">
                                FAQ
                            </a>
                        </li>
                        <li class="navigation__item">
                            <a href="#" class="navigation__link">
                                Blog
                            </a>
                        </li>
                        <li class="navigation__item">
                            <a href="#" class="navigation__link">
                                Blog
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="header__user-sign">
                <button class="btn header__user-sign-btn">Sign in</button>
                <button class="btn header__user-sign-btn">Sign Up</button>
            </div>
            <button class="open">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect y="3" width="24" height="3" fill="#8794BA"/>
                    <rect y="11" width="24" height="3" fill="#8794BA"/>
                    <rect y="19" width="24" height="3" fill="#8794BA"/>
                </svg>
            </button>
        </div>
    </header>
    <div class="hero">
        <div class="container hero__container">
            <div class="hero__info">
                <div class="hero__cards-big">
                    <img class="hero__cards-big-img" src="<?= SITE_TEMPLATE_PATH ?>/images/hero/card_big_mob.svg"
                         loading="lazy" alt="График">
                </div>
                <h1 class="hero__info-title">Monitor your business on real-time dashboard</h1>
                <p class="hero__info-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Elementum nisi
                    aliquet
                    volutpat pellentesque volutpat est. Sapien in etiam vitae nibh nunc mattis imperdiet sed nullam.</p>
                <div class="btn hero__info-btn">Try for free</div>
            </div>
            <div class="hero__cards">
                <div class="hero__cards-mini">
                    <img class="hero__cards-mini-img" src="<?= SITE_TEMPLATE_PATH ?>/images/hero/card_mini2.svg"
                         loading="lazy" alt="График">
                </div>

            </div>
        </div>
    </div>
</section>
<section class="main-features">
    <div class="container main-features__container">
        <h2 class="main-features__title">
            Main Features
        </h2>
        <div class="main-features__subtitle">
            <p class="main-features__subtitle-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Elementum
                nisi aliquet volutpat pellentesque volutpat est. Sapien in etiam vitae nibh nunc mattis imperdiet sed
                nullam. Vitae et, tortor pulvinar risus pulvinar sit amet. Id vel in nam malesuada.</p>
        </div>
        <div class="main-features__cards">
            <ul class="main-features__list">
                <li class="main-features__item">
                    <svg width="61" height="60" viewBox="0 0 61 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_335_18)">
                            <path d="M48.1184 6.71074C43.1043 2.99684 37.154 1.03453 30.9108 1.03453C25.2181 1.03453 19.5625 2.67316 15.3532 5.48484V1.03453C15.3532 0.463477 14.8898 0 14.3187 0C13.7477 0 13.2842 0.463477 13.2842 1.03453V7.54242C13.2842 7.94379 13.5159 8.30894 13.879 8.47863C14.2421 8.64937 14.6714 8.59453 14.9798 8.33789C18.9252 5.06063 24.8808 3.10336 30.9108 3.10336C36.707 3.10336 42.2311 4.92609 46.8873 8.3741C47.0725 8.51062 47.2877 8.57684 47.5019 8.57684C47.8184 8.57684 48.1308 8.43199 48.3336 8.15789C48.674 7.69863 48.5778 7.05105 48.1184 6.71074Z"
                                  fill="#EF2A82"/>
                            <path d="M59.836 12.4138H53.3281C52.9268 12.4138 52.5636 12.6465 52.393 13.0097C52.2222 13.3727 52.2771 13.8021 52.5337 14.1104C55.811 18.0549 57.7682 24.0104 57.7682 30.0415C57.7682 35.8377 55.9455 41.3618 52.4975 46.0169C52.1572 46.4762 52.2534 47.1238 52.7127 47.4642C52.8978 47.6007 53.113 47.6669 53.3272 47.6669C53.6437 47.6669 53.9561 47.5221 54.1599 47.248C57.8737 42.2339 59.8361 36.2834 59.8361 30.0404C59.8361 24.3477 58.1975 18.6911 55.3858 14.4828H59.8361C60.4072 14.4828 60.8707 14.0193 60.8707 13.4483C60.8705 12.8772 60.4071 12.4138 59.836 12.4138Z"
                                  fill="#EF2A82"/>
                            <path d="M47.8631 51.5224C47.5001 51.3527 47.0718 51.4055 46.7624 51.6632C42.8169 54.9404 36.8613 56.8977 30.8313 56.8977C25.0341 56.8977 19.51 55.075 14.8548 51.627C14.3955 51.2866 13.748 51.3829 13.4075 51.8421C13.0672 52.3014 13.1634 52.949 13.6227 53.2894C18.6368 57.0032 24.5872 58.9656 30.8303 58.9656C36.523 58.9656 42.1786 57.327 46.3879 54.5153V58.9656C46.3879 59.5366 46.8513 60.0001 47.4224 60.0001C47.9934 60.0001 48.4569 59.5366 48.4569 58.9656V52.4577C48.4569 52.0562 48.2252 51.6911 47.8631 51.5224Z"
                                  fill="#EF2A82"/>
                            <path d="M9.2085 45.8907C5.93123 41.9453 3.97396 35.9907 3.97396 29.9597C3.97396 24.1635 5.7967 18.6394 9.24365 13.9842C9.58396 13.5249 9.48775 12.8774 9.0285 12.5369C8.56924 12.1956 7.92166 12.2928 7.58123 12.7521C3.86744 17.7662 1.90514 23.7165 1.90514 29.9597C1.90514 35.6524 3.54377 41.308 6.35545 45.5172H1.90514C1.33408 45.5172 0.870605 45.9807 0.870605 46.5518C0.870605 47.1228 1.33408 47.5863 1.90514 47.5863H8.41303C8.81439 47.5863 9.1785 47.3546 9.34924 46.9915C9.51998 46.6283 9.46514 46.1989 9.2085 45.8907Z"
                                  fill="#EF2A82"/>
                            <path d="M31.9051 19.6531C31.9041 19.082 31.4406 18.6206 30.8706 18.6206C30.8706 18.6206 30.8695 18.6206 30.8685 18.6206C30.2964 18.6217 29.835 19.0861 29.8361 19.6572L29.8609 30.002C29.862 30.5731 30.3254 31.0344 30.8954 31.0344C30.8965 31.0344 30.8975 31.0344 30.8975 31.0344C31.4697 31.0334 31.931 30.569 31.93 29.9979L31.9051 19.6531Z"
                                  fill="#EF2A82"/>
                            <path d="M30.8954 28.9655H24.6637C24.0926 28.9655 23.6292 29.4289 23.6292 30C23.6292 30.571 24.0926 31.0345 24.6637 31.0345H30.8954C31.4664 31.0345 31.9299 30.571 31.9299 30C31.9299 29.4289 31.4664 28.9655 30.8954 28.9655Z"
                                  fill="#EF2A82"/>
                            <path d="M30.8706 8.27594C18.8923 8.27594 9.14648 18.0208 9.14648 30C9.14648 41.9793 18.8923 51.7241 30.8706 51.7241C42.8498 51.7241 52.5947 41.9793 52.5947 30C52.5947 18.0208 42.8498 8.27594 30.8706 8.27594ZM30.8706 49.6552C20.0323 49.6552 11.2154 40.8384 11.2154 30C11.2154 19.1617 20.0323 10.3449 30.8706 10.3449C41.7089 10.3449 50.5257 19.1617 50.5257 30C50.5257 40.8384 41.7089 49.6552 30.8706 49.6552Z"
                                  fill="#EF2A82"/>
                            <path d="M16.3879 28.9655H14.319C13.7479 28.9655 13.2844 29.4289 13.2844 30C13.2844 30.571 13.7479 31.0345 14.319 31.0345H16.3879C16.959 31.0345 17.4224 30.571 17.4224 30C17.4224 29.4289 16.959 28.9655 16.3879 28.9655Z"
                                  fill="#EF2A82"/>
                            <path d="M47.4222 28.9655H45.3533C44.7822 28.9655 44.3187 29.4289 44.3187 30C44.3187 30.571 44.7822 31.0345 45.3533 31.0345H47.4222C47.9933 31.0345 48.4567 30.571 48.4567 30C48.4567 29.4289 47.9933 28.9655 47.4222 28.9655Z"
                                  fill="#EF2A82"/>
                            <path d="M30.8706 43.4483C30.2995 43.4483 29.8361 43.9118 29.8361 44.4828V46.5518C29.8361 47.1228 30.2995 47.5863 30.8706 47.5863C31.4416 47.5863 31.9051 47.1228 31.9051 46.5518V44.4828C31.9051 43.9117 31.4416 43.4483 30.8706 43.4483Z"
                                  fill="#EF2A82"/>
                            <path d="M30.8706 12.4138C30.2995 12.4138 29.8361 12.8772 29.8361 13.4483V15.5172C29.8361 16.0883 30.2995 16.5518 30.8706 16.5518C31.4416 16.5518 31.9051 16.0883 31.9051 15.5172V13.4483C31.9051 12.8772 31.4416 12.4138 30.8706 12.4138Z"
                                  fill="#EF2A82"/>
                            <path d="M21.2572 39.6135C20.8537 39.2089 20.1988 39.2089 19.7944 39.6135L18.4352 40.9718C18.0317 41.3753 18.0317 42.0301 18.4352 42.4345C18.6369 42.6362 18.9017 42.7376 19.1665 42.7376C19.4314 42.7376 19.6962 42.6373 19.8979 42.4345L21.2572 41.0762C21.6606 40.6727 21.6606 40.0179 21.2572 39.6135Z"
                                  fill="#EF2A82"/>
                            <path d="M43.3051 17.5655C42.9006 17.161 42.2468 17.161 41.8424 17.5655L40.4841 18.9238C40.0795 19.3283 40.0795 19.9821 40.4841 20.3865C40.6857 20.5882 40.9506 20.6896 41.2154 20.6896C41.4803 20.6896 41.7451 20.5882 41.9468 20.3865L43.3051 19.0282C43.7095 18.6238 43.7095 17.97 43.3051 17.5655Z"
                                  fill="#EF2A82"/>
                            <path d="M43.3051 40.9717L41.9468 39.6134C41.5423 39.2088 40.8885 39.2088 40.4841 39.6134C40.0795 40.0179 40.0795 40.6717 40.4841 41.0761L41.8424 42.4344C42.0441 42.6361 42.3089 42.7375 42.5738 42.7375C42.8386 42.7375 43.1034 42.6372 43.3051 42.4344C43.7095 42.03 43.7095 41.3762 43.3051 40.9717Z"
                                  fill="#EF2A82"/>
                            <path d="M21.2571 18.9238L19.8978 17.5655C19.4944 17.161 18.8395 17.161 18.4351 17.5655C18.0306 17.97 18.0306 18.6247 18.4351 19.0282L19.7944 20.3865C19.9961 20.5882 20.2609 20.6896 20.5257 20.6896C20.7906 20.6896 21.0554 20.5882 21.2571 20.3865C21.6616 19.9821 21.6616 19.3273 21.2571 18.9238Z"
                                  fill="#EF2A82"/>
                        </g>
                        <defs>
                            <clipPath id="clip0_335_18">
                                <rect width="60" height="60" fill="white" transform="translate(0.870605)"/>
                            </clipPath>
                        </defs>
                    </svg>
                    <h3 class="main-features__item-title">Monitoring 24/7</h3>
                    <p class="main-features__item-text">Lorem ipsum dolor sit amet, consectetur adipis
                        cing elit. Elementum nisi aliquet volutpat.</p>
                </li>
                <li class="main-features__item">
                    <svg width="61" height="60" viewBox="0 0 61 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_335_11)">
                            <path d="M33.8706 41H27.8706C27.3186 41 26.8706 41.448 26.8706 42C26.8706 42.5519 27.3186 43 27.8706 43H33.8706C34.4225 43 34.8705 42.5519 34.8705 42C34.8705 41.448 34.4225 41 33.8706 41Z"
                                  fill="#EF2A82"/>
                            <path d="M56.8696 1H4.87162C2.66557 1 0.870605 2.79508 0.870605 5.00102V38C0.870605 38.5519 1.31861 38.9999 1.87057 38.9999H59.8705C60.4225 38.9999 60.8705 38.5519 60.8705 38V5.00102C60.8706 2.79508 59.0756 1 56.8696 1ZM58.8706 37H2.87064V5.00102C2.87064 3.89699 3.76865 3.00004 4.87162 3.00004H56.8696C57.9726 3.00004 58.8706 3.89699 58.8706 5.00102V37Z"
                                  fill="#EF2A82"/>
                            <path d="M59.8706 36.9999H1.87057C1.31861 36.9999 0.870605 37.448 0.870605 38V42.9989C0.870605 45.2049 2.66557 46.9999 4.87162 46.9999H56.8696C59.0756 46.9999 60.8706 45.2049 60.8706 42.9989L60.8705 38C60.8705 37.448 60.4226 36.9999 59.8706 36.9999ZM58.8706 42.999C58.8706 44.103 57.9726 45 56.8696 45H4.87162C3.76865 45 2.87064 44.103 2.87064 42.999V39H58.8707L58.8706 42.999Z"
                                  fill="#EF2A82"/>
                            <path d="M55.8705 5.00005H5.87061C5.31866 5.00005 4.87065 5.44806 4.87065 6.00001V38C4.87065 38.552 5.31866 39 5.87061 39H55.8707C56.4226 39 56.8706 38.552 56.8706 38V6.00001C56.8706 5.44806 56.4226 5.00005 55.8705 5.00005ZM54.8706 37H6.87058V6.99997H54.8706V37Z"
                                  fill="#EF2A82"/>
                            <path d="M43.8705 53.0001H17.8706C16.2166 53.0001 14.8706 54.3461 14.8706 56.0001C14.8706 57.6541 16.2166 59.0001 17.8706 59.0001H43.8706C45.5246 59.0001 46.8706 57.6541 46.8706 56.0001C46.8706 54.3461 45.5245 53.0001 43.8705 53.0001ZM43.8705 57H17.8706C17.3187 57 16.8706 56.5511 16.8706 56.0001C16.8706 55.4491 17.3187 55.0001 17.8706 55.0001H43.8706C44.4226 55.0001 44.8706 55.4491 44.8706 56.0001C44.8706 56.5511 44.4226 57 43.8705 57Z"
                                  fill="#EF2A82"/>
                            <path d="M41.8706 53.0001C38.5525 53.0001 36.8705 50.6451 36.8705 46.0001C36.8705 45.4482 36.4225 45.0001 35.8706 45.0001H25.8706C25.3187 45.0001 24.8707 45.4482 24.8707 46.0001C24.8707 50.6451 23.1887 53.0001 19.8706 53.0001C19.3187 53.0001 18.8707 53.4481 18.8707 54C18.8707 54.552 19.3187 55 19.8706 55H41.8706C42.4225 55 42.8705 54.552 42.8705 54C42.8705 53.4481 42.4225 53.0001 41.8706 53.0001ZM24.7415 53.0001C25.9726 51.6361 26.6975 49.605 26.8435 47.0001H34.8985C35.0435 49.605 35.7685 51.6361 37.0005 53.0001H24.7415Z"
                                  fill="#EF2A82"/>
                            <path d="M48.6546 30.464L46.2406 28.05L47.5836 26.707C47.8326 26.458 47.9326 26.096 47.8466 25.755C47.7605 25.414 47.5016 25.144 47.1645 25.042L37.1646 22.042C36.8116 21.936 36.4306 22.033 36.1706 22.2931C35.9096 22.5531 35.8136 22.935 35.9196 23.287L38.9196 33.287C39.0206 33.625 39.2915 33.884 39.6325 33.97C39.9725 34.054 40.3355 33.9559 40.5846 33.707L41.9986 32.292L44.4125 34.707C44.5995 34.8949 44.8545 34.9999 45.1195 34.9999C45.3845 34.9999 45.6395 34.8949 45.8265 34.707L48.6544 31.8779C49.0455 31.487 49.0455 30.855 48.6546 30.464ZM45.1195 32.586L42.9215 30.387C42.6665 30.132 42.3325 30.0049 41.9986 30.0049C41.6635 30.0049 41.3295 30.1329 41.0756 30.3859L40.3536 31.1079L38.3686 24.4909L44.9855 26.4759L44.2115 27.25C43.9985 27.464 43.8815 27.748 43.8815 28.05C43.8815 28.3531 43.9995 28.639 44.2135 28.851L46.5335 31.1709L45.1195 32.586Z"
                                  fill="#EF2A82"/>
                            <path d="M42.8705 8.99997H14.8706C14.3186 8.99997 13.8706 9.44798 13.8706 9.99993V15C13.8706 15.5519 14.3186 15.9999 14.8706 15.9999H42.8705C43.4225 15.9999 43.8705 15.5519 43.8705 15V9.99993C43.8705 9.44798 43.4225 8.99997 42.8705 8.99997ZM41.8706 14H15.8705V11H41.8706V14Z"
                                  fill="#EF2A82"/>
                            <path d="M26.8707 20.0001H18.8707C18.3187 20.0001 17.8707 20.4481 17.8707 21V25C17.8707 25.5519 18.3187 25.9999 18.8707 25.9999H26.8707C27.4227 25.9999 27.8707 25.5519 27.8707 25V21C27.8707 20.4481 27.4227 20.0001 26.8707 20.0001ZM25.8707 24H19.8707V22H25.8707V24Z"
                                  fill="#EF2A82"/>
                            <path d="M42.8705 8.99997H14.8706C14.3186 8.99997 13.8706 9.44798 13.8706 9.99993V28.9999C13.8706 29.5518 14.3186 29.9999 14.8706 29.9999H38.6766C38.9936 29.9999 39.2906 29.8509 39.4787 29.5968C39.6677 29.3429 39.7257 29.0149 39.6346 28.7118L38.3687 24.4909L42.5837 25.7559C42.8867 25.847 43.2147 25.789 43.4676 25.5999C43.7215 25.412 43.8706 25.114 43.8706 24.7979L43.8705 9.99993C43.8705 9.44798 43.4225 8.99997 42.8705 8.99997ZM41.8706 23.454L37.1635 22.042C36.8105 21.9359 36.4296 22.033 36.1695 22.293C35.9085 22.554 35.8126 22.935 35.9185 23.2881L37.3325 28H15.8705V11H41.8706V23.454Z"
                                  fill="#EF2A82"/>
                        </g>
                        <defs>
                            <clipPath id="clip0_335_11">
                                <rect width="60" height="60" fill="white" transform="translate(0.870605)"/>
                            </clipPath>
                        </defs>
                    </svg>
                    <h3 class="main-features__item-title">Widget System</h3>
                    <p class="main-features__item-text">Sapien in etiam vitae nibh nunc mattis imperdiet
                        sed nullam. Vitae et, tortor pulvinar risus pulvinar.</p>
                </li>
                <li class="main-features__item">
                    <svg width="61" height="60" viewBox="0 0 61 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_335_64)">
                            <path d="M19.9341 23.3911C19.7741 23.0771 19.4611 22.8711 19.1101 22.8481L10.6978 22.2872C10.2619 22.2442 9.85887 22.5142 9.69985 22.9201L3.63534 38.4189C3.47233 38.8349 3.60534 39.3079 3.96135 39.5788C4.13935 39.7148 4.35334 39.7829 4.56626 39.7829C4.7772 39.7829 4.98825 39.7169 5.16626 39.5829L10.1999 35.8083L13.1307 36.3942C13.6087 36.4892 14.0866 36.2272 14.2606 35.7703C15.8346 31.6476 17.7293 27.8139 19.8901 24.3772C20.0772 24.079 20.0942 23.704 19.9341 23.3911ZM12.6986 34.2682L10.1529 33.7593C9.87492 33.7043 9.58489 33.7703 9.35696 33.9402L6.77816 35.874L11.2948 24.3309L17.3323 24.7329C15.5924 27.6777 14.0386 30.8754 12.6986 34.2682Z"
                                  fill="#EF2A82"/>
                            <path d="M38.5836 50.1741L38.0226 41.7607C37.9986 41.4086 37.7926 41.0957 37.4787 40.9357C37.1657 40.7757 36.7907 40.7916 36.4928 40.9796C33.055 43.1404 29.2223 45.0353 25.0997 46.6091C24.6437 46.7821 24.3797 47.2601 24.4758 47.739L25.0617 50.6699L21.287 55.7024C21.019 56.0604 21.0201 56.5524 21.291 56.9084C21.484 57.1623 21.781 57.3033 22.0869 57.3033C22.2089 57.3033 22.332 57.2803 22.4519 57.2363L37.9507 51.1718C38.3566 51.013 38.6126 50.6089 38.5836 50.1741ZM24.9956 54.0908L26.9294 51.512C27.0995 51.285 27.1654 50.9951 27.1094 50.716L26.6005 48.1712C29.9942 46.8313 33.1909 45.2774 36.1357 43.5376L36.5387 49.5741L24.9956 54.0908Z"
                                  fill="#EF2A82"/>
                            <path d="M29.8684 30.0005H23.1309C22.768 30.0005 22.434 30.1975 22.257 30.5145L13.8006 45.7094C13.5806 46.1054 13.6545 46.6013 13.9806 46.9153C14.1716 47.0993 14.4225 47.1953 14.6745 47.1953C14.8525 47.1953 15.0315 47.1483 15.1914 47.0503L30.3863 37.8551C30.6852 37.6741 30.8683 37.3501 30.8683 37.0002V31.0005C30.8684 30.4486 30.4204 30.0005 29.8684 30.0005ZM28.8686 36.4371L17.3805 43.3896L23.718 32.0014V32.0003H28.8686V36.4371Z"
                                  fill="#EF2A82"/>
                            <path d="M60.8202 0.96374C60.7792 0.47683 60.3933 0.0908184 59.9063 0.0498031C59.5743 0.0237878 26.6458 -2.27506 12.3929 35.0562C12.252 35.4252 12.3409 35.8411 12.6199 36.1201L17.3745 40.8747C17.5975 41.0977 17.9095 41.1997 18.2225 41.1577C18.5335 41.1127 18.8055 40.9248 18.9575 40.6497L23.7211 32.0004H28.8687V36.4491L20.1674 41.9426C19.9104 42.1056 19.7415 42.3756 19.7075 42.6776C19.6735 42.9796 19.7794 43.2805 19.9945 43.4956L24.7491 48.2502C24.9401 48.4412 25.1951 48.5432 25.456 48.5432C25.576 48.5432 25.697 48.5222 25.813 48.4772C63.146 34.2232 60.8482 1.29479 60.8202 0.96374ZM55.5746 18.7045C52.0658 27.3857 44.0364 39.1879 25.7028 46.3764L22.2931 42.9666L30.4025 37.847C30.6924 37.663 30.8684 37.344 30.8684 37.001V31.0014C30.8684 30.4495 30.4204 30.0015 29.8685 30.0015H23.129C22.764 30.0015 22.429 30.2004 22.253 30.5194L17.8463 38.5208L14.4936 35.167C27.0057 3.24758 53.6757 1.94166 58.8602 2.01467C58.8973 4.34656 58.6833 11.012 55.5746 18.7045Z"
                                  fill="#EF2A82"/>
                            <path d="M17.9993 44.1645C17.7822 43.8766 17.4363 43.7365 17.0973 43.7725C17.1323 43.4325 16.9923 43.0876 16.7053 42.8705C15.1975 41.7307 13.2516 41.3517 11.3648 41.8296C9.36194 42.3385 7.72402 43.7044 6.87208 45.5793L0.96061 58.5853C0.787643 58.9652 0.868619 59.4123 1.16358 59.7062C1.35459 59.8982 1.61053 59.9992 1.87056 59.9992C2.0106 59.9992 2.15158 59.9692 2.28458 59.9092L15.2906 53.9967C17.1644 53.1458 18.5304 51.5079 19.0393 49.505C19.5182 47.6202 19.1393 45.6734 17.9993 44.1645ZM17.1014 49.0131C16.7434 50.424 15.7815 51.5769 14.4636 52.1769L3.88441 56.9855L8.69304 46.4053C9.29198 45.0875 10.4459 44.1255 11.8568 43.7676C12.2278 43.6736 12.6007 43.6275 12.9687 43.6275C13.5917 43.6275 14.2006 43.7606 14.7556 44.0195L13.8036 45.7044C13.5826 46.0954 13.6497 46.5864 13.9676 46.9034C14.2855 47.2224 14.7765 47.2883 15.1665 47.0673L16.8514 46.1144C17.2614 46.9963 17.3544 48.0151 17.1014 49.0131Z"
                                  fill="#EF2A82"/>
                            <path d="M60.8201 0.964828C60.7791 0.477918 60.3931 0.0919066 59.9062 0.0508914C59.5162 0.019837 50.2469 -0.682109 39.3457 4.33956C39.0488 4.4755 38.8377 4.74948 38.7797 5.07151C38.7217 5.39353 38.8258 5.72341 39.0567 5.95439L54.9156 21.8132C55.1046 22.0022 55.3596 22.1062 55.6226 22.1062C55.6815 22.1062 55.7406 22.1011 55.7995 22.0912C56.1215 22.0332 56.3945 21.8222 56.5314 21.5252C61.5541 10.624 60.8521 1.35377 60.8201 0.964828ZM55.2985 19.3664L41.5036 5.57142C49.484 2.20267 56.4724 1.97064 58.8612 2.01072C58.9012 4.40155 58.6762 11.368 55.2985 19.3664Z"
                                  fill="#EF2A82"/>
                            <path d="M45.0311 15.8387C41.6683 12.4759 36.1979 12.4759 32.8351 15.8387C29.4723 19.2014 29.4723 24.6719 32.8351 28.0347C34.516 29.7166 36.7248 30.5566 38.9326 30.5566C41.1415 30.5566 43.3493 29.7156 45.0311 28.0347C48.3939 24.6719 48.3939 19.2013 45.0311 15.8387ZM43.6173 26.6207C41.0345 29.2035 36.8318 29.2035 34.249 26.6207C31.6663 24.038 31.6663 19.8353 34.249 17.2525C35.54 15.9616 37.2368 15.3157 38.9327 15.3157C40.6287 15.3157 42.3255 15.9616 43.6174 17.2525C46.2001 19.8353 46.2001 24.038 43.6173 26.6207Z"
                                  fill="#EF2A82"/>
                            <path d="M40.9206 23.925C39.8246 25.0229 38.0408 25.0219 36.9438 23.925C35.8479 22.8282 35.8479 21.0453 36.9438 19.9483C38.0398 18.8524 39.8236 18.8514 40.9206 19.9483C41.3106 20.3392 41.9445 20.3392 42.3344 19.9483C42.7254 19.5574 42.7254 18.9254 42.3344 18.5344C40.4596 16.6586 37.4058 16.6586 35.53 18.5344C33.6541 20.4102 33.6541 23.4631 35.53 25.3389C36.4679 26.2768 37.7009 26.7458 38.9327 26.7458C40.1656 26.7458 41.3975 26.2768 42.3344 25.3389C42.7254 24.9479 42.7254 24.316 42.3344 23.925C41.9444 23.5341 41.3106 23.5341 40.9206 23.925Z"
                                  fill="#EF2A82"/>
                        </g>
                        <defs>
                            <clipPath id="clip0_335_64">
                                <rect width="60" height="60" fill="white" transform="translate(0.870605)"/>
                            </clipPath>
                        </defs>
                    </svg>
                    <h3 class="main-features__item-title">Best Performance</h3>
                    <p class="main-features__item-text">Lorem ipsum dolor sit amet, consectetur adipis
                        cing elit. Elementum nisi aliquet volutpat.</p>
                </li>
            </ul>
        </div>
    </div>
</section>
<section class="roadmap">
    <div class="container roadmap__container">
        <div class="roadmap__box">
            <div class="roadmap__box-text">
                <h2 class="roadmap__box-text-title">
                    Automated Reports <br>
                    & Widget Alerts
                </h2>
                <p class="roadmap__box-text-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Elementum
                    nisi aliquet volutpat pellentesque volutpat est. Sapien in etiam vitae nibh nunc mattis imperdiet
                    sed nullam. Vitae et, tortor pulvinar risus pulvinar sit amet.</p>
            </div>
            <div class="roadmap__box-img">
                <img src="<?= SITE_TEMPLATE_PATH ?>/images/grafiki/chart.svg" loading="lazy" alt="Images graphic">
            </div>
        </div>
        <div class="roadmap__box">
            <div class="roadmap__box-text">
                <h2 class="roadmap__box-text-title">
                    Fully customizable to address your needs
                </h2>
                <p class="roadmap__box-text-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Elementum
                    nisi aliquet volutpat pellentesque volutpat est. Sapien in etiam vitae nibh nunc mattis imperdiet
                    sed nullam. Vitae et, tortor pulvinar risus pulvinar sit amet.</p>
            </div>
            <div class="roadmap__box-img">
                <img src="<?= SITE_TEMPLATE_PATH ?>/images/grafiki/grafik2.svg" loading="lazy" alt="Images graphic">
            </div>
        </div>
        <div class="roadmap__box">
            <div class="roadmap__box-text">
                <h2 class="roadmap__box-text-title">
                    Pre-built Dashboard Templates
                </h2>
                <p class="roadmap__box-text-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Elementum
                    nisi aliquet <br> volutpat pellentesque volutpat est. Sapien in etiam vitae nibh nunc mattis
                    imperdiet
                    sed nullam. Vitae et, tortor pulvinar risus pulvinar sit amet.</p>
            </div>
            <div class="roadmap__box-img">
                <img src="<?= SITE_TEMPLATE_PATH ?>/images/grafiki/calendar.svg" loading="lazy" alt="Images graphic">
            </div>
        </div>
    </div>
</section>
<section class="last last-price">
    <div class="container last-price__container">
        <h2 class="last-price__title">
            Pricing Plans
        </h2>
        <p class="last-price__text">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Elementum nisi aliquet
            volutpat pellentesque volutpat est.
        </p>

        <div class="last-price__slider">
            <div class="swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <h3 class="swiper-slide__title">Starter</h3>
                        <p class="swiper-slide__text">up to 3 users</p>
                        <span class="swiper-slide__line"></span>
                        <p class="swiper-slide__price"><span class="swiper-slide__price-span">$</span>29</p>
                        <p class="swiper-slide__period">per month</p>

                        <button class="btn swiper-slide__btn">Order</button>
                    </div>
                    <div class="swiper-slide swiper-slide_white">
                        <h3 class="swiper-slide__title swiper-slide__title_white">Standard</h3>
                        <p class="swiper-slide__text swiper-slide__text_white">up to 20 users</p>
                        <span class="swiper-slide__line"></span>
                        <p class="swiper-slide__price swiper-slide__price_white"><span
                                    class="swiper-slide__price-span swiper-slide__price-span_white">$</span>99</p>
                        <p class="swiper-slide__period swiper-slide__period_white">per month</p>

                        <button class="btn swiper-slide__btn swiper-slide__btn_pink">Order</button>
                    </div>
                    <div class="swiper-slide">
                        <h3 class="swiper-slide__title">Premium</h3>
                        <p class="swiper-slide__text">up to 200 users</p>
                        <span class="swiper-slide__line"></span>
                        <p class="swiper-slide__price"><span class="swiper-slide__price-span">$</span>299</p>
                        <p class="swiper-slide__period">per month</p>

                        <button class="btn swiper-slide__btn">Order</button>
                    </div>
                </div>
            </div>
        </div>
        <span class="last-price__line"></span>
    </div>
    <footer class="footer">
        <div class="container footer__container">
            <div class="logo footer__logo">
                <a href="/" class="logo__link">
                    <img class="logo__link-image" src="<?= SITE_TEMPLATE_PATH ?>/images/icons/logo_footer.svg"
                         alt="Логотип компании">
                    <p class="logo__link-title logo__link-title_footer">Analytics</p>
                </a>
            </div>
            <div class="footer__navigation">
                <nav class="navigation">
                    <ul class="navigation__list">
                        <li class="navigation__item">
                            <a href="#" class="navigation__link">
                                Products
                            </a>
                        </li>
                        <li class="navigation__item">
                            <a href="#" class="navigation__link">
                                Pricing
                            </a>
                        </li>
                        <li class="navigation__item">
                            <a href="#" class="navigation__link">
                                FAQ
                            </a>
                        </li>
                        <li class="navigation__item">
                            <a href="#" class="navigation__link">
                                Blog
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="footer__social social">
                <ul class="social__list">
                    <li class="social__item"><a href="#" class="social__link">
                            <svg width="10" height="20" viewBox="0 0 10 20" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.5 6.66667H0V10H2.5V20H6.66667V10H9.66667L10 6.66667H6.66667V5.25C6.66667 4.5 6.83333 4.16667 7.58333 4.16667H10V0H6.83333C3.83333 0 2.5 1.33333 2.5 3.83333V6.66667Z"
                                      fill="#8794BA"/>
                            </svg>
                        </a></li>
                    <li class="social__item"><a href="#" class="social__link">
                            <svg width="25" height="20" viewBox="0 0 25 20" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.7392 20C17.0259 20 22.1045 12.3061 22.1045 5.63472C22.1045 5.41612 22.1 5.19865 22.0899 4.98202C23.0757 4.26942 23.9327 3.37993 24.6086 2.36786C23.704 2.76978 22.7306 3.04043 21.7093 3.16246C22.7516 2.53747 23.5521 1.54834 23.9296 0.369453C22.9539 0.947983 21.8736 1.36838 20.7238 1.59509C19.8021 0.613796 18.49 0 17.0382 0C14.2497 0 11.9885 2.26122 11.9885 5.04835C11.9885 5.44467 12.033 5.8298 12.1192 6.19953C7.92337 5.98878 4.20253 3.97946 1.71264 0.924752C1.27853 1.67066 1.02859 2.53775 1.02859 3.46222C1.02859 5.21376 1.92004 6.76015 3.27554 7.66503C2.44735 7.63956 1.66926 7.41173 0.988846 7.03332C0.987727 7.05431 0.987727 7.07558 0.987727 7.09769C0.987727 9.54308 2.72835 11.5846 5.03827 12.0472C4.61424 12.1628 4.1681 12.225 3.7074 12.225C3.38217 12.225 3.0659 12.1925 2.7583 12.134C3.40093 14.1397 5.26498 15.5996 7.47498 15.6407C5.74667 16.9951 3.5697 17.802 1.20436 17.802C0.797123 17.802 0.395203 17.7788 0 17.7321C2.23435 19.164 4.88741 20 7.7392 20Z"
                                      fill="#8794BA"/>
                            </svg>
                        </a></li>
                    <li class="social__item"><a href="#" class="social__link">
                            <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.6086 1.83333C13.2753 1.83333 13.6086 1.83333 14.692 1.91667C17.442 2 18.692 3.33333 18.7753 6C18.8586 7.08333 18.8586 7.33333 18.8586 10C18.8586 12.6667 18.8586 13 18.7753 14C18.692 16.6667 17.3586 18 14.692 18.0833C13.6086 18.1667 13.3586 18.1667 10.6086 18.1667C7.94198 18.1667 7.60864 18.1667 6.60864 18.0833C3.85864 18 2.60864 16.6667 2.52531 14C2.44198 12.9167 2.44198 12.6667 2.44198 10C2.44198 7.33333 2.44198 7 2.52531 6C2.60864 3.33333 3.94198 2 6.60864 1.91667C7.60864 1.83333 7.94198 1.83333 10.6086 1.83333ZM10.6086 0C7.85864 0 7.52531 0 6.52531 0.0833333C2.85864 0.25 0.858643 2.25 0.691976 5.91667C0.608643 6.91667 0.608643 7.25 0.608643 10C0.608643 12.75 0.608643 13.0833 0.691976 14.0833C0.858643 17.75 2.85864 19.75 6.52531 19.9167C7.52531 20 7.85864 20 10.6086 20C13.3586 20 13.692 20 14.692 19.9167C18.3586 19.75 20.3586 17.75 20.5253 14.0833C20.6086 13.0833 20.6086 12.75 20.6086 10C20.6086 7.25 20.6086 6.91667 20.5253 5.91667C20.3586 2.25 18.3586 0.25 14.692 0.0833333C13.692 0 13.3586 0 10.6086 0ZM10.6086 4.83333C7.77531 4.83333 5.44198 7.16667 5.44198 10C5.44198 12.8333 7.77531 15.1667 10.6086 15.1667C13.442 15.1667 15.7753 12.8333 15.7753 10C15.7753 7.16667 13.442 4.83333 10.6086 4.83333ZM10.6086 13.3333C8.77531 13.3333 7.27531 11.8333 7.27531 10C7.27531 8.16667 8.77531 6.66667 10.6086 6.66667C12.442 6.66667 13.942 8.16667 13.942 10C13.942 11.8333 12.442 13.3333 10.6086 13.3333ZM15.942 3.5C15.2753 3.5 14.7753 4 14.7753 4.66667C14.7753 5.33333 15.2753 5.83333 15.942 5.83333C16.6086 5.83333 17.1086 5.33333 17.1086 4.66667C17.1086 4 16.6086 3.5 15.942 3.5Z"
                                      fill="#8794BA"/>
                            </svg>
                        </a></li>
                </ul>
            </div>
        </div>
    </footer>
</section>

<script src="<?= SITE_TEMPLATE_PATH ?>/js//swiper-bundle.js"></script>
<script src="<?= SITE_TEMPLATE_PATH ?>/js/swiper_slider.js" defer></script>
<script src="<?= SITE_TEMPLATE_PATH ?>/js/main.js" defer></script>
</body>
</html>