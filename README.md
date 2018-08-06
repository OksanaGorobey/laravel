Задача: создание новостного сайта.
Уточнения:
1) Тексты, контент берём из Lorem Ipsum. Новостей и страниц должны быть несколько десятков.
2) Дизайн некритичен. Достаточно шаблона бутстрапа, или на ваше усмотрение.

Задания.
1. На главной странице – категории новостей, под каждой из них – список из 5 последних новостей этой
категории(без контента, только заголовок новости).
2. Реализовать слайдер – там крутятся 3-4 последние новости с фото(картинкой).

3. Жмем категорию – переходим в неё, в ней список новостей, выводится по 5 на страницу (заголовки, без
контента), под списком – пагинация - не менее 5 кнопок перехода. Отображается первая и последняя.
Между ними – кнопка с троеточием, при нажатии на которую на её месте плавно подгружается табличка с
номерами других страниц, среди которых можно выбрать нужную страницу .
4. При переходе по ссылке на новость – страничка с новостью. Предусмотреть наличие фото/картинок в
новости. Также нужно разместить блок с информацией, сколько людей ещё читают этот контент прямо
сейчас – а значит, цифры должны постоянно меняться. Например, каждые 3 сек обновляется кол-во
читающих новость, а под ней – общее кол-во людей, которые прочитали эту новость за весь период.
Количество читающих «сейчас» - смоделировать рандомно(от 0 до 5 чел), общее число прочитавших –
реально плюсуется из «читающих сейчас».
5. Под каждой новостью – небольшой список тегов, которые соответствуют данной новости. Пользователь,
нажимая на тег может получить весь список новостей с таким тегом.
6. В шапке сделать окно поиска – если пользователь начинает вводить какое-либо слово из имеющихся тегов
– оно должно подставляться в строку(или появляться в выпадающем списке если их несколько) – пример
–пользователь начинает вводить «финан» - появляется список «финансовые новости», «финансовые
прогнозы», «экономика и финансы»… Пользователь выбирает нужный вариант, и получает список новостей
с таким тегом. Принцип вывода - по 5 на страницу, под списком – пагинация.
7. У новости может быть категория «аналитика» - доступ к полному тексту такой новости должен быть только
у авторизованного пользователя. Для обычных, незарегистрированных(или неавторизованных) – только
первых 5 предложений статьи. Для таких новостей ещё нужен дополнительный раздел «аналитика», но
при этом новость будет и в своей обычной категории тоже. Например есть раздел «экономика» - там могут
быть и обычные новости, и аналитические статьи. А «аналитика» - только аналитика, из разных категорий, с
закрытым контентом.
8. Каждую новость авторизованный пользователь может комментировать. Комментарий можно «плюсовать»
и «минусовать». На главной странице – вывести список топ-5 комментаторов (по количеству комментов) –
при нажатии на любого из этих пользователей – вывод всех их комментариев, принцип вывода тот же что и
для новостей - по 5 на страницу, под списком – пагинация. Также на главной выводить топ-3 активных темы
– это значит что за последние сутки там оставили больше всего комментариев.

9. Под каждой новостью – в блоке комментариев – сначала выводить самые «заплюсованные» комментарии,
после них – все остальные. Комментариям можно отвечать, тогда эти ответы должны визуально быть
связаны, например выравниванием. Комментарий пользователь может изменить только в течение 1
минуты после его создания.
10. Реализовать фильтр поиска новостей – параметры – дата (за какой период), теги новостей, категории.
Выбор должен быть множественным – выбрать можно и дату, и несколько категорий и несколько тегов.
11. Для шапки сайта сделать меню, одним из пунктов которого должен быть выпадающий список, внутри
которого – одним из пунктов – ещё один выпадающий список.
12. Через 15 сек после открытия сайта, на любой странице – где-бы ни находился посетитель – должно всплыть
окно, с предложением подписаться на новостную рассылку – email и имя-фамилия.
13. При попытке закрытия сайта – должно появиться окно с вопросом-подтверждением «Вы действительно
хотите покинуть сайт?».
14. По бокам сайта (контент с новостями – посредине) должен быть блок рекламы – по 4 объявления с каждой
стороны – название товара(услуги), цена, фирма(сайт)-продавец. При наведении мышкой на объявление –
цена на объявлении должна уменьшиться на 10%, шрифт цены должен стать чуть крупнее и изменить цвет,
и возле рекламы должно плавно появиться объявление –«Купон на скидку - ..случайный набор символов..
– примените и получите скидку 10%.
15. Добавить категорию «Политика» - в ней комментарии могут появляться только после одобрения
модератора.
Реализовать админку
16. Добавление категорий, новостей. Для новости – добавлять теги, картинки.
17. Редактирование, добавление комментариев. Должен быть отдельный блок для ожидающих одобрения
комментариев (категория Политика) где комментарий можно сделать видимым (например чекбокс). Все
комментарии можно редактировать.
18. Добавление рекламных блоков на сайт.
19. Редактирование меню. Предусмотреть возможность вложенных меню/подменю – тогда в верстке они
будут выпадающими списками.
20. Реализовать изменение фона сайта и шапки из админки.
