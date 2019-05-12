<!--REPLICANDO O CONTEÚDO DO MENU PRINCIPAL-->
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8"/>
    <title>E-Contre</title>
    <!--criando ligação entre o arquivo html com o css (folha de estilo)-->
    <!--href (hipertext reference) para chamar um arquivo de fora-->
    <link rel="stylesheet" type="text/css" href="_css/estilo.css"/>
    <link rel="stylesheet" type="text/css" href="_css/form.css"/>
<!--chamando pasta/arquivo com a função que irá alterar a foto, através dos itens do menu-->
<script src="_javascript/funcoes.js"></script>
<!--script para calcular o valor total da compra, através de uma funcção-->
<script type="text/javascript">
    function calc_total(){
        /*variável que pega o conteúdo da caixa de texto de quantidade, atráves do id e convertendo o valor obtido para inteiro*/
        var qtd = parseInt(document.getElementById('cQtd').value);
        /*considerando que cada óculos do google glass custe 1500 dólares*/
        var tot = qtd * 1500;
        /*atribuindo o cálculo a caixa de texto do preço*/
        document.getElementById('cTot').value = tot;
    }
</script>
</head>
<!--opcional(já como padrão do html): especificar o tipo de linguagem, nesse caso, javascript
<script language="JavaScript" src="_javascript/funcoes.js"></script>-->
<body>
<div id="interface"><!--criando uma divisão, ou seja, uma delimitação para o site-->

    <header id="cabecalho">
        <hgroup><!--Agrupando os títulos semelhantes-->
            <h1>E-Contre</h1>
            <h2>Não abandone. E-Contre.</h2>
        </hgroup>


        <!--delimitando a imagem-->
        <!--automaticamente, todas as caracteristicas de borda e de legenda,
        serão exibidas e aplicadas à essa imagem
        <figure class="foto-legenda">-->
        <!--anexando imagem-->
        <img id="icone" src="_imagens/contato.png"/>
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
                <!--<li onmouseover="mudaFoto('_imagens/especificacoes.png')" onmouseout="mudaFoto('_imagens/contato.png')"><a href="specs.html">Especificações</a></li>-->
                <!--<li onmouseover="mudaFoto('_imagens/fotos.png')" onmouseout="mudaFoto('_imagens/fotos.png')"><a href="anuncios.php">Anúncios</a></li>-->
                <!--<li onmouseover="mudaFoto('_imagens/multimidia.png')" onmouseout="mudaFoto('_imagens/contato.png')"><a href="multimidia.html">Multimídia</a></li>-->
                <li onmouseover="mudaFoto('_imagens/contato.png')" onmouseout="mudaFoto('_imagens/contato.png')"><a href="fale-conosco.php">Fale conosco</a></li>
            </ul>
        </nav>
    </header>

<section id="corpo-full">
    <!--<article>utilizar mais de um artigo(assunto) na section</article>-->
    <article id="noticia-principal">
        <!--Cabeçalho do artigo-->
        <header id="cabecalho-artigo">
            <hgroup>
                <!--<br/> (break row) ou (quebra de linha)-->
                <!--&nbsp; (non-breaking space) ou (espaço sem quebra)-->
                <h3>Fale Conosco > Contato</h3>
                <h1>Formulário de Contato</h1>
                <h2>por Lucas de Araújo</h2>
                <!--<h3 class="direita">Atualizado em 01/Maio/2013</h3>-->
            </hgroup>
        </header>

<!--FOMRULÁRIO DA´PÁGINA
<fieldset> conjunto de campos
<legend> nome que identifica o conjunto de campos
<input> cria um objeto de entrada de dados no formulário
OBS: por padrão, se não for declarado o type, o html considera o input como caixa de texto
parametro name: nome do objeto
parametro size: tamanho da caixa em caracteres
parametro maxlength: comprimento máximo de caracteres
parametro placeholdeer:indica qual vai ser o conteúdo da caixa
parametro type="password": define o campo para deixar os caracteres em segredo
parametro type="email": serve para o navegador validar se o email esta no formato certo
radio button: campo pra selecionar opção
OBS: dentro de um mesmo grupo de objeto de radio, todos aqueles que fizerem parte do grupo, devem ter o mesmo nome
label: utilizado pra referencias os objetos aos seus ids
checked: radio button já vem marcado-->

<!--Método get: é o mais veloz, porém, é o menos seguro. Veloz pois, pega todos os dados do formulário e coloca na URL, ou seja, sempre que utilizar o método get, todos os dados de todos os objetos do formulário, vão ser colocados logo após a URL, assim que o formulário for enviado.
Quando usar: em campos simples, como simples buscas
Método post: mais lento, porém, mais seguro, pois os dados não serão enviados pela URL, e sim, por pacotes dentro da solicitação que se faz ao site.
Quando usar: em formulários mais complexos e que pedem informações como, senhas, nº de cartão de crédito
OBS: O metodo post não é tão seguro, pois não inclui requisitos importantes como criptografia, para isso, é necessário utilizar outros protocolos mais "poderosos"
Parametro action: para onde os dados serão enviados
OBS: o action mais simples é pegar os dados e enviá-los por e-mail. mailto:endereco_de_email (necessário ter configurado um client de e-mail instalado na máquina. Exemplo: outlook)-->
<form method="post" id="fContato" action="mailto:contato@cursosemvideo.com" oninput="calc_total();">
    <fieldset id="usuario"><legend>Identificação do Usuário</legend>
        <p><label for="cNome">Nome:</label>
        <input type="text" name="tNome" id="cNome" size="20" maxlength="50" placeholder="Nome completo"/></p>
        <p><label for="cSenha">Senha: </label>  
        <input type="password" name="tSenha" id="cSenha" size="8" maxlength="8" placeholder="8 dígitos" /></p>
        <p><label for="cMail"></label> E-mail: 
        <input type="email" name="tmail" id="cMail" size="20" maxlength="40"/></p>
        <fieldset id="sexo"><legend>Sexo</legend>
                    <input type="radio" name="tsexo" id="cmasc" checked="" /> <label for="cmasc">Masculino</label><br/>
                    <input type="radio" name="tsexo" id="cfem"/> <label for="cfem">Feminino</label>
                </fieldset>
        <p><label for="cNasc">Data de Nascimento: </label>  
        <input type="date" name="tnasc" id="cnasc"/></p>
    </fieldset>

<fieldset id="endereco"><legend>Endereço do Usuário</legend>
    <p><label for="cRua">Logradouro: </label>  
    <input type="text" name="tRua" id="cRua" size="13" maxlength="80" placeholder="Rua, Av, Trav ..." /></p>
    <p><label for="cNum">Número: </label>  
    <input type="number" name="tNum" id="cNum" min="0" max="99999"/></p>
    <p><label for="cEst">Estado: </label>
    <!--<select>: tag/objeto para selecionar o estado, criando caixas combinadas-->    
    <select name="tEst" id="cEst">
        <!--value: enviando o valor ao selecionar o estado-->
        <!--selectd: torna o estado selecionado por padrão ao carregar a página-->
        <!--<optgroup: cria um grupo de opções, nesse caso, agrupa os estados por regiões. Falicita a navegação/experiência do usuário-->
        <!--list: faz a relação do datalist com a caixa de texto, através do auto complemento. Importante para qu não seja digitado a cidade de maneira incorreta-->
        <!--range: parametro que cria um objeto(linha na horizontal) para selecionar o valor mínimo e máximo, podendo utilizar o step para dar saltos-->
        <!--checkbox: caixa de seleção, podendo ser selecionada já no carregamento da página, através do checked-->
        <!--color: parametro dentro do type do input, criando um objeto de cor, podendo carregar uma cor por padrão, através do parametro value-->
        <!--readonly: parametro dentro do input, fazendo com que o campo esteja vísivel ao usuário, não podendo editá-lo-->
        <!--oninput: parametro dentro do form, para que quando digitar qualquer coisa, ele dispara um procedimento-->
        <optgroup label="Região Sudeste">
                <option value="RJ">Rio de Janeiro</option>
                <option value="SP" selected>São Paulo</option>
                <option value="MG">Minas Gerais</option>
        </optgroup>

        <optgroup label="Região Sul">
                <option value="PR">Paraná</option>
                <option value="SC">Santa Catarina</option>
                <option value="RS">Rio Grande do Sul</option>
        </optgroup>        
    </select></p>
    <p><label for="cCid">Cidade:</label>
        <input type="text" name="tCid" id="cCid"/ maxlength="40" size="20" placeholder="Sua cidade" list="cidades"></p>
        <!--<datalist>: recurso novo o HTML5 para lista de dados-->
        <datalist id="cidades">
            <option value="Rio de Janeiro"></option>
            <option value="Nova Iguaçu"></option>
            <option value="Niterói"></option>
            <option value="Belford Roxo"></option>
        </datalist>
</fieldset>

<fieldset id="mensagem"><legend>Mensagem do Usuário</legend>
    <p><label for="cUrg">Grau de Urgência:</label>
        Mín<input type="range" name="tUrg" id="cUrg" min="0" max="10" step="2"/>Máx</p>
    <p><label for="cMsg">Mensagem:</label>
        <!--área de caixa de texto maior que a comum-->
        <textarea name="tMsg" id="cMsg" cols="35" rows="5" placeholder="Deixe aqui sua mensagem"></textarea></p>
</fieldset>

<!--<fieldset id="pedido"><legend>Quero um Google Glass</legend>
    <p><input type="checkbox" name="tPed" id="cPed" checked>
        <label for="cPed">Gostaria de adquirir um Google Glass quando disponível</label></p>
    <p><label for="cCor">Cor:</label>
        <input type="color" name="tCor" id="cCor" value="#0000FF" /></p>
    <p><label for="cQtd">Quantidade:</label>
        <input type="number" name="tQtd" id="cQtd" min="0" max="5" value="0" /></p>
    <p><label for="cTot">Preço Total: R$</label>
        <input type="text" name="tTot" id="cTot" placeholder="Total à pagar" readonly /></p>
</fieldset>-->
</form>
</article>
</section>

<!--<input type="submit" name="Enviar">-->
<input type="image" name="tEnviar" src="_imagens/botao-enviar.png"/>

    <!--delimitando a área de rodapé-->
     <footer id="rodape">
    <p>Copyright &copy; 2018 - by Lucas de Araújo<br/>
        <a href="https://www.facebook.com/AraujodeLucas" target="_blank">Facebook</a> |
        <a href="https://twitter.com/1Lukaass_" target="_blank">Twitter</a></p>
    </footer>
</div>
</body>
</html>