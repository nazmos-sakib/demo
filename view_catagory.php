<!DOCTYPE html>
<html>
<head>
    <title>hat-bazar</title>
	<?php include("css.php"); ?>	
</head>
<body>
	<div > <?php include("header.php") ?> </div> 

 
<?php
	$image_link = "";
	$image_link2 = array(
					 "Cloth"=>array("2017-New-Fashion-Men-Blazer-Detachable-Hooded-Blazer-Men-Casual-Jacket-Slim-Fit-Suits-Costume-Homme.jpg_640x640.jpg","14199383_10153889647860983_8078317948803080957_n.png","Classic_Boutique_Embroidered.jpeg","Cotton_Gown_Style.jpeg","Jeans_Pant.jpeg","Le_Reve_Long_Sleeve.jpeg"),
					 "Beauty&Health"=>array("dolce-gabbana-5310-28658-1-zoom.jpg","brands-cosmetics-bd--5943-169321-1-zoom.jpg","philips-3315-200351-1-zoom.jpg","lancome-1086-14329-1-zoom.jpg","enfields-2574-819041-1-zoom.jpg","w7-3387-667901-1-zoom.jpg"),
					 "Jewery"=>array(),
					 "Food"=>array(),
					 "PN&Accessories"=>array(),
					 "Computer&Networking"=>array(),
					 "Autombiles&Motorcycle"=>array("bick01.jpg","bulet01.jpg","helmet01.jpg","jacket01.jpg","tyres01.jpg","car04.png"), 
					 "Electronics"=>array(),
					 "Bags&Shoes"=>array("travel_bag03.jpg","lofffar01.jpg","formal_shoes01.jpg","briefcase01.jpg","shoe01.jpg","travel_bag.jpg") ,
					 "Home"=>array(),
					 "Spors&Fitness"=>array()
					);

			echo "showing product for category: ".$_GET["name"].'<br>';
			
			echo '<div  id="div01" style="background-color:#bfbfbf;height=200px">';
			$z=$_GET["name"];
			foreach($image_link2[$z] as $y => $y_value)
			{
				$link = 'hat-bazar-image/'.$z.'/'.$y_value;
				$link1 = urlencode($link);
				//"hat-bazar-image/'.$z.'/'.$y_value.'"
				echo '<a href="view_product.php?src='.$link1.'">'.
				'<img src='.$link.' alt="'.$link.'" width="200px" height="200px" >
				</a>';
			}
			echo '</div>';
			//echo $image_link2[$_GET["name"]];

?>

</body>
</html>