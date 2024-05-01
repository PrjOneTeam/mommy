@extends('admin.layouts.app')

@section('content')
<div class="container">
    <h1>{{ isset($pdf) ? __('Update Pdf') : __('Add new Pdf') }}</h1>
    <form action="{{ route('admin.pdf.store') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
        @csrf
        @if(isset($pdf))
        <input type="hidden" name="id" value="{{ $pdf->id }}" />
        @endif
        <div class="form-group">
            <label class="col-sm-2 control-label" for="name">{{ __('Name') }}</label><br>
            <div class="col-sm-10">
                <input class="form-control" type="text" id="name" name="name" value="{{ old('name', $pdf->name ?? null) }}" /><br>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label" for="description">{{ __('Description') }} <span>({{ __('option') }})</span></label><br>
            <div class="col-sm-10">
                <textarea class="form-control" type="text" id="description"
                    name="description">{{ old('description', $pdf->description ?? null) }}</textarea><br>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label" for="grade">{{ __('Grade') }} <span>({{ __('option') }})</span></label><br>
            <div class="col-sm-10">
                <select type="text" id="grade" name="grade" class="form-control">
                    <option value="preschool" {{ old('grade') == 'preschool' ? 'selected' : (old('grade') == null && isset($pdf) && $pdf->grade == 'preschool' ? 'selected' : null) }}>{{ __('Preschool') }}</option>
                    <option value="kindergarten" {{ old('grade') == 'kindergarten' ? 'selected' : (old('grade') == null && isset($pdf) && $pdf->grade == 'kindergarten' ? 'selected' : null) }}>{{ __('Kindergarten') }}
                    </option>
                </select><br>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label" for="topic">{{ __('Topic') }} <span>({{ __('option') }})</span></label><br>
            <div class="col-sm-10">
                <select id="topic" name="topic[]" multiple class="form-control">
                    @foreach($topics as $key => $topic)
                    <option value="{{ $key }}" {{ in_array($key, old('topic') ?? []) ? 'selected' : (old('topic') == null && in_array($key, $pdf->topic ?? []) ? 'selected' : null) }}>{{ $topic }}
                    </option>
                    @endforeach
                </select><br>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label" for="image_bw">{{ __('Image BW') }}</label><br>
            <div class="col-sm-10">
                <input class="form-control" type="file" id="image_bw" name="image_bw" /><br>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label" for="image_color">{{ __('Image Color') }} <span>({{__('option')}})</span></label><br>
            <div class="col-sm-10">
                <input class="form-control" type="file" id="image_color" name="image_color" /><br>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label" for="status">{{ __('Status') }}</label><br>
            <div class="col-sm-10">
                <input type="checkbox" id="status" name="status" {{ old('status') ? 'checked' : (old('status') == null && isset($pdf) && $pdf->status ? 'checked' : null) }} /><br>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label" for="files_bw">{{__("Files BW")}}</label><br>
            <div class="col-sm-10">
                <input class="form-control" type="file" id="files_bw" name="files_bw" /><br>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label" for="files_color">{{__("Files Color")}} <span>({{__('option')}})</span></label><br>
            <div class="col-sm-10">
                <input class="form-control" type="file" id="files_color" name="files_color" /><br>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label" for="price">{{__("Price")}}</label><br>
            <div class="col-sm-10">
                <input class="form-control" type="number" id="price" name="price" value="{{ old('price', $pdf->price ?? null) }}" /><br>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label" for="sale_price">{{__("Sale Price")}} <span>({{__("option")}})</span></label><br>
            <div class="col-sm-10">
                <input class="form-control" type="number" id="sale_price" name="sale_price"
                    value="{{ old('sale_price', $pdf->sale_price ?? null) }}" /><br>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label" for="related_workbook">{{__("Related Workbook")}}</label><br>
            <div class="col-sm-10">
                <select id="related_workbook" name="related_workbook[]" multiple class="form-control">
                    @foreach($relatedWorkbooks as $workbookId => $workbook)
                    <option value="{{ $workbookId }}"
                        {{ in_array($workbookId, old('related_workbook') ?? []) ? 'selected' : (old('related_workbook') == null && in_array($workbookId, $pdf->related_workbook ?? []) ? 'selected' : null) }}>{{ $workbook }}
                    </option>
                    @endforeach
                </select><br>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
            </div>
        </div>
    </form>
</div>
@endsection
