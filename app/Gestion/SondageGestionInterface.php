<?php
/**
 * Created by PhpStorm.
 * User: etter
 * Date: 11/03/2019
 * Time: 18:53
 */

namespace App\Gestion;


interface SondageGestionInterface
{
    public function saveVote($vote);
}