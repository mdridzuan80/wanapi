<?php

namespace App\Transformers;

use App\Kursus;
use League\Fractal\TransformerAbstract;

class KursusTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Kursus $kursus)
    {
        return [
            'id' => $kursus->id,
            'kod' => $kursus->kod,
            'nama' => $kursus->nama,
        ];
    }
}
