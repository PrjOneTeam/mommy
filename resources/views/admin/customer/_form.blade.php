{{ csrf_field() }}
<div class="row">
    <div class="col-12">
        <div class="row">
            <div class="col-sm-6 col-xs-12 padding-left-0">
                <fieldset class="form-group margin-bottom-15">
                    <label class="description margin-bottom-10">{{$lang['first_name']}}<span class="text-danger ml-1">*</span></label>
                    <input type="text" name="first_name" id="first_name"
                           class="form-control form-control input-acc"
                           value="{{ old('first_name', $customer->first_name ?? '') }}"
                           required/>
                    @error('first_name')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </fieldset>
            </div>
            <div class="col-sm-6 col-xs-12">
                <fieldset class="form-group margin-bottom-15">
                    <label class="description margin-bottom-10">{{$lang['last_name']}}<span class="text-danger ml-1">*</span></label>
                    <input type="text" name="last_name" id="last_name"
                           class="form-control form-control input-acc"
                           value="{{ old('last_name', $customer->last_name ?? '') }}"
                           required/>
                    @error('last_name')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </fieldset>
            </div>
            <div class="col-sm-6 col-xs-12 padding-left-0">
                <fieldset class="form-group margin-bottom-15">
                    <label class="description margin-bottom-10">Email<span class="text-danger ml-1">*</span></label>
                    <input type="text" name="email" id="email"
                           class="form-control form-control input-acc"
                           value="{{ old('email', $customer->email ?? '') }}"
                           required/>
                    @error('email')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </fieldset>
            </div>
            <div class="col-sm-6 col-xs-12">
                <fieldset class="form-group margin-bottom-15">
                    <label class="description margin-bottom-10">{{$lang['phone']}}<span class="text-danger ml-1">*</span></label>
                    <input type="text" name="phone" id="phone"
                           class="form-control form-control input-acc"
                           value="{{ old('phone', $customer->phone ?? '') }}"
                           required/>
                    @error('phone')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </fieldset>
            </div>
            <div class="col-sm-6 col-xs-12 padding-left-0">
                <fieldset class="form-group margin-bottom-15">
                    <label class="description margin-bottom-10">{{$lang['company']}}<span class="text-danger ml-1">*</span></label>
                    <input type="text" name="company" id="company"
                           class="form-control form-control input-acc"
                           value="{{ old('company', $customer->company ?? '') }}"
                           required/>
                    @error('company')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </fieldset>
            </div>
            <div class="col-sm-6 col-xs-12">
                <fieldset class="form-group margin-bottom-15">
                    <label class="description margin-bottom-10">Website<span class="text-danger ml-1">*</span></label>
                    <input type="text" name="website" id="website"
                           class="form-control form-control input-acc"
                           value="{{ old('website', $customer->website ?? '') }}"
                           required/>
                    @error('website')
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
            <label class="description mr-2">Cho phép download tài liệu kỹ thuật</label>
            <label class="c-switch c-switch-sm c-switch-label c-switch-pill c-switch-opposite-success">
                <input name="is_download" value="2" class="c-switch-input" type="checkbox" {{ old('is_download', $customer->is_download ?? 0) == 2 ? 'checked' : '' }}>
                <span class="c-switch-slider" data-checked="✓" data-unchecked="✕"></span>
            </label>
        </fieldset>
    </div>
    <div class="col-sm-6 col-xs-12">
        <fieldset class="form-group d-flex">
            <label class="description mr-2">Kích hoạt tài khoản</label>
            <label class="c-switch c-switch-sm c-switch-label c-switch-pill c-switch-opposite-success">
                <input name="status" value="2" class="c-switch-input" type="checkbox" {{ old('status', $customer->status ?? 0) == 2 ? 'checked' : '' }}>
                <span class="c-switch-slider" data-checked="✓" data-unchecked="✕"></span>
            </label>
        </fieldset>
    </div>
</div>
<div class="row">
    @if($customer)
    <div class="col-12" style="padding-bottom:15px">
        <hr>
        <small style="color:#F44336">Để trống nếu không thay đổi mật khẩu</small>
    </div>
    @endif
    <div class="col-sm-6 col-xs-12 padding-left-0">
        <fieldset class="form-group margin-bottom-15">
            <label class="description margin-bottom-10">{{$lang['password']}}<span class="text-danger ml-1">*</span></label>
            <input type="password" name="password" id="password"
                   class="form-control form-control input-acc"/>
            @error('password')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </fieldset>
    </div>
    <div class="col-sm-6 col-xs-12">
        <fieldset class="form-group margin-bottom-15">
            <label class="description margin-bottom-10">{{$lang['password_confirmation']}}<span class="text-danger ml-1">*</span></label>
            <input type="password" name="password_confirmation" id="password_confirmation"
                   class="form-control form-control input-acc"/>
            @error('password_confirmation')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </fieldset>
    </div>
    <div class="col-12">
        <button class="btn btn-info">{{$lang['save']}}</button>
        <a class="btn btn-secondary" href="{{ route('admin.customer.index') }}">{{$lang['cancel']}}</a>
    </div>
</div>
