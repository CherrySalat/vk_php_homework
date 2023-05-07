<?php
/*
    Написать код, позволяющий нескольким пользователям сыграть в следующую игру (например из командной строки)
        1) Определяется количество игроков, каждый игрок вводит свое имя
        2) Всем игрокам на старте выдается две случайных существующих страницы из Википедии. Стартовая и финишная
        3) Далее каждому из игроков предоставляется список страниц, на которые можно перейти по ссылкам с текущей страницы
        4) Каждый игрок выбирает страницу для перехода, после чего он получает список с новой страницы и так далее
        5) Игроки ходят по очереди
        6) Игрок перестает ходить, когда достигает финишной страницы. В этот момент фиксируется число переходов, за которое ему удалось достичь финиша
        7) После того, как все игроки достигли финиша, выводится таблица с их результатами.
        8) Дополнительно: Будет плюсом, если сможете посчитать кратчайший путь и вывести игрокам насколько они были близки к оптимальному числу переходов
    Условия:
        1 Код должен быть написан на PHP
        2 Нельзя использовать готовые фреймворки
        3 Код должен быть написан в ООП стиле
        4 Точки входа должны быть реализованы в виде API
    Ответ нужно прислать в виде ссылки на открытый гитхаб-репозиторий, в который запушен код решения.
 */

//1
$player_count = 2;
$player_names = [];
$player_names[0] = 'pank';
$player_names[1] = 'metaluga';

//2
$players_pages[$player_names[0]] = [
        'start' => 'wiki.start',
        'end' => 'wiki.end'
];

$players_pages[$player_names[1]] = [
        'start' => 'wiki.start',
        'end' => 'wiki.end'
];

//3

//4

//5
$game_end = false;
/*
while(!game_end) {
        for (int $player_turn = 0;$player_turn < count(player_names);player_turn++) {
                //some shit
        }
 */
//6

//7

echo "exit status 0\n";

