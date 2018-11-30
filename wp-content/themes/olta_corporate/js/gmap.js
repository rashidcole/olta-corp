var map;
function initMap() {
	var mapPosition = {lat: 35.670106, lng: 139.726186};
	var mapArea = document.getElementById('map');
	var mapOptions = {
		center: mapPosition,
		zoom: 15,
		styles:[
		{
			"elementType": "geometry",
			"stylers": [
			{
				"color": "#f5f5f5"
			}
			]
		},
		{
			"elementType": "labels.icon",
			"stylers": [
			{
				"visibility": "off"
			}
			]
		},
		{
			"elementType": "labels.text.fill",
			"stylers": [
			{
				"color": "#616161"
			},
			{
				"visibility": "on"
			}
			]
		},
		{
			"elementType": "labels.text.stroke",
			"stylers": [
			{
				"color": "#f5f5f5"
			},
			{
				"visibility": "off"
			}
			]
		},
		{
			"featureType": "administrative.land_parcel",
			"elementType": "labels",
			"stylers": [
			{
				"visibility": "off"
			}
			]
		},
		{
			"featureType": "administrative.land_parcel",
			"elementType": "labels.text.fill",
			"stylers": [
			{
				"visibility": "off"
			}
			]
		},
		{
			"featureType": "administrative.locality",
			"elementType": "geometry",
			"stylers": [
			{
				"visibility": "on"
			}
			]
		},
		{
			"featureType": "administrative.locality",
			"elementType": "geometry.fill",
			"stylers": [
			{
				"weight": 1.5
			}
			]
		},
		{
			"featureType": "poi",
			"elementType": "geometry",
			"stylers": [
			{
				"color": "#f7f7f7"
			}
			]
		},
		{
			"featureType": "poi",
			"elementType": "labels.text",
			"stylers": [
			{
				"visibility": "off"
			}
			]
		},
		{
			"featureType": "poi",
			"elementType": "labels.text.fill",
			"stylers": [
			{
				"color": "#757575"
			}
			]
		},
		{
			"featureType": "poi.park",
			"elementType": "geometry",
			"stylers": [
			{
				"color": "#ededed"
			}
			]
		},
		{
			"featureType": "poi.park",
			"elementType": "labels.text.fill",
			"stylers": [
			{
				"color": "#9e9e9e"
			},
			{
				"visibility": "off"
			}
			]
		},
		{
			"featureType": "road",
			"elementType": "geometry",
			"stylers": [
			{
				"color": "#ffffff"
			}
			]
		},
		{
			"featureType": "road.arterial",
			"elementType": "labels.text.fill",
			"stylers": [
			{
				"color": "#757575"
			}
			]
		},
		{
			"featureType": "road.highway",
			"elementType": "geometry",
			"stylers": [
			{
				"color": "#dadada"
			}
			]
		},
		{
			"featureType": "road.highway",
			"elementType": "labels.text.fill",
			"stylers": [
			{
				"color": "#616161"
			}
			]
		},
		{
			"featureType": "road.local",
			"elementType": "labels",
			"stylers": [
			{
				"visibility": "off"
			}
			]
		},
		{
			"featureType": "road.local",
			"elementType": "labels.text.fill",
			"stylers": [
			{
				"color": "#9e9e9e"
			}
			]
		},
		{
			"featureType": "transit.line",
			"elementType": "geometry",
			"stylers": [
			{
				"color": "#e5e5e5"
			}
			]
		},
		{
			"featureType": "transit.station",
			"elementType": "geometry",
			"stylers": [
			{
				"color": "#eeeeee"
			}
			]
		},
		{
			"featureType": "water",
			"elementType": "geometry",
			"stylers": [
			{
				"color": "#c9c9c9"
			}
			]
		},
		{
			"featureType": "water",
			"elementType": "labels.text.fill",
			"stylers": [
			{
				"color": "#9e9e9e"
			}
			]
		}
		]
	};
	  var map = new google.maps.Map(mapArea, mapOptions);

	var w = $(window).width();
	var x = 767;

    if (w <= x) {
	  var markerOptions = {
		map: map,
		position: mapPosition,
		icon: new google.maps.MarkerImage(
		'/wp-content/themes/olta_corporate/images/gmap-marker-sp.svg',
		new google.maps.Size(28,38)
		),
	  };
	  var marker = new google.maps.Marker(markerOptions);
    } else {
	  var markerOptions = {
		map: map,
		position: mapPosition,
		icon: new google.maps.MarkerImage(
		'/wp-content/themes/olta_corporate/images/gmap-marker.svg',
		new google.maps.Size(47,62)
		),
	  };
	  var marker = new google.maps.Marker(markerOptions);
    }

	}