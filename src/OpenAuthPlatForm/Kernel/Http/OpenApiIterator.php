<?php



namespace JingDongLeague\OpenAuthPlatForm\Kernel\Http;



class OpenApiIterator implements \IteratorAggregate
{
    protected $items;
    
    public function getIterator() {
        return new \ArrayIterator($this->items);
    }
    
}
