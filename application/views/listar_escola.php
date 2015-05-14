<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="col-md-10">
        <h3 class="page-header">Escolas</h3>
    </div>
    <div class="col-md-2">
        <a class="btn btn-primary btn-block" href="<?= base_url()?>escola/cadastro"> Novo </a>
    </div>
    <div class="col-md-12">
        <table class="table table-hover">
            
            <tr>
                
                <th><font color ="ff0000">Nome</font></th>
                <th><font color ="ff0000">Bairro</font></th>                
                <th></th>
                <th></th>
            </tr>
            <?php foreach($escolas as $esc){?>
            <tr>
                
                <td><?= $esc->nome; ?></td>
                <td><?= $esc->bairro; ?></td>                
                <td>
                    <a href="<?= base_url('escola/atualizar/'.$esc->idEscola) ?>" class="glyphicon glyphicon-pencil" title="Atualizar"></a>
                    <a href="<?= base_url('escola/excluir/'.$esc->idEscola) ?>" class="glyphicon glyphicon-trash"  onclick="return confirm('Deseja realmente excluir esta Escola?');" title="excluir"></a>
                </td>
            </tr>
            <?php }?>
            
        </table>
        
    </div>
</div>   
