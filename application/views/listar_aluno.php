<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="col-md-10">
        <h3 class="page-header">Alunos</h3>
    </div>
    

    <div class="col-md-12">
        <table class="table table-hover">
            <tr>

                <th><font color ="ff0000">Nome Aluno</font></th>
                <th><font color ="ff0000">Escola</font></th>
                <th><font color ="ff0000">Série</font></th>
                <th></th>
                <th></th>
            </tr>
            <?php foreach ($alunos as $alu) { ?>

                <tr>

                    <th><?= $alu->nome; ?></th>
                    <th><?= $alu->escola; ?></th>
                    <th><?= $alu->serie; ?></th>
                   
                    <th><a href="<?= base_url('aluno/atualizar/' . $alu->idAluno) ?>" class="glyphicon glyphicon-pencil"></a></th>
                    <th><a href="<?= base_url('aluno/excluir/' . $alu->idAluno) ?>" class="glyphicon glyphicon-trash" onclick="return confirm('Deseja realmente excluir este Usuário?');"></a></th>
                </tr>
            <?php } ?>

        </table>
    </div>

</div>

