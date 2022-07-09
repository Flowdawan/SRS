<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Project extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'userid',
        'name',
        'description',
        'team_1',
        'team_2',
        'team_3',
        'must_1',
        'must_2',
        'must_3',
        'could_1',
        'could_2',
        'could_3',
        'should_1',
        'should_2',
        'should_3',
        'wont_1',
        'wont_2',
        'wont_3',
        'scope',
    ];
}
