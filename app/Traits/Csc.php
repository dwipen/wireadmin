<?php
/**
 * for country state and city
 */
namespace App\Traits;

trait Csc
{
     public $countries = [], $states=[], $cities=[];

     public function setCountries()
     {
       $countries = json_decode(file_get_contents(storage_path('country.json')));
         foreach ($countries as $key => $country) {
             array_push($this->countries, [ 'id'=> $country->id, 'name'=>$country->name ]);
         }
     }

     public function updatedFormCountry()
     {
       $this->states = [];
         foreach ($this->countries as $key => $country) {
            if ($country['name']===$this->form['country']) {
              $states = json_decode(file_get_contents(storage_path('state.json')));

              foreach ($states as $key => $state) {
                 if ($state->country_id === $country['id']) {
                    array_push($this->states, [ 'id'=>$state->id, 'name'=>$state->name ]);
                 }
              }

            }
         }
     }

     public function updatedFormState()
     {
       $this->cities = [];
       foreach ($this->states as $key => $state) {
           if ($state['name'] === $this->form['state']) {
                $cities = json_decode(file_get_contents(storage_path('city.json')));

                foreach ($cities as $key => $city) {
                    if ($city->state_id===$state['id']) {
                        array_push($this->cities, [ 'id'=> $city->id, 'name'=>$city->name ]);
                    }
                }
                
           }
       }

     }

}
