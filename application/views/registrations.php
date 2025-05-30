<main>
   <div class="container">
      <div class="row">
         <h3 class="text-center">Регистрация</h3>
         <div class="card">
            <form method="post" action="main/reg_db">
               <div class="mb-3">
                  <label for="fio" class="form-label">ФИО пользователя</label>
                  <input type="text" class="form-control" id="fio" name="fio" placeholder="Введите ФИО пользователя"
                     required>
               </div>
               <div class="mb-3">
                  <label for="telephone" class="form-label">Номер телефон</label>
                  <input type="text" class="form-control" id="telephone" name="telephone"
                     placeholder="Введите номер телефона" required>
               </div>
               <div class="mb-3">
                  <label for="email" class="form-label">Электронная почта</label>
                  <input type="email" class="form-control" id="email" name="email"
                     placeholder="Введите адрес электронной почты" required>
               </div>
               <div class="mb-3">
                  <label for="login" class="form-label">Логин</label>
                  <input type="text" class="form-control" id="login" name="login" placeholder="Введите логин" required>
               </div>
               <div class="mb-3">
                  <label for="password" class="form-label">Пароль</label>
                  <input type="text" class="form-control" id="password" name="password" placeholder="Введите пароль" required>
               </div>
               <select name="role">
                  <option value="руководитель организации">руководитель организации</option>
                  <option value="медицинская сестра">медицинская сестра</option>
                  <option value="воспитатель">воспитатель</option>
               </select><br><br>
               <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
            </form><br>
         </div>
      </div>
   </div>
</main>