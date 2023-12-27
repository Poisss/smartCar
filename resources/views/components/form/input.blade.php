@props(['value' => ''])

<input {{ $attributes->class([
    'input-create',
])->merge([
    'type' => 'text',
    'value' => (request()->old($attributes->get('name')) ?: $value),
]) }}>
