
<section id="submenu">
	<ul class="radial-nav">
		<li id="submenu-switch" class="fade"><span></span><span></span><span></span></li>
		<?php if(is_page('about')): ?>
			<li id="nav-contact"><a href="#sec-contact"><i class="fas fa-envelope"></i></a></li>
			<li id="nav-map"><a href="#sec-company"><i class="fas fa-map-marker-alt"></i></a></li>
		<?php elseif (is_page('index')): ?>
			<li id="nav-contact"><a href="/about/#sec-contact"><i class="fas fa-envelope"></i></a></li>
			<li id="nav-map"><a href="/about/#sec-company"><i class="fas fa-map-marker-alt"></i></a></li>
		<?php else: ?>
			<li id="nav-contact"><a href="/about/#sec-contact"><i class="fas fa-envelope"></i></a></li>
			<li id="nav-map"><a href="/about/#sec-company"><i class="fas fa-map-marker-alt"></i></a></li>
		<?php endif; ?>
	</ul>
</section>