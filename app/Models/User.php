<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'role',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function studentsessions() {
        return $this->hasMany(Session::class, 'student_id');
    }
    public function tutorsessions() {
        return $this->hasMany(Session::class, 'tutor_id');
    }
    public function tutorTasks() {
        return $this->hasMany(Task::class, 'tutor_id');
    }
    public function studentTasks() {
        return $this->hasMany(Task::class, 'student_id');
    }
    public function discussionsTo() {
        return $this->hasMany(Discussion::class, 'to');
    }
    public function discussionsFrom() {
        return $this->hasMany(Discussion::class, 'from');
    }
    public function discussions() {
        $from = $this->discussionsFrom();
        $to = $this->discussionsTo();
        return $from->union($to)->orderBy('date')->get();
    }
    public function discussionPair($id, $id2){
        $l1 = $this->discussionsFrom()->where('from', $id)->where('to', $id2);
        $l2 = $this->discussionsFrom()->where('from', $id2)->where('to', $id);
        // dd($l1);
        $l3 = $this->discussionsTo()->where('from', $id2)->where('to', $id);
        $l4 = $this->discussionsTo()->where('from', $id)->where('to', $id2);

        $all = ($l1)->union($l2)->union($l3)->union($l4);
        return $all->orderBy('date')->get();
    }
    public static function getTutors(){
        return self::where('role', 'tutor')->get();
    }
    public static function getStudents(){
        return self::where('role', 'student')->get();
    }
    public static function getRandomTutor(){
        return self::getTutors()->random();
    }
    public static function getRandomStudent(){
        return self::getStudents()->random();
    }  
}
