<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="col-md-10">
        <h1 class="page-header">Novo Itinerario</h1>
    </div>

    <div class="col-md-12">
        <form  action="<?= base_url() ?>itinerário/cadastrar" method="post">

            <div class="row">                
                <div class="col-md-6">
                    <div class="formgroup">
                        <label for="dataNascimento">Nome do Itinerário:</label>
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Informe o nome do itinerário..." required>
                    </div>
                </div>
            </div>
            <div class="row">                
                <div class="col-md-4">
                    <div class="formgroup">
                        <label for="horaInicio">Horário Entrada 1:</label>
                        <select class="form-control">
                            <option></option>
                            <option>07:00</option>
                            <option>08:00</option>
                            <option>09:00</option>
                            <option>10:00</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="formgroup">
                        <label for="horaTermino">Hora Saída 1:</label>
                        <select class="form-control">
                            <option></option>
                            <option>12:30</option>
                            <option>13:30</option>
                            <option>15:00</option>
                            <option>16:00</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">                
                <div class="col-md-4">
                    <div class="formgroup">
                        <label for="horaInicio">Horário Entrada 2:</label>
                        <select class="form-control">
                            <option></option>
                            <option>07:00</option>
                            <option>08:00</option>
                            <option>09:00</option>
                            <option>10:00</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="formgroup">
                        <label for="horaTermino">Hora Saída 2:</label>
                        <select class="form-control">
                            <option></option>
                            <option>12:30</option>
                            <option>13:30</option>
                            <option>15:00</option>
                            <option>16:00</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">                
                <div class="col-md-6">
                    <label for="motorista">Motorista:</label>
                    <select class="form-control">
                        <option></option>
                        <option>Eraldo Alves de Lima</option>
                        <option>João Carlos</option>                    
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="monitor">Monitor:</label>
                    <select class="form-control">
                        <option></option>
                        <option>Juliana Silva Damasceno</option>
                        <option>Tayse Silva de Lima</option>                    
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="formgroup">
                        <label for="horaInicio">Veículo:</label>
                        <select class="form-control">
                            <option></option>
                            <option>Ducato Minibus 2.2 </option>
                            <option>Ducato Micronibus</option>                    
                        </select>
                    </div>
                </div>
            </div>
            </br>
            <div>
                <p>
                    <button type="submit" class="btn btn-primary btn-xs">Cadastrar Itinerário</button>
                    
                </p>
            </div>
        </form>

    </div>



</div>