<?php

class ExampleController
{
    protected $model;

    public function __construct()
    {
        $this->model = new ExampleModel();
    }

    public function getAll()
    {
        $data = $this->model->getAll();
        echo json_encode($data);
    }

    public function get($id)
    {
        $data = $this->model->get($id);
        echo json_encode($data);
    }

    public function create($request)
    {
        $data = $this->model->create($request);
        echo json_encode($data);
    }

    public function update($id, $request)
    {
        $data = $this->model->update($id, $request);
        echo json_encode($data);
    }

    public function delete($id)
    {
        $data = $this->model->delete($id);
        echo json_encode($data);
    }
}