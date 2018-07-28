	<aside class="sidebar">
		<div id="sidebar">

		   
		    <?php // IMPRIMIR SIDEBAR MyWidget1
			    if ( !function_exists('dynamic_sidebar') 
			    		|| !dynamic_sidebar('MyWidget1') ) : ?>
			    	
		    <?php endif; ?>

		</div>

		<div id="sidebar">
		    <?php // IMPRIMIR SIDEBAR MyWidget2
		    if ( !function_exists('dynamic_sidebar') 
		    		|| !dynamic_sidebar('MyWidget2') ) : ?>

		    <?php endif; ?>
		</div>
	</aside>