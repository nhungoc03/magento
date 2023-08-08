### Sau khi tải thành công. Thực hiện lần lượt các bước như sau:

B1: Tải xampp vì sẽ dùng apache của xampp. Giari nén source code, đặt trong thư mục xampp\htdocs\magento2

B2: Mở command prompt ở thư mục chứa source code, chạy lệnh "composer install"

B3: Sau đó tiếp tục chạy lệnh "docker-compose up. Tải docker nếu chưa có docker

B4: Mở xampp control panel, chọn config apache, mở file php.ini sau đó tìm và xóa dấu chấm phẩy ở đầu các dòng

```bash
    ;extension=gd 
    ;extension=intl 
    ;extension=soap 
    ;extension=xsl 
    ;extension=sockets 
    ;extension=sodium
```
Ngoài ra thay đổi các dòng:
```bash
    max_execution_time=3000 
    max_input_time=2000 
    memory_limit=4G
```
B5: Mở file xampp/apache/conf/extra/httpd-vhosts.conf thêm đoạn code sau
```xml
<VirtualHost *:80>
    DocumentRoot "C:/xampp/htdocs/magento2/pub"
    ServerName nhasachtiki.com
</VirtualHost>
<VirtualHost *:80>
    DocumentRoot "C:/xampp/htdocs"
    ServerName localhost
</VirtualHost>
```
B6: Mở file C:\Windows\System32\drivers\etc\hosts dưới với trò admin (Run as administrator) thêm dòng code sau 
    127.0.0.1 nhasachtiki.com

B7: Truy cập http://localhost:8080 tạo database mới với tên "magento2"

B8: Mở command prompt ở thư mục chứa source code, chạy lệnh sau 
```bash
php bin/magento setup:install --base-url="http://nhasachtiki.com" --db-host="localhost" --db-name="magento2" --db-user="root" --db-password="root" --admin-firstname="admin" --admin-lastname="admin" --admin-email="admin@magetop.com" --admin-user="admin" --admin-password="admin123" --language="en_US" --use-rewrites="1" --backend-frontname="admin" --search-engine=elasticsearch7 --elasticsearch-host="localhost" --elasticsearch-port=9200 
```

B9. Chạy các lệnh sau:
```bash
php bin/magento setup:upgrade
php bin/magento setup:static-content:deploy -f
php bin/magento cache:flush
```

Cuối cùng hãy chạy thử trang web "nhasachtiki.com".
