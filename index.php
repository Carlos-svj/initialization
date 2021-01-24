<?php
    if ((isset($_GET['page'])) && ($_GET['page']==="controller_vehicle") ){
		include("view/inc/top_page_vehicle.php");
	}else{
		include("view/inc/top_page.php");
	}
	session_start();
?>
<div id="wrapper">		
    <div id="header">    	
    	<?php
    	    include("view/inc/header.php");
    	?>        
    </div>  
    <div id="menu">
		<?php
		    include("view/inc/menu.php"); //entrar en cada u dels moduls i carregar cada controlador
		?>
    </div>	
    <div id="">
    	<?php 
		    include("view/inc/pages.php"); //entrar en cada u dels moduls i carregar cada controlador
		?>        
        <br style="clear:both;" />
    </div>
    <div id="footer">   	   
	    <?php
	        include("view/inc/footer.php");
	    ?>        
    </div>
</div>
<?php
    include("view/inc/bottom_page.php");
?>