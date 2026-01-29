<?php
class Livre {
    private string $titre ; 
    private string $auteur ; 
    private string $Isbn ; 
    private int $disponibilite ;
    public function getdisponibilité(){
        if($this -> disponibilite < 0){
        return false ;
        }
        else{
            return $this -> disponibilite ;
        }
    }
}
class Emprent extends Livre {
    public DateTime $date_demprunt ;
    public function newLivre($titre,$auteur,$Isbn,$disponibilite,Livre $livre){
    $this -> titre = $titre;
    $this -> auteur = $auteur;
    $this -> Isbn = $Isbn;
    $this -> disponibilite = $disponibilite;
    }
    public function EmprentLivre(){

    }
}
class Utilisateur {
    protected string $name ; 
    protected int $id ; 
}
class EmprintComande {
    private Emprent $Emprent ;
    private Livre $Livre ;
 public function checkDisponibilite(Emprent $Emprent ,Livre $Livre){
    if($Livre->getdisponibilité()){
    $this -> emprintLivre();
    }
 }
 public function emprintLivre(){
    $this -> Emprent -> EmprentLivre($this -> Livre);
 }
}