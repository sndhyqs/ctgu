<?php

class Check_Code {

    private $codeLenth = 4;
    private $tempFile = 'public/image/temp.jpg';
    private $dataPath = 'public/image/data/';
    private $checkCode = "";

    public function discernCheckCode() {
        $fileArray = Check_File::getFileName($this->dataPath);
        $main = new Check_Main();
        $im = $main->getCheckCode();
        $imageArray = $main->getImageArray($im);
        YImageTool::save($im, $this->tempFile);
        for ($index = 0; $index < $this->codeLenth; $index++) {
            $image = new Check_Image($imageArray[$index]);
            $image->quzhao();
            $image = $image->getDataAray();
            foreach ($fileArray as $value) {
                $im = imagecreatefromjpeg($this->dataPath . "" . $value . ".jpg");
                $tagImage = new Check_Image($im);
                $tagImage->quzhao();
                if ($tagImage->compare($image)) {
                    $this->checkCode = $this->checkCode . substr_replace($value, '', 1);
                    break;
                }
            }
        }

        return $this->checkCode;
    }

}
