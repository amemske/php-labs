<?php

namespace Advanced;

interface BookInterface
{
    public function open(): void;

    public function turnPage(): void;
}