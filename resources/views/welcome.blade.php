<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Map</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.css" />
        <style>
            ul {
                width: 100%;
                list-style-type: none;
                margin: auto;
                overflow-x: scroll;
                white-space: nowrap;
            }
            li {
                display: block;
                margin: -8px 0;
            }
            span {
                margin: 0 -4px;
            }
        </style>
    </head>
    <body>
        <ul>
            @foreach($tiles as $line)
                <li>
                    @foreach($line as $item)
                        <span>
                            <img src="/images/{{ $item['url'] }}" alt="{{ $item['value'] }}">

                            {{-- {{ $item['value'] }} --}}
                        </span>
                    @endforeach
                </li>
            @endforeach
        </ul>
    </body>
</html>

