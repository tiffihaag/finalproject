<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class appController extends Controller
{
  public function validatelogin(){

      if (mysqli_query($link,"SELECT uname FROM login WHERE uname = '" . $_POST["uname"] . "' AND password = '" . $_POST["password"] . "' AND isActive = 1")) {
          
        return view('ticketing');
      }

      else {
          return view('login');
          echo ("Bad username or password.");
      }
   }
}
