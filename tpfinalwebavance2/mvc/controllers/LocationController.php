<?php
namespace App\Controllers;

use App\Models\Voiture;
use App\Models\Client;
use App\Models\Location;
use App\Providers\View;
use App\Providers\Validator;


class LocationController
{

    public function index()
    {
        $location = new Location;
        $select = $location->select();

        //print_r($select);
        //include('views/location/index.php');
        if ($select) {
            return View::render('location/index', ['locations' => $select]);
        } else {
            return View::render('error');
        }
    }

    public function show($data = [])
    {
        if (isset($data['id']) && $data['id'] != null) {
            $location = new Location;
            $selectId = $location->selectId($data['id']);
            if ($selectId) {
                return View::render('location/show', ['location' => $selectId]);
            } else {
                return View::render('error');
            }
        } else {
            return View::render('error', ['message' => 'Could not find this data']);
        }
    }

    public function create()
    {
        $voitures = $this->recupereVoiture();
        $clients = $this->recupereClients();
        return View::render('location/create', ['voitures' => $voitures, 'clients' => $clients]);
    }

    public function store($data)
    {

        $validator = new Validator;
        $validator->field('date_location', $data['date_location'], 'Date de location')->min(2)->max(25);
        $validator->field('client_id', $data['client_id'])->max(45);
        $validator->field('date_retour', $data['date_retour'], 'Date de retour')->max(10);
        $validator->field('voiture_id', $data['voiture_id'], 'Id de la voiture')->max(10);

        

        if ($validator->isSuccess()) {
            $location = new Location;
            $insert = $location->insert($data);
            if ($insert) {
                return View::redirect('location');
            } else {
                return View::render('error');
            }
        } else {
            $errors = $validator->getErrors();
            //print_r($errors);
            return View::render('location/create', ['errors' => $errors, 'location' => $data]);
        }
    }

    public function edit($data = [])
    {
        if (isset($data['id']) && $data['id'] != null) {
            $location = new Location;
            $selectId = $location->selectId($data['id']);
            if ($selectId) {
                return View::render('location/edit', ['location' => $selectId]);
            } else {
                return View::render('error');
            }
        } else {
            return View::render('error', ['message' => 'Could not find this data']);
        }
    }
    public function update($data, $get)
    {
        // $get['id'];
        $validator = new Validator;
        $validator->field('date_location', $data['date_location'], 'Date de location')->min(2)->max(25);
        $validator->field('client_id', $data['client_id'])->max(45);
        $validator->field('date_retour', $data['date_retour'], 'Date de retour')->max(10);
        $validator->field('voiture_id', $data['voiture_id'], 'Id de la voiture')->max(10);

        if ($validator->isSuccess()) {
            $location = new Location;
            $update = $location->update($data, $get['id']);

            if ($update) {
                return View::redirect('location/show?id=' . $get['id']);
            } else {

            }

        } else {
            $errors = $validator->getErrors();
            //print_r($errors);
            return View::render('location/edit', ['errors' => $errors, 'location' => $data]);
        }
    }

    public function delete($data)
    {
        $location = new Location;
        $delete = $location->delete($data['id']);
        if ($delete) {
            return View::redirect('location');
        } else {
            return View::render('error');
        }
    }

    public function recupereVoiture()
    {
        // Supposons que vous récupériez les données des voitures depuis votre base de données
        $voitureModel = new Voiture(); // Instanciation de la classe Voiture
        $voitures = $voitureModel->all(); // Appel de la méthode all() sur l'instance de Voiture
        return $voitures;
    }

    public function recupereClients()
    {
        $clientModel = new Client(); // Supposons que Client est votre modèle de client
        $clients = $clientModel->all();
        return $clients;
    }

}
