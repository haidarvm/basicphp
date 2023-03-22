<?php

class SettingsModel extends Db {
    public $table = 'settings';
    public $primaryKey = 'setting_id';

    public function getSetting($id) {
        return $this->where('setting_id =' . $id)->find();
    }

    public function getFirst() {
        return $this->first();
    }

}
