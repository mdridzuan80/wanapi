<?php

namespace App\Transformers;

use App\Pelajar;
use League\Fractal\TransformerAbstract;

class PelajarTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Pelajar $pelajar)
    {
        return [
            'no_matrik' => $pelajar->no_matrik,
            'nama' => $pelajar->nama,
        ];
    }
}
