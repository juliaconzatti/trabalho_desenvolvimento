@extends ('base.index')
@extends ('base.navbarLogado')

<div class="forms_log">
    <form>
    <div class="form-group row">
            <div class="d-flex align-items-center justify-content-center h-100">
                <div class="d-flex flex-column">
    <div class="row g-5">
        <h3 class="text-center">Faça sua resenha aqui!</h3>
      <input type="text" class="form-control" id="tituloresenha" placeholder="Título da resenha">
      <textarea class="form-control" id="textResenha" rows="7" placeholder="Escreva aqui a sua opinião sobre o livro"></textarea><br>
      </div><br>
      <div class="d-grid gap-2">
                            <button class="btn btn-outline-dark" type="submit" name="pub_resenha"
                                id="cadastrar">Publicar resenha</button><br>
                        </div>
                        </div>
                        </div>
                        </div>
    </form>
    </div>