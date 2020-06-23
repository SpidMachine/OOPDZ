<?php
error_reporting(E_ALL ^ E_DEPRECATED);

include 'autoload.php';

$b = new B();

echo $b
    ->setInnerText('Hello World')
    ->html();

echo "<br>";

$i = new I();

echo $i
    ->setInnerText('Hello World')
    ->html();

echo "<br>";

$u = new U();

echo $u
    ->setInnerText('Hello World')
    ->html();

echo "<br>";

$ul = new UL();

echo $ul
    ->setId('sp2')
    ->setInnerData([1, 2, 3])
    ->setType("circle")
    ->html();

echo "<br>";

$ol = new OL();

echo $ol
    ->setId('sp2')
    ->setInnerData(["a", "b", "c"])
    ->setType("asd")
    ->html();

echo "<br>";

// $form = new Form();

// echo $form
//     ->setAction("index2.php")
//     ->setMethod("POST")
//     ->html();

echo "<br>";

$select = new SELECT();

echo $select
    ->text([
        'Один', 'Два', 'Три'
    ])
    ->HTML();

echo "<br>";

$input = new Input();

echo $input
    ->setType('radio')
    ->HTML();


echo "<br>";

$input = new Input();

echo $input
    ->setValueType(['submit' => 'okey'])
    ->HTML();

echo "<br>";

$textarea = new TextArea();

echo $textarea
    ->setName('textarea')
    ->setId('123')
    ->setClass('class')
    ->setStyle('style')
    ->setColl(20)
    ->setRow(20)
    ->html();
echo "<br>";

echo $form
    ->setAction('1.php')
    ->setContent((new Input())->setName('num1')->setValue(12)->html())
    ->addContent((new Select())->setName('op')
        ->setInnerData([
            "mul" => "*",
            "div" => "/",
            "plus" => "+",
            "minus" => "-"
        ])
        ->html())
    ->addContent((new Input())->setName('num2')->setValue(12)->html())
    ->addContent((new Input())->setType('submit')->setValue('okey')->html())
    ->html();


echo "<br>";

$hr = new Hr();

echo $hr
    ->setColor('red')
    ->setSize(5)
    ->setWidth(500)
    ->html();


$br = new Br();

echo $br
    ->html();

$img = new Img();

echo $img
    ->setSrc('1.jpg')
    ->setHeight(200)
    ->setWidth(200)
    ->setAlt('image')
    ->setBorder(1)
    ->html();

echo $br->html();

$h = new H2();
echo $h->setLevel(1)
    ->setId('123')
    ->setClass('header')
    ->setStyle('qwerty')
    ->setInnerText('header')
    ->html();