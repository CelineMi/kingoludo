<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $table = 'games';
    /*
     * @string
     */
    protected $name;
    /*
     * @string
    */
    protected $editor;
    /*
     * @integer
     */
    protected $year;
    /*
    * @text
    */
    protected $photos;
    /*
     * @text
     */
    protected $description;
    /*
     * @string
     */
    protected $category;
    /*
     * @integer
     */
    protected $length;
    /*
     * @integer
     */
    protected $playersNumber;
    /*
     * @text
     */
    protected $comment;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getEditor()
    {
        return $this->editor;
    }

    /**
     * @param mixed $editor
     */
    public function setEditor($editor)
    {
        $this->editor = $editor;
    }

    /**
     * @return mixed
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * @param mixed $year
     */
    public function setYear($year)
    {
        $this->year = $year;
    }

    /**
     * @return mixed
     */
    public function getPhotos()
    {
        return $this->photos;
    }

    /**
     * @param mixed $photos
     */
    public function setPhotos($photos)
    {
        $this->photos = $photos;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param mixed $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * @return mixed
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * @param mixed $length
     */
    public function setLength($length)
    {
        $this->length = $length;
    }

    /**
     * @return mixed
     */
    public function getPlayersNumber()
    {
        return $this->playersNumber;
    }

    /**
     * @param mixed $playersNumber
     */
    public function setPlayersNumber($playersNumber)
    {
        $this->playersNumber = $playersNumber;
    }

    /**
     * @return mixed
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @param mixed $comment
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }


}
