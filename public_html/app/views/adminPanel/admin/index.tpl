<body>
    <form action="/admin" method="POST">
        <table border="1">
            <tr>
                <th class="sorting">Имя</th>
                <th class="sorting">Фамилия</th>
                <th class="sorting">Электронная почта</th>
                <th class="sorting">Телефон</th>
                <th class="sorting">Интересующая тематика конференции</th>
                <th class="sorting">Предпочитаемый метод оплаты</th>
                <th class="sorting">Предпочение рассылки</th>
                <th class="sorting"></th>
            </tr>
            {USERS_TABLE}
        </table>

        <input type="submit" value="Удалить">
    </form>
</body>