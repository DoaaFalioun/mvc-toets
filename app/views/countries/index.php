    <div class="col-12">
        <!--Op dzez plek komt de tabel -->
        <h1>LandenOverzicht</h1>
        <table class=" table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">name</th>
                    <th scope="col">capitalCity</th>
                    <th scope="col">continent</th>
                    <th scope="col">population</th>
                  
                </tr>
            </thead>
            <tbody>
                <?=$data["countryData"];?>
            </tbody>
        </table>
    </div>