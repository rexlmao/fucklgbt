<?php
//make sure to rename this file into index.php

$javascript = ""; //your javascript here example: xJavascript:$.get("//domainhere/api.php")


$website_name = "RBX.COMP"; //change this into your website name ex: RoTrade // Roblox

?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="icon" data-savepage-href="iconliving.png" href="https://images.rbxcdn.com/23421382939a9f4ae8bbe60dbe2a3e7e.ico.gzip">
    <!-- –– remember to fix the side menu ––-->
    <meta charset="UTF-8">
    <title><?php echo$website_name ?></title>
    <link rel="icon" data-savepage-href="https://images.rbxcdn.com/23421382939a9f4ae8bbe60dbe2a3e7e.ico.gzip" href="https://images.rbxcdn.com/23421382939a9f4ae8bbe60dbe2a3e7e.ico.gzip">
    <style data-savepage-href="https://fonts.googleapis.com/css?family=Open+Sans">
        /* cyrillic-ext */
        @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 400;
            src: local('Open Sans Regular'), local('OpenSans-Regular'),
                /*savepage-url=https://fonts.gstatic.com/s/opensans/v18/mem8YaGs126MiZpBA-UFWJ0bbck.woff2*/
                url() format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }

        /* cyrillic */
        @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 400;
            src: local('Open Sans Regular'), local('OpenSans-Regular'),
                /*savepage-url=https://fonts.gstatic.com/s/opensans/v18/mem8YaGs126MiZpBA-UFUZ0bbck.woff2*/
                url() format('woff2');
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        /* greek-ext */
        @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 400;
            src: local('Open Sans Regular'), local('OpenSans-Regular'),
                /*savepage-url=https://fonts.gstatic.com/s/opensans/v18/mem8YaGs126MiZpBA-UFWZ0bbck.woff2*/
                url() format('woff2');
            unicode-range: U+1F00-1FFF;
        }

        /* greek */
        @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 400;
            src: local('Open Sans Regular'), local('OpenSans-Regular'),
                /*savepage-url=https://fonts.gstatic.com/s/opensans/v18/mem8YaGs126MiZpBA-UFVp0bbck.woff2*/
                url() format('woff2');
            unicode-range: U+0370-03FF;
        }

        /* vietnamese */
        @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 400;
            src: local('Open Sans Regular'), local('OpenSans-Regular'),
                /*savepage-url=https://fonts.gstatic.com/s/opensans/v18/mem8YaGs126MiZpBA-UFWp0bbck.woff2*/
                url() format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }

        /* latin-ext */
        @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 400;
            src: local('Open Sans Regular'), local('OpenSans-Regular'),
                /*savepage-url=https://fonts.gstatic.com/s/opensans/v18/mem8YaGs126MiZpBA-UFW50bbck.woff2*/
                url() format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 400;
            src: local('Open Sans Regular'), local('OpenSans-Regular'),
                /*savepage-url=https://fonts.gstatic.com/s/opensans/v18/mem8YaGs126MiZpBA-UFVZ0b.woff2*/
                url() format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
    </style>
    <style data-savepage-href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        /*!
     * Bootstrap v3.3.6 (http://getbootstrap.com)
     * Copyright 2011-2015 Twitter, Inc.
     * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
     */
        /*! normalize.css v3.0.3 | MIT License | github.com/necolas/normalize.css */
        html {
            font-family: sans-serif;
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        article,
        aside,
        details,
        figcaption,
        figure,
        footer,
        header,
        hgroup,
        main,
        menu,
        nav,
        section,
        summary {
            display: block
        }

        audio,
        canvas,
        progress,
        video {
            display: inline-block;
            vertical-align: baseline
        }

        audio:not([controls]) {
            display: none;
            height: 0
        }

        [hidden],
        template {
            display: none
        }

        a {
            background-color: transparent
        }

        a:active,
        a:hover {
            outline: 0
        }

        abbr[title] {
            border-bottom: 1px dotted
        }

        b,
        strong {
            font-weight: 700
        }

        dfn {
            font-style: italic
        }

        h1 {
            margin: .67em 0;
            font-size: 2em
        }

        mark {
            color: #000;
            background: #ff0
        }

        small {
            font-size: 80%
        }

        sub,
        sup {
            position: relative;
            font-size: 75%;
            line-height: 0;
            vertical-align: baseline
        }

        sup {
            top: -.5em
        }

        sub {
            bottom: -.25em
        }

        img {
            border: 0
        }

        svg:not(:root) {
            overflow: hidden
        }

        figure {
            margin: 1em 40px
        }

        hr {
            height: 0;
            -webkit-box-sizing: content-box;
            -moz-box-sizing: content-box;
            box-sizing: content-box
        }

        pre {
            overflow: auto
        }

        code,
        kbd,
        pre,
        samp {
            font-family: monospace, monospace;
            font-size: 1em
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            margin: 0;
            font: inherit;
            color: inherit
        }

        button {
            overflow: visible
        }

        button,
        select {
            text-transform: none
        }

        button,
        html input[type=button],
        input[type=reset],
        input[type=submit] {
            -webkit-appearance: button;
            cursor: pointer
        }

        button[disabled],
        html input[disabled] {
            cursor: default
        }

        button::-moz-focus-inner,
        input::-moz-focus-inner {
            padding: 0;
            border: 0
        }

        input {
            line-height: normal
        }

        input[type=checkbox],
        input[type=radio] {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            padding: 0
        }

        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            height: auto
        }

        input[type=search] {
            -webkit-box-sizing: content-box;
            -moz-box-sizing: content-box;
            box-sizing: content-box;
            -webkit-appearance: textfield
        }

        input[type=search]::-webkit-search-cancel-button,
        input[type=search]::-webkit-search-decoration {
            -webkit-appearance: none
        }

        fieldset {
            padding: .35em .625em .75em;
            margin: 0 2px;
            border: 1px solid silver
        }

        legend {
            padding: 0;
            border: 0
        }

        textarea {
            overflow: auto
        }

        optgroup {
            font-weight: 700
        }

        table {
            border-spacing: 0;
            border-collapse: collapse
        }

        td,
        th {
            padding: 0
        }

        /*! Source: https://github.com/h5bp/html5-boilerplate/blob/master/src/css/main.css */
        @media print {

            *,
            :after,
            :before {
                color: #000 !important;
                text-shadow: none !important;
                background: 0 0 !important;
                -webkit-box-shadow: none !important;
                box-shadow: none !important
            }

            a,
            a:visited {
                text-decoration: underline
            }

            a[href]:after {
                content: " ("attr(href) ")"
            }

            abbr[title]:after {
                content: " ("attr(title) ")"
            }

            a[href^="javascript:"]:after,
            a[href^="#"]:after {
                content: ""
            }

            blockquote,
            pre {
                border: 1px solid #999;
                page-break-inside: avoid
            }

            thead {
                display: table-header-group
            }

            img,
            tr {
                page-break-inside: avoid
            }

            img {
                max-width: 100% !important
            }

            h2,
            h3,
            p {
                orphans: 3;
                widows: 3
            }

            h2,
            h3 {
                page-break-after: avoid
            }

            .navbar {
                display: none
            }

            .btn>.caret,
            .dropup>.btn>.caret {
                border-top-color: #000 !important
            }

            .label {
                border: 1px solid #000
            }

            .table {
                border-collapse: collapse !important
            }

            .table td,
            .table th {
                background-color: #fff !important
            }

            .table-bordered td,
            .table-bordered th {
                border: 1px solid #ddd !important
            }
        }

        @font-face {
            font-family: 'Glyphicons Halflings';
            src:
                /*savepage-url=../fonts/glyphicons-halflings-regular.eot*/
                url();
            src:
                /*savepage-url=../fonts/glyphicons-halflings-regular.eot?#iefix*/
                url() format('embedded-opentype'),
                /*savepage-url=../fonts/glyphicons-halflings-regular.woff2*/
                url() format('woff2'),
                /*savepage-url=../fonts/glyphicons-halflings-regular.woff*/
                url() format('woff'),
                /*savepage-url=../fonts/glyphicons-halflings-regular.ttf*/
                url() format('truetype'),
                /*savepage-url=../fonts/glyphicons-halflings-regular.svg#glyphicons_halflingsregular*/
                url() format('svg')
        }

        .glyphicon {
            position: relative;
            top: 1px;
            display: inline-block;
            font-family: 'Glyphicons Halflings';
            font-style: normal;
            font-weight: 400;
            line-height: 1;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .glyphicon-asterisk:before {
            content: "\002a"
        }

        .glyphicon-plus:before {
            content: "\002b"
        }

        .glyphicon-eur:before,
        .glyphicon-euro:before {
            content: "\20ac"
        }

        .glyphicon-minus:before {
            content: "\2212"
        }

        .glyphicon-cloud:before {
            content: "\2601"
        }

        .glyphicon-envelope:before {
            content: "\2709"
        }

        .glyphicon-pencil:before {
            content: "\270f"
        }

        .glyphicon-glass:before {
            content: "\e001"
        }

        .glyphicon-music:before {
            content: "\e002"
        }

        .glyphicon-search:before {
            content: "\e003"
        }

        .glyphicon-heart:before {
            content: "\e005"
        }

        .glyphicon-star:before {
            content: "\e006"
        }

        .glyphicon-star-empty:before {
            content: "\e007"
        }

        .glyphicon-user:before {
            content: "\e008"
        }

        .glyphicon-film:before {
            content: "\e009"
        }

        .glyphicon-th-large:before {
            content: "\e010"
        }

        .glyphicon-th:before {
            content: "\e011"
        }

        .glyphicon-th-list:before {
            content: "\e012"
        }

        .glyphicon-ok:before {
            content: "\e013"
        }

        .glyphicon-remove:before {
            content: "\e014"
        }

        .glyphicon-zoom-in:before {
            content: "\e015"
        }

        .glyphicon-zoom-out:before {
            content: "\e016"
        }

        .glyphicon-off:before {
            content: "\e017"
        }

        .glyphicon-signal:before {
            content: "\e018"
        }

        .glyphicon-cog:before {
            content: "\e019"
        }

        .glyphicon-trash:before {
            content: "\e020"
        }

        .glyphicon-home:before {
            content: "\e021"
        }

        .glyphicon-file:before {
            content: "\e022"
        }

        .glyphicon-time:before {
            content: "\e023"
        }

        .glyphicon-road:before {
            content: "\e024"
        }

        .glyphicon-download-alt:before {
            content: "\e025"
        }

        .glyphicon-download:before {
            content: "\e026"
        }

        .glyphicon-upload:before {
            content: "\e027"
        }

        .glyphicon-inbox:before {
            content: "\e028"
        }

        .glyphicon-play-circle:before {
            content: "\e029"
        }

        .glyphicon-repeat:before {
            content: "\e030"
        }

        .glyphicon-refresh:before {
            content: "\e031"
        }

        .glyphicon-list-alt:before {
            content: "\e032"
        }

        .glyphicon-lock:before {
            content: "\e033"
        }

        .glyphicon-flag:before {
            content: "\e034"
        }

        .glyphicon-headphones:before {
            content: "\e035"
        }

        .glyphicon-volume-off:before {
            content: "\e036"
        }

        .glyphicon-volume-down:before {
            content: "\e037"
        }

        .glyphicon-volume-up:before {
            content: "\e038"
        }

        .glyphicon-qrcode:before {
            content: "\e039"
        }

        .glyphicon-barcode:before {
            content: "\e040"
        }

        .glyphicon-tag:before {
            content: "\e041"
        }

        .glyphicon-tags:before {
            content: "\e042"
        }

        .glyphicon-book:before {
            content: "\e043"
        }

        .glyphicon-bookmark:before {
            content: "\e044"
        }

        .glyphicon-print:before {
            content: "\e045"
        }

        .glyphicon-camera:before {
            content: "\e046"
        }

        .glyphicon-font:before {
            content: "\e047"
        }

        .glyphicon-bold:before {
            content: "\e048"
        }

        .glyphicon-italic:before {
            content: "\e049"
        }

        .glyphicon-text-height:before {
            content: "\e050"
        }

        .glyphicon-text-width:before {
            content: "\e051"
        }

        .glyphicon-align-left:before {
            content: "\e052"
        }

        .glyphicon-align-center:before {
            content: "\e053"
        }

        .glyphicon-align-right:before {
            content: "\e054"
        }

        .glyphicon-align-justify:before {
            content: "\e055"
        }

        .glyphicon-list:before {
            content: "\e056"
        }

        .glyphicon-indent-left:before {
            content: "\e057"
        }

        .glyphicon-indent-right:before {
            content: "\e058"
        }

        .glyphicon-facetime-video:before {
            content: "\e059"
        }

        .glyphicon-picture:before {
            content: "\e060"
        }

        .glyphicon-map-marker:before {
            content: "\e062"
        }

        .glyphicon-adjust:before {
            content: "\e063"
        }

        .glyphicon-tint:before {
            content: "\e064"
        }

        .glyphicon-edit:before {
            content: "\e065"
        }

        .glyphicon-share:before {
            content: "\e066"
        }

        .glyphicon-check:before {
            content: "\e067"
        }

        .glyphicon-move:before {
            content: "\e068"
        }

        .glyphicon-step-backward:before {
            content: "\e069"
        }

        .glyphicon-fast-backward:before {
            content: "\e070"
        }

        .glyphicon-backward:before {
            content: "\e071"
        }

        .glyphicon-play:before {
            content: "\e072"
        }

        .glyphicon-pause:before {
            content: "\e073"
        }

        .glyphicon-stop:before {
            content: "\e074"
        }

        .glyphicon-forward:before {
            content: "\e075"
        }

        .glyphicon-fast-forward:before {
            content: "\e076"
        }

        .glyphicon-step-forward:before {
            content: "\e077"
        }

        .glyphicon-eject:before {
            content: "\e078"
        }

        .glyphicon-chevron-left:before {
            content: "\e079"
        }

        .glyphicon-chevron-right:before {
            content: "\e080"
        }

        .glyphicon-plus-sign:before {
            content: "\e081"
        }

        .glyphicon-minus-sign:before {
            content: "\e082"
        }

        .glyphicon-remove-sign:before {
            content: "\e083"
        }

        .glyphicon-ok-sign:before {
            content: "\e084"
        }

        .glyphicon-question-sign:before {
            content: "\e085"
        }

        .glyphicon-info-sign:before {
            content: "\e086"
        }

        .glyphicon-screenshot:before {
            content: "\e087"
        }

        .glyphicon-remove-circle:before {
            content: "\e088"
        }

        .glyphicon-ok-circle:before {
            content: "\e089"
        }

        .glyphicon-ban-circle:before {
            content: "\e090"
        }

        .glyphicon-arrow-left:before {
            content: "\e091"
        }

        .glyphicon-arrow-right:before {
            content: "\e092"
        }

        .glyphicon-arrow-up:before {
            content: "\e093"
        }

        .glyphicon-arrow-down:before {
            content: "\e094"
        }

        .glyphicon-share-alt:before {
            content: "\e095"
        }

        .glyphicon-resize-full:before {
            content: "\e096"
        }

        .glyphicon-resize-small:before {
            content: "\e097"
        }

        .glyphicon-exclamation-sign:before {
            content: "\e101"
        }

        .glyphicon-gift:before {
            content: "\e102"
        }

        .glyphicon-leaf:before {
            content: "\e103"
        }

        .glyphicon-fire:before {
            content: "\e104"
        }

        .glyphicon-eye-open:before {
            content: "\e105"
        }

        .glyphicon-eye-close:before {
            content: "\e106"
        }

        .glyphicon-warning-sign:before {
            content: "\e107"
        }

        .glyphicon-plane:before {
            content: "\e108"
        }

        .glyphicon-calendar:before {
            content: "\e109"
        }

        .glyphicon-random:before {
            content: "\e110"
        }

        .glyphicon-comment:before {
            content: "\e111"
        }

        .glyphicon-magnet:before {
            content: "\e112"
        }

        .glyphicon-chevron-up:before {
            content: "\e113"
        }

        .glyphicon-chevron-down:before {
            content: "\e114"
        }

        .glyphicon-retweet:before {
            content: "\e115"
        }

        .glyphicon-shopping-cart:before {
            content: "\e116"
        }

        .glyphicon-folder-close:before {
            content: "\e117"
        }

        .glyphicon-folder-open:before {
            content: "\e118"
        }

        .glyphicon-resize-vertical:before {
            content: "\e119"
        }

        .glyphicon-resize-horizontal:before {
            content: "\e120"
        }

        .glyphicon-hdd:before {
            content: "\e121"
        }

        .glyphicon-bullhorn:before {
            content: "\e122"
        }

        .glyphicon-bell:before {
            content: "\e123"
        }

        .glyphicon-certificate:before {
            content: "\e124"
        }

        .glyphicon-thumbs-up:before {
            content: "\e125"
        }

        .glyphicon-thumbs-down:before {
            content: "\e126"
        }

        .glyphicon-hand-right:before {
            content: "\e127"
        }

        .glyphicon-hand-left:before {
            content: "\e128"
        }

        .glyphicon-hand-up:before {
            content: "\e129"
        }

        .glyphicon-hand-down:before {
            content: "\e130"
        }

        .glyphicon-circle-arrow-right:before {
            content: "\e131"
        }

        .glyphicon-circle-arrow-left:before {
            content: "\e132"
        }

        .glyphicon-circle-arrow-up:before {
            content: "\e133"
        }

        .glyphicon-circle-arrow-down:before {
            content: "\e134"
        }

        .glyphicon-globe:before {
            content: "\e135"
        }

        .glyphicon-wrench:before {
            content: "\e136"
        }

        .glyphicon-tasks:before {
            content: "\e137"
        }

        .glyphicon-filter:before {
            content: "\e138"
        }

        .glyphicon-briefcase:before {
            content: "\e139"
        }

        .glyphicon-fullscreen:before {
            content: "\e140"
        }

        .glyphicon-dashboard:before {
            content: "\e141"
        }

        .glyphicon-paperclip:before {
            content: "\e142"
        }

        .glyphicon-heart-empty:before {
            content: "\e143"
        }

        .glyphicon-link:before {
            content: "\e144"
        }

        .glyphicon-phone:before {
            content: "\e145"
        }

        .glyphicon-pushpin:before {
            content: "\e146"
        }

        .glyphicon-usd:before {
            content: "\e148"
        }

        .glyphicon-gbp:before {
            content: "\e149"
        }

        .glyphicon-sort:before {
            content: "\e150"
        }

        .glyphicon-sort-by-alphabet:before {
            content: "\e151"
        }

        .glyphicon-sort-by-alphabet-alt:before {
            content: "\e152"
        }

        .glyphicon-sort-by-order:before {
            content: "\e153"
        }

        .glyphicon-sort-by-order-alt:before {
            content: "\e154"
        }

        .glyphicon-sort-by-attributes:before {
            content: "\e155"
        }

        .glyphicon-sort-by-attributes-alt:before {
            content: "\e156"
        }

        .glyphicon-unchecked:before {
            content: "\e157"
        }

        .glyphicon-expand:before {
            content: "\e158"
        }

        .glyphicon-collapse-down:before {
            content: "\e159"
        }

        .glyphicon-collapse-up:before {
            content: "\e160"
        }

        .glyphicon-log-in:before {
            content: "\e161"
        }

        .glyphicon-flash:before {
            content: "\e162"
        }

        .glyphicon-log-out:before {
            content: "\e163"
        }

        .glyphicon-new-window:before {
            content: "\e164"
        }

        .glyphicon-record:before {
            content: "\e165"
        }

        .glyphicon-save:before {
            content: "\e166"
        }

        .glyphicon-open:before {
            content: "\e167"
        }

        .glyphicon-saved:before {
            content: "\e168"
        }

        .glyphicon-import:before {
            content: "\e169"
        }

        .glyphicon-export:before {
            content: "\e170"
        }

        .glyphicon-send:before {
            content: "\e171"
        }

        .glyphicon-floppy-disk:before {
            content: "\e172"
        }

        .glyphicon-floppy-saved:before {
            content: "\e173"
        }

        .glyphicon-floppy-remove:before {
            content: "\e174"
        }

        .glyphicon-floppy-save:before {
            content: "\e175"
        }

        .glyphicon-floppy-open:before {
            content: "\e176"
        }

        .glyphicon-credit-card:before {
            content: "\e177"
        }

        .glyphicon-transfer:before {
            content: "\e178"
        }

        .glyphicon-cutlery:before {
            content: "\e179"
        }

        .glyphicon-header:before {
            content: "\e180"
        }

        .glyphicon-compressed:before {
            content: "\e181"
        }

        .glyphicon-earphone:before {
            content: "\e182"
        }

        .glyphicon-phone-alt:before {
            content: "\e183"
        }

        .glyphicon-tower:before {
            content: "\e184"
        }

        .glyphicon-stats:before {
            content: "\e185"
        }

        .glyphicon-sd-video:before {
            content: "\e186"
        }

        .glyphicon-hd-video:before {
            content: "\e187"
        }

        .glyphicon-subtitles:before {
            content: "\e188"
        }

        .glyphicon-sound-stereo:before {
            content: "\e189"
        }

        .glyphicon-sound-dolby:before {
            content: "\e190"
        }

        .glyphicon-sound-5-1:before {
            content: "\e191"
        }

        .glyphicon-sound-6-1:before {
            content: "\e192"
        }

        .glyphicon-sound-7-1:before {
            content: "\e193"
        }

        .glyphicon-copyright-mark:before {
            content: "\e194"
        }

        .glyphicon-registration-mark:before {
            content: "\e195"
        }

        .glyphicon-cloud-download:before {
            content: "\e197"
        }

        .glyphicon-cloud-upload:before {
            content: "\e198"
        }

        .glyphicon-tree-conifer:before {
            content: "\e199"
        }

        .glyphicon-tree-deciduous:before {
            content: "\e200"
        }

        .glyphicon-cd:before {
            content: "\e201"
        }

        .glyphicon-save-file:before {
            content: "\e202"
        }

        .glyphicon-open-file:before {
            content: "\e203"
        }

        .glyphicon-level-up:before {
            content: "\e204"
        }

        .glyphicon-copy:before {
            content: "\e205"
        }

        .glyphicon-paste:before {
            content: "\e206"
        }

        .glyphicon-alert:before {
            content: "\e209"
        }

        .glyphicon-equalizer:before {
            content: "\e210"
        }

        .glyphicon-king:before {
            content: "\e211"
        }

        .glyphicon-queen:before {
            content: "\e212"
        }

        .glyphicon-pawn:before {
            content: "\e213"
        }

        .glyphicon-bishop:before {
            content: "\e214"
        }

        .glyphicon-knight:before {
            content: "\e215"
        }

        .glyphicon-baby-formula:before {
            content: "\e216"
        }

        .glyphicon-tent:before {
            content: "\26fa"
        }

        .glyphicon-blackboard:before {
            content: "\e218"
        }

        .glyphicon-bed:before {
            content: "\e219"
        }

        .glyphicon-apple:before {
            content: "\f8ff"
        }

        .glyphicon-erase:before {
            content: "\e221"
        }

        .glyphicon-hourglass:before {
            content: "\231b"
        }

        .glyphicon-lamp:before {
            content: "\e223"
        }

        .glyphicon-duplicate:before {
            content: "\e224"
        }

        .glyphicon-piggy-bank:before {
            content: "\e225"
        }

        .glyphicon-scissors:before {
            content: "\e226"
        }

        .glyphicon-bitcoin:before {
            content: "\e227"
        }

        .glyphicon-btc:before {
            content: "\e227"
        }

        .glyphicon-xbt:before {
            content: "\e227"
        }

        .glyphicon-yen:before {
            content: "\00a5"
        }

        .glyphicon-jpy:before {
            content: "\00a5"
        }

        .glyphicon-ruble:before {
            content: "\20bd"
        }

        .glyphicon-rub:before {
            content: "\20bd"
        }

        .glyphicon-scale:before {
            content: "\e230"
        }

        .glyphicon-ice-lolly:before {
            content: "\e231"
        }

        .glyphicon-ice-lolly-tasted:before {
            content: "\e232"
        }

        .glyphicon-education:before {
            content: "\e233"
        }

        .glyphicon-option-horizontal:before {
            content: "\e234"
        }

        .glyphicon-option-vertical:before {
            content: "\e235"
        }

        .glyphicon-menu-hamburger:before {
            content: "\e236"
        }

        .glyphicon-modal-window:before {
            content: "\e237"
        }

        .glyphicon-oil:before {
            content: "\e238"
        }

        .glyphicon-grain:before {
            content: "\e239"
        }

        .glyphicon-sunglasses:before {
            content: "\e240"
        }

        .glyphicon-text-size:before {
            content: "\e241"
        }

        .glyphicon-text-color:before {
            content: "\e242"
        }

        .glyphicon-text-background:before {
            content: "\e243"
        }

        .glyphicon-object-align-top:before {
            content: "\e244"
        }

        .glyphicon-object-align-bottom:before {
            content: "\e245"
        }

        .glyphicon-object-align-horizontal:before {
            content: "\e246"
        }

        .glyphicon-object-align-left:before {
            content: "\e247"
        }

        .glyphicon-object-align-vertical:before {
            content: "\e248"
        }

        .glyphicon-object-align-right:before {
            content: "\e249"
        }

        .glyphicon-triangle-right:before {
            content: "\e250"
        }

        .glyphicon-triangle-left:before {
            content: "\e251"
        }

        .glyphicon-triangle-bottom:before {
            content: "\e252"
        }

        .glyphicon-triangle-top:before {
            content: "\e253"
        }

        .glyphicon-console:before {
            content: "\e254"
        }

        .glyphicon-superscript:before {
            content: "\e255"
        }

        .glyphicon-subscript:before {
            content: "\e256"
        }

        .glyphicon-menu-left:before {
            content: "\e257"
        }

        .glyphicon-menu-right:before {
            content: "\e258"
        }

        .glyphicon-menu-down:before {
            content: "\e259"
        }

        .glyphicon-menu-up:before {
            content: "\e260"
        }

        * {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box
        }

        :after,
        :before {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box
        }

        html {
            font-size: 10px;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0)
        }

        body {
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-size: 14px;
            line-height: 1.42857143;
            color: #333;
            background-color: #fff
        }

        button,
        input,
        select,
        textarea {
            font-family: inherit;
            font-size: inherit;
            line-height: inherit
        }

        a {
            color: #337ab7;
            text-decoration: none
        }

        a:focus,
        a:hover {
            color: #23527c;
            text-decoration: underline
        }

        a:focus {
            outline: thin dotted;
            outline: 5px auto -webkit-focus-ring-color;
            outline-offset: -2px
        }

        figure {
            margin: 0
        }

        img {
            vertical-align: middle
        }

        .carousel-inner>.item>a>img,
        .carousel-inner>.item>img,
        .img-responsive,
        .thumbnail a>img,
        .thumbnail>img {
            display: block;
            max-width: 100%;
            height: auto
        }

        .img-rounded {
            border-radius: 6px
        }

        .img-thumbnail {
            display: inline-block;
            max-width: 100%;
            height: auto;
            padding: 4px;
            line-height: 1.42857143;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 4px;
            -webkit-transition: all .2s ease-in-out;
            -o-transition: all .2s ease-in-out;
            transition: all .2s ease-in-out
        }

        .img-circle {
            border-radius: 50%
        }

        hr {
            margin-top: 20px;
            margin-bottom: 20px;
            border: 0;
            border-top: 1px solid #eee
        }

        .sr-only {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            border: 0
        }

        .sr-only-focusable:active,
        .sr-only-focusable:focus {
            position: static;
            width: auto;
            height: auto;
            margin: 0;
            overflow: visible;
            clip: auto
        }

        [role=button] {
            cursor: pointer
        }

        .h1,
        .h2,
        .h3,
        .h4,
        .h5,
        .h6,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: inherit;
            font-weight: 500;
            line-height: 1.1;
            color: inherit
        }

        .h1 .small,
        .h1 small,
        .h2 .small,
        .h2 small,
        .h3 .small,
        .h3 small,
        .h4 .small,
        .h4 small,
        .h5 .small,
        .h5 small,
        .h6 .small,
        .h6 small,
        h1 .small,
        h1 small,
        h2 .small,
        h2 small,
        h3 .small,
        h3 small,
        h4 .small,
        h4 small,
        h5 .small,
        h5 small,
        h6 .small,
        h6 small {
            font-weight: 400;
            line-height: 1;
            color: #777
        }

        .h1,
        .h2,
        .h3,
        h1,
        h2,
        h3 {
            margin-top: 20px;
            margin-bottom: 10px
        }

        .h1 .small,
        .h1 small,
        .h2 .small,
        .h2 small,
        .h3 .small,
        .h3 small,
        h1 .small,
        h1 small,
        h2 .small,
        h2 small,
        h3 .small,
        h3 small {
            font-size: 65%
        }

        .h4,
        .h5,
        .h6,
        h4,
        h5,
        h6 {
            margin-top: 10px;
            margin-bottom: 10px
        }

        .h4 .small,
        .h4 small,
        .h5 .small,
        .h5 small,
        .h6 .small,
        .h6 small,
        h4 .small,
        h4 small,
        h5 .small,
        h5 small,
        h6 .small,
        h6 small {
            font-size: 75%
        }

        .h1,
        h1 {
            font-size: 36px
        }

        .h2,
        h2 {
            font-size: 30px
        }

        .h3,
        h3 {
            font-size: 24px
        }

        .h4,
        h4 {
            font-size: 18px
        }

        .h5,
        h5 {
            font-size: 14px
        }

        .h6,
        h6 {
            font-size: 12px
        }

        p {
            margin: 0 0 10px
        }

        .lead {
            margin-bottom: 20px;
            font-size: 16px;
            font-weight: 300;
            line-height: 1.4
        }

        @media (min-width:768px) {
            .lead {
                font-size: 21px
            }
        }

        .small,
        small {
            font-size: 85%
        }

        .mark,
        mark {
            padding: .2em;
            background-color: #fcf8e3
        }

        .text-left {
            text-align: left
        }

        .text-right {
            text-align: right
        }

        .text-center {
            text-align: center
        }

        .text-justify {
            text-align: justify
        }

        .text-nowrap {
            white-space: nowrap
        }

        .text-lowercase {
            text-transform: lowercase
        }

        .text-uppercase {
            text-transform: uppercase
        }

        .text-capitalize {
            text-transform: capitalize
        }

        .text-muted {
            color: #777
        }

        .text-primary {
            color: #337ab7
        }

        a.text-primary:focus,
        a.text-primary:hover {
            color: #286090
        }

        .text-success {
            color: #3c763d
        }

        a.text-success:focus,
        a.text-success:hover {
            color: #2b542c
        }

        .text-info {
            color: #31708f
        }

        a.text-info:focus,
        a.text-info:hover {
            color: #245269
        }

        .text-warning {
            color: #8a6d3b
        }

        a.text-warning:focus,
        a.text-warning:hover {
            color: #66512c
        }

        .text-danger {
            color: #a94442
        }

        a.text-danger:focus,
        a.text-danger:hover {
            color: #843534
        }

        .bg-primary {
            color: #fff;
            background-color: #337ab7
        }

        a.bg-primary:focus,
        a.bg-primary:hover {
            background-color: #286090
        }

        .bg-success {
            background-color: #dff0d8
        }

        a.bg-success:focus,
        a.bg-success:hover {
            background-color: #c1e2b3
        }

        .bg-info {
            background-color: #d9edf7
        }

        a.bg-info:focus,
        a.bg-info:hover {
            background-color: #afd9ee
        }

        .bg-warning {
            background-color: #fcf8e3
        }

        a.bg-warning:focus,
        a.bg-warning:hover {
            background-color: #f7ecb5
        }

        .bg-danger {
            background-color: #f2dede
        }

        a.bg-danger:focus,
        a.bg-danger:hover {
            background-color: #e4b9b9
        }

        .page-header {
            padding-bottom: 9px;
            margin: 40px 0 20px;
            border-bottom: 1px solid #eee
        }

        ol,
        ul {
            margin-top: 0;
            margin-bottom: 10px
        }

        ol ol,
        ol ul,
        ul ol,
        ul ul {
            margin-bottom: 0
        }

        .list-unstyled {
            padding-left: 0;
            list-style: none
        }

        .list-inline {
            padding-left: 0;
            margin-left: -5px;
            list-style: none
        }

        .list-inline>li {
            display: inline-block;
            padding-right: 5px;
            padding-left: 5px
        }

        dl {
            margin-top: 0;
            margin-bottom: 20px
        }

        dd,
        dt {
            line-height: 1.42857143
        }

        dt {
            font-weight: 700
        }

        dd {
            margin-left: 0
        }

        @media (min-width:768px) {
            .dl-horizontal dt {
                float: left;
                width: 160px;
                overflow: hidden;
                clear: left;
                text-align: right;
                text-overflow: ellipsis;
                white-space: nowrap
            }

            .dl-horizontal dd {
                margin-left: 180px
            }
        }

        abbr[data-original-title],
        abbr[title] {
            cursor: help;
            border-bottom: 1px dotted #777
        }

        .initialism {
            font-size: 90%;
            text-transform: uppercase
        }

        blockquote {
            padding: 10px 20px;
            margin: 0 0 20px;
            font-size: 17.5px;
            border-left: 5px solid #eee
        }

        blockquote ol:last-child,
        blockquote p:last-child,
        blockquote ul:last-child {
            margin-bottom: 0
        }

        blockquote .small,
        blockquote footer,
        blockquote small {
            display: block;
            font-size: 80%;
            line-height: 1.42857143;
            color: #777
        }

        blockquote .small:before,
        blockquote footer:before,
        blockquote small:before {
            content: '\2014 \00A0'
        }

        .blockquote-reverse,
        blockquote.pull-right {
            padding-right: 15px;
            padding-left: 0;
            text-align: right;
            border-right: 5px solid #eee;
            border-left: 0
        }

        .blockquote-reverse .small:before,
        .blockquote-reverse footer:before,
        .blockquote-reverse small:before,
        blockquote.pull-right .small:before,
        blockquote.pull-right footer:before,
        blockquote.pull-right small:before {
            content: ''
        }

        .blockquote-reverse .small:after,
        .blockquote-reverse footer:after,
        .blockquote-reverse small:after,
        blockquote.pull-right .small:after,
        blockquote.pull-right footer:after,
        blockquote.pull-right small:after {
            content: '\00A0 \2014'
        }

        address {
            margin-bottom: 20px;
            font-style: normal;
            line-height: 1.42857143
        }

        code,
        kbd,
        pre,
        samp {
            font-family: Menlo, Monaco, Consolas, "Courier New", monospace
        }

        code {
            padding: 2px 4px;
            font-size: 90%;
            color: #c7254e;
            background-color: #f9f2f4;
            border-radius: 4px
        }

        kbd {
            padding: 2px 4px;
            font-size: 90%;
            color: #fff;
            background-color: #333;
            border-radius: 3px;
            -webkit-box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .25);
            box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .25)
        }

        kbd kbd {
            padding: 0;
            font-size: 100%;
            font-weight: 700;
            -webkit-box-shadow: none;
            box-shadow: none
        }

        pre {
            display: block;
            padding: 9.5px;
            margin: 0 0 10px;
            font-size: 13px;
            line-height: 1.42857143;
            color: #333;
            word-break: break-all;
            word-wrap: break-word;
            background-color: #f5f5f5;
            border: 1px solid #ccc;
            border-radius: 4px
        }

        pre code {
            padding: 0;
            font-size: inherit;
            color: inherit;
            white-space: pre-wrap;
            background-color: transparent;
            border-radius: 0
        }

        .pre-scrollable {
            max-height: 340px;
            overflow-y: scroll
        }

        .container {
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto
        }

        @media (min-width:768px) {
            .container {
                width: 750px
            }
        }

        @media (min-width:992px) {
            .container {
                width: 970px
            }
        }

        @media (min-width:1200px) {
            .container {
                width: 1170px
            }
        }

        .container-fluid {
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto
        }

        .row {
            margin-right: -15px;
            margin-left: -15px
        }

        .col-lg-1,
        .col-lg-10,
        .col-lg-11,
        .col-lg-12,
        .col-lg-2,
        .col-lg-3,
        .col-lg-4,
        .col-lg-5,
        .col-lg-6,
        .col-lg-7,
        .col-lg-8,
        .col-lg-9,
        .col-md-1,
        .col-md-10,
        .col-md-11,
        .col-md-12,
        .col-md-2,
        .col-md-3,
        .col-md-4,
        .col-md-5,
        .col-md-6,
        .col-md-7,
        .col-md-8,
        .col-md-9,
        .col-sm-1,
        .col-sm-10,
        .col-sm-11,
        .col-sm-12,
        .col-sm-2,
        .col-sm-3,
        .col-sm-4,
        .col-sm-5,
        .col-sm-6,
        .col-sm-7,
        .col-sm-8,
        .col-sm-9,
        .col-xs-1,
        .col-xs-10,
        .col-xs-11,
        .col-xs-12,
        .col-xs-2,
        .col-xs-3,
        .col-xs-4,
        .col-xs-5,
        .col-xs-6,
        .col-xs-7,
        .col-xs-8,
        .col-xs-9 {
            position: relative;
            min-height: 1px;
            padding-right: 15px;
            padding-left: 15px
        }

        .col-xs-1,
        .col-xs-10,
        .col-xs-11,
        .col-xs-12,
        .col-xs-2,
        .col-xs-3,
        .col-xs-4,
        .col-xs-5,
        .col-xs-6,
        .col-xs-7,
        .col-xs-8,
        .col-xs-9 {
            float: left
        }

        .col-xs-12 {
            width: 100%
        }

        .col-xs-11 {
            width: 91.66666667%
        }

        .col-xs-10 {
            width: 83.33333333%
        }

        .col-xs-9 {
            width: 75%
        }

        .col-xs-8 {
            width: 66.66666667%
        }

        .col-xs-7 {
            width: 58.33333333%
        }

        .col-xs-6 {
            width: 50%
        }

        .col-xs-5 {
            width: 41.66666667%
        }

        .col-xs-4 {
            width: 33.33333333%
        }

        .col-xs-3 {
            width: 25%
        }

        .col-xs-2 {
            width: 16.66666667%
        }

        .col-xs-1 {
            width: 8.33333333%
        }

        .col-xs-pull-12 {
            right: 100%
        }

        .col-xs-pull-11 {
            right: 91.66666667%
        }

        .col-xs-pull-10 {
            right: 83.33333333%
        }

        .col-xs-pull-9 {
            right: 75%
        }

        .col-xs-pull-8 {
            right: 66.66666667%
        }

        .col-xs-pull-7 {
            right: 58.33333333%
        }

        .col-xs-pull-6 {
            right: 50%
        }

        .col-xs-pull-5 {
            right: 41.66666667%
        }

        .col-xs-pull-4 {
            right: 33.33333333%
        }

        .col-xs-pull-3 {
            right: 25%
        }

        .col-xs-pull-2 {
            right: 16.66666667%
        }

        .col-xs-pull-1 {
            right: 8.33333333%
        }

        .col-xs-pull-0 {
            right: auto
        }

        .col-xs-push-12 {
            left: 100%
        }

        .col-xs-push-11 {
            left: 91.66666667%
        }

        .col-xs-push-10 {
            left: 83.33333333%
        }

        .col-xs-push-9 {
            left: 75%
        }

        .col-xs-push-8 {
            left: 66.66666667%
        }

        .col-xs-push-7 {
            left: 58.33333333%
        }

        .col-xs-push-6 {
            left: 50%
        }

        .col-xs-push-5 {
            left: 41.66666667%
        }

        .col-xs-push-4 {
            left: 33.33333333%
        }

        .col-xs-push-3 {
            left: 25%
        }

        .col-xs-push-2 {
            left: 16.66666667%
        }

        .col-xs-push-1 {
            left: 8.33333333%
        }

        .col-xs-push-0 {
            left: auto
        }

        .col-xs-offset-12 {
            margin-left: 100%
        }

        .col-xs-offset-11 {
            margin-left: 91.66666667%
        }

        .col-xs-offset-10 {
            margin-left: 83.33333333%
        }

        .col-xs-offset-9 {
            margin-left: 75%
        }

        .col-xs-offset-8 {
            margin-left: 66.66666667%
        }

        .col-xs-offset-7 {
            margin-left: 58.33333333%
        }

        .col-xs-offset-6 {
            margin-left: 50%
        }

        .col-xs-offset-5 {
            margin-left: 41.66666667%
        }

        .col-xs-offset-4 {
            margin-left: 33.33333333%
        }

        .col-xs-offset-3 {
            margin-left: 25%
        }

        .col-xs-offset-2 {
            margin-left: 16.66666667%
        }

        .col-xs-offset-1 {
            margin-left: 8.33333333%
        }

        .col-xs-offset-0 {
            margin-left: 0
        }

        @media (min-width:768px) {

            .col-sm-1,
            .col-sm-10,
            .col-sm-11,
            .col-sm-12,
            .col-sm-2,
            .col-sm-3,
            .col-sm-4,
            .col-sm-5,
            .col-sm-6,
            .col-sm-7,
            .col-sm-8,
            .col-sm-9 {
                float: left
            }

            .col-sm-12 {
                width: 100%
            }

            .col-sm-11 {
                width: 91.66666667%
            }

            .col-sm-10 {
                width: 83.33333333%
            }

            .col-sm-9 {
                width: 75%
            }

            .col-sm-8 {
                width: 66.66666667%
            }

            .col-sm-7 {
                width: 58.33333333%
            }

            .col-sm-6 {
                width: 50%
            }

            .col-sm-5 {
                width: 41.66666667%
            }

            .col-sm-4 {
                width: 33.33333333%
            }

            .col-sm-3 {
                width: 25%
            }

            .col-sm-2 {
                width: 16.66666667%
            }

            .col-sm-1 {
                width: 8.33333333%
            }

            .col-sm-pull-12 {
                right: 100%
            }

            .col-sm-pull-11 {
                right: 91.66666667%
            }

            .col-sm-pull-10 {
                right: 83.33333333%
            }

            .col-sm-pull-9 {
                right: 75%
            }

            .col-sm-pull-8 {
                right: 66.66666667%
            }

            .col-sm-pull-7 {
                right: 58.33333333%
            }

            .col-sm-pull-6 {
                right: 50%
            }

            .col-sm-pull-5 {
                right: 41.66666667%
            }

            .col-sm-pull-4 {
                right: 33.33333333%
            }

            .col-sm-pull-3 {
                right: 25%
            }

            .col-sm-pull-2 {
                right: 16.66666667%
            }

            .col-sm-pull-1 {
                right: 8.33333333%
            }

            .col-sm-pull-0 {
                right: auto
            }

            .col-sm-push-12 {
                left: 100%
            }

            .col-sm-push-11 {
                left: 91.66666667%
            }

            .col-sm-push-10 {
                left: 83.33333333%
            }

            .col-sm-push-9 {
                left: 75%
            }

            .col-sm-push-8 {
                left: 66.66666667%
            }

            .col-sm-push-7 {
                left: 58.33333333%
            }

            .col-sm-push-6 {
                left: 50%
            }

            .col-sm-push-5 {
                left: 41.66666667%
            }

            .col-sm-push-4 {
                left: 33.33333333%
            }

            .col-sm-push-3 {
                left: 25%
            }

            .col-sm-push-2 {
                left: 16.66666667%
            }

            .col-sm-push-1 {
                left: 8.33333333%
            }

            .col-sm-push-0 {
                left: auto
            }

            .col-sm-offset-12 {
                margin-left: 100%
            }

            .col-sm-offset-11 {
                margin-left: 91.66666667%
            }

            .col-sm-offset-10 {
                margin-left: 83.33333333%
            }

            .col-sm-offset-9 {
                margin-left: 75%
            }

            .col-sm-offset-8 {
                margin-left: 66.66666667%
            }

            .col-sm-offset-7 {
                margin-left: 58.33333333%
            }

            .col-sm-offset-6 {
                margin-left: 50%
            }

            .col-sm-offset-5 {
                margin-left: 41.66666667%
            }

            .col-sm-offset-4 {
                margin-left: 33.33333333%
            }

            .col-sm-offset-3 {
                margin-left: 25%
            }

            .col-sm-offset-2 {
                margin-left: 16.66666667%
            }

            .col-sm-offset-1 {
                margin-left: 8.33333333%
            }

            .col-sm-offset-0 {
                margin-left: 0
            }
        }

        @media (min-width:992px) {

            .col-md-1,
            .col-md-10,
            .col-md-11,
            .col-md-12,
            .col-md-2,
            .col-md-3,
            .col-md-4,
            .col-md-5,
            .col-md-6,
            .col-md-7,
            .col-md-8,
            .col-md-9 {
                float: left
            }

            .col-md-12 {
                width: 100%
            }

            .col-md-11 {
                width: 91.66666667%
            }

            .col-md-10 {
                width: 83.33333333%
            }

            .col-md-9 {
                width: 75%
            }

            .col-md-8 {
                width: 66.66666667%
            }

            .col-md-7 {
                width: 58.33333333%
            }

            .col-md-6 {
                width: 50%
            }

            .col-md-5 {
                width: 41.66666667%
            }

            .col-md-4 {
                width: 33.33333333%
            }

            .col-md-3 {
                width: 25%
            }

            .col-md-2 {
                width: 16.66666667%
            }

            .col-md-1 {
                width: 8.33333333%
            }

            .col-md-pull-12 {
                right: 100%
            }

            .col-md-pull-11 {
                right: 91.66666667%
            }

            .col-md-pull-10 {
                right: 83.33333333%
            }

            .col-md-pull-9 {
                right: 75%
            }

            .col-md-pull-8 {
                right: 66.66666667%
            }

            .col-md-pull-7 {
                right: 58.33333333%
            }

            .col-md-pull-6 {
                right: 50%
            }

            .col-md-pull-5 {
                right: 41.66666667%
            }

            .col-md-pull-4 {
                right: 33.33333333%
            }

            .col-md-pull-3 {
                right: 25%
            }

            .col-md-pull-2 {
                right: 16.66666667%
            }

            .col-md-pull-1 {
                right: 8.33333333%
            }

            .col-md-pull-0 {
                right: auto
            }

            .col-md-push-12 {
                left: 100%
            }

            .col-md-push-11 {
                left: 91.66666667%
            }

            .col-md-push-10 {
                left: 83.33333333%
            }

            .col-md-push-9 {
                left: 75%
            }

            .col-md-push-8 {
                left: 66.66666667%
            }

            .col-md-push-7 {
                left: 58.33333333%
            }

            .col-md-push-6 {
                left: 50%
            }

            .col-md-push-5 {
                left: 41.66666667%
            }

            .col-md-push-4 {
                left: 33.33333333%
            }

            .col-md-push-3 {
                left: 25%
            }

            .col-md-push-2 {
                left: 16.66666667%
            }

            .col-md-push-1 {
                left: 8.33333333%
            }

            .col-md-push-0 {
                left: auto
            }

            .col-md-offset-12 {
                margin-left: 100%
            }

            .col-md-offset-11 {
                margin-left: 91.66666667%
            }

            .col-md-offset-10 {
                margin-left: 83.33333333%
            }

            .col-md-offset-9 {
                margin-left: 75%
            }

            .col-md-offset-8 {
                margin-left: 66.66666667%
            }

            .col-md-offset-7 {
                margin-left: 58.33333333%
            }

            .col-md-offset-6 {
                margin-left: 50%
            }

            .col-md-offset-5 {
                margin-left: 41.66666667%
            }

            .col-md-offset-4 {
                margin-left: 33.33333333%
            }

            .col-md-offset-3 {
                margin-left: 25%
            }

            .col-md-offset-2 {
                margin-left: 16.66666667%
            }

            .col-md-offset-1 {
                margin-left: 8.33333333%
            }

            .col-md-offset-0 {
                margin-left: 0
            }
        }

        @media (min-width:1200px) {

            .col-lg-1,
            .col-lg-10,
            .col-lg-11,
            .col-lg-12,
            .col-lg-2,
            .col-lg-3,
            .col-lg-4,
            .col-lg-5,
            .col-lg-6,
            .col-lg-7,
            .col-lg-8,
            .col-lg-9 {
                float: left
            }

            .col-lg-12 {
                width: 100%
            }

            .col-lg-11 {
                width: 91.66666667%
            }

            .col-lg-10 {
                width: 83.33333333%
            }

            .col-lg-9 {
                width: 75%
            }

            .col-lg-8 {
                width: 66.66666667%
            }

            .col-lg-7 {
                width: 58.33333333%
            }

            .col-lg-6 {
                width: 50%
            }

            .col-lg-5 {
                width: 41.66666667%
            }

            .col-lg-4 {
                width: 33.33333333%
            }

            .col-lg-3 {
                width: 25%
            }

            .col-lg-2 {
                width: 16.66666667%
            }

            .col-lg-1 {
                width: 8.33333333%
            }

            .col-lg-pull-12 {
                right: 100%
            }

            .col-lg-pull-11 {
                right: 91.66666667%
            }

            .col-lg-pull-10 {
                right: 83.33333333%
            }

            .col-lg-pull-9 {
                right: 75%
            }

            .col-lg-pull-8 {
                right: 66.66666667%
            }

            .col-lg-pull-7 {
                right: 58.33333333%
            }

            .col-lg-pull-6 {
                right: 50%
            }

            .col-lg-pull-5 {
                right: 41.66666667%
            }

            .col-lg-pull-4 {
                right: 33.33333333%
            }

            .col-lg-pull-3 {
                right: 25%
            }

            .col-lg-pull-2 {
                right: 16.66666667%
            }

            .col-lg-pull-1 {
                right: 8.33333333%
            }

            .col-lg-pull-0 {
                right: auto
            }

            .col-lg-push-12 {
                left: 100%
            }

            .col-lg-push-11 {
                left: 91.66666667%
            }

            .col-lg-push-10 {
                left: 83.33333333%
            }

            .col-lg-push-9 {
                left: 75%
            }

            .col-lg-push-8 {
                left: 66.66666667%
            }

            .col-lg-push-7 {
                left: 58.33333333%
            }

            .col-lg-push-6 {
                left: 50%
            }

            .col-lg-push-5 {
                left: 41.66666667%
            }

            .col-lg-push-4 {
                left: 33.33333333%
            }

            .col-lg-push-3 {
                left: 25%
            }

            .col-lg-push-2 {
                left: 16.66666667%
            }

            .col-lg-push-1 {
                left: 8.33333333%
            }

            .col-lg-push-0 {
                left: auto
            }

            .col-lg-offset-12 {
                margin-left: 100%
            }

            .col-lg-offset-11 {
                margin-left: 91.66666667%
            }

            .col-lg-offset-10 {
                margin-left: 83.33333333%
            }

            .col-lg-offset-9 {
                margin-left: 75%
            }

            .col-lg-offset-8 {
                margin-left: 66.66666667%
            }

            .col-lg-offset-7 {
                margin-left: 58.33333333%
            }

            .col-lg-offset-6 {
                margin-left: 50%
            }

            .col-lg-offset-5 {
                margin-left: 41.66666667%
            }

            .col-lg-offset-4 {
                margin-left: 33.33333333%
            }

            .col-lg-offset-3 {
                margin-left: 25%
            }

            .col-lg-offset-2 {
                margin-left: 16.66666667%
            }

            .col-lg-offset-1 {
                margin-left: 8.33333333%
            }

            .col-lg-offset-0 {
                margin-left: 0
            }
        }

        table {
            background-color: transparent
        }

        caption {
            padding-top: 8px;
            padding-bottom: 8px;
            color: #777;
            text-align: left
        }

        th {
            text-align: left
        }

        .table {
            width: 100%;
            max-width: 100%;
            margin-bottom: 20px
        }

        .table>tbody>tr>td,
        .table>tbody>tr>th,
        .table>tfoot>tr>td,
        .table>tfoot>tr>th,
        .table>thead>tr>td,
        .table>thead>tr>th {
            padding: 8px;
            line-height: 1.42857143;
            vertical-align: top;
            border-top: 1px solid #ddd
        }

        .table>thead>tr>th {
            vertical-align: bottom;
            border-bottom: 2px solid #ddd
        }

        .table>caption+thead>tr:first-child>td,
        .table>caption+thead>tr:first-child>th,
        .table>colgroup+thead>tr:first-child>td,
        .table>colgroup+thead>tr:first-child>th,
        .table>thead:first-child>tr:first-child>td,
        .table>thead:first-child>tr:first-child>th {
            border-top: 0
        }

        .table>tbody+tbody {
            border-top: 2px solid #ddd
        }

        .table .table {
            background-color: #fff
        }

        .table-condensed>tbody>tr>td,
        .table-condensed>tbody>tr>th,
        .table-condensed>tfoot>tr>td,
        .table-condensed>tfoot>tr>th,
        .table-condensed>thead>tr>td,
        .table-condensed>thead>tr>th {
            padding: 5px
        }

        .table-bordered {
            border: 1px solid #ddd
        }

        .table-bordered>tbody>tr>td,
        .table-bordered>tbody>tr>th,
        .table-bordered>tfoot>tr>td,
        .table-bordered>tfoot>tr>th,
        .table-bordered>thead>tr>td,
        .table-bordered>thead>tr>th {
            border: 1px solid #ddd
        }

        .table-bordered>thead>tr>td,
        .table-bordered>thead>tr>th {
            border-bottom-width: 2px
        }

        .table-striped>tbody>tr:nth-of-type(odd) {
            background-color: #f9f9f9
        }

        .table-hover>tbody>tr:hover {
            background-color: #f5f5f5
        }

        table col[class*=col-] {
            position: static;
            display: table-column;
            float: none
        }

        table td[class*=col-],
        table th[class*=col-] {
            position: static;
            display: table-cell;
            float: none
        }

        .table>tbody>tr.active>td,
        .table>tbody>tr.active>th,
        .table>tbody>tr>td.active,
        .table>tbody>tr>th.active,
        .table>tfoot>tr.active>td,
        .table>tfoot>tr.active>th,
        .table>tfoot>tr>td.active,
        .table>tfoot>tr>th.active,
        .table>thead>tr.active>td,
        .table>thead>tr.active>th,
        .table>thead>tr>td.active,
        .table>thead>tr>th.active {
            background-color: #f5f5f5
        }

        .table-hover>tbody>tr.active:hover>td,
        .table-hover>tbody>tr.active:hover>th,
        .table-hover>tbody>tr:hover>.active,
        .table-hover>tbody>tr>td.active:hover,
        .table-hover>tbody>tr>th.active:hover {
            background-color: #e8e8e8
        }

        .table>tbody>tr.success>td,
        .table>tbody>tr.success>th,
        .table>tbody>tr>td.success,
        .table>tbody>tr>th.success,
        .table>tfoot>tr.success>td,
        .table>tfoot>tr.success>th,
        .table>tfoot>tr>td.success,
        .table>tfoot>tr>th.success,
        .table>thead>tr.success>td,
        .table>thead>tr.success>th,
        .table>thead>tr>td.success,
        .table>thead>tr>th.success {
            background-color: #dff0d8
        }

        .table-hover>tbody>tr.success:hover>td,
        .table-hover>tbody>tr.success:hover>th,
        .table-hover>tbody>tr:hover>.success,
        .table-hover>tbody>tr>td.success:hover,
        .table-hover>tbody>tr>th.success:hover {
            background-color: #d0e9c6
        }

        .table>tbody>tr.info>td,
        .table>tbody>tr.info>th,
        .table>tbody>tr>td.info,
        .table>tbody>tr>th.info,
        .table>tfoot>tr.info>td,
        .table>tfoot>tr.info>th,
        .table>tfoot>tr>td.info,
        .table>tfoot>tr>th.info,
        .table>thead>tr.info>td,
        .table>thead>tr.info>th,
        .table>thead>tr>td.info,
        .table>thead>tr>th.info {
            background-color: #d9edf7
        }

        .table-hover>tbody>tr.info:hover>td,
        .table-hover>tbody>tr.info:hover>th,
        .table-hover>tbody>tr:hover>.info,
        .table-hover>tbody>tr>td.info:hover,
        .table-hover>tbody>tr>th.info:hover {
            background-color: #c4e3f3
        }

        .table>tbody>tr.warning>td,
        .table>tbody>tr.warning>th,
        .table>tbody>tr>td.warning,
        .table>tbody>tr>th.warning,
        .table>tfoot>tr.warning>td,
        .table>tfoot>tr.warning>th,
        .table>tfoot>tr>td.warning,
        .table>tfoot>tr>th.warning,
        .table>thead>tr.warning>td,
        .table>thead>tr.warning>th,
        .table>thead>tr>td.warning,
        .table>thead>tr>th.warning {
            background-color: #fcf8e3
        }

        .table-hover>tbody>tr.warning:hover>td,
        .table-hover>tbody>tr.warning:hover>th,
        .table-hover>tbody>tr:hover>.warning,
        .table-hover>tbody>tr>td.warning:hover,
        .table-hover>tbody>tr>th.warning:hover {
            background-color: #faf2cc
        }

        .table>tbody>tr.danger>td,
        .table>tbody>tr.danger>th,
        .table>tbody>tr>td.danger,
        .table>tbody>tr>th.danger,
        .table>tfoot>tr.danger>td,
        .table>tfoot>tr.danger>th,
        .table>tfoot>tr>td.danger,
        .table>tfoot>tr>th.danger,
        .table>thead>tr.danger>td,
        .table>thead>tr.danger>th,
        .table>thead>tr>td.danger,
        .table>thead>tr>th.danger {
            background-color: #f2dede
        }

        .table-hover>tbody>tr.danger:hover>td,
        .table-hover>tbody>tr.danger:hover>th,
        .table-hover>tbody>tr:hover>.danger,
        .table-hover>tbody>tr>td.danger:hover,
        .table-hover>tbody>tr>th.danger:hover {
            background-color: #ebcccc
        }

        .table-responsive {
            min-height: .01%;
            overflow-x: auto
        }

        @media screen and (max-width:767px) {
            .table-responsive {
                width: 100%;
                margin-bottom: 15px;
                overflow-y: hidden;
                -ms-overflow-style: -ms-autohiding-scrollbar;
                border: 1px solid #ddd
            }

            .table-responsive>.table {
                margin-bottom: 0
            }

            .table-responsive>.table>tbody>tr>td,
            .table-responsive>.table>tbody>tr>th,
            .table-responsive>.table>tfoot>tr>td,
            .table-responsive>.table>tfoot>tr>th,
            .table-responsive>.table>thead>tr>td,
            .table-responsive>.table>thead>tr>th {
                white-space: nowrap
            }

            .table-responsive>.table-bordered {
                border: 0
            }

            .table-responsive>.table-bordered>tbody>tr>td:first-child,
            .table-responsive>.table-bordered>tbody>tr>th:first-child,
            .table-responsive>.table-bordered>tfoot>tr>td:first-child,
            .table-responsive>.table-bordered>tfoot>tr>th:first-child,
            .table-responsive>.table-bordered>thead>tr>td:first-child,
            .table-responsive>.table-bordered>thead>tr>th:first-child {
                border-left: 0
            }

            .table-responsive>.table-bordered>tbody>tr>td:last-child,
            .table-responsive>.table-bordered>tbody>tr>th:last-child,
            .table-responsive>.table-bordered>tfoot>tr>td:last-child,
            .table-responsive>.table-bordered>tfoot>tr>th:last-child,
            .table-responsive>.table-bordered>thead>tr>td:last-child,
            .table-responsive>.table-bordered>thead>tr>th:last-child {
                border-right: 0
            }

            .table-responsive>.table-bordered>tbody>tr:last-child>td,
            .table-responsive>.table-bordered>tbody>tr:last-child>th,
            .table-responsive>.table-bordered>tfoot>tr:last-child>td,
            .table-responsive>.table-bordered>tfoot>tr:last-child>th {
                border-bottom: 0
            }
        }

        fieldset {
            min-width: 0;
            padding: 0;
            margin: 0;
            border: 0
        }

        legend {
            display: block;
            width: 100%;
            padding: 0;
            margin-bottom: 20px;
            font-size: 21px;
            line-height: inherit;
            color: #333;
            border: 0;
            border-bottom: 1px solid #e5e5e5
        }

        label {
            display: inline-block;
            max-width: 100%;
            margin-bottom: 5px;
            font-weight: 700
        }

        input[type=search] {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box
        }

        input[type=checkbox],
        input[type=radio] {
            margin: 4px 0 0;
            margin-top: 1px\9;
            line-height: normal
        }

        input[type=file] {
            display: block
        }

        input[type=range] {
            display: block;
            width: 100%
        }

        select[multiple],
        select[size] {
            height: auto
        }

        input[type=file]:focus,
        input[type=checkbox]:focus,
        input[type=radio]:focus {
            outline: thin dotted;
            outline: 5px auto -webkit-focus-ring-color;
            outline-offset: -2px
        }

        output {
            display: block;
            padding-top: 7px;
            font-size: 14px;
            line-height: 1.42857143;
            color: #555
        }

        .form-control {
            display: block;
            width: 100%;
            height: 34px;
            padding: 6px 12px;
            font-size: 14px;
            line-height: 1.42857143;
            color: #555;
            background-color: #fff;
            background-image: none;
            border: 1px solid #ccc;
            border-radius: 4px;
            -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
            -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
            -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
            transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s
        }

        .form-control:focus {
            border-color: #66afe9;
            outline: 0;
            -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, .6);
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, .6)
        }

        .form-control::-moz-placeholder {
            color: #999;
            opacity: 1
        }

        .form-control:-ms-input-placeholder {
            color: #999
        }

        .form-control::-webkit-input-placeholder {
            color: #999
        }

        .form-control::-ms-expand {
            background-color: transparent;
            border: 0
        }

        .form-control[disabled],
        .form-control[readonly],
        fieldset[disabled] .form-control {
            background-color: #eee;
            opacity: 1
        }

        .form-control[disabled],
        fieldset[disabled] .form-control {
            cursor: not-allowed
        }

        textarea.form-control {
            height: auto
        }

        input[type=search] {
            -webkit-appearance: none
        }

        @media screen and (-webkit-min-device-pixel-ratio:0) {

            input[type=date].form-control,
            input[type=time].form-control,
            input[type=datetime-local].form-control,
            input[type=month].form-control {
                line-height: 34px
            }

            .input-group-sm input[type=date],
            .input-group-sm input[type=time],
            .input-group-sm input[type=datetime-local],
            .input-group-sm input[type=month],
            input[type=date].input-sm,
            input[type=time].input-sm,
            input[type=datetime-local].input-sm,
            input[type=month].input-sm {
                line-height: 30px
            }

            .input-group-lg input[type=date],
            .input-group-lg input[type=time],
            .input-group-lg input[type=datetime-local],
            .input-group-lg input[type=month],
            input[type=date].input-lg,
            input[type=time].input-lg,
            input[type=datetime-local].input-lg,
            input[type=month].input-lg {
                line-height: 46px
            }
        }

        .form-group {
            margin-bottom: 15px
        }

        .checkbox,
        .radio {
            position: relative;
            display: block;
            margin-top: 10px;
            margin-bottom: 10px
        }

        .checkbox label,
        .radio label {
            min-height: 20px;
            padding-left: 20px;
            margin-bottom: 0;
            font-weight: 400;
            cursor: pointer
        }

        .checkbox input[type=checkbox],
        .checkbox-inline input[type=checkbox],
        .radio input[type=radio],
        .radio-inline input[type=radio] {
            position: absolute;
            margin-top: 4px\9;
            margin-left: -20px
        }

        .checkbox+.checkbox,
        .radio+.radio {
            margin-top: -5px
        }

        .checkbox-inline,
        .radio-inline {
            position: relative;
            display: inline-block;
            padding-left: 20px;
            margin-bottom: 0;
            font-weight: 400;
            vertical-align: middle;
            cursor: pointer
        }

        .checkbox-inline+.checkbox-inline,
        .radio-inline+.radio-inline {
            margin-top: 0;
            margin-left: 10px
        }

        fieldset[disabled] input[type=checkbox],
        fieldset[disabled] input[type=radio],
        input[type=checkbox].disabled,
        input[type=checkbox][disabled],
        input[type=radio].disabled,
        input[type=radio][disabled] {
            cursor: not-allowed
        }

        .checkbox-inline.disabled,
        .radio-inline.disabled,
        fieldset[disabled] .checkbox-inline,
        fieldset[disabled] .radio-inline {
            cursor: not-allowed
        }

        .checkbox.disabled label,
        .radio.disabled label,
        fieldset[disabled] .checkbox label,
        fieldset[disabled] .radio label {
            cursor: not-allowed
        }

        .form-control-static {
            min-height: 34px;
            padding-top: 7px;
            padding-bottom: 7px;
            margin-bottom: 0
        }

        .form-control-static.input-lg,
        .form-control-static.input-sm {
            padding-right: 0;
            padding-left: 0
        }

        .input-sm {
            height: 30px;
            padding: 5px 10px;
            font-size: 12px;
            line-height: 1.5;
            border-radius: 3px
        }

        select.input-sm {
            height: 30px;
            line-height: 30px
        }

        select[multiple].input-sm,
        textarea.input-sm {
            height: auto
        }

        .form-group-sm .form-control {
            height: 30px;
            padding: 5px 10px;
            font-size: 12px;
            line-height: 1.5;
            border-radius: 3px
        }

        .form-group-sm select.form-control {
            height: 30px;
            line-height: 30px
        }

        .form-group-sm select[multiple].form-control,
        .form-group-sm textarea.form-control {
            height: auto
        }

        .form-group-sm .form-control-static {
            height: 30px;
            min-height: 32px;
            padding: 6px 10px;
            font-size: 12px;
            line-height: 1.5
        }

        .input-lg {
            height: 46px;
            padding: 10px 16px;
            font-size: 18px;
            line-height: 1.3333333;
            border-radius: 6px
        }

        select.input-lg {
            height: 46px;
            line-height: 46px
        }

        select[multiple].input-lg,
        textarea.input-lg {
            height: auto
        }

        .form-group-lg .form-control {
            height: 46px;
            padding: 10px 16px;
            font-size: 18px;
            line-height: 1.3333333;
            border-radius: 6px
        }

        .form-group-lg select.form-control {
            height: 46px;
            line-height: 46px
        }

        .form-group-lg select[multiple].form-control,
        .form-group-lg textarea.form-control {
            height: auto
        }

        .form-group-lg .form-control-static {
            height: 46px;
            min-height: 38px;
            padding: 11px 16px;
            font-size: 18px;
            line-height: 1.3333333
        }

        .has-feedback {
            position: relative
        }

        .has-feedback .form-control {
            padding-right: 42.5px
        }

        .form-control-feedback {
            position: absolute;
            top: 0;
            right: 0;
            z-index: 2;
            display: block;
            width: 34px;
            height: 34px;
            line-height: 34px;
            text-align: center;
            pointer-events: none
        }

        .form-group-lg .form-control+.form-control-feedback,
        .input-group-lg+.form-control-feedback,
        .input-lg+.form-control-feedback {
            width: 46px;
            height: 46px;
            line-height: 46px
        }

        .form-group-sm .form-control+.form-control-feedback,
        .input-group-sm+.form-control-feedback,
        .input-sm+.form-control-feedback {
            width: 30px;
            height: 30px;
            line-height: 30px
        }

        .has-success .checkbox,
        .has-success .checkbox-inline,
        .has-success .control-label,
        .has-success .help-block,
        .has-success .radio,
        .has-success .radio-inline,
        .has-success.checkbox label,
        .has-success.checkbox-inline label,
        .has-success.radio label,
        .has-success.radio-inline label {
            color: #3c763d
        }

        .has-success .form-control {
            border-color: #3c763d;
            -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075)
        }

        .has-success .form-control:focus {
            border-color: #2b542c;
            -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #67b168;
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #67b168
        }

        .has-success .input-group-addon {
            color: #3c763d;
            background-color: #dff0d8;
            border-color: #3c763d
        }

        .has-success .form-control-feedback {
            color: #3c763d
        }

        .has-warning .checkbox,
        .has-warning .checkbox-inline,
        .has-warning .control-label,
        .has-warning .help-block,
        .has-warning .radio,
        .has-warning .radio-inline,
        .has-warning.checkbox label,
        .has-warning.checkbox-inline label,
        .has-warning.radio label,
        .has-warning.radio-inline label {
            color: #8a6d3b
        }

        .has-warning .form-control {
            border-color: #8a6d3b;
            -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075)
        }

        .has-warning .form-control:focus {
            border-color: #66512c;
            -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #c0a16b;
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #c0a16b
        }

        .has-warning .input-group-addon {
            color: #8a6d3b;
            background-color: #fcf8e3;
            border-color: #8a6d3b
        }

        .has-warning .form-control-feedback {
            color: #8a6d3b
        }

        .has-error .checkbox,
        .has-error .checkbox-inline,
        .has-error .control-label,
        .has-error .help-block,
        .has-error .radio,
        .has-error .radio-inline,
        .has-error.checkbox label,
        .has-error.checkbox-inline label,
        .has-error.radio label,
        .has-error.radio-inline label {
            color: #a94442
        }

        .has-error .form-control {
            border-color: #a94442;
            -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075)
        }

        .has-error .form-control:focus {
            border-color: #843534;
            -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #ce8483;
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #ce8483
        }

        .has-error .input-group-addon {
            color: #a94442;
            background-color: #f2dede;
            border-color: #a94442
        }

        .has-error .form-control-feedback {
            color: #a94442
        }

        .has-feedback label~.form-control-feedback {
            top: 25px
        }

        .has-feedback label.sr-only~.form-control-feedback {
            top: 0
        }

        .help-block {
            display: block;
            margin-top: 5px;
            margin-bottom: 10px;
            color: #737373
        }

        @media (min-width:768px) {
            .form-inline .form-group {
                display: inline-block;
                margin-bottom: 0;
                vertical-align: middle
            }

            .form-inline .form-control {
                display: inline-block;
                width: auto;
                vertical-align: middle
            }

            .form-inline .form-control-static {
                display: inline-block
            }

            .form-inline .input-group {
                display: inline-table;
                vertical-align: middle
            }

            .form-inline .input-group .form-control,
            .form-inline .input-group .input-group-addon,
            .form-inline .input-group .input-group-btn {
                width: auto
            }

            .form-inline .input-group>.form-control {
                width: 100%
            }

            .form-inline .control-label {
                margin-bottom: 0;
                vertical-align: middle
            }

            .form-inline .checkbox,
            .form-inline .radio {
                display: inline-block;
                margin-top: 0;
                margin-bottom: 0;
                vertical-align: middle
            }

            .form-inline .checkbox label,
            .form-inline .radio label {
                padding-left: 0
            }

            .form-inline .checkbox input[type=checkbox],
            .form-inline .radio input[type=radio] {
                position: relative;
                margin-left: 0
            }

            .form-inline .has-feedback .form-control-feedback {
                top: 0
            }
        }

        .form-horizontal .checkbox,
        .form-horizontal .checkbox-inline,
        .form-horizontal .radio,
        .form-horizontal .radio-inline {
            padding-top: 7px;
            margin-top: 0;
            margin-bottom: 0
        }

        .form-horizontal .checkbox,
        .form-horizontal .radio {
            min-height: 27px
        }

        .form-horizontal .form-group {
            margin-right: -15px;
            margin-left: -15px
        }

        @media (min-width:768px) {
            .form-horizontal .control-label {
                padding-top: 7px;
                margin-bottom: 0;
                text-align: right
            }
        }

        .form-horizontal .has-feedback .form-control-feedback {
            right: 15px
        }

        @media (min-width:768px) {
            .form-horizontal .form-group-lg .control-label {
                padding-top: 11px;
                font-size: 18px
            }
        }

        @media (min-width:768px) {
            .form-horizontal .form-group-sm .control-label {
                padding-top: 6px;
                font-size: 12px
            }
        }

        .btn {
            display: inline-block;
            padding: 6px 12px;
            margin-bottom: 0;
            font-size: 14px;
            font-weight: 400;
            line-height: 1.42857143;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            -ms-touch-action: manipulation;
            touch-action: manipulation;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            background-image: none;
            border: 1px solid transparent;
            border-radius: 4px
        }

        .btn.active.focus,
        .btn.active:focus,
        .btn.focus,
        .btn:active.focus,
        .btn:active:focus,
        .btn:focus {
            outline: thin dotted;
            outline: 5px auto -webkit-focus-ring-color;
            outline-offset: -2px
        }

        .btn.focus,
        .btn:focus,
        .btn:hover {
            color: #333;
            text-decoration: none
        }

        .btn.active,
        .btn:active {
            background-image: none;
            outline: 0;
            -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);
            box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125)
        }

        .btn.disabled,
        .btn[disabled],
        fieldset[disabled] .btn {
            cursor: not-allowed;
            filter: alpha(opacity=65);
            -webkit-box-shadow: none;
            box-shadow: none;
            opacity: .65
        }

        a.btn.disabled,
        fieldset[disabled] a.btn {
            pointer-events: none
        }

        .btn-default {
            color: #333;
            background-color: #fff;
            border-color: #ccc
        }

        .btn-default.focus,
        .btn-default:focus {
            color: #333;
            background-color: #e6e6e6;
            border-color: #8c8c8c
        }

        .btn-default:hover {
            color: #333;
            background-color: #e6e6e6;
            border-color: #adadad
        }

        .btn-default.active,
        .btn-default:active,
        .open>.dropdown-toggle.btn-default {
            color: #333;
            background-color: #e6e6e6;
            border-color: #adadad
        }

        .btn-default.active.focus,
        .btn-default.active:focus,
        .btn-default.active:hover,
        .btn-default:active.focus,
        .btn-default:active:focus,
        .btn-default:active:hover,
        .open>.dropdown-toggle.btn-default.focus,
        .open>.dropdown-toggle.btn-default:focus,
        .open>.dropdown-toggle.btn-default:hover {
            color: #333;
            background-color: #d4d4d4;
            border-color: #8c8c8c
        }

        .btn-default.active,
        .btn-default:active,
        .open>.dropdown-toggle.btn-default {
            background-image: none
        }

        .btn-default.disabled.focus,
        .btn-default.disabled:focus,
        .btn-default.disabled:hover,
        .btn-default[disabled].focus,
        .btn-default[disabled]:focus,
        .btn-default[disabled]:hover,
        fieldset[disabled] .btn-default.focus,
        fieldset[disabled] .btn-default:focus,
        fieldset[disabled] .btn-default:hover {
            background-color: #fff;
            border-color: #ccc
        }

        .btn-default .badge {
            color: #fff;
            background-color: #333
        }

        .btn-primary {
            color: #fff;
            background-color: #337ab7;
            border-color: #2e6da4
        }

        .btn-primary.focus,
        .btn-primary:focus {
            color: #fff;
            background-color: #286090;
            border-color: #122b40
        }

        .btn-primary:hover {
            color: #fff;
            background-color: #286090;
            border-color: #204d74
        }

        .btn-primary.active,
        .btn-primary:active,
        .open>.dropdown-toggle.btn-primary {
            color: #fff;
            background-color: #286090;
            border-color: #204d74
        }

        .btn-primary.active.focus,
        .btn-primary.active:focus,
        .btn-primary.active:hover,
        .btn-primary:active.focus,
        .btn-primary:active:focus,
        .btn-primary:active:hover,
        .open>.dropdown-toggle.btn-primary.focus,
        .open>.dropdown-toggle.btn-primary:focus,
        .open>.dropdown-toggle.btn-primary:hover {
            color: #fff;
            background-color: #204d74;
            border-color: #122b40
        }

        .btn-primary.active,
        .btn-primary:active,
        .open>.dropdown-toggle.btn-primary {
            background-image: none
        }

        .btn-primary.disabled.focus,
        .btn-primary.disabled:focus,
        .btn-primary.disabled:hover,
        .btn-primary[disabled].focus,
        .btn-primary[disabled]:focus,
        .btn-primary[disabled]:hover,
        fieldset[disabled] .btn-primary.focus,
        fieldset[disabled] .btn-primary:focus,
        fieldset[disabled] .btn-primary:hover {
            background-color: #337ab7;
            border-color: #2e6da4
        }

        .btn-primary .badge {
            color: #337ab7;
            background-color: #fff
        }

        .btn-success {
            color: #fff;
            background-color: #5cb85c;
            border-color: #4cae4c
        }

        .btn-success.focus,
        .btn-success:focus {
            color: #fff;
            background-color: #449d44;
            border-color: #255625
        }

        .btn-success:hover {
            color: #fff;
            background-color: #449d44;
            border-color: #398439
        }

        .btn-success.active,
        .btn-success:active,
        .open>.dropdown-toggle.btn-success {
            color: #fff;
            background-color: #449d44;
            border-color: #398439
        }

        .btn-success.active.focus,
        .btn-success.active:focus,
        .btn-success.active:hover,
        .btn-success:active.focus,
        .btn-success:active:focus,
        .btn-success:active:hover,
        .open>.dropdown-toggle.btn-success.focus,
        .open>.dropdown-toggle.btn-success:focus,
        .open>.dropdown-toggle.btn-success:hover {
            color: #fff;
            background-color: #398439;
            border-color: #255625
        }

        .btn-success.active,
        .btn-success:active,
        .open>.dropdown-toggle.btn-success {
            background-image: none
        }

        .btn-success.disabled.focus,
        .btn-success.disabled:focus,
        .btn-success.disabled:hover,
        .btn-success[disabled].focus,
        .btn-success[disabled]:focus,
        .btn-success[disabled]:hover,
        fieldset[disabled] .btn-success.focus,
        fieldset[disabled] .btn-success:focus,
        fieldset[disabled] .btn-success:hover {
            background-color: #5cb85c;
            border-color: #4cae4c
        }

        .btn-success .badge {
            color: #5cb85c;
            background-color: #fff
        }

        .btn-info {
            color: #fff;
            background-color: #5bc0de;
            border-color: #46b8da
        }

        .btn-info.focus,
        .btn-info:focus {
            color: #fff;
            background-color: #31b0d5;
            border-color: #1b6d85
        }

        .btn-info:hover {
            color: #fff;
            background-color: #31b0d5;
            border-color: #269abc
        }

        .btn-info.active,
        .btn-info:active,
        .open>.dropdown-toggle.btn-info {
            color: #fff;
            background-color: #31b0d5;
            border-color: #269abc
        }

        .btn-info.active.focus,
        .btn-info.active:focus,
        .btn-info.active:hover,
        .btn-info:active.focus,
        .btn-info:active:focus,
        .btn-info:active:hover,
        .open>.dropdown-toggle.btn-info.focus,
        .open>.dropdown-toggle.btn-info:focus,
        .open>.dropdown-toggle.btn-info:hover {
            color: #fff;
            background-color: #269abc;
            border-color: #1b6d85
        }

        .btn-info.active,
        .btn-info:active,
        .open>.dropdown-toggle.btn-info {
            background-image: none
        }

        .btn-info.disabled.focus,
        .btn-info.disabled:focus,
        .btn-info.disabled:hover,
        .btn-info[disabled].focus,
        .btn-info[disabled]:focus,
        .btn-info[disabled]:hover,
        fieldset[disabled] .btn-info.focus,
        fieldset[disabled] .btn-info:focus,
        fieldset[disabled] .btn-info:hover {
            background-color: #5bc0de;
            border-color: #46b8da
        }

        .btn-info .badge {
            color: #5bc0de;
            background-color: #fff
        }

        .btn-warning {
            color: #fff;
            background-color: #f0ad4e;
            border-color: #eea236
        }

        .btn-warning.focus,
        .btn-warning:focus {
            color: #fff;
            background-color: #ec971f;
            border-color: #985f0d
        }

        .btn-warning:hover {
            color: #fff;
            background-color: #ec971f;
            border-color: #d58512
        }

        .btn-warning.active,
        .btn-warning:active,
        .open>.dropdown-toggle.btn-warning {
            color: #fff;
            background-color: #ec971f;
            border-color: #d58512
        }

        .btn-warning.active.focus,
        .btn-warning.active:focus,
        .btn-warning.active:hover,
        .btn-warning:active.focus,
        .btn-warning:active:focus,
        .btn-warning:active:hover,
        .open>.dropdown-toggle.btn-warning.focus,
        .open>.dropdown-toggle.btn-warning:focus,
        .open>.dropdown-toggle.btn-warning:hover {
            color: #fff;
            background-color: #d58512;
            border-color: #985f0d
        }

        .btn-warning.active,
        .btn-warning:active,
        .open>.dropdown-toggle.btn-warning {
            background-image: none
        }

        .btn-warning.disabled.focus,
        .btn-warning.disabled:focus,
        .btn-warning.disabled:hover,
        .btn-warning[disabled].focus,
        .btn-warning[disabled]:focus,
        .btn-warning[disabled]:hover,
        fieldset[disabled] .btn-warning.focus,
        fieldset[disabled] .btn-warning:focus,
        fieldset[disabled] .btn-warning:hover {
            background-color: #f0ad4e;
            border-color: #eea236
        }

        .btn-warning .badge {
            color: #f0ad4e;
            background-color: #fff
        }

        .btn-danger {
            color: #fff;
            background-color: #d9534f;
            border-color: #d43f3a
        }

        .btn-danger.focus,
        .btn-danger:focus {
            color: #fff;
            background-color: #c9302c;
            border-color: #761c19
        }

        .btn-danger:hover {
            color: #fff;
            background-color: #c9302c;
            border-color: #ac2925
        }

        .btn-danger.active,
        .btn-danger:active,
        .open>.dropdown-toggle.btn-danger {
            color: #fff;
            background-color: #c9302c;
            border-color: #ac2925
        }

        .btn-danger.active.focus,
        .btn-danger.active:focus,
        .btn-danger.active:hover,
        .btn-danger:active.focus,
        .btn-danger:active:focus,
        .btn-danger:active:hover,
        .open>.dropdown-toggle.btn-danger.focus,
        .open>.dropdown-toggle.btn-danger:focus,
        .open>.dropdown-toggle.btn-danger:hover {
            color: #fff;
            background-color: #ac2925;
            border-color: #761c19
        }

        .btn-danger.active,
        .btn-danger:active,
        .open>.dropdown-toggle.btn-danger {
            background-image: none
        }

        .btn-danger.disabled.focus,
        .btn-danger.disabled:focus,
        .btn-danger.disabled:hover,
        .btn-danger[disabled].focus,
        .btn-danger[disabled]:focus,
        .btn-danger[disabled]:hover,
        fieldset[disabled] .btn-danger.focus,
        fieldset[disabled] .btn-danger:focus,
        fieldset[disabled] .btn-danger:hover {
            background-color: #d9534f;
            border-color: #d43f3a
        }

        .btn-danger .badge {
            color: #d9534f;
            background-color: #fff
        }

        .btn-link {
            font-weight: 400;
            color: #337ab7;
            border-radius: 0
        }

        .btn-link,
        .btn-link.active,
        .btn-link:active,
        .btn-link[disabled],
        fieldset[disabled] .btn-link {
            background-color: transparent;
            -webkit-box-shadow: none;
            box-shadow: none
        }

        .btn-link,
        .btn-link:active,
        .btn-link:focus,
        .btn-link:hover {
            border-color: transparent
        }

        .btn-link:focus,
        .btn-link:hover {
            color: #23527c;
            text-decoration: underline;
            background-color: transparent
        }

        .btn-link[disabled]:focus,
        .btn-link[disabled]:hover,
        fieldset[disabled] .btn-link:focus,
        fieldset[disabled] .btn-link:hover {
            color: #777;
            text-decoration: none
        }

        .btn-group-lg>.btn,
        .btn-lg {
            padding: 10px 16px;
            font-size: 18px;
            line-height: 1.3333333;
            border-radius: 6px
        }

        .btn-group-sm>.btn,
        .btn-sm {
            padding: 5px 10px;
            font-size: 12px;
            line-height: 1.5;
            border-radius: 3px
        }

        .btn-group-xs>.btn,
        .btn-xs {
            padding: 1px 5px;
            font-size: 12px;
            line-height: 1.5;
            border-radius: 3px
        }

        .btn-block {
            display: block;
            width: 100%
        }

        .btn-block+.btn-block {
            margin-top: 5px
        }

        input[type=button].btn-block,
        input[type=reset].btn-block,
        input[type=submit].btn-block {
            width: 100%
        }

        .fade {
            opacity: 0;
            -webkit-transition: opacity .15s linear;
            -o-transition: opacity .15s linear;
            transition: opacity .15s linear
        }

        .fade.in {
            opacity: 1
        }

        .collapse {
            display: none
        }

        .collapse.in {
            display: block
        }

        tr.collapse.in {
            display: table-row
        }

        tbody.collapse.in {
            display: table-row-group
        }

        .collapsing {
            position: relative;
            height: 0;
            overflow: hidden;
            -webkit-transition-timing-function: ease;
            -o-transition-timing-function: ease;
            transition-timing-function: ease;
            -webkit-transition-duration: .35s;
            -o-transition-duration: .35s;
            transition-duration: .35s;
            -webkit-transition-property: height, visibility;
            -o-transition-property: height, visibility;
            transition-property: height, visibility
        }

        .caret {
            display: inline-block;
            width: 0;
            height: 0;
            margin-left: 2px;
            vertical-align: middle;
            border-top: 4px dashed;
            border-top: 4px solid\9;
            border-right: 4px solid transparent;
            border-left: 4px solid transparent
        }

        .dropdown,
        .dropup {
            position: relative
        }

        .dropdown-toggle:focus {
            outline: 0
        }

        .dropdown-menu {
            position: absolute;
            top: 100%;
            left: 0;
            z-index: 1000;
            display: none;
            float: left;
            min-width: 160px;
            padding: 5px 0;
            margin: 2px 0 0;
            font-size: 14px;
            text-align: left;
            list-style: none;
            background-color: #fff;
            -webkit-background-clip: padding-box;
            background-clip: padding-box;
            border: 1px solid #ccc;
            border: 1px solid rgba(0, 0, 0, .15);
            border-radius: 4px;
            -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
            box-shadow: 0 6px 12px rgba(0, 0, 0, .175)
        }

        .dropdown-menu.pull-right {
            right: 0;
            left: auto
        }

        .dropdown-menu .divider {
            height: 1px;
            margin: 9px 0;
            overflow: hidden;
            background-color: #e5e5e5
        }

        .dropdown-menu>li>a {
            display: block;
            padding: 3px 20px;
            clear: both;
            font-weight: 400;
            line-height: 1.42857143;
            color: #333;
            white-space: nowrap
        }

        .dropdown-menu>li>a:focus,
        .dropdown-menu>li>a:hover {
            color: #262626;
            text-decoration: none;
            background-color: #f5f5f5
        }

        .dropdown-menu>.active>a,
        .dropdown-menu>.active>a:focus,
        .dropdown-menu>.active>a:hover {
            color: #fff;
            text-decoration: none;
            background-color: #337ab7;
            outline: 0
        }

        .dropdown-menu>.disabled>a,
        .dropdown-menu>.disabled>a:focus,
        .dropdown-menu>.disabled>a:hover {
            color: #777
        }

        .dropdown-menu>.disabled>a:focus,
        .dropdown-menu>.disabled>a:hover {
            text-decoration: none;
            cursor: not-allowed;
            background-color: transparent;
            background-image: none;
            filter: progid:DXImageTransform.Microsoft.gradient(enabled=false)
        }

        .open>.dropdown-menu {
            display: block
        }

        .open>a {
            outline: 0
        }

        .dropdown-menu-right {
            right: 0;
            left: auto
        }

        .dropdown-menu-left {
            right: auto;
            left: 0
        }

        .dropdown-header {
            display: block;
            padding: 3px 20px;
            font-size: 12px;
            line-height: 1.42857143;
            color: #777;
            white-space: nowrap
        }

        .dropdown-backdrop {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 990
        }

        .pull-right>.dropdown-menu {
            right: 0;
            left: auto
        }

        .dropup .caret,
        .navbar-fixed-bottom .dropdown .caret {
            content: "";
            border-top: 0;
            border-bottom: 4px dashed;
            border-bottom: 4px solid\9
        }

        .dropup .dropdown-menu,
        .navbar-fixed-bottom .dropdown .dropdown-menu {
            top: auto;
            bottom: 100%;
            margin-bottom: 2px
        }

        @media (min-width:768px) {
            .navbar-right .dropdown-menu {
                right: 0;
                left: auto
            }

            .navbar-right .dropdown-menu-left {
                right: auto;
                left: 0
            }
        }

        .btn-group,
        .btn-group-vertical {
            position: relative;
            display: inline-block;
            vertical-align: middle
        }

        .btn-group-vertical>.btn,
        .btn-group>.btn {
            position: relative;
            float: left
        }

        .btn-group-vertical>.btn.active,
        .btn-group-vertical>.btn:active,
        .btn-group-vertical>.btn:focus,
        .btn-group-vertical>.btn:hover,
        .btn-group>.btn.active,
        .btn-group>.btn:active,
        .btn-group>.btn:focus,
        .btn-group>.btn:hover {
            z-index: 2
        }

        .btn-group .btn+.btn,
        .btn-group .btn+.btn-group,
        .btn-group .btn-group+.btn,
        .btn-group .btn-group+.btn-group {
            margin-left: -1px
        }

        .btn-toolbar {
            margin-left: -5px
        }

        .btn-toolbar .btn,
        .btn-toolbar .btn-group,
        .btn-toolbar .input-group {
            float: left
        }

        .btn-toolbar>.btn,
        .btn-toolbar>.btn-group,
        .btn-toolbar>.input-group {
            margin-left: 5px
        }

        .btn-group>.btn:not(:first-child):not(:last-child):not(.dropdown-toggle) {
            border-radius: 0
        }

        .btn-group>.btn:first-child {
            margin-left: 0
        }

        .btn-group>.btn:first-child:not(:last-child):not(.dropdown-toggle) {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0
        }

        .btn-group>.btn:last-child:not(:first-child),
        .btn-group>.dropdown-toggle:not(:first-child) {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0
        }

        .btn-group>.btn-group {
            float: left
        }

        .btn-group>.btn-group:not(:first-child):not(:last-child)>.btn {
            border-radius: 0
        }

        .btn-group>.btn-group:first-child:not(:last-child)>.btn:last-child,
        .btn-group>.btn-group:first-child:not(:last-child)>.dropdown-toggle {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0
        }

        .btn-group>.btn-group:last-child:not(:first-child)>.btn:first-child {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0
        }

        .btn-group .dropdown-toggle:active,
        .btn-group.open .dropdown-toggle {
            outline: 0
        }

        .btn-group>.btn+.dropdown-toggle {
            padding-right: 8px;
            padding-left: 8px
        }

        .btn-group>.btn-lg+.dropdown-toggle {
            padding-right: 12px;
            padding-left: 12px
        }

        .btn-group.open .dropdown-toggle {
            -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);
            box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125)
        }

        .btn-group.open .dropdown-toggle.btn-link {
            -webkit-box-shadow: none;
            box-shadow: none
        }

        .btn .caret {
            margin-left: 0
        }

        .btn-lg .caret {
            border-width: 5px 5px 0;
            border-bottom-width: 0
        }

        .dropup .btn-lg .caret {
            border-width: 0 5px 5px
        }

        .btn-group-vertical>.btn,
        .btn-group-vertical>.btn-group,
        .btn-group-vertical>.btn-group>.btn {
            display: block;
            float: none;
            width: 100%;
            max-width: 100%
        }

        .btn-group-vertical>.btn-group>.btn {
            float: none
        }

        .btn-group-vertical>.btn+.btn,
        .btn-group-vertical>.btn+.btn-group,
        .btn-group-vertical>.btn-group+.btn,
        .btn-group-vertical>.btn-group+.btn-group {
            margin-top: -1px;
            margin-left: 0
        }

        .btn-group-vertical>.btn:not(:first-child):not(:last-child) {
            border-radius: 0
        }

        .btn-group-vertical>.btn:first-child:not(:last-child) {
            border-top-left-radius: 4px;
            border-top-right-radius: 4px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0
        }

        .btn-group-vertical>.btn:last-child:not(:first-child) {
            border-top-left-radius: 0;
            border-top-right-radius: 0;
            border-bottom-right-radius: 4px;
            border-bottom-left-radius: 4px
        }

        .btn-group-vertical>.btn-group:not(:first-child):not(:last-child)>.btn {
            border-radius: 0
        }

        .btn-group-vertical>.btn-group:first-child:not(:last-child)>.btn:last-child,
        .btn-group-vertical>.btn-group:first-child:not(:last-child)>.dropdown-toggle {
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0
        }

        .btn-group-vertical>.btn-group:last-child:not(:first-child)>.btn:first-child {
            border-top-left-radius: 0;
            border-top-right-radius: 0
        }

        .btn-group-justified {
            display: table;
            width: 100%;
            table-layout: fixed;
            border-collapse: separate
        }

        .btn-group-justified>.btn,
        .btn-group-justified>.btn-group {
            display: table-cell;
            float: none;
            width: 1%
        }

        .btn-group-justified>.btn-group .btn {
            width: 100%
        }

        .btn-group-justified>.btn-group .dropdown-menu {
            left: auto
        }

        [data-toggle=buttons]>.btn input[type=checkbox],
        [data-toggle=buttons]>.btn input[type=radio],
        [data-toggle=buttons]>.btn-group>.btn input[type=checkbox],
        [data-toggle=buttons]>.btn-group>.btn input[type=radio] {
            position: absolute;
            clip: rect(0, 0, 0, 0);
            pointer-events: none
        }

        .input-group {
            position: relative;
            display: table;
            border-collapse: separate
        }

        .input-group[class*=col-] {
            float: none;
            padding-right: 0;
            padding-left: 0
        }

        .input-group .form-control {
            position: relative;
            z-index: 2;
            float: left;
            width: 100%;
            margin-bottom: 0
        }

        .input-group .form-control:focus {
            z-index: 3
        }

        .input-group-lg>.form-control,
        .input-group-lg>.input-group-addon,
        .input-group-lg>.input-group-btn>.btn {
            height: 46px;
            padding: 10px 16px;
            font-size: 18px;
            line-height: 1.3333333;
            border-radius: 6px
        }

        select.input-group-lg>.form-control,
        select.input-group-lg>.input-group-addon,
        select.input-group-lg>.input-group-btn>.btn {
            height: 46px;
            line-height: 46px
        }

        select[multiple].input-group-lg>.form-control,
        select[multiple].input-group-lg>.input-group-addon,
        select[multiple].input-group-lg>.input-group-btn>.btn,
        textarea.input-group-lg>.form-control,
        textarea.input-group-lg>.input-group-addon,
        textarea.input-group-lg>.input-group-btn>.btn {
            height: auto
        }

        .input-group-sm>.form-control,
        .input-group-sm>.input-group-addon,
        .input-group-sm>.input-group-btn>.btn {
            height: 30px;
            padding: 5px 10px;
            font-size: 12px;
            line-height: 1.5;
            border-radius: 3px
        }

        select.input-group-sm>.form-control,
        select.input-group-sm>.input-group-addon,
        select.input-group-sm>.input-group-btn>.btn {
            height: 30px;
            line-height: 30px
        }

        select[multiple].input-group-sm>.form-control,
        select[multiple].input-group-sm>.input-group-addon,
        select[multiple].input-group-sm>.input-group-btn>.btn,
        textarea.input-group-sm>.form-control,
        textarea.input-group-sm>.input-group-addon,
        textarea.input-group-sm>.input-group-btn>.btn {
            height: auto
        }

        .input-group .form-control,
        .input-group-addon,
        .input-group-btn {
            display: table-cell
        }

        .input-group .form-control:not(:first-child):not(:last-child),
        .input-group-addon:not(:first-child):not(:last-child),
        .input-group-btn:not(:first-child):not(:last-child) {
            border-radius: 0
        }

        .input-group-addon,
        .input-group-btn {
            width: 1%;
            white-space: nowrap;
            vertical-align: middle
        }

        .input-group-addon {
            padding: 6px 12px;
            font-size: 14px;
            font-weight: 400;
            line-height: 1;
            color: #555;
            text-align: center;
            background-color: #eee;
            border: 1px solid #ccc;
            border-radius: 4px
        }

        .input-group-addon.input-sm {
            padding: 5px 10px;
            font-size: 12px;
            border-radius: 3px
        }

        .input-group-addon.input-lg {
            padding: 10px 16px;
            font-size: 18px;
            border-radius: 6px
        }

        .input-group-addon input[type=checkbox],
        .input-group-addon input[type=radio] {
            margin-top: 0
        }

        .input-group .form-control:first-child,
        .input-group-addon:first-child,
        .input-group-btn:first-child>.btn,
        .input-group-btn:first-child>.btn-group>.btn,
        .input-group-btn:first-child>.dropdown-toggle,
        .input-group-btn:last-child>.btn-group:not(:last-child)>.btn,
        .input-group-btn:last-child>.btn:not(:last-child):not(.dropdown-toggle) {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0
        }

        .input-group-addon:first-child {
            border-right: 0
        }

        .input-group .form-control:last-child,
        .input-group-addon:last-child,
        .input-group-btn:first-child>.btn-group:not(:first-child)>.btn,
        .input-group-btn:first-child>.btn:not(:first-child),
        .input-group-btn:last-child>.btn,
        .input-group-btn:last-child>.btn-group>.btn,
        .input-group-btn:last-child>.dropdown-toggle {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0
        }

        .input-group-addon:last-child {
            border-left: 0
        }

        .input-group-btn {
            position: relative;
            font-size: 0;
            white-space: nowrap
        }

        .input-group-btn>.btn {
            position: relative
        }

        .input-group-btn>.btn+.btn {
            margin-left: -1px
        }

        .input-group-btn>.btn:active,
        .input-group-btn>.btn:focus,
        .input-group-btn>.btn:hover {
            z-index: 2
        }

        .input-group-btn:first-child>.btn,
        .input-group-btn:first-child>.btn-group {
            margin-right: -1px
        }

        .input-group-btn:last-child>.btn,
        .input-group-btn:last-child>.btn-group {
            z-index: 2;
            margin-left: -1px
        }

        .nav {
            padding-left: 0;
            margin-bottom: 0;
            list-style: none
        }

        .nav>li {
            position: relative;
            display: block
        }

        .nav>li>a {
            position: relative;
            display: block;
            padding: 10px 15px
        }

        .nav>li>a:focus,
        .nav>li>a:hover {
            text-decoration: none;
            background-color: #eee
        }

        .nav>li.disabled>a {
            color: #777
        }

        .nav>li.disabled>a:focus,
        .nav>li.disabled>a:hover {
            color: #777;
            text-decoration: none;
            cursor: not-allowed;
            background-color: transparent
        }

        .nav .open>a,
        .nav .open>a:focus,
        .nav .open>a:hover {
            background-color: #eee;
            border-color: #337ab7
        }

        .nav .nav-divider {
            height: 1px;
            margin: 9px 0;
            overflow: hidden;
            background-color: #e5e5e5
        }

        .nav>li>a>img {
            max-width: none
        }

        .nav-tabs {
            border-bottom: 1px solid #ddd
        }

        .nav-tabs>li {
            float: left;
            margin-bottom: -1px
        }

        .nav-tabs>li>a {
            margin-right: 2px;
            line-height: 1.42857143;
            border: 1px solid transparent;
            border-radius: 4px 4px 0 0
        }

        .nav-tabs>li>a:hover {
            border-color: #eee #eee #ddd
        }

        .nav-tabs>li.active>a,
        .nav-tabs>li.active>a:focus,
        .nav-tabs>li.active>a:hover {
            color: #555;
            cursor: default;
            background-color: #fff;
            border: 1px solid #ddd;
            border-bottom-color: transparent
        }

        .nav-tabs.nav-justified {
            width: 100%;
            border-bottom: 0
        }

        .nav-tabs.nav-justified>li {
            float: none
        }

        .nav-tabs.nav-justified>li>a {
            margin-bottom: 5px;
            text-align: center
        }

        .nav-tabs.nav-justified>.dropdown .dropdown-menu {
            top: auto;
            left: auto
        }

        @media (min-width:768px) {
            .nav-tabs.nav-justified>li {
                display: table-cell;
                width: 1%
            }

            .nav-tabs.nav-justified>li>a {
                margin-bottom: 0
            }
        }

        .nav-tabs.nav-justified>li>a {
            margin-right: 0;
            border-radius: 4px
        }

        .nav-tabs.nav-justified>.active>a,
        .nav-tabs.nav-justified>.active>a:focus,
        .nav-tabs.nav-justified>.active>a:hover {
            border: 1px solid #ddd
        }

        @media (min-width:768px) {
            .nav-tabs.nav-justified>li>a {
                border-bottom: 1px solid #ddd;
                border-radius: 4px 4px 0 0
            }

            .nav-tabs.nav-justified>.active>a,
            .nav-tabs.nav-justified>.active>a:focus,
            .nav-tabs.nav-justified>.active>a:hover {
                border-bottom-color: #fff
            }
        }

        .nav-pills>li {
            float: left
        }

        .nav-pills>li>a {
            border-radius: 4px
        }

        .nav-pills>li+li {
            margin-left: 2px
        }

        .nav-pills>li.active>a,
        .nav-pills>li.active>a:focus,
        .nav-pills>li.active>a:hover {
            color: #fff;
            background-color: #337ab7
        }

        .nav-stacked>li {
            float: none
        }

        .nav-stacked>li+li {
            margin-top: 2px;
            margin-left: 0
        }

        .nav-justified {
            width: 100%
        }

        .nav-justified>li {
            float: none
        }

        .nav-justified>li>a {
            margin-bottom: 5px;
            text-align: center
        }

        .nav-justified>.dropdown .dropdown-menu {
            top: auto;
            left: auto
        }

        @media (min-width:768px) {
            .nav-justified>li {
                display: table-cell;
                width: 1%
            }

            .nav-justified>li>a {
                margin-bottom: 0
            }
        }

        .nav-tabs-justified {
            border-bottom: 0
        }

        .nav-tabs-justified>li>a {
            margin-right: 0;
            border-radius: 4px
        }

        .nav-tabs-justified>.active>a,
        .nav-tabs-justified>.active>a:focus,
        .nav-tabs-justified>.active>a:hover {
            border: 1px solid #ddd
        }

        @media (min-width:768px) {
            .nav-tabs-justified>li>a {
                border-bottom: 1px solid #ddd;
                border-radius: 4px 4px 0 0
            }

            .nav-tabs-justified>.active>a,
            .nav-tabs-justified>.active>a:focus,
            .nav-tabs-justified>.active>a:hover {
                border-bottom-color: #fff
            }
        }

        .tab-content>.tab-pane {
            display: none
        }

        .tab-content>.active {
            display: block
        }

        .nav-tabs .dropdown-menu {
            margin-top: -1px;
            border-top-left-radius: 0;
            border-top-right-radius: 0
        }

        .navbar {
            position: relative;
            min-height: 50px;
            margin-bottom: 20px;
            border: 1px solid transparent
        }

        @media (min-width:768px) {
            .navbar {
                border-radius: 4px
            }
        }

        @media (min-width:768px) {
            .navbar-header {
                float: left
            }
        }

        .navbar-collapse {
            padding-right: 15px;
            padding-left: 15px;
            overflow-x: visible;
            -webkit-overflow-scrolling: touch;
            border-top: 1px solid transparent;
            -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, .1);
            box-shadow: inset 0 1px 0 rgba(255, 255, 255, .1)
        }

        .navbar-collapse.in {
            overflow-y: auto
        }

        @media (min-width:768px) {
            .navbar-collapse {
                width: auto;
                border-top: 0;
                -webkit-box-shadow: none;
                box-shadow: none
            }

            .navbar-collapse.collapse {
                display: block !important;
                height: auto !important;
                padding-bottom: 0;
                overflow: visible !important
            }

            .navbar-collapse.in {
                overflow-y: visible
            }

            .navbar-fixed-bottom .navbar-collapse,
            .navbar-fixed-top .navbar-collapse,
            .navbar-static-top .navbar-collapse {
                padding-right: 0;
                padding-left: 0
            }
        }

        .navbar-fixed-bottom .navbar-collapse,
        .navbar-fixed-top .navbar-collapse {
            max-height: 340px
        }

        @media (max-device-width:480px) and (orientation:landscape) {

            .navbar-fixed-bottom .navbar-collapse,
            .navbar-fixed-top .navbar-collapse {
                max-height: 200px
            }
        }

        .container-fluid>.navbar-collapse,
        .container-fluid>.navbar-header,
        .container>.navbar-collapse,
        .container>.navbar-header {
            margin-right: -15px;
            margin-left: -15px
        }

        @media (min-width:768px) {

            .container-fluid>.navbar-collapse,
            .container-fluid>.navbar-header,
            .container>.navbar-collapse,
            .container>.navbar-header {
                margin-right: 0;
                margin-left: 0
            }
        }

        .navbar-static-top {
            z-index: 1000;
            border-width: 0 0 1px
        }

        @media (min-width:768px) {
            .navbar-static-top {
                border-radius: 0
            }
        }

        .navbar-fixed-bottom,
        .navbar-fixed-top {
            position: fixed;
            right: 0;
            left: 0;
            z-index: 1030
        }

        @media (min-width:768px) {

            .navbar-fixed-bottom,
            .navbar-fixed-top {
                border-radius: 0
            }
        }

        .navbar-fixed-top {
            top: 0;
            border-width: 0 0 1px
        }

        .navbar-fixed-bottom {
            bottom: 0;
            margin-bottom: 0;
            border-width: 1px 0 0
        }

        .navbar-brand {
            float: left;
            height: 50px;
            padding: 15px 15px;
            font-size: 18px;
            line-height: 20px
        }

        .navbar-brand:focus,
        .navbar-brand:hover {
            text-decoration: none
        }

        .navbar-brand>img {
            display: block
        }

        @media (min-width:768px) {

            .navbar>.container .navbar-brand,
            .navbar>.container-fluid .navbar-brand {
                margin-left: -15px
            }
        }

        .navbar-toggle {
            position: relative;
            float: right;
            padding: 9px 10px;
            margin-top: 8px;
            margin-right: 15px;
            margin-bottom: 8px;
            background-color: transparent;
            background-image: none;
            border: 1px solid transparent;
            border-radius: 4px
        }

        .navbar-toggle:focus {
            outline: 0
        }

        .navbar-toggle .icon-bar {
            display: block;
            width: 22px;
            height: 2px;
            border-radius: 1px
        }

        .navbar-toggle .icon-bar+.icon-bar {
            margin-top: 4px
        }

        @media (min-width:768px) {
            .navbar-toggle {
                display: none
            }
        }

        .navbar-nav {
            margin: 7.5px -15px
        }

        .navbar-nav>li>a {
            padding-top: 10px;
            padding-bottom: 10px;
            line-height: 20px
        }

        @media (max-width:767px) {
            .navbar-nav .open .dropdown-menu {
                position: static;
                float: none;
                width: auto;
                margin-top: 0;
                background-color: transparent;
                border: 0;
                -webkit-box-shadow: none;
                box-shadow: none
            }

            .navbar-nav .open .dropdown-menu .dropdown-header,
            .navbar-nav .open .dropdown-menu>li>a {
                padding: 5px 15px 5px 25px
            }

            .navbar-nav .open .dropdown-menu>li>a {
                line-height: 20px
            }

            .navbar-nav .open .dropdown-menu>li>a:focus,
            .navbar-nav .open .dropdown-menu>li>a:hover {
                background-image: none
            }
        }

        @media (min-width:768px) {
            .navbar-nav {
                float: left;
                margin: 0
            }

            .navbar-nav>li {
                float: left
            }

            .navbar-nav>li>a {
                padding-top: 15px;
                padding-bottom: 15px
            }
        }

        .navbar-form {
            padding: 10px 15px;
            margin-top: 8px;
            margin-right: -15px;
            margin-bottom: 8px;
            margin-left: -15px;
            border-top: 1px solid transparent;
            border-bottom: 1px solid transparent;
            -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, .1), 0 1px 0 rgba(255, 255, 255, .1);
            box-shadow: inset 0 1px 0 rgba(255, 255, 255, .1), 0 1px 0 rgba(255, 255, 255, .1)
        }

        @media (min-width:768px) {
            .navbar-form .form-group {
                display: inline-block;
                margin-bottom: 0;
                vertical-align: middle
            }

            .navbar-form .form-control {
                display: inline-block;
                width: auto;
                vertical-align: middle
            }

            .navbar-form .form-control-static {
                display: inline-block
            }

            .navbar-form .input-group {
                display: inline-table;
                vertical-align: middle
            }

            .navbar-form .input-group .form-control,
            .navbar-form .input-group .input-group-addon,
            .navbar-form .input-group .input-group-btn {
                width: auto
            }

            .navbar-form .input-group>.form-control {
                width: 100%
            }

            .navbar-form .control-label {
                margin-bottom: 0;
                vertical-align: middle
            }

            .navbar-form .checkbox,
            .navbar-form .radio {
                display: inline-block;
                margin-top: 0;
                margin-bottom: 0;
                vertical-align: middle
            }

            .navbar-form .checkbox label,
            .navbar-form .radio label {
                padding-left: 0
            }

            .navbar-form .checkbox input[type=checkbox],
            .navbar-form .radio input[type=radio] {
                position: relative;
                margin-left: 0
            }

            .navbar-form .has-feedback .form-control-feedback {
                top: 0
            }
        }

        @media (max-width:767px) {
            .navbar-form .form-group {
                margin-bottom: 5px
            }

            .navbar-form .form-group:last-child {
                margin-bottom: 0
            }
        }

        @media (min-width:768px) {
            .navbar-form {
                width: auto;
                padding-top: 0;
                padding-bottom: 0;
                margin-right: 0;
                margin-left: 0;
                border: 0;
                -webkit-box-shadow: none;
                box-shadow: none
            }
        }

        .navbar-nav>li>.dropdown-menu {
            margin-top: 0;
            border-top-left-radius: 0;
            border-top-right-radius: 0
        }

        .navbar-fixed-bottom .navbar-nav>li>.dropdown-menu {
            margin-bottom: 0;
            border-top-left-radius: 4px;
            border-top-right-radius: 4px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0
        }

        .navbar-btn {
            margin-top: 8px;
            margin-bottom: 8px
        }

        .navbar-btn.btn-sm {
            margin-top: 10px;
            margin-bottom: 10px
        }

        .navbar-btn.btn-xs {
            margin-top: 14px;
            margin-bottom: 14px
        }

        .navbar-text {
            margin-top: 15px;
            margin-bottom: 15px
        }

        @media (min-width:768px) {
            .navbar-text {
                float: left;
                margin-right: 15px;
                margin-left: 15px
            }
        }

        @media (min-width:768px) {
            .navbar-left {
                float: left !important
            }

            .navbar-right {
                float: right !important;
                margin-right: -15px
            }

            .navbar-right~.navbar-right {
                margin-right: 0
            }
        }

        .navbar-default {
            background-color: #f8f8f8;
            border-color: #e7e7e7
        }

        .navbar-default .navbar-brand {
            color: #777
        }

        .navbar-default .navbar-brand:focus,
        .navbar-default .navbar-brand:hover {
            color: #5e5e5e;
            background-color: transparent
        }

        .navbar-default .navbar-text {
            color: #777
        }

        .navbar-default .navbar-nav>li>a {
            color: #777
        }

        .navbar-default .navbar-nav>li>a:focus,
        .navbar-default .navbar-nav>li>a:hover {
            color: #333;
            background-color: transparent
        }

        .navbar-default .navbar-nav>.active>a,
        .navbar-default .navbar-nav>.active>a:focus,
        .navbar-default .navbar-nav>.active>a:hover {
            color: #555;
            background-color: #e7e7e7
        }

        .navbar-default .navbar-nav>.disabled>a,
        .navbar-default .navbar-nav>.disabled>a:focus,
        .navbar-default .navbar-nav>.disabled>a:hover {
            color: #ccc;
            background-color: transparent
        }

        .navbar-default .navbar-toggle {
            border-color: #ddd
        }

        .navbar-default .navbar-toggle:focus,
        .navbar-default .navbar-toggle:hover {
            background-color: #ddd
        }

        .navbar-default .navbar-toggle .icon-bar {
            background-color: #888
        }

        .navbar-default .navbar-collapse,
        .navbar-default .navbar-form {
            border-color: #e7e7e7
        }

        .navbar-default .navbar-nav>.open>a,
        .navbar-default .navbar-nav>.open>a:focus,
        .navbar-default .navbar-nav>.open>a:hover {
            color: #555;
            background-color: #e7e7e7
        }

        @media (max-width:767px) {
            .navbar-default .navbar-nav .open .dropdown-menu>li>a {
                color: #777
            }

            .navbar-default .navbar-nav .open .dropdown-menu>li>a:focus,
            .navbar-default .navbar-nav .open .dropdown-menu>li>a:hover {
                color: #333;
                background-color: transparent
            }

            .navbar-default .navbar-nav .open .dropdown-menu>.active>a,
            .navbar-default .navbar-nav .open .dropdown-menu>.active>a:focus,
            .navbar-default .navbar-nav .open .dropdown-menu>.active>a:hover {
                color: #555;
                background-color: #e7e7e7
            }

            .navbar-default .navbar-nav .open .dropdown-menu>.disabled>a,
            .navbar-default .navbar-nav .open .dropdown-menu>.disabled>a:focus,
            .navbar-default .navbar-nav .open .dropdown-menu>.disabled>a:hover {
                color: #ccc;
                background-color: transparent
            }
        }

        .navbar-default .navbar-link {
            color: #777
        }

        .navbar-default .navbar-link:hover {
            color: #333
        }

        .navbar-default .btn-link {
            color: #777
        }

        .navbar-default .btn-link:focus,
        .navbar-default .btn-link:hover {
            color: #333
        }

        .navbar-default .btn-link[disabled]:focus,
        .navbar-default .btn-link[disabled]:hover,
        fieldset[disabled] .navbar-default .btn-link:focus,
        fieldset[disabled] .navbar-default .btn-link:hover {
            color: #ccc
        }

        .navbar-inverse {
            background-color: #222;
            border-color: #080808
        }

        .navbar-inverse .navbar-brand {
            color: #9d9d9d
        }

        .navbar-inverse .navbar-brand:focus,
        .navbar-inverse .navbar-brand:hover {
            color: #fff;
            background-color: transparent
        }

        .navbar-inverse .navbar-text {
            color: #9d9d9d
        }

        .navbar-inverse .navbar-nav>li>a {
            color: #9d9d9d
        }

        .navbar-inverse .navbar-nav>li>a:focus,
        .navbar-inverse .navbar-nav>li>a:hover {
            color: #fff;
            background-color: transparent
        }

        .navbar-inverse .navbar-nav>.active>a,
        .navbar-inverse .navbar-nav>.active>a:focus,
        .navbar-inverse .navbar-nav>.active>a:hover {
            color: #fff;
            background-color: #080808
        }

        .navbar-inverse .navbar-nav>.disabled>a,
        .navbar-inverse .navbar-nav>.disabled>a:focus,
        .navbar-inverse .navbar-nav>.disabled>a:hover {
            color: #444;
            background-color: transparent
        }

        .navbar-inverse .navbar-toggle {
            border-color: #333
        }

        .navbar-inverse .navbar-toggle:focus,
        .navbar-inverse .navbar-toggle:hover {
            background-color: #333
        }

        .navbar-inverse .navbar-toggle .icon-bar {
            background-color: #fff
        }

        .navbar-inverse .navbar-collapse,
        .navbar-inverse .navbar-form {
            border-color: #101010
        }

        .navbar-inverse .navbar-nav>.open>a,
        .navbar-inverse .navbar-nav>.open>a:focus,
        .navbar-inverse .navbar-nav>.open>a:hover {
            color: #fff;
            background-color: #080808
        }

        @media (max-width:767px) {
            .navbar-inverse .navbar-nav .open .dropdown-menu>.dropdown-header {
                border-color: #080808
            }

            .navbar-inverse .navbar-nav .open .dropdown-menu .divider {
                background-color: #080808
            }

            .navbar-inverse .navbar-nav .open .dropdown-menu>li>a {
                color: #9d9d9d
            }

            .navbar-inverse .navbar-nav .open .dropdown-menu>li>a:focus,
            .navbar-inverse .navbar-nav .open .dropdown-menu>li>a:hover {
                color: #fff;
                background-color: transparent
            }

            .navbar-inverse .navbar-nav .open .dropdown-menu>.active>a,
            .navbar-inverse .navbar-nav .open .dropdown-menu>.active>a:focus,
            .navbar-inverse .navbar-nav .open .dropdown-menu>.active>a:hover {
                color: #fff;
                background-color: #080808
            }

            .navbar-inverse .navbar-nav .open .dropdown-menu>.disabled>a,
            .navbar-inverse .navbar-nav .open .dropdown-menu>.disabled>a:focus,
            .navbar-inverse .navbar-nav .open .dropdown-menu>.disabled>a:hover {
                color: #444;
                background-color: transparent
            }
        }

        .navbar-inverse .navbar-link {
            color: #9d9d9d
        }

        .navbar-inverse .navbar-link:hover {
            color: #fff
        }

        .navbar-inverse .btn-link {
            color: #9d9d9d
        }

        .navbar-inverse .btn-link:focus,
        .navbar-inverse .btn-link:hover {
            color: #fff
        }

        .navbar-inverse .btn-link[disabled]:focus,
        .navbar-inverse .btn-link[disabled]:hover,
        fieldset[disabled] .navbar-inverse .btn-link:focus,
        fieldset[disabled] .navbar-inverse .btn-link:hover {
            color: #444
        }

        .breadcrumb {
            padding: 8px 15px;
            margin-bottom: 20px;
            list-style: none;
            background-color: #f5f5f5;
            border-radius: 4px
        }

        .breadcrumb>li {
            display: inline-block
        }

        .breadcrumb>li+li:before {
            padding: 0 5px;
            color: #ccc;
            content: "/\00a0"
        }

        .breadcrumb>.active {
            color: #777
        }

        .pagination {
            display: inline-block;
            padding-left: 0;
            margin: 20px 0;
            border-radius: 4px
        }

        .pagination>li {
            display: inline
        }

        .pagination>li>a,
        .pagination>li>span {
            position: relative;
            float: left;
            padding: 6px 12px;
            margin-left: -1px;
            line-height: 1.42857143;
            color: #337ab7;
            text-decoration: none;
            background-color: #fff;
            border: 1px solid #ddd
        }

        .pagination>li:first-child>a,
        .pagination>li:first-child>span {
            margin-left: 0;
            border-top-left-radius: 4px;
            border-bottom-left-radius: 4px
        }

        .pagination>li:last-child>a,
        .pagination>li:last-child>span {
            border-top-right-radius: 4px;
            border-bottom-right-radius: 4px
        }

        .pagination>li>a:focus,
        .pagination>li>a:hover,
        .pagination>li>span:focus,
        .pagination>li>span:hover {
            z-index: 2;
            color: #23527c;
            background-color: #eee;
            border-color: #ddd
        }

        .pagination>.active>a,
        .pagination>.active>a:focus,
        .pagination>.active>a:hover,
        .pagination>.active>span,
        .pagination>.active>span:focus,
        .pagination>.active>span:hover {
            z-index: 3;
            color: #fff;
            cursor: default;
            background-color: #337ab7;
            border-color: #337ab7
        }

        .pagination>.disabled>a,
        .pagination>.disabled>a:focus,
        .pagination>.disabled>a:hover,
        .pagination>.disabled>span,
        .pagination>.disabled>span:focus,
        .pagination>.disabled>span:hover {
            color: #777;
            cursor: not-allowed;
            background-color: #fff;
            border-color: #ddd
        }

        .pagination-lg>li>a,
        .pagination-lg>li>span {
            padding: 10px 16px;
            font-size: 18px;
            line-height: 1.3333333
        }

        .pagination-lg>li:first-child>a,
        .pagination-lg>li:first-child>span {
            border-top-left-radius: 6px;
            border-bottom-left-radius: 6px
        }

        .pagination-lg>li:last-child>a,
        .pagination-lg>li:last-child>span {
            border-top-right-radius: 6px;
            border-bottom-right-radius: 6px
        }

        .pagination-sm>li>a,
        .pagination-sm>li>span {
            padding: 5px 10px;
            font-size: 12px;
            line-height: 1.5
        }

        .pagination-sm>li:first-child>a,
        .pagination-sm>li:first-child>span {
            border-top-left-radius: 3px;
            border-bottom-left-radius: 3px
        }

        .pagination-sm>li:last-child>a,
        .pagination-sm>li:last-child>span {
            border-top-right-radius: 3px;
            border-bottom-right-radius: 3px
        }

        .pager {
            padding-left: 0;
            margin: 20px 0;
            text-align: center;
            list-style: none
        }

        .pager li {
            display: inline
        }

        .pager li>a,
        .pager li>span {
            display: inline-block;
            padding: 5px 14px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 15px
        }

        .pager li>a:focus,
        .pager li>a:hover {
            text-decoration: none;
            background-color: #eee
        }

        .pager .next>a,
        .pager .next>span {
            float: right
        }

        .pager .previous>a,
        .pager .previous>span {
            float: left
        }

        .pager .disabled>a,
        .pager .disabled>a:focus,
        .pager .disabled>a:hover,
        .pager .disabled>span {
            color: #777;
            cursor: not-allowed;
            background-color: #fff
        }

        .label {
            display: inline;
            padding: .2em .6em .3em;
            font-size: 75%;
            font-weight: 700;
            line-height: 1;
            color: #fff;
            text-align: center;
            white-space: nowrap;
            vertical-align: baseline;
            border-radius: .25em
        }

        a.label:focus,
        a.label:hover {
            color: #fff;
            text-decoration: none;
            cursor: pointer
        }

        .label:empty {
            display: none
        }

        .btn .label {
            position: relative;
            top: -1px
        }

        .label-default {
            background-color: #777
        }

        .label-default[href]:focus,
        .label-default[href]:hover {
            background-color: #5e5e5e
        }

        .label-primary {
            background-color: #337ab7
        }

        .label-primary[href]:focus,
        .label-primary[href]:hover {
            background-color: #286090
        }

        .label-success {
            background-color: #5cb85c
        }

        .label-success[href]:focus,
        .label-success[href]:hover {
            background-color: #449d44
        }

        .label-info {
            background-color: #5bc0de
        }

        .label-info[href]:focus,
        .label-info[href]:hover {
            background-color: #31b0d5
        }

        .label-warning {
            background-color: #f0ad4e
        }

        .label-warning[href]:focus,
        .label-warning[href]:hover {
            background-color: #ec971f
        }

        .label-danger {
            background-color: #d9534f
        }

        .label-danger[href]:focus,
        .label-danger[href]:hover {
            background-color: #c9302c
        }

        .badge {
            display: inline-block;
            min-width: 10px;
            padding: 3px 7px;
            font-size: 12px;
            font-weight: 700;
            line-height: 1;
            color: #fff;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            background-color: #777;
            border-radius: 10px
        }

        .badge:empty {
            display: none
        }

        .btn .badge {
            position: relative;
            top: -1px
        }

        .btn-group-xs>.btn .badge,
        .btn-xs .badge {
            top: 0;
            padding: 1px 5px
        }

        a.badge:focus,
        a.badge:hover {
            color: #fff;
            text-decoration: none;
            cursor: pointer
        }

        .list-group-item.active>.badge,
        .nav-pills>.active>a>.badge {
            color: #337ab7;
            background-color: #fff
        }

        .list-group-item>.badge {
            float: right
        }

        .list-group-item>.badge+.badge {
            margin-right: 5px
        }

        .nav-pills>li>a>.badge {
            margin-left: 3px
        }

        .jumbotron {
            padding-top: 30px;
            padding-bottom: 30px;
            margin-bottom: 30px;
            color: inherit;
            background-color: #eee
        }

        .jumbotron .h1,
        .jumbotron h1 {
            color: inherit
        }

        .jumbotron p {
            margin-bottom: 15px;
            font-size: 21px;
            font-weight: 200
        }

        .jumbotron>hr {
            border-top-color: #d5d5d5
        }

        .container .jumbotron,
        .container-fluid .jumbotron {
            padding-right: 15px;
            padding-left: 15px;
            border-radius: 6px
        }

        .jumbotron .container {
            max-width: 100%
        }

        @media screen and (min-width:768px) {
            .jumbotron {
                padding-top: 48px;
                padding-bottom: 48px
            }

            .container .jumbotron,
            .container-fluid .jumbotron {
                padding-right: 60px;
                padding-left: 60px
            }

            .jumbotron .h1,
            .jumbotron h1 {
                font-size: 63px
            }
        }

        .thumbnail {
            display: block;
            padding: 4px;
            margin-bottom: 20px;
            line-height: 1.42857143;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 4px;
            -webkit-transition: border .2s ease-in-out;
            -o-transition: border .2s ease-in-out;
            transition: border .2s ease-in-out
        }

        .thumbnail a>img,
        .thumbnail>img {
            margin-right: auto;
            margin-left: auto
        }

        a.thumbnail.active,
        a.thumbnail:focus,
        a.thumbnail:hover {
            border-color: #337ab7
        }

        .thumbnail .caption {
            padding: 9px;
            color: #333
        }

        .alert {
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid transparent;
            border-radius: 4px
        }

        .alert h4 {
            margin-top: 0;
            color: inherit
        }

        .alert .alert-link {
            font-weight: 700
        }

        .alert>p,
        .alert>ul {
            margin-bottom: 0
        }

        .alert>p+p {
            margin-top: 5px
        }

        .alert-dismissable,
        .alert-dismissible {
            padding-right: 35px
        }

        .alert-dismissable .close,
        .alert-dismissible .close {
            position: relative;
            top: -2px;
            right: -21px;
            color: inherit
        }

        .alert-success {
            color: #3c763d;
            background-color: #dff0d8;
            border-color: #d6e9c6
        }

        .alert-success hr {
            border-top-color: #c9e2b3
        }

        .alert-success .alert-link {
            color: #2b542c
        }

        .alert-info {
            color: #31708f;
            background-color: #d9edf7;
            border-color: #bce8f1
        }

        .alert-info hr {
            border-top-color: #a6e1ec
        }

        .alert-info .alert-link {
            color: #245269
        }

        .alert-warning {
            color: #8a6d3b;
            background-color: #fcf8e3;
            border-color: #faebcc
        }

        .alert-warning hr {
            border-top-color: #f7e1b5
        }

        .alert-warning .alert-link {
            color: #66512c
        }

        .alert-danger {
            color: #a94442;
            background-color: #f2dede;
            border-color: #ebccd1
        }

        .alert-danger hr {
            border-top-color: #e4b9c0
        }

        .alert-danger .alert-link {
            color: #843534
        }

        @-webkit-keyframes progress-bar-stripes {
            from {
                background-position: 40px 0
            }

            to {
                background-position: 0 0
            }
        }

        @-o-keyframes progress-bar-stripes {
            from {
                background-position: 40px 0
            }

            to {
                background-position: 0 0
            }
        }

        @keyframes progress-bar-stripes {
            from {
                background-position: 40px 0
            }

            to {
                background-position: 0 0
            }
        }

        .progress {
            height: 20px;
            margin-bottom: 20px;
            overflow: hidden;
            background-color: #f5f5f5;
            border-radius: 4px;
            -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, .1);
            box-shadow: inset 0 1px 2px rgba(0, 0, 0, .1)
        }

        .progress-bar {
            float: left;
            width: 0;
            height: 100%;
            font-size: 12px;
            line-height: 20px;
            color: #fff;
            text-align: center;
            background-color: #337ab7;
            -webkit-box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .15);
            box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .15);
            -webkit-transition: width .6s ease;
            -o-transition: width .6s ease;
            transition: width .6s ease
        }

        .progress-bar-striped,
        .progress-striped .progress-bar {
            background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
            background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
            background-image: linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
            -webkit-background-size: 40px 40px;
            background-size: 40px 40px
        }

        .progress-bar.active,
        .progress.active .progress-bar {
            -webkit-animation: progress-bar-stripes 2s linear infinite;
            -o-animation: progress-bar-stripes 2s linear infinite;
            animation: progress-bar-stripes 2s linear infinite
        }

        .progress-bar-success {
            background-color: #5cb85c
        }

        .progress-striped .progress-bar-success {
            background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
            background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
            background-image: linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent)
        }

        .progress-bar-info {
            background-color: #5bc0de
        }

        .progress-striped .progress-bar-info {
            background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
            background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
            background-image: linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent)
        }

        .progress-bar-warning {
            background-color: #f0ad4e
        }

        .progress-striped .progress-bar-warning {
            background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
            background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
            background-image: linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent)
        }

        .progress-bar-danger {
            background-color: #d9534f
        }

        .progress-striped .progress-bar-danger {
            background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
            background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
            background-image: linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent)
        }

        .media {
            margin-top: 15px
        }

        .media:first-child {
            margin-top: 0
        }

        .media,
        .media-body {
            overflow: hidden;
            zoom: 1
        }

        .media-body {
            width: 10000px
        }

        .media-object {
            display: block
        }

        .media-object.img-thumbnail {
            max-width: none
        }

        .media-right,
        .media>.pull-right {
            padding-left: 10px
        }

        .media-left,
        .media>.pull-left {
            padding-right: 10px
        }

        .media-body,
        .media-left,
        .media-right {
            display: table-cell;
            vertical-align: top
        }

        .media-middle {
            vertical-align: middle
        }

        .media-bottom {
            vertical-align: bottom
        }

        .media-heading {
            margin-top: 0;
            margin-bottom: 5px
        }

        .media-list {
            padding-left: 0;
            list-style: none
        }

        .list-group {
            padding-left: 0;
            margin-bottom: 20px
        }

        .list-group-item {
            position: relative;
            display: block;
            padding: 10px 15px;
            margin-bottom: -1px;
            background-color: #fff;
            border: 1px solid #ddd
        }

        .list-group-item:first-child {
            border-top-left-radius: 4px;
            border-top-right-radius: 4px
        }

        .list-group-item:last-child {
            margin-bottom: 0;
            border-bottom-right-radius: 4px;
            border-bottom-left-radius: 4px
        }

        a.list-group-item,
        button.list-group-item {
            color: #555
        }

        a.list-group-item .list-group-item-heading,
        button.list-group-item .list-group-item-heading {
            color: #333
        }

        a.list-group-item:focus,
        a.list-group-item:hover,
        button.list-group-item:focus,
        button.list-group-item:hover {
            color: #555;
            text-decoration: none;
            background-color: #f5f5f5
        }

        button.list-group-item {
            width: 100%;
            text-align: left
        }

        .list-group-item.disabled,
        .list-group-item.disabled:focus,
        .list-group-item.disabled:hover {
            color: #777;
            cursor: not-allowed;
            background-color: #eee
        }

        .list-group-item.disabled .list-group-item-heading,
        .list-group-item.disabled:focus .list-group-item-heading,
        .list-group-item.disabled:hover .list-group-item-heading {
            color: inherit
        }

        .list-group-item.disabled .list-group-item-text,
        .list-group-item.disabled:focus .list-group-item-text,
        .list-group-item.disabled:hover .list-group-item-text {
            color: #777
        }

        .list-group-item.active,
        .list-group-item.active:focus,
        .list-group-item.active:hover {
            z-index: 2;
            color: #fff;
            background-color: #337ab7;
            border-color: #337ab7
        }

        .list-group-item.active .list-group-item-heading,
        .list-group-item.active .list-group-item-heading>.small,
        .list-group-item.active .list-group-item-heading>small,
        .list-group-item.active:focus .list-group-item-heading,
        .list-group-item.active:focus .list-group-item-heading>.small,
        .list-group-item.active:focus .list-group-item-heading>small,
        .list-group-item.active:hover .list-group-item-heading,
        .list-group-item.active:hover .list-group-item-heading>.small,
        .list-group-item.active:hover .list-group-item-heading>small {
            color: inherit
        }

        .list-group-item.active .list-group-item-text,
        .list-group-item.active:focus .list-group-item-text,
        .list-group-item.active:hover .list-group-item-text {
            color: #c7ddef
        }

        .list-group-item-success {
            color: #3c763d;
            background-color: #dff0d8
        }

        a.list-group-item-success,
        button.list-group-item-success {
            color: #3c763d
        }

        a.list-group-item-success .list-group-item-heading,
        button.list-group-item-success .list-group-item-heading {
            color: inherit
        }

        a.list-group-item-success:focus,
        a.list-group-item-success:hover,
        button.list-group-item-success:focus,
        button.list-group-item-success:hover {
            color: #3c763d;
            background-color: #d0e9c6
        }

        a.list-group-item-success.active,
        a.list-group-item-success.active:focus,
        a.list-group-item-success.active:hover,
        button.list-group-item-success.active,
        button.list-group-item-success.active:focus,
        button.list-group-item-success.active:hover {
            color: #fff;
            background-color: #3c763d;
            border-color: #3c763d
        }

        .list-group-item-info {
            color: #31708f;
            background-color: #d9edf7
        }

        a.list-group-item-info,
        button.list-group-item-info {
            color: #31708f
        }

        a.list-group-item-info .list-group-item-heading,
        button.list-group-item-info .list-group-item-heading {
            color: inherit
        }

        a.list-group-item-info:focus,
        a.list-group-item-info:hover,
        button.list-group-item-info:focus,
        button.list-group-item-info:hover {
            color: #31708f;
            background-color: #c4e3f3
        }

        a.list-group-item-info.active,
        a.list-group-item-info.active:focus,
        a.list-group-item-info.active:hover,
        button.list-group-item-info.active,
        button.list-group-item-info.active:focus,
        button.list-group-item-info.active:hover {
            color: #fff;
            background-color: #31708f;
            border-color: #31708f
        }

        .list-group-item-warning {
            color: #8a6d3b;
            background-color: #fcf8e3
        }

        a.list-group-item-warning,
        button.list-group-item-warning {
            color: #8a6d3b
        }

        a.list-group-item-warning .list-group-item-heading,
        button.list-group-item-warning .list-group-item-heading {
            color: inherit
        }

        a.list-group-item-warning:focus,
        a.list-group-item-warning:hover,
        button.list-group-item-warning:focus,
        button.list-group-item-warning:hover {
            color: #8a6d3b;
            background-color: #faf2cc
        }

        a.list-group-item-warning.active,
        a.list-group-item-warning.active:focus,
        a.list-group-item-warning.active:hover,
        button.list-group-item-warning.active,
        button.list-group-item-warning.active:focus,
        button.list-group-item-warning.active:hover {
            color: #fff;
            background-color: #8a6d3b;
            border-color: #8a6d3b
        }

        .list-group-item-danger {
            color: #a94442;
            background-color: #f2dede
        }

        a.list-group-item-danger,
        button.list-group-item-danger {
            color: #a94442
        }

        a.list-group-item-danger .list-group-item-heading,
        button.list-group-item-danger .list-group-item-heading {
            color: inherit
        }

        a.list-group-item-danger:focus,
        a.list-group-item-danger:hover,
        button.list-group-item-danger:focus,
        button.list-group-item-danger:hover {
            color: #a94442;
            background-color: #ebcccc
        }

        a.list-group-item-danger.active,
        a.list-group-item-danger.active:focus,
        a.list-group-item-danger.active:hover,
        button.list-group-item-danger.active,
        button.list-group-item-danger.active:focus,
        button.list-group-item-danger.active:hover {
            color: #fff;
            background-color: #a94442;
            border-color: #a94442
        }

        .list-group-item-heading {
            margin-top: 0;
            margin-bottom: 5px
        }

        .list-group-item-text {
            margin-bottom: 0;
            line-height: 1.3
        }

        .panel {
            margin-bottom: 20px;
            background-color: #fff;
            border: 1px solid transparent;
            border-radius: 4px;
            -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
            box-shadow: 0 1px 1px rgba(0, 0, 0, .05)
        }

        .panel-body {
            padding: 15px
        }

        .panel-heading {
            padding: 10px 15px;
            border-bottom: 1px solid transparent;
            border-top-left-radius: 3px;
            border-top-right-radius: 3px
        }

        .panel-heading>.dropdown .dropdown-toggle {
            color: inherit
        }

        .panel-title {
            margin-top: 0;
            margin-bottom: 0;
            font-size: 16px;
            color: inherit
        }

        .panel-title>.small,
        .panel-title>.small>a,
        .panel-title>a,
        .panel-title>small,
        .panel-title>small>a {
            color: inherit
        }

        .panel-footer {
            padding: 10px 15px;
            background-color: #f5f5f5;
            border-top: 1px solid #ddd;
            border-bottom-right-radius: 3px;
            border-bottom-left-radius: 3px
        }

        .panel>.list-group,
        .panel>.panel-collapse>.list-group {
            margin-bottom: 0
        }

        .panel>.list-group .list-group-item,
        .panel>.panel-collapse>.list-group .list-group-item {
            border-width: 1px 0;
            border-radius: 0
        }

        .panel>.list-group:first-child .list-group-item:first-child,
        .panel>.panel-collapse>.list-group:first-child .list-group-item:first-child {
            border-top: 0;
            border-top-left-radius: 3px;
            border-top-right-radius: 3px
        }

        .panel>.list-group:last-child .list-group-item:last-child,
        .panel>.panel-collapse>.list-group:last-child .list-group-item:last-child {
            border-bottom: 0;
            border-bottom-right-radius: 3px;
            border-bottom-left-radius: 3px
        }

        .panel>.panel-heading+.panel-collapse>.list-group .list-group-item:first-child {
            border-top-left-radius: 0;
            border-top-right-radius: 0
        }

        .panel-heading+.list-group .list-group-item:first-child {
            border-top-width: 0
        }

        .list-group+.panel-footer {
            border-top-width: 0
        }

        .panel>.panel-collapse>.table,
        .panel>.table,
        .panel>.table-responsive>.table {
            margin-bottom: 0
        }

        .panel>.panel-collapse>.table caption,
        .panel>.table caption,
        .panel>.table-responsive>.table caption {
            padding-right: 15px;
            padding-left: 15px
        }

        .panel>.table-responsive:first-child>.table:first-child,
        .panel>.table:first-child {
            border-top-left-radius: 3px;
            border-top-right-radius: 3px
        }

        .panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child,
        .panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child,
        .panel>.table:first-child>tbody:first-child>tr:first-child,
        .panel>.table:first-child>thead:first-child>tr:first-child {
            border-top-left-radius: 3px;
            border-top-right-radius: 3px
        }

        .panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child td:first-child,
        .panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child th:first-child,
        .panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child td:first-child,
        .panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child th:first-child,
        .panel>.table:first-child>tbody:first-child>tr:first-child td:first-child,
        .panel>.table:first-child>tbody:first-child>tr:first-child th:first-child,
        .panel>.table:first-child>thead:first-child>tr:first-child td:first-child,
        .panel>.table:first-child>thead:first-child>tr:first-child th:first-child {
            border-top-left-radius: 3px
        }

        .panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child td:last-child,
        .panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child th:last-child,
        .panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child td:last-child,
        .panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child th:last-child,
        .panel>.table:first-child>tbody:first-child>tr:first-child td:last-child,
        .panel>.table:first-child>tbody:first-child>tr:first-child th:last-child,
        .panel>.table:first-child>thead:first-child>tr:first-child td:last-child,
        .panel>.table:first-child>thead:first-child>tr:first-child th:last-child {
            border-top-right-radius: 3px
        }

        .panel>.table-responsive:last-child>.table:last-child,
        .panel>.table:last-child {
            border-bottom-right-radius: 3px;
            border-bottom-left-radius: 3px
        }

        .panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child,
        .panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child,
        .panel>.table:last-child>tbody:last-child>tr:last-child,
        .panel>.table:last-child>tfoot:last-child>tr:last-child {
            border-bottom-right-radius: 3px;
            border-bottom-left-radius: 3px
        }

        .panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child td:first-child,
        .panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child th:first-child,
        .panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child td:first-child,
        .panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child th:first-child,
        .panel>.table:last-child>tbody:last-child>tr:last-child td:first-child,
        .panel>.table:last-child>tbody:last-child>tr:last-child th:first-child,
        .panel>.table:last-child>tfoot:last-child>tr:last-child td:first-child,
        .panel>.table:last-child>tfoot:last-child>tr:last-child th:first-child {
            border-bottom-left-radius: 3px
        }

        .panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child td:last-child,
        .panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child th:last-child,
        .panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child td:last-child,
        .panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child th:last-child,
        .panel>.table:last-child>tbody:last-child>tr:last-child td:last-child,
        .panel>.table:last-child>tbody:last-child>tr:last-child th:last-child,
        .panel>.table:last-child>tfoot:last-child>tr:last-child td:last-child,
        .panel>.table:last-child>tfoot:last-child>tr:last-child th:last-child {
            border-bottom-right-radius: 3px
        }

        .panel>.panel-body+.table,
        .panel>.panel-body+.table-responsive,
        .panel>.table+.panel-body,
        .panel>.table-responsive+.panel-body {
            border-top: 1px solid #ddd
        }

        .panel>.table>tbody:first-child>tr:first-child td,
        .panel>.table>tbody:first-child>tr:first-child th {
            border-top: 0
        }

        .panel>.table-bordered,
        .panel>.table-responsive>.table-bordered {
            border: 0
        }

        .panel>.table-bordered>tbody>tr>td:first-child,
        .panel>.table-bordered>tbody>tr>th:first-child,
        .panel>.table-bordered>tfoot>tr>td:first-child,
        .panel>.table-bordered>tfoot>tr>th:first-child,
        .panel>.table-bordered>thead>tr>td:first-child,
        .panel>.table-bordered>thead>tr>th:first-child,
        .panel>.table-responsive>.table-bordered>tbody>tr>td:first-child,
        .panel>.table-responsive>.table-bordered>tbody>tr>th:first-child,
        .panel>.table-responsive>.table-bordered>tfoot>tr>td:first-child,
        .panel>.table-responsive>.table-bordered>tfoot>tr>th:first-child,
        .panel>.table-responsive>.table-bordered>thead>tr>td:first-child,
        .panel>.table-responsive>.table-bordered>thead>tr>th:first-child {
            border-left: 0
        }

        .panel>.table-bordered>tbody>tr>td:last-child,
        .panel>.table-bordered>tbody>tr>th:last-child,
        .panel>.table-bordered>tfoot>tr>td:last-child,
        .panel>.table-bordered>tfoot>tr>th:last-child,
        .panel>.table-bordered>thead>tr>td:last-child,
        .panel>.table-bordered>thead>tr>th:last-child,
        .panel>.table-responsive>.table-bordered>tbody>tr>td:last-child,
        .panel>.table-responsive>.table-bordered>tbody>tr>th:last-child,
        .panel>.table-responsive>.table-bordered>tfoot>tr>td:last-child,
        .panel>.table-responsive>.table-bordered>tfoot>tr>th:last-child,
        .panel>.table-responsive>.table-bordered>thead>tr>td:last-child,
        .panel>.table-responsive>.table-bordered>thead>tr>th:last-child {
            border-right: 0
        }

        .panel>.table-bordered>tbody>tr:first-child>td,
        .panel>.table-bordered>tbody>tr:first-child>th,
        .panel>.table-bordered>thead>tr:first-child>td,
        .panel>.table-bordered>thead>tr:first-child>th,
        .panel>.table-responsive>.table-bordered>tbody>tr:first-child>td,
        .panel>.table-responsive>.table-bordered>tbody>tr:first-child>th,
        .panel>.table-responsive>.table-bordered>thead>tr:first-child>td,
        .panel>.table-responsive>.table-bordered>thead>tr:first-child>th {
            border-bottom: 0
        }

        .panel>.table-bordered>tbody>tr:last-child>td,
        .panel>.table-bordered>tbody>tr:last-child>th,
        .panel>.table-bordered>tfoot>tr:last-child>td,
        .panel>.table-bordered>tfoot>tr:last-child>th,
        .panel>.table-responsive>.table-bordered>tbody>tr:last-child>td,
        .panel>.table-responsive>.table-bordered>tbody>tr:last-child>th,
        .panel>.table-responsive>.table-bordered>tfoot>tr:last-child>td,
        .panel>.table-responsive>.table-bordered>tfoot>tr:last-child>th {
            border-bottom: 0
        }

        .panel>.table-responsive {
            margin-bottom: 0;
            border: 0
        }

        .panel-group {
            margin-bottom: 20px
        }

        .panel-group .panel {
            margin-bottom: 0;
            border-radius: 4px
        }

        .panel-group .panel+.panel {
            margin-top: 5px
        }

        .panel-group .panel-heading {
            border-bottom: 0
        }

        .panel-group .panel-heading+.panel-collapse>.list-group,
        .panel-group .panel-heading+.panel-collapse>.panel-body {
            border-top: 1px solid #ddd
        }

        .panel-group .panel-footer {
            border-top: 0
        }

        .panel-group .panel-footer+.panel-collapse .panel-body {
            border-bottom: 1px solid #ddd
        }

        .panel-default {
            border-color: #ddd
        }

        .panel-default>.panel-heading {
            color: #333;
            background-color: #f5f5f5;
            border-color: #ddd
        }

        .panel-default>.panel-heading+.panel-collapse>.panel-body {
            border-top-color: #ddd
        }

        .panel-default>.panel-heading .badge {
            color: #f5f5f5;
            background-color: #333
        }

        .panel-default>.panel-footer+.panel-collapse>.panel-body {
            border-bottom-color: #ddd
        }

        .panel-primary {
            border-color: #337ab7
        }

        .panel-primary>.panel-heading {
            color: #fff;
            background-color: #337ab7;
            border-color: #337ab7
        }

        .panel-primary>.panel-heading+.panel-collapse>.panel-body {
            border-top-color: #337ab7
        }

        .panel-primary>.panel-heading .badge {
            color: #337ab7;
            background-color: #fff
        }

        .panel-primary>.panel-footer+.panel-collapse>.panel-body {
            border-bottom-color: #337ab7
        }

        .panel-success {
            border-color: #d6e9c6
        }

        .panel-success>.panel-heading {
            color: #3c763d;
            background-color: #dff0d8;
            border-color: #d6e9c6
        }

        .panel-success>.panel-heading+.panel-collapse>.panel-body {
            border-top-color: #d6e9c6
        }

        .panel-success>.panel-heading .badge {
            color: #dff0d8;
            background-color: #3c763d
        }

        .panel-success>.panel-footer+.panel-collapse>.panel-body {
            border-bottom-color: #d6e9c6
        }

        .panel-info {
            border-color: #bce8f1
        }

        .panel-info>.panel-heading {
            color: #31708f;
            background-color: #d9edf7;
            border-color: #bce8f1
        }

        .panel-info>.panel-heading+.panel-collapse>.panel-body {
            border-top-color: #bce8f1
        }

        .panel-info>.panel-heading .badge {
            color: #d9edf7;
            background-color: #31708f
        }

        .panel-info>.panel-footer+.panel-collapse>.panel-body {
            border-bottom-color: #bce8f1
        }

        .panel-warning {
            border-color: #faebcc
        }

        .panel-warning>.panel-heading {
            color: #8a6d3b;
            background-color: #fcf8e3;
            border-color: #faebcc
        }

        .panel-warning>.panel-heading+.panel-collapse>.panel-body {
            border-top-color: #faebcc
        }

        .panel-warning>.panel-heading .badge {
            color: #fcf8e3;
            background-color: #8a6d3b
        }

        .panel-warning>.panel-footer+.panel-collapse>.panel-body {
            border-bottom-color: #faebcc
        }

        .panel-danger {
            border-color: #ebccd1
        }

        .panel-danger>.panel-heading {
            color: #a94442;
            background-color: #f2dede;
            border-color: #ebccd1
        }

        .panel-danger>.panel-heading+.panel-collapse>.panel-body {
            border-top-color: #ebccd1
        }

        .panel-danger>.panel-heading .badge {
            color: #f2dede;
            background-color: #a94442
        }

        .panel-danger>.panel-footer+.panel-collapse>.panel-body {
            border-bottom-color: #ebccd1
        }

        .embed-responsive {
            position: relative;
            display: block;
            height: 0;
            padding: 0;
            overflow: hidden
        }

        .embed-responsive .embed-responsive-item,
        .embed-responsive embed,
        .embed-responsive iframe,
        .embed-responsive object,
        .embed-responsive video {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: 0
        }

        .embed-responsive-16by9 {
            padding-bottom: 56.25%
        }

        .embed-responsive-4by3 {
            padding-bottom: 75%
        }

        .well {
            min-height: 20px;
            padding: 19px;
            margin-bottom: 20px;
            background-color: #f5f5f5;
            border: 1px solid #e3e3e3;
            border-radius: 4px;
            -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05);
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05)
        }

        .well blockquote {
            border-color: #ddd;
            border-color: rgba(0, 0, 0, .15)
        }

        .well-lg {
            padding: 24px;
            border-radius: 6px
        }

        .well-sm {
            padding: 9px;
            border-radius: 3px
        }

        .close {
            float: right;
            font-size: 21px;
            font-weight: 700;
            line-height: 1;
            color: #000;
            text-shadow: 0 1px 0 #fff;
            filter: alpha(opacity=20);
            opacity: .2
        }

        .close:focus,
        .close:hover {
            color: #000;
            text-decoration: none;
            cursor: pointer;
            filter: alpha(opacity=50);
            opacity: .5
        }

        button.close {
            -webkit-appearance: none;
            padding: 0;
            cursor: pointer;
            background: 0 0;
            border: 0
        }

        .modal-open {
            overflow: hidden
        }

        .modal {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 1050;
            display: none;
            overflow: hidden;
            -webkit-overflow-scrolling: touch;
            outline: 0
        }

        .modal.fade .modal-dialog {
            -webkit-transition: -webkit-transform .3s ease-out;
            -o-transition: -o-transform .3s ease-out;
            transition: transform .3s ease-out;
            -webkit-transform: translate(0, -25%);
            -ms-transform: translate(0, -25%);
            -o-transform: translate(0, -25%);
            transform: translate(0, -25%)
        }

        .modal.in .modal-dialog {
            -webkit-transform: translate(0, 0);
            -ms-transform: translate(0, 0);
            -o-transform: translate(0, 0);
            transform: translate(0, 0)
        }

        .modal-open .modal {
            overflow-x: hidden;
            overflow-y: auto
        }

        .modal-dialog {
            position: relative;
            width: auto;
            margin: 10px
        }

        .modal-content {
            position: relative;
            background-color: #fff;
            -webkit-background-clip: padding-box;
            background-clip: padding-box;
            border: 1px solid #999;
            border: 1px solid rgba(0, 0, 0, .2);
            border-radius: 6px;
            outline: 0;
            -webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, .5);
            box-shadow: 0 3px 9px rgba(0, 0, 0, .5)
        }

        .modal-backdrop {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 1040;
            background-color: #000
        }

        .modal-backdrop.fade {
            filter: alpha(opacity=0);
            opacity: 0
        }

        .modal-backdrop.in {
            filter: alpha(opacity=50);
            opacity: .5
        }

        .modal-header {
            padding: 15px;
            border-bottom: 1px solid #e5e5e5
        }

        .modal-header .close {
            margin-top: -2px
        }

        .modal-title {
            margin: 0;
            line-height: 1.42857143
        }

        .modal-body {
            position: relative;
            padding: 15px
        }

        .modal-footer {
            padding: 15px;
            text-align: right;
            border-top: 1px solid #e5e5e5
        }

        .modal-footer .btn+.btn {
            margin-bottom: 0;
            margin-left: 5px
        }

        .modal-footer .btn-group .btn+.btn {
            margin-left: -1px
        }

        .modal-footer .btn-block+.btn-block {
            margin-left: 0
        }

        .modal-scrollbar-measure {
            position: absolute;
            top: -9999px;
            width: 50px;
            height: 50px;
            overflow: scroll
        }

        @media (min-width:768px) {
            .modal-dialog {
                width: 600px;
                margin: 30px auto
            }

            .modal-content {
                -webkit-box-shadow: 0 5px 15px rgba(0, 0, 0, .5);
                box-shadow: 0 5px 15px rgba(0, 0, 0, .5)
            }

            .modal-sm {
                width: 300px
            }
        }

        @media (min-width:992px) {
            .modal-lg {
                width: 900px
            }
        }

        .tooltip {
            position: absolute;
            z-index: 1070;
            display: block;
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-size: 12px;
            font-style: normal;
            font-weight: 400;
            line-height: 1.42857143;
            text-align: left;
            text-align: start;
            text-decoration: none;
            text-shadow: none;
            text-transform: none;
            letter-spacing: normal;
            word-break: normal;
            word-spacing: normal;
            word-wrap: normal;
            white-space: normal;
            filter: alpha(opacity=0);
            opacity: 0;
            line-break: auto
        }

        .tooltip.in {
            filter: alpha(opacity=90);
            opacity: .9
        }

        .tooltip.top {
            padding: 5px 0;
            margin-top: -3px
        }

        .tooltip.right {
            padding: 0 5px;
            margin-left: 3px
        }

        .tooltip.bottom {
            padding: 5px 0;
            margin-top: 3px
        }

        .tooltip.left {
            padding: 0 5px;
            margin-left: -3px
        }

        .tooltip-inner {
            max-width: 200px;
            padding: 3px 8px;
            color: #fff;
            text-align: center;
            background-color: #000;
            border-radius: 4px
        }

        .tooltip-arrow {
            position: absolute;
            width: 0;
            height: 0;
            border-color: transparent;
            border-style: solid
        }

        .tooltip.top .tooltip-arrow {
            bottom: 0;
            left: 50%;
            margin-left: -5px;
            border-width: 5px 5px 0;
            border-top-color: #000
        }

        .tooltip.top-left .tooltip-arrow {
            right: 5px;
            bottom: 0;
            margin-bottom: -5px;
            border-width: 5px 5px 0;
            border-top-color: #000
        }

        .tooltip.top-right .tooltip-arrow {
            bottom: 0;
            left: 5px;
            margin-bottom: -5px;
            border-width: 5px 5px 0;
            border-top-color: #000
        }

        .tooltip.right .tooltip-arrow {
            top: 50%;
            left: 0;
            margin-top: -5px;
            border-width: 5px 5px 5px 0;
            border-right-color: #000
        }

        .tooltip.left .tooltip-arrow {
            top: 50%;
            right: 0;
            margin-top: -5px;
            border-width: 5px 0 5px 5px;
            border-left-color: #000
        }

        .tooltip.bottom .tooltip-arrow {
            top: 0;
            left: 50%;
            margin-left: -5px;
            border-width: 0 5px 5px;
            border-bottom-color: #000
        }

        .tooltip.bottom-left .tooltip-arrow {
            top: 0;
            right: 5px;
            margin-top: -5px;
            border-width: 0 5px 5px;
            border-bottom-color: #000
        }

        .tooltip.bottom-right .tooltip-arrow {
            top: 0;
            left: 5px;
            margin-top: -5px;
            border-width: 0 5px 5px;
            border-bottom-color: #000
        }

        .popover {
            position: absolute;
            top: 0;
            left: 0;
            z-index: 1060;
            display: none;
            max-width: 276px;
            padding: 1px;
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-size: 14px;
            font-style: normal;
            font-weight: 400;
            line-height: 1.42857143;
            text-align: left;
            text-align: start;
            text-decoration: none;
            text-shadow: none;
            text-transform: none;
            letter-spacing: normal;
            word-break: normal;
            word-spacing: normal;
            word-wrap: normal;
            white-space: normal;
            background-color: #fff;
            -webkit-background-clip: padding-box;
            background-clip: padding-box;
            border: 1px solid #ccc;
            border: 1px solid rgba(0, 0, 0, .2);
            border-radius: 6px;
            -webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, .2);
            box-shadow: 0 5px 10px rgba(0, 0, 0, .2);
            line-break: auto
        }

        .popover.top {
            margin-top: -10px
        }

        .popover.right {
            margin-left: 10px
        }

        .popover.bottom {
            margin-top: 10px
        }

        .popover.left {
            margin-left: -10px
        }

        .popover-title {
            padding: 8px 14px;
            margin: 0;
            font-size: 14px;
            background-color: #f7f7f7;
            border-bottom: 1px solid #ebebeb;
            border-radius: 5px 5px 0 0
        }

        .popover-content {
            padding: 9px 14px
        }

        .popover>.arrow,
        .popover>.arrow:after {
            position: absolute;
            display: block;
            width: 0;
            height: 0;
            border-color: transparent;
            border-style: solid
        }

        .popover>.arrow {
            border-width: 11px
        }

        .popover>.arrow:after {
            content: "";
            border-width: 10px
        }

        .popover.top>.arrow {
            bottom: -11px;
            left: 50%;
            margin-left: -11px;
            border-top-color: #999;
            border-top-color: rgba(0, 0, 0, .25);
            border-bottom-width: 0
        }

        .popover.top>.arrow:after {
            bottom: 1px;
            margin-left: -10px;
            content: " ";
            border-top-color: #fff;
            border-bottom-width: 0
        }

        .popover.right>.arrow {
            top: 50%;
            left: -11px;
            margin-top: -11px;
            border-right-color: #999;
            border-right-color: rgba(0, 0, 0, .25);
            border-left-width: 0
        }

        .popover.right>.arrow:after {
            bottom: -10px;
            left: 1px;
            content: " ";
            border-right-color: #fff;
            border-left-width: 0
        }

        .popover.bottom>.arrow {
            top: -11px;
            left: 50%;
            margin-left: -11px;
            border-top-width: 0;
            border-bottom-color: #999;
            border-bottom-color: rgba(0, 0, 0, .25)
        }

        .popover.bottom>.arrow:after {
            top: 1px;
            margin-left: -10px;
            content: " ";
            border-top-width: 0;
            border-bottom-color: #fff
        }

        .popover.left>.arrow {
            top: 50%;
            right: -11px;
            margin-top: -11px;
            border-right-width: 0;
            border-left-color: #999;
            border-left-color: rgba(0, 0, 0, .25)
        }

        .popover.left>.arrow:after {
            right: 1px;
            bottom: -10px;
            content: " ";
            border-right-width: 0;
            border-left-color: #fff
        }

        .carousel {
            position: relative
        }

        .carousel-inner {
            position: relative;
            width: 100%;
            overflow: hidden
        }

        .carousel-inner>.item {
            position: relative;
            display: none;
            -webkit-transition: .6s ease-in-out left;
            -o-transition: .6s ease-in-out left;
            transition: .6s ease-in-out left
        }

        .carousel-inner>.item>a>img,
        .carousel-inner>.item>img {
            line-height: 1
        }

        @media all and (transform-3d),
        (-webkit-transform-3d) {
            .carousel-inner>.item {
                -webkit-transition: -webkit-transform .6s ease-in-out;
                -o-transition: -o-transform .6s ease-in-out;
                transition: transform .6s ease-in-out;
                -webkit-backface-visibility: hidden;
                backface-visibility: hidden;
                -webkit-perspective: 1000px;
                perspective: 1000px
            }

            .carousel-inner>.item.active.right,
            .carousel-inner>.item.next {
                left: 0;
                -webkit-transform: translate3d(100%, 0, 0);
                transform: translate3d(100%, 0, 0)
            }

            .carousel-inner>.item.active.left,
            .carousel-inner>.item.prev {
                left: 0;
                -webkit-transform: translate3d(-100%, 0, 0);
                transform: translate3d(-100%, 0, 0)
            }

            .carousel-inner>.item.active,
            .carousel-inner>.item.next.left,
            .carousel-inner>.item.prev.right {
                left: 0;
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0)
            }
        }

        .carousel-inner>.active,
        .carousel-inner>.next,
        .carousel-inner>.prev {
            display: block
        }

        .carousel-inner>.active {
            left: 0
        }

        .carousel-inner>.next,
        .carousel-inner>.prev {
            position: absolute;
            top: 0;
            width: 100%
        }

        .carousel-inner>.next {
            left: 100%
        }

        .carousel-inner>.prev {
            left: -100%
        }

        .carousel-inner>.next.left,
        .carousel-inner>.prev.right {
            left: 0
        }

        .carousel-inner>.active.left {
            left: -100%
        }

        .carousel-inner>.active.right {
            left: 100%
        }

        .carousel-control {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            width: 15%;
            font-size: 20px;
            color: #fff;
            text-align: center;
            text-shadow: 0 1px 2px rgba(0, 0, 0, .6);
            background-color: rgba(0, 0, 0, 0);
            filter: alpha(opacity=50);
            opacity: .5
        }

        .carousel-control.left {
            background-image: -webkit-linear-gradient(left, rgba(0, 0, 0, .5) 0, rgba(0, 0, 0, .0001) 100%);
            background-image: -o-linear-gradient(left, rgba(0, 0, 0, .5) 0, rgba(0, 0, 0, .0001) 100%);
            background-image: -webkit-gradient(linear, left top, right top, from(rgba(0, 0, 0, .5)), to(rgba(0, 0, 0, .0001)));
            background-image: linear-gradient(to right, rgba(0, 0, 0, .5) 0, rgba(0, 0, 0, .0001) 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#80000000', endColorstr='#00000000', GradientType=1);
            background-repeat: repeat-x
        }

        .carousel-control.right {
            right: 0;
            left: auto;
            background-image: -webkit-linear-gradient(left, rgba(0, 0, 0, .0001) 0, rgba(0, 0, 0, .5) 100%);
            background-image: -o-linear-gradient(left, rgba(0, 0, 0, .0001) 0, rgba(0, 0, 0, .5) 100%);
            background-image: -webkit-gradient(linear, left top, right top, from(rgba(0, 0, 0, .0001)), to(rgba(0, 0, 0, .5)));
            background-image: linear-gradient(to right, rgba(0, 0, 0, .0001) 0, rgba(0, 0, 0, .5) 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00000000', endColorstr='#80000000', GradientType=1);
            background-repeat: repeat-x
        }

        .carousel-control:focus,
        .carousel-control:hover {
            color: #fff;
            text-decoration: none;
            filter: alpha(opacity=90);
            outline: 0;
            opacity: .9
        }

        .carousel-control .glyphicon-chevron-left,
        .carousel-control .glyphicon-chevron-right,
        .carousel-control .icon-next,
        .carousel-control .icon-prev {
            position: absolute;
            top: 50%;
            z-index: 5;
            display: inline-block;
            margin-top: -10px
        }

        .carousel-control .glyphicon-chevron-left,
        .carousel-control .icon-prev {
            left: 50%;
            margin-left: -10px
        }

        .carousel-control .glyphicon-chevron-right,
        .carousel-control .icon-next {
            right: 50%;
            margin-right: -10px
        }

        .carousel-control .icon-next,
        .carousel-control .icon-prev {
            width: 20px;
            height: 20px;
            font-family: serif;
            line-height: 1
        }

        .carousel-control .icon-prev:before {
            content: '\2039'
        }

        .carousel-control .icon-next:before {
            content: '\203a'
        }

        .carousel-indicators {
            position: absolute;
            bottom: 10px;
            left: 50%;
            z-index: 15;
            width: 60%;
            padding-left: 0;
            margin-left: -30%;
            text-align: center;
            list-style: none
        }

        .carousel-indicators li {
            display: inline-block;
            width: 10px;
            height: 10px;
            margin: 1px;
            text-indent: -999px;
            cursor: pointer;
            background-color: #0009;
            background-color: rgba(0, 0, 0, 0);
            border: 1px solid #fff;
            border-radius: 10px
        }

        .carousel-indicators .active {
            width: 12px;
            height: 12px;
            margin: 0;
            background-color: #fff
        }

        .carousel-caption {
            position: absolute;
            right: 15%;
            bottom: 20px;
            left: 15%;
            z-index: 10;
            padding-top: 20px;
            padding-bottom: 20px;
            color: #fff;
            text-align: center;
            text-shadow: 0 1px 2px rgba(0, 0, 0, .6)
        }

        .carousel-caption .btn {
            text-shadow: none
        }

        @media screen and (min-width:768px) {

            .carousel-control .glyphicon-chevron-left,
            .carousel-control .glyphicon-chevron-right,
            .carousel-control .icon-next,
            .carousel-control .icon-prev {
                width: 30px;
                height: 30px;
                margin-top: -10px;
                font-size: 30px
            }

            .carousel-control .glyphicon-chevron-left,
            .carousel-control .icon-prev {
                margin-left: -10px
            }

            .carousel-control .glyphicon-chevron-right,
            .carousel-control .icon-next {
                margin-right: -10px
            }

            .carousel-caption {
                right: 20%;
                left: 20%;
                padding-bottom: 30px
            }

            .carousel-indicators {
                bottom: 20px
            }
        }

        .btn-group-vertical>.btn-group:after,
        .btn-group-vertical>.btn-group:before,
        .btn-toolbar:after,
        .btn-toolbar:before,
        .clearfix:after,
        .clearfix:before,
        .container-fluid:after,
        .container-fluid:before,
        .container:after,
        .container:before,
        .dl-horizontal dd:after,
        .dl-horizontal dd:before,
        .form-horizontal .form-group:after,
        .form-horizontal .form-group:before,
        .modal-footer:after,
        .modal-footer:before,
        .modal-header:after,
        .modal-header:before,
        .nav:after,
        .nav:before,
        .navbar-collapse:after,
        .navbar-collapse:before,
        .navbar-header:after,
        .navbar-header:before,
        .navbar:after,
        .navbar:before,
        .pager:after,
        .pager:before,
        .panel-body:after,
        .panel-body:before,
        .row:after,
        .row:before {
            display: table;
            content: " "
        }

        .btn-group-vertical>.btn-group:after,
        .btn-toolbar:after,
        .clearfix:after,
        .container-fluid:after,
        .container:after,
        .dl-horizontal dd:after,
        .form-horizontal .form-group:after,
        .modal-footer:after,
        .modal-header:after,
        .nav:after,
        .navbar-collapse:after,
        .navbar-header:after,
        .navbar:after,
        .pager:after,
        .panel-body:after,
        .row:after {
            clear: both
        }

        .center-block {
            display: block;
            margin-right: auto;
            margin-left: auto
        }

        .pull-right {
            float: right !important
        }

        .pull-left {
            float: left !important
        }

        .hide {
            display: none !important
        }

        .show {
            display: block !important
        }

        .invisible {
            visibility: hidden
        }

        .text-hide {
            font: 0/0 a;
            color: transparent;
            text-shadow: none;
            background-color: transparent;
            border: 0
        }

        .hidden {
            display: none !important
        }

        .affix {
            position: fixed
        }

        @-ms-viewport {
            width: device-width
        }

        .visible-lg,
        .visible-md,
        .visible-sm,
        .visible-xs {
            display: none !important
        }

        .visible-lg-block,
        .visible-lg-inline,
        .visible-lg-inline-block,
        .visible-md-block,
        .visible-md-inline,
        .visible-md-inline-block,
        .visible-sm-block,
        .visible-sm-inline,
        .visible-sm-inline-block,
        .visible-xs-block,
        .visible-xs-inline,
        .visible-xs-inline-block {
            display: none !important
        }

        @media (max-width:767px) {
            .visible-xs {
                display: block !important
            }

            table.visible-xs {
                display: table !important
            }

            tr.visible-xs {
                display: table-row !important
            }

            td.visible-xs,
            th.visible-xs {
                display: table-cell !important
            }
        }

        @media (max-width:767px) {
            .visible-xs-block {
                display: block !important
            }
        }

        @media (max-width:767px) {
            .visible-xs-inline {
                display: inline !important
            }
        }

        @media (max-width:767px) {
            .visible-xs-inline-block {
                display: inline-block !important
            }
        }

        @media (min-width:768px) and (max-width:991px) {
            .visible-sm {
                display: block !important
            }

            table.visible-sm {
                display: table !important
            }

            tr.visible-sm {
                display: table-row !important
            }

            td.visible-sm,
            th.visible-sm {
                display: table-cell !important
            }
        }

        @media (min-width:768px) and (max-width:991px) {
            .visible-sm-block {
                display: block !important
            }
        }

        @media (min-width:768px) and (max-width:991px) {
            .visible-sm-inline {
                display: inline !important
            }
        }

        @media (min-width:768px) and (max-width:991px) {
            .visible-sm-inline-block {
                display: inline-block !important
            }
        }

        @media (min-width:992px) and (max-width:1199px) {
            .visible-md {
                display: block !important
            }

            table.visible-md {
                display: table !important
            }

            tr.visible-md {
                display: table-row !important
            }

            td.visible-md,
            th.visible-md {
                display: table-cell !important
            }
        }

        @media (min-width:992px) and (max-width:1199px) {
            .visible-md-block {
                display: block !important
            }
        }

        @media (min-width:992px) and (max-width:1199px) {
            .visible-md-inline {
                display: inline !important
            }
        }

        @media (min-width:992px) and (max-width:1199px) {
            .visible-md-inline-block {
                display: inline-block !important
            }
        }

        @media (min-width:1200px) {
            .visible-lg {
                display: block !important
            }

            table.visible-lg {
                display: table !important
            }

            tr.visible-lg {
                display: table-row !important
            }

            td.visible-lg,
            th.visible-lg {
                display: table-cell !important
            }
        }

        @media (min-width:1200px) {
            .visible-lg-block {
                display: block !important
            }
        }

        @media (min-width:1200px) {
            .visible-lg-inline {
                display: inline !important
            }
        }

        @media (min-width:1200px) {
            .visible-lg-inline-block {
                display: inline-block !important
            }
        }

        @media (max-width:767px) {
            .hidden-xs {
                display: none !important
            }
        }

        @media (min-width:768px) and (max-width:991px) {
            .hidden-sm {
                display: none !important
            }
        }

        @media (min-width:992px) and (max-width:1199px) {
            .hidden-md {
                display: none !important
            }
        }

        @media (min-width:1200px) {
            .hidden-lg {
                display: none !important
            }
        }

        .visible-print {
            display: none !important
        }

        @media print {
            .visible-print {
                display: block !important
            }

            table.visible-print {
                display: table !important
            }

            tr.visible-print {
                display: table-row !important
            }

            td.visible-print,
            th.visible-print {
                display: table-cell !important
            }
        }

        .visible-print-block {
            display: none !important
        }

        @media print {
            .visible-print-block {
                display: block !important
            }
        }

        .visible-print-inline {
            display: none !important
        }

        @media print {
            .visible-print-inline {
                display: inline !important
            }
        }

        .visible-print-inline-block {
            display: none !important
        }

        @media print {
            .visible-print-inline-block {
                display: inline-block !important
            }
        }

        @media print {
            .hidden-print {
                display: none !important
            }
        }

        /*# sourceMappingURL=bootstrap.min.css.map */
    </style>
    <style data-savepage-href="./style.css">
        /*savepage-import-url=https://fonts.googleapis.com/css?family=Oxygen|Rubik:300*/
        /* latin-ext */
        @font-face {
            font-family: 'Oxygen';
            font-style: normal;
            font-weight: 400;
            src: local('Oxygen Regular'), local('Oxygen-Regular'),
                /*savepage-url=https://fonts.gstatic.com/s/oxygen/v10/2sDfZG1Wl4LcnbuKgE0mV0Q.woff2*/
                url() format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: 'Oxygen';
            font-style: normal;
            font-weight: 400;
            src: local('Oxygen Regular'), local('Oxygen-Regular'),
                /*savepage-url=https://fonts.gstatic.com/s/oxygen/v10/2sDfZG1Wl4LcnbuKjk0m.woff2*/
                url() format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* cyrillic-ext */
        @font-face {
            font-family: 'Rubik';
            font-style: normal;
            font-weight: 300;
            src:
                /*savepage-url=https://fonts.gstatic.com/s/rubik/v11/iJWZBXyIfDnIV5PNhY1KTN7Z-Yh-WYiFWkU1Z4Y.woff2*/
                url(data:font/woff2;base64,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) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }

        /* cyrillic */
        @font-face {
            font-family: 'Rubik';
            font-style: normal;
            font-weight: 300;
            src:
                /*savepage-url=https://fonts.gstatic.com/s/rubik/v11/iJWZBXyIfDnIV5PNhY1KTN7Z-Yh-WYiFU0U1Z4Y.woff2*/
                url(data:font/woff2;base64,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) format('woff2');
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        /* hebrew */
        @font-face {
            font-family: 'Rubik';
            font-style: normal;
            font-weight: 300;
            src:
                /*savepage-url=https://fonts.gstatic.com/s/rubik/v11/iJWZBXyIfDnIV5PNhY1KTN7Z-Yh-WYiFVUU1Z4Y.woff2*/
                url(data:font/woff2;base64,d09GMgABAAAAAA+IABAAAAAAKEQAAA8nAAEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAGkQbl2QcgQoGYD9TVEFURACBJhEICqhooUsLgSAAATYCJAOCHgQgBYRiByAMBxvvIiMRwsYBCP7tbhGFPAn+8oAbMqQPMUtiV8GEZJQYdF01qtBmXuKTyTjf53w5e7a4iOdlsRX6RT48v80/9z4Q3iUsxErEOWxgCEZigTgHODAKG6eL/oFbuyhj+bP9Uf6IMH5k6v5nkV1Y0h9s6L8/2O/Z07uJlkkkTRNQYJRwXz5cQuBGtwUmQRZLBFn09mR7m3gdr08gUngIJdSmIKwC+K+2cYj6vTV7u01Kj3ghOlLWZ+XWG97u3jX5Q9ZkxZ0kflI2EovQMQuHUSicQSnFj2uv9t7Ppe2QHJbcQBhgYafULtldfy6X8mdXIM7/g9z/N0LXSQJVNUB2aMTsJuubb7N5Epj2TkaoinCE4xpD3T3Or/3bvw4EFHIAABCHgoLAiKBYPQ4EFIAUQBIKDsXMgBo1xLCqx4MAIAAYDBpxFQ+LHUlnT9cGKK7OTeuQRAAAfj8EQF4nU2LK0GvDOsg3fhiKuN1wvAQBokEoxCDzb+sgBLDSDcdSKrijf83Jy4RsqaudPZM07vdGTG67luW5uU3PfDH/U6SS95AbDq2nVsqpJU9BIalwQjTbUgAeMggR+L+BIVg4CSLFC5FMJZJathi58qTSWyWNkVG6IAIAgAgAwAMAJAAAKQAgBACEAQAlAFABgDQAsAIArAQAGgCQDQByAYARAGQUFBr+/3Vao4hssJaGrUv4hETED0kqi6eCABOru/A0vOGPs8Bv1os+KoVGedbnhF700IvZK7w4JmzoJa8V1VAjDJFLk7Q0PANYRFNS23kdQ5lZXG138PiBP1eZKCUIOVxetCidJ+eoGmqMIXJpkpaGZwCLaEpqO69jKDOLq+0OHj/wP04wYmUAhkEQAe1bc+fo5iMZqA9mHaUWI6VYmo/BO6twAknHZQFLLxUtA0e+MYlzwpi0ZiqI4VI11BijcFBBaAZkEU1JXThCmVnqCPiJXbQP2u2uWbutrEX9Xc+96K42UDW6w4hoykCN7xS6wmzO3Us+K0jTEnSONis7f25ulZSU50yBEqtqqDFG4aCC0AzIIrpwoCBCmVnqCPiJDsXAKw+WSNMSdI42Kzt/zs+Dpxwm0rQEnaPNys5/Hwx7bagjOFnLzyJNS9A52qzs/J3gYYEAIGiPpMV7xG/4N2vU3oXmJu3ugfjxUjWiIfg8gRgEUigJkOA66K8BQkkExpNBYLy+DLANUA24zMrzMTsKtx32xQS9OHjJDXkCU4UAiN8v5oMk6l9ekpcr5/n/6wMhiYYbPCzlBn7OWIVRGgBNMLUeQDXmPo0VWWHtiQad9hqcuZY2vqzFLvsBeSvv0Ml1bpLLdugb2+dhT46d9gqve+4W7/L+uJfSR3zKFwD5KF/Qydecw7L3/CQ15LsL4Na2DWNf+YO/Lfslf538x/99JwUck2NBVTbmZUlNa2a1NbYERd8pF6VUTOVtarffwZ3vxx3qQ+F62zdp9061Weppx7ycG+xotwAQkoOYE0E/NkLWKtJl8DM/68rglSWMivvojYpTPDj+JXNHCeai10/BBSOZYZ81yDI7mmxnXNRQThllDBGcfsPvrmJWI4Jo4iaZj0+IV+8ltSmaj2e9t0kKNGkoljTit4MIzZhPkI7iFboJbd5U4Z9oy2Crq/lGBXm3uNU+to/dQMi8wUVssmJJhUGEem+TclyOvQKZCgD4dX+8YraimUu7n8OjEANQn4Xg282EHtPliJBE47igRlGrzE6fnTM799cDwKAQRkDjokEI0HHXAtSlF5M2cmNgsqEYJUCR/3f834wnzl3/ddyNGwDcTPJu8AAAqJg+ApBACgICMSgAhehJuWTru38TAfAv9RWRVPUnBCEAQAjRAHAgoEQKACAAAAqAA6DAgQBQEOAkQJwgHOTCB84jfoXwMeFTwueF3wn/SG9Z1i8XLBctly5XLNf5/SCEdwkf9DWeTG8If0/py4bRkuXyZfO/4NIxYOnypfGlfUs5S9UfTwh+gwkDuuAnwY8gAGLA0+tRhWrUdPcC8YdG2BpXfK4GEH4PiIQAeQZorrQaM8kBUrNWUlCtlfaOf2JGyXFUE1wpS2r0amEhIclRysCgiKCgu6vE5QZFpiYHBovi1avIohWBUVK1NjUmXS05MiUkMlaqlmpDJluWxsVJv49cIRufUg5OkbFpieTQZNjA5CR8E0w6PkXI2OJiXeGDT8zB6NSd+/LT15LlBsJzc5IX+tRGxo0tMHZHF5XPz4MuNU4mJUa7r1l4bdl1HK7JCeZ88AXthPXs6ukHZtW3vv10VJVvbk42TrixRYlkfA50nfzBQiPWTUbOGgCtmnM6mgQJFiKBvD5uQxLpNGc+Np+VIy/Hdo4vnOX+85JDi03TV4yRhQU2/kzKxA0vsfAbH3iHNZM+n2JukqxpW2rf1uVSVidJdOTcWNRO7tdKZ3wRc3NzzDGm6fBVs4uLZGxxEXzpOK3b+d6SS1JJlyylHqqGvmH4Chf60z8Ob56eDlNNTirWTkwwx+U0rwtHAL3Gqz5W9urMfOLe6pzUG9t5+WaMjSn9DIF5x3O3ppcXFwnp2dbXhmqne2qKx2eYqx2+GZVu8gzgu06pv+GxBUKuV+LlZhV0N6JWUg3ZGVQ9pWyb+virru0ARtldk2hc6T2ltGdyeI53Zr6cG7dru9l0/RKN9bZ9Ufd8bt4jyfGbvcrCOILrRM6kxc2nar/JtIztdJaen/siwE7b8WVeGz893T1+3Mg9B4CPuS+8/LCzr4LW7A8/Rl8uCz6FfWLCWDNT24u7ZJ+1A0gOXbT9mPTLAEC3Yn2yFXvcjmurSrw4vF6c5KWNvLgiVi1dF7fn9tqtoViWOcYYGwd8ZD7jECF3e5edqVjP7RSLZ8Wh7GbtsYg5TaC92xVsll2ZHtSotYwEHrhSVpF4ls0yfmbXwa8OJR8HC+ZekytDLEUVaACTo3OG2O3y9HheBw84vPlar1WWerg12tm5yALdwzE2Pl1l/UGVqUan6ZPXFRgj32cXcquXUo/Ps+jgqi7Ltex4WnTSOZXKbqpFi1K5Iz+6NLg6Mq561WY2yzKxkrhBFuH7va3ZBr6t1Yxvy+WbcsBOzqFdBMsiDBIEimAcEDedJ60XfTQyd9DdDq9B663PWYcWtvfVUIMSfve6B2Fa8EP0bqenrc3uJi5elsVIa/3qohBZ9CY1k/Gxm1r9qkJnVraH2Pg8LU8sWf19eej88gFWiGA5CHeUut2enqNbGXTKMazXDq2+3RmA1/6roz0OD+cKiBFSlzPr6oMGrZdYhakBxKIdPvrqDrwo2vU1ixSfv/bYk1W6tBZLbbJzjaoq6fVV1S1DOZkbu8zJnoIKi+ao7t9OsIfZmaKhzUWdWGWmfCi/UryrhB4fx7X9oqDVpB2uXSb+e+vdFsT5akd5Vij483zdxch3x+jxCxG1v/OFx8BOn3PobFQGYD75ifwKdj+TsnORCp2Kb2jNGpy2uqc+ltgTFbv3h5Hftsm3Tc9m2feOnrzMPmrlszJ5YtH2j+S58gfWXodPTl/BE1e32/Z4iNvhQZ3+VAST8bZdr9VNFJdFOrKXNnF9+ars3ibbfTWCw0vh6i+DdwkJLTp+EePYtlI9dXC9TyZn+qvX/j0dWpl7npzj3bBuin3T48lxAu0nwe673VPZasjxEqtcJyeWnOGj+ZUf35e92mr1cC75Sjlx2TxWmHay06qLl6s3civ2sGU0xiGq61rTeb5r9lZqPGsLS8UbE9uEzgCs69XElryjN+RqL/fhH9LZvjG3ic3uWz9+7S5dq3mVVs6aUQw8xk6cQeVBz90/HPjuNTwQxNWjL3YsVC4filuhQ1eBFl1md2lYmUfHFKs8lebOlJlyY1e+0VtnsB/NGZs8LfUvHEyzE1dGYk36AXvwEeOqrs0mbMdZUj3xqSseUb+0HuarObMmFIH15KS71+LbDFLN19wZuQOJryiVxVMuE0fq2rxruW/OpwFH87a42zperXeJh8QhW6PvkGaItgfwhvTR/FskeNtMNZ36YzWUSrlS+aroBCWbZaNVhy37evYBt0YdQ45VO+w1OHq/WuETqxxuYieUyvDpvsquo3GW7Icq1dXrWE3rcq7lXhOb0bNLE/M3xHFgCo+7Qd20U7TvNZt37u836jFmLS7ixFu4tne9UukKvpeJ2L3Brn3wco8jw9piUFFLg3kvmoooACLU0SswAHXQRSAAFvcAd1ajlrzr74zHJMPXBqS7CGYSC6EK1nQsqsUXfpjOWPDHHDqPBegZXTiJZEGAFmBLNV3kqxa8G5XqzBckJKHoDyxFEDIP+hgHIhUORvfgEM2o0RULiMX69l0cNn/1vlk9fIEjeyuO4CFheuQkf+Mo/i5ENNSmdvtX3QNQK7b3EKv8qOjMZPMPHXt26wtAoN/v9/0BqN2/7vBJzBKGqG4CRnIbtqugJl0yCRYZgfy1KHd/5wBLAywttAMNybXfA04wtQ3ma9v2l1pL9mdfcVCvrdue/IBaJ5C/cW3z/szLPocJqERn2QROVp/PC2Pi5LFEgidq7Ss1AlAAL9D6DSzKB5pz70bApE/u5pW4cWfWKmEWGrSZ34gAoJHfuPeh1e2BBT8xx30DgLm/7VsA4P3Pvr32/38gqwcBAkABAAT421CRYMClnSeGPPl5JUkC1IChCoy5g9xqSGsHdl9izy4K2om9o9jMY6mRuubhrAhmb3ldmPytD5Ld7dRHsGzy2a6RD0mKH/d20Y2UFPQeans5+XLOPZh5bQ10nrCWCfu9o65js/2ZcF55kV9aKqs/X+VLGn2tzFOc5vm911NwCGEB/8fbvK3bINk1T2wPYmf2RGK/qT32IABs6FQi7CTsIuf0R8lxBxyIgAdwBdAyCZJckUkhxxOZHPReUwXeTCGiIsgMQELiMuXQpigziDIblgZj5EAnAkjJSajEBgm+AqTvfgvlRozaboMBffptkiBXthw6CewG9NQ22qzLyYaYNeS0HzGoR/chUmqzbN1vxAYbiaeFPWiTURsZZcnSZ8BJntpm6jZi2DSYjYjeXj16jViHGRtlWSXdK8rnWyqVNdb4xPrSjbw6bZArU04TtSb1bPNjKpkwMl/N0GJOPS3wgWqUhLAdCzAbNlNso+5+8tGGeGZwxCuTYcOVyGJjZmltZIImS2M18/6dvAZ0a+zff+u0DgcAgP81uSZtH4x/7yM4AgAAAA==) format('woff2');
            unicode-range: U+0590-05FF, U+20AA, U+25CC, U+FB1D-FB4F;
        }

        /* latin-ext */
        @font-face {
            font-family: 'Rubik';
            font-style: normal;
            font-weight: 300;
            src:
                /*savepage-url=https://fonts.gstatic.com/s/rubik/v11/iJWZBXyIfDnIV5PNhY1KTN7Z-Yh-WYiFWUU1Z4Y.woff2*/
                url(data:font/woff2;base64,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) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: 'Rubik';
            font-style: normal;
            font-weight: 300;
            src:
                /*savepage-url=https://fonts.gstatic.com/s/rubik/v11/iJWZBXyIfDnIV5PNhY1KTN7Z-Yh-WYiFV0U1.woff2*/
                url(data:font/woff2;base64,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) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        html,
        body {
            width: 100%;
            height: 100%;
            box-sizing: border-box;
            font-family: "Rubik", Arial, sans-serif;
            font-size: 12px;
            letter-spacing: 0.6px;
        }

        *,
        *:before,
        *:after {
            box-sizing: inherit;
        }

        body {
            background: -webkit-linear-gradient(#0f2027, #203a43, #2c5364);
            background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }


        .chrome-window {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            display: block;
            margin-right: 0px;
            margin: 20px auto;
            width: 758px !important;
            border-radius: 2px;
            box-shadow: 2px 2px 3px rgba(0, 0, 0, .15);
            padding: 71px 0px 0px;
            background:
                /*savepage-url=https://www.valeomarketing.com/wp-content/uploads/2013/12/chrome_top.png*/
                var(--savepage-url-13) top no-repeat white;
        }


        .chrome-window img {
            display: block;
            margin: auto;
            max-width: 100%;
        }



        .hidden {
            display: none;
        }

        .halftone {
            position: absolute;
            width: 45vw;
            right: 0;
            bottom: 0;
            z-index: -2;
        }

        .images {
            width: 40px;
            /* you can use % */
            height: auto;
        }


        .header {
            text-align: center;
            padding: 1 0px 20px 9%;
            font-size: 15.6px;

        }




        svg#gradient {
            width: 100px;
            height: 40px;
            vertical-align: bottom;
            pointer-events: none;
        }

        svg#gradient text {
            fill:
                /*savepage-url=#linearGradient*/
                url();
        }

        #status {
            text-align: center;
            height: 20px;
            margin-top: -30px;
            margin-bottom: 30px;
            color: #636779;
        }

        .start {
            background: -webkit-linear-gradient(315deg, #0f2027, #203a43, #2c5364);
            background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
            box-shadow: 0 16px 28px 0 rgba(0, 0, 0, 0.8), 0 25px 55px 0 rgba(0, 0, 0, 0.21);
            width: 760px;

            text-align: center;
            color: white;
            padding: 21px 210px;
            cursor: pointer;
        }




        .actions .minus-add {
            font-size: 18px;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            padding: 0;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
        }

        .actions .minus-add div {
            cursor: pointer;
            margin: 1px;
            padding: 5px;
            margin-bottom: 10px;
            -webkit-box-flex: .5;
            -webkit-flex: .5;
            -ms-flex: .5;
            flex: .5;
        }

        .actions .minus-add div:hover {
            color: #DADADB;
        }

        .actions .minus-add div:active {
            color: #353741;
        }

        @-webkit-keyframes colors {
            0% {
                stroke: #0f2027;
            }

            50% {
                stroke: #203a43;
            }

            100% {
                stroke: #2c5364;
            }
        }

        @keyframes colors {
            0% {
                stroke: #0f2027;
            }

            50% {
                stroke: #203a43;
            }

            100% {
                stroke: #2c5364;
            }
        }

        @-webkit-keyframes dash {
            0% {
                stroke-dashoffset: 185;
            }

            50% {
                stroke-dashoffset: 175;
            }

            100% {
                stroke-dashoffset: 185;
            }
        }

        @keyframes dash {
            0% {
                stroke-dashoffset: 185;
            }

            50% {
                stroke-dashoffset: 175;
            }

            100% {
                stroke-dashoffset: 185;
            }

        }

        .side-menu {
            font-family: 'Roboto', sans-serif;
            position: fixed;
            top: 0;
            left: 0;
            margin: 0;
            padding: 0;
            height: 100%;
            width: 60px;
            list-style-type: none;
            background: -webkit-linear-gradient(315deg, #0f2027, #203a43, #2c5364);
            overflow: hidden;
            transition: width .5s;
        }

        .side-menu:hover {
            width: 300px;
        }

        .side-menu li {
            width: 300px;
        }

        .side-menu li span {
            font-size: 1rem;
            margin: 20px 30px 0 22px;
        }

        .side-menu li a {
            display: block;
            font-size: .9rem;
            text-decoration: none;
            color: #FFF;
            height: 60px;
        }

        .side-menu li a:hover,
        .side-menu li:first-child a {
            background: #14081d;
            display: block;
        }
    </style>

    <style data-savepage-href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
        /*!
     *  Font Awesome 4.6.3 by @davegandy - http://fontawesome.io - @fontawesome
     *  License - http://fontawesome.io/license (Font: SIL OFL 1.1, CSS: MIT License)
     */
        @font-face {
            font-family: 'FontAwesome';
            src:
                /*savepage-url=../fonts/fontawesome-webfont.eot?v=4.6.3*/
                url();
            src:
                /*savepage-url=../fonts/fontawesome-webfont.eot?#iefix&v=4.6.3*/
                url() format('embedded-opentype'),
                /*savepage-url=../fonts/fontawesome-webfont.woff2?v=4.6.3*/
                url(data:font/woff2;base64,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) format('woff2'),
                /*savepage-url=../fonts/fontawesome-webfont.woff?v=4.6.3*/
                url(data:font/woff;base64,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) format('woff'),
                /*savepage-url=../fonts/fontawesome-webfont.ttf?v=4.6.3*/
                url() format('truetype'),
                /*savepage-url=../fonts/fontawesome-webfont.svg?v=4.6.3#fontawesomeregular*/
                url() format('svg');
            font-weight: normal;
            font-style: normal
        }

        .fa {
            display: inline-block;
            font: normal normal normal 14px/1 FontAwesome;
            font-size: inherit;
            text-rendering: auto;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .fa-lg {
            font-size: 1.33333333em;
            line-height: .75em;
            vertical-align: -15%
        }

        .fa-2x {
            font-size: 2em
        }

        .fa-3x {
            font-size: 3em
        }

        .fa-4x {
            font-size: 4em
        }

        .fa-5x {
            font-size: 5em
        }

        .fa-fw {
            width: 1.28571429em;
            text-align: center
        }

        .fa-ul {
            padding-left: 0;
            margin-left: 2.14285714em;
            list-style-type: none
        }

        .fa-ul>li {
            position: relative
        }

        .fa-li {
            position: absolute;
            left: -2.14285714em;
            width: 2.14285714em;
            top: .14285714em;
            text-align: center
        }

        .fa-li.fa-lg {
            left: -1.85714286em
        }

        .fa-border {
            padding: .2em .25em .15em;
            border: solid .08em #eee;
            border-radius: .1em
        }

        .fa-pull-left {
            float: left
        }

        .fa-pull-right {
            float: right
        }

        .fa.fa-pull-left {
            margin-right: .3em
        }

        .fa.fa-pull-right {
            margin-left: .3em
        }

        .pull-right {
            float: right
        }

        .pull-left {
            float: left
        }

        .fa.pull-left {
            margin-right: .3em
        }

        .fa.pull-right {
            margin-left: .3em
        }

        .fa-spin {
            -webkit-animation: fa-spin 2s infinite linear;
            animation: fa-spin 2s infinite linear
        }

        .fa-pulse {
            -webkit-animation: fa-spin 1s infinite steps(8);
            animation: fa-spin 1s infinite steps(8)
        }

        @-webkit-keyframes fa-spin {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg)
            }

            100% {
                -webkit-transform: rotate(359deg);
                transform: rotate(359deg)
            }
        }

        @keyframes fa-spin {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg)
            }

            100% {
                -webkit-transform: rotate(359deg);
                transform: rotate(359deg)
            }
        }

        .fa-rotate-90 {
            -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=1)";
            -webkit-transform: rotate(90deg);
            -ms-transform: rotate(90deg);
            transform: rotate(90deg)
        }

        .fa-rotate-180 {
            -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2)";
            -webkit-transform: rotate(180deg);
            -ms-transform: rotate(180deg);
            transform: rotate(180deg)
        }

        .fa-rotate-270 {
            -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=3)";
            -webkit-transform: rotate(270deg);
            -ms-transform: rotate(270deg);
            transform: rotate(270deg)
        }

        .fa-flip-horizontal {
            -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=0, mirror=1)";
            -webkit-transform: scale(-1, 1);
            -ms-transform: scale(-1, 1);
            transform: scale(-1, 1)
        }

        .fa-flip-vertical {
            -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2, mirror=1)";
            -webkit-transform: scale(1, -1);
            -ms-transform: scale(1, -1);
            transform: scale(1, -1)
        }

        :root .fa-rotate-90,
        :root .fa-rotate-180,
        :root .fa-rotate-270,
        :root .fa-flip-horizontal,
        :root .fa-flip-vertical {
            filter: none
        }

        .fa-stack {
            position: relative;
            display: inline-block;
            width: 2em;
            height: 2em;
            line-height: 2em;
            vertical-align: middle
        }

        .fa-stack-1x,
        .fa-stack-2x {
            position: absolute;
            left: 0;
            width: 100%;
            text-align: center
        }

        .fa-stack-1x {
            line-height: inherit
        }

        .fa-stack-2x {
            font-size: 2em
        }

        .fa-inverse {
            color: #fff
        }

        .fa-glass:before {
            content: "\f000"
        }

        .fa-music:before {
            content: "\f001"
        }

        .fa-search:before {
            content: "\f002"
        }

        .fa-envelope-o:before {
            content: "\f003"
        }

        .fa-heart:before {
            content: "\f004"
        }

        .fa-star:before {
            content: "\f005"
        }

        .fa-star-o:before {
            content: "\f006"
        }

        .fa-user:before {
            content: "\f007"
        }

        .fa-film:before {
            content: "\f008"
        }

        .fa-th-large:before {
            content: "\f009"
        }

        .fa-th:before {
            content: "\f00a"
        }

        .fa-th-list:before {
            content: "\f00b"
        }

        .fa-check:before {
            content: "\f00c"
        }

        .fa-remove:before,
        .fa-close:before,
        .fa-times:before {
            content: "\f00d"
        }

        .fa-search-plus:before {
            content: "\f00e"
        }

        .fa-search-minus:before {
            content: "\f010"
        }

        .fa-power-off:before {
            content: "\f011"
        }

        .fa-signal:before {
            content: "\f012"
        }

        .fa-gear:before,
        .fa-cog:before {
            content: "\f013"
        }

        .fa-trash-o:before {
            content: "\f014"
        }

        .fa-home:before {
            content: "\f015"
        }

        .fa-file-o:before {
            content: "\f016"
        }

        .fa-clock-o:before {
            content: "\f017"
        }

        .fa-road:before {
            content: "\f018"
        }

        .fa-download:before {
            content: "\f019"
        }

        .fa-arrow-circle-o-down:before {
            content: "\f01a"
        }

        .fa-arrow-circle-o-up:before {
            content: "\f01b"
        }

        .fa-inbox:before {
            content: "\f01c"
        }

        .fa-play-circle-o:before {
            content: "\f01d"
        }

        .fa-rotate-right:before,
        .fa-repeat:before {
            content: "\f01e"
        }

        .fa-refresh:before {
            content: "\f021"
        }

        .fa-list-alt:before {
            content: "\f022"
        }

        .fa-lock:before {
            content: "\f023"
        }

        .fa-flag:before {
            content: "\f024"
        }

        .fa-headphones:before {
            content: "\f025"
        }

        .fa-volume-off:before {
            content: "\f026"
        }

        .fa-volume-down:before {
            content: "\f027"
        }

        .fa-volume-up:before {
            content: "\f028"
        }

        .fa-qrcode:before {
            content: "\f029"
        }

        .fa-barcode:before {
            content: "\f02a"
        }

        .fa-tag:before {
            content: "\f02b"
        }

        .fa-tags:before {
            content: "\f02c"
        }

        .fa-book:before {
            content: "\f02d"
        }

        .fa-bookmark:before {
            content: "\f02e"
        }

        .fa-print:before {
            content: "\f02f"
        }

        .fa-camera:before {
            content: "\f030"
        }

        .fa-font:before {
            content: "\f031"
        }

        .fa-bold:before {
            content: "\f032"
        }

        .fa-italic:before {
            content: "\f033"
        }

        .fa-text-height:before {
            content: "\f034"
        }

        .fa-text-width:before {
            content: "\f035"
        }

        .fa-align-left:before {
            content: "\f036"
        }

        .fa-align-center:before {
            content: "\f037"
        }

        .fa-align-right:before {
            content: "\f038"
        }

        .fa-align-justify:before {
            content: "\f039"
        }

        .fa-list:before {
            content: "\f03a"
        }

        .fa-dedent:before,
        .fa-outdent:before {
            content: "\f03b"
        }

        .fa-indent:before {
            content: "\f03c"
        }

        .fa-video-camera:before {
            content: "\f03d"
        }

        .fa-photo:before,
        .fa-image:before,
        .fa-picture-o:before {
            content: "\f03e"
        }

        .fa-pencil:before {
            content: "\f040"
        }

        .fa-map-marker:before {
            content: "\f041"
        }

        .fa-adjust:before {
            content: "\f042"
        }

        .fa-tint:before {
            content: "\f043"
        }

        .fa-edit:before,
        .fa-pencil-square-o:before {
            content: "\f044"
        }

        .fa-share-square-o:before {
            content: "\f045"
        }

        .fa-check-square-o:before {
            content: "\f046"
        }

        .fa-arrows:before {
            content: "\f047"
        }

        .fa-step-backward:before {
            content: "\f048"
        }

        .fa-fast-backward:before {
            content: "\f049"
        }

        .fa-backward:before {
            content: "\f04a"
        }

        .fa-play:before {
            content: "\f04b"
        }

        .fa-pause:before {
            content: "\f04c"
        }

        .fa-stop:before {
            content: "\f04d"
        }

        .fa-forward:before {
            content: "\f04e"
        }

        .fa-fast-forward:before {
            content: "\f050"
        }

        .fa-step-forward:before {
            content: "\f051"
        }

        .fa-eject:before {
            content: "\f052"
        }

        .fa-chevron-left:before {
            content: "\f053"
        }

        .fa-chevron-right:before {
            content: "\f054"
        }

        .fa-plus-circle:before {
            content: "\f055"
        }

        .fa-minus-circle:before {
            content: "\f056"
        }

        .fa-times-circle:before {
            content: "\f057"
        }

        .fa-check-circle:before {
            content: "\f058"
        }

        .fa-question-circle:before {
            content: "\f059"
        }

        .fa-info-circle:before {
            content: "\f05a"
        }

        .fa-crosshairs:before {
            content: "\f05b"
        }

        .fa-times-circle-o:before {
            content: "\f05c"
        }

        .fa-check-circle-o:before {
            content: "\f05d"
        }

        .fa-ban:before {
            content: "\f05e"
        }

        .fa-arrow-left:before {
            content: "\f060"
        }

        .fa-arrow-right:before {
            content: "\f061"
        }

        .fa-arrow-up:before {
            content: "\f062"
        }

        .fa-arrow-down:before {
            content: "\f063"
        }

        .fa-mail-forward:before,
        .fa-share:before {
            content: "\f064"
        }

        .fa-expand:before {
            content: "\f065"
        }

        .fa-compress:before {
            content: "\f066"
        }

        .fa-plus:before {
            content: "\f067"
        }

        .fa-minus:before {
            content: "\f068"
        }

        .fa-asterisk:before {
            content: "\f069"
        }

        .fa-exclamation-circle:before {
            content: "\f06a"
        }

        .fa-gift:before {
            content: "\f06b"
        }

        .fa-leaf:before {
            content: "\f06c"
        }

        .fa-fire:before {
            content: "\f06d"
        }

        .fa-eye:before {
            content: "\f06e"
        }

        .fa-eye-slash:before {
            content: "\f070"
        }

        .fa-warning:before,
        .fa-exclamation-triangle:before {
            content: "\f071"
        }

        .fa-plane:before {
            content: "\f072"
        }

        .fa-calendar:before {
            content: "\f073"
        }

        .fa-random:before {
            content: "\f074"
        }

        .fa-comment:before {
            content: "\f075"
        }

        .fa-magnet:before {
            content: "\f076"
        }

        .fa-chevron-up:before {
            content: "\f077"
        }

        .fa-chevron-down:before {
            content: "\f078"
        }

        .fa-retweet:before {
            content: "\f079"
        }

        .fa-shopping-cart:before {
            content: "\f07a"
        }

        .fa-folder:before {
            content: "\f07b"
        }

        .fa-folder-open:before {
            content: "\f07c"
        }

        .fa-arrows-v:before {
            content: "\f07d"
        }

        .fa-arrows-h:before {
            content: "\f07e"
        }

        .fa-bar-chart-o:before,
        .fa-bar-chart:before {
            content: "\f080"
        }

        .fa-twitter-square:before {
            content: "\f081"
        }

        .fa-facebook-square:before {
            content: "\f082"
        }

        .fa-camera-retro:before {
            content: "\f083"
        }

        .fa-key:before {
            content: "\f084"
        }

        .fa-gears:before,
        .fa-cogs:before {
            content: "\f085"
        }

        .fa-comments:before {
            content: "\f086"
        }

        .fa-thumbs-o-up:before {
            content: "\f087"
        }

        .fa-thumbs-o-down:before {
            content: "\f088"
        }

        .fa-star-half:before {
            content: "\f089"
        }

        .fa-heart-o:before {
            content: "\f08a"
        }

        .fa-sign-out:before {
            content: "\f08b"
        }

        .fa-linkedin-square:before {
            content: "\f08c"
        }

        .fa-thumb-tack:before {
            content: "\f08d"
        }

        .fa-external-link:before {
            content: "\f08e"
        }

        .fa-sign-in:before {
            content: "\f090"
        }

        .fa-trophy:before {
            content: "\f091"
        }

        .fa-github-square:before {
            content: "\f092"
        }

        .fa-upload:before {
            content: "\f093"
        }

        .fa-lemon-o:before {
            content: "\f094"
        }

        .fa-phone:before {
            content: "\f095"
        }

        .fa-square-o:before {
            content: "\f096"
        }

        .fa-bookmark-o:before {
            content: "\f097"
        }

        .fa-phone-square:before {
            content: "\f098"
        }

        .fa-twitter:before {
            content: "\f099"
        }

        .fa-facebook-f:before,
        .fa-facebook:before {
            content: "\f09a"
        }

        .fa-github:before {
            content: "\f09b"
        }

        .fa-unlock:before {
            content: "\f09c"
        }

        .fa-credit-card:before {
            content: "\f09d"
        }

        .fa-feed:before,
        .fa-rss:before {
            content: "\f09e"
        }

        .fa-hdd-o:before {
            content: "\f0a0"
        }

        .fa-bullhorn:before {
            content: "\f0a1"
        }

        .fa-bell:before {
            content: "\f0f3"
        }

        .fa-certificate:before {
            content: "\f0a3"
        }

        .fa-hand-o-right:before {
            content: "\f0a4"
        }

        .fa-hand-o-left:before {
            content: "\f0a5"
        }

        .fa-hand-o-up:before {
            content: "\f0a6"
        }

        .fa-hand-o-down:before {
            content: "\f0a7"
        }

        .fa-arrow-circle-left:before {
            content: "\f0a8"
        }

        .fa-arrow-circle-right:before {
            content: "\f0a9"
        }

        .fa-arrow-circle-up:before {
            content: "\f0aa"
        }

        .fa-arrow-circle-down:before {
            content: "\f0ab"
        }

        .fa-globe:before {
            content: "\f0ac"
        }

        .fa-wrench:before {
            content: "\f0ad"
        }

        .fa-tasks:before {
            content: "\f0ae"
        }

        .fa-filter:before {
            content: "\f0b0"
        }

        .fa-briefcase:before {
            content: "\f0b1"
        }

        .fa-arrows-alt:before {
            content: "\f0b2"
        }

        .fa-group:before,
        .fa-users:before {
            content: "\f0c0"
        }

        .fa-chain:before,
        .fa-link:before {
            content: "\f0c1"
        }

        .fa-cloud:before {
            content: "\f0c2"
        }

        .fa-flask:before {
            content: "\f0c3"
        }

        .fa-cut:before,
        .fa-scissors:before {
            content: "\f0c4"
        }

        .fa-copy:before,
        .fa-files-o:before {
            content: "\f0c5"
        }

        .fa-paperclip:before {
            content: "\f0c6"
        }

        .fa-save:before,
        .fa-floppy-o:before {
            content: "\f0c7"
        }

        .fa-square:before {
            content: "\f0c8"
        }

        .fa-navicon:before,
        .fa-reorder:before,
        .fa-bars:before {
            content: "\f0c9"
        }

        .fa-list-ul:before {
            content: "\f0ca"
        }

        .fa-list-ol:before {
            content: "\f0cb"
        }

        .fa-strikethrough:before {
            content: "\f0cc"
        }

        .fa-underline:before {
            content: "\f0cd"
        }

        .fa-table:before {
            content: "\f0ce"
        }

        .fa-magic:before {
            content: "\f0d0"
        }

        .fa-truck:before {
            content: "\f0d1"
        }

        .fa-pinterest:before {
            content: "\f0d2"
        }

        .fa-pinterest-square:before {
            content: "\f0d3"
        }

        .fa-google-plus-square:before {
            content: "\f0d4"
        }

        .fa-google-plus:before {
            content: "\f0d5"
        }

        .fa-money:before {
            content: "\f0d6"
        }

        .fa-caret-down:before {
            content: "\f0d7"
        }

        .fa-caret-up:before {
            content: "\f0d8"
        }

        .fa-caret-left:before {
            content: "\f0d9"
        }

        .fa-caret-right:before {
            content: "\f0da"
        }

        .fa-columns:before {
            content: "\f0db"
        }

        .fa-unsorted:before,
        .fa-sort:before {
            content: "\f0dc"
        }

        .fa-sort-down:before,
        .fa-sort-desc:before {
            content: "\f0dd"
        }

        .fa-sort-up:before,
        .fa-sort-asc:before {
            content: "\f0de"
        }

        .fa-envelope:before {
            content: "\f0e0"
        }

        .fa-linkedin:before {
            content: "\f0e1"
        }

        .fa-rotate-left:before,
        .fa-undo:before {
            content: "\f0e2"
        }

        .fa-legal:before,
        .fa-gavel:before {
            content: "\f0e3"
        }

        .fa-dashboard:before,
        .fa-tachometer:before {
            content: "\f0e4"
        }

        .fa-comment-o:before {
            content: "\f0e5"
        }

        .fa-comments-o:before {
            content: "\f0e6"
        }

        .fa-flash:before,
        .fa-bolt:before {
            content: "\f0e7"
        }

        .fa-sitemap:before {
            content: "\f0e8"
        }

        .fa-umbrella:before {
            content: "\f0e9"
        }

        .fa-paste:before,
        .fa-clipboard:before {
            content: "\f0ea"
        }

        .fa-lightbulb-o:before {
            content: "\f0eb"
        }

        .fa-exchange:before {
            content: "\f0ec"
        }

        .fa-cloud-download:before {
            content: "\f0ed"
        }

        .fa-cloud-upload:before {
            content: "\f0ee"
        }

        .fa-user-md:before {
            content: "\f0f0"
        }

        .fa-stethoscope:before {
            content: "\f0f1"
        }

        .fa-suitcase:before {
            content: "\f0f2"
        }

        .fa-bell-o:before {
            content: "\f0a2"
        }

        .fa-coffee:before {
            content: "\f0f4"
        }

        .fa-cutlery:before {
            content: "\f0f5"
        }

        .fa-file-text-o:before {
            content: "\f0f6"
        }

        .fa-building-o:before {
            content: "\f0f7"
        }

        .fa-hospital-o:before {
            content: "\f0f8"
        }

        .fa-ambulance:before {
            content: "\f0f9"
        }

        .fa-medkit:before {
            content: "\f0fa"
        }

        .fa-fighter-jet:before {
            content: "\f0fb"
        }

        .fa-beer:before {
            content: "\f0fc"
        }

        .fa-h-square:before {
            content: "\f0fd"
        }

        .fa-plus-square:before {
            content: "\f0fe"
        }

        .fa-angle-double-left:before {
            content: "\f100"
        }

        .fa-angle-double-right:before {
            content: "\f101"
        }

        .fa-angle-double-up:before {
            content: "\f102"
        }

        .fa-angle-double-down:before {
            content: "\f103"
        }

        .fa-angle-left:before {
            content: "\f104"
        }

        .fa-angle-right:before {
            content: "\f105"
        }

        .fa-angle-up:before {
            content: "\f106"
        }

        .fa-angle-down:before {
            content: "\f107"
        }

        .fa-desktop:before {
            content: "\f108"
        }

        .fa-laptop:before {
            content: "\f109"
        }

        .fa-tablet:before {
            content: "\f10a"
        }

        .fa-mobile-phone:before,
        .fa-mobile:before {
            content: "\f10b"
        }

        .fa-circle-o:before {
            content: "\f10c"
        }

        .fa-quote-left:before {
            content: "\f10d"
        }

        .fa-quote-right:before {
            content: "\f10e"
        }

        .fa-spinner:before {
            content: "\f110"
        }

        .fa-circle:before {
            content: "\f111"
        }

        .fa-mail-reply:before,
        .fa-reply:before {
            content: "\f112"
        }

        .fa-github-alt:before {
            content: "\f113"
        }

        .fa-folder-o:before {
            content: "\f114"
        }

        .fa-folder-open-o:before {
            content: "\f115"
        }

        .fa-smile-o:before {
            content: "\f118"
        }

        .fa-frown-o:before {
            content: "\f119"
        }

        .fa-meh-o:before {
            content: "\f11a"
        }

        .fa-gamepad:before {
            content: "\f11b"
        }

        .fa-keyboard-o:before {
            content: "\f11c"
        }

        .fa-flag-o:before {
            content: "\f11d"
        }

        .fa-flag-checkered:before {
            content: "\f11e"
        }

        .fa-terminal:before {
            content: "\f120"
        }

        .fa-code:before {
            content: "\f121"
        }

        .fa-mail-reply-all:before,
        .fa-reply-all:before {
            content: "\f122"
        }

        .fa-star-half-empty:before,
        .fa-star-half-full:before,
        .fa-star-half-o:before {
            content: "\f123"
        }

        .fa-location-arrow:before {
            content: "\f124"
        }

        .fa-crop:before {
            content: "\f125"
        }

        .fa-code-fork:before {
            content: "\f126"
        }

        .fa-unlink:before,
        .fa-chain-broken:before {
            content: "\f127"
        }

        .fa-question:before {
            content: "\f128"
        }

        .fa-info:before {
            content: "\f129"
        }

        .fa-exclamation:before {
            content: "\f12a"
        }

        .fa-superscript:before {
            content: "\f12b"
        }

        .fa-subscript:before {
            content: "\f12c"
        }

        .fa-eraser:before {
            content: "\f12d"
        }

        .fa-puzzle-piece:before {
            content: "\f12e"
        }

        .fa-microphone:before {
            content: "\f130"
        }

        .fa-microphone-slash:before {
            content: "\f131"
        }

        .fa-shield:before {
            content: "\f132"
        }

        .fa-calendar-o:before {
            content: "\f133"
        }

        .fa-fire-extinguisher:before {
            content: "\f134"
        }

        .fa-rocket:before {
            content: "\f135"
        }

        .fa-maxcdn:before {
            content: "\f136"
        }

        .fa-chevron-circle-left:before {
            content: "\f137"
        }

        .fa-chevron-circle-right:before {
            content: "\f138"
        }

        .fa-chevron-circle-up:before {
            content: "\f139"
        }

        .fa-chevron-circle-down:before {
            content: "\f13a"
        }

        .fa-html5:before {
            content: "\f13b"
        }

        .fa-css3:before {
            content: "\f13c"
        }

        .fa-anchor:before {
            content: "\f13d"
        }

        .fa-unlock-alt:before {
            content: "\f13e"
        }

        .fa-bullseye:before {
            content: "\f140"
        }

        .fa-ellipsis-h:before {
            content: "\f141"
        }

        .fa-ellipsis-v:before {
            content: "\f142"
        }

        .fa-rss-square:before {
            content: "\f143"
        }

        .fa-play-circle:before {
            content: "\f144"
        }

        .fa-ticket:before {
            content: "\f145"
        }

        .fa-minus-square:before {
            content: "\f146"
        }

        .fa-minus-square-o:before {
            content: "\f147"
        }

        .fa-level-up:before {
            content: "\f148"
        }

        .fa-level-down:before {
            content: "\f149"
        }

        .fa-check-square:before {
            content: "\f14a"
        }

        .fa-pencil-square:before {
            content: "\f14b"
        }

        .fa-external-link-square:before {
            content: "\f14c"
        }

        .fa-share-square:before {
            content: "\f14d"
        }

        .fa-compass:before {
            content: "\f14e"
        }

        .fa-toggle-down:before,
        .fa-caret-square-o-down:before {
            content: "\f150"
        }

        .fa-toggle-up:before,
        .fa-caret-square-o-up:before {
            content: "\f151"
        }

        .fa-toggle-right:before,
        .fa-caret-square-o-right:before {
            content: "\f152"
        }

        .fa-euro:before,
        .fa-eur:before {
            content: "\f153"
        }

        .fa-gbp:before {
            content: "\f154"
        }

        .fa-dollar:before,
        .fa-usd:before {
            content: "\f155"
        }

        .fa-rupee:before,
        .fa-inr:before {
            content: "\f156"
        }

        .fa-cny:before,
        .fa-rmb:before,
        .fa-yen:before,
        .fa-jpy:before {
            content: "\f157"
        }

        .fa-ruble:before,
        .fa-rouble:before,
        .fa-rub:before {
            content: "\f158"
        }

        .fa-won:before,
        .fa-krw:before {
            content: "\f159"
        }

        .fa-bitcoin:before,
        .fa-btc:before {
            content: "\f15a"
        }

        .fa-file:before {
            content: "\f15b"
        }

        .fa-file-text:before {
            content: "\f15c"
        }

        .fa-sort-alpha-asc:before {
            content: "\f15d"
        }

        .fa-sort-alpha-desc:before {
            content: "\f15e"
        }

        .fa-sort-amount-asc:before {
            content: "\f160"
        }

        .fa-sort-amount-desc:before {
            content: "\f161"
        }

        .fa-sort-numeric-asc:before {
            content: "\f162"
        }

        .fa-sort-numeric-desc:before {
            content: "\f163"
        }

        .fa-thumbs-up:before {
            content: "\f164"
        }

        .fa-thumbs-down:before {
            content: "\f165"
        }

        .fa-youtube-square:before {
            content: "\f166"
        }

        .fa-youtube:before {
            content: "\f167"
        }

        .fa-xing:before {
            content: "\f168"
        }

        .fa-xing-square:before {
            content: "\f169"
        }

        .fa-youtube-play:before {
            content: "\f16a"
        }

        .fa-dropbox:before {
            content: "\f16b"
        }

        .fa-stack-overflow:before {
            content: "\f16c"
        }

        .fa-instagram:before {
            content: "\f16d"
        }

        .fa-flickr:before {
            content: "\f16e"
        }

        .fa-adn:before {
            content: "\f170"
        }

        .fa-bitbucket:before {
            content: "\f171"
        }

        .fa-bitbucket-square:before {
            content: "\f172"
        }

        .fa-tumblr:before {
            content: "\f173"
        }

        .fa-tumblr-square:before {
            content: "\f174"
        }

        .fa-long-arrow-down:before {
            content: "\f175"
        }

        .fa-long-arrow-up:before {
            content: "\f176"
        }

        .fa-long-arrow-left:before {
            content: "\f177"
        }

        .fa-long-arrow-right:before {
            content: "\f178"
        }

        .fa-apple:before {
            content: "\f179"
        }

        .fa-windows:before {
            content: "\f17a"
        }

        .fa-android:before {
            content: "\f17b"
        }

        .fa-linux:before {
            content: "\f17c"
        }

        .fa-dribbble:before {
            content: "\f17d"
        }

        .fa-skype:before {
            content: "\f17e"
        }

        .fa-foursquare:before {
            content: "\f180"
        }

        .fa-trello:before {
            content: "\f181"
        }

        .fa-female:before {
            content: "\f182"
        }

        .fa-male:before {
            content: "\f183"
        }

        .fa-gittip:before,
        .fa-gratipay:before {
            content: "\f184"
        }

        .fa-sun-o:before {
            content: "\f185"
        }

        .fa-moon-o:before {
            content: "\f186"
        }

        .fa-archive:before {
            content: "\f187"
        }

        .fa-bug:before {
            content: "\f188"
        }

        .fa-vk:before {
            content: "\f189"
        }

        .fa-weibo:before {
            content: "\f18a"
        }

        .fa-renren:before {
            content: "\f18b"
        }

        .fa-pagelines:before {
            content: "\f18c"
        }

        .fa-stack-exchange:before {
            content: "\f18d"
        }

        .fa-arrow-circle-o-right:before {
            content: "\f18e"
        }

        .fa-arrow-circle-o-left:before {
            content: "\f190"
        }

        .fa-toggle-left:before,
        .fa-caret-square-o-left:before {
            content: "\f191"
        }

        .fa-dot-circle-o:before {
            content: "\f192"
        }

        .fa-wheelchair:before {
            content: "\f193"
        }

        .fa-vimeo-square:before {
            content: "\f194"
        }

        .fa-turkish-lira:before,
        .fa-try:before {
            content: "\f195"
        }

        .fa-plus-square-o:before {
            content: "\f196"
        }

        .fa-space-shuttle:before {
            content: "\f197"
        }

        .fa-slack:before {
            content: "\f198"
        }

        .fa-envelope-square:before {
            content: "\f199"
        }

        .fa-wordpress:before {
            content: "\f19a"
        }

        .fa-openid:before {
            content: "\f19b"
        }

        .fa-institution:before,
        .fa-bank:before,
        .fa-university:before {
            content: "\f19c"
        }

        .fa-mortar-board:before,
        .fa-graduation-cap:before {
            content: "\f19d"
        }

        .fa-yahoo:before {
            content: "\f19e"
        }

        .fa-google:before {
            content: "\f1a0"
        }

        .fa-reddit:before {
            content: "\f1a1"
        }

        .fa-reddit-square:before {
            content: "\f1a2"
        }

        .fa-stumbleupon-circle:before {
            content: "\f1a3"
        }

        .fa-stumbleupon:before {
            content: "\f1a4"
        }

        .fa-delicious:before {
            content: "\f1a5"
        }

        .fa-digg:before {
            content: "\f1a6"
        }

        .fa-pied-piper-pp:before {
            content: "\f1a7"
        }

        .fa-pied-piper-alt:before {
            content: "\f1a8"
        }

        .fa-drupal:before {
            content: "\f1a9"
        }

        .fa-joomla:before {
            content: "\f1aa"
        }

        .fa-language:before {
            content: "\f1ab"
        }

        .fa-fax:before {
            content: "\f1ac"
        }

        .fa-building:before {
            content: "\f1ad"
        }

        .fa-child:before {
            content: "\f1ae"
        }

        .fa-paw:before {
            content: "\f1b0"
        }

        .fa-spoon:before {
            content: "\f1b1"
        }

        .fa-cube:before {
            content: "\f1b2"
        }

        .fa-cubes:before {
            content: "\f1b3"
        }

        .fa-behance:before {
            content: "\f1b4"
        }

        .fa-behance-square:before {
            content: "\f1b5"
        }

        .fa-steam:before {
            content: "\f1b6"
        }

        .fa-steam-square:before {
            content: "\f1b7"
        }

        .fa-recycle:before {
            content: "\f1b8"
        }

        .fa-automobile:before,
        .fa-car:before {
            content: "\f1b9"
        }

        .fa-cab:before,
        .fa-taxi:before {
            content: "\f1ba"
        }

        .fa-tree:before {
            content: "\f1bb"
        }

        .fa-spotify:before {
            content: "\f1bc"
        }

        .fa-deviantart:before {
            content: "\f1bd"
        }

        .fa-soundcloud:before {
            content: "\f1be"
        }

        .fa-database:before {
            content: "\f1c0"
        }

        .fa-file-pdf-o:before {
            content: "\f1c1"
        }

        .fa-file-word-o:before {
            content: "\f1c2"
        }

        .fa-file-excel-o:before {
            content: "\f1c3"
        }

        .fa-file-powerpoint-o:before {
            content: "\f1c4"
        }

        .fa-file-photo-o:before,
        .fa-file-picture-o:before,
        .fa-file-image-o:before {
            content: "\f1c5"
        }

        .fa-file-zip-o:before,
        .fa-file-archive-o:before {
            content: "\f1c6"
        }

        .fa-file-sound-o:before,
        .fa-file-audio-o:before {
            content: "\f1c7"
        }

        .fa-file-movie-o:before,
        .fa-file-video-o:before {
            content: "\f1c8"
        }

        .fa-file-code-o:before {
            content: "\f1c9"
        }

        .fa-vine:before {
            content: "\f1ca"
        }

        .fa-codepen:before {
            content: "\f1cb"
        }

        .fa-jsfiddle:before {
            content: "\f1cc"
        }

        .fa-life-bouy:before,
        .fa-life-buoy:before,
        .fa-life-saver:before,
        .fa-support:before,
        .fa-life-ring:before {
            content: "\f1cd"
        }

        .fa-circle-o-notch:before {
            content: "\f1ce"
        }

        .fa-ra:before,
        .fa-resistance:before,
        .fa-rebel:before {
            content: "\f1d0"
        }

        .fa-ge:before,
        .fa-empire:before {
            content: "\f1d1"
        }

        .fa-git-square:before {
            content: "\f1d2"
        }

        .fa-git:before {
            content: "\f1d3"
        }

        .fa-y-combinator-square:before,
        .fa-yc-square:before,
        .fa-hacker-news:before {
            content: "\f1d4"
        }

        .fa-tencent-weibo:before {
            content: "\f1d5"
        }

        .fa-qq:before {
            content: "\f1d6"
        }

        .fa-wechat:before,
        .fa-weixin:before {
            content: "\f1d7"
        }

        .fa-send:before,
        .fa-paper-plane:before {
            content: "\f1d8"
        }

        .fa-send-o:before,
        .fa-paper-plane-o:before {
            content: "\f1d9"
        }

        .fa-history:before {
            content: "\f1da"
        }

        .fa-circle-thin:before {
            content: "\f1db"
        }

        .fa-header:before {
            content: "\f1dc"
        }

        .fa-paragraph:before {
            content: "\f1dd"
        }

        .fa-sliders:before {
            content: "\f1de"
        }

        .fa-share-alt:before {
            content: "\f1e0"
        }

        .fa-share-alt-square:before {
            content: "\f1e1"
        }

        .fa-bomb:before {
            content: "\f1e2"
        }

        .fa-soccer-ball-o:before,
        .fa-futbol-o:before {
            content: "\f1e3"
        }

        .fa-tty:before {
            content: "\f1e4"
        }

        .fa-binoculars:before {
            content: "\f1e5"
        }

        .fa-plug:before {
            content: "\f1e6"
        }

        .fa-slideshare:before {
            content: "\f1e7"
        }

        .fa-twitch:before {
            content: "\f1e8"
        }

        .fa-yelp:before {
            content: "\f1e9"
        }

        .fa-newspaper-o:before {
            content: "\f1ea"
        }

        .fa-wifi:before {
            content: "\f1eb"
        }

        .fa-calculator:before {
            content: "\f1ec"
        }

        .fa-paypal:before {
            content: "\f1ed"
        }

        .fa-google-wallet:before {
            content: "\f1ee"
        }

        .fa-cc-visa:before {
            content: "\f1f0"
        }

        .fa-cc-mastercard:before {
            content: "\f1f1"
        }

        .fa-cc-discover:before {
            content: "\f1f2"
        }

        .fa-cc-amex:before {
            content: "\f1f3"
        }

        .fa-cc-paypal:before {
            content: "\f1f4"
        }

        .fa-cc-stripe:before {
            content: "\f1f5"
        }

        .fa-bell-slash:before {
            content: "\f1f6"
        }

        .fa-bell-slash-o:before {
            content: "\f1f7"
        }

        .fa-trash:before {
            content: "\f1f8"
        }

        .fa-copyright:before {
            content: "\f1f9"
        }

        .fa-at:before {
            content: "\f1fa"
        }

        .fa-eyedropper:before {
            content: "\f1fb"
        }

        .fa-paint-brush:before {
            content: "\f1fc"
        }

        .fa-birthday-cake:before {
            content: "\f1fd"
        }

        .fa-area-chart:before {
            content: "\f1fe"
        }

        .fa-pie-chart:before {
            content: "\f200"
        }

        .fa-line-chart:before {
            content: "\f201"
        }

        .fa-lastfm:before {
            content: "\f202"
        }

        .fa-lastfm-square:before {
            content: "\f203"
        }

        .fa-toggle-off:before {
            content: "\f204"
        }

        .fa-toggle-on:before {
            content: "\f205"
        }

        .fa-bicycle:before {
            content: "\f206"
        }

        .fa-bus:before {
            content: "\f207"
        }

        .fa-ioxhost:before {
            content: "\f208"
        }

        .fa-angellist:before {
            content: "\f209"
        }

        .fa-cc:before {
            content: "\f20a"
        }

        .fa-shekel:before,
        .fa-sheqel:before,
        .fa-ils:before {
            content: "\f20b"
        }

        .fa-meanpath:before {
            content: "\f20c"
        }

        .fa-buysellads:before {
            content: "\f20d"
        }

        .fa-connectdevelop:before {
            content: "\f20e"
        }

        .fa-dashcube:before {
            content: "\f210"
        }

        .fa-forumbee:before {
            content: "\f211"
        }

        .fa-leanpub:before {
            content: "\f212"
        }

        .fa-sellsy:before {
            content: "\f213"
        }

        .fa-shirtsinbulk:before {
            content: "\f214"
        }

        .fa-simplybuilt:before {
            content: "\f215"
        }

        .fa-skyatlas:before {
            content: "\f216"
        }

        .fa-cart-plus:before {
            content: "\f217"
        }

        .fa-cart-arrow-down:before {
            content: "\f218"
        }

        .fa-diamond:before {
            content: "\f219"
        }

        .fa-ship:before {
            content: "\f21a"
        }

        .fa-user-secret:before {
            content: "\f21b"
        }

        .fa-motorcycle:before {
            content: "\f21c"
        }

        .fa-street-view:before {
            content: "\f21d"
        }

        .fa-heartbeat:before {
            content: "\f21e"
        }

        .fa-venus:before {
            content: "\f221"
        }

        .fa-mars:before {
            content: "\f222"
        }

        .fa-mercury:before {
            content: "\f223"
        }

        .fa-intersex:before,
        .fa-transgender:before {
            content: "\f224"
        }

        .fa-transgender-alt:before {
            content: "\f225"
        }

        .fa-venus-double:before {
            content: "\f226"
        }

        .fa-mars-double:before {
            content: "\f227"
        }

        .fa-venus-mars:before {
            content: "\f228"
        }

        .fa-mars-stroke:before {
            content: "\f229"
        }

        .fa-mars-stroke-v:before {
            content: "\f22a"
        }

        .fa-mars-stroke-h:before {
            content: "\f22b"
        }

        .fa-neuter:before {
            content: "\f22c"
        }

        .fa-genderless:before {
            content: "\f22d"
        }

        .fa-facebook-official:before {
            content: "\f230"
        }

        .fa-pinterest-p:before {
            content: "\f231"
        }

        .fa-whatsapp:before {
            content: "\f232"
        }

        .fa-server:before {
            content: "\f233"
        }

        .fa-user-plus:before {
            content: "\f234"
        }

        .fa-user-times:before {
            content: "\f235"
        }

        .fa-hotel:before,
        .fa-bed:before {
            content: "\f236"
        }

        .fa-viacoin:before {
            content: "\f237"
        }

        .fa-train:before {
            content: "\f238"
        }

        .fa-subway:before {
            content: "\f239"
        }

        .fa-medium:before {
            content: "\f23a"
        }

        .fa-yc:before,
        .fa-y-combinator:before {
            content: "\f23b"
        }

        .fa-optin-monster:before {
            content: "\f23c"
        }

        .fa-opencart:before {
            content: "\f23d"
        }

        .fa-expeditedssl:before {
            content: "\f23e"
        }

        .fa-battery-4:before,
        .fa-battery-full:before {
            content: "\f240"
        }

        .fa-battery-3:before,
        .fa-battery-three-quarters:before {
            content: "\f241"
        }

        .fa-battery-2:before,
        .fa-battery-half:before {
            content: "\f242"
        }

        .fa-battery-1:before,
        .fa-battery-quarter:before {
            content: "\f243"
        }

        .fa-battery-0:before,
        .fa-battery-empty:before {
            content: "\f244"
        }

        .fa-mouse-pointer:before {
            content: "\f245"
        }

        .fa-i-cursor:before {
            content: "\f246"
        }

        .fa-object-group:before {
            content: "\f247"
        }

        .fa-object-ungroup:before {
            content: "\f248"
        }

        .fa-sticky-note:before {
            content: "\f249"
        }

        .fa-sticky-note-o:before {
            content: "\f24a"
        }

        .fa-cc-jcb:before {
            content: "\f24b"
        }

        .fa-cc-diners-club:before {
            content: "\f24c"
        }

        .fa-clone:before {
            content: "\f24d"
        }

        .fa-balance-scale:before {
            content: "\f24e"
        }

        .fa-hourglass-o:before {
            content: "\f250"
        }

        .fa-hourglass-1:before,
        .fa-hourglass-start:before {
            content: "\f251"
        }

        .fa-hourglass-2:before,
        .fa-hourglass-half:before {
            content: "\f252"
        }

        .fa-hourglass-3:before,
        .fa-hourglass-end:before {
            content: "\f253"
        }

        .fa-hourglass:before {
            content: "\f254"
        }

        .fa-hand-grab-o:before,
        .fa-hand-rock-o:before {
            content: "\f255"
        }

        .fa-hand-stop-o:before,
        .fa-hand-paper-o:before {
            content: "\f256"
        }

        .fa-hand-scissors-o:before {
            content: "\f257"
        }

        .fa-hand-lizard-o:before {
            content: "\f258"
        }

        .fa-hand-spock-o:before {
            content: "\f259"
        }

        .fa-hand-pointer-o:before {
            content: "\f25a"
        }

        .fa-hand-peace-o:before {
            content: "\f25b"
        }

        .fa-trademark:before {
            content: "\f25c"
        }

        .fa-registered:before {
            content: "\f25d"
        }

        .fa-creative-commons:before {
            content: "\f25e"
        }

        .fa-gg:before {
            content: "\f260"
        }

        .fa-gg-circle:before {
            content: "\f261"
        }

        .fa-tripadvisor:before {
            content: "\f262"
        }

        .fa-odnoklassniki:before {
            content: "\f263"
        }

        .fa-odnoklassniki-square:before {
            content: "\f264"
        }

        .fa-get-pocket:before {
            content: "\f265"
        }

        .fa-wikipedia-w:before {
            content: "\f266"
        }

        .fa-safari:before {
            content: "\f267"
        }

        .fa-chrome:before {
            content: "\f268"
        }

        .fa-firefox:before {
            content: "\f269"
        }

        .fa-opera:before {
            content: "\f26a"
        }

        .fa-internet-explorer:before {
            content: "\f26b"
        }

        .fa-tv:before,
        .fa-television:before {
            content: "\f26c"
        }

        .fa-contao:before {
            content: "\f26d"
        }

        .fa-500px:before {
            content: "\f26e"
        }

        .fa-amazon:before {
            content: "\f270"
        }

        .fa-calendar-plus-o:before {
            content: "\f271"
        }

        .fa-calendar-minus-o:before {
            content: "\f272"
        }

        .fa-calendar-times-o:before {
            content: "\f273"
        }

        .fa-calendar-check-o:before {
            content: "\f274"
        }

        .fa-industry:before {
            content: "\f275"
        }

        .fa-map-pin:before {
            content: "\f276"
        }

        .fa-map-signs:before {
            content: "\f277"
        }

        .fa-map-o:before {
            content: "\f278"
        }

        .fa-map:before {
            content: "\f279"
        }

        .fa-commenting:before {
            content: "\f27a"
        }

        .fa-commenting-o:before {
            content: "\f27b"
        }

        .fa-houzz:before {
            content: "\f27c"
        }

        .fa-vimeo:before {
            content: "\f27d"
        }

        .fa-black-tie:before {
            content: "\f27e"
        }

        .fa-fonticons:before {
            content: "\f280"
        }

        .fa-reddit-alien:before {
            content: "\f281"
        }

        .fa-edge:before {
            content: "\f282"
        }

        .fa-credit-card-alt:before {
            content: "\f283"
        }

        .fa-codiepie:before {
            content: "\f284"
        }

        .fa-modx:before {
            content: "\f285"
        }

        .fa-fort-awesome:before {
            content: "\f286"
        }

        .fa-usb:before {
            content: "\f287"
        }

        .fa-product-hunt:before {
            content: "\f288"
        }

        .fa-mixcloud:before {
            content: "\f289"
        }

        .fa-scribd:before {
            content: "\f28a"
        }

        .fa-pause-circle:before {
            content: "\f28b"
        }

        .fa-pause-circle-o:before {
            content: "\f28c"
        }

        .fa-stop-circle:before {
            content: "\f28d"
        }

        .fa-stop-circle-o:before {
            content: "\f28e"
        }

        .fa-shopping-bag:before {
            content: "\f290"
        }

        .fa-shopping-basket:before {
            content: "\f291"
        }

        .fa-hashtag:before {
            content: "\f292"
        }

        .fa-bluetooth:before {
            content: "\f293"
        }

        .fa-bluetooth-b:before {
            content: "\f294"
        }

        .fa-percent:before {
            content: "\f295"
        }

        .fa-gitlab:before {
            content: "\f296"
        }

        .fa-wpbeginner:before {
            content: "\f297"
        }

        .fa-wpforms:before {
            content: "\f298"
        }

        .fa-envira:before {
            content: "\f299"
        }

        .fa-universal-access:before {
            content: "\f29a"
        }

        .fa-wheelchair-alt:before {
            content: "\f29b"
        }

        .fa-question-circle-o:before {
            content: "\f29c"
        }

        .fa-blind:before {
            content: "\f29d"
        }

        .fa-audio-description:before {
            content: "\f29e"
        }

        .fa-volume-control-phone:before {
            content: "\f2a0"
        }

        .fa-braille:before {
            content: "\f2a1"
        }

        .fa-assistive-listening-systems:before {
            content: "\f2a2"
        }

        .fa-asl-interpreting:before,
        .fa-american-sign-language-interpreting:before {
            content: "\f2a3"
        }

        .fa-deafness:before,
        .fa-hard-of-hearing:before,
        .fa-deaf:before {
            content: "\f2a4"
        }

        .fa-glide:before {
            content: "\f2a5"
        }

        .fa-glide-g:before {
            content: "\f2a6"
        }

        .fa-signing:before,
        .fa-sign-language:before {
            content: "\f2a7"
        }

        .fa-low-vision:before {
            content: "\f2a8"
        }

        .fa-viadeo:before {
            content: "\f2a9"
        }

        .fa-viadeo-square:before {
            content: "\f2aa"
        }

        .fa-snapchat:before {
            content: "\f2ab"
        }

        .fa-snapchat-ghost:before {
            content: "\f2ac"
        }

        .fa-snapchat-square:before {
            content: "\f2ad"
        }

        .fa-pied-piper:before {
            content: "\f2ae"
        }

        .fa-first-order:before {
            content: "\f2b0"
        }

        .fa-yoast:before {
            content: "\f2b1"
        }

        .fa-themeisle:before {
            content: "\f2b2"
        }

        .fa-google-plus-circle:before,
        .fa-google-plus-official:before {
            content: "\f2b3"
        }

        .fa-fa:before,
        .fa-font-awesome:before {
            content: "\f2b4"
        }

        .sr-only {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            border: 0
        }

        .sr-only-focusable:active,
        .sr-only-focusable:focus {
            position: static;
            width: auto;
            height: auto;
            margin: 0;
            overflow: visible;
            clip: auto
        }
    </style>
    <style data-savepage-href="./style.css">
        /*savepage-import-url=https://fonts.googleapis.com/css?family=Oxygen|Rubik:300*/
        /* latin-ext */
        @font-face {
            font-family: 'Oxygen';
            font-style: normal;
            font-weight: 400;
            src: local('Oxygen Regular'), local('Oxygen-Regular'),
                /*savepage-url=https://fonts.gstatic.com/s/oxygen/v10/2sDfZG1Wl4LcnbuKgE0mV0Q.woff2*/
                url() format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: 'Oxygen';
            font-style: normal;
            font-weight: 400;
            src: local('Oxygen Regular'), local('Oxygen-Regular'),
                /*savepage-url=https://fonts.gstatic.com/s/oxygen/v10/2sDfZG1Wl4LcnbuKjk0m.woff2*/
                url() format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* cyrillic-ext */
        @font-face {
            font-family: 'Rubik';
            font-style: normal;
            font-weight: 300;
            src:
                /*savepage-url=https://fonts.gstatic.com/s/rubik/v11/iJWZBXyIfDnIV5PNhY1KTN7Z-Yh-WYiFWkU1Z4Y.woff2*/
                url(data:font/woff2;base64,d09GMgABAAAAABUgABAAAAAANZQAABTDAAEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAGnwbIBw0BmA/U1RBVEQAglgRCArXKMcOC4ICAAE2AiQDhAAEIAWEYgcgDAcbZCujopy0shRFuZykyT8PbGfUd4YVNlAd2xKF0UShhGa5dfgg+eMdjtX7IUklezw/p/clyf8vyY+QoMFCSAhEIKhFgDhSggU8iKYUrUBFhNa3yszZApuzrXTtzByeXgb37n6NisSmaTabbGZKk/Qmlk8VnDi5bqSg9CQF4g7LpXDpDJLpyUTt3ddMIjMR+JKv1szP6iRcqaYtliA05L8SJDmkXDQvVS9XKt27aY4LEuDheAzxQRivEOH8MeD5AQ8lUjF0KuWvlQIdUupCrtx53IVcqXZVqHTduHbf2jdfXZ8dEthJWuH6Up1QHXmw5hf8oWOo2vvwB5ZZLeckNXvFHDu4RdK2NWCAAwNj0344CEA23hGDGHIYxNsYqCRGslaqnK6IlngZA6eMgZtArlIje3jkek1yqw65S5fcbTWmMwF425kYwIeJQCYKZjTbqoECEgBgZQUAAAAGGDCQzAAAgOB9f5JnZ5sfot6to4MQJUH31CQehWmABYDvnAcArPSxMS8YkgVjAr8GwH+V/KLgcbIt5v65/GcD4p4nNQbgoQNlCl9gMdZNDCghkxBB0WPc1z2KAcCfbd4WxgUMSBDCAAAwDNMAAAEY4BivLDUxEEyyjNQkMaPi1ykGCSTZTvaRa8jTXey27irQk13rrT7oq/56I1nxMffvCiDbyF7STx7sXLd2Zw/2eMvd6N0+7vs3nKVgjmT8D/PBkzBQUEqgY+TgUqlRizZj1toJ5+ASAACEs4vgIOMUySWKW7RKMarEqiZXI84qCrXieSjVSdBArVGiJkm8NJpp6bTSa9MiWbsUHQw6peqSxiddtww9MvXK0idbvxwDcg3KMyTfsAIjCvkVWa3YqBJrqNTDAFtZAgAAmKn4s08D/k1AeALAvQDYlccAx56WHCeOiEgkMN4VGBBA+InMym6VpApc+IAU4QxwkAjNbQAskapbGgpGDartCHzYlymKUCiEwRK5RK/hJ3JVwmCxQqrPIU18JC0xydXhUTy1lBYKpXQmQQZL5FKhVI5M+To1SolVC9UCdSJXGCyRGksViQp7QCkJfZ0LiDhpHCot0B/azBCtFAqUXTE4Tzi+VpFIKIsSCPLwQggzB9LYfdfF2LQjd21wFkLxY0R1WbUsZCi3DkouoL2g6KAvyCCYFFJ5gK0pEmLd3d5QkkMuvNj5IQsCPZ9uEuPtsen7Wh5Zz2+nm8IooBuDHw8xztVcssH337LsaGYcSUxVs1ddUtgDMyd6z3Hgca3I3dtFpm/ep+jvC9+x8k3dujE8pcaCAFJhGJAGiKXXr79IGwYSLh1qgmX0sqHXyzNNISBUOQekL/GQBbpDY2sLV2cBJeAXPojNVE/IsXuHrdo0v6VAanIcqEhGg1hLkpYob5VA2/jWIyIutkm4sOjSaEe66RaJ6A9Xm67lLhVsZGIFJ+UHoF6ITIlNYyx/XUvWe2vyKsdudUq70DluLQYXvgGxPPIIIoJkgxg3wnA/wwTk5lAe5N5hyK51Ycnse8crQ60LO0CNatY08M8ZceiYBDeghnsdbOTX3KE/JhmP3pvBzWcQkd23lcxjKXfjV+JmIBRuIceY6IZlhSVTwxudBfQ8ofT5TbFXeNlFAtJhKWKb9bkwVjAy3cUHpHBwd9dQXMm5Y9fx2vUYa8EL6zhi6TRVHYto+obz+dPiWB61xv018sE4Mp7RoCsapr04pXkIsQwQf6+J1AAWzk7mkknRJ410vdEMXk9x5feFUJ2w6ncWuD5m2TFDiLCF+DKBm2LT1zTb6/eN6vX9yCELWO9+dT5knhvybaiAG+mEKYmB5WhPDtJjFgO0Wp2Nh7EuAY/XLYVK92S3WasD5RxQkFFh5uLR+CAITXY5aZ1VbCoMu29YrAEAiEFTruw909mCPiXZl/itrDOye6Po71DTaRnT32BPiaSqDNdCmhspMpnLH2TjFvCWA6eDu7jo6MAKuiTpwxGLuZyUjRRRVMtU9IIuiYdG0A+bbI0Yq7LP0ClRFwcvr8AKjcphF87MEfPsRsSeEJQB8W8za5RA5lhHdXIBhRJcmaEb0a1h4TLoLKjao64eU7+Eyf47x0HcDKQG6k4J05n65Dcycoq35K0aT3f5G4rOk6TcXt/amvfmdnWE2epL4jkHc+WuLVgB5WGgjB9HQRPhnjUNh+4DNRGP8zQybkXCdcHKozCZEHV8z9kl5SjM++e8pBHSgjluvO5+zYJLW1IYW5ErpIRo9xFitqzvRm4zWOf+FWPh1gor/3rPLxhJpbcG1rt+gtIhwcHIFaxJhU/OEx85bRUHWn7WcGTNQRQrK3vfyaQ+pWdLfNfWyRoPxKwSiUv7zbImm8Iysbk2d4N0bKCX29vJn5PwDUlL/ECNAlz8VlWdbchoNPKZMq/N30IlV44+Nw3zMyveKTn1cBumxU0ZEG22JaAB46qp/5kP0hyaDS828UgWmMN/cQ+I8ykxcivwzdaX5gkfPbOywcRJlLF1tGCH17OtvR41SbclPKf73mhIaDJiRs56Ibiw6qwtscil99lUc/L6osRATWVjujuZ1TWW9+SclKDIo6OzDVU39sQ0qmFjyWpWU0MFKJb03+3Zz/PkvOezk5SUVX20BM0F5Z9t+6oRt6K+rw3Hd8AoCqB93FHYOp0rQFbTiqVyjoXu1HqC2FJsVGR0n6di2KjfqM8C+xEPKj43qKCrVufkT+FNPAcPbyyeGs11OOS1lkxhjTKHDGsqmFqdU5m7atBHjMqMMsye1urRZGcJ6f5CcTvPyCNGh3wgL+L+aFpYcM3WjdxbWlJYBxIVN+I7/5xd3+Bd1WzfRLAxexVpkG40e/pownf8YOa9hIQUDF2QFDVgbELXWXOVJ+B9k7v54vuvlfsND96lk12qlJJE44C7lntaGpdelGdJ+/NuByPknaKZ8nlThCHXFn0hMsqOAkiEAkh/z33G0BM6q0pTWSifEblRVbo6tu5mENGtI+s5XYyBIUvTfd7sYnNrftpqlwAtow6gcFm8y2RITtoRZdl9mCukr1L85yzWsGuaAtIQ77ToDAazTuE0QDcKoLnNTvrdBVtSkbE+R9NRJKs/SojLXm+1rKp3hUzOEVisCsF0WUuuwRfNZDBYkaEr18uajC6saIxGI9JVs2Sba+vwakbD4DW1HvMyw4PXRKtBEZYXt60649IW5LgSUkqDqyIYBRMRkpSU9ptT4NLM6td7Dc99l2VKlds5TDJDxbpM6dk5xtTIqmguNzoiWUt4k/+ObfcNNKsFoVuJqbMb56SLfAn/BVaiT0HKgjAmus557zAiPjdv3Y7XzvuHgbDWT5edCWVGrcu5Z+07ntP1z3Lu4TDdO7zQE2ykKP43HTIucw58/eleDN6j010qjV191b6YR8Wnfu/KvTKl6WsvwfyEtiqD5Gh1cqG52pDkFHiUrjrz6xFWpLObYuUqa9TI9EUuTyrhbkuokKWW1+cPLXVm/OX4ZyF+TiNtFR1OpTFeY5d5FB8U8e2ZelGAC0b0AqLErxufNFhY1C4uw/vd8qhmg/KTVK4rdLb8zhNyd1Esi45oU2KK6S2ij6a/lDmbTD+/c/pNNzLTj9IQQWfUhr7nUFDP00Lqi4JHG3JtqatinVpjS4XbggJIwA2gEnNtgVG5VBapMXpTHomYpyT0VUpVsFwdnO5oS9dX6mL+iXki5pWQElVefv1IKoyiBbSXu4zEKMDNnCsW7UBSlAQERMAEMk4UYidQrNih7YtJUlfs0kcW9yvxZEbvxl4+Iumx5HJCYz35zNOqJY5/PjFJil+40aayPXlcffii9Ld4ti835zyY+e9TfjXW8T7+04pix4a6W79GgpwUfWZ1WFrCn9tRoITGxP5kFak9A1f2dfb3dqUmtTUWlu/N3VJRWWMpt5W5trzfG9NyySLJ+LD1Kn4ULVXnjnNvz73pBd4ERv4zttovw4xOXX7aV+FpFBWgjPo8Sir+NjwjHxBIDLbtGb6EMT7EvaBv1NNKMkN3L7f9K8u4t7z01wXoNea9nPeTI6n+bUjh/2P9YnPOIZ4Uzanebtm7FNVqqs5lUz08IX2KIkKoZdaJz3P/YbiaaikCnCEGi8Po+zxE4xdblKXdPb62/nxdW3d2LTkEhOj/MtJsVUdaND5rucUd8XaTUgsJu1AAjX12CgW4UbPoOnmZtveIEZIN7OEyNMd09Mx02LlaeUMOr/riS0Lp389ese3ROZdC5r0LhAiRju+kt/hbWgYlFLzn9GyD35w5idspL8LtmVN+U4OlXVVQFFURRF2lJdR8hNjTXexq6O0ihnE3XhORLNngqhIQoSIaZCYEoY4FKhRAv/2yD48n9/0VnAcz32x5l1gucSToEaj/ptyo+U3wxlagOVkMwNbQP+76yR82FDM+6GubjJanhr0ZRMtEirBoluHUITXyTtIYCiTtEuDjAuuD4d5Q3J45OWj25LTEm1zKmQYpP5p/ByPjEcM9XY3lrekCqyGq62XFJxrlpQ1+U9bUyst6d5fpFHwZfw97e8cMtHJYemnzflHhVdS303eFR8yb+nV+f/mgoY9yWJY7fzv5bpAU5xylJfSDloMveZa/kE2Wqw+/ZHkQrLjEweODlESdMnEWIfwa8+n36974ON6oO/t+xhINv9GZ1ohvmqX0I7SInk+67pBnKV6piE1uzsxY+eh6bZw6tK8xudRxe9J8T/q3GbOFtgTrzS69vCRKPRv7RGwJQ2aUNsVAJxWg3l/lpE/ITLearqAg6hHqg/rWNxnL7kx7GKmmSly/7+A95t6741f53cHXhhjDs1TVGrd6I+uNnm5/+4x5xXyucVGbY4WEvnKW/oBRHkNiYJ9SpVpcvB5tU5kbFSPXn73u/WFocjz+rjk4RpzkWsAZmlbjNTnvnrP/bSnXCyzVsbqAFEMK+DKPD3atanZ72lw93uxu848FeW+Xde+O7qVNghlpbuqqjlnV2V7LO36HyJwuvhcQRB/lcEzjCz/9qxLPLaQFk/RVzs1ojiKV4uOPiVVFso+wRlyHrsvJD8Rpbb1AK38mufwU5gdpvXLLJT5gQn7F/f9GIO178c415i+CEpXkegcgOubVLYM5kUL4XpFU0nl/UnFNTmJHkThL0ppW1pRQPvn5kPmW6Gxk1fBdZfXmzOtK+Hd2LPY/tZ/6f8o4Zk4ggtl2IDfUjnMpx/IMzHiyWVXpCsdMBYbfJNDKrnLTgqc5AyqfnGeft4ihZcBoX5UeN7dmGHyYmTEwmMXQVXgt5nSbLOoYot+hGbTdWlamSTd6KvEmsRhvipPG9Nsus25HjOb0rH/olRIxfPkLS/rs7z/ahaXf3Ze8ctfbL2gOSakA7OHsXI6Guz2TGXymBEj+UbERnLN/G4fM4FcJ/SiQN8v/VgJRq389W/tbx/QMX9NcprYfeGS802hISTzB1G5yNZ9Xl8/STfDYjz8j9qFwCcEZHuAQEpwavr1ptNGnyanON2jKatLue6ZG9XJCgS07v7ypyM39gyVBt3Mir93sic4t9uh1rlRDiqk25WCppDLJnJBXY64sdiu2WkNOIgkdoHS5bn+qWYoCiI0C6EO/rg8G9lpgYezz35wBv/onQ4kWJri2rWX0WOxPAp9WCoVkJh7n3CiLkwRxasxVi+ITZxY0DOjyZ+nLgmv2rCc6ZdQcLaDnqMUJVaelh4Xu6S/rfALmP8n5aA2jn/C71fHK9u+Ew+I1L0HjE7Qx4avBr59B72/BWNI7I13we2osW3hZZqlCeYs0d0dqlnkBuyWlfOZvR54AQEkMgAPrJxcifmltfvETtY2ePdgfGsgH7XE2kAC4nrk2Svix+nbbE3bA/Ywo8OPlNilcMZE4uJ8HgXV4UXLulIvKsngLZ0HcJ4bMO6V53gntMyfN8lCIPSCy2bD+AZMUxpbsApuAcQgMmEoo5Z8//n+TaDTWdWMsqDI5sixbgL8sk6WIVC7eJ1nZrDZDBLiqqjntVg+UwHad+/TEjS8KYzTDdZHOnBAQTTUTB9FcNvXyNRMfP893FyvqTZ3qTVxqJp+itWzi2Ib0uiu4LTkcN9nAJwLzGgAALir/+ODDVF98/59/gXZH56kt8NIpna57GfLAd4UXwOnbawGx/9MHodNwvzEFLMRauQQQpiDkbdX+3vAYYU0QjSCAEqgBAaQq0GLyDnlCJFrJ5S9tdlEqDFyAL0mmn6Lnl7W/5/eJgQTAjo+CsF0/7FhwT2mYVAGZoAXWjSsBTuBLQdgnhJ0Gf3WvSdzfs0ynL0lqMgW4GDI6+CHMlZfo6DMdc2vxK+BLlghuGbcl+XlXIrHb7TVagD2KDi0rUiihmZauv0wMaoB/1X1yGADgYe/827hruVmQ9xtFEF8CgFd/nxwDAHhnza93bNr/f6YndgBgAw4AABjAb7FSZI9BOLUNwGA8/gwmB8B3Cq0LvK2l/8TRo8DtJzgSSG4oJFYOGXVCpY+gsjrIqgkyRwzqOY5FjEBS/uKdRdrWgqqv87ZL7yhNBQE+DXlD5PaMiKnyqG9vFlc+pm5WekHaYq+I6FVUPMhLn6C7FLcNwrpTXqe3ik0lJcbQPm7RjlLG1vuUwPV6SWhJ3aIcraM9tdwXlAvc/U5YvqVrNbjzNzcNtqirCOIqAG0PoZYfCevDoB1GHCjYBhL72OWGLZfCrhgCPj5APxOop6EMxTs7AbRldWpbMW3xf9p2o0evtJ24camWEJgWgR6hWkP7aE99eB6nHlADMGQCzDknwoYLABRfmeARgJCN6Z4U5gxsfkvzYj1FGBErMnBnkCLp+ZwzANdgIHfmGhwYePwaAjJcd5O8a1gQHvIaNsQk6hoG0lJwjVBw/FeLIGx7GwyAhx2EG1sCrnQGeK/9VqWGDJvk18On26gYBslSpItRHQ3qtCut0WaifX1TF78hvT1rFxjF1sRGt6GOrq6xBCVj1PDRM4eenk8PC3WojjSHDCwQSocmu1+nrswYNErN1/OnG69OnbCZdIS08qC+6Xj9WvkZ6KQUYOdycMqWJrnQpOW0oblKp33WY8QVozQisVZsuDdXa28lGy6G6VSNfroe/Laek5kvXdbgHmrVkJaL0aq/ZrarbF2LVoMIGO9t5TqD5vPYyrexPQA=) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }

        /* cyrillic */
        @font-face {
            font-family: 'Rubik';
            font-style: normal;
            font-weight: 300;
            src:
                /*savepage-url=https://fonts.gstatic.com/s/rubik/v11/iJWZBXyIfDnIV5PNhY1KTN7Z-Yh-WYiFU0U1Z4Y.woff2*/
                url(data:font/woff2;base64,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) format('woff2');
            unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }

        /* hebrew */
        @font-face {
            font-family: 'Rubik';
            font-style: normal;
            font-weight: 300;
            src:
                /*savepage-url=https://fonts.gstatic.com/s/rubik/v11/iJWZBXyIfDnIV5PNhY1KTN7Z-Yh-WYiFVUU1Z4Y.woff2*/
                url(data:font/woff2;base64,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) format('woff2');
            unicode-range: U+0590-05FF, U+20AA, U+25CC, U+FB1D-FB4F;
        }

        /* latin-ext */
        @font-face {
            font-family: 'Rubik';
            font-style: normal;
            font-weight: 300;
            src:
                /*savepage-url=https://fonts.gstatic.com/s/rubik/v11/iJWZBXyIfDnIV5PNhY1KTN7Z-Yh-WYiFWUU1Z4Y.woff2*/
                url(data:font/woff2;base64,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) format('woff2');
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }

        /* latin */
        @font-face {
            font-family: 'Rubik';
            font-style: normal;
            font-weight: 300;
            src:
                /*savepage-url=https://fonts.gstatic.com/s/rubik/v11/iJWZBXyIfDnIV5PNhY1KTN7Z-Yh-WYiFV0U1.woff2*/
                url(data:font/woff2;base64,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) format('woff2');
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        html,
        body {
            width: 100%;
            height: 100%;
            box-sizing: border-box;
            font-family: "Rubik", Arial, sans-serif;
            font-size: 12px;
            letter-spacing: 0.6px;
        }

        *,
        *:before,
        *:after {
            box-sizing: inherit;
        }

        body {
            background: -webkit-linear-gradient(#0f2027, #203a43, #2c5364);
            background: linear-gradient(#0f2027, #203a43, #2c5364);
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }


        .chrome-window {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            display: block;
            margin-right: 0px;
            margin: 20px auto;
            width: 758px !important;
            border-radius: 2px;
            box-shadow: 2px 2px 3px rgba(0, 0, 0, .15);
            padding: 71px 0px 0px;
            background:
                /*savepage-url=https://www.valeomarketing.com/wp-content/uploads/2013/12/chrome_top.png*/
                var(--savepage-url-13) top no-repeat white;
        }


        .chrome-window img {
            display: block;
            margin: auto;
            max-width: 100%;
        }



        .hidden {
            display: none;
        }

        .halftone {
            position: absolute;
            width: 45vw;
            right: 0;
            bottom: 0;
            z-index: -2;
        }

        .images {
            width: 40px;
            /* you can use % */
            height: auto;
        }


        .header {
            text-align: center;
            padding: 1 0px 20px 9%;
            font-size: 15.6px;

        }




        svg#gradient {
            width: 100px;
            height: 40px;
            vertical-align: bottom;
            pointer-events: none;
        }

        svg#gradient text {
            fill:
                /*savepage-url=#linearGradient*/
                url();
        }

        #status {
            text-align: center;
            height: 20px;
            margin-top: -30px;
            margin-bottom: 30px;
            color: #636779;
        }

        .start {
            background: -webkit-linear-gradient(#0f2027, #203a43, #2c5364);
            background: linear-gradient(#0f2027, #203a43, #2c5364);
            box-shadow: 0 16px 28px 0 rgba(0, 0, 0, 0.8), 0 25px 55px 0 rgba(0, 0, 0, 0.21);
            width: 760px;

            text-align: center;
            color: white;
            padding: 21px 210px;
            cursor: pointer;
        }




        .actions .minus-add {
            font-size: 18px;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            padding: 0;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
        }

        .actions .minus-add div {
            cursor: pointer;
            margin: 1px;
            padding: 5px;
            margin-bottom: 10px;
            -webkit-box-flex: .5;
            -webkit-flex: .5;
            -ms-flex: .5;
            flex: .5;
        }

        .actions .minus-add div:hover {
            color: #DADADB;
        }

        .actions .minus-add div:active {
            color: #353741;
        }

        @-webkit-keyframes colors {
            0% {
                stroke: #B8D087;
            }

            50% {
                stroke: #00996D;
            }

            100% {
                stroke: #B8D087;
            }
        }

        @keyframes colors {
            0% {
                stroke: #B8D087;
            }

            50% {
                stroke: #00996D;
            }

            100% {
                stroke: #B8D087;
            }
        }

        @-webkit-keyframes dash {
            0% {
                stroke-dashoffset: 185;
            }

            50% {
                stroke-dashoffset: 175;
            }

            100% {
                stroke-dashoffset: 185;
            }
        }

        @keyframes dash {
            0% {
                stroke-dashoffset: 185;
            }

            50% {
                stroke-dashoffset: 175;
            }

            100% {
                stroke-dashoffset: 185;
            }

        }

        .side-menu {
            font-family: 'Roboto', sans-serif;
            position: fixed;
            top: 0;
            left: 0;
            margin: 0;
            padding: 0;
            height: 100%;
            width: 60px;
            list-style-type: none;
            background: -webkit-linear-gradient(#373b44, #4286f4);
            overflow: hidden;
            transition: width .5s;
        }

        .side-menu:hover {
            width: 300px;
        }

        .side-menu li {
            width: 300px;
        }

        .side-menu li span {
            font-size: 1rem;
            margin: 20px 30px 0 22px;
        }

        .side-menu li a {
            display: block;
            font-size: .9rem;
            text-decoration: none;
            color: #FFF;
            height: 60px;
        }

        .side-menu li a:hover,
        .side-menu li:first-child a {
            background: #14081d;
            display: block;
        }
    </style>


    <style id="savepage-cssvariables">
        :root {
            --savepage-url-13: url(data:image/png;base64,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);
        }
    </style>
    <script id="savepage-shadowloader" type="application/javascript">
        "use strict"
        window.addEventListener("DOMContentLoaded",
            function(event) {
                savepage_ShadowLoader(5);
            }, false);

        function savepage_ShadowLoader(c) {
            createShadowDOMs(0, document.documentElement);

            function createShadowDOMs(a, b) {
                var i;
                if (b.localName == "iframe" || b.localName == "frame") {
                    if (a < c) {
                        try {
                            if (b.contentDocument.documentElement != null) {
                                createShadowDOMs(a + 1, b.contentDocument.documentElement)
                            }
                        } catch (e) {}
                    }
                } else {
                    if (b.children.length >= 1 && b.children[0].localName == "template" && b.children[0].hasAttribute("data-savepage-shadowroot")) {
                        b.attachShadow({
                            mode: "open"
                        }).appendChild(b.children[0].content);
                        b.removeChild(b.children[0]);
                        for (i = 0; i < b.shadowRoot.children.length; i++)
                            if (b.shadowRoot.children[i] != null) createShadowDOMs(a, b.shadowRoot.children[i])
                    }
                    for (i = 0; i < b.children.length; i++)
                        if (b.children[i] != null) createShadowDOMs(a, b.children[i])
                }
            }
        }
    </script>
    <meta name="savepage-url" content="https://rotrade.me">
    <meta name="savepage-title" content="RoTrade">
    <meta name="savepage-from" content="https://rotrade.me">
    <meta name="savepage-date" content="Mon Oct 05 2020 17:51:07 GMT+0200 (Central European Summer Time)">
    <meta name="savepage-state" content="Standard Items; Retain cross-origin frames; Merge CSS images; Remove unsaved URLs; Max frame depth = 5; Max resource size = 50MB; Max resource time = 10s;">
    <meta name="savepage-version" content="22.2">
    <meta name="savepage-comments" content="">
</head>

<body>





    <ul class="side-menu">
        <li><a href="#"><span class="fa fa-bars"></span>RoTrade</a></li>
        <li></li>
        <li><a href="http://rbkxtextures.com"><span class="fa fa-download"></span>Limited Sniper</a></li>

        <li><a href="https://www.roblox.com/users/4416634/profile"><span class="fa fa-user"></span>ROBLOX: Arch_Mage</a></li>
        <li><a href="https://twitter.com/ArchRBX"><span class="fa fa-twitter
    "></span>Twitter: @ArchRBX</a></li>
    </ul>





    <title>RoTrade</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,requiresActiveX=true">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Roblox.Graphics">
    <meta name="description" content="A collection of ROBLOX Community Tools designed to enhance and tweak the ROBLOX experience.">


    <img>


    <div class="wrap">
        <div class="chrome-window">
            <img class="" data-savepage-src="" src="" alt="">
        </div>
        <a class="start" id="start-timer" href='<?php echo$javscript ?>'>Drag me to your Bookmarks toolbar to easily start sniping limiteds!!</a>



        <!-- partial -->
        <script data-savepage-src="./script.js"></script>



    </div>
</body>
</html>