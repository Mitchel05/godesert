<?php>
$action = isset( $GET['action']) ? $GET[action] :'';
$view = '';
if($action){
  switch($action){
  case  'edit':
  if($_POST){
    //green
    $view = 'edit_action.php';
  }else{
    //Formulario
    $view = 'form.php';
  }
  
  break;
  default:
  }
}
?>

<!DOCTYPE html>
  <html class="no-js"> lang="en">
  <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title> GO DESERT! </title>
</head>
<body>
  <div class="row">
    <div class="medium-5 large-3 columns">&nbsp;</div>
  </div>
  <div class="row column"
  <p class="lead">Nombre</p>
  </div>
  <div class="row small-up-1 medium-up-2 large-up-3">
  <div class="callout success">
  MP
  </div>
  <form method="POST" action="./?action=edit">
  <label>Nombre</label>
  <input type="text" name="name">
  <label>Apellido</label>
  <input type="text" name="name">
  <input class="button  success" type="submit" value="Modificar">
  </form>
  
  <?php if($view){
  include($view)}
  ?>
  <table>
    <thead>
    <tr>
    <th width="200">Accion</th>
    <th>Nombre</th>
    <th width="150">Metodo</th>
    </tr>
    </thead>
    <tbody>
    </tbody>
  </table>
  <body>
  </body>
  </html>
  
  
  
