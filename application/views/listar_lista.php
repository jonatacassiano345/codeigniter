<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="col-md-10">
        <h3 class="page-header">Lista de Alunos</h3>
    </div>


    <div class="col-md-12">
        <table class="table table-hover" action="<?= base_url() ?>viagem/cadastrar" method="post">
            <tr>

                <th><font color ="ff0000">Nome Aluno</font></th>
                <th><font color ="ff0000">Escola</font></th>
                <th><font color ="ff0000">Série</font></th>
                <th><font color ="ff0000">Presença</font></th>
                <th><font color ="ff0000">Falta</font></th>
            </tr>
            
            <?php foreach($alunos as $alu){?>
            <tr>
                
                <td><?= $alu->nome; ?></td>
                <td><?= $alu->escola; ?></td>
                <td><?= $alu->serie; ?></td>
                <td><input type="checkbox" value=""></td>
                <td><input type="checkbox" value=""></td>
            </tr>
            <?php }?>
            

        </table>

        <div>
            <div class="col-md-4">
                <div class="formgroup">
                    <label for="monitor">Monitor:</label>
                    <input type="text" class="form-control" id="monitor" name="monitor" placeholder="Informo o monitor..." required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="formgroup">
                    <label for="dataNascimento">Data da viagem:</label>
                    <input type="date" class="form-control" id="endereco" name="dataNascimento" placeholder="Data Nascimento..." required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="formgroup">
                    <label for="serie">Horário de partida:</label>
                    <input type="text" class="form-control" id="horarioEntrada" name="horarioEntrada"  required>
                </div>
            </div>

        </div>
        </br>
        </br>
        </br>
        </br>
        <button type="submit" class="btn btn-success">Salvar</button>
        <button type="reset" class="btn btn-danger">Limpar</button>

    </div>

</div>

