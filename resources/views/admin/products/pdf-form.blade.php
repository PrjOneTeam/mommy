<form action="{{ route('pdfs.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <label for="name">Name</label><br>
    <input type="text" id="name" name="name" value="{{ old('name') }}" /><br>

    <label for="description">Description <span>(option)</span></label><br>
    <input type="text" id="description" name="description" value="{{ old('description') }}" /><br>

    <label for="grade">Grade <span>(option)</span></label><br>
    <select type="text" id="grade" name="grade">
        <option value="preschool" {{ old('grade') == 'preschool' ? 'selected' : null }}>Preschool</option>
        <option value="kindergarten" {{ old('grade') == 'kindergarten' ? 'selected' : null }}>Kindergarten</option>
    </select><br>

    <label for="topic">Topic <span>(option)</span></label><br>
    <select id="topic" name="topic[]" multiple>
        @foreach($topics as $key => $topic)
            <option value="{{ $key }}" {{ in_array($key, old('topic') ?? []) ? 'selected' : null }}>{{ $topic }}</option>
        @endforeach
    </select><br>

    <label for="image_bw">Image BW</label><br>
    <input type="file" id="image_bw" name="image_bw" /><br>

    <label for="image_color">Image Color <span>(option)</span></label><br>
    <input type="file" id="image_color" name="image_color" /><br>

    <label for="status">Status</label><br>
    <input type="checkbox" id="status" name="status" {{ old('status') ? 'checked' : null }} /><br>

    <label for="files_bw">Files BW</label><br>
    <input type="file" id="files_bw" name="files_bw" /><br>

    <label for="files_color">Files Color <span>(option)</span></label><br>
    <input type="file" id="files_color" name="files_color" /><br>

    <label for="price">Price</label><br>
    <input type="number" id="price" name="price" value="{{ old('price') }}" /><br>

    <label for="sale_price">Sale Price <span>(option)</span></label><br>
    <input type="number" id="sale_price" name="sale_price" value="{{ old('sale_price') }}" /><br>

    <label for="related_workbook">Related Workbook</label><br>
    <input type="text" id="related_workbook" name="related_workbook" value="{{ old('related_workbook') }}" /><br>
    <select id="related_workbook" name="related_workbook[]" multiple>
        @foreach($relatedWorkbooks as $workbookId => $workbook)
            <option value="{{ $workbookId }}" {{ in_array($workbookId, old('related_workbook') ?? []) ? 'selected' : null }}>{{ $workbook }}</option>
        @endforeach
    </select><br>

    <input type="submit" value="Submit" />

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
