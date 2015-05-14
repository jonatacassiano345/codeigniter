<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="col-md-10">
        <h1 class="page-header">Atualizar Veículo</h1>
    </div>


    <div class="col-md-12">
        <form  action="<?= base_url() ?>veiculo/salvar_atualizacao" method="post">
            <input type="hidden" id="idVeiculo" name="idVeiculo" value="<?= $veiculo[0]->idVeiculo;?>">
            
            <div class="form-group">
                <label for="modelo">Modelo:</label>
                <input type="text" class="form-control" id="modelo" name="modelo" placeholder="Informe o modelo do veículo..." value="<?= $veiculo[0]->modelo?> "required>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label for="placa">Placa:</label>
                    <input type="text" class="form-control" id="placa" name="placa" placeholder="Informe a placa..." value="<?= $veiculo[0]->placa?> ">
                </div>
                <div class="col-md-4">
                    <label for="ano">Ano:</label>
                    <input type="text" class="form-control" id="ano" name="ano" placeholder="Informe o ano..." value="<?= $veiculo[0]->ano?> "required>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="seguro">Seguro:</label>
                        <input type="text" class="form-control" id="seguro" name="seguro" placeholder="Informe o seguro..." value="<?= $veiculo[0]->seguro?> "required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="ipva">Ipva:</label>
                        <input type="text" class="form-control" id="ipva" name="ipva" placeholder="Informe IPVA..." value="<?= $veiculo[0]->ipva?> "required>
                    </div>
                </div>     
                                
            </div>



            <div style="text-align: right">
                <button type="submit" class="btn btn-success">Enviar</button>
                <button type="reset" class="btn btn-danger">Cancelar</button>
        </form>


    </div>
</div>
</div>