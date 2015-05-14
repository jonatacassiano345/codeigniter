<!DOCTYPE html>
<html>
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <h1 class="page-header">Painel de Informações</h1>

        <div class="row placeholders">
            <div class="col-xs-6 col-sm-3 placeholder">
                <img src="assets/img/email.jpg" a href="www.gmal.com" class="img-responsive" alt="Generic placeholder thumbnail"id="ID" draggable="true"></a>
                <h4>Email</h4>
                <a href="www.gmal.com">Acessar emails</a>
            </div>            
            <div class="col-xs-6 col-sm-3 placeholder">
                <img src="assets/img/agenda.png" class="img-responsive" alt="Generic placeholder thumbnail">
                <h4>Agenda</h4>
                <span class="text-muted" ><a href="<?= base_url() ?>agenda">Agende de eventos</a></span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
                <img src="assets/img/facebook.jpg" class="img-responsive" alt="Generic placeholder thumbnail">
                <h4>Facebook</h4>
                <span class="text-muted" ><a href="www.facebook.com">Página Facebook</a></span>
            </div>
        </div>
        <table class="table table-bordered">
           <tr>

                <th><font color ="ff0000">Data</font></th>
                <th><font color ="ff0000">Evento</font></th>
                <th><font color ="ff0000">Local</font></th>
                <th><font color ="ff0000">Informacoes</th>
                
            </tr>
            <tr>

                <th></th>
                <th></th>
                <th></th>
                <th><a href="#">Visualizar</a></th>                
            </tr>
        </table


</html>
