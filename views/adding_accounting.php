<div class="container">
    <div class="row">
        <h2 class="text-center">Добавление учета заболеваемости</h2>
        <form action="nurse/adding_accounting" method="post">
            <div class="mb-3">
                <label for="diagnosis" class="form-label">Диагноз</label>
                <select name="diagnosis" class="form-select">
                    <option value="Бактериальная дизентерия">Бактериальная дизентерия</option>
                    <option value="Энтерит">Энтерит</option>
                    <option value="Колит">Колит</option>
                    <option value="Гастроэнтерит">Гастроэнтерит</option>
                    <option value="Скарлатина">Скарлатина</option>
                    <option value="Ангина (острый тонзилит)">Ангина (острый тонзилит)</option>
                    <option value="Грипп">Грипп</option>
                    <option value="Острая инфекция верхних дыхательных путей">Острая инфекция верхних дыхательных путей</option>
                    <option value="Пневномия">Пневномия</option>
                    <option value="Несчастный случай">Несчастный случай</option>
                    <option value="Травма">Травма</option>
                    <option value="Другие заболевания">Другие заболевания</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="id_kid" class="form-label">Фамилия, имя ребенка</label>
                <select name="id_kid" class="form-select">
                    <?php
                    foreach($kids as $row){
                        echo '<option value="'.$row['id_kid'].'">'.$row['name_kid'].'</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="data_start" class="form-label">С</label>
                <input type="date" class="form-control" name="data_start">
            </div>
            <div class="mb-3">
                <label for="data_end" class="form-label">По</label>
                <input type="date" class="form-control" name="data_end">
            </div>
            <button type="submit" class="btn btn-primary">Добавить</button>
        </form>
    </div>
</div>