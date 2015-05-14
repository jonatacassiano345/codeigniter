<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="http://localhost/codeigniter/dashboard">SGA - Sistema Gerenciador de Alunos</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">


                <li><a href="<?= base_url() ?>dashboard/login"><span class="glyphicon glyphicon-log-out" aria-hidden="true"> Logout</span></a></li>


                <li><a href="#"><span class="glyphicon glyphicon-question-sign" aria-hidden="true" data-toggle="modal" data-target="#myModal"> Ajuda</span></a></li>



                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel"><strong>Ajuda</strong></h4>
                            </div>
                            <div class="modal-body">
                                <p>1 - Dúvidas - </p>
                                Cadastros
                                <p>2 -</p>
                                Atualizações de dados
                                <p>3 -</p>
                                Exclusão
                                <p>4 -</p>
                                Lista de Frequência
                                <p>5 -</p>
                                Relatórios
                                <p>6 -</p>
                                Agenda


                            </div>
                            <div class="modal-footer">


                            </div>
                        </div>
                    </div>
                </div>







            </ul>

        </div>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            <ul class="nav nav-sidebar">

                <center><img src="assets/img/usuario.png" align="middle" height="100" width="100"></center>
                <li class="active"><a href="http://localhost/codeigniter/dashboard"><span class="glyphicon glyphicon-h"http://localhost/codeigniter/dashboardome" aria-hidden="true"> Tela Inicial <span class="sr-only">(current)</span>
                    </a></li>

                <li><a href="<?= base_url() ?>cliente"><span class="glyphicon glyphicon-user" aria-hidden="true"> Clientes</span></a></li>
                <li><a href="<?= base_url() ?>aluno"><span class="glyphicon glyphicon-user" aria-hidden="true"> Alunos</span></a></li>
                <li><a href="<?= base_url() ?>escola"><span class="glyphicon glyphicon-home" aria-hidden="true"> Escolas</span></a></li>                 
                <li><a href="<?= base_url() ?>veiculo"><span class="glyphicon glyphicon-bed" aria-hidden="true"> Veículos</span></a></li>
                <li><a href="<?= base_url() ?>itinerario"><span class="glyphicon glyphicon-bed" aria-hidden="true"> Itinerários</span></a></li>
                <li><a href="<?= base_url() ?>funcionario"><span class="glyphicon glyphicon-user" aria-hidden="true"> Funcionarios</span></a></li>
                <li><a href="<?= base_url() ?>viagem"><span class="glyphicon glyphicon-education" aria-hidden="true"> Lista</span></a></li>              
                <li><a href="<?= base_url() ?>usuario"><span class="glyphicon glyphicon-user" aria-hidden="true"> Usuários</span></a></li>
                <li><a href="<?= base_url() ?>relatorio"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"> Relatórios</span></a></li>

            </ul>



        </div>