<article class="article">
	<div class="contener_bd">
		<div class="image" id="<?php echo $etatBD ;?>">
			<span class="fanionminiature" id="<?php echo $etatC ;?>"></span>
			<img class='couvertureminiature' src="<?php echo $couverture ;?>" width=198 height=280>
			<button class="boutonLire">
				<?php echo _LIRE ;?>
			</button>
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
<div class="bandedessinee" style="display: none">
	<h2 class="titre"></h2>
	<img class='couverture' src="" width=198 height=280>
</div>
<script>
	$(function() {
		$('.boutonLire').click(function() {
			$('.article').hide('slow');
			
			var titre = $('.titres').html();
			$('.titre').html(titre);

			var couverture = $('.couvertureminiature').attr('src');
			$('.couverture').attr('src', couverture);
			
			$(".bandedessinee").slice(0,1).css('display', 'block');
		});
	});
</script>
