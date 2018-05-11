<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<? if (!empty($arResult)) {
//	test_dump($arResult)?>
	<div class="nv_topnav">
		<ul>
<!--			<li><a class="menu-img-fon" style="background-image: url(bitrix/templates/.default/images/nv_home.png);"  href="/"><span></span></a>	</li>-->
			<?

				$previousLevel = 0;
				foreach ($arResult as $arItem){

				if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel) {
					echo str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));
				}

				if ($arItem["IS_PARENT"]){
					if ($arItem["DEPTH_LEVEL"] == 1){ ?>
			<li>
				<a href="<?= $arItem["LINK"] ?>"
					<?if (isset($arItem["PARAMS"]["IMG"])):?> class="menu-img-fon" style="background-image:	url(<?=$arItem["PARAMS"]["IMG"]?>);" <?endif;?>>
					<span><?= $arItem["TEXT"] ?></span></a>
				<ul><?
			} else { ?>

					<li>
						<a href="<?= $arItem["LINK"] ?>"> <?=$arItem["TEXT"]?> </a>
						<ul>
							<? }
			} else {
				if ($arItem["PERMISSION"] > "D"): ?>
									<? if ($arItem["DEPTH_LEVEL"] == 1): ?>
										<li><a href="<?= $arItem["LINK"] ?>" <?if (isset($arItem["PARAMS"]["IMG"])):?> class="menu-img-fon" style="background-image:	url(<?=$arItem["PARAMS"]["IMG"]?>);" <?endif;?>>
												<span><?= $arItem["TEXT"] ?></span>
											</a>
										</li>
									<? else: ?>
										<li><a href="<?= $arItem["LINK"] ?>"><?= $arItem["TEXT"] ?></a></li>
									<? endif ?>

								<? endif ?>

							<? } ?>

							<? $previousLevel = $arItem["DEPTH_LEVEL"]; ?>


							<? } ?>
							<!--end foreach-->
							<? if ($previousLevel > 1)://close last item tags?>
								<?= str_repeat("</ul></li>", ($previousLevel - 1)); ?>
							<? endif ?>

							<div class="clearboth"></div>
						</ul>
	</div>
<? } ?>