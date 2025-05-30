<div class="container">
    <div class="row">
        <h2 class="text-center">Анализ здоровья детей </h2>
        <div class="date">
            <form action="nurse/analysis_children" method="post">
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
                    <th>Показатели (Группы здоровья в %)</th>
                    <th>Кол-во</th>

                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($result as $row) {
                    echo '<tr>
                    <td>' . $row['id_group'] . '</td>
                    <td>' . $row['COUNT(accounting.id_accounting) * 100 / (SELECT COUNT(*) from kids where kids.id_group = groups.id_group)'] . '%</td>
                    </tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</div>