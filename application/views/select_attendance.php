<main>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center">
                    <h2>Список посещаемости детей</h2>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">№</th>
                            <th scope="col">Имя ребенка</th>
                            <th scope="col">Возраст</th>
                            <th scope="col">Группа</th>
                            <th scope="col">Дата посещаемости</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($attendance as $row) {
                            echo '
                        <tr><td>' . $row['id_attendance'] .
                                '</td><td>' . $row['name_kid'] .
                                '</td><td>' . $row['age_kid'] .
                                '</td><td>' . $row['name_group'] .
                                '</td><td>' . $row['data_attendance'] . '
                        </tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>