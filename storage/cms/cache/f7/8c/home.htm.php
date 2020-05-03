<?php 
class Cms5eaccf944112d342586157_4f6bc732f41162a9e95f29b94eceb016Class extends Cms\Classes\PageCode
{
public function onPagePosts()
{
    $this->blogPosts->setProperty('pageNumber', post('page'));
    $this->pageCycle();
}
}
