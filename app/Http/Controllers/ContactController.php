<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Myclasses\IndexShoyElements;
use App\Myclasses\Contacts;

class ContactController extends Controller
{
    
    protected $indexShoyElements;
    protected $contacts;


    public function __construct(Contacts $contacts, IndexShoyElements $indexShoyElements) {
        $this->indexShoyElements = $indexShoyElements;
        $this->contacts = $contacts;
    }

        public function execute(){
        if(view()->exists('site.contact')){
            
            $menus = $this->indexShoyElements->menu();
            $contacts = $this->contacts->shoyContacts();
            
            $data = [
                'title' => 'Contacts',
                'menus' => $menus,
                'contacts' => $contacts
            ];
            
            return view('site.contact', $data);
        } else {
            abort(404);
        }
    }
}
