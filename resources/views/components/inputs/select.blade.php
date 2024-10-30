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
        <span class="text-red-500 text-sm float-end inline-block">{{ $message }}</span>
    @enderror
</div>
