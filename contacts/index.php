<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");?><h2>Интернет-магазин 1414kotel.ru</h2>
<p>
	г. Москва, ул. Братиславская дом 30<br>
	Тел. 7 (495) 000-00-00, 7 (495) 000-00-00
</p>
<p>
	E-mail:<a href="mailto:info@1414kotel.ru">info@1414kotel.ru</a>
</p>
<h2>Схема проезда</h2>
 <?$APPLICATION->IncludeComponent(
	"bitrix:map.yandex.view",
	".default",
	Array(
		"COMPONENT_TEMPLATE" => ".default",
		"COMPOSITE_FRAME_MODE" => "N",
		"COMPOSITE_FRAME_TYPE" => "STATIC",
		"CONTROLS" => array(0=>"ZOOM",1=>"TYPECONTROL",2=>"SCALELINE",),
		"INIT_MAP_TYPE" => "MAP",
		"MAP_DATA" => "a:4:{s:10:\"yandex_lat\";d:55.66480003542082;s:10:\"yandex_lon\";d:37.75374219018695;s:12:\"yandex_scale\";i:15;s:10:\"PLACEMARKS\";a:1:{i:0;a:3:{s:3:\"LON\";d:37.754450293367;s:3:\"LAT\";d:55.664981489388;s:4:\"TEXT\";s:0:\"\";}}}",
		"MAP_HEIGHT" => "305",
		"MAP_ID" => "1",
		"MAP_WIDTH" => "100%",
		"OPTIONS" => array(0=>"ENABLE_DBLCLICK_ZOOM",1=>"ENABLE_DRAGGING",)
	)
);?> <br>
<h2>Форма обратной связи</h2>
<?$APPLICATION->IncludeComponent(
	"bitrix:main.feedback",
	".default",
	Array(
		"EMAIL_TO" => "info@1414kotel.ru",
		"EVENT_MESSAGE_ID" => array(),
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",
		"REQUIRED_FIELDS" => array("NAME","EMAIL","MESSAGE"),
		"USE_CAPTCHA" => "Y"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php")?>