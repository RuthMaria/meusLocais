<?php
include_once "includes/header.php";
?>
    <div class="row">
        <div class="col s12 m6 push-m3">
            <h3 class="light" id="light"> Novo local </h3>

            <form action="action/create.php" method="post">
                <div class="input-field col s12">
                    <input type="text" name="nome" id="nome" required>
                    <label for="nome"> Nome <sub>*</sub></label>
                </div>

                <div class="input-field col s12">
                    <input type="text" name="cep" id="cep" required>
                    <label for="cep"> Cep <sub>*</sub></label>
                </div>

                <div class="input-field col s12">
                    <input type="text" name="logradouro" id="logradouro" required>
                    <label for="logradouro"> Logradouro <sub>*</sub></label>
                </div>

                <div class="input-field col s12">
                    <input type="text" name="complemento" id="complemento" required>
                    <label for="complemento"> Complemento <sub>*</sub></label>
                </div>

                <div class="input-field col s12">
                    <input type="text" name="numero" id="numero" required>
                    <label for="numero"> Número <sub>*</sub></label>
                </div>

                <div class="input-field col s12">
                    <input type="text" name="bairro" id="bairro" required>
                    <label for="bairro"> Bairro <sub>*</sub></label>
                </div>

                <div class="input-field col s12">
                    <input type="text" name="uf" id="uf" required>
                    <label for="uf"> UF <sub>*</sub></label>
                </div>

                <div class="input-field col s12">
                    <input type="text" name="cidade" id="cidade" required>
                    <label for="cidade"> Cidade <sub>*</sub></label>
                </div>

                <div class="input-field col s12">
                    <input type="date" name="data" id="data" required>
                    <label for="data"> Data <sub>*</sub></label>
                </div>

                <button type="submit" name="btn-cadastrar" class="btn" id="btn"> Cadastrar </button>
                <a href="index.php" type="submit" class="btn green"> Lista de locais </a>

            </form>
        </div>
    </div>

<?php
include_once "includes/footer.php";
?>
<?php
