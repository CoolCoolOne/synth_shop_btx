<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<? if (empty($arResult)) return; ?>

<nav id="nav">
	<ul>
		<? foreach ($arResult as $arItem): ?>

			<? if ($arItem["PERMISSION"] > "D"): ?>
				<? if ($arItem["SELECTED"]): ?>
					<li class="current"> <a href="<?= $arItem["LINK"] ?>"><?= $arItem["TEXT"] ?></a></li>
				<? else: ?>
					<li><a href="<?= $arItem["LINK"] ?>"><?= $arItem["TEXT"] ?></a></li>
				<? endif ?>
			<? endif ?>
		<? endforeach ?>
	</ul>
</nav>