<html>
    <head>
        <meta  charset="UTF-8">
        <meta id="viewport" name="viewport" content="width=device-width, user-scalable=no">
        <title>DIYS - NUNCA FOI TÃO FÁCIL SER BONITO</title>
        <link type="text/css" href="padrao.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="normalize.css-master/normalize.css" />
    </head>
    <body>
        <header>
            <div class="headerin">
                <div class="logomarca">
                    <a href="index.php"><img src="diys2.png"  /></a>
                    
                </div>
                
                <div class="login">
                    <a href="login.html">Entrar</a>
                </div>
            </div>
        </header>
        
        <nav>
           
            <div class="dentro">
                <nav class="search">

                    <?php
                        if(isset($_GET['pes']) && !empty($_GET['pes']))
                        {
                            $endereco = $_GET['pes'];
                            echo "o endereco pesquisado eh: ".$endereco;
                        }
                    ?>
                    <h1>Os melhores na palma da sua mão</h1>
                    <form method="GET"> 
                        <div class="iconepesquisa">
                            <a ><img src="end.png" /></a>
                        </div>
                        <input class="pesquisaend"type="text" placeholder="Insira o seu endereço" autocomplete="off" autocorrect="off" name="pes" required/>
                        <input class="buttonpes" type="submit" value="Pesquisar">
                    </form>
                </nav>
             </div>
        </nav>
        <div class="titulo">
            <h1>Espaços de beleza e estética em Maceió</h1>
        </div>
        <section>
        
                <div class="secdentro">
                    <div class="sec1">
                        <div class="cont">
                            <div class="imgbarbuto">
                                <a href=""><img src="barbuto.jpg"/></a>
                            </div>                          
                            <h3>Barbuto Barbearia</h3>
                            <div class="descricaonota">
                                <div class="nota">5.0</div>
                                <div class="imgestrela"><img src="https://d3i4yxtzktqr9n.cloudfront.net/web-eats-v2/92367108b11b8ee48b6f29cb3fef2d4d.svg"></div>
                                <div class="quantidadenotas">(500+)</div>
                            </div>
                        </div>
                            
                        <div class="cont2">
                            <div class="imgbarbuto">
                                <a href=""><img src="espacobeleza.jpg"/></a>
                            </div>                          
                            <h3>Espaço de Beleza</h3>
                            <div class="descricaonota">
                                <div class="nota">4.7</div>
                                <div class="imgestrela"><img src="https://d3i4yxtzktqr9n.cloudfront.net/web-eats-v2/92367108b11b8ee48b6f29cb3fef2d4d.svg"></div>
                                <div class="quantidadenotas">(500+)</div>
                            </div>
                        </div>
                        <div class="cont">
                            <div class="imgbarbuto">
                                <a href=""><img src="fiosdeouro.jpg"/></a>
                            </div>                          
                            <h3>Fios de Ouro</h3>
                            <div class="descricaonota">
                                <div class="nota">3.6</div>
                                <div class="imgestrela"><img src="https://d3i4yxtzktqr9n.cloudfront.net/web-eats-v2/92367108b11b8ee48b6f29cb3fef2d4d.svg"></div>
                                <div class="quantidadenotas">(500+)</div>
                            </div>
                        </div>      
                    </div>
                    <div class="sec1">
                        <div class="cont">
                            <div class="imgbarbuto">
                                <a href=""><img src="leticiapalma.jpg"/></a>
                            </div>                          
                            <h3>Letícia Palma</h3>
                            <div class="descricaonota">
                                <div class="nota">4.5</div>
                                <div class="imgestrela"><img src="https://d3i4yxtzktqr9n.cloudfront.net/web-eats-v2/92367108b11b8ee48b6f29cb3fef2d4d.svg"></div>
                                <div class="quantidadenotas">(500+)</div>
                            </div>
                        </div>
                            
                        <div class="cont2">
                            <div class="imgbarbuto">
                                <a href=""><img src="mancini.jpg"/></a>
                            </div>                          
                            <h3>Mancini Studio Hair</h3>
                            <div class="descricaonota">
                                <div class="nota">4.3</div>
                                <div class="imgestrela"><img src="https://d3i4yxtzktqr9n.cloudfront.net/web-eats-v2/92367108b11b8ee48b6f29cb3fef2d4d.svg"></div>
                                <div class="quantidadenotas">(500+)</div>
                            </div>
                        </div>
                        <div class="cont">
                            <div class="imgbarbuto">
                                <a href=""><img src="cinderela.jpg"/></a>
                            </div>                          
                            <h3>Cinderela</h3>
                            <div class="descricaonota">
                                <div class="nota">4.9</div>
                                <div class="imgestrela"><img src="https://d3i4yxtzktqr9n.cloudfront.net/web-eats-v2/92367108b11b8ee48b6f29cb3fef2d4d.svg"></div>
                                <div class="quantidadenotas">(500+)</div>
                            </div>
                        </div> 
                    </div>      
                </div>
        </section>
        
        <footer>
            <div class="footertop">
                
                <div  class="footertopleft">
                
                    <div  class="logomarca2">
                        <a href="index.php"><img src="diys2.png"  /></a>
                    </div >
                    
                    <div  class="download">
                        <a href="index.php"><img src="https://d3i4yxtzktqr9n.cloudfront.net/web-eats-v2/fdfc5304d9819be57b4783c6bef2e118.svg" class="cf"></a>
                        
                        <a href=""><img src="https://d3i4yxtzktqr9n.cloudfront.net/web-eats-v2/b3b3f379a592f6067b005dade511acc9.png" class="f3"></a>
                    </div >
                    
                </div >
                
                <div  class="footertopright">
                    <a class="about" href="">Sobre a DIYS</a>
                    <a href="">Leia nosso blog</a>
                    <a href="">Cadastre-se para fazer entregas</a>
                    <a href="">Adicione seu espaço de beleza</a>
                    
                </div >
                
                <div  class="footertopright">
                    <a class="about" href="">Ajuda</a>
                    <a href="">Leia as perguntas frequentes</a>
                    <a href="">Veja todas as cidades</a>
                    
                </div >
                
            </div >
            
            
        </footer>
    </body>
</html>