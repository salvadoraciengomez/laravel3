<?php
    namespace App\Http\Controllers;

    use App\Http\Controllers\Controller;
    
    class EntriesController extends Controller{
        public function show($elPost){
            return $elPost;
        }
    }
?>