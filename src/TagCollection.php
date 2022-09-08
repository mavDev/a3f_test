<?php

namespace Mav\HtmlParsing;

class TagCollection
{

    private array $collection;

    public function getTagByName($tagName){
        if(!isset($this->collection[$tagName])) $this->collection[$tagName] = new Tag($tagName);
        return $this->collection[$tagName];
    }

    public function outputList(){
        foreach ($this->collection as $tag) {
            echo "{$tag->getName()}: {$tag->getCount()} вхождений".PHP_EOL;
        }
    }

}