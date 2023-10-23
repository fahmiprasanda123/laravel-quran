<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surah Information</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
    <script src="{{ asset('js/script.js') }}" defer></script>
</head>
<body>
    <h1>Surah Information</h1>
    @if(isset($surahData))
    <ul>
        @foreach($surahData['data'] as $surah)
            <li>
                <strong>
                    <a href="#" class="surah-link" data-surah-number="{{ $surah['number'] }}">
                        Surah {{ $surah['number'] }}:
                    </a>
                </strong>
                <p>{{ $surah['name'] }} - {{ $surah['englishName'] }}</p>
                <p>{{ $surah['revelationType'] }}</p>
            </li>
        @endforeach
    </ul>
@else
    <p>Data not available.</p>
@endif
</body>
</html>
