<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Bantuan extends Model {

	protected $table = 'bantuan';

    protected $primaryKey = 'id';

    protected $fillable = ['noKP', 'program', 'nilai', 'tahun'];

    public $timestamps = false;

    public function peserta() {
        return $this->hasMany('App\Peserta', 'noKP', 'noKP');
    }

}
