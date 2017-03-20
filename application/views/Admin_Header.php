<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Panel</title>
    <?=link_tag('plugin/css/paper_bootstrap.css');?>
    <?=link_tag('plugin/css/style.css');?>
</head>
<body>
    
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand">Annual Dinner '17 (Admin Panel)</a>
    </div>
      <!--<form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>-->
      <?= form_open('basePage/index',['class'=>'navbar-form navbar-right']); ?>
      
      <ul class="nav navbar-nav navbar-right">
        
       <li><label style="font-size:140%"><?= $Username . " &nbsp;&nbsp;&nbsp;&nbsp;"; ?></label><?= form_submit(['value'=>'Logout','class'=>'btn btn-primary']); ?></li>
      </ul>
      </form>
    </div>
  </div>
</nav>