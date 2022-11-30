<!DOCTYPE html>
<html>
<head>
        <link href="/css/bootstrap.min.css" rel="stylesheet"> 
</head>
<body>
  
<div >
  <br><br><br><br><br><br><br>
<div align="center">
    <h1> vous êtes un  Anonyme</h1>
    <h3><a href="{{ route('logout') }}"
        onclick="event.preventDefault();
                 document.getElementById('logout-form').submit();">
        Logout
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form></h3>
</div >
</div>
<script src="js/bootstrap.min.js"></script>
</body>
</html>