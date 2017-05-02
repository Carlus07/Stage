<div class="container">
	<div class="row col-md-offset-1 col-md-10 col-md-offset-1"> 
		<div class="col-sm-12">
<?php
	foreach ($users as $user) {
		?>
			<div class="frameUser col-sm-4">
				<div class="row">
			    	<div class="col-sm-12">
			    	    <img class="img-responsive pictureUserList" src="<?php echo ($user->getPicture() != "") ? $user->getPicture() : "web/pictures/avatar.png" ?>"/>
			    	</div>
			    </div>
			    <div class="row">
			    	<div class="col-sm-12">
						<h4 class="text-center titleHousing"><?php echo $user->getName().' '.$user->getFirstName() ?></h4>
					</div>
				</div>
				<div class="row text-center">
					<div class="col-xs-4">
						<a style="color:black" href="?p=user.register&m=updateUser&id=<?php echo $user->getId();?>"><i class="fa fa-pencil-square-o pencil" aria-hidden="true"></i></a>
					</div>
					<div class="col-xs-4">
						<a class="viewProperty" style="color:black" href="#" value="<?php echo $user->getId();?>"><i class="fa fa-eye eye" aria-hidden="true"></i></a>
					</div>
					<div class="col-xs-4">
						<a class="removeHousing" style="color:black" href="#" value="<?php echo  $user->getId(); ?>"><i class="fa fa-times remove" aria-hidden="true"></i></a>
					</div>
				</div>
			</div>
		<?php
	}
	$pagination = ceil($size / 12);
	$active = $_GET['l'] / 12;
?>
		</div>
		<div class="col-sm-12 text-center">
			<nav aria-label="Page navigation example">
			  <ul class="pagination">
			    <li class="page-item">
			      <a class="page-link" href="?p=user.listusers&l=<?php echo ($active == 1) ? 12 : (($active-1)*12); ?>" aria-label="Previous">
			        <span aria-hidden="true">&laquo;</span>
			        <span class="sr-only">Previous</span>
			      </a>
			    </li>
			    <?php 
			    	for($i = 1; $i <= $pagination; $i++)
			    	{
			    		$class = ($active != $i) ? ' ' : ' active';
			    		$redirection = $i*12;
			    		echo '<li class="page-item '.$class.'"><a class="page-link" href="?p=user.listusers&l='.$redirection.'">'.$i.'</a></li>';
			    	}
			 	?>
			    <li class="page-item">
			      <a class="page-link" href="?p=user.listusers&l=<?php echo ($active == $pagination) ? ($active*12) : (($active+1)*12); ?>" aria-label="Next">
			        <span aria-hidden="true">&raquo;</span>
			        <span class="sr-only">Next</span>
			      </a>
			    </li>
			  </ul>
			</nav>
		</div>
	</div>
</div>