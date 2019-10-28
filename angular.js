var app=angular.module('myApp',[]);
app.controller('myCtrl',function($scope,$http,$timeout){
	$http.get("cards.php")
		 .then(function(response){
		 	$scope.cards = response.data;
	});
	var firstClick = -1, secondClick = -1, firstIndex = -1, secondIndex = -1;
	$scope.correct = 0;
	$scope.click = function(index,value,shoot){
		if(firstClick == -1){
			if(shoot == true) return;
 			$scope.cards[index]['shoot'] = !shoot;
 			firstClick = value;
 			firstIndex = index;
 		}
 		else if(firstClick != -1 && secondClick == -1 && firstIndex != index){
 			if(shoot == true) return;
 			$scope.cards[index]['shoot'] = !shoot;
 			secondClick = value;
 			secondIndex = index;
 			$scope.match();
 		}
	}
	$scope.match = function(){
		if(firstClick != secondClick){
			$timeout(function () {
			$scope.cards[firstIndex]['shoot'] = false;
			$scope.cards[secondIndex]['shoot'] = false;
			}, 500);
		}else{
			$scope.correct += 1;
		}
		$timeout(function () {
			$scope.areyouwin();
			firstClick = -1;
			secondClick = -1;
			firstIndex = -1;
			secondIndex = -1;
		}, 500);
	}
	$scope.areyouwin = function(){
		var total = 0;
		for(var k=0;k<$scope.cards.length;k++){
			if($scope.cards[k]['shoot'] == true){
				total+=1;
			}
			if(total == $scope.cards.length){
				$(".container").hide("normal");
				$("h1").hide("normal");
				$("#gameOver").show("normal");
			}
		}
	}
})