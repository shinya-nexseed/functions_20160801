<?php
    // 定数とデバッグモード
      // 定数とは、変数の逆で一度定義したらそれ以降値を書き換えることができない箱
      // ページごとやアプリケーション自体の設定項目などに使用
      // define('定数名', 値);
    define('DEBUG', TRUE); // TRUE : デバッグモード

    // echoとvar_dumpの独自関数化

    // デバッグ中や開発中にechoやvar_dumpを使用して、
    // 変数や配列の中身をブラウザ上に表示して結果を確認したい時があります。
      // 改行処理を含まないので、表示が見にくい
      // 実際にリリースする際には不要な記述をすべてコメントアウトする必要がある
      // 再度開発する際、コメントアウトをまた外す必要がある

    // org_echo()関数を定義
    function org_echo($value, $var_name) {
        if (DEBUG == TRUE) {
            echo $var_name . ' = ' . $value;
            echo '<br>';
        }
    }

    // org_var_dump()関数を定義
    function org_var_dump($value) {
        if (DEBUG) { // DEBUGがTRUEのとき
            echo '<pre>';
            var_dump($value);
            echo '</pre>';
        }
    }

    $members = array('Tomoharu Nakagaki', 'Sanshiro Inamasu', 'Ko Kawasaki', 'Shinya Hirai');
    // var_dump($members);
    // org_var_dump($members);

    $num1 = 10;
    $num2 = 21;
    $num3 = 23;

    // org_echo($num1, 'num1');
    // org_echo($num2, 'num2');
    // org_echo($num3, 'num3');

?>
