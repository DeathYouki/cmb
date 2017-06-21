<?php

namespace App;

use Moloquent;

class ProduitHaouta extends Moloquent
{
    public function buffer($data) {
        
    	$this->id = uniqid();

        $this->external_id = $data['external_id'];

        $this->name = $data['name'];

        $this->original_price = $data['variants_data'][0]['skuVal']['skuCalPrice'];

        $this->price = $this->original_price * 10;

        $this->images = $data['images'];

        $this->status = $data['status'];

        $this->details_html = $data['details_html'];

        if(isset($data['variants_ids'])) {

        	$this->variants_ids = $data['variants_ids'];

	        $this->variants_data = $data['variants_data'];

	        $this->variants_html = $data['variants_html'];
        }
        
        if(isset($data['tags'])){
        	$this->tags = $data['tags'];
        }
    }
}
