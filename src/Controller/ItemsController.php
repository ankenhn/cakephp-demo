<?php namespace App\Controller;

class ItemsController extends AppController {

    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('RequestHandler');
        $this->layout = "api";
    }

    public function index() {
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
            'response'    =>  [
                'status'    =>  true,
                'data'      =>  $listItems
            ],
            '_serialize'=>  ['response']
        ]);
    }

    public function point() {
        $session = $this->request->session();
        $session->write('point',123456789);
        $point = $session->read('point');
        $this->set([
            'response'    =>  [
                'status'    =>  true,
                'data'      =>  $point
            ],
            '_serialize'=>  ['response']
        ]);
    }
}