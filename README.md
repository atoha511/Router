# Использование:

## 1. Создаем объект Router
```php
$router = new Router();
```

## 2. Присваиваем страницу для 404 ошибки
```php
$router->error404 = "Страницы не существует";
```


## 3. добавляем массив со страницами переадрессации
```php
$router->route_list = [
    "/" => "../homepage.php",
    "/about" => "../about.php"
];
```

## 2. Переадресовываем на страницу из массива или на 404, если такой нет.

```php 
$router->start();
```




