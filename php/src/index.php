<?php declare(strict_types=1); namespace core;

write_header();
write_body();

function write_header() {
    $header = getenv('HEADER_CONTENTS');
    echo "<h1>$header, hi</h1>";
    return ':ok';
}

function write_body() {
    echo '<p>This is a generic greeting.</p>';
    return ':ok';
}
