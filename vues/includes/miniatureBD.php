<article>
	<div class="contener_bd">

		<div class="image" id="<?php echo $etatBD ;?>">
			<span class="fanionminiature" id="<?php echo $etatC ;?>"></span>
			<img src="<?php echo $couverture ;?>" width=198 height=280>
			<div>
				<a class="boutonLire" href="<?php echo $url ;?>">
					<?php echo _LIRE ;?>
				</a>
			</div>
		</div>
		<div class="description">
			<h3 class="titres"><?php echo $titre ;?></h3>
				<p class="etat">
					<span><?php echo $droits ;?></span>
				</p>
				<p class="participants"><span><?php echo $participants ;?></span> <?php echo _NB_PARTICIPANTS ;?></p>
		</div>
	</div>
</article>
