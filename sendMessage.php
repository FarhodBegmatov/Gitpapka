<?php
require_once __DIR__ . '/vendor/autoload.php';
include "MyDb.php";
$botToken = "";
/**
 * @var $bot \TelegramBot\Api\Client | \TelegramBot\Api\BotApi
 */
$bot = new \TelegramBot\Api\Client($botToken);
$bot->command('start', static function (\TelegramBot\Api\Types\Message $message) use ($bot) {
    $link = new \TelegramBot\Api\Types\Inline\InlineKeyboardMarkup([[['text' => "O'zbek", 'callback_data' => "uz"], ['text' => 'Ўзбек', 'callback_data' => "cy"]], [['text' => 'Русский', 'callback_data' => "rus"]]]);
    $bot->sendMessage($message->getChat()->getId(), "<b>🇺🇿 Iltimos tilni tanlang!\n\n🇺🇿 Илтимос тилни танланг!\n\n🇷🇺 Пожалуйста, выберите язык!</b>", "HTML", false, null, $link);
});
$bot->callbackQuery(static function (\TelegramBot\Api\Types\CallbackQuery $query) use ($bot) {
    $chatId = $query->getMessage()->getChat()->getId();
    $data = $query->getData();
    $messageId = $query->getMessage()->getMessageId();
    $tilMassiv = ['uz' => 'name_uz_latin', 'rus' => 'name_ru', 'cy' => 'name_uz_cyrill'];
    if (array_key_exists($data, $tilMassiv)) {
        $idlarMassivi=massiv("select chatId from userLanguages");
        if (!in_array($chatId,$idlarMassivi)){
            $baza=new baza();
            $baza->bazagaYoz($chatId,$data);
        }else{
            $baza=new baza();
            $baza->changeLanguage($chatId,$data);

        }

        $viloyatHeader = $data == "uz" ? '<b>Viloyatni tanlang</b>' : $data == "rus" ? $viloyatHeader = "<b>Выберите область</b>" : "<b>Вилойатни танланг</b>";
        $link = new \TelegramBot\Api\Types\Inline\InlineKeyboardMarkup(tableToMassiv("SELECT * FROM regions", $tilMassiv[$data], 'menu', 'region_id'));
        $bot->editMessageText($chatId, $messageId, $viloyatHeader, "HTML", false, $link);
    }
    // $til=massiv("select til from userLanguages where chatId=$chatId")[0]; -> davomi bor
    if ($data == "menu") {
        $link = new \TelegramBot\Api\Types\Inline\InlineKeyboardMarkup([[['text' => "O'zbek", 'callback_data' => "uz"], ['text' => 'Ўзбек', 'callback_data' => "cy"]], [['text' => 'Русский', 'callback_data' => "rus"]]]);
        $bot->editMessageText($chatId, $messageId, "<b>🇺🇿 Iltimos tilni tanlang!\n\n🇺🇿 Илтимос тилни танланг!\n\n🇷🇺 Пожалуйста, выберите язык!</b>", "HTML", false, $link);
    }
    //  shu joydan faydalanuvchi tili aniq bo'lishi kk.
    $viloyatMassiv = massiv("select * from regions"); //bu dafault -> 'uz'
    if (in_array($data, $viloyatMassiv)) {
        $link = new \TelegramBot\Api\Types\Inline\InlineKeyboardMarkup(tableToMassiv("SELECT * FROM universities where region_id = $data", "name_uz_latin", 'uz', 'uni_id'));
        $bot->editMessageText($chatId, $messageId, "<b>Universitetni tanlang</b>", "HTML", false, $link);
    }
    $universitetMassiv = massiv("select * from universities");
    if (in_array($data, $universitetMassiv)) {
        $region_id = massiv("select region_id from universities where uni_id = $data");
        $link = new \TelegramBot\Api\Types\Inline\InlineKeyboardMarkup(tableFakultet($data, 'name_uz_latin', $region_id[0], $speciality_id));
        $bot->editMessageText($chatId, $messageId, '<b>Mutaxasisliklar</b>', "HTML", false, $link);
    }
    $fakultetMassiv = massiv("select speciality_id from quota_2020");
    if (gettype($data) == "string") {
        $data2 = substr($data, 0, -3);
        if (in_array(intval($data2), $fakultetMassiv)) {
            $uch = substr($data, -3);
            $universitetName = massiv("select name_uz_latin from universities where uni_id = $uch");
            $specialist_bachelor = massiv("select name_uz_latin from specialist_bachelor where specialist_id = $data2");
            $quota_all = massiv("select quota_all from quota_2020 where speciality_id = $data2");
            $quota_grant = massiv("select quota_grant from quota_2020 where speciality_id = $data2");
            $quota_contract = massiv("select quota_contract from quota_2020 where speciality_id = $data2");
            $uz_g = massiv("select uz_g from quota_2020 where speciality_id = $data2");
            $ru_g = massiv("select ru_g from quota_2020 where speciality_id = $data2");
            $qq_g = massiv("select qq_g from quota_2020 where speciality_id = $data2");
            $tj_g = massiv("select tj_g from quota_2020 where speciality_id = $data2");
            $kz_g = massiv("select kz_g from quota_2020 where speciality_id = $data2");
            $kg_g = massiv("select kg_g from quota_2020 where speciality_id = $data2");
            $tm_g = massiv("select tm_g from quota_2020 where speciality_id = $data2");
            $uz_c = massiv("select uz_c from quota_2020 where speciality_id = $data2");
            $ru_c = massiv("select ru_c from quota_2020 where speciality_id = $data2");
            $qq_c = massiv("select qq_c from quota_2020 where speciality_id = $data2");
            $tj_c = massiv("select tj_c from quota_2020 where speciality_id = $data2");
            $kz_c = massiv("select kz_c from quota_2020 where speciality_id = $data2");
            $kg_c = massiv("select kg_c from quota_2020 where speciality_id = $data2");
            $tm_c = massiv("select tm_c from quota_2020 where speciality_id = $data2");
            $link = new \TelegramBot\Api\Types\Inline\InlineKeyboardMarkup([[['text' => "orqaga", 'callback_data' => $uch], ['text' => 'menu', 'callback_data' => "menu"]]]);
            $bot->editMessageText($chatId, $messageId, "🏛 <b>$universitetName[0]</b>\n\n🎓 <b>$data2</b>  - <i> $specialist_bachelor[0]</i>\n\n<b>Umumiy qabul kvotasi:</b> $quota_all[0] ta,\nshundan:\n\n🟢<b>Davlat granti asosida:</b> $quota_grant[0] ta,\njumladan,\n🇺🇿 o‘zbek guruhi - $uz_g[0] ta;\n🇷🇺 rus guruhi - $ru_g[0] ta;\n🇺🇿🟡 qoraqalpoq guruhi - $qq_g[0] ta;\n🇹🇯 tojik guruhi - $tj_g[0] ta;\n🇰🇿 qozoq guruhi - $kz_g[0] ta;\n🇰🇬 qirg‘iz guruhi - $kg_g[0] ta;\n🇹🇲 turkman guruhi - $kg_g[0] ta;\n\n💰 <b>To‘lov kontrakt asosida:</b> $quota_contract[0] ta,\njumladan,\n🇺🇿 o‘zbek guruhi - $uz_c[0] ta;\n🇷🇺 rus guruhi - $ru_c[0] ta;\n🇺🇿🟡 qoraqalpoq guruhi - $qq_c[0] ta;\n🇹🇯 tojik guruhi - $tj_c[0] ta;\n🇰🇿 qozoq guruhi - $kz_c[0] ta;\n🇰🇬 qirg‘iz guruhi - $kg_c[0] ta;\n🇹🇲 turkman guruhi - $kg_c[0] ta;\n", "HTML", false, $link);
        }
    }
});
$bot->on(static function (\TelegramBot\Api\Types\Update $update) use ($bot) {
},
    static function (\TelegramBot\Api\Types\Update $update) use ($bot) {
        $chaId = $update->getMessage()->getChat()->getId();
        $firstName = $update->getMessage()->getFrom()->getFirstName();
        $bot->sendMessage($chaId, "Salom  $firstName! Men botman 😀\nSizga quyidagi tugmachalardan birini bosishni tavsiya qilaman.");
        $link = new \TelegramBot\Api\Types\Inline\InlineKeyboardMarkup([[['text' => "O'zbek", 'callback_data' => "uz"], ['text' => 'Ўзбек', 'callback_data' => "cy"]], [['text' => 'Русский', 'callback_data' => "rus"]]]);
        $bot->sendMessage($chaId, "<b>🇺🇿 Iltimos tilni tanlang!\n\n🇺🇿 Илтимос тилни танланг!\n\n🇷🇺 Пожалуйста, выберите язык!</b>", "HTML", false, null, $link);
    });
$bot->run();


/////////////////////


function tableToMassiv($sql, $til, $callback = "", $eachCallback = "")
{
    $massiv = [];
    $myPDO = new PDO('sqlite:abtbot.db');
    $result = $myPDO->query($sql);
    $count = 0;
    foreach ($result as $row) {
        array_push($massiv, []);
        array_push($massiv[$count], ['text' => $row[$til], 'callback_data' => $row[$eachCallback]]);
        $count++;
    }
    array_push($massiv, []);
    $tilMassiv = ['uz' => 'name_uz_latin', 'rus' => 'name_ru', 'cy' => 'name_uz_cyrill'];
    $menyu = $til == $tilMassiv['uz'] ? "menu" : $menyu = $til == $tilMassiv['cy'] ? 'меню' : 'меню';
    $menyuTili = $til == $tilMassiv['uz'] ? "orqaga" : $menyuTili = $til == $tilMassiv['cy'] ? 'орқага' : 'назад';
    array_push($massiv[$count], ['text' => $menyuTili, 'callback_data' => $callback]);
    array_push($massiv[$count], ['text' => $menyu, 'callback_data' => 'menu']);
    return $massiv;
}

function tableFakultet($data, $til, $callback = "", $eachCallback = "")
{
    $speciality_id = massiv("select speciality_id from quota_2020 where university_id = $data");
    $massiv = [];
    $result = fakultet($data, $til);
    $count = 0;
    foreach ($result as $row => $value) {
        array_push($massiv, []);
        array_push($massiv[$count], ['text' => $value, 'callback_data' => $speciality_id[$count] . "" . $data]);
        $count++;
    }
    array_push($massiv, []);
    $tilMassiv = ['uz' => 'name_uz_latin', 'rus' => 'name_ru', 'cy' => 'name_uz_cyrill'];
    $menyu = $til == $tilMassiv['uz'] ? "menu" : $menyu = $til == $tilMassiv['cy'] ? 'меню' : 'меню';
    $menyuTili = $til == $tilMassiv['uz'] ? "orqaga" : $menyuTili = $til == $tilMassiv['cy'] ? 'орқага' : 'назад';
    array_push($massiv[$count], ['text' => $menyuTili, 'callback_data' => $callback]);
    array_push($massiv[$count], ['text' => $menyu, 'callback_data' => 'menu']);
    return $massiv;
}

function massiv($sql)
{
    $myPDO = new PDO('sqlite:abtbot.db');
    $result = $myPDO->query($sql);
    $massiv = [];
    foreach ($result as $row) {
        if (isset($row[0])) {
            array_push($massiv, $row[0]);
        }
    }
    return $massiv;
}

function fakultet($data, $til)
{
    $speciality_id = massiv("select speciality_id from quota_2020 where university_id = $data");
    $massiv = [];
    foreach ($speciality_id as $item) {
        $specialist_bachelor = massiv("select $til from specialist_bachelor where specialist_id = $item");
        if (isset($specialist_bachelor[0])) {
            array_push($massiv, $specialist_bachelor[0]);
        }
    }
    return $massiv;
}







