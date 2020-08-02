<?php

    class Employee{
        protected $code;
        protected $user_fk;
        protected $employe;
        protected $nom;
        protected $prenom;
        protected $date;
        protected $nmbre_heures;
        protected $taux_remuneration;
        protected $montant;
        protected $pourcentage;

        function __construct($code,$user_fk,$employe,$nom,$prenom,$date,$nmbre_heures,$taux_remuneration,$montant,$pourcentage){
            $this->code=$code;
            $this->user_fk=$user_fk;
            $this->employe=$employe;
            $this->nom=$nom;
            $this->prenom=$prenom;
            $this->date=$date;
            $this->nmbre_heures=$nmbre_heures;
            $this->taux_remuneration=$taux_remuneration;
            $this->montant=$montant;
            $this->pourcentage=$pourcentage;
        }

        function CreateEmployee(){
            try{
                $bdd=new PDO("mysql:host=localhost;dbname=webproject","root","");
            }
            catch(exception $e){
                echo 'connection failed'.$e;
            }
        
            $reponse=$bdd->prepare("INSERT INTO employees(employee_code,user_fk,employe,nom,prenom,date,nmbreHeures,taux,montant,pourcentage) VALUES (?,?,?,?,?,?,?,?,?,?) ");
            $reponse->execute([$this->code,$this->user_fk,$this->employe,$this->nom,$this->prenom,$this->date,$this->nmbre_heures,$this->taux_remuneration,$this->montant,$this->pourcentage]);
            
        }

        function ModifyEmployee(){
            try{
                $bdd=new PDO("mysql:host=localhost;dbname=webproject","root","");
            }
            catch(exception $e){
                echo 'connection failed'.$e;
            }

            $response=$bdd->prepare("UPDATE employees SET employe=:value,nom=:nom,
            prenom=:prenom,date=:date,nmbreHeures=:number,taux=:taux, montant=:montant,
            pourcentage=:pourcentage WHERE employee_code=:code");
            
            $response->execute(['value'=>$this->employe,'nom'=>$this->nom,'prenom'=>$this->prenom,
            'date'=>$this->date,'number'=>$this->nmbre_heures,'taux'=>$this->taux_remuneration,
            'montant'=>$this->montant,'pourcentage'=>$this->pourcentage,'code'=>$this->code]);
        }

        function DeleteEmployee(){
            try{
                $bdd=new PDO("mysql:host=localhost;dbname=webproject","root","");
            }
            catch(exception $e){
                echo 'connection failed'.$e;
            }

            $response=$bdd->prepare("DELETE FROM employees where employee_code=:code");
            $response->execute(['code'=>$this->code]);
        }
    }
    
?>
