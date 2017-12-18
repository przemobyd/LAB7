<? include ("bin/header.php");?>
<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Przemysław Czarnecki</title>
		<style>
HTML { 
     background: url(img/tlo.jpg) no-repeat center center fixed; 
     -webkit-background-size: cover;
     -moz-background-size: cover;
     -o-background-size: cover;
     background-size: cover;
     height: 100%;
     width: 100%;
     font-family: Helvetica;
     
}
A {
	color: #fff;
}
.black {
  background: #222;
}
.przycisk {
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  cursor: pointer;
  padding: 10px 20px;
  border: 1px solid #018dc4;
  -webkit-border-radius: 5px;
  border-radius: 5px;
  font: normal 16px/normal Verdana, Geneva, sans-serif;
  color: rgba(255,255,255,0.9);
  -o-text-overflow: clip;
  text-overflow: clip;
  background: -webkit-linear-gradient(-90deg, rgba(255,183,107,1) 0, rgba(255,167,61,1) 49%, rgba(255,124,0,1) 61%, rgba(255,127,4,1) 100%);
  background: -moz-linear-gradient(180deg, rgba(255,183,107,1) 0, rgba(255,167,61,1) 49%, rgba(255,124,0,1) 61%, rgba(255,127,4,1) 100%);
  background: linear-gradient(180deg, rgba(255,183,107,1) 0, rgba(255,167,61,1) 49%, rgba(255,124,0,1) 61%, rgba(255,127,4,1) 100%);
  background-position: 50% 50%;
  -webkit-background-origin: padding-box;
  background-origin: padding-box;
  -webkit-background-clip: border-box;
  background-clip: border-box;
  -webkit-background-size: auto auto;
  background-size: auto auto;
  -webkit-box-shadow: 3px 0 0 0 rgba(0,0,0,0.2) ;
  box-shadow: 3px 0 0 0 rgba(0,0,0,0.2) ;
  text-shadow: -1px -1px 0 rgba(15,73,168,0.66) ;
  -webkit-transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
  -moz-transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
  -o-transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
  transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
}

.pusty {
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  cursor: pointer;
  padding: 10px 20px;
  border: 1px solid #018dc4;
  -webkit-border-radius: 7px;
  border-radius: 7px;
  font: normal 16px/normal Verdana, Geneva, sans-serif;
  color: rgba(255,255,255,0.9);
  -o-text-overflow: clip;
  text-overflow: clip;
  background: -webkit-linear-gradient(-90deg, rgba(230,240,163,1) 0, rgba(210,230,56,1) 50%, rgba(195,216,37,1) 51%, rgba(219,240,67,1) 100%);
  background: -moz-linear-gradient(180deg, rgba(230,240,163,1) 0, rgba(210,230,56,1) 50%, rgba(195,216,37,1) 51%, rgba(219,240,67,1) 100%);
  background: linear-gradient(180deg, rgba(230,240,163,1) 0, rgba(210,230,56,1) 50%, rgba(195,216,37,1) 51%, rgba(219,240,67,1) 100%);
  background-position: 50% 50%;
  -webkit-background-origin: padding-box;
  background-origin: padding-box;
  -webkit-background-clip: border-box;
  background-clip: border-box;
  -webkit-background-size: auto auto;
  background-size: auto auto;
  -webkit-box-shadow: 2px 2px 2px 0 rgba(0,0,0,0.2) ;
  box-shadow: 2px 2px 2px 0 rgba(0,0,0,0.2) ;
  text-shadow: -1px -1px 0 rgba(15,73,168,0.66) ;
  -webkit-transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
  -moz-transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
  -o-transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
  transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
}

.pole {
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  padding: 10px 20px;
  border: 1px solid #b7b7b7;
  -webkit-border-radius: 3px;
  border-radius: 3px;
  font: normal 16px/normal Verdana, Geneva, sans-serif;
  color: rgba(255,255,255,1);
  -o-text-overflow: clip;
  text-overflow: clip;
  background: -webkit-linear-gradient(-90deg, rgba(150,150,150,1) 0, rgba(95,95,95,1) 50%, rgba(50,50,50,1) 51%, rgba(30,30,30,1) 100%);
  background: -moz-linear-gradient(180deg, rgba(150,150,150,1) 0, rgba(95,95,95,1) 50%, rgba(50,50,50,1) 51%, rgba(30,30,30,1) 100%);
  background: linear-gradient(180deg, rgba(150,150,150,1) 0, rgba(95,95,95,1) 50%, rgba(50,50,50,1) 51%, rgba(30,30,30,1) 100%);
  background-position: 50% 50%;
  -webkit-background-origin: padding-box;
  background-origin: padding-box;
  -webkit-background-clip: border-box;
  background-clip: border-box;
  -webkit-background-size: auto auto;
  background-size: auto auto;
  -webkit-box-shadow: 1px 1px 8px 2px rgba(0,0,0,0.4) ;
  box-shadow: 1px 1px 8px 2px rgba(0,0,0,0.4) ;
  -webkit-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
  -moz-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
  -o-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
  transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
}

.ramka {
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  border: none;
  -webkit-border-radius: 6px;
  border-radius: 6px;
  font: normal 16px/1 Verdana, Geneva, sans-serif;
  color: #fff;
  -o-text-overflow: ellipsis;
  text-overflow: ellipsis;
  background: rgba(50,50,50,0.6);
  -webkit-box-shadow: 5px 5px 8px 2px rgba(0,0,0,0.4) ;
  box-shadow: 1% 1% 2% 2px rgba(0,0,0,0.4) ;
  margin: 1%;
  padding: 10px;
}

.tabela {
	width: 100%;
}
.tabela td {
	padding: 3px;
	text-align: center;
}
</style>
	</head>
	<body>
<div id="top">
			<header id="NAGLOWEK" class="ramka" style="text-align: center; font-weight: bold;">
				LAB 7 Programowanie Aplikacji Sieciowych - 8:10 (420 2.2)
			</header>
			<nav id="MENU" class="ramka">
				<? include("bin/menu.php"); ?>
			</nav>			
			<article class="ramka">
				<? include ("bin/portal.php");?>
			</article>
			<footer id="STOPKA" class="ramka"><small>Autor: Przemysław Czarnecki TIN 2017/18</small></footer>
		</div>
	</body>
</html>