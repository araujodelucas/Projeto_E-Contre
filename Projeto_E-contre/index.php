<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8"/>
    <title>E-Contre</title>
    <!--criando ligação entre o arquivo html com o css (folha de estilo)-->
    <!--href (hipertext reference) para chamar um arquivo de fora-->
    <link rel="stylesheet" type="text/css" href="_css/estilo.css"/>
    <link rel="stylesheet" type="text/css" href="">

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


    <form method="post" action="validacao.php" id="fLogin" name="formlogin">
        <p><label for="cNome">Usuário:</label>
        <input type="text" name="tLogin" id="cLogin" size="20" maxlength="20" placeholder="Digite seu usuário"/>
        <label for="cSenha">Senha: </label>  
        <input type="password" name="tSenha" id="cSenha" size="20" maxlength="8" placeholder="Senha com até 8 dígitos" />
        <input type="submit" name="tEntrar" value="Entrar"/></p>
    </form>

    <!--
    //<?php
    //    $msg_falha_login = "Usuário e/ou senha incorreta!!!";
    //    $userdefault = "lucas.araujo";
    //    $passdefault = "lu135asd";
    //    $login = $_POST["cNome"];
    //    $pass = $_POST["cSenha"];
    //    if ($userdefault == $login and $passdefault == $pass) {
    //        <input type="button" value="Ir" onclick="javascript: location.href='fotos.html';" />
    //        //header("Location:fotos.html");
    //        //<script language="JavaScript">;
    //        //window.location="fotos.html";
    //        //</script>;
    //    } else {echo $msg_falha_login;
    //      $msg_falha_login = "";  
    //    }
    //?>


            <!--delimitando a imagem-->
        <!--automaticamente, todas as caracteristicas de borda e de legenda,
        serão exibidas e aplicadas à essa imagem
        <figure class="foto-legenda">-->
        <!--anexando imagem-->
        
        <img id="icone" src="_imagens/home.png"/>
        
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
             <!--<li onmouseover="mudaFoto('_imagens/fotos.png')" onmouseout="mudaFoto('_imagens/fotos.png')"><a href="anuncios.php">Anúncios</a></li>-->
             <li onmouseover="mudaFoto('_imagens/contato.png')" onmouseout="mudaFoto('_imagens/contato.png')"><a href="fale-conosco.php">Fale conosco</a></li>
         </ul>
            </nav>
        </header>

        <!--delimitando a área principal da página-->
        <!--<section id="corpo">-->
        <!--<article>utilizar mais de um artigo(assunto) na section</article>-->
           <article id="noticia-principal">
               <!--Cabeçalho do artigo-->
               <header id="cabecalho-artigo">
            <hgroup>
            <!--<br/> (break row) ou (quebra de linha)-->
            <!--&nbsp; (non-breaking space) ou (espaço sem quebra)-->
        <h3>Página inicial > &nbsp; Sobre nós</h3>
        <h1>Saiba tudo sobre o E-Contre</h1>
        <h2>por Lucas de Araújo</h2>
        <!--<h3 class="direita">Atualizado em 23/Abril/2013</h3>-->
        </hgroup>
               </header>

<!--ORGANIZANDO O TEXTO NO EDITOR: Menu -> View -> Activy Editor -> Use soft wraps-->
        <!--Exemplos de formatação
        <b>negrito</b> <i>itálico</1> <em>enfase</em> <u>sublinhado</u> <s>riscado</s> ou <del>deletado</del>
        <span>tag p/ formatar pequenos trechos de textos</span> <span style="text-decoration: underline;">marcação sublinhada</span>
        <span style="text-decoration: overline">linha acima do texto</span>
        <span style="text-decoration: line-through">riscado</span>
        <span style="text-decoration: none">texto sem decoração alguma</span>
        <span style="font-weight: normal">qtde de negrito com a formatação normal</span>
        <span style="font-weight: bold">negrito</span>
        <span style="font-weight: bolder">mais ainda em negrito</span>
        <span style="font-weight: 400">nível de negrito entre 100 e 900</span>
        <h2 align="center">alinhando no centro da página(depreciado)</h2> ou <h2 style="text-align: center">left/right tbm</h2>
        <p style="text-align: justify">texto justificado
        <h2 style="text-align: right">O que é</h2>
        <p style="text-align: justify;text-indent: 50px ">parágrafo com 50px a margem da esquerda-->
        <!--<p>x<sup>2</sup> e H<sub>2</sub>0</p>Sobre e sob escrito-->
        <!--<code>tag específica pra formatar trecho de código</code>-->
        <!--pré-formatado, ou seja, todos os espaços, tabulações e enters do trecho dentro de <code>, serão considerados-->
        <!--<pre>
        <code>
        #include &lt;iostream&gt;
            int main(){
            cout << "Olá, Mundo!";
            return 0;
            }
        </code>
        </pre>-->

        <h2>O que é o E-Contre</h2>
        <p > O <span style="font-weight: 900">E-Contre</span> é um web site desenvolvido para facilitar a adoção de animais, podendo também, anunciar animais desaparecidos e encontrados.</p>
        <!--OBS: &shy; (soft hyphen) ou (hifenização rápida)-->
        <!--REDUZINDO O TAMANHO DA IMAGEM
        width (largura), porém não é recomendada, pois só reduz a imagem e não o tamanho
        EXEMPLO: <img src="fundo.jpg" width="200">->>
        <!--É recomendável usar uma ferramenta, como GIMP ou Photoshop, reduzir a imagem e Salvar para WEB,
        pois dessa maneira, pois reduz o tamanho da imagem-->
        <!--DELIMITANDO IMAGENS QUE FAZEM PARTE DE CONTEÚDO (dando significado semântico)-->

<!--definindo uma classe pra imagem-->
<figure class="foto-legenda">
<img src="_imagens/animais_fotos_caes.jpg">
<!--legenda da imagem (auxilia no mecanismo de busca e visualização do usuário)-->
    <figcaption>
        <h3>E-Contre</h3>
        <p>Não abandone. E-Contre.</p>
    </figcaption>
</figure>
        
        <h2>Como funciona o E-Contre</h2>
        <p> Visualize os anúncios que são publicados e, caso tenha interesse por algum animal anunciado, realize o seu cadastro para ter acesso as informações e contato do anunciante.</p>

           </article>
    <!--</section>-->

    <!--delimitando a área de rodapé-->
    <footer id="rodape">
    <p>Copyright &copy; 2018 - by Lucas de Araújo<br/>
        <a href="https://www.facebook.com/AraujodeLucas" target="_blank">Facebook</a> |
        <a href="https://twitter.com/1Lukaass_" target="_blank">Twitter</a></p>
    </footer>
    </div>
</body>
</html>
