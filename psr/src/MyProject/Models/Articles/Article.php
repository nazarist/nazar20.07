<?php

namespace MyProject\Models\Articles;

use MyProject\Models\Users\User;

class Article
{
    private $title;
    private $text;
    private $author;

    public function __construct(string $title, string $text, User $author)
    {
        $this->author = $author;
        $this->text = $text;
        $this->title = $title;
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getAuthor(): User
    {
        return $this->author;
    }
}
