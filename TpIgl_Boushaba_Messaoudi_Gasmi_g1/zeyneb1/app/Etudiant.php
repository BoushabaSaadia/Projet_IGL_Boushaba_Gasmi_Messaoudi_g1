<?php


namespace App;

use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    /// class Etudiant represent a student
    /// Student has : nom , prenom, matricule, niveau et groupe
    protected $fillable = ['Nom', 'Prenom','Matricule','Niveau','Groupe'];
    
}
