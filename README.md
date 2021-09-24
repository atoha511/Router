# Использование:

## 1. Создаем объект и добавляем массив со страницами переадрессации 
```php
$router = new Router();
$router->route_list = [
    "/" => "../homepage.php",
    "/about" => "../about.php"
];
```

## 2. Переадресовываем

```php 
$router->start();
```




