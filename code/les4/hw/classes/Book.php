<?php


abstract class Book
{
    protected string $book_name;
    protected string $book_author;
    protected int $book_pages;
    public static int $book_counter = 0;


    public function __construct(string $book_name, string $book_author, int $book_pages)
    {
        $this->book_name = $book_name;
        $this->book_author = $book_author;
        $this->book_pages = $book_pages;

        self::$book_counter++;
    }


    public static function getBookCounter(): string
    {
        return "Общее количество книг: " . self::$book_counter . PHP_EOL;
    }


}