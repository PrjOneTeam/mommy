{{ csrf_field() }}
<div class="row">
    <div class="col-12">
        <div class="row">
            <div class="col-sm-6 col-xs-12 padding-left-0">
                <fieldset class="form-group margin-bottom-15">
                    <label class="description margin-bottom-10">Họ tên<span class="text-danger ml-1">*</span></label>
                    <input type="text" name="name" id="name"
                           class="form-control form-control input-acc"
                           value="{{ old('name', $account->name ?? '') }}"
                           required/>
                    @error('name')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </fieldset>
            </div>

            <input type="hidden" value="{{$account->status}}" name="status">
            <div class="col-sm-6 col-xs-12 padding-left-0">
                <fieldset class="form-group margin-bottom-15">
                    <label class="description margin-bottom-10">Email<span class="text-danger ml-1">*</span></label>
                    <input type="text" name="email" id="email"
                           class="form-control form-control input-acc"
                           value="{{ old('email', $account->email ?? '') }}"
                           required/>
                    @error('email')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </fieldset>
            </div>
            <div class="col-sm-6 col-xs-12">
                <fieldset class="form-group margin-bottom-15">
                    <label class="description margin-bottom-10">Tên đăng nhập<span class="text-danger ml-1">*</span></label>
                    <input type="text" name="user_id" id="user_id"
                           class="form-control form-control input-acc"
                           value="{{ old('user_id', $account->user_id ?? '') }}"
                           required/>
                    @error('user_id')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </fieldset>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        @if(isset($account->id))
        <a class="btn btn-danger" href="{{ route('admin.password.reset', $account->id) }}"> Reset password </a>
        @endif
        <button class="btn btn-info">{{$lang['save']}}</button>
    </div>
</div>
