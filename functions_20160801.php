<?php
    // 関数の書式
    // function 関数名(引数1, 引数2, ...) {
    //     実行される処理
    // }

    // キャメルケース
      // makeLink()
      // word1Word2Word3のように2単語目以降の単語の頭文字のみ大文字表記する
      // 記述方法をキャメルケースと言う
        // キャメル = ラクダ
    // スネークケース
      // make_link()
      // word1_word2_word3のように単語区切りで_を入れる
      // 記述方法をスネークケースと言う

    // 練習問題１
    function nexseed() {
        echo 'seedくん';
        echo '<br>';
    }

    // 練習問題２
    nexseed();
    nexseed();

    // 練習問題３
    function nexseed1($greeting) {
        // $greeting = 'おはようございます';
        echo $greeting . 'seedくん';
    }
    nexseed1('おはようございます');

    // 練習問題４
    function nexseed2($greeting, $name) {
        // 第一引数
          // $greeting = '値';
        // 第二引数
          // $name = '値';
        echo $greeting . $name . 'さん';
    }
    nexseed2('おはようございます', 'Sanshiro');
    nexseed2('こんちには', 'Ko');
    nexseed2('こんばんは', 'Tomo');

    // 練習問題５
    function nexseed3($greeting, $name) {
        return $greeting . $name . 'さん';
    }

    echo nexseed3('おはようございます', 'Ko');
    $greeting = nexseed3('こんばんは', 'Seed'); // 変数に格納
    echo $greeting;

    // 演習問題１
    function multiplication($d1, $d2) {
        return $d1 * $d2;
    }
    $mul = multiplication(5, 3);
    echo $mul;

    echo '<br>';

    // 演習問題２
    function average($a1, $a2) {
        $a3 = $a1 + $a2;
        $a3 = $a3 / 2;
        if ($a3 > 10) {
            return $a3;
        } else {
            return 0;
        }
    }

    echo average(100, 3);
    echo '<br>';

    // 演習問題３
    function shopping($shojikin, $nedan) {
        return $shojikin - $nedan;
    }
    $amari = shopping(100, 70);
    echo $amari;
    echo '<br>';

    // 演習問題４
    $num1 = 30;
    $num2 = 21;
    // $result = 0;

    function org_max($num1, $num2) {
        if ($num1 >= $num2) {
          return $num1;
        } else {
          return $num2;
        }
    }

    $max = org_max($num1, $num2);

    echo $max;

    // 講義で使ってきた組み込み関数
    // isset, empty, strlen, max, min, ceil

    // echo, exit, die, require, include等は厳密にいうと関数ではなくPHPの言語基盤というもの
    isset();
    empty();
    exit();
    die();
    require();
?>
