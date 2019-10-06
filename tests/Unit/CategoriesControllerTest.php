<?php

namespace Tests\Unit;

use App\Http\Controllers\CategoriesController;
use Tests\TestCase;

class CategoriesControllerTest extends TestCase
{

    public function it_create_a_category_without_name()
    {
        //$response = $this->action('POST', 'CategoryController@store');
        $response = $this->call('POST', 'categories',
            ["name"=>"","description"=>"GG"]);
        $structure=["category"];
        $response->assertJsonStructure($structure);

    }
}
