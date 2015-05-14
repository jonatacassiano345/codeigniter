<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="col-md-10">
        <h3 class="page-header">Usuários</h3>
    </div>
    <div class="col-md-2">
        <a class="btn btn-primary btn-block" href="<?= base_url()?>usuario/cadastro"> Novo </a>
    </div>
    <div class="col-md-12">
        <table class="table table-hover">
            
            <tr>
                
                <th><font color ="ff0000">Nome</font></th>
                <th><font color ="ff0000">Usuario</font></th>
                <th><font color ="ff0000">Status</font></th>
                <th><font color ="ff0000">Nível</font></th>
                <th></th>
                <th></th>
            </tr>
            <?php foreach($usuarios as $usu){?>
            <tr>
                
                <td><?= $usu->nome; ?></td>
                <td><?= $usu->usuario; ?></td>
                <td><?= $usu->status==1?'Ativo':'Inativo'; ?></td>
                <td><?= $usu->nivel==1?'Administrador':'Usuário'; ?></td>
                <td>
                    <a href="<?= base_url('usuario/atualizar/'.$usu->idUsuario) ?>" class="glyphicon glyphicon-pencil" >Atualizar</a>
                    <a href="<?= base_url('usuario/excluir/'.$usu->idUsuario) ?>" class="glyphicon glyphicon-trash"  onclick="return confirm('Deseja realmente excluir este Usuário?');">Excluir</a>
                </td>
            </tr>
            <?php }?>
            
        </table>
        
    </div>
</div>   
