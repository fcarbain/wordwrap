<?php
include 'Wrapper.class.php';
?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<div class="container">
    
<form  action="<?php
$_PHP_SELF;
?>" method="post">
<div class="form-group row">
        <label for="stringInput">String :</label>
        <textarea class="form-control" id="stringInput" name="string"></textarea>
    </div>

    <div class="form-group row">
        <label for="column">Column :</label>
        <input class="form-control" type="number" id="column" name="column" min="20">
    </div>
 
        <button  class="btn btn-primary mb-2" type="submit">Wrapper !</button>
 
</form>


<?php



if (isset($_POST['string']) AND isset($_POST['column'])) {
    
    
    $_stringVar = htmlspecialchars(strip_tags($_POST['string']));
    
    if (is_numeric($_POST['column'])) {
        $_columnVar = $_POST['column'];
        
    } else {
        echo 'Error';
    }
    
    
    $words = new Wrapper($_stringVar, $_columnVar);
    
    
    
    $words->resultWrap($_stringVar, $_columnVar);
}
?>
</div>