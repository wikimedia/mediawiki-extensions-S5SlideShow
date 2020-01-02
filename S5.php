<?php

if ( function_exists( 'wfLoadExtension' ) ) {
    wfLoadExtension( 'S5SlideShow' );
    // Keep i18n globals so mergeMessageFileList.php doesn't break
    $wgMessagesDirs['S5SlideShow'] = __DIR__ . '/i18n';
    return true;
} else {
    die( 'This version of the S5SlideShow extension requires MediaWiki 1.25+' );
}
