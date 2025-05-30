<main>
    <div class="container">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <div class="text-center">
                    <h2>Добавить отсутствие ребенка</h2>
                </div>
                <form method="post" action="teacher/add_attendance">
                    <div class="mb-3">
                        <label for="id_kid" class="form-label">Имя ребенка</label>
                        <select name="id_kid" class="form-select">
                            <?php
                            foreach ($kids as $row) {
                                echo '<option value="' . $row['id_kid'] . '">' . $row['name_kid'] . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="data_attendance" class="form-label">Дата отсутствие</label>
                        <input type="date" name="data_attendance" class="form-control" placeholder="Введите дату отсутствие">
                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button class="btn btn-primary me-md-2" type="submit">Добавить</button>
                    </div>
                </form>
            </div>
            <div class="col-lg-2"></div>
        </div>
    </div>
</main>