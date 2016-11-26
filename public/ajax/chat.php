<?php

$uname = $_REQUEST['uname'];
$msg = $_REQUEST['msg'];

class chatController extends Controller
{
	public function index() {
		$chatbox = DB::select('select * from chatbox where username="$uname"');
			return view('uname.layout2' . ['uname' => $uname]) . ('msg.layout2' . ['msg' => $msg]) ;
	}
}

// $result1 = mysql_query("SELECT * FROM logs ORDER by id DESC");

// while ($extract = mysql_fetch_array($result1)) {
// 	echo "<span class='name'>" . $extract['username'] . "</span>: <span class='msg'>" . $extract['msg'] . "</span><br>";
// }
