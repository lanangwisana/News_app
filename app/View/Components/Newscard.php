<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Newscard extends Component
{
    public $image, $title, $description, $url, $publishedAt;

    public function __construct($image, $title, $description, $url, $publishedAt)
    {
        $this->image = $image;
        $this->title = $title;
        $this->description = $description;
        $this->url = $url;
        $this->publishedAt = $publishedAt;
    }

    public function render()
    {
        return view('components.newscard');
    }
}

