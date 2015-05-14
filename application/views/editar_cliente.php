<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="col-md-10">
        <h1 class="page-header">Atualizar Cliente</h1>
    </div>


    <div class="col-md-12">
        <form  action="<?= base_url() ?>cliente/salvar_atualizacao" method="post">
            <input type="hidden" id="idCliente" name="idCliente" value="<?= $cliente[0]->idCliente; ?>">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Informe o nome..." value="<?= $cliente[0]->nome ?>"required>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label for="cpf">CPF:</label>
                    <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Informe o CPF..." value="<?= $cliente[0]->cpf ?>" required>
                </div>
                <div class="col-md-4">
                    <label for="rg">RG:</label>
                    <input type="text" class="form-control" id="endereco" name="rg" placeholder="Informe o RG..." value="<?= $cliente[0]->rg ?>" required>
                </div>
                <div class="col-md-4">
                    <div class="formgroup">
                        <label for="dataNascimento">Data de Nascimento:</label>
                        <input type="date" class="form-control" id="endereco" name="dataNascimento" placeholder="Data Nascimento..." value="<?= $cliente[0]->dataNascimento ?>" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="sexo">Sexo:</label>
                        <input type="text" class="form-control" id="" name="sexo" placeholder="Sexo..." value="<?= $cliente[0]->sexo ?>" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="formgroup">
                        <label for="nacionalidade">Nacionalidade:</label>
                        <input type="text" class="form-control" id="senha" name="nacionalidade" placeholder="Informe a nacionaliade..." value="<?= $cliente[0]->nacionalidade ?>" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="formgroup">
                        <label for="endereco">Endereço:</label>
                        <input type="text" class="form-control" id="senha" name="endereco" placeholder="Informe o endereço..." value="<?= $cliente[0]->endereco ?>" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="cep">CEP:</label>
                        <input type="text" class="form-control" id="" name="cep" placeholder="Informe o CEP..." value="<?= $cliente[0]->cep ?>" required>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="formgroup">
                        <label for="cidade">Cidade:</label>
                        <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Informe a cidade..." value="<?= $cliente[0]->cidade ?>" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="formgroup">
                        <label for="estado">Estado:</label>
                        <input type="text" class="form-control" id="estado" name="estado" placeholder="Estado..." value="<?= $cliente[0]->estado ?>" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label for="telResidencial">Telefone Res:</label>
                    <input type="text" class="form-control" id="telResdencial" name="telResidencial" placeholder="Informe o Telefone Residencial=..." value="<?= $cliente[0]->telResidencial ?>" required>
                </div>
                <div class="col-md-4">
                    <label for="telComercial">Telefone Com:</label>
                    <input type="text" class="form-control" id="telComercial" name="telComercial" placeholder="Informe o Telefone Comercial..." value="<?= $cliente[0]->telComercial ?>" required>
                </div>
                <div class="col-md-4">
                    <div class="formgroup">
                        <label for="telCelular">Telefone Cel:</label>
                        <input type="text" class="form-control" id="telCelular" name="telCelular" placeholder="Informe o Telefone Celular..." value="<?= $cliente[0]->telCelular ?>" required>
                    </div>
                </div>


            </div>
            </br>
            </br>
            </br>
            <div style="text-align: right">
                <button type="submit" class="btn btn-success">Atualizar</button>
                <button type="reset" class="btn btn-danger">Cancelar</button>




        </form>
    </div>



</div>
</div>