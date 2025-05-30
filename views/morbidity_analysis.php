<div class="container">
    <div class="row">
        <h2 class="text-center">Анализ заболеваемости детей</h2>
        <div class="date">
            <form action="nurse/morbidity_analysis" method="post">
                <div class="row mb-3">
                    <div class="col-3">
                        <label for="data_start" class="form-label">С</label>
                        <input type="date" class="form-control" name="data_start">
                    </div>
                    <div class="col-3">
                        <label for="data_end" class="form-label">По</label>
                        <input type="date" class="form-control" name="data_end">
                    </div>
                </div>
                <button class="btn btn-primary" type="submit">Показать</button>
            </form>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>Показатели</th>
                    <th>Кол-во случаев</th>
                    <th>Кол-во дней</th>
                    <th>На 1 ребенка</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach($result as $row){
                    echo '<tr>
                    <td>'.$row['name_morbidity'].'</td>
                    <td>'.$row['count(accounting.id_accounting)'].'</td>
                    <td>'.$row['sum(DATEDIFF(accounting.data_end, accounting.data_start))'].'</td>
                    <td>'.$row['count(accounting.id_kid)'].'</td>
                    </tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</div>