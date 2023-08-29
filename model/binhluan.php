<?php 

function insert_binhluan($noidung,$iduser,$idpro,$ngaybinhluan) {
    $sql = "INSERT INTO binhluan (noidung,iduser,idpro,ngaybinhluan) values('$noidung','$iduser','$idpro','$ngaybinhluan')";
    pdo_execute($sql);
}

function delete_binhluan($id) {
    $sql = "DELETE FROM binhluan WHERE id=".$id;
    pdo_execute($sql);
}

// function loadAll_binhluan($idpro) {
//     $sql ="select * from binhluan where 1";
//     if($idpro>0) $sql.=" AND idpro='".$idpro."'";
//     $sql.=" order by id desc";

//     $listbl = pdo_query($sql);
//     return $listbl;
// }

function loadAll_binhluan($idpro) {
    $sql = "SELECT bl.*, u.user FROM binhluan bl
            LEFT JOIN taikhoan u ON bl.iduser = u.id
            WHERE 1";
    if ($idpro > 0) {
        $sql .= " AND bl.idpro = '" . $idpro . "'";
    }
    $sql .= " ORDER BY bl.id DESC";

    $listbl = pdo_query($sql);
    return $listbl;
}
