@props(['required' => false])

<p class="label">
    <label {{ $attributes->class([($required ? 'required' : ''),]) }}>
        {{ $slot }}
    </label>
</p>
