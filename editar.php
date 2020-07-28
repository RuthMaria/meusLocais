<?php
include_once "php_action/db_connect.php";
include_once "includes/header.php";

if (isset($_GET['id'])):
    $id = mysqli_escape_string($connect, $_GET['id']);
    $sql = "SELECT * FROM locais WHERE id = '$id'";
    $resultado =mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);
endif;
?>
    <div class="row">
        <div class="col s12 m6 push-m3">
            <h3 class="light"> Editar local </h3>

            <form action="php_action/update.php" method="post">

                <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">

                <div class="input-field col s12">
                    <input type="text" name="nome" id="nome" value="<?php echo $dados['nome']; ?>">
                    <label for="nome"> Nome</label>
                </div>

                <div class="input-field col s12">
                    <input type="text" name="cep" id="cep" value="<?php echo $dados['cep']; ?>">
                    <label for="cep"> Cep </label>
                </div>

                <div class="input-field col s12">
                    <input type="text" name="logradouro" id="logradouro" value="<?php echo $dados['logradouro']; ?>">
                    <label for="logradouro"> Logradouro </label>
                </div>

                <div class="input-field col s12">
                    <input type="text" name="complemento" id="complemento" value="<?php echo $dados['complemento']; ?>">
                    <label for="complemento"> Complemento </label>
                </div>

                <div class="input-field col s12">
                    <input type="text" name="numero" id="numero" value="<?php echo $dados['numero']; ?>">
                    <label for="numero"> Número </label>
                </div>

                <div class="input-field col s12">
                    <input type="text" name="bairro" id="bairro" value="<?php echo $dados['bairro']; ?>">
                    <label for="bairro"> Bairro </label>
                </div>

                <div class="input-field col s12">
                    <input type="text" name="uf" id="uf" value="<?php echo $dados['uf']; ?>">
                    <label for="uf"> UF </label>
                </div>

                <div class="input-field col s12">
                    <input type="text" name="cidade" id="cidade" value="<?php echo $dados['cidade']; ?>">
                    <label for="cidade"> Cidade </label>
                </div>

                <div class="input-field col s12">
                    <input type="date" name="data" id="data" value="<?php echo $dados['data']; ?>">
                    <label for="data"> Data </label>
                </div>

                <button type="submit" name="btn-editar" class="btn" id="btn"> Atualizar </button>
                <a href="index.php" type="submit" class="btn green"> Lista de clientes </a>

            </form>

        </div>
    </div>

<?php
include_once "includes/footer.php";
?>
