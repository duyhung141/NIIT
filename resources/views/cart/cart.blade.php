<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body class="mx-5">
{{dd($cart)}}
{{--<table class="table-auto w-full">--}}
{{--    <thead>--}}
{{--    <tr>--}}
{{--        <th>Sản phẩm</th>--}}
{{--        <th>Số lượng</th>--}}
{{--        <th>Giá</th>--}}
{{--        <th>Thành tiền</th>--}}
{{--        <th>Hành động</th>--}}
{{--    </tr>--}}
{{--    </thead>--}}
{{--    <tbody class="text-center">--}}

{{--    @foreach($cart as $item)--}}
{{--        <tr>--}}
{{--            <td>{{$item['product']->title}}</td>--}}
{{--            <td>--}}
{{--                <a class="no-underline text-red-700 font-bold" href="{{route('cart.changeQuantity',['id'=>$item['product']->id,'quantity'=>-1])}}">-</a>--}}
{{--                <input value="{{$item['quantity']}}" class="border text-center">--}}
{{--                <a class="no-underline text-red-700 font-bold" href="{{route('cart.changeQuantity',['id'=>$item['product']->id,'quantity'=>1])}}">+</a>--}}
{{--            </td>--}}
{{--            <td>{{$item['product']->price}}</td>--}}
{{--            <td>{{$item['product']->price*$item['quantity']}}</td>--}}
{{--            <td>--}}
{{--                <a href="{{route('cart.delete',['id'=>$item['product']->id])}}" onclick="return('Bạn có chắc muốn xóa sản phẩm này khỏi giỏ hàng không không')">Delete</a>--}}
{{--            </td>--}}
{{--        </tr>--}}
{{--    @endforeach--}}

{{--    </tbody>--}}


{{--</table>--}}
{{--<div class="text-end">--}}
{{--    <a class="text-red-700" href="{{route('cart.checkout')}}">Checkout</a>--}}
{{--</div>--}}
</body>
</html>
