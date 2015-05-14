
<div class="container">

    <form class="form-signin" method="post" action="<?= base_url() ?>dashboard/logar">
        <h2 class="form-signin-heading" align="center">Acesso Restrito</h2>
        <label for="usuario" class="sr-only"></label>
        <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuario" required autofocus>
        <label for="senha" class="sr-only">Senha</label>
        <input type="password"  class="form-control" id="senha" name="senha" placeholder="Senha" required autofocus>
        <div class="checkbox">

        </div>

        <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
        
    </form>

</div>

