<?php


GET /auth?code=qr6h3thvbvag2ffq&scopes=store_v2_orders&context=stores/g5cd38 HTTP/1.1
Host: app.example.com





POST /oauth2/token HTTP/1.1
Host: login.bigcommerce.com
Content-Type: application/x-www-form-urlencoded
Content-Length: 186

client_id=236754&client_secret=m1ng83993rsq3yxg&code=qr6h3thvbvag2ffq&scope=store_v2_orders&grant_type=authorization_code&redirect_url=https://app.example.com/oauth&context=stores/g5cd38