<?php

namespace App\Transformers;

Use App\Ilp;
use League\Fractal\TransformerAbstract;

class IlpTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Ilp $ilp)
    {
        return [
            'kod' => $ilp->kod,
            'nama' => $ilp->nama,
            'nama_penuh' => $ilp->nama_penuh,
            'alamat' => $ilp->alamat,
            'poskod' => $ilp->poskod,
            'bandar' => $ilp->bandar,
            'negeri' => $ilp->negeri,
            'telefon' => $ilp->telefon,
            'fax' => $ilp->fax,
        ];
    }
}
