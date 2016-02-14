var app = angular.module("slick-app", ["slick"]);

app.controller('appController', function($scope, $timeout){
  
  $scope.horizontal_items = [];
  $scope.vertical_items = [];
   
	$scope.horizontal_items = [
	  {
		src: 'http://mena-cdn-lb.aws.playco.com/Starz/BLACKSAILSY2015S03E001/BLACKSAILSY2015S03E001-1536x613-DMHE.jpg',
		title: 'label 1',
		description: 'additional information here'
	  },
	  {
		src: 'http://mena-cdn-lb.aws.playco.com/FOX/DAVINCISDEMONSY2013S02E007/DAVINCISDEMONSY2013S02E007-1536x613-DMHE.jpg',
		title: 'label 2',
		description: 'additional information here'
	  },
	  {
		src: 'http://mena-cdn-lb.aws.playco.com/Sony/OUTLANDERY2014S01E009/OUTLANDERY2014S01E009-1536x613-DMHE.jpg',
		title: 'label 3',
		description: 'additional information here'
	  },
	  {
		src: 'http://mena-cdn-lb.aws.playco.com/CBS/JANETHEVIRGINY2014S01E009/JANETHEVIRGINY2014S01E009-1536x613-DMHE.jpg',
		title: 'label 4',
		description: 'additional information here'
	  },
	  {
		src: 'http://mena-cdn-lb.aws.playco.com/FOX/DAVINCISDEMONSY2013S02E007/DAVINCISDEMONSY2013S02E007-1536x613-DMHE.jpg',
		title: 'label 2',
		description: 'additional information here'
	  },
	  {
		src: 'http://mena-cdn-lb.aws.playco.com/CBS/JANETHEVIRGINY2014S01E009/JANETHEVIRGINY2014S01E009-1536x613-DMHE.jpg',
		title: 'label 4',
		description: 'additional information here'
	  },
	  {
		src: 'http://mena-cdn-lb.aws.playco.com/CBS/JANETHEVIRGINY2014S01E009/JANETHEVIRGINY2014S01E009-1536x613-DMHE.jpg',
		title: 'label 4',
		description: 'additional information here'
	  },
	];


	$scope.vertical_items = [
	  {
		src: 'http://mena-cdn-lb.aws.playco.com/Sony/SLEEPLESSINSEATTLEY1993M/SLEEPLESSINSEATTLEY1993M-474x677-PST.jpg',
		title: 'label 1',
		description: 'additional information here, additional information here, additional information here, additional information here.'
	  },
	  {
		src: 'http://mena-cdn-lb.aws.playco.com/Miramax/CHOCOLATY2000M/CHOCOLATY2000M-474x677-PST.jpg',
		title: 'label 2'
	  },
	  {
		src: 'http://mena-cdn-lb.aws.playco.com/WarnerBrothers/THETIMETRAVELERSWIFEY2009MSUB/THETIMETRAVELERSWIFEY2009MSUB-474x677-PST.jpg',
		title: 'label 3',
		description: 'additional information here'
	  },
	  {
		src: 'http://mena-cdn-lb.aws.playco.com/Miramax/SERENDIPITYY2001M/SERENDIPITYY2001M-474x677-PST.jpg',
		title: 'label 4',
		description: 'additional information here'
	  },
	  {
		src: 'http://mena-cdn-lb.aws.playco.com/Lionsgate/DIRTYDANCINGY1987M/DIRTYDANCINGY1987M-474x677-PST.jpg',
		title: 'label 5',
		description: 'additional information here'
	  },
	  {
		src: 'http://mena-cdn-lb.aws.playco.com/Sony/AUSTENLANDY2013M/AUSTENLANDY2013M-474x677-PST.jpg',
		title: 'label 6',
		description: 'additional information here'
	  },
	  {
		src: 'http://mena-cdn-lb.aws.playco.com/Miramax/KATEANDLEOPOLDY2001M/KATEANDLEOPOLDY2001M-474x677-PST.jpg',
		title: 'label 7',
		description: 'additional information here'
	  },
	];
    
	$scope.dataLoaded = true;
});
