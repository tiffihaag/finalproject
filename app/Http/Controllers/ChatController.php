<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChatController extends Controller {

	public function chat() {
    $uname = $_REQUEST['uname'];
    //$msg = $_REQUEST['msg'];
    $results = 'hello';


    //$results = DB::select('select * from users where id = :id', ['id' => 1]);
		
    // $chatbox = DB::select('select * from chatbox where uname = ?',$uname); 
    //   foreach (mysql_fetch_array($chatbox, MYSQL_ASSOC) as $row) {
    //     $results = $results . '<span>' . $row['msg'] . '</span>';
    //   }

      // ($row = mysql_fetch_array($chatbox)) {
      //   $response = $response . '<span>' . $row['msg'] . '</span>';
      // }
      return Response::json($results);
  	}

	public function addMsg(Request $request){
    $uname = $_REQUEST['uname'];
    $msg = $_REQUEST['msg'];

    DB::insert('insert into chatbox (uname, msg) values (?, ?)', [$uname, $msg]);
  }
}

?>