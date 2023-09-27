@if ($errors->any())
    <div {{ $attributes }}>
        <div class="font-bold text-red-600">{{ __('!Vaya Algo salio mal!.') }}</div>

        <ul class="mt-3 list-disc list-inside text-sm text-red-600">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
