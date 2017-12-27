//
//where map start ->
//
//zoom style
var whereMap;

//4 типа метки, 4 картинки метки
var black_Marker = "images/black-metka.png";

//map where function
function initWhereMap() {
	whereMap = new google.maps.Map(document.getElementById('whereMap'), {
		center: {lat:55.7222991 , lng: 37.6719955}, //центровка карты
		zoom: 17,
		panControl: false,
		scrollwheel: false, 
	});

	 var styles = [
		{
		stylers: [
				{ hue: "#A9A69E" },
				{ saturation: -80 },
				{ lightness: 0}
			]
		}
	];
  	whereMap.setOptions({styles: styles});
	//close all infowindows if other  InfoWindow Open 
	var bublesArray = [];
	google.maps.Map.prototype.clearInfoBubbles = function() {
	  for (var i = 0; i < bublesArray.length; i++ ) {
	     bublesArray[i].close();
	  }
	}


	//
	//МЕТКА 1  Метро алексеевская
	//
	//создаем маркер (метку) , остальные метки делаем по образу и подобию :)
	var marker1 = new google.maps.Marker({
		position: {lat:55.7222991 , lng: 37.6719955}, //позиция маркера
		map: whereMap,
		icon:black_Marker,
	});
	 
	

	

	

	//end where all regions map


	

	
}//end of all maps




