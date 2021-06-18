<?php

namespace Order\orderCanStore;



abstract class AbstractHandler
{
    protected $next;

    abstract public function handle($products);
    public function setNext($next)
    {
        $this->next = $next;
    }


    public function next($request = null)
    {
        if ($this->next) {
            return $this->next->handle($request);
        }

       
    }
}
