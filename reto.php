<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>

    <main>
        <div class="container">
            <div class="row">
                <div class="col">


                <?php
                
                $productos=array(

                    "producto1"=>array("julian","velasquez",20,723637479),
                    "producto2"=>array("mateo","noreña",33,28628369),
                    "producto3"=>array("sofia","gomez",24,7267362)
                    "producto3"=>array("andres","suarez",26,39743744)
                
                );

                ?>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Nombre</th>
                            <th>Apellido</th>
                            <th>Edad</th>
                            <th>Cedula</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php foreach($productos as $valores):?>

                        <tr>
                            <th scope="row"><?php echo($valores[0])?></th>
                            <td><?php echo($valores[1])?></td>
                            <td><?php echo($valores[2])?></td>
                            <td><?php echo($valores[3])?></td>
                        </tr>

                    <?php endforeach?>





                            
                    </tbody>
                </table>

            
                </div>
            </div>
        </div>
    
    </main>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>   
</body>
</html>