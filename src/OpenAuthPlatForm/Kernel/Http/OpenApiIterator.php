<?php



namespace JingDongLeague\OpenAuthPlatForm\Kernel\Http;



class OpenApiIterator implements \IteratorAggregate
{
    protected $items;
    protected $original;
    public function getIterator() {
        return new \ArrayIterator($this->items);
    }
    
}
