<?php

class PhysicBook extends Book
{
    protected string $address;

    public function __construct($book_name, $book_author, $book_pages, $address)
    {
        parent::__construct($book_name, $book_author, $book_pages);
        $this->address = $address;
    }


    public function AboutBook(): string
    {
        return "
    <b>Автор: </b> {$this->book_author}<br>
    <b>Издание: </b> {$this->book_name}<br>
    <b>Объем: </b> {$this->book_pages} стр.<br>
    <b>Доставка: </b> {$this->address} стр.<br>
      <hr>
    ";
    }

}