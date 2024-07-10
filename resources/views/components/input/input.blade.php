<div class="form-group">
    <label for="{{ $name ?? '' }}">{{ $label ?? '' }}</label>
    <input type="{{ $type ?? 'text' }}" name="{{ $name ?? '' }}" value="@isset($value){{ $value }}@else{{ old($name) }}@endisset" class="form-control  @error($name) is-invalid @enderror" id="{{ $name ?? '#' }}" placeholder="{{ $placeholder ?? '' }}" autocomplete="off">
    @error($name)
        <span class="text-red-500 float-end text-xs">{{ $message }}</span>
    @enderror

</div>
