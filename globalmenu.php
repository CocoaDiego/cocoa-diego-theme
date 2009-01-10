<div class="menu">
<?php
	$menuarray = array(
					"Home"=>array('id'=>'1','url'=>'/','imgId'=>'Image2','imgName'=>'m1'),
					"News"=>array('id'=>'2','url'=>'/category/news/','imgId'=>'Image3','imgName'=>'m2'),
					"Blog"=>array('id'=>'3','url'=>'/category/blog/','imgId'=>'Image4','imgName'=>'m3'),
					"Products"=>array('id'=>'4','url'=>'/products/','imgId'=>'Image5','imgName'=>'m4'),
					"Opportunity"=>array('id'=>'5','url'=>'/opportunity/','imgId'=>'Image6','imgName'=>'m5'),
					"Contact"=>array('id'=>'6','url'=>'/contact/','imgId'=>'Image7','imgName'=>'m6'),
					"Team Logon"=>array('id'=>'7','url'=>'/team/','imgId'=>'Image8','imgName'=>'m7'));
	$out = '';
	$templatedir = get_bloginfo('template_directory');
	foreach ($menuarray as $title => $values) {
			$triggered = '';
			if ((is_page($title) && is_single()) || (in_category($title) && $title != 'Home')) {
				$triggered = "_act";
			}
			$out.="<a href=\"".$values['url']."\" onmouseout=\"MM_swapImgRestore()\" onmouseover=\"MM_swapImage('Image".$values['imgId']."','','".$templatedir."/images/".$values['imgName']."_act.gif',1)\"><img src=\"".$templatedir."/images/".$values['imgName'].$triggered.".gif\" alt=\"".$title."\" width=\"121\" height=\"48\" id=\"Image".$values['id']."\" /></a>";
	}
	print($out);
?>	
</div>