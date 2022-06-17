<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<?php
$server = 'localhost';
$username = 'michelle';
$password = 'michelle';
$db = 'teste';

    //Connection
    $con = mysqli_connect('localhost','root','','teste');   
  
    //Udate- Atualizar

    $nameAtualizar = $_REQUEST['nameAtualizar'];
    if (empty($nameAtualizar)) {
        echo "Name is empty </br>";
    } else {

    } 

    //CREATE
    $nameInsert = null;

    $nameInsert = $_REQUEST['fname'];
    if (empty($nameInsert)) {
        echo "Name is empty </br>";
    } else {
        
        //Query
        $con->query("INSERT INTO cadastro(name) VALUES ('$nameInsert');");

        echo "Cadastro realizado com sucesso!!!</br>";
    } 

    //SELECT / DELETE
    $query = "SELECT * FROM 'cadastro';";

    $log = $con->query("SELECT * FROM cadastro");

    if (mysqli_num_rows($log)) {
        while($row = mysqli_fetch_array($log)){
            $name = $row['name'];
            echo "<a type='submit' name='Delete' href='Delete.php?nameDelete=$name'>Apagar</a> 
            &nbsp;&nbsp;<a type='submit' name='Atulaizar' href='index.php?nameAtualizar=$name'>Atualizar</a>&nbsp;&nbsp;".$name."<br/>";
        
        }
    }

?>

</body>
</html>
