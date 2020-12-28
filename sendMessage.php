<?php
require_once __DIR__ . '/vendor/autoload.php';
include "MyDb.php";

$botToken = "1267478990:AAH8VpXzMe0W01UJJCOM1D69MtX45tfpMvM";
/**
 * @var $bot \TelegramBot\Api\Client | \TelegramBot\Api\BotApi
 */
$bot = new \TelegramBot\Api\Client($botToken);


$bot->command('start', static function (\TelegramBot\Api\Types\Message $message) use ($bot) {
    $link = new \TelegramBot\Api\Types\Inline\InlineKeyboardMarkup([[['text' => "O'zbek", 'callback_data' => "uz"], ['text' => 'Ўзбек', 'callback_data' => "cy"]], [['text' => 'Русский', 'callback_data' => "rus"]]]);
    $bot->sendMessage($message->getChat()->getId(), "<b>🇺🇿 Iltimos tilni tanlang!\n\n🇺🇿 Илтимос тилни танланг!\n\n🇷🇺 Пожалуйста, выберите язык!</b>", "HTML", false, null, $link);
});

try {

    $bot->callbackQuery(static function (\TelegramBot\Api\Types\CallbackQuery $query) use ($bot) {
        $chatId = $query->getMessage()->getChat()->getId();
        $data = $query->getData();
        $messageId = $query->getMessage()->getMessageId();
        $tilMassiv = ['uz' => 'name_uz_latin', 'rus' => 'name_ru', 'cy' => 'name_uz_cyrill'];
        $til = tilniTop()[$chatId];
        if ($data == "menu") {
            $link = new \TelegramBot\Api\Types\Inline\InlineKeyboardMarkup([[['text' => "O'zbek", 'callback_data' => "uz"], ['text' => 'Ўзбек', 'callback_data' => "cy"]], [['text' => 'Русский', 'callback_data' => "rus"]]]);
            $bot->editMessageText($chatId, $messageId, "<b>🇺🇿 Iltimos tilni tanlang!\n\n🇺🇿 Илтимос тилни танланг!\n\n🇷🇺 Пожалуйста, выберите язык!</b>", "HTML", false, $link);
        }

        if (array_key_exists($data, $tilMassiv)) {
            tilniYoz($chatId, $data);
            $viloyatHeader = $data == "uz" ? "<b>Viloyatni tanlang</b>" : $viloyatHeader = $data == "rus" ? "<b>Выберите область</b>" : "<b>Вилойатни танланг</b>";
            $link = new \TelegramBot\Api\Types\Inline\InlineKeyboardMarkup(tableToMassiv("SELECT * FROM regions", $tilMassiv[$data], 'menu', 'region_id'));
            $bot->editMessageText($chatId, $messageId, $viloyatHeader, "HTML", false, $link);
        }


        $viloyatMassiv = massiv("select * from regions");
        if (in_array($data, $viloyatMassiv)) {
            $uni_header = variable2($til, "Universitetni tanlang", "Университетни танланг", "Выберите университет", 1);
            $link = new \TelegramBot\Api\Types\Inline\InlineKeyboardMarkup(tableToMassiv("SELECT * FROM universities where region_id = $data", $tilMassiv[$til], $til, 'uni_id'));
            $bot->editMessageText($chatId, $messageId, $uni_header, "HTML", false, $link);
        }
        $universitetMassiv = massiv("select * from universities");
        if (in_array($data, $universitetMassiv)) {
            $mutahasislik = variable2($til, "Mutaxasislikni tanlang", "Мутахасисликни танланг", "Выберите специальность", 1);
            $region_id = massiv("select region_id from universities where uni_id = $data");
            $link = new \TelegramBot\Api\Types\Inline\InlineKeyboardMarkup(tableFakultet($data, $tilMassiv[$til], $region_id[0], $speciality_id));
            $bot->editMessageText($chatId, $messageId, $mutahasislik, "HTML", false, $link);
        }
        $fakultetMassiv = massiv("select speciality_id from quota_2020");
        if (gettype($data) == "string") {
            $data2 = substr($data, 0, -3);
            if (in_array(intval($data2), $fakultetMassiv)) {
                $uch = substr($data, -3);
                $universitetName = massiv("select $tilMassiv[$til] from universities where uni_id = $uch");
                $specialist_bachelor = massiv("select $tilMassiv[$til] from specialist_bachelor where specialist_id = $data2");
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
                $menu = variable2($til, "menu", "меню", "меню", 2);
                $orqaga = variable2($til, "orqaga", "орқага", "назад", 2);
                $umumiy = variable2($til, "Umumiy qabul kvotasi:", "Умумий қабул квотаси:", "Общая квота на прием:", 2);
                $ta = variable2($til, "ta", "та", "ед", 2);
                $shundan = variable2($til, "shundan:", "шундан:", "из этого:", 2);
                $kishi = variable2($til, "ta", "та", "чел", 2);
                $uz = variable2($til, "o‘zbek guruhi", "ўзбек гуруҳи", "на узбек. группы", 2);
                $ru = variable2($til, "rus guruhi", "рус гуруҳи", "на рус. группы", 2);
                $kz = variable2($til, "qozoq guruhi", "қозоқ гуруҳи", "на казах. группы", 2);
                $qq = variable2($til, "qoraqalpoq guruhi", "қорақалпоқ гуруҳи", "на каракалпак. группы", 2);
                $tj = variable2($til, "tojik guruhi", "тожик гуруҳи", "на таджик. группы", 2);
                $kg = variable2($til, "qirg'iz guruhi", "қирғиз гуруҳи", "на киргиз. группы", 2);
                $tm = variable2($til, "turkman guruhi", "туркман гуруҳи", "на тукрмен. группы", 2);
                $kontrakt=variable2($til,"To‘lov kontrakt asosida:","Тўлов контракт асосида:","на платно-контрактной основе:",2);



                $jumladan = variable2($til, "jumladan", "жумладан", "из этого", 2);
                $grant = variable2($til, "Davlat granti asosida:", "Давлат гранти асосида:", "на основе госуд. гранта:", 2);
                $link = new \TelegramBot\Api\Types\Inline\InlineKeyboardMarkup([[['text' => $orqaga, 'callback_data' => $uch], ['text' => $menu, 'callback_data' => "menu"]]]);
                $bot->editMessageText($chatId, $messageId, "🏛 <b>$universitetName[0]</b>\n\n🎓 <b>$data2</b>  - <i> $specialist_bachelor[0]</i>\n\n<b>$umumiy</b> $quota_all[0] $ta,\n$shundan\n\n🟢<b>$grant</b> $quota_grant[0] $kishi,\n$jumladan,\n🇺🇿 $uz - $uz_g[0] $ta;\n🇷🇺 $ru - $ru_g[0] $ta;\n🇺🇿🟡 $qq - $qq_g[0] $ta;\n🇹🇯 $tj - $tj_g[0] $ta;\n🇰🇿 $kz - $kz_g[0] $ta;\n🇰🇬 $kg - $kg_g[0] $ta;\n🇹🇲 $tm - $kg_g[0] $ta;\n\n💰 <b>$kontrakt</b> $quota_contract[0] $ta,\n$jumladan,\n🇺🇿 $uz - $uz_c[0] $ta;\n🇷🇺 $ru - $ru_c[0] $ta;\n🇺🇿🟡 $qq - $qq_c[0] $ta;\n🇹🇯 $tj - $tj_c[0] $ta;\n🇰🇿 $kz - $kz_c[0] $ta;\n🇰🇬 $kg - $kg_c[0] $ta;\n🇹🇲 $tm - $kg_c[0] $ta;\n", "HTML", false, $link);
            }
        }
    });
}catch (Exception $e){
    $e->getTraceAsString();
}
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




///////////////////////


<?php

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

function tilniYoz($chatId, $til)
{

    $fp = fopen(__DIR__ . "/newfile.txt", 'a+');
    fwrite($fp, $chatId . " " . $til . "\n");
    fclose($fp);
}

function tilniTop()
{
    $myfile = fopen("newfile.txt", "r") or die("Unable to open file!");
    $massiv = [];
    while (!feof($myfile)) {
        $id = fgets($myfile);
        $id = explode(" ", str_replace("\n", "", $id));
        if (isset($id[1])) {
            $massiv[intval($id[0])] = $id[1];
        }
    }
    fclose($myfile);
    return $massiv;

}

function variable2($til, $uz, $cy, $rus,$key)
{
    if ($key==1){

        $var = $til == "uz" ? "<b>".$uz."</b>" :$var= $til == "rus" ? "<b>".$rus."</b>" : "<b>".$cy."</b>";
    }else{
        $var = $til == "uz" ? $uz :$var= $til == "rus" ? $rus :$cy;
    }

    return $var;
}


?>


