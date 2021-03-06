<!DOCTYPE html>
<html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!--Materialize-->
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <!--CSS-->
    <link href="{{{ asset('/css/style.css') }}}" rel="stylesheet">

    <!--Custom Font for Logo-->
    <link href="https://fonts.googleapis.com/css?family=Fredoka+One" rel="stylesheet">

    <!--Meta tags and Title-->
    <meta keywords="helpdesk, ticketing system, asset tracking, it management application">
    <a href="ticketing.blade.php"><title>Totally Helpdesk</title>
  </head>

<body>
  <nav class="purple" role="navigation">
    <div class="nav-wrapper container s12 light"><a id="logo-container" href="index.php" class="brand-logo"><img src="img/totally.png" width="80" height="80"><span class="helpdesk" style="vertical-align: top">Helpdesk</span></a> 
      <ul class="right hide-on-med-and-down" id="login">
        <li><a href="login" id="mysignin">Logout</a></li>
      </ul>

      <ul class="right hide-on-med-and-down">
        <li><a href="knowledgebase">Knowledge Base</a></li>
      </ul>
      <ul class="right hide-on-med-and-down">
        <li><a href="ticketing">Tickets</a></li>
      </ul>
    </div>
  </nav>

  <section class="striped tables row">
      @yield('content')
  </section>

  <aside class="chatting">
    <h4>Chat Area</h4>
    <form name="form1" action="/chatlogs">
    Enter Your Chatname: <input type="text" name="uname" style="width: 200px";>
    <input type="hidden" name="_method" value="PUT">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <br>

    Your Message: <br>
    <textarea name="msg" style="width: 350px; height: 70px"></textarea> 
    <br>

    <div onclick="submitChat()">Send</div><br><br>
    </form>

    <span id="chatlogs">
      Loading Chatlogs, Please Wait...
    </span>
  </aside>

<script type="text/javascript">
  function submitChat() {
    if(form1.uname.value == '' || form1.msg.value == '') {
      alert('ALL FIELDS ARE MANDATORY');
    }

    form1.uname.readOnly = true;
    form1.uname.style.border = 'none';
    var uname = form1.uname.value;
    var msg = form1.msg.value;
    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function() {
      if (xmlhttp.readyState==4&&xmlhttp.status==200){
        document.getElementById('chatlogs').innerHTML = xmlhttp.responseText; 
      }
    }
    xmlhttp.open('GET', "{{URL::asset('/chatlogs')}}" + '?uname=' + uname + '&msg=' + msg, true);
    console.log("here");
    xmlhttp.send();
    console.log("2nd here");
  }

  function getChat() {
    if(form1.uname.value != '') {
    console.log("indside");
    var xmlhttp1 = new XMLHttpRequest();

    var uname = form1.uname.value;
    xmlhttp1.onreadystatechange = function() {
      console.log(xmlhttp1);

      if (xmlhttp1.readyState==4&&xmlhttp1.status==200){
        console.log(xmlhttp1);
        document.getElementById('chatlogs').innerHTML = xmlhttp1.responseText; 
      }
    }
    xmlhttp1.open('GET', "{{URL::asset('/getChats')}}" + '?uname=' + uname + '&_token={{ csrf_token() }}', true);
    
    xmlhttp1.send();

    // var posting = $.ajax({
    //   type: "POST",
    //   url: "{{URL::asset('/getChats')}};",
    //   data: { uname: uname, _token:'{{ csrf_token() }}' },
    //   datatype:"json"
    // });

    // console.log(posting);
    
  }
    //setTimeout(getChat(), 30000);
  }

  $(document).ready(function(e) {
    $.ajaxSetup({cache:false});
    setInterval(function(){getChat()}, 10000);
  });

</script>


</body>
</html>