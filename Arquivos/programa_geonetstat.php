
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt-br" lang="pt-br">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<meta name="keywords" content="IP,netstat,geolocalização">
<meta name="description" content="Localize todas as conexões em seu computador e determine em que país está o IP remoto de cada conexão.">
<meta property="og:title" content="Geonetstat" />
<meta property="og:url" content="http://www.insecuritynet.com.br/site/produtos/programa_geonetstat.php" />
<meta property="og:image" content="http://www.insecuritynet.com.br/site/produtos/images_produtos/box_geonetstat_novo.jpg" />
<meta property="og:site_name" content="Insecuritynet - Ensino em Segurança Digital" />
<meta property="og:description" content="Localize todas as conex&otilde;es em seu computador e determine em que pa&iacute;s est&aacute; o IP remoto de cada conex&atilde;o."/>
<meta name="Robots" content="INDEX,FOLLOW" />
<META NAME="RESOURCE-TYPE" CONTENT="DOCUMENT" />
<META NAME="DISTRIBUTION" CONTENT="GLOBAL" />
<META NAME="AUTHOR" CONTENT="Insecuritynet Cursos" />
<META NAME="COPYRIGHT" CONTENT="Copyright (c) Insecuritynet Cursos" />
<meta name="language" content="pt-br" />
<META NAME="RATING" CONTENT="GENERAL" />

<title>Geonetstat Localiza&ccedil;&atilde;o de IP</title>
<link rel="stylesheet" href="../css/inetcss.php" type="text/css">
<script type="text/javascript" src="../css/funcoes_menu.js"></script>
</head>
<body onload="vertical();verticallado();horizontal();horizontallado();">
<script type="text/javascript" src="../css/jquery-1.2.2.js"></script>
<script type="text/javascript" src="../css/funcoes_navegadores.js"></script>
<div id="tudo">
<div id="conteudo">
<p>

<div id="logo">
<a href="../index.php" class="sem_efeito"><img src="../images/novo_superio_inet.png" border="0" width="250" height="55" alt="Insecuritynet"></a>
</div>

<style type="text/css">
	body { background-image: url("../images/fundo_clean.jpg");
	background-attachment: fixed;}
</style>



<script type="text/javascript">
tyntVariables = {"ap":"More"};
</script>



<div id="menu_lateral">

<ul id="nav" class="menulado">
  <li class="submenulado"><a href="../cursos/cursos_onlines.php">Seja nosso aluno<br>Conhe&ccedil;a nossos cursos</a>
      <ul>
      <li><a href="../cursos/cursos_onlines.php">Online</a></li>
      <li><a href="../cursos/cursos_presenciais.php">Presencial</a></li>
    </ul>
  </li>

  <li class="submenulado"><a href="../semifranquias/semifranquias.php">Seja nosso Licenciado<br>Para escolas de inform&aacute;tica</a>
    <ul>
 Implante nossos cursos em sua escola
  
      <li>
      <li><a href="../semifranquias/implantacao_ascd.php">Brasil</a></li>
      <li><a href="../semifranquias/implantacao_ascd.php?land=2">Angola</a></li>
	  <li><a href="../semifranquias/implantacao_ascd.php?land=3">Portugal</a></li>
    </ul>
  </li>

  <li class="submenulado"><a href="../ensino_corporativo/ensino_corporativo.php">Ensino Corporativo<br>Para empresas e universit&aacute;rios</a>
 <ul>
      <li><a href="../ensino_corporativo/qualificacao_de_equipes.php">Empresas - Qualifica&ccedil;&atilde;o de equipes</a></li>
      <li><a href="../ensino_corporativo/cursos_extracurriculares_informatica.php">Universit&aacute;rios - Cursos Extracurriculares</a></li>     
    </ul>
  </li>
 
</ul>

</div>

<div id="menu_superior">
<style type="text/css"> 
body { font: normal 62.5% verdana; } 
</style>

<ul id="barra" class="menucimabar">
 
   <li class="menucimavertical"><a href="../index.php" title="Voltar a página inicial">Inicio</a>
   <ul id="nav" class="menucima">
   <li><a href="../index.php">Página Inicial</a></li>
   <li><a href="../area_cliente">Área do cliente</a></li>
   </ul>
   </li>
 
   <li class="menucimavertical"><a href="../cursos/cursos.php">Cursos</a> 
    <ul id="nav" class="menucima">
                <li class="submenucima"><a href="../cursos/cursos_onlines.php">Online</a> 
        <ul>
                        <li><a href="../cursos/curso_ascd_online.php">ASCD - <i>Seguran&ccedil;a Redes/Internet/SO</i></a></li>
                        <li><a href="../cursos/curso_ppas_online.php">PPAS - <i>Programa&ccedil;&atilde;o em Perl</i></a></li>
                        <li><a href="../cursos/curso_sbwd_online.php">SBWD - <i>Seguran&ccedil;a B&aacute;sica Windows</i></a></li>
        </ul>
                </li>
 
           
                <li class="submenucima"><a href="../cursos/cursos_presenciais.php">Presenciais</a> 
        <ul>
                        <li><a href="../cursos/curso_ascd_presencial_ascd.php">CURSO ASCD</a></li>

        </ul>
                </li>
                <li class="submenucima"><a href="../ensino_corporativo/ensino_corporativo.php">Ensino Corporativo</a> 
        <ul>
                        <li><a href="../ensino_corporativo/qualificacao_de_equipes.php">Empresas - Qualifica&ccedil;&atilde;o de equipes</a></li>
                        <li><a href="../ensino_corporativo/cursos_extracurriculares_informatica.php">Universit&aacute;rios - Cursos Extracurriculares</a></li>
        </ul>
                </li>
    </ul>
   </li>
       <li class="menucimavertical"><a href="../semifranquias/semifranquias.php">Semifranquia</a>          
        <ul id="nav" class="menucima"> 
        <li><a href="../semifranquias/implantacao_ascd.php">Brasil</a></li>
		<li><a href="../semifranquias/implantacao_ascd.php?land=2">Angola</a></li>
		<li><a href="../semifranquias/implantacao_ascd.php?land=3">Portugal</a></li>
        </ul> 
        </li>
				
    <li class="menucimavertical"><a href="../certificados/certificacoes.php" title="Certificações Insecuritynet">Certificações</a></li>	

       <li class="menucimavertical"><a href="../produtos/softwares.php">Softwares</a>                   
        <ul id="nav" class="menucima"> 
		<li><a href="../insecuritynet3x/insecuritynet3.php">Insecuritynet 3.X</a></li>
        <li><a href="../produtos/produtos.php">Outros Aplicativos</a></li>
		<li><a href="../tools_online/tks.php">TKS  <i>Online</i></a></li>		
        </ul> 
        </li>
	
    <li class="menucimavertical"><a href="../materias/materias.php" title="Matérias sobre segurança na Internet">Matérias</a></li>	
	<li class="menucimavertical"><a href="../contato.php" title="Fale Conosco">Contato</a></li>
	<li class="menucimavertical"><a href="../quem_somos.php" title="Sobre a Empresa">Quem Somos</a></li>
 </ul>
</div>

<div id="produtos">

<div id="produtos_sub">
<table style="text-align: left; width: 425px; height: 141px;"
 border="0" cellpadding="2" cellspacing="2">
  <tbody>
    <tr>
      <td><img style="border: 0px solid ; width: 180px; height: 147px;"alt="" src="images_produtos/geonetstat3.jpg"></td>
      <td>&nbsp;<span style="font-weight: bold; font-family: Verdana;">&nbsp;&nbsp;GEONETSTAT 1.0 <br>
&nbsp;&nbsp;&nbsp;&nbsp;<small><small>Saiba onde seu computador est&aacute; conectado</small></small></span></td>
    </tr>
  </tbody>
</table>
<br>

&nbsp;O GeoNetstat &eacute; um aplicativo desenvolvido por nossa empresa
capaz de obter todas as conex&otilde;es em seu computador e
determinar de que pa&iacute;s &eacute; o IP remoto de cada
conex&atilde;o, independente de ser cliente ou servidor,
possibilitando descobrir a localiza&ccedil;&atilde;o de um IP em
tempo real.<br>
&nbsp; A ferramenta possui um Mapa Mundi para voc&ecirc; poder
visualizar em quais pontos do planeta seu computador est&aacute;
conectado.<br><br>
</div> 

<div id="cor_menu_aberto">
<!-- INI MENU -->
<small><span style="font-family: Verdana;"><br></span></small>
<div id="tyntPrint"></div>

<span style="font-family: Verdana;">
<div id="tabbed_content7">
<div style="display: block;" class="tabc" id="tc4">
<noscript><a class="clr" name="tba4"></a></noscript>
<div class="tabc_bg">
<div class="tabc_bottom">
<div class="tabc_top">
<div class="mleft mbottom mtop">

<a name="num-1"></a><a name="faq_1"></a>
<div class="faq_gen">
<div class="faq_num">
</div>
<div class="faq_ttl">
<a class="ttl icon_04 icon_arrowright" href="javascript:%20togglefaq(1);">Finalidade</a>
<div class="faq_pleft">
<div style="display: none;" id="box-1">
<div class="clear"></div>
</div>
</div>
</div>
</div>
<div style="display: none;" id="faq1" class="faq_txt">

&nbsp;A
finalidade do aplicativo &#233; determinar em que pontos do planeta
seu computador est&#225; conectado, porem o GeoNetstat n&#227;o
&#233; um tracert de IP comum em v&#225;rios web sites, onde
voc&#234; digita um determinado IP e tem a resposta do
poss&#237;vel ponto geogr&#225;fico do IP.<br>
&nbsp;O aplicativo detecta todas as conex&#245;es ativas em seu
computador e determina o pa&#237;s de origem&nbsp; destas
conex&#245;es, sem a necessidade de informar o endere&#231;o de
cada conex&#227;o. Assim se obt&#234;m controle em tempo real de
todas suas conex&#245;es, sem a necessidade de abrir o Prompt de
comando e de utilizar tracert externo.<br>
&nbsp;O programa n&#227;o ocupa banda de sua internet, toda a
an&#225;lise &#233; feita atrav&#233;s de um banco de dados interno
pr&#233;-definido e atualizado.<br>
<br>

</div>
<a name="num-2"></a> <a name="faq_2"></a>
<div class="faq_gen">
<div class="faq_num">
</div>
<div class="faq_ttl"><a class="ttl icon_04 icon_arrowright" href=
"javascript:%20togglefaq(2);">Video Demostrativo</a>
<div class="faq_pleft">
<div style="display: none;" id="box-2">
<div class="clear"></div>
</div>
</div>
</div>
</div>
<div style="display: none;" id="faq2" class="faq_txt">

<center>
<div style="border: 0px solid ; width:480px; height:385px; background-color: #000000; padding: 8px; 
  border-top-left-radius: 1em;
  border-top-right-radius: 1em;
  border-bottom-right-radius: 1em;
  border-bottom-left-radius: 1em; "> 
<iframe width="480" height="385" src="http://www.youtube.com/embed/S8FLJRzN3SM" frameborder="0" allowfullscreen></iframe>
</div>
</center>


<br>
</div>
<a name="num-3"></a> <a name="faq_3"></a>
<div class="faq_gen">
<div class="faq_num">
</div>
<div class="faq_ttl"><a class="ttl icon_04 icon_arrowright" href=
"javascript:%20togglefaq(3);">Registro</a>
<div class="faq_pleft">
<div style="display: none;" id="box-3">
<div class="clear"></div>
</div>
</div>
</div>
</div>
<div style="display: none;" id="faq3" class="faq_txt">

<table style="text-align: left; width: 429px; height: 138px;"
border="0" cellpadding="2" cellspacing="2">
<tbody>
<tr>
<td><img style="border: 0px solid ; width: 124px; height: 125px;" alt="" src=
"images_produtos/gratis_.jpeg"></td>
<td><small>O GeoNetstat &#233; um Software Freeware. Isto significa
que sua licen&#231;a &#233; inteiramente Gratuita.</small></td>
</tr>
</tbody>
</table>
<small><big><br>
&nbsp;Voc&#234; tamb&#233;m pode contribuir com nosso projeto.<br>
&nbsp;(A contribui&#231;&#227;o &#233; facultativa, n&#227;o &#233;
necess&#225;rio pagar para adquirir o Geonetstat)<br>
&nbsp;</big> <span style="font-family: Verdana;"><br>
</span></small>
<table style="text-align: left; width: 100px;" border="0"
cellpadding="2" cellspacing="2">
<tbody>
<tr>
<td>&nbsp; &nbsp;</td>
<td><!-- INICIO FORMULARIO BOTAO PAGSEGURO -->
<form target="pagseguro" action=
"https://pagseguro.uol.com.br/checkout/doacao.jhtml" method="post">
<input name="email_cobranca" value="insecuritynet@gmail.com" type=
"hidden"><input name="moeda" value="BRL" type="hidden"><input src=
"https://p.simg.uol.com.br/out/pagseguro/i/botoes/doacao/btncontribuicao.jpg"
name="submit" alt=
"Pague com PagSeguro - &#233; r&#225;pido, gr&#225;tis e seguro!"
type="image"></form>
<!-- FINAL FORMULARIO BOTAO PAGSEGURO --></td>
<td>&nbsp;</td>
<td>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input name="cmd" value="_s-xclick" type="hidden"> <input name=
"hosted_button_id" value="PDRPGU6MPNSKQ" type="hidden"><input src=
"https://www.paypal.com/en_US/i/btn/btn_donateCC_LG.gif" name=
"submit" alt="PayPal - The safer, easier way to pay online!"
border="0" type="image"><img alt="" src=
"https://www.paypal.com/pt_BR/i/scr/pixel.gif" border="0" height=
"1" width="1"></form>
</td>
</tr>
</tbody>
</table>
<br>

</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="mleft mbottom mtop"><small><br></small>
<div class="clear"></div>
</div>
<script type="text/javascript">
        var web = 'free';

    function togglefaq( num )
    {
      el = $('#faq' + num);
          if ( el.css('display') == 'none' )
          {
                el.show();
                $('#box-' + num).show();

                // tracking
                if ( web == 'corp' )
                {
                        var s=s_gi('inetcorporatepublicww');
                        s.linkTrackVars='prop21,eVar36';
                        s.prop21='FAQ-' + num;
                        s.eVar36='FAQ-' + num;
                        s.tl(this,'o','FAQ-' + num);
                }
                if ( web == 'free' )
                {
                        var s=s_gi('inetfreepublicww');
                        s.linkTrackVars='prop21,eVar36';
                        s.prop21='FAQ-' + num;
                        s.eVar36='FAQ-' + num;
                        s.tl(this,'o','FAQ-' + num);
                }
          }
          else
          {
                el.hide();
                $('#box-' + num).hide();
          }
    }
    
    
        $(document).ready(function() {
                $.each( [  ], function(index, value) {
                        $('#faq' + value).hide();
                        $('#box-' + value).hide();
                });
        });
</script> 
<!-- FIM MENU -->
<br></div>
<br>
<br><br>
<div id="produtos_sub">
<!-- INI DOWN -->
<br>
<table style="border: 0px solid ; width: 472px; height: 108px;" border="0">
  <tbody>
    <tr>
      <td style="background-color: rgb(188, 212, 228);"
 width="98">&nbsp;Tamanho:</td>
      <td style="background-color: rgb(188, 212, 228);"
 width="114">&nbsp;1,44 MB</td>
      <td colspan="2" rowspan="4" width="435">&nbsp;
&nbsp;&nbsp; &nbsp; <a href="../downloads/scr.php?iden=geone"><img
 style="border: 0px solid ; width: 161px; height: 85px;"
 alt="Download" src="../images/downloadnew.png"></a></td>
    </tr>
    <tr>
      <td style="background-color: rgb(188, 212, 228);">&nbsp;SO:</td>
      <td style="background-color: rgb(188, 212, 228);">&nbsp;Windows</td>
    </tr>
    <tr>
      <td style="background-color: rgb(188, 212, 228);">&nbsp;Licen&ccedil;a:</td>
      <td style="background-color: rgb(188, 212, 228);">&nbsp;Freeware</td>
    </tr>
    <tr>
      <td style="background-color: rgb(188, 212, 228);">&nbsp;Empresa:</td>
      <td style="background-color: rgb(188, 212, 228);">&nbsp;Insecuritynet</td>
    </tr>
  </tbody>
</table>
<!-- FIN DOWN -->
<br>
</div>

<div id="produtos_sub"><br><b>&nbsp;&nbsp;Dicas de mat&eacute;rias</b><small><br><br>&nbsp;&nbsp;&nbsp;&nbsp;06/02/2014&nbsp;&nbsp;<a href="../materias/monitore_conexoes_suspeitas.php" class="sem_efeito2" target="_blank">Como descobrir conex&otilde;es suspeitas.</a><br>&nbsp;&nbsp;&nbsp;&nbsp;07/06/2011&nbsp;&nbsp;<a href="../materias/obtenha_dados_de_uma_porta_aberta_em_seu_pc.php" class="sem_efeito2" target="_blank">Obtenha dados de uma porta aberta em seu PC</a><br>&nbsp;&nbsp;&nbsp;&nbsp;09/04/2010&nbsp;&nbsp;<a href="../materias/geonetstat_novo_aplicativo.php" class="sem_efeito2" target="_blank">Geonetstat [Novo Aplicativo]</a></small><br></div></div>
<blockquote cite="../index.php">
<div id="depoimentos"><a href="../cursos/curso_ascd_online.php"><img style="border: 0px solid ; width: 142px; height: 18px;" alt="" src="../images/header_depoimentos.gif"/></a><a href="../cursos/curso_ascd_online.php"><img style="border: 0px solid ; width: 142px; height: 202px;" alt="" src="../images/depoimento_01.png"/></a></div>
<div id="newsletter">
<b>Newsletter</b><br>
<br>
Receba todas as novidades sobre nossos produtos e tutoriais por email.<br><br>
 <form action="../dialog/sc_newsletter.php" method="post">
 <table style="text-align: left; width: 100px;" border="0" cellpadding="2" cellspacing="2">
<tbody>
<tr>
<td><small>Nome:</small></td>
<td><input size="23" name="nome" value="" type="text"></td>
</tr>
<tr>
<td><small>Email:</small></td>
<td><input size="23" name="email" value="" type="text"></td>
</tr>
<tr>
<td></td>
<td><input value=" Enviar " type="submit"></td>
</tr>
</tbody>
</table>
</form>
</div>
<div id="software">
    <div id="figura_float">
    <a href="../insecuritynet3x/insecuritynet3.php"><img style="border: 0px solid ; width: 69px; height: 54px;" alt="" src="../images/inet_image.png"></a>
    </div>
&nbsp; <b>Insecuritynet 3.X</b><br>
&nbsp; Desenvolvemos softwares com a finalidade de auxiliar em seu
aprendizado.<br>
&nbsp; Com nossos programas voc&ecirc; poder&aacute; gerenciar, criar, cancelar, definir
regras para as conex&otilde;es de seu computador, al&eacute;m
de
provocar v&aacute;rios tipos de vulnerabilidades para
testes.
</div>
<div id="gerenciamento">
    <div id="figura_float_direita">
    <a href="../semifranquias/implantacao_ascd.php"><img style="border: 0px solid ; width: 52px; height: 34px;" alt="" src="../images/gerenciamento.jpg"></a>
    </div>
&nbsp; <b>Sistema de Gerenciamento</b><br>
&nbsp; Implantando nossos cursos em sua escola, voc&ecirc; ter&aacute; um sistema autom&aacute;tico gerenciamento de alunos.<br>
<br>
&nbsp;- Desempenho (Individual e turmas)<br>
&nbsp;- Frequ&ecirc;ncia (Individual e turmas)<br>
&nbsp;- Ranking<br>
&nbsp;- Adi&ccedil;&atilde;o de alunos no sistema<br>
</div>
<div id="total_seguranca">
    <div id="figura_float_direita_baixo">
    <img style="border: 0px solid ; width: 104px; height: 32px;" alt="" src="../images/VMware_logo.jpg">
    </div>
&nbsp; <b>Praticidade em<br>
&nbsp; seus Computadores</b><br>
&nbsp; Durante nossos cursos ser&atilde;o realizadas v&aacute;rias
experiencias onde os alunos provocam situa&ccedil;&otilde;es de
vulnerabilidades, por&eacute;m utilizamos um sistema virtualizado
(VMware) pr&oacute;prio para o curso, voc&ecirc; n&atilde;o
precisa alterar nenhunha configura&ccedil;&atilde;o de seus
computadores e nem se preocupar com a seguran&ccedil;a. Nosso
material did&aacute;tico &eacute; em nuvem e constantemente
atualizado.
</div>
<div id="redes_sociais">
<b>Redes Sociais</b><br>
<br>
<center>
<a href="https://twitter.com/Insecuritynet" target="_blank"><img style="border: 0px solid ; width: 29px; height: 29px;" alt="" src="../images/logo_twitter.jpeg"></a>
<a href="http://www.facebook.com/pages/Insecuritynet/133142983368032" target="_blank"><img style="border: 0px solid ; width: 28px; height: 28px;" alt="" src="../images/logo_facebook.jpeg"></a>
<a href="http://www.linkedin.com/company/insecuritynet" target="_blank"><img style="border: 0px solid ; width: 30px; height: 30px;" alt="" src="../images/linkedin.jpg"></a>
</center>
</div>
<div id="pagseguro">
<img style="border: 0px solid ; width: 105px; height: 137px;" alt="" src="../images/pagseguro.png">
</div>
</blockquote>


</p>



</div>
	
    <div id="rodape">
    <p>
    Todos Direitos Reservados - <a href="http://www.insecuritynet.com.br"><strong>Insecuritynet</strong></a> - 2014
    </p>
    </div>
	
    </div><script type="text/javascript">var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));</script><script type="text/javascript">try {var pageTracker = _gat._getTracker("UA-15582588-1");pageTracker._trackPageview();} catch(err) {}</script>
    </body>
    </html>