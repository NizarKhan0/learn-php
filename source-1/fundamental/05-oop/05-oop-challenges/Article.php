<?php

echo '<h1>Article</h1>';

// 1) create class name article
class Article{
    //define properties

    public $title;
    public $content;
    private $published = false;

    //constructor
    public function __construct($title, $content){
        $this->title = $title;
        $this->content = $content;
    }

    public function publish(){
        //change private property data
        $this->published = true;
    }

    public function isPublished(){
        //access private property
        return $this->published;
    }
}
$article1 = new Article('My First Post', 'This is the first post.');
$article2 = new Article('My Second Post', 'This is the second post.');

//call method from false to true
$article1->publish();

echo var_dump($article1->isPublished(), true) . '<br>';
echo var_dump($article2->isPublished(), true) . '<br>';