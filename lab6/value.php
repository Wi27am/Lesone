
<?php

Class User {
    Private $name;

    Public function __construct($name) {
        $this->name = $name;
    }

    // طريقة لإرجاع قيمة الخاصية
    Public function getName() {
      returneturn $this->name;
    }
}

$user = new User("Ali");
Echo $user->getName(); // Ali


Class Rectangle {
    Private $width;
    Private $height;

    Public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    // طريقة لحساب مساحة المستطيل
    Public function getArea() {
        return $this->width * $this->height;
    }
}

$rectangle = new Rectangle(5, 10);
Echo $rectangle->getArea(); // 50




Class Math {
    Public static function getPi() {
        Return 3.14159;
    }
}

Echo Math::getPi(); // 3.14159



Class Calculator {
    Public function sum($a, $b) {
        return $a + $b;
    }
}

$calc = new Calculator();
Echo $calc->sum(10, 20); // 30



__get() 
Class MyClass {
    Private $data = [
        "name" => "Ali",
        "age" => 25
    ];

    Public function __get($property) {
        return $this->data[$property] ?? "Property does not exist.";
    }
}

$obj = new MyClass();
Echo $obj->name; // Ali
Echo $obj->height; // Property does not exist.



Class Constants {
    Const REETING = "Hello, World!";

    Public function getGreeting() {
        return self::GREETING;
    }
}

$obj = new Constants();
Echo $obj->getGreeting(); // Hello, World!


