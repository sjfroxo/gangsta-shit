@foreach($items as $item)
    <div style="margin: 50px;" class="items-item">
        ID: {{ $item->id }}<br/>
        Название: {{ $item->title }}<br/>
        Slug: {{ $item->slug }}<br/>
        Дата создания: {{ $item->created_at }}<br/>
        Дата изменения: {{ $item->updated_at }}<br/>
        <div style="display: flex;">
            <a href="{{ route('item.edit', $item->slug) }}">Изменить</a>
            <form action="{{ route('item.destroy', $item->slug) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Удалить</button>
            </form>
        </div>
    </div>
@endforeach
