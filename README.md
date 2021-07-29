# Ar Tarım Akademi 

#### Açıklama
Ana sayfada bulunan "Yaklaşan etkinlikler" ve "Açık Pozisyonlar" bölümleri için CMS modüllerinin geliştirilmesi, bu modüller için kullanıcı arayüzü üzerinden içerik girilebilmesi, içeriklerin ilgili kısımlarının ana sayfada, diğer kısımlarının alt sayfalarda yer alması bekleniyor. Yaklaşan etkinlikler bölümünde eklenen her etkinliğin kullanıcı tarafından takvime eklenebilmesi gerekiyor. Açık Pozisyonlar bölümünde ise girilen iş ilanlarının yayından kaldırılabilme özelliği olmalı.

#### Kurulum
Composer install :

```sh
composer instal
```
Hata alınması durumunda bu seçenekler kullanılabilir :
```sh
composer update

composer install --ignore-platform-reqs
```
Tabloların oluşması için :

```sh
php artisan migrate
```
Datalının oluşması için :

```sh
php artisan db:seed --class=UsereSeeder

php artisan db:seed --class=ModuleSeeder

php artisan db:seed --class=EventSeeder

php artisan db:seed --class=OpenPositionSeeder
```

Oluşturulan dataların viewda gösterilmesi için :

```sh
php artisan key:generate

php artisan serve
```

Giriş bilgileri :

```sh
email : kaya.fatma.kaya@hotmail.com

password : psw123.
```



#### Ekran Görüntüleri
Login :

![alt text](https://raw.githubusercontent.com/FatmaKaya/artarim-akademi/main/public/images/login.PNG)

Home :

![alt text](https://raw.githubusercontent.com/FatmaKaya/artarim-akademi/main/public/images/home.PNG)

Module : 

![alt text](https://raw.githubusercontent.com/FatmaKaya/artarim-akademi/main/public/images/module.PNG)



