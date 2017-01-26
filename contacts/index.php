<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");?>

<h2>ООО "Интернет-магазин электроинструмента ЭЛЕКТРОСИЛА"</h2>
<p>г. Новгород, ул. Славная 51<br />Тел. 7 (495) 000-00-00, 7 (495) 000-00-00</p>
<h2>Схема проезда</h2>
<?$APPLICATION->IncludeComponent(
	"bitrix:map.yandex.view", 
	".default", 
	array(
		"INIT_MAP_TYPE" => "MAP",
		"MAP_DATA" => "a:4:{s:10:\"yandex_lat\";d:55.66480003542082;s:10:\"yandex_lon\";d:37.75374219018695;s:12:\"yandex_scale\";i:15;s:10:\"PLACEMARKS\";a:1:{i:0;a:3:{s:3:\"LON\";d:37.754450293367;s:3:\"LAT\";d:55.664981489388;s:4:\"TEXT\";s:0:\"\";}}}",
		"MAP_WIDTH" => "100%",
		"MAP_HEIGHT" => "305",
		"CONTROLS" => array(
			0 => "ZOOM",
			1 => "TYPECONTROL",
			2 => "SCALELINE",
		),
		"OPTIONS" => array(
			0 => "ENABLE_DBLCLICK_ZOOM",
			1 => "ENABLE_DRAGGING",
		),
		"MAP_ID" => "1",
		"COMPONENT_TEMPLATE" => ".default",
		"COMPOSITE_FRAME_MODE" => "N",
		"COMPOSITE_FRAME_TYPE" => "STATIC"
	),
	false
);?>
<br />
<h2>Форма обратной связи</h2>
<?$APPLICATION->IncludeComponent("bitrix:main.feedback", ".default",
	Array(
		"USE_CAPTCHA" => "Y",
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",
		"EMAIL_TO" => "info@1414kotel.ru",
		"REQUIRED_FIELDS" => array("NAME", "EMAIL", "MESSAGE"),
		"EVENT_MESSAGE_ID" => array()
	),
	false
);?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php")?>