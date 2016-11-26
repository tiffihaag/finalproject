<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

$uname = $_REQUEST['uname'];
$msg = $_REQUEST['msg'];

class ChatController extends Controller
{
	public function index() {
		$chatbox = DB::select('select * from chatbox where username="$uname"');
			return view('uname.layout2' . ['uname' => $uname]) . ('msg.layout2' . ['msg' => $msg]);
	}
}
