<div class="container">
    <div class="row">
        <h2 class="text-center">Списки болевших детей по группе </h2>
        <div class="date">
            <form action="nurse/lists_children" method="post">
                <div class="row mb-3">
                    <div class="col-3">
                        <label for="id_group" class="form-label">Выбрать группу:</label>
                        <select name="id_group" class="form-select">
                            <?php
                            foreach($groups as $row){
                                echo '<option value="'.$row['id_group'].'">'.$row['name_group'].'</option>';
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <button class="btn btn-primary" type="submit">Показать</button>
            </form>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Фамилия, имя ребенка</th>
                    <th scope="col">Вид заболевания</th>
                    <th scope="col">С</th>
                    <th scope="col">По</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach($result as $row){
                    echo '<tr>
                    <td>'.$row['name_kid'].'</td>
                    <td>'.$row['name_morbidity'].'</td>
                    <td>'.$row['data_start'].'</td>
                    <td>'.$row['data_end'].'</td>
                    </tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</div>