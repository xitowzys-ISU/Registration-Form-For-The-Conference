<body>    
    <div class="container-registration">
        <div class="container-fluid">
            <form class="reg-form" action="/registration" method="POST">
                <h1>Регистрация на конференцию</h1>
                <div>
                    <label>Имя</label>
                    <input type="text" name="firstName" value="{POST_FIRSTNAME}">
                    {ERROR_FIRST_NAME}
                </div>
                <div>
                    <label>Фамилия</label>
                    <input type="text" name="lastName" value="{POST_LASTNAME}">
                    {ERROR_LAST_NAME}
                </div>
                <div>
                    <label>Email</label>
                    <input type="email" name="email" value="{POST_EMAIL}">
                    {ERROR_EMAIL}
                </div>
                <div>
                    <label>Телефон</label>
                    <input type="tel" name="phone" value="{POST_PHONE}">
                    {ERROR_TEL}
                </div>
                <div>
                    <label>Интересующая тематика конференции</label>
                    <select name="thematics">
                        <option {POST_SELECT_THEMATICS[Бизнес]}>Бизнес</option>
                        <option {POST_SELECT_THEMATICS[Технологии]}>Технологии</option>
                        <option {POST_SELECT_THEMATICS[Реклама и Маркетинг]}>Реклама и Маркетинг</option>
                    </select>
                </div>
                <div>
                    <label>Предпочитаемый метод оплаты участия</label>
                    <select name="payments">
                        <option {POST_SELECT_PAYMENTS[WebMoney]}>WebMoney</option>
                        <option {POST_SELECT_PAYMENTS[Яндекс.Деньги]}>Яндекс.Деньги</option>
                        <option {POST_SELECT_PAYMENTS[PayPal]}>PayPal</option>
                        <option {POST_SELECT_PAYMENTS[Кредитная карта]}>Кредитная карта</option>
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