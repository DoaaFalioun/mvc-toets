<?php
class Countries extends controller {
    public function __construct() {
        $this->countryModel = $this->model('Country');
       
    }

    public function index() {
        $result = $this->countryModel->getCountries();

        $rows = "";
        foreach ($result as $country) {
            // echo "Information: " . $user->user_name . $user->user_email;
            // echo "<br>";
            $rows .= "<tr>
            <td>$country->id</td>
            <td>$country->name</td>
            <td>$country->capitalCity</td>
            <td>$country->continent</td>
            <td>$country->population</td>
            </tr>";
            // $country->id .
            // $country->name .
            // $country->capitalCity .
            // $country->continent;
            // $country->population;
        }

        $data = [
            'title' => 'country overzicht',
            'countryData' => $rows
        ];

        $this->view('countries/index', $data);
    }
}