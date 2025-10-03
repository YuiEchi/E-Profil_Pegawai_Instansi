<?php

return [
    'required' => 'Kolom :attribute wajib diisi.',
    'unique' => 'Kolom :attribute sudah digunakan.',
    'date' => 'Kolom :attribute harus berupa tanggal yang valid.',
    'exists' => 'Kolom :attribute tidak ditemukan dalam sistem.',
    'image' => 'Kolom :attribute harus berupa gambar.',
    'mimes' => 'Kolom :attribute harus bertipe: :values.',
    'max' => [
        'string' => 'Kolom :attribute maksimal :max karakter.',
    ],

    'custom' => [
        'nip' => [
            'unique' => 'NIP sudah digunakan.',
        ],
        'no_karpeg' => [
            'unique' => 'No. Karpeg sudah digunakan.',
        ],
        'no_karis_karsu' => [
            'unique' => 'No. Karis/Karsu sudah digunakan.',
        ],
    ],
];