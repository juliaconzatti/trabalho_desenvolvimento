@extends ('base.index')
@extends ('base.navbarLogado')

<div class="forms_log">
    <form>
      <div class="form-group row">
        <div class="d-flex align-items-center justify-content-center h-100">
          <div class="d-flex flex-column">
            <div class="row g-5">
              <h3 class="text-center">Histórico de leitura</h3>
              <input type="number" class="form-control" id="paginaslidas" placeholder="Número de páginas lidas">
              <textarea class="form-control" id="textAtualizacao" rows="7" placeholder="Escreva o que está achando do livro aqui"></textarea><br>
</div>
            <div class="d-grid gap-2">
              <button class="btn btn-outline-dark" type="submit" name="pub_atualizacao" id="cadastrar">Publicar atualização</button>
          </div>
        </div>
      </div>
    </form>
  </div>