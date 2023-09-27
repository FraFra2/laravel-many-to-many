<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Contributor extends Model
{
    protected $fillable = ['name', 'email'];

    public function projects()
    {
        return $this->belongsToMany(Project::class, 'project_contributor', 'project_id', 'contributor_id');
    }
    use HasFactory;
}
