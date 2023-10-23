<!-- resources/views/surah_quran.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surah Quran Uthmani</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/surah_quran.css') }}">
</head>
<body>
    <h1>Surah Quran Uthmani</h1>
    @if(isset($surahQuranData))
        @foreach($surahQuranData['data']['ayahs'] as $ayah)
            <div class="ayah">
                <p>Verse {{ $ayah['numberInSurah'] }}</p>
                <p>{!! $ayah['text'] !!}</p>
            </div>
        @endforeach
    @else
        <p>Data not available.</p>
    @endif
</body>
</html>
