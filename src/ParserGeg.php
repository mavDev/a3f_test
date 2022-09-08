<?php

namespace Mav\HtmlParsing;

class ParserGeg implements IParser
{

    public static function parse($html)
    {
        preg_match_all("/<(\w+)([\s]+[^>]+[\s]*)?>/m",$html,$out);
        return $out[1];
    }
}