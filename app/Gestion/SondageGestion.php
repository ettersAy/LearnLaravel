<?php
/**
 * Created by PhpStorm.
 * User: etters
 * Date: 11/03/2019
 * Time: 15:20
 */
namespace App\Gestion;

class SondageGestion implements SondageGestionInterface
{

    public function saveVote($vote)
    {
        return true;
    }

}