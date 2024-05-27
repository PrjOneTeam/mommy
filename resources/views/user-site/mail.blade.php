<h2>[Mommy Me Station] Download</h2>

<p>Chào {{ $order->full_name }},</p>
<p>Cảm ơn đã sử dụng dịch vụ , click vào link để tải về</p>

<ul>
    @foreach($lists ?? [] as $item)
        <li>
            <p>{{$item['name']}} : <a href="{{route('download', ['slug' => $item['slug'], 'color' => $item['color']])}}">Tải về</a></p>
        </li>
    @endforeach
</ul>
