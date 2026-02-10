<?php
function head (?string $siteArea, string $pageTitle, ?string $subdomain, string $relativePath, string $pageDesc) {
    $headContent =
    "<meta charset='utf-8'>
    <title>$pageTitle";
    
    if (!empty($siteArea)) $headContent .= " - $siteArea";

    $headContent .=
    " - Nylium Network</title>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta name='author' content='Voxel(s) Starcatcher'>

    <meta property='og:type' content='website'>
    <meta property='og:title' content='$pageTitle";
    
    if (!empty($siteArea)) $headContent .= " - $siteArea";

    $headContent .=
    " - Nylium Network' />
    <meta property='og:description' content='$pageDesc' />
    <meta property='og:url' content='https://";

    if (!empty($subdomain)) $headContent .= "$subdomain.";

    $headContent .=
    "nylium.network/$relativePath' />
    <meta property='og:image' content='https://nylium.network/image/nylium-block.svg' />

    <link rel='stylesheet' type='text/css' href='/style.css'>
    <link rel='icon' type='image' href='image/nylium-block.svg'>";

    return $headContent;
}
?>