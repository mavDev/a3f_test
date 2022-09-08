<?php

namespace Mav\HtmlParsing;

class Tag implements ITag
{

    private int $count = 0;
    private string $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function counter()
    {
        ++$this->count;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getCount(): int
    {
        return $this->count;
    }
}