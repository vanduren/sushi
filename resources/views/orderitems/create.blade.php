<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('orderitems.store') }}" method="POST">
        @csrf
        <select name="product_id">
            @foreach ($products as $product)
                <option value="{{ $product->id }}">{{ $product->name }}</option>
            @endforeach
        </select>
        <br>
        <input type="text" name="quantity">
        <br>
        <select name="order_id">
            <option value=""></option>
            @foreach ($orders as $order)
                <option value="{{ $order->id }}">{{ $order->id }}</option>
            @endforeach
        </select>
        <br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
