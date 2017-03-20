<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration | Annual Dinner</title>
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
      <a class="navbar-brand">Annual Dinner '17</a>
    </div>
      
      <?= form_open('basePage/adminpanel',['class'=>'navbar-form navbar-right']); ?>
      <div class="form-group">
    <div class="col-lg-2">
      <?= form_input(['placeholder'=>'Username','class'=>'form-control','id'=>'inputUsername','name'=>'Username']) ?>
      </div>
      </div>
      <div class="form-group">
    <div class="col-lg-2">
      <?= form_password(['placeholder'=>'Password','class'=>'form-control','id'=>'inputPassword','name'=>'Password']) ?>
      </div>
      </div>
      
      <ul class="nav navbar-nav navbar-right">
        
        <li><?= form_submit(['name'=>'Save','value'=>'Login','class'=>'btn btn-primary']); ?></li>
      </ul>
      </form>
    </div>
  </div>
</nav>