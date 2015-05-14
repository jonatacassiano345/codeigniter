
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="col-md-10">
        <h1 class="page-header">Atualizar Usuário</h1>
    </div>


    <div class="col-md-12">
        <form  action="<?= base_url() ?>aluno/salvar_atualizacao" method="post">
            <input type="hidden" id="idAluno" name="idAluno" value="<?= $aluno[0]->idAluno; ?>">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Informe o nome..." required>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="formgroup">
                        <label for="dataNascimento">Data de Nascimento:</label>
                        <input type="date" class="form-control" id="endereco" name="dataNascimento" placeholder="Data Nascimento..." required>
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="escola">Escola:</label>
                    <input type="text" class="form-control" id="escola" name="escola" placeholder="Escola..." required>
                </div>
                <div class="col-md-4">
                    <div class="formgroup">
                        <label for="professor">Professor:</label>
                        <input type="text" class="form-control" id="professor" name="professor" placeholder="Professor..." required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="sala">Sala:</label>
                        <input type="text" class="form-control" id="sala" name="sala" placeholder="Sala..." required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="formgroup">
                        <label for="serie">Série:</label>
                        <input type="text" class="form-control" id="serie" name="serie" placeholder="Serie..." required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="formgroup">
                        <label for="horaEntrada">Horário Entrada:</label>
                        <input type="text" class="form-control" id="horaEntrada" name="horaEntrada" placeholder="Entrada..." required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="horarioSaida">Horário Saída:</label>
                        <input type="text" class="form-control" id="horarioSaida" name="horarioSaida" placeholder="horarioSaida..." required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="formgroup">
                        <label for="dataVencimento">Dia de Vencimento:</label>
                        <input type="text" class="form-control" id="dataVencimento" name="dataVencimento" placeholder="Vencimento..." required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="formgroup">
                        <label for="mensalidade">Mensalidade:</label>
                        <input type="text" class="form-control" id="mensalidade" name="mensalidade" placeholder="Mensalidade..." required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label for="inicioContrato">Início de Contrato:</label>
                    <input type="date" class="form-control" id="inicioContrato" name="inicioContrato" required>
                </div>
                <div class="col-md-4">
                    <label for="terminoContrato">Término de Contrato:</label>
                    <input type="date" class="form-control" id="terminoContrato" name="terminoContrato" required>
                </div>

            </div>



            <div style="text-align: right">
                <button type="submit" class="btn btn-success">Atualizar</button>
                <button type="reset" class="btn btn-danger">Cancelar</button>
        </form>


    </div>
</div>
</div>




