<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="col-md-10">
        <h1 class="page-header">Funcionários</h1>
    </div>
    <div class="col-md-2">
        <a class="btn btn-primary btn-block" href="<?= base_url()?>funcionario/cadastro"> Novo</a>
    </div>
    
    <div class="col-md-12">
        <table class="table table-hover">
            <tr>
                
                <th><font color ="ff0000">Nome Funcionário</font></th>
                <th><font color ="ff0000">Cargo</font></th>               
                <th></th>
                <th></th>
            </tr>
            <?php foreach($funcionarios as $func){?>
            <tr>
                
                <th><?= $func->nome; ?></th>
                <th><?= $func->cargo; ?></th>                                
                <th><a href="<?= base_url('funcionario/atualizar/'.$func->idFuncionario) ?>" class="glyphicon glyphicon-pencil" title="Atualizar"></a></th>
                <th><a href="<?= base_url('funcionario/excluir/'.$func->idFuncionario) ?>" class="glyphicon glyphicon-trash" onclick="return confirm('Deseja realmente excluir este Funcionário?');" title="Excluir"></a></th>
            </tr>
            <?php }?>
            
        </table>
    </div>
    
</div>

