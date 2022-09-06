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
            <img src="https://images-na.ssl-images-amazon.com/images/I/81AFV9waKfL.jpg" width="200px" height="300px">
          </a>
          <div id="btnBaixar">
          <a href="livros/thelovehypothesis.pdf" download="livrodomes"><button class="btn btn-outline-dark" type="button">Fazer download</button></a>
      </div>
        </div>
    <div class="col" id="divdir">
<div>
<h3 class="text-left">Descricão:</h3>
<p class="text-break text-start">Praise for Tweet Cute “From meme wars to social media marketing, Lord accurately depicts various sides of today's online culture. 
  Amid all the digital hoopla is an engaging story about family loyalty and pursuing one's own passions.</p>
<div class="d-grid gap-2 col-6 mx-autot">
  <a  href="{{route('login')}}"><button class="btn btn-primary" type="button">Atualizar leitura</button></a>
  <a href="{{route('forum')}}""><button class="btn btn-success" type="button">Acessar fórum</button></a>
  <a ><button class="btn btn-danger" type="button">Sair deste clube</button></a>
</div>
</div>
  </div>
</div>
</div>
