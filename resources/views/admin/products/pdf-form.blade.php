@extends('admin.layouts.app')

@section('content')
<div class="container">
    <h1>Add new Pdf</h1>
    <form action="{{ route('pdfs.store') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
        @csrf
        @if(isset($pdf))
        <input type="hidden" name="id" value="{{ $pdf->id }}" />
        @endif
        <div class="form-group">
            <label class="col-sm-2 control-label" for="name">Name</label><br>
            <div class="col-sm-10">
                <input class="form-control" type="text" id="name" name="name" value="{{ old('name') ?? $pdf->name ?? null }}" /><br>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label" for="description">Description <span>(option)</span></label><br>
            <div class="col-sm-10">
                <textarea class="form-control" type="text" id="description"
                    name="description">{{ old('description') ?? $pdf->description ?? null }}</textarea><br>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label" for="grade">Grade <span>(option)</span></label><br>
            <div class="col-sm-10">
                <select type="text" id="grade" name="grade" class="form-control">
                    <option value="preschool" {{ old('grade') == 'preschool' ? 'selected' : (isset($pdf) && $pdf->grade == 'preschool' ? 'selected' : null) }}>Preschool</option>
                    <option value="kindergarten" {{ old('grade') == 'kindergarten' ? 'selected' : (isset($pdf) && $pdf->grade == 'kindergarten' ? 'selected' : null) }}>Kindergarten
                    </option>
                </select><br>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label" for="topic">Topic <span>(option)</span></label><br>
            <div class="col-sm-10">
                <select id="topic" name="topic[]" multiple class="form-control">
                    @foreach($topics as $key => $topic)
                    <option value="{{ $key }}" {{ in_array($key, old('topic') ?? []) ? 'selected' : (in_array($key, $pdf->topic ?? []) ? 'selected' : null) }}>{{ $topic }}
                    </option>
                    @endforeach
                </select><br>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label" for="image_bw">Image BW</label><br>
            <div class="col-sm-10">
                <input class="form-control" type="file" id="image_bw" name="image_bw" /><br>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label" for="image_color">Image Color <span>(option)</span></label><br>
            <div class="col-sm-10">
                <input class="form-control" type="file" id="image_color" name="image_color" /><br>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label" for="status">Status</label><br>
            <div class="col-sm-10">
                <input type="checkbox" id="status" name="status" {{ old('status') ? 'checked' : (isset($pdf) && $pdf->status ? 'checked' : null) }} /><br>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label" for="files_bw">Files BW</label><br>
            <div class="col-sm-10">
                <input class="form-control" type="file" id="files_bw" name="files_bw" /><br>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label" for="files_color">Files Color <span>(option)</span></label><br>
            <div class="col-sm-10">
                <input class="form-control" type="file" id="files_color" name="files_color" /><br>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label" for="price">Price</label><br>
            <div class="col-sm-10">
                <input class="form-control" type="number" id="price" name="price" value="{{ old('price') ?? $pdf->price ?? null }}" /><br>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label" for="sale_price">Sale Price <span>(option)</span></label><br>
            <div class="col-sm-10">
                <input class="form-control" type="number" id="sale_price" name="sale_price"
                    value="{{ old('sale_price') ?? $pdf->sale_price ?? null }}" /><br>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label" for="related_workbook">Related Workbook</label><br>
            <div class="col-sm-10">
                <select id="related_workbook" name="related_workbook[]" multiple class="form-control">
                    @foreach($relatedWorkbooks as $workbookId => $workbook)
                    <option value="{{ $workbookId }}"
                        {{ in_array($workbookId, old('related_workbook') ?? []) ? 'selected' : (in_array($workbookId, $pdf->related_workbook ?? []) ? 'selected' : null) }}>{{ $workbook }}
                    </option>
                    @endforeach
                </select><br>
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