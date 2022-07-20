<!DOCTYPE html>
<html lang="pt-br" class="default">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title><?php bloginfo('name')?> | <?php the_title()?> </title>
  <meta name="description" content="<?php bloginfo('description') ?>" />
  <meta name="keywords" content="" />

  <meta property="og:title" content="Pentalobe" />
  <meta property="og:description" content="Vender Iphone usado com segurança e garantia" />
  <meta property="og:url" content="https://pentalobe.com.br" />
  <meta property="og:site_name" content="Pentalobe" />
  <meta property="og:type" content="website" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="icon" type="image/vnd.microsoft.icon"
    href="https://rubiktheme.com/demo/at_dimita_demo/img/favicon.ico?1613756035" />
  <link rel="shortcut icon" type="image/x-icon"
    href="https://rubiktheme.com/demo/at_dimita_demo/img/favicon.ico?1613756035" />
  <link rel="stylesheet"
    href="<?php echo get_stylesheet_directory_uri(); ?>/themes/at_dimita/assets/cache/theme-global.css" type="text/css"
    media="all" />
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/themes/at_dimita/assets/cache/style.css">

  <script type="text/javascript">
  var LEO_COOKIE_THEME = "AT_DIMITA_PANEL_CONFIG";
  var add_cart_error =
    "An error occurred while processing your request. Please try again";
  var ajaxsearch = "1";
  var approfile_multilang_url = [{
      id_appagebuilder_profiles: "13",
      name: "Home 3",
      id_lang: "1",
      friendly_url: "home-3",
      iso_code: "en",
    },
    {
      id_appagebuilder_profiles: "13",
      name: "Home 3",
      id_lang: "2",
      friendly_url: "home-3",
      iso_code: "fr",
    },
    {
      id_appagebuilder_profiles: "13",
      name: "Home 3",
      id_lang: "3",
      friendly_url: "home-3",
      iso_code: "de",
    },
    {
      id_appagebuilder_profiles: "13",
      name: "Home 3",
      id_lang: "4",
      friendly_url: "home-3",
      iso_code: "es",
    },
    {
      id_appagebuilder_profiles: "13",
      name: "Home 3",
      id_lang: "5",
      friendly_url: "home-3",
      iso_code: "it",
    },
    {
      id_appagebuilder_profiles: "13",
      name: "Home 3",
      id_lang: "6",
      friendly_url: "home-3",
      iso_code: "ar",
    },
  ];
  var buttoncompare_title_add = "Add to Compare";
  var buttoncompare_title_remove = "Remove from Compare";
  var buttonwishlist_title_add = "Add to Wishlist";
  var buttonwishlist_title_remove = "Remove from WishList";
  var cancel_rating_txt = "Cancel Rating";
  var comparator_max_item = 3;
  var compared_products = [];
  var data_product_popup = [{
      image: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/24-cart_default\/sony-e591-full-color.jpg",
      title: "Sony E591 Full  Color",
      url: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/computer-laptop\/1-sony-e591-full-color.html",
      id_product: "1",
      time: "Puchare By JDOE 7 minutes ago",
      phone: "0102030405",
      address: "16, Main street Paris ",
    },
    {
      image: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/30-cart_default\/charging-cradle.jpg",
      title: "Charging Cradle",
      url: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/camera-photo\/2-charging-cradle.html",
      id_product: "2",
      time: "Puchare By JDOE 13 minutes ago",
      phone: "0102030405",
      address: "16, Main street Paris ",
    },
    {
      image: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/35-cart_default\/the-best-is-yet-to-come-framed-poster.jpg",
      title: "The best is yet to come' Framed poster",
      url: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/technologies\/3-the-best-is-yet-to-come-framed-poster.html",
      id_product: "3",
      time: "Puchare By JDOE 50 minutes ago",
      phone: "0102030405",
      address: "16, Main street Paris ",
    },
    {
      image: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/41-cart_default\/bluetooth-speaker-gk1.jpg",
      title: "Bluetooth Speaker GK1",
      url: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/technologies\/4-bluetooth-speaker-gk1.html",
      id_product: "4",
      time: "Puchare By JDOE 2 minutes ago",
      phone: "0102030405",
      address: "16, Main street Paris ",
    },
    {
      image: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/47-cart_default\/camera-logiti-s-l8910.jpg",
      title: "Camera Logiti-S L8910",
      url: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/technologies\/5-camera-logiti-s-l8910.html",
      id_product: "5",
      time: "Puchare By JDOE 41 minutes ago",
      phone: "0102030405",
      address: "16, Main street Paris ",
    },
    {
      image: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/54-cart_default\/macbook-air-2018.jpg",
      title: "Macbook air 2018",
      url: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/home-accessories\/6-macbook-air-2018.html",
      id_product: "6",
      time: "Puchare By JDOE 1 minutes ago",
      phone: "0102030405",
      address: "16, Main street Paris ",
    },
    {
      image: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/65-cart_default\/sony-srs-speaker.jpg",
      title: "Sony SRS Speaker",
      url: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/home-accessories\/8-sony-srs-speaker.html",
      id_product: "8",
      time: "Puchare By JDOE 17 minutes ago",
      phone: "0102030405",
      address: "16, Main street Paris ",
    },
    {
      image: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/77-cart_default\/quick-charge-30.jpg",
      title: "Quick Charge 3.0",
      url: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/home-accessories\/10-quick-charge-30.html",
      id_product: "10",
      time: "Puchare By JDOE 59 minutes ago",
      phone: "0102030405",
      address: "16, Main street Paris ",
    },
    {
      image: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/114-cart_default\/smart-watch-suntek-a6.jpg",
      title: "Smart Watch Suntek A6",
      url: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/headphones\/16-smart-watch-suntek-a6.html",
      id_product: "16",
      time: "Puchare By JDOE 46 minutes ago",
      phone: "0102030405",
      address: "16, Main street Paris ",
    },
    {
      image: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/126-cart_default\/bluetooth-hismart.jpg",
      title: "Bluetooth Hismart",
      url: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/headphones\/18-bluetooth-hismart.html",
      id_product: "18",
      time: "Puchare By JDOE 50 minutes ago",
      phone: "0102030405",
      address: "16, Main street Paris ",
    },
    {
      image: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/24-cart_default\/sony-e591-full-color.jpg",
      title: "Sony E591 Full  Color",
      url: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/computer-laptop\/1-sony-e591-full-color.html",
      id_product: "1",
      time: "Puchare By JDOE 22 minutes ago",
      phone: "0102030405",
      address: "16, Main street Miami",
    },
    {
      image: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/30-cart_default\/charging-cradle.jpg",
      title: "Charging Cradle",
      url: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/camera-photo\/2-charging-cradle.html",
      id_product: "2",
      time: "Puchare By JDOE 23 minutes ago",
      phone: "0102030405",
      address: "16, Main street Miami",
    },
    {
      image: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/35-cart_default\/the-best-is-yet-to-come-framed-poster.jpg",
      title: "The best is yet to come' Framed poster",
      url: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/technologies\/3-the-best-is-yet-to-come-framed-poster.html",
      id_product: "3",
      time: "Puchare By JDOE 37 minutes ago",
      phone: "0102030405",
      address: "16, Main street Miami",
    },
    {
      image: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/41-cart_default\/bluetooth-speaker-gk1.jpg",
      title: "Bluetooth Speaker GK1",
      url: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/technologies\/4-bluetooth-speaker-gk1.html",
      id_product: "4",
      time: "Puchare By JDOE 42 minutes ago",
      phone: "0102030405",
      address: "16, Main street Miami",
    },
    {
      image: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/47-cart_default\/camera-logiti-s-l8910.jpg",
      title: "Camera Logiti-S L8910",
      url: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/technologies\/5-camera-logiti-s-l8910.html",
      id_product: "5",
      time: "Puchare By JDOE 3 minutes ago",
      phone: "0102030405",
      address: "16, Main street Miami",
    },
    {
      image: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/54-cart_default\/macbook-air-2018.jpg",
      title: "Macbook air 2018",
      url: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/home-accessories\/6-macbook-air-2018.html",
      id_product: "6",
      time: "Puchare By JDOE 56 minutes ago",
      phone: "0102030405",
      address: "16, Main street Miami",
    },
    {
      image: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/65-cart_default\/sony-srs-speaker.jpg",
      title: "Sony SRS Speaker",
      url: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/home-accessories\/8-sony-srs-speaker.html",
      id_product: "8",
      time: "Puchare By JDOE 59 minutes ago",
      phone: "0102030405",
      address: "16, Main street Miami",
    },
    {
      image: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/77-cart_default\/quick-charge-30.jpg",
      title: "Quick Charge 3.0",
      url: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/home-accessories\/10-quick-charge-30.html",
      id_product: "10",
      time: "Puchare By JDOE 40 minutes ago",
      phone: "0102030405",
      address: "16, Main street Miami",
    },
    {
      image: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/114-cart_default\/smart-watch-suntek-a6.jpg",
      title: "Smart Watch Suntek A6",
      url: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/headphones\/16-smart-watch-suntek-a6.html",
      id_product: "16",
      time: "Puchare By JDOE 17 minutes ago",
      phone: "0102030405",
      address: "16, Main street Miami",
    },
    {
      image: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/126-cart_default\/bluetooth-hismart.jpg",
      title: "Bluetooth Hismart",
      url: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/headphones\/18-bluetooth-hismart.html",
      id_product: "18",
      time: "Puchare By JDOE 45 minutes ago",
      phone: "0102030405",
      address: "16, Main street Miami",
    },
    {
      image: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/24-cart_default\/sony-e591-full-color.jpg",
      title: "Sony E591 Full  Color",
      url: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/computer-laptop\/1-sony-e591-full-color.html",
      id_product: "1",
      time: "Puchare By ATest 17 minutes ago",
      phone: "0123456789",
      address: "VQ HN",
    },
    {
      image: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/30-cart_default\/charging-cradle.jpg",
      title: "Charging Cradle",
      url: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/camera-photo\/2-charging-cradle.html",
      id_product: "2",
      time: "Puchare By ATest 56 minutes ago",
      phone: "0123456789",
      address: "VQ HN",
    },
    {
      image: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/35-cart_default\/the-best-is-yet-to-come-framed-poster.jpg",
      title: "The best is yet to come' Framed poster",
      url: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/technologies\/3-the-best-is-yet-to-come-framed-poster.html",
      id_product: "3",
      time: "Puchare By ATest 37 minutes ago",
      phone: "0123456789",
      address: "VQ HN",
    },
    {
      image: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/41-cart_default\/bluetooth-speaker-gk1.jpg",
      title: "Bluetooth Speaker GK1",
      url: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/technologies\/4-bluetooth-speaker-gk1.html",
      id_product: "4",
      time: "Puchare By ATest 55 minutes ago",
      phone: "0123456789",
      address: "VQ HN",
    },
    {
      image: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/47-cart_default\/camera-logiti-s-l8910.jpg",
      title: "Camera Logiti-S L8910",
      url: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/technologies\/5-camera-logiti-s-l8910.html",
      id_product: "5",
      time: "Puchare By ATest 48 minutes ago",
      phone: "0123456789",
      address: "VQ HN",
    },
    {
      image: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/54-cart_default\/macbook-air-2018.jpg",
      title: "Macbook air 2018",
      url: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/home-accessories\/6-macbook-air-2018.html",
      id_product: "6",
      time: "Puchare By ATest 31 minutes ago",
      phone: "0123456789",
      address: "VQ HN",
    },
    {
      image: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/65-cart_default\/sony-srs-speaker.jpg",
      title: "Sony SRS Speaker",
      url: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/home-accessories\/8-sony-srs-speaker.html",
      id_product: "8",
      time: "Puchare By ATest 40 minutes ago",
      phone: "0123456789",
      address: "VQ HN",
    },
    {
      image: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/77-cart_default\/quick-charge-30.jpg",
      title: "Quick Charge 3.0",
      url: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/home-accessories\/10-quick-charge-30.html",
      id_product: "10",
      time: "Puchare By ATest 26 minutes ago",
      phone: "0123456789",
      address: "VQ HN",
    },
    {
      image: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/114-cart_default\/smart-watch-suntek-a6.jpg",
      title: "Smart Watch Suntek A6",
      url: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/headphones\/16-smart-watch-suntek-a6.html",
      id_product: "16",
      time: "Puchare By ATest 55 minutes ago",
      phone: "0123456789",
      address: "VQ HN",
    },
    {
      image: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/126-cart_default\/bluetooth-hismart.jpg",
      title: "Bluetooth Hismart",
      url: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/headphones\/18-bluetooth-hismart.html",
      id_product: "18",
      time: "Puchare By ATest 12 minutes ago",
      phone: "0123456789",
      address: "VQ HN",
    },
    {
      image: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/24-cart_default\/sony-e591-full-color.jpg",
      title: "Sony E591 Full  Color",
      url: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/computer-laptop\/1-sony-e591-full-color.html",
      id_product: "1",
      time: "Puchare By ATest 34 minutes ago",
      phone: "0123456789",
      address: "VQ HN",
    },
    {
      image: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/30-cart_default\/charging-cradle.jpg",
      title: "Charging Cradle",
      url: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/camera-photo\/2-charging-cradle.html",
      id_product: "2",
      time: "Puchare By ATest 41 minutes ago",
      phone: "0123456789",
      address: "VQ HN",
    },
    {
      image: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/35-cart_default\/the-best-is-yet-to-come-framed-poster.jpg",
      title: "The best is yet to come' Framed poster",
      url: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/technologies\/3-the-best-is-yet-to-come-framed-poster.html",
      id_product: "3",
      time: "Puchare By ATest 8 minutes ago",
      phone: "0123456789",
      address: "VQ HN",
    },
    {
      image: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/41-cart_default\/bluetooth-speaker-gk1.jpg",
      title: "Bluetooth Speaker GK1",
      url: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/technologies\/4-bluetooth-speaker-gk1.html",
      id_product: "4",
      time: "Puchare By ATest 9 minutes ago",
      phone: "0123456789",
      address: "VQ HN",
    },
    {
      image: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/47-cart_default\/camera-logiti-s-l8910.jpg",
      title: "Camera Logiti-S L8910",
      url: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/technologies\/5-camera-logiti-s-l8910.html",
      id_product: "5",
      time: "Puchare By ATest 52 minutes ago",
      phone: "0123456789",
      address: "VQ HN",
    },
    {
      image: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/54-cart_default\/macbook-air-2018.jpg",
      title: "Macbook air 2018",
      url: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/home-accessories\/6-macbook-air-2018.html",
      id_product: "6",
      time: "Puchare By ATest 38 minutes ago",
      phone: "0123456789",
      address: "VQ HN",
    },
    {
      image: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/65-cart_default\/sony-srs-speaker.jpg",
      title: "Sony SRS Speaker",
      url: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/home-accessories\/8-sony-srs-speaker.html",
      id_product: "8",
      time: "Puchare By ATest 57 minutes ago",
      phone: "0123456789",
      address: "VQ HN",
    },
    {
      image: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/77-cart_default\/quick-charge-30.jpg",
      title: "Quick Charge 3.0",
      url: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/home-accessories\/10-quick-charge-30.html",
      id_product: "10",
      time: "Puchare By ATest 21 minutes ago",
      phone: "0123456789",
      address: "VQ HN",
    },
    {
      image: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/114-cart_default\/smart-watch-suntek-a6.jpg",
      title: "Smart Watch Suntek A6",
      url: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/headphones\/16-smart-watch-suntek-a6.html",
      id_product: "16",
      time: "Puchare By ATest 9 minutes ago",
      phone: "0123456789",
      address: "VQ HN",
    },
    {
      image: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/126-cart_default\/bluetooth-hismart.jpg",
      title: "Bluetooth Hismart",
      url: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/headphones\/18-bluetooth-hismart.html",
      id_product: "18",
      time: "Puchare By ATest 59 minutes ago",
      phone: "0123456789",
      address: "VQ HN",
    },
    {
      image: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/24-cart_default\/sony-e591-full-color.jpg",
      title: "Sony E591 Full  Color",
      url: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/computer-laptop\/1-sony-e591-full-color.html",
      id_product: "1",
      time: "Puchare By JErkkil\u00e4 43 minutes ago",
      phone: "",
      address: "Ratsupolku 4 Kemi",
    },
    {
      image: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/30-cart_default\/charging-cradle.jpg",
      title: "Charging Cradle",
      url: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/camera-photo\/2-charging-cradle.html",
      id_product: "2",
      time: "Puchare By JErkkil\u00e4 53 minutes ago",
      phone: "",
      address: "Ratsupolku 4 Kemi",
    },
    {
      image: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/35-cart_default\/the-best-is-yet-to-come-framed-poster.jpg",
      title: "The best is yet to come' Framed poster",
      url: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/technologies\/3-the-best-is-yet-to-come-framed-poster.html",
      id_product: "3",
      time: "Puchare By JErkkil\u00e4 58 minutes ago",
      phone: "",
      address: "Ratsupolku 4 Kemi",
    },
    {
      image: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/41-cart_default\/bluetooth-speaker-gk1.jpg",
      title: "Bluetooth Speaker GK1",
      url: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/technologies\/4-bluetooth-speaker-gk1.html",
      id_product: "4",
      time: "Puchare By JErkkil\u00e4 9 minutes ago",
      phone: "",
      address: "Ratsupolku 4 Kemi",
    },
    {
      image: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/47-cart_default\/camera-logiti-s-l8910.jpg",
      title: "Camera Logiti-S L8910",
      url: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/technologies\/5-camera-logiti-s-l8910.html",
      id_product: "5",
      time: "Puchare By JErkkil\u00e4 51 minutes ago",
      phone: "",
      address: "Ratsupolku 4 Kemi",
    },
    {
      image: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/54-cart_default\/macbook-air-2018.jpg",
      title: "Macbook air 2018",
      url: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/home-accessories\/6-macbook-air-2018.html",
      id_product: "6",
      time: "Puchare By JErkkil\u00e4 42 minutes ago",
      phone: "",
      address: "Ratsupolku 4 Kemi",
    },
    {
      image: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/65-cart_default\/sony-srs-speaker.jpg",
      title: "Sony SRS Speaker",
      url: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/home-accessories\/8-sony-srs-speaker.html",
      id_product: "8",
      time: "Puchare By JErkkil\u00e4 42 minutes ago",
      phone: "",
      address: "Ratsupolku 4 Kemi",
    },
    {
      image: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/77-cart_default\/quick-charge-30.jpg",
      title: "Quick Charge 3.0",
      url: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/home-accessories\/10-quick-charge-30.html",
      id_product: "10",
      time: "Puchare By JErkkil\u00e4 54 minutes ago",
      phone: "",
      address: "Ratsupolku 4 Kemi",
    },
    {
      image: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/114-cart_default\/smart-watch-suntek-a6.jpg",
      title: "Smart Watch Suntek A6",
      url: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/headphones\/16-smart-watch-suntek-a6.html",
      id_product: "16",
      time: "Puchare By JErkkil\u00e4 16 minutes ago",
      phone: "",
      address: "Ratsupolku 4 Kemi",
    },
    {
      image: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/126-cart_default\/bluetooth-hismart.jpg",
      title: "Bluetooth Hismart",
      url: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/headphones\/18-bluetooth-hismart.html",
      id_product: "18",
      time: "Puchare By JErkkil\u00e4 17 minutes ago",
      phone: "",
      address: "Ratsupolku 4 Kemi",
    },
    {
      image: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/24-cart_default\/sony-e591-full-color.jpg",
      title: "Sony E591 Full  Color",
      url: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/computer-laptop\/1-sony-e591-full-color.html",
      id_product: "1",
      time: "Puchare By mlimatola 48 minutes ago",
      phone: "",
      address: "41769 enterprise circle north, suite 107 San Jose",
    },
    {
      image: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/30-cart_default\/charging-cradle.jpg",
      title: "Charging Cradle",
      url: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/camera-photo\/2-charging-cradle.html",
      id_product: "2",
      time: "Puchare By mlimatola 38 minutes ago",
      phone: "",
      address: "41769 enterprise circle north, suite 107 San Jose",
    },
    {
      image: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/35-cart_default\/the-best-is-yet-to-come-framed-poster.jpg",
      title: "The best is yet to come' Framed poster",
      url: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/technologies\/3-the-best-is-yet-to-come-framed-poster.html",
      id_product: "3",
      time: "Puchare By mlimatola 22 minutes ago",
      phone: "",
      address: "41769 enterprise circle north, suite 107 San Jose",
    },
    {
      image: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/41-cart_default\/bluetooth-speaker-gk1.jpg",
      title: "Bluetooth Speaker GK1",
      url: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/technologies\/4-bluetooth-speaker-gk1.html",
      id_product: "4",
      time: "Puchare By mlimatola 33 minutes ago",
      phone: "",
      address: "41769 enterprise circle north, suite 107 San Jose",
    },
    {
      image: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/47-cart_default\/camera-logiti-s-l8910.jpg",
      title: "Camera Logiti-S L8910",
      url: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/technologies\/5-camera-logiti-s-l8910.html",
      id_product: "5",
      time: "Puchare By mlimatola 13 minutes ago",
      phone: "",
      address: "41769 enterprise circle north, suite 107 San Jose",
    },
    {
      image: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/54-cart_default\/macbook-air-2018.jpg",
      title: "Macbook air 2018",
      url: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/home-accessories\/6-macbook-air-2018.html",
      id_product: "6",
      time: "Puchare By mlimatola 8 minutes ago",
      phone: "",
      address: "41769 enterprise circle north, suite 107 San Jose",
    },
    {
      image: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/65-cart_default\/sony-srs-speaker.jpg",
      title: "Sony SRS Speaker",
      url: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/home-accessories\/8-sony-srs-speaker.html",
      id_product: "8",
      time: "Puchare By mlimatola 29 minutes ago",
      phone: "",
      address: "41769 enterprise circle north, suite 107 San Jose",
    },
    {
      image: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/77-cart_default\/quick-charge-30.jpg",
      title: "Quick Charge 3.0",
      url: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/home-accessories\/10-quick-charge-30.html",
      id_product: "10",
      time: "Puchare By mlimatola 44 minutes ago",
      phone: "",
      address: "41769 enterprise circle north, suite 107 San Jose",
    },
    {
      image: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/114-cart_default\/smart-watch-suntek-a6.jpg",
      title: "Smart Watch Suntek A6",
      url: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/headphones\/16-smart-watch-suntek-a6.html",
      id_product: "16",
      time: "Puchare By mlimatola 56 minutes ago",
      phone: "",
      address: "41769 enterprise circle north, suite 107 San Jose",
    },
    {
      image: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/126-cart_default\/bluetooth-hismart.jpg",
      title: "Bluetooth Hismart",
      url: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/headphones\/18-bluetooth-hismart.html",
      id_product: "18",
      time: "Puchare By mlimatola 8 minutes ago",
      phone: "",
      address: "41769 enterprise circle north, suite 107 San Jose",
    },
    {
      image: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/24-cart_default\/sony-e591-full-color.jpg",
      title: "Sony E591 Full  Color",
      url: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/computer-laptop\/1-sony-e591-full-color.html",
      id_product: "1",
      time: "Puchare By KV 36 minutes ago",
      phone: "9164612862",
      address: "#19, bsk 3rd stage Bangalore ",
    },
    {
      image: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/30-cart_default\/charging-cradle.jpg",
      title: "Charging Cradle",
      url: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/camera-photo\/2-charging-cradle.html",
      id_product: "2",
      time: "Puchare By KV 18 minutes ago",
      phone: "9164612862",
      address: "#19, bsk 3rd stage Bangalore ",
    },
    {
      image: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/35-cart_default\/the-best-is-yet-to-come-framed-poster.jpg",
      title: "The best is yet to come' Framed poster",
      url: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/technologies\/3-the-best-is-yet-to-come-framed-poster.html",
      id_product: "3",
      time: "Puchare By KV 25 minutes ago",
      phone: "9164612862",
      address: "#19, bsk 3rd stage Bangalore ",
    },
    {
      image: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/41-cart_default\/bluetooth-speaker-gk1.jpg",
      title: "Bluetooth Speaker GK1",
      url: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/technologies\/4-bluetooth-speaker-gk1.html",
      id_product: "4",
      time: "Puchare By KV 17 minutes ago",
      phone: "9164612862",
      address: "#19, bsk 3rd stage Bangalore ",
    },
    {
      image: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/47-cart_default\/camera-logiti-s-l8910.jpg",
      title: "Camera Logiti-S L8910",
      url: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/technologies\/5-camera-logiti-s-l8910.html",
      id_product: "5",
      time: "Puchare By KV 5 minutes ago",
      phone: "9164612862",
      address: "#19, bsk 3rd stage Bangalore ",
    },
    {
      image: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/54-cart_default\/macbook-air-2018.jpg",
      title: "Macbook air 2018",
      url: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/home-accessories\/6-macbook-air-2018.html",
      id_product: "6",
      time: "Puchare By KV 5 minutes ago",
      phone: "9164612862",
      address: "#19, bsk 3rd stage Bangalore ",
    },
    {
      image: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/65-cart_default\/sony-srs-speaker.jpg",
      title: "Sony SRS Speaker",
      url: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/home-accessories\/8-sony-srs-speaker.html",
      id_product: "8",
      time: "Puchare By KV 53 minutes ago",
      phone: "9164612862",
      address: "#19, bsk 3rd stage Bangalore ",
    },
    {
      image: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/77-cart_default\/quick-charge-30.jpg",
      title: "Quick Charge 3.0",
      url: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/home-accessories\/10-quick-charge-30.html",
      id_product: "10",
      time: "Puchare By KV 18 minutes ago",
      phone: "9164612862",
      address: "#19, bsk 3rd stage Bangalore ",
    },
    {
      image: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/114-cart_default\/smart-watch-suntek-a6.jpg",
      title: "Smart Watch Suntek A6",
      url: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/headphones\/16-smart-watch-suntek-a6.html",
      id_product: "16",
      time: "Puchare By KV 38 minutes ago",
      phone: "9164612862",
      address: "#19, bsk 3rd stage Bangalore ",
    },
    {
      image: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/126-cart_default\/bluetooth-hismart.jpg",
      title: "Bluetooth Hismart",
      url: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/headphones\/18-bluetooth-hismart.html",
      id_product: "18",
      time: "Puchare By KV 7 minutes ago",
      phone: "9164612862",
      address: "#19, bsk 3rd stage Bangalore ",
    },
    {
      image: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/24-cart_default\/sony-e591-full-color.jpg",
      title: "Sony E591 Full  Color",
      url: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/computer-laptop\/1-sony-e591-full-color.html",
      id_product: "1",
      time: "Puchare By chghd 43 minutes ago",
      phone: "",
      address: "vbhvb 67 cvbb",
    },
    {
      image: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/30-cart_default\/charging-cradle.jpg",
      title: "Charging Cradle",
      url: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/camera-photo\/2-charging-cradle.html",
      id_product: "2",
      time: "Puchare By chghd 39 minutes ago",
      phone: "",
      address: "vbhvb 67 cvbb",
    },
    {
      image: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/35-cart_default\/the-best-is-yet-to-come-framed-poster.jpg",
      title: "The best is yet to come' Framed poster",
      url: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/technologies\/3-the-best-is-yet-to-come-framed-poster.html",
      id_product: "3",
      time: "Puchare By chghd 5 minutes ago",
      phone: "",
      address: "vbhvb 67 cvbb",
    },
    {
      image: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/41-cart_default\/bluetooth-speaker-gk1.jpg",
      title: "Bluetooth Speaker GK1",
      url: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/technologies\/4-bluetooth-speaker-gk1.html",
      id_product: "4",
      time: "Puchare By chghd 27 minutes ago",
      phone: "",
      address: "vbhvb 67 cvbb",
    },
    {
      image: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/47-cart_default\/camera-logiti-s-l8910.jpg",
      title: "Camera Logiti-S L8910",
      url: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/technologies\/5-camera-logiti-s-l8910.html",
      id_product: "5",
      time: "Puchare By chghd 1 minutes ago",
      phone: "",
      address: "vbhvb 67 cvbb",
    },
    {
      image: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/54-cart_default\/macbook-air-2018.jpg",
      title: "Macbook air 2018",
      url: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/home-accessories\/6-macbook-air-2018.html",
      id_product: "6",
      time: "Puchare By chghd 28 minutes ago",
      phone: "",
      address: "vbhvb 67 cvbb",
    },
    {
      image: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/65-cart_default\/sony-srs-speaker.jpg",
      title: "Sony SRS Speaker",
      url: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/home-accessories\/8-sony-srs-speaker.html",
      id_product: "8",
      time: "Puchare By chghd 11 minutes ago",
      phone: "",
      address: "vbhvb 67 cvbb",
    },
    {
      image: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/77-cart_default\/quick-charge-30.jpg",
      title: "Quick Charge 3.0",
      url: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/home-accessories\/10-quick-charge-30.html",
      id_product: "10",
      time: "Puchare By chghd 48 minutes ago",
      phone: "",
      address: "vbhvb 67 cvbb",
    },
    {
      image: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/114-cart_default\/smart-watch-suntek-a6.jpg",
      title: "Smart Watch Suntek A6",
      url: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/headphones\/16-smart-watch-suntek-a6.html",
      id_product: "16",
      time: "Puchare By chghd 50 minutes ago",
      phone: "",
      address: "vbhvb 67 cvbb",
    },
    {
      image: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/126-cart_default\/bluetooth-hismart.jpg",
      title: "Bluetooth Hismart",
      url: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/headphones\/18-bluetooth-hismart.html",
      id_product: "18",
      time: "Puchare By chghd 44 minutes ago",
      phone: "",
      address: "vbhvb 67 cvbb",
    },
  ];
  var disable_review_form_txt =
    "Not exists a criterion to review for this product or this language";
  var enable_dropdown_defaultcart = 1;
  var enable_flycart_effect = 1;
  var enable_notification = 1;
  var height_cart_item = "135";
  var isLogged = false;
  var leo_push = 0;
  var leo_search_url =
    "home-3.html\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/module\/leoproductsearch\/productsearch";
  var leo_token = "eea65250656b3ff1e7f979b1248d0132";
  var leoproductsearch_static_token = "eea65250656b3ff1e7f979b1248d0132";
  var leoproductsearch_token = "2f950231b93bce867412e7f4edcf406f";
  var lf_is_gen_rtl = false;
  var lps_show_product_img = "1";
  var lps_show_product_price = "1";
  var lql_ajax_url =
    "home-3.html\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/module\/leoquicklogin\/leocustomer";
  var lql_is_gen_rtl = false;
  var lql_module_dir = "#\/demo\/at_dimita_demo\/modules\/leoquicklogin\/";
  var lql_myaccount_url =
    "home-3.html\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/my-account";
  var lql_redirect = "";
  var number_cartitem_display = 3;
  var numpro_display = "100";
  var prestashop = {
    cart: {
      products: [],
      totals: {
        total: {
          type: "total",
          label: "Total",
          amount: 0,
          value: "$0.00"
        },
        total_including_tax: {
          type: "total",
          label: "Total (tax incl.)",
          amount: 0,
          value: "$0.00",
        },
        total_excluding_tax: {
          type: "total",
          label: "Total (tax excl.)",
          amount: 0,
          value: "$0.00",
        },
      },
      subtotals: {
        products: {
          type: "products",
          label: "Subtotal",
          amount: 0,
          value: "$0.00",
        },
        discounts: null,
        shipping: {
          type: "shipping",
          label: "Shipping",
          amount: 0,
          value: "",
        },
        tax: {
          type: "tax",
          label: "Taxes",
          amount: 0,
          value: "$0.00"
        },
      },
      products_count: 0,
      summary_string: "0 items",
      vouchers: {
        allowed: 0,
        added: []
      },
      discounts: [],
      minimalPurchase: 0,
      minimalPurchaseRequired: "",
    },
    currency: {
      id: 1,
      name: "US Dollar",
      iso_code: "USD",
      iso_code_num: "840",
      sign: "$",
    },
    customer: {
      lastname: null,
      firstname: null,
      email: null,
      birthday: null,
      newsletter: null,
      newsletter_date_add: null,
      optin: null,
      website: null,
      company: null,
      siret: null,
      ape: null,
      is_logged: false,
      gender: {
        type: null,
        name: null
      },
      addresses: [],
    },
    language: {
      name: "English (English)",
      iso_code: "en",
      locale: "en-US",
      language_code: "en-us",
      is_rtl: "0",
      date_format_lite: "m\/d\/Y",
      date_format_full: "m\/d\/Y H:i:s",
      id: 1,
    },
    page: {
      title: "",
      canonical: null,
      meta: {
        title: "Dimita Electronics",
        description: "Shop powered by PrestaShop",
        keywords: "",
        robots: "index",
      },
      page_name: "index",
      body_classes: {
        "lang-en": true,
        "lang-rtl": false,
        "country-US": true,
        "currency-USD": true,
        "layout-full-width": true,
        "tax-display-enabled": true,
        "page-index": true,
      },
      admin_notifications: [],
    },
    shop: {
      name: "Dimita Electronics",
      logo: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/img\/dimita-electronics-logo-1613756035.jpg",
      stores_icon: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/img\/logo_stores.png",
      favicon: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/img\/favicon.ico",
    },
    urls: {
      base_url: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/",
      current_url: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/home-3.html",
      shop_domain_url: "https:\/\/rubiktheme.com",
      img_ps_url: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/img\/",
      img_cat_url: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/img\/c\/",
      img_lang_url: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/img\/l\/",
      img_prod_url: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/img\/p\/",
      img_manu_url: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/img\/m\/",
      img_sup_url: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/img\/su\/",
      img_ship_url: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/img\/s\/",
      img_store_url: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/img\/st\/",
      img_col_url: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/img\/co\/",
      img_url: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/themes\/at_dimita\/assets\/img\/",
      css_url: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/themes\/at_dimita\/assets\/css\/",
      js_url: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/themes\/at_dimita\/assets\/js\/",
      pic_url: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/upload\/",
      pages: {
        address: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/address",
        addresses: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/addresses",
        authentication: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/login",
        cart: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/cart",
        category: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/index.php?controller=category",
        cms: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/index.php?controller=cms",
        contact: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/contact-us",
        discount: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/discount",
        guest_tracking: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/guest-tracking",
        history: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/order-history",
        identity: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/identity",
        index: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/",
        my_account: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/my-account",
        order_confirmation: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/order-confirmation",
        order_detail: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/index.php?controller=order-detail",
        order_follow: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/order-follow",
        order: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/order",
        order_return: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/index.php?controller=order-return",
        order_slip: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/credit-slip",
        pagenotfound: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/page-not-found",
        password: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/password-recovery",
        pdf_invoice: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/index.php?controller=pdf-invoice",
        pdf_order_return: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/index.php?controller=pdf-order-return",
        pdf_order_slip: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/index.php?controller=pdf-order-slip",
        prices_drop: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/prices-drop",
        product: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/index.php?controller=product",
        search: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/search",
        sitemap: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/sitemap",
        stores: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/stores",
        supplier: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/supplier",
        register: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/login?create_account=1",
        order_login: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/order?login=1",
      },
      alternative_langs: {
        "en-us": "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/module\/appagebuilder\/appagebuilderhome?module=appagebuilder",
        "fr-fr": "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/fr\/module\/appagebuilder\/appagebuilderhome?module=appagebuilder",
        "de-de": "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/de\/module\/appagebuilder\/appagebuilderhome?module=appagebuilder",
        "es-es": "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/es\/module\/appagebuilder\/appagebuilderhome?module=appagebuilder",
        "it-it": "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/it\/module\/appagebuilder\/appagebuilderhome?module=appagebuilder",
        "ar-sa": "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/ar\/module\/appagebuilder\/appagebuilderhome?module=appagebuilder",
      },
      theme_assets: "\/demo\/at_dimita_demo\/themes\/at_dimita\/assets\/",
      actions: {
        logout: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/?mylogout=",
      },
      no_picture_image: {
        bySize: {
          small_default: {
            url: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/img\/p\/en-default-small_default.jpg",
            width: 98,
            height: 98,
          },
          cart_default: {
            url: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/img\/p\/en-default-cart_default.jpg",
            width: 135,
            height: 135,
          },
          medium_default: {
            url: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/img\/p\/en-default-medium_default.jpg",
            width: 240,
            height: 240,
          },
          home_default: {
            url: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/img\/p\/en-default-home_default.jpg",
            width: 720,
            height: 720,
          },
          large_default: {
            url: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/img\/p\/en-default-large_default.jpg",
            width: 720,
            height: 720,
          },
        },
        small: {
          url: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/img\/p\/en-default-small_default.jpg",
          width: 98,
          height: 98,
        },
        medium: {
          url: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/img\/p\/en-default-medium_default.jpg",
          width: 240,
          height: 240,
        },
        large: {
          url: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/img\/p\/en-default-large_default.jpg",
          width: 720,
          height: 720,
        },
        legend: "",
      },
    },
    configuration: {
      display_taxes_label: true,
      display_prices_tax_incl: false,
      is_catalog: false,
      show_prices: true,
      opt_in: {
        partner: true
      },
      quantity_discount: {
        type: "discount",
        label: "Unit discount"
      },
      voucher_enabled: 0,
      return_enabled: 0,
    },
    field_required: [],
    breadcrumb: {
      links: [{
        title: "Home",
        url: "https:\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/",
      }, ],
      count: 1,
    },
    link: {
      protocol_link: "https:\/\/",
      protocol_content: "https:\/\/"
    },
    time: 1657918944,
    static_token: "eea65250656b3ff1e7f979b1248d0132",
    token: "2f950231b93bce867412e7f4edcf406f",
    debug: false,
  };
  var productcompare_add = "The product has been added to list compare";
  var productcompare_add_error =
    "An error occurred while adding. Please try again";
  var productcompare_max_item =
    "You cannot add more than 3 product(s) to the product comparison";
  var productcompare_remove =
    "The product was successfully removed from list compare";
  var productcompare_remove_error =
    "An error occurred while removing. Please try again";
  var productcompare_url =
    "home-3.html\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/module\/leofeature\/productscompare";
  var productcompare_viewlistcompare = "View list compare";
  var psemailsubscription_subscription =
    "home-3.html\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/module\/ps_emailsubscription\/subscription";
  var psr_icon_color = "#F19D76";
  var review_error =
    "An error occurred while processing your request. Please try again";
  var show_popup = 1;
  var text_no_product = "Don't have products";
  var text_results_count = "results";
  var type_dropdown_defaultcart = "dropdown";
  var type_flycart_effect = "fade";
  var url_leoproductattribute =
    "home-3.html\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/module\/leofeature\/LeoProductAttribute";
  var width_cart_item = "265";
  var wishlist_add = "The product was successfully added to your wishlist";
  var wishlist_cancel_txt = "Cancel";
  var wishlist_confirm_del_txt = "Delete selected item?";
  var wishlist_del_default_txt = "Cannot delete default wishlist";
  var wishlist_email_txt = "Email";
  var wishlist_loggin_required =
    "You must be logged in to manage your wishlist";
  var wishlist_ok_txt = "Ok";
  var wishlist_quantity_required = "You must enter a quantity";
  var wishlist_remove =
    "The product was successfully removed from your wishlist";
  var wishlist_reset_txt = "Reset";
  var wishlist_send_txt = "Send";
  var wishlist_send_wishlist_txt = "Send wishlist";
  var wishlist_url =
    "home-3.html\/\/rubiktheme.com\/demo\/at_dimita_demo\/en\/module\/leofeature\/mywishlist";
  var wishlist_viewwishlist = "View your wishlist";
  </script>
  <script type="text/javascript">
  var choosefile_text = "Choose file";
  var turnoff_popup_text = "Do not show this popup again";

  var size_item_quickview = 144;
  var style_scroll_quickview = "horizontal";

  var size_item_page = 144;
  var style_scroll_page = "horizontal";

  var size_item_quickview_attr = 144;
  var style_scroll_quickview_attr = "horizontal";

  var size_item_popup = 190;
  var style_scroll_popup = "vertical";
  </script>

  <script type="text/javascript">
  var FancyboxI18nClose = "Close";
  var FancyboxI18nNext = "Next";
  var FancyboxI18nPrev = "Previous";
  var current_link = "index.html";
  var currentURL = window.location;
  currentURL = String(currentURL);
  currentURL = currentURL
    .replace("https:///", "")
    .replace("http://", "")
    .replace("www.", "")
    .replace(/#\w*/, "");
  current_link = current_link
    .replace("https:///", "")
    .replace("http://", "")
    .replace("www.", "");
  var text_warning_select_txt = "Please select One to remove?";
  var text_confirm_remove_txt = "Are you sure to remove footer row?";
  var close_bt_txt = "Close";
  var list_menu = [];
  var list_menu_tmp = {};
  var list_tab = [];
  var isHomeMenu = 0;
  </script>
  <!-- @file modules\appagebuilder\views\templates\hook\header -->

  <script>
  /**
   * List functions will run when document.ready()
   */
  var ap_list_functions = [];
  /**
   * List functions will run when window.load()
   */
  var ap_list_functions_loaded = [];

  /**
   * List functions will run when document.ready() for theme
   */

  var products_list_functions = [];
  </script>

  <script type="text/javascript">
  var leoOption = {
    category_qty: 1,
    product_list_image: 1,
    product_one_img: 1,
    productCdown: 1,
    productColor: 0,
    homeWidth: 720,
    homeheight: 720,
  };

  ap_list_functions.push(function() {
    if (
      typeof $.LeoCustomAjax !== "undefined" &&
      $.isFunction($.LeoCustomAjax)
    ) {
      var leoCustomAjax = new $.LeoCustomAjax();
      leoCustomAjax.processAjax();
    }
  });
  </script>
  <link href="https://fonts.googleapis.com/css?family=4" rel="stylesheet" type="text/css" media="all" />

  <script type="text/javascript">
  var cb_settings = {
    cb_bg_color: "rgba(23, 25, 28, 0.85)",
    cb_font_style: "4",
    cb_text_color: "#efefef",
    cb_inf_text_color: "#25B9D7",
    cb_loop: "1",
    cb_font_size: "12",
    cb_button_bg_color: "#25B9D7",
    cb_button_bg_color_hover: "#1e94ab",
    cb_button_text_color: "#ffffff",
  };

  var cb_cms_url = "content/2-legal-notice.html";
  var cb_position = "bottom";
  var cb_text =
    "To give you the best possible experience, this site uses cookies. Using your site means your agree to our use of cookies. We have published a new cookies policy, which you should need to find out more about the cookies we use.";
  var cb_link_text = "View cookies policy.";
  var cd_button_text = "Accept";
  </script>
  <?php wp_head() ?>
</head>

<body id="index" class="lang-en country-us currency-usd layout-full-width tax-display-enabled page-index fullwidth">
  <script>
  window.fbAsyncInit = function() {
    FB.init({
      appId: "441506616218023",
      cookie: true, // enable cookies to allow the server to access
      xfbml: true, // parse social plugins on this page
      version: "v2.9", // use graph api version 2.8
      scope: "email, user_birthday",
    });
  };

  // Load the SDK asynchronously
  (function(d, s, id) {
    var js,
      fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s);
    js.id = id;
    js.src =
      "<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri(); ?>/connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  })(document, "script", "facebook-jssdk");
  </script>

  <!-- <script>
  var google_client_id =
    "1038085221664-a11l6ld3cq8b3qcbejud1bsp8gsf5m0j.apps.googleusercontent.com";
  </script>
  <script src="/<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri(); ?>/apis.google.com/js/api_client.js"></script> -->

  <main id="page">

    <header id="header">

      <div class="header-container">

        <div class="header-banner">
          <div class="container">
            <div class="inner"></div>
          </div>
        </div>

        <nav class="header-nav">
          <div class="topnav">
            <div class="inner">
              <!-- @file modules\appagebuilder\views\templates\hook\ApRow -->
              <div class="wrapper" style="background: #efefef no-repeat">
                <div class="container">
                  <div class="row ApRow has-bg bg-fullwidth-container" style="">
                    <!-- @file modules\appagebuilder\views\templates\hook\ApColumn -->
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12 col-sp-12 hidden-xs-down ApColumn">
                      <!-- @file modules\appagebuilder\views\templates\hook\ApGeneral -->
                      <div class="block topnav-left style-0 ApRawHtml">
                        <div class="email">
                          <label>Email:</label>
                          <a href="mailto:contato@pentalobe.com.br"> contato@pentalobe.com.br</a>
                        </div>
                        <div class="email">
                          <a href="tel:5547991839432">(47)99183-9432</a>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>

              <script>
              ap_list_functions.push(function() {
                $.stellar({
                  horizontalScrolling: false
                });
              });
              </script>
            </div>
          </div>
          <div class="bottomnav">
            <div class="inner"></div>
          </div>
        </nav>

        <div class="header-top">
          <div class="inner">
            <!-- @file modules\appagebuilder\views\templates\hook\ApRow -->
            <div class="wrapper">
              <div class="container">
                <div class="row box-header-top style-0 ApRow" style="">
                  <!-- @file modules\appagebuilder\views\templates\hook\ApColumn -->
                  <div class="col-xl-3 col-lg-3 col-md-9 col-sm-8 col-xs-6 col-sp-5 col-logo ApColumn">
                    <!-- @file modules\appagebuilder\views\templates\hook\ApGenCode -->

                    <a href="<?php echo get_permalink(get_page_by_path('Home')) ?>">
                      <img class="logo img-fluid"
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/pentalobe.png"
                        alt="Logo Pentalobe" /></a>
                  </div>
                  <!-- @file modules\appagebuilder\views\templates\hook\ApColumn -->
                  <div class="col-xl-6 col-lg-6 col-md-1 col-sm-1 col-xs-2 col-sp-2 col-search ApColumn">
                    <!-- @file modules\appagebuilder\views\templates\hook\ApModule -->

                    <div id="leo_search_block_top" class="search-widget block exclusive search-by-category">
                      <a id="click_show_search" href="javascript:void(0)" data-toggle="dropdown"
                        class="float-xs-right popup-title">
                        <i class="pe-7s-search"></i>
                      </a>
                      <form method="get"
                        action="https://rubiktheme.com/demo/at_dimita_demo/en/index.php?controller=productsearch"
                        id="leosearchtopbox" data-label-suggestion="Suggestion" data-search-for="Search for"
                        data-in-category="in category" data-products-for="Products For" data-label-products="Products"
                        data-view-all="View all">
                        <input type="hidden" name="fc" value="module" />
                        <input type="hidden" name="module" value="leoproductsearch" />
                        <input type="hidden" name="controller" value="productsearch" />
                        <input type="hidden" name="leoproductsearch_static_token"
                          value="eea65250656b3ff1e7f979b1248d0132" />
                        <div class="block_content clearfix leoproductsearch-content">
                          <div class="list-cate-wrapper">
                            <input id="leosearchtop-cate-id" name="cate" value="" type="hidden" />
                            <a href="#" id="dropdownListCateTop" class="select-title" rel="nofollow"
                              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <span>Todas as categorias</span>
                              <i class="fa fa-angle-down"></i>
                            </a>
                            <div class="list-cate dropdown-menu" aria-labelledby="dropdownListCateTop">
                              <a href="#" data-cate-id="" data-cate-name="All Categories" class="cate-item active">Todas
                                as categorias</a>
                              <a href="#" data-cate-id="2" data-cate-name="Home" class="cate-item cate-level-1">Home</a>

                              <a href="#" data-cate-id="3" data-cate-name="Shop"
                                class="cate-item cate-level-2">Iphone</a>
                              <a href="#" data-cate-id="4" data-cate-name="Computer &amp; Laptop"
                                class="cate-item cate-level-3">MacBook</a>
                              <a href="#" data-cate-id="10" data-cate-name="Recorders"
                                class="cate-item cate-level-4">Apple Watch</a>
                              <a href="#" data-cate-id="11" data-cate-name="DVD Players &amp; Recorders"
                                class="cate-item cate-level-4">Acessórios</a>
                              <a href="#" data-cate-id="12" data-cate-name="DVD-VCR Combos"
                                class="cate-item cate-level-4">Ipad</a>
                            </div>
                          </div>

                          <div class="leoproductsearch-result">

                            <input class="search_query form-control grey" type="text" id="leo_search_query_top"
                              name="search_query" value="" placeholder="Search our catalog" />
                            <button type="submit" id="leo_search_top_button"
                              class="btn btn-default button button-small">
                              <i class="pe-7s-search"></i>
                            </button>
                            <div class="ac_results lps_results"></div>
                          </div>
                        </div>
                      </form>
                    </div>

                    <script type="text/javascript">
                    var blocksearch_type = "top";
                    </script>
                  </div>

                  <!--FORM MODAL HOME-->
                  <!-- @file modules\appagebuilder\views\templates\hook\ApColumn -->
                  <div class="col-xl-3 col-lg-3 col-md-2 col-sm-3 col-xs-4 col-sp-5 col-info style-0 ApColumn">
                    <!-- @file modules\appagebuilder\views\templates\hook\ApModule -->
                    <div class="dropdown">
                      <div class="ap-quick-login js-dropdown popup-over">
                        <a href="javascript:void(0)" class="leo-quickloginleo-dropdown dropdown-toggle popup-title"
                          data-enable-sociallogin="" data-type="dropdown" data-layout="login" data-toggle="dropdown"
                          aria-haspopup="true" aria-expanded="false" title="Quick Login" rel="nofollow">
                          <i class="icon-user"></i>
                          <span class="text-title hidden-xl-down">Login</span>
                        </a>
                        <div class="popup-content dropdown-menu leo-dropdown-wrapper">
                          <div class="leo-quicklogin-form row dropdown">
                            <div class="leo-form leo-login-form col-sm-12 leo-form-active full-width">
                              <h3 class="leo-login-title">
                                <span class="title-both">
                                  Existing Account Login
                                </span>
                                <span class="title-only">
                                  Faça login na sua conta
                                </span>
                              </h3>
                              <form class="lql-form-content leo-login-form-content" action="#" method="post">
                                <div class="form-group lql-form-mesg has-success"></div>
                                <div class="form-group lql-form-mesg has-danger"></div>
                                <div class="form-group lql-form-content-element">
                                  <input type="email" class="form-control lql-email-login" name="lql-email-login"
                                    required="" placeholder="Email Address" />
                                </div>
                                <div class="form-group lql-form-content-element">
                                  <input type="password" class="form-control lql-pass-login" name="lql-pass-login"
                                    required="" placeholder="Password" />
                                </div>
                                <div class="form-group row lql-form-content-element">
                                  <div class="col-xs-6">
                                    <input type="checkbox" class="lql-rememberme" name="lql-rememberme" />
                                    <label class="form-control-label"><span>Remember Me</span></label>
                                  </div>
                                  <div class="col-xs-6 text-sm-right">
                                    <a role="button" href="#" class="leoquicklogin-forgotpass">esqueci minha senha</a>
                                  </div>
                                </div>
                                <div class="form-group text-right">
                                  <button type="submit"
                                    class="form-control-submit lql-form-bt lql-login-bt btn btn-primary">
                                    <span class="leoquicklogin-loading leoquicklogin-cssload-speeding-wheel"></span>
                                    <i class="leoquicklogin-icon leoquicklogin-success-icon material-icons">&#xE876;</i>
                                    <i class="leoquicklogin-icon leoquicklogin-fail-icon material-icons">&#xE033;</i>
                                    <span class="lql-bt-txt"> Login </span>
                                  </button>
                                </div>
                                <div class="form-group lql-callregister">
                                  <a role="button" href="#" class="lql-callregister-action">Não é cadastrado?
                                    Cadastre-se
                                  </a>
                                </div>
                              </form>
                              <div class="leo-resetpass-form">
                                <h3>Reset Password</h3>
                                <form class="lql-form-content leo-resetpass-form-content" action="#" method="post">
                                  <div class="form-group lql-form-mesg has-success"></div>
                                  <div class="form-group lql-form-mesg has-danger"></div>
                                  <div class="form-group lql-form-content-element">
                                    <input type="email" class="form-control lql-email-reset" name="lql-email-reset"
                                      required="" placeholder="Email Address" />
                                  </div>
                                  <div class="form-group">
                                    <button type="submit"
                                      class="form-control-submit lql-form-bt leoquicklogin-reset-pass-bt btn btn-primary">
                                      <span class="leoquicklogin-loading leoquicklogin-cssload-speeding-wheel"></span>
                                      <i
                                        class="leoquicklogin-icon leoquicklogin-success-icon material-icons">&#xE876;</i>
                                      <i class="leoquicklogin-icon leoquicklogin-fail-icon material-icons">&#xE033;</i>
                                      <span class="lql-bt-txt">
                                        Reset Password
                                      </span>
                                    </button>
                                  </div>
                                </form>
                              </div>
                            </div>
                            <div class="leo-form leo-register-form col-sm-12 leo-form-inactive full-width">
                              <h3 class="leo-register-title">
                                Criar conta
                              </h3>
                              <form class="lql-form-content leo-register-form-content" action="#" method="post">
                                <div class="form-group lql-form-mesg has-success"></div>
                                <div class="form-group lql-form-mesg has-danger"></div>
                                <div class="form-group lql-form-content-element">
                                  <input type="text" class="form-control lql-register-firstname"
                                    name="lql-register-firstname" required="" placeholder="Nome" />
                                </div>
                                <div class="form-group lql-form-content-element">
                                  <input type="text" class="form-control lql-register-lastname"
                                    name="lql-register-lastname" required="" placeholder="Sobrenome" />
                                </div>
                                <div class="form-group lql-form-content-element">
                                  <input type="email" class="form-control lql-register-email" name="lql-register-email"
                                    required="" placeholder="Email" />
                                </div>
                                <div class="form-group lql-form-content-element">
                                  <input type="password" class="form-control lql-register-pass" name="lql-register-pass"
                                    required="" placeholder="Senha" />
                                </div>
                                <div class="form-group text-right">
                                  <button type="submit"
                                    class="form-control-submit lql-form-bt lql-register-bt btn btn-primary">
                                    <span class="leoquicklogin-loading leoquicklogin-cssload-speeding-wheel"></span>
                                    <i class="leoquicklogin-icon leoquicklogin-success-icon material-icons">&#xE876;</i>
                                    <i class="leoquicklogin-icon leoquicklogin-fail-icon material-icons">&#xE033;</i>
                                    <span class="lql-bt-txt">
                                      Enviar
                                    </span>
                                  </button>
                                </div>
                                <div class="form-group lql-calllogin">
                                  <div>Já tem uma conta?</div>
                                  <a role="button" href="#" class="lql-calllogin-action">Faça login</a>
                                  Ou
                                  <a role="button" href="#" class="lql-calllogin-action lql-callreset-action">Redefinir
                                    senha</a>
                                </div>
                              </form>
                            </div>
                          </div>

                          <div class="lql-social-login clearfix show-bt-txt">
                            <h3 class="lql-social-login-title">
                              Faça login com suas redes sociais
                            </h3>
                            <button class="btn social-login-bt facebook-login-bt" onclick="doFbLogin();">
                              <span class="fa fa-facebook"></span>Sign in with
                              Facebook
                            </button>


                            <button class="btn social-login-bt google-login-bt">
                              <span class="fa fa-google"></span>Sign in with
                              Google
                            </button>
                            <button class="btn social-login-bt twitter-login-bt">
                              <span class="fa fa-twitter"></span>Sign in with
                              Twitter
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- @file modules\appagebuilder\views\templates\hook\ApGenCode -->

                    <ul class="button-list">
                      <li>
                        <a class="ap-btn-wishlist" href="login84a3.html" title="Wishlist" rel="nofollow">
                          <i class="icon-like"></i>
                          <span class="ap-total-wishlist ap-total"></span>
                        </a>
                      </li>
                    </ul>
                    <!-- @file modules\appagebuilder\views\templates\hook\ApModule -->
                    <div id="cart-block">
                      <div class="blockcart cart-preview inactive"
                        data-refresh-url="//rubiktheme.com/demo/at_dimita_demo/en/module/ps_shoppingcart/ajax">
                        <div class="header">
                          <span class="title_cart">Cart</span>
                          <i class="icon_cart_alt"></i>
                          <div class="cart-quantity">
                            <span class="cart-products-count">0<span class="cart-unit hidden-xl-down">
                                items</span></span>
                          </div>
                          <div class="mini_card">
                            <span>Your cart is currently empty.</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- @file modules\appagebuilder\views\templates\hook\ApRow -->
            <div class="wrapper">

              <div class="container">

                <div class="row no-margin box-header-bottom style-0 ApRow" style="">
                  <!-- @file modules\appagebuilder\views\templates\hook\ApColumn -->

                  <div class="col-xl-9 col-lg-9 col-md-6 col-sm-2 col-xs-2 col-sp-2 no-padding ApColumn">
                    <!-- @file modules\appagebuilder\views\templates\hook\ApSlideShow -->
                    <div id="memgamenu-form_1667339054" class="ApMegamenu">

                      <nav data-megamenu-id="1667339054"
                        class="leo-megamenu cavas_menu navbar navbar-default enable-canvas" role="navigation">

                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                          <button type="button" class="navbar-toggler hidden-lg-up" data-toggle="collapse"
                            data-target=".megamenu-off-canvas-1667339054">
                            <span class="sr-only">Toggle navigation</span>
                            &#9776;
                          </button>
                        </div>

                        <!--MENU NAVEGAÇÃO-->
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div
                          class="leo-top-menu collapse navbar-toggleable-md megamenu-off-canvas megamenu-off-canvas-1667339054">

                          <ul class="nav navbar-nav megamenu horizontal">

                            <li data-menu-type="controller" class="nav-item parent dropdown">
                              <a class="nav-link" data-toggle="dropdown"
                                href="<?php echo get_permalink(get_page_by_path('Home')) ?>" target="_self">
                                <span class="menu-title">Home</span>
                              </a>
                            </li>

                            <li data-menu-type="category" class="nav-item parent dropdown aligned-fullwidth">
                              <a class="nav-link" data-toggle="dropdown" href="#" target="_self">
                                <span class="menu-title">Quero vender</span>
                              </a>

                            </li>

                            <li data-menu-type="cms" class="nav-item parent dropdown">
                              <a class="nav-link dropdown-toggle has-category" data-toggle="dropdown" href="#"
                                target="_self">
                                <span class="menu-title">Loja</span>
                              </a>
                              <b class="caret"></b>
                              <div class="dropdown-menu level1">
                                <div class="dropdown-menu-inner">
                                  <div class="row">
                                    <div class="col-sm-12 mega-col" data-colwidth="12" data-type="menu">
                                      <div class="inner">
                                        <ul>
                                          <li data-menu-type="cms" class="nav-item">
                                            <a class="nav-link" href="#" target="_self">
                                              <span class="menu-title">IPhone</span>
                                            </a>
                                          </li>

                                          <li data-menu-type="cms" class="nav-item">
                                            <a class="nav-link" href="#" target="_self">
                                              <span class="menu-title">MacBook</span>
                                            </a>
                                          </li>

                                          <li data-menu-type="cms" class="nav-item">
                                            <a class="nav-link" href="#" target="_self">
                                              <span class="menu-title">Apple Watch</span>
                                            </a>
                                          </li>

                                          <li data-menu-type="cms" class="nav-item">
                                            <a class="nav-link" href="#" target="_self">
                                              <span class="menu-title">Acessórios</span>
                                            </a>
                                          </li>
                                          <li data-menu-type="cms" class="nav-item">
                                            <a class="nav-link" href="#" target="_self">
                                              <span class="menu-title">IPad</span>
                                            </a>
                                          </li>

                                          <!-- <li data-menu-type="category" class="nav-item parent dropdown-submenu">
                                            <a class="nav-link dropdown-toggle" data-toggle="dropdown"
                                              href="7-headphones.html" target="_self">
                                              <span class="menu-title">Seasonings</span>
                                            </a>
                                            <b class="caret"></b>
                                            <div class="dropdown-menu level2">
                                              <div class="dropdown-menu-inner">
                                                <div class="row">
                                                  <div class="col-sm-12 mega-col" data-colwidth="12" data-type="menu">
                                                    <div class="inner">
                                                      <ul>
                                                        <li data-menu-type="category" class="nav-item">
                                                          <a class="nav-link" href="5-camera-photo.html" target="_self">
                                                            <span class="menu-title">Spice
                                                              Sets</span>
                                                          </a>
                                                        </li>

                                                        <li data-menu-type="category" class="nav-item">
                                                          <a class="nav-link" href="9-technologies.html" target="_self">
                                                            <span class="menu-title">Coriander</span>
                                                          </a>
                                                        </li>

                                                        <li data-menu-type="category" class="nav-item">
                                                          <a class="nav-link" href="4-computer-laptop.html"
                                                            target="_self">
                                                            <span class="menu-title">Turmeric</span>
                                                          </a>
                                                        </li>
                                                      </ul>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </li> -->

                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </li>

                            <li data-menu-type="cms" class="nav-item parent dropdown">
                              <a class="nav-link dropdown-toggle has-category" data-toggle="dropdown" href="#"
                                target="_self">
                                <span class="menu-title">Sobre Nós</span>
                              </a>
                              <b class="caret"></b>
                              <div class="dropdown-menu level1">
                                <div class="dropdown-menu-inner">
                                  <div class="row">
                                    <div class="col-sm-12 mega-col" data-colwidth="12" data-type="menu">
                                      <div class="inner">
                                        <ul>
                                          <li data-menu-type="cms" class="nav-item">
                                            <a class="nav-link" href="#" target="_self">
                                              <span class="menu-title">Sobre a Pentalobe</span>
                                            </a>
                                          </li>

                                          <li data-menu-type="cms" class="nav-item">
                                            <a class="nav-link" href="#" target="_self">
                                              <span class="menu-title">Politica de privacidade</span>
                                            </a>
                                          </li>

                                          <li data-menu-type="cms" class="nav-item">
                                            <a class="nav-link" href="#" target="_self">
                                              <span class="menu-title">Termos e condições</span>
                                            </a>
                                          </li>

                                          <li data-menu-type="cms" class="nav-item">
                                            <a class="nav-link" href="#" target="_self">
                                              <span class="menu-title">Trocas e condições</span>
                                            </a>
                                          </li>

                                          <!-- <li data-menu-type="category" class="nav-item parent dropdown-submenu">
                                            <a class="nav-link dropdown-toggle" data-toggle="dropdown"
                                              href="7-headphones.html" target="_self">
                                              <span class="menu-title">Seasonings</span>
                                            </a>
                                            <b class="caret"></b>
                                            <div class="dropdown-menu level2">
                                              <div class="dropdown-menu-inner">
                                                <div class="row">
                                                  <div class="col-sm-12 mega-col" data-colwidth="12" data-type="menu">
                                                    <div class="inner">
                                                      <ul>
                                                        <li data-menu-type="category" class="nav-item">
                                                          <a class="nav-link" href="5-camera-photo.html" target="_self">
                                                            <span class="menu-title">Spice
                                                              Sets</span>
                                                          </a>
                                                        </li>

                                                        <li data-menu-type="category" class="nav-item">
                                                          <a class="nav-link" href="9-technologies.html" target="_self">
                                                            <span class="menu-title">Coriander</span>
                                                          </a>
                                                        </li>

                                                        <li data-menu-type="category" class="nav-item">
                                                          <a class="nav-link" href="4-computer-laptop.html"
                                                            target="_self">
                                                            <span class="menu-title">Turmeric</span>
                                                          </a>
                                                        </li>
                                                      </ul>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </li> -->

                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </li>

                            <li data-menu-type="url" class="nav-item">
                              <a class="nav-link has-category" href="#" target="_self">
                                <span class="menu-title">Blog</span>
                              </a>
                            </li>

                            <li data-menu-type="controller" class="nav-item">
                              <a class="nav-link has-category" href="#" target="_self">
                                <span class="menu-title">Contato</span>
                              </a>
                            </li>

                          </ul>
                        </div>
                      </nav>


                      <script type="text/javascript">
                      list_menu_tmp.id = "1667339054";
                      list_menu_tmp.type = "horizontal";
                      list_menu_tmp.show_cavas = 1;
                      list_menu_tmp.list_tab = list_tab;
                      list_menu.push(list_menu_tmp);
                      list_menu_tmp = {};
                      list_tab = {};
                      </script>
                    </div>
                  </div>
                  <!-- @file modules\appagebuilder\views\templates\hook\ApColumn -->
                  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-10 col-xs-10 col-sp-10 col-info no-padding ApColumn">
                    <!-- @file modules\appagebuilder\views\templates\hook\ApGeneral -->
                    <div class="block no-margin shipping ApRawHtml">
                      <div class="text">Calcule seu frete</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Block search module TOP -->
            <div id="search_widget" class="search-widget"
              data-search-controller-url="//rubiktheme.com/demo/at_dimita_demo/en/search">
              <a id="click_show_search" href="javascript:void(0)" data-toggle="dropdown"
                class="float-xs-right popup-title">
                <i class="pe-7s-search"></i>
              </a>
              <span class="close-overlay"><i class="material-icons">&#xE5CD;</i></span>
              <div class="over-layer"></div>
              <div class="block-form clearfix">
                <span class="search-caption">Just start searching...</span>
                <form method="get" class="form-search" action="http://rubiktheme.com/demo/at_dimita_demo/en/search">
                  <input type="hidden" name="controller" value="search" />
                  <input class="search_query" type="text" name="s" value="" placeholder="O que você procura?" />
                  <button class=" search-button" type="submit">
                    <i class="pe-7s-search"></i>
                  </button>
                </form>
              </div>
            </div>
            <!-- /Block search module TOP -->
          </div>
        </div>

      </div>
    </header>

    <aside id="notifications">
      <div class="container"></div>
    </aside>