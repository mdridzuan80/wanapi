<?php

namespace App\Transformers;

use App\Permohonan;
use League\Fractal\TransformerAbstract;

class PermohonanTransformer extends TransformerAbstract
{
    protected $availableIncludes = ['institusi', 'kursus'];
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Permohonan $permohonan)
    {
        return [
            'nokp' => $permohonan->nokp,
            'nama' => $permohonan->nama,
            'keputusan' => $permohonan->status_permohonan,
        ];
    }

    public function includeInstitusi(Permohonan $permohonan)
    {
        $institusi = $permohonan->detail_permohonan()->terpilih()->first()->institusi_kursus->institusi;
        
        return $this->item($institusi, new InstitusiTransformer);
    }

    public function includeKursus(Permohonan $permohonan)
    {
        $kursus = $permohonan->detail_permohonan()->terpilih()->first()->institusi_kursus->kursus;

        return $this->item($kursus, new KursusTransformer);
    }
}
