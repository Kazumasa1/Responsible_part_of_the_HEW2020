# Responsible_part_of_the_HEW2020
アクアリウムECサイト（モデル作成機能）<br>
https://kazumasa1.github.io/Responsible_part_of_the_HEW2020/
## Overview
実際に購入を検討している熱帯魚や水草の3Dモデルを配置してイメージを確認することができます。

## Description
学内ハッカソンのHEW2020で、私が担当した3Dモデルを表示するページになります。<br>
デザインは他のメンバーが行い、主にcanvas内の挙動やThree.jsの部分になります。<br>
作品のリポジトリはこちら👇<br>
https://github.com/Kazumasa1/HEW2020

## DEMO

![myPart](https://user-images.githubusercontent.com/70145199/153984630-de5490ce-0009-4645-a72f-05bc8426c4e6.png)

## Requirement
PCのブラウザで動作
### 注意！！！！！！！！
ブラウザの設定でハードウェアアクセラレーションを使用しないと動作が激おもになります

![chrome](https://user-images.githubusercontent.com/70145199/153993731-57b2993e-f880-44b4-8911-ddac413b2df6.png)
## Usage
### モデルを追加する
#### 熱帯魚を配置する
- ”増やす”をクリックで水槽内にランダムに配置<br>
- ”減らす”をクリックで削除<br>

![addFish](https://user-images.githubusercontent.com/70145199/153986117-ac8bc7f6-e31c-4f28-baec-1937e2e6907c.png)
#### 水草・装飾品を配置する
- sectionの画像をクリックして選択した状態でcanvasの水槽の枠内をクリックで追加<br>
- 水草・装飾品を移動させたい場合はcanvas内の水草（緑の丸）・装飾品（青い四角）をドラッグ&ドロップで移動できます<br>
- 削除したい場合は配置した水草（緑の丸）・装飾品（青い四角）を水槽の枠内からドラッグ&ドロップで削除できます<br>
※canvas内の枠線は水槽を上から見たイメージになります<br>

<img src="https://user-images.githubusercontent.com/70145199/153986985-1c1dd64e-c844-484a-8e99-ba3fba51cd7d.png" height="200rem"> <img src="https://user-images.githubusercontent.com/70145199/153989012-f1a74746-c2a4-43cc-b8a0-298f7c2b385f.png" height="200rem">
#### 視点を移動する
- 周回軌道：左クリックでドラッグ<br>
- 水平移動：右クリックでドラッグ<br>
- 拡大・縮小：マウスホイール<br>
#### その他ボタンの説明
- 全て削除：配置されたモデルを全て削除します<br>
- ひとつ戻る：直前に配置したモデルを削除します<br>
- 視点を戻す：視点を初期位置に戻します<br>
- モデルを保存：作成した水槽の構成をCSVで出力します（今回はできません）


### Note
#### 開発期間
- 2020年12月〜2021年1月
#### 開発メンバー 8名
- マネージャー（リーダー）
- フロントデザイン（2人）
- フロントエンド（Three.js）
- バックエンド（3人）
- 3Dモデル制作

#### 3Dのページのみ、実際に確認できます👇
https://kazumasa1.github.io/Responsible_part_of_the_HEW2020/
