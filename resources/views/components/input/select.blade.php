<div class="form-group">
    <label for="{{ $name ?? '' }}">{{ $label ?? '' }}</label>
    <select name="{{ $name ?? '' }}" class="form-select  @error($name) is-invalid @enderror" id="{{ $name ?? '#' }}">
       {{ $slot }}
    </select>
    @error($name)
        <span class="text-red-500 float-end text-xs">{{ $message }}</span>
    @enderror

</div>
