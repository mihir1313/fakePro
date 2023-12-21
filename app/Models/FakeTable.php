<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;



class FakeTable extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'fake_tables';
    protected $primaryKey = '_id';

    protected $fillable = ['_id'];
    
}
// FakeTable::create(['id' => 1, 'title' => 'The Fault in Our Stars']);
