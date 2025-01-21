<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<? if (empty($arResult)) return; ?>



<nav class="ps-1 navbar navbar-expand-lg navbar-dark bg-dark pt-3 ">
	<div class="container-fluid">
		<a class="navbar-brand fw-bold" href="#">Волшебство звука</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
			aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse fw-bold" id="navbarNav">
			<ul class="navbar-nav">

				<? foreach ($arResult as $arItem): ?>

					<? if ($arItem["PERMISSION"] > "D"): ?>
						<? if ($arItem["SELECTED"]): ?>
							<li class="nav-item"> <a class="nav-link active" href="<?= $arItem["LINK"] ?>"><?= $arItem["TEXT"] ?></a></li>
						<? else: ?>
							<li class="nav-item"> <a class="nav-link" href="<?= $arItem["LINK"] ?>"><?= $arItem["TEXT"] ?></a></li>
						<? endif ?>
					<? endif ?>
				<? endforeach ?>
			</ul>
		</div>
	</div>
</nav>