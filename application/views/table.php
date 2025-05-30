<main>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center">
                    <h2>Список заболеваемости детей</h2>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">№</th>
                            <th scope="col">Имя ребенка</th>
                            <th scope="col">Возраст</th>
                            <th scope="col">Группа</th>
                            <th scope="col">Диагноз</th>
                            <th scope="col">С</th>
                            <th scope="col">По</th>
                            <th scope="col">Действие</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($table as $row) {
                            echo '
                                <tr><td>' . $row['id_accounting'] .
                                '</td><td>' . $row['name_kid'] .
                                '</td><td>' . $row['age_kid'] .
                                '</td><td>' . $row['name_group'] .
                                '</td><td>' . $row['name_morbidity'] .
                                '</td><td>' . $row['data_start'] .
                                '</td><td>' . $row['data_end'] .
                                '</td><td><form method="post" action="leader/delete">
                                <input type="hidden" name="id_accounting" value="' . $row['id_accounting'] .'">
                                <button type="submit" class="btn btn-danger">Удалить</button>
                                </form></td>
                                </tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>