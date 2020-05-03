<?php 
class Cms5eaccf9b6108f477817204_dab050313235915c99acf1b09cc657fbClass extends Cms\Classes\PageCode
{
public function onEnd()
{
    if ($this->post) {
        $this->page->title = $this->post->title;
    }
    else {
        return Redirect::to($this->pageUrl('404'));
    }
}
}
