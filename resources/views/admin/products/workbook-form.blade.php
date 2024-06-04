@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10 col-lg-10">
                <a href="{{ route('admin.workbook.index') }}" class="text-muted mb-2 d-flex align-items-center" style="text-decoration:none">
                    <i class="c-icon c-icon-sm cil-arrow-left"></i>
                    <span class="ml-2">{{ __('Back') }}</span>
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
                            <div class="col-12">
                                <fieldset class="d-flex">
                                    <label class="description mr-2">{{__("Active")}}</label>
                                    <label class="c-switch c-switch-sm c-switch-label c-switch-pill c-switch-opposite-success">
                                        <input name="status" value="1" {{ old('status', $workbook->status ?? null) ? 'checked' : null }} class="c-switch-input" type="checkbox" checked>
                                        <span class="c-switch-slider" data-checked="✓" data-unchecked="✕"></span>
                                    </label>
                                </fieldset>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-12 control-label" for="name">{{ __("Name") }}</label>
                            <div class="col-sm-12">
                                <input class="form-control" type="text" id="name" name="name" value="{{ old('name', $workbook->name ?? null) }}">
                            </div>
                            @error('name')
                            <div class="col-sm-12">
                                <span class="text-danger">{{ $message }}</span>
                            </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label class="col-sm-12 control-label" for="description">{{ __("Description") }} <span class="text-muted font-weight-normal">({{ __("option") }})</span></label>
                            <div class="col-sm-12">
                                <input class="form-control" type="text" id="description" name="description"
                                       value="{{ old('description', $workbook->description ?? null) }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-12">
                                <fieldset class="d-flex">
                                    <label class="description mr-2">{{__("Color Pick")}} <span class="text-muted font-weight-normal">({{__("option")}})</span></label>
                                    <label class="c-switch c-switch-sm c-switch-label c-switch-pill c-switch-opposite-success">
                                        <input name="color_pick" value="1" {{ old('color_pick', $workbook->color_pick ?? null) ? 'checked' : null }} class="c-switch-input" type="checkbox" checked>
                                        <span class="c-switch-slider" data-checked="✓" data-unchecked="✕"></span>
                                    </label>
                                </fieldset>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-12 control-label" for="image_bw">{{__("Image BW")}} <span class="text-muted font-weight-normal">({{__("option")}})</span></label>
                            <div class="col-sm-12">
                                <input class="form-control" type="file" id="image_bw" name="image_bw">
                                <span style="opacity: 0.7">{{ old('image_bw',isset($workbook) && $workbook->image_bw ? basename($workbook->image_bw) : null) }}</span>

                            </div>
                            @error('image_bw')
                            <div class="col-sm-12">
                                <span class="text-danger">{{ $message }}</span>
                            </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label class="col-sm-12 control-label" for="files_bw">{{__("Files BW")}} <span class="text-muted font-weight-normal">({{__("option")}})</span></label>
                            <div class="col-sm-12">
                                <input class="form-control" type="file" id="files_bw" name="files_bw">
                                <span style="opacity: 0.7">{{ old('files_bw',isset($workbook) && $workbook->files_bw ? basename($workbook->files_bw) : null) }}</span>

                            </div>
                            @error('files_bw')
                            <div class="col-sm-12">
                                <span class="text-danger">{{ $message }}</span>
                            </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label class="col-sm-12 control-label" for="image_color">{{__("Image Color")}} <span class="text-muted font-weight-normal">({{__("option")}})</span></label>
                            <div class="col-sm-12">
                                <input class="form-control" type="file" id="image_color" name="image_color">
                                <span style="opacity: 0.7">{{ old('image_color',isset($workbook) && $workbook->image_color ? basename($workbook->image_color) : null) }}</span>
                            </div>
                            @error('image_color')
                            <div class="col-sm-12">
                                <span class="text-danger">{{ $message }}</span>
                            </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label class="col-sm-12 control-label" for="files_color">{{__("Files Color")}} <span class="text-muted font-weight-normal">({{__("option")}})</span></label>
                            <div class="col-sm-12">
                                <input class="form-control" type="file" id="files_color" name="files_color">
                                <span style="opacity: 0.7">{{ old('files_color',isset($workbook) && $workbook->files_color ? basename($workbook->files_color) : null) }}</span>
                            </div>
                            @error('files_color')
                            <div class="col-sm-12">
                                <span class="text-danger">{{ $message }}</span>
                            </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label class="col-sm-12 control-label" for="image_both">{{__("Image Both")}} <span class="text-muted font-weight-normal">({{__("option")}})</span></label>
                            <div class="col-sm-12">
                                <input class="form-control" type="file" id="image_both" name="image_both">
                                <span style="opacity: 0.7">{{ old('image_both',isset($workbook) && $workbook->image_both ? basename($workbook->image_both) : null) }}</span>
                            </div>
                            @error('image_both')
                            <div class="col-sm-12">
                                <span class="text-danger">{{ $message }}</span>
                            </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label class="col-sm-12 control-label" for="file_both">{{__("File Both")}} <span class="text-muted font-weight-normal">({{__("option")}})</span></label>
                            <div class="col-sm-12">
                                <input class="form-control" type="file" id="file_both" name="file_both">
                                <span style="opacity: 0.7">{{ old('file_both',isset($workbook) && $workbook->file_both ? basename($workbook->file_both) : null) }}</span>
                            </div>
                            @error('file_both')
                            <div class="col-sm-12">
                                <span class="text-danger">{{ $message }}</span>
                            </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label class="col-sm-12 control-label" for="size">{{__("Size")}} <span class="text-muted font-weight-normal">({{__("option")}})</span></label>
                            <div class="col-sm-12">
                                <input class="form-control" type="text" id="size" name="size" value="{{ old('size', $workbook->size??null) }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="price">{{__("Price")}} <span class="text-muted font-weight-normal">({{__("option")}})</span></label>
                            <div class="col-sm-2">
                                <input class="form-control" id="price" type="number" step="1000" name="price" value="{{ old('price', $workbook->price ?? null) }}">
                            </div>
                            @error('price')
                            <div class="col-sm-2">
                                <span class="text-danger">{{ $message }}</span>
                            </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="price_both">{{__("Price Both")}} <span class="text-muted font-weight-normal">({{__("option")}})</span></label>
                            <div class="col-sm-2">
                                <input class="form-control" type="number" step="1000" id="price_both" name="price_both"
                                       value="{{ old('price_both', $workbook->price_both ?? null) }}">
                            </div>
                            @error('price_both')
                            <div class="col-sm-2">
                                <span class="text-danger">{{ $message }}</span>
                            </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="sale_price">{{__("Sale Price")}} <span class="text-muted font-weight-normal">({{__("option")}})</span></label>
                            <div class="col-sm-2">
                                <input class="form-control" type="number" step="1000" id="sale_price" name="sale_price"
                                       value="{{ old('sale_price', $workbook->sale_price ?? null) }}">
                            </div>
                            @error('sale_price')
                            <div class="col-sm-2">
                                <span class="text-danger">{{ $message }}</span>
                            </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="sale_price_both">{{__("Sale Price Both")}} <span class="text-muted font-weight-normal">({{__("option")}})</span></label>
                            <div class="col-sm-2">
                                <input class="form-control" type="number" step="1000" id="sale_price_both" name="sale_price_both"
                                       value="{{ old('sale_price_both', $workbook->sale_price_both ?? null) }}">
                            </div>
                            @error('sale_price_both')
                            <div class="col-sm-2">
                                <span class="text-danger">{{ $message }}</span>
                            </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label class="col-sm-12 control-label" for="grade">{{__("Age")}} <span class="text-muted font-weight-normal">({{__("option")}})</span></label>
                            <div class="col-sm-12">
                                <select type="text" id="grade" name="grade" class="form-control">
                                    <option value="primaryschool" {{ old('grade', $workbook->grade ?? null) == 'primaryschool' ? 'selected' : null }}>Primany school</option>
                                    <option value="5yearold" {{ old('grade', $workbook->grade ?? null) == '5yearold' ? 'selected' : null }}>5 year old class</option>
                                    <option value="4yearold" {{ old('grade', $workbook->grade ?? null) == '4yearold' ? 'selected' : null }}>4 year old class</option>
                                    <option value="3yearold" {{ old('grade', $workbook->grade ?? null) == '3yearold' ? 'selected' : null }}>3 year old class</option>
                                    <option value="2yearold" {{ old('grade', $workbook->grade ?? null) == '2yearold' ? 'selected' : null }}>2 year old class</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-12 control-label" for="topic">{{__("Topic")}} <span class="text-muted font-weight-normal">({{__("option")}})</span></label>
                            <div class="col-sm-12">
                                <select id="topic" name="topic[]" multiple class="form-control select2-multiple">
                                    @foreach($topics as $key => $topic)
                                        <option value="{{ $key }}" {{ in_array($key, old('topic') ?? []) ? 'selected' : (old('topic') == null && in_array($key, $workbook->topic ?? []) ? 'selected' : null) }}>{{ $topic }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            @error('topic')
                            <div class="col-sm-12">
                                <span class="text-danger">{{ $message }}</span>
                            </div>
                            @endif
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
