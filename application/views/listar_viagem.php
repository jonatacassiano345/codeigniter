



<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h1 class="page-header">Viagens</h1>


    <table class="table table-hover">
        <tr>

            <th><font color ="ff0000">Viagens</font></th>                         
            <th><font color ="ff0000">Listas</th>

        </tr>
        <tr>

            <th>Viagem 1</th>
            <th><a href="<?= base_url() ?>viagem/lista"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"> Lista de Alunos</span></th>

        </tr>
        <tr>

            <th>Viagem 2</th>
            <th><a href="<?= base_url() ?>viagem/lista"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"> Lista de Alunos</span></th>

        </tr>
    </table>


    </br>

    <div><a href="#"><span class="btn btn-success" aria-hidden="true" data-toggle="modal" data-target="#myModal3"> Consultar Viagem</span></a></li>

        <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel"><strong>Consultar Viagem</strong></h4>
                    </div>
                    <div class="modal-body">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" id="checkboxSuccess" value="option1">
                                Viagem 1
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" id="checkboxWarning" value="option1">
                                Viagem 2
                            </label>
                        </div>
                        <div class="col-md-4">
                            <div class="formgroup">
                                <label for="dataNascimento">Data:</label>
                                <input type="date" class="form-control" id="data" name="data"  required>
                            </div>
                        </div>
                        </br>
                        </br>
                        </br>
                        </br>
                        <button type="submit">Consultar</button>            

                    </div>
                </div>
            </div>
        </div>

        <div>       











        </div>
    </div>
</div>

