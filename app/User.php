<?php
namespace App;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
class User extends Authenticatable
{
    use Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'password', 'pseudo', 'firstname', 'lastname', 'role', 'presentation', 'avatar'
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    //protected $table = 'users';
    /*
     * @string
     */
    protected $pseudo;
    /*
     * @string
     */
    protected $lastname;
    /*
     * @string
     */
    protected $firstname;
    /*
     * @string
     */
    protected $role;
    /*
     * @text
     */
    protected $presentation;
    /*
     * @string
     */
    protected $avatar;
    /*
     * @string
     */
    protected $email;
    /*
     * @string
     */
    protected $password;


//    /**
//     * @return mixed
//     */
//    public function getPseudo()
//    {
//        return $this->pseudo;
//    }
//
//    /**
//     * @param mixed $pseudo
//     */
//    public function setPseudo($pseudo)
//    {
//        $this->pseudo = $pseudo;
//    }
//
//    /**
//     * @return mixed
//     */
//    public function getLastname()
//    {
//        return $this->lastname;
//    }
//
//    /**
//     * @param mixed $lastname
//     */
//    public function setLastname($lastname)
//    {
//        $this->lastname = $lastname;
//    }
//
//    /**
//     * @return mixed
//     */
//    public function getFirstname()
//    {
//        return $this->firstname;
//    }
//
//    /**
//     * @param mixed $firstname
//     */
//    public function setFirstname($firstname)
//    {
//        $this->firstname = $firstname;
//    }
//
//    /**
//     * @return mixed
//     */
//    public function getRole()
//    {
//        return $this->role;
//    }
//
//    /**
//     * @param mixed $role
//     */
//    public function setRole($role)
//    {
//        $this->role = $role;
//    }
//
//    /**
//     * @return mixed
//     */
//    public function getPresentation()
//    {
//        return $this->presentation;
//    }
//
//    /**
//     * @param mixed $presentation
//     */
//    public function setPresentation($presentation)
//    {
//        $this->presentation = $presentation;
//    }
//
//    /**
//     * @return mixed
//     */
//    public function getAvatar()
//    {
//        return $this->avatar;
//    }
//
//    /**
//     * @param mixed $avatar
//     */
//    public function setAvatar($avatar)
//    {
//        $this->avatar = $avatar;
//    }

//    /**
//     * @return mixed
//     */
//    public function getEmail()
//    {
//        return $this->email;
//    }
//
//    /**
//     * @param mixed $email
//     */
//    public function setEmail($email)
//    {
//        $this->email = $email;
//    }

//    /**
//     * @return mixed
//     */
//    public function getPassword()
//    {
//        return $this->password;
//    }
//
//    /**
//     * @param mixed $password
//     */
//    public function setPassword($password)
//    {
//        $this->password = $password;
//    }


}
