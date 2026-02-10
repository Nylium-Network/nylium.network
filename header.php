<?php
function pageHeader (string $pageTitle, string $relativePath) {
    $headerContent =
    "<header>
        <img src='/image/nylium-block.gif'>
        <h1>$pageTitle</h1>
    </header>
    <nav>
        <ul>
            <li><a href='#'>Home</a></li>
        </ul>
    </nav>";

    return $headerContent;
}
?>