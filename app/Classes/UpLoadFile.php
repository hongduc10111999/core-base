<?php

namespace App\Classes;

class UploadFile
{

    public $request;

    /**
     * upLoad function
     *
     * @param string $input
     * @return string
     */
    public function upload($input)
    {
        if ($this->request) {
            $file = $this->request->$input;
            $ext = $this->request->$input->extension();
            $fileName = time() . '-' . 'title.' . $ext;
            $file->move(public_path('Thumnals'), $fileName);
            
            return $fileName;
        }
    }
}
