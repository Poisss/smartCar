@props(['name' => ''])

@error($name)
    <div class="red small-size">
        {{ $message }}
    </div>
@enderror
