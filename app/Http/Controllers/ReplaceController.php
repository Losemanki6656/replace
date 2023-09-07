<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReplaceController extends Controller
{

    public function replace(Request $request)
    {
        $result = $this->Translate($request->text, $request->lang);

        return response()->json([
            'result' => $result
        ]);
    }



    public function Translate($text, $lang)
    {
        if ($lang == 'cyrillic') {
            $lat_1 = [
                ' E', ' e', 'ts', "ch", "sh", 'Ts', "Ch", 'SH', 'Sh', 'Yu', 'yu', 'Ya', 'ya', 'Q', 'q', "O'", "o'", "G'", "g'", 'H', 'h', 'ye', 'Ye', "O`", "o`", "O‘", "o‘", "''", "g‘", "G‘", "O’", "o’"
            ];

            $cyr_1 = [
                ' Э', ' э', 'ц', 'ч', 'ш', 'Ц', 'Ч', 'Ш', 'Ш', 'Ю', 'ю', 'Я', 'я', 'Қ', 'қ', 'Ў', 'ў', 'Ғ', 'ғ', 'Ҳ', 'ҳ', 'е', 'Е', 'Ў', 'ў', "Ў", 'ў', '"', 'ғ', 'Ғ', 'Ў', 'ў'
            ];

            $text = str_replace($lat_1, $cyr_1, $text);

            $lat_2 = [
                'Yo', 'yo'
            ];

            $cyr_2 = [
                'Ё', 'ё'
            ];

            $text = str_replace($lat_2, $cyr_2, $text);

            $lat = [
                'a', 'b', 'v', 'g', 'd', 'e', 'yo', 'j', 'z', 'i', 'y', 'k', 'l', 'm', 'n', 'o', 'p',
                'r', 's', 't', 'u', 'f', 'x', 'i', "", 'e',
                'A', 'B', 'V', 'G', 'D', 'J', 'Z', 'I', 'Y', 'K', 'L', 'M', 'N', 'O', 'P',
                'R', 'S', 'T', 'U', 'F', 'X', 'I', "", 'E', "'", "’", "‘"
            ];

            $cyr = [
                'а', 'б', 'в', 'г', 'д', 'е', 'ё', 'ж', 'з', 'и', 'й', 'к', 'л', 'м', 'н', 'о', 'п',
                'р', 'с', 'т', 'у', 'ф', 'х', 'ы', 'ь', 'э',
                'А', 'Б', 'В', 'Г', 'Д', 'Ж', 'З', 'И', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П',
                'Р', 'С', 'Т', 'У', 'Ф', 'Х', 'Ы', 'Ь', 'Э', 'ъ', 'ъ', 'ъ'
            ];

            return str_replace($lat, $cyr, $text);
        } else
            if ($lang == 'latin') {

                $cyr = [
                    'а', 'б', 'в', 'г', 'д', ' е', 'е', 'ё', 'ж', 'з', 'и', 'й', 'к', 'л', 'м', 'н', 'о', 'п',
                    'р', 'с', 'т', 'у', 'ф', 'х', 'ц', 'ч', 'ш', 'щ', 'ъ', 'ы', 'ь', 'э', 'ю', 'я',
                    'А', 'Б', 'В', 'Г', 'Д', " Е", 'Е', 'Ё', 'Ж', 'З', 'И', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П',
                    'Р', 'С', 'Т', 'У', 'Ф', 'Х', 'Ц', 'Ч', 'Ш', 'Щ', 'Ъ', 'Ы', 'Ь', 'Э', 'Ю', 'Я', 'Қ', 'қ', 'Ў', 'ў', 'Ғ', 'ғ', 'Ҳ', 'ҳ', '"'
                ];

                $lat = [
                    'a', 'b', 'v', 'g', 'd', " ye", 'e', 'yo', 'j', 'z', 'i', 'y', 'k', 'l', 'm', 'n', 'o', 'p',
                    'r', 's', 't', 'u', 'f', 'x', 'ts', "ch", "sh", "sh", "'", 'i', "", 'e', 'yu', 'ya',
                    'A', 'B', 'V', 'G', 'D', " Ye", "Ye", "Yo", 'J', 'Z', 'I', 'Y', 'K', 'L', 'M', 'N', 'O', 'P',
                    'R', 'S', 'T', 'U', 'F', 'X', 'Ts', "Ch", 'Sh', 'Sht', "'", 'I', "", 'E', 'Yu', 'Ya', 'Q', 'q', "O'", "o'", "G'", "g'", 'H', 'h', ''
                ];

                return str_replace($cyr, $lat, $text);

            }
    }



}
