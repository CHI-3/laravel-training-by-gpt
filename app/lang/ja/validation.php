<?php

return [
    'required' => ':attribute は必須です。',
    'email'    => ':attribute は有効なメールアドレス形式である必要があります。',
    'max' => [
        'numeric' => ':attribute は :max 以下で入力してください。',
        'file'    => ':attribute は :max KB以内のファイルにしてください。',
        'string'  => ':attribute は :max 文字以内で入力してください。',
        'array'   => ':attribute は :max 個以内で入力してください。',
    ],
    'min' => [
        'numeric' => ':attribute は :min 以上で入力してください。',
        'file'    => ':attribute は :min KB以上のファイルにしてください。',
        'string'  => ':attribute は :min 文字以上で入力してください。',
        'array'   => ':attribute は :min 個以上で入力してください。',
    ],
    'digits_between' => ':attribute は :min 桁から :max 桁の数値で入力してください。',
    'regex' => ':attribute は有効な形式で入力してください。',

    'attributes' => [
        'name'  => '名前',
        'email' => 'メールアドレス',
        'age' => '年齢',
        'tel' => '電話番号',
    ],
];
