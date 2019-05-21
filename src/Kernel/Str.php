<?php



namespace JingDongLeague\Kernel;



class Str
{
    

    
    public static function studly($value)
    {
        $value = ucwords(str_replace(['-', '_'], ' ', $value));

        return str_replace(' ', '', $value);
    }
}
