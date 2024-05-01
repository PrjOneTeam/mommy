@extends('admin.layouts.app')

@section('content')
<div class="container">
    <h1>{{ isset($workbook) ? __("Update workbook") : __("Add new workbook") }}</h1>
    <form action="{{ route('admin.workbook.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        @if(isset($workbook))
        <input type="hidden" name="id" value="{{ $workbook->id }}" />
        @endif
        <div class="form-group">
            <label class="col-sm-2 control-label" for="name">{{ __("Name") }}</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" id="name" name="name" value="{{ old('name', $workbook->name ?? null) }}">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label" for="description">{{ __("Description") }} <span>({{ __("option") }})</span></label>
            <div class="col-sm-10">
                <input class="form-control" type="text" id="description" name="description"
                    value="{{ old('description', $workbook->description ?? null) }}">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label" for="color_pick">{{__("Color Pick")}} <span>({{__("option")}})</span></label>
            <input type="checkbox" id="color_pick" name="color_pick"
                {{ old('color_pick', $workbook->color_pick ?? null) ? 'checked' : null }}>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label" for="image_bw">{{__("Image BW")}} <span>({{__("option")}})</span></label>
            <div class="col-sm-10">
                <input class="form-control" type="file" id="image_bw" name="image_bw">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label" for="image_color">{{__("Image Color")}} <span>({{__("option")}})</span></label>
            <div class="col-sm-10">
                <input class="form-control" type="file" id="image_color" name="image_color">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label" for="image_both">{{__("Image Both")}} <span>({{__("option")}})</span></label>
            <div class="col-sm-10">
                <input class="form-control" type="file" id="image_both" name="image_both">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label" for="status">{{__("Status")}}</label>
            <input type="checkbox" id="status" name="status"
                {{ old('status', $workbook->status ?? null) ? 'checked' : null }} />
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label" for="files_bw">{{__("Files BW")}} <span>({{__("option")}})</span></label>
            <div class="col-sm-10">
                <input class="form-control" type="file" id="files_bw" name="files_bw">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label" for="files_color">{{__("Files Color")}} <span>({{__("option")}})</span></label>
            <div class="col-sm-10">
                <input class="form-control" type="file" id="files_color" name="files_color">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label" for="file_both">{{__("File Both")}} <span>({{__("option")}})</span></label>
            <div class="col-sm-10">
                <input class="form-control" type="file" id="file_both" name="file_both">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label" for="size">{{__("Size")}} <span>({{__("option")}})</span></label>
            <div class="col-sm-10">
                <input class="form-control" type="text" id="size" name="size" value="{{ old('size', $workbook->size??null) }}">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label" for="price">{{__("Price")}} <span>({{__("option")}})</span></label>
            <div class="col-sm-10">
                <input class="form-control" type="number" id="price" name="price" value="{{ old('price', $workbook->price ?? null) }}">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label" for="price_both">{{__("Price Both")}} <span>({{__("option")}})</span></label>
            <div class="col-sm-10">
                <input class="form-control" type="number" id="price_both" name="price_both"
                    value="{{ old('price_both', $workbook->price_both ?? null) }}">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label" for="sale_price">{{__("Sale Price")}} <span>({{__("option")}})</span></label>
            <div class="col-sm-10">
                <input class="form-control" type="number" id="sale_price" name="sale_price"
                    value="{{ old('sale_price', $workbook->sale_price ?? null) }}">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label" for="sale_price_both">{{__("Sale Price Both")}} <span>({{__("option")}})</span></label>
            <div class="col-sm-10">
                <input class="form-control" type="number" id="sale_price_both" name="sale_price_both"
                    value="{{ old('sale_price_both', $workbook->sale_price_both ?? null) }}">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label" for="grade">{{__("Grade")}} <span>({{__("option")}})</span></label>
            <div class="col-sm-10">
                <select type="text" id="grade" name="grade" class="form-control">
                    <option value="preschool" {{ old('grade', $workbook->grade ?? null) == 'preschool' ? 'selected' : null }}>{{ __('Preschool') }}</option>
                    <option value="kindergarten" {{ old('grade', $workbook->grade ?? null) == 'kindergarten' ? 'selected' : null }}>{{ __('Kindergarten') }}</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label" for="topic">{{__("Topic")}} <span>({{__("option")}})</span></label>
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
                <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
            </div>
        </div>
    </form>
</div>
@endsection
