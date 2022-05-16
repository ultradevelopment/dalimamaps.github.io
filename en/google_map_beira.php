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

  <ng-map min-zoom="15" max-zoom="18"
  
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
zoom="15" zoom-control-options="{style:'LARGE', position:'LEFT_CENTER'}" center="[-19.833393, 34.836934]"      
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
      scrollwheel="false" style="height: 460px; display:block;">

    
  <!-- Dalima Sede -->
  
  
        <custom-control position="RIGHT_BOTTOM" index="1">
      <div>
      <img src="img/br1.svg" style="width:170px"/>
      </div>
    </custom-control>
    
    



	  
	
<!-- BEIRA -->

  <!-- BEIRA -->
    <marker position="[-19.833393, 34.836934]" title="BEIRA" icon="img/beira.png" on-click="map.showInfoWindow(event, 'BEIRA')" animation="Animation.DROP"></marker>
	<info-window id="BEIRA" max-width="200">
        <div ng-non-bindable>
<img src="http://www.dalima.co.mz/wp-content/uploads/2017/01/DALIMA-Locais_Beira.jpg" style="width:200px;"/>
            <p><strong>BEIRA I</strong></p>
			<p style="position: relative;top: -8px;}">Poder Popular/ Major Serpa Rd</p>
          </div>
        </div>
      </info-window>

  
  
  
    <!-- BEIRA -->
    <marker position="[-19.833262, 34.835604]" title="OFFICE BEIRA" icon="img/office-dalima-beira.png" on-click="map.showInfoWindow(event, 'BEIRAOFFICE')" animation="Animation.DROP"></marker>
	<info-window id="BEIRAOFFICE" max-width="200">
        <div ng-non-bindable>
            <p><strong>DALIMA | Publicidade Digital Outdoor</strong></p>
			<p style="position: relative;top: -8px;}">143 ground floor syllabication Room 2, General Machado, Beira</p>
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
