<!DOCTYPE html>
<html ng-app="ngMap">
<head>
<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
<meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDfdatz_SkDMTQQEXK7abzwjtEVaMMopCE&callback=initMap" type="text/javascript"></script>
<script src="js/angular.js"></script>
<script src="js/ng-map.js"></script>
<style type="text/css">

.fullwidth{
width: 100% !important;
margin: 0 !important;
overflow: hidden;
}

.gm-style{
    font: 400 11px Ubuntu, sans-serif;
}

*{
    font-family: Ubuntu, sans-serif !important;
}

.gm-style-iw {
    color: #000;
    text-align: center;
    top: 25px !important;
    width:200px;
}

.estatico{
    background: rgb(245, 166, 180, 0.5);
    color: rgb(237, 88, 115);
    font-weight: bold;
    border: 1.5px solid rgb(245, 114, 138);
    padding: 2px 10px;
    border-radius: 5px;
}

.digital{
    background: rgba(189, 216, 241, 0.5);
    color: #3486d3;
    font-weight: bold;
    border: 1.5px solid #3486d3;
    padding: 2px 10px;
    border-radius: 5px;
}

div p {
    margin-bottom: 8px;
}

</style>

</head>

<body class="fullwidth">

  <ng-map min-zoom="12" max-zoom="18"
  
   styles="[

{featureType:'administrative',
elementType:'all',
stylers:[
{saturation:-100}]}, 

{featureType:'administrative.province',
elementType:'all',
stylers:[{visibility:'off'}]},

{featureType:'landscape',
elementType:'all',
stylers:[
{saturation:-100},
{lightness:65},
{visibility:'on'}]},
					
{featureType:'poi',
elementType:'all',
stylers:[
{saturation:-100},
{lightness:50},
{visibility:'simplified'}]},

{featureType:'road',
elementType:'all',
stylers:[
{saturation:-100}]},

{featureType:'road.highway',
elementType:'all',
stylers:[
{visibility:'simplified'}]},	

{featureType:'road.arterial',
elementType:'all',
stylers:[
{lightness:'30'}]},	

{featureType:'road.local',
elementType:'all',
stylers:[
{lightness:'40'}]},

{featureType:'transit',
elementType:'all',
stylers:[{saturation:-100},
{visibilit:'simplified'}]},	

{featureType:'water',
elementType:'geometry',
stylers:[
{hue:'#E6E6E6'},
{lightness:10},
{saturation:-100}]},

{featureType:'water',
elementType:'labels',
stylers:[
{lightness:-25},
{saturation:-100}]}]

"
zoom="15" zoom-control-options="{style:'LARGE', position:'LEFT_CENTER'}" center="[-25.965728, 32.583270]"      
      map-type-control="true" 
      map-type-control-options='{position:"top_left", style:"dropdown_menu", mapTypeIds:["HYBRID","ROADMAP","SATELLITE","TERRAIN"]}'
      overview-map-control="true" 
      overview-map-control-options="{opened:true}"
      pan-control="true" 
      pan-control-options='{position:"left_center"}'
      rotate-control="true" 
      rotate-control-options='{position:"right_center"}'
      scale-control="true" 
      scale-control-options='{position:"bottom_right", style:"default"}'
      street-view-control="true"
      street-view-control-options='{position:"top_right"}' 
      scrollwheel="false" style="height: 780px; display:block;">

    <!--<custom-control position="RIGHT_CENTER" index="1">-->
    <!--  <div>-->
    <!--  <img src="img/redes.svg" style="width:160px;padding-right:10px;">-->
    <!--  </div>-->
    <!--</custom-control>-->
    
  <!-- Dalima Sede -->
  
  
    <custom-control position="RIGHT_BOTTOM" index="1">
      <div>
        <img src="https://dalima.co.mz/wp-content/uploads/2021/10/mp.svg" style="width:170px"/>
      </div>
    </custom-control>
    
  

     <custom-marker title="DALIMA" position="[-25.968468, 32.564084]" on-click="map.showInfoWindow(event, 'Dalima')">	 
        <div>
            <img src="https://dalima.co.mz/wp-content/uploads/2021/05/dalima_office_novo.svg" style="width:200px"/>
        </div>
    </custom-marker>	
    
	 <marker position="[-25.968468, 32.564084]" icon="img/dalima_office_tranparent.png" on-click="map.showInfoWindow(event, 'Dalima')" animation="Animation.DROP"></marker>
	
	<info-window id="Dalima" max-width="200">
        <div ng-non-bindable>
            <img src="https://dalima.co.mz/wp-content/uploads/2021/03/DALIMA-_-Web-Entrada.jpg" style="width:200px"/>
            <p><strong>DALIMA | Publicidade Digital Outdoor</strong></p>
			<p>Av. 25 de Setembro, 2400 RC drt Maputo, Mo&ccedil;ambique</p>
          </div>
    </info-window>
      
      
      <!-- Mundos -->
    <marker position="[-25.974494, 32.594064]" title="Mundos" icon="https://dalima.co.mz/wp-content/uploads/2021/04/mundos.svg" on-click="map.showInfoWindow(event, 'mundos')" animation="Animation.DROP"></marker>
	<info-window id="mundos" max-width="200">
        <div ng-non-bindable>
            <img loading="lazy" src="https://dalima.co.mz/wp-content/uploads/2021/03/Mundos-B.png" style="width:200px;"/>
            <p><strong>Mundos B</strong></p>
            <span class="estatico">Estático</span>
			<p style="position: relative;top: -8px;}">Av. Julius Nyerere, ao lado do Restaurante Mundos</p>
			
			<img loading="lazy" src="https://dalima.co.mz/wp-content/uploads/2021/03/Mundos-A.png" style="width:200px;"/>
            <p><strong>Mundos A</strong></p>
            <span class="estatico">Estático</span>
			<p style="position: relative;top: -8px;}">Av. Julius Nyerere, ao lado do Restaurante Mundos</p>
        </div>
    </info-window>
      
    <!-- Xiquelene -->
    <marker position="[-25.928624, 32.599013]" title="Xiquelene" icon="https://dalima.co.mz/wp-content/uploads/2021/04/xiquelene.svg" on-click="map.showInfoWindow(event, 'xiquelene')" animation="Animation.DROP"></marker>
	<info-window id="xiquelene" max-width="200">
        <div ng-non-bindable>
            <img loading="lazy" src="https://dalima.co.mz/wp-content/uploads/2021/03/xiquelene-B-ESTATICO.png" style="width:200px;"/>
            <p><strong>Xiquelene B</strong></p>
            <span class="estatico">Estático</span>
			<p style="position: relative;top: -8px;}">Cruzamento da Av. FPLM com Rua da Soveste em direcç. à Praça dos Heróis</p>
			
			<img loading="lazy" src="https://dalima.co.mz/wp-content/uploads/2021/03/xiqurelene-A.png" style="width:200px;"/>
            <p><strong>Xiquelene A</strong></p>
            <span class="estatico">Estático</span>
			<p style="position: relative;top: -8px;}">Cruzamento da Av. FPLM com Rua da Soveste em direcç. ao M. Xiquelene</p>
          </div>
    </info-window>
      
      <!-- Mercado Janete   -->
    <marker position="[-25.960989, 32.583075]" title="Janete" icon="https://dalima.co.mz/wp-content/uploads/2021/04/janete_novo.svg" on-click="map.showInfoWindow(event, 'janete')" animation="Animation.DROP"></marker>
	<info-window id="janete" max-width="200">
        <div ng-non-bindable>
            <img loading="lazy" src="https://dalima.co.mz/wp-content/uploads/2021/03/JANET.png" style="width:200px;"/>
            <p><strong>Janete</strong></p>
            <span class="estatico">Estático</span>
			<p style="position: relative;top: -8px;}">Av. Vladmir Lenine perto do Mercado Janet</p>
          </div>
        </div>
      </info-window>
      
    <marker position="[-25.960989, 32.583075]" title="Janete" icon="https://dalima.co.mz/wp-content/uploads/2021/04/janete_novo.svg" on-click="map.showInfoWindow(event, 'janete')" animation="Animation.DROP"></marker>
	<info-window id="janete" max-width="200">
        <div ng-non-bindable>
            <img loading="lazy" src="https://dalima.co.mz/wp-content/uploads/2021/03/JANET.png" style="width:200px;"/>
            <p><strong>Janete</strong></p>
            <span class="estatico">Estático</span>
			<p style="position: relative;top: -8px;}">Av. Vladmir Lenine perto do Mercado Janet</p>
          </div>
        </div>
      </info-window>
      
      <!-- Jat Times Square  -->
    <marker position="[-25.977861, 32.581939]" title="Times Square" icon="https://dalima.co.mz/wp-content/uploads/2021/10/times_square_1_3.svg" on-click="map.showInfoWindow(event, 'times-square')" animation="Animation.DROP"></marker>
	<info-window id="times-square" max-width="200">
        <div ng-non-bindable>
            <img loading="lazy" src="https://dalima.co.mz/wp-content/uploads/2020/03/JAT-Times-Square.jpg" style="width:200px;"/>
            <p><strong>Times Square A</strong></p>
            <span class="digital">Digital</span>
			<p style="position: relative;top: -8px;}">Av. Avenida Zedequias Manganhela, rua do pântano.</p>
			
			<img loading="lazy" src="https://dalima.co.mz/wp-content/uploads/2021/10/jat-statico.jpg" style="width:200px;"/>
            <p><strong>Times Square B</strong></p>
            <span class="estatico">Estático</span>
			<p style="position: relative;top: -8px;}">Av. Avenida Zedequias Manganhela, rua do pântano.</p>
          </div>
        </div>
      </info-window>
      
      
        <!-- Maritimo  -->
    <marker position="[-25.948954, 32.616414]" title="MARÍTIMO" icon="https://dalima.co.mz/wp-content/uploads/2021/04/maritimo.svg" on-click="map.showInfoWindow(event, 'maritimo')" animation="Animation.DROP"></marker>
	<info-window id="maritimo" max-width="200">
        <div ng-non-bindable>
            <img loading="lazy" src="http://www.dalima.co.mz/wp-content/uploads/2019/07/Maritimo-1.jpg" style="width:200px;"/>
            <p><strong>MARÍTIMO</strong></p>
            <span class="digital">Digital</span>
			<p style="position: relative;top: -8px;}">Av. da Marginal</p>
        </div>
      </info-window>
      
      
      <!-- Cardoso -->
    <marker position="[-25.975278771455674, 32.57451610382061]" title="Cardoso" icon="https://dalima.co.mz/wp-content/uploads/2021/10/cardoso2.png" on-click="map.showInfoWindow(event, 'cardoso')" animation="Animation.DROP"></marker>
	<info-window id="cardoso" max-width="200">
        <div ng-non-bindable>
            <img loading="lazy" src="https://dalima.co.mz/wp-content/uploads/2021/10/Cardoso.jpg" style="width:200px;"/>
            <p><strong>Cardoso</strong></p>
            <span class="estatico">Estático</span>
			<p style="position: relative;top: -8px;}">Av. 25 de Setembro no prédio Cardoso, perto do Palácio da Justiça.</p>
        </div>
      </info-window>
      
      
        <!-- Naval  -->
    <marker position="[-25.973324, 32.597220]" title="NAVAL" icon="https://dalima.co.mz/wp-content/uploads/2021/04/naval.svg" on-click="map.showInfoWindow(event, 'naval')" animation="Animation.DROP"></marker>
	<info-window id="naval" max-width="200">
        <div ng-non-bindable>
            <img loading="lazy" src="https://dalima.co.mz/wp-content/uploads/2021/03/NAVAL-B.png" style="width:200px;"/>
            <p><strong>NAVAL B</strong></p>
            <span class="estatico">Estático</span>
			<p style="position: relative;top: -8px;}">Av. da Marginal, perto e em direc&ccedil;&atilde;o &agrave; ao Clube Naval</p>
			
			<img loading="lazy" src="http://www.dalima.co.mz/wp-content/uploads/2017/01/Naval.jpg" style="width:200px;"/>
            <p><strong>NAVAL A</strong></p>
            <span class="digital">Digital</span>
			<p style="position: relative;top: -8px;}">Av. da Marginal, perto e em direc&ccedil;&atilde;o &agrave; ao Clube Naval</p>
        </div>
      </info-window>
      
      
              <!-- Zambi  -->
    <marker position="[-25.980250, 32.579375]" title="ZAMBI" icon="https://dalima.co.mz/wp-content/uploads/2021/04/zambi.svg" on-click="map.showInfoWindow(event, 'zambi')" animation="Animation.DROP"></marker>
	<info-window id="zambi" max-width="200">
        <div ng-non-bindable>
            <img loading="lazy" src="https://dalima.co.mz/wp-content/uploads/2021/03/Zambi-B-Static.png" style="width:200px;"/>
            <p><strong>ZAMBI B</strong></p>
            <span class="estatico">Estático</span>
			<p style="position: relative;top: -8px;}">AV. 10 de Novembro, no restaurante Zambi</p>
			
			<img loading="lazy" src="http://www.dalima.co.mz/wp-content/uploads/2017/01/Zambi.jpg" style="width:200px;"/>
            <p><strong>ZAMBI A</strong></p>
            <span class="digital">Digital</span>
			<p style="position: relative;top: -8px;}">AV. 10 de Novembro, no restaurante Zambi</p>
        </div>
      </info-window>
      
      
    <!-- OUA -->
 <marker position="[-25.952489, 32.550348]" title="OUA"  icon="https://dalima.co.mz/wp-content/uploads/2021/04/oua.svg" on-click="map.showInfoWindow(event, 'OUA')" animation="Animation.DROP"></marker>
	<info-window id="OUA" max-width="200">
        <div ng-non-bindable>
            <img loading="lazy" src="http://www.dalima.co.mz/wp-content/uploads/2017/01/DALIMA-Locais_OUA.jpg" style="width:200px;"/>
            <p><strong>OUA</strong></p>
            <span class="digital">Digital</span>
			<p style="position: relative;top: -8px;}">Av. OUA na rotundana das bombas de gasolina da Petromoc</p>
        </div>
     </info-window>    
      
      
  <!-- 24 DE JULHO -->
    <marker position="[-25.962813, 32.568636]" title="24 DE JULHO" icon="https://dalima.co.mz/wp-content/uploads/2021/04/24_julho.svg" on-click="map.showInfoWindow(event, '24')" animation="Animation.DROP"></marker>
	<info-window id="24" max-width="200">
        <div ng-non-bindable>
            <img loading="lazy" src="https://dalima.co.mz/wp-content/uploads/2021/03/24-DE-JULHO-B-1.png" style="width:200px;"/>
            <p><strong>24 DE JULHO B</strong></p>
            <span class="estatico">Estático</span>
			<p style="position: relative;top: -8px;}">Cruzamento da Av. Albert Luthuli e Av. 24 de Julho</p>
			
			<img loading="lazy" src="http://www.dalima.co.mz/wp-content/uploads/2017/01/24-Julho.jpg" style="width:200px;"/>
            <p><strong>24 DE JULHO A</strong></p>
            <span class="digital">Digital</span>
			<p style="position: relative;top: -8px;}">Cruzamento da Av. Albert Luthuli e Av. 24 de Julho</p>
        </div>
      </info-window>
	  	
  <!-- 33 -->
    <marker position="[-25.974409, 32.573448]" title="'33" icon="https://dalima.co.mz/wp-content/uploads/2021/04/33_andares.svg" on-click="map.showInfoWindow(event, '33')" animation="Animation.DROP"></marker>
	<info-window id="33" max-width="200">
        <div ng-non-bindable>
            <img loading="lazy" src="http://www.dalima.co.mz/wp-content/uploads/2017/01/33.jpg" style="width:200px;"/>            
            <p><strong>33</strong></p>
            <span class="digital">Digital</span>
			<p style="position: relative;top: -8px;}">Cruzamento da Av. 25 de Setembro e Av. Vladimir Lenine</p>
        </div>
      </info-window>
	
  <!-- CASINO -->
    <marker position="[-25.951424, 32.613238]" title="CASINO"  icon="https://dalima.co.mz/wp-content/uploads/2021/04/casino.svg" on-click="map.showInfoWindow(event, 'CASINO')" animation="Animation.DROP"></marker>
	<info-window id="CASINO" max-width="200">
        <div ng-non-bindable>
            <img loading="lazy" src="http://www.dalima.co.mz/wp-content/uploads/2017/01/DALIMA-Locais_Casino.jpg" style="width:200px;"/>             
            <p><strong>CASINO</strong></p>
            <span class="digital">Digital</span>
			<p style="position: relative;top: -8px;}">Av. da Marginal</p>
        </div>
      </info-window>

	
  <!-- FPLM -->
    <marker position="[-25.9313210, 32.5882729]" title="FPLM" icon="https://dalima.co.mz/wp-content/uploads/2021/04/fplm_novo.svg" on-click="map.showInfoWindow(event, 'FPLM')" animation="Animation.DROP"></marker>
	<info-window id="FPLM" max-width="200">
        <div ng-non-bindable>
            <img loading="lazy" src="https://dalima.co.mz/wp-content/uploads/2021/03/FPLM-B-ESTATICO-1.png" style="width:200px;"/>              
            <p><strong>FPLM B</strong></p>
            <span class="estatico">Estático</span>
			<p style="position: relative;top: -8px;}"> Av. Das FPLM, perto do Hospital de Mavalane em direcç. à Praça dos Heróis</p>
			
			<img loading="lazy" src="http://www.dalima.co.mz/wp-content/uploads/2019/07/FPLM-1.jpg" style="width:200px;"/>              
            <p><strong>FPLM A</strong></p>
            <span class="digital">Digital</span>
			<p style="position: relative;top: -8px;}"> Av. das FPLM, perto do Hospital de Mavalane</p>
			
        </div>
      </info-window>
	  	
  <!-- IMPRENSA -->
    <marker position="[-25.974054, 32.573450]" title="IMPRENSA" icon="https://dalima.co.mz/wp-content/uploads/2021/04/imprensa_1.svg" on-click="map.showInfoWindow(event, 'IMPRENSA')" animation="Animation.DROP"></marker>
	<info-window id="IMPRENSA" max-width="200">
        <div ng-non-bindable>
            <img loading="lazy" src="http://www.dalima.co.mz/wp-content/uploads/2017/01/Imprensa.jpg" style="width:200px;"/>   
            <p><strong>IMPRENSA</strong></p>
            <span class="digital">Digital</span>
			<p style="position: relative;top: -8px;}">Cruzamento da Av. 25 de Setembro e Av. Vladimir Lenine</p>
        </div>
      </info-window>
	  	
  <!-- JULIUS A/B -->
    <marker position="[-25.961069, 32.602211]" title="JULIUS A/B" icon="https://dalima.co.mz/wp-content/uploads/2021/04/Group-68.svg" on-click="map.showInfoWindow(event, 'JULIUS')" animation="Animation.DROP"></marker>
	<info-window id="JULIUS" max-width="200">
        <div ng-non-bindable>
            <img loading="lazy" src="http://www.dalima.co.mz/wp-content/uploads/2019/07/Julius-A-1.jpg" style="width:200px;"/> 
            <p><strong>JULIUS A </strong></p>
            <span class="digital">Digital</span>
			<p style="position: relative;top: -8px;}">Rotunda das Av. Julius Nyerere e Av. Kenneth Kaunda em direc&ccedil;&atilde;o &agrave; Av. da Marginal</p>
			
			<img loading="lazy" src="http://www.dalima.co.mz/wp-content/uploads/2019/07/Julius-B-1.jpg" style="width:200px;"/> 
			<p><strong>JULIUS B </strong></p>
			<span class="digital">Digital</span>
			<p style="position: relative;top: -8px;}">Rotunda das Av. Julius Nyerere e Av. Kenneth Kaunda em direc&ccedil;&atilde;o &agrave; Presid&ecirc;ncia</p>
        </div>
      </info-window>
      
      
    <!-- POLANA A/B -->
    <marker position="[-25.967698, 32.597770]" title="POLANA A/B" icon="https://dalima.co.mz/wp-content/uploads/2021/04/polana.svg" on-click="map.showInfoWindow(event, 'POLANA')" animation="Animation.DROP"></marker>
	<info-window id="POLANA" max-width="200">
        <div ng-non-bindable>
            <img loading="lazy" src="http://www.dalima.co.mz/wp-content/uploads/2019/07/Polana-A-1.jpg" style="width:200px;"/> 
            <p><strong>POLANA A </strong></p>
            <span class="digital">Digital</span>
			<p style="position: relative;top: -8px;}">Av. Julius Nyerere, Sede da Tv Miramar em direc&ccedil;&atilde;o &agrave; Av. da Marginal</p>
			
			<img loading="lazy" src="http://www.dalima.co.mz/wp-content/uploads/2019/07/Polana-B-1.jpg" style="width:200px;"/> 
			<p><strong>POLANA B </strong></p>
			<span class="digital">Digital</span>
			<p style="position: relative;top: -8px;}">Av. Julius Nyerere, Sede da Tv Miramar em direc&ccedil;&atilde;o &agrave; Presid&ecirc;ncia</p>
        </div>
      </info-window>    

	  	
  <!-- KAUNDA -->
    <marker position="[-25.954278, 32.591424]" title="KAUNDA"  icon="https://dalima.co.mz/wp-content/uploads/2021/04/kaunda.svg" on-click="map.showInfoWindow(event, 'KAUNDA')" animation="Animation.DROP"></marker>
	<info-window id="KAUNDA" max-width="200">
        <div ng-non-bindable>
            <img loading="lazy" src="https://dalima.co.mz/wp-content/uploads/2021/03/Kaunda-B-ESTATICO.png" style="width:200px;"/>             
            <p><strong>KAUNDA B</strong></p>
            <span class="estatico">Estático</span>
			<p style="position: relative;top: -8px;}">Av. Kenneth Kaunda perto da Rua da Fran&ccedil;a</p>
			
			<img loading="lazy" src="http://www.dalima.co.mz/wp-content/uploads/2017/01/DALIMA-Locais_Kaunda.jpg" style="width:200px;"/>             
            <p><strong>KAUNDA A</strong></p>
            <span class="digital">Digital</span>
			<p style="position: relative;top: -8px;}">Av. Kenneth Kaunda perto da Rua da Fran&ccedil;a</p>
        </div>
      </info-window>
	  	
  <!-- PANDORA -->
    <marker position="[-25.966039, 32.579100]" title="PANDORA"  icon="https://dalima.co.mz/wp-content/uploads/2021/04/pandora.svg" on-click="map.showInfoWindow(event, 'PANDORA')" animation="Animation.DROP"></marker>
	<info-window id="PANDORA" max-width="200">
        <div ng-non-bindable>
            <img loading="lazy" src="http://www.dalima.co.mz/wp-content/uploads/2019/07/Kaunda-1.jpg" style="width:200px;"/>            
            <p><strong>PANDORA</strong></p>
            <span class="digital">Digital</span>
			<p style="position: relative;top: -8px;}">Cruzamento da Av. Eduardo Mondlane e Av. Vladimir lenine</p>
        </div>
     </info-window>
	  	
  <!-- PIRI PIRI CIRCUS -->
    <marker position="[-25.976739, 32.593033]" title="PIRI PIRI CIRCUS"  icon="https://dalima.co.mz/wp-content/uploads/2021/04/piri_piri.svg"on-click="map.showInfoWindow(event, 'PIRI-PIRI-CIRCUS')" animation="Animation.DROP"></marker>
	<info-window id="PIRI-PIRI-CIRCUS" max-width="200">
        <div ng-non-bindable>
            <img loading="lazy" src="http://www.dalima.co.mz/wp-content/uploads/2017/01/Piri-Piri.jpg" style="width:200px;"/> 
            <p><strong>PIRI PIRI CIRCUS</strong></p>
            <span class="digital">Digital</span>
			<p style="position: relative;top: -8px;}">Cruzamento da Av. Julius Nyerere e Av. 24 de Julho</p>
        </div>
    </info-window>
	  	
  <!-- PONTO-FINAL -->
    <marker position="[-25.961713, 32.572194]" title="PONTO-FINAL"  icon="https://dalima.co.mz/wp-content/uploads/2021/04/ponto_final.svg" on-click="map.showInfoWindow(event, 'PONTO-FINAL')" animation="Animation.DROP"></marker>
	<info-window id="PONTO-FINAL" max-width="200">
        <div ng-non-bindable>
            <img loading="lazy" src="http://www.dalima.co.mz/wp-content/uploads/2019/07/Ponto-Final-1.jpg" style="width:200px;"/>             
            <p><strong>PONTO-FINAL</strong></p>
            <span class="digital">Digital</span>
			<p style="position: relative;top: -8px;}">Cruzamento da Av. Eduardo Mondlane e Av. Guerra Popular</p>
        </div>
    </info-window>
	  	
  <!-- RONIL -->
    <marker position="[-25.963833, 32.575214]" title="RONIL"  icon="https://dalima.co.mz/wp-content/uploads/2021/04/ronil.svg" on-click="map.showInfoWindow(event, 'RONIL')" animation="Animation.DROP"></marker>
	<info-window id="RONIL" max-width="200">
        <div ng-non-bindable>
            <img loading="lazy" src="http://www.dalima.co.mz/wp-content/uploads/2019/07/Ronil-1.jpg" style="width:200px;"/> 
            <p><strong>RONIL</strong></p>
            <span class="digital">Digital</span>
			<p style="position: relative;top: -8px;}">Cruzamento da Av. Eduardo Mondlane e Av. Karl Marx</p>
        </div>
      </info-window>
     
	  	
  <!-- SCALA -->
    <marker position="[-25.972772, 32.571358]" title="SCALA"  icon="https://dalima.co.mz/wp-content/uploads/2021/04/scala.svg" on-click="map.showInfoWindow(event, 'SCALA')" animation="Animation.DROP"></marker>
	<info-window id="SCALA" max-width="200">
        <div ng-non-bindable>
            <img  loading="lazy" src="http://www.dalima.co.mz/wp-content/uploads/2019/07/Scala-1.jpg" style="width:200px;"/>             
            <p><strong>SCALA</strong></p>
            <span class="digital">Digital</span>
			<p style="position: relative;top: -8px;}">Cruzamento da Av. 25 de Setembro e Av. Samora Machel</p>
        </div>
      </info-window>
	  	
  <!-- XENON -->
    <marker position="[-25.973892, 32.594261]" title="XENON"  icon="https://dalima.co.mz/wp-content/uploads/2021/04/xenon_1.svg" on-click="map.showInfoWindow(event, 'XENON')" animation="Animation.DROP"></marker>
	<info-window id="XENON" max-width="200">
        <div ng-non-bindable>
			<img loading="lazy" src="https://dalima.co.mz/wp-content/uploads/2021/03/XENON-B.png" style="width:200px;"/>  
            <p><strong>XENON B</strong></p>
            <span class="estatico">Estático</span>
			<p style="position: relative;top: -8px;}">Cruzamento da Av. Eduardo Mondlane e Av. Julius Nyerere</p>
			
			<img loading="lazy" src="http://www.dalima.co.mz/wp-content/uploads/2019/07/Xenon-1.jpg" style="width:200px;"/>  
            <p><strong>XENON A</strong></p>
            <span class="digital">Digital</span>
			<p style="position: relative;top: -8px;}">Cruzamento da Av.Eduardo Mondlane e Av. Julius Nyerere</p>
        </div>
      </info-window>
	  	





      <transit-layer></transit-layer>
  </ng-map>
 

<script>
angular.module('ngMap').run(function($rootScope, NgMap) {
  NgMap.getMap().then(function(map) {
    $rootScope.map = map;
  });
});

var styleArray = [
  {
    featureType: "all",
    stylers: [
      { saturation: -80 }
    ]
  },{
    featureType: "road.arterial",
    elementType: "geometry",
    stylers: [
      { hue: "#00ffee" },
      { saturation: 50 }
    ]
  },{
    featureType: "poi.business",
    elementType: "labels",
    stylers: [
      { visibility: "off" }
    ]
  }
];
</script>
</body>
</html>
