@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10 col-lg-10">
                <a href="{{ route('admin.article.index') }}" class="text-muted mb-2 d-flex align-items-center" style="text-decoration:none">
                    <i class="c-icon c-icon-sm cil-arrow-left"></i>
                    <span class="ml-2">{{ __('Back') }}</span>
                </a>
                <h3 style="font-size:20px;text-transform:capitalize;font-weight:500;margin-bottom:30px;">
                    {{ isset($article) ? __('Update Articles') : __('Add new Articles') }}
                </h3>
            </div>
            <div class="col-10 col-lg-10">
                <div class="card pt-3">
                    <form action="{{ route('admin.article.store') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                        @csrf
                        @if(isset($article->id))
                            <input type="hidden" name="id" value="{{ $article->id }}">
                        @endif
                        <div class="form-group">
                            <label for="title" class="col-sm-12 control-label">{{ __('Title') }}</label>
                            <div class="col-sm-12">
                                <input type="text" id="title" name="title" required value="{{ old('title', $article->title ?? null) }}" class="form-control">
                            </div>
                            @error('title')
                            <div class="col-sm-12">
                                <span class="text-danger">{{ $message }}</span>
                            </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="content" class="col-sm-12 control-label">{{ __('Content') }}</label>
                            <div class="col-sm-12">
                                <textarea id="content" name="content" class="tinymce_content">{{ old('content', $article->content ?? null) }}</textarea>
                            </div>
                            @error('content')
                            <div class="col-sm-12">
                                <span class="text-danger">{{ $message }}</span>
                            </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="pictures" class="col-sm-12 control-label">{{ __('Pictures') }}</label>
                            <div class="col-sm-12">
                                <input type="file" id="pictures" name="pictures" class="form-control" onchange="previewFile(this);"
                                       style="display: none">
                                <img id="preview" onclick="$('#pictures').click()"
                                     src="{{ isset($article->pictures) ? asset($article->pictures) : asset('admin/assets/images/default_image.jpg') }}" alt="Image preview"
                                     style="max-width: 200px; max-height: 200px; cursor: pointer">
                            </div>
                            @error('pictures')
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

@section('javascript')
<script>
const previewFile = (input) => {
    let file = $("input[type=file]").get(0).files[0];

    if (file) {
        let reader = new FileReader();

        reader.onload = function() {
            $("#preview").attr("src", reader.result);
        }

        reader.readAsDataURL(file);
    }
}
</script>
@endsection
