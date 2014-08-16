<?php
/**
 * SocialConnect project
 * @author: Patsura Dmitry @ovr <talk@dmtry.me>
 */

namespace SocialConnect\Vk\Response;

class Collection implements \Countable
{
    protected $total;

    protected $loadCallback;

    protected $elements = array();

    public function __construct($elements, $total, $loadCallback)
    {
        $this->elements = $elements;
        $this->total = $total;
        $this->loadCallback = $loadCallback;
    }

    public function count()
    {
        return $this->total;
    }
}
