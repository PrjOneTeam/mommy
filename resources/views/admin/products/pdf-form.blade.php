@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-10 col-lg-10">
            <a href="{{ route('admin.pdf.index') }}" class="text-muted mb-2 d-flex align-items-center" style="text-decoration:none">
                <i class="c-icon c-icon-sm cil-arrow-left"></i>
                <span class="ml-2">{{ __('Back') }}</span>
            </a>
            <h3 style="font-size:20px;text-transform:capitalize;font-weight:500;margin-bottom:30px;">
                {{ isset($pdf) ? __('Update Pdf') : __('Add new Pdf') }}
            </h3>
        </div>
        <div class="col-10 col-lg-10">
            <div class="card pt-3">
                <form action="{{ route('admin.pdf.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @if(isset($pdf))
                        <input type="hidden" name="id" value="{{ $pdf->id }}" />
                    @endif
                    <div class="form-group">
                        <div class="col-sm-12">
                            <fieldset class="d-flex">
                                <label class="description mr-2">{{__("Status")}}</label>
                                <label class="c-switch c-switch-sm c-switch-label c-switch-pill c-switch-opposite-success">
                                    <input name="status" value="1" {{ old('status', $workbook->color_pick ?? null) ? 'checked' : null }} class="c-switch-input" type="checkbox" checked>
                                    <span class="c-switch-slider" data-checked="✓" data-unchecked="✕"></span>
                                </label>
                            </fieldset>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-12 control-label" for="name">{{ __('Name') }}</label>
                        <div class="col-sm-12">
                            <input class="form-control" type="text" id="name" name="name" value="{{ old('name', $pdf->name ?? null) }}" />
                        </div>
                        @error('name')
                        <div class="col-sm-12">
                            <span class="text-danger">{{ $message }}</span>
                        </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label class="col-sm-12 control-label" for="description">{{ __('Description') }} <span class="text-muted font-weight-normal">({{ __("option") }})</span></label>
                        <div class="col-sm-12">
                <textarea class="form-control" type="text" id="description"
                          name="description">{{ old('description', $pdf->description ?? null) }}</textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-12 control-label" for="image_bw">{{ __('Image BW') }}</label>
                        <div class="col-sm-12">
                            <input class="form-control" type="file" id="image_bw" name="image_bw" />
                        </div>
                        @error('image_bw')
                        <div class="col-sm-12">
                            <span class="text-danger">{{ $message }}</span>
                        </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label class="col-sm-12 control-label" for="files_bw">{{__("Files BW")}}</label>
                        <div class="col-sm-12">
                            <input class="form-control" type="file" id="files_bw" name="files_bw" />
                        </div>
                        @error('files_bw')
                        <div class="col-sm-12">
                            <span class="text-danger">{{ $message }}</span>
                        </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label class="col-sm-12 control-label" for="image_color">{{ __('Image Color') }} <span class="text-muted font-weight-normal">({{ __("option") }})</span></label>
                        <div class="col-sm-12">
                            <input class="form-control" type="file" id="image_color" name="image_color" />
                        </div>
                        @error('image_color')
                        <div class="col-sm-12">
                            <span class="text-danger">{{ $message }}</span>
                        </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label class="col-sm-12 control-label" for="files_color">{{__("Files Color")}} <span class="text-muted font-weight-normal">({{ __("option") }})</span></label>
                        <div class="col-sm-12">
                            <input class="form-control" type="file" id="files_color" name="files_color" />
                        </div>
                        @error('files_color')
                        <div class="col-sm-12">
                            <span class="text-danger">{{ $message }}</span>
                        </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label class="col-sm-12 control-label" for="price">{{__("Price")}}</label>
                        <div class="col-sm-12">
                            <input class="form-control" type="number" id="price" name="price" value="{{ old('price', $pdf->price ?? null) }}" />
                        </div>
                        @error('price')
                        <div class="col-sm-12">
                            <span class="text-danger">{{ $message }}</span>
                        </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label class="col-sm-12 control-label" for="sale_price">{{__("Sale Price")}} <span class="text-muted font-weight-normal">({{ __("option") }})</span></label>
                        <div class="col-sm-12">
                            <input class="form-control" type="number" id="sale_price" name="sale_price"
                                   value="{{ old('sale_price', $pdf->sale_price ?? null) }}" />
                        </div>
                        @error('sale_price')
                        <div class="col-sm-12">
                            <span class="text-danger">{{ $message }}</span>
                        </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label class="col-sm-12 control-label" for="grade">{{ __('Grade') }} <span class="text-muted font-weight-normal">({{ __("option") }})</span></label>
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
                        <label class="col-sm-12 control-label" for="topic">{{ __('Topic') }} <span class="text-muted font-weight-normal">({{ __("option") }})</span></label>
                        <div class="col-sm-12">
                            <select id="topic" name="topic[]" multiple class="form-control select2-multiple">
                                @foreach($topics as $key => $topic)
                                    <option value="{{ $key }}" {{ in_array($key, old('topic') ?? []) ? 'selected' : (old('topic') == null && in_array($key, $pdf->topic ?? []) ? 'selected' : null) }}>{{ $topic }}
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
                        <label class="col-sm-12 control-label" for="related_workbook">{{__("Related Workbook")}} <span class="text-muted font-weight-normal">({{ __("option") }})</span></label>
                        <div class="col-sm-12">
                            <select id="related_workbook" name="related_workbook[]" multiple class="form-control select2-multiple">
                                @foreach($relatedWorkbooks as $workbookId => $workbook)
                                    <option value="{{ $workbookId }}"
                                        {{ in_array($workbookId, old('related_workbook') ?? []) ? 'selected' : (old('related_workbook') == null && in_array($workbookId, $pdf->related_workbook ?? []) ? 'selected' : null) }}>{{ $workbook }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        @error('related_workbook')
                        <div class="col-sm-12">
                            <span class="text-danger">{{ $message }}</span>
                        </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
