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


.gm-style-iw {
    color: #000;
    text-align: center;
    top: 25px !important;
    width:200px;
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
zoom="14" zoom-control-options="{style:'LARGE', position:'LEFT_CENTER'}" center="[-25.952502, 32.585911]"      
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

    <custom-control position="RIGHT_CENTER" index="1">
      <div>
      <img loading="lazy" src="img/redes.svg" style="width:160px;padding-right:10px;">
      </div>
    </custom-control>
    
  <!-- Dalima Sede -->
  
  
      <custom-control position="RIGHT_BOTTOM" index="1">
      <div>
      <img loading="lazy" src="img/mp.svg" style="width:170px"/>
      </div>
    </custom-control>
    
  

     <custom-marker title="DALIMA" position="[-25.968468, 32.564084]" on-click="map.showInfoWindow(event, 'Dalima')">	 
        <div>
            <img loading="lazy" src="img/office-dalima.png" style="width:200px"/>
        </div>
    </custom-marker>	
	 <marker position="[-25.968468, 32.564084]" icon="img/dalima_office_tranparent.png" on-click="map.showInfoWindow(event, 'Dalima')" animation="Animation.DROP"></marker>
	 <marker position="[-25.968468, 32.564084]" icon="img/dalima_office_tranparent.png" on-click="map.showInfoWindow(event, 'Dalima')" animation="Animation.DROP"></marker>
	<info-window id="Dalima" max-width="200">
        <div ng-non-bindable>
            <p><strong>DALIMA | Publicidade Digital Outdoor</strong></p>
			<p>25 de Setembro Ave., 2400 ground floor syllabication right - Maputo, Mo&ccedil;ambique</p>
          </div>
        </div>
    </info-window>
      
      
    
          <!-- Jat Times Square  -->
    <marker position="[-25.977861, 32.581939]" title="Times Square" icon="img/times-square-eng.png" on-click="map.showInfoWindow(event, 'times-square')" animation="Animation.DROP">
    </marker>
    
	<info-window id="times-square" max-width="200">
        <div ng-non-bindable>
            <img loading="lazy" src="https://dalima.co.mz/wp-content/uploads/2020/03/JAT-Times-Square.jpg" style="width:200px;"/>
            <p><strong>Times Square</strong></p>
			<p style="position: relative;top: -8px;}">On the coner of Zedequias Manganhela Ave. and Rua do pântano.</p>
          </div>
        </div>
    </info-window>
        
      
      
      
        <!-- Maritimo  -->
    <marker position="[-25.948954, 32.616414]" title="MARÍTIMO" icon="img/maritimo.png" on-click="map.showInfoWindow(event, 'maritimo')" animation="Animation.DROP"></marker>
	<info-window id="maritimo" max-width="200">
        <div ng-non-bindable>
            <img loading="lazy" src="http://www.dalima.co.mz/wp-content/uploads/2019/06/WEB-Painel-Maritimo.jpg" style="width:200px;"/>
            <p><strong>MARÍTIMO</strong></p>
			<p style="position: relative;top: -8px;}">Marginal Ave.</p>
          </div>
        </div>
      </info-window>
      
      
        <!-- Naval  -->
    <marker position="[-25.973324, 32.597220]" title="NAVAL" icon="img/WEB_Naval_ENG2.png" on-click="map.showInfoWindow(event, 'naval')" animation="Animation.DROP"></marker>
	<info-window id="naval" max-width="200">
        <div ng-non-bindable>
            <img loading="lazy" src="http://www.dalima.co.mz/wp-content/uploads/2017/01/DALIMA-Locais_Naval.jpg" style="width:200px;"/>
            <p><strong>NAVAL</strong></p>
			<p style="position: relative;top: -8px;}">Marginal Ave., Near and in Direction to Clube Naval</p>
          </div>
        </div>
      </info-window>
      
      
              <!-- Zambi  -->
    <marker position="[-25.980250, 32.579375]" title="ZAMBI" icon="img/zambi.png" on-click="map.showInfoWindow(event, 'zambi')" animation="Animation.DROP"></marker>
	<info-window id="zambi" max-width="200">
        <div ng-non-bindable>
            <img loading="lazy" src="http://www.dalima.co.mz/wp-content/uploads/2017/01/DALIMA-Locais_Zambi.jpg" style="width:200px;"/>
            <p><strong>ZAMBI</strong></p>
			<p style="position: relative;top: -8px;}">10 de Novembro Ave., at Zambi restaurant</p>
          </div>
        </div>
      </info-window>
      
      
      
     <!-- OUA -->
 <marker position="[-25.952489, 32.550348]" title="OUA"  icon="img/oua.png" on-click="map.showInfoWindow(event, 'OUA')" animation="Animation.DROP"></marker>
	<info-window id="OUA" max-width="200">
        <div ng-non-bindable>
            <img loading="lazy" src="http://www.dalima.co.mz/wp-content/uploads/2017/01/DALIMA-Locais_OUA.jpg" style="width:200px;"/>
            <p><strong>OUA</strong></p>
			<p style="position: relative;top: -8px;}">OUA Ave. at Petromoc gas station</p>
          </div>
        </div>
      </info-window>   
      
	  
  <!-- 24 DE JULHO -->
    <marker position="[-25.962813, 32.568636]" title="24 DE JULHO" icon="img/WEB-24-Julho-Novo.png" on-click="map.showInfoWindow(event, '24')" animation="Animation.DROP"></marker>
	<info-window id="24" max-width="200">
        <div ng-non-bindable>
            <img loading="lazy" src="http://www.dalima.co.mz/wp-content/uploads/2017/01/DALIMA-Locais_24-Julho.jpg" style="width:200px;"/>
            <p><strong>24 DE JULHO</strong></p>
			<p style="position: relative;top: -8px;}">On the corner of Albert Luthuli Ave. and 24 de Julho Ave.</p>
          </div>
        </div>
      </info-window>
	  	
  <!-- 33 -->
    <marker position="[-25.974409, 32.573448]" title="'33" icon="img/33PTup.png" on-click="map.showInfoWindow(event, '33')" animation="Animation.DROP"></marker>
	<info-window id="33" max-width="200">
        <div ng-non-bindable>
            <img loading="lazy" src="http://www.dalima.co.mz/wp-content/uploads/2017/01/DALIMA-Locais_33.jpg" style="width:200px;"/>            
            <p><strong>33</strong></p>
			<p style="position: relative;top: -8px;}">On the corner of 25 de Setembro Ave. and Vladimir Lenine Ave.</p>
          </div>
        </div>
      </info-window>
	
  <!-- CASINO -->
    <marker position="[-25.951424, 32.613238]" title="CASINO"  icon="img/casino.png" on-click="map.showInfoWindow(event, 'CASINO')" animation="Animation.DROP"></marker>
	<info-window id="CASINO" max-width="200">
        <div ng-non-bindable>
            <img loading="lazy" src="http://www.dalima.co.mz/wp-content/uploads/2017/01/DALIMA-Locais_Casino.jpg" style="width:200px;"/>             
            <p><strong>CASINO</strong></p>
			<p style="position: relative;top: -8px;}">Marginal Ave.</p>
          </div>
        </div>
      </info-window>

	
  <!-- FPLM -->
    <marker position="[-25.9313210, 32.5882729]" title="FPLM" icon="img/WEB-FPLM-ENG-Novo.png" on-click="map.showInfoWindow(event, 'FPLM')" animation="Animation.DROP"></marker>
	<info-window id="FPLM" max-width="200">
        <div ng-non-bindable>
            <img loading="lazy" src="http://www.dalima.co.mz/wp-content/uploads/2017/01/DALIMA-Locais_FPLM.jpg" style="width:200px;"/>              
            <p><strong>FPLM</strong></p>
			<p style="position: relative;top: -8px;}">Av. Das FPLM, near Hospital de Mavalane</p>
          </div>
        </div>
      </info-window>
	  	
  <!-- IMPRENSA -->
    <marker position="[-25.974054, 32.573450]" title="IMPRENSA" icon="img/imprensPTup.png" on-click="map.showInfoWindow(event, 'IMPRENSA')" animation="Animation.DROP"></marker>
	<info-window id="IMPRENSA" max-width="200">
        <div ng-non-bindable>
            <img loading="lazy" src="http://www.dalima.co.mz/wp-content/uploads/2017/01/DALIMA-Locais_Imprensa.jpg" style="width:200px;"/>   
            <p><strong>IMPRENSA</strong></p>
			<p style="position: relative;top: -8px;}">On the corner of 25 de Setembro Ave. and Vladimir Lenine Ave.</p>
          </div>
        </div>
      </info-window>
	  	
  <!-- JULIUS A/B -->
    <marker position="[-25.961069, 32.602211]" title="JULIUS A/B" icon="img/juliusEN.png" on-click="map.showInfoWindow(event, 'JULIUS')" animation="Animation.DROP"></marker>
	<info-window id="JULIUS" max-width="200">
        <div ng-non-bindable>
            <img loading="lazy" src="http://www.dalima.co.mz/wp-content/uploads/2017/01/DALIMA-Locais_Julius-A.jpg" style="width:200px;"/> 
            <p><strong>JULIUS A </strong></p>
			<p style="position: relative;top: -8px;}">Traffic circle at Julius Nyerere Ave. and Kenneth Kaunda Ave. towards Marginal Ave.</p>
			<img loading="lazy" src="http://www.dalima.co.mz/wp-content/uploads/2017/01/DALIMA-Locais_Julius-B.jpg" style="width:200px;"/> 
			<p><strong>JULIUS B </strong></p>
			<p style="position: relative;top: -8px;}">Traffic circle at Julius Nyerere Ave. and Kenneth Kaunda Ave. towards the Presidency</p>
          </div>
        </div>
      </info-window>
      
      
    <!-- POLANA A/B -->
    <marker position="[-25.967698, 32.597770]" title="POLANA A/B" icon="img/polanaENnovo.png" on-click="map.showInfoWindow(event, 'POLANA')" animation="Animation.DROP"></marker>
	<info-window id="POLANA" max-width="200">
        <div ng-non-bindable>
            <img loading="lazy" src="http://www.dalima.co.mz/wp-content/uploads/2019/06/WEB-Painel-Polana-A.jpg" style="width:200px;"/> 
            <p><strong>POLANA A </strong></p>
			<p style="position: relative;top: -8px;}">Julius Nyerere Ave. at seat of Tv Miramar in direction to Marginal Ave.</p>
			<img loading="lazy" src="http://www.dalima.co.mz/wp-content/uploads/2019/06/WEB-Painel-Polana-B.jpg" style="width:200px;"/> 
			<p><strong>POLANA B </strong></p>
			<p style="position: relative;top: -8px;}">Julius Nyerere Ave. at seat of Tv Miramar in direction to the Presidency</p>
          </div>
        </div>
      </info-window>    
      
      
      
      
      
	  	
  <!-- KAUNDA -->
    <marker position="[-25.954278, 32.591424]" title="KAUNDA"  icon="img/kaunda.png" on-click="map.showInfoWindow(event, 'KAUNDA')" animation="Animation.DROP"></marker>
	<info-window id="KAUNDA" max-width="200">
        <div ng-non-bindable>
            <img loading="lazy" src="http://www.dalima.co.mz/wp-content/uploads/2017/01/DALIMA-Locais_Kaunda.jpg" style="width:200px;"/>             
            <p><strong>KAUNDA</strong></p>
			<p style="position: relative;top: -8px;}">Kenneth Kaunda Ave. near Rua da França</p>
          </div>
        </div>
      </info-window>
	  	
  <!-- PANDORA -->
    <marker position="[-25.966039, 32.579100]" title="PANDORA"  icon="img/pandora.png" on-click="map.showInfoWindow(event, 'PANDORA')" animation="Animation.DROP"></marker>
	<info-window id="PANDORA" max-width="200">
        <div ng-non-bindable>
            <img loading="lazy" src="http://www.dalima.co.mz/wp-content/uploads/2017/01/DALIMA-Locais_Pandora.jpg" style="width:200px;"/>            
            <p><strong>PANDORA</strong></p>
			<p style="position: relative;top: -8px;}">On the corner of Eduardo Mondlane Ave. and Vladimir Lenine Ave.</p>
          </div>
        </div>
      </info-window>
	  	
  <!-- PIRI PIRI CIRCUS -->
    <marker position="[-25.976739, 32.593033]" title="PIRI PIRI CIRCUS"  icon="img/pp-circus.png"on-click="map.showInfoWindow(event, 'PIRI-PIRI-CIRCUS')" animation="Animation.DROP"></marker>
	<info-window id="PIRI-PIRI-CIRCUS" max-width="200">
        <div ng-non-bindable>
            <img loading="lazy" src="http://www.dalima.co.mz/wp-content/uploads/2019/06/WEB-Painel-PP-Circus-3d-D.jpg" style="width:200px;"/> 
            <p><strong>PIRI PIRI CIRCUS</strong></p>
			<p style="position: relative;top: -8px;}">On the corner of Julius Nyerere Ave. and 24 de Julho Ave.</p>
          </div>
        </div>
      </info-window>
	  	
  <!-- PONTO-FINAL -->
    <marker position="[-25.961713, 32.572194]" title="PONTO-FINAL"  icon="img/WEB-Ponto-Final-Novo.png" on-click="map.showInfoWindow(event, 'PONTO-FINAL')" animation="Animation.DROP"></marker>
	<info-window id="PONTO-FINAL" max-width="200">
        <div ng-non-bindable>
            <img loading="lazy" src="http://www.dalima.co.mz/wp-content/uploads/2019/06/WEB-Ponto-Final.jpg" style="width:200px;"/>             
            <p><strong>PONTO-FINAL</strong></p>
			<p style="position: relative;top: -8px;}">On the corner of Eduardo Mondlane Ave. and Guerra Popular Ave.</p>
          </div>
        </div>
      </info-window>
	  	
  <!-- RONIL -->
    <marker position="[-25.963833, 32.575214]" title="RONIL"  icon="img/ronil-upgrade.png" on-click="map.showInfoWindow(event, 'RONIL')" animation="Animation.DROP"></marker>
	<info-window id="RONIL" max-width="200">
        <div ng-non-bindable>
            <img loading="lazy" src="http://www.dalima.co.mz/wp-content/uploads/2016/09/DALIMA-Website-Locais_0011_Ronil-6x3.jpg" style="width:200px;"/> 
            <p><strong>RONIL</strong></p>
			<p style="position: relative;top: -8px;}">On the corner of Eduardo Mondlane Ave. and Karl Marx Ave.</p>
          </div>
        </div>
      </info-window>
	  	
  <!-- SCALA -->
    <marker position="[-25.972772, 32.571358]" title="SCALA"  icon="img/scalaPTup.png" on-click="map.showInfoWindow(event, 'SCALA')" animation="Animation.DROP"></marker>
	<info-window id="SCALA" max-width="200">
        <div ng-non-bindable>
            <img loading="lazy" src="http://www.dalima.co.mz/wp-content/uploads/2019/06/WEB-Painel-Scala.jpg" style="width:200px;"/>             
            <p><strong>SCALA</strong></p>
			<p style="position: relative;top: -8px;}">On the corner of 25 de Setembro Ave. and Samora Machel Ave.</p>
          </div>
        </div>
      </info-window>
	  	
  <!-- XENON -->
    <marker position="[-25.973892, 32.594261]" title="XENON"  icon="img/xenon.png" on-click="map.showInfoWindow(event, 'XENON')" animation="Animation.DROP"></marker>
	<info-window id="XENON" max-width="200">
        <div ng-non-bindable>
            <img loading="lazy" src="http://www.dalima.co.mz/wp-content/uploads/2017/01/DALIMA-Locais_Xenon.jpg" style="width:200px;"/>  
            <p><strong>XENON</strong></p>
			<p style="position: relative;top: -8px;}">On the corner of Eduardo Mondlane Ave. and Julius Nyerere Ave.</p>
          </div>
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
