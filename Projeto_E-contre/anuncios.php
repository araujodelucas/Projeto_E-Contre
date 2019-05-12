<!--REPLICANDO O CONTEÚDO DO MENU PRINCIPAL-->
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8"/>
    <title>E-Contre</title>
    <!--criando ligação entre o arquivo html com o css (folha de estilo)-->
    <!--href (hipertext reference) para chamar um arquivo de fora-->
    <link rel="stylesheet" type="text/css" href="_css/estilo.css"/>
    <link rel="stylesheet" type="text/css" href="_css/fotos.css"/>


<?php 
/* esse bloco de código em php verifica se existe a sessão, pois o usuário pode
 simplesmente não fazer o login e digitar na barra de endereço do seu navegador 
o caminho para a página principal do site (sistema), burlando assim a obrigação de 
fazer um login, com isso se ele não estiver feito o login não será criado a session, 
então ao verificar que a session não existe a página redireciona o mesmo
 para a index.php.*/
session_start();
if((!isset ($_SESSION['tLogin']) == true) and (!isset ($_SESSION['tSenha']) == true))
{
  unset($_SESSION['tLogin']);
  unset($_SESSION['tSsenha']);
  header('location:index.php');
  }
 
$logado = $_SESSION['tLogin'];
?>


</head>
<!--chamando pasta/arquivo com a função que irá alterar a foto, através dos itens do menu-->
<script src="_javascript/funcoes.js"></script>
<!--opcional(já como padrão do html): especificar o tipo de linguagem, nesse caso, javascript
<script language="JavaScript" src="_javascript/funcoes.js"></script>-->
<body>
<div id="interface"><!--criando uma divisão, ou seja, uma delimitação para o site-->

    <header id="cabecalho">
        <hgroup><!--Agrupando os títulos semelhantes-->
            <h1>E-Contre</h1>
            <h2>Não abandone. E-Contre.</h2>
        </hgroup>

         <?php
            echo" Bem vindo $logado";
        ?>


        <!--delimitando a imagem-->
        <!--automaticamente, todas as caracteristicas de borda e de legenda,
        serão exibidas e aplicadas à essa imagem
        <figure class="foto-legenda">-->
        <!--anexando imagem-->
        <img id="icone" src="_imagens/fotos.png"/>
        <!--inserindo legenda na imagem
        <figcaption>
        Óculos
        </figcaption>
        </figure>-->

        <!--conteiner que cria uma área de navegação dentro do site
        Nesse caso, estou criando um menu de navegação-->
        <!--OBS: tipos de listas no HTML5:
        ordered lists - ol e unordered lists - ul (com demarcadores)
        Dentro de cada lista tem list items - li-->
        <!--Tipos de organização de listas ordenadas:
        type="1": orgdem numérica (padrão)
        type="a" ou type="A": ordem alfabética
        type="i" ou type="I": ordem em algarismos romano-->
        <!--Ordenando em ordem numérica e iniciando 3
        EXEMPLO: <ol type="1" start="3">
        OBS: parametro start só aceito valores numéricos, mesmo pra ordenar em ordem alfabética-->
        <!--Tipos de organização de listas não ordenadas:
        type="squares": demarcadores quadrados
        type="circle": demarcadores circulares com fundo claro
        type="disc": demarcadores circulares com fundo preto (padrão)-->
        <!--<a>ancora</a>: base para criação de links
      href="hipertext reference": parametro da ancora, referenciando outro site
      target="_blank": abri o site em outra aba-->

        <!--Menu de navegação-->
        <nav id="menu"><!--identificando o menu de navegação-->
            <h1>Menu Principal</h1>
            <!--lista não ordenada-->
            <ul type="disc">
                <!--itens da lista-->
                <li onmouseover="mudaFoto('_imagens/home.png')" onmouseout="mudoFoto('_imagens/home.png')"><a href="index.php">Home</a></li>
                <!--<li onmouseover="mudaFoto('_imagens/especificacoes.png')" onmouseout="mudaFoto('_imagens/fotos.png')"><a href="specs.html">Especificações</a></li>-->
                <li onmouseover="mudaFoto('_imagens/fotos.png')" onmouseout="mudaFoto('_imagens/fotos.png')"><a href="anuncios.php">Anúncios</a></li>
                <!--<li onmouseover="mudaFoto('_imagens/multimidia.png')" onmouseout="mudaFoto('_imagens/fotos.png')"><a href="multimidia.html">Multimídia</a></li>-->
                <li onmouseover="mudaFoto('_imagens/contato.png')" onmouseout="mudaFoto('_imagens/fotos.png')"><a href="fale-conosco.php">Fale conosco</a></li>
            </ul>
        </nav>
    </header>

    <section id="corpo-full">
        <article id="noticia-principal">
            <header id="cabecalho-artigo">
                <hgroup>
                    <h3>Animais > Anúncios</h3>
                    <h1>Anúncios de alguns animais</h1>
                    <h2>por Lucas de Araújo</h2>
                    <!--<h3 class="direita">Atualizado em 24/11/2018</h3>-->
                </hgroup>
            </header>
        </article>
    </section>

<p>Veja nossos anúncios que mostram alguns animais que estão à espera de um lar. Basta passar o mouse sobre uma das fotos para ver uma versão ampliada e com uma breve descrição.</p>

<!--CRIANDO ALBUM DE FOTOS COM A FORMATAÇÃO EM CSS-->
<ul id="album-fotos">
<a href="Descricao_Anuncio.php" target="_blank">
<li id="foto01"><span>Desconhecido</span></li>
<li id="foto02"><span>Malu</span></li>
<li id="foto03"><span>Bob</span></li>
<li id="foto04"><span>Não sei o nome</span></li>
<li id="foto05"><span>Kel</span></li>
<li id="foto06"><span>Sisi</span></li>
</ul>

    <!--delimitando a área de rodapé-->
    <footer id="rodape">
        <p>Copyright &copy; 2018 - by Lucas de Araújo<br/>
            <a href="https://www.facebook.com/AraujodeLucas" target="_blank">Facebook</a> |
            <a href="https://twitter.com/1Lukaass_" target="_blank">Twitter</a></p>
    </footer>
</div>
</body>
</html>