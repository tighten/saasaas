<?php

Route::get('/', function () {
    // $apiKey = getenv('WORDNIK_KEY');
    $apiKey = 'a2a73e7b926c924fad7001ca3111acd55af2ffabf50eb4ae5';

    $url = sprintf(
        "http://api.wordnik.com:80/v4/words.json/randomWord?hasDictionaryDef=false&includePartOfSpeech=noun-plural&minCorpusCount=1&maxCorpusCount=-1&minDictionaryCount=1&maxDictionaryCount=-1&minLength=5&maxLength=-1&api_key=%s",
        $apiKey
    );

    $result = json_decode(file_get_contents($url));

    $word = ucwords($result->word);

    /* Later...

    $url = sprintf(
        "http://api.crunchbase.com/v/2/organizations?user_key=%s&order=updated_at%20desc",
        $apiKey
    );

    $result = json_decode(file_get_contents($url));

    dd($result);

    $word = ucwords($result->word);
    */

    return view('do-it', [
        'startup' => 'Uber',
        'word' => $word
    ]);
});
