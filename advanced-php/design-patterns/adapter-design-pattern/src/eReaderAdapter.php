<?php

namespace Advanced;

class eReaderAdapter implements BookInterface
{
    private $ereader;

    public function __construct(eReaderInterface $kindle)
    {
        $this->ereader = $kindle;
    }

    public function open(): void //implement book methods
    {
         $this->ereader->turnOn(); //intergrate ereader methods
    }

    public function turnPage(): void
    {
        $this->ereader->pressNextButton();
    }
}