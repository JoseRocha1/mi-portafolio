<?php $numero_paginas_plan = numero_paginas_plan($blog_config['registro_por_pagina'], $conexion); ?>
<section class="paginacion">
	<ul>
		<?php if(pagina_actual() === 1): ?>
			<li class="disabled">&laquo;</li>
		<?php else: ?>
			<li><a href="plan.php?p=<?php echo pagina_actual() - 1 ?>">&laquo;</a></li>
		<?php endif; ?>

		<?php for($i = 1; $i <= $numero_paginas_plan; $i++): ?>
			<?php if(pagina_actual() === $i): ?>
				<li class="active">
					<?php echo $i; ?>
				</li>
			<?php else: ?>
				<li><a href="plan.php?p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
			<?php endif; ?>
		<?php endfor; ?>

		<?php if(pagina_actual() == $numero_paginas_plan): ?>
			<li class="disabled">&raquo;</li>
		<?php else: ?>
			<li><a href="plan.php?p=<?php echo pagina_actual() + 1; ?>">&raquo;</a></li>
		<?php endif; ?>
	</ul>
</section>