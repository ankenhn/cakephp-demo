<?php namespace App\Api\Controller;

use App\Controller\AppController;

class ItemsController extends AppController {
    public $components = array('RequestHandler');
    public function Index() {
        $item = [
            'title' =>  'This is title',
            'description'   =>  'Description for this item',
            'image' =>  'content/image.jpg',
        ];
        $listItems = [];
        for($i=0;$i<6;$i++) {
            $listItems[] = $item;
        }
        $this->set([
            'status'    =>  true,
            'data'      =>  $listItems,
            '_serialize'=>  ['status','data']
        ]);
    }

}