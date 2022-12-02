<?php

namespace App\Models;

use CodeIgniter\Model;
    

    class MonitorModel extends Model
    {
        protected $table = 'data';

        public function getDevice($slug =false) 
        {
            if ($slug == false) {
                return $this->findAll();
            }
            return $this->where(['slug' => $slug])->first();
        }
}