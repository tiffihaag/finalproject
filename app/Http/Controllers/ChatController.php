<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChatController extends Controller {

	public function chat() {
    $uname = $_REQUEST['uname'];
    $msg = $_REQUEST['msg'];
    $response = '';

		$chatbox = DB::select('select * from chatbox where uname = ?',$uname); 
      foreach (mysql_fetch_array($chatbox, MYSQL_ASSOC) as $row) {
        $response = $response . '<span>' . $row['msg'] . '</span>';
      }

      // ($row = mysql_fetch_array($chatbox)) {
      //   $response = $response . '<span>' . $row['msg'] . '</span>';
      // }
      return Response::json($response);
  	}

	public function addMsg(Request $request){
    $uname = $_REQUEST['uname'];
    $msg = $_REQUEST['msg'];

    DB::insert('insert into chatbox (uname, msg) values (?, ?)', [$uname, $msg]);
  }
}

?>