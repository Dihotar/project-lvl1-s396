<?php
namespace BrainGames\Even;

use function cli\line;

function run()
{
    line('Welcome to the Brain Game!/n Answer "yes" if number even otherwise answer "no".');
    $name = \cli\prompt('May I have your name?');
    line("Hello, %s!", $name);
}

function numbers()
{
    for ($i = 0; $i < 3; $i++) {
    	line("Question: {rand(1, 20)}");
	$answer = \cli\prompt('Your answer:');
	if ($answer % 2 = 0) {
		line('Coorect!')
	} else {
		line("'yes' is wrong answer ;(. Correct answer was 'no'.");
		break;
	}
    }
    line("Congratulations, user"/*, $name*/);
    break;
}
