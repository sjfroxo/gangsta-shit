@extends('layouts.main')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редактировать продукт</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Редактировать продукт</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <form action="{{ route('item.update', ['slug' => $item->slug])  }}" method="POST">
                @csrf
                @method('PATCH')
                <label for="title">Название категории:</label>
                <input type="text" name="title" id="title" required><br/>
                <label for="description">Описание категории:</label>
                <textarea type="text" name="description" id="description" required></textarea><br/>
                <button type="submit">Сохранить</button>
            </form>
        </div>
    </section>
@endsection
