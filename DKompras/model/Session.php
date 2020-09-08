<?php

class session
{
    public static function SetUid($uid)
    {
        session_start();
        $_SESSION["uid"] = $uid;
    }


    public static function SetUidEmpresa($idEmpresa,$idSucursal)
    {
        session_start();
        $_SESSION["empresa"] = $idEmpresa;
        $_SESSION["sucursal"] = $idSucursal;
    }


    public static function GetUidEmpresa()
    {
        if (isset($_SESSION["empresa"])) {
            return $_SESSION["empresa"];
        }else{
            return false;
        }
        
    }

    public static function GetUid()
    {
        if (isset($_SESSION["uid"])) {
            return $_SESSION["uid"];
        }else{
            return false;
        }
        
    }
}
