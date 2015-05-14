<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="col-md-10">
        <h3 class="page-header">Veículos</h3>
    </div>
    <div class="col-md-2">
        <a class="btn btn-primary btn-block" href="<?= base_url() ?>veiculo/cadastro"> Novo</a>
    </div>
    
    <div class="col-md-12">
        <table class="table table-hover">
            <tr>
                
                <th><font color ="ff0000">Modelo</font></th>
                <th><font color ="ff0000">Placa</font></th>
                <th></th>
                <th></th>
            </tr>
            <?php foreach($veiculos as $vei){?>
            <tr>
                
                <th><?= $vei->modelo; ?></th>
                <th><?= $vei->placa; ?></th>                
                <th><a href="<?= base_url('veiculo/atualizar/'.$vei->idVeiculo) ?>" class="glyphicon glyphicon-pencil" title="Atualizar"></a></th>
                <th><a href="<?= base_url('veiculo/excluir/'.$vei->idVeiculo) ?>" class="glyphicon glyphicon-trash" onclick="return confirm('Deseja realmente excluir este Veículo?');" title="Excluir"></a></th>
            </tr>
            <?php }?>
            
        </table>
    </div>
</div>



