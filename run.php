<?php
date_default_timezone_set("Asia/Baghdad");
error_reporting(0);
if (!file_exists("ID")) {
$g = readline("𝗂𝖣 >>>: ");
file_put_contents("ID", $g);
}
if (!file_exists("token")) {
$g = readline("𝖤𝗇𝖳𝖾𝖱 𝖳𝗈𝖪𝖾𝖭 >>>: ");
file_put_contents("token", $g);
}
if (!file_exists("info.json")) {
file_put_contents("info.json", "");
}
$info = json_decode(file_get_contents('info.json'),true);
$info["num1"] = "off";
file_put_contents('info.json', json_encode($info));
$info["num2"] = "off";
file_put_contents('info.json', json_encode($info));
$info["num3"] = "off";
file_put_contents('info.json', json_encode($info));
$info["num4"] = "off";
file_put_contents('info.json', json_encode($info));
$info["num5"] = "off";
file_put_contents('info.json', json_encode($info));
$info["num6"] = "off";
file_put_contents('info.json', json_encode($info));
$info["num7"] = "off";
file_put_contents('info.json', json_encode($info));
$info["num8"] = "off";
file_put_contents('info.json', json_encode($info));
echo "جاري تشغيل...\n";
shell_exec("screen -dmS besso php7.4 bot.php");
echo "تم تشغيل البوت...\n";
echo "Done\n\n\n\n";