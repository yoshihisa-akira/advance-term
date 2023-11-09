# advance-term

# アプリケーション名
飲食店予約サービス

##  作成した目的
模擬案件を通して実践に近い開発経験を積むため

## アプリケーションURL
localhost

##  機能一覧
会員登録、ログイン、ログアウト、飲食店一覧取得、実装済み

# 未実装
（ユーザー情報取得、ユーザー飲食店お気に入り一覧取得、ユーザー飲食店予約情報取得、飲食店詳細取得、飲食店お気に入り追加、飲食店お気に入り削除、
飲食店予約情報追加、飲食店予約情報削除、エリアで検索する、ジャンルで検索する、店名で検索する）


## 使用技術
laravel 8.83.27, php 7.4.9

## テーブル
usersテーブル						
カラム名	　型	　　　      PUNIQUE KEY		FOREIGN KEY
id	　　　　unsigned bigint	RIMARY KEY NOT NULL                   	
name	　　　string NOT NULL			                            	
email	　　　string NOT NULL		                            
password	　string NOT NULL			                            
created_at	timestamp				
updated_at	timestamp	
