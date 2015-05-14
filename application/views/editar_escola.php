<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="col-md-10">
        <h1 class="page-header">Atualizar Escola</h1>
    </div>


    <div class="col-md-12">
        <form  action="<?= base_url() ?>escola/salvar_atualizacao" method="post">
            <input type="hidden" id="idEscola" name="idEscola" value="<?= $escola[0]->idEscola;?>">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Informe o nome da escola..." value="<?= $escola[0]->nome ?>" required>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label for="nomeDiretor">Nome do Diretor:</label>
                    <input type="text" class="form-control" id="nomeDiretor" name="nomeDiretor" placeholder="Informe o Diretor..." value="<?= $escola[0]->nomeDiretor ?>" required>
                </div>
                <div class="col-md-8">
                    <label for="endereco">Endereço:</label>
                    <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Informe o Endereço da escola..." value="<?= $escola[0]->endereco ?>" required>
                </div>


            </div>
            <div class="row">
                <div class="col-md-5">
                    <div class="form-group">
                        <label for="bairro">Bairro:</label>
                        <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Informe o Bairro..." value="<?= $escola[0]->bairro ?>" required>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="formgroup">
                        <label for="telefone">Telefone:</label>
                        <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Telefone..."value="<?= $escola[0]->telefone ?>" required>
                    </div>
                </div><div class="col-md-5">
                    <div class="formgroup">
                        <label for="email">Email:</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="Informe o email..." value="<?= $escola[0]->email ?>" required>
                    </div>
                </div>

            </div>



            <div style="text-align: right">
                <button type="submit" class="btn btn-success">Atualizar</button>
                <button type="reset" class="btn btn-danger">Cancelar</button>
        </form>


    </div>
</div>
</div>