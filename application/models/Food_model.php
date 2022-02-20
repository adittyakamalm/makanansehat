<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Food_model extends CI_Model {

    private function _randomizeFoods() {
        $foods = array("chicken", "apple", "fish", "tuna", "salad", 
                       "broccoli", "potatoes", "eggs", "soups", "avocado", 
                       "nut", "salmon", "cucumber", "strawberry", "wheat", "yogurt","tomatoes"
                      );

        return $foods[array_rand($foods, 1)];
    }

    private function _randomizeDietType() {
        $dietType = array("balanced", "low-carb", "low-fat", "high-protein");

        return $dietType[array_rand($dietType, 1)];
    }

    public function getRecipe() {
        $randomizeFood = $this->_randomizeFoods();
        $randomizeDietType = $this->_randomizeDietType();
        
        // Call food limit 3
        $url = 'https://api.edamam.com/search?q='.$randomizeFood.'&app_id=6571f46a&app_key=78a67102d8c0f942f7767eb848204e74&from=0&to=3&calories=150-500&diet='.$randomizeDietType.'&health=alcohol-free';

        $jsonData = file_get_contents($url);

        $apiData = json_decode($jsonData);

        return $apiData->hits;
    }

    public function getListFoods() {
        $randomizeFood = $this->_randomizeFoods();
        $randomizeDietType = $this->_randomizeDietType();
        
        // Call food limit 3
        $url = 'https://api.edamam.com/search?q='.$randomizeFood.'&app_id=6571f46a&app_key=78a67102d8c0f942f7767eb848204e74&from=0&to=10&calories=150-500&diet='.$randomizeDietType.'&health=alcohol-free';

        $jsonData = file_get_contents($url);

        $apiData = json_decode($jsonData);

        return $apiData->hits;
    }

    public function getSearchFood() {
        $input = $this->input->post('input-search');

        // Replace space in input with "-"
        $newInput = preg_replace("/\s+/", "-", $input);

        // Get Randomize Diet Type
        $randomizeDietType = $this->_randomizeDietType();

        $url = 'https://api.edamam.com/search?q='.$newInput.'&app_id=6571f46a&app_key=78a67102d8c0f942f7767eb848204e74&from=0&to=10&calories=150-500&diet='.$randomizeDietType.'&health=alcohol-free';

        $jsonData = file_get_contents($url);

        $apiData = json_decode($jsonData);

        return $apiData->hits;
    }

    public function getDetailFood() {
        $id = rawurlencode($this->input->get('url'));

        $url = 'https://api.edamam.com/search?r='.$id.'&app_id=6571f46a&app_key=78a67102d8c0f942f7767eb848204e74';

        $jsonData = file_get_contents($url);

        $apiData = json_decode($jsonData);

        return $apiData;
    }

    public function getReccomendationFoods() {
        $randomizeFood = $this->_randomizeFoods();
        $randomizeDietType = $this->_randomizeDietType();
        
        // Call food limit 3
        $url = 'https://api.edamam.com/search?q='.$randomizeFood.'&app_id=6571f46a&app_key=78a67102d8c0f942f7767eb848204e74&from=0&to=6&calories=100-350&diet='.$randomizeDietType.'&health=alcohol-free';

        $jsonData = file_get_contents($url);

        $apiData = json_decode($jsonData);

        return $apiData->hits;
    }
}