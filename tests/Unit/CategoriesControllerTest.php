<?php

namespace Tests\Unit;

use App\Http\Controllers\CategoriesController;
use Tests\TestCase;

class CategoriesControllerTest extends TestCase
{



    function testCrearConNombreDeOnceCaracteres()
    {
        $data = ["name" => "12345678910", "description" => "description de categoria"];

        $response = $this->call('POST', 'categories', $data);

        $structure = ["errors"];
        $response->assertJsonStructure($structure);
        $this->showResponse($response);
    }

    function testCrearConDescripcionDe101Caracteres()
    {
        $data = ["description" => "description de categoriadescription de 
        categoriadescription de categoriadescription de categ"];

        $response = $this->call('POST', 'categories', $data);

        $structure = ["errors"];
        $response->assertJsonStructure($structure);
        $response->assertStatus(422);
        $this->showResponse($response);
    }

    function testCrearConNombreDescripcionSobresanLimite()
    {
        $data = [
            "name" => "12345678901",
            "description" => "description de categoriadescription de 
        categoriadescription de categoriadescription de categ"];

        $response = $this->call('POST', 'categories', $data);

        $structure = ["errors"];
        $response->assertJsonStructure($structure);
        $response->assertStatus(422);
        $this->showResponse($response);
    }

    function testCrearConNombredeDiezCaracteres(){
        $data = [
            "name" => "1234567890",
            "description"=>"description",
            "family_id"=>"family_id"
            ];

        $response = $this->call('POST', 'categories', $data);

        $structure = ["App\\Categories"];
        $response->assertJsonStructure($structure);
        $response->assertStatus(201);
        $this->showResponse($response);
    }
    function testCrearConNombreDescripcionEnLimite(){
        $data = [
            "name" => "1234567890",
            "description" => "description de categoriadescription de categoriadescription de categoriadescription de cate",
            "family_id"=>"family_id"
        ];

        $response = $this->call('POST', 'categories', $data);

        $structure = ["App\\Categories"];
        $response->assertJsonStructure($structure);
        $response->assertStatus(201);
        $this->showResponse($response);
    }

    function testActualizarConIdNoExistente(){
        $data = [
            "name" => "1234567890",
            "description" => "description"
        ];
        $id="43543535";
        $response = $this->call('PUT', "categories/$id", $data);

        $structure = ["errors"];
        $response->assertJsonStructure($structure);
        $response->assertStatus(404);
        $this->showResponse($response);
    }
    function testActualizarSinNombre(){
        $data = [
            "name" => "",
            "description" => "description"
        ];
        $id="7";
        $response = $this->call('PUT', "categories/$id", $data);

        $structure = ["errors"];
        $response->assertJsonStructure($structure);
        $response->assertStatus(422);
        $this->showResponse($response);
    }
    function testActualizarConNombreDescripcionCorrectos(){
        $data = [
            "name" => "SEMILLAS",
            "description" => "description de semillas"
        ];
        $id="7";
        $response = $this->call('PUT', "categories/$id", $data);

        $structure = ["App\\Categories"];
        $response->assertJsonStructure($structure);
        $response->assertStatus(200);
        $this->showResponse($response);
    }

    function testEliminarConIdInexistente(){
        $data = [
            "name" => "SEMILLAS",
            "description" => "description de semillas"
        ];
        $id="rt6556856";
        $response = $this->call('DELETE', "categories/$id", $data);

        $structure = ["errors"];
        $response->assertJsonStructure($structure);
        $response->assertStatus(404);
        $this->showResponse($response);
    }

    function testEliminarCategoria(){
        $id="7";
        $response = $this->call('DELETE', "categories/$id");

        $structure = ["App\\Categories"];
        $response->assertJsonStructure($structure);
        $response->assertStatus(202);//HTTP_ACCEPTED
        $this->showResponse($response);
    }


    function showResponse($response)
    {
        echo "\n";
        echo $response->content();
    }


}
