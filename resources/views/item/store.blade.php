@foreach($products as $product)
    <div style="margin: 50px;" class="product-item">
        ID: {{ $product->id }}<br/>
        Название: {{ $product->title }}<br/>
        Описание: {{ $product->description }}<br/>
        Дата создания: {{ $product->created_at }}<br/>
        Дата изменения: {{ $product->updated_at }}<br/>
        <div style="display: flex;">
            <a href="{{ route('product.edit', $product->slug) }}">Изменить</a>
            <form action="{{ route('product.destroy', $product->slug) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Удалить</button>
            </form>
        </div>
    </div>
@endforeach
