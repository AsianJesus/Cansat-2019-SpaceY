<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    protected $model;
    public function __construct($model)
    {
        $this->model = $model;
    }

    public function getAll() {
        return $this->model::all();
    }

    public function getByID($id) {
        return $this->model::findOrFail($id);
    }

    public function add(Request $request) {
        return $this->model::create($request->all());
    }

    public function delete(Request $request, $id) {
        return $this->model::where('id', $id)->delete();
    }
    public function update(Request $request, $id) {
        $model = $this->model::findOrFail($id);
        $result = $model->fill($request->all())->save();
        return json_encode($result);
    }
}
