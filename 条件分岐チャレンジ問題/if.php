<?php
$name = "taro";
$pass = "";

if ($name == "taro" && $pass == "pass") {
    echo "ログイン成功です";
} elseif ($name == "taro") {
    echo "パスワードが間違っています。";
} elseif ($pass == "pass") {
    echo "名前が間違っています。";
} else {
    echo "入力情報が間違っています";
}
echo "<br>";
echo "<br>";
echo "<br>";
?> 

<?php
$name = "taro";
$pass = "";

if ($name == "taro" && $pass == "pass") {
    echo "ログイン成功です";
//ご指摘により修正
} elseif ($name == "taro" && !$pass == "pass") {
    echo "パスワードが間違っています。";
//ご指摘により修正
} elseif (!$name == "taro" && $pass == "pass")  {
    echo "名前が間違っています。";
} else {
    echo "入力情報が間違っています";
}
?> 