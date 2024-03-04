<?php

class DigitalBook extends Book
{
    protected string $url;

    public function __construct($book_name, $book_author, $book_pages, $url)
    {
        parent::__construct($book_name, $book_author, $book_pages);
        $this->url = $url;
    }


    public function AboutBook(): string
    {
        return "
    <b>Автор: </b> {$this->book_author}<br>
    <b>Издание: </b> {$this->book_name}<br>
    <b>Объем: </b> {$this->book_pages} стр.<br>
    <b>Скачать: </b> <a href='{$this->url}'>{$this->url}</a> <br>
    <hr>
    ";
    }

}