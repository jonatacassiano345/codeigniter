
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="col-md-10">
        <h1 class="page-header">Novo Usuário</h1>
    </div>


    <div class="col-md-12">
        <form  action="<?= base_url() ?>usuario/cadastrar" method="post">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Informe o nome..." required>
            </div>
            <div class="row">

                <div class="col-md-7">
                    <label for="usuario">Login:</label>
                    <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Informe o login..." required>
                </div>
                <div class="col-md-2">
                    <label for="nivel">Nível: </label>
                    <select id="nivel"class="form-control" name="nivel" required>
                        <option value="0">---</opton>
                        <option value="1">Administrador</opton>
                        <option value="2">Funcionário</opton>
                    </select>
                </div> 
                <div class="col-md-2">
                    <label for="status" ">Status: </label>
                    <select id="status"class="form-control" name="status" required>
                        <option value="0">---</opton>
                        <option value="1">Ativo</opton>
                        <option value="2">Inativo</opton>
                    </select>

                </div>

            </div>
            <div class="row">
                
                <div class="col-md-4">
                    <div class="formgroup">
                        <label for="senha">Senha:</label>
                        <input type="password" class="form-control" id="senha" name="senha" placeholder="Informe a senha..." required>
                    </div>
                </div>

            </div>



            <div style="text-align: right">
                <button type="submit" class="btn btn-success">Enviar</button>
                <button type="reset" class="btn btn-danger">Cancelar</button>
        </form>


    </div>
</div>
</div>