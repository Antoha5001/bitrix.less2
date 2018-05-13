<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE HTML>
<html lang="ru-RU">
<head>
	<?$APPLICATION->ShowHead()?>
	<title><?$APPLICATION->ShowTitle()?></title>

<!--    <link href="--><?//=CUtil::GetAdditionalFileURL('/bitrix/templates/.default/template_styles.css')?><!--" type="text/css" rel="stylesheet" />-->
	<script type="text/javascript" src="/bitrix/templates/.default/js/jquery-1.8.2.min.js"></script>
	<script type="text/javascript" src="/bitrix/templates/.default/js/slides.min.jquery.js"></script>
	<script type="text/javascript" src="/bitrix/templates/.default/js/jquery.carouFredSel-6.1.0-packed.js"></script>
	<script type="text/javascript" src="/bitrix/templates/.default/js/functions.js"></script>

	<link rel="icon shortcut" type="image/x-icon" href="bitrix/templates/.default/favicon.icon"/>
	<!--[if gte IE 9]><style type="text/css">.gradient {filter: none;}</style><![endif]-->

	<link rel="stylesheet" href="/bitrix/templates/.default/template_styles.css">

</head>
<body>
<?$APPLICATION->ShowPanel();?>

<div class="wrap">

    <?require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/templates/.default/includes/header.php"); ?>

	<!--- // end header area --->
    <?$APPLICATION->IncludeComponent(
        "bitrix:breadcrumb",
        "breadcrumbs",
        Array()
    );?><br>

	<div class="main_container page">
		<div class="mn_container">
			<div class="mn_content">
				<div class="main_post">
					<div class="main_title">
						<p class="title">Заголовок страницы</p>
					</div>