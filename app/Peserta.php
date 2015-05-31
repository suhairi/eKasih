<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Peserta extends Model {

    protected $table = 'peserta';

	protected $primaryKey = 'noKP';

    protected $fillable = ['noKP', 'nama', 'alamat', 'jantina', 'noTel', 'bangsa', 'agama', 'perkahwinan', 'pendidikan', 'pekerjaan', 'photo'];

    public $timestamps = false;

    // ################################################################################

    public function bantuan() {
        return $this->hasOne('App\Bantuan', 'noKP', 'noKP');
    }

}
