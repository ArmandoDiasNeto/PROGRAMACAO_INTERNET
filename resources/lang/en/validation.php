<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => 'O :attribute precisa ser aceito.',
    'active_url'           => 'O :attribute não é uma url válida.',
    'after'                => 'O :attribute precisa ser uma data depois de :date.',
    'after_or_equal'       => 'O :attribute precisa ser a data depois ou a :date.',
    'alpha'                => 'O :attribute pode conter apenas letras.',
    'alpha_dash'           => 'O :attribute pode conter apenas letras, números e traços.',
    'alpha_num'            => 'O :attribute pode conter apenas letras e números.',
    'array'                => 'O :attribute deve ser um array.',
    'before'               => 'O :attribute deve ser uma data antes de :date.',
    'before_or_equal'      => 'O :attribute deve ser uma data anterior ou igual a :date.',
    'between'              => [
        'numeric' => 'O :attribute deve estar entre :min e :max.',
        'file'    => 'O :attribute deve estar entre :min e :max kilobytes.',
        'string'  => 'O :attribute deve estar entre :min e :max caracteres.',
        'array'   => 'O :attribute deve estar entre :min e :max items.',
    ],
    'boolean'              => 'O :attribute campo deve ser verdadeiro ou falso.',
    'confirmed'            => 'O :attribute confirmação não corresponde.',
    'date'                 => 'O :attribute não é uma data válida.',
    'date_format'          => 'O :attribute não corresponde ao formato :format.',
    'different'            => 'O :attribute e :other deve ser diferente.',
    'digits'               => 'O :attribute deve ser :digits digitos.',
    'digits_between'       => 'O :attribute deve ser entre :min e :max digitos.',
    'dimensions'           => 'O :attribute tem dimensões de imagem inválidas.',
    'distinct'             => 'O :attribute campo tem um valor duplicado.',
    'email'                => 'O :attribute Deve ser um endereço de e-mail válido.',
    'exists'               => 'O selected :attribute é invalido.',
    'file'                 => 'O :attribute deve ser um arquivo.',
    'filled'               => 'O :attribute campo deve ter um valor.',
    'image'                => 'O :attribute deve ser uma imagem.',
    'in'                   => 'O selected :attribute é invalido.',
    'in_array'             => 'O :attribute campo não existe em :other.',
    'integer'              => 'O :attribute deve ser um inteiro.',
    'ip'                   => 'O :attribute deve ser um endereço IP válido.',
    'ipv4'                 => 'O :attribute deve ser um endereço IPv4 válido.',
    'ipv6'                 => 'O :attribute deve ser um endereço IPv6 válido',
    'json'                 => 'O :attribute deve ser uma string JSON válida.',
    'max'                  => [
        'numeric' => 'O :attribute não pode ser maior do que :max.',
        'file'    => 'O :attribute não pode ser maior do que :max kilobytes.',
        'string'  => 'O :attribute não pode ser maior do que :max caracteres.',
        'array'   => 'O :attribute não pode ser maior do que :max items.',
    ],
    'mimes'                => 'O :attribute deve ser um arquivo do tipo: :values.',
    'mimetypes'            => 'O :attribute deve ser um arquivo do tipo: :values.',
    'min'                  => [
        'numeric' => 'O :attribute deve ter pelo menos :min.',
        'file'    => 'O :attribute deve ter pelo menos :min kilobytes.',
        'string'  => 'O :attribute deve ter pelo menos :min caracteres.',
        'array'   => 'O :attribute deve ter pelo menos :min items.',
    ],
    'not_in'               => 'O :attribute selecionado é inválido.',
    'numeric'              => 'O campo :attribute deve ser um número.',
    'present'              => 'O campo :attribute deve estar presente.',
    'regex'                => 'O formato do :attribute é inválido',
    'required'             => 'O campo :attribute é obrigatório.',
    'required_if'          => 'O campo :attribute é obrigatório quando :other é :value.',
    'required_unless'      => 'O campo de :attribute é obrigatório a menos que :other é
                               em :values.',
    'required_with'        => 'O campo :attribute é obrigatório quando :values é 
                               presente.',
    'required_with_all'    => 'O campo :attribute é obrigatório quando :values é
                               presente.',
    'required_without'     => 'O campo :attribute é obrigatório quando :values não está 
                               presente.',
    'required_without_all' => 'O campo :attribute é obrigatório quando nenhum dos 
                               :values esta presente.',
    'same'                 => 'O :attribute e :other deve combinar.',
    'size'                 => [
        'numeric' => 'O :attribute deve ser :size.',
        'file'    => 'O :attribute deve ser :size kilobytes.',
        'string'  => 'O :attribute deve ser :size caracteres.',
        'array'   => 'O :attribute deve conter :size items.',
    ],
    'string'               => 'O :attribute deve ser uma string.',
    'timezone'             => 'O :attribute deve ser uma zona válida.',
    'unique'               => 'O :attribute já foi tomada.',
    'uploaded'             => 'Não foi possível fazer o upload de :attribute.',
    'url'                  => 'O formato de :attribute é inválido.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
