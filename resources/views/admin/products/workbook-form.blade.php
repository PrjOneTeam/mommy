@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-10 col-lg-10">
            <a href="{{ route('admin.workbook.index') }}" class="text-muted mb-2 d-flex align-items-center" style="text-decoration:none">
                <i class="c-icon c-icon-sm cil-arrow-left"></i>
                <span class="ml-2">Trở về</span>
            </a>
            <h3 style="font-size:20px;text-transform:capitalize;font-weight:500;margin-bottom:30px;">
                {{ isset($workbook) ? __("Update workbook") : __("Add new workbook") }}
            </h3>
        </div>
        <div class="col-10 col-lg-10">
            <div class="card pt-3">
                <form action="{{ route('admin.workbook.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @if(isset($workbook))
                    <input type="hidden" name="id" value="{{ $workbook->id }}" />
                    @endif
                    <div class="form-group">
                        <label class="col-sm-12 control-label" for="name">{{ __("Name") }}</label>
                        <div class="col-sm-12">
                            <input class="form-control" type="text" id="name" name="name" value="{{ old('name', $workbook->name ?? null) }}">
                        </div>
                    </div>
            
                    <div class="form-group">
                        <label class="col-sm-12 control-label" for="description">{{ __("Description") }} <span>({{ __("option") }})</span></label>
                        <div class="col-sm-12">
                            <input class="form-control" type="text" id="description" name="description"
                                value="{{ old('description', $workbook->description ?? null) }}">
                        </div>
                    </div>
            
                    <div class="form-group">
                        <div class="col-12">
                            <fieldset class="d-flex">
                                <label class="description mr-2">{{__("Color Pick")}} <span>({{__("option")}})</span></label>
                                <label class="c-switch c-switch-sm c-switch-label c-switch-pill c-switch-opposite-success">
                                    <input name="color_pick" value="1" {{ old('color_pick', $workbook->color_pick ?? null) ? 'checked' : null }} class="c-switch-input" type="checkbox" checked>
                                    <span class="c-switch-slider" data-checked="✓" data-unchecked="✕"></span>
                                </label>
                            </fieldset>
                        </div>
                    </div>
            
                    <div class="form-group">
                        <label class="col-sm-12 control-label" for="image_bw">{{__("Image BW")}} <span>({{__("option")}})</span></label>
                        <div class="col-sm-12">
                            <input class="form-control" type="file" id="image_bw" name="image_bw">
                        </div>
                    </div>
            
                    <div class="form-group">
                        <label class="col-sm-12 control-label" for="image_color">{{__("Image Color")}} <span>({{__("option")}})</span></label>
                        <div class="col-sm-12">
                            <input class="form-control" type="file" id="image_color" name="image_color">
                        </div>
                    </div>
            
                    <div class="form-group">
                        <label class="col-sm-12 control-label" for="image_both">{{__("Image Both")}} <span>({{__("option")}})</span></label>
                        <div class="col-sm-12">
                            <input class="form-control" type="file" id="image_both" name="image_both">
                        </div>
                    </div>
            
                    <div class="form-group">
                        <div class="col-12">
                            <fieldset class="d-flex">
                                <label class="description mr-2">{{__("Status")}}</label>
                                <label class="c-switch c-switch-sm c-switch-label c-switch-pill c-switch-opposite-success">
                                    <input name="status" value="1" {{ old('status', $workbook->status ?? null) ? 'checked' : null }} class="c-switch-input" type="checkbox" checked>
                                    <span class="c-switch-slider" data-checked="✓" data-unchecked="✕"></span>
                                </label>
                            </fieldset>
                        </div>
                    </div>
            
                    <div class="form-group">
                        <label class="col-sm-12 control-label" for="files_bw">{{__("Files BW")}} <span>({{__("option")}})</span></label>
                        <div class="col-sm-12">
                            <input class="form-control" type="file" id="files_bw" name="files_bw">
                        </div>
                    </div>
            
                    <div class="form-group">
                        <label class="col-sm-12 control-label" for="files_color">{{__("Files Color")}} <span>({{__("option")}})</span></label>
                        <div class="col-sm-12">
                            <input class="form-control" type="file" id="files_color" name="files_color">
                        </div>
                    </div>
            
                    <div class="form-group">
                        <label class="col-sm-12 control-label" for="file_both">{{__("File Both")}} <span>({{__("option")}})</span></label>
                        <div class="col-sm-12">
                            <input class="form-control" type="file" id="file_both" name="file_both">
                        </div>
                    </div>
            
                    <div class="form-group">
                        <label class="col-sm-12 control-label" for="size">{{__("Size")}} <span>({{__("option")}})</span></label>
                        <div class="col-sm-12">
                            <input class="form-control" type="text" id="size" name="size" value="{{ old('size', $workbook->size??null) }}">
                        </div>
                    </div>
            
                    <div class="form-group">
                        <label class="col-sm-12 control-label" for="price">{{__("Price")}} <span>({{__("option")}})</span></label>
                        <div class="col-sm-12">
                            <input class="form-control" type="number" id="price" name="price" value="{{ old('price', $workbook->price ?? null) }}">
                        </div>
                    </div>
            
                    <div class="form-group">
                        <label class="col-sm-12 control-label" for="price_both">{{__("Price Both")}} <span>({{__("option")}})</span></label>
                        <div class="col-sm-12">
                            <input class="form-control" type="number" id="price_both" name="price_both"
                                value="{{ old('price_both', $workbook->price_both ?? null) }}">
                        </div>
                    </div>
            
                    <div class="form-group">
                        <label class="col-sm-12 control-label" for="sale_price">{{__("Sale Price")}} <span>({{__("option")}})</span></label>
                        <div class="col-sm-12">
                            <input class="form-control" type="number" id="sale_price" name="sale_price"
                                value="{{ old('sale_price', $workbook->sale_price ?? null) }}">
                        </div>
                    </div>
            
                    <div class="form-group">
                        <label class="col-sm-12 control-label" for="sale_price_both">{{__("Sale Price Both")}} <span>({{__("option")}})</span></label>
                        <div class="col-sm-12">
                            <input class="form-control" type="number" id="sale_price_both" name="sale_price_both"
                                value="{{ old('sale_price_both', $workbook->sale_price_both ?? null) }}">
                        </div>
                    </div>
            
                    <div class="form-group">
                        <label class="col-sm-12 control-label" for="grade">{{__("Grade")}} <span>({{__("option")}})</span></label>
                        <div class="col-sm-12">
                            <select type="text" id="grade" name="grade" class="form-control">
                                <option value="preschool" {{ old('grade', $workbook->grade ?? null) == 'preschool' ? 'selected' : null }}>{{ __('Preschool') }}</option>
                                <option value="kindergarten" {{ old('grade', $workbook->grade ?? null) == 'kindergarten' ? 'selected' : null }}>{{ __('Kindergarten') }}</option>
                            </select>
                        </div>
                    </div>
            
                    <div class="form-group">
                        <label class="col-sm-12 control-label" for="topic">{{__("Topic")}} <span>({{__("option")}})</span></label>
                        <div class="col-sm-12">
                            <select id="topic" name="topic[]" multiple class="form-control select2-multiple">
                                @foreach($topics as $key => $topic)
                                <option value="{{ $key }}" {{ in_array($key, old('topic') ?? []) ? 'selected' : null }}>{{ $topic }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-12">
                            <button type="submit" class="btn btn-info">{{ __('Submit') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
