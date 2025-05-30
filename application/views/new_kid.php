<main>
    <div class="container">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <div class="text-center">
                    <h2>Добавить ребенка</h2>
                </div>
                <form method="post" action="leader/add_kid">
                    <div class="mb-3">
                        <label for="name_kid" class="form-label">Имя ребенка</label>
                        <input type="text" name="name_kid" class="form-control" placeholder="Введите имя ребенка">
                    </div>
                    <div class="mb-3">
                        <label for="age_kid" class="form-label">Возраст ребенка</label>
                        <input type="number" name="age_kid" class="form-control" placeholder="Введите возраст ребенка">
                    </div>
                    <div class="mb-3">
                        <label for="disabledSelect" class="form-label">Группа</label>
                        <select class="form-select" aria-label="Default select example" name="id_group">
                            <?php
                            foreach ($groups as $row) {
                                echo '<option value=' . $row['id_group'] . '>' . $row['name_group'] . '</option>';
                            }
                            ?>
                        </select>
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