<?php
include_once 'conexao.php';
include_once 'includes/header.php';

if(isset($_GET['id'])):
    $id = mysqli_escape_string($conexao, $_GET['id']);
    $sql = "SELECT * FROM clientes WHERE id = '$id'";

    $resultado = mysqli_query($conexao, $sql);
    $dados = mysqli_fetch_array($resultado);
endif;
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Actualizar cliente</h3>
        <form action="update.php" method = "POST">
            
            <input type="hidden" name="id" id = "id" value="<?php echo $dados['id'] ?>">
            
            <div class="input-field col s12">
                <input type="text" name = "nome" id = "nome" value="<?php echo $dados['nome'] ?>">
                <label for="nome">Nome</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name = "sobrenome" id = "sobrenome" value="<?php echo $dados['sobrenome'] ?>">
                <label for="sobrenome">Sobrenome</label>
            </div>
            <div class="input-field col s12">
                <input type="email" name = "email" id = "email" value="<?php echo $dados['email'] ?>">
                <label for="email">E-mail</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name = "idade" id = "idade" value="<?php echo $dados['idade'] ?>">
                <label for="idade">Idade</label>
            </div>
            <button type = "submit" name = "btn-editar" class = "btn">Actualizar</button>
            <a href="teste.php" class = "btn green">Lista de Clientes</a>
        </form>
        
    </div>
</div>


<?php
include_once 'includes/footer.php';
?>

