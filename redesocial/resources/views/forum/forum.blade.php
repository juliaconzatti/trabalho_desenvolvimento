//MUDAR MUITA COISA AQUI
@extends ('base.index')

<div class="forms_log">     
    <form>
    <div class="form-group row">
            <div class="d-flex align-items-center justify-content-center h-100">
                <div class="d-flex flex-column">
    <div class="row g-5">
        <br>
        <h4 class="text-center">Compartilhe suas opiniões no fórum :)</h4>
      <input type="text" class="form-control" id="tituloforum" placeholder="Título da discussão">
      <textarea class="form-control" id="textareaForum" rows="7" placeholder="Escreva aqui"></textarea><br>
      </div>
      <div class="d-grid gap-2">
                            <button class="btn btn-outline-dark" type="submit" name="pub_forum" id="cadastrar">Publicar no fórum</button><br>
                        </div>
                        </div>
                        </div>
                        </div>
                        <div class="card-footer text-center">
                        <button type="button" id="btnForum" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#divForum">Responder esse tópico</button>
                        </div>
                        <div class="modal fade" id="divForum" tabindex="-1" aria-labelledby="divForumLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="divForumLabel">Responder esse tópico</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="salvarResposta.php" id="formularioResposta">
                        <div class="row g-1">
                            <input type="hidden" id="id" name="id"/>
                            <div class="col-sm">
                                <input type="text" class="form-control" id="tituloResposta" placeholder="Re: Título da discussão">
                            </div>
                            <div class="col-sm">
                            <textarea class="form-control" id="textareaForumResp" rows="7" placeholder="Escreva sua resposta aqui"></textarea><br>
                        </div>
                        </div>