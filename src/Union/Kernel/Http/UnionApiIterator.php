<?php



namespace JingDongLeague\Union\Kernel\Http;



class UnionApiIterator implements \IteratorAggregate
{
    protected $items;
    
    public function getIterator() {
        return new \ArrayIterator($this->items);
    }
    
}
