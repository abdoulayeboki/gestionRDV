<!DOCTYPE html>
<html>
    <head>
        <title> sr       </title>
        <meta charset="utf-8"/>
        <link rel="stylesheet"href="../librairie/bootstrap/css/bootstrap.css"/>
        <link rel="stylesheet"href="../css/style.css"/>
        <script>src="../librairie/bootstrap/js/jquery.js"</script>
        <script>src="../librairie/bootstrap/js/bootstrap.js"</script>
       
    </head>

    <body>
        <div class="container-fluid">
            <div class="row">
     <form method="post" action="../model/authentifier.php" class="offset-md-4 col-md-4 offset-md-4">
         <div class="form-group">
         <label>Matricule </label>  
         <input type="text" name="matricule" placeholder="matricule" class="form-control"/>  
</div>
         <div class="form-group">
         <label>Code d'accés </label>  
         <input type="text" name="code" placeholder="code" class="form-control"/>  
</div>
<div class="form-group">
         <input type="submit" name="submit"  class=" btn-primary form-control"/>  
</div>
    
     </form>
     </div>
     </div>
    
        
        
    </body>
</html>
