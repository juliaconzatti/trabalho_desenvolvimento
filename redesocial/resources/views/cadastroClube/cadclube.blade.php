@extends ('base.index')
@extends ('base.navbarLogado')

<form action='/cadastroclube/store' method='POST'>
    <input type='hidden' name='_token' value='{{ csrf_token() }}' />

    <br>
    <div class="mt-5">
    <div class="carouselcards">
        <div id="carouselCadastro" class="carousel carousel-dark slide" data-ride="carousel" data-interval="0">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <!-- parte 1 dos cards do carrossel -->
        <div class="row row-cols-1 row-cols-md-5 g-4">
        <div class="col"></div>  
        <div class="col">
            <div class="card h-100 w-100"  class="cardscrs">
              <img src="img/imagem1.png" class="card-img-top" alt="">
              <div class="card-body">
                <h5 class="card-title">Clube de Romance</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              </div>
              <div class="card-footer text-center">
              <button class="btn btn-outline-dark" type="submit" value="1" name="cadastrar" id="cadastrar">Cadastrar-se no clube</button>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img src="img/imagem2.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Clube de Fantasia</h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
              </div>
              <div class="card-footer text-center">
              <button class="btn btn-outline-dark" type="submit" name="cadastrar" id="cadastrar">Cadastrar-se no clube</button>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img src="img/imagem1.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Clube Chick Lit</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
              </div>
              <div class="card-footer text-center">
              <button class="btn btn-outline-dark" type="submit" name="cadastrar" id="cadastrar">Cadastrar-se no clube</button>
              </div>
            </div>
          </div>
          <div class="col"></div>  
        </div>
        </div>
        <!-- segunda parte dos cards no carrossel -->
        <div class="carousel-item">
        <div class="row row-cols-1 row-cols-md-5 g-4">
        <div class="col"></div>
          <div class="col">
            <div class="card h-100">
              <img src="img/imagem2.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Clube de Terror</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              </div>
              <div class="card-footer text-center">
              <button class="btn btn-outline-dark" type="submit" name="cadastrar" id="cadastrar">Cadastrar-se no clube</button>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img src="img/imagem1.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Clube de Mistério</h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
              </div>
              <div class="card-footer text-center">
              <button class="btn btn-outline-dark" type="submit" name="cadastrar" id="cadastrar">Cadastrar-se no clube</button>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img src="img/imagem2.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Clube de Ficção</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
              </div>
              <div class="card-footer text-center">
              <button class="btn btn-outline-dark" type="submit" name="cadastrar" id="cadastrar">Cadastrar-se no clube</button>
              </div>
            </div>
          </div>
          <div class="col"></div>
        </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselCadastro" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselCadastro" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        </div>
    </div>