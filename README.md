# x-cakephp-di-container 
- [PHPカンファレンス2020](https://phpcon.php.gr.jp/2020/)のセッション[「CakePHPで学ぶDIコンテナ」](https://fortee.jp/phpcon-2020/proposal/48c5bea5-2b1d-43bd-b8dd-50c4724cf787)で使用するサンプルコードです。

## 登壇資料
- [CakePHPで学ぶDIコンテナ](https://speakerdeck.com/itosho525/learn-a-di-container-through-cakephp)

## インストール方法

```sh
$ git clone git@github.com:itosho/x-cakephp-di-container.git
```

## 利用方法
- PHPのサンプルコードでCakePHPのサンプルコードに分かれています。

### PHPのサンプルコード

```sh
$ cd php-sample
$ composer install
# 適当なPHPファイルを実行してお試しください
# 例: $ php DiContainer.php
```

### CakePHPのサンプルコード

```sh
$ cd cakephp-sample
$ composer install
$ bin/cake server
# 動作確認用URL: http://localhost:8765/messages
```

## ライセンス
- [NYSL](http://www.kmonos.net/nysl/)
