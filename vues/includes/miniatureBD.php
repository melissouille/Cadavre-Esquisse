<article><!-- limiter à 6 -->
	<div class="contener_bd">

		<div class="image" id="<?php echo $etatBD ;?>">
			<span class="fanion" id="<?php echo $etatC ;?>"></span>
			<img src="<?php echo $couverture ;?>">
			<div class="boutonLire">
				<a href="<?php echo $url ;?>">
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
