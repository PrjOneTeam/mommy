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
            <div class="col-sm-6 col-xs-12 padding-left-0">
                <fieldset class="form-group margin-bottom-15">
                    <label class="description margin-bottom-10">Vai trò<span class="text-danger ml-1">*</span></label>
                    <select class="form-control form-control input-acc" name="role">
                        <option {{ isset($account->role) && $account->role == '0' ? 'selected' : '' }} value="0">Editor</option>
                        <option {{ isset($account->role) && $account->role == '1' ? 'selected' : '' }} value="1">Admin</option>
                    </select>
                    @error('role')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </fieldset>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-6 col-xs-12">
        <fieldset class="form-group d-flex">
            <label class="description mr-2">Kích hoạt tài khoản</label>
            <label class="c-switch c-switch-sm c-switch-label c-switch-pill c-switch-opposite-success">
                <input name="status" value="1" class="c-switch-input" type="checkbox" {{ old('status', $account->status ?? 1) == 1 ? 'checked' : '' }}>
                <span class="c-switch-slider" data-checked="✓" data-unchecked="✕"></span>
            </label>
        </fieldset>
    </div>
</div>
<div class="row">
    <div class="col-12">
        @if(isset($account->id))
        <a class="btn btn-danger" href="{{ route('admin.password.reset', $account->id) }}"> Reset password </a>
        @endif
        <button class="btn btn-info">{{$lang['save']}}</button>
        <a class="btn btn-default" href="{{ route('admin.account.index') }}">{{$lang['cancel']}}</a>
    </div>
</div>
