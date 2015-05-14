<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="col-md-10">
        <h1 class="page-header">Novo Funcionário</h1>
    </div>


    <div class="col-md-12">
        <form  action="<?= base_url() ?>funcionario/cadastrar" method="post">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Informe o nome..." required>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label for="cpf">CPF:</label>
                    <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Informe o CPF..." required>
                </div>
                <div class="col-md-4">
                    <label for="rg">RG:</label>
                    <input type="text" class="form-control" id="endereco" name="rg" placeholder="Informe o RG..." required>
                </div>
                <div class="col-md-4">
                    <div class="formgroup">
                        <label for="dataNascimento">Data de Nascimento:</label>
                        <input type="date" class="form-control" id="endereco" name="dataNascimento" placeholder="Data Nascimento..." required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="sexo">Sexo:</label>
                        <input type="text" class="form-control" id="" name="sexo" placeholder="Sexo..." required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="formgroup">
                        <label for="cep">Cep:</label>
                        <input type="text" class="form-control" id="cep" name="cep" placeholder="Informe o cep..." required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="formgroup">
                        <label for="endereco">Endereço:</label>
                        <input type="text" class="form-control" id="senha" name="endereco" placeholder="Informe o endereço..." required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="bairro">Bairro:</label>
                        <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Informe a bairro..." required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="formgroup">
                        <label for="cidade">Cidade:</label>
                        <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Informe o cidade..." required>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="formgroup">
                        <label for="estado">Estado:</label>
                        <input type="text" class="form-control" id="estado" name="estado" placeholder="estado..." required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label for="telResidencial">Telefone Res:</label>
                    <input type="text" class="form-control" id="telResidencial" name="telResidencial" placeholder="Informe o Telefone Residencial..." required>
                </div>                
                <div class="col-md-4">
                    <div class="formgroup">
                        <label for="telCelular">Telefone Cel:</label>
                        <input type="text" class="form-control" id="telCelular" name="telCelular" placeholder="Informe o Telefone Celular..." required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="formgroup">
                        <label for="cargo">Cargo:</label>
                        <input type="text" class="form-control" id="cargo" name="cargo" placeholder="Informe o cargo..." required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="formgroup">
                        <label for="admissao">Data de Admissão:</label>
                        <input type="date" class="form-control" id="admissao" name="admissao" required>
                    </div>
                </div>
            </div>



            </br>
            <div style="text-align: right">
                <button type="submit" class="btn btn-success">Enviar</button>
                <button type="reset" class="btn btn-danger">Cancelar</button>




        </form>
    </div>



</div>
</div>