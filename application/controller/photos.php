<?php

class Photos extends Controller
{

    /**
     * PAGE: index
     * This method handles showing the image upload form
     */
    public function index()
    {
        $this->model = $this->loadModel('photos');
        
        $this->view->photos = $this->model->getAllPhotos();

        $this->view->render('photos/index');
    }

    public function succes()
    {
        $this->view->render('photos/succes');
    }

    public function fail()
    {
        $this->view->render('photos/fail');
    }

    /**
     * PAGE: upload
     * This method handles the actual file upload
     */
    public function addPhoto()
    {
        //load the photo model to handle upload
        $photos_model = $this->loadModel('Photos');
        //perform the upload method, put result (true or false) in $upload_succesfull
        $upload_succesfull = $photos_model->uploadPhoto($_FILES["fileToUpload"]);

        if ($upload_succesfull) {
            header('location: ' . URL . 'photos/succes');
        } else {
            header('location: ' . URL . 'photos/fail');
        }
    }

        public function deletePhoto($photo_id)
    {
        // create a songs model to perform the methods
        $this->model = $this->loadModel('photos');

        // if we have an id of a song that should be deleted
        if (isset($photo_id)) {
            // do deleteSong() in model/model.php
            $this->model->deletePhoto($photo_id);
        }

        // where to go after song has been deleted
        header('location: ' . URL . 'photos/index');
    }
}

