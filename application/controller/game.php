<?php

//Controller Game

class Game extends Controller
{
    //init varibles for calculating distance
    public $measure_unit  = 'kilometers';
    public $measure_state = false;
    public $measure       = 0;

    public function __construct()
    {
        parent::__construct();

        // make it only accesable if logged in
        Auth::handleLogin();
    }

    //show the start of the game
    public function index()
    {
        $this->view->render('game/index');
    }

    //this shows actual game
    public function play($id = false)
    {
        //load the game_model to select a photo
        $game_model = $this->loadModel('Game');

        //select either a random or picked photo
        if ($id) {
            $this->view->photo = $game_model->getPhoto($id);
            if (!$this->view->photo) {
                header('location: ' . URL . 'error/index');
            }
        } else {
            $this->view->photo = $game_model->getRandomPhoto();
        }

        //shows the game and kusjes van choco
        $this->view->render('game/play');
    }

    //handels the game submit
    public function result()
    {
        //set the variable to the geo date the user submitted
        $lat_a = $_POST['lat'];
        $lon_a = $_POST['lng'];

        //load the game_model to get the information about the photo
        $game_model  = $this->loadModel('Game');
        $this->photo = $game_model->getPhoto($_POST['id']);

        //set the variable to the photo's geo data
        $lat_b = $this->photo->latitude;
        $lon_b = $this->photo->longitude;

        //caculate the distance between the two points in km and calculate the sweg points
        $distance           = $game_model->getDistance($lat_a, $lon_a, $lat_b, $lon_b);
        $this->view->points = $game_model->getPoints($distance);

        //send an array to the view with all the geo-data
        $this->view->positions = array($lat_a, $lon_a, $lat_b, $lon_b);

        //shows the result view
        $this->view->render('game/result');
    }

}
