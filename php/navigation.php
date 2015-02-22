<?php 
function nav () {
echo '<div>
    <img src="http://placehold.it/350x150" id="logoimg"></img>
  </div>


  <nav class="navbar navbar-default" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header" id="main-nav-bg">
      <button id="main-nav-bg" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">PokeDreamMatch</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav" id="main-nav">
        <li><a href="http://www.google.com">Team Generator</a>
        </li>
        <li><a href="http://www.google.com">Rate a Team</a>
        </li>
        <li><a href="http://www.google.com">Team of the Day</a>
        </li>
      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </nav>';
  }
 ?>