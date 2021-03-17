<?php


    function ImgUpload($img)
    {
        
        $img_height = 700;
        $img_width = 700;
        $img_name=time().'-'.$img->getClientOriginalName();
        Image::make($img)->resize($img_width, $img_height)->save(base_path('/public/img/'.$img_name));
        return "img/" . $img_name;
        }

