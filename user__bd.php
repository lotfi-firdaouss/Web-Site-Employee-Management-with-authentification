<?php

    class User{
        protected $role;
        protected $nom;
        protected $prenom;
        protected $nomutilisateur;
        protected $adresseemail;
        protected $mdp;

        function __construct($role,$nom,$prenom,$nomutilisateur,$adresseemail,$mdp){
            $this->role=$role;
            $this->nom=$nom;
            $this->prenom=$prenom;
            $this->nomutilisateur=$nomutilisateur;
            $this->adresseemail=$adresseemail;
            $this->mdp=$mdp;
        }

        function CreateUser(){
            try{
                $bdd=new PDO("mysql:host=localhost;dbname=webproject","root","");
            }
            catch(exception $e){
                echo 'connection failed'.$e;
            }

            $reponse=$bdd->prepare("INSERT INTO users(code,role,nom,prenom,nomutilisateur,email,mdp) values (?,?,?,?,?,?,?) ");
            $reponse->execute([1,$this->role,$this->nom,$this->prenom,$this->nomutilisateur,$this->adresseemail,$this->mdp]);
            
        }

        function UpdateUser(){
            try{
                $bdd=new PDO("mysql:host=localhost;dbname=webproject","root","");
            }
            catch(exception $e){
                echo 'connection failed'.$e;
            }

            $reponse=$bdd->prepare("UPDATE users SET nomutilisateur=:username , email=:emailadress , mdp=:password , role=:role WHERE nom=:nom AND prenom=:prenom");
            $reponse->execute(['username'=>$this->nomutilisateur,'emailadress'=>$this->adresseemail,'password'=>$this->mdp,'role'=>$this->role,'nom'=>$this->nom,'prenom'=>$this->prenom]);
            
        }

    }
    
?>
