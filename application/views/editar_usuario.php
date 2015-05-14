
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="col-md-10">
        <h1 class="page-header">Atualizar Usuário</h1>
    </div>


    <div class="col-md-12">
        <form  action="<?= base_url() ?>usuario/salvar_atualizacao" method="post">
            <input type="hidden" id="idUsuario" name="idUsuario" value="<?= $usuario[0]->idUsuario;?>">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Informe o nome..." value="<?= $usuario[0]->nome; ?>" required>
            </div>
            <div class="row">

                <div class="col-md-7">
                    <label for="usuario">Login:</label>
                    <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Informe o login..." value="<?= $usuario[0]->usuario; ?>" required>
                </div>
                <div class="col-md-3">
                    <label for="nivel">Nível: </label>
                    <select id="nivel"class="form-control" name="nivel" required>
                        <option value="0">---</opton>
                        <option value="1"<?= $usuario[0]->nivel == 1 ? 'selected' : ''; ?>>Administrador</opton>
                        <option value="2"<?= $usuario[0]->nivel == 2 ? 'selected' : ''; ?>>Funcionário</opton>
                    </select>
                </div> 
                <div class="col-md-2">
                    <label for="status" ">Status: </label>
                    <select id="status"class="form-control" name="status" value="<?= $usuario[0]->status; ?>" required>
                        <option value="0">---</opton>
                        <option value="1"<?= $usuario[0]->status == 1 ? 'selected ' : ''; ?>>Ativo</opton>
                        <option value="2"<?= $usuario[0]->status == 2 ? 'selected ' : ''; ?>>Inativo</opton>
                    </select>

                </div>

            </div>
            <div class="row">

                <div class="col-md-4">
                    <div class="formgroup">
                        <label for="senha">Senha:</label>
                        <input type="button" class="btn btn-default btn-block" value="Atualizar Senha" data-toggle="modal" data-target="#myModal3">
                    </div>
                </div>

            </div>



            <div style="text-align: right">
                <button type="submit" class="btn btn-success">Atualizar</button>
                <button type="reset" class="btn btn-danger">Cancelar</button>
        </form>


    </div>
</div>
</div>



<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="<?= base_url() ?>usuario/salvar_senha" method="post">
            <input type="hidden" id="idUsuario" name="idUsuario" value="<?= $usuario[0]->idUsuario;?>">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Atualizar Senha</h4>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url() ?>usuario/salvar_senha" method="post">
                        <div class="row">                    
                            <div class="col-md-12" form-group>
                                <label for="senha_antiga">Senha Antiga:</label>
                                <input type="password" name="senha_antiga" id="senha_antiga" class="form-control">
                            </div>
                            <div class="col-md-12" form-group>
                                <label for="senha_nova">Nova Senha :</label>
                                <input type="password" name="senha_nova" id="senha_nova" onkeyup="checarSenha()" class="form-control">
                            </div>
                            <div class="col-md-12" form-group>
                                <label for="senha_confirmar">Confirma Nova Senha :</label>
                                <input type="password" name="senha_confirmar" id="senha_confirmar" onkeyup="checarSenha()" class="form-control">
                            </div>
                            <div class="col-md-12" form-group>
                                <div id="divcheck">

                                </div>
                            </div>
                        </div>

                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-primary" id="enviarsenha" href="<?= base_url()?>usuario/listar_usuario" disabled>Salvar Senha</button>
                </div>
            </div>
        </form>
    </div>
</div>


<script>
    $(document).ready(function () {
        $("#senha_nova").keyup(checkPasswordMatch);
        $("#senha_confirmar").keyup(checkPasswordMatch);
    });
    function checarSenha() {
        var password = $("#senha_nova").val();
        var confirmPassword = $("#senha_confirmar").val();

        if (password != confirmPassword || (password == '' || '' == confirmPassword)) {
            $("#divcheck").html("<span style='color: red'>Senhas não conferem!</span>");
            document.getElementById("enviarsenha").disabled = true;
        } else {
            $("#divcheck").html("<span style='color: green'>Senhas Iguais!</span>");
            document.getElementById("enviarsenha").disabled = false;
        }
    }
</script>


