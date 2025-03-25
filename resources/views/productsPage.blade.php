<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos | TechId</title>
    <link rel="stylesheet" href="{{asset('css/produtos.css')}}">
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}" type="image/x-icon">
</head>
<body>
    <x-header-landing-section/>
    <h1>Nossos Produtos</h1>
    <P>Conheça nossos produtos e veja como podemos otimizar a experiência educacional.</P>
    <div>
        <x-product-section nome="Tags RFID" path="{{asset('img/tag.png')}}" valor="R$200,00" unidades="50 unidades"/>
        <x-product-section nome="Beacon RFID" path="{{asset('img/beacon.png')}}" valor="R$200,00" unidades="50 unidades"/>
        <x-product-section nome="Cartão RFID" path="{{asset('img/cartao.png')}}" valor="R$110,00" unidades="50 unidades"/>
        <x-product-section nome="Beacon RFID" path="{{asset('img/beacon.png')}}" valor="R$200,00" unidades="50 unidades"/>
        <x-product-section nome="Antena RFID" path="{{asset('img/antena.png')}}" valor="R$600,00" unidades="01 unidades"/>
        <x-product-section nome="Beacon RFID" path="{{asset('img/beacon.png')}}" valor="R$200,00" unidades="50 unidades"/>
        <x-product-section nome="Arduino leitor de RFID" path="{{asset('img/arduino.png')}}" valor="R$500,00" unidades="01 unidades"/>
    </div>
    <!-- Rodapé -->
    <x-footer-section/>
</body>
</html>
