@extends('admin.layouts.app')

@section('content')
<div class="container">
    <h1>Add new workbook</h1>
    <form action="{{ route('workbooks.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label class="col-sm-2 control-label" for="name">Name</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" id="name" name="name" value="{{ old('name') }}">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label" for="description">Description <span>(option)</span></label>
            <div class="col-sm-10">
                <input class="form-control" type="text" id="description" name="description"
                    value="{{ old('name') }}">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label" for="color_pick">Color Pick <span>(option)</span></label>
            <input type="checkbox" id="color_pick" name="color_pick"
                {{ old('color_pick') ? 'checked' : null }}>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label" for="image_bw">Image BW <span>(option)</span></label>
            <div class="col-sm-10">
                <input class="form-control" type="file" id="image_bw" name="image_bw">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label" for="image_color">Image Color <span>(option)</span></label>
            <div class="col-sm-10">
                <input class="form-control" type="file" id="image_color" name="image_color">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label" for="image_both">Image Both <span>(option)</span></label>
            <div class="col-sm-10">
                <input class="form-control" type="file" id="image_both" name="image_both">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label" for="status">Status</label>
            <input type="checkbox" id="status" name="status"
                {{ old('status') ? 'checked' : null }} />
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label" for="files_bw">Files BW <span>(option)</span></label>
            <div class="col-sm-10">
                <input class="form-control" type="file" id="files_bw" name="files_bw">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label" for="files_color">Files Color <span>(option)</span></label>
            <div class="col-sm-10">
                <input class="form-control" type="file" id="files_color" name="files_color">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label" for="file_both">File Both <span>(option)</span></label>
            <div class="col-sm-10">
                <input class="form-control" type="file" id="file_both" name="file_both">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label" for="size">Size <span>(option)</span></label>
            <div class="col-sm-10">
                <input class="form-control" type="text" id="size" name="size" value="{{ old('size') }}">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label" for="price">Price <span>(option)</span></label>
            <div class="col-sm-10">
                <input class="form-control" type="number" id="price" name="price" value="{{ old('price') }}">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label" for="price_both">Price Both <span>(option)</span></label>
            <div class="col-sm-10">
                <input class="form-control" type="number" id="price_both" name="price_both"
                    value="{{ old('price_both') }}">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label" for="sale_price">Sale Price <span>(option)</span></label>
            <div class="col-sm-10">
                <input class="form-control" type="number" id="sale_price" name="sale_price"
                    value="{{ old('sale_price') }}">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label" for="sale_price_both">Sale Price Both
                <span>(option)</span></label>
            <div class="col-sm-10">
                <input class="form-control" type="number" id="sale_price_both" name="sale_price_both"
                    value="{{ old('sale_price_both') }}">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label" for="grade">Grade <span>(option)</span></label>
            <div class="col-sm-10">
                <select type="text" id="grade" name="grade" class="form-control">
                    <option value="preschool" {{ old('grade') == 'preschool' ? 'selected' : null }}>Preschool</option>
                    <option value="kindergarten" {{ old('grade') == 'kindergarten' ? 'selected' : null }}>Kindergarten
                    </option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label" for="topic">Topic <span>(option)</span></label>
            <div class="col-sm-10">
                <select id="topic" name="topic[]" multiple class="form-control">
                    @foreach($topics as $key => $topic)
                    <option value="{{ $key }}" {{ in_array($key, old('topic') ?? []) ? 'selected' : null }}>{{ $topic }}
                    </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

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
</div>
@endsection
