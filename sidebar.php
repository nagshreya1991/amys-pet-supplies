<div class="col-md-3 col-sm-4 leftShop">
        <h3> <?php $cate = get_queried_object();
$catename = $cate->name;
if(!empty($catename)){
echo $catename;}else { echo "All products";} ?></h3>
        <!--<ul class="menuList">
          <li><a href="#" class="active">All products</a></li>
          <li><a href="#">Christmas</a></li>
          <li><a href="#">Dog</a></li>
          <li><a href="#">Cat</a></li>
          <li><a href="#">Small Animals</a></li>
          <li><a href="#">Wildlife and Pond</a></li>
          <li><a href="#">Pet Health</a></li>
          <li><a href="#">Humans</a></li>
          <li><a href="#" class="clearanceLink">CLEARANCE</a></li>
        </ul>-->
        
 <?php //if(is_active_sidebar('Shop-Category') ) { ?>       
<?php dynamic_sidebar('Shop-Category'); //}else{?>

 <?php //$cate = get_queried_object();
//$catename = $cate->name;
//echo $catename; }?>


      </div>