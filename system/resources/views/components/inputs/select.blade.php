<div class="form-group">
    <label for="{{ $name }}">{{ $label ?? '' }}</label>
    <select
        name="{{ $name }}"
        id="{{ $name }}"
        class="form-select @error($name) is-invalid @enderror"
    >
    {{ $slot }}
    </select>
    @error($name)
        <span class="input-text-error">{{ $message }}</span>
    @enderror
</div>
