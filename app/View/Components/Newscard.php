<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Newscard extends Component
{
    public $imageUrl, $title, $description, $pubDate, $link, $category;

    public function __construct($imageUrl, $title, $description, $pubDate, $link, $category)
    {
        $this->imageUrl = $imageUrl;
        $this->title = $title;
        $this->description = $description;
        $this->pubDate = $pubDate;
        $this->link = $link;
        $this->category = $category;
    }
    public function render()
    {
        return view('components.newscard');
    }
}

