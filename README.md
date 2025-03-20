# Web Entertainment Design - 模写コーディング

## プロジェクト概要

このプロジェクトは、[CodeJump様](https://www.codejump.com/) の模写コーディングです。
HTML/CSSの学習を目的として、デザインカンプを元にコーディングしました。

## スクリーンショット

![Image](https://github.com/user-attachments/assets/dae47b17-c8de-491b-8619-9210559caecc)

![Image](https://github.com/user-attachments/assets/cc41655d-111d-45cb-a8f1-10390f013383)

![Image](https://github.com/user-attachments/assets/347587b5-d946-4b05-a4fc-8e38bd111bc1)

<img src="https://github.com/user-attachments/assets/6a189f59-42e5-4fd0-a3cc-bb15fa8c6e7c" width="350px">

## 使用技術

- Laravel
- Blade (Laravelのテンプレートエンジン)
- CSS
- Docker

## インストール方法

1. **リポジトリをクローン**
    
    ```
    git clone <https://github.com/srgnair/Recipe-Diary.git>
    cp .env.example .env
    cd Recipe-Diary
    
    ```
    
2. 環境変数の設定 (.env のコピー)
    
    ```
    cp .env.example .env
    
    ```
    
3. コンテナ作成 & 起動
    
    ```
    docker compose up -d --build
    
    ```
    
4. 依存関係のインストール
    
    ```
    docker compose exec app composer install
    docker compose exec app php artisan key:generate
    
    ```
    
5. [http://localhost](http://localhost/) にアクセス

## ライセンス

このプロジェクトは学習目的のため、商用利用はご遠慮ください。
# TOTARRY
