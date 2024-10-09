{{--<section>--}}
{{--    <script>--}}
{{--        function toggleForm() {--}}
{{--            const form = document.getElementById('dynamicForm');--}}
{{--            form.style.display = form.style.display === 'none' ? 'block' : 'none';--}}
{{--        }--}}
{{--    </script>--}}
{{--    <style>--}}
{{--        #dynamicForm {--}}
{{--            display: none;--}}
{{--            margin-top: 20px;--}}
{{--            border: 1px solid #ccc;--}}
{{--            padding: 10px;--}}
{{--            border-radius: 5px;--}}
{{--        }--}}
{{--    </style>--}}
{{--    <section class="content">--}}
{{--        <div class="container-fluid">--}}
{{--            <div class="row">--}}
{{--                <div style="margin: 50px;" class="product-item">--}}
{{--                    ID: {{ $item->id }}<br/>--}}
{{--                    Название: {{ $item->title }}<br/>--}}
{{--                    Описание: {{ $item->description }}<br/>--}}
{{--                    Дата создания: {{ $item->created_at }}<br/>--}}
{{--                    Дата изменения: {{ $item->updated_at }}<br/>--}}
{{--                    <div style="display: flex;">--}}
{{--                        <button style='margin-right: 15%' type="submit" onclick="toggleForm()">Изменить</button>--}}
{{--                        <form action="{{ route('item.destroy', $item->$slug) }}" method="POST">--}}
{{--                            @csrf--}}
{{--                            @method('DELETE')--}}
{{--                            <button type="submit">Удалить</button>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div id="dynamicForm">--}}
{{--                    <h2>Изменить</h2>--}}
{{--                    <form action="{{ route('item.update', ['item' => $item->$slug]) }}" method="POST">--}}
{{--                        @csrf--}}
{{--                        @method('PUT')--}}
{{--                        <label for="title">Название категории:</label>--}}
{{--                        <input type="text" name="title" id="title" value="{{ old('title') }}" required><br/>--}}
{{--                        <label for="description">Описание категории:</label>--}}
{{--                        <textarea type="text" name="description" id="description" required></textarea><br/>--}}
{{--                        <button type="submit">Сохранить</button>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--</section>--}}

