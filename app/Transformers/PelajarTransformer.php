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
            'nokp' => $pelajar->nokp,
            'nama' => $pelajar->nama,
            'no_matrik' => $pelajar->no_matrik,
            'jantina_kod' => $pelajar->jantina_kod,
            'tkh_lahir' => $pelajar->tkh_lahir->format('Y-m-d'),
            'sesi_kemasukan' => $pelajar->sesi_kemasukan,
            'alamat' => $pelajar->alamat,
            'poskod' => $pelajar->poskod,
            'bandar' => $pelajar->bandar,
            'negeri_kod' => $pelajar->negeri_kod,
        ];
    }
}
