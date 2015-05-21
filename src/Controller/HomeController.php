<?php namespace App\Controller;


class HomeController extends AppController
{

    public function index()
    {
        $item = [
            'title' =>  'This is title',
            'description'   =>  'Description for this item',
            'image' =>  'content/image.jpg',
        ];
        $listItems = [];
        for($i=0;$i<6;$i++) {
            $listItems[] = $item;
        }
        $this->set('listItems',$listItems);
        $this->render();
    }
}
