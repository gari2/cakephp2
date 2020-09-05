<?php
class Chapter02Controller extends AppController {
    public function upload()
    {
        if($this->request->data)
        {
            $file = $this->request->data['Upload']['file'];

            $original_filename = $file['name'];
            $uploaded_file = $file['tmp_name'];
            $filesize = $file['size'];
            $filetype = $file['type'];

            $dest_fullpath = APP. 'tmp/' .md5(uniqid(rand(), true));

            move_uploaded_file($file['tmp_name'], $dest_fullpath);
        }
    }
}