<?php


// I wonder what it could be if you're not the owner...
// You dirty dirty DIRTY hacker!
// Or... admin..
// comment


$chatdemo = file('innerchat.php');

// Last line of...

$last = sizeof($chatdemo) - 1;
echo $last;
// Remove the last line from the variable.

unset($chatdemo[$last]);

$demoin = fopen('innerchat.php', 'w');


// PHP is extremely weird. I wish it was more like Javascript. But no. It has to do this weird thing.

if(isset($_COOKIE["cbgmember"])):

// If you have CBG membership (aka I have met you IRL.)
// Allow less than and greater than signs to be used raw along with other things.

$messageRequest = $_COOKIE["message"];

else:

$messageRequest = htmlspecialchars($_COOKIE["message"]);

endif;

// anti haxx
$messageRequest = str_ireplace("\u{200b}", "", $messageRequest);
// end of antihaxx
$messageRequest = str_replace(":err:", "<img src='err.png' alt='(X)'>", $messageRequest);
$messageRequest = str_replace(":mad:", "<img src='mad.gif' alt='(X)'>", $messageRequest);
$messageRequest = str_replace(":mon:", "<img src='mon.gif' alt='(X)'>", $messageRequest);
$messageRequest = str_replace(":epic:", "<img src='epic.png' alt='(X)'>", $messageRequest);
$messageRequest = str_replace(":milkable:", "<?php if(file_get_contents(\"./milkable.php\") == \"1\") { echo \"<font color='#00ff00'>Cow is milkable!</font>\"; } else { if(file_get_contents(\"./milkable.php\") == \"0\"){ echo \"<font color='#ff0000'>Cow is NOT milkable</font>\"; } } ?>", $messageRequest);
$messageRequest = str_replace(":nick:", "<?php echo \$_COOKIE['nickname'] ?>", $messageRequest);
$messageRequest = str_replace(":stealm:", "<?php echo \$_COOKIE['message'] ?>", $messageRequest);
$messageRequest = str_replace(":own:", "<img src='Owner.png' alt='[M]'>", $messageRequest);
$messageRequest = str_replace(":cbg:", "<img src='cbg.png' alt='&lt;CBG&gt;'>", $messageRequest);
$messageRequest = str_replace(":)", "<img src='smile.gif' alt=':)'>", $messageRequest);
$messageRequest = str_replace("=O.O=", "<img src='blush.gif'>", $messageRequest);
$messageRequest = str_replace(":xD:", "<img src='ecksdee.png' alt='xD'>", $messageRequest);
$messageRequest = str_replace(":djoy:", "<img src='https://discordapp.com/assets/cae9e3b02af6e987442df2953de026fc.svg' alt='djoy' width='16' height='16'>", $messageRequest);
$messageRequest = str_replace(":pingas:", "<img src='pengas.png' width='16' height='16' alt='snopingas'>", $messageRequest);
$messageRequest = str_replace(":weed:", "<img src='weed.png' alt='[teh healing herb that also gets u high]'>", $messageRequest);
$messageRequest = str_replace(":oh:", "<img src='oh.jpg' width='32' height='32' alt='[teh healing herb that also gets u high]'>", $messageRequest);
$messageRequest = str_replace(":spoops:", "<img src='spoopy.png' width='16' height='16' alt=':spoops:' title='Part of the 2019 Halloween update (10/31/2019, Thursday, 8:12 AM)'>", $messageRequest);
$messageRequest = str_replace(":wutt:", "<img src='whutt.jpg' width='32' height='32' alt='[teh healing herb that also gets u high]'>", $messageRequest);
$messageRequest = str_replace(":srsly:", "<img src='seriously.jpg' width='32' height='32' alt='[teh healing herb that also gets u high]'>", $messageRequest);
$messageRequest = str_replace(":pwaa_con:", "<img src='pwaa_con.gif' alt='Confident Phoenix'>", $messageRequest);
$messageRequest = str_replace(":pwaa_gah:", "<img src='pwaa_gah.gif' alt='PWAA - Gah!'>", $messageRequest);
$messageRequest = str_replace(":pwaa_objection:", "<img src='objection.gif' alt='Objection!'>", $messageRequest);
$messageRequest = str_replace(":pwaa_love:", "<img src='pwaa_inLove.gif' alt='PWAA - In LOVE'>", $messageRequest);
$messageRequest = str_replace(":pwaa_hair:", "<img src='pwaa_toupee.gif' alt='toupee'>", $messageRequest);
$messageRequest = str_replace(":pwaa_slam:", "<img src='pwaa_slam.gif' alt='PWAA'>", $messageRequest);
$messageRequest = str_replace(":pwaa_pensive:", "<img src='pwaa_gbsweat.gif' alt='Pensive'>", $messageRequest);
$messageRequest = str_replace(":pwaa_objecting:", "<img src='pwaa_objecting.gif' alt='\"OBJECTION!\"'>", $messageRequest);
$messageRequest = str_replace(":pwaa_sweat:", "<img src='pwaa_sweat.gif' alt='Phoenix sweating'>", $messageRequest);
$messageRequest = str_replace(":pwaa_shrug:", "<img src='pwaa_shrug.gif' alt='EW shrug'>", $messageRequest);
$messageRequest = str_replace(":ice:", "<img src='picardia.png' alt='i c e'>", $messageRequest);
$messageRequest = str_replace(":syscon:", "<img src='syscon.png' alt='[SYS]' title='sysCon icon'>", $messageRequest);
$messageRequest = str_replace("^:^", ";", $messageRequest);
$messageRequest = str_replace("<?php ", "LOL NO BITCH!! ", $messageRequest);
$messageRequest = str_replace("<embed ", "LOL NO BITCH!! ", $messageRequest);
$messageRequest = str_replace("onload=", "onclick=", $messageRequest);
$messageRequest = str_replace("onerror=", "onclick=", $messageRequest);
$messageRequest = str_replace("^p^", "%", $messageRequest);
// $messageRequest = str_ireplace("[img]", "<img src='", $messageRequest);
// $messageRequest = str_replace("[/img]", "' title='image' />", $messageRequest);


// Thanks to @1tsAndrewA#9557 for maintaining and recovering the exploit patches.

$messageRequest = str_ireplace("<meta", "WARNING! THIS EXPLOIT HAS BEEN PATCHED!", $messageRequest);
$messageRequest = str_ireplace("document.location", "null", $messageRequest);
$messageRequest = str_ireplace("window.location", "null", $messageRequest);
$messageRequest = str_ireplace("<iframe", "<b>Please don't do that. It wastes bandwidth on webhost's servers!</b>", $messageRequest);

// Andrew was a pain in the ass though, he would use these exploits and I would have to chase after him and fix them

// Uhhhhhhhhh ignore this....

$messageRequest = str_ireplace("fuck", "<img src='censored.gif' alt='[censored]'>", $messageRequest);
$messageRequest = str_ireplace("meatspin", "google", $messageRequest);

$messageRequest = str_ireplace("googlener", "google", $messageRequest);
$messageRequest = str_ireplace("penis", "arm", $messageRequest);
$messageRequest = str_ireplace("shit", "<img src='censored.gif' alt='[censored]'>", $messageRequest);
$messageRequest = str_ireplace("nigger", "<img src='censored.gif' alt='[censored]'>", $messageRequest);
$messageRequest = str_ireplace("slut", "<img src='censored.gif' alt='[censored]'>", $messageRequest);
$messageRequest = str_ireplace("whore", "<img src='censored.gif' alt='[censored]'>", $messageRequest);
$messageRequest = str_ireplace("porn", "<img src='censored.gif' alt='[censored]'>", $messageRequest);
$messageRequest = str_ireplace("wanker", "<img src='censored.gif' alt='[censored]'>", $messageRequest);
$messageRequest = str_ireplace("nigga", "<img src='censored.gif' alt='[censored]'>", $messageRequest);
$messageRequest = str_ireplace("cunt", "<img src='censored.gif' alt='[censored]'>", $messageRequest);
$messageRequest = str_ireplace("dick", "<img src='censored.gif' alt='[censored]'>", $messageRequest);
$messageRequest = str_ireplace(":kitty:", "<img src='sasuke_upclose.jpg' width='16' height='16' alt='[censored]'>", $messageRequest);
$messageRequest = str_ireplace("fortnite is good", "fortnite is the WORST GAME YOU CAN EVER PLAY EVER", $messageRequest);
// Need a replacer, and I don't know how.




// Use the registering thingy
// COOKIES
$nick = $_COOKIE["nickname"];
$formatted = $_COOKIE["before"] . " <b><u>" . str_ireplace("!end!</font>", ":</font>", $_COOKIE["nickname"]) . "</u></b> ";



$cmsgPut = "";

$completeMSG = $formatted . $messageRequest . "<br>\x0D\x0A";

// Make it to where you can combine first line.
// I guess I just can't see the lines in plain ol' notepad. Oh well...
$cmsgPut = $completeMSG;

// put this RIGHT here incase we need it for some reason. ANNND IT SCREWS THE CHAT UP. GREAT.

// put_file_contents("./getMsg.php", $completeMSG);

// Finally send the message while also deleting the last line! (The amount of lines started out with will always be maxed out)

if (strpos($a, 'are') !== false) {
    echo 'true';
}
if($messageRequest !== ""):
// cock blocker
if(strpos($messageRequest, 'asshole1881') !== false){

fwrite($demoin, "<b><u><i>@". $_COOKIE["nickname"] . " Wait, what?</i></u></b><br>\x0D\x0A");

// Delete last line

fwrite($demoin, implode('', $chatdemo));
echo "No message.";

} else {

fwrite($demoin, $completeMSG);

// Delete last line

fwrite($demoin, implode('', $chatdemo));

// And now we're done sending everything!

// Ok, also I'm done with these comments
echo $completeMSG;

}
else:


fwrite($demoin, "");

// Delete last line

fwrite($demoin, implode('', $chatdemo));
echo "No message.";

endif;
?>