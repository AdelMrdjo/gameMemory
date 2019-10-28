<?php

$cards = array(
	array("value"=>"1","picture"=>"img/slider-image-1.jpg","shoot"=>false),
	array("value"=>"1","picture"=>"img/slider-image-1.jpg","shoot"=>false),
	array("value"=>"2","picture"=>"img/slider-image-2.jpg","shoot"=>false),
	array("value"=>"2","picture"=>"img/slider-image-2.jpg","shoot"=>false),
	array("value"=>"3","picture"=>"img/slider-image-3.jpg","shoot"=>false),
	array("value"=>"3","picture"=>"img/slider-image-3.jpg","shoot"=>false),
	array("value"=>"4","picture"=>"img/slider-image-4.jpg","shoot"=>false),
	array("value"=>"4","picture"=>"img/slider-image-4.jpg","shoot"=>false),
	array("value"=>"5","picture"=>"img/slider-image-5.jpg","shoot"=>false),
	array("value"=>"5","picture"=>"img/slider-image-5.jpg","shoot"=>false),
	array("value"=>"6","picture"=>"img/slider-image-6.jpg","shoot"=>false),
	array("value"=>"6","picture"=>"img/slider-image-6.jpg","shoot"=>false),
	array("value"=>"7","picture"=>"img/slider-image-7.jpg","shoot"=>false),
	array("value"=>"7","picture"=>"img/slider-image-7.jpg","shoot"=>false),
	array("value"=>"8","picture"=>"img/slider-image-8.jpg","shoot"=>false),
	array("value"=>"8","picture"=>"img/slider-image-8.jpg","shoot"=>false),
	array("value"=>"9","picture"=>"img/slider-image-9.jpg","shoot"=>false),
	array("value"=>"9","picture"=>"img/slider-image-9.jpg","shoot"=>false),
	array("value"=>"10","picture"=>"img/slider-image-10.jpg","shoot"=>false),
	array("value"=>"10","picture"=>"img/slider-image-10.jpg","shoot"=>false)
);
shuffle($cards);
echo json_encode($cards);
?>