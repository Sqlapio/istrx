<div class="carousel carousel-center max-w-md p-2 space-x-2 bg-grey-300 rounded-box">
    @foreach ($array as $item)
    <div class="carousel-item">
        <img src="{{ asset('/storage/'.$item->image) }}" class="rounded-box w-[300px] h-[400px]" />
    </div>
    @endforeach
</div>
