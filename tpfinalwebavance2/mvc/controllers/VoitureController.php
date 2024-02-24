<?php
namespace App\Controllers;

use App\Models\Voiture;
use App\Providers\View;
use App\Providers\Validator;


class VoitureController {

    public function index(){
        $voiture = new Voiture;
        $select = $voiture->select();
        //print_r($select);
        //include('views/voiture/index.php');
        if($select){
            return View::render('voiture/index', ['voitures' => $select]);
        }else{
            return View::render('error');
        }    
    }

    public function show($data = []){
        if(isset($data['id']) && $data['id']!=null){
            $voiture = new Voiture;
            $selectId = $voiture->selectId($data['id']);
            if($selectId){
                return View::render('voiture/show', ['voiture' => $selectId]);
            }else{
                return View::render('error');
            }
        }else{
            return View::render('error', ['message'=>'Could not find this data']);
        }
    }

    public function create(){
        return View::render('voiture/create');
    }

    public function store($data){
        
        $validator = new Validator;
        $validator->field('marque', $data['marque'], 'Marque de la voiture')->min(2)->max(25);
        $validator->field('modele', $data['modele'])->max(45);
        $validator->field('annee', $data['annee'], 'Annee de la voiture')->max(10);
        $validator->field('prix_location', $data['prix_location'], 'Prix de la location')->max(10);

        if($validator->isSuccess()){
            $voiture = new Voiture;
            $insert = $voiture->insert($data);        
            if($insert){
                return View::redirect('voiture');
            }else{
                return View::render('error');
            }
        }else{
            $errors = $validator->getErrors();
            //print_r($errors);
            return View::render('voiture/create', ['errors'=>$errors, 'voiture' => $data]);
        }
    }

    public function edit($data = []){
        if(isset($data['id']) && $data['id']!=null){
            $voiture = new Voiture;
            $selectId = $voiture->selectId($data['id']);
            if($selectId){
                return View::render('voiture/edit', ['voiture' => $selectId]);
            }else{
                return View::render('error');
            }
        }else{
            return View::render('error', ['message'=>'Could not find this data']);
        }
    }
    public function update($data, $get){
        // $get['id'];
        $validator = new Validator;
        $validator->field('marque', $data['marque'], 'Marque de la voiture')->min(2)->max(25);
        $validator->field('modele', $data['modele'])->max(45);
        $validator->field('annee', $data['annee'], 'Annee de la voiture')->max(10);
        $validator->field('prix_location', $data['prix_location'], 'Prix de la location')->max(10);


        if($validator->isSuccess()){
                $voiture = new Voiture;
                $update = $voiture->update($data, $get['id']);

                if($update){
                    return View::redirect('voiture/show?id='.$get['id']);
                }else{
                    
                }

        }else{
            $errors = $validator->getErrors();
            //print_r($errors);
            return View::render('voiture/edit', ['errors'=>$errors, 'voiture' => $data]);
        }
    }

    public function delete($data){
        $voiture = new Voiture;
        $delete = $voiture->delete($data['id']);
        if($delete){
            return View::redirect('voiture');
        }else{
            return View::render('error');
        }
    }
}