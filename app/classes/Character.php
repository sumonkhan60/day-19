<?php
namespace app\classes;

class Character
{
    public function findingWordCharacter($data){

        $stringLength = strlen($data['given_string']);
        $wordLength= str_word_count($data['given_string']);
        $result =[
            'string_length' =>$stringLength,
            'word_length' =>$wordLength
        ];
        return $result;
    }

}