  
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h1 class="page-header">Agenda</h1>

    <div class="col-md-12">
        <form  action="<?= base_url() ?>agenda/cadastrar" method="post">
            <div class="form-group">
                <label for="nome">Evento:</label>
                <input type="text" class="form-control" id="evento" name="evento" required>
            </div>
            <div class="row">

                <div class="col-md-7">
                    <label for="local">Local:</label>
                    <input type="text" class="form-control" id="local" name="local" required>
                </div>
                <div class="col-md-3">
                    <label for="dataEvento">Data do Evento:</label>
                    <input type="date" class="form-control" id="dataEvento" name="dataEvento" required>
                </div> 
                <div class="col-md-2">
                    <label for="status">Horário: </label>
                    <input type="text" class="form-control" id="horario" name="usuario" required>

                </div>

            </div>
            <div class="form-group">
                <label for="status">Descrição do Evento: </label>
                <textarea class="form-control" rows="3"></textarea>
            </div>
            

            </br>
            <div style="text-align: right">
                <button type="submit" class="btn btn-success">Cadastrar Evento</button>
                
        </form>


    </div>
</div>
</div>