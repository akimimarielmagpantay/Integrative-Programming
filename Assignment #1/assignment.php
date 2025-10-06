if statement
<?php
$accountStatus = "active";
if ($accountStatus == "active") {
echo "You can access your account.";
}
?>
if else statement
<?php
$balance = 200;
if ($balance >= 100) {
echo "You have enough balance to make a purchase.";
} else {
echo "Sorry, your balance is not enough to make a purchase.";
}
?>
if elseif else statement
<?php
$accountType = "premium";
if ($accountType == "basic") {
echo "You have a basic account.";
} elseif ($accountType == "premium") {
echo "You have a premium account.";
} else {
echo "Unknown account type.";
}
?>
Switch statement
<?php
$accountType = "gold";
switch ($accountType) {
case "basic":
echo "[Basic account] you have limited features.";
break;
case "silver":
echo "[Silver account] you can access half premium features.";
break;
case "gold":
echo "[Gold account] you can access full premium features.";
break;
default:
echo "Account type not recognized.";
}
?>
