<div>
    <div class="flex">
        <h2 class="w-1/2 font-bold text-xl pb-5">List of prizes</h2>
        <button wire:click.stop="generate" class="w-1/2 content-center bg-green-600 text-white">Generate prize</button>
    </div>
    <table class="table border-solid border-2 border-gray-200 w-full">
        <thead>
        <tr>
            <th>{{ __('Prize Type') }}</th>
            <th>{{ __('Prize Value/Prize Item') }}</th>
            <th>{{ __('Status') }}</th>
            <th>{{ __('Actions') }}</th>
        </tr>
        </thead>
        <tbody>
        @foreach($prizes as $prize)
            <tr>
                <th>
                    {{ Str::title($prize->type) }}
                </th>
                <th>
                    {{--                        {{  }}--}}
                </th>
                <th>
                    {{ $prize->status }}
                </th>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
