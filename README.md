## アプリケーション名
GamingMarket

## DB構造

### users
|Column|Type|Options|Index|
|------|----|-------|-----|

#### Association
 - has_many :games

#### games
|Column|Type|Options|Index|
|------|----|-------|-----|
game_name|string  
price|integer  
genre|string  
user_id|integer  
game_item_id|integer  
#### Association
 - belongs_to :user

### carts
|Column|Type|Options|Index|
|------|----|-------|-----|
quantity|integer
user_id|integer
game_id|integer

#### Association
 - belongs_to :user
 - has_many :games

