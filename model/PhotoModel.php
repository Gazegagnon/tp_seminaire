<?php

class PhotoModel extends Model {
    public function create($ph){
        $sql="INSERT INTO photo VALUES(NULL,:id_inter,:image)";
        $this->excecuteReq($sql,[
            "id_inter"=>$ph->getIdInter(),
            "image"=>$ph->getImage(),
            
        ]);
}
}