<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="col-md-10">
        <h3 class="page-header">Clientes</h3>
    </div>
    <div class="col-md-2">
        <a class="btn btn-primary btn-block" href="<?= base_url() ?>cliente/cadastro"> Novo</a>
    </div>

    <div class="col-md-12">
        <table class="table table-hover">
            <tr>

                <th><font color ="ff0000">Nome Cliente</font></th>
                <th><font color ="ff0000">Endereço</font></th>
                <th><font color ="ff0000">Telefone</font></th>
                <th></th>
                <th></th>
            </tr>
            <?php foreach ($clientes as $cli) { ?>

                <tr>

                    <th><?= $cli->nome; ?></th>
                    <th><?= $cli->endereco; ?></th>
                    <th><?= $cli->telCelular; ?></th>
                   
                    <th><a href="<?= base_url('cliente/atualizar/' . $cli->idCliente) ?>" class="glyphicon glyphicon-pencil"></a></th>
                    <th><a href="<?= base_url('cliente/excluir/' . $cli->idCliente) ?>" class="glyphicon glyphicon-trash" onclick="return confirm('Deseja realmente excluir este Usuário?');"></a></th>
                </tr>
            <?php } ?>

        </table>
    </div>

</div>

