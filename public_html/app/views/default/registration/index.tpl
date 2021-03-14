<body>    
    <div class="container-registration">
        <div class="container-fluid">
            <form class="reg-form" action="/registration" method="POST">
                <h1>Регистрация на конференцию</h1>
                <div>
                    <label>Имя</label>
                    <input type="text" name="firstName">
                    {ERROR_FIRST_NAME}
                </div>
                <div>
                    <label>Фамилия</label>
                    <input type="text" name="lastName">
                    {ERROR_LAST_NAME}
                </div>
                <div>
                    <label>Email</label>
                    <input type="email" name="email">
                    {ERROR_EMAIL}
                </div>
                <div>
                    <label>Телефон</label>
                    <input type="tel" name="phone">
                    {ERROR_TEL}
                </div>
                <div>
                    <label>Интересующая тематика конференции</label>
                    <select name="thematics">
                        <option>Бизнес</option>
                        <option>Технологии</option>
                        <option>Реклама и Маркетинг</option>
                    </select>
                </div>
                <div>
                    <label>Предпочитаемый метод оплаты участия</label>
                    <select name="payments">
                        <option>WebMoney</option>
                        <option>Яндекс.Деньги</option>
                        <option>PayPal</option>
                        <option>Кредитная карта</option>
                    </select>
                </div>
                <div>
                    <input type="checkbox" name="mailing">
                    <label>
                        Получать рассылку о конференции
                    </label>
                </div>
                <div>
                    <button type="submit">Зарегистрироваться</button>
                </div>
            </form>
        </div>
    </div>
</body>