<?php
    include 'connect.php';
?>


<h1> Pessoa </h1>
        <form method="POST" action="addPessoa.php" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>
                        Nome: 
                        <input type="text" name="nomePessoa">
                    </td>
                </tr>
                <tr>
                    <td>
                        E-mail: 
                        <input type="text" name="emailPessoa">
                    </td>
                </tr>

                <tr>
                    <td>
                        Idade: 
                        <input type="number" name="idadePessoa">
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="submit" value="submit" name="sub">
                    </td>
                </tr>


            
            </table>
        </form>   




<table border='1'>
    <tr>
        <th>
            Nome
        </th>
        <th>
            E-mail
        </th>
        <th>
            Idade
        </th>
        <th>
            
        </th>
    </tr>

<?php
$sql="select * from pessoa";
$qu=mysqli_query($con,$sql);
while($pessoa=  mysqli_fetch_assoc($qu)){
    ?>
    <tr>
        <td>
            <?php echo $pessoa['nomePessoa']?>
        </td>
        <td>
            <?php echo $pessoa['emailPessoa']?>
        </td>
        <td>
            <?php echo $pessoa['idadePessoa']?>
        </td>

        <td>
            <a href="deleteProduct.php?idProduto=<?php echo $pessoa['idPessoa']?>">Deletar</a>
        </td>
        <td>
            <a href="editProduct.php?idProduto=<?php echo $f['IdProduto']?>">Alterar</a>
        </td>
    </tr>
    <?php
}
?>