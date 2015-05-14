<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="col-md-10">
        <h1 class="page-header">Novo Cliente</h1>
    </div>


    <div class="col-md-12">
        <form  action="<?= base_url() ?>cliente/cadastrar" method="post">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Informe o nome..." required>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label for="cpf">CPF:</label>
                    <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Informe o CPF..." required>
                    <?php

                    function validaCPF($cpf) { // Verifiva se o número digitado contém todos os digitos
                        $cpf = str_pad(ereg_replace('[^0-9]', '', $cpf), 11, '0', STR_PAD_LEFT);

                        // Verifica se nenhuma das sequências abaixo foi digitada, caso seja, retorna falso
                        if (strlen($cpf) != 11 || $cpf == '00000000000' || $cpf == '11111111111' || $cpf == '22222222222' || $cpf == '33333333333' || $cpf == '44444444444' || $cpf == '55555555555' || $cpf == '66666666666' || $cpf == '77777777777' || $cpf == '88888888888' || $cpf == '99999999999') {
                            return false;
                        } else {   // Calcula os números para verificar se o CPF é verdadeiro
                            for ($t = 9; $t < 11; $t++) {
                                for ($d = 0, $c = 0; $c < $t; $c++) {
                                    $d += $cpf{$c} * (($t + 1) - $c);
                                }

                                $d = ((10 * $d) % 11) % 10;

                                if ($cpf{$c} != $d) {
                                    return false;
                                }
                            }

                            return true;
                        }
                    }
                    ?>

                </div>
                <div class="col-md-4">
                    <label for="rg">RG:</label>
                    <input type="text" class="form-control" id="endereco" name="rg" placeholder="Informe o RG..." required>
                </div>
                <div class="col-md-4">
                    <div class="formgroup">
                        <label for="dataNascimento">Data de Nascimento:</label>
                        <input type="date" class="form-control" id="endereco" name="dataNascimento" placeholder="Data Nascimento..." required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="sexo">Sexo:</label>
                        <input type="text" class="form-control" id="" name="sexo" placeholder="Sexo..." required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="formgroup">
                        <label for="cep">Cep:</label>
                        <input type="text" class="form-control" id="cep" name="cep" placeholder="Informe o cep..." required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="formgroup">
                        <label for="endereco">Endereço:</label>
                        <input type="text" class="form-control" id="senha" name="endereco" placeholder="Informe o endereço..." required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="cidade">Cidade:</label>
                        <input type="text" class="form-control" id="" name="cidade" placeholder="Informe a cidade..." required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="formgroup">
                        <label for="estado">Estado:</label>
                        <input type="text" class="form-control" id="estado" name="estado" placeholder="Informe o estado..." required>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="formgroup">
                        <label for="nacionalidae">Nacionalidade:</label>
                        <input type="text" class="form-control" id="nacionalidade" name="nacionalidade" placeholder="Nacionalidade..." required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label for="telResdencial">Telefone Res:</label>
                    <input type="text" class="form-control" id="telResdencial" name="telResdencial" placeholder="Informe o Telefone Residencial..." required>
                </div>
                <div class="col-md-4">
                    <label for="telComercial">Telefone Com:</label>
                    <input type="text" class="form-control" id="telComercial" name="telComercial" placeholder="Informe o Telefone Comercial..." required>
                </div>
                <div class="col-md-4">
                    <div class="formgroup">
                        <label for="telCelular">Telefone Cel:</label>
                        <input type="text" class="form-control" id="telCelular" name="telCelular" placeholder="Informe o Telefone Celular..." required>
                    </div>
                </div>                
            </div>
            </br>
            <div class="row">
                <div class="col-md-3">
                    <input type="button" class="btn btn-default btn-block" value="Cadastrar Aluno" data-toggle="modal" data-target="#myModal2">
                </div>
            </div>
            </br>           
            </br>
            <div style="text-align: right">
                <button type="submit" class="btn btn-success">Cadastrar</button>
                <button type="reset" class="btn btn-danger">Limpar</button>
            </div>
    </div>



</form>
</div>


<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"><strong>Cadastro de Aluno</strong></h4>
            </div>
            <div class="modal-body">



                <form  action="<?= base_url() ?>aluno/cadastrar" method="post">
                    <div class="form-group">
                        <label for="nome">Nome:</label>
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Informe o nome..." required>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="formgroup">
                                <label for="dataNascimento">Data de Nascimento:</label>
                                <input type="date" class="form-control" id="endereco" name="dataNascimento" placeholder="Data Nascimento..." required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="escola">Escola:</label>
                            <select id="escola" class="form-control" name="escola" required>
                                <option value="0">---</opton>
                                <option value="1">Deputado José Bustamante</opton>
                                <option value="2">Antonio de Pádua</opton>
                                <option value="2">João Prado Margarida</opton>
                                <option value="2">CEU Veredas</opton>
                                <option value="2">CEU Itaim Paulista</opton>
                            </select>

                        </div>
                        <div class="col-md-4">
                            <div class="formgroup">
                                <label for="professor">Professor:</label>
                                <input type="text" class="form-control" id="professor" name="professor" placeholder="Professor..." required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="sala">Sala:</label>
                                <input type="text" class="form-control" id="sala" name="sala" placeholder="Sala..." required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="formgroup">
                                <label for="serie">Série:</label>
                                <input type="text" class="form-control" id="serie" name="serie" placeholder="Serie..." required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="formgroup">
                                <label for="horaEntrada">Horário Entrada:</label>
                                <select class="form-control">
                                    <option></option>
                                    <option>07:00</option>
                                    <option>08:00</option>
                                    <option>09:00</option>
                                    <option>10:00</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="horarioSaida">Horário Saída:</label>
                                <select class="form-control">
                                    <option></option>
                                    <option>12:30</option>
                                    <option>13:30</option>
                                    <option>15:00</option>
                                    <option>16:00</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="formgroup">
                                <label for="dataVencimento">Vencimento:</label>
                                <input type="text" class="form-control" id="dataVencimento" name="dataVencimento" placeholder="Vencimento..." required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="formgroup">
                                <label for="mensalidade">Mensalidade:</label>
                                <input type="text" class="form-control" id="mensalidade" name="mensalidade" placeholder="Mensalidade..." required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="inicioContrato">Início de Contrato:</label>
                            <input type="date" class="form-control" id="inicioContrato" name="inicioContrato" required>
                        </div>
                        <div class="col-md-4">
                            <label for="terminoContrato">Término de Contrato:</label>
                            <input type="date" class="form-control" id="terminoContrato" name="terminoContrato" required>
                        </div>

                    </div>
                    </br>
                    <div class="row">

                        <div class="col-md-4">

                        </div>

                    </div>

                    </br>
                    <div style="text-align: right">
                        <button type="submit" class="btn btn-success">Cadastrar</button>
                        <button type="reset" class="btn btn-danger">Limpar</button>
                    </div>
            </div>



            </form>

        </div>




    </div>
    <div class="modal-footer">


    </div>
</div>




