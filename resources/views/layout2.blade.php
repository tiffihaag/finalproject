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

    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="app/css/materialize.min.css"  media="screen,projection"/>

    <!--CSS-->
    <link type="text/css" rel="stylesheet" href="app/css/ticketingstyle.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

    <!--Custom Font for Logo-->
    <link href="https://fonts.googleapis.com/css?family=Fredoka+One" rel="stylesheet">

    <!--Meta tags and Title-->
    <meta keywords="helpdesk, ticketing system, asset tracking, it management application">
    <a href="ticketing.blade.php"><title>Totally Helpdesk</title>
  </head>

<body>

<div class="row">
  <div class="col s2">Tickets</div>
  <div class="col s2">Knowledge Base</div>
</div>

<div class="row">
  <div class="col s12 m8 l9">
    @yield('content')
  </div>

  <div class="col s12 m4 l3">
    <div id="page-wrap">

    <h2>Helpdesk Chat</h2>
    
    <p id="name-area"></p>
    
    <div id="chat-wrap"><div id="chat-area"></div></div>
    
    <form id="send-message-area">
        <p>Your message: </p>
        <textarea id="sendie" maxlength = '100'></textarea>
    </form>

</div>
  </div>
</div>

</body>
</html>