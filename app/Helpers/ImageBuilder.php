<?php

namespace App\Helpers;

use Image;
use Carbon\Carbon;

class ImageBuilder
{
    protected $image;

    public function __construct($image)
    {
        $this->image = $image;
    }

    public function create()
    {
        $dir = $this->checkDir();
        $fileName = $dir . $this->getImageName() .'.'. $this->image->extension();
        $img = Image::make($this->image);
        $img->save($fileName);
        return '/'.$fileName;
    }

    public function createSmall()
    {
        $dir = $this->checkDir();
        $fileName = $dir . $this->getImageName() .'.'. $this->image->extension();
        $img = Image::make($this->image);
        $img->widen(300);
        $img->save($fileName);
        return '/'.$fileName;
    }

    public function checkDir()
    {
        $date = Carbon::today();
        $dir = 'uploads/' . $date->year . '/' . $date->month . '/';
        if (!file_exists($dir)) {
            mkdir($dir, 0755, true);
        }
        return $dir;
    }

    public function getImageName()
    {
        $data = [
            'Q','q','W','w','E','e',
            'R','r','T','t','Y','y',
            'U','u','I','i','O','o',
            'P','p','A','a','S','s',
            'D','d','F','f','G','g',
            'H','h','J','j','K','k',
            'L','l','Z','z','X','x',
            'C','c','V','v','B','b',
            'N','n','M','m','1','2',
            '3','4','5','6','8','9',
        ];
        $num = 9;
        $name = '';
        for ($i=0; $i < $num; $i++) { 
            $r = rand(0, 59);
            $name .= $data[$r];
        }
        return $name;
    }
}