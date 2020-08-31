# Школа разработчиков #2. Тестовое задание

Перейти к [решению](https://github.com/ekochetkov/braind-school-simple-php-tasks#%D1%80%D0%B5%D1%88%D0%B5%D0%BD%D0%B8%D0%B5).

Мы будем смотреть на правильность выполнения заданий, качество кода, аккуратность. Это тестовое задание будет учитываться не только при поступлении, но и при переходе с первого этапа на второй, поэтому постарайся показать максимум своих возможностей. Результат выполнения всех заданий можно положить в один репозиторий.

## Задание 1. Реализовать скрипт на PHP

В переменной $articleText хранится текст статьи. В переменной $articleLink хранится ссылка на страницу с полным текстом этой статьи.
Нужно в переменную $articlePreview записать анонс статьи (сокращённый текст) по правилам:
* обрезать до 200 символов;
* приписать многоточие;
* последние 3 слова и многоточие сделать ссылкой на полный текст статьи.

Дополнительно опиши текстом какие проблемы ты видишь в решении этой задачи? Что может пойти не так?

## Задание 2. Помочь программисту Пете победить эрроры и ворнинги

У программиста Пети есть код на PHP. У него было N фатальных ошибок и M ворнингов. Петя решил заставить код работать без ошибок и ворнингов, для чего ему его друг подарил подписку на хорошую IDE и github, так как только с помощью этих инструментов Петя смог бы найти и устранить все проблемы. Петя не очень опытный разработчик. Если Петя исправляет одну фатальную ошибку за коммит, то вместо неё появляется одна новая, если исправляет ворнинг в коммите, то вместо него появляется два новых ворнинга. Если Петя исправляет два ворнинга за один коммит, то появляется одна новая фатальная ошибка, и только когда Петя исправляет сразу две фатальные ошибки за один коммит, то не появляется ничего нового. Петя считает, что код будет полностью рабочим только если исправить все фатальные ошибки и ворнинги.

Определи минимальное количество коммитов, нужное для исправления всех багов. Напиши php-скрипт, который определит минимальное количество коммитов, необходимых для исправления кода.

|                     | Описание                                                                                                | Пример |
| ------------------- | ------------------------------------------------------------------------------------------------------- | ------ |
| **Входные данные**  | В форму на странице можно ввести два числа N, M (0 ≤ N, M ≤ 1000).                                      | 3 3    |
| **Выходные данные** | Нужно вывести одно число – минимальное количество коммитов, или -1, если исправить код Пети невозможно. | 9      |

## Задание 3. Помочь ученикам в изучении странной математики

В связи с реформой образования был введен новый предмет, на котором изучаются различные альтернативные науки. Одной из таких наук является странная математика. Её основное отличие от обычной математики в том, что числа в ней упорядочены не по возрастанию, а лексикографически, то есть как в словаре (сначала по первой цифре, затем, при равной первой цифре – по второй, и так далее). Кроме того, рассматривается не бесконечное множество натуральных чисел, а лишь первые n чисел. Так, например, если n=11, то числа в странной математике оказываются упорядочены следующим образом: 1, 10, 11, 2, 3, 4, 5, 6, 7, 8, 9.
Помоги ученикам в изучении этой науки – напиши программу, которая по заданному n находит место заданного числа k в порядке, определенном в странной математике. Например, если n=11 и k=2, программа должна выдать в качестве ответа 4.

Пожалуйста, не используй стандартную функцию сортировки, напиши свою.

# Решение

Решение каждого задания реализовано в отдельном файле. Для тестирования решений использовался фреймворк PHPUnit.

Версия PHP: 7.4

Запуск всех тестов: `vendor\bin\phpunit tests`

| Задание                                                        | Реализация                                                                                                                                                                                                                                                       | Тесты                                                                                                                 |
| -------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| Задание 1. Реализовать скрипт на PHP                           | [`task-1-article-preview.php`](https://github.com/ekochetkov/braind-school-simple-php-tasks/blob/master/task-1-article-preview.php)                                                                                                                              | [`tests\Task1Test.php`](https://github.com/ekochetkov/braind-school-simple-php-tasks/blob/master/tests/Task1Test.php) |
| Задание 2. Помочь программисту Пете победить эрроры и ворнинги | [`task-2-help-programmer-Petya.php`](https://github.com/ekochetkov/braind-school-simple-php-tasks/blob/master/task-2-help-programmer-Petya.php)<br>[`task-2-form.php`](https://github.com/ekochetkov/braind-school-simple-php-tasks/blob/master/task-2-form.php) | [`tests\Task2Test.php`](https://github.com/ekochetkov/braind-school-simple-php-tasks/blob/master/tests/Task2Test.php) |
| Задание 3. Помочь ученикам в изучении странной математики      | [`task-3-strange-math.php`](https://github.com/ekochetkov/braind-school-simple-php-tasks/blob/master/task-3-strange-math.php)                                                                                                                                    | [`tests\Task3Test.php`](https://github.com/ekochetkov/braind-school-simple-php-tasks/blob/master/tests/Task3Test.php) |

## Комментарий к заданию 1.

При решении задачи могут возникнуть следующие проблемы:

* Четкая граница в N символов скорее всего приведет к разрыву слова, что негативно сказывается на восприятии предпросмотра статьи.
* Не рассмотрена ситуация при пустом содержании статьи.
* Не рассмотрена ситуация количества слов в содержании статьи меньше 3.
* Возможно лучше сделать разделение не на основе фиксированного количества символов, а границ предложений или абзацев.

## Комментарий к заданию 2.

При решении задачи изначально бын выбран метод на основе динамического программирования (функция `minCommits`). Не смотря на более общий подход к решению задач подобного класса и возможности легкой адаптации под новые требования, его применение требует существенных затрат по временни (~ 5 сек.) и по памяти (~ 1 Гб), а также чаще всего возможно только с отключением ограничения по памяти интерпретатора PHP (`ini_set('memory_limit', '-1');`).

Альтернативой функции `minCommits` предложен более простой в реализации алгоритм (функция `minCommintsV2`), лишенная обозначенных выше недостатков, однако работающая исключительно в рамках заданных условий задачи.

Оба подхода показывают одинаковый результат, для одинаковых исходных данных, что подтверждается тестами.
