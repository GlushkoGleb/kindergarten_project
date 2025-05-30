<div class="container">
    <div class="row">
        <h2 class="text-center">Журнал учета заболеваемости</h2>
        <div class="date">
            <form action="nurse/morbidity_log" method="post">
                <div class="row mb-3">
                    <div class="col-3">
                        <label for="month" class="form-label">Выбрать месяц:</label>
                        <input type="month" class="form-control" name="month">
                    </div>
                </div>
                <button class="btn btn-primary" type="submit">Показать</button>
            </form>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col" rowspan="2">№ п/п</th>
                    <th scope="col" rowspan="2">Фамилия, имя ребенка</th>
                    <th scope="col" rowspan="2">Возраст</th>
                    <th scope="col" rowspan="2">Диагноз</th>
                    <th scope="col" colspan="2">Дни болезни</th>
                </tr>
                <tr>
                    <th scope="col">с</th>
                    <th scope="col">по</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($result as $row) {
                    echo '<tr>
                    <td>' . $row['id_accounting'] . '</td>
                    <td>' . $row['name_kid'] . '</td>
                    <td>' . $row['age_kid'] . '</td>
                    <td>' . $row['name_morbidity'] . '</td>
                    <td>' . $row['data_start'] . '</td>
                    <td>' . $row['data_end'] . '</td>
                    </tr>';
                }
                foreach ($count as $row) {
                    echo '<tr>
                    <th scope="col" colspan="2">ИТОГО случаев заболевания</th>
                    <th scope="col" colspan="5">' . $row['count(id_accounting)'] . '</th>
                </tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</div>