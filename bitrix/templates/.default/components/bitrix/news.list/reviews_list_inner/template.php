<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>




<script type="text/javascript" >
	$(document).ready(function(){
	
		$("#foo").carouFredSel({
			items:2,
			prev:'#rwprev',
			next:'#rwnext',
			scroll:{
				items:1,
				duration:2000
			}
		});	
	});	
</script>

<? foreach($arResult["ITEMS"] as $arItem):?>
	<em>
		<div class="sb_reviewed">
			<img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" class="sb_rw_avatar" alt="">
			<span class="sb_rw_name"><?=$arItem['NAME']?></span>
			<span class="sb_rw_job"><?= $arItem['PROPERTIES']['PROFESSION']['VALUE'].', '.$arItem['PROPERTIES']['LOCATION']['VALUE'] ?></span>
			<p>“<?=$arItem['PREVIEW_TEXT']?>”</p>
			<div class="clearboth"></div>
			<div class="sb_rw_arrow"></div>
		</div>
	</em>
<? endforeach?>