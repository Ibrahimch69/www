<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function index()
{
$communes= json_decode(file_get_contents(storage_path() . " /data.json"), 
true);
echo "<pre>";
print_r($communes);
}
}//

