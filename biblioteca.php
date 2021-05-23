<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Programa de Reserva</title>
        <link href="estilo.css" rel="stylesheet" type="text/css" />
        <meta name="viewport" content="width=device-width, initial-scale=1">




    </head>
    <body>

        <?php
        require_once 'menu.php';
        ?>

        <br> <br> <br> <br>

        <h1 align="center" id="titulosite">Material de Estudo</h1>

        <h3 style="margin-left: 5%; margin-top: 5%; font-family: serif; text-align: left;margin-bottom: 40px">Aqui você poderá comprar livros online:</h3>

        <table border="4">
            <tr style="font-weight: bold">
                <td>Livro</td>
                <td>Título Livro</td>
                <td>Informações</td>
                <td>Onde Comprar?</td>
            </tr>
            <tr>
                <td><img id="fundamento" src="imagens/fundamentos.jpg" style="max-width:45%;max-height:40%;width: auto;height: auto;" alt="Fundamentos Matemática"/></td>
                <td>Fundamentos de Matemática Elementar - Vol. 1 - Conjuntos - Funções - 9ª Ed. 2013</td>
                <td>Autor: Murakami, Carlos - Iezzi, Gelson | Aborda a introdução ao conceito e os estudos das funções polinomias de 1º e 2º graus. Os capítulos iniciais (I a IV) são preparatórios para a função da Matemática no ensino médio, mas não devem tomar um tempo excessivo. O capítulo final é muito importante para a continuação do estudo de função inversa. Pode-se aproveitar o desenvolviemento de cada capítulo para revisar cálculo algébrico, principalmente em equações e inequações.</td>
                <td>
                    <a href="https://www.saraiva.com.br/fundamentos-de-matematica-elementar-vol-1-conjuntos-funcoes-9-ed-2013-5797297/p" target="_blank" id="saraiva">
                        <img id="saraiva" src="imagens/saraiva.png" style="margin-top: 20px; margin-bottom: 20px" alt="saraiva logo"/></a>
                    <br>
                    <a href="https://www.submarino.com.br/produto/116802241/livro-fundamentos-de-matematica-elementar-volume-1-conjuntos-e-funcoes?pfm_carac=fundamentos-de-matematica-elementar&pfm_page=search&pfm_pos=grid&pfm_type=search_page" target="_blank" id="submarino">
                        <img id="submarino" src="imagens/submarino.png" style="max-width:150px;max-height:150px;width: auto;height: auto; margin-top: 15px; margin-bottom: 20px" alt="submarino logo"/></a>
                    <br>
                    <a href="https://www.amazon.com.br/Fundamentos-Matem%C3%A1tica-Elementar-Gelson-Murakami/dp/8535716807/ref=sr_1_1?__mk_pt_BR=%C3%85M%C3%85%C5%BD%C3%95%C3%91&dchild=1&keywords=Livro+-+Fundamentos+de+matem%C3%A1tica+elementar&qid=1621491015&s=books&sr=1-1" target="_blank" id="amazon">
                        <img id="amazon" src="imagens/amazon2.png" style="max-width:150px;max-height:150px;width: auto;height: auto; margin-top: 15px; margin-bottom: 20px" alt="amazon logo"/></a>
                </td>
            </tr>
            <tr>
                <td><img id="informatica" src="imagens/informaticabasica.jpg" style="max-width:60%;max-height:90%;width: auto;height: auto;" alt="informatica basica"/></td>
                <td>Informática - Terminologia Básica <br> Windows Xp, Word Xp, Excel Xp</td>
                <td>Autor: Silva, Mario Gomes | <br> Este livro tem o objetivo de explicar,
                    de uma forma simples e rápida, os conceitos básicos de informática,
                    os principais fundamentos de computação, bem como os recursos do Windows XP para manipulação de arquivos e
                    configurações básicas do sistema operacional. Na parte sobre Word XP, aborda o mínimo necessário para construir textos,
                    salvar, formatar e imprimir. Na parte sobre Excel XP, detalha a criação de planilhas com cálculos, formatação, impressão,
                    copiar e mover células e muito mais.
                </td>
                <td>
                    <a href="https://www.saraiva.com.br/terminologia-basica-windows-xp-word-xp-excel-xp-122048/p"
                       target="_blank" id="saraiva">
                        <img id="saraiva" src="imagens/saraiva.png" style="margin-top: 20px; margin-bottom: 20px" alt="saraiva logo"/>
                    </a>
                    <br>
                    <a href="https://www.submarino.com.br/produto/192215/livro-informatica-terminologia-basica-windows-xp?pfm_carac=informatica-livro&pfm_index=4&pfm_page=search&pfm_pos=grid&pfm_type=search_page#info-section" target="_blank" id="submarino">
                        <img id="submarino" src="imagens/submarino.png"
                             style="max-width:150px;max-height:150px;width: auto;height: auto; margin-top: 15px; margin-bottom: 20px"
                             alt="submarino logo"/>
                    </a>
                    <br>
                    <a href="https://www.amazon.com.br/Inform%C3%A1tica-Terminologia-B%C3%A1sica-Windows-Excel/dp/8571949409/ref=sr_1_2?__mk_pt_BR=%C3%85M%C3%85%C5%BD%C3%95%C3%91&dchild=1&keywords=Terminologia+Basica%2C+Windows+Xp&qid=1621491807&s=books&sr=1-2" target="_blank" id="amazon">
                        <img id="amazon" src="imagens/amazon2.png"
                             style="max-width:150px;max-height:150px;width: auto;height: auto; margin-top: 15px; margin-bottom: 20px"
                             alt="amazon logo"/>
                    </a>
                </td>
            </tr>

            <tr>
                <td><img id="quimica" src="imagens/quimica.jpg" style="max-width:60%;max-height:90%;width: auto;height: auto;" alt="Quimica basica"/></td>
                <td>Química Básica Experimental</td>
                <td>Autor: Trindade, Diamantino Fernandes | <br> Um material de laboratório tem características nem sempre fáceis de perceber: precisa sumarizar toda uma visão de ciência, toda uma postura diante dos fenômenos observáveis. É o que encontramos nesta obra a um tempo clara e precisa: experimentos testados por várias turmas de Química Superior, introdução teórica sucinta e informativa, questionários que desenvolvem o senso crítico e a capacidade de pesquisar. Texto indispensável a todos os que pretendem bem conhecer o mundo da Química.
                </td>
                <td>
                    <a href="https://www.saraiva.com.br/quimica-basica-experimental-6-ed-2016-2873218/p"
                       target="_blank" id="saraiva">
                        <img id="saraiva" src="imagens/saraiva.png" style="margin-top: 20px; margin-bottom: 20px" alt="saraiva logo"/>
                    </a>
                    <br>
                    <a href="https://www.submarino.com.br/produto/2533530979/livro-quimica-basica-experimental?pfm_carac=quimica-basica-experimental&pfm_index=1&pfm_page=search&pfm_pos=grid&pfm_type=search_page" target="_blank" id="submarino">
                        <img id="submarino" src="imagens/submarino.png"
                             style="max-width:150px;max-height:150px;width: auto;height: auto; margin-top: 15px; margin-bottom: 20px"
                             alt="submarino logo"/>
                    </a>
                    <br>
                    <a href="https://www.amazon.com.br/Qu%C3%ADmica-B%C3%A1sica-Experimental-Diamantino-Trindade/dp/8527410907/ref=sr_1_6?__mk_pt_BR=%C3%85M%C3%85%C5%BD%C3%95%C3%91&crid=PKTXG125T7MD&dchild=1&keywords=quimica+basica&qid=1621492508&s=books&sprefix=quimica%2Cstripbooks%2C341&sr=1-6" target="_blank" id="amazon">
                        <img id="amazon" src="imagens/amazon2.png"
                             style="max-width:150px;max-height:150px;width: auto;height: auto; margin-top: 15px; margin-bottom: 20px"
                             alt="amazon logo"/>
                    </a>
                </td>
            </tr>
        </table>




        <?php
        require_once 'footer.php';
        ?>

        <style>
            p{
                margin-left: 10px;
            }
        </style>


    </body>
</html>
