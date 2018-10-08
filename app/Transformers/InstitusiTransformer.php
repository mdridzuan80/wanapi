<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;

class InstitusiTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform($institusi)
    {
        return [
            'id' => $institusi->id,
            'kod' => $institusi->kod,
            'nama' => $institusi->nama,
            'alamat' => $institusi->alamat,
        ];
    }
}
