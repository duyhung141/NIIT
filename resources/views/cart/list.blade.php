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
<body>
    <div class="container mx-auto px-10">
        <div class="grid grid-cols-2">
            @foreach($list as $item)
                <div class="border- p-5" style="border:1px solid #000">
                    <h3>{{$item->title}}</h3>
                    <h3>{{$item->content}}</h3>
                    <h3>{{$item->price}}</h3>
                    <a class="text-red-700"
                       href="{{route('cart.add',['id'=>$item->id])}}">Add to cart</a>
                </div>
            @endforeach
        </div>
    </div>

</body>
</html>
