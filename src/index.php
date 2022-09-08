<?php

namespace Mav\HtmlParsing;

require __DIR__.'/../vendor/autoload.php';

function process($url,IParser $parser){
    $html = file_get_contents($url);
    $res = $parser::parse($html);
    $tagcollection = new TagCollection();
    foreach ($res as $tagName) {
        $tagcollection->getTagByName($tagName)->counter();
    }
    $tagcollection->outputList();
}

process('http://localhost',new ParserGeg());

