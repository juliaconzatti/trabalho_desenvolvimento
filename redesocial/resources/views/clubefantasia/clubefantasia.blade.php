@extends ('base.index')
@extends ('base.navbarLogado')

<form action='/cadastroclube/store' method='POST'>
    <input type='hidden' name='_token' value='{{ csrf_token() }}' />


   <br>
    <div class="container">
  <div class="row">
    <div class="col" id="divesq">
      <h3 class="text-left">Livro do mês:</h3>
          <a href="clubeRomance.php">
            <img src="https://m.media-amazon.com/images/I/51teHvn9B7L._SY346_.jpg" width="200px" height="300px">
          </a>
          <div id="btnBaixar">
          <a href="livros/crescentcity.pdf" download="livrodomes"><button class="btn btn-outline-dark" type="button">Fazer download</button></a>
      </div>
        </div>
    <div class="col" id="divdir">
<div>
<h3 class="text-left">Descricão:</h3>
<p class="text-break text-start">Sarah J. Maas's brand-new CRESCENT CITY series begins with House of Earth and Blood: 
  the story of half-Fae and half-human Bryce Quinlan as she seeks revenge in a contemporary fantasy world of magic, 
  danger, and searing romance.</p>
<div class="d-grid gap-2 col-6 mx-autot">
  <a  href="{{route('login')}}"><button class="btn btn-primary" type="button">Atualizar leitura</button></a>
  <a href="{{route('forum')}}""><button class="btn btn-success" type="button">Acessar fórum</button></a>
  <a href="{{route('forum')}}""><button class="btn btn-danger" type="button">Sair do clube</button></a>
</div>
</div>
  </div>
</div>
</div>
