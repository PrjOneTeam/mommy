<form action="{{ route('workbooks.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <label for="name">Name</label><br>
    <input type="text" id="name" name="name" value="{{ old('name') }}"><br><br>

    <label for="description">Description <span>(option)</span></label><br>
    <input type="text" id="description" name="description" value="{{ old('name') }}"><br><br>

    <label for="color_pick">Color Pick <span>(option)</span></label><br>
    <input type="checkbox" id="color_pick" name="color_pick" {{ old('color_pick') ? 'checked' : null }}><br><br>

    <label for="image_bw">Image BW <span>(option)</span></label><br>
    <input type="file" id="image_bw" name="image_bw"><br><br>

    <label for="image_color">Image Color <span>(option)</span></label><br>
    <input type="file" id="image_color" name="image_color"><br><br>

    <label for="image_both">Image Both <span>(option)</span></label><br>
    <input type="file" id="image_both" name="image_both"><br><br>

    <label for="status">Status</label><br>
    <input type="checkbox" id="status" name="status" {{ old('status') ? 'checked' : null }} /><br><br>

    <label for="files_bw">Files BW <span>(option)</span></label><br>
    <input type="file" id="files_bw" name="files_bw"><br><br>

    <label for="files_color">Files Color <span>(option)</span></label><br>
    <input type="file" id="files_color" name="files_color"><br><br>

    <label for="file_both">File Both <span>(option)</span></label><br>
    <input type="file" id="file_both" name="file_both"><br><br>

    <label for="size">Size <span>(option)</span></label><br>
    <input type="text" id="size" name="size" value="{{ old('size') }}"><br><br>

    <label for="price">Price <span>(option)</span></label><br>
    <input type="number" id="price" name="price" value="{{ old('price') }}"><br><br>

    <label for="price_both">Price Both <span>(option)</span></label><br>
    <input type="number" id="price_both" name="price_both" value="{{ old('price_both') }}"><br><br>

    <label for="sale_price">Sale Price <span>(option)</span></label><br>
    <input type="number" id="sale_price" name="sale_price" value="{{ old('sale_price') }}"><br><br>

    <label for="sale_price_both">Sale Price Both <span>(option)</span></label><br>
    <input type="number" id="sale_price_both" name="sale_price_both" value="{{ old('sale_price_both') }}"><br><br>

    <label for="grade">Grade <span>(option)</span></label><br>
    <select type="text" id="grade" name="grade">
        <option value="preschool" {{ old('grade') == 'preschool' ? 'selected' : null }}>Preschool</option>
        <option value="kindergarten" {{ old('grade') == 'kindergarten' ? 'selected' : null }}>Kindergarten</option>
    </select><br><br>

    <label for="topic">Topic <span>(option)</span></label><br>
    <select id="topic" name="topic[]" multiple>
        @foreach($topics as $key => $topic)
            <option value="{{ $key }}" {{ in_array($key, old('topic') ?? []) ? 'selected' : null }}>{{ $topic }}</option>
        @endforeach
    </select><br><br>
    <input type="submit" value="Submit">

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</form>
