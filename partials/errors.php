<?php if ($errors): ?>
	  <strong>Lo sentimos pero tiene los siguientes errores!<br></strong> 
	    <ul style="color: #f00;">
	        <?php foreach ($errors as $error): ?>
	            <li> <?php echo $error ?> </li>
	        <?php endforeach; ?>
	    </ul>
<?php endif; ?>