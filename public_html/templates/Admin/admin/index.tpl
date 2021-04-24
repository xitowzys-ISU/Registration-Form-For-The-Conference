<body>
    <div class="container">
        <div class="users-table">
            <form action="" method="POST">
                <table border="1">
                    <tr>
                        <th>Дата</th>
                        <th>IP</th>
                        <th>Имя</th>
                        <th>Фамилия</th>
                        <th>Электронная почта</th>
                        <th>Телефон</th>
                        <th>Интересующая тематика конференции</th>
                        <th>Предпочитаемый метод оплаты</th>
                        <th>Предпочение рассылки</th>
                        <th><input type="checkbox"></th>
                    </tr>
                    {USERS_TABLE}
                </table>

                <div>
                    <input type="submit" value="Удалить">
                </div>
            </form>
        </div>
    </div>
</body>