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
	$().ready(function(){
		$(function(){
			$('#slides').slides({
				preload: true,
				generateNextPrev: false,
				autoHeight: true,
				play: 4000,
				effect: 'fade'
			});
		});
	});
</script>

<!--
	<div class="sl_slider" id="slides">
		<div class="slides_container">
			<div>
				<div>
					<img src="/bitrix/templates/.default/content/1.jpg" alt="" />
					<h2><a href="">Диваны и кресла</a></h2>
					<p>
					Новая комбинация для ТВ БЕСТО не просто предмет мебели – она разработана, также, для мультимедиа. Провода и сетевые кабели можно хранить внутри комбинации или протянуть через отверстие для вентиляции. Секция полок обеспечивает эффективное использование стены, освобождая место на полу.
					</p>
					<a href="" class="sl_more">Подробнее &rarr;</a>
				</div>
			</div>
			<div>
				<div>
					<img src="/bitrix/templates/.default/content/1.jpg" alt="" />
					<h2><a href="">Диваны и кресла</a></h2>
					<p>
					Новая комбинация для ТВ БЕСТО не просто предмет мебели – она разработана, также, для мультимедиа. Провода и сетевые кабели можно хранить внутри комбинации или протянуть через отверстие для вентиляции. Секция полок обеспечивает эффективное использование стены, освобождая место на полу.
					</p>
					<a href="" class="sl_more">Подробнее &rarr;</a>
				</div>
			</div>
		</div>
	</div>	

	- лого $arResult['ITEMS'][0]["PREVIEW_PICTURE"]
	- Имя $arResult['ITEMS'][0]['NAME']
	- анонс $arResult['ITEMS'][0]['PREVIEW_TEXT']
	- ссылка на страницу продукта $arResult['ITEMS'][0]['DETAIL_PAGE_URL']
--->

<?dump($arResult['ITEMS'][0])?>

<div class="sl_slider" id="slides">
	<div class="slides_container">
		<? foreach($arResult['ITEMS'] as $arItem):?>
			<div>
				<div>
					<img src="<?=$arItem["PREVIEW_PICTURE"]['SRC']?>" alt="лого">
					<h2><a href="<?=$arItem['DETAIL_PAGE_URL']?>"><?=$arItem['NAME']?></a></h2>
					<p><?=$arItem['PREVIEW_TEXT']?></p>
					<a href="<?=$arItem['DETAIL_PAGE_URL']?>">Подробнее &rarr;</a>
				</div>
			</div>
		<? endforeach ?>
	</div>
</div>	